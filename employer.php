<?php
/* 
 * Employer Page
 */
include '/home/troyempi/usr/local/Smarty/libs/Smarty.class.php';
include "includes/defs.php";

session_start();
$user_name = @$_SESSION['user_name'];
$employer_id = @$_SESSION['employer_id'];
$posted_jobs = "";

/* Display results. */
$smarty = new Smarty;
$smarty->assign("user_name",$user_name);
if($user_name && $employer_id){
    /* get the posted jobs of the employer*/
	$postedJobs = getPostedJobs($employer_id);
	$smarty->assign("postedJobs",$postedJobs);
	$smarty->display("employer.tpl");
   }
else
    $smarty->display("index.tpl");
?>
