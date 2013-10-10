<?
function atheen_testimonial_list(){
   global $pss_url_type;

   # Paging Start
   $perpage = 10;
   $SQLpage = "SELECT * FROM pss_testimonial WHERE status = 3";
   $urlpage = pss_url_type($pss_url_type,7,"testimonial",NULL,NULL);
   $awal = pss_paging(1,$SQLpage,$perpage);
   $banyak = $perpage;
   # Paging End

   $SQL = "SELECT * FROM pss_testimonial WHERE status = 3 ORDER BY id DESC LIMIT $awal,$banyak";
   $queryq = mysql_query($SQL);
   $query = mysql_fetch_array($queryq);
   if($query){
      $HTML .= "<table width=\"100%\" cellpadding=\"5\" cellspacing=\"0\">";
   do{
      $id = $query["id"];
      $judul = pss_set_title($query["name"]);
      $tanggal = substr($id,0,4)."/".substr($id,4,2)."/".substr($id,6,2);
      $HTML .= "<tr>";
      $HTML .= "<td class=\"border_2b\">";
      $HTML .= "<font class=\"date_1\">".$tanggal." - ".pss_date_format(3,$query[id])."</font>";
      $HTML .= "<h3 class='subjectofcontent'>".$query["name"]."</h3>";
      $HTML .= "<p class='paragraphofcontent'>".$query["description"]."</p>";
      $HTML .= "</td>";
      $HTML .= "</tr>";
   }while($query = mysql_fetch_array($queryq));
      $HTML .= "<tr><td align=\"center\" colspan=\"10\"><br>";
      $HTML .= "<font class=\"paging\">";
      $HTML .= pss_paging(4,$SQLpage,$perpage)."|".pss_paging(5,$SQLpage,$perpage,$urlpage)."|".pss_paging(3,$SQLpage,$perpage);
      $HTML .= "</font>";
      $HTML .= "</td></tr>";
      $HTML .= "</table>";
   }
   return $HTML;
}

function atheen_testimonial_read () {

        $HTML = "<form action= metod='post' id='userinput'>
                 <label for='name'>Tell us your name</label>
                 <input type='text' name='name' maxlength='255' id='name'>
                 <label for='email'>Your email</label>
                 <input type='text' name='email' maxlength='255' id='email'>
                 <label for='message'>And your testimony</label>
                 <textarea name='message' id='message'></textarea>
                 <input type='submit' name='submit' value='Send Message' class='submitbutton'>
                 </form>";
        return $HTML;
        }

?>

<table width="100%" cellpadding="5" cellspacing="0">
  <tr>
    <td class="label_block_2 border_3b">TESTIMONIAL</td>
  </tr>
  <tr>
    <td class="contentofthecell">
    <?=isset($_GET['do']) ? atheen_testimonial_read() : atheen_testimonial_list();?>
    </td>
  </tr>
</table>
