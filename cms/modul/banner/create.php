<?
if($_POST["submit"]=="Create"){
   $url = pss_fuck_quote(pss_noHTML($_POST["url"]));
   $height = pss_fuck_quote(pss_noHTML($_POST["height"]));
   $pos = pss_fuck_quote(pss_noHTML($_POST["pos"]));
   $alignment[0] = $_POST["alignment"] == "l" ? "selected" : "";
   $alignment[1] = $_POST["alignment"] == "c" ? "selected" : "";
   $alignment[2] = $_POST["alignment"] == "r" ? "selected" : "";
   $alignment[3] = $_POST["alignment"] == "t" ? "selected" : "";
}
?>

<table border="0" cellpadding="5" cellspacing="0" width="100%" class="tbl_1 tbl_4">
  <form method="POST" action="" enctype="multipart/form-data">
  <tr>
    <td class="tbl_2 tbl_3" colspan="3"><b>CREATE</b></td>
  </tr>
  <tr>
    <td valign="top" class="tbl_2 tbl_3 padding_1" align="right">*Picture</td>
    <td valign="top" class="tbl_2 tbl_3 padding_1" align="center">:</td>
    <td valign="top" class="tbl_2 tbl_3 padding_1" align="left">
    <input type="file" name="thefile"></td>
  </tr>
  <tr>
    <td valign="top" class="tbl_2 tbl_3 padding_1" align="right">URL</td>
    <td valign="top" class="tbl_2 tbl_3 padding_1" align="center">:</td>
    <td valign="top" class="tbl_2 tbl_3 padding_1" align="left">
    <input type="text" name="url" size="40" maxlength="255" value="<?=$url?>"></td>
  </tr>
  <tr>
    <td valign="top" class="tbl_2 tbl_3 padding_1" align="right">height</td>
    <td valign="top" class="tbl_2 tbl_3 padding_1" align="center">:</td>
    <td valign="top" class="tbl_2 tbl_3 padding_1" align="left">
    <input type="text" name="height" size="7" maxlength="11" value="<?=$height?>"></td>
  </tr>
  <tr>
    <td valign="top" class="tbl_2 tbl_3 padding_1" align="right">Position</td>
    <td valign="top" class="tbl_2 tbl_3 padding_1" align="center">:</td>
    <td valign="top" class="tbl_2 tbl_3 padding_1" align="left">
    <input type="text" name="pos" size="7" maxlength="11" value="<?=$pos?>">
        <br><font class="form_foot"><b>Note:</b> <i>Queue number of its vertical position</i></font></td>
  </tr>
  <tr>
    <td valign="top" class="tbl_2 tbl_3 padding_1" align="right">Alignment</td>
    <td valign="top" class="tbl_2 tbl_3 padding_1" align="center">:</td>
    <td valign="top" class="tbl_2 tbl_3 padding_1" align="left">
        <select name="alignment">
           <option value="l" <?=$alignment[0]?>>Left</option>
           <option value="t" <?=$alignment[3]?>>Center Top</option>
           <option value="c" <?=$alignment[1]?>>Center Bottom</option>
           <option value="r" <?=$alignment[2]?>>Right</option>
        </select>
        <br><font class="form_foot"><b>Note:</b> <i>Width of position are:<br>
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; - Left = 200px<br>
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; - Center = 440px (Only appeared in the front page)<br>
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; - Right = 200px<br></i></font>
        </td>
  </tr>
  <tr>
    <td width="20%" valign="top" class="tbl_2 tbl_3 padding_1" align="right">&nbsp;</td>
    <td width="5%" valign="top" class="tbl_2 tbl_3 padding_1" align="center">&nbsp;</td>
    <td width="75%" valign="top" class="tbl_2 tbl_3 padding_1" align="left">
    <input type="submit" name="submit" value="Create" class="form_4a"></td>
  </tr>
  </form>
</table>