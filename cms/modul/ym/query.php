<?
switch(strtolower($_POST["submit"])){
   case "cancel" :
      pss_redirect(1,"?".pss_url_def()."=".$_GET[pss_url_def()]."&p=".$_GET["p"]);
   break;
   case "create" :
      if(pss_form_is_empty($_POST["name"]) && pss_form_is_empty($_POST["ym"])){
         $arr["id"] = pss_db_date($pss_realtime);
         $arr["name"] = pss_noHTML($_POST["name"]);
         $arr["ym"] = pss_withTinyMCE($_POST["ym"]);
         $arr["phone"] = pss_withTinyMCE($_POST["phone"]);

         $SQL = pss_db_insert("pss_ym",$arr);
         mysql_query($SQL);
         pss_alert("Created!");
         pss_redirect(1,$_SERVER["REQUEST_URI"]);
      }else{
         pss_alert("Need data on:\\n- Subject\\n- YM");
      }
   break;
   case "update" :
      if(pss_form_is_empty($_POST["name"]) && pss_form_is_empty($_POST["ym"])){
         $id = pss_noHTML($_GET["id"]);
         $arr["name"] = pss_noHTML($_POST["name"]);
         $arr["ym"] = pss_withTinyMCE($_POST["ym"]);
         $arr["phone"] = pss_withTinyMCE($_POST["phone"]);

         $SQL = pss_db_update("pss_ym",$arr,"id = '$id'");
         mysql_query($SQL);
         pss_alert("Updated!");
         pss_redirect(1,"?".pss_url_def()."=".$_GET[pss_url_def()]."&p=".$_GET["p"]);
      }else{
         pss_alert("Need data on:\\n- Subject\\n- YM");
      }
   break;
   case "delete" :
      $SQL = "SELECT * FROM pss_ym WHERE id = '".pss_noHTML($_GET["id"])."'";
      $queryq = mysql_query($SQL);
      $query = mysql_fetch_array($queryq);
      if($query){
         $id = pss_noHTML($_GET["id"]);
         $SQL = pss_db_delete("pss_ym","id = '$id'");
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
         $SQL = pss_db_delete("pss_ym","id = '$val'");
         mysql_query($SQL);
      }
      if($_POST["box_del"]){
         pss_alert("All checked data has been deleted.");
         pss_redirect(1,"?".pss_url_def()."=".$_GET[pss_url_def()]."&p=".$_GET["p"]);
      }
   break;
}
?>