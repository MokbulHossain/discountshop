
<?php include 'php/session.php';session_check(); include 'php/update_profile_info.php'; include 'php/header_navbar.php'; ?>
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
    <style type="text/css">
      .padding{
        padding: 25px;
      }
    </style>
     </head>

<body>
      <!--   =======navbar==========-->
    <section class="top-navbar">
        <?php inside_session(); $shoplogo='';
        $client_email=$_SESSION['email'];
          $query="select * from client_info where email='$client_email'";
          $result=mysqli_query($con,$query);
          $row=mysqli_fetch_row($result);
          $shoplogo=$row[4];
        ?>
    </section>
<!--   ==============Update Profile===========-->
  <section class="post-page-home" style="margin-top: 10%;">
    <div class="container">
      <div class="row">
      <div class="col-md-12">
    <form method="Post" action="" enctype="multipart/form-data">

         <div class="field">
           <h4>Shop Name</h4>
            <input type="text" required  class="form-control padding" name="shop_name" placeholder="Shop name" value="<?php echo $row[3]; ?>">
                </div> 
                <h4>Shop Address </h4>
          <textarea class="form-control padding" cols="" rows="3" name="shop_address" placeholder="Shop Address" required><?php echo $row[6]; ?></textarea><br>
          <h4>Shop Location </h4>
           <input list="loaction" required  name="loaction" type="text" placeholder="Choose Your Loaction" class="form-control name-box padding" value="<?php echo $row[5]; ?>" >
                  <datalist id="loaction" >
            <option value="Bogra">
<option value="Jessore">
<option value="Cox's Bazar">
<option value="Brahmanbaria">
<option value="Dinajpur">
<option value="Nawabganj">
<option value="Tangail">
<option value="Sirajganj">
<option value="Feni">
<option value="Jamalpur">
<option value="Pabna">
<option value="Noakhali">
<option value="Faridpur">
<option value="Kushtia">
<option value="natore">
<option value="gazipur">     
                  </datalist><br>
                  <h4>Shop Contact Number </h4>
                  <input type="number" required style="width: 100%;" class="form-control padding" name="shop_contact_number" placeholder="Shop Contact Number" value="<?php echo $row[7]; ?>"><br><br>
                  <h3>Upload Your Shop Logo</h3>
                  <br>
           <div class="row">
               <div class="col-md-3 item-thumb">
                <?php if ($shoplogo) {
                  echo '<a href="#"><img id="blah" style="width: 95%;height: 40%;" src="data:image/jpeg;base64,'.base64_encode($shoplogo).'" alt="img"></a>';
                } 
                else{
                  echo '<a href="#"><img id="blah" style="width: 95%;height: 40%;" src="asset/image/post-img/postimg.png" alt=""></a>';
                }
                ?>
                      
               </div>
               <div class="col-md-6 item-thumb">
               <input name="shop_logo" required  type="file" class="userinput-input" multiple="multiple" onchange="readURL(this);" accept=".jpg,.png,.jpeg">
               </div>
             </div><br><br>
          <input type="submit" style="height: 10%;" name="update_profile" class=" form-control btn-success btn-lg" value="Update Profile">
          </form>
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
    <script src="asset/js/image_seen.js"></script>
</body>

</html>