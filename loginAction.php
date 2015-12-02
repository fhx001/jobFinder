<?php
/*
 * Login action using ajax 
 */
include '/home/troyempi/usr/local/Smarty/libs/Smarty.class.php';
include "includes/defs.php";


  /* Get the user details */
  $email = $_POST['email'];
  $pre_password = $_POST['password'];
  $user = getUserByEmail($email);
  $message = "";
  if($user){
    $first_name = $user['first_name'];
    $last_name = $user['last_name'];
    $user_name = $first_name." $last_name";
    /* validate the user's password */
    $salt = substr($first_name,0,2);
    $storedPassword = crypt($pre_password,$salt);
    if($storedPassword != $user['password'])
	  $message = $message. " wrong password.";
    }
  else{
	$message = $message."No such a account.";
  }
  /* set the session variables */
  if($message == ""){
    session_start();
    $_SESSION['user_name'] = $user_name;
	$_SESSION['email'] = $email;
	if($user['employer_id'] != null){
	  $_SESSION["employer_id"] = $user['employer_id'];
	}
	else
	  $_SESSION["employer_id"] = 0;
	if($user['category'] == 1){
	 $_SESSION["admin_id"] = 1;
	}
  }
  echo "$message";
?>

