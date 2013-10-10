<?php
/**
*
* acp_database [Brezhoneg]
*
* @package language
* @version $Id: database.php,v 1.25 2007/10/04 15:07:24 acydburn Exp $
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
// 'Pagc\'he %s of %s' you can (and should) write 'Page %1$s of %2$s', this allows
// translators to re-order the output of data while ensuring it remains correct
//
// You do not need this where single placeholders are used, e.g. 'Message %d' is fine
// equally where a string contains only two placeholders which are used to wrap text
// in a url you again do not need to specify an order e.g., 'Click %sHERE%s' is fine

// Database Backup/Restore
$lang = array_merge($lang, array(
	'ACP_BACKUP_EXPLAIN'	=> 'Amañ e c\'hellit sevel eilskouerennoù-mirout ouzh an holl roadoù a denn ouzh phpBB. Gallout a rit mirout an diell bet savet gant se en teuliad <samp>store/</samp> pe pellgargañ anezhi diouzhtu. Hervez perzhioù ho servijour e vo posupl deoc\'h gwaskañ an diell-se e stummoù lies.',
	'ACP_RESTORE_EXPLAIN'	=> 'Gant kement-mañ e vo adkarget holl ziazoù phpBB adalek ur restr-mirout a oa bet savet en a-raok. Ma vez gouzañvet gant ho servijour e c\'hellit ober gant ur restr gzip pe bzip2, hag e vo diwasket diouzhtu war ar servijour. <strong>TAOLIT EVEZH</strong> Adskrivet e vo dreist forzh peseurt roadoù a zo outo evit poent. Gallout a ra an adkargañ padout pellik, na guitait ket ar bajenn-mañ keit ha ma n\'eo ket peurechu. En teuliad <samp>store</samp> e vez miret an eilskouerennoù-mirout, krouet e vezont gant poellad phpBB. Ma klaskit adkargañ ur restr n\'eo ket bet savet gant ar poellad-mañ eo posupl ma n\'ez afe ket en-dro.',

	'BACKUP_DELETE'		=> 'Diverket eo bet ar restr-mirout.',
	'BACKUP_INVALID'	=> 'N\'eo ket reizh ar restr a zo da sevel un eilskouerenn-virout outañ.',
	'BACKUP_OPTIONS'	=> 'Dilennoù an eilskoueriañ-mirout',
	'BACKUP_SUCCESS'	=> 'Krouet eo bet an eilskouerenn-virout.',
	'BACKUP_TYPE'		=> 'Doare an eilskoueriañ-mirout',

	'DATABASE'			=> 'Implijoù an diaz-titouroù',
	'DATA_ONLY'			=> 'Roadoù hepkenn',
	'DELETE_BACKUP'		=> 'Diverkañ ar restr-mirout',
	'DELETE_SELECTED_BACKUP'	=> 'Ha sur o ho peus c\'hoant da ziverkañ ar restr-mirout bet savet ?',
	'DESELECT_ALL'		=> 'Diziuz an holl',
	'DOWNLOAD_BACKUP'	=> 'Pellgargañ ur restr-mirout',

	'FILE_TYPE'			=> 'Doare ar restr',
	'FULL_BACKUP'		=> 'Leun',

	'RESTORE_FAILURE'		=> 'Ur fazi a zo er restr-mirout moarvat.',
	'RESTORE_OPTIONS'		=> 'Dilennoù an adkargañ',
	'RESTORE_SUCCESS'		=> 'Adkarget eo bet an diaz-titouroù.<br /><br />Rankout a rafe ho forom bezañ evel d\'ar mare ma oa bet graet an eilskouerenn-virout.',

	'SELECT_ALL'			=> 'Diuz an holl',
	'SELECT_FILE'			=> 'Diuz ur restr',
	'START_BACKUP'			=> 'Kregiñ gant an eilskoueriañ-mirout',
	'START_RESTORE'			=> 'Kregiñ gant an adkargañ',
	'STORE_AND_DOWNLOAD'	=> 'Mirout ha pellgargañ',
	'STORE_LOCAL'			=> 'Mirout ar restr amañ',
	'STRUCTURE_ONLY'		=> 'An aozadur hepken',

	'TABLE_SELECT'		=> 'Diuz un diaz',
	'TABLE_SELECT_ERROR'=> 'Un diaz d\'an nebeutañ eo dav deoc\'h diuz.',
));

?>
