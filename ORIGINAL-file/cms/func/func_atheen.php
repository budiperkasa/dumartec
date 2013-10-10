<?
function atheen_admin_access($arrfolder,$arrmenu){
   $HTML .= "<br><table cellpadding=\"5\" cellspacing=\"0\" class=\"tbl_1 tbl_3 tbl_4\" width=\"100%\">";
   foreach($arrfolder as $key => $val){
      $HTML .= "<tr><td class=\"tbl_2  menusname1\"><b>".$val."</b></td></tr>";
      $HTML .= "<tr><td style=\"padding: 0px;\">";
      $HTML .= "<table cellpadding=\"2\" cellspacing=\"0\" class=\"tbl_1x tbl_3x tbl_4x\" width=\"100%\"><tr>";
      foreach($arrmenu as $keys => $vals){
         if($vals[$key]){
            if($vals[$key]=="Logout"){}else{
               $no++;
               $tr = $no%2?"":"</tr><tr>";
               if($_POST){
                  $checked = 1==$_POST["access"][$keys]?"checked":"";
               }else{
                  $SQL = "SELECT * FROM pss_admin_modul WHERE id_user = '".pss_noHTML($_GET["id"])."' AND
                                                              modul = '$keys'";
                  $queryq = mysql_query($SQL);
                  $query = mysql_fetch_array($queryq);
                  $checked = $query?"checked":"";
               }
               $HTML .= "<td width=\"50%\" class=\"tbl_2\">
                         <div style=\"float: left;\"><input type=\"checkbox\" name=\"access[$keys]\" value=\"1\" class=\"checkbox\" id=\"$keys\" $checked></div>
                         <div class=\"padding_1\"><label for=\"$keys\" class=\"padding_2 cursor_1\">".$vals[$key]."</label></div></td>
                         $td$tr";
            }
         }
      }
      $HTML .= "</tr></table></td></tr>";
      $no = 0;
   }
   $HTML .= "</table>";
   return $HTML;
}

function atheen_form_year($start,$now){
   for($a=$start-5;$a<=$start+5;$a++){
      $sel = $now==$a?"selected":"";
      $HTML .= "<option value=\"$a\" $sel>$a</option>";
   }
   return $HTML;
}

function atheen_form_month($now){
   for($a=1;$a<=12;$a++){
      $nol = $a<10?"0":"";
      $sel = $now==$a?"selected":"";
      $HTML .= "<option value=\"$nol$a\" $sel>".date("M", mktime(0,0,0,$a,date("d"),date("Y")))."</option>";
   }
   return $HTML;
}

function atheen_form_date($now){
   for($a=1;$a<=31;$a++){
      $nol = $a<10?"0":"";
      $sel = $now==$a?"selected":"";
      $HTML .= "<option value=\"$nol$a\" $sel>$nol$a</option>";
   }
   return $HTML;
}
?>
