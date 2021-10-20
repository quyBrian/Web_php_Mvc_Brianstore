<footer class="main-footer">
    <strong>AdminBrian &copy; 2021 <a href="#">created by</a>.</strong>
    Brian.
    <!-- <div class="float-right d-none d-sm-inline-block">
      <b>Version</b> 3.1.0
    </div> -->
  </footer>
   <!-- Control Sidebar -->
   <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="<?php echo BASE_URL ?>/public/v3/plugins/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="<?php echo BASE_URL ?>/public/v3/plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="<?php echo BASE_URL ?>/public/v3/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- ChartJS -->
<script src="<?php echo BASE_URL ?>/public/v3/plugins/chart.js/Chart.min.js"></script>
<!-- Sparkline -->
<script src="<?php echo BASE_URL ?>/public/v3/plugins/sparklines/sparkline.js"></script>
<!-- JQVMap -->
<script src="<?php echo BASE_URL ?>/public/v3/plugins/jqvmap/jquery.vmap.min.js"></script>
<script src="<?php echo BASE_URL ?>/public/v3/plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
<!-- jQuery Knob Chart -->
<script src="<?php echo BASE_URL ?>/public/v3/plugins/jquery-knob/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="<?php echo BASE_URL ?>/public/v3/plugins/moment/moment.min.js"></script>
<script src="<?php echo BASE_URL ?>/public/v3/plugins/daterangepicker/daterangepicker.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="<?php echo BASE_URL ?>/public/v3/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Summernote -->
<script src="<?php echo BASE_URL ?>/public/v3/plugins/summernote/summernote-bs4.min.js"></script>
<!-- overlayScrollbars -->
<script src="<?php echo BASE_URL ?>/public/v3/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- DataTables  & Plugins -->
<script src="<?php echo BASE_URL ?>/public/v3/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="<?php echo BASE_URL ?>/public/v3/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="<?php echo BASE_URL ?>/public/v3/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="<?php echo BASE_URL ?>/public/v3/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<script src="<?php echo BASE_URL ?>/public/v3/plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
<script src="<?php echo BASE_URL ?>/public/v3/plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
<script src="<?php echo BASE_URL ?>/public/v3/plugins/jszip/jszip.min.js"></script>
<script src="<?php echo BASE_URL ?>/public/v3/plugins/pdfmake/pdfmake.min.js"></script>
<script src="<?php echo BASE_URL ?>/public/v3/plugins/pdfmake/vfs_fonts.js"></script>
<script src="<?php echo BASE_URL ?>/public/v3/plugins/datatables-buttons/js/buttons.html5.min.js"></script>
<script src="<?php echo BASE_URL ?>/public/v3/plugins/datatables-buttons/js/buttons.print.min.js"></script>
<script src="<?php echo BASE_URL ?>/public/v3/plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
<!-- AdminLTE App -->
<script src="<?php echo BASE_URL ?>/public/v3/dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?php echo BASE_URL ?>/public/v3/dist/js/demo.js"></script>
<!-- Page specific script -->
<script>
  $(function () {
    $("#example1").DataTable({
      "responsive": true, "lengthChange": false, "autoWidth": false,
      "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
    });
  });
</script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="<?php echo BASE_URL ?>/public/v3/dist/js/pages/dashboard.js"></script>
 <!-- cheditor -->
<!-- <script src="https://cdn.ckeditor.com/4.16.2/standard/ckeditor.js"> -->
<script src="<?php echo BASE_URL ?>/public/v3/dist/js/cheditor/ckeditor/ckeditor.js"></script>
<script type="text/javascript">
  CKEDITOR.replace( 'editor' );
</script>
</body>

<!-- Mirrored from adminlte.io/themes/v3/ by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 10 Aug 2021 16:07:05 GMT -->
</html>
