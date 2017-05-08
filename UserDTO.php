<?php 
class UserDTO {
	protected $userId;
	protected $userName;
	protected $password;
    protected $name;
    protected $address;
    protected $phone;
    protected $email;
    protected $rank;
    protected $totalPoints;
    protected $currentPoints;
    protected $friends = array();
	public function __construct($id, $userName, $password, $name, $address, $phone, $email)
    {
        $this->id = $id;
        $this->userName = $userName;
        $this->password = $password;
        $this->name = $name;
        $this->address = $address;
        $this->phone = $phone;
        $this->email = $email;
        $this->rank = NULL;
        $this->totalPoints = NULL;
        $this->currentPoints = NULL;
        
    }
	public function setId($id) 
	{
        $this->id = $id;
    }
    
    public function getId() 
    {
        return $this->id;
    }
    public function setUserName($userName) 
    {
        $this->userName = $userName;
    }
    
    public function getUserName() 
    {
        return $this->userName;
    }
    public function setPassword($password) 
    {
        $this->password = $password;
    }
    
    public function getPassword() 
    {
        return $this->password;
    }
    public function set_name($name) 
    { 
        $this->name = $name;  
    }
    public function get_name() 
    {
        return $this->name;
    }
    public function set_address($address)
    {
        $this->address = $address;
    }
    public function get_address()
    {
        return $this->address;
    }
    public function set_phone($phone)
    {
        $this->phone = $phone;
    }
    public function get_phone()
    {
        return $this->phone;
    }
    public function set_email($email)
    {
        $this->email = $email;
    }
    public function get_email()
    {
        return $this->email;
    }
    public function setRank($rank)
    {
        $this->rank = $rank;
    }
    public function getRank()
    {
        return $this->rank;
    }
    public function setTotal($totalPoints)
    {
        $this->totalPoints = $totalPoints;
    }
    public function getTotal()
    {
        return $this->totalPoints;
    }
    public function setCurrent($currentPoints)
    {
        $this->currentPoints = $currentPoints;
    }
    public function getCurrent()
    {
        return $this->currentPoints;
    }
}
?>