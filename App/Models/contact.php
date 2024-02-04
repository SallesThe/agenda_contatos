<?php 
    namespace App\Models;

use MF\Model\Container;
use MF\Model\Model;

    class Contact extends Model
    {
        public function __set($attribute, $value)
        {
            $this->attributte = $value;
        }

        public function __get($attribute)
        {
            return $this->attribute;
        }

        public function salvar(): void
        {
            $query = "INSERT INTO tb_conta";
        }

        
        
    }