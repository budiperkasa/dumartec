<?
function pss_list(){
   # Search Start
   if($_SESSION["reg_search_search"]){
      $search_sql = pss_search_do();
   }
   # Search Stop

   # Paging Start
   $perpage = 20;
   $SQLpage = "SELECT * FROM pss_marquee $search_sql";
   $urlpage = "?".pss_url_def()."=".$_GET[pss_url_def()];
   $awal = pss_paging(1,$SQLpage,$perpage);
   $banyak = $perpage;
   # Paging End

   $SQL = "SELECT * FROM pss_marquee $search_sql
           ORDER BY id DESC
           LIMIT $awal,$banyak";

   $queryq = mysql_query($SQL);
   $query = mysql_fetch_array($queryq);
   if($query){
   do{
      $tr_select = $query[id]==$_GET["id"]?"tr_1":"";
      $p = $_GET["p"];
      $id = $query[id];
      $tanggal = substr($id,0,4)."/".substr($id,4,2)."/".substr($id,6,2);
      $subject = $query[description];
      $HTML .= "<tr class=\"$tr_select\">";
      $HTML .= "<td class=\"tbl_2 tbl_3\" valign=\"top\" align=\"center\"><input type=\"checkbox\" id=\"del_list\" name=\"box_del[]\" value=\"$id\" class=\"checkbox\"></td>";
      $HTML .= "<td class=\"tbl_2 tbl_3\" valign=\"top\" align=\"center\"><a href=\"?".pss_url_def()."=".$_GET[pss_url_def()]."&do=del&p=".$_GET["p"]."&id=$id\">".pss_icon_type(2)."</a></td>";
      $HTML .= "<td class=\"tbl_2 tbl_3\" valign=\"top\" align=\"center\"><a href=\"?".pss_url_def()."=".$_GET[pss_url_def()]."&do=edit&p=".$_GET["p"]."&id=$id\">".pss_icon_type(1)."</a></td>";
      $HTML .= "<td class=\"tbl_2 tbl_3\" valign=\"top\" align=\"left\">$tanggal</td>";
	  $HTML .= "<td class=\"tbl_2 tbl_3\" valign=\"top\" align=\"left\">$subject</td>";
      $HTML .= "</tr>";
   }while($query = mysql_fetch_array($queryq));
      $HTML .= "<tr>";
      $HTML .= "<td colspan=\"10\" class=\"tbl_2 tbl_3\" align=\"center\">
                ".pss_paging(4,$SQLpage,$perpage)."|".pss_paging(2,$SQLpage,$perpage,$urlpage)."|".pss_paging(3,$SQLpage,$perpage)."
                </td>";
      $HTML .= "</tr>";
   }
   return $HTML;
}
echo pss_SettingTinyMCE();
?>

<table cellpadding="5" cellspacing="0" width="100%" class="tbl_1 tbl_4">
  <tr>
    <td class="tbl_2 tbl_3" width="15%" align="center" colspan="3" nowrap>
    <input type="button" value="Delete!" onclick="pss_deleteAll('<?$_SERVER["REQUEST_URI"]?>');" class="form_4d"></td>
    <td class="tbl_2 tbl_3" width="15%" align="center" nowrap><b>DATE</b></td>
	<td class="tbl_2 tbl_3" width="75%" align="center" nowrap><b>SUBJECT</b></td>
  </tr>
  <form id="del_form" name="del_form" method="POST" action="">
  <input type="text" name="submitx" value="del_all" style="display: none;">
<?=pss_list()?>
  </form>
</table>
