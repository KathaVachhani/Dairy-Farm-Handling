<?php
session_start();
if (isset($_SESSION["username"])) {
    $username = $_SESSION["username"];
    session_write_close();
} else {
    // since the username is not set in session, the user is not-logged-in
    // he is trying to access this page unauthorized
    // so let's clear all session variables and redirect him to index
    session_unset();
    session_write_close();
    $url = "./indexcust.php";
    header("Location: $url");
}

?>
<HTML>
<HEAD>
<TITLE>Welcome</TITLE>
<link href="assets/css/phppot-style.css" type="text/css"
	rel="stylesheet" />
<link href="assets/css/user-registration.css" type="text/css"
	rel="stylesheet" />
	<style>
  .stars {
    background-color: white;
    height: 30px;
    width: 30px;
    border-radius: 50%;
    animation-iteration-count: infinite;
  }

  .star-1 {
    margin-top: 1%;
    margin-left: 60%;
    animation-duration: 1s;
    animation-name: twinkle;
  }

  .star-2 {
    margin-top: 10%;
    margin-left: 25%;
    animation-duration: 0.9s;
    animation-name: twinkle;
  }

  .star-3 {
    margin-top: 1%;
    margin-left: 50%;
    animation-duration: 1.1s;
    animation-name: twinkle;
  }

  @keyframes twinkle {
    20% {
      transform: scale(0.5);
      opacity: 0.5;
    }
  }

  #back {
    position: fixed;
    padding: 0;
    margin: 0;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: linear-gradient(black, #000099, #66c2ff, #ffcccc, #ffeee6);
  }
</style>
</HEAD>
<BODY>
<div id="back">
	<div class="phppot-container">
		<div class="page-header">
			<span class="login-signup"><a href="logoutcust.php" style="color:white;">Logout</a></span>
		</div><br><br>
		<div class="page-content" style="font-size:35px; color:white;">Welcome <?php echo $username;?></div><br><br><br>
		<center><button><a href="search-product1.php" style="text-decoration:none;"> Shop Now </button><br><br>
				<button><a href="cust.php" style="text-decoration:none;"> Search record by using invoice number </button>
				<button><a href="cust1.php" style="text-decoration:none;"> Search record by using contact number </button>
		</center>
	</div>
	<div class="star-1 stars"></div>
	<div class="star-2 stars"></div>
	<div class="star-3 stars"></div>
</div>
</BODY>
</HTML>
