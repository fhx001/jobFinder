<?php
/*
 *  Search the related jobs
 * 
 */
include '/home/troyempi/usr/local/Smarty/libs/Smarty.class.php';
include "includes/defs.php";

/* POST the search details */
  /* initicalize the details */
  $category = "*";
  $keywords = "";
  $location = "*";
  $jobType1 = 1;
  $jobType2 = 2;
  $jobType3 = 3;
  $jobType4 = 4;
  $jobType5 = 5;
  /* POST the job type search details */
  if(isset($_GET['category']) && 'All Categories' != @$_GET['category'])
     $category = @$_GET['category'];
  $keywords = @$_GET['keywords'];
  if(isset($_GET['location']) &&'All Locations' != @$_GET['location'])
     $location = @$_GET['location'];  

  if(@$_GET['jobType1'] != 1) $jobType1 = 0;
  if(@$_GET['jobType2'] != 2) $jobType2 = 0;
  if(@$_GET['jobType3'] != 3) $jobType3 = 0;
  if(@$_GET['jobType4'] != 4) $jobType4 = 0;
  if(@$_GET['jobType5'] != 5) $jobType5 = 0;

/* get page information */

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

$result = get_jobs_pagi($offset,$jobs_per_page ,$category,$location,$keywords,$jobType1,$jobType2,$jobType3,$jobType4,$jobType5);
$jobs = $result[0];
$number_of_jobs = $result[1];



if($offset == 0){
  $previous = -1;
  $next = 2;
}
if($offset >= $number_of_jobs - $jobs_per_page || $number_of_jobs <= $jobs_per_page)
  $next = -1;

/* set the session */
session_start();
$user_name = @$_SESSION['user_name'];



/* Display results. */
$smarty = new Smarty;
$smarty->assign("user_name",$user_name);
$smarty->assign("previous",$previous);
$smarty->assign("next",$next);
$smarty->assign("jobs",$jobs);
$smarty->assign("number_of_jobs",$number_of_jobs);

$smarty->assign("jobs_per_page",$jobs_per_page);
$smarty->assign("currentPage",$currentPage);
$smarty->assign("location",$location);
$smarty->assign("category",$category);
$smarty->assign("keywords",$keywords);
$smarty->assign("jobType1",$jobType1);
$smarty->assign("jobType2",$jobType2);
$smarty->assign("jobType3",$jobType3);
$smarty->assign("jobType4",$jobType4);
$smarty->assign("jobType5",$jobType5);
$smarty->display("job_list.tpl");
?>
