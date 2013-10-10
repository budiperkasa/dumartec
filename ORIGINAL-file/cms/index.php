<?
include("func/config.php");
include("func/variable.php");
include("func/function.php");

$dir = "func/";
if(is_dir($dir)) {
   if($dh = opendir($dir)) {
      while(($file = readdir($dh)) !== false) {
         if(substr($file,0,4)=="var_"){
            include("func/".$file);
         }
      }
   closedir($dh);
   }
}
if(is_dir($dir)) {
   if($dh = opendir($dir)) {
      while(($file = readdir($dh)) !== false) {
         if(substr($file,0,5)=="func_"){
            include("func/".$file);
         }
      }
   closedir($dh);
   }
}

if(pss_url_def()=="pancadewa"){

   $modul_last = explode("?".pss_url_def()."=",$_SERVER["HTTP_REFERER"]);
   $modul_last = explode("&",$modul_last[1]);
   $modul_last = $modul_last[0];
   $modul_ends = explode("?".pss_url_def()."=",$_SERVER["REQUEST_URI"]);
   $modul_ends = explode("&",$modul_ends[1]);
   $modul_ends = $modul_ends[0];
   if($modul_last==$modul_ends){
   }else{
      unset($_SESSION["reg_search_search"]);
      unset($_SESSION["reg_search_fields"]);
   }

   if($_GET[pss_url_def()]=="logout"){
      unset($_SESSION["reg_user_name"]);
      unset($_SESSION["reg_user_pass"]);
      unset($_SESSION["reg_user_idny"]);
      unset($_SESSION["reg_user_type"]);
      unset($_SESSION["wrong_admin"]);
      unset($_SESSION["reg_search_search"]);
      unset($_SESSION["reg_search_fields"]);
      pss_redirect(1,".");
      die();
   }

   if($_GET[pss_url_def()] && !$_SESSION["reg_user_name"]){
      pss_redirect(1,".");;
      die();
   }

   $modul = $_GET[pss_url_def()]?$_GET[pss_url_def()]."/":"";

   if($_POST["submit"] && !$_SESSION["reg_user_name"]){
      include("modul/".$modul."query.php");
   }elseif($_POST["submit"]=="Search"){
      $_SESSION["reg_search_search"] = htmlspecialchars($_POST["search"],ENT_QUOTES);
      $_SESSION["reg_search_fields"] = htmlspecialchars($_POST["fields"],ENT_QUOTES);
      pss_redirect(1,$_SERVER["REQUEST_URI"]);
      die();
   }elseif($_POST["submit"] || $_POST["submitx"]){
      if(pss_rule_adminmodul()){
         if(file_exists("modul/".$modul."query.php")){
            include("modul/".$modul."query.php");
         }else{
            pss_redirect(1,$_SERVER["REQUEST_URI"]);
            die();
         }
      }
   }else{}

   if($_SESSION["reg_user_name"] && $_SESSION["reg_user_type"]){
      include("modul/modul.php");
   }else{
      include("modul/login.php");
      unset($_SESSION["reg_user_name"]);
      unset($_SESSION["reg_user_pass"]);
      unset($_SESSION["reg_user_idny"]);
      unset($_SESSION["reg_user_type"]);
      unset($_SESSION["wrong_admin"]);
      unset($_SESSION["reg_search_search"]);
      unset($_SESSION["reg_search_fields"]);
   }

   if($_SESSION['reg_alert_pss']){
      pss_alert();
   }

   #echo "<br>";print_r($_SERVER);
   #echo "<br>";print_r($_SESSION);
   #echo "<br>";print_r($_GET);
   #echo "<br>";print_r($_POST);
   #echo pss_post_url("www.dumartec.com",2);

}else{
   die();
}
?>