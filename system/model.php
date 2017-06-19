<?php
namespace System;

class Model{
	protected $db;
	public $_table;

	public function __construct(){
		require (__DIR__ . '/../app/config/database.php');
		$this->db = new PDO('mysql:host=' . $db['hostname'] . ';dbname=' . $db['database'], $db['username'], $db['password']);
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
		$groupby = ( isset($select['groupby']) ? "GROUP BY {$select['groupby']}" : "" );
		$orderby = ( isset($select['orderby']) ? "ORDER BY {$select['orderby']}" : "");
		
		$sql = $this->db->prepare( "SELECT {$fields} FROM {$this->_table} {$join} {$where} {$groupby} {$orderby} {$limit} {$offset}" );
		$sql->execute();
		$sql->setFetchMode(PDO::FETCH_ASSOC);
		return $sql->fetchAll();
	}

	public function get( Array $select = null ){
		$fields = ( isset($select['fields']) ? "{$select['fields']}" : "*");
		$join = ( isset($select['join']) ? "{$select['join']}" : "");
		$where = ( isset($select['where']) ? "WHERE {$select['where']}" : "");
		$limit = ( isset($select['limit']) ? "LIMIT {$select['limit']}" : "");
		$offset = ( isset($select['offset']) ? "OFFSET {$select['offset']}" : "");
		$groupby = ( isset($select['groupby']) ? "GROUP BY {$select['groupby']}" : "" );
		$orderby = ( isset($select['orderby']) ? "ORDER BY {$select['orderby']}" : "");
		
		$sql = $this->db->prepare( "SELECT {$fields} FROM {$this->_table} {$join} {$where} {$groupby} {$orderby} {$limit} {$offset}" );
		$sql->execute();
		$sql->setFetchMode(PDO::FETCH_ASSOC);
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