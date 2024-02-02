<?php 
    namespace App;
    use MF\Init\Bootstrap;

    class Route extends Bootstrap
    {
        public function initRoutes(): void
        {
            $routes['index'] = array(
                "Route" => "/",
                "Controller" => "indexController",
                "Action" => "showIndex",
            );

            $this->setRoutes($routes);
        }
    }