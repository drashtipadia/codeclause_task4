<!DOCTYPE html>
<html>
<head>
	<title>movies</title>
	<link rel="stylesheet" type="text/css" href="css/music.css">
</head>
<body>
<?php

	include("connection/connection.php");

	$sql2="select * from movie";
	$result2 = mysqli_query($conn,$sql2);
?>
<h2>Movies</h2>
<hr>	
	<?php
		while ($row2=mysqli_fetch_array($result2)) 
		{
	?>
		<div>
			<h4><a href="movie_data.php?id=<?php echo $row2['mid']; ?>"><?php echo $row2['mname']; ?></a></h4> 
		</div>
	<?php
		}
	?>
	
</body>
</html>