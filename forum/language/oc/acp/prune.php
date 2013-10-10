<?php
/** 
*
* acp_prune [Occitan]
*
* @package language
* @version $Id: prune.php,v 1.14 2007/10/04 15:07:24 acydburn Exp $
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


// User pruning
$lang = array_merge($lang, array(
	'ACP_PRUNE_USERS_EXPLAIN'	=> 'Ici, vous pouvez suprimir o desactivar dels utilizaires de vòstre forum. Ceci peut èsser fait à partir de différents critères: lo nombre de sujets postés, la dernière connexion, etc. Chacun d\'aquestes critères peut èsser combiné, per exemple vous pouvez gerir les utilizaires actifs per la dernière fois lo 18 décembre 2007 amb mens de 10 messatges postés. Podètz aussi entrer una liste d\'utilizaires directement dins la zone de tèxt, tous les critères entrés seront alors ignorés. Soyez vigilant amb cette fonctionnalité! Une fois qu\'un utilizaire est supprimé il n\'y a aucun moyen de revenir en arrière.',
	
	'DEACTIVATE_DELETE'  		=> 'Desactivar o suprimir',
	'DEACTIVATE_DELETE_EXPLAIN' => 'Choisissez ici de desactivar dels utilizaires o de les suprimir definitivament. Notez que l\'action de suppression est irréversible.',
	'DELETE_USERS'   			=> 'Supprimer',
	'DELETE_USER_POSTS'   		=> 'Supprimer les messatges dels utilizaires délestés',
	'DELETE_USER_POSTS_EXPLAIN' => 'Supprime les messatges dels utilizaires délestés, n\'a aucun effet sur les utilizaires désactivés.',
	
	'JOINED_EXPLAIN'   			=> 'Entrez una date al format <kbd>AAAA-MM-JJ</kbd>.',
	
	'LAST_ACTIVE_EXPLAIN'   	=> 'Entrez una date al format <kbd>AAAA-MM-JJ</kbd>.',
	
	'PRUNE_USERS_LIST'  			=> 'Utilisateurs à délester',
	'PRUNE_USERS_LIST_DELETE'   	=> 'Les comptes utilizaires répondants als critères ci-dessous seront supprimés.',
	'PRUNE_USERS_LIST_DEACTIVATE'   => 'Les comptes utilizaires répondants als critères ci-dessous seront désactivés.',
	
	'SELECT_USERS_EXPLAIN'   	=> 'Entrez ici dels noms d\'utilizaires, ils seront utilisés sans tenir compte dels critères précédents.',
	
	'USER_DEACTIVATE_SUCCESS'   => 'Les utilizaires sélectionnés ont été désactivés.',
	'USER_DELETE_SUCCESS'   	=> 'Les utilizaires sélectionnés ont été supprimés.',
	'USER_PRUNE_FAILURE'   		=> 'Aucun utilizaire ne répond als critères.',
	
	'WRONG_ACTIVE_JOINED_DATE'  => 'La date est incorrecte. Elle doit èsser al format <kbd>AAAA-MM-JJ</kbd>.',
	
));

// Forum Pruning
$lang = array_merge($lang, array(	
	'ACP_PRUNE_FORUMS_EXPLAIN'	=> 'Ceci supprimera les sujets n\'ayant pas reçu de réponse o n\'ayant pas été visualisés depuis lo nombre de jours que vous avez spécifié. Si vous ne spécifiez pas un nombre de jours, tous les sujets seront supprimés. Par défaut, cette action ne supprimera pas les sujets ayant dels sondages actifs, ni les post-it e annonces.',

	'FORUM_PRUNE'		=> 'Délestage',
	
	'NO_PRUNE'   		=> 'Pas de forums délestés.',
	
	'SELECTED_FORUM'  	=> 'Forum seleccionat',
	'SELECTED_FORUMS'   => 'Forums sélectionnés',
	
	'POSTS_PRUNED'					=> 'Messatges délestés',
	'PRUNE_ANNOUNCEMENTS'   		=> 'Délester les annonces',
	'PRUNE_FINISHED_POLLS' 			=> 'Délester les sondages expirés',
	'PRUNE_FINISHED_POLLS_EXPLAIN'  => 'Supprimer les sujets amb un sondage expiré.',
	'PRUNE_FORUM_CONFIRM'   		=> 'Etes-vous sûr de vouloir délester les forums sélectionnés selon les critères ci-dessous ? Une fois supprimés, il n\'y a aucun moyen de récupérer les sujets e les messatges.',
	'PRUNE_NOT_POSTED'   			=> 'Nombre de jours depuis lo dernier messatge posté',
	'PRUNE_NOT_VIEWED'   			=> 'Nombre de jours depuis la dernière visualisation del tèma',
	'PRUNE_OLD_POLLS'   			=> 'Délester les anciens sondages',
	'PRUNE_OLD_POLLS_EXPLAIN'  		=> 'Supprimer les sujets contenant dels sondages sans vote depuis lo nombre de jours seleccionat.',
	'PRUNE_STICKY'   				=> 'Délester les post-it',
	'PRUNE_SUCCESS'   				=> 'Lo délestage dels forums a été effectué.',
	
	'TOPICS_PRUNED'   				=> 'Sujets délestés',
));

 ?>
