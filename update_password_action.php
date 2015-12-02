<?php
/*
* update the password of a user
 */
include include '/home/troyempi/usr/local/Smarty/libs/Smarty.class.php';
include "includes/defs.php";


  /* Get the user details */
  $old_password = $_POST['oldpassword'];
  $new_password = $_POST['newpassword'];
  session_start();
  $email = @$_SESSION['email'];
  $user = getUserByEmail($email);
  $message = "";
  if($user){
    $first_name = $user['first_name'];
    $last_name = $user['last_name'];
    $user_name = $first_name." $last_name";
    /* validate the user's password */
    $salt = substr($first_name,0,2);
    $storedPassword = crypt($old_password,$salt);
	$newStoredPassword = crypt($new_password,$salt);;
    if($storedPassword != $user['password'])
	  $message = $message. " Wrong old password.";
    }
  else{
	$message = $message."No such a account.";
  }
  /* return error code */
  if($message == ""){
    $_SESSION["user_name"] = $user_name;
	updatePassword($email,$newStoredPassword);
	if($user['employer_id'] != null){
	  $_SESSION["employer_id"] = $user['employer_id'];
	}
	else
	  $_SESSION["employer_id"] = 0;
  }
  echo "$message";
?>

