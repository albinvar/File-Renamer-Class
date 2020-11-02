<?php
//index.php

/*My first project using oop*/

//require Ranamer class
require 'Renamer.php';

//Create new Renamer class.
//pass prefix as 1st arguement.
//pass directory name as second argument.
$object = new Renamer('prefix here', 'upload/');

//get all files in directory in the form of array.
var_dump($object->getFiles());

//start renaming process.
$object->launch();

