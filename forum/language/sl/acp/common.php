<?php
/**
*
* acp_common.php [Slovenian]
*
* @package language
* @version $Id: $
* @copyright (c) 2009 phpBB Group
* @author 2009-01-09 - borut, kebabek, KoMar, kramp, lithium, mitja_i, NoBody, nSk, Razor, sollers, Tody, Veron, Janet, JureB
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

$lang = array_merge($lang, array(
	'WRITABLE_CONFIG'	=> 'Vaša konfiguracijska datoteka (config.php) ima trenutno dovoljeno pisanje s strani vsakogar. Močno vam svetujemo, da spremenite datotečna dovoljenja na 640 ali vsaj na 644 (glej primer: <a href="http://en.wikipedia.org/wiki/Chmod" rel="external">chmod</a> 640 config.php).',
	'LOG_DELETE_SHADOW_TOPIC'	=> '<strong>Izbriši sled teme</strong><br />» %s',
	'LOG_REFERER_INVALID'	=> '<strong>Preverjanje sklica je bilo neuspešno </strong><br />»Sklic je bil “<em>%1$s</em>”. Zahteva je bila zavrnjena in seja ustavljena.',
	'ACP_ADMINISTRATORS'	=> 'Administratorji',
	'ACP_ADMIN_LOGS'	=> 'Administratorjeva prijava',
	'ACP_ADMIN_ROLES'	=> 'Administratorske vloge',
	'ACP_ATTACHMENTS'	=> 'Priponke',
	'ACP_ATTACHMENT_SETTINGS'	=> 'Nastavitve priponk',
	'ACP_AUTH_SETTINGS'	=> 'Preverjanje',
	'ACP_AUTOMATION'	=> 'Avtomatizacija',
	'ACP_AVATAR_SETTINGS'	=> 'Nastavitve avatarja',
	'ACP_BACKUP'	=> 'Varnostna kopija',
	'ACP_BAN'	=> 'Blokiranje',
	'ACP_BAN_EMAILS'	=> 'Blokada e-pošte',
	'ACP_BAN_IPS'	=> 'Blokada IP-jev',
	'ACP_BAN_USERNAMES'	=> 'Blokada uporabniških imen',
	'ACP_BBCODES'	=> 'BBKode',
	'ACP_BOARD_CONFIGURATION'	=> 'Konfiguracija foruma',
	'ACP_BOARD_FEATURES'	=> 'Značilnosti foruma',
	'ACP_BOARD_MANAGEMENT'	=> 'Upravljanje foruma',
	'ACP_BOARD_SETTINGS'	=> 'Nastavitve foruma',
	'ACP_BOTS'	=> 'Pajki/Roboti',
	'ACP_CAPTCHA'	=> 'CAPTCHA',
	'ACP_CAT_DATABASE'	=> 'Baze podatkov',
	'ACP_CAT_DOT_MODS'	=> '.MODi',
	'ACP_CAT_FORUMS'	=> 'Forumi',
	'ACP_CAT_GENERAL'	=> 'Splošno',
	'ACP_CAT_MAINTENANCE'	=> 'Vzdrževanje',
	'ACP_CAT_PERMISSIONS'	=> 'Dovoljenja',
	'ACP_CAT_POSTING'	=> 'Objavljanje prispevkov',
	'ACP_CAT_STYLES'	=> 'Slogi',
	'ACP_CAT_SYSTEM'	=> 'Sistem',
	'ACP_CAT_USERGROUP'	=> 'Uporabniki in skupine',
	'ACP_CAT_USERS'	=> 'Uporabniki',
	'ACP_CLIENT_COMMUNICATION'	=> 'Komunikacija med uporabniki',
	'ACP_COOKIE_SETTINGS'	=> 'Nastavitve piškotkov',
	'ACP_CRITICAL_LOGS'	=> 'Dnevnik napak',
	'ACP_CUSTOM_PROFILE_FIELDS'	=> 'Posebna polja uporabniškega profila',
	'ACP_DATABASE'	=> 'Uporabljanje z bazami podatkov',
	'ACP_DISALLOW'	=> 'Prepovej',
	'ACP_DISALLOW_USERNAMES'	=> 'Prepovej uporabniška imena',
	'ACP_EMAIL_SETTINGS'	=> 'Nastavitve e-pošte',
	'ACP_EXTENSION_GROUPS'	=> 'Uredi skupine kočnic',
	'ACP_FORUM_BASED_PERMISSIONS'	=> 'Dovoljenja, osnovana na forumu',
	'ACP_FORUM_LOGS'	=> 'Dnveniki foruma',
	'ACP_FORUM_MANAGEMENT'	=> 'Upravljanje foruma',
	'ACP_FORUM_MODERATORS'	=> 'Moderatorji foruma',
	'ACP_FORUM_PERMISSIONS'	=> 'Dovoljenja forumov',
	'ACP_FORUM_ROLES'	=> 'Forumske vloge',
	'ACP_GENERAL_CONFIGURATION'	=> 'Splošne nastavitve',
	'ACP_GENERAL_TASKS'	=> 'Splošne zahteve',
	'ACP_GLOBAL_MODERATORS'	=> 'Globalni moderatorji',
	'ACP_GLOBAL_PERMISSIONS'	=> 'Globalna dovoljenja',
	'ACP_GROUPS'	=> 'Skupine',
	'ACP_GROUPS_FORUM_PERMISSIONS'	=> 'Skupinska forumska dovoljenja',
	'ACP_GROUPS_MANAGE'	=> 'Urejanje skupin',
	'ACP_GROUPS_MANAGEMENT'	=> 'Upravljanje skupin',
	'ACP_GROUPS_PERMISSIONS'	=> 'Dovoljenja skupin',
	'ACP_ICONS'	=> 'Ikone tem',
	'ACP_ICONS_SMILIES'	=> 'Ikone/smeški tem',
	'ACP_IMAGESETS'	=> 'Slikovni nabori',
	'ACP_INACTIVE_USERS'	=> 'Neaktivni uporabniki',
	'ACP_INDEX'	=> 'ACP index',
	'ACP_JABBER_SETTINGS'	=> 'Nastavitve klepeta',
	'ACP_LANGUAGE'	=> 'Uporavljanje jezikov',
	'ACP_LANGUAGE_PACKS'	=> 'Jezikovni paketi',
	'ACP_LOAD_SETTINGS'	=> 'Nastavitve nalaganja',
	'ACP_LOGGING'	=> 'Prijavljanje',
	'ACP_MAIN'	=> 'ACP index',
	'ACP_MANAGE_EXTENSIONS'	=> 'Uredi končnice',
	'ACP_MANAGE_FORUMS'	=> 'Urejaj forume',
	'ACP_MANAGE_RANKS'	=> 'Uredi stopnje uporabnikov',
	'ACP_MANAGE_REASONS'	=> 'Uredi razloge poročil/preklica',
	'ACP_MANAGE_USERS'	=> 'Uredi uporabnike',
	'ACP_MASS_EMAIL'	=> 'Množična e-pošta',
	'ACP_MESSAGES'	=> 'Sporočila',
	'ACP_MESSAGE_SETTINGS'	=> 'Nastavitve zasebnih sporočil',
	'ACP_MODULE_MANAGEMENT'	=> 'Uporavljanje modulov',
	'ACP_MOD_LOGS'	=> 'Dnevnik moderatorjev',
	'ACP_MOD_ROLES'	=> 'Moderatorske vloge',
	'ACP_NO_ITEMS'	=> 'Tu še ni predmetov.',
	'ACP_ORPHAN_ATTACHMENTS'	=> 'Osirotele priponke',
	'ACP_PERMISSIONS'	=> 'Dovoljenja',
	'ACP_PERMISSION_MASKS'	=> 'Shematski ogled dovoljenj',
	'ACP_PERMISSION_ROLES'	=> 'Dovoljenja po vlogah',
	'ACP_PERMISSION_TRACE'	=> 'Sledi dovoljenjem',
	'ACP_PHP_INFO'	=> 'Informacije o PHP-ju',
	'ACP_POST_SETTINGS'	=> 'Nastavitve prispevkov',
	'ACP_PRUNE_FORUMS'	=> 'Počisti forume',
	'ACP_PRUNE_USERS'	=> 'Počisti uporabnike',
	'ACP_PRUNING'	=> 'Čiščenje',
	'ACP_QUICK_ACCESS'	=> 'Hiter dostop',
	'ACP_RANKS'	=> 'Stopnje uporabnikov',
	'ACP_REASONS'	=> 'Razlogi za prijavo/odjavo',
	'ACP_REGISTER_SETTINGS'	=> 'Nastavitve registracije uporabnikov',
	'ACP_RESTORE'	=> 'Obnovi',
	'ACP_SEARCH'	=> 'Konfiguracija iskanja',
	'ACP_SEARCH_INDEX'	=> 'Iskalni indeks',
	'ACP_SEARCH_SETTINGS'	=> 'Nastavitve iskanja',
	'ACP_SECURITY_SETTINGS'	=> 'Nastavitve varnosti',
	'ACP_SERVER_CONFIGURATION'	=> 'Konfiguracija strežnika',
	'ACP_SERVER_SETTINGS'	=> 'Nastavitve strežnika',
	'ACP_SIGNATURE_SETTINGS'	=> 'Nastavitve podpisa',
	'ACP_SMILIES'	=> 'Smeški',
	'ACP_STYLE_COMPONENTS'	=> 'Komponente sloga',
	'ACP_STYLE_MANAGEMENT'	=> 'Upravljanje s slogi',
	'ACP_STYLES'	=> 'Slogi',
	'ACP_TEMPLATES'	=> 'Predloge',
	'ACP_THEMES'	=> 'Teme',
	'ACP_UPDATE'	=> 'Posodabljanje',
	'ACP_USERS_FORUM_PERMISSIONS'	=> 'Uporabnikova forumska dovoljenja',
	'ACP_USERS_LOGS'	=> 'Prijave uporabnika',
	'ACP_USERS_PERMISSIONS'	=> 'Uporabnikova dovoljenja',
	'ACP_USER_ATTACH'	=> 'Priponke',
	'ACP_USER_AVATAR'	=> 'Avatar',
	'ACP_USER_FEEDBACK'	=> 'Regeneracija',
	'ACP_USER_GROUPS'	=> 'Skupine',
	'ACP_USER_MANAGEMENT'	=> 'Upravljanje z uporabniki',
	'ACP_USER_OVERVIEW'	=> 'Predogled',
	'ACP_USER_PERM'	=> 'Dovoljenja',
	'ACP_USER_PREFS'	=> 'Lastnosti',
	'ACP_USER_PROFILE'	=> 'Profil',
	'ACP_USER_RANK'	=> 'Stopnja uporabnika',
	'ACP_USER_ROLES'	=> 'Uporabniške vloge',
	'ACP_USER_SECURITY'	=> 'Uporabnikova varnost',
	'ACP_USER_SIG'	=> 'Podpis',
	'ACP_VC_SETTINGS'	=> 'Nastavitve vizualnega potrdila',
	'ACP_VC_CAPTCHA_DISPLAY'	=> 'Predogled slike CAPTCHA',
	'ACP_VERSION_CHECK'	=> 'Preveri posodobitve',
	'ACP_VIEW_ADMIN_PERMISSIONS'	=> 'Poglej administrativna dovoljenja',
	'ACP_VIEW_FORUM_MOD_PERMISSIONS'	=> 'Poglej dovoljenja moderiranja forumov',
	'ACP_VIEW_FORUM_PERMISSIONS'	=> 'Poglej dovoljenja, osnovana na forumu',
	'ACP_VIEW_GLOBAL_MOD_PERMISSIONS'	=> 'Poglej globalna moderatorska dovoljenja',
	'ACP_VIEW_USER_PERMISSIONS'	=> 'Poglej dovoljenja osnovana na uporabnikih',
	'ACP_WORDS'	=> 'Cenzuriranje besed',
	'ACTION'	=> 'Akcija',
	'ACTIONS'	=> 'Akcije',
	'ACTIVATE'	=> 'Aktiviraj',
	'ADD'	=> 'Dodaj',
	'ADMIN'	=> 'Administracija',
	'ADMIN_INDEX'	=> 'Admin index',
	'ADMIN_PANEL'	=> 'Administracijska Nadzorna Plošča',
	'ADM_LOGOUT'	=> 'Odjava iz ANP',
	'ADM_LOGGED_OUT'	=> 'Uspešna odjava iz Administracijske Nadzorne Plošče',
	'BACK'	=> 'Nazaj',
	'COLOUR_SWATCH'	=> 'Paleta barv v internetu',
	'CONFIG_UPDATED'	=> 'Konfiguracija uspešno posodobljena.',
	'DEACTIVATE'	=> 'Deaktiviraj',
	'DIRECTORY_DOES_NOT_EXIST'	=> 'Vnešena pot “%s” ne obstaja.',
	'DIRECTORY_NOT_DIR'	=> 'VNešena pot “%s” ni v direktoriju.',
	'DIRECTORY_NOT_WRITABLE'	=> 'Vnešena pot “%s” ni zapisljiva.',
	'DISABLE'	=> 'Onemogoči',
	'DOWNLOAD'	=> 'Prenos',
	'DOWNLOAD_AS'	=> 'Prenesi kot',
	'DOWNLOAD_STORE'	=> 'Prenesi ali shrani datoteko',
	'DOWNLOAD_STORE_EXPLAIN'	=> 'Datoteko lahko prenesete neposredno ali pa si jo shranite v svojo mapo za <samp>shranjevanje/</samp>.',
	'EDIT'	=> 'Uredi',
	'ENABLE'	=> 'Omogoči',
	'EXPORT_DOWNLOAD'	=> 'Naloži',
	'EXPORT_STORE'	=> 'Shrani',
	'GENERAL_OPTIONS'	=> 'Splošne možnosti',
	'GENERAL_SETTINGS'	=> 'Splošne nastavitve',
	'GLOBAL_MASK'	=> 'Shema vseh dovoljenj',
	'INSTALL'	=> 'Namesti',
	'IP'	=> 'IP uporabnika',
	'IP_HOSTNAME'	=> 'IP naslovi ali domene',
	'LOGGED_IN_AS'	=> 'Prijavljeni ste kot:',
	'LOGIN_ADMIN'	=> 'Če želite upravljati s forumom, morate biti prijavljen uporabnik.',
	'LOGIN_ADMIN_CONFIRM'	=> 'Če želite upravljati s forumom, se morate ponovno prijaviti.',
	'LOGIN_ADMIN_SUCCESS'	=> 'Prijava je bila uspešna in sedaj boste preusmerjeni na Administrativno Nadzorno Ploščo.',
	'LOOK_UP_FORUM'	=> 'Izberi forum',
	'LOOK_UP_FORUMS_EXPLAIN'	=> 'Izbereš lahko več kot en forum.',
	'MANAGE'	=> 'Uredi',
	'MENU_TOGGLE'	=> 'Skrij oz. prikaži stranski meni',
	'MOVE_DOWN'	=> 'Premakni navzdol',
	'MOVE_UP'	=> 'Move up',
	'NOTIFY'	=> 'Obvestilo',
	'NO_ADMIN'	=> 'Niste pooblaščeni za upravljanje s tem forumom.',
	'NO_EMAILS_DEFINED'	=> 'Noben veljavni elektronski naslov ni bil najden.',
	'NO_PASSWORD_SUPPLIED'	=> 'Za dostop do Adnimistratorsk Nadzorne Plošče morate vnesti geslo.',
	'OFF'	=> 'Izklopljeno',
	'ON'	=> 'Vklopljeno',
	'PARSE_BBCODE'	=> 'Upoštevaj BBCode',
	'PARSE_SMILIES'	=> 'Upoštevaj smeške',
	'PARSE_URLS'	=> 'Upoštevaj internetne povezave',
	'PERMISSIONS_TRANSFERRED'	=> 'Dovoljenja so prenešena',
	'PERMISSIONS_TRANSFERRED_EXPLAIN'	=> 'Trenutno imate dovoljenja %1$s. S temi dovoljenji lahko pregledujete forum, vendar pa ne morete dostopati do administratorske nadzorne plošče, saj administratorske pravice niso bile prenešene. <a href="%2$s"><strong>Vaša stara dovoljenja</strong></a> lahko vklopite kadarkoli.',
	'PIXEL'	=> 'px',
	'PROCEED_TO_ACP'	=> '%sNadaljuj na ANP%s',
	'REMIND'	=> 'Opomni',
	'RESYNC'	=> 'Ponovno uskladi',
	'RETURN_TO'	=> 'Vrni se na…',
	'SELECT_ANONYMOUS'	=> 'Izberi anonimnega uporabnika',
	'SELECT_OPTION'	=> 'Izberi opcijo',
	'SETTING_TOO_LOW'	=> 'Vnešena vrednost za “%1$s” nastavitev je premajhna. Minimalna dovoljena vrednost je %2$d.',
	'SETTING_TOO_BIG'	=> 'Vnešena vrednost za “%1$s” nastavitec je prevelika. Maksimalna dovoljena vrednost je %2$d.',
	'SETTING_TOO_LONG'	=> 'Vnešena vrednost za “%1$s” nastavitev je predolga. Maksimalna dovoljena dolžina je %2$d.',
	'SETTING_TOO_SHORT'	=> 'Vnešena vrednost za “%1$s” nastavitev je prekratka . Minimalna dovoljena dolžina je %2$d.',
	'UCP'	=> 'Uporabniška nadzorna plošča',
	'USERNAMES_EXPLAIN'	=> 'Vsako uporabniško ime napiši v drugo vrstico.',
	'USER_CONTROL_PANEL'	=> 'Uporabniška nadzorna plošča',
	'WARNING'	=> 'Opozorilo',
	'ACP_PHP_INFO_EXPLAIN'	=> 'Ta stran prikazuje informacije o PHPju, ki je trenutno v uporabi na serverju. Vključuje podatke o naloženih modulih, dostopnih spremenljivkah in privzetih nastavitvah. Te informacije so lahko koristne pri odrivanju napak. Bodite pozorni, saj nekateri ponudniki spletnega gostovanja ne prikažejo vseh ijformacij zaradi varnostnih razlogov. Priporočamo, da nobenemu ne posredujete informacij iz te strani, razen če vas za to prosijo <a href="http://www.phpbb.com/about/team/">uradni člani</a> forumov za strokovno pomoč.',
	'NO_PHPINFO_AVAILABLE'	=> 'Nismo mogli pridobiti informacij o vaši PHP konfiguraciji. Phpinfo() je bil onemogočen zaradi varnostnih razlogov.',
	'ACP_ADMIN_LOGS_EXPLAIN'	=> 'To je seznam vseh akcij, ki so jih izvršili administratorji foruma. Sortirate jih lahko po uporabniškem imenu, datumu, IP naslovu in akciji. Če imate potrebna dovoljenja, lahko tudi izbrišete posamezne akcije ali pa kar celoten dnevnik.',
	'ACP_CRITICAL_LOGS_EXPLAIN'	=> 'To je seznam akcij, ki jih je forum naredil sam. Tukaj imate informacije, katere vam pomagajo pri reševanju določenih problemov, npr. pri nedostavljanu elektronskih sporočil. Sortirate jih lahko po uporabniškem imenu, datumu, IP naslovu in akciji. Če imate potrebna dovoljenja, lahko tudi izbrišete posamezne akcije ali pa kar celoten dnevnik.',
	'ACP_MOD_LOGS_EXPLAIN'	=> 'To je seznam vseh akcij na forumu, temah in sporočilih ter vse akcije moderatorjev. Sortirate jih lahko po uporabniškem imenu, datumu, IP naslovu in akciji. Če imate potrebna dovoljenja, lahko tudi izbrišete posamezne akcije ali pa kar celoten dnevnik.',
	'ACP_USERS_LOGS_EXPLAIN'	=> 'To je seznam vseh akcij, ki so jih izvršili uporabniki in pa akcije izvršene na uporabnikih (poročila, opozorila in uporabniške opombe).',
	'ALL_ENTRIES'	=> 'Vsi vnosi',
	'DISPLAY_LOG'	=> 'Prikaži vrednosti prejšnjega',
	'NO_ENTRIES'	=> 'Nobenih dnevniških vnosov za to obdobje.',
	'SORT_IP'	=> 'IP naslov',
	'SORT_DATE'	=> 'Datum',
	'SORT_ACTION'	=> 'Akcija',
	'ADMIN_INTRO'	=> 'Hvala ker ste izbrali phpBB forum. Tukaj boste našli hiter pregled različnih statistik foruma. Povezave na levi strani zaslona vam omogočajo kontrolo vsega kar se dogaja na forumu. Vsaka stran bo vsebovala navodila kako uporabljati različna orodja.',
	'ADMIN_LOG'	=> 'Zabeležene administratorske akcije',
	'ADMIN_LOG_INDEX_EXPLAIN'	=> 'Tukaj je podanih zadnjih pet akcij administratorjev foruma. Celoten dnevnik najdete ob kliku na primerno ikono menija ali pa sledite spodnjemu linku.',
	'AVATAR_DIR_SIZE'	=> 'Velikost direktorija za avatarje',
	'BOARD_STARTED'	=> 'Forum zagnan',
	'BOARD_VERSION'	=> 'Verzija foruma',
	'DATABASE_SERVER_INFO'	=> 'Server podatkovne baze',
	'DATABASE_SIZE'	=> 'Velikost podatkovne baze',
	'FILES_PER_DAY'	=> 'Priponk na dan',
	'FORUM_STATS'	=> 'Statistika foruma',
	'GZIP_COMPRESSION'	=> 'GZip kompresija',
	'NOT_AVAILABLE'	=> 'Ni dosegljivo',
	'NUMBER_FILES'	=> 'Število priponk',
	'NUMBER_POSTS'	=> 'Število sporočil',
	'NUMBER_TOPICS'	=> 'Število tem',
	'NUMBER_USERS'	=> 'Število uporabnikov',
	'NUMBER_ORPHAN'	=> 'Samostojne priponke',
	'POSTS_PER_DAY'	=> 'Sporočil na dan',
	'PURGE_CACHE'	=> 'Izbriši začasne datoteke',
	'PURGE_CACHE_CONFIRM'	=> 'Ali res želite izbrisati začasne datoteke?',
	'PURGE_CACHE_EXPLAIN'	=> 'Izbriši vse predmete povezane z začasnimi datotekami, to vključuje tudi začasne predloge in poizvedbe.',
	'RESET_DATE'	=> 'Resetiraj začetni datum foruma',
	'RESET_DATE_CONFIRM'	=> 'Ali res želite resetirati začetni datum foruma?',
	'RESET_ONLINE'	=> 'Resetiraj rekordno število uporabnikov',
	'RESET_ONLINE_CONFIRM'	=> 'Ali res želite resetirati rekorno število uporabnikov?',
	'RESYNC_POSTCOUNTS'	=> 'Ponovno uskladi števec sporočil',
	'RESYNC_POSTCOUNTS_EXPLAIN'	=> 'Upoštevaj samo obstoječa sporočila. Odstranjena sporočila se ne bodo štela.',
	'RESYNC_POSTCOUNTS_CONFIRM'	=> 'Ali res želite ponovno uskladiti števec sporočil?',
	'RESYNC_POST_MARKING'	=> 'Ponovno uskladi označene teme',
	'RESYNC_POST_MARKING_CONFIRM'	=> 'Ali res želite ponovno uskladiti označene teme?',
	'RESYNC_POST_MARKING_EXPLAIN'	=> 'Prvo odznačite vse teme in potem pravilno označite teme, ki so bile spremenjene v zadnjih šestih mesecih.',
	'RESYNC_STATS'	=> 'Ponovno uskladi statistiko',
	'RESYNC_STATS_CONFIRM'	=> 'Ali res želite ponovno uskladiti statistiko?',
	'RESYNC_STATS_EXPLAIN'	=> 'Ponovno izračunaj skupno število sporočil, tem, uporabnikov in datotek.',
	'RUN'	=> 'Zaženi sedaj',
	'STATISTIC'	=> 'Statistika',
	'STATISTIC_RESYNC_OPTIONS'	=> 'Ponovno uskladi ali resetiraj statistiko',
	'TOPICS_PER_DAY'	=> 'Tem na dan',
	'UPLOAD_DIR_SIZE'	=> 'Velikost vseh priponk',
	'USERS_PER_DAY'	=> 'Uporabnikov na dan',
	'VALUE'	=> 'Vrednost',
	'VIEW_ADMIN_LOG'	=> 'Poglej administratorski dnevnik',
	'VIEW_INACTIVE_USERS'	=> 'Poglej neaktivne uporabnike',
	'WELCOME_PHPBB'	=> 'Dobrodošli na phpBB',
	'INACTIVE_DATE'	=> 'Neaktivni datum',
	'INACTIVE_REASON'	=> 'Razlog',
	'INACTIVE_REASON_MANUAL'	=> 'Račun je deaktiviral administrator',
	'INACTIVE_REASON_PROFILE'	=> 'Profil je bil spremenjen',
	'INACTIVE_REASON_REGISTER'	=> 'Na novo registriran račun',
	'INACTIVE_REASON_REMIND'	=> 'Prisiljena ponovna aktivacija uporabniškega računa',
	'INACTIVE_REASON_UNKNOWN'	=> 'Neznano',
	'INACTIVE_USERS'	=> 'Neaktivni uporabniki',
	'INACTIVE_USERS_EXPLAIN'	=> 'To je seznam uporabnikov, ki so se registrirali vendar niso aktivirali računa. Če želite, lahko te uporabnike aktivirate, izbrišete ali opomnite (preko elektronske pošte).',
	'INACTIVE_USERS_EXPLAIN_INDEX'	=> 'To je seznam 10 zadnjih uporabnikov, ki so se registrirali vendar niso aktivirali računa. Celoten seznam je na voljo v meniju ali če sledite spodnji povezavu, kjer lahko te uporabnike aktivirate, izbrišete ali opomnite (preko elektronske pošte).',
	'NO_INACTIVE_USERS'	=> 'Ni neaktivnih uporabnikov',
	'SORT_INACTIVE'	=> 'Neaktivni datum',
	'SORT_LAST_VISIT'	=> 'Zadnji obisk',
	'SORT_REASON'	=> 'Razlog',
	'SORT_REG_DATE'	=> 'Datum registracije',
	'USER_IS_INACTIVE'	=> 'Uporabnik je neaktiven',
	'LOG_ACL_ADD_USER_GLOBAL_U_'	=> '<strong>Uporabniške pravice dodane oz. spremenjene uporabniku (uporabnikom)</strong><br />» %s',
	'LOG_ACL_ADD_GROUP_GLOBAL_U_'	=> '<strong>Uporabniške pravice dodane oz. spremenjene  skupini (skupinam)</strong><br />» %s',
	'LOG_ACL_ADD_USER_GLOBAL_M_'	=> '<strong>Globalne moderatorske pravice dodane oz. spremenjene  uporaniku (uporabnikom)</strong><br />» %s',
	'LOG_ACL_ADD_GROUP_GLOBAL_M_'	=> '<strong>Globalne moderatorske pravice dodane oz. spremenjene skupini (skupinam)</strong><br />» %s',
	'LOG_ACL_ADD_USER_GLOBAL_A_'	=> '<strong>Administratorske pravice dodane oz. spremenjene uporabniku (uporabnikom)</strong><br />» %s',
	'LOG_ACL_ADD_GROUP_GLOBAL_A_'	=> '<strong>Administratorske pravice dodane oz. spremenjene skupini (skupinam)</strong><br />» %s',
	'LOG_ACL_ADD_ADMIN_GLOBAL_A_'	=> '<strong>Added or edited Administrators</strong><br />» %s',
	'LOG_ACL_ADD_MOD_GLOBAL_M_'	=> '<strong>Added or edited Global Moderators</strong><br />» %s',
	'LOG_ACL_ADD_USER_LOCAL_F_'	=> '%1$s <strong>je dodal ali uredil uporabniški dostop foruma</strong><br />» %2$s',
	'LOG_ACL_ADD_USER_LOCAL_M_'	=> '%1$s <strong>je dodal ali uredil uporabniški dostop moderatorjem foruma</strong><br />» %2$s',
	'LOG_ACL_ADD_GROUP_LOCAL_F_'	=> '%1$s <strong>je dodal ali uredil skupinski dostop foruma</strong><br />» %2$s',
	'LOG_ACL_ADD_GROUP_LOCAL_M_'	=> '%1$s <strong>je dodal ali uredil dostop skupini moderatorjev foruma</strong><br />» %2$s',
	'LOG_ACL_ADD_MOD_LOCAL_M_'	=> '%1$s <strong>je dodal ali uredil moderatorje</strong><br />» %2$s',
	'LOG_ACL_ADD_FORUM_LOCAL_F_'	=> '%1$s <strong>je dodal ali uredil pravice foruma</strong><br />» %2$s',
	'LOG_ACL_DEL_ADMIN_GLOBAL_A_'	=> '<strong>Odstranjeni administratorji</strong><br />» %s',
	'LOG_ACL_DEL_MOD_GLOBAL_M_'	=> '<strong>Odstranjeni globalni moderatorji</strong><br />» %s',
	'LOG_ACL_DEL_MOD_LOCAL_M_'	=> '%1$s <strong>je odstranil moderatorje</strong><br />» %2$s',
	'LOG_ACL_DEL_FORUM_LOCAL_F_'	=> '%1$s <strong>je odtranil uporabniška/skupinska dovoljenja</strong><br />» %2$s',
	'LOG_ACL_TRANSFER_PERMISSIONS'	=> '<strong>Pravice prenešana od</strong><br />» %s',
	'LOG_ACL_RESTORE_PERMISSIONS'	=> '<strong>Zopet uporabljate svoje pravice. Do sedaj ste imeli pravice od </strong><br />» %s',
	'LOG_ADMIN_AUTH_FAIL'	=> '<strong>Neuspešen poskus administratorske prijave</strong>',
	'LOG_ADMIN_AUTH_SUCCESS'	=> '<strong>Uspešna administratorska prijava</strong>',
	'LOG_ATTACHMENTS_DELETED'	=> '<strong>Odstranjene uporabnikove priponke</strong><br />» %s',
	'LOG_ATTACH_EXT_ADD'	=> '<strong>Dodana ali odstranjena končnica priponki</strong><br />» %s',
	'LOG_ATTACH_EXT_DEL'	=> '<strong>Odstranjena končnica priponke</strong><br />» %s',
	'LOG_ATTACH_EXT_UPDATE'	=> '<strong>Posodobljena končnica priponke</strong><br />» %s',
	'LOG_ATTACH_EXTGROUP_ADD'	=> '<strong>Končnica dodana skupini</strong><br />» %s',
	'LOG_ATTACH_EXTGROUP_EDIT'	=> '<strong>Posodobljena končnica v skupini</strong><br />» %s',
	'LOG_ATTACH_EXTGROUP_DEL'	=> '<strong>Končnica os</strong><br />» %s',
	'LOG_ATTACH_FILEUPLOAD'	=> '<strong>Samostojna priponka dodana sporočilu</strong><br />» ID %1$d - %2$s',
	'LOG_ATTACH_ORPHAN_DEL'	=> '<strong>Samostojna sporočila izbrisana</strong><br />» %s',
	'LOG_BAN_EXCLUDE_USER'	=> '<strong>Izobčen uporabnik ponovno aktiven</strong> zaradi “<em>%1$s</em>”<br />» %2$s',
	'LOG_BAN_EXCLUDE_IP'	=> '<strong>Izobčen IP ponovno aktiven</strong> zaradi “<em>%1$s</em>”<br />» %2$s',
	'LOG_BAN_EXCLUDE_EMAIL'	=> '<strong>Izobčen elektronski naslov ponovno aktiven</strong> zaradi “<em>%1$s</em>”<br />» %2$s',
	'LOG_BAN_USER'	=> '<strong>Uporabnik izobčen</strong> zaradi “<em>%1$s</em>”<br />» %2$s',
	'LOG_BAN_IP'	=> '<strong>IP izobčen</strong> zaradi “<em>%1$s</em>”<br />» %2$s',
	'LOG_BAN_EMAIL'	=> '<strong>Elektronski naslov izobčen</strong> zaradi “<em>%1$s</em>”<br />» %2$s',
	'LOG_UNBAN_USER'	=> '<strong>Ponovno aktiven uporabnik</strong><br />» %s',
	'LOG_UNBAN_IP'	=> '<strong>Ponovno aktiven IP</strong><br />» %s',
	'LOG_UNBAN_EMAIL'	=> '<strong>Ponovno aktiven elektronski naslov</strong><br />» %s',
	'LOG_BBCODE_ADD'	=> '<strong>Dodana nova BBCode</strong><br />» %s',
	'LOG_BBCODE_EDIT'	=> '<strong>Spremenjena BBCode</strong><br />» %s',
	'LOG_BBCODE_DELETE'	=> '<strong>Izbrisana BBCode</strong><br />» %s',
	'LOG_BOT_ADDED'	=> '<strong>Dodan nov bot</strong><br />» %s',
	'LOG_BOT_DELETE'	=> '<strong>Izbrisan bot</strong><br />» %s',
	'LOG_BOT_UPDATED'	=> '<strong>Spremenjen obstoječi bot</strong><br />» %s',
	'LOG_CLEAR_ADMIN'	=> '<strong>Zbrisan administratorski dnevnik.</strong>',
	'LOG_CLEAR_CRITICAL'	=> '<strong>Zbrisan dnevnik napak</strong>',
	'LOG_CLEAR_MOD'	=> '<strong>Zbrisan moderatorski dnevnik</strong>',
	'LOG_CLEAR_USER'	=> '<strong>Zbrisan dnevnik uporabnika</strong><br />» %s',
	'LOG_CLEAR_USERS'	=> '<strong>Zbrisani uporabniški dnevniki</strong>',
	'LOG_CONFIG_ATTACH'	=> '<strong>Spremenjene nastavitve priponk</strong>',
	'LOG_CONFIG_AUTH'	=> '<strong>Spremenjene nastavitve prijave</strong>',
	'LOG_CONFIG_AVATAR'	=> '<strong>Spremenjene nastavitve avatarjev</strong>',
	'LOG_CONFIG_COOKIE'	=> '<strong>Spremenjene nastavitve piškotkov</strong>',
	'LOG_CONFIG_EMAIL'	=> '<strong>Spremenjene nastavitve elektronske pošte</strong>',
	'LOG_CONFIG_FEATURES'	=> '<strong>Spremenjena oblika foruma</strong>',
	'LOG_CONFIG_LOAD'	=> '<strong>Spremenjene nastavitve nalaganja</strong>',
	'LOG_CONFIG_MESSAGE'	=> '<strong>Spremenjene nastavitve zasebnih sporočil</strong>',
	'LOG_CONFIG_POST'	=> '<strong>Spremenjene nastavitve sporočil</strong>',
	'LOG_CONFIG_REGISTRATION'	=> '<strong>Spremenjene nastavitve za registracijo uporabnikov</strong>',
	'LOG_CONFIG_SEARCH'	=> '<strong>Spremenjene nastavitve iskanja</strong>',
	'LOG_CONFIG_SECURITY'	=> '<strong>Spremenjene varnostne nastavitve</strong>',
	'LOG_CONFIG_SERVER'	=> '<strong>Spremenjene nastavitve serverja</strong>',
	'LOG_CONFIG_SETTINGS'	=> '<strong>Spremenjene nastavitve foruma</strong>',
	'LOG_CONFIG_SIGNATURE'	=> '<strong>Spremenjene nastavitve podpisa</strong>',
	'LOG_CONFIG_VISUAL'	=> '<strong>Spremenjene nastavitve vizualne potrditve</strong>',
	'LOG_APPROVE_TOPIC'	=> '<strong>Odobrena tema</strong><br />» %s',
	'LOG_BUMP_TOPIC'	=> '<strong>Uporabnikova zavržena tema</strong><br />» %s',
	'LOG_DELETE_POST'	=> '<strong>Izbrisano sporočilo</strong><br />» %s',
	'LOG_DELETE_TOPIC'	=> '<strong>Izbrisana tema</strong><br />» %s',
	'LOG_FORK'	=> '<strong>Skopirana tema</strong><br />» iz %s',
	'LOG_LOCK'	=> '<strong>Zaklenjena tema</strong><br />» %s',
	'LOG_LOCK_POST'	=> '<strong>Zaklenjeno sporočilo</strong><br />» %s',
	'LOG_MERGE'	=> '<strong>Združena sporočila</strong> v temo<br />» %s',
	'LOG_MOVE'	=> '<strong>Tema premaknjena</strong><br />» it %s',
	'LOG_POST_APPROVED'	=> '<strong>Odobreno sporočilo</strong><br />» %s',
	'LOG_POST_DISAPPROVED'	=> '<strong>Neodobreno sporočilo “%1$s” zaradi</strong><br />» %2$s',
	'LOG_POST_EDITED'	=> '<strong>Sporočilo “%1$s”, je uredil</strong><br />» %2$s',
	'LOG_REPORT_CLOSED'	=> '<strong>Zaprto poročilo</strong><br />» %s',
	'LOG_REPORT_DELETED'	=> '<strong>Izbrisano poročilo</strong><br />» %s',
	'LOG_SPLIT_DESTINATION'	=> '<strong>Premaknjena združena sporočila</strong><br />» v %s',
	'LOG_SPLIT_SOURCE'	=> '<strong>Združena sporočila</strong><br />» iz %s',
	'LOG_TOPIC_DELETED'	=> '<strong>Izbrisana tema</strong><br />» %s',
	'LOG_TOPIC_APPROVED'	=> '<strong>Odobrena tema</strong><br />» %s',
	'LOG_TOPIC_DISAPPROVED'	=> '<strong>Neodobrena tema “%1$s” zaradi</strong><br />%2$s',
	'LOG_TOPIC_RESYNC'	=> '<strong>Ponovno usklajen števec tem</strong><br />» %s',
	'LOG_TOPIC_TYPE_CHANGED'	=> '<strong>Spremenjen tip teme</strong><br />» %s',
	'LOG_UNLOCK'	=> '<strong>Odklenjena tema</strong><br />» %s',
	'LOG_UNLOCK_POST'	=> '<strong>Odklenjeno sporočilo</strong><br />» %s',
	'LOG_DISALLOW_ADD'	=> '<strong>Dodano nedovoljeno uporabniško ime</strong><br />» %s',
	'LOG_DISALLOW_DELETE'	=> '<strong>Izbrisano nedovoljeno uporabniško ime</strong>',
	'LOG_DB_BACKUP'	=> '<strong>Varnostna kopija podatkovne baze</strong>',
	'LOG_DB_DELETE'	=> '<strong>Varnostna kopija podatkovne baze izbrisana</strong>',
	'LOG_DB_RESTORE'	=> '<strong>Varnostna kopija podatkovne baze obnovljena</strong>',
	'LOG_DOWNLOAD_EXCLUDE_IP'	=> '<strong>IP/domena prepovedana na seznamu nalaganja</strong><br />» %s',
	'LOG_DOWNLOAD_IP'	=> '<strong>IP/domena dodana na seznam nalaganja</strong><br />» %s',
	'LOG_DOWNLOAD_REMOVE_IP'	=> '<strong>IP/domena odstranjena iz seznama nalaganja</strong><br />» %s',
	'LOG_ERROR_JABBER'	=> '<strong>Jabber napaka</strong><br />» %s',
	'LOG_ERROR_EMAIL'	=> '<strong>E-mail napaka</strong><br />» %s',
	'LOG_FORUM_ADD'	=> '<strong>Ustvarjen nov forum</strong><br />» %s',
	'LOG_FORUM_DEL_FORUM'	=> '<strong>Izbrisan forum</strong><br />» %s',
	'LOG_FORUM_DEL_FORUMS'	=> '<strong>Izbrisan forum in njegovi podforumi</strong><br />» %s',
	'LOG_FORUM_DEL_MOVE_FORUMS'	=> '<strong>Izbrisan forum, podforumi premaknjeni</strong> v %1$s<br />» %2$s',
	'LOG_FORUM_DEL_MOVE_POSTS'	=> '<strong>Izbrisan forum, sporočila premaknjena</strong> v %1$s<br />» %2$s',
	'LOG_FORUM_DEL_MOVE_POSTS_FORUMS'	=> '<strong>Izbrisan forum in njegovi podforumi, sporočila premaknjena</strong> v %1$s<br />» %2$s',
	'LOG_FORUM_DEL_MOVE_POSTS_MOVE_FORUMS'	=> '<strong>Izbrisan forum, sporočila premaknjena</strong> v %1$s <strong>in podforumi</strong> v %2$s<br />» %3$s',
	'LOG_FORUM_DEL_POSTS'	=> '<strong>Izbrisan forum in njegova sporočila</strong><br />» %s',
	'LOG_FORUM_DEL_POSTS_FORUMS'	=> '<strong>Izbrisan forum, njegova sporočila in njegovi podforumi</strong><br />» %s',
	'LOG_FORUM_DEL_POSTS_MOVE_FORUMS'	=> '<strong>Izbrisan forum in njegova sporočila, podforumi premaknjeni</strong> v %1$s<br />» %2$s',
	'LOG_FORUM_EDIT'	=> '<strong>Spremenjene podrobnosti foruma</strong><br />» %s',
	'LOG_FORUM_MOVE_DOWN'	=> '<strong>Forum</strong> %1$s <strong>premaknjen navzdol</strong> %2$s',
	'LOG_FORUM_MOVE_UP'	=> '<strong>Forum</strong> %1$s <strong>premaknjen navzgor</strong> %2$s',
	'LOG_FORUM_SYNC'	=> '<strong>Ponovno usklajen forum</strong><br />» %s',
	'LOG_GROUP_CREATED'	=> '<strong>Ustvarjena je nova uporabniška skupina</strong><br />» %s',
	'LOG_GROUP_DEFAULTS'	=> '<strong>Skupina “%1$s” je osnovna za člane</strong><br />» %2$s',
	'LOG_GROUP_DELETE'	=> '<strong>Izbrisana uporabniška skupina</strong><br />» %s',
	'LOG_GROUP_DEMOTED'	=> '<strong>Vodje uporabniške skupine</strong> %1$s degradirani<br />» %2$s',
	'LOG_GROUP_PROMOTED'	=> '<strong>Člani v uporabniški skupini</strong> %1$s povišani v vodje<br />» %2$s',
	'LOG_GROUP_REMOVE'	=> '<strong>Člani uporaniške skupine</strong> %1$s odstranjeni<br />» %2$s',
	'LOG_GROUP_UPDATED'	=> '<strong>Podrobnosti uporabniške skupine posodobljene</strong><br />» %s',
	'LOG_MODS_ADDED'	=> '<strong>Uporabniški skupini</strong> %1$s so bili dodani nove vodje<br />» %2$s',
	'LOG_USERS_APPROVED'	=> '<strong>Uporabniki v uporabniški skupini</strong> %1$s so odobreni<br />» %2$s',
	'LOG_USERS_ADDED'	=> '<strong>Novi člani dodani v uporabniško skupino</strong> %1$s<br />» %2$s',
	'LOG_IMAGESET_ADD_DB'	=> '<strong>Nov nabor slik dodan v podatkovno bazo</strong><br />» %s',
	'LOG_IMAGESET_ADD_FS'	=> '<strong>Dodaj nov nabor slik na datotečni sistem</strong><br />» %s',
	'LOG_IMAGESET_DELETE'	=> '<strong>Nabor slik izbrisan</strong><br />» %s',
	'LOG_IMAGESET_EDIT_DETAILS'	=> '<strong>Podrobnosti o naboru slik spremenjene</strong><br />» %s',
	'LOG_IMAGESET_EDIT'	=> '<strong>Nabor slik spremenjen</strong><br />» %s',
	'LOG_IMAGESET_EXPORT'	=> '<strong>Nabor slik izvožen</strong><br />» %s',
	'LOG_IMAGESET_LANG_MISSING'	=> '<strong>Naboru slik manjka “%2$s” lokalizacija</strong><br />» %1$s',
	'LOG_IMAGESET_LANG_REFRESHED'	=> '<strong>Osvežena “%2$s” lokalizacija nabora slik</strong><br />» %1$s',
	'LOG_IMAGESET_REFRESHED'	=> '<strong>Osvežen nabor slik</strong><br />» %s',
	'LOG_INACTIVE_ACTIVATE'	=> '<strong>Aktivirani neaktivni uporabniki</strong><br />» %s',
	'LOG_INACTIVE_DELETE'	=> '<strong>Izbrisani neaktivni uporabniki</strong><br />» %s',
	'LOG_INACTIVE_REMIND'	=> '<strong>Pošlji elektronska sporočila neaktivnim uporabnikom</strong><br />» %s',
	'LOG_INSTALL_CONVERTED'	=> '<strong>Spremeni iz %1$s v phpBB %2$s</strong>',
	'LOG_INSTALL_INSTALLED'	=> '<strong>Instaliran phpBB %s</strong>',
	'LOG_IP_BROWSER_FORWARDED_CHECK'	=> '<strong>Neuspešno preverjena seja IP/brskljalnik/X_FORWARDED_FOR</strong><br />»Uporabnikov IP “<em>%1$s</em>” primerjan z IP seje “<em>%2$s</em>”, naslov uporabnikovega brskljalnika “<em>%3$s</em>” primerjan z naslovom seje brskljalnika “<em>%4$s</em>” in naslov uporabnikovega X_FORWARDED_FOR “<em>%5$s</em>” primerjan z sejnim X_FORWARDED_FOR naslovom “<em>%6$s</em>”.',
	'LOG_JAB_CHANGED'	=> '<strong>Jabber račun spremenjen</strong>',
	'LOG_JAB_PASSCHG'	=> '<strong>Jabber geslo spremenjeno</strong>',
	'LOG_JAB_REGISTER'	=> '<strong>Jabber račun registriran</strong>',
	'LOG_JAB_SETTINGS_CHANGED'	=> '<strong>Jabber nastavitve spremenjene</strong>',
	'LOG_LANGUAGE_PACK_DELETED'	=> '<strong>Izbrisan jezikovni paket</strong><br />» %s',
	'LOG_LANGUAGE_PACK_INSTALLED'	=> '<strong>Instaliran jezikovni paket</strong><br />» %s',
	'LOG_LANGUAGE_PACK_UPDATED'	=> '<strong>Posodobljene podrobnosti jezikovnega paketa</strong><br />» %s',
	'LOG_LANGUAGE_FILE_REPLACED'	=> '<strong>Zamenjan jezikovni paket</strong><br />» %s',
	'LOG_LANGUAGE_FILE_SUBMITTED'	=> '<strong>Sprejeta jezikovna datoteka in premeščena v mapo za shranjevanje</strong><br />» %s',
	'LOG_MASS_EMAIL'	=> '<strong>Poslan množičen e-mail</strong><br />» %s',
	'LOG_MCP_CHANGE_POSTER'	=> '<strong>Zamenjan pisec v temi “%1$s”</strong><br />» iz %2$s v %3$s',
	'LOG_MODULE_DISABLE'	=> '<strong>Modul onemogočen</strong><br />» %s',
	'LOG_MODULE_ENABLE'	=> '<strong>Modul omogočen</strong><br />» %s',
	'LOG_MODULE_MOVE_DOWN'	=> '<strong>Modul premaknjen</strong><br />» %1$s navzdol %2$s',
	'LOG_MODULE_MOVE_UP'	=> '<strong>Modul premaknjen</strong><br />» %1$s navzgor %2$s',
	'LOG_MODULE_REMOVED'	=> '<strong>Modul odstranjen</strong><br />» %s',
	'LOG_MODULE_ADD'	=> '<strong>Modul dodan</strong><br />» %s',
	'LOG_MODULE_EDIT'	=> '<strong>Modul urejen</strong><br />» %s',
	'LOG_A_ROLE_ADD'	=> '<strong>Dodana administratorska funkcija</strong><br />» %s',
	'LOG_A_ROLE_EDIT'	=> '<strong>Urejena administratorska funkcija</strong><br />» %s',
	'LOG_A_ROLE_REMOVED'	=> '<strong>Odstranjena administratorska funkcija</strong><br />» %s',
	'LOG_F_ROLE_ADD'	=> '<strong>Dodana funkcija foruma</strong><br />» %s',
	'LOG_F_ROLE_EDIT'	=> '<strong>Urejena funkcija foruma</strong><br />» %s',
	'LOG_F_ROLE_REMOVED'	=> '<strong>Odstranjena funkcija foruma</strong><br />» %s',
	'LOG_M_ROLE_ADD'	=> '<strong>Dodana funkcija moderatorja</strong><br />» %s',
	'LOG_M_ROLE_EDIT'	=> '<strong>Urejena funkcija moderatorja</strong><br />» %s',
	'LOG_M_ROLE_REMOVED'	=> '<strong>Odstranjena funkcija moderatorja</strong><br />» %s',
	'LOG_U_ROLE_ADD'	=> '<strong>Dodana uporabniška funkcija</strong><br />» %s',
	'LOG_U_ROLE_EDIT'	=> '<strong>Urejena uporabniška funkcija</strong><br />» %s',
	'LOG_U_ROLE_REMOVED'	=> '<strong>Odstranjena uporabniška funkcija</strong><br />» %s',
	'LOG_PROFILE_FIELD_ACTIVATE'	=> '<strong>Polje profila aktivirano</strong><br />» %s',
	'LOG_PROFILE_FIELD_CREATE'	=> '<strong>Polje profila dodano</strong><br />» %s',
	'LOG_PROFILE_FIELD_DEACTIVATE'	=> '<strong>Polje profila deaktivirano</strong><br />» %s',
	'LOG_PROFILE_FIELD_EDIT'	=> '<strong>Polje profila spremenjeno</strong><br />» %s',
	'LOG_PROFILE_FIELD_REMOVED'	=> '<strong>Polje profila izbrisano</strong><br />» %s',
	'LOG_PRUNE'	=> '<strong>Forumi očiščeni</strong><br />» %s',
	'LOG_AUTO_PRUNE'	=> '<strong>Forumi avtomatsko očiščeni</strong><br />» %s',
	'LOG_PRUNE_USER_DEAC'	=> '<strong>Uporabniki deaktivirani</strong><br />» %s',
	'LOG_PRUNE_USER_DEL_DEL'	=> '<strong>Uporabniki očiščeni in sporočila izbrisana</strong><br />» %s',
	'LOG_PRUNE_USER_DEL_ANON'	=> '<strong>Uporabniki očiščeni, sporočila obdržana</strong><br />» %s',
	'LOG_PURGE_CACHE'	=> '<strong>Izbriši začasne datoteke</strong>',
	'LOG_RANK_ADDED'	=> '<strong>Dodaj novo stopnjo</strong><br />» %s',
	'LOG_RANK_REMOVED'	=> '<strong>Odstrani stopnjo</strong><br />» %s',
	'LOG_RANK_UPDATED'	=> '<strong>Posodobi stopnjo</strong><br />» %s',
	'LOG_REASON_ADDED'	=> '<strong>Dodaj razlog za prijavo/odklonitev</strong><br />» %s',
	'LOG_REASON_REMOVED'	=> '<strong>Odstranjen razlog za prijavo/odklonitev</strong><br />» %s',
	'LOG_REASON_UPDATED'	=> '<strong>Posodobljen razlog za prijavo/odklonitev</strong><br />» %s',
	'LOG_RESET_DATE'	=> '<strong>Začetni datum foruma resetiran</strong>',
	'LOG_RESET_ONLINE'	=> '<strong>Rekordno število uporabnikov resetirano</strong>',
	'LOG_RESYNC_POSTCOUNTS'	=> '<strong>Število uporabniških sporočil ponovno usklajeno</strong>',
	'LOG_RESYNC_POST_MARKING'	=> '<strong>Označene teme ponovno usklajene</strong>',
	'LOG_RESYNC_STATS'	=> '<strong>Statistika sporočil, tem in uporabnikov ponovno usklajena</strong>',
	'LOG_SEARCH_INDEX_CREATED'	=> '<strong>Ustvari iskalni indeks za</strong><br />» %s',
	'LOG_SEARCH_INDEX_REMOVED'	=> '<strong>Odstrani iskalni indeks za</strong><br />» %s',
	'LOG_STYLE_ADD'	=> '<strong>Dodaj nov slog</strong><br />» %s',
	'LOG_STYLE_DELETE'	=> '<strong>Izbriši slog</strong><br />» %s',
	'LOG_STYLE_EDIT_DETAILS'	=> '<strong>Uredi slog</strong><br />» %s',
	'LOG_STYLE_EXPORT'	=> '<strong>Izvozi slog</strong><br />» %s',
	'LOG_TEMPLATE_ADD_DB'	=> '<strong>Nov nabor predlog dodan v bazo</strong><br />» %s',
	'LOG_TEMPLATE_ADD_FS'	=> '<strong>Dodaj nov nabor predlog na datotečni sistem</strong><br />» %s',
	'LOG_TEMPLATE_CACHE_CLEARED'	=> '<strong>Izbriši začasne datoteke v naboru predlog <em>%1$s</em></strong><br />» %2$s',
	'LOG_TEMPLATE_DELETE'	=> '<strong>Nabor predlog izbrisan</strong><br />» %s',
	'LOG_TEMPLATE_EDIT'	=> '<strong>Nabor predlog urejen <em>%1$s</em></strong><br />» %2$s',
	'LOG_TEMPLATE_EDIT_DETAILS'	=> '<strong>Spremenjene podrobnosti predloge</strong><br />» %s',
	'LOG_TEMPLATE_EXPORT'	=> '<strong>Nabor predlog izvožen</strong><br />» %s',
	'LOG_TEMPLATE_REFRESHED'	=> '<strong>Nabor predlog osvežen</strong><br />» %s',
	'LOG_THEME_ADD_DB'	=> '<strong>Nova tema dodana v bazo</strong><br />» %s',
	'LOG_THEME_ADD_FS'	=> '<strong>Dodaj novo temo na datotečni sistem</strong><br />» %s',
	'LOG_THEME_DELETE'	=> '<strong>Tema izbrisna</strong><br />» %s',
	'LOG_THEME_EDIT_DETAILS'	=> '<strong>Spremenjene podrobnosti teme</strong><br />» %s',
	'LOG_THEME_EDIT'	=> '<strong>Spremenjena tema <em>%1$s</em></strong>',
	'LOG_THEME_EDIT_FILE'	=> '<strong>Spremenjena tema <em>%1$s</em></strong><br />» Modificirana datoteka <em>%2$s</em>',
	'LOG_THEME_EXPORT'	=> '<strong>Izvozi temo</strong><br />» %s',
	'LOG_THEME_REFRESHED'	=> '<strong>Osveži temo</strong><br />» %s',
	'LOG_UPDATE_DATABASE'	=> '<strong>Podatkovna baza posodobljena iz %1$s verzije na %2$s verzijo</strong>',
	'LOG_UPDATE_PHPBB'	=> '<strong>phpBB posodobljen iz %1$s verzije na %2$s verzijo</strong>',
	'LOG_USER_ACTIVE'	=> '<strong>Uporabnik aktiviran</strong><br />» %s',
	'LOG_USER_BAN_USER'	=> '<strong>Uporabnik izobčen preko uporabniškega vmesnika</strong> zaradi “<em>%1$s</em>”<br />» %2$s',
	'LOG_USER_BAN_IP'	=> '<strong>IP izobčen preko uporabniškega vmesnika</strong> zaradi “<em>%1$s</em>”<br />» %2$s',
	'LOG_USER_BAN_EMAIL'	=> '<strong>E-mail izobčen preko uporabniškega vmesnika</strong> zaradi “<em>%1$s</em>”<br />» %2$s',
	'LOG_USER_DELETED'	=> '<strong>Uporabnik izbrisan</strong><br />» %s',
	'LOG_USER_DEL_ATTACH'	=> '<strong>Odstranjene vse priponke uporabnika</strong><br />» %s',
	'LOG_USER_DEL_AVATAR'	=> '<strong>Odstranjen avatar uporabnika</strong><br />» %s',
	'LOG_USER_DEL_POSTS'	=> '<strong>Odstranjena vsa sporočila uporabnika</strong><br />» %s',
	'LOG_USER_DEL_SIG'	=> '<strong>Odstranjen podpis uporabnika</strong><br />» %s',
	'LOG_USER_INACTIVE'	=> '<strong>Uporabnik deaktiviran</strong><br />» %s',
	'LOG_USER_MOVE_POSTS'	=> '<strong>Sporočila uporabnika premaknjena</strong><br />» sporočila uporabnika “%1$s” v forum “%2$s”',
	'LOG_USER_NEW_PASSWORD'	=> '<strong>Geslo uporabnika spremenjeno</strong><br />» %s',
	'LOG_USER_REACTIVATE'	=> '<strong>Prisiljena rekativacija uporabniškega računa</strong><br />» %s',
	'LOG_USER_UPDATE_EMAIL'	=> '<strong>Uporabnik “%1$s” je spremenil e-mail</strong><br />» iz “%2$s” v “%3$s”',
	'LOG_USER_UPDATE_NAME'	=> '<strong>Uporabniško ime spremenjeno</strong><br />» iz “%1$s” v “%2$s”',
	'LOG_USER_USER_UPDATE'	=> '<strong>Posodobljene podrobnosti uporabnika</strong><br />» %s',
	'LOG_USER_ACTIVE_USER'	=> '<strong>Uporabniški račun aktiviran</strong>',
	'LOG_USER_DEL_AVATAR_USER'	=> '<strong>Odstranjen avatar uporabnika</strong>',
	'LOG_USER_DEL_SIG_USER'	=> '<strong>Odstranjen podpis uporanika</strong>',
	'LOG_USER_FEEDBACK'	=> '<strong>Dodano uporabnikovo mnenje</strong><br />» %s',
	'LOG_USER_GENERAL'	=> '<strong>Dodan vnos</strong><br />» %s',
	'LOG_USER_INACTIVE_USER'	=> '<strong>Uporabniški račun deaktiviran</strong>',
	'LOG_USER_LOCK'	=> '<strong>Uporabnik je zaklenil lastno temo</strong><br />» %s',
	'LOG_USER_MOVE_POSTS_USER'	=> '<strong>Vsa sporočila premaknjena v forum</strong>» %s',
	'LOG_USER_REACTIVATE_USER'	=> '<strong>Prisiljena reaktivacija uporabniškega računa</strong>',
	'LOG_USER_UNLOCK'	=> '<strong>Uporabnik je odklenil lastno temo</strong><br />» %s',
	'LOG_USER_WARNING'	=> '<strong>Dodano opozorilo za uporabnike</strong><br />» %s',
	'LOG_USER_WARNING_BODY'	=> '<strong>Naslednje opozorilo je bilo izrečeno uporabniku</strong><br />» %s',
	'LOG_USER_GROUP_CHANGE'	=> '<strong>Uporabnik je spremenil osnovno skupino</strong><br />» %s',
	'LOG_USER_GROUP_DEMOTE'	=> '<strong>Uporabnik je bil degradiran iz vodje v uporabniški skupini</strong><br />» %s',
	'LOG_USER_GROUP_JOIN'	=> '<strong>Uporabnik se je pridružil skupini</strong><br />» %s',
	'LOG_USER_GROUP_JOIN_PENDING'	=> '<strong>Uporabnik se je pridružil skupini in čaka odobritev</strong><br />» %s',
	'LOG_USER_GROUP_RESIGN'	=> '<strong>Uporabnik je izstopil iz skupine</strong><br />» %s',
	'LOG_WORD_ADD'	=> '<strong>Dodan cenzor besed</strong><br />» %s',
	'LOG_WORD_DELETE'	=> '<strong>Izbrisan cenzor besed</strong><br />» %s',
	'LOG_WORD_EDIT'	=> '<strong>Spremenjen cenzor besed</strong><br />» %s',
));

?>