<?php $mysql_host='localhost';
$mysql_user='root';
$mysql_password='';
$conn = mysqli_connect($mysql_host,$mysql_user, $mysql_password,'ecommerce');

if(!$conn)
{
echo "not able to connect";
}
else
{
//echo"connection established";
}

?>