<?php 

class Admin extends Dcontroller{
	public $orderModel;
	public $loginModel;
	
	public function __construct() {
		$message = array();
		$data = array();
		parent::__construct();
		$this->loginModel = $this->load->model('loginModel');
		$this->orderModel = $this->load->model('orderModel');
	}	

	public function index() {
		$this->login();
	}

	public function login() {	
		if (Session::get("login_admin") == true) {
			header('Location: '.BASE_URL."/admin/dashboard");
		}
		$this->load->view('cpanel/login');
	}

	public function dashboard() {
		Session::checkSessionAdmin();
		
		$this->load->view('cpanel/header');
		$this->load->view('cpanel/sidebar');
		$this->load->view('cpanel/dashboard');
	}

	public function authentication_login() {
		$email = $_POST['email'];
		$password = md5($_POST['password']);
		$table = "acl_user";

		$count = $this->loginModel->login($table, $email, $password);

		if ($count == 0) {
			$message['msg'] = "User or Pass is not match";
			header('Location: '.BASE_URL.'/admin/login?msg='.urlencode(serialize($message)));
		} else {
			$result = $this->loginModel->getLogin($table, $email, $password);
			Session::set("login_admin", true);
			Session::set("username_admin", $result[0]["username"]);
			Session::set("userid_admin", $result[0]["acl_id"]);
			Session::set("avatar_admin", $result[0]["avatar"]);

			header('Location: '.BASE_URL."/admin/dashboard");
		}
	}

	public function logout() {
		Session::unset("login_admin");
		Session::unset("username_admin");
		Session::unset("userid_admin");
		Session::unset("avatar_admin");

		header('Location: '.BASE_URL."/admin");
	}

	public function statistics() {
		$data['statistics'] = array();
		for ($i=6; $i >= 0; $i--) { 
			$statistics = $this->orderModel->getTotalSalesEachDay($i);
			array_push($data['statistics'], $statistics[0]);
		}

		// echo "<pre>";
		// print_r($data);
		// exit();

		$this->load->view('cpanel/header');
		$this->load->view('cpanel/sidebar');
		$this->load->view('cpanel/chart/statistics', $data);
	}
}

?>