<?php
$con = mysqli_connect("localhost","root","","musical_journey");
if ($con) 
{
	//echo "connect";# code...
}
else
{
	echo "not connected".mysqli_error($con);
}
?>