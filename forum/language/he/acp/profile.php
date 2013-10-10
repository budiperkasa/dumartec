<?php
/** 
*
* acp_profile [Hebrew]
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

// Custom profile fields
$lang = array_merge($lang, array(
	'ADDED_PROFILE_FIELD'	=> 'שדה פרופיל מותאם נוסף בהצלחה.',
	'ALPHA_ONLY'			=> 'אותיות וספרות בלבד.',
	'ALPHA_SPACERS'			=> 'אותיות, ספרות ורווחים',
	'ALWAYS_TODAY'			=> 'התאריך הנוכחי תמיד',

	'BOOL_ENTRIES_EXPLAIN'	=> 'רשום את האפשרות עכשיו',
	'BOOL_TYPE_EXPLAIN'		=> 'הגדר את הסוג, תיבת סימון או כפתור רדיו. תיבת סימון תוצג רק אם היא תסומן למשתמש נתון. באותו מקרה אפשרות השפה <strong>השנייה</strong> תהיה בשימוש. כפתורי רדיו יוצגו ללא התחשבות בערכיהם.',

	'CHANGED_PROFILE_FIELD'		=> 'שדה פרופיל שונה בהצלחה.',
	'CHARS_ANY'					=> 'כל תו',
	'CHECKBOX'					=> 'תיבת סימון',
	'COLUMNS'					=> 'עמודה',
	'CP_LANG_DEFAULT_VALUE'		=> 'ערך בררת מחדל',
	'CP_LANG_EXPLAIN'			=> 'תאור שדה',
	'CP_LANG_EXPLAIN_EXPLAIN'	=> 'ההסבר לשדה  זה יוצג למשתמש.',
	'CP_LANG_NAME'				=> 'שם  /כותרת השדה יוצג למשתמש',
	'CP_LANG_OPTIONS'			=> 'אפשרויות',
	'CREATE_NEW_FIELD'			=> 'הוסף שדה חדש',
	'CUSTOM_FIELDS_NOT_TRANSLATED'	=> 'לפחות אחד משדות הפרופיל המותאמים עדיין לא תורגם. נא הכנס את המידע הדרוש על ידי לחיצה על "תרגם".',

	'DEFAULT_ISO_LANGUAGE'			=> 'שפה מועדפת [%s]',
	'DEFAULT_LANGUAGE_NOT_FILLED'	=> 'הכניסות של השפה עבור שפת בררת מחדל לא ממולאת לשדה הפרופיל הזה. ',
	'DEFAULT_VALUE'					=> 'ערך בררת מחדל',
	'DELETE_PROFILE_FIELD'			=> 'הסר שדה פרופיל',
	'DELETE_PROFILE_FIELD_CONFIRM'	=> 'אתה בטוח שאתה רוצה למחוק את שדה הפרופיל?',
	'DISPLAY_AT_PROFILE'			=> 'הצג בלוח הבקרה למשתמש',
	'DISPLAY_AT_PROFILE_EXPLAIN'	=> 'המשתמש יוכל לשנות את שדה הפרופיל מתוך לוח הבקרה למשתמש.',
	'DISPLAY_AT_REGISTER'			=> 'הצג במסך ההרשמה',
	'DISPLAY_AT_REGISTER_EXPLAIN'	=> 'אם אפשרות זו מאופשרת, השדה יוצג בהרשמה.',
	'DISPLAY_PROFILE_FIELD'			=> 'הצג שדה פרופיל',
	'DISPLAY_PROFILE_FIELD_EXPLAIN'	=> 'שדה הפרופיל יוצג בכח המקומות המאופשרים על ידי הגדרות הטעינה. הגדרת אפשרות זו ל"לא" תסתיר את השדה מעמודי הנושאים, פרופילים, ורשימת המשתמשים.',
	'DROPDOWN_ENTRIES_EXPLAIN'		=> 'הכנס את האפשרות עכשיו, כל אפשרות בשורה נפרדת.',

	'EDIT_DROPDOWN_LANG_EXPLAIN'	=> 'אנא שים לב שאתה מסוגל לשנות את הטקסט של האפשרויות וגם מסוגל להוסף אפשרויות חדשות לסוף. זה לא ייעוץ להוסיף אפשרות חדשה בין אפשרויות שקיימות - תוצאה זו יכולה לפגוע באפשרויות לא נכונות שקבעו המשתמשים שלך. זה יכול גם לקרות אם אתה מסלק אפשרויות בין לבין. הסרת אפשרויות יכולה לגרום לתוצאה אחרי קביעת פריט זה למשתמשים יחזיר חזרה לבררת המחדל הראשונה.',
	'EMPTY_FIELD_IDENT'				=> 'זוהה שדה ריק',
	'EMPTY_USER_FIELD_NAME'			=> 'נא הכנס שם/כותרת לשדה',
	'ENTRIES'						=> 'כניסות',
	'EVERYTHING_OK'					=> 'הכל בסדר',

	'FIELD_BOOL'				=> 'בוליאני (כן/לא)',
	'FIELD_DATE'				=> 'תאריך',
	'FIELD_DESCRIPTION'			=> 'תאור השדה',
	'FIELD_DESCRIPTION_EXPLAIN'	=> 'ההסבר לשדה  זה יוצג למשתמש',
	'FIELD_DROPDOWN'			=> 'תיבת גלילה',
	'FIELD_IDENT'				=> 'זיהוי שדה',
	'FIELD_IDENT_ALREADY_EXIST'	=> 'שם השדה הנוכחי קיים. בחר שם חדש.',
	'FIELD_IDENT_EXPLAIN'		=> 'זיהוי השדה הינו בשביל לזהות את התחום של הפרופיל בתוך מאגר הנתונים והעיצובים.',
	'FIELD_INT'					=> 'מספרים',
	'FIELD_LENGTH'				=> 'אורך התיבה',
	'FIELD_NOT_FOUND'			=> 'שדה הפרופיל לא נמצא.',
	'FIELD_STRING'				=> 'טקסט שדה יחיד',
	'FIELD_TEXT'				=> 'אזור טקסט',
	'FIELD_TYPE'				=> 'סוג שדה',
	'FIELD_TYPE_EXPLAIN'		=> 'אתה לא תאופשר לשנות את סוג השדה מאוחר יותר.',
	'FIELD_VALIDATION'			=> 'תוקף השדה',
	'FIRST_OPTION'				=> 'אפשרות ראשונה',

	'HIDE_PROFILE_FIELD'			=> 'הסתר שדה פרופיל',
	'HIDE_PROFILE_FIELD_EXPLAIN'	=> 'הסתר את שדה הפרופיל מכל שאר המשתמשים מלבד המשתמש, מנהלים ראשיים, ומנהלים אשר עדיין יכולים לצפות בשדה זה. אם הצג בלוח הבקרה למשתמש מבוטל, המשתמש לא יוכל לראות או לערוך את שדה זה ורק המנהל הראשי יוכל לערוך את שדה זה.',

	'INVALID_CHARS_FIELD_IDENT'	=> 'תוכן השדה יכול להכיל רק אותיות ו_',
	'INVALID_FIELD_IDENT_LEN'	=> 'השדה יכול להכיל רק 17 תווים.',
	'ISO_LANGUAGE'				=> 'שפה [%s]',

	'LANG_SPECIFIC_OPTIONS'		=> 'אפשרות שפה מסויימת [<strong>%s</strong>]',

	'MAX_FIELD_CHARS'		=> 'מספר תווים מקסימלי',
	'MAX_FIELD_NUMBER'		=> 'מספר המשתמשים הגבוהה ביותר',
	'MIN_FIELD_CHARS'		=> 'מספר תווים מינימלי',
	'MIN_FIELD_NUMBER'		=> 'מספר המשתמשים הנמוך ביותר',

	'NO_FIELD_ENTRIES'			=> 'אין כניסות מוגדרות',
	'NO_FIELD_ID'				=> 'אין שדה מזוהה מסויים.',
	'NO_FIELD_TYPE'				=> 'אין סוג שדה מסויים.',
	'NO_VALUE_OPTION'			=> 'האפשרות שווה למספר לא מוגדר',
	'NO_VALUE_OPTION_EXPLAIN'	=> 'בשביל ערך לא מוגדר. אם השדה דרוש, המשתמש יקבל שגיאה אם ייבחר את האפשרות שנבחרה כאן.',
	'NUMBERS_ONLY'				=> 'רק מספרים (0-9)',

	'PROFILE_BASIC_OPTIONS'		=> 'אפשרויות בסיסיות',
	'PROFILE_FIELD_ACTIVATED'	=> 'שדה פרופיל הופעל בהצלחה.',
	'PROFILE_FIELD_DEACTIVATED'	=> 'שדה פרופיל נוטרל בהצלחה.',
	'PROFILE_LANG_OPTIONS'		=> 'אפשרויות שפה מסויימות',
	'PROFILE_TYPE_OPTIONS'		=> 'אפשרויות מסויימות סוג הפרופיל',

	'RADIO_BUTTONS'				=> 'כפתורי רדיו',
	'REMOVED_PROFILE_FIELD'		=> 'הוסרו בהצלחה משדה הפרופיל.',
	'REQUIRED_FIELD'			=> 'שדה דרוש',
	'REQUIRED_FIELD_EXPLAIN'	=> 'הכרח שדה פרופיל זה להיות ממולא או מפורט על ידי המשתמש או המנהל הראשי. אם אפשרות ההצגה במסך ההרשמה מבוטלת, השדה ידרש להתמלא כאשר משתמש יערוך את הפרופיל שלו.',
	'ROWS'						=> 'שורות',

	'SAVE'							=> 'שמור',
	'SECOND_OPTION'					=> 'אפשרות שנייה',
	'STEP_1_EXPLAIN_CREATE'			=> 'אתה יכול להכניס כאן את הפרמטרים לאפשרות הבסיסית הראשונה לשדה הפרופיל החדש שלך. מידע זה נחוץ לשלב השני שבו אתה תתאפשר להגדיר אפשרויות שנשארו לשדה הפרופיל שלך הלאה.',
	'STEP_1_EXPLAIN_EDIT'			=> 'כאן אתה יכול לשנות את הפרמטרים הבסיסיים לשדה הפרופיל. האפשרויות החשובות יחושבו מחדש עם השלב השני.',
	'STEP_1_TITLE_CREATE'			=> 'הוסף שדה פרופיל',
	'STEP_1_TITLE_EDIT'				=> 'ערוך שדה פרופיל',
	'STEP_2_EXPLAIN_CREATE'			=> 'כאן אתה יכול להגדיר אפשרויות משותפות שאתה תרצה להתאים.',
	'STEP_2_EXPLAIN_EDIT'			=> 'כאן אתה יכול לשנות אפשרויות משותפות. בעתיד אתה תוכל לראות תצוגה מקדימה של השדה ששונה, כמו שהמשתמש ייראה את זה. תשחק קצת עם זה עד שתהיה מרוצה עם איך שהשדה נראה.<br /><strong> נא להעיר כי שינויים בשדות הפרופיל לא יושפעו על שדות פרופיל שהוכנסו על ידי משתמשיך.</strong>',
	'STEP_2_TITLE_CREATE'			=> 'אפשרויות מסויימות לסוג פרופיל',
	'STEP_2_TITLE_EDIT'				=> 'אפשרויות מסויימות לסוג פרופיל',
	'STEP_3_EXPLAIN_CREATE'			=> 'מכיוון שיש לך יותר משפה אחת מותקנת, אתה צריך להכניס גם פריטי שפה שנשארו. שדות הפרופיל יעבדו עם שפת ברירת מחדל מוגדרת, אתה תוכל להכניס פריטי שפה אחר כך גם.',
	'STEP_3_EXPLAIN_EDIT'			=> 'מכיוון שיש לך יותר משפה אחת מותקנת, אתה עכשיו יכול לשנות או להוסיף גם פריטי שפה שנשארו. שדות הפרופיל יעבדו עם שפת ברירת המחדל המוגדרת.',
	'STEP_3_TITLE_CREATE'			=> 'הגדרות שפה שנשארו',
	'STEP_3_TITLE_EDIT'				=> 'הגדרות שפה',
	'STRING_DEFAULT_VALUE_EXPLAIN'	=> 'הכנס ביטויי ברירת מחדל שיוצגו, ערכי בררת מחדל. השאר ריק אם אתה רוצה שזה יוצג ריק מלכתחילה.',

	'TEXT_DEFAULT_VALUE_EXPLAIN'	=> 'הכנס טקסט ברירית מחדל שיוצג, ערך ברירת מחדל. השאר ריק אם אתה רוצה שזה יוצג ריק מלכתחילה.',
	'TRANSLATE'						=> 'תרגם',

	'USER_FIELD_NAME'	=> 'שם/כותרת שדה שתוצג למשתמש',

	'VISIBILITY_OPTION'				=> 'אפשרויות תצוגה',
));

?>