<?
function block_news(){
   global $pss_url_type;
   $SQL = "SELECT * FROM pss_news ORDER BY date DESC LIMIT 0,5";
   $queryq = mysql_query($SQL);
   $query = mysql_fetch_array($queryq);
   if($query){
      $HTML .= "<table border=\"0\" width=\"100%\" cellpadding=\"0\" cellspacing=\"0\" class=\"border_1 back_block_1\">";
      $HTML .= "<tr><td class=\"block_padding\">";
      $HTML .= "<table border=\"0\" width=\"100%\" cellpadding=\"2\" cellspacing=\"0\">";
      $HTML .= "<tr><td colspan=\"2\" class=\"label_block_1\">News & Article</td></tr>";
   do{
      $judul = pss_set_title($query[subject]);
      $source = $query[source]?"<br><b>From:</b> ".$query[source]:"";
      $HTML .= "<tr>";
      $HTML .= "<td width=\"5%\" class=\"border_2b\" valign=\"top\"><img src=\"/pic/icon/icon-block-news.png\"></td>";
      $HTML .= "<td width=\"95%\" class=\"border_2b\">";
      $HTML .= "<font class=\"date_1\">".pss_date_format(2,$query[date])." - ".pss_date_format(3,$query[id])."</font><br>";
      $HTML .= "<a href=\"".pss_url_type($pss_url_type,3,"news",$query[id],$judul)."\">".$query[subject]."</a>";
      $HTML .= "<font class=\"date_1\">$source</font>";
      $HTML .= "</td>";
      $HTML .= "</tr>";
   }while($query = mysql_fetch_array($queryq));
      $HTML .= "</table>";
      $HTML .= "</td></tr>";
      $HTML .= "</table>";
      return $HTML;
   }
}
?>
