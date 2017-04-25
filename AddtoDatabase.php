<?php
class AddtoDatabase {


public function addtodb() {
	$conn=mysqli_connect("localhost","root","","everydayart");
if(mysqli_connect_error()) {
	echo "failed to connect" . mysqli_connect_error();
}

$a = 0;
$n = 0;
$v = 0;

//empties existing tables
$sql = "TRUNCATE adjblank;";
mysqli_query($conn, $sql);
$sql = "TRUNCATE nounblank;";
mysqli_query($conn, $sql);
$sql = "TRUNCATE verbblank;";
mysqli_query($conn, $sql);

if($_REQUEST['aresult1'] != "") {
$ar1 = mysqli_real_escape_string($conn, $_REQUEST['aresult1']);
$query = "INSERT INTO adjblank (adj_id, aresult) VALUES ('$a','$ar1')";
mysqli_query($conn, $query);
$a++; }

if($_REQUEST['aresult2'] != "") {
$ar2= mysqli_real_escape_string($conn, $_REQUEST['aresult2']);
$query = "INSERT INTO adjblank (adj_id, aresult) VALUES ('$a','$ar2')";
mysqli_query($conn, $query);
$a++; }
//$sql = "INSERT INTO adjblank (adj_id, aresult) VALUES ( '$a', '$_GET["aresult3"]');";
if($_REQUEST['aresult3'] != "") {
$ar3 = mysqli_real_escape_string($conn, $_REQUEST['aresult3']);
$query = "INSERT INTO adjblank (adj_id, aresult) VALUES ('$a','$ar3')";
mysqli_query($conn, $query);
$a++; }
//$sql = "INSERT INTO adjblank (adj_id, aresult) VALUES ( '$a', '$_GET["aresult4"]');";
if($_REQUEST['aresult4'] != "") {
$ar4 = mysqli_real_escape_string($conn, $_REQUEST['aresult4']);
$query = "INSERT INTO adjblank (adj_id, aresult) VALUES ('$a','$ar4')";
mysqli_query($conn, $query);
$a++; }
//$sql = "INSERT INTO adjblank (adj_id, aresult) VALUES ( '$a', '$_GET["aresult5"]');";
if($_REQUEST['aresult5'] != "") {
$ar5 = mysqli_real_escape_string($conn, $_REQUEST['aresult5']);
$query = "INSERT INTO adjblank (adj_id, aresult) VALUES ('$a','$ar5')";
mysqli_query($conn, $query);
$a++; }

//$sql = "INSERT INTO nounblank (noun_id, nresult) VALUES ( '$n', '$_GET["nresult1"]');";
if($_REQUEST['nresult1'] != "") {
$nr1= mysqli_real_escape_string($conn, $_REQUEST['nresult1']);
$query = "INSERT INTO nounblank (noun_id, nresult) VALUES ('$n','$nr1')";
mysqli_query($conn, $query);
$n++; }
//$sql = "INSERT INTO nounblank (noun_id, nresult) VALUES ( '$n', '$_GET["nresult2"]');";
if($_REQUEST['nresult2'] != "") {
$nr2 = mysqli_real_escape_string($conn, $_REQUEST['nresult2']);
$query = "INSERT INTO nounblank (noun_id, nresult) VALUES ('$n','$nr2')";
mysqli_query($conn, $query);
$n++; }
//$sql = "INSERT INTO nounblank (noun_id, nresult) VALUES ( '$n', '$_GET["nresult3"]');";
if($_REQUEST['nresult3'] != "") {
$nr3 = mysqli_real_escape_string($conn, $_REQUEST['nresult3']);
$query = "INSERT INTO nounblank (noun_id, nresult) VALUES ('$n','$nr3')";
mysqli_query($conn, $query);
$n++; }
//$sql = "INSERT INTO nounblank (noun_id, nresult) VALUES ( '$n', '$_GET["nresult4"]');";
if($_REQUEST['nresult4'] != "") {
$nr4 = mysqli_real_escape_string($conn, $_REQUEST['nresult4']);
$query = "INSERT INTO nounblank (noun_id, nresult) VALUES ('$n','$nr4')";
mysqli_query($conn, $query);
$n++; }
//$sql = "INSERT INTO nounblank (noun_id, nresult) VALUES ( '$n', '$_GET["nresult5"]');";
if($_REQUEST['nresult5'] != "") {
$nr5 = mysqli_real_escape_string($conn, $_REQUEST['nresult5']);
$query = "INSERT INTO nounblank (noun_id, nresult) VALUES ('$n','$nr5')";
mysqli_query($conn, $query);
$n++; }

//$sql = "INSERT INTO verbblank (verb_id, vresult) VALUES ( '$v', '$_GET["vresult1"]');";
if($_REQUEST['vresult1'] != "") {
$vr1 = mysqli_real_escape_string($conn, $_REQUEST['vresult1']);
$query = "INSERT INTO verbblank (verb_id, vresult) VALUES ('$v','$vr1')";
mysqli_query($conn, $query);
$v++; }
//$sql = "INSERT INTO verbblank (verb_id, vresult) VALUES ( '$v', '$_GET["vresult2"]');";
if($_REQUEST['vresult2'] != "") {
$vr2 = mysqli_real_escape_string($conn, $_REQUEST['vresult2']);
$query = "INSERT INTO verbblank (verb_id, vresult) VALUES ('$v','$vr2')";
mysqli_query($conn, $query);
$v++; }
//$sql = "INSERT INTO verbblank (verb_id, vresult) VALUES ( '$v', '$_GET["vresult3"]');";
if($_REQUEST['vresult3'] != "") {
$vr3 = mysqli_real_escape_string($conn, $_REQUEST['vresult3']);
$query = "INSERT INTO verbblank (verb_id, vresult) VALUES ('$v','$vr3')";
mysqli_query($conn, $query);
$v++; }
//$sql = "INSERT INTO verbblank (verb_id, vresult) VALUES ( '$v', '$_GET["vresult4"]');";
if($_REQUEST['vresult4'] != "") {
$vr4 = mysqli_real_escape_string($conn, $_REQUEST['vresult4']);
$query = "INSERT INTO verbblank (verb_id, vresult) VALUES ('$v','$vr4')";
mysqli_query($conn, $query);
$v++; }
//$sql = "INSERT INTO verbblank (verb_id, vresult) VALUES ( '$v', '$_GET["vresult5"]');";
if($_REQUEST['vresult5'] != "") {
$vr5 = mysqli_real_escape_string($conn, $_REQUEST['vresult5']);
$query = "INSERT INTO verbblank (verb_id, vresult) VALUES ('$v','$vr5')";
mysqli_query($conn, $query);
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
}


//////////////////////////////////////////////////////////////////////////////////////////
public function displayadjdata() {
	
	$conn=mysqli_connect("localhost","root","","everydayart");
if(mysqli_connect_error()) {
	echo "failed to connect" . mysqli_connect_error();
}

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
}


////////////////////////////////////////////////////////////////////////////////////////////
public function displayverbdata() {
	
	$conn=mysqli_connect("localhost","root","","everydayart");
if(mysqli_connect_error()) {
	echo "failed to connect" . mysqli_connect_error();
}
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
}


////////////////////////////////////////////////////////////////////////////////////////////
public function displaynoundata() {
	
	$conn=mysqli_connect("localhost","root","","everydayart");
if(mysqli_connect_error()) {
	echo "failed to connect" . mysqli_connect_error();
}

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
}
}
