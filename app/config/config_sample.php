<?php

//This is a sample config file to help understand how to configure the site.
//When you have modified the config to your liking, rename it to config.php to use it in your build.

// Database Params
define('DB_SERVER', 'localhost');
define('DB_USER', 'root');
define('DB_PASSWORD','');
define('DB_NAME', 'your_db_name');

// App Root
define('APPROOT', dirname(dirname(__FILE__)));

//Base Root
define('BASEROOT', dirname(dirname(dirname(__FILE__))));

// URL Root
define('URLROOT', 'https://localhost/your_domain');

//Favicon
define('FAVICON', URLROOT.'/public/favicon.png');

//Site Name
define('SITENAME', 'Your_Portfolio');

//Personal Information
define('FULLNAME', 'Your Full Name');

//Contact Details
define('EMAIL', 'Your email');
define('GITHUB', 'Your Github');
define('LINKEDIN', 'Your Linkedin');
?>
