<?php
session_start();
include_once("Connection.php");
$id =  $_REQUEST['id'];
//echo $id;
$query = "select * from ecart where id = $id";
$abc = mysqli_query($conn,$query);
$r = mysqli_fetch_assoc($abc);
$pname = $r['ProductName'];
$a = "delete from ecart where id = $id";
$res = mysqli_query($conn,$a);

 $sq = "update additem set available = 1 where ProductName = '$pname' ";
 $pqr = mysqli_query($conn,$sq);


?>