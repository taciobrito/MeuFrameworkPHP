<?php 
    namespace App\Model;

    use System\Model;

    class ExampleModel extends Model 
    {
        public $_table = 'table_name';
        public $_class = 'App\Model\ExampleModel';

        public function listAll() 
        {
            return $this->select()->getAll();
        }

        public function listOne() 
        {
            return $this->select()->get();
        }
    }
