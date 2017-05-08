<?php 
class points {

public function addpoints($user) {
$conn=mysqli_connect("localhost","root","","everydayart");
if(mysqli_connect_error()) {
	echo "failed to connect" . mysqli_connect_error();
}
$qry1 = "SELECT currentPoints FROM user where userName = '$user'";
$result=mysqli_query($conn, $qry1);
while($row=mysqli_fetch_array($result)) {
	$currentpoints = $row["currentPoints"];
}
$qry2 = "SELECT totalPoints FROM user where userName = '$user'";
$result2=mysqli_query($conn, $qry2);
while($row=mysqli_fetch_array($result2)) {
	$totalpoints = $row["totalPoints"];
}
//adding points to old values
$currentpoints = $currentpoints + 300;
$totalpoints = $totalpoints + 300;
$update1 = "UPDATE user SET currentPoints = '$currentpoints' WHERE userName = '$user'";
$update2 = "UPDATE user SET totalPoints = '$totalpoints' WHERE userName = '$user'";
mysqli_query($conn, $update1);
mysqli_query($conn, $update2);

}

public function showpoints($user) {
$conn=mysqli_connect("localhost","root","","everydayart");
if(mysqli_connect_error()) {
	echo "failed to connect" . mysqli_connect_error();
}
$qry1 = "SELECT currentPoints FROM user where userName = '$user'";
$result=mysqli_query($conn, $qry1);
while($row=mysqli_fetch_array($result)) {
	$currentpoints = $row["currentPoints"];
	return $currentpoints;
}
}
}
?>

