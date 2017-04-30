<?php
session_start();
include_once("Connection.php");
$result ="select * from ecart where reg ='{$_SESSION['reg']}'";
$res = mysqli_query($conn,$result);
$row_cnt = mysqli_num_rows($res);
$cod=$_POST['cod'];
$p = "select * from customer where Reg ='{$_SESSION['reg']}'";
$tes = mysqli_query($conn,$p);
$tow=mysqli_fetch_array($tes);
$name = $tow['Name'];
$phone = $tow['Phone'];
$block = $tow['Block'];
$room = $tow['Room'];
$sex = $tow['Sex'];

while($row=mysqli_fetch_array($res))
{
	 $ProductName = $row['ProductName'];
	 $price = $row['Price'];
	 $reg = $row['reg'];
	 $t = "select reg from additem where ProductName = '$ProductName'";
	 $pes = mysqli_query($conn,$t);
$mow=mysqli_fetch_array($pes);
$registration = $mow['reg'];
$r = "select * from seller where Reg = '$registration'";
$les = mysqli_query($conn,$r);
$cow=mysqli_fetch_array($les);
$nam = $cow['Name'];
$phon = $cow['Phone'];
$bloc = $cow['Block'];
$rm = $cow['Room'];
$sx = $cow['Sex'];

	 $sql = "insert into orderplace(pname,price,customername,customer,sellername,seller,customercont,sellercont,deliver,total)values('$ProductName',$price,'$name','$reg','$nam','$registration','$phone','$phon','$cod','{$_SESSION['a']}')";
$a = mysqli_query($conn,$sql);
$q = "update additem set status = 0 where ProductName = '{$ProductName}'";
$g = mysqli_query($conn,$q);
$l = "insert into review(pname,seller,customer,customername)values('$ProductName','$registration','$reg','$name')";
$a = mysqli_query($conn,$l);
/*
$authKey = "137617Avrt117V587dfc16";

//Multiple mobiles numbers separated by comma
$mobileNumber = $phon;
$code = "91";

//Sender ID,While using route4 sender id should be 6 characters long.
$senderId = "VERIFY";

//Your message to send, Add URL encoding here.
$message = urlencode("Order for your product ".$ProductName." has been placed by ".$name.". Address: ".$block." block. Room: ".$room." Mobile no.: ".$phone.". Price is ".$price.".");

//Define route 
$route = "4";
//Prepare you post parameters
$postData = array(
    'authkey' => $authKey,
    'mobiles' => $code.$mobileNumber,
    'message' => $message,
    'sender' => $senderId,
    'route' => $route
);

//API URL
$url="https://control.msg91.com/api/sendhttp.php";

// init the resource
$ch = curl_init();
curl_setopt_array($ch, array(
    CURLOPT_URL => $url,
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_POST => true,
    CURLOPT_POSTFIELDS => $postData
    //,CURLOPT_FOLLOWLOCATION => true
));


//Ignore SSL certificate verification
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);


//get response
$output = curl_exec($ch);

//Print error if any
if(curl_errno($ch))
{
    echo 'error:' . curl_error($ch);
}

curl_close($ch);

echo $output;




$authKey = "137617Avrt117V587dfc16";

//Multiple mobiles numbers separated by comma
$mobileNumber = $phone;
$code = "91";

//Sender ID,While using route4 sender id should be 6 characters long.
$senderId = "CONFRM";

//Your message to send, Add URL encoding here.
$message = urlencode("Order for the product ".$ProductName." has been placed. Seller details are: Name ".$nam.". Address: ".$bloc." block. Room: ".$rm." Mobile no.: ".$phon.". Price is ".$price);

//Define route 
$route = "4";
//Prepare you post parameters
$postData = array(
    'authkey' => $authKey,
    'mobiles' => $code.$mobileNumber,
    'message' => $message,
    'sender' => $senderId,
    'route' => $route
);

//API URL
$url="https://control.msg91.com/api/sendhttp.php";

// init the resource
$ch = curl_init();
curl_setopt_array($ch, array(
    CURLOPT_URL => $url,
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_POST => true,
    CURLOPT_POSTFIELDS => $postData
    //,CURLOPT_FOLLOWLOCATION => true
));


//Ignore SSL certificate verification
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);


//get response
$output = curl_exec($ch);

//Print error if any
if(curl_errno($ch))
{
    echo 'error:' . curl_error($ch);
}

curl_close($ch);

echo $output;*/

}

$del = "delete from ecart where  reg ='{$_SESSION['reg']}'";

$d = mysqli_query($conn,$del);


header("location:productcust.php");


?>