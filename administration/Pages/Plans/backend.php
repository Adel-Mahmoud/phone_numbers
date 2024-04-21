<?php 
  if (post("add")!==null) {
  	insert("plans","plan_title,plan_content,net_id,plan_date","?,?,?,now()",[post("plan_title"),post("plan_content"),post("net_id")]);
  }
  if (get("delete")!==null) {
  	delete("plans","plan_id=?",[get("delete")]);
    ?><script>window.location.href="index.php";</script><?php
  }
  if (post("edit")!==null) {
  	update("plans","plan_title=?,plan_content=?,net_id=?,plan_date=now()","plan_id=?",[post("plan_title"),post("plan_content"),post("net_id"),post("id")]);
  }
  $plans    = getAllData("*","plans JOIN networks ON plans.net_id=networks.net_id");
  $networks = getAllData("*","networks");
?>