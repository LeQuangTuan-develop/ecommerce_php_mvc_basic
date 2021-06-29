<?php 

	class postModel extends Dmodel {
		public function __construct() {
			parent::__construct();
		}

		public function getPost($table) {
			$sql = "SELECT * FROM $table";

			return $this->db->select($sql);
		} 

		public function getPostById($table, $cond) {
			$sql = "SELECT * FROM $table WHERE $cond";
			return $this->db->select($sql);
		}

		public function insertPost($table, $data) {
			return $this->db->insert($table, $data);
		}

		public function updatePost($table, $data, $cond) {
			return $this->db->update($table, $data, $cond);
		}

		public function deletePost($table, $cond) {
			return $this->db->delete($table, $cond);
		}
	}

?>