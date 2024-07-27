<?php
	include("connection/connection.php");

	$id=$_GET['id'];
	$uid=$_GET['uid'];

	$sql="delete from playlist where uid=$uid and id=$id ";
	$result=mysqli_query($conn,$sql);
	if($result){
		header("Location:view_playlist.php?uid=$uid");

	}
	else{
	?>
	<script type="text/javascript">
		alert ("Not removed ");
		window.location.href="http://localhost/music-project/view_playlist.php"
	</script>
	<?php	
	}
?>