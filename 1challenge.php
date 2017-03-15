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


//fetch adj
$var1 = rand(0,9);
$query = $conn->prepare("Select aresult from adj where adj_id = '$var1'");
$query->execute();
$aresult = $query->get_result();
$r = $aresult->fetch_array(MYSQLI_ASSOC);

//fetch noun
$var2 = rand(0,9);
$query = $conn->prepare("Select nresult from noun where noun_id = '$var2'");
$query->execute();
$nresult = $query->get_result();
$rr = $nresult->fetch_array(MYSQLI_ASSOC);

//fetch verb
$var3 = rand(0,9);
$query = $conn->prepare("Select vresult from verb where verb_id ='$var3'");
$query->execute();
$vresult = $query->get_result();
$rrr = $vresult->fetch_array(MYSQLI_ASSOC);

//fetch challenge
$var4 = rand(0,4);
$query = $conn->prepare("Select challenge from challenge1 where c1_id = '$var4'");
$query->execute();
$query->bind_result($challenge);
$query->fetch();
$query->close();

//create challenge and echo across screen
// $challenge = isset($rrrr['$cresult']) ? $rrrr['$cresult'] : $;

//create result and echo across screen
$result = " " . $r['aresult'] . " " . $rr['nresult'] . " " . $rrr['vresult'];
echo $result;


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

<a href="RandomFunction.php" target="_blank" title="Select Idea"><br/>
			Create this idea &#10004 </a>
<a href="1challenge.php" target="_blank" title="Re-generate Idea"><br/>
			Don't like your outcome? Click here to re-roll your options.</a>
</body>
</html>