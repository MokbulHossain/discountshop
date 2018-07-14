<?php include 'php/session.php';session_check(); include 'php/submit_post.php'; include 'php/header_navbar.php'; ?>
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
    <link rel="stylesheet" type="text/css" href="asset/css/style.css">

     </head>

<body>
       <!--   =======navbar==========-->

    <section class="top-navbar">
       <?php inside_session(); ?>
    </section>
      <section class="parralax-first-section">
       
        <h2 role="heading">Product Details</h2>
        <p>20.000+ Offer From 1.000+ Stores</p>
    </section>
<!--   ==============post-registration-page===========-->
<section class="post-registration-page">
    <div class="container">
      <div class="row">
      <div class="col-md-12">
        <div class="user-post-details">
            <form method="Post" action="" enctype="multipart/form-data">
                <!--   ===========Product Category=============-->
            <div class="field">
            <p>Product Category</p>
            <label class="post-title" for="product"><i class="fa fa-server" aria-hidden="true"></i></label>
         <select  name="product_category" class="form-control" data-toggle="tooltip">
          <option value="Cloth">Cloth</option>
    <option value="shoes">Shoes</option>
    <option value="mobile_phone">Mobile Phone</option>
    <option value="computer_and_tablets">Computer And Tablets</option>
    <option value="Tv_and_video_accessories">TV And Video Accessories</option>   
    <option value="Furniture">Furniture</option>
    <option value="Machineries">Machineries</option>
    <option value="Medicine">Medicine</option>
    <option value="Gifts">Gifts</option>
    <option value="Sports">Sports</option>
    <option value="Baby_toy">Baby Toy</option>
    <option value="text_books">Text Books</option>
    <option value="Tution">Tution</option>
    <option value="cars_and_vehicles">Cars And Vehicles</option>
               </select> 
                </div>
                 <!--   ===========product Name=============-->
                  <div class="field">
                  <p>Product Name</p>
            <label class="post-title" for="name"><i class="fa fa-shopping-basket" aria-hidden="true"></i></label>
         <input list="product" name="product_name" placeholder="Enter Your product Name" class="form-control name-box" data-toggle="tooltip" data-placement="top" title="Product Name" required>
  <datalist id="product">
    <option value="Device">
    <option value="Cloth">
  </datalist>
                </div>
               
<!--  =======Description======-->
                  <div class="field">
             <p>Product Description</p>
            <label class="post-title" for="name"><i class="fa fa-desktop" aria-hidden="true"></i></label>
     
               <textarea rows="4" name="product_discription" cols="50" type="text" class="location-box"  placeholder="Description(Max 200)" data-toggle="tooltip" data-placement="top" title="Description(Max 200 Word)" required></textarea>
                </div>
                 <!--  =======Discount======-->
                 
                  <div class="field">
             <p>Discount %</p>
            <label class="post-title" for="name"><i class="fa fa-gift" aria-hidden="true"></i></label>
            <input type="number" name="discount_rate" class="form-control name-box" placeholder="Enter Your Discount" data-toggle="tooltip" data-placement="top" title="Product Name" required min="1" max="100"> 
                </div>
                <!-- Discount start Date -->
                 <div class="field">
             <p>Discount Start Date</p>
            <label class="post-title" for="name"><i class="fa fa-calendar" aria-hidden="true"></i></label>
            <input type="Date" name="discount_start_date" class="form-control" required> 
                </div>
                <!-- Discount End Date -->
                <div class="field">
             <p>Discount End Date</p>
            <label class="post-title" for="name"><i class="fa fa-calendar" aria-hidden="true"></i></label>
            <input type="Date" name="discount_end_date" class="form-control"  required> 
                </div>
<!--   ============upload image===========-->
                 
                  <hr>
                   <div class="field">
             <p>Upload Your Image</p>
           <div class="row">
               <div class="col-md-3 item-thumb">
                 <a href="#"><img id="blah" src="asset/image/post-img/postimg.png" alt=""></a>     
               </div>
               <div class="col-md-6 item-thumb">
               <input id="image" name="poduct_image" type="file" class="userinput-input" multiple="multiple" onchange="readURL(this);" accept=".jpg,.png,.jpeg">
               </div>
               <div class="col-md-3">
               <div class="intruction">
                <input type="checkbox" checked> upload orginal Picture.
                   </div>
                   <div class="intruction">
                <input type="checkbox" checked> Max File size 5mb.
                   </div>
                   <div  class="intruction">
                 <input type="checkbox" checked> Image  Format jpeg or png.
                   </div>
               </div>
           </div>
                </div>
                <div class="row">
                  <div class="col-md-9"></div>
                  <div class="col-md-3">
                    <button type="submit" style="" class=" btn btn-primary mb1 bg-navy" name="post_submit">Submit Post </button>
                  </div>
                </div>
                
            </form>
        </div>
          </div>
        </div>
    </div>
</section>
 
<!--==============post instruction============-->
<section class="post-registration-page">
   <div class="container">
      <div class="row">
          <div class="col-md-12">
               <div class="user-post-instruction">
                   <h4>Rules:</h4>
<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsum quia laborum rerum, nemo nam quaerat nisi accusantium possimus nostrum obcaecati!</p>
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
    <script type="text/javascript" src="asset/js/image_seen.js"></script>
   
</body>

</html>