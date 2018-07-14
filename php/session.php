<?php 
  function session_check(){
  	session_start();
  	if ( !isset($_SESSION['email']) && !isset($_SESSION['password'])) {
        session_destroy();
        header("Location: index.php");
          exit();
  	}
  }

  function session_check_for_product_details(){
  	session_start();
  	if ( !isset($_SESSION['email']) && !isset($_SESSION['password'])) {
        session_destroy();
        outside_session();
  	}
  	else{ inside_session(); }
  }


?>