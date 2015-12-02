<?php
/* 
 * Home Page: For manager direct to emolyer.tpl. For Regular user, to common page
 */
include '/home/troyempi/usr/local/Smarty/libs/Smarty.class.php';
include "includes/defs.php";

session_start();
$user_name = @$_SESSION['user_name'];
$employer_id = @$_SESSION['employer_id'];
$admin_id = @$_SESSION['admin_id'];
/* Display results. */
$smarty = new Smarty;
$smarty->assign("user_name",$user_name);


/* direct to the emploer page */
if($user_name && $employer_id){
	
	/* paginate the found jobs*/
	$jobs_per_page = 9;
	$currentPage = 1;
	if (isset($_GET['page'])){
		$offset = ($_GET['page']-1)*$jobs_per_page;
		$previous = $_GET['page']-1;
		$next = $_GET['page'] + 1;
		$currentPage = $_GET['page'];
	}else {
	   $offset = 0;
	}

	$result = postedJobs($employer_id,$offset,$jobs_per_page);
	$jobs = $result[0];
	$number_of_jobs = $result[1];



	if($offset == 0){
	  $previous = -1;
	  $next = 2;
	}
	if($offset >= $number_of_jobs - $jobs_per_page || $number_of_jobs <= $jobs_per_page)
	  $next = -1;
		
    $smarty->assign("previous",$previous);
	$smarty->assign("next",$next);
	$smarty->assign("jobs",$jobs);
	$smarty->assign("number_of_jobs",$number_of_jobs);

	$smarty->assign("jobs_per_page",$jobs_per_page);
	$smarty->assign("currentPage",$currentPage);
	$smarty->display("employer.tpl");
   }
else if($admin_id){
  $smarty->display("admin.tpl");
}
else{
	/* find jobs posted in last five days */
	$recent_5_jobs = findRecentJobs(0,5);
	$recent_10_jobs = findRecentJobs(6,10);
	
	$smarty->assign("recent_5_jobs",$recent_5_jobs);
	$smarty->assign("recent_10_jobs",$recent_10_jobs);
	/* direct to the common user page */
    $smarty->display("index.tpl");
}
?>
