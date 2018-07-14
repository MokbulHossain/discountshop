<?php
include 'config/connection.php';
$ab='';
 if (isset($_POST['update_profile'])) {
 	$shop_name=$_POST['shop_name'];
  	$shop_address=$_POST['shop_address'];
  	$contact_number=$_POST['shop_contact_number'];
  	$loaction=$_POST['loaction'];
  	$client_email=$_SESSION['email'];
    $shop_logo=addslashes(file_get_contents($_FILES["shop_logo"]["tmp_name"]));
    //$query="update client_info set shopname='$shop_name',shoplogo='$shop_logo',location='$loaction',shopaddress='$shop_address',contactnumber='$contact_number' where email='$email' and password='$password'";
     $query="update client_info set shopname='$shop_name',shoplogo='$shop_logo',location='$loaction',shopaddress='$shop_address',contactnumber='$contact_number' where email='$client_email'";
    $result=mysqli_query($con,$query) or die('<script>alert("There Have Problem !!"); window.location.href= "update_profile.php"; </script>');
    if($result===true){
    	unset($ab);
    	echo '<script>alert("Your Profile Update Complete !!");
           window.location.href= "post-home.php"; 
    	</script>';
       
    }
    else{echo '<script>alert("Your Profile Update is Not Complete !!")</script>';}
 }
 ?>