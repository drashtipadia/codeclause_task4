<!DOCTYPE html>
<html>
<head>
	<title>Language</title>
	<link rel="stylesheet" type="text/css" href="css/music.css">
</head>
<body>

<?php
	
	include("connection/connection.php");

	$sql2="select * from language";
	$result2 = mysqli_query($conn,$sql2);

?>
<h2>Languages</h2>
<hr>
	
	<?php
		while ($row2=mysqli_fetch_array($result2)) 
		{
	?>

		<div>
			<h4><a href="language_data.php?id=<?php echo $row2['cid']; ?>"><?php echo $row2['cname']; ?></a></h4> 
		</div>
	<?php
		}
	?>
</body>
</html>