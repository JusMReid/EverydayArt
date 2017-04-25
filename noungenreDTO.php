<?php
public class noungenreDTO {
protected $noun_id;
protected $nresult;

public function __construct($noun_id, $nresult) 
{
	$this->noun_id = $noun_id;
	$this->nresult = $nresult;
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

}
?>
