<?php
session_start();
error_reporting(0);
include('includes/config.php');
if(isset($_POST['login']))
  {
    $adminuser=$_POST['username'];
    $password=md5($_POST['password']);
    $query=mysqli_query($con,"select ID from tbladmin where  UserName='$adminuser' && Password='$password' ");
    $ret=mysqli_fetch_array($query);
    if($ret>0){
      $_SESSION['aid']=$ret['ID'];
     header('location:dashboard.php');
    }
    else{
     echo "<script>alert('Invalid details. Please try again.');</script>";   
   echo "<script>window.location.href='dashboard.php'</script>";
    }
  }
  ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Login Page</title

    <!-- Favicon -->
    <link rel="shortcut icon" href="favicon.ico">
    <link rel="icon" href="favicon.ico" type="image/x-icon">

    <!-- Custom CSS -->
    <link href="dist/css/style.css" rel="stylesheet" type="text/css">
	
	<style>
      marquee{
      font-size: 30px;
      font-weight: 800;
      color: #8ebf42;
      font-family: sans-serif;
      }
    </style>
</head>

<body>
    
   
    <!-- HK Wrapper -->
    <div class="hk-wrapper">

        <!-- Main Content -->
        <div class="hk-pg-wrapper hk-auth-wrapper">
            <header class="d-flex justify-content-between align-items-center">
			<marquee behavior="scroll" loop="infinite" scrolldelay="1" direction="left">
    <img src="1.jpg" width="120" height="80" alt="Natural" />
	 <img src="12.jpg" width="120" height="80" alt="Natural" />
	  <img src="13.jpg" width="120" height="80" alt="Natural" />
	   <img src="14.jpg" width="120" height="80" alt="Natural" />
	    <img src="15.jpg" width="120" height="80" alt="Natural" />
		 <img src="16.jpg" width="120" height="80" alt="Natural" />
		  <img src="17.jpg" width="120" height="80" alt="Natural" />
		   <img src="18.jpg" width="120" height="80" alt="Natural" />

  </marquee>
<a class="d-flex auth-brand align-items-center" href="#">
<span class="text-black font-50" style="font-family:Georgia;">Dairy Farm Handling</span><img src="logo.png" style="height:120px;width:120px">
                </a>
               
            </header>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-xl-5 pa-0">
                         <div class="auth-form-wrap py-xl-0 py-50">
     <div class="auth-form w-xxl-55 w-xl-75 w-sm-90 w-xs-100">
                                <form method="post">
                                    <h1 class="display-4 mb-10">Login or Sign up for customer</h1>
									
									<button class="btn btn-warning btn-block"><a href="indexcust.php">click here</a></button>

                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-7 pa-0">
                        <div class="auth-form-wrap py-xl-0 py-50">
     <div class="auth-form w-xxl-55 w-xl-75 w-sm-90 w-xs-100">
                                <form method="post">
                                    <h1 class="display-4 mb-10">login for Owner</h1>
                                 
<div class="form-group">
<input class="form-control" placeholder="Username" type="text" name="username" required="">
</div>

<div class="form-group">
<div class="input-group">
<input class="form-control" placeholder="Password" type="password" name="password" required="">
<div class="input-group-append">
<span class="input-group-text"><span class="feather-icon"><i data-feather="eye-off"></i></span></span>
</div>
</div>
</div>
                              
<button class="btn btn-warning btn-block" type="submit" name="login">Login</button>

     
                                </form>
                            </div>
							
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /Main Content -->

    </div>
    <!-- /HK Wrapper -->

    <!-- jQuery -->
    <script src="vendors/jquery/dist/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="vendors/popper.js/dist/umd/popper.min.js"></script>
    <script src="vendors/bootstrap/dist/js/bootstrap.min.js"></script>

    <!-- Slimscroll JavaScript -->
    <script src="dist/js/jquery.slimscroll.js"></script>

    <!-- Fancy Dropdown JS -->
    <script src="dist/js/dropdown-bootstrap-extended.js"></script>

    <!-- Owl JavaScript -->
    <script src="vendors/owl.carousel/dist/owl.carousel.min.js"></script>

    <!-- FeatherIcons JavaScript -->
    <script src="dist/js/feather.min.js"></script>

    <!-- Init JavaScript -->
    <script src="dist/js/init.js"></script>
    <script src="dist/js/login-data.js"></script>

  
</body>

</html>