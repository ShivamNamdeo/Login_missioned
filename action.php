<?php
session_start();

$con = mysqli_connect('localhost','root','','missioned');

$email = $_POST['email'];
$password = $_POST['password'];


    if (empty ($email)){ //if username field is empty echo below statement
        echo "<font color='red'>***You must enter your unique username (email).***</font><br/><br/>";
	}if (empty ($password)){ //if password field is empty echo below statement
        echo "<font color='red'>***You must enter your unique password.***</font><br/><br/>";
    }else{   

	$query=mysqli_query($con,"select * from users where email='$email' and password ='$password'");
	

	if(mysqli_num_rows($query)>0 ){
		 echo "Successfully Login Profile Page";
  		//header('location:profile.php');
	}else{
        //header('location:login.php'); //Fail
        echo 'wrong email or password';
    }

  }
  session_write_close();

?>