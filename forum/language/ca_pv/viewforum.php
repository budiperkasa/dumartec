<?php
/**
*
* viewforum [Catalan (Valencian)]
*
* @package language
* @version $Id: common.php,v 1.180 2007/05/20 14:01:46 acydburn Exp $
* @copyright (c) 2005 phpBB Group 
* @license http://opensource.org/licenses/gpl-license.php GNU Public License 
*
* Translated by//Traduït per Pau Iranzo <pau@somgnu.cat>
* Team//Equip de traducció de SomGNU <info@somgnu.cat>
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
	'ACTIVE_TOPICS'			=> 'Temes actius',
	'ANNOUNCEMENTS'			=> 'Anuncis',

	'FORUM_PERMISSIONS'		=> 'Permisos del fòrum',

	'ICON_ANNOUNCEMENT'		=> 'Anunci',
	'ICON_STICKY'			=> 'Recurrent',

	'LOGIN_NOTIFY_FORUM'	=> 'You have been notified about this forum, please login to view it.',

	'MARK_TOPICS_READ'		=> 'Marca els temes com a llegits',

	'NEW_POSTS_HOT'			=> 'Nous missatges [ Popular ]',
	'NEW_POSTS_LOCKED'		=> 'Nous missatges [ Bloquejat ]',
	'NO_NEW_POSTS_HOT'		=> 'No hi ha nous missatges [ Popular ]',
	'NO_NEW_POSTS_LOCKED'	=> 'No hi ha nous missatges [ Bloquejat ]',
	'NO_READ_ACCESS'		=> 'No teniu permisos per llegir els temes d\'aquest fòrum.',

	'POST_FORUM_LOCKED'		=> 'Aquest fòrum està bloquejat',

	'TOPICS_MARKED'			=> 'Els temes d\'aquest fòrum s\'han marcat com a llegits.',

	'VIEW_FORUM'			=> 'Veure fòrum',
	'VIEW_FORUM_TOPIC'		=> '1 tema',
	'VIEW_FORUM_TOPICS'		=> '%d temes',
));

?>
