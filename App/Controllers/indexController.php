<?php 
    namespace App\Controllers;

    use MF\Controller\Action;
    use MF\Model\Container;

    class indexController extends Action
    {
        public function showIndex() 
        {
            $this->render('home');
        }

        public function registerContact()
        {
            $contact = Container::getModel('contact');
            $contact->__set('name', $_POST['name']);
            $contact->__set('address', $_POST['address']);
            $contact->__set('tel', $_POST['tel']);
            $contact->__set('email', $_POST['email']);
            $contact->save();
        }
    }