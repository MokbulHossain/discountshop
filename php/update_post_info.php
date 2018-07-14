<?php 
include 'config/connection.php';
//Update product info.....
if (isset($_POST['post_submit'])) {
  $product_category=$_POST['product_category'];
  $post_id=$_POST['post_id'];;
  $client_email=$_SESSION['email'];
  $product_name=$_POST['product_name'];
  $product_discription=$_POST['product_discription'];
  $discount_rate=$_POST['discount_rate'];
  $discount_start_date=$_POST['discount_start_date'];
  $discount_end_date=$_POST['discount_end_date'];
  $product_photo=addslashes(file_get_contents($_FILES["product_image"]["tmp_name"]));
  
     $query="UPDATE post_info SET post_name='$product_name',post_details='$product_discription',discount='$discount_rate',category='$product_category',discount_start_date='$discount_start_date',discount_end_date='$discount_end_date',product_image='$product_photo' where client_email='$client_email' and post_id='$post_id'"; 
   $result=mysqli_query($con,$query) or die('<script>alert("query problem")</script>');
   if ($result) {
     echo '<script>alert("Your Post Update Successful !!");
     window.location.href= "post-home.php";</script>';
   }
   else{echo '<script>alert("Your Post is Not Update Successful , Try again !!")</script>';}
 }

//select product info........
 if (isset($_GET['post_id'])) {
  $post_id=$_GET['post_id'];
  $client_email=$_SESSION['email'];
  $query="SELECT * FROM post_info WHERE post_id='$post_id' and client_email='$client_email'"; 
   $result=mysqli_query($con,$query) or die('<script>alert("query problem")</script>');
   $data=mysqli_fetch_array($result);
  $product_category=$data['category'];
  $product_name=$data['post_name'];
  $product_discription=$data['post_details'];
  $discount_rate=$data['discount'];
  $discount_start_date=$data['discount_start_date'];
  $discount_end_date=$data['discount_end_date'];
  $product_image=$data['product_image'];
 }
 else{header("Location: post-home.php");}
?>