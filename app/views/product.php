<!-- Breadcrumb Start -->
<div class="breadcrumb-area mt-30">
    <div class="container">
        <div class="breadcrumb">
            <ul class="d-flex align-items-center">
                <li><a href="index.html">Home</a></li>
                <li><a href="shop.html">Shop</a></li>
                <li class="active"><a href="product.html">Products</a></li>
            </ul>
        </div>
    </div>
    <!-- Container End -->
</div>
<!-- Breadcrumb End -->
<!-- Product Thumbnail Start -->
<div class="main-product-thumbnail ptb-100 ptb-sm-60">
    <div class="container">
        <div class="thumb-bg">
            <div class="row">
                <!-- Main Thumbnail Image Start -->
                <div class="col-lg-5 mb-all-40">
                    <!-- Thumbnail Large Image start -->
                    <div class="tab-content">
                        <div id="thumb-main-<?php {{ echo $product['product_id']; }}?>" class="tab-pane fade show active">
                            <a data-fancybox="images" href="<?= BASE_URL ?>\public\images\products\<?php {{ echo $product['image']; }}?>"><img src="<?= BASE_URL ?>\public\images\products\<?php {{ echo $product['image']; }}?>" alt="product-view"></a>
                        </div>
                        <?php foreach ($images as $image): ?>
                        <div id="thumb<?php {{ echo $image['image_id']; }}?>" class="tab-pane fade">
                            <a data-fancybox="images" href="<?= BASE_URL ?>\public\images\products\<?php {{ echo $image['image']; }}?>"><img src="<?= BASE_URL ?>\public\images\products\<?php {{ echo $image['image']; }}?>" alt="product-view"></a>
                        </div>
                        <?php endforeach; ?>
                    </div>
                    <!-- Thumbnail Large Image End -->
                    <!-- Thumbnail Image End -->
                    <div class="product-thumbnail mt-15">
                        <div class="thumb-menu owl-carousel nav tabs-area" role="tablist">
                            <a class="active" data-toggle="tab" href="#thumb-main-<?php {{ echo $product['product_id']; }}?>"><img src="<?= BASE_URL ?>\public\images\products\<?php {{ echo $product['image']; }}?>" alt="product-thumbnail"></a>
                            <?php foreach ($images as $image): ?>
                            <a data-toggle="tab" href="#thumb<?php {{ echo $image['image_id']; }}?>"><img src="<?= BASE_URL ?>\public\images\products\<?php {{ echo $image['image']; }}?>" alt="product-thumbnail"></a>
                            <?php endforeach; ?>
                        </div>
                    </div>
                    <!-- Thumbnail image end -->
                </div>
                <!-- Main Thumbnail Image End -->
                <!-- Thumbnail Description Start -->
                <div class="col-lg-7">
                    <div class="thubnail-desc fix">
                        <h3 class="product-header"><?php {{ echo $product['product_name']; }}?></h3>
                        <div class="rating-summary fix mtb-10">
                            <div class="rating">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star-o"></i>
                                <i class="fa fa-star-o"></i>
                                <i class="fa fa-star-o"></i>
                            </div>
                            <div class="rating-feedback">
                                <a href="#">(1 review)</a>
                            </div>
                        </div>
                        <div class="pro-price mtb-30">
                            <?php if (isset($discount)):  ?>
                                <p class="d-flex align-items-center"><span class="prev-price"><?php {{ echo $product['list_price']; }}?></span><span class="price">$<?php {{ echo $product['list_price']*(1 - $discount['discount_amount']); }}?></span><span class="saving-price">save <?php {{ echo $discount['discount_amount']*100; }}?>%</span></p>
                            <?php else:?>
                                <p class="d-flex align-items-center"><span class="price">$<?php {{ echo $product['list_price']; }}?></span></p>
                            <?php endif; ?>
                        </div>
                        <p class="mb-20 pro-desc-details"><?php {{ echo $product['short_description']; }}?></p>
                        <div class="product-size mb-20 clearfix">
                            <label>Size</label>
                            <select class="">
                                <option>S</option>
                                <option>M</option>
                                <option>L</option>
                            </select>
                        </div>
                        <div class="color clearfix mb-20">
                            <label>color</label>
                            <ul class="color-list">
                                <li>
                                    <a class="orange active" href="#"></a>
                                </li>
                                <li>
                                    <a class="paste" href="#"></a>
                                </li>
                            </ul>
                        </div>
                        <div class="box-quantity d-flex hot-product2">
                            <form action="#">
                                <input class="quantity mr-15" type="number" min="1" value="1">
                            </form>
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
                        <div class="pro-ref mt-20">
                            <p><span class="in-stock"><i class="ion-checkmark-round"></i> IN STOCK</span></p>
                        </div>
                        <div class="socila-sharing mt-25">
                            <ul class="d-flex">
                                <li>share</li>
                                <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fa fa-google-plus-official" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fa fa-pinterest-p" aria-hidden="true"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- Thumbnail Description End -->
            </div>
            <!-- Row End -->
        </div>
    </div>
    <!-- Container End -->
</div>
<!-- Product Thumbnail End -->
<!-- Product Thumbnail Description Start -->
<div class="thumnail-desc pb-100 pb-sm-60">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <ul class="main-thumb-desc nav tabs-area" role="tablist">
                    <li><a class="active" data-toggle="tab" href="#dtail">Product Details</a></li>
                    <li><a data-toggle="tab" href="#review">Reviews 1</a></li>
                </ul>
                <!-- Product Thumbnail Tab Content Start -->
                <div class="tab-content thumb-content border-default">
                    <div id="dtail" class="tab-pane fade show active">
                        <p><?php {{ echo $product['description']; }}?></p>
                    </div>
                    <div id="review" class="tab-pane fade">
                        <div class="container">
                            <h2 class="text-center">Đánh giá sản phẩm</h2>
                            <div class="card">
                                <div class="card-body">
                                    <?php foreach ($customersByReview as $customer): ?>
                                    <div class="row">
                                        <div class="col-md-2">
                                            <img src="<?= BASE_URL ?>/public/images/customers/<?php {{ echo $customer['avatar'];}}?>" class="img rounded-circle img-fluid"/>
                                            <p class="text-secondary text-center">15 Minutes Ago</p>    
                                        </div>
                                        <div class="col-md-10">
                                            <p>
                                                <strong><?php {{ echo $customer['last_name']; }} ?> <?php {{ echo $customer['first_name']; }} ?></strong>
                                                <?php for ($i=0; $i < 5 - $customer['rating']; $i++):?>
                                                <span class="float-right"><i class="text-warning fa fa-star-o"></i></span>
                                                <?php endfor;?>
                                                <?php for ($i=0; $i < $customer['rating']; $i++):?>
                                                <span class="float-right"><i class="text-warning fa fa-star"></i></span>
                                                <?php endfor;?>
                                            </p>
                                        <div class="clearfix"></div>
                                            <p><?php {{ echo $customer['comment']; }} ?></p>
                                            <p>
                                                <a class="float-right btn text-white btn-danger"> <i class="fa fa-heart"></i> Like</a>
                                            </p>
                                        </div>
                                    </div>
                                        <!-- <div class="card card-inner">
                                            <div class="card-body">
                                                <div class="row">
                                                    <div class="col-md-2">
                                                        <img src="https://image.ibb.co/jw55Ex/def_face.jpg" class="img img-rounded img-fluid"/>
                                                        <p class="text-secondary text-center">15 Minutes Ago</p>
                                                    </div>
                                                    <div class="col-md-10">
                                                        <p><a href="https://maniruzzaman-akash.blogspot.com/p/contact.html"><strong>Maniruzzaman Akash</strong></a></p>
                                                        <p>Lorem Ipsum is simply dummy text of the pr make  but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                                                        <p>
                                                            <a class="float-right btn text-white btn-danger"> <i class="fa fa-heart"></i> Like</a>
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div> -->
                                    <?php endforeach; ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Product Thumbnail Tab Content End -->
            </div>
        </div>
        <!-- Row End -->
    </div>
    <!-- Container End -->
</div>
<!-- Product Thumbnail Description End -->
<!-- Realted Products Start Here -->
<div class="hot-deal-products off-white-bg pt-100 pb-90 pt-sm-60 pb-sm-50">
    <div class="container">
        <!-- Product Title Start -->
        <div class="post-title pb-30">
            <h2>Realated Products</h2>
        </div>
        <!-- Product Title End -->
        <!-- Hot Deal Product Activation Start -->
        <div class="hot-deal-active owl-carousel">
            <?php foreach ($productsRelated as $product): ?>
            <!-- Single Product Start -->
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
            <!-- Single Product End -->
            <?php endforeach; ?>
        </div>
        <!-- Hot Deal Product Active End -->

    </div>
    <!-- Container End -->
</div>
<!-- Realated Products End Here -->
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