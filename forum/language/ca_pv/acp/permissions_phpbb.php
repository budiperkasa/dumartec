<?php
/**
* acp_permissions (phpBB Permission Set) [Catalan (Valencian)]
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

/**
*	MODDERS PLEASE NOTE
*	
*	You are able to put your permission sets into a separate file too by
*	prefixing the new file with permissions_ and putting it into the acp
*	language folder.
*
*	An example of how the file could look like:
*
*	<code>
*
*	if (empty($lang) || !is_array($lang))
*	{
*		$lang = array();
*	}
*
*	// Adding new category
*	$lang['permission_cat']['bugs'] = 'Bugs';
*
*	// Adding new permission set
*	$lang['permission_type']['bug_'] = 'Bug Permissions';
*
*	// Adding the permissions
*	$lang = array_merge($lang, array(
*		'acl_bug_view'		=> array('lang' => 'Can view bug reports', 'cat' => 'bugs'),
*		'acl_bug_post'		=> array('lang' => 'Pot publicar bugs', 'cat' => 'post'), // Using a phpBB category here
*	));
*
*	</code>
*/

// Define categories and permission types
$lang = array_merge($lang, array(
	'permission_cat'	=> array(
		'actions'		=> 'Accions',
		'content'		=> 'Contingut',
		'forums'		=> 'Fòrums',
		'misc'			=> 'Miscelània',
		'permissions'	=> 'Permisos',
		'pm'			=> 'Missatges privats',
		'polls'			=> 'Enquestes',
		'post'			=> 'Missatge',
		'post_actions'	=> 'missatge_accions',
		'posting'		=> 'Escrivint',
		'profile'		=> 'Perfil',
		'settings'		=> 'Paràmetres',
		'topic_actions'	=> 'tema_accions',
		'user_group'	=> 'Usuaris i Grups',
	),

	// With defining 'global' here we are able to specify what is printed out if the permission is within the global scope.
	'permission_type'	=> array(
		'u_'			=> 'Permisos de l\'usuari',
		'a_'			=> 'Permisos de l\'administrador',
		'm_'			=> 'Permisos del moderador',
		'f_'			=> 'Permisos del fòrum',
		'global'		=> array(
			'm_'			=> 'Permisos del moderador global',
		),
	),
));

// User Permissions
$lang = array_merge($lang, array(
	'acl_u_viewprofile'	=> array('lang' => 'Pot veure perfils, llista de membres i llista d\'usuaris en línia', 'cat' => 'profile'),
	'acl_u_chgname'		=> array('lang' => 'Pot canviar nom d\'usuari', 'cat' => 'profile'),
	'acl_u_chgpasswd'	=> array('lang' => 'Pot canviar contrasenya', 'cat' => 'profile'),
	'acl_u_chgemail'	=> array('lang' => 'Pot canviar adreça de correu', 'cat' => 'profile'),
	'acl_u_chgavatar'	=> array('lang' => 'Pot canviar avatar', 'cat' => 'profile'),
	'acl_u_chggrp'		=> array('lang' => 'Pot canviar grup d\'usuari per defecte', 'cat' => 'profile'),

	'acl_u_attach'		=> array('lang' => 'Pot adjuntar fitxers', 'cat' => 'post'),
	'acl_u_download'	=> array('lang' => 'Pot descarregar fitxers', 'cat' => 'post'),
	'acl_u_savedrafts'	=> array('lang' => 'Pot desar esborranys', 'cat' => 'post'),
	'acl_u_chgcensors'	=> array('lang' => 'Pot desactivar censures de paraules', 'cat' => 'post'),
	'acl_u_sig'			=> array('lang' => 'Pot fer servir signatura', 'cat' => 'post'),

	'acl_u_sendpm'		=> array('lang' => 'Pot enviar missatges privats', 'cat' => 'pm'),
	'acl_u_masspm'		=> array('lang' => 'Pot enviar mp a múltiples usuaris i grups', 'cat' => 'pm'),
	'acl_u_readpm'		=> array('lang' => 'Pot llegir missatges privats', 'cat' => 'pm'),
	'acl_u_pm_edit'		=> array('lang' => 'Pot editar els seus propis missatges privats', 'cat' => 'pm'),
	'acl_u_pm_delete'	=> array('lang' => 'Pot esborrar missatges privats de la seua carpeta', 'cat' => 'pm'),
	'acl_u_pm_forward'	=> array('lang' => 'Pot reenviar missatges privats', 'cat' => 'pm'),
	'acl_u_pm_emailpm'	=> array('lang' => 'Pot enviar per correu electrònic missatges privats', 'cat' => 'pm'),
	'acl_u_pm_printpm'	=> array('lang' => 'Pot imprimir missatges privats', 'cat' => 'pm'),
	'acl_u_pm_attach'	=> array('lang' => 'Pot adjuntar fitxers als missatges privats', 'cat' => 'pm'),
	'acl_u_pm_download'	=> array('lang' => 'Pot descarregar fitxers als missarges privats', 'cat' => 'pm'),
	'acl_u_pm_bbcode'	=> array('lang' => 'Pot publicar BBCode als missatges privats', 'cat' => 'pm'),
	'acl_u_pm_smilies'	=> array('lang' => 'Pot publicar smilies als missatges privats', 'cat' => 'pm'),
	'acl_u_pm_img'		=> array('lang' => 'Pot publicar imatges als missatges privats', 'cat' => 'pm'),
	'acl_u_pm_flash'	=> array('lang' => 'Pot publicar Flash als missatges privats', 'cat' => 'pm'),

	'acl_u_sendemail'	=> array('lang' => 'Pot enviar correus electrònics', 'cat' => 'misc'),
	'acl_u_sendim'		=> array('lang' => 'Pot enviar missatges instantanis', 'cat' => 'misc'),
	'acl_u_ignoreflood'	=> array('lang' => 'Pot ignorar el límit màxim', 'cat' => 'misc'),
	'acl_u_hideonline'	=> array('lang' => 'Pot amagar l\'estat en línia', 'cat' => 'misc'),
	'acl_u_viewonline'	=> array('lang' => 'Pot veure usuaris amagats en línia', 'cat' => 'misc'),
	'acl_u_search'		=> array('lang' => 'Pot cercar al fòrum', 'cat' => 'misc'),
));

// Forum Permissions
$lang = array_merge($lang, array(
	'acl_f_list'		=> array('lang' => 'Pot veure fòrum', 'cat' => 'post'),
	'acl_f_read'		=> array('lang' => 'Pot llegir fòrum', 'cat' => 'post'),
	'acl_f_post'		=> array('lang' => 'Pot iniciar nous temes', 'cat' => 'post'),
	'acl_f_reply'		=> array('lang' => 'Pot respondre als temes', 'cat' => 'post'),
	'acl_f_icons'		=> array('lang' => 'Pot fer servir icones de tema/missatge', 'cat' => 'post'),
	'acl_f_announce'	=> array('lang' => 'Pot publicar anuncis', 'cat' => 'post'),
	'acl_f_sticky'		=> array('lang' => 'Pot publicar temes recurrents', 'cat' => 'post'),

	'acl_f_poll'		=> array('lang' => 'Pot crear enquestes', 'cat' => 'polls'),
	'acl_f_vote'		=> array('lang' => 'Pot votar a les enquestes', 'cat' => 'polls'),
	'acl_f_votechg'		=> array('lang' => 'Pot canviar el vot', 'cat' => 'polls'),

	'acl_f_attach'		=> array('lang' => 'Pot adjuntar fitxers', 'cat' => 'content'),
	'acl_f_download'	=> array('lang' => 'Pot descarregar fitxers', 'cat' => 'content'),
	'acl_f_sigs'		=> array('lang' => 'Pot fer servir signatures', 'cat' => 'content'),
	'acl_f_bbcode'		=> array('lang' => 'Pot publicar BBCode', 'cat' => 'content'),
	'acl_f_smilies'		=> array('lang' => 'Pot publicar smilies', 'cat' => 'content'),
	'acl_f_img'			=> array('lang' => 'Pot publicar imatges', 'cat' => 'content'),
	'acl_f_flash'		=> array('lang' => 'Pot publicar Flash', 'cat' => 'content'),

	'acl_f_edit'		=> array('lang' => 'Pot editar els seus propis missatges', 'cat' => 'actions'),
	'acl_f_delete'		=> array('lang' => 'Pot esborrar els seus propis missatges', 'cat' => 'actions'),
	'acl_f_user_lock'	=> array('lang' => 'Pot bloquejar els seus propis missatges', 'cat' => 'actions'),
	'acl_f_bump'		=> array('lang' => 'Can bump temes', 'cat' => 'actions'),
	'acl_f_report'		=> array('lang' => 'Pot informar de missatges', 'cat' => 'actions'),
	'acl_f_subscribe'	=> array('lang' => 'Pot subscriure\'s als fòrums', 'cat' => 'actions'),
	'acl_f_print'		=> array('lang' => 'Pot imprimir temes', 'cat' => 'actions'),
	'acl_f_email'		=> array('lang' => 'Pot enviar per correu electrònic temes', 'cat' => 'actions'),

	'acl_f_search'		=> array('lang' => 'Pot cercar al fòrum', 'cat' => 'misc'),
	'acl_f_ignoreflood' => array('lang' => 'Pot ignorar el límit màxim', 'cat' => 'misc'),
	'acl_f_postcount'	=> array('lang' => 'Incrementa el contador de missatges<br /><em>Teniu en compte que això només afecta als missatges nous.</em>', 'cat' => 'misc'),
	'acl_f_noapprove'	=> array('lang' => 'Pot publicar sense aprovació', 'cat' => 'misc'),
));

// Moderator Permissions
$lang = array_merge($lang, array(
	'acl_m_edit'		=> array('lang' => 'Pot editar missatges', 'cat' => 'post_actions'),
	'acl_m_delete'		=> array('lang' => 'Pot esborrar missatges', 'cat' => 'post_actions'),
	'acl_m_approve'		=> array('lang' => 'Pot aprovar missatges', 'cat' => 'post_actions'),
	'acl_m_report'		=> array('lang' => 'Pot tancar i esborrar informes', 'cat' => 'post_actions'),
	'acl_m_chgposter'	=> array('lang' => 'Pot canviar autor del missatge', 'cat' => 'post_actions'),

	'acl_m_move'	=> array('lang' => 'Pot moure temes', 'cat' => 'topic_actions'),
	'acl_m_lock'	=> array('lang' => 'Pot bloquejar temes', 'cat' => 'topic_actions'),
	'acl_m_split'	=> array('lang' => 'Can trencar temes', 'cat' => 'topic_actions'),
	'acl_m_merge'	=> array('lang' => 'Pot fusionar temes', 'cat' => 'topic_actions'),

	'acl_m_info'	=> array('lang' => 'Pot veure detalls del missatge', 'cat' => 'misc'),
	'acl_m_warn'	=> array('lang' => 'Pot editar avisos<br /><em>Això només és en cas global, no està basat en el fòrum.</em>', 'cat' => 'misc'), // This moderator setting is only global (and not local)
	'acl_m_ban'		=> array('lang' => 'Pot gestionar bandejos<br /><em>Això només és en cas global, no està basat en el fòrum.</em>', 'cat' => 'misc'), // This moderator setting is only global (and not local)
));

// Admin Permissions
$lang = array_merge($lang, array(
	'acl_a_board'		=> array('lang' => 'Pot modificar els paràmetres del fòrum o comprovar actualitzacions', 'cat' => 'settings'),
	'acl_a_server'		=> array('lang' => 'Pot modificar el servidor/paràmetres de comunicació', 'cat' => 'settings'),
	'acl_a_jabber'		=> array('lang' => 'Pot modificar els paràmetres Jabber', 'cat' => 'settings'),
	'acl_a_phpinfo'		=> array('lang' => 'Pot veure paràmetres php', 'cat' => 'settings'),

	'acl_a_forum'		=> array('lang' => 'Pot gestionar fòrums', 'cat' => 'forums'),
	'acl_a_forumadd'	=> array('lang' => 'Pot afegir nous fòrums', 'cat' => 'forums'),
	'acl_a_forumdel'	=> array('lang' => 'Pot esborrar fòrums', 'cat' => 'forums'),
	'acl_a_prune'		=> array('lang' => 'Pot retallar fòrums', 'cat' => 'forums'),

	'acl_a_icons'		=> array('lang' => 'Pot modificar icones de tema/missatge i smilies', 'cat' => 'posting'),
	'acl_a_words'		=> array('lang' => 'Pot modificar censures de paraules', 'cat' => 'posting'),
	'acl_a_bbcode'		=> array('lang' => 'Pot definir camps BBCode', 'cat' => 'posting'),
	'acl_a_attach'		=> array('lang' => 'Pot modificar els paràmetres de fitxers adjunts', 'cat' => 'posting'),

	'acl_a_user'		=> array('lang' => 'Pot gestionar usuaris', 'cat' => 'user_group'),
	'acl_a_userdel'		=> array('lang' => 'Pot esborrar/bloquejar usuaris', 'cat' => 'user_group'),
	'acl_a_group'		=> array('lang' => 'Pot gestionar fòrums', 'cat' => 'user_group'),
	'acl_a_groupadd'	=> array('lang' => 'Pot afegir nous grups', 'cat' => 'user_group'),
	'acl_a_groupdel'	=> array('lang' => 'Pot esborrar grups', 'cat' => 'user_group'),
	'acl_a_ranks'		=> array('lang' => 'Pot gestionar rangs', 'cat' => 'user_group'),
	'acl_a_profile'		=> array('lang' => 'Pot gestionar camps personalitzats del perfil', 'cat' => 'user_group'),
	'acl_a_names'		=> array('lang' => 'Pot gestionar noms no permesos', 'cat' => 'user_group'),
	'acl_a_ban'			=> array('lang' => 'Pot gestionar bandejos', 'cat' => 'user_group'),

	'acl_a_viewauth'	=> array('lang' => 'Pot veure màscares de permisos', 'cat' => 'permissions'),
	'acl_a_authgroups'	=> array('lang' => 'Pot modificar permisos de grups individualment', 'cat' => 'permissions'),
	'acl_a_authusers'	=> array('lang' => 'Pot modificar permisos d\'usuaris individualment', 'cat' => 'permissions'),
	'acl_a_fauth'		=> array('lang' => 'Pot modificar tipus de permisos del fòrum', 'cat' => 'permissions'),
	'acl_a_mauth'		=> array('lang' => 'Pot modificar tipus de permisos del moderador', 'cat' => 'permissions'),
	'acl_a_aauth'		=> array('lang' => 'Pot modificar tipus de permisos de l\'administrador', 'cat' => 'permissions'),
	'acl_a_uauth'		=> array('lang' => 'Pot modificar tipus de permisos de l\'usuari', 'cat' => 'permissions'),
	'acl_a_roles'		=> array('lang' => 'Pot gestionar rols', 'cat' => 'permissions'),
	'acl_a_switchperm'	=> array('lang' => 'Pot fer servir altres permisos', 'cat' => 'permissions'),

	'acl_a_styles'		=> array('lang' => 'Pot gestionar estils', 'cat' => 'misc'),
	'acl_a_viewlogs'	=> array('lang' => 'Pot veure registres', 'cat' => 'misc'),
	'acl_a_clearlogs'	=> array('lang' => 'Pot netejar registrs', 'cat' => 'misc'),
	'acl_a_modules'		=> array('lang' => 'Pot gestionar mòduls', 'cat' => 'misc'),
	'acl_a_language'	=> array('lang' => 'Pot gestionar paquets de llengua', 'cat' => 'misc'),
	'acl_a_email'		=> array('lang' => 'Pot enviar correus massius', 'cat' => 'misc'),
	'acl_a_bots'		=> array('lang' => 'Pot gestionar bots', 'cat' => 'misc'),
	'acl_a_reasons'		=> array('lang' => 'Pot gestionar raons d\'informes/denegació', 'cat' => 'misc'),
	'acl_a_backup'		=> array('lang' => 'Pot fer una còpia o restauració de la base de dades', 'cat' => 'misc'),
	'acl_a_search'		=> array('lang' => 'Pot gestionar paràmetres de cerca', 'cat' => 'misc'),
));

?>
