<?php
//index.php

class Renamer {
	
	private $prefix;
	private $dir;
	
	function __construct($prefix) {
		
		$this->prefix = $prefix;
	
	}
	
	public function setDir($dir) {
		if (!empty($dir)) {
			$this->dir = $dir;
		return opendir($this->dir);
		} else { 
			return "directory is empty";
		}
		}
	
	public function resetDir($dir) {
		if (isset($dir)) {
		return closedir($this->dir);
		} else { 
			return "directory is empty";
		}
		}
		
		
}

$object = new Renamer("test");
$object->setDir('upload/');