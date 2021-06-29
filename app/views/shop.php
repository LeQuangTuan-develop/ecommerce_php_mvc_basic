<!-- Breadcrumb Start -->
<div class="breadcrumb-area mt-30">
    <div class="container">
        <div class="breadcrumb">
            <ul class="d-flex align-items-center">
                <li><a href="index.html">Home</a></li>
                <li class="active"><a href="product.html">Shop</a></li>
            </ul>
        </div>
    </div>
    <!-- Container End -->
</div>
<!-- Breadcrumb End -->
<!-- Shop Page Start -->
<div class="main-shop-page pt-100 pb-100 ptb-sm-60">
    <div class="container">
        <!-- Row End -->
        <div class="row">
            <!-- Sidebar Shopping Option Start -->
            <div class="col-lg-3 order-2 order-lg-1">
                <div class="sidebar">
                    <!-- Sidebar Electronics Categorie Start -->
                    <div class="electronics mb-40">
                        <h3 class="sidebar-title">Electronics</h3>
                        <div id="shop-cate-toggle" class="category-menu sidebar-menu sidbar-style">
                            <ul>
                                <li class="has-sub"><a href="#">Camera</a>
                                    <ul class="category-sub">
                                        <li><a href="shop.html">Cords and Cables</a></li>
                                        <li><a href="shop.html">gps accessories</a></li>
                                        <li><a href="shop.html">Microphones</a></li>
                                        <li><a href="shop.html">Wireless Transmitters</a></li>
                                    </ul>
                                    <!-- category submenu end-->
                                </li>
                                <li class="has-sub"><a href="#">gamepad</a>
                                    <ul class="category-sub">
                                        <li><a href="shop.html">cube lifestyle hd</a></li>
                                        <li><a href="shop.html">gopro hero4</a></li>
                                        <li><a href="shop.html">bhandycam cx405ags</a></li>
                                        <li><a href="shop.html">vixia hf r600</a></li>
                                    </ul>
                                    <!-- category submenu end-->
                                </li>
                                <li class="has-sub"><a href="#">Digital Cameras</a>
                                    <ul class="category-sub">
                                        <li><a href="shop.html">Gold eye</a></li>
                                        <li><a href="shop.html">Questek</a></li>
                                        <li><a href="shop.html">Snm</a></li>
                                        <li><a href="shop.html">vantech</a></li>
                                    </ul>
                                    <!-- category submenu end-->
                                </li>
                                <li class="has-sub"><a href="#">Virtual Reality</a>
                                    <ul class="category-sub">
                                        <li><a href="shop.html">Samsung</a></li>
                                        <li><a href="shop.html">Toshiba</a></li>
                                        <li><a href="shop.html">Transcend</a></li>
                                        <li><a href="shop.html">Sandisk</a></li>
                                    </ul>
                                    <!-- category submenu end-->
                                </li>
                            </ul>
                        </div>
                        <!-- category-menu-end -->
                    </div>
                    <!-- Sidebar Electronics Categorie End -->
                    <!-- Price Filter Options Start -->
                    <div class="search-filter mb-40">
                        <h3 class="sidebar-title">filter by price</h3>
                        <form action="#" class="sidbar-style">
                            <div id="slider-range"></div>
                            <input type="text" id="amount" class="amount-range" readonly="">
                        </form>
                    </div>
                    <!-- Price Filter Options End -->
                    <!-- Sidebar Categorie Start -->
                    <div class="sidebar-categorie mb-40">
                        <h3 class="sidebar-title">categories</h3>
                        <ul class="sidbar-style">
                            <li class="form-check">
                                <input class="form-check-input" value="#" id="camera" type="checkbox">
                                <label class="form-check-label" for="camera">Cameras (8)</label>
                            </li>
                            <li class="form-check">
                                <input class="form-check-input" value="#" id="GamePad" type="checkbox">
                                <label class="form-check-label" for="GamePad">GamePad (8)</label>
                            </li>
                            <li class="form-check">
                                <input class="form-check-input" value="#" id="Digital" type="checkbox">
                                <label class="form-check-label" for="Digital">Digital Cameras (8)</label>
                            </li>
                            <li class="form-check">
                                <input class="form-check-input" value="#" id="Virtual" type="checkbox">
                                <label class="form-check-label" for="Virtual"> Virtual Reality (8) </label>
                            </li>
                        </ul>
                    </div>
                    <!-- Sidebar Categorie Start -->
                    <!-- Product Size Start -->
                    <div class="size mb-40">
                        <h3 class="sidebar-title">size</h3>
                        <ul class="size-list sidbar-style">
                            <li class="form-check">
                                <input class="form-check-input" value="" id="small" type="checkbox">
                                <label class="form-check-label" for="small">S (6)</label>
                            </li>
                            <li class="form-check">
                                <input class="form-check-input" value="" id="medium" type="checkbox">
                                <label class="form-check-label" for="medium">M (9)</label>
                            </li>
                            <li class="form-check">
                                <input class="form-check-input" value="" id="large" type="checkbox">
                                <label class="form-check-label" for="large">L (8)</label>
                            </li>
                        </ul>
                    </div>
                    <!-- Product Size End -->
                    <!-- Product Color Start -->
                    <div class="color mb-40">
                        <h3 class="sidebar-title">color</h3>
                        <ul class="color-option sidbar-style">
                            <li>
                                <span class="white"></span>
                                <a href="#">white (4)</a>
                            </li>
                            <li>
                                <span class="orange"></span>
                                <a href="#">Orange (2)</a>
                            </li>
                            <li>
                                <span class="blue"></span>
                                <a href="#">Blue (6)</a>
                            </li>
                            <li>
                                <span class="yellow"></span>
                                <a href="#">Yellow (8)</a>
                            </li>
                        </ul>
                    </div>
                    <!-- Product Color End -->
                    <!-- Product Top Start -->
                    <div class="top-new mb-40">
                        <h3 class="sidebar-title">Top New</h3>
                        <div class="side-product-active owl-carousel">
                            <!-- Side Item Start -->
                            <div class="side-pro-item">
                                <?php foreach ($productsTopNew as $top): ?>
                                <!-- Single Product Start -->
                                <div class="single-product single-product-sidebar">
                                    <!-- Product Image Start -->
                                    <div class="pro-img">
                                        <a href="<?= BASE_URL?>/product/product_detail/<?php {{echo $top['product_id'];}}?>">
                                            <img class="primary-img" src="<?= BASE_URL ?>\public\images\products\<?php {{echo $top['image'];}}?>" alt="single-product">
                                        </a>
                                        <!-- <div class="label-product l_sale">30<span class="symbol-percent">%</span></div> -->
                                    </div>
                                    <!-- Product Image End -->
                                    <!-- Product Content Start -->
                                    <div class="pro-content">
                                        <h4><a href="<?= BASE_URL?>/product/product_detail/<?php {{echo $top['product_id'];}}?>"><?php {{echo $top['product_name'];}}?></a></h4>
                                        <p><span class="price"><?php {{echo $top['list_price'];}}?></span><del class="prev-price">180.50</del></p>
                                    </div>
                                    <!-- Product Content End -->
                                </div>
                                <!-- Single Product End -->
                                <?php endforeach; ?>
                            </div>
                            <!-- Side Item End -->
                            <!-- Side Item Start -->
                            <div class="side-pro-item">
                                <!-- Single Product Start -->
                                <div class="single-product single-product-sidebar">
                                    <!-- Product Image Start -->
                                    <div class="pro-img">
                                        <a href="product.html">
                                            <img class="primary-img" src="<?= BASE_URL ?>\public\images\products\41.jpg" alt="single-product">
                                            <img class="secondary-img" src="<?= BASE_URL ?>\public\images\products\42.jpg" alt="single-product">
                                        </a>
                                    </div>
                                    <!-- Product Image End -->
                                    <!-- Product Content Start -->
                                    <div class="pro-content">
                                        <h4><a href="product.html">Silver Work Lamp Proin</a></h4>
                                        <p><span class="price">$80.45</span><del class="prev-price">$100.50</del></p>
                                    </div>
                                    <!-- Product Content End -->
                                </div>
                                <!-- Single Product End -->
                                <!-- Single Product Start -->
                                <div class="single-product single-product-sidebar">
                                    <!-- Product Image Start -->
                                    <div class="pro-img">
                                        <a href="product.html">
                                            <img class="primary-img" src="<?= BASE_URL ?>\public\images\products\36.jpg" alt="single-product">
                                            <img class="secondary-img" src="<?= BASE_URL ?>\public\images\products\35.jpg" alt="single-product">
                                        </a>
                                    </div>
                                    <!-- Product Image End -->
                                    <!-- Product Content Start -->
                                    <div class="pro-content">
                                        <h4><a href="product.html">Silver Work Lamp Proin</a></h4>
                                        <p><span class="price">$320.45</span><del class="prev-price">$400.50</del></p>
                                    </div>
                                    <!-- Product Content End -->
                                </div>
                                <!-- Single Product End -->
                                <!-- Single Product Start -->
                                <div class="single-product single-product-sidebar">
                                    <!-- Product Image Start -->
                                    <div class="pro-img">
                                        <a href="product.html">
                                            <img class="primary-img" src="<?= BASE_URL ?>\public\images\products\33.jpg" alt="single-product">
                                            <img class="secondary-img" src="<?= BASE_URL ?>\public\images\products\34.jpg" alt="single-product">
                                        </a>
                                    </div>
                                    <!-- Product Image End -->
                                    <!-- Product Content Start -->
                                    <div class="pro-content">
                                        <h4><a href="product.html">Lamp Proin Work Silver </a></h4>
                                        <p><span class="price">$120.45</span><del class="prev-price">130.50</del></p>
                                    </div>
                                    <!-- Product Content End -->
                                </div>
                                <!-- Single Product End -->
                                <!-- Single Product Start -->
                                <div class="single-product single-product-sidebar">
                                    <!-- Product Image Start -->
                                    <div class="pro-img">
                                        <a href="product.html">
                                            <img class="primary-img" src="<?= BASE_URL ?>\public\images\products\31.jpg" alt="single-product">
                                            <img class="secondary-img" src="<?= BASE_URL ?>\public\images\products\32.jpg" alt="single-product">
                                        </a>
                                    </div>
                                    <!-- Product Image End -->
                                    <!-- Product Content Start -->
                                    <div class="pro-content">
                                        <h4><a href="product.html">Work Lamp Silver Proin</a></h4>
                                        <p><span class="price">$140.45</span><del class="prev-price">$150.50</del></p>
                                    </div>
                                    <!-- Product Content End -->
                                </div>
                                <!-- Single Product End -->
                            </div>
                            <!-- Side Item End -->
                            <!-- Side Item Start -->
                            <div class="side-pro-item">
                                <!-- Single Product Start -->
                                <div class="single-product single-product-sidebar">
                                    <!-- Product Image Start -->
                                    <div class="pro-img">
                                        <a href="product.html">
                                            <img class="primary-img" src="<?= BASE_URL ?>\public\images\products\15.jpg" alt="single-product">
                                            <img class="secondary-img" src="<?= BASE_URL ?>\public\images\products\16.jpg" alt="single-product">
                                        </a>
                                    </div>
                                    <!-- Product Image End -->
                                    <!-- Product Content Start -->
                                    <div class="pro-content">
                                        <h4><a href="product.html">Lamp Work Silver Proin</a></h4>
                                        <p><span class="price">$320.45</span><del class="prev-price">$400.50</del></p>
                                    </div>
                                    <!-- Product Content End -->
                                </div>
                                <!-- Single Product End -->
                                <!-- Single Product Start -->
                                <div class="single-product single-product-sidebar">
                                    <!-- Product Image Start -->
                                    <div class="pro-img">
                                        <a href="product.html">
                                            <img class="primary-img" src="<?= BASE_URL ?>\public\images\products\17.jpg" alt="single-product">
                                            <img class="secondary-img" src="<?= BASE_URL ?>\public\images\products\18.jpg" alt="single-product">
                                        </a>
                                        <div class="label-product l_sale">30<span class="symbol-percent">%</span></div>
                                    </div>
                                    <!-- Product Image End -->
                                    <!-- Product Content Start -->
                                    <div class="pro-content">
                                        <h4><a href="product.html">Silver Work Lamp Proin</a></h4>
                                        <p><span class="price">$320.45</span><del class="prev-price">$400.50</del></p>
                                    </div>
                                    <!-- Product Content End -->
                                </div>
                                <!-- Single Product End -->
                                <!-- Single Product Start -->
                                <div class="single-product single-product-sidebar">
                                    <!-- Product Image Start -->
                                    <div class="pro-img">
                                        <a href="product.html">
                                            <img class="primary-img" src="<?= BASE_URL ?>\public\images\products\23.jpg" alt="single-product">
                                            <img class="secondary-img" src="<?= BASE_URL ?>\public\images\products\24.jpg" alt="single-product">
                                        </a>
                                    </div>
                                    <!-- Product Image End -->
                                    <!-- Product Content Start -->
                                    <div class="pro-content">
                                        <h4><a href="product.html">Proin Work Lamp Silver </a></h4>
                                        <p><span class="price">$320.45</span><del class="prev-price">$400.50</del></p>
                                    </div>
                                    <!-- Product Content End -->
                                </div>
                                <!-- Single Product End -->
                                <!-- Single Product Start -->
                                <div class="single-product single-product-sidebar">
                                    <!-- Product Image Start -->
                                    <div class="pro-img">
                                        <a href="product.html">
                                            <img class="primary-img" src="<?= BASE_URL ?>\public\images\products\25.jpg" alt="single-product">
                                            <img class="secondary-img" src="<?= BASE_URL ?>\public\images\products\26.jpg" alt="single-product">
                                        </a>
                                    </div>
                                    <!-- Product Image End -->
                                    <!-- Product Content Start -->
                                    <div class="pro-content">
                                        <h4><a href="product.html">Work Lamp Silver Proin</a></h4>
                                        <p><span class="price">$320.45</span><del class="prev-price">$400.50</del></p>
                                    </div>
                                    <!-- Product Content End -->
                                </div>
                                <!-- Single Product End -->
                            </div>
                            <!-- Side Item End -->
                        </div>
                    </div>
                    <!-- Product Top End -->
                     <!-- Product Trend Search Start -->
                     <div class="top-new mb-40">
                        <h3 class="sidebar-title">Xu hướng tìm kiếm</h3>
                        <div class="side-product-active owl-carousel">
                            <!-- Side Item Start -->
                            <div class="side-pro-item">
                                <?php foreach ($productsTrend as $trend): ?>
                                <!-- Single Product Start -->
                                <div class="single-product single-product-sidebar">
                                    <!-- Product Image Start -->
                                    <div class="pro-img">
                                        <a href="<?= BASE_URL?>/product/product_detail/<?php {{echo $trend['product_id'];}}?>">
                                            <img class="primary-img" src="<?= BASE_URL ?>\public\images\products\<?php {{echo $trend['image'];}}?>" alt="single-product">
                                        </a>
                                        <!-- <div class="label-product l_sale">30<span class="symbol-percent">%</span></div> -->
                                    </div>
                                    <!-- Product Image End -->
                                    <!-- Product Content Start -->
                                    <div class="pro-content">
                                        <h4><a href="<?= BASE_URL?>/product/product_detail/<?php {{echo $trend['product_id'];}}?>"><?php {{echo $trend['product_name'];}}?></a></h4>
                                        <p><span class="price"><?php {{echo $trend['list_price'];}}?></span><del class="prev-price">180.50</del></p>
                                    </div>
                                    <!-- Product Content End -->
                                </div>
                                <!-- Single Product End -->
                                <?php endforeach; ?>
                            </div>
                            <!-- Side Item End -->
                            <!-- Side Item Start -->
                            <div class="side-pro-item">
                                <!-- Single Product Start -->
                                <div class="single-product single-product-sidebar">
                                    <!-- Product Image Start -->
                                    <div class="pro-img">
                                        <a href="product.html">
                                            <img class="primary-img" src="<?= BASE_URL ?>\public\images\products\41.jpg" alt="single-product">
                                            <img class="secondary-img" src="<?= BASE_URL ?>\public\images\products\42.jpg" alt="single-product">
                                        </a>
                                    </div>
                                    <!-- Product Image End -->
                                    <!-- Product Content Start -->
                                    <div class="pro-content">
                                        <h4><a href="product.html">Silver Work Lamp Proin</a></h4>
                                        <p><span class="price">$80.45</span><del class="prev-price">$100.50</del></p>
                                    </div>
                                    <!-- Product Content End -->
                                </div>
                                <!-- Single Product End -->
                                <!-- Single Product Start -->
                                <div class="single-product single-product-sidebar">
                                    <!-- Product Image Start -->
                                    <div class="pro-img">
                                        <a href="product.html">
                                            <img class="primary-img" src="<?= BASE_URL ?>\public\images\products\36.jpg" alt="single-product">
                                            <img class="secondary-img" src="<?= BASE_URL ?>\public\images\products\35.jpg" alt="single-product">
                                        </a>
                                    </div>
                                    <!-- Product Image End -->
                                    <!-- Product Content Start -->
                                    <div class="pro-content">
                                        <h4><a href="product.html">Silver Work Lamp Proin</a></h4>
                                        <p><span class="price">$320.45</span><del class="prev-price">$400.50</del></p>
                                    </div>
                                    <!-- Product Content End -->
                                </div>
                                <!-- Single Product End -->
                                <!-- Single Product Start -->
                                <div class="single-product single-product-sidebar">
                                    <!-- Product Image Start -->
                                    <div class="pro-img">
                                        <a href="product.html">
                                            <img class="primary-img" src="<?= BASE_URL ?>\public\images\products\33.jpg" alt="single-product">
                                            <img class="secondary-img" src="<?= BASE_URL ?>\public\images\products\34.jpg" alt="single-product">
                                        </a>
                                    </div>
                                    <!-- Product Image End -->
                                    <!-- Product Content Start -->
                                    <div class="pro-content">
                                        <h4><a href="product.html">Lamp Proin Work Silver </a></h4>
                                        <p><span class="price">$120.45</span><del class="prev-price">130.50</del></p>
                                    </div>
                                    <!-- Product Content End -->
                                </div>
                                <!-- Single Product End -->
                                <!-- Single Product Start -->
                                <div class="single-product single-product-sidebar">
                                    <!-- Product Image Start -->
                                    <div class="pro-img">
                                        <a href="product.html">
                                            <img class="primary-img" src="<?= BASE_URL ?>\public\images\products\31.jpg" alt="single-product">
                                            <img class="secondary-img" src="<?= BASE_URL ?>\public\images\products\32.jpg" alt="single-product">
                                        </a>
                                    </div>
                                    <!-- Product Image End -->
                                    <!-- Product Content Start -->
                                    <div class="pro-content">
                                        <h4><a href="product.html">Work Lamp Silver Proin</a></h4>
                                        <p><span class="price">$140.45</span><del class="prev-price">$150.50</del></p>
                                    </div>
                                    <!-- Product Content End -->
                                </div>
                                <!-- Single Product End -->
                            </div>
                            <!-- Side Item End -->
                            <!-- Side Item Start -->
                            <div class="side-pro-item">
                                <!-- Single Product Start -->
                                <div class="single-product single-product-sidebar">
                                    <!-- Product Image Start -->
                                    <div class="pro-img">
                                        <a href="product.html">
                                            <img class="primary-img" src="<?= BASE_URL ?>\public\images\products\15.jpg" alt="single-product">
                                            <img class="secondary-img" src="<?= BASE_URL ?>\public\images\products\16.jpg" alt="single-product">
                                        </a>
                                    </div>
                                    <!-- Product Image End -->
                                    <!-- Product Content Start -->
                                    <div class="pro-content">
                                        <h4><a href="product.html">Lamp Work Silver Proin</a></h4>
                                        <p><span class="price">$320.45</span><del class="prev-price">$400.50</del></p>
                                    </div>
                                    <!-- Product Content End -->
                                </div>
                                <!-- Single Product End -->
                                <!-- Single Product Start -->
                                <div class="single-product single-product-sidebar">
                                    <!-- Product Image Start -->
                                    <div class="pro-img">
                                        <a href="product.html">
                                            <img class="primary-img" src="<?= BASE_URL ?>\public\images\products\17.jpg" alt="single-product">
                                            <img class="secondary-img" src="<?= BASE_URL ?>\public\images\products\18.jpg" alt="single-product">
                                        </a>
                                        <div class="label-product l_sale">30<span class="symbol-percent">%</span></div>
                                    </div>
                                    <!-- Product Image End -->
                                    <!-- Product Content Start -->
                                    <div class="pro-content">
                                        <h4><a href="product.html">Silver Work Lamp Proin</a></h4>
                                        <p><span class="price">$320.45</span><del class="prev-price">$400.50</del></p>
                                    </div>
                                    <!-- Product Content End -->
                                </div>
                                <!-- Single Product End -->
                                <!-- Single Product Start -->
                                <div class="single-product single-product-sidebar">
                                    <!-- Product Image Start -->
                                    <div class="pro-img">
                                        <a href="product.html">
                                            <img class="primary-img" src="<?= BASE_URL ?>\public\images\products\23.jpg" alt="single-product">
                                            <img class="secondary-img" src="<?= BASE_URL ?>\public\images\products\24.jpg" alt="single-product">
                                        </a>
                                    </div>
                                    <!-- Product Image End -->
                                    <!-- Product Content Start -->
                                    <div class="pro-content">
                                        <h4><a href="product.html">Proin Work Lamp Silver </a></h4>
                                        <p><span class="price">$320.45</span><del class="prev-price">$400.50</del></p>
                                    </div>
                                    <!-- Product Content End -->
                                </div>
                                <!-- Single Product End -->
                                <!-- Single Product Start -->
                                <div class="single-product single-product-sidebar">
                                    <!-- Product Image Start -->
                                    <div class="pro-img">
                                        <a href="product.html">
                                            <img class="primary-img" src="<?= BASE_URL ?>\public\images\products\25.jpg" alt="single-product">
                                            <img class="secondary-img" src="<?= BASE_URL ?>\public\images\products\26.jpg" alt="single-product">
                                        </a>
                                    </div>
                                    <!-- Product Image End -->
                                    <!-- Product Content Start -->
                                    <div class="pro-content">
                                        <h4><a href="product.html">Work Lamp Silver Proin</a></h4>
                                        <p><span class="price">$320.45</span><del class="prev-price">$400.50</del></p>
                                    </div>
                                    <!-- Product Content End -->
                                </div>
                                <!-- Single Product End -->
                            </div>
                            <!-- Side Item End -->
                        </div>
                    </div>
                    <!-- Product Trend Search End -->
                    <!-- Single Banner Start -->
                    <div class="col-img">
                        <a href="shop.html"><img src="<?= BASE_URL ?>\public\images\banner\banner-sidebar.jpg" alt="slider-banner"></a>
                    </div>
                    <!-- Single Banner End -->
                </div>
            </div>
            <!-- Sidebar Shopping Option End -->
            <!-- Product Categorie List Start -->
            <div class="col-lg-9 order-1 order-lg-2">
                <!-- Grid & List View Start -->
                <div class="grid-list-top border-default universal-padding d-md-flex justify-content-md-between align-items-center mb-30">
                    <div class="grid-list-view  mb-sm-15">
                        <ul class="nav tabs-area d-flex align-items-center">
                            <li><a class="active" data-toggle="tab" href="#grid-view"><i class="fa fa-th"></i></a></li>
                            <li><a data-toggle="tab" href="#list-view"><i class="fa fa-list-ul"></i></a></li>
                        </ul>
                    </div>
                    <!-- Toolbar Short Area Start -->
                    <div class="main-toolbar-sorter clearfix">
                        <div class="toolbar-sorter d-flex align-items-center">
                            <label>Sort By:</label>
                            <select class="sorter wide">
                                <option value="Position">Relevance</option>
                                <option value="Product Name">Neme, A to Z</option>
                                <option value="Product Name">Neme, Z to A</option>
                                <option value="Price">Price low to heigh</option>
                                <option value="Price" selected="">Price heigh to low</option>
                            </select>
                        </div>
                    </div>
                    <!-- Toolbar Short Area End -->
                    <!-- Toolbar Short Area Start -->
                    <div class="main-toolbar-sorter clearfix">
                        <div class="toolbar-sorter d-flex align-items-center">
                            <label>Show:</label>
                            <select class="sorter wide">
                                <option value="12">12</option>
                                <option value="25">25</option>
                                <option value="50">50</option>
                                <option value="75">75</option>
                                <option value="100">100</option>
                            </select>
                        </div>
                    </div>
                    <!-- Toolbar Short Area End -->
                </div>
                <!-- Grid & List View End -->
                <div class="main-categorie mb-all-40">
                    <!-- Grid & List Main Area End -->
                    <div class="tab-content fix">
                        <div id="grid-view" class="tab-pane fade show active">
                            <div class="row">
                                <?php foreach($products as $product): ?>
                                <!-- Single Product Start -->
                                <div class="col-lg-4 col-md-4 col-sm-6 col-6">
                                    <div class="single-product">
                                        <!-- Product Image Start -->
                                        <div class="pro-img">
                                            <a href="<?= BASE_URL ?>/product/product_detail/<?php {{ echo $product['product_id'];}} ?>">
                                                <img class="primary-img" src="<?= BASE_URL ?>\public\images\products\<?php {{ echo $product['image'];}} ?>" alt="single-product">
                                                <img class="secondary-img" src="<?= BASE_URL ?>\public\images\products\<?php {{ echo $product['image'];}} ?>" alt="single-product">
                                            </a>
                                            <a href="#" class="quick_view" data-toggle="modal" data-target="#myModal" title="Quick View"><i class="lnr lnr-magnifier"></i></a>
                                        </div>
                                        <!-- Product Image End -->
                                        <!-- Product Content Start -->
                                        <div class="pro-content">
                                        <div class="pro-info">
                                            <h4><a href="product.html"><?php {{ echo $product['product_name'];}} ?></a></h4>
                                                <p>
                                                    <?php 
                                                        $count = 0; 
                                                        $discount_amount = 0;
                                                    ?>
                                                    <?php foreach($discounts as $discount): ?>
                                                    <?php if($discount['product_id'] == $product['product_id']): ?>
                                                    <span class="price"><?php {{ echo (1 - $discount['discount_amount'])*100*$product['list_price'];}}?></span>
                                                    <del class="prev-price"><?php {{ echo $product['list_price']; }}?></del>
                                                    <?php 
                                                        $count++;
                                                        $discount_amount = $discount['discount_amount'];    
                                                    ?>
                                                    <?php endif; ?>
                                                    <?php endforeach; ?>
                                                    <?php if($count == 0): ?>
                                                    <span class="price">$<?php {{ echo $product['list_price']; }}?></span>
                                                    <?php endif;?>
                                                </p>
                                                <div class="label-product l_sale">
                                                    <?php if($discount_amount != 0)
                                                        {{ echo ($discount_amount*100)."%";}}
                                                    ?>
                                                </div>
                                            </div>
                                            <div class="pro-actions">
                                                <div class="actions-primary">
                                                    <a href="<?= BASE_URL ?>/order/cart" title="Add to Cart"> + Add To Cart</a>
                                                </div>
                                                <div class="actions-secondary">
                                                    <a href="compare.html" title="Compare"><i class="lnr lnr-sync"></i> <span>Add To Compare</span></a>
                                                    <a href="<?= BASE_URL ?>/product/wishlist" title="WishList"><i class="lnr lnr-heart"></i> <span>Add to WishList</span></a>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Product Content End -->
                                    </div>
                                </div>
                                <!-- Single Product End -->
                                <?php endforeach; ?>
                            </div>
                            <!-- Row End -->
                        </div>
                        <!-- #grid view End -->
                        <div id="list-view" class="tab-pane fade">
                            <!-- Single Product Start -->
                            <div class="single-product">
                                <div class="row">
                                    <!-- Product Image Start -->
                                    <div class="col-lg-4 col-md-5 col-sm-12">
                                        <div class="pro-img">
                                            <a href="product.html">
                                                <img class="primary-img" src="<?= BASE_URL ?>\public\images\products\23.jpg" alt="single-product">
                                                <img class="secondary-img" src="<?= BASE_URL ?>\public\images\products\24.jpg" alt="single-product">
                                            </a>
                                            <a href="#" class="quick_view" data-toggle="modal" data-target="#myModal" title="Quick View"><i class="lnr lnr-magnifier"></i></a>
                                            <span class="sticker-new">new</span>
                                        </div>
                                    </div>
                                    <!-- Product Image End -->
                                    <!-- Product Content Start -->
                                    <div class="col-lg-8 col-md-7 col-sm-12">
                                        <div class="pro-content hot-product2">
                                            <h4><a href="product.html">Accessorize with a straw hat</a></h4>
                                            <p><span class="price">$15.19</span></p>
                                            <p>Faded short sleeves t-shirt with high neckline. Soft and stretchy material for a comfortable fit. Accessorize with a straw hat and you're ready for summer!Faded short sleeves t-shirt with high neckline. Soft and stretchy material.</p>
                                            <div class="pro-actions">
                                                <div class="actions-primary">
                                                    <a href="cart.html" title="" data-original-title="Add to Cart"> + Add To Cart</a>
                                                </div>
                                                <div class="actions-secondary">
                                                    <a href="compare.html" title="" data-original-title="Compare"><i class="lnr lnr-sync"></i> <span>Add To Compare</span></a>
                                                    <a href="wishlist.html" title="" data-original-title="WishList"><i class="lnr lnr-heart"></i> <span>Add to WishList</span></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Product Content End -->
                                </div>
                            </div>
                            <!-- Single Product End -->
                            <!-- Single Product Start -->
                            <div class="single-product">
                                <div class="row">
                                    <!-- Product Image Start -->
                                    <div class="col-lg-4 col-md-5 col-sm-12">
                                        <div class="pro-img">
                                            <a href="product.html">
                                                <img class="primary-img" src="<?= BASE_URL ?>\public\images\products\30.jpg" alt="single-product">
                                                <img class="secondary-img" src="<?= BASE_URL ?>\public\images\products\31.jpg" alt="single-product">
                                            </a>
                                            <a href="#" class="quick_view" data-toggle="modal" data-target="#myModal" title="Quick View"><i class="lnr lnr-magnifier"></i></a>
                                        </div>
                                    </div>
                                    <!-- Product Image End -->
                                    <!-- Product Content Start -->
                                    <div class="col-lg-8 col-md-7 col-sm-12">
                                        <div class="pro-content hot-product2">
                                            <h4><a href="product.html">Tretchy Material Comfortable</a></h4>
                                            <p><span class="price">$199.19</span><del class="prev-price">$205.50</del></p>
                                            <p>Faded short sleeves t-shirt with high neckline. Soft and stretchy material for a comfortable fit. Accessorize with a straw hat and you're ready for summer!Faded short sleeves t-shirt with high neckline. Soft and stretchy material.</p>
                                            <div class="pro-actions">
                                                <div class="actions-primary">
                                                    <a href="cart.html" title="" data-original-title="Add to Cart"> + Add To Cart</a>
                                                </div>
                                                <div class="actions-secondary">
                                                    <a href="compare.html" title="" data-original-title="Compare"><i class="lnr lnr-sync"></i> <span>Add To Compare</span></a>
                                                    <a href="wishlist.html" title="" data-original-title="WishList"><i class="lnr lnr-heart"></i> <span>Add to WishList</span></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Product Content End -->
                                </div>
                            </div>
                            <!-- Single Product End -->
                            <!-- Single Product Start -->
                            <div class="single-product">
                                <div class="row">
                                    <!-- Product Image Start -->
                                    <div class="col-lg-4 col-md-5 col-sm-12">
                                        <div class="pro-img">
                                            <a href="product.html">
                                                <img class="primary-img" src="<?= BASE_URL ?>\public\images\products\41.jpg" alt="single-product">
                                                <img class="secondary-img" src="<?= BASE_URL ?>\public\images\products\42.jpg" alt="single-product">
                                            </a>
                                            <a href="#" class="quick_view" data-toggle="modal" data-target="#myModal" title="Quick View"><i class="lnr lnr-magnifier"></i></a>
                                            <span class="sticker-new">new</span>
                                        </div>
                                    </div>
                                    <!-- Product Image End -->
                                    <!-- Product Content Start -->
                                    <div class="col-lg-8 col-md-7 col-sm-12">
                                        <div class="pro-content hot-product2">
                                            <h4><a href="product.html">Neckline Short Sleeves Stretchy</a></h4>
                                            <p><span class="price">$58.19</span></p>
                                            <p>Faded short sleeves t-shirt with high neckline. Soft and stretchy material for a comfortable fit. Accessorize with a straw hat and you're ready for summer!Faded short sleeves t-shirt with high neckline. Soft and stretchy material.</p>
                                            <div class="pro-actions">
                                                <div class="actions-primary">
                                                    <a href="cart.html" title="" data-original-title="Add to Cart"> + Add To Cart</a>
                                                </div>
                                                <div class="actions-secondary">
                                                    <a href="compare.html" title="" data-original-title="Compare"><i class="lnr lnr-sync"></i> <span>Add To Compare</span></a>
                                                    <a href="wishlist.html" title="" data-original-title="WishList"><i class="lnr lnr-heart"></i> <span>Add to WishList</span></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Product Content End -->
                                </div>
                            </div>
                            <!-- Single Product End -->
                            <!-- Single Product Start -->
                            <div class="single-product">
                                <div class="row">
                                    <!-- Product Image Start -->
                                    <div class="col-lg-4 col-md-5 col-sm-12">
                                        <div class="pro-img">
                                            <a href="product.html">
                                                <img class="primary-img" src="<?= BASE_URL ?>\public\images\products\1.jpg" alt="single-product">
                                                <img class="secondary-img" src="<?= BASE_URL ?>\public\images\products\2.jpg" alt="single-product">
                                            </a>
                                            <a href="#" class="quick_view" data-toggle="modal" data-target="#myModal" title="Quick View"><i class="lnr lnr-magnifier"></i></a>
                                        </div>
                                    </div>
                                    <!-- Product Image End -->
                                    <!-- Product Content Start -->
                                    <div class="col-lg-8 col-md-7 col-sm-12">
                                        <div class="pro-content hot-product2">
                                            <h4><a href="product.html">Accessorize with a straw hat</a></h4>
                                            <p><span class="price">$152.19</span><del class="prev-price">$160.50</del></p>
                                            <p>Faded short sleeves t-shirt with high neckline. Soft and stretchy material for a comfortable fit. Accessorize with a straw hat and you're ready for summer!Faded short sleeves t-shirt with high neckline. Soft and stretchy material.</p>
                                            <div class="pro-actions">
                                                <div class="actions-primary">
                                                    <a href="cart.html" title="" data-original-title="Add to Cart"> + Add To Cart</a>
                                                </div>
                                                <div class="actions-secondary">
                                                    <a href="compare.html" title="" data-original-title="Compare"><i class="lnr lnr-sync"></i> <span>Add To Compare</span></a>
                                                    <a href="wishlist.html" title="" data-original-title="WishList"><i class="lnr lnr-heart"></i> <span>Add to WishList</span></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Product Content End -->
                                </div>
                            </div>
                            <!-- Single Product End -->
                            <!-- Single Product Start -->
                            <div class="single-product">
                                <div class="row">
                                    <!-- Product Image Start -->
                                    <div class="col-lg-4 col-md-5 col-sm-12">
                                        <div class="pro-img">
                                            <a href="product.html">
                                                <img class="primary-img" src="<?= BASE_URL ?>\public\images\products\23.jpg" alt="single-product">
                                                <img class="secondary-img" src="<?= BASE_URL ?>\public\images\products\24.jpg" alt="single-product">
                                            </a>
                                            <a href="#" class="quick_view" data-toggle="modal" data-target="#myModal" title="Quick View"><i class="lnr lnr-magnifier"></i></a>
                                        </div>
                                    </div>
                                    <!-- Product Image End -->
                                    <!-- Product Content Start -->
                                    <div class="col-lg-8 col-md-7 col-sm-12">
                                        <div class="pro-content hot-product2">
                                            <h4><a href="product.html">Faded Short Sleeves T-shirt</a></h4>
                                            <p><span class="price">$15.19</span><del class="prev-price">$16.50</del></p>
                                            <p>Faded short sleeves t-shirt with high neckline. Soft and stretchy material for a comfortable fit. Accessorize with a straw hat and you're ready for summer!Faded short sleeves t-shirt with high neckline. Soft and stretchy material.</p>
                                            <div class="pro-actions">
                                                <div class="actions-primary">
                                                    <a href="cart.html" title="" data-original-title="Add to Cart"> + Add To Cart</a>
                                                </div>
                                                <div class="actions-secondary">
                                                    <a href="compare.html" title="" data-original-title="Compare"><i class="lnr lnr-sync"></i> <span>Add To Compare</span></a>
                                                    <a href="wishlist.html" title="" data-original-title="WishList"><i class="lnr lnr-heart"></i> <span>Add to WishList</span></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Product Content End -->
                                </div>
                            </div>
                            <!-- Single Product End -->
                        </div>
                        <!-- #list view End -->
                        <div class="pro-pagination">
                            <ul class="blog-pagination">
                                <li class="active"><a href="#">1</a></li>
                                <li><a href="#">2</a></li>
                                <li><a href="#">3</a></li>
                                <li><a href="#"><i class="fa fa-angle-right"></i></a></li>
                            </ul>
                            <div class="product-pagination">
                                <span class="grid-item-list">Showing 1 to 12 of 51 (5 Pages)</span>
                            </div>
                        </div>
                        <!-- Product Pagination Info -->
                    </div>
                    <!-- Grid & List Main Area End -->
                </div>
            </div>
            <!-- product Categorie List End -->
        </div>
        <!-- Row End -->
    </div>
    <!-- Container End -->
</div>
<!-- Shop Page End -->
<!-- Support Area Start Here -->
<div class="support-area bdr-top">
    <div class="container">
        <div class="d-flex flex-wrap text-center">
            <div class="single-support">
                <div class="support-icon">
                    <i class="lnr lnr-gift"></i>
                </div>
                <div class="support-desc">
                    <h6>Great Value</h6>
                    <span>Nunc id ante quis tellus faucibus dictum in eget.</span>
                </div>
            </div>
            <div class="single-support">
                <div class="support-icon">
                    <i class="lnr lnr-rocket"></i>
                </div>
                <div class="support-desc">
                    <h6>Worlwide Delivery</h6>
                    <span>Quisque posuere enim augue, in rhoncus diam dictum non</span>
                </div>
            </div>
            <div class="single-support">
                <div class="support-icon">
                    <i class="lnr lnr-lock"></i>
                </div>
                <div class="support-desc">
                    <h6>Safe Payment</h6>
                    <span>Duis suscipit elit sem, sed mattis tellus accumsan.</span>
                </div>
            </div>
            <div class="single-support">
                <div class="support-icon">
                    <i class="lnr lnr-enter-down"></i>
                </div>
                <div class="support-desc">
                    <h6>Shop Confidence</h6>
                    <span>Faucibus dictum suscipit eget metus. Duis elit sem, sed.</span>
                </div>
            </div>
            <div class="single-support">
                <div class="support-icon">
                    <i class="lnr lnr-users"></i>
                </div>
                <div class="support-desc">
                    <h6>24/7 Help Center</h6>
                    <span>Quisque posuere enim augue, in rhoncus diam dictum non.</span>
                </div>
            </div>
        </div>
    </div>
    <!-- Container End -->
</div>
<!-- Support Area End Here -->