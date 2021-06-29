<?php 

class Product extends  Dcontroller{
	public $productModel;
	public $categoryModel;
	public $supplierModel;
	public $productImageModel;
	public $productDiscountModel;
	public $reviewModel;

	function __construct() {
		parent::__construct();
		$this->productModel = $this->load->model('productModel');
		$this->categoryModel = $this->load->model('categoryModel');
		$this->supplierModel = $this->load->model('supplierModel');
		$this->productImageModel = $this->load->model('productImageModel');
		$this->productDiscountModel = $this->load->model('productDiscountModel');
		$this->reviewModel = $this->load->model('reviewModel');
	}

	public function index(){
		$this->add_category();
	}

	public function add_category() {
		$this->load->view('cpanel/header');
		$this->load->view('cpanel/sidebar');
		$this->load->view('cpanel/product/add_category');
	}

	public function insert_category() {
		$name = $_POST['CateName'];
		$code = $_POST['CateCode'];
		$description = $_POST['CateDescription'];

		$data =  array(
			'category_name' => $name,
			'category_code' => $code,
			'cate_description' => $description
		);

		$result = $this->categoryModel->insertCategory($data);

		if ($result == 1) {
			$message['msg'] = "Thêm danh mục sản phẩm thành công";
			header('Location: '.BASE_URL.'/product/list_category?msg='.urlencode(serialize($message)));
		} else {
			$message['msg'] = "Thêm danh mục sản phẩm thất bại";
			header('Location: '.BASE_URL.'/product/list_category?msg='.urlencode(serialize($message)));
		}
	}

	public function list_category() {
		$data['categories'] = $this->categoryModel->getCategory();

		$this->load->view('cpanel/header');
		$this->load->view('cpanel/sidebar');
		$this->load->view('cpanel/product/list_category', $data);
	}

	public function delete_category($id) {
		$cond = "category_id='$id'";
		$result = $this->categoryModel->deleteCategory($cond);
		header("Location: ".BASE_URL."/product/list_category");
	}

	public function edit_category($id) {
		$cond = "category_id='$id'";
		$result = $this->categoryModel->getCategoryById($cond);
		$data['category'] = $result[0];

		$this->load->view('cpanel/header');
		$this->load->view('cpanel/sidebar');
		$this->load->view('cpanel/product/update_category', $data);
	}

	public function update_category($id) {
		$cond = "category_id='$id'";
		
		$name = $_POST['CateName'];
		$code = $_POST['CateCode'];
		$description = $_POST['CateDescription'];

		if (isset($_FILES['cateImage'])) {
			$imgName = $_FILES['cateImage']['name'];
			$tmp_image = $_FILES['cateImage']['tmp_name'];
			$div = explode('.' , $imgName);
			$file_ext = strtolower(end($div));
			$unique_image = $div[0].time().'.'.$file_ext;
			$path_uploads = "public/uploads/product/".$unique_image;

			$data = array(
				'category_name' => $name,
				'category_code' => $code,
				'cate_description' => $description,
				'category_image' => $unique_image
			);

			echo "chạy hình";
			die();
		}

		$data = array(
			'category_name' => $name,
			'category_code' => $code,
			'cate_description' => $description
		);

		$result = $this->categoryModel->updateCategory($data, $cond);

		header("Location: ".BASE_URL."/product/list_category");
	}

	// Product 
	public function add_product() {
		$data['category'] = $this->categoryModel->getCategory();
		$data['supplier'] = $this->supplierModel->getSupplier();

		$this->load->view('cpanel/header');
		$this->load->view('cpanel/sidebar');
		$this->load->view('cpanel/product/add_product', $data);
	}

	public function insert_product() {
		$name = $_POST['productName'];
		$code = $_POST['SKU'];
		$description = $_POST['description'];
		$price = floatval($_POST['productPrice']);
		$supplier = $_POST['supplierProductId'];
		// $quantity = $_POST['quantity_product'];
		$categoryId = $_POST['categoryProductId'];

		// $image = $_FILES['image_product']['name'];
		// $tmp_image = $_FILES['image_product']['tmp_name'];

		// $div = explode('.' , $image);
		// $file_ext = strtolower(end($div));
		// $unique_image = $div[0].time().'.'.$file_ext;

		// $path_uploads = "public/uploads/product/".$unique_image;

		$data =  array(
			'product_name'     => $name,
			'product_code'     => $code,
			'description'      => $description,
			'list_price'       => $price,
			'supplier_id'          => $supplier,
			// 'quantity_product' => $quantity,
			'category_id'      => $categoryId
		);

		$result = $this->productModel->insertProduct($data);
		if ($result == 1) {
			// move_uploaded_file($tmp_image, $path_uploads);
			$message['msg'] = "Thêm sản phẩm thành công";
			header('Location: '.BASE_URL.'/product/list_product?msg='.urlencode(serialize($message)));
		} else {
			$message['msg'] = "Thêm sản phẩm thất bại";
			header('Location: '.BASE_URL.'/product/list_product?msg='.urlencode(serialize($message)));
		}
	}

	public function list_product() {
		$data['product'] = $this->productModel->getProduct();
		$data['category'] = $this->categoryModel->getCategory();

		$this->load->view('cpanel/header');
		$this->load->view('cpanel/sidebar');
		$this->load->view('cpanel/product/list_product', $data);
	}

	public function edit_product($id) {
		$cond = "product_id='$id'";
		$result = $this->productModel->getproductById($cond);
		$data['product'] = $result[0];

		$data['category'] = $this->categoryModel->getCategory();

		$data['images'] = $this->productImageModel->getImagesOfProductById($cond);

		$data['supplier'] = $this->supplierModel->getSupplier();
		
		$this->load->view('cpanel/header');
		$this->load->view('cpanel/sidebar');
		$this->load->view('cpanel/product/update_product', $data);
	}

	public function update_product($id) {
		$cond = "product_id ='$id'";
		$imageOfProduct = $this->productImageModel->getImagesOfProductById($cond);
		$productbyId = $this->productModel->getproductById($cond);
			
		$data = json_decode($_POST['data'], true);

		$countNewImg = count($data['imgListName']);
		$countOldImg = count($imageOfProduct);

		$name = $data['productName'];
		$code = $data['SKU'];
		$description = $data['description'];
		$price = $data['productPrice'];
		$supplier = $data['supplierProductId'];
		// $quantity = $data['quantity_product'];
		$categoryId = $data['categoryProductId'];

		if (isset($_FILES)) {
				
			// tạm thời chưa xử lý được vì nhiều vấn đề về cách lưu dữ liệu trong db
			if ($countOldImg + 1 > $countNewImg) {
				$image = $_FILES['file']['name'];
				unlink("public/uploads/product/".$productbyId[0]['image_product']);

				$tmp_image = $_FILES['image_product']['tmp_name'];
				$div = explode('.' , $image);
				$file_ext = strtolower(end($div));
				$unique_image = $div[0].time().'.'.$file_ext;
				$path_uploads = "public/uploads/product/".$unique_image;

				$data =  array(
					'product_name'     => $name,
					'product_code'     => $code,
					'description'      => $description,
					'list_price'       => $price,
					'supplier_id'          => $supplier,
					// 'quantity_product' => $quantity,
					'image_product'    => $unique_image,
					'category_id'      => $categoryId
				);
				move_uploaded_file($tmp_image, $path_uploads);
			}

			foreach ($_FILES as $file) {
				$image = $file['name'];
				$tmp_image = $file['tmp_name'];
				$div = explode('.' , $image);
				$file_ext = strtolower(end($div));
				$unique_image = $div[0].time().'.'.$file_ext;
				$path_uploads = "./public/images/products/".$unique_image;

				$imgData = array(
					"product_id" => $id,
					"image" 	 => $unique_image
				);
				$this->productImageModel->insertImageOfProduct($imgData);
				move_uploaded_file($tmp_image, $path_uploads);
			}
			
		} 

		$data =  array(
			'product_name'     => $name,
			'product_code'     => $code,
			'description'      => $description,
			'list_price'       => $price,
			'supplier_id'          => $supplier,
			// 'quantity_product' => $quantity,
			'category_id'      => $categoryId
		);

		$result = $this->productModel->updateProduct($data, $cond);

		if ($result == 1) {
			$message = array(
				"status" => "1"
			);
		} else {
			$message = array(
				"status" => "0"
			);
		}

		exit(json_encode($message));
	}

	public function delete_product($id) {
		$today = date("Y-m-d h:i:s");
		$data = array( 'deleted_at' =>  $today);
		if ($id == "all") {
			$dataCheck = $_POST['productCheckbox'];
			$stringId = implode(",", $dataCheck);
			$cond = "product_id IN ($stringId)";
			$deleteproduct = $this->productModel->updateProduct($data, $cond);
		} else {
			$cond = "product_id='$id'";
			$deleteproduct = $this->productModel->updateProduct($data, $cond);
		}

		if ($deleteproduct) {
			$message= "xóa sản phẩm thành công";
		} else {
			$message= "xóa sản phẩm thất bại";
		}

		// unlink("public/uploads/product/".$product[0]['image_product']);
		// $result = $this->productModel->deleteProduct($table, $cond);

		header("Location: ".BASE_URL."/product/list_product");
	}

	// customer
	public function product_detail($id) {
		$data['categories'] = $this->categoryModel->getCategory();
		$product = $this->productModel->getProductById("product_id = $id");
		$increaseView = $this->productModel->increaseView(1, "product_id = $id");

		$data['product'] = $product[0];
		$categoryId = $data['product']['category_id'];
		$data['productsRelated'] = $this->productModel->getProductsByCategory("category_id = $categoryId AND product_id NOT IN ($id)");
		$data['discounts'] = $this->productDiscountModel->getDiscountOfProduct();
		$data['images'] = $this->productImageModel->getImagesOfProductById("product_id = $id");
		$data['customersByReview'] = $this->reviewModel->getCustomerByReViewProductId("product_id = $id");
		$discount = $this->productDiscountModel->getDiscountOfProductById("product_id = $id");
		if (count($discount) > 0) {
			$data['discount'] = $discount[0];
		}

		$this->load->view('header', $data);
		$this->load->view('menu', $data);
		$this->load->view('product', $data);
		$this->load->view('footer');
	}

	public function shop($id) {
		if ($id == "all") {
			$data['products'] = $this->productModel->getProduct();
			$data['discounts'] = $this->productDiscountModel->getDiscountOfProduct();
		} else {
			$data['products'] = $this->productModel->getProductsByCategory("category_id = $id");
			$data['discounts'] = $this->productDiscountModel->getDiscountOfProductByCategory("category_id = $id");
		}
		$data['productsTrend'] = $this->productModel->getProductsTrend();
		$data['productsTopNew'] = $this->productModel->getProductsTopNew();
		$data['categories'] = $this->categoryModel->getCategory();

		$this->load->view('header', $data);
		$this->load->view('menu', $data);
		$this->load->view('shop', $data);
		$this->load->view('footer');
	}

	public function wishlist() {
		$data['categories'] = $this->categoryModel->getCategory();

		$this->load->view('header', $data);
		$this->load->view('menu', $data);
		$this->load->view('wishlist');
		$this->load->view('footer');
	}

	public function search() {
		$search = $_POST['search'];
		$cate = $_POST['categoryId'];

		if ($cate == 0) {
			$searchProduct = $this->productModel->getProductsSearch($search);
		} else {
			$searchProduct = $this->productModel->getProductsSearch($search, "category_id = $cate");
		}

		if (count($searchProduct) == 0) {
			$data['products'] = $this->productModel->getProduct();
		} else {
			$data['products'] = $searchProduct;
		}

		$data['discounts'] = $this->productDiscountModel->getDiscountOfProduct();
		$data['productsTrend'] = $this->productModel->getProductsTrend();
		$data['productsTopNew'] = $this->productModel->getProductsTopNew();
		$data['categories'] = $this->categoryModel->getCategory();

		$this->load->view('header', $data);
		$this->load->view('menu', $data);
		$this->load->view('shop', $data);
		$this->load->view('footer');
	}
}
?>