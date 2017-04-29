 <?php
 include_once("Connection.php");
$result ="select * from additem where category = 'Books' and available = 1";
$res = mysqli_query($conn,$result);
$row_cnt = mysqli_num_rows($res);
        for($i=0;$i<$row_cnt;$i++)
        { ?>
      <div class="product-right-top">
              <div class="top-product">
                <div class="col-md-4 chain-grid  simpleCart_shelfItem">
                  <div class="grid-span-1">
                  <a  href="#">
                  <img class="img-responsive " src=<?php  $row = mysqli_fetch_array($res); $filepath[] = $row['img_path']; print $filepath[$i];  ?>   alt=" ">
                  <div class="link">
                  <ul >
                    <li><i> </i></li>
                    <li><i class="white1"> </i></li>
                    
              </ul>
                </div>
                </a>
              </div>
              
                <div class="grid-chain-bottom ">
                  <h6><a href="single.html"><?php  $ProductName[] = $row['ProductName'];print $ProductName[$i];   ?></a></h6>
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
                    <span class="item_price"><?php $price[] = $row['Price']; print $price[$i]; ?></span>
                  </div>
                    <div class="clearfix"> </div>
              </div>
              <div class="cart-add">
                <a class="add add1 item_add" href="#" id="<?php echo $row["id"]; ?>">ADD TO CART <i> </i></a>
                <a class="add2" href="#"><i> </i></a>
                <div class="clearfix"> </div>
              </div>
                </div>
                
              </div>
              </div>


            
          <?php
          }?>
           <script type="text/javascript">
                $(document).ready(function(){
    $(".add").click(function(){
     var id = $(this).attr('id');
    alert(id);
     $("#full").load("ecart.php",{'id': id});

    });
  });
          </script>