<?php
/**
    *
    * This program is the full and free Spanish (of Spain) phpBB 3.0 Translation.
    * Copyright (c) 2007 Huan Manwe for phpbb-es.com
    *
    * This program is free software; you can redistribute it and/or modify
    * it under the terms of the GNU General Public License as published by
    * the Free Software Foundation; either version 2 of the License, or
    * (at your option) any later version.
    *
    * This program is distributed in the hope that it will be useful,
    * but WITHOUT ANY WARRANTY; without even the implied warranty of
    * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
    * GNU General Public License for more details.
    *
    * You should have received a copy of the GNU General Public License along
    * with this program; if not, write to the Free Software Foundation, Inc.,
    * 51 Franklin Street, Fifth Floor, Boston, MA 02110-1301 USA.
    *
    */
	
// ’ » " " …

/**
*
* This program is the full and free Spanish (of Spain) phpBB 3.0 Translation.
* Copyright (c) 2007 Huan Manwe for phpbb-es.com
*
* This program is free software; you can redistribute it and/or modify
* it under the terms of the GNU General Public License as published by
* the Free Software Foundation; either version 2 of the License, or
* (at your option) any later version.
*
* This program is distributed in the hope that it will be useful,
* but WITHOUT ANY WARRANTY; without even the implied warranty of
**/

/** 
*
* acp_prune.php [Spanish [Es]]
*
* @package language
* @version $Id: $
* @copyright (c) 2007 phpBB Group. Modified by Huan Manwe for phpbb-es.com in 2007 
* @author 2007-11-26 - Traducido por Huan Manwe junto con phpbb-es.com (http://www.phpbb-es.com) basado en la version argentina hecha por larveando.com.ar ).
* @author - ImagePack made by Xoom (webmaster of http://www.muchografico.com and colaborator of http://www.phpbb-es.com) 
* @license http://www.gnu.org/licenses/old-licenses/gpl-2.0.html GNU General Public License 
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
//

// User pruning
$lang = array_merge($lang, array(
	'ACP_PRUNE_USERS_EXPLAIN'	=> 'Aquí puede borrar (o desactivar) usuarios del Sitio. Esto se puede hacer de varias formas: por cantidad de mensajes, última actividad, etc. Los criterios pueden combinarse, p.ej. puede purgar usuarios con última actividad anterior a 2002-01-01 y menos de 10 mensajes. Como alternativa puede crear una lista de usuarios directamente en la caja de texto, y se ignorará cualquier criterio. ¡Tenga cuidado! Una vez que el usuario es borrado no hay vuelta atrás.',

	'DEACTIVATE_DELETE'			=> 'Desactivar o borrar',
	'DEACTIVATE_DELETE_EXPLAIN'	=> 'Determina si desactivar o borrar completamente al usuario, ¡tenga en cuenta que no se puede deshacer!',
	'DELETE_USERS'				=> 'Borrar',
	'DELETE_USER_POSTS'			=> 'Borrar mensajes de usuarios purgados',
	'DELETE_USER_POSTS_EXPLAIN'	=> 'Elimina mensajes hechos por usuarios borrados, no tiene efecto sobre usuarios desactivados.',

	'JOINED_EXPLAIN'			=> 'Introduzca una fecha en el formato <kbd>aaaa-mm-dd</kbd>.',

	'LAST_ACTIVE_EXPLAIN'		=> 'Introduzca una fecha en el formato <kbd>aaaa-mm-dd</kbd>.',

	'PRUNE_USERS_LIST'				=> 'Usuarios para purgar',
	'PRUNE_USERS_LIST_DELETE'		=> 'Con el criterio seleccionado, las siguientes cuentas serán eliminadas.',
	'PRUNE_USERS_LIST_DEACTIVATE'	=> 'Con el criterio seleccionado, las siguientes cuentas serán desactivadas.',

	'SELECT_USERS_EXPLAIN'		=> 'Introduzca aqu&iacute solo usuarios específicos;, tendrán preferencia sobre los criterios anteriores.',

	'USER_DEACTIVATE_SUCCESS'	=> 'Los usuarios seleccionados han sido desactivados correctamente.',
	'USER_DELETE_SUCCESS'		=> 'Los usuarios seleccionados han sido borrados correctamente.',
	'USER_PRUNE_FAILURE'			=> 'Ningún usuario se ajusta al criterio seleccionado.',

	'WRONG_ACTIVE_JOINED_DATE'		=> 'La fecha ingresada es incorrecta, esperaba el formato <kbd>YYYY-MM-DD</kbd>.',
));

// Forum Pruning
$lang = array_merge($lang, array(
	'ACP_PRUNE_FORUMS_EXPLAIN'	=> 'Esto borrará cualquier tema que no tenga mensajes o visitas en la cantidad de días seleccionada. Si no introduce un número, se borrarán todos los temas. Por defecto, no se eliminarán temas que tengan encuestas vigentes ni se eliminarán anuncios.',

	'FORUM_PRUNE'					=> 'Purgar foro',

	'NO_PRUNE'						=> 'No se purgaron foros',

	'SELECTED_FORUM'				=> 'Foro seleccionado',
	'SELECTED_FORUMS'				=> 'Foros seleccionados',

	'POSTS_PRUNED'					=> 'Mensajes purgados',
	'PRUNE_ANNOUNCEMENTS'			=> 'Purgar anuncios',
	'PRUNE_FINISHED_POLLS'			=> 'Purgar encuestas cerradas',
	'PRUNE_FINISHED_POLLS_EXPLAIN'	=> 'Elimina temas con encuestas que han concluído.',
	'PRUNE_FORUM_CONFIRM'			=> '¿Está seguro de que quiere purgar el foro seleccionado con los parámetros seleccionados? Una vez eliminado, no hay manera de recuperarlo.',
	'PRUNE_NOT_POSTED'				=> 'Días desde el último mensaje',
	'PRUNE_NOT_VIEWED'				=> 'Días desde la última visita',
	'PRUNE_OLD_POLLS'				=> 'Purgar encuestas antiguas',
	'PRUNE_OLD_POLLS_EXPLAIN'		=> 'Elimina temas con encuestas no votadas hace mucho.',
	'PRUNE_STICKY'					=> 'Purgar anuncios fijos',
	'PRUNE_SUCCESS'					=> 'Foros purgados correctamente.',

	'TOPICS_PRUNED'					=> 'Temas purgados',
));

?>