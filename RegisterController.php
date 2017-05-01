<?php
class RegisterController{
	public function register($first,$last,$userName,$password,$address,$phone,$email){
		$this->$first = $first;
		$this->$last = $last;
		$this->$userName = $userName;
		$this->$password = $password;
		$this->$address = $address;
		$this->$phone = $phone;
		$this->$email = $email;
		session_start();
		include('UserDTO.php');
		include('RegisterDAO.php');
		$udto = new UserDTO(null, $this->$userName, $this->$password,
			($this->$first. " ". $this->$last), $this->$address,
			$this->$phone, $this->$email);
		$rdao = new RegisterDAO();
		
		if($rdao->authenticateUser($udto)){
			$rdao->addUser($udto);
			return True;
		}
		else{
			return False;
		}
	}
}
$reg = new RegisterController();
if( $reg->register($_POST['firstName'], $_POST['lastName'], $_POST['userName'], $_POST['password'],
	$_POST['address'], $_POST['phone'], $_POST['email']) ){
	header("Location: renderLogin.php");
}
else{
	header("Location: renderRegister.php");
}
?>	