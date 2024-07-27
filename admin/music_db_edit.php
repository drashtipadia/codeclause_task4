<?php

	include("connection.php");

	$id=$_POST['id'];
	//$cname=$_POST['cname'];
	//$song=(isset($_POST['song'])?$_POST['song']:'');

	$cid=(isset($_POST['cid'])?$_POST['cid']:'');
		//$cid=$_POST['cid'];
		$mid=$_POST['mid'];
		$song=$_POST['song'];
		$singer=$_POST['singer'];
		$lyrics=$_POST['lyrics'];
		$music=$_POST['music'];
		$starring=$_POST['starring'];
		$label=$_POST['label'];
		$filename="";

	if(!empty($_FILES["file"]["name"]))
	{

		if((($_FILES['file']['type']=="audio/mpeg")))
		{
			move_uploaded_file($_FILES['file']['tmp_name'],"songs/".$_FILES['file']['name']);

		

		$filename=$_FILES['file']['name'];

		$sql="update music set mid='".$mid."',cid='".$cid."',song='".$song."',singer='".$singer."',lyrics='".$lyrics."',music='".$music."',starring='".$starring."',label='".$label."',song_name='".$filename."' where id=$id";

		$result=mysqli_query($con,$sql);
		}
		else
		{
			echo "<script>alert('".$_FILES["file"]["name"]." it is not an audio file..');
			window.location.href='music_view.php';</script>";
			exit();
		}

	}
	if (empty($_FILES['file']['name'])) {
		$sql="update music set mid='".$mid."',cid='".$cid."',song='".$song."',singer='".$singer."',lyrics='".$lyrics."',music='".$music."',starring='".$starring."',label='".$label."' where id=$id";

		$result=mysqli_query($con,$sql);
				
	}

	if($result)
	{
		header("Location: music_view.php");
	}
	else
	{
		echo "Error generated.......".mysqli_error($con);
	}

?>