<?php
/**
*
* acp_users [Catalan (Valencian)]
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
	'ADMIN_SIG_PREVIEW'		=> 'Previsualització de la signatura',
	'AT_LEAST_ONE_FOUNDER'	=> 'No podeu canviar aquest fundador a usuari normal. Ha d\'haver-hi almenys un fundador al fòrum. Si voleu canviar l\'estat d\'aquest usuari, abans haureu de fer fundador a un altre.',

	'BAN_ALREADY_ENTERED'	=> 'El bandeig ja s\'havia fet correctament. No s\'ha a actualitzat la llista de bandeig.',
	'BAN_SUCCESSFUL'		=> 'S\'ha introduït el bandeig.',

	'CANNOT_BAN_FOUNDER'			=> 'No podeu bandejar comptes de fundadors.',
	'CANNOT_BAN_YOURSELF'			=> 'No podeu bandejar-vos a vosaltres mateixos.',
	'CANNOT_DEACTIVATE_BOT'			=> 'No podeu desactivar comptes bot. Heu de desactivar el bot en canvi.',
	'CANNOT_DEACTIVATE_FOUNDER'		=> 'No podeu to deactivate founder accounts.',
	'CANNOT_DEACTIVATE_YOURSELF'	=> 'No podeu desactivar el vostre propi compte.',
	'CANNOT_FORCE_REACT_BOT'		=> 'No podeu forçar la reactivació en comptes bot. Heu de desactivar el bot en canvi.',
	'CANNOT_FORCE_REACT_FOUNDER'	=> 'No podeu forçar la reactivació de comptes de fundadors.',
	'CANNOT_FORCE_REACT_YOURSELF'	=> 'No podeu forçar la reactivació del vostre propi compte.',
	'CANNOT_REMOVE_ANONYMOUS'		=> 'No podeu suprimir el compte de visitant.',
	'CANNOT_REMOVE_YOURSELF'		=> 'No podeu suprimir el vostre propi compte.',
	'CANNOT_SET_FOUNDER_IGNORED'	=> 'No podeu promoure usuaris ignorats per a que siguen fundadors.',
	'CANNOT_SET_FOUNDER_INACTIVE'	=> 'Heu d\'activar els usuaris abans de promoure\'ls ja que només els usuaris actius poder ser promoguts.',
	'CONFIRM_EMAIL_EXPLAIN'			=> 'Només heu d\'especificar això si esteu canviant l\adreça de correu dels usuaris.',

	'DELETE_POSTS'			=> 'Suprimeix missatges',
	'DELETE_USER'			=> 'Elimina usuari',
	'DELETE_USER_EXPLAIN'	=> 'Si elimineu l\'usuari, ja no podreu recuperar-lo.',

	'FORCE_REACTIVATION_SUCCESS'	=> 'S\'ha forçat la reactivació.',
	'FOUNDER'						=> 'Fundador',
	'FOUNDER_EXPLAIN'				=> 'Els fundadors tenen tots els permisos d\'administració i no poden estar bandejats, esborrats o alterats per qualsevol altre usuari que no siga també fundador.',

	'GROUP_APPROVE'					=> 'Aprova el membre',
	'GROUP_DEFAULT'					=> 'Fes que siga el grup d\'usuari per defecte',
	'GROUP_DELETE'					=> 'Suprimeix al membre d\'aquest grup',
	'GROUP_DEMOTE'					=> 'Degrada al líder del grup',
	'GROUP_PROMOTE'					=> 'Promou a líder del grup',

	'IP_WHOIS_FOR'			=> 'IP whois per %s',

	'LAST_ACTIVE'			=> 'Darrera activitat',

	'MOVE_POSTS_EXPLAIN'	=> 'Seleccioneu el fòrum al qual voleu moure tots els missatges creats per aquest usuari.',

	'NO_SPECIAL_RANK'		=> 'No hi ha cap rang especial assignat',
	'NOT_MANAGE_FOUNDER'	=> 'Heu triat administrar a un usuari fundador. Només els usuaris fundadors poden administrar a altres usuaris fundadors.',

	'QUICK_TOOLS'			=> 'Eines ràpides',

	'REGISTERED'			=> 'Registrat',
	'REGISTERED_IP'			=> 'Registrat des de la IP',
	'RETAIN_POSTS'			=> 'Conserva els missatges',

	'SELECT_FORM'			=> 'Selecciona la forma',
	'SELECT_USER'			=> 'Selecciona usuari',

	'USER_ADMIN'					=> 'Administració d\'usuari',
	'USER_ADMIN_ACTIVATE'			=> 'Activa compte',
	'USER_ADMIN_ACTIVATED'			=> 'S\'ha activat el compte.',
	'USER_ADMIN_AVATAR_REMOVED'		=> 'S\'ha esborrat l\'avatar del compte de l\'usuari.',
	'USER_ADMIN_BAN_EMAIL'			=> 'Bandeja per adreça de correu',
	'USER_ADMIN_BAN_EMAIL_REASON'	=> 'S\'ha bandejat l\'adreça de correu mitjançnat la gestió d\'usuaris',
	'USER_ADMIN_BAN_IP'				=> 'Bandeja per IP',
	'USER_ADMIN_BAN_IP_REASON'		=> 'S\'ha bandejat la IP mitjançnat la gestió d\'usuaris',
	'USER_ADMIN_BAN_NAME_REASON'	=> 'S\'ha bandejat el nom d\'usuari mitjançnat la gestió d\'usuaris',
	'USER_ADMIN_BAN_USER'			=> 'Bandeja per nom d\'usuari',
	'USER_ADMIN_DEACTIVATE'			=> 'Desactiva compte',
	'USER_ADMIN_DEACTIVED'			=> 'S\'ha desactivat l\'usuari.',
	'USER_ADMIN_DEL_ATTACH'			=> 'Suprimeix tots els adjunts',
	'USER_ADMIN_DEL_AVATAR'			=> 'Suprimeix avatar',
	'USER_ADMIN_DEL_POSTS'			=> 'Suprimeix tots els missatges',
	'USER_ADMIN_DEL_SIG'			=> 'Suprimeix la signatura',
	'USER_ADMIN_EXPLAIN'			=> 'Ací podeu canviar la informació dels usuaris i algunes opcions específiques.',
	'USER_ADMIN_FORCE'				=> 'Força la reactivació',
	'USER_ADMIN_MOVE_POSTS'			=> 'Mou tots els missatges',
	'USER_ADMIN_SIG_REMOVED'		=> 'S\'ha suprimit la signatura del compte d\'usuari.',
	'USER_ATTACHMENTS_REMOVED'		=> 'S\'han suprimit tots els adjunts carregats per aquest usuari.',
	'USER_AVATAR_UPDATED'			=> 'S\'han actualitzat els detalls de l\'avatar de l\'usuari.',
	'USER_CUSTOM_PROFILE_FIELDS'	=> 'Camps personalitzats del perfil',
	'USER_DELETED'					=> 'S\'ha esborrat l\'usuari.',
	'USER_GROUP_ADD'				=> 'Afegiex usuari al grup',
	'USER_GROUP_NORMAL'				=> 'L\'usuari normal de grups és membre de',
	'USER_GROUP_PENDING'			=> 'El grup d\'usuari està en mode pendent',
	'USER_GROUP_SPECIAL'			=> 'L\'usuari especial de grups és membre de',
	'USER_NO_ATTACHMENTS'			=> 'No hi ha fitxers adjunts per mostrar.',
	'USER_OVERVIEW_UPDATED'			=> 'S\'han actualitzat els detalls de l\'usuari.',
	'USER_POSTS_DELETED'			=> 'S\'han esborrat tots els missatges d\'aquest usuari.',
	'USER_POSTS_MOVED'				=> 'S\'han mogut els missatges dels usuaris al fòrum especificat.',
	'USER_PREFS_UPDATED'			=> 'S\'han actualitzat les preferències de l\'usuari.',
	'USER_PROFILE'					=> 'Perfil de l\'usuari',
	'USER_PROFILE_UPDATED'			=> 'S\'ha actualitzat el perfil de l\'usuari.',
	'USER_RANK'						=> 'Rang de l\'usuari',
	'USER_RANK_UPDATED'				=> 'S\'ha actualitzat el rang de l\'usuari.',
	'USER_SIG_UPDATED'				=> 'S\'ha actualitzat la signatura de l\'usuari.',
	'USER_TOOLS'					=> 'Eines bàsiques',
));

?>
