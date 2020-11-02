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
    $filename = strtolower(pathinfo($file, PATHINFO_FILENAME));
    
    $array = [
    
    "ext" => $extension,
    "name" => $filename
    
    ];
    
    return $array;
    
		}


    public function launch()
   {
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
        
}
