<?php 

	class customerModel extends Dmodel {
        public $table = 'shop_customers';

		public function __construct() {
			parent::__construct();
		}

		public function getCustomer() {
			$sql = "SELECT * FROM $this->table";
			return $this->db->select($sql);
		} 

		public function getCustomerByEmail($cond) {
			$sql = "SELECT * FROM $this->table WHERE $cond";
			return $this->db->select($sql);
		}

		public function checkValidCustomer($email) {
			$sql = "SELECT * FROM $this->table WHERE email = ?";
			return $this->db->countRows($sql, $email);
		}

		public function getCustomerById($cond) {
			$sql = "SELECT * FROM $this->table WHERE $cond";
			return $this->db->select($sql);
		}

		public function insertCustomer($data) {
			return $this->db->insert($this->table, $data);
		}

		public function updateCustomer($data, $cond) {
			return $this->db->update($this->table, $data, $cond);
		}

		public function deleteCustomer($cond) {
			return $this->db->delete($this->table, $cond);
		}

		public function insertCustomer_post($data) {
			return $this->db->insert($this->table, $data);
		}
	}

?>