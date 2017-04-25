<?php
public class verbDTO {
protected $verb_id
protected $vresult;
protected $vtag;

public function __construct($verb_id, $vresult, $vtag) 
{
	$this->verb_id = $verb_id;
	$this->vresult = $vresult;
	$this->vtag = $vtag;
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

public function setvtag($vtag) {
	$this->vtag = $vtag;
}

public function getvtag() {
	return $this->vtag;
}
}
?>