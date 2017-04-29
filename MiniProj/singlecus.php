<?php
session_start();
include_once("Connection.php");
$id =$_GET["id"];
$result ="select * from additem where id = '{$id}'";
$res = mysqli_query($conn,$result);

$row_cnt = mysqli_num_rows($res);
?>
<!DOCTYPE html>
<html>
<head>
<title>Amberegul A Ecommerce Category Flat Bootstarp Resposive Website Template | Single :: w3layouts</title>
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

<link rel="stylesheet" href="css/etalage.css">
<script src="js/jquery.etalage.min.js"></script>
		<script>
			jQuery(document).ready(function($){

				$('#etalage').etalage({
					thumb_image_width: 300,
					thumb_image_height: 400,
					source_image_width: 900,
					source_image_height: 1200,
					show_hint: true,
					click_callback: function(image_anchor, instance_id){
						alert('Callback example:\nYou clicked on an image with the anchor: "'+image_anchor+'"\n(in Etalage instance: "'+instance_id+'")');
					}
				});

			});
		</script>

<script src="js/main.js"></script> <!-- Resource jQuery -->
<script>
	(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  	(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  	m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  	})(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  	ga('create', 'UA-48014931-1', 'codyhouse.co');
  	ga('send', 'pageview');

  	jQuery(document).ready(function($){
  		$('.close-carbon-adv').on('click', function(){
  			$('#carbonads-container').hide();
  		});
  	});
</script>	
<script src="js/simpleCart.min.js"> </script>
</head>
<body> 
<!--header-->	
<div class=" header-product">
	<div class="header-top com">
		<div class="container">
			<div class="header-top-in grid-1">
				
				
				<div class="clearfix"> </div>
			</div>
		</div>
			<div class="header-bottom bottom-com">
			<div class="container">			
				<div class="logo">
					<h1><a href="index.html">Welcome <?php echo $_SESSION['name']; ?></a></h1>
				</div>
				<div class="top-nav">
				<!-- start header menu --
		 <!---->

					<!---->
					<div class="cart box_1">
						<a href="checkout.html">
						<h3> <div class="total">
							<span class="simpleCart_total"></span> (<span id="simpleCart_quantity" class="simpleCart_quantity"></span> items)</div>
							<img src="images/cart.png" alt=""/></h3>
						</a>
						<p><a href="javascript:;" class="simpleCart_empty">Empty Cart</a></p>
						<div class="clearfix"> </div>
					</div>
					<!---->
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
		</div>
		
	</div>
<!---->
<div class="container">
	<h6 class="dress"><a href="index.html">Home</a> <i> </i> Product </h6>
</div>
<div class="back">
	<h2><?php while($row = mysqli_fetch_assoc($res)){ $ProductName[] = $row['ProductName']; print $ProductName[0];  ?></h2>
</div>
		<!---->
		<div class="product">
			<div class="container">
				<div class="col-md-3 product-price">
				<!--initiate accordion-->
		<script type="text/javascript">
			$(function() {
			    var menu_ul = $('.menu > li > ul'),
			           menu_a  = $('.menu > li > a');
			    menu_ul.hide();
			    menu_a.click(function(e) {
			        e.preventDefault();
			        if(!$(this).hasClass('active')) {
			            menu_a.removeClass('active');
			            menu_ul.filter(':visible').slideUp('normal');
			            $(this).addClass('active').next().stop(true,true).slideDown('normal');
			        } else {
			            $(this).removeClass('active');
			            $(this).next().stop(true,true).slideUp('normal');
			        }
			    });
			
			});
		</script>
<!---->
	<div class="product-middle">
		
					<div class="fit-top">
						<h6 class="shop-top">CHAT WITH CUSTOMER CARE</h6>
						<a href="chat.php" class="shop-now">CHAT NOW</a>
<div class="clearfix"> </div>
	</div>
				</div>	 
					
				<!---->
				
<div class=" per1">
				
				
			</div>
				</div>
				<!---->
				<div class="col-md-9 product-price1">
				<div class="col-md-5 single-top">	
						<ul id="etalage">
							 <li>
								<img class="etalage_thumb_image img-responsive" src="<?php 
	   		     		$filepath[] = $row['img_path'];  print $filepath[0]; ?>"  alt="" >
								<img class="etalage_source_image img-responsive" src="<?php print $filepath[0]; ?>" alt="" >
							</li>
							
						</ul>

					</div>	
					<div class="col-md-7 single-top-in simpleCart_shelfItem">
						<div class="single-para ">
						<h4></h4>
							<div class="star-on">
								
								<div class="">
									
									
								</div>
							<div class="clearfix"> </div>
							</div>
							
							<h5 class="item_price">Price:<?php $price[] = $row['Price']; echo $price[0]; ?></h5>
							<p><?php $Description[] = $row['Description']; print $Description[0]; ?></p>
							
								<a href="#" class="add-cart item_add">CHECKOUT</a>
							
						</div>
					</div>
				<div class="clearfix"> </div>
			<!---->
					<div class="cd-tabs">
			<nav>
				<ul class="cd-tabs-navigation">
					<li><a data-content="cinema" href="#0" >Seller Information</a></li>
					
					
				</ul> 
			</nav>
	<ul class="cd-tabs-content">
	
<li data-content="cinema" >
		<div class="facts1">
				
						<div class="color"><p>Name of the seller</p>
							<span><?php $reg[] = $row['reg']; 
							$a = "select * from seller where reg = '{$row["reg"]}'";
							$b= mysqli_query($conn,$a);
							$tow = mysqli_fetch_assoc($b);
							$phone = $tow['Phone'];
							$name = $tow['Name']; echo $name; echo'</span>
							<div class="clearfix"></div>
						</div>
						<div class="color">
							<p>Contant Number</p>
							<span >';echo $phone;'</span>';?>
							<div class="clearfix"></div>
						</div>
					        
			 </div>

</li>
<?php } ?>
<li data-content="television" class="selected">
	<div class="comments-top-top">
				<div class="top-comment-left">
					
				</div>
				<div class="">
					
					
				</div>
				<div class=""> </div>
				
			</div>

</li>
<div class="clearfix"></div>
	</ul> 
</div> 
			<!---->
		       
		     
		      
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
			<!---->
			
	</div>
<!---->
</body>
</html>