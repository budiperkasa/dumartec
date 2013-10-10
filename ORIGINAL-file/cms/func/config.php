<?
session_start();

$db_host = "localhost";
$db_user = "dumarcom_root";
$db_pass = "pass";
$db_name = "dumarcom_portal";

@mysql_pconnect($db_host, $db_user, $db_pass) or die("MySQL connect error!");
@mysql_select_db($db_name) or die("MySQL DataBase error!");
?>