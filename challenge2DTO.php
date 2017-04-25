<?php
public class challenge2DTO {
protected $c2_id;
protected $challenge;

public function __construct($c2_id, $challenge) 
{

	$this->c2_id = $c2_id;
	$this->challenge = $challenge;
}

public function setc2Id($c2_id) {
	$this->c2_id = $c2_id;
}

public function getc2Id() {
	return $this->c2_id;
}

public function setchallenge($challenge) {
	$this->challenge = $challenge;
}

public function getchallenge() {
	return $this->challenge;
}

}
?>