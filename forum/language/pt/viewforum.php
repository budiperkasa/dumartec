<?php
/**
*
* viewforum [Portuguese]
*
* @package language
* @version $Id: viewforum.php,v 1.17 2007/05/10 15:31:21 acydburn Exp $
* @copyright (c) 2005 phpBB Group
* @license http://opensource.org/licenses/gpl-license.php GNU Public License
*
**************************************************************************************************************
* Translation by: Asturmas - f.esteves@ptservidor.com  |  http://www.alojagratis.org & http://www.ptservidor.com
**************************************************************************************************************
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
'ACTIVE_TOPICS' => 'Tópicos Activos',
'ANNOUNCEMENTS' => 'Anúncios',

'FORUM_PERMISSIONS'		=> 'Permissões do fórum',

'ICON_ANNOUNCEMENT' => 'Anúncio',
'ICON_STICKY' => 'Fixo',

'LOGIN_NOTIFY_FORUM' => 'Você foi notificado sobre este fórum, por favor, entre no fórum para poder ver o aviso.',

'MARK_TOPICS_READ' => 'Marcar tópicos como Lidos',

'NEW_POSTS_HOT' => 'Novos Mensagens [ Popular ]',
'NEW_POSTS_LOCKED' => 'Novos Mensagens [ Fechado ]',
'NO_NEW_POSTS_HOT' => 'Sem novos Mensagens [ Popular ]',
'NO_NEW_POSTS_LOCKED' => 'Sem novas Mensagens [ Fechado ]',
'NO_READ_ACCESS'		=> 'Você não têm as permissões necessárias para ler um tópico neste fórum.',

'POST_FORUM_LOCKED' => 'O Fórum fechado',

'TOPICS_MARKED' => 'Os Tópicos deste fórum foram marcados como lidos',

'VIEW_FORUM' => 'Ver fórum',
'VIEW_FORUM_TOPIC' => '1 tópico',
'VIEW_FORUM_TOPICS' => '%d tópico',
));

?>
