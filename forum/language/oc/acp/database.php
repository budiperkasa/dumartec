<?php
/** 
*
* acp_database [Occitan]
*
* @package language
* @version $Id: database.php,v 1.25 2007/10/04 15:07:24 acydburn Exp $
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

// Database Backup/Restore
$lang = array_merge($lang, array(	
	'ACP_BACKUP_EXPLAIN'	=> 'Ici, vous pouvez sauvegarder les données de vòstre forum. Podètz estocar l\'archive de sauvegarde dins vòstre repertòri <samp>store/</samp> o lo descargar. Suivant vòstre configuration, vous pouvez utiliser différents modes de compression.',
	'ACP_RESTORE_EXPLAIN'	=> 'Podètz procéder à una restauration de vòstre forum à partir d\'un fichièr de sauvegarde. Si vòstre servidor lo permet, vous pouvez utiliser la compression gzip o bzip2, lo fichièr serà automatiquement décompressé. <strong><color=red>ATTENTION: </color></strong> Cette opération écrase toutes les données existantes. Lo processus peut prendre del temps, ne quittez pas cette page avant la fin de la restauration. Les sauvegardes sont stockées dins lo repertòri <samp>store/</samp> e sont supposées èsser générées per la fonctionnalité de sauvegarde de phpBB. La restauration de sauvegardes non créées per phpBB peut ne pas fonctionner.',
	
	'BACKUP_DELETE'		=> 'Lo fichièr de sauvegarde a été effacé.',
	'BACKUP_INVALID'	=> 'Fichier de sauvegarde invalide.',
	'BACKUP_OPTIONS'	=> 'Options de sauvegarde',
	'BACKUP_SUCCESS'	=> 'Lo fichièr de sauvegarde a été créé.',
	'BACKUP_TYPE'		=> 'Type de sauvegarde',

	'DATABASE'			=> 'Utilitaires de base de données',
	'DATA_ONLY'			=> 'Données seulement',
	'DELETE_BACKUP'		=> 'Effacer la sauvegarde',
	'DELETE_SELECTED_BACKUP'	=> 'Etes-vous sûr de vouloir suprimir la sauvegarde de la base de données ?',
	'DESELECT_ALL'		=> 'Tout désélectionner',
	'DOWNLOAD_BACKUP'	=> 'Descargar la sauvegarde',

	'FILE_TYPE'			=> 'Type de fichièr',
	'FULL_BACKUP'		=> 'Complète',

	'RESTORE_FAILURE'		=> 'Lo fichièr de sauvegarde est peut-èsser corrompu.',
	'RESTORE_OPTIONS'		=> 'Options de restauration',
	'RESTORE_SUCCESS'		=> 'La base de données a été restaurée.<br /><br />Vòstre forum devrait èsser tel qu\'il l\'était avant la sauvegarde.',

	'SELECT_ALL'			=> 'Tout seleccionar',
	'SELECT_FILE'			=> 'Seleccionar un fichièr',
	'START_BACKUP'			=> 'Démarrer la sauvegarde',
	'START_RESTORE'			=> 'Démarrer la restauration',
	'STORE_AND_DOWNLOAD'	=> 'Stocker e descargar',
	'STORE_LOCAL'			=> 'Stocker lo fichièr',
	'STRUCTURE_ONLY'		=> 'Structure seule',

	'TABLE_SELECT'		=> 'Sélection de la table	',
	'TABLE_SELECT_ERROR'=> 'Debètz seleccionar al mens una table.',
));

 ?>
