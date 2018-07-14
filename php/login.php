<?php 
include 'config/connection.php';
if (isset($_POST['login'])) {
	$email=$_POST['email'];
	$password=$_POST['password'];
	if ($email && $password) {
		$query="select * from client_info where email='$email' and password='$password'";
		    $result=mysqli_query($con,$query) or die("query is not execute !!");
		    $rowcount=mysqli_num_rows($result);
		if ($rowcount==1) {
			session_start();
			$_SESSION['email']=$email;
			$_SESSION['password']=$password;
			header("Location: post-home.php"); 
			

		}
		else{echo '<script>alert("Have Error , Try Again !!")</script>';}
	}
}
 ?>

<!-- Login -->
       <form action="" method="Post">
                             
                                      <div id="field">
                                    <label for="Password" class="re-ml"><i class="fa fa-envelope-o" aria-hidden="true"></i></label>
                                    <input type="email" style="width: 80%;height: 50px;" class="form-control re-width" name="email" tabindex="1" placeholder="Enter Your Email"> </div>
                                <div id="field">
                                    <label for="Password" class="re-ml"><i class="fa fa-unlock-alt" aria-hidden="true"></i></label>
                                    <input type="password" style="width: 80%;height: 50px;" class="form-control re-width" name="password" tabindex="1" placeholder="Enter Your PassWord"> </div>
                                <input type="submit" class="btn btn-success cl-button" name="login" value="Log In"> <a href="#">Forget Password !</a>
                             </form>