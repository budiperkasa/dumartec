<?
function pss_list(){
   global $pss_admin_type;
   # Search Start
   if($_SESSION["reg_search_search"]){
      $search_sql = pss_search_do();
   }
   # Search Stop

   # Paging Start
   $perpage = 25;
   $SQLpage = "SELECT * FROM pss_admin $search_sql";
   $urlpage = "?".pss_url_def()."=".$_GET[pss_url_def()];
   $awal = pss_paging(1,$SQLpage,$perpage);
   $banyak = $perpage;
   # Paging End

   $SQL = "SELECT * FROM pss_admin $search_sql
           ORDER BY tipe ASC, user ASC
           LIMIT $awal,$banyak";
   $queryq = mysql_query($SQL);
   $query = mysql_fetch_array($queryq);
   if($query){
   do{
      $tr_select = $query[id]==$_GET["id"]?"tr_1":"";
      $id = $query[id];
      $type = $query[tipe];
      $HTML .= "<tr class=\"$tr_select\">";
      $HTML .= "<td class=\"tbl_2 tbl_3\" valign=\"top\" align=\"center\"><a href=\"?".pss_url_def()."=".$_GET[pss_url_def()]."&do=del&id=$id\">".pss_icon_type(2)."</a></td>";
      $HTML .= "<td class=\"tbl_2 tbl_3\" valign=\"top\" align=\"center\"><a href=\"?".pss_url_def()."=".$_GET[pss_url_def()]."&do=edit&id=$id\">".pss_icon_type(1)."</a></td>";
      $HTML .= "<td class=\"tbl_2 tbl_3\" valign=\"top\" align=\"left\">$query[user]</td>";
      $HTML .= "<td class=\"tbl_2 tbl_3\" valign=\"top\" align=\"left\">$query[pass]</td>";
      $HTML .= "<td class=\"tbl_2 tbl_3\" valign=\"top\" align=\"left\">$pss_admin_type[$type]</td>";
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
    <td class="tbl_2 tbl_3" width="05%" align="center" nowrap>&nbsp;</td>
    <td class="tbl_2 tbl_3" width="05%" align="center" nowrap>&nbsp;</td>
    <td class="tbl_2 tbl_3" width="35%" align="center" nowrap><b>USERNAME</b></td>
    <td class="tbl_2 tbl_3" width="35%" align="center" nowrap><b>PASSWORD</b></td>
    <td class="tbl_2 tbl_3" width="20%" align="center" nowrap><b>TYPE</b></td>
  </tr>
<?=pss_list()?>
</table>
