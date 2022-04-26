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
    $deposit = se($_POST, "deposit", null, false);
    $memo = se($_POST, "memo", null, false);

    try {
        $id = $db->lastInsertId();
        //this should mimic what's happening in the DB without requiring me to fetch the data
        
        //deposit
        $query = "INSERT INTO Transactions (account_src, account_dest, balance_change, transaction_type, memo, expected_total) VALUES (:accSrc, :accDest, :balC, :tranType, :mem, :exTot)";
        $stmt = $db->prepare($query);
        $stmt->execute([":accSrc" => "-1", ":accDest" => $accNum, ":balC" => -1*$deposit, ":tranType" => "Deposit", ":mem" => $memo, ":exTot" => -1*$deposit]);

        $query = "INSERT INTO Transactions (account_src, account_dest, balance_change, transaction_type, memo, expected_total) VALUES (:accSrc, :accDest, :balC, :tranType, :mem, :exTot)";
        $stmt = $db->prepare($query);
        $stmt->execute([":accSrc" => $accNum, ":accDest" => "-1", ":balC" => $deposit, ":tranType" => "Deposit", ":mem" => $memo, ":exTot" => $deposit]);

        //updates accounts table balance
        
        $query = "UPDATE Accounts SET balance = (SELECT IFNULL(SUM(balance_change), 0) 
        from Transactions WHERE account_src = :src) where id = :src";
        $stmt = $db->prepare($query);
        $stmt->execute([":src" => $accNum]);

        $query = "UPDATE Accounts SET balance = (SELECT IFNULL(SUM(balance_change), 0) 
        from Transactions WHERE account_src = :src) where id = :src";
        $stmt = $db->prepare($query);
        $stmt->execute([":src" => "-1"]);
        flash("Your deposit was successful", "success");
        /*
        die(header("Location: $BASE_PATH" . "/get_accounts.php"));
        */

    } catch (PDOException $e) {
        flash("An error occurred while depositing into your account", "danger");
        error_log(var_export($e, true));
    }
}
?>

<script>
    function validate(form) {
        let acc = form.al.value;
        let dep = form.deposit.value;
        let isValid = true;
        //TODO add other client side validation....

        //example of using flash via javascript
        //find the flash container, create a new element, appendChild

        if (!(acc)) {
            flash("Account must not be empty", "warning");
            isValid = false;
        }

        if (!(dep > 0)) {
            flash("Deposit must be greater than 0", "warning");
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
        <label for="deposit">Deposit</label>
        <input type="number" name="deposit" id="deposit" value="<?php se("5"); ?>" />
    </div>
    <div class="mb-3">
        <label for="memo">Memo</label>
        <input type="text" name="memo" id="memo" />
    </div>
    <input type="submit" value="Deposit" name="save" />
</form>
<?php
require_once(__DIR__ . "/../../partials/flash.php");
?>
