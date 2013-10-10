<?
switch(strtolower($_POST["submit"])){
   case "cancel" :
      pss_redirect(1,"?".pss_url_def()."=".$_GET[pss_url_def()]."&p=".$_GET["p"]);
   break;
   case "create" :
      if(pss_form_is_empty($_FILES["thefile"]["name"])){
         $arr["id"] = pss_db_date($pss_realtime);
         $arr["url"] = pss_post_url($_POST["url"],1);
                 $arr["height"] = pss_noHTML($_POST["height"]);
                 $arr["pos"] = pss_noHTML($_POST["pos"]);
                 $arr["lrc"] = pss_noHTML($_POST["alignment"]);

                 $filesize = pss_pic_upload(1,$_FILES["thefile"]);
         $filetrue = pss_pic_upload(2,$_FILES["thefile"]);
         $file_ext = pss_pic_upload(3,$_FILES["thefile"]);
         $file_nam = pss_pic_upload(5,$_FILES["thefile"]);
         if($filesize>5){
            if($filetrue){
               $folder = "../file/banner/";
               pss_pic_upload(6,$_FILES["thefile"],pss_db_date($pss_realtime)."-".$file_nam,$folder,75);
               $arr["pic"] = pss_noHTML(pss_db_date($pss_realtime)."-".$file_nam.".".$file_ext);
            }else{
               pss_alert("Only JPG and GIF are allowed.");
            }
         }

         $SQL = pss_db_insert("pss_banner",$arr);
         mysql_query($SQL);
         pss_alert("Created!");
         pss_redirect(1,$_SERVER["REQUEST_URI"]);
      }else{
         pss_alert("Need data on:\\n- Picture");
      }
   break;
   case "update" :
         $id = pss_noHTML($_GET["id"]);
         $arr["url"] = pss_post_url($_POST["url"],1);
                 $arr["height"] = pss_noHTML($_POST["height"]);
                 $arr["pos"] = pss_noHTML($_POST["pos"]);
                 $arr["lrc"] = pss_noHTML($_POST["alignment"]);

                 $filesize = pss_pic_upload(1,$_FILES["thefile"]);
         $filetrue = pss_pic_upload(2,$_FILES["thefile"]);
         $file_ext = pss_pic_upload(3,$_FILES["thefile"]);
         $file_nam = pss_pic_upload(5,$_FILES["thefile"]);
         if($filesize>5){
            if($filetrue){
               $folder = "../file/banner/";
               $SQL = "SELECT * FROM pss_banner WHERE id = '$id'";
               $queryq = mysql_query($SQL);
               $query = mysql_fetch_array($queryq);
               @unlink($folder.$query[pic]);
               @unlink($folder.str_replace("x","",$query[pic]));
               pss_pic_upload(6,$_FILES["thefile"],pss_db_date($pss_realtime)."-".$file_nam,$folder,75);
               $arr["pic"] = pss_noHTML(pss_db_date($pss_realtime)."-".$file_nam.".".$file_ext);
            }else{
               pss_alert("Only JPG and GIF are allowed.");
            }
         }

         $SQL = pss_db_update("pss_banner",$arr,"id = '$id'");
         mysql_query($SQL);
         pss_alert("Updated!");
         pss_redirect(1,"?".pss_url_def()."=".$_GET[pss_url_def()]."&p=".$_GET["p"]);

   break;
   case "delete" :
      $SQL = "SELECT * FROM pss_banner WHERE id = '".pss_noHTML($_GET["id"])."'";
      $queryq = mysql_query($SQL);
      $query = mysql_fetch_array($queryq);
      if($query){
         $folder = "../file/banner/";
         $id = pss_noHTML($_GET["id"]);
         $SQL = pss_db_delete("pss_banner","id = '$id'");
         mysql_query($SQL);
         @unlink($folder.$query[pic]);
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
         $folder = "../file/banner/";
         $SQL = "SELECT * FROM pss_banner WHERE id = '$val'";
         $queryq = mysql_query($SQL);
         $query = mysql_fetch_array($queryq);
         @unlink($folder.$query[pic]);
         $SQL = pss_db_delete("pss_banner","id = '$val'");
         mysql_query($SQL);
      }
      if($_POST["box_del"]){
         pss_alert("All checked data has been deleted.");
         pss_redirect(1,"?".pss_url_def()."=".$_GET[pss_url_def()]."&p=".$_GET["p"]);
      }
   break;
}
?>