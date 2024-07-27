<!DOCTYPE html>
<html>
<head>
	<title>Feedback</title>
	<link rel="stylesheet" type="text/css" href="css/home.css">
	<link rel="stylesheet" type="text/css" href="css/link.css">
</head>
<body>
<center>
	<?php
		include ("menu.php");

		if (isset($_SESSION['unm'])) {
	?>
	<h2 align="center" class="title">Feedback</h2>
	<table border="2">
		<th>Id</th>
		<th>Name</th>
		<th>Message</th>
		<th>Delete</th>
	<?php
		include("connection.php");

		$sql="select * from feedback";

		$result=(mysqli_query($con,$sql));

		while($row=mysqli_fetch_array($result))
		{
	?>
	<tr>
		<td><?php echo $row['id']?></td>
		<td><?php echo $row['name']?></td>
		<td><?php echo $row['message']?></td>

		<td>
				<a class="all_link" href="feedback_delete.php?id=<?php echo $row['id']; ?>"onclick="return confirm('Are you sure?');">Delete</a> 
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