<?
function block_web_statistic(){
   global $pss_url_type;
   $SQL = "SELECT * FROM pss_web_statistic ORDER BY id DESC LIMIT 0,1";
   $queryq = mysql_query($SQL);
   $query_1 = mysql_fetch_array($queryq);
   $SQL = "SELECT * FROM pss_web_statistic ORDER BY id DESC LIMIT 1,1";
   $queryq = mysql_query($SQL);
   $query_2 = mysql_fetch_array($queryq);
   if($query_1){
      $HTML .= "<table border=\"0\" width=\"100%\" cellpadding=\"0\" cellspacing=\"0\" class=\"border_1 back_block_1\">";
      $HTML .= "<tr><td class=\"block_padding\">";
      $HTML .= "<table border=\"0\" width=\"100%\" cellpadding=\"2\" cellspacing=\"0\">";
      $HTML .= "<tr><td colspan=\"3\" class=\"label_block_1\">Web Statistic</td></tr>";

      $HTML .= "<tr>";
      $HTML .= "<td width=\"5%\" class=\"border_2b\" valign=\"top\"><img src=\"/pic/icon/icon-block-statistic.png\"></td>";
      $HTML .= "<td width=\"50%\" class=\"border_2b\" align=\"left\">Today</td>";
      $HTML .= "<td width=\"50%\" class=\"border_2b\" align=\"right\">";
      $HTML .= number_format($query_1[hit]);
      $HTML .= "&nbsp;&nbsp;</td>";
      $HTML .= "</tr>";
      $HTML .= "<tr>";
      $HTML .= "<td width=\"5%\" class=\"border_2b\" valign=\"top\"><img src=\"/pic/icon/icon-block-statistic.png\"></td>";
      $HTML .= "<td width=\"50%\" class=\"border_2b\" align=\"left\">Yesterday</td>";
      $HTML .= "<td width=\"50%\" class=\"border_2b\" align=\"right\">";
      $HTML .= number_format($query_2[hit]);
      $HTML .= "&nbsp;&nbsp;</td>";
      $HTML .= "</tr>";
      $HTML .= "<tr>";
      $HTML .= "<td colspan=\"3\" align=\"center\"><br>";
      $HTML .= "<SCRIPT type='text/javascript' language='JavaScript' src='http://xslt.alexa.com/site_stats/js/t/a?url=www.dumartec.com'></SCRIPT>";
      $HTML .= "</td>";
      $HTML .= "</tr>";

      $HTML .= "</table>";
      $HTML .= "</td></tr>";
      $HTML .= "</table>";
      return $HTML;
   }
}
?>
