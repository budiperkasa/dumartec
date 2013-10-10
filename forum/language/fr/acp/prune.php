<?php
/**
*
* acp_prune [French]
*
* @package language
* @version $Id: prune.php 8479 2008-03-29 00:22:48Z naderman $
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

// User pruning
$lang = array_merge($lang, array(
	'ACP_PRUNE_USERS_EXPLAIN'	=> 'Vous pouvez supprimer ou désactiver ici des utilisateurs de votre forum. Cela peut être réalisé de différentes manières ; par le nombre de messages, la dernière activité, etc. Chacun de ces critères peuvent être combinés, vous pouvez par exemple délester les utilisateurs qui ont été actifs pour la dernière fois le 01-01-2002 et qui ont moins de 10 messages. De même, vous pouvez saisir directement une liste d’utilisateurs depuis la zone de texte, chaque critère saisi sera alors ignoré. Soyez vigilant avec cette fonctionnalité ! Une fois qu’un utilisateur a été supprimé, vous ne pourrez pas revenir en arrière.',

	'DEACTIVATE_DELETE'			=> 'Désactiver ou supprimer',
	'DEACTIVATE_DELETE_EXPLAIN'	=> 'Choisissez entre désactiver des utilisateurs ou les supprimer entièrement, notez que cette opération est irréversible !',
	'DELETE_USERS'				=> 'Supprimer',
	'DELETE_USER_POSTS'			=> 'Supprimer les messages des utilisateurs délestés',
	'DELETE_USER_POSTS_EXPLAIN' => 'Supprime les messages des utilisateurs délestés, cela n’a aucun effet si les utilisateurs sont désactivés.',

	'JOINED_EXPLAIN'			=> 'Saisissez une date au format <kbd>AAAA-MM-JJ</kbd>.',

	'LAST_ACTIVE_EXPLAIN'		=> 'Saisissez une date au format <kbd>AAAA-MM-JJ</kbd>.',

	'PRUNE_USERS_LIST'				=> 'Utilisateurs à délester',
	'PRUNE_USERS_LIST_DELETE'		=> 'En accord avec le critère sélectionné pour le délestage des utilisateurs, les comptes suivants seront supprimés.',
	'PRUNE_USERS_LIST_DEACTIVATE'	=> 'En accord avec le critère sélectionné pour le délestage des utilisateurs, les comptes suivants seront désactivés.',

	'SELECT_USERS_EXPLAIN'		=> 'Saisissez ici des noms d’utilisateurs spécifiques, ils seront utilisés en tenant compte de préférence aux critères ci-dessus.',

	'USER_DEACTIVATE_SUCCESS'	=> 'Les utilisateurs que vous avez sélectionnés ont été désactivés avec succès.',
	'USER_DELETE_SUCCESS'		=> 'Les utilisateurs que vous avez sélectionnés ont été supprimés avec succès.',
	'USER_PRUNE_FAILURE'		=> 'Aucun utilisateur ne correspond au critère sélectionné.',

	'WRONG_ACTIVE_JOINED_DATE'	=> 'La date que vous avez spécifiée est incorrecte, elle doit être au format <kbd>AAAA-MM-JJ</kbd>.',
));

// Forum Pruning
$lang = array_merge($lang, array(
	'ACP_PRUNE_FORUMS_EXPLAIN'	=> 'Cela supprimera tous les sujets sans réponse ou qui n’ont pas été consultés depuis un certain nombre de jours. Si vous ne saisissez aucun numéro, tous les sujets seront alors supprimés. Par défaut, cela ne supprimera ni les sujets dont un sondage est en cours, ni les notes ou les annonces.',

	'FORUM_PRUNE'		=> 'Délester le forum',

	'NO_PRUNE'			=> 'Aucun forum n’a été délesté.',

	'SELECTED_FORUM'	=> 'Forum sélectionné',
	'SELECTED_FORUMS'	=> 'Forums sélectionnés',

	'POSTS_PRUNED'					=> 'Messages délestés',
	'PRUNE_ANNOUNCEMENTS'			=> 'Délester les annonces',
	'PRUNE_FINISHED_POLLS'			=> 'Délester les sondages terminés',
	'PRUNE_FINISHED_POLLS_EXPLAIN'	=> 'Supprime les sujets dont les sondages sont terminés.',
	'PRUNE_FORUM_CONFIRM'			=> 'Êtes-vous sûr de vouloir délester les forums que vous sélectionnés avec les réglages spécifiés ? Une fois supprimés, les messages et les sujets délestés seront irrécupérables.',
	'PRUNE_NOT_POSTED'				=> 'Nombre de jours depuis la dernière publication',
	'PRUNE_NOT_VIEWED'				=> 'Nombre de jours depuis la dernière consultation',
	'PRUNE_OLD_POLLS'				=> 'Délester les anciens sondages',
	'PRUNE_OLD_POLLS_EXPLAIN'		=> 'Supprime les sujets dont les sondages en cours n’ont aucun vote.',
	'PRUNE_STICKY'					=> 'Délester les notes',
	'PRUNE_SUCCESS'					=> 'Le délestage des forums a été effectué avec succès.',

	'TOPICS_PRUNED'		=> 'Sujets délestés',
));

?>