<?php 
  if (post("add")!==null) {
  	insert("networks","network,net_date","?,now()",[post("networkName")]);
  }
  if (get("delete")!==null) {
  	delete("networks","net_id=?",[get("delete")]);
    ?><script>window.location.href="index.php";</script><?php
  }
  if (post("edit")!==null) {
  	update("networks","network=?","net_id=?",[post("network"),post("id")]);
  }
  $networks = getAllData("*","networks");
?>