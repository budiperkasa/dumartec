<?
function pss_meta_keywords(){
   global $pss_meta_keywords,$pss_page_db;
   $id = htmlspecialchars($_GET["id"],ENT_QUOTES);
   $modul = $_GET["pancadewa"];
   if($pss_page_db[$modul]){
      $SQL = "SELECT * FROM ".$pss_page_db[$modul]." WHERE id = '".$id."'";
      $queryq = mysql_query($SQL);
      $query = mysql_fetch_array($queryq);
   }
   $meta = $query[meta_key]?$query[meta_key]:$pss_meta_keywords;
   return $meta;
}

function pss_meta_description(){
   global $pss_meta_description,$pss_page_db;
   $id = htmlspecialchars($_GET["id"],ENT_QUOTES);
   $modul = $_GET["pancadewa"];
   if($pss_page_db[$modul]){
      $SQL = "SELECT * FROM ".$pss_page_db[$modul]." WHERE id = '".$id."'";
      $queryq = mysql_query($SQL);
      $query = mysql_fetch_array($queryq);
   }
   $meta = $query[meta_desc]?$query[meta_desc]:$pss_meta_keywords;
   return $meta;
}

function pss_meta_tag($val,$order="",$subject=""){
   global $pss_url_type,$pss_page_db;

   $order = $order?$order:"id";
   $sbjek = $subject?$subject:"subject";

   $modul = $_GET["pancadewa"];
   $db = $pss_page_db[$modul];

   $meta1 = explode(",",$val);
   $meta2 = count($meta1);
   for($i=0;$i<=$meta2-1;$i++){
      $meta3 .= "meta_tag LIKE '".trim($meta1[$i])."' OR ";
      $meta3 .= "meta_tag LIKE '".trim($meta1[$i]).",%' OR ";
      $meta3 .= "meta_tag LIKE '%,".trim($meta1[$i]).",%' OR ";
      $meta3 .= "meta_tag LIKE '%,".trim($meta1[$i])."' OR ";
   }
   $meta4 = "(".substr($meta3,0,strlen($meta3)-4).")";

   $SQL = "SELECT * FROM $db WHERE id <> '".pss_noHTML($_GET["id"])."' AND $meta4 ORDER BY $order DESC LIMIT 0,4";
   $queryq = mysql_query($SQL);
   $query = mysql_fetch_array($queryq);
   if($query){
      $HTML .= "<table width=\"100%\" cellpadding=\"2\" cellspacing=\"0\">";
   do{
      $judul = pss_set_title($query[$sbjek]);
      $HTML .= "<tr>";
      $HTML .= "<td width=\"1%\"><img src=\"/pic/icon/icon-block-news-2.png\"></td>";
      $HTML .= "<td width=\"99%\"><a href=\"".pss_url_type($pss_url_type,3,$_GET["pancadewa"],$query[id],$judul)."\">$query[$sbjek]</a></td>";
      $HTML .= "</tr>";
   }while($query = mysql_fetch_array($queryq));
      $HTML .= "</table>";
   }
   return $HTML;
}

function pss_set_title($val){
   $HTML .= preg_replace("( |_|%|\?|\/|\\\$|&|#|\^|<|>|\(|\)|\*|!|@|;|,|\.|:|\[|\]|{|})","-",$val);
   return $HTML;
}

function pss_statistik_set(){
   $date = date("Ymd");
   $SQL = "SELECT *
           FROM pss_web_statistic
           WHERE LEFT(id,8) = '$date'";
   $queryq = mysql_query($SQL);
   $query = mysql_fetch_array($queryq);
   if($query){
      $SQLx = "UPDATE pss_web_statistic SET hit = hit+1 WHERE id = '$date'";
   }else{
      $SQLx = "INSERT INTO pss_web_statistic (id,hit) VALUE('$date','1')";
   }
   $queryqx = mysql_query($SQLx);
   $_SESSION["reg_statistik"] = "ok";
}

function pss_set_hit(){
   $SQL = "UPDATE pss_".pss_noHTML($_GET["pancadewa"])." SET hit = hit+1 WHERE id = '".pss_noHTML($_GET["id"])."'";
   $queryq = mysql_query($SQL);
}
?>
