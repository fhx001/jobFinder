<?php
 /* 
 * Apply a job
 */
  include '/home/troyempi/usr/local/Smarty/libs/Smarty.class.php';;
  include "includes/defs.php";
  
  session_start();
$user_name = @$_SESSION['user_name'];
$employer_id = @$_SESSION['employer_id'];

/* Display results. */
$smarty = new Smarty;
$smarty->assign("user_name",$user_name);

/* get the detail of the applicant*/
$id = $_GET['id'];
$applicant = getUserById($id);
$smarty->assign("$applicant",$applicant);
$smarty->display("user_detail.tpl");

?>