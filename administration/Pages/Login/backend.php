<?php 
  if (post("login")!==null) {
  	if (checkfield("*","users","username=? AND password=?",[post("username"),post("password")])>0) {
  		$_SESSION["username"] = post("username");
  		header("Location:../Networks");
  	}
  }
  // http://localhost:8080/nemrty/ administration/pages/networks/#
?>