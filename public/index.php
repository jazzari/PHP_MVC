<?php
require_once __DIR__ . '/../vendor/autoload.php';
use app\core\Application;

$app = new Application();

$app->router->get('/home', function(){
    return 'Hello World';
});
$app->router->get('/contact', function(){
    return 'Contact us';
});

$app->run();
?>