<?php 

	class orderdetailModel extends Dmodel {
        public $table = 'shop_order_details';


		public function __construct() {
			parent::__construct();
		}

		public function getOrderDetail() {
			$sql = "SELECT * FROM $this->table";
			return $this->db->select($sql);
		} 

		public function getOrderDetailById($cond) {
			$sql = "SELECT * FROM $this->table WHERE $cond";
			return $this->db->select($sql);
		}

		public function insertOrderDetail($data) {
			return $this->db->insert($this->table, $data);
		}

		public function updateOrderDetail($data, $cond) {
			return $this->db->update($this->table, $data, $cond);
		}

		public function deleteOrderDetail($cond) {
			return $this->db->delete($this->table, $cond);
		}

		public function insertOrderDetail_post($data) {
			return $this->db->insert($this->table, $data);
		}
	}

?>