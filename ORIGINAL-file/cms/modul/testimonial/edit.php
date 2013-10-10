<?
if($_POST["submit"]=="Update"){
   $name = pss_fuck_quote(pss_noHTML($_POST["name"]));
   $email = pss_fuck_quote(pss_noHTML($_POST["email"]));
   $desc = pss_fuck_quote(pss_noHTML($_POST["desc"]));
   $status = isset($_POST["status"]) ? "checked=\"checked\"" : "";
   $code = pss_fuck_quote(pss_noHTML($_POST["code"]));
}else{
   $SQL = "SELECT * FROM pss_testimonial WHERE id = '".pss_noHTML($_GET["id"])."'";
   $queryq = mysql_query($SQL);
   $query = mysql_fetch_array($queryq);
   $name = $query["name"];
   $email = $query["email"];
   $desc = $query["description"];
   $status = $query["status"] == '3' ? "checked=\"checked\"" : "";
   $code = $query["code"];
}
?>

<table border="0" cellpadding="5" cellspacing="0" width="100%" class="tbl_1 tbl_4">
  <form method="POST" action="" enctype="multipart/form-data">
  <tr>
    <td class="tbl_2 tbl_3" colspan="3"><b>UPDATE</b></td>
  </tr>
  <tr>
    <td valign="top" class="tbl_2 tbl_3 padding_1" align="right">*Name</td>
    <td valign="top" class="tbl_2 tbl_3 padding_1" align="center">:</td>
    <td valign="top" class="tbl_2 tbl_3 padding_1" align="left">
    <input type="text" name="name" size="40" maxlength="255" value="<?=$name?>" readonly="readonly"></td>
  </tr>
  <tr>
    <td valign="top" class="tbl_2 tbl_3 padding_1" align="right">*Email</td>
    <td valign="top" class="tbl_2 tbl_3 padding_1" align="center">:</td>
    <td valign="top" class="tbl_2 tbl_3 padding_1" align="left">
    <input type="text" name="email" size="40" maxlength="255" value="<?=$email?>" readonly="readonly"></td>
  </tr>
  <tr>
    <td valign="top" class="tbl_2 tbl_3 padding_1" align="right">*Description</td>
    <td valign="top" class="tbl_2 tbl_3 padding_1" align="center">:</td>
    <td valign="top" class="tbl_2 tbl_3 padding_1" align="left">
    <textarea name="desc" cols="50" rows="23"><?=$desc?></textarea>
	<br><font class="form_foot"><b>Note:</b> <i>The testimonial, editable for grammar mistakes</i></font></td>
  </tr>
  <tr>
    <td valign="top" class="tbl_2 tbl_3 padding_1" align="right">Show</td>
    <td valign="top" class="tbl_2 tbl_3 padding_1" align="center">:</td>
    <td valign="top" class="tbl_2 tbl_3 padding_1" align="left">
    <input type="checkbox" name="status" value="3" <?=$status?>></td>
  </tr>
  <tr>
    <td valign="top" class="tbl_2 tbl_3 padding_1" align="right">Code</td>
    <td valign="top" class="tbl_2 tbl_3 padding_1" align="center">:</td>
    <td valign="top" class="tbl_2 tbl_3 padding_1" align="left">
    <input type="text" name="code" size="6" maxlength="6" value="<?=$code?>" readonly="readonly"></td>
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