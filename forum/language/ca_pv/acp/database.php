<?php
/**
*
* acp_database [Catalan (Valencian)]
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

// Database Backup/Restore
$lang = array_merge($lang, array(
	'ACP_BACKUP_EXPLAIN'	=> 'Ací podeu fer una còpia de seguretat de les dades del vostre fòrum. Podeu emmagatzemar la còpia feta al directori <samp>magatzem/</samp> o descarregar-lo directament. Segons la configuració del vostre servidor podreu o no descarregar-lo en un format comprimit.',
	'ACP_RESTORE_EXPLAIN'	=> 'Això restaurarà les teules phpBB des d\'un fitxer desart. Si el vostre servidor suporta gzip o bzip2, podreu carregar el fitxer comprimit i automàticament es descomprimirà. <strong>COMPTE</strong> Això sobreescriurà les dades existents. El procés de restauració trigarà un temps, no tanqueu ni canvieu la pàgina mentre no acaba el procés. Les còpies de seguretat s\'emmagatzemen a <samp>magatzem/</samp>.',

	'BACKUP_DELETE'		=> 'S\'ha esborrat el fitxer de còpia de seguretat.',
	'BACKUP_INVALID'	=> 'El fitxer seleccionat com a còpia de seguretat no és vàlid.',
	'BACKUP_OPTIONS'	=> 'Opcions de còpia de seguretat',
	'BACKUP_SUCCESS'	=> 'S\'ha creat la còpia de seguretat.',
	'BACKUP_TYPE'		=> 'Tipus de còpia de seguretat',

	'DATABASE'			=> 'Utilitats de base de dades',
	'DATA_ONLY'			=> 'Només dades',
	'DELETE_BACKUP'		=> 'Esborra còpia de seguretat',
	'DELETE_SELECTED_BACKUP'	=> 'Esteu segurs que voleu esborrar la còpia de seguretat seleccionada?',
	'DESELECT_ALL'		=> 'Deselecciona-ho tot',
	'DOWNLOAD_BACKUP'	=> 'Descarrega còpia de seguretat',

	'FILE_TYPE'			=> 'Tipus de fitxer',
	'FULL_BACKUP'		=> 'Complet',

	'RESTORE_FAILURE'		=> 'Potser el fitxer de còpia de seguretat és corrupte',
	'RESTORE_OPTIONS'		=> 'Opcions de restauració',
	'RESTORE_SUCCESS'		=> 'S\'ha restaurat la base de dades.<br /><br />El vostre fòrum es recuperarà al moment al qual es va fer la còpia de seguretat.',

	'SELECT_ALL'			=> 'Selecciona-ho tot',
	'SELECT_FILE'			=> 'Selecciona un fitxer',
	'START_BACKUP'			=> 'Inicia còpia de seguretat',
	'START_RESTORE'			=> 'Inicia restauració',
	'STORE_AND_DOWNLOAD'	=> 'Emmagatzem i descarrega',
	'STORE_LOCAL'			=> 'Emmagatzema el fitxer localment',
	'STRUCTURE_ONLY'		=> 'Només estructura',

	'TABLE_SELECT'		=> 'Selecció de taula',
	'TABLE_SELECT_ERROR'=> 'Heu de seleccionar almenys una taula.',
));

?>
