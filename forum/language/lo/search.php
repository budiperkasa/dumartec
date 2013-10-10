<?php
/**
*
* search.php [Lao]
*
* @package language
* @version $Id: $
* @copyright (c) 2008 phpBB Group
* @author 2008-05-28 - Punlao.com
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
	'ALL_AVAILABLE'	=> 'All available',
	'ALL_RESULTS'	=> 'ທຸກຜົນການຊອກຫາ',
	'DISPLAY_RESULTS'	=> 'ສະແດງຜົນການຊອກຫາແບບ',
	'FOUND_SEARCH_MATCH'	=> 'ຜົນການຊອກຫາ %d ພົບ',
	'FOUND_SEARCH_MATCHES'	=> 'ຜົນການຊອກຫາ %d ພົບ',
	'FOUND_MORE_SEARCH_MATCHES'	=> 'ຜົນການຊອກຫາຫລາຍກວ່າ %d ທີ່ພົບເຫັນ',
	'GLOBAL'	=> 'ປະກາດ',
	'IGNORED_TERMS'	=> 'ignored',
	'IGNORED_TERMS_EXPLAIN'	=> 'ຄຳທີ່ທ່ານຕ້ອງການຄົ້ນຫາບໍ່ໄດ້ຮັບການຕອບຮັບເນື່ອງຈາກຄຳ<strong>%s</strong>ມີຄວາມຫມາຍກວ້າງເກີນໄປ',
	'JUMP_TO_POST'	=> 'ໄປທີ່ຫນ້າຂຽນຂໍ້ຄວາມ',
	'LOGIN_EXPLAIN_EGOSEARCH'	=> 'ທ່ານສາມາດເບີ່ງຂໍ້ຄວາມທີ່ຂຽນໄດ້ ກໍຕໍ່ເມື່ອທ່ານສະມັກເປັນ ສະມາຊິກ ແລະ ເຂົ້າສູ່ລະບົບ',
	'NO_KEYWORDS'	=> 'You must specify at least one word to search for. Each word must consist of at least %d characters and must not contain more than %d characters excluding wildcards.',
	'NO_RECENT_SEARCHES'	=> 'No searches have been carried out recently.',
	'NO_SEARCH'	=> 'ຂໍອະໄພທ່ານບໍ່ສາມາດໃຊ້ ລະບົບການຊອກຫາໄດ້.',
	'NO_SEARCH_RESULTS'	=> 'ການຊອກຫາບໍ່ພົບເຫັນ.',
	'NO_SEARCH_TIME'	=> 'ຂໍອະໄພທ່ານບໍ່ສາມາດໃຊ້ການຊອກຫາໃນຂະນະນີ້ໄດ້. ກະລຸນາລອງອີກຄັ້ງ',
	'WORD_IN_NO_POST'	=> 'ບໍ່ພົບເຫັນເນື່ອງຈາກຄຳວ່າ <strong>%s</strong> ບໍ່ພົບໃນຂໍ້ຄວາມໃດໆ',
	'WORDS_IN_NO_POST'	=> 'ບໍ່ພົບເຫັນເນື່ອງຈາກຄຳວ່າ <strong>%s</strong> ບໍ່ພົບໃນຂໍ້ຄວາມໃດໆເລຍ. <strong>%s</strong> ບໍ່ພົບໃນຂໍ້ຄວາມໃດໆເລຍ',
	'POST_CHARACTERS'	=> 'ຄຳ',
	'RECENT_SEARCHES'	=> 'Recent searches',
	'RESULT_DAYS'	=> 'ຈຳກັດຜົນຊອກໂດຍເວລາ',
	'RESULT_SORT'	=> 'ຮຽງຜົນຊອກໂດຍ',
	'RETURN_FIRST'	=> 'ຈຳນວນຄຳໂດຍປະມານຂອງຂໍ້ຄວາມ',
	'RETURN_TO_SEARCH_ADV'	=> 'ກັບໄປທີ່ການຊອກຫາຂັ້ນສູງ',
	'SEARCHED_FOR'	=> 'Search term used',
	'SEARCHED_TOPIC'	=> 'ຊອກຫາກະທູ້',
	'SEARCH_ALL_TERMS'	=> 'Search for all terms or use query as entered',
	'SEARCH_ANY_TERMS'	=> 'Search for any terms',
	'SEARCH_AUTHOR'	=> 'ຊອກຫາເຈົ້າຂອງກະທູ້',
	'SEARCH_AUTHOR_EXPLAIN'	=> 'Use * as a wildcard for partial matches.',
	'SEARCH_FIRST_POST'	=> 'ຂໍ້ຄວາມທຳອິດໃນກະທູ້ເທົ່ານັ້ນ',
	'SEARCH_FORUMS'	=> 'ຊອກຫາໃນກະທູ້',
	'SEARCH_FORUMS_EXPLAIN'	=> 'Select the forum or forums you wish to search in. Subforums are searched automatically if you do not disable “search subforums“ below.',
	'SEARCH_IN_RESULTS'	=> 'Search these results',
	'SEARCH_KEYWORDS_EXPLAIN'	=> 'Place <strong>+</strong> in front of a word which must be found and <strong>-</strong> in front of a word which must not be found. Put a list of words separated by <strong>|</strong> into brackets if only one of the words must be found. Use * as a wildcard for partial matches.',
	'SEARCH_MSG_ONLY'	=> 'ຂໍ້ຄວາມສ່ວນຕົວທີ່ເປັນຕົວຫນັງສືເທົ່ານັ້ນ',
	'SEARCH_OPTIONS'	=> 'ຂອກຫາຕົວເລືອກ',
	'SEARCH_QUERY'	=> 'ຊອກປະມວນຜົນ',
	'SEARCH_SUBFORUMS'	=> 'ຊອກຫມວດຍ່ອຍ',
	'SEARCH_TITLE_MSG'	=> 'ຂຽນຊື່ຂໍ້ຄວາມ ແລະ ຂໍ້ຄວາມສ່ວນຕົວ',
	'SEARCH_TITLE_ONLY'	=> 'ຊື່ກະທູ້ເທົ່ານັ້ນ',
	'SEARCH_WITHIN'	=> 'ຊອກຫາພາຍໃນ',
	'SORT_ASCENDING'	=> 'ແຕ່ເທິງຫາລຸ່ມ',
	'SORT_AUTHOR'	=> 'ເຈົ້າຂອງກະທູ້',
	'SORT_DESCENDING'	=> 'ແຕ່ລຸ່ມຫາເທິງ',
	'SORT_FORUM'	=> 'ກະທູ້',
	'SORT_POST_SUBJECT'	=> 'ຊື່ຂໍ້ຄວາມ',
	'SORT_TIME'	=> 'ເວລາທີ່ຂຽນຂໍ້ຄວາມ',
	'TOO_FEW_AUTHOR_CHARS'	=> 'ທ່ານຕ້ອງລະບຸຊື່ເຈົ້າຂອງກະທູ້ຢ່າງໜ້ອຍ %d ໂຕ',
));

?>