<?php
/** 
*
* acp_board.php [Arabic]
*
* @package language
* @version $Id: board.php,v 1.86 2007/06/09 11:10:23 acydburn Exp $
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
	'ACP_BOARD_SETTINGS_EXPLAIN'	=> 'هنا تحدد العمليات الأساسية في منتداك ، أعط منتداك اسماً وشرحاً مناسباً ومن ضمن إعددات أخرى حدد الاختيار الافتراضي للتوقيت واللغة',
	'CUSTOM_DATEFORMAT'	=> 'خاص…',
	'DEFAULT_DATE_FORMAT'	=> 'تنسيق التاريخ',
	'DEFAULT_DATE_FORMAT_EXPLAIN'	=> 'تنسيق التاريخ مثل دالة PHP <code>date</code> ',
	'DEFAULT_LANGUAGE'	=> 'اللغة الافتراضية',
	'DEFAULT_STYLE'	=> 'التنسيق الافتراضي',
	'DISABLE_BOARD'	=> 'تعطيل المنتدى',
	'DISABLE_BOARD_EXPLAIN'	=> 'يغلق المنتدى ولن يكون متاحاً للمستخدمين ، يمكنك أيضاً وضع رسالة أقصى عدد حروفها 255 لتبين سبب تعطيل المنتدى',
	'OVERRIDE_STYLE'	=> 'تجاوز تنسيق المستخدم',
	'OVERRIDE_STYLE_EXPLAIN'	=> 'قم بتغير تنسيق المستخدم إلى التنسيق الافتراضي',
	'SITE_DESC'	=> 'وصف الموقع',
	'SITE_NAME'	=> 'اسم الموقع',
	'SYSTEM_DST'	=> 'أدخل التوقيت الصيفي/<abbr title="Daylight Saving Time">DST</abbr>',
	'SYSTEM_TIMEZONE'	=> 'منطقة توقيت النظام',
	'WARNINGS_EXPIRE'	=> 'مدة التحذير',
	'WARNINGS_EXPIRE_EXPLAIN'	=> 'عدد الأيام المنقضية التي تبعد التحذير من سجلات المستخدم',
	'ACP_BOARD_FEATURES_EXPLAIN'	=> 'من هنا يمكنك تعطيل تفعيل بعض خصائص المنتدى',
	'ALLOW_ATTACHMENTS'	=> 'اسمح بالمرفقات',
	'ALLOW_BIRTHDAYS'			=> 'السماح بعيد الميلاد',
	'ALLOW_BIRTHDAYS_EXPLAIN'	=> 'السماح بإدخال ايام الميلاد و عرض العمر في صفحة الملف الشخصي. يرجى ملاحضة ان قائمة عيد الميلاد في قائمة المنتديات تتم ادارتها بتحميل اعداد منفصل.',
	'ALLOW_BOOKMARKS'	=> 'اسمح بإضافة المواضيع إلى المفضلة',
	'ALLOW_BOOKMARKS_EXPLAIN'	=> 'السماح للمستخدم بوضع وصلات خارجية في المفضلة',
	'ALLOW_BBCODE'	=> 'السماح بـ BBCode',
	'ALLOW_FORUM_NOTIFY'	=> 'السماح بالإشتراك في المنتديات',
	'ALLOW_NAME_CHANGE'	=> 'السماح بتغير اسم المستخدم',
	'ALLOW_NO_CENSORS'	=> 'السماح بتعطيل مراقبة الكلمات',
	'ALLOW_NO_CENSORS_EXPLAIN'	=> 'المستخدم يمكنه أن يعطل خاصية مراقبة الكلمات البذيئة فتعرض له فقط',
	'ALLOW_PM_ATTACHMENTS'	=> 'السماح بالمرفقات في الرسائل الخاصة',
	'ALLOW_SIG'	=> 'السماح بالتواقيع',
	'ALLOW_SIG_BBCODE'	=> 'السماح بشفرة BBCode في التواقيع',
	'ALLOW_SIG_FLASH'	=> '<code>[FLASH]</code> السماح بكود الفلاش في التواقيع',
	'ALLOW_SIG_IMG'	=> '<code>[IMG]</code> السماح بكود الصور في التواقيع',
	'ALLOW_SIG_LINKS'	=> 'السماح بوضع وصلات في التواقيع',
	'ALLOW_SIG_LINKS_EXPLAIN'	=> ' <code>[URL]</code> إذا منع لن يُستطاع الضغط على الوصلة لكن يمكن نسخها ولصقها لشريط العناوين',
	'ALLOW_SIG_SMILIES'	=> 'السماح باستعمال الابتسامات في التواقيع',
	'ALLOW_SMILIES'	=> 'السماح بالابتسامات',
	'ALLOW_TOPIC_NOTIFY'	=> 'السماح بمتابعة المواضيع',
	'BOARD_PM'	=> 'الرسائل الخاصة',
	'BOARD_PM_EXPLAIN'	=> 'تعطيل أو تفعيل الرسائل الخاصة لكل المستخدمين',
	'ACP_AVATAR_SETTINGS_EXPLAIN'	=> 'الصور الرمزية في الغالب صغيرة يمكن للمستخدم أن يربطها بعضويته ، على حسب التنيسق المستخدم في الغالب تعرض الصور تحت اسم المستخدم عند عرض الموضوع ، هنا تستطيع تحديد هذه الصور الرمزية ، الرجاء الانتباه إلى أنك إذا أردت أن يرفع المستخدمون صور شخصية من جهازهم عليك أن تنشئ ملف مسمى بالأسفل وتأكد من إعطائه الترخيص الازم للسماح لخادم الشبكة بالكتابة فيه. أيضاً نحب أن نلفت انتباهك إلى أن تحديد حجم الصور الرمزية يكون على الصورة المحملة على سيرفر المنتدى ولا يكون على الصور ذات الوصلات الخارجية',
	'ALLOW_LOCAL'	=> 'تفعيل معرض الصور الشخصية',
	'ALLOW_REMOTE'	=> 'السماح بوصلات الصور الشخصية',
	'ALLOW_REMOTE_EXPLAIN'	=> 'صور شخصية مرفوعة على سيرفر خارج سيرفر المنتدى',
	'ALLOW_UPLOAD'	=> 'السماح برفع الصور الشخصية',
	'AVATAR_GALLERY_PATH'	=> 'مسار معرض الصور الشخصية',
	'AVATAR_GALLERY_PATH_EXPLAIN'	=> 'مسار تحت المنتدى الى معرض الصور الشخصية مثال <samp>images/avatars/gallery</samp>.',
	'AVATAR_STORAGE_PATH'	=> 'مسار تخزين الصور الشخصية',
	'AVATAR_STORAGE_PATH_EXPLAIN'	=> 'مسار تحت مجلد المنتدى مثال <samp>images/avatars/upload</samp>.',
	'MAX_AVATAR_SIZE'	=> 'أقصى الأبعاد للصور الشخصية',
	'MAX_AVATAR_SIZE_EXPLAIN'	=> 'الارتفاع × العرض بالبكسل.',
	'MAX_FILESIZE'	=> 'أقصى حجم لملف الصورة الشخصية',
	'MAX_FILESIZE_EXPLAIN'	=> 'للصور الشخصية التي سترفع على خادم المنتدى',
	'MIN_AVATAR_SIZE'	=> 'أدنى الأبعاد للصور الشخصية',
	'MIN_AVATAR_SIZE_EXPLAIN'	=> 'الارتفاع × العرض بالبكسل.',
	'ACP_MESSAGE_SETTINGS_EXPLAIN'	=> 'هنا يمكنك وضع الإعدادت الافتراضية للرسائل الخاصة',
	'ALLOW_BBCODE_PM'	=> 'السماح بـ BBCode في الرسائل الخاصة',
	'ALLOW_FLASH_PM'	=> 'السماح بكود الفلاش في الرسال الخاصة <code>[FLASH]</code>',
	'ALLOW_FLASH_PM_EXPLAIN'	=> 'يجب ايضا مراجعه صلاحيات المجموعات اذا اخترت تفعيل الفلاش من هنا',
	'ALLOW_FORWARD_PM'	=> 'السماح باعاده ارسال الرسائل الخاصه',
	'ALLOW_IMG_PM'	=> 'السماح بكود الصور في الرسائل الخاصة <code>[IMG]</code> ',
	'ALLOW_MASS_PM'	=> 'السماح بإرسال الرسائل الخاصة لأكثر من عضو أو مجموعة',
	 'ALLOW_MASS_PM_EXPLAIN'      => 'ارسال الرساله الى مجموعه محدده من الاعضاء',
	'ALLOW_PRINT_PM'	=> 'السماح بعرض الطباعة في الرسائل الخاصة',
	'ALLOW_QUOTE_PM'	=> 'السماح بالاقتباس في الرسائل الخاصة',
	'ALLOW_SIG_PM'	=> 'السماح بالتواقيع في الرسائل الخاصة',
	'ALLOW_SMILIES_PM'	=> 'السماح بالابتسامات في الرسائل الخاصة',
	'ENABLE_QUEUE_TRIGGER'         => 'تفعيل خاصيه طابور المشاركات',
    'ENABLE_QUEUE_TRIGGER_EXPLAIN'   => 'امكان نقل مشاركات الاعضاء المسجلين الى خانه المشاركات التى تحتاج الى موافقه اولا اذا كان عدد مشاركاتهم اقل من العدد المحدد اعلاه',
    'QUEUE_TRIGGER_POSTS'         => 'الحد الاقصى من المشاركات المطلوب لخاصيه طابور المشاركات',
    'QUEUE_TRIGGER_POSTS_EXPLAIN'   => 'لو قمت بتفعيل هذه الخاصيه اكتب هنا الحد الادنى من المشاركات التى يجب ان يصله اي عضو قبل ان لا يحتاج خاصيه التفعيل من المشرف',
	'BOXES_LIMIT'	=> 'أقصى حد من الرسائل في صندوق الرسائل الخاصة',
	'BOXES_LIMIT_EXPLAIN'	=> 'المستخدم لن يستطيع استقبال أي رسائل فوق العدد المحدد. ضع صفر 0 إذا أردت ألا يكون هناك عدد معين',
	'BOXES_MAX'	=> 'أقصى عدد لمجلدات الرسائل الخاصة',
	'BOXES_MAX_EXPLAIN'	=> 'الإعدادت الافتراضية تسمح للمستخدم بعمل مجلدات في الرسائل الخاصة لوضع الرسائل فيها',
	
	'ENABLE_PM_ICONS'	=> 'السماح باستخدام رموز المواضيع في الرسائل الخاصة',
	'FULL_FOLDER_ACTION'	=> 'الفعل الافتراضي للمجلدات الممتلئة',
	'FULL_FOLDER_ACTION_EXPLAIN'	=> 'الفعل الافتراضي إذا امتلأ مجلد المستخدم، إذا كانت خيارات فعل المستخدم غير مطبقة ، هذا إذا كان لديه فعل محدد . الاستثناء الوحيد في "الرسائل المبعوثة" حيث الخيار الافتراضي هو إلغاء الأقدم',
	'HOLD_NEW_MESSAGES'	=> 'أوقف الرسائل الجديدة',
	'PM_EDIT_TIME'	=> 'حصر وقت التعديل',
	'PM_EDIT_TIME_EXPLAIN'	=> 'تحديد الوقت للرسائل الخاصة التي لم تصل إلى الجهة المعنية. القيمة 0 صفر تعطل هذا التصرف',
	'ACP_POST_SETTINGS_EXPLAIN'	=> 'هنا يمكنك تحديد الافتراضيات للمشاركات',
	'ALLOW_POST_LINKS'	=> 'السماح بالوصلات في المشاركات والرسائل الخاصة',
	'ALLOW_POST_LINKS_EXPLAIN'	=> 'إذا منع سيتم تعطيل كود <code>[URL]</code> ولن يتمكن من الضغط المباشر على الوصلة',
	'ALLOW_POST_FLASH'					=> 'السماح بعرض كود <code>[FLASH]</code> في المشاركات. ',
	'ALLOW_POST_FLASH_EXPLAIN'			=> 'اذا تم تعطيل كود <code>[FLASH]</code> لمشاركات الاعضاء. سيمكنك السماح لمجموعات محدده فقط باستخدام هذا الكود لاحقا من صلاحيات المجموعات',
	'BUMP_INTERVAL'	=> 'فترة الرفع',
	'BUMP_INTERVAL_EXPLAIN'	=> 'عدد الدقائق ، الساعات، الأيام بين آخر مشاركة في الموضوع وبين إمكانية رفعه إلى أعلى قائمة المواضيع',
	'CHAR_LIMIT'	=> 'أقصى عدد للحروف في المشاركة',
	'CHAR_LIMIT_EXPLAIN'	=> 'أقصى عدد للحروف في المشاركة. ضع القيمة صفر 0 لجعل الحد الاقصى لا نهائي',
	'DISPLAY_LAST_EDITED'	=> 'عرض معلومات وقت آخر تعديل',
	'DISPLAY_LAST_EDITED_EXPLAIN'	=> 'اختر إذا أردت عرض " آخر مشاركة من قبل" في صفحة المواضيع',
	'EDIT_TIME'	=> 'تحديد وقت التعديل',
	'EDIT_TIME_EXPLAIN'	=> 'يحدد الوقت المسموح به لتعديل المشاركات. القيمة صفر تعطل هذه الخاصية',
	'FLOOD_INTERVAL'	=> 'فترة الإغراق',
	'FLOOD_INTERVAL_EXPLAIN'	=> 'عدد الثواني التي يجب انتظارها بين المشاركة والمشاركة الجديدة. للسماح للمستخدمين لتجاهل هذه الخاصية عدل صلاحياتهم',
	'HOT_THRESHOLD'	=> 'بوابة المواضيع النشيطة',
	'HOT_THRESHOLD_EXPLAIN'	=> 'عدد المشاركات في الموضوع التي تؤهله لدخول بوابة المواضيع النشيطة',
	'MAX_POLL_OPTIONS'	=> 'أقصى عدد لخيارات التصويت',
	'MAX_POST_FONT_SIZE'	=> 'أقصى حجم لخط المشاركة',
	'MAX_POST_FONT_SIZE_EXPLAIN'	=> 'الحجم الأقصى للخطوط في المشاركة. عدل القيمة لصفر لجعل حجم الخط بدون حد',
	'MAX_POST_IMG_HEIGHT'	=> 'أقصى ارتفاع للصور بالمشاركة',
	'MAX_POST_IMG_HEIGHT_EXPLAIN'	=> 'الحد الأقصى لارتفاع الصورة / الفلاش في المشاركة. القيمة 0 تعنى أنه لا يوجد حد',
	'MAX_POST_IMG_WIDTH'	=> 'أقصى حد لعرض الصورة',
	'MAX_POST_IMG_WIDTH_EXPLAIN'	=> 'الحد الأقصى لعرض الصورة / الفلاش في المشاركة. القيمة 0 تعنى أنه لا يوجد حد',
	'MAX_POST_URLS'	=> 'أقصى حد للوصلات',
	'MAX_POST_URLS_EXPLAIN'	=> 'أقصى حد للوصلات. ضع القيمة صفر لجعل الحد لا نهائي',
	'POSTING'	=> 'مشاركة',
	'POSTS_PER_PAGE'	=> 'المشاركات بالصفحة',
	'QUOTE_DEPTH_LIMIT'	=> 'أقصى عدد للاقتباسات في المشاركة',
	'QUOTE_DEPTH_LIMIT_EXPLAIN'	=> 'يمكن للمستخدم اقتباس تشعبي حدد عدد تشعب الاقتباس الواحد. ضع القيمة صفر لجعل الاقتباس لا نهائي',
	'SMILIES_LIMIT'	=> 'أقصى عدد للابتسامات في المشاركة',
	'SMILIES_LIMIT_EXPLAIN'	=> 'الحد الأقصى للابتسامات في المشاركة. ضع 0 لجعل الحد الاقصى لا نهائي',
	'TOPICS_PER_PAGE'	=> 'المواضيع بالصفحة',
	'ACP_SIGNATURE_SETTINGS_EXPLAIN'	=> 'هنا يمكنك تحديد الإعدادت الافتراضية لتواقيع الأعضاء',
	'MAX_SIG_FONT_SIZE'	=> 'أكبر حجم للحروف',
	'MAX_SIG_FONT_SIZE_EXPLAIN'	=> 'لحد أكبر حجم للخطوط في التوقيع. ضع القيمة صفر 0 لجعل الحد لا نهائي',
	'MAX_SIG_IMG_HEIGHT'	=> 'الطول الأقصى للصور',
	'MAX_SIG_IMG_HEIGHT_EXPLAIN'	=> 'أقصى طول للصور أو الفلاشات التي يدرجها المستخدم في توقيعه ضع القيمة صفر 0 لجعل الحد لا نهائي',
	'MAX_SIG_IMG_WIDTH'	=> 'العرض الأقصى للصورة',
	'MAX_SIG_IMG_WIDTH_EXPLAIN'	=> 'أقصى عرض للصور أو الفلاشات التي يدرجها المستخدم في توقيعه ضع القيمة صفر 0 لجعل الحد لا نهائي',
	'MAX_SIG_LENGTH'	=> 'أقصى طول للتوقيع',
	'MAX_SIG_LENGTH_EXPLAIN'	=> 'الحد الأقصى للحروف المستخدمة بالتوقيع',
	'MAX_SIG_SMILIES'	=> 'أقصى حد للابتسامات',
	'MAX_SIG_SMILIES_EXPLAIN'	=> 'الحد الأقصى للابتسامات في مشاركة الأعضاء',
	'MAX_SIG_URLS'	=> 'أقصى حد للوصلات',
	'MAX_SIG_URLS_EXPLAIN'	=> 'أقصى حد للوصلات التي يمكن للمستخدم إضافتها في التوقيع. القيمة صفر 0 تعنى لا نهائي',
	'ACP_REGISTER_SETTINGS_EXPLAIN'	=> 'هنا يمكنك تعريف إعدادات و متعلقات التسجيل والملف الشخصي',
	'ACC_ACTIVATION'	=> 'تفعيل الحساب',
	'ACC_ACTIVATION_EXPLAIN'	=> 'هنا تحدد إذا كان المشاركة يستطيع أن يشارك بالمنتدى فور التسجيل أو يتطلب من المدير الموافقة على تسجيله قبل مشاركته أو أن تبعث رسالة إلى بريد المشترك مع وصلة تفعيل للتأكد من صحة البريد أو تعطيل التسجيل كلياً',
	'ACC_ADMIN'	=> 'بواسطة مدير',
	'ACC_DISABLE'	=> 'تعطيل التسجيل',
	'ACC_NONE'	=> 'المشاركة الفورية',
	'ACC_USER'	=> 'بواسطة العضو',
	'ALLOW_EMAIL_REUSE'	=> 'السماح باستخدام البريد أكثر من مرة',
	'ALLOW_EMAIL_REUSE_EXPLAIN'	=> 'أكثر من مستخدم يمكنهم استخدام بريد واحد',
	'COPPA'	=> 'القاصرين (COPPA)',
	'COPPA_FAX'	=> 'رقم فاكس القاصرين',
	'COPPA_MAIL'	=> 'عنوان بريد القاصرين',
	'COPPA_MAIL_EXPLAIN'	=> 'هذا هو العنوان الذي سيبعث ولي أمر القاصر (أقل من 13 سنة) رسالة الموافقة لمشاركة القاصر بالمنتدى',
	'ENABLE_COPPA'	=> 'تفعيل نظام القاصر',
	'ENABLE_COPPA_EXPLAIN'	=> 'تفعيل نظام القاصر يطلب من المستخدم التعريف بأن عمره أكبر من 13 سنة إذا كان عمر المستخدم أقل من 13 سنة يتطلب حسب القانون الأمريكي للقاصرين أن يوافق ولي الأمر على مشاركة القاصر. عند تعطيل هذه الخاصية لن يطلب من المستخدم التعريف بعمره وسيتم تجاوز هذه المرحلة بالتسجيل',
	'MAX_CHARS'	=> 'أقصى',
	'MIN_CHARS'	=> 'أقل',
	'NO_AUTH_PLUGIN'	=> 'لم يتم العثور على إضافات مناسبة',
	'PASSWORD_LENGTH'	=> 'طول كلمة السر',
	'PASSWORD_LENGTH_EXPLAIN'	=> 'أقصى وأدنى عدد للحروف في كلمة السر',
	'REG_LIMIT'	=> 'عدد محاولات تسجيل الدخول',
	'REG_LIMIT_EXPLAIN'	=> 'المحاولات التي يقدم عليها المستخدم لتسجيل الدخول بعد مشاهدة الصورة الرمزية',
	'USERNAME_ALPHA_ONLY'	=> 'أرقام وحروف فقط',
	'USERNAME_ALPHA_SPACERS'	=> 'أرقام وحروف ومسافة',
	'USERNAME_ASCII'	=> 'ASCII (بدون ترميزات دولية)',
	'USERNAME_LETTER_NUM'	=> 'أي حروف أو أرقام',
	'USERNAME_LETTER_NUM_SPACERS'	=> 'أي حروف أو أرقام أو مساحات',
	'USERNAME_CHARS'	=> 'تحديد عدد حروف اسم المستخدم',
	'USERNAME_CHARS_ANY'	=> 'بدون تحديد',
	'USERNAME_CHARS_EXPLAIN'	=> 'حدد الحروف الممنوعة من الاستخدام اكتب space لمنع المسافة أو الأحرف التالية أو أي أحرف تريد المسافات هي: space, -, +, _, [،]',
	'USERNAME_LENGTH'	=> 'طول اسم المستخدم',
	'USERNAME_LENGTH_EXPLAIN'	=> 'الحد الأقصى والأدنى للحروف المستخدمة في اسم المستخدم',
	'ACP_VC_SETTINGS_EXPLAIN'	=> 'عند تسجيل المستخدم يقوم نظام الكابتشا بعرض صورة فيها نصوص يصعب على الحاسب قراءتها ولكن يسهل للبشر أن يقرؤوها . هذه العملية مقدمة للتأكد من أن المسجل هو إنسان وليس برنامج إزعاج يقوم بعمليات تسجيل كثيرة',
	'CAPTCHA_GD'	=> 'GD CAPTCHA',
	'CAPTCHA_GD_FOREGROUND_NOISE'	=> 'GD CAPTCHA درجة الإزعاج الأمامية',
	'CAPTCHA_GD_EXPLAIN'	=> 'استعمل (CAPTCHA) لتحسين نظام (GD) للتاكد',
	'CAPTCHA_GD_FOREGROUND_NOISE_EXPLAIN'	=> 'الإزعاج الأمامي يصعب عملية القراءة على برامج التسجيل المزعجة',
	'CAPTCHA_GD_X_GRID'	=> 'الإزعاج في خط العرض لنظام GD CAPTCHA',
	'CAPTCHA_GD_X_GRID_EXPLAIN'	=> 'استعمل قيمة أقل لتصعيب العملية. القيمة صفر تعطل عملية الإزعاج في خط العرض',
	'CAPTCHA_GD_Y_GRID'	=> 'الإزعاج في خط الطول GD CAPTCHA',
	'CAPTCHA_GD_Y_GRID_EXPLAIN'	=> 'استعمل قيمة أقل لتصعيب العملية. القيمة صفر تعطل عملية الإزعاج في خط الطول',
	'CAPTCHA_PREVIEW_MSG'	=> 'لم يتم حفظ إعدادتك، هذه فقط معاينة ، بعد الحصول على حالة مقبولة تأكد من حفظ الإعدادات',
	'CAPTCHA_PREVIEW_EXPLAIN'	=> 'CAPTCHA كما ستظهر باستعمال هذه الإعدادت الحالية اضغط على زر المعاينة لتحديث الصورة. انتبه إلى أن الصورة تتغير عند كل معاينة',
	'VISUAL_CONFIRM_POST'	=> 'تفعيل خاصية CAPTCHA لمشاركات الزوار',
	'VISUAL_CONFIRM_POST_EXPLAIN'	=> 'إذا سمحت للأعضاء الغير مسجلين (الزوار) بالمشاركة سيتطلب منهم كتابة رمز أمني عند تقديم مشاركة',
	'VISUAL_CONFIRM_REG'	=> 'تقعيل خاصية CAPTCHA في التسجيل',
	'VISUAL_CONFIRM_REG_EXPLAIN'	=> 'يطلب من المسجلين الجدد كتابة الرمز الأمني من CAPTCHA لتجنب التسجيل الآلي المتكرر',
	'ACP_COOKIE_SETTINGS_EXPLAIN'	=> 'التفاصيل هنا تعرف المعلومات التي تستعمل لإرسال الكوكيز إلى متصفح المستخدم. في معظم الأوقات الإعدادت الحالية تفي بالغرض. لكن إذا أردت أن تقوم بتعديلات اعملها بحذر. الإعدادت الخاطئة قد تمنع المستخدمين من تسجيل الدخول',
	'COOKIE_DOMAIN'	=> 'دومين الكوكيز',
	'COOKIE_NAME'	=> 'اسم الكوكيز',
	'COOKIE_PATH'	=> 'مسار الكوكيز',
	'COOKIE_SECURE'	=> 'كوكيز آمنة',
	'COOKIE_SECURE_EXPLAIN'	=> 'إذا كان خادم الموقع لديك يعمل في الوضع الآمن حول هذا الخيار إلى فعال وإلا عطل هذا الخيار. إذا قمت بتفعيل هذا الخيار بدون وجود الوضع الآمن ssl سيسبب لك مشاكل عند التحويلات',
	'ONLINE_LENGTH'	=> 'عرض فترة البقاء في الخط',
	'ONLINE_LENGTH_EXPLAIN'	=> 'عدد الدقائق التي تمسح الأعضاء من قائمة "من على الخط" بعد انعدام فعاليته بالمنتدى.  إذا كان الرقم أكبر سيكثر عدد المتواجدين في قائمة المنتدى',
	'SESSION_LENGTH'	=> 'طول الجلسة',
	'SESSION_LENGTH_EXPLAIN'	=> 'بعد أن يسجل المستخدم تسجيل الدخول وتبدأ الجلسة ستنتهي الجلسة بعد هذا الوقت المحدد',
	'ACP_LOAD_SETTINGS_EXPLAIN'	=> 'هنا تستطيع تعطيل أو تفعيل بعض أعمال المنتدى لتقليل الحمل على قاعدة البيانات. في أكثر خوادم المواقع لا تحتاج إلى تعطيل أي خاصية. لكن في الاستضافة المشتركة أو خوادم الشبكة الضعيفة قد يؤدي تعطيل بعض الخصائص إلى تخفيف الحمل على المنتدى. تستطيع أيضا تحديد قدرة الحمل على المنتدى وجلسات الاتصال الفعالة بحيث يتم تعطيل المنتدى عند وصول الحمل إلى مستوى معين',
	'CUSTOM_PROFILE_FIELDS'	=> 'حقل الملف الشخصي المخصص',
	'LIMIT_LOAD'	=> 'تحديد حمل النظام',
	'LIMIT_LOAD_EXPLAIN'	=> 'اذا كان حمل النظام في معدل الدقيقة الواحدة تجاوز هذه القيمة سيتم تلقائياً تعطيل المنتدى. القيمة 1.0 تساوي تقريبا مائة بالمئة من استعمال معالج جهاز الحاسب المستضيف. هذا فقط يعمل على أنظمة تعمل على Linux وحالة الحصول على هذه المعلومات ممكنة. يتم إعادة القيمة إلى صفر إذا لم يتمكن المنتدى حجم الحمل',
	'LIMIT_SESSIONS'	=> 'تحديد الجلسات',
	'LIMIT_SESSIONS_EXPLAIN'	=> 'إذا تجاوزت عدد الجلسات في خلال دقيقة واحدة سيتم إيقاف المنتدى تلقائياً. ضع القيمة 0 لتعطيل هذه الخاصية',
	'LOAD_CPF_MEMBERLIST'	=> 'اسمح للتنسيقات بعرض الحقول الإضافية في قائمة الأعضاء',
	'LOAD_CPF_VIEWPROFILE'	=> 'اعرض الحقول الأضافية في ملف المستخدم',
	'LOAD_CPF_VIEWTOPIC'	=> 'عرض الحقول الأضافية في صفحة المواضيع',
	'LOAD_USER_ACTIVITY'	=> 'عرض تحركات المستخدم',
	'LOAD_USER_ACTIVITY_EXPLAIN'	=> 'عرض تحركات المستخدم في المشاركات وأقسام المنتديات. يفضل تعطيل هذه الخاصية إذا تجاوز عدد المواضيع المليون موضوع',
	'RECOMPILE_STYLES'	=> 'إعادة تكوين مواد التنسيقات المصغرة',
	'RECOMPILE_STYLES_EXPLAIN'	=> 'افحص التحديثات في التنسيقات وقم بإعادة التكوين',
	'YES_ANON_READ_MARKING'	=> 'تفعيل تعليم المواضيع للزوار',
	'YES_ANON_READ_MARKING_EXPLAIN'	=> 'تخزن معلومات حالة الزوار القراءة / عدم القراءة. إذا تم تعطليها حالة الزوار دوماً ستكون بالقراءة',
	'YES_BIRTHDAYS'	=> 'تفعيل يوم ميلاد الأعضاء',
	'YES_BIRTHDAYS_EXPLAIN'			=> 'إذا قمت بتعطيل هذا الخيار فسيتوقف عرض لائحة عيد الميلاد. ليعمل هذا الخيار جيداً يجب ان تكون خاصية عيد الميلاد مفعلة ايضاً.',
	'YES_JUMPBOX'	=> 'تفعيل عرض صندوق التنقل السريع',
	'YES_MODERATORS'	=> 'تفعيل عرض المشرفين',
	'YES_ONLINE'	=> 'تفعيل خاصية من على الخط',
	'YES_ONLINE_EXPLAIN'	=> 'عرض معلومات تواجد الأعضاء على صفحة البداية والمنتديات وقائمة المواضيع',
	'YES_ONLINE_GUESTS'	=> 'عرض معلومات اتصال الزوار',
	'YES_ONLINE_GUESTS_EXPLAIN'	=> 'عرض معلومات الزوار في صفحة من على الخط',
	'YES_ONLINE_TRACK'	=> 'تفعيل خاصية إذا ما كان العضو متصل أم لا',
	'YES_ONLINE_TRACK_EXPLAIN'	=> 'عرض معلومات الاتصال للمستخدم في الصفحة الشخصية وفي صفحة المواضيع',
	'YES_POST_MARKING'	=> 'تفعيل المواضيع المعلمة',
	'YES_POST_MARKING_EXPLAIN'	=> 'تبيين هل شارك العضو بالموضوع',
	'YES_READ_MARKING'	=> 'تفعيل تعليم المواضيع في السيرفر',
	'YES_READ_MARKING_EXPLAIN'	=> 'تخزين قراءة وإزالة معلومات الحالة في قاعدة البيانات المنتدى بدل وضعها في كوكيز في متصفح المستخدم',
	'ACP_AUTH_SETTINGS_EXPLAIN'	=> 'منتديات phpBB تدعم إضافات وفروع التوثيق. هذه تسمح لك بتحديد طريقة توثيق المستخدمين عند تسجيل دخولهم للمنتدى. افتراضيا هناك ثلاثة إضافات متوفرة. والتي هيDB و LDAP و Apache. ليست كل طرق التوثيق تتطلب منك معلومات إضافية فقط قم بتعبئة الحقول إذا كانت ذات صلة بالطريقة المتبعة',
	'AUTH_METHOD'	=> 'اختر طريقة التوثيق',
	'APACHE_SETUP_BEFORE_USE'	=> 'عليك أن تقوم بإعداد توثيق Apache قبل أن تحول توثيق المنتدى إلى نظام توثيق Apache. ضع في عين الاعتبار أن اسم المستخدم لتوثيق Apache هو نفس اسم المستخدم  المستعمل في المنتدى يمكنك استخدام Apache فقط عند تعطيل mod_php , safe_mode',
	'LDAP_DN'	=> 'LDAP أساس <var>dn</var>',
	'LDAP_DN_EXPLAIN'	=> 'هذا الاسم المميز، تحديد معلومات المستخدم مثال <samp>o=My Company,c=US</samp>.',
	'LDAP_EMAIL'	=> 'صفة بريد LDAP',
	'LDAP_EMAIL_EXPLAIN'	=> 'حدد هذا لصفات اسم بريد مستخدميك (إذا كان هنا واحد أصلاً) لكي يتم تعين عنوان البريد تلقائياً للمستخدمين الجدد. إذا تركت هذا فارغاً سيتم ترك البريد فارغ للمستخدمين الذين يسجلون الدخول للمرة الأولى',
	'LDAP_INCORRECT_USER_PASSWORD'	=> 'الاندماج مع سيرفر LDAP فشل من اسم وكلمة السر المعطاه',
	'LDAP_NO_EMAIL'	=> 'صفات البريد المحددة غير موجودة',
	'LDAP_NO_IDENTITY'	=> 'لم نستطع إيجاد هوية تسجيل لـ %s.',
	'LDAP_PASSWORD'	=> 'كلمة سر LDAP',
	'LDAP_PASSWORD_EXPLAIN'	=> 'اتركها فارغة للسماح بالدخول المجهول. أو اكتب كلمة السر للمستخدم. تحذير : كلمة السر ستحفظ بقاعدة البيانات بدون تشفير. أي شخص يمكنه الاطلاع على قاعدة البيانات يستطيع معرفة كلمة السر',
	'LDAP_SERVER'	=> 'اسم خادم LDAP',
	'LDAP_SERVER_EXPLAIN'	=> 'إذا استخدمت LDAP اكتب اسم أو رقم IP الخادم',
	'LDAP_UID'	=> 'LDAP <var>uid</var>',
	'LDAP_UID_EXPLAIN'	=> 'هذا هو المفتاح المستعمل للبحث عن هوية أي تسجيل مثال<var>uid</var>, <var>sn</var>, الخ.',
	'LDAP_USER'	=> 'مستخدم LDAP',
	'LDAP_USER_EXPLAIN'	=> 'اتركها فارغة للسماح بالدخول المجهول.إذا تمت تعبئتها سيقوم المنتدى بالاتصال بخادم الـ LDAP بالاسم المحدد',
	'ACP_SERVER_SETTINGS_EXPLAIN'	=> 'هنا يمكنك وضع إعدادت الخادم والنطاق. الرجاء التأكد من أن المعلومات المعطاه صحيحة، الأخطاء ستنتج رسائل بريدية تحتوى على معلومات خاطئة. تذكر عندما تضع عنوان الموقع لا تسبقه بـ(http) وأيضا تعديل المنفذ - (port) إذا كنت تستعمل منفذ غير المنفذ 80. 80 هو الرقم الأصح في الغالب',
	'ENABLE_GZIP'	=> 'تفعيل ضغط GZip',
	'ENABLE_GZIP_EXPLAIN'	=> 'المواد المرسلة سيتم ضغطها قبل إرسالها إلى المستخدم. هذا سيقلل من حجم المعلمات المرسلة لكن سيزيد العباء على جهاز الموقع وجهاز المستخدم عند فك الضغط',
	'FORCE_SERVER_VARS'	=> 'فرض إعدادت وصلة المنتدى',
	'FORCE_SERVER_VARS_EXPLAIN'	=> 'إذا كان الخيار نعم إعدادت الخادم (السيرفر) المستخدمة هنا ستستعمل عوضاً عن الخيارات المحددة تلقائياً',
	'ICONS_PATH'	=> 'ضع مسار تخزين الصور الرمزية',
	'ICONS_PATH_EXPLAIN'	=> 'مسار تحت مجلد المنتدى مثال <samp>images/icons</samp>.',
	'PATH_SETTINGS'	=> 'إعدادت المسار',
	'RANKS_PATH'	=> 'مسار تخزين صور الرتب',
	'RANKS_PATH_EXPLAIN'	=> 'مسار تحت مجلد المنتدى مثال. <samp>images/ranks</samp>.',
	'SCRIPT_PATH'	=> 'مسار الشفرات',
	'SCRIPT_PATH_EXPLAIN'	=> 'مسار موقع المنتدى مثال <samp>/phpBB3</samp>.',
	'SERVER_NAME'	=> 'اسم النطاق',
	'SERVER_NAME_EXPLAIN'	=> 'النطاق الذي يشير إلى المنتدى (for example: <samp>www.foo.bar</samp>).',
	'SERVER_PORT'	=> 'منفذ الخادم',
	'SERVER_PORT_EXPLAIN'	=> 'المنفذ الذي يعمل منه خادمك على الانترنت، في الغالب يكون 80 ، غيره فقط إذا علمت أنه غير 80',
	'SERVER_PROTOCOL'	=> 'بروتوكول الخادم',
	'SERVER_PROTOCOL_EXPLAIN'	=> 'سيستخدم بروتوكول الخادم إذا تم فرض هذه الإعدادت. إذا كان فارغ سيتم تحديد البروتوكل عن طريق إعدادت الكوكيز الآمنة(<samp>http://</samp> or <samp>https://</samp>).',
	'SERVER_URL_SETTINGS'	=> 'إعدادت مسار الخادم',
	'SMILIES_PATH'	=> 'مسار تخزين الابتسامات',
	'SMILIES_PATH_EXPLAIN'	=> 'مسار تحت مجلد المنتدى مثال <samp>images/smilies</samp>.',
	'UPLOAD_ICONS_PATH'	=> 'مسار تخزين صور امتدادت الملفات',
	'UPLOAD_ICONS_PATH_EXPLAIN'	=> 'مسار تحت مجلد المنتدى مثال <samp>images/upload_icons</samp>.',
	'ACP_SECURITY_SETTINGS_EXPLAIN'	=> 'هناك يمكنك تعريف الجلسات وإعدادت تسجيل الدخول',
	'ALL'	=> 'الكل',
	'ALLOW_AUTOLOGIN'	=> 'السماح بالدخول التلقائي',
	'ALLOW_AUTOLOGIN_EXPLAIN'	=> 'حدد إذا أمكن الدخول التلقائي للمستخدمين',
	'AUTOLOGIN_LENGTH'	=> 'تاريخ انتهاء الدخول التلقائي بالأيام',
	'AUTOLOGIN_LENGTH_EXPLAIN'	=> 'الأيام التي يستمر فيها الدخول التلقائي. ضع القيمة 0 للتعطيل',
	'BROWSER_VALID'	=> 'التأكد من المتصفح',
	'BROWSER_VALID_EXPLAIN'	=> 'التأكد من المتصفح لكل جلسة يزيد من درجة الأمان',
	'CHECK_DNSBL'	=> 'افحص رقم الآي بي ضمن القائمة السوداء',
	'CHECK_DNSBL_EXPLAIN'	=> 'إذا تم تفعيل هذه الخاصية سيتم فحص IP المستخدم ضمن القائمة السوداء في التسجيل وفي المشاركة. قد يأخذ هذا البحث بعض الوقت إذا شعرت بحالة بطء في المنتدى يفضل تعطيل هذه الخاصية',
	'CLASS_B'	=> 'A.B',
	'CLASS_C'	=> 'A.B.C',
	
	'FORM_TIME_MAX'	=> 'الحد الاقصى للموافقه على الفورم',
	'FORM_TIME_MAX_EXPLAIN'	=> 'الشرح',
	
	'FORM_SID_GUESTS'	=> 'فورم جلسه الزائر',
	'FORM_SID_GUESTS_EXPLAIN'	=> 'الشرح',
	'JAB_GTALK_NOTE'	=> 'ملاحظات الجى توك',
	'EMAIL_CHECK_MX'	=> 'التأكد من MX البريد',
	'EMAIL_CHECK_MX_EXPLAIN'	=> 'إذا تم تفعيل هذه الخاصية سيتم التأكد فعلياً من وجود هذا البريد في قائمة خوادم  MX',
	'FORCE_PASS_CHANGE'	=> 'فرض تغيير كلمة السر',
	'FORCE_PASS_CHANGE_EXPLAIN'	=> 'يفرض على المستخدم تغيير كلمة السر بعد عدد معين من الأيام. لتعطيل هذه الخاصية ضع القيمة 0 ',
	'FORWARDED_FOR_VALID'	=> 'التأكد من رئاسة <var>X_FORWARDED_FOR</var> ',
	'FORWARDED_FOR_VALID_EXPLAIN'	=> 'سيتم استمرار الجلسة للمستخدم فقط إذا كانت قيمة الـ <var>X_FORWARDED_FOR</var> نفس القيمة السابقة وليست قيمة أخرى',
	'IP_VALID'	=> 'تصديق جلسة IP',
	'IP_VALID_EXPLAIN'	=> 'تحديد عدد خانات IP التي تستخدم في تصديق الجلسة إما الجزء الأول والثاني A.B أو الكل A.B.C أو تعطيل الخاصية None',
	'MAX_LOGIN_ATTEMPTS'	=> 'عدد محاولات تسجيل الدخول',
	'MAX_LOGIN_ATTEMPTS_EXPLAIN'	=> 'بعد هذا العدد من محاولات الدخول سيطلب من المستخدم وضع الرمز الأمني بجانب اسم المستخدم وكلمة المرور.',
	'NO_IP_VALIDATION'	=> 'لا يوجد',
	'PASSWORD_TYPE'	=> 'صعوبة كلمة السر',
	'PASSWORD_TYPE_EXPLAIN'	=> 'تحديد صعوبة كلمة السر إذا أنشئت أو عدلت. بما في ذلك التغير إلى كلمة السر السابقة',
	'PASS_TYPE_ALPHA'	=> 'عليها أن تحتوي على حروف وأرقام',
	'PASS_TYPE_ANY'	=> 'لا توجد متطلبات',
	'PASS_TYPE_CASE'	=> 'عليها أن تحتوي على حروف صغرى وكبرى',
	'PASS_TYPE_SYMBOL'	=> 'عليها أن تحتوي على رموز مثل : *$#',
	'PM_MAX_RECIPIENTS'         => 'العدد الاقصى من الاعضاء لتلقى نفس الرساله',
    'PM_MAX_RECIPIENTS_EXPLAIN'   => 'عدد الاعضاء المسموح بتلقيهم نفس الرساله في أن واحد . الرقم صفر يعنى ان العدد غير محدود',
	'TPL_ALLOW_PHP'	=> 'السماح بشفرات php في التنسيقات',
	'TPL_ALLOW_PHP_EXPLAIN'	=> 'إذا تم تفعيل هذه الخاصية شفرة php سينظر إليها وسيتم تشغيلها كلغة برمجة. إذا فعلت هذا الخيار وقمت باستعمال تنسيق آخر تأكد من مصداقية مصمم التنسيق لكن إذا عطلت هذه الخاصية فلن يضر استعمال التنسيق',
	'ACP_EMAIL_SETTINGS_EXPLAIN'	=> 'هذه المعلومات تستخدم عندما يرسل المنتدى بريد للمستخدمين. الرجاء التأكد من أن البريد الذي تضعه يعمل. أي رسالة لا تصل إلى صاحبها سيتم ردها إلى البريد المسجل هنا. إذا كان مقدم خدمة الاستضافة لديك لا يقدم خدمة بريد php الإلكتروني تستطيع أن تبعث رسائل باستخدام بروتوكول SMTP. إذا طلب السيرفر منك وضع كلمة سر واسم مستخدم (فقط إذا طلب ذلك) اكتب الاسم وكلمة السر. الرجاء ملاحظة أن مصداقية بسيطة متطلبة. المصداقيات الأخرى غير مدعومة حالياً',
	'ADMIN_EMAIL'	=> 'عنوان بريد الرد',
	'ADMIN_EMAIL_EXPLAIN'	=> 'هذا سيكون البريد الذي يستطيع المستخدمون الرد عليه عند استقبالهم الرسائل',
	'BOARD_EMAIL_FORM'	=> 'إرسال البريد للمستخدم عن طريق المنتدى',
	'BOARD_EMAIL_FORM_EXPLAIN'	=> 'بدل من عرض بريد المستخدمين في الانترنت، يمكن للمستخدمين مراسلة بعضهم إلى بريدهم الشخصي عن طريق المنتدى بدون إظهار عنوان بريد العضو حيث تتم المراسلة بدون معرفة البريد الإلكتروني',
	'BOARD_HIDE_EMAILS'	=> 'إخفاء عناوين البريد',
	'BOARD_HIDE_EMAILS_EXPLAIN'	=> 'هذه الخاصية تجعل البريد الإلكتروني خاص بالكامل',
	'CONTACT_EMAIL'	=> 'بريد الاتصال',
	'CONTACT_EMAIL_EXPLAIN'	=> 'بريد الاتصال هذا سيستعمل في أي حالة تحتاج إلى اتصال مثل التبليغ عن خطأ أو عن حالة خاصة بالمنتدى',
	'EMAIL_FUNCTION_NAME'	=> 'دالة البريد',
	'EMAIL_FUNCTION_NAME_EXPLAIN'	=> 'أدخل دالة البريد التي تستخدم لارسال الرسائل عن طريق php',
	'EMAIL_PACKAGE_SIZE'	=> 'حجم مجموعة البريد الإلكتروني',
	'EMAIL_PACKAGE_SIZE_EXPLAIN'	=> 'هنا عدد الايميلات التي يتم مراسلتها في حزمة واحدة',
	'EMAIL_SIG'	=> 'توقيع البريد الإلكتروني',
	'EMAIL_SIG_EXPLAIN'	=> 'هذا التوقيع سيرسل مع كل الرسائل الصادرة من المنتدى',
	'ENABLE_EMAIL'	=> 'تفعيل خاصية البريد',
	'ENABLE_EMAIL_EXPLAIN'	=> 'إذا تم تعطيل هذه الخاصية لن يبعث أي بريد من المنتدى إلى أي جهة',
	'SMTP_AUTH_METHOD'	=> 'طريقة التصديق SMTP',
	'SMTP_AUTH_METHOD_EXPLAIN'	=> 'فقط قم باستعمال اسم المستخدم/كلمة المرور, قم بمراسلة مستضيفك إذا لم تكن متأكد من طريقة استعمالهم.',
	'SMTP_CRAM_MD5'	=> 'CRAM-MD5',
'LDAP_PORT'	=> 'تفعيل خاصية البريد',
'LDAP_PORT_EXPLAIN'	=> 'تفعيل خاصية البريد',

'LDAP_USER_FILTER'	=> 'تفعيل خاصية البريد',
'LDAP_USER_FILTER_EXPLAIN'	=> 'تفعيل خاصية البريد',

	'SMTP_DIGEST_MD5'	=> 'DIGEST-MD5',
	'SMTP_LOGIN'	=> 'LOGIN',
	'SMTP_PASSWORD'	=> 'كلمة سر SMTP',
	'SMTP_PASSWORD_EXPLAIN'	=> 'ضع كلمة السر إذا كانت مطلوبة فقط',
	'SMTP_PLAIN'	=> 'PLAIN',
	'SMTP_POP_BEFORE_SMTP'	=> 'POP-BEFORE-SMTP',
	'SMTP_PORT'	=> 'منفذ خادم SMTP',
	'SMTP_PORT_EXPLAIN'	=> 'غير المنفذ فقط إذا أيقنت أنه في منفذ آخر',
	'SMTP_SERVER'	=> 'عنوان خادم SMTP',
	'SMTP_SETTINGS'	=> 'إعدادات SMTP',
	'SMTP_USERNAME'	=> 'اسم المستخدم SMTP',
	'SMTP_USERNAME_EXPLAIN'	=> 'ضع اسم المستخدم إذا كان مطلوباً فقط',
	'USE_SMTP'	=> 'استخدام خادم SMTP للبريد الإلكتروني',
	'USE_SMTP_EXPLAIN'	=> 'اختار نعم إذا أردت أو وجب عليك إرسال الرسائل عن طريق خادم غير الخادم المحلي',
	'ACP_JABBER_SETTINGS_EXPLAIN'	=> 'Here you can enable and control the use of Jabber for instant messaging and board notifications. Jabber is an open source protocol and therefore available for use by anyone. Some Jabber servers include gateways or transports which allow you to contact users on other networks. Not all servers offer all transports and changes in protocols can prevent transports from operating. Please be sure to enter already registered account details - phpBB will use the details you enter here as is.',
	'ERR_JAB_AUTH'	=> 'لم يؤخذ الإذن في خادم Jabber',
	'ERR_JAB_CONNECT'	=> 'لم يتمكن من الاتصال من خادم Jabber',
	'JAB_ENABLE'	=> 'تفعيل خاصية Jabber',
	'JAB_ENABLE_EXPLAIN'	=> 'تفعيل خاصية Jabber للمحادثة الفورية والتنبيه.',
	'JAB_PACKAGE_SIZE'	=> 'حجم مجموعة Jabber',
	'JAB_PACKAGE_SIZE_EXPLAIN'	=> 'عدد الرسائل في المره الواحده.',
	'JAB_PASSWORD'	=> 'كلمة سر Jabber',
	'JAB_PORT'	=> 'منفذ(port) Jabber',
	'JAB_PORT_EXPLAIN'	=> 'اتركها فارغه إلا إذا علمت أنه ليس منفذ 5222.',
	'JAB_SERVER'	=> 'خادم Jabber',
	'JAB_SERVER_EXPLAIN'	=> 'لعرض الخودم المتوفرة قم بزيارة موقع %sjabber.org%s .',
	'JAB_SETTINGS_CHANGED'	=> 'تم تغير إعدادت Jabber بنجاح',
	'JAB_USE_SSL'				=> 'Use SSL to connect',
	'JAB_USE_SSL_EXPLAIN'		=> 'If enabled a secure connection is tried to be established. The Jabber port will be modified to 5223 if port 5222 is specified.',
	'JAB_USERNAME'	=> 'اسم مستخدم Jabber',
	  'NO_REF_VALIDATION'            => 'لايوجد',
	  'REF_HOST'                  => 'الهوست الصالح فقط',
       'REF_PATH'                  => 'والمسار الصالح ايضا',
       'REFERER_VALID'               => 'احاله صالحه',
       'REFERER_VALID_EXPLAIN'         => 'If enabled, the referer of POST requests will be checked against the host/script path settings. This may cause issues with boards using several domains and or external logins.',
	'JAB_USERNAME_EXPLAIN'		=> 'Specify a registered username. The username will not be checked for validity.',

));


?>
