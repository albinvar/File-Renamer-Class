<?php
//index.php

class Renamer {
	
	private $prefix;
	protected $dir;
	
	function __construct($prefix) {
		
		$this->prefix = $prefix;
	
	}
		
	public function setDir($dir) {
		$this->dir = opendir($dir);
		}
		
	public function renamer() {
		
		
		$i = 1;

while (false !== ($file = readdir($this->dir)))
{
  $extension = strtolower(pathinfo($file, PATHINFO_EXTENSION));
  $filename = strtolower(pathinfo($file, PATHINFO_FILENAME));
    if (!empty($extension)) {
        $newName = $this->prefix .'_' . $filename . '_' . $extension . '.' . $extension;
        rename('upload/' . $file, 'upload/' . $newName);
        $i++;
    }
}
closedir($this->dir);
		
		}
		
		
}

$object = new Renamer("test");
$object->setDir("upload/");
$object->renamer();