<?php
require_once __DIR__ . '/vendor/autoload.php';
$app = new \App\Application();
$app->setRoute("/", function () {
    return "This is the landing page";
 });
$app->setRoute("/products", [\App\Controllers\ProductController::class, "index"]);

 return $app;
