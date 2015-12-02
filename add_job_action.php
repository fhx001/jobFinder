<?php
/*
 * Add Job Action Page
*/
include '/home/troyempi/usr/local/Smarty/libs/Smarty.class.php';
include "includes/defs.php";

$title = $_POST['job_title'];
$salary = $_POST['salary'];
$employer_id = $_POST['employer_id'];
$location = $_POST['location'];
$description = $_POST['description'];
$start_date = $_POST['start_date'];
$end_date = $_POST['end_date'];
$job_type = $_POST['job_type'];

$job_id = offer_job($title,$salary,$location,$employer_id,$description,$start_date,$end_date,$job_type);
header("Location:job_detail.php?id=$job_id");
exit();
?>
