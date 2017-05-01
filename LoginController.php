<?php

class LoginController
{
	public function login($user,$pass)
	{
		$this->$user = $user;
		$this->$pass = $pass;
		session_start();
		include('LoginDAO.php');
		include('UserDTO.php');
		$ldao = new LoginDAO();
		$udto = new UserDTO(null, $this->$user, $this->$pass,null,null,null,null);
		
		if($ldao->authenticateUser($udto))
		{
			$_SESSION["user"] = $this->$user; // Initializing Session
			$_SESSION["isloggedin"] = True;
			return True;
		}
		return False; 
	}
	function logout()
	{
		session_destroy();
		header("Location: LoginPage.php");
 
	}

	
}

$log = new LoginController();

if($log->login($_POST['username'], $_POST['password']))
{
	header("Location: index.html");
	
}
else{
	header("Location: renderLogin.php");
}
?>