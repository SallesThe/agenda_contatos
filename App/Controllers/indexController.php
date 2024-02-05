<?php 
    namespace App\Controllers;

use App\Models\Contact;
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
            $model = Container::getModel('contact');
            $model->__set('', $_POST['name']);
        }
    }