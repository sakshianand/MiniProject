<?php
session_start();
include_once("Connection.php");
$Block = $_POST['block'];
$room = $_POST['room'];
$pass = $_POST['pass'];
$sql = "update customer set Block = '$Block', Room ='$room' where Password = '$pass' and Reg = '{$_SESSION['reg']}'";
$retval = mysqli_query( $conn, $sql );
if($retval){
echo "Details updated.";
header('refresh:2; url= http://localhost/MiniProj/updateCustomer.html');}
?>