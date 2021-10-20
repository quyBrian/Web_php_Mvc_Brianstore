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
                foreach($sliderbyid as $key => $sli){
              ?>
                <form action="<?php echo BASE_URL ?>/slider/update_slider/<?php echo $sli['id_slider'] ?>" method="POST" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="email">Tên bài viết</label>
                        <input type="text" value="<?php echo $sli['title_slider'] ?>" name="title_slider" class="form-control" id="email">
                    </div>
                    <div class="form-group">
                        <label for="email">Hình ảnh</label>
                        <input type="file" name="image_slider" class="form-control" id="email">
                        <p><img src="<?php echo BASE_URL ?>/public/uploads/slider/<?php echo $sli['image_slider'] ?>" width="100"; height="100"></p>
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
 