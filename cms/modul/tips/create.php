<?
if($_POST["submit"]=="Create"){
   $subject = pss_fuck_quote(pss_noHTML($_POST["subject"]));
   $headline = pss_fuck_quote(pss_noHTML($_POST["headline"]));
   $desc = pss_fuck_quote(pss_noHTML($_POST["desc"]));
   $meta_tag = pss_fuck_quote(pss_noHTML($_POST["meta_tag"]));
   $meta_key = pss_fuck_quote(pss_noHTML($_POST["meta_key"]));
   $meta_desc = pss_fuck_quote(pss_noHTML($_POST["meta_desc"]));
}
?>

<table border="0" cellpadding="5" cellspacing="0" width="100%" class="tbl_1 tbl_4">
  <form method="POST" action="" enctype="multipart/form-data">
  <tr>
    <td class="tbl_2 tbl_3" colspan="3"><b>CREATE</b></td>
  </tr>
  <tr>
    <td valign="top" class="tbl_2 tbl_3 padding_1" align="right">*Subject</td>
    <td valign="top" class="tbl_2 tbl_3 padding_1" align="center">:</td>
    <td valign="top" class="tbl_2 tbl_3 padding_1" align="left">
    <input type="text" name="subject" size="40" maxlength="255" value="<?=$subject?>">
	<br><font class="form_foot"><b>Note:</b> <i>The title of the tips</i></font></td>
  </tr>
  <tr>
    <td valign="top" class="tbl_2 tbl_3 padding_1" align="right">Headline</td>
    <td valign="top" class="tbl_2 tbl_3 padding_1" align="center">:</td>
    <td valign="top" class="tbl_2 tbl_3 padding_1" align="left">
    <textarea name="headline" cols="50" rows="5"><?=$headline?></textarea></td>
  </tr>
  <tr>
    <td valign="top" class="tbl_2 tbl_3 padding_1" align="right">Description</td>
    <td valign="top" class="tbl_2 tbl_3 padding_1" align="center">:</td>
    <td valign="top" class="tbl_2 tbl_3 padding_1" align="left">
    <textarea name="desc" cols="50" rows="23"><?=$desc?></textarea></td>
  </tr>
  <tr>
    <td valign="top" class="tbl_2 tbl_3 padding_1" align="right">Picture</td>
    <td valign="top" class="tbl_2 tbl_3 padding_1" align="center">:</td>
    <td valign="top" class="tbl_2 tbl_3 padding_1" align="left">
    <input type="file" name="thefile" size="30"></td>
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
    <input type="submit" name="submit" value="Create" class="form_4a"></td>
  </tr>
  </form>
</table>