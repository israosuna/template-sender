<?php
$connection = mysqli_connect('localhost', '', '');
if(!$connection){
	die("Database Connection Failed" . mysqli_error($connection));
}
$select_db = mysqli_select_db($connection, '');
if(!$select_db){
	die("Database Selection Failed" . mysqli_error($connection));
}


$connectionZoom = mysqli_connect('localhost', '', '');
if(!$connectionZoom){
	die("Database Connection Failed" . mysqli_error($connectionZoom));
}
$select_dbZoom = mysqli_select_db($connectionZoom, '');
if(!$select_dbZoom){
	die("Database Selection Failed" . mysqli_error($connectionZoom));
}

$connectionUser = mysqli_connect('localhost', '', '');
if(!$connectionUser){
	die("Database Connection Failed" . mysqli_error($connectionUser));
}
$select_dbUser = mysqli_select_db($connectionUser, '');
if(!$select_dbUser){
	die("Database Selection Failed" . mysqli_error($connectionUser));
}


?>