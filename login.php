<?php include_once('./includes/header.php'); ?>
<div class="login">
<img src="./image/login.png" alt="Logo" />
<p><h4>Don't have an account? <a href="register.php">Create your account.</h4></a></p>
<table height='82' width='100%' id='middletable'>
		<tr>
			<form  method="post"  action="./action/action.php"> 
				<input type="hidden" value="login" name="type">
			
                <label for="email">Email: </label> &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
				<input type="email" name="email" id="email"><br /><br />
				
				<label for="password">password: </label> &nbsp &nbsp &nbsp
				<input type="password" name="password" id="password"></input><br /><br />
	
				<button type="submit" value="Submit" id="sub">Submit</button>
				<button type="button" value="Cancle" id="cancle"><a href="home.php"> Cancel</a></button>
			</form>
		</tr>
	</table>	
</div>

<?php include_once('./includes/footer.php'); ?>