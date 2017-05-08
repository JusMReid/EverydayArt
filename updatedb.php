<!DOCTYPE html>
<html lang="en-US">
	<head>
		<meta charset="UTF-8">
		<meta name="description" content="User Log-In Page">
		<meta name="author" content="Justin Reid">
		<title>EveryDay Art</title>
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
		<form action="addinfotodb.php" method= "post">
		<fieldset>
			<legend>Adding Your Own</legend>
			
			Add Adjectives:
			</br>
			<input type="text" name="aresult1"> <br>
			<input type="text" name="aresult2"> <br>
			<input type="text" name="aresult3"> <br>
			<input type="text" name="aresult4"> <br>
			<input type="text" name="aresult5"> </br>
			Add Nouns:
			</br>
			<input type="text" name="nresult1"> <br>
			<input type="text" name="nresult2"> <br>
			<input type="text" name="nresult3"> <br> 
			<input type="text" name="nresult4"> <br>
			<input type="text" name="nresult5"> </br>
			Add Verbs:
			</br>
			<input type="text" name="vresult1"> <br>
			<input type="text" name="vresult2"> <br>
			<input type="text" name="vresult3"> <br>
			<input type="text" name="vresult4"> <br>
			<input type="text" name="vresult5"> </br>
			<input type="submit" onClick="location.href='addedtodb.html'" value="Add Info"> 
		</fieldset>
		</form>
	</body>
</html>