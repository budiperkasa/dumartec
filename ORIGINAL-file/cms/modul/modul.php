<html>
<head>
<META name="Author" content="Pancadewa Soft Studio">
<title><?=$pss_web_title?></title>
<style type="text/css">/*<![CDATA[*/@import url(style-cms.css);/*]]>*/</style>
<link rel="shortcut icon" href="pic/icon-pss.ico">
<script src="js/js.js"></script>
</head>

<body class="body_admin">

<center>
<table cellpadding="0" cellspacing="0" border="0" width="100%" height="100%">
  <tr>
    <td colspan="2" height="25" class="tbl_2"><img src="pic/header-login-cms.gif"></td>
    <td colspan="1" height="25" class="tbl_2" align="center" valign="bottom">
      <div class="tbl_1 tbl_3 tbl_4 back_logout">
      <a href="?<?=pss_url_def()?>=logout" class="link_logout">&#187; Logout &#171;</a>
      </div>
    </td>
  </tr>
  <tr>
    <td valign="top" width="200" style="padding: 5px;" class="tbl_4 tbl_3 tbl_4 header">
    <?=pss_menuadmin($pss_arrfolder,$pss_arrmenu)?>
    </td>
    <td valign="top" width="100%" colspan="2" style="padding: 0px;" class="tbl_3">
    <?
    if($_GET[pss_url_def()] && file_exists("modul/".$modul."list.php")){#
       if($_GET["do"]){
          $type_of_form = $_GET["do"];
       }else{
          $type_of_form = "create";
       }
       echo "<table border=\"0\" cellspacing=\"0\" cellpadding=\"5\" width=\"100%\" height=\"100%\">
               <tr>
                 <td width=\"50%\" valign=\"top\" class=\"tbl_3\">
                 <table border=\"0\" cellspacing=\"0\" cellpadding=\"5\" width=\"100%\" class=\"tbl_0 modulname\">
                   <tr>
                     <td>".pss_namemodul($pss_arrfolder,$pss_arrmenu)."</td>
                   </tr>
                 </table>
                 <table border=\"0\" cellspacing=\"0\" cellpadding=\"0\" width=\"100%\" style=\"padding-top: 5px;\">
                   <tr>
                     <td>";
       if(pss_rule_adminmodul()){
          include("modul/".$modul."search.php");
          include("modul/".$modul."list.php");
       }else{
          include("modul/error.php");
       }
       echo "        </td>
                   </tr>
                 </table>
                 </td>
                 <td width=\"50%\" valign=\"top\">
                 <table border=\"0\" cellspacing=\"0\" cellpadding=\"0\" width=\"100%\" class=\"tbl_0 modulname\">
                   <tr>
                     <td align=\"right\">".pss_search_modul_form()."</td>
                   </tr>
                 </table>
                 <table border=\"0\" cellspacing=\"0\" cellpadding=\"0\" width=\"100%\" style=\"padding-top: 5px;\">
                   <tr>
                     <td>";
       #echo pss_SettingTinyMCE();
       if(pss_rule_adminmodul()){
          if(file_exists("modul/".$modul.$type_of_form.".php")){
             include("modul/".$modul.$type_of_form.".php");
          }else{
             include("modul/home.php");
          }
       }else{
          include("modul/home.php");
       }
       echo "        </td>
                   </tr>
                 </table>
                 </td>
               </tr>
             </table>
            ";
    }else{
       echo "<table border=\"0\" cellspacing=\"0\" cellpadding=\"5\" width=\"100%\">
               <tr>
                 <td valign=\"top\">";
       include("modul/home.php");
       echo "    </td>
               </tr>
             </table>
            ";
    }
    ?>
    </td>
  </tr>
  <tr>
    <td class="tbl_1 foot" height="25"><img src="" width="200" height="1"></td>
    <td width="100%" class="tbl_1 foot" style="padding: 0px;" valign="top" align="right">
    Code, Design and Layout are powered by
    <a href="http://www.pancadewa.com" target="_blank" class="a2"><b>Pancadewa Soft Studio</b></a><br>
    All Rights Reserved &copy; <?=date("Y")=="2005"?date("Y"):"2005 - ".date("Y")?>
    </td>
    <td class="tbl_1" style="padding: 0px;" valign="top" align="right"><img src="pic/footer-login-cms.gif"></td>
  </tr>
</table>
</center>
<?=pss_menuadmin_js1($pss_arrfolder,$pss_arrmenu)?>
<?=$_GET[pss_url_def()]?pss_menuadmin_js2($pss_arrfolder,$pss_arrmenu,pss_namemodul($pss_arrfolder,$pss_arrmenu,"ok")):
pss_menuadmin_js2($pss_arrfolder,$pss_arrmenu,"control_panel")?>
</body>

</html>