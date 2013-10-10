<?php
/**
*
* viewforum [Brezhoneg]
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
	'ACTIVE_TOPICS'			=> 'Sujedoù entanus',
	'ANNOUNCEMENTS'			=> 'Kemennoù',

	'FORUM_PERMISSIONS'		=> 'Aotreoù ar forom',

	'ICON_ANNOUNCEMENT'		=> 'Kemenn',
	'ICON_STICKY'			=> 'Post-it',

	'LOGIN_NOTIFY_FORUM'	=> 'Kelaouet oc\'h bet diwar-benn ar forom-mañ, bezit anavezet gant ar forom evit gwelet anezhañ.',

	'MARK_TOPICS_READ'		=> 'Lakaat sujedoù da lennet',

	'NEW_POSTS_HOT'			=> 'Kemennadennoù nevez [ Entanus ]',
	'NEW_POSTS_LOCKED'		=> 'Kemennadennoù nevez [ Prennet ]',
	'NO_NEW_POSTS_HOT'		=> 'Kemennadenn nevez ebet [ Entanus ]',
	'NO_NEW_POSTS_LOCKED'	=> 'Kemennadenn nevez ebet [ Prennet ]',
	'NO_READ_ACCESS'		=> 'N\'o peus ket an aotreoù evit lenn sujedoù ar forom-mañ.',

	'POST_FORUM_LOCKED'		=> 'Prennet eo ar forom-mañ',

	'TOPICS_MARKED'			=> 'Lakaet eo bet kemennadennoù ar forom-mañ evel pa vefent bet lennet ganeoc\'h.',

	'VIEW_FORUM'			=> 'Gwelet forom',
	'VIEW_FORUM_TOPIC'		=> '1 sujed',
	'VIEW_FORUM_TOPICS'		=> '%d sujed',
));

?>
