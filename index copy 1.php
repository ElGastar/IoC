<?php
require_once __DIR__ . '/vendor/autoload.php';
use App\Container\Container;
$container = new Container();
$container->register(App\Services\CustomService::class, App\Services\CustomService::class );
var_dump($container->getServices());
