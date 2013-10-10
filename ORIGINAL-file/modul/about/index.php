<?
function butamt_about_read() {
         $SQL = "SELECT * FROM pss_about LIMIT 1";
         $queryq = mysql_query($SQL);
         $query = mysql_fetch_array($queryq);
         return $query['description'];
         }
?>
<table width="100%" cellpadding="5" cellspacing="0">
  <tr>
    <td class="label_block_2 border_3b">ABOUT US</td>
  </tr>
  <tr>
    <td class="contentofthecell">
    <?=butamt_about_read();?>
    </td>
  </tr>
</table>
