<?php
/**
*
* memberlist [Farsi]
*
* @package language
* @version $Id: memberlist.php 8574 2008-05-29 13:59:47Z Kellanved $
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
	'ABOUT_USER'	=> 'مشخصات',
	'ACTIVE_IN_FORUM'	=> 'بيشترين انجمن کاري',
	'ACTIVE_IN_TOPIC'	=> 'بيشترين تاپيک کاري',
	'ADD_FOE'	=> 'افزودن دشمن',
	'ADD_FRIEND'	=> 'افزودن دوست',
	'AFTER'	=> 'بعد',

	'ALL'					=> 'همه',

	'BEFORE'				=> 'پيش',

	'CC_EMAIL'	=> 'يک کپي از اين ايميل براي من بفرست.',
	'CONTACT_USER'	=> 'ارتباط با',

	'DEST_LANG'	=> 'زبان',
	'DEST_LANG_EXPLAIN'	=> 'انتخاب يک زبان مناسب (در صورت فعال بودن) براي گيرنده اين پيغام.',

	'EMAIL_BODY_EXPLAIN'	=> 'اين پيغام بصورت ساده قابل ارسال خواهد بود, و نمي تواند حاوي BBCode و کدهاي  HTML باشد. آدرس ايميل بازگشت، برروي ايميل شما تنظيم خواهد شد.',
	'EMAIL_DISABLED'	=> 'متاسفيم زيرا همه توابع وابسته به ايميل، غير فعال هستند..',
	'EMAIL_SENT'	=> 'ايميل ارسال شد..',
	'EMAIL_TOPIC_EXPLAIN'	=> 'اين پيغام بصورت ساده قابل ارسال خواهد بود, و نمي تواند حاوي BBCode و کدهاي  HTML باشد. لطفا در نظر داشته باشيد که اطلاعات مبحث در اين پيغام گنجانده شده است. آدرس ايميل بازگشت، برروي ايميل شما تنظيم خواهد شد.',
	'EMPTY_ADDRESS_EMAIL'	=> 'شما بايد آدرس ايميل صحيحي براي گيرنده وارد کنيد.',
	'EMPTY_MESSAGE_EMAIL'	=> 'براي ارسال ايميل لطفا بدنه پيغام را وارد کنيد.',
	'EMPTY_MESSAGE_IM'	=> 'براي ارسال بايد يک پيغام وارد کنيد.',
	'EMPTY_NAME_EMAIL'	=> 'شما بايد يک نام واقعي براي گيرنده وارد کنيد.',
	'EMPTY_SUBJECT_EMAIL'	=> 'شما براي ايميل بايد يک عنوان تعيين کنيد.',
	'EQUAL_TO'	=> 'مساوي با',

	'FIND_USERNAME_EXPLAIN'	=> 'براي جستجوي کاربران مشخص از اين فرم بهره ببريد. احتياج نيست همه فيلدها  تکميل شوند. براي پيدا کردن نتيجه هاي هماهنگ از * استفاده نماييد. اگر قصد تعيين زمان را داريد از اين فرمت استفاده نماييد <kbd>YYYY-MM-DD</kbd>, مثال: <samp>2004-02-29</samp>. از چک باکس هاي نشانه گذاري شده براي انتخاب يک يا چند نام کاربري بهره گيري نماييد (چند نام کاربري مي تواند در ليست فعال شود) و روي کليد تعيين شده براي بازگشت به فرم کليک نماييد.',
	'FLOOD_EMAIL_LIMIT'	=> 'شما نمي توانيد ايميل ديگري را در اين لحضه ارسال کننيد. لطفا بعدا مجددا تلاش نماييد.',

	'GROUP_LEADER'			=> 'رهبر گروه',

	'HIDE_MEMBER_SEARCH'	=> 'جستجوي مخفي کاربر',

	'IM_ADD_CONTACT'	=> 'افزودن تماس',
	'IM_AIM'	=> 'لطفا در نظر داشته باشيد که شما براي استفاده از AOL Instant Messenger مي بايست آنرا نصب شده داشته باشيد.',
	'IM_AIM_EXPRESS'	=> 'AIM Express',
	'IM_DOWNLOAD_APP'	=> 'دانلود برنامه',
	'IM_ICQ'	=> 'Please note that users may have selected to not receive unsolicited instant messages.',
	'IM_JABBER'	=> 'Please note that users may have selected to not receive unsolicited instant messages.',
	'IM_JABBER_SUBJECT'	=> 'اين يک پيغام خودکار است، لطفا پاسخي برايش ارسال نکنيد! ارسال شده توسط %1$s در %2$s.',
	'IM_MESSAGE'	=> 'پيغام شما',
	'IM_MSNM'	=> 'لطفا در نظر داشته باشيد که شما براي استفاده از Windows Messenger مي بايست آنرا نصب شده داشته باشيد.',
	'IM_MSNM_BROWSER'	=> 'مرورگر شما اين را پشتيباني نمي کند.',
	'IM_MSNM_CONNECT'	=> 'MSNM متصل نيست.\\nشما براي ادامه دادن ناچار به برقراري ارتباط با MSNM مي باشيد.',
	'IM_NAME'	=> 'نام شما',
	'IM_NO_DATA'	=> 'اينجا اطلاعات مناسبي براي ارتباط با کاربر موجود نيست.',
	'IM_NO_JABBER'	=> 'متاسفيم, ارسال مستقيم پيغام توسط کاربران Jabber بر روي اين سرور پشتيباني نمي شود. شما براي برقراري ارتباط با گيرنده مافوق ، نياز به نصب ارتباط گر Jabber داريد.',
	'IM_RECIPIENT'	=> 'گيرنده',
	'IM_SEND'	=> 'ارسال پيغام',
	'IM_SEND_MESSAGE'	=> 'ارسال پيغام',
	'IM_SENT_JABBER'	=> 'پيغام شما به %1$s با موفقيت ارسال شد.',
	'IM_USER'	=> 'ارسال يک پيغام فوري',
	
	'LAST_ACTIVE'	=> 'آخرين فعاليت',
	'LESS_THAN'	=> 'کمتر از',
	'LIST_USER'	=> '1 کاربر',
	'LIST_USERS'	=> '%d کاربر',
	'LOGIN_EXPLAIN_LEADERS'	=> 'براي مشاهده تيم انجمن شما ابتدا در انجمن ثبت نام کرده و سپس با نام کاربري خود وارد شويد.',
	'LOGIN_EXPLAIN_MEMBERLIST'	=> 'براي دستيابي به اجازه مشاهده ليست کاربران ابتدا بايد درسايت ثبت نام کنيد سپس با نام کاربري خود وارد شويد.',
	'LOGIN_EXPLAIN_SEARCHUSER'	=> 'براي جستجوي کاربران لطفا در انجمن عضو شده و سپس وارد شويد.',
	'LOGIN_EXPLAIN_VIEWPROFILE'	=> 'براي مشاهده مشخصات کاربران ابتدا بايد در سايت ثبت نام کرده و سپس با نام کاربري خود وارد شويد.',

	'MORE_THAN'	=> 'بيشتر از اين',

	'NO_EMAIL'	=> 'شما اجازه ارسال ايميل به اين کاربر را نداريد.',
	'NO_VIEW_USERS'	=> 'شما اجازه ديدن ليست کاربران و مشخصات آنان را نداريد.',

	'ORDER'					=> 'ترتيب',
	'OTHER'					=> 'ديگر',

	'POST_IP'				=> 'ارسال شده از IP/دامنه',

	'RANK'	=> 'رتبه',
	'REAL_NAME'	=> 'نام گيرنده',
	'RECIPIENT'	=> 'گيرنده',
	'REMOVE_FOE'	=> 'حذف دشمن',
	'REMOVE_FRIEND'	=> 'حذف دوست',

	'SEARCH_USER_POSTS'	=> 'جستجو در پست هاي کاربر',
	'SELECT_MARKED'	=> 'انتخاب علامت دار',
	'SELECT_SORT_METHOD'	=> 'مرتب سازي بر اساس',
	'SEND_AIM_MESSAGE'	=> 'ارسال پيغام AIM',
	'SEND_ICQ_MESSAGE'	=> 'ارسال پيغام ICQ',
	'SEND_IM'	=> 'پيغام فوري',
	'SEND_JABBER_MESSAGE'	=> 'ارسال پيغام Jabber',
	'SEND_MESSAGE'	=> 'پيغام',
	'SEND_MSNM_MESSAGE'	=> 'ارسال پيغام MSNM/WLM',
	'SEND_YIM_MESSAGE'	=> 'ارسال پيغام ياهو',
	'SORT_EMAIL'	=> 'ايميل',
	'SORT_LAST_ACTIVE'	=> 'آخرین عمل',
	'SORT_POST_COUNT'	=> 'مشاهده پست',

	'USERNAME_BEGINS_WITH'	=> 'نام کاربري شروع شود با',
	'USER_ADMIN'	=> 'کاربر - مديريت سايت',
	'USER_BAN'				=> 'درحال تحريم',
	'USER_FORUM'	=> 'اطلاعات کاربر',
	'USER_ONLINE'	=> 'آنلاين',
	'USER_PRESENCE'	=> 'اطلاعات حضور',

	'VIEWING_PROFILE'	=> 'درحال مشاهده مشخصات  %s',
	'VISITED'	=> 'آخرين بازديد',

	'WWW'					=> 'وب سايت',
));

?>