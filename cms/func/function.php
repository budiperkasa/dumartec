<?
function pss_db_insert($table,$field){
   foreach($field as $fn => $fv){
      $no++;
      $count_field = count($field);
      $no==$count_field?$koma1 = "":$koma1 = ",";
      $field1 .= $fn."$koma1";

      $no==$count_field?$koma2 = "":$koma2 = ",";
      if(is_array($fv)){
         $field2 .= "$fv[1]"."$koma2";
      }elseif($fv=="0"){
         $field2 .= "'0'"."$koma2";
      }elseif(!$fv){
         $field2 .= "NULL"."$koma2";
      }else{
         $field2 .= "'$fv'"."$koma2";
      }
   }
   $SQL = "INSERT INTO $table ($field1) VALUES ($field2)";
   return $SQL;
}

function pss_db_update($table,$field,$where=''){
   foreach($field as $fn => $fv){
      $no++;
      $count_field = count($field);

      $no==$count_field?$koma2 = "":$koma2 = ", ";
      if(is_array($fv)){
         $field1 .= "$fn = $fv[1]"."$koma2";
      }elseif($fv=="0"){
         $field1 .= "$fn = '0'"."$koma2";
      }elseif(!$fv){
         $field1 .= "$fn = NULL"."$koma2";
      }else{
         $field1 .= "$fn = '$fv'"."$koma2";
      }
   }
   if($where){
      $where = "WHERE ".$where;
   }
   $SQL = "UPDATE $table SET $field1 $where";
   return $SQL;
}

function pss_db_delete($table,$where=''){
   if($where){
      $where = "WHERE ".$where;
   }
   $SQL = "DELETE FROM $table $where";
   return $SQL;
}

function pss_db_date($added='0'){
   $today = date("Y-m-d-H-i-s");
   $todayexp = explode("-",$today);
   $mktime = mktime($todayexp[3],$todayexp[4],$todayexp[5],$todayexp[1],$todayexp[2],$todayexp[0])+(60*60*$added);
   $HTML = strftime("%Y%m%d%H%M%S",$mktime);
   return $HTML;
}

function pss_date_format($type,$value){
   $d1 = substr($value,0,4);
   $d2 = substr($value,4,2);
   $d3 = substr($value,6,2);
   $d4 = substr($value,8,2);
   $d5 = substr($value,10,2);
   $d6 = substr($value,12,2);
   switch($type){
      case "1" :
         $call = "$d3/$d2/$d1 - $d4:$d5:$d6";
      break;
      case "2" :
         $call = "$d3/$d2/$d1";
      break;
      case "3" :
         $call = "$d4:$d5:$d6";
      break;
   }
   return $call;
}

function pss_redirect($type,$url){
   switch($type){
      case "1":
         header("Location: ".$url);
         die();
      break;
      case "2":
         echo "<script>location.replace('$url');</script>";
         die();
      break;
   }
}

function pss_alert($alert=''){
   if($alert){
      $_SESSION['reg_alert_pss'] = $alert;
   }else{
      if($_SESSION['reg_alert_pss']){
         echo "<script>alert('".$_SESSION['reg_alert_pss']."');</script>";
         session_unregister("reg_alert_pss");
      }
   }
}

function pss_paging($type,$dtbase,$perhal,$url=""){
   if(!$_GET["p"] || $_GET["p"]<1){$hal = "1";}else{$hal = $_GET["p"];}
   $perhalaman = $perhal;
   $SQL = $dtbase;
   $queryq = mysql_query($SQL);
   $query = mysql_num_rows($queryq);
   $list_page = $query/$perhalaman;
   $list_page = ceil($list_page);
   $list_page==0?$list_page="1":$list_page=$list_page;
   $hal = $hal>$list_page?$list_page:$hal;
   $start = ($hal*$perhalaman)-$perhalaman;
   $end = $start+$perhalaman;
   $viewlist0 = 2;
   if($hal<=$viewlist0+1){
      $viewlist1 = 1;
      $viewlist2 = ($viewlist0*2)+1<=$list_page?($viewlist0*2)+1:$list_page;
   }else{
      if($hal-$viewlist0<$list_page && $hal<=$list_page-$viewlist0){
         $viewlist1 = ($hal-$viewlist0);
      }else{
         $viewlist1 = ($hal-($viewlist0*2))+($list_page-$hal);
      }
      $viewlist1 = $viewlist1<1?1:$viewlist1;
      $viewlist2 = ($hal+$viewlist0)<=$list_page?$hal+$viewlist0:$list_page;
   }
   for($a=$viewlist1;$a<=$viewlist2;$a++){
      if($hal==$a){
         $HTML .= "<span><b class=\"paging\">$a</b></span>";
         $HTML2 .= "<span><b class=\"paging\">$a</b></span>";
      }else{
         $HTML .= "<span><a href=\"$url&p=".$a."\" class=\"a_paging paging\">".$a."</a></span>";
         $HTML2 .= "<span><a href=\"$url.".$a.".html\" class=\"a_paging paging\">".$a."</a></span>";
      }
   }
   $next = $hal==$list_page?"<span class=\"paging\">&#155;</span>":"<span><a href=\"$url&p=".($hal+1)."\" title=\"Next\" class=\"a_paging paging\">&#155;</a></span>";
   $prev = $hal==1?"<span class=\"paging\">&#139;</span>":"<span><a href=\"$url&p=".($hal-1)."\" title=\"Prev\" class=\"a_paging paging\">&#139;</a></span>";
   $begn = $hal==1?"<span class=\"paging\">&#171;</span>":"<span><a href=\"$url&p=1\" title=\"Start\" class=\"a_paging paging\">&#171;</a></span>";
   $last = $hal==$list_page?"<span class=\"paging\">&#187;</span>":"<span><a href=\"$url&p=".$list_page."\" title=\"Last\" class=\"a_paging paging\">&#187;</a></span>";

   $next2 = $hal==$list_page?"<span class=\"paging\">&#155;</span>":"<span><a href=\"$url.".($hal+1).".html\" title=\"Next\" class=\"a_paging paging\">&#155;</a></span>";
   $prev2 = $hal==1?"<span class=\"paging\">&#139;</span>":"<span><a href=\"$url.".($hal-1).".html\" title=\"Prev\" class=\"a_paging paging\">&#139;</a></span>";
   $begn2 = $hal==1?"<span class=\"paging\">&#171;</span>":"<span><a href=\"$url.1.html\" title=\"Start\" class=\"a_paging paging\">&#171;</a></span>";
   $last2 = $hal==$list_page?"<span class=\"paging\">&#187;</span>":"<span><a href=\"$url.".$list_page.".html\" title=\"Last\" class=\"a_paging paging\">&#187;</a></span>";

   switch($type){
      case "1" :
         return $start;
      break;
      case "2" :
         return $begn.$prev.$HTML.$next.$last;
      break;
      case "3" :
         return "<span class=\"paging\"><b>".$query."</b> total record</span>";
      break;
      case "4" :
         return "<span class=\"paging\">Page: <b>".$hal."</b> / <b>".$list_page."</b></span>";
      break;
      case "5" :
         return $begn2.$prev2.$HTML2.$next2.$last2;
      break;
   }
}

function pss_icon_type($type){
   switch($type){
      case "1" :
         $icon = "edit";
      break;
      case "2" :
         $icon = "del";
      break;
      case "3" :
         $icon = "comment";
      break;
      case "4" :
         $icon = "image";
      break;
      case "5" :
         $icon = "folder-up";
      break;
   }
   $HTML = "<img src=\"pic/icon-$icon.png\" border=\"0\" title=\"$icon\">";
   return $HTML;
}

function pss_random_code($length){
   $str = "";
   while(strlen($str)<$length){
      $random=rand(48,122);
      if(($random>48 && $random<58) || ($random>64 && $random<91) && ($random<>79)){
         $str.=chr($random);
      }
   }
   return strtolower($str);
}

function pss_url_def(){
   global $pss_default_modul_name;
   return $pss_default_modul_name;
}

function pss_field_id_parent($key){
   $SQL = "SELECT * FROM $key";
   $queryq = mysql_query($SQL);
   $field_num = mysql_num_fields($queryq);
   for($i=0;$i<=$field_num-1;$i++){
      $name = mysql_field_name($queryq,$i);
      if($name=="id_parent"){
         $HTML = "1";
         break;
      }else{
         $HTML = "";
      }
   }
   return $HTML;
}


function pss_post_url($val,$flag){
   switch($flag){
      case "1" :
         $HTML = eregi("^http://",$val)?$val:"http://".$val;
      break;
      case "2" :
         $HTML = eregi("^http://",$val)?substr($val,7,strlen($val)):$val;
      break;
   }
   return $HTML;
}

function pss_pic_upload($type,$val,$picname="",$folder="",$size_target=""){
   switch($type){
      case "1" :
         $filesize = $val["size"];
         return $filesize;
      break;
      case "2" :
         $filetype = $val["type"];
         switch($filetype){
            case "image/gif":$extensi="gif";break;
            case "image/jpg":$extensi="jpg";break;
            case "image/jpeg":$extensi="jpg";break;
            case "image/pjpeg":$extensi="jpg";break;
         }
         if($extensi=="gif" || $extensi=="jpg"){
            return true;
         }else{
            return false;
         }
      break;
      case "3" :
         $filetype = $val["type"];
         switch($filetype){
            case "image/gif":$extensi="gif";break;
            case "image/jpg":$extensi="jpg";break;
            case "image/jpeg":$extensi="jpg";break;
            case "image/pjpeg":$extensi="jpg";break;
         }
         return $extensi;
      break;
      case "4" :
         $thephoto = $val["tmp_name"];
         $filetype = $val["type"];
         $folderpic = $folder;
         $date_db = $picname;
         switch($filetype){
            case "image/gif":$extensi="gif";break;
            case "image/jpg":$extensi="jpg";break;
            case "image/jpeg":$extensi="jpg";break;
            case "image/pjpeg":$extensi="jpg";break;
         }
         $photonamebig = $date_db.".".$extensi;
         $photoname = $date_db."x.".$extensi;
         $image = $thephoto;
         if($extensi=="jpg"){
            $src_img = @imagecreatefromjpeg($image);
         }elseif($extensi=="gif"){
            $src_img = @imagecreatefromgif($image);
         }
         $new_image = $folderpic.$photoname;
         $quality = 100;
         $src_width = @imagesx($src_img);
         $src_height = @imagesy($src_img);

         if($src_width<$src_height){
            $hitung1 = $size_target/$src_width;
            $hitung2 = $hitung1*$src_height;
            $target_last = ceil($hitung2);
            $dest_height = $target_last;
            $dest_width = $size_target;
         }else{
            $hitung1 = $size_target/$src_height;
            $hitung2 = $hitung1*$src_width;
            $target_last = ceil($hitung2);
            $dest_height = $size_target;
            $dest_width = $target_last;
         }

         @$dest_img = imagecreatetruecolor($dest_width,$dest_height);
         @imagecopyresampled($dest_img,$src_img,0,0,0,$y,$dest_width,$dest_height,$src_width,$src_height);
         @imagejpeg($dest_img,$new_image,$quality);
         @imagedestroy($src_img);
         @imagedestroy($dest_img);
         copy($thephoto,$folderpic.$photonamebig);
      break;
      case "5" :
         $name_1 = str_replace("x","",$_FILES["thefile"]["name"]);
         $name_2 = explode(".",$name_1);
         $name_3 = count($name_2);
         for($i=0;$i<=$name_3-2;$i++){
            $HTML .= $name_2[$i].".";
         }
         $HTML = substr($HTML,0,strlen($HTML)-1);
         return $HTML;
      break;
      case "6" :
         $thephoto = $val["tmp_name"];
         $folderpic = $folder;
         $date_db = $picname;
         $filetype = $val["type"];
         switch($filetype){
            case "image/gif":$extensi="gif";break;
            case "image/jpg":$extensi="jpg";break;
            case "image/jpeg":$extensi="jpg";break;
            case "image/pjpeg":$extensi="jpg";break;
         }
         $photonamebig = $date_db.".".$extensi;
         copy($thephoto,$folderpic.$photonamebig);
      break;
   }
}

function pss_file_upload($type,$file_temp,$file_name="",$folder=""){
   return true;
}

function pss_form_is_empty($form){
   if(strlen($form)>0){
      return true;
   }else{
      return false;
   }
}

function pss_fuck_quote($val){
   $val = str_replace("\\","",$val);
   return $val;
}

function pss_noHTML($var){
   return htmlspecialchars($var,ENT_QUOTES);
}

function pss_withTinyMCE($var){
   $var = eregi("^<p>",$var)?substr($var,3,strlen($var)):$var;
   $var = str_replace("<p>&nbsp;</p>","",$var);
   $var = str_replace("<p>","<br /><br />",$var);
   $var = str_replace("</p>","",$var);
   $var = str_replace("\n"," ",$var);
   $var = str_replace("'","&#39;",$var);
   return $var;
}

function pss_url_type($type1,$type2,$modul="",$id="",$title="",$do="",$search=""){
   switch($type1){
      case "1" :
         switch($type2){
            case "1" :
               $HTML = $modul?"/".$modul.".html":"/index".".html";
            break;
            case "2" :
               $HTML = "/$modul/$id.html";
            break;
            case "3" :
               $HTML = "/$modul/$id/$title.html";
            break;
            case "4" :
               $HTML = "/$modul/$search/search";
            break;
            case "5" :
               $HTML = "/$modul/$do/$id/$title.html";
            break;
            case "6" :
               $HTML = "/$modul/$do/$id/$title";
            break;
            case "7" :
               $HTML = "/$modul";
            break;
            case "8" :
               $HTML = "/$modul/$id/$title";
            break;
         }
      break;
      case "2" :
         switch($type2){
            case "1" :
               $HTML = $modul?"?pancadewa=$modul":".";
            break;
            case "2" :
               $HTML = "?pancadewa=$modul&id=$id&title=$title";
            break;
            case "3" :
               $HTML = "?pancadewa=$modul&id=$id&title=$title";
            break;
            case "4" :
               $HTML = "?pancadewa=$modul&search=$search";
            break;
            case "5" :
               $HTML = "?pancadewa=$modul&id=$id&title=$title&do=$do";
            break;
            case "6" :
               $HTML = "?pancadewa=$modul&id=$id&title=$title&do=$do";
            break;
            case "7" :
               $HTML = "?pancadewa=$modul";
            break;
            case "8" :
               $HTML = "?pancadewa=$modul&id=$id&title=$title";
            break;
         }
      break;
   }
   return $HTML;
}
?>