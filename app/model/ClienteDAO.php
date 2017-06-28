<?php 
namespace App\Model;
use System\Model;
	class ClienteDAO extends Model {
		public $_table = 'cliente';
		// public $_class = 'App\Model\Cliente';

		public function listaTodos() {
			return $this->getAll();
		}
	}