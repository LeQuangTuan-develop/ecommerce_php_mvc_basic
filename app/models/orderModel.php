<?php 

	class orderModel extends Dmodel {
        public $table = 'shop_orders';


		public function __construct() {
			parent::__construct();
		}

		public function getOrder() {
			$sql = "SELECT * FROM $this->table";
			return $this->db->select($sql);
		} 

		public function getOrderById($cond) {
			$sql = "SELECT * FROM $this->table WHERE $cond";
			return $this->db->select($sql);
		}

		public function insertOrder($data) {
			return $this->db->insert($this->table, $data);
		}

		public function updateOrder($data, $cond) {
			return $this->db->update($this->table, $data, $cond);
		}

		public function deleteOrder($cond) {
			return $this->db->delete($this->table, $cond);
		}

		public function insertOrder_post($data) {
			return $this->db->insert($this->table, $data);
		}

		public function getTotalOrderOfEachCustomer() {
			$sql = "SELECT A.customer_id, COUNT(B.customer_id) AS totalOrder
			FROM shop_customers A JOIN shop_orders B ON A.customer_id = B.customer_id
			GROUP BY A.customer_id";

			return $this->db->select($sql);
		}

		public function getTotalMoney() {
			$sql = "SELECT A.customer_id, SUM(D.list_price*C.quantity) AS totalBill
			FROM shop_customers A JOIN shop_orders B ON A.customer_id = B.customer_id
			JOIN shop_order_details C ON B.order_id = C.order_id
			JOIN shop_products D ON C.product_id = D.product_id
			GROUP BY A.customer_id";

			return $this->db->select($sql);
		}

		public function getTotalSalesEachDay($dayAgo) {
			$sql = "SELECT DATE_FORMAT(DATE_SUB(CURDATE(), INTERVAL $dayAgo DAY), '%d/%m') AS day,SUM(D.list_price*C.quantity) AS totalBill
			FROM shop_orders B JOIN shop_order_details C ON B.order_id = C.order_id
			JOIN shop_products D ON C.product_id = D.product_id
			WHERE DATE(B.order_date) = DATE_SUB(CURDATE(), INTERVAL $dayAgo DAY)";

			return $this->db->select($sql);
		}
	}

?>