<?php 

class Post extends  Dcontroller{

	function __construct() {
		parent::__construct();
	}

	public function index(){
		$this->add_category_post();
	}

	public function add_category_post() {
		$this->load->view('cpanel/header');
		$this->load->view('cpanel/menu');
		$this->load->view('cpanel/post/add_category');
		$this->load->view('cpanel/footer');
	}

	public function insert_category() {
		$name = $_POST['name_cate_post'];
		$description = $_POST['des_cate_post'];
		$table = "tbl_category_post";
		$data =  array(
			'name_cate_post' => $name,
			'des_cate_post' => $description
		);
		$categoryModel = $this->load->model('categoryModel');
		$result = $categoryModel->insertCategory_post($table, $data);
		if ($result == 1) {
			$message['msg'] = "Thêm danh mục bài viết thành công";
			header('Location: '.BASE_URL.'/post/list_category?msg='.urlencode(serialize($message)));
		} else {
			$message['msg'] = "Thêm danh mục bài viết thất bại";
			header('Location: '.BASE_URL.'/post/list_category?msg='.urlencode(serialize($message)));
		}
	}

	public function list_category() {
		$table = 'tbl_category_post';
		$categoryModel = $this->load->model('categoryModel');
		$data['category'] = $categoryModel->getCategory($table);
		$this->load->view('cpanel/header');
		$this->load->view('cpanel/menu');
		$this->load->view('cpanel/post/list_category', $data);
		$this->load->view('cpanel/footer');
	}

	public function delete_category($id) {
		$table = 'tbl_category_post';
		$categoryModel = $this->load->model('categoryModel');
		$cond = "id_cate_post='$id'";
		$result = $categoryModel->deleteCategory($table, $cond);

		header("Location: ".BASE_URL."/post/list_category");
	}

	public function edit_category($id) {
		$table = 'tbl_category_post';
		$categoryModel = $this->load->model('categoryModel');
		$cond = "id_cate_post='$id'";
		$result = $categoryModel->getCategoryById($table, $cond);
		$data['category'] = $result[0];

		$this->load->view('cpanel/header');
		$this->load->view('cpanel/menu');
		$this->load->view('cpanel/post/update_category', $data);
		$this->load->view('cpanel/footer');
	}

	public function update_category($id) {
		$table = 'tbl_category_post';
		$cond = "id_cate_post='$id'";
		$categoryModel = $this->load->model('categoryModel');
		$name = $_POST['name_cate_post'];
		$description = $_POST['des_cate_post'];
		$data = array(
			'name_cate_post' => $name,
			'des_cate_post' => $description
		);

		$result = $categoryModel->updateCategory($table, $data, $cond);

		header("Location: ".BASE_URL."/post/list_category");
	}

	// post
	public function add_post() {
		$table = 'tbl_category_post';
		$categoryModel = $this->load->model('categoryModel');
		$data['category'] = $categoryModel->getCategory($table);


		$this->load->view('cpanel/header');
		$this->load->view('cpanel/menu');
		$this->load->view('cpanel/post/add_post', $data);
		$this->load->view('cpanel/footer');
	}

	public function insert_post() {
		$name = $_POST['title_post'];
		$description = $_POST['des_post'];
		$category = $_POST['id_cate_post'];
		$image = $_FILES['image_post']['name'];
		$tmp_image = $_FILES['image_post']['tmp_name'];
		$date=date_create();
		$createdAt = date_format($date,"Y-m-d  H:i:s");

		$div = explode('.' , $image);
		$file_ext = strtolower(end($div));
		$unique_image = $div[0].time().'.'.$file_ext;

		$path_uploads = "public/uploads/post/".$unique_image;

		$table = "tbl_post";
		$data =  array(
			'title_post'     => $name,
			'des_post'      => $description,
			'image_post'    => $unique_image,
			'createdAt'		=> $createdAt,
			'id_cate_post'  => $category
		);

		$postModel = $this->load->model('postModel');
		$result = $postModel->insertpost($table, $data);
		if ($result == 1) {
			move_uploaded_file($tmp_image, $path_uploads);
			$message['msg'] = "Thêm bài viết thành công";
			header('Location: '.BASE_URL.'/post/list_post?msg='.urlencode(serialize($message)));
		} else {
			$message['msg'] = "Thêm bài viết thất bại";
			header('Location: '.BASE_URL.'/post/list_post?msg='.urlencode(serialize($message)));
		}
	}

	public function list_post() {
		$table = 'tbl_post';
		$postModel = $this->load->model('postModel');

		$data['post'] = $postModel->getPost($table);

		$table_cate = 'tbl_category_post';
		$categoryModel = $this->load->model('categoryModel');
		$data['category'] = $categoryModel->getCategory($table_cate);

		$this->load->view('cpanel/header');
		$this->load->view('cpanel/menu');
		$this->load->view('cpanel/post/list_post', $data);
		$this->load->view('cpanel/footer');
	}

	public function edit_post($id) {
		$table = 'tbl_post';
		$postModel = $this->load->model('postModel');
		$cond = "id_post='$id'";
		$result = $postModel->getPostById($table, $cond);
		$data['post'] = $result[0];
		$table_cate = 'tbl_category_post';
		$postModel = $this->load->model('categoryModel');
		$data['category'] = $postModel->getCategory($table_cate);

		$this->load->view('cpanel/header');
		$this->load->view('cpanel/menu');
		$this->load->view('cpanel/post/update_post', $data);
		$this->load->view('cpanel/footer');
	}

	public function update_post($id) {
		$table = 'tbl_post';
		$cond = "id_post ='$id'";
		$postModel = $this->load->model('postModel');

		$title = $_POST['title_post'];
		$description = $_POST['des_post'];
		$category = $_POST['id_cate_post'];
		$image = $_FILES['image_post']['name'];

		if ($image) {
			$cond = "id_post='$id'";
			$postbyId = $postModel->getpostById($table, $cond);
			unlink("public/uploads/post/".$postbyId[0]['image_post']);

			$tmp_image = $_FILES['image_post']['tmp_name'];
			$div = explode('.' , $image);
			$file_ext = strtolower(end($div));
			$unique_image = $div[0].time().'.'.$file_ext;
			$path_uploads = "public/uploads/post/".$unique_image;

			$table = "tbl_post";
			$data =  array(
				'title_post'     => $title,
				'des_post'      => $description,
				'image_post'    => $unique_image,
				'id_cate_post'     => $category
			);
			move_uploaded_file($tmp_image, $path_uploads);
		} else {
			$data =  array(
				'title_post'     => $title,
				'des_post'      => $description,
				'id_cate_post'     => $category
			);
		}
		

		$result = $postModel->updatePost($table, $data, $cond);

		if ($result == 1) {
			$message['msg'] = "Thêm bài viết thành công";
			header('Location: '.BASE_URL.'/post/list_post?msg='.urlencode(serialize($message)));
		} else {
			$message['msg'] = "Thêm bài viết thất bại";
			header('Location: '.BASE_URL.'/post/list_post?msg='.urlencode(serialize($message)));
		}
	}

	public function delete_post($id) {
		$table = 'tbl_post';
		$postModel = $this->load->model('postModel');
		$cond = "id_post='$id'";
		$post = $postModel->getPostById($table, $cond);
		unlink("public/uploads/post/".$post[0]['image_post']);
		$result = $postModel->deletePost($table, $cond);

		header("Location: ".BASE_URL."/post/list_post");
	}

	// User
	public function blog() {
		$this->load->view('header');
		$this->load->view('menu');
		$this->load->view('blog');
		$this->load->view('footer');
	}

	public function blog_detail() {
		$this->load->view('header');
		$this->load->view('menu');
		$this->load->view('blog-detail');
		$this->load->view('footer');
	}
}


?>