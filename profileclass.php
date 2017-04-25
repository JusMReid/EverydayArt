<?php
class profileclass {
var $userName = "";
var $name = "";
var $phone = "";
var $email = "";
var $rank = "";
var $totalPoints = "";
var $currentPoints = "";

public function getUserdata($i) {
$conn=mysqli_connect("localhost","root","","everydayart");
if(mysqli_connect_error()) {
	echo "failed to connect" . mysqli_connect_error();
	}
	$sql = "Select * from user where userName = '$i'";
	$result = mysqli_query($conn, $sql);
	while($row=mysqli_fetch_array($result)) 
	{
	$this->userName = $row['userName'];
	$this->name = $row['name'];
	$this->phone = $row['phone'];
	$this->email = $row['email'];
	$this->rank = $row['rank'];
	$this->totalPoints = $row['totalPoints'];
	$this->currentPoints = $row['currentPoints'];
	}
	}
	
	
	
	public function getUsername() {
	return $this->userName;
	}
	public function getName() {
	return $this->name;
	}
	public function getPhone() {
	return $this->phone;
	}
	public function getEmail() {
	return $this->email;
	}
	public function getRank() {
	return $this->rank;
	}
	public function getTotalPoints() {
	return $this->totalPoints;
	}
	public function getCurrentPoints() {
	return $this->currentPoints;
	}
	}
	?>