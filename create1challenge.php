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
<h1><center>
<?php


echo $_SESSION['result'];


?>
</h1>
</br>
<h2> Your challenge will be: </h2>
<h3><center>
<?php
include("Challengefx.php");
?>
<?php
$challenge = new Challengefx();
$challenge->challenge1();
?>
</h3>
<h2>
<?php if( $_SESSION["isloggedin"] === True){
		echo "<a href='createIdea.php' target='_blank' title='Start'><br/>
			&#10000 </a></h2>";
}else {
				echo "<a href='renderLogin.php' target='_blank' title='Start'><br/>
			&#10000 </a></h2>";
			} ?>
<a href="challengeguidelines.html" target="_blank" title="Guide"><br/>
			Click to view complete challenges guidelines</a>
</body>
</html>