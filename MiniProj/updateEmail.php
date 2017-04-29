<?php
session_start();
include_once("Connection.php");
$email = $_POST['email'];

$pass = $_POST['pass'];
$sql = "update customer set Email = '$email'  where Password = '$pass' and Reg = '{$_SESSION['reg']}'";
$retval = mysqli_query( $conn, $sql );
if($retval){
echo "Details updated.";
header('refresh:2; url= updateCustomer.html');}
?>