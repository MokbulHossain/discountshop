<?php 
include 'config/connection.php';
 if (isset($_POST['post_submit'])) {
  $product_category=$_POST['product_category'];
  $client_email=$_SESSION['email'];
  $product_name=$_POST['product_name'];
  $product_discription=$_POST['product_discription'];
  $discount_rate=$_POST['discount_rate'];
  $discount_start_date=$_POST['discount_start_date'];
  $discount_end_date=$_POST['discount_end_date'];
  $product_image=addslashes(file_get_contents($_FILES["poduct_image"]["tmp_name"]));
     $query="INSERT INTO post_info (client_email,post_name,post_details,discount,category,discount_start_date,discount_end_date,product_image) values ('$client_email','$product_name','$product_discription','$discount_rate','$product_category','$discount_start_date','$discount_end_date','$product_image')"; 
   $result=mysqli_query($con,$query) or die('<script>alert("query problem")</script>');
   if ($result) {
    echo '<script>alert("Your Post is Submitted !!");
    window.location.href= "post-home.php";</script>';
   }
   else{echo '<script>alert("Your Post is Not Submitted , Try again !!")</script>';}
 }
?>