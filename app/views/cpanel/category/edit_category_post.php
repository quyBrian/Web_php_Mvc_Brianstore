
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Quản Lý Danh Mục</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Quản lý danh mục</li>
              <li class="breadcrumb-item active">Cập nhật mục bài viết</li>
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
                <h3 class="card-title">Cập nhật mục sản phẩm</h3>
                </br>
                <?php
                    if(!empty($_GET['msg'])){
                        $msg= unserialize(urldecode($_GET['msg']));
                        foreach($msg as $key=>$value){
                            echo'<span style="color:blue; font-weight:bold">'.$value.'</span>';
                        }
                    }
                ?> 

              </div>
              
              <div class="card-body">

              <?php
                foreach($categorybyid as $key=> $cate){
              ?>
                <form action="<?php echo BASE_URL ?>/category/update_category_product/ <?php echo $cate['id_category_product'] ?>" method="POST">
                    <div class="form-group">
                        <label for="email">Tên danh mục</label>
                        <input type="text" value="<?php echo $cate['title_category_product'] ?>" name="title_category_product" class="form-control" id="email">
                    </div>
                    <div class="form-group">
                        <label for="pwd">Mô tả danh mục</label>
                        <input type="text"  value="<?php echo $cate['desc_category_product'] ?>" name="desc_category_product" class="form-control" id="pwd">
                    </div>
                    <button type="submit" class="btn btn-primary float-left">Cập nhật danh mục</button>
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
 