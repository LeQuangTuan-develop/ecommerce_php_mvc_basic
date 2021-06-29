<?php 

	class loginModel extends Dmodel {
		public function __construct() {
			parent::__construct();
		}

		public function login($table, $email, $password) {
			$sql = "SELECT * FROM $table WHERE email = ? AND password = ?";
			return $this->db->affectedRows($sql, $email, $password);
		} 

		public function getLogin($table, $email, $password) {
			$sql = "SELECT * FROM $table WHERE email = ? AND password = ?";
			return $this->db->selectUser($sql, $email, $password);
		}
	}
?>