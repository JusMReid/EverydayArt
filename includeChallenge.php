<!DOCTYPE html>
<html lang="en US">
	<head>
		<meta charset="UTF-8"/>
		<meta name="author" content="Justin Reid"/>
		<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
		<title>EveryDay Art</title>
		<link rel="stylesheet" type="text/css" href="EACSS5.css"/>
		<script src="EAScript.js"></script>
	</head>
	<body>
		<header>
			<a onClick="location.href='index.php'"><h1>EveryDay Art<sup> &trade;</sup></h1></a>
			<div id="logIn">
			<?php session_start();
			if( $_SESSION["isloggedin"] === True){
			echo "Hello " .  "<a onclick=location.href='myProfile.php'>" . $_SESSION["user"] . "</a>. ";
			echo "<button id='logout' onClick=location.href='logoutload.php'>Logout</button>";
			echo "<form action = 'searchResult.php' method = 'submit'>
				<input type='text' name='keyword' placeholder= 'Search for...'>
				<button id='' onClick='location.href='searchResult.php''>Search</button></form>
			</div>
		</header>"; 
			}
			else {
			echo "<a href='renderLogin.php' target='_blank' 
					title='Log-In'>Log-In</button>
				</a>|
				<a href='renderRegister.php' target='_blank' 
					title='Join EveryDay Art &trade;'>
				Join</a>
				<form action = 'searchResult.php' method = 'submit'>
				<input type='text' name='keyword' placeholder= 'Search for...'>
				<button id='' onClick='location.href='searchResult.php''>Search</button></form>
			</div>
		</header>"; 
			} ?>
			<div id="selectChallengeMenu">
			<h2> <center>Your creation is:
			<h1><center>
					<?php
		
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
			<?php if( $_SESSION["isloggedin"] === True){
			echo "<button id='createButton' onClick=location.href='createIdea.php'>No Thanks</button>";
			}
			else {
				echo "<button id='createButton' onClick=location.href='renderLogin.php'>No Thanks</button>";
			} ?>
			</div>
			</body>
			</html>