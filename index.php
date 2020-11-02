<?php

//index.php

require 'Renamer.php';

$object = new Renamer('Your Prefix');
$object->setDir('directory/');
$object->launch();
