<?php
	namespace App\Controller;
	use System\Controller;

	class IndexController extends Controller {

		public function __construct()	{
			parent::__construct();
		}

		public function index(){
			$data['hello'] = "Hello Developers!"; 
			$data['message'] = "Welcome, Tacio's Framework"; 
			$this->view('index', $data);
		}

	}