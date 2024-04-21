<!-- jQuery -->
<script src="<?php echo URL_ROOT.'administration/assets/js/jquery.min.js';?>"></script>
<!-- Bootstrap 4 -->
<script src="<?php echo URL_ROOT.'administration/assets/js/bootstrap.bundle.js';?>"></script>
<!-- AdminLTE App -->
<script src="<?php echo URL_ROOT.'administration/assets/js/adminlte.min.js';?>"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?php echo URL_ROOT.'assets/js/sweetalert.js';?>"></script>
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
<!-- Page specific script -->
<script>
$(function () {
  $.validator.setDefaults({
    submitHandler: function () {
      alert( "Form successful submitted!" );
    }
  });
  $('#quickForm').validate({
    rules: {
      email: {
        required: true,
        email: true,
      },
      password: {
        required: true,
        minlength: 5
      },
      terms: {
        required: true
      },
    },
    messages: {
      email: {
        required: "Please enter a email address",
        email: "Please enter a valid email address"
      },
      password: {
        required: "Please provide a password",
        minlength: "Your password must be at least 5 characters long"
      },
      terms: "Please accept our terms"
    },
    errorElement: 'span',
    errorPlacement: function (error, element) {
      error.addClass('invalid-feedback');
      element.closest('.form-group').append(error);
    },
    highlight: function (element, errorClass, validClass) {
      $(element).addClass('is-invalid');
    },
    unhighlight: function (element, errorClass, validClass) {
      $(element).removeClass('is-invalid');
    }
  });
});
</script>
</body>
</html>
