<?php 
    namespace MF\Init;
    abstract class Bootstrap
    {
        protected $route;
        abstract function initRoutes();

        public function __construct() 
        {
            $this->initRoutes();
            $this->run($this->requestURI());
        }

        protected function getRoutes(): Array
        {
            return $this->route;
        }

        protected function setRoutes(Array $route): Array
        {
            return $this->route = $route;
        }

        public function run($requestURI)
        {
            foreach ($this->getRoutes() as $path => $route) 
            {
               if($requestURI == $route['Route'])
               {
                    $class = "App\\Controllers\\" . $route['Controller'];
                    $controller = new $class;
                    $action = $route['Action'];
                    $controller->$action();
               }
            }
        }

        public function requestURI(): String
        {
           return parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH); 
        }
    }