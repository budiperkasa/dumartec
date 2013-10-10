<?php
/**
*
* acp_language [English]
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
	'ACP_FILES'						=> 'ACP keelefailid',
	'ACP_LANGUAGE_PACKS_EXPLAIN'	=> 'Siin on sul v&otilde;imalik paigaldada/eemaldada keelepakke.',

	'EMAIL_FILES'			=> 'E-posti mallid',

	'FILE_CONTENTS'				=> 'Faili sisukord',
	'FILE_FROM_STORAGE'			=> 'Fail hoiuskaustast(kataloogist)',

	'HELP_FILES'				=> 'Abi failid',

	'INSTALLED_LANGUAGE_PACKS'	=> 'Paigaldatud keelepakid',
	'INVALID_LANGUAGE_PACK'		=> 'Valitud keele pakk tundub mitte sobivat. Palun kontrolli &uuml;le see keelepakk ja lae uuesti &uuml;lesse kui on vajalik.',
	'INVALID_UPLOAD_METHOD'		=> 'Valitud &uuml;leslaadimise meetod ei sobi, palun vali m&otilde;ni muu meetod.',

	'LANGUAGE_DETAILS_UPDATED'			=> 'Keele detailid on edukalt uuendatud.',
	'LANGUAGE_ENTRIES'					=> 'Keele sisestused',
	'LANGUAGE_ENTRIES_EXPLAIN'			=> 'Siin on sul v&otilde;imalik muuta olemasoleva keelepaketi sisestusi v&otilde;i mitte-t&otilde;lgitud sisestusi.<br /><strong>M&auml;rge:</strong> Kui sa muudad oma keelefaili, siis see fail pannakse eraldi kausta sinu jaoks allalaadimiseks. Muutused ei ole n&auml;ha enne kasutajatele, kui sa oled selle faili sealt manuaalselt oma keele kausta &uuml;leslaadinud.',
	'LANGUAGE_FILES'					=> 'Keelefailid',
	'LANGUAGE_KEY'						=> 'Keele v&otilde;ti',
	'LANGUAGE_PACK_ALREADY_INSTALLED'	=> 'See keelepakk on juba paigaldatud.',
	'LANGUAGE_PACK_DELETED'				=> 'Keelepakk <strong>%s</strong> on edukalt eemaldatud. K&otilde;ikide kasutajate keel, kellel oli valitud see keel, on asendatud vaikimisi keelega.',
	'LANGUAGE_PACK_DETAILS'				=> 'Keelepaki detailid',
	'LANGUAGE_PACK_INSTALLED'			=> 'Keelepakk <strong>%s</strong> on edukalt paigaldatud.',
	'LANGUAGE_PACK_ISO'					=> 'ISO',
	'LANGUAGE_PACK_LOCALNAME'			=> 'Lokaalne nimi',
	'LANGUAGE_PACK_NAME'				=> 'Nimi',
	'LANGUAGE_PACK_NOT_EXIST'			=> 'Valitud keelepakki pole olemas.',
	'LANGUAGE_PACK_USED_BY'				=> 'Kasutatud: (k.a robotid)',
	'LANGUAGE_VARIABLE'					=> 'Keele muutuja',
	'LANG_AUTHOR'						=> 'Keelepaki autor',
	'LANG_ENGLISH_NAME'					=> 'Inglisekeelne nimi',
	'LANG_ISO_CODE'						=> 'ISO kood',
	'LANG_LOCAL_NAME'					=> 'Lokaalne nimi',

	'MISSING_LANGUAGE_FILE'		=> 'Puudub keele fail: <strong style="color:red">%s</strong>',
	'MISSING_LANG_VARIABLES'	=> 'Puuduvad keele muutujad',
	'MODS_FILES'				=> 'MODide keele failid',

	'NO_FILE_SELECTED'				=> 'Sa pole valinud keelefaili.',
	'NO_LANG_ID'					=> 'Sa pole valinud keelepakki.',
	'NO_REMOVE_DEFAULT_LANG'		=> 'Sa pole v&otilde;imeline eemaldama vaikimisi seatud keelepakki.<br />Kui sa tahad eemaldada seda keelepakki, vaheta enne oma foorumi vaikimisi seatud keel.',
	'NO_UNINSTALLED_LANGUAGE_PACKS'	=> 'Pole &uuml;htegi eemaldatud keelepakki',

	'REMOVE_FROM_STORAGE_FOLDER'		=> 'Eemalda hoiuskaust(kataloog)',

	'SELECT_DOWNLOAD_FORMAT'	=> 'Vali allalaadimise formaat',
	'SUBMIT_AND_DOWNLOAD'		=> 'Saada &auml;ra ja lae alla fail',
	'SUBMIT_AND_UPLOAD'			=> 'Saada &auml;ra ja lae &uuml;les fail',

	'THOSE_MISSING_LANG_FILES'			=> 'J&auml;rgnevad keelefailid puuduvad %s keele kaustas(kataloogis)',
	'THOSE_MISSING_LANG_VARIABLES'		=> 'J&auml;rgnevad keele muutujad puuduvad <strong>%s</strong> keelepakis',

	'UNINSTALLED_LANGUAGE_PACKS'	=> 'Eemaldatud keelepakid',

	'UNABLE_TO_WRITE_FILE'		=> 'Faili ei saa kirjutada &uuml;mber: %s.',
	'UPLOAD_COMPLETED'			=> '&Uuml;leslaadimine on edukalt l&otilde;petatud.',
	'UPLOAD_FAILED'				=> '&Uuml;leslaadimine nurjus tundmatutel p&otilde;hjustel. Sa pead asendama selle faili k&auml;sitsi.',
	'UPLOAD_METHOD'				=> '&Uuml;leslaadimise meetod',
	'UPLOAD_SETTINGS'			=> '&Uuml;leslaadimise seaded',

	'WRONG_LANGUAGE_FILE'		=> 'Valitud keelefail ei sobi.',
));

?>