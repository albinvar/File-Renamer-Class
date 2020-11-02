<?php

//index.php


require 'Renamer.php';

$object = new Renamer(null, 'upload/');
$object->getFiles();
$object->launch();
