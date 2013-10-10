<?
if($_POST["submit"]=="Update"){
   $subject = pss_fuck_quote(pss_noHTML($_POST["subject"]));
   $desc = pss_fuck_quote(pss_noHTML($_POST["desc"]));
   $pos = pss_fuck_quote(pss_noHTML($_POST["pos"]));
}else{
   $SQL = "SELECT * FROM pss_faq WHERE id = '".pss_noHTML($_GET["id"])."'";
   $queryq = mysql_query($SQL);
   $query = mysql_fetch_array($queryq);
   $subject = $query["subject"];
   $pos = $query["pos"];
   $desc = $query["description"];
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
    <input type="text" name="subject" size="40" maxlength="255" value="<?=$subject?>">
	<br><font class="form_foot"><b>Note:</b> <i>The title of the FAQ</i></font></td>
  </tr>
  <tr>
    <td valign="top" class="tbl_2 tbl_3 padding_1" align="right">Description</td>
    <td valign="top" class="tbl_2 tbl_3 padding_1" align="center">:</td>
    <td valign="top" class="tbl_2 tbl_3 padding_1" align="left">
    <textarea name="desc" cols="50" rows="23"><?=$desc?></textarea></td>
  </tr>
  <tr>
    <td valign="top" class="tbl_2 tbl_3 padding_1" align="right">Position</td>
    <td valign="top" class="tbl_2 tbl_3 padding_1" align="center">:</td>
    <td valign="top" class="tbl_2 tbl_3 padding_1" align="left">
    <input type="text" name="position" size="11" maxlength="11" value="<?=$pos?>">
	<br><font class="form_foot"><b>Note:</b> <i>Queue number of its vertical position</i></font></td>
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