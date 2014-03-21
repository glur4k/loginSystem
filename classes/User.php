<?php
	class User {
		private $_db;

		public function __construct($user = null) {
			$this->_db = DB::getInstance();
		}
	}

	public function create() {
		if (!$this->_db->insert('users', $fields)) {
			throw new Exception('User konnte nicht erstellt werden!');
		}
	}

?>