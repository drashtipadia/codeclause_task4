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


		$cid=(isset($_GET['cid'])?$_GET['cid']:'');
		//echo $id;
		$sql="select * from language where cid='$cid'";
		//echo $sql;
		$result=mysqli_query($con,$sql);

		while ($row=mysqli_fetch_array($result)) 
		{
			$cname=$row['cname'];
		}

	?>
	<center>
		<?php
			if (isset($_SESSION['unm'])) {
		?>
		
		<h2 align="center" class="title">Edit </h2>

		<form action="db_edit.php" method="post"enctype="multipart/form-data" onsubmit="return check_valid();">

		<input type="hidden" name="cid" value="<?php echo $cid; ?>">
		<table border="2">
			<tr>
				<td>Language Name</td>
				<td> <input type="text" name="cname" required value="<?php echo $cname; ?>">
				</td>
			</tr>
			<tr>
				<td colspan="2"> <input type="submit" value="UPDATE" class="all_link"></td>
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