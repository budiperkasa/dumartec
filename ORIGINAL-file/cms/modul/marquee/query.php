<?
switch(strtolower($_POST["submit"])){
   case "cancel" :
      pss_redirect(1,"?".pss_url_def()."=".$_GET[pss_url_def()]."&p=".$_GET["p"]);
   break;
   case "create" :
      if(pss_form_is_empty($_POST["desc"])){
         $arr["id"] = pss_db_date($pss_realtime);
         $arr["description"] = pss_withTinyMCE($_POST["desc"]);
         $arr["status"] = isset($_POST['status']) ? "1" : "0";

         $SQL = pss_db_insert("pss_marquee",$arr);
         mysql_query($SQL);
         pss_alert("Created!");
         pss_redirect(1,$_SERVER["REQUEST_URI"]);
      }else{
         pss_alert("Need data on:\\n- Description");
      }
   break;
   case "update" :
      if(pss_form_is_empty($_POST["desc"])){
         $id = pss_noHTML($_GET["id"]);
         $arr["description"] = pss_withTinyMCE($_POST["desc"]);
         $arr["status"] = isset($_POST['status']) ? "1" : "0";

         $SQL = pss_db_update("pss_marquee",$arr,"id = '$id'");
         mysql_query($SQL);
         pss_alert("Updated!");
         pss_redirect(1,"?".pss_url_def()."=".$_GET[pss_url_def()]."&p=".$_GET["p"]);
      }else{
         pss_alert("Need data on:\\n- Description");
      }
   break;
   case "delete" :
      $SQL = "SELECT * FROM pss_marquee WHERE id = '".pss_noHTML($_GET["id"])."'";
      $queryq = mysql_query($SQL);
      $query = mysql_fetch_array($queryq);
      if($query){
         $id = pss_noHTML($_GET["id"]);
         $SQL = pss_db_delete("pss_marquee","id = '$id'");
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
         $SQL = pss_db_delete("pss_marquee","id = '$val'");
         mysql_query($SQL);
      }
      if($_POST["box_del"]){
         pss_alert("All checked data has been deleted.");
         pss_redirect(1,"?".pss_url_def()."=".$_GET[pss_url_def()]."&p=".$_GET["p"]);
      }
   break;
}
?>