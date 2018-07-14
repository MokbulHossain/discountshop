<?php 
include 'config/connection.php';
  if(isset($_POST['shop_name'])){
  	$shop_name=$_POST['shop_name'];
  	$contact_number=$_POST['contact_number'];
  	$loaction=$_POST['loaction'];
  	$email=$_POST['email'];
    $password=$_POST['password'];
        $query="INSERT INTO client_info (shopname,contactnumber,location,email,password) values ('".$shop_name."','".$contact_number."','".$loaction."','".$email."','".$password."')"; 
        $result=mysqli_query($con,$query);
        if($result===true){
        	echo '<script>alert("Your Registration is complete !!")</script>';
          session_start();
          $_SESSION['email']=$email;
          $_SESSION['password']=$password;
          header("Location: post-registration.php"); 
        } 
        else{echo '<script>alert("Try Again !!")</script>';}   
  }
?>
<h1>Registration</h1>
          <p>Every Information is required</p>
				  <form method="Post" action="" name="registration_form" id="registration_form">
            <div >
					<input type="text" name="shop_name" style="width: 100%;" placeholder="Shop Name">
					<input type="number" name="contact_number" style="width: 100%;" placeholder="Contact Number">
				   <input list="loaction" name="loaction" style="width: 100%;" type="text" placeholder="Choose Your Loaction" class="form-control name-box" >
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
                  </datalist>
                  <input type="email" style="width: 100%;" name="email" placeholder="Enter Your Email">
                  <input type="password" style="width: 100%;" name="password" placeholder="Password need more then 8 charecter">
				
					<input type="button" onclick="submit_registration_form()" name="registration" class=" form-control btn-success" value="Registration">
					
					</div>
				  </form>

           <script type="text/javascript">
            document.registration_form.password.innerHTML='';
  //For registration form submit and checking.....
  function submit_registration_form(){
              var shop_name=document.registration_form.shop_name.value;
              var contact_number=document.registration_form.contact_number.value;
              var loaction=document.registration_form.loaction.value;
              var email=document.registration_form.email.value;
              var password=document.registration_form.password.value.length;
              if(shop_name && contact_number && loaction && email && password>7){
                document.getElementById("registration_form").submit();
              }
            }
            //end submit registration form
            </script>