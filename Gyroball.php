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
<html>
<head>
<title>Gyroball</title>
<link rel="stylesheet" href="css/game.css">
</head>
<body class="body">

	<div class="text">
					<p>Currently Playing : Gyroball</p>
	</div>
				
<div class="game">
<object width="800" height="570">

<param name="movie" value="">

<embed src="games/gyroball.swf" width="800" height="570">

</embed>

</object>﻿
</div>
<a href="TaxiGoneWild.php"><button type="button" class="back_btn">Previous Game</button></a>
<a href="HomePage.php"><button type="button" class="back_btn">Back to Home</button></a>
<a href="StreetFighter.php"><button type="button" class="back_btn">Next Game</button></a>

</body>
</html>