<?php 

	class categoryModel extends Dmodel {
		public $table = "shop_categories";

		public function __construct() {
			parent::__construct();
		}

		public function getCategory() {
			$sql = "SELECT * FROM $this->table";

			return $this->db->select($sql);
		} 

		public function getCategoryById($cond) {
			$sql = "SELECT * FROM $this->table WHERE $cond";
			return $this->db->select($sql);
		}

		public function insertCategory($data) {
			return $this->db->insert($this->table, $data);
		}

		public function updateCategory($data, $cond) {
			return $this->db->update($this->table, $data, $cond);
		}

		public function deleteCategory($cond) {
			return $this->db->delete($this->table, $cond);
		}

		public function insertCategory_post($data) {
			return $this->db->insert($this->table, $data);
		}
	}

?>