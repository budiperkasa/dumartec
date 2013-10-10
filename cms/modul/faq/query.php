<?
switch(strtolower($_POST["submit"])){
   case "cancel" :
      pss_redirect(1,"?".pss_url_def()."=".$_GET[pss_url_def()]."&p=".$_GET["p"]);
   break;
   case "create" :
      if(pss_form_is_empty($_POST["subject"])){
         $sql = mysql_query("select max(pos)+1 as position from pss_faq");
         $q = mysql_fetch_array($sql);
         $thepos = $q['position'];
         if ($thepos == '') {
                 $thepos = '1';
                 }

         $arr["id"] = pss_db_date($pss_realtime);
         $arr["subject"] = pss_noHTML($_POST["subject"]);
         $arr["description"] = pss_withTinyMCE($_POST["desc"]);
		 if (isNumber($_POST['position'])) {
			$arr["pos"] = $_POST["position"];
			}
		else {
			$arr["pos"] = $thepos;
			}

         $SQL = pss_db_insert("pss_faq",$arr);
         mysql_query($SQL);
         pss_alert("Created!");
         pss_redirect(1,$_SERVER["REQUEST_URI"]);
      }else{
         pss_alert("Need data on:\\n- Subject");
      }
   break;
   case "update" :
      if(pss_form_is_empty($_POST["subject"])){
         $id = pss_noHTML($_GET["id"]);
         $arr["subject"] = pss_noHTML($_POST["subject"]);
		 if (isNumber($_POST['position'])) {
			$arr["pos"] = $_POST["position"];
			}
         $arr["description"] = pss_withTinyMCE($_POST["desc"]);

         $SQL = pss_db_update("pss_faq",$arr,"id = '$id'");
         mysql_query($SQL);
		 
         pss_alert("Updated!");
         pss_redirect(1,"?".pss_url_def()."=".$_GET[pss_url_def()]."&p=".$_GET["p"]);
      }else{
         pss_alert("Need data on:\\n- Subject");
      }
   break;
   case "delete" :
      $SQL = "SELECT * FROM pss_faq WHERE id = '".pss_noHTML($_GET["id"])."'";
      $queryq = mysql_query($SQL);
      $query = mysql_fetch_array($queryq);
      if($query){
         $id = pss_noHTML($_GET["id"]);
         $SQL = pss_db_delete("pss_faq","id = '$id'");
         mysql_query($SQL);
         pss_alert("Deleted!");
         pss_redirect(1,"?".pss_url_def()."=".$_GET[pss_url_def()]."&p=".$_GET["p"]);
      }else{
         pss_alert("Please start over again.");
         pss_redirect(1,"?".pss_url_def()."=".$_GET[pss_url_def()]."&p=".$_GET["p"]);
      }
   break;
   case "updateposition" :
      if (!isNumber($_POST['position'])) {
              pss_alert("Nilai untuk posisi harus berupa angka dan lebih besar dari nol!");
              pss_redirect(1,"?".pss_url_def()."=".$_GET[pss_url_def()]."&p=".$_GET["p"]);
              return false;
              }

      $sql = mysql_query("select pos from pss_faq where id = '".$_POST['id']."'");
      $q = mysql_fetch_array($sql);
      if ($q['pos'] == $_POST['position']) {
              pss_redirect(1,"?".pss_url_def()."=".$_GET[pss_url_def()]."&p=".$_GET["p"]);
              return false;
              }

      $sql = mysql_query("select max(pos) as maxpos from pss_faq");
      $q = mysql_fetch_array($sql);
      $maxpos = $q['maxpos'];

      if ($_POST['position'] >= $maxpos) {
              $sql = mysql_query("select pos from pss_faq where id = '".$_POST['id']."'");
              $q = mysql_fetch_array($sql);
              $thepos = $q['pos'];
              mysql_query("update pss_faq set pos = pos-1 where pos > ".$thepos);
              mysql_query("update pss_faq set pos = ".$maxpos." where id = '".$_POST['id']."'");
              }
      else {
              $sql = mysql_query("select pos from pss_faq where id = '".$_POST['id']."'");
              $q = mysql_fetch_array($sql);
              $thepos = $q['pos'];
              if ($_POST['position'] > $thepos) {
                      mysql_query("update pss_faq set pos = pos-1 where pos > ".$thepos." and pos <= ".$_POST['position']);
                      mysql_query("update pss_faq set pos = ".$_POST['position']." where id = '".$_POST['id']."'");
                      }
              else {
                      mysql_query("update pss_faq set pos = pos+1 where pos < ".$thepos." and pos >= ".$_POST['position']);
                      mysql_query("update pss_faq set pos = ".$_POST['position']." where id = '".$_POST['id']."'");
                      }
              }

      pss_alert("Position Updated");
      pss_redirect(1,"?".pss_url_def()."=".$_GET[pss_url_def()]."&p=".$_GET["p"]);
   break;
}

switch(strtolower($_POST["submitx"])){
   case "del_all" :
      foreach($_POST["box_del"] as $val){
         $SQL = pss_db_delete("pss_faq","id = '$val'");
         mysql_query($SQL);
      }
      if($_POST["box_del"]){
         pss_alert("All checked data has been deleted.");
         pss_redirect(1,"?".pss_url_def()."=".$_GET[pss_url_def()]."&p=".$_GET["p"]);
      }
   break;
}
?>