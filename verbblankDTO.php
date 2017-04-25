<?php
public class verbblankDTO {
protected $verb_id;
protected $vresult;

public function __construct($verb_id, $vresult) 
{
	$this->verb_id = $verb_id;
	$this->vresult = $vresult;
}

public function setverbId($verb_id) {
	$this->verb_id = $verb_id;
}

public function getverbId() {
	return $this->verb_id;
}

public function setvresult($vresult) {
	$this->vresult = $vresult;
}

public function getvresult() {
	return $this->vresult;
}

}
?>