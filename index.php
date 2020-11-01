<?php
//index.php

class Renamer {
	
	private $prefix;
	protected $dir;
	
	function __construct($prefix) {
		
		$this->prefix = $prefix;
	
	}
		
		
	public function renamer() {
		$this->dir = opendir("upload/");
		
		$i = 1;

while (false !== ($file = readdir($this->dir)))
{
  $extension = strtolower(pathinfo($file, PATHINFO_EXTENSION));
    if (!empty($extension)) {
        $newName = $this->prefix . $i . '.' . $extension . '<br>';
        echo $newName;
        $i++;
    }
}
closedir($this->dir);
		
		}
		
		
}

$object = new Renamer("test");
$object->renamer();