<?php
session_start();
include_once("Connection.php");
$Name = $_POST['name'];
$Reg = $_POST['reg'];
$Pass = $_POST['pass'];
$Phone = $_POST['phone'];
$Email =$_POST['email'];
$Sex =$_POST['sex'];
$otp = rand(100000, 999999);
$_SESSION['otp'] = $otp;
$_SESSION['name'] = $Name;
$_SESSION['reg'] = $Reg;
$_SESSION['pass'] = $Pass;
$_SESSION['phone'] = $Phone;
$_SESSION['email'] = $Email;
$_SESSION['sex'] = $Sex;
$_SESSION['block'] = $_POST['block'];
$_SESSION['room'] = $_POST['room'];



$sql = "insert into customer(Reg,otp) values ('$Reg','$otp')";
$retval = mysqli_query( $conn, $sql );


//Your authentication key
$authKey = "137617Avrt117V587dfc16";

//Multiple mobiles numbers separated by comma
$mobileNumber = $Phone;
$code = "91";

//Sender ID,While using route4 sender id should be 6 characters long.
$senderId = "VERIFY";

//Your message to send, Add URL encoding here.
$message = urlencode("Your one time password is ".$otp);

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
header('Location: http://localhost/MiniProj/customerVerify.html');
 ?>