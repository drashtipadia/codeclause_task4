<!DOCTYPE html>
<html>
<head>
	<title>Language</title>
	<link rel="stylesheet" type="text/css" href="css/music.css">
</head>
<body>

<?php include("includes/header.php"); ?>

<div class="mid_part">
<div class="part">
<div class="left">
	<?php include("language.php"); ?>
</div>
<div class="right">
	<center>
		
	<h2 class="music_title">Songs</h2>

	<?php
		$m_id=$_GET['id'];
		
		$sql="select * from music where mid=$m_id";
		
		$result = mysqli_query($conn,$sql);

		while ($row=mysqli_fetch_array($result)) 
		{
			$id=$row['id'];
			$song=$row['song'];
	?>
			<h3><a href="song_play.php?id=<?php echo $id;?>"><?php echo $song; ?></a></h3>
	<?php
		}
	?>

	</center>
</div>
<div class="last">

	<?php include("movie.php");?>

</div>
</div>
</div>

</body>

</html>
<?php
	include("includes/footer.php");
?>
	