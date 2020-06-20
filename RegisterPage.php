<?php
session_start();
include "db/connect.php";
if(isset($_COOKIE['username']))	
	{
		$_SESSION['username']=$_COOKIE['username'];	
		header('location:HomePage.php');
	}
	else if(isset($_SESSION['username']))
	{
		$username = $_SESSION['username'];	
		header('location:HomePage.php');
	}
	else
	{
if(isset($_POST['register']))
{
	include "db/connect.php";
	 $username = $_POST['username'];
	 $password = $_POST['password'];
	 $cpassword = $_POST['cpassword'];
	
	$query = "select * from dbtable WHERE username = '$username'";
	$query_run = mysqli_query($flag,$query);
	if(mysqli_num_rows($query_run)>0)
	{
		echo '<script type = "text/javascript"> alert("Username exists!") </script>';
	}
	else
	{
		$query = "insert into dbtable values ('$username','$password','$cpassword')";
		$query_run = mysqli_query($flag,$query);
		
		if($query_run)
		{
			echo '<script type = "text/javascript"> alert("Registered!") </script>';
			header('location:LoginPage.php');
		}
		else
		{
			echo '<script type = "text/javascript"> alert("error!") </script>';
		}
	}
}

}

?>
<html>
<head>
<title>Registration Page</title>
<link rel="stylesheet" href="css/RegisterStyle.css">
</head>
<!-- body -->
<body >
<!-- background-wrap -->
<div class="background-wrap">
	<video id="vid" width="1366" preload="auto" autoplay="true" loop="loop" muted="muted">
		<source src="img/Shadow Kayn.MP4" type="video/MP4">
		video not supported
	</video>
</div>
<!-- main -->
<div class="main">
<!-- title -->
<div class="title">
	<center><h2>Registration</h2></center>
</div>
<!-- icon -->
<div class="icon">
	<img src="img/1.png" class="icon">
</div>
<!-- form -->
<div class="form">
		<form action="RegisterPage.php" method="post">
		
			<div class="inner_container">
				<label><b>Username</b></label>
				<input type="text" ID="username" placeholder="Enter Username" name="username" required>
				<label><b>Password</b></label>
				<input type="password" ID="password" placeholder="Enter Password" name="password" required>
				<label><b>Email</b></label>
				<input type="password" ID="cpassword" placeholder="Confirm Password" name="cpassword" required>
				<button name="register" class="sign_up_btn" type="submit">Sign Up</button>
				
				<a href="LoginPage.php"><button type="button" class="back_btn">Previous Page</button></a>
				
			</div>
			
		</form>
</div>
</div>
</body>
</html>