<?php
/** 
*
* mcp [Hebrew]
*
* @package language
* @version $Id: $
* @copyright (c) 2007 phpBB Group 
* @author 2008-07-16 - phpBB הישראלי - www.phpBB.co.il
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
	'ACTION'				=> 'פעולה',
	'ACTION_NOTE'			=> 'פעולה/הערה',
	'ADD_FEEDBACK'			=> 'הוסף משוב',
	'ADD_FEEDBACK_EXPLAIN'	=> 'אם ברצונך להוסיף דיווח באזור זה, אנא מלא את הטופס הבא. השתמש בטקסט רגיל בלבד; HTML, BBCode, לא מאופשרים.',
	'ADD_WARNING'			=> 'הוסף אזהרה',
	'ADD_WARNING_EXPLAIN'	=> 'בכדי לשלוח אזהרה למשתמש זה אנא מלא את הטופס הבא. השתמש בטקסט רגיל בלבד; HTML, BBCode, etc. לא מאופשרים.',
	'ALL_ENTRIES'			=> 'כל הכניסות',
	'ALL_NOTES_DELETED'		=> 'כל הערות המשתמשים נמחקו בהצלחה.',
	'ALL_REPORTS'			=> 'כל הדיווחים',
	'ALREADY_REPORTED'		=> 'הודעה זו כבר דווחה.',
	'ALREADY_WARNED'		=> 'הערה כבר נרשמה על הודעה זו.',
	'APPROVE'				=> 'אשר',
	'APPROVE_POST'			=> 'אשר הודעה',
	'APPROVE_POST_CONFIRM'	=> 'האם אתה בטוח שברצונך לאשר הודעה זו?',
	'APPROVE_POSTS'			=> 'אשר הודעות',
	'APPROVE_POSTS_CONFIRM'	=> 'האם אתה בטוח שברצונך לאשר הודעות אלה?',

	'CANNOT_MOVE_SAME_FORUM'=> 'אתה לא יכול להעביר נושא זה לפורום מכיוון שהוא כבר נמצא בפורום זה.',
	'CANNOT_WARN_ANONYMOUS'	=> 'אינך יכול להזהיר משתמש שאינו רשום למערכת.',
	'CANNOT_WARN_SELF'		=> 'אינך יכול להזהיר את עצמך.',
	'CAN_LEAVE_BLANK'		=> 'ניתן להשאיר ריק.',
	'CHANGE_POSTER'			=> 'שנה כותב',
	'CLOSE_REPORT'			=> 'סגור דיווח',
	'CLOSE_REPORT_CONFIRM'	=> 'אתה בטוח שברצונך לסגור את הדיווחים שנבחרו?',
	'CLOSE_REPORTS'			=> 'סגור דיווחים',
	'CLOSE_REPORTS_CONFIRM'	=> 'אתה בטוח שברצונך לסגור את הדיווחים שנבחרו?',

	'DELETE_POSTS'				=> 'מחק הודעות',
	'DELETE_POSTS_CONFIRM'		=> 'אתה בטוח שברצונך למחוק הודעות אלו?',
	'DELETE_POST_CONFIRM'		=> 'אתה בטוח שברצונך למחוק הודעה זו?',
	'DELETE_REPORT'				=> 'מחק דיווחים',
	'DELETE_REPORT_CONFIRM'		=> 'אתה בטוח שברצונך למחוק את הדיווח שבחרת?',
	'DELETE_REPORTS'			=> 'מחק דיווחים',
	'DELETE_REPORTS_CONFIRM'	=> 'אתה בטוח שברצונך למחוק את הדיווחים שבחרת?',
	'DELETE_SHADOW_TOPIC'		=> 'מחק את צל ההודעה',
	'DELETE_TOPICS'				=> 'מחק נושאים שנבחרו',
	'DELETE_TOPICS_CONFIRM'		=> 'אתה בטוח שברצונך למחוק את הנושאים שנבחרו?',
	'DELETE_TOPIC_CONFIRM'		=> 'אתה בטוח שברצונך למחוק את הנושא שנבחר?',
	'DISAPPROVE'				=> 'לא מאשר',
	'DISAPPROVE_REASON'			=> 'הסיבה לאי האישור',
	'DISAPPROVE_POST'			=> 'אל תאשר הודעה זו',
	'DISAPPROVE_POST_CONFIRM'	=> 'אתה בטוח שברצונך לא לאשר את הודעה זו?',
	'DISAPPROVE_POSTS'			=> 'אל תאשר הודעות אלו',
	'DISAPPROVE_POSTS_CONFIRM'	=> 'אתה בטוח שברצונך לא לאשר את הודעות אלו?',
	'DISPLAY_LOG'				=> 'הצג כניסות קודמות',
	'DISPLAY_OPTIONS'			=> 'הצג אפשרויות',

	'EMPTY_REPORT'					=> 'אתה חייב להכניס תיאור אם בחרת בסיבה זו.',
	'EMPTY_TOPICS_REMOVED_WARNING'	=> 'שים לב, הודעה או חלק מההודעות הוסרו בעקבות היותם ריקות או חסרות תוכן.',

	'FEEDBACK'				=> 'משוב',
	'FORK'					=> 'העתק',
	'FORK_TOPIC'			=> 'עתק נושא',
	'FORK_TOPIC_CONFIRM'	=> 'אתה בטוח שברצונך להעתיק נושא זה?',
	'FORK_TOPICS'			=> 'העתק נושאים נבחרים',
	'FORK_TOPICS_CONFIRM'	=> 'אתה בטוח שברצונך להעתיק את הנושאים שנבחרו?',
	'FORUM_DESC'			=> 'תיאור',
	'FORUM_NAME'			=> 'שם הפורום',
	'FORUM_NOT_EXIST'		=> 'הפורום שבחרת אינו קיים.',
	'FORUM_NOT_POSTABLE'	=> 'הפורום שהזנת אינו יכול לקבל נושאים חדשים.',
	'FORUM_STATUS'			=> 'מצב הפורום',
	'FORUM_STYLE'			=> 'סגנון הפורום',

	'GLOBAL_ANNOUNCEMENT'	=> 'הכרזה כללית',

	'IP_INFO'				=> 'מידע על כתובת IP',
	'IPS_POSTED_FROM'		=> 'כתובת ה IP של משתמש זה נשלחה מ',

	'LATEST_LOGS'				=> '5 פעולות אחרונות',
	'LATEST_REPORTED'			=> '5 דיווחים אחרונים',
	'LATEST_UNAPPROVED'			=> '5 הודעות הממתינות לאישור',
	'LATEST_WARNING_TIME'		=> 'אזהרה אחרונה',
	'LATEST_WARNINGS'			=> '5 אזהרות אחרונות',
	'LEAVE_SHADOW'				=> 'השאר העתק מנושא זה',
	'LIST_REPORT'				=> 'דיווח אחד',
	'LIST_REPORTS'				=> '%d דיווחים',
	'LOCK'						=> 'נעל',
	'LOCK_POST_POST'			=> 'נעל הודעה',
	'LOCK_POST_POST_CONFIRM'	=> 'אתה בטוח שברצונך למנוע מעריכת הודעה זו?',
	'LOCK_POST_POSTS'			=> 'נעל הודעות נבחרות',
	'LOCK_POST_POSTS_CONFIRM'	=> 'אתה בטוח שברצונך למנוע מעריכת הודעות אלה?',
	'LOCK_TOPIC_CONFIRM'		=> 'אתה בטוח שברצונך לנעול נושא זה?',
	'LOCK_TOPICS'				=> 'נעל נושאים שנבחרו',
	'LOCK_TOPICS_CONFIRM'		=> 'אתה בטוח שברצונך לנעול את הנושאים שנבחרו?',
	'LOGS_CURRENT_TOPIC'		=> 'התנתקויות:',
	'LOGIN_EXPLAIN_MCP'			=> 'בכדי לנהל פורום זה אתה חייב להתחבר.',
	'LOGVIEW_VIEWTOPIC'			=> 'צפה בנושא',
	'LOGVIEW_VIEWLOGS'			=> 'צפה בלוג הנושא',
	'LOGVIEW_VIEWFORUM'			=> 'צפה בפורום',
	'LOOKUP_ALL'				=> 'צפה בכל רשימת ה IP',
	'LOOKUP_IP'					=> 'ראה IP',

	'MARKED_NOTES_DELETED'		=> 'כל הערות המשתמשים שסומנו נמחקו בהצלחה.',

	'MCP_ADD'						=> 'הוסף הערה',

	'MCP_BAN'					=> 'חסימה',
	'MCP_BAN_EMAILS'			=> 'חסום כתובת דואר אלקטרוני',
	'MCP_BAN_IPS'				=> 'חסימות IP',
	'MCP_BAN_USERNAMES'			=> 'חסימות שם משתמש',

	'MCP_LOGS'						=> 'יומן מנהל',
	'MCP_LOGS_FRONT'				=> 'עמוד ראשון',
	'MCP_LOGS_FORUM_VIEW'			=> 'יומן הפורום',
	'MCP_LOGS_TOPIC_VIEW'			=> 'יומן הנושא',

	'MCP_MAIN'						=> 'ראשי',
	'MCP_MAIN_FORUM_VIEW'			=> 'ראה פורום',
	'MCP_MAIN_FRONT'				=> 'עמוד ראשון',
	'MCP_MAIN_POST_DETAILS'			=> 'פרטי ההודעה',
	'MCP_MAIN_TOPIC_VIEW'			=> 'ראה נושא',
	'MCP_MAKE_ANNOUNCEMENT'			=> 'שנה ל “הכרזה”',
	'MCP_MAKE_ANNOUNCEMENT_CONFIRM'	=> 'אתה בטוח שברצונך לשנות נושא זה ל “הכרזה”?',
	'MCP_MAKE_ANNOUNCEMENTS'		=> 'הערוך ל “הכרזות”',
	'MCP_MAKE_ANNOUNCEMENTS_CONFIRM'=> 'אתה בטוח שברצונך לשנות את הנושאים שנבחרו ל “הכרזות”?',
	'MCP_MAKE_GLOBAL'				=> 'שנה ל “הכרזה כללית”',
	'MCP_MAKE_GLOBAL_CONFIRM'		=> 'אתה בטוח שברצונך לשנות נושא זה ל “הכרזה כללית”?',
	'MCP_MAKE_GLOBALS'				=> 'שנה ל “הכרזה כללית”',
	'MCP_MAKE_GLOBALS_CONFIRM'		=> 'אתה בטוח שברצונך לשנות את הנושאים שנבחרו ל “הכרזות כלליות”?',
	'MCP_MAKE_STICKY'				=> 'שנה ל “דביק”',
	'MCP_MAKE_STICKY_CONFIRM'		=> 'אתה בטוח שברצונך לשנות נושא זה ל “דביק”?',
	'MCP_MAKE_STICKIES'				=> 'שנה ל “דביקים”',
	'MCP_MAKE_STICKIES_CONFIRM'		=> 'אתה בטוח שברצונך לשנות את הנושאים שנבחרו לנושאים “דביקים”?',
	'MCP_MAKE_NORMAL'				=> 'שנה ל “נושא רגיל”',
	'MCP_MAKE_NORMAL_CONFIRM'		=> 'אתה בטוח שברצונך לשנות את הנושא ל “נושא רגיל”?',
	'MCP_MAKE_NORMALS'				=> 'שנה ל “נושאים רגילים”',
	'MCP_MAKE_NORMALS_CONFIRM'		=> 'אתה בטוח שברצונך לשנות את הנושאים שנבחרו ל “נושאים רגילים”?',

	'MCP_NOTES'						=> 'הערות המשתמש',
	'MCP_NOTES_FRONT'				=> 'עמוד ראשון',
	'MCP_NOTES_USER'				=> 'פרטי המשתמש',

	'MCP_POST_REPORTS'				=> 'דווח על הודעה זו',

	'MCP_REPORTS'					=> 'הודעות מדווחות',
	'MCP_REPORT_DETAILS'			=> 'פרטי הדיווח',
	'MCP_REPORTS_CLOSED'			=> 'סגור דיווח',
	'MCP_REPORTS_CLOSED_EXPLAIN'	=> 'זוהי רשימה של דיווחים קודמים שנפתרו.',
	'MCP_REPORTS_OPEN'				=> 'פתח דיווחים',
	'MCP_REPORTS_OPEN_EXPLAIN'		=> 'זוהי רישמת הדיווחים אשר עדין לא נבדקה.',

	'MCP_QUEUE'								=> 'תור המנהל',
	'MCP_QUEUE_APPROVE_DETAILS'				=> 'פרטי האישור',
	'MCP_QUEUE_UNAPPROVED_POSTS'			=> 'הודעות הממתינות לאישור',
	'MCP_QUEUE_UNAPPROVED_POSTS_EXPLAIN'	=> 'זוהי רשימת ההודעות שנרשמו על ידי משתמשים אשר ממתינים לקבל אישור פירסום ההודעות לקהל המשתמשים בפורום.',
	'MCP_QUEUE_UNAPPROVED_TOPICS'			=> 'נושא הממתין לאישור',
	'MCP_QUEUE_UNAPPROVED_TOPICS_EXPLAIN'	=> 'זוהי רשימת הנושאים שנרשמו על ידי משתמשים אשר ממתינים לקבל אישור פירסום ההודעות לקהל המשתמשים בפורום.',

	'MCP_VIEW_USER'			=> 'ראה אזהרות של משתמשים מסויימים',

	'MCP_WARN'				=> 'אזהרות',
	'MCP_WARN_FRONT'		=> 'עמוד ראשון',
	'MCP_WARN_LIST'			=> 'רשימת הערות',
	'MCP_WARN_POST'			=> 'הזהר הודעה ספציפית',
	'MCP_WARN_USER'			=> 'הזהר משתמש',

	'MERGE_POSTS'			=> 'מזג הודעות',
	'MERGE_POSTS_CONFIRM'	=> 'האם אתה בטוח שברצונך למזג הודעות אלו?',
	'MERGE_TOPIC_EXPLAIN'	=> 'במילוי התוכן הנמצא למטה תוכל למזג הודעות ממקומות שונים אל נושא אחד. סדר ההודעות לא יתהפך ובכדי למנוע סדר ההודעות ישלחו לפי זמני ההודעות ממוקדם למאוחר.<br />אנא בחר את מספר הזיהוי של הנושא או לחץ על “בחר נושא” בכדי לחפש את הנושא המבוקש.',
	'MERGE_TOPIC_ID'		=> 'מספר הזיהוי של הנושא',
	'MERGE_TOPICS'			=> 'מזג נושאים',
	'MERGE_TOPICS_CONFIRM'	=> 'האם אתה בטוח שברצונך למזג את הנושאים שנבחרו?',
	'MODERATE_FORUM'		=> 'נהל פורום',
	'MODERATE_TOPIC'		=> 'נהל נושא',
	'MODERATE_POST'			=> 'נהל הודעה',
	'MOD_OPTIONS'			=> 'אפשרויות ניהול',
	'MORE_INFO'				=> 'מידע מתקדם',
	'MOST_WARNINGS'			=> 'משתמשים עם הכי הרבה אזהרות',
	'MOVE_TOPIC_CONFIRM'	=> 'האם אתה בטוח שברצונך להעביר את הנושא אל פורום זה?',
	'MOVE_TOPICS'			=> 'העבר נושאים שנבחרו',
	'MOVE_TOPICS_CONFIRM'	=> 'האם אתה בטוח שברצונך להעביר את הנושאים שנבחרו לפורום זה?',

	'NOTIFY_POSTER_APPROVAL'		=> 'יידע את שולח על האישור?',
	'NOTIFY_POSTER_DISAPPROVAL'		=> 'יידע את השולח על איי האישור לבקשתו?',
	'NOTIFY_USER_WARN'				=> 'יידע את המשתמש על אזהרה חדשה?',
	'NOT_MODERATOR'					=> 'אינך המנהל של פורום זה.',
	'NO_DESTINATION_FORUM'			=> 'אנא בחר את ידע הפורום.',
	'NO_DESTINATION_FORUM_FOUND'	=> 'אין יעד פורום נוכחי.',
	'NO_ENTRIES'					=> 'אין רשימת כניסות מתקופה זו.',
	'NO_FEEDBACK'					=> 'אין משוב עבור משתמש זה.',
	'NO_FINAL_TOPIC_SELECTED'		=> 'אתה חייב לבחור את יעד הנושא בכדי למזג את ההודעות.',
	'NO_MATCHES_FOUND'				=> 'לא נמצאו תוצאות תואמות.',
	'NO_POST'						=> 'אתה חייב לבחור הודעה על מנת להזהיר את המשתמש על הודעה.',
	'NO_POST_REPORT'				=> 'ההודעה לא דווחה.',
	'NO_POST_SELECTED'				=> 'אתה חייב לבחרו לפחות הודעה אחת על מנת לקיים את הפעולה.',
	'NO_REASON_DISAPPROVAL'			=> 'אנא הזן סיבה לדחייה.',
	'NO_REPORT'						=> 'לא נמצאו דיווחים',
	'NO_REPORTS'					=> 'אין דיווחים',
	'NO_REPORTS'					=> 'אין דיווחים',
	'NO_REPORT_SELECTED'			=> 'אתה חייב לבחור לפחות דיווח אחת על מנת לקיים את הפעולה.',
	'NO_TOPIC_ICON'					=> 'אין',
	'NO_TOPIC_SELECTED'				=> 'אתה חייב לבחור לפחות נושא אחת על מנת לקיים את הפעולה.',
	'NO_TOPICS_QUEUE'				=> 'אין נושאים',

	'ONLY_TOPIC'			=> 'רק הנושא “%s”',
	'OTHER_USERS'			=> 'משתמשים אחרים שולחים מכתובת ה IP',

	'POSTER'					=> 'שולח',
	'POSTS_APPROVED_SUCCESS'	=> 'ההודעות שנבחרו אושרו בהצלחה.',
	'POSTS_DELETED_SUCCESS'		=> 'ההודעות שנבחרו הוסרו ממסד הנתונים בהצלחה.',
	'POSTS_DISAPPROVED_SUCCESS'	=> 'ההודעות שנבחרו נדחו בהצלחה.',
	'POSTS_LOCKED_SUCCESS'		=> 'ההודעות שנבחרו ננעלו בהצלחה.',
	'POSTS_MERGED_SUCCESS'		=> 'ההודעות שנבחרו אוחדו בהצלחה.',
	'POSTS_UNLOCKED_SUCCESS'	=> 'ההודעות שנבחרו שוחררו מנעילתם בהצלחה.',
	'POSTS_PER_PAGE'			=> 'הודעות לעמוד',
	'POSTS_PER_PAGE_EXPLAIN'	=> '(הגדר 0 כדי לראות את כל ההודעות.)',
	'POST_APPROVED_SUCCESS'		=> 'ההודעות שנבחרו אושרו בהצלחה.',
	'POST_DELETED_SUCCESS'		=> 'ההודעה שנבחרה הוסרה בהצלחה ממסד הנתונים.',
	'POST_DISAPPROVED_SUCCESS'	=> 'ההודעה שנבחרה נדחתה בהצלחה.',
	'POST_LOCKED_SUCCESS'		=> 'ההודעה ננעלה בהצלחה.',
	'POST_NOT_EXIST'			=> 'ההודעה שביקשת איננה קיימת.',
	'POST_REPORTED_SUCCESS'		=> 'ההודעה דווחה בהצלחה.',
	'POST_UNLOCKED_SUCCESS'		=> 'ההודעה הוסרה מנעילת בהצלחה.',

	'READ_USERNOTES'			=> 'הערות המשתמש',
	'READ_WARNINGS'				=> 'אזהרות המשתמש',
	'REPORTER'					=> 'מדווח',
	'REPORTED'					=> 'דווח',
	'REPORTED_BY'				=> 'דווח על ידי',
	'REPORTED_ON_DATE'			=> 'ב',
	'REPORTS_CLOSED_SUCCESS'	=> 'הדיווחים שנבחרו נסגרו בהצלחה.',
	'REPORTS_DELETED_SUCCESS'	=> 'הדיווחים שנבחרו נמחקו בהצלחה.',
	'REPORTS_TOTAL'				=> 'בסך הכל יש <strong>%d</strong> דיווחים לצפיה.',
	'REPORTS_ZERO_TOTAL'		=> 'אין דיווחים לצפיה.',
	'REPORT_CLOSED'				=> 'דיווח זה כבר נסגר.',
	'REPORT_CLOSED_SUCCESS'		=> 'הדיווח שנבחר נסגר בהצלחה.',
	'REPORT_DELETED_SUCCESS'	=> 'הדיווח שנבחר נמחק בהצלחה.',
	'REPORT_DETAILS'			=> 'פרטי הדיווח',
	'REPORT_MESSAGE'			=> 'דווח על הודעה זו',
	'REPORT_MESSAGE_EXPLAIN'	=> 'השתמש בדף זה בכדי לדווח על הודעה זו. הדיווח יהיה שימושי ויטופל אך ורק אם ההודעה שדווחה עברה על חוקי הפורום.',
	'REPORT_NOTIFY'				=> 'יידע אותי',
	'REPORT_NOTIFY_EXPLAIN'		=> 'יידע אותי כאשר הדיווח נכנס לטיפול.',
	'REPORT_POST_EXPLAIN'		=> 'השתמש בדף זה בכדי לדווח למנהל הפורום או.\ו למנהלי המערכת. הדיווח יטופל במידה והמדווח עבר על חוקי הפורום.',
	'REPORT_REASON'				=> 'סיבת הדיווח',
	'REPORT_TIME'				=> 'זה הדיווח',
	'REPORT_TOTAL'				=> 'בסך הכל יש <strong>דיווח</strong> אחד לצפיה.',
	'RESYNC'					=> 'חדש',
	'RETURN_MESSAGE'			=> '%sחזור להודעה%s',
	'RETURN_NEW_FORUM'			=> '%sעבור לפורום החדש%s',
	'RETURN_NEW_TOPIC'			=> '%sעבור לנושא החדש%s',
	'RETURN_POST'				=> '%sחזור להודעה%s',
	'RETURN_QUEUE'				=> '%sחזור אל תור המנהל%s',
	'RETURN_REPORTS'			=> '%sחזור אל הדיווחים%s',
	'RETURN_TOPIC_SIMPLE'		=> '%sחזור לנושא%s',

	'SEARCH_POSTS_BY_USER'				=> 'חפש הודעות ע"י שם משתמש',
	'SELECT_ACTION'						=> 'בחר בפעולה מתבקשת',
	'SELECT_FORUM_GLOBAL_ANNOUNCEMENT'	=> 'אנא בחר את הפורום שברצונך להציג בו את ההכרזה הכללית.',
	'SELECT_FORUM_GLOBAL_ANNOUNCEMENTS'	=> 'נושא או כמה נושאים שנבחרו הם הכרזות כלליות. אנא בחר את הפורום שברצונך להציג הכרזות אלו.',
	'SELECT_MERGE'						=> 'בחר למיזוג',
	'SELECT_TOPICS_FROM'				=> 'בחר נושאים מ',
	'SELECT_TOPIC'						=> 'בחר נושא',
	'SELECT_USER'						=> 'בחר משתמש',
	'SORT_ACTION'						=> 'יומן פעולות',
	'SORT_DATE'							=> 'תאריך',
	'SORT_IP'							=> 'כתובת IP',
	'SORT_WARNINGS'						=> 'אזהרות',
	'SPLIT_AFTER'						=> 'פצל מההודעה שנבחרה',
	'SPLIT_AFTER'						=> 'פצל לנושא החל מההודעה שנבחרה',
	'SPLIT_FORUM'						=> 'פורום לנושא חדש',
	'SPLIT_POSTS'						=> 'פצל הודעות שנבחרו',
	'SPLIT_SUBJECT'						=> 'כותרת הנושא החדש',
	'SPLIT_TOPIC_ALL'					=> 'פצל נושא מההודעות הנבחרות',
	'SPLIT_TOPIC_ALL_CONFIRM'			=> 'אתה בטוח שברצונך לפצל נושא זה?',
	'SPLIT_TOPIC_BEYOND'				=> 'פצל נושא מההודעה שנבחרה',
	'SPLIT_TOPIC_BEYOND_CONFIRM'		=> 'אתה בטוח שברצונך לפצל נושא זה מההודעה?',
	'SPLIT_TOPIC_EXPLAIN'				=> 'בשימוש דף זה הינך יכול לפצל נושאים ולהפוך לכמה נושאים, או לפצל הודעות מסוימות מהנושא הנבחר.',

	'THIS_POST_IP'				=> 'כתובת ה IP של הודעה זו',
	'TOPICS_APPROVED_SUCCESS'	=> 'הנושאים שנבחרו אושרו.',
	'TOPICS_DELETED_SUCCESS'	=> 'הנושאים שנבחרו הוסרו בהצלחה ממסד הנתונים.',
	'TOPICS_DISAPPROVED_SUCCESS'=> 'הנושאים שנבחרו לא אושרו.',
	'TOPICS_FORKED_SUCCESS'		=> 'הנושאים שנבחרו הועתקו בהצלחה.',
	'TOPICS_LOCKED_SUCCESS'		=> 'הנושאים שנבחרו ננעלו בהצלחה.',
	'TOPICS_MOVED_SUCCESS'		=> 'הנושאים שנבחרו הועברו בהצלחה.',
	'TOPICS_RESYNC_SUCCESS'		=> 'הנושאים שנבחרו חודשו בהצלחה.',
	'TOPICS_TYPE_CHANGED'		=> 'סוג הנושא שונה בהצלחה.',
	'TOPICS_UNLOCKED_SUCCESS'	=> 'הנושאים שנבחרו הותרו מנעילתם.',
	'TOPIC_APPROVED_SUCCESS'	=> 'הנושא הנבחר אושר.',
	'TOPIC_DELETED_SUCCESS'		=> 'הנושא הנבחר הוסר בהצלחה ממסד הנתונים.',
	'TOPIC_DISAPPROVED_SUCCESS'	=> 'הנושא הנבחר לא אושר.',
	'TOPIC_FORKED_SUCCESS'		=> 'הנושא הנבחר הועתק בהצלחה.',
	'TOPIC_LOCKED_SUCCESS'		=> 'הנושא הנבחר ננעל.',
	'TOPIC_MOVED_SUCCESS'		=> 'הנושא הנבחר הועבר בהצלחה.',
	'TOPIC_NOT_EXIST'			=> 'הנושא שבחרת אינו קיים.',
	'TOPIC_RESYNC_SUCCESS'		=> 'הנושא הנבחר חודש בהצלחה.',
	'TOPIC_SPLIT_SUCCESS'		=> 'הנושא הנבחר פוצל בהצלחה.',
	'TOPIC_TIME'				=> 'זמן הנושא',
	'TOPIC_TYPE_CHANGED'		=> 'סוג הנושא שונה בהצלחה.',
	'TOPIC_UNLOCKED_SUCCESS'	=> 'הנושא הנבחר הותר מנעילתו.',
	'TOTAL_WARNINGS'			=> 'סה"כ אזהרות',

	'UNAPPROVED_POSTS_TOTAL'		=> 'בסך הכל יש <strong>%d</strong> הודעות הממתינות לאישור.',
	'UNAPPROVED_POSTS_ZERO_TOTAL'	=> 'אין הודעות הממתינות לאישור.',
	'UNAPPROVED_POST_TOTAL'			=> 'בסך הכל יש <strong>הודעה אחת</strong> הממתינה לאישור.',
	'UNLOCK'						=> 'אפשר נעילה',
	'UNLOCK_POST'					=> 'אפשר את נעילת ההודעה',
	'UNLOCK_POST_EXPLAIN'			=> 'אפשר עריכה.',
	'UNLOCK_POST_POST'				=> 'אפשר נעילת הודעה',
	'UNLOCK_POST_POST_CONFIRM'		=> 'אתה בטוח שברצונך לאפשר עריכת הודעה זו?',
	'UNLOCK_POST_POSTS'				=> 'אפשר נעילת הודעות',
	'UNLOCK_POST_POSTS_CONFIRM'		=> 'אתה בטוח שברצונך לאפשר עריכת ההודעות שנבחרו?',
	'UNLOCK_TOPIC'					=> 'אפשר נעילת נושא',
	'UNLOCK_TOPIC_CONFIRM'			=> 'אתה בטוח שברצונך לאפשר נעילת נושא זה?',
	'UNLOCK_TOPICS'					=> 'אפשר נעילתם של הנושאים',
	'UNLOCK_TOPICS_CONFIRM'			=> 'אתה בטוח שברצונך לאפשר את נעילתם של נושאים אלה?',
	'USER_CANNOT_POST'				=> 'אתה לא יכול לשלוח בפורום זה.',
	'USER_CANNOT_REPORT'			=> 'אתה לא יכול לדווח על הודעות בפורום זה.',
	'USER_FEEDBACK_ADDED'			=> 'משוב המשתמש נוסף בהצלחה.',
	'USER_WARNING_ADDED'			=> 'המשתמש הוזהר בהצלחה.',

	'VIEW_DETAILS'			=> 'ראה פרטים',
	'VIEW_POST'				=> 'ראה הודעה',

	'WARNED_USERS'			=> 'משתמשים שאוזהרו',
	'WARNED_USERS_EXPLAIN'	=> 'זוהי רשימת המשתמשים המוזהרים.',
	'WARNING_PM_BODY'		=> 'רשימת האזהרות הבאה ניתנה ע"י סמכות של מנהלי פורומים ומנהלים ראשים.[quote]%s[/quote]',
	'WARNING_PM_SUBJECT'	=> 'מערכת אזהרות הפורום',
	'WARNING_POST_DEFAULT'	=> 'אזהרה ניתנה בעיקבות הודעה ששלחת: %s.',
	'WARNINGS_ZERO_TOTAL'	=> 'לא קיימות אזהרות.',

	'YOU_SELECTED_TOPIC'	=> 'בחרת את נושא מספר %d: %s.',

	'report_reasons'		=> array(
		'TITLE'	=> array(
			'WAREZ'		=> 'תוכן בלתי חוקי',
			'SPAM'		=> 'ספאם',
			'OFF_TOPIC'	=> 'נושא שאינו קשור',
			'OTHER'		=> 'אחר',
		),
		'DESCRIPTION' => array(
			'WAREZ'		=> 'ההודעה מכילה מידע וקישורים שאינם חוקיים.',
			'SPAM'		=> 'ההודעה שדווחה בעינינה היה רק לפרסום אתרים ותוספים אשר אינם קשורים לאתר.',
			'OFF_TOPIC'	=> 'ההודעה שדווחה היא נושא שאינו קשור לפורום.',
			'OTHER'		=> 'ההודעה שדווחה לא תואמת לאף אחת מהאפשרויות לדיווח, אנא השתמש בשדה המידע נוסף.',
		)
	),
));

?>