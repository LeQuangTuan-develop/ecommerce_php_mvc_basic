<!-- Breadcrumb Start -->
<div class="breadcrumb-area mt-30">
    <div class="container">
        <div class="breadcrumb">
            <ul class="d-flex align-items-center">
                <li><a href="<?= BASE_URL ?>">Home</a></li>
                <li class="active"><a href="register.html">Account</a></li>
            </ul>
        </div>
    </div>
    <!-- Container End -->
</div>
<!-- Breadcrumb End -->
<!-- Register Account Start -->
<div class="register-account ptb-100 ptb-sm-60">
    <div class="container">
        <?php 
            if (!empty($_GET['msg'])) {
                $msg = unserialize(urldecode($_GET['msg']));
                foreach ($msg as $value) {
                    echo '<span style="color:#ed4c78;font-weight:bold">'.$value.'</span>';
                }
            }
        ?>
        <div class="row">
            <div class="col-sm-12">
                <div class="register-title">
                    <h3 class="mb-10"><?php {{echo $customer['last_name']; }} ?> <?php {{echo $customer['first_name']; }} ?> Account</h3>
                </div>
            </div>
        </div>
        <!-- Row End -->
        <div class="row">
            <div class="col-sm-12">
                <form class="form-register" action="<?= BASE_URL ?>/user/update_user/<?php {{echo $customer['customer_id']; }} ?>" method="post" id="registerForm">
                    <fieldset>
                        <legend>Your Personal Details</legend>
                        <div class="form-group d-md-flex align-items-md-center">
                            <label class="control-label col-md-2" for="f-name"><span class="require">*</span>First Name</label>
                            <div class="col-md-6">
                                <input type="text" name="first_name" rules="required" value="<?php {{echo $customer['first_name']; }} ?>" class="form-control" id="f-name" placeholder="First Name">
                            </div>
                            <div class="cod-md-4">
                                <span class="form-message"></span>
                            </div>
                        </div>
                        <div class="form-group d-md-flex align-items-md-center">
                            <label class="control-label col-md-2" for="l-name"><span class="require">*</span>Last Name</label>
                            <div class="col-md-6">
                                <input type="text" name="last_name" rules="required"  value="<?php {{echo $customer['last_name']; }} ?>" class="form-control" id="l-name" placeholder="Last Name">
                            </div>
                            <div class="cod-md-4">
                                <span class="form-message"></span>
                            </div>
                        </div>
                        <div class="form-group d-md-flex align-items-md-center">
                            <label class="control-label col-md-2" for="email"><span class="require">*</span>Enter you email address here...</label>
                            <div class="col-md-6">
                                <input type="email" name="email" rules="required | email"  value="<?php {{echo $customer['email']; }} ?>" class="form-control" id="email" placeholder="Enter you email address here..." readonly>
                            </div>
                            <div class="cod-md-4">
                                <span class="form-message"></span>
                            </div>
                        </div>
                        <div class="form-group d-md-flex align-items-md-center">
                            <label class="control-label col-md-2" for="number"><span class="require">*</span>Telephone</label>
                            <div class="col-md-6">
                                <input type="phone" name="phone" rules="required"  value="<?php {{echo $customer['phone']; }} ?>" class="form-control" id="number" placeholder="Telephone">
                            </div>
                            <div class="cod-md-4">
                                <span class="form-message"></span>
                            </div>
                        </div>
                        <div class="form-group d-md-flex align-items-md-center">
                            <label class="control-label col-md-2" for="number">Shipping Adress</label>
                            <div class="col-md-6">
                                <input type="text" name="shipping-address" class="form-control" value="<?php {{echo $customer['shipping_address']; }} ?>" id="number" placeholder="Shipping Address">
                            </div>
                            <div class="cod-md-4">
                                <span class="form-message"></span>
                            </div>
                        </div>
                        <div class="form-group d-md-flex align-items-md-center">
                            <label class="control-label col-md-2" for="number">City</label>
                            <div class="col-md-3">
                                <input type="text" name="city" class="form-control" value="<?php {{echo $customer['city']; }} ?>" id="number" placeholder="city">
                            </div>
                            <label class="control-label col-md-1" for="number">Country</label>
                            <div class="col-md-2">
                                <input type="text" name="country" class="form-control" value="<?php {{echo $customer['country']; }} ?>" id="number" placeholder="country">
                            </div>
                            <div class="cod-md-4">
                                <span class="form-message"></span>
                            </div>
                        </div>
                        <div class="form-group d-md-flex align-items-md-center">
                            <label class="control-label col-md-2" for="number">Giới tính</label>
                            <div class="col-md-6">
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="gender" id="inlineRadio1" value="1" <?php {{ echo ($customer['gender'] == 1) ? "checked" : ""; }} ?>>
                                    <label class="form-check-label" for="inlineRadio1">Nam</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="gender" id="inlineRadio2" value="2" <?php {{ echo ($customer['gender'] == 2) ? "checked" : ""; }} ?>>
                                    <label class="form-check-label" for="inlineRadio2">Nữ</label>
                                </div>
                            </div>
                            <div class="cod-md-4">
                                <span class="form-message"></span>
                            </div>
                        </div>
                    </fieldset>
                    <fieldset>
                        <legend>Your Password</legend>
                        <div class="form-group d-md-flex align-items-md-center">
                            <label class="control-label col-md-2" for="pwd"><span class="require" >*</span>Mật khẩu cũ</label>
                            <div class="col-md-6">
                                <input type="password" name="password" rules="required | min:6"  value="<?php {{echo $customer['password']; }} ?>" class="form-control" id="pwd" placeholder="Password" readonly>
                            </div>
                            <div class="cod-md-4">
                                <span class="form-message"></span>
                            </div>
                        </div>
                        <div class="form-group d-md-flex align-items-md-center">
                            <label class="control-label col-md-2" for="pwd">New Password</label>
                            <div class="col-md-6">
                                <input type="password" name="new-password" class="form-control" id="pwd" placeholder="New Password">
                            </div>
                            <div class="cod-md-4">
                                <span class="form-message"></span>
                            </div>
                        </div>
                        <div class="form-group d-md-flex align-items-md-center">
                            <label class="control-label col-md-2" for="pwd">Confirm New Password</label>
                            <div class="col-md-6">
                                <input type="password" name="confirm-password" class="form-control" id="pwd" placeholder="Confirm New Password">
                            </div>
                            <div class="cod-md-4">
                                <span class="form-message"></span>
                            </div>
                        </div>
                    </fieldset>
                    <div class="form-message form-message-all"></div>
                    <div class="terms">
                        <div class="d-flex justify-content-center">
                            <button type="submit" class="return-customer-btn">Update</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <!-- Row End -->
    </div>
    <!-- Container End -->
</div>
<!-- Register Account End -->
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

<!-- import validation library -->
<script src="<?= BASE_URL?>/public/js/validator-2.js"></script>
<!-- jquery 3.2.1 -->
<script src="<?= BASE_URL ?>\public\js\vendor\jquery-3.2.1.min.js"></script>