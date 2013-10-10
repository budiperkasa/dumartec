<?php
/**
*
* posting [English]
*
* @package language
* @version $Id: posting.php,v 1.74 2007/10/04 15:07:24 acydburn Exp $
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
	'ADD_ATTACHMENT'			=> 'संलग्नक अपलोड करें',
	'ADD_ATTACHMENT_EXPLAIN'	=> 'यदि आप एक से अधिक फ़ाइल जोड़ना चाहते तो अधिक जानकरी नीचे दें.',
	'ADD_FILE'					=> 'फ़ाइल जोड़ें',
	'ADD_POLL'					=> 'चुनाव जोड़ें',
	'ADD_POLL_EXPLAIN'			=> 'If you do not want to add a poll to your topic leave the fields blank.',
	'ALREADY_DELETED'			=> 'Sorry but this message is already deleted.',
	'ATTACH_QUOTA_REACHED'		=> 'Sorry, the board attachment quota has been reached.',
	'ATTACH_SIG'				=> 'हस्ताक्षर संलग्न करें (हस्ताक्षर UCP से परिवर्तित किया जा सकता हैं )',

	'BBCODE_A_HELP'				=> 'Inline uploaded attachment: [attachment=]filename.ext[/attachment]',
	'BBCODE_B_HELP'				=> 'अक्षर बोल्ड करें : [b]text[/b]',
	'BBCODE_C_HELP'				=> 'Code display: [code]code[/code]',
	'BBCODE_E_HELP'				=> 'List: Add list element',
	'BBCODE_F_HELP'				=> 'फ़ॉन्ट आकार: [size=85]small text[/size]',
	'BBCODE_IS_OFF'				=> '%sBBCode%s is <em>OFF</em>',
	'BBCODE_IS_ON'				=> '%sBBCode%s is <em>ON</em>',
	'BBCODE_I_HELP'				=> 'अक्षर इटेलिक करें : [i]text[/i]',
	'BBCODE_L_HELP'				=> 'लिस्ट : [list]text[/list]',
	'BBCODE_LISTITEM_HELP'		=> 'लिस्ट आइटम: [*]text[/*]',
	'BBCODE_O_HELP'				=> 'आर्डरड लिस्ट : [list=]text[/list]',
	'BBCODE_P_HELP'				=> 'चित्र डाले: [img]http://image_url[/img]',
	'BBCODE_Q_HELP'				=> 'अक्षर कॉट करें: [quote]text[/quote]',
	'BBCODE_S_HELP'				=> 'फ़ॉन्ट के रंग: [color=red]text[/color]  Tip: you can also use color=#FF0000',
	'BBCODE_U_HELP'				=> 'अक्षर उन्डरलाइन करेंUnderline text: [u]text[/u]',
	'BBCODE_W_HELP'				=> 'URL डाले: [url]http://url[/url] or [url=http://url]URL text[/url]',
	'BBCODE_D_HELP'				=> 'फ्लैश: [flash=width,height]http://url[/flash]',
	'BUMP_ERROR'				=> 'आप इस विषय को अंतिम स्तम्भ के बाद इतने जल्दी उछाल नहीं सकते.',

	'CANNOT_DELETE_REPLIED'		=> 'Sorry but you may only delete posts which have not been replied to.',
	'CANNOT_EDIT_POST_LOCKED'	=> 'This post has been locked. You can no longer edit that post.',
	'CANNOT_EDIT_TIME'			=> 'You can no longer edit or delete that post.',
	'CANNOT_POST_ANNOUNCE'		=> 'Sorry but you cannot post announcements.',
	'CANNOT_POST_STICKY'		=> 'Sorry but you cannot post sticky topics.',
	'CHANGE_TOPIC_TO'			=> 'Change topic type to',
	'CLOSE_TAGS'				=> 'टैग बन्द करें',
	'CURRENT_TOPIC'				=> 'वर्तमान विषय',

	'DELETE_FILE'				=> 'फाइल मिटाएँ',
	'DELETE_MESSAGE'			=> 'संदेश मिटाएँ',
	'DELETE_MESSAGE_CONFIRM'	=> 'क्या आप निश्चित है कि आप इस संदेश को मिटाना हैं ?',
	'DELETE_OWN_POSTS'			=> 'क्षमा चाहते हैं पर आप केवल अपने स्तम्भ को मिटा सकते हैं.',
	'DELETE_POST_CONFIRM'		=> 'क्या आप निश्चित है कि आप इस संदेश को मिटाना हैं?',
	'DELETE_POST_WARN'			=> 'मिटाने के बाद स्तम्भ वापस नहीं लाया जा सकता',
	'DISABLE_BBCODE'			=> 'BBCode को असमर्थ करें',
	'DISABLE_MAGIC_URL'			=> 'URLs को स्वतः पार्श न करें',
	'DISABLE_SMILIES'			=> 'smilies को असमर्थ करें',
	'DISALLOWED_EXTENSION'		=> 'The extension %s is not allowed.',
	'DRAFT_LOADED'				=> 'Draft loaded into posting area, you may want to finish your post now.<br />Your draft will be deleted after submitting this post.',
	'DRAFT_LOADED_PM'			=> 'Draft loaded into message area, you may want to finish your private message now.<br />Your draft will be deleted after submitting this private message.',
	'DRAFT_SAVED'				=> 'ड्राफ्ट संचित हो गया.',
	'DRAFT_TITLE'				=> 'ड्राफ्ट शीर्षक',

	'EDIT_REASON'				=> 'स्तम्भ को संशोधित करने का प्रयोजन',
	'EMPTY_FILEUPLOAD'			=> 'अपलोड किया गया फ़ाइल रिक्त हैं.',
	'EMPTY_MESSAGE'				=> 'You must enter a message when posting.',
	'EMPTY_REMOTE_DATA'			=> 'File could not be uploaded, please try uploading the file manually.',

	'FLASH_IS_OFF'				=> '[flash] <em>बन्द</em> है',
	'FLASH_IS_ON'				=> '[flash] <em>चालू</em> हैं',
	'FLOOD_ERROR'				=> 'You cannot make another post so soon after your last.',
	'FONT_COLOR'				=> 'Font colour',
	'FONT_COLOR_HIDE'			=> 'Hide font colour',
	'FONT_HUGE'					=> 'Huge',
	'FONT_LARGE'				=> 'Large',
	'FONT_NORMAL'				=> 'Normal',
	'FONT_SIZE'					=> 'Font size',
	'FONT_SMALL'				=> 'Small',
	'FONT_TINY'					=> 'Tiny',

	'GENERAL_UPLOAD_ERROR'		=> 'Could not upload attachment to %s.',

	'IMAGES_ARE_OFF'			=> '[img] <em>बन्द</em> हैं',
	'IMAGES_ARE_ON'				=> '[img] <em>चालू</em> हैं',
	'INVALID_FILENAME'			=> '%s is an invalid filename.',

	'LOAD'						=> 'लादो',
	'LOAD_DRAFT'				=> 'ड्राफ्ट को लादो',
	'LOAD_DRAFT_EXPLAIN'		=> 'Here you are able to select the draft you want to continue writing. Your current post will be cancelled, all current post contents will be deleted. View, edit and delete drafts within your User Control Panel.',
	'LOGIN_EXPLAIN_BUMP'		=> 'You need to login in order to bump topics within this forum.',
	'LOGIN_EXPLAIN_DELETE'		=> 'You need to login in order to delete posts within this forum.',
	'LOGIN_EXPLAIN_POST'		=> 'You need to login in order to post within this forum.',
	'LOGIN_EXPLAIN_QUOTE'		=> 'You need to login in order to quote posts within this forum.',
	'LOGIN_EXPLAIN_REPLY'		=> 'You need to login in order to reply to topics within this forum.',

	'MAX_FONT_SIZE_EXCEEDED'	=> 'You may only use fonts up to size %1$d.',
	'MAX_FLASH_HEIGHT_EXCEEDED'	=> 'Your flash files may only be up to %1$d pixels high.',
	'MAX_FLASH_WIDTH_EXCEEDED'	=> 'Your flash files may only be up to %1$d pixels wide.',
	'MAX_IMG_HEIGHT_EXCEEDED'	=> 'Your images may only be up to %1$d pixels high.',
	'MAX_IMG_WIDTH_EXCEEDED'	=> 'Your images may only be up to %1$d pixels wide.',

	'MESSAGE_BODY_EXPLAIN'		=> 'Enter your message here, it may contain no more than <strong>%d</strong> characters.',
	'MESSAGE_DELETED'			=> 'This message has been deleted successfully.',
	'MORE_SMILIES'				=> 'अधिक smilies देखें',

	'NOTIFY_REPLY'				=> 'Notify me when a reply is posted',
	'NOT_UPLOADED'				=> 'File could not be uploaded.',
	'NO_DELETE_POLL_OPTIONS'	=> 'You cannot delete existing poll options.',
	'NO_PM_ICON'				=> 'No PM icon',
	'NO_POLL_TITLE'				=> 'You have to enter a poll title.',
	'NO_POST'					=> 'The requested post does not exist.',
	'NO_POST_MODE'				=> 'No post mode specified.',

	'PARTIAL_UPLOAD'			=> 'The uploaded file was only partially uploaded.',
	'PHP_SIZE_NA'				=> 'The attachment’s file size is too large.<br />Could not determine the maximum size defined by PHP in php.ini.',
	'PHP_SIZE_OVERRUN'			=> 'The attachment’s file size is too large, the maximum upload size is %d MB.<br />Please note this is set in php.ini and cannot be overridden.',
	'PLACE_INLINE'				=> 'Place inline',
	'POLL_DELETE'				=> 'पोल मिटाएँ',
	'POLL_FOR'					=> 'पोल चलाएँ ',
	'POLL_FOR_EXPLAIN'			=> 'Enter 0 or leave blank for a never ending poll.',
	'POLL_MAX_OPTIONS'			=> 'Options per user',
	'POLL_MAX_OPTIONS_EXPLAIN'	=> 'This is the number of options each user may select when voting.',
	'POLL_OPTIONS'				=> 'पोल विकल्प',
	'POLL_OPTIONS_EXPLAIN'		=> 'Place each option on a new line. You may enter up to <strong>%d</strong> options.',
	'POLL_OPTIONS_EDIT_EXPLAIN'	=> 'Place each option on a new line. You may enter up to <strong>%d</strong> options. If you remove or add options all previous votes will be reset.',
	'POLL_QUESTION'				=> 'पोल प्रश्न',
	'POLL_TITLE_TOO_LONG'		=> 'The poll title must contain fewer than 100 characters.',
	'POLL_TITLE_COMP_TOO_LONG'	=> 'The parsed size of your poll title is too large, consider removing BBCodes or smilies.',
	'POLL_VOTE_CHANGE'			=> 'Allow re-voting',
	'POLL_VOTE_CHANGE_EXPLAIN'	=> 'If enabled users are able to change their vote.',
	'POSTED_ATTACHMENTS'		=> 'Posted attachments',
	'POST_APPROVAL_NOTIFY'		=> 'You will be notified when your post has been approved.',
	'POST_CONFIRMATION'			=> 'Confirmation of post',
	'POST_CONFIRM_EXPLAIN'		=> 'To prevent automated posts the board requires you to enter a confirmation code. The code is displayed in the image you should see below. If you are visually impaired or cannot otherwise read this code please contact the %sBoard Administrator%s.',
	'POST_DELETED'				=> 'This message has been deleted successfully.',
	'POST_EDITED'				=> 'This message has been edited successfully.',
	'POST_EDITED_MOD'			=> 'This message has been edited successfully, but it will need to be approved by a moderator before it is publicly viewable.',
	'POST_GLOBAL'				=> 'Global',
	'POST_ICON'					=> 'Post icon',
	'POST_NORMAL'				=> 'Normal',
	'POST_REVIEW'				=> 'Post review',
	'POST_REVIEW_EXPLAIN'		=> 'At least one new post has been made to this topic. You may wish to review your post in light of this.',
	'POST_STORED'				=> 'This message has been posted successfully.',
	'POST_STORED_MOD'			=> 'This message has been submitted successfully, but it will need to be approved by a moderator before it is publicly viewable.',
	'POST_TOPIC_AS'				=> 'Post topic as',
	'PROGRESS_BAR'				=> 'Progress bar',

	'QUOTE_DEPTH_EXCEEDED'		=> 'You may embed only %1$d quotes within each other.',

	'SAVE'						=> 'संचित करें',
	'SAVE_DATE'					=> 'संचित किया गया',
	'SAVE_DRAFT'				=> 'ड्राफ्ट संचित करें',
	'SAVE_DRAFT_CONFIRM'		=> 'Please note that saved drafts only include the subject and the message, any other element will be removed. Do you want to save your draft now?',
	'SMILIES'					=> 'Smilies',
	'SMILIES_ARE_OFF'			=> 'Smilies are <em>OFF</em>',
	'SMILIES_ARE_ON'			=> 'Smilies are <em>ON</em>',
	'STICKY_ANNOUNCE_TIME_LIMIT'=> 'Sticky/Announcement time limit',
	'STICK_TOPIC_FOR'			=> 'Stick topic for',
	'STICK_TOPIC_FOR_EXPLAIN'	=> 'Enter 0 or leave blank for a never ending Sticky/Announcement.',
	'STYLES_TIP'				=> 'Tip: Styles can be applied quickly to selected text.',

	'TOO_FEW_CHARS'				=> 'Your message contains too few characters.',
	'TOO_FEW_POLL_OPTIONS'		=> 'You must enter at least two poll options.',
	'TOO_MANY_ATTACHMENTS'		=> 'Cannot add another attachment, %d is the maximum.',
	'TOO_MANY_CHARS'			=> 'Your message contains too many characters.',
	'TOO_MANY_CHARS_POST'		=> 'Your message contains %1$d characters. The maximum number of allowed characters is %2$d.',
	'TOO_MANY_CHARS_SIG'		=> 'Your signature contains %1$d characters. The maximum number of allowed characters is %2$d.',
	'TOO_MANY_POLL_OPTIONS'		=> 'You have tried to enter too many poll options.',
	'TOO_MANY_SMILIES'			=> 'Your message contains too many smilies. The maximum number of smilies allowed is %d.',
	'TOO_MANY_URLS'				=> 'Your message contains too many URLs. The maximum number of URLs allowed is %d.',
	'TOO_MANY_USER_OPTIONS'		=> 'You cannot specify more options per user than existing poll options.',
	'TOPIC_BUMPED'				=> 'विषय को सफलतापुर्वक उछाल दिया गया हैं।',

	'UNAUTHORISED_BBCODE'		=> 'You cannot use certain BBCodes: %s.',
	'UNGLOBALISE_EXPLAIN'		=> 'To switch this topic back from being global to a normal topic, you need to select the forum you wish this topic to be displayed.',
	'UPDATE_COMMENT'			=> 'Update comment',
	'URL_INVALID'				=> 'The URL you specified is invalid.',
	'URL_NOT_FOUND'				=> 'The file specified could not be found.',
	'URL_IS_OFF'				=> '[url] is <em>OFF</em>',
	'URL_IS_ON'					=> '[url] is <em>ON</em>',
	'USER_CANNOT_BUMP'			=> 'आप इस मंच में विषय को उछाल नहीं सकते हैं.',
	'USER_CANNOT_DELETE'		=> 'आप इस मंच के स्तम्भ को मिटा नहीं सकते हैं.',
	'USER_CANNOT_EDIT'			=> 'आप इस मंच के स्तम्भ में संशोधन नहीं कर सकते हैं.',
	'USER_CANNOT_REPLY'			=> 'आप इस मंच में उत्तर (reply) प्रेषित नहीं कर सकते हैं .',
	'USER_CANNOT_FORUM_POST'	=> 'You are not able to do posting operations on this forum due to the forum type not supporting it.',

	'VIEW_MESSAGE'				=> '%sView your submitted message%s',
	'VIEW_PRIVATE_MESSAGE'		=> '%sView your submitted private message%s',

	'WRONG_FILESIZE'			=> 'The file is too big, maximum allowed size is %1d %2s.',
	'WRONG_SIZE'				=> 'The image must be at least %1$d pixels wide, %2$d pixels high and at most %3$d pixels wide and %4$d pixels high. The submitted image is %5$d pixels wide and %6$d pixels high.',
));

?>