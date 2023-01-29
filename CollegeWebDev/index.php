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
    <!-- Header -->
		<section id="header" class="wrapper">

			<!-- Logo -->
			<div id="logo">
				<h1><a href="index.html">N-X-S<br>Explore Digital Arts.</a></h1>
				<div calss="container">
					<p class="style2">
						Disclamer : It's responsive, built on HTML5 and CSS3.
						This project was build using raw Knowledge of <strong>Web Development</strong>. With the help of an existing Framework , CSS3 , Javascript and JQuery Libaries.
						I do not own the theme , Im using it for persoanl project under the Creative Commons Attribution 3.0 license.
					</p>
				</div>
			</div>

  <nav id="nav">
  <ul>
    <li class="current"><a href="index.php">Home</a></li>
    <li><a href="gallery.php">Gallery</a></li>
    <li><a href="about.php">About Us</a></li>
    <li><a href="store.php">Store</a></li>
	<?php if(!isset($_SESSION['email'])) { ?>
	<li><a href="register.php">LogIn / Sign Up</a></li>
	<?php } else { ?>
	<li>
	<a href=""><?php echo $_SESSION['name']; ?></a>
	<ul>
	<li><a href="index.php?logout='1'">LogOut</a></li>
	<li><a href="user_home.php">Change Passowrd</a></li>
	<li><a href="user_home.php">Userinfo</a></li>
    </ul>
    </li>
	<?php } ?>
  </ul>
  </nav>
</section>


<section id="main" class="wrapper style2">
			<div class="title"> What's New ?</div>
			<div class="container">
				<div class="row gtr-150">
					<div class="col-4 col-12-medium">

						<!-- Sidebar -->
						<div id="sidebar">
							<section class="box">
								<header>
									<h2>What is Digital Art ?</h2>
								</header>
								<p>
									Digital art, once called computer art or new media art, refers to art made using software, computers, or other electronic devices.
									Anything produced or made on digital media, such as animations, photographs, illustrations, videos, digital paintings, and such can be classified as digital art.
								</p>
							</section>
							<section class="box">
								<header>
									<h2>Concepts.</h2><hr />
								</header>
								<ul class="style2">
									<li>
										<article class="box post-excerpt">
											<a href="#" class="image left"><img src="art-images/13.png" alt="" /></a>
											<h3><a href="#">AI Meets Art !</a></h3>
											<p>AI Desings Digital Art With Some Keywords.</p>
											<br />
										</article>
									</li>
									<li>
										<article class="box post-excerpt">
											<a href="#" class="image left"><img src="art-images/2.png" alt="" /></a>
											<h3><a href="#">Science Fiction</a></h3>
											<p>Visions of the future and technology : space travel, mecha, dystopian cities.</p>
											<br />
										</article>
									</li>
									<li>
										<article class="box post-excerpt">
											<a href="#" class="image left"><img src="art-images/8.gif" alt="" /></a>
											<h3><a href="pixel.php">Pixel Art</a></h3>
											<p>Pixels used as building blocks to create fun, super retro characters to isometric objects.</p>
											<br />
										</article>
									</li>
								</ul>
								<a href="#" class="button style1">Archives</a>
							</section>
						</div>

					</div>
					<div class="col-8 col-12-medium imp-medium">

						<!-- Content -->
						<div id="content">
							<div class="row gtr-150">
								<div class="col-6 col-12-small">
									<section class="box">
										<header>
											<h2>Art by Today’s Leading Artists</h2>
										</header>
										<a href="#" class="image featured"><img src="art-images/1.jpg" alt="" /></a>
										<p>
											Find works by emerging and established artists at auction !
										</p>

									</section>
								</div>
								<div class="col-6 col-12-small">
									<section class="box">
										<header>
											<h2>Editor’s Picks</h2>
										</header>
										<a href="#" class="image featured"><img src="art-images/2.jpg" alt="" /></a>
										<p>
											A weekly curated selection of the best works on n-x-s by emerging and sought-after artists. All works available now.
										</p>
									</section>
								</div>
								<div class="col-6 col-12-small">
									<section class="box">
										<header>
											<h2>Future Fair: The Holiday Market</h2>
										</header>
										<a href="#" class="image featured"><img src="art-images/5.jpg" alt="" /></a>
										<p>
											The New Exhibition for a Collaborative Art Market On View.
										</p>
									</section>
								</div>

								<div class="col-6 col-12-small">
									<section class="box">
										<header>
											<h2>Editor’s Picks</h2>
										</header>
										<a href="#" class="image featured"><img src="art-images/6.jpg" alt="" /></a>
										<p>
											A weekly curated selection of the best works on n-x-s by emerging and sought-after artists. All works available now.
										</p>
									</section>
								</div>
							</div>
						</div>

					</div>
				</div>
			</div>
		</section>

		<section id="footer" class="wrapper">
					<div class="title">Sell Your Art !</div>
					<div class="container">
						<header class="style1">
							<h2>Do you have art peices that you want to sell ?</h2>
							<p>
								<a href="register.php">Get Started Now With Our Service Now !</a>
							</p>

						</header>

						<div class="row">
							<div class="col-6 col-12-medium">

								<!-- Contact Form -->
									<section>
										<form action="userinfo.php" method="post" action="#">
											<div class="row gtr-50">
												<div class="col-6 col-12-small">
													<input type="text" name="name" id="contact-name" placeholder="Name" />
												</div>
												<div class="col-6 col-12-small">
													<input type="text" name="email" id="contact-email" placeholder="Email" />
												</div>
												<div class="col-12">
													<textarea name="message" id="contact-message" placeholder="Message" rows="4"></textarea>
												</div>
												<div class="col-12">
													<ul class="actions">
														<li><input type="submit" class="style1" value="Send" /></li>
														<li><input type="reset" class="style2" value="Reset" /></li>
													</ul>
												</div>
											</div>
										</form>
									</section>

							</div>
							<div class="col-6 col-12-medium">

								<!-- Contact -->
								<section class="feature-list small">
								<div class="row">
									<div class="col-6 col-12-small">
										<section>
											<h3 class="icon solid fa-home">Mailing Address</h3>
											<p>
												Planet Earth.<br />
												1234 Somewhere in Nepal<br />
												Okie, XYZ 696969
											</p>
										</section>
									</div>
									<div class="col-6 col-12-small">
										<section>
											<h3 class="icon solid fa-comment">Social</h3>
											<p>
												@Pkay-corp<br />
												<a herf="#">linkedin.com/Pkay</a>
												<a herf="#">facebook.com/Pkay</a>
											</p>
										</section>
									</div>
									<div class="col-6 col-12-small">
										<section>
											<h3 class="icon solid fa-envelope">Email</h3>
											<p>
												<a href="#">hello@world.tld</a>
											</p>
										</section>
									</div>
									<div class="col-6 col-12-small">
										<section>
											<h3 class="icon solid fa-phone">Phone</h3>
											<p>
												+(42) 400-690-696
											</p>
										</section>
											</div>
										</div>
									</section>




























      <script src="assets/js/jquery.min.js"></script>
      <script src="assets/js/jquery.dropotron.min.js"></script>
      <script src="assets/js/browser.min.js"></script>
      <script src="assets/js/breakpoints.min.js"></script>
      <script src="assets/js/util.js"></script>
      <script src="assets/js/main.js"></script>
    </body>
  </html>
