<?php 
session_start();
$email_number = $_POST['login_mail_number'];
$password = $_POST['password'];
//echo "$email_number <br> $password";
require("process.php");
if($rows =  login($email_number , $password))
{
	//echo print_r($rows);
	$_SESSION["userName"] = $rows[1]." ".$rows[2];
	$_SESSION["userID"] = $rows[0];
	$_SESSION["email"] = $rows[3];
 	header("location:profilepage.php");
}
 else 	echo "<script> alert(' something went wrong') </script>";
?>