<?
if($_POST["submit"]=="Update"){
   $name = pss_fuck_quote(pss_noHTML($_POST["name"]));
   $meta_tag = pss_fuck_quote(pss_noHTML($_POST["meta_tag"]));
   $meta_key = pss_fuck_quote(pss_noHTML($_POST["meta_key"]));
   $meta_desc = pss_fuck_quote(pss_noHTML($_POST["meta_desc"]));
}else{
   $SQL = "SELECT * FROM pss_prod_brand WHERE id = '".pss_noHTML($_GET["id"])."'";
   $queryq = mysql_query($SQL);
   $query = mysql_fetch_array($queryq);
   $name = $query["name"];
   $meta_tag = $query["meta_tag"];
   $meta_key = $query["meta_key"];
   $meta_desc = $query["meta_desc"];
}
?>

<table border="0" cellpadding="5" cellspacing="0" width="100%" class="tbl_1 tbl_4">
  <form method="POST" action="" enctype="multipart/form-data">
  <tr>
    <td class="tbl_2 tbl_3" colspan="3"><b>UPDATE</b></td>
  </tr>
  <tr>
    <td valign="top" class="tbl_2 tbl_3 padding_1" align="right">*Subject</td>
    <td valign="top" class="tbl_2 tbl_3 padding_1" align="center">:</td>
    <td valign="top" class="tbl_2 tbl_3 padding_1" align="left">
    <input type="text" name="name" size="40" maxlength="255" value="<?=$name?>">
	<br><font class="form_foot"><b>Note:</b> <i>The name of the brand</i></font></td>
  </tr>
  <tr>
    <td valign="top" class="tbl_2 tbl_3 padding_1" align="right">Picture</td>
    <td valign="top" class="tbl_2 tbl_3 padding_1" align="center">:</td>
    <td valign="top" class="tbl_2 tbl_3 padding_1" align="left">
    <input type="file" name="thefile" size="30">
    <br><font class="form_foot"><b>Note:</b> <i>If you upload new picture, the old one will be deleted.</i></font></td>
  </tr>
  <tr>
    <td valign="top" class="tbl_2 tbl_3 padding_1" align="right">Meta Tag</td>
    <td valign="top" class="tbl_2 tbl_3 padding_1" align="center">:</td>
    <td valign="top" class="tbl_2 tbl_3 padding_1" align="left">
    <input type="text" name="meta_tag" size="40" maxlength="255" value="<?=$meta_tag?>">
    <br><font class="form_foot"><b>Note:</b> <i>Separated by comma (,).</i></font></td>
  </tr>
  <tr>
    <td valign="top" class="tbl_2 tbl_3 padding_1" align="right">Meta Key</td>
    <td valign="top" class="tbl_2 tbl_3 padding_1" align="center">:</td>
    <td valign="top" class="tbl_2 tbl_3 padding_1" align="left">
    <input type="text" name="meta_key" size="40" maxlength="255" value="<?=$meta_key?>">
    <br><font class="form_foot"><b>Note:</b> <i>Separated by comma (,).</i></font></td>
  </tr>
  <tr>
    <td valign="top" class="tbl_2 tbl_3 padding_1" align="right">Meta Desc</td>
    <td valign="top" class="tbl_2 tbl_3 padding_1" align="center">:</td>
    <td valign="top" class="tbl_2 tbl_3 padding_1" align="left">
    <input type="text" name="meta_desc" size="40" maxlength="255" value="<?=$meta_desc?>"></td>
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