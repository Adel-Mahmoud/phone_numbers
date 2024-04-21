<?php 
  include_once '../includes/header.php';
  include_once '../includes/navbar.php';
  include_once './backend.php';
?>
<div class="wrapper">
	
	<div class="modal fade" id="exampleModalEdit" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
	  <div class="modal-dialog modal-dialog-top" role="document">
	    <div class="modal-content">
	      <div class="modal-body">
	        <h3 class="text-center text-primary w-100" >
	          Edit Network Name 
	        </h3>
	        <!-- form start -->
	        <form id="quickForm" method="post">
	          <div class="card-body">
	            <div class="form-group">
	              <input type="hidden" id="id" name="id" class="form-control" id="exampleInputEmail1" placeholder="">
	            </div>
	            <div class="form-group">
	              <label for="network">Network Name</label>
	              <input type="text" name="network" id="networkE" class="form-control" placeholder="Network Name" required="required">
	            </div>
	            <div class="form-group">
							  <button name="edit" class="btn btn-success">Edit</button>
	            </div>
	          </div>
	          <!-- /.card-body -->
	        </form>
	      <div class="modal-footer">
	        <button type="button" class="btn btn-secondary" data-dismiss="modal">أغلاق</button>
	      </div>
	    </div>
	  </div>
		</div>
	</div>

   <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Networks</h1>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-12">
            <!-- jquery validation -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Add Networks</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form id="quickForm" method="post">
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Network</label>
                    <input type="text" name="networkName" class="form-control" id="exampleInputEmail1" placeholder="Network" required="required">
                  </div>
                  <div class="form-group">
										<button class="btn btn-primary" name="add">Add</button>
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

  <!-- Main Table -->
  <section class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-header">
              <h3 class="card-title">Networks Data</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body" style="overflow:scroll;">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>id</th>
                  <th>Network Name</th>
                  <th>action</th>
                </tr>
                </thead>
                <tbody>
                <?php
                  $num = 1;
									foreach ($networks as $net) {
                		$num++;
                		echo '<tr>
					                  <td>'.$num.'</td>
					                  <td>'.$net["network"].'</td>
					                  <td>
					                  	<a class="text-success" href="#" data-toggle="modal" data-target="#exampleModalEdit" onclick="edit('.$net["net_id"].',`'.$net['network'].'`)">Edit</a>
					                  	|
					                  	<a class="text-danger del" href="?delete='.$net["net_id"].'">Delete</a>
					                  </td>
					                </tr>';
									}
								?>
                
               </tbody>
              </table>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
  </section>
  <!-- /.Table -->
  
  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->
<?php include_once '../includes/footer.php';?>
<script>
function edit(id,net) {
	$("#id").val(id)
	$("#networkE").val(net);
}
/*
$(".del").click(()=>{
	swal({
  title: "Are you sure?",
  text: "Your will not be able to recover this imaginary file!",
  type: "warning",
  showCancelButton: true,
  confirmButtonClass: "btn-danger",
  confirmButtonText: "Yes, delete it!",
  closeOnConfirm: false
},
function(){
  swal("Deleted!", "Your imaginary file has been deleted.", "success");
});
});
*/
	
</script>
