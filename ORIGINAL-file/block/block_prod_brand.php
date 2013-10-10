<?
function block_prod_brand(){
   global $pss_url_type;
   $SQL = "SELECT * FROM pss_prod_brand ORDER BY name ASC";
   $queryq = mysql_query($SQL);
   $query = mysql_fetch_array($queryq);
   if($query){
      $HTML .= "<table border=\"0\" width=\"100%\" cellpadding=\"0\" cellspacing=\"0\" class=\"border_1 back_block_1\">";
      $HTML .= "<tr><td class=\"block_padding\">";
      $HTML .= "<table border=\"0\" width=\"100%\" cellpadding=\"2\" cellspacing=\"0\">";
      $HTML .= "<tr><td colspan=\"2\" class=\"label_block_1\">Shop By Brand</td></tr>";
   do{
      $judul = pss_set_title($query[name]);
      $HTML .= "<tr>";
      $HTML .= "<td width=\"5%\" class=\"border_2b\" valign=\"top\"><img src=\"/pic/icon/icon-block-brand-list.png\"></td>";
      $HTML .= "<td width=\"95%\" class=\"border_2b\">";
      $HTML .= "<a href=\"".pss_url_type($pss_url_type,3,"brand",$query[id],$judul)."\">".$query[name]."</a>";
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
