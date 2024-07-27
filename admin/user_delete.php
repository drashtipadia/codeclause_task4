<?php
	include("connection.php");

	$id=$_GET['uid'];

	$sql="delete from user where uid='$id'";

	$result=mysqli_query($con,$sql);

	if($result)
	{
		header("Location:user.php");
		//echo "delete..";
	}
	else
	{
		echo "not delete..";
	}
?>