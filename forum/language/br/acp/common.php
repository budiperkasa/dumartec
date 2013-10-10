<?php
/**
*
* acp_common [Brezhoneg]
*
* @package language
* @version $Id: common.php 8591 2008-06-04 11:40:53Z Kellanved $
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
	'ACP_ADMINISTRATORS'		=> 'Merourien',
	'ACP_ADMIN_LOGS'			=> 'Deizlevr ar merour',
	'ACP_ADMIN_ROLES'			=> 'Perzhioù ar merourien',
	'ACP_ATTACHMENTS'			=> 'Stagadennoù',
	'ACP_ATTACHMENT_SETTINGS'	=> 'Dilennoù ar stagadennoù',
	'ACP_AUTH_SETTINGS'			=> 'Bezañ anavezet',
	'ACP_AUTOMATION'			=> 'Lakaat emgefreek',
	'ACP_AVATAR_SETTINGS'		=> 'Dilennoù ar skeudennigoù',

	'ACP_BACKUP'				=> 'Eilskouerenn-mirout',
	'ACP_BAN'					=> 'Skarzhañ hag Harluiñ',
	'ACP_BAN_EMAILS'			=> 'Harluiñ posteloù',
	'ACP_BAN_IPS'				=> 'Harluiñ IPoù',
	'ACP_BAN_USERNAMES'			=> 'Harluiñ anvioù-izili',
	'ACP_BBCODES'				=> 'Kodoù BBCode',
	'ACP_BOARD_CONFIGURATION'	=> 'Perzhioù ar forom',
	'ACP_BOARD_FEATURES'		=> 'Servijoù ar forom',
	'ACP_BOARD_MANAGEMENT'		=> 'Merañs ar forom',
	'ACP_BOARD_SETTINGS'		=> 'Dilennoù ar forom',
	'ACP_BOTS'					=> 'Furcherien/Robotoù',

	'ACP_CAPTCHA'				=> 'CAPTCHA',

	'ACP_CAT_DATABASE'			=> 'Diaz-titouroù',
	'ACP_CAT_DOT_MODS'			=> '.MODs',
	'ACP_CAT_FORUMS'			=> 'Foromoù',
	'ACP_CAT_GENERAL'			=> 'Dre-vras',
	'ACP_CAT_MAINTENANCE'		=> 'Ober war-dro',
	'ACP_CAT_PERMISSIONS'		=> 'Aotreoù',
	'ACP_CAT_POSTING'			=> 'Kas kemennadennoù',
	'ACP_CAT_STYLES'			=> 'Gwiskadurioù',
	'ACP_CAT_SYSTEM'			=> 'Sistem',
	'ACP_CAT_USERGROUP'			=> 'Izili ha Strolladoù',
	'ACP_CAT_USERS'				=> 'Izili',
	'ACP_CLIENT_COMMUNICATION'	=> 'Kehentiñ gant an implijer',
	'ACP_COOKIE_SETTINGS'		=> 'Dilennoù an toupinoù',
	'ACP_CRITICAL_LOGS'			=> 'Deizlevr ar fazioù',
	'ACP_CUSTOM_PROFILE_FIELDS'	=> 'Takadoù personelaet er bajenn-emginnig',

	'ACP_DATABASE'				=> 'Merañ an diaz-titouroù',
	'ACP_DISALLOW'				=> 'Chom hep aotreañ',
	'ACP_DISALLOW_USERNAMES'	=> 'Chom hep aotreañ anvioù-izili',

	'ACP_EMAIL_SETTINGS'		=> 'Dilennoù ar posteloù',
	'ACP_EXTENSION_GROUPS'		=> 'Merañ ar strolladoù astennoù',

	'ACP_FORUM_BASED_PERMISSIONS'	=> 'Aotreoù diazezet war ar forom',
	'ACP_FORUM_LOGS'				=> 'Deizlevrioù ar forom',
	'ACP_FORUM_MANAGEMENT'			=> 'Merañ ar forom',
	'ACP_FORUM_MODERATORS'			=> 'Kasourien ar forom',
	'ACP_FORUM_PERMISSIONS'			=> 'Aotreoù ar forom',
	'ACP_FORUM_ROLES'				=> 'Perzhioù ar forom',

	'ACP_GENERAL_CONFIGURATION'		=> 'Perzhioù pennañ',
	'ACP_GENERAL_TASKS'				=> 'Oberoù hollek',
	'ACP_GLOBAL_MODERATORS'			=> 'Kasourien hollek',
	'ACP_GLOBAL_PERMISSIONS'		=> 'Aotreoù hollek',
	'ACP_GROUPS'					=> 'Strolladoù',
	'ACP_GROUPS_FORUM_PERMISSIONS'	=> 'Aotreoù strolladoù ar forom',
	'ACP_GROUPS_MANAGE'				=> 'Merañ ar strolladoù',
	'ACP_GROUPS_MANAGEMENT'			=> 'Merañ ar strollad',
	'ACP_GROUPS_PERMISSIONS'		=> 'Aotreoù ar strollad',

	'ACP_ICONS'					=> 'Skeudennigoù ar sujedoù',
	'ACP_ICONS_SMILIES'			=> 'SKeudennigoù ar c\'hemennadennoù/<i>smilies</i>',
	'ACP_IMAGESETS'				=> 'Dastumadoù skeudennoù',
	'ACP_INACTIVE_USERS'		=> 'Izili dizoberiant',
	'ACP_INDEX'					=> 'Roll PMM',

	'ACP_JABBER_SETTINGS'		=> 'Dilennoù Jabber',

	'ACP_LANGUAGE'				=> 'Merañ ar yezhoù',
	'ACP_LANGUAGE_PACKS'		=> 'Pakadoù-yezh',
	'ACP_LOAD_SETTINGS'			=> 'Dilennoù ar c\'hargañ',
	'ACP_LOGGING'				=> 'Bezañ anavezet',

	'ACP_MAIN'					=> 'Roll PMM ',
	'ACP_MANAGE_EXTENSIONS'		=> 'Ober war-dro an astennoù',
	'ACP_MANAGE_FORUMS'			=> 'Ober war-dro ar foromoù',
	'ACP_MANAGE_RANKS'			=> 'Ober war-dro ar renkadoù',
	'ACP_MANAGE_REASONS'		=> 'Ober war-dro an danevelloù hag abegoù an nac\'hadennoù',
	'ACP_MANAGE_USERS'			=> 'Ober war-dro an izili',
	'ACP_MASS_EMAIL'			=> 'Posteloù a-stroll',
	'ACP_MESSAGES'				=> 'Gerigoù Prevez',
	'ACP_MESSAGE_SETTINGS'		=> 'Dilennoù ar Gerigoù Prevez',
	'ACP_MODULE_MANAGEMENT'		=> 'Merañ ar moduloù ouzhpenn',
	'ACP_MOD_LOGS'				=> 'Deizlevr ar c\'hasour',
	'ACP_MOD_ROLES'				=> 'Perzhioù ar c\'hasour',

	'ACP_NO_ITEMS'				=> 'N\'eus elfenn ebet evit c\'hoazh.',

	'ACP_ORPHAN_ATTACHMENTS'	=> 'Stagadennoù emzivad',

	'ACP_PERMISSIONS'			=> 'Aotreoù',
	'ACP_PERMISSION_MASKS'		=> 'Maskloù an aotreoù',
	'ACP_PERMISSION_ROLES'		=> 'Perzhioù an aotreoù',
	'ACP_PERMISSION_TRACE'		=> 'Roudoù an aotreoù',
	'ACP_PHP_INFO'				=> 'Titouroù PHP',
	'ACP_POST_SETTINGS'			=> 'Dilennoù ar c\'has kemennadennoù',
	'ACP_PRUNE_FORUMS'			=> 'Skubañ ar foromoù',
	'ACP_PRUNE_USERS'			=> 'Skubañ izili kuit',
	'ACP_PRUNING'				=> 'Skubañ',

	'ACP_QUICK_ACCESS'			=> 'Tizhout buan',

	'ACP_RANKS'					=> 'Renkadoù',
	'ACP_REASONS'				=> 'Danevelloù hag abegoù an nac\'hadennoù',
	'ACP_REGISTER_SETTINGS'		=> 'Dilennoù an emezeladurioù',

	'ACP_RESTORE'				=> 'Adlakaat en e stumm orin',

	'ACP_SEARCH'				=> 'Perzhioù ar c\'hlask',
	'ACP_SEARCH_INDEX'			=> 'Roll ar c\'hlask',
	'ACP_SEARCH_SETTINGS'		=> 'Dilennoù ar c\'hlask',

	'ACP_SECURITY_SETTINGS'		=> 'Dilennoù surentez',
	'ACP_SERVER_CONFIGURATION'	=> 'Perzhioù ar servijour',
	'ACP_SERVER_SETTINGS'		=> 'Dilennoù ar servijour',
	'ACP_SIGNATURE_SETTINGS'	=> 'Dilennoù ar sinadurioù',
	'ACP_SMILIES'				=> '<i>Smilies</i>',
	'ACP_STYLE_COMPONENTS'		=> 'Elfennoù ar gwiskadurioù',
	'ACP_STYLE_MANAGEMENT'		=> 'Merañ ar gwiskadurioù',
	'ACP_STYLES'				=> 'Gwiskadurioù',

	'ACP_TEMPLATES'				=> 'Patromoù',
	'ACP_THEMES'				=> 'Temoù',

	'ACP_UPDATE'					=> 'Hizivaat',
	'ACP_USERS_FORUM_PERMISSIONS'	=> 'Aotreoù forom an izili',
	'ACP_USERS_LOGS'				=> 'Deizlevr an izili',
	'ACP_USERS_PERMISSIONS'			=> 'Aotreoù an izili',
	'ACP_USER_ATTACH'				=> 'Stagadennoù',
	'ACP_USER_AVATAR'				=> 'Skeudennig',
	'ACP_USER_FEEDBACK'				=> 'Distroioù',
	'ACP_USER_GROUPS'				=> 'Strolladoù',
	'ACP_USER_MANAGEMENT'			=> 'Merañ an izili',
	'ACP_USER_OVERVIEW'				=> 'Rakwelet',
	'ACP_USER_PERM'					=> 'Aotreoù',
	'ACP_USER_PREFS'				=> 'Gwellvezioù',
	'ACP_USER_PROFILE'				=> 'Pajenn-emginnig',
	'ACP_USER_RANK'					=> 'Renkadur',
	'ACP_USER_ROLES'				=> 'Perzhioù an izili',
	'ACP_USER_SECURITY'				=> 'Surentez an izili',
	'ACP_USER_SIG'					=> 'Sinadur',

	'ACP_VC_SETTINGS'					=> 'Dilennoù ar gwiriañ dre welet',
	'ACP_VC_CAPTCHA_DISPLAY'			=> 'Rakwelet ar skeudenn CAPTCHA',
	'ACP_VERSION_CHECK'					=> 'Klask arrevalioù nevesoc\'h',
	'ACP_VIEW_ADMIN_PERMISSIONS'		=> 'Gwelet aotreoù ar verourien',
	'ACP_VIEW_FORUM_MOD_PERMISSIONS'	=> 'Gwelet aotreoù ar gasourien',
	'ACP_VIEW_FORUM_PERMISSIONS'		=> 'Gwelet an aotreoù diazezet war ar forom',
	'ACP_VIEW_GLOBAL_MOD_PERMISSIONS'	=> 'Gwelet aotreoù hollek ar gasourien',
	'ACP_VIEW_USER_PERMISSIONS'			=> 'Gwelet an aotreoù diazezet war an izili',

	'ACP_WORDS'					=> 'Eskemm gerioù',

	'ACTION'				=> 'Oberenn',
	'ACTIONS'				=> 'Oberennoù',
	'ACTIVATE'				=> 'Enaouiñ',
	'ADD'					=> 'Ouzhpennañ',
	'ADMIN'					=> 'Merañ',
	'ADMIN_INDEX'			=> 'Roll ar Merañ',
	'ADMIN_PANEL'			=> 'Panell-Merañ ar Merour',

	'ADM_LOGOUT'			=> 'Dilugañ diouzh pajenn ar Merour',
	'ADM_LOGGED_OUT'		=> 'N\'oc\'h ket luget ken ouzh pajenn ar Merour',

	'BACK'					=> 'Distreiñ',

	'COLOUR_SWATCH'			=> 'Liv diazez internet',
	'CONFIG_UPDATED'		=> 'Kemmet eo bet ar perzhioù.',

	'DEACTIVATE'				=> 'Dizenaouiñ',
	'DIRECTORY_DOES_NOT_EXIST'	=> 'N\'eus ket ouzh an treug “%s” bet roet ganeoc\'h.',
	'DIRECTORY_NOT_DIR'			=> 'An treug “%s” bet roet ganeoc\'h n\'eo ket un teuliad.',
	'DIRECTORY_NOT_WRITABLE'	=> 'N\'haller ket skrivañ war an treug “%s” bet roet ganeoc\'h.',
	'DISABLE'					=> 'Lakaat dizoberiant',
	'DOWNLOAD'					=> 'Pellgargañ',
	'DOWNLOAD_AS'				=> 'Pellgargañ evel',
	'DOWNLOAD_STORE'			=> 'Pellgargañ pe mirout ar restr',
	'DOWNLOAD_STORE_EXPLAIN'	=> 'Mat e vefe  deoc\'h pellgargañ ar restr warn-eeun, pe mirout un eilskouerenn outañ e-barzh an teuliad <samp>store/</samp>.',

	'EDIT'					=> 'Kemm',
	'ENABLE'				=> 'Lakaat oberiant',
	'EXPORT_DOWNLOAD'		=> 'Pellgargañ',
	'EXPORT_STORE'			=> 'Mirout',

	'GENERAL_OPTIONS'		=> 'Dibaboù hollek',
	'GENERAL_SETTINGS'		=> 'Dilennoù hollek',
	'GLOBAL_MASK'			=> 'Maskl an aotreoù hollek',

	'INSTALL'				=> 'Staliañ',
	'IP'					=> 'IP an impijer',
	'IP_HOSTNAME'			=> 'Chomlec\'hioù IP pe anvioù-boderien',

	'LOGGED_IN_AS'			=> 'Dindan an anv-mañ e vezit anavezet gant ar forom :',
	'LOGIN_ADMIN'			=> 'Evit merañ ar forom eo dav deoc\'h bezañ anavezet gantañ.',
	'LOGIN_ADMIN_CONFIRM'	=> 'Dav eo deoc\'h bezañ anavezet un eil gwech evit merañ ar forom.',
	'LOGIN_ADMIN_SUCCESS'	=> 'Anavezet oc\'h bet, hag e voc\'h bremañ adsturiet davet Panell-Merañ ar Merour.',
	'LOOK_UP_FORUM'			=> 'Diuzit ur forom',
	'LOOK_UP_FORUMS_EXPLAIN'=> 'Ouzhpenn ur forom a c\'hellit dibab war an dro.',

	'MANAGE'				=> 'Merañ',
	'MENU_TOGGLE'			=> 'Kuzhat pe diskouezh ar roll war ar c\'hostez',
	'MOVE_DOWN'				=> 'Diskenn',
	'MOVE_UP'				=> 'Pignat',

	'NOTIFY'				=> 'Kelaouiñ',
	'NO_ADMIN'				=> 'N\'oc\'h ket aotreet da verañ ar forom-mañ.',
	'NO_EMAILS_DEFINED'		=> 'N\'eus bet kavet postel reizh ebet.',
	'NO_PASSWORD_SUPPLIED'	=> 'Dav eo deoc\'h reiñ ho ker-tremen evit gallout tizhout Panell-Merañ ar Merour.',

	'OFF'					=> 'Dizimplij',
	'ON'					=> 'Implijet',

	'PARSE_BBCODE'						=> 'Dielfennañ ar BBCode',
	'PARSE_SMILIES'						=> 'Dielfennañ ar <i>smilies</i>',
	'PARSE_URLS'						=> 'Dielfennañ al liammoù',
	'PERMISSIONS_TRANSFERRED'			=> 'Treuzkaset eo bet an aotreoù',
	'PERMISSIONS_TRANSFERRED_EXPLAIN'	=> 'Aotreoù %1$s a zo ganeoc\'h evit poent. Gallout a rit implijout an aotreoù-mañ evit mont war ar forom, met ket evit tizhout Panell-Merañ ar Merour, dre ma n\'eo ket bet treuzkaset aotreoù ar Meranñ. Gallout a rit <a href="%2$s"><strong>distreiñ d\'ho aotreoù orin</strong></a> forzh pegoulz.',
	'PIXEL'								=> 'px',
	'PROCEED_TO_ACP'					=> '%sKenderc\'hel betek Pajenn ar Merour%s',

	'REMIND'							=> 'Reiñ soñj en-dro',
	'RESYNC'							=> 'Adkenamzeriañ',
	'RETURN_TO'							=> 'Distreñ da…',

	'SELECT_ANONYMOUS'		=> 'Diuzit ur gweladenner ket anavezet',
	'SELECT_OPTION'			=> 'Diuzit un dibab',

	'SETTING_TOO_LOW'		=> 'Re izel eo an talvoud bet roet evit “%1$s”. %2$d eo dav lakaat d\'an nebeutañ.',
	'SETTING_TOO_BIG'		=> 'Re uhel eo an talvoud bet roet evit “%1$s”. %2$d eo dav lakaat d\'ar muiañ.',	
	'SETTING_TOO_LONG'		=> 'Re hir eo an talvoud bet roet evit “%1$s”. %2$d eo an hirder vrasañ aotreet.',
	'SETTING_TOO_SHORT'		=> 'Re verr eo an talvoud bet roet evit “%1$s”. %2$d eo an hirder vihanañ aotreet.',

	'UCP'					=> 'Panell-Merañ an Ezel',
	'USERNAMES_EXPLAIN'		=> 'Lakait an anvioù-izili war bep a linenn.',
	'USER_CONTROL_PANEL'	=> 'Panell-Merañ an Ezel',

	'WARNING'				=> 'Kemenn-groñs',
));

// PHP info
$lang = array_merge($lang, array(
	'ACP_PHP_INFO_EXPLAIN'	=> 'War ar bajenn-mañ emañ an titouroù diwar-benn arreval PHP a zo staliet war ar servijour-mañ. Titouroù a zo ivez diwar-benn ar moduloù a zo karget, an talvoudoù a c\'heller ober ganto, hag an dilennoù dre-ziouer. Gallout a ra an titouroù-mañ bezañ talvoudus evit kavout abeg kudennoù \'zo. Lod eus an embregerezhioù a vod lec\'hiennoù a dalc\'ho kuzh titouroù \'zo, evit un abeg a surentez. Aliet oc\'h da chom hep reiñ an titouroù a zo war ar bajenn-mañ, nemet ma vefent goulennet diganeoc\'h gant <a href="http://www.phpbb.com/about/team/">skipailh ofisiel phpBB</a> war ar foromoù kenskoazell.',

	'NO_PHPINFO_AVAILABLE'	=> 'N\'eo ket bet kavet an titouroù diwar-benn ho staliadur ouzh PHP. Lakaet eo bet Phpinfo() dizoberiant evit abegoù surentez moarvat.',
));

// Logs
$lang = array_merge($lang, array(
	'ACP_ADMIN_LOGS_EXPLAIN'	=> 'Amañ emañ listenn an holl oberennoù a zo bet kaset da benn gant merourien ar forom. Gallout a rit o urzhiañ diouzh an anv, an deiziad, an IP, pe an oberenn. M\'ho peus an aotreoù a zere e c\'hellit ivez diverkañ lod eus an titouroù, pe an deizlevr a-bezh.',
	'ACP_CRITICAL_LOGS_EXPLAIN'	=> 'Amañ emañ listenn an oberennoù a zo bet kaset da benn gant ar forom e-unan. En deizlevrmañ e c\'hellit kavout titouroù a sikouroù ac\'hanoc\'h da reizhañ kudennoù \'zo, da skouer ma n\'eus ket bet kaset posteloù \'zo. Gallout a rit o urzhiañ diouzh an anv, an deiziad, an IP, pe an oberenn. M\'ho peus an aotreoù a zere e c\'hellit ivez diverkañ lod eus an titouroù, pe an deizlevr a-bezh.',
	'ACP_MOD_LOGS_EXPLAIN'		=> 'Amañ emañ listenn an holl oberennoù a zo bet kaset da benn gant kasourien ar forom er foromoù, sujedoù, ha kemennadenn, hag ar skarzhadennoù. Gallout a rit o urzhiañ diouzh an anv, an deiziad, an IP, pe an oberenn. M\'ho peus an aotreoù a zere e c\'hellit ivez diverkañ lod eus an titouroù, pe an deizlevr a-bezh.',
	'ACP_USERS_LOGS_EXPLAIN'	=> 'Amañ emañ listenn an holl oberennoù a zo bet kaset da benn gant izili pe diwar o fenn (danevelloù, kemennoù groñs, notennoù an izili).',
	'ALL_ENTRIES'				=> 'An holl roadoù',

	'DISPLAY_LOG'	=> 'Diskouez adalek an hini kent',

	'NO_ENTRIES'	=> 'N\'eus road ebet en deizlevr evit ar prantad-mañ.',

	'SORT_IP'		=> 'chomlec\'h IP',
	'SORT_DATE'		=> 'Deiziad',
	'SORT_ACTION'	=> 'Oberenn',
));

// Index page
$lang = array_merge($lang, array(
	'ADMIN_INTRO'				=> 'TRugarez da vezañ dibabet phpBB evit ho forom. Amañ e vo tu deoc\'h gwelet berr-ha-berr un nebeud sifroù diwar-benn ho forom. Gant al liammoù a zo diouzh an tu kleiz e c\'hellit merañ forzh peseurt lodenn eus ar forom. War bep pajenn e vo titouroù diwar-benn an doare d\'ober gant ar binviji.',
	'ADMIN_LOG'					=> 'Oberennoù diwaezhañ ur merour bet miret en deizlevr',
	'ADMIN_LOG_INDEX_EXPLAIN'	=> 'Amañ e c\'hellit gwelet buan-ha-buan ar pemp oberenn ziwezhañ a zo bet kaset da benn gant ur merour hag enrollet en deizlevr. Evit gwelet an deizlevr a-bezh, klikit war al liamm a zere en tu kleiz pe war an hini a zo amañ-dindan.',
	'AVATAR_DIR_SIZE'			=> 'Ment teuliad ar skeudennigoù',

	'BOARD_STARTED'		=> 'Deiziad krouidigezh ar forom',
	'BOARD_VERSION'		=> 'Arreval ar forom',

	'DATABASE_SERVER_INFO'	=> 'Servijour an diaz-titouroù',
	'DATABASE_SIZE'			=> 'Ment an diaz-titouroù',

	'FILES_PER_DAY'		=> 'Stagadennoù bemdez',
	'FORUM_STATS'		=> 'Statistikoù diwar-benn ar forom',

	'GZIP_COMPRESSION'	=> 'Gwaskañ GZIP',

	'NOT_AVAILABLE'		=> 'Ket kavet',
	'NUMBER_FILES'		=> 'Niver a stagadennoù',
	'NUMBER_POSTS'		=> 'Niver a gemennadennoù',
	'NUMBER_TOPICS'		=> 'Niver a sujedoù',
	'NUMBER_USERS'		=> 'Niver a izili',
	'NUMBER_ORPHAN'		=> 'Stagadennoù emzivad',

	'POSTS_PER_DAY'		=> 'Kemennadennoù bemdez',

	'PURGE_CACHE'			=> 'Skubañ ar vemoret',
	'PURGE_CACHE_CONFIRM'	=> 'Ha sur oc\'h ho peus c\'hoant da c\'houllonderiñ teuliad ar vemoret ?',
	'PURGE_CACHE_EXPLAIN'	=> 'Diverket e vo an holl draoù a zo e-barzh teuliad ar vemoret (cache), ennañ ar patromoù hag ar goulennoù d\'ar servijour.',

	'RESET_DATE'					=> 'Kemm deiziad-krouidigezh ar forom',
	'RESET_DATE_CONFIRM'			=> 'Ha sur oc\'h ho peus c\'hoant da gemm deiziad-krouidigezh ar forom ?',
	'RESET_ONLINE'					=> 'Diverkañ an niver brasañ a izili o vezañ bet asambles war ar memes tro war ar forom',
	'RESET_ONLINE_CONFIRM'			=> 'Ha sur oc\'h ho peus c\'hoant da ziverkañ n niver brasañ a izili o vezañ bet asambles war ar memes tro war ar forom ?',
	'RESYNC_POSTCOUNTS'				=> 'Adkontañ ar c\'hemennadennoù',
	'RESYNC_POSTCOUNTS_EXPLAIN'		=> 'Ne vo kontet nemet ar c\'hemennadennoù a chom en diaz-titouroù, ha ket ar re a zo bet skubet kuit.',
	'RESYNC_POSTCOUNTS_CONFIRM'		=> 'Ha sur oc\'h ho peus c\'hoant da adkontañ ar c\'hemennadennoù ?',
	'RESYNC_POST_MARKING'			=> 'Adjediñ ar roudoù war ar sujedoù',
	'RESYNC_POST_MARKING_CONFIRM'	=> 'Ha sur oc\'h ho peus c\'hoant da adjediñ ar roudoù a zo war ar sujedoù ?',
	'RESYNC_POST_MARKING_EXPLAIN'	=> 'Da gentañ e vo tennet an holl roudoù ouzh ar sujedoù, ha da c\'houde, ne vo merket nemet ar re a zo bet respontet dezho e-pad ar c\'hwec\'h miz diwaezhañ.',
	'RESYNC_STATS'					=> 'Adjediñ ar statistikoù',
	'RESYNC_STATS_CONFIRM'			=> 'Ha sur oc\'h ho peus c\'hoant da adjediñ ar statistikoù ?',
	'RESYNC_STATS_EXPLAIN'			=> 'Adjedet e vo an niver a gemennadennoù, sujedoù, izili, ha restroù.',
	'RUN'							=> 'Loc\'hañ bremañ',

	'STATISTIC'					=> 'Statistik',
	'STATISTIC_RESYNC_OPTIONS'	=> 'Adjediñ ar statistikoù',

	'TOPICS_PER_DAY'	=> 'Sujedoù bemdez',

	'UPLOAD_DIR_SIZE'	=> 'Ment ar stagadennoù',
	'USERS_PER_DAY'		=> 'Izili bemdez',

	'VALUE'					=> 'Talvoud',
	'VIEW_ADMIN_LOG'		=> 'Gwelet deizlevr ar merañs',
	'VIEW_INACTIVE_USERS'	=> 'Gwelet an izili dizoberiant',

	'WELCOME_PHPBB'			=> 'Degemer mat war phpBB',
));

// Inactive Users
$lang = array_merge($lang, array(
	'INACTIVE_DATE'					=> 'Deiziad dizoberiantiz',
	'INACTIVE_REASON'				=> 'Abeg',
	'INACTIVE_REASON_MANUAL'		=> 'Dizenaouet eo bet ar c\'hont gant ar merour',
	'INACTIVE_REASON_PROFILE'		=> 'Kemmet eo bet titouroù ar bajenn-emginnig',
	'INACTIVE_REASON_REGISTER'		=> 'Emañ ar c\'hont o paouez bezañ krouet',
	'INACTIVE_REASON_REMIND'		=> 'Rediet eo bet an ezel da adenaouiñ e gont',
	'INACTIVE_REASON_UNKNOWN'		=> 'Dianav',
	'INACTIVE_USERS'				=> 'Izili dizoberiant',
	'INACTIVE_USERS_EXPLAIN'		=> 'Amañ ez eus ul listenn ouzh an izili a zo emezelet met eo dizoberiant o c\'hont. Gallout a rit enaouiñ pe diverkañ ar c\'hontoù, pe reiñ soñj en-dro d\'an izili (o kas ur postel dezho).',
	'INACTIVE_USERS_EXPLAIN_INDEX'	=> 'Amañ ez eus ul listenn ouzh an 10 ezel diwezhañ eo dizoberiant o c\'hont. Ul listenn glok a zo da gaout o klikañ war al liamm a zere war an tu kleiz, pe o klikañ amañ-dindan. Adal ar bajenn tizhet gant al liamm e vo tu deoc\'h enaouiñ pe diverkañ ar c\'hontoù, pe reiñ soñj en-dro d\'an izili (ho kas ur postel dezho).',

	'NO_INACTIVE_USERS'	=> 'Ezel dizoberiant ebet',

	'SORT_INACTIVE'		=> 'Deiziad dizoberiantiz',
	'SORT_LAST_VISIT'	=> 'Gweladenn ziwaezhañ',
	'SORT_REASON'		=> 'Abeg',
	'SORT_REG_DATE'		=> 'Deiziad emezelañ',

	'USER_IS_INACTIVE'		=> 'Dizoberiant eo kont an ezel',
));

// Log Entries
$lang = array_merge($lang, array(
	'LOG_ACL_ADD_USER_GLOBAL_U_'		=> '<strong>Ouzhpennet pe kemmet aotreoù an ezel</strong><br />» %s',
	'LOG_ACL_ADD_GROUP_GLOBAL_U_'		=> '<strong>Ouzhpennet pe kemmet aotreoù an ezel er strollad</strong><br />» %s',
	'LOG_ACL_ADD_USER_GLOBAL_M_'		=> '<strong>Ouzhpennet pe kemmet aotreoù kasour hollek an ezel</strong><br />» %s',
	'LOG_ACL_ADD_GROUP_GLOBAL_M_'		=> '<strong>Ouzhpennet pe kemmet aotreoù merour hollek ar strollad</strong><br />» %s',
	'LOG_ACL_ADD_USER_GLOBAL_A_'		=> '<strong>Ouzhpennet pe kemmet aotreoù merour an ezel</strong><br />» %s',
	'LOG_ACL_ADD_GROUP_GLOBAL_A_'		=> '<strong>Ouzhpennet pe kemmetaotreoù merour ar strollad</strong><br />» %s',

	'LOG_ACL_ADD_ADMIN_GLOBAL_A_'		=> '<strong>Ouzhpennet pe kemmet Merourien</strong><br />» %s',
	'LOG_ACL_ADD_MOD_GLOBAL_M_'			=> '<strong>Ouzhpennet pe kemmet Merourien Hollek</strong><br />» %s',

	'LOG_ACL_ADD_USER_LOCAL_F_'			=> '<strong>Ouzhpennet pe kemmet doare an ezel da dizhout ar forom</strong> war %1$s<br />» %2$s',
	'LOG_ACL_ADD_USER_LOCAL_M_'			=> '<strong>Ouzhpennet pe kemmet doare an ezel da vezañ kasour</strong> war %1$s<br />» %2$s',
	'LOG_ACL_ADD_GROUP_LOCAL_F_'		=> '<strong>Ouzhpennet pe kemmet doare ar strollad da dizhout ar forom</strong> war %1$s<br />» %2$s',
	'LOG_ACL_ADD_GROUP_LOCAL_M_'		=> '<strong>Ouzhpennet pe kemmet doare ar strollad da vezañ kasour</strong> war %1$s<br />» %2$s',

	'LOG_ACL_ADD_MOD_LOCAL_M_'			=> '<strong>Ouzhpennet pe kemmet ar gasourien</strong> war %1$s<br />» %2$s',
	'LOG_ACL_ADD_FORUM_LOCAL_F_'		=> '<strong>Ouzhpennet pe kemmet aotreoù war ar forom</strong> %1$s<br />» %2$s',

	'LOG_ACL_DEL_ADMIN_GLOBAL_A_'		=> '<strong>Tennet Merourien</strong><br />» %s',
	'LOG_ACL_DEL_MOD_GLOBAL_M_'			=> '<strong>Tennet Kasourien Hollek</strong><br />» %s',
	'LOG_ACL_DEL_MOD_LOCAL_M_'			=> '<strong>Tenent kasourien</strong> war %1$s<br />» %2$s',
	'LOG_ACL_DEL_FORUM_LOCAL_F_'		=> '<strong>Tennet aotreoù an Ezel/ar Strollad </strong> war %1$s<br />» %2$s',

	'LOG_ACL_TRANSFER_PERMISSIONS'		=> '<strong>Treuzkas aotreoù adalek</strong><br />» %s',
	'LOG_ACL_RESTORE_PERMISSIONS'		=> '<strong>Kemeret e aotreoù en-dro goude bezañ implijet re</strong><br />» %s',

	'LOG_ADMIN_AUTH_FAIL'		=> '<strong>Klasket ha c\'hwitet bezañ anavezet evit merañ</strong>',
	'LOG_ADMIN_AUTH_SUCCESS'	=> '<strong>Deuet a-benn da vezañ anavezet evit merañ</strong>',

	'LOG_ATTACHMENTS_DELETED'	=> '<strong>Diverket stagadennoù an ezel</strong><br />» %s',

	'LOG_ATTACH_EXT_ADD'		=> '<strong>Ouzhpennet pe kemmet astenn ar stagadenn</strong><br />» %s',
	'LOG_ATTACH_EXT_DEL'		=> '<strong>Tennet astenn ar stagadenn</strong><br />» %s',
	'LOG_ATTACH_EXT_UPDATE'		=> '<strong>Kemmet astenn ar stagadenn</strong><br />» %s',
	'LOG_ATTACH_EXTGROUP_ADD'	=> '<strong>Ouzhpennet ar strollad astennoù</strong><br />» %s',
	'LOG_ATTACH_EXTGROUP_EDIT'	=> '<strong>Kemmet ar strollad astennoù</strong><br />» %s',
	'LOG_ATTACH_EXTGROUP_DEL'	=> '<strong>Tennet ar strollad astennoù</strong><br />» %s',
	'LOG_ATTACH_FILEUPLOAD'		=> '<strong>Liammet ur stagadenn emzivad ouzh ar gemennadenn </strong><br />» niverenn %1$d - %2$s',
	'LOG_ATTACH_ORPHAN_DEL'		=> '<strong>Diverket ar stagadenn emzivad</strong><br />» %s',

	'LOG_BAN_EXCLUDE_USER'	=> '<strong>Paouezet harlu un ezel</strong> gant an abeg “<em>%1$s</em>”<br />» %2$s',
	'LOG_BAN_EXCLUDE_IP'	=> '<strong>Paouezet harlu un IP</strong> gant an abeg “<em>%1$s</em>”<br />» %2$s',
	'LOG_BAN_EXCLUDE_EMAIL' => '<strong>Paouezet harlu ur postel</strong> gant an abeg “<em>%1$s</em>”<br />» %2$s',
	'LOG_BAN_USER'			=> '<strong>Skarzhet un ezel</strong> gant an abeg “<em>%1$s</em>”<br />» %2$s',
	'LOG_BAN_IP'			=> '<strong>Harluet un IP</strong> gant an abeg “<em>%1$s</em>”<br />» %2$s',
	'LOG_BAN_EMAIL'			=> '<strong>Harluet ur postel</strong> gant an abeg “<em>%1$s</em>”<br />» %2$s',
	'LOG_UNBAN_USER'		=> '<strong>Paouezet harlu an ezel</strong><br />» %s',
	'LOG_UNBAN_IP'			=> '<strong>Paouezet harlu an IP</strong><br />» %s',
	'LOG_UNBAN_EMAIL'		=> '<strong>Paouezet harlu ar postel</strong><br />» %s',

	'LOG_BBCODE_ADD'		=> '<strong>Ouzhpennet ar BBCode</strong><br />» %s',
	'LOG_BBCODE_EDIT'		=> '<strong>Kemmet ar BBCode</strong><br />» %s',
	'LOG_BBCODE_DELETE'		=> '<strong>Diverket ar BBCode</strong><br />» %s',

	'LOG_BOT_ADDED'		=> '<strong>Ouzhpennet ar robot</strong><br />» %s',
	'LOG_BOT_DELETE'	=> '<strong>Diverket ar robot</strong><br />» %s',
	'LOG_BOT_UPDATED'	=> '<strong>Kemmet ar robot</strong><br />» %s',

	'LOG_CLEAR_ADMIN'		=> '<strong>Diverket deizlevr ar verourien</strong>',
	'LOG_CLEAR_CRITICAL'	=> '<strong>Diverket deizlevr ar fazioù</strong>',
	'LOG_CLEAR_MOD'			=> '<strong>Diverket deizlevr ar gasourien</strong>',
	'LOG_CLEAR_USER'		=> '<strong>Diverket deizlevr an ezel</strong><br />» %s',
	'LOG_CLEAR_USERS'		=> '<strong>Diverket deizlevrioù an izili</strong>',

	'LOG_CONFIG_ATTACH'			=> '<strong>Kemmet dilennoù ar stagadennoù</strong>',
	'LOG_CONFIG_AUTH'			=> '<strong>Kemmet an dilennoù evit bezañ anavezet gant ar forom</strong>',
	'LOG_CONFIG_AVATAR'			=> '<strong>Kemmet dilennoù ar skeudennigoù emginnig</strong>',
	'LOG_CONFIG_COOKIE'			=> '<strong>Kemmet dilennoù an toupinoù</strong>',
	'LOG_CONFIG_EMAIL'			=> '<strong>Kemmet dilennoù ar posteloù</strong>',
	'LOG_CONFIG_FEATURES'		=> '<strong>Kemmet servijoù ar forom</strong>',
	'LOG_CONFIG_LOAD'			=> '<strong>Kemmet dilennoù ar c\'hargañ</strong>',
	'LOG_CONFIG_MESSAGE'		=> '<strong>Kemmet dilennoù ar c\'has Gerigoù Prevez</strong>',
	'LOG_CONFIG_POST'			=> '<strong>Kemmet dilennoù ar c\'has kemennadennoù</strong>',
	'LOG_CONFIG_REGISTRATION'	=> '<strong>Kemmet dilennoù emezelañ an izili</strong>',
	'LOG_CONFIG_SEARCH'			=> '<strong>Kemmet dilennoù ar c\'hlask</strong>',
	'LOG_CONFIG_SECURITY'		=> '<strong>Kemmet an dilennoù surentez</strong>',
	'LOG_CONFIG_SERVER'			=> '<strong>Kemmet dilennoù ar servijour</strong>',
	'LOG_CONFIG_SETTINGS'		=> '<strong>Kemmet dilennoù ar forom</strong>',
	'LOG_CONFIG_SIGNATURE'		=> '<strong>Kemmet dilennoù ar sinadurioù</strong>',
	'LOG_CONFIG_VISUAL'			=> '<strong>Kemmet dilennoù ar gwiriañ dre welet</strong>',

	'LOG_APPROVE_TOPIC'			=> '<strong>Degemeret ar sujed</strong><br />» %s',
	'LOG_BUMP_TOPIC'			=> '<strong>Pignet ar sujed </strong><br />» %s',
	'LOG_DELETE_POST'			=> '<strong>Diverket ar gemennadenn</strong><br />» %s',
	'LOG_DELETE_TOPIC'			=> '<strong>Diverket ar sujed</strong><br />» %s',
	'LOG_FORK'					=> '<strong>Eilskoueriet ar sujed</strong><br />» from %s',
	'LOG_LOCK'					=> '<strong>Prennet ar sujed</strong><br />» %s',
	'LOG_LOCK_POST'				=> '<strong>Prennet ar gemennadenn</strong><br />» %s',
	'LOG_MERGE'					=> '<strong>Kendeuzet kemennadennoù</strong> into topic<br />» %s',
	'LOG_MOVE'					=> '<strong>Dilec\'hiet ar sujed</strong><br />» from %s',
	'LOG_POST_APPROVED'			=> '<strong>Degemeret ar gemennadenn</strong><br />» %s',
	'LOG_POST_DISAPPROVED'		=> '<strong>Nac\'het ar gemennadenn “%1$s” war abeg</strong><br />» %2$s',
	'LOG_POST_EDITED'			=> '<strong>Kemmet ar gemennadenn “%1$s” bet skrivet gant</strong><br />» %2$s',
	'LOG_REPORT_CLOSED'			=> '<strong>Serret an danevell</strong><br />» %s',
	'LOG_REPORT_DELETED'		=> '<strong>Diverket an danevell</strong><br />» %s',
	'LOG_SPLIT_DESTINATION'		=> '<strong>Dilec\'hiet kemennadennoù bet dispartiet</strong><br />» betek %s',
	'LOG_SPLIT_SOURCE'			=> '<strong>Dispartiet kemennadennoù</strong><br />» from %s',

	'LOG_TOPIC_DELETED'			=> '<strong>Diverket ar sujed</strong><br />» %s',
	'LOG_TOPIC_APPROVED'		=> '<strong>Degemeret ar sujed</strong><br />» %s',
	'LOG_TOPIC_DISAPPROVED'		=> '<strong>Nac\'het ar sujed “%1$s” war abeg</strong><br />%2$s',
	'LOG_TOPIC_RESYNC'			=> '<strong>Lakaet konterien ar sujedoù da adober o c\'hontoù</strong><br />» %s',
	'LOG_TOPIC_TYPE_CHANGED'	=> '<strong>Kemmet doare ar sujed</strong><br />» %s',
	'LOG_UNLOCK'				=> '<strong>Dibrennet ar sujed</strong><br />» %s',
	'LOG_UNLOCK_POST'			=> '<strong>Dibrennet ar gemennadenn</strong><br />» %s',

	'LOG_DISALLOW_ADD'		=> '<strong>Ouzhpennet un anv ezel diaotre</strong><br />» %s',
	'LOG_DISALLOW_DELETE'	=> '<strong>Diverket un anv ezel diaotre</strong>',

	'LOG_DB_BACKUP'			=> '<strong>Savet un eilskouerenn-mirout ouzh an diaz-titouroù</strong>',
	'LOG_DB_DELETE'			=> '<strong>Diverket un eilskouerenn-mirout ouzh an diaz-titouroù</strong>',
	'LOG_DB_RESTORE'		=> '<strong>Adkarget un eilskouerenn-mirout ouzh an diaz-titouroù</strong>',

	'LOG_DOWNLOAD_EXCLUDE_IP'	=> '<strong>Harluet un IP/ur boder diouzh listenn ar pellgargañ</strong><br />» %s',
	'LOG_DOWNLOAD_IP'			=> '<strong>Ouzhpennet un IP/ur boder ouzh listenn ar pellgargañ</strong><br />» %s',
	'LOG_DOWNLOAD_REMOVE_IP'	=> '<strong>Tennet un IP/ur boder diouzh listenn ar pellgargañ</strong><br />» %s',

	'LOG_ERROR_JABBER'		=> '<strong>Fazi gant Jabber</strong><br />» %s',
	'LOG_ERROR_EMAIL'		=> '<strong>Fazi postel</strong><br />» %s',

	'LOG_FORUM_ADD'							=> '<strong>Krouet ar forom nevez</strong><br />» %s',
	'LOG_FORUM_DEL_FORUM'					=> '<strong>Diverket ar forom</strong><br />» %s',
	'LOG_FORUM_DEL_FORUMS'					=> '<strong>Diverket ar forom hag e isforomoù</strong><br />» %s',
	'LOG_FORUM_DEL_MOVE_FORUMS'				=> '<strong>Diverket ar forom ha dilec\'hiet e isforomoù</strong> betek %1$s<br />» %2$s',
	'LOG_FORUM_DEL_MOVE_POSTS'				=> '<strong>Diverket ar forom ha dilec\'hiet e gemennadennoù</strong> betek %1$s<br />» %2$s',
	'LOG_FORUM_DEL_MOVE_POSTS_FORUMS'		=> '<strong>Diverket ar forom hag e isforomoù, dilec\'hiet e gemennadennoù</strong> davet %1$s<br />» %2$s',
	'LOG_FORUM_DEL_MOVE_POSTS_MOVE_FORUMS'	=> '<strong>Diverket ar forom, dilec\'hiet e gemennadennoù</strong> davet %1$s <strong>hag e isforomoù</strong> davet %2$s<br />» %3$s',
	'LOG_FORUM_DEL_POSTS'					=> '<strong>Diverket ar forom hag e gemennadennoù</strong><br />» %s',
	'LOG_FORUM_DEL_POSTS_FORUMS'			=> '<strong>Diverketzili ar forom, e gemennadennoù, hag e isforomoù</strong><br />» %s',
	'LOG_FORUM_DEL_POSTS_MOVE_FORUMS'		=> '<strong>Diverket ar forom hag e gemennadennoù, dilec\'hiet e isforomoù</strong> davet %1$s<br />» %2$s',
	'LOG_FORUM_EDIT'						=> '<strong>Kemmet titouroù ar forom</strong><br />» %s',
	'LOG_FORUM_MOVE_DOWN'					=> '<strong>Dilec\'hiet ar forom</strong> %1$s <strong>davet an traoñ</strong> %2$s',
	'LOG_FORUM_MOVE_UP'						=> '<strong>Dilec\'hiet ar forom</strong> %1$s <strong>davet an nec\'h</strong> %2$s',
	'LOG_FORUM_SYNC'						=> '<strong>Adkenamzeriet ar forom</strong><br />» %s',

	'LOG_GROUP_CREATED'		=> '<strong>Krouet ar strollad izili</strong><br />» %s',
	'LOG_GROUP_DEFAULTS'	=> '<strong>Lakaet ar strollad “%1$s” d\'an hini dre ziouer evit an izili</strong><br />» %2$s',
	'LOG_GROUP_DELETE'		=> '<strong>Diverket ar strollad izili</strong><br />» %s',
	'LOG_GROUP_DEMOTED'		=> '<strong>Tennet ar re a zo e-penn ar strollad izili</strong> %1$s<br />» %2$s',
	'LOG_GROUP_PROMOTED'	=> '<strong>Lakaet izili e-penn ar strollad-izili</strong> %1$s<br />» %2$s',
	'LOG_GROUP_REMOVE'		=> '<strong>Tennet izili diouzh ar strollad-izili</strong> %1$s<br />» %2$s',
	'LOG_GROUP_UPDATED'		=> '<strong>Kemmet titouroù ar strollad-izili</strong><br />» %s',
	'LOG_MODS_ADDED'		=> '<strong>Ouzhpennet tud e-penn ar strollad-i</strong> %1$s<br />» %2$s',
	'LOG_USERS_APPROVED'	=> '<strong>Degemeret unn ezel er strollad-izili</strong> %1$s<br />» %2$s',
	'LOG_USERS_ADDED'		=> '<strong>Ouzhpennet izili er strollad-izili</strong> %1$s<br />» %2$s',

	'LOG_IMAGESET_ADD_DB'			=> '<strong>Ouzhpennet an dastumad skeudennoù en diaz-titouroù</strong><br />» %s',
	'LOG_IMAGESET_ADD_FS'			=> '<strong>Ouzhpennet an dastumad skeudennoù e-touez ar restroù</strong><br />» %s',
	'LOG_IMAGESET_DELETE'			=> '<strong>Diverket an dastumad skeudennoù</strong><br />» %s',
	'LOG_IMAGESET_EDIT_DETAILS'		=> '<strong>Kemmet perzhioù an datumad skeudennoù</strong><br />» %s',
	'LOG_IMAGESET_EDIT'				=> '<strong>Edited imageset</strong><br />» %s',
	'LOG_IMAGESET_EXPORT'			=> '<strong>Ezporzhiet an dastumad skeudennoù</strong><br />» %s',
	'LOG_IMAGESET_LANG_MISSING'		=> '<strong>Mankout a ra lec\'hiadur an dastumad-skeudennoù “%2$s”</strong><br />» %1$s',
	'LOG_IMAGESET_LANG_REFRESHED'	=> '<strong>Hizivaet lec\'hiadur “%2$s” en dastumad skeudennoù</strong><br />» %1$s',
	'LOG_IMAGESET_REFRESHED'		=> '<strong>Hizivaet an dastumad skeudennoù</strong><br />» %s',

	'LOG_INACTIVE_ACTIVATE'	=> '<strong>Lakaet oberiant izili na oant ket</strong><br />» %s',
	'LOG_INACTIVE_DELETE'	=> '<strong>Diverket izili dizoberiant</strong><br />» %s',
	'LOG_INACTIVE_REMIND'	=> '<strong>Kaset ur postel evit reiñ soñj en-drp d\'an izili dizoberiant</strong><br />» %s',
	'LOG_INSTALL_CONVERTED'	=> '<strong>Troet eus %1$s davet phpBB %2$s</strong>',
	'LOG_INSTALL_INSTALLED'	=> '<strong>Staliet phpBB %s</strong>',

	'LOG_IP_BROWSER_FORWARDED_CHECK'	=> '<strong>Ur fazi a zo bet en enklask IP/browser/X_FORWARDED_FOR </strong><br />»Keñveriet e voe IP an ezel “<em>%1$s</em>” ouzh an hini “<em>%2$s</em>”, chadenn merdeer an ezel “<em>%3$s</em>” ouzh “<em>%4$s</em>” ha chadenn X_FORWARDED_FOR an ezel “<em>%5$s</em>” ouzh hini X_FORWARDED_FOR “<em>%6$s</em>”.',

	'LOG_JAB_CHANGED'			=> '<strong>Kemmet ar c\'hont Jabber</strong>',
	'LOG_JAB_PASSCHG'			=> '<strong>Kemmet ar ger-tremen Jabber</strong>',
	'LOG_JAB_REGISTER'			=> '<strong>Krouet ur c\'hont Jabber</strong>',
	'LOG_JAB_SETTINGS_CHANGED'	=> '<strong>Chehet dilennoù Jabber</strong>',

	'LOG_LANGUAGE_PACK_DELETED'		=> '<strong>Diverket ur pakad yezh</strong><br />» %s',
	'LOG_LANGUAGE_PACK_INSTALLED'	=> '<strong>Staliet ur pakad yezh</strong><br />» %s',
	'LOG_LANGUAGE_PACK_UPDATED'		=> '<strong>Hizivaet titouroù diwar-benn ar pakad yezh</strong><br />» %s',
	'LOG_LANGUAGE_FILE_REPLACED'	=> '<strong>Erlec\'hiet ar restr-yezh</strong><br />» %s',
	'LOG_LANGUAGE_FILE_SUBMITTED'	=> '<strong>Kinniget ur restr-yezh, ha lakaet anezhañ en teuliad-mirout</strong><br />» %s',

	'LOG_MASS_EMAIL'		=> '<strong>Kaset ur postel a-stroll</strong><br />» %s',

	'LOG_MCP_CHANGE_POSTER'	=> '<strong>Cheñchet aozer ar sujed “%1$s”</strong><br />» from %2$s to %3$s',

	'LOG_MODULE_DISABLE'	=> '<strong>Lakaet dizoberiant ar modul</strong><br />» %s',
	'LOG_MODULE_ENABLE'		=> '<strong>Lakaet oberiant ar modul</strong><br />» %s',
	'LOG_MODULE_MOVE_DOWN'	=> '<strong>Diskennet ar modul</strong><br />» %1$s dindan %2$s',
	'LOG_MODULE_MOVE_UP'	=> '<strong>Pignet ar modul</strong><br />» %1$s dreist %2$s',
	'LOG_MODULE_REMOVED'	=> '<strong>Tennet ar modul</strong><br />» %s',
	'LOG_MODULE_ADD'		=> '<strong>Ouzhpennet ar modul</strong><br />» %s',
	'LOG_MODULE_EDIT'		=> '<strong>Kemmet ar modul</strong><br />» %s',

	'LOG_A_ROLE_ADD'		=> '<strong>Ouzhpennet ur perzh d\'ar merour</strong><br />» %s',
	'LOG_A_ROLE_EDIT'		=> '<strong>Kemmet ur perzh eus ar merour</strong><br />» %s',
	'LOG_A_ROLE_REMOVED'	=> '<strong>Tennet ur perzh diouzh ar merour</strong><br />» %s',
	'LOG_F_ROLE_ADD'		=> '<strong>Ouzhpennet ur perzh d\'ar forom</strong><br />» %s',
	'LOG_F_ROLE_EDIT'		=> '<strong>Kemmet ur perzh ouzh ar forom</strong><br />» %s',
	'LOG_F_ROLE_REMOVED'	=> '<strong>Tenent ur perzh diouzh ar forom</strong><br />» %s',
	'LOG_M_ROLE_ADD'		=> '<strong>Ouzhpennet ur perzh d\'ar c\'hasour</strong><br />» %s',
	'LOG_M_ROLE_EDIT'		=> '<strong>Kemmet ur perzh eus ar c\'hasour</strong><br />» %s',
	'LOG_M_ROLE_REMOVED'	=> '<strong>Tennet ur perzh diouzh ar c\'hasour</strong><br />» %s',
	'LOG_U_ROLE_ADD'		=> '<strong>Ouzhpennet ur perzh d\'an ezel</strong><br />» %s',
	'LOG_U_ROLE_EDIT'		=> '<strong>Kemmet ur perzh ouzh an ezel</strong><br />» %s',
	'LOG_U_ROLE_REMOVED'	=> '<strong>Tennet ur perzh diouzh an ezel</strong><br />» %s',

	'LOG_PROFILE_FIELD_ACTIVATE'	=> '<strong>Lakaet un dakad oberiant er bajenn-emginnig</strong><br />» %s',
	'LOG_PROFILE_FIELD_CREATE'		=> '<strong>Ouzhpennet un dakad er bajenn-emginnig</strong><br />» %s',
	'LOG_PROFILE_FIELD_DEACTIVATE'	=> '<strong>Lakaet un dakad dizoberiant er bajenn-emginnig</strong><br />» %s',
	'LOG_PROFILE_FIELD_EDIT'		=> '<strong>Kemmet un dakad er bajenn-emginnig</strong><br />» %s',
	'LOG_PROFILE_FIELD_REMOVED'		=> '<strong>Tennet un takad diouzh ar bajenn-emginnig</strong><br />» %s',

	'LOG_PRUNE'					=> '<strong>Skubet ar foromoù</strong><br />» %s',
	'LOG_AUTO_PRUNE'			=> '<strong>Emskubet e oar foromoù</strong><br />» %s',
	'LOG_PRUNE_USER_DEAC'		=> '<strong>Lakaet izili dizoberiant</strong><br />» %s',
	'LOG_PRUNE_USER_DEL_DEL'	=> '<strong>Skubet izili kuit ha diverket kemennadennoù</strong><br />» %s',
	'LOG_PRUNE_USER_DEL_ANON'	=> '<strong>Skubet izili kuit ha dalc\'het o c\'hemennadennoù</strong><br />» %s',

	'LOG_PURGE_CACHE'			=> '<strong>Skubet ar vemoret</strong>',

	'LOG_RANK_ADDED'		=> '<strong>Ouzhpennet ur renkad nevez</strong><br />» %s',
	'LOG_RANK_REMOVED'		=> '<strong>Tennet ur renkad</strong><br />» %s',
	'LOG_RANK_UPDATED'		=> '<strong>Hizivaet ur renkad</strong><br />» %s',

	'LOG_REASON_ADDED'		=> '<strong>Ouzhpennet un danevell pe abegoù d\'an nac\'hadenn</strong><br />» %s',
	'LOG_REASON_REMOVED'	=> '<strong>Tennet un danevell pe abegoù d\'an nac\'hadenn</strong><br />» %s',
	'LOG_REASON_UPDATED'	=> '<strong>Kemmet un danevell pe abegoù d\'an nac\'hadenn</strong><br />» %s',

	'LOG_REFERER_INVALID'		=> '<strong>N\'eo ket bet asantet al lec\'hienn-orin</strong><br />» Ouzh “<em>%1$s</em>” e oa ar goulenn o tont. Nac\'het eo bet, ha klozet eo bet ar weladenn.',
	'LOG_RESET_DATE'			=> '<strong>Kemmet deiziad-krouidigezh ar forom</strong>',
	'LOG_RESET_ONLINE'			=> '<strong>Diverket an niver brasañ a izili o vezañ bet asambles war ar forom er memes koulz</strong>',
	'LOG_RESYNC_POSTCOUNTS'		=> '<strong>Adjedet an niver a gemennadennoù</strong>',
	'LOG_RESYNC_POST_MARKING'	=> '<strong>Adjedet an niver a sujedoù lakaet ur roud warno</strong>',
	'LOG_RESYNC_STATS'			=> '<strong>Adjedet ar statistikoù diwar-benn ar c\'hasadennoù, ar sujedoù, hag an izili</strong>',

	'LOG_SEARCH_INDEX_CREATED'	=> '<strong>Krouet ur roll klask evit</strong><br />» %s',
	'LOG_SEARCH_INDEX_REMOVED'	=> '<strong>Diverket ar roll klask evit</strong><br />» %s',
	'LOG_STYLE_ADD'				=> '<strong>Ouzhpennet ur gwiskadur nevez</strong><br />» %s',
	'LOG_STYLE_DELETE'			=> '<strong>Diverket ar gwiskadur</strong><br />» %s',
	'LOG_STYLE_EDIT_DETAILS'	=> '<strong>Kemmet ar gwiskadur</strong><br />» %s',
	'LOG_STYLE_EXPORT'			=> '<strong>Ezporzhet ur gwiskadur</strong><br />» %s',

	'LOG_TEMPLATE_ADD_DB'			=> '<strong>Ouzhpennet un dastumad patromoù nevez d\'an diaz-titouroù</strong><br />» %s',
	'LOG_TEMPLATE_ADD_FS'			=> '<strong>Ouzhpennet un dastumad patromoù nevez e-touez ar restroù</strong><br />» %s',
	'LOG_TEMPLATE_CACHE_CLEARED'	=> '<strong>Diverket ar stummoù eus ar restroù-patrom a oa er vemoret, e-barzh an dastumad patromoù <em>%1$s</em></strong><br />» %2$s',
	'LOG_TEMPLATE_DELETE'			=> '<strong>Diverket an dastumad patromoù</strong><br />» %s',
	'LOG_TEMPLATE_EDIT'				=> '<strong>Kemmet un dastumad patromoù<em>%1$s</em></strong><br />» %2$s',
	'LOG_TEMPLATE_EDIT_DETAILS'		=> '<strong>Kemmet titouroù ar patrom</strong><br />» %s',
	'LOG_TEMPLATE_EXPORT'			=> '<strong>Ezporzhiet un dastumad patromoù</strong><br />» %s',
	'LOG_TEMPLATE_REFRESHED'		=> '<strong>Hizivaet un dastumad patromoù</strong><br />» %s',

	'LOG_THEME_ADD_DB'			=> '<strong>Ouzhpennet un tem nevez d\'an diaz-titouroù</strong><br />» %s',
	'LOG_THEME_ADD_FS'			=> '<strong>Ouzhpennet an tem nevez e-touez ar restroù</strong><br />» %s',
	'LOG_THEME_DELETE'			=> '<strong>Diverket an tem</strong><br />» %s',
	'LOG_THEME_EDIT_DETAILS'	=> '<strong>Kemmet titouroù an tem</strong><br />» %s',
	'LOG_THEME_EDIT'			=> '<strong>Kemmet an tem<em>%1$s</em></strong>',
	'LOG_THEME_EDIT_FILE'		=> '<strong>Kemmet an tem <em>%1$s</em></strong><br />» Kemmet ar restr <em>%2$s</em>',
	'LOG_THEME_EXPORT'			=> '<strong>Ezporzhiet an tem</strong><br />» %s',
	'LOG_THEME_REFRESHED'		=> '<strong>Hizivaet an tem</strong><br />» %s',

	'LOG_UPDATE_DATABASE'	=> '<strong>Hizivaet an diaz-titouroù eus ar stumm %1$s d\'ar stumm %2$s</strong>',
	'LOG_UPDATE_PHPBB'		=> '<strong>Hizivaet phpBB eus an arreval %1$s d\'an arreval %2$s</strong>',

	'LOG_USER_ACTIVE'		=> '<strong>Lakaet oberiant an ezel</strong><br />» %s',
	'LOG_USER_BAN_USER'		=> '<strong>Skarzhet un ezel dre bajenn verañ an izili</strong> war abeg “<em>%1$s</em>”<br />» %2$s',
	'LOG_USER_BAN_IP'		=> '<strong>Harluet un IP dre bajenn verañ an izili</strong> war abeg “<em>%1$s</em>”<br />» %2$s',
	'LOG_USER_BAN_EMAIL'	=> '<strong>Harluet ur postel dre bajenn verañ an izili</strong> war abeg “<em>%1$s</em>”<br />» %2$s',
	'LOG_USER_DELETED'		=> '<strong>Siverket an ezel</strong><br />» %s',
	'LOG_USER_DEL_ATTACH'	=> '<strong>Tennet an holl stagadennoù a oa bet graet gant an ezel</strong><br />» %s',
	'LOG_USER_DEL_AVATAR'	=> '<strong>Tennet skeudennig-emginnig an ezel</strong><br />» %s',
	'LOG_USER_DEL_POSTS'	=> '<strong>Tennet holl gemennadennoù an ezel</strong><br />» %s',
	'LOG_USER_DEL_SIG'		=> '<strong>Tennet sinadur an ezel</strong><br />» %s',
	'LOG_USER_INACTIVE'		=> '<strong>Lakaet dizoberiant an ezel</strong><br />» %s',
	'LOG_USER_MOVE_POSTS'	=> '<strong>Dilec\'hiet kemennadennoù an ezel</strong><br />» kaset gant “%1$s” war ar forom “%2$s”',
	'LOG_USER_NEW_PASSWORD'	=> '<strong>Kemmet ger-tremen an ezel</strong><br />» %s',
	'LOG_USER_REACTIVATE'	=> '<strong>Rediet kont an ezel da vezañ enaouet en-dro</strong><br />» %s',
	'LOG_USER_UPDATE_EMAIL'	=> '<strong>Tremenet eo an ezel “%1$s” eus ar postel</strong><br />» “%2$s” d\'an hini “%3$s”',
	'LOG_USER_UPDATE_NAME'	=> '<strong>Cheñchet anv-ezel</strong><br />» eus “%1$s” da “%2$s”',
	'LOG_USER_USER_UPDATE'	=> '<strong>Kemmet titouroù an ezel</strong><br />» %s',

	'LOG_USER_ACTIVE_USER'		=> '<strong>Gziriet kont an ezel</strong>',
	'LOG_USER_DEL_AVATAR_USER'	=> '<strong>Tenent skeudennig-emginnig an ezel</strong>',
	'LOG_USER_DEL_SIG_USER'		=> '<strong>Tennet sinadur an ezel</strong>',
	'LOG_USER_FEEDBACK'			=> '<strong>Ouzhpennet ur respont eus an ezel</strong><br />» %s',
	'LOG_USER_GENERAL'			=> '<strong>Ouzhpennet ez eus bet :</strong><br />» %s',
	'LOG_USER_INACTIVE_USER'	=> '<strong>Lakaet dizoberiant kont an ezel</strong>',
	'LOG_USER_LOCK'				=> '<strong>Prennet ar sujed bet savet gantañ gant an ezel</strong><br />» %s',
	'LOG_USER_MOVE_POSTS_USER'	=> '<strong>Dilec\'hiet an holl gemennadennoù davet ar forom</strong>» %s',
	'LOG_USER_REACTIVATE_USER'	=> '<strong>Rediet an ezel da adenaouiñ e gont</strong>',
	'LOG_USER_UNLOCK'			=> '<strong>Dibrennet ar sujed bet savet gantañ gant an ezel</strong><br />» %s',
	'LOG_USER_WARNING'			=> '<strong>Ouzhpennet ur c\'hemenn-groñs</strong><br />» %s',
	'LOG_USER_WARNING_BODY'		=> '<strong>Ar c\'hemenn-groñs da heul a zo bet kaset d\'an ezel</strong><br />» %s',

	'LOG_USER_GROUP_CHANGE'			=> '<strong>Cheñchet e strollad dre-ziouer gant an ezel</strong><br />» %s',
	'LOG_USER_GROUP_DEMOTE'			=> '<strong>Aet eo kuit an ezel ouzh penn ar strollad</strong><br />» %s',
	'LOG_USER_GROUP_JOIN'			=> '<strong>Bet eo an ezel er strollad</strong><br />» %s',
	'LOG_USER_GROUP_JOIN_PENDING'	=> '<strong>War-c\'hortoz emañ emezeladur an ezel er strollad</strong><br />» %s',
	'LOG_USER_GROUP_RESIGN'			=> '<strong>Aet eo kuit an ezel diouzh ar strollad</strong><br />» %s',

	'LOG_WORD_ADD'			=> '<strong>Ouzhpennet ur ger da erlec\'hiañ</strong><br />» %s',
	'LOG_WORD_DELETE'		=> '<strong>Diverket ur ger da erlec\'hiañ</strong><br />» %s',
	'LOG_WORD_EDIT'			=> '<strong>Kemmet ur ger da erlec\'hiañ</strong><br />» %s',
));

?>
