<?php 

class Dmodel {

	protected $db = array();

	public function __construct() {
		$conn = 'mysql:dbname=pdo_blog_ecommerce;host=localhost';
		$user = 'root';
		$pass = '123456';
		$this->db = new Database($conn, $user, $pass);
	}
}

?>