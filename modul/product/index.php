<?
function atheen_product_recursive($key){
   $SQL = "SELECT * FROM pss_prod_cat WHERE id_parent = '$key' ORDER BY name ASC";
   $queryq = mysql_query($SQL);
   $query = mysql_fetch_array($queryq);
   if($query){
   do{
      $HTML .= "id_folder = '$query[id]' OR ";
      if($query[id]){
         $HTML .= atheen_product_recursive($query[id]);
      }
   }while($query = mysql_fetch_array($queryq));
   }
   return $HTML;
}

function atheen_product_list(){
   global $pss_url_type,$pss_paging_type;

   $page_type = $_GET["id"]?8:7;

   $SQLplus .= $_GET["id"]?"WHERE id_folder = '".pss_noHTML($_GET["id"])."'":"";
   $SQLplus .= atheen_product_recursive(pss_noHTML($_GET["id"]))?
               " OR ".substr(atheen_product_recursive(pss_noHTML($_GET["id"])),0,strlen($HTML)-4):"";

   # Paging Start
   $perpage = 10;
   $SQLpage = "SELECT * FROM pss_prod_stuff $SQLplus";
   $urlpage = pss_url_type($pss_url_type,$page_type,"product",$_GET["id"],$_GET["title"]);
   $awal = pss_paging(1,$SQLpage,$perpage);
   $banyak = $perpage;
   # Paging End

   $SQL = "SELECT *,
                  a.id AS id,
                  a.pic AS pic,
                  a.name AS name,
                  a.headline AS headline,
                  b.color AS color
           FROM pss_prod_stuff AS a
           LEFT JOIN pss_prod_cat AS b ON b.id = a.id_folder
           $SQLplus
           ORDER BY b.name ASC, a.id DESC
           LIMIT $awal,$banyak";
   $queryq = mysql_query($SQL);
   $query = mysql_fetch_array($queryq);
   if($query){
      $HTML .= "<table width=\"100%\" cellpadding=\"5\" cellspacing=\"0\">";
   do{
      $name = "<div class=\"lb_prod_stuff\" style=\"background-color: $query[color];\">".$query[name]."</div>";
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
      $judul = pss_set_title($query[name]);
      $head = $query[headline]?"<br><br><font class=\"head_2\"><i>$query[headline]</i></font>":"";

      $HTML .= "<tr>";
      $HTML .= "<td width=\"5%\" class=\"border_1a border_1b border_1d\" valign=\"top\"><div class=\"thumb_pic_1\" style=\"background-image: url('".$image."');$image_pos\"><div $sale_2>".$sale_1."</div></div></td>";
      $HTML .= "<td width=\"95%\" class=\"back_2 border_1\" valign=\"top\">";
      $HTML .= $name;
      $HTML .= "<a href=\"".pss_url_type($pss_url_type,5,"stuff",$query[id],$judul,"view")."\" class=\"a_3 foot\"><b>&#187; View</b></a>";
      $HTML .= $head;
      $HTML .= $price1.$price2;
      $HTML .= "</td>";
      $HTML .= "</tr>";
   }while($query = mysql_fetch_array($queryq));
      $HTML .= "<tr><td align=\"center\" colspan=\"10\"><br>";
      $HTML .= "<font class=\"paging\">";
      $HTML .= pss_paging(4,$SQLpage,$perpage)."|".pss_paging($pss_paging_type,$SQLpage,$perpage,$urlpage)."|".pss_paging(3,$SQLpage,$perpage);
      $HTML .= "</font>";
      $HTML .= "</td></tr>";
      $HTML .= "</table><br>";
   }else{
      $HTML .= "<center><br><br><b>Not Available Today</b></center>";
   }
   return $HTML;
}

function atheen_product_read(){
   global $pss_url_type;
   pss_set_hit();
   $SQL = "SELECT * FROM pss_prod_stuff WHERE id = '".pss_noHTML($_GET["id"])."'";
   $queryq = mysql_query($SQL);
   $query = mysql_fetch_array($queryq);
   if($query){
      $source = $query[source]?"<br><br><b>From:</b> ".$query[source]:"";
      $image = $query[pic]?atheen_set_image($query[pic],$_GET["pancadewa"],200,"right"):"";

      $HTML .= "<table width=\"100%\" cellpadding=\"5\" cellspacing=\"0\">";

      $HTML .= "<tr>";
      $HTML .= "<td colspan=\"2\" class=\"border_2b\">";
      $HTML .= "<font class=\"subject_1\">".$query[subject]."</font><br>";
      $HTML .= "<font class=\"date_2\">".pss_date_format(2,$query[date])." - ".pss_date_format(3,$query[id])."</font>";
      $HTML .= " | <font class=\"source_1\">Read <b>".number_format($query[hit])."</b> Time(s)</font><br><br>";
      $HTML .= "<font class=\"date_1\"><i>\"".$query[headline]."\"</i></font><br><br>";
      $HTML .= $image;
      $HTML .= "".$query[description]."";
      $HTML .= "<font class=\"source_1\">".$source."</font>";
      $HTML .= "</td>";
      $HTML .= "</tr>";

      atheen_update_meta_tag();
      if(pss_meta_tag($query[meta_tag])){
         $HTML .= "<tr>";
         $HTML .= "<td colspan=\"2\" width=\"100%\" class=\"border_1b back_2\" style=\"padding: 5px;\">";
         $HTML .= "<b>News Linked :</b><br>";
         $HTML .= pss_meta_tag($query[meta_tag],"date");
         $HTML .= "</td>";
         $HTML .= "</tr>";
      }

      $HTML .= "<tr>";
      $HTML .= "<td width=\"0%\"><img src=\"/pic/icon/icon-button-back.png\"></td>";
      $HTML .= "<td width=\"100%\" style=\"padding-left: 0px;\"><a href=\"".pss_url_type($pss_url_type,1,$_GET["pancadewa"])."\">Back to List</a></td>";
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
    <?=atheen_product_list()?>
    </td>
  </tr>
</table>
