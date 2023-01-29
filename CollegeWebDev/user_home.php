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
    <link rel="stylesheet" href="assets/css/alert.css" />
</head>
<body class="homepage is-preload">
	<div id="page-wrapper">
		<section id="header" class="wrapper">

		<div>
		<?php include('includes/user_login_info.php') ?>
        </div>
  <nav id="nav">
  <ul>
    <li><a href="index.php">Home</a></li>
    <li>
    <a href="gallery.php">Gallery</a></li>
    <li><a href="about.php">About Us</a></li>
    <li><a href="store.php">Store</a></li>
	<li>
    <a href=""><?php echo $_SESSION['name']; ?></a>
    <ul>
	<li><a href="index.php?logout='1'">LogOut</a></li>
    <li><a href="">Change Passowrd</a></li>
    <li><a href="">Userinfo</a></li>
    </ul>
    </li>
  </ul>
  </nav>
</section>

<section id="main" class="wrapper style3">
			<div class="title"> User Info</div>
			<div class="container">
                    <?php if (isset($_SESSION['name'])) : ?>
					<h1>Name: <?php echo $_SESSION['name']; ?></h1>
					<h1>Email: <?php echo $_SESSION['email']; ?></h1>
					<h1>Phone: <?php echo $_SESSION['phone']; ?></h1> 
					<?php endif; ?>

            </div>
</section>

<section id="main" class="wrapper style1">
<div class="title"> Change Your Passowrd Here ! </div>
<div class="container">
<div class="row aln-center">
							<?php include('includes/user_password_change.php') ?>
							<div class="col-6 col-12-medium">
									<section class="box">
										<form action="" method="post">
										<div>
												<?php  if (count($errors_cpassword) > 0) : ?>
												<div class="alert show" role="alert">
												<div class="alert danger-alert">
												<?php foreach ($errors_cpassword as $error_cpassword) : ?>
  												 <h3><?php echo $error_cpassword ?></h3>
												<a class="close">&times;</a>
												</div>
												</div>
  												<?php endforeach ?>
												<?php  endif ?>
										</div>

												<div class="col-6 col-12-small">
													<input type="password" name="current_password" id="password" placeholder="Current Passowrd" required/>
												</div>
												<hr>
												<div class="col-6 col-12-small">
													<input type="password" name="new_password" id="password" placeholder="New Password" requried/>
												</div>
												<br>
												<div class="col-6 col-12-small">
													<input type="password" name="confirm_new_password" id="password" placeholder="Confirm New Password" requried/>
												</div>
												<br>
											<div class="row aln-center col-12-small">
											<ul>
											<ul class="actions">
									
														<li><input type="submit" class="style3" name="change_password" value="Change Password" /></li>
														<li><input type="reset" class="style2" value="Reset" /></li>
													</ul>
											</ul>
										</form>
									</div>
									</section>
							</div>
</section>



      <script src="assets/js/jquery.min.js"></script>
      <script src="assets/js/jquery.dropotron.min.js"></script>
      <script src="assets/js/browser.min.js"></script>
      <script src="assets/js/breakpoints.min.js"></script>
      <script src="assets/js/util.js"></script>
      <script src="assets/js/main.js"></script>
      	<script>
	$(".close").click(function() {
	 $(this)
    .parent(".alert")
    .fadeOut();
	});
	</script>
</body>
</html>