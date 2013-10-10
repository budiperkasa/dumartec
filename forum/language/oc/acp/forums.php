<?php
/** 
*
* acp_forums [Occitan]
*
* @package language
* @version $Id: forums.php,v 1.32 2007/10/05 13:14:58 kellanved Exp $
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

// Forum Admin
$lang = array_merge($lang, array(
	'AUTO_PRUNE_DAYS'			=> 'Délestage automatique dels messatges depuis',
	'AUTO_PRUNE_DAYS_EXPLAIN'	=> 'Nombre de jours entre lo dernier messatge posté e la suppression del tèma.',
	'AUTO_PRUNE_FREQ'			=> 'Fréquence del délestage automatique',
	'AUTO_PRUNE_FREQ_EXPLAIN'	=> 'Durée en jours entre deux délestages.',
	'AUTO_PRUNE_VIEWED'			=> 'Délestage automatique dels messatges vus depuis',
	'AUTO_PRUNE_VIEWED_EXPLAIN'	=> 'Nombre de jours entre la dernière consultation e la suppression del tèma.',

	'COPY_PERMISSIONS'				=> 'Copiar les permissions depuis',
	'COPY_PERMISSIONS_ADD_EXPLAIN'	=> 'Une fois créé, lo forum aura les mêmes permissions que celles choisies ici. Si aucun forum n\'est choisi, lo forum novèl ne serà pas visible tant que ses permissions ne sont pas définies.',
	'COPY_PERMISSIONS_EDIT_EXPLAIN'	=> 'Si vous choisissez de copiar les permissions, lo forum aura les mêmes permissions que celles choisies ici. Elles remplaceront toutes les permissions précédemment définies per aqueste forum. Si aucun forum n\'est choisi les permissions actuelles seront conservées.',
	'CREATE_FORUM'					=> 'Créer un forum novèl',

	'DECIDE_MOVE_DELETE_CONTENT'		=> 'Supprimer o desplaçar lo contenu vers un forum',
	'DECIDE_MOVE_DELETE_SUBFORUMS'		=> 'Supprimer o desplaçar les sous-forums vers un forum',
	'DEFAULT_STYLE'						=> 'Style per défaut',
	'DELETE_ALL_POSTS'					=> 'Supprimer les messatges',
	'DELETE_SUBFORUMS'					=> 'Supprimer les sous-forums e les messatges',
	'DISPLAY_ACTIVE_TOPICS'				=> 'Activar les sujets populaires',
	'DISPLAY_ACTIVE_TOPICS_EXPLAIN'		=> 'Si activé, les sujets populaires dels sous-forums causits seront affichés dins cette catégorie.',

	'EDIT_FORUM'					=> 'Editer un forum',
	'ENABLE_INDEXING'				=> 'Activar l\'indexation de recèrca',
	'ENABLE_INDEXING_EXPLAIN'		=> 'Si activé, les messatges del forum seront indexés per la recèrca.',
	'ENABLE_POST_REVIEW'			=> 'Activar la révision dels messatges',
	'ENABLE_POST_REVIEW_EXPLAIN'	=> 'Si activé, les utilizaires seront avertis si de nouveaux messatges ont été postés dins lo tèma pendant qu\'ils rédigeaient lo leur. Ceci doit èsser désactivé sur les forums de chat.',
	'ENABLE_RECENT'					=> 'Afficher les sujets populaires',
	'ENABLE_RECENT_EXPLAIN'			=> 'Si activé, les sujets de aqueste forum seront affichés dins la liste dels sujets populaires.',
	'ENABLE_TOPIC_ICONS'			=> 'Activar les icônes dels sujets',

	'FORUM_ADMIN'						=> 'Administracion dels forums',
	'FORUM_ADMIN_EXPLAIN'				=> 'Dans phpBB3 il n\'y a plus de catégories, tout est basé sur la notion de forum. Chaque forum peut contenir un nombre illimité de sous-forums qui peuvent o non contenir dels messatges (c\'est-à-dire se comporter o non coma una catégorie). Podètz individuellement apondre, modificar, suprimir, verrouiller, déverrouiller dels forums e apondre certains paramètres. Si dels sujets e dels messatges se désynchronisent vous pouvez également re-synchroniser un forum. <strong>Debètz copiar o régler les permissions appropriées per les nouveaux forums créés, afin qu\'ils soient visibles.</strong>',
	'FORUM_AUTO_PRUNE'					=> 'Activar l\'auto-délestage',
	'FORUM_AUTO_PRUNE_EXPLAIN'			=> 'Pour lo délestage dels sujets del forum, réglez les paramètres de fréquence ci-dessous.',
	'FORUM_CREATED'						=> 'Lo forum a été créé.',
	'FORUM_DATA_NEGATIVE'				=> 'Les paramètres de délestage ne peuvent pas èsser négatifs.',
	'FORUM_DELETE'						=> 'Supprimer lo forum',
	'FORUM_DELETE_EXPLAIN' 				=> 'Lo formulaire suivant vous permet de suprimir un forum e de décider ont vous désirez desplaçar tous les sujets (o forums) qu\'il contient.',	'FORUM_DELETED'	=> 'Lo forum a été supprimé.',
	'FORUM_DESC'						=> 'Descripcion',
	'FORUM_DESC_EXPLAIN'				=> 'Toute balise saisie serà affichée telle quelle.',
	'FORUM_DESC_TOO_LONG'				=> 'La description del forum est trop longue. Elle ne peut contenir plus de 4000 caractères.',
	'FORUM_EDIT_EXPLAIN'				=> 'Lo formulaire suivant vous permet de personnaliser aqueste forum. Notez que la moderacion e les paramètres de contrôle dels messatges sont définis via les permissions per chaque utilizaire o grop.',
	'FORUM_IMAGE'						=> 'Image del forum',
	'FORUM_IMAGE_EXPLAIN'				=> 'Emplacement, relatif à la racine del dossier de phpBB, d\'una image supplémentaire à associer à aqueste forum.',
	'FORUM_LINK_EXPLAIN'				=> 'URL complète (incluant lo protocole, exemple <samp>http://</samp> ) qui enverra l\'utilizaire vers aqueste forum.',
	'FORUM_LINK_TRACK'					=> 'Compter les redirections',
	'FORUM_LINK_TRACK_EXPLAIN'			=> 'Enregistre lo nombre de fois que lo lien a été cliqué.',
	'FORUM_NAME'						=> 'Nom del forum',
	'FORUM_NAME_EMPTY'					=> 'Debètz indicar un nom per lo forum.',
	'FORUM_PARENT'						=> 'Forum parent',
	'FORUM_PASSWORD'					=> 'Mot de pas',
	'FORUM_PASSWORD_CONFIRM'			=> 'Confirmacion del mot de pas',
	'FORUM_PASSWORD_CONFIRM_EXPLAIN'	=> 'Uniquement si un mot de pas a été saisi.',
	'FORUM_PASSWORD_EXPLAIN'			=> 'Spécifiez un mot de pas per aqueste forum, utilisez de préférence un système de permissions.',
	'FORUM_PASSWORD_UNSET'				=> 'Supprimer lo mot de pas del forum',
	'FORUM_PASSWORD_UNSET_EXPLAIN'		=> 'Cochez cette case si vous souhaitez suprimir lo mot de pas del forum.',
	'FORUM_PASSWORD_OLD'				=> 'Lo mot de pas del forum utilise un ancien encryptage e doit èsser modifié.',
	'FORUM_PASSWORD_MISMATCH'			=> 'Les mots de passe saisis ne concordent pas.',
	'FORUM_PRUNE_SETTINGS'				=> 'Réglages del délestage dels forums',
	'FORUM_RESYNCED'					=> 'Lo forum "%s" a été resynchronisé',
	'FORUM_RULES_EXPLAIN'				=> 'Les règles del forum sont affichées sur chaque page del forum.',
	'FORUM_RULES_LINK'					=> 'Lien vers les règles',
	'FORUM_RULES_LINK_EXPLAIN'			=> 'Podètz spécifier l\'URL de la page/del messatge contenant vos règles. Ce réglage prévaudra sur tout tèxt de règles de forum spécifié.',
	'FORUM_RULES_PREVIEW'				=> 'Aperçu dels règles',
	'FORUM_RULES_TOO_LONG'				=> 'Les règles del forum sont trop longues. Elles ne peuvent contenir plus de 4000 caractères.',
	'FORUM_SETTINGS'					=> 'Réglages del forum',
	'FORUM_STATUS'						=> 'Statut',
	'FORUM_STYLE'						=> 'Style del forum',
	'FORUM_TOPICS_PAGE'					=> 'Sujets per page',
	'FORUM_TOPICS_PAGE_EXPLAIN'			=> 'Cette valeur (autre que "0") remplacera lo réglage per défaut dels sujets per page.',
	'FORUM_TYPE'						=> 'Type de forum',
	'FORUM_UPDATED'						=> 'Les informations del forum ont été mises à jour.',

	'FORUM_WITH_SUBFORUMS_NOT_TO_LINK'		=> 'Vous souhaitez modificar en un forum-lien, un forum contenant dels sous-forums e dins lequel vous pouviez rédiger dels messatges. Avant de procéder, déplacez tous les sous-forums hors de aqueste forum, car una fois lo forum modifié en un forum-lien, vous ne pourrez plus consulter les sous-forums.',	
	
	'GENERAL_FORUM_SETTINGS'	=> 'Réglages généraux del forum',

	'LINK'					=> 'Ligam',
	'LIST_INDEX'			=> 'Fa la tièra del jos-forum dins la legenda del forum parent',
	'LIST_INDEX_EXPLAIN'	=> 'Visualiza aqueste forum sur l\'indèx e endacòm mai coma ligam dins la legenda de son forum parent.',
	'LIST_SUBFORUMS'			=> 'Fa la tièra dels jos-forums dins la legenda',
	'LIST_SUBFORUMS_EXPLAIN'	=> 'Visualiza los jos-forums d\'aqueste forum dins l\'indèx e endacòm mai coma ligam dins la legenda se l\'opcion “Fa la tièra dels jos-forums dins la legenda” es activada.',
	'LOCKED'				=> 'Varrolhat',

	'MOVE_POSTS_NO_POSTABLE_FORUM'	=> 'Lo forum que vous avez seleccionat per y desplaçar les messatges es pas approprié. Seleccionatz un forum destiné à recevoir dels messatges.',
	'MOVE_POSTS_TO'					=> 'Déplacer les messatges',
	'MOVE_SUBFORUMS_TO'				=> 'Déplacer les sous-forums',

	'NO_DESTINATION_FORUM'			=> 'Vous n\'avez pas spécifié de forum per desplaçar lo contenu',
	'NO_FORUM_ACTION'				=> 'Aucune action définie per aqueste qui se produit amb lo contenu del forum',
	'NO_PARENT'						=> 'Aucun parent',
	'NO_PERMISSIONS'				=> 'Ne pas copiar les permissions',
	'NO_PERMISSION_FORUM_ADD'		=> 'Vous n\'avez pas les permissions requises per apondre dels forums.',
	'NO_PERMISSION_FORUM_DELETE'	=> 'Vous n\'avez pas les permissions requises per suprimir dels forums.',

	'PARENT_IS_LINK_FORUM'		=> 'Lo forum-parent que vous avez spécifié est un forum-lien. Les forums-lien ne peuvent pas avoir de sous-forums, spécifiez una autre catégorie o un autre forum en tant que forum-parent.',
	'PARENT_NOT_EXIST'			=> 'Lo parent existís pas.',
	'PRUNE_ANNOUNCEMENTS'		=> 'Délester les annonces',
	'PRUNE_STICKY'				=> 'Délester les post-it',
	'PRUNE_OLD_POLLS'			=> 'Délester les anciens sondages',
	'PRUNE_OLD_POLLS_EXPLAIN'	=> 'Supprime les sujets amb dels sondages sans vote durant aqueste nombre de jours.',
	
	'REDIRECT_ACL'	=> 'Podètz désormais %sdéfinir les permissions%s de aqueste forum.',

	'SYNC_IN_PROGRESS'			=> 'Synchronisation del forum',
	'SYNC_IN_PROGRESS_EXPLAIN'	=> 'Resynchronisation dels sujets %1$d/%2$d en cours.',

	'TYPE_CAT'			=> 'Catégorie',
	'TYPE_FORUM'		=> 'Forum',
	'TYPE_LINK'			=> 'Lien',

	'UNLOCKED'			=> 'Déverrouillé',
));

 ?>
