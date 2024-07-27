<?php

	include("connection.php");

	$cid=$_GET['cid'];

	$sql="delete from language where cid='$cid'";
	$result=mysqli_query($con,$sql);
	if ($result) {
		echo "Record deleted...";
		header("Location: language_view.php");
	}
	else{
		echo "Record not deleted...";
	}

?>