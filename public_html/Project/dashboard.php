<?php
require(__DIR__ . "/../../partials/nav.php");
?>
<h1>Dashboard</h1>
<?php
if (is_logged_in()) {
    echo "Welcome to dashboard, " . get_user_email();
    //comment this out if you don't want to see the session variables
    //echo "<pre>" . var_export($_SESSION, true) . "</pre>";
    
} else {
    echo "You're not logged in";
}
?>
<?php
require(__DIR__ . "/../../partials/flash.php");
?>
<?php if (is_logged_in()) : ?>
    <li><a href="create_account.php">Create Account</a></li>
    <li><a href="get_accounts.php">My Accounts</a></li>
    <li><a href="deposit.php">Deposits</a></li>
    <li><a href="withdraw.php">Withdraw</a></li>
    <li><a href="transfers.php">Transfer</a></li>
    <li><a href="loans.php">Loans</a></li>
    <li><a href="payLoan.php">Pay Loan</a></li>
    <li><a href="close_accounts.php">Close Accounts</a></li>
    <li><a href="profile.php">Profile</a></li>
<?php endif; ?>