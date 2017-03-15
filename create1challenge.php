<!DOCTYPE html>
<html lang="en-US">
	<head>
		<meta charset="UTF-8">
		<meta name="description" content="Result Page">
		<meta name="author" content="Justin Reid">
		<title>EveryDay Art| Result</title>
		<link rel="stylesheet" type="text/css" href="EACSS.css"/>
	</head>
<body>
<header>
			<h1>EveryDay Art <sup> &trade;</sup></h1>
			<div id="logIn">
				<a href="logIn.html" target="_blank" 
					title="Log-In">Log-In</button>
				</a>|
				<a href="register.html" target="_blank" 
					title="Join EveryDay Art &trade;">
				Join</a>
			</div>
		</header>
<h2><center>Your creation will be: 
<br/>
<h1><center>
<?php

session_start();
echo $_SESSION['result'];

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "everydayart";

//connection
$conn = new mysqli($servername, $username, $password, $dbname);

//check connection
if ($conn->connect_error) {
	die("Connection failed: " . $conn->connect_error);
}


//fetch challenge
$var4 = rand(0,4);
$query = $conn->prepare("Select challenge from challenge1 where c1_id = '$var4'");
$query->execute();
$query->bind_result($challenge);
$query->fetch();
$query->close();

?>
</h1>
</br>
<h2> Your challenge will be: </h2>
<h3><center>
<?php

echo $challenge;

$conn->close();
?>
</h3>
<h2>
<a href="createIdea.php" target="_blank" title="Start"><br/>
			&#10000 </a></h2>
<a href="challengeguidelines.html" target="_blank" title="Guide"><br/>
			Click to view complete challenges guidelines</a>
</body>
</html>