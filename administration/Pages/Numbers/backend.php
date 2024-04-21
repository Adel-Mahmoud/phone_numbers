<?php 
  if (post("add")!==null) {
  	if (post("number")!==""||post("listNumbers")!=="") {
  		if (post("number")!=="") {
  			 if (checkfield("*","numbers","number=?",[post("number")])==0) {
  	       insert("numbers","number,net_id,num_date","?,?,now()",[post("number"),post("network")]);
  			 }
  		} else {
  			$sql = "";
		  	for ($i = 0; $i < count(explode(",",post("listNumbers"))); $i++) {
		      	if (checkfield("*","numbers","number=?",[explode(",",post("listNumbers"))[$i]])==0) {
		      	  insert("numbers","number,net_id,num_date","?,?,now()",[explode(",",post("listNumbers"))[$i],post("network")]);
		      	}
		      	// $sql .= "INSERT INTO numbers (number,net_id,num_date) VALUES (".'0'.explode(",",post("listNumbers"))[$i].",".post("network").",now());";
		  	}
		  	/*$stmt=$con->prepare($sql);
		  	$stmt->execute();*/
		  	?><script>//window.location.href="index.php";</script><?php
  		}
  	} 
  	
  }
  if (get("delete")!==null) {
  	delete("numbers","num_id=?",[get("delete")]);
    ?><script>window.location.href="index.php";</script><?php
  }
  if (post("edit")!==null) {
  	update("numbers","number=?,net_id=?","num_id=?",[post("number"),post("network"),post("id")]);
  }
  $numbers  = getAllData("*","numbers JOIN networks ON numbers.net_id=networks.net_id");
  $networks = getAllData("*","networks");
?>
