<html lang="en" dir="ltr">
<head>
	<meta charset="utf-8"> 
<title>Loign</title>
	<link rel="stylesheet" href="css/login.css">
  </head>
<body>
<?php
	session_start();
	if (isset($_SESSION['unm'])) {
	header("Location: home.php");

	}
	else{
		
?>
		<div class="center">
	<h1> Login </h1>
	<form method="post" action="db_login.php">
		<label>UserName</label>
			<div class="txt_field">
				<input type="text" name="unm" id="unm" required autocomplete="off">
			</div>
		<div>
		<label>Password</label>
			<div class="txt_field">
				<input type="password" name="pwd" id="pwd" required>
			</div>
	<!-- <div class="pass">Forget password?</div> -->
	<input type="Submit" value="Login">
	<div class="Signout_Link">
	
	</div>
	</form>
	</div>
<?php
	}
?>
</body>
</html>