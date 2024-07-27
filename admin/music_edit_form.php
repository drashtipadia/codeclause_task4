<head>
	<link rel="stylesheet" type="text/css" href="css/home.css">
	<link rel="stylesheet" type="text/css" href="css/link.css">
	<title></title>
</head>
<body>
	<?php
		include ("menu.php");
		include("connection.php");
		$id=$_REQUEST['id'];
		if(isset($_POST['submit']))
		{
			$id;

			$result=mysqli_query($con,"update music set mid=".$_POST['movie'].",cid=".$_POST['category'].",song='".$_POST['song']."',singer='".$_POST['singer']."',lyrics='".$_POST['lyrics']."',music='".$_POST['music']."',starring='".$_POST['starring']."',label='".$_POST['label']."'where id=$id");
		if ($result)
	    {
			header("Location: music_db_edit.php");
	    }
		
		else
		{
			echo "error genrated..".mysqli_error($con);
		}
	}

	?>
<?php
$id=$_REQUEST['id'];
$result=mysqli_query($con,"select * from music where id=$id");
$row=mysqli_fetch_array($result);

?>
	<center>
		<?php
				if (isset($_SESSION['unm'])) {
		?>
		<h2 align="center" class="title">Edit </h2>

	<form action="music_db_edit.php" method="post" enctype="multipart/form-data">
		<input type="hidden" name="id" value="<?php echo $id; ?>">
		<table border="2">
			<tr>
				<td><label>Mname</label></td> 

				<td><select name="mid">
			<?php

				$sql=mysqli_query($con,"select * from movie ");
				while($r=mysqli_fetch_array($sql))
				{
					if($row['mid']==$r['mid'])
					{
						echo "<option value='".$r['mid']."' selected>".$r['mname']."</option>";
					}
					else{
						echo "<option value='".$r['mid']."'>".$r['mname']."</option>";
					}
				}
			?>

		<tr>
			<td>cname</td>		
			<td><select name="cid">
		<?php

		$sql=mysqli_query($con,"select * from language");
		while($r=mysqli_fetch_array($sql))	
		{
			if($row['cid']==$r['cid'])
			{
				echo "<option value='".$r['cid']."' selected>".$r['cname']."</option>";
			}
			else{
				echo "<option value='".$r['cid']."'>".$r['cname']."</option>";	
			}
		}
		?>
			</tr>
			<tr>
				<td><label>Song</label></td>
				<td> <input type="text" name="song" required value="<?php echo $row['song']; ?>">
				</td>
			</tr>
			<tr>
				<td><label>Lyrics</label></td>
				<td> <input type="text" name="lyrics" required value="<?php echo $row['lyrics']; ?>">
				</td>
			</tr>
			<tr>
				<td><label>Singer</label></td>
				<td> <input type="text" name="singer" required value="<?php echo $row['singer']; ?>">
				</td>
			</tr>
			<tr>
				<td><label>Music</label></td>
				<td> <input type="text" name="music" required value="<?php echo $row['music']; ?>">
				</td>
			</tr>
			<tr>
				<td><label>Starring</label></td>
				<td> <input type="text" name="starring" required value="<?php echo $row['starring']; ?>">
				</td>
			</tr>
			<tr>
				<td><label>Label</label></td>
				<td> <input type="text" name="label" required value="<?php echo $row['label']; ?>">
				</td>
			</tr>
			<tr>
				<td><label>Upload Music</label></td>
				<td> <input type="file" name="file"></td>

			</tr>

			<tr>
				<td colspan="2" align="center"> <input type="submit" value="UPDATE" class="all_link"></td>
			</tr>
		</table>
	</form>
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