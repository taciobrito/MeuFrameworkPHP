<?php 
	class ExampleModel extends Model {
		public $_table = 'table';

		public function listAll() {
			return $this->list();
		}
	}