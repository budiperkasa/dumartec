<?php
/**
*
* acp common [English]
*
* @package language
* @version $Id: common.php,v 1.120 2007/10/04 15:07:24 acydburn Exp $
* @copyright (c) 2005 phpBB Group
* @license http://opensource.org/licenses/gpl-license.php GNU Public License
*
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
	'ACP_ADMINISTRATORS'		=> 'प्रशासक',
	'ACP_ADMIN_LOGS'			=> 'प्रशासक लॉग',
	'ACP_ADMIN_ROLES'			=> 'प्रशासक भूमिका',
	'ACP_ATTACHMENTS'			=> 'संलग्नक',
	'ACP_ATTACHMENT_SETTINGS'	=> 'संलग्नक सैटिंग ',
	'ACP_AUTH_SETTINGS'			=> 'आथन्टीकेशन',
	'ACP_AUTOMATION'			=> 'आटोमेशन',
	'ACP_AVATAR_SETTINGS'		=> 'अवतार सैटिंग',

	'ACP_BACKUP'				=> 'बैकअप',
	'ACP_BAN'					=> 'Banning',
	'ACP_BAN_EMAILS'			=> 'ई-मेल प्रतिबन्धित करें',
	'ACP_BAN_IPS'				=> 'IPs प्रतिबन्धित करें',
	'ACP_BAN_USERNAMES'			=> 'उपयोक्ता नाम प्रतिबन्धित करें',
	'ACP_BBCODES'				=> 'BBCodes',
	'ACP_BOARD_CONFIGURATION'	=> 'बोर्ड कान्फिगरेशन',
	'ACP_BOARD_FEATURES'		=> 'बोर्ड विशेषता',
	'ACP_BOARD_MANAGEMENT'		=> 'बोर्ड व्यवस्थित करें',
	'ACP_BOARD_SETTINGS'		=> 'बोर्ड सैटिंग',
	'ACP_BOTS'					=> 'स्पाईडर/रोबॉट',
	
	'ACP_CAPTCHA'				=> 'CAPTCHA',

	'ACP_CAT_DATABASE'			=> 'आंकड़ाकोष ',
	'ACP_CAT_DOT_MODS'			=> '.MODs',
	'ACP_CAT_FORUMS'			=> 'मंच',
	'ACP_CAT_GENERAL'			=> 'सामान्य',
	'ACP_CAT_MAINTENANCE'		=> 'अनुरक्षण (Maintenance)',
	'ACP_CAT_PERMISSIONS'		=> 'अनुमति',
	'ACP_CAT_POSTING'			=> 'प्रेषण',
	'ACP_CAT_STYLES'			=> 'स्टाईल',
	'ACP_CAT_SYSTEM'			=> 'तंत्र (System)',
	'ACP_CAT_USERGROUP'			=> 'उपयोक्ता व समूह',
	'ACP_CAT_USERS'				=> 'उपयोक्ता',
	'ACP_CLIENT_COMMUNICATION'	=> 'Client communication',
	'ACP_COOKIE_SETTINGS'		=> 'कुकी सैटिंग',
	'ACP_CRITICAL_LOGS'			=> 'त्रुटि लॉग',
	'ACP_CUSTOM_PROFILE_FIELDS'	=> 'स्वनिर्मित प्रोफ़ाइल फिल्ड (Custom profile fields)',
	
	'ACP_DATABASE'				=> 'आंकड़ाकोष व्यवस्थित करें',
	'ACP_DISALLOW'				=> 'वर्जित',
	'ACP_DISALLOW_USERNAMES'	=> 'वर्जित उपयोक्ता नाम',
	
	'ACP_EMAIL_SETTINGS'		=> 'ई-मेल सैटिंग',
	'ACP_EXTENSION_GROUPS'		=> 'विस्तारक समूह(extension groups) व्यवस्थित करें ',
	
	'ACP_FORUM_BASED_PERMISSIONS'	=> 'मंच आधारित अनुमति ',
	'ACP_FORUM_LOGS'				=> 'मंच लॉग',
	'ACP_FORUM_MANAGEMENT'			=> 'मंच व्यवस्थित करें',
	'ACP_FORUM_MODERATORS'			=> 'मंच पंच',
	'ACP_FORUM_PERMISSIONS'			=> 'मंच अनुमति',
	'ACP_FORUM_ROLES'				=> 'मंच कार्य',

	'ACP_GENERAL_CONFIGURATION'		=> 'सामान्य कान्फिगरेशन',
	'ACP_GENERAL_TASKS'				=> 'सामान्य कार्यलक्ष्य',
	'ACP_GLOBAL_MODERATORS'			=> 'सामान्य पंच',
	'ACP_GLOBAL_PERMISSIONS'		=> 'सामान्य अनुमति',
	'ACP_GROUPS'					=> 'समूह',
	'ACP_GROUPS_FORUM_PERMISSIONS'	=> 'समूह मंच अनुमति',
	'ACP_GROUPS_MANAGE'				=> 'समूह व्यवस्थित करें',
	'ACP_GROUPS_MANAGEMENT'			=> 'समूह व्यवस्थित करें',
	'ACP_GROUPS_PERMISSIONS'		=> 'समूह अनुमति',
	
	'ACP_ICONS'					=> 'विषय आईकॉन',
	'ACP_ICONS_SMILIES'			=> 'विषय आईकॉन/स्माईल',
	'ACP_IMAGESETS'				=> 'Imagesets',
	'ACP_INACTIVE_USERS'		=> 'निष्क्रिय उपयोक्ता',
	'ACP_INDEX'					=> 'ACP निर्देशिका',
	
	'ACP_JABBER_SETTINGS'		=> 'जब्बेर सैटिंग',
	
	'ACP_LANGUAGE'				=> 'भाषा व्यवस्थित करें',
	'ACP_LANGUAGE_PACKS'		=> 'भाषा पैक ',
	'ACP_LOAD_SETTINGS'			=> 'सैटिंग लोड करें',
	'ACP_LOGGING'				=> 'लॉगिंग',
	
	'ACP_MAIN'					=> 'ACP निर्देशिका',
	'ACP_MANAGE_EXTENSIONS'		=> 'विस्तारक (extension) व्यवस्थित करें',
	'ACP_MANAGE_FORUMS'			=> 'मंच व्यवस्थित करें',
	'ACP_MANAGE_RANKS'			=> 'रैंक व्यवस्थित करें ',
	'ACP_MANAGE_REASONS'		=> 'रिपोर्ट /डेनियल के कारण व्यवस्थित करें',
	'ACP_MANAGE_USERS'			=> 'उपयोक्ता व्यवस्थित करें',
	'ACP_MASS_EMAIL'			=> 'मॉस ई-मेल',
	'ACP_MESSAGES'				=> 'संदेश',
	'ACP_MESSAGE_SETTINGS'		=> 'निजी संदेश सैटिंग',
	'ACP_MODULE_MANAGEMENT'		=> 'मॉड्यूल व्यवस्थित करें',
	'ACP_MOD_LOGS'				=> 'पंच लॉग',
	'ACP_MOD_ROLES'				=> 'पंच भूमिका',
	
	'ACP_NO_ITEMS'				=> 'There are no items yet.',
		
	'ACP_ORPHAN_ATTACHMENTS'	=> 'असम्बन्धित (Orphaned) संलग्नक',
		
	'ACP_PERMISSIONS'			=> 'अनुमति',
	'ACP_PERMISSION_MASKS'		=> 'मॉस्क के अनुमति',
	'ACP_PERMISSION_ROLES'		=> 'भूमिका के अनुमति',
	'ACP_PERMISSION_TRACE'		=> 'ट्रेस की अनुमति ',
	'ACP_PHP_INFO'				=> 'PHP विवरण',
	'ACP_POST_SETTINGS'			=> 'प्रेषण सैटिंग',
	'ACP_PRUNE_FORUMS'			=> 'मंच संवारें ',
	'ACP_PRUNE_USERS'			=> 'उपयोक्ता संवारें',
	'ACP_PRUNING'				=> 'Pruning',
	
	'ACP_QUICK_ACCESS'			=> 'त्वरित पहुँच',
	
	'ACP_RANKS'					=> 'रैंक',
	'ACP_REASONS'				=> 'रिपोर्ट /डेनियल के कारण ',
	'ACP_REGISTER_SETTINGS'		=> 'उपयोक्ता पंजीकरण सैटिंग',

	'ACP_RESTORE'				=> 'रिस्टोर',

	'ACP_SEARCH'				=> 'खोज कान्फिगरेशन',
	'ACP_SEARCH_INDEX'			=> 'खोज निर्देशिका',
	'ACP_SEARCH_SETTINGS'		=> 'खोज सैटिंग',

	'ACP_SECURITY_SETTINGS'		=> 'सुरक्षा सैटिंग',
	'ACP_SERVER_CONFIGURATION'	=> 'सर्वर कान्फिगरेशन',
	'ACP_SERVER_SETTINGS'		=> 'सर्वर सैटिंग',
	'ACP_SIGNATURE_SETTINGS'	=> 'हस्ताक्षर सैटिंग',
	'ACP_SMILIES'				=> 'स्माईल',
	'ACP_STYLE_COMPONENTS'		=> 'स्टाईल कंपोनेन्ट',
	'ACP_STYLE_MANAGEMENT'		=> 'स्टाईल व्यवस्था',
	'ACP_STYLES'				=> 'स्टाईल',
	
	'ACP_TEMPLATES'				=> 'टेम्पलेट',
	'ACP_THEMES'				=> 'थीम',
	
	'ACP_UPDATE'					=> 'अपडेट किया जा रहा हैं ...',
	'ACP_USERS_FORUM_PERMISSIONS'	=> 'उपयोक्ता के मंच अनुमति',
	'ACP_USERS_LOGS'				=> 'उपयोक्ता लॉग',
	'ACP_USERS_PERMISSIONS'			=> 'उपयोक्ता की अनुमति',
	'ACP_USER_ATTACH'				=> 'संलग्नक',
	'ACP_USER_AVATAR'				=> 'अवतार',
	'ACP_USER_FEEDBACK'				=> 'फीड़बैक',
	'ACP_USER_GROUPS'				=> 'समूह',
	'ACP_USER_MANAGEMENT'			=> 'उपयोक्ता व्यवस्था',
	'ACP_USER_OVERVIEW'				=> 'विवरण (Overview)',
	'ACP_USER_PERM'					=> 'अनुमति',
	'ACP_USER_PREFS'				=> 'प्राथमिकताएँ',
	'ACP_USER_PROFILE'				=> 'प्रोफ़ाइल',
	'ACP_USER_RANK'					=> 'रैंक',
	'ACP_USER_ROLES'				=> 'उपयोक्ता भूमिका ',
	'ACP_USER_SECURITY'				=> 'उपयोक्ता सुरक्षा',
	'ACP_USER_SIG'					=> 'हस्ताक्षर',

	'ACP_VC_SETTINGS'					=> 'विस्युल पुष्टि सैटिंग',
	'ACP_VC_CAPTCHA_DISPLAY'			=> 'CAPTCHA image preview',
	'ACP_VERSION_CHECK'					=> 'Check for updates',
	'ACP_VIEW_ADMIN_PERMISSIONS'		=> 'प्रशासक अनुमति देखें',
	'ACP_VIEW_FORUM_MOD_PERMISSIONS'	=> 'मंच के पंच अनुमति देखें ',
	'ACP_VIEW_FORUM_PERMISSIONS'		=> 'मंच-आधारित अनुमति देखें',
	'ACP_VIEW_GLOBAL_MOD_PERMISSIONS'	=> 'सार्विक पंचायत अनुमति देखें',
	'ACP_VIEW_USER_PERMISSIONS'			=> 'उपयोक्ता-आधारित अनुमति देखें',
	
	'ACP_WORDS'					=> 'शब्द सेंसरिंग',

	'ACTION'				=> 'क्रिया',
	'ACTIONS'				=> 'क्रिया',
	'ACTIVATE'				=> 'सक्रिय',
	'ADD'					=> 'जोड़े',
	'ADMIN'					=> 'प्रशासक',
	'ADMIN_INDEX'			=> 'प्रशासक निर्देशिका',
	'ADMIN_PANEL'			=> 'प्रशासन नियंत्रण पट्टिका',

	'BACK'					=> 'पीछे',

	'COLOUR_SWATCH'			=> 'Web-safe colour swatch',
	'CONFIG_UPDATED'		=> 'कान्फिगरेशन सफलतापुर्वक अपडेट हुआ।',

	'DEACTIVATE'				=> 'निष्क्रिय',
	'DIRECTORY_DOES_NOT_EXIST'	=> 'The entered path “%s” does not exist.',
	'DIRECTORY_NOT_DIR'			=> 'The entered path “%s” is not a directory.',
	'DIRECTORY_NOT_WRITABLE'	=> 'The entered path “%s” is not writable.',
	'DISABLE'					=> 'असमर्थ',
	'DOWNLOAD'					=> 'डाउनलोड',
	'DOWNLOAD_AS'				=> 'इस तरह से डाउनलोड करें',
	'DOWNLOAD_STORE'			=> 'फ़ाईल को डाउनलोड या स्टोर करें',
	'DOWNLOAD_STORE_EXPLAIN'	=> 'You may directly download the file or save it in your <samp>store/</samp> folder.',

	'EDIT'					=> 'सम्पादन',
	'ENABLE'				=> 'समर्थ',
	'EXPORT_DOWNLOAD'		=> 'डाउनलोड',
	'EXPORT_STORE'			=> 'स्टोर',

	'GENERAL_OPTIONS'		=> 'सामान्य विकल्प',
	'GENERAL_SETTINGS'		=> 'सामान्य सैटिंग',
	'GLOBAL_MASK'			=> 'सार्विक अनुमति मॉस्क',

	'INSTALL'				=> 'इंस्टाल',
	'IP'					=> 'उपयोक्ता IP',
	'IP_HOSTNAME'			=> 'IP पता या होस्टनाम',

	'LOGGED_IN_AS'			=> 'You are logged in as:',
	'LOGIN_ADMIN'			=> 'To administer the board you must be an authenticated user.',
	'LOGIN_ADMIN_CONFIRM'	=> 'To administer the board you must re-authenticate yourself.',
	'LOGIN_ADMIN_SUCCESS'	=> 'You have successfully authenticated and will now be redirected to the Administration Control Panel.',
	'LOOK_UP_FORUM'			=> 'मंच का चयन करें',
	'LOOK_UP_FORUMS_EXPLAIN'=> 'आप एक से अधिक मंच का चयन कर सकते हैं।',

	'MANAGE'				=> 'व्यवस्थित करें',
	'MENU_TOGGLE'			=> 'दिखाएँ या छुपाएँ साईडमेन्यु को',
	'MOVE_DOWN'				=> 'नीचे करें/जाएँ',
	'MOVE_UP'				=> 'ऊपर करें/जाएँ',

	'NOTIFY'				=> 'सूचक',
	'NO_ADMIN'				=> 'You are not authorised to administrate this board.',
	'NO_EMAILS_DEFINED'		=> 'No valid e-mail addresses found.',
	'NO_PASSWORD_SUPPLIED'	=> 'You need to enter your password to access the Administration Control Panel.',	

	'OFF'					=> 'बन्द',
	'ON'					=> 'चालू',

	'PARSE_BBCODE'						=> 'BBCode पार्श करें',
	'PARSE_SMILIES'						=> 'स्माईली पार्श करें ',
	'PARSE_URLS'						=> 'लिंक पार्श करें',
	'PERMISSIONS_TRANSFERRED'			=> 'Permissions transferred',
	'PERMISSIONS_TRANSFERRED_EXPLAIN'	=> 'You currently have the permissions from %1$s. You are able to browse the board with this user’s permissions, but not access the administration control panel since admin permissions were not transferred. You can <a href="%2$s"><strong>revert to your permission set</strong></a> at any time.',
	'PIXEL'								=> 'px',	
	'PROCEED_TO_ACP'					=> '%sProceed to the ACP%s',

	'REMIND'							=> 'याद दिलाएँ',
	'RESYNC'							=> 'Resynchronise',
	'RETURN_TO'							=> 'Return to…',

	'SELECT_ANONYMOUS'		=> 'अज्ञात उपयोक्ता चुनें',
	'SELECT_OPTION'			=> 'विकल्प चुनें',
	
	'SETTING_TOO_LOW'		=> 'The entered value for the setting “%1$s” is too low. The minimal allowed value is %2$d.',
	'SETTING_TOO_BIG'		=> 'The entered value for the setting “%1$s” is too big. The maximal allowed value is %2$d.',	
	'SETTING_TOO_LONG'		=> 'The entered value for the setting “%1$s” is too long. The maximal allowed length is %2$d.',
	'SETTING_TOO_SHORT'		=> 'The entered value for the setting “%1$s” is not long enough. The minimal allowed length is %2$d.',
	
	'UCP'					=> 'उपयोक्ता नियंत्रण पट्टिका',
	'USERNAMES_EXPLAIN'		=> 'सभी उपयोक्ता नाम को अलग लाईन पर लिखें।',
	'USER_CONTROL_PANEL'	=> 'उपयोक्ता नियंत्रण पट्टिका',

	'WARNING'				=> 'चेतावनी',
));

// PHP info
$lang = array_merge($lang, array(
	'ACP_PHP_INFO_EXPLAIN'	=> 'This page lists information on the version of PHP installed on this server. It includes details of loaded modules, available variables and default settings. This information may be useful when diagnosing problems. Please be aware that some hosting companies will limit what information is displayed here for security reasons. You are advised to not give out any details on this page except when asked by <a href="http://www.phpbb.com/about/team/">official team members</a> on the support forums.',

	'NO_PHPINFO_AVAILABLE'	=> 'Information about your PHP कान्फिगरेशन is unable to be determined. Phpinfo() has been disabled for security reasons.',
));

// Logs
$lang = array_merge($lang, array(
	'ACP_ADMIN_LOGS_EXPLAIN'	=> 'This lists all the actions carried out by board administrators. You can sort by username, date, IP or action. If you have appropriate permissions you can also clear individual operations or the log as a whole.',
	'ACP_CRITICAL_LOGS_EXPLAIN'	=> 'This lists the actions carried out by the board itself. This log provides you with information you are able to use for solving specific problems, for example non-delivery of e-mails. You can sort by username, date, IP or action. If you have appropriate permissions you can also clear individual operations or the log as a whole.',
	'ACP_MOD_LOGS_EXPLAIN'		=> 'This lists all actions done on forums, topics and posts as well as actions carried out on users by moderators, including banning. You can sort by username, date, IP or action. If you have appropriate permissions you can also clear individual operations or the log as a whole.',
	'ACP_USERS_LOGS_EXPLAIN'	=> 'This lists all actions carried out by users or on users (reports, warnings and user notes).',
	'ALL_ENTRIES'				=> 'All entries',

	'DISPLAY_LOG'	=> 'Display entries from previous',

	'NO_ENTRIES'	=> 'No log entries for this period.',

	'SORT_IP'		=> 'IP पता',
	'SORT_DATE'		=> 'दिनाँक',
	'SORT_ACTION'	=> 'लॉग क्रिया',
));

// Index page
$lang = array_merge($lang, array(
	'ADMIN_INTRO'				=> 'Thank you for choosing phpBB as your board solution. This screen will give you a quick overview of all the various statistics of your board. The links on the left hand side of this screen allow you to control every aspect of your board experience. Each page will have instructions on how to use the tools.',
	'ADMIN_LOG'					=> 'Logged administrator actions',
	'ADMIN_LOG_INDEX_EXPLAIN'	=> 'This gives an overview of the last five actions carried out by board administrators. A full copy of the log can be viewed from the appropriate menu item or following the link below.',
	'AVATAR_DIR_SIZE'			=> 'अवतार फोल्डर का आकार',

	'BOARD_STARTED'		=> 'बोर्ड शुरु हो गया',
	'BOARD_VERSION'		=> 'बोर्ड वर्ज़न',

	'DATABASE_SERVER_INFO'	=> 'आंकड़ाकोष सर्वर',
	'DATABASE_SIZE'			=> 'आंकड़ाकोष आकार',

	'FILES_PER_DAY'		=> 'संलग्नक प्रतिदिन',
	'FORUM_STATS'		=> 'बोर्ड सांख्यिकीय',

	'GZIP_COMPRESSION'	=> 'GZip सम्पीड़न (compression)',

	'NOT_AVAILABLE'		=> 'अनुउपलब्ध',
	'NUMBER_FILES'		=> 'संलग्नक संख्या',
	'NUMBER_POSTS'		=> 'स्तम्भ संख्या',
	'NUMBER_TOPICS'		=> 'विषय संख्या',
	'NUMBER_USERS'		=> 'उपयोक्ता संख्या',
	'NUMBER_ORPHAN'		=> 'असम्बन्धित (Orphan) संलग्नक',

	'POSTS_PER_DAY'		=> 'स्तम्भ प्रतिदिन',

	'PURGE_CACHE'			=> 'Purge the cache',
	'PURGE_CACHE_CONFIRM'	=> 'Are you sure you wish to purge the cache?',
	'PURGE_CACHE_EXPLAIN'	=> 'Purge all cache related items, this includes any cached template files or queries.',

	'RESET_DATE'					=> 'Reset board’s start date',
	'RESET_DATE_CONFIRM'			=> 'Are you sure you wish to reset the board’s start date?',
	'RESET_ONLINE'					=> 'Reset most users ever online',
	'RESET_ONLINE_CONFIRM'			=> 'Are you sure you wish to reset the most users ever online counter?',
	'RESYNC_POSTCOUNTS'				=> 'Resynchronise post counts',
	'RESYNC_POSTCOUNTS_EXPLAIN'		=> 'Only existing posts will be taken into consideration. Pruned posts will not be counted.',
	'RESYNC_POSTCOUNTS_CONFIRM'		=> 'Are you sure you wish to resynchronise post counts?',
	'RESYNC_POST_MARKING'			=> 'Resynchronise dotted topics',
	'RESYNC_POST_MARKING_CONFIRM'	=> 'Are you sure you wish to resynchronise dotted topics?',
	'RESYNC_POST_MARKING_EXPLAIN'	=> 'First unmarks all topics and then correctly marks topics that have seen any activity during the past six months.',
	'RESYNC_STATS'					=> 'Resynchronise statistics',
	'RESYNC_STATS_CONFIRM'			=> 'Are you sure you wish to resynchronise statistics?',
	'RESYNC_STATS_EXPLAIN'			=> 'Recalculates the total number of posts, topics, users and files.',
	'RUN'							=> 'अभी चलाएँ',

	'STATISTIC'					=> 'सांख्यिकीय',
	'STATISTIC_RESYNC_OPTIONS'	=> 'Resynchronise or reset statistics',

	'TOPICS_PER_DAY'	=> 'विषय प्रतिदिन',

	'UPLOAD_DIR_SIZE'	=> 'जमा किये गये संलग्नको के आकार ',
	'USERS_PER_DAY'		=> 'उपयोक्ता प्रतिदिन',

	'VALUE'					=> 'मूल्य',
	'VIEW_ADMIN_LOG'		=> 'प्रशासक लॉग देखें',
	'VIEW_INACTIVE_USERS'	=> 'निष्क्रिय उपयोक्ता देखें',

	'WELCOME_PHPBB'			=> 'phpBB मे आपका स्वागत हैं',
));

// Inactive Users
$lang = array_merge($lang, array(
	'INACTIVE_DATE'					=> 'निष्क्रिय दिनाँक',
	'INACTIVE_REASON'				=> 'कारण',
	'INACTIVE_REASON_MANUAL'		=> 'Account deactivated by administrator',
	'INACTIVE_REASON_PROFILE'		=> 'Profile details changed',
	'INACTIVE_REASON_REGISTER'		=> 'नये पंजीकृत खाते',
	'INACTIVE_REASON_REMIND'		=> 'Forced user account reactivation',
	'INACTIVE_REASON_UNKNOWN'		=> 'अज्ञात',
	'INACTIVE_USERS'				=> 'निष्क्रिय उपयोक्ता',
	'INACTIVE_USERS_EXPLAIN'		=> 'This is a list of users who have registered but whose accounts are inactive. You can activate, delete or remind (by sending an e-mail) these users if you wish.',
	'INACTIVE_USERS_EXPLAIN_INDEX'	=> 'This is a list of the last 10 registered users who have inactive accounts. A full list is available from the appropriate menu item or by following the link below from where you can activate, delete or remind (by sending an e-mail) these users if you wish.',

	'NO_INACTIVE_USERS'	=> 'कोई निष्क्रिय उपयोक्ता नहीं',

	'SORT_INACTIVE'		=> 'निष्क्रिय दिनाँक',
	'SORT_LAST_VISIT'	=> 'अंतिम भेंट',
	'SORT_REASON'		=> 'कारण',
	'SORT_REG_DATE'		=> 'पंजीकरण दिनाँक',

	'USER_IS_INACTIVE'		=> 'उपयोक्ता निष्क्रिय हैं',
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
	'LOG_ADMIN_AUTH_SUCCESS'	=> '<strong>Successful administration login</strong>',

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

	'LOG_CONFIG_ATTACH'			=> '<strong>Altered attachment सैटिंग</strong>',
	'LOG_CONFIG_AUTH'			=> '<strong>Altered authentication सैटिंग</strong>',
	'LOG_CONFIG_AVATAR'			=> '<strong>Altered avatar सैटिंग</strong>',
	'LOG_CONFIG_COOKIE'			=> '<strong>Altered cookie सैटिंग</strong>',
	'LOG_CONFIG_EMAIL'			=> '<strong>Altered e-mail सैटिंग</strong>',
	'LOG_CONFIG_FEATURES'		=> '<strong>Altered board features</strong>',
	'LOG_CONFIG_LOAD'			=> '<strong>Altered load सैटिंग</strong>',
	'LOG_CONFIG_MESSAGE'		=> '<strong>Altered private message सैटिंग</strong>',
	'LOG_CONFIG_POST'			=> '<strong>Altered post सैटिंग</strong>',
	'LOG_CONFIG_REGISTRATION'	=> '<strong>Altered user registration सैटिंग</strong>',
	'LOG_CONFIG_SEARCH'			=> '<strong>Altered खोज सैटिंग</strong>',
	'LOG_CONFIG_SECURITY'		=> '<strong>Altered security सैटिंग</strong>',
	'LOG_CONFIG_SERVER'			=> '<strong>Altered server सैटिंग</strong>',
	'LOG_CONFIG_SETTINGS'		=> '<strong>Altered board सैटिंग</strong>',
	'LOG_CONFIG_SIGNATURE'		=> '<strong>Altered signature सैटिंग</strong>',
	'LOG_CONFIG_VISUAL'			=> '<strong>Altered visual confirmation सैटिंग</strong>',

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
	'LOG_INACTIVE_DELETE'	=> '<strong>Deleted inactive users</strong><br />» %s',
	'LOG_INACTIVE_REMIND'	=> '<strong>Sent reminder e-mails to inactive users</strong><br />» %s',
	'LOG_INSTALL_CONVERTED'	=> '<strong>Converted from %1$s to phpBB %2$s</strong>',
	'LOG_INSTALL_INSTALLED'	=> '<strong>Installed phpBB %s</strong>',

	'LOG_IP_BROWSER_FORWARDED_CHECK'	=> '<strong>Session IP/browser/X_FORWARDED_FOR check failed</strong><br />»User IP “<em>%1$s</em>” checked against session IP “<em>%2$s</em>”, user browser string “<em>%3$s</em>” checked against session browser string “<em>%4$s</em>” and user X_FORWARDED_FOR string “<em>%5$s</em>” checked against session X_FORWARDED_FOR string “<em>%6$s</em>”.',

	'LOG_JAB_CHANGED'			=> '<strong>Jabber account changed</strong>',
	'LOG_JAB_PASSCHG'			=> '<strong>Jabber password changed</strong>',
	'LOG_JAB_REGISTER'			=> '<strong>Jabber account registered</strong>',
	'LOG_JAB_SETTINGS_CHANGED'	=> '<strong>Jabber सैटिंग changed</strong>',

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

	'LOG_PURGE_CACHE'			=> '<strong>Purged cache</strong>',

	'LOG_RANK_ADDED'		=> '<strong>Added new rank</strong><br />» %s',
	'LOG_RANK_REMOVED'		=> '<strong>Removed rank</strong><br />» %s',
	'LOG_RANK_UPDATED'		=> '<strong>Updated rank</strong><br />» %s',

	'LOG_REASON_ADDED'		=> '<strong>Added report/denial reason</strong><br />» %s',
	'LOG_REASON_REMOVED'	=> '<strong>Removed report/denial reason</strong><br />» %s',
	'LOG_REASON_UPDATED'	=> '<strong>Updated report/denial reason</strong><br />» %s',

	'LOG_RESET_DATE'			=> '<strong>Board start date reset</strong>',
	'LOG_RESET_ONLINE'			=> '<strong>Most users online reset</strong>',
	'LOG_RESYNC_POSTCOUNTS'		=> '<strong>User post counts resynchronised</strong>',
	'LOG_RESYNC_POST_MARKING'	=> '<strong>Dotted topics resynchronised</strong>',
	'LOG_RESYNC_STATS'			=> '<strong>Post, topic and user statistics resynchronised</strong>',

	'LOG_SEARCH_INDEX_CREATED'	=> '<strong>Created खोज index for</strong><br />» %s',
	'LOG_SEARCH_INDEX_REMOVED'	=> '<strong>Removed खोज index for</strong><br />» %s',
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
	'LOG_USER_NEW_PASSWORD'	=> '<strong>Changed user password</strong><br />» %s',
	'LOG_USER_REACTIVATE'	=> '<strong>Forced user account reactivation</strong><br />» %s',
	'LOG_USER_UPDATE_EMAIL'	=> '<strong>User “%1$s” changed e-mail</strong><br />» from “%2$s” to “%3$s”',
	'LOG_USER_UPDATE_NAME'	=> '<strong>Changed username</strong><br />» from “%1$s” to “%2$s”',
	'LOG_USER_USER_UPDATE'	=> '<strong>Updated user details</strong><br />» %s',

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