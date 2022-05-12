<?php
require_once(__DIR__ . "/../../partials/nav.php");
is_logged_in(true);
?>
<?php
$db = getDB();

$stmt = $db->prepare("SELECT id, account_number, balance from Accounts where user_id = :uid and is_active = 1");
try {
    $stmt->execute([":uid" => get_user_id()]);
    $accounts = $stmt->fetchall(PDO::FETCH_ASSOC);
} catch (Exception $e) {
    error_log(var_export($e,true));
    flash("An unexpected error occurred, please try again", "danger");
}

if (isset($_POST["save"])) {
    $accNum = se($_POST, "accNum", null, false);

    

    try {
        $query = "SELECT balance from Accounts WHERE id = :aid";
        $stmt = $db->prepare($query);
        $stmt->execute(["aid" => $accNum]);
        $account = $stmt->fetch(PDO::FETCH_ASSOC);
        $b = (int)se($account, "balance", 0, false);
        //my table should automatically create the account number so I just need to assign the user
        
        $id = $db->lastInsertId();
        //this should mimic what's happening in the DB without requiring me to fetch the data
        if ($b <= 0) {
            $query = "UPDATE Accounts SET is_active = 0 where account_number = :accNum";
            $stmt = $db->prepare($query);
            $stmt->execute([":accNum" => $accNum]);    

            flash("Your account has been successfully closed", "success");
        }
        else {
            flash("Account must be empty before closing", "danger");
        }
        
        
    } catch (PDOException $e) {
        flash("An error occurred while creating your account", "danger");
        error_log(var_export($e, true));
    }
}
?>

<form method="POST" onsubmit="return validate(this);">
<div class="mb-3">
        <label for="accNum" class="form-label">Account</label>
        <select id="accNum" name="accNum" class="form-control">
            <?php foreach ($accounts as $al) : ?>
                <option> 
                    <?php se($al, 'account_number'); ?>
                </option>
            <?php endforeach; ?>
        </select>
    </div>
    <input type="submit" value="Close Account" name="save" />
</form>
<?php
require_once(__DIR__ . "/../../partials/flash.php");
?>