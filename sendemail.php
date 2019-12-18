<?php
	include 'common.php';

	$name=$_POST["name"];
	$email=$_POST["email"];
	$message=$_POST["message"];

	$enter="insert into mail values('$name','$email','$message')";
	$result=mysqli_query($con,$enter)or die(mysqli_error($con));
	header('location:contact_us.php');
	?>
