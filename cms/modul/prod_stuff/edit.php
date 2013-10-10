<?
if($_POST["submit"]=="Update"){
        $subject = pss_fuck_quote(pss_noHTML($_POST["subject"]));
    $headline = pss_fuck_quote(pss_noHTML($_POST["headline"]));
    $desc = pss_fuck_quote(pss_noHTML($_POST["desc"]));
    $meta_tag = pss_fuck_quote(pss_noHTML($_POST["meta_tag"]));
    $meta_key = pss_fuck_quote(pss_noHTML($_POST["meta_key"]));
    $meta_desc = pss_fuck_quote(pss_noHTML($_POST["meta_desc"]));

    $desc_feature = pss_fuck_quote(pss_noHTML($_POST["desc_feature"]));
    $desc_spec = pss_fuck_quote(pss_noHTML($_POST["desc_spec"]));
    $desc_box = pss_fuck_quote(pss_noHTML($_POST["desc_box"]));
    $price_1 = pss_fuck_quote(pss_noHTML($_POST["price_1"]));
        $price_2 = pss_fuck_quote(pss_noHTML($_POST["price_2"]));
        $discount = pss_fuck_quote(pss_noHTML($_POST["discount"]));
        $best_type = isset($_POST["best_type"]) ? "checked='checked'" : "";
    $new_type = isset($_POST["new_type"]) ? "checked='checked'" : "";

    $folder = $_POST['folder'];
    $brand = $_POST['brand'];
        }
else {
        $SQL = "SELECT * FROM pss_prod_stuff WHERE id = '".$_GET['id']."'";
        $queryq = mysql_query($SQL);
        $query = mysql_fetch_array($queryq);
        $subject = $query["name"];
        $headline = $query["headline"];
        $desc = $query["description"];
        $meta_tag = $query["meta_tag"];
        $meta_key = $query["meta_key"];
        $meta_desc = $query["meta_desc"];
        $desc_feature = $query["desc_feature"];
        $desc_spec = $query["desc_spec"];
        $desc_box = $query["desc_box"];
        $price_1 = $query["price_1"];
        $price_2 = $query["price_2"];
        $discount = $query["discount"];
        $best_type = $query["best_type"] == '1' ? "checked='checked'" : "";
        $new_type = $query["new_type"] == '1' ? "checked='checked'" : "";
        $folder = $query["id_folder"];
        $brand = $query["id_brand"];
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
        <br><font class="form_foot"><b>Note:</b> <i>The name of the product</i></font></td>
  </tr>
  <tr>
    <td valign="top" class="tbl_2 tbl_3 padding_1" align="right">*Folder</td>
    <td valign="top" class="tbl_2 tbl_3 padding_1" align="center">:</td>
    <td valign="top" class="tbl_2 tbl_3 padding_1" align="left">
    <select name="folder">            
           <?
           $SQL = "select id,name from pss_prod_cat where id_parent = '1' order by name asc";
           $queryq = mysql_query($SQL);
           $query = mysql_fetch_array($queryq);
           if ($query) {
                do {
                        $selected = $query['id'] == $folder ? "selected='selected'" : "";
                        echo "<option value='".$query['id']."' ".$selected.">".$query['name']."</option>";
                        echo butamt_block_prod_cat_list($query['id'],$folder);
                        } while ($query = mysql_fetch_array($queryq));
                }
           ?>
        </select>
        <br><font class="form_foot"><b>Note:</b> <i>Folder that this product belongs to</i></font>
        </td>
  </tr>
  <tr>
    <td valign="top" class="tbl_2 tbl_3 padding_1" align="right">*Brand</td>
    <td valign="top" class="tbl_2 tbl_3 padding_1" align="center">:</td>
    <td valign="top" class="tbl_2 tbl_3 padding_1" align="left">
    <select name="brand">
           <option value=""></option>
           <?
           $SQL = "select id,name from pss_prod_brand order by name asc";
           $queryq = mysql_query($SQL);
           $query = mysql_fetch_array($queryq);
           if ($query) {
                do {
                        $selected = $query['id'] == $brand ? "selected='selected'" : "";
                        echo "<option value='".$query['id']."' ".$selected.">".$query['name']."</option>";
                        } while ($query = mysql_fetch_array($queryq));
                }
           ?>
        </select>
        <br><font class="form_foot"><b>Note:</b> <i>The brand of the product</i></font>
        </td>
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
    <input type="file" name="thefile" size="30">
        <br><font class="form_foot"><b>Note:</b> <i>If you upload new picture, the old one will be deleted</i></font></td>
  </tr>
  <tr>
    <td valign="top" class="tbl_2 tbl_3 padding_1" align="right">Price 1</td>
    <td valign="top" class="tbl_2 tbl_3 padding_1" align="center">:</td>
    <td valign="top" class="tbl_2 tbl_3 padding_1" align="left">
    <input type="text" name="price_1" size="20" maxlength="255" value="<?=$price_1?>"></td>
  </tr>
  <tr>
    <td valign="top" class="tbl_2 tbl_3 padding_1" align="right">Price 2</td>
    <td valign="top" class="tbl_2 tbl_3 padding_1" align="center">:</td>
    <td valign="top" class="tbl_2 tbl_3 padding_1" align="left">
    <input type="text" name="price_2" size="20" maxlength="255" value="<?=$price_2?>" id="price_2">
        <br><font class="form_foot"><b>Note:</b> <i>Price 2 is an option, if you use it, discount will not be available automatically</i></font></td>
  </tr>
  <tr>
    <td valign="top" class="tbl_2 tbl_3 padding_1" align="right">Discount</td>
    <td valign="top" class="tbl_2 tbl_3 padding_1" align="center">:</td>
    <td valign="top" class="tbl_2 tbl_3 padding_1" align="left">
    <input type="text" name="discount" size="20" maxlength="255" value="<?=$discount?>" id="discount">
        <br><font class="form_foot"><b>Note:</b> <i>Discount is an option, if you use it, price 2 will not be available automatically</i></font></td>
  </tr>
  <tr>
    <td valign="top" class="tbl_2 tbl_3 padding_1" align="right">Best Type</td>
    <td valign="top" class="tbl_2 tbl_3 padding_1" align="center">:</td>
    <td valign="top" class="tbl_2 tbl_3 padding_1" align="left">
    <input type="checkbox" name="best_type" value="1" <?=$best_type?>></td>
  </tr>
  <tr>
    <td valign="top" class="tbl_2 tbl_3 padding_1" align="right">New Type</td>
    <td valign="top" class="tbl_2 tbl_3 padding_1" align="center">:</td>
    <td valign="top" class="tbl_2 tbl_3 padding_1" align="left">
    <input type="checkbox" name="new_type" value="1" <?=$new_type?>></td>
  </tr>
  <tr>
    <td valign="top" class="tbl_2 tbl_3 padding_1" align="right">Feature Description</td>
    <td valign="top" class="tbl_2 tbl_3 padding_1" align="center">:</td>
    <td valign="top" class="tbl_2 tbl_3 padding_1" align="left">
    <textarea name="desc_feature" cols="50" rows="23"><?=$desc_feature?></textarea></td>
  </tr>
  <tr>
    <td valign="top" class="tbl_2 tbl_3 padding_1" align="right">Specification</td>
    <td valign="top" class="tbl_2 tbl_3 padding_1" align="center">:</td>
    <td valign="top" class="tbl_2 tbl_3 padding_1" align="left">
    <textarea name="desc_spec" cols="50" rows="23"><?=$desc_spec?></textarea></td>
  </tr>
  <tr>
    <td valign="top" class="tbl_2 tbl_3 padding_1" align="right">Box Description</td>
    <td valign="top" class="tbl_2 tbl_3 padding_1" align="center">:</td>
    <td valign="top" class="tbl_2 tbl_3 padding_1" align="left">
    <textarea name="desc_box" cols="50" rows="23"><?=$desc_box?></textarea></td>
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