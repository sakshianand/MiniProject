<?php
session_start();
include_once("Connection.php");

if(isset($_POST['btn_upload']))
{
	/**function compress($source, $destination, $quality) {

    $info = getimagesize($source);

    if ($info['mime'] == 'image/jpeg') 
        $image = imagecreatefromjpeg($source);

    elseif ($info['mime'] == 'image/gif') 
        $image = imagecreatefromgif($source);

    elseif ($info['mime'] == 'image/png') 
        $image = imagecreatefrompng($source);

    imagejpeg($image, $destination, $quality);

    return $destination;
}
$source_img = $filename;
$destination_img = 'destination .jpg';

$d = compress($source_img, $destination_img, 90);**/

	$Name = $_POST['pname'];
	
    $des = $_POST['description'];
    
    $price = $_POST['price'];
   
    $category = $_POST['category'];

	$filetmp = $_FILES["file_img"]["tmp_name"];
	$filename = $_FILES["file_img"]["name"];

	$filetype =  $_FILES["file_img"]["type"];
	$filepath = "photo/".$filename;
	move_uploaded_file($filetmp, $filepath);
	$sql = "insert into additem(reg,ProductName,Description,Price,Category,img_name,img_path,img_type) values ('{$_SESSION['reg']}','$Name','$des',$price,'$category','$filename','$filepath','$filetype')";
	if(mysqli_query( $conn, $sql ))
	{
		echo "value inserted to db";
	}
	else
	{
		die(mysqli_error($conn));
	}
	
}
?>