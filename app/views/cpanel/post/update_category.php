<h3>Cập nhật danh mục bài viết</h3>
<form action="<?= BASE_URL?>/post/update_category/<?= $category['id_cate_post']?>" method="post">
  <div class="form-group">
    <label for="exampleInputEmail1">Tên danh mục</label>
    <input type="text" name="name_cate_post" class="form-control" aria-describedby="emailHelp" value="<?= $category['name_cate_post']?>">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Mô tả</label>
    <input type="text" name="des_cate_post" class="form-control" value="<?= $category['des_cate_post']?>">
  </div>
  <button type="submit" class="btn btn-primary btn-sm">Cập nhật</button>
</form>