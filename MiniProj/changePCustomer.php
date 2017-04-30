<?php
session_start();
include_once("Connection.php");
$sec = $_POST['sec'];
if($sec == $_SESSION['sec'])
{
	$sql = "update customer set Password = '{$_SESSION['pass']}' where Reg = '{$_SESSION['reg']}'";
$retval = mysqli_query( $conn, $sql );
echo "Your password is successfully changed. Redirecting to login";
header('refresh:2; url= loginCustomer.html');
}
else{
	echo "wrong code";
}

?>