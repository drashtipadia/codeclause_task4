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
	<th>Edit</th>
	<th>Delete</th>

	<?php
		include("connection.php");

		$sql="select * from language";
		$result=mysqli_query($con,$sql);
		while($row=mysqli_fetch_array($result))
		{
	?>
	<tr>
			<td><?php echo $row['cid']; ?></td>
			<td><?php echo $row['cname']; ?></td>

			<td>
				<a class="all_link" href="language_edit_form.php?cid=<?php echo $row['cid']; ?>">Edit</a> 
			</td>
			<td>
				<a class="all_link" href="delete.php?cid=<?php echo $row['cid']; ?>"onclick="return confirm('Are you sure?');">Delete</a> 
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