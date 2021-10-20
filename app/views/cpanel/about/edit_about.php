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
                <h3 class="card-title">Cập nhật Giới thiệu</h3>
              </div>
              <div class="card-body">
              <?php
                foreach($aboutbyid as $key => $ab){
              ?>
                <form action="<?php echo BASE_URL ?>/about/update_about/<?php echo $ab['id_about'] ?>" method="POST" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="email">Tiêu đề </label>
                        <input type="text" value="<?php echo $ab['title_about'] ?>" name="title_about" class="form-control" id="email">
                    </div>
                    <div class="form-group">
                        <label for="email">Hình ảnh</label>
                        <input type="file" name="image_about" class="form-control" id="email">
                        <p><img src="<?php echo BASE_URL ?>/public/uploads/about/<?php echo $ab['image_about'] ?>" width="200px" height="150px"></p>
                    </div>
                    <div class="form-group">
                        <label for="pwd">Nội dung </label>
                        <textarea type="text"  name="content_about" rows="10" style="resize:none" class="form-control" id="editor"><?php echo $ab['content_about'] ?></textarea>
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
 