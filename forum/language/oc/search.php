<?php
/**
*
* search [Occitan]
*
* @package language
* @version $Id : search.php,v 1.26 2007/10/04 15 :07 :24 acydburn Exp $
* @copyright (c) 2005 phpBB Group
* @license http://opensource.org/licenses/gpl-license.php GNU Public License
*
*/
/**
* CONTRIBUTORS
* Translation made by phpBB-fr.com and phpBB.biz Teams
* http://www.phpbb-fr.com
* http://www.phpbb.biz
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
// 'Pagina %s of %s' you can (and should) write 'Pagina %1$s of %2$s', this allows
// translators to re-order the output of data while ensuring it remains correct
//
// You do not need this where single placeholders are used, e.g. 'Messatge %d' is fine
// equally where a string contains only two placeholders which are used to wrap text
// in a url you again do not need to specify an order e.g., 'Click %sHERE%s' is fine

$lang = array_merge($lang, array(
	'ALL_AVAILABLE'   => 'Totes disponibles',
	'ALL_RESULTS'   => 'Totes los résultats',

	'DISPLAY_RESULTS'   => 'Visualizar los résultats sous forme de',

	'FOUND_SEARCH_MATCH'   => '%d résultat trobat',
    'FOUND_SEARCH_MATCHES'   => '%d résultats trouvés',
	'FOUND_MORE_SEARCH_MATCHES'   => 'La recèrca a trobat plus de %d résultats',

	'GLOBAL'   => 'Anóncia generala',

	'IGNORED_TERMS'   => 'ignorat',
	'IGNORED_TERMS_EXPLAIN'   => 'Los mots suivants de vòstre recèrca son estats ignorats parce qu\'ils son trop communs : <strong>%s</strong>.',

	'JUMP_TO_POST' => 'Anar al messatge',

	'LOGIN_EXPLAIN_EGOSEARCH'	=> 'Debètz èsser enregistrat e connectat afin de veire vòstres propres messatges.',

	'NO_KEYWORDS'   => 'Debètz indicar al mens un mot per efectuar una recèrca. Chaque mot deu se composer d\'al mens %d caractèrs e ne deu pas en conténer plus de %d en excluant los jokers.',
	'NO_RECENT_SEARCHES'   => 'Pas cap de recèrca n\'es estat effectuée récemment.',
	'NO_SEARCH'   => 'Desconsolat mas vos n\'êtes pas autorizat d\'utilizar lo sistèma de recèrca.',
	'NO_SEARCH_RESULTS'   => 'Pas cap de tèma o messatge ne correspond a vòstres critères de recèrca.',
	'NO_SEARCH_TIME'   => 'Desconsolat mas podètz pas utilizar la foncion recèrca actualament. Mercé de réessayer dins un momenton.',
	'WORD_IN_NO_POST'   => 'Pas cap de résultat trobat pel mot <strong>%s</strong>.',
	'WORDS_IN_NO_POST'   => 'Pas cap de résultat trobat per los mots <strong>%s</strong>.',

	'POST_CHARACTERS'   => 'premiers caractèrs dels messatges',

	'RECENT_SEARCHES'   => 'Recherches récentes',
	'RESULT_DAYS'   => 'Recercar dempuèi',
	'RESULT_SORT'   => 'Classer los résultats per',
	'RETURN_FIRST'   => 'Tornar enviar los',
	'RETURN_TO_SEARCH_ADV'   => 'Revenir a la recèrca avancée',

	'SEARCHED_FOR'   => 'Recercar los termes utilisés',
    'SEARCHED_TOPIC'   => 'Tèma recercat',
    'SEARCH_ALL_TERMS'   => 'Recercar totes los termes',
    'SEARCH_ANY_TERMS'   => 'Recercar n\'importe lequel d\'aquestes termes',
    'SEARCH_AUTHOR'   => 'Recercar per auteur',
	'SEARCH_AUTHOR_EXPLAIN'   => 'Utilizatz un * coma joker per dels recherches partielles.',
    'SEARCH_FIRST_POST'   => 'Premier messatge dels tèmas sonque',
    'SEARCH_FORUMS'   => 'Recercar dins los forums',
    'SEARCH_FORUMS_EXPLAIN'   => 'Causissètz lo forum o los forums dins lo(s)quel(s) vos souhaitez efectuar una recèrca. Los sous-forums son automaticament inclus se vos ne désactivez pas l\'option çai-jos "Rechercher dins los sous-forums".',
    'SEARCH_IN_RESULTS'   => 'Recercar dins aquestes résultats',
    'SEARCH_KEYWORDS_EXPLAIN'   => 'Placez un <strong>+</strong> dabans un mot qui deu èsser trobat e un <strong>-</strong> dabans un mot qui deu èsser exclu. Tapez una suite de mots séparés per dels <strong>|</strong> entre crochets se sonque un dels mots deu èsser trobat. Utilizatz un * coma joker per dels recherches partielles.',
	'SEARCH_MSG_ONLY'   => 'Messatges sonque',
	'SEARCH_OPTIONS'   => 'Opcions de recèrca',
	'SEARCH_QUERY'   => 'Recercar',
	'SEARCH_SUBFORUMS'   => 'Recercar dins los sous-forums',
	'SEARCH_TITLE_MSG'   => 'Titres e messatges',
	'SEARCH_TITLE_ONLY'   => 'Titres sonque',
	'SEARCH_WITHIN'   => 'Recercar dins',
	'SORT_ASCENDING'   => 'Creiscent',
    'SORT_AUTHOR'   => 'Auteur',
	'SORT_DESCENDING'   => 'Descreiscent',
    'SORT_FORUM'   => 'Fòrom',
    'SORT_POST_SUBJECT'   => 'Tèma del messatge',
    'SORT_TIME'   => 'Data',

	'TOO_FEW_AUTHOR_CHARS'   => 'Debètz indicar al mens %d caractèrs del nom de l\'auteur.',
));

 ?>
