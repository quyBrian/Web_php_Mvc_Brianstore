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
            <h1>Quản Lý Danh Mục</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Quản lý danh mục</li>
              <li class="breadcrumb-item active">Thêm slider</li>
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
                <h3 class="card-title">Thêm Slider</h3>
              </div>
              
              <div class="card-body">
                <form action="<?php echo BASE_URL ?>/slider/insert_slider" method="POST">
                    <div class="form-group">
                        <label for="email">Tên slider</label>
                        <input type="text" name="title_slider" class="form-control" id="email">
                    </div>
                    <div class="form-group">
                        <label for="text">Hình ảnh</label>
                        <input type="file" name="image_slider" class="form-control" id="text">
                    </div>
                    <button type="submit" class="btn btn-primary float-left">Thêm slider</button>
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
 