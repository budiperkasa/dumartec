<?php
/**
*
* acp_groups [Farsi]
*
* @package language
* @version $Id: groups.php 8634 2008-06-09 13:05:34Z Kellanved $
* @copyright (c) 2005 phpBB Group
* @Language file Persian edited by phpBBIran.com - Majid
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
	'ACP_GROUPS_MANAGE_EXPLAIN'	=> 'شما در اين قاب مي توانيد همه گروه هاي کاربري را اداره کنيد. شما مجاز به حذف, ايجاد و ويرايش گروه هاي کاربري موجود هستيد. بعلاوه, شما مي توانيد رهبراني براي گروه ها تعيين, گروه ها را بصورت باز/مخفي/بسته تعريف و نام و توضيحات برايشان مخشخص کنيد.',
	'ADD_USERS'	=> '&#1575;&#1601;&#1586;&#1608;&#1583;&#1606; &#1705;&#1575;&#1585;&#1576;&#1585;&#1575;&#1606;',
	'ADD_USERS_EXPLAIN'	=> 'از اینجا شما می توانید کاربران جدید را به گروه اضافه کنید. شما می توانید گروه را بعنوان پیشفرض برای کاربران انتخاب شده استفاده کنید. اضافه بر این شما می توانید آنها را بعنوان رهبر گروه نیز تعریف کنید. لطفا هر نام کاربری را در یک خط تفکیک کنید.',

	'COPY_PERMISSIONS'	=> '&#1705;&#1662;&#1610; &#1705;&#1585;&#1583;&#1606; &#1587;&#1591;&#1608;&#1581; &#1583;&#1587;&#1578;&#1585;&#1587;&#1610; &#1575;&#1586;',
	'COPY_PERMISSIONS_EXPLAIN'	=> 'گروه دارای سطح دسترسی منتخب شما در این قسمت خواهد بود.',
	'CREATE_GROUP'	=> '&#1575;&#1610;&#1580;&#1575;&#1583; &#1711;&#1585;&#1608;&#1607; &#1580;&#1583;&#1610;&#1583;',

	'GROUPS_NO_MEMBERS'	=> '&#1575;&#1610;&#1606; &#1711;&#1585;&#1608;&#1607; &#1705;&#1575;&#1585;&#1576;&#1585;&#1610; &#1606;&#1583;&#1575;&#1585;&#1583;',
	'GROUPS_NO_MODS'	=> '&#1607;&#1610;&#1670; &#1585;&#1607;&#1576;&#1585;&#1610; &#1576;&#1585;&#1575;&#1610; &#1711;&#1585;&#1608;&#1607; &#1578;&#1593;&#1585;&#1610;&#1601; &#1606;&#1588;&#1583;&#1607; &#1575;&#1587;&#1578;',

	'GROUP_APPROVE'	=> '&#1578;&#1575;&#1610;&#1610;&#1583; &#1705;&#1585;&#1583;&#1606; &#1705;&#1575;&#1585;&#1576;&#1585;',
	'GROUP_APPROVED'	=> '&#1705;&#1575;&#1585;&#1576;&#1585;&#1575;&#1606; &#1578;&#1575;&#1610;&#1610;&#1583; &#1588;&#1583;&#1607;',
	'GROUP_AVATAR'	=> '&#1606;&#1605;&#1575;&#1583; &#1711;&#1585;&#1608;&#1607;',
	'GROUP_AVATAR_EXPLAIN'	=> '&#1575;&#1610;&#1606; &#1578;&#1589;&#1608;&#1610;&#1585; &#1583;&#1585; &#1705;&#1606;&#1578;&#1585;&#1604; &#1662;&#1606;&#1604; &#1711;&#1585;&#1608;&#1607; &#1602;&#1575;&#1576;&#1604; &#1606;&#1605;&#1575;&#1610;&#1588; &#1575;&#1587;&#1578;.',
	'GROUP_CLOSED'	=> '&#1605;&#1587;&#1583;&#1608;&#1583; &#1588;&#1583;&#1607;',
	'GROUP_COLOR'	=> '&#1585;&#1606;&#1711; &#1711;&#1585;&#1608;&#1607;',
	'GROUP_COLOR_EXPLAIN'	=> '',
	'GROUP_CONFIRM_ADD_USER'	=> 'آیا از افزودن کاربر %1$ به این گروه اطمینان دارید ؟',
	'GROUP_CONFIRM_ADD_USERS'	=> 'آیا از افزودن کاربران %1$ به این گروه اطمینان دارید ؟',
	'GROUP_CREATED'	=> '&#1711;&#1585;&#1608;&#1607; &#1576;&#1575; &#1605;&#1608;&#1601;&#1602;&#1610;&#1578; &#1575;&#1590;&#1575;&#1601;&#1607; &#1588;&#1583;.',
	'GROUP_DEFAULT'	=> '&#1575;&#1587;&#1578;&#1601;&#1575;&#1583;&#1607; &#1576;&#1593;&#1606;&#1608;&#1575;&#1606; &#1711;&#1585;&#1608;&#1607; &#1662;&#1610;&#1588;&#1601;&#1585;&#1590; &#1705;&#1575;&#1585;&#1576;&#1585;&#1575;&#1606;',
	'GROUP_DEFS_UPDATED'	=> 'تنظیم گروه پیشفرض برای کاربران انتخاب شده.',
	'GROUP_DELETE'	=> '&#1581;&#1584;&#1601; &#1705;&#1575;&#1585;&#1576;&#1585; &#1575;&#1586; &#1711;&#1585;&#1608;&#1607;',
	'GROUP_DELETED'	=> 'Group deleted and user default groups set successfully.',
	'GROUP_DEMOTE'	=> '&#1705;&#1587;&#1585; &#1605;&#1602;&#1575;&#1605; &#1585;&#1607;&#1576;&#1585; &#1711;&#1585;&#1608;&#1607;',
	'GROUP_DESC'	=> '&#1578;&#1608;&#1590;&#1610;&#1581;&#1575;&#1578; &#1711;&#1585;&#1608;&#1607;',
	'GROUP_DETAILS'	=> '&#1605;&#1588;&#1582;&#1589;&#1575;&#1578; &#1711;&#1585;&#1608;&#1607;',
	'GROUP_EDIT_EXPLAIN'	=> '',
	'GROUP_ERR_USERS_EXIST'	=> 'کاربران تعیین شده پیش از این کاربران این گروه بوده اند.',
	'GROUP_FOUNDER_MANAGE'	=> '&#1601;&#1602;&#1591; &#1576;&#1606;&#1610;&#1575;&#1606;&#1711;&#1584;&#1575;&#1585;',
	'GROUP_FOUNDER_MANAGE_EXPLAIN'	=> '',
	'GROUP_HIDDEN'	=> '&#1605;&#1582;&#1601;&#1610;',
	'GROUP_LANG'	=> '&#1586;&#1576;&#1575;&#1606; &#1711;&#1585;&#1608;&#1607;',
	'GROUP_LEAD'	=> '&#1585;&#1607;&#1576;&#1585;&#1575;&#1606; &#1711;&#1585;&#1608;&#1607;',
	'GROUP_LEADERS_ADDED'	=> '&#1585;&#1607;&#1576;&#1585; &#1580;&#1583;&#1610;&#1583; &#1576;&#1575; &#1605;&#1608;&#1601;&#1602;&#1610;&#1578; &#1576;&#1607; &#1711;&#1585;&#1608;&#1607; &#1575;&#1590;&#1575;&#1601;&#1607; &#1588;&#1583;.',
	'GROUP_LEGEND'	=> '&#1606;&#1605;&#1575;&#1610;&#1588; &#1711;&#1585;&#1608;&#1607; &#1583;&#1585; &#1601;&#1607;&#1585;&#1587;&#1578;',
	'GROUP_LIST'	=> '&#1705;&#1575;&#1585;&#1576;&#1585;&#1575;&#1606; &#1705;&#1606;&#1608;&#1606;&#1610;',
	'GROUP_LIST_EXPLAIN'	=> 'این یک لیست کامل از کاربران عضو شده در این گروه کاربری است. در صورتی که قصد حذف کاربران( شامل نکردن بعضی گروه های ویژه ) یا افزودن کاربران دیگر را دارید لطفا مستعدات مناسب را انتخاب کنید.',
	'GROUP_MEMBERS'	=> '&#1705;&#1575;&#1585;&#1576;&#1585;&#1575;&#1606; &#1711;&#1585;&#1608;&#1607;',
	'GROUP_MEMBERS_EXPLAIN'	=> 'این یک لیست کامل از کاربران این گروه کاربری است. این قسمت شامل بخش های مجزا برای رهبران، کاربران معلق و موجود است. از اینجا شما می توانید همه عضویت ها و نقش های این گروه را صورت دهید. برای حذف یک کاربر تنها از رل رهبری ( نگه داشتن او در گروه ) از خصیصه"  کسر مقام رهبر گروه " بجای حذف استفاده کنید. طبق این عمل می توانید برای استفاده یک کاربر بعنوان رهبر گروه از خصیصه " ترفیه دادن به رهبر گروه " بهره ببرید.',
	'GROUP_MESSAGE_LIMIT'	=> '&#1581;&#1583; &#1662;&#1610;&#1594;&#1575;&#1605; &#1582;&#1589;&#1608;&#1589;&#1610; &#1711;&#1585;&#1608;&#1607; &#1583;&#1585; &#1607;&#1585; &#1662;&#1608;&#1588;&#1607;',
	'GROUP_MESSAGE_LIMIT_EXPLAIN'	=> 'این گزینه تعداد پیغام های هر کاربر در هر پوشه را تعیین می کند. مقدار 0 نمایانگر این است که مقدار پیشفرض کاربر مورد استعمال است.',
	'GROUP_MODS_ADDED'	=> '&#1585;&#1607;&#1576;&#1585; &#1580;&#1583;&#1610;&#1583; &#1711;&#1585;&#1608;&#1607; &#1576;&#1575; &#1605;&#1608;&#1601;&#1602;&#1610;&#1578; &#1575;&#1590;&#1575;&#1601;&#1607; &#1588;&#1583;.',
	'GROUP_MODS_DEMOTED'	=> '&#1585;&#1607;&#1576;&#1585; &#1711;&#1585;&#1608;&#1607; &#1576;&#1575; &#1605;&#1608;&#1601;&#1602;&#1610;&#1578; &#1705;&#1587;&#1585; &#1605;&#1602;&#1575;&#1605; &#1610;&#1575;&#1601;&#1578;.',
	'GROUP_MODS_PROMOTED'	=> 'کاربران گروه با موفقیت ترقیع یافتند.',
	'GROUP_NAME'	=> '&#1606;&#1575;&#1605; &#1711;&#1585;&#1608;&#1607;',
	'GROUP_NAME_TAKEN'	=> 'نام ثبت شده توسط شما پیش از این مورد استفاده قرار گرفته است، لطفا نامی دیگر انتخاب کنید.',
	'GROUP_OPEN'	=> '&#1576;&#1575;&#1586;',
	'GROUP_PENDING'	=> 'کاربران معلق',
	'GROUP_PROMOTE'	=> '&#1578;&#1585;&#1601;&#1610;&#1593; &#1583;&#1575;&#1583;&#1606; &#1576;&#1607; &#1585;&#1607;&#1576;&#1585; &#1711;&#1585;&#1608;&#1607;',
	'GROUP_RANK'	=> '&#1585;&#1578;&#1576;&#1607; &#1711;&#1585;&#1608;&#1607;',
	'GROUP_RECEIVE_PM'	=> '&#1711;&#1585;&#1608;&#1607; &#1578;&#1608;&#1575;&#1606;&#1575;&#1610;&#1610; &#1583;&#1585;&#1610;&#1575;&#1601;&#1578; &#1662;&#1610;&#1594;&#1575;&#1605; &#1607;&#1575;&#1610; &#1582;&#1589;&#1608;&#1589;&#1610; &#1585;&#1575; &#1583;&#1575;&#1588;&#1578;&#1607; &#1576;&#1575;&#1588;&#1583;',
	'GROUP_RECEIVE_PM_EXPLAIN'	=> 'Please note that hidden groups are not able to be messaged, regardless of this setting.',
	'GROUP_REQUEST'	=> '&#1583;&#1585;&#1582;&#1608;&#1575;&#1587;&#1578;&#1610;',
	'GROUP_SETTINGS_SAVE'	=> '&#1578;&#1606;&#1592;&#1610;&#1605;&#1575;&#1578; &#1662;&#1607;&#1606;&#1575;&#1610; &#1711;&#1585;&#1608;&#1607;',
	'GROUP_TYPE'	=> '&#1606;&#1608;&#1593; &#1711;&#1585;&#1608;&#1607;',
	'GROUP_TYPE_EXPLAIN'	=> 'This determines which users can join or view this group.',
	'GROUP_UPDATED'	=> '&#1575;&#1608;&#1604;&#1608;&#1610;&#1578; &#1711;&#1585;&#1608;&#1607; &#1576;&#1575; &#1605;&#1608;&#1601;&#1602;&#1610;&#1578; &#1576;&#1585;&#1608;&#1586; &#1588;&#1583;.',
	
	'GROUP_USERS_ADDED'	=> '&#1705;&#1575;&#1585;&#1576;&#1585;&#1575;&#1606; &#1580;&#1583;&#1610;&#1583; &#1576;&#1575; &#1605;&#1608;&#1601;&#1602;&#1610;&#1578; &#1576;&#1607; &#1711;&#1585;&#1608;&#1607; &#1575;&#1590;&#1575;&#1601;&#1607; &#1588;&#1583;&#1606;&#1583;.',
	'GROUP_USERS_EXIST'	=> '&#1705;&#1575;&#1585;&#1576;&#1585;&#1575;&#1606; &#1575;&#1606;&#1578;&#1582;&#1575;&#1576; &#1588;&#1583;&#1607; &#1662;&#1610;&#1588; &#1575;&#1586; &#1575;&#1610;&#1606; &#1593;&#1590;&#1608; &#1576;&#1608;&#1583;&#1606;&#1583;.',
	'GROUP_USERS_REMOVE'	=> 'کاربران از گروه حذف و پیشفرض های جدید با موفقیت بکار گرفته شدند.',

	'MAKE_DEFAULT_FOR_ALL'	=> '&#1575;&#1587;&#1578;&#1601;&#1575;&#1583;&#1607; &#1576;&#1593;&#1606;&#1608;&#1575;&#1606; &#1711;&#1585;&#1608;&#1607; &#1662;&#1610;&#1588;&#1601;&#1585;&#1590; &#1576;&#1585;&#1575;&#1610; &#1607;&#1585; &#1705;&#1575;&#1585;&#1576;&#1585;',
	'MEMBERS'	=> '&#1705;&#1575;&#1585;&#1576;&#1585;&#1575;&#1606;',

	'NO_GROUP'	=> '&#1607;&#1610;&#1670; &#1711;&#1585;&#1608;&#1607;&#1610; &#1578;&#1593;&#1610;&#1585;&#1601; &#1606;&#1588;&#1583;&#1607;.',
	'NO_GROUPS_CREATED'	=> '&#1607;&#1610;&#1670; &#1711;&#1585;&#1608;&#1607;&#1610; &#1587;&#1575;&#1582;&#1607; &#1606;&#1588;&#1583;&#1607;.',
	'NO_PERMISSIONS'	=> '&#1587;&#1591;&#1608;&#1581; &#1583;&#1587;&#1578;&#1585;&#1587;&#1610; &#1585;&#1575; &#1705;&#1662;&#1610; &#1606;&#1705;&#1606;',
	'NO_USERS'	=> '',
	'NO_USERS_ADDED'	=> 'کاربران افزوده شده ای به این گروه نیستند.',
	'NO_VALID_USERS'			=> 'You haven’t entered any users eligible for that action.',

	'SPECIAL_GROUPS'	=> 'گروه هاي از پيش مقرر شده',
	'SPECIAL_GROUPS_EXPLAIN'	=> 'گروه هاي از پيش مقرر شده گروه هاي ويژه اي هستند, آنها قادر به حذف شدن و ويرايش سرراست نيستند. اگرچه شما مي توانيد کاربران را اضافه و اداره کنيد و تنظيمات بنيانيشان را تغيير دهيد.',

	'TOTAL_MEMBERS'				=> 'کاربران',

	'USERS_APPROVED'	=> '&#1705;&#1575;&#1585;&#1576;&#1585;&#1575;&#1606; &#1576;&#1575; &#1605;&#1608;&#1601;&#1602;&#1610;&#1578; &#1578;&#1575;&#1610;&#1610;&#1583; &#1588;&#1583;&#1606;&#1583;.',
	'USER_DEFAULT'	=> '&#1705;&#1575;&#1585;&#1576;&#1585; &#1662;&#1610;&#1588;&#1601;&#1585;&#1590;',
	'USER_DEF_GROUPS'	=> 'گروه هاي مقرر شده توسط کاربر',
	'USER_DEF_GROUPS_EXPLAIN'	=> 'اينها گروه هايي هستند که توسط شما يا مدير ديگر بورد ايجاد شده اند. شما مي توانيد عضويت اين گروه ها را اداره و نيز ويژگي ها را ويرايش و گروه را حذف نماييد.',
	'USER_GROUP_DEFAULT'	=> '&#1575;&#1587;&#1578;&#1601;&#1575;&#1583;&#1607; &#1576;&#1593;&#1606;&#1608;&#1575;&#1606; &#1711;&#1585;&#1608;&#1607; &#1662;&#1610;&#1588;&#1601;&#1585;&#1590;',
	'USER_GROUP_DEFAULT_EXPLAIN'	=> 'اگر قصد تعیین گروه بعنوان گروه پیشفرض کاربر را دارید، از اینجا " بلی " را انتخاب کنید.',
	'USER_GROUP_LEADER'	=> '&#1575;&#1587;&#1578;&#1601;&#1575;&#1583;&#1607; &#1576;&#1593;&#1606;&#1608;&#1575;&#1606; &#1585;&#1607;&#1576;&#1585; &#1711;&#1585;&#1608;&#1607;',
));

?>