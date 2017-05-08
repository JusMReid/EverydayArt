<?php
class Genrefx {
	var $conn;
	var $adj;
	var $noun;
	var $verb;
	var $genreresult;


public function GenreFunction() {
$conn=mysqli_connect("localhost","root","","everydayart");
if(mysqli_connect_error()) {
	echo "failed to connect" . mysqli_connect_error();
}

//empties existing tables
$sql = "TRUNCATE adjgenre;";
mysqli_query($conn, $sql);
$sql = "TRUNCATE noungenre;";
mysqli_query($conn, $sql);
$sql = "TRUNCATE verbgenre;";
mysqli_query($conn, $sql);

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
		$query = "INSERT INTO adjgenre (adj_id, aresult) VALUES ('$a', '$insert')";
		mysqli_query($conn, $query);
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
		$query = "INSERT INTO noungenre (noun_id, nresult) VALUES ('$n', '$insert')";
		mysqli_query($conn, $query);
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
		$query = "INSERT INTO verbgenre (verb_id, vresult) VALUES ('$v', '$insert')";
		mysqli_query($conn, $query);
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

	//fetch adj
$var1 = rand(0,$a);
$aresult = mysqli_query($conn, "Select aresult from adjgenre where adj_id = '$var1'");
$row = mysqli_fetch_array($aresult);
$adj = $row['aresult'];

	//fetch noun
$var2 = rand(0,$n);
$nresult = mysqli_query($conn, "Select nresult from noungenre where noun_id = '$var2'");
$row = mysqli_fetch_array($nresult);
$noun = $row['nresult'];

	//fetch adj
$var3 = rand(0,$v);
$vresult = mysqli_query($conn, "Select vresult from verbgenre where verb_id = '$var3'");
$row = mysqli_fetch_array($vresult);
$verb = $row['vresult'];

$result = $adj . " " . $noun . " " . $verb;
echo $result;

$_SESSION['result'] = "$result";
}

public function getGenreResult() {
	return $genreresult;
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