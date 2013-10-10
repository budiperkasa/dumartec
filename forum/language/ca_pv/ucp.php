<?php
/** 
*
* ucp [Catalan (Valencian)]
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

// Privacy policy and T&C
$lang = array_merge($lang, array(
	'TERMS_OF_USE_CONTENT'	=> 'Tot i que els administradors i moderadors d\'aquest fòrum faran tot el que siga possible per a eliminar o editar qualsevol material qüestionable tan ràpidament com siga possible, és impossible revisar cada missatge. Per tant, us doneu per assabentat que tots els missatges publicats en aquests fòrums expressen els punts de vista i opinions dels seus respectius autors i no la dels administradors, moderadors o administradors del web (excepte els missatges publicats per ells mateixos) per la qual cosa no se\'ls considerarà responsables.<br />
	<br />
	Esteu d\'acord en no publicar material insultant, obscè, vulgar, d\'odi, amenaçant, o cap altre que d\'alguna manera viole les lleis vigents. Si publiqueu material d\'aquesta índole, el vostre compte serà cancel·lat (i el vostre proveïdor d\'accés a Internet en serà avisat). L\'adreça IP de tots els missatges es conserva per ajudar a complir aquestes normes. Esteu d\'acord en que els administradors del web, administradors i moderadors d\'aquest fòrum tenen dret a eliminar, editar, moure o tancar qualsevol tema en qualsevol moment si ho consideren convenient. Com a usuari accepteu que totes les dades que heu introduït siguen emmagatzemades en una base de dades. Tot i que aquesta informació no serà facilitada a tercers sense el vostre consentiment, els administradors del web, els administradors i els moderadors no poden responsabilitzar-se per intents de hackers que puguen fer que aquesta informació es veja compromesa.<br />
	<br />
	Aquest sistema de fòrums utilitza galetes per a emmagatzemar informació al vostre ordinador. Aquestes galetes no contenen la informació que heu introduït, només s\'utilitzen per a millorar la visualització dels fòrums. L\'adreça electrònica només s\'utilitza per a confirmar els detalls del vostre registre i contrasenya (i per a enviar-vos una nova contrasenya si oblideu la que teniu actualment).
	<br /><br />
	En registrar-vos accepteu totes aquestes condicions.
	',

	'PRIVACY_POLICY'		=> 'This policy explains in detail how “%1$s” along with its affiliated companies (hereinafter “we”, “us”, “our”, “%1$s”, “%2$s”) and phpBB (hereinafter “they”, “them”, “their”, “phpBB software”, “www.phpbb.com”, “phpBB Group”, “phpBB Teams”) use any information collected during any session of usage by you (hereinafter “your information”).<br />
	<br />
	Your information is collected via two ways. Firstly, by browsing “%1$s” will cause the phpBB software to create a number of cookies, which are small text files that are downloaded on to your computer’s web browser temporary files. The first two cookies just contain a user identifier (hereinafter “user-id”) and an anonymous session identifier (hereinafter “session-id”), automatically assigned to you by the phpBB software. A third cookie will be created once you have browsed topics within “%1$s” and is used to store which topics have been read, thereby improving your user experience.<br />
	<br />
	We may also create cookies external to the phpBB software whilst browsing “%1$s”, though these are outside the scope of this document which is intended to only cover the pages created by the phpBB software. The second way in which we collect your information is by what you submit to us. This can be, and is not limited to: posting as an anonymous user (hereinafter “anonymous posts”), registering on “%1$s” (hereinafter “your account”) and posts submitted by you after registration and whilst logged in (hereinafter “your posts”).<br />
	<br />
	Your account will at a bare minimum contain a uniquely identifiable name (hereinafter “your user name”), a personal password used for logging into your account (hereinafter “your password”) and a personal, valid e-mail address (hereinafter “your e-mail”). Your information for your account at “%1$s” is protected by data-protection laws applicable in the country that hosts us. Any information beyond your user name, your password and your e-mail required by “%1$s” during the registration process are at our digression what is mandatory and what is optional. In all cases, you have the option of what information in your account is publicly displayed. Furthermore, within your account, you have the option to opt-in or opt-out of automatically generated e-mails from the phpBB software.<br />
	<br />
	Your password is ciphered (a one-way hash) so that it is secure. However, it is recommended that you do not reuse the same password across a number of different websites. Your password is the means of accessing your account at “%1$s”, so please guard it carefully and under no circumstance will anyone affiliated with “%1$s”, phpBB or another 3rd party, legitimately ask you for your password. Should you forget your password for your account, you can use the “I forgot my password” feature provided by the phpBB software. This process will ask you to submit your user name and your e-mail, then the phpBB software will generate a new password to reclaim your account.<br />
	',
));

// Common language entries
$lang = array_merge($lang, array(
	'ACCOUNT_ACTIVE'				=> 'El vostre compte s\'ha activat. Gràcies per registrar-vos.',
	'ACCOUNT_ACTIVE_ADMIN'			=> 'El compte s\'ha activat.',
	'ACCOUNT_ACTIVE_PROFILE'		=> 'El vostre compte s\'ha tornat a activar correctament.',
	'ACCOUNT_ADDED'					=> 'Gràcies per registrar-vos, s\'ha creat un nou compte. Ara podeu entrar-hi amb el vostre nom d\'usuari i contrasenya.',
	'ACCOUNT_COPPA'					=> 'El vostre compte s\'ha creat però ha d\'aprovar-se pels administradors. Comproveu el vostre e-mail per veure més detalls.',
	'ACCOUNT_EMAIL_CHANGED'			=> 'El vostre compte s\'ha actualitzat. Tot i així, aquest fòrum requereix repetir el procés d\'activació quan es canvia el compte de correu. S\'ha enviat un codi d\'activació al vostre mail. Comproveu-ho.',
	'ACCOUNT_EMAIL_CHANGED_ADMIN'	=> 'El vostre compte s\'ha actualitzat. Tot i així, aquest fòrum requereix repetir el procés d\'aprovació per part dels administradors. Quan estiga aprovat, rebreu un e-mail de confirmació.',
	'ACCOUNT_INACTIVE'				=> 'El vostre compte s\'ha creat. Tot i així, aquest fòrum requereix activació dels comptes. S\'ha enviat un codi d\'activació al vostre e-mail. Comproveu-ho.',
	'ACCOUNT_INACTIVE_ADMIN'		=> 'El vostre compte s\'ha creat. Tot i així, aquest fòrum requereix activació dels comptes per part dels administradors. Quan estiga aprovat, rebreu un e-mail de confirmació.',
	'ACTIVATION_EMAIL_SENT'			=> 'S\'ha enviat un correu d\'activació al vostre e-mail.',
	'ACTIVATION_EMAIL_SENT_ADMIN'	=> 'S\'ha enviat el correu d \'activació a les adreces electròniques dels administradors.',
	'ADD'							=> 'Afegeix',
	'ADD_BCC'						=> 'Afegeix [BCC]',
	'ADD_FOES'						=> 'Afegeix nous enemics',
	'ADD_FOES_EXPLAIN'				=> 'Heu d\'introduir cada nom d\'usuari a una nova línia.',
	'ADD_FOLDER'					=> 'Afegeix carpeta',
	'ADD_FRIENDS'					=> 'Afegeix nous amics',
	'ADD_FRIENDS_EXPLAIN'			=> 'Heu d\'introduir cada nom d\'usuari a una nova línia.',
	'ADD_NEW_RULE'					=> 'Afegeix una nova regla',
	'ADD_RULE'						=> 'Afegeix regla',
	'ADD_TO'						=> 'Afegeix [a]',
	'ADMIN_EMAIL'					=> 'Els admnistradors poden enviar-me informació per correu',
	'AGREE'							=> 'Estic d\'acord amb els termes',
	'ALLOW_PM'						=> 'Permetre a altres usuaris enviar-vos missatges privats',
	'ALLOW_PM_EXPLAIN'				=> 'Heu de tindre en compte que els administradors i moderadors sempre podran enviar-vos un correu electrònic -que no ha d\'ésser d\'informació general, sinó personal-.',
	'ALREADY_ACTIVATED'				=> 'Ja heu activat el vostre compte.',
	'ATTACHMENTS_EXPLAIN'			=> 'Aquesta és la llista dels fitxers adjunts que heu pujat al fòrum.',
	'ATTACHMENTS_DELETED'			=> 'S\'han esborrat els adjunts.',
	'ATTACHMENT_DELETED'			=> 'S\'ha esborrat l\'adjunt.',
	'AVATAR_CATEGORY'				=> 'Categoria',
	'AVATAR_EXPLAIN'				=> 'Dimensions màximes: ample %1$d píxels, alçada %2$d píxels, mida del fitxer %3$dkB.',
	'AVATAR_FEATURES_DISABLED'		=> 'La funció d\'avatars està desactivada.',
	'AVATAR_GALLERY'				=> 'Galeria local',
	'AVATAR_GENERAL_UPLOAD_ERROR'	=> 'No es pot carregar l\'avatar a %s.',
	'AVATAR_PAGE'					=> 'Pàgina',

	'BACK_TO_DRAFTS'			=> 'Torna a esborranys desats',
	'BACK_TO_LOGIN'				=> 'Torna a la pàgina d\'entrada',
	'BIRTHDAY'					=> 'Aniversari',
	'BIRTHDAY_EXPLAIN'			=> 'Es mostrarà al fòrum quan siga el teu anirversari.',
	'BOARD_DATE_FORMAT'			=> 'Format de la data',
	'BOARD_DATE_FORMAT_EXPLAIN'	=> 'La sintaxi que es fa servir és igual que la de la funció <a href="http://www.php.net/date">date()</a> de PHP.',
	'BOARD_DST'					=> 'Horari d\'estiu/<abbr title="Daylight Saving Time">DST</abbr> activat',
	'BOARD_LANGUAGE'			=> 'Llengua',
	'BOARD_STYLE'				=> 'Estil del fòrum',
	'BOARD_TIMEZONE'			=> 'Fus horari',
	'BOOKMARKS'					=> 'Preferits',
	'BOOKMARKS_EXPLAIN'			=> 'Ací podeu marcar temes preferits per a futures referències. Marqueu la casella de selecció del tema que vulgueu esborrar i després feu clic sobre la casella <em>Esborrar temes marcats</em>.',
	'BOOKMARKS_DISABLED'		=> 'Els preferits estan desactivats en aquest fòrum.',
	'BOOKMARKS_REMOVED'			=> 'S\'han esborrats els preferits.',

	'CANNOT_EDIT_MESSAGE_TIME'	=> 'No podeu editar o esborrar aquest missatge.',
	'CANNOT_MOVE_TO_SAME_FOLDER'=> 'No es poden moure els missatges a la mateixa carpeta que voleu eliminar.',
	'CANNOT_MOVE_FROM_SPECIAL'	=> 'Messages can not be moved from the outbox.',
	'CANNOT_RENAME_FOLDER'		=> 'No es pot canviar el nom d\'aquesta carpeta.',
	'CANNOT_REMOVE_FOLDER'		=> 'No es pot esborrar aquesta carpeta.',
	'CHANGE_DEFAULT_GROUP'		=> 'Canvia el grup per defecte',
	'CHANGE_PASSWORD'			=> 'Canvia la contrasenya',
	'CLICK_RETURN_FOLDER'		=> '%1$sTorna a la “%3$s” carpeta%2$s',
	'CONFIRMATION'				=> 'Confirmació de registre',
	'CONFIRM_CHANGES'			=> 'Confirm changes',	
	'CONFIRM_EMAIL'				=> 'Confirmació de l\'adreça de correu',
	'CONFIRM_EMAIL_EXPLAIN'		=> 'Només heu d\'especificar-ho en cas que estigueu canviant-lo.',
	'CONFIRM_EXPLAIN'			=> 'Per tal de previndre registres automatitzats, el forum requereix que introduïu un codi de confirmació que es mostra a la imatge que podeu veure a continuació. Si no podeu veure-la bé, contacteu amb l\'%sadministrador%s.',
	'CONFIRM_PASSWORD'			=> 'Confirmació de contrasenya',
	'CONFIRM_PASSWORD_EXPLAIN'	=> 'Només heu d\'especificar-ho en cas que estigueu canviant-la.',
	'COPPA_BIRTHDAY'			=> 'Per tal de continuar amb el procés de registre, digueu quan vau néixer.',
	'COPPA_COMPLIANCE'			=> 'Conformitat COPPA',
	'COPPA_EXPLAIN'				=> 'Quan feu clic es crerarà el vostre compte. Aquest compte no s\'aprovarà fins que un tutor l\'aprove. Rebreu un mail amb informació de com fer-ho.',
	'CREATE_FOLDER'				=> 'Afegir carpeta…',
	'CURRENT_IMAGE'				=> 'Imatge actual',
	'CURRENT_PASSWORD'			=> 'Contrasenya actual',
	'CURRENT_PASSWORD_EXPLAIN'	=> 'Heu de confirmar la contrasenya actual si voleu canviar-la o si voleu canviar l\'adreça de correu.',
	'CUR_PASSWORD_ERROR'		=> 'La contrasenya que heu introduït no és correcta.',
	'CUSTOM_DATEFORMAT'			=> 'Personalitzat…',

	'DEFAULT_ACTION'			=> 'Acció per defecte',
	'DEFAULT_ACTION_EXPLAIN'	=> 'S\'aplicarà aquesta acció en cas de no haver-hi suficient espai.',
	'DEFAULT_ADD_SIG'			=> 'Adjunta la meua signatura per defecte',
	'DEFAULT_BBCODE'			=> 'Activa BBCode per defecte',
	'DEFAULT_NOTIFY'			=> 'Notifica\'m de respostes per defecte',
	'DEFAULT_SMILIES'			=> 'Activa les carotes per defecte',
	'DEFINED_RULES'				=> 'Regles que s\'han definit',
	'DELETED_TOPIC'				=> 'El tema s\'ha eliminat.',
	'DELETE_ATTACHMENT'			=> 'Esborra l\'adjunt',
	'DELETE_ATTACHMENTS'		=> 'Esborra els adjunts',
	'DELETE_ATTACHMENT_CONFIRM'	=> 'Esteu segurs que voleu eliminar aquest fitxer adjunt?',
	'DELETE_ATTACHMENTS_CONFIRM'=> 'Esteu segurs que voleu eliminar aquests fitxers adjunts?',
	'DELETE_AVATAR'				=> 'Esborra la imatge',
	'DELETE_COOKIES_CONFIRM'	=> 'Esteu segurs que voleu esborrar totes les cookies del fòrum?',
	'DELETE_MARKED_PM'			=> 'Esborra missatges marcats',
	'DELETE_MARKED_PM_CONFIRM'	=> 'Esteu segurs que voleu esborrar els missatges marcats?',
	'DELETE_OLDEST_MESSAGES'	=> 'Esborra els missatges més antics',
	'DELETE_MESSAGE'			=> 'Esborra missatge',
	'DELETE_MESSAGE_CONFIRM'	=> 'Esteu segurs de voler eliminar aquest missatge privat?',
	'DELETE_MESSAGES_IN_FOLDER'	=> 'Elimina tots els missatges sense esborrar la carpeta',
	'DELETE_RULE'				=> 'Esborra regla',
	'DELETE_RULE_CONFIRM'		=> 'Esteu segurs que voleu esborrar aquesta regla?',
	'DEMOTE_SELECTED'			=> 'Degrada seleccionats',
	'DISABLE_CENSORS'			=> 'Habilita censura de paraules',
	'DISPLAY_GALLERY'			=> 'Mostra galeria',
	'DOMAIN_NO_MX_RECORD_EMAIL'	=> 'El domini d\'adreça electrònica que heu introduït no té un expedient MX vàlid.',
	'DOWNLOADS'					=> 'Descàrregues',
	'DRAFTS_DELETED'			=> 'S\'han esborrat tots els esborranys seleccionats.',
	'DRAFTS_EXPLAIN'			=> 'Ací podeu veure, editar i esborrar els vostres esborranys.',
	'DRAFT_UPDATED'				=> 'S\'ha actualitzat l\'esborrany.',

	'EDIT_DRAFT_EXPLAIN'		=> 'Ací podeu editar el vostre esborrany. Els esborranys no poden contindre fitxers adjunts ni enquestes.',
	'EMAIL_BANNED_EMAIL'		=> 'L\'adreça de correu electrònic que heu introduït no es permet fer servir.',
	'EMAIL_INVALID_EMAIL'		=> 'L\'adreça de correu electrònic que heu introduït no és vàlida.',
	'EMAIL_REMIND'				=> 'Aquesta ha d\'ésser l\'adreça que vau introduir quan vau registrar-vos.',

	'EMAIL_TAKEN_EMAIL'			=> 'L\'adreça de correu que heu introduït ja s\'està fent servir.',
	'EMPTY_DRAFT'				=> 'Heu d\'introduir un missatge per enviar els canvis.',
	'EMPTY_DRAFT_TITLE'			=> 'Heu d\'introduir un títol per a l\'esborrany.',
	'EXPORT_AS_XML'				=> 'Exporta com a XML',
	'EXPORT_AS_CSV'				=> 'Exporta com a CSV',
	'EXPORT_AS_CSV_EXCEL'		=> 'Exporta com a CSV (Excel)',
	'EXPORT_AS_TXT'				=> 'Exporta com a TXT',
	'EXPORT_AS_MSG'				=> 'Exporta com a MSG',
	'EXPORT_FOLDER'				=> 'Exporta aquesta vista',

	'FIELD_REQUIRED'					=> 'El camp “%s” s\'ha d\'omplir.',
	'FIELD_TOO_SHORT'					=> 'El camp “%1$s” és massa curt, es requereixen com a mínim %2$d caràcters.',
	'FIELD_TOO_LONG'					=> 'El camp “%1$s” és massa llarg, es permeten com a màxim %2$d caràcters.',
	'FIELD_TOO_SMALL'					=> 'El valor de “%1$s” és massa xicotet, es requereix un valor mínim de %2$d.',
	'FIELD_TOO_LARGE'					=> 'El valor de “%1$s” és massa llarg, es permet un valor màxim de %2$d.',
	'FIELD_INVALID_CHARS_NUMBERS_ONLY'	=> 'El camp “%s” conté caràcters no vàlids, només es permeten números.',
	'FIELD_INVALID_CHARS_ALPHA_ONLY'	=> 'El camp “%s” conté caràcters no vàlids, només caràcters alfanumèrics estan permesos.',
	'FIELD_INVALID_CHARS_SPACERS_ONLY'	=> 'El camp “%s” conté caràcters no vàlids, només caràcters alfanumèrics, espai o caràcters com -+_[] estan permesos.',
	'FIELD_INVALID_DATE'				=> 'El camp “%s” has an invalid date.',

	'FOE_MESSAGE'				=> 'Missatge des d\'un enemic',
	'FOES_EXPLAIN'				=> 'Els enemics són usuaris que s\'ignoren per defecte. Els missatges d\'aquests usuaris no seran visibles. El missatges personals sí que es veuran. Teniu en compte que no podeu ignorar als moderadors o administradors.',
	'FOES_UPDATED'				=> 'La llista d\'enemics s\'ha actualitzat.',
	'FOLDER_ADDED'				=> 'S\'ha afegit la carpeta.',
	'FOLDER_MESSAGE_STATUS'		=> '%1$d de %2$d que podeu emmagatzemar',
	'FOLDER_NAME_EXIST'			=> 'La carpeta <strong>%s</strong> ja existeix.',
	'FOLDER_OPTIONS'			=> 'Paràmetres de carpeta',
	'FOLDER_RENAMED'			=> 'S\'ha canviat el nom de la carpeta.',
	'FOLDER_REMOVED'			=> 'S\'ha esborrat la carpeta.',
	'FOLDER_STATUS_MSG'			=> 'La carpeta està a un %1$d%% plena (%2$d de %3$d que podeu emmagatzemar)',
	'FORWARD_PM'				=> 'Reenvia MP',
	'FORCE_PASSWORD_EXPLAIN'	=> 'Abans de continuar navegant pel fòrum, heu de canviar la contrasenya.',
	'FRIEND_MESSAGE'			=> 'Missatge d\'un amic',
	'FRIENDS'					=> 'Amics',
	'FRIENDS_EXPLAIN'			=> 'El amics permeten accedir als membres amb els quals us comuniqueu de forma freqüent.',
	'FRIENDS_OFFLINE'			=> 'Fora de línia',
	'FRIENDS_ONLINE'			=> 'En línia',
	'FRIENDS_UPDATED'			=> 'La llista d\'amics s\'ha actualitzat.',
	'FULL_FOLDER_OPTION_CHANGED'=> 'L\'acció que s\'executarà quan la carpeta estiga plena s\'ha canviat.',
	'FWD_ORIGINAL_MESSAGE'		=> '-------- Original Message --------',
	'FWD_SUBJECT'				=> 'Assumpte: %s',
	'FWD_DATE'					=> 'Data: %s',
	'FWD_FROM'					=> 'Des de: %s',
	'FWD_TO'					=> 'Per: %s',

	'GLOBAL_ANNOUNCEMENT'		=> 'Anunci global',

	'HIDE_ONLINE'				=> 'Oculta l\'estat de connexió',
	'HIDE_ONLINE_EXPLAIN'		=> 'El canvi no es farà efectiu fins a la propera visita que feu al fòrum.',
	'HOLD_NEW_MESSAGES'			=> 'No acceptes nous missatges (es retornaran a l\'emisor fins que no s\'allibere espai)',
	'HOLD_NEW_MESSAGES_SHORT'	=> 'Els nous missatges es retornaran',

	'IF_FOLDER_FULL'			=> 'Si la carpeta és plena',
	'IMPORTANT_NEWS'			=> 'Avisos importants',
	'INVALID_USER_BIRTHDAY'			=> 'L\'aniversari introduït no és una data vàlida.',
	'INVALID_CHARS_USERNAME'	=> 'El nom d\'usuari conté caràcters prohibits.',
	'INVALID_CHARS_NEW_PASSWORD'=> 'La contrasenya no conté els caràcters que es requereixen.',
	'ITEMS_REQUIRED'			=> 'Els elements marcats amb * s\'han d\'omplir.',

	'JOIN_SELECTED'				=> 'Unir-se als seleccionats',

	'LANGUAGE'					=> 'Llengua',
	'LINK_REMOTE_AVATAR'		=> 'Enllaç extern',
	'LINK_REMOTE_AVATAR_EXPLAIN'=> 'Introduïu l\'URL de la imatge que voleu fer servir.',
	'LINK_REMOTE_SIZE'			=> 'Dimensions de l\'avatar',
	'LINK_REMOTE_SIZE_EXPLAIN'	=> 'Especifiqueu l\'amplada i l\'alçada de l\'avatar. Deixeu-ho en blanc per fer-ho automàticament.',
	'LOGIN_EXPLAIN_UCP'			=> 'Heu d\'entrar abans de poder accedir al Panel de l\'usuari.',
	'LOGIN_REDIRECT'			=> 'Heu entrat correctament.',
	'LOGOUT_FAILED'				=> 'No s\'ha pogut eixir, ja que la sol·licitud no es correspon amb la vostra sessió. Contacteu amb l\'administrador del fòrum si el problema persisteix.',
	'LOGOUT_REDIRECT'			=> 'Heu eixit correctament.',

	'MARK_IMPORTANT'				=> 'Marca/Desmarca és important',
	'MARKED_MESSAGE'				=> 'Missatge marcat',
	'MAX_FOLDER_REACHED'			=> 'S\'ha arribat al nombre màxim de carpetes permeses per usuari.',
	'MESSAGE_BY_AUTHOR'				=> 'per',
	'MESSAGE_COLOURS'				=> 'Codi de colors',
	'MESSAGE_DELETED'				=> 'S\'ha esborrat el missatge.',
	'MESSAGE_HISTORY'				=> 'Historial del missatge',
	'MESSAGE_REMOVED_FROM_OUTBOX'	=> 'Aquest missatge s\'ha esborrat per l\'autor abans que s\'enviara.',
	'MESSAGE_SENT_ON'				=> 'en',
	'MESSAGE_STORED'				=> 'El missatge s\'ha enviat.',
	'MESSAGE_TO'					=> 'Per',
	'MESSAGES_DELETED'				=> 'S\'han esborrat els missatges',
	'MOVE_DELETED_MESSAGES_TO'		=> 'Moure el missatges des de la carpeta eliminada cap a',
	'MOVE_DOWN'						=> 'Desplaça avall',
	'MOVE_MARKED_TO_FOLDER'			=> 'Desplaça els marcats a %s',
	'MOVE_PM_ERROR'					=> 'S\'ha produït un error quan es movien els missatges a la nova carpeta. Només s\'han mogut %1d de %2d missatges.',
	'MOVE_TO_FOLDER'				=> 'Desplaça a la carpeta',
	'MOVE_UP'						=> 'Desplaça amunt',

	'NEW_EMAIL_ERROR'				=> 'Les direccions de correu que heu introduït no coincideixen.',
	'NEW_FOLDER_NAME'				=> 'Nou nom de carpeta',
	'NEW_PASSWORD'					=> 'Nova contrasenya',
	'NEW_PASSWORD_ERROR'			=> 'Les contrasenyes que heu introduït no coincideixen.',
	'NOTIFY_METHOD'					=> 'Forma de notificació',
	'NOTIFY_METHOD_BOTH'			=> 'Ambdós',
	'NOTIFY_METHOD_EMAIL'			=> 'Només E-mail',
	'NOTIFY_METHOD_EXPLAIN'			=> 'Forma per enviar missatges mitjançant aquest fòrum.',
	'NOTIFY_METHOD_IM'				=> 'Només Jabber',
	'NOTIFY_ON_PM'					=> 'Notifica\'m en cas de nous missatges privats',
	'NOT_ADDED_FRIENDS_ANONYMOUS'	=> 'No podeu afegir usuaris anònims a la llista d\'amics.',
	'NOT_ADDED_FRIENDS_FOES'		=> 'No podeu afegir usuaris que siguen enemics a la llista d\'amics.',
	'NOT_ADDED_FRIENDS_SELF'		=> 'No podeu afegir-vos a vosaltres mateixos a la llista d\'amics.',
	'NOT_ADDED_FOES_MOD_ADMIN'		=> 'No podeu afegir administradors ni moderadors a la llista d\'enemics.',
	'NOT_ADDED_FOES_ANONYMOUS'		=> 'No podeu afegir usuaris anònims a la llista d\'enemics.',
	'NOT_ADDED_FOES_FRIENDS'		=> 'No podeu afegir usuaris que siguen amics a la llista d\'enemics.',
	'NOT_ADDED_FOES_SELF'			=> 'No podeu afegir-vos a vosaltres mateixos a la llista d\'enemics.',
	'NOT_AGREE'						=> 'No estic d\'acord amb aquests termes',
	'NOT_ENOUGH_SPACE_FOLDER'		=> 'La carpeta de destí “%s” sembla que és plena. No s\'ha pogut realitzar l\'acció.',
	'NOT_MOVED_MESSAGE'				=> 'Teniu 1 missatge privat esperant perquè la carpeta és plena.',
	'NOT_MOVED_MESSAGES'			=> 'Teniu %d missatges privats esperant perquè la carpeta és plena.',
	'NO_ACTION_MODE'				=> 'No s\'ha especificat una acció de missatge.',
	'NO_AUTHOR'						=> 'No s\'ha definit cap autor per a aquest missathge',
	'NO_AVATAR_CATEGORY'			=> 'No',

	'NO_AUTH_DELETE_MESSAGE'		=> 'No esteu autoritzats a esborrar missatges privats.',
	'NO_AUTH_EDIT_MESSAGE'			=> 'No esteu autoritzats a editar missatges privats.',
	'NO_AUTH_FORWARD_MESSAGE'		=> 'No esteu autoritzats a reenviar missatges privats.',
	'NO_AUTH_GROUP_MESSAGE'			=> 'No esteu autoritzats a enviar missatges privats als grups.',
	'NO_AUTH_READ_MESSAGE'			=> 'No esteu autoritzats a llegir missatges privats.',
	'NO_AUTH_READ_REMOVED_MESSAGE'	=> 'No esteu autoritzats a llegir aquest missatge perquè l\'autor l\'ha eliminat.',
	'NO_AUTH_SEND_MESSAGE'			=> 'No esteu autoritzats a enviar missatges privats.',
	'NO_AUTH_SIGNATURE'				=> 'No esteu autoritzats a crear una signatura.',

	'NO_BCC_RECIPIENT'			=> 'No',
	'NO_BOOKMARKS'				=> 'No teniu temes preferits.',
	'NO_BOOKMARKS_SELECTED'		=> 'No heu seleccionat cap preferit.',
	'NO_EDIT_READ_MESSAGE'		=> 'Private message cannot be edited because it has already been read.',
	'NO_EMAIL_USER'				=> 'La informació de l\'adreça de correu o de l\'usuari no es poden trobar.',
	'NO_FOES'					=> 'Actualment no hi ha enemics',
	'NO_FRIENDS'				=> 'Actualment no hi ha amics',
	'NO_FRIENDS_OFFLINE'		=> 'No hi ha amics fora de línia',
	'NO_FRIENDS_ONLINE'			=> 'No hi ha amics en línia',
	'NO_GROUP_SELECTED'			=> 'No s\'ha especificat cap grup.',
	'NO_IMPORTANT_NEWS'			=> 'No hi ha avisos importants.',
	'NO_MESSAGE'				=> 'No es pot trobar el missatge.',
	'NO_NEW_FOLDER_NAME'		=> 'Heu d\'especificar un nom de carpeta.',
	'NO_NEWER_PM'				=> 'No hi ha missatges més nous.',
	'NO_OLDER_PM'				=> 'No hi ha missatges més antics.',
	'NO_PASSWORD_SUPPLIED'		=> 'No podeu entrar sense la contrasenya.',
	'NO_RECIPIENT'				=> 'No s\'ha definit destinatari.',
	'NO_RULES_DEFINED'			=> 'No s\'ha definit cap regla.',
	'NO_SAVED_DRAFTS'			=> 'No hi ha esborranys desats.',
	'NO_TO_RECIPIENT'			=> 'No',
	'NO_WATCHED_FORUMS'			=> 'No s\'està fent seguiment de cap fòrum.',
	'NO_WATCHED_TOPICS'			=> 'No s\'està fent seguiment de cap tema.',

	'PASS_TYPE_ALPHA_EXPLAIN'	=> 'La contrasenya ha de tindre entre %1$d i %2$d caràcters. Només podeu fer servir lletres combinades amb números.',
	'PASS_TYPE_ANY_EXPLAIN'		=> 'Entre %1$d i %2$d caràcters.',
	'PASS_TYPE_CASE_EXPLAIN'	=> 'La contrasenya ha de tindre entre %1$d i %2$d caràcters, es recomana combinar lletres i números.',
	'PASS_TYPE_SYMBOL_EXPLAIN'	=> 'La contrasenya ha de tindre entre %1$d i %2$d caràcters, es recomana combinar lletres i números.',

	'PASSWORD'					=> 'Contrasenya',
	'PASSWORD_ACTIVATED'		=> 'La nova contrasenya s\'ha activat.',
	'PASSWORD_UPDATED'			=> 'La contrasenya s\'ha enviat a la vostra adreça de correu.',
	'PERMISSIONS_RESTORED'		=> 'S\'han restaurat els permisos originals.',
	'PERMISSIONS_TRANSFERRED'	=> 'S\'han transmès els permisos des de <strong>%s</strong>, ara podeu navegar pel fòrum amb aquests permisos d\'usuari.<br />Els permisos d\'administrador no s\'han transmès. Podeu restaurar-los en qualsevol moment.',
	'PM_DISABLED'				=> 'La missatgeria privada s\'ha desactivat en aquest fòrum.',
	'PM_FROM'					=> 'Des de',
	'PM_FROM_REMOVED_AUTHOR'	=> 'Aquest missatge s\'ha enviat per a un usuari que no es troba registrat.',
	'PM_ICON'					=> 'Icona',
	'PM_INBOX'					=> 'Safata d\'entrada',
	'PM_NO_USERS'				=> 'Els usuaris que es volen afegir no existeixen.',
	'PM_OUTBOX'					=> 'Safata d\'eixida',
	'PM_SENTBOX'				=> 'Missatges enviats',
	'PM_SUBJECT'				=> 'Assumpte del missatge',
	'PM_TO'						=> 'Envia a',
	'PM_USERS_REMOVED_NO_PM'	=> 'Alguns usuaris no s\'han pogut afegir ja que tenen desactivada la funció de missatges privats.',
	'POPUP_ON_PM'				=> 'Finestra emergent si hi ha missatges nous',
	'POST_EDIT_PM'				=> 'Edita missatge',
	'POST_FORWARD_PM'			=> 'Reenvia missatge',
	'POST_NEW_PM'				=> 'Redactar missatge',
	'POST_PM_LOCKED'			=> 'La missatgeria privada està bloquejada actualment',
	'POST_PM_POST'				=> 'Cita missatge',
	'POST_QUOTE_PM'				=> 'Cita missatge',
	'POST_REPLY_PM'				=> 'Respon al missatge',
	'PRINT_PM'					=> 'Vista d\'impressió',
	'PREFERENCES_UPDATED'		=> 'Les vostres preferències s\'han actualitzat.',
	'PROFILE_INFO_NOTICE'		=> 'Teniu en compte que aquesta informació serà visible per a tots els usuaris. Els camps amb * s\'han d\'omplir.',

	'PROFILE_UPDATED'			=> 'El vostre perfil s\'ha actualitzat.',

	'RECIPIENT'							=> 'Destinatari',
	'RECIPIENTS'						=> 'Destinataris',
	'REGISTRATION'						=> 'Registre',
	'RELEASE_MESSAGES'					=> '%sAlliberar tots els missatges en espera%s… es reordenaran a la carpeta apropiada si hi ha espai disponible.',
	'REMOVE_ADDRESS'					=> 'Esborra la direcció',
	'REMOVE_SELECTED_BOOKMARKS'			=> 'Eliminar els preferits seleccionats',
	'REMOVE_SELECTED_BOOKMARKS_CONFIRM'	=> 'Esteu segurs que voleu eliminar tots els preferits que heu seleccionat?',
	'REMOVE_BOOKMARK_MARKED'			=> 'Eliminar els preferits marcats',
	'REMOVE_FOLDER'						=> 'Esborra la carpeta',
	'REMOVE_FOLDER_CONFIRM'				=> 'Esteu segurs que voleu esborrar aquesta carpeta?',
	'RENAME'							=> 'Canvia el nom',
	'RENAME_FOLDER'						=> 'Canvia el nom de la carpeta',
	'REPLIED_MESSAGE'					=> 'Respost al missatge',
	'RESIGN_SELECTED'					=> 'Dimiteix seleccionats',
	'RETURN_FOLDER'						=> '%1$sTorna a l\'anterior carpeta%2$s',
	'RETURN_UCP'						=> '%sTorna al Panell de Control de l\'Usuari%s',
	'RULE_ADDED'						=> 'S\'ha afegit la regla.',
	'RULE_ALREADY_DEFINED'				=> 'Aquesta regla ja s\'ha definit.',
	'RULE_DELETED'						=> 'S\'ha esborrat la regla.',
	'RULE_NOT_DEFINED'					=> 'La regla no s\'ha especificat correctament.',
	'RULE_REMOVED_MESSAGE'				=> 'S\'ha eliminat un missatge privat perquè s\'ha filtrat.',
	'RULE_REMOVED_MESSAGES'				=> 'S\'han eliminat %d missatges privats perquè s\'han filtrat.',

	'SAME_PASSWORD_ERROR'		=> 'La nova contrasenya que heu introduït és la mateixa que teniu actualment.',
	'SEARCH_YOUR_POSTS'			=> 'Mostra tots els missatges',
	'SEND_PASSWORD'				=> 'Envia una contrasenya',
	'SENT_AT'					=> 'Enviat el',
	'SHOW_EMAIL'				=> 'Altres usuaris poden contactar amb mi per l\'adreça de correu',
	'SIGNATURE_EXPLAIN'			=> 'Aquest és un bloc de text que s\'afegirà a tots els missatges que escriviu al fòrum. Hi ha un límit de %d caràcters.',
	'SIGNATURE_PREVIEW'			=> 'La signatura es mostrarà als missatges com es mostra ací',
	'SIGNATURE_TOO_LONG'		=> 'La signatura és massa llarga.',
	'SORT'						=> 'Mostra',
	'SORT_COMMENT'				=> 'Comentari',
	'SORT_DOWNLOADS'			=> 'Descàrregues',
	'SORT_EXTENSION'			=> 'Extensió',
	'SORT_FILENAME'				=> 'Nom',
	'SORT_POST_TIME'			=> 'Data',
	'SORT_SIZE'					=> 'Mida',

	'TIMEZONE'					=> 'Fus horari',
	'TO'						=> 'Per a',
	'TOO_MANY_RECIPIENTS'		=> 'Massa destinataris.',
	'TOO_MANY_REGISTERS'		=> 'Heu superat el nombre màxim d\'intents de registre. Proveu més tard.',

	'UCP'						=> 'Panell de control de l\'usuari',
	'UCP_ACTIVATE'				=> 'Activa compte',
	'UCP_ADMIN_ACTIVATE'		=> 'Heu d\'introduir una adreça de correu vàlida ja que el compte necessita activació.',

	'UCP_AIM'					=> 'Missatger AOL',
	'UCP_ATTACHMENTS'			=> 'Fitxers adjunts',
	'UCP_COPPA_BEFORE'			=> 'Abans %s',
	'UCP_COPPA_ON_AFTER'		=> 'A sobre o després %s',
	'UCP_EMAIL_ACTIVATE'		=> 'Heu d\'introduir una adreça de correu vàlida ja que el compte necessita activació.',

	'UCP_ICQ'					=> 'Número ICQ',
	'UCP_JABBER'				=> 'Adreça Jabber',

	'UCP_MAIN'					=> 'General',
	'UCP_MAIN_ATTACHMENTS'		=> 'Gestiona adjunts',
	'UCP_MAIN_BOOKMARKS'		=> 'Gestiona preferits',
	'UCP_MAIN_DRAFTS'			=> 'Gestiona esborranys',
	'UCP_MAIN_FRONT'			=> 'Inici',
	'UCP_MAIN_SUBSCRIBED'		=> 'Gestiona subscripcions',

	'UCP_MSNM'					=> 'Missatger MSN',
	'UCP_NO_ATTACHMENTS'		=> 'No heu publicat cap fitxer.',

	'UCP_PREFS'					=> 'Paràmetres del fòrum',
	'UCP_PREFS_PERSONAL'		=> 'Paràmetres globals',
	'UCP_PREFS_POST'			=> 'Opcions per defecte',
	'UCP_PREFS_VIEW'			=> 'Paràmetres de visualització',
	
	'UCP_PM'					=> 'Missatges privats',
	'UCP_PM_COMPOSE'			=> 'Escriure un missatge',
	'UCP_PM_DRAFTS'				=> 'Gestiona esborranys',
	'UCP_PM_OPTIONS'			=> 'Regles, carpetes i paràmetres',
	'UCP_PM_POPUP'				=> 'Missatges privats',
	'UCP_PM_POPUP_TITLE'		=> 'Finestra emergent si hi ha missatges privats',
	'UCP_PM_UNREAD'				=> 'Missatges sense llegir',
	'UCP_PM_VIEW'				=> 'Veure missatges',

	'UCP_PROFILE'				=> 'Perfil',
	'UCP_PROFILE_AVATAR'		=> 'Avatar',
	'UCP_PROFILE_PROFILE_INFO'	=> 'Perfil',
	'UCP_PROFILE_REG_DETAILS'	=> 'Paràmetres del compte',
	'UCP_PROFILE_SIGNATURE'		=> 'Signatura',

	'UCP_USERGROUPS'			=> 'Grups d\'usuaris',
	'UCP_USERGROUPS_MEMBER'		=> 'Subscripcions',
	'UCP_USERGROUPS_MANAGE'		=> 'Gestiona grups',

	'UCP_REGISTER_DISABLE'			=> 'No és possible crear un nou compte actualment.',
	'UCP_REMIND'					=> 'Envia contrasenya',
	'UCP_RESEND'					=> 'Envia mail d\'activació',
	'UCP_WELCOME'					=> 'Benvinguts al Panell de Control de l\'Usuari. Des d\'ací podeu veure, gestionar i actualitzar el vostre perfil, les vostres subscripcions, favorits, fitxers adjunts, etc. Des d\'ací també podeu enviar i rebre missatges privats amb altres usuaris.',

	'UCP_YIM'						=> 'Missatger Yahoo',
	'UCP_ZEBRA'						=> 'Amics i enemics',
	'UCP_ZEBRA_FOES'				=> 'Gestiona enemics',
	'UCP_ZEBRA_FRIENDS'				=> 'Gestiona amics',
	'UNKNOWN_FOLDER'				=> 'Carpeta desconeguda',
	'UNWATCH_MARKED'				=> 'Deixa de fer seguiment dels marcats',
	'UPLOAD_AVATAR_FILE'			=> 'Carrega des de l\'ordinador',
	'UPLOAD_AVATAR_URL'				=> 'Carrega des d\'una URL',
	'UPLOAD_AVATAR_URL_EXPLAIN'		=> 'Introduïu l\'URL de localització de la imatge. Es copiarà al fòrum.',
	'USERNAME_ALPHA_ONLY_EXPLAIN'	=> 'El nom d\'usuari ha de tindre entre %1$d i %2$d caràcters (alfanumèrics).',
	'USERNAME_ALPHA_SPACERS_EXPLAIN'=> 'El nom d\'usuari ha de tindre entre %1$d i %2$d caràcters (alfanumèrics, espai o caràcters tipus -+_[])',
	'USERNAME_ASCII_EXPLAIN'		=> 'El nom d\'usuari ha de tindre entre %1$d i %2$d caràcters (només ASCII).',

	'USERNAME_LETTER_NUM_EXPLAIN'	=> 'El nom d\'usuari ha de tindre entre %1$d i %2$d caràcters (només lletres i números).',
	'USERNAME_LETTER_NUM_SPACERS_EXPLAIN'=> 'El nom d\'usuari ha de tindre entre %1$d i %2$d caràcters (només lletres, números, espais o -+_[])',
	'USERNAME_CHARS_ANY_EXPLAIN'	=> 'Entre %1$d i %2$d caràcters.',
	'USERNAME_TAKEN_USERNAME'		=> 'El nom d\'usuari que heu introduït ja existeix. Proveu amb un altre.',
	'USERNAME_DISALLOWED_USERNAME'	=> 'El nom d\'usuari que heu introduït no està permès o heu introduït algun caràcter no vàlid. Proveu amb un altre.',
	'USER_NOT_FOUND_OR_INACTIVE'	=> 'El nom d\'usuari que heu introduït no es pot trobar o no està entre els usuaris actius.',

	'VIEW_AVATARS'				=> 'Mostra avatars',
	'VIEW_EDIT'					=> 'Veure/Edita',
	'VIEW_FLASH'				=> 'Mostra animacions Flash',
	'VIEW_IMAGES'				=> 'Mostra les imatges als missatges',
	'VIEW_NEXT_HISTORY'			=> 'Següent PM a l\'historial',
	'VIEW_NEXT_PM'				=> 'Següent MP',
	'VIEW_PM'					=> 'Veure missatge',
	'VIEW_PM_INFO'				=> 'Detalls del missatge',
	'VIEW_PM_MESSAGE'			=> '1 missatge',
	'VIEW_PM_MESSAGES'			=> '%d missatges',
	'VIEW_PREVIOUS_HISTORY'		=> 'Anteriors PM a l\'historial',
	'VIEW_PREVIOUS_PM'			=> 'MP anterior',
	'VIEW_SIGS'					=> 'Mostra firmes',
	'VIEW_SMILIES'				=> 'Mostra les carotes com a imatges',
	'VIEW_TOPICS_DAYS'			=> 'Mostra temes de dies anteriors',
	'VIEW_TOPICS_DIR'			=> 'Mostra l\'ordre de direcció del tema',
	'VIEW_TOPICS_KEY'			=> 'Mostra els temes ordenats per',
	'VIEW_POSTS_DAYS'			=> 'Mostra els missatges de dies anteriors',
	'VIEW_POSTS_DIR'			=> 'Mostra l\'ordre de direcció del missatge',
	'VIEW_POSTS_KEY'			=> 'Mostra els missatges ordenats per',

	'WATCHED_EXPLAIN'			=> 'Ací baix teniu una llista dels fòrums i temes dels quals esteu fent seguiment. Rebreu un missatge cada vegada que hi haja nous missatges en ells. Per deixar el seguiment, marqueu el fòrum/tema i després feu clic sobre <em>Deixar seguiment dels marcats</em>.',
	'WATCHED_FORUMS'			=> 'Fòrums dels quals s\'està fent seguiment',
	'WATCHED_TOPICS'			=> 'Temes dels quals s\'està fent seguiment',
	'WRONG_ACTIVATION'			=> 'La clau d\'activació que heu provist no coincidix amb la de la base de dades.',

	'YOUR_DETAILS'				=> 'Activitat',
	'YOUR_FOES'					=> 'Els vostres enemics',
	'YOUR_FOES_EXPLAIN'			=> 'Per eliminar usuaris, seleccioneu-los i després clique sobre "envia".',
	'YOUR_FRIENDS'				=> 'Els vostres amics',
	'YOUR_FRIENDS_EXPLAIN'		=> 'Per eliminar usuaris, seleccioneu-los i després cliqueu sobre "envia".',
	'YOUR_WARNINGS'				=> 'El teu nivell d\'avís',

	'PM_ACTION' => array(
		'PLACE_INTO_FOLDER'	=> 'Col·loca a la carpeta',
		'MARK_AS_READ'		=> 'Marca com a llegit',
		'MARK_AS_IMPORTANT'	=> 'Marca el missatge',
		'DELETE_MESSAGE'	=> 'Esborra el missatge'
	),
	'PM_CHECK' => array(
		'SUBJECT'	=> 'Assumpte',
		'SENDER'	=> 'Autor',
		'MESSAGE'	=> 'Missatge',
		'STATUS'	=> 'Estat del missatge',
		'TO'		=> 'Envia a'
	),
	'PM_RULE' => array(
		'IS_LIKE'		=> 'és com',
		'IS_NOT_LIKE'	=> 'no és com',
		'IS'			=> 'és',
		'IS_NOT'		=> 'no és',
		'BEGINS_WITH'	=> 'comença per',
		'ENDS_WITH'		=> 'acaba en',
		'IS_FRIEND'		=> 'és amic',
		'IS_FOE'		=> 'és enemic',
		'IS_USER'		=> 'és usuari',
		'IS_GROUP'		=> 'és al grup d\'usuaris',
		'ANSWERED'		=> 'respost',
		'FORWARDED'		=> 'reenviat',
		'TO_GROUP'		=> 'per al meu grup per defecte',
		'TO_ME'			=> 'per mi'
	),


	'GROUPS_EXPLAIN'	=> 'Els grups d\'usuaris permeten administrar millor els usuaris. Cada usuari, per defecte, es fica al grup "Usuaris". Aquest grup definirà el color de l\'usuari, potser també l\'avatar, el rang, etc. Segons les opcions que l\'administrador haja definit, podreu o no canviar el grup per defecte del qual formeu part.',
	'GROUP_LEADER'		=> 'Lideratge',
	'GROUP_MEMBER'		=> 'Grups de pertinença ',
	'GROUP_PENDING'		=> 'Pendents',
	'GROUP_NONMEMBER'	=> 'Sense grups de pertinença',
	'GROUP_DETAILS'		=> 'Detalls de grup',

	'NO_LEADER'		=> 'No hi ha grups de lideratge',
	'NO_MEMBER'		=> 'No hi ha grups de pertinença',
	'NO_PENDING'	=> 'No hi ha subscripcions a grups pendents',
	'NO_NONMEMBER'	=> 'No hi ha grups sense membres',
));

?>
