<?php

class message{

	

	public $_id = null;

	private $_db,

			$_data,

			$_sessionName,

			$_cookieName,

			$_isLoggedIn;

	

	public function __construct($message=null){

		$this->_db=db::getInstance();

		$this->_sessionName=config::get('session/session_name');

		$this->_cookieName=config::get('remember/cookie_name');

		

		$this->all($message);

	}

	

	public function all(){

		$data=$this->_db->get('*','dodoka_messages', array('id', '>', 0));

	}

	

	public function create($table, $fields=array()){

		if(!$this->_db->insert($table, $fields)){

			throw new Exception('There was a Problem creating an account');

		}

		

		//right new ID | $this->_db->_lastInsertId

		$this->_id=$this->_db->_lastInsertId;

	}

	

	public function update($table, $field=array(), $detail, $id=null){

		if(!$id&&$this->isLoggedIn()){

			$id=$this->data()->detail_id;

		}

		

		if(!$this->_db->update($table, $detail, $id, $field)){

			throw new Exception('Problemo update');

		}

	}



	public function exists(){

		return (!empty($this->_data))?true:false;

	}

	

	public function data(){

		return $this->_data;

	}

	

	public function newId(){

		return $this->_id;

	}

	

	public function isLoggedIn(){

		return $this->_isLoggedIn;

	}

	

}