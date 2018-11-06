<?php

namespace App\Controller;

use System\Controller;
use App\Model\VendasModel;

class IndexController extends Controller {
    
    private $_vendas;
    
    public function __construct() {
        parent::__construct();
        $this->_vendas = new VendasModel();
    }

    public function index() {
        $hello = 'Hello Developers!';
        $message = 'Welcome, Tacio\'s Framework';
        
        $dados = array(
            'hello' => $hello, 
            'message' => $message,
            'vendas' => $this->_vendas->select()->getAll()
        );
        $this->view('index', $dados);
    }

}
