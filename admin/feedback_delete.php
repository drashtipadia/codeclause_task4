<?php
	include("connection.php");

	//$id=$_GET['id'];
	$id=(isset($_GET['id'])?$_GET['id']:'');

	$sql="delete from feedback where id='$id'";
	$result=mysqli_query($con,$sql);
	if($result)
	{
		//echo "delete..";
		header("Location:feedback.php");
	}
	else
	{
		echo "not delete..";
	}
?>