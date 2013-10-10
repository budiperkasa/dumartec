<?
include("cms/func/config.php");
include("func/variable.php");
include("cms/func/function.php");

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
$dir = "block/";
if(is_dir($dir)) {
   if($dh = opendir($dir)) {
      while(($file = readdir($dh)) !== false) {
         if(substr($file,0,6)=="block_"){
            include("block/".$file);
         }
      }
   closedir($dh);
   }
}

if($_GET["pancadewa"] && !$_GET["title"]){
   if($_GET["pancadewa"]=="phtml"){
      $pss_web_titles = $pss_web_name." - ".str_replace("-"," ",$_GET["id"]);
   }else{
      $pss_web_titles = $pss_web_name." - ".strtoupper($_GET["pancadewa"]);
   }
}elseif($_GET["pancadewa"] && $_GET["title"]){
   $pss_web_titles = str_replace("-"," ",$_GET["title"])." - ".$pss_web_name." - ".strtoupper($_GET["pancadewa"]);
}else{
   $pss_web_titles = $pss_web_title;
}

if(!$_SESSION["reg_statistik"]){
   pss_statistik_set();
}

if($_POST["submit"]){
   include("modul/".$_GET["pancadewa"]."/query.php");
}

if($pss_url_type=="1"){
   $pss_paging_type = 5;
}else{
   $pss_paging_type = 2;
}

#print_r($_GET);
#print_r($_POST);
#print_r($_SESSION);
?>
