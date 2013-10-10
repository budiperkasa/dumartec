<?php
/**
*
* acp_modules [Catalan (Valencian)]
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
	'ACP_MODULE_MANAGEMENT_EXPLAIN'	=> 'Ací podeu gestionar tot tipus de mòduls. Fixeu-vos que al PCA hi ha tres nivells (Categoria -> Categoria -> Mòdul) i als altres hi ha dos nivells (Categoria -> Mòdul). Aneu amb compte perquè és possible que us bloquejeu a vosaltres mateixos gestionant alguns mòduls importants.',
	'ADD_MODULE'					=> 'Afegeix mòdul',
	'ADD_MODULE_CONFIRM'			=> 'Esteu segurs que voleu afegir el mòdul seleccionat amb aquest mode?',
	'ADD_MODULE_TITLE'				=> 'Afegeix mòdul',

	'CANNOT_REMOVE_MODULE'	=> 'No es pot esborrar el mòdul, ja que té assignat "fills". Moveu o esborreu els fills i proveu novament.',
	'CATEGORY'				=> 'Categoria',
	'CHOOSE_MODE'			=> 'Tria el mode del mòdul',
	'CHOOSE_MODE_EXPLAIN'	=> 'Tria el mode dels mòduls que s\'estan fent servir..',
	'CHOOSE_MODULE'			=> 'Tria mòdul',
	'CHOOSE_MODULE_EXPLAIN'	=> 'Tria el fitxer que fa servir aquest mòdul.',
	'CREATE_MODULE'			=> 'Crea un nou mòdul',

	'DEACTIVATED_MODULE'	=> 'Mòdul desactivat',
	'DELETE_MODULE'			=> 'Esborra el mòdul',
	'DELETE_MODULE_CONFIRM'	=> 'Esteu segurs que voleu esborrar aquest mòdul?',

	'EDIT_MODULE'			=> 'Edita el mòdul',
	'EDIT_MODULE_EXPLAIN'	=> 'Ací podeu introduir paràmetres concrets del mòdul.',

	'HIDDEN_MODULE'			=> 'Mòdul amagat',

	'MODULE'					=> 'Mòdul',
	'MODULE_ADDED'				=> 'S\'ha afegit el mòdul.',
	'MODULE_DELETED'			=> 'S\'ha esborrat el mòdul.',
	'MODULE_DISPLAYED'			=> 'Mòdul mostrat',
	'MODULE_DISPLAYED_EXPLAIN'	=> 'Si no voleu mostrar aquest mòdul però voleu fer-lo servir, trieu "no".',
	'MODULE_EDITED'				=> 'S\'ha editat el mòdul.',
	'MODULE_ENABLED'			=> 'S\'ha activat el mòdul',
	'MODULE_LANGNAME'			=> 'Nom de llengua del mòdul',
	'MODULE_LANGNAME_EXPLAIN'	=> 'Introduïu el nom que es mostrarà. Feu servir la constant de la llengua per fer servir el nom que hi ha al fitxer de llengua.',
	'MODULE_TYPE'				=> 'Tipus de mòdul',

	'NO_CATEGORY_TO_MODULE'	=> 'No es pot canviar la categoria del mòdul. Moveu o esborreu els fills i proveu novament.',
	'NO_MODULE'				=> 'No s\'ha trobat cap mòdul.',
	'NO_MODULE_ID'			=> 'No s\'ha especificat l\'id del mòdul.',
	'NO_MODULE_LANGNAME'	=> 'No s\'ha especificat el nom de llengua del mòdul.',
	'NO_PARENT'				=> 'Sense pare',

	'PARENT'				=> 'Pare',
	'PARENT_NO_EXIST'		=> 'No existeix cap pare.',

	'SELECT_MODULE'			=> 'Seleccioneu un mòdul',
));

?>
