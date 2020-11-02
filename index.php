<?php

//index.php

require 'Renamer.php';

$object = new Renamer('Your Prefix', 'upload/');
$object->launch();
