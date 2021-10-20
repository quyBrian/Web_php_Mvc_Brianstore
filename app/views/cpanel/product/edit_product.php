<?php
    if(!empty($_GET['msg'])){
        $msg= unserialize(urldecode($_GET['msg']));
        foreach($msg as $key=>$value){
            echo'<span style="color:blue; font-weight:bold">'.$value.'</span>';
        }
    }
?>



<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Quản Lý Sản Phẩm</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Quản lý sản phẩm</li>
              <li class="breadcrumb-item active">Cập nhật sản phẩm</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Cập nhật sản phẩm</h3>
              </div>
              <div class="card-body">
              <?php
                foreach($productbyid as $key => $pro){
              ?>
                <form action="<?php echo BASE_URL ?>/product/update_product/<?php echo $pro['id_product'] ?>" method="POST" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="email">Tên bài viết</label>
                        <input type="text" value="<?php echo $pro['title_product'] ?>" name="title_product" class="form-control" id="email">
                    </div>
                    <div class="form-group">
                        <label for="email">Hình ảnh</label>
                        <input type="file" name="image_product" class="form-control" id="email">
                        <p><img src="<?php echo BASE_URL ?>/public/uploads/product/<?php echo $pro['image_product'] ?>" width="100"; height="100"></p>
                    </div>
                    <div class="form-group">
                        <label for="pwd">Giá sản phẩm</label>
                        <input type="text" value="<?php echo $pro['price_product']?>"  name="price_product" class="form-control" id="price_product">
                    </div>
                    <div class="form-group">
                        <label for="pwd">Giảm Giá</label>
                        <select class="form-control" name="discount_product">
                          <?php
                            if($pro['discount_product']==0){
                          ?>
                          <option selected value ="0">Không</option>
                          <option value ="1">Có</option>
                          <?php
                            }
                            else{
                          ?>
                          <option value ="0">Không</option>
                          <option selected value ="1">Có</option>
                          <?php
                            }
                          ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="pwd">Giá sau giảm</label>
                        <input type="text" value="<?php echo $pro['price_discount_product']?>"  name="price_discount_product" class="form-control" id="price_product">
                    </div>
                    <div class="form-group">
                        <label for="pwd">Số lượng sản phảm</label>
                        <input type="text" value="<?php echo $pro['quantity_product']?>" name="quantity_product" class="form-control" id="quantity_product">
                    </div>
                    <div class="form-group">
                        <label Miêu for="pwd">Mô tả</label>
                        <textarea id="editor" type="text"  name="desc_product" rows="5" style="resize:none" class="form-control" id="desc_product"><?php echo $pro['desc_product'] ?></textarea>
                    </div>
                    <div class="form-group">
                        <label for="pwd">Danh mục bài viết</label>
                        <select class="form-control" value="<?php echo $pro['id_category_product'] ?>" name="category_product">
                          <?php
                            foreach($category as $key =>$cate){
                          ?>
                            <option <?php if($pro['id_category_product']==$cate['id_category_product']) { echo 'selected';} ?> value ="<?php echo $cate['id_category_product'] ?>"><?php echo $cate['title_category_product'] ?></option>
                          <?php
                          }
                          ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="pwd">Sản phẩm hot</label>
                        <select class="form-control" name="hot_product">
                          <?php
                            if($pro['hot_product']==0){
                          ?>
                          <option selected value ="0">Không</option>
                          <option value ="1">Có</option>
                          <?php
                            }
                            else{
                          ?>
                          <option value ="0">Không</option>
                          <option selected value ="1">Có</option>
                          <?php
                            }
                          ?>
                        </select>
                    </div>
                    <button type="submit" class="btn btn-primary float-left">Cập nhật sản phẩm</button>
                </form>
                <?php
                }
                ?>
              </div>
            </div>
            <!-- /.card -->
            <!-- /.card -->
          </div>
          </div>
          <!-- /.col -->
        </div>
        
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
 