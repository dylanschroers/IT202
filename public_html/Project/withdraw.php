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
    $accNum = se($_POST, "accNum", null, false);
    $withdraw = se($_POST, "withdraw", null, false);
    $memo = se($_POST, "memo", null, false);

    try {
        $query = "SELECT balance from Accounts WHERE id = :aid";
        $stmt = $db->prepare($query);
        $stmt->execute(["aid" => $accNum]);
        $account = $stmt->fetch(PDO::FETCH_ASSOC);
        $b = (int)se($account, "balance", 0, false);

        if ($b < $withdraw) {
            flash("Cannot withdraw more than the account holds");
        }
        else {
            $id = $db->lastInsertId();
            //this should mimic what's happening in the DB without requiring me to fetch the data
            
            //world account
            $query = "INSERT INTO Transactions (account_src, account_dest, balance_change, transaction_type, memo, expected_total) VALUES (:accSrc, :accDest, :balC, :tranType, :mem, NULL)";
            $stmt = $db->prepare($query);
            $stmt->execute([":accSrc" => "-1", ":accDest" => $accNum, ":balC" => $withdraw, ":tranType" => "Withdraw", ":mem" => $memo]);
            $id = $db->lastInsertId();

            $query = "UPDATE Accounts SET balance = (SELECT IFNULL(SUM(balance_change), 0) 
            from Transactions WHERE account_src = :src) where id = :src";
            $stmt = $db->prepare($query);
            $stmt->execute([":src" => "-1"]);

            $query = "UPDATE Transactions SET expected_total = (SELECT balance from Accounts WHERE id = :aid) where id = :id";
            $stmt = $db->prepare($query);
            $stmt->execute(["aid" => "-1", "id" => $id]);

            //user account
            $query = "INSERT INTO Transactions (account_src, account_dest, balance_change, transaction_type, memo, expected_total) VALUES (:accSrc, :accDest, :balC, :tranType, :mem, NULL)";
            $stmt = $db->prepare($query);
            $stmt->execute([":accSrc" => $accNum, ":accDest" => "-1", ":balC" => -1*$withdraw, ":tranType" => "Withdraw",":mem" => $memo]);
            $id = $db->lastInsertId();

            $query = "UPDATE Accounts SET balance = (SELECT IFNULL(SUM(balance_change), 0) 
            from Transactions WHERE account_src = :src) where id = :src";
            $stmt = $db->prepare($query);
            $stmt->execute([":src" => $accNum]);

            
            $query = "UPDATE Transactions SET expected_total = (SELECT balance from Accounts WHERE id = :aid) where id = :id";
            $stmt = $db->prepare($query);
            $stmt->execute(["aid" => $accNum, "id" => $id]);
            //updates accounts table balance
            

            flash("Your withdraw was successful", "success");
            /*
            die(header("Location: $BASE_PATH" . "/get_accounts.php"));
            */
        }

    } catch (PDOException $e) {
        flash("An error occurred while withdrawing from your account", "danger");
        error_log(var_export($e, true));
    }
}
?>

<script>
    function validate(form) {
        let acc = form.accNum.value;
        let wit = form.withdraw.value;
        let isValid = true;
        //TODO add other client side validation....

        //example of using flash via javascript
        //find the flash container, create a new element, appendChild

        if (!(acc)) {
            alert("Account must not be empty", "warning");
            isValid = false;
        }

        if (!(wit > 0)) {
            alert("Withdraw must be greater than 0");
            isValid = false;
        }
        return isValid;
    }
</script>

<form method="POST" onsubmit="return validate(this);">
    <div class="mb-3">
        <label for="accNum" class="form-label">Accounts</label>
        <select id="accNum" name="accNum" class="form-control">
            <?php foreach ($results as $al) : ?>
                <option value="<?php se($al, 'id'); ?>"><?php se($al, 'account_number'); ?></option>
            <?php endforeach; ?>
        </select>
    </div>
    <div class="mb-3">
        <label for="withdraw">Withdraw</label>
        <input type="number" name="withdraw" id="withdraw" value="<?php se("5"); ?>" />
    </div>
    <div class="mb-3">
        <label for="memo">Memo</label>
        <input type="text" name="memo" id="memo" />
    </div>
    <input type="submit" value="Withdraw" name="save" />
</form>
<?php
require_once(__DIR__ . "/../../partials/flash.php");
?>
