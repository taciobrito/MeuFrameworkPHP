<?php
    namespace App\Controller;

    use System\Controller;

    class IndexController extends Controller 
    {
        public function __construct()
        {
            parent::__construct();
        }

        public function index()
        {
            $hello = 'Hello Developers!'; 
            $message = 'Welcome, Tacio\'s Framework'; 

            $this->view('index', compact('hello', 'message'));
		}

	}
