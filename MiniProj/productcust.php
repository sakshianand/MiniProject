<?php 
session_start();
include_once("Connection.php");
if(isset($_POST['search'])){
	$searchq=$_POST['search'];
	$result1 ="select * from additem where ProductName LIKE '$searchq%' ";
	$r = mysqli_query($conn,$result1);
  $count = mysqli_num_rows($r);
  echo $count;
}
else
{
	$result ="select * from additem where available = 1";
$r = mysqli_query($conn,$result);
$count = mysqli_num_rows($r);
}
 


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
<!--header-->	
<div class=" header-product">
	<div class="header-top com">
		<div class="container">
			
		</div>
			<div class="header-bottom bottom-com">
			<div class="container">			
				<div class="logo">
					<h1><a href="#">Welcome <?php echo $_SESSION['name'] ?></a></h1>
				</div>
				<div class="top-nav">
				<!-- start header menu -->
		<ul class="megamenu skyblue menu-in">
		<li><a  href="productcust.php">Home</a></li>				
				
				</li>
				
				<li><a  href="location.php">Location</a>
					
				</li>
				<li><a  href="review.php">Purchase History</a>
					
				</li>
		 </ul> 
		 <!---->
		 <div class="search-in" >
			<div class="search" >
						<form action="productcust.php" method="post">
							<input type="text" value="Keywords" name="search"  class="text">
							<input type="submit" value="SEARCH" name="">
						</form>
							<div class="close-in"><img src="images/close.png" alt="" /></div>
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
					<div class="cart box_1">
						<a href="cart.php">
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
	<h6 class="dress"><a href="index.html">Home</a> &nbsp; &nbsp;&nbsp; &nbsp;<a href="logout.php">Logout</a> </h6>
</div>
<div class="back">
	<h2>PRODUCTS</h2>
</div>
		<!---->
		<div class="product">
			<div class="container">
				<div class="col-md-3 product-price">
					  <div class="price-grid">
					    <div class="">
						
					</div>
	  <ul class="dropdown-menu1">
            
                
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
				<div class=" rsidebar span_1_of_left">
					<div class="of-left">
						<h3 class="cate">CATEGORIES</h3>
					</div>
		 <ul class="menu">
		<li class="item1"><a href="#" id="edu">Educational Equipments</a>
		</li>
		<li class="item2"><a href="#" id="mobile">Mobile Tabs And Acessories</a>
		</li>
		<li class="item3"><a href="#" id="laptops">Laptops And Accessories</a>
		</li>
		<li class="item4"><a href="#" id="sports">Sports And Equipments</a>
		</li>
				
		<li class="item4"><a href="#" id="footwear">Footwear</a>
		</li>
		<li class="item5"><a href="#" id="books">Books</a>
		</li>
		<li class="item6"><a href="#" id="clothes">Clothing And Acessories</a>
		</li>
	</ul>
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
<div class="product-middle">
		
					<div class="fit-top">
						<h6 class="shop-top">Chat with the customer Care</h6>
						<a href="chat.php" class="shop-now">CHAT NOW</a>
<div class="clearfix"> </div>
	</div>
				</div>	

				<br>
				<!---->
				<div class="product-bottom">
					<div class="of-left-in">
								<h3 class="best">Recommended Products </h3>
							</div>
							<?php
							$query = "select  * from orderplace where customername = '{$_SESSION['name']}' limit 3";
							$d = mysqli_query($conn,$query);
							//$tow1 = mysqli_fetch_assoc($d);
							while ($tow1 =  mysqli_fetch_assoc($d))
							{
								$pname = $tow1['pname'];
								//echo $pname;
								$q = "select  * from additem where ProductName = '$pname' ";
								$e = mysqli_query($conn,$q);
								$tow2 =  mysqli_fetch_assoc($e);
								$category =  $tow2['Category'];
								$q2 = "select  * from additem where Category = '$category' and status=1 ";
								$e2 = mysqli_query($conn,$q2);
								while($tow3 = mysqli_fetch_assoc($e2))
								{
									//echo $tow3['ProductName'] ;
							

							?>
					<div class="product-go">
						<div class=" fashion-grid">
									<a href="single.html"><img class="img-responsive " src="<?php 
	   		     		$filepath = $tow3['img_path'];  print $filepath; ?>" alt=""></a>
									
								</div>
							<div class=" fashion-grid1">
								<h6 class="best2"><a href="single.html" ><?php echo $tow3['ProductName']; ?></a></h6>
								
								<span class=" price-in1"><?php echo "Rs". $tow3['Price']; ?> </span>
							</div>
								
							<div class="clearfix"> </div>
							</div>
							<?php }} ?>
				</div>

				</div>
				
		
			<!---->
			
				<!---->
				<div class="col-md-9 product-price1">
					<div class="mens-toolbar">
						<p class="showing">Showing 1–9 of 21 results</p>
	                 
    	      
                	<div class="clearfix"></div>		
		        </div>
		        <div class="product-right-top">
		        	<div class="top-product">
		        	<div id="full">
		        	<?php
		   	while($row=mysqli_fetch_array($r))
        {
         ?>
		        		<div class="col-md-4 chain-grid  simpleCart_shelfItem">
		        			<div class="grid-span-1">
	   		     		<?php 
	   		     		$id= $row['id']; echo'<a  href="singlecus.php?id='.$id.'">';?><img class="img-responsive " src="<?php 
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
	   		     			<h6><a href="singlecus.php"><?php $ProductName = $row['ProductName']; print $ProductName; ?></a></h6>
	   		     			<div class="star-price">
	   		     				<div class="price-at">
		   		     				<ul class="star-footer">
										<li><a href="#"><i> </i></a></li>
										<li><a href="#"><i> </i></a></li>
										<li><a href="#"><i> </i></a></li>
										<li><a href="#"><i> </i></a></li>
										<li><a href="#"><i> </i></a></li>
									</ul>
									</div>
									<div class="price-at-bottom ">
										<span class="item_price"><?php $price = $row['Price']; print $price; ?></span>
									</div>
	   		     				<div class="clearfix"> </div>
							</div>
							<div class="cart-add">
								<a class="add add1 item_add" href="" id="<?php echo $row["id"]; ?>">ADD TO CART <i> </i></a>
								<a class="add2" href="#"><i> </i></a>
								<div class="clearfix"> </div>
							</div>
	   		     		</div>
	   		     		
	   		     	</div>
	   		     
	   		     <?php }  ?>	
	   		     	</div>
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
				
			<!---->
		
		</div>
		
		
<!---->

<script src="js/simpleCart.min.js"> </script>
<!---->
<div class="footer">
		<div class="container">
			<div class="col-md-4 footer-top">
				<h3>QUICK CONTACT</h3>
				<form>
						
						<input type="text" value="ENTER YOUR NAME*" onfocus="this.value='';" onblur="if (this.value == '') {this.value ='ENTER YOUR NAME*';}">
						
						<input type="text" value="ENTER YOUR EMAIL*" onfocus="this.value='';" onblur="if (this.value == '') {this.value ='ENTER YOUR EMAIL*';}">
						
						<input type="text" value="ENTER YOUR PHONE" onfocus="this.value='';" onblur="if (this.value == '') {this.value ='ENTER YOUR PHONE';}">
					
						<textarea cols="77" rows="6" value="" onfocus="this.value='';" onblur="if (this.value == '') {this.value = 'ENTER YOUR MESSAGE*';}">ENTER YOUR MESSAGE*</textarea>
						
							<input type="submit" value="SEND MESSAGE" >
						
					</form>

			</div>

			
	</div>
	<script type="text/javascript">
 $(document).ready(function(){
    $("#edu").click(function(){
      $("#full").load("cuseducation.php");
    });
});
  $(document).ready(function(){
    $("#mobile").click(function(){
      $("#full").load("mobile.php");
    });
});
   $(document).ready(function(){
    $("#laptops").click(function(){
      $("#full").load("laptop.php");
    });
});
   $(document).ready(function(){
    $("#sports").click(function(){
      $("#full").load("sports.php");
    });
});
   $(document).ready(function(){
    $("#footwear").click(function(){
      $("#full").load("footwear.php");
    });
});
    $(document).ready(function(){
    $("#books").click(function(){
      $("#full").load("books.php");
    });
});
        $(document).ready(function(){
    $("#clothes").click(function(){
      $("#full").load("clothes.php");
    });
     
});
             $(document).ready(function(){
    $(".add").click(function(){
     var id = $(this).attr('id');
    alert(id);
     $("#full").load("ecart.php",{'id': id});

    });
  });
</script>

<!---->
</body>
</html>