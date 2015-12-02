<?php
/*
* Register to be a member
 */
include '/home/troyempi/usr/local/Smarty/libs/Smarty.class.php';
include "includes/defs.php";


/* initialize the value */
$phone_number = @$_POST['phone_number'];
$description = @$_POST['description'];

/* get the register details */
$first_name = $_POST['first_name'];
$last_name = $_POST['last_name'];
$email = $_POST['email'];
$password = $_POST['password'];
$repeat_password = $_POST['repeat_password'];
$phone_number = @$_POST['phone_number'];
$description = @$_POST['description'];
$image = $_FILES['userfile'];

/* save the image into a database */
/* encrypt the password*/
$salt = substr($first_name,0,2);
$storedPassword = crypt($password,$salt);

register($first_name,$last_name,$storedPassword,$email,$phone_number,$description,$image);
header("Location:index.php");
exit();
?>
