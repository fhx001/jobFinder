<?php
include "includes/mysql.php";
/* Show MySQL error. */
function show_error() {
die("Error ". mysql_errno() . " : " . mysql_error());
}
/* Open connection and select database. */
function mysql_open() {
$connection = mysql_connect(HOST, USER, PASSWORD)
or show_error();
mysql_select_db(DATABASE, $connection)
or show_error();
return $connection;
}

?>