<?php 
    namespace App;
    class Connection
    {
        public function __construct() {
            $this->Connect();
        }
        
        protected function Connect(): void
        {
            try {
                $conn = new \PDO('mysql:host=localhost;dbname=agenda_contatos', 'root', '');
                echo "Connection Successful";
            } catch (\PDOException $e) {
                echo "Error: " . $e->getMessage();
            }
        }
    }