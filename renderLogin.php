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
				<link rel="stylesheet" type="text/css" href="EACSS5.css"/>
			</head>
			<body id="logInBody">
				<form action="LoginController.php" method=post>
				<fieldset>
					<legend>Log-In</legend>
					Username:
					<input type="text" name="username" placeholder="Username"
						title="Enter your Username" autofocus=on required><br/>
					Password:
					<input type="password" name="password" placeholder="Password"
						title="Enter your password" required><br/>
					<input type="submit" value="Log In">
					<a href="renderRegister.php" target="_blank" title="Create Account"><br/>
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