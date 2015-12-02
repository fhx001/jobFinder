<?php
/*
 * Update the job according to the id
 */
include '/home/troyempi/usr/local/Smarty/libs/Smarty.class.php';
include "includes/defs.php";

$titleError = "";
$salaryError = "";
$locationError ="";

$job_id = $_GET['id'];
$job = job_id_search($job_id);


session_start();
$user_name = @$_SESSION['user_name'];
$employer_id = @$_SESSION['employer_id'];

/* Display results. */
$smarty = new Smarty;
$smarty->assign("user_name",$user_name);
$smarty->assign("job",$job);
$smarty->assign("employer_id",$employer_id);
$smarty->display("update_job.tpl");
?>
