<?php 

class Category extends Dcontroller{
	
	public function __construct() {
		$data = array();
		$message = array();
		parent::__construct();
	}

	public function list_category() {
		$categoryModel = $this->load->model('categoryModel');
		$table = 'tbl_category_product';
		$data['category'] = $categoryModel->getCategory($table);
		$this->load->view('header');
		$this->load->view('menu');
		$this->load->view('category', $data);
		$this->load->view('footer');
	}

	public function catebyid() {
		$categoryModel = $this->load->model('categoryModel');
		$table = 'tbl_category_product';
		$id = 1;
		$data['categoryById'] = $categoryModel->getCategoryById($table, $id);
		$this->load->view('header');
		$this->load->view('menu');
		$this->load->view('categoryById', $data);
		$this->load->view('footer');
	}

	public function addcategory() {
		$this->load->view('addcategory');
	}

	public function insertcategory() {
		$categorymodel = $this->load->model('categoryModel');
		$table = 'tbl_category_product';

		$title = $_POST['title'];
		$description = $_POST['description'];
		$data = array(
			'name_cate_prod' => $title,
			'des_cate_prod' => $description
		);
		$result = $categorymodel->insertCategory($table, $data);

		if ($result) {
			$message['msg'] = "Thêm dữ liệu thành công";
		} else {
			$message['msg'] = "Thêm dữ liệu thất bại";
		}

		$this->load->view('addcategory', $message);
	}

	public function updatecategory() {
		$categorymodel = $this->load->model('categoryModel');
		$table = 'tbl_category_product';
		$id = 11;
		$cond = "id_cate_prod='$id'";
		// $title = $_POST['title'];
		// $description = $_POST['description'];

		$data = array(
			'name_cate_prod' => 'xe hơi vinfast',
			'des_cate_prod' => 'xe hơi điện'
		);

		$result = $categorymodel->updateCategory($table, $data, $cond);

		if ($result) {
			echo "Cập nhật dữ liệu thành công";
		} else {
			echo "Cập nhật dữ liệu thất bại";
		}
	}

	public function deletecategory() {
		$categorymodel = $this->load->model('categoryModel');
		$table = 'tbl_category_product';
		$id = 15;
		$cond = "id_cate_prod='$id'";
		$result = $categorymodel->deleteCategory($table, $cond);

		if ($result) {
			echo "Xóa dữ liệu thành công";
		} else {
			echo "Xóa dữ liệu thất bại";
		}

	}

}

?>