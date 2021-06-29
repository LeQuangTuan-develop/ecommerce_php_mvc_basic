 <!-- Categorie Menu & Slider Area Start Here -->
 <div class="main-page-banner pb-50 off-white-bg">
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
             <!-- Slider Area Start Here -->
             <div class="col-xl-9 col-lg-8 slider_box">
                 <div class="slider-wrapper theme-default">
                     <!-- Slider Background  Image Start-->
                     <div id="slider" class="nivoSlider">
                         <a href="shop.html"><img src="<?= BASE_URL ?>\public\images\slider\1.jpg" data-thumb="img/slider/1.jpg" alt="" title="#htmlcaption"></a>
                         <a href="shop.html"><img src="<?= BASE_URL ?>\public\images\slider\2.jpg" data-thumb="img/slider/2.jpg" alt="" title="#htmlcaption2"></a>
                     </div>
                     <!-- Slider Background  Image Start-->
                 </div>
             </div>
             <!-- Slider Area End Here -->
         </div>
         <!-- Row End -->
     </div>
     <!-- Container End -->
 </div>
 <!-- Categorie Menu & Slider Area End Here -->