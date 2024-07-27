<?php

    session_start();

    // $feedback="";
    // $feedback_error="";
    // $contect="";
    // $contect_error="";
    
    include('../connection/connection.php');

    //registration

    if($_POST['type'] == 'register')
    {
        $firstname = $_POST['firstname'];
        $lastname = $_POST['lastname'];
        $email = $_POST['email'];
        $pass = $_POST['password'];
        
        $sql = "insert into user(firstname, lastname, email, password) values ('$firstname', '$lastname' , '$email', '$pass')";
        if(mysqli_query($conn, $sql))
        {
            header("location: http://localhost/music-project/login.php");
        }
        else
        {
            echo "invalid credentials";
        }
    }
    
    // login

    if($_POST['type'] == 'login')
	{
        $email = $_POST['email'];
		$pass = $_POST['password'];
		$sql = "select * from user where email='$email' AND password='$pass'";

        $result=mysqli_query($conn,$sql);
        $row=mysqli_fetch_array($result);
        $count=mysqli_num_rows($result);

        if($count==1)
        {
            //echo "Login Sucessfull....";
            $_SESSION['u_email']=$email;
            $_SESSION['uid']=$row['uid'];
            //echo "session ".$_SESSION['uid'];
        ?>

            <script type="text/javascript">
            alert("Welcome to musical journey");
           window.location.href="http://localhost/music-project/home.php";
            //window.location.href="http://localhost/music-project/client/includes/header.php";
            
            </script>
        <?php    
        }
        else
        {
            //echo "Login not sucessfull....";
           // header("Location: http://localhost/music-project/client/login.php");
?>
        <script type="text/javascript">
            alert("Please try again");
            window.location.href="http://localhost/music-project/login.php";
        </script>
<?php
        }

/*
		if(mysqli_query($conn, $sql))
		{
			header("Location: http://localhost/music-project/client/home.php");
		}
		else
		{
			echo"invalide credentials";
            alert("invalide credentials");
		}	
*/    }
		


    // feedback

    if($_POST['type'] == 'feedback')
    {
        $name= $_POST['name'];
        $message = $_POST['message'];
         $sql = "insert into feedback(name, message) values ('$name', '$message')";
        if(mysqli_query($conn, $sql))
        {
            $_SESSION['message'] = 'Feedback send successfully';
            header("Location: http://localhost/music-project/feedback.php");
        }
        else
        {
            echo"feedback not send!";
        }
    }

    // contactus

    if($_POST['type'] == 'contect')
    {
        $name= $_POST['name'];
        $email= $_POST['email'];
        $phone= $_POST['contact'];
        $message = $_POST['message'];
        $sql = "insert into contact_us(name, email, contact, message) values('$name','$email','$phone','$message')";
        if(mysqli_query($conn, $sql))
        {
            $_SESSION['contect'] = 'you contect with us successfully';
            header("Location: http://localhost/music-project/contact.php");
        }
        else
        {
            $contect_error = 'try again';
        }
    }	
    
?> 