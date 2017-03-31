<?php
	class Model{
		protected $db;
		public $table;

		public function __construct(){
			require_once( __DIR__ . '/../app/config/database.php' );
			$this->db = new PDO( 'mysql:host=' . $db['hostname'] . ';dbname=' . $db['database'], $db['username'], $db['password'] );
		}
		
		public function create( Array $data ){
			$fields = implode(", ", array_keys($data));
			$values = "'" . implode("','", array_values($data))."'";
			return $this->db->query( "INSERT INTO `{$this->table}` ({$fields}) VALUES ({$values})" );
		}
		
		public function listar( $where = null, $limit = null, $offset = null, $orderby = null ){
			$where = ($where != null ? "WHERE {$where}" : "");
			$limit = ($limit != null ? "LIMIT {$limit}" : "");
			$offset = ($offset != null ? "OFFSET {$offset}" : "");
			$orderby = ($orderby != null ? "ORDER BY {$orderby}" : "");
			
			$sql = $this->db->prepare( "SELECT * FROM `{$this->table}` {$where} {$orderby} {$limit} {$offset}" );
			$sql->execute();
			$sql->setFetchMode(PDO::FETCH_ASSOC);
			return $sql->fetchAll();
		}
		
		public function atualizar( Array $data, $where ){
			foreach ( $data as $indice => $valor){
				$fields[] = "{$indice} = '{$valor}'";
			}
			$fields = implode(", ", $fields);
			$this->db->query( "UPDATE `{$this->table}` SET {$fields} WHERE {$where}" );
			return $fields;
		}
		
		public function deletar( $where ){
			return $this->db->query( "DELETE FROM `{$this->table}` WHERE {$where}" );
		}
	}
?>