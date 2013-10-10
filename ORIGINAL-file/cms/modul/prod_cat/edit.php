<?
if($_POST["submit"]=="Update"){
   $format = $_POST["format"];
   $cat = pss_fuck_quote(pss_noHTML($_POST["cat"]));
   $name = pss_fuck_quote(pss_noHTML($_POST["name"]));
   $headline = pss_fuck_quote(pss_noHTML($_POST["headline"]));
   $position = pss_fuck_quote(pss_noHTML($_POST["position"]));
   $home = isset($_POST['home']) ? "checked='checked'" : "";
   $color = pss_fuck_quote(pss_noHTML($_POST["color"]));
   $meta_tag = pss_fuck_quote(pss_noHTML($_POST["meta_tag"]));
   $meta_key = pss_fuck_quote(pss_noHTML($_POST["meta_key"]));
   $meta_desc = pss_fuck_quote(pss_noHTML($_POST["meta_desc"]));
   $type = $format=="1"?"Category":"Download File";
   $SQL = "SELECT * FROM pss_prod_cat WHERE id = '".pss_noHTML($_GET["id"])."'";
   $queryq = mysql_query($SQL);
   $query = mysql_fetch_array($queryq);
   $level = $query['level'];
}else{
   $SQL = "SELECT * FROM pss_prod_cat WHERE id = '".pss_noHTML($_GET["id"])."'";
   $queryq = mysql_query($SQL);
   $query = mysql_fetch_array($queryq);
   $format = $query[id_parent]==1?"1":"2";
   $cat = $query['id_parent'];
   $level = $query['level'];
   $name = $query["name"];
   $headline = $query[headline];
   $position = $query[pos];
   $type = $format=="1"?"Category":"Download File";
   $home = $query['home'] == '1' ? "checked='checked'" : "";
   $color = $query['color'];
   $meta_tag = $query['meta_tag'];
   $meta_key = $query['meta_key'];
   $meta_desc = $query['meta_desc'];
}
function block_prod_cat_list($id,$idp,$levels){
   global $pss_url_type;
   $SQL = "SELECT * FROM pss_prod_cat WHERE id_parent = '$id' and level < $levels ORDER BY name ASC";
   $queryq = mysql_query($SQL);
   $query = mysql_fetch_array($queryq);
   if($query){
   do{
      $level = str_repeat("&nbsp;",($query[level]-1)*3);
      $selected = $query['id'] == $idp ? "selected" : "";
      $HTML .= "<option value=\"".$query['id']."\" ".$selected.">$level".$query['name']."</option>";
      $HTML .= block_prod_cat_list($query[id],$idp,$levels);
   }while($query = mysql_fetch_array($queryq));
      return $HTML;
   }
}
//echo $cat;
?>

<table border="0" cellpadding="5" cellspacing="0" width="100%" class="tbl_1 tbl_4">
  <tr>
    <td class="tbl_2 tbl_3" colspan="3"><b>UPDATE</b></td>
  </tr>
</table>

<table border="0" cellpadding="5" cellspacing="0" width="100%" class="tbl_4">
  <form method="POST" action="" enctype="multipart/form-data">
  <input type="text" name="format" value="1" style="display:none;">
  <tr>
    <td valign="top" class="tbl_2 tbl_3 padding_1" align="right">*Subject</td>
    <td valign="top" class="tbl_2 tbl_3 padding_1" align="center">:</td>
    <td valign="top" class="tbl_2 tbl_3 padding_1" align="left">
    <input type="text" name="name" size="40" maxlength="255" value="<?=$name?>">
        <br><font class="form_foot"><b>Note:</b> <i>The name of the category</i></font></td>
  </tr>
  <tr>
    <td valign="top" class="tbl_2 tbl_3 padding_1" align="right">*Category</td>
    <td valign="top" class="tbl_2 tbl_3 padding_1" align="center">:</td>
    <td valign="top" class="tbl_2 tbl_3 padding_1" align="left">
    <select name="parent">
    <option value='1'>Root</option>
    <?=block_prod_cat_list(1,$cat,$level)?>
    </select>
    </td>
  </tr>
  <tr>
    <td valign="top" class="tbl_2 tbl_3 padding_1" align="right">Headline</td>
    <td valign="top" class="tbl_2 tbl_3 padding_1" align="center">:</td>
    <td valign="top" class="tbl_2 tbl_3 padding_1" align="left">
    <textarea name="headline" cols="50" rows="5"><?=$headline?></textarea></td>
  </tr>
  <tr>
    <td valign="top" class="tbl_2 tbl_3 padding_1" align="right">Picture</td>
    <td valign="top" class="tbl_2 tbl_3 padding_1" align="center">:</td>
    <td valign="top" class="tbl_2 tbl_3 padding_1" align="left">
    <input type="file" name="thefile">
        <br><font class="form_foot"><b>Note:</b> <i>If you upload new picture, the old one will be deleted</i></font></td>
  </tr>
  <tr>
    <td valign="top" class="tbl_2 tbl_3 padding_1" align="right">Position</td>
    <td valign="top" class="tbl_2 tbl_3 padding_1" align="center">:</td>
    <td valign="top" class="tbl_2 tbl_3 padding_1" align="left">
    <input type="text" name="position" size="11" maxlength="11" value="<?=$position?>">
        <br><font class="form_foot"><b>Note:</b> <i>Queue number of its vertical position</i></font></td>
  </tr>
  <tr>
    <td valign="top" class="tbl_2 tbl_3 padding_1" align="right">Home</td>
    <td valign="top" class="tbl_2 tbl_3 padding_1" align="center">:</td>
    <td valign="top" class="tbl_2 tbl_3 padding_1" align="left">
    <input type="checkbox" name="home" <?=$home?>></td>
  </tr>
  <tr>
    <td valign="top" class="tbl_2 tbl_3 padding_1" align="right">Color</td>
    <td valign="top" class="tbl_2 tbl_3 padding_1" align="center">:</td>
    <td valign="top" class="tbl_2 tbl_3 padding_1" align="left">
    <input type="text" name="color" size="11" maxlength="7" value="<?=$color?>" id="colorbox">
        <br><font class="form_foot" style="display:block;clear:both;"><b>Note:</b> <i>The color of the box containing the category</i></font></td>
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