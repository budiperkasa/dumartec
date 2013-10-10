<?

function pss_list(){
   if (isset($_GET['idx'])) {
                $SQL = "SELECT id_parent FROM pss_prod_cat WHERE id = '".$_GET['idx']."'";
                $queryq = mysql_query($SQL);
                $query = mysql_fetch_array($queryq);
                $gotoparent = "&idx=".$query['id_parent'];

                $SQL2 = "SELECT name FROM pss_prod_cat WHERE id = '".$_GET['idx']."'";
                $queryq2 = mysql_query($SQL2);
                $query2 = mysql_fetch_array($queryq2);
                $parent_name = $query2['name'];

                }
        else {
                $gotoparent = "";
                $parent_name = "";;
                }

   $id_parent = $_GET["idx"]?htmlspecialchars($_GET["idx"],ENT_QUOTES):"1";

   # Search Start
   if($_SESSION["reg_search_search"]){
      $search_sql = pss_search_do(1);
   }
   # Search Stop

   # Paging Start
   $perpage = 20;
   $SQLpage = "SELECT * FROM pss_prod_cat WHERE id_parent = '$id_parent' $search_sql";
   $urlpage = "?".pss_url_def()."=".$_GET[pss_url_def()]."&idx=".$_GET["idx"];
   $awal = pss_paging(1,$SQLpage,$perpage);
   $banyak = $perpage;
   # Paging End

   $SQL = "SELECT * FROM pss_prod_cat WHERE id_parent = '$id_parent' $search_sql
           ORDER BY pos ASC, id ASC
           LIMIT $awal,$banyak";
   $queryq = mysql_query($SQL);
   $query = mysql_fetch_array($queryq);
   $HTMLx .= "<tr class=\"$tr_select\">";
   $HTMLx .= "<td class=\"tbl_2 tbl_3\" valign=\"top\" align=\"right\"><a href=\"?".pss_url_def()."=".$_GET[pss_url_def()]."\">".pss_icon_type(5)."</a></td>";
   $HTMLx .= "<td class=\"tbl_2 tbl_3\" valign=\"top\" align=\"left\" colspan=\"9\"><a href=\"?".pss_url_def()."=".$_GET[pss_url_def()].$gotoparent."\">Up to Parent</a></td>";
   $HTMLx .= "</tr>";
   $HTMLx = $id_parent=="1"?"":$HTMLx;
   if($query){
   do{
      $tr_select = $query[id]==$_GET["id"]?"tr_1":"";
      $id = $query[id];
      $id_parent = $query[id_parent];
      $subject = $query["name"];
          $tanggal = substr($id,0,4)."/".substr($id,4,2)."/".substr($id,6,2);
      //$ahref = $query[id_parent]=="1"?"<a href=\"?".pss_url_def()."=".$_GET[pss_url_def()]."&idx=$id\">":"";
      $HTML .= "<tr class=\"$tr_select\">";
      $HTML .= "<td class=\"tbl_2 tbl_3\" valign=\"top\" align=\"center\"><input type=\"checkbox\" id=\"del_list\" name=\"box_del[]\" value=\"$id\" class=\"checkbox\"></td>";
      $HTML .= "<td class=\"tbl_2 tbl_3\" valign=\"top\" align=\"center\"><a href=\"?".pss_url_def()."=".$_GET[pss_url_def()]."&do=del&p=".$_GET["p"]."&id=$id&idx=$id_parent\">".pss_icon_type(2)."</a></td>";
      $HTML .= "<td class=\"tbl_2 tbl_3\" valign=\"top\" align=\"center\"><a href=\"?".pss_url_def()."=".$_GET[pss_url_def()]."&do=edit&p=".$_GET["p"]."&id=$id&idx=$id_parent\">".pss_icon_type(1)."</a></td>";
      $HTML .= "<td class=\"tbl_2 tbl_3\" valign=\"top\" align=\"left\">$tanggal</td>";
          $HTML .= "<td class=\"tbl_2 tbl_3\" valign=\"top\" align=\"left\"><a href=\"?".pss_url_def()."=".$_GET[pss_url_def()]."&idx=$id\">$subject</a></td>";
      $HTML .= "</tr>";
   }while($query = mysql_fetch_array($queryq));
      $HTML .= "<tr>";
      $HTML .= "<td colspan=\"10\" class=\"tbl_2 tbl_3\" align=\"center\">
                ".pss_paging(4,$SQLpage,$perpage)."|".pss_paging(2,$SQLpage,$perpage,$urlpage)."|".pss_paging(3,$SQLpage,$perpage)."
                </td>";
      $HTML .= "</tr>";
   }
   return $HTMLx.$HTML;
}
#echo pss_SettingTinyMCE();
?>

<table cellpadding="5" cellspacing="0" width="100%" class="tbl_1 tbl_4">
  <tr>
    <td class="tbl_2 tbl_3" width="15%" align="center" colspan="3" nowrap>
    <input type="button" value="Delete!" onclick="pss_deleteAll('<?$_SERVER["REQUEST_URI"]?>');" class="form_4d"></td>
    <td class="tbl_2 tbl_3" width="15%" align="center" nowrap><b>DATE</b></td>
        <td class="tbl_2 tbl_3" width="75%" align="center" nowrap><b>SUBJECT</b></td>
  </tr>
  <form id="del_form" name="del_form" method="POST" action="">
  <input type="text" name="submitx" value="del_all" style="display: none;">
  <?=pss_list()?>
  </form>
</table>
<script src="js/jquery.js"></script>
<script>
$(document).ready(function(){
        var arrayofcolor = ['000000','4D4D4D','959595','BEBEBE',
                            '6B0000','B00000','D80000','FF0000',
                            'FF2000','FF4000','FF6000','FF8000',
                            '847300','B29B00','DCC000','FFDE00',
                            '418A00','57B900','69DF00','78FF00',
                            '004892','005EBE','006FE1','46A1FF',
                            '5A0099','7C00D2','9600FF','A422FF',
                            'D100D4','FC00FF','FF27E8','FF60EE'];

        if ($("#colorbox").val() == '') {
                $("#colorbox").val("#"+arrayofcolor[0]);
                var defcol = arrayofcolor[0];
                }
        else {
                var defcol = $("#colorbox").val().replace("#","");
                }

        $("#colorbox").css({float:'left'}).attr("readonly","readonly");
        var $butt = $("<div id='buttondiv' style='background-color:#"+defcol+";'></div>").css({width:16,
                                                                                  height:16,
                                                                                  float:'left',
                                                                                  marginLeft:10}).insertAfter("#colorbox").click(function () {
                                                                                        $("#position").fadeIn();
                                                                                        });
        var $colorcontainer = $("<div id='position'><div id='colorcontainer'></div></div>")
                .insertAfter("#colorbox");
        $("#position").css({position:'relative',width:250}).hide();
        $("#colorcontainer").css({position:'absolute',
                                                          top:0,
                                                          left:90,
                                                          zIndex:10});
        for(var i = 0; i < arrayofcolor.length; i++) {
                $("<div class='coloritem' id='"+i+"' style='background-color:"+arrayofcolor[i]+";width:16px;height:16px;'></div>")
                .css({float:'left',border:'1px #fff solid'})
                .appendTo("#colorcontainer");
                }
        $(".coloritem").click(function () {
                var itscolor = "#"+arrayofcolor[$(this).attr("id")];
                $("#colorbox").val(itscolor);
                $("#position").fadeOut();
                $("#buttondiv").css({background:itscolor});
                }).mouseover(function () {
                        $(this).css({cursor:'pointer',border:'1px #000 solid'});
                        }).mouseout(function () {
                                $(this).css({border:'1px #fff solid'});
                                });
        });
</script>
