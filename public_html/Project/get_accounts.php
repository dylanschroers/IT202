<?php
    require_once(__DIR__ . "/../../partials/nav.php");
    is_logged_in(true);

    $db = getDB();
    //select fresh data from table
    $transferType = ["", "Deposit", "Withdraw", "Internal Transfer", "External Transfer"];
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
        $srtDate = se($_POST, "srtDate", null, false);
        $endDate = se($_POST, "endDate", null, false);

        $query = "SELECT account_src, account_dest, balance_change, transaction_type, expected_total, memo, created 
        from Transactions WHERE 1=1";
        
        //$query .= " ";
        $params = [];
        if (!empty($accNum)) {
            $query .= " AND account_src = :id";
            $params[":id"] = "$accNum";
        }
        if (!empty($typeFilter)) {
            $query .= " AND transaction_type = :fil";
            $params[":fil"] = "$typeFilter";
        }
        if (!empty($srtDate) && !empty($endDate)) {
            $query .= " AND (created > :srt and created < :end)";
            $params[":srt"] = "$srtDate + 00:00:00";
            $params[":end"] = "$endDate + 23:59:59";
        }
        
        $stmt = $db->prepare($query);
        

        try {
            $stmt->execute($params);
            $accHist = $stmt->fetchall(PDO::FETCH_ASSOC);
            flash("Should've worked =)", "success");
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
    <!-- filters -->
    <div class="mb-3">
        <label for="typeFilter" class="form-label">Transaction Type</label>
        <select id="typeFilter" name="typeFilter" class="form-control">
            <?php foreach ($transferType as $type) : ?>
                <option>
                    <?php se($type, 'transferType'); ?>
                </option>
            <?php endforeach; ?>
        </select>
    </div>
    <input type="date" id="srtDate" name="srtDate">
    
    <input type="date" id="endDate" name="endDate">

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