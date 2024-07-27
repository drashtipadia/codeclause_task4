<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="css/music.css">
</head>
<body>

</body>
</html>

<?php
	include("includes/header.php");
?>
<div class="mid_part">

<div class="part">
<div class="left">

	<?php include("language.php");?>

</div>
<div class="right">
	<h1 align="center" class="music_title">MUSICS</h1>

<?php
	include("connection/connection.php");

	$sql="select * from music ORDER BY RAND()";
	
	$result = mysqli_query($conn,$sql);

		while ($row=mysqli_fetch_array($result)) 
		{
?>
	
		<div align="center">
			<h3><a href="song_play.php?id=<?php echo $row['id']; ?>"><?php echo $row['song']; ?></a></h3> 
		</div>
	<?php
		}
	?>
</div>
<div class="last">

	<?php include("movie.php");?>

</div>
</div>
</div>

<?php
	include("includes/footer.php");
?>
	
