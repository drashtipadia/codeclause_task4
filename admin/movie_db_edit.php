<?php

	include("connection.php");

	$mid=$_POST['mid'];
	//$cname=$_POST['cname'];
	$mname=(isset($_POST['mname'])?$_POST['mname']:'');
	$filename="";

	if(!empty($_FILES["file"]["name"]))
	{
		if((($_FILES['file']['type']=="image/jpg")||($_FILES['file']['type']=="image/png")||($_FILES['file']['type']||"image/jpeg")))
		{
			move_uploaded_file($_FILES['file']['tmp_name'],"image/".$_FILES['file']['name']);

			$filename=$_FILES['file']['name'];

			$sql="update movie set mname='$mname',image='$filename' where mid='$mid'";

			$result = mysqli_query($con,$sql);
		}
		else
		{
			echo"<script>alert('".$_FILES["file"]["name"]." it is not an image file..');
			window.location.href='movie_view.php';</script>";
			exit();
		}
	}
	if(empty($_FILES['file']['name'])){

		$sql="update movie set mname='$mname' where mid='$mid'";

		$result = mysqli_query($con,$sql);

	}

	if ($result) {
		header("Location: movie_view.php");
	}
	else{
		echo "Not Updated".mysqli_error($con);
	}

?>