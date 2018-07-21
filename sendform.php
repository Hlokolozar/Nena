<?php 

	include('index.php');
	// var_dump($_POST);
	if(isset($_POST["submit"])):
		$name = $_POST["name"];
		$email = $_POST["email"];
		$message = $_POST["message"];
	endif;

	//die($name);
	//$name ='Lehlohonolo Motsoeneng';
	$mailTo = "joseleh@live.com";
	$subject = "General Enquiry";
	$headers = "From: ".$email;
	$notification = "You have received an email from ".$name."\n\n".$message;

	mail($mailTo,$subject,$headers,$notification);
	header("Location: index.php?mailsend?name=".$name);
	
	// function mail(){

	// }
?> 



