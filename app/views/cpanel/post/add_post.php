<?php 
	if (!empty($_GET['msg'])) {
		$msg = unserialize(urldecode($_GET['msg']));
		echo $msg;
		foreach ($msg as $key => $value) {
			echo '<span style="color:blue;font-weight:bold">'.$value.'</span>';
		}
	}

?>

<h3>Thêm bài viết</h3>
<form action="<?= BASE_URL?>/post/insert_post" method="post" enctype='multipart/form-data'>
  <div class="form-group">
    <label >Tên bài viết</label>
    <input type="text" name="title_post" class="form-control" aria-describedby="emailHelp">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Mô tả bài viết</label>
    <textarea name="des_post" class="form-control" style="resize: none"></textarea>
  </div>
  <div class="form-group">
    <label >Hình ảnh</label>
    <input type="file" name="image_post" class="form-control">
  </div>
  <div class="form-group">
    <label >Danh mục bài viết</label>
    <select class="form-control" name="id_cate_post">
    <?php 
      foreach ($category as $key => $value) {
    ?>  
      <option value="<?= $value['id_cate_post']?>"><?= $value['name_cate_post']?></option>
    <?php 
      }
    ?>
     </select>
  </div>
  <button type="submit" class="btn btn-primary btn-sm">Thêm</button>
</form>