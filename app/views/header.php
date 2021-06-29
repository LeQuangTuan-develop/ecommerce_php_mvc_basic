<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Home || Truemart Responsive Html5 Ecommerce Template</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Favicons -->
    <link rel="shortcut icon" href="<?= BASE_URL ?>\public\images\favicon.ico">
    <!-- Fontawesome css -->
    <link rel="stylesheet" href="<?= BASE_URL ?>\public\css\font-awesome.min.css">
    <!-- Ionicons css -->
    <link rel="stylesheet" href="<?= BASE_URL ?>\public\css\ionicons.min.css">
    <!-- linearicons css -->
    <link rel="stylesheet" href="<?= BASE_URL ?>\public\css\linearicons.css">
    <!-- Nice select css -->
    <link rel="stylesheet" href="<?= BASE_URL ?>\public\css\nice-select.css">
    <!-- Jquery fancybox css -->
    <link rel="stylesheet" href="<?= BASE_URL ?>\public\css\jquery.fancybox.css">
    <!-- Jquery ui price slider css -->
    <link rel="stylesheet" href="<?= BASE_URL ?>\public\css\jquery-ui.min.css">
    <!-- Meanmenu css -->
    <link rel="stylesheet" href="<?= BASE_URL ?>\public\css\meanmenu.min.css">
    <!-- Nivo slider css -->
    <link rel="stylesheet" href="<?= BASE_URL ?>\public\css\nivo-slider.css">
    <!-- Owl carousel css -->
    <link rel="stylesheet" href="<?= BASE_URL ?>\public\css\owl.carousel.min.css">
    <!-- Bootstrap css -->
    <link rel="stylesheet" href="<?= BASE_URL ?>\public\css\bootstrap.min.css">
    <!-- Custom css -->
    <link rel="stylesheet" href="<?= BASE_URL ?>\public\css\default.css">
    <!-- Main css -->
    <link rel="stylesheet" href="<?= BASE_URL ?>\public\css\style.css">
    <!-- Responsive css -->
    <link rel="stylesheet" href="<?= BASE_URL ?>\public\css\responsive.css">

    <!-- Modernizer js -->
    <script src="<?= BASE_URL ?>\public\js\vendor\modernizr-3.5.0.min.js"></script>
</head>

<body>
    <!--[if lte IE 9]>
        <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
    <![endif]-->

    <!-- Main Wrapper Start Here -->
    <div class="wrapper">
        <!-- Banner Popup Start -->
        <div class="popup_banner">
            <span class="popup_off_banner">×</span>
            <div class="banner_popup_area">
                    <img src="<?= BASE_URL ?>\public\images\banner\pop-banner.jpg" alt="">
            </div>
        </div>
        <!-- Banner Popup End -->
       <!-- Newsletter Popup Start -->
        <div class="popup_wrapper">
            <div class="test">
                <span class="popup_off">Close</span>
                <div class="subscribe_area text-center mt-60">
                    <h2>Newsletter</h2>
                    <p>Subscribe to the Truemart mailing list to receive updates on new arrivals, special offers and other discount information.</p>
                    <div class="subscribe-form-group">
                        <form action="#">
                            <input autocomplete="off" type="text" name="message" id="message" placeholder="Enter your email address">
                            <button type="submit">subscribe</button>
                        </form>
                    </div>
                    <div class="subscribe-bottom mt-15">
                        <input type="checkbox" id="newsletter-permission">
                        <label for="newsletter-permission">Don't show this popup again</label>
                    </div>
                </div>
            </div>
        </div>
        <!-- Newsletter Popup End -->
        <!-- Main Header Area Start Here -->
        <header>
            <!-- Header Middle Start Here -->
            <div class="header-middle ptb-15">
                <div class="container">
                    <div class="row align-items-center no-gutters">
                        <div class="col-lg-3 col-md-12">
                            <div class="logo mb-all-30">
                                <a href="<?= BASE_URL ?>"><img src="<?= BASE_URL ?>\public\images\logo\logo.png" alt="logo-image"></a>
                            </div>
                        </div>
                        <!-- Categorie Search Box Start Here -->
                        <div class="col-lg-5 col-md-8 ml-auto mr-auto col-10">
                            <div class="categorie-search-box">
                                <form action="<?= BASE_URL ?>/product/search" method="post">
                                    <div class="form-group">
                                        <select class="bootstrap-select" name="categoryId">
                                            <option value="0">Tất cả danh mục</option>
                                            <?php foreach ($categories as $category):?>
                                            <option value="<?php {{ echo $category['category_id'];}} ?>"><?php {{ echo $category['category_name'];}} ?></option>
                                            <?php endforeach; ?>
                                        </select>
                                    </div>
                                    <input type="text" name="search" placeholder="I’m shopping for...">
                                    <button type="submit"><i class="lnr lnr-magnifier"></i></button>
                                </form>
                            </div>
                        </div>

                        <!-- Categorie Search Box End Here -->
                        <!-- Cart Box Start Here -->
                        <div class="col-lg-4 col-md-12">
                            <div class="cart-box mt-all-30">
                                <ul class="d-flex justify-content-lg-end justify-content-center align-items-center">
                                    <li><a href="<?= BASE_URL?>/order/cart"><i class="lnr lnr-cart"></i><span class="my-cart"><span class="total-pro">2</span><span>cart</span></span></a>
                                        <ul class="ht-dropdown cart-box-width">
                                            <li>
                                                <!-- Cart Box Start -->
                                                <div class="single-cart-box">
                                                    <div class="cart-img">
                                                        <a href="<?= BASE_URL ?>/product/product_detail"><img src="<?= BASE_URL ?>\public\images\products\1.jpg" alt="cart-image"></a>
                                                        <span class="pro-quantity">1X</span>
                                                    </div>
                                                    <div class="cart-content">
                                                        <h6><a href="<?= BASE_URL ?>/product/product_detail">Printed Summer Red </a></h6>
                                                        <span class="cart-price">27.45</span>
                                                        <span>Size: S</span>
                                                        <span>Color: Yellow</span>
                                                    </div>
                                                    <a class="del-icone" href="#"><i class="ion-close"></i></a>
                                                </div>
                                                <!-- Cart Box End -->
                                                <!-- Cart Box Start -->
                                                <div class="single-cart-box">
                                                    <div class="cart-img">
                                                        <a href="<?= BASE_URL ?>/product/product_detail"><img src="<?= BASE_URL ?>\public\images\products\2.jpg" alt="cart-image"></a>
                                                        <span class="pro-quantity">1X</span>
                                                    </div>
                                                    <div class="cart-content">
                                                        <h6><a href="<?= BASE_URL ?>/product/product_detail">Printed Round Neck</a></h6>
                                                        <span class="cart-price">45.00</span>
                                                        <span>Size: XL</span>
                                                        <span>Color: Green</span>
                                                    </div>
                                                    <a class="del-icone" href="#"><i class="ion-close"></i></a>
                                                </div>
                                                <!-- Cart Box End -->
                                                <!-- Cart Footer Inner Start -->
                                                <div class="cart-footer">
                                                   <ul class="price-content">
                                                       <li>Subtotal <span>$57.95</span></li>
                                                       <li>Shipping <span>$7.00</span></li>
                                                       <li>Taxes <span>$0.00</span></li>
                                                       <li>Total <span>$64.95</span></li>
                                                   </ul>
                                                    <div class="cart-actions text-center">
                                                        <a class="cart-checkout" href="<?= BASE_URL ?>/order/checkout">Checkout</a>
                                                    </div>
                                                </div>
                                                <!-- Cart Footer Inner End -->
                                            </li>
                                        </ul>
                                    </li>
                                    <li><a href="<?= BASE_URL ?>/product/wishlist"><i class="lnr lnr-heart"></i><span class="my-cart"><span>Wish</span><span>list (0)</span></span></a>
                                    </li>
                                    <li>
                                        <?php if (isset($_SESSION['login_customer'])): ?>
                                        <div class="user_login" style="display: flex; align-items: center; justify-content: center; position: relative">
                                            <div class="user_avatar" style="border-radius: 20%; width: 40px; height: 40px; overflow: hidden; margin-right: 8px">
                                                <?php if($_SESSION['customer_avatar'] == ""):?>
                                                    <img src="<?= BASE_URL?>/public/images/customers/avatar-default" alt="logo" style="width: 100%;">
                                                <?php else:?>
                                                    <img src="<?= BASE_URL?>/public/images/customers/<?php {{ echo $_SESSION['customer_avatar']; }}?>" alt="logo" style="width: 100%;">
                                                <?php endif;?>
                                            </div>
                                            <div class="user_account" style="display: flex; align-items: center; justify-content: center">
                                                <p style="font-size: 14px; margin-right: 6px"><?php {{ echo $_SESSION['customer_name']; }} ?></p>
                                                <i class="fa fa-angle-down"></i>
                                            </div>
                                            <div class="user_more_info" style="position:absolute; top: 100%; left: 0">
                                                <ul class="user_more_info_list">
                                                    <div class="user_more_info_item">
                                                        <a href="" class="user_more_info_link">
                                                            Đơn hàng của tôi
                                                        </a>    
                                                    </div>
                                                    <div class="user_more_info_item">
                                                        <a href="" class="user_more_info_link">
                                                            Thông báo của tôi
                                                        </a>    
                                                    </div>
                                                    <div class="user_more_info_item">
                                                        <a href="<?= BASE_URL?>/user/account" class="user_more_info_link">
                                                            Tài khoản của tôi
                                                        </a>    
                                                    </div>
                                                    <div class="user_more_info_item">
                                                        <a href="<?= BASE_URL?>/user/logout" class="user_more_info_link">
                                                            Thoát tài khoản
                                                        </a>    
                                                    </div>
                                                </ul>
                                            </div>
                                        </div>
                                        <?php else: ?>
                                        <a href="<?= BASE_URL ?>/user">
                                            <i class="lnr lnr-user"></i>
                                            <span class="my-cart">
                                                <span> <strong>Sign in</strong> Or</span><span> Join My Site</span>
                                            </span>
                                        </a>
                                        <?php endif; ?>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <!-- Cart Box End Here -->
                    </div>
                    <!-- Row End -->
                </div>
                <!-- Container End -->
            </div>
            <!-- Header Middle End Here -->
            <!-- Header Bottom Start Here -->
            <div class="header-bottom  header-sticky">
                <div class="container">
                    <div class="row align-items-center">
                         <div class="col-xl-3 col-lg-4 col-md-6 vertical-menu d-none d-lg-block">
                            <span class="categorie-title">Shop by Categories </span>
                        </div>                       
                        <div class="col-xl-9 col-lg-8 col-md-12 ">
                            <nav class="d-none d-lg-block">
                                <ul class="header-bottom-list d-flex">
                                    <li class="active"><a href="<?= BASE_URL ?>">home</a></li>
                                    <li><a href="<?= BASE_URL ?>/product/shop/all">shop</a></li>
                                    <li><a href="<?= BASE_URL ?>/post/blog">blog</a></li>
                                    <li><a href="<?= BASE_URL ?>/index/about">About us</a></li>
                                    <li><a href="<?= BASE_URL ?>/index/contact">contact us</a></li>
                                </ul>
                            </nav>
                            <div class="mobile-menu d-block d-lg-none">
                                <nav>
                                    <ul>
                                        <li><a href="<?= BASE_URL ?>">home</a></li>
                                        <li><a href="<?= BASE_URL ?>/product/shop/all">shop</a></li>
                                        <li><a href="<?= BASE_URL ?>/post/blog">blog</a></li>
                                        <li><a href="<?= BASE_URL ?>/index/about">About us</a></li>
                                        <li><a href="<?= BASE_URL ?>/index/contact">contact us</a></li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                    <!-- Row End -->
                </div>
                <!-- Container End -->
            </div>
            <!-- Header Bottom End Here -->
            <!-- Mobile Vertical Menu Start Here -->
            <div class="container d-block d-lg-none">
                <div class="vertical-menu mt-30">
                    <span class="categorie-title mobile-categorei-menu">Shop by Categories</span>
                    <nav>  
                        <div id="cate-mobile-toggle" class="category-menu sidebar-menu sidbar-style mobile-categorei-menu-list menu-hidden ">
                            <ul>
                                <?php foreach ($categories as $category):?>
                                <li><a href="#"><?php {{ echo $category['category_name'];}}?></a></li>
                                <?php endforeach; ?>
                            </ul>
                        </div>
                        <!-- category-menu-end -->
                    </nav>
                </div>
            </div>
            <!-- Mobile Vertical Menu Start End -->
        </header>
        <!-- Main Header Area End Here -->
       