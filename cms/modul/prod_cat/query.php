<?
switch(strtolower($_POST["submit"])){
   case "cancel" :
      pss_redirect(1,"?".pss_url_def()."=".$_GET[pss_url_def()]."&p=".$_GET["p"]);
   break;
   case "create" :
      if($_POST["format"]=="1"){
         if(pss_form_is_empty($_POST["name"])){
            $arr["id"] = pss_db_date($pss_realtime);
            $arr["id_parent"] = 1;
                        $arr["level"] = 1;
                        $arr["headline"] = pss_withTinyMCE($_POST["headline"]);
            $arr["name"] = pss_noHTML($_POST["name"]);
            $arr["pos"] = pss_noHTML($_POST["position"]);

                        $arr["home"] = isset($_POST["home"]) ? "1" : "0";
                        $arr["color"] = $_POST["color"];
                        $arr["meta_tag"] = pss_noHTML($_POST["meta_tag"]);
                        $arr["meta_key"] = pss_noHTML($_POST["meta_key"]);
                        $arr["meta_desc"] = pss_noHTML($_POST["meta_desc"]);

                        $filesize = pss_pic_upload(1,$_FILES["thefile"]);
                        $filetrue = pss_pic_upload(2,$_FILES["thefile"]);
                        $file_ext = pss_pic_upload(3,$_FILES["thefile"]);
                        $file_nam = pss_pic_upload(5,$_FILES["thefile"]);
                        if($filesize>5){
                                if($filetrue){
                                        $folder = "../file/prod_cat/";
                                        pss_pic_upload(4,$_FILES["thefile"],pss_db_date($pss_realtime)."-".$file_nam,$folder,75);
                                        $arr["pic"] = pss_noHTML(pss_db_date($pss_realtime)."-".$file_nam."x.".$file_ext);
                                }else{
                                        pss_alert("Only JPG and GIF are allowed.");
                                        }
                                }
                        $SQL = pss_db_insert("pss_prod_cat",$arr);
                        mysql_query($SQL);
                        pss_alert("Created!");
                        pss_redirect(1,$_SERVER["REQUEST_URI"]);
                        }else{
                                pss_alert("Need data on:\\n- Subject");
                                }
                }elseif($_POST["format"]=="2"){
         if(pss_form_is_empty($_POST["name"])){
            $arr["id"] = pss_db_date($pss_realtime);
            $arr["id_parent"] = pss_noHTML($_GET['idx']);
                        $SQL = "select level FROM pss_prod_cat WHERE id = ".$_GET['idx'];
                        $queryq = mysql_query($SQL);
                        $query = mysql_fetch_array($queryq);
                        $arr["level"] = $query['level']+1;
                        $arr["headline"] = pss_withTinyMCE($_POST["headline"]);
            $arr["name"] = pss_noHTML($_POST["name"]);
            $arr["pos"] = pss_noHTML($_POST["position"]);

                        $arr["home"] = isset($_POST["home"]) ? "1" : "0";
                        $arr["color"] = $_POST["color"];
                        $arr["meta_tag"] = pss_noHTML($_POST["meta_tag"]);
                        $arr["meta_key"] = pss_noHTML($_POST["meta_key"]);
                        $arr["meta_desc"] = pss_noHTML($_POST["meta_desc"]);

                        $filesize = pss_pic_upload(1,$_FILES["thefile"]);
                        $filetrue = pss_pic_upload(2,$_FILES["thefile"]);
                        $file_ext = pss_pic_upload(3,$_FILES["thefile"]);
                        $file_nam = pss_pic_upload(5,$_FILES["thefile"]);
                        if($filesize>5){
                                if($filetrue){
                                        $folder = "../file/prod_cat/";
                                        pss_pic_upload(4,$_FILES["thefile"],pss_db_date($pss_realtime)."-".$file_nam,$folder,75);
                                        $arr["pic"] = pss_noHTML(pss_db_date($pss_realtime)."-".$file_nam."x.".$file_ext);
                                }else{
                                        pss_alert("Only JPG and GIF are allowed.");
                                        }
                                }
                        $SQL = pss_db_insert("pss_prod_cat",$arr);
                        mysql_query($SQL);
                        pss_alert("Created!");
                        pss_redirect(1,$_SERVER["REQUEST_URI"]);
                        }else{
                                pss_alert("Need data on:\\n- Subject");
                                }
                        }
   break;
   case "update" :
         if(pss_form_is_empty($_POST["name"]) ){
            $id = pss_noHTML($_GET["id"]);
                        $arr["headline"] = pss_withTinyMCE($_POST["headline"]);
            $arr["name"] = pss_noHTML($_POST["name"]);
            $arr["pos"] = pss_noHTML($_POST["position"]);
            $arr["id_parent"] = pss_noHTML($_POST["parent"]);

                        $arr["home"] = isset($_POST["home"]) ? "1" : "0";
                        $arr["color"] = $_POST["color"];
                        $arr["meta_tag"] = pss_noHTML($_POST["meta_tag"]);
                        $arr["meta_key"] = pss_noHTML($_POST["meta_key"]);
                        $arr["meta_desc"] = pss_noHTML($_POST["meta_desc"]);

                        $filesize = pss_pic_upload(1,$_FILES["thefile"]);
                        $filetrue = pss_pic_upload(2,$_FILES["thefile"]);
                        $file_ext = pss_pic_upload(3,$_FILES["thefile"]);
                        $file_nam = pss_pic_upload(5,$_FILES["thefile"]);
                        if($filesize>5){
                                if($filetrue){
                                        $folder = "../file/prod_cat/";
                                        pss_pic_upload(4,$_FILES["thefile"],pss_db_date($pss_realtime)."-".$file_nam,$folder,75);
                                        $arr["pic"] = pss_noHTML(pss_db_date($pss_realtime)."-".$file_nam."x.".$file_ext);
                                }else{
                                        pss_alert("Only JPG and GIF are allowed.");
                                        }
                                }
                        $SQL = pss_db_update("pss_prod_cat",$arr,"id = '$id'");
                        mysql_query($SQL);
                        pss_alert("Updated!");
                        if (isset($_GET['idx'])) {
                                $idx = "&idx=".$_GET['idx'];
                                }
                        else {
                                $idx = "";
                                }
                        pss_redirect(1,"?".pss_url_def()."=".$_GET[pss_url_def()]."&p=".$_GET["p"].$idx);
         }else{
            pss_alert("Need data on:\\n- Subject");
         }
   break;
   case "delete" :
      /*$id = pss_noHTML($_GET["id"]);
      if(pss_field_id_parent("pss_prod_cat")){
         $SQL = "select count(id) as totalchild from pss_prod_cat where id_parent = '".$id."'";
                $queryq = mysql_query($SQL);
                $query = mysql_fetch_array($queryq);
                if ($query["totalchild"] > 0) {
                        pss_alert("This data has ".$query["totalchild"]." child(s). Cannot be deleted!");
                        }
                else {
                        $folder = "../file/prod_cat/";
                        $SQL = "SELECT * FROM pss_prod_cat WHERE id = '$id'";
                        $queryq = mysql_query($SQL);
                        $query = mysql_fetch_array($queryq);
                        @unlink($folder.$query[pic]);
                        @unlink($folder.str_replace("x","",$query[pic]));
                        $SQL = pss_db_delete("pss_prod_cat","id = '$id'");
                        mysql_query($SQL);
                        pss_alert("Deleted!");
                        }
         pss_redirect(1,"?".pss_url_def()."=".$_GET[pss_url_def()]."&p=".$_GET["p"]."&idx=".$_GET["idx"]);
      }*/
          $id = pss_noHTML($_GET["id"]);
      if(pss_field_id_parent("pss_prod_cat")){
         $SQL = "SELECT * FROM pss_prod_cat WHERE id_parent = '$id'";
         $queryq = mysql_query($SQL);
         $query = mysql_fetch_array($queryq);
         $query_num = mysql_num_rows($queryq);
         if(!$query){
                        $folder = "../file/prod_cat/";
            $SQLx = "SELECT * FROM pss_prod_cat WHERE id = '$id'";
            $queryqx = mysql_query($SQLx);
            $queryx = mysql_fetch_array($queryqx);
            @unlink($folder.$queryx[pic]);
                        @unlink($folder.str_replace("x","",$queryx[pic]));
            $SQL = pss_db_delete("pss_prod_cat","id = '$id'");
            mysql_query($SQL);
            pss_alert("Deleted!");
         }else{
            pss_alert("Sorry, this data having $query_num childs data and cannot deleted.\\nPlease delete the child data first.");
         }
         pss_redirect(1,"?".pss_url_def()."=".$_GET[pss_url_def()]."&p=".$_GET["p"]."&idx=".$_GET["idx"]);
      }else{
         $SQL = pss_db_delete("pss_prod_cat","id = '$id'");
         mysql_query($SQL);
         pss_alert("Deleted!");
         pss_redirect(1,"?".pss_url_def()."=".$_GET[pss_url_def()]."&p=".$_GET["p"]."&idx=".$_GET["idx"]);
      }
}

switch(strtolower($_POST["submitx"])){
   /*case "del_all" :
          $parentdata = false;
      foreach($_POST["box_del"] as $val){
        $id = pss_noHTML($val);
                $SQL1 = "SELECT name FROM pss_prod_cat WHERE id = '".$id."'";
                $queryq1 = mysql_query($SQL1);
                $query1 = mysql_fetch_array($queryq1);
        $SQL = "select count(id) as totalchild from pss_prod_cat where id_parent = '".$id."'";
                $queryq = mysql_query($SQL);
                $query = mysql_fetch_array($queryq);
                if ($query["totalchild"] > 0) {
                        $parentdata++;
                        }
                else {
                        $folder = "../file/prod_cat/";
                        $SQL = "SELECT * FROM pss_prod_cat WHERE id = '$val'";
                        $queryq = mysql_query($SQL);
                        $query = mysql_fetch_array($queryq);
                        @unlink($folder.$query[pic]);
                        @unlink($folder.str_replace("x","",$query[pic]));
                        $SQL = pss_db_delete("pss_prod_cat","id = '$val'");
                        mysql_query($SQL);
                        }
                }
        if($_POST["box_del"]){
            pss_alert("Checked data that has no child has been deleted.");
        pss_redirect(1,"?".pss_url_def()."=".$_GET[pss_url_def()]."&p=".$_GET["p"]);
                }
   break;*/
   case "del_all" :
      foreach($_POST["box_del"] as $val){
         $id = pss_noHTML($val);
         if(pss_field_id_parent("pss_prod_cat")){
            $SQL = "SELECT * FROM pss_prod_cat WHERE id_parent = '$id'";
            $queryq = mysql_query($SQL);
            $query = mysql_fetch_array($queryq);
            $query_num = mysql_num_rows($queryq);
            if(!$query){
                           $folder = "../file/prod_cat/";
               $SQLx = "SELECT * FROM pss_prod_cat WHERE id = '$id'";
               $queryqx = mysql_query($SQLx);
               $queryx = mysql_fetch_array($queryqx);
               @unlink($folder.$queryx[pic]);
                           @unlink($folder.str_replace("x","",$query[pic]));
               $SQL = pss_db_delete("pss_prod_cat","id = '$id'");
               mysql_query($SQL);
               $alert1 = "All checked data has been deleted.";
            }else{
               $query_numx = $query_numx+$query_num;
               $alert2 = "Some checked data having $query_numx childs data and cannot deleted.\\nPlease delete the child data first.";
            }
         }else{
            $SQL = pss_db_delete("pss_prod_cat","id = '$id'");
            mysql_query($SQL);
         }
      }
      if($_POST["box_del"]){
         $enter = $alert1&&$alert2?"\\n\\n":"";
         pss_alert("$alert1$enter$alert2");
         pss_redirect(1,"?".pss_url_def()."=".$_GET[pss_url_def()]."&p=".$_GET["p"]."&idx=".$_GET["idx"]);
      }
   break;
}
?>