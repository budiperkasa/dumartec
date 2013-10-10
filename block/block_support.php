<?
function block_support(){
   $SQL = "SELECT * FROM pss_ym ORDER BY ym ASC";
   $queryq = mysql_query($SQL);
   $query = mysql_fetch_array($queryq);
   if($query){
      $HTML .= "<table border=\"0\" width=\"100%\" cellpadding=\"0\" cellspacing=\"0\" class=\"border_1 back_block_1\">";
      $HTML .= "<tr><td class=\"block_padding\">";
      $HTML .= "<table border=\"0\" width=\"100%\" cellpadding=\"3\" cellspacing=\"0\">";
      $HTML .= "<tr><td colspan=\"2\" class=\"label_block_1\">Support - Y!Messenger</td></tr>";
   do{
      $HTML .= "<tr>";
      $HTML .= "<td width=\"5%\" class=\"border_2b block_icon\" valign=\"top\"><img src=\"http://opi.yahoo.com/online?u=".$query[ym]."&m=g&t=5\" title=\"".$query[ym]."\" border=\"0\"></td>";
      $HTML .= "<td width=\"95%\" class=\"border_2b\">";
      $HTML .= "<a href=\"ymsgr:sendIM?".$query[ym]."\">".$query[ym]."</a><br>";
      $HTML .= "<font class=\"foot\"><b>Name.</b> ".$query[name]."</b></font><br>";
      $HTML .= "<font class=\"foot\"><b>Phone.</b> ".$query[phone]."</b></font>";
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
