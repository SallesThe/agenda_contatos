<?php 
    namespace App\Models;
    use MF\Model\Model;

    class Contact extends Model
    {
        public function __get($attribute)
        {
            return $this->attribute;
        }

        public function __set($attribute, $value)
        {
            $this->attribute = $value;
        }

        public function save()
        {
            $query = "INSERT INTO tb_contact(name, email, tel, address) VALUES (:name, :email, :tel, :address)";
            $stmt = $this->database->prepare($query);
            $stmt->bindValue(':name', $this->__get('name'));
            $stmt->bindValue(':email', $this->__get('email'));
            $stmt->bindValue(':tel', $this->__get('tel'));
            $stmt->bindValue(':address', $this->__get('address'));
            $stmt->execute();
        }        
    }