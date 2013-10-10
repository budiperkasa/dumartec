<?php
/** 
*
* groups [Catalan (Valencian)]
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
	'ALREADY_DEFAULT_GROUP'		=> 'El grup seleccionat és el vostre grup actual.',
	'ALREADY_IN_GROUP'			=> 'Ja sou membres del grup que heu seleccionat.',
	'ALREADY_IN_GROUP_PENDING'	=> 'Ja heu demanat unir-vos al grup seleccionat.',

	'CANNOT_JOIN_GROUP'			=> 'No podeu afiliar-vos a aquest grup. Només podeu afiliar-vos a grups oberts lliures.',
	'CANNOT_RESIGN_GROUP'		=> 'No podeu cancel·lar la vostra afiliació a aquest grup. Només podeu cancel·lar les afiliacions a grups oberts lliures.',	
	'CHANGED_DEFAULT_GROUP'	=> 'S\'ha canviat el grup per defecte.',
	
	'GROUP_AVATAR'						=> 'Avatar del grup', 
	'GROUP_CHANGE_DEFAULT'				=> 'Esteu segurs de que voleu canviar el vostre grup per defecte al grup “%s”?',
	'GROUP_CLOSED'						=> 'Tancat',
	'GROUP_DESC'						=> 'Descripció del grup',
	'GROUP_HIDDEN'						=> 'Ocult',
	'GROUP_INFORMATION'					=> 'Informació del grup d\'usuaris', 
	'GROUP_IS_CLOSED'					=> 'Aquest és un grup tancant. Només poden afegir-se membres per invitació.',
	'GROUP_IS_FREE'						=> 'Aquest és un grup lliure, tots els membres són benvinguts.', 
	'GROUP_IS_HIDDEN'					=> 'Aquest és un grup ocult, només els membres del grup poden veure-lo.',
	'GROUP_IS_OPEN'						=> 'Aquest és un grup obert, els membres poden provar a afegir-se.',
	'GROUP_IS_SPECIAL'					=> 'Aquest és un grup especial i el controlen els administradors.', 
	'GROUP_JOIN'						=> 'Unir-se al grup',
	'GROUP_JOIN_CONFIRM'				=> 'Esteu segurs que voleu unir-vos al grup seleccionat?',
	'GROUP_JOIN_PENDING'				=> 'Sol·licitació per unir-se al grup',
	'GROUP_JOIN_PENDING_CONFIRM'		=> 'Esteu segurs que voleu sol·licitar l\'unió al grup seleccionat?',
	'GROUP_JOINED'						=> 'Us heu unit al grup seleccionat.',
	'GROUP_JOINED_PENDING'				=> 'Sol·licitació per unir-se al grup finalitzada. Ara heu d\'esperar a que el cap de grup aprove la teua sol·licitud.',
	'GROUP_LIST'						=> 'Gestiona usuaris',
	'GROUP_MEMBERS'						=> 'Membres del grup',
	'GROUP_NAME'						=> 'Nom del grup',
	'GROUP_OPEN'						=> 'Obert',
	'GROUP_RANK'						=> 'Rank del grup', 
	'GROUP_RESIGN_MEMBERSHIP'			=> 'Anula subscripció del grup',
	'GROUP_RESIGN_MEMBERSHIP_CONFIRM'	=> 'Esteu segurs de que voleu anular la vostra subscripció al grup seleccionat?',
	'GROUP_RESIGN_PENDING'				=> 'Anula la sol·licitud en curs',
	'GROUP_RESIGN_PENDING_CONFIRM'		=> 'Esteu segurs de que voleu anular la sol·licitud en curs al grup seleccionat?',
	'GROUP_RESIGNED_MEMBERSHIP'			=> 'Us heu esborrat del grup seleccionat.',
	'GROUP_RESIGNED_PENDING'			=> 'La sol·licitud en curs s\'ha anulat.',
	'GROUP_TYPE'						=> 'Tipus de grup',
	'GROUP_UNDISCLOSED'					=> 'Grup ocult',
	'FORUM_UNDISCLOSED'					=> 'S\'estan moderant fòrum(s) ocult(s)',

	'LOGIN_EXPLAIN_GROUP'	=> 'Heu d\'haver entrat com usuari per veure els detalls del grup.',

	'NO_LEADERS'					=> 'No sou cap a cap grup.',
	'NOT_LEADER_OF_GROUP'			=> 'L\'operació sol·licitada no es pot dur a terme ja que no sou cap del grup seleccionat.',
	'NOT_MEMBER_OF_GROUP'			=> 'L\'operació sol·licitada no es pot dur a terme ja que no sou membre o encara no esteu aprovats al grup seleccionat.',
	'NOT_RESIGN_FROM_DEFAULT_GROUP'	=> 'No teniu permisos per canviar el grup per defecte.',
	
	'PRIMARY_GROUP'		=> 'Primer grup',

	'REMOVE_SELECTED'		=> 'Esborra els seleccionats',

	'USER_GROUP_CHANGE'			=> 'Des del grup “%1$s” fins “%2$s”',
	'USER_GROUP_DEMOTE'			=> 'Degrada leadership',
	'USER_GROUP_DEMOTE_CONFIRM'	=> 'Esteu segurs que voleu degradar al cap de grup del grup seleccionat?',
	'USER_GROUP_DEMOTED'		=> 'S\'ha degradat el vostre cap de grup.',
));

?>
