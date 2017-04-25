<?php


public class LoginDAO {

	
	public function authenticateUser(UserDTO $udto)
	{
		$conn = connectToDb();

		$query = "SELECT `userName` , `password` From `users`
		WHERE `userName` = `$udto->getName()` AND `password` = `$udto->getPassword()`";
		$result = $conn->query($query) or die($conn->error.__LINE__);
		if (!$result || mysqli_num_rows($result) <= 0)
		{
			echo "Login Error";
			return False;
		}
		else 
		{
			return True;
		}	
		$conn->close();
	}
	public function insertLoginInfo(UserDTO $udto)
	{
		$conn = connectToDb();

		$query = "INSERT INTO users (userName, password)
		VALUES ($udto->getUserName(), $udto->getPassword())";
		if ($conn->query($query) == TRUE) 
		{
			echo "New Record Created";
		}
		else
		{
			echo "Error: " . $conn . "<br>" . $conn->error;
		}

		$conn->close();
	}
	public function deleteLoginInfo(UserDTO $udto)
	{
		$conn = connectToDb();

		$conn = "DELETE FROM users
		WHERE userId = $this->getUserId($udto)->getId()";
		if ($conn->query($conn) == TRUE) 
		{
			echo "Record Deleted";
		}
		else
		{
			echo "Error: " . $conn . "<br>" . $conn->error;
		}

		$conn->close();
	}
	public function getUserId(UserDTO udto)
	{

		$conn = connectToDB();

		$idDTO =  new UserDTO();
		$conn->query("SELECT userId FROM users
		WHERE userName = $udto->getName();");
		if (!$conn) 
		{
    		echo 'Could not run query: ' . mysqli_error();
    		exit;
		}
		$row = mysqli_fetch_row($conn);
		$idDTO->setID($row[0])
		return $idDTO;
		$conn->close();



	}		
	public function updateUser(UserDTO $udto)
	{
		$conn = connectToDb();
		
		$userID = udto->getUserID();
		$status = "Update USER set ";
		$passfield = false;
		if(udto->getPassword()!=NULL)
		{
			status = "password = " + udto->getPassword() + " ";
			passfield = true;
		}
		if(udto->getName() != NULL)
		{
			
		}
	public function ValidateLogin(LoginDTO ldto)
	{
		$conn = connectToDB();


		$conn->query("SELECT userId FROM users
		WHERE username =  $ldto->getName());");
		

		if($conn->query($conn) == TRUE)
		{
			echo "New Record Created";
		}
		else
		{
			echo "Error: " . $sql . "<br>" . $this->getDb()->error;
		}

		
		$conn->close();



				
	private function connectToDb()
	{
		$db = new mysqli("localhost", "root", "", "login");
		if ($db->connect_error)
		{
			die("Connection Failed: " . $db->connect_error);
		}
		echo "Connection Success";
	}
	
}

?>
