<?php
session_start();
include_once("Connection.php");
$result ="select * from ecart where reg ='{$_SESSION['reg']}'";
$res = mysqli_query($conn,$result);
$row_cnt = mysqli_num_rows($res);
?>
<!DOCTYPE html>
<html>
<head>
<title>Amberegul A Ecommerce Category Flat Bootstarp Resposive Website Template | Checkout :: w3layouts</title>
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


<script src="js/simpleCart.min.js"> </script>
</head>
<body> 
<!--header-->	
<div class=" header-product">
	<div class="header-top com">
		<div class="container">
			
		</div>
			<div class="header-bottom bottom-com">
			<div class="container">			
				<div class="logo">
					<h1><a href="index.html">Welcome <?php echo $_SESSION['name']; ?></a></h1>
				</div>
				<div class="top-nav">
				<!-- start header menu -->
		<ul class="megamenu skyblue menu-in">
			<li><a  href="productcust.php">Home</a></li>
			
			<li class="active grid"><a  href="review.php">Purchase History</a>
				
				</li>	
		
					
				</li>
		 </ul> 
		 <!---->
		 
						<script type="text/javascript">
							$('.search').hide();
							$('button').click(function (){
							$('.search').show();
							$('.text').focus();
							}
							);
							$('.close-in').click(function(){
							$('.search').hide();
							});
						</script>

					<!---->
					

					<!---->
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
		</div>
		
	</div>
<!---->
<div class="container">
	<h6 class="dress"><a href="productcust.php">Home</a> <i> </i> Checkout </h6>
</div>
<div class="back">
	<h2>CHECKOUT</h2>
</div>
		<!---->
		<div class="product">
			<div class="container">
				<div class="col-md-3 product-price">
					  
				
				<!---->
				<div class="product-bottom">
					
					
							
							
				</div>
<div class=" per1">
				
			</div>
				</div>
				<!---->
				<div class="col-md-9 product-price1">
				<div class="check-out">	 
			
		 <div class=" cart-items">
			 <h3>My Shopping Bag</h3>
				<script>$(document).ready(function(c) {
					$('.close1').on('click', function(c){
						$('.cart-header').fadeOut('slow', function(c){
							$('.cart-header').remove();
						});
						});	  
					});
			   </script>
			<script>$(document).ready(function(c) {
					$('.close2').on('click', function(c){
						$('.cart-header1').fadeOut('slow', function(c){
							$('.cart-header1').remove();
						});
						});	  
					});
			   </script>
				<div id="full"></div>
				  <div class="in-check" >
		  <ul class="unit">
		  
			<li><span>Item</span></li>
		
			<li><span>Product Name</span></li>

			<li><span>Price</span></li>
			<li><span>Seller Name</span></li>
			<li><span>Contact Number</span></li>
			
			<div class="clearfix"> </div>
		  </ul>
		  
		   	<?php
		   	while($row=mysqli_fetch_array($res))
        {
         ?>

		  <ul class="cart-header">
		   
			<li class="ring-in"><a href="single.html" ><img src="<?php 
	   		     		$filepath = $row['img_path'];  print $filepath; ?>" class="img-responsive" alt=""></a>
			</li>
			
			<li><span><?php $ProductName = $row['ProductName']; print $ProductName; ?></span></li>
			
			<li><span><?php $price = $row['Price']; print $price; ?></span></li>
			<li>
			<span>
			<?php
							$reg[] = $row['reg']; 
							//echo $row['reg'];
							$a = "select * from additem where ProductName = '$ProductName'";
							$b= mysqli_query($conn,$a);
							$tow = mysqli_fetch_assoc($b);
							$regi=$tow['reg'];
							$c= "select * from seller where Reg = '$regi'";
							$d=mysqli_query($conn,$c);
							$tow1 = mysqli_fetch_assoc($d);
							echo $tow1['Name'];
							//$phone = $tow['Phone'];
							//$name = $tow['Name']; echo $name;
							

			?>
			</span>
			</li>
				<li>
			<span>
			<?php
							$reg[] = $row['reg']; 
							//echo $row['reg'];
							$a = "select * from additem where ProductName = '$ProductName'";
							$b= mysqli_query($conn,$a);
							$tow = mysqli_fetch_assoc($b);
							$regi=$tow['reg'];
							$c= "select * from seller where Reg = '$regi'";
							$d=mysqli_query($conn,$c);
							$tow1 = mysqli_fetch_assoc($d);
							echo $tow1['Phone'];
							//$phone = $tow['Phone'];
							//$name = $tow['Name']; echo $name;
							

			?>
			</span>
			</li>
			<li><span><a class = "remove" href="" id="<?php echo $row["id"]; ?>">Remove</a></span></li>
			<div class="clearfix"> </div>
			</ul>
			<?php } ?>


		</div>
			 </div>
					  
		 </div>
		 <ul class="cart-header">
		 
			
			
			
			<li><span><?php
$result ="select  * from ecart where reg ='{$_SESSION["reg"]}'";
$r = mysqli_query($conn,$result);
$total=0;
while ($row =  mysqli_fetch_array($r))
{
	 $total +=  $row['Price'];}
	 echo "Total: ";
     echo $total;
     $_SESSION['a']=$total;

 ?></span></li>
	 <li><span><a href="checkout.php"><button>Next</button></a></span></li>
			
			<div class="clearfix"> </div>
			</ul>



		

				</div>
				<div class="clearfix"> </div>
			</div>
		</div>

			<!---->
				
<!---->
<script type="text/javascript">
	      $(document).ready(function(){
    $(".remove").click(function(){
     var id = $(this).attr('id');
   //alert(id);
     $("#full").load("remove.php",{'id': id});

    });
  });
	      </script>
<!---->
</body>
</html>