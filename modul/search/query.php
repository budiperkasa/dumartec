<?
if(pss_form_is_empty($_POST["search"])){
   $search = pss_noHTML($_POST["search"]);
   $pageone = $pss_url_type=="1"?".1.html":"";
   echo pss_redirect(2,pss_url_type($pss_url_type,4,"search",NULL,NULL,NULL,$search).$pageone);
   die();
}elseif($_GET["search"]){
   $search = pss_noHTML($_GET["search"]);
}else{
   echo pss_redirect(2,pss_url_type($pss_url_type,1));
   die();
}
?>