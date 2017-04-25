<?php
public class adjgenreDTO {
protected $adj_id;
protected $aresult;

public function __construct($adj_id, $aresult) 
{

	$this->adj_id = $adj_id;
	$this->aresult = $aresult;
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

}
?>