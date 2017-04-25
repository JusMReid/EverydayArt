

<?php

public class LoginController
{
	function login($user,$pass)
	{
		session_start();
		$ldao = new loginDAO();
		$udto = new userDTO($user, $pass);
		
		if(empty($_POST["username"]) || empty($_POST["password"]))
		{
			echo "Enter "
			return False;
		}
		else
		{
			if($ldao->authenticateUser($udto))
			{
				$_SESSION["user"] = $user; // Initializing Session
				$_SESSION["isloggedin"] = True;
				return True;
			}	
		}	
	}
	function logout()
	{
		session_destroy();
		header("Location: LoginPage.php");
 
	}

	
}

$log = new LoginController();
if($log->login('username', 'password'))
{
	header("Location: Index.html");
}
