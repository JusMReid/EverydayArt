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
		
		$query = "INSERT INTO user".
		//('userId','userName','password','name','address','phone','email','rank','totalPoints','CurrentPoints')
		"VALUES (NULL,$udto->getUserName(), $udto->getPassword(), $udto->getName(),".
		"$udto->get_address(), $udto->get_phone(), $udto->get_email(), $udto->get_rank(),".
		"$udto->getTotal(), $udto->getCurrent)";
		
		if ($conn->query($query) == TRUE){
			return True;
		}
		else{
			return False;
		}
		$conn->close();
	}
	
}
?>