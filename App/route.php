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

            $routes['registerContact'] = array(
                "Route" => "/registerContact",
                "Controller" => "indexController",
                "Action" => "registerContact",
            );

            $this->setRoutes($routes);
        }
    }