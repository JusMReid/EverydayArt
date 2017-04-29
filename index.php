<?php 
class IndexPage{
	public function renderPage(){
		echo<<<EOT
		
<html lang="en US">
	<head>
	<meta charset="UTF-8"/>
		<meta name="author" content="Justin Reid"/>
		<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
		<title>EveryDay Art</title>
		<link rel="stylesheet" type="text/css" href="EACSS6.css"/>
		<script src="EAScript.js"></script>
</head>
<body>
<header>
			<a onClick="location.href='index.html'"><h1>EveryDay Art<sup> &trade;</sup></h1></a>
			<div id="logIn">
				<a href="renderLogIn.php" target="_blank" 
					title="Log-In">Log-In</button>
				</a>|
				<a href="renderRegister.php" target="_blank" 
					title="Join EveryDay Art &trade;">
				Join</a>
				<form action = "searchResult.php" method = "submit">
				<input type="text" name="keyword" placeholder= "Search for...">
				<button id="" onClick="location.href='searchResult.php'">Search</button></form>
			</div>
		</header>
<div class="container">
	<a onClick="location.href='CreationHub.html'"><div class="one col">Create</div></a>
	<a onclick="location.href='PollSelection.php'"><div class="two col even">Polls</div>
	<a onclick="location.href='UserSearch.php'"><div class="three col">Profiles</div>
	<div class="four col even">Store</div>
	</div>
	</body>
	</html>
EOT;
	}
}
$ip = new IndexPage();
$ip->renderPage();
	
