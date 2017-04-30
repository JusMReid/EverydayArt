<?php 

class RegisterPage {

	public function renderPage()
	{
		echo <<<EOT
		<!DOCTYPE html>
	<html>
	<head>
		<meta charset="UTF-8">
		<meta name="description" content="User Log-In Page">
		<meta name="author" content="Justin Reid">
		<title>EveryDay Art| Register</title>
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
		<form action="RegisterController.php" method="post">
			<fieldset>
				<legend>Member Information</legend>
				First Name:
				<input type="text" name="firstName" placeholder=" First"
					autofocus=on title="Enter First Name" required><br/>
				Last Name:     
				<input type="text" name="lastName" placeholder=" Last  "
					title="Enter Last Name" required><br/>
				Username:
				<input type="text" name="userName" placeholder=" Username  "
					title="Enter Username" required><br/>
				Password:
				<input type="password" name="password" placeholder=" password  "
					title="Enter Password" required><br/>
				Address:
				<input type="text" name="address" placeholder=" address "
					title ="Enter Address" required><br/>
				Phone:
				<input type="test" name="phone" placeholder=" phone "
					title="Enter phone number" required><br/>
				Email:
				<input type="email" name="email" placeholder=" JaneDoe@example.com"
					title="Enter Your Email Address" required></br>
			</fieldset>
			<br/><input type="submit" value="Join EveryDay Art &trade;"/>
			
		</form>
	</body>
</html>

EOT;

	}
}

$rp = new RegisterPage();
$rp->renderPage();

?>