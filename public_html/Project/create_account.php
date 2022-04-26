<?php
require_once(__DIR__ . "/../../partials/nav.php");
is_logged_in(true);
?>
<?php
$db = getDB();
if (isset($_POST["save"])) {
    $accType = se($_POST, "accType", null, false);
    $deposit = se($_POST, "deposit", null, false);

    try {
        //my table should automatically create the account number so I just need to assign the user
        $query = "INSERT INTO Accounts (user_id, account_type, account_number, balance) VALUES (:uid, :accType, NULL, :bal)";
        $user_id = get_user_id(); //caching a reference
        $stmt = $db->prepare($query);
        $stmt->execute([":uid" => $user_id, ":accType" => $accType, ":bal" => $deposit]);
        
        $id = $db->lastInsertId();
        //this should mimic what's happening in the DB without requiring me to fetch the data
        $account_number = str_pad($id, 12, "0", STR_PAD_LEFT);
        $query = "UPDATE Accounts SET account_number = :account_number where id = :id";
        $stmt = $db->prepare($query);
        $stmt->execute([":id" => $id, ":account_number" => $account_number]);
        //deposit
        $query = "INSERT INTO Transactions (account_src, account_dest, balance_change, transaction_type, expected_total) VALUES (:accSrc, :accDest, :balC, :tranType, :exTot)";
        $stmt = $db->prepare($query);
        $stmt->execute([":accSrc" => "-1", ":accDest" => $id, ":balC" => -1*$deposit, ":tranType" => "Deposit", ":exTot" => -1*$deposit]);

        $query = "INSERT INTO Transactions (account_src, account_dest, balance_change, transaction_type, expected_total) VALUES (:accSrc, :accDest, :balC, :tranType, :exTot)";
        $stmt = $db->prepare($query);
        $stmt->execute([":accSrc" => $id, ":accDest" => '-1', ":balC" => $deposit, ":tranType" => "Deposit", ":exTot" => $deposit]);
        
        flash("Welcome! Your account has been created successfully", "success");
        die(header("Location: $BASE_PATH" . "/get_accounts.php"));

    } catch (PDOException $e) {
        flash("An error occurred while creating your account", "danger");
        error_log(var_export($e, true));
    }
}
?>

<form method="POST" onsubmit="return validate(this);">
    <div class="mb-3">
        <label for="accType">Account Type</label>
        <input type="text" name="accType" id="accType" value="<?php se("Checking"); ?>" />
    </div>
    <div class="mb-3">
        <label for="deposit">Deposit</label>
        <input type="number" name="deposit" id="deposit" value="<?php se("5"); ?>" />
    </div>
    <input type="submit" value="Create Account" name="save" />
</form>
<?php
require_once(__DIR__ . "/../../partials/flash.php");
?>
<script>
    function validate(form) {
        let accT = form.accType.value;
        let dep = form.deposit.value;
        let isValid = true;
        //TODO add other client side validation....

        //example of using flash via javascript
        //find the flash container, create a new element, appendChild

        if (!(accT)) {
            flash("Account type must not be empty", "warning");
            isValid = false;
        }

        if (!(dep > 5)) {
            flash("Deposit must be greater than 5", "warning");
            isValid = false;
        }
        return isValid;
    }
</script>