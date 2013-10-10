<?php
/**
*
* acp_forums [Farsi]
*
* @package language
* @version $Id: forums.php 8479 2008-03-29 00:22:48Z naderman $
* @copyright (c) 2005 phpBB Group
* @Language file Persian edited by phpBBIran.com - Majid
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

// Forum Admin
$lang = array_merge($lang, array(
	'AUTO_PRUNE_DAYS'	=> 'هرس کردن اوتوماتيک پست هاي کهنه شده',
	'AUTO_PRUNE_DAYS_EXPLAIN'	=> 'تعداد روزهاي پس از آخرين پست پيش از حذف مبحث.',
	'AUTO_PRUNE_FREQ'	=> 'تناوب هرس اوتوماتيک',
	'AUTO_PRUNE_FREQ_EXPLAIN'	=> 'مدت بين روزهاي روي داد هرس.',
	'AUTO_PRUNE_VIEWED'	=> 'هرس اوتوماتيک پست هاي بازديد شده کهنه',
	'AUTO_PRUNE_VIEWED_EXPLAIN'	=> 'تعداد روزهاي آخرين بازديد از مبحث ، پيش از حذف مبحث.',

	'COPY_PERMISSIONS'	=> 'کپي کردن سطح دسترسي از',
	'COPY_PERMISSIONS_ADD_EXPLAIN'	=> 'در صورت انتخاب یک انجمن از اینجا، این انجمن سطوح دسترسی مشابه انجمن انتخاب شده خواهد داشت. در صورتی که انجمنی انتخاب نگردد، تا هنگامی که سطوح دسترسی مورد نظر تنظیم نشده باشند،انجمن قابل نمایش نخواهد بود..',
	'COPY_PERMISSIONS_EDIT_EXPLAIN'	=> 'در صورت انتخاب یک انجمن ، این انجمن سطح دسترسی مشابه انجمن انتخاب شده خواهد داشت . این عملکرد هر سطح دسترسی تعیین شده پیش از این را دوباره تعیین می کند ( مشابه انجمن انتخاب شده ).در صورت انتخاب نکردن یک انجمن ، سطوح دسترسی کنونی نگهداری می شوند .',
	'CREATE_FORUM'	=> 'ايجاد انجمن جديد',

	'DECIDE_MOVE_DELETE_CONTENT'	=> 'حذف موجودي يا انتقال به انجمن',
	'DECIDE_MOVE_DELETE_SUBFORUMS'	=> 'حذف زير انجمن ها يا انتقال به',
	'DEFAULT_STYLE'	=> 'قالب پيشفرض',
	'DELETE_ALL_POSTS'	=> 'حذف پست ها',
	'DELETE_SUBFORUMS'	=> 'حذف زير انجمن ها و پست ها',
	'DISPLAY_ACTIVE_TOPICS'	=> 'فعال کردن مبحث هاي کاري',
	'DISPLAY_ACTIVE_TOPICS_EXPLAIN'		=> 'با تعريف "بلي" مباحث فعال در انجمن هاي انتخاب شده در زير اين شاخه قابل نمايش خواهند بود.',

	'EDIT_FORUM'	=> 'ويرايش انجمن',
	'ENABLE_INDEXING'	=> 'فعال بودن به فهرست در آوردن جستجو',
	'ENABLE_INDEXING_EXPLAIN'	=> 'در صورتی که بلی را انتخاب کنید پست های این انجمن برای جستجو Index خواهند شد.',
	'ENABLE_POST_REVIEW'	=> 'فعال بودن بازبيني مبحث ها',
	'ENABLE_POST_REVIEW_EXPLAIN'	=> 'در صورت انتخاب "بلي" کاربران مي توانند پست هاي خودشان را بازبيني نمايند همچنين اگر کاربران ديگر هم پست ارسال کنند قابل بازبيني است. اين تابع مي بايست براي انجمن هاي گفتگو غير فعال باشد.',
	'ENABLE_RECENT'	=> 'نمايش مبحث هاي فعال',
	'ENABLE_RECENT_EXPLAIN'	=> 'در صورتی که بلی را انتخاب کنید مبحث های این انجمن در لیست مباحث فعال قرار خواهند گرفت.',
	'ENABLE_TOPIC_ICONS'	=> 'فعال بودن آيکون براي مبحث',

	'FORUM_ADMIN'	=> 'مديريت انجمن',
	'FORUM_ADMIN_EXPLAIN'				=> 'در phpBB3 هر انجمن می تواند زیر انجمن های نامحدودی را در برگیرد و شما می توانید تعیین کنید که آیا در هریک، ارسال پست میسر باشد یا خیر. از اینجا شما می توانید انجمن ها را اضافه، ویرایش، حذف، قفل، لغو قفل کرده و کنترل بخش های اضافه مشخص شده را در دست بگیرید. چنانچه پست ها و مباحث شما از همزمان سازی خارج شده باشند شما می توانید آنها را دوباره همزمان سازی کنید.<strong> شما نیاز دارید که سطوح دسترسی مناسبی را برای انجمن های تازه تاسیس، کپی یا تنظیم کنید تا آنها قابل رویت باشند.</strong>',
	'FORUM_AUTO_PRUNE'	=> 'فعال بودن هرس اوتوماتيک',
	'FORUM_AUTO_PRUNE_EXPLAIN'			=> 'Prunes the forum of topics, set the frequency/age parameters below.',
	'FORUM_CREATED'	=> 'انجمن با موفقیت ایجاد شد.',
	'FORUM_DATA_NEGATIVE'				=> 'پارامتر هاي فرآيند هرس نمي توانند منفي باشند.',
	'FORUM_DESC_TOO_LONG'	=> 'توضیحات انجمن طولانی است, این بخش می بایست کمتر از 4000 کاراکتر باشد.',
	'FORUM_DELETE'	=> 'حذف انجمن',
	'FORUM_DELETE_EXPLAIN'	=> 'فرم زير به شما اجازه حذف يک انجمن را مي دهد. در صورتي که انجمن داراي پست است شما مي توانيد مباحث ( يا انجمن ها ) را در جايي که مي خواهيد نگهداري کنيد.',
	'FORUM_DELETED'	=> 'انجمن با موفقيت حذف شد.',
	'FORUM_DESC'	=> 'توضيحات',
	'FORUM_DESC_EXPLAIN'				=> 'هر کد HTML به همان صورت قابل رويت است ( کدهاي HTML عمل نمي کنند ).',
	'FORUM_EDIT_EXPLAIN'	=> 'فرم زير براي سفارشي کردن اين انجمن فعال شده است. لطفا تنظيمات مديريتي و کنترل پست ها و سطح دسترسي هر کاربر يا گروه کاربري را تعيين کنيد.',
	'FORUM_IMAGE'						=> 'تصوير انجمن',
	'FORUM_IMAGE_EXPLAIN'				=> 'مکان تصویر اضافی و همراه انجمن بايد برا اساس ريشه phpBB تعيين شود.',
	'FORUM_LINK_EXPLAIN'				=> 'آدرس کامل (شامل اين پيش نويس, مثال.: <samp>http://</samp>) براي تعيين مقصد پس از کليک کاربر روي انجمن از مثال روبرو بهره گيري نماييد, مثال.: <samp>http://www.phpbb.com/</samp>.',
	'FORUM_LINK_TRACK'					=> 'دنبال کردن انتقالي هاي لينک',
	'FORUM_LINK_TRACK_EXPLAIN'			=> 'شمارش تعداد دفعات کليک شده بر روي انجمن.',
	'FORUM_NAME'	=> 'نام انجمن',
	'FORUM_NAME_EMPTY'	=> 'شما می بایست یک نام برای انجمن تعیین نمایید.',
	'FORUM_PARENT'	=> 'انجمن پدر',
	'FORUM_PASSWORD'	=> 'کلمه عبور انجمن',
	'FORUM_PASSWORD_CONFIRM'	=> 'تاييد کلمه عبور انجمن',
	'FORUM_PASSWORD_CONFIRM_EXPLAIN'	=> 'فقط نياز به ثبت کلمه عبور وارد شده است.',
	'FORUM_PASSWORD_EXPLAIN'			=> 'تعريف يک کلمه عبور براي اين انجمن, بکارگيري سيستم سطح دسترسي در پيکربندي.',
	'FORUM_PASSWORD_UNSET'	=> 'حذف کلمه عبور انجمن',
	'FORUM_PASSWORD_UNSET_EXPLAIN'	=> 'در صورتی که قصد حذف نمودن کلمه عبور انجمن را دارید اینجا را کلیک کنید.',
	'FORUM_PASSWORD_OLD'				=> 'The forum password is using an old encryption and should be changed.',
	'FORUM_PASSWORD_MISMATCH'	=> 'کلمه های عبور وارد شده هماهنگ نمی باشند.',
	'FORUM_PRUNE_SETTINGS'	=> 'تنظيمات هرس کردن انجمن',
	'FORUM_RESYNCED'	=> 'انجمن "%s" انطباق زمانی دوباره یافت',
	'FORUM_RULES_EXPLAIN'	=> 'قوانین انجمن در هر صفحه انجمن تعیین شده قابل رویت است.',
	'FORUM_RULES_LINK'	=> 'لينک به قوانين انجمن',
	'FORUM_RULES_LINK_EXPLAIN'			=> 'شما مجازيد لينکي را براي هدايت به صفحه يا پستي که شامل قوانين انجمن است تعيين کتيد. اين گزينه متون تعيين شده براي قوانين انجمن را باطل مي سازد.',
	'FORUM_RULES_PREVIEW'	=> 'پیش نمایش قوانین انجمن',
	'FORUM_RULES_TOO_LONG'	=> 'قوانین انجمن باید کمتر از 4000 کاراکتر باشد.',
	'FORUM_SETTINGS'	=> 'تنظيمات انجمن',
	'FORUM_STATUS'	=> 'وضعيت انجمن',
	'FORUM_STYLE'	=> 'طرح انجمن',
	'FORUM_TOPICS_PAGE'	=> 'مباحث در هر صفحه',
	'FORUM_TOPICS_PAGE_EXPLAIN'			=> 'در صورتي که 0 تعيين نشود ، تنظيمات مرتب سازي پيشفرض مباحث در هر صفحه باطل مي شود.',
	'FORUM_TYPE'	=> 'نوع انجمن',
	'FORUM_UPDATED'	=> 'اطلاعات انجمن با موفقيت بروز شد.',

	'FORUM_WITH_SUBFORUMS_NOT_TO_LINK'		=> 'You want to change a postable forum having subforums to a link. Please move all subforums out of this forum before you proceed, because after changing to a link you are no longer able to see the subforums currently connected to this forum.',

	'GENERAL_FORUM_SETTINGS'	=> 'تنظيمات اصلي انجمن',

	'LINK'	=> 'لينک',
	'LIST_INDEX'	=> 'ليست زير انجمن در فهرست انجمن پدر',
	'LIST_INDEX_EXPLAIN'		=> 'Displays this forum on the index and elsewhere as a link within the legend of its parent-forum if the parent-forum’s “List subforums in legend” option is enabled.',
	'LIST_SUBFORUMS'			=> 'List subforums in legend',
	'LIST_SUBFORUMS_EXPLAIN'	=> 'Displays this forum’s subforums on the index and elsewhere as a link within the legend if their “List subforum in parent-forum’s legend” option is enabled.',
	'LOCKED'	=> 'قفل شده',

	'MOVE_POSTS_NO_POSTABLE_FORUM'	=> 'The forum you selected for moving the posts to is not postable. Please select a postable forum.',
	'MOVE_POSTS_TO'	=> 'انتقال پست ها به',
	'MOVE_SUBFORUMS_TO'	=> 'انتقال زير انجمن ها به',

	'NO_DESTINATION_FORUM'			=> 'شما انجمني براي انتقال محتوا انتخاب نکرده ايد.',
	'NO_FORUM_ACTION'				=> 'No action defined for what happens with the forum content.',
	'NO_PARENT'	=> 'بدون پدر',
	'NO_PERMISSIONS'	=> 'کپي نکردن سطوح دسترسي',
	'NO_PERMISSION_FORUM_ADD'		=> 'شما داراي سطح دسترسي ضروري براي افزودن انجمن نيستيد.',
	'NO_PERMISSION_FORUM_DELETE'	=> 'شما داراي سطح دسترسي ضروري براي حذف انجمن ها نيستيد.',

	'PARENT_IS_LINK_FORUM'		=> 'پدر انتخاب شده يک انجمن لينک است. انجمن هاي لينک قادر به نگهداري انجمن هاي ديگر نمي باشند, لطفا پدر را يک شاخه يا يک انجمن استاندارد انتخاب کنيد.',
	'PARENT_NOT_EXIST'			=> 'پدر موجود نيست.',
	'PRUNE_ANNOUNCEMENTS'	=> 'هرس اطلاعيه ها',
	'PRUNE_STICKY'	=> 'هرس مهم ها',
	'PRUNE_OLD_POLLS'	=> 'هرس نظرسنجي هاي قديمي',
	'PRUNE_OLD_POLLS_EXPLAIN'	=> 'Removes topics with polls not voted in for post age days.',

	'REDIRECT_ACL'	=> 'هم اکنون شما مي توانيد %sسطح دسترسي%s اين انجمن را تعيين کنيد.',

	'SYNC_IN_PROGRESS'			=> 'همزمان سازي انجمن',
	'SYNC_IN_PROGRESS_EXPLAIN'	=> 'Currently resyncing topic range %1$d/%2$d.',

	'TYPE_CAT'	=> 'شاخه',
	'TYPE_FORUM'	=> 'انجمن',
	'TYPE_LINK'	=> 'لينک',
	
	'UNLOCKED'	=> 'باز شده',
));

?>