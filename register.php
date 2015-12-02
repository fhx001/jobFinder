<?php
/* 
 * Display the register forms page
 */
include '/home/troyempi/usr/local/Smarty/libs/Smarty.class.php';


session_start();
$user_name = @$_SESSION['user_name'];



/* Display results. */
$smarty = new Smarty;
$smarty->assign("user_name",$user_name);
$smarty->display("register.tpl");
?>