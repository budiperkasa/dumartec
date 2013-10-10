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
	'ALL_AVAILABLE'			=> 'Øll atkomulig',
	'ALL_RESULTS'			=> 'All results',

	'DISPLAY_RESULTS'		=> 'Vís úrslit sum',

	'FOUND_SEARCH_MATCH'		=> 'Leitingin fann %d innlegg ',
	'FOUND_SEARCH_MATCHES'		=> 'Leitingin fann %d innlegg ',
	'FOUND_MORE_SEARCH_MATCHES'	=> 'Search found more than %d matches',

	'GLOBAL'				=> 'Global announcement',

	'IGNORED_TERMS'			=> 'ignored',
	'IGNORED_TERMS_EXPLAIN'	=> 'The following words in your search query were ignored because they are too common words: <strong>%s</strong>.',

	'JUMP_TO_POST'			=> 'Jump to post',

	'LOGIN_EXPLAIN_EGOSEARCH'	=> 'The board requires you to be registered and logged in to view your own posts.',

	'NO_KEYWORDS'			=> 'You must specify at least one word to search for. Each word must consist of at least %d characters and must not contain more than %d characters excluding wildcards.',
	'NO_RECENT_SEARCHES'	=> 'No searches have been carried out recently.',
	'NO_SEARCH'				=> 'Sorry but you are not permitted to use the search system.',
	'NO_SEARCH_RESULTS'		=> 'No suitable matches were found.',
	'NO_SEARCH_TIME'		=> 'Sorry but you cannot use search at this time. Please try again in a few minutes.',
	'WORD_IN_NO_POST'		=> 'No posts were found because the word <strong>%s</strong> is not contained in any post.',
	'WORDS_IN_NO_POST'		=> 'No posts were found because the words <strong>%s</strong> are not contained in any post.',

	'POST_CHARACTERS'		=> 'characters of posts',

	'RECENT_SEARCHES'		=> 'Recent searches',
	'RESULT_DAYS'			=> 'Limit results to previous',
	'RESULT_SORT'			=> 'Sort results by',
	'RETURN_FIRST'			=> 'Gev aftur fyrstu ',
	'RETURN_TO_SEARCH_ADV'	=> 'Return to advanced search',

	'SEARCHED_FOR'				=> 'Search term used',
	'SEARCHED_TOPIC'			=> 'Searched topic',
	'SEARCH_ALL_TERMS'			=> 'Search for all terms or use query as entered',
	'SEARCH_ANY_TERMS'			=> 'Search for any terms',
	'SEARCH_AUTHOR'				=> 'Leita eftir Rithøðvunda',
	'SEARCH_AUTHOR_EXPLAIN'		=> 'Brúka * sum wildcard fyri deilvíst samsvar',
	'SEARCH_FIRST_POST'			=> 'First post of topics only',
	'SEARCH_FORUMS'				=> 'Search in forums',
	'SEARCH_FORUMS_EXPLAIN'		=> 'Select the forum or forums you wish to search in. Subforums are searched automatically if you do not disable “search subforums“ below.',
	'SEARCH_IN_RESULTS'			=> 'Search these results',
	'SEARCH_KEYWORDS_EXPLAIN'	=> 'Tú kann brúka <u>AND</u> fyri at vísa á orð sum skulu vera við í úrslitinum, <u>OR</u> fyri at vísa á orð sum kunnu vera við í úrslitinum og <u>NOT</u> fyri at vísa á orð sum ikki skulu vera við í úrslitinum. Brúka * sum wildcard fyri deilvíst samsvar',
	'SEARCH_MSG_ONLY'			=> 'Leita bert í innihaldi',
	'SEARCH_OPTIONS'			=> 'Leiti Møguleikar',
	'SEARCH_QUERY'				=> 'Leiti Strongur',
	'SEARCH_SUBFORUMS'			=> 'Search subforums',
	'SEARCH_TITLE_MSG'			=> 'Leita í yvirskriftum og innihaldi',
	'SEARCH_TITLE_ONLY'			=> 'Topic titles only',
	'SEARCH_WITHIN'				=> 'Search within',
	'SORT_ASCENDING'			=> 'Hækkandi',
	'SORT_AUTHOR'				=> 'Rithøðvunda',
	'SORT_DESCENDING'			=> 'Lækkandi',
	'SORT_FORUM'				=> 'Rúmi',
	'SORT_POST_SUBJECT'			=> 'Evni',
	'SORT_TIME'					=> 'Tíð Skriva',

	'TOO_FEW_AUTHOR_CHARS'	=> 'You must specify at least %d characters of the authors name.',
));

?>