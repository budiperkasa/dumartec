<?php
/**
*
* groups [Farsi]
*
* @package language
* @version $Id: groups.php 8479 2008-03-29 00:22:48Z naderman $
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
	'ALREADY_DEFAULT_GROUP'	=> 'گروه انتخاب شده پیش از این گروه پیشفرض شما بوده است',
	'ALREADY_IN_GROUP'	=> 'شما قبلا کاربر اين گروه بوده ايد !',
	'ALREADY_IN_GROUP_PENDING'	=> 'پیش از این از گروه انتخاب شده درخواست عضویت شده است.',

	'CANNOT_JOIN_GROUP'			=> 'شما اجازه پيوستن به اين گروه را نداريد. شما فقط مي توانيد به گروه هاي آزاد و رايگان بپيونديد.',
	'CANNOT_RESIGN_GROUP'		=> 'شما مجاز به استعفا دادن از اين گروه نيستيد. شما تنها توانايي کناره گيري از گروه هاي آزاد و رايگان را داريد.',
	'CHANGED_DEFAULT_GROUP'	=> 'گروه پیشفرض با موفقیت تغییر یافت.',

	'GROUP_AVATAR'	=> 'نماد گروه',
	'GROUP_CHANGE_DEFAULT'	=> 'آیا شما اطمینان دارید که گروه کاربری پیش فرضتان را به گروه “%s" تغییر دهید ؟',
	'GROUP_CLOSED'	=> 'بسته شده',
	'GROUP_DESC'	=> 'توضيحات گروه',
	'GROUP_HIDDEN'	=> 'مخفي',
	'GROUP_INFORMATION'	=> 'اطلاعات گروه کاربري',
	'GROUP_IS_CLOSED'	=> 'این گروه بسته است, برای عضویت در این گروه فقط باید دعوتنامه ای از مدیر گروه دریافت کنید.',
	'GROUP_IS_FREE'	=> 'این یک گروه آزاد است, همه کاربران جدید خوش آمدند.',
	'GROUP_IS_HIDDEN'	=> 'این یک گروه مخفی است, فقط کاربران این گروه توانایی مشاهده دارند.',
	'GROUP_IS_OPEN'	=> 'این یک گروه آشکار است, کاربران می توانند عضویت در گروه را بکارببرند.',
	'GROUP_IS_SPECIAL'	=> 'این یک گروه ویژه و اختصاصی است, گروه های ویژه فقط توسط مدیران بورد راهبری می شوند.',
	'GROUP_JOIN'	=> 'عضويت در گروه',
	'GROUP_JOIN_CONFIRM'	=> 'آيا از عضويت در گروه انتخاب شده اطمينان داريد ؟',
	'GROUP_JOIN_PENDING'	=> 'درخواست براي عضويت',
	'GROUP_JOIN_PENDING_CONFIRM'	=> 'آیا از درخواست عضویت دادن به این گروه اطمینان دارید ؟',
	'GROUP_JOINED'	=> 'با موفقيت در گروه انتخاب شده عضو شديد.',
	'GROUP_JOINED_PENDING'	=> 'با موفقیت از این گروه درخواست شد. لطفا منتظر تاییدیه رهبر گروه باشید.',
	'GROUP_LIST'	=> 'مديريت کاربران',
	'GROUP_MEMBERS'	=> 'کاربران گروه',
	'GROUP_NAME'	=> 'نام گروه',
	'GROUP_OPEN'	=> 'باز',
	'GROUP_RANK'	=> 'امتياز گروه',
	'GROUP_RESIGN_MEMBERSHIP'	=> 'استعفا از گروه کاربري',
	'GROUP_RESIGN_MEMBERSHIP_CONFIRM'	=> 'آیا از استعفا دادن از گروه انتخاب شده مطمئن هستید ؟',
	'GROUP_RESIGN_PENDING'	=> 'کناره گيري از عضويت تعليقي',
	'GROUP_RESIGN_PENDING_CONFIRM'	=> 'آيا اطمينان داريد که مي خواهيد از عضويت معلقتان براي گروه کاربري انتخاب شده کناره گيري نماييد ؟',
	'GROUP_RESIGNED_MEMBERSHIP'	=> 'شما با موفقیت از گروه انتخاب شده حذف شدید .',
	'GROUP_RESIGNED_PENDING'	=> 'عضويت تعليقي شما از گروه کاربري منتخب حذف شد.',
	'GROUP_TYPE'	=> 'نوع گروه',
	'GROUP_UNDISCLOSED'	=> 'گروه مخفي',
	'FORUM_UNDISCLOSED'	=> 'اداره  انجمن (هاي) مخفي',

	'LOGIN_EXPLAIN_GROUP'	=> 'براي مشاهده مشخصات گروه بايد با نام کاربري خود وارد شويد',

	'NO_LEADERS'	=> 'شما رهبر هيچ گروهي نيستيد.',
	'NOT_LEADER_OF_GROUP'	=> 'عملکرد درخواست شده قابل استفاده برای شما نیست , زیر شما رهبر گروه نمی باشید.',
	'NOT_MEMBER_OF_GROUP'	=> 'عملکرد درخواست شده قادر به دستيابي نيست ، زيرا شما عضو گروه کاربري انتخاب شده نيستيد و يا عضويت شما  تاکنون تاييد نشده است.',
	'NOT_RESIGN_FROM_DEFAULT_GROUP'	=> 'شما مجاز به کناره گیری کردن از گروه پیشفرض خود نمی باشید.',
	
	'PRIMARY_GROUP'	=> 'گروه اصلي',

	'REMOVE_SELECTED'	=> 'حذف انتخاب شده ها',

	'USER_GROUP_CHANGE'	=> 'از “%1$s” به “%2$s”',
	'USER_GROUP_DEMOTE'	=> 'کسر مقام رهبر گروه کاربری',
	'USER_GROUP_DEMOTE_CONFIRM'	=> 'آیا از تنزل دادن به مقام رهبر گروه انتخاب شده اطمینان دارید ؟',
	'USER_GROUP_DEMOTED'	=> 'مقام رهبر گروه با موفقیت تنزل یافت.',
));

?>