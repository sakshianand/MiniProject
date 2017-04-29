<?php
session_start();
include_once("Connection.php");
$result ="select * from additem where Reg  = '{$_SESSION['reg']}'";
$res = mysqli_query($conn,$result);

$row_cnt = mysqli_num_rows($res);

?>
<!DOCTYPE html>
<html>
<head>

<title>Amberegul A Ecommerce Category Flat Bootstarp Resposive Website Template | Products :: w3layouts</title>
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

</head>
<body> 
<?php  ?>
<!--header-->	
<div class=" header-product">
	<div class="header-top com">
		<div class="container">
			
		</div>
			<div class="header-bottom bottom-com">
			<div class="container">			
				<div class="logo">
					<h1><a href="index.html">Welcome <?php  echo $_SESSION['name']; ?></a></h1>
				</div>
				<div class="top-nav">
				<!-- start header menu -->
		<ul class="megamenu skyblue menu-in">
		&nbsp; &nbsp;
		 </ul> 
		 <!---->
		 <div class="search-in" >
			<div class="search" >
						
							<div class="close-in"><div>
					</div>
						<div class="right"><button> </button></div>
				</div>
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
					<!--<div class="cart box_1">
						<a href="checkout.html">
						<h3> <div class="total">
							<span class="simpleCart_total"></span> (<span id="simpleCart_quantity" class="simpleCart_quantity"></span> items)</div>
							<img src="images/cart.png" alt=""/></h3>
						</a>
						<p><a href="javascript:;" class="simpleCart_empty">Empty Cart</a></p>
						<div class="clearfix"> </div>
					</div>-->
					<!---->
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
		</div>
		
	</div>
<!---->
<div class="container">
	<h6 class="dress"><a href="index.html">Home</a>&nbsp;&nbsp; &nbsp;&nbsp; <a href="logout.php">Logout</a></h6>
</div>
<div class="back">
	<h2>PRODUCTS</h2>
</div>
		<!---->
		<div class="product">
			<div class="container">
				<div class="">
					  <div class="">
					    <div class="">
						
					</div>
	  <ul class="dropdown-menu1">
            <li><a href="#">
                
                
                   <div id=""></div>
                </a></li>
				
          </ul>
		  
		  	<div class="clearfix"> </div>
<!---->
 <script type="text/javascript" src="js/jquery-ui.min.js"></script>

      <link rel="stylesheet" type="text/css" href="css/jquery-ui.css">

<script type='text/javascript'>//<![CDATA[ 
$(window).load(function(){
 $( "#slider-range" ).slider({
            range: true,
            min: 0,
            max: 500,
            values: [ 100, 400 ],
            slide: function( event, ui ) {  $( "#amount" ).val( "$" + ui.values[ 0 ] + " - $" + ui.values[ 1 ] );
            }
 });
$( "#amount" ).val( "$" + $( "#slider-range" ).slider( "values", 0 ) + " - $" + $( "#slider-range" ).slider( "values", 1 ) );

});//]]>  

</script>


<!---->
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
			
				<!---->
				
    	      
                			
		        
		        <div class="product-right-top">
		        	<div class="top-product">
		        	<?php
		        	while($row=mysqli_fetch_array($res))
        {
        	
		        	?>
		        		<div class="col-md-4 chain-grid  simpleCart_shelfItem">
		        			<div class="grid-span-1">
	   		     		<?php 
	   		     		$id= $row['id']; echo'<a  href="single.php?id='.$id.'">';?><img class="img-responsive " src="<?php 
	   		     		$filepath = $row['img_path'];  print $filepath; ?>" alt=" ">
	   		     			<div class="link">
	   		     			<ul >
										<li><i> </i></li>
										<li><i class="white1"> </i></li>
										
							</ul>
	   		     		</div>
	   		     		</a>
	   		     	</div>
	   		     		<div class="grid-chain-bottom ">
	   		     			<h6><a href="single.html"><?php $ProductName = $row['ProductName']; print $ProductName; ?></a></h6>
	   		     			<div class="star-price">
	   		     				
									<div class="price-at-bottom ">
										<span class="item_price"><?php $price = $row['Price']; print $price; ?> </span>
									</div>
	   		     				<div class="clearfix"> </div>
							</div>
							<div class="cart-add">

								<a class="add1 item_add" href="#">SOLD/UNSOLD</a>
								
								<div class="clearfix"> </div>

							</div>
	   		     		</div>
	   		     		
	   		     	</div>
	   		     	<?php } ?>
	   		     		</div>
	   		     	</div>
	   		     	<div class="clearfix"> </div>
		        	</div>
		        </div>
		        <ul class="start">
					<li><a href="#"><i> </i></a></li>
					<li><span>1</span></li>
					<li class="arrow"><a href="#">2</a></li>
					<li class="arrow"><a href="#">3</a></li>
					
					
					<li><a href="#"><i class="next"> </i></a></li>
				</ul>
				<div class="clearfix"> </div>
				</div>
				
			<div class="clearfix"> </div>
			
				
			
			<div class="clearfix"> </div>
			</div>
					
				</div>
				
			<!---->
		
		</div>
		
		
<!---->

<script src="js/simpleCart.min.js"> </script>

<!---->

<!---->
</body>
</html>