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
//MAT 221: wed 5/10 at 8am
//CSC 330: Thurs 5/11 at 12:45
//CSC 212: Tuesday 5/9 at 12:45
//ACC 200: Thurs 5/11 at 3pm
//ECO 101: Thurs 5/11 at 5:15
//226608
?>	