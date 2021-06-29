<?php 

class Order extends Dcontroller {

	public function __construct() {
		parent::__construct();
	}

	public function index() {
		$this->order();
	}

	public function order() {
		$this->load->view('cpanel/header');
		$this->load->view('cpanel/menu');
		$this->load->view('cpanel/order/order');
		$this->load->view('cpanel/footer');
	}

	public function add_order() {
		$this->load->view('cpanel/header');
		$this->load->view('cpanel/menu');
		$this->load->view('cpanel/order/add_order');
		$this->load->view('cpanel/footer');
	}

	// user
	public function cart() {
		$this->load->view('header');
		$this->load->view('menu');
		$this->load->view('cart');
		$this->load->view('footer');
	}

	public function checkout() {
		$this->load->view('header');
		$this->load->view('menu');
		$this->load->view('checkout');
		$this->load->view('footer');
	}
}

?>