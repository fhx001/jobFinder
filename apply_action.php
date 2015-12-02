<?php
 /* 
 * Apply a job
 */
include '/home/troyempi/usr/local/Smarty/libs/Smarty.class.php';
  include "includes/defs.php";
  
  
  /* get the user's details*/
  session_start();
  $email = @$_SESSION['email'];
  if($email){
	  $user = getUserByEmail($email);
	  /* get the job information */
	  $job_id = $_POST['job_id'];
	  $job_title = $_POST['job_title'];
	  /* get the employer_id */
	  $job = job_id_search($job_id);
	  $employer_id = $job['Employer_id'];
	  /* get the letter*/
	  $letter = $_POST['letter'];
	  $time = time();
	  applyJob($job_id,$job_title,$employer_id,$user['user_id'],$letter,$time);
	  header("location: index.php");
   }
   else{
	  header("location: index.php");
   }
?>