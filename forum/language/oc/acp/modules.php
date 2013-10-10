<?php
/**
*
* acp_modules [Occitan]
*
* @package language
* @version $Id: moduls.php,v 1.13 2007/10/04 15:07:24 acydburn Exp $
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
	'ACP_MODULE_MANAGEMENT_EXPLAIN'	=> 'Ici, vous pouvez gerir l\'ensemble dels moduls. Notez bien que lo panèl d\'administracion comporte 3 niveaux de menut (Catégorie -> Catégorie -> Module) alors que les autres ne comportent que 2 niveaux (Catégorie -> Module) qui doivent èsser conservés. Soyez également conscient que vous pouvez vous bloquer si vous désactivez o supprimez les moduls responsables de la gestion dels moduls eux-mêmes.',
	'ADD_MODULE'					=> 'Apondre un module',
	'ADD_MODULE_CONFIRM'			=> 'Etes-vous sûr de vouloir apondre lo module seleccionat amb lo mode seleccionat ?',
	'ADD_MODULE_TITLE'				=> 'Apondre un module',

	'CANNOT_REMOVE_MODULE'	=> 'Impossible de suprimir lo module parent. Supprimez o desplaçar les moduls enfants avant de tenter cette action.',
	'CATEGORY'				=> 'Categorie',
	'CHOOSE_MODE'			=> 'Choisissez un mode de module',
	'CHOOSE_MODE_EXPLAIN'	=> 'Indicatz lo mode qui doit èsser utilisé.',
	'CHOOSE_MODULE'			=> 'Choisissez un module',
	'CHOOSE_MODULE_EXPLAIN'	=> 'Indicatz lo fichièr appelé per aqueste module.',
	'CREATE_MODULE'			=> 'Créer un nouveau module',

	'DEACTIVATED_MODULE'	=> 'Desactivar lo module',
	'DELETE_MODULE'			=> 'Supprimer lo module',
	'DELETE_MODULE_CONFIRM'	=> 'Etes-vous sûr de vouloir suprimir aqueste module ?',

	'EDIT_MODULE'			=> 'Editer lo module',
	'EDIT_MODULE_EXPLAIN'	=> 'Ici vous pouvez entrer una configuration especific al module.',

	'HIDDEN_MODULE'			=> 'Amagar lo module',

	'MODULE'					=> 'Module',
	'MODULE_ADDED'				=> 'Module ajouté.',
	'MODULE_DELETED'			=> 'Module supprimé.',
	'MODULE_DISPLAYED'			=> 'Afficher lo module',
	'MODULE_DISPLAYED_EXPLAIN'	=> 'Si vous ne souhaitez pas Suprimir aqueste module mas tout de même l\'utiliser, mettez ceci à non.',
	'MODULE_EDITED'				=> 'Module édité.',
	'MODULE_ENABLED'			=> 'Activar lo module',
	'MODULE_LANGNAME'			=> 'Langue del module',
	'MODULE_LANGNAME_EXPLAIN'	=> 'Entrez lo nom del module qui serà affiché. Utilisez la variable de langue si elle est définie dins lo fichièr de langue.',
	'MODULE_TYPE'				=> 'Type de module',

	'NO_CATEGORY_TO_MODULE'	=> 'Impossible de convertir la catégorie en module. Supprimez o desplaçar les moduls enfants avant de tenter cette action.',
	'NO_MODULE'				=> 'Aucun module trouvé.',
	'NO_MODULE_ID'			=> 'id del module non spécifié.',
	'NO_MODULE_LANGNAME'	=> 'Auncun nom de module spécifié.',
	'NO_PARENT'				=> 'Aucun module parent',

	'PARENT'				=> 'Module parent',
	'PARENT_NO_EXIST'		=> 'Lo module parent existís pas.',

	'SELECT_MODULE'			=> 'Seleccionatz un module',
));

 ?>
