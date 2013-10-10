<?
function butamt_warranty_read() {
         $SQL = "SELECT * FROM pss_warranty LIMIT 1";
         $queryq = mysql_query($SQL);
         $query = mysql_fetch_array($queryq);
         return $query['description'];
         }
?>
<table width="100%" cellpadding="5" cellspacing="0">
  <tr>
    <td class="label_block_2 border_3b">WARRANTY</td>
  </tr>
  <tr>
    <td class="contentofthecell">
    <?=butamt_warranty_read();?>
    </td>
  </tr>
</table>
