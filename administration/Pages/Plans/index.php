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
	          Edit Plan
	        </h3>
	        <!-- form start -->
	        <form id="quickForm" method="post">
	          <div class="card-body">
	            <div class="form-group">
	              <input type="hidden" id="id" name="id" class="form-control" id="exampleInputEmail1" placeholder="">
	            </div>
	            <div class="form-group">
	             <label for="network">Network Name</label>
	             <select name="net_id" class="form-control" id="network" required="required">
              	<?php
								  foreach ($networks as $network){
								  	echo '<option value="'.$network["net_id"].'">'.$network["network"].'</option>';
								  }
								?>
              </select>
	            </div>
	            <div class="form-group">
	              <label for="plan_title">Plan Title</label>
	              <input type="text" name="plan_title" id="plan_title" class="form-control" placeholder="Plan Title" required="required">
	            </div>
	            <div class="form-group">
	              <label for="plan_content">Plan Content</label>
	              <textarea type="text" name="plan_content" id="plan_content" class="form-control" placeholder="Plan Content" required="required"></textarea>
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
            <h1>Plans</h1>
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
                <h3 class="card-title">Add Plan</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form id="quickForm" method="post">
                <div class="card-body">
                  <div class="form-group">
                    <label for="network">Network</label>
                    <select name="net_id" class="form-control" required="required">
                    	<?php
											  foreach ($networks as $network){
											  	echo '<option value="'.$network["net_id"].'">'.$network["network"].'</option>';
											  }
											?>
                    </select>
                  </div>
                  <div class="form-group">
			              <label for="plan_title">Plan Title</label>
			              <input type="text" name="plan_title" id="plan_title" class="form-control" placeholder="Plan Title" required="required">
			            </div>
			            <div class="form-group">
			              <label for="plan_content">Plan Content</label>
			              <textarea type="text" name="plan_content" id="plan_content" class="form-control" placeholder="Plan Content" required="required"></textarea>
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
              <h3 class="card-title">Plans Data</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body" style="overflow:scroll;">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>id</th>
                  <th>Plan Title</th>
                  <th>Plan Content</th>
                  <th>Network</th>
                  <th>action</th>
                </tr>
                </thead>
                <tbody>
                <?php
                  $num = 1;
									foreach ($plans as $plan) {
                		$num++;
                		echo '<tr>
					                  <td>'.$num.'</td>
					                  <td>'.$plan["plan_title"].'</td>
					                  <td>'.$plan["plan_content"].'</td>
					                  <td>'.$plan["network"].'</td>
					                  <td>
					                  	<a class="text-success" href="#" data-toggle="modal" data-target="#exampleModalEdit" onclick="edit(`'.$plan["plan_title"].'`,`'.$plan["plan_content"].'`,`'.$plan['plan_id'].'`)">Edit</a>
					                  	|
					                  	<a class="text-danger del" href="?delete='.$plan["plan_id"].'">Delete</a>
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
function edit(title,content,id) {
	$("#id").val(id);
	//$("#network").val(net);
	$("#plan_title").val(title);
	$("#plan_content").val(content);
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
