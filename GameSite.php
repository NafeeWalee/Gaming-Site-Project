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
<title>Game Site</title>
<link rel="stylesheet" href="css/GameStyle.css">
</head>
<body class="body" background="img/grey-background-pattern.png">
<!-- main -->
<div><a href="HomePage.php"><button type="button" class="back_btn">Back to Home</button></a></div>
<div class="main" >
 <div class="content1">
 <div class="pic">
     <img src="img/Riot_logo_black_background11.jpg" height="280px" width="300px"/>
 </div>
 <div class="para">
	<pre>Leauge Of Legends</pre>
	
	<p><a href="http://na.leagueoflegends.com/en/">Visit the official site</a></p>
 </div>
 </div>
 <div class="content2">
	<div class="pic">
     <img src="img/5353309-gaming-wallpaper-hd.jpg" height="280px" width="300px"/>
 </div>
 <div class="para">
	<pre>CoD: Ghost</pre>
	<p><a href="https://www.callofduty.com/ghosts">Visit the official site</a></p>
 </div>
	
 </div>
 <div class="content3">
	<div class="pic">
     <img src="img/icon.png" height="280px" width="300px"/>
 </div>
 <div class="para">
	<pre>Game Of Thrones</pre>
	<p><a href="http://store.steampowered.com/app/208730/Game_of_Thrones/">Visit the official site</a></p>
 </div>
	
 </div>
 <div class="content4">
	<div class="pic">
     <img src="img/333.png" height="280px" width="300px"/>
 </div>
 <div class="para">
	<pre>Limbo</pre>
	<p><a href="http://www.playdead.com/games/limbo/">Visit the official site</a></p>
 </div>
	
 </div>
 <div class="content5">
	<div class="pic">
     <img src="img/444.png" height="280px" width="300px"/>
 </div>
 <div class="para">
	<pre>Elsword</pre>
	<p><a href="https://elsword.koggames.com/">Visit the official site</a></p>
 </div>
	
 </div>
 <div class="content6">
	<div class="pic">
     <img src="img/sasuke.jpg" height="280px" width="300px"/>
 </div>
 <div class="para">
	<pre>Naruto</pre>
	<p><a href="http://www.naruto-videogames.com/en/">Visit the official site</a></p>

</div>
 </div>
	
 </div>
</body>
</html>