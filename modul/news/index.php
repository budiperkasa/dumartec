<?
function atheen_news_list(){
   global $pss_url_type,$pss_paging_type;

   # Paging Start
   $perpage = 10;
   $SQLpage = "SELECT * FROM pss_news";
   $urlpage = pss_url_type($pss_url_type,7,"news",NULL,NULL);
   $awal = pss_paging(1,$SQLpage,$perpage);
   $banyak = $perpage;
   # Paging End

   $SQL = "SELECT * FROM pss_news ORDER BY date DESC LIMIT $awal,$banyak";
   $queryq = mysql_query($SQL);
   $query = mysql_fetch_array($queryq);
   if($query){
      $HTML .= "<table width=\"100%\" cellpadding=\"5\" cellspacing=\"0\">";
   do{
      $judul = pss_set_title($query[subject]);
      $source = $query[source]?" | <b>From:</b> ".$query[source]:"";
      $HTML .= "<tr>";
      $HTML .= "<td class=\"border_2b\">";
      $HTML .= "<font class=\"date_1\">".pss_date_format(2,$query[date])." - ".pss_date_format(3,$query[id])."";
      $HTML .= "$source<br></font>";
      $HTML .= "<a href=\"".pss_url_type($pss_url_type,3,"news",$query[id],$judul)."\"><b>".$query[subject]."</b></a><br>";
      $HTML .= "<font class=\"date_1\">Read <b>".number_format($query[hit])."</b> Time(s)<br>";
      $HTML .= "<i>\"".$query[headline]."\"</i></font>";
      $HTML .= "</td>";
      $HTML .= "</tr>";
   }while($query = mysql_fetch_array($queryq));
      $HTML .= "<tr><td align=\"center\" colspan=\"10\"><br>";
      $HTML .= "<font class=\"paging\">";
      $HTML .= pss_paging(4,$SQLpage,$perpage)."|".pss_paging($pss_paging_type,$SQLpage,$perpage,$urlpage)."|".pss_paging(3,$SQLpage,$perpage);
      $HTML .= "</font>";
      $HTML .= "</td></tr>";
      $HTML .= "</table>";
   }else{
      $HTML .= "<center><br><br><b>Not Available Today</b></center>";
   }
   return $HTML;
}

function atheen_news_read(){
   global $pss_url_type;
   pss_set_hit();
   $SQL = "SELECT * FROM pss_news WHERE id = '".pss_noHTML($_GET["id"])."'";
   $queryq = mysql_query($SQL);
   $query = mysql_fetch_array($queryq);
   if($query){
      $source = $query[source]?"<br><br><b>From:</b> ".$query[source]:"";
      $image = $query[pic]?atheen_set_image($query[pic],$_GET["pancadewa"],300,"right"):"";

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
    <td class="label_block_2 border_3b">NEWS & ARTICLE</td>
  </tr>
  <tr>
    <td>
    <?=$_GET["id"]?atheen_news_read():atheen_news_list();?>
    </td>
  </tr>
</table>
