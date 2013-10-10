<?php
/**
*
* viewforum [Russian]
*
* @package language
* @version $Id: viewforum.php,v 1.18 2007/10/04 15:07:24 acydburn Exp $
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
	'ACTIVE_TOPICS'			=> 'Активные темы',
	'ANNOUNCEMENTS'			=> 'Объявления',

	'FORUM_PERMISSIONS'		=> 'Մուտքի իրավունք',

	'ICON_ANNOUNCEMENT'		=> 'Объявление',
	'ICON_STICKY'			=> 'Прилепленная',

	'LOGIN_NOTIFY_FORUM'	=> 'Вы получили уведомление о новом сообщении в этом форуме, пожалуйста, авторизируйтесь для его просмотра.',

	'MARK_TOPICS_READ'		=> 'Նշել բոլոր թեմաները որպես ընթերցված',

	'NEW_POSTS_HOT'			=> 'Новые сообщения [ Популярная тема ]',
	'NEW_POSTS_LOCKED'		=> 'Новые сообщения [ Тема закрыта ]',
	'NO_NEW_POSTS_HOT'		=> 'Նոր գրառում չկա [ Популярная тема ]',
	'NO_NEW_POSTS_LOCKED'	=> 'Նոր գրառում չկա [ Тема закрыта ]',
	'NO_READ_ACCESS'		=> 'У вас нет доступа на чтение тем в этом форуме.',

	'POST_FORUM_LOCKED'		=> 'Ֆորումը փակ է',

	'TOPICS_MARKED'			=> 'Բոլոր թեմաները այս ֆորումում նշվել են որպես ընթերցված:',

	'VIEW_FORUM'			=> 'Ֆորումի դիտում',
	'VIEW_FORUM_TOPIC'		=> '1 թեմա',
	'VIEW_FORUM_TOPICS'		=> 'Թեմաներ` %d',
));

?>