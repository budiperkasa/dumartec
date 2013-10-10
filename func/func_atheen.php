<?
function atheen_date_format($type,$value){
   global $lang;
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
      case "4" :
         $Dday = mktime($d4,$d5,$d6,$d2,$d3,$d1);
         $day = date("w",$Dday);
         $mon = date("m",$Dday);
         $mon = $lang["pss_mon_".$mon];
         $call = $lang["pss_day_".$day].date(", d ",$Dday).$mon.date(" Y",$Dday);
      break;
      case "5" :
         $Dday = mktime($d4,$d5,$d6,$d2,$d3,$d1);
         $day = date("w",$Dday);
         $call = $lang["pss_day_".$day].date(", d/m/Y - H:i:s",$Dday);
      break;
   }
   return $call;
}

function atheen_design_block($key){
   $pageselect = $_GET["pancadewa"]?pss_noHTML($_GET["pancadewa"]):"home";
   $SQL = "SELECT * FROM pss_design_block WHERE lr = '$key' AND page = '$pageselect' ORDER BY pos ASC, id ASC";
   $queryq = mysql_query($SQL);
   $query = mysql_fetch_array($queryq);
   if($query){
   do{
      if(file_exists("block/$query[name].php")){
         if($query[name]=="block_banner"){
            $HTML .= $query[name]($key)?$query[name]($key)."<br>":"";
         }else{
            $HTML .= $query[name]()."<br>";
         }
      }
   }while($query = mysql_fetch_array($queryq));
   }
   return $HTML;
}

function atheen_modul_content(){
   if($_GET["pancadewa"]){
      if(file_exists("modul/".$_GET["pancadewa"]."/index.php")){
         include("modul/".$_GET["pancadewa"]."/index.php");
      }else{
         echo "<br><br><center><h1>ERROR 404</h1></center>";
      }
   }else{
      echo block_banner("t")?block_banner("t")."<br>":"";
      include("modul/home.php");
      echo block_banner("c");
   }
}

function atheen_marquee(){
   $SQL = "SELECT * FROM pss_marquee WHERE status = '1' ORDER BY id DESC";
   $queryq = mysql_query($SQL);
   $query = mysql_fetch_array($queryq);
   if($query){
   do{
      $HTML .= $query[description]." | ";
   }while($query = mysql_fetch_array($queryq));
   }
   return substr($HTML,0,strlen($HTML)-3);
}

function atheen_home_product(){
   global $pss_url_type;
   $SQL = "SELECT * FROM pss_prod_cat WHERE home = '1' ORDER BY pos ASC, id ASC";
   $queryq = mysql_query($SQL);
   $query = mysql_fetch_array($queryq);
   if($query){
      $HTML .= "<table cellpadding=\"2\" cellspacing=\"0\" width=\"100%\" border=\"0\">";
      $HTML .= "<tr>";
      $HTML .= "<td>";
        $HTML .= "<table cellpadding=\"2\" cellspacing=\"0\" width=\"100%\" border=\"0\">";
        $HTML .= "<tr>";
   do{
        $HTML .= "<td style=\"color: $query[color];\" colspan=\"20\" class=\"border_3b label_block_2\">".$query[name]."</td>";
        $HTML .= "</tr>";
        $HTML .= "<tr>";
        $HTML .= "<td>";
        $SQLx = "SELECT * FROM pss_prod_stuff WHERE id_folder = '$query[id]' ORDER BY id ASC LIMIT 0,6";
        $queryxq = mysql_query($SQLx);
        $queryx = mysql_fetch_array($queryxq);
        $queryxx = mysql_num_rows($queryxq);
        if($queryx){
           $HTML .= "<tr>";
        do{
           if(!atheen_design_block("l") && !atheen_design_block("r")){
              $set_trtd = "4";
              $set_width = "18";
              $set_kali = 3-1-$queryxx;
           }elseif(atheen_design_block("l") && !atheen_design_block("r")){
              $set_trtd = "3";
              $set_width = "28";
              $set_kali = 2-1-$queryxx;
           }elseif(!atheen_design_block("l") && atheen_design_block("r")){
              $set_trtd = "3";
              $set_width = "28";
              $set_kali = 2-1-$queryxx;
           }else{
              $set_trtd = "2";
              $set_width = "44";
              $set_kali = 1-1-$queryxx;
           }

           $no++;
           $trtd = $no%$set_trtd?"<td width=\"2%\">&nbsp;</td>":"</tr><tr><td colspan=\"20\">&nbsp;</td></tr><tr>";
           $judul = pss_set_title($queryx[name]);
           $price2 = $queryx[price_1]&&$queryx[price_2]?
                     "</font><br><font class=\"foot\">Rp.</font><font class=\"font_3\"><b>".number_format($queryx[price_2],0,",",".").",-</b></font>":
                     "";
           $price3 = $queryx[price_1]&&$queryx[price_2]?"font_4":"";
           $br = $price2?"":"<br>";
           $price1 = $queryx[price_1]?
                     $br."<br><br><font class=\"foot\">Rp.</font><font class=\"font_3 $price3\"><b>".number_format($queryx[price_1],0,",",".").",-</b></font>":
                     "<br><br><br><a href=\"".pss_url_type($pss_url_type,1,"contact")."\" class=\"a_2\"><b>Contact Us</b></a>";
           $sale_1 = $queryx[discount]?(int)$queryx[discount]:"";
           $sale_2 = $queryx[discount]?"class=\"discount\"":"";
           $image = $queryx[pic]?"/file/prod_stuff/".$queryx[pic]:"/pic/icon/icon-no-image.png";
           $image_pos = $queryx[pic]?"":" background-position: 2px 2px;";

           $HTML .= "<td width=\"5%\" class=\"back_2 border_1a border_1b border_1d\" valign=\"top\"><div class=\"thumb_pic_1\" style=\"background-image: url('".$image."');$image_pos\"><div $sale_2>".$sale_1."</div></div></td>";
           $HTML .= "<td width=\"$set_width%\" class=\"back_2 border_1\" valign=\"top\">";
           $HTML .= "<div class=\"lb_prod_stuff\" style=\"background-color: $query[color];\">".$queryx[name]."</div>";
           $HTML .= "<a href=\"".pss_url_type($pss_url_type,5,"stuff",$queryx[id],$judul,"view")."\" class=\"a_3 foot\"><b>&#187; View</b></a>";
           $HTML .= $price1.$price2;
           $HTML .= "</td>";
           $HTML .= $trtd;
        }while($queryx = mysql_fetch_array($queryxq));
           for($i=0;$i<=$set_kali;$i++){
              $nox++;
              $td = $nox%$set_trtd-$queryxx?"":"<td width=\"2%\">&nbsp;</td>";
              $HTML .= ($queryxx/$set_trtd)==(int)($queryxx/$set_trtd)?"":"<td width=\"5%\">&nbsp;</div></td><td width=\"$set_width%\">&nbsp;</td>$td";
           }
           $tdx1 = $no/$set_trtd;
           $tdx2 = (int)$tdx1;
           $HTMLx = "<tr><td colspan=\"20\">&nbsp;</td></tr>";
           $HTML .= $tdx1==$tdx2?"":$HTMLx;
           $no = 0;
           $nox = 0;
        }
   }while($query = mysql_fetch_array($queryq));
        $HTML .= "</tr>";
        $HTML .= "</table>";
      $HTML .= "</td>";
      $HTML .= "</tr>";
      $HTML .= "</table><br>";
   }
   return $HTML;
}

function atheen_set_image($val,$folder,$target,$align){
   $file = "file/".$folder."/".str_replace("x","",$val);
   $img =  getimagesize($file);
   $width = $img[0]>$target?$target:$img[0];
   $aligns = $align=="left"?"right":"left";
   $HTML .= "<img src=\"/$file\" width=\"$width\" class=\"border_1\" style=\"float: $align; margin-$aligns: 15px; padding: 2px;\">";
   return $HTML;
}

function atheen_update_meta_tag(){
   global $pss_url_type,$pss_page_db;

   $modul = $_GET["pancadewa"];
   $db = $pss_page_db[$modul];

   $SQL = "SELECT * FROM $db";
   $queryq = mysql_query($SQL);
   $query = mysql_fetch_array($queryq);
   if($query){
   do{
      if(eregi(", ",$query[meta_tag]) || eregi(" ,",$query[meta_tag])){
         $meta1x = explode(",",$query[meta_tag]);
         $meta2x = count($meta1x);
         for($ix=0;$ix<=$meta2x-1;$ix++){
            $meta3x .= trim($meta1x[$ix]).",";
         }
         $meta4x = "".substr($meta3x,0,strlen($meta3x)-1)."";
         $SQLx = "UPDATE $db SET meta_tag = '$meta4x' WHERE id = '$query[id]'";
         mysql_query($SQLx);
         $meta3x = "";
      }
   }while($query = mysql_fetch_array($queryq));
   }
}
?>
