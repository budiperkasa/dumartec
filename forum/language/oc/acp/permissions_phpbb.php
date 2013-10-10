<?php
/** 
* acp_permissions (phpBB Permission Set) [Occitan]
*
* @package language
* @version $Id: permissions_phpbb.php,v 1.29 2007/10/04 15:07:24 acydburn Exp $
* @copyright (c) 2005 phpBB Group 
* @license http://opensource.org/licenses/gpl-license.php GNU Public License 
*/
/**
* CONTRIBUTORS
* Translation made by phpBB-fr.com and phpBB.biz Teams
* http://www.phpbb-fr.com
* http://www.phpbb.biz
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
*		'acl_bug_view'		=> array('lang' => 'Pòt view bug reports', 'cat' => 'bugs'),
*		'acl_bug_post'		=> array('lang' => 'Pòt post bugs', 'cat' => 'post'), // Using a phpBB category here
*	));
*
*	</code>
*/

// Define categories and permission types
$lang = array_merge($lang, array(
	'permission_cat'	=> array(
		'actions'	=> 'Accions',
		'content'		=> 'Contenu',
		'forums'		=> 'Forums',
		'misc'			=> 'Divers',
		'permissions'	=> 'Permissions',
		'pm'			=> 'Messatges privats',
		'polls'			=> 'Sondages',
		'post'			=> 'Message',
		'post_actions'	=> 'Accions sur les messatges',
		'posting'		=> 'Rédaction de messatge',
		'profile'		=> 'Panèl de l\'utilizaire',
		'settings'		=> 'Configuracion',
		'topic_actions'	=> 'Accions sur les sujets',
		'user_group'	=> 'Utilisateurs &amp; Grops'
	),

	// With defining 'global' here we are able to specify what is printed out if the permission is within the global scope.
	'permission_type'	=> array(
		'u_'			=> 'Permissions d\'utilizaire',
		'a_'			=> 'Permissions d\'administrateur',
		'm_'			=> 'Permissions de modérateur',
		'f_'			=> 'Permissions de forum',
		'global'		=> array(
			'm_'			=> 'Permissions de modérateur global',
		),
	),
));

// User Permissions
$lang = array_merge($lang, array(
	'acl_u_viewprofile'	=> array('lang' => 'Peut veire un perfil public, la liste dels membres e les utilizaires connectés', 'cat' => 'profile'),
	'acl_u_chgname'		=> array('lang'	=> 'Peut modificar son pseudo', 'cat' => 'profile'),
	'acl_u_chgpasswd'	=> array('lang' => 'Peut modificar son mot de pas', 'cat' => 'profile'),
	'acl_u_chgemail'	=> array('lang' => 'Peut modificar son e-mail', 'cat' => 'profile'),
	'acl_u_chgavatar'	=> array('lang'	=> 'Peut modificar son avatar', 'cat' => 'profile'),
	'acl_u_chggrp'		=> array('lang'	=> 'Peut modificar son grop per défaut', 'cat' => 'profile'),

	'acl_u_attach'		=> array('lang'	=> 'Peut joindre dels fichièrs', 'cat' => 'post'),
	'acl_u_download'	=> array('lang'	=> 'Peut descargar dels fichièrs', 'cat' => 'post'),
	'acl_u_savedrafts'	=> array('lang'	=> 'Peut enregistrer dels brouillons', 'cat' => 'post'),
	'acl_u_chgcensors'	=> array('lang'	=> 'Peut desactivar la censure', 'cat' => 'post'),
	'acl_u_sig'			=> array('lang'	=> 'Peut utiliser una signatura', 'cat' => 'post'),


	'acl_u_sendpm'	=> array('lang'	=> 'Peut envoyer dels messatges privats', 'cat' => 'pm'),
	'acl_u_masspm'	=> array('lang'	=> 'Peut procéder à dels envois multiples', 'cat' => 'pm'),
	'acl_u_readpm'	=> array('lang'	=> 'Peut lire ses messatges privats', 'cat' => 'pm'),
	'acl_u_pm_edit'	=> array('lang'	=> 'Peut modificar ses messatges privats', 'cat' => 'pm'),
	'acl_u_pm_delete'	=> array('lang'	=> 'Peut suprimir dels messatges privats de son dossier', 'cat' => 'pm'),
	'acl_u_pm_forward'	=> array('lang'	=> 'Peut transférer dels messatges privats', 'cat' => 'pm'),
	'acl_u_pm_emailpm'	=> array('lang'	=> 'Peut envoyer dels messatges privats per e-mail', 'cat' => 'pm'),
	'acl_u_pm_printpm'	=> array('lang'	=> 'Peut imprimer dels messatges privats', 'cat' => 'pm'),
	'acl_u_pm_attach'	=> array('lang'	=> 'Peut joindre dels fichièrs', 'cat' => 'pm'),
	'acl_u_pm_download'	=> array('lang'	=> 'Peut descargar dels fichièrs', 'cat' => 'pm'),
	'acl_u_pm_bbcode'	=> array('lang'	=> 'Peut utiliser dels BBCodes', 'cat' => 'pm'),
	'acl_u_pm_smilies'	=> array('lang'	=> 'Peut utiliser dels smileys', 'cat' => 'pm'),
	'acl_u_pm_img'	=> array('lang'	=> 'Peut poster dels images', 'cat' => 'pm'),
	'acl_u_pm_flash'	=> array('lang'	=> 'Peut poster dels animations Flash', 'cat' => 'pm'),
	
	'acl_u_sendemail'	=> array('lang'	=> 'Peut envoyer dels e-mails', 'cat' => 'misc'),
	'acl_u_sendim'	=> array('lang'	=> 'Peut envoyer dels messatges instantanés', 'cat' => 'misc'),
	'acl_u_ignoreflood'	=> array('lang'	=> 'Peut ignorer la limite de flood', 'cat' => 'misc'),
	'acl_u_hideonline'	=> array('lang'	=> 'Peut cacher son statut en linha', 'cat' => 'misc'),
	'acl_u_viewonline'	=> array('lang'	=> 'Peut veire lo(s) utilizaire(s) invisible(s) connectat(s)', 'cat' => 'misc'),
	'acl_u_search'	=> array('lang'	=> 'Peut rechercher', 'cat' => 'misc'),
));
	
// Forum Permissions
$lang = array_merge($lang, array(
	'acl_f_list'	=> array('lang'	=> 'Peut veire aqueste forum', 'cat' => 'post'),
	'acl_f_read'	=> array('lang'	=> 'Peut lire un messatge', 'cat' => 'post'),
	'acl_f_post'	=> array('lang'	=> 'Peut poster un messatge', 'cat' => 'post'),
	'acl_f_announce'	=> array('lang'	=> 'Peut poster una annonce', 'cat' => 'post'),
	'acl_f_sticky'	=> array('lang'	=> 'Peut poster un post-It', 'cat' => 'post'),
	'acl_f_reply'	=> array('lang'	=> 'Peut répondre à un messatge', 'cat' => 'post'),
	'acl_f_icons'	=> array('lang'	=> 'Peut utiliser les icônes de tèma/messatge', 'cat' => 'post'),
	'acl_f_poll'	=> array('lang'	=> 'Peut poster un sondage', 'cat' => 'polls'),
	'acl_f_vote'	=> array('lang'	=> 'Peut voter', 'cat' => 'polls'),
	'acl_f_votechg'	=> array('lang'	=> 'Peut modificar un vote', 'cat' => 'polls'),
	'acl_f_attach'	=> array('lang'	=> 'Peut joindre dels fichièrs', 'cat' => 'content'),
	'acl_f_download'	=> array('lang'	=> 'Peut descargar dels fichièrs', 'cat' => 'content'),
	'acl_f_sigs'	=> array('lang'	=> 'Peut utiliser una signatura', 'cat' => 'content'),
	'acl_f_bbcode'	=> array('lang'	=> 'Peut utiliser dels BBCodes', 'cat' => 'content'),
	'acl_f_smilies'	=> array('lang'	=> 'Peut utiliser dels smileys', 'cat' => 'content'),
	'acl_f_img'	=> array('lang'	=> 'Peut poster dels images', 'cat' => 'content'),
	'acl_f_flash'	=> array('lang'	=> 'Peut poster dels animations Flash', 'cat' => 'content'),
	'acl_f_edit'	=> array('lang'	=> 'Peut éditer un de ses messatges', 'cat' => 'actions'),
	'acl_f_delete'	=> array('lang'	=> 'Peut suprimir un de ses messatges', 'cat' => 'actions'),
	'acl_f_user_lock'	=> array('lang'	=> 'Peut verrouiller un de ses sujets', 'cat' => 'actions'),
	'acl_f_bump'	=> array('lang'	=> 'Peut remonter un tèma', 'cat' => 'actions'),
	'acl_f_report'	=> array('lang'	=> 'Peut rapporter un messatge à un modérateur', 'cat' => 'actions'),
	'acl_f_subscribe'	=> array('lang'	=> 'Peut surveiller un forum', 'cat' => 'actions'),
	'acl_f_print'	=> array('lang'	=> 'Peut imprimer un tèma', 'cat' => 'actions'),
	'acl_f_email'	=> array('lang'	=> 'Peut envoyer dels sujets per e-mail', 'cat' => 'actions'),
	'acl_f_search'	=> array('lang'	=> 'Peut rechercher dins lo forum', 'cat' => 'misc'),
	'acl_f_ignoreflood'	=> array('lang'	=> 'Peut ignorer la limite de flood', 'cat' => 'misc'),
	'acl_f_postcount'	=> array('lang'	=> 'Peut incrémenter lo compteur de messatges<br /><em>Notez que aqueste paramètre affecte uniquement les nouveaux messatges.</em>', 'cat' => 'misc'),
	'acl_f_noapprove'	=> array('lang'	=> 'Peut poster sans aprovacion', 'cat' => 'misc'),
));

// Moderator Permissions
$lang = array_merge($lang, array(
	'acl_m_edit'	=> array('lang'	=> 'Peut éditer un messatge', 'cat' => 'post_actions'),
	'acl_m_delete'	=> array('lang'	=> 'Peut suprimir un messatge', 'cat' => 'post_actions'),
	'acl_m_approve'	=> array('lang'	=> 'Peut approuver un messatge', 'cat' => 'post_actions'),
	'acl_m_report'	=> array('lang'	=> 'Peut clôturer e suprimir les rapòrts', 'cat' => 'post_actions'),
	'acl_m_chgposter'	=> array('lang'	=> 'Peut modificar l\'auteur d\'un messatge', 'cat' => 'post_actions'),
	'acl_m_move'	=> array('lang'	=> 'Peut desplaçar un tèma', 'cat' => 'topic_actions'),
	'acl_m_lock'	=> array('lang'	=> 'Peut verrouiller un tèma', 'cat' => 'topic_actions'),
	'acl_m_split'	=> array('lang'	=> 'Peut diviser un tèma', 'cat' => 'topic_actions'),
	'acl_m_merge'	=> array('lang'	=> 'Peut fusionar dels sujets', 'cat' => 'topic_actions'),
	'acl_m_info'	=> array('lang'	=> 'Peut veire les informations del messatge', 'cat' => 'misc'),
	'acl_m_warn'	=> array('lang'	=> 'Peut avertir un membre<br /><em>Notez que aqueste réglage est assigné globalement. Il es pas basé sul forum.</em>', 'cat' => 'misc'), // This moderator setting is only global (and not local)
	'acl_m_ban'		=> array('lang'	=> 'Peut gerir les bannissements<br /><em>Notez que aqueste réglage est assigné globalement. Il es pas basé sul forum.</em>', 'cat' => 'misc'), // This moderator setting is only global (and not local)
));

// Admin Permissions
$lang = array_merge($lang, array(
	'acl_a_board'	=> array('lang'	=> 'Peut modificar la configuration generala/Verificar les mises à jour', 'cat' => 'settings'),
	'acl_a_server'	=> array('lang'	=> 'Peut modificar la configuration servidor/communication', 'cat' => 'settings'),
	'acl_a_jabber'	=> array('lang'	=> 'Peut modificar la configuration Jabber', 'cat' => 'settings'),
	'acl_a_phpinfo'	=> array('lang'	=> 'Peut consulter la configuration PHP', 'cat' => 'settings'),
	'acl_a_forum'	=> array('lang'	=> 'Peut gerir les forums', 'cat' => 'forums'),
	'acl_a_forumadd'	=> array('lang'	=> 'Peut apondre un forum', 'cat' => 'forums'),
	'acl_a_forumdel'	=> array('lang'	=> 'Peut suprimir un forum', 'cat' => 'forums'),
	'acl_a_prune'	=> array('lang'	=> 'Peut délester un forum', 'cat' => 'forums'),
	'acl_a_icons'	=> array('lang'	=> 'Peut modificar les icônes de tèma/messatge e les smileys', 'cat' => 'posting'),
	'acl_a_words'	=> array('lang'	=> 'Peut modificar les mots censurés', 'cat' => 'posting'),
	'acl_a_bbcode'	=> array('lang'	=> 'Peut créer dels balises BBCodes', 'cat' => 'posting'),
	'acl_a_attach'	=> array('lang'	=> 'Peut modificar la configuration dels fichièrs junts', 'cat' => 'posting'),
	'acl_a_user'	=> array('lang'	=> 'Peut gerir les utilizaires<br /><em>Ceci inclu également l\'affichage del navigateur dels utilizaires dins la liste dels utilizaires connectés.</em>', 'cat' => 'user_group'),
	'acl_a_userdel'	=> array('lang'	=> 'Peut suprimir/trier les utilizaires', 'cat' => 'user_group'),
	'acl_a_group'	=> array('lang'	=> 'Peut gerir les grops', 'cat' => 'user_group'),
	'acl_a_groupadd'	=> array('lang'	=> 'Peut apondre un grop', 'cat' => 'user_group'),
	'acl_a_groupdel'	=> array('lang'	=> 'Peut suprimir un grop', 'cat' => 'user_group'),
	'acl_a_ranks'	=> array('lang'	=> 'Peut gerir les rangs', 'cat' => 'user_group'),
	'acl_a_profile'	=> array('lang'	=> 'Peut gerir les champs personalizats', 'cat' => 'user_group'),
	'acl_a_names'	=> array('lang'	=> 'Peut gerir les noms interdits', 'cat' => 'user_group'),
	'acl_a_ban'	=> array('lang'	=> 'Peut gerir les bannissements', 'cat' => 'user_group'),
	'acl_a_viewauth'	=> array('lang'	=> 'Peut visualiser les masques de permissions', 'cat' => 'permissions'),
	'acl_a_fauth'	=> array('lang'	=> 'Peut modificar les permissions dels forums', 'cat' => 'permissions'),
	'acl_a_mauth'	=> array('lang'	=> 'Peut modificar les permissions dels moderaires', 'cat' => 'permissions'),
	'acl_a_aauth'	=> array('lang'	=> 'Peut modificar les permissions dels administrateurs', 'cat' => 'permissions'),
	'acl_a_uauth'	=> array('lang'	=> 'Peut modificar les permissions dels utilizaires individuels', 'cat' => 'permissions'),
	'acl_a_authgroups'	=> array('lang'	=> 'Peut modificar les permissions dels grops', 'cat' => 'permissions'),
	'acl_a_authusers'	=> array('lang'	=> 'Peut modificar les permissions dels utilizaires', 'cat' => 'permissions'),
	'acl_a_roles'	=> array('lang'	=> 'Peut gerir les modèles', 'cat' => 'permissions'),
	'acl_a_switchperm'	=> array('lang'	=> 'Peut utiliser les permissions d\'autrui', 'cat' => 'permissions'),
	'acl_a_styles'	=> array('lang'	=> 'Peut gerir les estils', 'cat' => 'misc'),
	'acl_a_viewlogs'	=> array('lang'	=> 'Peut consulter les journaux', 'cat' => 'misc'),
	'acl_a_clearlogs'	=> array('lang'	=> 'Peut effacer les journaux', 'cat' => 'misc'),
	'acl_a_modules'	=> array('lang'	=> 'Peut gerir les moduls', 'cat' => 'misc'),
	'acl_a_language'	=> array('lang'	=> 'Peut gerir les packs de langue', 'cat' => 'misc'),
	'acl_a_email'	=> array('lang'	=> 'Peut envoyer dels e-mails de masse', 'cat' => 'misc'),
	'acl_a_bots'	=> array('lang'	=> 'Peut gerir les robots', 'cat' => 'misc'),
	'acl_a_reasons'	=> array('lang'	=> 'Peut gerir les rapòrts/rasons', 'cat' => 'misc'),
	'acl_a_backup'	=> array('lang'	=> 'Peut sauvegarder e restaurer la base de données', 'cat' => 'misc'),
	'acl_a_search'	=> array('lang'	=> 'Peut gerir l\'indexation e les paramètres de recèrca', 'cat' => 'misc'),
));

 ?>
