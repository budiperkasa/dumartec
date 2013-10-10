<?php
/** 
*
* acp_search [Occitan]
*
* @package language
* @version $Id: search.php,v 1.21 2007/10/04 15:07:24 acydburn Exp $
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
// 'Page %s of %s' you can (and should) write 'Page %1$s of %2$s', this allows
// translators to re-order the output of data while ensuring it remains correct
//
// You do not need this where single placeholders are used, e.g. 'Message %d' is fine
// equally where a string contains only two placeholders which are used to wrap text
// in a url you again do not need to specify an order e.g., 'Click %sHERE%s' is fine

$lang = array_merge($lang, array(
	'ACP_SEARCH_INDEX_EXPLAIN'				=> 'Ici, vous pouvez gerir les indèx de recèrca. Comme vous n\'aurez à n\'en utiliser qu\'un seul, vous devriez suprimir tous les indèx inutiles. Après modification d\'un paramètre de recèrca (per exemple lo nombre de caractères minimum/maximum), il peut èsser utile de recréer l\'indèx afin que aquestes modifications soient prises en compte.',
	'ACP_SEARCH_SETTINGS_EXPLAIN'			=> 'Ici, vous pouvez définir quelle méthode serà utilisée per indexer les messatges e efectuar les recherches. Podètz définir différentes opcions qui peuvent influencer sur la puissance de calcul requise. Certains réglages sont les mêmes per toutes les méthodes de recèrca.',
	
	'COMMON_WORD_THRESHOLD'					=> 'Seuil de mot commun',
	'COMMON_WORD_THRESHOLD_EXPLAIN'			=> 'Si un mot est contenu dins un nombre de messatges supérieur al pourcentage spécifié, aqueste mot serà definit coma commun. Aquestes mots seront per la suite ignorés lors dels recherches. Botar "0" per desactivar cette option. Cette option ne fonctionne que s\'il y a plus de 100 messatges sur vòstre forum.',
	'CONFIRM_SEARCH_BACKEND'				=> 'Voulez-vous réellement changer la méthode d\'indexation ? Vous devrez recréer un indèx de recèrca per la nouvelle méthode. Si vous ne prévoyez pas de réutiliser l\'ancienne méthode d\'indexation vous pouvez la suprimir per libérer dels ressources système.',
	'CONTINUE_DELETING_INDEX'				=> 'Confirmer la suppression de l\'indèx de recèrca précédente',
	'CONTINUE_DELETING_INDEX_EXPLAIN'		=> 'Une suppression d\'indèx de recèrca a été commencée. Celle-ci doit èsser terminée o annulée per pouvoir accedir à la page de recèrca.',
	'CONTINUE_INDEXING'						=> 'Continuer la précédente indexation de la recèrca',
	'CONTINUE_INDEXING_EXPLAIN'				=> 'Une indexation de recèrca a été commencée. Celle-ci doit èsser terminée o annulée per pouvoir accedir à la page de recèrca.',
	'CREATE_INDEX'							=> 'Créer l\'indèx de recèrca',
	
	'DELETE_INDEX'							=> 'Supprimer l\'indèx de recèrca',
	'DELETING_INDEX_IN_PROGRESS'			=> 'Suppression de l\'indèx de recèrca.',
	'DELETING_INDEX_IN_PROGRESS_EXPLAIN'	=> 'Suppression de l\'indèx de recèrca en cours. Cela peut prendre quelques minutes.',
	
	'FULLTEXT_MYSQL_INCOMPATIBLE_VERSION'	=> 'La recèrca MySQL per contenu ne peut èsser utilisée qu\'amb MySQL 4 o supérieur.',
	'FULLTEXT_MYSQL_NOT_MYISAM'				=> 'L\'indexation del contenu MySQL ne peut èsser utilisée que sur dels tables MyISAM.',
	'FULLTEXT_MYSQL_TOTAL_POSTS'			=> 'Nombre total de messatges indexés',
	'FULLTEXT_MYSQL_MBSTRING'				=> 'Support dels caractères non-latin UTF-8 en utilisant la fonction mbstring:',
	'FULLTEXT_MYSQL_PCRE'					=> 'Support dels caractères non-latin UTF-8 en utilisant la fonction PCRE:',
	'FULLTEXT_MYSQL_MBSTRING_EXPLAIN'		=> 'Si PCRE n\'a pas les propriétés de caractères unicode, la recèrca s\'effectuera en utilisant lo moteur régulier d\'expression mbstring.',
	'FULLTEXT_MYSQL_PCRE_EXPLAIN'			=> 'La recèrca nécessite les propriétés de caractères unicodes PCRE, disponibles seulement depuis de PHP 4.4, 5.1 e supérieur, si vous voulez efectuar una recèrca sur dels caractères non-latin.',
	
	'GENERAL_SEARCH_SETTINGS'				=> 'Réglages généraux de recèrca',
	'GO_TO_SEARCH_INDEX'					=> 'Page de recèrca',
	
	'INDEX_STATS'							=> 'Statistiques de l\'indèx de recèrca',
	'INDEXING_IN_PROGRESS'					=> 'Indexation en cours',
	'INDEXING_IN_PROGRESS_EXPLAIN'			=> 'Lo moteur de recèrca est en train d\'indexer tous les messatges del forum. Cela peut prendre de quelques minutes à quelques heures selon la taille de vòstre forum.',
	
	'LIMIT_SEARCH_LOAD'						=> 'Limite de charge de la recèrca',
	'LIMIT_SEARCH_LOAD_EXPLAIN'				=> 'Si la charge del système dépasse cette valeur pendant 1 minute, la recèrca serà désactivée, 1.0 signifie ~100% d\'utilisation del processeur. Ne fonctionne que sur les serveurs UNIX.',
	
	'MAX_SEARCH_CHARS'						=> 'Taille maximale dels mots indexés',
	'MAX_SEARCH_CHARS_EXPLAIN'				=> 'Seuls les mots inférieurs o égaux à aqueste nombre de caractères seront indexés.',
	'MIN_SEARCH_CHARS'						=> 'Taille minimale dels mots indexés',
	'MIN_SEARCH_CHARS_EXPLAIN'				=> 'Seuls les mots supérieurs o égaux à aqueste nombre de caractères seront indexés.',
	'MIN_SEARCH_AUTHOR_CHARS'				=> 'Taille minimale del nom d\'auteur',
	'MIN_SEARCH_AUTHOR_CHARS_EXPLAIN'		=> 'Nombre de caractères minimal del nom per una recèrca per auteur amb joker. Si lo nom d\'auteur est plus court que aqueste nombre vous pourrez tout de même chercher ses messatges en saisissant son nom complet.',
	
	'PROGRESS_BAR'							=> 'Barre de progression',
	
	'SEARCH_GUEST_INTERVAL'					=> 'Intervalle de flood per les invités',
	'SEARCH_GUEST_INTERVAL_EXPLAIN'			=> 'Nombre de secondes à attendre per les invités entre 2 recherches. Si un convidat lance una recèrca les autres doivent attendre que aqueste délai soit écoulé.',
	'SEARCH_INDEX_CREATE_REDIRECT'			=> 'Tous les messatges ayant un id inférieur à %1$d ont été indexés, actuellement %2$d messatges l\'ont été.<br />Lo taux actuel d\'indexation est de %3$.1f messatges per seconde.<br />Indexation en cours…',
	'SEARCH_INDEX_DELETE_REDIRECT'			=> 'Tous les messatges ayant un id inférieur à %1$d ont été effacés de l\'indèx de recèrca.<br />Effacement en cours…',
	'SEARCH_INDEX_CREATED'					=> 'Tous les messatges del forum ont été indexés.',  
	'SEARCH_INDEX_REMOVED'					=> 'L\'indèx de la recèrca a été supprimé.',
	'SEARCH_INTERVAL'						=> 'Intervalle de flood per les utilizaires',
	'SEARCH_INTERVAL_EXPLAIN'				=> 'Nombre de secondes à attendre entre 2 recherches. Aqueste intervalle est contrôlé indépendamment per chaque utilizaire.',
	'SEARCH_STORE_RESULTS'					=> 'Durée del cache dels résultats',
	'SEARCH_STORE_RESULTS_EXPLAIN'			=> 'Les résultats mes en cache expireront après cette durée, en secondes. Botar "0" per desactivar lo cache.',
	'SEARCH_TYPE'							=> 'Méthode de recèrca',
	'SEARCH_TYPE_EXPLAIN'					=> 'phpBB vous permet de causir la méthode utilisée per rechercher dins lo contenu dels messatges. Par défaut la méthode de recèrca per contenu de phpBB serà utilisée.',
	'SWITCHED_SEARCH_BACKEND'				=> 'Vous avez changé la méthode de recèrca. Pour utiliser la nouvelle méthode, vérifiez qu\'il existe bien un indèx de recèrca per cette méthode.',
	
	'TOTAL_WORDS'							=> 'Nombre total de mots indexés',
	'TOTAL_MATCHES'							=> 'Nombre total de relations mot-messatge indexées',
	
	'YES_SEARCH'							=> 'Activar la fonction de recèrca',
	'YES_SEARCH_EXPLAIN'					=> 'Active la fonction de recèrca, aqueste qui inclut la recèrca per utilizaires.',
	'YES_SEARCH_UPDATE'						=> 'Activar la mise à jour de contenu',
	'YES_SEARCH_UPDATE_EXPLAIN'				=> 'Mise à jour dels indexations lors de l\'envoi de messatges sul forum, aqueste paramètre es pas pris en compte si la recèrca est désactivée.',
));

 ?>
