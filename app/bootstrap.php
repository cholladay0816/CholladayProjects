<?php
//Import configs
require_once("config/config.php");
//Set Headers
header('X-Frame-Options: SAMEORIGIN');
header('X-Content-Type-Options: nosniff');
//Autoload
spl_autoload_register(function($class_name)
{
  require_once 'libraries/' . $class_name . '.php';
});

?>
