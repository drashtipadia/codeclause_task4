<!DOCTYPE html>
<html>
<head>
	<title>Profile</title>
	<link rel="stylesheet" type="text/css" href="css/music.css">
</head>
<body>

<?php
	 include("connection/connection.php");
	 include_once('./includes/header.php');

	 //session_start();
	 $sql="select * from user where email='".$_SESSION['u_email']."'";
				
	 $result=mysqli_query($conn,$sql);

	 while ($row=mysqli_fetch_array($result)) 
	 {
?>
<div class="mid_part" align="center">
	<h1 class="music_title">Profile</h1>
	<div class="profile_img">
		<img src="image/user-profile.png">
	</div>
	<div>
		<h3>First Name : 
		<?php echo $row['firstname']; ?></h3>
	</div>
	<div>
		<h3>Last Name : 
		<?php echo $row['lastname']; ?></h3>
	</div>
	<div>
	<h3><a href="Profile_edit.php?id=<?php echo $row['uid']; ?>" class="link_style">You want to chang profile ?</a></h3>
	</div>

</div>	
	<?php
	}
	include_once("./includes/footer.php");
?>

</body>
</html>