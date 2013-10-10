<?php
/**
*
* acp_email [Farsi]
*
* @package language
* @version $Id: email.php 8479 2008-03-29 00:22:48Z naderman $
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

// Email settings
$lang = array_merge($lang, array(
	'ACP_MASS_EMAIL_EXPLAIN'	=> 'در این قسمت شما می توانید پیغامی را از طریق پست الکترونیکی به همه کاربران یا کاربران گروهی خاص ارسال نمایید</strong>. To achieve this an e-mail will be sent out to the administrative e-mail address supplied, with a blind carbon copy sent to all recipients. The default setting is to only include 50 recipients in such an e-mail, for more recipients more e-mails will be sent. If you are emailing a large group of people please be patient after submitting and do not stop the page halfway through. It is normal for a mass emailing to take a long time, you will be notified when the script has completed.',
	'ALL_USERS'	=> 'همه کاربران',

	'COMPOSE'	=> 'نوشتن',

	'EMAIL_SEND_ERROR'	=> 'اينها يک يا بيش از يک خطاهاي رخ داده در هنگام ارسال ايميل هستند. لطفا براي بررسي بيشتر جزييات پيغام خطا از %sکارنامه خطا%s ديدن کنيد.',
	'EMAIL_SENT'	=> 'این پیغام با موفقیت ارسال شد.',
	'EMAIL_SENT_QUEUE'	=> 'این پیغام برای ارسال منتظر مانده است.',

	'LOG_SESSION'			=> 'Log mail session to critical log',

	'SEND_IMMEDIATELY'	=> 'ارسال فوري',
	'SEND_TO_GROUP'	=> 'ارسال به گروه',
	'SEND_TO_USERS'	=> 'ارسال به کاربران',
	'SEND_TO_USERS_EXPLAIN'	=> 'لطفا در اين قسمت فقط کاربران گروه کاربري انتخاب شده را وارد کنيد. در ضمن هر کاربر در يک خط.',
	
	'MAIL_HIGH_PRIORITY'	=> 'زياد',
	'MAIL_LOW_PRIORITY'	=> 'کم',
	'MAIL_NORMAL_PRIORITY'	=> 'متوسط',
	'MAIL_PRIORITY'	=> 'تقدم ايمل',
	'MASS_MESSAGE'	=> 'پيغام شما',
	'MASS_MESSAGE_EXPLAIN'	=> 'لطفا در اين قسمت از نوشته هاي واضح استفاده کنيد.',
	
	'NO_EMAIL_MESSAGE'	=> 'شما بايد يک پيغام وارد کنيد.',
	'NO_EMAIL_SUBJECT'	=> 'براي پيغام خود يک عنوان برگزينيد.',
));

?>