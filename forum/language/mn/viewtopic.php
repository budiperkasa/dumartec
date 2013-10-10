<?php
/**
*
* viewtopic [Mongolian]
*
* @package language
* @version $Id: viewtopic.php,v 1.20 2007/10/29 13:39:34 B.Munkh-Erdene $
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
	'ATTACHMENT'						=> 'Хавсралт',
	'ATTACHMENT_FUNCTIONALITY_DISABLED'	=> 'Хавсралтыг идэвхигүй болгосон байна',

	'BOOKMARK_ADDED'		=> 'Сэдэв хадгалагдлаа.',
	'BOOKMARK_ERR'          => 'Bookmarking the topic failed. Please try again.',
	'BOOKMARK_REMOVED'		=> 'Хадгалсан сэдэвийг буцаалаа.',
	'BOOKMARK_TOPIC'		=> 'Сэдэвийг тэмдэглэх',
	'BOOKMARK_TOPIC_REMOVE'	=> 'Тэмдэглэлээсээ хасах',
	'BUMPED_BY'				=> 'Хамгийн сүүлд цохисон %1$s on %2$s',
	'BUMP_TOPIC'			=> 'Сэдэвийг цохих',

	'CODE'					=> 'Код',

	'DELETE_TOPIC'			=> 'Сэдэвийг устгах',
	'DOWNLOAD_NOTICE'		=> 'Танд энэ бичлэгийн хавсралтыг үзэх зөвшөөрөл байхгүй байна.',

	'EDITED_TIMES_TOTAL'	=> 'Хамгийн сүүлд %1$s гишүүн %2$s нд нийт %3$d дахь удаагаа зассан',
	'EDITED_TIME_TOTAL'		=> 'Хамгийн сүүлд %1$s гишүүн %2$s нд нийт %3$d удаа зассан',
	'EMAIL_TOPIC'			=> 'Найздаа илгээх',
	'ERROR_NO_ATTACHMENT'	=> 'Сонгосон хавсралт файл алдаатай',

	'FILE_NOT_FOUND_404'	=> '<strong>%s</strong> ийм файл байхгүй.',
	'FORK_TOPIC'			=> 'Сэдэвийг хуулах',

	'LINKAGE_FORBIDDEN'		=> 'You are not authorised to view, download or link from/to this site.',
	'LOGIN_NOTIFY_TOPIC'	=> 'Та энэ сэдэвийн тухай мэдэхийг хүсвэл нэвтрэн орж үзнэ үү.',
	'LOGIN_VIEWTOPIC'		=> 'Энэ сэдэвийг уншихын тулд нэвтэрсэн байх шаардлага форумын удирдагчийн зүгээс тавьсан байна.',

	'MAKE_ANNOUNCE'				=> 'Солихдоо “Зарлал”',
	'MAKE_GLOBAL'				=> 'Солихдоо “Нийтийн”',
	'MAKE_NORMAL'				=> 'Солихдоо “Стандарт сэдэв”',
	'MAKE_STICKY'				=> 'Солихдоо “Наалттай”',
	'MAX_OPTIONS_SELECT'		=> 'You may select up to <strong>%d</strong> options',
	'MAX_OPTION_SELECT'			=> 'You may select <strong>1</strong> option',
	'MISSING_INLINE_ATTACHMENT'	=> '<strong>%s</strong> энэ хавсралт longer available',
	'MOVE_TOPIC'				=> 'Сэдэвийг зөөх',

	'NO_ATTACHMENT_SELECTED'=> 'Та сонгосон хавсралтыг татаж эсвэл үзэж чадахгүй.',
	'NO_NEWER_TOPICS'		=> 'Энэ форумд шинэхэн сэдэв алга байна',
	'NO_OLDER_TOPICS'		=> 'Энэ форумд хуучирсан сэдэв алга байна',
	'NO_UNREAD_POSTS'		=> 'Энэ сэдэвт уншаагүй бичлэг алга байна.',
	'NO_VOTE_OPTION'		=> 'Та хэзээ санал өгөхийг тодорхой зааж өгөх хэрэгтэй.',
	'NO_VOTES'				=> 'Санал алга',

	'POLL_ENDED_AT'			=> '%s нд санал асуулга дууссан',
	'POLL_RUN_TILL'			=> '%s санал асуулга эхэлсэн',
	'POLL_VOTED_OPTION'		=> 'Та саналаа өгсөн байна',
	'PRINT_TOPIC'			=> 'Хэвлэхээр харах',

	'QUICK_MOD'				=> 'Зохицуулах хэрэгсэл',
	'QUOTE'					=> 'Ишлэх',

	'REPLY_TO_TOPIC'		=> 'Сэдэвт хариулах',
	'RETURN_POST'			=> '%sСэдэв руу буцах%s',

	'SUBMIT_VOTE'			=> 'Саналаа өгөх',

	'TOTAL_VOTES'			=> 'Нийт санал',

	'UNLOCK_TOPIC'			=> 'Сэдэвийг нээх',

	'VIEW_INFO'				=> 'Санал асуулгын мэдээлэл',
	'VIEW_NEXT_TOPIC'		=> 'Дараахь сэдэв',
	'VIEW_PREVIOUS_TOPIC'	=> 'Өмнөх сэдэв',
	'VIEW_RESULTS'			=> 'Үр дүнг үзэх',
	'VIEW_TOPIC_POST'		=> '1 бичлэг',
	'VIEW_TOPIC_POSTS'		=> '%d бичлэг',
	'VIEW_UNREAD_POST'		=> 'Уншаагүй бичлэг',
	'VISIT_WEBSITE'			=> 'WWW',
	'VOTE_SUBMITTED'		=> 'Таны санал нэмэгдлээ',
	'VOTE_CONVERTED'		=> 'Changing votes is not supported for converted polls.',

));

?>