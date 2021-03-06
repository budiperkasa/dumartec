<?php
/**
*
* mcp.php [Sindhi]
*
* @package language
* @version $Id: $
* @copyright (c) 2008 phpBB Group
* @author 2008-05-12 - phpBB Group
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
	'ACTION'	=> 'عمل',
	'ACTION_NOTE'	=> 'عمل/ياداشت',
	'ADD_FEEDBACK'	=> 'فيڊ بيڪ جو اضافو',
	'ADD_FEEDBACK_EXPLAIN'	=> 'جيڪڏهن توهان ان تي ڪابه رپورٽ شامل ڪرڻ چاهيو ٿا ته هن فارم کي ڀريو، صرف سادي تحرير لکو،; HTML, BBCode, etc. جي اجازت نه آهي.',
	'ADD_WARNING'	=> 'تنبيهه جو اضافو',
	'ADD_WARNING_EXPLAIN'	=> 'هن رُڪن کي تنبيهه موڪلڻ جي لاءِ هن سوالنامي کي ڀريو، صرف سادي تحرير لکو; HTML, BBCode, etc. جي اجازت نه آهي.',
	'ALL_ENTRIES'	=> 'سڀئي انٽريز',
	'ALL_NOTES_DELETED'	=> 'سڀئي رُڪنيتي ياداشتون ڪاميابيءَ سان ختم ٿي ويون',
	'ALL_REPORTS'	=> 'سڀئي رپورٽون',
	'ALREADY_REPORTED'	=> 'هيءُ تحرير پهرين به رپورٽ ٿي چُڪي آهي',
	'ALREADY_WARNED'	=> 'هن تحرير لاءِ پهرين ئي هڪ تنبيهه جاري ڪئي وئي آهي',
	'APPROVE'	=> 'منظور ڪريو',
	'APPROVE_POST'	=> 'تحرير منظور ڪريو',
	'APPROVE_POST_CONFIRM'	=> 'ڇا توهان واقعي هن تحرير کي منظور ڪرڻ چاهيو ٿا؟',
	'APPROVE_POSTS'	=> 'تحريرون منظور ڪريو',
	'APPROVE_POSTS_CONFIRM'	=> 'ڇا توهان واقعي هنن چونڊيل تحريرن کي منظور ڪرڻ چاهيو ٿا؟',
	'CANNOT_MOVE_SAME_FORUM'	=> 'توهان موضوع کي ڪنهن اهڙي فورم ۾ منتقل نه ٿا ڪري سگهو جتي اهو پهريان کان موجود آهي ـ',
	'CANNOT_WARN_ANONYMOUS'	=> 'توهان رجسٽرڊ نه ٿيل مهمان رُڪنن کي تنبيهه نه ٿا ڪري سگهو',
	'CANNOT_WARN_SELF'	=> 'توهان پنهنجي پاڻ کي تنبيهه نه ٿا ڪري سگهو',
	'CAN_LEAVE_BLANK'	=> 'هن کي خالي ڇڏي سگهجي ٿو',
	'CHANGE_POSTER'	=> 'پوسٽر جي تبديلي ',
	'CLOSE_REPORT'	=> 'رپورٽ کي بند ڪريو',
	'CLOSE_REPORT_CONFIRM'	=> 'ڇا توهان واقعي چونڊيل رپورٽ کي بند ڪرڻ چاهيو ٿا؟',
	'CLOSE_REPORTS'	=> 'رپورٽن کي بند ڪريو',
	'CLOSE_REPORTS_CONFIRM'	=> 'ڇا توهان واقعي چونڊيل رپورٽن کي بند ڪرڻ چاهيو ٿا؟',
	'DELETE_POSTS'	=> 'تحريرون ختم ڪريو',
	'DELETE_POSTS_CONFIRM'	=> 'ڇا توهان واقعي هي تحريون ختم ڪرڻ چاهيو ٿا ؟',
	'DELETE_POST_CONFIRM'	=> 'ڇا توهان واقعي هيءُ تحرير ختم ڪرڻ چاهيو ٿا ؟',
	'DELETE_REPORT'	=> 'رپورٽ ختم ڪريو',
	'DELETE_REPORT_CONFIRM'	=> 'ڇا توهان واقعي چونڊيل رپورٽ کي ختم ڪرڻ چاهيو ٿا؟',
	'DELETE_REPORTS'	=> 'رپورٽن کي ختم ڪريو',
	'DELETE_REPORTS_CONFIRM'	=> 'ڇا توهان واقعي چونڊيل رپورٽن کي ختم ڪرڻ چاهيو ٿا؟',
	'DELETE_SHADOW_TOPIC'	=> 'شيڊو موضوعن کي ختم ڪريو',
	'DELETE_TOPICS'	=> 'چونڊيل موضوعن کي ختم ڪريو',
	'DELETE_TOPICS_CONFIRM'	=> 'چا توهان واقعي چونڊيل موضوعن کي ختم ڪرڻ چاهيو ٿا ؟',
	'DELETE_TOPIC_CONFIRM'	=> 'ڇا توهان واقعي چونڊيل موضوع کي ختم ڪرڻ چاهيو ٿا؟',
	'DISAPPROVE'	=> 'نامنظور',
	'DISAPPROVE_REASON'	=> 'نامنظوريءَ جا سبب',
	'DISAPPROVE_POST'	=> 'تحرير نامنظور ',
	'DISAPPROVE_POST_CONFIRM'	=> 'ڇا توهان واقعي هيءَ تحرير نامنظور ڪرڻ چاهيو ٿا؟',
	'DISAPPROVE_POSTS'	=> 'تحريرون نامنظور ڪريو',
	'DISAPPROVE_POSTS_CONFIRM'	=> 'ڇا توهان واقعي هنن تحريرون کي نامنظور ڪرڻ چاهيو ٿا؟',
	'DISPLAY_LOG'	=> 'پوين درج ٿيلن مان ڏيکاريو',
	'DISPLAY_OPTIONS'	=> 'ڏيکارڻ جا اختيار',
	'EMPTY_REPORT'	=> 'هن سبب کي چونڊڻ وقت وضاحت شامل ڪرڻ ضروري آهي',
	'EMPTY_TOPICS_REMOVED_WARNING'	=> 'ياد رهي ته هڪ يا وڌيڪ موضوع ڊيٽا بيس مان ختم ٿي ويا آهن ڇاڪاڻ ته اهي يا ته خالي هئا يا خالي ٿي چڪا هئا.',
	'FEEDBACK'	=> 'فيڊ بيڪ',
	'FORK'	=> 'نقل',
	'FORK_TOPIC'	=> 'موضوع نقل ڪريو',
	'FORK_TOPIC_CONFIRM'	=> 'ڇا توهان واقعي هن موضوع کي نقل ڪرڻ چاهيو ٿا؟',
	'FORK_TOPICS'	=> 'چونڊيل موضوع نقل ڪريو',
	'FORK_TOPICS_CONFIRM'	=> 'ڇا توهان واقعي چونڊيل موضوعن کي نقل ڪرڻ چاهيو ٿا؟؟',
	'FORUM_DESC'	=> 'تعريف ',
	'FORUM_NAME'	=> 'فورم جو نالو',
	'FORUM_NOT_EXIST'	=> 'چونڊيل فورم موجود نه آهي',
	'FORUM_NOT_POSTABLE'	=> 'چونڊيل فورم ۾ تحريرون نه ٿيون موڪلي سگهجن',
	'FORUM_STATUS'	=> 'فورم جي ڪيفيت',
	'FORUM_STYLE'	=> 'فورم جو انداز',
	'GLOBAL_ANNOUNCEMENT'	=> 'عام اعلانُ',
	'IP_INFO'	=> 'IP  ايڊريس جي معلومات',
	'IPS_POSTED_FROM'	=> ' IP ايڊريس جتان رُڪن تحرير موڪلي ',
	'LATEST_LOGS'	=> 'آخري  5 عمل',
	'LATEST_REPORTED'	=> 'آخري 5 رپورٽون',
	'LATEST_UNAPPROVED'	=> 'آخري 5 منظوري جون منتظر تحريرون',
	'LATEST_WARNING_TIME'	=> 'تازه ترين تنبيهه جيڪا جاري ڪئي وئي',
	'LATEST_WARNINGS'	=> 'آخري 5 تنبيهون',
	'LEAVE_SHADOW'	=> 'فورم ۾ موضوع جو سايو ڇڏيو',
	'LIST_REPORT'	=> '1 رپورٽ',
	'LIST_REPORTS'	=> '%d رپورٽون',
	'LOCK'	=> 'مقفل',
	'LOCK_POST_POST'	=> 'تحرير مقفل ڪريو',
	'LOCK_POST_POST_CONFIRM'	=> 'ڇا توهان هن تحرير جي ترميم کي ممنوع قرار ڏيڻ چاهيو ٿا؟',
	'LOCK_POST_POSTS'	=> 'چونڊيل تحريرون مقفل ڪريو',
	'LOCK_POST_POSTS_CONFIRM'	=> 'ڇا توهان واقعي چونڊيل تحريرن جي ترميم کي ممنوع قرار ڏيڻ چاهيو ٿا؟',
	'LOCK_TOPIC_CONFIRM'	=> 'ڇا توهان واقعي هن موضوع کي مقفل ڪرڻ چاهيو ٿا?',
	'LOCK_TOPICS'	=> 'چونڊيل موضوعن کي مقفل ڪريو',
	'LOCK_TOPICS_CONFIRM'	=> 'ڇا توهان چونڊيل موضوعن کي مقفل ڪرڻ چاهيو ٿا؟',
	'LOGS_CURRENT_TOPIC'	=> 'Currently viewing logs of:',
	'LOGIN_EXPLAIN_MCP'	=> 'هن فورم جي ايڊيٽنگ جي لاءِ توهان جو لاگ ان هجڻ ضروري آهي.',
	'LOGVIEW_VIEWTOPIC'	=> 'موضوع ڏسو',
	'LOGVIEW_VIEWLOGS'	=> 'موضوعن جو روزنامچو ڏسو',
	'LOGVIEW_VIEWFORUM'	=> 'فورم ڏسو',
	'LOOKUP_ALL'	=> 'Look up all IPs',
	'LOOKUP_IP'	=> ' Look up IP ',
	'MARKED_NOTES_DELETED'	=> 'Successfully removed all marked user notes.',
	'MCP_ADD'	=> 'تنبيهه جو اضافو ڪريو',
	'MCP_BAN'	=> 'پابندين جو نفاذ',
	'MCP_BAN_EMAILS'	=> 'برقي خطن تي پابندي',
	'MCP_BAN_IPS'	=> ' IPs تي پابندي',
	'MCP_BAN_USERNAMES'	=> 'رُڪن نالي تي پابندي',
	'MCP_LOGS'	=> 'ايڊيٽر جو روزنامچو',
	'MCP_LOGS_FRONT'	=> 'پهريون صفحو ',
	'MCP_LOGS_FORUM_VIEW'	=> 'فورم جو روزنامچو',
	'MCP_LOGS_TOPIC_VIEW'	=> 'موضوع جو روزنامچو',
	'MCP_MAIN'	=> 'پهريون صفحو ',
	'MCP_MAIN_FORUM_VIEW'	=> 'فورم ڏسو',
	'MCP_MAIN_FRONT'	=> 'پهريون صفحو',
	'MCP_MAIN_POST_DETAILS'	=> 'تحرير جو تفصيل',
	'MCP_MAIN_TOPIC_VIEW'	=> 'موضوع ڏسو',
	'MCP_MAKE_ANNOUNCEMENT'	=> 'تبديلي بطور ”اعلان“',
	'MCP_MAKE_ANNOUNCEMENT_CONFIRM'	=> 'ڇا توهان واقعي هن موضوع کي ”اعلان“۾ بدلڻ چاهيو ٿا؟؟',
	'MCP_MAKE_ANNOUNCEMENTS'	=> 'تبديلي بطور ”اعلانَ“',
	'MCP_MAKE_ANNOUNCEMENTS_CONFIRM'	=> 'ڇا توهان واقعي چونڊيل موضوعن کي ”اعلانن“ ۾ بدلڻ چاهيو ٿا؟',
	'MCP_MAKE_GLOBAL'	=> '”اعلان عام“ طور تبديلي',
	'MCP_MAKE_GLOBAL_CONFIRM'	=> 'ڇا توهان واقعي هن موضوع کي “اعلانِ عام” ۾ تبديل ڪرڻ چاهيو ٿا؟',
	'MCP_MAKE_GLOBALS'	=> '”عام اعلانَ“ طور تبدليلي',
	'MCP_MAKE_GLOBALS_CONFIRM'	=> 'ڇا توهان واقعي چونڊيل موضوعن کي ”عام اعلانن“۾ بدلڻ چاهيو ٿا؟',
	'MCP_MAKE_STICKY'	=> '”اهم ترين“ طور تبديلي',
	'MCP_MAKE_STICKY_CONFIRM'	=> 'ڇا توهان واقعي هن موضوع کي “اهم ترين” جو درجو ڏيڻ چاهيو ٿا',
	'MCP_MAKE_STICKIES'	=> '”اهم ترين “ طور تبديلي',
	'MCP_MAKE_STICKIES_CONFIRM'	=> 'ڇا توهان چونڊيل موضوعن کي ”اهم ترين“ طور تبديل ڪرڻ چاهيو ٿا؟',
	'MCP_MAKE_NORMAL'	=> '”عام موضوع“ طور تبديلي',
	'MCP_MAKE_NORMAL_CONFIRM'	=> 'ڇا توهان واقعي هن موضوع کي ”عام موضوع“ جي حيثيت ڏيڻ چاهيو ٿا؟',
	'MCP_MAKE_NORMALS'	=> '”عام موضوع“ طور تبديلي',
	'MCP_MAKE_NORMALS_CONFIRM'	=> 'ڇا توهان واقعي چونڊيل موضوعن کي “عام موضوع”جي حيثيت ڏيڻ چاهيو ٿا',
	'MCP_NOTES'	=> 'رُڪنيتي ياداشتون',
	'MCP_NOTES_FRONT'	=> 'پهريون صفحو',
	'MCP_NOTES_USER'	=> 'رُڪن جو تفصيل',
	'MCP_POST_REPORTS'	=> 'هن موضوع تي جاري ڪيل رپورٽون',
	'MCP_REPORTS'	=> 'شڪايت ڪيل تحريرون',
	'MCP_REPORT_DETAILS'	=> 'شڪايتن جا تفصيل',
	'MCP_REPORTS_CLOSED'	=> 'ڳجهيون شڪايتون',
	'MCP_REPORTS_CLOSED_EXPLAIN'	=> 'هيءَ تحريرن سان تعلق رکندڙ اهڙين سڀني رپورٽن جي فهرست آهي جن جو مسئلو حل ڪيو ويو آهي',
	'MCP_REPORTS_OPEN'	=> 'کليل شڪايتون',
	'MCP_REPORTS_OPEN_EXPLAIN'	=> 'هيءُ انهن سڀني شڪايتي تحريرن جي فهرست آهي جن جي باري ۾ اڃان تائين ڪو فيصلو نه ٿيو آهي.',
	'MCP_QUEUE'	=> 'ايڊيٽنگ قطار',
	'MCP_QUEUE_APPROVE_DETAILS'	=> 'تفصيلن جي منظوري ',
	'MCP_QUEUE_UNAPPROVED_POSTS'	=> 'منظوريءَ جو منتظم تحريرون',
	'MCP_QUEUE_UNAPPROVED_POSTS_EXPLAIN'	=> 'هي انهن سڀني تحريرن جي فهرست آهي جيڪي اشاعت کان پهرين منظوري جون منتظر آهن.',
	'MCP_QUEUE_UNAPPROVED_TOPICS'	=> 'منظوريءَ جا منتظر موضوع',
	'MCP_QUEUE_UNAPPROVED_TOPICS_EXPLAIN'	=> 'هي انهن موضوعن جي فهرست آهي جيڪي اشاعت کان پهرين منظوري جا منتظر آهن.',
	'MCP_VIEW_USER'	=> 'ڪنهن مخصوص رُڪن جون تنبيهون ڏسو',
	'MCP_WARN'	=> 'تنبيهون',
	'MCP_WARN_FRONT'	=> 'پهريون صفحو ',
	'MCP_WARN_LIST'	=> 'تنبيهن جي فهرست',
	'MCP_WARN_POST'	=> 'مخصوص تحرير جي لاءِ تنبيهه',
	'MCP_WARN_USER'	=> 'رُڪن کي تنبيهه ڪريو',
	'MERGE_POSTS'	=> 'تحريرن کي ضم ڪريو',
	'MERGE_POSTS_CONFIRM'	=> 'ڇا توهان واقعي چونڊيل تحريرن کي ضم ڪرڻ چاهيو ٿا؟',
	'MERGE_TOPIC_EXPLAIN'	=> 'هيٺ ڏنل فارم کي استعمال ڪندي توهان چونڊيل تحريرن کي هڪ ٻئي فورم ۾ ضم ڪري سگهو ٿا . هيءُ تحرير ٻيهر ترتيب نه ٿي سگهندي ۽ اهڙي طرح ئي ظاهر ٿيندي.<br />مهرباني ڪري لاڳاپيل فورم جي آئي ڊي لکو  یا فورم جي تلاش جي لاءِ ”موضوع چونڊيو“ تي ڪلڪ ڪريو',
	'MERGE_TOPIC_ID'	=> 'گهربل موضوع جو شناختي نمبر ',
	'MERGE_TOPICS'	=> 'موضوعن کي ضم ڪريو',
	'MERGE_TOPICS_CONFIRM'	=> 'ڇا توهان چونڊيل موضوعن کي ضم ڪرڻ چاهيو ٿا؟',
	'MODERATE_FORUM'	=> 'فورم جي ايڊيٽرشپ',
	'MODERATE_TOPIC'	=> 'موضوع جي ايڊيٽر شپ',
	'MODERATE_POST'	=> 'تحرير جي ايڊيٽر شپ',
	'MOD_OPTIONS'	=> 'ايڊيٽر جا اختيار',
	'MORE_INFO'	=> 'وڌيڪ معلومات',
	'MOST_WARNINGS'	=> 'رُڪن جن کي وڌيڪ تعداد ۾ تنبيهه ڪئي وئي ',
	'MOVE_TOPIC_CONFIRM'	=> 'ڇا توهان واقعي موضوع کي هڪ نئين فورم ۾ منتقل ڪرڻ چاهيو ٿا؟',
	'MOVE_TOPICS'	=> 'چونڊيل موضوعن کي منتقل ڪريو',
	'MOVE_TOPICS_CONFIRM'	=> 'ڇا توهان چونڊيل موضوعن کي هڪ نئين فورم ۾ منتقل ڪرڻ چاهيو ٿا؟',
	'NOTIFY_POSTER_APPROVAL'	=> 'تحرير لکندڙ کي منظوري جو اطلاع ڏنو وڃي؟',
	'NOTIFY_POSTER_DISAPPROVAL'	=> 'تحرير لکندڙ کي نامنظوري جو اطلاع ڏنو وڃي؟',
	'NOTIFY_USER_WARN'	=> 'رُڪن کي تنبيهه جو اطلاع ڏنو وڃي ؟',
	'NOT_MODERATOR'	=> 'توهان هن فورم جا ايڊيٽر ناهيو.',
	'NO_DESTINATION_FORUM'	=> 'مهرباني ڪري ڪنهن فورم کي حدف طور چونڊيو',
	'NO_DESTINATION_FORUM_FOUND'	=> 'حدف فورم دستياب ناهي',
	'NO_ENTRIES'	=> 'گهربل مدت ۾ روزنامچي ۾ ڪابه انٽري نه آهي.',
	'NO_FEEDBACK'	=> 'No feedback exists for this user.',
	'NO_FINAL_TOPIC_SELECTED'	=> 'تحريرن کي ضم ڪرڻ لاءِ هڪ موضوع کي حدف طور چونڊيو',
	'NO_MATCHES_FOUND'	=> 'ڪابه هڪجهڙائي نه ملي',
	'NO_POST'	=> 'ڪنهن رُڪن کي ان جي تحرير تي تنبيهه موڪلڻ لاءِ گهربل تحرير چونڊيو',
	'NO_POST_REPORT'	=> 'هن تحرير جي ڪابه شڪايت نه ڪئي وئي آهي.',
	'NO_POST_SELECTED'	=> 'هن عمل کي پورو ڪرڻ لاءِ گهٽ ۾ گهٽ هڪ تحرير چونڊڻ ضروري آهي.',
	'NO_REASON_DISAPPROVAL'	=> 'مهرباني ڪري نامنظوري جو ڪو معقول سبب لکو',
	'NO_REPORT'	=> 'ڪابه شڪايت نه ملي آهي',
	'NO_REPORTS'	=> 'ڪي به شڪايتون نه مليون آهن',
	'NO_REPORT_SELECTED'	=> 'هن عمل کي پورو ڪرڻ لاءِ گهٽ ۾ گهٽ هڪ شڪايت چونڊڻ ضروري آهي.',
	'NO_TOPIC_ICON'	=> 'ڪوبه ناهي',
	'NO_TOPIC_SELECTED'	=> 'هن عمل کي پورو ڪرڻ لاءِ گهٽ ۾ گهٽ هڪ موضوع چونڊڻ ضروري آهي.',
	'NO_TOPICS_QUEUE'	=> 'ڪوبه موضوع منظوريءَ جو منتظر ناهي ـ',
	'ONLY_TOPIC'	=> 'صرف موضوع “%s”',
	'OTHER_USERS'	=> 'هن IP تان تحريرون موڪلڻ وارا ٻيا رُڪن ',
	'POSTER'	=> 'تحرير موڪليندڙ ',
	'POSTS_APPROVED_SUCCESS'	=> 'چونڊيل تحريون منظور ڪيون ويون',
	'POSTS_DELETED_SUCCESS'	=> 'چونڊيل تحريرون ڊيٽابيس مان ختم ڪيون ويون.',
	'POSTS_DISAPPROVED_SUCCESS'	=> 'چونڊيل تحريرون نامنظور ڪيون ويون.',
	'POSTS_LOCKED_SUCCESS'	=> 'چونڊيل تحريرون مقفل ڪيون ويون.',
	'POSTS_MERGED_SUCCESS'	=> 'چونڊيل تحريرون ضم ڪيون ويون.',
	'POSTS_UNLOCKED_SUCCESS'	=> 'چونڊيل تحريرن کي غير مقفل ڪيو ويو.',
	'POSTS_PER_PAGE'	=> 'هر صفحي ۾ تحريرون',
	'POSTS_PER_PAGE_EXPLAIN'	=> '(سڀني تحريرن کي ظاهر ڪرڻ لاءِ 0 لکو.)',
	'POST_APPROVED_SUCCESS'	=> 'چونڊيل تحريرون منظور ڪيون ويون.',
	'POST_DELETED_SUCCESS'	=> 'چونڊيل تحريرون ڊيٽابيس مان ختم ڪيون ويون.',
	'POST_DISAPPROVED_SUCCESS'	=> 'چونڊيل تحريرون نامنظور ڪيون ويون.',
	'POST_LOCKED_SUCCESS'	=> 'تحريرون ڪاميابيءَ سان مقفل ڪيون ويون آهن',
	'POST_NOT_EXIST'	=> 'توهان جي گهربل تحرير موجود نه آهي',
	'POST_REPORTED_SUCCESS'	=> 'هن تحرير جي باري ۾ شڪايت موڪلي وئي آهي.',
	'POST_UNLOCKED_SUCCESS'	=> 'تحرير ڪاميابيءَ سان غير مقفل ڪئي وئي ',
	'READ_USERNOTES'	=> 'رُڪنيتي ياداشتون',
	'READ_WARNINGS'	=> 'رُڪن کي تنبيهون',
	'REPORTER'	=> 'شڪايت ڪندڙ ',
	'REPORTED'	=> 'شڪايت ٿيل ',
	'REPORTED_BY'	=> 'شڪايت ٿيل از',
	'REPORTED_ON_DATE'	=> 'بتاريخ',
	'REPORTS_CLOSED_SUCCESS'	=> 'چونڊيل شڪايت نامون بند ڪيو ويو.',
	'REPORTS_DELETED_SUCCESS'	=> 'چونڊيل شڪايت نامو ختم ڪيو ويو.',
	'REPORTS_TOTAL'	=> 'ڪالهه <strong>%d</strong> شڪايتون براءِ تبصرا.',
	'REPORTS_ZERO_TOTAL'	=> 'مطالعي جي لاءِ ڪابه شڪايت موجود ناهي',
	'REPORT_CLOSED'	=> 'هي شڪايت نامو پهرين ئي بند ٿي چڪو آهي.',
	'REPORT_CLOSED_SUCCESS'	=> 'چونڊيل شڪايت نامون ڪاميبيءُ سان بند ڪيو ويو آهيا.',
	'REPORT_DELETED_SUCCESS'	=> 'چونڊيل شڪايت ختم ڪئي وئي آهي',
	'REPORT_DETAILS'	=> 'شڪايت جو تفصيل',
	'REPORT_MESSAGE'	=> 'هن پيغام جي باري ۾ شڪايت ڪريو',
	'REPORT_MESSAGE_EXPLAIN'	=> 'چونڊيل پيغام جي شڪايت جي لاءِ هي فارم استعمال ڪريو.شڪايت عام طور تي ان صورت ۾ ڪئي ويندي آهي جڏهن ڪنهن پيغام جي ذريعي قانون کي ٽوڙيون ويو هجي.',
	'REPORT_NOTIFY'	=> 'مونکي اطلاع ڪريو',
	'REPORT_NOTIFY_EXPLAIN'	=> 'جڏهن توهان جي ڪنهن شڪايت جو معاملو طئي ٿي وڃي ته توهان کي اطلاع ڏنو ويندو آهي',
	'REPORT_POST_EXPLAIN'	=> 'چونڊيل تحرير جي شڪايت فورم جي ايڊيٽر يا بورڊ جي منتظم تائين پهچائڻ لاءِ هي فارم استعمال ڪريو . شڪايت عام طور تي ان صورت ۾ ڪئي ويندي آهي جڏهن ڪنهن پيغام جي ذريعي قانون کي ٽوڙيون ويو هجي.',
	'REPORT_REASON'	=> 'شڪايت جا سبب',
	'REPORT_TIME'	=> 'شڪايت جو وقت ',
	'REPORT_TOTAL'	=> 'ڪالهه <strong>1</strong> شڪايت براءِ تبصرا.',
	'RESYNC'	=> 'Resync',
	'RETURN_MESSAGE'	=> '%sپيغام جي طرف واپسي%s',
	'RETURN_NEW_FORUM'	=> '%sنئين فورم ڏانهن واپسي%s',
	'RETURN_NEW_TOPIC'	=> '%s نئين موضوع ڏانهن واپسي%s',
	'RETURN_POST'	=> '%sتحرير ڏانهن واپسي%s',
	'RETURN_QUEUE'	=> '%sقطار ڏانهن واپسي%s',
	'RETURN_REPORTS'	=> '%sشڪايتن ڏانهن واپسي%s',
	'RETURN_TOPIC_SIMPLE'	=> '%موضوع ڏانهن واپسي%s',
	'SEARCH_POSTS_BY_USER'	=> 'تحريرون موڪليندڙن سميت تلاش ڪريو',
	'SELECT_ACTION'	=> 'گهربل عمل چونڊيو',
	'SELECT_FORUM_GLOBAL_ANNOUNCEMENT'	=> 'مهرباني ڪري ان فورم کي چونڊيو جنهن کي توهان بطور ”عام اعلان“ شايع ڪرڻ چاهيو ٿا',
	'SELECT_FORUM_GLOBAL_ANNOUNCEMENTS'	=> 'چونڊيل موضوعن مان هڪ يا هڪ کان وڌيڪ موضوع عام اعلانن جو درجو رکن ٿا. مهرباني ڪري ڪنهن هڪ فورم کي چونڊيون جنهن ۾ توهان انهن کي ڏيکارڻ چاهيو ٿا.',
	'SELECT_MERGE'	=> 'انضمام لاءِ چونڊيو',
	'SELECT_TOPICS_FROM'	=> 'موضوع جي لاءِ فورم کي چونڊيو',
	'SELECT_TOPIC'	=> 'موضوع کي چونڊيو',
	'SELECT_USER'	=> 'رُڪن چونڊي',
	'SORT_ACTION'	=> 'عملن جو روزنامچو',
	'SORT_DATE'	=> 'تاريخ',
	'SORT_IP'	=> 'IP پتو',
	'SORT_WARNINGS'	=> 'تنبيهون',
	'SPLIT_AFTER'	=> 'چونڊيل تحريرن جي ورهاست',
	'SPLIT_FORUM'	=> 'نئين موضوع جي لاءِ فورم جي چونڊ',
	'SPLIT_POSTS'	=> 'چونڊيل تحريرون ورهايو',
	'SPLIT_SUBJECT'	=> 'نئين موضوع جو عنوان',
	'SPLIT_TOPIC_ALL'	=> 'موضوع کي چونڊيل تحريرن سان ورهايو',
	'SPLIT_TOPIC_ALL_CONFIRM'	=> 'ڇا توهان واقعي هن موضوع کي روهائڻ چاهيو ٿا',
	'SPLIT_TOPIC_BEYOND'	=> 'چونڊيل تحرير سان موضوع جي ورهاست',
	'SPLIT_TOPIC_BEYOND_CONFIRM'	=> 'ڇا توهان واقعي هن موضوع کي چونڊيل تحريرن سان ورهائڻ چاهيو ٿا؟',
	'SPLIT_TOPIC_EXPLAIN'	=> 'هيٺ ڏنل فارم کي استعمال ڪري  توهان هن موضوع کي ٻن يا وڌيڪ حصن ۾ ورهائي سگهو ٿا, ان مقصد جي لاءِ توهان فردن فردن تحريرن جي چونڊ ڪندي ورهاست جو عمل مڪمل ڪري سگهو ٿا يا ڪنهن مخصوص تحرير موضوع کي ٻن حصن ۾ ورهائي سگهو ٿا.',
	'THIS_POST_IP'	=> 'IP  جتان هيءَ تحرير موڪلي وئي',
	'TOPICS_APPROVED_SUCCESS'	=> 'چونڊيل موضوع منظور ڪيا ويا آهن.',
	'TOPICS_DELETED_SUCCESS'	=> 'چونڊيل موضوع ڊيٽابيس مان ختم ڪيا ويا آهن.',
	'TOPICS_DISAPPROVED_SUCCESS'	=> 'چونڊيل موضوع نامنظور ڪيا ويا آهن.',
	'TOPICS_FORKED_SUCCESS'	=> 'چونڊيل موضوع ڪاميابيءُ سان نقل ڪيا ويا آهن',
	'TOPICS_LOCKED_SUCCESS'	=> 'چونڊيل موضوع مقفل ڪيا ويا آهن.',
	'TOPICS_MOVED_SUCCESS'	=> 'چونڊيل موضوع ڪاميابيءَ سان مقفل ڪيا ويا آهن.',
	'TOPICS_RESYNC_SUCCESS'	=> 'چونڊيل موضوعن جي بازگشت حاصل ڪئي وئي .',
	'TOPICS_TYPE_CHANGED'	=> 'موضوع جي نوعيت ڪاميابيءُ سان بدلي وئي آهي',
	'TOPICS_UNLOCKED_SUCCESS'	=> 'چونڊيل موضوع غير مقفل ڪيا ويا آهن',
	'TOPIC_APPROVED_SUCCESS'	=> 'چونڊيل موضوع منظور ڪيا ويا آهن',
	'TOPIC_DELETED_SUCCESS'	=> 'چونڊيل موضوع ختم ڪيا ويا آهن',
	'TOPIC_DISAPPROVED_SUCCESS'	=> 'چونڊيل موضوع نامنظور ڪيا ويا آهن ',
	'TOPIC_FORKED_SUCCESS'	=> 'چونڊيل موضوع ڪاميابيءَ سان نقل ڪيا ويا ا.',
	'TOPIC_LOCKED_SUCCESS'	=> 'چونڊيل موضوع مقفل ڪيو ويو آهي.',
	'TOPIC_MOVED_SUCCESS'	=> 'چونڊيل موضوع ڪاميابيءَ سان مقفل ٿي ويو آهيا.',
	'TOPIC_NOT_EXIST'	=> 'توهان جو چونڊيل موضوع موجود نه آهي.',
	'TOPIC_RESYNC_SUCCESS'	=> 'چونڊيل موضوع جي باز گشت حاصل ڪئي وئي آهي.',
	'TOPIC_SPLIT_SUCCESS'	=> 'چونڊيل موضوع ڪاميابيءَ سان ورهايو ويو.',
	'TOPIC_TIME'	=> 'موضوع جو وقت',
	'TOPIC_TYPE_CHANGED'	=> 'موضوع جي نوعيت ڪاميابيءَ سان تبديل ڪئي وئي آهي.',
	'TOPIC_UNLOCKED_SUCCESS'	=> 'چونڊيل موضوع غير مقفل ڪيو ويو.',
	'TOTAL_WARNINGS'	=> 'سڀئي تنبيهون',
	'UNAPPROVED_POSTS_TOTAL'	=> 'سڀئي  <strong>%d</strong> تحريرون منظوريءَ جون منتظر آهن.',
	'UNAPPROVED_POSTS_ZERO_TOTAL'	=> 'ڪابه تحرير منظوريءَ جي منتظر نه آهي .',
	'UNAPPROVED_POST_TOTAL'	=> 'سڀئي <strong>1</strong> تحريرون منظوريءَ جون منتظر آهن.',
	'UNLOCK'	=> 'غير مقفل',
	'UNLOCK_POST'	=> 'تحرير غير مقفل ڪيو',
	'UNLOCK_POST_EXPLAIN'	=> 'ترميم جي اجازت',
	'UNLOCK_POST_POST'	=> 'تحرير غير مقفل ڪريو',
	'UNLOCK_POST_POST_CONFIRM'	=> 'ڇا توهان واقعي هن تحرير جي ترميم جي اجازت ڏيڻ چاهيو ٿا?',
	'UNLOCK_POST_POSTS'	=> 'چونڊيل تحرير غير مقفل ڪريو',
	'UNLOCK_POST_POSTS_CONFIRM'	=> 'ڇا توهان واقعي چونڊيل تحريرون جي ترميم جي اجازت ڏيڻ چاهيو ٿا؟',
	'UNLOCK_TOPIC'	=> 'موضوع غير مقفل ڪريو',
	'UNLOCK_TOPIC_CONFIRM'	=> 'ڇا توهان واقعي هن موضوع کي مقفل ڪرڻ چاهيو ٿا',
	'UNLOCK_TOPICS'	=> 'چونڊيل موضوع کي غير مقفل ڪريو',
	'UNLOCK_TOPICS_CONFIRM'	=> 'ڇا توهان واقعي چونڊيل موضوعن کي غير مقفل ڪرڻ چاهيو ٿا؟',
	'USER_CANNOT_POST'	=> 'توهان هن فورم ۾ تحرير نه ٿا موڪلي سگهو',
	'USER_CANNOT_REPORT'	=> 'توهان هن فورم ۾ تحريرن جي باري ۾ شڪايتون نه ٿا ڪري سگهو',
	'USER_FEEDBACK_ADDED'	=> 'User feedback added successfully.',
	'USER_WARNING_ADDED'	=> 'رُڪن کي ڪاميابيءَ سان تنبيهه ڪئي وئي آهي',
	'VIEW_DETAILS'	=> 'تفصيل ڏسو',
	'WARNED_USERS'	=> 'تنبيهه ڪيل رُڪن',
	'WARNED_USERS_EXPLAIN'	=> 'هيءَ انهن رُڪنن جي فهرست آهي جن کي unexpired تنبيهون جاري ڪيون ويون.',
	'WARNING_PM_BODY'	=> 'هيٺ هڪ تنبيهه آهي جيڪا توهان کي هن بورڊ جي هڪ ايڊيٽر يا منتظم جي طرفان جاري ڪئي وئي آهي.[quote]%s[/quote]',
	'WARNING_PM_SUBJECT'	=> 'بورڊ جي تنبيهه جاري ڪئي وئي ',
	'WARNING_POST_DEFAULT'	=> 'هيءُ هيٺ ڏنل هڪ تحرير جي سلسلي ۾ هڪ تنبيهه آهي جيڪا توهان کي موڪلي وئي آهي: %s .',
	'WARNINGS_ZERO_TOTAL'	=> 'ڪابه تنبيهه موجود نه آهي',
	'YOU_SELECTED_TOPIC'	=> 'توهان جو چونڊيل موضوع نمبر  %d: %s.',

	'report_reasons'	=> array(

		'TITLE'	=> array(
			'WAREZ'	=> 'سافٽ ويئر چور ',
			'SPAM'	=> 'Spam',
			'OFF_TOPIC'	=> 'موضوع سان غير متعلق',
			'OTHER'	=> 'ٻيا',
		),


		'DESCRIPTION'	=> array(
			'WAREZ'	=> 'تحريرن ۾ غير قانوني يا چوري ٿيل سافٽويئرن جون لنڪون موجود آهن',
			'SPAM'	=> 'هي تحرير محض ويب سائيٽن ۽ مصنوعات جي اشتهاربازي جي لاءِ آهي',
			'OFF_TOPIC'	=> 'هيءُ تحرير موضوع سان متعلق ناهي',
			'OTHER'	=> 'The reported post does not fit into any other category, please use the further information field.',
		),

	),

));

?>