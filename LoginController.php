

<?php

public class LoginController
{
	function login($user,$pass)
	{
		session_start();
		loginDAO $ldao = new loginDAO();
		loginDTO $udto = new userDTO($user, $pass);
		
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
				echo "Login Successful welcome $user!";
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

LoginController $log = new LoginController();
if($log->login('username', 'password'))
{
	header("Location: Index.html");
}
