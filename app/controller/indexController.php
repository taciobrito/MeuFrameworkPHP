<?php
	namespace App\Controller;
	use System\Controller;

	class IndexController extends Controller {		
		public function __construct()	{
			parent::__construct();
		}

		public function index(){
			$data['message'] = "Hello Developers!"; 
			$this->view('index', $data);
		}

	}