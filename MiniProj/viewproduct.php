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
	<title>VIT EMart</title>
	<link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.8/css/materialize.min.css">
    <link rel="stylesheet" href="css/animate.css">
</head>
<body>
<ul id="dropdown1" class="dropdown-content">
  <li><a href="loginSeller.html">Login as a Seller</a></li>
  <li><a href="loginCustomer.html">Login as a Customer</a></li>
  <li class="divider"></li>
</ul>
    <nav>
    <div class="nav-wrapper">
      <a href="#" class="brand-logo">Logo</a>
      <ul id="nav-mobile" class="right hide-on-med-and-down">
        <li><a href="sass.html">About</a></li>
         <li><a class="dropdown-button" href="#!" data-activates="dropdown1">Login<i class="material-icons right">arrow_drop_down</i></a></li>
      </ul>
    </div>
  </nav>
  <div class="container" style="margin-top: 5%;">
  <h3 class="center-align wow zoomIn" >These are the products which you have uploaded</h3>
  </div>
  <div class="container wow fadeInDown" data-wow-delay="1s" style="margin-top: 7%;">
<div class="row">

        
        <?php
        for($i=0;$i<$row_cnt;$i++)
        { ?>
<div class="col s12 m4 l4">
        
          <div class="card">
    <div class="card-image waves-effect waves-block waves-light">
      <img class="activator" src="<?php $row = mysqli_fetch_array($res); $filepath[] = $row['img_path']; print $filepath[$i];  ?>" width="300" height="200">
    </div>
    <div class="card-content">
      <span class="card-title activator grey-text text-darken-4"><?php 
  $ProductName[] = $row['ProductName'];
 

   print $ProductName[$i]; 

  ?><i class="material-icons right">more_vert</i></span>
      <!--<p><a href="#">This is a link</a></p>-->
    </div>
    <div class="card-reveal">
      <span class="card-title grey-text text-darken-4"><?php print $ProductName[$i] ?><i class="material-icons right">close</i></span>
      <ul>
      <li>Description : <?php  $des[] = $row['Description']; print $des[$i];  ?></li>
      <li>Price: <?php  $price[] = $row['Price']; print $price[$i];  ?> </li>
      <li>Category : <?php $category[] = $row['Category']; print $category[$i]; ?></li>
      </ul>
    </div>
  </div>  
          </div>
          <?php
          }?>
          <!--<div class="col s12 m4 l4">
          <div class="card">
    <div class="card-image waves-effect waves-block waves-light">
      <img class="activator" src="photo/abc.png">
    </div>
    <div class="card-content">
      <span class="card-title activator grey-text text-darken-4">Card Title<i class="material-icons right">more_vert</i></span>
      <p><a href="#">This is a link</a></p>
    </div>
    <div class="card-reveal">
      <span class="card-title grey-text text-darken-4">Card Title<i class="material-icons right">close</i></span>
      <p>Here is some more information about this product that is only revealed once clicked on.</p>
    </div>
  </div>  
          </div>
          <div class="col s12 m4 l4">
          <div class="card">
    <div class="card-image waves-effect waves-block waves-light">
      <img class="activator" src="photo/abc.png">
    </div>
    <div class="card-content">
      <span class="card-title activator grey-text text-darken-4">Card Title<i class="material-icons right">more_vert</i></span>
      <p><a href="#">This is a link</a></p>
    </div>
    <div class="card-reveal">
      <span class="card-title grey-text text-darken-4">Card Title<i class="material-icons right">close</i></span>
      <p>Here is some more information about this product that is only revealed once clicked on.</p>
    </div>
  </div>  
          </div>
        </div>
      
      </div>
     
</div>-->
<script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.8/js/materialize.min.js"></script>
<script src="js/wow.min.js"></script>
              <script>
              new WOW().init();
              </script>
            
</body>
</html>