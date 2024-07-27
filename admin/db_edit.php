<?php

	include("connection.php");

	$cid=$_POST['cid'];
	//$cname=$_POST['cname'];
	$cname=(isset($_POST['cname'])?$_POST['cname']:'');

	$sql="update language set cname='$cname' where cid='$cid'";

	$result = mysqli_query($con,$sql);

	if ($result) {
		header("Location: language_view.php");
	}
	else{
		echo "Not Updated".mysqli_error($con);
	}

?>