<?php 

class User extends Dcontroller{
	public $customerModel;
	public $categoryModel;
	public $message;

	public function __construct() {
		parent::__construct();
		$this->customerModel = $this->load->model("customerModel");
		$this->categoryModel = $this->load->model("categoryModel");
	}	
	
	public function index() {
		$data['categories'] = $this->categoryModel->getCategory();

		$this->load->view('header', $data);
		$this->load->view('menu', $data);
		$this->load->view('login', $data);
		$this->load->view('footer');
	}

    public function login() {
        $email = $_POST['email'];
		$password = md5($_POST['password']);
		$table = "shop_customers";

		$loginModel = $this->load->model('loginModel');
		$count = $loginModel->login($table, $email, $password);

		if ($count == 0) {
			$message['msg'] = "User or Pass is not match";
			header('Location: '.BASE_URL."/user");
		} else {
			$result = $loginModel->getLogin($table, $email, $password);
			Session::set("login_customer", true);
			Session::set("customer_email", $result[0]["email"]);
			Session::set("customer_name", $result[0]["last_name"]." ".$result[0]["first_name"]);
			Session::set("customer_id", $result[0]["customer_id"]);
			Session::set("customer_avatar", $result[0]["avatar"]);

			header('Location: '.BASE_URL);
		}       
    }

    public function logout() {
        Session::unset("login_customer");
        Session::unset("customer_email");
        Session::unset("customer_name");
        Session::unset("customer_id");
        Session::unset("customer_avatar");

		header('Location: '.$_SERVER['HTTP_REFERER']);
    }

	public function account() {
		$id = Session::get("customer_id");
		$data['categories'] = $this->categoryModel->getCategory();
		$customer = $this->customerModel->getCustomerById("customer_id = $id");
		$data['customer'] = $customer[0];

		$this->load->view('header', $data);
		$this->load->view('menu', $data);
		$this->load->view('account', $data);
		$this->load->view('footer');
    }

	public function update_user($id) {
		$gender = 0;

		$first_name = $_POST['first_name'];
		$last_name = $_POST['last_name'];
		$phone = $_POST['phone'];
		$shipping = $_POST['shipping-address'];
		$city = $_POST['city'];
		$country = $_POST['country'];
		if (isset($_POST['gender'])) {
			$gender = $_POST['gender'];
		}
		

		if ($_POST['new-password'] == '') {
			$data = array(
				'first_name' 		=> $first_name,
				'last_name' 		=> $last_name,
				'phone' 			=> $phone,
				'shipping_address' 	=> $shipping,
				'city' 				=> $city,
				'country' 			=> $country,
				'gender' 			=> $gender
			);
		} else {
			$new_password = $_POST['new-password'];
			$data = array(
				'first_name' 		=> $first_name,
				'last_name' 		=> $last_name,
				'phone' 			=> $phone,
				'shipping_address' 	=> $shipping,
				'city' 				=> $city,
				'country' 			=> $country,
				'gender' 			=> $gender,
				'password' 			=> $new_password
			);
		}
		$cond = "customer_id = $id";
		$update_user = $this->customerModel->updateCustomer($data, $cond);

		if ($update_user == 1) {
			$message['msg'] = "Cập nhật người dùng thành công";
			header('Location: '.BASE_URL.'/user/account?msg='.urlencode(serialize($message)));
		} else {
			$message['msg'] = "Cập nhật người dùng thất bại";
			header('Location: '.BASE_URL.'/user/account?msg='.urlencode(serialize($message)));
		}
    }

	public function register() {
		$data['categories'] = $this->categoryModel->getCategory();

		$this->load->view('header', $data);
		$this->load->view('menu', $data);
		$this->load->view('register');
		$this->load->view('footer');
	}

	public function register_validation() {
		$first_name = $_POST['first_name'];
		$last_name = $_POST['last_name'];
		$email = $_POST['email'];
		$phone = $_POST['phone'];
		$password = md5($_POST['password']);

		$data = array(
			'first_name' => $first_name,
			'last_name' => $last_name,
			'email' => $email,
			'phone' => $phone,
			'password' => $password
		);

		$checkValidUser = $this->customerModel->checkValidCustomer($email);
		if ($checkValidUser != 0) {
			$this->message = "Email người dùng này đã tồn tại";
		} else {
			$insertNewCustomer = $this->customerModel->insertCustomer($data);
			if ($insertNewCustomer) {
				$this->message = "Đăng ký thành công";
			}
		}
		
		echo $this->message;
	}

	public function forgot_password() {
		$data['categories'] = $this->categoryModel->getCategory();

		$this->load->view('header', $data);
		$this->load->view('menu', $data);
		$this->load->view('forgot-password');
		$this->load->view('footer');
	}
}

?>