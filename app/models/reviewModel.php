<?php 

	class reviewModel extends Dmodel {
        public $table = "shop_product_reviews";
		public function __construct() {
			parent::__construct();
		}

		public function getReview() {
			$sql = "SELECT * FROM $this->table";
			return $this->db->select($sql);
		} 

		public function getReviewByProductId($cond) {
			$sql = "SELECT * FROM $this->table WHERE $cond ORDER BY created_at DESC";
			return $this->db->select($sql);
		}

		public function getCustomerByReViewProductId($cond) {
			$sql = "SELECT B.customer_id, B.first_name, B.last_name, B.avatar, A.comment, A.rating, A.created_at
			FROM $this->table A JOIN `shop_customers` B ON A.customer_id = B.customer_id
			WHERE A.$cond ORDER BY A.created_at DESC LIMIT 10";

			return $this->db->select($sql);
		}

		public function updateReview($data, $cond) {
			return $this->db->update($this->table, $data, $cond);
		}

		public function deleteReview($cond) {
			return $this->db->delete($this->table, $cond);
		}

		public function deleteAllReview() {
			return $this->db->deleteAll($this->table);
		}
	}

?>