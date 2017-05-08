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
			<a onClick="location.href='index.php'"><h1>EveryDay Art<sup> &trade;</sup></h1></a>
			<div id="logIn">
			<?php session_start();
			if($_SESSION["isloggedin"] === True){
			echo "Hello " . "<a onclick=location.href='myProfile.php'>" . $_SESSION["user"] . "</a>. ";
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
			<div id="createMenu"><center>
			<form action="genreFunction.php" method= "post">
				Idea Generator
				</br>
				Opitonal Genre Select:
				<input list="Genre" name="Genre" title="Select a specific genre"/>  
				<datalist id="Genre">
				<option value="Fantasy"/>
				<option value="Human"/>
				<option value="Nature"/>
				<option value="Medieval"/>
				</datalist>
				<button id="" onClick="location.href='genreFunction.php'">&#10004 </button>
				<br/></center>
				</form>
				<form action="RandomFunction.php" method= "post">
				&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
				<button id="createButton" onClick="location.href='RandomFunction.php'">Create</button>
				</br></br><center>
				<a href="1or2challenge.php" target="_blank"
					title="Add challenges">
				Add personal challenges & handicaps</a></br>
				<a href="updatedb.php" target="_blank" 
					title="Add your own">
				Or use your own words!</a>
				</center></form>
			</div>	
	</body>
</html>