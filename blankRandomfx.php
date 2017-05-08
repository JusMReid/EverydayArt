<?php
class blankRandomfx {
	var $conn;
	var $adj;
	var $noun;
	var $verb;
	var $result;


public function blankRandomFunction() {
$conn=mysqli_connect("localhost","root","","everydayart");
if(mysqli_connect_error()) {
	echo "failed to connect" . mysqli_connect_error();
}
include("AddtoDatabase.php");

	//fetch adj
$var1 = rand(0,$_SESSION['acount']);
$aresult = mysqli_query($conn, "Select aresult from adjblank where adj_id = '$var1'");
$row = mysqli_fetch_array($aresult);
$adj = $row['aresult'];

	//fetch noun
$var2 = rand(0,$_SESSION['ncount']);
$nresult = mysqli_query($conn, "Select nresult from nounblank where noun_id = '$var2'");
$row = mysqli_fetch_array($nresult);
$noun = $row['nresult'];

	//fetch adj
$var3 = rand(0,$_SESSION['vcount']);
$vresult = mysqli_query($conn, "Select vresult from verbblank where verb_id = '$var3'");
$row = mysqli_fetch_array($vresult);
$verb = $row['vresult'];



//create result and echo across screen
$result = " " . $adj . " " . $noun . " " . $verb;
echo $result;

$_SESSION['result'] = "$result";
}
public function getResult() {
	return $result;
}
public function getAdj() {
	return $adj;
}
public function getNoun() {
	return $noun;
}
public function getVerb() {
	return $verb;
}
}

?>