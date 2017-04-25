<?php
public class challenge1DTO {
protected $c1_id;
protected $challenge;

public function __construct($c1_id, $challenge) 
{

	$this->c1_id = $c1_id;
	$this->challenge = $challenge;
}

public function setc1Id($c1_id) {
	$this->c1_id = $c1_id;
}

public function getc1Id() {
	return $this->c1_id;
}

public function setchallenge($challenge) {
	$this->challenge = $challenge;
}

public function getchallenge() {
	return $this->challenge;
}

}
?>