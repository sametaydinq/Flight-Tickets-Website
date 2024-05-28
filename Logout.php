<?php
include "Includes.php";
if(isset($_SESSION['username']))
{
     unset($_SESSION['username']);
     /* redirect to Loginform.php */
     header("Location: Loginform.php");
}
else
{
     /* redirect to Loginform.php */
     header("Location: Loginform.php");
}
?>