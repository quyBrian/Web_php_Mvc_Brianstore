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
              <li class="breadcrumb-item active">Thêm  sản phẩm</li>
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
                <h3 class="card-title">Thêm sản phẩm</h3>
              </div>
              
              <div class="card-body">
                <form action="<?php echo BASE_URL ?>/product/insert_product" method="POST" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="email">Tên sản phẩm</label>
                        <input type="text" name="title_product" class="form-control" id="email">
                    </div>
                    <div class="form-group">
                        <label for="email">Hình ảnh</label>
                        <input type="file" name="image_product" class="form-control" id="email">
                    </div>
                    <div class="form-group">
                        <label for="pwd">Giá sản phẩm</label>
                        <input type="text" name="price_product" class="form-control" id="pwd">
                    </div>
                    <div class="form-group">
                        <label for="pwd">Số lượng sản phảm</label>
                        <input type="text" name="quantity_product" class="form-control" id="pwd">
                    </div>
                    <div class="form-group">
                        <label Miêu for="pwd">Miêu tả sản phảm</label>
                        <textarea type="text" name="desc_product" rows="5" style="resize:none" class="form-control" id="editor"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="pwd">Danh mục sản phảm</label>
                        <select class="form-control" name="category_product">
                          <?php
                            foreach($category as $key =>$cate){
                          ?>
                            <option value ="<?php echo $cate['id_category_product'] ?>"><?php echo $cate['title_category_product'] ?></option>
                          <?php
                          }
                          ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="pwd">Sản phẩm hot</label>
                        <select class="form-control" name="hot_product">
                          <option value ="0">Không</option>
                          <option value ="1">Có</option>
                        </select>
                    </div>
                    <button type="submit" class="btn btn-primary float-left">Thêm sản phẩm</button>
                </form>
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
 