<?php
	include("includes/header.php");
	if (isset($_SESSION['uid']))
	{
		$uid=$_GET['uid'];
		$id=$_GET['id'];

		$sql="insert into playlist(uid,id)values('".$uid."','".$id."')";

		//echo $sql;
		$result=mysqli_query($conn,$sql);
		if($result)
		{
			header("Location:view_playlist.php?uid='$uid'");
		}

		else
		{
			echo "error" . mysqli_error($conn);
			header("Location:song_play.php?id=$id");
		}
	}
	else{
?>
		<script type="text/javascript">
		alert("Please do Login First");
		window.location.href="http://localhost/music-project/login.php";
		</script>
<?php
	}
	include("includes/footer.php");
?>