<?php
require '../vendor/autoload.php';
require 'config.php';

//开启错误提示
ini_set("display_errors", "On");
error_reporting(E_ALL | E_STRICT);

// Setup custom
$app = new \Slim\Slim(array(
    'debug' => true
));
// Automatically load router files
$routers = glob('routers/*.router.php');
foreach ($routers as $router) {
    require $router;
}
$app->run();