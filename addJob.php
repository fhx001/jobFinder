<?php
/* 
 * Add A Job by the user
 */
include '/home/troyempi/usr/local/Smarty/libs/Smarty.class.php';


session_start();
$user_name = @$_SESSION['user_name'];
/* get the manager id from session */
$employer_id = @$_SESSION['employer_id'];



$smarty = new Smarty;
$smarty->assign("user_name",$user_name);
$smarty->assign("employer_id",$employer_id);
$smarty->display("addJob.tpl");
?>