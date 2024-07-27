<?php

	include("connection.php");

	$mid=$_GET['mid'];

	$sql="delete from movie where mid='$mid'";
	$result=mysqli_query($con,$sql);
	if ($result) {
		echo "Record deleted...";
		header("Location: movie_view.php");
	}
	else{
		echo "Record not deleted...";
	}

?>