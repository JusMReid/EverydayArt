<?php
class Random {

public function Random() {
$conn=mysqli_connect("localhost","root","","everydayart");
if(mysqli_connect_error()) {
	echo "failed to connect" . mysqli_connect_error();
}
	//fetch adj
$var1 = rand(0,9);
$aresult = mysqli_query($conn, "Select aresult from adj where adj_id = '$var1'");
$row = mysqli_fetch_array($aresult);
$adj = $row['aresult'];

	//fetch noun
$var2 = rand(0,9);
$nresult = mysqli_query($conn, "Select nresult from noun where noun_id = '$var2'");
$row = mysqli_fetch_array($nresult);
$noun = $row['nresult'];

	//fetch adj
$var3 = rand(0,9);
$vresult = mysqli_query($conn, "Select vresult from verb where verb_id = '$var3'");
$row = mysqli_fetch_array($vresult);
$verb = $row['vresult'];

$result = $adj . " " . $noun . " " . $verb;
return $result;
}
}
?>