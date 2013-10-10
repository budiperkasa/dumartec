<?php
/** 
* acp_permissions (phpBB Permission Set) [Hebrew]
*
* @package language
* @version $Id: $
* @copyright (c) 2007 phpBB Group 
* @author 2008-07-16 - phpBB הישראלי - www.phpBB.co.il
* @license http://opensource.org/licenses/gpl-license.php GNU Public License 
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

/**
*	MODDERS PLEASE NOTE
*	
*	You are able to put your permission sets into a separate file too by
*	prefixing the new file with permissions_ and putting it into the acp 
*	language folder.
*
*	An example of how the file could look like:
*
*	<code>
*
*	if (empty($lang) || !is_array($lang))
*	{
*		$lang = array();
*	}
*
*	// Adding new category
*	$lang['permission_cat']['bugs'] = 'Bugs';
*
*	// Adding new permission set
*	$lang['permission_type']['bug_'] = 'Bug Permissions';
*
*	// Adding the permissions
*	$lang = array_merge($lang, array(
*		'acl_bug_view'		=> array('lang' => 'Can view bug reports', 'cat' => 'bugs'),
*		'acl_bug_post'		=> array('lang' => 'Can post bugs', 'cat' => 'post'), // Using a phpBB category here
*	));
*
*	</code>
*/

// Define categories and permission types
$lang = array_merge($lang, array(
	'permission_cat'	=> array(
		'actions'		=> 'פעולות',
		'content'		=> 'תוכן עניינים',
		'forums'		=> 'פורומים',
		'misc'			=> 'קובץ',
		'permissions'	=> 'הרשאות',
		'pm'			=> 'הודעה פרטית',
		'polls'			=> 'הצבע',
		'post'			=> 'הודעה',
		'post_actions'	=> 'כתוב פעולות',
		'posting'		=> 'כתיבת הודעה',
		'profile'		=> 'פרופיל',
		'settings'		=> 'הגדרות',
		'topic_actions'	=> 'פעולות נושא',
		'user_group'	=> 'משתמשים &amp; קבוצות',
	),

	// With defining 'global' here we are able to specify what is printed out if the permission is within the global scope.
	'permission_type'	=> array(
		'u_'			=> 'הרשאות משתמש',
		'a_'			=> 'הרשאות מנהל ראשי',
		'm_'			=> 'הרשאות ניהול',
		'f_'			=> 'הרשאות פורום',
		'global'		=> array(
			'm_'			=> 'הרשאות מנהל גלובאלי',
		),
	),
));

// User Permissions
$lang = array_merge($lang, array(
	'acl_u_viewprofile'	=> array('lang' => 'יכול לצפות בפרופילים, רשימת משתמשים, ורשימת מחוברים', 'cat' => 'profile'),
	'acl_u_chgname'		=> array('lang' => 'יכול לשנות שם משתמש', 'cat' => 'profile'),
	'acl_u_chgpasswd'	=> array('lang' => 'יכול לשנות סיסמה', 'cat' => 'profile'),
	'acl_u_chgemail'	=> array('lang' => 'יכול לשנות את כתובת הדואר האלקטרוני', 'cat' => 'profile'),
	'acl_u_chgavatar'	=> array('lang' => 'יכול לשנות את תמונת התצוגה', 'cat' => 'profile'),
	'acl_u_chggrp'		=> array('lang' => 'יכול לשנות את קבוצת המשתמשים', 'cat' => 'profile'),

	'acl_u_attach'		=> array('lang' => 'יכול להעלות קבצים', 'cat' => 'post'),
	'acl_u_download'	=> array('lang' => 'יכול להוריד קבצים', 'cat' => 'post'),
	'acl_u_savedrafts'	=> array('lang' => 'יכול לשמור טיוטאות', 'cat' => 'post'),
	'acl_u_chgcensors'	=> array('lang' => 'יכול לנטרל מילים מצונזרות', 'cat' => 'post'),
	'acl_u_sig'			=> array('lang' => 'יכול להשתמש בחתימה', 'cat' => 'post'),

	'acl_u_sendpm'		=> array('lang' => 'יכול לשלוח הודעה פרטית', 'cat' => 'pm'),
	'acl_u_masspm'		=> array('lang' => 'יכול לשלוח הודעות לכמה משתמשים', 'cat' => 'pm'),
	'acl_u_masspm_group'=> array('lang' => 'יכול לשלוח הודעות לקבוצות', 'cat' => 'pm'),
	'acl_u_readpm'		=> array('lang' => 'יכול לקרוא הודעות פרטיות', 'cat' => 'pm'),
	'acl_u_pm_edit'		=> array('lang' => 'יכול לערוך הודעות פרטיות עצמיות', 'cat' => 'pm'),
	'acl_u_pm_delete'	=> array('lang' => 'יכול למחוק הודעות פרטיות מהתיקיה האישית', 'cat' => 'pm'),
	'acl_u_pm_forward'	=> array('lang' => 'יכול להעביר הודעות פרטיות', 'cat' => 'pm'),
	'acl_u_pm_emailpm'	=> array('lang' => 'יכול לשלוח בדואר אלקטרוני הודעות פרטיות', 'cat' => 'pm'),
	'acl_u_pm_printpm'	=> array('lang' => 'יכול להדפיס הודעות פרטיות', 'cat' => 'pm'),
	'acl_u_pm_attach'	=> array('lang' => 'יכול להוסיף קבצים בהודעות פרטיות', 'cat' => 'pm'),
	'acl_u_pm_download'	=> array('lang' => 'יכול להוריד קבצים בהודעות פרטיות', 'cat' => 'pm'),
	'acl_u_pm_bbcode'	=> array('lang' => 'יכול להוסיף BBcode בהודעות פרטיות', 'cat' => 'pm'),
	'acl_u_pm_smilies'	=> array('lang' => 'יכול להוסיף סמיילים בהודעות פרטיות', 'cat' => 'pm'),
	'acl_u_pm_img'		=> array('lang' => 'יכול להוסיף תמונות בהודעות פרטיות', 'cat' => 'pm'),
	'acl_u_pm_flash'	=> array('lang' => 'יכול להוסיף פלאש בהודעות פרטיות', 'cat' => 'pm'),

	'acl_u_sendemail'	=> array('lang' => 'יכול לשלוח דואר אלקטרוני', 'cat' => 'misc'),
	'acl_u_sendim'		=> array('lang' => 'יכול לשלוח הודעות פרטיות', 'cat' => 'misc'),
	'acl_u_ignoreflood'	=> array('lang' => 'יכול לבטל הגבלת הצפה', 'cat' => 'misc'),
	'acl_u_hideonline'	=> array('lang' => 'יכול להסתיר מצב מחובר', 'cat' => 'misc'),
	'acl_u_viewonline'	=> array('lang' => 'יכול לראות משתמשים מוסתרים', 'cat' => 'misc'),
	'acl_u_search'		=> array('lang' => 'יכול לחפש בפורום', 'cat' => 'misc'),
));

// Forum Permissions
$lang = array_merge($lang, array(
	'acl_f_list'		=> array('lang' => 'יכול לראות פורום', 'cat' => 'post'),
	'acl_f_read'		=> array('lang' => 'יכול לקרוא פורום', 'cat' => 'post'),
	'acl_f_post'		=> array('lang' => 'יכול להוסיף נושא חדש', 'cat' => 'post'),
	'acl_f_reply'		=> array('lang' => 'יכול להגיב לנושאים', 'cat' => 'post'),
	'acl_f_icons'		=> array('lang' => 'יכול להשתמש באייקונים', 'cat' => 'post'),
	'acl_f_announce'	=> array('lang' => 'יכול לכתוב הכרזות', 'cat' => 'post'),
	'acl_f_sticky'		=> array('lang' => 'יכול לכתוב הודעות דביקות', 'cat' => 'post'),

	'acl_f_poll'		=> array('lang' => 'יכול ליצור סקרים', 'cat' => 'polls'),
	'acl_f_vote'		=> array('lang' => 'יכול להצביע לסקרים', 'cat' => 'polls'),
	'acl_f_votechg'		=> array('lang' => 'יכול לשנות את ההצבעה', 'cat' => 'polls'),

	'acl_f_attach'		=> array('lang' => 'יכול להוסיף קבצים', 'cat' => 'content'),
	'acl_f_download'	=> array('lang' => 'יכול להוריד קבצים', 'cat' => 'content'),
	'acl_f_sigs'		=> array('lang' => 'יכול להשתמש בחתימה', 'cat' => 'content'),
	'acl_f_bbcode'		=> array('lang' => 'יכול להוסיף BBCode', 'cat' => 'content'),
	'acl_f_smilies'		=> array('lang' => 'יכול להוסיף סמיילים', 'cat' => 'content'),
	'acl_f_img'			=> array('lang' => 'יכול להוסיף תמונות', 'cat' => 'content'),
	'acl_f_flash'		=> array('lang' => 'יכול להוסיף פלאש', 'cat' => 'content'),

	'acl_f_edit'		=> array('lang' => 'יכול לבעלי ההודעה לערוך אותה', 'cat' => 'actions'),
	'acl_f_delete'		=> array('lang' => 'יכול לבעלי ההודעה למחוק אותה', 'cat' => 'actions'),
	'acl_f_user_lock'	=> array('lang' => 'יכול לבעלי הנושא לנעול אותו', 'cat' => 'actions'),
	'acl_f_bump'		=> array('lang' => 'יכול להקפיץ נושאים', 'cat' => 'actions'),
	'acl_f_report'		=> array('lang' => 'יכול לדווח על הודעות', 'cat' => 'actions'),
	'acl_f_subscribe'	=> array('lang' => 'יכול להירשם לפורום', 'cat' => 'actions'),
	'acl_f_print'		=> array('lang' => 'יכול להדפיס נושא', 'cat' => 'actions'),
	'acl_f_email'		=> array('lang' => 'יכול לשלוח בדואר אלקטרוני נושאים', 'cat' => 'actions'),

	'acl_f_search'		=> array('lang' => 'יכול לחפש בפורום', 'cat' => 'misc'),
	'acl_f_ignoreflood' => array('lang' => 'יכול לבטל הגבלת הצפה', 'cat' => 'misc'),
	'acl_f_postcount'	=> array('lang' => 'גידול מונה ההודעות<br /><em>שים לב כי הגדרה זו תחול רק על הודעות חדשות.</em>', 'cat' => 'misc'),
	'acl_f_noapprove'	=> array('lang' => 'יכול לכתוב הודעה ללא אישור', 'cat' => 'misc'),
));

// Moderator Permissions
$lang = array_merge($lang, array(
	'acl_m_edit'		=> array('lang' => 'יכול לערוך הודעות', 'cat' => 'post_actions'),
	'acl_m_delete'		=> array('lang' => 'יכול למחוק הודעות', 'cat' => 'post_actions'),
	'acl_m_approve'		=> array('lang' => 'יכול לאשר הודעות', 'cat' => 'post_actions'),
	'acl_m_report'		=> array('lang' => 'יכול לסגור ולמחוק דיווחים', 'cat' => 'post_actions'),
	'acl_m_chgposter'	=> array('lang' => 'יכול לשנות את מחבר ההודעה', 'cat' => 'post_actions'),

	'acl_m_move'	=> array('lang' => 'יכול להעביר נושאים', 'cat' => 'topic_actions'),
	'acl_m_lock'	=> array('lang' => 'יכול לנעול נושאים', 'cat' => 'topic_actions'),
	'acl_m_split'	=> array('lang' => 'יכול לפצל נושאים', 'cat' => 'topic_actions'),
	'acl_m_merge'	=> array('lang' => 'יכול למזג נושאים', 'cat' => 'topic_actions'),

'acl_m_info'	=> array('lang' => 'יכול לראות פירוט הודעה', 'cat' => 'misc'),
	'acl_m_warn'	=> array('lang' => 'יכול לפרסם אזהרות<br /><em>הגדרה זו נקבעת באופן גלובאלי בלבד. היא אינה שייכת לפורום מסוים.</em>', 'cat' => 'misc'), // This moderator setting is only global (and not local)
	'acl_m_ban'		=> array('lang' => 'יכול לנהל חסימות<br /><em>הגדרה זו נקבעת באופן גלובאלי בלבד. היא אינה שייכת לפורום מסוים.</em>', 'cat' => 'misc'), // This moderator setting is only global (and not local)
));

// Admin Permissions
$lang = array_merge($lang, array(
	'acl_a_board'		=> array('lang' => 'יכול לשנות הגדרות מערכת/לבדוק עבור עידכונים', 'cat' => 'settings'),
	'acl_a_server'		=> array('lang' => 'יכול לשנות שרת/הגדרות תקשורת', 'cat' => 'settings'),
	'acl_a_jabber'		=> array('lang' => 'יכול לשנות הגדרות Jabber', 'cat' => 'settings'),
	'acl_a_phpinfo'		=> array('lang' => 'יכול לראות הגדרות PHP', 'cat' => 'settings'),

	'acl_a_forum'		=> array('lang' => 'יכול לנהל פורומים', 'cat' => 'forums'),
	'acl_a_forumadd'	=> array('lang' => 'יכול להוסיף פורומים חדשים', 'cat' => 'forums'),
	'acl_a_forumdel'	=> array('lang' => 'יכול למחוק פורומים', 'cat' => 'forums'),
	'acl_a_prune'		=> array('lang' => 'יכול לאפס פורומים', 'cat' => 'forums'),

	'acl_a_icons'		=> array('lang' => 'יכול לשנות סמיילים ואייקונים לנושא/הודעה', 'cat' => 'posting'),
	'acl_a_words'		=> array('lang' => 'יכול לשנות צינזורים', 'cat' => 'posting'),
	'acl_a_bbcode'		=> array('lang' => 'יכול להגדיר תגי BBCode', 'cat' => 'posting'),
	'acl_a_attach'		=> array('lang' => 'יכול לשנות הגדרות קובץ מצורף', 'cat' => 'posting'),

	'acl_a_user'		=> array('lang' => 'יכול לנהל משתמשים<br /><em>הגדרה זו כוללת גם צפייה בדפדפן המשתמשים בתוך רשימת המשתמשים המחוברים.</em>', 'cat' => 'user_group'),
	'acl_a_userdel'		=> array('lang' => 'יכול למחוק/לאפס משתמשים', 'cat' => 'user_group'),
	'acl_a_group'		=> array('lang' => 'יכול לנהל קבוצות', 'cat' => 'user_group'),
	'acl_a_groupadd'	=> array('lang' => 'יכול להוסיף קבוצות חדשות', 'cat' => 'user_group'),
	'acl_a_groupdel'	=> array('lang' => 'יכול למחוק קבוצות', 'cat' => 'user_group'),
	'acl_a_ranks'		=> array('lang' => 'יכול לנהל דרגות', 'cat' => 'user_group'),
	'acl_a_profile'		=> array('lang' => 'יכול לנהל שדות מותאמים אישית בפרופיל', 'cat' => 'user_group'),
	'acl_a_names'		=> array('lang' => 'יכול לנהל שמות משתמש לא מורשים', 'cat' => 'user_group'),
	'acl_a_ban'			=> array('lang' => 'יכול לנהל חסימות', 'cat' => 'user_group'),

	'acl_a_viewauth'	=> array('lang' => 'יכול לראות הרשאות מוסתרות', 'cat' => 'permissions'),
	'acl_a_authgroups'	=> array('lang' => 'יכול לשנות הרשאות לקבוצות מסויימות', 'cat' => 'permissions'),
	'acl_a_authusers'	=> array('lang' => 'יכול לשנות הרשאות למשתמשים מסויימים', 'cat' => 'permissions'),
	'acl_a_fauth'		=> array('lang' => 'יכול לשנות הרשאות מחלקה לפורום', 'cat' => 'permissions'),
	'acl_a_mauth'		=> array('lang' => 'יכול לשנות הרשאות מחלקה למנהלים', 'cat' => 'permissions'),
	'acl_a_aauth'		=> array('lang' => 'יכול לשנות הרשאות מחלקה למנהל הראשי', 'cat' => 'permissions'),
	'acl_a_uauth'		=> array('lang' => 'יכול לשנות הרשאות מחלקה למשתמש', 'cat' => 'permissions'),
	'acl_a_roles'		=> array('lang' => 'יכול לנהל תפקידים', 'cat' => 'permissions'),
	'acl_a_switchperm'	=> array('lang' => 'יכול להשתמש בהרשאות אחרות', 'cat' => 'permissions'),

	'acl_a_styles'		=> array('lang' => 'יכול לנהל עיצובים', 'cat' => 'misc'),
	'acl_a_viewlogs'	=> array('lang' => 'יכול לראות מעקב פעולות', 'cat' => 'misc'),
	'acl_a_clearlogs'	=> array('lang' => 'יכול למחוק מעקב פעולות', 'cat' => 'misc'),
	'acl_a_modules'		=> array('lang' => 'יכול לנהל מודולים', 'cat' => 'misc'),
	'acl_a_language'	=> array('lang' => 'יכול לנהל חבילות שפה', 'cat' => 'misc'),
	'acl_a_email'		=> array('lang' => 'יכול לשלוח כמות גדולה של דואר אלקטרוני', 'cat' => 'misc'),
	'acl_a_bots'		=> array('lang' => 'יכול לנהל רובוטים', 'cat' => 'misc'),
	'acl_a_reasons'		=> array('lang' => 'יכול לנהל סיבות דיווח/חסימה', 'cat' => 'misc'),
	'acl_a_backup'		=> array('lang' => 'יכול לגבות/לשחזר מסד נתונים', 'cat' => 'misc'),
	'acl_a_search'		=> array('lang' => 'יכול לנהל חיפוש מאגר נתונים והגדרות', 'cat' => 'misc'),
));

?>