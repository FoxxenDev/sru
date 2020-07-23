<?php

use App\Router;
use Whoops\Handler\PrettyPageHandler;
use Whoops\Run;

require("../vendor/autoload.php");

define("DEBUG_TIME", microtime(true));

$whoops = new Run;
$whoops->prependHandler(new PrettyPageHandler);
$whoops->register();

$router = new Router(dirname(__DIR__) . DIRECTORY_SEPARATOR . 'views');
$router
    ->get('/', 'index', 'home')
    ->get('/dev', 'dev', 'dev')
    ->get('/logout', 'logout', 'logout')
    ->get('/profil', 'profil', 'profil')
    ->get('/test', 'test', 'test')
    ->run();