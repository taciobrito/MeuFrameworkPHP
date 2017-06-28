<?php
	namespace App\Controller;
	use System\Controller;
	use App\Model\Cliente;
	use App\Model\ClienteDAO;

	class IndexController extends Controller {
		private $cliente;
		
		public function __construct()	{
			parent::__construct();
			$this->cliente = new ClienteDAO();
		}

		public function index(){
			$data['clientes'] = $this->cliente->listaTodos(); 
			$this->view('index', $data);
		}

	}