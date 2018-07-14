<!DOCTYPE html>
<html lang="en">
<?php include 'php/header_navbar.php'; ?>
<head>
    <meta charset="utf-8">
    <title>Online Selling Site</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="image/x-icon" href="favicon.ico">
    <link rel="stylesheet" type="text/css" href="asset/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="asset/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="asset/css/style.css">
     </head>

<body>
     <!--   =======navbar==========-->
    <section class="top-navbar">
      <?php outside_session(); ?>
      
    </section>
       <section class="parralax-first-section">
       
        <h2 role="heading">Log In</h2>
        <p>20.000+ Offer From 1.000+ Stores</p>
    </section>
    <section class="wrapper login-page">
        <div class="recuiter-part">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <div class="recuiter-login_16_03">
                          <?php include 'php/login.php';?>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="client-register_16_03"> <img src="image/not-registered.svg" alt="">
                            <h3>Not yet registered?</h3>
                            <p>If you'd like to find out more about how Jobsite can help you with your recruitment needs, please complete this enquiry form.</p>
                            <p>member of our Sales team will contact you shortly.</p>
                               <!-- Signin & Signup -->
                               <a href="#" data-toggle="modal" data-target="#login-modal" class="btn btn-success cl-button">Registration</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Registration -->
    <section class="res-modal">
        <div class="modal fade" id="login-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
    	  <div class="modal-dialog">
				<div class="loginmodal-container">
					<?php include 'php/registration.php'; ?>
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