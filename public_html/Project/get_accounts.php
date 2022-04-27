<?php
    require_once(__DIR__ . "/../../partials/nav.php");
    is_logged_in(true);

    $db = getDB();
    //select fresh data from table
    $stmt = $db->prepare("SELECT account_number, account_type, modified, balance from Accounts where user_id = :uid LIMIT 5");
    try {
        $stmt->execute([":uid" => get_user_id()]);
        $accounts = $stmt->fetchall(PDO::FETCH_ASSOC);
    } catch (Exception $e) {
        error_log(var_export($e,true));
        flash("An unexpected error occurred, please try again", "danger");
        //echo "<pre>" . var_export($e->errorInfo, true) . "</pre>";
    }
    $accHist = [];
    if (isset($_POST["save"])) {
        $accNum = se($_POST, "accNum", null, false);
        $typeFilter = se($_POST, "typeFilter", null, false);
        
        if ($typeFilter != NULL) {
            $stmt = $db->prepare("SELECT account_src, account_dest, balance_change, transaction_type, expected_total, memo, 
            created from Transactions where account_src = :id and transaction_type = :fil ORDER BY created DESC LIMIT 10"); 
            $stmt->execute([":id" => $accNum, ":fil" => $typeFilter]);   
        } 
        else {
            $stmt = $db->prepare("SELECT account_src, account_dest, balance_change, transaction_type, expected_total, memo, created 
            from Transactions where account_src = :id ORDER BY created DESC LIMIT 10");
            $stmt->execute([":id" => $accNum]);

        }
        try {
            $accHist = $stmt->fetchall(PDO::FETCH_ASSOC);
        } catch (Exception $e) {
            error_log(var_export($e,true));
            flash("An unexpected error occurred, please try again", "danger");
            //echo "<pre>" . var_export($e->errorInfo, true) . "</pre>";
        }
    }
?>
<?php if (!isset($accounts)) : ?>
    
<?php else : ?>
    <table class="table">
        <?php foreach ($accounts as $index => $record) : ?>
                <?php if ($index == 0) : ?>
                    <thead>
                    <?php foreach ($record as $column => $value) : ?>
                        <th><?php se($column); ?></th>
                    <?php endforeach; ?>
                    </thead>
            <?php endif; ?>
            <tr>
                <?php foreach ($record as $column => $value) : ?>
                    <td><?php se($value, null, "N/A"); ?></td>
                <?php endforeach; ?>
                <td>
                    <!-- other action buttons can go here-->
                </td>
            </tr>
        <?php endforeach; ?>
    </table>
<?php endif; ?>

<form method="POST" onsubmit="return validate(this);">
    <div class="mb-3">
        <label for="al" class="form-label">Accounts</label>
        <select id="al" name="accNum" class="form-control">
            <?php foreach ($accounts as $al) : ?>
                <option>
                    <?php se($al, 'account_number'); ?>
                </option>
            <?php endforeach; ?>
        </select>
    </div>
    <div class="mb-3">
        <label for="typeFilter" class="form-label">Accounts</label>
        <select id="typeFilter" name="typeFilter" class="form-control">
            <?php foreach ($accounts as $al) : ?>
                <option>
                    <?php se($al, 'account_number'); ?>
                </option>
            <?php endforeach; ?>
        </select>
    </div>
    <input type="submit" value="View History" name="save" />
</form>

<?php if (count($accHist) == 0) : ?>
    
<?php else : ?>
    <table class="table">
        <?php foreach ($accHist as $index => $record) : ?>
                <?php if ($index == 0) : ?>
                    <thead>
                    <?php foreach ($record as $column => $value) : ?>
                        <th><?php se($column); ?></th>
                    <?php endforeach; ?>
                    </thead>
            <?php endif; ?>
            <tr>
                <?php foreach ($record as $column => $value) : ?>
                    <td><?php se($value, null, "N/A"); ?></td>
                <?php endforeach; ?>
                <td>
                    <!-- other action buttons can go here-->
                </td>
            </tr>
        <?php endforeach; ?>
    </table>
<?php endif; ?>




<?php
    require_once(__DIR__ . "/../../partials/flash.php");
?>