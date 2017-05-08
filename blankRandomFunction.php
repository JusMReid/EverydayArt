<!DOCTYPE html>
<html lang="en-US">
	<head>
		<meta charset="UTF-8">
		<meta name="description" content="Input Result Page">
		<meta name="author" content="Justin Reid">
		<title>EveryDay Art| Result</title>
		<link rel="stylesheet" type="text/css" href="EACSS5.css"/>
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
<h2><center>Your creation will be: 
<br/>
<div style="z-index:1;">
<h1><center>
<?php
include("blankRandomfx.php");
?>
<?php
$blankRandomfx = new BlankRandomfx();
$blankRandomfx->blankRandomFunction();
?>
</h1>
<a href="includeChallenge.php" target="_blank" title="Select Idea"><br/>
			Create this idea &#10004 </a>
<a onClick='window.location.reload(true)' target="_blank" title="Re-generate Idea"><br/>
			Don't like your outcome? Click to re-roll options.</a>
			</div>
</body>
</html>