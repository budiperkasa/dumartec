<?php
/**
*
* acp_groups [Occitan (Lengadocian)‎]
*
* @package language
* @version $Id: groups.php,v 1.29 2007/10/04 15:07:24 acydburn Exp $
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
	'ACP_GROUPS_MANAGE_EXPLAIN'		=> 'Aicí se pòt gerir los grops d\'utilizaires, ne crear de novèls o escafar/modificar los qu\'extisson ja. De plus, vous pouvez définir les chefs de grops, lors statuts, (ouvert, fermé, amagat), lo nom e la description del grop.',
	'ADD_USERS'						=> 'Apondre dels utilizaires',
	'ADD_USERS_EXPLAIN'				=> 'Ici, vous pouvez apondre de nouveaux utilizaires als grops. Podètz également causir que lo grop seleccionat devienne lo grop per défaut per les utilizaires causits. Podètz les définir coma chefs de grop. Indicatz un nom d\'utilizaire per linha.',

	'COPY_PERMISSIONS'				=> 'Copiar les permissions del grop',
	'COPY_PERMISSIONS_EXPLAIN'		=> 'Une fois créé, lo grop aura les mêmes permissions que lo grop seleccionat.',
	'CREATE_GROUP'					=> 'Créer un nouveau grop',

	'GROUPS_NO_MEMBERS'				=> 'Aucun membre dins aqueste grop',
	'GROUPS_NO_MODS'				=> 'Aucun chef de grop definit',
	'GROUP_APPROVE'					=> 'Accepter lo membre',
	'GROUP_APPROVED'				=> 'Membres acceptés',
	'GROUP_AVATAR'					=> 'Avatar del grop',
	'GROUP_AVATAR_EXPLAIN'			=> 'Cette image serà affichée dins lo panèl de gestion dels grops.',
	'GROUP_CLOSED'					=> 'Fermé',
	'GROUP_COLOR'					=> 'Couleur del grop',
	'GROUP_COLOR_EXPLAIN'			=> 'Définir la couleur dins laquelle les membres del grop apparaissent, laissez void per garder les réglages per défaut.',
	'GROUP_CONFIRM_ADD_USER'		=> 'Etes-vous sûr de veire apondre l\'utilizaire %1$s al grop ?',
	'GROUP_CONFIRM_ADD_USERS'		=> 'Etes-vous sûr de veire apondre les utilizaires %1$s al grop ?',
	'GROUP_CREATED'					=> 'Lo grop a été crée.',
	'GROUP_DEFAULT'					=> 'Groupe per défaut',
	'GROUP_DEFS_UPDATED'			=> 'Lo grop a été definit per défaut per les utilizaires sélectionnés.',
	'GROUP_DELETE'					=> 'Supprimer lo membre del grop',
	'GROUP_DELETED'					=> 'Groupe supprimé, les utilizaires de aqueste grop ont été transférés dins lo grop per défaut.',
	'GROUP_DEMOTE'					=> 'Rétrograder lo chef de grop',
	'GROUP_DESC'					=> 'Descripcion',
	'GROUP_DETAILS'					=> 'Entresenhas',
	'GROUP_EDIT_EXPLAIN'			=> 'Ici vous pouvez modificar un grop existant. Podètz modificar son nom, sa description e son statut (ouvert, fermé, etc.). Podètz également changer certains réglages. (colors, avatar, langue, etc.) Les changements effectués ici annulent les préférences utilizaire. Notez que les utilizaires del grop peuvent modificar les réglages d\'avatar de grop seulement si vous leur en donnez la permission.',
	'GROUP_ERR_USERS_EXIST'			=> 'Les utilizaires sélectionnés sont déjà membres de aqueste grop.',
	'GROUP_FOUNDER_MANAGE'			=> 'Gestion per les fondateurs uniquement',
	'GROUP_FOUNDER_MANAGE_EXPLAIN'	=> 'Limite la gestion de aqueste grop als fondateurs. Les utilizaires ayant dels permissions de grops peuvent veire aqueste grop, ainsi que les membres del grop.',
	'GROUP_HIDDEN'					=> 'Invisible',
	'GROUP_LANG'					=> 'Langue del grop',
	'GROUP_LEAD'					=> 'Chefs de grop',
	'GROUP_LEADERS_ADDED'			=> 'De nouveaux chefs ont été ajoutés.',
	'GROUP_LEGEND'					=> 'Afficher lo grop dins la légende',
	'GROUP_LIST'					=> 'Membres actuels',
	'GROUP_LIST_EXPLAIN'			=> 'Voici la liste complète de tous les utilizaires actuels de aqueste grop. Podètz suprimir aquestes membres (excepté dins certains grops spéciaux) o en apondre de nouveaux.',
	'GROUP_MEMBERS'					=> 'Membres del grop',
	'GROUP_MEMBERS_EXPLAIN'			=> 'Voici la liste complète  dels membres de aqueste grop. Lo grop se présente ainsi: chefs de grop, membres en attente, membres acceptés. D\'ici, vous pouvez gerir tous les réglages possibles sur les différents membres. Pour rétrograder un chef de grop mas lo conserver dins lo grop, utilisez "Rétrograder" plutôt que "Supprimer". Pareillement, utilisez "Promouvoir" per passer un utilizaire en chef de grop.',
	'GROUP_MESSAGE_LIMIT'			=> 'Limite de messatges privats per dossier per lo grop',
	'GROUP_MESSAGE_LIMIT_EXPLAIN'	=> 'Ce réglage annulera la limite dels messatges dels utilizaires per dossier. Une valeur à "0" signifie que la limite dels utilizaires per défaut serà utilisée.',
	'GROUP_MODS_ADDED'				=> 'De nouveaux chefs de grop ont été ajoutés.',
	'GROUP_MODS_DEMOTED'			=> 'Lo chef de grop a été rétrogradé.',
	'GROUP_MODS_PROMOTED'			=> 'Lo chef de grop a été promu.',
	'GROUP_NAME'					=> 'Nom del grop',
	'GROUP_NAME_TAKEN'				=> 'Lo nom del grop que vous avez entré est déjà utilisé, sélectionnez-en un autre.',
	'GROUP_OPEN'					=> 'Dobèrt',
	'GROUP_PENDING'					=> 'Membres en attente',
	'GROUP_PROMOTE'					=> 'Promouvoir en chef de grop',
	'GROUP_RANK'					=> 'Rang del grop',
	'GROUP_RECEIVE_PM'				=> 'Groupe autorisé à recevoir dels messatges privats',
	'GROUP_RECEIVE_PM_EXPLAIN'		=> 'Merci de noter que les grops invisibles ne peuvent pas recevoir de messatges privats, malgré aqueste réglage.',
	'GROUP_REQUEST'					=> 'A la demande',
	'GROUP_SETTINGS_SAVE'			=> 'Réglages del grop',
	'GROUP_TYPE'					=> 'Type de grop',
	'GROUP_TYPE_EXPLAIN'			=> 'Ce réglage détermine qui peut joindre o veire aqueste grop.',
	'GROUP_UPDATED'					=> 'Les réglages del grop ont été mes à jour.',

	'GROUP_USERS_ADDED'				=> 'De nouveaux utilizaires ont été ajoutés.',
	'GROUP_USERS_EXIST'				=> 'Les utilizaires sélectionnés sont déjà membres de aqueste grop.',
	'GROUP_USERS_REMOVE'			=> 'Utilisateurs supprimés del grop e transférés dins lo grop per défaut.',

	'MAKE_DEFAULT_FOR_ALL'	=> 'Groupe per défaut per tous les membres',
	'MEMBERS'				=> 'Membres',

	'NO_GROUP'					=> 'Aucun grop spécifié.',
	'NO_GROUPS_CREATED'			=> 'Aucun grop n\'a été créé.',
	'NO_PERMISSIONS'			=> 'Ne pas copiar de permissions',
	'NO_USERS'					=> 'Vous n\'avez indiqué aucun utilizaire.',
	'NO_USERS_ADDED'			=> 'No users were added to the group.',
	'NO_VALID_USERS'			=> 'You haven’t entered any users eligible for that action.',
	
	'SPECIAL_GROUPS'			=> 'Grops predefinits',
	'SPECIAL_GROUPS_EXPLAIN'	=> 'Les grops predefinits sont dels grops spéciaux, ils ne peuvent pas èsser supprimés o modifiés. Podètz néanmoins y apondre dels utilizaires e modificar les réglages de base. En cliquant sur "Groupe per défaut", vous pouvez définir lo grop spécifié en tant que grop per défaut per tous ses membres.',

	'TOTAL_MEMBERS'				=> 'Membres',

	'USERS_APPROVED'				=> 'Les utilizaires ont été acceptés.',
	'USER_DEFAULT'					=> 'Utilizaire per défaut',
	'USER_DEF_GROUPS'				=> 'Grops définis per l\'utilizaire',
	'USER_DEF_GROUPS_EXPLAIN'		=> 'Ce sont dels grops créés per vous o un autre administrateur del forum. Podètz y gerir les membres, ainsi qu\'éditer les propriétés del grop o même suprimir lo grop.',
	'USER_GROUP_DEFAULT'			=> 'Définir coma grop per défaut',
	'USER_GROUP_DEFAULT_EXPLAIN'	=> 'Si "oui", aqueste grop serà lo grop per défaut dels futurs utilizaires ajoutés.',
	'USER_GROUP_LEADER'				=> 'Définir coma chef de grop',
));

 ?>
