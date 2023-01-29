<?php 
  session_start(); 

  if (!isset($_SESSION['name'])) {
  	$_SESSION['msg'] = "You must log in first";
  	header('location: register.php');
  }
  if (isset($_GET['logout'])) {
  	session_destroy();
  	unset($_SESSION['name']);
  	header("location: register.php");
  }
?>
<!DOCTYPE HTML>
<html>
<head>
	<title>N-X-S</title>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
	<link rel="stylesheet" href="assets/css/main.css" />
	<link rel="stylesheet" href="assets/css/product_contents.css" />
</head>
<body class="homepage is-preload">
	<div id="page-wrapper">
	<?php require 'includes/header.php' 
	?>
	<?php require 'includes/navbar.php' 
	?>
	</div>
	<section id="main" class="wrapper style2">
			<div class="title"> Buy Prodcut Here!</div>
						<?php require 'products/product.php' ?>
	</section>
	<?php include 'includes/footer.php'
	?>
	</div>

	  <script src="assets/js/jquery.min.js"></script>
      <script src="assets/js/jquery.dropotron.min.js"></script>
      <script src="assets/js/browser.min.js"></script>
      <script src="assets/js/breakpoints.min.js"></script>
      <script src="assets/js/util.js"></script>
      <script src="assets/js/main.js"></script>
    </body>
  </html>