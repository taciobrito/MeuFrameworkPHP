<?php 
	namespace App\Model;
	use System\Model;

	class ExampleModel extends Model {
		public $_table = 'table';
		public $_class = 'App\Model\ExampleModel';

		public function listAll() {
			return $this->getAll();
		}
	}