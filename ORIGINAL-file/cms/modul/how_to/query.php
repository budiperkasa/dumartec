<?
switch(strtolower($_POST["submit"])){
   case "cancel" :
      pss_redirect(1,"?".pss_url_def()."=".$_GET[pss_url_def()]."&p=".$_GET["p"]);
   break;
   case "update" :
      if(pss_form_is_empty($_POST["desc"])){
         $id = $_POST["id"];
         $desc = pss_withTinyMCE($_POST["desc"]);
         mysql_query("update pss_how_to set description = '".$desc."'");
         pss_alert("Updated!");
         pss_redirect(1,"?".pss_url_def()."=".$_GET[pss_url_def()]."&p=".$_GET["p"]);
      }else{
         pss_alert("Need data on:\\n- Description");
      }
   break;

}
?>