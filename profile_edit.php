<?php
	
	include("connection/connection.php");
	include_once('./includes/header.php');
	
	$firstname="";
	$lastname="";
		$id=(isset($_GET['id'])?$_GET['id']:'');
		//echo $id;
		$sql="select * from user where uid='$id'" ;
		//echo $sql;
		$result=mysqli_query($conn,$sql);

		while ($row=mysqli_fetch_array($result)) 
		{
			$firstname=$row['firstname'];
			$lastname=$row['lastname'];
		}
?>
<link rel="stylesheet" type="text/css" href="css/music.css">
<div class="mid_part">
	<center>
		<form  method="post" action="db_edit_profile.php">
		<h2 align="center" class="music_title">Profile Edit </h2>

		<input type="hidden" name="id" value="<?php echo $id; ?>">
			<tr>
				<label for="fname">Firstname: </label>&nbsp &nbsp
				<input type="text" id="fname" name="firstname" value="<?php echo $firstname; ?>" required><br><br>

				<label for="lname">Lastname: </label>&nbsp &nbsp
				<input type="text" id="lname" name="lastname" required value="<?php echo $lastname; ?>"><br>
				
				<td colspan="2" align="center">
				<td> <input type="submit" value="UPDATE" class="link_style"></td>
		</tr>
	</form>
	</center>
</div>

<?php	
	include_once("./includes/footer.php");
?>