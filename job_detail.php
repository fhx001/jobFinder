<?php
/*
* Sow the details of the job
 */
include '/home/troyempi/usr/local/Smarty/libs/Smarty.class.php';
include "includes/defs.php";

$id = $_GET['id'];

/* Get list of jobs that match form data. */
$job = job_id_search($id);


session_start();
$user_name = @$_SESSION['user_name'];
$email = @$_SESSION['email'];
$employer_id = @$_SESSION['employer_id'];
$user = "";
/* set manager flag */
if($user_name != ""){
	$user = getUserByEmail($email);
	$loggedFlag = 1;
	if($job ['Employer_id'] == $user['employer_id'])
		$manager_flag = 1;
	else 
		$manager_flag = 0;
}
else 
    $manager_flag = 0;

/* get the users who applied this job*/
$smarty = new Smarty;

if($manager_flag == 1){
	$applicants = getApplicantsForJob($id);
	$smarty->assign("applicants",$applicants);
}

if($job){
      $left_days = floor(($job['end_date'] - time())/86400);
	  if($left_days < 0)
	   $left_days = 0;
	   
}


/* Every user can apply a job once */
$appliedFlag = 0;
if($manager_flag ==0 && $user && hasApplied($id, $user['user_id'])){
  $appliedFlag = 1;
}

/* get the job type */
switch($job['Job_type']){
  case 1:
    $job_type = "Parttime";
	break;
  case 2:
    $job_type = "Fulltime";
	break;
   case 3:
    $job_type = "Casual";
	break;
   case 4:
    $job_type = "Contract";
	break;
   case 5:
    $job_type = "Work From Home";
}



/* Display results. */
$smarty->assign("user_name",$user_name);
$smarty->assign("job", $job);
$smarty->assign("job_type", $job_type);
$smarty->assign("left_days", $left_days);
$smarty->assign("appliedFlag", $appliedFlag);
$smarty->assign("manager_flag", $manager_flag);
$smarty->display("job_detail.tpl");
?>
