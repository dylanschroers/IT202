<?php
    require_once(__DIR__ . "/../../partials/nav.php");
    is_logged_in(true);

    $db = getDB();
    //select fresh data from table
    $transferType = ["", "Deposit", "Withdraw", "Transfer", "External Transfer"];
    //$stmt = $db->prepare("SELECT account_number, account_type, modified, balance from Accounts where user_id = :uid and is_active = 1");
    $stmt = $db->prepare("SELECT Accounts.account_number, account_type, Accounts.modified, balance, apy FROM Accounts
    LEFT JOIN SysProp ON Accounts.account_number = SysProp.account_number
    WHERE Accounts.user_id = :uid and is_active = 1
    UNION
    SELECT Accounts.account_number, account_type, Accounts.modified, balance, apy FROM Accounts
    RIGHT JOIN SysProp ON Accounts.account_number = SysProp.account_number
    WHERE Accounts.user_id = :uid and is_active = 1");
    try {
        $stmt->execute([":uid" => get_user_id()]);
        $accounts = $stmt->fetchall(PDO::FETCH_ASSOC);


        for ($x = 0; $x <= 4; $x++) {
            if ($accounts[$x]["account_type"] == "Loan") {
                $accounts[$x]["balance"] = $accounts[$x]["balance"]*-1;
            }
            $tableAcc[] = $accounts[$x];
        }
    } catch (Exception $e) {
        error_log(var_export($e,true));
        flash("An unexpected error occurred, please try again", "danger");
        //echo "<pre>" . var_export($e->errorInfo, true) . "</pre>";
    }
    $accHist = [];
    if (isset($_GET["save"])) {
        $accNum = se($_GET, "accNum", null, false);
        $typeFilter = se($_GET, "typeFilter", null, false);
        $srtDate = se($_GET, "srtDate", null, false);
        $endDate = se($_GET, "endDate", null, false);

        $query = "SELECT account_src, account_dest, balance_change, transaction_type, expected_total, memo, created 
        from Transactions WHERE account_src = :id";
        
        //$query .= " ";
        $params = [];
        $params[":id"] = "$accNum";

        //Transaction type filter
        if (!empty($typeFilter)) {
            $query .= " AND transaction_type = :fil";
            $params[":fil"] = "$typeFilter";
        }
        //Date filter
        if (!empty($srtDate) && !empty($endDate)) {
            $query .= " AND (created > :srt and created < :end)";
            $params[":srt"] = "$srtDate + 00:00:00";
            $params[":end"] = "$endDate + 23:59:59";
        }
        //Order by most recent
        $query .= " ORDER BY created DESC";
        $stmt = $db->prepare($query);
        $per_page = 10;
        paginate($query, $params, $per_page);

        $query .= " LIMIT :offset, :count";
        $params[":offset"] = $offset;
        $params[":count"] = $per_page;

        $stmt = $db->prepare($query);

        foreach ($params as $key => $value) {
            $type = is_int($value) ? PDO::PARAM_INT : PDO::PARAM_STR;
            $stmt->bindValue($key, $value, $type);
        }
        $params = null;
        try {
            $stmt->execute($params);
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
        <?php foreach ($tableAcc as $index => $record) : ?>
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
                    
                </td>
            </tr>
        <?php endforeach; ?>
    </table>
<?php endif; ?>

<form method="GET" onsubmit="return validate(this);">
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

    <label for="srtDate" class="form-label">Start Date</label>
    <input type="date" id="srtDate" name="srtDate">
    
    <label for="endDate" class="form-label">End Date</label>
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

    <!-- this will be moved into a partial file for reusability-->
    <?php
    if (!isset($total)) {
        flash("Note to Dev: The total variable is undefined", "danger");
    }
    if (!isset($per_page)) {
        flash("Note to Dev: The per_page variable is undefined", "danger");
    }
    $total_pages = ceil($total / $per_page);
    //updates or inserts page into query string while persisting anything already present
    function persistQueryString($page)
    {
        //set the query param for easily building
        $_GET["page"] = $page;
        //https://www.php.net/manual/en/function.http-build-query.php
        return http_build_query($_GET);
    }
    function check_apply_disabled_prev($page)
    {
        echo $page < 1 ? "disabled" : "";
    }
    function check_apply_active($page, $i)
    {
        echo ($page - 1) == $i ? "active" : "";
    }
    function check_apply_disabled_next($page)
    {
        global $total_pages;
        echo ($page) >= $total_pages ? "disabled" : "";
    }
    ?>

    <nav aria-label="Page navigation example I hope I get changed">
        <ul class="pagination justify-content-center">
            <li class="page-item <?php check_apply_disabled_prev(($page - 1)) ?>">
                <a class="page-link" href="?<?php se(persistQueryString($page - 1)); ?>" tabindex="-1">Previous</a>
            </li>
            <?php for ($i = 0; $i < $total_pages; $i++) : ?>
                <li class="page-item <?php check_apply_active($page, $i); ?>"><a class="page-link" href="?<?php se(persistQueryString($i + 1)); ?>"><?php echo ($i + 1); ?></a></li>
            <?php endfor; ?>
            <li class="page-item <?php check_apply_disabled_next($page); ?>">
                <a class="page-link" href="?<?php se(persistQueryString($page + 1)); ?>">Next</a>
            </li>
        </ul>
    </nav>
<?php endif; ?>





<?php
    require_once(__DIR__ . "/../../partials/flash.php");
?>