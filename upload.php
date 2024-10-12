<?php 
session_start();
require_once("process.php");
$rand = rand();
if (isset($_POST['uploadcp'])) 
{
	// $rand = rand();
	$fname = $_FILES['pic']['name'];
	$file_default_location = $_FILES["pic"]["tmp_name"];
	$email = $_SESSION["email"];
	$img_url = "gallary/".$rand."_".$fname;
	$set_file_location = "C:\\xampp\\htdocs\\ALL PROJECTS\\facetoface\\".$img_url;
	move_uploaded_file($file_default_location, $set_file_location);
	echo uploadPic($img_url,$email,'cover');
 	header('location:profilepage.php');
}
elseif (isset($_POST['uploadpp'])) 
{
	

	$fname = $_FILES['pic']['name'];
	$file_default_location = $_FILES["pic"]["tmp_name"];
	$email = $_SESSION["email"];
	$img_url = "gallary/".$rand."_".$fname;
	$set_file_location = "C:\\xampp\\htdocs\\ALL PROJECTS\\facetoface\\".$img_url;
	move_uploaded_file($file_default_location, $set_file_location);
	echo uploadPic($img_url,$email,'profile_pic');
 	header('location:profilepage.php');
}
