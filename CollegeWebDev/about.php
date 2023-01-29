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
</head>
<body class="homepage is-preload">
	<div id="page-wrapper">
	<?php require 'includes/header.php' 
	?>
	<?php require 'includes/navbar.php' 
	?>
	</div>
<section id="main" class="wrapper style2">
<div class="title">The Details</div>
<div class="container">
<img  class="image featured" src="art-images\7.jpg" alt="" />
	<section id="features">
		<header class="style1">
			<h2>Our Services.</h2>
			<p>Just a portfolio service , where you can sell your art</p>
		</header>
		<div class="feature-list">
			<div class="row">
				<div class="col-6 col-12-medium">
					<section>
						<h3 class="icon fa-comment">SignUp</h3>
						<p>Eget mattis at, laoreet vel et velit aliquam diam ante, aliquet sit amet vulputate et magna feugiat laoreet vel velit lorem.</p>
					</section>
				</div>
				<div class="col-6 col-12-medium">
					<section>
						<h3 class="icon solid fa-sync">Get Verified</h3>
						<p>Eget mattis at, laoreet vel et velit aliquam diam ante, aliquet sit amet vulputate et magna feugiat laoreet vel velit lorem.</p>
					</section>
				</div>
				<div class="col-6 col-12-medium">
					<section>
						<h3 class="icon fa-image">Upload Your Art</h3>
						<p>Eget mattis at, laoreet vel et velit aliquam diam ante, aliquet sit amet vulputate et magna feugiat laoreet vel velit lorem.</p>
					</section>
				</div>
				<div class="col-6 col-12-medium">
					<section>
						<h3 class="icon solid fa-cog">Advertise</h3>
						<p>Eget mattis at, laoreet vel et velit aliquam diam ante, aliquet sit amet vulputate et magna feugiat laoreet vel velit lorem.</p>
					</section>
				</div>
				<div class="col-6 col-12-medium">
					<section>
						<h3 class="icon solid fa-wrench">Sell Your Art</h3>
						<p>Eget mattis at, laoreet vel et velit aliquam diam ante, aliquet sit amet vulputate et magna feugiat laoreet vel velit lorem.</p>
					</section>
				</div>
				<div class="col-6 col-12-medium">
					<section>
						<h3 class="icon solid fa-check">Earn Thorugh Your Creativity!</h3>
						<p>Eget mattis at, laoreet vel et velit aliquam diam ante, aliquet sit amet vulputate et magna feugiat laoreet vel velit lorem.</p>
					</section>
				</div>
			</div>
		</div>
		<ul class="actions special">
			<li><a href="#" class="button style1 large">Get Started</a></li>
			<li><a href="#" class="button style2 large">More Info</a></li>
		</ul>
	</section>

</div>
</section>
<div>
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