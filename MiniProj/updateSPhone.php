<?php
session_start();
include_once("Connection.php");
$phone = $_POST['phone'];

$pass = $_POST['pass'];
$sql = "update seller set Phone = '$phone'  where Password = '$pass' and Reg = '{$_SESSION['reg']}'";
$retval = mysqli_query( $conn, $sql );
if($retval){
echo "Details updated.";
header('refresh:2; url= updateSeller.html');}
?>