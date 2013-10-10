<html>
<head>
<title><?=$pss_web_titles?></title>
<META name="keywords" content="<?=$pss_web_titles?>,<?=pss_meta_keywords()?>" />
<META name="description" content=" <?=$pss_web_titles?> - Solusi terbaik dalam berbelanja online" />          <!-- ="<?=pss_meta_description()?>" /> -->
<META name="verify-v1" content="BexM65oLUXuJTm6/QMXfKleaaHJXycfrsVsKg7tS3PM=" />
<META name="robots" content="all,index,follow" />
<META name="Distribution" content="Global" />
<META name="Rating" content="General" />
<META name="revisit-after" content="1 days" />
<style type="text/css">/*<![CDATA[*/@import url(/style-web.css);/*]]>*/</style>
<style type="text/css">/*<![CDATA[*/@import url(/butamt_additional_style.css);/*]]>*/</style>
<link rel="shortcut icon" href="/pic/icon/icon-web.ico">
<script type='text/javascript' src='/js/js.js'></script>
<META name="Author" content="Garmin Indonesia">
</head>

<body class="body">
<center>

<table width="900" cellpadding="5" cellspacing="0" height="100%" border="0" class="container border_3c border_3d">
  <tr>
    <td style="padding-top: 0px;">

    <table border="0" cellpadding="0" cellspacing="0" width="100%" class="border_3b">
      <tr>
        <td width="550" rowspan="4"><img src="/pic/design/dumartec-logo.jpg" width="368" height="110"></td>
        <td width="350" height="20" align="center" class="head_1 back_1 font_1" nowrap>
          <b><?=$pss_web_title?></b>
        </td>
      </tr>
      <tr>
        <td class="marquee"><marquee scrollamount="4" onmouseover="this.stop()" onmouseout="this.start()"><?=atheen_marquee()?></marquee></td>
      </tr>
      <tr>
        <td height="40" align="center" class="head_1" nowrap>

        <table border="0" cellpadding="7" cellspacing="0" width="10%">
          <form id="searchs" method="POST" action="<?=pss_url_type($pss_url_type,1,"search")?>" enctype="multipart/form-data">
          <input type="hidden" name="submit" value="submit">
          <tr>
            <td align="right"><input type="text" id="search" name="search" size="25" value="<?=$_GET["search"]?>" class="search_1" onblur="pss_search_form('1','search');" onfocus="pss_search_form('2','search');"></td>
            <td><input type="image" src="/pic/design/search.gif" onclick="pss_submit_form('searchs')"></td>
          </tr>
          </form>
        </table>
        <script>pss_search_form('1','search');</script>

        </td>
      </tr>
      <tr>
        <td height="20" align="center" class="border_2a head_1">
          <a href="<?=pss_url_type($pss_url_type,1)?>">Home</a> |
          <a href="<?=pss_url_type($pss_url_type,1,"product")?>">Product</a> |
          <a href="<?=pss_url_type($pss_url_type,1,"news")?>">News</a> |
          <a href="<?=pss_url_type($pss_url_type,1,"tips")?>">Tips & Tricks</a> |
          <a href="<?=pss_url_type($pss_url_type,1,"about")?>">About Us</a> |
          <a href="<?=pss_url_type($pss_url_type,1,"contact")?>">Contact</a>
        </td>
      </tr>
    </table>

    </td>
  </tr>
  <tr>
    <td valign="top" height="100%" style="padding: 10px 5px 0px 5px;"><?include("modul/content.php")?></td>
  </tr>
  <tr>
    <td>

    <table border="0" cellpadding="7" cellspacing="0" width="100%">
      <tr>
        <td align="center" colspan="2" class="border_3a foot">
          <a href="<?=pss_url_type($pss_url_type,1,"faq")?>">Help & FAQ</a> |
          <a href="<?=pss_url_type($pss_url_type,1,"howto")?>">How To Shopping</a> |
          <a href="<?=pss_url_type($pss_url_type,1,"warranty")?>">Warranty & Claim</a> |
          <a href="<?=pss_url_type($pss_url_type,1,"location")?>">Location</a> |
          <a href="<?=pss_url_type($pss_url_type,1,"contact")?>">Contact</a> |
          <a href="<?=pss_url_type($pss_url_type,1,"sitemap")?>">Site Map</a>
        </td>
      </tr>
      <tr>
        <td valign="top" align="left" class="border_2a foot">
        Jl. Malaka 2 No. 35 Jakarta Barat<br>
        DKI Jakarta - 11230 - INDONESIA<br>
        Phone. 021-6903130, 6924085<br>
        Fax. 021-6910734
        </td>
        <td valign="top" align="right" class="border_2a foot">
          Copyright &copy;
          <?=$pss_launch==date("Y")?$pss_launch:$pss_launch." - ".date("Y")?> by. DUMARTEC<br>
          Powered by <a href="http://www.jasamarine.co.id" target="_blank"><b>Jasamarine Corp.</b></a> |
          All Rights Reserved <br><br>
          Email. <a href="mailto: <?=$pss_mail_config?>"><?=$pss_mail_config?></a>
        </td>
      </tr>
    </table>

    </td>
  </tr>
</table>

</center>

</body>
</html>
