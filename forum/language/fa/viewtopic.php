<?php
/**
*
* viewtopic [Farsi]
*
* @package language
* @version $Id: viewtopic.php 8479 2008-03-29 00:22:48Z naderman $
* @copyright (c) 2005 phpBB Group
* @Language file persian edited by phpBBIran.com - Majid
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
	'ATTACHMENT'						=> 'پيوست',
	'ATTACHMENT_FUNCTIONALITY_DISABLED'	=> 'خصيصه پيوست غيرفعال است.',

	'BOOKMARK_ADDED'		=> '&#1605;&#1576;&#1581;&#1579; &#1576;&#1575; &#1605;&#1608;&#1601;&#1602;&#1740;&#1578; &#1606;&#1588;&#1575;&#1606;&#1607; &#1711;&#1584;&#1575;&#1585;&#1740; &#1588;&#1583;.',
	'BOOKMARK_REMOVED'		=> '&#1605;&#1576;&#1581;&#1579; &#1606;&#1588;&#1575;&#1606;&#1607; &#1711;&#1584;&#1575;&#1585;&#1740; &#1588;&#1583;&#1607; &#1576;&#1575; &#1605;&#1608;&#1601;&#1602;&#1740;&#1578; &#1581;&#1584;&#1601; &#1588;&#1583;.',
	'BOOKMARK_TOPIC'		=> '&#1606;&#1588;&#1575;&#1606;&#1607; &#1711;&#1584;&#1575;&#1585;&#1740; &#1605;&#1576;&#1581;&#1579;',
	'BOOKMARK_TOPIC_REMOVE'	=> '&#1581;&#1584;&#1601; &#1575;&#1586; &#1606;&#1588;&#1575;&#1606;&#1607; &#1711;&#1584;&#1575;&#1585;&#1740; &#1607;&#1575;',
	'BUMPED_BY'				=> 'آخرين بامپ توسط %1$s در %2$s.',
	'BUMP_TOPIC'			=> 'بامپ مبحث',

	'CODE'					=> '&#1705;&#1583;',

	'DELETE_TOPIC'			=> '&#1581;&#1584;&#1601; &#1605;&#1576;&#1581;&#1579;',
	'DOWNLOAD_NOTICE'		=> '&#1588;&#1605;&#1575; &#1587;&#1591;&#1581; &#1583;&#1587;&#1578;&#1585;&#1587;&#1740; &#1605;&#1608;&#1585;&#1583; &#1606;&#1740;&#1575;&#1586; &#1576;&#1585;&#1575;&#1740; &#1605;&#1588;&#1575;&#1607;&#1583;&#1607; &#1608; &#1583;&#1585;&#1740;&#1575;&#1601;&#1578; &#1601;&#1575;&#1740;&#1604; &#1607;&#1575;&#1740; &#1662;&#1740;&#1608;&#1587;&#1578; &#1575;&#1740;&#1606; &#1662;&#1587;&#1578; &#1585;&#1575; &#1606;&#1583;&#1575;&#1585;&#1740;&#1583;.',

	'EDITED_TIMES_TOTAL'	=> 'آخرين ويرايش توسط %1$s on %2$s, ويرايش شده در %3$d.',
	'EDITED_TIME_TOTAL'		=> 'آخرين ويرايش توسط %1$s در %2$s, ويرايش شده %3$d در کل.',
	'EMAIL_TOPIC'			=> 'ارسال به دوستان',
	'ERROR_NO_ATTACHMENT'	=> 'پيوست انتخاب شده موجود نمي باشد.',

	'FILE_NOT_FOUND_404'	=> '&#1601;&#1575;&#1740;&#1604; <strong>%s</strong> &#1605;&#1608;&#1580;&#1608;&#1583; &#1606;&#1605;&#1740; &#1576;&#1575;&#1588;&#1583;.',
	'FORK_TOPIC'			=> 'کپي از مبحث',

	'LINKAGE_FORBIDDEN'		=> 'شما اجازه ديدن ، دريافت و يا رفتن به انجمن هاي لينک را در اين سايت نداريد.',
	'LOGIN_NOTIFY_TOPIC'	=> 'شما درباره اين مبحث مطلع شده ايد, لطفا براي نمايش آن وارد شويد.',
	'LOGIN_VIEWTOPIC'		=> 'براي مشاهده اين مبحث ابتدا بايد عضو شده و سپس با نام کاربري و کلمه عبور خود وارد سايت شويد.',

	'MAKE_ANNOUNCE'				=> '&#1578;&#1594;&#1740;&#1740;&#1585; &#1576;&#1607; &#1575;&#1591;&#1604;&#1575;&#1593;&#1740;&#1607;',
	'MAKE_GLOBAL'				=> 'تغيير به “اطلاعيه کلي (درهمه انجمن ها)”',
	'MAKE_NORMAL'				=> 'تغيير به “مبحث استاندارد”',
	'MAKE_STICKY'				=> 'تغيير به “مهم”',
	'MAX_OPTIONS_SELECT'		=> 'You may select up to <strong>%d</strong> options',
	'MAX_OPTION_SELECT'			=> 'شما مي توانيد <strong>1</strong> گزينه را انتخاب نماييد',
	'MISSING_INLINE_ATTACHMENT'	=> 'پيوست <strong>%s</strong> مدت زيادي از فعال شدنش نمي گذرد',
	'MOVE_TOPIC'				=> 'انتقال مبحث',

	'NO_ATTACHMENT_SELECTED'=> 'شما هيچ پيوستي براي دريافت يا مشاهده انتخاب نکرده ايد.',
	'NO_NEWER_TOPICS'		=> 'هيچ مباحث جديدي در اين انجمن نمي باشد.',
	'NO_OLDER_TOPICS'		=> 'هيچ مباحث قديمي در اين انجمن موجود نمي باشد.',
	'NO_UNREAD_POSTS'		=> 'هيچ پست خوانده نشده جديدي براي اين مبحث موجود نمي باشد.',
	'NO_VOTE_OPTION'		=> 'در هنگام ارسال راي لطفا يک گزينه را انتخاب کنيد.',
	'NO_VOTES'				=> 'بدون راي',

	'POLL_ENDED_AT'			=> 'پايان نظرسنجي در %s',
	'POLL_RUN_TILL'			=> 'Poll runs till %s',
	'POLL_VOTED_OPTION'		=> 'شما به اين گزينه راي داده ايد',
	'PRINT_TOPIC'			=> 'حالت پرينت',

	'QUICK_MOD'				=> 'ابزارهاي فوري',
	'QUOTE'					=> 'نقل قول',

	'REPLY_TO_TOPIC'		=> 'پاسخ به مبحث',
	'RETURN_POST'			=> '%sبازگشت به پست%s',

	'SUBMIT_VOTE'			=> 'ثبت راي',

	'TOTAL_VOTES'			=> 'کل آرا',

	'UNLOCK_TOPIC'			=> 'بازکردن مبحث',

	'VIEW_INFO'				=> 'جزييات پست',
	'VIEW_NEXT_TOPIC'		=> 'مبحث بعدي',
	'VIEW_PREVIOUS_TOPIC'	=> 'مبحث پيشين',
	'VIEW_RESULTS'			=> 'نمايش نتيجه',
	'VIEW_TOPIC_POST'		=> '1 پست',
	'VIEW_TOPIC_POSTS'		=> '%d پست',
	'VIEW_UNREAD_POST'		=> 'اولين پست خوانده نشده',
	'VISIT_WEBSITE'			=> 'WWW',
	'VOTE_SUBMITTED'		=> 'راي شما محسوب شد.',
	'VOTE_CONVERTED'		=> 'تغيير آرا براي نظر سنجي هاي تبديل شده پشتيباني نمي شود.',

));

?>