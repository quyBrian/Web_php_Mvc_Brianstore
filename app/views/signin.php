


    <div class="offcanvas-overlay"></div>
    <!-- breadcrumb-area start -->
    <div class="breadcrumb-area">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="row breadcrumb_box  align-items-center">
                        <div class="col-lg-6 col-md-6 col-sm-12 text-center text-md-start">
                            <h2 class="breadcrumb-title">Shop</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- breadcrumb-area end -->

    <!-- login area start -->
    <div class="login-register-area pt-100px pb-100px">
        <div class="container">
            <div class="row">
                <div class="col-lg-7 col-md-12 ml-auto mr-auto">
                    <div class="login-register-wrapper">
                        <div class="login-register-tab-list nav">
                            <a class="active" data-bs-toggle="tab" href="#lg1">
                                <h4>Đăng nhập</h4>
                            </a>
                            <a data-bs-toggle="tab" href="#lg2">
                                <h4>Đăng ký</h4>
                            </a>
                        </div>
                        <div class="tab-content">
                            <div id="lg1" class="tab-pane active">
                                <div class="login-form-container">
                                    <div class="login-register-form">
                                        <form autocomplete="off" action="<?php echo BASE_URL?>/customer/login" method="post">
                                            <input type="text" name="username" required placeholder="Tài khoản" />
                                            <input type="password" name="password" required placeholder="Mật khẩu" />
                                            <div class="button-box">
                                                <div class="login-toggle-btn">
                                                    <input type="checkbox" />
                                                    <a class="flote-none" href="javascript:void(0)">Lưu mật khẩu</a>
                                                    <a href="#">Quên mật khẩu?</a>
                                                </div>
                                                <button type="submit"><span>Đăng Nhập</span></button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <div id="lg2" class="tab-pane">
                                <div class="login-form-container">
                                    <div class="login-register-form">
                                        <form action="<?php echo BASE_URL?>/customer/insertcustomer" method="post">
                                            <input type="text" required name="name_customer" placeholder="Họ tên" />
                                            <input type="text" required name="phone_customer" placeholder="Số điện thoại" />
                                            <input type="Email" required name="email_customer" placeholder="Email"  />
                                            <input type="password" required name="password_customer" placeholder="Mật Khẩu" />
                                            <input type="text" required name="address_customer" placeholder="Địa chỉ" />
                                            <div class="button-box">
                                                <button type="submit" name="dangky"><span>Đăng ký</span></button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- login area end -->