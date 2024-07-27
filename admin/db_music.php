<?php
	include ("connection.php");
	



//-------------upload-----------------------

		$filename = $_FILES['file']['name'];  // store/return name of a music file.
		$temp_name = $_FILES['file']['tmp_name'];


/*		if (file_exists("images/" .$_FILES["img1"]["name"])) {
			echo "<script>alert('".$_FILES["img1"]["name"]." Image is already Exists...');
			window.location.href='product.php';</script>";
		}


*/		if (file_exists("songs/" .$filename)){
			echo "<script>alert('".$filename."Song is already Exists..');
			window.location.href='music_view.php';</script>";
			exit();
		}
		else
		{
			$location = 'songs/';
			if((($_FILES['file']['type']=="audio/mpeg")))
			{

				if(move_uploaded_file($temp_name, $location.$filename)){
					echo "File uploaded successfully";
				}
				else
				{
					echo "not uploaded..";
				}
			}
			else
			{
				echo "<script>alert('".$_FILES["file"]["name"]." it is not an audio file..');
				window.location.href='music.php';</script>";
				exit();
			}
		}
//-------------upload-----------------------

		$cid=(isset($_POST['cid'])?$_POST['cid']:'');
		//$cid=$_POST['cid'];
		$mid=$_POST['mid'];
		$song=$_POST['song'];
		$singer=$_POST['singer'];
		$lyrics=$_POST['lyrics'];
		$music=$_POST['music'];
		$starring=$_POST['starring'];
		$label=$_POST['label'];

	$sql="insert into music(mid,cid,song,singer,lyrics,music,starring,label,song_name) values('".$mid."','".$cid."','".$song."','".$singer."','".$lyrics."','".$music."','".$starring."','".$label."','".$filename."')";


	$result=mysqli_query($con,$sql);
	if ($result) 
	{
		echo "record inserted..";
		header("location: music_view.php");
	}
	else
	{
		echo "Error".mysqli_error($con);
	}
	
?>