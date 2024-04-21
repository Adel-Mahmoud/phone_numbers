<?php include_once 'includes/header.php';
      include_once 'includes/navbar.php'; 
      require_once 'email2.php';
      ?>
    <br />
    <div class="container">
      <div class="container form-register" style="background:#fff;">
        <form method="post" class="text-left" id="myForm">
	        <br />
	        <input type="hidden" id="data" name="data">
	        <h3 class="text-center color">
	        	<div class=""> 
	        	  <div class="col">
		        		Please fill the below form 
		        	</div>
						  <div class="col">
	 برجاء استكمال البيانات التالية 
							</div>
		        </div>
					</h3>
	        <br />
	        <input type="hidden" name="numbers" id="dataEmail" />
	        <div class="form">
	          <label for="">
	            <span class="text-danger">*</span>
	            Full name (Same as national ID) الاسم كما هو مسجل بالرقم القومى
	            - 
	          </label>
	          <br />
	          <input class="form-control" type="text" name="name" id="" value="" placeholder="" required/>
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
	          <input class="form-control" type="number" name="national_id" id="national_id" value="" placeholder="" required/>
  					<span class="text-danger" id="errorNational_id">It must be 14 digits.
لابد ان يكون ١٤ رقم.</span>
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
	          <input class="" type="radio" name="school" id="qa" value="Qaitbay" placeholder="" required/>
	          <label for="qa"> Qaitbay قايتباى  &nbsp;</label>
	          <br />
	          <input class="" type="radio" name="school" id="nc" value="Newcastle" placeholder="" required/>
	          <label for="nc"> Newcastle نيوكاسيل &nbsp;</label>
	          <br /> 
	          <input class="" type="radio" name="school" id="nQty" value="New Qaitbay Badr City" placeholder="" required/>
	          <label for="nQty"> New Qaitbay Badr نيوقايتباى بدر &nbsp;</label>
	          <br />
	        </div>
	        <hr />
	        <div class="form">
	          <label for="division">
	            <span class="text-danger">*</span>
	             Division القسم 
	            - 
	          </label>
	          <br />
	          <select dir="ltr" class="form-control" name="division" id="division" required/>
	            <option >إختار</option>
	            <option>Administration الادارة والاشراف</option>
	            <option>Teacher مدرس</option>
	          </select>
	          <br />
	        </div>
	        <hr />
	        <div class="form">
	          <label for="job">
	            <span class="text-danger">*</span>
	            Job titile المسمى الوظيفى
	            - 
	          </label>
	          <br />
	          <input class="form-control" type="" name="job" id="job" value="" placeholder="" required/>
	          <br />
	        </div>
	        <div class="form">
	          <label for="cmn">
	            <span class="text-danger">*</span>
	            Current mobile number رقم الموبيل الحالى للتواصل
	            - 
	          </label>
	          <br />
	          <input class="form-control" type="number" name="cmn" id="cmn" value="" placeholder="" required/>
  				  <span class="text-danger" id="errorCmn">It must be 11 digits.
لابد من ان يكون ١١ رقم.</span>
	        </div>
	        <hr />
	        <div class="form">
	            <span class="text-danger float-left">*</span>
	          <p dir="rtl">
	* The line costs 62 LE.
<br>
* مصاريف الشريحة والتشغيل 62 جنيه.
	<br />__________________________________________<br />
	* Monthly fees will be deducted from your salary no need to go to vodafone branch. <br />
	* سيتم خصم الرسوم الشهرية من راتبك ، لا داعي للذهاب إلى فرع فودافون
	<br />__________________________________________<br />
	* If you finished your bundle you can recharge using recharge cards or balance transfer. <br />
	* إذا انتهيت من باقتك يمكنك إعادة الشحن بكروت الشحن او تحويل رصيد
	<br />__________________________________________<br />
	* If you have any inquiry send whatsapp message to Eng. Ahmed Sharara on 01091119111 <br />
	* إذا كان لديك أي استفسار يمكنك ارسال رسالة واتس اب الى م/ احمد شرارة على رقم 01091119111
	          </p>
	          <br />
	          <input type="radio" name="ok" id="ok" value="" /> &nbsp;
	          <label for="ok">
	          Ok 
	           موافق
						</label>
	          <br /><br />
	          <button class="btn btn-primary" type="submit" name="send">
	            إرسال
	          </button>
	          <br /><br />
	        </div>
	      </form>
	    </div>
      <br /><br />
    </div>
    
<?php include_once 'includes/footer.php';?>
    <script type="text/javascript">
    document.querySelector("#data").value=localStorage.getItem("data");
     var Alert = "<?php if(isset($_SESSION['email'])){echo $_SESSION['email'];}?>";
     if(Alert !== ""){
      window.localStorage.removeItem('data');
      window.localStorage.clear();
      window.location.href='index.php';
     }
      $(document).ready(()=>{
		    $("#errorNational_id").hide();
			  $("#errorCmn").hide();
	      $("#myForm").on('submit', function(e){
    		  if($("#national_id").val().length !== 14){
    		    e.preventDefault();
    		    $("#national_id").focus();
		     		$("#errorNational_id").show();
	     		}else{
		     		$("#errorNational_id").hide()
	          if($("#cmn").val().length !== 11){
	    		    e.preventDefault();
	    		    $("#cmn").focus();
			     		$("#errorCmn").show();
		     		}else{
			     		$("#errorCmn").hide();
		          e.submit();
		     		}
	     		}
  			});
      });
    </script>
