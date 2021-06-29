<?php 

	class productDiscountModel extends Dmodel {
		public $table = 'shop_product_discount';
		
		public function __construct() {
			parent::__construct();
		}

		public function getDiscountOfProduct() {
			$sql = "SELECT * FROM $this->table WHERE DATEDIFF(expiration_date, CURDATE()) > 0";
			return $this->db->select($sql);
		} 

		public function getDiscountOfProductByCategory($cond) {
			$sql = "SELECT discount_id, A.product_id, A.discount_amount 
			FROM $this->table A JOIN `shop_products` B ON A.product_id = B.product_id 
			JOIN `shop_categories` C ON B.category_id = C.category_id 
			WHERE DATEDIFF(A.expiration_date, CURDATE()) > 0 AND C.$cond";

			return $this->db->select($sql);
		} 

		public function getDiscountOfProductById($cond) {
			$sql = "SELECT * FROM $this->table WHERE $cond";
			return $this->db->select($sql);
		}

		public function insertDiscountOfProduct( $data) {
			return $this->db->insert($this->table, $data);
		}

		public function updateDiscountOfProduct($data, $cond) {
			return $this->db->update($this->table, $data, $cond);
		}

		public function deleteDiscountOfProduct($cond) {
			return $this->db->delete($this->table, $cond);
		}
	}

?>