<?php 
    namespace App\Model;
    use System\Model;

    class VendasModel extends Model {
        public $_table = 'vendas';
         public $_class = 'App\Model\VendasModel';

        public function cliente($key, $value){
            return $this->belongsTo('App\Model\ClientesModel', $key, $value);
        }
    }