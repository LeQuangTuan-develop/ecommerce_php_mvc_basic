
<div class="table-responsive-md">
	<table class="table table-bordered">
	  <caption>Danh sách danh mục bài viết</caption>
	  <thead class="thead-dark">
	    <tr>
	      <th scope="col">stt</th>
	      <th scope="col">Tên danh mục</th>
	      <th scope="col">Mô tả danh mục</th>
	      <th scope="col">Thao tác</th>
	    </tr>
	  </thead>
	  <tbody>
	  	<?php 
	  		$i = 0;
	  		foreach ($category as $key => $value) {
				$i ++;
	  	?>
	    <tr>
	      <th scope="row"><?= $i ?></th>
	      <td><?= $value['name_cate_post']?></td>
	      <td><?= $value['des_cate_post']?></td>
	      <td>
	      	<a type="button" class="btn btn-danger" href="<?= BASE_URL?>/post/delete_category/<?= $value['id_cate_post']?>">Xóa</a>
	      	<a type="button" class="btn btn-primary" href="<?= BASE_URL?>/post/edit_category/<?= $value['id_cate_post']?>">Cập nhật</a>
	      </td>
	    </tr>
	    <?php 
			}
	  	?>
	  </tbody>
	</table>
</div>