<?php

$db = mysqli_connect('localhost', 'root', '', 'nxs_port');

$errors_cpassword = array();

// CHANGE PASSWORD
if (isset($_POST['change_password'])) {
  // ensure that the user is logged in
  if (!isset($_SESSION['email'])) {
    array_push($errors, "You must be logged in to change your password.");
  } else {
    $email = mysqli_real_escape_string($db, $_SESSION['email']);
    $current_password = mysqli_real_escape_string($db, $_POST['current_password']);
    $new_password = mysqli_real_escape_string($db, $_POST['new_password']);
    $confirm_password = mysqli_real_escape_string($db, $_POST['confirm_new_password']);
    
    // form validation: ensure that the form is correctly filled ...
    if (empty($current_password)) { array_push($errors, "Current password is required"); }
    if (empty($new_password)) { array_push($errors, "New password is required"); }
    if (empty($confirm_password)) { array_push($errors, "Confirm password is required"); }
    if ($new_password != $confirm_password) { array_push($errors, "New passwords do not match"); }
    
    // check that the current password is correct
    $current_password = md5($current_password);
    $query = "SELECT * FROM nxsusers WHERE email='$email' AND password='$current_password'";
    $results = mysqli_query($db, $query);
    if (mysqli_num_rows($results) != 1) {
      array_push($errors_cpassword, "Current password is incorrect");
    } else {
      // update the password in the database
      $new_password = md5($new_password);
      $query = "UPDATE nxsusers SET password='$new_password' WHERE email='$email'";
      mysqli_query($db, $query);
      $_SESSION['success'] = "Password changed successfully";
    }
  }
}


?>