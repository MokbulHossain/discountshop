<!DOCTYPE html>
<html lang="en">
<?php include 'php/session.php';session_check();include 'php/header_navbar.php' ?>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=0, initial-scale=.5, maximum-scale=1">
    <title>Online Selling Site</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="image/x-icon" href="favicon.ico">
    <link rel="stylesheet" type="text/css" href="asset/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="asset/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="asset/css/style.css"> 
     <style type="text/css">
     @media (min-width: 0px) and (max-width: 767px) {
    .margin_top {
        margin-top:30%;
    }
}
</style>
  </head>

<body>
      <!--   =======navbar==========-->
    <section class="top-navbar">
      <div class="container">
        <?php inside_session(); ?></div>
    </section>
<!--   ==============post-page===========-->
  <section class="post-page-home">
      <div class="container">
         <div class="" style="margin-top:20%;">
          <div class="row">
              <div class="col-md-12 margin_top">
          <h4>Welcome Radwan Ahmed Anik! Let's post an ad. Choose any option below:</h4> </div> </div>
          <div class="row">
              <div class="col-md-6 col-12">
                  <div class="sell-something">
                     <div class="sell-top-img">
                         <img src="asset/image/sellimg.png" alt="" class="img-responsive">
                     </div>
                      <h5 class="text-center mt-sell">Sell Something</h5>
                      <hr>
                      <ul>
                          <li><a href=""><i class="fa fa-angle-double-right" aria-hidden="true"></i> Sell An Item Or Service</a></li>
                          <li><a href=""><i class="fa fa-angle-double-right" aria-hidden="true"></i> offer a property for Rent</a></li>
                          <li><a href=""><i class="fa fa-angle-double-right" aria-hidden="true"></i> Sell An Item Or Service</a></li>
                      </ul>
                  </div>
              </div>
              <!-- ====Your post === -->
                 <div class="col-md-6 col-12">
                  <div class="sell-something">
                     <div class="sell-top-img">
                         <img src="asset/image/wanted-1x-0487f1af.png" alt="" class="img-responsive">
                     </div>
                      <h5 class="text-center mt-sell">Your Post Which is not Finished ..</h5>
                      <hr>
                      <ul>
                        <?php 
                         include 'config/connection.php';
                         $client_email=$_SESSION['email'];
                         $query="select * from post_info where client_email='$client_email'";
                         $result=mysqli_query($con,$query);
                         while ($row=mysqli_fetch_array($result)) {
                             $post_catch_id=$row['post_id'];
                           echo ' <a style="color:blue;" href="post-update.php?post_id='.$post_catch_id.'"> Edit </a> <a href="product-details.php?post_id='.$post_catch_id.'"><i class="fa fa-angle-double-right" aria-hidden="true"></i>'.$row['post_name'].'</a></li><br><br>';
                         }
                       
                         ?>
                      </ul>
                  </div>
              </div>
              </div>
          </div>
      </div>
  </section>
  
   
<!--  footer-->
  <div class="footer">
      <div class="container">
          <div class="row">
              <div class="col-md-3">
                  <div class="footer-wrapper">
                <a href="#"><img src="asset/image/logo.png" alt="image"></a>
                 <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Deserunt inventore atque aspernatur assumenda repellat tempora, debitis adipisci quasi eaque hic! </p>
                  </div>
                  
              </div>
                <div class="col-md-3">
                  <div class="footer-wrapper">
                     <h4>FAQ</h4>
                      <ul>
                          <li><a href="#">How it works?.</a></li>
                          <li><a href="#">Terms & Conditions</a></li>
                          <li><a href="#">Help</a></li>
                          <li><a href="#">Contact</a></li>
                       
                      </ul>
                  </div>
                  
              </div>
               <div class="col-md-3">
                  <div class="footer-wrapper">
                     <h4>Category</h4>
                      <ul>
                          <li><a href="#">Fashion</a></li>
                          <li><a href="#">Accesories</a></li>
                          <li><a href="#">Home & Garden</a></li>
                          <li><a href="#">Furniture</a></li>
                          <li><a href="#">Electronics</a></li>
                      </ul>
                  </div>
                  
              </div>
               <div class="col-md-3">
                  <div class="footer-wrapper">
                     <h4>Menu</h4>
                      <ul>
                          <li><a href="#">Sign In</a></li>
                          <li><a href="#">All Shops</a></li>
                          <li><a href="#">Daily Offer</a></li>
                          
                      </ul>
                  </div>
                  
              </div>
          </div>
      </div>
  </div>
   
    <script src="asset/js/jquery-3.1.1.min.js"></script>
    <script src="asset/js/bootstrap.min.js"></script>
    <script src="asset/js/script.js"></script>
</body>

</html>