<?php

set_time_limit(10);

class Renamer
{
    protected $dir;
    protected $folder;

    private $prefix;

    public function __construct($prefix = null, $dir)
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

    public function launch()
    {
        while (false !== ($file = readdir($this->dir))) {
            $extension = strtolower(pathinfo($file, PATHINFO_EXTENSION));
            $filename = strtolower(pathinfo($file, PATHINFO_FILENAME));
            if (!empty($extension)) {
                $newName = $this->prefix.'_'.$filename.'_'.$extension.'.'.$extension;
                rename($this->folder.$file, $this->folder.$newName);
            }
        }
        echo 'Renamed Successfully....!!!';
        closedir($this->dir);
    }
}
