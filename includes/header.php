<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8" />
	<title>Home - Musical Journy</title>
	
	<link rel="stylesheet" href="./css/style.css"></link>
</head>
<body>
	<div id="header">
		<div>
			
			<a href="index.php"><img src="./image/logo3.png" alt="Logo" /></a>
			<img src="./image/sidelogo1.png" alt="Logo" />
			<ul>
                <li><a href="home.php">Home</a></li> 
                <li><a href="music.php">Music</a></li>  
                <li><a href="about.php">About us</a></li>
				<li><a href="feedback.php">Feedback</a></li>
				<li><a href="contact.php">Contact</a></li>
			<?php
				session_start();
				if (isset($_SESSION['u_email'])) {
					
					include("connection/connection.php");

					$sql="select * from user where email='".$_SESSION['u_email']."'";
					//echo $sql;
					//echo "hii";

					$result=mysqli_query($conn,$sql);
					while ($row=mysqli_fetch_array($result)) {
			?>
						<li><a href="profile.php"> <?php echo $row['email']; ?> </a></li>
						<li><a href="view_playlist.php?uid=<?php echo $_SESSION['uid']; ?>"> Playlist </a></li>
						<li><a href="logout.php">Logout</a></li>
			<?php
					}
				}
				else{
			?>
					<li><a href="login.php">Login</a></li>
			<?php	
			}
			?>
				
			</ul>
		</div>
	</div>

