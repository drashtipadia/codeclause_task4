<?php

	include("connection.php");

	$id=$_GET['id'];

	$sql="delete from music where id='$id'";
	$result=mysqli_query($con,$sql);
	if ($result) {
		echo "Record deleted...";
		header("Location: music_view.php");
	}
	else{
		echo "Record not deleted...";
	}

?>