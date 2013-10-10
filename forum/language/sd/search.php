<?php
/**
*
* search.php [Urdu]
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
	'ALL_AVAILABLE'	=> 'سڀئي موجوده',
	'ALL_RESULTS'	=> 'سڀ نتيجا',
	'DISPLAY_RESULTS'	=> 'نتيجن ۾ ظاهر ڪريو',
	'FOUND_SEARCH_MATCH'	=> '%d ملندڙ مليو آهي',
	'FOUND_SEARCH_MATCHES'	=> '%d ملندڙ نتيجا مليا آهن',
	'FOUND_MORE_SEARCH_MATCHES'	=> 'ڳولا ۾  %d کان وڌيڪ نتيجا مليا آهن',
	'GLOBAL'	=> 'اعلان عام',
	'IGNORED_TERMS'	=> 'ختم ڪريو',
	'IGNORED_TERMS_EXPLAIN'	=> 'هيٺيون اصطلاحون توهان جي تلاش مان ختم ڪيون ويون آهن ڇاڪاڻ ته اهي تمام گهڻو عام استعمال ٿيڻ ڪري ٿيڻ واريون اصطلاحون آهن : <strong>%s</strong>.',
	'JUMP_TO_POST'	=> 'موضوع تي فوري وڃو',
	'LOGIN_EXPLAIN_EGOSEARCH'	=> 'فورم تي پنهنجي تحرير ڏسڻ لاءِ توهان جو لاگ ان هجڻ ضروري آهي۔',
	'NO_KEYWORDS'	=> 'ڳولا جي لاءِ ضروري آهي ته توهان گهٽ ۾ گهٽ هڪ اصطلاح ضرور لکو۔ ۽ هر اصطلاح گهٽ ۾ گهڙ  %d اکرن تي مشتمل هجي۔ وڌيڪ توهان جا اصطلاح وائلڊ ڪارڊز کي ڪڍي ڪري  %d اکرن کان وڌيڪ نه هجن.',
	'NO_RECENT_SEARCHES'	=> 'ويجهي ماضيءَ ۾ ڪابه ڳولا ڪانهي ڪئي وئي۔',
	'NO_SEARCH'	=> 'معذرت مگر توهان کي ڳولا جي نظام جي اجازت نه آهي۔',
	'NO_SEARCH_RESULTS'	=> 'ڪابه ملندڙ ڳولا نه ملي۔',
	'NO_SEARCH_TIME'	=> 'معزرت مگر توهان هن وقت ڳولا جو نه ٿا ڪري سگهو۔ مهرباني ڪري ڪجهه دير کان پوءِ ڪوشش ڪندا.',
	'WORD_IN_NO_POST'	=> 'ڪوبه موضوع نه مليو  ڇاڪاڻ ته  <strong>%s</strong> ڪنهن به موضوع ۾ موجود نه آهي۔',
	'WORDS_IN_NO_POST'	=> 'ڪوبه موضوع نه مليو  ڇاڪاڻ ته اصطلاح  <strong>%s</strong> ڪنهن به موضوع ۾ موجود نه آهي۔',
	'POST_CHARACTERS'	=> 'تحرير جا اکر',
	'RECENT_SEARCHES'	=> 'Recent searches',
	'RESULT_DAYS'	=> 'ڳولا کي محدود ڪريو پويون ',
	'RESULT_SORT'	=> 'نتيجي کي ترتيب ڏيو',
	'RETURN_FIRST'	=> 'پهريان ڏيکاريو',
	'RETURN_TO_SEARCH_ADV'	=> 'واپس بهتر ڳولا جي لاءِ ',
	'SEARCHED_FOR'	=> 'اصطلاح جنهن جي ڳولا ڪئي وئي',
	'SEARCHED_TOPIC'	=> 'تحريرن جي تلاش',
	'SEARCH_ALL_TERMS'	=> 'سڀئي اصطلاحن کي ڳوليو يا لفظن کي اصطلاح طور ڳوليو',
	'SEARCH_ANY_TERMS'	=> 'ڪنهن به اصطلاح جي تلاش ڪريو',
	'SEARCH_AUTHOR'	=> 'مصنف جي تلاش',
	'SEARCH_AUTHOR_EXPLAIN'	=> 'عارضي ڀيٽا جي لاءِ  * کي وائلڊ ڪارڊ جي طور تي استعمال ڪيو۔',
	'SEARCH_FIRST_POST'	=> 'ڪنهن به موضوع جي پهرين تحرير ۾ ڳوليو',
	'SEARCH_FORUMS'	=> 'فورمن ۾ ڳوليو',
	'SEARCH_FORUMS_EXPLAIN'	=> 'جنهن فورم/فورمن کي تلاش ڪرڻو هجي ان جو نالو فهرست مان نشان لڳايو۔ هيٺِين فورمن ۾ پاڻ ئي تلاش ٿي ويندي، جيڪڏهن توهان هيٺ ذيلي فورمن ۾ ڳولا کي غير فعال نه ڪيو ته۔',
	'SEARCH_IN_RESULTS'	=> 'هنن نتيجن ۾ ڳوليو۔',
	'SEARCH_KEYWORDS_EXPLAIN'	=> 'جنهن اصطلاح کي لازمي تلاش ڪرڻو هجي ته ان جي سامهون <strong>+</strong> لکو ۽ جنهن اصطلاح کي  تلاش مان ختم ڪرڻو هجي ان جي سامهون <strong>-</strong> لکو۔ جيڪڏهن تلاش ۾ ڏنل لفظ  مان ڪنهن هڪ جي تلاش ڪرڻي هجي ته لفظن جي فهرست مان هر اصطلاح کي  <strong>|</strong> کان الڳ ڪري لکو ۔ جزوي ڳولا جي لاءِ  * کي وائلڊ ڪارڊ جي طور تي استعمال ڪريو۔.',
	'SEARCH_MSG_ONLY'	=> 'صرف تحريرن جي متن مان ڳولا ڪريو',
	'SEARCH_OPTIONS'	=> 'تلاش جون ترجيحون',
	'SEARCH_QUERY'	=> 'Search query',
	'SEARCH_SUBFORUMS'	=> 'هيٺِن فورمن ۾ ڳولا ڪريو',
	'SEARCH_TITLE_MSG'	=> 'تحرير جي متن ۽ عنوان ۾ ڳوليو',
	'SEARCH_TITLE_ONLY'	=> 'صرف موضوعن جي عنوان ۾ ڳوليو',
	'SEARCH_WITHIN'	=> 'هنن مان ڳوليو.',
	'SORT_ASCENDING'	=> 'سڌي ترتيب',
	'SORT_AUTHOR'	=> 'مصنف',
	'SORT_DESCENDING'	=> 'ابتي ترتيب',
	'SORT_FORUM'	=> 'فورم',
	'SORT_POST_SUBJECT'	=> 'تحرير جو عنوان',
	'SORT_TIME'	=> 'تحرير جو وقت',
	'TOO_FEW_AUTHOR_CHARS'	=> 'تحرير جي لاءِ مصنف جي نالي جا گهٽ ۾ گهٽ %d اکر لکڻ ضروري آهن۔',
));

?>