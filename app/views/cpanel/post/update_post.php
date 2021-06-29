<h3>Cập nhật bài viết</h3>
<form action="<?= BASE_URL?>/post/update_post/<?= $post['id_post']?>" method="post" enctype='multipart/form-data'>
  <div class="form-group">
    <label >Tên bài viết</label>
    <input type="text" name="title_post" class="form-control" aria-describedby="emailHelp" value="<?= $post['title_post']?>">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Mô tả bài viết</label>
    <textarea name="des_post" class="form-control" style="resize: none"><?= $post['des_post']?></textarea>
  </div>
  <div class="form-group">
    <label >Hình ảnh</label>
    <div class="">
    	<img src="<?= BASE_URL?>/public/uploads/post/<?= $post['image_post']?>" alt="">
    </div>
    <input type="file" name="image_post" class="form-control">
  </div>
  <div class="form-group">
    <label >Danh mục bài viết</label>
    <select class="form-control" name="id_cate_post">
    <?php 
    	foreach ($category as $key => $value) { 
	    	if ($post['id_cate_post'] == $value['id_cate_post']) {
	?>
		<option value="<?= $value['id_cate_post']?>" selected><?= $value['name_cate_post']?></option>
	<?php 
			} else {
	?>
	    <option value="<?= $value['id_cate_post']?>"><?= $value['name_cate_post']?></option>	
	<?php 
			}
    	}
	?>
    </select>
  </div>
  <button type="submit" class="btn btn-primary btn-sm">Cập nhật</button>
</form>