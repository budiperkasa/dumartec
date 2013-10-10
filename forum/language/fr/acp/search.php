<?php
/**
*
* acp_search [French]
*
* @package language
* @version $Id: search.php 9126 2008-11-26 19:17:52Z naderman $
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
	'ACP_SEARCH_INDEX_EXPLAIN'				=> 'Vous pouvez gérer ici les méthodes d’indexation de la recherche. Étant donné que le moteur de recherche n’utilise qu’une seule méthode d’indexation, vous devriez supprimer toutes les indexations inutilisées. Après la modification de la plupart des réglages de la recherche (c-à-d le nombre minimum/maximum de caractères), il serait préférable de recréer l’index pour qu’il prenne en compte ces modifications.',
	'ACP_SEARCH_SETTINGS_EXPLAIN'			=> 'Vous pouvez définir ici la méthode d’indexation de la recherche qui sera utilisée pour l’indexation des messages et l’exécution des recherches. Vous pouvez régler différentes options qui peuvent influencer sur le nombre d’exécutions que ces actions demandent. Certains de ces réglages sont les mêmes pour toutes les méthodes d’indexation du moteur de recherche.',

	'COMMON_WORD_THRESHOLD'					=> 'Seuil de mot commun',
	'COMMON_WORD_THRESHOLD_EXPLAIN'			=> 'Les mots qui sont contenus dans la majorité des messages seront considérés comme communs. Les mots communs sont ignorés des recherches. Réglez ceci à “0” pour désactiver ce comportement. Cela ne prend effet que s’il y a plus de 100 messages. Si vous souhaitez que les mots considérés comme communs soient reconsidérés, vous devez recréer l’index.',
	'CONFIRM_SEARCH_BACKEND'				=> 'Êtes-vous sûr de vouloir modifier votre méthode d’indexation pour une méthode différente ? Après la modification de la méthode d’indexation, vous devez créer un index. Si vous ne prévoyez pas de restaurer l’ancienne méthode d’indexation, vous pouvez également la supprimer afin de libérer des ressources systèmes.',
	'CONTINUE_DELETING_INDEX'				=> 'Continuer le processus de suppression de l’index précédent',
	'CONTINUE_DELETING_INDEX_EXPLAIN'		=> 'Un processus de suppression de l’ancien index a été commencé. Afin d’accéder à la page de l’index de la recherche, vous devez avoir terminé, ou annuler.',
	'CONTINUE_INDEXING'						=> 'Continuer le précédent processus d’indexation',
	'CONTINUE_INDEXING_EXPLAIN'				=> 'Un processus d’indexation a été commencé. Afin d’accéder à la page d’indexation de la recherche, vous devez le terminer ou l’annuler.',
	'CREATE_INDEX'							=> 'Créer un index',

	'DELETE_INDEX'							=> 'Supprimer un index',
	'DELETING_INDEX_IN_PROGRESS'			=> 'Suppression de l’index en cours.',
	'DELETING_INDEX_IN_PROGRESS_EXPLAIN'	=> 'La méthode d’indexation de la recherche est actuellement en train de vider son index. Cela peut prendre quelques minutes.',

	'FULLTEXT_MYSQL_INCOMPATIBLE_VERSION'	=> 'L’indexation FULLTEXT de MySQL ne peut être utilisé qu’avec MySQL4 et plus.',
	'FULLTEXT_MYSQL_NOT_MYISAM'				=> 'Les indexations FULLTEXT de MySQL ne peuvent être utilisés qu’avec les tables MyISAM.',
	'FULLTEXT_MYSQL_TOTAL_POSTS'			=> 'Nombre total de messages indexés',
	'FULLTEXT_MYSQL_MBSTRING'				=> 'Support des caractères UTF-8 non-latin utilisant mbstring :',
	'FULLTEXT_MYSQL_PCRE'					=> 'Support des caractères UTF-8 non-latin utilisant PCRE :',
	'FULLTEXT_MYSQL_MBSTRING_EXPLAIN'		=> 'Si PCRE n’a pas de propriétés de caractère unicode, l’index de la recherche essaiera d’utiliser le moteur d’expressions régulières de mbstring.',
	'FULLTEXT_MYSQL_PCRE_EXPLAIN'			=> 'Si vous souhaitez rechercher des caractères non-latin, vous devez détenir les propriétés de caractère unicode de PCRE qui sont seulement disponibles dans PHP 4.4, 5.1 et au-dessus.',

	'GENERAL_SEARCH_SETTINGS'				=> 'Réglages généraux de la recherche',
	'GO_TO_SEARCH_INDEX'					=> 'Aller sur la page d’index de la recherche',

	'INDEX_STATS'							=> 'Statistiques d’index',
	'INDEXING_IN_PROGRESS'					=> 'Indexation en cours',
	'INDEXING_IN_PROGRESS_EXPLAIN'			=> 'La méthode d’indexation de la recherche est actuellement en train d’indexer tous les messages du forum. Cela peut prendre quelques heures et dépend de la taille de votre forum.',

	'LIMIT_SEARCH_LOAD'						=> 'Limite de la charge du système de la page de la recherche',
	'LIMIT_SEARCH_LOAD_EXPLAIN'				=> 'Si la charge du système dépasse cette valeur durant une minute, la page de recherche sera mise hors-ligne, 1.0 équivalant à ~100% d’utilisation du processeur. Cela ne fonctionne que sur les serveurs basés sous UNIX.',

	'MAX_SEARCH_CHARS'						=> 'Caractères maximum indexés par la recherche',
	'MAX_SEARCH_CHARS_EXPLAIN'				=> 'Des mots avec moins de caractères seront indexés pour la recherche.',
	'MIN_SEARCH_CHARS'						=> 'Caractères minimum indexés par la recherche',
	'MIN_SEARCH_CHARS_EXPLAIN'				=> 'Des mots avec plus de caractères seront indexés pour la recherche.',
	'MIN_SEARCH_AUTHOR_CHARS'				=> 'Caractères minimum du nom de l’auteur',
	'MIN_SEARCH_AUTHOR_CHARS_EXPLAIN'		=> 'Les utilisateurs doivent saisir au moins ce nombre de caractères en exécutant une recherche d’auteurs avec un joker. Si le nom de l’auteur est plus court que ce nombre, vous pouvez également rechercher les messages de l’auteur en entrant le nom d’utilisateur complet.',

	'PROGRESS_BAR'							=> 'Barre de progression',

	'SEARCH_GUEST_INTERVAL'					=> 'Intervalle de flood de la recherche des invités',
	'SEARCH_GUEST_INTERVAL_EXPLAIN'			=> 'Nombre de secondes qu’un invité doit attendre entre chaque recherche. Si un invité est en train d’effectuer une recherche, tous les autres doivent attendre que ce temps d’intervalle soit expiré.',
	'SEARCH_INDEX_CREATE_REDIRECT'			=> 'Tous les messages depuis le message dont l’ID est %1$d sont maintenant indexés, ce qui fait %2$d messages.<br />Le taux actuel d’indexation est approximativement de %3$.1f messages par seconde.<br />Indexation en cours…',
	'SEARCH_INDEX_DELETE_REDIRECT'			=> 'Tous les messages depuis le message dont l’ID est %1$d ont été supprimés de l’index de recherche.<br />Suppression en cours…',
	'SEARCH_INDEX_CREATED'					=> 'Tous les messages ont été indexés dans la base de données du forum avec succès.',
	'SEARCH_INDEX_REMOVED'					=> 'L’index de recherche a été supprimé de cette méthode d’indexation avec succès.',
	'SEARCH_INTERVAL'						=> 'Intervalle de flood de la recherche des utilisateurs',
	'SEARCH_INTERVAL_EXPLAIN'				=> 'Nombre de secondes qu’un utilisateur doit attendre entre chaque recherche. Cet intervalle est vérifié indépendamment pour chaque utilisateur.',
	'SEARCH_STORE_RESULTS'					=> 'Durée de la mise en cache des résultats de la recherche',
	'SEARCH_STORE_RESULTS_EXPLAIN'			=> 'Les résultats de la recherche mis en cache expireront après cette durée exprimée en secondes. Réglez ceci à “0” si vous souhaitez désactiver la mise en cache des résultats de la recherche.',
	'SEARCH_TYPE'							=> 'Méthode d’indexation de la recherche',
	'SEARCH_TYPE_EXPLAIN'					=> 'phpBB vous permet de choisir la méthode d’indexation qui est utilisé pour la recherche de texte dans le contenu des messages. Par défaut, la recherche de phpBB utilisera FULLTEXT.',
	'SWITCHED_SEARCH_BACKEND'				=> 'Vous avez modifié la méthode d’indexation de la recherche. Afin d’utiliser la nouvelle méthode d’indexation de la recherche, vous devriez vous assurer qu’il existe un index pour celle-ci.',

	'TOTAL_WORDS'							=> 'Nombre total de mots indexés',
	'TOTAL_MATCHES'							=> 'Nombre total de mots indexés en relation avec les sujets',

	'YES_SEARCH'							=> 'Activer la fonctionnalité de recherche',
	'YES_SEARCH_EXPLAIN'					=> 'Active la fonctionnalité de recherche, ce qui inclut la recherche des membres.',
	'YES_SEARCH_UPDATE'						=> 'Activer la mise à jour de FULLTEXT',
	'YES_SEARCH_UPDATE_EXPLAIN'				=> 'Met à jour les index de FULLTEXT lors de la publication de messages, la recherche sera écrasée si ceci est activé.',
));

?>
