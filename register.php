<?php include_once('./includes/header.php'); ?>
<div class="login">
<img src="./image/register1.png" alt="Logo" />
<p> </p>
<table height='75px' width='100%' id='middletable'>
		<tr>
		<form  method="post" action="./action/action.php">
				<input type="hidden" value="register" name="type" required>

                <label for="fname">Firstname: </label>&nbsp &nbsp
				<input type="text" id="fname" name="firstname" required><br /><br />
                
                <label for="lname">Lastname: </label>&nbsp &nbsp
				<input type="text" id="lname" name="lastname" required><br /><br/>
			
                <label for="email">Email: </label> &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
				<input type="email" name="email" id="email" required><br /><br />
				
				<label for="password">password: </label> &nbsp &nbsp 
				<input type="password" name="password" id="password" required></input><br /><br />
	

				<button type="submit" value="Submit" id="sub">Submit</button>
				<button type="button" value="Cancle" id="cancle"><a href="home.php"> Cancel</a></button>
			</form>
		</tr>
	</table>	
</div>

<?php include_once('./includes/footer.php'); ?>