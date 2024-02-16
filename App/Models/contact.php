<?php 
    namespace App\Models;
    use MF\Model\Model;

    class Contact extends Model 
    {
        protected $attribute = [];

        public function __get($attribute)
        {
            return isset($this->attribute[$attribute]) ? $this->attribute[$attribute] : null; ;
        }

        public function __set($attribute, $value)
        {
            $this->attribute[$attribute] = $value;
        }

        public function save()
        {
            $query = "INSERT INTO (name, address, tel, email) VALUES(:name, :address, :tel, :email)";
            $stmt = $this->database->prepare($query);
            $stmt->bindValue(':name', $this->__get('name'));
            $stmt->bindValue(':address', $this->__get('address'));
            $stmt->bindValue(':tel', $this->__get('tel'));
            $stmt->bindValue(':email', $this->__get('email'));
            $stmt->execute();
        }        
    }