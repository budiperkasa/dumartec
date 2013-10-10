<?php
/**
*
* viewtopic [Catalan (Valencian)]
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
	'ATTACHMENT'						=> 'Adjunt',
	'ATTACHMENT_FUNCTIONALITY_DISABLED'	=> 'La funció per poder adjuntar arxius està desactivada.',

	'BOOKMARK_ADDED'		=> 'Bookmarked topic successfully.',
	'BOOKMARK_REMOVED'		=> 'Removed bookmarked topic successfully.',
	'BOOKMARK_TOPIC'		=> 'Bookmark topic',
	'BOOKMARK_TOPIC_REMOVE'	=> 'Remove from bookmarks',
	'BUMPED_BY'				=> 'Last bumped by %1$s on %2$s.',
	'BUMP_TOPIC'			=> 'Bump topic',

	'CODE'					=> 'Codi',

	'DELETE_TOPIC'			=> 'Esborra el tema',
	'DOWNLOAD_NOTICE'		=> 'No teniu els permisos necessaris per veure els adjunts d\'aquest missatge.',

	'EDITED_TIMES_TOTAL'	=> 'Darrera edició feta per %1$s el %2$s, editat %3$d vegades en total.',
	'EDITED_TIME_TOTAL'		=> 'Darrera edició feta per %1$s on %2$s, editat %3$d vegada en total.',
	'EMAIL_TOPIC'			=> 'E-mail friend',
	'ERROR_NO_ATTACHMENT'	=> 'The selected attachment does not exist anymore.',

	'FILE_NOT_FOUND_404'	=> 'The file <strong>%s</strong> does not exist.',
	'FORK_TOPIC'			=> 'Copia el tema',

	'LINKAGE_FORBIDDEN'		=> 'You are not authorised to view, download or link from/to this site.',
	'LOGIN_NOTIFY_TOPIC'	=> 'You have been notified about this topic, please login to view it.',
	'LOGIN_VIEWTOPIC'		=> 'The board requires you to be registered and logged in to view this topic.',

	'MAKE_ANNOUNCE'				=> 'Canvia a “Anunci”',
	'MAKE_GLOBAL'				=> 'Canvia a “Global”',
	'MAKE_NORMAL'				=> 'Canvia a “Tema normal”',
	'MAKE_STICKY'				=> 'Canvia a “Recurrent”',
	'MAX_OPTIONS_SELECT'		=> 'You may select up to <strong>%d</strong> options',
	'MAX_OPTION_SELECT'			=> 'You may select <strong>1</strong> option',
	'MISSING_INLINE_ATTACHMENT'	=> 'El fitxer adjunt <strong>%s</strong> ja no està disponible',
	'MOVE_TOPIC'				=> 'Moure el tema',

	'NO_ATTACHMENT_SELECTED'=> 'No heu sel·leccionat cap adjunt per descarregar o veure.',
	'NO_NEWER_TOPICS'		=> 'There are no newer topics in this forum.',
	'NO_OLDER_TOPICS'		=> 'There are no older topics in this forum.',
	'NO_UNREAD_POSTS'		=> 'There are no new unread posts for this topic.',
	'NO_VOTE_OPTION'		=> 'You must specify an option when voting.',
	'NO_VOTES'				=> 'Sense vots',

	'POLL_ENDED_AT'			=> 'Poll ended at %s',
	'POLL_RUN_TILL'			=> 'Poll runs till %s',
	'POLL_VOTED_OPTION'		=> 'Heu votat aquesta opció',
	'PRINT_TOPIC'			=> 'Vista d\'impressió',

	'QUICK_MOD'				=> 'Eines de moderació ràpida',
	'QUOTE'					=> 'Cita',

	'REPLY_TO_TOPIC'		=> 'Respon al tema',
	'RETURN_POST'			=> '%sTorna al missatge%s',

	'SUBMIT_VOTE'			=> 'Envia el vot',

	'TOTAL_VOTES'			=> 'Vots totals',

	'UNLOCK_TOPIC'			=> 'Desbloqueja el tema',

	'VIEW_INFO'				=> 'Detalls del missatge',
	'VIEW_NEXT_TOPIC'		=> 'Tema següent',
	'VIEW_PREVIOUS_TOPIC'	=> 'Tema anterior',
	'VIEW_RESULTS'			=> 'Veure resultats',
	'VIEW_TOPIC_POST'		=> '1 missatge',
	'VIEW_TOPIC_POSTS'		=> '%d missatges',
	'VIEW_UNREAD_POST'		=> 'Primer missatge sense llegir',
	'VISIT_WEBSITE'			=> 'WWW',
	'VOTE_SUBMITTED'		=> 'El vostre vot s\'ha enviat.',
	'VOTE_CONVERTED'		=> 'No es permet el canvi de vot en enquestes convertides des d\'un altre tipus de fòrum.',

));

?>
