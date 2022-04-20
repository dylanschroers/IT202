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
    <li><a href="#">Create Account</a></li>
    <li><a href="#">My Accounts</a></li>
    <li><a href="#">Deposits</a></li>
    <li><a href="#">Withdraw Transfer</a></li>
    <li><a href="profile.php">Profile</a></li>
<?php endif; ?>