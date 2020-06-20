<?php 
	session_start();

if(isset($_COOKIE['username'])) 
{
    $_SESSION['username']=$_COOKIE['username'];
    $username = $_SESSION['username'];
} 

elseif (isset($_SESSION['username'])) 
{
    $username = $_SESSION['username'];
}
else
{
	header('Location: LoginPage.php');
}

?>
<!DOCTYPE html>

<html>
<div><a href="HomePage.php"><button type="button" class="back_btn">Back to Home</button></a></div>
	<head><center><h1>About Developer</h1></center></head>
        <body background="images/2.png">
		   <hr> 
			
	      <center><img src="img/1012968_330075403861482_9040403401459591976_n.jpg" style="width:250px;height:290px;"/></center>
			
		   <center><p><h3>Name: Nafeeul Alam Walee<br>ID: 20152013010<br> B,Sc in CSE<br>North Western University<br></h3></p></center>

	    </body>
		
		<div class="headline" style= "background:#B5E61D;font-size:20px;font-style:bold;height:30px">
			<marquee>Dear user, Welcome to my gaming site. Thank you for your support. Feel free to leave a comment and have fun.</marquee>
		</div>
		
</html>