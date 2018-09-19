<?php
	$host="localhost";
	$user="root";
	$password="";
	$db="billing_System";
	
	$con=mysqli_connect($host,$user,$password,$db);
	
	if($con)
	{
		echo'<script>alert("Connection is Successfull")</script>';
	}
	else
	{
		echo'<script>alert("Connection is not Successfull")</script>';
	}
?>