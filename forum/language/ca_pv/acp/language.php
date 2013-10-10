<?php
/**
*
* acp_language [Catalan (Valencian)]
*
* @package language
* @version $Id: common.php,v 1.180 2007/05/20 14:01:46 acydburn Exp $
* @copyright (c) 2005 phpBB Group 
* @license http://opensource.org/licenses/gpl-license.php GNU Public License 
*
* Translated by//Traduït per Pau Iranzo <pau@somgnu.cat>
* Team//Equip de traducció de SomGNU <info@somgnu.cat>
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
	'ACP_FILES'						=> 'Gestiona paquets de llengua',
	'ACP_LANGUAGE_PACKS_EXPLAIN'	=> 'Ací podeu instal·lar/eliminar paquets de llengua.',

	'EMAIL_FILES'			=> 'Plantilles de correu',

	'FILE_CONTENTS'				=> 'Continguts d\'ajuda',
	'FILE_FROM_STORAGE'			=> 'Fitxer des de la carpeta magatzem',

	'HELP_FILES'				=> 'Fitxers d\'ajuda',

	'INSTALLED_LANGUAGE_PACKS'	=> 'Paquets de llengua instal·lats',
	'INVALID_LANGUAGE_PACK'		=> 'El paquet seleccionat no és vàlid. Comproveu-lo i carregueu-lo novament si és necessari.',
	'INVALID_UPLOAD_METHOD'		=> 'El mode de càrrega seleccionat no és vàlid, proveu amb un diferent.',

	'LANGUAGE_DETAILS_UPDATED'			=> 'S\'han actualitzats els detalls de la llengua.',
	'LANGUAGE_ENTRIES'					=> 'Entrades de llengua',
	'LANGUAGE_ENTRIES_EXPLAIN'			=> 'Ací podeu canviar entrades existents del llenguatge actual per les vostres pròpies.<br /><strong>Nota:</strong> Un cop canviat el fitxer, els canvis es desaran a una altra carpeta per tal que pogueu descarregar-lo. Els canvis no seran visibles als usuaris fins que no sobreescriviu el fitxer original.',
	'LANGUAGE_FILES'					=> 'Fitxers de llengua',
	'LANGUAGE_KEY'						=> 'Variable',
	'LANGUAGE_PACK_ALREADY_INSTALLED'	=> 'Aquest paquet de llengua ja es troba instal·lat.',
	'LANGUAGE_PACK_DELETED'				=> 'S\'ha esborrat el paquet de llengua <strong>%s</strong>. Els usuaris que l\'estigueren fent servir, ara tindran el paquet de llengua per defecte.',
	'LANGUAGE_PACK_DETAILS'				=> 'Detalls del paquet de llengua',
	'LANGUAGE_PACK_INSTALLED'			=> 'S\'han instal·lat el paquet de llengua <strong>%s</strong>.',
	'LANGUAGE_PACK_ISO'					=> 'ISO',
	'LANGUAGE_PACK_LOCALNAME'			=> 'Nom local',
	'LANGUAGE_PACK_NAME'				=> 'Nom',
	'LANGUAGE_PACK_NOT_EXIST'			=> 'El paquet de llengua seleccionat no existeix.',
	'LANGUAGE_PACK_USED_BY'				=> 'Fet servit per (incloent robots)',
	'LANGUAGE_VARIABLE'					=> 'Clau de llengua',
	'LANG_AUTHOR'						=> 'Autor del paquet de llengua',
	'LANG_ENGLISH_NAME'					=> 'Nom anglès',
	'LANG_ISO_CODE'						=> 'Codi ISO',
	'LANG_LOCAL_NAME'					=> 'Nom local',

	'MISSING_LANGUAGE_FILE'		=> 'No es troba el fitxer: <strong style="color:red">%s</strong>',
	'MISSING_LANG_VARIABLES'	=> 'No es troben variables del llenguatge',
	'MODS_FILES'				=> 'Fitxers de llengua MODs (modificats)',

	'NO_FILE_SELECTED'				=> 'No heu especificat un fitxer de llengua.',
	'NO_LANG_ID'					=> 'No heu especificat un paquet de llengua.',
	'NO_REMOVE_DEFAULT_LANG'		=> 'No podeu esborrar el paquet de llengua per defecte.<br />Si voleu esborrar-lo, haureu de canviar abans la llengua per defecte del fòrum.',
	'NO_UNINSTALLED_LANGUAGE_PACKS'	=> 'No hi ha paquets de llengua desinstal·lats',

	'REMOVE_FROM_STORAGE_FOLDER'		=> 'Esborra de la carpeta magatzem',

	'SELECT_DOWNLOAD_FORMAT'	=> 'Seleccioneu el format de descàrrega',
	'SUBMIT_AND_DOWNLOAD'		=> 'Envia i descarrega el fitxer',
	'SUBMIT_AND_UPLOAD'			=> 'Envia i carrega el fitxer',

	'THOSE_MISSING_LANG_FILES'			=> 'Els següents fitxers de llengua no es troben a la %s carpeta de llengua',
	'THOSE_MISSING_LANG_VARIABLES'		=> 'Les següents variables de llengua no es troben al <strong>%s</strong> paquet',

	'UNINSTALLED_LANGUAGE_PACKS'	=> 'Paquets de llengua desinstal·lats',

	'UNABLE_TO_WRITE_FILE'		=> 'No s\'ha pogut escriure el fitxer a %s.',
	'UPLOAD_COMPLETED'			=> 'S\'ha completat la càrrega.',
	'UPLOAD_FAILED'				=> 'La càrrega ha fallat per raons desconegudes. Haureu de canviar el fitxer concret manualment.',
	'UPLOAD_METHOD'				=> 'Mode de càrrega',
	'UPLOAD_SETTINGS'			=> 'Paràmetres de càrrega',

	'WRONG_LANGUAGE_FILE'		=> 'El fitxer de llengua seleccionat no és vàlid.',
));

?>
