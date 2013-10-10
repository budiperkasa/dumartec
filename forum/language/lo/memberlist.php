<?php
/**
*
* memberlist.php [Lao]
*
* @package language
* @version $Id: $
* @copyright (c) 2008 phpBB Group
* @author 2008-05-29 - Punlao.com
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
	'ABOUT_USER'	=> 'ໂປຣໄຟລ໌',
	'ACTIVE_IN_FORUM'	=> 'Most active forum',
	'ACTIVE_IN_TOPIC'	=> 'Most active topic',
	'ADD_FOE'	=> 'Add foe',
	'ADD_FRIEND'	=> 'ເພີ່ມຫມູ່',
	'AFTER'	=> 'ຫລັງຈາກ',
	'ALL'	=> 'ທັງຫມົດ',
	'BEFORE'	=> 'ກ່ອນຫນ້າ',
	'CC_EMAIL'	=> 'ກ໊ອບປີ້ເມລນີ້ແລ້ວສົ່ງໄປເມລຂອງທ່ານ',
	'CONTACT_USER'	=> 'ລາຍຊື່ຜູ້ຕິດຕໍ່',
	'DEST_LANG'	=> 'ພາສາ',
	'DEST_LANG_EXPLAIN'	=> 'Select an appropriate language (if available) for the recipient of this message.',
	'EMAIL_BODY_EXPLAIN'	=> 'This message will be sent as plain text, do not include any HTML or BBCode. The return address for this message will be set to your e-mail address.',
	'EMAIL_DISABLED'	=> 'Sorry but all e-mail related functions have been disabled.',
	'EMAIL_SENT'	=> 'ອີເມລໄດ້ສົ່ງໄປແລ້ວ',
	'EMAIL_TOPIC_EXPLAIN'	=> 'This message will be sent as plain text, do not include any HTML or BBCode. Please note that the topic information is already included in the message. The return address for this message will be set to your e-mail address.',
	'EMPTY_ADDRESS_EMAIL'	=> 'You must provide a valid e-mail address for the recipient.',
	'EMPTY_MESSAGE_EMAIL'	=> 'You must enter a message to be emailed.',
	'EMPTY_MESSAGE_IM'	=> 'You must enter a message to be send.',
	'EMPTY_NAME_EMAIL'	=> 'You must enter the real name of the recipient.',
	'EMPTY_SUBJECT_EMAIL'	=> 'You must specify a subject for the e-mail.',
	'EQUAL_TO'	=> 'Equal to',
	'FIND_USERNAME_EXPLAIN'	=> 'Use this form to search for specific members. You do not need to fill out all fields. To match partial data use * as a wildcard. When entering dates use the format <kbd>YYYY-MM-DD</kbd>, e.g. <samp>2004-02-29</samp>. Use the mark checkboxes to select one or more usernames (several usernames may be accepted depending on the form itself) and click the Select Marked button to return to the previous form.',
	'FLOOD_EMAIL_LIMIT'	=> 'You cannot send another e-mail at this time. Please try again later.',
	'GROUP_LEADER'	=> 'ຫົວໜ້າກຸ່ມ',
	'HIDE_MEMBER_SEARCH'	=> 'ເຊື່ອງການຫາຜູ້ໃຂ້',
	'IM_ADD_CONTACT'	=> 'ເພີ່ມລາຍຊື່ຜູ້ຕິດຕໍ່',
	'IM_AIM'	=> 'ທ່ານຕ້ອງໄດ້ລົງໂປຣແກຣມ AOL Instant Messenger ເພື່ອໃສ່ຕົວເລືອກນີ້',
	'IM_AIM_EXPRESS'	=> 'AIM Express',
	'IM_DOWNLOAD_APP'	=> 'ດາວໂຫລດໂປຣແກຣມ',
	'IM_ICQ'	=> 'Please note that users may have selected to not receive unsolicited instant messages.',
	'IM_JABBER'	=> 'Please note that users may have selected to not receive unsolicited instant messages.',
	'IM_JABBER_SUBJECT'	=> 'This is an automated message please do not reply! Message from user %1$s at %2$s.',
	'IM_MESSAGE'	=> 'ຂໍ້ຄວາມສ່ວນຕົວຂອງທ່ານ',
	'IM_MSNM'	=> 'Please note that you need Windows Messenger installed to use this.',
	'IM_MSNM_BROWSER'	=> 'Your browser does not support this.',
	'IM_MSNM_CONNECT'	=> 'MSNM is not connected.\\nYou have to connect to MSNM to continue.',
	'IM_NAME'	=> 'ຊື່ຂອງທ່ານ',
	'IM_NO_DATA'	=> 'There is no suitable contact information for this user.',
	'IM_NO_JABBER'	=> 'Sorry, direct messaging of Jabber users is not supported on this board. You will need a Jabber client installed on your system to contact the recipient above.',
	'IM_RECIPIENT'	=> 'Recipient',
	'IM_SEND'	=> 'ຂໍ້ຄວາມສ່ວນຕົວ',
	'IM_SEND_MESSAGE'	=> 'ສົ່ງຂໍ້ຄວາມສ່ວນຕົວ',
	'IM_SENT_JABBER'	=> 'Your message to %1$s has been sent successfully.',
	'IM_USER'	=> 'Send an instant message',
	'LAST_ACTIVE'	=> 'ຕອບເທື່ອສຸດທ້າຍ',
	'LESS_THAN'	=> 'ຫນ້ອຍກວ່າ',
	'LIST_USER'	=> '1 ຜູ້ໃຊ້',
	'LIST_USERS'	=> '%d ຜູ້ໃຊ້',
	'LOGIN_EXPLAIN_LEADERS'	=> 'The board requires you to be registered and logged in to view the team listing.',
	'LOGIN_EXPLAIN_MEMBERLIST'	=> 'The board requires you to be registered and logged in to access the memberlist.',
	'LOGIN_EXPLAIN_SEARCHUSER'	=> 'The board requires you to be registered and logged in to search users.',
	'LOGIN_EXPLAIN_VIEWPROFILE'	=> 'The board requires you to be registered and logged in to view profiles.',
	'MORE_THAN'	=> 'ຫຼາຍກວ່າ',
	'NO_EMAIL'	=> 'You are not permitted to send e-mail to this user.',
	'NO_VIEW_USERS'	=> 'You are not authorised to view the member list or profiles.',
	'ORDER'	=> 'ຄຳສັ່ງ',
	'OTHER'	=> 'ອື່ນໆ',
	'POST_IP'	=> 'Posted from IP/domain',
	'RANK'	=> 'ລະດັບຜູ້ໃຊ້',
	'REAL_NAME'	=> 'ຊື່',
	'RECIPIENT'	=> 'Recipient',
	'REMOVE_FOE'	=> 'Remove foe',
	'REMOVE_FRIEND'	=> 'ລຶບຫມູ່',
	'SEARCH_USER_POSTS'	=> 'ຂອກຫາ ຄົນທີ່ໂພສ',
	'SELECT_MARKED'	=> 'ເລືອກເອົາ ອັນທີ່ຫມາຍໄວ້',
	'SELECT_SORT_METHOD'	=> 'Select sort method',
	'SEND_AIM_MESSAGE'	=> 'ສົ່ງຂໍ້ຄວາມສ່ວນຕົວດ້ວຍ  AIM ',
	'SEND_ICQ_MESSAGE'	=> 'ສົ່ງຂໍ້ຄວາມສ່ວນຕົວດ້ວຍ  ICQ',
	'SEND_IM'	=> 'Instant messaging',
	'SEND_JABBER_MESSAGE'	=> 'ສົ່ງຂໍ້ຄວາມສ່ວນຕົວດ້ວຍ JABBER',
	'SEND_MESSAGE'	=> 'ສົ່ງຂໍ້ຄວາມສ່ວນຕົວ',
	'SEND_MSNM_MESSAGE'	=> 'ສົ່ງຂໍ້ຄວາມສ່ວນຕົວດ້ວຍ MSNM/WLM',
	'SEND_YIM_MESSAGE'	=> 'ສົ່ງຂໍ້ຄວາມສ່ວນຕົວດ້ວຍ YIM',
	'SORT_EMAIL'	=> 'ອີເມລ',
	'SORT_LAST_ACTIVE'	=> 'ການຕອບເທື່ອສຸດທ້າຍ',
	'SORT_POST_COUNT'	=> 'ຈຳນວນຄົນໂພສ',
	'USERNAME_BEGINS_WITH'	=> 'ຊື່ຜູ້ໃຊ້ຂື້ນຕົ້ນດ້ວຍ',
	'USER_ADMIN'	=> 'ຜູ້ເບີ່ງແຍງລະບົບ',
	'USER_BAN'				=> 'Banning',
	'USER_FORUM'	=> 'User statistics',
	'USER_ONLINE'	=> 'ອອນໄລນ໌',
	'USER_PRESENCE'	=> 'Board presence',
	'VIEWING_PROFILE'	=> 'Viewing profile - %s',
	'VISITED'	=> 'ເບີ່ງ ຄັ້ງສຸດທ້າຍ',
	'WWW'	=> 'ເວບໄຊທ໌',
));

?>