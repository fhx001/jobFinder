<?php
 /* logout: reset all the session variables */
  session_start();
  $_SESSION['user_name']="";
  $_SESSION['employer_id']=0;
  $_SESSION['admin_id']=0;
  $_SESSION['email']="";
  header("Location: index.php");
  exit();
?>