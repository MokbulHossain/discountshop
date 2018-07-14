<?php
 if (! isset($_GET['post_id'])) { header("Location: post-home.php"); }
 include 'php/header_navbar.php'; include 'php/session.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Online Selling Site</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="image/x-icon" href="favicon.ico">
    <link rel="stylesheet" type="text/css" href="asset/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="asset/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="asset/css/style.css"> </head>

<body>
       <!--   =======navbar==========-->
    <section class="top-navbar">
   <?php session_check_for_product_details(); ?>
    </section>
    <section class="parralax-first-section">
        <h2 role="heading">20.000+ Offer From 1.000+ Stores</h2>
        <p>IT LOOKS LIKE IT'S BEEN FURNISHED BY DISCOUNT STORES</p>
    </section>
<?php
  
  if (isset($_GET['post_id'])) {
    include 'config/connection.php';
    $post_id=$_GET['post_id'];
  //echo '<script>alert("'.$post_id.'")</script>';
   $query="select * from post_info inner join client_info on post_info.client_email=client_info.email where post_info.post_id='$post_id'";
  $result=mysqli_query($con,$query);
  //printf("Error: %s\n", mysqli_error($con));
  $row=mysqli_fetch_array($result);
  $product_image=$row['product_image'];
  }
  else{ header("Location: post-home.php"); }
  
 ?>
  <section class="product-details">
      <div class="container">
          <div class="row">
              <div class="col-md-8">
                  <div class="cupon-wrapper">
                      <div class="row top-part">
                          <div class="col-md-4">
                              <div class="product-img">
                                  <a href="#">
                                   <img src="<?php echo 'data:image/jpeg;base64,'.base64_encode($product_image).''; ?>">
                                  </a>
                              </div>
                          </div>
                          <div class="col-md-8">
                               <div class="offer dis-offre">
                                        <button class="slide"><?php echo $row['discount']; ?>%</button>
                                    </div>
                                     <div class="social-list">
                                <h5 class="widget-header"><i class="fa fa-share-square-o" aria-hidden="true"></i>
                                 Share Your Post</h5>
                                <ul>
                                    <li style="background-color: #3B5998"><a href="#">Facebook</a></li>
                                    <li style="background-color: #00ACED"><a href="#">Twitter</a></li>
                                    <li style="background-color: #007BB6"><a href="#">Linkedin</a></li>
                                    <li style="background-color: #DD4B39"><a href="#">Google +</a></li>
                                    <li style="background-color: #517FA4"><a href="#">Instragram</a></li>
                                    <li style="background-color: #BD081C"><a href="#">Pinterest</a></li>
                                </ul>
                            </div>
                          </div>
                      </div>
                      
                      <hr>
                      
                        <div class="header-details">
                                    <h4><?php echo $row['shopname'].' | '.$row['post_name'].' || '.$row['discount'].'% Offer'; ?></h4> <p class="pull-left" role="region"><i class="fa fa-calendar" aria-hidden="true"></i> Expire:<?php echo ' '.$row['discount_end_date']; ?></p> 
                                       
                            </div>
                            <div class="cupon-desc">
                          <p><i class="fa fa-tag" aria-hidden="true"></i> <?php echo $row['post_details']; ?></p>  
                          <hr>
                               
                  </div>
                </div>
                
<!--    feedback-->
            
                   <div class="feedback-widget">
               <div class="feedback-header">
                   <h4>Leave a Feedback</h4>
                   <p>Your email is safe with us and we hate spam as much as you do.</p>
               </div>
               <?php if (isset($_POST['feedback_submit'])) {
                 $feedback_email=$_POST['feedback_email'];
                 $feedback_name=$_POST['feedback_name'];
                 $feedback_comment=$_POST['feedback_comment'];
                 $query="insert into feedback(feedback_email,feedback_name,feedback_comment) values ('$feedback_email','$feedback_name','$feedback_comment')";
                 if($result=mysqli_query($con,$query)){echo '<script>alert("Your Feedback Is Submitted !! Thank You !!.")</script>';}
                 else{echo '<script>alert("Try Again !!")</script>';}

               } ?>
                <form role="form" action="" method="Post">
                   <div class="row">
                    <div class="col-md-6">
                        <input type="email" class="form-control fb-input" placeholder="Enter Your Email" name="feedback_email" required> 
                        </div>
                        <div class="col-md-6">
                        <input type="text" class="form-control fb-input" placeholder="Enter Your Name" name="feedback_name" required> 
                        </div>
                        <div class="col-md-12">
                            <textarea rows="5" placeholder="Enter your comment" role="textbox" class="fb-text-box" name="feedback_comment" required></textarea>
                        </div>
                        <div class="col-md-12">
                        <button type="Submit" role="button" class="btn btn-success s-button" name="feedback_submit">Submit</button>
                       </div>
                    </div>
                </form>
            
        </div>
 
      
                            
                    
              </div>
              
<!--      aside-->
             <div class="col-md-4">
                 <aside class="side-bar">
                      <div class="widget">
                                <h3><i class="fa fa-tag" aria-hidden="true"></i> Best Coupon</h3>
                                <hr>
                                <ul>
                                    <li><a href="#"><i class="fa fa-check-square-o" aria-hidden="true"></i> MyLogo.com 10$ off</a></li>
                                    <li><a href="#"><i class="fa fa-check-square-o" aria-hidden="true"></i> 44$ off CompanieNamis</a></li>
                                    <li><a href="#"><i class="fa fa-check-square-o" aria-hidden="true"></i> 10% Discount Coupon from</a></li>
                                    <li><a href="#"><i class="fa fa-check-square-o" aria-hidden="true"></i> Free Shipping for All Orders</a></li>
                                    <li><a href="#"><i class="fa fa-check-square-o" aria-hidden="true"></i> $5 for for your next logo</a></li>
                                </ul>
                            </div>
                            <div class="widget store-list">
                                <h3><i class="fa fa-tag" aria-hidden="true"></i> Best Stores</h3>
                                <hr>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="post-media">
                                            <a href="#"><img src="asset/image/store/store_01.jpg" alt=""></a>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="post-media">
                                            <a href="#"><img src="asset/image/store/store_01.jpg" alt=""></a>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="post-media">
                                            <a href="#"><img src="asset/image/store/store_01.jpg" alt=""></a>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="post-media">
                                            <a href="#"><img src="asset/image/store/store_01.jpg" alt=""></a>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="post-media">
                                            <a href="#"><img src="asset/image/store/store_01.jpg" alt=""></a>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="post-media">
                                            <a href="#"><img src="asset/image/store/store_01.jpg" alt=""></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                             <div class="widget category-widget">
                                <h3><i class="fa fa-tag" aria-hidden="true"></i>Category</h3>
                                <hr>
                                <ul>
                                    <li><a href="#">Books</a></li>
                                    <li><a href="#">Electronics</a></li>
                                    <li><a href="#">Home Supplies</a></li>
                                    <li><a href="#">Laptops</a></li>
                                    <li><a href="#">Home Supplies</a></li>
                                    <li><a href="#">Laptops</a></li>
                                    <li><a href="#">Electronics</a></li>
                                    <li><a href="#">Books</a></li>
                                </ul>
                            </div>
                 </aside>
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