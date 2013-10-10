<?php
/**
*
* acp_prune [Catalan]
*
* @package language
* @version $Id: prune.php,v 1.14 2007/10/04 15:07:24 acydburn Exp $
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

// User pruning
$lang = array_merge($lang, array(
	'ACP_PRUNE_USERS_EXPLAIN'	=> 'Aquí podeu eliminar (o desactivar) usuaris del vostre fòrum. Hi ha diverses maneres de fer-ho: per nombre d’entrades, darrera connexió, etc. Cadascun d’aquests criteris poden ser combinats, p.ex. podeu podar els usuaris que es van connectar per darrera vegada abans del 2002-01-01 i que tinguin menys de 10 entrades. De forma alternativa, podeu introduir directament una llista d’usuaris a la casella de text i s’ignoraran els criteris introduïts. Aneu amb compte amb aquesta utilitat! Un cop hagueu eliminat un usuari no el podreu recuperar.',

	'DEACTIVATE_DELETE'			=> 'Desactiva o elimina',
	'DEACTIVATE_DELETE_EXPLAIN'	=> 'Trieu si voleu desactivar els usuaris o eliminar-los completament, tingueu en compte que no podeu desfer aquesta acció!',
	'DELETE_USERS'				=> 'Elimina',
	'DELETE_USER_POSTS'			=> 'Elimina les entrades dels usuaris podats',
	'DELETE_USER_POSTS_EXPLAIN' => 'Suprimeix les entrades realitzades pels usuaris eliminats, no té cap efecte si només desactiveu els usuaris.',

	'JOINED_EXPLAIN'			=> 'Introduïu una data en el format <kbd>AAAA-MM-DD</kbd>.',

	'LAST_ACTIVE_EXPLAIN'		=> 'Introduïu una data en el format <kbd>AAAA-MM-DD</kbd>.',

	'PRUNE_USERS_LIST'				=> 'Usuaris que es podaran',
	'PRUNE_USERS_LIST_DELETE'		=> 'Amb els criteris seleccionats per podar usuaris s’eliminaran els comptes següents.',
	'PRUNE_USERS_LIST_DEACTIVATE'	=> 'Amb els criteris seleccionats per podar usuaris es desactivaran els comptes següents.',

	'SELECT_USERS_EXPLAIN'		=> 'Introduïu noms d’usuari concrets a la casella de text i s’utilitzarà aquesta llista en lloc dels criteris especificats més amunt.',

	'USER_DEACTIVATE_SUCCESS'	=> 'Els usuaris seleccionats s’han desactivat correctament.',
	'USER_DELETE_SUCCESS'		=> 'Els usuaris seleccionats s’han eliminat correctament.',
	'USER_PRUNE_FAILURE'		=> 'No hi ha cap usuari que satisfaci els criteris seleccionats.',

	'WRONG_ACTIVE_JOINED_DATE'	=> 'La data que heu introduït no es correcta, és necessari que estigui en el format <kbd>AAAA-MM-DD</kbd>.',
));

// Forum Pruning
$lang = array_merge($lang, array(
	'ACP_PRUNE_FORUMS_EXPLAIN'	=> 'Aquí podeu eliminar els temes en els quals no hi hagi hagut cap resposta o visita en el nombre de dies que trieu. Si no introduïu cap número, s’eliminaràn tots els temes. Per defecte no s’eliminaran ni temes que tinguin enquestes que no hagin acabat ni temes permanents ni avisos.',

	'FORUM_PRUNE'		=> 'Poda de fòrums',

	'NO_PRUNE'			=> 'No s’ha podat cap fòrum.',

	'SELECTED_FORUM'	=> 'Fòrum seleccionat',
	'SELECTED_FORUMS'	=> 'Fòrums seleccionats',

	'POSTS_PRUNED'					=> 'Entrades podades',
	'PRUNE_ANNOUNCEMENTS'			=> 'Poda els avisos',
	'PRUNE_FINISHED_POLLS'			=> 'Poda les enquestes que s’hagin acabat',
	'PRUNE_FINISHED_POLLS_EXPLAIN'	=> 'Elimina els temes amb enquestes que ja han acabat.',
	'PRUNE_FORUM_CONFIRM'			=> 'Esteu segur que voleu podar els fòrums seleccionats amb els paràmetres especificats? Un cop eliminats, no hi ha cap manera per recuperar les entrades i els temes podats.',
	'PRUNE_NOT_POSTED'				=> 'Dies des de la darrera entrada',
	'PRUNE_NOT_VIEWED'				=> 'Dies des de la darrera lectura',
	'PRUNE_OLD_POLLS'				=> 'Poda les enquestes antigues',
	'PRUNE_OLD_POLLS_EXPLAIN'		=> 'Elimina temes amb enquestes en les que no s’hagi emès cap vot en el nombre de dies especificat per a la darrera entrada.',
	'PRUNE_STICKY'					=> 'Poda els temes recurrents',
	'PRUNE_SUCCESS'					=> 'La poda dels fòrums s’ha dut a terme correctament.',

	'TOPICS_PRUNED'		=> 'Temes podats',
));

?>