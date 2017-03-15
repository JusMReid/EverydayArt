<!DOCTYPE html>
<html lang="en-US">
	<head>
		<meta charset="UTF-8">
		<meta name="description" content="User Log-In Page">
		<meta name="author" content="Justin Reid">
		<title>EveryDay Art| Log-In</title>
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
		</br> </br>
		<center>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "everydayart";

//connection
$conn = new mysqli($servername, $username, $password, $dbname);

//check connection
if ($conn->connect_error) {
	die("Connection failed: could not add info to collection" . $conn->connect_error);
} else {
	echo "Your words have been successfully added";
	}

$a = 0;
$n = 0;
$v = 0;

//empties existing tables
$query = $conn->prepare("TRUNCATE adjblank;");
$query->execute();
$query->close();
$query = $conn->prepare("TRUNCATE nounblank;");
$query->execute();
$query->close();
$query = $conn->prepare("TRUNCATE verbblank;");
$query->execute();
$query->close();
//$sql = "INSERT INTO adjblank (adj_id, aresult) VALUES ( '$a', '$_GET["aresult1"]');";
if($_REQUEST['aresult1'] != "") {
$ar1 = mysqli_real_escape_string($conn, $_REQUEST['aresult1']);
$query = $conn->prepare("INSERT INTO adjblank (adj_id, aresult) VALUES ('$a','$ar1')");
$query->execute();
$query->close();
$a++; }
//$sql = "INSERT INTO adjblank (adj_id, aresult) VALUES ( '$a', '$_GET["aresult2"]');";
if($_REQUEST['aresult2'] != "") {
$ar2= mysqli_real_escape_string($conn, $_REQUEST['aresult2']);
$query = $conn->prepare("INSERT INTO adjblank (adj_id, aresult) VALUES ('$a','$ar2')");
$query->execute();
$query->close();
$a++; }
//$sql = "INSERT INTO adjblank (adj_id, aresult) VALUES ( '$a', '$_GET["aresult3"]');";
if($_REQUEST['aresult3'] != "") {
$ar3 = mysqli_real_escape_string($conn, $_REQUEST['aresult3']);
$query = $conn->prepare("INSERT INTO adjblank (adj_id, aresult) VALUES ('$a','$ar3')");
$query->execute();
$query->close();
$a++; }
//$sql = "INSERT INTO adjblank (adj_id, aresult) VALUES ( '$a', '$_GET["aresult4"]');";
if($_REQUEST['aresult4'] != "") {
$ar4 = mysqli_real_escape_string($conn, $_REQUEST['aresult4']);
$query = $conn->prepare("INSERT INTO adjblank (adj_id, aresult) VALUES ('$a','$ar4')");
$query->execute();
$query->close();
$a++; }
//$sql = "INSERT INTO adjblank (adj_id, aresult) VALUES ( '$a', '$_GET["aresult5"]');";
if($_REQUEST['aresult5'] != "") {
$ar5 = mysqli_real_escape_string($conn, $_REQUEST['aresult5']);
$query = $conn->prepare("INSERT INTO adjblank (adj_id, aresult) VALUES ('$a','$ar5')");
$query->execute();
$query->close();
$a++; }

//$sql = "INSERT INTO nounblank (noun_id, nresult) VALUES ( '$n', '$_GET["nresult1"]');";
if($_REQUEST['nresult1'] != "") {
$nr1= mysqli_real_escape_string($conn, $_REQUEST['nresult1']);
$query = $conn->prepare("INSERT INTO nounblank (noun_id, nresult) VALUES ('$n','$nr1')");
$query->execute();
$query->close();
$n++; }
//$sql = "INSERT INTO nounblank (noun_id, nresult) VALUES ( '$n', '$_GET["nresult2"]');";
if($_REQUEST['nresult2'] != "") {
$nr2 = mysqli_real_escape_string($conn, $_REQUEST['nresult2']);
$query = $conn->prepare("INSERT INTO nounblank (noun_id, nresult) VALUES ('$n','$nr2')");
$query->execute();
$n++; }
//$sql = "INSERT INTO nounblank (noun_id, nresult) VALUES ( '$n', '$_GET["nresult3"]');";
if($_REQUEST['nresult3'] != "") {
$nr3 = mysqli_real_escape_string($conn, $_REQUEST['nresult3']);
$query = $conn->prepare("INSERT INTO nounblank (noun_id, nresult) VALUES ('$n','$nr3')");
$query->execute();
$query->close();
$n++; }
//$sql = "INSERT INTO nounblank (noun_id, nresult) VALUES ( '$n', '$_GET["nresult4"]');";
if($_REQUEST['nresult4'] != "") {
$nr4 = mysqli_real_escape_string($conn, $_REQUEST['nresult4']);
$query = $conn->prepare("INSERT INTO nounblank (noun_id, nresult) VALUES ('$n','$nr4')");
$query->execute();
$query->close();
$n++; }
//$sql = "INSERT INTO nounblank (noun_id, nresult) VALUES ( '$n', '$_GET["nresult5"]');";
if($_REQUEST['nresult5'] != "") {
$nr5 = mysqli_real_escape_string($conn, $_REQUEST['nresult5']);
$query = $conn->prepare("INSERT INTO nounblank (noun_id, nresult) VALUES ('$n','$nr5')");
$query->execute();
$query->close();
$n++; }

//$sql = "INSERT INTO verbblank (verb_id, vresult) VALUES ( '$v', '$_GET["vresult1"]');";
if($_REQUEST['vresult1'] != "") {
$vr1 = mysqli_real_escape_string($conn, $_REQUEST['vresult1']);
$query = $conn->prepare("INSERT INTO verbblank (verb_id, vresult) VALUES ('$v','$vr1')");
$query->execute();
$query->close();
$v++; }
//$sql = "INSERT INTO verbblank (verb_id, vresult) VALUES ( '$v', '$_GET["vresult2"]');";
if($_REQUEST['vresult2'] != "") {
$vr2 = mysqli_real_escape_string($conn, $_REQUEST['vresult2']);
$query = $conn->prepare("INSERT INTO verbblank (verb_id, vresult) VALUES ('$v','$vr2')");
$query->execute();
$query->close();
$v++; }
//$sql = "INSERT INTO verbblank (verb_id, vresult) VALUES ( '$v', '$_GET["vresult3"]');";
if($_REQUEST['vresult3'] != "") {
$vr3 = mysqli_real_escape_string($conn, $_REQUEST['vresult3']);
$query = $conn->prepare("INSERT INTO verbblank (verb_id, vresult) VALUES ('$v','$vr3')");
$query->execute();
$query->close();
$v++; }
//$sql = "INSERT INTO verbblank (verb_id, vresult) VALUES ( '$v', '$_GET["vresult4"]');";
if($_REQUEST['vresult4'] != "") {
$vr4 = mysqli_real_escape_string($conn, $_REQUEST['vresult4']);
$query = $conn->prepare("INSERT INTO verbblank (verb_id, vresult) VALUES ('$v','$vr4')");
$query->execute();
$query->close();
$v++; }
//$sql = "INSERT INTO verbblank (verb_id, vresult) VALUES ( '$v', '$_GET["vresult5"]');";
if($_REQUEST['vresult5'] != "") {
$vr5 = mysqli_real_escape_string($conn, $_REQUEST['vresult5']);
$query = $conn->prepare("INSERT INTO verbblank (verb_id, vresult) VALUES ('$v','$vr5')");
$query->execute();
$query->close();
$v++; }

//sets the max size of the values in the database for the next page
$a = $a-1;
$n = $n-1;
$v = $v-1;

session_start();
$_SESSION['acount'] = "$a";
session_write_close();

session_start();
$_SESSION['ncount'] = "$n";
session_write_close();

session_start();
$_SESSION['vcount'] = "$v";
session_write_close();

?>
</center>
</br></br></br></br></br></br>
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
<button id="createButton" onClick="location.href='blankRandomFunction.php'">Create</button>
</br></br></br>
<center><h4>
<div style = "float:left">
<?php
echo "Adjectives:" . "</br>";
$sql = "SELECT aresult FROM adjblank";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
	while($row = mysqli_fetch_Assoc($result)) {
		echo $row["aresult"] . "</br>";
	}
}
	else {
		echo "0 results";
}
?>
</div>

<div style = "float:right">
<?php
echo "Verbs:" . "</br>";
$sql = "SELECT vresult FROM verbblank";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
	while($row = mysqli_fetch_Assoc($result)) {
		echo $row["vresult"] . "</br>";
	}
}
	else {
		echo "0 results";
}

?>
</div>
<center>
<?php
echo "Nouns:" . "</br>";

$sql = "SELECT nresult FROM nounblank";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
	while($row = mysqli_fetch_Assoc($result)) {
		echo $row["nresult"] . "</br>";
	}
}
	else {
		echo "0 results";
}
$conn->close();
?>



</p>
</body>
</html>
