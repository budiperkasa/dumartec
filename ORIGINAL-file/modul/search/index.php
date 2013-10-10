<?
function atheen_search() {
   global $pss_url_type,$pss_paging_type;

   if($_POST["search"]){
      $search = pss_noHTML($_POST["search"]);
   }elseif($_GET["search"]){
      $search = pss_noHTML($_GET["search"]);
   }else{
      $search = "error kali broe, masa ga dikasih query :D";
   }
   $SQLsearch = "
   (
   SELECT CONCAT_WS('-,xxx,-',id,name,headline,description) AS data,
                    'product' AS modul,
                    id AS id
   FROM pss_prod_stuff
   WHERE name LIKE '%$search%' OR
         headline LIKE '%$search%' OR
         description LIKE '%$search%'
   )

   UNION

   (
   SELECT CONCAT_WS('-,xxx,-',id,subject,headline,description) AS data,
                    'news' AS modul,
                    id AS id
   FROM pss_news
   WHERE subject LIKE '%$search%' OR
         headline LIKE '%$search%' OR
         description LIKE '%$search%'
   )

   UNION

   (
   SELECT CONCAT_WS('-,xxx,-',id,subject,headline,description) AS data,
                    'tips' AS modul,
                    id AS id
   FROM pss_tips
   WHERE subject LIKE '%$search%' OR
         headline LIKE '%$search%' OR
         description LIKE '%$search%'
   )
   ";

   # Paging Start
   $perpage = 15;
   $SQLpage = $SQLsearch;
   $urlpage = pss_url_type($pss_url_type,4,"search",NULL,NULL,NULL,$_GET["search"]);
   $awal = pss_paging(1,$SQLpage,$perpage);
   $banyak = $perpage;
   # Paging End

   $SQL = $SQLsearch." ORDER BY id ASC LIMIT $awal,$banyak";
   $queryq = mysql_query($SQL);
   $query = mysql_fetch_array($queryq);
   $SQLx = $SQLsearch."";
   $queryqx = mysql_query($SQLx);
   $queryx = mysql_num_rows($queryqx);
   $result = "Found <b>$queryx</b> result(s) for <i><b>$search</b></i>";
   if($query){
      $HTML .= "<table width=\"100%\" cellpadding=\"5\" cellspacing=\"0\">";
   do{
      $data = explode("-,xxx,-",$query[data]);
      $judul = preg_replace("( |_|%|\?|\/|\\\$|&|#|\^|<|>|\(|\)|\*|!|@|;|,|\.|:|\[|\]|{|})","-",$data[1]);
      $id = $data[0];
      $name = $data[1];
      $head = $data[2]?"<font class=\"head_x\">$data[2]</font><br>":"";
      $modul = $query[modul];
      $moduls = $modul=="product"?
                $pss_url_type==1?"stuff/view":"stuff&do=view":
                $modul;

      $HTML .= "<tr>";
      $HTML .= "<td colspan=\"2\" width=\"100%\" valign=\"top\" class=\"border_2b padding_5\">
                <a href=\"http://".$_SERVER["SERVER_NAME"]."".pss_url_type($pss_url_type,3,$moduls,$id,$judul)."\" class=\"a3\"><b>$name</b></a> |
                <font class=\"head_2\"><i>Filled under <a href=\"".pss_url_type($pss_url_type,1,$modul)."\" class=\"a2 head_2\">".ucwords($modul)."</a></i></font><br>
                $head
                <font class=\"head_2 font_6\"><b>http://".$_SERVER["SERVER_NAME"]."".pss_url_type($pss_url_type,3,$moduls,$id,$judul)."</b></font></td>";
      $HTML .= "</tr>";
   }while($query = mysql_fetch_array($queryq));
      $HTML .= "<tr><td align=\"center\" colspan=\"10\"><br>";
      $HTML .= "<font class=\"paging\">";
      $HTML .= pss_paging(4,$SQLpage,$perpage)."|".pss_paging($pss_paging_type,$SQLpage,$perpage,$urlpage)."|".pss_paging(3,$SQLpage,$perpage);
      $HTML .= "</font>";
      $HTML .= "</td></tr>";
      $HTML .= "</table>";
      $HTML .= "<script>document.getElementById('result').innerHTML = '$result';</script>";
   }else{
      $HTML .= "<center><br><br><b>Not Available Today</b></center>";
   }
   return $HTML;
}
?>
<table width="100%" cellpadding="5" cellspacing="0">
  <tr>
    <td class="label_block_2 border_3b">SEARCH</td>
    <td class="border_3b" align="right"><div class="head_2" id="result">&nbsp;</div></td>
  </tr>
  <tr>
    <td colspan="2">
    <?=atheen_search();?>
    </td>
  </tr>
</table>
