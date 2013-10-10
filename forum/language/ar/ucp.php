<?php
/** 
*
* ucp.php [Arabic]
*
* @package language
* @version $Id: ucp.php,v 1.134 2007/08/21 15:09:52 acydburn Exp $
* @copyright (c) 2007 phpBB Group 
* @author 2007-06-20 - phpBBegypt.com
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
	'ACCOUNT_ACTIVE_PROFILE'		=> 'لقد تم تفعيل حسابك الآن بنجاح.',
	'ACCOUNT_EMAIL_CHANGED'			=> 'تم تحديث حسابك بنجاح، ولكن هذا المنتدى يتطلب إعادة تفعيل العضويات عند تغيير البريد الالكتروني، لقد تم ارسال مفتاح التنشيط إلى البريد الالكتروني الجديد الذي قمت بإدخاله. قم بمراجعة بريدك للمزيد من المعلومات.',
	'ACCOUNT_EMAIL_CHANGED_ADMIN'	=> 'تم تحديث حسابك بنجاح، ولكن هذا المنتدى يتطلب إعادة تفعيل العضويات بواسطة الإدارة عند تغيير البريد الالكتروني، لقد تم ارسال بريد إليهم لإخبارهم بذلك وسيتم ابلاغك عندما يقومو بإعادة تفعيل حسابك من جديد.',
	'AVATAR_FEATURES_DISABLED'		=> 'خاصية الصور الشخصية معطلة حالياً',
	'LOGOUT_FAILED'				=> 'لم يتم تسجيل خروجك بنجاح وذلك لإختلاف رقم الجلسة. إذا واجهتك المزيد من المشاكل فيرجى منك الاتصال بمدير المنتدى.',
	'NO_PASSWORD_SUPPLIED'		=> 'لا يمكنك تسجيل الدخول بدون كلمة سر.',
	'PASSWORD_ACTIVATED'		=> 'تم تفعيل كلمة السر الجديدة الخاصة بك',
	'PM_NO_USERS'				=> 'الأعضاء المحددون للإضافة غير موجودين.',
	'PM_USERS_REMOVED_NO_PM'	=> 'لا يمكن إضافة بعض هؤلاء الأعضاء لأنهم يرفضون استقبال الرسائل الخاصة.',
	'USERNAME_ASCII_EXPLAIN'	=> 'الاسم يجب ان يكون بين %1$d و %2$d حروف . ويمنع استخدام الرموز المجهوله',
	'USERNAME_LETTER_NUM_EXPLAIN'	=> 'الاسم يجب ان يكون بين %1$d و  %2$d حروف ، يمكنك فقط استخدام حروف وارقام',
	'USERNAME_LETTER_NUM_SPACERS_EXPLAIN'	=> 'الاسم يجب ان يكون بين  %1$d و  %2$d حروف او ارقام او رموز مثل -+_[] .',
	'TERMS_OF_USE_CONTENT'	=> 'اهلا وسهلا بك في الاتفاقيه العامه لمنتديات البي اتش بي بي . هذه الاتفاقيه لتحديد المسئوليات والعلاقه المنظمه بينك وبين اداره المنتدى من ناحيه وبين باقي الاعضاء من جهه اخرى . يجب ان يكون معلوما لديك ان مدير المنتدى والمشرفين ، غير مسئولين الا عن مشاركاتهم الخاصه فقط . وان كل عضو مسئول مسئوليه مباشره عن مشاركاته وموضوعاته وافكاره . رجاء ايضا ملاحظه انه ممنوع منعا تاما اضافه اي مشاركات تحتوى على الفاظ او عبارات تنطوى على معانى سوقيه او مهينه او خارجه عن الاداب العامه ، كما انه يمتنع عليك كعضو منتسب لهذا المنتدى ان تشارك بموضوعات او ردود من شأنها ان تثير الاحقاد او الفتن او الطائفيه . وان تلتزم بروح التسامح والاخوه في كل مشاركاتك . اداره المنتدى تتعهد لك بعدم افشاء اي معلومات خاصه بك الى اي طرف ثالث ، بما في ذلك بريدك الالكترونى الذى ستسجل به الان . ان كنت توافق على شروط الانضمام ، اضغط الان على زر الموافقه باسفل .
',
	'PRIVACY_POLICY'	=> 'اهلا وسهلا بك في الاتفاقيه العامه لمنتديات البي اتش بي بي . هذه الاتفاقيه لتحديد المسئوليات والعلاقه المنظمه بينك وبين اداره المنتدى من ناحيه وبين باقي الاعضاء من جهه اخرى . يجب ان يكون معلوما لديك ان مدير المنتدى والمشرفين ، غير مسئولين الا عن مشاركاتهم الخاصه فقط . وان كل عضو مسئول مسئوليه مباشره عن مشاركاته وموضوعاته وافكاره . رجاء ايضا ملاحظه انه ممنوع منعا تاما اضافه اي مشاركات تحتوى على الفاظ او عبارات تنطوى على معانى سوقيه او مهينه او خارجه عن الاداب العامه ، كما انه يمتنع عليك كعضو منتسب لهذا المنتدى ان تشارك بموضوعات او ردود من شأنها ان تثير الاحقاد او الفتن او الطائفيه . وان تلتزم بروح التسامح والاخوه في كل مشاركاتك . اداره المنتدى تتعهد لك بعدم افشاء اي معلومات خاصه بك الى اي طرف ثالث ، بما في ذلك بريدك الالكترونى الذى ستسجل به الان . ان كنت توافق على شروط الانضمام ، اضغط الان على زر الموافقه باسفل .
',
	'ACCOUNT_ACTIVE'	=> 'تم تفعيل حسابك. شكراً لتسجيلك معنا',
	'ACCOUNT_ACTIVE_ADMIN'	=> 'تم تفعيل الحساب',
	'ACCOUNT_ADDED'	=> 'شكراً لتسجيلك, تم تكوين حسابك. يمكنك الآن الدخول باستخدام اسم المستخدم وكلمة المرور',
	'ACCOUNT_COPPA'	=> 'تم تكوين حسابك لكنه يحتاج للموافقة. راجع بريدك لمزيد من التفاصيل.',
	'ACCOUNT_INACTIVE'	=> 'تم تكوين حسابك. هذا المنتدى يتطلب تفعيل الاشتراك عن طريق البريد. قم بمراجعة بريدك والقيام بالضغط على كود تفعيل الاشتراك.',
	'ACCOUNT_INACTIVE_ADMIN'	=> 'تم تكوين حسابك. هذا المنتدى يتطلب تفعيل الاشتراك عن طريق إدارة المنتدى وقد تم إرسال طلب التفعيل إليهم. عليك الانتظار حتى يتم تفعيل حسابك.',
	'ACTIVATION_EMAIL_SENT'	=> 'تم إرسال كود تفعيل الاشتراك إلى بريدك',
	'ADD'	=> 'أضف',
	'ADD_BCC'	=> 'أضف [BCC]',
	'ADD_FOES'	=> 'أضف عضو لقائمة التجاهل',
	'ADD_FOES_EXPLAIN'	=> 'عليك وضع كل اسم في سطر منفرد عند إدخال عدة أسماء',
	'ADD_FOLDER'	=> 'أضف مجلد',
	'ACTIVATION_EMAIL_SENT_ADMIN'	=> 'ارسال اشاره التفعيل',
	'ADD_FRIENDS'	=> 'أضف عضو لقائمة الأصدقاء',
	'ADD_FRIENDS_EXPLAIN'	=> 'عليك وضع كل اسم في سطر منفرد عند إدخال عدة أسماء',
	'ADD_NEW_RULE'	=> 'أضف شرط جديد',
	'ADD_RULE'	=> 'أضف شرط',
	'ADD_TO'	=> 'أضف [To]',
	'ADMIN_EMAIL'	=> 'استقبال بريد من إدارة المنتدى',
	'AGREE'	=> 'موافق على هذه الشروط',
	'ALLOW_PM'	=> 'السماح للأعضاء بإرسال رسائل خاصة إليك',
	'ALLOW_PM_EXPLAIN'	=> 'السماح باستقبال الرسائل من إدارة المنتدى والمشرفين.',
	'ALREADY_ACTIVATED'	=> 'اشتراكك مفعل مسبقاً',
	'ATTACHMENTS_EXPLAIN'	=> 'قائمة المرفقات الخاصة بك في هذا المنتدى.',
	'ATTACHMENTS_DELETED'	=> 'تم حذف المرفقات بنجاح.',
	'ATTACHMENT_DELETED'	=> 'تم حذف المرفق بنجاح.',
	'AVATAR_CATEGORY'	=> 'تصنيف',
	'AVATAR_EXPLAIN'	=> 'الحجم الأقصى; العرض %1$d بكسل, الطول %2$d بكسل, حجم الملف %3$d كيلوبايت.',
	'AVATAR_GALLERY'	=> 'المعرض المحلي',
	'AVATAR_GENERAL_UPLOAD_ERROR'	=> 'لم يتم رفع الصورة إلى %s',
	'AVATAR_PAGE'	=> 'صفحة',
	'BACK_TO_DRAFTS'	=> 'العودة إلى المسودات المحفوظة',
	'BACK_TO_LOGIN'	=> 'العودة إلى صفحة الدخول',
	'BIRTHDAY'	=> 'تاريخ الميلاد',
	'BIRTHDAY_EXPLAIN'	=> 'وضع السنة سوف يعرض عمرك بجوار اسم المستخدم عندما يأتي يوم ميلادك.',
	'BOARD_DATE_FORMAT'	=> 'نمط التاريخ',
	'BOARD_DATE_FORMAT_EXPLAIN'	=> 'الصيغة المستخدمة مطابقة لدالة <a href="http://www.php.net/date">date()</a> الخاصة بالـphp',
	'BOARD_DST'	=> 'الوقت الصيفي/<abbr title="Daylight Saving Time">DST</abbr> يتم العمل به',
	'BOARD_LANGUAGE'			=> 'اللغة',
	'BOARD_STYLE'				=> 'ستايل المنتدى',
	'BOARD_TIMEZONE'			=> 'خط الزمن',
	'BOOKMARKS'	=> 'المفضلة',
	'BOOKMARKS_EXPLAIN'	=> 'يمكنك إضافة المواضيع إلى المفضلة للعودة إليها مستقبلاً. قم باختيار أي موضوع تود حذفه من المفضلة, ثم اضغط على <em>حذف المواضيع المحددة</em>.',
	'BOOKMARKS_DISABLED'		=> 'تم تعطيل خاصية المفضلة في هذا المنتدى',
	'INVALID_USER_BIRTHDAY'		=> 'تاريخ ميلاد خاطيء للعضو',
	'BOOKMARKS_REMOVED'			=> 'تم حذف المواضيع من المفضلة بنجاح',
	'CANNOT_EDIT_MESSAGE_TIME'	=> 'لم يعد بإمكانك تعديل أو حذف هذه الرسالة.',
	'CANNOT_MOVE_TO_SAME_FOLDER'	=> 'لا يمكن نقل الرسائل إلى مجلد تريد حذفه.',
	'CANNOT_MOVE_FROM_SPECIAL'	=> 'الرسائل لا يمكن نقلها من صندوق الصادر.',
	'CANNOT_RENAME_FOLDER'	=> 'لا يمكن تغيير اسم هذا المجلد.',
	'CANNOT_REMOVE_FOLDER'	=> 'لا يمكن حذف هذا المجلد.',
	'CHANGE_DEFAULT_GROUP'	=> 'تغيير المجموعة الافتراضية',
	'CHANGE_PASSWORD'	=> 'تغيير كلمة المرور',
	'CLICK_RETURN_FOLDER'		=> '%1$sالرجوع إلى “%3$s” مجلد%2$s',
	'CONFIRMATION'	=> 'تأكيد الاشتراك',
	'CONFIRM_CHANGES'	=> 'تأكيد التغييرات',
	'CONFIRM_EMAIL'	=> 'تأكيد البريد الالكترونى',
	'CONFIRM_EMAIL_EXPLAIN'	=> 'تحتاجه فقط عند قيامك بتغيير بريدك الإلكتروني.',
	'CONFIRM_EXPLAIN'	=> 'حماية للمنتدى يجب عليك كتابة الرمز الأمني تماماً كما تراه ظاهراً في الصورة. في حالة عدم تمكنك من رؤية الرمز الأمني بوضوح أو لم يظهر لك قم بمراسلة %sإدارة المنتدى%s.',
	'CONFIRM_PASSWORD'	=> 'تأكيد كلمة المرور',
	'CONFIRM_PASSWORD_EXPLAIN'	=> 'تحتاج إلى تأكيد كلمة المرور في حالة تغييرها فقط',
	'COPPA_BIRTHDAY'	=> 'لإكمال عملية التسجيل عليك إخبارنا عن تاريخ ميلادك.',
	'COPPA_COMPLIANCE'	=> 'رخصة COPPA',
	'COPPA_EXPLAIN'	=> 'بضغطك على الموافقه سيتم مراسله ولى امرك لاخذ موافقته اولا على انضمامك للمنتدى.',
	'CREATE_FOLDER'	=> 'أضف مجلد…',
	'CURRENT_IMAGE'	=> 'الصورة الحالية',
	'CURRENT_PASSWORD'	=> 'كلمة المرور الحالية',
	'CURRENT_PASSWORD_EXPLAIN'	=> 'عليك كتابة كلمة المرور الحالية في حال الرغبة بتغييرها أو تغيير البريد أو اسم المستخدم.',
	'CUR_PASSWORD_ERROR'	=> 'كلمة المرور الحالية التي أدخلتها خاطئة.',
	'CUSTOM_DATEFORMAT'			=> 'مخصص...',
	'DEFAULT_ACTION'	=> 'عمل افتراضي',
	'DEFAULT_ACTION_EXPLAIN'	=> 'سيتم تحديد هذه الوظيفة في حالة عدم تحديد أي وظيفة في الأعلى',
	'DEFAULT_ADD_SIG'	=> 'قم بإرفاق التوقيع تلقائياً',
	'DEFAULT_BBCODE'	=> 'تشغيل BBCode تلقائياً',
	'DEFAULT_NOTIFY'	=> 'إشعاري بوجود ردود جديدة تلقائياً',
	'DEFAULT_SMILIES'	=> 'تشغيل الابتسامات تلقائياً',
	'DEFINED_RULES'	=> 'الشروط المعرفة',
	'DELETED_TOPIC'				=> 'تم حذف الموضوع',
	'DELETE_ATTACHMENT'	=> 'حذف الملف المرفق',
	'DELETE_ATTACHMENTS'	=> 'حذف الملفات المرفقة',
	'DELETE_ATTACHMENT_CONFIRM'	=> 'هل أنت متأكد من حذف هذا المرفق ؟',
	'DELETE_ATTACHMENTS_CONFIRM'	=> 'هل أنت متأكد من حذف هذه المرفقات ؟',
	'DELETE_AVATAR'	=> 'حذف الصورة',
	'DELETE_COOKIES_CONFIRM'	=> 'هل أنت متأكد من حذف الكوكيز لهذا المنتدى ؟',
	'DELETE_MARKED_PM'	=> 'حذف الرسائل المختارة',
	'DELETE_MARKED_PM_CONFIRM'	=> 'هل أنت متأكد من حذف جميع الرسائل المختارة ؟',
	'DELETE_OLDEST_MESSAGES'	=> 'حذف الرسائل القديمة',
	'DELETE_MESSAGE'			=> 'حذف الرسالة',
	'DELETE_MESSAGE_CONFIRM'	=> 'هل أنت متأكد من حذف هذه الرسالة الخاصة ؟',
	'DELETE_MESSAGES_IN_FOLDER'	=> 'حذف جميع الرسائل الموجودة داخل المجلد المحذوف',
	'DELETE_RULE'	=> 'حذف الشرط',
	'DELETE_RULE_CONFIRM'	=> 'هل أنت متأكد من حذف هذا الشرط ؟',
	'DEMOTE_SELECTED'	=> 'تنزيل المختار',
	'DISABLE_CENSORS'	=> 'تفعيل مراقبة الكلمات',
	'DISPLAY_GALLERY'	=> 'إظهار المعرض',
	'DOMAIN_NO_MX_RECORD_EMAIL'	=> 'البريد المدخل غير صحيح.',
	'DOWNLOADS'	=> 'تحميل',
	'DRAFTS_DELETED'	=> 'تم حذف جميع المسودات المختارة بنجاح.',
	'DRAFTS_EXPLAIN'	=> 'هنا يمكنك مشاهدة وتعديل وحذف مسوداتك المحفوظة.',
	'DRAFT_UPDATED'	=> 'تم تحديث المسودة بنجاح.',
	'EDIT_DRAFT_EXPLAIN'	=> 'هنا تستطيع تعديل مسوداتك. المسودات لا تحتوي على المرفقات أو التصويت.',
	'EMAIL_BANNED_EMAIL'	=> 'البريد الإلكتروني المدخل غير مسموح به.',
	'EMAIL_INVALID_EMAIL'	=> 'البريد الإلكتورني المدخل خاطئ.',
	'EMAIL_REMIND'	=> 'يجب عليك إدخال البريد الإلكتروني الذي قمت بالتسجيل به.',
	'EMAIL_TAKEN_EMAIL'	=> 'البريد الإلكتروني المدخل موجود حالياً',
	'EMPTY_DRAFT'	=> 'يجب عليك إدخال رسالة لإرسال تعديلاتك',
	'EMPTY_DRAFT_TITLE'	=> 'يجب عليك إدخال عنوان للمسودة',
	'EXPORT_AS_XML'	=> 'تصدير كـ XML',
	'EXPORT_AS_CSV'	=> 'تصدير كـ CSV',
	'EXPORT_AS_CSV_EXCEL'	=> 'تصدير كـ CSV (ملف إكسل)',
	'EXPORT_AS_TXT'	=> 'تصدير كـ TXT',
	'EXPORT_AS_MSG'	=> 'تصدير كـ MSG',
	'EXPORT_FOLDER'	=> 'تصدير مجلد',
	'FIELD_REQUIRED'	=> 'الحقل “%s” يجب عليك إكماله.',
	'FIELD_TOO_SHORT'	=> 'الحقل “%1$s” قصير جداً. أدنى حد مطالب به هو %2$d حرف.',
	'FIELD_TOO_LONG'	=> 'الحقل “%1$s” طويل جداً. أقصى حد مسموح به هو %2$d حرف.',
	'FIELD_TOO_SMALL'	=> 'القيمة المدخلة في “%1$s” صغيرة جداً. أدنى قيمة مطالب بها هي %2$d.',
	'FIELD_TOO_LARGE'	=> 'القيمة المدخلة في “%1$s” كبيرة جداً. أقصى قيمة مسموح بها هي %2$d.',
	'FIELD_INVALID_CHARS_NUMBERS_ONLY'	=> 'الحقل “%s” يحتوي قيمة خاطئة. الأرقام فقط مسموح بها.',
	'FIELD_INVALID_CHARS_ALPHA_ONLY'	=> 'الحقل “%s” يحتوي قيمة خاطئة. يسمح باستخدام الحروف فقط.',
	'FIELD_INVALID_CHARS_SPACERS_ONLY'	=> 'الحقل “%s” يحتوي قيمة خاطئة. يسمح باستخدام الحروف و المسافة والرموز -+_[] فقط.',
	'FIELD_INVALID_DATE'	=> 'الحقل “%s” يحتوي على تاريخ خاطئ.',
	'FOE_MESSAGE'	=> 'رسالة من عضو في قائمة التجاهل',
	'FOES_EXPLAIN'	=> 'المتجاهلون هم الأعضاء المحظورين تلقائياً. مشاركات هؤلاء الأعضاء لن تكون ظاهرة أمامك ولكن الرسائل الخاصة من قبلهم مصرح بها. انتبه أنه لا يمكنك حظر المدراء والمشرفين.',
	'FOES_UPDATED'	=> 'تم تحديث قائمة التجاهل بنجاح',
	'FOLDER_ADDED'	=> 'تمت إضافة المجلد بنجاح',
	'FOLDER_MESSAGE_STATUS'	=> '%1$d من %2$d رسائل محفوظة',
	'FOLDER_NAME_EXIST'	=> 'المجلد <strong>%s</strong> موجود مسبقاً',
	'FOLDER_OPTIONS'	=> 'خيارات المجلد',
	'FOLDER_RENAMED'	=> 'تم تغيير اسم المجلد بنجاح',
	'FOLDER_REMOVED'	=> 'تم حذف المجلد بنجاح',
	'FOLDER_STATUS_MSG'	=> 'المجلد %1$d%% ممتلئ (%2$d من %3$d رسائل محفوظة)',
	'FORWARD_PM'	=> 'إعادة إرسال',
	'FORCE_PASSWORD_EXPLAIN'	=> 'قبل إكمال عملية تصفح المنتدى عليك تغيير كلمة المرور',
	'FRIEND_MESSAGE'	=> 'رسالة من صديق',
	'FRIENDS'	=> 'الأصدقاء',
	'FRIENDS_EXPLAIN'	=> 'قائمة الأصدقاء تمكنك من الوصول السريع للأعضاء الذين تتواصل معهم بشكل متكرر، وربما يتم تحديد المشاركات الخاصة بهم إذا كان ستايل المنتدى يدعم ذلك',
	'FRIENDS_OFFLINE'	=> 'غير متصل',
	'FRIENDS_ONLINE'	=> 'متصل',
	'FRIENDS_UPDATED'	=> 'تم تحديث قائمة الأصدقاء بنجاح',
	'FULL_FOLDER_OPTION_CHANGED'	=> 'العميلة التي تحدث عند امتلاء المجلد تم نغييرها بنجاح',
	'FWD_ORIGINAL_MESSAGE'	=> '-------- الرسالة الاصلية --------',
	'FWD_SUBJECT'	=> 'العنوان: %s',
	'FWD_DATE'	=> 'التاريخ: %s',
	'FWD_FROM'	=> 'من: %s',
	'FWD_TO'	=> 'إلى: %s',
	'GLOBAL_ANNOUNCEMENT'	=> 'إعلان عام',
	'HIDE_ONLINE'	=> 'أخف حالتي في المنتدى',
	'HIDE_ONLINE_EXPLAIN'		=> 'تغيير هذا الإعداد إلى "لا" لن يكون فعالاً إلا عند زيارتك القادمة.',
	'HOLD_NEW_MESSAGES'	=> 'لا تستقبل رسائل جديدة (الرسائل الجديدة ستبقى معلقة إلى أن تتوفر مساحة كافية)',
	'HOLD_NEW_MESSAGES_SHORT'	=> 'تم إعادة الرسائل الجديدة بنجاح',
	'IF_FOLDER_FULL'	=> 'في حالة امتلاء المجلد',
	'IMPORTANT_NEWS'	=> 'إعلانات هامة',
	'INVALID_CHARS_USERNAME'	=> 'اسم المستخدم يحتوي قيم محظورة.',
	'INVALID_CHARS_NEW_PASSWORD'	=> 'كلمة المرور لا تحتوي على القيم المطلوبة.',
	'ITEMS_REQUIRED'	=> 'الحقول المعلمة بـ * مطلوبة',
	'JOIN_SELECTED'	=> 'الانضمام للمحددة',
	'LANGUAGE'	=> 'اللغة',
	'LINK_REMOTE_AVATAR'		=> 'الربط بصورة خارجية',
	'LINK_REMOTE_AVATAR_EXPLAIN'	=> 'أدخل الرابط الذي يحتوي على الصورة التي ترغب بوضعها.',
	'LINK_REMOTE_SIZE'	=> 'أبعاد الصورة الشخصية',
	'LINK_REMOTE_SIZE_EXPLAIN'	=> 'تحديد العرض والطول للصورة الشخصية. أو اتركه فارغاً ليقوم المنتدى بذلك تلقائياً.',
	'LOGIN_EXPLAIN_UCP'	=> 'من فضلك قم بتسجيل الدخول للوصول إلى لوحة التحكم',
	'LOGIN_REDIRECT'	=> 'تم تسجيل الدخول بنجاح.',
	'LOGOUT_REDIRECT'	=> 'تم تسجيل الخروج بنجاح.',
	'MARK_IMPORTANT'	=> 'تحديد كمهم',
	'MARKED_MESSAGE'	=> 'رسالة محددة',
	'MAX_FOLDER_REACHED'	=> 'العدد الأقصى للمجلدات المسموحة للعضو',
	'MESSAGE_BY_AUTHOR'	=> 'بواسطة',
	'MESSAGE_COLOURS'	=> 'ألوان الرسالة',
	'MESSAGE_DELETED'	=> 'تم حذف الرسالة بنجاح',
	'MESSAGE_HISTORY'	=> 'تاريخ الرسالة',
	'MESSAGE_REMOVED_FROM_OUTBOX'	=> 'لقد تم حذف هذه الرسالة بواسطة الشخص المرسل قبل أن يتم تسليمها',
	'MESSAGE_SENT_ON'	=> 'في',
	'MESSAGE_STORED'	=> 'تم إرسال الرسالة بنجاح',
	'MESSAGE_TO'	=> 'إلى',
	'MESSAGES_DELETED'	=> 'تم حذف الرسائل بنجاح',
	'MOVE_DELETED_MESSAGES_TO'	=> 'نقل الرسائل من المجلد المحذوف إلى',
	'MOVE_DOWN'	=> 'تحريك للأسفل',
	'MOVE_MARKED_TO_FOLDER'	=> 'نقل المحدد إلى %s',
	'MOVE_PM_ERROR'	=> 'حصل خطأ أثناء نقل الرسائل إلى المجلد الجديد، فقط %1d من أصل %2d رسائل تم نقلها',
	'MOVE_TO_FOLDER'	=> 'نقل إلى مجلد',
	'MOVE_UP'	=> 'تحريك للأعلى',
	'NEW_EMAIL_ERROR'	=> 'البريد الإلكتروني المدخل غير متطابق.',
	'NEW_FOLDER_NAME'	=> 'اسم مجلد جديد',
	'NEW_PASSWORD'	=> 'كلمة مرور جديدة',
	'NEW_PASSWORD_ERROR'	=> 'كلمة المرور التي أدخلتها غير متطابقة.',
	'NOTIFY_METHOD'	=> 'طريقة الإشعار',
	'NOTIFY_METHOD_BOTH'	=> 'الكل',
	'NOTIFY_METHOD_EMAIL'	=> 'البريد الإلكتروني فقط',
	'NOTIFY_METHOD_EXPLAIN'	=> 'طريقة إرسال الرسائل من هذا المنتدى.',
	'NOTIFY_METHOD_IM'	=> 'Jabber فقط',
	'NOTIFY_ON_PM'	=> 'إشعاري بوجود رسائل خاصة جديدة',
	'NOT_ADDED_FRIENDS_ANONYMOUS'	=> 'لا يمكنك إضافة زائر إلى قائمة الأصدقاء.',
	'NOT_ADDED_FRIENDS_FOES'	=> 'لا يمكنك إضافة الأعضاء الموجودين في قائمة التجاهل إلى قائمة الأصدقاء',
	'NOT_ADDED_FRIENDS_SELF'	=> 'لا يمكنك إضافة نفسك إلى قائمة الأصدقاء',
	'NOT_ADDED_FOES_MOD_ADMIN'	=> 'لا يمكنك إضافة المدراء والمشرفين إلى قائمة التجاهل.',
	'NOT_ADDED_FOES_ANONYMOUS'	=> 'لا يمكنك إضافة زائر إلى قائمة التجاهل.',
	'NOT_ADDED_FOES_FRIENDS'	=> 'لا يمكنك إضافة الأعضاء الموجودين في قائمة الأصدقاء إلى قائمة التجاهل.',
	'NOT_ADDED_FOES_SELF'	=> 'لا يمكنك إضافة نفسك إلى قائمة التجاهل.',
	'NOT_AGREE'	=> 'غير موافق على هذه الشروط',
	'NOT_ENOUGH_SPACE_FOLDER'	=> 'لم يتم تنفيذ المهمة المطلوبة لأن المجلد الهدف “%s” ممتلئ',
	'NOT_MOVED_MESSAGE'	=> 'لديك رسالة خاصة جديدة معلقة بسبب امتلاء صندوق رسائلك.',
	'NOT_MOVED_MESSAGES'	=> 'لديك %d رسالة/رسائل خاصة جديدة معلقة بسبب امتلاء صندوق رسائلك.',
	'NO_ACTION_MODE'	=> 'لم يتم تحديد قرار للرسائل',
	'NO_AUTHOR'	=> 'كاتب هذه الرسالة غير معروف',
	'NO_AVATAR_CATEGORY'	=> 'لا يوجد',
	'NO_AUTH_DELETE_MESSAGE'	=> 'ليست لديك الصلاحية لحذف الرسائل الخاصة.',
	'NO_AUTH_EDIT_MESSAGE'	=> 'ليست لديك الصلاحية لتعديل الرسائل الخاصة.',
	'NO_AUTH_FORWARD_MESSAGE'	=> 'ليست لديك الصلاحية لإعادة إرسال الرسائل الخاصة.',
	'NO_AUTH_GROUP_MESSAGE'	=> 'ليست لديك الصلاحية لإرسال الرسائل الخاصة إلى المجموعات.',
	 'NO_AUTH_PASSWORD_REMINDER'      => 'ليس لديك صلاحيات طلب كلمه مرور جديده',
     'NO_AUTH_READ_HOLD_MESSAGE'      => 'ليس لديك صلاحيات قراءه الرسائل المعلقه',
     'NO_AUTH_READ_MESSAGE'         => 'ليس لديك صلاحيات قراءه الرسائل الخاصه',
     'NO_AUTH_READ_REMOVED_MESSAGE'   => 'لايمكنك قراءه هذه الرساله . تم الغاؤها من قبل المرسل',
     'NO_AUTH_SEND_MESSAGE'         => 'ليس لديك الصلاحيات لارسال رسائل خاصه',
	'NO_AUTH_SIGNATURE'	=> 'ليست لديك الصلاحية لتعريف التوقيع',
	'NO_BCC_RECIPIENT'	=> 'لا يوجد',
	'NO_BOOKMARKS'	=> 'لا توجد مواضيع مفضلة',
	'NO_BOOKMARKS_SELECTED'	=> 'لم تقم باخيار مواضيع مفضلة',
	'NO_EDIT_READ_MESSAGE'		=> 'الرسالة الشخصية لا يمكن تعديلها لانها سبق وتم قراءتها.',
	'NO_EMAIL_USER'	=> 'لم يتم العثور على اسم المستخدم / البريد الذي تم إدخاله',
	'NO_FOES'	=> 'لا يوجد أي عضو في قائمة التجاهل',
	'NO_FRIENDS'	=> 'لا يوجد أي عضو في قائمة الأصدقاء',
	'NO_FRIENDS_OFFLINE'	=> 'لا يوجد صديق غير متصل',
	'NO_FRIENDS_ONLINE'	=> 'لا يوجد صديق متصل',
	'NO_GROUP_SELECTED'	=> 'لم يتم تحديد مجموعة',
	'NO_IMPORTANT_NEWS'	=> 'لا توجد إعلانات هامة',
	'NO_MESSAGE'	=> 'لم يتم العثور على رسالة خاصة',
	'NO_NEW_FOLDER_NAME'	=> 'لم تقم بتحديد اسم مجلد جديد',
	'NO_NEWER_PM'	=> 'لا رسائل جديدة',
	'NO_OLDER_PM'	=> 'لا رسائل قديمة',
	'NO_RECIPIENT'	=> 'لا مستقبل محدد',
	'NO_RULES_DEFINED'	=> 'لا شروط محددة',
	'NO_SAVED_DRAFTS'	=> 'لا مسودات محفوظة',
	'NO_TO_RECIPIENT'	=> 'لا يوجد',
	'NO_WATCHED_FORUMS'	=> 'أنت غير مشترك في أي منتدى.',
	'NO_WATCHED_TOPICS'	=> 'أنت غير مشترك في أي موضوع.',
	 'NO_WATCHED_SELECTED'      => 'لم تقم باختيار اي منتدى او موضوع للاشتراك به',
	'PASS_TYPE_ALPHA_EXPLAIN'	=> 'كلمة المرور يجب أن تكون بين  %1$d و %2$d حرفاً ويجب أن تحتوي على الحروف والأرقام',
	'PASS_TYPE_ANY_EXPLAIN'	=> 'عدد الحروف يجب أن يكون بين %1$d و %2$d',
	'PASS_TYPE_CASE_EXPLAIN'	=> 'كلمة المرور يجب أن تكون بين %1$d و %2$d حرفاً ويجب أن تكون مختلطة',
	'PASS_TYPE_SYMBOL_EXPLAIN'	=> 'كلمة المرور يجب أن تكون بين %1$d و %2$d حرفاً ويجب أن تحتوي على رموز',
	'PASSWORD'	=> 'كلمة السر',
	'PASSWORD_UPDATED'	=> 'تم إرسال كلمة المرور الجديدة إلى بريدك بنجاح',
	'PERMISSIONS_RESTORED'	=> 'تم استعادة الصلاحيات السابقة بنجاح.',
	'PERMISSIONS_TRANSFERRED'	=> 'لقد تم تحويل الصلاحيات من <strong>%s</strong> بنجاح، يمكنك الآن تصفح المنتدى بواسطة صلاحيات المستخدم.<br />يرجى العلم بأن صلاحياتك الإدارية لم تحول، ويمكنك استعادة صلاحياتك في أي وقت.',
	'PM_DISABLED'	=> 'الرسائل الخاصة تم تعطيلها في هذا المنتدى',
	'PM_FROM'	=> 'من',
	'PM_FROM_REMOVED_AUTHOR'	=> 'تم إرسال هذه الرسالة من عضو لم تعد عضويته موجودة.',
	'PM_ICON'	=> 'أيقونة الرسالة الخاصة',
	'PM_INBOX'	=> 'صندوق الوارد',
	'PM_OUTBOX'	=> 'صندوق الصادر',
	'PM_SENTBOX'	=> 'الرسائل المرسلة',
	'PM_SUBJECT'	=> 'موضوع الرسالة',
	'PM_TO'	=> 'مرسلة إلى',
	'POPUP_ON_PM'	=> 'إظهار نافذة تبلغني بوجود رسالة خاصة جديدة',
	'POST_EDIT_PM'	=> 'تعديل الرسالة',
	'POST_FORWARD_PM'	=> 'الرسالة التالية',
	'POST_NEW_PM'	=> 'إنشاء رسالة',
	'POST_PM_LOCKED'			=> 'الرسالة الخاصة مغلقة',
	'POST_PM_POST'	=> 'اقتباس الإرسال',
	'POST_QUOTE_PM'	=> 'اقتباس الرسالة',
	'POST_REPLY_PM'	=> 'الرد على الرسالة',
	'PRINT_PM'	=> 'نسخة للطباعة',
	'PREFERENCES_UPDATED'	=> 'تم حفظ التحديثاث بنجاح.',
	'PROFILE_INFO_NOTICE'	=> 'يرجى ملاحظة أن المعلومات سيتم مشاهدتها من الأعضاء الآخرين. كن حذراً عند إضافة أي معلومات شخصية. أي حقول تم تعليمها بـ * يجب إكمالها.',
	'PROFILE_UPDATED'	=> 'تم تعديل ملفك الشخصي',
	'RECIPIENT'	=> 'المستقبل',
	'RECIPIENTS'	=> 'المستقبلين',
	'REGISTRATION'	=> 'التسجيل',
	'RELEASE_MESSAGES'	=> '%sإطلاق جميع الرسائل المعلقة%s… سيقوم هذا الخيار بإعادة تصنيف الرسائل حسب المجلدات المناسبة لها في حالة وجود مساحة كافية.',
	'REMOVE_ADDRESS'	=> 'إلغاء العنوان',
	'REMOVE_SELECTED_BOOKMARKS'	=> 'حذف المواضيع المختارة',
	'REMOVE_SELECTED_BOOKMARKS_CONFIRM'	=> 'هل أنت متأكد من حذف جميع المواضيع المحددة ؟',
	'REMOVE_BOOKMARK_MARKED'	=> 'حذف المواضيع المحددة',
	'REMOVE_FOLDER'	=> 'حذف المجلد',
	'REMOVE_FOLDER_CONFIRM'	=> 'هل أنت متأكد من الغاء المجلد ؟',
	'RENAME'	=> 'إعادة تسمية',
	'RENAME_FOLDER'	=> 'إعادة تسمية المجلد',
	'REPLIED_MESSAGE'	=> 'الرد على الرسالة',
	'RESIGN_SELECTED'	=> 'إعادة تأشير المحدد',
	'RETURN_FOLDER'	=> '%1$sالرجوع إلى المجلد السابق%2$s',
	'RETURN_UCP'	=> '%sالعوده للملف الشخصي%s',
	'RULE_ADDED'	=> 'تم إضافة الشرط بنجاح',
	'RULE_ALREADY_DEFINED'	=> 'تم تعريف هذا الشرط سابقاً',
	'RULE_DELETED'	=> 'تم إزالة الشرط بنجاح',
	'RULE_NOT_DEFINED'	=> 'لم يتم تعريف الشرط بالصورة الصحيحة',
	'RULE_REMOVED_MESSAGE'				=> 'تم حذف رسالة خاصة واحدة بواسطة فلاتر الرسائل الخاصة',
	'RULE_REMOVED_MESSAGES'				=> '%d رسائل خاصة تم حذفها بواسة فلاتر الرسائل الخاصة',
	'SAME_PASSWORD_ERROR'	=> 'كلمة السر الجديدة التي أدخلتها هي نفس كلمة السر الحالية',
	'SEARCH_YOUR_POSTS'			=> 'استعرض مشاركاتك',
	'SEND_PASSWORD'	=> 'إرسال كلمة المرور',
	'SENT_AT'	=> 'ارسلت',
	'SHOW_EMAIL'	=> 'يمكن للأعضاء مراسلتي عبر البريد الإلكتروني',
	'SIGNATURE_EXPLAIN'	=> 'هذا النص يمكنك إضافته إلى المشاركات التي تكتبها، هناك %d حرف كحد أقصى',
	'SIGNATURE_PREVIEW'	=> 'توقيعك سيظهر في المشاركات بهذا الشكل',
	'SIGNATURE_TOO_LONG'	=> 'توقيعك طويل جداً',
	'SORT'	=> 'ترتيب',
	'SORT_COMMENT'	=> 'التعليق على الملف',
	'SORT_DOWNLOADS'	=> 'مرات التحميل',
	'SORT_EXTENSION'	=> 'الامتداد',
	'SORT_FILENAME'	=> 'اسم الملف',
	'SORT_POST_TIME'	=> 'وقت الإرسال',
	'SORT_SIZE'	=> 'حجم الملف',
	'TIMEZONE'	=> 'التوقيت',
	'TO'	=> 'إلى',
	'TOO_MANY_RECIPIENTS'	=> 'عدد كبير من المستقبلين',
	'TOO_MANY_REGISTERS'	=> 'لقد تجاوزت الحد الأقصى من محاولات التسجيل لهذه الجلسة، يرجى المحاولة مرة أخرى في وقت لاحق',
	'UCP'	=> 'لوحة التحكم',
	'UCP_ACTIVATE'	=> 'تفعيل الحساب',
	'UCP_ADMIN_ACTIVATE'	=> 'يرجى العلم بأنه عليك إدخال بريد إلكتروني صحيح ليتم تفعيل حسابك، سيقوم المدير بمراجعة حسابك وإذا تمت الموافقة عليه ستستقبل بريد إلكتروني على العنوان الذي اخترته.',
	'UCP_AIM'	=> 'ماسنجر AOL',
	'UCP_ATTACHMENTS'	=> 'المرفقات',
	'UCP_COPPA_BEFORE'	=> 'قبل %s',
	'UCP_COPPA_ON_AFTER'	=> 'في أو بعد %s',
	'UCP_EMAIL_ACTIVATE'	=> 'يرجى العلم بأنه عليك إدخال بريد إلكتروني صحيح ليتم تفعيل حسابك، ستستقبل رسالة على هذا البريد تحتوي على رابط تفعيل الاشتراك.',
	'UCP_ICQ'	=> 'رقم ICQ',
	'UCP_JABBER'	=> 'عنوان Jabber',
	'UCP_MAIN'	=> 'عام',
	'UCP_MAIN_ATTACHMENTS'	=> 'إدارة المرفقات',
	'UCP_MAIN_BOOKMARKS'	=> 'إدارة المفضلة',
	'UCP_MAIN_DRAFTS'	=> 'إدارة المسودات',
	'UCP_MAIN_FRONT'	=> 'الرئيسية',
	'UCP_MAIN_SUBSCRIBED'	=> 'إدارة الاشتراكات',
	'UCP_MSNM'	=> 'ماسنجر MSN',
	'UCP_NO_ATTACHMENTS'	=> 'ليس لديك أي ملفات مرفقة',
	'UCP_PREFS'	=> 'إعدادات المنتدى',
	'UCP_PREFS_PERSONAL'	=> 'تعديل الإعدادت العامة',
	'UCP_PREFS_POST'	=> 'تعديل النظام الافتراضي للمشاركة',
	'UCP_PREFS_VIEW'	=> 'تعديل خيارات العرض',
	'UCP_PM'	=> 'الرسائل الخاصة',
	'UCP_PM_COMPOSE'	=> 'أرسل رسالة',
	'UCP_PM_DRAFTS'	=> 'إدارة مسودات الرسائل الخاصة',
	'UCP_PM_OPTIONS'	=> 'الإعدادت والمجلدات والشروط',
	'UCP_PM_POPUP'	=> 'الرسائل الخاصة',
	'UCP_PM_POPUP_TITLE'	=> 'تنبيه الرسائل الخاصة',
	'UCP_PM_UNREAD'	=> 'رسائل غير مقروءة',
	'UCP_PM_VIEW'	=> 'مشاهدة الرسائل',
	'UCP_PROFILE'	=> 'الملف الشخصي',
	'UCP_PROFILE_AVATAR'	=> 'تعديل الصورة الشخصية',
	'UCP_PROFILE_PROFILE_INFO'	=> 'تعديل الملف الشخصي',
	'UCP_PROFILE_REG_DETAILS'	=> 'تغيير إعدادت الحساب',
	'UCP_PROFILE_SIGNATURE'	=> 'تعديل التوقيع',
	'UCP_USERGROUPS'	=> 'مجموعة الأعضاء',
	'UCP_USERGROUPS_MEMBER'	=> 'تعديل العضوية',
	'UCP_USERGROUPS_MANAGE'	=> 'إداره مجموعة الأعضاء',
	'UCP_REGISTER_DISABLE'	=> 'إنشاء حساب جديد غير متوفر حالياً',
	'UCP_REMIND'	=> 'إرسال كلمة المرور',
	'UCP_RESEND'	=> 'أرسل بريد التفعيل',
	'UCP_WELCOME'	=> 'أهلا بك في لوحة تحكم العضوية، من هنا يمكنك مراقبة وعرض وتعديل ملفك الشخصي وضبط الإعدادات بالإضافة إلى إدارة المواضيع والمنتديات المشترك بها، كما يمكنك إرسال الرسائل الخاصة إلى أعضاء آخرين (إذا كان مسموحاً). رجاءً تأكد من قراءتك لأي إعلان قبل الاستمرار.',
	'UCP_YIM'	=> 'ماسنجر Yahoo',
	'UCP_ZEBRA'	=> 'قائمة الأصدقاء &amp; التجاهل',
	'UCP_ZEBRA_FOES'	=> 'إدارة قائمة التجاهل',
	'UCP_ZEBRA_FRIENDS'	=> 'إدارة قائمة الأصدقاء',
	'UNKNOWN_FOLDER'	=> 'مجلد غير معروف',
	'UNWATCH_MARKED'	=> 'لا تراقب المحدد',
	'UPLOAD_AVATAR_FILE'	=> 'تحميل من جهازك الشخصي',
	'UPLOAD_AVATAR_URL'	=> 'تحميل من عنوان على الويب',
	'UPLOAD_AVATAR_URL_EXPLAIN'	=> 'أدخل العنوان الخاص بالصورة، سيتم نسخها إلى هذا الموقع',
	'USERNAME_ALPHA_ONLY_EXPLAIN'	=> 'اسم العضو يجب أن يكون من %1$d إلى %2$d حرف في الطول ويجب أي يحتوي على أحرف وأرقام فقط',
	'USERNAME_ALPHA_SPACERS_EXPLAIN'	=> 'اسم العضو يجب أن يكون من %1$d إلى %2$d حرف في الطول ويحتوي على أحرف وأرقام ومسافة والرموز التالية -+_[] فقط',
	'USERNAME_CHARS_ANY_EXPLAIN'	=> 'الطول يجب أن يكون بين %1$d و %2$d حرفاً.',
	'USERNAME_TAKEN_USERNAME'	=> 'اسم المستخدم الذي أدخلته موجود مسبقاً, الرجاء اختيار اسم آخر.',
	'USERNAME_DISALLOWED_USERNAME'	=> 'تم حظر اسم المستخدم الذي أدخلته.',
	'USER_NOT_FOUND_OR_INACTIVE'	=> 'أسماء الأعضاء التي حددتها قد تكون لأعضاء غير موجودين أو لأعضاء غير مفعلين',
	'VIEW_AVATARS'	=> 'عرض الصور الشخصية',
	'VIEW_EDIT'	=> 'عرض / تعديل',
	'VIEW_FLASH'	=> 'عرض مقاطع الفلاش',
	'VIEW_IMAGES'	=> 'عرض الصور داخل المشاركات',
	'VIEW_NEXT_HISTORY'	=> 'عرض الرسالة التالية في الأرشيف',
	'VIEW_NEXT_PM'	=> 'عرض الرسالة التالية',
	'VIEW_PM'	=> 'عرض الرسالة',
	'VIEW_PM_INFO'	=> 'معلومات الرسالة',
	'VIEW_PM_MESSAGE'	=> 'رسالة 1',
	'VIEW_PM_MESSAGES'	=> '%d رسائل',
	'VIEW_PREVIOUS_HISTORY'	=> 'الرسالة السابقة في الأرشيف',
	'VIEW_PREVIOUS_PM'	=> 'عرض الرسالة السابقة',
	'VIEW_SIGS'					=> 'عرض التواقيع',
	'VIEW_SMILIES'	=> 'عرض الابتسامات كصور',
	'VIEW_TOPICS_DAYS'	=> 'عرض المواضيع منذ الأيام السابقة',
	'VIEW_TOPICS_DIR'	=> 'طريقة ترتيب عرض المواضيع',
	'VIEW_TOPICS_KEY'	=> 'عرض المواضيع مرتبة حسب',
	'VIEW_POSTS_DAYS'	=> 'عرض المشاركات منذ الأيام السابقة',
	'VIEW_POSTS_DIR'	=> 'طريقة ترتيب عرض المشاركات',
	'VIEW_POSTS_KEY'	=> 'عرض المشاركات مرتبة حسب',
	'WATCHED_EXPLAIN'	=> 'بالأسفل قائمة بالمنتديات والمواضيع التي اشتركت بها، سيتم إبلاغك عند وضع مشاركات جديدة بها. لإلغاء الاشتراك قم بتحديد المنتدى أو الموضوع ومن ثم اضغط على الزر <em>ألغ اشتراك المحدد</em>',
	'WATCHED_FORUMS'	=> 'المنتديات المشاهدة',
	'WATCHED_TOPICS'	=> 'المواضيع المشاهدة',
	'WRONG_ACTIVATION'	=> 'مفتاح التفعيل الذي قمت بإدخاله غير صحيح',
	'YOUR_DETAILS'	=> 'نشاطاتك',
	'YOUR_FOES'	=> 'قائمة التجاهل الخاصة بك',
	'YOUR_FOES_EXPLAIN'	=> 'لإلغاء اسم العضو قم بالتحديد ثم إرسال',
	'YOUR_FRIENDS'	=> 'قائمة الأصدقاء الخاصة بك',
	'YOUR_FRIENDS_EXPLAIN'	=> 'لإلغاء اسم العضو قم بالتحديد ثم إرسال',
	'YOUR_WARNINGS'	=> 'مستوى التحذير',

	'PM_ACTION'	=> array(
		'PLACE_INTO_FOLDER'	=> 'ضعها في المجلد',
		'MARK_AS_READ'	=> 'تحديد كمقروء',
		'MARK_AS_IMPORTANT'	=> 'تحديد الرسالة',
		'DELETE_MESSAGE'	=> 'حذف الرسالة',
	),


	'PM_CHECK'	=> array(
		'SUBJECT'	=> 'العنوان',
		'SENDER'	=> 'المرسل',
		'MESSAGE'	=> 'الرسالة',
		'STATUS'	=> 'حالة الرسالة',
		'TO'	=> 'أرسلت إلى',
	),


	'PM_RULE' => array(
		'IS_LIKE'		=> 'مشابه لـ',
		'IS_NOT_LIKE'	=> 'مخالف لـ',
		'IS'			=> 'بالضبط مشابه لـ',
		'IS_NOT'		=> 'بالضبط مخالف لـ',
		'BEGINS_WITH'	=> 'يبدأ بـ',
		'ENDS_WITH'		=> 'ينتهى ب',
		'IS_FRIEND'		=> 'صديق',
		'IS_FOE'		=> 'خصم',
		'IS_USER'		=> 'العضو',
		'IS_GROUP'		=> 'في مجموعة أعضاء',
		'ANSWERED'		=> 'مجابة',
		'FORWARDED'		=> 'أعيد ارسالها',
		'TO_GROUP'		=> 'مجموعة الأعضاء الخاصة بي',
		'TO_ME'			=> 'إلي شخصياً'
	),

	'GROUPS_EXPLAIN'	=> 'مجموعات الأعضاء تساعد الإدارة على التحكم بالأعضاء بصورة أفضل. سيتم ضمك إلى مجموعة محددة بصورة تلقائية، تسمى مجموعتك الافتراضية، هذه المجموعة تحدد كيف يمكنك الظهور أمام الأعضاء الآخرين، على سبيل المثال اللون الخاص باسمك، صورتك الشخصية، الرتبة.. وغيرها. قد تكون لديك صلاحية لتغيير مجموعتك الافتراضية إذا ما سمحت الإدارة بذلك، كما يمكن أن يتم وضعك أو يسمح لك بالمشاركة بمجموعات أخرى. بعض المجموعات قد تعطيك المزيد من الصلاحيات في مواضع مختلفة.',
	'GROUP_LEADER'	=> 'ضمن فريق الإدارة للمجموعة',
	'GROUP_MEMBER'	=> 'عضو في المجموعة',
	'GROUP_PENDING'	=> 'مجموعات ينتظر الموافقة على انضمامك إليها',
	'GROUP_NONMEMBER'	=> 'مجموعات لست مشتركاً بها',
	'GROUP_DETAILS'	=> 'تفاصيل المجموعة',
	'NO_LEADER'	=> 'لست في إدارة أي مجموعة',
	'NO_MEMBER'	=> 'لم تنضم لأي مجموعة',
	'NO_PENDING'	=> 'لا يوجد مجموعات تنتظر الموافقة على انضمامك إليها',
	'NO_NONMEMBER'	=> 'لا يوجد مجموعات لست مشتركاً بها',
));

?>