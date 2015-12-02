<?php
  /* asign a manager for an employer*/
include '/home/troyempi/usr/local/Smarty/libs/Smarty.class.php';
  include "includes/defs.php";
  
  $email = @$_POST['email'];
  $employer_name = @$_POST['employer_name'];
  asignManager($email,$employer_name);
  header("Location:index.php");
  exit();
?>