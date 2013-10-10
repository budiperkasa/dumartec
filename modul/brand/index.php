<?
function atheen_brand_list(){
   global $pss_url_type,$pss_paging_type;

   # Paging Start
   $perpage = 10;
   $SQLpage = "SELECT * FROM pss_prod_stuff WHERE id_brand = '".pss_noHTML($_GET["id"])."'";
   $urlpage = pss_url_type($pss_url_type,8,"brand",$_GET["id"],$_GET["title"]);
   $awal = pss_paging(1,$SQLpage,$perpage);
   $banyak = $perpage;
   # Paging End

   $SQL = "SELECT a.name AS aname,
                  b.name AS bname,
                  b.id AS bid,
                  b.pic AS bpic,
                  b.price_1 AS price_1,
                  b.price_2 AS price_2,
                  b.discount AS discount,
                  c.color AS ccolor
           FROM pss_prod_brand AS a
           LEFT JOIN pss_prod_stuff AS b ON b.id_brand = a.id
           LEFT JOIN pss_prod_cat AS c ON c.id = b.id_folder
           WHERE b.id_brand = '".pss_noHTML($_GET["id"])."'
           LIMIT $awal,$banyak";
   $queryq = mysql_query($SQL);
   $query = mysql_fetch_array($queryq);
   $queryxx = mysql_num_rows($queryq);
   if($query){
      $HTML .= "<table cellpadding=\"2\" cellspacing=\"0\" width=\"100%\" border=\"0\">";
      $HTML .= "<tr>";
      $HTML .= "<td class=\"border_1 label_block_3\">";
      $HTML .= "".$query[aname]."";
      $HTML .= "</td>";
      $HTML .= "</tr>";
      $HTML .= "<tr>";
      $HTML .= "<td class=\"border_2b\"><br>";
      $HTML .= "<table cellpadding=\"2\" cellspacing=\"0\" width=\"100%\" border=\"0\">";
      $HTML .= "<tr>";
   do{
      if(!atheen_design_block("l") && !atheen_design_block("r")){
         $set_trtd = "4";
         $set_width = "18";
         $set_kali = 3-$queryxx;
      }elseif(atheen_design_block("l") && !atheen_design_block("r")){
         $set_trtd = "3";
         $set_width = "28";
         $set_kali = 2-$queryxx;
      }elseif(!atheen_design_block("l") && atheen_design_block("r")){
         $set_trtd = "3";
         $set_width = "28";
         $set_kali = 2-$queryxx;
      }else{
         $set_trtd = "2";
         $set_width = "44";
         $set_kali = 1-$queryxx;
      }

      $no++;
      $trtd = $no%$set_trtd?"<td width=\"2%\">&nbsp;</td>":"</tr><tr><td colspan=\"20\">&nbsp;</td></tr><tr>";

      $name = "<div class=\"lb_prod_stuff\" style=\"background-color: $query[ccolor];\">".$query[bname]."</div>";
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
      $image = $query[bpic]?"/file/prod_stuff/".$query[bpic]:"/pic/icon/icon-no-image.png";
      $image_pos = $query[bpic]?"":" background-position: 2px 2px;";
      $judul = pss_set_title($query[bname]);

      $HTML .= "<td width=\"5%\" class=\"back_2 border_1a border_1b border_1d\" valign=\"top\"><div class=\"thumb_pic_1\" style=\"background-image: url('".$image."');$image_pos\"><div $sale_2>".$sale_1."</div></div></td>";
      $HTML .= "<td width=\"$set_width%\" class=\"back_2 border_1\" valign=\"top\">";
      $HTML .= $name;
      $HTML .= "<a href=\"".pss_url_type($pss_url_type,5,"stuff",$query[bid],$judul,"view")."\" class=\"a_3 foot\"><b>&#187; View</b></a>";
      $HTML .= $price1.$price2;
      $HTML .= "</td>";
      $HTML .= "$trtd";
   }while($query = mysql_fetch_array($queryq));
      for($i=0;$i<=$set_kali;$i++){
              $nox++;
              $td = $nox%$set_trtd-$queryxx?"":"<td width=\"2%\">&nbsp;</td>";
              $HTML .= ($queryxx/$set_trtd)==(int)($queryxx/$set_trtd)?"":"<td width=\"5%\">&nbsp;</div></td><td width=\"$set_width%\">&nbsp;</td>$td";
           }
           $tdx1 = $no/$set_trtd;
           $tdx2 = (int)$tdx1;
           $HTMLx = "<tr><td colspan=\"20\">&nbsp;</td></tr>";
           $HTML .= $tdx1==$tdx2?"":$HTMLx;
           $nox = 0;
      $HTML .= "</tr>";
      $HTML .= "</table>";
      $HTML .= "</td>";
      $HTML .= "</tr>";
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
?>

<table width="100%" cellpadding="5" cellspacing="0">
  <tr>
    <td class="label_block_2 border_3b">SHOP BY BRAND</td>
  </tr>
  <tr>
    <td>
    <?=atheen_brand_list();?>
    </td>
  </tr>
</table>
