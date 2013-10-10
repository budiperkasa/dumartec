<?

$sql = mysql_query("select * from pss_how_to");
$q = mysql_fetch_array($sql);

echo pss_SettingTinyMCE();
?>

<table cellpadding="5" cellspacing="0" width="100%" class="tbl_1 tbl_4">
  <tr>
    <td class="tbl_2 tbl_3"><?=$q['description']?>&nbsp;</td>
  </tr>
</table>
