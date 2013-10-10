<?
function butamt_sitemap_read() {
        global $pss_url_type;

        $HTML = "";
        $HTML .= "<ul id='sitemap'>
                    <li><a href='".pss_url_type($pss_url_type,1)."'>Home</a></li>
                    <li><a href='".pss_url_type($pss_url_type,1,'about')."'>About Us</a></li>
                    <li><a href='".pss_url_type($pss_url_type,1,'howto')."'>How To Shop</a></li>
                    <li><a href='".pss_url_type($pss_url_type,1,'category')."'>Category
                      ";
        $SQL = "SELECT * FROM pss_prod_cat where id_parent = '1' order by name asc limit 10";
        $queryq = mysql_query($SQL);
        if (mysql_num_rows($queryq) > 0) {
                $HTML .= "<ul>";
                while ($query = mysql_fetch_array($queryq)) {
                        $HTML .= "<li><a href='".pss_url_type($pss_url_type,2,'category',$query['id'],$query['name'])."'>".$query["name"]."</a></li>";
                        }
                $HTML .= "</ul>";
                }
        $HTML .= "
                    </a></li>
                    <li><a href='".pss_url_type($pss_url_type,1,'brand')."'>Brand
                    ";
        $SQL = "SELECT * FROM pss_prod_brand order by name asc limit 10";
        $queryq = mysql_query($SQL);
        if (mysql_num_rows($queryq) > 0) {
                $HTML .= "<ul>";
                while ($query = mysql_fetch_array($queryq)) {
                        $HTML .= "<li><a href='".pss_url_type($pss_url_type,2,'brand',$query['id'],$query['name'])."'>".$query["name"]."</a></li>";
                        }
                $HTML .= "</ul>";
                }
        $HTML .= "
                    </a></li>
                    <li><a href='".pss_url_type($pss_url_type,1,'product')."'>Product
                    ";
        $SQL = "SELECT * FROM pss_prod_stuff order by name asc limit 10";
        $queryq = mysql_query($SQL);
        if (mysql_num_rows($queryq) > 0) {
                $HTML .= "<ul>";
                while ($query = mysql_fetch_array($queryq)) {
                        $HTML .= "<li><a href='".pss_url_type($pss_url_type,2,'product',$query['id'],$query['name'])."'>".$query["name"]."</a></li>";
                        }
                $HTML .= "</ul>";
                }
        $HTML .= "
                    </a></li>
                    <li><a href='".pss_url_type($pss_url_type,1,'faq')."'>Frequently Asked Questions</a></li>
                    <li><a href='".pss_url_type($pss_url_type,1,'warranty')."'>Warranty and Claim</a></li>
                    <li><a href='".pss_url_type($pss_url_type,1,'location')."'>Our Location</a></li>
                    <li><a href='".pss_url_type($pss_url_type,1,'testimonial')."'>Testimonial
                      <ul>
                        <li><a href='".pss_url_type($pss_url_type,1,'testimonial')."'>Read all Testimonies</a></li>
                        <li><a href='".pss_url_type($pss_url_type,1,'testimonial&do=write')."'>Give us a testimony</a></li>
                      </ul>
                    </a></li>
                    <li><a href='".pss_url_type($pss_url_type,1,'contact')."'>Contact Us</a></li>
                    <li><a href='".pss_url_type($pss_url_type,1,'news')."'>News and Article</a></li>
                    <li><a href='".pss_url_type($pss_url_type,1,'tips')."'>Tips and Tricks</a></li>
                  </ul>";
        return $HTML;
        }

function atheen_sitemap(){
   global $pss_url_type;
   $HTML .= "<table cellpadding=\"3\" cellspacing=\"0\" width=\"100%\">";
   $HTML .= "<tr><td width=\"1%\"><img src=\"/pic/icon/icon-home.png\"></td><td width=\"99%\"><a href=\"".pss_url_type($pss_url_type,1)."\">Home</a></td></tr>";
   $HTML .= "<tr><td><img src=\"/pic/icon/icon-sitemap.png\"></td><td><a href=\"".pss_url_type($pss_url_type,1,"product")."\">Product</a></td></tr>";
   $HTML .= "<tr><td><img src=\"/pic/icon/icon-sitemap.png\"></td><td><a href=\"".pss_url_type($pss_url_type,1,"tips")."\">Tips & Tricks</a></td></tr>";
   $HTML .= "<tr><td><img src=\"/pic/icon/icon-sitemap.png\"></td><td><a href=\"".pss_url_type($pss_url_type,1,"about")."\">About Us</a></td></tr>";
   $HTML .= "<tr><td><img src=\"/pic/icon/icon-sitemap.png\"></td><td><a href=\"".pss_url_type($pss_url_type,1,"contact")."\">Contact</a></td></tr>";
   $HTML .= "<tr><td><img src=\"/pic/icon/icon-sitemap.png\"></td><td><a href=\"".pss_url_type($pss_url_type,1,"faq")."\">Help & FAQ</a></td></tr>";
   $HTML .= "<tr><td><img src=\"/pic/icon/icon-sitemap.png\"></td><td><a href=\"".pss_url_type($pss_url_type,1,"howto")."\">How To Shopping</a></td></tr>";
   $HTML .= "<tr><td><img src=\"/pic/icon/icon-sitemap.png\"></td><td><a href=\"".pss_url_type($pss_url_type,1,"warranty")."\">Warranty & Claim</a></td></tr>";
   $HTML .= "<tr><td><img src=\"/pic/icon/icon-sitemap.png\"></td><td><a href=\"".pss_url_type($pss_url_type,1,"location")."\">Location</a></td></tr>";
   $HTML .= "<tr><td><img src=\"/pic/icon/icon-sitemap.png\"></td><td><a href=\"".pss_url_type($pss_url_type,1,"testimonial")."\">Testimonial</a></td></tr>";
   $HTML .= "<tr><td><img src=\"/pic/icon/icon-sitemap.png\"></td><td><a href=\"".pss_url_type($pss_url_type,1,"sitemap")."\">Site Map</a></td></tr>";
   $HTML .= "</table>";

   return $HTML;
}
?>
<table width="100%" cellpadding="5" cellspacing="0">
  <tr>
    <td class="label_block_2 border_3b">SITEMAP</td>
  </tr>
  <tr>
    <td class="contentofthecell">
    <?=atheen_sitemap();?>
    </td>
  </tr>
</table>
