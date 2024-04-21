<?php 
include_once("config.php");
 $data = [];  
 foreach ($_POST as $key => $d){
	 	$data[$key] = $_POST[$key];
	 }
 
 if (isset($_POST["send"])) {
 	$stmt = $con->prepare("DELETE FROM numbers WHERE number IN (".$_POST["data"].")");
 	$stmt->execute();
 	  $alert = "success";
 	  $viewData = '<div class="card" id="view-data"></div>';
    $message = '
<!DOCTYPE html>
<html>
	<head>
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
		<style>
		  body { 
			  background: #eee;
			  width:100%;
			  padding: 10px;
			}
			.color{
			  color:#2C74B3;
			}
			.form-register{
			  border-top: 7px solid #2C74B3;
			  border-radius: 5px;
			  box-shadow:0 0 5px #aaa;
			}
		</style>
	</head>
	<body>
    <br />
    <div class="container">
      <div class="container form-register text-right" style="background:#fff;padding: 10px;" dir=rtl">
	        <br />
	        <h3 class="text-center color">New number request </h3>
	        <br />
	        
	        '.$data["numbers"].'
					<br />
	        
	        <div class="form">
	          <label for="">
	            <span class="text-danger">*</span>
	            Full name (Same as national ID) الاسم كما هو مسجل بالرقم القومى
	            - 
	          </label>
	          <br />
	          <span>'. $data["name"].'</span>
	          <br />
	        </div>
	        <hr />
	        <div class="form">
	          <label for="">
	            <span class="text-danger">*</span>
	            National ID الرقم القومى
	            - 
	          </label>
	          <br />
	          <span>'. $data["national_id"].'</span>
	          <br />
	        </div>
	        <hr />
	        <div class="form">
	          <label for="">
	            <span class="text-danger">*</span>
	            The School
	             المدرسة 
	            - 
	          </label>
	          <br />
	          <span>'. $data["school"].'</span>
	        </div>
	        <hr />
	        <div class="form">
	          <label for="">
	            <span class="text-danger">*</span>
	             Division القسم 
	            - 
	          </label>
	          <br />
	          <span>'. $data["division"].'</span>
	          <br />
	        </div>
	        <hr />
	        <div class="form">
	          <label for="">
	            <span class="text-danger">*</span>
	            Job titile المسمى الوظيفى
	            - 
	          </label>
	          <br />
	          <span>'. $data["job"].'</span>
	          <br />
	        </div>
	        <div class="form">
	          <label for="">
	            <span class="text-danger">*</span>
	            Current mobile number رقم الموبيل الحالى للتواصل
	            - 
	          </label>
	          <br />
	          <span>'. $data["cmn"].'</span>
	          <br /><br />
	        </div>
	      </div>
	    </div>
      <br /><br />
    </div>
  </body>
</html>
    ';
require_once("mailer.php");
} // end button send email 
?>


