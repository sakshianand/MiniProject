<?php 
session_start();
if(isset($_SESSION['reg'])){
	header("location:dashboard.php");
}

?><!--A Design by W3layouts 
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html>
<head>
<title>Amberegul A Ecommerce Category Flat Bootstarp Resposive Website Template | Account :: w3layouts</title>
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="js/jquery.min.js"></script>
<!-- Custom Theme files -->
<!--theme-style-->
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />	
<!--//theme-style-->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Amberegul Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!--fonts-->
<link href='http://fonts.googleapis.com/css?family=Roboto+Slab:300,700,400' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Lato:100,300,400,700,900' rel='stylesheet' type='text/css'>
<!--//fonts-->
<!-- start menu -->
<link href="css/megamenu.css" rel="stylesheet" type="text/css" media="all" />
<script type="text/javascript" src="js/megamenu.js"></script>
<script>$(document).ready(function(){$(".megamenu").megamenu();});</script>
<!--//slider-script-->


<script src="js/simpleCart.min.js"> </script>
</head>
<body> 

<div class="container">

	<h6 class="dress"><a href="index.html">Home</a> <i> </i> Login </h6>
</div>
<div class="back">
	<h2>Login</h2>
</div>
		<!---->
		<div class="container">
		<div class="account_grid">
			   <div class=" login-right">
			  	
				<p>If you have an account with us, please log in.</p>
				<form method="POST" action="loginSeller.php">
				  <div>
					<span>Registration number</span>
					<input type="text" name="reg"> 
				  </div>
				  <div>
					<span>Password</span>
					<input type="password" name="pass"> 
				  </div>
				  
				  <input type="submit" value="Login as Seller"><br>
				  <a class="forgot" href="forgotSeller.html">Forgot Your Password?</a>
			    </form>
			   </div>	
			   <!--  <div class=" login-left">
			  	 <h3>NEW CUSTOMERS</h3>
				 <p>By creating an account with our store, you will be able to move through the checkout process faster, store multiple shipping addresses, view and track your orders in your account and more.</p>
				 <a class="acount-btn" href="register.html">Create an Account</a>
			   </div>
			 -->
			 </div>
		
			</div>
			<!---->
				
</body>
</html>