<?php
/**
*
* groups.php [Lao]
*
* @package language
* @version $Id: $
* @copyright (c) 2008 phpBB Group
* @author 2008-06-01 - Punlao.com
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
	'ALREADY_DEFAULT_GROUP'	=> 'ກຸ່ມທີ່ທ່ານເລືອກເປັນກຸ່ມທີ່ທ່ານຢູ່ແລ້ວ.',
	'ALREADY_IN_GROUP'	=> 'ທ່ານເປັນສະມາຊິກກຸ່ມທີ່ເລືອກຢູ່ແລ້ວ',
	'ALREADY_IN_GROUP_PENDING'	=> 'ທ່ານໄດ້ສົ່ງຄຳຂໍເຂົ້າກຸ່ມໄປແລ້ວ.',
	'CANNOT_JOIN_GROUP'	=> 'ທ່ານບໍ່ສາມາດເຂົ້າຮ່ວມກຸ່ມນີ້ໄດ້, ທ່ານສາມາດເຂົ້າໄດ້ແຕ່ກຸ່ມທີ່ເປີດຮັບສະມາຊິກເທົ່ານັ້ນ.',
	'CANNOT_RESIGN_GROUP'	=> 'ທ່ານບໍ່ສາມາດອອກຈາກກຸ່ມໄດ້. ທ່ານສາມາດອອກຈາກກຸ່ມທີ່ເປີດໃຫ້ອອກໄດ້ເທົ່ານັ້ນ.',
	'CHANGED_DEFAULT_GROUP'	=> 'ປ່ຽນກຸ່ມຮຽບຮ້ອຍແລ້ວ.',
	'GROUP_AVATAR'	=> 'ຮູບຂອງກຸ່ມ',
	'GROUP_CHANGE_DEFAULT'	=> 'ທ່ານແນ່ໃຈຫຼືບໍ່ວ່າຈະປ່ຽນສະຖານະສະມາຊິກຂອງທ່ານໄປຢູ່ກຸ່ມ “%s”?',
	'GROUP_CLOSED'	=> 'ປິດ',
	'GROUP_DESC'	=> 'ກ່ຽວກັບກຸ່ມ',
	'GROUP_HIDDEN'	=> 'ເຊື່ອງໄວ້',
	'GROUP_INFORMATION'	=> 'ລາຍລະອຽດຂອງກຸ່ມ',
	'GROUP_IS_CLOSED'	=> 'ນີ້ແມ່ນກຸ່ມສະເພາະກຸ່ມຄົນ, ການສະມາຊິກໃຫມ່ ຕ້ອງໄດ້ຮັບການເຊີນຈາກຫົວໜ້າກຸ່ມເທົ່ານັ້ນ',
	'GROUP_IS_FREE'	=> 'ນີ້ແມ່ນກຸ່ມທີ່ເປີດກວ້າງສຳລັບທຸກຄົນ ຍິນດີຕ້ອນຮັບສະມາຊິກໃຫມ່ທຸກຄົນ',
	'GROUP_IS_HIDDEN'	=> 'ນີ້ແມ່ນກຸ່ມທີ່ເຊື່ອງຢູ່, ມີພຽງສະມາຊິກກຸ່ມນີ້ເທົ່ານັ້ນທີ່ເບີ່ງເຫັນໄດ້',
	'GROUP_IS_OPEN'	=> 'ນີ້ແມ່ນກຸ່ມທີ່ເປີດສາທາລະນະ. ທຸກຄົນສາມາດເຂົ້າຮ່ວມໄດ້',
	'GROUP_IS_SPECIAL'	=> 'ນີ້ແມ່ນກຸ່ມພິເສດທີ່ເປີດໃຫ້ສະເພາະສະມາຊິກ VIP, ເຂົ້າຮ່ວມໄດ້ໂດຍການເຊີນຂອງຜູ້ເບິ່ງແຍງລະບົບ',
	'GROUP_JOIN'	=> 'ເຂົ້າຮ່ວມກຸ່ມ',
	'GROUP_JOIN_CONFIRM'	=> 'ແນ່ໃຈບໍ່ວ່າທ່ານຈະເຂົ້າຮ່ວມກຸ່ມນີ້?',
	'GROUP_JOIN_PENDING'	=> 'ຄຳຂໍເຂົ້າຮ່ວມກຸ່ມ',
	'GROUP_JOIN_PENDING_CONFIRM'	=> 'ທ່ານແນ່ໃຈບໍ່ວ່າ ຕ້ອງການສົ່ງຄຳຂໍເຂົ້າຮ່ວມກຸ່ມ?',
	'GROUP_JOINED'	=> 'ທ່ານເຂົ້າຮ່ວມກຸ່ມແລ້ວ',
	'GROUP_JOINED_PENDING'	=> 'ການສົ່ງຄຳຂໍເຂົ້າຮ່ວມກຸ່ມຮຽບຮ້ອຍແລ້ວ. ກະລຸນາຖ້າຫົວໜ້າກຸ່ມຕອບຮັບການເຂົ້າຮ່ວມກຸ່ມ',
	'GROUP_LIST'	=> 'ລາຍຊື່ສະມາຊິກກຸ່ມ',
	'GROUP_MEMBERS'	=> 'ສະມາຊິກກຸ່ມ',
	'GROUP_NAME'	=> 'ຊື່ຂອງກຸ່ມ',
	'GROUP_OPEN'	=> 'ເປີດ',
	'GROUP_RANK'	=> 'ອັບດັບຂອງກຸ່ມ',
	'GROUP_RESIGN_MEMBERSHIP'	=> 'ໄລ່ສະມາຊິກອອກ',
	'GROUP_RESIGN_MEMBERSHIP_CONFIRM'	=> 'ທ່ານແນ່ໃຈຫຼືບໍ່ວ່າຈະອອກຈາກກຸ່ມທີ່ທ່ານເລືອກ?',
	'GROUP_RESIGN_PENDING'	=> 'ອະນຸຍາດໃຫ້ສະມາຊິກທີ່ຮ້ອງຂໍໃຫ້ອອກກຸ່ມນັ້ນອອກໄດ້',
	'GROUP_RESIGN_PENDING_CONFIRM'	=> 'ທ່ານແນ່ໃຈຫຼືບໍ່ວ່າຕ້ອງການຈະອະນຸຍາດໃຫ້ສະມາຊິກທີ່ຕ້ອງການອອກນັ້ນ ສາມາດອອກຈາກກຸ່ມທີ່ເລືອກໄດ້?',
	'GROUP_RESIGNED_MEMBERSHIP'	=> 'ທ່ານໄດ້ອອກຈາກກຸ່ມທີ່ເລືອກແລ້ວ.',
	'GROUP_RESIGNED_PENDING'	=> 'ສະຖານະສະມາຊິກກູ່ມຂອງທ່ານຖືກຖອດອອກຈາກກຸ່ມທີ່ເລືອກແລ້ວ.',
	'GROUP_TYPE'	=> 'ປະເພດກຸ່ມ',
	'GROUP_UNDISCLOSED'	=> 'ກຸ່ມທີ່ເຂື່ອງຢູ່',
	'FORUM_UNDISCLOSED'	=> 'ກຳລັງກວດກາຫມວດທີ່ເຊື່ອງໄວ້ຢູ່.',
	'LOGIN_EXPLAIN_GROUP'	=> 'ທ່ານຕ້ອງເຂົ້າສູ່ລະບົບ ເພື່ອຈະເຫັນລາຍລະອຽດຂອງກຸ່ມ.',
	'NO_LEADERS'	=> 'ທ່ານບໍ່ໄດ້ເປັນຫົວໜ້າກຸ່ມໃດໆ.',
	'NOT_LEADER_OF_GROUP'	=> 'ຄຳສັ່ງບໍ່ໄດ້ຖືກສົ່ງໄປ ເນື່ອງຈາກທ່ານບໍ່ໄດ້ເປັນຫົວໜ້າກຸ່ມນີ້',
	'NOT_MEMBER_OF_GROUP'	=> 'ຄຳສັ່ງບໍ່ໄດ້ຖືກສົ່ງໄປເນື່ອງຈາກທ່ານບໍ່ທັນໄດ້ເປັນ ສະມາຊິກກຸ່ມນີ້ ຫລື ຍັງບໍ່ໄດ້ຮັບການຕອບຮັບເຂົ້າກຸ່ມ',
	'NOT_RESIGN_FROM_DEFAULT_GROUP'	=> 'ທ່ານບໍ່ສາມາດອອກຈາກກຸ່ມພື້ນຖານໄດ້.',
	'PRIMARY_GROUP'	=> 'ກຸ່ມພື້ນຖານ',
	'REMOVE_SELECTED'	=> 'ເອົາອັນທີ່ເລືອກອອກ',
	'USER_GROUP_CHANGE'	=> 'ຈາກກຸ່ມ “%1$s” ເປັນ “%2$s”',
	'USER_GROUP_DEMOTE'	=> 'ອອກຈາກຕຳແໜ່ງຫົວໜ້າກຸ່ມ',
	'USER_GROUP_DEMOTE_CONFIRM'	=> 'ທ່ານແນ່ໃຈບໍ່ວ່າ ທ່ານຕ້ອງການຈະອອກຈາກຕຳແໜ່ງຫົວໜ້າກຸ່ມທີ່ເລືອກ',
	'USER_GROUP_DEMOTED'	=> 'ທ່ານອອກຈາກຕຳແໜ່ງຫົວໜ້າກຸ່ມເປັນທີ່ຮຽບຮ້ອຍ',
));

?>