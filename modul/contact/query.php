<?
switch(strtolower($_POST["submit"])){
   case "send message" :
      if($_POST["name"] && $_POST["email"] && $_POST["phone"] && $_POST["message"]){
         if($_POST["url"]){
            $_POST["url"] = eregi("^http://",$_POST["url"])?$_POST["url"]:"http://".$_POST["url"];
         }else{}
         $_POST["email"] = htmlspecialchars($_POST["email"],ENT_QUOTES);
         $tujuan ="$pss_mail_config";
         $subjek ="Question from visitor of [$pss_web_name] ";
         $header ="MIME-Version: 1.0\r\n";
         $header.="Content-type: text/html; charset=iso-8859-1\r\n";
         $header.="From: ".$pss_web_name." <".$pss_mail_config.">\r\n";  #<".$_POST["email"].">
         $header.="Return-Path: ".$pss_mail_config."\r\n";

         $main_content = "".
                         "Name  : ".$_POST["name"]."\n<br>".
                         "Phone : ".$_POST["phone"]."\n<br>".
                         "Email : ".$_POST["email"]."\n\n<br><br>".
                         str_replace("\n","<br>",$_POST["message"]);

         $content=$main_content;
         #echo $subjek.$header;
         if(preg_match("/^[A-Z0-9._%-]+@[A-Z0-9.-]+\\.[A-Z]{2,4}$/iD", $_POST["email"])){
         mail($tujuan,$subjek,$content,$header);
         echo "<script>alert(' Thank you, our administrator will send back your email as soon as possible.');
                       location.href='".$_SERVER["REQUEST_URI"]."';
               </script>";
         die();
         }else{
            echo "<script>alert('E-mail address invalid.');</script>";
         }
      }else{
         echo "<script>alert('Please fill all the form...');</script>";
      }

   break;
}
?>