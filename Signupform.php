<?php
include "Includes.php";
if(!isset($_SESSION['username']))
{
?>
<form action="Signup_check.php" method="post">
    <input type="text" name="email" placeholder="Enter your email" required>
    <input type="text" name="username" placeholder="Enter your username" required>
    <input type="password" name="password" placeholder="Enter your password" required>
    <input type="submit" value="Submit" name="signup">
</form>
<?php
}
else
{
    /* redirect to Dashboard.php */     
    header("Location: Dashboard.php");
}
?>