<?php

//Public dir
define('DIR_PUBLIC', realpath(__DIR__ . '/../../../'));

//Set application
define('APPLICATION', 'catalog');

// Startup
require_once(DIR_PUBLIC . '/system/startup.php');

start(APPLICATION);