<?php
/*
 * Delete A Job by the manager
 */
include '/home/troyempi/usr/local/Smarty/libs/Smarty.class.php';
include "includes/defs.php";
$id = $_GET['id'];
$job = job_id_search($id);
$employer_id = $job['employer_id'];
delete_job_id($id);
header("Location: index.php");
exit();
?>
