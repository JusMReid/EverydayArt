<?php
public class imagesDTO {
protected $id;
protected $img_title;
protected $img_desc;
protected $img_filename;
protected $likes;

public function __construct($id, $img_title, $img_desc, $img_filename, $likes) 
{
	$this->id = $id;
	$this->img_title = $img_title;
	$this->img_desc = $img_desc;
	$this->img_filename = $img_filename;
	$this->likes = $likes;
}

public function setId($id) {
	$this->id = $id;
}

public function getId() {
	return $this->id;
}

public function setimgTitle($img_title) {
	$this->img_title = $img_title;
}

public function getimgTitle() {
	return $this->img_title;
}

public function setimgDesc($img_desc) {
	$this->img_desc = $img_desc;
}

public function getimgDesc() {
	return $this->img_desc;
}

public function setimgFilename($img_filename) {
	$this->img_filename = $img_filename;
}

public function getimgFilename() {
	return $this->img_filename;
}

public function setlikes($likes) {
	$this->likes = $likes;
}

public function getlikes() {
	return $this->likes;
}

}
?>