<div class="offcanvas-overlay"></div>
    <!-- breadcrumb-area start -->
   

    <!-- breadcrumb-area end -->

    <!-- Cart Area Start -->
    <div class="cart-main-area pt-100px pb-100px">
        <div class="container">
            <h3 class="cart-page-title" style="color: #FF7004;">GIỎ HÀNG CỦA BẠN</h3>
            <?php
                    if(!empty($_GET['msg'])){
                        $msg= unserialize(urldecode($_GET['msg']));
                        foreach($msg as $key=>$value){
                            echo'<span style="color:blue; font-weight:bold">'.$value.'</span>';
                        }
                    }
            ?>
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                    <!-- <form action="#"> -->
                        <div class="table-content table-responsive cart-table-content">
                            <table>
                                <thead>
                                    <tr>
                                        <th>Hình ảnh</th>
                                        <th>Tên sản phẩm</th>
                                        <th>Giá bán</th>
                                        <th>Số lượng</th>
                                        <th>Tổng tiền</th>
                                        <th>Tùy chỉnh</th>
                                    </tr>
                                </thead>
                                <tbody>
                                <?php
                                    $total=0;
                                    if(isset($_SESSION['shopping_cart'])){
                                ?>
                                    <form action="<?php echo BASE_URL ?>/cart/updatecart" method="POST">
                                        <?php
                                            // $cart= $_SESSION['shopping_cart'];
                                            // print_r($cart);
                                                
                                            foreach($_SESSION['shopping_cart'] as $key => $value){
                                                $subtotal=$value['quantity_product_details'] * $value['price_product'];
                                                $total+=$subtotal;
                                        ?>      
                                        <tr>
                                            <td class="product-thumbnail">
                                                <a href="<?php echo BASE_URL ?>/productus/productdetails/<?php echo $value['id_product']?>"><img class="img-responsive ml-15px" src="<?php echo BASE_URL ?>/public/uploads/product/<?php echo $value['image_product']?>" alt="" width="139.69px" height="164.33px"/></a>
                                            </td>
                                            <td class="product-name"><a href="<?php echo BASE_URL ?>/productus/productdetails/<?php echo $value['id_product']?>"><?php echo $value['title_product']?></a></td>
                                            <td class="product-price-cart">
                                                <span class="amount">
                                                <?php echo number_format($value['price_product'],0,',','.')?> 
                                                </span>
                                            </td>
                                            <td class="product-quantity">
                                                <div class="cart-plus-minus">
                                                    
                                                    <input class="cart-plus-minus-box" type="text" min="1" name="qty[<?php echo $value['id_product']?>]" value="<?php echo $value['quantity_product_details']?>"> 
                                                </div>
                                            </td>
                                            <td class="product-subtotal"><?php echo number_format($subtotal,0,',','.').' đ'?></td>
                                            <td class="actions aligncenter">
                                                <button type="submit" value="<?php echo $value['id_product']?>" name="update_cart" ><i class="icon-pencil" aria-hidden="true"></i></button>
                                                <button type="submit" value="<?php echo $value['id_product']?>" name="delete_cart" ><i class="icon-close"></i> </button>
                                            </td>
                                        </tr>
                                        <?php
                                            }
                                        ?>
                                    </form>
                                <?php
                                    }
                                    else{
                                ?>
                                    <div class="row" >
                                        <div class="col-xs-12 col-md-8"></div>
                                        <!-- <div class="col-xs-6 col-md-4"> <h3 style="color: #FF7004;"><b>Giỏ hàng trống</b></h3></div> -->
                                    </div>
                                <?php
                                    }
                                ?>
                                </tbody>
                            </table>
                        </div>
                        <div class="row">
                             &nbsp;
                        </div>
                        <div class="row" >
                                        <div class="col-xs-12 col-md-8"></div>
                                        <div class="col-xs-6 col-md-4"> <h3 style="color: #FF7004;"><b>Thành Tiền: <?php echo number_format($total,0,',','.').' đ'?></b></h3></div>
                        </div>

                        <div class="row">
                            <div class="col-lg-12">
                                <div class="cart-shiping-update-wrapper">
                                    <div class="cart-shiping-update">
                                        <a href="<?php echo BASE_URL ?>">Tiếp Tục Mua Hàng</a>
                                    </div>
                                    <div class="cart-clear">
                                        <button>Cập Nhật Giỏ Hàng</button>
                                        <a href="#">Xóa Giỏ Hàng</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <!-- </form> -->

                    <div class="row">
                        <div class="col-lg-12 col-md-12 mt-md-30px">
                            <div class="grand-totall">
                                <form name="FormDatHang" action="<?php echo BASE_URL?>/cart/order" autocomplete="off" method="POST">
                                    <div class="title-wrap">
                                        <h4 class="cart-bottom-title section-bg-gary-cart">Thông tin mua hàng</h4>
                                    </div>
                                    <!-- <h5>Total products <span>$260.00</span></h5> -->
                                    <h5>Họ và tên: </h5>
                                    <div class="discount-code">
                                        <input type="text" name="name" required class="clips" style="background-color: white; height:30px;">
                                    </div>
                                    <h5>Số điện thoại: </h5>
                                    <div class="discount-code">
                                        <input type="text" name="sdt" required class="clips" style="background-color: white; height:30px; ">
                                    </div>
                                    <h5>Địa chỉ: </h5>
                                    <div class="discount-code">
                                        <input type="text" name="diachi" required onkeydown="return checkIt(event)" class="clips" style="background-color: white; height:30px;">
                                    </div>
                                    <h5>Email: </h5>
                                    <div class="discount-code">
                                        <input type="text" name="email" onchange="return KiemTraEmail(this)" required class="clips" style="background-color: white; height:30px;">
                                    </div>
                                    <h5>Nội dung: </h5>
                                    <div class="discount-code">
                                        <textarea type="text" name="noidung" required class="clips" style="background-color: white; "></textarea>
                                    </div>
                                    </br>
                                    <h4 class="grand-totall-title">Tổng tiền thanh toán: <span><?php echo number_format($total,0,',','.').' đ'?></span></h4>
                                    <!-- <a href="checkout.html">Đặt mua</a> -->
                                    <div class="col-lg-12">
                                        <div class="cart-shiping-update-wrapper">
                                            <div class="cart-shiping-update">
                                            </div>
                                            <div class="cart-clear">
                                                <button type="reset">Nhập lại</button>
                                                <!-- <a type="submit">Gửi đơn hàng</a> -->
                                                <a><input type="submit" value="Gửi đơn hàng"></a>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div class="row">
                        
                    <div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Cart Area End -->

