<?php 
    namespace App;
    use MF\Init\Bootstrap;

    class Route extends Bootstrap
    {
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