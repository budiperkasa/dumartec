<?php
/**
*
* search [Catalan (Valencian)]
*
* @package language
* @version $Id: common.php,v 1.180 2007/05/20 14:01:46 acydburn Exp $
* @copyright (c) 2005 phpBB Group 
* @license http://opensource.org/licenses/gpl-license.php GNU Public License 
*
* Translated by//Traduït per Pau Iranzo <pau@somgnu.cat>
* Team//Equip de traducció de SomGNU <info@somgnu.cat>
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
	'ALL_AVAILABLE'			=> 'Tots els disponibles',
	'ALL_RESULTS'			=> 'Tots els resultats',

	'DISPLAY_RESULTS'		=> 'Mostra els resultats com a',

	'FOUND_SEARCH_MATCH'		=> 'S\'ha trobat %d coincidència',
	'FOUND_SEARCH_MATCHES'		=> 'S\'han trobat %d coincidències',
	'FOUND_MORE_SEARCH_MATCHES'	=> 'S\'han trobat més de %d coincidències',

	'GLOBAL'				=> 'Anunci global',

	'IGNORED_TERMS'			=> 'ignorat',
	'IGNORED_TERMS_EXPLAIN'	=> 'Les següents paraules de la vostra cerca s\'han ignorat: <strong>%s</strong>.',

	'JUMP_TO_POST'			=> 'Vés al missatge',

	'LOGIN_EXPLAIN_EGOSEARCH'	=> 'Heu d\'estar registrat i amb la sessió iniciada per per poder visualitzar les vostres entrades.',

	'NO_KEYWORDS'			=> 'Heu d\'especificar com a mínim una paraula per a la cerca. Cada paraula ha de contindre com a mínim %d caràcters i %d com a màxim.',
	'NO_RECENT_SEARCHES'	=> 'No s\'ha fet cap cerca recentment.',
	'NO_SEARCH'				=> 'No esteu autoritzats per fer servir el sistema de cerca.',
	'NO_SEARCH_RESULTS'		=> 'No hi ha temes ni missatges que coincideixin amb els criteris de cerca',
	'NO_SEARCH_TIME'		=> 'No podeu fer servir la cerca en aquest moment. Proveu en uns minuts.',
	'WORD_IN_NO_POST'		=> 'No s\'ha trobat cap resultat perquè la paraula <strong>%s</strong> no es troba a cap missatge.',
	'WORDS_IN_NO_POST'		=> 'No s\'ha trobat cap resultat perquè les paraules <strong>%s</strong> no es troben a cap missatge.',

	'POST_CHARACTERS'		=> 'caràcters del missatges',

	'RECENT_SEARCHES'		=> 'Cerques recents',
	'RESULT_DAYS'			=> 'Cerca en els passats',
	'RESULT_SORT'			=> 'Mostra els resultats per',
	'RETURN_FIRST'			=> 'Mostra els primers',
	'RETURN_TO_SEARCH_ADV'	=> 'Torna a cerca avançada',

	'SEARCHED_FOR'				=> 'Terme de cerca utilitzat',
	'SEARCHED_TOPIC'			=> 'Tema cercat',
	'SEARCH_ALL_TERMS'			=> 'Cerca tots els termes o utilitza la consulta tal com s\'ha introduït',
	'SEARCH_ANY_TERMS'			=> 'Cerca qualsevol dels termes',
	'SEARCH_AUTHOR'				=> 'Cerca per autor',
	'SEARCH_AUTHOR_EXPLAIN'		=> 'Feu servir <strong>*</strong> per a cerques parcials.',
	'SEARCH_FIRST_POST'			=> 'Només primer missatge dels temes',
	'SEARCH_FORUMS'				=> 'Cerca als fòrums',
	'SEARCH_FORUMS_EXPLAIN'		=> 'Sel·leccioneu el fòrum o fòrums als quals voleu cercar. Sel·leccionant un fòrum, el sistema cercarà automàticament als subfòrums que puga haver-hi.',
	'SEARCH_IN_RESULTS'			=> 'Cerca aquests resultats',
	'SEARCH_KEYWORDS_EXPLAIN'	=> 'Podeu fer servir <strong>+</strong> per a indicar les paraules que han de ser als resultats i <strong>-</strong> per a ndicar les paraules que poden ser als resultats. També podeu fer un llistat de paraules fent servir <strong>|</strong> entre les paraules per a cercar només una de les paraules. Feu servir <strong>*</strong> per a cerques parcials.',
	'SEARCH_MSG_ONLY'			=> 'Només als textos dels temes',
	'SEARCH_OPTIONS'			=> 'Opcions de cerca',
	'SEARCH_QUERY'				=> 'Consulta de cerca',
	'SEARCH_SUBFORUMS'			=> 'Cerca als subfòrums',
	'SEARCH_TITLE_MSG'			=> 'Assumpte i text dels temes',
	'SEARCH_TITLE_ONLY'			=> 'Només títols dels temes',
	'SEARCH_WITHIN'				=> 'Cerca dins de',
	'SORT_ASCENDING'			=> 'Ascendent',
	'SORT_AUTHOR'				=> 'Autor',
	'SORT_DESCENDING'			=> 'Descendent',
	'SORT_FORUM'				=> 'Fòrum',
	'SORT_POST_SUBJECT'			=> 'Assumpte del missatge',
	'SORT_TIME'					=> 'Data del missatge',

	'TOO_FEW_AUTHOR_CHARS'	=> 'Heu d\'especificar almenys %d caràcters del nom de l\'autor.',
));

?>
