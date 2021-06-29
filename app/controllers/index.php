<?php 

class Index extends Dcontroller{
	public $categoryModel;
	public $productModel;
	
	public function __construct() {
		parent::__construct();
		$this->categoryModel = $this->load->model('categoryModel');
		$this->productModel = $this->load->model('productModel');
	}

	public function index() {
		$this->homePage();
	}

	public function homePage() {
		$data['categories'] = $this->categoryModel->getCategory();
		$data['products'] = $this->productModel->getProduct();

		$this->load->view('header', $data);
		$this->load->view('slider', $data);
		$this->load->view('home');
		$this->load->view('footer');
	}

	public function notfound() {
		$data['categories'] = $this->categoryModel->getCategory();

		$this->load->view('header', $data);
		$this->load->view('menu', $data);
		$this->load->view('404');
		$this->load->view('footer');
	}

	public function about() {
		$data['categories'] = $this->categoryModel->getCategory();

		$this->load->view('header', $data);
		$this->load->view('menu', $data);
		$this->load->view('about');
		$this->load->view('footer');
	}

	public function contact() {
		$data['categories'] = $this->categoryModel->getCategory();

		$this->load->view('header', $data);
		$this->load->view('menu', $data);
		$this->load->view('contact');
		$this->load->view('footer');
	}
}

?>