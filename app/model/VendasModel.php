<?php 
    namespace App\Model;

    use System\Model;

    class VendasModel extends Model 
    {
        public $_table = 'vendas';
        // public $_class = 'App\Model\ExampleModel';

        public function pessoa()
        {
            return $this->belongsTo('pessoa');
        }
    }
