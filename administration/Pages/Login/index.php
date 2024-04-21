<?php 
  include_once '../includes/header.php';
  include_once 'backend.php';
  if (isset($_SESSION["username"])) {
  	header("Location:../Networks");
  }
?>
<div class="d-flex justify-content-center align-items-center" style="height:100vh;">
	<!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-12">
            <!-- jquery validation -->
            <div class="card card-primary">
              <!-- /.card-header -->
              <!-- form start -->
              <form method="post">
                <div class="card-body">
                	<h3 class="text-center text-primary">Login</h3>
                  <div class="form-group">
                    <input type="text" name="username" class="form-control" id="exampleInputEmail1" placeholder="User Name" required="required">
                  </div>
                  <div class="form-group">
                    <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password" required="required">
                  </div>
                  <div class="form-group mb-0">
									  <button class="btn btn-primary" name="login">login</button>
                  </div>
                </div>
                <!-- /.card-body -->
              </form>
            </div>
            <!-- /.card -->
            </div>
          <!--/.col (left) -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
</div>
<?php include_once '../../includes/footer.php';?>