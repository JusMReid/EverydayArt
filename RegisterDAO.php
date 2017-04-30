<?php
class RegisterDAO {
	
	private function connectToDb()
	{
		$connection = mysqli_connect("localhost", "root", "", "everydayart");
		if (mysqli_connect_error())
		{
			die("Connection Failed: " . mysqli_connect_error());
			return False;
		}
		return $connection;
		
	}
	
	public function authenticateUser(UserDTO $udto)
	{
		$conn = $this->connectToDb();
		$name = $udto->getUserName();
		
		$query = "SELECT userName FROM user WHERE userName = '$name'";
		
		$result = $conn->query($query) or die($conn->error.__LINE__);
		
		if (mysqli_connect_error()){
			return False;
		}
		elseif (!$result || mysqli_num_rows($result) > 0)
		{
			return False;
		}
		else 
		{
			return True;
		}	
		$conn->close();
	}
	public function addUser(UserDTO $udto){
		$conn = $this->connectToDb();
		
		$user = $udto->getUserName();
		$pass = $udto->getPassword();
		$name = $udto->get_name();
		$address = $udto->get_address();
		$phone = $udto->get_phone();
		$email = $udto->get_email();
		$rank = $udto->getRank();
		$totalPoints = $udto->getTotal();
		$currentPoints = $udto->getCurrent();
		
		
		$query = "INSERT
INTO
  `user`(
    `userName`,
    `password`,
    `name`,
    `address`,
    `phone`,
    `email`,
    `rank`,
    `totalPoints`,
    `currentPoints`
  )
VALUES(
  $user,
  $pass,
  $name,
  $address,
  $phone,
  $email,
  $rank,
  $totalPoints,
  $currentPoints,
)";
		
		if (mysqli_query($conn,$query)){
			return True;
		}
		else{
			return False;
		}
		$conn->close();
	}
	
}
?>