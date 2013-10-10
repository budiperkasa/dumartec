<?php
/**
*
* common.php [Slovenian]
*
* @package language
* @version $Id: $
* @copyright (c) 2008 phpBB Group
* @author 2008-11-20 - borut, kebabek, KoMar, kramp, lithium, mitja_i, NoBody, nSk, Razor, sollers, Tody, Veron, Janet, JureB
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
	'ERR_UNWATCHING'	=> 'Med odjavljanjem je prišlo do napake.',
	'ERR_WATCHING'	=> 'Med prijavljanjem je prišlo do napake.',

	'NUM_POSTS_IN_QUEUE'	=> array(
		'0'	=> 'V vrsti ni prispevkov',
		'1'	=> '1 prispevek v vrsti',
		'2'	=> '%d prispevkov v vrsti',
	),

	'TOO_LONG'	=> 'Vrednost, ki ste jo vnesli, je predolga.',
	'TOO_SHORT'	=> 'Vrednost, ki ste jo vnesli, je prekratka.',
	'AVATAR_DISALLOWED_CONTENT'	=> 'Nalaganje je bilo zavrnjeno, ker je bila naložena datoteka označena kot morebitna nevarnost.',
	'BROWSING_FORUM'	=> 'Uporabniki, ki brskajo po tem forumu: %1$s',
	'HIDDEN_USERS_TOTAL_AND'	=> '%d skritih in ',
	'HIDDEN_USERS_ZERO_TOTAL_AND'	=> '0 skrit in ',
	'HIDDEN_USER_TOTAL_AND'	=> '%d skrit in ',
	'KIB'	=> 'KiB',
	'MIB'	=> 'MiB',
	'REG_USERS_TOTAL_AND'	=> '%d registriranih in ',
	'REG_USERS_ZERO_TOTAL_AND'	=> '0 registriran in ',
	'REG_USER_TOTAL_AND'	=> '%d registriranih in ',
	'FORM_INVALID'	=> 'Predložen obrazec je neveljaven. Poskusite predložiti znova.',
	'TRANSLATION_INFO'	=> '',
	'DIRECTION'	=> 'ltr',
	'DATE_FORMAT'	=> '|d M Y|',
	'USER_LANG'	=> 'sl-si',
	'1_DAY'	=> '1 dan',
	'1_MONTH'	=> '1 mesec',
	'1_YEAR'	=> '1 leto',
	'2_WEEKS'	=> '2 tedna',
	'3_MONTHS'	=> '3 mesece',
	'6_MONTHS'	=> '6 mesece',
	'7_DAYS'	=> '7 dni',
	'ACCOUNT_ALREADY_ACTIVATED'	=> 'Vaš račun je že bil aktiviran.',
	'ACCOUNT_DEACTIVATED'	=> 'Vaš račun je bil ročno deaktiviran (aktivira ga lahko samo administrator).',
	'ACCOUNT_NOT_ACTIVATED'	=> 'Vaš račun še ni aktiviran.',
	'ACP'	=> 'Administrativna nadzorna plošča',
	'ACTIVE'	=> 'aktivni',
	'ACTIVE_ERROR'	=> 'To uporabniško ime je še neaktivno. Če imate težave z registracijo, kontaktirajte administratorja.',
	'ADMINISTRATOR'	=> 'Administrator',
	'ADMINISTRATORS'	=> 'Administratorji',
	'AGE'	=> 'Starost',
	'AIM'	=> 'AIM',
	'ALLOWED'	=> 'Dovoljeno',
	'ALL_FILES'	=> 'Vse datoteke',
	'ALL_FORUMS'	=> 'Vsi forumi',
	'ALL_MESSAGES'	=> 'Vsa sporočila',
	'ALL_POSTS'	=> 'Vsi prispevki',
	'ALL_TIMES'	=> 'Vsi časi so %1$s %2$s',
	'ALL_TOPICS'	=> 'Vse teme',
	'AND'	=> 'In',
	'ARE_WATCHING_FORUM'	=> 'Forum dodan za obveščanje o novih temah.',
	'ARE_WATCHING_TOPIC'	=> 'Forum dodan za obveščanje o novih sporočilih.',
	'ASCENDING'	=> 'Naraščajoče',
	'ATTACHMENTS'	=> 'Priponke',
	'ATTACHED_IMAGE_NOT_IMAGE'	=> 'Slika, ki ste jo pripeli, je pokvarjena.',
	'AUTHOR'	=> 'Avtor',
	'AUTH_NO_PROFILE_CREATED'	=> 'Uporabniški račun je bil uspešno ustvarjen.',
	'AVATAR_DISALLOWED_EXTENSION'	=> 'Ta datoteka ne more biti prikazana, saj format <strong>%s</strong> ni dovoljen.',
	'AVATAR_EMPTY_REMOTE_DATA'	=> 'Ni bilo mogoče naložiti avatarja, saj je izvorna datoteka pokvarjena.',
	'AVATAR_EMPTY_FILEUPLOAD'	=> 'Datoteka z avatarjem je prazna.',
	'AVATAR_INVALID_FILENAME'	=> '%s je neveljavno ime.',
	'AVATAR_NOT_UPLOADED'	=> 'Avatarja ni bilo mogoče posodobiti.',
	'AVATAR_NO_SIZE'	=> 'Širine in dolžine avatarja ni bilo mogoče določiti. Prosimo, vpišite ju ročno.',
	'AVATAR_PARTIAL_UPLOAD'	=> 'Datoteka je bila naložena le delno.',
	'AVATAR_PHP_SIZE_NA'	=> 'Velikost avatarja je prevelika.<br />Maximalna velikost v php.ini ni nastavljena.',
	'AVATAR_PHP_SIZE_OVERRUN'	=> 'Velikost avatarja je prevelika. Največja dovoljena velikost je %d MB.<br />Taka je nastavitev v php.ini in je ne morete popraviti.',
	'AVATAR_URL_INVALID'	=> 'Povezava URL ni veljavna.',
	'AVATAR_URL_NOT_FOUND'	=> 'Datoteka ni bila najdena.',
	'AVATAR_WRONG_FILESIZE'	=> 'Velikost avatarja mora biti med 0 in %1d %2s.',
	'AVATAR_WRONG_SIZE'	=> 'Naloženi avatar je širok %5$d pixlov in visok %6$d pixlov. Avatar mora biti širok vsaj %1$d pixlov in visok vsaj %2$d pixlov, ne sme pa biti širok več kot %3$d pixlov in visok več kot %4$d pixlov.',
	'BACK_TO_TOP'	=> 'Na vrh',
	'BACK_TO_PREV'	=> 'Nazaj na prešnjo stran',
	'BAN_TRIGGERED_BY_EMAIL'	=> 'Vaš e-mail je bil onemogočen.',
	'BAN_TRIGGERED_BY_IP'	=> 'Vaš IP je bil onemogočen.',
	'BAN_TRIGGERED_BY_USER'	=> 'Vaše uporabniško ime je bilo onemogočeno.',
	'BBCODE_GUIDE'	=> 'Vodič BBCode',
	'BCC'	=> 'SKP',
	'BIRTHDAYS'	=> 'Rojstni dnevi',
	'BOARD_BAN_PERM'	=> 'Vaš račun je <strong>za vedno</strong> onemogočen na tem forumu.<br /><br />Za več informacij kontaktirajte %2$sadministratorja foruma%3$s.',
	'BOARD_BAN_REASON'	=> 'Razlog za onemogočitev: <strong>%s</strong>',
	'BOARD_BAN_TIME'	=> 'Vaš račun je onemogočen do <strong>%1$s</strong>.<br /><br />Za več informacij kontaktirajte %2$sadministratorja foruma%3$s',
	'BOARD_DISABLE'	=> 'Forum trenutno ni dosegljiv.',
	'BOARD_DISABLED'	=> 'Forum je trenutno izklopljen.',
	'BOARD_UNAVAILABLE'	=> 'Forum je začasno nedosegljiv. Prosimo, poizkusite ponovno čez nekaj minut.',
	'BROWSING_FORUM_GUEST'	=> 'Po forumu brska: %1$s in %2$d gost',
	'BROWSING_FORUM_GUESTS'	=> 'Po forumu brska: %1$s in %2$d gostov',
	'BYTES'	=> 'bajtov',
	'CANCEL'	=> 'Prekliči',
	'CHANGE'	=> 'Spremeni',
	'CHANGE_FONT_SIZE'	=> 'Spremeni velikost črk',
	'CHANGING_PREFERENCES'	=> 'Spremeni nastavitve foruma',
	'CHANGING_PROFILE'	=> 'Spremeni nastavitve računa',
	'CLICK_VIEW_PRIVMSG'	=> '%sPojdi v prejeta sporočila%s',
	'COLLAPSE_VIEW'	=> 'Zaprt pogled',
	'CLOSE_WINDOW'	=> 'Zapri okno',
	'COLOUR_SWATCH'	=> 'Barvni vzorec',
	'COMMA_SEPARATOR'	=> ', ',
	'CONFIRM'	=> 'Potrdi',
	'CONFIRM_CODE'	=> 'Potrditvena koda',
	'CONFIRM_CODE_EXPLAIN'	=> 'Vtipkaj kodo, ki jo vidiš na sliki. Vse črke so male, ničle ni.',
	'CONFIRM_CODE_WRONG'	=> 'Vpisana koda je napačna.',
	'CONFIRM_OPERATION'	=> 'Ste prepričani, da želite pognati to operacijo?',
	'CONGRATULATIONS'	=> 'Čestitamo',
	'CONNECTION_FAILED'	=> 'Povezava neuspela.',
	'CONNECTION_SUCCESS'	=> 'Povezava uspela!',
	'COOKIES_DELETED'	=> 'Forumski piškotki izbrisani.',
	'CURRENT_TIME'	=> 'Danes je %s',
	'DAY'	=> 'dan',
	'DAYS'	=> 'dni',
	'DELETE'	=> 'Briši',
	'DELETE_ALL'	=> 'Briši vse',
	'DELETE_COOKIES'	=> 'Zbriši vse piškotke ',
	'DELETE_MARKED'	=> 'Izbriši označeno',
	'DELETE_POST'	=> 'Izbriši prispevek',
	'DELIMITER'	=> 'Ločilnik',
	'DESCENDING'	=> 'Padajoče',
	'DISABLED'	=> 'Onemogočeno',
	'DISPLAY'	=> 'Prikaži',
	'DISPLAY_GUESTS'	=> 'Prikaži goste',
	'DISPLAY_MESSAGES'	=> 'Prikaži sporočila prejšnjih',
	'DISPLAY_POSTS'	=> 'Prikaži prispevke prejšnjih',
	'DISPLAY_TOPICS'	=> 'Prikaži teme prejšnjih',
	'DOWNLOADED'	=> 'Prenešeno',
	'DOWNLOADING_FILE'	=> 'Prenašam datoteko',
	'DOWNLOAD_COUNT'	=> 'Prenešeno %d krat',
	'DOWNLOAD_COUNTS'	=> 'Prenešeno %d krat',
	'DOWNLOAD_COUNT_NONE'	=> 'Še ni prenešeno',
	'VIEWED_COUNT'	=> 'Videno %d krat',
	'VIEWED_COUNTS'	=> 'Videno %d krat',
	'VIEWED_COUNT_NONE'	=> 'Še ni videno',
	'EDIT_POST'	=> 'Uredi prispevek',
	'EMAIL'	=> 'E-mail',
	'EMAIL_ADDRESS'	=> 'E-mail naslov',
	'EMAIL_SMTP_ERROR_RESPONSE'	=> 'Pri pošiljanju e-maila je prišlo do napake v <strong>vrstici %1$s</strong>. Rešitev: %2$s.',
	'EMPTY_SUBJECT'	=> 'Če želite oddati prispevek, morate napisati Zadevo.',
	'EMPTY_MESSAGE_SUBJECT'	=> 'Če želite poslati sporočilo, morate napisati Zadevo',
	'ENABLED'	=> 'Omogočeno',
	'ENCLOSURE'	=> 'Pripni',
	'ERR_CHANGING_DIRECTORY'	=> 'Menjava direktorijev ni mogoča.',
	'ERR_CONNECTING_SERVER'	=> 'Ne morem se povezati na strežnik.',
	'ERR_UNABLE_TO_LOGIN'	=> 'Vpisano upor. ime ali geslo je napačno.',
	'ERR_WRONG_PATH_TO_PHPBB'	=> 'Pot do phpBB je najverjetneje napačna.',
	'EXPAND_VIEW'	=> 'Razširi pogled',
	'EXTENSION'	=> 'Razširitve',
	'EXTENSION_DISABLED_AFTER_POSTING'	=> 'Razširitev <strong>%s</strong> Je bila deaktivirana in je ni mogoče prikazati.',
	'FAQ'	=> 'FAQ',
	'FAQ_EXPLAIN'	=> 'Že zastavljena vprašanja',
	'FILENAME'	=> 'Ime datoteke',
	'FILESIZE'	=> 'Velikost datoteke',
	'FILEDATE'	=> 'Datum datoteke',
	'FILE_COMMENT'	=> 'Komentar datoteke',
	'FILE_NOT_FOUND'	=> 'Zahtevane datoteke ni bilo mogoče najti.',
	'FIND_USERNAME'	=> 'Poišči uporabnika',
	'FOLDER'	=> 'Mapa',
	'FORGOT_PASS'	=> 'Pozabljeno geslo?',
	'FORUM'	=> 'Forum',
	'FORUMS'	=> 'Forumi',
	'FORUMS_MARKED'	=> 'Vsi forumi so bili označeni kot prebrani.',
	'FORUM_CAT'	=> 'Kategorija',
	'FORUM_INDEX'	=> 'Seznam forumov',
	'FORUM_LINK'	=> 'Forumska povezava',
	'FORUM_LOCATION'	=> 'Lokacija foruma',
	'FORUM_LOCKED'	=> 'Forum zaklenjen',
	'FORUM_RULES'	=> 'Pravila foruma',
	'FORUM_RULES_LINK'	=> 'Klikni tukaj za prikaz pravil na forumu',
	'FROM'	=> 'od',
	'FSOCK_DISABLED'	=> 'Operacije ni bilo mogoče dokončati, saj je bila funkcija <var>fsockopen</var> onemogočena ali pa strežnika, ki ga iščete, ni mogoče najti.',
	'FTP_FSOCK_HOST'	=> 'FTP strežnik',
	'FTP_FSOCK_HOST_EXPLAIN'	=> 'FTP strežnik uporabljen za povezavo na vašo stran.',
	'FTP_FSOCK_PASSWORD'	=> 'FTP geslo',
	'FTP_FSOCK_PASSWORD_EXPLAIN'	=> 'Geslo za vaše FTP upor. ime.',
	'FTP_FSOCK_PORT'	=> 'FTP vrata',
	'FTP_FSOCK_PORT_EXPLAIN'	=> 'Vrata vašega FTP strežnika.',
	'FTP_FSOCK_ROOT_PATH'	=> 'Pot do phpBB',
	'FTP_FSOCK_ROOT_PATH_EXPLAIN'	=> 'Pot od root do phpBB foruma.',
	'FTP_FSOCK_TIMEOUT'	=> 'Povezava do FTP pretečena',
	'FTP_FSOCK_TIMEOUT_EXPLAIN'	=> 'Čas, v sekundah, ki bo strežnik čakal za komunikacijo z vašim računalnikom.',
	'FTP_FSOCK_USERNAME'	=> 'FTP upor. ime',
	'FTP_FSOCK_USERNAME_EXPLAIN'	=> 'Uporabniško ime za vaš FTP.',
	'FTP_HOST'	=> 'FTP strežnik',
	'FTP_HOST_EXPLAIN'	=> 'FTP strežnik uporabljen za povezavo na vašo stran.',
	'FTP_PASSWORD'	=> 'FTP geslo',
	'FTP_PASSWORD_EXPLAIN'	=> 'Geslo za vaše FTP upor. ime.',
	'FTP_PORT'	=> 'FTP vrata',
	'FTP_PORT_EXPLAIN'	=> 'Vrata vašega FTP strežnika.',
	'FTP_ROOT_PATH'	=> 'Pot do phpBB',
	'FTP_ROOT_PATH_EXPLAIN'	=> 'Pot od root do phpBB foruma.',
	'FTP_TIMEOUT'	=> 'Povezava do FTP pretečena',
	'FTP_TIMEOUT_EXPLAIN'	=> 'Čas, v sekundah, ki bo strežnik čakal za komunikacijo z vašim računalnikom..',
	'FTP_USERNAME'	=> 'FTP upor. ime',
	'FTP_USERNAME_EXPLAIN'	=> 'Uporabniško ime za vaš FTP.',
	'GENERAL_ERROR'	=> 'Splošna napaka',
	'GO'	=> 'Pojdi',
	'GOTO_PAGE'	=> 'Pojdi na stran',
	'GROUP'	=> 'Skupina',
	'GROUPS'	=> 'Skupine',
	'GROUP_ERR_TYPE'	=> 'Tip skupine je neprimeren.',
	'GROUP_ERR_USERNAME'	=> 'Manjka ime skupine',
	'GROUP_ERR_USER_LONG'	=> 'Imena skupin naj ne presežejo 60 črk. Napisano ime je predolgo.',
	'GUEST'	=> 'Gost',
	'GUEST_USERS_ONLINE'	=> '%d gostov brska po strani',
	'GUEST_USERS_TOTAL'	=> '%d gostov',
	'GUEST_USERS_ZERO_ONLINE'	=> 'Trenutno ne brska 0 gostov',
	'GUEST_USERS_ZERO_TOTAL'	=> '0 gostov',
	'GUEST_USER_ONLINE'	=> '%d gostov brska po strani',
	'GUEST_USER_TOTAL'	=> '%d gostov',
	'G_ADMINISTRATORS'	=> 'Administratorji',
	'G_BOTS'	=> 'Boti',
	'G_GUESTS'	=> 'Gostje',
	'G_REGISTERED'	=> 'Registrirani uporabniki',
	'G_REGISTERED_COPPA'	=> 'Registrirani uporabniki pod 18 let (ZDA)',
	'G_GLOBAL_MODERATORS'	=> 'Globalni moderatorji',
	'HIDDEN_USERS_ONLINE'	=> '%d skritih uporabnikov',
	'HIDDEN_USERS_TOTAL'	=> '%d skritih in ',
	'HIDDEN_USERS_ZERO_ONLINE'	=> '0 skritih uporabnikov na strani',
	'HIDDEN_USERS_ZERO_TOTAL'	=> '0 skritih in ',
	'HIDDEN_USER_ONLINE'	=> '%d skritih uporabnikov na strani',
	'HIDDEN_USER_TOTAL'	=> '%d skritih in ',
	'HIDE_GUESTS'	=> 'Skrij goste',
	'HIDE_ME'	=> 'Skrij me za za to sejo',
	'HOURS'	=> 'ur',
	'HOME'	=> 'Domov',
	'ICQ'	=> 'ICQ',
	'ICQ_STATUS'	=> 'ICQ status',
	'IF'	=> 'Če',
	'IMAGE'	=> 'Slika',
	'IMAGE_FILETYPE_INVALID'	=> 'Tip slike %d za MIME tip %s ni podprt.',
	'IMAGE_FILETYPE_MISMATCH'	=> 'Tipa slik se ne ujemata: dovoljene končnice so %1$s, končnica te slike pa je %2$s.',
	'IN'	=> 'v',
	'INDEX'	=> 'Prva stran',
	'INFORMATION'	=> 'Informacija',
	'INTERESTS'	=> 'Interesi',
	'INVALID_DIGEST_CHALLENGE'	=> 'Neveljavna varnostna potrditev.',
	'INVALID_EMAIL_LOG'	=> '<strong>%s</strong> je verjetno neveljaven email naslov.',
	'IP'	=> 'IP',
	'IP_BLACKLISTED'	=> 'Vaš IP %1$s je bil blokiran. Za več informacij poglejte <a href="%2$s">%2$s</a>.',
	'JABBER'	=> 'Jabber',
	'JOINED'	=> 'Pridružen',
	'JUMP_PAGE'	=> 'Vnesite številko strani, na katero želite skočiti.',
	'JUMP_TO'	=> 'Pojdi na',
	'JUMP_TO_PAGE'	=> 'Kliknite tu za skok na stran…',
	'KB'	=> 'KB',
	'LAST_POST'	=> 'Zadnji prispevek',
	'LAST_UPDATED'	=> 'Nazadnje posodobljeni',
	'LAST_VISIT'	=> 'Nazadnje obiskani',
	'LDAP_NO_LDAP_EXTENSION'	=> 'LDAP razširitev ni na voljo.',
	'LDAP_NO_SERVER_CONNECTION'	=> 'LDAP strežnik nedosegljiv.',
	'LEGEND'	=> 'Legenda',
	'LOCATION'	=> 'Kraj',
	'LOCK_POST'	=> 'Zakleni prispevek',
	'LOCK_POST_EXPLAIN'	=> 'Onemogoči urejanje',
	'LOCK_TOPIC'	=> 'Zakleni temo',
	'LOGIN'	=> 'Prijava',
	'LOGIN_CHECK_PM'	=> 'Prijava za pregled zasebnih sporočil.',
	'LOGIN_CONFIRMATION'	=> 'Potrditev prijave',
	'LOGIN_CONFIRM_EXPLAIN'	=> 'Da bi preprečili registracijo nezaželjenih reklamnih botov, morate vpisati potrditveno kodo. Omenjena koda je napisana na sliki, ki jo vidite spodaj. Če imate težave, kontaktirajte %sadministratorja%s.',
	'LOGIN_ERROR_ATTEMPTS'	=> 'Presegli ste limit poskusov registracije. Prosimo vas, da vpišete kodo, ki jo vidite na sliki spodaj.',
	'LOGIN_ERROR_EXTERNAL_AUTH_APACHE'	=> 'Apache vas ni prepoznal.',
	'LOGIN_ERROR_PASSWORD'	=> 'Vpisali ste napačno geslo. Prosimo, preverite če je geslo pravilno in poskusite znova. Če se napaka ponavlja, kontaktirajte %sadministratorja%s.',
	'LOGIN_ERROR_PASSWORD_CONVERT'	=> 'Ni bilo mogoče pretvoriti vašega gesla. Prosimo, %szaprosite za novo geslo%s. Če se napaka ponavlja, kontaktirajte %sadministratorja%s.',
	'LOGIN_ERROR_USERNAME'	=> 'Vpisali ste napačno upor. ime. Prosimo, preverite če je upor. ime pravilno in poskusite znova. Če se napaka ponavlja, kontaktirajte %sadministratorja%s.',
	'LOGIN_FORUM'	=> 'Za ogled foruma morate vpisati geslo.',
	'LOGIN_INFO'	=> 'Za prijavo se morate najprej registrirati. Registracija vam vzame le nekaj sekund in vam odpre več možnosti na forumu. Preden se registrirate, se prepričajte, da ste seznanjeni s pravili. Prosimo, preberite vsa pravila foruma.',
	'LOGIN_VIEWFORUM'	=> 'Za ogled tega foruma se morate najprej prijaviti.',
	'LOGIN_EXPLAIN_EDIT'	=> 'Za urejanje sporočil morate biti prijavljeni.',
	'LOGOUT'	=> 'Odjava',
	'LOGOUT_USER'	=> 'Odjava [ %s ]',
	'LOG_ME_IN'	=> 'Samodejna prijava ob vsakem obisku (priporočamo):',
	'MARK'	=> 'Označi',
	'MARK_ALL'	=> 'Označi vse',
	'MARK_FORUMS_READ'	=> 'Označi forume kot prebrane',
	'MB'	=> 'MB',
	'MCP'	=> 'Moderatorska nadzorna plošča',
	'MEMBERLIST'	=> 'Uporabniki',
	'MEMBERLIST_EXPLAIN'	=> 'Poglej si celoten seznam uporabnikov.',
	'MERGE'	=> 'Združi',
	'MERGE_POSTS'	=> 'Združi prispevke',
	'MERGE_TOPIC'	=> 'Združi teme',
	'MESSAGE'	=> 'Sporočilo',
	'MESSAGES'	=> 'Sporočila',
	'MESSAGE_BODY'	=> 'Telo sporočila',
	'MINUTES'	=> 'Minut',
	'MODERATE'	=> 'Moderiraj',
	'MODERATOR'	=> 'Moderator',
	'MODERATORS'	=> 'Moderatorji',
	'MONTH'	=> 'Mesec',
	'MOVE'	=> 'Premakni',
	'MSNM'	=> 'MSNM/WLM',
	'NA'	=> 'N/A',
	'NEWEST_USER'	=> 'Nazadnje pridruženi uporabnik je <strong>%s</strong>',
	'NEW_MESSAGE'	=> 'Novo sporočilo',
	'NEW_MESSAGES'	=> 'Nova sporočila',
	'NEW_PM'	=> '<strong>%d</strong> novo sporočilo',
	'NEW_PMS'	=> '<strong>%d</strong> nova sporočila',
	'NEW_POST'	=> 'Nove objave',
	'NEW_POSTS'	=> 'Novi prispevki',
	'NEXT'	=> 'Naslednja',
	'NEXT_STEP'	=> 'Naprej',
	'NEVER'	=> 'Nikoli',
	'NO'	=> 'Ne',
	'NOT_ALLOWED_MANAGE_GROUP'	=> 'Nimate dovoljenja za urejanje te skupine.',
	'NOT_AUTHORISED'	=> 'Nimate dovoljenja za dostop do te strani.',
	'NOT_WATCHING_FORUM'	=> 'Ne sledim več novim sporočilom v tem forumu.',
	'NOT_WATCHING_TOPIC'	=> 'Ne sledim več novim sporočilom na to temo.',
	'NOTIFY_ADMIN'	=> 'Prosimo, kontaktirajte administratorja ali upravljalca strani.',
	'NOTIFY_ADMIN_EMAIL'	=> 'Prosimo, kontaktirajte administratorja ali upravljalca strani: <a href="mailto:%1$s">%1$s</a>',
	'NO_ACCESS_ATTACHMENT'	=> 'Nimate dostopa do te datoteke.',
	'NO_ACTION'	=> 'Noben ukaz ni podan.',
	'NO_ADMINISTRATORS'	=> 'Na forumu ni administratorjev.',
	'NO_AUTH_ADMIN'	=> 'Nimate dostopa do administratorskega kotička, saj nimate ustreznih pravic.',
	'NO_AUTH_ADMIN_USER_DIFFER'	=> 'V administrativno nadzorno ploščo se z izbranim računom ne morete prijaviti.',
	'NO_AUTH_OPERATION'	=> 'Operacije ni bilo mogoče dokončati, saj nimate dovolj pravic.',
	'NO_CONNECT_TO_SMTP_HOST'	=> 'Povezava do SMTP strežnika ni mogoča : %1$s : %2$s',
	'NO_BIRTHDAYS'	=> 'Ni rojstnih dnevov',
	'NO_EMAIL_MESSAGE'	=> 'E-mail sporočilo je bilo prazno.',
	'NO_EMAIL_RESPONSE_CODE'	=> 'Z mail strežnika ni bilo mogoče dobiti odgovornih kod.',
	'NO_EMAIL_SUBJECT'	=> 'V e-mailu manjka zadeva.',
	'NO_FORUM'	=> 'Zahtevani forum ne obstaja.',
	'NO_FORUMS'	=> 'Ta forum nima tem.',
	'NO_GROUP'	=> 'Zahtevana skupina ne obstaja.',
	'NO_GROUP_MEMBERS'	=> 'Ta skupina je še brez članov.',
	'NO_IPS_DEFINED'	=> 'IP ni definiran',
	'NO_MEMBERS'	=> 'Iskanje uporabnika ni obrodilo sadov.',
	'NO_MESSAGES'	=> 'Brez sporočil',
	'NO_MODE'	=> 'Možnost ni vključena.',
	'NO_MODERATORS'	=> 'Ta forum še nima moderatorjev.',
	'NO_NEW_MESSAGES'	=> 'Ni novih sporočil',
	'NO_NEW_PM'	=> '<strong>0</strong> novih sporočil',
	'NO_NEW_POSTS'	=> 'Ni novih prispevkov',
	'NO_ONLINE_USERS'	=> '0 registriranih uporabnikov',
	'NO_POSTS'	=> 'Brez prispevkov',
	'NO_POSTS_TIME_FRAME'	=> 'Ni spročil na forumu v izbrani časovni enoti.',
	'NO_SUBJECT'	=> 'Zadeva ni definirana',
	'NO_SUCH_SEARCH_MODULE'	=> 'Nobena iskalna orodja niso bila najdena.',
	'NO_SUPPORTED_AUTH_METHODS'	=> 'Nobena avtentikacijska orodja niso bila najdena.',
	'NO_TOPIC'	=> 'Zahtevana tema ni najdena.',
	'NO_TOPICS'	=> 'V tej temi ni nobenih prispevkov.',
	'NO_TOPICS_TIME_FRAME'	=> 'Ni spročil na forumu v izbrani časovni enoti.',
	'NO_UNREAD_PM'	=> '<strong>0</strong> novih sporočil',
	'NO_UPLOAD_FORM_FOUND'	=> 'Nalaganje je bilo začeto, ni pa bil najden veljaven obrazec za nalaganje datotek.',
	'NO_USER'	=> 'Zahtevani uporabnik ne obstaja.',
	'NO_USERS'	=> 'Zahtevani uporabniki ne obstajajo.',
	'NO_USER_SPECIFIED'	=> 'Upor. ime ni definirano.',
	'OCCUPATION'	=> 'Poklic',
	'OFFLINE'	=> 'Odsoten',
	'ONLINE'	=> 'Prisoten',
	'ONLINE_BUDDIES'	=> 'Prisotni prijatelji',
	'ONLINE_USERS_TOTAL'	=> 'Po strani brska <strong>%d</strong> uporabnikov :: ',
	'ONLINE_USERS_ZERO_TOTAL'	=> 'Po strani ne brska <strong>nihče</strong> :: ',
	'ONLINE_USER_TOTAL'	=> 'Po strani brska <strong>%d</strong> uporabnik :: ',
	'OPTIONS'	=> 'Možnosti',
	'PAGE_OF'	=> 'Stran <strong>%1$d</strong> od <strong>%2$d</strong>',
	'PASSWORD'	=> 'Geslo',
	'PLAY_QUICKTIME_FILE'	=> 'Predvajaj Quicktime datoteko',
	'PM'	=> 'ZS',
	'POSTING_MESSAGE'	=> 'Prispevek napisan v %s',
	'POSTING_PRIVATE_MESSAGE'	=> 'pisanje zasebnega sporočila',
	'POST'	=> 'Odgovor',
	'POST_ANNOUNCEMENT'	=> 'Razglas',
	'POST_STICKY'	=> 'Lepljivek',
	'POSTED'	=> 'Objavljeno',
	'POSTED_IN_FORUM'	=> 'v',
	'POSTED_ON_DATE'	=> 'dne',
	'POSTS'	=> 'Prispevkov',
	'POSTS_UNAPPROVED'	=> 'Objava najmanj enega prispevka ni bila dovoljena.',
	'POST_BY_AUTHOR'	=> 'Napisal/-a',
	'POST_BY_FOE'	=> 'To sporočilo je napisal/-a <strong>%1$s</strong>, ki je trenutno na tvojem seznamu sovražnikov. %2$sPrikaži to sporočilo%3$s.',
	'POST_DAY'	=> '%.2f prispevkov na dan',
	'POST_DETAILS'	=> 'Podrobnosti prispevka',
	'POST_NEW_TOPIC'	=> 'Napiši novo temo',
	'POST_PCT'	=> '%.2f%% vseh prispevkov',
	'POST_PCT_ACTIVE'	=> '%.2f%% uporabnikovih prispevkov',
	'POST_PCT_ACTIVE_OWN'	=> '%.2f%% vaših prispevkov',
	'POST_REPLY'	=> 'Napiši odgovor',
	'POST_REPORTED'	=> 'Klikni za ogled prispevka',
	'POST_SUBJECT'	=> 'Naslov prispevka',
	'POST_TIME'	=> 'Čas prispevka',
	'POST_TOPIC'	=> 'Napiši novo temo',
	'POST_UNAPPROVED'	=> 'Ta prispevek še ni potrjen',
	'PREVIEW'	=> 'Predogled',
	'PREVIOUS'	=> 'Prejšnja',
	'PREVIOUS_STEP'	=> 'Nazaj',
	'PRIVACY'	=> 'Izjava o uporabi',
	'PRIVATE_MESSAGE'	=> 'Zasebno sporočilo',
	'PRIVATE_MESSAGES'	=> 'Zasebna sporočila',
	'PRIVATE_MESSAGING'	=> 'Zasebno sporočanje',
	'PROFILE'	=> 'Up. nadzorna plošča',
	'READING_FORUM'	=> 'Gleda temo v %s',
	'READING_GLOBAL_ANNOUNCE'	=> 'Gleda javna obvestila',
	'READING_LINK'	=> 'Sledi forumski povezavi %s',
	'READING_TOPIC'	=> 'Bere temo v %s',
	'READ_PROFILE'	=> 'Profil',
	'REASON'	=> 'Razlog',
	'RECORD_ONLINE_USERS'	=> 'Rekordno število uporabnikov na strani je <strong>%1$s</strong> z dne %2$s',
	'REDIRECT'	=> 'Preusmeritev',
	'REDIRECTS'	=> 'Skupno preusmeritev',
	'REGISTER'	=> 'Registriraj se!',
	'REGISTERED_USERS'	=> 'Registrirani uporabniki:',
	'REG_USERS_ONLINE'	=> 'Na strani je %d registriranih uporabnikov in ',
	'REG_USERS_TOTAL'	=> '%d registriranih, ',
	'REG_USERS_ZERO_ONLINE'	=> 'Na strani ni 0 registriranih uporabnikov in ',
	'REG_USERS_ZERO_TOTAL'	=> '0 registriranih, ',
	'REG_USER_ONLINE'	=> 'Na strani je %d registriran uporabnik in ',
	'REG_USER_TOTAL'	=> '%d registriranih, ',
	'REMOVE'	=> 'Odstrani',
	'REMOVE_INSTALL'	=> 'Prosimo brišite, premaknite ali preimenjujte inštalacijske datoteke, preden uporabite forum! Če bodo datoteke še vedno dosegljive, bo na voljo samo administracija.',
	'REPLIES'	=> 'Odgovori',
	'REPLY_WITH_QUOTE'	=> 'Odgovori s citatom',
	'REPLYING_GLOBAL_ANNOUNCE'	=> 'Odgovori v javnih obvestilih',
	'REPLYING_MESSAGE'	=> 'Odgovori sporočilu v %s',
	'REPORT_BY'	=> 'Prijava od',
	'REPORT_POST'	=> 'Prijavi ta prispevek',
	'REPORTING_POST'	=> 'Prijavljam prispevek',
	'RESEND_ACTIVATION'	=> 'Ponovno pošlji aktivacijski e-mail',
	'RESET'	=> 'Ponastavi',
	'RESTORE_PERMISSIONS'	=> 'Ponastavi dovoljenja',
	'RETURN_INDEX'	=> '%sVrni se na glavno stran%s',
	'RETURN_FORUM'	=> '%sVrni se na nazadnje gledan forum%s',
	'RETURN_PAGE'	=> '%sVrni se na prejšnjo stran%s',
	'RETURN_TOPIC'	=> '%sVrni se na nazadnje gledano temo%s',
	'RETURN_TO'	=> 'Vrni se na',
	'RULES_ATTACH_CAN'	=> '<strong>Lahko</strong> dodate priponke prispevkom',
	'RULES_ATTACH_CANNOT'	=> '<strong>Ne morete</strong> dodati priponk prispevkom',
	'RULES_DELETE_CAN'	=> '<strong>Lahko</strong> brišete prispevke v forumu',
	'RULES_DELETE_CANNOT'	=> '<strong>Ne morete</strong> brisati vaših prispevkov forumu',
	'RULES_DOWNLOAD_CAN'	=> '<strong>Lahko</strong> prenašate priponke v prispevkih',
	'RULES_DOWNLOAD_CANNOT'	=> '<strong>Ne morete</strong> prenašati priponk v prispevkih',
	'RULES_EDIT_CAN'	=> '<strong>Lahko</strong> urejate prispevke v temi',
	'RULES_EDIT_CANNOT'	=> '<strong>Ne morete</strong> urejati prispevkov v temi',
	'RULES_LOCK_CAN'	=> '<strong>Lahko</strong> zaklenete teme v forumu',
	'RULES_LOCK_CANNOT'	=> '<strong>Ne morete</strong> zakleniti tem v forumu',
	'RULES_POST_CAN'	=> '<strong>Lahko</strong> pišete prispevke v temi',
	'RULES_POST_CANNOT'	=> '<strong>Ne morete</strong> pisati prispevkov v temi',
	'RULES_REPLY_CAN'	=> '<strong>Lahko</strong> odgovarjate na teme v forumu',
	'RULES_REPLY_CANNOT'	=> '<strong>Ne morete</strong> odgovarjati na teme v forumu',
	'RULES_VOTE_CAN'	=> '<strong>Lahko</strong> glasujete v anketi',
	'RULES_VOTE_CANNOT'	=> '<strong>Ne morete</strong> glasovati v anketi',
	'SEARCH'	=> 'Iskanje',
	'SEARCH_MINI'	=> 'Išči…',
	'SEARCH_ADV'	=> 'Napredno iskanje',
	'SEARCH_ADV_EXPLAIN'	=> 'Možnosti naprednega iskanja',
	'SEARCH_KEYWORDS'	=> 'Iskanje po ključnih besedah',
	'SEARCHING_FORUMS'	=> 'Iščem po forumu',
	'SEARCH_ACTIVE_TOPICS'	=> 'Poglej aktivne teme',
	'SEARCH_FOR'	=> 'Išči za',
	'SEARCH_FORUM'	=> 'Preišči forum…',
	'SEARCH_NEW'	=> 'Nove teme',
	'SEARCH_POSTS_BY'	=> 'Išči prispevke od',
	'SEARCH_SELF'	=> 'Poglej svoje prispevke',
	'SEARCH_TOPIC'	=> 'Preišči to temo…',
	'SEARCH_UNANSWERED'	=> 'Neodgovorjeni prispevki',
	'SECONDS'	=> 'Sekund',
	'SELECT'	=> 'Izberi',
	'SELECT_ALL_CODE'	=> 'Izberi vse',
	'SELECT_DESTINATION_FORUM'	=> 'Prosimo, izberite ciljni forum',
	'SELECT_FORUM'	=> 'Izberi forum',
	'SEND_EMAIL'	=> 'E-mail',
	'SEND_EMAIL_USER'	=> 'Pošlji e-mail',
	'SEND_PRIVATE_MESSAGE'	=> 'Pošlji zasebno sporočilo',
	'SETTINGS'	=> 'Nastavitve',
	'SIGNATURE'	=> 'Podpis',
	'SKIP'	=> 'Skoči na vsebino',
	'SMTP_NO_AUTH_SUPPORT'	=> 'SMTP strežnik ne podpira avtentikacije.',
	'SORRY_AUTH_READ'	=> 'Nimate privilegijev za branje tega foruma.',
	'SORRY_AUTH_VIEW_ATTACH'	=> 'Nimate privilegijev za prenos te datoteke.',
	'SORT_BY'	=> 'Razvrsti po',
	'SORT_JOINED'	=> 'Datum registracije',
	'SORT_LOCATION'	=> 'Lokacija',
	'SORT_RANK'	=> 'Razvrsti',
	'SORT_TOPIC_TITLE'	=> 'Naslov teme',
	'SORT_USERNAME'	=> 'Uporabniško ime',
	'SPLIT_TOPIC'	=> 'Razcep teme',
	'SQL_ERROR_OCCURRED'	=> 'Med nalaganjem te strani je prišlo do SQL napake. Prosimo, kontaktirajte %sadministratorja%s, če se bo ta težava ponovila.',
	'STATISTICS'	=> 'Statistika',
	'START_WATCHING_FORUM'	=> 'Opazuj forum',
	'START_WATCHING_TOPIC'	=> 'Obveščaj o prispevkih',
	'STOP_WATCHING_FORUM'	=> 'Prenehaj opazovati forum',
	'STOP_WATCHING_TOPIC'	=> 'Ne obveščaj o prispevkih',
	'SUBFORUM'	=> 'Podforum',
	'SUBFORUMS'	=> 'Podforumi',
	'SUBJECT'	=> 'Zadeva',
	'SUBMIT'	=> 'Potrdi',
	'TERMS_USE'	=> 'Pogoji uporabe',
	'TEST_CONNECTION'	=> 'Testiraj povezavo',
	'THE_TEAM'	=> 'Ekipa',
	'TIME'	=> 'Čas',
	'TOO_LONG_AIM'	=> 'AIM uporabniško ime, ki ste ga vpisali, je predolgo.',
	'TOO_LONG_CONFIRM_CODE'	=> 'Potrditvena koda, ki ste jo vpisali, je predolga.',
	'TOO_LONG_ICQ'	=> 'ICQ številka, ki ste jo vpisali, je predolga.',
	'TOO_LONG_INTERESTS'	=> 'Interesi, ki ste jih navedli, so predolgi.',
	'TOO_LONG_JABBER'	=> 'Jabber račun, ki ste ga vpisali, je predolg.',
	'TOO_LONG_LOCATION'	=> 'Lokacija, ki ste jo vpisali, je predolga.',
	'TOO_LONG_MSN'	=> 'MSNM/WLM naslov, ki ste ga vpisali, je predolg.',
	'TOO_LONG_NEW_PASSWORD'	=> 'Novo geslo, ki ste ga vpisali, je predolgo.',
	'TOO_LONG_OCCUPATION'	=> 'Poklic, ki ste ga navedli, je predolg.',
	'TOO_LONG_PASSWORD_CONFIRM'	=> 'Potrditveno geslo, ki ste ga vpisali, je predolgo.',
	'TOO_LONG_USER_PASSWORD'	=> 'Geslo, ki ste ga vpisali, je predolgo.',
	'TOO_LONG_USERNAME'	=> 'Uporabniško ime, ki ste ga vpisali, je predolgo.',
	'TOO_LONG_EMAIL'	=> 'E-mail naslov, ki ste ga vpisali, je predolg.',
	'TOO_LONG_EMAIL_CONFIRM'	=> 'Potrditveni e-mail naslov, ki ste ga vpisali, je predolg.',
	'TOO_LONG_WEBSITE'	=> 'Spletni naslov, ki ste ga vpisali, je predolg.',
	'TOO_LONG_YIM'	=> 'Yahoo! Messenger naslov, ki ste ga vpisali, je predolg.',
	'TOO_MANY_VOTE_OPTIONS'	=> 'Poskusili ste glasovati za več opcij...',
	'TOO_SHORT_AIM'	=> 'AIM uporabniško ime, ki ste ga vpisali, je prekratko.',
	'TOO_SHORT_CONFIRM_CODE'	=> 'Potrditvena koda, ki ste jo vpisali, je prekratka.',
	'TOO_SHORT_ICQ'	=> 'ICQ številka, ki ste jo vpisali, je prekratka.',
	'TOO_SHORT_INTERESTS'	=> 'Interesi, ki ste jih navedli, so prekratki.',
	'TOO_SHORT_JABBER'	=> 'Jabber račun, ki ste ga vpisali, je prekratek.',
	'TOO_SHORT_LOCATION'	=> 'Lokacija, ki ste jo vpisali, je prekratka.',
	'TOO_SHORT_MSN'	=> 'MSNM/WLM naslov, ki ste ga vpisali, je prekratek.',
	'TOO_SHORT_NEW_PASSWORD'	=> 'Novo geslo, ki ste ga vpisali, je prekratko.',
	'TOO_SHORT_OCCUPATION'	=> 'Poklic, ki ste ga navedli, je prekratek.',
	'TOO_SHORT_PASSWORD_CONFIRM'	=> 'Potrditveno geslo, ki ste ga vpisali, je prekratko.',
	'TOO_SHORT_USER_PASSWORD'	=> 'Geslo, ki ste ga vpisali, je prekratko.',
	'TOO_SHORT_USERNAME'	=> 'Uporabniško ime, ki ste ga vpisali, je prekratko.',
	'TOO_SHORT_EMAIL'	=> 'E-mail naslov, ki ste ga vpisali, je prekratek.',
	'TOO_SHORT_EMAIL_CONFIRM'	=> 'Potrditveni e-mail naslov, ki ste ga vpisali, je prekratek.',
	'TOO_SHORT_WEBSITE'	=> 'Spletni naslov, ki ste ga vpisali, je prekratek.',
	'TOO_SHORT_YIM'	=> 'Yahoo! Messenger naslov, ki ste ga vpisali, je prekratek.',
	'TOPIC'	=> 'Tema',
	'TOPICS'	=> 'Teme',
	'TOPIC_ICON'	=> 'Ikona teme',
	'TOPIC_LOCKED'	=> 'Ta tema je zaklenjena - ne morete urejati prispevkov ali dodajati novih.',
	'TOPIC_MOVED'	=> 'Tema premaknjena',
	'TOPIC_REVIEW'	=> 'Preglej temo',
	'TOPIC_TITLE'	=> 'Naslov teme',
	'TOPIC_UNAPPROVED'	=> 'Ta tema ni bila odobrena',
	'TOTAL_ATTACHMENTS'	=> 'Pripete datoteke',
	'TOTAL_LOG'	=> '1 dnevnik',
	'TOTAL_LOGS'	=> '%d dnevniki',
	'TOTAL_NO_PM'	=> 'Skupaj 0 zasebnih sporočil',
	'TOTAL_PM'	=> 'Skupaj 1 zasebno sporočilo',
	'TOTAL_PMS'	=> 'Skupaj %d zasebnih sporočil',
	'TOTAL_POSTS'	=> 'Skupaj prispevkov',
	'TOTAL_POSTS_OTHER'	=> 'Skupaj <strong>%d</strong> prispevkov',
	'TOTAL_POSTS_ZERO'	=> 'Skupaj <strong>0</strong> prispevkov',
	'TOPIC_REPORTED'	=> 'Ta tema je bila komentirana',
	'TOTAL_TOPICS_OTHER'	=> 'Skupaj tem <strong>%d</strong>',
	'TOTAL_TOPICS_ZERO'	=> 'Skupaj tem <strong>0</strong>',
	'TOTAL_USERS_OTHER'	=> 'Skupaj uporabnikov <strong>%d</strong>',
	'TOTAL_USERS_ZERO'	=> 'Skupaj uporabnikov <strong>0</strong>',
	'TRACKED_PHP_ERROR'	=> 'Opažene PHP napake: %s',
	'UNABLE_GET_IMAGE_SIZE'	=> 'Ni bilo mogoče ugotoviti dimenzij slike.',
	'UNABLE_TO_DELIVER_FILE'	=> 'Datoteke ni mogoče dostaviti...',
	'UNKNOWN_BROWSER'	=> 'Neznan brskalnik',
	'UNMARK_ALL'	=> 'Odznači vse',
	'UNREAD_MESSAGES'	=> 'Neprebrana sporočila',
	'UNREAD_PM'	=> '<strong>%d</strong> neprebrano sporočilo',
	'UNREAD_PMS'	=> '<strong>%d</strong> neprebranih sporočil',
	'UNWATCHED_FORUMS'	=> 'Ne spremljaš več izbranih forumov.',
	'UNWATCHED_TOPICS'	=> 'Ne spremljaš več izbranih tem.',
	'UPDATE'	=> 'Posodobitve',
	'UPLOAD_IN_PROGRESS'	=> 'Nalaganje trenutno poteka.',
	'URL_REDIRECT'	=> 'Če tvoj brskalnik ne podpira samodejnih preusmeritev, %sprosimo kliknite tukaj%s.',
	'USERGROUPS'	=> 'Uporabniške skupine',
	'USERNAME'	=> 'Uporabniško ime',
	'USERNAMES'	=> 'Uporabniška imena',
	'USER_AVATAR'	=> 'Uporabniški avatar',
	'USER_CANNOT_READ'	=> 'Ne morete brati prispevkov v tem forumu.',
	'USER_POST'	=> '%d prispevek',
	'USER_POSTS'	=> '%d prispevkov',
	'USERS'	=> 'Uporabniki',
	'USE_PERMISSIONS'	=> 'Preizkus z uporabnikovimi dovoljenji',
	'VARIANT_DATE_SEPARATOR'	=> ' / ',
	'VIEWED'	=> 'Ogledan',
	'VIEWING_FAQ'	=> 'Ogledujem FAQ',
	'VIEWING_MEMBERS'	=> 'Ogledujem uporabnike',
	'VIEWING_ONLINE'	=> 'Ogledujem kdo je prisoten',
	'VIEWING_MCP'	=> 'Ogledujem moderatorjevo nadzorno ploščo',
	'VIEWING_MEMBER_PROFILE'	=> 'Ogledujem profil uporabnika',
	'VIEWING_PRIVATE_MESSAGES'	=> 'Ogledujem zasebna sporočila',
	'VIEWING_REGISTER'	=> 'Registracija računa',
	'VIEWING_UCP'	=> 'Ogledujem nadzorno ploščo uporabnika',
	'VIEWS'	=> 'Ogledi',
	'VIEW_BOOKMARKS'	=> 'Pogled priljubljenih',
	'VIEW_FORUM_LOGS'	=> 'Poglej dnevnik',
	'VIEW_LATEST_POST'	=> 'Poglej zadnji prispevek',
	'VIEW_NEWEST_POST'	=> 'Poglej prvi neprebrani prispevek',
	'VIEW_NOTES'	=> 'Poglej uporabnikove zapiske',
	'VIEW_ONLINE_TIME'	=> 'Podatki temeljijo na uporabnikih, dejavnih v zadnji %d minuti',
	'VIEW_ONLINE_TIMES'	=> 'Podatki temeljijo na uporabnikih, dejavnih v zadnjih %d minutah',
	'VIEW_TOPIC'	=> 'Poglej temo',
	'VIEW_TOPIC_ANNOUNCEMENT'	=> 'Obvestilo: ',
	'VIEW_TOPIC_GLOBAL'	=> 'Globalno obvestilo: ',
	'VIEW_TOPIC_LOCKED'	=> 'Zaklenjeno: ',
	'VIEW_TOPIC_LOGS'	=> 'Poglej dnevnik',
	'VIEW_TOPIC_MOVED'	=> 'Premaknjeno: ',
	'VIEW_TOPIC_POLL'	=> 'Anketa: ',
	'VIEW_TOPIC_STICKY'	=> 'Lepljivek: ',
	'VISIT_WEBSITE'	=> 'Obišči spletno stran',
	'WARNINGS'	=> 'Opozorila',
	'WARN_USER'	=> 'Opozori uporabnika',
	'WELCOME_SUBJECT'	=> 'Dobrodošli na forum %s',
	'WEBSITE'	=> 'Spletna stran',
	'WHOIS'	=> 'Whois',
	'WHO_IS_ONLINE'	=> 'Kdo je na strani',
	'WRONG_PASSWORD'	=> 'Vnesli ste napačno geslo.',
	'WRONG_DATA_ICQ'	=> 'Niste vnesli veljavne ICQ številke.',
	'WRONG_DATA_JABBER'	=> 'Niste vnesli veljavnega imena Jabber računa.',
	'WRONG_DATA_LANG'	=> 'Navedeni jezik ni veljaven.',
	'WRONG_DATA_WEBSITE'	=> 'Naslov spletne strani mora biti veljaven in vsebovati protokol, npr. http://www.primer.si/.',
	'YEAR'	=> 'Leto',
	'YEAR_MONTH_DAY'	=> '(LLLL-MM-DD)',
	'YES'	=> 'Da',
	'YIM'	=> 'YIM',
	'YOU_LAST_VISIT'	=> 'Zadnji obisk: %s',
	'YOU_NEW_PM'	=> 'Čaka vas novo zasebno sporočilo.',
	'YOU_NEW_PMS'	=> 'Čakajo vas nova zasebna sporočila.',
	'YOU_NO_NEW_PM'	=> 'Ni novih zasebnih sporočil.',

	'datetime'	=> array(
		'TODAY'	=> 'Danes',
		'TOMORROW'	=> 'Jutri',
		'YESTERDAY'	=> 'Včeraj',
		'Sunday'	=> 'Nedelja',
		'Monday'	=> 'Ponedeljek',
		'Tuesday'	=> 'Torek',
		'Wednesday'	=> 'Sreda',
		'Thursday'	=> 'Četrtek',
		'Friday'	=> 'Petek',
		'Saturday'	=> 'Sobota',
		'Sun'	=> 'Ne',
		'Mon'	=> 'Po',
		'Tue'	=> 'To',
		'Wed'	=> 'Sr',
		'Thu'	=> 'Če',
		'Fri'	=> 'Pe',
		'Sat'	=> 'So',
		'January'	=> 'januar',
		'February'	=> 'februar',
		'March'	=> 'marec',
		'April'	=> 'april',
		'May'	=> 'maj',
		'June'	=> 'junij',
		'July'	=> 'julij',
		'August'	=> 'avgust',
		'September'	=> 'september',
		'October'	=> 'oktober',
		'November'	=> 'november',
		'December'	=> 'december',
		'Jan'	=> 'jan',
		'Feb'	=> 'feb',
		'Mar'	=> 'mar',
		'Apr'	=> 'apr',
		'May_short'	=> 'maj',
		'Jun'	=> 'jun',
		'Jul'	=> 'jul',
		'Aug'	=> 'avg',
		'Sep'	=> 'sep',
		'Oct'	=> 'okt',
		'Nov'	=> 'nov',
		'Dec'	=> 'dec',
	),


	'tz'	=> array(
		'-12'	=> 'UTC - 12 ur',
		'-11'	=> 'UTC - 11 ur',
		'-10'	=> 'UTC - 10 ur',
		'-9.5'	=> 'UTC - 9:30 ur',
		'-9'	=> 'UTC - 9 ur',
		'-8'	=> 'UTC - 8 ur',
		'-7'	=> 'UTC - 7 ur',
		'-6'	=> 'UTC - 6 ur',
		'-5'	=> 'UTC - 5 ur',
		'-4'	=> 'UTC - 4 ur',
		'-3.5'	=> 'UTC - 3:30 ur',
		'-3'	=> 'UTC - 3 ur',
		'-2'	=> 'UTC - 2 ur',
		'-1'	=> 'UTC - 1 ura',
		'0'	=> 'UTC',
		'1'	=> 'UTC + 1 ura',
		'2'	=> 'UTC + 2 ur',
		'3'	=> 'UTC + 3 ur',
		'3.5'	=> 'UTC + 3:30 ur',
		'4'	=> 'UTC + 4 ur',
		'4.5'	=> 'UTC + 4:30 ur',
		'5'	=> 'UTC + 5 ur',
		'5.5'	=> 'UTC + 5:30 ur',
		'5.75'	=> 'UTC + 5:45 ur',
		'6'	=> 'UTC + 6 ur',
		'6.5'	=> 'UTC + 6:30 ur',
		'7'	=> 'UTC + 7 ur',
		'8'	=> 'UTC + 8 ur',
		'8.75'	=> 'UTC + 8:45 ur',
		'9'	=> 'UTC + 9 ur',
		'9.5'	=> 'UTC + 9:30 ur',
		'10'	=> 'UTC + 10 ur',
		'10.5'	=> 'UTC + 10:30 ur',
		'11'	=> 'UTC + 11 ur',
		'11.5'	=> 'UTC + 11:30 ur',
		'12'	=> 'UTC + 12 ur',
		'12.75'	=> 'UTC + 12:45 ur',
		'13'	=> 'UTC + 13 ur',
		'14'	=> 'UTC + 14 ur',
		'dst'	=> '[ <abbr title="Daylight Saving Time">DST</abbr> ]',
	),


	'tz_zones'	=> array(
		'-12'	=> '[UTC - 12]',
		'-11'	=> '[UTC - 11]',
		'-10'	=> '[UTC - 10]',
		'-9.5'	=> '[UTC - 9:30]',
		'-9'	=> '[UTC - 9]',
		'-8'	=> '[UTC - 8]',
		'-7'	=> '[UTC - 7]',
		'-6'	=> '[UTC - 6]',
		'-5'	=> '[UTC - 5]',
		'-4'	=> '[UTC - 4]',
		'-3.5'	=> '[UTC - 3:30]',
		'-3'	=> '[UTC - 3]',
		'-2'	=> '[UTC - 2]',
		'-1'	=> '[UTC - 1]',
		'0'	=> '[UTC]',
		'1'	=> '[UTC + 1]',
		'2'	=> '[UTC + 2]',
		'3'	=> '[UTC + 3]',
		'3.5'	=> '[UTC + 3:30]',
		'4'	=> '[UTC + 4]',
		'4.5'	=> '[UTC + 4:30]',
		'5'	=> '[UTC + 5]',
		'5.5'	=> '[UTC + 5:30]',
		'5.75'	=> '[UTC + 5:45]',
		'6'	=> '[UTC + 6]',
		'6.5'	=> '[UTC + 6:30]',
		'7'	=> '[UTC + 7]',
		'8'	=> '[UTC + 8]',
		'8.75'	=> '[UTC + 8:45]',
		'9'	=> '[UTC + 9]',
		'9.5'	=> '[UTC + 9:30]',
		'10'	=> '[UTC + 10]',
		'10.5'	=> '[UTC + 10:30]',
		'11'	=> '[UTC + 11]',
		'11.5'	=> '[UTC + 11:30]',
		'12'	=> '[UTC + 12]',
		'12.75'	=> '[UTC + 12:45]',
		'13'	=> '[UTC + 13]',
		'14'	=> '[UTC + 14]',
	),


	'dateformats'	=> array(
		'd M Y, H:i'	=> '01 Jan 2007, 13:37',
		'd M Y H:i'	=> '01 Jan 2007 13:37',
		'M jS, \'y, H:i'	=> 'Jan 1st, \'07, 13:37',
		'D M d, Y g:i a'	=> 'Mon Jan 01, 2007 1:37 pm',
		'F jS, Y, g:i a'	=> 'January 1st, 2007, 1:37 pm',
		'|d M Y|, H:i'	=> 'Danes, 13:37 / 01 Jan 2007, 13:37',
		'|F jS, Y|, g:i a'	=> 'Danes, 1:37 pm / January 1st, 2007, 1:37 pm',
	),

	'default_dateformat'	=> 'd. M Y H:i',
	'ERR_JAB_AUTH'	=> 'Avtorizacija z Jabber strežnikom ni uspela.',
	'ERR_JAB_CONNECT'	=> 'Povezava z Jabber strežnikom ni uspela.',
	'LOGIN_EXPLAIN_VIEWONLINE'	=> 'Če si želite ogledati seznam uporabnikov na strani, morate biti registrirani in prijavljeni.',
	'NO_TOPIC_FORUM'	=> 'Ta tema ali forum ne obstaja več.',
	'TOO_LONG_DATEFORMAT'	=> 'Vnešena oblika datuma je predolga.',
	'TOO_SHORT_DATEFORMAT'	=> 'Vnešena oblika datuma je prekratka.',
	'TOPIC_LOCKED_SHORT'	=> 'Tema je zaklenjena',
	'UNWATCHED_FORUMS_TOPICS'	=> 'Niste več naročeni na izbrane prispevke.',
	'WROTE'	=> 'napisal/-a',
));

?>