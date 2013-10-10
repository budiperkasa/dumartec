<table border="0" width="100%" height="100%" cellpadding="0" cellspacing="0">
  <tr>
    <?
    if(atheen_design_block("l")){
    ?>
    <td valign="top" width="200">
    <?=atheen_design_block("l")?>
    <img src="/pic/design/blank.gif" width="200" height="1"></td>
    <td valign="top" width="20"><img src="/pic/design/blank.gif" width="20" height="1"></td>
    <?
    }
    ?>
    <td valign="top" width="100%"><?atheen_modul_content()?></td>
    <?
    if(atheen_design_block("r")){
    ?>
    <td valign="top" width="20"><img src="/pic/design/blank.gif" width="20" height="1"></td>
    <td valign="top" width="200">
    <?=atheen_design_block("r")?>
    <img src="/pic/design/blank.gif" width="200" height="1"></td>
    <?
    }
    ?>
  </tr>
</table>
