<?php
	include ("connection.php");
?>
<!DOCTYPE html>
<html>
<head>
		<link rel="stylesheet" type="text/css" href="css/home.css">
		<link rel="stylesheet" type="text/css" href="css/link.css">
	<title>Music Form</title>
</head>
<body>

	<center>

	<?php
		include("menu.php");	

		if (isset($_SESSION['unm'])) {
	?>
		<div>
			<form action="db_music.php" method="post" enctype="multipart/form-data">
			<h2 align="center" class="title">Music</h2>
				
			<table border="2 ">
			
		<tr>
		<td>Movie name</td>		
		<td><select name="mid">
	<?php

		$sql=mysqli_query($con,"select * from movie");
		while($r=mysqli_fetch_array($sql))
		{
			echo "<option value='".$r['mid']."'>".$r['mname']."</option>";
		}
	?>
	<tr>
		<td>Language name</td>		
		<td><select name="cid">
	<?php

		$sql2=mysqli_query($con,"select * from language");
		while($res=mysqli_fetch_array($sql2))
		{
			echo "<option value='".$res['cid']."'>".$res['cname']."</option>";
		}
	?>
		</td>
			</tr>	
				
				<tr>
					<td>Song</td>
					<td><input type="text" name="song" required></td>
				</tr>
				<tr>
					<td>Singer</td>
					<td><input type="text" name="singer" required></td>
				</tr>
				<tr>
					<td>Lyrics</td>
					<td><input type="text" name="lyrics" required></td>
				</tr>
				<tr>
					<td>Music</td>
					<td><input type="text" name="music" required></td>
				</tr>
				<tr>
					<td>Starring</td>
					<td><input type="text" name="starring" required></td>
				</tr>
				<tr>
					<td>Label</td>
					<td><input type="text" name="label" required></td>
				</tr>
				<tr>
					<td>Upload music</td>
					<td><input type="file" name="file" required></td>
					
				</tr>
				<tr>
					<td  colspan="2" align="center">
					<input type="submit" class="sub_button"></td>
				
			</form></tr>
				<td colspan="2" align="center"><a href="music_view.php" class="all_link">View</a></td>
			</table>
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