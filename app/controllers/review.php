<?php 

class Review extends Dcontroller{
	public $reviewModel;
	public $productModel;
	public $customerModel;
	
	public function __construct() {
		parent::__construct();
		$this->reviewModel = $this->load->model('reviewModel');
		$this->productModel = $this->load->model('productModel');
		$this->customerModel = $this->load->model('customerModel');
	}

	public function index() {
		$this->list_reviews();
	}

	public function list_reviews() {
		$data['reviews'] = $this->reviewModel->getReview();
		$data['products'] = $this->productModel->getProduct("shop_products");
		$data['customers'] = $this->customerModel->getCustomer();

		$this->load->view('cpanel/header');
		$this->load->view('cpanel/sidebar');
		$this->load->view('cpanel/review/reviews', $data);
	}

	public function add_reviews() {
		$this->load->view('cpanel/header');
		$this->load->view('cpanel/sidebar');
		$this->load->view('cpanel/review/add_reviews');
	}

	public function delete_review($id) {
		$result = $this->reviewModel->deleteReview("review_id = $id");

		header("Location: ".BASE_URL."/review/list_reviews");
	}
}

?>