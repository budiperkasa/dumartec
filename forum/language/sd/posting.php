<?php
/**
*
* posting.php [Urdu]
*
* @package language
* @version $Id: $
* @copyright (c) 2008 phpBB Group
* @author 2008-04-23 - phpBB Group
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
	'ADD_ATTACHMENT'	=> 'فائل ڳنڍيو',
	'ADD_ATTACHMENT_EXPLAIN'	=> 'جيڪڏهن توهان هڪ يا هڪ کان وڌيڪ فائل ڳنڍڻ چاهيو ٿا ته هيٺ تفصيل ڏيو',
	'ADD_FILE'	=> 'فائل جو اضافو',
	'ADD_POLL'	=> 'پول شامل ڪريو',
	'ADD_POLL_EXPLAIN'	=> 'جيڪڏهن توهان پنهنجي پيغام سان گڏ پول نه ٿا لڳائڻ چاهيو ته ڏنل فارم ڀرڻ جي ضرورت نه آهي',
	'ALREADY_DELETED'	=> 'معاف ڪجو هي پيغام پهريان ئي ختم ڪيو ويو آهي',
	'ATTACH_QUOTA_REACHED'	=> 'معاف ڪجو اٽيچمينٽ جي مخصوص کوٽا ختم ٿي چڪي آهي',
	'ATTACH_SIG'	=> 'صحيح(Sign) شامل ڪريو(رُڪن ڪنٽرول پئنل ۾ صحيح جي ترميم ٿي سگهي ٿي)',
	'BBCODE_A_HELP'	=> 'ڳنڍيل فائل : [attachment=]filename.ext[/attachment]',
	'BBCODE_B_HELP'	=> 'نمايان اکر: [b]text[/b]',
	'BBCODE_C_HELP'	=> 'نمائشِ بطور رمز: [code]code[/code]',
	'BBCODE_E_HELP'	=> 'فهرست: Add list element',
	'BBCODE_F_HELP'	=> 'لفظ جي ماپ(فونٹ سائز): [size=x-small]small text[/size]',
	'BBCODE_IS_OFF'	=> '%sBBCode%s<em>  غیرفعال</em>',
	'BBCODE_IS_ON'	=> '%sBBCode%s<em>  فعال  </em>',
	'BBCODE_I_HELP'	=> 'خطِ مائل  [i]text[/i]',
	'BBCODE_L_HELP'	=> 'فهرست: [list]text[/list]',
	'BBCODE_LISTITEM_HELP'	=> 'فهرست جو عنصر: [*]text[/*]',
	'BBCODE_O_HELP'	=> 'مرتب ڪيل فهرست: [list=]text[/list]',
	'BBCODE_P_HELP'	=> 'عڪس(تصویر): [img]http://image_url[/img]',
	'BBCODE_Q_HELP'	=> 'اقتباس جو متن: [quote]text[/quote]',
	'BBCODE_S_HELP'	=> 'خط کا رنگ: [color=red]text[/color]  =#FF0000 توهان رنگ به ڏئي سگهو ٿا',
	'BBCODE_U_HELP'	=> 'لفظن جو ڪشادو متن: [u]text[/u]',
	'BBCODE_W_HELP'	=> 'یو آر ایل: [url]http://url[/url] or [url=http://url]URL text[/url]',
	'BBCODE_D_HELP'	=> 'فلیش: [flash=width,height]http://url[/flash]',
	'BUMP_ERROR'	=> 'معاف ڪجو هڪ تحرير ککان فورن پوءِ ٻي تحرير نه ٿا موڪلي سگهو ، تحرير موڪلڻ لاءِ ڪجهه دير انتظار ڪريو.',
	'CANNOT_DELETE_REPLIED'	=> 'معاف ڪجو توهان صرف انهن موضوعن کي ختم ڪري سگهو ٿا جن جا جواب ناهن ڏنا ويا',
	'CANNOT_EDIT_POST_LOCKED'	=> 'معاف ڪجو هي موضوع مقفل آهي توهان ان ۾ جواب نه ٿا موڪلي سگهو',
	'CANNOT_EDIT_TIME'	=> 'معاف ڪجو توهان هن تحرير کي ختم يا تبديلي نه ٿا ڪري سگهو',
	'CANNOT_POST_ANNOUNCE'	=> 'معاف ڪجو توهان اعلان موڪلي نه ٿا سگهو',
	'CANNOT_POST_STICKY'	=> 'معاف ڪجو توهان هن موضوع کي بطور ”مقبول عام “ موضوع نه ٿا موڪلي سگهو',
	'CHANGE_TOPIC_TO'	=> 'موضوع جي نوعيت کي تبديل ڪريو ، طرفان:',
	'CLOSE_TAGS'	=> 'علامتون بند ڪريو Close tags ',
	'CURRENT_TOPIC'	=> 'هاڻوڪا موضوعَ',
	'DELETE_FILE'	=> 'فائل ختم ڪريو',
	'DELETE_MESSAGE'	=> 'پيغآم ختم ڪريو',
	'DELETE_MESSAGE_CONFIRM'	=> 'ڇا توهان واقعي هن پيغام کي ختم ڪرڻ چاهيو ٿا؟',
	'DELETE_OWN_POSTS'	=> 'معاف ڪجو توهان صرف پنهنجي پيغامن کي ختم ڪري سگهو ٿا!',
	'DELETE_POST_CONFIRM'	=> 'ڇا توهان واقعي هن پيغام کي ختم ڪرڻ چاهيو ٿا؟',
	'DELETE_POST_WARN'	=> 'هن دفعو ختم ڪيل پيغام جي ٻيهر واپسي ممڪن نه آهي',
	'DISABLE_BBCODE'	=> 'معطل BBCode',
	'DISABLE_MAGIC_URL'	=> 'رابطن(url) جو خودڪار تجزيو نه ڪريو',
	'DISABLE_SMILIES'	=> 'مسڪراهٽون معطل ڪريو',
	'DISALLOWED_EXTENSION'	=> 'فائل ايڪسٽينشن %s غير اجازت يافتا',
	'DRAFT_LOADED'	=> 'توهان جو مسودو موڪلجڻ لاءِ تيار آهي , ڇا توهان تحرير موڪلڻ جو مرحلو مڪمل ڪرڻ چاهيو ٿا<br />تحرير موڪلڻ کان پوءِ توهان جو مسودو ختم ڪيو ويندو',
	'DRAFT_LOADED_PM'	=> 'توهان جو مسودو موڪلجڻ لاءِ تيار آهي ,  ڇا توهان ذاتي پيغام موڪلڻ جو مرحلو مڪمل ڪرڻ چاهيو ٿ<br />ذاتي پيغام موڪلڻ کان پوءِ توهان جو مسودو ختم ڪيو ويندوا',
	'DRAFT_SAVED'	=> 'مسودو ڪاميابيءَ سان محفوظ ٿي ويو آهي',
	'DRAFT_TITLE'	=> 'مسودي جو عنوان',
	'EDIT_REASON'	=> 'تحرير جي ايڊٽ ڪرڻ جو سبب',
	'EMPTY_FILEUPLOAD'	=> 'اپلوڊ ٿيل فائل خالي آهي',
	'EMPTY_MESSAGE'	=> 'ڪابه تحرير موڪلڻ وقت ان ۾ پيغام لکڻ ضروري آهي',
	'EMPTY_REMOTE_DATA'	=> 'فائل کي پڙهڻ ممڪن ناهي مهرباني ڪري ٻيهر ڪوشش ڪريو',
	'FLASH_IS_OFF'	=> '[flash]<em>  غیر فعال  </em>',
	'FLASH_IS_ON'	=> '[flash]<em>  فعال  </em>',
	'FLOOD_ERROR'	=> 'توهان ايترو جلدي ٻي تحرير نه ٿا موڪلي سگهو مهرباني ڪري ڪجهه دير انتظار ڪريو',
	'FONT_COLOR'	=> 'لفظن جو رنگ',
	'FONT_COLOR_HIDE'	=> 'لفظن جي رنگن کي لڪايو',
	'FONT_HUGE'	=> 'تمام وڏا',
	'FONT_LARGE'	=> 'وڏا',
	'FONT_NORMAL'	=> 'عام',
	'FONT_SIZE'	=> 'لفظن جي سائيز',
	'FONT_SMALL'	=> 'ننڍي',
	'FONT_TINY'	=> 'صفا ننڍي',
	'GENERAL_UPLOAD_ERROR'	=> 'ڳنڍيل فائل  %s موڪلڻ ممڪن ناهي',
	'IMAGES_ARE_OFF'	=> '[img]<em>  غير فعال  </em>',
	'IMAGES_ARE_ON'	=> '[img]<em>  فعال  </em>',
	'INVALID_FILENAME'	=> 'فائل جو نالو  %s  غلط آهي',
	'LOAD'	=> 'بار کڻو',
	'LOAD_DRAFT'	=> 'مسودو کوليو',
	'LOAD_DRAFT_EXPLAIN'	=> 'هتي اهو ممڪن آهي ته توهان پنهنجي مسودي کي مڪمل ڪرڻ لاءِ ڪنهن هڪ کي چونڊيو. توهان جي موجوده تحرير کي موڪلڻ منسوخ ڪيو ويو آهي، ۽ ان جو سڄو مواد به. توهان جي لاءِ ممڪن آهي ته رُڪن جي ڪنٽرول پئنل جي ذريعي مسودي کي ڏسي ، تبديل ڪري يا انهن کي ختم ڪري سگهي ٿو',
	'LOGIN_EXPLAIN_BUMP'	=> 'هن فورم ۾ موضوع موڪلڻ لاءِ لاگ ان ٿيڻ ضروري آهي',
	'LOGIN_EXPLAIN_DELETE'	=> 'هن فورم ۾ تحرير کي ختم ڪرڻ لاءِ لاگ ان ٿيڻ ضروري آهي',
	'LOGIN_EXPLAIN_POST'	=> 'هن فورم ۾ تحريرون موڪلڻ لاءِ لاگ ان ٿيڻ ضروري آهي',
	'LOGIN_EXPLAIN_QUOTE'	=> 'هن فورم جي تحرير جو حوالو کڻڻ لاءِ لاگ ان ٿيڻ ضروري آهي',
	'LOGIN_EXPLAIN_REPLY'	=> 'هن فورم ۾ جواب موڪلڻ لاءِ لاگ ان ٿيڻ ضروري آهي',
	'MAX_FONT_SIZE_EXCEEDED'	=> 'توهان وڌ کان وڌ %1$d لفظن جي سائيز استعمال ڪري سگهو ٿا',
	'MAX_FLASH_HEIGHT_EXCEEDED'	=> 'توها جي فليش فائيل جي سائز ڊيگهه ۾ تقريبن  %1$d پڪسل هجڻ گهرجي',
	'MAX_FLASH_WIDTH_EXCEEDED'	=> 'توها جي فليش فائيل جي سائز ويڪر ۾  وڌ کان وڌ %1$d پڪسل ٿيڻ گهرجي',
	'MAX_IMG_HEIGHT_EXCEEDED'	=> 'توهان جي تصوير جي ڊيگهه وڌ کان وڌ %1$d پڪسل ٿيڻ گهرجي',
	'MAX_IMG_WIDTH_EXCEEDED'	=> 'توهان جي تصوير جي ويڪر وڌ کان وڌ %1$d پڪسل ٿيڻ گهرجي',
	'MESSAGE_BODY_EXPLAIN'	=> 'پنهنجو پيغام هتي لکو , هي پيغآم <strong>%d</strong> اکرن کان وڌيڪ نه هجڻ گهرجي',
	'MESSAGE_DELETED'	=> 'پيغام ڪاميابيءَ سان ختم ڪيو ويو',
	'MORE_SMILIES'	=> 'وڌيڪ مسڪراهٽون ڏسو',
	'NOTIFY_REPLY'	=> 'ڪنهن به جواب ملڻ جي صورت ۾ مونکي اطلاع ڏيو',
	'NOT_UPLOADED'	=> 'فائل اپلوڊنگ ممڪن ناهي',
	'NO_DELETE_POLL_OPTIONS'	=> 'توهان پول جي موجوده اختيارين کي ختم نه ٿا ڪري سگهو',
	'NO_PM_ICON'	=> 'ذاتي پيغام جو آئيڪان موجود نه آهي',
	'NO_POLL_TITLE'	=> 'پول جو عنوان لکڻ ضروري آهي',
	'NO_POST'	=> 'گهربل پيغام موجود نه آهي',
	'NO_POST_MODE'	=> 'ڪنهن به پيغام جي تشخيص نه ڪئي وئي',
	'PARTIAL_UPLOAD'	=> 'فائل اپلوڊنگ جزوي طور ممڪن ٿي آهي',
	'PHP_SIZE_NA'	=> 'ڳنڍيل فائل جي سائز تمام گهڻي آهي',
	'PHP_SIZE_OVERRUN'	=> 'ڳنڍيل فائل جي سائز تمام گهڻي آهي, وڌ کان وڌ اپلوڊنگ %d میگا بائيٽ آهي',
	'PLACE_INLINE'	=> 'Place inline',
	'POLL_DELETE'	=> 'پول ختم ڪريو',
	'POLL_FOR'	=> 'پول جو عرصو',
	'POLL_FOR_EXPLAIN'	=> 'پول کي لا محدود عرصي تائين رکڻ لاءِ زيرو لکي يا خالي ڇڏي ڏيو',
	'POLL_MAX_OPTIONS'	=> 'هر رُڪن وٽ اختيار',
	'POLL_MAX_OPTIONS_EXPLAIN'	=> 'اختيارين جو تعداد جيڪو هڪ رُڪن ووٽ وجهڻ وقت استعمال ڪري سگهي ٿو',
	'POLL_OPTIONS'	=> 'پول جا اختيارَ',
	'POLL_OPTIONS_EXPLAIN'	=> 'هر هڪ اختيار لاءِ نئين سٽ استعمال ڪريو . توهان <strong>%d</strong> اختيار لکي سگهو ٿا',
	'POLL_OPTIONS_EDIT_EXPLAIN'	=> 'هر هڪ اختيار لاءِ نئين سٽ استعمال ڪريو . توهان <strong>%d</strong> اختيار لکي سگهو ٿا . ياد رکو ته جڏهن توهان پهريان کان موجود پول ۾ ڪنهن اختيار جو اضافو ڪندا آهيو يا ڪنهن اختيار کي ختم ڪندا آهيو ته ان پول ۾ ڏنل سڀئي پراڻا ووٽ ختم ٿي ويندا آهن',
	'POLL_QUESTION'	=> 'پول جي لاءِ سوال',
	'POLL_TITLE_TOO_LONG'	=> 'پول جو عنوان 100 اکرن کان گهٽ اکرن تي هجڻ گهرجي',
	'POLL_TITLE_COMP_TOO_LONG'	=> 'پول جو عنوان تمام وڏو آهي, مسڪراهٽون ۽ بي بي ڪوڊ ختم ڪري ڏسو',
	'POLL_VOTE_CHANGE'	=> 'هڪ کان وڌيڪ دفعو ووٽ ڏيڻ جي اجازت',
	'POLL_VOTE_CHANGE_EXPLAIN'	=> 'اگر فعال هجن ته رُڪن پنهنجي ووٽ ۾ تبديلي ڪري سگهن',
	'POSTED_ATTACHMENTS'	=> 'موڪليل فائل',
	'POST_APPROVAL_NOTIFY'	=> 'توهان جي تحرير جي منظوري جي صورت ۾ توهان کي اطلاع ڏنو ويندو',
	'POST_CONFIRMATION'	=> 'تحرير جي اجازت',
	'POST_CONFIRM_EXPLAIN'	=> 'مشيني تحريرن کي روڪڻ لاءِ بورڊ توهان کان تصوير ۾ ظاهر ٿيندڙ اکرن لکڻ جو مطالبو ڪري ٿو. جيڪڏهن توهان جي نظر ڪمزور آهي ته بورڊ %sاانتظامیا%s سان رابطو ڪريو',
	'POST_DELETED'	=> 'تحرير ڪاميابيءَ سان ختم ڪئي وئي',
	'POST_EDITED'	=> 'تحرير جي تبديلي ڪاميابيءَ سان ممڪن ٿي سگهي',
	'POST_EDITED_MOD'	=> 'تحرير جي تبديلي ڪاميابيءَ سان ممڪن ٿي سگهي، مگر انتظاميا جي منظوريءَ کان سواءِ ان جي اشاعت ممڪن ناهي، منظوريءَ جي صورت ۾ توهان کي مطلع ڪيو ويندو',
	'POST_GLOBAL'	=> 'عام',
	'POST_ICON'	=> 'تحرير جو آئڪن',
	'POST_NORMAL'	=> 'عمومی',
	'POST_REVIEW'	=> 'موضوع جو مطالعو',
	'POST_REVIEW_EXPLAIN'	=> 'At least one new post has been made to this topic. You may wish to review your post in light of this.',
	'POST_STORED'	=> 'تحرير ڪاميابيءَ سان موڪلي وئي',
	'POST_STORED_MOD'	=> 'تحرير ڪاميابيءَ سان موڪلي وئي پر انتظاميا جي منظوري کان سواءِ ان جي اشاعت ممڪن ناهي، منظوريءَ جي صورت ۾ توهان کي آگاهه ڪيو ويندو',
	'POST_TOPIC_AS'	=> 'موضوع موڪليو بطور',
	'PROGRESS_BAR'	=> 'پيش رفت بار',
	'QUOTE_DEPTH_EXCEEDED'	=> 'توهان  %1$d حوالن کي هڪ ٻئي ۾ ضم ڪري سگهو ٿا',
	'SAVE'	=> 'محفوظ',
	'SAVE_DATE'	=> 'محفوظ ٿيڻ جي تاريخ',
	'SAVE_DRAFT'	=> 'مسودو محفوظ ڪريو',
	'SAVE_DRAFT_CONFIRM'	=> 'ياد رهي ته مسودو صرف عنوان ۽ متن سان محفوظ ٿيندو آهي , مسودي مان ٻيون شيون ختم ڪيون وينديون آهن . ڇا توهان هاڻي مسودو محفوظ ڪرڻ چاهيو ٿا ؟',
	'SMILIES'	=> 'مسڪراهٽون',
	'SMILIES_ARE_OFF'	=> 'مسڪراهٽون<em>  غیر فعال</em>',
	'SMILIES_ARE_ON'	=> 'مسڪراهٽون<em>  فعال  </em>',
	'STICKY_ANNOUNCE_TIME_LIMIT'	=> 'اعلان جي مدت/مقبول عام موضوع',
	'STICK_TOPIC_FOR'	=> 'موضوع کي مقبول عام جو درجو ڏيو عرصي لاءِ ',
	'STICK_TOPIC_FOR_EXPLAIN'	=> 'موضوع کو دوامی طور پر مقبول عام/ یا اعلان کا درجہ دینے کے لیے صفر لکھیں یا خالی چھوڑ دیں',
	'STYLES_TIP'	=> 'معلومات: چونڊيل متن تي گهربل انداز تيزيءَ سان لاڳو ٿيندو آهي',
	'TOO_FEW_CHARS'	=> 'توهان جي تحرير تمام گهٽ لفظن تي مشتمل آهي',
	'TOO_FEW_POLL_OPTIONS'	=> 'پول جي لاءِ گهٽ ۾ گهٽ ٻن اختيارن جو هجڻ لازمي آهي',
	'TOO_MANY_ATTACHMENTS'	=> 'هڪ وڌيڪ فائل کي ڳنڍڻ ممڪن ناهي وڌ کان وڌ تعداد%d آهي',
	'TOO_MANY_CHARS'	=> 'الرسالة طويلة جداً',
	'TOO_MANY_CHARS_POST'	=> 'توهان جي پيغام ۾ %1$d اکر آهن ـ جڏهن ته وڌ کان وڌ %2$d اکرن جي اجازت آهي',
	'TOO_MANY_CHARS_SIG'	=> 'توهان جي صحيح ۾ %1$d اکر آهن ـجڏهن ته وڌ کان وڌ %2$dاکرن جي اجازت آهي',
	'TOO_MANY_POLL_OPTIONS'	=> 'توهان پول جا تمام وڌيڪ اختيار لکڻ جي ڪوشش ڪئيآهي',
	'TOO_MANY_SMILIES'	=> 'توهان پنهنجي پيغام ۾ تمام گهڻيون مسڪراهٽون ڏنيون آهن. جڏهن ته ان جو وڌ کان وڌ تعداد %d منظور ٿيل آهي',
	'TOO_MANY_URLS'	=> 'توهان جي تحرير ۾ تمام گهڻيون"urls" شامل آهن . جڏهن ته منظور ٿيل تعداد %d آهي',
	'TOO_MANY_USER_OPTIONS'	=> 'You cannot specify more options per user than existing poll options.',
	'TOPIC_BUMPED'	=> 'موضوع ڪاميابيءَ سان موڪليو ويو',
	'UNAUTHORISED_BBCODE'	=> 'You cannot use certain BBCodes: %s.',
	'UNGLOBALISE_EXPLAIN'	=> 'To switch this topic back from being global to a normal topic, you need to select the forum you wish this topic to be displayed.',
	'UPDATE_COMMENT'	=> 'تازا تبصرو',
	'URL_INVALID'	=> 'ويب سائيٽ جو پتو صحيح نه آهي',
	'URL_NOT_FOUND'	=> 'فائل موجود ناهي',
	'URL_IS_OFF'	=> '[url] <em>  غير فعال  </em>',
	'URL_IS_ON'	=> '[url] <em>  فعال  </em>',
	'USER_CANNOT_BUMP'	=> 'هن فورم ۾ موضوع موڪلي نه ٿا سگهجن',
	'USER_CANNOT_DELETE'	=> 'هن فورم ۾ موضوع نه ٿا موڪلي سگهجن',
	'USER_CANNOT_EDIT'	=> 'هن فورم ۾ موضوعن کي تبديل نه ٿو ڪري سگهجي',
	'USER_CANNOT_REPLY'	=> 'هن فورم ۾ جواب موڪلي نه ٿا سگهجن',
	'USER_CANNOT_FORUM_POST'	=> 'هن فورم ۾ مواد نه ٿو موڪلي سگهجي ڇو ته هي فورم ان عمل جي طاقت نه ٿو رکي',
	'VIEW_MESSAGE'	=> '%s موڪليل تحريرون ڏسڻ لاءِ هتي ڪلڪ ڪريو %s',
	'VIEW_PRIVATE_MESSAGE'		=> '%sتوهان پنهنجو سبمٽ ڪيل ذاتي پيغام ڏسو%s',
	'WRONG_FILESIZE'	=> 'فئال جي سائز تمام وڌي آهي جڏهن ته وڌ کان وڌ سائيز % 1d %2s آهي',
	'WRONG_SIZE'	=> 'تصوير جي گهٽ ۾ گهٽ  %1$d پڪسل ويڪر ۽ %2$d پڪسل ڊيگهه ۽ وڌ کان وڌ %3$d پڪسل ويڪر ۽  %4$d پڪسل ارتفاعاً. أبعاد الصورة المقدمة هي %5$d بكسل عرضاً و %6$d پڪسل ڊيگهه آهي',
));

?>