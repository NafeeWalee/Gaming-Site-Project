
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
		if(isset($_POST['login']))
		{
		 $username=$_POST['username'];
		 $password=$_POST['password'];
		 if($username =='admin' and $password=='admin')
		{
			header('location:Admin.php');	
		}
		 $query ="select * from dbtable WHERE username= '$username' AND password='$password'";
		 $query_run = mysqli_query($flag,$query);
		 echo $rows;
		if(mysqli_num_rows($query_run)>0)
	{	
		$_SESSION['username']=$username;
		if(isset($_POST['remember']))
		{
			setcookie('username',$username,time()+3600);
			
		}
		header('location:HomePage.php');
	}	
	
	else
	{
		echo '<script type = "text/javascript"> alert("invalid user") </script>';
	}
}
}

	
	
?>
<!doctype html>
<html>
<head>
<title>Login Page</title>
<link rel="stylesheet" href="css/LoginStyle.css">
</head>
<!-- body -->
<body>
<!-- background-wrap -->
<div class="background-wrap">
	<video id="vid" width="1366"   preload="auto" autoplay="true" loop="loop" muted="muted">
		<source src="img/Darkin Kayn.MP4" type="video/MP4">
		video not supported
	</video>
</div>
<!-- main -->
<div class="main">
<!-- title -->
<div class="title">
	<center><h2>Login</h2></center>
</div>
<!-- icon -->
<div class="icon">
	<img src="img/2.png" class="icon">
</div>
<!-- form -->
<div class="form">
		<form action="LoginPage.php" method="post">
		
			<div class="inner_container">
				<label><b>Username :</b></label>
				<input type="text" ID="username" placeholder="Enter Username" name="username" required>
				<label><b>Password : </b></label>
				<input type="password" ID="password" placeholder="Enter Password" name="password" required>
				<button class="login" name="login" type="submit">Login</button>
				<a href="RegisterPage.php">
				<button type="button" class="register">Register</button></a>
				
			</div>
			<div class="remember">
				<input type="checkbox" name="remember"> Remember me </input>
			</div>
		</form>
</div>
</div>

</body>
</html>