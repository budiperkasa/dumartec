<?
if($_POST["submit"]=="Create"){
   $username = pss_fuck_quote(pss_noHTML($_POST["username"]));
   $password = pss_fuck_quote(pss_noHTML($_POST["password"]));
   $desc = pss_fuck_quote(pss_noHTML($_POST["desc"]));
   $check = $_POST["type"];
   $checked[$check] = "checked";
   $check_open_close = $check=="1"?"close":"open";
   $open_close = $check_open_close;
}else{
   $check = 1;
   $checked[$check] = "checked";
   $open_close = "close";
}
?>

<table border="0" cellpadding="5" cellspacing="0" width="100%" class="tbl_1 tbl_4">
  <form method="POST" action="">
  <tr>
    <td class="tbl_2 tbl_3" colspan="3"><b>CREATE</b></td>
  </tr>
  <tr>
    <td width="20%" valign="top" class="tbl_2 tbl_3 padding_1" align="right">*Username</td>
    <td width="5%" valign="top" class="tbl_2 tbl_3 padding_1" align="center">:</td>
    <td width="75%" valign="top" class="tbl_2 tbl_3 padding_1" align="left">
    <input type="text" name="username" size="20" value="<?=$username?>"></td>
  </tr>
  <tr>
    <td valign="top" class="tbl_2 tbl_3 padding_1" align="right">*Password</td>
    <td valign="top" class="tbl_2 tbl_3 padding_1" align="center">:</td>
    <td valign="top" class="tbl_2 tbl_3 padding_1" align="left">
    <input type="password" name="password" size="20" value="<?=$password?>"></td>
  </tr>
  <tr>
    <td valign="top" class="tbl_2 tbl_3 padding_1" align="right">Description</td>
    <td valign="top" class="tbl_2 tbl_3 padding_1" align="center">:</td>
    <td valign="top" class="tbl_2 tbl_3 padding_1" align="left">
    <textarea name="desc" cols="50" rows="5"><?=$desc?></textarea></td>
  </tr>
  <tr>
    <td valign="top" class="tbl_2 tbl_3 padding_1" align="right">Type</td>
    <td valign="top" class="tbl_2 tbl_3 padding_1" align="center">:</td>
    <td valign="top" class="tbl_2 tbl_3 padding_1" align="left">
    <table border="0" cellpadding="3" cellspacing="0" width="100%">
      <tr>
        <td width="0"><input type="radio" name="type" value="1" id="type1" onclick="pss_shownHide_1('admin_modul','close');" class="checkbox" <?=$checked[1]?>></td>
        <td style="padding-top: 5px;" width="100%"><label for="type1" class="cursor_1" onclick="pss_shownHide_1('admin_modul','close');">Super Admin</label></td>
      </tr>
      <tr>
        <td><input type="radio" name="type" value="2" id="type2" onclick="pss_shownHide_1('admin_modul','open');" class="checkbox" <?=$checked[2]?>></td>
        <td style="padding-top: 5px;"><label for="type2" class="cursor_1" onclick="pss_shownHide_1('admin_modul','open');">Admin</label></td>
      </tr>
    </table>
    <div id="admin_modul">
    <?=atheen_admin_access($pss_arrfolder,$pss_arrmenu)?>
    </div>
    </td>
  </tr>
  <tr>
    <td valign="top" class="tbl_2 tbl_3 padding_1" align="right">&nbsp;</td>
    <td valign="top" class="tbl_2 tbl_3 padding_1" align="center">&nbsp;</td>
    <td valign="top" class="tbl_2 tbl_3 padding_1" align="left">
    <input type="submit" name="submit" value="Create" class="form_4a"></td>
  </tr>
  </form>
</table>

<script>
pss_shownHide_1('admin_modul','<?=$open_close?>');
</script>