<?php
session_start();
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

    <nav>
    <div class="nav-wrapper">
      <a href="#" class="brand-logo">Logo</a>
      <ul id="nav-mobile" class="right hide-on-med-and-down">
     
      </ul>
    </div>
  </nav>
  <div class="container" style="margin-top: 5%;">
  <h3 class="center-align wow zoomIn" >Welcome <?php echo $_SESSION['name'] ?> </h3>
  </div>
  <div class="container wow fadeInDown" data-wow-delay="1s" style="margin-top: 7%;">
<div class="row">
        <a href="chat.php"><div class="col s12 m6">
          <div class="card blue-grey darken-1">
            <div class="card-content white-text">
              <span class="card-title valign" ><h5 class="center-align">Chat With customers</h5></span>
              
            </div>
           
          </div>
        </div>
        </a>
        <a href="adminview.php">
        <div class="col s12 m6">

          <div class="card blue-grey darken-1">
            <div class="card-content white-text">
              <span class="card-title"><h5 class="center-align">View All Products</h5></span>
             
            </div>
            
          </div>
        </div>
        </a>
      </div>
     
</div>
<script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.8/js/materialize.min.js"></script>
<script src="js/wow.min.js"></script>
              <script>
              new WOW().init();
              </script>
</body>
</html>