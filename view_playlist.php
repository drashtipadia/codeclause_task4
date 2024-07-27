<?php
	include("includes/header.php");
?>
<div class="mid_part">

<div class="part">
<div class="left">

	<?php include("language.php");?>

	</div>
<div class="right">
	<h1 align="center" class="music_title">Playlist</h1>
	<?php
		include("connection/connection.php");

		$uid=$_GET['uid'];
		//echo($uid); 

		$sql="select * from playlist p,music m,user u,movie where p.id=m.id and p.uid=u.uid and movie.mid=m.mid and u.uid=$uid" ;
		$result=mysqli_query($conn,$sql );

		while($row=mysqli_fetch_array($result))
		{
	?>
	<center>
		<a href="song_play.php?id=<?php echo $row['id']; ?>">
		<div class="p_part" >
		
			<div class="part1">
				<img src="./admin/image/<?php echo $row['image']; ?>">  
			</div>
			<div class="part2">
				<p><?php echo $row['song']; ?></p>
				<p class="part2_small">Singer : <?php echo $row['singer']; ?></p>
				<p class="part2_small">Label : <?php echo $row['label']; ?></p>
				<a href="delete_playlist.php?uid=<?php echo $uid; ?>&id=<?php echo $row['id']; ?>" class="part2_small_link">Remove From Playlist </a>
			</div>
		
		</div>
		</a>
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