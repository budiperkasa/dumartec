<?
switch(strtolower($_POST["submit"])){
   case "cancel" :
      pss_redirect(1,"?".pss_url_def()."=".$_GET[pss_url_def()]);
   break;
   case "create" :
      if(pss_form_is_empty($_POST["username"]) && pss_form_is_empty($_POST["password"])){
         $SQL = "SELECT * FROM pss_admin WHERE user = '".pss_noHTML($_POST["username"])."'";
         $queryq = mysql_query($SQL);
         $query = mysql_fetch_array($queryq);
         if(!$query){
            $arr["id"] = pss_db_date($pss_realtime);
            $arr["user"] = pss_noHTML($_POST["username"]);
            $arr["pass"] = pss_noHTML($_POST["password"]);
            $arr["tipe"] = pss_noHTML($_POST["type"]);
            $arr["ket"] = pss_withTinyMCE($_POST["desc"]);
            $SQL = pss_db_insert("pss_admin",$arr);
            mysql_query($SQL);
            $id_user = $arr["id"];
            if($_POST["type"]=="2"){
               foreach($_POST["access"] as $key => $val){
                  $arr2["id"] = "";
                  $arr2["id_user"] = $id_user;
                  $arr2["modul"] = pss_noHTML($key);
                  $SQL = pss_db_insert("pss_admin_modul",$arr2);
                  mysql_query($SQL);
               }
            }
            pss_alert("Created!");
            pss_redirect(1,$_SERVER["REQUEST_URI"]);
         }else{
            pss_alert("Please using another Username");
         }
      }else{
         pss_alert("Need data on:\\n- Username\\n- Password");
      }
   break;
   case "update" :
      if(pss_form_is_empty($_POST["password"])){
         $SQL = "SELECT * FROM pss_admin WHERE id = '".pss_noHTML($_GET["id"])."'";
         $queryq = mysql_query($SQL);
         $query = mysql_fetch_array($queryq);
         if($query){
            $id = pss_noHTML($_GET["id"]);
            $arr["pass"] = pss_noHTML($_POST["password"]);
            $arr["tipe"] = pss_noHTML($_POST["type"]);
            $arr["ket"] = pss_withTinyMCE($_POST["desc"]);
            $SQL = pss_db_update("pss_admin",$arr,"id = '$id'");
            mysql_query($SQL);
            $id_user = $id;
            if($_POST["type"]=="2"){
               $SQL = pss_db_delete("pss_admin_modul","id_user = '$id_user'");
               mysql_query($SQL);
               foreach($_POST["access"] as $key => $val){
                  $arr2["id"] = "";
                  $arr2["id_user"] = $id_user;
                  $arr2["modul"] = pss_noHTML($key);
                  $SQL = pss_db_insert("pss_admin_modul",$arr2);
                  mysql_query($SQL);
               }
            }
            pss_alert("Updated!");
            pss_redirect(1,"?".pss_url_def()."=".$_GET[pss_url_def()]);
         }else{
            pss_alert("Please start over again.");
            pss_redirect(1,"?".pss_url_def()."=".$_GET[pss_url_def()]);
         }
      }else{
         pss_alert("Need data on:\\n- Username\\n- Password");
      }
   break;
   case "delete" :
      $SQL = "SELECT * FROM pss_admin WHERE id = '".pss_noHTML($_GET["id"])."'";
      $queryq = mysql_query($SQL);
      $query = mysql_fetch_array($queryq);
      if($query){
         if($query["user"]!=="admin"){
            $id = pss_noHTML($_GET["id"]);
            $SQL = pss_db_delete("pss_admin","id = '$id'");
            mysql_query($SQL);
            $SQL = pss_db_delete("pss_admin_modul","id_user = '$id'");
            mysql_query($SQL);
            pss_alert("Deleted!");
            pss_redirect(1,"?".pss_url_def()."=".$_GET[pss_url_def()]);
         }else{
            pss_alert("This user cannot be deleted, this is Very Super Admin.");
            pss_redirect(1,"?".pss_url_def()."=".$_GET[pss_url_def()]);
         }
      }else{
         pss_alert("Please start over again.");
         pss_redirect(1,"?".pss_url_def()."=".$_GET[pss_url_def()]);
      }
   break;
}
?>