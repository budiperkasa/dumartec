<?php
/** 
*
* acp_styles [Occitan]
*
* @package language
* @version $Id: estils.php,v 1.40 2007/10/04 15:07:24 acydburn Exp $
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
	'ACP_IMAGESETS_EXPLAIN'	=> 'Un pack d\'images comprend tous les boutons, forums, répertoires, etc. e d\'autres images qui sont utilisées sul forum. Ici, vous pouvez modificar, exporter o suprimir les pack d\'images existants e en importer o en activar de nouveaux.',
	'ACP_STYLES_EXPLAIN' => 'Ici, vous pouvez gerir les estils disponibles sur vòstre forum. Un estil consiste en un template, un thème e un pack d\'images. Ici, vous pouvez modificar lo estil existant, suprimir, desactivar, réactiver, créer o en importer de nouveaux. Podètz également veire à quoi ressemblera lo estil, en utilisant la fonction aperçu. Lo estil per défaut est mes en évidence per un astérisque (*). Lo nombre total d\'utilizaires per chaque estil est également spécifié, notez que la fonction d\'annulation dels estils utilizaires ne figure pas ici.',
	'ACP_TEMPLATES_EXPLAIN' => 'Un template est una page HTML qui comprend toutes les balises utilisées per gerir la mise en page de vòstre forum. Ici, vous pouvez éditer, suprimir, exporter, importer e prévisualiser l\'ensemble del template. Podètz également modificar lo code del template utilisé per produire dels BBCodes.',
	'ACP_THEMES_EXPLAIN' => 'Un thème est l\'ensemble dels colors e images appliqué à un template per définir l\'aspect de vòstre forum. Lo nombre d\'opcions disponibles dépend de la configuration de vòstre servidor e de l\'installation de phpBB, reportez-vous al manuel d\'utilisation per plus de détails. Notez que l\'utilisation d\'un estil différent coma base de travail est optionnel.',
	'ADD_IMAGESET' => 'Apondre un pack d\'images',
	'ADD_IMAGESET_EXPLAIN' => 'Ici vous pouvez créer un pack d\'images. Selon la configuration del servidor e vos accès als permissions dels fichièrs, vous aurez plus o mens d\'opcions disponibles. Par exemple, vous pouvez vous baser sur un pack d\'images existant. Podètz également descargar o envoyer un pack disponible (dins lo dossier de sauvegarde) depuis una archive de pack d\'images. Si vous téléchargez o importez un pack, il peut prendre lo même nom que celui de l\'archive dont il est extrait, per cela, laissez lo nom del pack d\'images void.',
	'ADD_STYLE' => 'Créer un estil',
	'ADD_STYLE_EXPLAIN' => 'Ici vous pouvez créer un nouveau estil. Selon la configuration del servidor e vos accès als permissions dels fichièrs, vous aurez plus o mens d\'opcions disponibles. Par exemple, il vous est peut-èsser possible de baser un estil sur un estil existant, vous pouvez également descargar o importer un estil disponible (dins lo dossier de sauvegarde) depuis una archive de estil. Si vous téléchargez o importez un estil, il serà renommé automatiquement.',
	'ADD_TEMPLATE' => 'Créer un template',
	'ADD_TEMPLATE_EXPLAIN' => 'Ici vous pouvez apondre un nouveau template. Selon la configuration del servidor e vos accès als permissions dels fichièrs, vous aurez plus o mens d\'opcions disponibles. Par exemple, vous pouvez baser un template sur un template existant, vous pouvez également descargar o envoyer un template disponible dins lo dossier de sauvegarde depuis una archive de template. Si vous téléchargez o importez un template, il peut prendre lo même nom que celui de l\'archive dont il est extrait, per cela, laissez lo nom del template void.',
	'ADD_THEME' => 'Créer un thème',
	'ADD_THEME_EXPLAIN' => 'Ici vous pouvez apondre un nouveau thème. Selon la configuration del servidor e vos accès als permissions dels fichièrs, vous aurez plus o mens d\'opcions disponibles. Par exemple, vous pouvez baser un thème sur un thème existant, vous pouvez également descargar o envoyer un thème disponible dins lo dossier de sauvegarde depuis una archive de thème. Si vous téléchargez o importez un thème, il peut prendre lo même nom que celui de l\'archive dont il est extrait, per cela, laissez lo nom del thème void.',
	'ARCHIVE_FORMAT' => 'Type d\'archive',
	'AUTOMATIC_EXPLAIN'      => 'Laissez void per tenter una détection automatique.',

	'BACKGROUND' => 'Fond',
	'BACKGROUND_COLOUR' => 'Couleur de fond',
	'BACKGROUND_IMAGE' => 'Image de fond',
	'BACKGROUND_REPEAT' => 'Répétition del fond',
	'BOLD' => 'Gras',

	'CACHE' => 'Cache',
	'CACHE_CACHED' => 'Mise en cache',
	'CACHE_FILENAME' => 'Nom del fichièr',
	'CACHE_FILESIZE' => 'Taille del fichièr',
	'CACHE_MODIFIED' => 'Modifié',
	'CONFIRM_IMAGESET_REFRESH' => 'Etes-vous sûr de vouloir rafraîchir toutes les données del pack d\'images ? Les données chargées remplaceront toutes les modifications faites al pack d\'images réalisées amb l\'éditeur.',
	'CONFIRM_TEMPLATE_CLEAR_CACHE' => 'Etes-vous sûr de vouloir effacer toutes les versions en cache dels fichièrs de vòstre template ?',
	'CONFIRM_TEMPLATE_REFRESH' => 'Etes-vous sûr de vouloir rafraîchir toutes les données del template dins la base de données, amb lo contenu del système de fichièrs ? Cela remplacera toutes les modifications prises en charge amb l\'éditeur de modèle dont lo modèle est stocké dins la base de données.',
	'CONFIRM_THEME_REFRESH' => 'Etes-vous sûr de vouloir rafraîchir les données del thème de la base amb les thèmes del système de fichièrs ? Cela remplacera toutes les modifications prises en charge amb l\'éditeur de thème dont lo thème est stocké dins la base de données.',
	'COPYRIGHT' => 'Copyright',
	'CREATE_IMAGESET' => 'Créer un nouveau pack d\'images',
	'CREATE_STYLE' => 'Créer un nouveau estil',
	'CREATE_TEMPLATE' => 'Créer un nouveau template',
	'CREATE_THEME' => 'Créer un nouveau thème',
	'CURRENT_IMAGE' => 'Image actuelle',

	'DEACTIVATE_DEFAULT' => 'Vous ne pouvez pas desactivar lo estil per défaut.',
	'DELETE_FROM_FS' => 'Supprimer depuis lo système de fichièrs',
	'DELETE_IMAGESET' => 'Supprimer un pack d\'images',
	'DELETE_IMAGESET_EXPLAIN' => 'Podètz suprimir de la base les packs d\'images causits. De plus, si vous y êtes autorisé vous pouvez suprimir l\'ensemble del système de fichièrs. Notez que l\'opération est irréversible donc lo pack d\'images ne pourra pas èsser récupéré. Il est recommandé de l\'exporter al préalable per una éventuelle utilisation future.',
	'DELETE_STYLE' => 'Supprimer un estil',
	'DELETE_STYLE_EXPLAIN' => 'Podètz suprimir lo estil choisi. Vous ne pouvez pas suprimir tous les éléments del estil à partir d\'ici. Ils doivent èsser effacés individuellement via lors pages respectives. Notez que cette opération est irréversible.',
	'DELETE_TEMPLATE' => 'Supprimer un template',
	'DELETE_TEMPLATE_EXPLAIN' => 'Podètz suprimir un ensemble de templates de la base de données. De plus, si vous y êtes autorisé vous pouvez suprimir cet ensemble del système de fichièrs. Notez que l\'opération est irréversible. Donc, les modèles sont supprimés definitivament. Il est vivement recommandé de l\'exporter al préalable per una éventuelle utilisation future.',
	'DELETE_THEME' => 'Supprimer un thème',
	'DELETE_THEME_EXPLAIN' => 'Podètz suprimir un thème de la base de données. De plus, si vous y êtes autorisé, vous pouvez suprimir lo thème del système de fichièrs. Notez que l\'opération est irréversible. Lo thème est donc supprimé definitivament. Il est vivement recommandé de l\'exporter al préalable per una éventuelle utilisation future.',
	'DETAILS' => 'Détails',
	'DIMENSIONS_EXPLAIN' => 'Seleccionatz oui per prendre en compte les paramètres largeur/hauteur.',

	'EDIT_DETAILS_IMAGESET' => 'Modifier les informations del pack d\'images',
	'EDIT_DETAILS_IMAGESET_EXPLAIN' => 'Podètz éditer certaines informations del pack d\'images coma son nom, etc.',
	'EDIT_DETAILS_STYLE' => 'Modifier un estil',
	'EDIT_DETAILS_STYLE_EXPLAIN' => 'En modifiant lo formulaire ci-dessous, vous pouvez modificar un estil existant. Podètz modificar la combinaison template/pack d\'images. Podètz définir un estil per défaut.',
	'EDIT_DETAILS_TEMPLATE' => 'Editer les paramètres del template',
	'EDIT_DETAILS_TEMPLATE_EXPLAIN' => 'Podètz modificar les paramètres particuliers del template, coma son nom per exemple. Podètz également causir de modificar lo mode de sauvegarde del template de la base données al fichièr de sauvegarde e vice-versa. Cette possibilité dépend de vòstre configuration de PHP e del CHMOD del repertòri de vòstre template.',
	'EDIT_DETAILS_THEME' => 'Editer les paramètres del thème',
	'EDIT_DETAILS_THEME_EXPLAIN' => 'Podètz modificar les paramètres particuliers del thème, coma son nom per exemple. Podètz également causir de modificar lo mode de sauvegarde del template de la base données al fichièr de sauvegarde e vice-versa. Cette possibilité dépend de vòstre configuration de PHP e del CHMOD del repertòri de vòstre thème.',
	'EDIT_IMAGESET' => 'Editer un pack d\'images',
	'EDIT_IMAGESET_EXPLAIN' => 'Podètz modificar les images qui composent lo pack d\'images. Podètz également spécifier les dimensions d\'affichage d\'aquestes images. Si vous spécifiez aqueste paramètre, vous risquez de perturber l\'affichage de certains navigateurs, si vous ne les spécifiez pas, vous baissez quelque peu la taille d\'enregistrement dins la base de données.',
	'EDIT_TEMPLATE' => 'Editer un template',
	'EDIT_TEMPLATE_EXPLAIN' => 'Ici vous pouvez éditer vòstre template directement. Attention, aquestes modifications sont permanentes e irréversibles una fois validées. Si PHP peut modificar les fichièrs templates directement dins vòstre repertòri, les modifications seront automatiquement répercutées sur les fichièrs concernés. Si PHP ne peut modificar les fichièrs, ils seront copiés dins la base de données e les changements ne pourront èsser effectués qu\'à partir de celle-ci. Faites attention quand vous éditez vòstre template, n\'oubliez pas de fermer correctement toutes les variables {XXXX} e tout aqueste qui y est rattaché.',
	'EDIT_TEMPLATE_STORED_DB' => 'Lo fichièr template n\'a pas pu èsser écrit, lo pack template a été stocké dins la base de données amb lo fichièr modifié.',
	'EDIT_THEME' => 'Editer lo thème',
	'EDIT_THEME_EXPLAIN' => 'Ici vous pouvez éditer lo thème seleccionat, changer les colors, les images, etc. Podètz basculer de l\'interface simplifiée ont vous pouvez causir dels colors basiques, etc. à una interface avancée "raw CSS". Lo mode raw vous permet de modificar dels paramètres coma les bordures, etc. Ne changez que les paramètres que vous souhaitez modificar e laissez lo reste void o indéfini.',
	'EDIT_THEME_STORED_DB' => 'La feuille de estil n\'a pas pu èsser écrite, elle a été sauvegardée dins la base de données amb les modifications apportées.',
	'EDIT_THEME_STORE_PARSED'  => 'Lo thème nécessite que sa feuille de estil soit analysée. Ceci n\'est possible que si elle est stockée dins la base de données.',
	'EXPORT' => 'Exporter',

	'FOREGROUND' => 'Avant plan',
	'FONT_COLOUR' => 'Couleur de la police',
	'FONT_FACE' => 'Police',
	'FONT_FACE_EXPLAIN' => 'Podètz spécifier plusieurs polices en les séparant per una virgule. Si un utilizaire n\'a pas la première police, la suivante serà utilisée.',
	'FONT_SIZE' => 'Taille',
	
	'GLOBAL_IMAGES' => 'Anóncias generalas',

	'HIDE_CSS' => 'Masquer lo code CSS',

	'IMAGE_WIDTH' => 'Largeur',
	'IMAGE_HEIGHT' => 'Hauteur',
	'IMAGE' => 'Image',
	'IMAGE_NAME' => 'Nom',
	'IMAGE_PARAMETER' => 'Paramètre',
	'IMAGE_VALUE' => 'Valeur',
	'IMAGESET_ADDED' => 'Lo pack d\'images a été ajouté al système de fichièrs.',
	'IMAGESET_ADDED_DB' => 'Lo pack d\'images a été ajouté à la base de données.',
	'IMAGESET_DELETED' => 'Lo pack d\'images a été supprimé.',
	'IMAGESET_DELETED_FS' => 'Lo pack d\'images a été supprimé de la base de données mas certains fichièrs peuvent subsister sul système.',
	'IMAGESET_DETAILS_UPDATED' => 'Les informations del pack d\'images ont été mises à jour.',
	'IMAGESET_ERR_ARCHIVE' => 'Seleccionatz una méthode d\'archivage.',
	'IMAGESET_ERR_COPY_LONG' => 'Lo copyright ne peut pas dépasser 60 caractères.',
	'IMAGESET_ERR_NAME_CHARS' => 'Lo nom del pack d\'images ne peut contenir que dels caractères alphanumériques, -, +, _ e espace.',
	'IMAGESET_ERR_NAME_EXIST' => 'Ce nom est déjà utilisé per un pack d\'images.',
	'IMAGESET_ERR_NAME_LONG' => 'Lo nom del pack d\'images ne peut pas dépasser 30 caractères.',
	'IMAGESET_ERR_NOT_IMAGESET' => 'L\'archive spécifiée ne contient pas de pack d\'images valide.',
	'IMAGESET_ERR_STYLE_NAME' => 'Debètz causir un nom per aqueste pack d\'images.',
	'IMAGESET_EXPORT' => 'Exporter lo pack d\'images',
	'IMAGESET_EXPORT_EXPLAIN' => 'Ici vous pouvez exporter un pack d\'images sous la forme d\'una archive. Cette archive contiendra tous les fichièrs nécessaires per l\'installation del pack d\'images sur un autre forum. Debètz causir entre descargar lo fichièr directement o lo placer dins un repertòri de sauvegarde per lo descargar ultérieurement o à partir d\'un FTP.',
	'IMAGESET_EXPORTED' => 'Lo pack d\'images a été exporté e stocké dins %s.',
	'IMAGESET_NAME' => 'Nom del pack d\'images',
	'IMAGESET_REFRESHED' => 'Lo pack d\'images a été rechargé.',
	'IMAGESET_UPDATED' => 'Lo pack d\'images a été mes à jour.',
	'ITALIC' => 'Italique',

	'IMG_CAT_BUTTONS' => 'Boutons',
	'IMG_CAT_CUSTOM' => 'Images personnalisées',
	'IMG_CAT_FOLDERS' => 'Icònas dels sujets',
	'IMG_CAT_FORUMS' => 'Icònas dels forums',
	'IMG_CAT_ICONS' => 'Icònas generalas',
	'IMG_CAT_LOGOS' => 'Logos',
	'IMG_CAT_POLLS' => 'Images dels sondages',
	'IMG_CAT_UI' => 'Eléments généraux de l\'interface',
	'IMG_CAT_USER' => 'Images supplémentaires',

	'IMG_SITE_LOGO' => 'Logo principal',
	'IMG_UPLOAD_BAR' => 'Barre de progression de transferiment',
	'IMG_POLL_LEFT' => 'Début de la barre de vote, côté gauche',
	'IMG_POLL_CENTER' => 'Centre de la barre de vote',
	'IMG_POLL_RIGHT' => 'Fin de la barre de vote, côté droit',
	'IMG_ICON_FRIEND' => 'Apondre coma amic',
	'IMG_ICON_FOE' => 'Apondre coma ignorat',

	'IMG_FORUM_LINK' => 'Lien de forum',
	'IMG_FORUM_READ' => 'Forum',
	'IMG_FORUM_READ_LOCKED' => 'Forum verrouillé',
	'IMG_FORUM_READ_SUBFORUM' => 'Sous-forum',
	'IMG_FORUM_UNREAD' => 'Nouveaux messatges',
	'IMG_FORUM_UNREAD_LOCKED' => 'Nouveaux messatges verrouillés',
	'IMG_FORUM_UNREAD_SUBFORUM' => 'Nouveaux messatges dins les sous-forums',
	'IMG_SUBFORUM_READ' => 'Légende per les sous-forums',
	'IMG_SUBFORUM_UNREAD' => 'Nouveaux messatges dins les sous-forums',
	
	'IMG_TOPIC_MOVED' => 'Sujet déplacé',
	
	'IMG_TOPIC_READ' => 'Sujets',
	'IMG_TOPIC_READ_MINE' => 'Mes sujets',
	'IMG_TOPIC_READ_HOT' => 'Sujets populaires',
	'IMG_TOPIC_READ_HOT_MINE' => 'Mes sujets populaires',
	'IMG_TOPIC_READ_LOCKED' => 'Sujets verrouillés',
	'IMG_TOPIC_READ_LOCKED_MINE' => 'Mes sujets verrouillés',

	'IMG_TOPIC_UNREAD' => 'Sujets amb nouveaux messatges',
	'IMG_TOPIC_UNREAD_MINE' => 'Mes sujets amb nouveaux messatges',
	'IMG_TOPIC_UNREAD_HOT' => 'Sujets populaires amb nouveaux messatges',
	'IMG_TOPIC_UNREAD_HOT_MINE' => 'Mes sujets populaires amb nouveaux messatges',
	'IMG_TOPIC_UNREAD_LOCKED' => 'Sujets verrouillés amb nouveaux messatges',
	'IMG_TOPIC_UNREAD_LOCKED_MINE' => 'Mes sujets verrouillés amb nouveaux messatges',

	'IMG_STICKY_READ' => 'Post-it',
	'IMG_STICKY_READ_MINE' => 'Mes Post-it',
	'IMG_STICKY_READ_LOCKED' => 'Post-it verrouillés',
	'IMG_STICKY_READ_LOCKED_MINE' => 'Mes Post-it verrouillés',
	'IMG_STICKY_UNREAD' => 'Post-it amb nouveaux messatges',
	'IMG_STICKY_UNREAD_MINE' => 'Mes Post-it amb nouveaux messatges',
	'IMG_STICKY_UNREAD_LOCKED' => 'Post-it verrouillés amb nouveaux messatges',
	'IMG_STICKY_UNREAD_LOCKED_MINE' => 'Mes Post-it verrouillés amb nouveaux messatges',

	'IMG_ANNOUNCE_READ' => 'Anóncia',
	'IMG_ANNOUNCE_READ_MINE' => 'Mes annonces',
	'IMG_ANNOUNCE_READ_LOCKED' => 'Anóncias verrouillées',
	'IMG_ANNOUNCE_READ_LOCKED_MINE' => 'Mes annonces verrouillées',
	'IMG_ANNOUNCE_UNREAD' => 'Anóncias amb nouveaux messatges',
	'IMG_ANNOUNCE_UNREAD_MINE' => 'Mes annonces amb nouveaux messatges',
	'IMG_ANNOUNCE_UNREAD_LOCKED' => 'Anóncias verrouillées',
	'IMG_ANNOUNCE_UNREAD_LOCKED_MINE' => 'Anóncias verrouillées amb nouveaux messatges',

	'IMG_GLOBAL_READ' => 'Anóncias generalas',
	'IMG_GLOBAL_READ_MINE' => 'Mes annonces generalas',
	'IMG_GLOBAL_READ_LOCKED' => 'Anóncias generalas verrouillées',
	'IMG_GLOBAL_READ_LOCKED_MINE' => 'Mes annonces generalas verrouillées',
	'IMG_GLOBAL_UNREAD' => 'Anóncias generalas amb nouveaux messatges',
	'IMG_GLOBAL_UNREAD_MINE' => 'Mes annonces generalas amb nouveaux messatges',
	'IMG_GLOBAL_UNREAD_LOCKED' => 'Anóncias generalas verrouillées amb nouveaux messatges',
	'IMG_GLOBAL_UNREAD_LOCKED_MINE' => 'Mes annonces generalas verrouillées amb nouveaux messatges',

	'IMG_PM_READ' => 'Message privé lu',
	'IMG_PM_UNREAD' => 'Message privé non lu',

	'IMG_ICON_BACK_TOP' => 'Haut de page',

	'IMG_ICON_CONTACT_AIM' => 'AIM',
	'IMG_ICON_CONTACT_EMAIL' => 'Enviar un e-mail',
	'IMG_ICON_CONTACT_ICQ' => 'ICQ',
	'IMG_ICON_CONTACT_JABBER' => 'Jabber',
	'IMG_ICON_CONTACT_MSNM' => 'MSN',
	'IMG_ICON_CONTACT_PM' => 'Enviar un messatge',
	'IMG_ICON_CONTACT_YAHOO' => 'YIM',
	'IMG_ICON_CONTACT_WWW' => 'Site internet',

	'IMG_ICON_POST_DELETE' => 'Supprimer lo messatge',
	'IMG_ICON_POST_EDIT' => 'Modifier lo messatge',
	'IMG_ICON_POST_INFO' => 'Afficher les infos del messatge',
	'IMG_ICON_POST_QUOTE' => 'Citer un messatge',
	'IMG_ICON_POST_REPORT' => 'Rapporter un messatge',
	'IMG_ICON_POST_TARGET' => 'Mini-messatge',
	'IMG_ICON_POST_TARGET_UNREAD' => 'Nouveau mini-messatge',


	'IMG_ICON_TOPIC_ATTACH' => 'Fichier junt',
	'IMG_ICON_TOPIC_LATEST' => 'Dernier messatge',
	'IMG_ICON_TOPIC_NEWEST' => 'Dernier messatge non lu',
	'IMG_ICON_TOPIC_REPORTED' => 'Message amb rapport',
	'IMG_ICON_TOPIC_UNAPPROVED' => 'Message non validé',

	'IMG_ICON_USER_ONLINE' => 'Utilizaire en linha',
	'IMG_ICON_USER_OFFLINE' => 'Utilizaire hors linha',
	'IMG_ICON_USER_PROFILE' => 'Montrer lo perfil',
	'IMG_ICON_USER_SEARCH' => 'Rechercher dels messatges',
	'IMG_ICON_USER_WARN' => 'Avertir un utilizaire',
	'IMG_BUTTON_CALENDAR_NEW'	=> 'Eveniment novèl',
	'IMG_BUTTON_CALENDAR_DAY'	=> 'Visualizacion del jorn',
	'IMG_BUTTON_CALENDAR_WEEK'	=> 'Visualizacion de la setmana',
	'IMG_BUTTON_CALENDAR_MONTH'	=> 'Visualizacion del mes',

	'IMG_BUTTON_PM_FORWARD' => 'Transmettre un messatge privé',
	'IMG_BUTTON_PM_NEW' => 'Nouveau messatge privé',
	'IMG_BUTTON_PM_REPLY' => 'Répondre à un messatge privé',
	'IMG_BUTTON_TOPIC_LOCKED' => 'Sujet verrouillé',
	'IMG_BUTTON_TOPIC_NEW' => 'Nouveau tèma',
	'IMG_BUTTON_TOPIC_REPLY' => 'Répondre à un tèma',

	'IMG_USER_ICON1' => 'Image utilizaire 1',
	'IMG_USER_ICON2' => 'Image utilizaire 2',
	'IMG_USER_ICON3' => 'Image utilizaire 3',
	'IMG_USER_ICON4' => 'Image utilizaire 4',
	'IMG_USER_ICON5' => 'Image utilizaire 5',
	'IMG_USER_ICON6' => 'Image utilizaire 6',
	'IMG_USER_ICON7' => 'Image utilizaire 7',
	'IMG_USER_ICON8' => 'Image utilizaire 8',
	'IMG_USER_ICON9' => 'Image utilizaire 9',
	'IMG_USER_ICON10' => 'Image utilizaire 10',

	'INCLUDE_DIMENSIONS' => 'Définir les dimensions',
	'INCLUDE_IMAGESET' => 'Apondre un pack d\'images',
	'INCLUDE_TEMPLATE' => 'Apondre un template',
	'INCLUDE_THEME' => 'Apondre un thème',
	'INSTALL_IMAGESET' => 'Installer un pack d\'images',
	'INSTALL_IMAGESET_EXPLAIN' => 'Ici vous pouvez installer vòstre pack d\'images. Podètz modificar certaines informations si vous lo désirez o utiliser les paramètres per défaut.',
	'INSTALL_STYLE' => 'Installer un Style',
	'INSTALL_STYLE_EXPLAIN' => 'Ici vous pouvez installer un nouveau estil e les éléments qui en dépendent éventuellement. Si vous avez déjà installé certains éléments, ils seràn pas écrasés. Certains estils nécessitent que certains éléments soient déjà installés. Si vous essayez d\'installer aqueste type de estil e que les éléments ne sont pas présents vous en serez averti.',
	'INSTALL_TEMPLATE' => 'Installer un Template',
	'INSTALL_TEMPLATE_EXPLAIN' => 'Ici vous pouvez installer un nouveau template. Selon la configuration de vòstre servidor, vous aurez plus o mens d\'opcions à vòstre disposition.',
	'INSTALL_THEME' => 'Installer un Theme',
	'INSTALL_THEME_EXPLAIN' => 'Ici vous pouvez installer vòstre thème. Podètz modificar les éléments que vous souhaitez o botar les paramètres per défaut.',
	'INSTALLED_IMAGESET' => 'Packs d\'images installés',
	'INSTALLED_STYLE' => 'Estils installés',
	'INSTALLED_TEMPLATE' => 'Templates installés',
	'INSTALLED_THEME' => 'Thèmes installés',

	'LINE_SPACING' => 'Ligne de séparation',
	'LOCALISED_IMAGES' => 'Emplacement dels images',

	'NO_CLASS' => 'Classe inexistante dins la feuille de estil.',
	'NO_IMAGESET' => 'Pack d\'images inexistant.',
	'NO_IMAGE' => 'Aucune image.',
	'NO_IMAGE_ERROR' => 'Impossible de trouver les images sul système.',
	'NO_STYLE' => 'Style inexistant.',
	'NO_TEMPLATE' => 'Template inexistant.',
	'NO_THEME' => 'Thème inexistant.',
	'NO_UNINSTALLED_IMAGESET' => 'Aucun pack d\'images à installer',
	'NO_UNINSTALLED_STYLE' => 'Aucun estil à installer',
	'NO_UNINSTALLED_TEMPLATE' => 'Aucun template à installer',
	'NO_UNINSTALLED_THEME' => 'Aucun thème à installer',
	'NO_UNIT' => 'Aucun',

	'ONLY_IMAGESET' => 'C\'est lo seul pack d\'images installé, vous ne pouvez pas lo suprimir.',
	'ONLY_STYLE' => 'C\'est lo seul estil installé, vous ne pouvez pas lo suprimir.',
	'ONLY_TEMPLATE' => 'C\'est lo seul template installé, vous ne pouvez pas lo suprimir.',
	'ONLY_THEME' => 'C\'est lo seul thème installé, vous ne pouvez pas lo suprimir.',
	'OPTIONAL_BASIS' => 'Options',

	'REFRESH' => 'Rafraîchir',
	'REPEAT_NO' => 'Pas de répétition',
	'REPEAT_X' => 'Répétition horizontale',
	'REPEAT_Y' => 'Répétition verticale',
	'REPEAT_ALL' => 'Répéter dins les deux directions',
	'REPLACE_IMAGESET' => 'Remplacer lo pack d\'images per',
	'REPLACE_IMAGESET_EXPLAIN' => 'Ce pack d\'images remplacera celui que vous avez supprimé dins les thèmes l\'utilisant.',
	'REPLACE_STYLE' => 'Remplacer lo estil per',
	'REPLACE_STYLE_EXPLAIN' => 'Ce estil remplacera celui qui a été supprimé per les membres l\'utilisant.',
	'REPLACE_TEMPLATE' => 'Remplacer lo template per',
	'REPLACE_TEMPLATE_EXPLAIN' => 'Ce template remplacera celui que vous avez supprimé dins les estils l\'utilisant.',
	'REPLACE_THEME' => 'Remplacer lo thème per',
	'REPLACE_THEME_EXPLAIN' => 'Ce thème remplacera celui que vous avez supprimé dins les estils l\'utilisant.',
	'REQUIRES_IMAGESET' => 'Ce estil nécessite que lo pack d\'images %s soit installé.',
	'REQUIRES_TEMPLATE' => 'Ce estil nécessite que lo template %s soit installé.',
	'REQUIRES_THEME' => 'Ce estil nécessite que lo thème %s soit installé.',

	'SELECT_IMAGE' => 'Seleccionar l\'image',
	'SELECT_TEMPLATE' => 'Seleccionar lo template',
	'SELECT_THEME' => 'Seleccionar un thème',
	'SELECTED_IMAGE' => 'Image sélectionnée',
	'SELECTED_IMAGESET' => 'Pack d\'images seleccionat',
	'SELECTED_TEMPLATE' => 'Template seleccionat',
	'SELECTED_TEMPLATE_FILE' => 'Fichier del template seleccionat',
	'SELECTED_THEME' => 'Thème seleccionat',
	'SELECTED_THEME_FILE' => 'Thème seleccionat',
	'STORE_DATABASE' => 'Base de données',
	'STORE_FILESYSTEM' => 'Fichièrs système',
	'STYLE_ACTIVATE' => 'Activar lo estil',
	'STYLE_ACTIVE' => 'Style actif',
	'STYLE_ADDED' => 'Style ajouté amb succès.',
	'STYLE_DEACTIVATE' => 'Desactivar lo estil',
	'STYLE_DEFAULT' => 'Botar aqueste estil per défaut',
	'STYLE_DELETED' => 'Style supprimé amb succès.',
	'STYLE_DETAILS_UPDATED' => 'Style modifié amb succès.',
	'STYLE_ERR_ARCHIVE' => 'Seleccionatz lo type d\'archivage souhaité.',
	'STYLE_ERR_COPY_LONG' => 'Lo copyright ne peut dépasser 60 caractères.',
	'STYLE_ERR_MORE_ELEMENTS' => 'Debètz seleccionar al mens un élément del estil.',
	'STYLE_ERR_NAME_CHARS' => 'Lo  nom del estil ne peut contenir que dels caractères alphanumériques, -, +, _ e espace.',
	'STYLE_ERR_NAME_EXIST' => 'Un estil porte déjà aqueste nom.',
	'STYLE_ERR_NAME_LONG' => 'Lo nom del estil ne peut pas dépasser 30 caractères.',
	'STYLE_ERR_NO_IDS' => 'Debètz seleccionar un template, un thème e un pack d\'images per aqueste estil.',
	'STYLE_ERR_NOT_STYLE' => 'Lo fichièr importé o exporté ne contient pas d\'archive de estil valide.',
	'STYLE_ERR_STYLE_NAME' => 'Debètz donner un nom à aqueste estil.',
	'STYLE_EXPORT' => 'Exporter un Style',
	'STYLE_EXPORT_EXPLAIN' => 'Ici vous pouvez exporter un estil sous la forme d\'una archive. Un estil peut ne pas contenir tous les éléments mas doit en comporter al mens un. Par exemple si vous avez créé un nouveau thème e un pack d\'images per un template utilisé couramment vous pouvez simplement exporter lo thème e lo pack d\'images sans exporter lo template. Podètz causir entre descargar lo fichièr directement o lo placer dins vòstre repertòri de stockage per lo descargar plus tard per FTP.',
	'STYLE_EXPORTED' => 'Style exporté amb succès e sauvegardé dins %s.',
	'STYLE_IMAGESET' => 'Pack d\'images',
	'STYLE_NAME' => 'Nom del estil',
	'STYLE_TEMPLATE' => 'Template',
	'STYLE_THEME' => 'Thème',
	'STYLE_USED_BY' => 'Utilisé per',

	'TEMPLATE_ADDED' => 'Template ajouté e stocké dins les fichièrs systèmes.',
	'TEMPLATE_ADDED_DB' => 'Template ajouté e stocké dins la base de données.',
	'TEMPLATE_CACHE' => 'Cache del template',
	'TEMPLATE_CACHE_EXPLAIN' => 'Par défaut phpBB met en cache una version compilée de ses templates. Ceci réduit lo temps de chargement sul servidor à chaque chargement de page e réduit ainsi lo temps de chargement de celle-ci. Podètz veire ici l\'état actuel del cache per chaque fichièr e suprimir lo cache per chaque fichièr o bien lo vider entièrement.',
	'TEMPLATE_CACHE_CLEARED' => 'Cache del template vidé amb succès.',
	'TEMPLATE_CACHE_EMPTY' => 'Pas de cache template.',
	'TEMPLATE_DELETED' => 'Template supprimé amb succès.',
	'TEMPLATE_DELETED_FS' => 'Lo template a été supprimé de la base de données mas certains fichièrs peuvent toutefois èsser encore présents sul système.',
	'TEMPLATE_DETAILS_UPDATED' => 'Lo template a été mes à jour amb succès.',
	'TEMPLATE_EDITOR' => 'Editeur de template HTML',
	'TEMPLATE_EDITOR_HEIGHT' => 'Taille de l\'éditeur de template',
	'TEMPLATE_ERR_ARCHIVE' => 'Seleccionatz una méthode d\'archivage.',
	'TEMPLATE_ERR_CACHE_READ' => 'Lo repertòri del cache utilisé per sauvegarder les caches dels templates ne peut pas èsser ouvert.',
	'TEMPLATE_ERR_COPY_LONG' => 'Lo copyright ne peut pas dépasser 60 caractères.',
	'TEMPLATE_ERR_NAME_CHARS' => 'Lo nom del template ne peut comporter que dels caractères alphanumériques, -, +, _ e espace.',
	'TEMPLATE_ERR_NAME_EXIST' => 'Un template del même nom existe déjà.',
	'TEMPLATE_ERR_NAME_LONG' => 'Lo nom del template ne peut excéder 30 caractères.',
	'TEMPLATE_ERR_NOT_TEMPLATE' => 'L\'archive que vous avez sélectionnée ne contient pas de template valide.',
	'TEMPLATE_ERR_STYLE_NAME' => 'Debètz causir un nom per aqueste template.',
	'TEMPLATE_EXPORT' => 'Exporter les templates',
	'TEMPLATE_EXPORT_EXPLAIN' => 'Ici, vous pouvez exporter un template sous la forme d\'una archive. L\'archive contiendra tous les fichièrs nécessaires per installer lo template sur un autre forum. Podètz causir entre descargar lo fichièr directement o lo placer dins vòstre repertòri de stockage per lo descargar plus tard per FTP.',
	'TEMPLATE_EXPORTED' => 'Templates exportés amb succès e stockés dins %s.',
	'TEMPLATE_FILE' => 'Fichièrs del template',
	'TEMPLATE_FILE_UPDATED' => 'Fichièrs del template modifiés amb succès.',
	'TEMPLATE_LOCATION' => 'Sauvegarder les templates vers',
	'TEMPLATE_LOCATION_EXPLAIN' => 'Les images sont sauvegardées dins les fichièrs systèmes.',
	'TEMPLATE_NAME' => 'Nom del template',
	'TEMPLATE_REFRESHED' => 'Lo template a été rafraîchi.',

	'THEME_ADDED' => 'Nouveau thème ajouté amb succès.',
	'THEME_ADDED_DB' => 'Nouveau thème ajouté amb succès dins la base de données.',
	'THEME_CLASS_ADDED' => 'Classe personnalisée ajoutée amb succès.',
	'THEME_DELETED' => 'Thème supprimé amb succès.',
	'THEME_DELETED_FS' => 'Thème supprimé amb succès de la base de données mas dels fichièrs peuvent encore subsister sul système.',
	'THEME_DETAILS_UPDATED' => 'Eléments del thème mes à jour amb succès.',
	'THEME_EDITOR' => 'Editeur de feuille CSS',
	'THEME_EDITOR_HEIGHT' => 'Taille de l\'éditeur de thème',
	'THEME_ERR_ARCHIVE' => 'Seleccionatz una méthode d\'archivage.',
	'THEME_ERR_CLASS_CHARS' => 'Seuls les caractères alphanumériques ainsi que .,:, - e # sont acceptés per les noms de class.',
	'THEME_ERR_COPY_LONG' => 'Lo copyright ne peut dépasser 60 caractères.',
	'THEME_ERR_NAME_CHARS' => 'Lo nom de thème ne peut contenir que dels caractères alphanumériques, -, +, _ e espace.',
	'THEME_ERR_NAME_EXIST' => 'Un thème del même nom existe déjà.',
	'THEME_ERR_NAME_LONG' => 'Lo nom del thème ne peut excéder 30 caractères.',
	'THEME_ERR_NOT_THEME' => 'L\'archive que vous avez seleccionat ne contient pas de thème valide.',
	'THEME_ERR_REFRESH_FS' => 'Ce thème est déjà présent sul système, nul besoin de lo rafraîchir.',
	'THEME_ERR_STYLE_NAME' => 'Debètz spécifier un nom per aqueste thème.',
	'THEME_EXPORT' => 'Exporter un thème',
	'THEME_EXPORT_EXPLAIN' => 'Ici vous pouvez exporter un thème sous la forme d\'una archive. Cette archive contiendra tous les fichièrs nécessaires per installer lo thème sur un autre forum. Podètz causir entre descargar lo fichièr directement o lo placer dins vòstre repertòri de stockage per lo descargar plus tard per FTP.',
	'THEME_EXPORTED' => 'Thème exporté amb succès e stocké dins %s.',
	'THEME_FILE' => 'Thème',
	'THEME_LOCATION' => 'Sauvegarder la feuille de estil dins',
	'THEME_LOCATION_EXPLAIN' => 'Les images sont toujours sauvegardées sul système.',
	'THEME_NAME' => 'Nom del thème',
	'THEME_REFRESHED' => 'Thème rafraîchi amb succès.',
	'THEME_UPDATED' => 'Classe mise à jour amb succès.',

	'UNDERLINE' => 'Souligné',
	'UNINSTALLED_IMAGESET' => 'Packs d\'images non installés',
	'UNINSTALLED_STYLE' => 'Estils non installés',
	'UNINSTALLED_TEMPLATE' => 'Templates non installés',
	'UNINSTALLED_THEME' => 'Thèmes non installés',
	'UNSET' => 'Non definit',

));

 ?>