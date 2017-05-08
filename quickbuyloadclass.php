<?php
class loadquickbuy {
	public function pointtotals($item) {
	$conn=mysqli_connect("localhost","root","","everydayart");
	if(mysqli_connect_error()) {
	echo "failed to connect" . mysqli_connect_error();
	}
	$currentuser = $_SESSION["user"];
	$qry = "SELECT currentPoints FROM user where userName = '$currentuser'";
	$result=mysqli_query($conn, $qry);
	while($row=mysqli_fetch_array($result)) {
		$userpoints = $row["currentPoints"];
	}

	$qry1 = "SELECT pointcost FROM shop where itemname = '$item'";
	$result1=mysqli_query($conn, $qry1);
	while($row=mysqli_fetch_array($result1)) {
		$costpoints = $row["pointcost"];
	}

	$userpoints = $userpoints - $costpoints;
	$update = "UPDATE user SET currentPoints = '$userpoints' WHERE userName = '$currentuser'";
	mysqli_query($conn, $update);

	
	}
}
?>