<?php

/**
* 
*/
class Model {
	
	var $server;
	var $username;
	var $password;
	var $database;
	var $conn;

	function __construct() {
		$this->server = Config::$SERVER;
		$this->username = Config::$USER;
		$this->password = Config::$PASS;
		$this->database = Config::$DB;
	}

	function connect() {
		$this->conn = mysqli_connect($this->server, $this->username, $this->password, $this->database);
		if (!$this->conn) {
			echo json_encode(array('code'=>500, 'message'=>'DB connection failed.'));
			die();
		} else {
			echo json_encode(array('message'=>'Connect.'));
		}
	}

	function close() {
		mysqli_close($this->conn);
	}
}