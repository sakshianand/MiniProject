<?php
session_start();
include_once("Connection.php");
$id= $_REQUEST['id'];
$result ="select * from additem where id  = '{$id}'";
$res = mysqli_query($conn,$result);
$row = mysqli_fetch_array($res);
$row_cnt = mysqli_num_rows($res);
echo $row['ProductName'];

$sql="insert into ecart(reg,ProductName,Description,Price,Category,img_name,img_path,img_type) 
values (
'{$_SESSION['reg']}',
'{$row["ProductName"]}',
'{$row["Description"]}',
'{$row["Price"]}',
'{$row["Category"]}',
'{$row["img_name"]}',
'{$row["img_path"]}',
'{$row["img_type"]}'
)";
$sq = "update additem set available = 0 where id = '{$id}'";
if(! mysqli_query( $conn, $sql ))
{
die(mysqli_error($conn));
}
else
{ 

echo "\n added to ecart successfully";
if(! mysqli_query($conn,$sq))
{
	die(mysqli_error($conn));
}
else
{
	echo "updated";
}
}
?>