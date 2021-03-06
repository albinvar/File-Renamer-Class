<?php

class Renamer
{
    public $array;
    protected $dir;
    protected $folder;
    protected $time;
    private $prefix;
    private $file;

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
                return 'Invalid Directory';
            }
        } else {
            return 'please specify a Directory';
        }
    }

    public function fileProperties($file)
    {
        $extension = strtolower(pathinfo($file, PATHINFO_EXTENSION));
        $name = strtolower(pathinfo($file, PATHINFO_FILENAME));
        $basename = strtolower(pathinfo($file, PATHINFO_BASENAME));

        return [
            'ext' => $extension,
            'name' => $name,
            'basename' => $basename,
        ];
    }

    public function renameFiles()
    {
        $array = $this->getFiles();

        foreach ($array as $file) {
            $properties = $this->fileProperties($file);
            if (!empty($properties['ext'])) {
                $newName = $this->prefix.'_'.$properties['name'].'_'.$properties['ext'].'.'.$properties['ext'];
                rename($this->folder.$file, $this->folder.$newName);
            }
        }
        return 'Renamed Successfully....!!!';
    }

    public function getFiles()
    {
        $array = scandir($this->folder);
        array_shift($array);
        array_shift($array);

        return $array;
    }

    public function launch()
    {
        $this->renameFiles();
    }
}
