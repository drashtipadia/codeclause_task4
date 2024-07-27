<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="css/home.css">
	<link rel="stylesheet" type="text/css" href="css/link.css">
	<title></title>
</head>
<body>

	<?php

		include("menu.php");

		include("connection.php");

		$mid=(isset($_GET['mid'])?$_GET['mid']:'');
		//echo $id;
		$sql="select * from movie where mid='$mid'";
		//echo $sql;
		$result=mysqli_query($con,$sql);

		while ($row=mysqli_fetch_array($result)) 
		{
			$mname=$row['mname'];
		}

	?>
	<center>
		<?php
			if (isset($_SESSION['unm'])) {
		?>
		<h2 align="center" class="title">Edit </h2>
		
		<form action="movie_db_edit.php" method="post"enctype="multipart/form-data" onsubmit="return check_valid();">

		<input type="hidden" name="mid" value="<?php echo $mid; ?>">
		<table border="2">
			<tr>
				<td>Name</td>
				<td> <input type="text" name="mname" required value="<?php echo $mname; ?>">
				</td>
			</tr>
			<tr>
				<td>Upload Image</td>
				<td> <input type="file" name="file">
				</td>
			</tr>
			<tr>
				<td colspan="2">
				<input type="submit" value="UPDATE" class="all_link"></td>

			</tr>
		</table>
	</form>
	</center>
	<?php

		}
		else
		{
			header("location:index.php");
		}
	?>
</body>
</html>