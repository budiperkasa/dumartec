<?
function atheen_faq_list(){
   global $pss_url_type;

   # Paging Start
   $perpage = 10;
   $SQLpage = "SELECT * FROM pss_faq";
   $urlpage = pss_url_type($pss_url_type,7,"faq",NULL,NULL);
   $awal = pss_paging(1,$SQLpage,$perpage);
   $banyak = $perpage;
   # Paging End

   $SQL = "SELECT * FROM pss_faq ORDER BY pos ASC LIMIT $awal,$banyak";
   $queryq = mysql_query($SQL);
   $query = mysql_fetch_array($queryq);
   if($query){
      $HTML .= "<table width=\"100%\" cellpadding=\"5\" cellspacing=\"0\">";
   do{
      $id = $query["id"];
      $judul = pss_set_title($query[subject]);
      $source = $query[source]?" | <b>From:</b> ".$query[source]:"";
      $tanggal = substr($id,0,4)."/".substr($id,4,2)."/".substr($id,6,2);
      $HTML .= "<tr>";
      $HTML .= "<td class=\"border_2b\">";
      $HTML .= "<h3 class='subjectofcontent'>".$query["subject"]."</h3>";
      $HTML .= "<p class='paragraphofcontent'>".$query["description"]."</p>";
      $HTML .= "</td>";
      $HTML .= "</tr>";
   }while($query = mysql_fetch_array($queryq));
      $HTML .= "<tr><td align=\"center\" colspan=\"10\"><br>";
      $HTML .= "<font class=\"paging\">";
      $HTML .= pss_paging(4,$SQLpage,$perpage)."|".pss_paging(5,$SQLpage,$perpage,$urlpage)."|".pss_paging(3,$SQLpage,$perpage);
      $HTML .= "</font>";
      $HTML .= "</td></tr>";
      $HTML .= "</table>";
   }
   return $HTML;
}

?>

<table width="100%" cellpadding="5" cellspacing="0">
  <tr>
    <td class="label_block_2 border_3b">F.A.Q</td>
  </tr>
  <tr>
    <td>
    <?=atheen_faq_list();?>
    </td>
  </tr>
</table>
