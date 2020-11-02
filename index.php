<?php

//index.php


require 'Renamer.php';

$object = new Renamer(null, 'upload/');
$object->launch();
