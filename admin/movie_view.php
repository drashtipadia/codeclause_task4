<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="css/home.css">
	<link rel="stylesheet" type="text/css" href="css/link.css">

	<?php
		include ("menu.php");
	?>
	<title>View</title>
</head>
<body>
	
	<center>
	<?php
		if (isset($_SESSION['unm'])) {
	?>
	<h2 align="center" class="title">view</h2>
	<table border="2">
	<th>Id</th>
	<th>Name</th>
	<th>Image</th>
	<th>Edit</th>
	<th>Delete</th>

	<?php
		include("connection.php");

		$sql="select * from movie";
		$result=mysqli_query($con,$sql);
		while($row=mysqli_fetch_array($result))
		{
	?>
	<tr>
			<td><?php echo $row['mid']; ?></td>
			<td><?php echo $row['mname']; ?></td>
			<td class="image_view"><img src="image/<?php echo $row['image']; ?>" /></td>
			<td>
				<a class="all_link" href="movie_edit_form.php?mid=<?php echo $row['mid']; ?>">Edit</a> 
			</td>
			<td>
				<a class="all_link" href="movie_delete.php?mid=<?php echo $row['mid']; ?>"onclick="return confirm('Are you sure?');">Delete</a> 
			</td>
	</tr>

	<?php
	}
	?>
	</table>
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