<?php
require_once(__DIR__ . "/../../partials/nav.php");
is_logged_in(true);
?>
<?php
$db = getDB();


try {
    $stmt = $db->prepare("SELECT id, account_number, account_type from Accounts where user_id = :uid and is_active = 1");
    $stmt->execute([":uid" => get_user_id()]);
    $results = $stmt->fetchall(PDO::FETCH_ASSOC);

    foreach ($results as $al) :
        if($al["account_type"] == "Loan") {
            $loanAccs[] = $al;
        }
        else {
            $moneyAccs[] = $al;
        }
    endforeach;
} catch (Exception $e) {
    error_log(var_export($e,true));
    flash("An unexpected error occurred, please try again", "danger");
    //echo "<pre>" . var_export($e->errorInfo, true) . "</pre>";
}

if (isset($_POST["save"])) {
    $srcAcc = se($_POST, "srcAcc", null, false);
    $destAcc = se($_POST, "destAcc", null, false);
    $transfer = se($_POST, "transfer", null, false);
    $memo = se($_POST, "memo", null, false);

    try {
        $query = "SELECT balance from Accounts WHERE id = :aid";
        $stmt = $db->prepare($query);
        $stmt->execute(["aid" => $srcAcc]);
        $account = $stmt->fetch(PDO::FETCH_ASSOC);
        $b = (int)se($account, "balance", 0, false);

        if ($b < $transfer) {
            flash("Cannot transfer more than the account holds");
        }
        else if ($srcAcc == $destAcc) {}
        else {
            $id = $db->lastInsertId();
            //this should mimic what's happening in the DB without requiring me to fetch the data
            

            //src account
            $query = "INSERT INTO Transactions (account_src, account_dest, balance_change, transaction_type, memo, expected_total) 
            VALUES (:accSrc, :accDest, :balC, :tranType, :mem, NULL)";
            $stmt = $db->prepare($query);
            $stmt->execute([":accSrc" => $srcAcc, ":accDest" => $destAcc, ":balC" => -$transfer, ":tranType" => "Internal Transfer", ":mem" => $memo]);
            $id = $db->lastInsertId();

            $query = "UPDATE Accounts SET balance = (SELECT IFNULL(SUM(balance_change), 0) 
            from Transactions WHERE account_src = :src) where id = :src";
            $stmt = $db->prepare($query);
            $stmt->execute([":src" => $srcAcc]);

            $query = "UPDATE Transactions SET expected_total = (SELECT IFNULL(SUM(balance), 0) from Accounts WHERE id = :aid) where id = :id";
            $stmt = $db->prepare($query);
            $stmt->execute(["aid" => $srcAcc, "id" => $id]);
            
            //dest account
            $query = "INSERT INTO Transactions (account_src, account_dest, balance_change, transaction_type, memo, expected_total) 
            VALUES (:accSrc, :accDest, :balC, :tranType, :mem, :exTot)";
            $stmt = $db->prepare($query);
            $stmt->execute([":accSrc" => $destAcc, ":accDest" => $srcAcc, ":balC" => $transfer, ":tranType" => "Internal Transfer", ":mem" => $memo, ":exTot" => $transfer]);
            $id = $db->lastInsertId();

            $query = "UPDATE Accounts SET balance = (SELECT IFNULL(SUM(balance_change), 0) 
            from Transactions WHERE account_src = :src) where id = :src";
            $stmt = $db->prepare($query);
            $stmt->execute([":src" => $destAcc]);

            $query = "UPDATE Transactions SET expected_total = (SELECT IFNULL(SUM(balance), 0) from Accounts WHERE id = :aid) where id = :id";
            $stmt = $db->prepare($query);
            $stmt->execute(["aid" => $destAcc, "id" => $id]);
            //updates accounts table balance
            
            

            

            flash("Your transfer was successful", "success");
            /*
            die(header("Location: $BASE_PATH" . "/get_accounts.php"));
            */
        }
    } catch (PDOException $e) {
        flash("An error occurred while transferring", "danger");
        error_log(var_export($e, true));
    }
}
?>

<script>
    function validate(form) {
        let sAcc = form.srcAcc.value;
        let dAcc = form.destAcc.value;
        let dep = form.transfer.value;
        let isValid = true;
        //TODO add other client side validation....

        //example of using flash via javascript
        //find the flash container, create a new element, appendChild
        if (sAcc === dAcc) {
            flash("Accounts must be different", "warning");
            isValid = false;
        }
        if (!(sAcc)) {
            flash("Account must not be empty", "warning");
            isValid = false;
        }

        if (!(dep > 1)) {
            flash("Transfer must be greater than 1", "warning");
            isValid = false;
        }
        return isValid;
    }
</script>

<form method="POST" onsubmit="return validate(this);">
    <div class="mb-3">
        <label for="srcAcc" class="form-label">Source Account</label>
        <select id="srcAcc" name="srcAcc" class="form-control">
            <?php foreach ($moneyAccs as $al) : ?>
                <option value="<?php se($al, 'id'); ?>"><?php se($al, 'account_number'); ?></option>
            <?php endforeach; ?>
        </select>
    </div>
    <div class="mb-3">
        <label for="transfer">Transfer</label>
        <input type="number" name="transfer" id="transfer" value="<?php se("5"); ?>" />
    </div>
    <div class="mb-3">
        <label for="destAcc" class="form-label">Loan Account</label>
        <select id="destAcc" name="destAcc" class="form-control">
            <?php foreach ($loanAccs as $al) : ?>
                <option value="<?php se($al, 'id'); ?>"><?php se($al, 'account_number'); ?></option>
            <?php endforeach; ?>
        </select>
    </div>
    <div class="mb-3">
        <label for="memo">Memo</label>
        <input type="text" name="memo" id="memo" />
    </div>
    <input type="submit" value="Pay Loan" name="save" />
</form>
<?php
require_once(__DIR__ . "/../../partials/flash.php");
?>
