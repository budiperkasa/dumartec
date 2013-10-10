<?php
/**
*
* acp_groups [Catalan (Valencian)]
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
	'ACP_GROUPS_MANAGE_EXPLAIN'		=> 'Des d\'ací podreu gestionar els grups d\'usuaris. Podeu esborrar, crear i editar els grups existents. A més, podeu triar els caps de grup, canviar entre grup obert/amagat/tancat i definir el nom de grup i la descripció.',
	'ADD_USERS'						=> 'Afegeix usuairs',
	'ADD_USERS_EXPLAIN'				=> 'Ací podeu afegir nous usuaris al grup. Podeu seleccionar si aquest grup serà el grup per defecte per als usuaris seleccionats. A més, podeu definir-los com a líders. Introduïu cada nom d\'usuari a una nova línia.',

	'COPY_PERMISSIONS'				=> 'Copia permisos de',
	'COPY_PERMISSIONS_EXPLAIN'		=> 'Una vegada creat, el grup tindrà els mateixos grups que el seleccionat ací.',
	'CREATE_GROUP'					=> 'Crea un nou grup',

	'GROUPS_NO_MEMBERS'				=> 'Aquest grup no té cap membre',
	'GROUPS_NO_MODS'				=> 'No hi ha caps de grup definits',

	'GROUP_APPROVE'					=> 'Aprova membre',
	'GROUP_APPROVED'				=> 'Membres aprovats',
	'GROUP_AVATAR'					=> 'Avatar del grup',
	'GROUP_AVATAR_EXPLAIN'			=> 'Aquesta imatge es mostrarà al Panell de Control del Grup.',
	'GROUP_CLOSED'					=> 'Tancat',
	'GROUP_COLOR'					=> 'Color del grup',
	'GROUP_COLOR_EXPLAIN'			=> 'Defineix el color dels membres, deixeu-ho en blanc per a l\'opció per defecte.',
	'GROUP_CONFIRM_ADD_USER'		=> 'Esteu segurs que voleu afegir a l\'usuari %1$s al grup?',
	'GROUP_CONFIRM_ADD_USERS'		=> 'Esteu segurs que voleu afegir als usuaris %1$s al grup?',
	'GROUP_CREATED'					=> 'El grup s\'ha creat.',
	'GROUP_DEFAULT'					=> 'Fes que aquest siga el grup per defecte del membre',
	'GROUP_DEFS_UPDATED'			=> 'S\'ha assignat el grup per defecte per als usuaris seleccionats.',
	'GROUP_DELETE'					=> 'Esborra un membre del grup',
	'GROUP_DELETED'					=> 'S\'ha esborrat el grup i els grups per defecte dels usuaris.',
	'GROUP_DEMOTE'					=> 'Degrada líder del grup',
	'GROUP_DESC'					=> 'Descripció del grup',
	'GROUP_DETAILS'					=> 'Detalls del grup',
	'GROUP_EDIT_EXPLAIN'			=> 'Ací podeu editar els grups existents. Podeu canviar el nom, descripció i tipus (obert, tancat, etc.). A més, podeu modificar altres paràmetres com el color, els rangs, etc. El canvis que feu ací sobreescriuran les opcions que tinguen els usuaris.',
	'GROUP_ERR_USERS_EXIST'			=> 'Els usuaris especificats ja són membres d\'aquest grup',
	'GROUP_FOUNDER_MANAGE'			=> 'Només el creador pot gestionar-ho',
	'GROUP_FOUNDER_MANAGE_EXPLAIN'	=> 'Aquest grup només el poden gestionar els creadors. Users having group permissions are still able to see this group as well as this group’s members.',
	'GROUP_HIDDEN'					=> 'Amagat',
	'GROUP_LANG'					=> 'Idioma del grup',
	'GROUP_LEAD'					=> 'Líders del grup',
	'GROUP_LEADERS_ADDED'			=> 'S\'han afegit nous líders al grup.',
	'GROUP_LEGEND'					=> 'Mostra el grup a la llegenda',
	'GROUP_LIST'					=> 'Membres actuals',
	'GROUP_LIST_EXPLAIN'			=> 'Aquesta és una llista completa del usuaris membres d\'aquest grup. Podeu esborrar o afegir-ne de nous.',
	'GROUP_MEMBERS'					=> 'Membres del grup',
	'GROUP_MEMBERS_EXPLAIN'			=> 'Aquesta és una llista completa del usuaris membres d\'aquest grup d\'usuaris. Inclou seccions separads per a líders, membres pendents o existents. Des d\'ací podeu gestionar qui és membre d\'aquest grup i quin és el seu paper. Per esborrar un líder però mantenir-lo al grup, feu servir Degrada en lloc de Elimina. Per fer líder a un usuari, feu servir Promou.',
	'GROUP_MESSAGE_LIMIT'			=> 'Límit de missatges privats per carpeta del grup',
	'GROUP_MESSAGE_LIMIT_EXPLAIN'	=> 'Aquest paràmetre sobreescriu el límit de missatges per carpeta dels usuaris. 0 deixarà el valor per defecte de l\'usuari.',
	'GROUP_MODS_ADDED'				=> 'S\'han afegit nous líders al grup.',
	'GROUP_MODS_DEMOTED'			=> 'S\'han degradat els líders seleccionats.',
	'GROUP_MODS_PROMOTED'			=> 'S\'han promogut els membres seleccionats.',
	'GROUP_NAME'					=> 'Nom del grup',
	'GROUP_NAME_TAKEN'				=> 'El nom que heu introduït ja s\'està fent servir, proveu amb un altre.',
	'GROUP_OPEN'					=> 'Obert',
	'GROUP_PENDING'					=> 'Membres Pending members',
	'GROUP_PROMOTE'					=> 'Promou a líder del grup',
	'GROUP_RANK'					=> 'Rang del grup',
	'GROUP_RECEIVE_PM'				=> 'Grup amb permís per rebre missatges privats',
	'GROUP_RECEIVE_PM_EXPLAIN'		=> 'Noteu que els grups amagats no poden comunicar-se, aquest paràmetre no afecta.',
	'GROUP_REQUEST'					=> 'Petició',
	'GROUP_SETTINGS_SAVE'			=> 'Paràmetres ampliats del grup',
	'GROUP_TYPE'					=> 'Tipus de grup',
	'GROUP_TYPE_EXPLAIN'			=> 'Això determina quins usuaris poden participar o veure aquest grup.',
	'GROUP_UPDATED'					=> 'S\'han actualitzat les preferències.',
	
	'GROUP_USERS_ADDED'				=> 'S\'han afegit nous usuaris al grup.',
	'GROUP_USERS_EXIST'				=> 'Els usuaris seleccionats ja són membres.',
	'GROUP_USERS_REMOVE'			=> 'S\'han eliminat els usuaris del grup.',

	'MAKE_DEFAULT_FOR_ALL'	=> 'Marca com a grup per defecte per a tots els membres',
	'MEMBERS'				=> 'Membres',

	'NO_GROUP'					=> 'No s\'ha especificat cap grup.',
	'NO_GROUPS_CREATED'			=> 'Encara no s\'han creat grups.',
	'NO_PERMISSIONS'			=> 'No copies els permisos',
	'NO_USERS'					=> 'No heu introduït cap usuari.',
	'NO_USERS_ADDED'			=> 'No s\'ha afegit cap usuari al grup.',
	'NO_VALID_USERS'			=> 'No heu introduït cap usuari elegible per a aquesta opció.',

	'SPECIAL_GROUPS'			=> 'Grups predefinits',
	'SPECIAL_GROUPS_EXPLAIN'	=> 'Els grups predefinits són especials. No poden esborrar-se o modificar-se directament. Tot i així, podeu afegir usuaris i canviar paràmetres bàsics.',

	'TOTAL_MEMBERS'				=> 'Membres',

	'USERS_APPROVED'				=> 'S\'han aprovat els usuaris.',
	'USER_DEFAULT'					=> 'Per defecte per a l\'usuari',
	'USER_DEF_GROUPS'				=> 'Grups de l\'usuari',
	'USER_DEF_GROUPS_EXPLAIN'		=> 'Aquests són grups creats per vosaltres o per altres administradors del fòrum. Podeu gestionar les suscripcions al grup, editar les propietats o esborrar-lo.',
	'USER_GROUP_DEFAULT'			=> 'Estableix com a grup per defecte',
	'USER_GROUP_DEFAULT_EXPLAIN'	=> 'Afirmatiu significarà que aquest serà el grup per defecte per als usuaris afegits.',
	'USER_GROUP_LEADER'				=> 'Estableix com a líder de grup',
));

?>
