<?php
namespace System;

class Model{
	protected $db;
	public $_table;
	public $_class;

	public function __construct(){
		require (__DIR__ . '/../app/config/database.php');
		$this->db = new \PDO('mysql:host=' . $db['hostname'] . ';dbname=' . $db['database'], $db['username'], $db['password']);
	}
	
	public function create( Array $data ){
		$fields = implode( ", ", array_keys( $data ) );
		$values = "'" . implode( "','", array_values( $data ) )."'";
		$this->db->query( "INSERT INTO {$this->_table} ({$fields}) VALUES ({$values})" );
		return $this->db->lastInsertId();
	}
	
	public function getAll( Array $select = null ){
		$fields = ( isset($select['fields']) ? "{$select['fields']}" : "*");
		$join = ( isset($select['join']) ? "{$select['join']}" : "");
		$where = ( isset($select['where']) ? "WHERE {$select['where']}" : "");
		$limit = ( isset($select['limit']) ? "LIMIT {$select['limit']}" : "");
		$offset = ( isset($select['offset']) ? "OFFSET {$select['offset']}" : "");
		$group_by = ( isset($select['group_by']) ? "GROUP BY {$select['group_by']}" : "" );
		$order_by = ( isset($select['order_by']) ? "ORDER BY {$select['order_by']}" : "");
		// Prepare the query
		$sql = $this->db->prepare( "SELECT {$fields} FROM {$this->_table} {$join} {$where} {$group_by} {$order_by} {$limit} {$offset}" );
		// execute query
		$sql->execute();
		// return object or object of class
		if( $this->_class == '' ) $sql->setFetchMode(\PDO::FETCH_OBJ);
			else $sql->setFetchMode(\PDO::FETCH_CLASS, $this->_class);
		// return result
		return $sql->fetchAll();
	}

	public function get( Array $select = null ){
		$fields = ( isset($select['fields']) ? "{$select['fields']}" : "*");
		$join = ( isset($select['join']) ? "{$select['join']}" : "");
		$where = ( isset($select['where']) ? "WHERE {$select['where']}" : "");
		$limit = ( isset($select['limit']) ? "LIMIT {$select['limit']}" : "");
		$offset = ( isset($select['offset']) ? "OFFSET {$select['offset']}" : "");
		$group_by = ( isset($select['group_by']) ? "GROUP BY {$select['group_by']}" : "" );
		$order_by = ( isset($select['order_by']) ? "ORDER BY {$select['order_by']}" : "");
		// Prepare the query
		$sql = $this->db->prepare( "SELECT {$fields} FROM {$this->_table} {$join} {$where} {$group_by} {$order_by} {$limit} {$offset}" );
		// execute query
		$sql->execute();
		// return object or object of class
		if( $this->_class == '' ) $sql->setFetchMode(\PDO::FETCH_OBJ);
			else $sql->setFetchMode(\PDO::FETCH_CLASS, $this->_class);
		// return result
		return $sql->fetch();
	}
	
	public function update( Array $data, $where ){
		foreach ( $data as $key => $value){
			$fields[] = "{$key} = '{$value}'";
		}
		$fields = implode(", ", $fields);
		$this->db->query( "UPDATE {$this->_table} SET {$fields} WHERE {$where}" );
		return $fields;
	}
	
	public function delete( $where ){
		return $this->db->query( "DELETE FROM {$this->_table} WHERE {$where}" );
	}
}