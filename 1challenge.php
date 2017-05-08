<!DOCTYPE html>
<html lang="en-US">
	<head>
		<meta charset="UTF-8">
		<meta name="description" content="Result Page">
		<meta name="author" content="Justin Reid">
		<title>EveryDay Art| Result</title>
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
<h2>
<?php if( $_SESSION["isloggedin"] === True){
		echo "<a href='createIdea.php' target='_blank' title='Start'><br/>
			&#10000 </a></h2>";
}else {
				echo "<a href='renderLogin.php' target='_blank' title='Start'><br/>
			&#10000 </a></h2>";
			} ?>
<a href="1challenge.php" target="_blank" title="Re-generate Idea"><br/>
			Don't like your outcome? Click here to re-roll your options.</a>
</body>
</html>