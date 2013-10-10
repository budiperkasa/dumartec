<html>
<head>
<META name="Author" content="Pancadewa Soft Studio">
<title><?=$pss_web_title?></title>
<style type="text/css">/*<![CDATA[*/@import url(style-cms.css);/*]]>*/</style>
<link rel="shortcut icon" href="pic/icon-pss.ico">
<script src="js/js.js"></script>
</head>

<body class="body_login" onload="admin_focus('user','pass')">

<center>
<table border="0" height="50%" cellpadding="0" cellspacing="0">
  <tr>
    <td>
<table border="0" cellpadding="5" cellspacing="0" width="350" class="login_8">
  <form method="POST" action="">
  <tr>
    <td colspan="3" align="center" style="padding: 0px;"><img src="pic/header-login-cms.gif"></td>
  </tr>
  <tr>
    <td width="120" class="login_2 login_4 login_5" align="right">Name</td>
    <td width="10" class="login_2 login_4" align="center">:</td>
    <td width="220" class="login_4 login_6"><input type="text" name="username" id="user" size="20" value="<?=$_SESSION["wrong_admin"]?>" autocomplete="off" class="login_1"></td>
  </tr>
  <tr>
    <td class="login_2 login_5" align="right">Password</td>
    <td class="login_2" align="center">:</td>
    <td class="login_6"><input type="password" name="password" id="pass" size="20" class="login_1"></td>
  </tr>
  <tr>
    <td class="login_3 login_5">&nbsp;</td>
    <td class="login_3">&nbsp;</td>
    <td class="login_3 login_6"><input type="submit" name="submit" value="Login" class="login_7 cursor_1"></td>
  </tr>
  <tr>
    <td colspan="3" align="right" style="padding: 0px;"><img src="pic/footer-login-cms.gif"></td>
  </tr>
  </form>
</table>
    </td>
  </tr>
</table>
</center>

</body>

</html>