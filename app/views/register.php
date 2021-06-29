<!-- Breadcrumb Start -->
<div class="breadcrumb-area mt-30">
    <div class="container">
        <div class="breadcrumb">
            <ul class="d-flex align-items-center">
                <li><a href="<?= BASE_URL ?>">Home</a></li>
                <li class="active"><a href="register.html">Register</a></li>
            </ul>
        </div>
    </div>
    <!-- Container End -->
</div>
<!-- Breadcrumb End -->
<!-- Register Account Start -->
<div class="register-account ptb-100 ptb-sm-60">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="register-title">
                    <h3 class="mb-10">REGISTER ACCOUNT</h3>
                    <p class="mb-10">If you already have an account with us, please login at the login page.</p>
                </div>
            </div>
        </div>
        <!-- Row End -->
        <div class="row">
            <div class="col-sm-12">
                <form class="form-register" action="" method="post" id="registerForm">
                    <fieldset>
                        <legend>Your Personal Details</legend>
                        <div class="form-group d-md-flex align-items-md-center">
                            <label class="control-label col-md-2" for="f-name"><span class="require">*</span>First Name</label>
                            <div class="col-md-6">
                                <input type="text" name="first_name" rules="required" class="form-control" id="f-name" placeholder="First Name">
                            </div>
                            <div class="cod-md-4">
                                <span class="form-message"></span>
                            </div>
                        </div>
                        <div class="form-group d-md-flex align-items-md-center">
                            <label class="control-label col-md-2" for="l-name"><span class="require">*</span>Last Name</label>
                            <div class="col-md-6">
                                <input type="text" name="last_name" rules="required" class="form-control" id="l-name" placeholder="Last Name">
                            </div>
                            <div class="cod-md-4">
                                <span class="form-message"></span>
                            </div>
                        </div>
                        <div class="form-group d-md-flex align-items-md-center">
                            <label class="control-label col-md-2" for="email"><span class="require">*</span>Enter you email address here...</label>
                            <div class="col-md-6">
                                <input type="email" name="email" rules="required | email" class="form-control" id="email" placeholder="Enter you email address here...">
                            </div>
                            <div class="cod-md-4">
                                <span class="form-message"></span>
                            </div>
                        </div>
                        <div class="form-group d-md-flex align-items-md-center">
                            <label class="control-label col-md-2" for="number"><span class="require">*</span>Telephone</label>
                            <div class="col-md-6">
                                <input type="phone" name="phone" rules="required" class="form-control" id="number" placeholder="Telephone">
                            </div>
                            <div class="cod-md-4">
                                <span class="form-message"></span>
                            </div>
                        </div>
                    </fieldset>
                    <fieldset>
                        <legend>Your Password</legend>
                        <div class="form-group d-md-flex align-items-md-center">
                            <label class="control-label col-md-2" for="pwd"><span class="require">*</span>Password:</label>
                            <div class="col-md-6">
                                <input type="password" name="password" rules="required | min:6" class="form-control" id="pwd" placeholder="Password">
                            </div>
                            <div class="cod-md-4">
                                <span class="form-message"></span>
                            </div>
                        </div>
                        <div class="form-group d-md-flex align-items-md-center">
                            <label class="control-label col-md-2" for="pwd-confirm"><span class="require">*</span>Confirm Password</label>
                            <div class="col-md-6">
                                <input type="password" name="confirm-password" rules="required | min:6" class="form-control" id="pwd-confirm" placeholder="Confirm password">
                            </div>
                            <div class="cod-md-4">
                                <span class="form-message"></span>
                            </div>
                        </div>
                    </fieldset>
                    <div class="form-message form-message-all"></div>
                    <div class="terms">
                        <div class="d-flex justify-content-center">
                            <button type="submit" class="return-customer-btn">Register</button>
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

<script>
    var formRegister = new Validator('#registerForm')
    formRegister.onSubmit = function(formData) {
        $.ajax({
            url: "<?= BASE_URL ?>/user/register_validation",
            method: 'POST',
            data: formData,
            dataType: 'text',
            success: function(data) {
                if (data != "") {
                    document.querySelector('.form-message-all').innerHTML = data;
                    console.log(data);
                    if (data == `<!DOCTYPE html>
                        <html lang="en">
                        <head>
                            <meta charset="UTF-8">
                            <meta name="viewport" content="width=device-width, initial-scale=1.0">
                            <title>Blog Ecommerce</title>
                        </head>
                        <body>

                            Đăng ký thành công</body>
                        </html>`) {
                        console.log("chạy chuyển hướng");
                        setTimeout(() => {
                            location.replace("<?= BASE_URL ?>/user");
                        }, 1000)
                    }
                } else {
                    console.log("không có data");
                }
            }
        })
    }
</script>