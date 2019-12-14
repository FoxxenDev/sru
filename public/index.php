<?php

use App\Router;

require("../vendor/autoload.php");

define("DEBUG_TIME", microtime(true));

$whoops = new \Whoops\Run;
$whoops->prependHandler(new \Whoops\Handler\PrettyPageHandler);
$whoops->register();

$router = new AltoRouter();

$router = new Router(dirname(__DIR__) . DIRECTORY_SEPARATOR . 'views');
$router
    ->get('/', 'index', 'home')
    ->match('/blog/[*:slug]-[i:id]', 'blog', 'blog')
    ->get('/blog/category', 'category', 'category')
    ->run();