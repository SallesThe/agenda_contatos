<?php 
    namespace App\Controllers;
    use MF\Controller\Action;

    class indexController extends Action
    {
        public function showIndex() 
        {
            
            $this->render('home');
        }
    }