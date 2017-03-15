<!DOCTYPE html>
<html lang="en US">
	<head>
		<meta charset="UTF-8"/>
		<meta name="author" content="Justin Reid"/>
		<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
		<title>EveryDay Art</title>
		<link rel="stylesheet" type="text/css" href="EACSS.css"/>
		<script src="EAScript.js"></script>
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
		<div id =""><center>
		Genre selected: <h1><center><?php echo $_REQUEST['Genre'];  ?></h1>
		<h2><center>Your creation will be: 
</br>
<div style="z-index:1;">
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

//empties existing tables
$query = $conn->prepare("TRUNCATE adjgenre;");
$query->execute();
$query = $conn->prepare("TRUNCATE noungenre;");
$query->execute();
$query = $conn->prepare("TRUNCATE verbgenre;");
$query->execute();
//sets needed variables for counting
$genre = $_REQUEST['Genre'];
$a = 0;
$n =0;
$v = 0;
//finds rows with selected tag, adds them to seperate genre database simultaneously while incrementing the id#
$sql = "SELECT aresult from adj where atag = '$genre'";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
	while($row = mysqli_fetch_Assoc($result)) {
		$insert = mysqli_real_Escape_String($conn, $row["aresult"]);
		$query = $conn->prepare("INSERT INTO adjgenre (adj_id, aresult) VALUES ('$a', '$insert')");
		$query->execute();
		$a++;
	}
}
	else {
		echo "0 results ";
}

$sql = "SELECT nresult from noun where ntag = '$genre'";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
	while($row = mysqli_fetch_Assoc($result)) {
		$insert = mysqli_real_Escape_String($conn, $row["nresult"]);
		$query = $conn->prepare("INSERT INTO noungenre (noun_id, nresult) VALUES ('$n', '$insert')");
		$query->execute();
		$n++;
	}
}
	else {
		echo "0 results ";
}

$sql = "SELECT vresult from verb where vtag = '$genre'";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
	while($row = mysqli_fetch_Assoc($result)) {
		$insert = mysqli_real_Escape_String($conn, $row["vresult"]);
		$query = $conn->prepare("INSERT INTO verbgenre (verb_id, vresult) VALUES ('$v', '$insert')");
		$query->execute();
		$v++;
	}
}
	else {
		echo "0 results ";
}


//max size of database
$a=$a-1;
$n=$n-1;
$v=$v-1;

//executes the generator for the selected genre
//fetch adj
$var1 = rand(0,$a);
$query = $conn->prepare("Select aresult from adjgenre where adj_id = '$var1'");
$query->execute();
$aresult = $query->get_result();
$r = $aresult->fetch_array(MYSQLI_ASSOC);

//fetch noun
$var2 = rand(0,$n);
$query = $conn->prepare("Select nresult from noungenre where noun_id = '$var2'");
$query->execute();
$nresult = $query->get_result();
$rr = $nresult->fetch_array(MYSQLI_ASSOC);

//fetch verb
$var3 = rand(0,$v);
$query = $conn->prepare("Select vresult from verbgenre where verb_id ='$var3'");
$query->execute();
$vresult = $query->get_result();
$rrr = $vresult->fetch_array(MYSQLI_ASSOC);


//create result and echo across screen
$result = " " . $r['aresult'] . " " . $rr['nresult'] . " " . $rrr['vresult'];
echo $result;
session_start();
$_SESSION['result'] = "$result";

$conn->close();
?>
</h1>
<a href="includeChallenge.php" target="_blank" title="Select Idea"><br/>
			Create this idea &#10004 </a>
<a onClick='window.location.reload(true)' target="_blank" title="Re-generate Idea"><br/>
			Don't like your outcome? Click to re-roll options.</a>
			</div>
</body>
</html>










