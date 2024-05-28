<?php
include "Includes.php";
global $conn;

if(isset($_POST['login']))
{
    $username=$_POST['username'];
    $password=$_POST['password'];
    $username=mysqli_real_escape_string($conn,$username);
    $password=mysqli_real_escape_string($conn,$password);
    $username=htmlentities($username);
    $password=htmlentities($password);
    $sql="SELECT password from users where username='$username'";
    $res=mysqli_query($conn,$sql);
    $row=mysqli_fetch_assoc($res);
    $pass=$row['password'];

    if($password === $pass)
    {
      $_SESSION['username']=$username;
      /* redirect to Dashboard.php */
      header("Location: /test/Dashboard.php");
    }
    else
    {
      /* redirect to Loginform.php */
      header("Location: Loginform.php");
    }
}
?>