<?php
/**
*
* viewforum [Occitan]
*
* @package language
* @version $Id : viewforum.php,v 1.18 2007/10/04 15 :07 :24 acydburn Exp $
* @copyright (c) 2005 phpBB Group
* @license http://opensource.org/licenses/gpl-license.php GNU Public License
*
*/
/**
* CONTRIBUTORS
* Translation made by phpBB-fr.com and phpBB.biz Teams
* http://www.phpbb-fr.com
* http://www.phpbb.biz
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
// 'Pagina %s of %s' you can (and should) write 'Pagina %1$s of %2$s', this allows
// translators to re-order the output of data while ensuring it remains correct
//
// You do not need this where single placeholders are used, e.g. 'Messatge %d' is fine
// equally where a string contains only two placeholders which are used to wrap text
// in a url you again do not need to specify an order e.g., 'Click %sHERE%s' is fine

$lang = array_merge($lang, array(
   'ACTIVE_TOPICS'   => 'Tèmas populars',
   'ANNOUNCEMENTS'   => 'Anóncias',

   'FORUM_PERMISSIONS' => 'Permissions del forum',

   'ICON_ANNOUNCEMENT'   => 'Anóncia',
   'ICON_STICKY' => 'Post-it',

   'LOGIN_NOTIFY_FORUM' => 'Sètz estat avisat de la preséncia d\'un messatge novèl dins aqueste forum, connectatz-vos per i accedir.',

   'MARK_TOPICS_READ' => 'Marcar totes los tèmas coma legits',

   'NEW_POSTS_HOT' => 'Messatges novèls [ Populars ]',
   'NEW_POSTS_LOCKED' => 'Messatges novèls [ Varrolhats ]',
   'NO_NEW_POSTS_HOT' => 'Pas de messatges novèls [ Populars ]',
   'NO_NEW_POSTS_LOCKED' => 'Pas de messatges novèls [ Varrolhats ]',
   'NO_READ_ACCESS'      => 'Avètz pas los permissions necessàrias per legir los tèmas d\'aqueste forum.',


   'POST_FORUM_LOCKED' => 'Lo forum es varrolhat',

   'TOPICS_MARKED' => 'Los tèmas d\'aqueste forum son estats marcats coma legits.',

   'VIEW_FORUM' => 'Veire lo forum',
   'VIEW_FORUM_TOPIC' => '1 tèma',
   'VIEW_FORUM_TOPICS' => '%d tèmas',
));

 ?>
