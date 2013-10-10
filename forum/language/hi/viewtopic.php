<?php
/**
*
* viewtopic [English]
*
* @package language
* @version $Id: viewtopic.php,v 1.19 2007/10/04 15:07:24 acydburn Exp $
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
	'ATTACHMENT'						=> 'संलग्नक',
	'ATTACHMENT_FUNCTIONALITY_DISABLED'	=> 'संलग्नक सुविधा समाप्त कर दी गई है',

	'BOOKMARK_ADDED'		=> 'इस विषय को सफलतापुर्वक बुकमार्क किया गया',
	'BOOKMARK_REMOVED'		=> 'बुकमार्क विषय को सफलतापुर्वक हटाया गया',
	'BOOKMARK_TOPIC'		=> 'विषय को बुकमार्क करें',
	'BOOKMARK_TOPIC_REMOVE'	=> 'बुकमार्क से हटाओ',
	'BUMPED_BY'				=> 'Last bumped by %1$s on %2$s.',
	'BUMP_TOPIC'			=> 'बम्प विषय',

	'CODE'					=> 'कोड',

	'DELETE_TOPIC'			=> 'विषय हटाएँ',
	'DOWNLOAD_NOTICE'		=> 'आप इस स्तम्भ के संलग्न फ़ाईल को देखने हेतु अनुमति नहीं हैं',

	'EDITED_TIMES_TOTAL'	=> 'Last edited by %1$s on %2$s, edited %3$d times in total.',
	'EDITED_TIME_TOTAL'		=> 'Last edited by %1$s on %2$s, edited %3$d time in total.',
	'EMAIL_TOPIC'			=> 'मित्र को ई-मेल भेजें',
	'ERROR_NO_ATTACHMENT'	=> 'चुयनित संलग्नक अस्तित्व मे नहीं है',

	'FILE_NOT_FOUND_404'	=> 'यह फ़ाईल <strong>%s</strong> उपलब्ध नही हैं।',
	'FORK_TOPIC'			=> 'विषय की प्रति बनाएँ',

	'LINKAGE_FORBIDDEN'		=> 'आपको इस साईट को देखने,डाउनलोड या लिंक करने/कराने हेतु अनुमति प्राप्त नहीं है',
	'LOGIN_NOTIFY_TOPIC'	=> 'You have been notified about this topic, please login to view it.',
	'LOGIN_VIEWTOPIC'		=> 'इस विषय को देखने के लिए आपको बोर्ड में पंजीकृत होकर सत्रारंभ करना होगा ',

	'MAKE_ANNOUNCE'				=> ' “सूचना” मे बदलें',
	'MAKE_GLOBAL'				=> '“ग्लोबल” मे बदलें',
	'MAKE_NORMAL'				=> '“स्टैंडर्ड विषय” मे बदलें',
	'MAKE_STICKY'				=> '“चिपकू” मे बदलें',
	'MAX_OPTIONS_SELECT'		=> 'You may select up to <strong>%d</strong> options',
	'MAX_OPTION_SELECT'			=> 'You may select <strong>1</strong> option',
	'MISSING_INLINE_ATTACHMENT'	=> 'The attachment <strong>%s</strong> is no longer available',
	'MOVE_TOPIC'				=> 'विषय खिसकाएँ',

	'NO_ATTACHMENT_SELECTED'=> 'आपने डाउनलोड या देखने के लिए कोई संलग्नक नहीं चुना है',
	'NO_NEWER_TOPICS'		=> 'इस मंच मे कोई नया विषय नहीं है',
	'NO_OLDER_TOPICS'		=> 'इस मंच मे कोई पुराना विषय नहीं है',
	'NO_UNREAD_POSTS'		=> 'इस विषय के लिए कोई नया अपठित स्तम्भ नहीं है ',
	'NO_VOTE_OPTION'		=> 'आपको एक विकल्प अवश्य चुनना है जब आप वोट दें',
	'NO_VOTES'				=> 'कोई वोट नहीं',

	'POLL_ENDED_AT'			=> '%s तक पोल खत्म ',
	'POLL_RUN_TILL'			=> '%s तक पोल चलेगा',
	'POLL_VOTED_OPTION'		=> 'आपने इस विकल्प को चुना है',
	'PRINT_TOPIC'			=> 'प्रिंट देखें',

	'QUICK_MOD'				=> 'Quick-mod tools',
	'QUOTE'					=> 'कॉट',

	'REPLY_TO_TOPIC'		=> 'इस विषय का उत्त्तर दें',
	'RETURN_POST'			=> '%sReturn to the post%s',

	'SUBMIT_VOTE'			=> 'वोट को शामिल करें',

	'TOTAL_VOTES'			=> 'कुल मत',

	'UNLOCK_TOPIC'			=> ' विषय खोलें',

	'VIEW_INFO'				=> 'विवरण भेजें',
	'VIEW_NEXT_TOPIC'		=> 'अगला विषय',
	'VIEW_PREVIOUS_TOPIC'	=> 'पिछला विषय',
	'VIEW_RESULTS'			=> 'परिणाम देंखे',
	'VIEW_TOPIC_POST'		=> '1 स्तम्भ',
	'VIEW_TOPIC_POSTS'		=> '%d स्तम्भ',
	'VIEW_UNREAD_POST'		=> 'प्रथम अपठित स्तम्भ',
	'VISIT_WEBSITE'			=> 'WWW',
	'VOTE_SUBMITTED'		=> 'आपका मत सम्मिलित कर लिया गया है',
	'VOTE_CONVERTED'		=> 'Changing votes is not supported for converted polls.',
));

?>