<?php 
class PollObj {
protected $poll1;
protected $poll2;
protected $poll3;
protected $poll4;
protected $poll5;



public function __construct($poll1,$poll2,$poll3,$poll4,$poll5) 
{
	$this->poll1 = $poll1;
	$this->poll2 = $poll2;
	$this->poll3 = $poll3;
	$this->poll4 = $poll4;
	$this->poll5 = $poll5;
}


public function getpoll1() {
	return $this->poll1;
}
public function getpoll2() {
	return $this->poll2;
}
public function getpoll3() {
	return $this->poll3;
}
public function getpoll4() {
	return $this->poll4;
}
public function getpoll5() {
	return $this->poll5;
}
}

?>

