<?
$user = htmlspecialchars($_POST["username"]);
$pass = htmlspecialchars($_POST["password"]);
$SQL = "SELECT * FROM pss_admin WHERE user = '$user' AND pass = '$pass'";
$queryq = mysql_query($SQL);
$query = mysql_fetch_array($queryq);
if($query){
   $_SESSION["reg_user_name"] = $query["user"];
   $_SESSION["reg_user_pass"] = $query["pass"];
   $_SESSION["reg_user_idny"] = $query["id"];
   $_SESSION["reg_user_type"] = $query["tipe"];
   unset($_SESSION["wrong_admin"]);
   pss_redirect(1,$_SERVER["REQUEST_URI"]);
}else{
   $_SESSION["reg_user_name"] = "";
   $_SESSION["reg_user_pass"] = "";
   $_SESSION["reg_user_idny"] = "";
   $_SESSION["reg_user_type"] = "";
   $_SESSION["wrong_admin"] = $_POST["username"];
   pss_alert("Wrong username and password!");
   pss_redirect(1,$_SERVER["REQUEST_URI"]);
}
?>