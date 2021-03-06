<?php
/**
*
* common.php [Lao]
*
* @package language
* @version $Id: $
* @copyright (c) 2008 phpBB Group
* @author 2008-07-27 - Punlao.com
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
	'TRANSLATION_INFO'	=> 'ພາສາລາວສຳຫລັບ phpBB3 ແປໂດຍທີມງານ <a title="ພັນລາວ - ຊຸມຊົນອອນໄລນ໌ສາຍເລືອດລາວ" href="http://punlao.com/" target="_blank">ພັນລາວ</a>',
	'DIRECTION'	=> 'ltr',
	'DATE_FORMAT'	=> '|d M Y|',

	'USER_LANG'	=> 'la-LA',
	'1_DAY'	=> '໑ ມື້',
	'1_MONTH'	=> '໑ ເດືອນ',
	'1_YEAR'	=> '໑ ປີ',
	'2_WEEKS'	=> '໒ ອາທິດ',
	'3_MONTHS'	=> '໓ ເດືອນ',
	'6_MONTHS'	=> '໖ ເດືອນ',
	'7_DAYS'	=> '໗ ມື້',
	
	'ACCOUNT_ALREADY_ACTIVATED'	=> 'ບັນຊີຜູ້ໃຊ້ງານຂອງທ່ານຖືກເປີດໃຊ້ແລ້ວ.',
	'ACCOUNT_DEACTIVATED'	=> 'ບັນຊີຜູ້ໃຊ້ງານຂອງທ່ານຖືກປິດການໃຊ້ງານ ແລະຈະສາມາດເປີດໃຊ້ງານໄດ້ໂດຍຜູ້ເບິ່ງແຍງລະບົບເທົ່ານັ້ນ.',

	'ACCOUNT_NOT_ACTIVATED'	=> 'ບັນຊີຜູ້ໃຊ້ງານຂອງທ່ານຍັງບໍ່ທັນຖືກເປີດໃຊ້ງານ.',
	'ACP'	=> 'ຖານຄວບຄຸມຜູ້ເບິ່ງແຍງລະບົບ',

	'ACTIVE'	=> 'ເປີດໃຊ້ງານ',
	'ACTIVE_ERROR'	=> 'ຊື່ຜູ້ໃຊ້ງານທີ່ທ່ານເລືອກບໍ່ຢູ່ໃນສະຖານນະທີ່ໃຊ້ງານໄດ້. ຖ້າທ່ານມີບັນຫາໃນການເປີດໃຊ້ງານຊື່ບັນຊີຂອງທ່ານ ກະລຸນາຕິດຕໍ່ຜູ້ເບິ່ງແຍງລະບົບ.',

	'ADMINISTRATOR'	=> 'ຜູ້ເບິ່ງແຍງລະບົບ',
	'ADMINISTRATORS'	=> 'ຜູ້ເບິ່ງແຍງລະບົບ',
	'AGE'	=> 'ອາຍຸ',

	'AIM'	=> 'AIM',
	'ALLOWED'	=> 'ອະນຸຍາດ',
	'ALL_FILES'	=> 'ໄຟລ໌ທັງຫມົດ',
	'ALL_FORUMS'	=> 'ຫມວດທັງຫມົດ',
	'ALL_MESSAGES'	=> 'ຂໍ້ຄວາມທັງຫມົດ',
	'ALL_POSTS'	=> 'ຂໍ້ຄວາມທັງຫມົດ',
	'ALL_TIMES'	=> 'ເຂດເວລາທັງຫມົດເປັນ %1$s %2$s',
	'ALL_TOPICS'	=> 'ກະທູ້ທັງຫມົດ',
	'AND'	=> 'ແລະ',
	'ARE_WATCHING_FORUM'	=> 'ທ່ານໄດ້ເປີດຮັບຂ່າວສານເມື່ອມີການຕອບໃຫມ່ໃນຫມວດນີ້ແລ້ວ.',
	'ARE_WATCHING_TOPIC'	=> 'ທ່ານໄດ້ເປີດຮັບຂ່າວສານເມື່ອມີການຕອບໃຫມ່ໃນກະທູ້ນີ້ແລ້ວ.',



	'ASCENDING'	=> 'ຫນ້ອຍໄປຫລາຍ',
	'ATTACHMENTS'	=> 'ໄຟລ໌ຕິດຄັດ',
	'ATTACHED_IMAGE_NOT_IMAGE'	=> 'ໄຟລ໌ຮູບພາບທີ່ທ່ານຕ້ອງການຕິດຄັດນັ້ນ ບໍ່ສາມາດໃຊ້ໄດ້.',
	'AUTHOR'	=> 'ຈຂກທ.',
	'AUTH_NO_PROFILE_CREATED'	=> 'ການສ້າງໂປຣໄຟລ໌ຜູ້ໃຊ້ງານບໍ່ສົມບູນ.',

	'AVATAR_DISALLOWED_CONTENT'		=> 'The upload was rejected because the uploaded file was identified as a possible attack vector.',
	'AVATAR_DISALLOWED_EXTENSION'	=> 'ໄຟລ໌ນີ້ບໍ່ສາມາດສະແດງໄດ້ ເພາະວ່ານາມສະກຸນຂອງໄຟລ໌ແມ່ນ <strong>%s</strong> ເຊິ່ງບໍ່ອະນຸຍາດໃຫ້ໃຊ້.',
	'AVATAR_EMPTY_REMOTE_DATA'	=> 'ຮູບປະຈຳຕົວທີ່ທ່ານເລືອກ ບໍສາມາດອັບໂຫລດໄດ້ ເພາະວ່າຂໍ້ມູນປາຍທາງບໍ່ມີ ຫຼືຜິດພາດ.',

	'AVATAR_EMPTY_FILEUPLOAD'	=> 'ໄຟລ໌ທີ່ເລືອກເປັນຮູບປະຈຳຕົວນັ້ນວ່າງເປົ່າ.',
	'AVATAR_INVALID_FILENAME'	=> '%s ເປັນຊື່ໄຟລ໌ທີ່ບໍ່ສາມາດໃຊ້ການໄດ້.',
	'AVATAR_NOT_UPLOADED'	=> 'ຮູບປະຈຳຕົວບໍ່ສາມາດອັບໂຫລດໄດ້.',
	'AVATAR_NO_SIZE'	=> 'ຄວາມກວ້າງ ຫຼືຄວາມສູງຂອງຮູບປະຈຳຕົວທີ່ເຊື່ອມຕໍ່ຫານັ້ນ ບໍ່ສາມາດຖືກລະບຸໄດ້ໂດຍອັດຕະໂນມັດ. ກະລຸນາໃສ່ຄ່າຄວາມກ້າງ ແລະຄວາມສູງດ້ວຍຕົນເອງ.',
	'AVATAR_PARTIAL_UPLOAD'	=> 'ໄຟລ໌ທີ່ເລືອກນັ້ນຖືກອັບໂຫລດພຽວບາງສ່ວນ.',
	'AVATAR_PHP_SIZE_NA'	=> 'ຮູບປະຈຳຕົວໃຫຍ່ເກີນໄປ.<br />ຄ່າສູງສຸດຂອງຂະຫນາດໄຟລ໌ໃນ php.ini ບໍ່ສາມາດລະບຸໄດ້.',
	'AVATAR_PHP_SIZE_OVERRUN'	=> 'ຮູບປະຈຳຕົວໃຫຍ່ເກີນໄປ. ຮູບຂະຫນາດສູງສຸດທີ່ອະນຸຍາດໃຫ້ໃຊ້ໄດ້ຄື %d MB.<br />ຫມາຍເຫດ: ຄ່ານີ້ຖືກກຳຫນົດໃນ php.ini ແລະບໍ່ສາມາດຖືກຂ້າມໄດ້.',




	'AVATAR_URL_INVALID'	=> 'URL ທີ່ທ່ານລະບຸມາບໍ່ຖືກຕ້ອງ.',
	'AVATAR_URL_NOT_FOUND'	=> 'ໄຟລ໌ທີ່ທ່ານລະບຸມາບໍ່ມີ.',
	'AVATAR_WRONG_FILESIZE'	=> 'ຮູບພາບປະຈຳຕົວຕ້ອງມີຂະຫນາດລະຫວ່າງ 0 ແລະ %1d %2s.',
	'AVATAR_WRONG_SIZE'	=> 'ຮູບປະຈຳຕົວທີ່ທ່ານສົ່ງເຂົ້າມານັ້ນ ມີຄວາມກວ້າງ %5$d pixels ແລະສູງ %6$d pixels. ຮູບປະຈຳຕົວນັ້ນຕ້ອງມີຂະຫນາດຢ່າງຫນ້ອຍ %1$d pixels x %2$d pixels, ແຕ່ຕ້ອງບໍ່ໃຫຍ່ກວ່າ %3$d pixels x %4$d pixels.',
	'BACK_TO_TOP'	=> 'ຂຶ້ນເທິງ',
	'BACK_TO_PREV'	=> 'ກັບໄປຫນ້າກ່ອນຫນ້ານີ້',
	'BAN_TRIGGERED_BY_EMAIL'	=> 'ອີເມລຂອງທ່ານຖືກຫ້າມໃຊ້ຈາກລະບົບ.',

	'BAN_TRIGGERED_BY_IP'	=> 'IP ຂອງທ່ານຖືກຫ້າມໃຊ້ຈາກນລະບົບ.',
	'BAN_TRIGGERED_BY_USER'	=> 'ຊື່ຜູ້ໃຊ້ງານຂອງທ່ານຖືກຫ້າມໃຊ້ຈາກລະບົບ.',
	'BBCODE_GUIDE'	=> 'ຄຳແນະນຳສຳຫລັບ BBCode',
	'BCC'	=> 'BCC',
	'BIRTHDAYS'	=> 'ວັນເກີດ',
	'BOARD_BAN_PERM'	=> 'ທ່ານຖືກ <strong>ສັ່ງຫ້າມໃຊ້ລະບົບໂດຍຖາວອນ</strong> ຈາກເວບບອດນີ້.<br /><br />ກະລຸນາຕິດຕໍ່ %2$sBoard Administrator%3$s ສຳຫລັບລາຍລະອຽດເພີ່ມເຕີມ.',
	'BOARD_BAN_REASON'	=> 'ເຫດຜົນທີ່ສັ່ງຫ້າມ: <strong>%s</strong>',
	'BOARD_BAN_TIME'	=> 'ທ່ານຖືກສັ່ງຫ້າມໃຊ້ເວັບບອດຈົນກວ່າ <strong>%1$s</strong>.<br /><br />ກະລຸນາຕິດຕໍ່ %2$sBoard Administrator%3$s ສຳຫລັບລາຍລະອຽດເພີ່ມເຕີມ.',
	'BOARD_DISABLE'	=> 'ຂໍອະໄພ, ຂະນະນີ້ເວັບບອດບໍ່ສາມາດນຳໃຊ້ໄດ້.',
	'BOARD_DISABLED'	=> 'ຂະນະນີ້ເວັບບອດຖືກປິດການໃຊ້ງານຢູ່.',
	'BOARD_UNAVAILABLE'	=> 'ຂໍອະໄພ, ຂະນະນີ້ເວັບບອດບໍ່ສາມາດນຳໃຊ້ໄດ້ ກະລຸນາກັບເຂົ້າມາໃຫມ່ໃນພາຍຫລັງ.',
	'BROWSING_FORUM'	=> 'ສະມາຊິກທີ່ກຳລັງເບິ່ງຫມວດນີ້ຢູ່: %1$s',
	'BROWSING_FORUM_GUEST'	=> 'ສະມາຊິກທີ່ກຳລັງເບິ່ງຫມວດນີ້ຢູ່: %1$s ແລະ %2$d ຂາສັນຈອນ',
	'BROWSING_FORUM_GUESTS'	=> 'ສະມາຊິກທີ່ກຳລັງເບິ່ງຫມວດນີ້ຢູ່: %1$s ແລະ %2$d ຂາສັນຈອນ',
	'BYTES'	=> 'Bytes',
	'CANCEL'	=> 'ຍົກເລີກ',
	'CHANGE'	=> 'ປ່ຽນແປງ',
	'CHANGE_FONT_SIZE'	=> 'ປ່ຽນຂະຫນາດຕົວອັກສອນ',
	'CHANGING_PREFERENCES'	=> 'ປ່ຽນການປັບແຕ່ງເວັບບອດ',
	'CHANGING_PROFILE'	=> 'ກຳລັງປ່ຽນການຕັ້ງຄ່າໂປຣໄຟລ໌',
	'CLICK_VIEW_PRIVMSG'	=> '%sໄປກ່ອງຮັບຂໍ້ຄວາມຂອງທ່ານ%s',
	'COLLAPSE_VIEW'	=> 'ຫຍໍ້ມຸມມອງ',
	'CLOSE_WINDOW'	=> 'ປິດໜ້າຕ່າງ',
	'COLOUR_SWATCH'	=> 'ສີຕົວຢ່າງ',
	'COMMA_SEPARATOR'	=> ', ',
	'CONFIRM'	=> 'ຢືນຢັນ',
	'CONFIRM_CODE'	=> 'ລະຫັດຢືນຢັນ',
	'CONFIRM_CODE_EXPLAIN'	=> 'ກະລຸນາໃສ່ລະຫັດທີ່ປະກົດຢູ່ໃຫ້ຖືກຕ້ອງ. ອັກສອນຕ່າງ ໆ ຕ້ອງເນັ້ນໂຕໃຫຍ່ໂຕນ້ອຍໃຫ້ຖືກ ແລະບໍ່ມີເລກສູນ.',
	'CONFIRM_CODE_WRONG'	=> 'ລະຫັດຢືນຢັນທີ່ທ່ານໃສ່ນັ້ນບໍ່ຖືກຕ້ອງ.',
	'CONFIRM_OPERATION'	=> 'ທ່ານແນ່ໃຈບໍ່ວ່າຈະເປີດໃຊ້ສິ່ງນີ້?',
	'CONGRATULATIONS'	=> 'ຂໍສະແດງຄວາມຍິນດີກັບ',
	'CONNECTION_FAILED'	=> 'ການເຊື່ອມຕໍ່ຜິດພາດ.',
	'CONNECTION_SUCCESS'	=> 'ການເຊື່ອມຕໍ່ສຳເລັດຜົນ!',
	'COOKIES_DELETED'	=> 'ຄຸກກີ້ໃນເວັບບອດຖືກລຶບອອກຫມົດແລ້ວ.',
	'CURRENT_TIME'	=> 'ມື້ນີ້ແມ່ນວັນ %s',
	'DAY'	=> 'ວັນ',
	'DAYS'	=> 'ວັນ',
	'DELETE'	=> 'ລຶບ',
	'DELETE_ALL'	=> 'ລຶບທັງຫມົດ',
	'DELETE_COOKIES'	=> 'ລຶບຄຸກກີ້ທັງຫມົດ',
	'DELETE_MARKED'	=> 'ລຶບອັນທີ່ເລືອກໄວ້',
	'DELETE_POST'	=> 'ລຶບຂໍ້ຄວາມ',
	'DELIMITER'	=> 'Delimiter',
	'DESCENDING'	=> 'ຫລາຍໄປຫນ້ອຍ',
	'DISABLED'	=> 'ຖືກປິດການໃຊ້ງານ',
	'DISPLAY'	=> 'ສະແດງ',
	'DISPLAY_GUESTS'	=> 'ສະແດງຂາສັນຈອນ',
	'DISPLAY_MESSAGES'	=> 'ສະແດງຂໍ້ຄວາມຈາກກ່ອນຫນ້າ',
	'DISPLAY_POSTS'	=> 'ສະແດງຂໍ້ຄວາມຄືນຫລັງ',
	'DISPLAY_TOPICS'	=> 'ສະແດງກະທູ້ຄືນຫລັງ',
	'DOWNLOADED'	=> 'ດາວໂຫລດແລ້ວ',
	'DOWNLOADING_FILE'	=> 'ກຳລັງດາວໂຫລດໄຟລ໌',
	'DOWNLOAD_COUNT'	=> 'ໄຟລ໌ນີ້ຖືກດາວໂຫລດໄປແລ້ວ %d ເທື່ອ',
	'DOWNLOAD_COUNTS'	=> 'ໄຟລ໌ນີ້ຖືກດາວໂຫລດໄປແລ້ວ %d ເທື່ອ',
	'DOWNLOAD_COUNT_NONE'	=> 'ຍັງບໍ່ທັນໄດ້ດາວໂຫລດ',
	'VIEWED_COUNT'	=> 'ຖືກເປີດເບິ່ງ %d ຄັ້ງ',
	'VIEWED_COUNTS'	=> 'ຖືກເປີດເບິ່ງ %d ຄັ້ງ',
	'VIEWED_COUNT_NONE'	=> 'ຍັງບໍ່ມີໃຜເບິ່ງເທື່ອ',
	'EDIT_POST'	=> 'ແກ້ໄຂຂໍ້ຄວາມ',
	'EMAIL'	=> 'ອີເມລ',
	'EMAIL_ADDRESS'	=> 'ທີ່ຢູ່ອີເມລ',
	'EMAIL_SMTP_ERROR_RESPONSE'	=> 'ມີບັນຫາໃນການສົ່ງອີເມລໃນແຖວທີ່ <strong>%1$s</strong>. ຕອບສະຫນອງ: %2$s.',
	'EMPTY_SUBJECT'	=> 'ທ່ານຕ້ອງໃສ່ຫົວຂໍ້ກະທູ້ກ່ອນຈຶ່ງຈະສາມາດຕັ້ງກະທູ້ໄດ້.',
	'EMPTY_MESSAGE_SUBJECT'	=> 'ທ່ານຕ້ອງໃສ່ຫົວຂໍ້ຂອງຂໍ້ຄວາມກ່ອນ ຈຶ່ງຈະສາມາດສົ່ງຂໍ້ຄວາມໄດ້.',
	'ENABLED'	=> 'ເປີດໃຊ້',
	'ENCLOSURE'	=> 'Enclosure',
	'ERR_CHANGING_DIRECTORY'	=> 'ບໍ່ສາມາດປ່ຽນເດີເຣັກເທີຣີໄດ້.',
	'ERR_CONNECTING_SERVER'	=> 'ການເຊື່ອມຕໍ່ຫາເຊີບເວີຜິດພາດ.',
	'ERR_JAB_AUTH'	=> 'ບໍ່ສາມາດຜ່ານການອະນຸຍາດໃນເຊີບເວີ Jabber.',
	'ERR_JAB_CONNECT'	=> 'ບໍ່ສາມາດເຊື່ອມຕໍ່ຫາເຊີບເວີ Jabber.',
	'ERR_UNABLE_TO_LOGIN'	=> 'ຊື່ ຫຼືລະຫັດຜ່ານບໍ່ຖືກຕ້ອງ.',
	'ERR_UNWATCHING'					=> 'An error occured while trying to unsubscribe.',
	'ERR_WATCHING'						=> 'An error occured while trying to subscribe.',
	'ERR_WRONG_PATH_TO_PHPBB'	=> 'path ຂອງ phpBB ທີ່ລະບຸມານັ້ນບໍ່ຖືກຕ້ອງ.',
	'EXPAND_VIEW'	=> 'ຂະຫຍາຍມຸມມອງ',
	'EXTENSION'	=> 'ສ່ວນຂະຫຍາຍ',
	'EXTENSION_DISABLED_AFTER_POSTING'	=> 'ສ່ວນຂະຫຍາຍ <strong>%s</strong> ຖືກປີດການໃຊ້ງານໄວ້ ແລະບໍ່ສາມາດສະແດງຜົນໄດ້ອີກ.',
	'FAQ'	=> 'ຄຳຖາມ-ຄຳຕອບ',
	'FAQ_EXPLAIN'	=> 'ຄຳຕອບຂອງຄຳຖາມທີ່ມີຄົນຖາມຫລາຍ',
	'FILENAME'	=> 'ຊື່ໄຟລ໌',
	'FILESIZE'	=> 'ຂະໜາດໄຟລ໌',
	'FILEDATE'	=> 'ເວລາຂອງໄຟລ໌',
	'FILE_COMMENT'	=> 'ຄຳເຫັນຂອງໄຟລ໌',
	'FILE_NOT_FOUND'	=> 'ບໍ່ພົບໄຟລ໌ທີ່ທ່ານຊອກຫາ.',
	'FIND_USERNAME'	=> 'ຄົ້ນຫາສະມາຊິກ',
	'FOLDER'	=> 'ໂຟນເດີ',
	'FORGOT_PASS'	=> 'ຂ້ອຍລືມລະຫັດຜ່ານ',
	'FORM_INVALID'	=> 'ແບບຟອມທີ່ທ່ານສົ່ງເຂົ້າມານັ້ນບໍ່ຖືກຕ້ອງ ກະລຸນາແກ້ໄຂ ແລ້ວສົ່ງເຂົ້າມາໃຫມ່.',
	'FORUM'	=> 'ຫມວດ',
	'FORUMS'	=> 'ຫມວດ',
	'FORUMS_MARKED'	=> 'ຫມວດຕ່າງ ໆ ໃນເວັບບອດຖືກຫມາຍວ່າໄດ້ອ່ານຫມົດແລ້ວ.',
	'FORUM_CAT'	=> 'ຫມວດຫມູ່',
	'FORUM_INDEX'	=> 'ຫນ້າທຳອິດ',
	'FORUM_LINK'	=> 'ລິ້ງເວັບບອດ',
	'FORUM_LOCATION'	=> 'ທີ່ຢູ່ເວັບບອດ',
	'FORUM_LOCKED'	=> 'ຫມວດທີ່ຖືກລັອກໄວ້',
	'FORUM_RULES'	=> 'ກົດກະຕິກາ',
	'FORUM_RULES_LINK'	=> 'ກະລຸນາຄລິກບ່ອນນີ້ເພື່ອອ່ານກົດກະຕິກາຂອງເວັບບອດ',
	'FROM'	=> 'ຈາກ',
	'FSOCK_DISABLED'	=> 'ຄຳສັ່ງບໍ່ສຳເລັດຜົນຍ້ອນວ່າຟັງຊັນ <var>fsockopen</var> ຖືກປິດການໃຊ້ງານ ຫຼືເຊີເວີທີ່ຖືກ query ນັ້ນບໍ່ສາມາດຕິດຕໍ່ໄດ້.',
	'FTP_FSOCK_HOST'	=> 'FTP host',
	'FTP_FSOCK_HOST_EXPLAIN'	=> 'ເຊີບເວີ FTP ທີ່ໃຊ້ຕິດຕໍ່ກັບເວັບໄຊຂອງທ່ານ.',
	'FTP_FSOCK_PASSWORD'	=> 'ລະຫັດ FTP',
	'FTP_FSOCK_PASSWORD_EXPLAIN'	=> 'ລະຫັດຜ່ານຂອງຜູ້ໃຊ້ງານ FTP ນີ້.',
	'FTP_FSOCK_PORT'	=> 'FTP port',
	'FTP_FSOCK_PORT_EXPLAIN'	=> 'Port ທີ່ໃຊ້ເຊື່ອມຕໍ່ຫາເຊີບເວີຂອງທ່ານ.',
	'FTP_FSOCK_ROOT_PATH'	=> 'Path ຂອງ phpBB',
	'FTP_FSOCK_ROOT_PATH_EXPLAIN'	=> 'Path ຈາກ root ໄປຫາ phpBB ຂອງທ່ານ.',
	'FTP_FSOCK_TIMEOUT'	=> 'FTP timeout',
	'FTP_FSOCK_TIMEOUT_EXPLAIN'	=> 'ລະບຸເວລາທີ່ລະບົບຈະຖືກການຕອບກັບຈາກເຊີບເວີ ໂດຍກຳຫນົດເປັນວິນາທີ.',
	'FTP_FSOCK_USERNAME'	=> 'ຊື່ຜູ້ໃຊ້ງານ FTP',
	'FTP_FSOCK_USERNAME_EXPLAIN'	=> 'ຊື່ຜູ້ໃຊ້ງານ FTP ຂອງທ່ານ',
	'FTP_HOST'	=> 'FTP host',
	'FTP_HOST_EXPLAIN'	=> 'ເຊີບເວີຂອງ FTP ທີ່ເຊື່ອມຕໍ່ກັບເວັບໄຊຂອງທ່ານ.',
	'FTP_PASSWORD'	=> 'ລະຫັດຜ່ານຂອງ FTP',
	'FTP_PASSWORD_EXPLAIN'	=> 'ລະຫັດຜ່ານຂອງຜູ້ໃຊ້ງານ FTP.',
	'FTP_PORT'	=> 'FTP port',
	'FTP_PORT_EXPLAIN'	=> 'Port ທີ່ໃຊ້ເຊື່ອມຕໍ່ຫາເຊີບເວີຂອງທ່ານ.',
	'FTP_ROOT_PATH'	=> 'Path ຂອງ phpBB',
	'FTP_ROOT_PATH_EXPLAIN'	=> 'Path ຈາກ root ໄປຫາ phpBB ຂອງທ່ານ.',
	'FTP_TIMEOUT'	=> 'FTP timeout',
	'FTP_TIMEOUT_EXPLAIN'	=> 'ລະບຸເວລາທີ່ລະບົບຈະຖືກການຕອບກັບຈາກເຊີບເວີ ໂດຍກຳຫນົດເປັນວິນາທີ.',
	'FTP_USERNAME'	=> 'ຊື່ຜູ້ໃຊ້ງານ FTP',
	'FTP_USERNAME_EXPLAIN'	=> 'ຊື່ຜູ້ໃຊ້ງານ FTP ຂອງທ່ານ',
	'GENERAL_ERROR'	=> 'ຄວາມຜິດພາດທົ່ວໄປ',
	'GO'	=> 'ໄປ',
	'GOTO_PAGE'	=> 'ໄປຫນ້າ',
	'GROUP'	=> 'ກຸ່ມ',
	'GROUPS'	=> 'ກຸ່ມ',
	'GROUP_ERR_TYPE'	=> 'ກຸ່ມທີ່ທ່ານເລືອກນັ້ນບໍ່ເຫມາະສົມ ກະລຸນາເລືອກໃຫມ່.',
	'GROUP_ERR_USERNAME'	=> 'ທ່ານຍັງບໍ່ໄດ້ລະບຸຊື່ກຸ່ມ.',
	'GROUP_ERR_USER_LONG'	=> 'ຊື່ກຸ່ມທີ່ທ່ານລະບຸນັ້ນຍາວເກີນ, ຊື່ກຸ່ມຕ້ອງບໍ່ເກີນ ໖໐ ຕົວອັກສອນ.',
	'GUEST'	=> 'ຂາສັນຈອນ',
	'GUEST_USERS_ONLINE'	=> 'ຂະນະນີ້ມີຂາສັນຈອນ %d ອອນໄລນ໌ຢູ່',
	'GUEST_USERS_TOTAL'	=> '%d ຂາສັນຈອນ',
	'GUEST_USERS_ZERO_ONLINE'	=> 'ຂະນະນີ້ບໍ່ມີຂາສັນຈອນອອນໄລນ໌ໃນລະບົບ',
	'GUEST_USERS_ZERO_TOTAL'	=> '໐ ຂາສັນຈອນ',
	'GUEST_USER_ONLINE'	=> 'ຂະນະນີ້ມີຂາສັນຈອນ %d ອອນໄລນ໌ຢູ່',
	'GUEST_USER_TOTAL'	=> '%d ຂາສັນຈອນ',
	'G_ADMINISTRATORS'	=> 'ຜູ້ເບິ່ງແຍງລະບົບ',
	'G_BOTS'	=> 'Bots',
	'G_GUESTS'	=> 'ຂາສັນຈອນ',
	'G_REGISTERED'	=> 'ສະມາຊິກ',
	'G_REGISTERED_COPPA'	=> 'ສະມາຊິກທີ່ອາຍຸຕ່ຳກວ່າ ໑໓',
	'G_GLOBAL_MODERATORS'	=> 'ຜູ້ເບິ່ງແຍງທົ່ວໄປ',
	'HIDDEN_USERS_ONLINE'	=> '%d ຜູ້ປະສົງບໍ່ອອກນາມອອນໄລນ໌ຢູ່',
	'HIDDEN_USERS_TOTAL'	=> '%d ຄົນບໍ່ສະແດງຕົວ ',
	'HIDDEN_USERS_TOTAL_AND'	=> '%d ຄົນບໍ່ສະແດງຕົວ ແລະ ',
	'HIDDEN_USERS_ZERO_ONLINE'	=> '0 ຄົນບໍ່ສະແດງຕົວ',
	'HIDDEN_USERS_ZERO_TOTAL'	=> '0 ຄົນບໍ່ສະແດງຕົວ',
	'HIDDEN_USERS_ZERO_TOTAL_AND'	=> '0 ຄົນບໍ່ສະແດງຕົວ ແລະ ',
	'HIDDEN_USER_ONLINE'	=> '%d ຄົນບໍ່ສະແດງຕົວ',
	'HIDDEN_USER_TOTAL'	=> '%d ຄົນບໍ່ສະແດງຕົວ',
	'HIDDEN_USER_TOTAL_AND'	=> '%d ຄົນບໍ່ສະແດງຕົວ ແລະ ',
	'HIDE_GUESTS'	=> 'ບໍ່ນັບຂາສັນຈອນ',
	'HIDE_ME'	=> 'ບໍ່ສະແດງສະຖານະອອນໄລນ໌ຂອງຂ້ອຍ',
	'HOURS'	=> 'ຊົ່ວໂມງ',
	'HOME'	=> 'ຫນ້າທຳອິດ',
	'ICQ'	=> 'ICQ',
	'ICQ_STATUS'	=> 'ສະຖານະ ICQ',
	'IF'	=> 'ຖ້າ',
	'IMAGE'	=> 'ຮູບ',
	'IMAGE_FILETYPE_INVALID'	=> 'ຂໍອະໄພ, ລະບົບບໍ່ຮອງຮັບໄຟລ໌ຮູບພາບນາມສະກຸນ %d ສຳຫລັບ mimetype %s.',
	'IMAGE_FILETYPE_MISMATCH'	=> 'ນາມສະກຸນຂອງໄຟລ໌ພາບບໍ່ກົງກັນ. ນາມສະກຸນທີ່ຄວນຈະເປັນຄື %1$s ແຕ່ສົ່ງເຂົ້າມາແມ່ນ %2$s.',
	'IN'	=> 'ໃນ',
	'INDEX'	=> 'ຫນ້າຫລັກ',
	'INFORMATION'	=> 'ຂໍ້ມູນ',
	'INTERESTS'	=> 'ຄວາມສົນໃຈ',
	'INVALID_DIGEST_CHALLENGE'	=> 'digest challenge ບໍ່ຖືກຕ້ອງ.',
	'INVALID_EMAIL_LOG'	=> '<strong>%s</strong> ເປັນໄປໄດ້ວ່າອາດຈະບໍ່ຖືກຕ້ອງ',
	'IP'	=> 'IP',
	'IP_BLACKLISTED'	=> 'IP %1$s ຂອງທ່ານເປັນ IP ທີ່ມີຢູ່ໃນບັນຊີດຳ ຈຶ່ງບໍ່ສາມາດໃຊ້ໄດ້. ກະລຸນາອ່ານຂໍ້ມູນເພີ່ມເຕີມໃນ <a href="%2$s">%2$s</a>.',
	'JABBER'	=> 'Jabber',
	'JOINED'	=> 'ເຂົ້າຮ່ວມເມື່ອ',
	'JUMP_PAGE'	=> 'ໃສ່ໝາຍເລກຂອງຫນ້າທີ່ຕ້ອງການຈະໄປ.',
	'JUMP_TO'	=> 'ໄປທີ່',
	'JUMP_TO_PAGE'	=> 'ກົດເພື່ອໄປໜ້າຕໍ່ໄປ…',
	'KB'	=> 'KB',
	'KIB'	=> 'KiB',
	'LAST_POST'	=> 'ຂໍ້ຄວາມຫລ້າສຸດ',
	'LAST_UPDATED'	=> 'ອັບເດດຫລ້າສຸດ',
	'LAST_VISIT'	=> 'ເຂົ້າມາຫລ້າສຸດ',
	'LDAP_NO_LDAP_EXTENSION'	=> 'ສ່ວນຂະຫຍາຍ LDAP ບໍ່ສາມາດໃຊ້ໄດ້.',
	'LDAP_NO_SERVER_CONNECTION'	=> 'ບໍ່ສາມາດຕິດຕໍ່ຫາເຊີບເວີ LDAP ໄດ້.',
	'LEGEND'	=> 'ເຄື່ອງຫມາຍບອກ',
	'LOCATION'	=> 'ທີ່ຢູ່',
	'LOCK_POST'	=> 'ລັອກຂໍ້ຄວາມ',
	'LOCK_POST_EXPLAIN'	=> 'ປ້ອງກັນການແກ້ໄຂຂໍ້ຄວາມ',
	'LOCK_TOPIC'	=> 'ລັອກຫົວຂໍ້',
	'LOGIN'	=> 'ລັອກອິນ',
	'LOGIN_CHECK_PM'	=> 'ລັອກອິນເຂົ້າໃຊ້ລະບົບເພື່ອອ່ານຂໍ້ຄວາມສ່ວນຕົວຂອງທ່ານ.',
	'LOGIN_CONFIRMATION'	=> 'ຢືນຢັນການລັອກອິນ',
	'LOGIN_CONFIRM_EXPLAIN'	=> 'ເພື່ອປ້ອງກັນການ brute force ຊື່ຜູ້ໃຊ້ງານໃນເວັບບອດ ທາງລະບົບຈຶ່ງຕ້ອງຂໍໃຫ້ທ່ານໃສ່ລະຫັດຢືນຢັນກ່ອນ ເນື່ອງຈາກທ່ານລັອກອິນບໍ່ຜ່ານເປັນເກີນກຳຫນົດທີ່ລະບົບຍອມຮັບໄດ້. ລະຫັດຢືນຢັນໄດ້ຖືກສະແດງໃນຮູບພາບດ້ານລຸ່ມ, ຫາກທ່ານບໍ່ສາມາດອ່ານລະຫັດນີ້ໄດ້ ກະລຸນາຕິດຕໍ່ %sBoard Administrator%s.',
	'LOGIN_ERROR_ATTEMPTS'	=> 'ທ່ານໄດ້ພະຍາຍາມລັອກອິນເກີນຈຳນວນທີ່ລະບົບຮອງຮັບໄດ້. ຫາກທ່ານຍັງຈະພະຍາຍາມລັອກອິນຕໍ່ໄປ ທ່ານຕ້ອງໃສ່ລະຫັດຢືນຢັນດ້ານລຸ່ມນີ້ກ່ອນ.',
	'LOGIN_ERROR_EXTERNAL_AUTH_APACHE'	=> 'ທ່ານໄດ້ຮັບການອະນຸຍາດຈາກ Apache.',
	'LOGIN_ERROR_PASSWORD'	=> 'ທ່ານໃສ່ລະຫັດບໍ່ຖືກຕ້ອງ ກະລຸນາກວດສອບລະຫັດຜ່ານຂອງທ່ານອີກຄັ້ງ. ຫາກທ່ານຍັງບໍ່ສາມາດລັອກອິນເຂົ້າໃຊ້ລະບົບໄດ້ ກະລຸນາຕິດຕໍ່ %sBoard Administrator%s.',
	'LOGIN_ERROR_PASSWORD_CONVERT'	=> 'ລະຫັດຜ່ານບໍ່ສາມາດຖືກປ່ຽນມາໃຊ້ໃນລະບົບເວັບບອດນີ້ໄດ້. ກະລຸນາ %srequest a new password%s. ຖ້າທ່ານຍັງພົບບັນຫາອື່ນອີກ ໃຫ້ຕິດຕໍ່ %sBoard Administrator%s.',
	'LOGIN_ERROR_USERNAME'	=> 'ທ່ານໃສ່ຊື່ຜູ້ໃຊ້ງານບໍ່ຖືກຕ້ອງ. ກະລຸນາກວດສອບຊື່ຄືນແລ້ວລອງໃຫມ່ ຫາກຍັງບໍ່ສາມາດລັອກອິນໄດ້ ໃຫ້ຕິດຕໍ່ %sBoard Administrator%s.',
	'LOGIN_FORUM'	=> 'ເພື່ອອ່ານ ຫຼືຕອບໃນຫມວດນີ້ ທ່ານຕ້ອງໃສ່ລະຫັດຜ່ານຂອງຫມວດໃຫ້ຖືກກ່ອນ.',
	'LOGIN_INFO'	=> 'ກ່ອນຫນ້າທ່ານຈະລັອກອິນເຂົ້າໃຊ້ລະບົບໄດ້ ທ່ານຕ້ອງລົງທະບຽນເປັນສະມາຊິກກ່ອນ. ການລົງທະບຽນໃຊ້ເວລາພຽງເລັກນ້ອຍ ແຕ່ຈະຊ່ວຍເພີ່ມຂີດຄວາມສາມາດໃນການໃຊ້ເວັບບອດໃຫ້ທ່ານໄດ້. ຜູ້ເບິ່ງແຍງລະບົບອາດຈະຕ້ອງມອບສິດເພີ່ມເຕີມໃຫ້ສະມາຊິກນຳ. ກ່ອນທີ່ທ່ານຈະລົງທະບຽນເປັນສະມາຊິກ ຂໍໃຫ້ທ່ານອ່ານກົດກະຕິການ ມາລະຍາດ ຂອງການນຳໃຊ້ເວັບບອດໃຫ້ຖີ່ຖ້ວນກ່ອນ ເພື່ອປະໂຫຍດຂອງທ່ານເອງ.',
	'LOGIN_VIEWFORUM'	=> 'ທ່ານຕ້ອງເປັນສະມາຊິກ ແລະລັອກອິນເຂົ້າໃຂ້ລະບົບກ່ອນ ຈຶ່ງຈະສາມາດເຂົ້າເບິ່ງເວັບບອດນີ້ໄດ້.',
	'LOGIN_EXPLAIN_EDIT'	=> 'ການທີ່ຈະຂຽນຂໍ້ຄວາມໃດ ໆ ໃນເວັບບອດນີ້ ທ່ານຕ້ອງເປັນສະມາຊິກ ແລະລັອກອິນເຂົ້າໃຊ້ລະບົບກ່ອນ.',
	'LOGIN_EXPLAIN_VIEWONLINE'	=> 'ການທີ່ຈະເບິ່ງລາຍຊື່ຄົນທີ່ອອນໄລນ໌ໃນເວັບບອດນີ້ ທ່ານຕ້ອງເປັນສະມາຊິກ ແລະລັອກອິນເຂົ້າໃຊ້ລະບົບກ່ອນ.',
	'LOGOUT'	=> 'ອອກຈາກລະບົບ',
	'LOGOUT_USER'	=> 'ອອກຈາກລະບົບ [ %s ]',
	'LOG_ME_IN'	=> 'ເຂົ້າສູ່ລະບົບເອງໂດຍອັດຕະໂນມັດທຸກຄັ້ງທີ່ຂ້ອຍເຂົ້າມາ',
	'MARK'	=> 'ເລືອກ',
	'MARK_ALL'	=> 'ເລືອກທັງຫມົດ',
	'MARK_FORUMS_READ'	=> 'ຫມາຍວ່າໄດ້ອ່ານຫມົດແລ້ວ',
	'MB'	=> 'MB',
	'MIB'	=> 'MiB',
	'MCP'	=> 'ຖານຄວບຄຸມຜູ້ເບິ່ງແຍງຫມວດ',
	'MEMBERLIST'	=> 'ລາຍຊື່ສະມາຊິກ',
	'MEMBERLIST_EXPLAIN'	=> 'ເບິ່ງລາຍຊື່ສະມາຊິກທັງຫມົດ',
	'MERGE'	=> 'ລວມ',
	'MERGE_POSTS'	=> 'ລວມຂໍ້ຄວາມ',
	'MERGE_TOPIC'	=> 'ລວມກະທູ້',
	'MESSAGE'	=> 'ຂໍ້ຄວາມ',
	'MESSAGES'	=> 'ຂໍ້ຄວາມ',
	'MESSAGE_BODY'	=> 'ເນື້ອໃນຂໍ້ຄວາມ',
	'MINUTES'	=> 'ນາທີ',
	'MODERATE'	=> 'Moderate',
	'MODERATOR'	=> 'ຜູ້ຄຸມຫມວດ',
	'MODERATORS'	=> 'ຜູ້ເບິ່ງແຍງຫມວດ',
	'MONTH'	=> 'ເດືອນ',
	'MOVE'	=> 'ຍ້າຍ',
	'MSNM'	=> 'MSNM/WLM',
	'NA'	=> 'ບໍ່ມີ',
	'NEWEST_USER'	=> 'ສະມາຊິກໃຫມ່ຫລ້າສຸດ <strong>%s</strong>',
	'NEW_MESSAGE'	=> 'ຂໍ້ຄວາມໃຫມ່',
	'NEW_MESSAGES'	=> 'ຂໍ້ຄວາມໃຫມ່',
	'NEW_PM'	=> '<strong>%d</strong> ຂໍ້ຄວາມໃຫມ່',
	'NEW_PMS'	=> '<strong>%d</strong> ຂໍ້ຄວາມໃຫມ່',
	'NEW_POST'	=> 'ມີຂໍ້ຄວາມໃຫມ່',
	'NEW_POSTS'	=> 'ມີຂໍ້ຄວາມໃຫມ່',
	'NEXT'	=> 'ຖັດໄປ',
	'NEXT_STEP'	=> 'ຖັດໄປ',
	'NEVER'	=> 'ບໍ່ເຄີຍ',
	'NO'	=> 'ບໍ່',
	'NOT_ALLOWED_MANAGE_GROUP'	=> 'ທ່ານບໍ່ໄດ້ຮັບອະນຸຍາດໃຫ້ຈັດການກຸ່ມນີ້ໄດ້.',
	'NOT_AUTHORISED'	=> 'ທ່ານບໍ່ໄດ້ຮັບອະນຸຍາດໃຫ້ເຂົ້າໃຊ້ສ່ວນນີ້ໄດ້.',
	'NOT_WATCHING_FORUM'	=> 'ທ່ານໄດ້ປິດການຮັບຂ່າວສານເມື່ອມີການອັບເດດໃນເວັບບອດນີ້ແລ້ວ.',
	'NOT_WATCHING_TOPIC'	=> 'ທ່ານໄດ້ປິດການຮັບຂ່າວສານເມື່ອມີການອັບເດດໃນກະທູ້ນີ້ແລ້ວ.',
	'NOTIFY_ADMIN'	=> 'ກະລຸນາແຈ້ງຜູ້ເບິ່ງແຍງເວັບບອດ ຫຼືເວັບມາສເຕີ.',
	'NOTIFY_ADMIN_EMAIL'	=> 'ກະລຸນາແຈ້ງຜູ້ເບິ່ງແຍງເວັບບອດ ຫຼືເວັບມາສເຕີ: <a href="mailto:%1$s">%1$s</a>',
	'NO_ACCESS_ATTACHMENT'	=> 'ທ່ານບໍ່ໄດ້ຮັບອະນຸຍາດໃຫ້ເບິ່ງໄຟລ໌ນີ້ໄດ້.',
	'NO_ACTION'	=> 'ທ່ານບໍ່ໄດ້ລະບຸໃຫ້ເຮັດຫຍັງເທື່ອ.',
	'NO_ADMINISTRATORS'	=> 'ບໍ່ມີຜູ້ເບິ່ງແຍງລະບົບຖືກເລືອກໃຫ້ກັບເວັບບອດນີ້',
	'NO_AUTH_ADMIN'	=> 'ທ່ານບໍ່ສາມາດເຂົ້າ ຖານຄວບຄຸມຜູ້ເບິ່ງແຍງລະບົບ ໄດ້ເນື່ອງຈາກທ່ານບໍ່ໄດ້ເປັນຜູ້ເບິ່ງແຍງລະບົບ.',
	'NO_AUTH_ADMIN_USER_DIFFER'	=> 'ທ່ານບໍ່ສາມາດຢືນຢັນຕົວເອງເປັນສະມາຊິກຄົນອື່ນໄດ້.',
	'NO_AUTH_OPERATION'	=> 'ທ່ານບໍ່ໄດ້ຮັບອະນຸຍາດໃຫ້ເຮັດໄດ້.',
	'NO_CONNECT_TO_SMTP_HOST'	=> 'ບໍ່ສາມາດເຊື່ອມຕໍ່ຫາ smtp host : %1$s : %2$s',
	'NO_BIRTHDAYS'	=> 'ບໍ່ມີສະມາຊິກຄົນໃດມີວັນເກີດມື້ນີ້.',
	'NO_EMAIL_MESSAGE'	=> 'ຂໍ້ຄວາມອີເມລວ່າງເປົ່າ.',
	'NO_EMAIL_RESPONSE_CODE'	=> 'ບໍ່ສາມາດຮັບການຕອບສະຫນອງຈາກ server response.',
	'NO_EMAIL_SUBJECT'	=> 'ຫົວຂໍ້ຂອງອີເມລຍັງບໍ່ມີ.',
	'NO_FORUM'	=> 'ບໍ່ມີຫມວດທີ່ທ່ານເລືອກ.',
	'NO_FORUMS'	=> 'ເວັບບອດນີ້ຍັງບໍ່ມີຫມວດຫມູ່ເທື່ອ.',
	'NO_GROUP'	=> 'ກຸ່ມຜູ້ໃຊ້ງານທີ່ທ່ານຊອກນັ້ນບໍ່ມີ.',
	'NO_GROUP_MEMBERS'	=> 'ກຸ່ມນີ້ບໍ່ມີສະມາຊິກເທື່ອ.',
	'NO_IPS_DEFINED'	=> 'ບໍ່ໄດ້ລະບຸ IP addresses ຫຼື hostnames',
	'NO_MEMBERS'	=> 'ບໍ່ມີສະມາຊິກທີ່ຊອກຫາ.',
	'NO_MESSAGES'	=> 'ບໍ່ມີຂໍ້ຄວາມ',
	'NO_MODE'	=> 'ບໍ່ໄດ້ກຳຫນົດໂຫມດເທື່ອ.',
	'NO_MODERATORS'	=> 'ຍັງບໍ່ໄດ້ແຕ່ງຕັ້ງຜູ້ເບິ່ງແຍງໃນຫມວດນີ້.',
	'NO_NEW_MESSAGES'	=> 'ບໍ່ມີຂໍ້ຄວາມໃໝ່',
	'NO_NEW_PM'	=> '<strong>0</strong> ຂໍ້ຄວາມສ່ວນຕົວໃຫມ່',
	'NO_NEW_POSTS'	=> 'ບໍ່ມີຂໍ້ຄວາມໃຫມ່',
	'NO_ONLINE_USERS'	=> 'ຍັງບໍ່ມີສະມາຊິກ',
	'NO_POSTS'	=> 'ບໍ່ມີຂໍ້ຄວາມ',
	'NO_POSTS_TIME_FRAME'	=> 'ບໍ່ມີຂໍ້ຄວາມໃນກະທູ້ນີ້ສຳຫລັບຊ່ວງເວລາທີ່ທ່ານເລືອກ.',
	'NO_SUBJECT'	=> 'ຍັງບໍ່ໄດ້ລະບຸຫົວຂໍ້ເທື່ອ',
	'NO_SUCH_SEARCH_MODULE'	=> 'ຍັງບໍ່ໄດ້ກຳຫນົດລະບົບຄົ້ນຫາເທື່ອ.',
	'NO_SUPPORTED_AUTH_METHODS'	=> 'ບໍ່ຮອງຮັບການຢືນຢັນໂດຍວິທີນີ້.',
	'NO_TOPIC'	=> 'ບໍ່ມີກະທູ້ທີ່ທ່ານຊອກຫາ.',
	'NO_TOPIC_FORUM'	=> 'ບໍ່ມີກະທູ້ ຫຼືຫມວດທີ່ທ່ານຊອກຫາ.',
	'NO_TOPICS'	=> 'ຍັງບໍ່ມີກະທູ້ໃນຫມວດນີ້ເທື່ອ.',
	'NO_TOPICS_TIME_FRAME'	=> 'ຍັງບໍ່ມີກະທູ້ໃນຫມວດນີ້ໃນຊ່ວງເວລາທີ່ທ່ານເລືອກ.',
	'NO_UNREAD_PM'	=> '<strong>໐</strong> ຂໍ້ຄວາມຍັງບໍ່ໄດ້ອ່ານ',
	'NO_UPLOAD_FORM_FOUND'	=> 'ບໍ່ພົບຮູບແບບໄຟລ໌ທີ່ຮອງຮັບສຳຫລັບການອັບໂຫລດ.',
	'NO_USER'	=> 'ບໍ່ມີຊື່ຜູ້ໃຊ້ງານທີ່ທ່ານຊອກ.',
	'NO_USERS'	=> 'ບໍ່ມີຊື່ຜູ້ໃຊ້ງານທີ່ທ່ານຊອກ.',
	'NO_USER_SPECIFIED'	=> 'ທ່ານຍັງບໍ່ໄດ້ລະບຸຊື່ຜູ້ໃຊ້ງານເທື່ອ.',
	'OCCUPATION'	=> 'ອາຊີບ',
	'OFFLINE'	=> 'Offline',
	'ONLINE'	=> 'Online',
	'ONLINE_BUDDIES'	=> 'ຫມູ່ທີ່ອອນໄລນ໌ຢູ່',
	'ONLINE_USERS_TOTAL'	=> 'ສະມາຊິກທີ່ອອນໄລນ໌ທັງຫມົດຕອນນີ້ມີ <strong>%d</strong> ຄົນ :: ',
	'ONLINE_USERS_ZERO_TOTAL'	=> 'ຕອນນີ້ມີຜູ້ໃຊ້ລະບົບ <strong>0</strong> ຄົນ :: ',
	'ONLINE_USER_TOTAL'	=> 'ຕອນນີ້ມີຜູ້ໃຊ້ລະບົບ <strong>%d</strong> ຄົນ :: ',
	'OPTIONS'	=> 'ຕົວເລືອກ',
	'PAGE_OF'	=> 'ຫນ້າທີ່ <strong>%1$d</strong> ຈາກທັງຫມົດ <strong>%2$d</strong> ຫນ້າ',
	'PASSWORD'	=> 'ລະຫັດຜ່ານ',
	'PLAY_QUICKTIME_FILE'	=> 'ຫຼິ້ນໄຟລ໌ Quicktime',
	'PM'	=> 'PM',
	'POSTING_MESSAGE'	=> 'ກຳລັງຂຽນຂໍ້ຄວາມໃນ %s',
	'POSTING_PRIVATE_MESSAGE'	=> 'ຂຽນຂໍ້ຄວາມສ່ວນຕົວ',
	'POST'	=> 'ຂຽນ',
	'POST_ANNOUNCEMENT'	=> 'ປະກາດ',
	'POST_STICKY'	=> 'ສຳຄັນ',
	'POSTED'	=> 'ສົ່ງຂໍ້ຄວາມຮຽບຮ້ອຍແລ້ວ',
	'POSTED_IN_FORUM'	=> 'ໃນ',
	'POSTED_ON_DATE'	=> 'ເມື່ອ',
	'POSTS'	=> 'ຂໍ້ຄວາມ',
	'POSTS_UNAPPROVED'	=> 'ມີຂໍ້ຄວາມຢ່າງຫນ້ອຍ ໑ ຂໍ້ຄວາມໃນກະທູ້ນີ້ທີ່ຍັງບໍ່ໄດ້ຮັບການອະນຸມັດ.',
	'POST_BY_AUTHOR'	=> 'ຂຽນໂດຍ',
	'POST_BY_FOE'	=> 'ຂໍ້ຄວາມນີ້ຂຽນໂດຍ <strong>%1$s</strong> ເຊິ່ງຢູ່ໃນລາຍຊື່ບັນຊີດຳຂອງທ່ານ. %2$sDisplay this post%3$s.',
	'POST_DAY'	=> '%.2f ໂພສຕໍ່ມື້',
	'POST_DETAILS'	=> 'ສະແດງລາຍລະອຽດ',
	'POST_NEW_TOPIC'	=> 'ຕັ້ງກະທູ້',
	'POST_PCT'	=> '%.2f%% ຂອງທຸກຂໍ້ຄວາມ',
	'POST_PCT_ACTIVE'	=> '%.2f%% ຂອງທຸກຜູ້ໃຊ້',
	'POST_PCT_ACTIVE_OWN'	=> '%.2f%% ຂອງຂໍ້ຄວາມຂອງຂ້ອຍ',
	'POST_REPLY'	=> 'ຕອບ',
	'POST_REPORTED'	=> 'ຄລິກເພື່ອເບິ່ງລາຍງານ',
	'POST_SUBJECT'	=> 'ຫົວຂໍ້ກະທູ້',
	'POST_TIME'	=> 'ເວລາຂຽນ',
	'POST_TOPIC'	=> 'ຕັ້ງກະທູ້ໃຫມ່',
	'POST_UNAPPROVED'	=> 'ຂໍ້ຄວາມນີ້ຕ້ອງຖ້າການອະນຸມັດກ່ອນ',
	'PREVIEW'	=> 'ເບິ່ງຕົວຢ່າງ',
	'PREVIOUS'	=> 'ກັບຄືນ',
	'PREVIOUS_STEP'	=> 'ກັບຄືນ',
	'PRIVACY'	=> 'ນະໂຍບາຍຄວາມເປັນສ່ວນຕົວ',
	'PRIVATE_MESSAGE'	=> 'ຂໍ້ຄວາມສ່ວນຕົວ',
	'PRIVATE_MESSAGES'	=> 'ຂໍ້ຄວາມສ່ວນຕົວ',
	'PRIVATE_MESSAGING'	=> 'ຂໍ້ຄວາມສ່ວນຕົວ',
	'PROFILE'	=> 'ແຜງຄວບຄຸມຜູ້ໃຊ້ງານ',
	'READING_FORUM'	=> 'ກຳລັງເບິ່ງກະທູ້ໃນ %s',
	'READING_GLOBAL_ANNOUNCE'	=> 'ອ່ານປະກາດ',
	'READING_LINK'	=> 'ອ່ານຕໍ່ໃນ %s',
	'READING_TOPIC'	=> 'ກຳລັງອ່ານກະທູ້ໃນ %s',
	'READ_PROFILE'	=> 'ໂປຣໄຟລ໌',
	'REASON'	=> 'ເຫດຜົນ',
	'RECORD_ONLINE_USERS'	=> 'ມື້ທີ່ມີຄົນເຂົ້າມາຫລາຍກ່ອນຫມູ່ແມ່ນ <strong>%1$s</strong> on %2$s',
	'REDIRECT'	=> 'ປ່ຽນຫນ້າ',
	'REDIRECTS'	=> 'ລວມທັງຫມົດ',
	'REGISTER'	=> 'ສະຫມັກສະມາຊິກ',
	'REGISTERED_USERS'	=> 'ສະມາຊິກ:',
	'REG_USERS_ONLINE'	=> 'ຂະນະນີ້ມີສະມາຊິກ %d ຄົນແລະ ',
	'REG_USERS_TOTAL'	=> '%d ສະມາຊິກ, ',
	'REG_USERS_TOTAL_AND'	=> '%d ສະມາຊິກ ແລະ',
	'REG_USERS_ZERO_ONLINE'	=> 'ສະມາຊິກ ໐ ຄົນ ແລະ',
	'REG_USERS_ZERO_TOTAL'	=> '໐ ສະມາຊິກ, ',
	'REG_USERS_ZERO_TOTAL_AND'	=> '໐ ສະມາຊິກ ',
	'REG_USER_ONLINE'	=> 'ຂະນະນີ້ມີສະມາຊິກ %d ຄົນແລະ ',
	'REG_USER_TOTAL'	=> '%d ສະມາຊິກ, ',
	'REG_USER_TOTAL_AND'	=> '%d ສະມາຊິກ ແລະ ',
	'REMOVE'	=> 'ລຶບ',
	'REMOVE_INSTALL'	=> 'ກະລຸນາລຶບ ຫຼືປ່ຽນຊື່ຂອງເດີເຣັກເທີຣີ່ install ກ່ອນ ທ່ານຈຶ່ງຈະສາມາດນຳໃຊ້ເວັບບອດຂອງທ່ານໄດ້. ຖ້າຫາກວ່າຍັງບໍ່ລຶບ ທ່ານກໍ່ຈະສາມາດເຂົ້າໄດ້ສະເພາະສ່ວນຊອງ ຖານຄວບຄຸມຜູ້ເບິ່ງແຍງລະບົບ.',
	'REPLIES'	=> 'ຕອບກັບ',
	'REPLY_WITH_QUOTE'	=> 'ຕອບກັບພ້ອມອ້າງອິງຂໍ້ຄວາມ',
	'REPLYING_GLOBAL_ANNOUNCE'	=> 'ກຳລັງຕອບປະກາດ',
	'REPLYING_MESSAGE'	=> 'ກຳລັງຂຽນຂໍ້ຄວາມຕອບໃນ %s',
	'REPORT_BY'	=> 'ລາຍງານໂດຍ',
	'REPORT_POST'	=> 'ລາຍງານກະທູ້ນີ້',
	'REPORTING_POST'	=> 'ກຳລັງລາຍງານກະທູ້',
	'RESEND_ACTIVATION'	=> 'ສົ່ງອີເມລເປີດໃຊ້ງານໃຫມ່',
	'RESET'	=> 'ຄືນຄ່າ',
	'RESTORE_PERMISSIONS'	=> 'ຄືນຄ່າການອະນຸຍາດ',
	'RETURN_INDEX'	=> '%sກັບໄປຫນ້າທຳອິດຂອງເວັບບອດ%s',
	'RETURN_FORUM'	=> '%sກັບຄືນໄປຫມວດທີ່ໄປມາກ່ອນຫນ້ານີ້%s',
	'RETURN_PAGE'	=> '%sກັບຄືນໄປຫນ້າທີ່ໄປມາກ່ອນຫນ້ານີ້%s',
	'RETURN_TOPIC'	=> '%sກັບຄືນໄປກະທູ້ທີ່ໄປມາກ່ອນຫນ້ານີ້%s',
	'RETURN_TO'	=> 'ກັບໄປ',
	'RULES_ATTACH_CAN'	=> 'ທ່ານ <strong>ສາມາດ</strong> ແນບໄຟລ໌ໃນຫມວດນີ້',
	'RULES_ATTACH_CANNOT'	=> 'ທ່ານ <strong>ບໍ່ສາມາດ</strong> ແນບໄຟລ໌ໃນຫມວດນີ້',
	'RULES_DELETE_CAN'	=> 'ທ່ານ <strong>ສາມາດ</strong> ລຶບຂໍ້ຄວາມຂອງທ່ານໃນຫມວດນີ້',
	'RULES_DELETE_CANNOT'	=> 'ທ່ານ <strong>ບໍ່ສາມາດ</strong> ລຶບຂໍ້ຄວາມຂອງທ່ານໃນຫມວດນີ້',
	'RULES_DOWNLOAD_CAN'	=> 'ທ່ານ <strong>ສາມາດ</strong> ດາວໂຫລດໄຟລ໌ແນບໃນຫມວດນີ້',
	'RULES_DOWNLOAD_CANNOT'	=> 'ທ່ານ <strong>ບໍ່ສາມາດ</strong> ດາວໂຫລດໄຟລ໌ແນບໃນຫມວດນີ້',
	'RULES_EDIT_CAN'	=> 'ທ່ານ <strong>ສາມາດ</strong> ແກ້ໄຂຂໍ້ຄວາມໃນຫມວດນີ້',
	'RULES_EDIT_CANNOT'	=> 'ທ່ານ <strong>ບໍ່ສາມາດ</strong> ແກ້ໄຂຂໍ້ຄວາມໃນຫມວດນີ້',
	'RULES_LOCK_CAN'	=> 'ທ່ານ <strong>ສາມາດ</strong> ລັອກກະທູ້ຂອງທ່ານໃນຫມວດນີ້',
	'RULES_LOCK_CANNOT'	=> 'ທ່ານ <strong>ບໍ່ສາມາດ</strong> ລັອກກະທູ້ຂອງທ່ານໃນຫມວດນີ້',
	'RULES_POST_CAN'	=> 'ທ່ານ <strong>ສາມາດ</strong> ສ້າງກະທູ້ໃຫມ່ໃນຫມວດນີ້',
	'RULES_POST_CANNOT'	=> 'ທ່ານ <strong>ບໍ່ສາມາດ</strong> ສ້າງກະທູ້ໃຫມ່ໃນຫມວດນີ້',
	'RULES_REPLY_CAN'	=> 'ທ່ານ <strong>ສາມາດ</strong> ຕອບກະທູ້ໃນຫມວດນີ້',
	'RULES_REPLY_CANNOT'	=> 'ທ່ານ <strong>ບໍ່ສາມາດ</strong> ຕອບກະທູ້ໃນຫມວດນີ້',
	'RULES_VOTE_CAN'	=> 'ທ່ານ <strong>ສາມາດ</strong> ໂຫວດໃນຫມວດນີ້',
	'RULES_VOTE_CANNOT'	=> 'ທ່ານ <strong>ບໍ່ສາມາດ</strong> ໂຫວດໃນຫມວດນີ້',
	'SEARCH'	=> 'ຊອກຫາ',
	'SEARCH_MINI'	=> 'ຊອກຫາ...',
	'SEARCH_ADV'	=> 'ຊອກຫາແບບລະອຽດ',
	'SEARCH_ADV_EXPLAIN'	=> 'ເບິ່ງຕົວເລືອກການຊອກຫາແບບລະອຽດ',
	'SEARCH_KEYWORDS'	=> 'ຊອກຫາຄຳນີ້',
	'SEARCHING_FORUMS'	=> 'ກຳລັງດຳເນີນການຊອກຫາ...',
	'SEARCH_ACTIVE_TOPICS'	=> 'ເບິ່ງກະທູ້ທີ່ມີການໂຕ້ຕອບ',
	'SEARCH_FOR'	=> 'ຊອກຫາ',
	'SEARCH_FORUM'	=> 'ຊອກຫາ...',
	'SEARCH_NEW'	=> 'ເບິ່ງຂໍ້ຄວາມໃຫມ່',
	'SEARCH_POSTS_BY'	=> 'ຊອກຫາຂໍ້ຄວາມທີ່ຂຽນໂດຍ',
	'SEARCH_SELF'	=> 'ເບິ່ງຂໍ້ຄວາມຂອງທ່ານ',
	'SEARCH_TOPIC'	=> 'ຊອກຫາໃນກະທູ້ນີ້...',
	'SEARCH_UNANSWERED'	=> 'ເບິ່ງກະທູ້ທີ່ຍັງບໍ່ມີຄົນຕອບ',
	'SECONDS'	=> 'ວິນາທີ',
	'SELECT'	=> 'ເລືອກ',
	'SELECT_ALL_CODE'	=> 'ເລືອກທັງໝົດ',
	'SELECT_DESTINATION_FORUM'	=> 'ກະລຸນາເລືອກປາຍທາງ',
	'SELECT_FORUM'	=> 'ເລືອກຫມວດ',
	'SEND_EMAIL'	=> 'ອີເມລ',
	'SEND_EMAIL_USER'	=> 'ສົ່ງອີເມລໄປຫາ',
	'SEND_PRIVATE_MESSAGE'	=> 'ສົ່ງຂໍ້ຄວາມສ່ວນຕົວໄປຫາ',
	'SETTINGS'	=> 'ຕັ້ງຄ່າ',
	'SIGNATURE'	=> 'ລາຍເຊັນ',
	'SKIP'	=> 'ຂ້າມໄປອ່ານເນື້ອຫາ',
	'SMTP_NO_AUTH_SUPPORT'	=> 'ເຊີບເວີ SMTP ບໍ່ຮອງຮັບການຢືນຢັນຕົວ.',
	'SORRY_AUTH_READ'	=> 'ທ່ານບໍ່ໄດ້ຮັບອະນຸຍາດໃຫ້ເປີດອ່ານຫມວດນີ້ໄດ້.',
	'SORRY_AUTH_VIEW_ATTACH'	=> 'ທ່ານບໍ່ໄດ້ຮັບອະນຸຍາດໃຫ້ດາວໂຫລດໄຟລ໌ນີ້ໄດ້.',
	'SORT_BY'	=> 'ຈັດຮຽງຕາມ',
	'SORT_JOINED'	=> 'ເຂົ້າຮ່ວມເມື່ອ',
	'SORT_LOCATION'	=> 'ສະຖານທີ່',
	'SORT_RANK'	=> 'ອັນດັບ',
	'SORT_TOPIC_TITLE'	=> 'ຊື່ກະທູ້',
	'SORT_USERNAME'	=> 'ຊື່ຜູ້ໃຊ້ງານ',
	'SPLIT_TOPIC'	=> 'ແຍກກະທູ້',
	'SQL_ERROR_OCCURRED'	=> 'ມີຄວາມຜິດພາດໃນ SQL ຂະນະທີ່ກຳລັງໂຫລດຫນ້ານີ້. ກະລຸນາຕິດຕໍ່ %sBoard Administrator%s ຖ້າທ່ານຍັງພົບບັນຫານີ້ອີກ.',
	'STATISTICS'	=> 'ສະຖິຕິ',
	'START_WATCHING_FORUM'	=> 'ຮັບຂ່າວສານຈາກຫມວດນີ້',
	'START_WATCHING_TOPIC'	=> 'ຮັບຂ່າວສານຈາກກະທູ້ນີ້',
	'STOP_WATCHING_FORUM'	=> 'ຍົກເລີກຮັບຂ່າວສານຈາກຫມວດນີ້',
	'STOP_WATCHING_TOPIC'	=> 'ຍົກເລີກຮັບຂ່າວສານຈາກກະທູ້ນີ້',
	'SUBFORUM'	=> 'ຫມວດຍ່ອຍ',
	'SUBFORUMS'	=> 'ຫມວດຍ່ອຍ',
	'SUBJECT'	=> 'ຊື່ກະທູ້',
	'SUBMIT'	=> 'ສົ່ງ',
	'TERMS_USE'	=> 'ເງື່ອນໄຂການໃຊ້ບໍລິການ',
	'TEST_CONNECTION'	=> 'ທົດສອບການເຊື່ອມຕໍ່',
	'THE_TEAM'	=> 'ລາຍຊື່ທີມງານ',
	'TIME'	=> 'ເວລາ',
	'TOO_LONG'	=> 'The value you entered is too long.',
	'TOO_LONG_AIM'	=> 'ຊື່ທີ່ທ່ານໃຊ້ນັ້ນຍາວເກີນໄປ.',
	'TOO_LONG_CONFIRM_CODE'	=> 'ລະຫັດຢືນຢັນທີ່ທ່ານໃຊ້ນັ້ນຍາວເກີນໄປ.',
	'TOO_LONG_DATEFORMAT'	=> 'ຮູບແບບຂອງວັນທີ່ທີ່ທ່ານເລືອກນັ້ນຍາວເກີນໄປ.',
	'TOO_LONG_ICQ'	=> 'ຫມາຍເລກ ICQ ຂອງທ່ານຍາວເກີນໄປ.',
	'TOO_LONG_INTERESTS'	=> 'ຄວາມສົນໃຈຂອງທ່ານນັ້ນຍາວເກີນໄປ.',
	'TOO_LONG_JABBER'	=> 'ຊື່ບັນຊີ Jabber ຂອງທ່ານຍາວເກີນໄປ.',
	'TOO_LONG_LOCATION'	=> 'ສະຖານທີ່ຂອງທ່ານຍາວເກີນໄປ.',
	'TOO_LONG_MSN'	=> 'ຊື່ MSNM/WLM ຂອງທ່ານຍາວເກີນໄປ.',
	'TOO_LONG_NEW_PASSWORD'	=> 'ລະຫັດຜ່ານຂອງທ່ານຍາວເກີນໄປ',
	'TOO_LONG_OCCUPATION'	=> 'ອາຊີບຂອງທ່ານຍາວເກີນໄປ.',
	'TOO_LONG_PASSWORD_CONFIRM'	=> 'ລະຫັດຢືນຢັນຂອງທ່ານຍາວເກີນໄປ.',
	'TOO_LONG_USER_PASSWORD'	=> 'ລະຫັດຜ່ານຂອງທ່ານຍາວເກີນໄປ.',
	'TOO_LONG_USERNAME'	=> 'ຊື່ຜູ້ໃຊ້ງານຂອງທ່ານຍາວເກີນໄປ.',
	'TOO_LONG_EMAIL'	=> 'ອີເມລຂອງທ່ານຍາວເກີນໄປ.',
	'TOO_LONG_EMAIL_CONFIRM'	=> 'ອີເມລຢືນຢັນຂອງທ່ານຍາວເກີນໄປ.',
	'TOO_LONG_WEBSITE'	=> 'ເວັບໄຊທີ່ທ່ານໃສ່ນັ້ນຍາວເກີນໄປ.',
	'TOO_LONG_YIM'	=> 'ຊື່ Yahoo! ຂອງທ່ານຍາວເກີນໄປ.',
	'TOO_MANY_VOTE_OPTIONS'	=> 'ທ່ານພະຍາຍາມທີ່ຈະໂຫວດຫລາຍເກີນກຳນົດ.',
	'TOO_SHORT'						=> 'The value you entered is too short.',
	'TOO_SHORT_AIM'	=> 'ຊື່ຂອງທ່ານສັ້ນເກີນໄປ.',
	'TOO_SHORT_CONFIRM_CODE'	=> 'ລະຫັດຢືນຢັນຊອງທ່ານສັ້ນເກີນໄປ.',
	'TOO_SHORT_DATEFORMAT'	=> 'ຮູບແບບວັນທີ່ຊອງທ່ານສັ້ນເກີນໄປ.',
	'TOO_SHORT_ICQ'	=> 'ຫມາຍເລກ ICQ ຊອງທ່ານສັ້ນເກີນໄປ.',
	'TOO_SHORT_INTERESTS'	=> 'ຄວາມສົນໃຈຊອງທ່ານສັ້ນເກີນໄປ.',
	'TOO_SHORT_JABBER'	=> 'ຊື່ Jabber ຊອງທ່ານສັ້ນເກີນໄປ.',
	'TOO_SHORT_LOCATION'	=> 'ສະຖານທີ່ຊອງທ່ານສັ້ນເກີນໄປ.',
	'TOO_SHORT_MSN'	=> 'ຊື່ MSNM/WLM ຊອງທ່ານສັ້ນເກີນໄປ.',
	'TOO_SHORT_NEW_PASSWORD'	=> 'ລະຫັດຜ່ານຊອງທ່ານສັ້ນເກີນໄປ.',
	'TOO_SHORT_OCCUPATION'	=> 'ອາຊີບຊອງທ່ານສັ້ນເກີນໄປ.',
	'TOO_SHORT_PASSWORD_CONFIRM'	=> 'ລະຫັດຢືນຢັນຊອງທ່ານສັ້ນເກີນໄປ.',
	'TOO_SHORT_USER_PASSWORD'	=> 'ລະຫັດຜ່ານຊອງທ່ານສັ້ນເກີນໄປ.',
	'TOO_SHORT_USERNAME'	=> 'ຊື່ຜູ້ໃຊ້ງານຊອງທ່ານສັ້ນເກີນໄປ.',
	'TOO_SHORT_EMAIL'	=> 'ອີເມລຊອງທ່ານສັ້ນເກີນໄປ.',
	'TOO_SHORT_EMAIL_CONFIRM'	=> 'ອີເມລຢືນຢັນຊອງທ່ານສັ້ນເກີນໄປ.',
	'TOO_SHORT_WEBSITE'	=> 'ເວັບໄຊຊອງທ່ານສັ້ນເກີນໄປ.',
	'TOO_SHORT_YIM'	=> 'ຊື່ Yahoo! ຊອງທ່ານສັ້ນເກີນໄປ.',
	'TOPIC'	=> 'ກະທູ້',
	'TOPICS'	=> 'ກະທູ້',
	'TOPIC_ICON'	=> 'ຮູບກະທູ້',
	'TOPIC_LOCKED'	=> 'ກະທູ້ນີ້ຖືກລັອກໄວ້, ທ່ານບໍ່ສາມາດແກ້ໄຂ ຫຼືຕອບໄດ້.',
	'TOPIC_LOCKED_SHORT'	=> 'ກະທູ້ຖືກລ໊ອກ',
	'TOPIC_MOVED'	=> 'ຖືກຍ້າຍແລ້ວ',
	'TOPIC_REVIEW'	=> 'ຣີວິວກະທູ້',
	'TOPIC_TITLE'	=> 'ຊື່ກະທູ້',
	'TOPIC_UNAPPROVED'	=> 'ກະທູ້ນີ້ຍັງບໍ່ໄດ້ຮັບການອະນຸມັດເທື່ອ.',
	'TOTAL_ATTACHMENTS'	=> 'ໄຟລ໌ຕິດຄັດ',
	'TOTAL_LOG'	=> '໑ log',
	'TOTAL_LOGS'	=> '%d logs',
	'TOTAL_NO_PM'	=> 'ບໍ່ມີຂໍ້ຄວາມສ່ວນຕົວ',
	'TOTAL_PM'	=> 'ມີ ໑ ຂໍ້ຄວາມສ່ວນຕົວ',
	'TOTAL_PMS'	=> 'ມີຂໍ້ຄວາມສ່ວນຕົວທັງຫມົດ %d ສະບັບ',
	'TOTAL_POSTS'	=> 'ຂໍ້ຄວາມທັງຫມົດ',
	'TOTAL_POSTS_OTHER'	=> 'ຂໍ້ຄວາມທັງຫມົດ <strong>%d</strong>',
	'TOTAL_POSTS_ZERO'	=> 'ຂໍ້ຄວາມທັງຫມົດ <strong>0</strong>',
	'TOPIC_REPORTED'	=> 'ການລາຍງານກະທູ້ຮຽບຮ້ອຍແລ້ວ.',
	'TOTAL_TOPICS_OTHER'	=> 'ກະທູ້ທັງຫມົດ <strong>%d</strong>',
	'TOTAL_TOPICS_ZERO'	=> 'ກະທູ້ທັງຫມົດ <strong>0</strong>',
	'TOTAL_USERS_OTHER'	=> 'ສະມາຊິກທັງຫມົດ <strong>%d</strong>',
	'TOTAL_USERS_ZERO'	=> 'ສະມາຊິກທັງຫມົດ <strong>0</strong>',
	'TRACKED_PHP_ERROR'	=> 'ຂໍ້ຜິດພາດ PHP ທີ່ກວດພົບ: %s',
	'UNABLE_GET_IMAGE_SIZE'	=> 'ບໍ່ສາມາດລະບຸຄວາມກວ້າງຄວາມສູງຂອງຮູບພາບໄດ້.',
	'UNABLE_TO_DELIVER_FILE'	=> 'ບໍ່ສາມາດສົ່ງໄຟລ໌ໄດ້.',
	'UNKNOWN_BROWSER'	=> 'ບໍ່ສາມາດລະບຸໄດ້',
	'UNMARK_ALL'	=> 'ບໍ່ເລືອກທັງໝົດ',
	'UNREAD_MESSAGES'	=> 'ຂໍ້ຄວາມຍັງບໍ່ໄດ້ອ່ານ',
	'UNREAD_PM'	=> '<strong>%d</strong> ຂໍ້ຄວາມຍັງບໍ່ໄດ້ອ່ານ',
	'UNREAD_PMS'	=> '<strong>%d</strong> ຂໍ້ຄວາມຍັງບໍ່ໄດ້ອ່ານ',
	'UNWATCHED_FORUMS'	=> 'ທ່ານຈະບໍ່ໄດ້ຮັບການແຈ້ງເຕືອນໃນຫມວດທີ່ທ່ານໄດ້ເລືອກໄວ້ອີກ.',
	'UNWATCHED_TOPICS'	=> 'ທ່ານຈະບໍ່ໄດ້ຮັບການແຈ້ງເຕືອນໃນກະທູ້ທີ່ທ່ານໄດ້ເລືອກໄວ້ອີກ.',
	'UNWATCHED_FORUMS_TOPICS'	=> 'ທ່ານຈະບໍ່ໄດ້ຮັບການແຈ້ງເຕືອນໃນສ່ວນທີ່ທ່ານໄດ້ເລືອກໄວ້ອີກ.',
	'UPDATE'	=> 'ອັບເດດ',
	'UPLOAD_IN_PROGRESS'	=> 'ກຳລັງດຳເນີນການອັບໂຫລດ.',
	'URL_REDIRECT'	=> 'ຫາກໂປຣແກຣມເປີດເວັບຂອງທ່ານບໍ່ຮອງຮັບ meta redirection %sກະລຸນາຄລິກບ່ອນນີ້ເພື່ອດຳເນີນການຕໍ່%s.',
	'USERGROUPS'	=> 'ກຸ່ມ',
	'USERNAME'	=> 'ຊື່ຜູ້ໃຊ້ງານ',
	'USERNAMES'	=> 'ຊື່ຜູ້ໃຊ້ງານ',
	'USER_AVATAR'	=> 'ຮູບປະຈຳຕົວຜູ້ໃຊ້ງານ',
	'USER_CANNOT_READ'	=> 'ທ່ານບໍ່ສາມາດອ່ານຂໍ້ຄວາມໃນເວັບບອດນີ້ໄດ້.',
	'USER_POST'	=> '%d ຂໍ້ຄວາມ',
	'USER_POSTS'	=> '%d ຂໍ້ຄວາມ',
	'USERS'	=> 'ຜູ້ໃຊ້ງານ',
	'USE_PERMISSIONS'	=> 'ທົດສອບການອະນຸຍາດຜູ້ໃຊ້ງານ',
	'VARIANT_DATE_SEPARATOR'	=> ' / ',
	'VIEWED'	=> 'ອ່ານແລ້ວ',
	'VIEWING_FAQ'	=> 'ກຳລັງອ່ານຄຳຖາມ-ຄຳຕອບ',
	'VIEWING_MEMBERS'	=> 'ກຳລັງເບິ່ງລາຍລະອຽດຂອງສະມາຊິກ',
	'VIEWING_ONLINE'	=> 'ກຳລັງເບິ່ງລາຍຊື່ຄົນທີ່ກຳລັງອອນໄລນ໌',
	'VIEWING_MCP'	=> 'ກຳລັງເບິ່ງແຜງຄວາມຄຸມຜູ້ເບິ່ງແຍງຫມວດ',
	'VIEWING_MEMBER_PROFILE'	=> 'ກຳລັງເບິ່ງໂປຣໄຟລ໌ສະມາຊິກ',
	'VIEWING_PRIVATE_MESSAGES'	=> 'ກຳລັງອ່ານຂໍ້ຄວາມສ່ວນຕົວ',
	'VIEWING_REGISTER'	=> 'ກຳລັງສະຫມັກສະມາຊິກ',
	'VIEWING_UCP'	=> 'ກຳລັງເບິ່ງແຜງຄວບຄຸມຜູ້ໃຊ້ງານ',
	'VIEWS'	=> 'ອ່ານ',
	'VIEW_BOOKMARKS'	=> 'ເບິ່ງບຸກມາກ',
	'VIEW_FORUM_LOGS'	=> 'ເບິ່ງ log',
	'VIEW_LATEST_POST'	=> 'ອ່ານຂໍ້ຄວາມສຸດທ້າຍ',
	'VIEW_NEWEST_POST'	=> 'ອ່ານຂໍ້ຄວາມທີ່ຍັງບໍ່ໄດ້ອ່ານກ່ອນ',
	'VIEW_NOTES'	=> 'ອ່ານຫມາຍເຫດຂອງຜູ້ໃຂ້ງານ',
	'VIEW_ONLINE_TIME'	=> 'ອ້າງອິງຈາກຊ່ວງເວລາ %d ນາທີທີ່ຜ່ານມາ',
	'VIEW_ONLINE_TIMES'	=> 'ອ້າງອິງຈາກຊ່ວງເວລາ %d ນາທີທີ່ຜ່ານມາ',
	'VIEW_TOPIC'	=> 'ເບິ່ງກະທູ້',
	'VIEW_TOPIC_ANNOUNCEMENT'	=> 'ປະກາດ: ',
	'VIEW_TOPIC_GLOBAL'	=> 'ປະກາດສຳຄັນ: ',
	'VIEW_TOPIC_LOCKED'	=> 'ລັອກໄວ້ແລ້ວ: ',
	'VIEW_TOPIC_LOGS'	=> 'ເບິ່ງ logs',
	'VIEW_TOPIC_MOVED'	=> 'ຍ້າຍແລ້ວ: ',
	'VIEW_TOPIC_POLL'	=> 'ແບບສຳຫລວດ: ',
	'VIEW_TOPIC_STICKY'	=> 'ສຳຄັນ: ',
	'VISIT_WEBSITE'	=> 'ເຂົ້າໄປເວັບໄຊ',
	'WARNINGS'	=> 'ເຕືອນ',
	'WARN_USER'	=> 'ເຕືອນຜູ້ໃຊ້ງານ',
	'WELCOME_SUBJECT'	=> 'ຍິນດີຕ້ອນຮັບເຂົ້າສູ່ເວັບບອດ %s',
	'WEBSITE'	=> 'ເວັບໄຊ',
	'WHOIS'	=> 'Whois',
	'WHO_IS_ONLINE'	=> 'ສະມາຊິກທີ່ອອນໄລນ໌ຢູ່',
	'WRONG_PASSWORD'	=> 'ທ່ານໃສ່ລະຫັດຜ່ານບໍ່ຖືກ.',
	'WRONG_DATA_ICQ'	=> 'ທ່ານໃສ່ຫມາຍເລກ ICQ ບໍ່ຖືກ.',
	'WRONG_DATA_JABBER'	=> 'ທ່ານໃສ່ຊື່ Jabber ບໍ່ຖືກ.',
	'WRONG_DATA_LANG'	=> 'ບໍ່ມີພາສາທີ່ທ່ານເລືອກ.',
	'WRONG_DATA_WEBSITE'	=> 'ເວັບໄຊຕ້ອງມີ URL ທີ່ຖືກຕ້ອງ ແລະໃສ່ http:// ນຳຫນ້າ ເຊັ່ນ http://punlao.com/ ເປັນຕົ້ນ.',
	'WROTE'	=> 'ຂຽນວ່າ',
	'YEAR'	=> 'ປີ',
	'YEAR_MONTH_DAY'	=> '(YYYY-MM-DD)',
	'YES'	=> 'ແມ່ນ',
	'YIM'	=> 'YIM',
	'YOU_LAST_VISIT'	=> 'ທ່ານເຂົ້າມາຄັ້ງສຸດທ້າຍເມື່ອ: %s',
	'YOU_NEW_PM'	=> 'ມີຂໍ້ຄວາມສ່ວນຕົວໃນຕູ້ຮັບຂໍ້ຄວາມຂອງທ່ານ',
	'YOU_NEW_PMS'	=> 'ມີຂໍ້ຄວາມສ່ວນຕົວຖ້າໃຫ້ທ່ານເປີດອ່ານຢູ່.',
	'YOU_NO_NEW_PM'	=> 'ບໍ່ມີຂໍ້ຄວາມສ່ວນຕົວ.',

	'datetime'	=> array(
		'TODAY'	=> 'ມື້ນີ້',
		'TOMORROW'	=> 'ມື້ອື່ນ',
		'YESTERDAY'	=> 'ມື້ວານນີ້',
		'Sunday'	=> 'ວັນອາທິດ',
		'Monday'	=> 'ວັນຈັນ',
		'Tuesday'	=> 'ວັນອັງຄານ',
		'Wednesday'	=> 'ວັນພຸດ',
		'Thursday'	=> 'ວັນພະຫັດ',
		'Friday'	=> 'ວັນສຸກ',
		'Saturday'	=> 'ວັນເສົາ',
		'Sun'	=> 'ທິດ',
		'Mon'	=> 'ຈັນ',
		'Tue'	=> 'ອັງຄານ',
		'Wed'	=> 'ພຸດ',
		'Thu'	=> 'ພະຫັດ',
		'Fri'	=> 'ສຸກ',
		'Sat'	=> 'ເສົາ',
		'January'	=> 'ມັງກອນ',
		'February'	=> 'ກຸມພາ',
		'March'	=> 'ມີນາ',
		'April'	=> 'ເມສາ',
		'May'	=> 'ພຶດສະພາ',
		'June'	=> 'ມິຖຸນາ',
		'July'	=> 'ກໍລະກົດ',
		'August'	=> 'ສິງຫາ',
		'September'	=> 'ກັນຍາ',
		'October'	=> 'ຕຸລາ',
		'November'	=> 'ພະຈິກ',
		'December'	=> 'ທັນວາ',
		'Jan'	=> 'ມັງກອນ',
		'Feb'	=> 'ກຸມພາ',
		'Mar'	=> 'ມີນາ',
		'Apr'	=> 'ເມສາ',
		'May_short'	=> 'ພຶດສະພາ',
		'Jun'	=> 'ມິຖຸນາ',
		'Jul'	=> 'ກໍລະກົດ',
		'Aug'	=> 'ສິງຫາ',
		'Sep'	=> 'ກັນຍາ',
		'Oct'	=> 'ຕຸລາ',
		'Nov'	=> 'ພະຈິກ',
		'Dec'	=> 'ທັນວາ',
	),


	'tz'	=> array(
		'-12'	=> 'UTC - 12 ຊົ່ວໂມງ',
		'-11'	=> 'UTC - 11 ຊົ່ວໂມງ',
		'-10'	=> 'UTC - 10 ຊົ່ວໂມງ',
		'-9.5'	=> 'UTC - 9:30 ຊົ່ວໂມງ',
		'-9'	=> 'UTC - 9 ຊົ່ວໂມງ',
		'-8'	=> 'UTC - 8 ຊົ່ວໂມງ',
		'-7'	=> 'UTC - 7 ຊົ່ວໂມງ',
		'-6'	=> 'UTC - 6 ຊົ່ວໂມງ',
		'-5'	=> 'UTC - 5 ຊົ່ວໂມງ',
		'-4'	=> 'UTC - 4 ຊົ່ວໂມງ',
		'-3.5'	=> 'UTC - 3:30 ຊົ່ວໂມງ',
		'-3'	=> 'UTC - 3 ຊົ່ວໂມງ',
		'-2'	=> 'UTC - 2 ຊົ່ວໂມງ',
		'-1'	=> 'UTC - 1 ຊົ່ວໂມງ',
		'0'	=> 'UTC',
		'1'	=> 'UTC + 1 ຊົ່ວໂມງ',
		'2'	=> 'UTC + 2 ຊົ່ວໂມງ',
		'3'	=> 'UTC + 3 ຊົ່ວໂມງ',
		'3.5'	=> 'UTC + 3:30 ຊົ່ວໂມງ',
		'4'	=> 'UTC + 4 ຊົ່ວໂມງ',
		'4.5'	=> 'UTC + 4:30 ຊົ່ວໂມງ',
		'5'	=> 'UTC + 5 ຊົ່ວໂມງ',
		'5.5'	=> 'UTC + 5:30 ຊົ່ວໂມງ',
		'5.75'	=> 'UTC + 5:45 ຊົ່ວໂມງ',
		'6'	=> 'UTC + 6 ຊົ່ວໂມງ',
		'6.5'	=> 'UTC + 6:30 ຊົ່ວໂມງ',
		'7'	=> 'UTC + 7 ຊົ່ວໂມງ',
		'8'	=> 'UTC + 8 ຊົ່ວໂມງ',
		'8.75'	=> 'UTC + 8:45 ຊົ່ວໂມງ',
		'9'	=> 'UTC + 9 ຊົ່ວໂມງ',
		'9.5'	=> 'UTC + 9:30 ຊົ່ວໂມງ',
		'10'	=> 'UTC + 10 ຊົ່ວໂມງ',
		'10.5'	=> 'UTC + 10:30 ຊົ່ວໂມງ',
		'11'	=> 'UTC + 11 ຊົ່ວໂມງ',
		'11.5'	=> 'UTC + 11:30 ຊົ່ວໂມງ',
		'12'	=> 'UTC + 12 ຊົ່ວໂມງ',
		'12.75'	=> 'UTC + 12:45 ຊົ່ວໂມງ',
		'13'	=> 'UTC + 13 ຊົ່ວໂມງ',
		'14'	=> 'UTC + 14 ຊົ່ວໂມງ',
		'dst'	=> '[ <abbr title="Daylight Saving Time">DST</abbr> ]',
	),


	'tz_zones'	=> array(
		'-12'	=> '[UTC - 12] ເກາະເບກເກີ',
		'-11'	=> '[UTC - 11] ຊາມົວ',
		'-10'	=> '[UTC - 10] ເກາະຄູກ',
		'-9.5'	=> '[UTC - 9:30] ເກາະມາຄີຊາດ',
		'-9'	=> '[UTC - 9] ອາລາສກ້າ',
		'-8'	=> '[UTC - 8] ແປຊີຟິກ',
		'-7'	=> '[UTC - 7] ເມົາເທນ',
		'-6'	=> '[UTC - 6] ເຊນທຣັນ',
		'-5'	=> '[UTC - 5] ອີສເຕີນ',
		'-4'	=> '[UTC - 4] ແອດແລນຕິກ',
		'-3.5'	=> '[UTC - 3:30] ນິວຟາວແລນ',
		'-3'	=> '[UTC - 3] ອາເມຊອນ, ກຣີນແລນກາງ',
		'-2'	=> '[UTC - 2] ຈໍເຈຍໃຕ້',
		'-1'	=> '[UTC - 1] ກຣີນແລນຕາເວັນອອກ',
		'0'	=> '[UTC] ຢູໂຣບຕາເວັນຕົກ',
		'1'	=> '[UTC + 1] ຢູໂຣບກາງ, ອາຟຣິກາຕາເວັນຕົກ',
		'2'	=> '[UTC + 2] ຢຼໂຣບຕາເວັນອອກ, ອາຟຣິກາກາງ',
		'3'	=> '[UTC + 3] ມອດສະໂຄ',
		'3.5'	=> '[UTC + 3:30] ອິຣ່ານ',
		'4'	=> '[UTC + 4] ກິວ, ສະມາຣາ',
		'4.5'	=> '[UTC + 4:30] ອັບການິດສະຖານ',
		'5'	=> '[UTC + 5] ປາກິສະຖານ',
		'5.5'	=> '[UTC + 5:30] ອິນເດຍ, ສີລັງກາ',
		'5.75'	=> '[UTC + 5:45] ເນປານ',
		'6'	=> '[UTC + 6] ບັງກະລາເທດ',
		'6.5'	=> '[UTC + 6:30] ມ່ຽນມ່າ',
		'7'	=> '[UTC + 7] ວຽງຈັນ, ລາວ',
		'8'	=> '[UTC + 8] ຈີນ',
		'8.75'	=> '[UTC + 8:45] ອອສເຕຣເລຍຕາເວັນອອກສ່ຽງໃຕ້',
		'9'	=> '[UTC + 9] ຍີ່ປຸ່ນ, ເກົາຫລີ',
		'9.5'	=> '[UTC + 9:30] ອອສເຕຣເລຍກາງ',
		'10'	=> '[UTC + 10] ອອສເຕຣເລຍໃຕ້',
		'10.5'	=> '[UTC + 10:30] ລອດໂຮ',
		'11'	=> '[UTC + 11] ເກາະໂຊໂລມອນ, ເກາະມາກາດານ',
		'11.5'	=> '[UTC + 11:30] ເກາະນໍໂຟກ',
		'12'	=> '[UTC + 12] ນິວ ຊີແລນ, ຟິຈິ',
		'12.75'	=> '[UTC + 12:45] ເກາະຊາແທມ',
		'13'	=> '[UTC + 13] ຕົງກາ, ເກາະຟີນິກ',
		'14'	=> '[UTC + 14] ເກາະໄລນ໌',
	),


	'dateformats'	=> array(
		'd M Y, H:i'	=> '01 ມັງກອນ 2007, 13:37',
		'd M Y H:i'	=> '01 ມັງກອນ 2007 13:37',
		'M jS, \'y, H:i'	=> 'ມັງກອນ 1st, \'07, 13:37',
		'D M d, Y g:i a'	=> 'ຈັນ ມັງກອນ 01, 2007 1:37 pm',
		'F jS, Y, g:i a'	=> 'ມັງກອນ 1st, 2007, 1:37 pm',
		'|d M Y|, H:i'	=> 'ມື້ນີ້, 13:37 / 01 ມັງກອນ 2007, 13:37',
		'|F jS, Y|, g:i a'	=> 'ມື້ນີ້, 1:37 pm / ມັງກອນ 1st, 2007, 1:37 pm',
	),

	'default_dateformat'	=> 'D M d, Y g:i a',
));

?>