<?
function pss_admin_type($type){
   switch($type){
      case "1" :
         $HTML = "Super Admin";
      break;
      case "2" :
         $HTML = "Admin";
      break;
   }
   return $HTML;
}

function pss_admin_type_sel($id=""){
   $arr[1] = "Super Admin";
   $arr[2] = "Admin";
   foreach($arr as $key => $val){
      $sel = $id==$key?"selected":"";
      $HTML .= "<option value=\"$key\" $sel>$val</option>";
   }
   return $HTML;
}

function pss_menuadmin($arrfolder,$arrmenu){
   $HTML .= "\n<table cellpadding=\"5\" cellspacing=\"0\" class=\"tbl_1 tbl_3 tbl_4\" width=\"100%\">";
   $HTML .= "\n<tr><td class=\"tbl_2 userlog1\">Log as : <font class=\"userlog2\">".$_SESSION["reg_user_name"]."</font></td></tr>";
   foreach($arrfolder as $key => $val){
      $HTML .= "\n<tr><td class=\"tbl_2  menusname1\"><font onclick=\"pss_menu_js1('".strtolower(str_replace(" ","_",$val))."')\" id=\"".strtolower(str_replace(" ","_",$val))."x\" class=\"cursor_1\"><b>".$val."</b></font></td></tr>";
      $HTML .= "\n<tr><td style=\"padding: 0px;\"><div id=\"".strtolower(str_replace(" ","_",$val))."\" style=\"display: none;\">";
      $HTML .= "\n<table cellpadding=\"5\" cellspacing=\"0\" class=\"tbl_1x tbl_3x tbl_4x\" width=\"100%\">";
      foreach($arrmenu as $keys => $vals){
         if($vals[$key]){
            $style = $_GET[pss_url_def()]==$keys?"menussels":"";
            $link_logout = $vals[$key]=="Logout"?"link_logout":"";
            $HTML .= "\n<tr><td class=\"tbl_2 menusselx $style\"><a href=\"?".pss_url_def()."=$keys\" class=\"$link_logout\">".$vals[$key]."</a></td></tr>";
         }
      }
      $HTML .= "\n</div></table></td></tr>";
   }
   $HTML .= "\n</table>";
   return $HTML;
}

function pss_menuadmin_js1($arrfolder,$arrmenu){
   $HTML .= "\n<script>";
   $HTML .= "\nfunction pss_menu_js1(i){";
   foreach($arrfolder as $key => $val){
      $HTML .= "\ndocument.getElementById('".strtolower(str_replace(" ","_",$val))."').style.display = 'none';";
      $HTML .= "\ndocument.getElementById('".strtolower(str_replace(" ","_",$val))."x').className = 'menusname1 cursor_1';";
   }
   $HTML .= "\ndocument.getElementById(i).style.display = 'block';";
   $HTML .= "\ndocument.getElementById(i+'x').className = 'menusname2';";
   $HTML .= "\n}";
   $HTML .= "\n</script>";
   return $HTML;
}

function pss_menuadmin_js2($arrfolder,$arrmenu,$lastview){
   $HTML .= "\n<script>";
   $HTML .= "\nfunction pss_menu_js2(){";
   foreach($arrfolder as $key => $val){
      $HTML .= "\ndocument.getElementById('".strtolower(str_replace(" ","_",$val))."').style.display = 'none';";
      $HTML .= "\ndocument.getElementById('".strtolower(str_replace(" ","_",$val))."x').className = 'menusname1 cursor_1';";
   }
   $HTML .= "\ndocument.getElementById('$lastview').style.display = 'block';";
   $HTML .= "\ndocument.getElementById('".$lastview."x').className = 'menusname2';";
   $HTML .= "\n}pss_menu_js2();";
   $HTML .= "\n</script>";
   return $HTML;
}

function pss_namemodul($arrfolder,$arrmenu,$type=""){
   foreach($arrfolder as $key => $val){
      if($arrmenu[$_GET[pss_url_def()]][$key]){
         $HTMLx = $arrmenu[$_GET[pss_url_def()]][$key];
         $HTMLy = $HTMLx!=="array"?$val:"x";
      }
   }
   if($type){
      $HTML = strtolower(str_replace(" ","_",$HTMLy));
   }else{
      $HTML = strtoupper($HTMLy." | ".$HTMLx);
   }
   return $HTML;
}

function pss_rule_adminmodul(){
   $SQL = "SELECT *
           FROM pss_admin_modul
           WHERE id_user = '".$_SESSION["reg_user_idny"]."' AND
                 modul = '".htmlspecialchars($_GET[pss_url_def()],ENT_QUOTES)."'";
   $queryq = mysql_query($SQL);
   $query = mysql_fetch_array($queryq);
   if($query || $_SESSION["reg_user_type"]=="1"){
      return true;
   }else{
      return false;
   }
}

function pss_search_option_db(){
   global $search;
   $HTML .= "<select name=\"fields\" style=\"letter-spacing: 0px;\">";
   $HTML .= "<option value=\"\">-- Select All --</option>";
   foreach($search as $key => $val){
         $sel = $key==$_SESSION["reg_search_fields"]?"selected":"";
         $HTML .= "<option value=\"$key\" $sel>From: ".ucwords($val)."</option>";
   }
   $HTML .= "</select>";
   return $HTML;
}

function pss_search_modul_form(){
   if(pss_rule_adminmodul()){
      $HTML .= "<table cellpadding=\"3\" cellspacing=\"0\" width=\"0%\">";
      $HTML .= "<form method=\"POST\" action=\"\">";
      $HTML .= "<tr>";
      $HTML .= "<td><input type=\"text\" name=\"search\" value=\"".$_SESSION["reg_search_search"]."\" size=\"20\"></td>";
      $HTML .= "<td>".pss_search_option_db()."</td>";
      $HTML .= "<td><input type=\"submit\" name=\"submit\" value=\"Search\" class=\"form_4e\"></td>";
      $HTML .= "</tr>";
      $HTML .= "</form>";
      $HTML .= "</table>";
   }else{
      $HTML .= "<table cellpadding=\"5\" cellspacing=\"0\" width=\"0%\">";
      $HTML .= "<tr>";
      $HTML .= "<td>Status control: <b>access denied!</b></td>";
      $HTML .= "</tr>";
      $HTML .= "</table>";
   }
   return $HTML;
}

function pss_search_do($type=""){
   $HTML .= $type==1?"AND":"WHERE";
   if($_SESSION["reg_search_fields"]){
      $HTML .= " ".$_SESSION["reg_search_fields"]." LIKE '%".$_SESSION["reg_search_search"]."%'";
   }else{
      $SQL = "SELECT * FROM pss_".$_GET[pss_url_def()];
      $queryq = mysql_query($SQL);
      if($queryq){
         $no = 0;
         while($no < mysql_num_fields($queryq)){
            $namefields = mysql_field_name($queryq,$no);
            if(substr($namefields,0,4)!=="meta"){
               $HTML .= " $namefields LIKE '%".$_SESSION["reg_search_search"]."%' OR";
            }
            $no++;
         }
      }
      $HTML = substr($HTML,0,strlen($HTML)-3)."";
   }
   return $HTML;
}

function pss_SettingTinyMCE(){
   $HTML = "
            <script type=\"text/javascript\" src=\"js/tiny_mce/tiny_mce.js\"></script>
            <script type=\"text/javascript\">
              tinyMCE.init({
                mode : \"textareas\",
                theme : \"advanced\",
                plugins : \"safari,spellchecker,style,layer,table,save,advhr,advimage,advlink,emotions,iespell,inlinepopups,insertdatetime,preview,media,searchreplace,print,contextmenu,paste,directionality,fullscreen,noneditable,visualchars,nonbreaking,xhtmlxtras,template,pagebreak,imagemanager,filemanager\",
                theme_advanced_buttons1 : \"bold,italic,underline,strikethrough,|,justifyleft,justifycenter,justifyright,justifyfull,|,bullist,numlist,|,forecolor,backcolor\",
                theme_advanced_buttons2 : \"tablecontrols,|,code\",
                theme_advanced_buttons3 : \"pastetext,pasteword,|,link,unlink,|,fullscreen\",
                theme_advanced_toolbar_location : \"top\",
                theme_advanced_toolbar_align : \"center\",
                theme_advanced_statusbar_location : \"bottom\",
                theme_advanced_resize_horizontal : false,
                theme_advanced_resizing : true,
                apply_source_formatting : true
              });
            </script>
   ";
   return $HTML;
}

function pss_design_block($val,$key="") {
   foreach($val as $k => $v) {
      $sel = $key==$k?"selected":"";
      $HTML .= "<option value='".$k."' ".$sel.">".$v."</option>";
   }
return $HTML;
}

function pss_page($val,$key="") {
   foreach($val as $k => $v) {
      $sel = $key==$k?"selected":"";
      $HTML .= "<option value='".$k."' ".$sel.">".$v."</option>";
   }
   return $HTML;
}

function pss_design_center($val,$key="") {
   foreach($val as $k => $v) {
      $sel = $key==$k?"selected":"";
      $HTML .= "<option value='".$k."' ".$sel.">".$v."</option>";
   }
   return $HTML;
}
?>
