<?php
/**
*
* common.php [Faroese]
*
* @package language
* @version $Id: $
* @copyright (c) 2008 phpBB Group
* @author 2008-02-27 - VV Miðlar
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
	'TRANSLATION_INFO'	=> 'VV Miðlar &bull; Yviri við Strond 17 &bull; Postboks 5201 &bull; FO-110 Tórshavn &bull; <b>tel</b> (+298) 36 36 00',
	'DIRECTION'	=> 'ltr',
	'DATE_FORMAT'	=> '|d M Y|',
	'USER_LANG'	=> 'en-gb',
	'1_DAY'	=> '1 Dag',
	'1_MONTH'	=> '1 Mána',
	'1_YEAR'	=> '1 Ár',
	'2_WEEKS'	=> '2 Vikur',
	'3_MONTHS'	=> '3 Mánar',
	'6_MONTHS'	=> '6 Mánar',
	'7_DAYS'	=> '7 Dagar',
	'ACCOUNT_ALREADY_ACTIVATED'	=> 'Tín brúkari er longu aktiveraður',
	'ACCOUNT_DEACTIVATED'	=> 'Your account has been manually deactivated and is only able to be reactivated by an administrator.',
	'ACCOUNT_NOT_ACTIVATED'	=> 'Tín brúkari er ikki aktiveraður enn',
	'ACP'	=> 'Umsiting',
	'ACTIVE'	=> 'active',
	'ACTIVE_ERROR'	=> 'The specified username is currently inactive. If you have problems activating your account, please contact a board administrator.',
	'ADMINISTRATOR'	=> 'Umsitari',
	'ADMINISTRATORS'	=> 'Umsitarir',
	'AGE'	=> 'Aldur',
	'AIM'	=> 'AIM Adressa',
	'ALLOWED'	=> 'Allowed',
	'ALL_FILES'	=> 'Allar fílur',
	'ALL_FORUMS'	=> 'Øll kjaktorg',
	'ALL_MESSAGES'	=> 'Øll boð',
	'ALL_POSTS'	=> 'Øll innlegg',
	'ALL_TIMES'	=> 'Allar tíðir eru %s ',
	'ALL_TOPICS'	=> 'Øll evni',
	'AND'	=> 'og',
	'ARE_WATCHING_FORUM'	=> 'You have subscribed to be notified of new posts in this forum.',
	'ARE_WATCHING_TOPIC'	=> 'You have subscribed to be notified of new posts in this topic.',
	'ASCENDING'	=> 'Vaksandi',
	'ATTACHMENTS'	=> 'Viðheftar fílur',
	'ATTACHED_IMAGE_NOT_IMAGE'	=> 'Myndin tú royndi at viðhefta er ikki røtt.',
	'AUTHOR'	=> 'Rithøvundur',
	'AUTH_NO_PROFILE_CREATED'	=> 'The creation of a user profile was unsuccessful.',
	'AVATAR_DISALLOWED_EXTENSION'	=> 'Fílan kann ikki vísast tí fíluslagið <strong>%s</strong> er ikki loyvt.',
	'AVATAR_EMPTY_REMOTE_DATA'	=> 'The specified avatar could not be uploaded because the remote data appears to be invalid or corrupted.',
	'AVATAR_EMPTY_FILEUPLOAD'	=> 'The uploaded avatar file is empty.',
	'AVATAR_INVALID_FILENAME'	=> '%s er ikki eitt rætt fílunavn.',
	'AVATAR_NOT_UPLOADED'	=> 'Avatarur kundi ikki upploadast.',
	'AVATAR_NO_SIZE'	=> 'The width or height of the linked avatar could not be determined. Please enter them manually.',
	'AVATAR_PARTIAL_UPLOAD'	=> 'The specified file was only partially uploaded.',
	'AVATAR_PHP_SIZE_NA'	=> 'The avatar’s filesize is too large.<br />The maximum allowed filesize set in php.ini could not be determined.',
	'AVATAR_PHP_SIZE_OVERRUN'	=> 'The avatar’s filesize is too large. The maximum allowed upload size is %d MB.<br />Please note this is set in php.ini and cannot be overridden.',
	'AVATAR_URL_INVALID'	=> 'The URL you specified is invalid.',
	'AVATAR_URL_NOT_FOUND'	=> 'The file specified could not be found.',
	'AVATAR_WRONG_FILESIZE'	=> 'The avatar’s filesize must be between 0 and %1d %2s.',
	'AVATAR_WRONG_SIZE'	=> 'The submitted avatar is %5$d pixels wide and %6$d pixels high. Avatars must be at least %1$d pixels wide and %2$d pixels high, but no larger than %3$d pixels wide and %4$d pixels high.',
	'BACK_TO_TOP'	=> 'Aftur til byrjan',
	'BACK_TO_PREV'	=> 'Aftur til fyrru síðu',
	'BAN_TRIGGERED_BY_EMAIL'	=> 'A ban has been issued on your e-mail address.',
	'BAN_TRIGGERED_BY_IP'	=> 'A ban has been issued on your IP address.',
	'BAN_TRIGGERED_BY_USER'	=> 'A ban has been issued on your username.',
	'BBCODE_GUIDE'	=> 'BBkotu vegleiðing',
	'BCC'	=> 'BCC',
	'BIRTHDAYS'	=> 'Føðingardagar',
	'BOARD_BAN_PERM'	=> 'You have been <strong>permanently</strong> banned from this board.<br /><br />Please contact the %2$sBoard Administrator%3$s for more information.',
	'BOARD_BAN_REASON'	=> 'Reason given for ban: <strong>%s</strong>',
	'BOARD_BAN_TIME'	=> 'You have been banned from this board until <strong>%1$s</strong>.<br /><br />Please contact the %2$sBoard Administrator%3$s for more information.',
	'BOARD_DISABLE'	=> 'Tíðverri er forumið niðri í løtuni. Vinarliga royn aftur seinni.',
	'BOARD_DISABLED'	=> 'This board is currently disabled.',
	'BOARD_UNAVAILABLE'	=> 'Sorry but the board is temporarily unavailable, please try again in a few minutes.',
	'BROWSING_FORUM_GUEST'	=> 'Users browsing this forum: %1$s and %2$d guest',
	'BROWSING_FORUM_GUESTS'	=> 'Users browsing this forum: %1$s and %2$d guests',
	'BYTES'	=> 'Být',
	'CANCEL'	=> 'Angra',
	'CHANGE'	=> 'Broyt',
	'CHANGE_FONT_SIZE'	=> 'Broyt skriftstødd',
	'CHANGING_PREFERENCES'	=> 'Changing board preferences',
	'CHANGING_PROFILE'	=> 'Changing profile settings',
	'CLICK_VIEW_PRIVMSG'	=> 'Trýst %sHer%s fyri at fara til tín Innbakka',
	'COLLAPSE_VIEW'	=> 'Collapse view',
	'CLOSE_WINDOW'	=> 'Lat Vindeyga Aftur',
	'COLOUR_SWATCH'	=> 'Colour swatch',
	'COMMA_SEPARATOR'	=> ', ',
	'CONFIRM'	=> 'Váttað',
	'CONFIRM_CODE'	=> 'Staðfestingar kota',
	'CONFIRM_CODE_EXPLAIN'	=> 'Skrivað kotuna akkurát sum tú sær hana. Kotan skilur ímillum lítlar og stórar stavir og nullir hava eina diagonala linju tvørtur um seg.',
	'CONFIRM_CODE_WRONG'	=> 'Staðfestingar kotan tú upplýsti var ikki røtt',
	'CONFIRM_OPERATION'	=> 'Are you sure you wish to carry out this operation?',
	'CONGRATULATIONS'	=> 'Tillukku',
	'CONNECTION_FAILED'	=> 'Connection failed.',
	'CONNECTION_SUCCESS'	=> 'Connection was successful!',
	'COOKIES_DELETED'	=> 'All board cookies successfully deleted.',
	'CURRENT_TIME'	=> 'Tað er nú %s ',
	'DAY'	=> 'Dag',
	'DAYS'	=> 'Dagar ',
	'DELETE'	=> 'Sletta',
	'DELETE_ALL'	=> 'Strikað øll',
	'DELETE_COOKIES'	=> 'Strika allar "cookies"',
	'DELETE_MARKED'	=> 'Strikað markeraðu',
	'DELETE_POST'	=> 'Sletta hetta innlegg',
	'DELIMITER'	=> 'Delimiter',
	'DESCENDING'	=> 'Minkandi',
	'DISABLED'	=> 'Sløkt',
	'DISPLAY'	=> 'Display',
	'DISPLAY_GUESTS'	=> 'Display guests',
	'DISPLAY_MESSAGES'	=> 'Vís boð frá ',
	'DISPLAY_POSTS'	=> 'Vís gomul innlegg',
	'DISPLAY_TOPICS'	=> 'Vís gomul evni',
	'DOWNLOADED'	=> 'Downloaded',
	'DOWNLOADING_FILE'	=> 'Downloading file',
	'DOWNLOAD_COUNT'	=> 'Downloaded %d time',
	'DOWNLOAD_COUNTS'	=> 'Downloaded %d times',
	'DOWNLOAD_COUNT_NONE'	=> 'Not downloaded yet',
	'VIEWED_COUNT'	=> 'Viewed %d time',
	'VIEWED_COUNTS'	=> 'Viewed %d times',
	'VIEWED_COUNT_NONE'	=> 'Not viewed yet',
	'EDIT_POST'	=> 'Broyt innlegg',
	'EMAIL'	=> 'Teldupostur',
	'EMAIL_ADDRESS'	=> 'Teldupost adressa',
	'EMAIL_SMTP_ERROR_RESPONSE'	=> 'Ran into problems sending e-mail at <strong>Line %1$s</strong>. Response: %2$s.',
	'EMPTY_SUBJECT'	=> 'Tú mást skriva eitt evni, tá tú sendur eitt nýtt innlegg.',
	'EMPTY_MESSAGE_SUBJECT'	=> 'You must specify a subject when composing a new message.',
	'ENABLED'	=> 'Tendra',
	'ENCLOSURE'	=> 'Enclosure',
	'ERR_CHANGING_DIRECTORY'	=> 'Unable to change directory.',
	'ERR_CONNECTING_SERVER'	=> 'Error connecting to the server.',
	'ERR_JAB_AUTH'	=> 'Could not authorise on Jabber server.',
	'ERR_JAB_CONNECT'	=> 'Could not connect to Jabber server.',
	'ERR_UNABLE_TO_LOGIN'	=> 'The specified username or password is incorrect.',
	'ERR_WRONG_PATH_TO_PHPBB'	=> 'The phpBB path specified appears to be invalid.',
	'EXPAND_VIEW'	=> 'Expand view',
	'EXTENSION'	=> 'Extension',
	'EXTENSION_DISABLED_AFTER_POSTING'	=> 'The extension <strong>%s</strong> has been deactivated and can no longer be displayed.',
	'FAQ'	=> 'OSS',
	'FAQ_EXPLAIN'	=> 'Ofta settir spurningar',
	'FILENAME'	=> 'Fílunavn',
	'FILESIZE'	=> 'Fílustødd',
	'FILEDATE'	=> 'Fíludato',
	'FILE_COMMENT'	=> 'Fíluupplýsing',
	'FILE_NOT_FOUND'	=> 'Valda fílan var ikki funnin',
	'FIND_USERNAME'	=> 'Finn eitt brúkaranavn',
	'FOLDER'	=> 'Skjátta',
	'FORGOT_PASS'	=> 'Eg havi gloymt mítt loyniorð',
	'FORM_INVALID'	=> 'The submitted form was invalid. Try submitting again.',
	'FORUM'	=> 'Rúm',
	'FORUMS'	=> 'Kjaktorg',
	'FORUMS_MARKED'	=> 'All forums have been marked read.',
	'FORUM_CAT'	=> 'Kjakevni',
	'FORUM_INDEX'	=> 'Forsíða',
	'FORUM_LINK'	=> 'Forum link',
	'FORUM_LOCATION'	=> 'Forum Stað',
	'FORUM_LOCKED'	=> 'Hetta rúmið er læst: tú kann ikki senda, svara ella tríva í innlegg.',
	'FORUM_RULES'	=> 'Kjakreglugerð',
	'FORUM_RULES_LINK'	=> 'Trýst á her fyri reglugerð',
	'FROM'	=> 'Frá',
	'FSOCK_DISABLED'	=> 'The operation could not be completed because the <var>fsockopen</var> function has been disabled or the server being queried could not be found.',
	'FTP_FSOCK_HOST'	=> 'FTP host',
	'FTP_FSOCK_HOST_EXPLAIN'	=> 'FTP server used to connect your site.',
	'FTP_FSOCK_PASSWORD'	=> 'FTP password',
	'FTP_FSOCK_PASSWORD_EXPLAIN'	=> 'Password for your FTP username.',
	'FTP_FSOCK_PORT'	=> 'FTP port',
	'FTP_FSOCK_PORT_EXPLAIN'	=> 'Port used to connect to your server.',
	'FTP_FSOCK_ROOT_PATH'	=> 'Path to phpBB',
	'FTP_FSOCK_ROOT_PATH_EXPLAIN'	=> 'Path from the root to your phpBB board.',
	'FTP_FSOCK_TIMEOUT'	=> 'FTP timeout',
	'FTP_FSOCK_TIMEOUT_EXPLAIN'	=> 'The amount of time, in seconds, that the system will wait for a reply from your server.',
	'FTP_FSOCK_USERNAME'	=> 'FTP username',
	'FTP_FSOCK_USERNAME_EXPLAIN'	=> 'Username used to connect to your server.',
	'FTP_HOST'	=> 'FTP host',
	'FTP_HOST_EXPLAIN'	=> 'FTP server used to connect your site.',
	'FTP_PASSWORD'	=> 'FTP password',
	'FTP_PASSWORD_EXPLAIN'	=> 'Password for your FTP username.',
	'FTP_PORT'	=> 'FTP port',
	'FTP_PORT_EXPLAIN'	=> 'Port used to connect to your server.',
	'FTP_ROOT_PATH'	=> 'Path to phpBB',
	'FTP_ROOT_PATH_EXPLAIN'	=> 'Path from the root to your phpBB board.',
	'FTP_TIMEOUT'	=> 'FTP timeout',
	'FTP_TIMEOUT_EXPLAIN'	=> 'The amount of time, in seconds, that the system will wait for a reply from your server.',
	'FTP_USERNAME'	=> 'FTP username',
	'FTP_USERNAME_EXPLAIN'	=> 'Username used to connect to your server.',
	'GENERAL_ERROR'	=> 'Feilur',
	'GO'	=> 'Vís',
	'GOTO_PAGE'	=> 'Far til síðu',
	'GROUP'	=> 'Bólkur',
	'GROUPS'	=> 'Bólkar',
	'GROUP_ERR_TYPE'	=> 'Inappropriate group type specified.',
	'GROUP_ERR_USERNAME'	=> 'No group name specified.',
	'GROUP_ERR_USER_LONG'	=> 'Group names cannot exceed 60 characters. The specified group name is too long.',
	'GUEST'	=> 'Vitjandi',
	'GUEST_USERS_ONLINE'	=> 'Tað eru %d vitjandi brúkarar online ',
	'GUEST_USERS_TOTAL'	=> '%d vitjandi',
	'GUEST_USERS_ZERO_ONLINE'	=> 'Tað eru 0 vitjandi brúkarar online ',
	'GUEST_USERS_ZERO_TOTAL'	=> '0 vitjandi',
	'GUEST_USER_ONLINE'	=> 'Tað eru %d Vitjandi brúkari online ',
	'GUEST_USER_TOTAL'	=> '%d vitjandi',
	'G_ADMINISTRATORS'	=> 'Umsitarir',
	'G_BOTS'	=> 'Bottar',
	'G_GUESTS'	=> 'Gestir',
	'G_REGISTERED'	=> 'Skrásettir brúkarir',
	'G_REGISTERED_COPPA'	=> 'Skrásettir COPPA brúkarir',
	'G_GLOBAL_MODERATORS'	=> 'Globalir kjakleiðarir',
	'HIDDEN_USERS_ONLINE'	=> '%d goymdir brúkarar online ',
	'HIDDEN_USERS_TOTAL'	=> '%d goymdir og ',
	'HIDDEN_USERS_ZERO_ONLINE'	=> '0 goymdir brúkarar online ',
	'HIDDEN_USERS_ZERO_TOTAL'	=> '0 goymdir og ',
	'HIDDEN_USER_ONLINE'	=> '%d Goymdir brúkari online ',
	'HIDDEN_USER_TOTAL'	=> '%d goymdir og ',
	'HIDE_GUESTS'	=> 'Hide guests',
	'HIDE_ME'	=> 'Hide my online status this session',
	'HOURS'	=> 'Tímar',
	'HOME'	=> 'Heim',
	'ICQ'	=> 'ICQ Nummar',
	'ICQ_STATUS'	=> 'ICQ Status',
	'IF'	=> 'um',
	'IMAGE'	=> 'Mynd',
	'IMAGE_FILETYPE_INVALID'	=> 'Image file type %d for mimetype %s not supported.',
	'IMAGE_FILETYPE_MISMATCH'	=> 'Image file type mismatch: expected extension %1$s but extension %2$s given.',
	'IN'	=> 'í',
	'INDEX'	=> 'Index',
	'INFORMATION'	=> 'Upplýsingur',
	'INTERESTS'	=> 'Áhugar',
	'INVALID_DIGEST_CHALLENGE'	=> 'Invalid digest challenge.',
	'INVALID_EMAIL_LOG'	=> '<strong>%s</strong> possibly an invalid e-mail address?',
	'IP'	=> 'IP',
	'IP_BLACKLISTED'	=> 'Your IP %1$s has been blocked because it is blacklisted. For details please see <a href="%2$s">%2$s</a>.',
	'JABBER'	=> 'Jabber',
	'JOINED'	=> 'Skrásett/ur',
	'JUMP_PAGE'	=> 'Enter the page number you wish to go to.',
	'JUMP_TO'	=> 'Far til',
	'JUMP_TO_PAGE'	=> 'Click to jump to page…',
	'KB'	=> 'KB',
	'LAST_POST'	=> 'Síðsta innlegg',
	'LAST_UPDATED'	=> 'Seinast Dagført',
	'LAST_VISIT'	=> 'Seinast vitja',
	'LDAP_NO_LDAP_EXTENSION'	=> 'LDAP extension not available.',
	'LDAP_NO_SERVER_CONNECTION'	=> 'Could not connect to LDAP server.',
	'LEGEND'	=> 'Legend',
	'LOCATION'	=> 'Stað',
	'LOCK_POST'	=> 'Lock post',
	'LOCK_POST_EXPLAIN'	=> 'Prevent editing',
	'LOCK_TOPIC'	=> 'Læs hetta evnið',
	'LOGIN'	=> 'Rita inn',
	'LOGIN_CHECK_PM'	=> 'Rita inn fyri at kanna tíni privatu boð',
	'LOGIN_CONFIRMATION'	=> 'Confirmation of login',
	'LOGIN_CONFIRM_EXPLAIN'	=> 'To prevent brute forcing accounts the board requires you to enter a confirmation code after a maximum amount of failed logins. The code is displayed in the image you should see below. If you are visually impaired or cannot otherwise read this code please contact the %sBoard Administrator%s.',
	'LOGIN_ERROR_ATTEMPTS'	=> 'You exceeded the maximum allowed number of login attempts. In addition to your username and password you now also have to enter the confirm code from the image you see below.',
	'LOGIN_ERROR_EXTERNAL_AUTH_APACHE'	=> 'You have not been authenticated by Apache.',
	'LOGIN_ERROR_PASSWORD'	=> 'You have specified an incorrect password. Please check your password and try again. If you continue to have problems please contact the %sBoard Administrator%s.',
	'LOGIN_ERROR_PASSWORD_CONVERT'	=> 'It was not possible to convert your password when updating this bulletin board’s software. Please %srequest a new password%s. If you continue to have problems please contact the %sBoard Administrator%s.',
	'LOGIN_ERROR_USERNAME'	=> 'You have specified an incorrect username. Please check your username and try again. If you continue to have problems please contact the %sBoard Administrator%s.',
	'LOGIN_FORUM'	=> 'To view or post in this forum you must enter its password.',
	'LOGIN_INFO'	=> 'In order to login you must be registered. Registering takes only a few moments but gives you increased capabilities. The board administrator may also grant additional permissions to registered users. Before you register please ensure you are familiar with our terms of use and related policies. Please ensure you read any forum rules as you navigate around the board.',
	'LOGIN_VIEWFORUM'	=> 'The board requires you to be registered and logged in to view this forum.',
	'LOGIN_EXPLAIN_EDIT'	=> 'In order to edit posts in this forum you have to be registered and logged in.',
	'LOGIN_EXPLAIN_VIEWONLINE'	=> 'In order to view the online list you have to be registered and logged in.',
	'LOGOUT'	=> 'Rita út',
	'LOGOUT_USER'	=> 'Rita út [ %s ]',
	'LOG_ME_IN'	=> 'Rita meg inn sjálvvirkandi framyvir',
	'MARK'	=> 'Markera',
	'MARK_ALL'	=> 'Marka øll',
	'MARK_FORUMS_READ'	=> 'Marka øll kjak sum lisin',
	'MB'	=> 'MB',
	'MCP'	=> 'Kjakleiðara kotrol panel',
	'MEMBERLIST'	=> 'Limalisti',
	'MEMBERLIST_EXPLAIN'	=> 'Vís allar limir',
	'MERGE'	=> 'Merge',
	'MERGE_POSTS'	=> 'Merge posts',
	'MERGE_TOPIC'	=> 'Merge topic',
	'MESSAGE'	=> 'Innihald',
	'MESSAGES'	=> 'Messages',
	'MESSAGE_BODY'	=> 'Nýtt innlegg',
	'MINUTES'	=> 'Minuttir',
	'MODERATE'	=> 'Moderate',
	'MODERATOR'	=> 'Kjakleiðari',
	'MODERATORS'	=> 'Kjakleiðarar',
	'MONTH'	=> 'Mánað',
	'MOVE'	=> 'Flyt',
	'MSNM'	=> 'MSN Messenger',
	'NA'	=> 'N/A',
	'NEWEST_USER'	=> 'Nýggjasti skrásetti brúkarin er <strong>%s</strong>',
	'NEW_MESSAGE'	=> 'Nýggj boð',
	'NEW_MESSAGES'	=> 'Nýggj boð',
	'NEW_PM'	=> 'Tú hevur %d nýtt boð ',
	'NEW_PMS'	=> 'Tú hevur %d nýggj boð ',
	'NEW_POST'	=> 'Nýtt innlegg',
	'NEW_POSTS'	=> 'Nýggj innlegg',
	'NEXT'	=> 'Víðari',
	'NEXT_STEP'	=> 'Next',
	'NEVER'	=> 'Aldrin',
	'NO'	=> 'Nei',
	'NOT_ALLOWED_MANAGE_GROUP'	=> 'You are not allowed to manage this group.',
	'NOT_AUTHORISED'	=> 'Onki loyvið',
	'NOT_WATCHING_FORUM'	=> 'You are no longer subscribed to updates on this forum.',
	'NOT_WATCHING_TOPIC'	=> 'You are no longer subscribed to this topic.',
	'NOTIFY_ADMIN'	=> 'Please notify the board administrator or webmaster.',
	'NOTIFY_ADMIN_EMAIL'	=> 'Please notify the board administrator or webmaster: <a href="mailto:%1$s">%1$s</a>',
	'NO_ACCESS_ATTACHMENT'	=> 'You are not allowed to access this file.',
	'NO_ACTION'	=> 'No action specified.',
	'NO_ADMINISTRATORS'	=> 'No administrators assigned at this board.',
	'NO_AUTH_ADMIN'	=> 'Access to the Administration Control Panel is not allowed as you do not have administrative permissions.',
	'NO_AUTH_ADMIN_USER_DIFFER'	=> 'You are not able to re-authenticate as a different user.',
	'NO_AUTH_OPERATION'	=> 'You do not have the necessary permissions to complete this operation.',
	'NO_CONNECT_TO_SMTP_HOST'	=> 'Could not connect to smtp host : %1$s : %2$s',
	'NO_BIRTHDAYS'	=> 'Ongir føðingardagar í dag',
	'NO_EMAIL_MESSAGE'	=> 'E-mail message was blank.',
	'NO_EMAIL_RESPONSE_CODE'	=> 'Could not get mail server response codes.',
	'NO_EMAIL_SUBJECT'	=> 'No e-mail subject specified.',
	'NO_FORUM'	=> 'The forum you selected does not exist.',
	'NO_FORUMS'	=> 'Hetta borðið hevur eingi rúm',
	'NO_GROUP'	=> 'The requested usergroup does not exist.',
	'NO_GROUP_MEMBERS'	=> 'Hesin bólkurin hevur ongar limir',
	'NO_IPS_DEFINED'	=> 'No IP addresses or hostnames defined',
	'NO_MEMBERS'	=> 'No members found for this search criterion.',
	'NO_MESSAGES'	=> 'No messages',
	'NO_MODE'	=> 'No mode specified.',
	'NO_MODERATORS'	=> 'No moderators assigned at this board.',
	'NO_NEW_MESSAGES'	=> 'No new messages',
	'NO_NEW_PM'	=> 'Tú hevur eingi nýggj boð',
	'NO_NEW_POSTS'	=> 'Eingi nýggj innlegg',
	'NO_ONLINE_USERS'	=> 'No registered users',
	'NO_POSTS'	=> 'Eingi innlegg',
	'NO_POSTS_TIME_FRAME'	=> 'No posts exist inside this topic for the selected time frame.',
	'NO_SUBJECT'	=> 'No subject specified',
	'NO_SUCH_SEARCH_MODULE'	=> 'The specified search backend doesn’t exist.',
	'NO_SUPPORTED_AUTH_METHODS'	=> 'No supported authentication methods.',
	'NO_TOPIC'	=> 'The requested topic does not exist.',
	'NO_TOPIC_FORUM'	=> 'The topic or forum no longer exists.',
	'NO_TOPICS'	=> 'There are no topics or posts in this forum.',
	'NO_TOPICS_TIME_FRAME'	=> 'No topics exist inside this forum for the selected time frame.',
	'NO_UNREAD_PM'	=> 'Tú hevur eingi ólisin boð',
	'NO_UPLOAD_FORM_FOUND'	=> 'Upload initiated but no valid file upload form found.',
	'NO_USER'	=> 'The requested user does not exist.',
	'NO_USERS'	=> 'The requested users do not exist.',
	'NO_USER_SPECIFIED'	=> 'Eingin brúkari varð upplýstur',
	'OCCUPATION'	=> 'Starv ',
	'OFFLINE'	=> 'Offline',
	'ONLINE'	=> 'Online',
	'ONLINE_BUDDIES'	=> 'Online friends',
	'ONLINE_USERS_TOTAL'	=> 'Tilsamans eru <b>%d</b> brúkarar online :: ',
	'ONLINE_USERS_ZERO_TOTAL'	=> 'Tilsamans eru <b>0</b> brúkarar online :: ',
	'ONLINE_USER_TOTAL'	=> 'Tilsamans er <b>%d</b> brúkari online :: ',
	'OPTIONS'	=> 'Møguleikar',
	'PAGE_OF'	=> 'Síða <b>%d</b> av <b>%d</b> ',
	'PASSWORD'	=> 'Loyniorð',
	'PLAY_QUICKTIME_FILE'	=> 'Spæl Quicktime fílu',
	'PM'	=> 'Privat boð',
	'POSTING_MESSAGE'	=> 'Skrivar eitt innlegg',
	'POSTING_PRIVATE_MESSAGE'	=> 'Composing private message',
	'POST'	=> 'Goym',
	'POST_ANNOUNCEMENT'	=> 'Kunngerð',
	'POST_STICKY'	=> 'fast',
	'POSTED'	=> 'Skrivað',
	'POSTED_IN_FORUM'	=> 'í',
	'POSTED_ON_DATE'	=> '',
	'POSTS'	=> 'Innlegg',
	'POSTS_UNAPPROVED'	=> 'At least one post in this topic has not been approved.',
	'POST_BY_AUTHOR'	=> 'Skriva hevur',
	'POST_BY_FOE'	=> 'This post was made by <strong>%1$s</strong> who is currently on your ignore list. %2$sDisplay this post%3$s.',
	'POST_DAY'	=> '%.2f posts per day',
	'POST_DETAILS'	=> 'Post details',
	'POST_NEW_TOPIC'	=> 'Byrja nýtt evni',
	'POST_PCT'	=> '%.2f%% of all posts',
	'POST_PCT_ACTIVE'	=> '%.2f%% of user’s posts',
	'POST_PCT_ACTIVE_OWN'	=> '%.2f%% of your posts',
	'POST_REPLY'	=> 'Post a reply',
	'POST_REPORTED'	=> 'Click to view report',
	'POST_SUBJECT'	=> 'Evni',
	'POST_TIME'	=> 'Post time',
	'POST_TOPIC'	=> 'Post a new topic',
	'POST_UNAPPROVED'	=> 'This post is waiting for approval',
	'PREVIEW'	=> 'Undansýning',
	'PREVIOUS'	=> 'Fyrra',
	'PREVIOUS_STEP'	=> 'Previous',
	'PRIVACY'	=> 'Privacy policy',
	'PRIVATE_MESSAGE'	=> 'Privat boð',
	'PRIVATE_MESSAGES'	=> 'Privat boð',
	'PRIVATE_MESSAGING'	=> 'Privat Boð',
	'PROFILE'	=> 'Vangamynd',
	'READING_FORUM'	=> 'Viewing topics in %s',
	'READING_GLOBAL_ANNOUNCE'	=> 'Reading global announcement',
	'READING_LINK'	=> 'Following forum link %s',
	'READING_TOPIC'	=> 'Reading topic in %s',
	'READ_PROFILE'	=> 'Sí brúkarans vangamynd ',
	'REASON'	=> 'Grundgeving',
	'RECORD_ONLINE_USERS'	=> 'Flestu brúkarar online samstundis vóru <b>%s</b>. Hetta var %s ',
	'REDIRECT'	=> 'Redirect',
	'REDIRECTS'	=> 'Total redirects',
	'REGISTER'	=> 'Skráset teg',
	'REGISTERED_USERS'	=> 'Skrásettir limir:',
	'REG_USERS_ONLINE'	=> 'Tað eru %d skrásettir brúkarar og  ',
	'REG_USERS_TOTAL'	=> '%d skrásettir, ',
	'REG_USERS_ZERO_ONLINE'	=> 'Tað eru 0 skrásettir brúkarar og  ',
	'REG_USERS_ZERO_TOTAL'	=> '0 skrásettir, ',
	'REG_USER_ONLINE'	=> 'Tað er %d Skrásettir brúkari og  ',
	'REG_USER_TOTAL'	=> '%d skrásettir, ',
	'REMOVE'	=> 'Remove',
	'REMOVE_INSTALL'	=> 'Please delete, move or rename the install directory before you use your board. If this directory is still present, only the Administration Control Panel (ACP) will be accessible.',
	'REPLIES'	=> 'Svar',
	'REPLY_WITH_QUOTE'	=> 'Svara við sitering',
	'REPLYING_GLOBAL_ANNOUNCE'	=> 'Replying to global announcement',
	'REPLYING_MESSAGE'	=> 'Replying to message in %s',
	'REPORT_BY'	=> 'Report by',
	'REPORT_POST'	=> 'Report this post',
	'REPORTING_POST'	=> 'Reporting post',
	'RESEND_ACTIVATION'	=> 'Send mær nýggjan aktiveringsteldupost',
	'RESET'	=> 'Byrja av nýggjum',
	'RESTORE_PERMISSIONS'	=> 'Restore permissions',
	'RETURN_INDEX'	=> '%sAftur til forsíðu%s',
	'RETURN_FORUM'	=> '%sReturn to the forum last visited%s',
	'RETURN_PAGE'	=> '%sReturn to the previous page%s',
	'RETURN_TOPIC'	=> '%sReturn to the topic last visited%s',
	'RETURN_TO'	=> 'Aftir til',
	'RULES_ATTACH_CAN'	=> 'You <strong>can</strong> post attachments in this forum',
	'RULES_ATTACH_CANNOT'	=> 'You <strong>cannot</strong> post attachments in this forum',
	'RULES_DELETE_CAN'	=> 'Tú <b>kann</b> sletta tíni innlegg í hesum rúmi',
	'RULES_DELETE_CANNOT'	=> 'Tú kann <b>ikki</b> sletta tíni innlegg í hesum rúmi',
	'RULES_DOWNLOAD_CAN'	=> 'You <strong>can</strong> download attachments in this forum',
	'RULES_DOWNLOAD_CANNOT'	=> 'You <strong>cannot</strong> download attachments in this forum',
	'RULES_EDIT_CAN'	=> 'Tú <b>kann</b> tríva í tíni innlegg í hesum rúmi',
	'RULES_EDIT_CANNOT'	=> 'Tú kann <b>ikki</b> tríva í tíni innlegg í hesum rúmi',
	'RULES_LOCK_CAN'	=> 'You <strong>can</strong> lock your topics in this forum',
	'RULES_LOCK_CANNOT'	=> 'You <strong>cannot</strong> lock your topics in this forum',
	'RULES_POST_CAN'	=> 'Tú <b>kann</b> skriva nýggj evni í hesum rúmi',
	'RULES_POST_CANNOT'	=> 'Tú kann <b>ikki</b> skriva nýggj evni í hesum rúmi',
	'RULES_REPLY_CAN'	=> 'Tú <b>kann</b> svara til evni í hesum rúmi',
	'RULES_REPLY_CANNOT'	=> 'Tú kann <b>ikki</b> svara til evni í hesum rúmi',
	'RULES_VOTE_CAN'	=> 'Tú <b>kann</b> atkvøða í vallistunum í hesum rúmi',
	'RULES_VOTE_CANNOT'	=> 'Tú kann <b>ikki</b> atkvøða í vallistunum í hesum rúmi',
	'SEARCH'	=> 'Leita',
	'SEARCH_MINI'	=> 'Leita…',
	'SEARCH_ADV'	=> 'Víðka leiting',
	'SEARCH_ADV_EXPLAIN'	=> 'View the advanced search options',
	'SEARCH_KEYWORDS'	=> 'Leita við Lyklaorðum',
	'SEARCHING_FORUMS'	=> 'Leitar í kjaktorginum',
	'SEARCH_ACTIVE_TOPICS'	=> 'Vís aktiv evni',
	'SEARCH_FOR'	=> 'Leita eftir',
	'SEARCH_FORUM'	=> 'Leita í hesum kjakið…',
	'SEARCH_NEW'	=> 'Sí innlegg síðani síðstu vitjan',
	'SEARCH_POSTS_BY'	=> 'Finn boð eftir brúkara:',
	'SEARCH_SELF'	=> 'Vís tíni boð',
	'SEARCH_TOPIC'	=> 'Leita í hesum tráðið…',
	'SEARCH_UNANSWERED'	=> 'Sí ósvaraði innlegg',
	'SECONDS'	=> 'Sekund',
	'SELECT'	=> 'Vel',
	'SELECT_ALL_CODE'	=> 'Vel alt',
	'SELECT_DESTINATION_FORUM'	=> 'Please select a destination forum',
	'SELECT_FORUM'	=> 'Vel rúm',
	'SEND_EMAIL'	=> 'Send teldupost',
	'SEND_EMAIL_USER'	=> 'T-post',
	'SEND_PRIVATE_MESSAGE'	=> 'Send privat boð',
	'SETTINGS'	=> 'Uppseting',
	'SIGNATURE'	=> 'Undirskrift',
	'SKIP'	=> 'Skip to content',
	'SMTP_NO_AUTH_SUPPORT'	=> 'SMTP server does not support authentication.',
	'SORRY_AUTH_READ'	=> 'Tíðanverri, einans %s kunnu lesa evni í hesum rúmi. ',
	'SORRY_AUTH_VIEW_ATTACH'	=> 'You are not authorised to download this attachment.',
	'SORT_BY'	=> 'Flokka eftir',
	'SORT_JOINED'	=> 'Skrásetingar dato',
	'SORT_LOCATION'	=> 'Stað',
	'SORT_RANK'	=> 'Rók',
	'SORT_TOPIC_TITLE'	=> 'Yvirskrift',
	'SORT_USERNAME'	=> 'Brúkaranavn',
	'SPLIT_TOPIC'	=> 'Klúgv Evni Kontrol Panel',
	'SQL_ERROR_OCCURRED'	=> 'An SQL error occurred while fetching this page. Please contact the %sBoard Administrator%s if this problem persists.',
	'STATISTICS'	=> 'Hagtøl',
	'START_WATCHING_FORUM'	=> 'Subscribe forum',
	'START_WATCHING_TOPIC'	=> 'Hygg eftir hesum evni',
	'STOP_WATCHING_FORUM'	=> 'Unsubscribe forum',
	'STOP_WATCHING_TOPIC'	=> 'Steðga við at hyggja eftir hesum evni',
	'SUBFORUM'	=> 'Undirkjak',
	'SUBFORUMS'	=> 'Undirkjak',
	'SUBJECT'	=> 'Evni',
	'SUBMIT'	=> 'Goym',
	'TERMS_USE'	=> 'Reglugerð',
	'TEST_CONNECTION'	=> 'Test connection',
	'THE_TEAM'	=> 'Kjak.fo leiðarir',
	'TIME'	=> 'Klokkan',
	'TOO_LONG_AIM'	=> 'The screenname you entered is too long.',
	'TOO_LONG_CONFIRM_CODE'	=> 'The confirm code you entered is too long.',
	'TOO_LONG_DATEFORMAT'	=> 'The date format you entered is too long.',
	'TOO_LONG_ICQ'	=> 'The ICQ number you entered is too long.',
	'TOO_LONG_INTERESTS'	=> 'The interests you entered is too long.',
	'TOO_LONG_JABBER'	=> 'The Jabber account name you entered is too long.',
	'TOO_LONG_LOCATION'	=> 'The location you entered is too long.',
	'TOO_LONG_MSN'	=> 'The MSNM/WLM name you entered is too long.',
	'TOO_LONG_NEW_PASSWORD'	=> 'The password you entered is too long.',
	'TOO_LONG_OCCUPATION'	=> 'The occupation you entered is too long.',
	'TOO_LONG_PASSWORD_CONFIRM'	=> 'The password confirmation you entered is too long.',
	'TOO_LONG_USER_PASSWORD'	=> 'The password you entered is too long.',
	'TOO_LONG_USERNAME'	=> 'The username you entered is too long.',
	'TOO_LONG_EMAIL'	=> 'The e-mail address you entered is too long.',
	'TOO_LONG_EMAIL_CONFIRM'	=> 'The e-mail address confirmation you entered is too long.',
	'TOO_LONG_WEBSITE'	=> 'The website address you entered is too long.',
	'TOO_LONG_YIM'	=> 'The Yahoo! Messenger name you entered is too long.',
	'TOO_MANY_VOTE_OPTIONS'	=> 'You have tried to vote for too many options.',
	'TOO_SHORT_AIM'	=> 'The screenname you entered is too short.',
	'TOO_SHORT_CONFIRM_CODE'	=> 'The confirm code you entered is too short.',
	'TOO_SHORT_DATEFORMAT'	=> 'The date format you entered is too short.',
	'TOO_SHORT_ICQ'	=> 'The ICQ number you entered is too short.',
	'TOO_SHORT_INTERESTS'	=> 'The interests you entered is too short.',
	'TOO_SHORT_JABBER'	=> 'The Jabber account name you entered is too short.',
	'TOO_SHORT_LOCATION'	=> 'The location you entered is too short.',
	'TOO_SHORT_MSN'	=> 'The MSNM/WLM name you entered is too short.',
	'TOO_SHORT_NEW_PASSWORD'	=> 'The password you entered is too short.',
	'TOO_SHORT_OCCUPATION'	=> 'The occupation you entered is too short.',
	'TOO_SHORT_PASSWORD_CONFIRM'	=> 'The password confirmation you entered is too short.',
	'TOO_SHORT_USER_PASSWORD'	=> 'The password you entered is too short.',
	'TOO_SHORT_USERNAME'	=> 'The username you entered is too short.',
	'TOO_SHORT_EMAIL'	=> 'The e-mail address you entered is too short.',
	'TOO_SHORT_EMAIL_CONFIRM'	=> 'The e-mail address confirmation you entered is too short.',
	'TOO_SHORT_WEBSITE'	=> 'The website address you entered is too short.',
	'TOO_SHORT_YIM'	=> 'The Yahoo! Messenger name you entered is too short.',
	'TOPIC'	=> 'Evni',
	'TOPICS'	=> 'Evni',
	'TOPIC_ICON'	=> 'Topic icon',
	'TOPIC_LOCKED'	=> 'Hetta evnið er læst: tú kann ikki tríva í innlegg, ei heldur gera nýggj.',
	'TOPIC_LOCKED_SHORT'	=> 'Topic locked',
	'TOPIC_MOVED'	=> '<b>Fluttur:</b>',
	'TOPIC_REVIEW'	=> 'Evnis undansýning',
	'TOPIC_TITLE'	=> 'Topic title',
	'TOPIC_UNAPPROVED'	=> 'This topic has not been approved',
	'TOTAL_ATTACHMENTS'	=> 'Attachment(s)',
	'TOTAL_LOG'	=> '1 log',
	'TOTAL_LOGS'	=> '%d logs',
	'TOTAL_NO_PM'	=> '0 private messages in total',
	'TOTAL_PM'	=> '1 private message in total',
	'TOTAL_PMS'	=> '%d private messages in total',
	'TOTAL_POSTS'	=> 'Innlegg tilsamans',
	'TOTAL_POSTS_OTHER'	=> '<strong>%d</strong> innlegg',
	'TOTAL_POSTS_ZERO'	=> '<strong>ongi</strong> innlegg',
	'TOPIC_REPORTED'	=> 'This topic has been reported',
	'TOTAL_TOPICS_OTHER'	=> '<strong>%d</strong> evni',
	'TOTAL_TOPICS_ZERO'	=> '<strong>ongi</strong> evni',
	'TOTAL_USERS_OTHER'	=> '<strong>%d</strong> skrásettir brúkarir',
	'TOTAL_USERS_ZERO'	=> '<strong>0</strong> skrásettir brúkarir',
	'TRACKED_PHP_ERROR'	=> 'Tracked PHP errors: %s',
	'UNABLE_GET_IMAGE_SIZE'	=> 'It was not possible to determine the dimensions of the image.',
	'UNABLE_TO_DELIVER_FILE'	=> 'Unable to deliver file.',
	'UNKNOWN_BROWSER'	=> 'Unknown browser',
	'UNMARK_ALL'	=> 'Ómarka øll',
	'UNREAD_MESSAGES'	=> 'Unread messages',
	'UNREAD_PM'	=> 'Tú hevur %d ólisið boð',
	'UNREAD_PMS'	=> 'Tú hevur %d ólisin boð',
	'UNWATCHED_FORUMS'	=> 'You are no longer subscribed to the selected forums.',
	'UNWATCHED_TOPICS'	=> 'You are no longer subscribed to the selected topics.',
	'UNWATCHED_FORUMS_TOPICS'	=> 'You are no longer subscribed to the selected entries.',
	'UPDATE'	=> 'Goym',
	'UPLOAD_IN_PROGRESS'	=> 'The upload is currently in progress.',
	'URL_REDIRECT'	=> 'If your browser does not support meta redirection %splease click HERE to be redirected%s.',
	'USERGROUPS'	=> 'Brúkarabólkar',
	'USERNAME'	=> 'Brúkaranavn',
	'USERNAMES'	=> 'Usernames',
	'USER_AVATAR'	=> 'User avatar',
	'USER_CANNOT_READ'	=> 'You cannot read posts in this forum.',
	'USER_POST'	=> '%d Post',
	'USER_POSTS'	=> '%d Posts',
	'USERS'	=> 'Users',
	'USE_PERMISSIONS'	=> 'Test out user’s permissions',
	'VARIANT_DATE_SEPARATOR'	=> ' / ',
	'VIEWED'	=> 'Viewed',
	'VIEWING_FAQ'	=> 'Lesur OSS',
	'VIEWING_MEMBERS'	=> 'Viewing member details',
	'VIEWING_ONLINE'	=> 'Hyggur eftir hvør er online',
	'VIEWING_MCP'	=> 'Viewing moderator control panel',
	'VIEWING_MEMBER_PROFILE'	=> 'Viewing member profile',
	'VIEWING_PRIVATE_MESSAGES'	=> 'Viewing private messages',
	'VIEWING_REGISTER'	=> 'Registering account',
	'VIEWING_UCP'	=> 'Viewing user control panel',
	'VIEWS'	=> 'Hugt',
	'VIEW_BOOKMARKS'	=> 'View bookmarks',
	'VIEW_FORUM_LOGS'	=> 'View Logs',
	'VIEW_LATEST_POST'	=> 'Síggj seinasta innlegg',
	'VIEW_NEWEST_POST'	=> 'Síggj nýggjasta innlegg',
	'VIEW_NOTES'	=> 'View user notes',
	'VIEW_ONLINE_TIME'	=> 'Basera á aktivitet seinastu %d minuttir',
	'VIEW_ONLINE_TIMES'	=> 'Basera á aktivitet seinastu %d minuttir',
	'VIEW_TOPIC'	=> 'Sí evni',
	'VIEW_TOPIC_ANNOUNCEMENT'	=> 'Announcement: ',
	'VIEW_TOPIC_GLOBAL'	=> 'Global Announcement: ',
	'VIEW_TOPIC_LOCKED'	=> 'Locked: ',
	'VIEW_TOPIC_LOGS'	=> 'View logs',
	'VIEW_TOPIC_MOVED'	=> 'Moved: ',
	'VIEW_TOPIC_POLL'	=> 'Poll: ',
	'VIEW_TOPIC_STICKY'	=> 'Sticky: ',
	'VISIT_WEBSITE'	=> 'Far til brúkarans heimasíðu',
	'WARNINGS'	=> 'Warnings',
	'WARN_USER'	=> 'Warn user',
	'WELCOME_SUBJECT'	=> 'Vælkomin til %s ',
	'WEBSITE'	=> 'Heimasíða',
	'WHOIS'	=> 'Whois',
	'WHO_IS_ONLINE'	=> 'Hvør er online',
	'WRONG_PASSWORD'	=> 'You entered an incorrect password.',
	'WRONG_DATA_ICQ'	=> 'The number you entered is not a valid ICQ number.',
	'WRONG_DATA_JABBER'	=> 'The name you entered is not a valid Jabber account name.',
	'WRONG_DATA_LANG'	=> 'The language you specified is not valid.',
	'WRONG_DATA_WEBSITE'	=> 'The website address has to be a valid URL, including the protocol. For example http://www.example.com/.',
	'WROTE'	=> 'segði ',
	'YEAR'	=> 'Ár',
	'YEAR_MONTH_DAY'	=> '(ÁÁÁÁ-MM-DD)',
	'YES'	=> 'Ja',
	'YIM'	=> 'Yahoo Messenger',
	'YOU_LAST_VISIT'	=> 'Tú vitjaði seinast %s ',
	'YOU_NEW_PM'	=> 'Eini nýggj boð bíða eftir tær í tínum Innbakka',
	'YOU_NEW_PMS'	=> 'Nýggj boð bíða eftir tær í tínum Innbakka',
	'YOU_NO_NEW_PM'	=> 'Eingi nýggj boð eru í tínum Innbakka',

	'datetime'	=> array(
		'TODAY'	=> 'Í dag',
		'TOMORROW'	=> 'Í morgin',
		'YESTERDAY'	=> 'Í gjár',
		'Sunday'	=> 'Sunnudagur',
		'Monday'	=> 'Mánadagur',
		'Tuesday'	=> 'Týsdagur',
		'Wednesday'	=> 'Mikudagur',
		'Thursday'	=> 'Hósdagur',
		'Friday'	=> 'Fríggjadagur',
		'Saturday'	=> 'Leygardagur',
		'Sun'	=> 'sun',
		'Mon'	=> 'mán',
		'Tue'	=> 'týs',
		'Wed'	=> 'mik',
		'Thu'	=> 'hós',
		'Fri'	=> 'frí',
		'Sat'	=> 'ley',
		'January'	=> 'januar',
		'February'	=> 'februar',
		'March'	=> 'mars',
		'April'	=> 'apríl',
		'May'	=> 'mai',
		'June'	=> 'juni',
		'July'	=> 'juli',
		'August'	=> 'august',
		'September'	=> 'septembur',
		'October'	=> 'oktobur',
		'November'	=> 'novembur',
		'December'	=> 'desembur',
		'Jan'	=> 'jan',
		'Feb'	=> 'feb',
		'Mar'	=> 'mar',
		'Apr'	=> 'apr',
		'May_short'	=> 'mai',
		'Jun'	=> 'jun',
		'Jul'	=> 'jul',
		'Aug'	=> 'aug',
		'Sep'	=> 'sep',
		'Oct'	=> 'okt',
		'Nov'	=> 'nov',
		'Dec'	=> 'des',
	),


	'tz'	=> array(
		'-12'	=> 'GMT - 12 tímar',
		'-11'	=> 'GMT - 11 tímar',
		'-10'	=> 'GMT - 10 tímar',
		'-9.5'	=> 'UTC - 9:30 hours',
		'-9'	=> 'GMT - 9 tímar',
		'-8'	=> 'GMT - 8 tímar',
		'-7'	=> 'GMT - 7 tímar',
		'-6'	=> 'GMT - 6 tímar',
		'-5'	=> 'GMT - 5 tímar',
		'-4'	=> 'GMT - 4 tímar',
		'-3.5'	=> 'GMT - 3.5 tímar',
		'-3'	=> 'GMT - 3 tímar',
		'-2'	=> 'GMT - 2 tímar',
		'-1'	=> 'GMT - 1 tíma',
		'0'	=> 'GMT',
		'1'	=> 'GMT + 1 tíma',
		'2'	=> 'GMT + 2 tímar',
		'3'	=> 'GMT + 3 tímar',
		'3.5'	=> 'GMT + 3.5 tímar',
		'4'	=> 'GMT + 4 tímar',
		'4.5'	=> 'GMT + 4.5 tímar',
		'5'	=> 'GMT + 5 tímar',
		'5.5'	=> 'GMT + 5.5 tímar',
		'5.75'	=> 'UTC + 5:45 hours',
		'6'	=> 'GMT + 6 tímar',
		'6.5'	=> 'GMT + 6.5 tímar',
		'7'	=> 'GMT + 7 tímar',
		'8'	=> 'GMT + 8 tímar',
		'8.75'	=> 'UTC + 8:45 hours',
		'9'	=> 'GMT + 9 tímar',
		'9.5'	=> 'GMT + 9.5 tímar',
		'10'	=> 'GMT + 10 tímar',
		'10.5'	=> 'UTC + 10:30 hours',
		'11'	=> 'GMT + 11 tímar',
		'11.5'	=> 'UTC + 11:30 hours',
		'12'	=> 'GMT + 12 tímar',
		'12.75'	=> 'UTC + 12:45 hours',
		'13'	=> 'GMT + 13 tímar',
		'14'	=> 'UTC + 14 hours',
		'dst'	=> '[ <abbr title="Daylight Saving Time">DST</abbr> ]',
	),


	'tz_zones'	=> array(
		'-12'	=> 'GMT - 12 tímar',
		'-11'	=> 'GMT - 11 tímar',
		'-10'	=> 'GMT - 10 tímar',
		'-9.5'	=> '[UTC - 9:30] Marquesas Islands Time',
		'-9'	=> 'GMT - 9 tímar',
		'-8'	=> 'GMT - 8 tímar',
		'-7'	=> 'GMT - 7 tímar',
		'-6'	=> 'GMT - 6 tímar',
		'-5'	=> 'GMT - 5 tímar',
		'-4'	=> 'GMT - 4 tímar',
		'-3.5'	=> 'GMT - 3.5 tímar',
		'-3'	=> 'GMT - 3 tímar',
		'-2'	=> 'GMT - 2 tímar',
		'-1'	=> 'GMT - 1 tíma',
		'0'	=> 'GMT',
		'1'	=> 'GMT + 1 tíma',
		'2'	=> 'GMT + 2 tímar',
		'3'	=> 'GMT + 3 tímar',
		'3.5'	=> 'GMT + 3.5 tímar',
		'4'	=> 'GMT + 4 tímar',
		'4.5'	=> 'GMT + 4.5 tímar',
		'5'	=> 'GMT + 5 tímar',
		'5.5'	=> 'GMT + 5.5 tímar',
		'5.75'	=> '[UTC + 5:45] Nepal Time',
		'6'	=> 'GMT + 6 tímar',
		'6.5'	=> 'GMT + 6.5 tímar',
		'7'	=> 'GMT + 7 tímar',
		'8'	=> 'GMT + 8 tímar',
		'8.75'	=> '[UTC + 8:45] Southeastern Western Australia Standard Time',
		'9'	=> 'GMT + 9 tímar',
		'9.5'	=> 'GMT + 9.5 tímar',
		'10'	=> 'GMT + 10 tímar',
		'10.5'	=> '[UTC + 10:30] Lord Howe Standard Time',
		'11'	=> 'GMT + 11 tímar',
		'11.5'	=> '[UTC + 11:30] Norfolk Island Time',
		'12'	=> 'GMT + 12 tímar',
		'12.75'	=> '[UTC + 12:45] Chatham Islands Time',
		'13'	=> 'GMT + 13 tímar',
		'14'	=> '[UTC + 14] Line Island Time',
	),


	'dateformats'	=> array(
		'd M Y, H:i'	=> '01 Jan 2007, 13:37',
		'd M Y H:i'	=> '01 Jan 2007 13:37',
		'M jS, \'y, H:i'	=> 'Jan 1st, \'07, 13:37',
		'D M d, Y g:i a'	=> 'Mon Jan 01, 2007 1:37 pm',
		'F jS, Y, g:i a'	=> 'January 1st, 2007, 1:37 pm',
		'|d M Y|, H:i'	=> 'Today, 13:37 / 01 Jan 2007, 13:37',
		'|F jS, Y|, g:i a'	=> 'Today, 1:37 pm / January 1st, 2007, 1:37 pm',
	),

	'default_dateformat'	=> '|F jS, Y|, g:i a',
));

?>