<?php
/**
*
* acp_users [Occitan]
*
* @package language
* @version $Id: users.php,v 1.32 2007/10/08 14:38:26 acydburn Exp $
* @copyright (c) 2005 phpBB Group
* @license http://opensource.org/licenses/gpl-license.php GNU Public License
*
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

$lang = array_merge($lang, array(
	'ADMIN_SIG_PREVIEW'		=> 'Aperçu de la signatura',
	'AT_LEAST_ONE_FOUNDER'	=> 'Sètz pas autorizat à passer aqueste fondateur en utilizaire normal. Il est nécessaire d\'avoir al mens un fondateur sul forum. Si vous voulez modificar lo statut de cet utilizaire, vous devez tout d\'abord promouvoir un autre utilizaire en tant que fondateur.',

	'BAN_ALREADY_ENTERED'	=> 'Ce bannissement a déjà été effectué. Aucune mise à jour n\'a été effectuée.',
	'BAN_SUCCESSFUL'		=> 'Lo bannissement a été ajouté.',

	'CANNOT_BAN_FOUNDER'			=> 'Sètz pas autorizat à bannir les comptes dels administrateurs fondateurs.',
	'CANNOT_BAN_YOURSELF'			=> 'Sètz pas autorizat à vous bannir.',
	'CANNOT_DEACTIVATE_BOT'			=> 'Sètz pas autorizat à desactivar les comptes de robots. Merci de desactivar lo robot à la place.',
	'CANNOT_DEACTIVATE_FOUNDER'		=> 'Sètz pas autorizat à desactivar les comptes dels administrateurs fondateurs.',
	'CANNOT_DEACTIVATE_YOURSELF'	=> 'Sètz pas autorizat à desactivar vòstre propre compte.',
	'CANNOT_FORCE_REACT_BOT'		=> 'Sètz pas autorizat à forcer la réactivation sur les comptes de robots. Merci de desactivar lo robot à la place.',
	'CANNOT_FORCE_REACT_FOUNDER'	=> 'Sètz pas autorizat à forcer la réactivation sur les comptes dels administrateurs fondateurs.',
	'CANNOT_FORCE_REACT_YOURSELF'	=> 'Sètz pas autorizat à forcer la réactivation de vòstre propre compte.',
	'CANNOT_REMOVE_ANONYMOUS'		=> 'Sètz pas autorizat à suprimir lo compte de l\'utilizaire convidat.',
	'CANNOT_REMOVE_YOURSELF'		=> 'Sètz pas autorizat à suprimir vòstre propre compte.',
	'CANNOT_SET_FOUNDER_IGNORED'	=> 'Vous ne pouvez pas promouvoir dels utilizaires ignorés en fondateurs.',
	'CANNOT_SET_FOUNDER_INACTIVE'	=> 'Debètz activar les utilizaires avant de les promouvoir al statut d\'administrateurs fondateurs, seuls les utilizaires activés peuvent èsser promus.',
	'CONFIRM_EMAIL_EXPLAIN'			=> 'Vous êtes seulement obligé de renseigner cette case si vous modifiez l\'adresse e-mail de cet utilizaire.',

	'DELETE_POSTS'			=> 'Supprimer ses messatges',
	'DELETE_USER'			=> 'Supprimer cet utilizaire',
	'DELETE_USER_EXPLAIN'	=> 'Merci de noter que la suppression d\'un utilizaire est una action irréversible.',

	'FORCE_REACTIVATION_SUCCESS'	=> 'La réactivation a été forcée.',
	'FOUNDER'						=> 'Fondateur',
	'FOUNDER_EXPLAIN'				=> 'Les fondateurs ont toutes les permissions e ne peuvent jamais èsser bannis, supprimés o modifiés per dels utilizaires non fondateurs.',

	'GROUP_APPROVE'					=> 'Accepter lo membre',
	'GROUP_DEFAULT'					=> 'Groupe per défaut',
	'GROUP_DELETE'					=> 'Supprimer lo membre del grop',
	'GROUP_DEMOTE'					=> 'Rétrograder lo chef de grop',
	'GROUP_PROMOTE'					=> 'Promouvoir en chef de grop',

	'IP_WHOIS_FOR'			=> 'IP whois per %s',

	'LAST_ACTIVE'			=> 'Dernière visite lo',

	'MOVE_POSTS_EXPLAIN'	=> 'Merci de seleccionar lo forum ont vous désirez desplaçar tous les messatges de cet utilizaire.',

	'NO_SPECIAL_RANK'		=> 'Aucun rang especial seleccionat',
	'NOT_MANAGE_FOUNDER'	=> 'Vous avez essayé de gerir un utilizaire ayant lo statut de fondateur. Seuls les fondateurs peuvent gerir d\'autres fondateurs.',

	'QUICK_TOOLS'			=> 'Outils rapides',

	'REGISTERED'			=> 'Inscrit lo',
	'REGISTERED_IP'			=> 'Adreça IP lors de son inscription',
	'RETAIN_POSTS'			=> 'Conserver ses messatges',

	'SELECT_FORM'			=> 'Seleccionar un formulaire',
	'SELECT_USER'			=> 'Seleccionar un utilizaire',

	'USER_ADMIN'					=> 'Administracion de l\'utilizaire',
	'USER_ADMIN_ACTIVATE'			=> 'Activar son compte',
	'USER_ADMIN_ACTIVATED'			=> 'Lo compte a été activé.',
	'USER_ADMIN_AVATAR_REMOVED'		=> 'L\'avatar de cet utilizaire a été supprimé.',
	'USER_ADMIN_BAN_EMAIL'			=> 'Fòrabandir per son e-mail',
	'USER_ADMIN_BAN_EMAIL_REASON'	=> 'L\'e-mail a été banni via l\'administracion de l\'utilizaire',
	'USER_ADMIN_BAN_IP'				=> 'Fòrabandir per son adresse IP',
	'USER_ADMIN_BAN_IP_REASON'		=> 'L\'adresse IP a été bannie via l\'administracion de l\'utilizaire',
	'USER_ADMIN_BAN_NAME_REASON'	=> 'Lo nom d\'utilizaire a été banni via l\'administracion de l\'utilizaire',
	'USER_ADMIN_BAN_USER'			=> 'Fòrabandir per son nom d\'utilizaire',
	'USER_ADMIN_DEACTIVATE'			=> 'Desactivar son compte',
	'USER_ADMIN_DEACTIVED'			=> 'Lo compte a été désactivé.',
	'USER_ADMIN_DEL_ATTACH'			=> 'Supprimer ses fichièrs junts',
	'USER_ADMIN_DEL_AVATAR'			=> 'Supprimer son avatar',
	'USER_ADMIN_DEL_POSTS'			=> 'Supprimer ses messatges',
	'USER_ADMIN_DEL_SIG'			=> 'Supprimer sa signatura',
	'USER_ADMIN_EXPLAIN'			=> 'Ici vous pouvez modificar les informations d\'un utilizaire e certaines opcions spécifiques.',
	'USER_ADMIN_FORCE'				=> 'Forcer la réactivation',
	'USER_ADMIN_MOVE_POSTS'			=> 'Déplacer ses messatges',
	'USER_ADMIN_SIG_REMOVED'		=> 'La signatura de cet utilizaire a été supprimée.',
	'USER_ATTACHMENTS_REMOVED'		=> 'Les fichièrs junts de cet utilizaire ont été supprimés.',
	'USER_AVATAR_UPDATED'			=> 'Les informations avatar de cet utilizaire ont été mes à jour.',
	'USER_CUSTOM_PROFILE_FIELDS'	=> 'Camps de perfil personalizats',
	'USER_DELETED'					=> 'Aqueste utilizaire a été supprimé.',
	'USER_GROUP_ADD'				=> 'Apondre cet utilizaire al grop',
	'USER_GROUP_NORMAL'				=> 'L\'utilizaire est membre dels grops définis',
	'USER_GROUP_PENDING'			=> 'En attente d\'acceptation dins les grops',
	'USER_GROUP_SPECIAL'			=> 'L\'utilizaire est membre dels grops predefinits',
	'USER_NO_ATTACHMENTS'			=> 'Aucun fichièr junt à Suprimir.',
	'USER_OVERVIEW_UPDATED'			=> 'Les informations de cet utilizaire ont été mises à jour.',
	'USER_POSTS_DELETED'			=> 'Tous les messatges de cet utilizaire ont été supprimés.',
	'USER_POSTS_MOVED'				=> 'Tous les messatges de cet utilizaire ont été déplacés vers lo forum cible.',
	'USER_PREFS_UPDATED'			=> 'Les préférences de cet utilizaire ont été mises à jour.',
	'USER_PROFILE'					=> 'Perfil utilizaire',
	'USER_PROFILE_UPDATED'			=> 'Lo perfil de cet utilizaire a été mes à jour.',
	'USER_RANK'						=> 'Rang de l\'utilizaire',
	'USER_RANK_UPDATED'				=> 'Lo rang de cet utilizaire a été mes à jour.',
	'USER_SIG_UPDATED'				=> 'La signatura de cet utilizaire a été mise à jour.',
	'USER_TOOLS'					=> 'Outils de base',
));

 ?>
