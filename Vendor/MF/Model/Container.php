<?php 
    namespace MF\Model;
    use App\Connection;

    class Container
    {
        public static function getModel(String $model): Object
        {
            $class = "App\\Models\\" . ucfirst($model);
            $conn = Connection::Connect();
            return new $class($conn);
        }
    }
    