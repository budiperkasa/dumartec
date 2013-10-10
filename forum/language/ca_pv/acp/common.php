<?php
/**
*
* acp common [Catalan (Valencian)]
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

// Common
$lang = array_merge($lang, array(
	'ACP_ADMINISTRATORS'		=> 'Administradors',
	'ACP_ADMIN_LOGS'			=> 'Registre d\'administradors',
	'ACP_ADMIN_ROLES'			=> 'Tipus d\'administradors',
	'ACP_ATTACHMENTS'			=> 'Fitxers adjunts',
	'ACP_ATTACHMENT_SETTINGS'	=> 'Paràmetres dels fitxers adjunts',
	'ACP_AUTH_SETTINGS'			=> 'Autenticació',
	'ACP_AUTOMATION'			=> 'Automatització',
	'ACP_AVATAR_SETTINGS'		=> 'Paràmetres dels avatars',

	'ACP_BACKUP'				=> 'Còpia de seguretat',
	'ACP_BAN'					=> 'Bandeig',
	'ACP_BAN_EMAILS'			=> 'Bendeja e-mails',
	'ACP_BAN_IPS'				=> 'Bandeja IPs',
	'ACP_BAN_USERNAMES'			=> 'Bandeja noms d\'usuari',
	'ACP_BBCODES'				=> 'BBCodes',
	'ACP_BOARD_CONFIGURATION'	=> 'Configuració del fòrum',
	'ACP_BOARD_FEATURES'		=> 'Característiques del fòrum',
	'ACP_BOARD_MANAGEMENT'		=> 'Gestió del fòrum',
	'ACP_BOARD_SETTINGS'		=> 'Paràmetres del fòrum',
	'ACP_BOTS'					=> 'Spiders/Robots',
	
	'ACP_CAPTCHA'				=> 'CAPTCHA',

	'ACP_CAT_DATABASE'			=> 'Base de dades',
	'ACP_CAT_DOT_MODS'			=> '.MODs',
	'ACP_CAT_FORUMS'			=> 'Fòrums',
	'ACP_CAT_GENERAL'			=> 'General',
	'ACP_CAT_MAINTENANCE'		=> 'Manteniment',
	'ACP_CAT_PERMISSIONS'		=> 'Permisos',
	'ACP_CAT_POSTING'			=> 'Publicació',
	'ACP_CAT_STYLES'			=> 'Estils',
	'ACP_CAT_SYSTEM'			=> 'Sistema',
	'ACP_CAT_USERGROUP'			=> 'Usuaris i grups',
	'ACP_CAT_USERS'				=> 'Usuaris',
	'ACP_CLIENT_COMMUNICATION'	=> 'Clients de comunicació',
	'ACP_COOKIE_SETTINGS'		=> 'Paràmetres de les galetes',
	'ACP_CRITICAL_LOGS'			=> 'Registre d\'errors',
	'ACP_CUSTOM_PROFILE_FIELDS'	=> 'Camps personalitzats del perfil',
	
	'ACP_DATABASE'				=> 'Gestió de la base de dades',
	'ACP_DISALLOW'				=> 'Prohibeix',
	'ACP_DISALLOW_USERNAMES'	=> 'Noms d\'usuari prohibits',
	
	'ACP_EMAIL_SETTINGS'		=> 'Paràmetres d\'e-mail',
	'ACP_EXTENSION_GROUPS'		=> 'Gestió de grups d\'extensions',
	
	'ACP_FORUM_BASED_PERMISSIONS'	=> 'Permisos basats en el fòrum',
	'ACP_FORUM_LOGS'				=> 'Registres del fòrum',
	'ACP_FORUM_MANAGEMENT'			=> 'Gestió del fòrum',
	'ACP_FORUM_MODERATORS'			=> 'Moderadors del fòrum',
	'ACP_FORUM_PERMISSIONS'			=> 'Permisos del fòrum',
	'ACP_FORUM_ROLES'				=> 'Modes d\'accés',

	'ACP_GENERAL_CONFIGURATION'		=> 'Configuració general',
	'ACP_GENERAL_TASKS'				=> 'Tasques generals',
	'ACP_GLOBAL_MODERATORS'			=> 'Moderadors globals',
	'ACP_GLOBAL_PERMISSIONS'		=> 'Permisos globals',
	'ACP_GROUPS'					=> 'Grups',
	'ACP_GROUPS_FORUM_PERMISSIONS'	=> 'Permisos de grups del fòrum',
	'ACP_GROUPS_MANAGE'				=> 'Gestió de grups',
	'ACP_GROUPS_MANAGEMENT'			=> 'Gestió del grup',
	'ACP_GROUPS_PERMISSIONS'		=> 'Permisos dels grups',
	
	'ACP_ICONS'					=> 'Icones de tema',
	'ACP_ICONS_SMILIES'			=> 'Icones/carotes de tema',
	'ACP_IMAGESETS'				=> 'Paquets d\'imatges',
	'ACP_INACTIVE_USERS'		=> 'Usuaris inactius',
	'ACP_INDEX'					=> 'Índex del PCA',
	
	'ACP_JABBER_SETTINGS'		=> 'Paràmetres de Jabber',
	
	'ACP_LANGUAGE'				=> 'Gestió de la llengua',
	'ACP_LANGUAGE_PACKS'		=> 'Paquets de llengua',
	'ACP_LOAD_SETTINGS'			=> 'Carrega paràmetres',
	'ACP_LOGGING'				=> 'Entrada',
	
	'ACP_MAIN'					=> 'Índex del PCA',
	'ACP_MANAGE_EXTENSIONS'		=> 'Gestió d\'extensions',
	'ACP_MANAGE_FORUMS'			=> 'Gestió de fòrums',
	'ACP_MANAGE_RANKS'			=> 'Gestió rangs',
	'ACP_MANAGE_REASONS'		=> 'Manage report/denial reasons',
	'ACP_MANAGE_USERS'			=> 'Gestió usuaris',
	'ACP_MASS_EMAIL'			=> 'E-mail massiu',
	'ACP_MESSAGES'				=> 'Missatges',
	'ACP_MESSAGE_SETTINGS'		=> 'Paràmetres dels missatges privats',
	'ACP_MODULE_MANAGEMENT'		=> 'Gestió de mòduls',
	'ACP_MOD_LOGS'				=> 'Registre de moderació',
	'ACP_MOD_ROLES'				=> 'Tipus de moderador',

	'ACP_NO_ITEMS'				=> 'Encara no hi ha cap element.',
	
	'ACP_ORPHAN_ATTACHMENTS'	=> 'Fitxers adjunts orfes',
	
	'ACP_PERMISSIONS'			=> 'Permisos',
	'ACP_PERMISSION_MASKS'		=> 'Permission masks',
	'ACP_PERMISSION_ROLES'		=> 'Permission roles',
	'ACP_PERMISSION_TRACE'		=> 'Permission trace',
	'ACP_PHP_INFO'				=> 'Informació PHP',
	'ACP_POST_SETTINGS'			=> 'Paràmetres dels missatges',
	'ACP_PRUNE_FORUMS'			=> 'Neteja fòrums',
	'ACP_PRUNE_USERS'			=> 'Neteja usuaris',
	'ACP_PRUNING'				=> 'Neteja',
	
	'ACP_QUICK_ACCESS'			=> 'Accés ràpid',
	
	'ACP_RANKS'					=> 'Rangs',
	'ACP_REASONS'				=> 'Report/denial reasons',
	'ACP_REGISTER_SETTINGS'		=> 'Paràmetres de registre d\'usuaris',

	'ACP_RESTORE'				=> 'Restaura',

	'ACP_SEARCH'				=> 'Configuració de cerca',
	'ACP_SEARCH_INDEX'			=> 'Índex de cerca',
	'ACP_SEARCH_SETTINGS'		=> 'Paràmetres de cerca',

	'ACP_SECURITY_SETTINGS'		=> 'Paràmetres de seguretat',
	'ACP_SERVER_CONFIGURATION'	=> 'Configuració del servidor',
	'ACP_SERVER_SETTINGS'		=> 'Paràmetres del servidor',
	'ACP_SIGNATURE_SETTINGS'	=> 'Parèmetres de les signatures',
	'ACP_SMILIES'				=> 'Carotes',
	'ACP_STYLE_COMPONENTS'		=> 'Components de l\'estil',
	'ACP_STYLE_MANAGEMENT'		=> 'Gestió de l\'estil',
	'ACP_STYLES'				=> 'Estils',
	
	'ACP_TEMPLATES'				=> 'Plantilles',
	'ACP_THEMES'				=> 'Temes',
	
	'ACP_UPDATE'					=> 'Actualització',
	'ACP_USERS_FORUM_PERMISSIONS'	=> 'Permisos d\'usuaris',
	'ACP_USERS_LOGS'				=> 'Registre d\'usuaris',
	'ACP_USERS_PERMISSIONS'			=> 'Permisos d\'usuaris',
	'ACP_USER_ATTACH'				=> 'Fitxers adjunts',
	'ACP_USER_AVATAR'				=> 'Avatar',
	'ACP_USER_FEEDBACK'				=> 'Comentaris',
	'ACP_USER_GROUPS'				=> 'Grups',
	'ACP_USER_MANAGEMENT'			=> 'Gestió de l\'usuari',
	'ACP_USER_OVERVIEW'				=> 'Revisió',
	'ACP_USER_PERM'					=> 'Permisos',
	'ACP_USER_PREFS'				=> 'Preferències',
	'ACP_USER_PROFILE'				=> 'Perfil',
	'ACP_USER_RANK'					=> 'Rang',
	'ACP_USER_ROLES'				=> 'Tipus d\'usuari',
	'ACP_USER_SECURITY'				=> 'Seguretat',
	'ACP_USER_SIG'					=> 'Signatura',

	'ACP_VC_SETTINGS'					=> 'Paràmetres de confirmació visual',
	'ACP_VC_CAPTCHA_DISPLAY'			=> 'Previsualització CAPTCHA',
	'ACP_VERSION_CHECK'					=> 'Comprova si hi ha actualitzacions',
	'ACP_VIEW_ADMIN_PERMISSIONS'		=> 'Permisos administratius',
	'ACP_VIEW_FORUM_MOD_PERMISSIONS'	=> 'Permisos de moderació del fòrum',
	'ACP_VIEW_FORUM_PERMISSIONS'		=> 'Permisos basats en el fòrum',
	'ACP_VIEW_GLOBAL_MOD_PERMISSIONS'	=> 'Permisos de moderació global',
	'ACP_VIEW_USER_PERMISSIONS'			=> 'Permisos basats en usuaris',
	
	'ACP_WORDS'					=> 'Censura de paraules',

	'ACTION'				=> 'Acció',
	'ACTIONS'				=> 'Accions',
	'ACTIVATE'				=> 'Activa',
	'ADD'					=> 'Afegeix',
	'ADMIN'					=> 'Administració',
	'ADMIN_INDEX'			=> 'Índex del PCA',
	'ADMIN_PANEL'			=> 'Panell de control d\'administració',

	'ADM_LOGOUT'			=> 'Eixida del PCA',
	'ADM_LOGGED_OUT'		=> 'Heu eixit del Panell de Control d\'Administració',

	'BACK'					=> 'Endarrere',

	'COLOUR_SWATCH'			=> 'Web-safe colour swatch',
	'CONFIG_UPDATED'		=> 'S\'ha actualitzat la configuració.',

	'DEACTIVATE'				=> 'Desactiva',
	'DIRECTORY_DOES_NOT_EXIST'	=> 'La ruta que heu introduït “%s” no existeix.',
	'DIRECTORY_NOT_DIR'			=> 'The entered path “%s” is not a directory.',
	'DIRECTORY_NOT_WRITABLE'	=> 'The entered path “%s” is not writable.',
	'DISABLE'					=> 'Disable',
	'DOWNLOAD'					=> 'Download',
	'DOWNLOAD_AS'				=> 'Descarrega com a',
	'DOWNLOAD_STORE'			=> 'Descarrega o emmagatzema el fitxer',
	'DOWNLOAD_STORE_EXPLAIN'	=> 'You may directly download the file or save it in your <samp>store/</samp> folder.',

	'EDIT'					=> 'Edita',
	'ENABLE'				=> 'Habilita',
	'EXPORT_DOWNLOAD'		=> 'Descarrega',
	'EXPORT_STORE'			=> 'Emmagatzema',

	'GENERAL_OPTIONS'		=> 'Opcions generals',
	'GENERAL_SETTINGS'		=> 'Paràmetres generals',
	'GLOBAL_MASK'			=> 'Global permission mask',

	'INSTALL'				=> 'Instal·la',
	'IP'					=> 'IP de l\'usuari',
	'IP_HOSTNAME'			=> 'IP addresses or hostnames',

	'LOGGED_IN_AS'			=> 'Heu entrat com a:',
	'LOGIN_ADMIN'			=> 'Per adminstrar el fòrum heu d\'ésser un usuari autenticat.',
	'LOGIN_ADMIN_CONFIRM'	=> 'Per administrar el fòrum heu de tornar a autenticar-vos.',
	'LOGIN_ADMIN_SUCCESS'	=> 'Us heu autenticat i ara sereu redireccionats al Panell de Control d\'Administració.',
	'LOOK_UP_FORUM'			=> 'Seleccioneu un fòrum',
	'LOOK_UP_FORUMS_EXPLAIN'=> 'En podeu seleccionar més d\'un.',

	'MANAGE'				=> 'Gestiona',
	'MENU_TOGGLE'			=> 'Amaga o mostra el menú lateral',
	'MOVE_DOWN'				=> 'Abaix',
	'MOVE_UP'				=> 'Amunt',

	'NOTIFY'				=> 'Notificació',
	'NO_ADMIN'				=> 'No esteu autoritzats per administrar aquest fòrum.',
	'NO_EMAILS_DEFINED'		=> 'S\'han trobat e-mails invàlids.',
	'NO_PASSWORD_SUPPLIED'	=> 'Heu d\'introduir la vostra contrasenya per accedir al Panell de Control d\'Administració.',	

	'OFF'					=> 'Desactivat',
	'ON'					=> 'Activat',

	'PARSE_BBCODE'						=> 'Analitza BBCode',
	'PARSE_SMILIES'						=> 'Analitza carotes',
	'PARSE_URLS'						=> 'Analitza enllaços',
	'PERMISSIONS_TRANSFERRED'			=> 'Permisos transferits',
	'PERMISSIONS_TRANSFERRED_EXPLAIN'	=> 'Actualment tens els permisos transferits des de %1$s. Ara podeu navegar pel fòrum amb els permisos que aquest usuari té. Per revertir el procés, només heu de prémer el botó <a href="%2$s"><strong>Restaura permisos</strong></a> en qualsevol moment.',
	'PIXEL'								=> 'px',	
	'PROCEED_TO_ACP'					=> '%sVés al PCA%s',

	'REMIND'							=> 'Recorda',
	'RESYNC'							=> 'Torna a sincronitzar',
	'RETURN_TO'							=> 'Torna a…',

	'SELECT_ANONYMOUS'		=> 'Seleccioneu un usuari anònim',
	'SELECT_OPTION'			=> 'Seleccioneu una opció',

	'SETTING_TOO_LOW'		=> 'El valor introduït per a la configuració “%1$s” és massa baix. El valor mínim permès és %2$d.',
	'SETTING_TOO_BIG'		=> 'El valor introduït per a la configuració “%1$s” és massa gran. El valor màxim permès és %2$d.',	
	'SETTING_TOO_LONG'		=> 'El valor introduït per a la configuració “%1$s” és massa llarg. La llargada màxima permesa és %2$d.',
	'SETTING_TOO_SHORT'		=> 'El valor introduït per a la configuració “%1$s” no és prou llarg. La llargada mínima permesa és %2$d.',

	'UCP'					=> 'Panell de control de l\'usuari',
	'USERNAMES_EXPLAIN'		=> 'Introduïu cada nom d\'usuari a una línia nova.',
	'USER_CONTROL_PANEL'	=> 'Panell de control de l\'usuari',

	'WARNING'				=> 'Avís',
));

// PHP info
$lang = array_merge($lang, array(
	'ACP_PHP_INFO_EXPLAIN'	=> 'Aquesta pàgina llista la informació de la versió del PHP instal·lada en aquest servidor. Inclou la informació dels mòduls carregats, variables disponibles i configuracions per defecte. Aquesta informació pot ser útil per diagnosticar problemes. Tingueu en compte que algunes companyies d\'emmagazematge web limiten quina informació es mostra per questions de seguretat. És recomanable que no proporcioneu la informació d\'aquesta pàgina excepte quan us la demanen <a href="http://www.phpbb.com/about/team/">els membres de l\'equip oficial</a> dels fòrums d\'assistència.',

	'NO_PHPINFO_AVAILABLE'	=> 'No s\'ha pogut obtindre informació de la vostra configuració del PHP. La funció phpinfo() està inhabilitada per raons de seguretat.',
));

// Logs
$lang = array_merge($lang, array(
	'ACP_ADMIN_LOGS_EXPLAIN'	=> 'This lists all the actions carried out by board administrators. You can sort by username, date, IP or action. If you have appropriate permissions you can also clear individual operations or the log as a whole.',
	'ACP_CRITICAL_LOGS_EXPLAIN'	=> 'This lists the actions carried out by the board itself. This log provides you with information you are able to use for solving specific problems, for example non-delivery of e-mails. You can sort by username, date, IP or action. If you have appropriate permissions you can also clear individual operations or the log as a whole.',
	'ACP_MOD_LOGS_EXPLAIN'		=> 'This lists all actions done on forums, topics and posts as well as actions carried out on users by moderators, including banning. You can sort by username, date, IP or action. If you have appropriate permissions you can also clear individual operations or the log as a whole.',
	'ACP_USERS_LOGS_EXPLAIN'	=> 'This lists all actions carried out by users or on users (reports, warnings and user notes).',
	'ALL_ENTRIES'				=> 'Totes les entrades',

	'DISPLAY_LOG'	=> 'Mostra entrades anteriors',

	'NO_ENTRIES'	=> 'No hi ha entrades al registre durant aquest període.',

	'SORT_IP'		=> 'Adreça IP',
	'SORT_DATE'		=> 'Data',
	'SORT_ACTION'	=> 'Registre d\'accions',
));

// Index page
$lang = array_merge($lang, array(
	'ADMIN_INTRO'				=> 'Des d\'aquesta finestra d\'inici podeu veure algunes estadístiques del fòrum. Els enllaços de l\'esquerra us permetran gestionar els paràmetres principals del fòrum. A part, a cada pestanya teniu els diferents camps a gestionar.',
	'ADMIN_LOG'					=> 'Registre d\'accions de l\'administrador',
	'ADMIN_LOG_INDEX_EXPLAIN'	=> 'Això mostra una ullada a les darreres cinc accions que els administradors del fòrum han dut a terme. Podeu veure una llista completa a la pestanya manteniment.',
	'AVATAR_DIR_SIZE'			=> 'Mida del directori dels avatars',

	'BOARD_STARTED'		=> 'Fòrum iniciat el',
	'BOARD_VERSION'		=> 'Versió del fòrum',

	'DATABASE_SERVER_INFO'	=> 'Servidor de la base de dades',
	'DATABASE_SIZE'			=> 'Mida de la base de dades',

	'FILES_PER_DAY'		=> 'Fitxers adjunts per dia',
	'FORUM_STATS'		=> 'Estadístiques del fòrum',

	'GZIP_COMPRESSION'	=> 'Compressió GZip',

	'NOT_AVAILABLE'		=> 'No disponible',
	'NUMBER_FILES'		=> 'Nombre d\'adjunts',
	'NUMBER_POSTS'		=> 'Nombre de missatges',
	'NUMBER_TOPICS'		=> 'Nombre de temes',
	'NUMBER_USERS'		=> 'Nombre d\'usuaris',
	'NUMBER_ORPHAN'		=> 'Fitxers adjunts orfes',

	'POSTS_PER_DAY'		=> 'Missatges per dia',

	'PURGE_CACHE'			=> 'Purga la memòria cau',
	'PURGE_CACHE_CONFIRM'	=> 'Esteu segurs que voleu purgar la memòria cau?',
	'PURGE_CACHE_EXPLAIN'	=> 'Purga tots els elements de la memòria cau. Això inclou qualsevol tema, plantilla o preguntes.',

	'RESET_DATE'					=> 'Reinicia data d\'inici del fòrum',
	'RESET_DATE_CONFIRM'			=> 'Esteu segurs que voleu reiniciar la data d\'inici del fòrum?',
	'RESET_ONLINE'					=> 'Reinicia major nombre d\'usuaris connectats alhora',
	'RESET_ONLINE_CONFIRM'			=> 'Esteu segurs que voleu reiniciar el major nombre d\'usuaris connectas alhora?',
	'RESYNC_POSTCOUNTS'				=> 'Torna a sincronitzar contatge de missatges',
	'RESYNC_POSTCOUNTS_EXPLAIN'		=> 'Només es tindran en compte missatges existents. Els missatges netejats no es tindran en compte.',
	'RESYNC_POSTCOUNTS_CONFIRM'		=> 'Esteu segurs que voleu tornar a sincronitzar el contatge de missatges?',
	'RESYNC_POST_MARKING'			=> 'Torna a sincronitzar temes marcats',
	'RESYNC_POST_MARKING_CONFIRM'	=> 'Esteu segurs que voleu tornar a sincronitzar temes marcats?',
	'RESYNC_POST_MARKING_EXPLAIN'	=> 'Primer desmcarca tots els temes i després marca els temes que han tingut alguna activitat els darrers 6 mesos.',
	'RESYNC_STATS'					=> 'Torna a sincronitzar estadístiques',
	'RESYNC_STATS_CONFIRM'			=> 'Esteu segurs que voleu tornar a sincronitzar estadístiques?',
	'RESYNC_STATS_EXPLAIN'			=> 'Torna a calcular el nombre total de missatges, temes, usuaris i fitxers.',
	'RUN'							=> 'Executa',

	'STATISTIC'					=> 'Estadística',
	'STATISTIC_RESYNC_OPTIONS'	=> 'Torna a sincronitzar o reseteja estadístiques',

	'TOPICS_PER_DAY'	=> 'Temes per dia',

	'UPLOAD_DIR_SIZE'	=> 'Mida dels fitxers adjunts publicats',
	'USERS_PER_DAY'		=> 'Usuaris per dia',

	'VALUE'					=> 'Valor',
	'VIEW_ADMIN_LOG'		=> 'Veure registre de l\'administrador',
	'VIEW_INACTIVE_USERS'	=> 'Veure usuaris inactius',

	'WELCOME_PHPBB'			=> 'Benvingut al centre de control phpBB',
));

// Inactive Users
$lang = array_merge($lang, array(
	'INACTIVE_DATE'					=> 'Data d\'inactivitat',
	'INACTIVE_REASON'				=> 'Raó',
	'INACTIVE_REASON_MANUAL'		=> 'Compte desactivat per l\'administrador',
	'INACTIVE_REASON_PROFILE'		=> 'Detalls del perfil canviats',
	'INACTIVE_REASON_REGISTER'		=> 'Darrer compte registrat',
	'INACTIVE_REASON_REMIND'		=> 'Reactivació forçada del compte d\'usuari',
	'INACTIVE_REASON_UNKNOWN'		=> 'Desconegut',
	'INACTIVE_USERS'				=> 'Usuaris inactius',
	'INACTIVE_USERS_EXPLAIN'		=> 'This is a list of users who have registered but whose accounts are inactive. You can activate, delete or remind (by sending an e-mail) these users if you wish.',
	'INACTIVE_USERS_EXPLAIN_INDEX'	=> 'En aquesta llista podeu veure els darrers 10 usuaris registrats amb comptes inactius. Podeu veure una llista completa al menú corresponent d\'usuaris o des de l\'enllaç que hi ha a la part alta de la taula.',

	'NO_INACTIVE_USERS'	=> 'No hi ha cap usuari inactiu',

	'SORT_INACTIVE'		=> 'Inactive date',
	'SORT_LAST_VISIT'	=> 'Darrera visita',
	'SORT_REASON'		=> 'Raó',
	'SORT_REG_DATE'		=> 'Data de registre',

	'USER_IS_INACTIVE'		=> 'L\'usuari és inactiu',
));

// Log Entries
$lang = array_merge($lang, array(
	'LOG_ACL_ADD_USER_GLOBAL_U_'		=> '<strong>Added or edited users’ user permissions</strong><br />» %s',
	'LOG_ACL_ADD_GROUP_GLOBAL_U_'		=> '<strong>Added or edited groups’ user permissions</strong><br />» %s',
	'LOG_ACL_ADD_USER_GLOBAL_M_'		=> '<strong>Added or edited users’ global moderator permissions</strong><br />» %s',
	'LOG_ACL_ADD_GROUP_GLOBAL_M_'		=> '<strong>Added or edited groups’ global moderator permissions</strong><br />» %s',
	'LOG_ACL_ADD_USER_GLOBAL_A_'		=> '<strong>Added or edited users’ administrator permissions</strong><br />» %s',
	'LOG_ACL_ADD_GROUP_GLOBAL_A_'		=> '<strong>Added or edited groups’ administrator permissions</strong><br />» %s',

	'LOG_ACL_ADD_ADMIN_GLOBAL_A_'		=> '<strong>Added or edited Administrators</strong><br />» %s',
	'LOG_ACL_ADD_MOD_GLOBAL_M_'			=> '<strong>Added or edited Global Moderators</strong><br />» %s',

	'LOG_ACL_ADD_USER_LOCAL_F_'			=> '<strong>Added or edited users’ forum access</strong> from %1$s<br />» %2$s',
	'LOG_ACL_ADD_USER_LOCAL_M_'			=> '<strong>Added or edited users’ forum moderator access</strong> from %1$s<br />» %2$s',
	'LOG_ACL_ADD_GROUP_LOCAL_F_'		=> '<strong>Added or edited groups’ forum access</strong> from %1$s<br />» %2$s',
	'LOG_ACL_ADD_GROUP_LOCAL_M_'		=> '<strong>Added or edited groups’ forum moderator access</strong> from %1$s<br />» %2$s',

	'LOG_ACL_ADD_MOD_LOCAL_M_'			=> '<strong>Added or edited Moderators</strong> from %1$s<br />» %2$s',
	'LOG_ACL_ADD_FORUM_LOCAL_F_'		=> '<strong>Added or edited forum permissions</strong> from %1$s<br />» %2$s',

	'LOG_ACL_DEL_ADMIN_GLOBAL_A_'		=> '<strong>Removed Administrators</strong><br />» %s',
	'LOG_ACL_DEL_MOD_GLOBAL_M_'			=> '<strong>Removed Global Moderators</strong><br />» %s',
	'LOG_ACL_DEL_MOD_LOCAL_M_'			=> '<strong>Removed Moderators</strong> from %1$s<br />» %2$s',
	'LOG_ACL_DEL_FORUM_LOCAL_F_'		=> '<strong>Removed User/Group forum permissions</strong> from %1$s<br />» %2$s',

	'LOG_ACL_TRANSFER_PERMISSIONS'		=> '<strong>Permissions transferred from</strong><br />» %s',
	'LOG_ACL_RESTORE_PERMISSIONS'		=> '<strong>Own permissions restored after using permissions from</strong><br />» %s',
	
	'LOG_ADMIN_AUTH_FAIL'		=> '<strong>Failed administration login attempt</strong>',
	'LOG_ADMIN_AUTH_SUCCESS'	=> '<strong>Entrada al panell d\'administració</strong>',

	'LOG_ATTACHMENTS_DELETED'	=> '<strong>Removed user attachments</strong><br />» %s',

	'LOG_ATTACH_EXT_ADD'		=> '<strong>Added or edited attachment extension</strong><br />» %s',
	'LOG_ATTACH_EXT_DEL'		=> '<strong>Removed attachment extension</strong><br />» %s',
	'LOG_ATTACH_EXT_UPDATE'		=> '<strong>Updated attachment extension</strong><br />» %s',
	'LOG_ATTACH_EXTGROUP_ADD'	=> '<strong>Added extension group</strong><br />» %s',
	'LOG_ATTACH_EXTGROUP_EDIT'	=> '<strong>Edited extension group</strong><br />» %s',
	'LOG_ATTACH_EXTGROUP_DEL'	=> '<strong>Removed extension group</strong><br />» %s',
	'LOG_ATTACH_FILEUPLOAD'		=> '<strong>Orphan File uploaded to Post</strong><br />» ID %1$d - %2$s',
	'LOG_ATTACH_ORPHAN_DEL'		=> '<strong>Orphan Files deleted</strong><br />» %s',

	'LOG_BAN_EXCLUDE_USER'	=> '<strong>Excluded user from ban</strong> for reason “<em>%1$s</em>”<br />» %2$s',
	'LOG_BAN_EXCLUDE_IP'	=> '<strong>Excluded IP from ban</strong> for reason “<em>%1$s</em>”<br />» %2$s',
	'LOG_BAN_EXCLUDE_EMAIL' => '<strong>Excluded e-mail from ban</strong> for reason “<em>%1$s</em>”<br />» %2$s',
	'LOG_BAN_USER'			=> '<strong>Banned user</strong> for reason “<em>%1$s</em>”<br />» %2$s',
	'LOG_BAN_IP'			=> '<strong>Banned IP</strong> for reason “<em>%1$s</em>”<br />» %2$s',
	'LOG_BAN_EMAIL'			=> '<strong>Banned e-mail</strong> for reason “<em>%1$s</em>”<br />» %2$s',
	'LOG_UNBAN_USER'		=> '<strong>Unbanned user</strong><br />» %s',
	'LOG_UNBAN_IP'			=> '<strong>Unbanned IP</strong><br />» %s',
	'LOG_UNBAN_EMAIL'		=> '<strong>Unbanned e-mail</strong><br />» %s',

	'LOG_BBCODE_ADD'		=> '<strong>Added new BBCode</strong><br />» %s',
	'LOG_BBCODE_EDIT'		=> '<strong>Edited BBCode</strong><br />» %s',
	'LOG_BBCODE_DELETE'		=> '<strong>Deleted BBCode</strong><br />» %s',

	'LOG_BOT_ADDED'		=> '<strong>New bot added</strong><br />» %s',
	'LOG_BOT_DELETE'	=> '<strong>Deleted bot</strong><br />» %s',
	'LOG_BOT_UPDATED'	=> '<strong>Existing bot updated</strong><br />» %s',

	'LOG_CLEAR_ADMIN'		=> '<strong>Cleared admin log</strong>',
	'LOG_CLEAR_CRITICAL'	=> '<strong>Cleared error log</strong>',
	'LOG_CLEAR_MOD'			=> '<strong>Cleared moderator log</strong>',
	'LOG_CLEAR_USER'		=> '<strong>Cleared user log</strong><br />» %s',
	'LOG_CLEAR_USERS'		=> '<strong>Cleared user logs</strong>',

	'LOG_CONFIG_ATTACH'			=> '<strong>Altered attachment settings</strong>',
	'LOG_CONFIG_AUTH'			=> '<strong>Altered authentication settings</strong>',
	'LOG_CONFIG_AVATAR'			=> '<strong>Altered avatar settings</strong>',
	'LOG_CONFIG_COOKIE'			=> '<strong>Altered cookie settings</strong>',
	'LOG_CONFIG_EMAIL'			=> '<strong>Altered e-mail settings</strong>',
	'LOG_CONFIG_FEATURES'		=> '<strong>Altered board features</strong>',
	'LOG_CONFIG_LOAD'			=> '<strong>Altered load settings</strong>',
	'LOG_CONFIG_MESSAGE'		=> '<strong>Altered private message settings</strong>',
	'LOG_CONFIG_POST'			=> '<strong>Altered post settings</strong>',
	'LOG_CONFIG_REGISTRATION'	=> '<strong>Modificats els paràmetres de registre d\'usuaris</strong>',
	'LOG_CONFIG_SEARCH'			=> '<strong>Altered search settings</strong>',
	'LOG_CONFIG_SECURITY'		=> '<strong>Altered security settings</strong>',
	'LOG_CONFIG_SERVER'			=> '<strong>Altered server settings</strong>',
	'LOG_CONFIG_SETTINGS'		=> '<strong>Altered board settings</strong>',
	'LOG_CONFIG_SIGNATURE'		=> '<strong>Altered signature settings</strong>',
	'LOG_CONFIG_VISUAL'			=> '<strong>Altered visual confirmation settings</strong>',

	'LOG_APPROVE_TOPIC'			=> '<strong>Approved topic</strong><br />» %s',
	'LOG_BUMP_TOPIC'			=> '<strong>User bumped topic</strong><br />» %s',
	'LOG_DELETE_POST'			=> '<strong>Deleted post</strong><br />» %s',
	'LOG_DELETE_TOPIC'			=> '<strong>Deleted topic</strong><br />» %s',
	'LOG_FORK'					=> '<strong>Copied topic</strong><br />» from %s',
	'LOG_LOCK'					=> '<strong>Locked topic</strong><br />» %s',
	'LOG_LOCK_POST'				=> '<strong>Locked post</strong><br />» %s',
	'LOG_MERGE'					=> '<strong>Merged posts</strong> into topic<br />» %s',
	'LOG_MOVE'					=> '<strong>Moved topic</strong><br />» from %s',
	'LOG_POST_APPROVED'			=> '<strong>Approved post</strong><br />» %s',
	'LOG_POST_DISAPPROVED'		=> '<strong>Disapproved post “%1$s” with the following reason</strong><br />» %2$s',
	'LOG_POST_EDITED'			=> '<strong>Edited post “%1$s” written by</strong><br />» %2$s',
	'LOG_REPORT_CLOSED'			=> '<strong>Closed report</strong><br />» %s',
	'LOG_REPORT_DELETED'		=> '<strong>Deleted report</strong><br />» %s',
	'LOG_SPLIT_DESTINATION'		=> '<strong>Moved split posts</strong><br />» to %s',
	'LOG_SPLIT_SOURCE'			=> '<strong>Split posts</strong><br />» from %s',

	'LOG_TOPIC_DELETED'			=> '<strong>Deleted topic</strong><br />» %s',
	'LOG_TOPIC_APPROVED'		=> '<strong>Approved topic</strong><br />» %s',
	'LOG_TOPIC_DISAPPROVED'		=> '<strong>Disapproved topic “%1$s” with the following reason</strong><br />%2$s',
	'LOG_TOPIC_RESYNC'			=> '<strong>Resynchronised topic counters</strong><br />» %s',
	'LOG_TOPIC_TYPE_CHANGED'	=> '<strong>Changed topic type</strong><br />» %s',
	'LOG_UNLOCK'				=> '<strong>Unlocked topic</strong><br />» %s',
	'LOG_UNLOCK_POST'			=> '<strong>Unlocked post</strong><br />» %s',

	'LOG_DISALLOW_ADD'		=> '<strong>Added disallowed username</strong><br />» %s',
	'LOG_DISALLOW_DELETE'	=> '<strong>Deleted disallowed username</strong>',

	'LOG_DB_BACKUP'			=> '<strong>Database backup</strong>',
	'LOG_DB_DELETE'			=> '<strong>Deleted database backup</strong>',
	'LOG_DB_RESTORE'		=> '<strong>Restored database backup</strong>',

	'LOG_DOWNLOAD_EXCLUDE_IP'	=> '<strong>Excluded IP/hostname from download list</strong><br />» %s',
	'LOG_DOWNLOAD_IP'			=> '<strong>Added IP/hostname to download list</strong><br />» %s',
	'LOG_DOWNLOAD_REMOVE_IP'	=> '<strong>Removed IP/hostname from download list</strong><br />» %s',

	'LOG_ERROR_JABBER'		=> '<strong>Jabber error</strong><br />» %s',
	'LOG_ERROR_EMAIL'		=> '<strong>E-mail error</strong><br />» %s',
	
	'LOG_FORUM_ADD'							=> '<strong>Created new forum</strong><br />» %s',
	'LOG_FORUM_DEL_FORUM'					=> '<strong>Deleted forum</strong><br />» %s',
	'LOG_FORUM_DEL_FORUMS'					=> '<strong>Deleted forum and its subforums</strong><br />» %s',
	'LOG_FORUM_DEL_MOVE_FORUMS'				=> '<strong>Deleted forum and moved subforums</strong> to %1$s<br />» %2$s',
	'LOG_FORUM_DEL_MOVE_POSTS'				=> '<strong>Deleted forum and moved posts </strong> to %1$s<br />» %2$s',
	'LOG_FORUM_DEL_MOVE_POSTS_FORUMS'		=> '<strong>Deleted forum and its subforums, moved messages</strong> to %1$s<br />» %2$s',
	'LOG_FORUM_DEL_MOVE_POSTS_MOVE_FORUMS'	=> '<strong>Deleted forum, moved posts</strong> to %1$s <strong>and subforums</strong> to %2$s<br />» %3$s',
	'LOG_FORUM_DEL_POSTS'					=> '<strong>Deleted forum and its messages</strong><br />» %s',
	'LOG_FORUM_DEL_POSTS_FORUMS'			=> '<strong>Deleted forum, its messages and subforums</strong><br />» %s',
	'LOG_FORUM_DEL_POSTS_MOVE_FORUMS'		=> '<strong>Deleted forum and its messages, moved subforums</strong> to %1$s<br />» %2$s',
	'LOG_FORUM_EDIT'						=> '<strong>Edited forum details</strong><br />» %s',
	'LOG_FORUM_MOVE_DOWN'					=> '<strong>Moved forum</strong> %1$s <strong>below</strong> %2$s',
	'LOG_FORUM_MOVE_UP'						=> '<strong>Moved forum</strong> %1$s <strong>above</strong> %2$s',
	'LOG_FORUM_SYNC'						=> '<strong>Re-synchronised forum</strong><br />» %s',

	'LOG_GROUP_CREATED'		=> '<strong>New usergroup created</strong><br />» %s',
	'LOG_GROUP_DEFAULTS'	=> '<strong>Group “%1$s” made default for members</strong><br />» %2$s',
	'LOG_GROUP_DELETE'		=> '<strong>Usergroup deleted</strong><br />» %s',
	'LOG_GROUP_DEMOTED'		=> '<strong>Leaders demoted in usergroup</strong> %1$s<br />» %2$s',
	'LOG_GROUP_PROMOTED'	=> '<strong>Members promoted to leader in usergroup</strong> %1$s<br />» %2$s',
	'LOG_GROUP_REMOVE'		=> '<strong>Members removed from usergroup</strong> %1$s<br />» %2$s',
	'LOG_GROUP_UPDATED'		=> '<strong>Usergroup details updated</strong><br />» %s',
	'LOG_MODS_ADDED'		=> '<strong>Added new leaders to usergroup</strong> %1$s<br />» %2$s',
	'LOG_USERS_APPROVED'	=> '<strong>Users approved in usergroup</strong> %1$s<br />» %2$s',
	'LOG_USERS_ADDED'		=> '<strong>Added new members to usergroup</strong> %1$s<br />» %2$s',

	'LOG_IMAGESET_ADD_DB'			=> '<strong>Added new imageset to database</strong><br />» %s',
	'LOG_IMAGESET_ADD_FS'			=> '<strong>Add new imageset on filesystem</strong><br />» %s',
	'LOG_IMAGESET_DELETE'			=> '<strong>Deleted imageset</strong><br />» %s',
	'LOG_IMAGESET_EDIT_DETAILS'		=> '<strong>Edited imageset details</strong><br />» %s',
	'LOG_IMAGESET_EDIT'				=> '<strong>Edited imageset</strong><br />» %s',
	'LOG_IMAGESET_EXPORT'			=> '<strong>Exported imageset</strong><br />» %s',
	'LOG_IMAGESET_LANG_MISSING'		=> '<strong>Imageset misses “%2$s” localisation</strong><br />» %1$s',
	'LOG_IMAGESET_LANG_REFRESHED'	=> '<strong>Refreshed “%2$s” localisation of imageset</strong><br />» %1$s',
	'LOG_IMAGESET_REFRESHED'		=> '<strong>Refreshed imageset</strong><br />» %s',

	'LOG_INACTIVE_ACTIVATE'	=> '<strong>Activated inactive users</strong><br />» %s',
	'LOG_INACTIVE_DELETE'	=> '<strong>Usuaris inactius esborrats</strong><br />» %s',
	'LOG_INACTIVE_REMIND'	=> '<strong>Sent reminder e-mails to inactive users</strong><br />» %s',
	'LOG_INSTALL_CONVERTED'	=> '<strong>Converted from %1$s to phpBB %2$s</strong>',
	'LOG_INSTALL_INSTALLED'	=> '<strong>Installed phpBB %s</strong>',

	'LOG_IP_BROWSER_FORWARDED_CHECK'	=> '<strong>Session IP/browser/X_FORWARDED_FOR check failed</strong><br />»User IP “<em>%1$s</em>” checked against session IP “<em>%2$s</em>”, user browser string “<em>%3$s</em>” checked against session browser string “<em>%4$s</em>” and user X_FORWARDED_FOR string “<em>%5$s</em>” checked against session X_FORWARDED_FOR string “<em>%6$s</em>”.',

	'LOG_JAB_CHANGED'			=> '<strong>Jabber account changed</strong>',
	'LOG_JAB_PASSCHG'			=> '<strong>Jabber password changed</strong>',
	'LOG_JAB_REGISTER'			=> '<strong>Jabber account registered</strong>',
	'LOG_JAB_SETTINGS_CHANGED'	=> '<strong>Jabber settings changed</strong>',

	'LOG_LANGUAGE_PACK_DELETED'		=> '<strong>Deleted language pack</strong><br />» %s',
	'LOG_LANGUAGE_PACK_INSTALLED'	=> '<strong>Installed language pack</strong><br />» %s',
	'LOG_LANGUAGE_PACK_UPDATED'		=> '<strong>Updated language pack details</strong><br />» %s',
	'LOG_LANGUAGE_FILE_REPLACED'	=> '<strong>Replaced language file</strong><br />» %s',
	'LOG_LANGUAGE_FILE_SUBMITTED'	=> '<strong>Submitted language file and placed in store folder</strong><br />» %s',

	'LOG_MASS_EMAIL'		=> '<strong>Sent mass e-mail</strong><br />» %s',

	'LOG_MCP_CHANGE_POSTER'	=> '<strong>Changed poster in topic “%1$s”</strong><br />» from %2$s to %3$s',

	'LOG_MODULE_DISABLE'	=> '<strong>Module disabled</strong><br />» %s',
	'LOG_MODULE_ENABLE'		=> '<strong>Module enabled</strong><br />» %s',
	'LOG_MODULE_MOVE_DOWN'	=> '<strong>Module moved down</strong><br />» %1$s below %2$s',
	'LOG_MODULE_MOVE_UP'	=> '<strong>Module moved up</strong><br />» %1$s above %2$s',
	'LOG_MODULE_REMOVED'	=> '<strong>Module removed</strong><br />» %s',
	'LOG_MODULE_ADD'		=> '<strong>Module added</strong><br />» %s',
	'LOG_MODULE_EDIT'		=> '<strong>Module edited</strong><br />» %s',

	'LOG_A_ROLE_ADD'		=> '<strong>Admin role added</strong><br />» %s',
	'LOG_A_ROLE_EDIT'		=> '<strong>Admin role edited</strong><br />» %s',
	'LOG_A_ROLE_REMOVED'	=> '<strong>Admin role removed</strong><br />» %s',
	'LOG_F_ROLE_ADD'		=> '<strong>Forum role added</strong><br />» %s',
	'LOG_F_ROLE_EDIT'		=> '<strong>Forum role edited</strong><br />» %s',
	'LOG_F_ROLE_REMOVED'	=> '<strong>Forum role removed</strong><br />» %s',
	'LOG_M_ROLE_ADD'		=> '<strong>Moderator role added</strong><br />» %s',
	'LOG_M_ROLE_EDIT'		=> '<strong>Moderator role edited</strong><br />» %s',
	'LOG_M_ROLE_REMOVED'	=> '<strong>Moderator role removed</strong><br />» %s',
	'LOG_U_ROLE_ADD'		=> '<strong>User role added</strong><br />» %s',
	'LOG_U_ROLE_EDIT'		=> '<strong>User role edited</strong><br />» %s',
	'LOG_U_ROLE_REMOVED'	=> '<strong>User role removed</strong><br />» %s',

	'LOG_PROFILE_FIELD_ACTIVATE'	=> '<strong>Profile field activated</strong><br />» %s',
	'LOG_PROFILE_FIELD_CREATE'		=> '<strong>Profile field added</strong><br />» %s',
	'LOG_PROFILE_FIELD_DEACTIVATE'	=> '<strong>Profile field deactivated</strong><br />» %s',
	'LOG_PROFILE_FIELD_EDIT'		=> '<strong>Profile field changed</strong><br />» %s',
	'LOG_PROFILE_FIELD_REMOVED'		=> '<strong>Profile field removed</strong><br />» %s',

	'LOG_PRUNE'					=> '<strong>Pruned forums</strong><br />» %s',
	'LOG_AUTO_PRUNE'			=> '<strong>Auto-pruned forums</strong><br />» %s',
	'LOG_PRUNE_USER_DEAC'		=> '<strong>Users deactivated</strong><br />» %s',
	'LOG_PRUNE_USER_DEL_DEL'	=> '<strong>Users pruned and posts deleted</strong><br />» %s',
	'LOG_PRUNE_USER_DEL_ANON'	=> '<strong>Users pruned and posts retained</strong><br />» %s',

	'LOG_PURGE_CACHE'			=> '<strong>S\'ha purgat la memòria cau</strong>',

	'LOG_RANK_ADDED'		=> '<strong>Added new rank</strong><br />» %s',
	'LOG_RANK_REMOVED'		=> '<strong>Removed rank</strong><br />» %s',
	'LOG_RANK_UPDATED'		=> '<strong>Updated rank</strong><br />» %s',

	'LOG_REASON_ADDED'		=> '<strong>Added report/denial reason</strong><br />» %s',
	'LOG_REASON_REMOVED'	=> '<strong>Removed report/denial reason</strong><br />» %s',
	'LOG_REASON_UPDATED'	=> '<strong>Updated report/denial reason</strong><br />» %s',

	'LOG_REFERER_INVALID'		=> '<strong>Ha fallat la validació de la referència</strong><br />»La referència fou “<em>%1$s</em>”. La sessió s\'ha tancat.',
	'LOG_RESET_DATE'			=> '<strong>Board start date reset</strong>',
	'LOG_RESET_ONLINE'			=> '<strong>Most users online reset</strong>',
	'LOG_RESYNC_POSTCOUNTS'		=> '<strong>User post counts resynchronised</strong>',
	'LOG_RESYNC_POST_MARKING'	=> '<strong>Dotted topics resynchronised</strong>',
	'LOG_RESYNC_STATS'			=> '<strong>Post, topic and user statistics resynchronised</strong>',

	'LOG_SEARCH_INDEX_CREATED'	=> '<strong>Created search index for</strong><br />» %s',
	'LOG_SEARCH_INDEX_REMOVED'	=> '<strong>Removed search index for</strong><br />» %s',
	'LOG_STYLE_ADD'				=> '<strong>Added new style</strong><br />» %s',
	'LOG_STYLE_DELETE'			=> '<strong>Deleted style</strong><br />» %s',
	'LOG_STYLE_EDIT_DETAILS'	=> '<strong>Edited style</strong><br />» %s',
	'LOG_STYLE_EXPORT'			=> '<strong>Exported style</strong><br />» %s',

	'LOG_TEMPLATE_ADD_DB'			=> '<strong>Added new template set to database</strong><br />» %s',
	'LOG_TEMPLATE_ADD_FS'			=> '<strong>Add new template set on filesystem</strong><br />» %s',
	'LOG_TEMPLATE_CACHE_CLEARED'	=> '<strong>Deleted cached versions of template files in template set <em>%1$s</em></strong><br />» %2$s',
	'LOG_TEMPLATE_DELETE'			=> '<strong>Deleted template set</strong><br />» %s',
	'LOG_TEMPLATE_EDIT'				=> '<strong>Edited template set <em>%1$s</em></strong><br />» %2$s',
	'LOG_TEMPLATE_EDIT_DETAILS'		=> '<strong>Edited template details</strong><br />» %s',
	'LOG_TEMPLATE_EXPORT'			=> '<strong>Exported template set</strong><br />» %s',
	'LOG_TEMPLATE_REFRESHED'		=> '<strong>Refreshed template set</strong><br />» %s',

	'LOG_THEME_ADD_DB'			=> '<strong>Added new theme to database</strong><br />» %s',
	'LOG_THEME_ADD_FS'			=> '<strong>Add new theme on filesystem</strong><br />» %s',
	'LOG_THEME_DELETE'			=> '<strong>Theme deleted</strong><br />» %s',
	'LOG_THEME_EDIT_DETAILS'	=> '<strong>Edited theme details</strong><br />» %s',
	'LOG_THEME_EDIT'			=> '<strong>Edited theme <em>%1$s</em></strong>',
	'LOG_THEME_EDIT_FILE'		=> '<strong>Edited theme <em>%1$s</em></strong><br />» Modified file <em>%2$s</em>',
	'LOG_THEME_EXPORT'			=> '<strong>Exported theme</strong><br />» %s',
	'LOG_THEME_REFRESHED'		=> '<strong>Refreshed theme</strong><br />» %s',

	'LOG_UPDATE_DATABASE'	=> '<strong>Updated Database from version %1$s to version %2$s</strong>',
	'LOG_UPDATE_PHPBB'		=> '<strong>Updated phpBB from version %1$s to version %2$s</strong>',

	'LOG_USER_ACTIVE'		=> '<strong>User activated</strong><br />» %s',
	'LOG_USER_BAN_USER'		=> '<strong>Banned User via user management</strong> for reason “<em>%1$s</em>”<br />» %2$s',
	'LOG_USER_BAN_IP'		=> '<strong>Banned IP via user management</strong> for reason “<em>%1$s</em>”<br />» %2$s',
	'LOG_USER_BAN_EMAIL'	=> '<strong>Banned e-mail via user management</strong> for reason “<em>%1$s</em>”<br />» %2$s',
	'LOG_USER_DELETED'		=> '<strong>Deleted user</strong><br />» %s',
	'LOG_USER_DEL_ATTACH'	=> '<strong>Removed all attachments made by the user</strong><br />» %s',
	'LOG_USER_DEL_AVATAR'	=> '<strong>Removed user avatar</strong><br />» %s',
	'LOG_USER_DEL_POSTS'	=> '<strong>Removed all posts made by the user</strong><br />» %s',
	'LOG_USER_DEL_SIG'		=> '<strong>Removed user signature</strong><br />» %s',
	'LOG_USER_INACTIVE'		=> '<strong>User deactivated</strong><br />» %s',
	'LOG_USER_MOVE_POSTS'	=> '<strong>Moved user posts</strong><br />» posts by “%1$s” to forum “%2$s”',
	'LOG_USER_NEW_PASSWORD'	=> '<strong>Contrasenya canviada</strong><br />» %s',
	'LOG_USER_REACTIVATE'	=> '<strong>Forced user account reactivation</strong><br />» %s',
	'LOG_USER_UPDATE_EMAIL'	=> '<strong>User “%1$s” changed e-mail</strong><br />» from “%2$s” to “%3$s”',
	'LOG_USER_UPDATE_NAME'	=> '<strong>Nom d\'usuari canviat</strong><br />» from “%1$s” to “%2$s”',
	'LOG_USER_USER_UPDATE'	=> '<strong>Detalls de l\'usuari actualitzats</strong><br />» %s',

	'LOG_USER_ACTIVE_USER'		=> '<strong>User account activated</strong>',
	'LOG_USER_DEL_AVATAR_USER'	=> '<strong>User avatar removed</strong>',
	'LOG_USER_DEL_SIG_USER'		=> '<strong>User signature removed</strong>',
	'LOG_USER_FEEDBACK'			=> '<strong>Added user feedback</strong><br />» %s',
	'LOG_USER_GENERAL'			=> '<strong>Entry added:</strong><br />» %s',
	'LOG_USER_INACTIVE_USER'	=> '<strong>User account de-activated</strong>',
	'LOG_USER_LOCK'				=> '<strong>User locked own topic</strong><br />» %s',
	'LOG_USER_MOVE_POSTS_USER'	=> '<strong>Moved all posts to forum</strong>» %s',
	'LOG_USER_REACTIVATE_USER'	=> '<strong>Forced user account reactivation</strong>',
	'LOG_USER_UNLOCK'			=> '<strong>User unlocked own topic</strong><br />» %s',
	'LOG_USER_WARNING'			=> '<strong>Added user warning</strong><br />» %s',
	'LOG_USER_WARNING_BODY'		=> '<strong>The following warning was issued to this user</strong><br />» %s',

	'LOG_USER_GROUP_CHANGE'			=> '<strong>User changed default group</strong><br />» %s',
	'LOG_USER_GROUP_DEMOTE'			=> '<strong>User demoted as leaders from usergroup</strong><br />» %s',
	'LOG_USER_GROUP_JOIN'			=> '<strong>User joined group</strong><br />» %s',
	'LOG_USER_GROUP_JOIN_PENDING'	=> '<strong>User joined group and needs to be approved</strong><br />» %s',
	'LOG_USER_GROUP_RESIGN'			=> '<strong>User resigned membership from group</strong><br />» %s',

	'LOG_WORD_ADD'			=> '<strong>Added word censor</strong><br />» %s',
	'LOG_WORD_DELETE'		=> '<strong>Deleted word censor</strong><br />» %s',
	'LOG_WORD_EDIT'			=> '<strong>Edited word censor</strong><br />» %s',
));

?>
