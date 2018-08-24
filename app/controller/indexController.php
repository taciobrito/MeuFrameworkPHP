<?php
	namespace App\Controller;
	use System\Controller;
	use App\Model\ExampleModel;
	use App\Model\VendasModel;

	class IndexController extends Controller {

		private $model;
		private $vendas;
		public function __construct()	{
			parent::__construct();
			$this->model = new ExampleModel();
			$this->vendas = new VendasModel();
		}

		public function index(){
			$hello = "Hello Developers!"; 
			$message = "Welcome, Tacio's Framework"; 
			$pessoas = $this->model->select()->getAll();
			$this->view('index', compact('hello', 'message', 'pessoas'));
		}

		public function criarPessoa(){
			$hello = "Cadastro!"; 
			$message = "pessoa criada com sucesso!"; 

			$objeto = $this->model->create( [
				'nome' => 'Paula Joyce', 
				'cpf' => '622.060.851-95', 
				'dt_nasc' => '1998-02-20', 
				'endereco' => 'QR 313 CJ N CASA 32 SANTA MARIA NORTE DF', 
			] );
			
			$this->view('criar', compact('hello', 'message', 'objeto'));

		}

		public function listaVendas(){
			$hello = "Vendas!"; 
			$message = "Listando vendas"; 
			$vendas = $this->vendas->select()->getAll();
			$this->view('vendas', compact('hello', 'message', 'vendas'));
		}

		public function criarVenda(){
			$hello = "Cadastro!"; 
			$message = "venda criada com sucesso!"; 

			$objeto = $this->vendas->create( [
				'produtos' => 'Carrinho de controle remoto', 
				'total' => 36.99, 
				'pessoa_id' => 1, 
			] );
			
			$this->view('criar', compact('hello', 'message', 'objeto'));
		}

	}