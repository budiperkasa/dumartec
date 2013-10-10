<?php
/**
*
* search [English]
*
* @package language
* @version $Id: search.php,v 1.26 2007/10/04 15:07:24 acydburn Exp $
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

$lang = array_merge($lang, array(
	'ALL_AVAILABLE'			=> 'सभी उपलब्ध',
	'ALL_RESULTS'			=> 'सभी परिणाम',

	'DISPLAY_RESULTS'		=> 'परिणाम इस तरह दिखाऐं',

	'FOUND_SEARCH_MATCH'		=> '%d परिणाम मिला',
	'FOUND_SEARCH_MATCHES'		=> '%d परिणाम मिलें ',
	'FOUND_MORE_SEARCH_MATCHES'	=> '%d से अधिक परिणाम मिले',

	'GLOBAL'				=> 'ग्लोबल सूचना',

	'IGNORED_TERMS'			=> 'उपेक्षित',
	'IGNORED_TERMS_EXPLAIN'	=> 'आपके खोज पर इन शब्दो को खोजा नहीं गया क्योकि वे बहुत साधारण शब्द हैं : <strong>%s</strong>.',

	'JUMP_TO_POST'			=> 'स्तम्भ पर जाऐं',

	'LOGIN_EXPLAIN_EGOSEARCH'	=> 'अपने स्तम्भ को देखने के लिए बोर्ड में आपको सदस्य बन लॉगिन करना होगा।',

	'NO_KEYWORDS'			=> 'खोज के लिए आपको कम से कम एक शब्द भरना पड़ेगा । आपको सभी शब्दो में कम से कम %d अक्षर होने चाहिए वाइल्डकार्ड अक्षरो को छोड कर',
	'NO_RECENT_SEARCHES'	=> 'वर्तमान में कोई खोज नहीं हुई हैं.',
	'NO_SEARCH'				=> 'खोज प्रणाली को उपयोग करने के लिए अनुमति नहीं हैं।',
	'NO_SEARCH_RESULTS'		=> 'कोई योग्य परिणाम नहीं मिला।',
	'NO_SEARCH_TIME'		=> 'खोज प्रणाली को आप अभी उपयोग नही कर सकते ,कृपया कुछ समय बाद प्रयत्न करें ।',
	'WORD_IN_NO_POST'		=> 'No posts were found because the word <strong>%s</strong> is not contained in any post.',
	'WORDS_IN_NO_POST'		=> 'No posts were found because the words <strong>%s</strong> are not contained in any post.',

	'POST_CHARACTERS'		=> 'स्तम्भ के अक्षर',

	'RECENT_SEARCHES'		=> 'पिछले खोज',
	'RESULT_DAYS'			=> 'पिछले परिणाम पर सीमित करें',
	'RESULT_SORT'			=> 'परिणाम इस क्रमानुसार ',
	'RETURN_FIRST'			=> 'प्रथम पर वापस जाएँ',
	'RETURN_TO_SEARCH_ADV'	=> 'उन्नत खोज पर वापस जाएँ',

	'SEARCHED_FOR'				=> 'Search term used',
	'SEARCHED_TOPIC'			=> 'खोजा गया विषय ',
	'SEARCH_ALL_TERMS'			=> 'सभी उपयोग हुए शब्दो को खोजे या दिये गए प्रश्न का उपयोग करें  Search for all terms or use query as entered',
	'SEARCH_ANY_TERMS'			=> 'किसी भी शब्द के लिए खोज',
	'SEARCH_AUTHOR'				=> 'लेखक खोजें ',
	'SEARCH_AUTHOR_EXPLAIN'		=> '* का उपयोग कर अंश खोजें.',
	'SEARCH_FIRST_POST'			=> 'केवल विषय का पहला स्तम्भ',
	'SEARCH_FORUMS'				=> 'मंच में खोजें ',
	'SEARCH_FORUMS_EXPLAIN'		=> 'मंच का चयन करें जिसमें आप खोज करना चाहते हैं , सहमंच स्वतः खोज में सम्मलित होंगे जबतक आप  "सहमंच में खोजें "को असमर्थ न कर देंवे ।',
	'SEARCH_IN_RESULTS'			=> 'परिणाम में खोजें',
	'SEARCH_KEYWORDS_EXPLAIN'	=> 'Place <strong>+</strong> in front of a word which must be found and <strong>-</strong> in front of a word which must not be found. Put a list of words separated by <strong>|</strong> into brackets if only one of the words must be found. Use * as a wildcard for partial matches.',
	'SEARCH_MSG_ONLY'			=> 'केवल संदेश पाठ्य',
	'SEARCH_OPTIONS'			=> 'विकल्प खोजें ',
	'SEARCH_QUERY'				=> 'क्वेरी खोजें ',
	'SEARCH_SUBFORUMS'			=> 'सहमंच में खोजें',
	'SEARCH_TITLE_MSG'			=> 'स्तम्भ विषय एवं संदेश पाठ्य ',
	'SEARCH_TITLE_ONLY'			=> 'केवल विषय शिर्षक ',
	'SEARCH_WITHIN'				=> 'इसके अंदर खोजें',
	'SORT_ASCENDING'			=> 'आरोही',
	'SORT_AUTHOR'				=> 'लेखक',
	'SORT_DESCENDING'			=> 'अवरोही',
	'SORT_FORUM'				=> 'मंच',
	'SORT_POST_SUBJECT'			=> 'स्तम्भ प्रसंग',
	'SORT_TIME'					=> 'स्तम्भ समय',

	'TOO_FEW_AUTHOR_CHARS'	=> 'You must specify at least %d characters of the authors name.',
));

?>