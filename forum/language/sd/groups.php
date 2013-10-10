<?php
/**
*
* groups.php [Sindhi]
*
* @package language
* @version $Id: $
* @copyright (c) 2008 phpBB Group
* @author 2008-05-12 - phpBB Group
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
	'ALREADY_DEFAULT_GROUP'	=> 'چونڊيل گروپ پهرين ئي توهان جو طئي ٿيل گروپ آهي.',
	'ALREADY_IN_GROUP'	=> 'توهان پهريان ئي چونڊيل گروپ جا رُڪن آهيو.',
	'ALREADY_IN_GROUP_PENDING'	=> 'توهان پهرين ئي چونڊيل گروپ جي رُڪنيت جي لاءِ درخواست ڪري چڪا آهيو.',
	'CANNOT_JOIN_GROUP'			=> 'توهان هيء گروپ جوائن نه ٿا ڪري سگهو، توهان فقط کليل گروپ جوائن ڪري سگهو ٿا.',
	'CANNOT_RESIGN_GROUP'		=> 'توهان هن گروپ کي نه ٿا ڇڏي سگهو. توهان فقط کليل گروپن کي ئي ڇڏي سگهو ٿا.',
	'CHANGED_DEFAULT_GROUP'	=> 'طئي ٿيل گروپ ڪاميابيءُ سان تبديل ڪيو ويو آهي.',
	'GROUP_AVATAR'	=> 'گروپ جي تصوير',
	'GROUP_CHANGE_DEFAULT'	=> 'ڇا توهان واقعي طئي ٿيل گروپ جي رُڪنيت ۾ تبديلي ڪرڻ چاهيو ٿا“%s”?',
	'GROUP_CLOSED'	=> 'مقفل',
	'GROUP_DESC'	=> 'گروپ جو تفصيل',
	'GROUP_HIDDEN'	=> 'ڳجهو ',
	'GROUP_INFORMATION'	=> 'گروپ جي متعلق معلومات',
	'GROUP_IS_CLOSED'	=> 'هيءُ هڪ مقفل گروپ آهي, نوان رُڪن صرف گروپ جي سربراهه جي دعوت تي ئي شريڪ ٿي سگهن ٿا.',
	'GROUP_IS_FREE'	=> 'هيءُ هڪ بلڪل آزاد گروپ آهي, سڀني نوان رُڪن کو ڀليڪار ڪئي وڃي ٿي.',
	'GROUP_IS_HIDDEN'	=> 'هيءُ هڪ ڳجهو گروپ آهي ,صرف هن گروپ جا رُڪن ئي فهرست جو مطالعو ڪري سگهن ٿا',
	'GROUP_IS_OPEN'	=> 'هيءُ هڪ کليل گروپ آهي , رُڪن هن گروپ ۾ شموليت جي لاءِ درخواست ڪري سگهن ٿا.',
	'GROUP_IS_SPECIAL'	=> 'هيءُ هڪ خصوصي گروپ آهي ,خصوصي گروپن جي تنظيم سازي بورڊ جي منتظمن طرفان ڪئي وڃي ٿي.',
	'GROUP_JOIN'	=> 'گروپ ۾ شموليت اختيار ڪريو',
	'GROUP_JOIN_CONFIRM'	=> 'ڇا توهان واقعي چونڊيل گروپ ۾ شموليت اختيار ڪرڻ چاهيو ٿا?',
	'GROUP_JOIN_PENDING'	=> 'گروپ ۾ شموليت جي درخواست ڪريو',
	'GROUP_JOIN_PENDING_CONFIRM'	=> 'ڇا توهان واقعي چونڊيل گروپ ۾ شموليت جي درخواست ڪرڻ چاهيو ٿا؟',
	'GROUP_JOINED'	=> 'توهان ڪاميابيءَ سان چونديل گروپ جا رُڪن ٿي ويا آهيو',
	'GROUP_JOINED_PENDING'	=> 'چونڊيل گروپ ۾ شموليت جي درخواست ملي وئي آهي .مهرباني ڪري انتظار ڪيو جيسيتائين گروپ جو سربراهه جي طرفان توهان جي درخواست منظور ڪئي وڃِي.',
	'GROUP_LIST'	=> 'رُڪنن جي ترتيب ۽ تنظيم',
	'GROUP_MEMBERS'	=> 'گروپ جا رُڪن',
	'GROUP_NAME'	=> 'گروپ جو نالو',
	'GROUP_OPEN'	=> 'کليل ',
	'GROUP_RANK'	=> 'گروپ جو عهدو',
	'GROUP_RESIGN_MEMBERSHIP'	=> 'گروپ جي رُڪنيت تان استعيفي',
	'GROUP_RESIGN_MEMBERSHIP_CONFIRM'	=> 'ڇا توهان واقعي چونڊيل گروپ جي رُڪنيت تان استعيفي ڏيڻ چاهيو ٿا',
	'GROUP_RESIGN_PENDING'	=> 'گروپ جي التوا هيٺ پيل رُڪنيت تان استعيفى',
	'GROUP_RESIGN_PENDING_CONFIRM'	=> 'ڇا توهان واقعي گروپ جي التوا هيٺ پيل رُڪنيت تان استعيفى ڏيڻ چاهيو ٿا',
	'GROUP_RESIGNED_MEMBERSHIP'	=> 'چونڊيل گروپ تان توهان جي رُڪنيت ختم ڪئي وئي آهي.',
	'GROUP_RESIGNED_PENDING'	=> 'چونڊيل گروپ تان توهان جي التوا هيٺ پيل رُڪنيت ختم ڪئي وئي آهي',
	'GROUP_TYPE'	=> 'گروپ جي نوعيت',
	'GROUP_UNDISCLOSED'	=> 'ڳجهو گروپ',
	'FORUM_UNDISCLOSED'	=> 'ڳجهي گروپ جي ادارت (s)',
	'LOGIN_EXPLAIN_GROUP'	=> 'گروپ جو تفصيل معلوم ڪرڻ لاءِ لاگ ان ٿيڻ ضروري آهي.',
	'NO_LEADERS'	=> 'توهان ڪنهن به گروپ جا سربراهه نه آهيو',
	'NOT_LEADER_OF_GROUP'	=> 'مطلوب هدايتن تي عمل درآمد ممڪن ناهي ڇاڪاڻ ته توهان چونڊيل گروپ جا سربراهه ناهيو.',
	'NOT_MEMBER_OF_GROUP'	=> 'مطلوب هدايتن تي عمل درآمد ممڪن ناهي ڇاڪاڻ ته توهان چونڊيل گروپ جا رُڪن ناهيو يا توهان جي رُڪنيت کي اڃا تائين منظور ناهي ڪيو ويو.',
	'NOT_RESIGN_FROM_DEFAULT_GROUP'	=> 'توهان پنهنجي طئي ٿيل گروپ تان استعيفى نه ٿا ڏئي سگهو',
	'PRIMARY_GROUP'	=> 'بنيادي گروپ',
	'REMOVE_SELECTED'	=> 'چونڊيل کي ختم ڪريو',
	'USER_GROUP_CHANGE'	=> 'از “%1$s” گروپ ڏانهن “%2$s”',
	'USER_GROUP_DEMOTE'	=> 'سربراهي تان استعيفى',
	'USER_GROUP_DEMOTE_CONFIRM'	=> 'ڇا توهان واقعي چونڊيل گروپن جي سربراهي تان استعيفى ڏيڻ چاهيو ٿا?',
	'USER_GROUP_DEMOTED'	=> 'توهان سربراهي تان هٽي چڪا آهيو.',
));

?>