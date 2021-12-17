<?php

class Router
{
    protected $routes=[
        "GET"=>[],
        "POST"=>[]

    ];

    public static function load($filename)
    {
        $router= new Router;
        require $filename;
        return $router;
    }

    public function register($routes)
    {
        $this->routes=$routes;
    }

    public function get($uri, $controller)
    {
        $this->routes['GET'][$uri]=$controller;
    }

    public function post($uri, $controller)
    {
        $this->routes['POST'][$uri]=$controller;
    }

    public function direct($uri, $method)
    {
        if (!array_key_exists($uri, $this->routes[$method])) {
            die("404 page");
        }
        // $exploation=explode("@", $this->routes[$method][$uri]);
        $exploation=$this->routes[$method][$uri];
        return $this->callMethod($exploation[0], $exploation[1]);
        // return $this->routes[$method][$uri];
    }
    public function callMethod($class, $method)
    {
        $class=new $class;
        $class->$method();
    }
}
