<?
switch(strtolower($_POST["submit"])){
   case "cancel" :
      pss_redirect(1,"?".pss_url_def()."=".$_GET[pss_url_def()]."&p=".$_GET["p"]);
   break;
   case "create" :
      if(pss_form_is_empty($_POST["page"]) && pss_form_is_empty($_POST["block"])){
         $arr["id"] = pss_db_date($pss_realtime);
         $arr["name"] = pss_noHTML($_POST["block"]);
		 $arr["page"] = pss_noHTML($_POST["page"]);
		 $arr["pos"] = pss_noHTML($_POST["pos"]);
		 $arr["lr"] = pss_noHTML($_POST["alignment"]);
         
         $SQL = pss_db_insert("pss_design_block",$arr);
         mysql_query($SQL);
         pss_alert("Created!");
         pss_redirect(1,$_SERVER["REQUEST_URI"]);
      }else{
         pss_alert("Need data on:\\n- Page\\n- Block");
      }
   break;
   case "update" :
      if(pss_form_is_empty($_POST["page"]) && pss_form_is_empty($_POST["block"])){
         $id = pss_noHTML($_GET["id"]);
		 $arr["name"] = pss_noHTML($_POST["block"]);
		 $arr["page"] = pss_noHTML($_POST["page"]);
		 $arr["pos"] = pss_noHTML($_POST["pos"]);
		 $arr["lr"] = pss_noHTML($_POST["alignment"]);
         
         $SQL = pss_db_update("pss_design_block",$arr,"id = '$id'");
		 mysql_query($SQL);
         pss_alert("Updated!");
         pss_redirect(1,"?".pss_url_def()."=".$_GET[pss_url_def()]."&p=".$_GET["p"]);
      }else{
         pss_alert("Need data on:\\n- Page\\n- Block");
      }
   break;
   case "delete" :
      $SQL = "SELECT * FROM pss_design_block WHERE id = '".pss_noHTML($_GET["id"])."'";
      $queryq = mysql_query($SQL);
      $query = mysql_fetch_array($queryq);
      if($query){
         $id = pss_noHTML($_GET["id"]);
         $SQL = pss_db_delete("pss_design_block","id = '$id'");
         mysql_query($SQL);
         pss_alert("Deleted!");
         pss_redirect(1,"?".pss_url_def()."=".$_GET[pss_url_def()]."&p=".$_GET["p"]);
      }else{
         pss_alert("Please start over again.");
         pss_redirect(1,"?".pss_url_def()."=".$_GET[pss_url_def()]."&p=".$_GET["p"]);
      }
   break;
}

switch(strtolower($_POST["submitx"])){
   case "del_all" :
      foreach($_POST["box_del"] as $val){
         $SQL = pss_db_delete("pss_design_block","id = '$val'");
         mysql_query($SQL);
      }
      if($_POST["box_del"]){
         pss_alert("All checked data has been deleted.");
         pss_redirect(1,"?".pss_url_def()."=".$_GET[pss_url_def()]."&p=".$_GET["p"]);
      }
   break;
}
?>