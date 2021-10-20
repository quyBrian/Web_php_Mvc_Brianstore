<div class="offcanvas-overlay"></div>
    <!-- breadcrumb-area start -->
    <div class="breadcrumb-area">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="row breadcrumb_box  align-items-center">
                        <div class="col-lg-6 col-md-6 col-sm-12 text-center text-md-start">
                            <h2 class="breadcrumb-title">Tài Khoản Của Tôi</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- breadcrumb-area end -->

    <!-- account area start -->
    <div class="checkout-area pt-100px pb-100px">
        <div class="container">
            <div class="row">
            <?php 
                foreach($detailcustomer as $key =>$value){
            ?>
                <div class="ml-auto mr-auto col-lg-9">
                    <div class="checkout-wrapper">
                        <div id="faq" class="panel-group">
                            <div class="panel panel-default single-my-account" data-aos="fade-up" data-aos-delay="200">
                                <div class="panel-heading my-account-title">
                                    <h3 class="panel-title"><span>1 .</span> <a data-bs-toggle="collapse" class="collapsed" aria-expanded="true" href="#my-account-1">Chỉnh Sửa Thông Tin Tài Khoản Của Bạn</a>
                                    </h3>
                                </div>
                                <div id="my-account-1" class="panel-collapse collapse show" data-bs-parent="#faq">
                                    <div class="panel-body">
                                        <div class="myaccount-info-wrapper" style="background:#F4F5F7">
                                            <div class="account-info-wrapper">
                                                <h4>Thông Tin Tài Khoản Của Bạn</h4>
                                            </div>
                                            <form action="<?php echo BASE_URL ?>/customer/updatecustomer/<?php echo $value['id_customer'] ?>" method="POST">
                                            <div class="row" >
                                                <div class="col-lg-12 col-md-12">
                                                    <div class="billing-info" style="padding-left:35%;">
                                                        <a href="<?php echo BASE_URL ?>/customer/account/<?php echo $value['id_customer'] ?>" class="image">
                                                        <img  src="<?php echo BASE_URL ?>/public/uploads/customer/<?php echo $value['image_customer']?>" alt="Product" width="200px" height="200px" 
                                                         style="border: 1px #d4d4d4 solid;
                                                                padding: 7px;
                                                                border-radius:50%;
                                                                -moz-border-radius:50%;
                                                                -webkit-border-radius:50%;
                                                                "/></a>
                                                        <div style="display:flex; justify-content:left;">
                                                            <input type="file" style="width:300px; padding:10px; margin-top:8px; margin-left: n-48px;" name="image_customer" class="form-control" id="email">
                                                        </div>        
                                                        
                                                    </div>
                                                </div>
                                                <div class="col-lg-12 col-md-12">
                                                    <div class="billing-info" style="display: flex;"> 
                                                    <label style=" width:15%;" >Họ Tên</label>
                                                    <input style="background:#FFFFFF; width:85%;" type="text" name="name_customer"  value="<?php echo $value['name_customer'] ?> "/>
                                                    </div>
                                                </div>
                                                <div class="col-lg-12 col-md-12">
                                                    <div class="billing-info"  style="display: flex;">
                                                        <label style=" width:15%;">Email</label>
                                                        <input style="background:#FFFFFF; width:85%;" type="email" name="email_customer"  value="<?php echo $value['email_customer'] ?>"/>
                                                    </div>
                                                </div>
                                                <div class="col-lg-12 col-md-12">
                                                    <div class="billing-info"  style="display: flex;">
                                                        <label style=" width:15%;">Số điện thoại</label>
                                                        <input style="background:#FFFFFF; width:85%;"  type="text" name="phone_customer"  value="<?php echo $value['phone_customer'] ?>"/>
                                                    </div>
                                                </div>
                                                <div class="col-lg-12 col-md-12">
                                                    <div class="billing-info"  style="display: flex;">
                                                        <label style=" width:15%;">Địa chỉ</label>
                                                        <input style="background:#FFFFFF; width:85%;" type="text" name="address_customer"  value="<?php echo $value['address_customer'] ?>"/>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="billing-back-btn">
                                                <div class="billing-back">
                                                    <a href="#"><i class="icon-arrow-up-circle"></i> back</a>
                                                </div>
                                                <div class="billing-btn">
                                                    <button type="submit">Lưu</button>
                                                </div>
                                            </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="panel panel-default single-my-account" data-aos="fade-up" data-aos-delay="400">
                                <div class="panel-heading my-account-title">
                                    <h3 class="panel-title"><span>2 .</span> <a data-bs-toggle="collapse" class="collapsed" aria-expanded="false" href="#my-account-2">Thay Đổi Mật Khẩu Của Bạn </a></h3>
                                </div>
                                <div id="my-account-2" class="panel-collapse collapse" data-bs-parent="#faq">
                                    <div class="panel-body">
                                        <form action="<?php echo BASE_URL ?>/customer/addcart" method="POST">
                                        <div class="myaccount-info-wrapper" style="background:#F4F5F7">
                                            <div class="account-info-wrapper">
                                                <h4>Đổi Mật Khẩu</h4>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-12 col-md-12">
                                                    <div class="billing-info">
                                                        <label>Mật Khẩu cũ</label>
                                                        <input style="background:#FFFFFF" type="password" name="password_customer" />
                                                    </div>
                                                </div>
                                                <div class="col-lg-12 col-md-12">
                                                    <div class="billing-info">
                                                        <label>Nhật khẩu mới</label>
                                                        <input style="background:#FFFFFF" type="password" name="password1" />
                                                    </div>
                                                </div>
                                                <div class="col-lg-12 col-md-12">
                                                    <div class="billing-info">
                                                        <label>Nhập lại mật khẩu mới</label>
                                                        <input style="background:#FFFFFF" type="password" name="password2" />
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="billing-back-btn">
                                                <div class="billing-back">
                                                    <a href="#"><i class="icon-arrow-up-circle"></i>back</a>
                                                </div>
                                                <div class="billing-btn">
                                                    <button type="submit">Thay đổi</button>
                                                </div>
                                            </div>
                                        </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <div class="panel panel-default single-my-account " data-aos="fade-up" data-aos-delay="600">
                                <div class="panel-heading my-account-title">
                                    <h3 class="panel-title"><span>3 .</span> <a data-bs-toggle="collapse" class="collapsed" aria-expanded="false" href="#my-account-3"> Thay Đổi Địa Chỉ Của Bạn </a></h3>
                                </div>
                                <div id="my-account-3" class="panel-collapse collapse" data-bs-parent="#faq">
                                    <div class="panel-body">
                                        <div class="myaccount-info-wrapper" style="background:#F4F5F7">
                                            <div class="account-info-wrapper">
                                                <h4>Danh Sách Địa Chỉ</h4>
                                            </div>
                                            <div class="entries-wrapper">
                                                <div class="row">
                                               
                                                    <div class="col-lg-6 col-md-6 d-flex align-items-center justify-content-center">
                                                        <div class="entries-info text-center">
                                                            <p ><?php echo $value['address_customer'] ?></p>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6 col-md-6 d-flex align-items-center justify-content-center">
                                                        <div class="entries-edit-delete text-center">
                                                            <a class="edit" href="#">Sửa</a>
                                                            <a href="#">Xóa</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="billing-back-btn">
                                                <div class="billing-back">
                                                    <a href="#"><i class="icon-arrow-up-circle"></i> back</a>
                                                </div>
                                                <div class="billing-btn">
                                                    <button type="submit">Continue</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <?php
                }
            ?>
            </div>
        </div>
    </div>
    <!-- account area end -->

