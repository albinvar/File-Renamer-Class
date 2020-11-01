<?php
//index.php

require 'library.php';


$object = new Renamer("prefix");
$object->setDir("upload/");
$object->launch();