<?php
/**
*
* posting.php [Lao]
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
	'ADD_ATTACHMENT'	=> 'ອັບໂຫລດໄຟລ໌',
	'ADD_ATTACHMENT_EXPLAIN'	=> 'ຫາກທ່ານຕ້ອງການແນບໄຟລ໌ຂໍ້ມູນ ກະລຸນາໃຊ້ແບບຟອມດ້ານລຸ່ມ.',
	'ADD_FILE'	=> 'ຕົກລົງ',
	'ADD_POLL'	=> 'ສ້າງແບບສຳຫລວດ',
	'ADD_POLL_EXPLAIN'	=> 'ຖ້າບໍ່ຢາກສ້າງແບບສຳຫລວດໃຫ້ປະໄວ້ຄືເກົ່າ',
	'ALREADY_DELETED'	=> 'ຂໍອະໄພຂໍ້ຄວາມໄດ້ຖືກລຶບແລ້ວ',
	'ATTACH_QUOTA_REACHED'	=> 'ຂໍອະໄພຂໍ້ຄວາມໄດ້ຖືກລຶບແລ້ວ',
	'ATTACH_SIG'	=> 'ເພີ່ມລາຍເຊັນ (ສາມາດປ່ຽນລາຍເຊັນໄດ້ຜ່ານແຜງຄວບຄຸມຜູ້ໃຊ້ງານ)',
	'BBCODE_A_HELP'	=> 'Inline uploaded attachment: [attachment=]filename.ext[/attachment]',
	'BBCODE_B_HELP'	=> 'ໂຕຫນາ: [b]text[/b]',
	'BBCODE_C_HELP'	=> 'ສະແດງ code: [code]code[/code]',
	'BBCODE_E_HELP'	=> 'ລາຍການ: ເພີ່ມລາຍການ',
	'BBCODE_F_HELP'	=> 'ຂະໜາດຕົວຫນັງສື: [size=85]ຂໍ້ຄວາມ[/size]',
	'BBCODE_IS_OFF'	=> '%sBBCode%s <em>ປິດ</em>',
	'BBCODE_IS_ON'	=> '%sBBCode%s <em>ເປີດ</em>',
	'BBCODE_I_HELP'	=> 'ຕົວອຽງ: [i]ຂໍ້ຄວາມ[/i]',
	'BBCODE_L_HELP'	=> 'ລາຍການ: [list]ຂໍ້ຄວາມ[/list]',
	'BBCODE_LISTITEM_HELP'	=> 'ລາຍການເຄື່ອງ: [*]ຂໍ້ຄວາມ[/*]',
	'BBCODE_O_HELP'	=> 'ລາຍການຕາມລຳດັບຕົວເລກ: [list=]ຂໍ້ຄວາມ[/list]',
	'BBCODE_P_HELP'	=> 'ໃສ່ຮູບ: [img]http://image_url[/img]',
	'BBCODE_Q_HELP'	=> 'ອ້າງເຖິງຄຳເວົ້າ: [quote]ຂໍ້ຄວາມ[/quote]',
	'BBCODE_S_HELP'	=> 'ສີໂຕໜັງສື: [color=red]text[/color]  Tip: you can also use color=#FF0000',
	'BBCODE_U_HELP'	=> 'ຂີດກ້ອງໂຕໜັງສື: [u]text[/u]',
	'BBCODE_W_HELP'	=> 'ໃສ່ URL: [url]http://url[/url] ຫຼື [url=http://url]ຂໍ້ຄວາມ[/url]',
	'BBCODE_D_HELP'	=> 'Flash: [flash=width,height]http://url[/flash]',
	'BUMP_ERROR'	=> 'You cannot bump this topic so soon after the last post.',
	'CANNOT_DELETE_REPLIED'	=> 'Sorry but you may only delete posts which have not been replied to.',
	'CANNOT_EDIT_POST_LOCKED'	=> 'ຂໍ້ຄວາມຖືກລັອກ ທ່ານບໍ່ສາມາດແກ້ໄຂ ຫລື ລືບໄດ້ອີກ',
	'CANNOT_EDIT_TIME'	=> 'ທ່ານບໍ່ສາມາດແກ້ໄຂ ຫລື ລືບ ຂໍ້ຄວາມໄດ້ອີກ',
	'CANNOT_POST_ANNOUNCE'	=> 'ຂໍອະໄພທ່ານບໍ່ສາມາດສ້າງ announcements.',
	'CANNOT_POST_STICKY'	=> 'ຂໍອະໄພທ່ານບໍ່ສາມາດຂຽນຂໍ້ຄວາມໃນ sticky topics.',
	'CHANGE_TOPIC_TO'	=> 'ປ່ຽນປະເພດກະທູ້',
	'CLOSE_TAGS'	=> 'Close tags',
	'CURRENT_TOPIC'	=> 'ກະທູ້ປັດຈຸບັນ',
	'DELETE_FILE'	=> 'ລຶບໄຟລ',
	'DELETE_MESSAGE'	=> 'ລຶບຂໍ້ຄວາມສ່ວນຕົວ',
	'DELETE_MESSAGE_CONFIRM'	=> 'ທ່ານແນ່ໃຈບໍ່ວ່າ ຕ້ອງການລຶບຂໍ້ຄວາມສ່ວນຕົວ',
	'DELETE_OWN_POSTS'	=> 'ຂໍອະໄພທ່ານບໍ່ສາມາດລຶບຂໍ້ຄວາມຂອງຄົນອື່ນໄດ້',
	'DELETE_POST_CONFIRM'	=> 'ທ່ານແນ່ໃຈບໍ່ວ່າ ຕ້ອງການລຶບຂໍ້ຄວາມນີ້',
	'DELETE_POST_WARN'	=> 'Once deleted the post cannot be recovered',
	'DISABLE_BBCODE'	=> 'ງົດການໃຊ້ BBCode',
	'DISABLE_MAGIC_URL'	=> 'ບໍ່ຕ້ອງແປງ URLs ອັດຕະໂນມັດ',
	'DISABLE_SMILIES'	=> 'ງົດການໃຊ້ ຮູບສະແດງອາລົມ',
	'DISALLOWED_CONTENT'		=> 'The upload was rejected because the uploaded file was identified as a possible attack vector.',
	'DISALLOWED_EXTENSION'	=> 'The extension %s is not allowed.',
	'DRAFT_LOADED'	=> 'Draft loaded into posting area, you may want to finish your post now.<br />Your draft will be deleted after submitting this post.',
	'DRAFT_LOADED_PM'	=> 'Draft loaded into message area, you may want to finish your private message now.<br />Your draft will be deleted after submitting this private message.',
	'DRAFT_SAVED'	=> 'Draft successfully saved.',
	'DRAFT_TITLE'	=> 'Draft title',
	'EDIT_REASON'	=> 'Reason for editing this post',
	'EMPTY_FILEUPLOAD'	=> 'The uploaded file is empty.',
	'EMPTY_MESSAGE'	=> 'You must enter a message when posting.',
	'EMPTY_REMOTE_DATA'	=> 'File could not be uploaded, please try uploading the file manually.',
	'FLASH_IS_OFF'	=> '[flash] <em>ປິດ</em>',
	'FLASH_IS_ON'	=> '[flash] <em>ເປີດ</em>',
	'FLOOD_ERROR'	=> 'ທ່ານບໍ່ສາມາດສົ່ງຂໍ້ຄວາມຕິດ ໆ ກັນໄດ້.',
	'FONT_COLOR'	=> 'ສີຕົວຫນັງສື',
	'FONT_COLOR_HIDE'	=> 'ເຊື່ອງສີຕົວຫນັງສື',
	'FONT_HUGE'	=> 'ໃຫຍ່ທີ່ສຸດ',
	'FONT_LARGE'	=> 'ໃຫຍ່',
	'FONT_NORMAL'	=> 'ປານກາງ',
	'FONT_SIZE'	=> 'ຂະໜາດຕົວຫນັງສື',
	'FONT_SMALL'	=> 'ນ້ອຍ',
	'FONT_TINY'	=> 'ນ້ອຍທີ່ສຸດ',
	'GENERAL_UPLOAD_ERROR'	=> 'ບໍ່ສາມາດອັບໂຫລດ %s.',
	'IMAGES_ARE_OFF'	=> '[img] <em>ປິດ</em>',
	'IMAGES_ARE_ON'	=> '[img] <em>ເປີດ</em>',
	'INVALID_FILENAME'	=> '%s is an invalid filename.',
	'LOAD'	=> 'ໂຫລດ',
	'LOAD_DRAFT'	=> 'ໂຫລດຂໍ້ຄວາມຄ້າງ',
	'LOAD_DRAFT_EXPLAIN'	=> 'Here you are able to select the draft you want to continue writing. Your current post will be cancelled, all current post contents will be deleted. View, edit and delete drafts within your User Control Panel.',
	'LOGIN_EXPLAIN_BUMP'	=> 'You need to login in order to bump topics within this forum.',
	'LOGIN_EXPLAIN_DELETE'	=> 'ທ່ານຕ້ອງເຂົ້າສູ່ລະບົບກ່ອນ ເພື່ອຈະສັ່ງລຶບຂໍ້ຄວາມໃນກະທູ້ນີ້',
	'LOGIN_EXPLAIN_POST'	=> 'ທ່ານຕ້ອງເຂົ້າສູ່ລະບົບກ່ອນ ເພື່ອຈະຂຽນຂໍ້ຄວາມໃນກະທູ້ນີ້',
	'LOGIN_EXPLAIN_QUOTE'	=> 'ທ່ານຕ້ອງເຂົ້າສູ່ລະບົບກ່ອນ ເພື່ອຈະຂຽນຂໍ້ຄວາມໃນກະທູ້ນີ້',
	'LOGIN_EXPLAIN_REPLY'	=> 'You need to login in order to reply to topics within this forum.',
	'MAX_FONT_SIZE_EXCEEDED'	=> 'ທ່ານສາມາດໃຊ້ຟ້ອນເຖີງ %1$d.',
	'MAX_FLASH_HEIGHT_EXCEEDED'	=> 'Your flash files may only be up to %1$d pixels high.',
	'MAX_FLASH_WIDTH_EXCEEDED'	=> 'Your flash files may only be up to %1$d pixels wide.',
	'MAX_IMG_HEIGHT_EXCEEDED'	=> 'ທ່ານສາມາດໃສ່ຮູບຂະໜາດຄວາມສູງເຖີງ %1$d pixels',
	'MAX_IMG_WIDTH_EXCEEDED'	=> 'ທ່ານສາມາດໃສ່ຮບຂະໜາດຄວາມກວ້າງເຖີງ to %1$d pixels ',
	'MESSAGE_BODY_EXPLAIN'	=> 'ໃສ່ຂໍ້ຄວາມສ່ວນຕົວຢູ່ນີ້, ທ່ານບໍ່ສາມາດໃສ່ໄດ້ຫລາຍກວ່າ <strong>%d</strong> ໂຕ',
	'MESSAGE_DELETED'	=> 'ຂໍ້ຄວາມສ່ວນຕົວໄດ້ຖືກລຶບແລ້ວ',
	'MORE_SMILIES'	=> 'ເບີ່ງຮູບສະແດງອາລົມເຕີ່ມ',
	'NOTIFY_REPLY'	=> 'ເຕືອນຂ້ອຍເມື່ອມີຄົນຕອບ',
	'NOT_UPLOADED'	=> 'ໄຟລບໍ່ສາມາດອັບໂຫລດໄດ້',
	'NO_DELETE_POLL_OPTIONS'	=> 'You cannot delete existing poll options.',
	'NO_PM_ICON'	=> 'ບໍ່ມີ PM icon',
	'NO_POLL_TITLE'	=> 'ທ່ານຕ້ອງໃຊ້ຊື່ ແບບສຳຫລວດ',
	'NO_POST'	=> 'The requested post does not exist.',
	'NO_POST_MODE'	=> 'No post mode specified.',
	'PARTIAL_UPLOAD'	=> 'The uploaded file was only partially uploaded.',
	'PHP_SIZE_NA'	=> 'The attachment’s file size is too large.<br />Could not determine the maximum size defined by PHP in php.ini.',
	'PHP_SIZE_OVERRUN'	=> 'ຂະໜາດຂອງໄຟລ໌ໃຫຍ່ເກີນໄປ, ຂະໜາດທີ່ຮອງຮັບແມ່ນ %d MB.<br />Please note this is set in php.ini and cannot be overridden.',
	'PLACE_INLINE'	=> 'Place inline',
	'POLL_DELETE'	=> 'ລຶບແບບສຳຫລວດ',
	'POLL_FOR'	=> 'ເປີດໃຫ້ໂຫວດໄດ້ເປັນເວລາ',
	'POLL_FOR_EXPLAIN'	=> 'ໃສ່ເລກ 0 ຫລື ປະໄວ້ເພື່ອໃຫ້ລົງຄະແນນສຳຫລວດແບບຕະຫລອດໄປ',
	'POLL_MAX_OPTIONS'	=> 'ຕົວເລືອກຕໍ່ຄົນ',
	'POLL_MAX_OPTIONS_EXPLAIN'	=> 'ຈຳນວນຕົວເລືອກທີ່ສາມາດລົງຄະແນນໄດ້.',
	'POLL_OPTIONS'	=> 'ຕົວເລືອກແບບສຳຫລວດ',
	'POLL_OPTIONS_EXPLAIN'	=> 'ໃສ່ຕົວເລືອກສຳຫລັບການລົງຄະແນນສຽງ ໑ ແຖວ ຕໍ່ ໑ ຕົວເລືອກ ໃສ່ໄດ້ສູງສຸດແມ່ນ <strong>%d</strong> ຕົວເລືອກ.',
	'POLL_OPTIONS_EDIT_EXPLAIN'	=> 'Place each option on a new line. You may enter up to <strong>%d</strong> options. If you remove or add options all previous votes will be reset.',
	'POLL_QUESTION'	=> 'ຄຳຖາມແບບສຳຫລວດ',
	'POLL_TITLE_TOO_LONG'	=> 'ຊື່ຂອງແບບສຳຫລວດຕ້ອງຫນ້ອຍກວ່າ 100 ໂຕ',
	'POLL_TITLE_COMP_TOO_LONG'	=> 'The parsed size of your poll title is too large, consider removing BBCodes or smilies.',
	'POLL_VOTE_CHANGE'	=> 'ອະນຸຍາດໃຫ້ປ່ຽນໃຈໄດ້',
	'POLL_VOTE_CHANGE_EXPLAIN'	=> 'ຖ້າອະນຸຍາດ ຜູ້ໃຊ້ຄົນອື່ນຈະສາມາດປ່ຽນຜົນໂຫວດ',
	'POSTED_ATTACHMENTS'	=> 'ຕົກລົງ',
	'POST_APPROVAL_NOTIFY'	=> 'You will be notified when your post has been approved.',
	'POST_CONFIRMATION'	=> 'ຢືນຢັນການຕັ້ງກະທູ້',
	'POST_CONFIRM_EXPLAIN'	=> 'To prevent automated posts the board requires you to enter a confirmation code. The code is displayed in the image you should see below. If you are visually impaired or cannot otherwise read this code please contact the %sBoard Administrator%s.',
	'POST_DELETED'	=> 'ຂໍ້ຄວາມນີ້ໄດ້ຖືກລຶບແລ້ວ.',
	'POST_EDITED'	=> 'ຂໍ້ຄວາມນີ້ໄດ້ຖືກແກ້ໄຂແລ້ວ.',
	'POST_EDITED_MOD'	=> 'This message has been edited successfully, but it will need to be approved by a moderator before it is publicly viewable.',
	'POST_GLOBAL'	=> 'ປະກາດລວມ',
	'POST_ICON'	=> 'ໃສ່ສັນຍາລັກກະທູ້',
	'POST_NORMAL'	=> 'ກະທູ້ທົ່ວໄປ',
	'POST_REVIEW'	=> 'ກວດສອບກະທູ້',
	'POST_REVIEW_EXPLAIN'	=> 'At least one new post has been made to this topic. You may wish to review your post in light of this.',
	'POST_STORED'	=> 'ຂໍ້ຄວາມຂອງທ່ານຖືກສົ່ງໄປຮຽບຮ້ອຍແລ້ວ.',
	'POST_STORED_MOD'	=> 'This message has been submitted successfully, but it will need to be approved by a moderator before it is publicly viewable.',
	'POST_TOPIC_AS'	=> 'ຕັ້ງກະທູ້ນີ້ເປັນ',
	'PROGRESS_BAR'	=> 'Progress bar',
	'QUOTE_DEPTH_EXCEEDED'	=> 'You may embed only %1$d quotes within each other.',
	'SAVE'	=> 'ບັນທຶກໄວ້',
	'SAVE_DATE'	=> 'ວັນທີ່ບັນທຶກ',
	'SAVE_DRAFT'	=> 'ເກັບຂໍ້ຄວາມຄ້າງ',
	'SAVE_DRAFT_CONFIRM'	=> 'ການບັນທຶກຂໍ້ຄວາມໄວ້ ຄືການເກັບຂໍ້ຄວາມໄວ້ຊົ່ວຄາວ ແຕ່ບໍ່ໄດ້ສົ່ງເຂົ້າກະທູ້ເທື່ອ ແລະການບັນທຶກນີ້ ຈະບັນທຶກສະເພາະຫົວຂໍ້ ແລະເນື້ອຄວາມເທົ່ານັ້ນ. ທ່ານແນ່ໃຈຫຼືບໍ່ວ່າຈະບັນທຶກຂໍ້ຄວາມໄວ້?',
	'SMILIES'	=> 'ຮູບສະແດງອາລົມ',
	'SMILIES_ARE_OFF'	=> 'Smilies <em>ປິດ</em>',
	'SMILIES_ARE_ON'	=> 'Smilies <em>ເປີດ</em>',
	'STICKY_ANNOUNCE_TIME_LIMIT'	=> 'Sticky/Announcement time limit',
	'STICK_TOPIC_FOR'	=> 'ໃຫ້ກະທູ້ນີ້ຢູ່ເທິງສຸດເປັນເວລາ',
	'STICK_TOPIC_FOR_EXPLAIN'	=> 'ໃສ່ເລກ ໐ ຫຼືປະໄວ້ຄືເກົ່າເພື່ອໃຫ້ຢ່ເທິງສຸດຂອງຫມວດຕະຫລອດໄປ',
	'STYLES_TIP'	=> 'ຄຳແນະນຳ: ທ່ານສາມາດລາກເມົ້າເພື່ອເລືອກຂໍ້ຄວາມໄວ້ແລ້ວ ຄລິກໃຫ້ເປັນຕົວຫນາ ຫຼືສີຕ່າງ ໆ ໄດ້.',
	'TOO_FEW_CHARS'	=> 'ຂໍ້ຄວາມຂອງທ່ານສັ້ນເກີນທີ່ຈະສົ່ງໄດ້.',
	'TOO_FEW_POLL_OPTIONS'	=> 'ທ່ານຕ້ອງໃຊ້ຕົວເລືອກແບບສອບຖາມຢ່າງຫນ້ອຍສອງຕົວເລືອກ',
	'TOO_MANY_ATTACHMENTS'	=> 'ບໍ່ສາມາດເພີ່ມໄດ້ອີກ, %d ອັນແມ່ນສູງສຸດ',
	'TOO_MANY_CHARS'	=> 'Your message contains too many characters.',
	'TOO_MANY_CHARS_POST'	=> 'Your message contains %1$d characters. The maximum number of allowed characters is %2$d.',
	'TOO_MANY_CHARS_SIG'	=> 'Your signature contains %1$d characters. The maximum number of allowed characters is %2$d.',
	'TOO_MANY_POLL_OPTIONS'	=> 'You have tried to enter too many poll options.',
	'TOO_MANY_SMILIES'	=> 'Your message contains too many smilies. The maximum number of smilies allowed is %d.',
	'TOO_MANY_URLS'	=> 'Your message contains too many URLs. The maximum number of URLs allowed is %d.',
	'TOO_MANY_USER_OPTIONS'	=> 'You cannot specify more options per user than existing poll options.',
	'TOPIC_BUMPED'	=> 'Topic has been bumped successfully.',
	'UNAUTHORISED_BBCODE'	=> 'You cannot use certain BBCodes: %s.',
	'UNGLOBALISE_EXPLAIN'	=> 'To switch this topic back from being global to a normal topic, you need to select the forum you wish this topic to be displayed.',
	'UPDATE_COMMENT'	=> 'ອັບເດດຂໍ້ຄວາມ',
	'URL_INVALID'	=> 'URL ຂອງທ່ານໃຊ້ບໍ່ໄດ້',
	'URL_NOT_FOUND'	=> 'The file specified could not be found.',
	'URL_IS_OFF'	=> '[url] <em>ປິດ</em>',
	'URL_IS_ON'	=> '[url]  <em>ເປີດ</em>',
	'USER_CANNOT_BUMP'	=> 'You cannot bump topics in this forum.',
	'USER_CANNOT_DELETE'	=> 'ທ່ານບໍ່ສາມາດລຶບຂໍ້ຄວາມໃນກະທູ້ນີ້ໄດ້',
	'USER_CANNOT_EDIT'	=> 'ທ່ານບໍ່ສະມາດແກ້ໄຂຂໍ້ຄວາມໃນກະທູ້ນີ້ໄດ້',
	'USER_CANNOT_REPLY'	=> 'ທ່ານບໍ່ສາມາດຕອບກະທູ້ນີ້ໄດ້',
	'USER_CANNOT_FORUM_POST'	=> 'You are not able to do posting operations on this forum due to the forum type not supporting it.',
	'VIEW_MESSAGE'	=> '%sເບີ່ງຂໍ້ຄວາມທີ່ສົ່ງໄປ%s',
	'VIEW_PRIVATE_MESSAGE'	=> '%sເບີ່ງຂໍ້ຄວາມສ່ວນຕົວທີ່ສົ່ງໄປ%s',
	'WRONG_FILESIZE'	=> 'ໄຟລໃຫຍ່ເກີນໄປ, ຂະໜາດທີ່ອະນຸຍາດແມ່ນ %1d %2s.',
	'WRONG_SIZE'	=> 'ຮູບຕ້ອງກວ້າງກວ່າ %1$d ຮູບຕ້ອງກວ້າງຢ່າງຫນ້ອຍ %1$d pixels, ສູງຢ່າງຫນ້ອຍ %2$d pixels ແລະ ຕ້ອງບໍ່ກວ້າງກວ່າ %3$d pixels ແລະ ສູງກວ່າ %4$d pixels. ຮູບທີ່ທ່ານໃສ່ແມ່ນມີຄວາມກວ່າ %5$d pixels ແລະ ສູງ %6$d pixels.',
));

?>