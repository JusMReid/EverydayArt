<?php
public class adjDTO {

protected $adj_id;
protected $aresult;
protected $atag;

public function __construct($adj_id, $aresult, $atag) 
{
	$this->adj_id = $adj_id;
	$this->aresult = $aresult;
	$this->atag = $atag;
}

public function setadjId($adj_id) {
	$this->adj_id = $adj_id;
}

public function getadjId() {
	return $this->adj_id;
}

public function setaresult($aresult) {
	$this->aresult = $aresult;
}

public function getaresult() {
	return $this->aresult;
}

public function setatag($atag) {
	$this->atag = $atag;
}

public function getatag() {
	return $this->atag;
}
}
?>