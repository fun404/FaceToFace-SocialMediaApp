<?php 
session_start();
$firstName    = $_POST['fname'];                            
$lastName    = $_POST['lname'];                            
$emailOrMobile    = $_POST['emailOrNo'];                            
$password    = $_POST['newPass'];                            
$bdMonth    = $_POST['bdMonth'];                            
$bdDate    = $_POST['bdDate'];
$bdYear    = $_POST['bdYear'];
$gender    = $_POST['gen'];

//echo "$firstName <br> $lastName <br> $emailOrMobile <br> $password <br> $bdMonth <br> $bdDate <br> $bdYear <br> $gender";
require_once('process.php');

$val = ["$firstName","$lastName","$emailOrMobile","$password","$bdDate","$bdMonth","$bdYear","$gender"];
$_SESSION['signInSuccessful'] =  savedata($val);
echo $_SESSION['signInSuccessful'];
$_SESSION['session'] = "session variable is working";
//header("location:index.php");
?>
