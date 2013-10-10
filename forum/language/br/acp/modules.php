<?php
/**
*
* acp_modules [Brezhoneg]
*
* @package language
* @version $Id: modules.php,v 1.13 2007/10/04 15:07:24 acydburn Exp $
* @copyright (c) 2005 phpBB Group
* @license http://opensource.org/licenses/gpl-license.php GNU Public License
*
*/

/**
* DO NOT CHANGE
*/
if (!defined('IN_PHPBB'))
{
	exit;
}

if (empty($lang) || !is_array($lang))
{
	$lang = array();
}

// DEVELOPERS PLEASE NOTE
//
// All language files should use UTF-8 as their encoding and the files must not contain a BOM.
//
// Placeholders can now contain order information, e.g. instead of
// 'Page %s of %s' you can (and should) write 'Page %1$s of %2$s', this allows
// translators to re-order the output of data while ensuring it remains correct
//
// You do not need this where single placeholders are used, e.g. 'Message %d' is fine
// equally where a string contains only two placeholders which are used to wrap text
// in a url you again do not need to specify an order e.g., 'Click %sHERE%s' is fine

$lang = array_merge($lang, array(
	'ACP_MODULE_MANAGEMENT_EXPLAIN'	=> 'Amañ e c\'hellit ober war-dro ar moduloù. War tri live emañ aozet listennoù Pajenn Ar Merour (Rann -> Rann -> Modul), padal emañ aozet ar re all war daou live (Rann -> Modul) a rank bezañ dalc\'het. Diwallit ivez ouzh un dra all : ne vo ket tu deoc\'h tizhout ar merañ ken ma lakait dizoberiant ar modul a ra e-unan war-dro merañ ar moduloù all.',
	'ADD_MODULE'					=> 'Ouzhpennañ ur modul',
	'ADD_MODULE_CONFIRM'			=> 'Ha sur oc\'h ho peus c\'hoant da ouzhpennañ ar modul-mañ gant an doare-mañ?',
	'ADD_MODULE_TITLE'				=> 'Ouzhpennañ ur modul',

	'CANNOT_REMOVE_MODULE'	=> 'N\'eus ket bet tu da zilemel ar modul dre ma vez dalc\'het re all outañ. Dilamit pe dilec\'hiit an holl re a zo e-dalc\'h outañ a-taok dilemel hemañ.',
	'CATEGORY'				=> 'Rann',
	'CHOOSE_MODE'			=> 'Dibab doare ar modul',
	'CHOOSE_MODE_EXPLAIN'	=> 'Dibabet e vez an doare ma vez graet gant ar modul.',
	'CHOOSE_MODULE'			=> 'Dibab ar modul',
	'CHOOSE_MODULE_EXPLAIN'	=> 'Dibab ar restr a vo galvet gant ar modul-mañ.',
	'CREATE_MODULE'			=> 'Krouiñ ur modul nevez',

	'DEACTIVATED_MODULE'	=> 'Modul bet lakaet dizoberiant',
	'DELETE_MODULE'			=> 'Dilemel ar modul',
	'DELETE_MODULE_CONFIRM'	=> 'Ha sur oc\'h ho peus c\'hoant da zilemel ar modul-mañ ?',

	'EDIT_MODULE'			=> 'Kemm ar modul',
	'EDIT_MODULE_EXPLAIN'	=> 'Amañ e c\'hellit reiñ dilennoù ispisial evit ar modul.',

	'HIDDEN_MODULE'			=> 'Modul kuzh',

	'MODULE'					=> 'Modul',
	'MODULE_ADDED'				=> 'Ouzhpennet eo bet ar modul.',
	'MODULE_DELETED'			=> 'Dilamet eo bet ar modul.',
	'MODULE_DISPLAYED'			=> 'Diskouezet e vez ar modul-mañ',
	'MODULE_DISPLAYED_EXPLAIN'	=> 'M\'ho peus c\'hoant ma vefe implijet ar modul-mañ met ma ne vefe ket gwelet, lakait Nann amañ.',
	'MODULE_EDITED'				=> 'Kemmet eo bet ar modul.',
	'MODULE_ENABLED'			=> 'Lakaet eo bet oberiant ar modul',
	'MODULE_LANGNAME'			=> 'Anv yezh ar modul',
	'MODULE_LANGNAME_EXPLAIN'	=> 'Roit anv ar modul a vez diskouezet. Grit gant talvoud digemm ar yezh ma teu ar modul ouzh ur restr-yezh.',
	'MODULE_TYPE'				=> 'Doare ar modul',

	'NO_CATEGORY_TO_MODULE'	=> 'N\'eus ket bet tu treiñ ar Rann da Vodul. Dilamit pe dilec\'hiit an holl re dalc\'het outañ a-raok gallout ober kement-mañ.',
	'NO_MODULE'				=> 'N\'eus bet kavet modul ebet.',
	'NO_MODULE_ID'			=> 'N\'eus bet roet niverenn-anavezout ebet d\'ar modul',
	'NO_MODULE_LANGNAME'	=> 'N\'eus bet resisaet anv yezh ebet evit ar modul.',
	'NO_PARENT'				=> 'Endalc\'her ebet',

	'PARENT'				=> 'Endalc\'her',
	'PARENT_NO_EXIST'		=> 'N\'eus ket ouzh an endalc\'her.',

	'SELECT_MODULE'			=> 'Diuz ur modul',
));

?>
