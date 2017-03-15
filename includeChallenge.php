<!DOCTYPE html>
<html lang="en US">
	<head>
		<meta charset="UTF-8"/>
		<meta name="author" content="Justin Reid"/>
		<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
		<title>EveryDay Art</title>
		<link rel="stylesheet" type="text/css" href="EACSS.css"/>
		<script src="EAScript.js"></script>
	</head>
	<body>
		<header>
			<h1>EveryDay Art <sup> &trade;</sup></h1>
			<div id="logIn">
				<a href="logIn.html" target="_blank" 
					title="Log-In">Log-In</button>
				</a>|
				<a href="register.html" target="_blank" 
					title="Join EveryDay Art &trade;">
				Join</a>
			</div>
		</header>
			<div id="selectChallengeMenu">
			<h2> <center>Your creation is:
			<h1><center>
					<?php
		session_start();
		echo $_SESSION['result'];
		?>
		</h1></br>
			Would you like to add challenges?
			</h2>
			<center>
			<button id="createButton" onClick="location.href='create1challenge.php'">1 Challenge</button>
			&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
			<button id="createButton" onClick="location.href='create2challenge.php'">2 Challenges</button>
			&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
			<button id="createButton" onClick="location.href='Result.php'">No Thanks</button>
			</div>
			</body>
			</html>