<?php
/** 
*
* acp_attachments [Occitan]
*
* @package language
* @version $Id: attachments.php,v 1.31 2007/10/04 15:07:24 acydburn Exp $
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
	'ACP_ATTACHMENT_SETTINGS_EXPLAIN'	=> 'Aíci se pòdon configurar los paramètres principals pels fichièrs junts e las categorias especialas associadas.',
	'ACP_EXTENSION_GROUPS_EXPLAIN'		=> 'Aíci se pòt apondre, suprimir, modificar o desactivar vòstres grops d\'extensions. D\'autras opcions !!inclusisson l\'atribucion d\'una categoria especiala, la modification del mecanisme de descarga e la definicion d\'una icòna de transferiment que se visualizarà dabans lo fichièr junt que perten al grop.',
	'ACP_MANAGE_EXTENSIONS_EXPLAIN'		=> 'Aíci se pòdon gerir las extensions autorizadas. Per activar vòstras extensions, anatz al panèl de gestion dels grops d\'extensions. Suprimir d\'autorizar pas las extensions d\'escriptes coma <code>php</code>, <code>php3</code>, <code>php4</code>, <code>phtml</code>, <code>pl</code>, <code>cgi</code>, <code>py</code>, <code>rb</code>, <code>asp</code>, <code>aspx</code>, etc.',
	'ACP_ORPHAN_ATTACHMENTS_EXPLAIN'	=> 'Aíci se pòdon veire los fichièrs orfanèls. Cela se produit la plupart del temps quand les utilizaires insèrent dels fichièrs mas n\'envoient pas lo messatge. Podètz suprimir les fichièrs o les insérer à dels messatges existants. L\'insertion als messatges requiert una ID de messatge valide, vous avez à déterminer cette ID de vous-même. Cela assignera lo fichièr junt déjà transféré al messatge portant l\'ID que vous entrez.',
	'ADD_EXTENSION'						=> 'Apondre una extension',
	'ADD_EXTENSION_GROUP'				=> 'Apondre un grop d\'extensions',
	'ADMIN_UPLOAD_ERROR'				=> 'Erreur lors de l\'envoi del fichièr: "%s".',
	'ALLOWED_FORUMS'					=> 'Forums autorizats',
	'ALLOWED_FORUMS_EXPLAIN'			=> 'Autoriza à utiliser lo grop d\'extensions sur les forums sélectionnés. (o tous si seleccionat)',
	'ALLOWED_IN_PM_POST'				=> 'Autorisé',
	'ALLOW_ATTACHMENTS'					=> 'Autorizar les fichièrs junts',
	'ALLOW_ALL_FORUMS'					=> 'Autorizar dins tous les forums',
	'ALLOW_IN_PM'						=> 'Autorizar dins la messagerie privée',
	'ALLOW_PM_ATTACHMENTS'				=> 'Autorizar les fichièrs junts dins les messatges privats',
	'ALLOW_SELECTED_FORUMS'				=> 'Seulement dins les forums sélectionnés ci-dessous',
	'ASSIGNED_EXTENSIONS'				=> 'Extensions assignées',
	'ASSIGNED_GROUP'					=> 'Groupe d\'extensions assigné',
	'ATTACH_EXTENSIONS_URL'				=> 'Extensions',
	'ATTACH_EXT_GROUPS_URL'				=> 'Grops d\'extensions',
	'ATTACH_ID'							=> 'ID',
	'ATTACH_MAX_FILESIZE'				=> 'Taille maximale del fichièr',
	'ATTACH_MAX_FILESIZE_EXPLAIN'		=> 'Taille maximale de chaque fichièr, botar "0" per illimité.',
	'ATTACH_MAX_PM_FILESIZE'			=> 'Taille maximale dels fichièrs dins la messagerie privée',
	'ATTACH_MAX_PM_FILESIZE_EXPLAIN'	=> 'Espace disque maximum disponible per utilizaire per les fichièrs junts dins les messatges privats, botar "0" per illimité.',
	'ATTACH_ORPHAN_URL'					=> 'Fichièrs orphelins',
	'ATTACH_POST_ID'					=> 'ID del messatge',
	'ATTACH_QUOTA'						=> 'Quota total de fichièrs junts',
	'ATTACH_QUOTA_EXPLAIN'				=> 'Espace disque maximum disponible per les fichièrs junts de tout lo forum, botar "0" per illimité.',
	'ATTACH_TO_POST'					=> 'Joindre lo fichièr al messatge',

	'CAT_FLASH_FILES'			=> 'Fichièrs Flash',
	'CAT_IMAGES'				=> 'Images',
	'CAT_QUICKTIME_FILES'		=> 'Fichièrs Quicktime',
	'CAT_RM_FILES'				=> 'Fichièrs RealMedia',
	'CAT_WM_FILES'				=> 'Fichièr Windows Media',
	'CHECK_CONTENT'				=> 'Verificar los fichièrs junts',
	'CHECK_CONTENT_EXPLAIN'		=> 'Se pòdon enganar d\'unes navigadors per que accepten un tipe mime incorrècte pels fichièrs enviats. Aqueste opcion assegura qu\'aquestes fichièrs susceptibles de aquò far sián regetats.',
	'CREATE_GROUP'				=> 'Crear un grop novèl',
	'CREATE_THUMBNAIL'			=> 'Crear una miniature',
	'CREATE_THUMBNAIL_EXPLAIN'	=> 'Crear una miniature dins tous les cas possibles.',

	'DEFINE_ALLOWED_IPS'			=> 'Définir les IP/noms d\'òstes autorizats',
	'DEFINE_DISALLOWED_IPS'			=> 'Définir les IP/noms d\'òstes interdits',
	'DOWNLOAD_ADD_IPS_EXPLAIN'		=> 'Pour spécifier plusieurs adreças IP o noms d\'òstes différents, entrez chacun d\'eux sur una nouvelle linha. Pour spécifier un rang d\'adreças IP, séparez lo début e la fin per un tiret, e utilisez * coma caractère joker.',
	'DOWNLOAD_REMOVE_IPS_EXPLAIN'	=> 'Podètz suprimir (o ne plus exclure) plusieurs adreças IP d\'un coup en utilisant la combinaison de touches appropriée amb vòstre clavier e vòstre souris. Les adreças IP exclues ont un fond bleu.',
	'DISPLAY_INLINED'				=> 'Afficher les images',
	'DISPLAY_INLINED_EXPLAIN'		=> 'Si "Non", les images jointes seront affichées en tant que lien.',
	'DISPLAY_ORDER'					=> 'Ordre d\'affichage dels fichièrs junts',
	'DISPLAY_ORDER_EXPLAIN'			=> 'Classer les fichièrs junts per date.',
	
	'EDIT_EXTENSION_GROUP'			=> 'Modifier lo grop d\'extensions',
	'EXCLUDE_ENTERED_IP'			=> 'Activez ceci per exclure l\'IP/nom d\'òste entré.',
	'EXCLUDE_FROM_ALLOWED_IP'		=> 'Exclure una IP dels IP/noms d\'òstes autorizats',
	'EXCLUDE_FROM_DISALLOWED_IP'	=> 'Exclure una IP dels IP/noms d\'òstes interdits',
	'EXTENSIONS_UPDATED'			=> 'Les extensions ont été mises à jour.',
	'EXTENSION_EXIST'				=> 'L\'extension %s existe déjà.',
	'EXTENSION_GROUP'				=> 'Groupe d\'extensions',
	'EXTENSION_GROUPS'				=> 'Grops d\'extensions',
	'EXTENSION_GROUP_DELETED'		=> 'Lo grop d\'extension a été supprimé.',
	'EXTENSION_GROUP_EXIST'			=> 'Lo grop d\'extension %s existe déjà.',

	'GO_TO_EXTENSIONS'		=> 'Aller à l\'écran de gestion dels extensions',
	'GROUP_NAME'			=> 'Nom del grop',

	'IMAGE_LINK_SIZE'			=> 'Dimensions del lien de l\'image',
	'IMAGE_LINK_SIZE_EXPLAIN'	=> 'Afficher lo fichièr image junt sous forme de lien tèxt, si l\'image est plus grande que les dimensions saisies. Pour desactivar aqueste comportement, réglez les valors sur 0px per 0px.',
	'IMAGICK_PATH'				=> 'Chemin vers Imagemagick',
	'IMAGICK_PATH_EXPLAIN'		=> 'Chemin complet vers l\'application imagemagick, Par exemple: <samp>/usr/bin/</samp>.',

	'MAX_ATTACHMENTS'				=> 'Maximum de fichièrs junts per messatge',
	'MAX_ATTACHMENTS_PM'			=> 'Maximum de fichièrs junts per messatge privé',
	'MAX_EXTGROUP_FILESIZE'			=> 'Taille maximale del fichièr',
	'MAX_IMAGE_SIZE'				=> 'Dimensions maximales dels images',
	'MAX_IMAGE_SIZE_EXPLAIN'		=> 'Taille maximale dels images jointes. Réglez les deux valors sur 0px per 0px per desactivar lo contrôle dels dimensions.',
	'MAX_THUMB_WIDTH'				=> 'Largeur maximale de la miniature générée',
	'MAX_THUMB_WIDTH_EXPLAIN'		=> 'La miniature générée n\'excédera pas la largeur indiquée.',
	'MIN_THUMB_FILESIZE'			=> 'Taille minimale de la miniature',
	'MIN_THUMB_FILESIZE_EXPLAIN'	=> 'Ne pas créer de miniature per les images ayant un poids inférieur à',
	'MODE_INLINE'					=> 'Intégré',
	'MODE_PHYSICAL'					=> 'Physique',

	'NOT_ALLOWED_IN_PM'			=> 'Non autorisé dins les messatges privats',
	'NOT_ALLOWED_IN_PM_POST'	=> 'Non autorisé',
	'NOT_ASSIGNED'				=> 'Non assigné',
	'NO_EXT_GROUP'				=> 'Aucun',
	'NO_EXT_GROUP_NAME'			=> 'Vous n\'avez indiqué aucun nom de grop',
	'NO_EXT_GROUP_SPECIFIED'	=> 'Vous n\'avez spécifié aucun grop d\'extension.',
	'NO_FILE_CAT'				=> 'Aucun',
	'NO_IMAGE'					=> 'Aucune image',
	'NO_THUMBNAIL_SUPPORT'		=> 'Lo support dels miniatures est désactivé. Pour que cela fonctionne correctement, la librairie GD doit èsser disponible o Imagemagick doit èsser installé. Aucun dels deux n\'a été trouvé.',
	'NO_UPLOAD_DIR'				=> 'Lo repertòri d\'envoi indiqué existís pas.',
	'NO_WRITE_UPLOAD'			=> 'Vous ne possédez pas les droits en écriture sul repertòri d\'envoi spécifié. Modifiez les droits en écriture (CHMOD) de aqueste repertòri.',

	'ONLY_ALLOWED_IN_PM'	=> 'Seulement autorisé dins les messatges privats',
	'ORDER_ALLOW_DENY'		=> 'Autorisé',
	'ORDER_DENY_ALLOW'		=> 'Refusé',

	'REMOVE_ALLOWED_IPS'		=> 'Supprimer o ne plus exclure les IP/noms d\'òstes <em>autorizats</em>',
	'REMOVE_DISALLOWED_IPS'		=> 'Supprimer o ne plus exclure les IP/noms d\'òstes <em>interdits</em>',

	'SEARCH_IMAGICK'				=> 'Rechercher l\'application Imagemagick',
	'SECURE_ALLOW_DENY'				=> 'Liste dels autorisations/refus',
	'SECURE_ALLOW_DENY_EXPLAIN'		=> 'Lorsque les téléchargements sécurisés sont activés, modifiez lo comportement per défaut de la liste d\'autorisations/refus à celle d\'una <strong>liste blanche</strong> (Autorisé) o una <strong>liste noire</strong> (Refusé).',
	'SECURE_DOWNLOADS'				=> 'Activar les téléchargements sécurisés',
	'SECURE_DOWNLOADS_EXPLAIN'		=> 'Si cette option est activée, les téléchargements seront limités als IP/noms d\'òstes définis.',
	'SECURE_DOWNLOAD_NOTICE'		=> 'Les téléchargements sécurisés ne sont pas activés. Les paramètres ci-dessus seront appliqués una fois les téléchargements sécurisés activés.',
	'SECURE_DOWNLOAD_UPDATE_SUCCESS'=> 'La liste dels IP a été mise à jour.',
	'SECURE_EMPTY_REFERRER'			=> 'Autorizar un référent void',
	'SECURE_EMPTY_REFERRER_EXPLAIN'	=> 'Les téléchargements sécurisés sont basés sur les référents. Voulez-vous autoriser les téléchargements per les utilizaires sans référent ?',
	'SETTINGS_CAT_IMAGES'			=> 'Paramètres dels categorias d\'image',
	'SPECIAL_CATEGORY'				=> 'Catégorie spéciale',
	'SPECIAL_CATEGORY_EXPLAIN'		=> 'Les categorias spéciales proposent un affichage particulier.',
	'SUCCESSFULLY_UPLOADED'			=> 'Lo transferiment est terminé.',
	'SUCCESS_EXTENSION_GROUP_ADD'	=> 'Lo grop d\'extension a été crée.',
	'SUCCESS_EXTENSION_GROUP_EDIT'	=> 'Lo grop d\'extension a été mes à jour.',

	'UPLOADING_FILES'				=> 'Transfert de fichièrs',
	'UPLOADING_FILE_TO'				=> 'Lo fichièr "%1$s" a été transféré al messatge numéro %2$d.',
	'UPLOAD_DENIED_FORUM'			=> 'Vous n\'avez pas la permission de transférer dels fichièrs sul forum "%s".',
	'UPLOAD_DIR'					=> 'Répertoire d\'envoi',
	'UPLOAD_DIR_EXPLAIN'			=> 'Chemin de stockage per les fichièrs junts. Notez que si vous modifiez aqueste repertòri tout en ayant déjà transféré dels fichièrs junts, vous devrez copiar manuellement les fichièrs al nouvel emplacement.',
	'UPLOAD_ICON'					=> 'Icône d\'envoi',
	'UPLOAD_NOT_DIR'				=> 'L\'emplacement d\'envoi que vous avez spécifié ne semble pas èsser un repertòri.',
));

 ?>
