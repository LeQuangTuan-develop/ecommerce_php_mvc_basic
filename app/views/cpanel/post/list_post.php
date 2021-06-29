<?php 
	if (!empty($_GET['msg'])) {
		$msg = unserialize(urldecode($_GET['msg']));
		echo $msg;
		foreach ($msg as $key => $value) {
			echo '<span style="color:blue;font-weight:bold">'.$value.'</span>';
		}
	}

?>

<div class="table-responsive-md">
	<table class="table table-bordered">
	  <caption>Danh sách sản phẩm</caption>
	  <thead class="thead-dark">
	    <tr>
	      <th scope="col">stt</th>
	      <th scope="col">Tên sản phẩm</th>
	      <th scope="col">Mô tả sản phẩm</th>
	      <th scope="col">Hình ảnh</th>
	      <th scope="col">Danh mục</th>
	      <th scope="col">Thao tác</th>
	    </tr>
	  </thead>
	  <tbody>
	  	<?php 
	  		$i = 0;
	  		foreach ($post as $key => $value) {
				$i ++;
	  	?>
	    <tr>
	      <th scope="row"><?= $i ?></th>
	      <td><?= $value['title_post']?></td>
	      <td><?= $value['des_post']?></td>
	      <td>
	      	<img src="<?= BASE_URL?>/public/uploads/post/<?= $value['image_post']?>" alt="" style="width: 100px; height:100px">	
	      </td>
	       <td>
	       		<?php 
	       			foreach ($category as $key => $cate) {
	       				if ($value['id_cate_post'] == $cate['id_cate_post']) {
	       					echo $cate['name_cate_post'];
	       				}
	       			}
	       		?>
	       </td>
	      <td>
	      	<a type="button" class="btn btn-danger" href="<?= BASE_URL?>/post/delete_post/<?= $value['id_post']?>">Xóa</a>
	      	<a type="button" class="btn btn-primary" href="<?= BASE_URL?>/post/edit_post/<?= $value['id_post']?>">Cập nhật</a>
	      </td>
	    </tr>
	    <?php 
			}
	  	?>
	  </tbody>
	</table>
</div>