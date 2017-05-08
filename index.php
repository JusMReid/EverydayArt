
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
			<a onClick="location.href='index.php'"><h1>EveryDay Art<sup> &trade;</sup></h1></a>
			<div id="logIn">
			<?php session_start();
			error_reporting(0);
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
 <div class='container'>
	<a onClick=location.href='CreationHub.php'><div class='one col'>Create</div></a>
	<a onclick=location.href='PollSelection.php'><div class='two col even'>Polls</div>
	<a onclick=location.href='UserSearch.php'><div class='three col'>Profiles</div>
	<?php if( $_SESSION["isloggedin"] === True) {
	echo "<a onclick=location.href='shopDisplay.php'><div class='four col even'>Store</div>";
	}
	else {
		echo "<a onclick=location.href='renderLogin.php'><div class='four col even'>Store</div>";
	}
	?>
	</div>
	</body>
	</html>
	