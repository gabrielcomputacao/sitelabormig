<?php
$pathDefault = str_replace('\\', '/', __DIR__);
define('rootDir', $pathDefault);

define('environment', 'DEV');
// define('environment', 'PROD');

require './utils/functions.php';
