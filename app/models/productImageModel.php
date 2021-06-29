<?php 

	class productImageModel extends Dmodel {
		public $table = 'shop_product_images';
		
		public function __construct() {
			parent::__construct();
		}

		public function getImagesOfProduct() {
			$sql = "SELECT * FROM $this->table";

			return $this->db->select($sql);
		} 

		public function getImagesOfProductById($cond) {
			$sql = "SELECT * FROM $this->table WHERE $cond";
			return $this->db->select($sql);
		}

		public function insertImageOfProduct($data) {
			return $this->db->insert($this->table, $data);
		}

		public function updateImageOfProduct($data, $cond) {
			return $this->db->update($this->table, $data, $cond);
		}

		public function deleteImageOfProduct($cond) {
			return $this->db->delete($this->table, $cond);
		}
	}

?>