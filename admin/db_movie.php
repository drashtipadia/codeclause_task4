<?php
	include ("connection.php");

//-------------upload-----------------------

		$filename = $_FILES['file']['name'];  // store/return name of a music image file.
		$temp_name = $_FILES['file']['tmp_name'];

		if (file_exists("image/" .$filename)){
			echo "<script>alert('".$filename."Image is already Exists..');
			window.location.href='movie_view.php';</script>";
			exit();
		}
		else
		{
			$location = 'image/';
			if((($_FILES['file']['type']=="image/jpg")||($_FILES['file']['type']=="image/png")||($_FILES['file']['type']=="image/jpeg")))
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
				echo "<script>alert('".$_FILES["file"]["name"]." it is not an Image file..');
				window.location.href='movie.php';</script>";
				exit();
			}
		}
		
//-------------upload-----------------------


	$mname=$_POST['mname'];

	$sql="insert into movie(mname,image) values('".$mname."','".$filename."')";

	$result=mysqli_query($con,$sql);
		if ($result) 
		{
			echo "record inserted..";
			header("location: movie_view.php");
		}
		else
		{
		echo "Error".mysqli_error($con);
		}

?>