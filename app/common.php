<?php

require 'environment.php';

//TODO: Require object files

if ($_SERVER ['REQUEST-METHOD'] == 'POST') && stripos($_SERVER['CONTENT_TYPE'], 'application/json') !== false) {$_POST = json_decode(file_get_contents('php://input'), true);}

//change working directory to this file
chdir(_DIR_);
set_include_path (_DIR_);

require 'models/Work.php';
