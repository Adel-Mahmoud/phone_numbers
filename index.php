<?php 
 include_once 'config.php';
 include_once 'includes/header.php';
 include_once 'includes/navbar.php';?>

    <div class="container-floid bg-light hd-choose">
      <h3 class="text-dark">CHOOSE YOUR NUMBER</h3>
    </div>
    
    <div class="purchases background-dark">
      <a class=" cart-shopping background-dark cart" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        <div id="cart">0</div>
        <i class="fa fa-cart-shopping"></i>
      </a>
      <div class="dropdown-menu cart-numbers" aria-labelledby="navbarDropdown">
        <div id="cartNumbers">
          
        </div>
        <div class="dropdown-divider"></div>
        <div id="removeAllNumbers" class="dropdown-item">Delete All</div>
      </div>
    </div>
    
    <div class="next-page background-dark">
      <a class="text-light" href="plans.php">Next</a>
    </div>
    
    <section>
      <div class="container-floid" style="min-height:50vh; overflow:scroll;">
        <br>
        <div class="container-search d-flex justify-content-center align-items-center w-100">  
          <select class="form-control search-number" id="networks">
            <!--<option>Choose Your Network</option>-->
            <option value="Vodafone">Vodafone</option>
            <option value="Orange" disabled="true">Orange</option>
            <option value="Etisalat" disabled="true">Etisalat</option>
            <option value="We" disabled="true">We</option>
          </select>
          <input type="number" class="form-control search-number" id="inputSearch" placeholder="Search For Your Favorite Number   🔍">
        </div>
        
        <div class="row w-100 items" style="margin:0 auto;" id="container_numbers">
				<!-- container numbers-->
        </div>
        <br><br>
      </div>
      <br><br>
    	<footer> 
      <span class="text-center text-light">Copyright reserved by <i>Adel Mahmoud</i> AIA ©</span>
    </footer>
    </section>
    <input id="max" type="hidden" value="<?php echo getData("*","maximum","id=?",[1])["max"];?>">
<?php include_once 'includes/footer.php';?>
<script>
	var Alert = "<?php if(isset($_SESSION['email'])){echo $_SESSION['email'];}?>";
    if(Alert !== ""){
    	 swal("", `
    	Your request has been sent successfully.
تم إرسال طلبك بنجاح.
    	 `, "success");
      window.localStorage.removeItem('data');
      window.localStorage.clear();
      <?php unset($_SESSION["email"]);?>
    }
</script>
