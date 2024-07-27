<!DOCTYPE html>
<html>
<head>
	<title>Users</title>
	<link rel="stylesheet" type="text/css" href="css/home.css">
	<link rel="stylesheet" type="text/css" href="css/link.css">
</head>
<body>
<center>
	<?php
		include("menu.php");

		if (isset($_SESSION['unm'])) {
	?>
	<h2 align="center" class="title">Users</h2>
	<table border="2">
		<th>Id</th>
		<th>Name</th>
		<th>Message</th>
		<th>Email</th>
		<th>Delete</th>
	<?php
		include("connection.php");

		$sql="select * from user";

		$result=(mysqli_query($con,$sql));

		while($row=mysqli_fetch_array($result))
		{
	?>
	<tr>
		<td><?php echo $row['uid']?></td>
		<td><?php echo $row['firstname']?></td>
		<td><?php echo $row['lastname']?></td>
		<td><?php echo $row['email']?></td>

		<td>
				<a class="all_link" href="user_delete.php?uid=<?php echo $row['uid']; ?>"onclick="return confirm('Are you sure?');">Delete</a> 
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
