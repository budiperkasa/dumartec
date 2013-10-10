<?php
/** 
*
* acp_profile.php [Arabic]
*
* @package language
* @version $Id: profile.php,v 1.23 2007/06/09 11:10:23 acydburn Exp $
* @copyright (c) 2007 phpBB Group 
* @author 2007-06-18 - phpBBegypt.com
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
	'ADDED_PROFILE_FIELD'	=> 'أضيفت الخيارات المعرفة بشكل صحيح.',
	'ALPHA_ONLY'	=> 'عدد فقط',
	'ALPHA_SPACERS'	=> 'عددي و فواصل',
	'ALWAYS_TODAY'	=> 'دائماً الوقت الحالي',
	'BOOL_ENTRIES_EXPLAIN'	=> 'أدخل خياراتك الآن',
	'BOOL_TYPE_EXPLAIN'	=> 'حدد ان كان اختيار بالتأشير ام زر عادى.',
	'CHANGED_PROFILE_FIELD'	=> 'تم تغير حقل الملف الشخصي بنجاح.',
	'CHARS_ANY'	=> 'أي شخص',
	'CHECKBOX'	=> 'صندوق اختيار',
	'COLUMNS'	=> 'الأعمدة',
	'CP_LANG_DEFAULT_VALUE'	=> 'القيمة الافتراضية',
	'CP_LANG_EXPLAIN'	=> 'حقل الوصف',
	'CP_LANG_EXPLAIN_EXPLAIN'	=> 'شرح هذا الحقل كما سيراه العضو',
	'CP_LANG_NAME'	=> 'عنوان الحقل المقدم للعضو',
	'CP_LANG_OPTIONS'	=> 'خيارات',
	'CREATE_NEW_FIELD'	=> 'إنشاء حقل جديد',
	'CUSTOM_FIELDS_NOT_TRANSLATED'	=> 'لم يتم ادخال ترجمه سليمه لاحد الحقول.',
	'DEFAULT_ISO_LANGUAGE'	=> 'اللغة الافتراضية [%s]',
	'DEFAULT_LANGUAGE_NOT_FILLED'	=> 'اختيار لغه خاطيء',
	'DEFAULT_VALUE'	=> 'حقل افتراضي',
	'DELETE_PROFILE_FIELD'	=> 'إزالة حقل الملف',
	'DELETE_PROFILE_FIELD_CONFIRM'	=> 'هل أنت متأكد من أنك تريد حذف حقل الملف ?',
	'DISPLAY_AT_PROFILE'	=> 'عرض في لوحة تحكم العضو',
	'DISPLAY_AT_PROFILE_EXPLAIN'	=> 'يمكن للعضو تغير حقول الملف الشخصي الخاصة به عبر الملف الشخصي',
	'DISPLAY_AT_REGISTER'	=> 'مشاهدة عرض التسجيل',
	'DISPLAY_AT_REGISTER_EXPLAIN'	=> 'اذا تم تفعيل هذا الخيار سيظهر تلقائيا اثناء تسجيل الاعضاء الجدد ويمكنهم تعديله لاحقا من لوحه التحكم',
	'DISPLAY_PROFILE_FIELD'	=> 'عرض حقل الملف',
	'DISPLAY_PROFILE_FIELD_EXPLAIN'	=> 'سيتم عرض الحقل في صفحه عرض الموضوعات وقائمه الاعضاء وصفحه البروفايل الخاصه بكل عضو.',
	'DROPDOWN_ENTRIES_EXPLAIN'	=> 'أدخل خياراتك الآن, كل الخيارات في سطر واحد.',
	'EDIT_DROPDOWN_LANG_EXPLAIN'	=> 'يمكنك لاحقا تغير احد هذه الاختيارات او تعديلها او الاضافه عليها ، ولكن يفضل الثبات عليها لعدم تشتيت الاعضاء',
	'EMPTY_FIELD_IDENT'	=> 'حقل التعريف فارغ',
	'EMPTY_USER_FIELD_NAME'	=> 'الرجاء إدخال عنوان الحقل',
	'ENTRIES'	=> 'مداخل',
	'EVERYTHING_OK'	=> 'الكل موافق',
	'FIELD_BOOL'	=> 'منطقي (نعم/لا)',
	'FIELD_DATE'	=> 'تاريخ',
	'FIELD_DESCRIPTION'	=> 'حقل الوصف',
	'FIELD_DESCRIPTION_EXPLAIN'	=> 'وصف الحقل كما سيراه العضو.',
	'FIELD_DROPDOWN'	=> 'اختيار من قائمه منسدله',
	'FIELD_IDENT'	=> 'حقل التعريف',
	'FIELD_IDENT_ALREADY_EXIST'	=> 'الاسم المختار للحقل موجود مسبقاً ، فضلاً قم باختيار اسم آخر',
	'FIELD_IDENT_EXPLAIN'	=> 'الاسم المخصص للحقل سيتم دمجه في قاعده البيانات ، يجب ان يكون بالانجليزيه',
	'FIELD_INT'	=> 'أرقام',
	'FIELD_LENGTH'	=> 'طول صندوق الإدخال',
	'FIELD_NOT_FOUND'	=> 'حقل الملف غير موجود.',
	'FIELD_STRING'	=> 'حقل نص فردي',
	'FIELD_TEXT'	=> 'صندوق النص',
	'FIELD_TYPE'	=> 'نوع الحقل',
	'FIELD_TYPE_EXPLAIN'	=> 'أنت لاتستطيع تغير هذه البيانات لاحقاً.',
	'FIELD_VALIDATION'	=> 'حقل التصديق',
	'FIRST_OPTION'	=> 'الخيارات اولاً',
	'HIDE_PROFILE_FIELD'	=> 'إخفاء حقل الملف',
	'HIDE_PROFILE_FIELD_EXPLAIN'	=> 'الإدارة والمشرفين فقط هم القادرين علي رؤية هذا الملف. إذا هذة الخيارات ممكنة, الملف سوف يكون مرئي للأعضاء والمستخدمين. الملفات.',
	'INVALID_CHARS_FIELD_IDENT'	=> 'يجب فقط ان يحتوى على حروف a-z and _',
	'INVALID_FIELD_IDENT_LEN'	=> 'لايمكن ان تزيد عن 17 حرف',
	'ISO_LANGUAGE'	=> 'اللغة [%s]',
	'LANG_SPECIFIC_OPTIONS'	=> 'خيارات اللغة المعينة [<strong>%s</strong>]',
	'MAX_FIELD_CHARS'	=> 'القيمة العليا لحقول الاشخاص',
	'MAX_FIELD_NUMBER'	=> 'اعلي قيمة للارقام المسمحة',
	'MIN_FIELD_CHARS'	=> 'القيمة الصغري لارقام الاشخاص',
	'MIN_FIELD_NUMBER'	=> 'اقل قيمة للارقام المسمحة',
	'NO_FIELD_ENTRIES'	=> 'لايوجد معرف المداخل',
	'NO_FIELD_ID'	=> 'لايوجد حقل id محدد.',
	'NO_FIELD_TYPE'	=> 'لايوجد نوع حقل معين.',
	'NO_VALUE_OPTION'	=> 'لم تحد قيمه للخيارات',
	'NO_VALUE_OPTION_EXPLAIN'	=> 'الاختيار الافتراضى ، اذا كان الحقل مطلوب ستظهر للعضو رساله خطأ لاجباره على تعبئه الحقل باحد الاختيارات',
	'NUMBERS_ONLY'	=> 'الارقام من (0-9)',
	'PROFILE_BASIC_OPTIONS'	=> 'خيارات اساسية',
	'PROFILE_FIELD_ACTIVATED'	=> 'حقل الملف نُشط بنجاح.',
	'PROFILE_FIELD_DEACTIVATED'	=> 'حقل الملف عطل بنجاح.',
	'PROFILE_LANG_OPTIONS'	=> 'خيارات اللغة المعينة',
	'PROFILE_TYPE_OPTIONS'	=> 'خيارات نوع الملف المعين',
	'RADIO_BUTTONS'	=> 'ازرار الراديو',
	'REMOVED_PROFILE_FIELD'	=> 'تم ازالة حق الملف بنجاح.',
	'REQUIRED_FIELD'	=> 'حقل مطلوب',
	'REQUIRED_FIELD_EXPLAIN'	=> 'الحقل المطلوب سيجبر العضو على تعبئته وسيظهر في لوحه التسجيل ولوحه تحكم العضو',
	'ROWS'	=> 'الصفوف',
	'SAVE'	=> 'حفظ',
	'SECOND_OPTION'	=> 'حقل ثانوي',
	'STEP_1_EXPLAIN_CREATE'	=> 'هنا يمكنك تحديد اول المعالم الاساسيه للحقل الجديد ، هذه الخطوه مهمه للخطوه التاليه.',
	'STEP_1_EXPLAIN_EDIT'	=> 'تغيير المعالم الاساسيه للحقل',
	'STEP_1_TITLE_CREATE'	=> 'اضف ملف جديد',
	'STEP_1_TITLE_EDIT'	=> 'تعديل حقل الملف',
	'STEP_2_EXPLAIN_CREATE'	=> 'اضافه بعض الملاحظات',
	'STEP_2_EXPLAIN_EDIT'			=> 'يمكنك من هنا تغيير بعض الخيارات.<br /><strong>اي تغيير سيتم هنا لن يطبق تلقائيا على اي حقل تمت تعبئته من قبل</strong>',
	'STEP_2_TITLE_CREATE'	=> 'خيارات نوع الملف المحدد',
	'STEP_2_TITLE_EDIT'	=> 'خيارات نوع الملف المحدد',
	'STEP_3_EXPLAIN_CREATE'	=> 'Since you have more than one board language installed, you have to fill out the remaining language items too. The profile field will work with the default language enabled, you are able to fill out the remaining language items later too.',
	'STEP_3_EXPLAIN_EDIT'	=> 'Since you have more than one board language installed, you now can change or add the remaining language items too. The profile field will work with the default language enabled.',
	'STEP_3_TITLE_CREATE'	=> 'تعاريف بقاء اللغة',
	'STEP_3_TITLE_EDIT'	=> 'تعاريف اللغة',
	'STRING_DEFAULT_VALUE_EXPLAIN'	=> 'ادخل الحقل الافتراضى او اتركه خالى.',
	'TEXT_DEFAULT_VALUE_EXPLAIN'	=> 'ادخل نص افتراضى او اتركه خالى.',
	'TRANSLATE'	=> 'تحويل',
	'USER_FIELD_NAME'	=> 'اسم الحقل المقدم الي المستخدم',
	'VISIBILITY_OPTION'	=> 'خيارات المشاهدة',
));

?>