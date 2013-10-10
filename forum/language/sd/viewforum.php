<?php
/**
*
* viewforum.php [Urdu]
*
* @package language
* @version $Id: $
* @copyright (c) 2008 phpBB Group
* @author 2008-04-23 - phpBB Group
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
	'ACTIVE_TOPICS'	=> 'فعال موضوع',
	'ANNOUNCEMENTS'	=> 'اعلان',
	'FORUM_PERMISSIONS'	=> 'فورم جا اجازت نامه',
	'ICON_ANNOUNCEMENT'	=> 'اعلان',
	'ICON_STICKY'	=> 'اهم ترين',
	'LOGIN_NOTIFY_FORUM'	=> 'توهن کي هن فورم جي باري ۾ اطلاع ڏنو ويو, ڏسڻ لاءِ لاگ ان ٿيو.',
	'MARK_TOPICS_READ'	=> 'موضوعن کي پڙهيل آهي جو نشان لڳايو',
	'NEW_POSTS_HOT'	=> 'نيون تحريرون [ مقبول ]',
	'NEW_POSTS_LOCKED'	=> 'نيون تحريرون [ مقفل ]',
	'NO_NEW_POSTS_HOT'	=> 'ڪابه نئين تحرير نه آهي [ مقبول ]',
	'NO_NEW_POSTS_LOCKED'	=> 'ڪابه نئين تحرير نه آهي [ مقفل ]',
	'NO_READ_ACCESS'	=> 'فورمن ۾ موجود موضوعن جي مطالعي لاءِ توهان وٽ مطلوبه اجازت نامو موجود نه آهي.',
	'POST_FORUM_LOCKED'	=> 'فورم مقفل آهي',
	'TOPICS_MARKED'	=> 'هن فورم جي سڀئي موضوعن تي "پڙهيل موضوع" جو نشان لڳايو.',
	'VIEW_FORUM'	=> 'فورم ڏسو',
	'VIEW_FORUM_TOPIC'	=> '1 موضوع',
	'VIEW_FORUM_TOPICS'	=> '%d موضوعَ',
));

?>