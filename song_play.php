<!DOCTYPE html>
<html>
<head>
	<title>Play Music</title>
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

	//$id=$_GET['id'];
	$id=isset($_GET['id'])?$_GET['id']:'';
	$sql="select * from music,movie where music.id='$id' and music.mid=movie.mid";
	
	$result = mysqli_query($conn,$sql);

		while ($row=mysqli_fetch_array($result)) 
		{
?>
	<center>
		<div align="center">

			<div class="movie_image">
				<img src="./admin/image/<?php echo $row['image']; ?>">
			</div>
			
			<audio controls>
				<source src="./admin/songs/<?php echo $row['song_name']; ?>" type="audio/mpeg">
			</audio>

			<div class="details_part">
				<h3> Song - <?php echo $row['song']; ?></h3>
			</div>
			<div class="details_part">
				<h3> Singer - <?php echo $row['singer']; ?></h3>
			</div>
			<div class="details_part">
				<h3> Lyrics - <?php echo $row['lyrics']; ?></h3>
			</div>
			<div class="details_part">
				<h3> Music - <?php echo $row['music']; ?></h3>
			</div>
			<div class="details_part">
				<h3> Starring - <?php echo $row['starring']; ?></h3>
			</div>
			<div class="details_part">
				<h3> Label - <?php echo $row['label']; ?></h3>
			</div>
			<div >
				<?php
					if (isset($_SESSION['uid'])) 
					{
						
				?>
				<a href="db_playlist.php?id=<?php echo $id;?>&uid=<?php echo $_SESSION['uid']; ?>" class="playlist_link" > Add to PlayList</a>
				<?php
					}
					else
					{
				?>
						<a href="db_playlist.php" class="playlist_link" > Add to PlayList</a>
				<?php		
					}
				?>
			</div>
		</div>
		</center>
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
	
