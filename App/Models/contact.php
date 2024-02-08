<?php 
    namespace App\Models;
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
            $query = "INSERT INTO tb_conta(name, email, tel) VALUES (:name, :email, :tel)";
            $stmt = $this->database->prepare($query);
            $stmt->bindParam(':name', $this->__get('name'));
            $stmt->bindParam(':email', $this->__get('email'));
            $stmt->bindParam(':tel', $this->__get('tel'));
            $stmt->execute();
        }

        
        
    }