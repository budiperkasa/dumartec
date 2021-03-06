<?php
/**
*
* search [French]
*
* @package language
* @version $Id: search.php 8479 2008-03-29 00:22:48Z naderman $
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

//
// TRANSLATION DETAILS
//
// Author: Xaphos (Maël Soucaze)
// Website: http://www.phpbb.fr/
//
// TRANSLATION LICENSE
//
// This program is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, version 2 of the License.
//
// This program is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with this program. If not, see http://opensource.org/licenses/gpl-license.php.
//
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
//

$lang = array_merge($lang, array(
	'ALL_AVAILABLE'			=> 'Tous disponibles',
	'ALL_RESULTS'			=> 'Tous les résultats',

	'DISPLAY_RESULTS'		=> 'Afficher les résultats sous forme de',

	'FOUND_SEARCH_MATCH'		=> 'La recherche a trouvé %d résultat',
	'FOUND_SEARCH_MATCHES'		=> 'La recherche a trouvé %d résultats',
	'FOUND_MORE_SEARCH_MATCHES'	=> 'La recherche a trouvé plus de %d résultats',

	'GLOBAL'				=> 'Annonce globale',

	'IGNORED_TERMS'			=> 'ignorés',
	'IGNORED_TERMS_EXPLAIN'	=> 'Les mots suivants ont été ignorés de votre recherche car ils étaient des mots trop courants : <strong>%s</strong>.',

	'JUMP_TO_POST'			=> 'Sauter vers le message',

	'LOGIN_EXPLAIN_EGOSEARCH'	=> 'Vous devez vous inscrire et vous connecter afin de consulter vos messages.',

	'NO_KEYWORDS'			=> 'Vous devez spécifier au moins un mot afin d’effectuer une recherche. Chaque mot doit être composé d’au moins %d caractères et ne doit pas contenir plus de %d caractères, en excluant les jokers.',
	'NO_RECENT_SEARCHES'	=> 'Aucune recherche n’a été effectuée récemment.',
	'NO_SEARCH'				=> 'Désolé mais vous n’êtes pas autorisé à utiliser le système de recherche.',
	'NO_SEARCH_RESULTS'		=> 'Aucun résultat approprié n’a été trouvé.',
	'NO_SEARCH_TIME'		=> 'Désolé mais vous ne pouvez pas utiliser le système de recherche actuellement. Veuillez réessayer ultérieurement.',
	'WORD_IN_NO_POST'		=> 'Aucun message n’a été trouvé car le mot <strong>%s</strong> n’est contenu dans aucun message.',
	'WORDS_IN_NO_POST'		=> 'Aucun message n’a été trouvé car les mots <strong>%s</strong> ne sont contenus dans aucun message.',

	'POST_CHARACTERS'		=> 'caractères des messages',

	'RECENT_SEARCHES'		=> 'Recherches effectuées récemment',
	'RESULT_DAYS'			=> 'Limiter les résultats au précédent',
	'RESULT_SORT'			=> 'Trier les résultats par',
	'RETURN_FIRST'			=> 'Retourner en premier les',
	'RETURN_TO_SEARCH_ADV'	=> 'Retourner à la recherche avancée',

	'SEARCHED_FOR'				=> 'Rechercher les termes utilisés',
	'SEARCHED_TOPIC'			=> 'Sujet recherché',
	'SEARCH_ALL_TERMS'			=> 'Rechercher pour tous les termes ou utiliser une question comme entrée',
	'SEARCH_ANY_TERMS'			=> 'Rechercher n’importe quels de ces termes',
	'SEARCH_AUTHOR'				=> 'Rechercher par auteur',
	'SEARCH_AUTHOR_EXPLAIN'		=> 'Utilisez * comme joker pour des recherches partielles.',
	'SEARCH_FIRST_POST'			=> 'Premier message des sujets uniquement',
	'SEARCH_FORUMS'				=> 'Rechercher dans les forums',
	'SEARCH_FORUMS_EXPLAIN'		=> 'Sélectionnez le forum ou les forums dans le(s)quel(s) vous souhaitez effectuer une recherche. Les sous-forums seront automatiquement inclus dans la recherche si vous ne désactivez pas l’option “Rechercher dans les sous-forums” ci-dessous.',
	'SEARCH_IN_RESULTS'			=> 'Rechercher dans ces résultats',
	'SEARCH_KEYWORDS_EXPLAIN'	=> 'Insérez <strong>+</strong> devant un mot qui doit être trouvé et <strong>-</strong> devant un mot qui ne doit pas être trouvé. Insérez une liste de mots séparés entre des barres verticales discontinues <strong>|</strong> si seul un des mots doit être trouvé. Utilisez * comme joker pour des recherches partielles.',
	'SEARCH_MSG_ONLY'			=> 'Texte des messages uniquement',
	'SEARCH_OPTIONS'			=> 'Options de la recherche',
	'SEARCH_QUERY'				=> 'Question de la recherche',
	'SEARCH_SUBFORUMS'			=> 'Rechercher dans les sous-forums',
	'SEARCH_TITLE_MSG'			=> 'Titres des sujets et texte des messages',
	'SEARCH_TITLE_ONLY'			=> 'Titres des sujets uniquement',
	'SEARCH_WITHIN'				=> 'Rechercher dans',
	'SORT_ASCENDING'			=> 'Croissant',
	'SORT_AUTHOR'				=> 'Auteur',
	'SORT_DESCENDING'			=> 'Décroissant',
	'SORT_FORUM'				=> 'Forum',
	'SORT_POST_SUBJECT'			=> 'Sujet du message',
	'SORT_TIME'					=> 'Heure du message',

	'TOO_FEW_AUTHOR_CHARS'	=> 'Vous devez spécifier au moins %d caractères des noms des auteurs.',
));

?>
