<?php 

function  connect()
{
	return  mysqli_connect("localhost","root","","facetoface");
}

function savedata($values)
{
	$mycon = connect();
	$insert_IntoRegister="INSERT INTO `register` (`sn`, `first_name`, `last_name`, `email`, `user_password`, `dob` ,`gender`) VALUES ('','$values[0]','$values[1]','$values[2]','$values[3]','$values[4] $values[5] $values[6]','$values[7]')";
	 mysqli_query($mycon,$insert_IntoRegister);
	$insert_IntoPics="INSERT into `pics` (`uid`) values ('$values[2]')";
	  mysqli_query($mycon,$insert_IntoPics);
	return "successfully signed In";

}

function displayData($tblname,$condition,$value)
{
	$mycon = connect();  
	$query="select * from `".$tblname."` where `".$condition."` = '".$value."'";
	//echo "$query";
	$result = mysqli_query($mycon,$query)or die("failed to fetch object");
	$column =mysqli_fetch_array($result)or die(" object to array convertion failed");
	return $column;
	 /*while($rows = mysqli_fetch_array($result))
	while($rows = mysqli_fetch_assoc($result))
	 {

	 }
	 */
}

function login($email,$password)
{
	$mycon = connect();
	$query = "select * from `register` where `email` = '".$email."' && `user_password` = '".$password."'";
	$result = mysqli_query($mycon,$query);
	$rows = mysqli_fetch_array($result);
	return $rows;
}

function uploadCoverPic($img_url,$email)
{
	//$query = "update `pics` set `cover` = $img_url where `uid `= $email";
	$query = "UPDATE `pics` SET `cover`= '$img_url' WHERE `uid`= '$email'";
	$con = connect();
	$excutQuery = mysqli_query($con,$query) or die("not execute");
	if($excutQuery) 
	{
		mysqli_query(connect(),"INSERT INTO `gallary`(`uid`, `url`) VALUES ('$email','$img_url')");
		return "cover photo updated <br>";
	}
	else return "error updating cover <br>";
}

function uploadPic($img_url,$email,$set)
{
	//mysqli_query(connect(),"UPDATE `pics` SET `cover`= '$img_url' WHERE `uid `= '$email'");
	if(mysqli_query(connect(),"UPDATE `pics` SET `$set`= '$img_url' WHERE `uid`= '$email'")) 
	{
		mysqli_query(connect(),"INSERT INTO `gallary`(`uid`, `url`) VALUES ('$email','$img_url')");
		return "UPDATE `pics` SET `profile_pic`= '$img_url' WHERE `uid`= '$email' <br>";
	}
	else return "error updating $set <br>";
}

?>