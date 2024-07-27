<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="css/home.css">
	<link rel="stylesheet" type="text/css" href="css/link.css">
	<title>Movie Form</title>
</head>
<body>

	<center>
	
	<?php
		include("menu.php");

		if (isset($_SESSION['unm'])) {
	?>

		<div>
			<form action="db_movie.php" method="post" enctype="multipart/form-data">
			<h2 align="center" class="title">Movie</h2>
				
			<table border="2">
				
				<tr>
					<td>Movie Name</td>
					<td><input type="text" name="mname" required></td>
				</tr>
				<tr>
					<td>Movie Image</td>
					<td><input type="file" name="file" required></td>
				</tr>
				<tr>
					<td  colspan="2" align="center">
					<input type="submit" class="sub_button"></td>
				</tr>
				<td colspan="2"><a href="movie_view.php" class="all_link">View</a></td>

			</table>
			</form>
	</div>
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