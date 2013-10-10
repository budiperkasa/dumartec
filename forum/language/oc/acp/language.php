<?php
/**
*
* acp_language [Occitan]
*
* @paquetage language
* @version $Id: language.php,v 1.16 2007/10/04 15:07:24 acydburn Exp $
* @copyright (c) 2005 phpBB Group
* @license http://opensource.org/licenses/gpl-license.php GNU Public License
*
*/
/**
* CONTRIBUTORS
* Translation made by phpBB-fr.com and phpBB.biz Teams
* http://www.phpbb-fr.com
* http://www.phpbb.biz
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
	'ACP_FILES'						=> 'Fichièrs de lenga de l\'administracion',
	'ACP_LANGUAGE_PACKS_EXPLAIN'	=> 'Aicí se pòt installar/suprimir de paquets de lenga',

	'EMAIL_FILES'			=> 'Modèls de corrièls',

	'FILE_CONTENTS'				=> 'Contengut del fichièr',
	'FILE_FROM_STORAGE'			=> 'Fichièr del repertòri d\'estocatge',

	'HELP_FILES'				=> 'Fichièrs d\'ajuda',

	'INSTALLED_LANGUAGE_PACKS'	=> 'Paquets de lenga installats',
	'INVALID_LANGUAGE_PACK'		=> 'Sembla que lo paquet seleccionat es invalid. Verificatz-lo e tornatz començar lo transferiment s\'es necessari.',
	'INVALID_UPLOAD_METHOD'		=> 'Lo metòde de transferiment causit es invalid, causissètz-ne un autre.',

	'LANGUAGE_DETAILS_UPDATED'			=> 'Entresenhas de lenga mesas a jorn.',
	'LANGUAGE_ENTRIES'					=> 'Dintradas de lenga',
	'LANGUAGE_ENTRIES_EXPLAIN'			=> 'Aicí se pòt modificar las dintradas de paquet de lenga existentes o pas encara traduchas. <br /><strong>Nòta :</strong> quand lo fichièr de lenga serà modificat, las modificacions seràn enregistradas dins un repertòri separat que poiretz descargar. Las modificacions seràn pas visiblas pels utilizaires fins que remplacetz los fichièrs originals sus vòstre espaci web (en los transferissent).',
	'LANGUAGE_FILES'					=> 'Fichièrs de lenga',
	'LANGUAGE_KEY'						=> 'Clau de lenga',
	'LANGUAGE_PACK_ALREADY_INSTALLED'	=> 'Aqueste paquet de lenga es ja installat.',
	'LANGUAGE_PACK_DELETED' 			=> 'Lo paquet de lenga <strong>%s</strong> es estat suprimit. La lenga es ara per defaut sul forum pels sòcis qu\'utilizavan aqueste paquet.',
	'LANGUAGE_PACK_DETAILS'				=> 'Entresenhas del paquet',
	'LANGUAGE_PACK_INSTALLED'			=> 'Lo paquet de lenga <strong>%s</strong> es estat installat.',
	'LANGUAGE_PACK_ISO'					=> 'ISO',
	'LANGUAGE_PACK_LOCALNAME'			=> 'Nom local',
	'LANGUAGE_PACK_NAME'				=> 'Nom',
	'LANGUAGE_PACK_NOT_EXIST'			=> 'Lo paquet de lenga causit existís pas.',
	'LANGUAGE_PACK_USED_BY'				=> 'Utilizat per (robòts incluses)',
	'LANGUAGE_VARIABLE'					=> 'Variabla de lenga',
	'LANG_AUTHOR'						=> 'Autor del paquet de lenga',
	'LANG_ENGLISH_NAME'					=> 'Nom anglés',
	'LANG_ISO_CODE'						=> 'Còdi ISO',
	'LANG_LOCAL_NAME'					=> 'Nom local',

	'MISSING_LANGUAGE_FILE'		=> 'Fichièr de lenga absent : <strong style="color:red">%s</strong>',
	'MISSING_LANG_VARIABLES'	=> 'Variablas de lenga absentas',
	'MODS_FILES'				=> 'Fichièrs de lenga dels MODs',

	'NO_FILE_SELECTED'				=> 'Avètz pas especificat de fichièr.',
	'NO_LANG_ID'					=> 'Avètz pas especificat de paquet de lenga',
	'NO_REMOVE_DEFAULT_LANG'		=> 'Podètz pas suprimir lo paquet de lenga per defaut.<br />Se volètz suprimir aqueste paquet, cambiatz primièr la lenga per defaut del forum.',
	'NO_UNINSTALLED_LANGUAGE_PACKS'	=> 'Pas cap de paquet de lenga installat',

	'REMOVE_FROM_STORAGE_FOLDER'		=> 'Suprimir del repertòri d\'estocatge',

	'SELECT_DOWNLOAD_FORMAT'	=> 'Causissètz lo format de descarga',
	'SUBMIT_AND_DOWNLOAD'		=> 'Sometre e descargar lo fichièr',
	'SUBMIT_AND_UPLOAD'			=> 'Sometre e transferir lo fichièr',

	'THOSE_MISSING_LANG_FILES'			=> 'Los fichièrs de lenga seguents son absents del repertòri de lenga %s',
	'THOSE_MISSING_LANG_VARIABLES'		=> 'Las variablas de lenga seguentas son absentas del paquet <strong>%s</strong>',

	'UNINSTALLED_LANGUAGE_PACKS'	=> 'Paquets pas installats',

	'UNABLE_TO_WRITE_FILE'		=> 'Impossible d\'enregistrar lo fichièr dins %s.',
	'UPLOAD_COMPLETED'			=> 'Transferiment acabat',
	'UPLOAD_FAILED'				=> 'Lo mandadís a pas capitat per una rason desconeguda. Remplacatz lo fichièr manualament.',
	'UPLOAD_METHOD'				=> 'Metòde de transferiment',
	'UPLOAD_SETTINGS'			=> 'Paramètres de transferiment',

	'WRONG_LANGUAGE_FILE'		=> 'Lo fichièr de lenga causit es invalid.',
));

?>
