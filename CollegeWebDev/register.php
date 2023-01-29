
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
	<?php include 'includes/header.php' ?>
	<?php include 'includes/navbar.php' ?>
	</div>



<div>
<?php require 'login.php' ?>
</div>
<div>
<?php require 'signup.php' ?>
</div>



<div>
<?php include 'includes/footer.php' ?>
</div>

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