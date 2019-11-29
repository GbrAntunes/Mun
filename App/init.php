<?php

namespace App;

class Init{

    private $routes;

    public function __construct(){
        $this->initRoutes();
    }

    public function initRoutes(){
        $arr['home'] = ['route' => '/', 'controller' => 'index', 'action' => 'index'];
        $arr['empresa'] = ['route' => '/empresa', 'controller' => 'index', 'action' => 'empresa'];
        $this->setRoutes($arr);
    }

    public function setRoutes(array $routes){
        $this->routes = $routes;
    }

    public function getUrl(){
        return parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
    }

}