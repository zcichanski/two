<?php

//spl_autoload_register();
require 'vendor/autoload.php';
error_reporting(0);


define('SAVE_TYPE', 'Cache\Redis');
define('REDIS_PORT', '6379');
define('REDIS_IP', '127.0.0.1');