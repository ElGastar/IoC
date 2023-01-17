<?php


namespace App;


use App\Container\Container;

class Application extends Container
{
    public $routes = [];

    public function setRoute($uri, $action)
    {
        $this->routes[$uri] = $action;

        return $this;
    }

    public function run()
    {
        $currentUri = $_REQUEST["route"];

        if(array_key_exists($currentUri, $this->routes)) {
            $action = $this->routes[$currentUri];

            if(is_array($action)) {
                $controller = $action[0];
                $method = $action[1];

                $this->register($controller, $controller);

                $instance = $this->get($controller);
                echo $instance->$method();
            } else {
                if(is_callable($action)) {
                    $callbackId = $action . "_" . uniqid();
                    $this->register($callbackId, $action);
                    echo $this->get($callbackId);
                }
            }
        }
    }
}