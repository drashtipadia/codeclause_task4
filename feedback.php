<?php include_once('./includes/header.php'); ?>
<div class="feedback">
 <img src="./image/feed.png" alt="Logo" />

<p class="super_title_Feedback">A response is always appriciated</p>

<p> </p>
<?php
	//session_start(); ?>

<table height='75px' width='100%' id='middletable'>
		<tr>
		<span id="msg"></span> <br /> <br/>
			<form  method="post" action="./action/action.php">
				<input type="hidden" value="feedback" name="type">

				<!-- <small class="success"><?php echo $feedback; ?></small> -->
				<!-- <small class="errormsg"><?php echo $feedback_error; ?></small> -->
						
				
				<label for="name">Name: </label> &nbsp &nbsp &nbsp &nbsp &nbsp
				<input type="text" name="name" id="name" required><br /><br />

				<label for="message">message: </label> &nbsp &nbsp &nbsp
				<textarea name="message" id="message" rows="2" width='3px' required></textarea><br /><br />
	

				<button type="submit" value="Submit" id="sub">Submit</button>
				<button type="button" value="Cancle" id="cancle"><a href="home.php"> Cancel</a></button>
				
			</form>
		</tr>
	</table>	
</div>
<?php include_once('./includes/footer.php'); ?>
<script>
		document.getElementById("msg").innerText = "<?php echo isset($_SESSION['message']) ? $_SESSION['message'] : ''; ?>";
		setTimeout(function() {
				document.getElementById("msg").innerText = '';
				<?php unset($_SESSION['message']); ?>
		}, 10000);
	</script>
