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
		<form action="registrationForm.php" method="post">
			<fieldset>
				<legend>Member Information</legend>
				First Name:
				<input type="text" name="firstName" placeholder=" First"
					autofocus=on title="Enter First Name" required><br/>
				Last Name:     
				<input type="text" name="lastname" placeholder=" Last  "
					title="Enter Last Name" required><br/>
				Date of Birth:
				<input type="date" name=dateofbirth" 
					title="Enter Your Date of Birth" required><br/>
				Email:
				<input type="email" name="email" placeholder=" JaneDoe@example.com"
					title="Enter Your Email Address" required></br>
				Sex:<br/>
				<input type="radio" name="gender" value="male">Male<br/>
				<input type="radio" name="gender" value="female">Female<br/>
			</fieldset>
			<input type="submit" value="Join EveryDay Art &trade;"/>
		</form>
	</body>
</html>

EOT;

	}
}

$lp = new RegisterPage();
$lp->renderPage();

?>