<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="<?= BASE_URL?>/login/dashboard">Admin Cpanel</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="<?= BASE_URL?>/login/dashboard">Trang chủ</a></li>
      <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Bài viết <span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="<?= BASE_URL?>/post/add_post">Thêm bài viết</a></li>
          <li><a href="<?= BASE_URL?>/post/">Thêm danh mục bài viết</a></li>
          <li><a href="<?= BASE_URL?>/post/list_category">Danh mục bài viết</a></li>
          <li><a href="<?= BASE_URL?>/post/list_post">Danh sách bài viết</a></li>
        </ul>
      </li>
      <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Sản phẩm <span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="<?= BASE_URL?>/product/add_product">Thêm sản phẩm</a></li>
          <li><a href="<?= BASE_URL?>/product">Thêm danh mục</a></li>
          <li><a href="<?= BASE_URL?>/product/list_category">Danh mục sản phẩm</a></li>
          <li><a href="<?= BASE_URL?>/product/list_product">Danh sách sản phẩm</a></li>
        </ul>
      </li>
      <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Đơn hàng <span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="<?= BASE_URL?>/order/add_order">Tạo đơn hàng</a></li>
          <li><a href="<?= BASE_URL?>/order">Danh sách đơn hàng</a></li>
        </ul>
      </li>
      <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Admin <span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="#">Phân quyền</a></li>
          <li><a href="#">Thông tin người dùng</a></li>
        </ul>
      </li>
    </ul>
  </div>
</nav>