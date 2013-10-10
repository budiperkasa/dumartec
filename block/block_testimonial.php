<?
function block_testimonial(){
   global $pss_url_type;
   $SQL_count = "SELECT * FROM pss_testimonial WHERE status = '3'";
   $query_countq = mysql_query($SQL_count);
   $query_count = mysql_num_rows($query_countq);
   $rand = rand(0,$query_count-1);
   $SQL = "SELECT * FROM pss_testimonial WHERE status = '3' ORDER BY id DESC LIMIT $rand,1";
   $queryq = mysql_query($SQL);
   $query = mysql_fetch_array($queryq);
   if($query){
      $HTML .= "<table border=\"0\" width=\"100%\" cellpadding=\"0\" cellspacing=\"0\" class=\"border_1 back_block_1\">";
      $HTML .= "<tr><td class=\"block_padding\">";
      $HTML .= "<table border=\"0\" width=\"100%\" cellpadding=\"3\" cellspacing=\"0\">";
      $HTML .= "<tr><td colspan=\"2\" class=\"label_block_1\">Testimonial</td></tr>";
   do{
      $email_1 = explode("@",$query[email]);
      $email_2 = explode(".",$email_1[1]);
      $email_4 = count($email_2);
      for($i=1;$i<=$email_4-1;$i++){
         $email_5 = $email_5.".".$email_2[$i];
      }
      $email_3 = $email_1[0]."@*********".$email_5;
      $HTML .= "<tr>";
      $HTML .= "<td width=\"5%\" class=\"border_2b\" valign=\"top\"><img src=\"/pic/icon/icon-testimonial.png\"></td>";
      $HTML .= "<td width=\"95%\" class=\"border_2b\">";
      $HTML .= "<font class=\"date_1\"><i>\"".$query[description]."\"</i><br><br>";
      $HTML .= $query[name]."<br>";
      $HTML .= $email_3."</font>";
      $HTML .= "</td>";
      $HTML .= "</tr>";
   }while($query = mysql_fetch_array($queryq));
      $HTML .= "<tr>";
      $HTML .= "<td colspan=\"2\" align=\"right\" class=\"foot\">";
      $HTML .= "<a href=\"".pss_url_type($pss_url_type,1,"testimonial")."\" class=\"a_3\"><b>Read</b></a> | ";
      $HTML .= "<a href=\"".pss_url_type($pss_url_type,5,"testimonial",1,"Write Testimonial",0,"write")."\" class=\"a_3\"><b>Write</b></a>";
      $HTML .= "</td>";
      $HTML .= "</tr>";
      $HTML .= "</table>";
      $HTML .= "</td></tr>";
      $HTML .= "</table>";
      return $HTML;
   }
}
?>
