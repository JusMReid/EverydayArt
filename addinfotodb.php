<!DOCTYPE html>
<html lang="en-US">
	<head>
		<meta charset="UTF-8">
		<meta name="description" content="User Log-In Page">
		<meta name="author" content="Justin Reid">
		<title>EveryDay Art| Log-In</title>
		<link rel="stylesheet" type="text/css" href="EACSS.css"/>
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
		</br> </br>
		<center>
<?php include("AddtoDatabase.php"); ?>
<?php
$add2db = new AddtoDatabase();
$add2db->addtodb();

?>
</center>
</br></br></br></br></br></br>
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; 
<button id="createButton" onClick="location.href='blankRandomFunction.php'">Create</button>
</br></br></br>
<center><h4>
<div style = "float:left">
<?php
$add2db->displayadjdata();
?>
</div>

<div style = "float:right">
<?php
$add2db->displayverbdata();

?>
</div>
<center>
<?php
$add2db->displaynoundata();
?>



</p>
</body>
</html>
