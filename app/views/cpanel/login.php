<!-- <form autocomplete="off" action="?php echo BASE_URL ?>/login/authentication_login" method="POST">

    ?php
        if(isset($msg)){
            echo '<span style ="color:blue ; font-weight:bold; " >'.$msg.'</span>';
        }

    ?>


    <table>
        <tr>
            <td>Username </td>
            <td><input type="text" required="1" name="username"></td>
        </tr>
        <tr>
            <td>Password</td>
            <td><input type="password" required="1" name="password"></td>
        </tr>
        <tr>
            <td><input type="submit" name="login" value="login"></td>
        </tr>
    </table>
</form>
<!DOCTYPE html>
<html lang="en"> -->

<!-- Mirrored from adminlte.io/themes/v3/pages/examples/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 10 Aug 2021 16:08:38 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=utf-8" /><!-- /Added by HTTrack -->
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>AdminLTE 3 | Log in</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&amp;display=fallback">
  <!-- Font Awesome -->
  <!-- <link rel="stylesheet" href="../../plugins/fontawesome-free/css/all.min.css"> -->
  <link rel="stylesheet" href="public/v3/plugins/fontawesome-free/css/all.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="public/v3/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="public/v3/dist/css/adminlte.min.css">
</head>
<body class="hold-transition login-page">
<div class="login-box">
  <div class="login-logo">
    <a href="public/v3/index2.html"><b>Admin</b>Mr.Brian</a>
  </div>
  <!-- /.login-logo -->
  <div class="card">
    <div class="card-body login-card-body">
      <p class="login-box-msg" style="font-size: 1rem;">Sign in to start your session</p>

      <?php
        if(isset($msg)){
            echo '<span style ="color:blue ; font-weight:bold; " >'.$msg.'</span>';
        }

      ?>

      <!-- form action="https://adminlte.io/themes/v3/index3.html"  method="post"> -->
      <form  autocomplete="off" action="<?php echo BASE_URL ?>/login/authentication_login" method="POST">
        <div class="input-group mb-3">
          <input type="text" class="form-control" required="1" name="username" placeholder="Email">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="password" class="form-control" equired="1" name="password"  placeholder="Password">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-8">
            <div class="icheck-primary">
              <input type="checkbox" id="remember">
              <label for="remember" style="font-size: 1rem;">
                Remember Me
              </label>
            </div>
          </div>
          <!-- /.col -->
          <div class="col-4">
            <button type="submit" required="1" name="login" class="btn btn-primary btn-block ">Sign In</button>
          </div>
          <!-- /.col -->
        </div>
      </form>

      <div class="social-auth-links text-center mb-3">
        <p style="font-size: 1rem;">- OR -</p>
        <a href="#" class="btn btn-block btn-primary">
          <i class="fab fa-facebook mr-2"></i> Sign in using Facebook
        </a>
        <a href="#" class="btn btn-block btn-danger">
          <i class="fab fa-google-plus mr-2"></i> Sign in using Google+
        </a>
      </div>
      <!-- /.social-auth-links -->

      <p class="mb-1">
        <a href="forgot-password.html" style="font-size: 1rem; height: 24px;">I forgot my password</a>
      </p>
      <p class="mb-0">
        <a href="register.html" class="text-center" style="font-size: 1rem;">Register a new membership</a>
      </p>
    </div>
    <!-- /.login-card-body -->
  </div>
</div>
<!-- /.login-box -->

<!-- jQuery -->
<script src="public/v3/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="public/v3/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="public/v3/dist/js/adminlte.min.js"></script>
</body>

<!-- Mirrored from adminlte.io/themes/v3/pages/examples/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 10 Aug 2021 16:08:38 GMT -->
</html>
