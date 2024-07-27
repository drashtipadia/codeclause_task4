<!DOCTYPE html>
<html>
<head>
	<title>Mg</title>
	<link rel="stylesheet" type="text/css" href="css/menu.css">

</head>
<body>

<?php
	session_start();
//	echo "session value" .$_SESSION['unm'];
	
	if (isset($_SESSION['unm'])) 
	{	
		
?>
<div class="flex-container">
	<ul class="first-ul">
		<li class="active"><a href="home.php"> Home</a> </li>
		<li><a href="language.php"> Languages</a> </li>
		<li><a href="movie.php"> Movies </a></li>
		<li><a href="music.php"> Musics </a></li>
		<li><a href="feedback.php"> Feedback </a></li>
		<li><a href="contact.php">Contact</a></li>
		<li><a href="user.php"> Users </a></li>
		<li class="active"><a href="logout.php" > LOGOUT </a></li>
	</ul>
</div>
<?php
	}


?>

</body>
</html>