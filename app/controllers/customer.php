<?php 

class Customer extends Dcontroller{
	public $customerModel; 
	public $orderModel;
	
	public function __construct() {
		parent::__construct();
		$this->customerModel = $this->load->model('customerModel');
		$this->orderModel = $this->load->model('orderModel');
	}

	public function index() {
		$this->list_customer();
	}

	public function list_customer() {
		$data['customers'] = $this->customerModel->getCustomer();
		$data['countOrders'] = $this->orderModel->getTotalOrderOfEachCustomer();
		$data['totalBills'] = $this->orderModel->getTotalMoney();

		$this->load->view('cpanel/header');
		$this->load->view('cpanel/sidebar');
		$this->load->view('cpanel/customer/list_customer', $data);
	}

	public function add_customer() {
		$this->load->view('cpanel/header');
		$this->load->view('cpanel/sidebar');
		$this->load->view('cpanel/customer/add_customer');
	}

	public function detail_customer($id) {
		$data['customer'] = $this->customerModel->getCustomerById("customer_id = $id");

		$this->load->view('cpanel/header');
		$this->load->view('cpanel/sidebar');
		$this->load->view('cpanel/customer/detail_customer', $data);
	}

	public function insert_customer() {

		
	}
}

?>