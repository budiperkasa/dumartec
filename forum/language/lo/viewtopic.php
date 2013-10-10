<?php
/**
*
* viewtopic.php [Lao]
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
	'ATTACHMENT'	=> 'ໄຟລ໌ຕິດຄັດ',
	'ATTACHMENT_FUNCTIONALITY_DISABLED'	=> 'ບໍ່ອະນຸຍາດໃຫ້ຕິດຄັດໄຟລ໌ໄດ້.',
	'BOOKMARK_ADDED'	=> 'ບຸກມາກກະທູ້ນີ້ໄວ້ຮຽບຮ້ອຍແລ້ວ.',
	'BOOKMARK_ERR'			=> 'Bookmarking the topic failed. Please try again.',
	'BOOKMARK_REMOVED'	=> 'ລຶບກະທູ້ນີ້ອອກຈາກບຸກມາກຮຽບຮ້ອຍແລ້ວ.',
	'BOOKMARK_TOPIC'	=> 'ບຸກມາກກະທູ້ນີ້',
	'BOOKMARK_TOPIC_REMOVE'	=> 'ລຶບກະທູ້ນີ້ອອກຈາກບຸກມາກ',
	'BUMPED_BY'	=> 'ຂູດໂດຍ %1$s ກະທູ້ %2$s.',
	'BUMP_TOPIC'	=> 'ຂູດກະທູ້',
	'CODE'	=> 'ໂຄດ',
	'DELETE_TOPIC'	=> 'ລຶບກະທູ້',
	'DOWNLOAD_NOTICE'	=> 'You do not have the required permissions to view the files attached to this post.',
	'EDITED_TIMES_TOTAL'	=> 'Last edited by %1$s on %2$s, edited %3$d times in total.',
	'EDITED_TIME_TOTAL'	=> 'Last edited by %1$s on %2$s, edited %3$d time in total.',
	'EMAIL_TOPIC'	=> 'ອີເມລຫມູ່',
	'ERROR_NO_ATTACHMENT'	=> 'The selected attachment does not exist anymore.',
	'FILE_NOT_FOUND_404'	=> 'The file <strong>%s</strong> does not exist.',
	'FORK_TOPIC'	=> 'ຄັດລອກກະທູ້',
	'LINKAGE_FORBIDDEN'	=> 'You are not authorised to view, download or link from/to this site.',
	'LOGIN_NOTIFY_TOPIC'	=> 'You have been notified about this topic, please login to view it.',
	'LOGIN_VIEWTOPIC'	=> 'The board requires you to be registered and logged in to view this topic.',
	'MAKE_ANNOUNCE'	=> 'ປ່ຽນເປັນກະທູ້ປະກາດ',
	'MAKE_GLOBAL'	=> 'ໃຫ້ກະທູ້ນີ້ເປັນກະທູ້ປະກາດລວມ',
	'MAKE_NORMAL'	=> 'ປ່ຽນເປັນ ກະທູ້ທົ່ວໄປ',
	'MAKE_STICKY'	=> 'ປ່ຽນເປັນ ກະທູ້ປັກຫມຸດ',
	'MAX_OPTIONS_SELECT'	=> 'ທ່ານສາມາດເລືອກຫລາຍສຸດ <strong>%d</strong> ຕົວເລືອກ',
	'MAX_OPTION_SELECT'	=> 'ທ່ານຕສາມາດເລືອກຢ່າງໜ້ອຍ <strong>1</strong> ຕົວເລືອກ',
	'MISSING_INLINE_ATTACHMENT'	=> 'ໄຟລ໌ທີ່ແນບມາ <strong>%s</strong> ບໍ່ສາມາດໂຫລດໄດ້',
	'MOVE_TOPIC'	=> 'ຍ້າຍກະທູ້',
	'NO_ATTACHMENT_SELECTED'	=> 'You haven’t selected an attachment to download or view.',
	'NO_NEWER_TOPICS'	=> 'ບໍ່ມີກະທູ້ໃຫມ່ໃນຫມວດນີ້..',
	'NO_OLDER_TOPICS'	=> 'ບໍ່ມີກະທູ້ເກົ່າໃນໝວດນີ້',
	'NO_UNREAD_POSTS'	=> 'There are no new unread posts for this topic.',
	'NO_VOTE_OPTION'	=> 'You must specify an option when voting.',
	'NO_VOTES'	=> 'ບໍ່ມີຜົນໂຫວດ',
	'POLL_ENDED_AT'	=> 'ແບບສຳຫຼວດຫມົດ %s',
	'POLL_RUN_TILL'	=> 'ແບບສຳຫຼວດຢູ່ຈົນ %s',
	'POLL_VOTED_OPTION'	=> 'ທ່ານໂຫວດຕົວເລືອກນີ້',
	'PRINT_TOPIC'	=> 'ສັ່ງພິມກະທູ້',
	'QUICK_MOD'	=> 'ເຄື່ອງມືຜູ້ເບິ່ງແຍງ',
	'QUOTE'	=> 'Quote',
	'REPLY_TO_TOPIC'	=> 'ຕອບກະທູ້',
	'RETURN_POST'	=> '%sກັບໄປທີ່ຫນ້າຂຽນຂໍ້ຄວາມ%s',
	'SUBMIT_VOTE'	=> 'ສົ່ງຜົນໂຫວດແລ້ວ',
	'TOTAL_VOTES'	=> 'ການໂຫວດທັງຫມົດ',
	'UNLOCK_TOPIC'	=> 'ກະທູ້ຖືກອັນລ໊ອກ',
	'VIEW_INFO'	=> 'ລາຍລະອຽດການໂພສ',
	'VIEW_NEXT_TOPIC'	=> 'ກະທູ້ຕໍ່ຈາກນີ້',
	'VIEW_PREVIOUS_TOPIC'	=> 'ກະທູ້ກ່ອນໜ້ານີ້',
	'VIEW_RESULTS'	=> 'ເບີ່ງຜົນທີ່ໄດ້ຮັບ',
	'VIEW_TOPIC_POST'	=> '1 ຂໍ້ຄວາມ',
	'VIEW_TOPIC_POSTS'	=> '%d ຂໍ້ຄວາມ',
	'VIEW_UNREAD_POST'	=> 'First unread post',
	'VISIT_WEBSITE'	=> 'ເວບໄຊທ໌',
	'VOTE_SUBMITTED'	=> 'ເກັບຜົນໂຫວດຂອງທ່ານຮຽບຮ້ອຍແລ້ວ',
	'VOTE_CONVERTED'	=> 'ການປ່ຽນຜົນໂຫວດບໍ່ສາມາດປ່ຽນໄດ້ ໃນການໂຫວດແບບນີ້.',
));

?>