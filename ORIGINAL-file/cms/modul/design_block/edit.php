<?
if($_POST["submit"]=="Update"){
	$page = pss_fuck_quote(pss_noHTML($_POST["page"]));
	$block = pss_fuck_quote(pss_noHTML($_POST["block"]));
	$pos = pss_fuck_quote(pss_noHTML($_POST["pos"]));
	$aligment[0] = pss_fuck_quote(pss_noHTML($_POST["alignment"])) == 'l' ? "selected" : "";
	$aligment[1] = pss_fuck_quote(pss_noHTML($_POST["alignment"])) == 'r' ? "selected" : "";
	}
else {
	$SQL = "SELECT * FROM pss_design_block WHERE id = '".pss_noHTML($_GET["id"])."'";
	$queryq = mysql_query($SQL);
	$query = mysql_fetch_array($queryq);
	$page = $query["page"];
	$block = $query["name"];
	$pos = $query["pos"];
	$alignment[0] = $query["lr"] == 'l' ? "selected" : "";
	$alignment[1] = $query["lr"] == 'r' ? "selected" : "";
	}
?>

<table border="0" cellpadding="5" cellspacing="0" width="100%" class="tbl_1 tbl_4">
  <form method="POST" action="" enctype="multipart/form-data">
  <tr>
    <td class="tbl_2 tbl_3" colspan="3"><b>UPDATE</b></td>
  </tr>
  <tr>
    <td valign="top" class="tbl_2 tbl_3 padding_1" align="right">Page</td>
    <td valign="top" class="tbl_2 tbl_3 padding_1" align="center">:</td>
    <td valign="top" class="tbl_2 tbl_3 padding_1" align="left">
    <select name="page">
	<?=pss_page($pss_page,$page)?>
	</select>
	<br><font class="form_foot"><b>Note:</b> <i>&nbsp;</i></font></td>
  </tr>
  <tr>
    <td valign="top" class="tbl_2 tbl_3 padding_1" align="right">Block</td>
    <td valign="top" class="tbl_2 tbl_3 padding_1" align="center">:</td>
    <td valign="top" class="tbl_2 tbl_3 padding_1" align="left">
    <select name="block">
	<?=pss_design_center($pss_design_block,$block)?>
	</select>
	<br><font class="form_foot"><b>Note:</b> <i>&nbsp;</i></font></td>
  </tr>
  <tr>
    <td valign="top" class="tbl_2 tbl_3 padding_1" align="right">Alignment</td>
    <td valign="top" class="tbl_2 tbl_3 padding_1" align="center">:</td>
    <td valign="top" class="tbl_2 tbl_3 padding_1" align="left">
    <select name="alignment">
	   <option value="l" <?=$alignment[0]?>>Left</option>
	   <option value="r" <?=$alignment[1]?>>Right</option>
	</select></td>
  </tr>
  <tr>
    <td valign="top" class="tbl_2 tbl_3 padding_1" align="right">Position</td>
    <td valign="top" class="tbl_2 tbl_3 padding_1" align="center">:</td>
    <td valign="top" class="tbl_2 tbl_3 padding_1" align="left">
    <input type="text" name="pos" size="7" value="<?=$pos?>">
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