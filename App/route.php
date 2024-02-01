<?php 
    namespace App;
    class Route 
    {
        private $route;

        public function __construct() {
            $this->initRoutes();
            

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
    }