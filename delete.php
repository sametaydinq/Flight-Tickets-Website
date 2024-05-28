<?php

if (isset($_GET['Flight_Code'])){
    $Flight_Code = $_GET['Flight_Code'];


    include('db_connect.php');
global $conn;
 

$sql = "DELETE FROM ucus_listesi WHERE Flight_Code=$Flight_Code";
$conn->query($sql);

}

header("Location: /test/databaselist.php");
exit;



?>