<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <img src="<?php echo BASE_URL ?>/public/v3/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">Brian Store</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="<?php echo BASE_URL ?>/public/v3/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <?php
            if(isset($_SESSION['userid'])&&($_SESSION['userid']!="")){
          ?>
            <a href="#" class="d-block"><?php echo $_SESSION['username'] ?> </a>
          <?php
            }else{
          ?>
          <a href="#" class="d-block">brian</a>
          <?php
            }
          ?>
        </div>
      </div>

      <!-- SidebarSearch Form -->
      <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw"></i>
            </button>
          </div>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item menu-open">
            <a href="<?php echo BASE_URL ?>/login/dashboard" class="nav-link active">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Bảng điều khiển 
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-table"></i>
              <p>
                Quản lý
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?php echo BASE_URL ?>/category" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Quản lý danh mục</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?php echo BASE_URL ?>/slider" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Quản lý Slider</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?php echo BASE_URL ?>/post" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Quản lý bài viết</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?php echo BASE_URL ?>/product" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Quản lý sản phẩm</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?php echo BASE_URL ?>/user" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Quản lý người dùng</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?php echo BASE_URL ?>/order" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Quản lý đơn hàng</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?php echo BASE_URL ?>/about" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Quản lý Giới thiệu</p>
                </a>
              </li>
            </ul>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>