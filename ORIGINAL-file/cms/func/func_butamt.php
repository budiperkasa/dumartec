<?
function kosong () {
        return strlen(trim(func_get_arg(0))) < 1 ? true : false;
    }
function isTelp ($text) {
        return (eregi("^([0-9() \+]|\\-)+$",$text)) ? true : false;
        }
function quoteconv ($str) {
        $from = array('\"','"',"\'","'");
        $to = array("&#34;","&#34;","&#39;","&#39;");
        return str_replace($from,$to,$str);
        }

function isemail($str = "") {
        return preg_match("/^([a-z0-9_]|\\-|\\.)+@(([a-z0-9_]|\\-)+\\.)+[a-z]{2,4}$/i", $str);
        }

function isNumber ($text) {
        return (eregi("^([0-9])+$",$text)) ? true : false;
        }
function isHexa ($text) {
        return (eregi("^([#abcdefABCDEF0-9])+$",$text)) ? true : false;
        }
function butamt_categorylist ($catid) {
	$sql = mysql_query("select id,level from pss_prod_cat where id = '".$catid."'");
	$q = mysql_fetch_array($sql);
	$level = $q['level'];
	$sql = mysql_query("select id,name from pss_prod_cat where level >= ".$level);
	if (mysql_num_rows($sql) > 0) {
		while ($q = mysql_fetch_array($sql)) {
			$thelist[] = "<option value='".$q['id']."'>".$q['name']."</option>";
			}
		return implode($thelist);
		}
	
	}
function butamt_block_prod_cat_list($id, $selid = ""){
   #global $pss_url_type;
   $SQL = "SELECT * FROM pss_prod_cat WHERE id_parent = '$id' ORDER BY name ASC";
   $queryq = mysql_query($SQL);
   $query = mysql_fetch_array($queryq);
   if($query){
   do{
      $level = str_repeat("&nbsp;",($query[level]-1)*3);
	  $selected = $selid == $query['id'] ? "selected" : "";
      $HTML .= "<option value='".$query['id']."' ".$selected.">".$level.$query['name']."</option>";
      $HTML .= butamt_block_prod_cat_list($query[id]);
   }while($query = mysql_fetch_array($queryq));
      return $HTML;
   }
}
?>