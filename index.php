<!DOCTYPE html>
<html lang="en">
<?php include 'php/header_navbar.php'; include 'php/delete_expire_post.php'; ?>
<head>
    <meta charset="utf-8">
    <title>Online Selling Site</title>
    <meta name="description" content="">
    
    <link rel="shortcut icon" type="image/x-icon" href="favicon.ico">
    <link rel="stylesheet" type="text/css" href="asset/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="asset/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="asset/css/style.css"> 
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,
400,400i,600,600i,700,700i,800,800i,900,900i&amp;subset=latin-ext,vietnamese" rel="stylesheet">
    
    </head>

<body>
    <!--   =======navbar==========-->
    <section class="top-navbar"> 
       <?php outside_session(); ?>   
    </section>
    <section class="parralax-first-section">
        <div class="container">
            <h2 role="heading">20.000+ Offer From 1.000+ Stores</h2>
            <div class="ui-header-body" style="margin-right: 116px">
                <div class="row">
                    <div class="col-md-5 col-12">
                        <div class="ui-search-option">
                            <div class="row">
                                <form method="get" action="">
                                <div class="col-md-8">
                                    
                                        <input type="text" class="input-form ui-input" name="location_value" placeholder="Enter Your Location" required> 
                                </div>
                                <div class="col-md-4">
                                    <div class="ui-right">
                                        <button type="submit" class="btn-success gtm-search"><i class="fa fa-search" aria-hidden="true"></i>Search</button>
                                    </div>
                                </div></form>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-2 col-12">
                        <div class="ui-category-button">
                            <button type="button" class="btn ui-button btn-success" data-toggle="modal" data-target=".bs-example-modal-lg-2"><small>Category</small></button>
                        </div>
                    </div>
                    <div class="col-md-5 col-12">
                        <div class="ui-search-option">
                               <div class="row">
                                <form method="get" action="">
                                <div class="col-md-8">
                                    
                                        <input type="text" class="input-form ui-input" name="shop_name" placeholder="Enter Shop Name" required> 
                                </div>
                                <div class="col-md-4">
                                    <div class="ui-right">
                                        <button type="submit" class="btn-success gtm-search"><i class="fa fa-search" aria-hidden="true"></i>Search</button>
                                    </div>
                                </div></form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--============ui-panel-header ============-->
    <section class="wrapper ui-panel-header">
        <div class="container">
            <div class="row">
                <div class="col-md-2">
                    <div class="company-list">
                        <a href="#"><img src="asset/image/store/store_01.jpg" alt="" class="img-responsive"></a>
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="company-list">
                        <a href="#"><img src="asset/image/store/store_02.jpg" alt=""></a>
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="company-list">
                        <a href="#"><img src="asset/image/store/store_03.jpg" alt="" class="img-responsive"></a>
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="company-list">
                        <a href="#"><img src="asset/image/store/store_04.jpg" alt=""></a>
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="company-list">
                        <a href="#"><img src="asset/image/store/store_05.jpg" alt=""></a>
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="company-list">
                        <a href="#"><img src="asset/image/store/store_06.jpg" alt=""></a>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- =======  featured-item=======-->
    <section class="featured ">
        <div class="container">
            <div class="row">
                <!-- discount with company logo start -->
                <?php 
                $location=''; $shop_name='';$category='';$ab='';
                if (isset($_GET['location_value'])) {
                     $location=$_GET['location_value'];
                 }
                 elseif (isset($_GET['shop_name'])) {
                     $shop_name=$_GET['shop_name'];
                 }
                 elseif (isset($_GET['category'])) {
                     $category=$_GET['category'];
                 }

                 else{ $ab='5';} 
                
                include 'php/index_pagination.php';
            while($crow = mysqli_fetch_array($nquery)){
                $shoplogo=$crow['shoplogo'];$post_catch_id=$crow['post_id'];
            ?>
               <div class="col-md-4">
                    <div class="company-tvs-list">
                        <div class="company-logo">
                            <a href="#"><img src="<?php echo 'data:image/jpeg;base64,'.base64_encode($shoplogo).''; ?>"></a>
                            <div class="offer-corner-design">
                                <h4><?php echo $crow['discount']; ?>%</h4> </div>
                        </div>
                        <div class="offer">
                            <button class="slide"><?php echo $crow['discount']; ?>%</button>
                        </div>
                        <div class="conpany-details"> <a class="header" href="product-details.php"><?php echo $crow['shopname'].' | '.$crow['post_name']; ?></a>
                            <div class="member-part"> <a href="#"><span class="member">Member</span> ,<?php echo $crow['location']; ?></a> </div>
                            <?php
                             echo '<a href="product-details.php?post_id='.$post_catch_id.'" class="view-more-button">view details <i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>'; ?>
                             </div>
                    </div>
                </div>
                 <!-- discount with company logo end -->
            <?php
            }       
        ?>
            </div>
        </div>
    </section>
    <!--   pagination-->
  <div class="pagination-part">
      <div class="container">
             <div class="row">
                <div class="col-md-12 text-right">
                    <!-- <ul class="pagination"> 
                        <li class="active"><a href="#"><i class="fa fa-angle-left"></i></a></li>
                        <li><a href="#">1</a></li>
                        <li><a href="#">2</a></li>
                        <li><a href="#">3</a></li>
                        <li><a href="#">4</a></li>
                        <li><a href="#">...</a></li>
                        <li><a href="#">20</a></li>
                        <li class="active"><a href="#"><i class="fa fa-angle-right"></i></a></li>
                    </ul>-->
                    <div id="pagination_controls"><?php echo $paginationCtrls; ?></div>
                </div>
               
            </div>
      </div>
  </div>
  
    <!-- ========category-Modal=======-->
       <section class="location-modal">
        <div class="modal fade bs-example-modal-lg-2" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <h3 class="lead">Select a Category:</h3>
                    <form action="" method="get">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="catergory-left">
                                <ul>
                                    <li><a href="">All Categories <i class="fa fa-arrow-circle-down" aria-hidden="true"></i></a></li>
                                    <li class="dropdown"> <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="fa fa-gg" aria-hidden="true"></i> Electronics <span class="caret"></span></a>
                                        <ul class="dropdown-menu">
                                            <li><a href="?category=mobile_phone">Mobile Phone</a></li>
                                            <li><a href="?category=computer_and_tablets">Computer & Tablets</a></li>
                                            <li><a href="?category=Tv_and_Video_Accessories">Tv & Video Accessories</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="?category=Cars_and_Vehicles"><i class="fa fa-car" aria-hidden="true"></i> Cars & Vehicles</a></li>
                                    <li><a href="?category=Property"><i class="fa fa-home" aria-hidden="true"></i> Property</a></li>
                                    <li class="dropdown"> <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="fa fa-graduation-cap" aria-hidden="true"></i> Education <span class="caret"></span></a>
                                        <ul class="dropdown-menu">
                                            <li><a href="?category=Text_Books">Text Books</a></li>
                                            <li><a href="?category=Tuition">Tuition</a></li>
                                            
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="border"></div>
                        <div class="col-md-6">
                            <div class="category-left">
                                <ul>
                                     
                                    <li><a href="?category=Cloths">Cloths</a></li>
                                    <li><a href="?category=Shoes">Shoes</a></li>
                                    <li><a href="?category=Machineries">Machineries</a></li>
                                    <li><a href="?category=Furniture">Furniture</a></li>
                                    <li><a href="?category=Medicine">Medicine</a></li>
                                    <li><a href="?category=Gifts">Gifts</a></li>
                                     <li><a href="?category=Baby_Toys">Baby Toys</a></li>
                                     <li><a href="?category=Sports">Sports</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <form>
                </div>
            </div>
        </div>      
    </section>
    
<!--top category-->
   
   <section class="pupolar-list">
       <div class="container">
          <div class="popular-list-widget">
            <div class="heading"><i class="fa fa-align-right" aria-hidden="true"></i> Popular Tag</div>
           <div class="row">
               <div class="col-md-2">
                   <div class="custom-list">
                       <a href="#"><i class="fa fa-check-square-o" aria-hidden="true"></i> Baby Kids</a>
                   </div>
               </div>
                 <div class="col-md-2">
                   <div class="custom-list">
                       <a href="#"><i class="fa fa-check-square-o" aria-hidden="true"></i> Laptops</a>
                   </div>
               </div>
                 <div class="col-md-2">
                   <div class="custom-list">
                       <a href="#"><i class="fa fa-check-square-o" aria-hidden="true"></i> Baby Toys</a>
                   </div>
               </div>
                 <div class="col-md-2">
                   <div class="custom-list">
                       <a href="#"><i class="fa fa-check-square-o" aria-hidden="true"></i> Books</a>
                   </div>
               </div>
                 <div class="col-md-2">
                   <div class="custom-list">
                       <a href="#"><i class="fa fa-check-square-o" aria-hidden="true"></i> Gifts</a>
                   </div>
               </div>
                 <div class="col-md-2">
                   <div class="custom-list">
                       <a href="#"><i class="fa fa-check-square-o" aria-hidden="true"></i> Entertainetmen</a>
                   </div>
               </div>
                 <div class="col-md-2">
                   <div class="custom-list">
                       <a href="#"><i class="fa fa-check-square-o" aria-hidden="true"></i> Phones</a>
                   </div>
               </div>
                 <div class="col-md-2">
                   <div class="custom-list">
                       <a href="#"><i class="fa fa-check-square-o" aria-hidden="true"></i> Clothings</a>
                   </div>
               </div>
                 <div class="col-md-2">
                   <div class="custom-list">
                       <a href="#"><i class="fa fa-check-square-o" aria-hidden="true"></i> Medical</a>
                   </div>
               </div>
                 <div class="col-md-2">
                   <div class="custom-list">
                       <a href="#"><i class="fa fa-check-square-o" aria-hidden="true"></i> Computers</a>
                   </div>
               </div>
                 <div class="col-md-2">
                   <div class="custom-list">
                       <a href="#"><i class="fa fa-check-square-o" aria-hidden="true"></i> Travel</a>
                   </div>
               </div>
                 <div class="col-md-2">
                   <div class="custom-list">
                       <a href="#"><i class="fa fa-check-square-o" aria-hidden="true"></i> Sports</a>
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