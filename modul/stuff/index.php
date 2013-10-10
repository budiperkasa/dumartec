<?
function atheen_stuff_read(){
   global $pss_url_type;

   $SQL = "SELECT *
           FROM pss_prod_stuff
           WHERE id = '".pss_noHTML($_GET["id"])."'";
   $queryq = mysql_query($SQL);
   $query = mysql_fetch_array($queryq);
   if($query){
      $image = $query[pic]?atheen_set_image("../prod_stuff/".$query[pic],$_GET["pancadewa"],200,"right"):"";
      $price2 = $query[price_1]&&$query[price_2]?
                "</font><br><font class=\"foot\">Rp.</font><font class=\"font_3\"><b>".number_format($query[price_2],0,",",".").",-</b></font>":
                "";
      $price3 = $query[price_1]&&$query[price_2]?"font_4":"";
      $br = $price2?"":"<br>";
      $price1 = $query[price_1]?
                $br."<br><br><b>Price :</b><br><font class=\"foot\">Rp.</font><font class=\"font_3 $price3\"><b>".number_format($query[price_1],0,",",".").",-</b></font>":
                "<br><br><b>Price :</b><br><a href=\"".pss_url_type($pss_url_type,1,"contact")."\" class=\"a_2\"><b>Contact Us</b></a>";
      $sale_1 = $query[discount]?"&nbsp; ( <i>Sale to <b class=\"font_5\">".(int)$query[discount]."%</b></i> )":"";

      $HTML .= "<table width=\"100%\" cellpadding=\"5\" cellspacing=\"0\">";

      $HTML .= "<tr>";
      $HTML .= "<td colspan=\"2\">";
      $HTML .= "<font class=\"subject_1\">".$query[name]."</font><br>";
      $HTML .= "<font class=\"date_1\"><i>\"".$query[headline]."\"</i></font><br><br>";
      $HTML .= $image;
      $HTML .= "".$query[description]."";
      $HTML .= $price1.$price2.$sale_1;
      $HTML .= "</td>";
      $HTML .= "</tr>";

      $HTML .= "<tr>";
      $HTML .= "<td colspan=\"2\" class=\"border_2b\">";
      $HTML .= "<br>
                <div class=\"spec_4\">
                <div id=\"spec1\" onclick=\"prod_spec('spec1')\" class=\"spec_3\">FEATURE</div>
                <div id=\"spec2\" onclick=\"prod_spec('spec2')\" class=\"spec_2\">SPECIFICATION</div>
                <div id=\"spec3\" onclick=\"prod_spec('spec3')\" class=\"spec_2\">IN THE BOX</div>
                <div id=\"\" class=\"spec_1\">&nbsp;</div>
                </div>";
      $HTML .= "<div id=\"spec1x\" class=\"spec_5\">$query[desc_feature]</div>";
      $HTML .= "<div id=\"spec2x\" class=\"spec_6\">$query[desc_spec]</div>";
      $HTML .= "<div id=\"spec3x\" class=\"spec_6\">$query[desc_box]</div>";
      $HTML .= "</td>";
      $HTML .= "</tr>";

      atheen_update_meta_tag();
      if(pss_meta_tag($query[meta_tag])){
         $HTML .= "<tr>";
         $HTML .= "<td colspan=\"2\" width=\"100%\" class=\"border_1b back_2\" style=\"padding: 5px;\">";
         $HTML .= "<b>Product Linked :</b><br>";
         $HTML .= pss_meta_tag($query[meta_tag],"id","name");
         $HTML .= "</td>";
         $HTML .= "</tr>";
      }

      $HTML .= "<tr>";
      $HTML .= "<td width=\"0%\"><img src=\"/pic/icon/icon-button-back.png\"></td>";
      $HTML .= "<td width=\"100%\" style=\"padding-left: 0px;\"><a href=\"".pss_url_type($pss_url_type,1,"product")."\">Back to List</a></td>";
      $HTML .= "</tr>";

      $HTML .= "</table>";
   }else{
      $HTML .= "<center><br><br><b>Not Available Today</b></center>";
   }
   return $HTML;
}
?>

<table width="100%" cellpadding="5" cellspacing="0">
  <tr>
    <td class="label_block_2 border_3b">PRODUCT</td>
  </tr>
  <tr>
    <td>
    <?=atheen_stuff_read()?>
    </td>
  </tr>
</table>
