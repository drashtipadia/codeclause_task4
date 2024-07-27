<?php

	include ("connection.php");

	$cname=(isset($_POST['cname'])?$_POST['cname']:'');

	$sql="insert into language(cname) values('".$cname."')";

	$result=mysqli_query($con,$sql);
		if ($result) 
		{
	
			header("location: language_view.php");
		}
		else
		{
		echo "Error".mysqli_error($con);
		}
?>