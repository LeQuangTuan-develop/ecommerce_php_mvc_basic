<!-- Categorie Menu & Slider Area Start Here -->
<div class="main-page-banner home-3">
    <div class="container">
        <div class="row">
            <!-- Vertical Menu Start Here -->
            <div class="col-xl-3 col-lg-4 d-none d-lg-block">
                <div class="vertical-menu mb-all-30">
                    <nav>
                        <ul class="vertical-menu-list">
                            <?php foreach ($categories as $category):?>
                            <li><a href="<?= BASE_URL ?>/product/shop/<?php {{ echo $category['category_id'];}}?>"><span><img style="width: 26px; height: 26px" src="<?= BASE_URL ?>\public\images\categories\<?php {{ echo $category['cate_image'];}}?>" alt="menu-icon"></span><?php {{ echo $category['category_name'];}}?></a></li>
                            <?php endforeach; ?>
                        </ul>
                    </nav>
                </div>
            </div>
            <!-- Vertical Menu End Here -->
        </div>
        <!-- Row End -->
    </div>
    <!-- Container End -->
</div>
<!-- Categorie Menu & Slider Area End Here -->