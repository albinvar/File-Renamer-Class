<?php
//index.php

class Renamer {
	
	private $prefix;
	private $dir;
	
	function __construct($prefix, $dir) {
		
		$this->prefix = $prefix;
		$this->dir = $dir;
	
	}
	
	public function setDir($this->dir) {
		if (isset($this->dir)) {
		return opendir($this->dir);
		} else { 
			return "directory is empty";
		}
	
}

$object = new Renamer();