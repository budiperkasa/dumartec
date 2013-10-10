<?php
/**
*
* search [Brezhoneg]
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
	'ALL_AVAILABLE'			=> 'Holl da gaout',
	'ALL_RESULTS'			=> 'Holl disoc\'hoù',

	'DISPLAY_RESULTS'		=> 'Diskouez an disoc\'hoù evel',

	'FOUND_SEARCH_MATCH'		=> '%d disoc\'h a zo bet kavet',
	'FOUND_SEARCH_MATCHES'		=> '%d disoc\'h a zo bet kavet',
	'FOUND_MORE_SEARCH_MATCHES'	=> 'Ouzhpenn %d disoc\'h a zo bet kavet',

	'GLOBAL'				=> 'Kemenn hollek',

	'IGNORED_TERMS'			=> 'ket bet klasket',
	'IGNORED_TERMS_EXPLAIN'	=> 'N\'eo ket bet klasket ar gerioù da-heul peogwir e oant re voutin&nbsp;: <strong>%s</strong>.',

	'JUMP_TO_POST'			=> 'Mont d\'ar gemennadenn',

	'LOGIN_EXPLAIN_EGOSEARCH'	=> 'Dav eo deoc\'h bezañ emezelet hag anavezet gant aar forom evit gallout gwelet ho kemennadennoù.',

	'NO_KEYWORDS'			=> 'Dav eo deoc\'h lakaat ur ger d\'an nebeutañ da vezañ klasket. D\'an nebeutañ %d arouez ha d\'ar muiañ %d arouez (hep kontañ ar *) e rank bezañ ar gerioù.',
	'NO_RECENT_SEARCHES'	=> 'N\'eus bet klasket netra nevez \'zo.',
	'NO_SEARCH'				=> 'Digarez, met n\'oc\'h ket aotreet d\'ober enklaskoù.',
	'NO_SEARCH_RESULTS'		=> 'N\'eus bet kavet disoc\'h dereat ebet.',
	'NO_SEARCH_TIME'		=> 'Digarez, met n\'hallit ket ober enklaskoù diouzhtu. Klaskit en-dro a-benn ur pennadig.',
	'WORD_IN_NO_POST'		=> 'N\'eus bet kavet kemennadenn ebet peogwir n\'emañ ar ger <strong>%s</strong> e hini ebet.',
	'WORDS_IN_NO_POST'		=> 'N\'eus bet kavet kemennadenn ebet peogwir n\'emañ ar gerioù <strong>%s</strong> e hini ebet.',

	'POST_CHARACTERS'		=> 'arouezioù ar c\'hemennadennoù',

	'RECENT_SEARCHES'		=> 'Enklaskoù bet graet nevez \'zo',
	'RESULT_DAYS'			=> 'Klask abaoe',
	'RESULT_SORT'			=> 'Urzhiañ diouzh',
	'RETURN_FIRST'			=> 'Klask e',
	'RETURN_TO_SEARCH_ADV'	=> 'Distreiñ d\'ar c\'hlask aroakaet',

	'SEARCHED_FOR'				=> 'Ger bet klasket',
	'SEARCHED_TOPIC'			=> 'Sujed bet klasket ennañ',
	'SEARCH_ALL_TERMS'			=> 'Klask an holl c\'herioù asambles',
	'SEARCH_ANY_TERMS'			=> 'Klask evit forzh peseurt ger',
	'SEARCH_AUTHOR'				=> 'Klask evit un aozer',
	'SEARCH_AUTHOR_EXPLAIN'		=> 'Grit gant * evit klask traoù diglok.',
	'SEARCH_FIRST_POST'			=> 'Kemennadenn gentañ ar sujed hepken',
	'SEARCH_FORUMS'				=> 'Klask er foromoù',
	'SEARCH_FORUMS_EXPLAIN'		=> 'Diuzit ar forom pe ar foromoù ho peus c\'hoant da glask enno. Evit mont buanoc\'h :klasket e vo diouzhtu en adforomoù, nemet ma vefe tennet an dibab “klask en adforomoù” ganeoc\'h.',
	'SEARCH_IN_RESULTS'			=> 'Klask en disoc\'hoù-mañ',
	'SEARCH_KEYWORDS_EXPLAIN'	=> 'Lakait <strong>+</strong> dirak ur ger a rank bezañ kavet, ha <strong>-</strong> dirak unan eo arabat kavout. Lakait ul listenn gerioù etre kromelloù, un <strong>|</strong> etre pep hini, ma ne rank nemet unan eus gerioù al listenn bezañ kavet. Grit gant * evit klask gerioù diglok (da skouer : fur* evit : furlukin, furnezh, furm, ...).',
	'SEARCH_MSG_ONLY'			=> 'Testenn ar c\'hemennadennoù hepken',
	'SEARCH_OPTIONS'			=> 'Dilennoù enklask',
	'SEARCH_QUERY'				=> 'Goulenn an enklask',
	'SEARCH_SUBFORUMS'			=> 'Klask en adforomoù',
	'SEARCH_TITLE_MSG'			=> 'Sujed ha testenn ar c\'hemennadennoù',
	'SEARCH_TITLE_ONLY'			=> 'Titloù ar sujedoù hepken',
	'SEARCH_WITHIN'				=> 'Klask e',
	'SORT_ASCENDING'			=> 'Krekus',
	'SORT_AUTHOR'				=> 'Aozer',
	'SORT_DESCENDING'			=> 'Diskreskus',
	'SORT_FORUM'				=> 'Forom',
	'SORT_POST_SUBJECT'			=> 'Sujed',
	'SORT_TIME'					=> 'Mare ar c\'hasadenn',

	'TOO_FEW_AUTHOR_CHARS'	=> '%d arouez d\an nebeutañ e rank bezañ anv an aozer.',
));

?>
