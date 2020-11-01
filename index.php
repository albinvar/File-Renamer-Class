<?php

//index.php

require 'library.php';

$object = new Renamer('Your Prefix');
$object->setDir('directory/');
$object->launch();
