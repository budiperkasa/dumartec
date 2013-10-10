<?
function block_prod_cat_list($id){
   global $pss_url_type;
   $SQL = "SELECT * FROM pss_prod_cat WHERE id_parent = '$id' ORDER BY name ASC";
   $queryq = mysql_query($SQL);
   $query = mysql_fetch_array($queryq);
   if($query){
   do{
      $level = str_repeat("&nbsp;",($query[level]-1)*3);
      $judul = pss_set_title($query[name]);
      $style = $_GET["pancadewa"]=="product"&&!$_GET["do"]&&$_GET["id"]==$query[id]?"":"a_1";
      $bold = $_GET["pancadewa"]=="product"&&!$_GET["do"]&&$_GET["id"]==$query[id]?"<b>":"";
      $HTML .= "<tr>";
      $HTML .= "<td width=\"100%\" class=\"border_2b\">";
      $HTML .= "<b>$level<img src=\"/pic/icon/icon-block-prod-cat.png\"></b>&nbsp;&nbsp;";
      $HTML .= "$bold<a href=\"".pss_url_type($pss_url_type,3,"product",$query[id],$judul)."\" class=\"$style\">".$query[name]."</a>";
      $HTML .= "</td>";
      $HTML .= "</tr>";
      $HTML .= block_prod_cat_list($query[id]);
   }while($query = mysql_fetch_array($queryq));
      return $HTML;
   }
}


function block_prod_cat(){
      $HTML .= "<table border=\"0\" width=\"100%\" cellpadding=\"0\" cellspacing=\"0\" class=\"border_1 back_block_1\">";
      $HTML .= "<tr><td class=\"block_padding\">";
      $HTML .= "<table border=\"0\" width=\"100%\" cellpadding=\"2\" cellspacing=\"0\">";
      $HTML .= "<tr><td colspan=\"2\" class=\"label_block_1\">Shop By Category</td></tr>";
      $HTML .= block_prod_cat_list(1);
      $HTML .= "</table>";
      $HTML .= "</td></tr>";
      $HTML .= "</table>";
      return $HTML;
}
?>
