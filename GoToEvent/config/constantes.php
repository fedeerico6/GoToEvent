<?php 
namespace config;

define('ROOT', str_replace('\\','/',dirname(__DIR__) . "/"));
define('VIEWS', 'views/');
//define('ROOT', str_replace('localhost/tpbecharge/'));

$base=explode($_SERVER['DOCUMENT_ROOT'],ROOT);
define("BASE",$base[1]);

define('HOST',"localhost");
define('USER',"root");
define('PASS',"");
define('DB',"beerghost");





?>

