<?php

	include("connection/connection.php");

	$id=$_POST['id'];
	$firstname = $_POST['firstname'];
	$lastname = $_POST['lastname'];

	$sql="update user set firstname='$firstname', lastname='$lastname' where id='$id'";

	$result=mysqli_query($conn,$sql);

	if ($result) {
		echo "updated...";
		header("Location: http://localhost/music-project/profile.php");
	}
	else {
		echo "not";
	}


?>