<?php
	$servername="localhost";
	$username="root";
	$password="";
	$db="musical_journey";
	
	$conn=new mysqli($servername, $username, $password, $db);
	
	if($conn->connect_error)
	{
		die("connection failed".$conn->connect_error);
	}
	// echo "connected successfully";
?>