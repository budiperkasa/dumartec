<?
switch(strtolower($_POST["submit"])){
   case "cancel" :
      pss_redirect(1,"?".pss_url_def()."=".$_GET[pss_url_def()]."&p=".$_GET["p"]);
   break;
   case "create" :
      if(pss_form_is_empty($_POST["name"])){
         $arr["id"] = pss_db_date($pss_realtime);
         $arr["name"] = pss_noHTML($_POST["name"]);
         $arr["meta_tag"] = pss_noHTML($_POST["meta_tag"]);
         $arr["meta_key"] = pss_noHTML($_POST["meta_key"]);
         $arr["meta_desc"] = pss_noHTML($_POST["meta_desc"]);

         $filesize = pss_pic_upload(1,$_FILES["thefile"]);
         $filetrue = pss_pic_upload(2,$_FILES["thefile"]);
         $file_ext = pss_pic_upload(3,$_FILES["thefile"]);
         $file_nam = pss_pic_upload(5,$_FILES["thefile"]);
         if($filesize>5){
            if($filetrue){
               $folder = "../file/prod_brand/";
               pss_pic_upload(4,$_FILES["thefile"],pss_db_date($pss_realtime)."-".$file_nam,$folder,75);
               $arr["pic"] = pss_noHTML(pss_db_date($pss_realtime)."-".$file_nam."x.".$file_ext);
            }else{
               pss_alert("Only JPG and GIF are allowed.");
            }
         }
         $SQL = pss_db_insert("pss_prod_brand",$arr);
         mysql_query($SQL);
         pss_alert("Created!");
         pss_redirect(1,$_SERVER["REQUEST_URI"]);
      }else{
         pss_alert("Need data on:\\n- Subject");
      }
   break;
   case "update" :
      if(pss_form_is_empty($_POST["name"])){
         $id = pss_noHTML($_GET["id"]);
         $arr["name"] = pss_noHTML($_POST["name"]);
         $arr["meta_tag"] = pss_noHTML($_POST["meta_tag"]);
         $arr["meta_key"] = pss_noHTML($_POST["meta_key"]);
         $arr["meta_desc"] = pss_noHTML($_POST["meta_desc"]);

         $filesize = pss_pic_upload(1,$_FILES["thefile"]);
         $filetrue = pss_pic_upload(2,$_FILES["thefile"]);
         $file_ext = pss_pic_upload(3,$_FILES["thefile"]);
         $file_nam = pss_pic_upload(5,$_FILES["thefile"]);
         if($filesize>5){
            if($filetrue){
               $folder = "../file/prod_brand/";
               $SQL = "SELECT * FROM pss_prod_brand WHERE id = '$id'";
               $queryq = mysql_query($SQL);
               $query = mysql_fetch_array($queryq);
               @unlink($folder.$query[pic]);
               @unlink($folder.str_replace("x","",$query[pic]));
               pss_pic_upload(4,$_FILES["thefile"],pss_db_date($pss_realtime)."-".$file_nam,$folder,75);
               $arr["pic"] = pss_noHTML(pss_db_date($pss_realtime)."-".$file_nam."x.".$file_ext);
            }else{
               pss_alert("Only JPG and GIF are allowed.");
            }
         }
         $SQL = pss_db_update("pss_prod_brand",$arr,"id = '$id'");
         mysql_query($SQL);
         pss_alert("Updated!");
         pss_redirect(1,"?".pss_url_def()."=".$_GET[pss_url_def()]."&p=".$_GET["p"]);
      }else{
         pss_alert("Need data on:\\n- Subject");
      }
   break;
   case "delete" :
      $SQL = "SELECT * FROM pss_prod_brand WHERE id = '".pss_noHTML($_GET["id"])."'";
      $queryq = mysql_query($SQL);
      $query = mysql_fetch_array($queryq);
      if($query){
         $folder = "../file/prod_brand/";
         @unlink($folder.$query[pic]);
         @unlink($folder.str_replace("x","",$query[pic]));
         $id = pss_noHTML($_GET["id"]);
         $SQL = pss_db_delete("pss_prod_brand","id = '$id'");
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
         $folder = "../file/prod_brand/";
         $SQL = "SELECT * FROM pss_prod_brand WHERE id = '$val'";
         $queryq = mysql_query($SQL);
         $query = mysql_fetch_array($queryq);
         @unlink($folder.$query[pic]);
         @unlink($folder.str_replace("x","",$query[pic]));
         $SQL = pss_db_delete("pss_prod_brand","id = '$val'");
         mysql_query($SQL);
      }
      if($_POST["box_del"]){
         pss_alert("All checked data has been deleted.");
         pss_redirect(1,"?".pss_url_def()."=".$_GET[pss_url_def()]."&p=".$_GET["p"]);
      }
   break;
}
?>