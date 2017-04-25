<?php
public class nounDTO {
protected $noun_id;
protected $nresult;
protected $ntag;

public function __construct($noun_id, $nresult, $ntag) 
{
	$this->noun_id = $noun_id;
	$this->nresult = $nresult;
	$this->ntag = $ntag;
}

public function setnounId($noun_id) {
	$this->noun_id = $noun_id;
}

public function getnounId() {
	return $this->noun_id;
}

public function setnresult($nresult) {
	$this->nresult = $nresult;
}

public function getnresult() {
	return $this->nresult;
}

public function setntag($ntag) {
	$this->ntag = $ntag;
}

public function getntag() {
	return $this->ntag;
}
}
?>