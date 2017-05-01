<?php
class RegisterDAO {
	
	private function connectToDB(){
		$conn = new mysqli("localhost", "root", "", "everydayart");
		$conn->set_charset('utf8');
		
		if($conn->connect_errno){
			die("ERROR " . $conn->connect_error);
		}
		return $conn;
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
		
		$query = "INSERT INTO user (userName, password, name, address, phone, email) 
		VALUES ('$user', '$pass', '$name', '$address', '$phone', '$email')";
		
		if(!$conn->query($query) === true){
			echo "Fail" . $conn->errno . "==" . $conn->error;
		}
		else{
			echo "ERROR2";
		}
		
		$conn->close();
	}
	
}
?>