<!-- jQuery -->
<script src="<?php echo URL_ROOT.'administration/assets/js/jquery.min.js';?>"></script>
<!-- Bootstrap 4 -->
<script src="<?php echo URL_ROOT.'administration/assets/js/bootstrap.bundle.js';?>"></script>
<!-- AdminLTE App -->
<script src="<?php echo URL_ROOT.'administration/assets/js/adminlte.min.js';?>"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?php echo URL_ROOT.'administration/assets/js/demo.js';?>"></script>
<!--=====    section table    =====-->
<script src="<?php echo URL_ROOT.'administration/assets/js/jquery.dataTables.min.js';?>"></script>
<script src="<?php echo URL_ROOT.'administration/assets/js/dataTables.bootstrap4.min.js';?>"></script>
<script>
  $(function () {
    $("#example1").DataTable({
      "responsive": true, "lengthChange": false, "autoWidth": false,
      /* "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"] */
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
</body>
</html>
