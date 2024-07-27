<?php include_once('./includes/header.php'); ?>
<div class="contact">
<img src="./image/contact.jpg" alt="Logo" />
<p> </p>
<?php
	//session_start(); ?>

<div class="contact-sub">
	<table height='28px' width='100%' id='middletable'>
		<tr>
		<span id="cont"></span> <br /> <br/>
		<form  method="post" action="./action/action.php">
				<input type="hidden" value="contect" name="type">
	
				<label for="name">Name: </label> &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
				<input type="text" name="name" id="name" required autocomplete="off"><br /><br />

                <label for="email">Email: </label> &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
				<input type="email" name="email" id="email" required autocomplete="off"><br /><br />
				
            	<label for="contact">Contact no: </label> &nbsp &nbsp
				<input type="text" name="contact" id="contact" required autocomplete="off"><br /><br />
			    				
				<label for="message">Message: </label> &nbsp &nbsp &nbsp
				<textarea name="message" id="message" rows="2" required autocomplete="off"></textarea><br /><br />
	
				<div class="button-conct">
				<button type="submit" value="Submit" id="sub">Submit</button>
				<button type="button" value="Cancle" id="cancle"><a href="home.php"> Cancel</a></button>
				</div>		
				
			</form>
		</tr>
	</table>	
	</div>

</div>

<?php include_once('./includes/footer.php'); ?>

<script>
		document.getElementById("cont").innerText = "<?php echo isset($_SESSION['contect']) ? $_SESSION['contect'] : ''; ?>";
		setTimeout(function() {
				document.getElementById("cont").innerText = '';
				<?php unset($_SESSION['contect']); ?>
		}, 10000);
	</script>	
