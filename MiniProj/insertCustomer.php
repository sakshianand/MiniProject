<?php
session_start();
include_once("Connection.php");
if($_POST['otp']==$_SESSION['otp'])
{
	$sql = "update customer set Name = '{$_SESSION['name']}', Password = '{$_SESSION['pass']}', Phone = '{$_SESSION['phone']}' , Email = '{$_SESSION['email']}', Sex = '{$_SESSION['sex']}',Block ='{$_SESSION['block']}',Room ='{$_SESSION['room']}' where OTP = '{$_SESSION['otp']}'";

if(! mysqli_query( $conn, $sql ))
{
die(mysqli_error($conn));}
else{ 
header( "refresh:0;url=loginCustomer.html" );
}
}
else
{
$sq = "delete from seller where otp = '{$_SESSION['otp']}'";
if(! mysqli_query( $conn, $sq ))
{
die(mysqli_error($conn));}
else{ 
echo "not registered";
}}
?>
