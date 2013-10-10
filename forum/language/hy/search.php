<?php
/** 
*
* search [Russian]
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
	'ALL_AVAILABLE'			=> 'Բոլոր առկա',
	'ALL_RESULTS'			=> 'Բոլոր օրերի',

	'DISPLAY_RESULTS'		=> 'Ցուցադրել արդյունքները որպես',

	'FOUND_SEARCH_MATCH'		=> 'Որոնման արդյունքները` %d',
	'FOUND_SEARCH_MATCHES'		=> 'Որոնման արդյունքները` %d',
	'FOUND_MORE_SEARCH_MATCHES'	=> 'Результатов поиска более %d',

	'GLOBAL'				=> 'Важная',

	'IGNORED_TERMS'			=> 'проигнорированы',
	'IGNORED_TERMS_EXPLAIN'	=> 'Следующие слова в поисковом запросе были проигнорированы, так как являются слишком употребимыми: <strong>%s</strong>.',

	'JUMP_TO_POST'			=> 'Перейти к сообщению',

	'LOGIN_EXPLAIN_EGOSEARCH'	=> 'Вы должны быть зарегистрированы и авторизованы в системе для просмотра своих сообщений.',

	'NO_KEYWORDS'			=> 'Для поиска вы должны ввести, как минимум, одно слово. Длина каждого слова должна быть не менее %d и не более %d символов, исключая символ шаблона *.',
	'NO_RECENT_SEARCHES'	=> 'За последнее время поисковых запросов не было.',
	'NO_SEARCH'				=> 'Извините, но вам запрещено пользоваться поиском.',
	'NO_SEARCH_RESULTS'		=> 'Համապատասխան թեմա կամ գրառում չի գտնվել:',
	'NO_SEARCH_TIME'		=> 'Вы не можете произвести поиск сразу после предыдущего. Пожалуйста, попробуйте чуть позже.',
	'WORD_IN_NO_POST'		=> 'Որոնման արդյունքում համապատասխա գրառում չի գտնվել, քանի որ <strong>%s</strong> բառը ոչ մի տեղ չի հանդիպում:',
	'WORDS_IN_NO_POST'		=> 'Подходящих сообщений не найдено, поскольку слова <strong>%s</strong> нигде не встречаются.',

	'POST_CHARACTERS'		=> 'սիմվոլները',

	'RECENT_SEARCHES'		=> 'Последние поисковые запросы',
	'RESULT_DAYS'			=> 'Որոնել գրառումները',
	'RESULT_SORT'			=> 'Դասակարգման դաշտ',
	'RETURN_FIRST'			=> 'Ցուցադրել գրառման առաջին',
	'RETURN_TO_SEARCH_ADV'	=> 'Վերադառնալ ընդլայնված որոնմանը',
	
	'SEARCHED_FOR'				=> 'Поисковый запрос',
	'SEARCHED_TOPIC'			=> 'Поиск в теме',
	'SEARCH_ALL_TERMS'			=> 'Որոնել բոլոր բառերը',
	'SEARCH_ANY_TERMS'			=> 'Որոնել ցանկացած բառ/հարցման լեզվով որոնում',
	'SEARCH_AUTHOR'				=> 'Որոնում ըստ հեղինակի',
	'SEARCH_AUTHOR_EXPLAIN'		=> 'Օգտագործեք * որպես նմուշ.',
	'SEARCH_FIRST_POST'			=> 'Թեմայի միայն առաջին գրառումում',
	'SEARCH_FORUMS'				=> 'Որոնել ֆորումներում',
	'SEARCH_FORUMS_EXPLAIN'		=> 'Ընտրեք այն ֆորումը կամ ֆորումները, որոնցում կատարվելու է որոնումը: Որոնումը ենթաֆորումներում կատարվում է ավտոմատ կերպով, եթե դուք չեք անջատել համապատասխան դրույթը ներքևում:',
	'SEARCH_IN_RESULTS'			=> 'Որոնում գտնված արդյունքներում',
	'SEARCH_KEYWORDS_EXPLAIN'	=> 'Դուք կարող եք օգտագործել <strong>+</strong>, այն բառերի համար, որոնք պետք է լինեն արդյունքներում, և <strong>-</strong>` այն բառերի համար, որոնք չպետք է լինեն արդյունքներում:Դուք կարող եք բաժանել բառերը <strong>|</strong> սիմվոլով, ցուցակից ցանկացած բառի որոնման համար: Օգտագործեք <strong>*</strong> որպես նմուշ մասնակի համընկման համար:',
	'SEARCH_MSG_ONLY'			=> 'Միայն հաղորդագրությունների տեքստերում',
	'SEARCH_OPTIONS'			=> 'Հարցման դրույթներ',
	'SEARCH_QUERY'				=> 'Հարցում',
	'SEARCH_SUBFORUMS'			=> 'Որոնել ենթաֆորումներում',
	'SEARCH_TITLE_MSG'			=> 'Թեմաների վերնագրերում և հաղորդագրությունների տեքստերում',
	'SEARCH_TITLE_ONLY'			=> 'Միայն թեմայի վերնագրով',
	'SEARCH_WITHIN'				=> 'Որոնել',
	'SORT_ASCENDING'			=> 'Աճման կարգով',
	'SORT_AUTHOR'				=> 'Հեղինակ',
	'SORT_DESCENDING'			=> 'Նվազման կարգով',
	'SORT_FORUM'				=> 'ֆորում',
	'SORT_POST_SUBJECT'			=> 'Գրառման վերնագիր',
	'SORT_TIME'					=> 'Տեղակայման ժամանակ',

	'TOO_FEW_AUTHOR_CHARS'	=> 'Вы должны ввести не менее %d символов имени автора.',
));

?>