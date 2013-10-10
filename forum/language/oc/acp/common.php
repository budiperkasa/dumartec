<?php
/** 
*
* acp common [Occitan]
*
* @package language
* @version $Id: common.php,v 1.120 2007/10/04 15:07:24 acydburn Exp $
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

// Common
$lang = array_merge($lang, array(
	'ACP_ADMINISTRATORS'		=> 'Administrators',
	'ACP_ADMIN_LOGS'			=> 'Jornal d\'administracion',
	'ACP_ADMIN_ROLES'			=> 'Modèls d\'administracion',
	'ACP_ATTACHMENTS'			=> 'Fichièrs junts',
	'ACP_ATTACHMENT_SETTINGS'	=> 'Paramètres dels fichièrs junts',
	'ACP_AUTH_SETTINGS'			=> 'Identification',
	'ACP_AUTOMATION'			=> 'Automatic',
	'ACP_AVATAR_SETTINGS'		=> 'Paramètres dels avatars',

	'ACP_BACKUP'				=> 'Salvagardar',
	'ACP_BAN'					=> 'Fòrabandiment',
	'ACP_BAN_EMAILS'			=> 'Fòrabandiment d\'e-mails',
	'ACP_BAN_IPS'				=> 'Fòrabandiment d\'IP',
	'ACP_BAN_USERNAMES'			=> 'Fòrabandiment d\'utilizaires',
	'ACP_BBCODES'				=> 'BBCodes',
	'ACP_BOARD_CONFIGURATION'	=> 'Configuracion generala',
	'ACP_BOARD_FEATURES'		=> 'Opcions del forum',
	'ACP_BOARD_MANAGEMENT'		=> 'Gestion del forum',
	'ACP_BOARD_SETTINGS'		=> 'Configuracion del forum',
	'ACP_BOTS'					=> 'Robòts',
	'ACP_CALENDAR'				=> 'Calendièr',
	'ACP_CALENDAR_SETTINGS'				=> 'Paramètres del calendièr',
	'ACP_CALENDAR_DELETE_EVENT_TYPE'	=> 'Suprimir un tipe d\'eveniment',
	'ACP_CALENDAR_ETYPES'				=> 'Gerir los tipes d\'eveniment de calendièr',

	'ACP_CAPTCHA'				=> 'CAPTCHA',

	'ACP_CAT_DATABASE'			=> 'Basa de donadas',
	'ACP_CAT_DOT_MODS'			=> '.Mods',
	'ACP_CAT_FORUMS'			=> 'Forums',
	'ACP_CAT_GENERAL'			=> 'General',
	'ACP_CAT_MAINTENANCE'		=> 'Mantenença',
	'ACP_CAT_PERMISSIONS'		=> 'Permissions',
	'ACP_CAT_POSTING'			=> 'Messatges',
	'ACP_CAT_STYLES'			=> 'Estils',
	'ACP_CAT_SYSTEM'			=> 'Sistèma',
	'ACP_CAT_USERGROUP'			=> 'Utilizaires e grops',
	'ACP_CAT_USERS'				=> 'Utilizaires',
	'ACP_CLIENT_COMMUNICATION'	=> 'Communicacion',
	'ACP_COOKIE_SETTINGS'		=> 'Paramètres dels cookies',
	'ACP_CRITICAL_LOGS'			=> 'Jornal de las errors',
	'ACP_CUSTOM_PROFILE_FIELDS'	=> 'Camps de perfil personalizats',
	
	'ACP_DATABASE'				=> 'Gestion de la basa de donadas',
	'ACP_DISALLOW'				=> 'Fòrabandit',
	'ACP_DISALLOW_USERNAMES'	=> 'Fòrabandir de noms d\'utilizaires',
	
	'ACP_EMAIL_SETTINGS'		=> 'Paramètres dels e-mails',
	'ACP_EXTENSION_GROUPS'		=> 'Gerir los grops d\'extensions',
	
	'ACP_FORUM_BASED_PERMISSIONS'	=> 'Permissions basicas dels forums',
	'ACP_FORUM_LOGS'				=> 'Jornals del forum',
	'ACP_FORUM_MANAGEMENT'			=> 'Gestion del forum',
	'ACP_FORUM_MODERATORS'			=> 'Moderaires dels forums',
	'ACP_FORUM_PERMISSIONS'			=> 'Permissions dels forums',
	'ACP_FORUM_ROLES'				=> 'Modèls de forum',

	'ACP_GENERAL_CONFIGURATION'		=> 'Configuracion generala',
	'ACP_GENERAL_TASKS'				=> 'Prètzfaches generales',
	'ACP_GLOBAL_MODERATORS'			=> 'Moderaires globaux',
	'ACP_GLOBAL_PERMISSIONS'		=> 'Permissions globales',
	'ACP_GROUPS'					=> 'Grops',
	'ACP_GROUPS_FORUM_PERMISSIONS'	=> 'Permissions grops/forums',
	'ACP_GROUPS_MANAGE'				=> 'Gerir los grops',
	'ACP_GROUPS_MANAGEMENT'			=> 'Gestion dels grops',
	'ACP_GROUPS_PERMISSIONS'		=> 'Permissions dels grops',
	
	'ACP_ICONS'					=> 'Icònas de tèma',
	'ACP_ICONS_SMILIES'			=> 'Icònas e smileys de tèma',
	'ACP_IMAGESETS'				=> 'Paquets d\'images',
	'ACP_INACTIVE_USERS'		=> 'Utilizaires inactius',
	'ACP_INDEX'					=> 'Indèx de l\'administracion',
	
	'ACP_JABBER_SETTINGS'		=> 'Paramètres Jabber',
	
	'ACP_LANGUAGE'				=> 'Gestion de las lengas',
	'ACP_LANGUAGE_PACKS'		=> 'Lengas',
	'ACP_LOAD_SETTINGS'			=> 'Paramètres de carga',
	'ACP_LOGGING'				=> 'Se connecta',
	
	'ACP_MAIN'					=> 'Indèx de l\'administracion',
	'ACP_MANAGE_EXTENSIONS'		=> 'Gerir las extensions',
	'ACP_MANAGE_FORUMS'			=> 'Gerir los forums',
	'ACP_MANAGE_RANKS'			=> 'Gerir los rangs',
	'ACP_MANAGE_REASONS'		=> 'Gerir los rapòrts/rasons',
	'ACP_MANAGE_USERS'			=> 'Gerir los utilizaires',
	'ACP_MASS_EMAIL'			=> 'Corrièl en massa',
	'ACP_MESSAGES'				=> 'Messatges',
	'ACP_MESSAGE_SETTINGS'		=> 'Messatjariá privée',
	'ACP_MODULE_MANAGEMENT'		=> 'Gestion de moduls',
	'ACP_MOD_LOGS'				=> 'Jornal de moderacion',
	'ACP_MOD_ROLES'				=> 'Modèls de moderacion',
	
	'ACP_NO_ITEMS'				=> 'I a pas encara d\'element.',
	
	'ACP_ORPHAN_ATTACHMENTS'	=> 'Fichièrs junts orfanèls',
	
	'ACP_PERMISSIONS'			=> 'Permissions',
	'ACP_PERMISSION_MASKS'		=> '!!Masques de permission',
	'ACP_PERMISSION_ROLES'		=> 'Modèls de permission',
	'ACP_PERMISSION_TRACE'		=> 'Traça de permission',
	'ACP_PHP_INFO'				=> 'Entresenhas PHP',
	'ACP_POST_SETTINGS'			=> 'Paramètres dels messatges',
	'ACP_PRUNE_FORUMS'			=> 'Dessaurar los forums',
	'ACP_PRUNE_USERS'			=> 'Dessaurar d\'utilizaires',
	'ACP_PRUNING'				=> 'Dessauratge',
	
	'ACP_QUICK_ACCESS'			=> 'Accès rapid',
	
	'ACP_RANKS'					=> 'Rangs',
	'ACP_REASONS'				=> 'Rapòrts/rasons',
	'ACP_REGISTER_SETTINGS'		=> 'Paramètres de las inscriptions',

	'ACP_RESTORE'				=> 'Restaurar',

	'ACP_SEARCH'				=> 'Recèrca',
	'ACP_SEARCH_INDEX'			=> 'Indèx de recèrca',
	'ACP_SEARCH_SETTINGS'		=> 'Paramètres de recèrca',

	'ACP_SECURITY_SETTINGS'		=> 'Paramètres de seguretat',
	'ACP_SERVER_CONFIGURATION'	=> 'Configuracion del servidor',
	'ACP_SERVER_SETTINGS'		=> 'Paramètres del servidor',
	'ACP_SIGNATURE_SETTINGS'	=> 'Paramètres de signatura',
	'ACP_SMILIES'				=> 'Smileys',
	'ACP_STYLE_COMPONENTS'		=> 'Compausants dels estils',
	'ACP_STYLE_MANAGEMENT'		=> 'Gestion d\'estil',
	'ACP_STYLES'				=> 'Estils',
	
	'ACP_TEMPLATES'				=> 'Modèls',
	'ACP_THEMES'				=> 'Tèmas',
	
	'ACP_UPDATE'					=> 'Mesa a jorn',
	'ACP_USERS_FORUM_PERMISSIONS'	=> 'Permissions utilizaires/forums',
	'ACP_USERS_LOGS'				=> 'Jornal d\'utilizaire',
	'ACP_USERS_PERMISSIONS'			=> 'Permissions dels utilizaires',
	'ACP_USER_ATTACH'				=> 'Fichièrs junts',
	'ACP_USER_AVATAR'				=> 'Avatar',
	'ACP_USER_FEEDBACK'				=> 'Ficha de seguit',
	'ACP_USER_GROUPS'				=> 'Grops',
	'ACP_USER_MANAGEMENT'			=> 'Gestion utilizaire',
	'ACP_USER_OVERVIEW'				=> 'Vista d\'ensem',
	'ACP_USER_PERM'					=> 'Permissions',
	'ACP_USER_PREFS'				=> 'Preferéncias',
	'ACP_USER_PROFILE'				=> 'Perfil',
	'ACP_USER_RANK'					=> 'Rang',
	'ACP_USER_ROLES'				=> 'Modèls d\'utilizaire',
	'ACP_USER_SECURITY'				=> 'Seguretat utilizaire',
	'ACP_USER_SIG'					=> 'Signatura',

	'ACP_VC_SETTINGS'					=> 'Paramètres de confirmacion visuala',
	'ACP_VC_CAPTCHA_DISPLAY'			=> 'Apercebut CAPTCHA',
	'ACP_VERSION_CHECK'					=> 'Verificar las mesas a jorn',
	'ACP_VIEW_ADMIN_PERMISSIONS'		=> 'Permissions d\'administracion',
	'ACP_VIEW_FORUM_MOD_PERMISSIONS'	=> 'Permissions de moderacion dels forums',
	'ACP_VIEW_FORUM_PERMISSIONS'		=> 'Permissions basicas dels forums',
	'ACP_VIEW_GLOBAL_MOD_PERMISSIONS'	=> 'Permissions dels moderaires globals',
	'ACP_VIEW_USER_PERMISSIONS'			=> 'Permissions basicas dels utilizaires',
	
	'ACP_WORDS'					=> 'Censura',

	'ACTION'				=> 'Accion',
	'ACTIONS'				=> 'Accions',
	'ACTIVATE'				=> 'Activar',
	'ADD'					=> 'Apondre',
	'ADMIN'					=> 'Administracion',
	'ADMIN_INDEX'			=> 'Indèx de l\'administracion',
	'ADMIN_PANEL'			=> 'Panèl d\'administracion',
	
	'ADM_LOGOUT'			=> 'Desconnexion de l\'ACP',
	'ADM_LOGGED_OUT'		=> 'Vos sètz desconnectat amb succès del panèl de contraròtle d\'administracion',

	'BACK'					=> 'Tornar',

	'COLOUR_SWATCH'			=> 'Paleta de colors',
	'CONFIG_UPDATED'		=> 'Configuration mesa a jorn.',

	'DEACTIVATE'				=> 'Desactivar',
	'DIRECTORY_DOES_NOT_EXIST'	=> 'Lo camin indicat "%s" existís pas.',
	'DIRECTORY_NOT_DIR'			=> 'Lo camin indicat "%s" es pas un repertòri.',
	'DIRECTORY_NOT_WRITABLE'	=> 'Lo camin indicat "%s" es pas inscriptible.',
	'DISABLE'					=> 'Desactivar',
	'DOWNLOAD'					=> 'Descargar',
	'DOWNLOAD_AS'				=> 'Descargar coma',
	'DOWNLOAD_STORE'			=> 'Descargar o estocar lo fichièr junt',
	'DOWNLOAD_STORE_EXPLAIN'	=> 'Podètz directament descargar lo fichièr junt o l\'enregistrar dins lo repertòri <samp>store/</samp>.',

	'EDIT'					=> 'Editar',
	'ENABLE'				=> 'Activar',
	'EXPORT_DOWNLOAD'		=> 'Descarga',
	'EXPORT_STORE'			=> 'Estocatge',

	'GENERAL_OPTIONS'		=> 'Opcions generalas',
	'GENERAL_SETTINGS'		=> 'Paramètres generals',
	'GLOBAL_MASK'			=> '!!Masque de permission globala',

	'INSTALL'				=> 'Installar',
	'IP'					=> 'Adreça IP',
	'IP_HOSTNAME'			=> 'Adreças IP o noms d\'òstes',

	'LOGGED_IN_AS'			=> 'Connectat coma :',
	'LOGIN_ADMIN'			=> 'Debètz èsser connectat per administrar lo forum.',
	'LOGIN_ADMIN_CONFIRM'	=> 'Vos debètz tornar connectar per administrar lo forum.',
	'LOGIN_ADMIN_SUCCESS'	=> 'Sètz identificat e vos anam redirigir cap al panèl d\'administracion.',
	'LOOK_UP_FORUM'			=> 'Seleccionar un forum',
	'LOOK_UP_FORUMS_EXPLAIN'=> 'Podètz seleccionar mai d\'un forum.',

	'MANAGE'				=> 'Gerir',
	'MENU_TOGGLE'			=> 'Amagar o suprimir lo menut lateral',
	'MOVE_DOWN'				=> 'Davalar',
	'MOVE_UP'				=> 'Montar',

	'NOTIFY'				=> 'Notificacion',
	'NO_ADMIN'				=> 'Sètz pas autorizat a administrar aqueste forum.',
	'NO_EMAILS_DEFINED'		=> 'Pas cap d\'adreça electronica valida indicada.',
	'NO_PASSWORD_SUPPLIED'	=> 'Debètz indicar vòstre mot de pas per accedir al panèl d\'administracion',	

	'OFF'					=> 'Desactivat',
	'ON'					=> 'Activat',

	'PARSE_BBCODE'						=> 'Autorizar los BBCodes',
	'PARSE_SMILIES'						=> 'Autorizar los smileys',
	'PARSE_URLS'						=> 'Autorizar los ligams',
	'PERMISSIONS_TRANSFERRED'			=> 'Permissions transferidas',
	'PERMISSIONS_TRANSFERRED_EXPLAIN'	=> 'Sètz a utilizar las permissions de %1$s. Podètz navigar sul forum amb sas permissions mas poiretz pas accedir al panèl d\'administracion per çò que las permissions d\'administracion se pòdon pas transferir. Podètz <a href="%2$s"><strong>reinicializar vòstras permissions</strong></a> tre que volètz.',
	'PIXEL'								=> 'px',	
	'PROCEED_TO_ACP'					=> '%sAnar al panèl d\'administracion%s',

	'REMIND'							=> 'Remembrar',
	'RESYNC'							=> 'Tornar sincronizar',
	'RETURN_TO'							=> 'Tornar cap a',

	'SELECT_ANONYMOUS'		=> 'Seleccionar l\'utilizaire convidat',
	'SELECT_OPTION'			=> 'Seleccionar una opcion',
	
	'SETTING_TOO_LOW'		=> 'La valor picada d\'aqueste paramètre “%1$s” es tròp bassa. La valor minimum autorizada es %2$d.',
	'SETTING_TOO_BIG'		=> 'La valor picada d\'aqueste paramètre “%1$s” es tròp bèla. La valor maximum autorizada es %2$d.',	
	'SETTING_TOO_LONG'		=> 'La valor picada d\'aqueste paramètre “%1$s” es tròp longa. La longor maximum autorizada es %2$d.',
	'SETTING_TOO_SHORT'		=> 'La valor picada d\'aqueste paramètre “%1$s” es pas pro longa. La longor minimum autorizada es %2$d.',

	'UCP'					=> 'Panèl de l\'utilizaire',
	'USERNAMES_EXPLAIN'		=> 'Indicatz un nom d\'utilizaire per linha',
	'USER_CONTROL_PANEL'	=> 'Panèl de l\'utilizaire',

	'WARNING'				=> 'Avertiment',
));

// PHP info
$lang = array_merge($lang, array(
	'ACP_PHP_INFO_EXPLAIN'   => 'Cette page contient dels détails sur la version installée de PHP. Elle comprend les moduls chargés, les variables existantes e les paramètres per défaut e peut èsser utile per analyser dels problèmes. Soyez attentifs car certains hébergeurs limitent l\'information affichée per dels rasons de seguretat. Il est recommandé de ne pas communiquer les informations de cette page, à mens qu\'un membre de l\'équipe ne les demande.',

	'NO_PHPINFO_AVAILABLE'   => 'Impossible d\'Suprimir les informations PHP. La fonction Phpinfo() a été désactivée per dels rasons de seguretat.',
));

// Logs
$lang = array_merge($lang, array(
	'ACP_ADMIN_LOGS_EXPLAIN'	=> 'Liste dels actions effectuées per les administrateurs. Podètz trier per nom, date, IP o per action. Si vous avez les permissions nécessaires vous pouvez aussi effacer individuellement les opérations o lo journal complet.',
	'ACP_CRITICAL_LOGS_EXPLAIN'	=> 'Liste dels actions effectuées per lo système. Ce journal liste les informations que vous pouvez utiliser per résoudre dels problèmes spécifiques, coma lo non-acheminement dels e-mails. Podètz trier per nom d\'utilizaire, date, IP o action. Si vous avez les permissions nécessaires vous pouvez aussi effacer individuellement les opérations o lo journal complet.',
	'ACP_MOD_LOGS_EXPLAIN'		=> 'Liste dels actions effectuées per les moderaires, sélectionnez un forum dins la liste ci-dessous. Podètz trier per nom d\'utilizaire, date, IP o action. Si vous avez les permissions nécessaires vous pouvez aussi effacer individuellement les opérations o lo journal complet.',
	'ACP_USERS_LOGS_EXPLAIN'	=> 'Liste dels actions effectuées per les utilizaires o sur les utilizaires.',
	'ALL_ENTRIES'				=> 'Toutes les entrées',

	'DISPLAY_LOG'	=> 'Affiche les entrées précédentes',

	'NO_ENTRIES'	=> 'Aucune entrée per la période indiquée',

	'SORT_IP'		=> 'Adreça IP',
	'SORT_DATE'		=> 'Data',
	'SORT_ACTION'	=> 'Accion enregistrada',
));

// Indèx page
$lang = array_merge($lang, array(
	'ADMIN_INTRO'				=> 'Merci d\'avoir choisi phpBB coma solution de forum. Aqueste écran vous donnera un rapide aperçu dels diverses statistiques de vòstre forum. Les ligams del volet de gauche vous permettront de contrôler tous les aspects de vòstre forum. Chaque page contiendra les instructions nécessaires concernant l\'utilisation dels outils.',
	'ADMIN_LOG'					=> 'Jornal dels actions dels administrateurs',
	'ADMIN_LOG_INDEX_EXPLAIN'	=> 'Ceci est un aperçu rapide dels cinq darrièras actions effectuées per les administrateurs. Une liste complète dels actions est disponible dins lo journal d\'administracion en cliquant directement sul lien ci-dessous.',
	'AVATAR_DIR_SIZE'			=> 'Taille dels avatars',

	'BOARD_STARTED'		=> 'Date de création del forum',
	'BOARD_VERSION'		=> 'Version del forum',

	'DATABASE_SERVER_INFO'	=> 'Serveur de basa de donadas',
	'DATABASE_SIZE'			=> 'Taille de la basa de donadas',

	'FILES_PER_DAY'		=> 'Moyenne journalière de fichièrs junts',
	'FORUM_STATS'		=> 'Statistiques del forum',

	'GZIP_COMPRESSION'	=> 'Compression GZip',

	'NOT_AVAILABLE'		=> 'Indisponible',
	'NUMBER_FILES'  	=> 'Nombre de fichièrs junts',
	'NUMBER_POSTS'  	=> 'Nombre de messatges',
	'NUMBER_TOPICS'   	=> 'Nombre de sujets',
	'NUMBER_USERS'   	=> 'Nombre d\'utilizaires',
	'NUMBER_ORPHAN'   	=> 'Nombre de fichièrs junts orphelins',

	'POSTS_PER_DAY'		=> 'Moyenne journalière de messatges',

	'PURGE_CACHE'			=> 'Vider lo cache',
	'PURGE_CACHE_CONFIRM'	=> 'Etes-vous sûr de vouloir vider lo cache ?',
	'PURGE_CACHE_EXPLAIN'	=> 'Vide tous les fichièrs del cache, cela inclut tous les fichièrs o requêtes dels templates mes en cache.',

	'RESET_DATE'					=> 'Réinitialiser la date de création del forum',
	'RESET_DATE_CONFIRM'			=> 'Etes-vous sûr de vouloir reinicializar la date de création del forum ?',
	'RESET_ONLINE'					=> 'Réinitialiser lo record dels utilizaires connectés',
	'RESET_ONLINE_CONFIRM'			=> 'Etes-vous sûr de vouloir reinicializar lo record dels utilizaires connectés ?',
	'RESYNC_POSTCOUNTS'				=> 'Synchroniser les compteurs de messatge d\'utilizaire',
	'RESYNC_POSTCOUNTS_EXPLAIN'		=> 'Seuls les messatges existants seront pris en compte. Les messatges délestés seràn pas pris en compte.',
	'RESYNC_POSTCOUNTS_CONFIRM'		=> 'Etes-vous sûr de vouloir resynchroniser les compteurs de messatge d\'utilizaire ?',
	'RESYNC_POST_MARKING'			=> 'Synchroniser les sujets pointés',
	'RESYNC_POST_MARKING_CONFIRM'	=> 'Etes-vous sûr de vouloir resynchroniser les sujets pointés ?',
	'RESYNC_POST_MARKING_EXPLAIN'	=> 'Décochez tous les sujets e cochez uniquement les sujets inactius depuis plus de 6 mois.',
	'RESYNC_STATS'					=> 'Synchroniser les statistiques',
	'RESYNC_STATS_CONFIRM'			=> 'Etes-vous sûr de vouloir resynchroniser les statistiques ?',
	'RESYNC_STATS_EXPLAIN'			=> 'Recalculer lo nombre total de messatges, sujets, utilizaires e fichièrs junts.',
	'RUN'							=> 'Exécuter maintenant',

	'STATISTIC'					=> 'Statistique',
	'STATISTIC_RESYNC_OPTIONS'	=> 'Synchroniser o reinicializar les statistiques',

	'TOPICS_PER_DAY'	=> 'Moyenne journalière de sujets',

	'UPLOAD_DIR_SIZE'	=> 'Taille dels fichièrs junts',
	'USERS_PER_DAY'		=> 'Moyenne journalière d\'inscriptions',

	'VALUE'					=> 'Valeur',
	'VIEW_ADMIN_LOG'		=> 'Voir lo journal d\'administracion',
	'VIEW_INACTIVE_USERS'	=> 'Voir les utilizaires inactius',

	'WELCOME_PHPBB'			=> 'Bienvenue dins phpBB',
));

// Inactive Users
$lang = array_merge($lang, array(
	'INACTIVE_DATE'					=> 'Date d\'inactivité',
	'INACTIVE_REASON'				=> 'Raison',
	'INACTIVE_REASON_MANUAL'		=> 'Compte désactivé per un administrateur',
	'INACTIVE_REASON_PROFILE'		=> 'Entresenhas del perfil mises à jour',
	'INACTIVE_REASON_REGISTER'		=> 'Nouveau compte',
	'INACTIVE_REASON_REMIND'		=> 'Réactivation forcée',
	'INACTIVE_REASON_UNKNOWN'		=> 'Inconnu',
	'INACTIVE_USERS'				=> 'Utilizaires inactius',
	'INACTIVE_USERS_EXPLAIN'		=> 'Ceci est una liste dels utilizaires nouvellement inscrits, mas encore inactius. Podètz activar, suprimir o contacter (en envoyant un e-mail) aquestes utilizaires si vous lo désirez.',
	'INACTIVE_USERS_EXPLAIN_INDEX'	=> 'Ceci est una liste dels 10 darrièras inscriptions inactives. Une liste complète dels utilizaires inactius est disponible en vous rendant dins lo menut approprié de l\'administracion o en cliquant directement sul lien ci-dessous.',

	'NO_INACTIVE_USERS'	=> 'Aucun utilizaire inactif',

	'SORT_INACTIVE'		=> 'Date',
	'SORT_LAST_VISIT'	=> 'Dernière visite',
	'SORT_REASON'		=> 'Raison',
	'SORT_REG_DATE'		=> 'Date d\'inscription',

	'USER_IS_INACTIVE'		=> 'L\'utilizaire est inactif',
));

// Log Entries
$lang = array_merge($lang, array(
	'LOG_ACL_ADD_USER_GLOBAL_U_'		=> '<strong>Ajout/modification dels permissions utilizaire</strong><br />» %s',
	'LOG_ACL_ADD_GROUP_GLOBAL_U_'		=> '<strong>Ajout/modification dels permissions utilizaire dels grops</strong><br />» %s',
	'LOG_ACL_ADD_USER_GLOBAL_M_'		=> '<strong>Ajout/modification dels permissions de modérateur global dels utilizaires</strong><br />» %s',
	'LOG_ACL_ADD_GROUP_GLOBAL_M_'		=> '<strong>Ajout/modification dels permissions de modérateur global dels grops</strong><br />» %s',
	'LOG_ACL_ADD_USER_GLOBAL_A_'		=> '<strong>Ajout/modification dels permissions d\'administracion dels utilizaires</strong><br />» %s',
	'LOG_ACL_ADD_GROUP_GLOBAL_A_'		=> '<strong>Ajout/modification dels permissions d\'administracion dels grops</strong><br />» %s',

	'LOG_ACL_ADD_ADMIN_GLOBAL_A_'		=> '<strong>Ajout/modification dels administrateurs</strong><br />» %s',
	'LOG_ACL_ADD_MOD_GLOBAL_M_'			=> '<strong>Ajout/modification dels moderaires globaux</strong><br />» %s',

	'LOG_ACL_ADD_USER_LOCAL_F_'			=> '<strong>Ajout/modification dels accès utilizaires als forums</strong> de %1$s<br />» %2$s',
	'LOG_ACL_ADD_USER_LOCAL_M_'			=> '<strong>Ajout/modification dels accès de moderacion als forums</strong> de %1$s<br />» %2$s',
	'LOG_ACL_ADD_GROUP_LOCAL_F_'		=> '<strong>Ajout/modification dels accès de grops als forums</strong> de %1$s<br />» %2$s',
	'LOG_ACL_ADD_GROUP_LOCAL_M_'		=> '<strong>Ajout/modification dels accès de moderacion als forums dels grops</strong> de %1$s<br />» %2$s',

	'LOG_ACL_ADD_MOD_LOCAL_M_'			=> '<strong>Ajout/modification dels moderaires</strong> de %1$s<br />» %2$s',
	'LOG_ACL_ADD_FORUM_LOCAL_F_'		=> '<strong>Ajout/modification dels permissions de forum</strong> de %1$s<br />» %2$s',

	'LOG_ACL_DEL_ADMIN_GLOBAL_A_'		=> '<strong>Suppression de l\'administrateur</strong><br />» %s',
	'LOG_ACL_DEL_MOD_GLOBAL_M_'			=> '<strong>Suppression d\'un modérateur global</strong><br />» %s',
	'LOG_ACL_DEL_MOD_LOCAL_M_'			=> '<strong>Suppression d\'un modérateur</strong> de %1$s<br />» %2$s',
	'LOG_ACL_DEL_FORUM_LOCAL_F_'		=> '<strong>Suppression dels permissions al forum dels grops/utilizaires</strong> de %1$s<br />» %2$s',

	'LOG_ACL_TRANSFER_PERMISSIONS'		=> '<strong>Transfert dels permissions de</strong><br />» %s',
	'LOG_ACL_RESTORE_PERMISSIONS'		=> '<strong>Restauration de vos permissions après l\'utilisation dels permissions de</strong><br />» %s',
	
	'LOG_ADMIN_AUTH_FAIL'		=> '<strong>Echec de connexion à l\'administracion</strong>',
	'LOG_ADMIN_AUTH_SUCCESS'	=> '<strong>Connexion réussie à l\'administracion</strong>',
	
	'LOG_ATTACHMENTS_DELETED'   => '<strong>Suppression de fichièrs junts d\'un utilizaire</strong><br />» %s',

	'LOG_ATTACH_EXT_ADD'		=> '<strong>Ajout/modification d\'extension de fichièr junt</strong><br />» %s',
	'LOG_ATTACH_EXT_DEL'		=> '<strong>Suppression d\'extension de fichièr junt</strong><br />» %s',
	'LOG_ATTACH_EXT_UPDATE'		=> '<strong>Mise à jour d\'extension de fichièr junt</strong><br />» %s',
	'LOG_ATTACH_EXTGROUP_ADD'	=> '<strong>Ajout d\'un grop d\'extensions de fichièr junt</strong><br />» %s',
	'LOG_ATTACH_EXTGROUP_EDIT'	=> '<strong>Modification d\'un grop d\'extensions de fichièr junt</strong><br />» %s',
	'LOG_ATTACH_EXTGROUP_DEL'	=> '<strong>Suppression d\'un grop d\'extensions de fichièr junt</strong><br />» %s',
	'LOG_ATTACH_FILEUPLOAD'		=> '<strong>Transfert d\'un fichièr junt orphelin al messatge</strong><br />» ID %1$d - %2$s',
	'LOG_ATTACH_ORPHAN_DEL'		=> '<strong>Suppression d\'un fichièr junt orphelin</strong><br />» %s',

	'LOG_BAN_EXCLUDE_USER'	=> '<strong>Débannissement d\'un utilizaire</strong> per la rason suivante: "<em>%1$s</em>"<br />» %2$s',
	'LOG_BAN_EXCLUDE_IP'	=> '<strong>Débannissement d\'adresse IP</strong> per la rason suivante: "<em>%1$s</em>"<br />» %2$s',
	'LOG_BAN_EXCLUDE_EMAIL' => '<strong>Débannissement d\'e-mail</strong> per la rason "<em>%1$s</em>"<br />» %2$s',
	'LOG_BAN_USER'			=> '<strong>Bannissement d\'utilizaire</strong> per la rason "<em>%1$s</em>"<br />» %2$s',
	'LOG_BAN_IP'			=> '<strong>Bannissement d\'una adresse IP</strong> per la rason "<em>%1$s</em>"<br />» %2$s',
	'LOG_BAN_EMAIL'			=> '<strong>Bannissement d\'un e-mail</strong> per la rason "<em>%1$s</em>"<br />» %2$s',
	'LOG_UNBAN_USER'		=> '<strong>Débannissement d\'un utilizaire</strong><br />» %s',
	'LOG_UNBAN_IP'			=> '<strong>Débannissement d\'una adresse IP</strong><br />» %s',
	'LOG_UNBAN_EMAIL'		=> '<strong>Débannissement d\'un e-mail</strong><br />» %s',

	'LOG_BBCODE_ADD'		=> '<strong>Ajout d\'un nouveau BBCode</strong><br />» %s',
	'LOG_BBCODE_EDIT'		=> '<strong>Modification d\'un BBCode</strong><br />» %s',
	'LOG_BBCODE_DELETE'		=> '<strong>Suppression d\'un BBCode</strong><br />» %s',

	'LOG_BOT_ADDED'		=> '<strong>Ajout d\'un nouveau robot</strong><br />» %s',
	'LOG_BOT_DELETE'	=> '<strong>Suppression d\'un robot</strong><br />» %s',
	'LOG_BOT_UPDATED'	=> '<strong>Mise à jour d\'un robot</strong><br />» %s',

	'LOG_CLEAR_ADMIN'		=> '<strong>Jornal d\'administracion effacé</strong>',
	'LOG_CLEAR_CRITICAL'	=> '<strong>Jornal dels errors effacé</strong>',
	'LOG_CLEAR_MOD'			=> '<strong>Jornal de moderacion effacé</strong>',
	'LOG_CLEAR_USER'		=> '<strong>Jornal utilizaire effacé</strong><br />» %s',
	'LOG_CLEAR_USERS'		=> '<strong>Jornals dels utilizaires effacés</strong>',

	'LOG_CONFIG_ATTACH'			=> '<strong>Les paramètres dels fichièrs junts ont été modifiés</strong>',
	'LOG_CONFIG_AUTH'			=> '<strong>Les paramètres d\'authentification ont été modifiés</strong>',
	'LOG_CONFIG_AVATAR'			=> '<strong>Les paramètres d\'avatar ont été modifiés</strong>',
	'LOG_CONFIG_COOKIE'			=> '<strong>Les paramètres de cookies ont été modifiés</strong>',
	'LOG_CONFIG_EMAIL'			=> '<strong>Les paramètres d\'e-mails ont été modifiés</strong>',
	'LOG_CONFIG_FEATURES'		=> '<strong>Les opcions del forum ont été modifiées</strong>',
	'LOG_CONFIG_LOAD'			=> '<strong>Les paramètres de charge ont été modifiés</strong>',
	'LOG_CONFIG_MESSAGE'		=> '<strong>Les paramètres de la messagerie privée ont été modifiés</strong>',
	'LOG_CONFIG_POST'			=> '<strong>Les paramètres de messatges ont été modifiés</strong>',
	'LOG_CONFIG_REGISTRATION'	=> '<strong>Les paramètres d\'inscriptions ont été modifiés</strong>',
	'LOG_CONFIG_SEARCH'			=> '<strong>Les paramètres de recèrca ont été modifiés</strong>',
	'LOG_CONFIG_SECURITY'		=> '<strong>Les paramètres de seguretat ont été modifiés</strong>',
	'LOG_CONFIG_SERVER'			=> '<strong>Les paramètres del servidor ont été modifiés</strong>',
	'LOG_CONFIG_SETTINGS'		=> '<strong>La configuration generala del forum a été modifiée</strong>',
	'LOG_CONFIG_SIGNATURE'		=> '<strong>Les paramètres de signatura ont été modifiés</strong>',
	'LOG_CONFIG_VISUAL'			=> '<strong>Les paramètres de la confirmacion visuala ont été modifiés</strong>',

	'LOG_APPROVE_TOPIC'			=> '<strong>Approbation d\'un tèma</strong><br />» %s',
	'LOG_BUMP_TOPIC'			=> '<strong>Sujet remonté per un utilizaire</strong><br />» %s',
	'LOG_DELETE_POST'			=> '<strong>Suppression d\'un messatge</strong><br />» %s',
	'LOG_DELETE_TOPIC'			=> '<strong>Suppression d\'un tèma</strong><br />» %s',
	'LOG_FORK'					=> '<strong>Copie d\'un tèma</strong><br />» de %s',
	'LOG_LOCK'					=> '<strong>Verrouillage d\'un tèma</strong><br />» %s',
	'LOG_LOCK_POST'				=> '<strong>Verrouillage d\'un messatge</strong><br />» %s',
	'LOG_MERGE'					=> '<strong>Fusion de messatges</strong> dins lo tèma <br />»%s',
	'LOG_MOVE'					=> '<strong>Déplacement d\'un tèma</strong><br />» de %s',
	'LOG_POST_APPROVED'			=> '<strong>Approbation d\'un messatge</strong><br />» %s',
	'LOG_POST_DISAPPROVED'		=> '<strong>Refus d\'un messatge "%1$s" per la rason suivante</strong><br />» %2$s',
	'LOG_POST_EDITED'			=> '<strong>Edition d\'un messatge "%1$s" écrit per</strong><br />» %2$s',
	'LOG_REPORT_CLOSED'			=> '<strong>Clôture d\'un rapport/rason</strong><br />» %s',
	'LOG_REPORT_DELETED'		=> '<strong>Suppression d\'un rapport/rason</strong><br />» %s',
	'LOG_SPLIT_DESTINATION'		=> '<strong>Déplacement de messatges divisés</strong><br />» vers %s',
	'LOG_SPLIT_SOURCE'			=> '<strong>Division de messatges</strong><br />» depuis %s',

	'LOG_TOPIC_DELETED'			=> '<strong>Sujet supprimé</strong><br />» %s',
	'LOG_TOPIC_APPROVED'		=> '<strong>Sujet approuvé</strong><br />» %s',
	'LOG_TOPIC_DISAPPROVED'		=> '<strong>Sujet refusé "%1$s" per la rason suivante</strong><br />%2$s',
	'LOG_TOPIC_RESYNC'			=> '<strong>Compteurs de messatge synchronisés</strong><br />» %s',
	'LOG_TOPIC_TYPE_CHANGED'	=> '<strong>Modification del type de tèma</strong><br />» %s',
	'LOG_UNLOCK'				=> '<strong>Sujet déverrouillé</strong><br />» %s',
	'LOG_UNLOCK_POST'			=> '<strong>Message déverrouillé</strong><br />» %s',

	'LOG_DISALLOW_ADD'		=> '<strong>Ajout d\'un nom d\'utilizaire interdit</strong><br />» %s',
	'LOG_DISALLOW_DELETE'	=> '<strong>Suppression d\'un nom d\'utilizaire interdit</strong>',

	'LOG_DB_BACKUP'			=> '<strong>Sauvegarde de la basa de donadas</strong>',
	'LOG_DB_DELETE'			=> '<strong>Suppression d\'una sauvegarde de la basa de donadas</strong>',
	'LOG_DB_RESTORE'		=> '<strong>Restauration d\'una basa de donadas</strong>',

	'LOG_DOWNLOAD_EXCLUDE_IP'	=> '<strong>Adreça IP/Nom d\'òste exclu de la liste dels téléchargements</strong><br />» %s',
	'LOG_DOWNLOAD_IP'			=> '<strong>Ajout d\'una adresse IP/nom d\'òste à la liste dels téléchargements</strong><br />» %s',
	'LOG_DOWNLOAD_REMOVE_IP'	=> '<strong>Suppression d\'una adresse IP/nom d\'òste de la liste dels téléchargements</strong><br />» %s',

	'LOG_ERROR_JABBER'		=> '<strong>Erreur de compte Jabber</strong><br />» %s',
	'LOG_ERROR_EMAIL'		=> '<strong>Erreur d\'e-mail</strong><br />» %s',
	
	'LOG_FORUM_ADD'							=> '<strong>Création d\'un forum novèl</strong><br />» %s',
	'LOG_FORUM_DEL_FORUM'					=> '<strong>Suppression d\'un forum</strong><br />» %s',
	'LOG_FORUM_DEL_FORUMS'					=> '<strong>Suppression d\'un forum e de ses sous-forums</strong><br />» %s',
	'LOG_FORUM_DEL_MOVE_FORUMS'				=> '<strong>Suppression d\'un forum e sous-forums déplacés</strong> vers %1$s<br />» %2$s',
	'LOG_FORUM_DEL_MOVE_POSTS'				=> '<strong>Suppression d\'un forum e messatges déplacés</strong> vers %1$s<br />» %2$s',
	'LOG_FORUM_DEL_MOVE_POSTS_FORUMS'		=> '<strong>Suppression d\'un forum e ses sous-forums, messatges déplacés</strong> vers %1$s<br />» %2$s',
	'LOG_FORUM_DEL_MOVE_POSTS_MOVE_FORUMS'	=> '<strong>Suppression d\'un forum, déplacement dels messatges</strong> vers %1$s <strong>e de ses sous-forums</strong> vers %2$s<br />» %3$s',
	'LOG_FORUM_DEL_POSTS'					=> '<strong>Suppression d\'un forum e de ses messatges</strong><br />» %s',
	'LOG_FORUM_DEL_POSTS_FORUMS'			=> '<strong>Suppression d\'un forum, de ses messatges e de ses sous-forums</strong><br />» %s',
	'LOG_FORUM_DEL_POSTS_MOVE_FORUMS'		=> '<strong>Suppression d\'un forum e de ses messatges, sous-forums déplacés</strong> vers %1$s<br />» %2$s',
	'LOG_FORUM_EDIT'						=> '<strong>Modification d\'un forum</strong><br />» %s',
	'LOG_FORUM_MOVE_DOWN'					=> '<strong>Déplacement d\'un forum</strong> %1$s <strong>en dessous de</strong> %2$s',
	'LOG_FORUM_MOVE_UP'						=> '<strong>Déplacement d\'un forum</strong> %1$s <strong>al dessus de</strong> %2$s',
	'LOG_FORUM_SYNC'						=> '<strong>Resincronizacion d\'un forum</strong><br />» %s',

	'LOG_GROUP_CREATED'		=> '<strong>Création d\'un nouveau grop</strong><br />» %s',
	'LOG_GROUP_DEFAULTS'	=> '<strong>Groupe per défaut per lo membre</strong><br />» %s',
	'LOG_GROUP_DELETE'		=> '<strong>Suppression d\'un grop</strong><br />» %s',
	'LOG_GROUP_DEMOTED'		=> '<strong>Rétrogradation d\'un chef dins lo grop</strong> %1$s<br />» %2$s',
	'LOG_GROUP_PROMOTED'	=> '<strong>Promotion d\'un membre en chef de grop</strong> %1$s<br />» %2$s',
	'LOG_GROUP_REMOVE'		=> '<strong>Suppression de membre d\'un grop</strong> %1$s<br />» %2$s',
	'LOG_GROUP_UPDATED'		=> '<strong>Mise à jour dels informations d\'un grop</strong><br />» %s',
	'LOG_MODS_ADDED'		=> '<strong>Ajout d\'un nouveau chef dins lo grop</strong> %1$s<br />» %2$s',
	'LOG_USERS_APPROVED'	=> '<strong>Utilizaires approuvés dins lo grop</strong> %1$s<br />» %2$s',
	'LOG_USERS_ADDED'		=> '<strong>Ajout de nouveau membre al grop</strong> %1$s<br />» %2$s',

	'LOG_IMAGESET_ADD_DB'			=> '<strong>Ajout d\'un pack d\'images dins la basa de donadas</strong><br />» %s',
	'LOG_IMAGESET_ADD_FS'			=> '<strong>Ajout d\'un pack d\'images sul système de fichièrs</strong><br />» %s',
	'LOG_IMAGESET_DELETE'			=> '<strong>Suppression d\'un pack d\'images/b><br />» %s',
	'LOG_IMAGESET_EDIT_DETAILS'		=> '<strong>Edition dels informations d\'un pack d\'images</strong><br />» %s',
	'LOG_IMAGESET_EDIT'				=> '<strong>Edition d\'un pack d\'images</strong><br />» %s',
	'LOG_IMAGESET_EXPORT'			=> '<strong>Export d\'un pack d\'images</strong><br />» %s',
	'LOG_IMAGESET_LANG_MISSING'		=> '<strong>Traduction manquante "%2$s" per lo pack d\'images</strong><br />» %1$s',
	'LOG_IMAGESET_LANG_REFRESHED'	=> '<strong>Rafraîchissement de la traduction "%2$s" d\'un pack d\'images</strong><br />» %1$s',
	'LOG_IMAGESET_REFRESHED'		=> '<strong>Rafraîchissement d\'un pack d\'images</strong><br />» %s',

	'LOG_INACTIVE_ACTIVATE'	=> '<strong>Activation d\'utilizaires inactius</strong><br />» %s',
	'LOG_INACTIVE_DELETE'	=> '<strong>Suppression d\'utilizaires inactius</strong><br />» %s',
	'LOG_INACTIVE_REMIND'	=> '<strong>Envoi d\'un rappel per e-mail als utilizaires inactius</strong><br />» %s',
	'LOG_INSTALL_CONVERTED'	=> '<strong>Conversion depuis %1$s vers phpBB %2$s</strong>',
	'LOG_INSTALL_INSTALLED'	=> '<strong>Installation de phpBB %s</strong>',

	'LOG_IP_BROWSER_FORWARDED_CHECK'	=> '<strong>La vérification de la sesilha IP/navigateur/X_FORWARDED_FOR a échouée</strong><br />»L\'adresse IP de l\'utilizaire "<em>%1$s</em>" a été comparée amb la sesilha IP "<em>%2$s</em>", la chaîne del navigateur de l\'utilizaire "<em>%3$s</em>" a été comparée amb la chaîne de la sesilha "<em>%4$s</em>" del navigateur e la chaîne X_FORWARDED_FOR de l\'utilizaire "<em>%5$s</em>" a été comparée amb la chaîne X_FORWARDED_FOR de la sesilha "<em>%6$s</em>".',

	'LOG_JAB_CHANGED'			=> '<strong>Modification d\'un compte Jabber</strong>',
	'LOG_JAB_PASSCHG'			=> '<strong>Modification de mot de pas del compte Jabber</strong>',
	'LOG_JAB_REGISTER'			=> '<strong>Enregistrement d\'un compte Jabber</strong>',
	'LOG_JAB_SETTINGS_CHANGED'	=> '<strong>Modification dels paramètres del compte Jabber</strong>',

	'LOG_LANGUAGE_PACK_DELETED'		=> '<strong>Suppression d\'una langue</strong><br />» %s',
	'LOG_LANGUAGE_PACK_INSTALLED'	=> '<strong>Installation d\'una langue</strong><br />» %s',
	'LOG_LANGUAGE_PACK_UPDATED'		=> '<strong>Mise à jour dels informations d\'una langue</strong><br />» %s',
	'LOG_LANGUAGE_FILE_REPLACED'	=> '<strong>Remplacement d\'un fichièr de langue</strong><br />» %s',
	'LOG_LANGUAGE_FILE_SUBMITTED'	=> '<strong>Envoi e stockage d\'un fichièr de langue</strong><br />» %s',

	'LOG_MASS_EMAIL'		=> '<strong>Envoi d\'un e-mail de masse</strong><br />» %s',

	'LOG_MCP_CHANGE_POSTER'	=> '<strong>Modification de l\'auteur del tèma "%1$s"</strong><br />» de %2$s en %3$s',

	'LOG_MODULE_DISABLE'	=> '<strong>Désactivation d\'un module</strong><br />» %s',
	'LOG_MODULE_ENABLE'		=> '<strong>Activation d\'un module</strong><br />» %s',
	'LOG_MODULE_MOVE_DOWN'	=> '<strong>Déplacement d\'un module</strong><br />» %1$s al dessous de %2$s',
	'LOG_MODULE_MOVE_UP'	=> '<strong>Déplacement d\'un module</strong><br />» %1$s al dessus de %2$s',
	'LOG_MODULE_REMOVED'	=> '<strong>Suppression d\'un module</strong><br />» %s',
	'LOG_MODULE_ADD'		=> '<strong>Ajout d\'un module</strong><br />» %s',
	'LOG_MODULE_EDIT'		=> '<strong>Modification d\'un module</strong><br />» %s',

	'LOG_A_ROLE_ADD'		=> '<strong>Ajout d\'un modèle d\'administracion</strong><br />» %s',
	'LOG_A_ROLE_EDIT'		=> '<strong>Modification d\'un modèle d\'administracion</strong><br />» %s',
	'LOG_A_ROLE_REMOVED'	=> '<strong>Suppression d\'un modèle d\'administracion</strong><br />» %s',
	'LOG_F_ROLE_ADD'		=> '<strong>Ajout d\'un modèle de forum</strong><br />» %s',
	'LOG_F_ROLE_EDIT'		=> '<strong>Modification d\'un modèle de forum</strong><br />» %s',
	'LOG_F_ROLE_REMOVED'	=> '<strong>Suppression d\'un modèle de forum</strong><br />» %s',
	'LOG_M_ROLE_ADD'		=> '<strong>Ajout d\'un modèle de moderacion</strong><br />» %s',
	'LOG_M_ROLE_EDIT'		=> '<strong>Modification d\'un modèle de moderacion</strong><br />» %s',
	'LOG_M_ROLE_REMOVED'	=> '<strong>Suppression d\'un modèle de moderacion</strong><br />» %s',
	'LOG_U_ROLE_ADD'		=> '<strong>Ajout d\'un modèle d\'utilizaire</strong><br />» %s',
	'LOG_U_ROLE_EDIT'		=> '<strong>Modification d\'un modèle d\'utilizaire</strong><br />» %s',
	'LOG_U_ROLE_REMOVED'	=> '<strong>Suppression d\'un modèle d\'utilizaire</strong><br />» %s',

	'LOG_PROFILE_FIELD_ACTIVATE'	=> '<strong>Activation d\'un champ de perfil</strong><br />» %s',
	'LOG_PROFILE_FIELD_CREATE'		=> '<strong>Ajout d\'un champ de perfil</strong><br />» %s',
	'LOG_PROFILE_FIELD_DEACTIVATE'	=> '<strong>Désactivation d\'un champ de perfil</strong><br />» %s',
	'LOG_PROFILE_FIELD_EDIT'		=> '<strong>Modification d\'un champ de perfil</strong><br />» %s',
	'LOG_PROFILE_FIELD_REMOVED'		=> '<strong>Suppression d\'un champ de perfil</strong><br />» %s',

	'LOG_PRUNE'					=> '<strong>Déléstage d\'un forum</strong><br />» %s',
	'LOG_AUTO_PRUNE'			=> '<strong>Auto-déléstage d\'un forum</strong><br />» %s',
	'LOG_PRUNE_USER_DEAC'		=> '<strong>Désactivation de l\'utilizaire</strong><br />» %s',
	'LOG_PRUNE_USER_DEL_DEL'	=> '<strong>Déléstage d\'utilizaires e suppression de lors messatges</strong><br />» %s',
	'LOG_PRUNE_USER_DEL_ANON'	=> '<strong>Déléstage d\'utilizaires e conservation de lors messatges</strong><br />» %s',

	'LOG_PURGE_CACHE'			=> '<strong>Vidage del cache</strong>',

	'LOG_RANK_ADDED'		=> '<strong>Ajout d\'un nouveau rang</strong><br />» %s',
	'LOG_RANK_REMOVED'		=> '<strong>Suppression d\'un rang</strong><br />» %s',
	'LOG_RANK_UPDATED'		=> '<strong>Mis à jour d\'un rang</strong><br />» %s',

	'LOG_REASON_ADDED'		=> '<strong>Ajout d\'un rapport/rason</strong><br />» %s',
	'LOG_REASON_REMOVED'	=> '<strong>Suppression d\'un rapport/rason</strong><br />» %s',
	'LOG_REASON_UPDATED'	=> '<strong>Mise à jour d\'un rapport/rason</strong><br />» %s',

	'LOG_REFERER_INVALID'		=> '<strong>Validacion de referent pas capitada</strong><br />» Lo referent èra “<em>%1$s</em>”. La requèsta es estada regetada e la sesilha tuada.',
	'LOG_RESET_DATE'			=> '<strong>Reinicializacion de la date de création del forum</strong>',
	'LOG_RESET_ONLINE'			=> '<strong>Reinicializacion del record dels utilizaires connectés</strong>',
	'LOG_RESYNC_POSTCOUNTS'		=> '<strong>Sincronizacion dels compteurs de messatge d\'utilizaire</strong>',
	'LOG_RESYNC_POST_MARKING'	=> '<strong>Sincronizacion dels sujets pointés</strong>',
	'LOG_RESYNC_STATS'			=> '<strong>Sincronizacion dels statistiques de messatge, tèma e utilizaire</strong>',

	'LOG_SEARCH_INDEX_CREATED'	=> '<strong>Création de l\'indèx de recèrca per</strong><br />» %s',
	'LOG_SEARCH_INDEX_REMOVED'	=> '<strong>Suppression de l\'indèx de recèrca per</strong><br />» %s',
	'LOG_STYLE_ADD'				=> '<strong>Ajout d\'un nouveau estil</strong><br />» %s',
	'LOG_STYLE_DELETE'			=> '<strong>Suppression d\'un estil</strong><br />» %s',
	'LOG_STYLE_EDIT_DETAILS'	=> '<strong>Modification dels informations d\'un estil</strong><br />» %s',
	'LOG_STYLE_EXPORT'			=> '<strong>Export d\'un estil</strong><br />» %s',

	'LOG_TEMPLATE_ADD_DB'			=> '<strong>Ajout d\'un pack de template à la basa de donadas</strong><br />» %s',
	'LOG_TEMPLATE_ADD_FS'			=> '<strong>Ajout d\'un pack de template al système de fichièr</strong><br />» %s',
	'LOG_TEMPLATE_CACHE_CLEARED'	=> '<strong>Suppression del cache dels fichièrs d\'un template <em>%1$s</em></strong><br />» %2$s',
	'LOG_TEMPLATE_DELETE'			=> '<strong>Suppression d\'un pack de template</strong><br />» %s',
	'LOG_TEMPLATE_EDIT'				=> '<strong>Modification d\'un pack de template <em>%1$s</em></strong><br />» %2$s',
	'LOG_TEMPLATE_EDIT_DETAILS'		=> '<strong>Modification dels informations d\'un pack de template</strong><br />» %s',
	'LOG_TEMPLATE_EXPORT'			=> '<strong>Export d\'un pack de template</strong><br />» %s',
	'LOG_TEMPLATE_REFRESHED'		=> '<strong>Rafraichissement d\'un pack de template</strong><br />» %s',

	'LOG_THEME_ADD_DB'			=> '<strong>Ajout d\'un nouveau thème à la basa de donadas</strong><br />» %s',
	'LOG_THEME_ADD_FS'			=> '<strong>Ajout d\'un nouveau thème al système de fichièr</strong><br />» %s',
	'LOG_THEME_DELETE'			=> '<strong>Suppression d\'un thème</strong><br />» %s',
	'LOG_THEME_EDIT_DETAILS'	=> '<strong>Modification dels informations d\'un thème</strong><br />» %s',
	'LOG_THEME_EDIT'			=> '<strong>Modification d\'un thème <em>%1$s</em></strong>',
	'LOG_THEME_EDIT_FILE'		=> '<strong>Modification d\'un thème <em>%1$s</em></strong><br />» modification d\'un fichièr <em>%2$s</em>',
	'LOG_THEME_EXPORT'			=> '<strong>Export d\'un thème</strong><br />» %s',
	'LOG_THEME_REFRESHED'		=> '<strong>Rafraichissement d\'un thème</strong><br />» %s',

	'LOG_UPDATE_DATABASE'	=> '<strong>Mise à jour de la basa de donadas de la version %1$s à la version %2$s</strong>',
	'LOG_UPDATE_PHPBB'		=> '<strong>Mise à jour de phpBB de la version %1$s à la version %2$s</strong>',

	'LOG_USER_ACTIVE'		=> '<strong>Activation de l\'utilizaire</strong><br />» %s',
	'LOG_USER_BAN_USER'		=> '<strong>Bannissement d\'utilizaire via la gestion d\'utilizaires</strong> per la rason "<em>%1$s</em>"<br />» %2$s',
	'LOG_USER_BAN_IP'		=> '<strong>Bannissement d\'adresse IP via la gestion d\'utilizaires</strong> per la rason "<em>%1$s</em>"<br />» %2$s',
	'LOG_USER_BAN_EMAIL'	=> '<strong>Bannissement d\'e-mail via la gestion d\'utilizaires</strong> per la rason "<em>%1$s</em>"<br />» %2$s',
	'LOG_USER_DELETED'		=> '<strong>Suppression de l\'utilizaire</strong><br />» %s',
	'LOG_USER_DEL_ATTACH'	=> '<strong>Suppression de tous les fichièrs junts de l\'utilizaire</strong><br />» %s',
	'LOG_USER_DEL_AVATAR'	=> '<strong>Suppression de l\'avatar de l\'utilizaire</strong><br />» %s',
	'LOG_USER_DEL_POSTS'	=> '<strong>Suppression dels messatges de l\'utilizaire</strong><br />» %s',
	'LOG_USER_DEL_SIG'		=> '<strong>Suppression de la signatura de l\'utilizaire</strong><br />» %s',
	'LOG_USER_INACTIVE'		=> '<strong>Désactivation de l\'utilizaire</strong><br />» %s',
	'LOG_USER_MOVE_POSTS'	=> '<strong>Déplacement dels messatges de </strong><br />» "%1$s" vers lo forum "%2$s"',
	'LOG_USER_NEW_PASSWORD'	=> '<strong>Modification del mot de pas de l\'utilizaire</strong><br />» %s',
	'LOG_USER_REACTIVATE'	=> '<strong>Réactivation forcée del compte de l\'utilizaire</strong><br />» %s',
	'LOG_USER_UPDATE_EMAIL'	=> '<strong>Modification de l\'e-mail de l\'utilizaire "%1$s" </strong><br />» de "%2$s" à "%3$s"',
	'LOG_USER_UPDATE_NAME'	=> '<strong>Modification d\'un nom d\'utilizaire</strong><br />» de "%1$s" à "%2$s"',
	'LOG_USER_USER_UPDATE'	=> '<strong>Mise à jour dels informations de l\'utilizaire</strong><br />» %s',

	'LOG_USER_ACTIVE_USER'		=> '<strong>Activation d\'un compte utilizaire</strong>',
	'LOG_USER_DEL_AVATAR_USER'	=> '<strong>Suppression de l\'avatar</strong>',
	'LOG_USER_DEL_SIG_USER'		=> '<strong>Suppression de la signatura</strong>',
	'LOG_USER_FEEDBACK'			=> '<strong>Ajout d\'una ficha de seguit per l\'utilizaire</strong><br />» %s',
	'LOG_USER_GENERAL'			=> '<strong>Ajout d\'una entrée:</strong><br />» %s',
	'LOG_USER_INACTIVE_USER'	=> '<strong>Désactivation d\'un compte utilizaire</strong>',
	'LOG_USER_LOCK'				=> '<strong>Verrouillage per son auteur d\'un tèma</strong><br />» %s',
	'LOG_USER_MOVE_POSTS_USER'	=> '<strong>Déplacement de tous les messatges vers lo forum</strong> "%s"',
	'LOG_USER_REACTIVATE_USER'	=> '<strong>Réactivation forcée d\'un compte utilizaire</strong>',
	'LOG_USER_UNLOCK'			=> '<strong>Déverrouillage per son auteur d\'un tèma</strong><br />» %s',
	'LOG_USER_WARNING'			=> '<strong>Ajout d\'un avertiment per l\'utilizaire</strong><br />» %s',
	'LOG_USER_WARNING_BODY'		=> '<strong>Un avertiment a été établi per l\'utilizaire</strong><br />»%s',

	'LOG_USER_GROUP_CHANGE'			=> '<strong>Modification del grop per défaut de l\'utilizaire</strong><br />» %s',
	'LOG_USER_GROUP_DEMOTE'			=> '<strong>Rétrogradation del chef d\'un grop d\'utilizaires</strong><br />» %s',
	'LOG_USER_GROUP_JOIN'			=> '<strong>Adhésion à un grop de l\'utilizaire</strong><br />» %s',
	'LOG_USER_GROUP_JOIN_PENDING'	=> '<strong>Adhésion à un grop de l\'utilizaire e demande d\'aprovacion</strong><br />» %s',
	'LOG_USER_GROUP_RESIGN'			=> '<strong>Désinscription à un grop de l\'utilizaire</strong><br />» %s',

	'LOG_WORD_ADD'			=> '<strong>Ajout d\'un mot censuré</strong><br />» %s',
	'LOG_WORD_DELETE'		=> '<strong>Suppression d\'un mot censuré</strong><br />» %s',
	'LOG_WORD_EDIT'			=> '<strong>Edition d\'un mot censuré</strong><br />» %s',
));

 ?>
