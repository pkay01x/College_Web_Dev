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
	<link rel="stylesheet" href="assets/css/imageslider.css" />
</head>
<style>

</style>
<body class="homepage is-preload">
	<div id="page-wrapper">
	<?php require 'includes/header.php' 
	?>
	<?php require 'includes/navbar.php' 
	?>
	</div>

	<div>
	<section id="main" class="wrapper style1">
			<div class="title">Gallery</div>
				<div>		
				<section>
						  <nav id="nav">
						  <ul>
							<li><a id="nfts" href="">NFTS</a></li>
							<li><a id="draw" href="">Drawings & Paintigs</a></li>
							<li><a id="threed" href="">3D Arts</a></li>
							<li><a id="scifi" href="">Sci-Fi</a></li>
							<li><a id="aai" href="">AI & Arts</a></li>
						  </ul>
						  </nav>
				</div>
				
					<div id ="galleries">
						
						<div id="logo">

						<p><i class="arrow"></i></p>
						<br>
						<h1>Press To Load Gallery !</h1>
						</div>
						</div>
					</div>
			</section>
				</div>
				</div>
			</div>
		</section>
	

	</div>

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
	  <script src="gallery/gallery.js"></script>
	  
    </body>
  </html>