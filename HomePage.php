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
<title>Home Page</title>
<link rel="stylesheet" href="css/HomeStyle.css">
</head>
<!-- Body -->
<body class="body" background="img/5353309-gaming-wallpaper-hd.png">
<!-- Head -->
	<div class="header">
<!-- Icon -->
	<div class="icon">
		<img src="img/Riot_logo_black_background11.jpg" height="40px" width="40px"/>
	</div>
<!-- Title -->
	<div class="title">
		<pre> RIOT GAMES </pre>
	</div>
<!-- form -->
		<form class="name" action="HomePage.php" method="post">
						<?php echo $username;?> 
						<button name="logout" class="logout" type="submit">Logout</button>
				
		</form>
		<?php
			if(isset($_POST['logout']))
			{	
				session_destroy(); 
		    setcookie('username','',time()-1);
			
				
				header('location:LoginPage.php');
			}
		?>		
	
</div>
<!-- Preload -->
		<div class="preload">
			<video id="vid" width="1366" preload="auto" autoplay="true" loop="loop" muted="muted">
				<source src="img/test.mp4" type="video/MP4">
				video not supported
			</video>
		</div>
<!-- Head -->
	<div class="header">
<!-- Menu-->
		<div class="menu">
		 <ul>
			<li><a href="#">Play Games</a>
			<ul>
				<li><a href="StreetFighter.php">StreetFighter</a></li>
				<li><a href="metal_slug_rampage.php">MetalSlug</a></li>
				<li><a href="Gyroball.php">Gyroball</a></li>
				<li><a href="TaxiGoneWild.php">TaxiGoneWild</a></li>
			</ul>
			</li>
			<li><a href="GameSite.php">Game Sites</a></li>
			<li><a href="#">Media</a>
			<ul>
					<li><a href="League.php">League Of Legends</a></li>
					<li><a href="Warcarft.php">Warcraft</a></li>
					<li><a href="Elsword.php">Elsword</a></li>				
			</ul>
			</li>
			<li><a href="About.php">About</a></li>
			
		 </ul>
		</div>

</div>
<!-- Content -->
<div class="content">
<div class="headline">
<p>Welcome to RiotGames</p>
</div>
<div class="detail" >
<p> 
RiotGames is a browser based computer game that is played over a web browser with or with using the Internet. Browser games can be run using standard web technologies or browser plug-ins. The creation of such games usually involves use of standard web technologies as a frontend and other technologies to provide a backend. Browser games include all video game genres and can be single-player or multiplayer. Browser games are also portable and can be played on multiple different devices, web browsers, and operating systems.

Browser games come in many genres and themes that appeal to both regular and casual players.
</P>
<br>
<p>Browser games are often free-to-play and do not require any client software to be installed apart from a web browser or browser plug-in. In some cases a game may be free, but charge for extra in-game features. Multiplayer browser games have an additional focus on social interaction, either between several players or on a massive scale. Due to the accessibility of browser games, they are often played in more frequent, shorter sessions compared to traditional computer games.

Since browser games run isolated from hardware in a web browser, they can run on many different operating systems without having to be ported to each platform.
</p>
</div>
</div>
</div>
<!-- footer -->
<div class="footer">
  <marquee> © 2017 Riot Games, Inc. All rights reserved. Riot Games, League of Legends and PvP.net are trademarks, services marks, or registered trademarks of Riot Games, Inc.</marquee>
</div>
</body>
</html>