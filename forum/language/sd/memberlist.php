<?php
/**
*
* memberlist.php [Sindhi]
*
* @package language
* @version $Id: $
* @copyright (c) 2008 phpBB Group
* @author 2008-05-12 - phpBB Group
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
	'ABOUT_USER'	=> 'تعارف',
	'ACTIVE_IN_FORUM'	=> 'وڌيڪ فعال فورم',
	'ACTIVE_IN_TOPIC'	=> 'وڌيڪ فعال موضوع',
	'ADD_FOE'	=> 'ناپسنديده فردن ۾ شامل ڪريو',
	'ADD_FRIEND'	=> 'پسنديده فردن ۾ شامل ڪريو',
	'AFTER'	=> 'کان پوءِ',
	'ALL'	=> 'سڀ',
	'BEFORE'	=> 'پهريان',
	'CC_EMAIL'	=> 'هن برقي خط جي هڪ ڪاپي پاڻ ڏانهن به موڪليو',
	'CONTACT_USER'	=> 'Contact',
	'DEST_LANG'	=> 'ٻولي',
	'DEST_LANG_EXPLAIN'	=> 'هن پيغام کي وصول ڪندڙ جي لاءِ ٻولي چونڊيون (جيڪڏهن موجود هجي ته)۔۔۔',
	'EMAIL_BODY_EXPLAIN'	=> 'This message will be sent as plain text, do not include any HTML or BBCode. The return address for this message will be set to your e-mail address.',
	'EMAIL_DISABLED'	=> 'Sorry but all e-mail related functions have been disabled.',
	'EMAIL_SENT'	=> 'برقي خط موڪليو ويو آهي',
	'EMAIL_TOPIC_EXPLAIN'	=> 'This message will be sent as plain text, do not include any HTML or BBCode. Please note that the topic information is already included in the message. The return address for this message will be set to your e-mail address.',
	'EMPTY_ADDRESS_EMAIL'	=> 'You must provide a valid e-mail address for the recipient.',
	'EMPTY_MESSAGE_EMAIL'	=> 'You must enter a message to be emailed.',
	'EMPTY_MESSAGE_IM'	=> 'You must enter a message to be send.',
	'EMPTY_NAME_EMAIL'	=> 'You must enter the real name of the recipient.',
	'EMPTY_SUBJECT_EMAIL'	=> 'You must specify a subject for the e-mail.',
	'EQUAL_TO'	=> 'Equal to',
	'FIND_USERNAME_EXPLAIN'	=> 'Use this form to search for specific members. You do not need to fill out all fields. To match partial data use * as a wildcard. When entering dates use the format <kbd>YYYY-MM-DD</kbd>, e.g. <samp>2004-02-29</samp>. Use the mark checkboxes to select one or more usernames (several usernames may be accepted depending on the form itself) and click the Select Marked button to return to the previous form.',
	'FLOOD_EMAIL_LIMIT'	=> 'You cannot send another e-mail at this time. Please try again later.',
	'GROUP_LEADER'	=> 'گروپ جو سربراهه',
	'HIDE_MEMBER_SEARCH'	=> 'رُڪنن جي لڪل تلاش ڪريو',
	'IM_ADD_CONTACT'	=> 'Add Contact',
	'IM_AIM'	=> 'ياد رکو هن جي استعمال لاءِ توهان وٽ AOL Instant Messenger انسٽال هجڻ ضروري آهي۔',
	'IM_AIM_EXPRESS'	=> 'AIM Express',
	'IM_DOWNLOAD_APP'	=> 'اطلاقيو ڊائونلوڊ ڪريو',
	'IM_ICQ'	=> 'Please note that users may have selected to not receive unsolicited instant messages.',
	'IM_JABBER'	=> 'Please note that users may have selected to not receive unsolicited instant messages.',
	'IM_JABBER_SUBJECT'	=> 'This is an automated message please do not reply! Message from user %1$s at %2$s.',
	'IM_MESSAGE'	=> 'توهان جو پيغام',
	'IM_MSNM'	=> 'ياد رکو هن جي استعمال لاءِ توهان وٽ  Windows Messenger انسٽال هجڻ ضروري آهي۔',
	'IM_MSNM_BROWSER'	=> 'توهان جو برائوز هن عمل کي سپورٽ نه ٿو ڪري۔',
	'IM_MSNM_CONNECT'	=> 'MSNM is not connected.\\nYou have to connect to MSNM to continue.',
	'IM_NAME'	=> 'توهان جو نالو',
	'IM_NO_DATA'	=> 'هن رُڪن جي لاءِ ڪنهن مناسب رابطي جي معلومات ميسر نه آهي۔',
	'IM_NO_JABBER'	=> 'معذرت Jabber رُڪنن کي سڌو سنئون هنن پيغامن جي سروس جي اجازت نه آهي۔ مطلوبه رُڪن سان رابط جي لاءِ توهان جي سسٽم تي  Jabber client انسٽال هجڻ ضروري آهي',
	'IM_RECIPIENT'	=> 'وصول ڪندڙ ',
	'IM_SEND'	=> 'پيغام موڪليو',
	'IM_SEND_MESSAGE'	=> 'پيغام موڪليو',
	'IM_SENT_JABBER'	=> '%1$s کي توهان جو پيغام ڪاميابيءَ سان موڪليو ويو آهي.',
	'IM_USER'	=> 'فوري پيغام موڪليو',
	'LAST_ACTIVE'	=> 'آخری فعال',
	'LESS_THAN'	=> 'Less than',
	'LIST_USER'	=> '1 رُڪن',
	'LIST_USERS'	=> '%d رُڪنَ',
	'LOGIN_EXPLAIN_LEADERS'	=> 'هن بورڊ تي انتظاميا جي فهرست ڏسڻ لاءِ توهان جو ميمبر ۽ لاگ ان هجڻ ضروري آهي۔',
	'LOGIN_EXPLAIN_MEMBERLIST'	=> 'هن فورم تي رُڪنن جي فهرست ڏسڻ لاءِ توهان جو ميمبر ۽ لاگ ان هجڻ ضروري آهي۔',
	'LOGIN_EXPLAIN_SEARCHUSER'	=> 'هن فورم تي رُڪنن کي تلاش ڪرڻ لاءِ توهان جو ميمبر ۽ لاگ ان هجڻ ضروري آهي',
	'LOGIN_EXPLAIN_VIEWPROFILE'	=> 'هن بورڊ تي رُڪنن جو تعارف ڏسڻ لاءِ توهان جو ميمبر ۽ لاگ ان هجڻ ضروري آهي۔',
	'MORE_THAN'	=> 'More than',
	'NO_EMAIL'	=> 'توهان کي هن رُڪن کي برقي خط موڪلڻ جي اجازت نه آهي',
	'NO_VIEW_USERS'	=> 'توهان کي رُڪنن ياتعارف ڏسڻ جي اجازت نه آهي',
	'ORDER'	=> 'ترتیب',
	'OTHER'	=> 'Other',
	'POST_IP'	=> 'Posted from IP/domain',
	'RANK'	=> 'عهدو',
	'REAL_NAME'	=> 'وصول ڪندڙ جو نالو',
	'RECIPIENT'	=> 'وصول ڪندڙ',
	'REMOVE_FOE'	=> 'ناپسنديده فردن کي فهرست مان ڪڍو',
	'REMOVE_FRIEND'	=> 'پسنديده فردن کي فهرسن مان ڪڍو',
	'SEARCH_USER_POSTS'	=> 'رُڪن جون تحريرون ڳوليو',
	'SELECT_MARKED'	=> 'Select marked',
	'SELECT_SORT_METHOD'	=> 'Select sort method',
	'SEND_AIM_MESSAGE'	=> 'Send AIM message',
	'SEND_ICQ_MESSAGE'	=> 'Send ICQ message',
	'SEND_IM'	=> 'Instant messaging',
	'SEND_JABBER_MESSAGE'	=> 'Send Jabber message',
	'SEND_MESSAGE'	=> 'پيغام',
	'SEND_MSNM_MESSAGE'	=> 'Send MSNM/WLM message',
	'SEND_YIM_MESSAGE'	=> 'Send YIM message',
	'SORT_EMAIL'	=> 'برقي خط',
	'SORT_LAST_ACTIVE'	=> 'آخري فعال',
	'SORT_POST_COUNT'	=> 'تحريرن جو تعداد',
	'USERNAME_BEGINS_WITH'	=> 'رُڪن نالو هن سان شروع ٿئي ٿو۔',
	'USER_ADMIN'	=> 'رُڪن جي تنظيم ڪريو',
	'USER_FORUM'	=> 'رُڪن جا عدد ۽ شمار',
	'USER_ONLINE'	=> 'آن لائين',
	'USER_PRESENCE'	=> 'Board presence',
	'VIEWING_PROFILE'	=> '%s جو تعارف ڏسي رهيو آهي',
	'VISITED'	=> 'آخري دورو',
	'WWW'	=> 'ويب سائيٽ',
));

?>