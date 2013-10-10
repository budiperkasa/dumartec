<?
function block_banner($val){
   $SQL = "SELECT * FROM pss_banner WHERE lrc = '$val' ORDER BY pos ASC";
   $queryq = mysql_query($SQL);
   $query = mysql_fetch_array($queryq);
   if($query){
      $HTML .= "<table border=\"0\" width=\"100%\" cellpadding=\"0\" cellspacing=\"0\">";
      $HTML .= "<tr><td class=\"block_pad_ban\">";
   do{
      if($val=="l" || $val=="r"){
         $width = "200";
      }else{
         $width = "440";
      }
      $HTML .= "<div style=\"padding-bottom: 5px;\"><a href=\"$query[url]\" target=\"_blank\" class=\"a_4\"><img src=\"/file/banner/$query[pic]\" width=\"$width\" height=\"$query[height]\" border=\"0\"></a></div>";
   }while($query = mysql_fetch_array($queryq));
      $HTML .= "</td></tr>";
      $HTML .= "</table>";
   }
   return $HTML;
}
?>