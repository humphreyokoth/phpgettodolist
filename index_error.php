<?php 

ini_set('display_errors',1);
ini_set('log_errors',1);
ini_set('error_log',dirname(__FILE__).'./php_error.log');
error_reporting(E_ALL);
error_log($_POST . "\n", 3, "./php_error.log");


?>