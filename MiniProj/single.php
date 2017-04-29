<?php
session_start();
include_once("Connection.php");
$id =$_GET["id"];
$result ="select * from additem where Reg  = '{$_SESSION['reg']}' and id = '{$id}'";
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
					<h1><a href="index.html">Welcome <?php echo $_SESSION['name']; ?> </a></h1>
				</div>
				<div class="top-nav">
				<!-- start header menu -->
		 <!---->
		
				<div class="clearfix"> </div>
			</div>
		</div>
		</div>
		
	</div>
<!---->
<div class="container">
	</div>
<div class="back">
	<h2><?php while($row = mysqli_fetch_assoc($res)){ $ProductName[] = $row['ProductName']; print $ProductName[0]; ?></h2>
</div>
		<!---->
		<div class="product">
			<div class="container">
				<div class="col-md-3 product-price">
					  
				<div class=" rsidebar span_1_of_left">
					
		
					</div>
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
					
				<!---->
				

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
						<h4><?php  print $ProductName[0]; ?></h4>
							<div class="star-on">
								<ul class="star-footer">
										<li><a href="#"><i> </i></a></li>
										<li><a href="#"><i> </i></a></li>
										<li><a href="#"><i> </i></a></li>
										<li><a href="#"><i> </i></a></li>
										<li><a href="#"><i> </i></a></li>
									</ul>
								<div class="">
									
									
								</div>
							<div class="clearfix"> </div>
							</div>
							
							<h5 class="item_price">Price:<?php $price[] = $row['Price']; echo $price[0]; ?></h5>
							<p><?php $Description[] = $row['Description']; print $Description[0]; ?></p>
							<?php $avail[]=$row['available']; echo'<p>Status: ';if($avail[0]==0){echo "Sold";} else{
								echo "Unsold";
							} echo'</p>';?>
							
							
								<?php } ?>
							
						</div>
					</div>
				<div class="clearfix"> </div>
			<!---->
					<div class="cd-tabs">
			<nav>
				<ul class="cd-tabs-navigation">
					<li><a data-content="television" href="#0" class="selected ">Reviews (1)</a></li>
					
				</ul> 
			</nav>
	<ul class="cd-tabs-content">
		<li data-content="fashion" >
		<div class="facts">
									  <p > There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined </p>
										<ul>
											<li>Research</li>
											<li>Design and Development</li>
											<li>Porting and Optimization</li>
											<li>System integration</li>
											<li>Verification, Validation and Testing</li>
											<li>Maintenance and Support</li>
										</ul>         
							        </div>

</li>
<li data-content="cinema" >
		<div class="facts1">
					
						<div class="color"><p>Color</p>
							<span >Blue, Black, Red</span>
							<div class="clearfix"></div>
						</div>
						<div class="color">
							<p>Size</p>
							<span >S, M, L, XL</span>
							<div class="clearfix"></div>
						</div>
					        
			 </div>

</li>
<li data-content="television" class="selected">
	<div class="comments-top-top">
				<div class="top-comment-left">
					<img class="img-responsive" src="images/co.png" alt="">
				</div>
				<div class="top-comment-right">
					<h6><a href="#">Hendri</a> - September 3, 2014</h6>
					<ul class="star-footer">
										<li><a href="#"><i> </i></a></li>
										<li><a href="#"><i> </i></a></li>
										<li><a href="#"><i> </i></a></li>
										<li><a href="#"><i> </i></a></li>
										<li><a href="#"><i> </i></a></li>
									</ul>
									<p>Wow nice!</p>
				</div>
				<div class="clearfix"> </div>
				
			</div>

</li>
<div class="clearfix"></div>
	</ul> 
</div> 
			<!---->
		       
		        	
				<div class="clearfix"> </div>
			</div>
		</div>
			<!---->
			
<!---->
	
<!---->
</body>
</html>