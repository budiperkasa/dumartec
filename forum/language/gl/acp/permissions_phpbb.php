<?php
/** 
* acp_permissions (phpBB Permission Set) [Galician]
*
* @package language
* @version $Id: permissions_phpbb.php 8911 2008-09-23 13:03:33Z acydburn $
* @copyright (c) 2005 phpBB Group 
* @license http://opensource.org/licenses/gpl-license.php GNU Public License 
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
*		'acl_bug_post'		=> array('lang' => 'Can post bugs', 'cat' => 'mensaxe'), // Using a phpBB category here
*	));
*
*	</code>
*/

// Define categories and permission types
$lang = array_merge($lang, array(
	'permission_cat'	=> array(
		'actions'		=> '',
		'content'		=> 'Contido',
		'forums'		=> 'Foros',
		'misc'			=> 'Misc',
		'permissions'	=> 'Permisos',
		'pm'			=> 'Mensaxes Privadas',
		'polls'			=> 'Enquisas',
		'post'			=> 'Mensaxe',
		'post_actions'	=> 'Accións de mensaxe',
		'posting'		=> 'Publicando',
		'profile'		=> 'Perfil',
		'settings'		=> 'Configuración',
		'topic_actions'	=> 'Accións de tema',
		'user_group'	=> 'Usuarios &amp; Grupos',
	),

	// With defining 'global' here we are able to specify what is printed out if the permission is within the global scope.
	'permission_type'	=> array(
		'u_'			=> 'Permisos de usuario',
		'a_'			=> 'Permisos de Administración',
		'm_'			=> 'Permisos de moderador',
		'f_'			=> 'Permisos dos Foros',
		'global'		=> array(
			'm_'			=> 'Permisos de moderador global',
		),
	),
));

// User Permissions
$lang = array_merge($lang, array(
	'acl_u_viewprofile'	=> array('lang' => 'Pode visualizar perfís, lista de membros e lista de conectados', 'cat' => 'perfil'),
	'acl_u_chgname'		=> array('lang' => 'Pode cambiar o nome de usuario', 'cat' => 'perfil'),
	'acl_u_chgpasswd'	=> array('lang' => 'Pode cambiar o contrasinal', 'cat' => 'perfil'),
	'acl_u_chgemail'	=> array('lang' => 'Pode cambiar enderezo do email', 'cat' => 'perfil'),
	'acl_u_chgavatar'	=> array('lang' => 'Pode cambiar representación dixital(avatar)', 'cat' => 'perfil'),
	'acl_u_chggrp'		=> array('lang' => 'Pode cambiar grupo de usuario predeterminado', 'cat' => 'perfil'),

	'acl_u_attach'		=> array('lang' => 'Pode anexar ficheiros', 'cat' => 'mensaxe'),
	'acl_u_download'	=> array('lang' => 'Pode descargar ficheiros', 'cat' => 'mensaxe'),
	'acl_u_savedrafts'	=> array('lang' => 'Pode gardar rascuños', 'cat' => 'mensaxe'),
	'acl_u_chgcensors'	=> array('lang' => 'Pode desactivar censores de palabras', 'cat' => 'mensaxe'),
	'acl_u_sig'			=> array('lang' => 'Pode usar sinatura', 'cat' => 'mensaxe'),

	'acl_u_sendpm'		=> array('lang' => 'Pode enviar mensaxes privadas', 'cat' => 'mp'),
	'acl_u_masspm'		=> array('lang' => 'Pode enviar mensaxes a múltiples usuarios', 'cat' => 'mp'),
	'acl_u_masspm_group'=> array('lang' => 'Pode enviar mensaxes a grupos', 'cat' => 'mp'),
	'acl_u_readpm'		=> array('lang' => 'Pode ler mensaxes privadas', 'cat' => 'mp'),
	'acl_u_pm_edit'		=> array('lang' => 'Pode editar mensaxes privadas propias', 'cat' => 'mp'),
	'acl_u_pm_delete'	=> array('lang' => 'Pode eliminar mensaxes privadas desde o propio cartafol', 'cat' => 'mp'),
	'acl_u_pm_forward'	=> array('lang' => 'Pode envíar mensaxes privadas', 'cat' => 'mp'),
	'acl_u_pm_emailpm'	=> array('lang' => 'Pode enviar por mail mensaxes privadas', 'cat' => 'mp'),
	'acl_u_pm_printpm'	=> array('lang' => 'Pode imprimir mensaxes privadas', 'cat' => 'mp'),
	'acl_u_pm_attach'	=> array('lang' => 'Pode adxuntar arquivos a mensaxes privadas', 'cat' => 'mp'),
	'acl_u_pm_download'	=> array('lang' => 'Pode baixar arquivos en mensaxes privadas', 'cat' => 'mp'),
	'acl_u_pm_bbcode'	=> array('lang' => 'Pode usar BBCode en mensaxes privadas', 'cat' => 'mp'),
	'acl_u_pm_smilies'	=> array('lang' => 'Pode usar risoños en mensaxes privadas', 'cat' => 'mp'),
	'acl_u_pm_img'		=> array('lang' => 'Pode usar imaxes en mensaxes privadas', 'cat' => 'mp'),
	'acl_u_pm_flash'	=> array('lang' => 'Pode usar Escintileos en mensaxes privadas', 'cat' => 'mp'),

	'acl_u_sendemail'	=> array('lang' => 'Poder enviar correo-e', 'cat' => 'misc'),
	'acl_u_sendim'		=> array('lang' => 'Pode enviar mensaxes instantáneos', 'cat' => 'misc'),
	'acl_u_ignoreflood'	=> array('lang' => 'Pode ignorar o límite de fluxo', 'cat' => 'misc'),
	'acl_u_hideonline'	=> array('lang' => 'Pode agochar o status en liña', 'cat' => 'misc'),
	'acl_u_viewonline'	=> array('lang' => 'Pode mirar todo en rede', 'cat' => 'misc'),
	'acl_u_search'		=> array('lang' => 'Pode procurar no taboleiro', 'cat' => 'misc'),
));

// Forum Permissions
$lang = array_merge($lang, array(
	'acl_f_list'		=> array('lang' => 'Poder mirar o Foro', 'cat' => 'mensaxe'),
	'acl_f_read'		=> array('lang' => 'Poder ler o Foro', 'cat' => 'mensaxe'),
	'acl_f_post'		=> array('lang' => 'Pode publicar mensaxes no foro', 'cat' => 'mensaxe'),
	'acl_f_announce'	=> array('lang' => 'Pode publicar anuncios', 'cat' => 'mensaxe'),
	'acl_f_sticky'		=> array('lang' => 'Pode publicar notas', 'cat' => 'mensaxe'),
	'acl_f_reply'		=> array('lang' => 'Pode responder a mensaxes publicados', 'cat' => 'mensaxe'),
	'acl_f_icons'		=> array('lang' => 'Pode usar iconas nas mensaxes e temas', 'cat' => 'mensaxe'),

	'acl_f_poll'		=> array('lang' => 'Poder crear enquisas', 'cat' => 'Enquisas'),
	'acl_f_vote'		=> array('lang' => 'Poder votar nas enquisas', 'cat' => 'Enquisas'),
	'acl_f_votechg'		=> array('lang' => 'Pode cambiar o voto existente', 'cat' => 'Enquisas'),

	'acl_f_attach'		=> array('lang' => 'Poder anexar ficheiros', 'cat' => 'contido'),
	'acl_f_download'	=> array('lang' => 'Poder descargar ficheiros', 'cat' => 'contido'),
	'acl_f_sigs'		=> array('lang' => 'Pode usar sinaturas', 'cat' => 'contido'),
	'acl_f_bbcode'		=> array('lang' => 'Poder publicar con BBCode', 'cat' => 'contido'),
	'acl_f_smilies'		=> array('lang' => 'pode utilizar sorrisos nas mensaxes', 'cat' => 'contido'),
	'acl_f_img'			=> array('lang' => 'Poder enviar imaxes', 'cat' => 'contido'),
	'acl_f_flash'		=> array('lang' => 'Poder publicar con Flash', 'cat' => 'contido'),

	'acl_f_edit'		=> array('lang' => 'Pode editar as mensaxes propias', 'cat' => 'accións'),
	'acl_f_delete'		=> array('lang' => 'Poder borrar mensaxes propias', 'cat' => 'accións'),
	'acl_f_user_lock'	=> array('lang' => 'Pode bloquear temas propios', 'cat' => 'accións'),
	'acl_f_bump'		=> array('lang' => 'Pode rexeitar temas', 'cat' => 'accións'),
	'acl_f_report'		=> array('lang' => 'Pode denunciar mensaxes', 'cat' => 'accións'),
	'acl_f_subscribe'	=> array('lang' => 'Podes subscribirte aos foros', 'cat' => 'accións'),
	'acl_f_print'		=> array('lang' => 'Podes imprimir temas', 'cat' => 'accións'),
	'acl_f_email'		=> array('lang' => 'Podes enviar temas por correo-e', 'cat' => 'accións'),

	'acl_f_search'		=> array('lang' => 'Podes procurar nos foros', 'cat' => 'misc'),
	'acl_f_ignoreflood' => array('lang' => 'Pode ignorar o límite de fluxo', 'cat' => 'misc'),
	'acl_f_postcount'	=> array('lang' => 'Incrementar contador de mensaxes publicadas', 'cat' => 'misc'),
	'acl_f_noapprove'	=> array('lang' => 'Podes publicar mensaxes sen aprobación', 'cat' => 'misc'),
));

// Moderator Permissions
$lang = array_merge($lang, array(
	'acl_m_edit'		=> array('lang' => 'Podes editar mensaxes publicadas', 'cat' => 'accións de publicado'),
	'acl_m_delete'		=> array('lang' => 'Podes eliminar mensaxes publicadas', 'cat' => 'accións de publicado'),
	'acl_m_approve'		=> array('lang' => 'Podes aprobar mensaxes publicadas', 'cat' => 'accións de publicado'),
	'acl_m_report'		=> array('lang' => 'Podes pechar e eliminar informes', 'cat' => 'accións de publicado'),
	'acl_m_chgposter'	=> array('lang' => 'Podes mudar o autor da mensaxe publicada', 'cat' => 'accións de publicado'),

	'acl_m_move'	=> array('lang' => 'Podes mover temas', 'cat' => 'accións de temas'),
	'acl_m_lock'	=> array('lang' => 'Podes bloquear temas', 'cat' => 'accións de temas'),
	'acl_m_split'	=> array('lang' => 'Podes dividir temas', 'cat' => 'accións de temas'),
	'acl_m_merge'	=> array('lang' => 'Podes unir temas', 'cat' => 'accións de temas'),

	'acl_m_info'	=> array('lang' => 'Podes ver os pormenores das mensaxes publicadas', 'cat' => 'misc'),
	'acl_m_warn'	=> array('lang' => 'Podes emitir advertencias<br /><em>Este axuste asignase só de xeito global. Non depende do foro.</em>', 'cat' => 'misc'),
	'acl_m_ban'		=> array('lang' => 'Podes xestionar prohibicións<br /><em>Este axuste asignase só de xeito global. Non depende do foro.</em>', 'cat' => 'misc'), // This moderator setting is only global (and not local)
));

// Admin Permissions
$lang = array_merge($lang, array(
	'acl_a_board'		=> array('lang' => 'Podes modificar a configuración do taboleiro', 'cat' => 'Opcions'),
	'acl_a_server'		=> array('lang' => 'Podes modificar a configuración do servidor ou da comunicación', 'cat' => 'Opcions'),
	'acl_a_jabber'		=> array('lang' => 'Podes modificar a configuración do jabber', 'cat' => 'Opcions'),
	'acl_a_phpinfo'		=> array('lang' => 'Podes ver a configuración do php', 'cat' => 'Opcions'),

	'acl_a_forum'		=> array('lang' => 'Podes xestionar os foros', 'cat' => 'Foros'),
	'acl_a_forumadd'	=> array('lang' => 'Podes engadir novos foros', 'cat' => 'Foros'),
	'acl_a_forumdel'	=> array('lang' => 'Podes eliminar foros', 'cat' => 'Foros'),
	'acl_a_prune'		=> array('lang' => 'Podes purgar foros', 'cat' => 'Foros'),

	'acl_a_icons'		=> array('lang' => 'Podes modificar risoños e iconas dos temas e mensaxes', 'cat' => 'publicando mensaxe'),
	'acl_a_words'		=> array('lang' => 'Podes modificar os censores de verbas', 'cat' => 'publicando mensaxe'),
	'acl_a_bbcode'		=> array('lang' => 'Podes definir etiquetas BBCode', 'cat' => 'publicando mensaxe'),
	'acl_a_attach'		=> array('lang' => 'Podes modificar a configuración relativa aos adxuntos', 'cat' => 'publicando mensaxe'),

	'acl_a_user'		=> array('lang' => 'Podes xestionar usuarios<br /><em>Isto inclúe tamén ver o axente navegador dos usuarios amosados na lista de conectados.</em>', 'cat' => 'grupo de usuario'),
	'acl_a_userdel'		=> array('lang' => 'Podes eliminar ou purgar usuarios', 'cat' => 'grupo de usuario'),
	'acl_a_group'		=> array('lang' => 'Podes xestionar grupos', 'cat' => 'grupo de usuario'),
	'acl_a_groupadd'	=> array('lang' => 'Podes engadir novos grupos', 'cat' => 'grupo de usuario'),
	'acl_a_groupdel'	=> array('lang' => 'Podes eliminar grupos', 'cat' => 'grupo de usuario'),
	'acl_a_ranks'		=> array('lang' => 'Podes xestionar rangos', 'cat' => 'grupo de usuario'),
	'acl_a_profile'		=> array('lang' => 'Podes xestionar campos de perfil á machada', 'cat' => 'grupo de usuario'),
	'acl_a_names'		=> array('lang' => 'Podes xestionar nomes non permitidos', 'cat' => 'grupo de usuario'),
	'acl_a_ban'			=> array('lang' => 'Podes xestionar prohibicións', 'cat' => 'grupo de usuario'),

	'acl_a_viewauth'	=> array('lang' => 'Podes ver as máscaras de permisos', 'cat' => 'permisos'),
	'acl_a_fauth'		=> array('lang' => 'Podes modificar os permisos dos foros', 'cat' => 'permisos'),
	'acl_a_mauth'		=> array('lang' => 'Podes modificar os permisos de moderador', 'cat' => 'permisos'),
	'acl_a_aauth'		=> array('lang' => 'Podes modificar os permisos de administración', 'cat' => 'permisos'),
	'acl_a_uauth'		=> array('lang' => 'Podes modificar os permisos de usuario', 'cat' => 'permisos'),
	'acl_a_authgroups'	=> array('lang' => 'Podes modificar os permisos para os grupos', 'cat' => 'permisos'),
	'acl_a_authusers'	=> array('lang' => 'Podes modificar os permisos para os usuarios', 'cat' => 'permisos'),
	'acl_a_roles'		=> array('lang' => 'Podes xestionar regras', 'cat' => 'permisos'),
	'acl_a_switchperm'	=> array('lang' => 'Podes usar outros permisos', 'cat' => 'permisos'),

	'acl_a_styles'		=> array('lang' => 'Podes xestionar estilos', 'cat' => 'misc'),
	'acl_a_viewlogs'	=> array('lang' => 'Podes ver rexistros', 'cat' => 'misc'),
	'acl_a_clearlogs'	=> array('lang' => 'Podes baleirar rexistros', 'cat' => 'misc'),
	'acl_a_modules'		=> array('lang' => 'Podes xestionar módulos', 'cat' => 'misc'),
	'acl_a_language'	=> array('lang' => 'Podes xestionar paquetes de idioma', 'cat' => 'misc'),
	'acl_a_email'		=> array('lang' => 'Podes enviar correos-e masivos', 'cat' => 'misc'),
	'acl_a_bots'		=> array('lang' => 'Podes xestionar robots', 'cat' => 'misc'),
	'acl_a_reasons'		=> array('lang' => 'Podes xestionar motivos de informe ou rexeitamento', 'cat' => 'misc'),
	'acl_a_backup'		=> array('lang' => 'Can backup/restore database', 'cat' => 'misc'),
	'acl_a_search'		=> array('lang' => 'Podes xestionar backends de procura e configuracións', 'cat' => 'misc'),
));

?>