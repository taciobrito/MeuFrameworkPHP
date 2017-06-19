<?php 
	namespace App\Model;
	use System\Model;

	class ExampleModel extends Model {
		public $_table = 'table';

		public function listAll() {
			return $this->getAll();
		}
	}