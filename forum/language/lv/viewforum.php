<?php
/**
*
* viewforum [Latvian]
*
* @package language
* @version $Id: viewforum.php 8479 2008-03-29 00:22:48Z naderman $
* @copyright 
* @license http://opensource.org/licenses/gpl-license.php GNU Public License
*
* 2008-05-02: v0.01. iztulkots versijai 3.0.1. kaspars@phpbb.lv
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
	'ACTIVE_TOPICS'			=> 'Aktīvas tēmas',
	'ANNOUNCEMENTS'			=> 'Paziņojumi',

	'FORUM_PERMISSIONS'		=> 'Foruma tiesības',

	'ICON_ANNOUNCEMENT'		=> 'Paziņojums',
	'ICON_STICKY'			=> 'Piesprausts',

	'LOGIN_NOTIFY_FORUM'	=> 'Jums ir paziņots par šo forumu, lūdzu pieslēdzieties, lai to apskatītu.',

	'MARK_TOPICS_READ'		=> 'Atzīmēt tēmas kā izlasītas',

	'NEW_POSTS_HOT'			=> 'Jaunu ieraksti [ Populāri ]',
	'NEW_POSTS_LOCKED'		=> 'Jaunu ieraksti [ Slēgti ]',
	'NO_NEW_POSTS_HOT'		=> 'Nav jaunu ierakstu [ Populāri ]',
	'NO_NEW_POSTS_LOCKED'	=> 'Nav jaunu ierakstu [ Slēgti ]',
	'NO_READ_ACCESS'		=> 'Jums nav piešķirtas tiesības, lai lasītu ziņas šajā forumā.',

	'POST_FORUM_LOCKED'		=> 'Forums ir slēgts',

	'TOPICS_MARKED'			=> 'Šī foruma tēmas Jums tagad ir atzīmētas kā izlasītas.',

	'VIEW_FORUM'			=> 'Lasīt forumu',
	'VIEW_FORUM_TOPIC'		=> '1 tēma',
	'VIEW_FORUM_TOPICS'		=> '%d tēmas',
));

?>