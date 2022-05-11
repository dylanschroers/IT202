<?php
require_once(__DIR__ . "/../../partials/nav.php");
is_logged_in(true);
?>
<?php
$db = getDB();

$stmt = $db->prepare("SELECT id, account_number from Accounts where user_id = :uid");
try {
    $stmt->execute([":uid" => get_user_id()]);
    $results = $stmt->fetchall(PDO::FETCH_ASSOC);
} catch (Exception $e) {
    error_log(var_export($e,true));
    flash("An unexpected error occurred, please try again", "danger");
    //echo "<pre>" . var_export($e->errorInfo, true) . "</pre>";
}

if (isset($_POST["save"])) {
    $srcAcc = se($_POST, "srcAcc", null, false);
    $destName = se($_POST, "destName", null, false);
    $destLastFour = se($_POST, "destAcc", null, false);
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
        else {
            $id = $db->lastInsertId();
            //this should mimic what's happening in the DB without requiring me to fetch the data
            
            //dest account ID
            $query = "SELECT Accounts.id FROM Users JOIN Accounts on Accounts.user_id = Users.id 
            WHERE nameLast = :nmLst AND account_number LIKE :dstLF";
            $stmt = $db->prepare($query);
            $stmt->execute([":nmLst" => $destName, ":dstLF" => "%$destLastFour"]);
            $destAcc = $stmt->fetch(PDO::FETCH_ASSOC);
            $destID = (int)se($destAcc, "id", 0, false);

            //src account
            $query = "INSERT INTO Transactions (account_src, account_dest, balance_change, transaction_type, memo, expected_total) 
            VALUES (:accSrc, :accDest, :balC, :tranType, :mem, NULL)";
            $stmt = $db->prepare($query);
            $stmt->execute([":accSrc" => $srcAcc, ":accDest" => $destID, ":balC" => -1*$transfer, ":tranType" => "External Transfer", ":mem" => $memo]);
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
            $stmt->execute([":accSrc" => $destID, ":accDest" => $srcAcc, ":balC" => $transfer, ":tranType" => "External Transfer", ":mem" => $memo, ":exTot" => $transfer]);
            $id = $db->lastInsertId();

            $query = "UPDATE Accounts SET balance = (SELECT IFNULL(SUM(balance_change), 0) 
            from Transactions WHERE account_src = :src) where id = :src";
            $stmt = $db->prepare($query);
            $stmt->execute([":src" => $destID]);

            $query = "UPDATE Transactions SET expected_total = (SELECT IFNULL(SUM(balance), 0) from Accounts WHERE id = :aid) where id = :id";
            $stmt = $db->prepare($query);
            $stmt->execute(["aid" => $destID, "id" => $id]);
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
            <?php foreach ($results as $al) : ?>
                <option value="<?php se($al, 'id'); ?>"><?php se($al, 'account_number'); ?></option>
            <?php endforeach; ?>
        </select>
    </div>
    <div class="mb-3">
        <label for="transfer">Transfer</label>
        <input type="number" name="transfer" id="transfer" value="<?php se("5"); ?>" />
    </div>
    <div class="mb-3">
        <label for="destName">Recipient's Last Name</label>
        <input type="text" name="destName" id="destName" />
    </div>
    <div class="mb-3">
        <label for="destAcc">Destination Account (Last 4 #s)</label>
        <input type="number" name="destAcc" id="destAcc" value="<?php se("0000"); ?>" />
    </div>
    <div class="mb-3">
        <label for="memo">Memo</label>
        <input type="text" name="memo" id="memo" />
    </div>
    <input type="submit" value="Transfer" name="save" />
</form>
<?php
require_once(__DIR__ . "/../../partials/flash.php");
?>