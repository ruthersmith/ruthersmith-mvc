<?php

/**
 * 
 */
class Post {

	private $db;
	
	function __construct(){
		$this->db = new Database;
	}

	public function getposts(){
		$this->db->prepare_statement('SELECT * FROM post');
		return $this->db->fetchall();

	}
}