<?php
include "Includes.php";


if(!isset($_SESSION['username']))
{
?>
    <form action="Login_check.php" method="post">
        <input type="text" name="username" placeholder="Enter your username" required>
        <input type="password" name="password" placeholder="Enter your password" required>
        <input type="submit" value="Submit" name="login">
</form>
<?php
}
else
{
    /* redirect to Dashboard.php */     
    header("Location: /test/Dashboard.php");
}