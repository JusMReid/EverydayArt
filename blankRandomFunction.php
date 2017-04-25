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
		<a onClick="location.href='index.html'"><h1>EveryDay Art<sup> &trade;</sup></h1></a>
			<div id="logIn">
				<a href="logIn.html" target="_blank" 
					title="Log-In">Log-In</button>
				</a>|
				<a href="register.html" target="_blank" 
					title="Join EveryDay Art &trade;">
				Join</a>
				<form action = "searchResult.php" method = "submit">
				<input type="text" name="keyword" placeholder= "Search for...">
				<button id="" onClick="location.href='searchResult.php'">Search</button></form>
			</div>
		</header>
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