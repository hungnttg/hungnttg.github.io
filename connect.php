<?php
$host = "37.59.55.185";
$username = "ZsPCk3T1Uu";
$password = "BLVdgQkAw4";
$database = "ZsPCk3T1Uu";

$conn = mysqli_connect($host,$username,$password,$database);
mysqli_query($conn,"SET NAMES 'utf8' ");
echo $conn;

?>