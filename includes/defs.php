<?php

/* database seperate php*/
include "includes/db_defs.php";

/* define image size */
define("MAX_WIDTH", 200);
define("MAX_HEIGHT", 200);

/* 
* search jobs according to the search details 
*  using pagination techniques
*/
function get_jobs_pagi($offset, $jobs_per_page,$category,$location,$keywords,$jobType1,$jobType2,$jobType3,$jobType4,$jobType5){
  $connection = mysql_open();
  $category = mysql_real_escape_string($category);
  $location = mysql_real_escape_string($location);
  $keywords = mysql_real_escape_string($keywords);
  
  /* transction begin */
  $result = mysql_query("start transaction", $connection);  
  $query = "select SQL_CALC_FOUND_ROWS * from Job 
		    where end_date >= Now() AND
			(Job_title like '%$keywords%'  or  Job_description like '%$keywords%' or
				Job.Employer_id in (select Employer_id 
								 from Employer
								 where Employer_name like '%$keywords%' or Employer_description like '%$keywords%' or Employer_industry like '%$keywords%')";
  if(is_numeric($keywords))
     $query = $query. " or Job_salary >= '$keywords' ";
  $query = $query.")";
  if($location != "*")
		$query = $query." And Job_location='$location'";
  if($category != "*")
        $query = $query." And Job.Employer_id in 
				                (select Employer_id 
								 from Employer
								 where Employer_industry='$category')";
    $query = $query." And (Job_type = $jobType1 or Job_type = $jobType2 or Job_type = $jobType3 or Job_type = $jobType4 or Job_type = $jobType5)";
		  							 
	$query = $query." order by Job_id limit $offset, $jobs_per_page";
				
  $result = mysql_query($query,$connection);
  $result2 = mysql_query("select FOUND_ROWS()",$connection);
  if(mysql_affected_rows() == 0){mysql_query("commit", $connection);} else mysql_query("rollback", $connection);
  $row = mysql_fetch_array($result2);
  $num_items = $row[0];
  
  /*copy the result to the array */
  $items = array();
  while($row = mysql_fetch_array($result)){
    $items[] = $row;
  }
  mysql_close($connection) or show_error();
  return array($items, $num_items);
}

/* register function */
function register($first_name,$last_name,$password,$email,$phone_number,$description,$image){
  $connection = mysql_open();
   $image_details = process_uploaded_image_file($image);
   $first_name = mysql_real_escape_string($first_name);
   $last_name = mysql_real_escape_string($last_name);
   $password = mysql_real_escape_string($password);
   $email = mysql_real_escape_string($email);
   $phone_number = mysql_real_escape_string($phone_number);
   $description = mysql_real_escape_string($description);
   if(empty($image_details)){
     	$sql_query = "insert into user(first_name,last_name,email,password,phone_number,category,describtion) 
                 values('$first_name','$last_name','$email','$password','$phone_number',3,'$description')";
   }
   else{
        list($imagedata, $imagename, $imagetype, $imagewidthheight) = $image_details;
		$sql_query = "insert into user(first_name,last_name,email,password,phone_number,category,describtion,imagedata,imagename,imagesize,imagetype) 
                 values('$first_name','$last_name','$email','$password','$phone_number',3,'$description','$imagedata','$imagename','$imagewidthheight','$imagetype')";
	}
	  /* transction begin */
  $result = mysql_query("start transaction", $connection); 
   mysql_query($sql_query, 
	$connection) or show_error();  	
   if(mysql_affected_rows() == 0){mysql_query("commit", $connection);} else mysql_query("rollback", $connection);
   mysql_close($connection) or show_error();	
}

/*
 * Process uploaded JPEG image file, resizing if necessary.
 * Requires a world-writable "images" subdirectory, and over-writes 
 * file images/tmp.jpg.
 * If the file is fine, return an array with (data, name, type, size).
 * Otherwise, return NULL.
 */
function process_uploaded_image_file($image) {
  // Check upload succeeded
  if (!is_uploaded_file($image['tmp_name']) || $image['size'] == 0) {
    return NULL;
  } 

  // Extract details
  $imagedata = addslashes(file_get_contents($image['tmp_name']));
  $imagename = addslashes(basename($image['name']));
  $imagesize = getimagesize($image['tmp_name']); // an array
  $imagewidthheight = addslashes($imagesize[3]); 
  $imagetype = $imagesize['mime'];

  // Check file is a JPEG
  if ($imagetype != "image/jpeg") {
    return NULL;
  }


  /* Resize uploaded JPEG file, if necessary
	*
	*(shouldn't reuse name tmp.jpg repeatedly)
	*/
  if ($imagesize[0] > MAX_WIDTH || $imagesize[1] > MAX_HEIGHT) {

      resize_image_file($image['tmp_name'], "images/tmp.jpg", 
                        MAX_WIDTH, MAX_HEIGHT);
      list($width,$height) = getimagesize("images/tmp.jpg");
      $imagedata = addslashes(file_get_contents("images/tmp.jpg"));
      $imagewidthheight = "width=\"$width\" height=\"$height\"";
  }

  return array($imagedata, $imagename, $imagetype, $imagewidthheight);
}


/* Resize image into a width-height rectangle using GD library. */
function resize_image_file($src_file, $dst_file, $width, $height) {
  // Compute new dimensions
  list($width_orig, $height_orig) = getimagesize($src_file);
    
  $ratio_orig = $width_orig/$height_orig;
  
  if ($width/$height > $ratio_orig) {
     $width = $height*$ratio_orig;
  } else {
     $height = $width/$ratio_orig;
  }
  
  // Resample $srcfile
  $image_p = imagecreatetruecolor($width, $height);
  $image = imagecreatefromjpeg($src_file);
  imagecopyresampled($image_p, $image, 0, 0, 0, 0, $width, $height, $width_orig, $height_orig);
  
  // Output resized image to $dst_file
  imagejpeg($image_p, "$dst_file", 100);
}



/* get the user by email*/
function getUserByEmail($email){
    $connection = mysql_open();
	$email = mysql_real_escape_string($email);
    $query = "select * from user where email='$email'";
	  /* transction begin */
    $result = mysql_query("start transaction", $connection); 
    $result = mysql_query($query,$connection) or show_error();
	if(mysql_affected_rows() == 0){mysql_query("commit", $connection);} else mysql_query("rollback", $connection);
    $user = mysql_fetch_array($result);

    mysql_close($connection) or show_error();
    return $user;
}

/* get the user by id*/
function getUserById($id){
    $connection = mysql_open();
	$id = mysql_real_escape_string($id);
    $query = "select * from user where user_id='$id'";
	  /* transction begin */
    $result = mysql_query("start transaction", $connection); 
    $result = mysql_query($query,$connection) or show_error();
	if(mysql_affected_rows() == 0){mysql_query("commit", $connection);} else mysql_query("rollback", $connection);
    if (mysql_num_rows($result) != 1) {
        echo "Invalid query or result: $query\n";
        die();
    }
    $user = mysql_fetch_array($result);

    mysql_close($connection) or show_error();
    return $user;
}

/* get all the jobs for a manager */
function postedJobs($id,$offset, $jobs_per_page ){
  $connection = mysql_open();
  $id = mysql_real_escape_string($id);
  $sql_query = "select SQL_CALC_FOUND_ROWS Job.*
				from Job
				where Job.Employer_id = '$id' 
				order by Job_id limit $offset, $jobs_per_page ";
    /* transction begin */
  $result = mysql_query("start transaction", $connection); 
  $result = mysql_query($sql_query, 
	$connection) or show_error();
  $result2 = mysql_query("select FOUND_ROWS()",$connection);
   if(mysql_affected_rows() == 0){mysql_query("commit", $connection);} else mysql_query("rollback", $connection);
  $row = mysql_fetch_array($result2);
  $num_items = $row[0];
  
  $jobs = array();
  while($row = mysql_fetch_array($result)){
	$jobs[] = $row;
  }
  mysql_close($connection) or show_error();
  return array($jobs, $num_items);
}


/**update the password for the user **/
function updatePassword($email,$newStoredPassword){
   $connection = mysql_open();
   $email = mysql_real_escape_string($email);
   $query = "update user set password='$newStoredPassword' where email='$email'";
     /* transction begin */
  $result = mysql_query("start transaction", $connection); 
   mysql_query($query,$connection) or show_errors();
    if(mysql_affected_rows() == 0){mysql_query("commit", $connection);} else mysql_query("rollback", $connection);
   mysql_close($connection) or show_error();
}

/* offer a new job*/
function offer_job($title,$salary,$location,$employer_id,$description,$start_date, $end_date,$job_type){
   $connection = mysql_open();
   $title = mysql_real_escape_string($title);
   $salary = mysql_real_escape_string($salary);
   $location = mysql_real_escape_string($location);
   $employer_id = mysql_real_escape_string($employer_id);
   $description = mysql_real_escape_string($description);
   $start_date = mysql_real_escape_string($start_date);
   $end_date = mysql_real_escape_string($end_date);
   $job_type = mysql_real_escape_string($job_type);
   $start_date = strtotime($start_date);
   $end_date = strtotime($end_date);
   $salary = str_replace(',', '', $salary);
   $sql_query = "insert into Job(Job_title,Job_salary,Job_location,Employer_id,Job_description,start_date,end_date,Job_type)
				values('$title','$salary','$location','$employer_id','$description',from_unixtime( $start_date),from_unixtime($end_date),$job_type)";
     /* transction begin */
  $result = mysql_query("start transaction", $connection); 
   mysql_query($sql_query, 
   $connection) or show_error();  
   $job_id = mysql_insert_id();
   if(mysql_affected_rows() == 0){mysql_query("commit", $connection);} else mysql_query("rollback", $connection);
   mysql_close($connection) or show_error();
   return $job_id;
}


/*
* job search by job_id, result including the employer detail.
*/
function job_id_search($id){
  $connection = mysql_open();
  $id = mysql_real_escape_string($id);
  $sql_query = "select Job.*,unix_timestamp(Job.end_date) as end_date,Employer.Employer_name,Employer.Employer_industry
				from Job,Employer
				where Job.Job_id = '$id' and Job.Employer_id=Employer.Employer_id";
    /* transction begin */
  $result = mysql_query("start transaction", $connection); 
  $result = mysql_query($sql_query, 
	$connection) or show_error();
  $job = mysql_fetch_array($result);
   if(mysql_affected_rows() == 0){mysql_query("commit", $connection);} else mysql_query("rollback", $connection);
  mysql_close($connection) or show_error();
  return $job;
}

/* delete the job according to the id*/
function delete_job_id($id){
  $connection = mysql_open();
  $id = mysql_real_escape_string($id);
  $id = ereg_replace("[^0-9]", "", $id);
  $sql_query = "delete from Job
				where Job.Job_id = '$id'";
    /* transction begin */
  $result = mysql_query("start transaction", $connection); 
  mysql_query($sql_query, 
	$connection) or show_error();  
  mysql_close($connection) or show_error();
}

/* update the job according to the id*/
function update_job_id($job_id,$title,$salary,$location,$employer_id,$description,$start_date, $end_date,$job_type){
   $connection = mysql_open();
   $title = mysql_real_escape_string($title);
   $salary = mysql_real_escape_string($salary);
   $location = mysql_real_escape_string($location);
   $employer_id = mysql_real_escape_string($employer_id);
   $description = mysql_real_escape_string($description);
   $start_date = mysql_real_escape_string($start_date);
   $end_date = mysql_real_escape_string($end_date);
   $job_type = mysql_real_escape_string($job_type);
   $start_date = strtotime($start_date);
   $end_date = strtotime($end_date);
   $sql_query = "update Job set 
				 Job_title = '$title',Job_salary = '$salary',Job_location = '$location',Job_description = '$description',start_date = from_unixtime( $start_date),end_date = from_unixtime($end_date),
				 Job_type = '$job_type'
				 where Job.Job_id = '$job_id'";
	  /* transction begin */
  $result = mysql_query("start transaction", $connection); 
   if(mysql_affected_rows() == 0){mysql_query("commit", $connection);} else mysql_query("rollback", $connection);
   mysql_query($sql_query, 
	$connection) or show_error();  	
   mysql_close($connection) or show_error();	
}

/* user are applying a job */
function applyJob($job_id,$job_title,$employer_id,$user_id,$letter,$time){
   $connection = mysql_open();
   $job_id = mysql_real_escape_string($job_id);
   $job_title = mysql_real_escape_string($job_title);
   $user_id = mysql_real_escape_string($user_id);
   $employer_id = mysql_real_escape_string($employer_id);
   $time = mysql_real_escape_string($time);
   $query = "insert into Application values($job_id,'$job_title',$employer_id,$user_id,'$letter',FROM_UNIXTIME($time))";
     /* transction begin */
    $result = mysql_query("start transaction", $connection); 
    mysql_query($query, 
	$connection) or show_error();  	
   mysql_close($connection) or show_error();	   
}
/* get the spplicants for a job*/
function getApplicantsForJob($job_id){
  $connection = mysql_open();
  $job_id = mysql_real_escape_string($job_id);
  $query = "select unix_timestamp(Application.Apply_date) as Apply_date,
				   user.user_id as user_id,user.email as user_email,user.first_name as first_name,user.last_name as last_name 
			from Application,user 
			where Job_id='$job_id' AND Application.User_id=user.user_id";
    /* transction begin */
  $result = mysql_query("start transaction", $connection); 
  $result = mysql_query($query, 
	$connection) or show_error();  	
   if(mysql_affected_rows() == 0){mysql_query("commit", $connection);} else mysql_query("rollback", $connection);
  $applicants = array();
  while($row=mysql_fetch_array($result)){
	$applicants[] = $row;
  }
  mysql_close($connection) or show_error();	  
  return $applicants;
}

/* find jobs posted in last N days */
function findRecentJobs($day_start,$day_end){
  $connection = mysql_open();
  $day_start = mysql_real_escape_string($day_start);
  $day_end = mysql_real_escape_string($day_end);
  $query = "select * from Job where start_date<= Now()-interval '$day_start' day AND start_date>= Now()-interval '$day_end' day AND end_date > Now()";
  $result = mysql_query($query, 
	$connection) or show_error();  	
  $jobs = array();
  while($row=mysql_fetch_array($result)){
    $jobs[]=$row;
  }
  
  mysql_close($connection) or show_error();	  
  return $jobs;
}


/* Return the image in the given database entry. */
function getImage($id)
{
  $connection = mysql_open();
  $id = mysql_real_escape_string($id);
  $query = "select imagedata, imagename, imagetype, imagesize " .
           "from user where user_id = $id";
  $result = @ mysql_query($query, $connection)
      or showerror();
  $row = mysql_fetch_array($result);
  mysql_close($connection)
      or show_error();
  return $row;
}

/* confirm whether the job has been applied by the user 
* return value is the application or null
*/
function hasApplied($job_id,$user_id){
  $connection = mysql_open();
  $job_id = mysql_real_escape_string($job_id);
  $user_id = mysql_real_escape_string($user_id);
  $query = "select * from Application " .
           "where User_id = '$user_id' AND Job_id='$job_id'";
    /* transction begin */
  $result = mysql_query("start transaction", $connection); 
  $result = @ mysql_query($query, $connection)
      or show_error();
   if(mysql_affected_rows() == 0){mysql_query("commit", $connection);} else mysql_query("rollback", $connection);
  $row = mysql_fetch_array($result);
  mysql_close($connection)
      or show_error();
  return $row;
}

/* asign a new manager */
function asignManager($email,$emplyer_name){
  $connection = mysql_open();
  $email = mysql_real_escape_string($email);
  $emplyer_name = mysql_real_escape_string($emplyer_name);
  $query = "update user set category=1,employer_id=(select Employer_id from Employer where Employer_name='$emplyer_name') where email='$email'";
    /* transction begin */
  $result = mysql_query("start transaction", $connection); 
  $result = @ mysql_query($query, $connection)
      or show_error();
  if(mysql_affected_rows() == 0){mysql_query("commit", $connection);} else mysql_query("rollback", $connection);
   mysql_close($connection)
      or show_error();
}







?>
