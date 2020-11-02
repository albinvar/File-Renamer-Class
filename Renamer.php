<?php

class Renamer
{
	private $prefix;
    protected $dir;
    protected $folder;
    protected $time;
	private $file;

    public function __construct($prefix=null, $dir)
    {
        if (empty($prefix)) {
            $this->prefix = 'file';
        } else {
            $this->prefix = $prefix;
        } 

		if (!empty($dir)) {
            if (is_dir($dir)) {
                $this->folder = $dir;
                $this->dir = opendir($dir);
            } else {
                echo 'Invalid Directory';
                exit();
            }
        } else {
            echo 'please specify a Directory';
            exit();
        }
    }

	public function fileProperties($file) {
		
	$extension = strtolower(pathinfo($file, PATHINFO_EXTENSION));
    $name = strtolower(pathinfo($file, PATHINFO_FILENAME));
    $basename = strtolower(pathinfo($file, PATHINFO_BASENAME));
    
    $array = [
    
    "ext" => $extension,
    "name" => $name,
    "basename" => $basename
    ];
    
    return $array;
    
		}

	public function renameFiles() {
		
		while (false !== ($file = readdir($this->dir))) {
         $properties = $this->fileProperties($file);
            if (!empty($properties['ext'])) {
                $newName = $this->prefix.'_'.$properties['name'].'_'.$properties['ext'].'.'.$properties['ext'];
                rename($this->folder.$file, $this->folder.$newName);
            }
        }
        echo "Renamed Successfully....!!!";
        closedir($this->dir);
        
		}

	public function getFiles() {
		
		while (false !== ($file = readdir($this->dir))) {
         $properties = $this->fileProperties($file);
            if (!empty($properties['ext'])) {
                $filename = $properties['basename'];
                echo $filename . "<br>";
            }
        }
		
		}

    public function launch()
   {
    
    $this->renameFiles();
  
   }
        
}
