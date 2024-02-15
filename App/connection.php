<?php 
    namespace App;
    
    class Connection
    {
        public function __construct() {
            $this->Connect();
        }
        
        public static function Connect(): \PDO
        {
            try {
                $conn = new \PDO('mysql:host=localhost;dbname=agenda_contatos', 'root', '');
                return $conn;
            } catch (\PDOException $e) {
                echo "Error: " . $e->getMessage();
            }
        }
    }