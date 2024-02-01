<?php 
    namespace App;
    class Route 
    {
        private $route;

        public function __construct() 
        {
            $this->initRoutes();
            $this->run($this->requestURI());
        }

        public function getRoutes(): Array
        {
            return $this->route;
        }

        public function setRoutes(Array $route): Array
        {
            return $this->route = $route;
        }

        public function initRoutes(): void
        {
            $route = array(
                "route" => "/",
                "controller" => "indexController",
                "action" => "index",
            );

            $this->setRoutes($route);
        }

        public function run(Object $requestURI)
        {
            foreach ($this->getRoutes() as $path => $route) 
            {
               if($requestURI == $route['route'])
               {
                    $class = "App\\Controller\\" . $route['Controller'];
                    $controller = new $class;
                    $action = $route['action'];
                    $controller->$action();
               }
            }
        }

        public function requestURI(): Mixed
        {
           return parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH); 
        }
    }