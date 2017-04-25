<?php
class Challengefx {
	var $conn;
	var $challenge1;
	var $challenge2;
	
	public function challenge1() {
$conn=mysqli_connect("localhost","root","","everydayart");
if(mysqli_connect_error()) {
	echo "failed to connect" . mysqli_connect_error();
}

	//fetch challenge 1
$var4 = rand(0,4);
$chal = mysqli_query($conn, "Select challenge from challenge1 where c1_id = '$var4'");
$row = mysqli_fetch_Array($chal);
$challenge1 = $row['challenge'];
echo $challenge1;
}

public function challenge2() {
	$conn=mysqli_connect("localhost","root","","everydayart");
if(mysqli_connect_error()) {
	echo "failed to connect" . mysqli_connect_error();
}

	//fetch challenge 1
$var4 = rand(0,4);
$chal = mysqli_query($conn, "Select challenge from challenge1 where c1_id = '$var4'");
$row = mysqli_fetch_Array($chal);
$challenge1 = $row['challenge'];
echo $challenge1;
echo " and ";
	//fetch challenge 2
$var5 = rand(0,4);
$chal2 = mysqli_query($conn, "Select challenge from challenge2 where c2_id = '$var5'");
$row = mysqli_fetch_Array($chal2);
$challenge2 = $row['challenge'];
echo $challenge2;
}

public function getChallenge1() {
	return $challenge1;
}
public function getChallenge2() {
	return $challenge2;
}

	}

?>