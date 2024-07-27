<?php

//important to start session .......
session_start();


include('connection.php');
$username=$_POST['unm'];
//$username=(isset($_POST['username'])?$_POST['username']:'')
$password=$_POST['pwd'];

	//$password=(isset($_POST['password'])?$_POST['password']:'')

$sql="select * from admin where username='$username' and password='$password'";

$result=mysqli_query($con,$sql);

$row=mysqli_fetch_array($result);

$count=mysqli_num_rows($result);

if($count==1)
	{
		//echo "Login Sucessfull....";
		$_SESSION['unm']=$username;
		header("Location: home.php");
	}
	else
	{
		//echo "Login not sucessfull....";
		header("Location: index.php");
	}
?>