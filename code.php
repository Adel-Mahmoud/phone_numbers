<?php
  require_once("config.php");
  
 if ($con) {

   if (isset($_GET["networks"])) {
     $stmt = $con->prepare("SELECT * FROM networks");
     $stmt->execute();
     foreach($stmt->fetchAll() as $network){
       echo '
        <option value="'.$network["net_id"].'">
          '.$network["network"].'
        </option>
       '
       ;
     }
   }
   if (isset($_GET["numbers"])) {
     $stmt = $con->prepare("SELECT * FROM numbers");
     $stmt->execute();
     foreach($stmt->fetchAll() as $number){
       echo '
        <div data-id="'.$number["number"].'"  style="max-height:55px;line-height:20px;" class="col-6 col-md-3 col-lg-3 col-xl-2 numbers item">
          <div class="number ripple border my-btn"  style="background: #fff;">
            <img src="assets/img/1.svg" style="height:50px;" class="card-img-top" alt="...">
            <div class="num color-dark"> '.$number["number"].' </div>
          </div>
        </div>
       '
       ;
     }
   }
   if (isset($_GET["plans"])) {
     $stmt = $con->prepare("SELECT * FROM plans");
     $stmt->execute();
     foreach($stmt->fetchAll() as $plan){
       echo '
       		  <div class="item">
				      <div class="card">
				      <div class="card-body">
				        <h3 class="color">'.$plan["plan_title"].'</h3>
				        <p class="card-text">
				         '.$plan["plan_content"].
				        '</p>
				        <div class="btn-choose" data-btn="'.$plan["plan_title"].'centerPlanTitle'.$plan["plan_content"].'
				        ">
				          <div class="btn background-dark text-light btn-block choose-plan">Choose 
				          </div>
				        </div>
				      </div>
				    </div> 
				  </div>
       ';
      }
     }
   }
?>

