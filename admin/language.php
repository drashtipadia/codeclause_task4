
<!DOCTYPE html>
<html>
<head>
	<title>Language Form</title>
	<link rel="stylesheet" type="text/css" href="css/home.css">
	<link rel="stylesheet" type="text/css" href="css/link.css">
	
</head>
<body>
	<center>
	
	<?php
		include("menu.php");

		//session_start();

		if (isset($_SESSION['unm'])) {
			
	?>
	<div>
			<form action="db_language.php" method="post">
			<h2 align="center" class="title">Language</h2>
				
			<table border="2">
				<tr>
					<td>Language Name</td>
					<td><input type="text" name="cname" required></td>
				</tr>
				<tr >
					<td colspan="2" align="center">
						<input type="submit" class="sub_button">
					</td>
				</tr>

				</form></tr>
		
			<!-- colspan -->
				<tr>
					<td colspan="2" align="center"><a href="language_view.php" class="all_link">View</a></td>
					
				</tr>
			<!-- colspan -->

			</table>
		</form>
	</div>
	</center>

	<?php

		}
		else
		{
			header("location:index.php");
		}
	?>
</body>
</html>
