<?php

require 'environment.php';

//TODO: Require object files

if ($_SERVER ['REQUEST-METHOD'] == 'POST') && stripos($_SERVER['CONTENT_TYPE'], 'application/json') !== false) {$_POST = json_decode(file_get_contents('php://input'), true);}

require 'models/Work.php';
