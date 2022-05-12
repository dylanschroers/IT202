<?php
require_once(__DIR__ . "/../../partials/nav.php");
is_logged_in(true);
?>

<?php
$db = getDB();

$stmt = $db->prepare("SELECT id, account_number from Accounts where user_id = :uid and account_type != :acctype");
try {
    $stmt->execute([":uid" => get_user_id(), ":acctype" => "Loan"]);
    $results = $stmt->fetchall(PDO::FETCH_ASSOC);
} catch (Exception $e) {
    error_log(var_export($e,true));
    flash("An unexpected error occurred, please try again", "danger");
    //echo "<pre>" . var_export($e->errorInfo, true) . "</pre>";
}

if (isset($_POST["save"])) {
    $destAcc = se($_POST, "destAcc", null, false);
    $loan = se($_POST, "loan", null, false);
    $memo = se($_POST, "memo", null, false);
    $apy = 0.125;

    try {
        $query = "SELECT balance from Accounts WHERE id = :aid";
        $stmt = $db->prepare($query);
        $stmt->execute(["aid" => $destAcc]);
        $account = $stmt->fetch(PDO::FETCH_ASSOC);
        $b = (int)se($account, "balance", 0, false);

        if ($b < $loan) {
            flash("Cannot transfer more than the account holds");
        }
        else {
            $id = $db->lastInsertId();
            //creates the loan account
            $query = "INSERT INTO Accounts (user_id, account_type, account_number, balance) VALUES (:uid, :accType, NULL, :bal)";
            $user_id = get_user_id(); //caching a reference
            $stmt = $db->prepare($query);
            $stmt->execute([":uid" => $user_id, ":accType" => "Loan", ":bal" => $loan]);
            $id = $db->lastInsertId();

            $account_number = str_pad($id, 12, "0", STR_PAD_LEFT);
            $query = "UPDATE Accounts SET account_number = :account_number where id = :id";
            $stmt = $db->prepare($query);
            $stmt->execute([":id" => $id, ":account_number" => $account_number]);

            $query = "INSERT INTO SysProp (account_number, apy) VALUES (:accNum, :apy)";
            $stmt = $db->prepare($query);
            $stmt->execute(["accNum" => $account_number, ":apy" => $apy]);

            //loan account
            $query = "INSERT INTO Transactions (account_src, account_dest, balance_change, transaction_type, memo, expected_total) 
            VALUES (:accSrc, :accDest, :balC, :tranType, :mem, NULL)";
            $stmt = $db->prepare($query);
            $stmt->execute([":accSrc" => $account_number, ":accDest" => $destAcc, ":balC" => $loan*($apy+1), ":tranType" => "Loan", ":mem" => $memo]);
            $id = $db->lastInsertId();

            $query = "UPDATE Accounts SET balance = (SELECT IFNULL(SUM(balance_change), 0) 
            from Transactions WHERE account_src = :src) where id = :src";
            $stmt = $db->prepare($query);
            $stmt->execute([":src" => $account_number]);

            $query = "UPDATE Transactions SET expected_total = (SELECT IFNULL(SUM(balance), 0) from Accounts WHERE id = :aid) where id = :id";
            $stmt = $db->prepare($query);
            $stmt->execute(["aid" => $account_number, "id" => $id]);
            
            //dest account
            $query = "INSERT INTO Transactions (account_src, account_dest, balance_change, transaction_type, memo, expected_total) 
            VALUES (:accSrc, :accDest, :balC, :tranType, :mem, :exTot)";
            $stmt = $db->prepare($query);
            $stmt->execute([":accSrc" => $destAcc, ":accDest" => $account_number, ":balC" => $loan, ":tranType" => "Loan", ":mem" => $memo, ":exTot" => $loan]);
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
        let dAcc = form.destAcc.value;
        let loan = form.loan.value;
        let isValid = true;
        //TODO add other client side validation....

        //example of using flash via javascript
        //find the flash container, create a new element, appendChild
        if (sAcc === dAcc) {
            flash("Accounts must be different", "warning");
            isValid = false;
        }

        if (!(loan > 500)) {
            flash("Loan must be greater than 1", "warning");
            isValid = false;
        }
        return isValid;
    }
</script>

<form method="POST" onsubmit="return validate(this);">
    <div class="mb-3">
        <label for="destAcc" class="form-label">Destination Account</label>
        <select id="destAcc" name="destAcc" class="form-control">
            <?php foreach ($results as $al) : ?>
                <option value="<?php se($al, 'id'); ?>"><?php se($al, 'account_number'); ?></option>
            <?php endforeach; ?>
        </select>
    </div>
    <div class="mb-3">
        <label for="loan">Loan Amount</label>
        <input type="number" name="loan" id="loan" value="<?php se("500"); ?>" />
    </div>
    <div class="mb-3">
        <label for="memo">Memo</label>
        <input type="text" name="memo" id="memo" />
    </div>
    <input type="submit" value="Take Loan" name="save" />
</form>
<?php
require_once(__DIR__ . "/../../partials/flash.php");
?>
