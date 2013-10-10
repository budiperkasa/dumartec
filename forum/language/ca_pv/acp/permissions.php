<?php
/**
*
* acp_permissions [Catalan (Valencian)]
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
	'ACP_PERMISSIONS_EXPLAIN'	=> '
		<p>Els permisos estan agrupats en quatre seccions:</p>

		<h2>Permisos Globals</h2>
		<p>Aquests es fan servir a nivell global i s\'apliquen a tot el fòrum. Al mateix temps, aquesta secció es troba dividida en altres seccions: Permisos d\'Usuari, Permisos de Grup, Admnistradors i Moderadors Globals.</p>

		<h2>Permisos Basats en el Fòrum</h2>
		<p>Aquests es fan servir pel control d\'accés bàsic al fòrum. Al mateix temps, aquesta secció es troba dividida en Permisos del Fòrum, Moderadors del Fòrum, Permisos dels Usuaris del Fòrum i Permisos dels Grups del Fòrum.</p>

		<h2>Rols de Permisos</h2>
		<p>Aquests es fan servir per crear diferents conjunts de permisos pels diferents rols que s\'hi troben al fòrum. Els rols per defecte cobriran boards large and small, though within each of the four divisions, you can add/edit/delete roles as you see fit.</p>

		<h2>Màscares de Permisos</h2>
		<p>Aquests es fan servir per veure els permisos efectius assignats a cada Usuari, Moderador (Local o Global), Administrador o Fòrum.</p>
	
		<br />

		<p>Per a més informació de configuració i gestió dels permisos del fòrum, veieu <a href="http://www.phpbb.com/support/documentation/3.0/quickstart/quick_permissions.html">Capitol 1.5 de la Guia Ràpia d\'inici a phpBB3</a>.</p>
	',

	'ACL_NEVER'				=> 'Mai',
	'ACL_SET'				=> 'Setting permissions',
	'ACL_SET_EXPLAIN'		=> 'Els permisos estan basats en un sistema <samp>SÍ</samp>/<samp>NO</samp> senzill. Marcant una opció com a <samp>MAI</samp> per a un usuari o grup d\'usuaris, sobreescriu qualsevol altre valor assignat a ells. Si no voleu assignar cap valor per a alguna de les opcions, seleccioneu <samp>NO</samp>. Si hi ha valors assignats per a aquesta opció, es faran servir de manera preferent, en altre cas es farà servir <samp>MAI</samp>. Tots els objectes marcats copiaran el conjunt de permisos que heu definit.',
	'ACL_SETTING'			=> 'Setting',

	'ACL_TYPE_A_'			=> 'Permisos administratius',
	'ACL_TYPE_F_'			=> 'Permisos del fòrum',
	'ACL_TYPE_M_'			=> 'Permisos de moderació',
	'ACL_TYPE_U_'			=> 'Permisos d\'usuari',

	'ACL_TYPE_GLOBAL_A_'	=> 'Permisos administratius',
	'ACL_TYPE_GLOBAL_U_'	=> 'Permisos d\'usuari',
	'ACL_TYPE_GLOBAL_M_'	=> 'Permisos de Moderació Global',
	'ACL_TYPE_LOCAL_M_'		=> 'Permisos de Moderació del fòrum',
	'ACL_TYPE_LOCAL_F_'		=> 'Permisos del fòrum',
	
	'ACL_NO'				=> 'No',
	'ACL_VIEW'				=> 'S\'està veient permisos',
	'ACL_VIEW_EXPLAIN'		=> 'Ací podeu veure els permisos efecteius que el grup/usuari té. El quadre vermell indica que el grup/usuari no te el permís; el quadre verd indica que sí el té.',
	'ACL_YES'				=> 'Sí',

	'ACP_ADMINISTRATORS_EXPLAIN'				=> 'Ací podeu assignar permisos d\'administrador als usuaris o grups. Tots els usuaris amb permisos d\'administrador podran veure el panell de control d\'administració.',
	'ACP_FORUM_MODERATORS_EXPLAIN'				=> 'Ací podeu assignar permisos de moderació a usuaris i grups.',
	'ACP_FORUM_PERMISSIONS_EXPLAIN'				=> 'Ací podeu canviar quins usuaris o grups poden accedir a uns fòrums o altres.',
	'ACP_GLOBAL_MODERATORS_EXPLAIN'				=> 'Ací podeu assignar permisos de moderació global a usuaris i grups. Aquests moderadors són com els moderadors normals però aquests tenen accés a tots els fòrums.',
	'ACP_GROUPS_FORUM_PERMISSIONS_EXPLAIN'		=> 'Ací podeu assignar permisos del fòrum als grups.',
	'ACP_GROUPS_PERMISSIONS_EXPLAIN'			=> 'Ací podeu assignar permisos globals als permisos dels grups/usuaris, als permisos de moderadors globals i permisos dels administradors. Els permisos d\'usuari inclouen competències com l\'ús d\'avatars, enviar missatges privtas, etc.; els permisos de moderador globals inclouen aprovació de missatges, gestionar temes, bandeig, etc; els permisos d\'administradors inclouen modificació de permisos, definició de BBCodes personalitzats, gestió de fòrums, etc. Els permisos individuals d\'usuari només es canvien en casos molt concrets, el mètode normal és fer-ho des dels permisos d\'usuaris/grup.',
	'ACP_ADMIN_ROLES_EXPLAIN'					=> 'Ací podeu gestionar els rols de permisos administratius. Els rols són permisos efectius, si canvieu un rol, els objectes que tinguen aquest rol també canviaran.',
	'ACP_FORUM_ROLES_EXPLAIN'					=> 'Ací podeu gestionar els rols de permisos del fòrum. Els rols són permisos efectius, si canvieu un rol, els objectes que tinguen aquest rol també canviaran.',
	'ACP_MOD_ROLES_EXPLAIN'						=> 'Ací podeu gestionar els rols de permisos de moderació. Els rols són permisos efectius, si canvieu un rol, els objectes que tinguen aquest rol també canviaran.',
	'ACP_USER_ROLES_EXPLAIN'					=> 'Ací podeu gestionar els rols de permisos d\'usuaris. Els rols són permisos efectius, si canvieu un rol, els objectes que tinguen aquest rol també canviaran.',
	'ACP_USERS_FORUM_PERMISSIONS_EXPLAIN'		=> 'Ací podeu assignar forum permissions to users.',
	'ACP_USERS_PERMISSIONS_EXPLAIN'				=> 'Ací podeu assignar permisos globals als usuaris o als permisos d\'usuari, permisos de moderació global i permisos d\'administradors. Els permisos d\'usuari inclouen competències com l\'ús d\'avatars, enviar missatges privtas, etc.; els permisos de moderador globals inclouen aprovació de missatges, gestionar temes, bandeig, etc; els permisos d\'administradors inclouen modificació de permisos, definició de BBCodes personalitzats, gestió de fòrums, etc. Els permisos individuals d\'usuari només es canvien en casos molt concrets, el mètode normal és fer-ho des dels permisos d\'usuaris/grup.',
	'ACP_VIEW_ADMIN_PERMISSIONS_EXPLAIN'		=> 'Ací podeu veure els permisos efectius d\'administració assignats als grups/usuaris seleccionats.',
	'ACP_VIEW_GLOBAL_MOD_PERMISSIONS_EXPLAIN'	=> 'Ací podeu veure els permisos globals de moderació assignats als grups/usuaris seleccionats.',
	'ACP_VIEW_FORUM_PERMISSIONS_EXPLAIN'		=> 'Ací podeu veure els permisos de fòrum assignats als grups/usuaris seleccionats.',
	'ACP_VIEW_FORUM_MOD_PERMISSIONS_EXPLAIN'	=> 'Ací podeu veure els permisos de moderació del fòrum assignats als grups/usuaris seleccionats.',
	'ACP_VIEW_USER_PERMISSIONS_EXPLAIN'			=> 'Ací podeu veure els permisos d\'usuari efectius assignats als usuaris/grups seleccionats.',

	'ADD_GROUPS'				=> 'Afegeix grups',
	'ADD_PERMISSIONS'			=> 'Afegeix permisos',
	'ADD_USERS'					=> 'Afegeix usuaris',
	'ADVANCED_PERMISSIONS'		=> 'Permisos avançats',
	'ALL_GROUPS'				=> 'Selecciona tots els grups',
	'ALL_NEVER'					=> 'Tots <samp>MAI</samp>',
	'ALL_NO'					=> 'Tots <samp>NO</samp>',
	'ALL_USERS'					=> 'Selecciona tots els usuaris',
	'ALL_YES'					=> 'Tots <samp>SÍ</samp>',
	'APPLY_ALL_PERMISSIONS'		=> 'Aplica tots els permisos',
	'APPLY_PERMISSIONS'			=> 'Aplica els permisos',
	'APPLY_PERMISSIONS_EXPLAIN'	=> 'Els permisos i rol definits per a aquest objecte només s\'aplicaran a aquest objecte i a tots els objectes marcats.',
	'AUTH_UPDATED'				=> 'S\'han actualitzat els permisos.',

	'CREATE_ROLE'				=> 'Crea un rol',
	'CREATE_ROLE_FROM'			=> 'Fes servir paràmetres des de…',
	'CUSTOM'					=> 'Personalitza…',

	'DEFAULT'					=> 'Per defecte',
	'DELETE_ROLE'				=> 'Suprimeix rol',
	'DELETE_ROLE_CONFIRM'		=> 'Esteu segurs que voleu suprimir aquest rol? Els objectes que el tinguen assignat <strong>no</strong> perdran els seus permisos assignats.',
	'DISPLAY_ROLE_ITEMS'		=> 'Veure objectes que fan servir aquest rol',

	'EDIT_PERMISSIONS'			=> 'Edita permisos',
	'EDIT_ROLE'					=> 'Edita rol',

	'GROUPS_NOT_ASSIGNED'		=> 'No hi ha cap grup amb aquest rol assignat',

	'LOOK_UP_GROUP'				=> 'Comprova grup d\'usuaris',
	'LOOK_UP_USER'				=> 'Comprova usuari',

	'MANAGE_GROUPS'		=> 'Gestiona grups',
	'MANAGE_USERS'		=> 'Gestiona usuaris',

	'NO_AUTH_SETTING_FOUND'		=> 'No s\'han definit paràmetres de permisos.',
	'NO_ROLE_ASSIGNED'			=> 'No s\'ha assignat cap rol…',
	'NO_ROLE_ASSIGNED_EXPLAIN'	=> 'Setting to this role does not change permissions on the right. If you want to unset/remove all permissions you should use the “All <samp>NO</samp>” link.',
	'NO_ROLE_AVAILABLE'			=> 'No hi ha rols disponibles',
	'NO_ROLE_NAME_SPECIFIED'	=> 'Doneu un nom al rol.',
	'NO_ROLE_SELECTED'			=> 'No s\'ha pogut trobar el rol.',
	'NO_USER_GROUP_SELECTED'	=> 'No heu selecionat cap usuari o grup.',

	'ONLY_FORUM_DEFINED'	=> 'Només heu definit fòrums a la vostra selecció. Seleccioneu almenys un usuari o grup.',

	'PERMISSION_APPLIED_TO_ALL'		=> 'Els permisos i el rol s\'aplicaran als objectes marcats',
	'PLUS_SUBFORUMS'				=> '+Subfòrums',

	'REMOVE_PERMISSIONS'			=> 'Suprimeix permisos',
	'REMOVE_ROLE'					=> 'Suprimeix rol',
	'RESULTING_PERMISSION'			=> 'Permís resultant',
	'ROLE'							=> 'Rol',
	'ROLE_ADD_SUCCESS'				=> 'S\'ha afegit el rol.',
	'ROLE_ASSIGNED_TO'				=> 'Usuaris/Grups assignats a %s',
	'ROLE_DELETED'					=> 'S\'ha suprimit el rol.',
	'ROLE_DESCRIPTION'				=> 'Descripció del rol',

	'ROLE_ADMIN_FORUM'			=> 'Administrador del Fòrum',
	'ROLE_ADMIN_FULL'			=> 'Administrador Complet',
	'ROLE_ADMIN_STANDARD'		=> 'Administrador Estàndard',
	'ROLE_ADMIN_USERGROUP'		=> 'Administrador d\'usuaris i grups',
	'ROLE_FORUM_BOT'			=> 'Accés Bot',
	'ROLE_FORUM_FULL'			=> 'Accés Complet',
	'ROLE_FORUM_LIMITED'		=> 'Accés Limitat',
	'ROLE_FORUM_LIMITED_POLLS'	=> 'Accés Limitat + Enquestes',
	'ROLE_FORUM_NOACCESS'		=> 'Sense Accés',
	'ROLE_FORUM_ONQUEUE'		=> 'En qua de moderació',
	'ROLE_FORUM_POLLS'			=> 'Accés Estàndard+ Enquestes',
	'ROLE_FORUM_READONLY'		=> 'Accés de Només-Lectura',
	'ROLE_FORUM_STANDARD'		=> 'Accés Estàndard',
	'ROLE_MOD_FULL'				=> 'Moderador Complet',
	'ROLE_MOD_QUEUE'			=> 'Moderador en Qua',
	'ROLE_MOD_SIMPLE'			=> 'Moderador Normal',
	'ROLE_MOD_STANDARD'			=> 'Moderador Estàndard',
	'ROLE_USER_FULL'			=> 'Totes les característiques',
	'ROLE_USER_LIMITED'			=> 'Característiques limitades',
	'ROLE_USER_NOAVATAR'		=> 'Sense Avatar',
	'ROLE_USER_NOPM'			=> 'Sense Missatges Privats',
	'ROLE_USER_STANDARD'		=> 'Característiques Estàndard',

	'ROLE_DESCRIPTION_ADMIN_FORUM'			=> 'Pot accedir a la gestió del fòrum i als paràmetres de permisos del fòrum.',
	'ROLE_DESCRIPTION_ADMIN_FULL'			=> 'Té accés a totes les funcions administratives del fòrum.<br />No es recomana.',
	'ROLE_DESCRIPTION_ADMIN_STANDARD'		=> 'Té accés a la gran part de les funcions administratives però no se li permet fer servir el servidor o les eines del sistema.',
	'ROLE_DESCRIPTION_ADMIN_USERGROUP'		=> 'Pot gestionar grups i usuaris: canvi de permisos, paràmetres, gestió de bandeig i rangs.',
	'ROLE_DESCRIPTION_FORUM_BOT'			=> 'Aquest rol es recomana per a motors de cerca i bots.',
	'ROLE_DESCRIPTION_FORUM_FULL'			=> 'Pot fer servir totes els característiques del fòrum, incloent escriure missatges, anuncis i temes recurrents. Pot ignorar el límit màxim.<br />No es recomana per a usuaris normals.',
	'ROLE_DESCRIPTION_FORUM_LIMITED'		=> 'Pot fer servir algunes característiques del fòrum, però no pot adjuntar fitxers ni icones als missatges.',
	'ROLE_DESCRIPTION_FORUM_LIMITED_POLLS'	=> 'As per Limited Access but can also create polls.',
	'ROLE_DESCRIPTION_FORUM_NOACCESS'		=> 'No pot veure ni tenir accés a cap fòrum',
	'ROLE_DESCRIPTION_FORUM_ONQUEUE'		=> 'Pot fer servir la gran majoria de les característiques del fòrum incloent fitxers adjunts, però els missatges i temes han de ser aprovats pels moderadors.',
	'ROLE_DESCRIPTION_FORUM_POLLS'			=> 'Com l\'accés estàndard però a més pot crear enquestes.',
	'ROLE_DESCRIPTION_FORUM_READONLY'		=> 'Pot llegir el fòrum, però no pot crear nous temes ni contestar als missatges.',
	'ROLE_DESCRIPTION_FORUM_STANDARD'		=> 'Pot fer servir la gran majoria de les característiques del fòrum, però no pot bloquejar els temes propis i no pot crear enquestes.',
	'ROLE_DESCRIPTION_MOD_FULL'				=> 'Pot fer servir totes les funcions de moderació, incloent bandeig.',
	'ROLE_DESCRIPTION_MOD_QUEUE'			=> 'Pot fer servir la Cua de Moderació per validar i editar els missatges, però res més.',
	'ROLE_DESCRIPTION_MOD_SIMPLE'			=> 'Només pot fer servir les accions bàsiques del tema. Però no pot enviar avisos ni fer servir la Cua de Moderació.',
	'ROLE_DESCRIPTION_MOD_STANDARD'			=> 'Pot fer servir la gran majoria d\'eines de moderació, però no pot bandejar usuaris ni canviar els autors dels missatges.',
	'ROLE_DESCRIPTION_USER_FULL'			=> 'Pot fer servir totes les característiques disponibles del fòrum per a usuaris, incloent el canvi de nom d\'usuari o ignorar el límit màxim.<br />No es recomana.',
	'ROLE_DESCRIPTION_USER_LIMITED'			=> 'Pot accedir a algunes característiques de l\'usuari. Adjunts, correus o missatges instantanis no estan permesos.',
	'ROLE_DESCRIPTION_USER_NOAVATAR'		=> 'Està limitat i no pot fer servir la característica d\'avatar.',
	'ROLE_DESCRIPTION_USER_NOPM'			=> 'Està limitat i no pot fer servir missatges privats.',
	'ROLE_DESCRIPTION_USER_STANDARD'		=> 'Pot accedir a quasi totes les característiques de l\'usuari. No pot canviar el nom o ignorar el límit màxim.',
	
	'ROLE_DESCRIPTION_EXPLAIN'		=> 'Podeu introduir una explicació curta sobre què fa aquest rol o quina és la seua finalitat. Aquest text es mostrarà a les finestres de permisos.',
	'ROLE_DESCRIPTION_LONG'			=> 'La descripció del rol és massa llarga, el màxim és 4000 caràcters.',
	'ROLE_DETAILS'					=> 'Detalls del rol',
	'ROLE_EDIT_SUCCESS'				=> 'S\'ha editat el rol.',
	'ROLE_NAME'						=> 'Nom del rol',
	'ROLE_NAME_ALREADY_EXIST'		=> 'Un rol anomenat <strong>%s</strong> ja existeix per al tipus de permís especificat.',
	'ROLE_NOT_ASSIGNED'				=> 'Encara no s\'ha assignat cap rol.',

	'SELECTED_FORUM_NOT_EXIST'		=> 'El fòrum seleccionat no existeix.',
	'SELECTED_GROUP_NOT_EXIST'		=> 'El grup seleccionat no existeix.',
	'SELECTED_USER_NOT_EXIST'		=> 'L\'usuari seleccionat no existeix.',
	'SELECT_FORUM_SUBFORUM_EXPLAIN'	=> 'El fòrum que heu seleccionat inclou també els subfòrums que hi haja.',
	'SELECT_ROLE'					=> 'Selecciona rol…',
	'SELECT_TYPE'					=> 'Selecciona tipus',
	'SET_PERMISSIONS'				=> 'Defineix permisos',
	'SET_ROLE_PERMISSIONS'			=> 'Defineix permisos del rol',
	'SET_USERS_PERMISSIONS'			=> 'Defineix permisos de l\'usuari',
	'SET_USERS_FORUM_PERMISSIONS'	=> 'Defineix permisos dels usuaris del fòrum',

	'TRACE_DEFAULT'					=> 'Per defecte tots els permisos són <samp>NO</samp> (no definit). Però aquest permís es pot sobreescriure per altres paràmatres.',
	'TRACE_FOR'						=> 'Rastre per a',
	'TRACE_GLOBAL_SETTING'			=> '%s (global)',
	'TRACE_GROUP_NEVER_TOTAL_NEVER'	=> 'Aquest permís de grup està definit com a <samp>MAI</samp> com a resultat total, però l\'antic resultat es desa.',
	'TRACE_GROUP_NEVER_TOTAL_NEVER_LOCAL'	=> 'Aquest permís de grup per a aquest fòrum està definit com a <samp>MAI</samp> com a resultat total, però l\'antic resultat es desa.',
	'TRACE_GROUP_NEVER_TOTAL_NO'	=> 'Aquest permís de grup està definit com a <samp>MAI</samp> que serà el valor total ja que no s\'havia fixat encara (definit com a <samp>NO</samp>).',
	'TRACE_GROUP_NEVER_TOTAL_NO_LOCAL'	=> 'Aquest permís de grup per a aquest fòrum està definit com a <samp>MAI</samp> que serà el valor total ja que no s\'havia fixat encara (definit com a <samp>NO</samp>).',
	'TRACE_GROUP_NEVER_TOTAL_YES'	=> 'Aquest permís de grup està definit com a <samp>MAI</samp> que sobreescriu al total <samp>SÍ</samp> a <samp>MAI</samp> per a aquest usuari.',
	'TRACE_GROUP_NEVER_TOTAL_YES_LOCAL'	=> 'Aquest permís de grup per a aquest fòrum està definit com a <samp>MAI</samp> que sobreescriu al total <samp>SÍ</samp> a <samp>MAI</samp> per a aquest usuari.',
	'TRACE_GROUP_NO'				=> 'El permís és <samp>NO</samp> per a aquest grup, però l\'antic resultat es desa.',
	'TRACE_GROUP_NO_LOCAL'			=> 'El permís és <samp>NO</samp> per a aquest grup en aquest fòrum, però l\'antic resultat es desa.',
	'TRACE_GROUP_YES_TOTAL_NEVER'	=> 'Aquest permís de grup està definit com a <samp>SÍ</samp> però el total <samp>MAI</samp> no es sobreescriurà.',
	'TRACE_GROUP_YES_TOTAL_NEVER_LOCAL'	=> 'Aquest permís de grup per a aquest fòrum està definit com a <samp>SÍ</samp> però el total <samp>MAI</samp> no es sobreescriurà.',
	'TRACE_GROUP_YES_TOTAL_NO'		=> 'Aquest permís de grup està definit com a <samp>SÍ</samp> que serà el valor total ja que no s\'havia fixat encara (definit com a <samp>NO</samp>).',
	'TRACE_GROUP_YES_TOTAL_NO_LOCAL'	=> 'Aquest permís de grup per a aquest fòrum està definit com a <samp>SÍ</samp> que serà el valor total ja que no s\'havia fixat encara (definit com a <samp>NO</samp>).',
	'TRACE_GROUP_YES_TOTAL_YES'		=> 'Aquest permís de grup està definit com a <samp>SÍ</samp> i el permís total ja està definit com A <samp>SÍ</samp>, però el resultat total es desa.',
	'TRACE_GROUP_YES_TOTAL_YES_LOCAL'	=> 'Aquest permís de grup per a aquest fòrum està definit com a <samp>SÍ</samp> i el permís total ja està definit com a <samp>SÍ</samp>, però el resultat total es desa.',
	'TRACE_PERMISSION'				=> 'Rastreja permís - %s',
	'TRACE_RESULT'					=> 'Rastreja resultat',
	'TRACE_SETTING'					=> 'Rastreja paràmetres',

	'TRACE_USER_GLOBAL_YES_TOTAL_YES'		=> 'Els permisos independets de l\'usuari es fixen a <samp>SÍ</samp> però els permisos totals ja estan fixats com a <samp>SÍ</samp>, però el resultat total es desa. %sRastreja permisos globals%s',
	'TRACE_USER_GLOBAL_YES_TOTAL_NEVER'		=> 'Els permisos independets de l\'usuari es fixen a <samp>SÍ</samp> que sobreescriuen el resultat actual <samp>MAI</samp>. %sRastreja permisos globals%s',
	'TRACE_USER_GLOBAL_NEVER_TOTAL_KEPT'	=> 'Els permisos independets de l\'usuari es fixen a <samp>NEVER</samp> que no afecten als permisos locals. %sRastreja permisos globals%s',

	'TRACE_USER_FOUNDER'					=> 'L\'usuari té el tipus de fundador, per tant els permisos d\'administrador estan fixats a <samp>SÍ</samp> per defecte.',
	'TRACE_USER_KEPT'						=> 'Els permisos de l\'usari són <samp>NO</samp> però l\'antic resultat es desa.',
	'TRACE_USER_KEPT_LOCAL'					=> 'Els permisos de l\'usuari per a aquest fòrum són <samp>NO</samp> però l\'antic resultat es desa.',
	'TRACE_USER_NEVER_TOTAL_NEVER'			=> 'Els permisos de l\'usuari estan definits com a <samp>MAI</samp> i el valor total està definit com a <samp>MAI</samp>, per tant no hi ha canvis.',
	'TRACE_USER_NEVER_TOTAL_NEVER_LOCAL'	=> 'Els permisos de l\'usuari per a aquest fòrum estan definits com a <samp>MAI</samp> i el valor total és <samp>MAI</samp>, per tant no hi ha canvis.',
	'TRACE_USER_NEVER_TOTAL_NO'				=> 'Els permisos de l\'usuari estan definits com a <samp>MAI</samp> que serà el valor total perquè s\'havia fixat com a NO',
	'TRACE_USER_NEVER_TOTAL_NO_LOCAL'		=> 'Els permisos de l\'usuari per a aquest fòrum estan fixats com a <samp>MAI</samp> que serà el valor total perquè s\'havia fixat com a NO',
	'TRACE_USER_NEVER_TOTAL_YES'			=> 'Els permisos de l\'usuari estan definits com a <samp>MAI</samp> i sobreescriu el valor anterior <samp>SÍ</samp>.',
	'TRACE_USER_NEVER_TOTAL_YES_LOCAL'		=> 'Els permisos de l\'usuari per a aquest fòrum estan definits com a <samp>MAI</samp> i sobreescriu el valor anterior <samp>SÍ</samp>.',
	'TRACE_USER_NO_TOTAL_NO'				=> 'Els permisos de l\'usuari són <samp>NO</samp> i el valor local estava fixat com a NO però el valor per defecte és <samp>MAI</samp>.',
	'TRACE_USER_NO_TOTAL_NO_LOCAL'			=> 'Els permisos de l\'usuari per a aquest fòrum són <samp>NO</samp> i el valor local estava fixat com a NO però el valor per defecte és <samp>MAI</samp>.',
	'TRACE_USER_YES_TOTAL_NEVER'			=> 'Els permisos de l\'usuari estan definits com a <samp>SÍ</samp> però el local <samp>MAI</samp> no es pot sobreescriure.',
	'TRACE_USER_YES_TOTAL_NEVER_LOCAL'		=> 'Els permisos de l\'usuari per a aquest fòrum són set to <samp>SÍ</samp> però el local <samp>MAI</samp> no es pot sobreescriure.',
	'TRACE_USER_YES_TOTAL_NO'				=> 'Els permisos de l\'usuari estan definits com a <samp>SÍ</samp> que serà el valor total ja que estava definit com a <samp>NO</samp>.',
	'TRACE_USER_YES_TOTAL_NO_LOCAL'			=> 'Els permisos de l\'usuari per a aquest fòrum estan definits com a <samp>SÍ</samp> que serà el valor total ja que estava definit com a <samp>NO</samp>.',
	'TRACE_USER_YES_TOTAL_YES'				=> 'Els permisos de l\'usuari estan definits com a <samp>YES</samp> i el valor total està definit com a <samp>SÍ</samp>, per tant no hi ha canvis.',
	'TRACE_USER_YES_TOTAL_YES_LOCAL'		=> 'Els permisos de l\'usuari per a aquest fòrum són set to <samp>YES</samp> i el valor total està definit com a <samp>SÍ</samp>, per tant no hi ha canvis.',
	'TRACE_WHO'								=> 'Qui',
	'TRACE_TOTAL'							=> 'Total',

	'USERS_NOT_ASSIGNED'			=> 'No hi ha cap usuari assignat a aquest rol',
	'USER_IS_MEMBER_OF_DEFAULT'		=> 'és membre dels següents grups per defecte',
	'USER_IS_MEMBER_OF_CUSTOM'		=> 'és membre dels següents grups personalitzats',

	'VIEW_ASSIGNED_ITEMS'	=> 'Veure objectes assignats',
	'VIEW_LOCAL_PERMS'		=> 'Permisos locals',
	'VIEW_GLOBAL_PERMS'		=> 'Permisos globals',
	'VIEW_PERMISSIONS'		=> 'Veure permisos',

	'WRONG_PERMISSION_TYPE'	=> 'Tipus de permís seleccionat incorrecte.',
	'WRONG_PERMISSION_SETTING_FORMAT'	=> 'Les configuracions de permisos tenen un format incorrecte, el phpBB no pot processar-les correctament.',
));

?>
