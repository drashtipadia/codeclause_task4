<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="css/home.css">
	<link rel="stylesheet" type="text/css" href="css/link.css">
	<title>View</title>
</head>
<body>
<?php
		include("menu.php");
?>
	<center>
<div class="music_table_width">
	<?php
		if (isset($_SESSION['unm'])) {
	?>
	<h2 align="center" class="title">view</h2>
	<table border="2" >
	<th>Id</th>
	<th>Music Id</th>
	<th>Language Id</th>
	<th>Song</th>
	<th>Singer</th>
	<th>Lyrics</th>
	<th>Music</th>
	<th>Starring</th>
	<th>Label</th>
	<th>Song</th>
	<th>Edit</th>
	<th>Delete</th>

	<?php
		include("connection.php");

		$sql="select * from music";
		$result=mysqli_query($con,$sql);
		while($row=mysqli_fetch_array($result))
		{
	?>
	<tr>
			<td><?php echo $row['id']; ?></td>
			<td><?php echo $row['mid']; ?></td>
			<td><?php echo $row['cid']; ?></td>
			<td><?php echo $row['song']; ?></td>
			<td><?php echo $row['singer']; ?></td>
			<td><?php echo $row['lyrics']; ?></td>
			<td><?php echo $row['music']; ?></td>
			<td><?php echo $row['starring']; ?></td>
			<td style="width: 40px;"><?php echo $row['label']; ?></td>
			<td>
				<audio controls  style="width: 20px; height: 30px;">
					<source src="songs/<?php echo $row['song_name']; ?>" type="audio/mpeg">
				</audio>
			</td>
			<td>
				<a  class="all_link" href="music_edit_form.php?id=<?php echo $row['id']; ?>">Edit</a> 
			</td>
			<td>
				<a  class="all_link" href="music_delete.php?id=<?php echo $row['id']; ?>" onclick="return confirm('Are you sure?');">Delete</a> 
			</td>

			
	</tr>

	<?php
	}
	?>
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