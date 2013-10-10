<?php
/**
*
* viewtopic.php [Urdu]
*
* @package language
* @version $Id: $
* @copyright (c) 2008 phpBB Group
* @author 2008-04-23 - phpBB Group
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
	'ATTACHMENT'	=> 'Attachment',
	'ATTACHMENT_FUNCTIONALITY_DISABLED'	=> 'The attachments feature has been disabled.',
	'BOOKMARK_ADDED'	=> 'Bookmarked topic successfully.',
	'BOOKMARK_REMOVED'	=> 'Removed bookmarked topic successfully.',
	'BOOKMARK_TOPIC'	=> 'Bookmark topic',
	'BOOKMARK_TOPIC_REMOVE'	=> 'Remove from bookmarks',
	'BUMPED_BY'	=> 'Last bumped by %1$s on %2$s.',
	'BUMP_TOPIC'	=> 'Bump topic',
	'CODE'	=> 'ڪوڊ',
	'DELETE_TOPIC'	=> 'موضوع ختم ڪريو',
	'DOWNLOAD_NOTICE'	=> 'You do not have the required permissions to view the files attached to this post.',
	'EDITED_TIMES_TOTAL'	=> 'Last edited by %1$s on %2$s, edited %3$d times in total.',
	'EDITED_TIME_TOTAL'	=> 'Last edited by %1$s on %2$s, edited %3$d time in total.',
	'EMAIL_TOPIC'	=> 'E-mail friend',
	'ERROR_NO_ATTACHMENT'	=> 'The selected attachment does not exist anymore.',
	'FILE_NOT_FOUND_404'	=> 'The file <strong>%s</strong> does not exist.',
	'FORK_TOPIC'	=> 'Copy topic',
	'LINKAGE_FORBIDDEN'	=> 'You are not authorised to view, download or link from/to this site.',
	'LOGIN_NOTIFY_TOPIC'	=> 'You have been notified about this topic, please login to view it.',
	'LOGIN_VIEWTOPIC'	=> 'The board requires you to be registered and logged in to view this topic.',
	'MAKE_ANNOUNCE'	=> 'اعلان ۾ بدليو',
	'MAKE_GLOBAL'	=> 'Change to “Global”',
	'MAKE_NORMAL'	=> 'عام موضوع ۾ بدليو',
	'MAKE_STICKY'	=> 'اهم ترين ۾ بدليو',
	'MAX_OPTIONS_SELECT'	=> 'You may select up to <strong>%d</strong> options',
	'MAX_OPTION_SELECT'	=> 'You may select <strong>1</strong> option',
	'MISSING_INLINE_ATTACHMENT'	=> 'The attachment <strong>%s</strong> is no longer available',
	'MOVE_TOPIC'	=> 'موضوع منتقل ڪريو',
	'NO_ATTACHMENT_SELECTED'	=> 'You haven’t selected an attachment to download or view.',
	'NO_NEWER_TOPICS'	=> 'هن فورم ۾ ڪوبه نئون موضوع نه آهي',
	'NO_OLDER_TOPICS'	=> 'هن فورم ۾ ڪوبه پراڻو موضوع نه آهي',
	'NO_UNREAD_POSTS'	=> 'There are no new unread posts for this topic.',
	'NO_VOTE_OPTION'	=> 'You must specify an option when voting.',
	'NO_VOTES'	=> 'ڪوبه ووٽ نه ڏنو ويو',
	'POLL_ENDED_AT'	=> 'Poll ended at %s',
	'POLL_RUN_TILL'	=> 'Poll runs till %s',
	'POLL_VOTED_OPTION'	=> 'You voted for this option',
	'PRINT_TOPIC'	=> 'پرنٽ پيش منظر',
	'QUICK_MOD'	=> 'Quick-mod tools',
	'QUOTE'	=> 'اقتتباس',
	'REPLY_TO_TOPIC'	=> 'موضوع جو جواب ڏيو',
	'RETURN_POST'	=> '%sتحرير جي طرف واپس%s',
	'SUBMIT_VOTE'	=> 'ووٽ ڏيو',
	'TOTAL_VOTES'	=> 'Total votes',
	'UNLOCK_TOPIC'	=> 'Unlock topic',
	'VIEW_INFO'	=> 'تحرير جو تفصيل',
	'VIEW_NEXT_TOPIC'	=> 'اڳيون موضوع',
	'VIEW_PREVIOUS_TOPIC'	=> 'پويون موضوع',
	'VIEW_RESULTS'	=> 'نتيجا ڏسو',
	'VIEW_TOPIC_POST'	=> '1 تحرير',
	'VIEW_TOPIC_POSTS'	=> '%d تحريرون',
	'VIEW_UNREAD_POST'	=> 'First unread post',
	'VISIT_WEBSITE'	=> 'WWW',
	'VOTE_SUBMITTED'	=> 'Your vote has been cast.',
	'VOTE_CONVERTED'	=> 'Changing votes is not supported for converted polls.',
));

?>