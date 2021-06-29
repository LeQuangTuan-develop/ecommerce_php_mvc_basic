<?php 
	if (!empty($_GET['msg'])) {
		$msg = unserialize(urldecode($_GET['msg']));
		echo $msg;
		foreach ($msg as $key => $value) {
			echo '<span style="color:blue;font-weight:bold">'.$value.'</span>';
		}
	}

?>

<h3>Thêm danh mục bài viết</h3>
<form action="<?= BASE_URL?>/post/insert_category" method="post">
  <div class="form-group">
    <label for="exampleInputEmail1">Tên danh mục</label>
    <input type="text" name="name_cate_post" class="form-control" aria-describedby="emailHelp" placeholder="Enter email">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Mô tả</label>
    <input type="text" name="des_cate_post" class="form-control" placeholder="Password">
  </div>
  <button type="submit" class="btn btn-primary btn-sm">Thêm</button>
</form>