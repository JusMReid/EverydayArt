<?php

class LoginDAO {
	
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
	
	public function test(){
		echo "Hello";
	}

	public function authenticateUser(UserDTO $udto)
	{
		$conn = $this->connectToDb();
		$name = $udto->getUserName();
		$pas = $udto->getPassword();

		#$query = "SELECT `userName` , `password` FROM `user`
		#WHERE `userName` =  '$name` AND `password` = `$pas`";
		$query = "SELECT userName , password FROM user WHERE userName = '$name'
		AND password = '$pas'";
		
		$result = $conn->query($query) or die($conn->error.__LINE__);
		if (mysqli_connect_error())
		{
			return False;
		}
		else 
		{
			if (!$result || mysqli_num_rows($result) <= 0)
		{
			return False;
		}
			return True;
		}	
		$conn->close();
	}
	public function insertLoginInfo(UserDTO $udto)
	{
		$conn = connectToDb();

		$query = "INSERT INTO user (userName, password)
		VALUES ($udto->getUserName(), $udto->getPassword())";
		if ($conn->query($query) == TRUE) 
		{
			return True;
		}
		else
		{
			return False;
		}

		$conn->close();
	}
	public function deleteLoginInfo(UserDTO $udto)
	{
		$conn = connectToDb();

		$conn = "DELETE FROM user
		WHERE userId = $this->getUserId($udto)->getId()";
		if ($conn->query($conn) == TRUE) 
		{
			return True;
		}
		else
		{
			return False;
		}

		$conn->close();
	}
	public function getUserId(UserDTO $udto)
	{

		$conn = connectToDB();

		$idDTO =  new UserDTO();
		$conn->query("SELECT userId FROM user
		WHERE userName = $udto->getName();");
		if (!$conn) 
		{
    		   return False;
		}	
    		
		$row = mysqli_fetch_row($conn);
		$idDTO->setID($row[0]);
		$conn->close();
		return $idDTO;



	}		
	public function updateUser(UserDTO $udto)
	{
		$conn = connectToDb();
		
		$userID = $udto->getUserID();
		$status = "Update USER set ";
		$passfield = false;
		if($udto->getPassword()!=NULL)
		{
			$status = "password = " + $udto->getPassword() + " ";
			$passfield = true;
		}
		if($udto->getName() != NULL)
		{
			
		}
	}
	public function ValidateLogin(LoginDTO $ldto)
	{
		$conn = connectToDB();


		$conn->query("SELECT userId FROM user
		WHERE username =  $ldto->getName();");
		

		if($conn->query($conn) == TRUE)
		{
			return True;
		}
		else
		{
			return False;
		}

		
		$conn->close();
	}
	
}

?>