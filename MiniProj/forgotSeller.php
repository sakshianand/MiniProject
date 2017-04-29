<?php
session_start();
include_once("Connection.php");
$Reg = $_POST['reg'];
$Pass = $_POST['pass'];
$_SESSION['reg'] = $Reg;
$_SESSION['pass'] = $Pass;

$sql = "select Phone from seller where Reg = '$Reg'";
$retval = mysqli_query( $conn, $sql );
while($row = mysqli_fetch_assoc($retval))
{
	$Phone = $row['Phone'];
}
echo $Phone;

$sec = rand(100000, 999999);
$_SESSION['sec'] = $sec;
$authKey = "137617Avrt117V587dfc16";

//Multiple mobiles numbers separated by comma
$mobileNumber = $Phone;
$code = "91";

//Sender ID,While using route4 sender id should be 6 characters long.
$senderId = "VERIFY";

//Your message to send, Add URL encoding here.
$message = urlencode("Your secret code is ".$sec);

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

header('Location: http://localhost/MiniProj/secretCodeSeller.html');
?>