<?php 
    namespace MF\Controller;
    abstract class Action
    {
        protected $view;

        public function __construct() 
        {
            $this->view = new \stdClass;    
        }

        protected function render($view, $layout = "layout_01")
        {
            $this->view->page = $view;
            if(file_exists("../App/View" . $layout . "phtml"))
            {
                require_once "../App/View/" . $layout . "phtml";
            } else {
                $this->content();
            }
        }

        protected function content()
        {
            $currentClass = get_class($this);
            $currentClass = str_replace('App\\Controllers\\', '', $currentClass);
            $currentClass = str_replace('Controller', '', $currentClass);          
            require_once '../App/Views/' . $currentClass . '/' . $this->view->page . '.phtml';
        }
    }