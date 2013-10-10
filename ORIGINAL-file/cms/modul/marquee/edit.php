<?
if($_POST["submit"]=="Update"){
   $desc = pss_fuck_quote(pss_noHTML($_POST["desc"]));
   $status = isset($_POST['status']) ? "checked=\"checked\"" : "";
}else{
   $SQL = "SELECT * FROM pss_marquee WHERE id = '".pss_noHTML($_GET["id"])."'";
   $queryq = mysql_query($SQL);
   $query = mysql_fetch_array($queryq);
   $desc = $query[description];
   $status = $query[status] == '1' ? "checked=\"checked\"" : "";
}
?>

<table border="0" cellpadding="5" cellspacing="0" width="100%" class="tbl_1 tbl_4">
  <form method="POST" action="" enctype="multipart/form-data">
  <tr>
    <td class="tbl_2 tbl_3" colspan="3"><b>UPDATE</b></td>
  </tr>
  <tr>
    <td valign="top" class="tbl_2 tbl_3 padding_1" align="right">*Description</td>
    <td valign="top" class="tbl_2 tbl_3 padding_1" align="center">:</td>
    <td valign="top" class="tbl_2 tbl_3 padding_1" align="left">
    <input type="text" name="desc" size="40" maxlength="255" value="<?=$desc?>">
    <br><font class="form_foot"><b>Note:</b> <i>Text to be displayed as a ticker</i></font></td>
  </tr>
  <tr>
    <td valign="top" class="tbl_2 tbl_3 padding_1" align="right">Show</td>
    <td valign="top" class="tbl_2 tbl_3 padding_1" align="center">:</td>
    <td valign="top" class="tbl_2 tbl_3 padding_1" align="left">
       <input type="checkbox" name="status" value="1" <?=$status?>>
    </td>
  </tr>
  <tr>
    <td width="20%" valign="top" class="tbl_2 tbl_3 padding_1" align="right">&nbsp;</td>
    <td width="5%" valign="top" class="tbl_2 tbl_3 padding_1" align="center">&nbsp;</td>
    <td width="75%" valign="top" class="tbl_2 tbl_3 padding_1" align="left">
    <input type="submit" name="submit" value="Cancel" class="form_4b">
    <input type="submit" name="submit" value="Update" class="form_4c"></td>
  </tr>
  </form>
</table>