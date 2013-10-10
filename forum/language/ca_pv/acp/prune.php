<?php
/**
*
* acp_prune [Catalan (Valencian)]
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

// User pruning
$lang = array_merge($lang, array(
	'ACP_PRUNE_USERS_EXPLAIN'	=> 'Ací podeu suprimir (o desactivar) usuaris del fòrum. Es pot fer de diferents maneres: per recompte de missatges, per darrera activitat, etc. Cada un d\'aquest criteris es pot combinar, p.e. podeu eliminar usuaris que no hagen tingut activitat des del 2006-01-01 i que tinguen menys de 10 missatges publicats. També podeu introduir directament una llista d\'usuaris a la caixa de text ignorant qualsevol criteri. Aneu en compte ja que el procés no té marxa enrere, no es poden desfer els canvis.',

	'DEACTIVATE_DELETE'			=> 'Desactivar o suprimir',
	'DEACTIVATE_DELETE_EXPLAIN'	=> 'Trieu si desactivar o suprimir usuaris. Recordeu que no es poden desfer els canvis',
	'DELETE_USERS'				=> 'Suprimir',
	'DELETE_USER_POSTS'			=> 'Esborra missatges d\'usuaris suprimits',
	'DELETE_USER_POSTS_EXPLAIN' => 'Esborra els missatges creats pels usuaris suprimits, no té efecte si els usuaris estan desactivats.',

	'JOINED_EXPLAIN'			=> 'Introduïu una data en el format <kbd>AAAA-MM-DD</kbd>.',

	'LAST_ACTIVE_EXPLAIN'		=> 'Introduïu una data en el format <kbd>AAAA-MM-DD</kbd>.',

	'PRUNE_USERS_LIST'				=> 'Usuaris per eliminar',
	'PRUNE_USERS_LIST_DELETE'		=> 'Amb els criteris seleccionats, els següents comptes seran suprimits.',
	'PRUNE_USERS_LIST_DEACTIVATE'	=> 'Amb els criteris seleccionats, els següents comptes seran desactivats.',

	'SELECT_USERS_EXPLAIN'		=> 'Introduïu noms específics d\'usuari, es faran servir preferentment als criteris seleccionats.',

	'USER_DEACTIVATE_SUCCESS'	=> 'S\'han desactivat els usuaris seleccionats.',
	'USER_DELETE_SUCCESS'		=> 'S\'han suprimit els usuaris seleccionats.',
	'USER_PRUNE_FAILURE'		=> 'No hi ha usuaris que coincidisquen amb els criteris seleccionats.',

	'WRONG_ACTIVE_JOINED_DATE'	=> 'S\'ha introduït la data de forma incorrecta, recordeu que el format ha de ser <kbd>AAAA-MM-DD</kbd>.',
));

// Forum Pruning
$lang = array_merge($lang, array(
	'ACP_PRUNE_FORUMS_EXPLAIN'	=> 'Això suprimirà qualsevol tema on no s\'haja escrit durant el nombre de dies que seleccioneu. Si no introduïu cap número, tots els temes se suprimiran. Per defecte no s\'esborren temes als quals hi ha enquestes actives o a temes recurrents o anuncis.',

	'FORUM_PRUNE'		=> 'Purga de fòrum',

	'NO_PRUNE'			=> 'No hi ha cap fòrum purgat.',

	'SELECTED_FORUM'	=> 'Fòrum seleccionat',
	'SELECTED_FORUMS'	=> 'Fòrums seleccionats',

	'POSTS_PRUNED'					=> 'Missatges purgats',
	'PRUNE_ANNOUNCEMENTS'			=> 'Purga anuncis',
	'PRUNE_FINISHED_POLLS'			=> 'Purga enquestes finalitzades',
	'PRUNE_FINISHED_POLLS_EXPLAIN'	=> 'Esborra temes on les enquestes hagen finalitzat.',
	'PRUNE_FORUM_CONFIRM'			=> 'Esteu segurs que voleu purgar els fòrums seleccionats amb els paràmetres especificats? Una vegada suprimits, no podreu recuperar els missatges i temes purgats.',
	'PRUNE_NOT_POSTED'				=> 'Dies des de darrera publicació',
	'PRUNE_NOT_VIEWED'				=> 'Dies des de darrera visualització',
	'PRUNE_OLD_POLLS'				=> 'Purga totes les enquestes',
	'PRUNE_OLD_POLLS_EXPLAIN'		=> 'Suprimeix temes amb enquestes on no s\'ha votat durant un nombre concret de dies.',
	'PRUNE_STICKY'					=> 'Purga recurrents',
	'PRUNE_SUCCESS'					=> 'S\'han purgat els fòrums.',

	'TOPICS_PRUNED'		=> 'Temes purgats',
));

?>
