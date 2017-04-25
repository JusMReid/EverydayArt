<?php 

class LoginPage {

	public function renderPage()
	{
		echo <<<EOT
		<!DOCTYPE html>
		<html lang="en-US">
			<head>
				<meta charset="UTF-8">
				<meta name="description" content="User Log-In Page">
				<meta name="author" content="Justin Reid">
				<title>EveryDay Art| Log-In</title>
				<link rel="stylesheet" type="text/css" href="EACSS.css"/>
			</head>

			<body id="logInBody">
				<form action="logIn.php">
				<fieldset>
					<legend>Log-In</legend>
					Username:
					<input type="text" name="username" placeholder="Username" autofocus=on><br/>
					Password:
					<input type="password" name="password" placeholder="Password"><br/>
					<input type="submit" value="Log In">
					<a href="register.html" target="_blank" title="Create Account"><br/>
					Not a member? Click here to join</a>
				</fieldset>
				</form>
			</body>
		</html>

EOT;

	}
}

$lp = new LoginPage();
$lp->renderPage();

?>