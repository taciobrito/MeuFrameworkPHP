<?php 
    namespace App\Model;
    use System\Model;

    class ClientesModel extends Model {
        public $_table = 'clientes';
        public $_class = 'App\Model\ClientesModel';

        public function vendas(){
            return $this->hasMany('App\Model\VendasModel');
        }
    }