<?php 

	class supplierModel extends Dmodel {
		public $table = 'shop_suppliers';

		public function __construct() {
			parent::__construct();
		}

		public function getSupplier() {
			$sql = "SELECT * FROM $this->table";

			return $this->db->select($sql);
		} 

		public function getSupplierById($cond) {
			$sql = "SELECT * FROM $this->table WHERE $cond";
			return $this->db->select($sql);
		}

		public function insertSupplier($data) {
			return $this->db->insert($this->table, $data);
		}

		public function updateSupplier($data, $cond) {
			return $this->db->update($this->table, $data, $cond);
		}

		public function deleteSupplier($cond) {
			return $this->db->delete($this->table, $cond);
		}

		public function insertSupplier_post($data) {
			return $this->db->insert($this->table, $data);
		}
	}

?>