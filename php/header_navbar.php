<?php 
 function inside_session(){
          include 'config/connection.php';
           $client_email=$_SESSION['email'];
           $query="select shoplogo from client_info where email='$client_email'";
           $result=mysqli_query($con,$query);
           $result=mysqli_fetch_row($result);
          echo '<nav class="navbar navbar-default navbar-fixed-top">
                <ul class="nav navbar-nav">
            <li class=""><a href="post-home.php"><h4>Home</h4></a></li>   
                   </ul>
                 <div class="navbar-header">
                   <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false"> <span class="sr-only"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
                         <a class="navbar-brand" href="post-home.php"><img src="asset/image/logo.png" alt="img" class="img-responsive"></a>
                </div>
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav"> </ul>
                    <ul class="nav navbar-nav navbar-right">
                      <!-- shop logo -->
                    <li class="ui-nav-item" >';
                     if (empty($result[0])) {
                    echo' <img class="img-circle" style="height: 40px;width: 40px; margin-top: 5px;" src="asset/image/default_logo.png">';
                  }
                  else{
                    echo' <img class="img-circle" style="height: 40px;width: 40px; margin-top: 5px;" src="data:image/jpeg;base64,'.base64_encode($result[0]).'" alt="img">';
                  }
                    echo'  
                        </li>

                        <li class="ui-nav-item" >
                            <p class="navbar-btn"><a href="post-registration.php" class="btn btn-default">Give Post</a> </p>
                        </li>
                        <li class="ui-nav-item" >
                            <div class="btn-group">
  <button type="button" style="margin-top:10%;" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    Setting <span class="caret"></span>
  </button>
  <ul class="dropdown-menu">
    <li><a href="update_profile.php">Update-Profile</a></li>
  </ul>
</div>
                        </li>
   <li class="ui-nav-item"><a href="php/logout.php"><i class="fa fa-user" aria-hidden="true"></i> Log Out</a></li>
                    </ul>
                </div>
        </nav>';
        }
function outside_session(){
          echo '<nav class="navbar navbar-default navbar-fixed-top">
            <div class="container">
                 <ul class="nav navbar-nav">
            <li class=""><a href="index.php"><h4>Home</h4></a></li>   
                   </ul>
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false"> <span class="sr-only"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
                       <a class="navbar-brand" href="index.php"><img src="asset/image/logo.png" alt="img" class="img-responsive"></a>
                     </div>
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav"> </ul>
                    <ul class="nav navbar-nav navbar-right" style="margin-top: .5%;">
                        <li class="ui-nav-item"><a href="login-page.php"><i class="fa fa-user" aria-hidden="true"></i> Log In</a></li>
                        <li>
                            <p class="navbar-btn"><a href="login-page.php" class="btn btn-default">Give Post</a> </p>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>';
        }
 ?>
