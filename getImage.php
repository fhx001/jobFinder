<?php
/*
 * Return the image from the entry with the given id.
 */
require "includes/defs.php";

$id = $_GET['id'];

$image = getImage($id);

$data = $image['imagedata'];
$name = $image['imagename'];
$type = $image['imagetype'];
$size = strlen($data);

/* set the head for the image */
header("Content-length: $size");
header("Content-type: $type");
header("Content-Disposition: attachment; filename=$name");
echo $data;
?>