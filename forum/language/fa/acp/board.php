<?php
/**
*
* acp_board [farsi]
*
* @package language
* @version $Id: board.php 8554 2008-05-15 13:29:14Z Kellanved $
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

// Board Settings
$lang = array_merge($lang, array(
	'ACP_BOARD_SETTINGS_EXPLAIN'	=> 'در این قسمت شما می توانید ساختار بنیانی انجمن خود را تعیین نمایید, توجه نمایید که نام و توضیح مناسبی برای انجمن خود برگزینید, و همچنین به تنظیمات دیگر از جمله موقعیت زمانی و موقعیت زمانی نیز توجه فرمایید.',
	'CUSTOM_DATEFORMAT'	=> 'سفارشی…',
	'DEFAULT_DATE_FORMAT'	=> 'حالت تاريخ',
	'DEFAULT_DATE_FORMAT_EXPLAIN'	=> 'حالت زماني شبيه يک کد PHP <code>تاريخ</code> نقش ايفا مي کند.',
	'DEFAULT_LANGUAGE'	=> 'زبان پيشفرض',
	'DEFAULT_STYLE'	=> 'استايل پيشفرض',
	'DISABLE_BOARD'	=> 'غيرفعال کردن بورد',
	'DISABLE_BOARD_EXPLAIN'	=> 'این قسمت انجمن را برای کاربران غیرقابل دسترس و غیرفعال می سازد. در صورتی که دوست داشته باشید می توانید یک پیغام کوتاه (255 کاراکتر) برای نمایش معین نمایید.',
	'OVERRIDE_STYLE'	=> 'باطل کردن قالب کاربر',
	'OVERRIDE_STYLE_EXPLAIN'	=> 'جايگرين کردن قالب کاربران بجاي پيشفرض.',
	'SITE_DESC'	=> 'شرح سايت',
	'SITE_NAME'	=> 'نام سايت',
	'SYSTEM_DST'	=> 'فعال کردن زمان تابستاني/<abbr title="Daylight Saving Time">DST</abbr>',
	'SYSTEM_TIMEZONE'	=> 'موقعيت زماني سيستم',
	'WARNINGS_EXPIRE'	=> 'مدت زمان بقاي اخطار',
	'WARNINGS_EXPIRE_EXPLAIN'	=> 'تعداد روزهایی که پیش از پایان یافتن اتوماتیک اخطار از پیشینه کاربر مورد نظر سپری خواهد شد.',
));

// Board Features
$lang = array_merge($lang, array(
	'ACP_BOARD_FEATURES_EXPLAIN'	=> 'از اينجا شما مي توانيد فعال/غيرفعال کنيد چندي از سيماهاي بورد.',

	'ALLOW_ATTACHMENTS'	=> 'فعال بودن پيوست ها',
	'ALLOW_BIRTHDAYS'	=> 'فعال بودن متوليدن',
	'ALLOW_BIRTHDAYS_EXPLAIN'	=> 'فعال بودن ثبت تاريخ تولد و نمايش سن در مشخصات. لطفا در نظر داشته باشيد که ليست متولدين در فهرست بورد تحت تاثير تنظيمات بارگذاري ديگري است.',
	'ALLOW_BOOKMARKS'	=> 'فعال بودن نشانه گذاري مباحث',
	'ALLOW_BOOKMARKS_EXPLAIN'	=> 'کاربر اجازه انبار کردن نشانه گذاري شخصي داشته باشد.',
	'ALLOW_BBCODE'	=> 'فعال بودن BBCode',
	'ALLOW_FORUM_NOTIFY'	=> 'فعال بودن اشتراک در انجمن ها',
	'ALLOW_NAME_CHANGE'	=> 'فعال بودن ویرایش نام کاربری',
	'ALLOW_NO_CENSORS'	=> 'فعال بودن غیرفعال کردن سانسور کلمات',
	'ALLOW_NO_CENSORS_EXPLAIN'	=> 'کاربران می توانند سانسور کلمات برای پست ها و پیغام های خصوصی را غیرفعال نمایند.',
	'ALLOW_PM_ATTACHMENTS'	=> 'فعال بودن پیوست ها در پیغام های خصوصی',
	'ALLOW_SIG'	=> 'فعال بودن امضاها',
	'ALLOW_SIG_BBCODE'	=> 'فعال بودن BBCode در امضای کاربران',
	'ALLOW_SIG_FLASH'	=> 'فعال بودن استفاده از تگ  <code>[FLASH]</code> در امضای کاربران',
	'ALLOW_SIG_IMG'	=> 'فعال بودن استفاده از تگ <code>[IMG]</code> در امضای کاربران',
	'ALLOW_SIG_LINKS'	=> 'فعال بودن بکارگیری لینک ها در امضای کاربران',
	'ALLOW_SIG_LINKS_EXPLAIN'	=> 'چنانچه تگ BBCode <code>[URL]</code> غیر فعال شده باشد ، تنظیم اتوماتیک URL ها غیرفعال می شود.',
	'ALLOW_SIG_SMILIES'	=> 'فعال بودن بکارگیری شکلک ها در امضای کاربران',
	'ALLOW_SMILIES'	=> 'فعال بودن شکلک ها',
	'ALLOW_TOPIC_NOTIFY'	=> 'فعال بودن اشتراک در مبحث',
	'BOARD_PM'	=> 'پیغام های خصوصی',
	'BOARD_PM_EXPLAIN'	=> 'فعال بودن یا غیرفعال بودن پیغام های خصوصی برای همه کاربران.',
));

// Avatar Settings
$lang = array_merge($lang, array(
	'ACP_AVATAR_SETTINGS_EXPLAIN'	=> 'نماد ها معمولا کوچک هستند, آنها تصاوير منحصر بفردي هستند که پيوسته به يک کاربرند. معمولا نمادها در زير نام هاي کاربري در قسمت مشاهده مباحث قابل رويت هستند( در برخي استايلها ). از اين جا شما مي توانيد چگونگي تعيين نماد توسط کاربران را تنظيم کنيد. لطفا در نظر داشته باشید که دایرکتوری تعیین شده در زیر باید نوشتنی ( براساس chmod ) و موجود باشد. همچنین در نظر داشته باشید که تعیین حد اکثر حجم نماد فقط برای نماد های آپلودی قابل تحمیل است و بر روی نماد های قرار گرفته توسط لینک های خارجی هیچ تاثیری ندارد.',//If avartars enabled (,m,o,c,.,naribbph,p)i-n-v-e-r-s-e i-t

	'ALLOW_LOCAL'	=> 'فعال بودن گالری نماد',
	'ALLOW_REMOTE'	=> 'فعال بودن وارد کردن نماد',
	'ALLOW_REMOTE_EXPLAIN'	=> 'دادن لینک به نماد از سایت دیگر.',
	'ALLOW_UPLOAD'	=> 'فعال بودن آپلود نماد',
	'AVATAR_GALLERY_PATH'	=> 'مسیر گالری نماد',
	'AVATAR_GALLERY_PATH_EXPLAIN'	=> 'مسير زير مي بايست بر پايه ريشه phpBB باشد, مثال. <samp>images/avatars/gallery</samp>.',
	'AVATAR_STORAGE_PATH'	=> 'مسير انبار نماد ها',
	'AVATAR_STORAGE_PATH_EXPLAIN'	=> 'مسير زير مي بايست بر پايه ريشه phpBB باشد, مثال. <samp>images/avatars/upload</samp>.',
	'MAX_AVATAR_SIZE'	=> 'حداکثر ابعاد نماد',
	'MAX_AVATAR_SIZE_EXPLAIN'	=> 'عرض x ارتفاع بر کمیت پیکسل.',
	'MAX_FILESIZE'	=> 'حد اکثر حجم نماد',
	'MAX_FILESIZE_EXPLAIN'	=> 'برای آپلود فایل نماد.',
	'MIN_AVATAR_SIZE'	=> 'حداقل ابعاد نماد',
	'MIN_AVATAR_SIZE_EXPLAIN'	=> 'عرض x ارتفاع بر کمیت پیکسل.',
));

// Message Settings
$lang = array_merge($lang, array(
	'ACP_MESSAGE_SETTINGS_EXPLAIN'	=> 'در این قسمت شما می توانید تنظیمات پیشفرض برای همه قسمت های پیغام های خصوصی را تغییر دهید.',

	'ALLOW_BBCODE_PM'	=> 'فعال بودن BBCode در پیغام های خصوصی',
	'ALLOW_FLASH_PM'	=> 'فعال بودن بکارگیری تگ <code>[FLASH]</code>',
	'ALLOW_FLASH_PM_EXPLAIN'	=> 'اين قسمت قرارگيري فايل هاي فلش را در پيغام هاي خصوصي ميسر مي کند, اگر از اينجا تنظيم شود, همچنين بايد در سطوح دسترسي نيز تعريف شود.',
	'ALLOW_FORWARD_PM'	=> 'فعال بودن فوروارد پیغام های خصوصی',
	'ALLOW_IMG_PM'	=> 'فعال بودن استفاده از تگ <code>[IMG]</code>',
	'ALLOW_MASS_PM'	=> 'فعال بودن ارسال پیغام های خصوصی به کاربران و گروهای متعدد',
	'ALLOW_PRINT_PM'	=> 'فعال بودن نمایش چاپ در پیغام های خصوصی',
	'ALLOW_QUOTE_PM'	=> 'فعال بودن نقل قولها در پیغام خصوصی',
	'ALLOW_SIG_PM'	=> 'فعال بودن امضا در پیغام های خصوصی',
	'ALLOW_SMILIES_PM'	=> 'فعال بودن شکلک ها در پیغام های خصوصی',
	'BOXES_LIMIT'	=> 'فعال بودن پیغام های خصوصی در هر محفظه',
	'BOXES_LIMIT_EXPLAIN'	=> 'کاربران نمي توانند بيشر از اين تعداد در هر باکس پيغام هاي خصوصي دريافت کنند. چنانچه مي خواهيد دريافت پيغام هاي خصوصي نامحدود باشد مقدار را روي 0 قرار دهيد.',
	'BOXES_MAX'	=> 'حداکثر فولدرهای پیغام های خصوصی',
	'BOXES_MAX_EXPLAIN'	=> 'بوسیله پیشفرض کاربران می توانند تعداد زیادی فولدر برای پیغام های خصوصی ایجاد نمایند.',
	'ENABLE_PM_ICONS'	=> 'فعال بودن انتخاب آیکون های مبحث برای پیغام های خصوصی',
	'FULL_FOLDER_ACTION'	=> 'اقدام پيشفرض براي پوشه هاي پرشده',
	'FULL_FOLDER_ACTION_EXPLAIN'	=> 'اقدام پیشفرض برای پوشه های پرشده هر کاربر که بصورت خوکار انجام می شود. یک استثنا برای " پیغام های ارسال شده " این است که اقدام پیشفرض حذف پیغام های قدیمی است.',
	'HOLD_NEW_MESSAGES'	=> 'نگاهداری پیغام های جدید',
	'PM_EDIT_TIME'	=> 'مدت زمان ویرایش',
	'PM_EDIT_TIME_EXPLAIN'	=> 'حداکثر مدت زمان ويرايش پيغام هاي خصوصي که پيش از اين به مقصد نرسيده اند. براي غيرفعال کردن اين وضعيت عدد 0 را تعريف کنيد.',
));

// Post Settings
$lang = array_merge($lang, array(
	'ACP_POST_SETTINGS_EXPLAIN'	=> 'از اينجا شما مي توانيد همه تنظيمات پيشفرض براي ارسال پست را تعيين کنيد.',
	'ALLOW_POST_LINKS'	=> 'فعال بودن لينک ها در پستها / پيغام هاي خصوصي',
	'ALLOW_POST_LINKS_EXPLAIN'	=> 'چنانچه تگ BBCode <code>[URL]</code> غیر فعال شده باشد ، تنظیم اتوماتیک URL ها غیرفعال می شود.',
	'ALLOW_POST_FLASH'	=> 'فعال بودن استفاده از تگ BBCode برای فایل های Flash در پست ها ',
	'ALLOW_POST_FLASH_EXPLAIN'	=> 'در صورتي که تگ <code>[FLASH]</code> غير فعال شود ، استعمال فايل هاي فلش در پست ها غير ممکن است. لطفا سطوح دسترسي کاربراني را که قصد داريد  آنها را مجاز به استفاده فايل هاي فلش کنيد ، بازنويسي نماييد.',

	'BUMP_INTERVAL'	=> 'فاصله بامپ',
	'BUMP_INTERVAL_EXPLAIN'	=> 'تعداد دقيقه ها ، ساعت ها و روزها باي دستيابي به توانايي بامپ مبحث.',
	'CHAR_LIMIT'	=> 'حداکثر کاراکتر ها در هر پست',
	'CHAR_LIMIT_EXPLAIN'	=> 'تعداد کاراکتر هاي مجاز دورن پست. با تعريف عدد 0 اين خصيصه نامحدود مي گردد.',
	'DISPLAY_LAST_EDITED'	=> 'نمايش اطلاعات آخرين زمان ويرايش',
	'DISPLAY_LAST_EDITED_EXPLAIN'	=> 'در صورتي که مي خواهيد اطلاعات آخرين ويرايش يک پست قابل رويت باشد ، با اين گزينه موافقت کنيد.',
	'EDIT_TIME'	=> 'حداکثر زمان ويرايش',
	'EDIT_TIME_EXPLAIN'	=> 'حداکثر زمان مجاز براي ويرايش يک پست. براي غير فعال کردن اين حالت ، 0 را تعيين کتيد.',
	'FLOOD_INTERVAL'	=> 'فاصله زماني',
	'FLOOD_INTERVAL_EXPLAIN'	=> 'ثانيه هايي که يک کار مي بايست بين ارسال پيغام هاي جديد صبر کند. براي مجاز کردن کاربران براي عبور از اين ، سطوح دسترسي شان را تغيير دهيد.',
	'HOT_THRESHOLD'	=> 'رسيدن به مبحث محبوب',
	'HOT_THRESHOLD_EXPLAIN'	=> 'پست هايي که نياز است مبحث بعنوان " محبوب " تعريف شود. براي غيرفعال کردن مباحث محبوب ، عدد 0 را تعريف کنيد.',
	'MAX_POLL_OPTIONS'	=> 'حداکثر تعداد گزينه هاي نظر سنجي',
	'MAX_POST_FONT_SIZE'	=> 'حداکثر اندازه فونت در هر پست',
	'MAX_POST_FONT_SIZE_EXPLAIN'	=> 'حداکثر اندازه فونت در يک پوست. براي داشتن اندازه نامحدود در هر پست ، عدد 0 را تعريف کنيد.',
	'MAX_POST_IMG_HEIGHT'	=> 'حد اکثر ارتفاع تصوير در هر پست',
	'MAX_POST_IMG_HEIGHT_EXPLAIN'	=> 'حداکثر ارتفاع يک تصوير/فايل فلش براي ارسال پست. 0 را براي نامحدود کردن ارتفاع تعريف کنيد.',
	'MAX_POST_IMG_WIDTH'	=> 'هر اکثر عرض تصوير در هر پست',
	'MAX_POST_IMG_WIDTH_EXPLAIN'	=> 'حداکثر عرض يک تصوير/فايل فلش براي ارسال پست. 0 را براي نامحدود کردن عرض تعريف کنيد',
	'MAX_POST_URLS'	=> 'حد اکثر تعداد لينک ها در هر پست',
	'MAX_POST_URLS_EXPLAIN'	=> 'هر اکثر تعداد لينک ها در هر پست. براي تعيين بي نهايت عدد 0 را وارد کنيد.',
	'POSTING'	=> 'ارسال پست',
	'POSTS_PER_PAGE'	=> 'پست ها در هر صفحه',
	'QUOTE_DEPTH_LIMIT'	=> 'حداکثر تعداد نقل قول هاي تو در تو در هر پست',
	'QUOTE_DEPTH_LIMIT_EXPLAIN'	=> 'بيشترين تعداد مجاز براي ايجاد نقل قول هاي تو در تو. با تعريف عدد 0 اين خصيصه نامحدود مي شود.',
	'SMILIES_LIMIT'	=> 'حداکثر شکلکها در هر پست',
	'SMILIES_LIMIT_EXPLAIN'	=> 'حداکثر تعداد شکلک ها در هر پست. براي تعريف به صورت نامحدود ، عدد 0 را تنظيم کتيد.',
	'TOPICS_PER_PAGE'	=> 'مباحث در هر صفحه',
));

// Signature Settings
$lang = array_merge($lang, array(
	'ACP_SIGNATURE_SETTINGS_EXPLAIN'	=> 'در اين قسمت شما مي توانيد همه تنظيمات پيشفرض براي امضاها را مستقر کنيد.',

	'MAX_SIG_FONT_SIZE'	=> 'حد اکثر اندازه فونت امضا',
	'MAX_SIG_FONT_SIZE_EXPLAIN'	=> 'حداکثر اندازه فونت در امضاي کاربران. 0 را براي نامحدود کردن اندازه ها تعريف کنيد.',
	'MAX_SIG_IMG_HEIGHT'	=> 'حد اکثر ارتفاع تصوير امضا',
	'MAX_SIG_IMG_HEIGHT_EXPLAIN'	=> 'حداکثر ارتفاع يک تصوير/فايل فلش براي بکارگیری در امضاها. 0 را براي نامحدود کردن ارتفاع تعريف کنيد.',
	'MAX_SIG_IMG_WIDTH'	=> 'حد اکثر عرض تصوير در امضا',
	'MAX_SIG_IMG_WIDTH_EXPLAIN'	=> 'حداکثر عرض يک تصوير/فايل فلش براي بکارگیری در امضاها. 0 را براي نامحدود کردن عرض تعريف کنيد.',
	'MAX_SIG_LENGTH'	=> 'حداکثر امتداد امضا',
	'MAX_SIG_LENGTH_EXPLAIN'	=> 'حداکثر تعداد کاراکترها در امضا.',
	'MAX_SIG_SMILIES'	=> 'حداکثر شکلک ها در امضا',
	'MAX_SIG_SMILIES_EXPLAIN'	=> 'حد اکثر تعداد شکلک هاي مجاز در امضاي کاربران. 0 را براي استفاده از شکلک ها بصورت نامحدود ، تعريف کنيد.',
	'MAX_SIG_URLS'	=> 'حداکثر لينک ها در امضا',
	'MAX_SIG_URLS_EXPLAIN'	=> 'حداکثر تعداد لينک ها در امضاي کاربران. 0 را براي بکارگيري لينک ها بصورت نامحدود، تعريف کنيد.',
));

// Registration Settings
$lang = array_merge($lang, array(
	'ACP_REGISTER_SETTINGS_EXPLAIN'	=> 'از اينجا شما مي توانيد تنظيمات عضويت و نقل قول هاي مشخصات را تعريف کنيد.',

	'ACC_ACTIVATION'	=> 'فعال سازي حساب',
	'ACC_ACTIVATION_EXPLAIN'	=> 'مشخص کردن این گزینه برای بورد ، در صورتی که فعال سازی در دستور کار است ، الزامی می باشد.شما همچنین می توانید بطور کامل عضویت های جدید را غیرفعال کنید.',
	'ACC_ADMIN'	=> 'توسط مدیر',
	'ACC_DISABLE'	=> 'غیرفعال',
	'ACC_NONE'	=> 'هیچ',
	'ACC_USER'	=> 'توسط کاربر',
//	'ACC_USER_ADMIN'			=> 'کاربر + مدير',
	'ALLOW_EMAIL_REUSE'	=> 'فعال بودن استعمال دوباره ايميل',
	'ALLOW_EMAIL_REUSE_EXPLAIN'	=> 'کاربران مختلف مي توانند با استفاده از آدرس ايميل مشابه عضو شوند.',
	'COPPA'	=> 'COPPA',
	'COPPA_FAX'	=> 'شماره فکس COPPA',
	'COPPA_MAIL'	=> 'آدرس پستي COPPA',
	'COPPA_MAIL_EXPLAIN'	=> 'اين آدرسي است که والدين فرم هاي عضويت COPPA را به آن ارسال خواهد کرد.',
	'ENABLE_COPPA'	=> 'فعال بودن COPPA',
	'ENABLE_COPPA_EXPLAIN'	=> 'این برای کاربرانی است که آنها 13 ساله یا بیشتر هستند. این حالت برای موافقت با قانون COPPA در ایالات متحده امریکاست. چنانچه COPPA برای گروه های مشخصی غیرفعال شود ، قابل رویت نخواهد بود',
	'MAX_CHARS'	=> 'حداکثر',
	'MIN_CHARS'	=> 'حد اقل',
	'NO_AUTH_PLUGIN'	=> 'پلاگين مناسب و صحيح يافت نشد.',
	'PASSWORD_LENGTH'	=> 'طول کلمه عبور',
	'PASSWORD_LENGTH_EXPLAIN'	=> 'حد اقل و حداکثر کاراکتر ها برای کلمه عبور.',
	'REG_LIMIT'	=> 'تلاش های جستجو',
	'REG_LIMIT_EXPLAIN'	=> 'حداکثر تلاش کاربران براي ورود تا پيش از ظاهر شدن کد تاييد بصري.',
	'USERNAME_ALPHA_ONLY'	=> 'فقط ابتدايي (Alphanumeric)',
	'USERNAME_ALPHA_SPACERS'	=> 'ابتدايي (Alphanumeric) و فاصله انداز ها',
	'USERNAME_ASCII'	=> 'ASCII (يونيکد بين المللي نيست)',
	'USERNAME_LETTER_NUM'	=> 'هر حرف و عدد',
	'USERNAME_LETTER_NUM_SPACERS'	=> 'هر حرف, عدد, و فاصله انداز',
	'USERNAME_CHARS'	=> 'اندازه کاراکتر های نام کاربری',
	'USERNAME_CHARS_ANY'	=> 'هر کاراکتر',
	'USERNAME_CHARS_EXPLAIN'	=> 'منحصر کردن حالت کاراکتر هاي قابل استفاده در نام هاي کاربري, فاصله انداز ها شامل, -, +, _, [ and ] هستند.',
	'USERNAME_LENGTH'	=> 'طول نام کاربری',
	'USERNAME_LENGTH_EXPLAIN'	=> 'حد اقل و حداکثر تعداد کاراکتر هاي قابل استفاده براي نام هاي کاربري.',
));

// Visual Confirmation Settings
$lang = array_merge($lang, array(
	'ACP_VC_SETTINGS_EXPLAIN'	=> 'از اينجا شما مي توانيد پيشفرض هاي کد تاييد بصري و تنظيمات CAPTCHA را تنظيم کنيد.',

	'CAPTCHA_GD'	=> 'GD CAPTCHA',
	'CAPTCHA_GD_FOREGROUND_NOISE'	=> 'پارازيت در نماي جلوي GD CAPTCHA',
	'CAPTCHA_GD_EXPLAIN'	=> 'GDرا براي بکارگيري CAPTCHAي پيشرفته بکار ببريد.',
	'CAPTCHA_GD_FOREGROUND_NOISE_EXPLAIN'	=> 'از پارازيت در نماي جلو براي مشکل تر کردن GD CAPTCHA استفاده کنيد.',
	'CAPTCHA_GD_X_GRID'	=> 'پارازيت در نماي پشت GD CAPTCHA (محور-xها)',
	'CAPTCHA_GD_X_GRID_EXPLAIN'	=> 'از این گزینه برای مشکل تر کردن  CAPTCHA بر پایه GD استفاده کنید.برای غیرفعال کردن پارازیت ها در پس زمینه محور x ها ، 0 را تعریف کنید.',
	'CAPTCHA_GD_Y_GRID'	=> 'پارازيت در نماي پشت GD CAPTCHA (محور-yها)',
	'CAPTCHA_GD_Y_GRID_EXPLAIN'	=> 'از این گزینه برای مشکل تر کردن  CAPTCHA بر پایه GD استفاده کنید.برای غیرفعال کردن پارازیت ها در پس زمینه محور y ها ، 0 را تعریف کنید.',

	'CAPTCHA_PREVIEW_MSG'	=> 'تنظيمات شما براي کد تاييد بصري ذخيره نشده است. اين تنها يک پيش نمايش است.',
	'CAPTCHA_PREVIEW_EXPLAIN'	=> 'CAPTCHA با تنظیمات صورت گرفته کنونی قابل رویت است. برای بروزآوری از کلید " پیش نمایش" استفاده کنید. در نظر داشته باشد که captcha ها بصورت تصادفی هستند و در هربار تفاوت هایی در آنها وجود دارد.',
	'VISUAL_CONFIRM_POST'	=> 'فعال بودن کد تاييد بصوري براي ارسال پست مهمانها',
	'VISUAL_CONFIRM_POST_EXPLAIN'	=> 'کاربران ناگزير به ورود کد نمايش داده شده بصورت تصادفي باشند.',
	'VISUAL_CONFIRM_REG'	=> 'فعال بودن کد تاييد بصري براي عضويت ها',
	'VISUAL_CONFIRM_REG_EXPLAIN'	=> 'کاربران در هنگام عضويت ناگزير به ورود يک کد مشابه با کد به نمايش شده درون تصوير باشند.',
));

// Cookie Settings
$lang = array_merge($lang, array(
	'ACP_COOKIE_SETTINGS_EXPLAIN'	=> 'این جزییات برای تعریف داده های قابل بکارگیری برای ارسال کوکی ها به مرورگرهای کاربران است. قطعا قالب اولیه تنظیمات کوکی مناسب است. چنانچه شما نیاز به اعمال تغییرات در آن دارید، اطلاعات غلط باعث می شود که از ورود کاربران جلوگیری شود.',

	'COOKIE_DOMAIN'	=> 'دامنه کوکي',
	'COOKIE_NAME'	=> 'نام کوکي',
	'COOKIE_PATH'	=> 'مسير کوکي',
	'COOKIE_SECURE'	=> 'محافظ کوکي',
	'COOKIE_SECURE_EXPLAIN'	=> 'در صورتی که سرور شما با SSL اجرا شده است، چنانچه این گزینه روی " غیرفعال" تنظیم شده است آنرا به " فعال "  تغییر دعید. درصورتی که این گزینه روی " فعال " تعریف شده باشد و سرور با SSL اجرا نشده باشد، نتایج سرور در مدت ریدایرکت ها با مشکل روبرو خواهد شد.',
	'ONLINE_LENGTH'	=> 'View online time span',
	'ONLINE_LENGTH_EXPLAIN'	=> 'Number of minutes after which inactive users will not appear in “Who is online” listings. The higher this value the greater is the processing required to generate the listing.',
	'SESSION_LENGTH'	=> 'امتداد Session',
	'SESSION_LENGTH_EXPLAIN'	=> 'Session پس از گذشت اين زمان برحسب ثانيه ، به انقضا مي رسند.',
));

// Load Settings
$lang = array_merge($lang, array(
	'ACP_LOAD_SETTINGS_EXPLAIN'	=> 'Here you can enable and disable certain board functions to reduce the amount of processing required. On most servers there is no need to disable any functions. However on certain systems or in shared hosting environments it may be beneficial to disable capabilities you do not really need. You can also specify limits for system load and active sessions beyond which the board will go offline.',

	'CUSTOM_PROFILE_FIELDS'	=> 'فیلد های سفارشی مشخصات',
	'LIMIT_LOAD'	=> 'حدود بارگذاري سيستم',
	'LIMIT_LOAD_EXPLAIN'	=> 'If the system’s 1-minute load average exceeds this value the board will automatically go offline. A value of 1.0 equals ~100% utilisation of one processor. This only functions on UNIX based servers and where this information is accessible. The value here resets itself to 0 if phpBB was unable to get the load limit.',
	'LIMIT_SESSIONS'	=> 'وسعت session ها',
	'LIMIT_SESSIONS_EXPLAIN'	=> 'If the number of sessions exceeds this value within a one minute period the board will go offline. Set to 0 for unlimited sessions.',
	'LOAD_CPF_MEMBERLIST'	=> 'مجاز بودن استايل ها براي نمايش فيلدهاي سفارشي مشخصات در ليست کاربران',
	'LOAD_CPF_VIEWPROFILE'	=> 'نمايش نتايج فيلد هاي سفارشي مشخصات در صفحه مشخصات کاربران',
	'LOAD_CPF_VIEWTOPIC'	=> 'نمايش نتايج فيلد هاي سفارشي مشخصات در صفحات مباحث',
	'LOAD_USER_ACTIVITY'	=> 'نمايش فعاليت هاي کاربران',
	'LOAD_USER_ACTIVITY_EXPLAIN'	=> 'نمايش مباحث/انجمن هاي فعال هر کاربر در مشخصات و کنترل پنل. اين حالت نياز به غيرفعال شدن براي انجمن هاي با بالاي يک ميليون پست دارد.',
	'RECOMPILE_STYLES'	=> 'Recompile stale style components',
	'RECOMPILE_STYLES_EXPLAIN'	=> 'Check for updated style components on filesystem and recompile.',
	'YES_ANON_READ_MARKING'	=> 'فعال بودن نشانه گذاري مبحث براي مهمان ها',
	'YES_ANON_READ_MARKING_EXPLAIN'	=> 'Stores read/unread status information for guests. If disabled posts are always read for guests.',
	'YES_BIRTHDAYS'	=> 'فعال بودن لیست متولدین',
	'YES_BIRTHDAYS_EXPLAIN'	=> 'If disabled the birthday listing is no longer displayed. To let this setting take effect the birthday feature need to be enabled too.',
	'YES_JUMPBOX'	=> 'فعال بودن نمايش جعبه پرش',
	'YES_MODERATORS'	=> 'فعال بودن نمايش مديران انجمن',
	'YES_ONLINE'	=> 'فعال بودن ليست کاربران آنلاين',
	'YES_ONLINE_EXPLAIN'	=> 'فعال بودن اطلاعات آنلاين بودن کاربر در فهرست, انجمن ها و مباحث.',
	'YES_ONLINE_GUESTS'	=> 'فعال بودن به ليست در آمدن مهمان ها در مشاهده آنلاين ها',
	'YES_ONLINE_GUESTS_EXPLAIN'	=> 'فعال بودن مشاهده اطلاعات کاربران مهمان درمشاهده آنلاين ها.',
	'YES_ONLINE_TRACK'	=> 'فعال بودن مشاهده اطلاعات آنلاين/آفلاين بودن کاربران',
	'YES_ONLINE_TRACK_EXPLAIN'	=> 'نمايش پيغام آنلاين بودن کاربران در مشخصات و صفحات مبحث ها.',
	'YES_POST_MARKING'	=> 'Enable dotted topics',
	'YES_POST_MARKING_EXPLAIN'	=> 'Indicates whether user has posted to a topic.',
	'YES_READ_MARKING'	=> 'فعال بودن نشانه گذاري مبحث از جانب سرور',
	'YES_READ_MARKING_EXPLAIN'	=> 'ذخيره سازي وضعيت خوانده شده/خوانده نشده در پايگاه داده ها پيش از يک کوکي.',
));

// Auth settings
$lang = array_merge($lang, array(
	'ACP_AUTH_SETTINGS_EXPLAIN'	=> 'phpBB از پلاگین ها و ماژول های سندیت پشتیبانی می کند. اینجا شما می توانید چگونگی سندیت کاربران هنگام ورود به بورد را تنظیم کنید. در حالت پیشفرض پلاگین های DB, LDAP وApache تعبیه شده اند. همه روش ها به اطلاعات اضافه نیازی ندارند و تنها اطلاعات را در فیلدهای مربوط به روش انتخاب شده ثبت کنید.',

	'AUTH_METHOD'	=> 'انتخاب يک روش سنديت',

	'APACHE_SETUP_BEFORE_USE'	=> 'شما ناگزیرید که سندیت apache را پیش از تعویض phpBB به این حالت سندیت ، نصب کنید. لطفا در نظر داشته بشید که نام کاربری apache بایستی مشابه نام کاربری شما در phpBB باشد. سندیت apache تنها می تواند با mod_php بکارگرفته شود ( نه با یک نسخه CGI ) و safe_mode غیرفعال باشد',

	'LDAP_DN'	=> 'اساس LDAP <var>dn</var>',
	'LDAP_DN_EXPLAIN'	=> 'This is the Distinguished Name, locating the user information, e.g. <samp>o=My Company,c=US</samp>.',
	'LDAP_EMAIL'	=> 'نشان ايميل LDAP',
	'LDAP_EMAIL_EXPLAIN'	=> 'Set this to the name of your user entry e-mail attribute (if one exists) in order to automatically set the e-mail address for new users. Leaving this empty results in empty e-mail address for users who log in for the first time.',
	'LDAP_INCORRECT_USER_PASSWORD'	=> 'Binding to LDAP server failed with specified user/password.',
	'LDAP_NO_EMAIL'	=> 'The specified e-mail attribute does not exist.',
	'LDAP_NO_IDENTITY'	=> 'قادر به يافتن يک هويت ورود براي %s نيست.',
	'LDAP_PASSWORD'	=> 'کلمه عبور LDAP',
	'LDAP_PASSWORD_EXPLAIN'	=> 'Leave blank to use anonymous binding. Else fill in the password for the above user.  Required for Active Directory Servers. <strong>WARNING:</strong> This password will be stored as plain text in the database visible to everybody who can access your database or who can view this configuration page.',
	'LDAP_PORT'	=> 'پورت سرور LDAP',
	'LDAP_PORT_EXPLAIN'	=> 'Optionally you can specify a port which should be used to connect to the LDAP server instead of the default port 389.',
	'LDAP_SERVER'	=> 'نام سرور LDAP',
	'LDAP_SERVER_EXPLAIN'			=> 'If using LDAP this is the hostname or IP address of the LDAP server. Alternatively you can specify an URL like ldap://hostname:port/',
	'LDAP_UID'						=> 'LDAP <var>uid</var>',
	'LDAP_UID_EXPLAIN'				=> 'This is the key under which to search for a given login identity, e.g. <var>uid</var>, <var>sn</var>, etc.',
	'LDAP_USER'						=> 'LDAP user <var>dn</var>',
	'LDAP_USER_EXPLAIN'				=> 'Leave blank to use anonymous binding. If filled in phpBB uses the specified distinguished name on login attempts to find the correct user, e.g. <samp>uid=Username,ou=MyUnit,o=MyCompany,c=US</samp>. Required for Active Directory Servers.',
	'LDAP_USER_FILTER'				=> 'LDAP user filter',
	'LDAP_USER_FILTER_EXPLAIN'		=> 'Optionally you can further limit the searched objects with additional filters. For example <samp>objectClass=posixGroup</samp> would result in the use of <samp>(&amp;(uid=$username)(objectClass=posixGroup))</samp>',
));

// Server Settings
$lang = array_merge($lang, array(
	'ACP_SERVER_SETTINGS_EXPLAIN'	=> 'Here you define server and domain dependant settings. Please ensure the data you enter is accurate, errors will result in e-mails containing incorrect information. When entering the domain name remember it does include http:// or other protocol term. Only alter the port number if you know your server uses a different value, port 80 is correct in most cases.',

	'ENABLE_GZIP'	=> 'فعال بودن فشرده ساز GZip',
	'ENABLE_GZIP_EXPLAIN'	=> 'Generated content will be compressed prior to sending it to the user. This can reduce network traffic but will also increase CPU usage on both server and client side.',
	'FORCE_SERVER_VARS'	=> 'Force server URL settings',
	'FORCE_SERVER_VARS_EXPLAIN'	=> 'If set to yes the server settings defined here will be used in favour of the automatically determined values.',
	'ICONS_PATH'	=> 'مسير ذخيره سازي آيکون هاي پست',
	'ICONS_PATH_EXPLAIN'	=> 'مسير درون دايرکتوري phpBB شما, مثال. <samp>images/icons</samp>.',
	'PATH_SETTINGS'	=> 'تنظيمات مسير',
	'RANKS_PATH'	=> 'مسير ذخيره سازي تصوير رتبه',
	'RANKS_PATH_EXPLAIN'	=> 'مسير درون دايرکتوري phpBB شما, مثال. <samp>images/ranks</samp>.',
	'SCRIPT_PATH'	=> 'مسير اسکريپت',
	'SCRIPT_PATH_EXPLAIN'	=> 'مسيري که phpBB شما در آن مستقر شده است, مثال. <samp>/phpBB3</samp>.',
	'SERVER_NAME'	=> 'نام دامنه',
	'SERVER_NAME_EXPLAIN'	=> 'نام دامنه اي که اين بورد بر روي آن اجرا شده است (مثال: <samp>www.example.com</samp>).',
	'SERVER_PORT'	=> 'پورت سرور',
	'SERVER_PORT_EXPLAIN'	=> 'پورتي که سرور شما بر روي آن در حال تداوم است, معمولا اين پورت 80 است, تنها در صورتي که متمايز است تغيير دهيد.',
	'SERVER_PROTOCOL'	=> 'پروتوکل سرور',
	'SERVER_PROTOCOL_EXPLAIN'	=> 'این گزینه تنها زمانی بکار گرفته می شود که به آن نیاز باشد. در صورتی که خالییست یا تحمیل نشده است ازتنظیمات  کوکی ها تعمیین کنید.(<samp>http://</samp> يا <samp>https://</samp>)',
	'SERVER_URL_SETTINGS'	=> 'تنظيمات URL سرور',
	'SMILIES_PATH'	=> 'مسير ذخيره سازي شکلک ها',
	'SMILIES_PATH_EXPLAIN'	=> 'مسير درون دايرکتوري phpBB شما, مثال. <samp>images/smilies</samp>.',
	'UPLOAD_ICONS_PATH'	=> 'مسير ذخيره سازي آيکون پسوندها',
	'UPLOAD_ICONS_PATH_EXPLAIN'	=> 'مسير درون دايرکتوري phpBB شما, مثال. <samp>images/upload_icons</samp>.',
));

// Security Settings
$lang = array_merge($lang, array(
	'ACP_SECURITY_SETTINGS_EXPLAIN'	=> 'از اينجا شما مي توانيد تنظيمات Session ها و نقل قول هاي ورود را تعريف کنيد.',

	'ALL'	=> 'All',
	'ALLOW_AUTOLOGIN'	=> 'فعال بودن ورود هاي ماندگار',
	'ALLOW_AUTOLOGIN_EXPLAIN'	=> 'با تعريف اين گزينه روي " بلي " کاربران در هر بازديد بصورت خودکار وارد بورد  مي شوند.',
	'AUTOLOGIN_LENGTH'	=> 'دوام ورود ماندگار (با روز)',
	'AUTOLOGIN_LENGTH_EXPLAIN'	=> 'تعداد روز هايي که ورود ماندگار از بين مي رود. عدد 0 را براي غيرفعال کردن وارد کنيد.',
	'BROWSER_VALID'	=> 'مرورگر معتبر',
	'BROWSER_VALID_EXPLAIN'	=> 'Enables browser validation for each session improving security.',
	'CHECK_DNSBL'	=> 'Check IP against DNS Blackhole List',
	'CHECK_DNSBL_EXPLAIN'	=> 'If enabled the user’s IP address is checked against the following DNSBL services on registration and posting: <a href="http://spamcop.net">spamcop.net</a>, <a href="http://dsbl.org">dsbl.org</a> and <a href="http://www.spamhaus.org">www.spamhaus.org</a>. This lookup may take a while, depending on the server’s configuration. If slowdowns are experienced or too many false positives reported it is recommended to disable this check.',
	'CLASS_B'	=> 'A.B',
	'CLASS_C'	=> 'A.B.C',
	'EMAIL_CHECK_MX'	=> 'چک کردن دامنه ايميل براي براي يافتن رکورد MX صحيح',
	'EMAIL_CHECK_MX_EXPLAIN'	=> 'در صورتي که فعال شود, ايميل هايي که در هنگام عضويت يا در مشخصات وارد شده اند براي داشتن رکورد صحيح MX بررسي مي شوند. اگر غير فعال شود ، در هنگام عضويت يا در مشخصات کاربران مي توانند ايميل نادرستي وارد کنند و ايميل وارد شده براي صحيح بودن بررسي نخواهد شد.',
	'FORCE_PASS_CHANGE'	=> 'تحميل تغيير کلمه عبور',
	'FORCE_PASS_CHANGE_EXPLAIN'	=> 'کاربران بعد از تعداد روزي ثبت مي شود مي بايست کلمه عبورشان را تعويض کنند . براي غير فعال  کردن اين حالت عدد 0 را وارد کنيد.',
	'FORM_TIME_MAX'	=> 'حداکثر زمان براي ارسال پست ها',
	'FORM_TIME_MAX_EXPLAIN'	=> 'اين زماني است که کاربر مجبور است تا پيش از آن فرم را ارسال کند. براي غير فعال کردن -1 را وارد کنيد. توجه اشته باشيد که صرف نظر از اين تنظيم ، در صورت به انتها رسيدن session فرم قادر به اشتباه شدن است.',
	'FORM_SID_GUESTS'	=> 'Tie forms to guest sessions',
	'FORM_SID_GUESTS_EXPLAIN'	=> 'If enabled, the form token issued to guests will be session-exclusive. This can cause problems with some ISPs.',
	'FORWARDED_FOR_VALID'	=> '<var>X_FORWARDED_FOR</var> معتبر شده در هدر',
	'FORWARDED_FOR_VALID_EXPLAIN'	=> 'Session فقط زمانی تداوم دارند که <var>X_FORWARDED_FOR</var> در هدر ارسال و با درخواست قبلی هم پایه ارسال شود. تحریم ها با استفاده از <var>X_FORWARDED_FOR</var> برای IP های مخالف بررسی می شوند.',
	'IP_VALID'	=> 'Session تاييد اعتبار IP',
	'IP_VALID_EXPLAIN'	=> 'مشخص نمودن اینکه چه تعداد از کاربران بتوانند IP را برای معتبر سازی یک session بکار گیرند. تطبیق <samp>همه</samp>  کامل ، <samp>A.B.C</samp> نخست x.x.x ، <samp>A.B</samp> نخست  x.x ، <samp>هیچ</samp> غیرفعال کردن بررسی. در آدرس های IPv6 <samp>A.B.C</samp> 4 بلوک مقدماتی  و <samp>A.B</samp>3 بلوک مقدماتی را تطبیق می کند.',
	'MAX_LOGIN_ATTEMPTS'	=> 'حد اکثر دفعات تلاش براي ورود',
	'MAX_LOGIN_ATTEMPTS_EXPLAIN'	=> 'اگر پس از گذشتن اين تعداد ورود ناموفق مي بايست ورودتان را بصورت بصري تاييد کنيد (کد تاييد بصري).',
	'NO_IP_VALIDATION'	=> 'هيچ',
	'NO_REF_VALIDATION'				=> 'None',
	'PASSWORD_TYPE'	=> 'در هم پيچيدگي کلمه عبور',
	'PASSWORD_TYPE_EXPLAIN'	=> 'مشخص نمودن چگونگی ترکیب کلمه های عبور ، نیاز به تعیین یا تغییر یک گزینه دارد ..',
	'PASS_TYPE_ALPHA'	=> 'بايد حاوي حروف و اعداد باشند',
	'PASS_TYPE_ANY'	=> 'احتياج نيست',
	'PASS_TYPE_CASE'	=> 'بايد موارد در هم آميخته باشند',
	'PASS_TYPE_SYMBOL'	=> 'بايد شامل symbol ها باشند',
	'REF_HOST'						=> 'Only validate host',
	'REF_PATH'						=> 'Also validate path',
	'REFERER_VALID'					=> 'Validate Referer',
	'REFERER_VALID_EXPLAIN'			=> 'If enabled, the referer of POST requests will be checked against the host/script path settings. This may cause issues with boards using several domains and or external logins.',
	'TPL_ALLOW_PHP'	=> 'فعال بودن php در قالب ها',
	'TPL_ALLOW_PHP_EXPLAIN'	=> 'اگر این گزینه فعال باشد، بیانیه های <code>PHP</code> and <code>INCLUDEPHP</code> قابل شناسایی و تجزیه در قالب ها هستند.',
));

// Email Settings
$lang = array_merge($lang, array(
	'ACP_EMAIL_SETTINGS_EXPLAIN'	=> 'این اطلاعات فقط برای ارسال ایمیل به کاربران شما مورد استفاده قرار می گیرد. لطفا مطمئن باشیدکه آدرس ایمیل تعیین شده توسط شما صحیح است، هر پیغام خارج شده یا نرسیده ممکن است به آن آدرس ایمیل ارسال گردد. چنانچه هاست شما به سرویس ایمیل (برپایه PHP)  مجهز نشده است شما می توانید بجای آن مستقیما از SMTP استفاده کنید..',

	'ADMIN_EMAIL'	=> 'Return e-mail address',
	'ADMIN_EMAIL_EXPLAIN'	=> 'This will be used as the return address on all e-mails, the technical contact e-mail address. It will always be used as the <samp>Return-Path</samp> and <samp>Sender</samp> address in e-mails.',
	'BOARD_EMAIL_FORM'	=> 'کاربران ايميل ها را توسط بورد ارسال کنند',
	'BOARD_EMAIL_FORM_EXPLAIN'	=> 'بجاي مشاهده ايميل کاربران ، از طريق بورد براي آنها ايميل ارسال مي کنند.',
	'BOARD_HIDE_EMAILS'	=> 'مخفي نمودن آدرس هاي ايميل',
	'BOARD_HIDE_EMAILS_EXPLAIN'	=> 'اين تابع آدرس هاي ايميل را بصورت سراسري مخفي مي کند.',
	'CONTACT_EMAIL'	=> 'آدرس ايميل ارتباطي',
	'CONTACT_EMAIL_EXPLAIN'	=> 'این آدرس زمانی قابل استفاده خواهد بود که یک موضوع برای ارتباط احتیاج باشد، برای مثال : اسپم، بازده نادرست، و غیره. این همیشه  در <samp>فرم</samp> و <samp>پاسخ به</samp> بکار گرفته خواهد شد.',
	'EMAIL_FUNCTION_NAME'	=> 'نام تابع ايميل',
	'EMAIL_FUNCTION_NAME_EXPLAIN'	=> 'ازتابع ایمیل برای ارسال ایمیل ها بواسطه PHP استفاده می شود.',
	'EMAIL_PACKAGE_SIZE'	=> 'حجم بسته ايميل',
	'EMAIL_PACKAGE_SIZE_EXPLAIN'	=> 'اين تعداد حد اکثر ايميل هاي خارج شونده با يک بسته است. اين تنظيم در پيغام هاي در صف قابل رويت است; در صورتي که مشکلي مبني بر نرسيدن با خبر سازها و اطلاعيه ها داريد ، مقدار را به 0 تغيير دهيد.',
	'EMAIL_SIG'	=> 'امضاي ايميل',
	'EMAIL_SIG_EXPLAIN'	=> 'اين پيغام ضميمه همه ايميل هاي ارسال شونده در انجمن خواهد شد.',
	'ENABLE_EMAIL'	=> 'فعاليت پهناي ايميل ها در انجمن',
	'ENABLE_EMAIL_EXPLAIN'	=> 'در صورت تعريف گزينه غير فعال ، به هيچ وجه ايميلي توسط اين بورد ارسال نخواهد شد.',
	'SMTP_AUTH_METHOD'	=> 'روش سنديت براي SMTP',
	'SMTP_AUTH_METHOD_EXPLAIN'	=> 'فقط مواقعي بکارگيري شود که نام کاربري و کلمه عبور قرار داده شده اند, در صورتي که در انتخاب روش مردد هستيد ، از مهيا کننده سوال کنيد.',
	'SMTP_CRAM_MD5'	=> 'CRAM-MD5',
	'SMTP_DIGEST_MD5'	=> 'DIGEST-MD5',
	'SMTP_LOGIN'	=> 'LOGIN',
	'SMTP_PASSWORD'	=> 'کلمه عبور',
	'SMTP_PASSWORD_EXPLAIN'	=> 'تنها در صورتي که سرور STMP شما احتياج دارد ، يک کلمه عبور وارد کنيد.',
	'SMTP_PLAIN'	=> 'PLAIN',
	'SMTP_POP_BEFORE_SMTP'	=> 'POP-BEFORE-SMTP',
	'SMTP_PORT'	=> 'پورت سرور SMTP',
	'SMTP_PORT_EXPLAIN'	=> 'تنها زماني که مي دانيد سرور STMP بر روي پورت ديگري است ، اين را تغيير دهيد.',
	'SMTP_SERVER'	=> 'آدرس سرور SMTP',
	'SMTP_SETTINGS'	=> 'تنظيمات SMTP',
	'SMTP_USERNAME'	=> 'نام کاربري SMTP',
	'SMTP_USERNAME_EXPLAIN'	=> 'اگر سرور STMP شما نياز دارد ، فقط يک نام کاربري تعيين کنيد.',
	'USE_SMTP'	=> 'بکارگيري سرور SMTP براي ايميل',
	'USE_SMTP_EXPLAIN'	=> 'اگر شما می خواهید یا مجبور هستید برای ارسال از یک سرور نامیده شده بجای توابع محلی mail استفاده کنید ، گزینه " بلی " را انتخاب کنید.',
));

// Jabber settings
$lang = array_merge($lang, array(
	'ACP_JABBER_SETTINGS_EXPLAIN'	=> 'در اینجا شما توانایی فعال سازی و کنترل  Jabber برای خبر واطلاع رسانی فوری را دارید. Jabber یک پروتوکل با سورس باز است و بنابراین قابل استفاده برای عموم می باشد. تعدادی از سرورهای Jabber دربردارنده دروازه ها ( gateway ) یا نقل و انتقالات هستند که شما را مجاز به ارتباط با کاربران بر روی شبکه های ارتباطی مغایر می کند. بر روی همه سرور ها همه نقل و انتقالات و تغییرات در پروتوکل ها ارائه نمی شود و از تغییرات در پروتوکل توسط عملیات ، می تواند جلوگیری شود.',

	'JAB_ENABLE'	=> 'فعال بودن Jabber',
	'JAB_ENABLE_EXPLAIN'	=> 'فعال بودن جهت بکارگيري پيام رسان Jabber.',
	'JAB_GTALK_NOTE'	=> 'لطفا در نظر داشته باشید که GTalk کار نخواهد کرد، زیرا تابع <samp>dns_get_record</samp> نتوانست  پیدا شود. این تابع بر روی PHP4 فعال نمی باشد و نیز بر روی پلتفرم ویندوز قابل اجرا نیست. در حال حاضر بر روی سیستم های برپایه BSD و مشمول Mac OS کار نمی کند.',
	'JAB_PACKAGE_SIZE'	=> 'حجم بسته Jabber',
	'JAB_PACKAGE_SIZE_EXPLAIN'	=> 'این تعداد پیغام های ارسال شده در یک بسته است. اگر عدد 0 تنظیم شود پیغام ها بلافاصله ارسال شده و قابل ماندگاری برای ارسال های بعدی نیستند.',
	'JAB_PASSWORD'	=> 'کلمه عبور Jabber',
	'JAB_PORT'	=> 'پورت Jabber',
	'JAB_PORT_EXPLAIN'	=> 'خالي رها کنيد ، چنانچه مي دانيد اين پورت 5222 نيست  آنرا تعريف کنيد.',
	'JAB_SERVER'	=> 'سرور Jabber',
	'JAB_SERVER_EXPLAIN'	=> 'براي ديدن ليست سرور ها %sjabber.org%s را مشاهده کنيد.',
	'JAB_SETTINGS_CHANGED'	=> 'تنظيمات Jabber با موفقيت بروز شد.',
	'JAB_USE_SSL'	=> 'بکارگيري SSL براي اتصال',
	'JAB_USE_SSL_EXPLAIN'	=> 'چنانچه اتصال ایمن مورد آزمایش مثبت قرار گرفته باشد ، اگر پورت Jabber  عدد 5222 باشد می بیسات 5223 جایگزین شود.',
	'JAB_USERNAME'	=> 'نام کاربري Jabber',
	'JAB_USERNAME_EXPLAIN'	=> 'يک نام کاربري عضو شده را تعريف کنيد. اين نام کاربري براي صحت بررسي نخواهد شد.',
));

?>