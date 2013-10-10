<?
function block_prod_new(){
   global $pss_url_type;
   $SQL = "SELECT * FROM pss_prod_stuff WHERE new_type = '1' ORDER BY id DESC";
   $queryq = mysql_query($SQL);
   $query = mysql_fetch_array($queryq);
   if($query){
      $HTML .= "<table border=\"0\" width=\"100%\" cellpadding=\"0\" cellspacing=\"0\" class=\"border_1 back_block_1\">";
      $HTML .= "<tr><td class=\"block_padding\">";
      $HTML .= "<table border=\"0\" width=\"100%\" cellpadding=\"3\" cellspacing=\"0\">";
      $HTML .= "<tr><td colspan=\"2\" class=\"label_block_1\">Product</td></tr>";
   do{
      $judul = pss_set_title($query[name]);
      $price2 = $query[price_1]&&$query[price_2]?
                "</font><br><font class=\"foot\">Rp.</font><font class=\"font_3\"><b>".number_format($query[price_2],0,",",".").",-</b></font>":
                "";
      $price3 = $query[price_1]&&$query[price_2]?"font_4":"";
      $br = $price2?"":"<br>";
      $price1 = $query[price_1]?
                $br."<br><br><font class=\"foot\">Rp.</font><font class=\"font_3 $price3\"><b>".number_format($query[price_1],0,",",".").",-</b></font>":
                "<br><br><br><a href=\"".pss_url_type($pss_url_type,1,"contact")."\" class=\"a_2\"><b>Contact Us</b></a>";
      $sale_1 = $query[discount]?(int)$query[discount]:"";
      $sale_2 = $query[discount]?"class=\"discount\"":"";
      $image = $query[pic]?"/file/prod_stuff/".$query[pic]:"/pic/icon/icon-no-image.png";
      $image_pos = $query[pic]?"":" background-position: 2px 2px;";

      $HTML .= "<tr>";
      $HTML .= "<td width=\"5%\" class=\"border_2b\" valign=\"top\">";
      $HTML .= "<div class=\"thumb_pic_1\" style=\"background-image: url('".$image."');$image_pos\">";
      $HTML .= "<div $sale_2>".$sale_1."</div>";
      $HTML .= "</div>";
      $HTML .= "</td>";
      $HTML .= "<td width=\"95%\" class=\"border_2b\" valign=\"top\">";
      $HTML .= "<b>".$query[name]."</b>";
      $HTML .= "<br><a href=\"".pss_url_type($pss_url_type,5,"stuff",$query[id],$judul,"view")."\" class=\"a_3 foot\"><b>&#187; View</b></a>";
      $HTML .= $price1.$price2;
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
