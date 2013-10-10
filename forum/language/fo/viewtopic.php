<?php
/**
*
* viewtopic.php [Faroese]
*
* @package language
* @version $Id: $
* @copyright (c) 2008 phpBB Group
* @author 2008-02-25 - VV Miðlar
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
	'ATTACHMENT'	=> 'Viðheft fíla',
	'ATTACHMENT_FUNCTIONALITY_DISABLED'	=> 'Viðhefting av fílum er sløkt.',
	'BOOKMARK_ADDED'	=> 'Bookmarked topic successfully.',
	'BOOKMARK_REMOVED'	=> 'Removed bookmarked topic successfully.',
	'BOOKMARK_TOPIC'	=> 'Bookmark topic',
	'BOOKMARK_TOPIC_REMOVE'	=> 'Remove from bookmarks',
	'BUMPED_BY'	=> 'Last bumped by %1$s on %2$s.',
	'BUMP_TOPIC'	=> 'Bump topic',
	'CODE'	=> 'kota',
	'DELETE_TOPIC'	=> 'Strika evni',
	'DOWNLOAD_NOTICE'	=> 'You do not have the required permissions to view the files attached to this post.',
	'EDITED_TIMES_TOTAL'	=> 'Last edited by %1$s on %2$s, edited %3$d times in total.',
	'EDITED_TIME_TOTAL'	=> 'Last edited by %1$s on %2$s, edited %3$d time in total.',
	'EMAIL_TOPIC'	=> 'Send til ein vin',
	'ERROR_NO_ATTACHMENT'	=> 'The selected attachment does not exist anymore.',
	'FILE_NOT_FOUND_404'	=> 'The file <strong>%s</strong> does not exist.',
	'FORK_TOPIC'	=> 'Kopiera evni',
	'LINKAGE_FORBIDDEN'	=> 'You are not authorised to view, download or link from/to this site.',
	'LOGIN_NOTIFY_TOPIC'	=> 'You have been notified about this topic, please login to view it.',
	'LOGIN_VIEWTOPIC'	=> 'The board requires you to be registered and logged in to view this topic.',
	'MAKE_ANNOUNCE'	=> 'Change to “Announcement”',
	'MAKE_GLOBAL'	=> 'Change to “Global”',
	'MAKE_NORMAL'	=> 'Change to “Standard Topic”',
	'MAKE_STICKY'	=> 'Change to “Sticky”',
	'MAX_OPTIONS_SELECT'	=> 'You may select up to <strong>%d</strong> options',
	'MAX_OPTION_SELECT'	=> 'You may select <strong>1</strong> option',
	'MISSING_INLINE_ATTACHMENT'	=> 'The attachment <strong>%s</strong> is no longer available',
	'MOVE_TOPIC'	=> 'Flyt evni',
	'NO_ATTACHMENT_SELECTED'	=> 'You haven’t selected an attachment to download or view.',
	'NO_NEWER_TOPICS'	=> 'There are no newer topics in this forum.',
	'NO_OLDER_TOPICS'	=> 'There are no older topics in this forum.',
	'NO_UNREAD_POSTS'	=> 'There are no new unread posts for this topic.',
	'NO_VOTE_OPTION'	=> 'You must specify an option when voting.',
	'NO_VOTES'	=> 'Ongar atkvøður',
	'POLL_ENDED_AT'	=> 'Poll ended at %s',
	'POLL_RUN_TILL'	=> 'Poll runs till %s',
	'POLL_VOTED_OPTION'	=> 'You voted for this option',
	'PRINT_TOPIC'	=> 'Print view',
	'QUICK_MOD'	=> 'Quick-mod tools',
	'QUOTE'	=> 'Sitera',
	'REPLY_TO_TOPIC'	=> 'Svara aftur til evni',
	'RETURN_POST'	=> '%sReturn to the post%s',
	'SUBMIT_VOTE'	=> 'Atkvøð',
	'TOTAL_VOTES'	=> 'Atkvøður í alt',
	'UNLOCK_TOPIC'	=> 'Lat evni upp',
	'VIEW_INFO'	=> 'Boð upplýsingar',
	'VIEW_NEXT_TOPIC'	=> 'Næsta evni',
	'VIEW_PREVIOUS_TOPIC'	=> 'Fyrra evni',
	'VIEW_RESULTS'	=> 'Vís úrslit',
	'VIEW_TOPIC_POST'	=> '1 boð',
	'VIEW_TOPIC_POSTS'	=> '%d boð',
	'VIEW_UNREAD_POST'	=> 'First unread post',
	'VISIT_WEBSITE'	=> 'WWW',
	'VOTE_SUBMITTED'	=> 'Tín atkvøða er skrásett.',
	'VOTE_CONVERTED'	=> 'Changing votes is not supported for converted polls.',
));

?>