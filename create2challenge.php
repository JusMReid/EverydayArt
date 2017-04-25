<!DOCTYPE html>
<html lang="en-US">
	<head>
		<meta charset="UTF-8">
		<meta name="description" content="Result Page">
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
<h1><center>
<?php

session_start();
echo $_SESSION['result'];



?>
</h1>
</br>
<h2> Your challenges will be: </h2>
<h3><center>
<?php include("Challengefx.php"); ?>
<?php
$challenge2 = new Challengefx(); 
$challenge2->challenge2();
?>
</h3>
<h2>
<a href="createIdea.php" target="_blank" title="Start"><br/>
			&#10000 </a></h2>
<a href="challengeguidelines.html" target="_blank" title="Guide"><br/>
			Click to view complete challenges guidelines</a>
</body>
</html>