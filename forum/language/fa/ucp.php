<?php
/**
*
* ucp [Farsi]
*
* @package language
* @version $Id: ucp.php,v 1.136 2007/10/08 14:38:26 acydburn Exp $
* @copyright (c) 2005 phpBB Group
* @Language file persian edited by phpBBIran.com - Majid
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

// Privacy policy and T&C
$lang = array_merge($lang, array(
	'TERMS_OF_USE_CONTENT'	=> 'شما براي ثبت نام در سايت مي بايست قوانين ما را بپذيريد. در صورتي که قوانين زير را نپذيريد اجازه عضويت در “%1$s” را نخواهيد داشت.<br />
	<br />
	انجمن ما توسط سيستم مديريت انجمن phpBB قدرت گرفته است و اين يک بولتين بورد مي باشد که تحت تسلط “<a href="http://www.gnu.org/licenses/gpl.html">ليسانس عمومي (GPL)</a> منشر گشته است.براي دريافت phpBB <a href="http://www.phpbb.com/">اينجا را کليک کنيد</a>. براي مشاهده اطلاعات بيشتر درباره phpBB لطفا لينک روبرو را ببينيد : <a href="http://www.phpbb.com/">http://www.phpbb.com/</a>.<br />
	<br />
	شما بايد بپذيريد که پست هاي شما داراي لغات توهين آميز, مستهجن, رکيک, بدگويانه, کينه ورزي, تهديد آميز, جنسي و هر چيزي وابسته با مسائل جنسي ارسال نکنيد. در صورتي که قوانين را نقض کنيد کشوري که هاست سايت “%1$s” را تامين مي کند مجاز به تعقيب  قانوني شما مي باشد. در صورتي که قوانين را زير پا بگذاريد شما را از طريق تامين کننده اينترنتتان شناسايي خواهيم کرد. در ضمن تمام  IP ها در همه پست ها براي پشتيباني از اين مسئله ضبط مي شوند. در صورتي که اين مسئله را قبول داريد “%1$s” حق ويرايش ، حذف ، انتقال يا بستن هر مبحثي در هر زماني را داراست .
	',

	'PRIVACY_POLICY'		=> 'در این قسمت شرح سیاست های بکار گرفته شده در “%1$s” همراه با وابسته ها تشریح می 
شود 
(از این پس “ما” بمعنی“%1$s”, “%2$s”) و phpBB (از اين پس “آنها”, “برنامه phpBB”, “www.phpbb.com”, “گروه phpBB”, “تیم های phpBB”) هرگونه اطلاعات فراهم شده در هر سشن بکار گرفته توسط شما 
(از این پس “اطلاعات شما”).<br />
	<br />
	اطلاعات شما از طریق دو راه فراهم آمده است. در مرحله اول, توسط گشت و گذار ها در “%1$s” و phpBB تعدادی کوکی فراهم آورده است, این ها فایل های متنی کوچکی هستند که توسط مرورگر وب شما در حافظه موقتی قرار گرفته اند. دو کوکی اول مشخص کننده هویت کاربری شما (بعد از این “user-id”) و معین کننده سشن (بعد از این “session-id”), موجود شما که بصورت اوتوماتیک توسط سیستم phpBB گرد آمده است. سومین بخش قرار گرفته در کوکی ها مربوط به مباحث بازدید شده  در بورد “%1$s” و بکارگرفته شده برای انبار شدن و همچنین برای خواندن,  
در نتیجه بهبود و اصلاح حساب کاربری شما حاصل می گردد.<br />
	<br />
	بنابراین ما می توانیم کوکی های ناشی از گشت و گذار شما در “%1$s” را در اختبار داشته باشیم. در راه دوم ما قادریم اطلاعات ثبت شده شما را فراهم آوریم.<br />
	<br />
	حساب کاربری شما داری یک نام قابل شناسایی می باشد 
(از این پس “نام کاربری شما”), یک کلمه عبور شخصی برای ورود به  حساب کاربریتان بکار گرفته می شود (از این پس “کلمه عبور شما”) و یک آدرس ایمیل خصوصی و صحیح
(از این پس “ایمیل شما”). اطلاعات شما برای حساب کاربری تان در “%1$s” توسط نگهدارنده اطلاعات در کشور تامین کننده هاست ما حراست می شود. هرگونه اطلاعات غیر از نام کاربری, کلمه عبور و ایمیل شما  که در روند عضویت در 
“%1$s” درخواست شده الزامی نیست و اختیاری است. در همه حالت ها, شما اختیار این را دارید که چه گزینه ای از اطلاعاتتان برای سایرین به نمایش در آید. بعلاوه, در حساب کاربری شما, شما اختیار رد کردن یا تصویت کردن ایمیل های تولید شده بصورت خودکار در برنامه phpBB را دارا هستید.<br />
	<br />
	به توصیه های امنیتی در مورد کلمه عبور توجه نمایید: لطفا هرگز کلمه های عبور تشکیل شده از یک عدد را در وب سایت های مختلف بکار نگیرید. کلمه عبور شما راه دستیابی از طریق حساب کاربریتان به  
“%1$s” می باشد, بنابراین از آن بخوبی حفاظت کرده و آنرا  
در صورت درخواست به هیج شخص وابسته با “%1$s”, phpBB و هر شخص دیگر تشریح ندهید. در صورتی که کلمه عبورتان را فراموش کردید, می توانید از خصیصه 
“من کلمه عبورم را فراموش کرده ام ! ” واقع در برنامه phpBB استفاده نمایید. در این فرآیند از شما نام کاربری و ایمیلتان سوال می شود, و به سبب آن
phpBB به درخواست شما یک کلمه عبور جدید برایتان ارسال می کند .<br />
	',
));

// Common language entries
$lang = array_merge($lang, array(
	'ACCOUNT_ACTIVE'				=> 'حساب شما فعال شد.ازعضويت شما متشکريم.',
	'ACCOUNT_ACTIVE_ADMIN'			=> 'اين حساب فعال شده است.',
	'ACCOUNT_ACTIVE_PROFILE'		=> 'حساب شما با موفقيت دوباره فعال شد.',
	'ACCOUNT_ADDED'					=> 'از عضويت شما متشکريم, حساب شما ايجاد شد. شما مي توانيد با نام کاربري و کلمه عبور خود وارد سايت شويد.',
	'ACCOUNT_COPPA'					=> 'حساب شما ايجاد شد ولي بايد تاييد گردد, لطفا ديگر اطلاعات را از ايميل خود چک کنيد.',
	'ACCOUNT_EMAIL_CHANGED'			=> 'حساب کاربري شما بروز شد. اما, اين بورد هنگام تغييرات ايميل احتياج به فعال سازي دوباره دارد. يک کد تاييد جديد به ايميل جديد شما ارسال شده است. براي اطلاعات بيشتر ايمل خودرا چک نماييد.',
	'ACCOUNT_EMAIL_CHANGED_ADMIN'	=> 'حساب کاربري شما بروز شد. اما, بهنگام تغييرات ايميل اين بورد احتياج به فعال سازي دوباره حساب کاربري شما توسط مديران دارد. يک ايميل به ايشان با مضمون فعال سازي حساب کاربري شما فرستاده شد.',
	'ACCOUNT_INACTIVE'				=> 'حساب کاربري شما ايجاد شد. اما, اين انجمن احتياج به فعال سازي دارد, يک کد فعال سازي به آدرس ايميلتان ارسال شد. Please check your e-mail for further information.',
	'ACCOUNT_INACTIVE_ADMIN'		=> 'حساب کاربري شما ايجاد شد. اما, در اين بورد حساب هاي کاربري مي بايست توسط گروه مديران فعال گردد. يک ايميل با مضمون فعال سازي حساب کاربري شما به ايشان ارسال گرديد.',
	'ACTIVATION_EMAIL_SENT'			=> 'ايميل فعال سازي به ايميل شما ارسال شد.',
	'ACTIVATION_EMAIL_SENT_ADMIN'	=> 'ايميل فعال سازي به آدرس ايميل مديران ارسال شد.',
	'ADD'							=> 'افزودن',
	'ADD_BCC'						=> 'افزودن [BCC]',
	'ADD_FOES'						=> 'افزودن دشمنان جديد',
	'ADD_FOES_EXPLAIN'				=> 'درصورتي که مي خواهيد چندين نام کاربري وارد کنيد ، هر کدام را بصورت جداگانه در يک خط بنويسيد.',
	'ADD_FOLDER'					=> 'افزودن پوشه',
	'ADD_FRIENDS'					=> 'افزودن دوستان جديد',
	'ADD_FRIENDS_EXPLAIN'			=> 'درصورتي که مي خواهيد چندين نام کاربري وارد کنيد ، هر کدام را بصورت جداگانه در يک خط بنويسيد.',
	'ADD_NEW_RULE'					=> 'افزودن قانون جديد',
	'ADD_RULE'						=> 'افزودن قانون',
	'ADD_TO'						=> 'افزودن [به]',
	'ADMIN_EMAIL'					=> 'مديران اخبار را به من ايميل کنند',
	'AGREE'							=> 'من اين شرايط را قبول دارم',
	'ALLOW_PM'						=> 'کاربران اجازه ارسال پيغام هاي خصوصي به من را داشته باشند',
	'ALLOW_PM_EXPLAIN'				=> 'مديران انجمن و مديران سايت هميشه توانايي ارسال پيغام براي شما را دارند.',
	'ALREADY_ACTIVATED'				=> 'حساب شما پيش از اين فعال شده بود.',
	'ATTACHMENTS_EXPLAIN'			=> 'اين محل ليست پيوست هايي را نشان مي دهد که شما در پست ها ضميمه کرده ايد.',
	'ATTACHMENTS_DELETED'			=> 'پيوست ها با موفقيت حذف شدند.',
	'ATTACHMENT_DELETED'			=> 'پيوست با موفقيت حذف شد.',
	'AVATAR_CATEGORY'				=> 'دسته',
	'AVATAR_EXPLAIN'				=> 'حد اکثر اندازه ها; عرض: %1$d پيکسل, طول: %2$d پيکسل, حجم فايل: %3$dکيلوبايت.',
	'AVATAR_FEATURES_DISABLED'		=> 'تابع نماد در حال حاضر غيرفعال است.',
	'AVATAR_GALLERY'				=> 'گالري مکاني',
	'AVATAR_GENERAL_UPLOAD_ERROR'	=> 'نماد قادر به آپلود شدن در %s نيست.',
	'AVATAR_PAGE'					=> 'صفحه',

	'BACK_TO_DRAFTS'			=> 'بازگشت به پيش نويس هاي ذخيره شده',
	'BACK_TO_LOGIN'				=> 'بازگشت به صفحه ورود',
	'BIRTHDAY'					=> 'تاريخ تولد',
	'BIRTHDAY_EXPLAIN'			=> 'لطفا روز ، ماه و سال تولد خود را انتخاب کنيد.',
	'BOARD_DATE_FORMAT'			=> 'فرمت تاريخ ها',
	'BOARD_DATE_FORMAT_EXPLAIN'	=> 'براي اطلاعات بيشتر از فانکشنهاي تاريخ <a href="http://www.php.net/date">date()</a> را مشاهده کيند.',
	'BOARD_DST'					=> 'اجرا کردن زمان تابستاني/<abbr title="Daylight Saving Time">DST</abbr>',
	'BOARD_LANGUAGE'			=> 'زبان',
	'BOARD_STYLE'				=> 'قالب انجمن',
	'BOARD_TIMEZONE'			=> 'موقعيت زماني',
	'BOOKMARKS'					=> 'نشانه گذاري',
	'BOOKMARKS_EXPLAIN'			=> 'شما مي توانيد مباحث را به کتاب نشانه گذاري براي مراجعه بعدي اضافه کنيد.',
	'BOOKMARKS_DISABLED'		=> 'کتاب نشانه گذاري اين انجمن غيرفعال است.',
	'BOOKMARKS_REMOVED'			=> 'نشانه گذاري شده ها با موفقيت حذف شدند.',

	'CANNOT_EDIT_MESSAGE_TIME'	=> 'شما نمي توانيد پيغام را ويرايش يا حذف کنيد.',
	'CANNOT_MOVE_TO_SAME_FOLDER'=> 'پيغام ها قادر به انتقال به فولدري که شما مي خواهيد آنرا حذف کنيد نيستند.',
	'CANNOT_MOVE_FROM_SPECIAL'	=> 'پيغام ها از صندوق خارج شده ها جابجا نمي شوند.',
	'CANNOT_RENAME_FOLDER'		=> 'اين پوشه تغيير نام داده نمي شود.',
	'CANNOT_REMOVE_FOLDER'		=> 'اين پوشه حذف نمي شود.',
	'CHANGE_DEFAULT_GROUP'		=> 'ويرايش گروه پيشفرض',
	'CHANGE_PASSWORD'			=> 'ويرايش کلمه عبور',
	'CLICK_RETURN_FOLDER'		=> '%1$sبازگشت به “%3$s” پوشه%2$s',
	'CONFIRMATION'				=> 'تاييديه عضويت',
	'CONFIRM_CHANGES'			=> 'تاييد تغييرات',	
	'CONFIRM_EMAIL'				=> 'تاييد آدرس ايميل',
	'CONFIRM_EMAIL_EXPLAIN'		=> 'براي قرار دادن ايميل جديد بايد اين را تعيين کنيد.',
	'CONFIRM_EXPLAIN'			=> 'براي جلوگيري از عضويت خودکار در انجمن، شما مي بايست کد تاييد بصري را وارد کنيد. اين کد در تصوير ذيل قابل رويت است. در صورتي که کد تاييد خراب يا قابل خواندن نيست، لطفا با %sمدير بورد%s تماس حاصل کنيد.',
	'CONFIRM_PASSWORD'			=> 'تاييد کلمه عبور',
	'CONFIRM_PASSWORD_EXPLAIN'	=> 'براي ويرايش نامبرده فقط نياز به تصديق کلمه عبور داريد.',
	'COPPA_BIRTHDAY'			=> 'To continue with the registration procedure please tell us when you were born.',
	'COPPA_COMPLIANCE'			=> 'موافقت با COPPA',
	'COPPA_EXPLAIN'				=> 'لطفا در نظر داشته باشید که با کلیک بر روی ارسال، حساب شما ایجاد می شود. چنانچه نتوانست فعال شود یک پشتیبان عضویت شما را تایید می کند.',
	'CREATE_FOLDER'				=> 'افزودن پوشه…',
	'CURRENT_IMAGE'				=> 'تصوير کنوني',
	'CURRENT_PASSWORD'			=> 'کلمه عبور کنوني',
	'CURRENT_PASSWORD_EXPLAIN'	=> 'شما بايد کلمه عبور کنوني خود را وارد کنيد تا کلمه عبور جديد شما تاييد گردد.',
	'CUR_PASSWORD_ERROR'		=> 'کلمه عبور کنوني وارد شده اشتباه مي باشد.',
	'CUSTOM_DATEFORMAT'			=> 'سفارشي ...',

	'DEFAULT_ACTION'			=> 'حالت پيشفرض',
	'DEFAULT_ACTION_EXPLAIN'	=> '',
	'DEFAULT_ADD_SIG'			=> 'امضاي من را بصورت پيشفرض ضميمه کن',
	'DEFAULT_BBCODE'			=> 'فعال بودن BBCode بصورت پيشفرض',
	'DEFAULT_NOTIFY'			=> 'بمحض ارسال پاسخ مرا بصورت پيشفرض باخبر کن',
	'DEFAULT_SMILIES'			=> 'فعال بودن شکلک ها بصورت پيشفرض',
	'DEFINED_RULES'				=> 'قوانين تابع',
	'DELETED_TOPIC'				=> 'مبحث حذف گرديد.',
	'DELETE_ATTACHMENT'			=> 'حذف پيوست',
	'DELETE_ATTACHMENTS'		=> 'حذف پيوست ها',
	'DELETE_ATTACHMENT_CONFIRM'	=> 'آيا شما مطمئنيد که مي خواهيد اين پيوست را حذف کنيد ؟',
	'DELETE_ATTACHMENTS_CONFIRM'=> 'آيا از حذف پيوست ها اطمينان داريد ؟',
	'DELETE_AVATAR'				=> 'حذف تصوير',
	'DELETE_COOKIES_CONFIRM'	=> 'آيا ازحذف مجموعه کوکي هاي اين بورد اطمينان داريد',
	'DELETE_MARKED_PM'			=> 'حذف پيغام هاي نشانه گذاري شده',
	'DELETE_MARKED_PM_CONFIRM'	=> 'آيا از حذف پيغام هاي نشانه گذاري شده اطمينان داريد ؟',
	'DELETE_OLDEST_MESSAGES'	=> 'حذف پيغام هاي قديمي',
	'DELETE_MESSAGE'			=> 'حذف پيغام',
	'DELETE_MESSAGE_CONFIRM'	=> 'آيا از حذف اين پيغام خصوصي اطمينان داريد ؟',
	'DELETE_MESSAGES_IN_FOLDER'	=> 'حذف همه پيغام هاي انبار شده درون فولدر حذف شده',
	'DELETE_RULE'				=> 'حذف قانون',
	'DELETE_RULE_CONFIRM'		=> 'آيا از حذف اين قانون اطمينان داريد ؟',
	'DEMOTE_SELECTED'			=> 'تنزل انتخاب شده ها',
	'DISABLE_CENSORS'			=> 'فعال بودن سانسور کلمات',
	'DISPLAY_GALLERY'			=> 'نمايش گالري',
	'DOMAIN_NO_MX_RECORD_EMAIL'	=> 'ايميل وارد شده صحيح نمي باشد.',
	'DOWNLOADS'					=> 'دريافت ها',
	'DRAFTS_DELETED'			=> 'کل پيش نويس هاي انتخاب شده با موفقيت حذف شدند.',
	'DRAFTS_EXPLAIN'			=> 'شما مي توانيد پيش نويس هاي خود را مشاهده ، حذف ، ويرايش يا ذخيره کنيد.',
	'DRAFT_UPDATED'				=> 'پيش نويس با موفقيت بروز شد.',

	'EDIT_DRAFT_EXPLAIN'		=> 'در اين قسمت شما مي توانيد پيش نويش ها را ويرايش نماييد. پيش نويس ها اطلاعات نظرسنجي ها و پيوست ها را شامل نمي شوند.',
	'EMAIL_BANNED_EMAIL'		=> 'آدرس ايميل وارد شده براي بکارگيري مجاز نمي باشد.',
	'EMAIL_INVALID_EMAIL'		=> 'آدرس ايميل وارد شده اشتباه مي باشد.',
	'EMAIL_REMIND'				=> 'هنگام ثبت نام آدرس ايمل از ملزومات است.',
	'EMAIL_TAKEN_EMAIL'			=> 'آدرس ايميل وارد شده پيش از اين بکار گرفته شده بود.',
	'EMPTY_DRAFT'				=> 'براي ثبت تغييرات خود بايد يک پيغام وارد کنيد.',
	'EMPTY_DRAFT_TITLE'			=> 'شما بايد يک عنوان طرح کنيد.',
	'EXPORT_AS_XML'				=> 'خارج کردن بصورت XML',
	'EXPORT_AS_CSV'				=> 'خارج کردن بصورت CSV',
	'EXPORT_AS_CSV_EXCEL'		=> 'خارج کردن بصورت CSV (اکسل)',
	'EXPORT_AS_TXT'				=> 'خارج کردن بصورت TXT',
	'EXPORT_AS_MSG'				=> 'خارج کردن بصورت MSG',
	'EXPORT_FOLDER'				=> 'خارج کردن',

	'FIELD_REQUIRED'					=> 'فيلد “%s” مي بايست تکميل گردد.',
	'FIELD_TOO_SHORT'					=> 'فيلد “%1$s” کوتاه است, حد اقل تعداد کاراکتر ها %2$d مي باشد.',
	'FIELD_TOO_LONG'					=> 'فیلد “%1$s” طولانی است, حداکثر کاراکتر های مجاز %2$d می باشد.',
	'FIELD_TOO_SMALL'					=> 'مقدار “%1$s” کم است, مقدار در کمترین حالت می تواند %2$d باشد.',
	'FIELD_TOO_LARGE'					=> 'مقدار “%1$s” زیاد است, حداکثر مقدار فعال %2$d است .',
	'FIELD_INVALID_CHARS_NUMBERS_ONLY'	=> 'فيلد “%s” حاوي کاراکتر هاي غيرمجاز است, فقط  اعداد قابل بکارگيري اند.',
	'FIELD_INVALID_CHARS_ALPHA_ONLY'	=> 'فيلد “%s” حاوي کاراکتر هاي غيرمجاز است, تنها کاراکتر هاي الفماري فعال هستند.',
	'FIELD_INVALID_CHARS_SPACERS_ONLY'	=> 'فيلذ “%s” حاوي کاراکتر هاي غير مجاز است, تنها کاراکترهاي الفماري, space يا -+_[] مجاز هستند.',
	'FIELD_INVALID_DATE'				=> 'فيلد “%s” شامل تاريخ غير مجاز است.',

	'FOE_MESSAGE'				=> 'پيغام از دشمن',
	'FOES_EXPLAIN'				=> 'دشمنان کاربراني هستند که بصورت پيشفرض برسميت شناخته نمي شوند. پست هاي اين کاربران بصورت کامل قابل رويت نمي باشد. پيغام هاي شخصي از دشمنان هميشه ترخيص مي شود. در نظر داشته باشيد که مديران انجمن و مديران کل  در ليست دشمنان قرار نخواهند گرفت.',
	'FOES_UPDATED'				=> 'ليست دشمنان شما با موفقيت بروز شد.',
	'FOLDER_ADDED'				=> 'پوشه با موفقيت اضافه شد.',
	'FOLDER_MESSAGE_STATUS'		=> '%1$d از %2$d پيغام انبار شده',
	'FOLDER_NAME_EXIST'			=> 'پوشه <strong>%s</strong> قبلا فعال بوده است.',
	'FOLDER_OPTIONS'			=> 'تنظيمات پوشه',
	'FOLDER_RENAMED'			=> 'پوشه با موفقيت تغيير نام پيدا کرد.',
	'FOLDER_REMOVED'			=> 'پوشه با موفقيت حذف شد.',
	'FOLDER_STATUS_MSG'			=> 'شاخه %1$d%% پر است (%2$d از %3$d پيغام انبار شده)',
	'FORWARD_PM'				=> 'فورواد پيغام',
	'FORCE_PASSWORD_EXPLAIN'	=> 'پيش از ادامه دادن به گشت در انجمن احتياج به تغيير کلمه عبورتان داريد.',
	'FRIEND_MESSAGE'			=> 'پيغام هاي دوستان',
	'FRIENDS'					=> 'دوستان',
	'FRIENDS_EXPLAIN'			=> 'دوستان کاربراني هستند که شما مي توانيد با آنها بصورت مکرر ارتباط برقرار کنيد. در صورتي که قالب پشتيباني کند همه پستهاي دوستان برجسته خواهند شد.',
	'FRIENDS_OFFLINE'			=> 'آفلاين',
	'FRIENDS_ONLINE'			=> 'آنلاين',
	'FRIENDS_UPDATED'			=> 'ليست دوستان شما با موفقيت بروز شد.',
	'FULL_FOLDER_OPTION_CHANGED'=> 'اين عمل براي لمس کردن هنگامي که فولدر پر است با موفقيت ويرايش شد.',
	'FWD_ORIGINAL_MESSAGE'		=> '-------- پيغام اصلي --------',
	'FWD_SUBJECT'				=> 'موضوع: %s',
	'FWD_DATE'					=> 'تاريخ: %s',
	'FWD_FROM'					=> 'از: %s',
	'FWD_TO'					=> 'به: %s',

	'GLOBAL_ANNOUNCEMENT'		=> 'اطلاعيه هاي کلي',

	'HIDE_ONLINE'				=> 'آنلاين بودن مرا نشان نده(مخفي)',
	'HIDE_ONLINE_EXPLAIN'		=> 'Changing this setting won\'t become effective until your next visit to the board.',
	'HOLD_NEW_MESSAGES'			=> 'پيغام هاي جديد قبول نشوند (پيغام هاي جديد زماني که فضاي کافي آماده شد باز مي گردند)',
	'HOLD_NEW_MESSAGES_SHORT'	=> 'New messages will be held back',

	'IF_FOLDER_FULL'			=> 'اگر پوشه پر شد',
	'IMPORTANT_NEWS'			=> 'اطلاعيه هاي مهم',
	'INVALID_USER_BIRTHDAY'			=> 'تاريخ وارد شده براي تولد صحيح نمي باشد.',
	'INVALID_CHARS_USERNAME'	=> 'نام کاربري مشمول کاراکترهاي ممنوعه مي باشد.',
	'INVALID_CHARS_NEW_PASSWORD'=> 'کلمه عبور شامل کاراکترهاي موردنياز نمي باشد.',
	'ITEMS_REQUIRED'			=> 'آيتم هاي نشانه گذاري شده با * فيلد هاي الزامي مشخصات هستند و مي بايست تکميل شوند.',

	'JOIN_SELECTED'				=> 'عضويت در انتخاب شده',

	'LANGUAGE'					=> 'زبان',
	'LINK_REMOTE_AVATAR'		=> 'لينک از سايتي ديگر',
	'LINK_REMOTE_AVATAR_EXPLAIN'=> 'در صورتي که دوست داريد نماد خود را تغيير دهيد مي توانيد لينک نماد خود را از سايتي ديگر بدهيد.',
	'LINK_REMOTE_SIZE'			=> 'اندازه نماد',
	'LINK_REMOTE_SIZE_EXPLAIN'	=> 'تعيين کردن طول و عرض نماد . در صورتي که فيلدها را رها کنيد اتوماتيک تعيين خواهد شد.',
	'LOGIN_EXPLAIN_UCP'			=> 'براي دسترسي به کنترل پنل کاربري بايد وارد سايت شويد.',
	'LOGIN_REDIRECT'			=> 'شما با موفقيت وارد شديد.',
	'LOGOUT_FAILED'				=> 'شما خارج نشده بويد, نظر به اينکه درخواست با سشن هاي شما مطابقت نمي کند. در صورتي که مشکلات ادامه يافت با مديرکل بورد ارتباط برقرار کنيد.',
	'LOGOUT_REDIRECT'			=> 'شما با موفقيت خارج شديد.',

	'MARK_IMPORTANT'				=> 'نشانه گذاري / لغو نشانه گذارس بعنوان مهم',
	'MARKED_MESSAGE'				=> 'پيغام علامت گذاري شده',
	'MAX_FOLDER_REACHED'			=> 'تعداد کل فولدر هاي کاربر به حداکثر رسيده است.',
	'MESSAGE_BY_AUTHOR'				=> 'توسط',
	'MESSAGE_COLOURS'				=> 'رنگهاي پيغام ها',
	'MESSAGE_DELETED'				=> 'پيغام با موفقيت حذف شد.',
	'MESSAGE_HISTORY'				=> 'تاريخچه پيغام',
	'MESSAGE_REMOVED_FROM_OUTBOX'	=> 'اين پيغام پيش از رسيدن توسط نويسنده حذف شده است.',
	'MESSAGE_SENT_ON'				=> 'در',
	'MESSAGE_STORED'				=> 'اين پيغام با موفقيت ارسال شد.',
	'MESSAGE_TO'					=> 'به',
	'MESSAGES_DELETED'				=> 'پيغام ها با موفقيت حذف شدند',
	'MOVE_DELETED_MESSAGES_TO'		=> 'انتقال پيغام ها از پوشه حذف شده به',
	'MOVE_DOWN'						=> 'برو پايين',
	'MOVE_MARKED_TO_FOLDER'			=> 'انتقال نشانه گذاري شده ها به %s',
	'MOVE_PM_ERROR'					=> 'يک خطا در حين انتقال پيام ها به پوشه جديد رخ داد, فقط %1d از %2d پيغام جابجا شد.',
	'MOVE_TO_FOLDER'				=> 'انتقال به پوشه',
	'MOVE_UP'						=> 'برو بالا',

	'NEW_EMAIL_ERROR'				=> 'ايميل هاي وارد شده جفت نمي باشند.',
	'NEW_FOLDER_NAME'				=> 'نام پوشه جديد',
	'NEW_PASSWORD'					=> 'کلمه عبور جديد',
	'NEW_PASSWORD_ERROR'			=> 'کلمه هاي عبور وارد شده هماهنگ نيستند.',
	'NOTIFY_METHOD'					=> 'حالت اگاه سازي',
	'NOTIFY_METHOD_BOTH'			=> 'هر در',
	'NOTIFY_METHOD_EMAIL'			=> 'فقط ايميل',
	'NOTIFY_METHOD_EXPLAIN'			=> 'Method for sending messages sent via this board.',
	'NOTIFY_METHOD_IM'				=> 'تنها Jabber',
	'NOTIFY_ON_PM'					=> 'در صورت دريافت پيغام خصوصي جديد مراباخبر کن',
	'NOT_ADDED_FRIENDS_ANONYMOUS'	=> 'شما نمي توانيد کاربري تخلصي را در ليست دوستان خود قرار دهيد.',
	'NOT_ADDED_FRIENDS_FOES'		=> 'شما نمي توانيد کاربراني را که در ليست دشمنانتان قرار دارند در ليست دوستانتان اضافه نماييد.',
	'NOT_ADDED_FRIENDS_SELF'		=> 'شما نمي توانيد خود را در ليست دوستان قرار دهيد.',
	'NOT_ADDED_FOES_MOD_ADMIN'		=> 'شما نمي توانيد مديران سايت و مديران انجمن را در ليست دشمنان قرار دهيد.',
	'NOT_ADDED_FOES_ANONYMOUS'		=> 'نمي توانيد کاربر بي نامي را در ليست دشمنان قرار دهيد.',
	'NOT_ADDED_FOES_FRIENDS'		=> 'شما نمي توانيد کاربران را در ليست دشمنان قرار دهيد زيرا در ليست دوستان هم موجود هستند.',
	'NOT_ADDED_FOES_SELF'			=> 'شما نمي توانيد خود را در ليست دشمنان قرار دهيد.',
	'NOT_AGREE'						=> 'من اين شرايط را قبول ندارم',
	'NOT_ENOUGH_SPACE_FOLDER'		=> 'The destination folder “%s” seems to be full. The requested action has not been taken.',
	'NOT_MOVED_MESSAGE'				=> 'You have 1 private message currently on hold because of full folder.',
	'NOT_MOVED_MESSAGES'			=> 'You have %d private messages currently on hold because of full folder.',
	'NO_ACTION_MODE'				=> 'No message action specified.',
	'NO_AUTHOR'						=> 'هيچ نويسنده اي براي اين پيغام تعيين نشده است',
	'NO_AVATAR_CATEGORY'			=> 'هيچ',

	'NO_AUTH_DELETE_MESSAGE'		=> 'شما اجازه حذف پيغام هاي خصوصي را نداريد.',
	'NO_AUTH_EDIT_MESSAGE'			=> 'شما اجازه ويرايش پيغام هاي خصوصي را نداريد.',
	'NO_AUTH_FORWARD_MESSAGE'		=> 'شما اجازه فورواد کردن پيغام هاي خصوصي را نداريد.',
	'NO_AUTH_GROUP_MESSAGE'			=> 'شما اجازه ارسال پيغام هاي خصوصي به گروه ها را نداريد.',
	'NO_AUTH_READ_MESSAGE'			=> 'شما اجازه خواندن پيغام هاي خصوصي را نداريد.',
	'NO_AUTH_READ_REMOVED_MESSAGE'	=> 'شما اجازه خواندن اين پيغام را نداريد زيرا توسط نويسنده اش حذفشده است.',
	'NO_AUTH_SEND_MESSAGE'			=> 'شما اجازه ارسال پيغام هاي خصوصي را نداريد.',
	'NO_AUTH_SIGNATURE'				=> 'شما اجازه تعيين امضا را نداريد.',

	'NO_BCC_RECIPIENT'			=> 'هيچ',
	'NO_BOOKMARKS'				=> 'شما هيچ چيز را نشانه گذاري نکرده ايد.',
	'NO_BOOKMARKS_SELECTED'		=> 'شما هيچ نشانه گذاري شده اي را انتخاب نکرده ايد.',
	'NO_EDIT_READ_MESSAGE'		=> 'پيغام خصوصي ويرايش نمي شود زيرا در حال حاضر مطالعه مي شود.',
	'NO_EMAIL_USER'				=> 'اطلاعات ايميل و نام کاربري کاربر پيدا نشد.',
	'NO_FOES'					=> 'هيچ دشمني تعريف نشده است.',
	'NO_FRIENDS'				=> 'هيچ دوستي تعريف نشده است.',
	'NO_FRIENDS_OFFLINE'		=> 'هيچ دوستي آفلاين نمي باشد.',
	'NO_FRIENDS_ONLINE'			=> 'هيچ دوستي آنلاين نمي باشد.',
	'NO_GROUP_SELECTED'			=> 'بدون گروه تعريف شده.',
	'NO_IMPORTANT_NEWS'			=> 'هيچ اعلان مهمي حاضر نمي باشد..',
	'NO_MESSAGE'				=> 'پيغام خصوصي پيدا نشد.',
	'NO_NEW_FOLDER_NAME'		=> 'نام پوشه جديد را تعيين کنيد.',
	'NO_NEWER_PM'				=> 'هيچ پيغام جديدي موجود نمي باشد.',
	'NO_OLDER_PM'				=> 'هيچ پيغام قديمي موجود نمي باشد.',
	'NO_PASSWORD_SUPPLIED'		=> 'شما نمي توانيد بدون کلمه عبور وارد شويد.',
	'NO_RECIPIENT'				=> 'هيچ گيرنده اي تعريف نشده است.',
	'NO_RULES_DEFINED'			=> 'قوانيني تعريف نشده است.',
	'NO_SAVED_DRAFTS'			=> 'هيچ پيش نويسي موجود نمي باشد.',
	'NO_TO_RECIPIENT'			=> 'هيچ',
	'NO_WATCHED_FORUMS'			=> 'شما هيچ انجمني براي نظارت نداريد.',
	'NO_WATCHED_TOPICS'			=> 'شما هيچ مبحثي براي نظارت نداريد.',

	'PASS_TYPE_ALPHA_EXPLAIN'	=> 'Password must be between %1$d and %2$d characters long, must contain letters in mixed case and must contain numbers.',
	'PASS_TYPE_ANY_EXPLAIN'		=> 'Must be between %1$d and %2$d characters.',
	'PASS_TYPE_CASE_EXPLAIN'	=> 'Password must be between %1$d and %2$d characters long and must contain letters in mixed case.',
	'PASS_TYPE_SYMBOL_EXPLAIN'	=> 'Password must be between %1$d and %2$d characters long, must contain letters in mixed case, must contain numbers and must contain symbols.',
	'PASSWORD'					=> 'کلمه عبور',
	'PASSWORD_ACTIVATED'		=> 'کلمه عبور جديد شما فعال شد.',
	'PASSWORD_UPDATED'			=> 'کلمه عبور شما با موفقيت به آدرس ايميل اصلي ارسال شد.',
	'PERMISSIONS_RESTORED'		=> 'سطوح دسترسي اصلي با موفقيت بازگرداني شد.',
	'PERMISSIONS_TRANSFERRED'	=> 'سطوح دسترسي <strong>%s</strong> با موفقيت با شما منتقل شد, در حال حاضر مي توانيد با سطوح دسترسي اين کاربران انجمن را بازديد کنيد.<br />لطفا در نظر داشته باشيد که سطوح دسترسي مدير منتقل نشده اند. شما توانايي بازگشت سطوح دسترسيتان در هر زمان ممکن را داريد.',
	'PM_DISABLED'				=> 'پيغام هاي خصوصي در اين انجمن غير فعال هستند.',
	'PM_FROM'					=> 'از',
	'PM_FROM_REMOVED_AUTHOR'	=> 'اين پيغام توسط کاربري که مدت زياد از عضويتش نمي گذرد ارسال شده است.',
	'PM_ICON'					=> 'آيکون پيغام',
	'PM_INBOX'					=> 'صندوق دريافت',
	'PM_NO_USERS'				=> 'کاربر درخواست شده براي اضافه شدن موجود نمي باشد.',
	'PM_OUTBOX'					=> 'صندوق خارج شده',
	'PM_SENTBOX'				=> 'پيغام هاي ارسال شده',
	'PM_SUBJECT'				=> 'عنوان پيغام',
	'PM_TO'						=> 'ارسال به',
	'PM_USERS_REMOVED_NO_PM'	=> 'تعدادي از کاربران نميتواند اضافه گردند زيرا آنها براي گيرنده شدن پيغام غيرفعال هستند.',
	'POPUP_ON_PM'				=> 'نمايش پنجره Pop up بهنگام دريافت پيغام خصوصي جديد',
	'POST_EDIT_PM'				=> 'ويرايش پيغام',
	'POST_FORWARD_PM'			=> 'فوروارد پيغام',
	'POST_NEW_PM'				=> 'ارسال پيغام',
	'POST_PM_LOCKED'			=> 'پيغام هاي خصوصي قفل شده است',
	'POST_PM_POST'				=> 'نقل قول پست',
	'POST_QUOTE_PM'				=> 'نقل قول پيغام',
	'POST_REPLY_PM'				=> 'پاسخ به پيغام',
	'PRINT_PM'					=> 'نمايش نسخه چاپي',
	'PREFERENCES_UPDATED'		=> 'پيکربندي با موفقيت بروز شد.',
	'PROFILE_INFO_NOTICE'		=> 'شما مي توانيد مشخصات خود را وارد کرده تا ديگران آنها را مشاهده کنند. لطفا زماني که اطلاعات شخصي خود را وارد مي کنيد دقت کنيد. لطفا تمام فيلدهايي که داراي * مي باشند را تکميل کنيد.',
	'PROFILE_UPDATED'			=> 'مشخصات شما بروز شد.',

	'RECIPIENT'							=> 'گيرنده',
	'RECIPIENTS'						=> 'گيرنده ها',
	'REGISTRATION'						=> 'عضويت',
	'RELEASE_MESSAGES'					=> '%sRelease all on-hold messages%s… they will be re-sorted into the appropriate folder if enough space is made available.',
	'REMOVE_ADDRESS'					=> 'حذف آدرس',
	'REMOVE_SELECTED_BOOKMARKS'			=> 'حذف نشانه گذاري هاي انتخاب شده',
	'REMOVE_SELECTED_BOOKMARKS_CONFIRM'	=> 'آيا از حذف نشانه گذاري شده هاي انتخاب شده اطمينان داريد ؟',
	'REMOVE_BOOKMARK_MARKED'			=> 'حذف نشانه گذاري شده هاي انتخاب شده',
	'REMOVE_FOLDER'						=> 'حذف پوشه',
	'REMOVE_FOLDER_CONFIRM'				=> 'آيا شما از حذف پوشه اطمينان داريد؟',
	'RENAME'							=> 'تغييرنام',
	'RENAME_FOLDER'						=> 'تغيير نام پوشه',
	'REPLIED_MESSAGE'					=> 'پاسخ داده شده به پيغام',
	'RESIGN_SELECTED'					=> 'استعفا دادن از انتخاب شده',
	'RETURN_FOLDER'						=> '%1$sبازگشت به شاخه قبلي%2$s',
	'RETURN_UCP'						=> '%sبازگشت به کنترل پنل کاربري%s',
	'RULE_ADDED'						=> 'قانون با موفقيت اضافه شد.',
	'RULE_ALREADY_DEFINED'				=> 'اين قانون قبلا تعريف شده بود.',
	'RULE_DELETED'						=> 'قانون با موفقيت حذف شد.',
	'RULE_NOT_DEFINED'					=> 'قانون صحيح تعريف نشده است.',
	'RULE_REMOVED_MESSAGE'				=> 'يک پيغام خصوصي در اثر فيلترهاي پيغام خصوصي حذف شد.',
	'RULE_REMOVED_MESSAGES'				=> '%d پيغام خصوصي در اثر فيلترهاي پيغام خصوصي حذف شد.',

	'SAME_PASSWORD_ERROR'		=> 'کلمه عبور جديد وارد شده همان کلمه عبور کنوني شماست.',
	'SEARCH_YOUR_POSTS'			=> 'نمايش پست هاي شما',
	'SEND_PASSWORD'				=> 'ارسال کلمه عبور',
	'SENT_AT'					=> 'ارسال شده در',
	'SHOW_EMAIL'				=> 'کاربران از طريق ايميل با من ارتباط برقرار کنند',
	'SIGNATURE_EXPLAIN'			=> 'در اين  قسمت هر چيزي که قرار دهيد بهمراه مطالب شما نمايش داده مي شود.حد اکثر کاراکتر براي امضا %d مي باشد.',
	'SIGNATURE_PREVIEW'			=> 'امضاي شما شبيه اين در پست ها نمايان مي گردد.',
	'SIGNATURE_TOO_LONG'		=> 'امضا طولاني مي باشد.',
	'SORT'						=> 'طبقه بندي',
	'SORT_COMMENT'				=> 'تفسير فايل',
	'SORT_DOWNLOADS'			=> 'دانلود ها',
	'SORT_EXTENSION'			=> 'پسوند',
	'SORT_FILENAME'				=> 'نام فايل',
	'SORT_POST_TIME'			=> 'زمان پست',
	'SORT_SIZE'					=> 'حجم فايل',

	'TIMEZONE'					=> 'موقعيت زماني',
	'TO'						=> 'به',
	'TOO_MANY_RECIPIENTS'		=> 'به گيرنده هاي زياد.',
	'TOO_MANY_REGISTERS'		=> 'شما تعداد حداکثر کوشش ها براي عضويت را از حداکثر تعداد تعيين شده گذرانده ايد. لطفا بعدا مجددا تلاش کنيد.',

	'UCP'						=> 'کنترل پنل کاربري',
	'UCP_ACTIVATE'				=> 'فعال کردن حساب',
	'UCP_ADMIN_ACTIVATE'		=> 'درنظر داشته باشيد که شما بايد پيش از فعال شدن حساب کاربريتان يک ايميل صحيح وارد نماييد. مدير کل  حساب کاربري تان را بازبيني کرده و در صورتي که شما را تاييد نمود به آدرس ايميل تاييد شده يک پيغام ارسال مي گردد.',
	'UCP_AIM'					=> 'AOL Instant Messenger',
	'UCP_ATTACHMENTS'			=> 'پيوست ها',
	'UCP_COPPA_BEFORE'			=> 'پيش از %s',
	'UCP_COPPA_ON_AFTER'		=> 'يا بعد از %s',
	'UCP_EMAIL_ACTIVATE'		=> 'درنظر داشته باشيد که شما بايد پيش از فعال شدن حساب کاربريتان يک ايميل صحيح وارد نماييد. شما يک ايميل حاوي لينک فعال سازي برروي آدرس ايميتان دريافت خواهيد نمود.',
	'UCP_ICQ'					=> 'شماره ICQ',
	'UCP_JABBER'				=> 'آدرس',

	'UCP_MAIN'					=> 'چشم انداز اصلي',
	'UCP_MAIN_ATTACHMENTS'		=> 'مديريت پيوست ها',
	'UCP_MAIN_BOOKMARKS'		=> 'مديريت کتاب نشانه گذازي ها',
	'UCP_MAIN_DRAFTS'			=> 'مديريت پيش نويس ها',
	'UCP_MAIN_FRONT'			=> 'صفحه اول',
	'UCP_MAIN_SUBSCRIBED'		=> 'مديريت اشتراک ها',

	'UCP_MSNM'					=> 'MSN Messenger',
	'UCP_NO_ATTACHMENTS'		=> 'شما هيچ فايلي ارسال نکرده ايد.',

	'UCP_PREFS'					=> 'پيکربندي انجمن',
	'UCP_PREFS_PERSONAL'		=> 'ويرايش تنظيمات مهم',
	'UCP_PREFS_POST'			=> 'ويرايش پيشفرض هاي ارسال پست',
	'UCP_PREFS_VIEW'			=> 'ويرايش تنظيمات جلوه هاي ظاهري',
	
	'UCP_PM'					=> 'پيغام هاي خصوصي',
	'UCP_PM_COMPOSE'			=> 'ارسال پيغام',
	'UCP_PM_DRAFTS'				=> 'مديريت پيغام هاي طرح شده',
	'UCP_PM_OPTIONS'			=> 'قوانين, شاخه ها و تنظيمات',
	'UCP_PM_POPUP'				=> 'پيغام هاي خصوصي',
	'UCP_PM_POPUP_TITLE'		=> 'popup پيغام هاي خصوصي',
	'UCP_PM_UNREAD'				=> 'پيغام هاي خوانده نشده',
	'UCP_PM_VIEW'				=> 'نمايش پيغام هاي',

	'UCP_PROFILE'				=> 'مشخصات',
	'UCP_PROFILE_AVATAR'		=> 'ويرايش نماد',
	'UCP_PROFILE_PROFILE_INFO'	=> 'ويرايش مشخصات',
	'UCP_PROFILE_REG_DETAILS'	=> 'ويرايش تنظيمات اکانت',
	'UCP_PROFILE_SIGNATURE'		=> 'ويرايش امضا',

	'UCP_USERGROUPS'			=> 'گروه هاي کاربري',
	'UCP_USERGROUPS_MEMBER'		=> 'ويرايش گروه کاربري',
	'UCP_USERGROUPS_MANAGE'		=> 'اداره کردن گروه ها',

	'UCP_REGISTER_DISABLE'			=> 'در حاضر حاضر ايجاد حساب جديد امکان پذير نمي باشد.',
	'UCP_REMIND'					=> 'ارسال کلمه عبور',
	'UCP_RESEND'					=> 'ارسال ايميل فعال سازي',
	'UCP_WELCOME'					=> 'به کنترل پنل کاربري خوش آمديد. دراين قسمت شما مي توانيد مشخصات خود را ويرايش، پيکربندي را بروز، اشتراکها را مديريت ، پيغام هاي خصوصي دريافت و ارسال و ... عمليات هاي ديگري انجام دهيد',
	'UCP_YIM'						=> 'Yahoo Messenger',
	'UCP_ZEBRA'						=> 'دوستان و دشمنان',
	'UCP_ZEBRA_FOES'				=> 'مديريت دشمنان',
	'UCP_ZEBRA_FRIENDS'				=> 'مديريت دوستان',
	'UNKNOWN_FOLDER'				=> 'فولدر ناشناخته',
	'UNWATCH_MARKED'				=> 'لغو اشتراک',
	'UPLOAD_AVATAR_FILE'			=> 'آپلود از سيستم شما',
	'UPLOAD_AVATAR_URL'				=> 'آپلود از آدرس وب',
	'UPLOAD_AVATAR_URL_EXPLAIN'		=> 'آدرس مکان دربرگيرنده تصوير را وارد کنيد. تصوير به سايت کپي خواهد شد.',
	'USERNAME_ALPHA_ONLY_EXPLAIN'	=> 'نام کاربري مي بايست بين %1$d تا %2$d کاراکتر امتداد داشته و تنها  مشمول کاراکترهاي الفماري باشد.',
	'USERNAME_ALPHA_SPACERS_EXPLAIN'=> 'نام کاربري بايد بين %1$d تا %2$d کاراکتر امتداد داشته و در آن از کاراکتر هاي الفماري, space يا -+_[] استفاده گردد.',
	'USERNAME_ASCII_EXPLAIN'		=> 'نام کاربري بايد بين %1$d تا %2$d و در آن تنها از کاراکتر هاي ASCII بهره گرفته شود, پس ويژه سمبل ها نيست.',
	'USERNAME_LETTER_NUM_EXPLAIN'	=> 'نام کاربري بايد بين %1$d تا %2$d کاراکتر امتداد داشته باشد و تنها حاوي حروف الفبا و اعداد باشد.',
	'USERNAME_LETTER_NUM_SPACERS_EXPLAIN'=> 'نام کاربري بايد بين %1$d و %2$d کاراکتر امتداد داشته باشد و در آن از حروف الفبا, اعداد, space يا -+_[] استفاده گردد.',
	'USERNAME_CHARS_ANY_EXPLAIN'	=> 'امتداد مي بايست بين %1$d و %2$d کاراکتر باشد.',
	'USERNAME_TAKEN_USERNAME'		=> 'نام کاربري تعيين شده توسط شما پيش از اين بکارگرفته شده بود, لطفا يک نام کاربري ديگر انتخاب نماييد.',
	'USERNAME_DISALLOWED_USERNAME'	=> 'نام کاربري وارد شده توسط شما يا غيرفعال شده است يا داراي کلمات سانسور شده بود. لطفا نام ديگري انتخاب کنيد.',
	'USER_NOT_FOUND_OR_INACTIVE'	=> 'نام کاربري تعيين شده يا پيدا نشد و يا کاربر فعال شده نيست.',

	'VIEW_AVATARS'				=> 'نمايش نمادها',
	'VIEW_EDIT'					=> 'نمايش / ويرايش',
	'VIEW_FLASH'				=> 'نمايش انيميشن هاي فلش',
	'VIEW_IMAGES'				=> 'نمايش تصاوير در بين پستها',
	'VIEW_NEXT_HISTORY'			=> 'پيغام بعدي در پيشينه',
	'VIEW_NEXT_PM'				=> 'پيغام بعدي',
	'VIEW_PM'					=> 'نمايش پيغام',
	'VIEW_PM_INFO'				=> 'اطلاعات پيغام',
	'VIEW_PM_MESSAGE'			=> '1 پيغام',
	'VIEW_PM_MESSAGES'			=> '%d پيغام ها',
	'VIEW_PREVIOUS_HISTORY'		=> 'پيغام قبلي در پيشينه',
	'VIEW_PREVIOUS_PM'			=> 'پيغام قبلي',
	'VIEW_SIGS'					=> 'نمايش امضاها',
	'VIEW_SMILIES'				=> 'نمايش شکلکهاي مانند تصاوير',
	'VIEW_TOPICS_DAYS'			=> 'نمايش مباحث روزهاي قبلي',
	'VIEW_TOPICS_DIR'			=> 'نحوه هدايت قرارگيري مباحث',
	'VIEW_TOPICS_KEY'			=> 'نمايش مبحث ها طبق',
	'VIEW_POSTS_DAYS'			=> 'نمايش پست هاي روزهاي قبلي',
	'VIEW_POSTS_DIR'			=> 'نحوه هدايت پست ها',
	'VIEW_POSTS_KEY'			=> 'نمايش پست ها طبق',

	'WATCHED_EXPLAIN'			=> 'در زير ليست انجمن ها و مبحث هايي نمايش داده مي شود که شما در آنها مشترک شده ايد. در صورت اشتراک در هر انجمن يا مبحث، شما از پست هاي جديد آن انجمن يا مبحث با خبر خواهيد شد. براي لغو اشتراک در انجمن يا مبحث مي توانيد آنرا تيک زده و تکمه <em>لغو اشتراک</em> را کليک کنيد.',
	'WATCHED_FORUMS'			=> 'انجمن هاي نظارتي',
	'WATCHED_TOPICS'			=> 'مبحث هاي نظارتي',
	'WRONG_ACTIVATION'			=> 'کد تاييد داده شده توسط شما هيجچ گونه هماهنگي با پايگاه داده ها ندارد.',

	'YOUR_DETAILS'				=> 'شما فعال شديد',
	'YOUR_FOES'					=> 'دشمنان شما',
	'YOUR_FOES_EXPLAIN'			=> 'براي حذف نام هاي کاربري روي آنها کليک کرده سپس برروي ارسال کليک کنيد.',
	'YOUR_FRIENDS'				=> 'دوستان شما',
	'YOUR_FRIENDS_EXPLAIN'		=> 'براي حذف نام هاي کاربري آنها را انخاب کرده و روي <b>ارسال</b> کليک کنيد.',
	'YOUR_WARNINGS'				=> 'مراحل اخطار شما',

	'PM_ACTION' => array(
		'PLACE_INTO_FOLDER'	=> 'جايگاه درون فولدر',
		'MARK_AS_READ'		=> 'نشانه گذاري بعنوان خوانده شده',
		'MARK_AS_IMPORTANT'	=> 'نشانه گذاري پيغام',
		'DELETE_MESSAGE'	=> 'حذف پيغام'
	),
	'PM_CHECK' => array(
		'SUBJECT'	=> 'عنوان',
		'SENDER'	=> 'فرستنده',
		'MESSAGE'	=> 'پيغام',
		'STATUS'	=> 'وضعيت پيغام',
		'TO'		=> 'ارسال به'
	),
	'PM_RULE' => array(
		'IS_LIKE'		=> 'is like',
		'IS_NOT_LIKE'	=> 'is not like',
		'IS'			=> 'is',
		'IS_NOT'		=> 'is not',
		'BEGINS_WITH'	=> 'begins with',
		'ENDS_WITH'		=> 'ends with',
		'IS_FRIEND'		=> 'is friend',
		'IS_FOE'		=> 'is foe',
		'IS_USER'		=> 'is user',
		'IS_GROUP'		=> 'is in usergroup',
		'ANSWERED'		=> 'answered',
		'FORWARDED'		=> 'forwarded',
		'TO_GROUP'		=> 'to my default usergroup',
		'TO_ME'			=> 'to me'
	),


	'GROUPS_EXPLAIN'	=> 'گروه هاي کاربري در اين انجمن فعال است تا مديران بتوانند بهتر کاربران را دسته بندي و اداره کنند. بصورت پيشفرض شما در گروه تعيين شده اي هستيد, و آن گروه پيشفرض شماست. اين گروه ها حد واندازه هاي يک کاربر را مشخص و کاربران را از هم جدا مي کند,. شما غير از اين گروه مي توانيد به گروه هاي فعال ديگر بپيونديد.توجه کنيد که سطح دسترسي گروه ها با هم متفاوت است.',
	'GROUP_LEADER'		=> 'رهبري',
	'GROUP_MEMBER'		=> 'کاربري',
	'GROUP_PENDING'		=> 'عضويت هاي معلق',
	'GROUP_NONMEMBER'	=> 'Non-memberships',
	'GROUP_DETAILS'		=> 'جزئيات گروه',

	'NO_LEADER'		=> 'هيچ گروه رهبري موجود نيست',
	'NO_MEMBER'		=> 'هيچ گروه کاربري موجود نيست',
	'NO_PENDING'	=> 'No pending memberships',
	'NO_NONMEMBER'	=> 'No non-member groups',
));

?>