<?php

	session_start();

	session_destroy();

		echo "logout";

	
	header("Location: http://localhost/music-project/home.php");
	

?>