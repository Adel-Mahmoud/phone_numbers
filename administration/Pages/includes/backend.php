<?php 
  require_once '../../../config.php';
  if (post("edit")!==null) {
  	update("maximum","max=?","id=?",[post("max"),post("id")]);
  }
  $max = getData("*","maximum","id=?",[1]);
?>