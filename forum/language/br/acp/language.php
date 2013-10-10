<?php
/**
*
* acp_language [Brezhoneg]
*
* @package language
* @version $Id: language.php,v 1.16 2007/10/04 15:07:24 acydburn Exp $
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
	'ACP_FILES'						=> 'Merañ ar restroù yezh',
	'ACP_LANGUAGE_PACKS_EXPLAIN'	=> 'Amañ e c\'hellit staliañ pe distaliañ pakadoù yezh.',

	'EMAIL_FILES'			=> 'Patromoù ar posteloù',

	'FILE_CONTENTS'				=> 'Endalc\'had ar restroù',
	'FILE_FROM_STORAGE'			=> 'Restroù o tont ouzh an teuliad-mirout',

	'HELP_FILES'				=> 'Restroù skoazell',

	'INSTALLED_LANGUAGE_PACKS'	=> 'Pakadoù yezh bet staliet',
	'INVALID_LANGUAGE_PACK'		=> 'Ne seblant ket ar pakad-yezh bet diuzet ganeoc\'h bezañ reizh. Gwiriit anezhañ mar-plij, ha pellgasit anezhañ en-dro ma vez ret.',
	'INVALID_UPLOAD_METHOD'		=> 'The selected upload method is not valid, please choose a different method.',

	'LANGUAGE_DETAILS_UPDATED'			=> 'Kemmet eo bet titouroù ar yezhoù.',
	'LANGUAGE_ENTRIES'					=> 'Doneoù ar yezhoù',
	'LANGUAGE_ENTRIES_EXPLAIN'			=> 'Amañ e c\'hellit cheñch frazennoù diouzh ar pakad yezh a rit gantañ, pe ouzhpennañ lod n\'nt ket bet troet c\'hoazh.<br /><strong>Notennit :</strong> Ur wech bet kemmet ar restr yezh ganeoc\'h e vo miret ar restr kemmet en un teuliad dizalc\'h, deoc\'h da bellgargañ anezhañ. Ne vo ket gwelet ar c\'hemm gant an izili keit ha ma ne vo ket bet erlec\'hiet an teuliad-orin gant an teuliad kemmet ganeoc\'h, dre bellgas ho teuliad nevez.',
	'LANGUAGE_FILES'					=> 'Restroù yezh',
	'LANGUAGE_KEY'						=> 'Alc\'hwez ar yezh',
	'LANGUAGE_PACK_ALREADY_INSTALLED'	=> 'Staliet eo ar pakad-yezh c\'hoazh.',
	'LANGUAGE_PACK_DELETED'				=> 'Tennet eo bet ar pakad yezh <strong>%s</strong>. An holl izili a rae gant ar yezh-mañ a zo bet lakaet yezh dre ziouer ar forom dezho.',
	'LANGUAGE_PACK_DETAILS'				=> 'Dilennoù ar pakad-yezh',
	'LANGUAGE_PACK_INSTALLED'			=> 'Staliet eo bet ar pakad-yezh <strong>%s</strong>.',
	'LANGUAGE_PACK_ISO'					=> 'ISO',
	'LANGUAGE_PACK_LOCALNAME'			=> 'Anv lec\'hel',
	'LANGUAGE_PACK_NAME'				=> 'Anv',
	'LANGUAGE_PACK_NOT_EXIST'			=> 'N\'eus ket ouzh ar pakad yezh bet diuzet ganeoc\'h.',
	'LANGUAGE_PACK_USED_BY'				=> 'Implijet gant (o kontañ ar robotoù)',
	'LANGUAGE_VARIABLE'					=> 'Talvoud ar yezh',
	'LANG_AUTHOR'						=> 'Aozer ar pakad-yezh',
	'LANG_ENGLISH_NAME'					=> 'Anv saozneg',
	'LANG_ISO_CODE'						=> 'kod ISO',
	'LANG_LOCAL_NAME'					=> 'Anv lec\'hel',

	'MISSING_LANGUAGE_FILE'		=> 'Restr-yezh a vank : <strong style="color:red">%s</strong>',
	'MISSING_LANG_VARIABLES'	=> 'Mankout a ra talvoudoù ar restr-yezh',
	'MODS_FILES'				=> 'Restroù-yezh ar MODoù',

	'NO_FILE_SELECTED'				=> 'N\'ho peus resisaet restr-yezh ebet.',
	'NO_LANG_ID'					=> 'N\'ho peus resiaset pakad-yezh ebet.',
	'NO_REMOVE_DEFAULT_LANG'		=> 'N\'hallit ket dilemel ar pakad-yezh dre-ziouer.<br /> M\'ho peus c\'hoant da zilemel ar pakad-yezh-mañ eo dav deoc\'h ober ma ne vo ket an hini dre-ziouer ken en a-raok.',
	'NO_UNINSTALLED_LANGUAGE_PACKS'	=> 'N\'eus pakad-yezh ebet ha na vefe ket staliet',

	'REMOVE_FROM_STORAGE_FOLDER'		=> 'Tennañ diouzh an teuliad-mirout',

	'SELECT_DOWNLOAD_FORMAT'	=> 'Diuz ur stumm evit ar pellgargañ',
	'SUBMIT_AND_DOWNLOAD'		=> 'Enrollañ ha pellgargañ ar restr',
	'SUBMIT_AND_UPLOAD'			=> 'Enrollañ ha pellgas ar restr',

	'THOSE_MISSING_LANG_FILES'			=> 'Mankout a ra ar restroù-yezh da-heul ouzh teuliad ar yezh %s',
	'THOSE_MISSING_LANG_VARIABLES'		=> 'Mankout a ra an talvoudoù da heul ouzh ar pakad-yezh <strong>%s</strong>',

	'UNINSTALLED_LANGUAGE_PACKS'	=> 'Pakadoù yezh ha n\'int ket bet staliet',

	'UNABLE_TO_WRITE_FILE'		=> 'N\'eus ket ar restr gallet bezañ skrivet e %s.',
	'UPLOAD_COMPLETED'			=> 'Kaset eo bet ar pellgas da benn.',
	'UPLOAD_FAILED'				=> 'Ur fazi a zo bet er pellgas evit abegoù dianav. Dav eo deoc\'h erlec\'hiañ ho-unan ar restroù da gemm.',
	'UPLOAD_METHOD'				=> 'Hentenn pellgas',
	'UPLOAD_SETTINGS'			=> 'Dilennoù ar pellgas',

	'WRONG_LANGUAGE_FILE'		=> 'Direizh eo ar restr-yezh bet diuzet.',
));

?>
