<?php
session_start();


$username = "";
$email    = "";
$pnumber = "";
$errors = array();


// connect to the database
$db = mysqli_connect('localhost', 'root', '', 'nxs_port');

// REGISTER USER
if (isset($_POST['signup'])) {

  $username = mysqli_real_escape_string($db, $_POST['signup_name']);
  $email = mysqli_real_escape_string($db, $_POST['signup_email']);
  $password_1 = mysqli_real_escape_string($db, $_POST['signup_password']);
  $password_2 = mysqli_real_escape_string($db, $_POST['signup_confirm_password']);
  $pnumber = mysqli_real_escape_string($db, $_POST['p_number']);

  // form validation: ensure that the form is correctly filled ...
  if (empty($username)) { array_push($errors, "Name is required"); }
  if (empty($email)) { array_push($errors, "Email is required"); }
  if (empty($password_1)) { array_push($errors, "Password is required"); }
  if ($password_1 != $password_2) {
	array_push($errors, "The two passwords do not match");
  }

  // check the database to make sure 

  $user_check_query = "SELECT * FROM nxsusers WHERE email='$email' LIMIT 1";
  $result = mysqli_query($db, $user_check_query);
  $user = mysqli_fetch_assoc($result);
  
  if ($user) { 
    if ($user['email'] === $email) {
      array_push($errors, "Email already exists");
    }

    if ($user['phone'] === $pnumber) {
      array_push($errors, "Phone Number already used.");
    }
  }

  // Finally, register user if there are no errors in the form
  if (count($errors) == 0) {
  	$password = md5($password_1);//encrypt the password before saving in the database

  	$query = "INSERT INTO `nxsusers` (`name`, `email`, `password`, `phone`) VALUES ('$username', '$email', '$password', '$pnumber')";
  	mysqli_query($db, $query);
  	$_SESSION['name'] = $username;
  	$_SESSION['success'] = "You are now logged in";
  	header('location: user_home.php');
  }
}

$errors_login = array(); 
// LOGIN USER
if (isset($_POST['login'])) {
  $email = mysqli_real_escape_string($db, $_POST['login_email']);
  $password = mysqli_real_escape_string($db, $_POST['login_password']);
  if (empty($email)) {
  	array_push($errors_login, "Email is required");
  }
  if (empty($password)) {
  	array_push($errors_login, "Password is required");
  }

if (count($errors_login) == 0) {
  $password = md5($password);
  $query = "SELECT * FROM nxsusers WHERE email='$email' && password='$password' ";
  $results = mysqli_query($db, $query);
if (mysqli_num_rows($results) == 1) {
    $user = mysqli_fetch_assoc($results);
    $_SESSION['name'] = $user['name'];
    $_SESSION['email'] = $user['email'];
    $_SESSION['phone'] = $user['phone'];
    $_SESSION['success'] = "You are now logged in";
    header('location: user_home.php');
} else {
    array_push($errors_login, "Wrong Email/password combination");
  }
}
}

?>