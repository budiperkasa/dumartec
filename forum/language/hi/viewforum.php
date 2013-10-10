<?php
/**
*
* viewforum [English]
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
	'ACTIVE_TOPICS'			=> 'सक्रिय विषय',
	'ANNOUNCEMENTS'			=> 'सूचना ',

	'FORUM_PERMISSIONS'		=> 'मंच अनुमतियाँ',

	'ICON_ANNOUNCEMENT'		=> 'सूचना ',
	'ICON_STICKY'			=> 'चिपकू ',

	'LOGIN_NOTIFY_FORUM'	=> 'आपको इस मंच के बारे में सुचित किया गया है , देखने के लिए लॉगिन करें',

	'MARK_TOPICS_READ'		=> 'पढे हुए विषय को चिन्हीत करें',

	'NEW_POSTS_HOT'			=> 'नये स्तम्भ [ पापुलर ]',
	'NEW_POSTS_LOCKED'		=> 'नये स्तम्भ [ लॉक्ड ]',
	'NO_NEW_POSTS_HOT'		=> 'कोई नया स्तम्भ नहीं [ पापुलर ]',
	'NO_NEW_POSTS_LOCKED'	=> 'कोई नया स्तम्भ नहीं  [ लॉक्ड ]',
	'NO_READ_ACCESS'		=> 'आपके पास मंच के इस विषय को पढ़ने के लिए आवश्यक अनुमति नहीं है',

	'POST_FORUM_LOCKED'		=> 'मंच लॉक है',

	'TOPICS_MARKED'			=> 'मंच के इस पढ़े विषय को चिन्हित कर दिया गया है',

	'VIEW_FORUM'			=> 'मंच देखें',
	'VIEW_FORUM_TOPIC'		=> '1 विषय',
	'VIEW_FORUM_TOPICS'		=> '%d विषय',
));

?>