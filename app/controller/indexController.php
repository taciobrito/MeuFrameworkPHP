<?php

namespace App\Controller;

use System\Controller;
use App\Model\VendasModel;

class IndexController extends Controller {
    
    public function index()
    {
        $hello = 'Hello Developers!'; 
        $message = 'Welcome, Tacio\'s Framework'; 

        $this->view('index', compact('hello', 'message'));
    }

}
