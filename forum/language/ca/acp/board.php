<?php
/**
*
* acp_board [Catalan]
*
* @package language
* @version $Id: board.php 9037 2008-10-26 10:52:43Z acydburn $
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

// Board Settings
$lang = array_merge($lang, array(
	'ACP_BOARD_SETTINGS_EXPLAIN'	=> 'Aquí podeu determinar l’operació bàsica del vostre fòrum, donar-li un nom i una descripció adequats i, entre altres configuracions, ajustar els valors per defecte per al fus horari i l’idioma.',
	'CUSTOM_DATEFORMAT'				=> 'Personalizat…',
	'DEFAULT_DATE_FORMAT'			=> 'Format de data',
	'DEFAULT_DATE_FORMAT_EXPLAIN'	=> 'El format de data és el mateix que el de la funció <code>date</code> del PHP.',
	'DEFAULT_LANGUAGE'				=> 'Idioma per defecte',
	'DEFAULT_STYLE'					=> 'Estil per defecte',
	'DISABLE_BOARD'					=> 'Inhabilita el fòrum',
	'DISABLE_BOARD_EXPLAIN'			=> 'Això fa que el fòrum no estigui disponible per als usuaris. També podeu introduir un missatge curt (255 caràcters) per que es mostri.',
	'OVERRIDE_STYLE'				=> 'Sobreescriu l’estil dels usuaris',
	'OVERRIDE_STYLE_EXPLAIN'		=> 'Reemplaça l’estil dels usuaris amb l’estil per defecte.',
	'SITE_DESC'						=> 'Descripció del lloc web',
	'SITE_NAME'						=> 'Nom del lloc web',
	'SYSTEM_DST'					=> 'Habilita l’horari d’estiu/<abbr title="Daylight Saving Time">DST</abbr>',
	'SYSTEM_TIMEZONE'				=> 'Fus horari del sistema',
	'WARNINGS_EXPIRE'				=> 'Durada dels avisos',
	'WARNINGS_EXPIRE_EXPLAIN'		=> 'Nombre de dies que han de passar abans que un avís venci automàticament del registre d’un usuari.',
));

// Board Features
$lang = array_merge($lang, array(
	'ACP_BOARD_FEATURES_EXPLAIN'	=> 'Aquí podeu habilitar/inhabilitar diverses característiques del fòrum.',

	'ALLOW_ATTACHMENTS'			=> 'Permet els fitxers adjunts',
	'ALLOW_BIRTHDAYS'			=> 'Permet els aniversaris',
	'ALLOW_BIRTHDAYS_EXPLAIN'	=> 'Permet introduir la data de naixement i que es mostri l’edat als perfils. Tingueu en compte que la llista d’aniversaris a l’índex del fòrum la controla una configuració de càrrega diferent.',
	'ALLOW_BOOKMARKS'			=> 'Permet afegir temes a les adreces d’interès',
	'ALLOW_BOOKMARKS_EXPLAIN'	=> 'L’usuari pot emmagatzemar adreces d’interès personals.',
	'ALLOW_BBCODE'				=> 'Permet el BBCode',
	'ALLOW_FORUM_NOTIFY'		=> 'Permet la subscripció a fòrums',
	'ALLOW_NAME_CHANGE'			=> 'Permet el canvi de nom d’usuari',
	'ALLOW_NO_CENSORS'			=> 'Permet la inhabilitació de la censura de paraules',
	'ALLOW_NO_CENSORS_EXPLAIN'	=> 'Els usuaris poden triar si inhabiliten la censura automàtica de paraules a les entrades i els missatges privats.',
	'ALLOW_PM_ATTACHMENTS'		=> 'Permet els fitxers adjunts als missatges privats',
	'ALLOW_SIG'					=> 'Permet les signatures',
	'ALLOW_SIG_BBCODE'			=> 'Permet el BBCode a les signatures dels usuaris',
	'ALLOW_SIG_FLASH'			=> 'Permet l’ús de l’etiqueta <code>[FLASH]</code> del BBCode a les signatures dels usuaris',
	'ALLOW_SIG_IMG'				=> 'Permet l’ús de l’etiqueta <code>[IMG]</code> del BBCode a les signatures dels usuaris',
	'ALLOW_SIG_LINKS'			=> 'Permet l’ús d’enllaços a les signatures dels usuaris',
	'ALLOW_SIG_LINKS_EXPLAIN'	=> 'Si no està permès, l’etiqueta <code>[URL]</code> del BBCode i els URL automàtics/màgics estan inhabilitats.',
	'ALLOW_SIG_SMILIES'			=> 'Permet l’ús d’emoticones a les signatures dels usuaris',
	'ALLOW_SMILIES'				=> 'Permet les emoticones',
	'ALLOW_TOPIC_NOTIFY'		=> 'Permet la subscripció a temes',
	'BOARD_PM'					=> 'Missatgeria privada',
	'BOARD_PM_EXPLAIN'			=> 'Habilita o inhabilita la missatgeria privada per a tots els usuaris.',
));

// Avatar Settings
$lang = array_merge($lang, array(
	'ACP_AVATAR_SETTINGS_EXPLAIN'	=> 'Els avatars són imatges generalment petites i úniques que un usuari pot associar amb si mateix. Depenent de l’estil se solen mostrar sota el nom de l’usuari en la visualització de temes. Aquí podeu determinar de quina manera els usuaris poden definir els seus avatars. Tingueu en compte que per pujar avatars cal que creeu el directori que definiu a sota i que us assegureu que el servidor web hi pot escriure. També tingueu en compte que els límits per a la mida del fitxer d’avatar només s’imposen als avatars pujats, no s’apliquen a les imatges enllaçades remotament.',

	'ALLOW_LOCAL'					=> 'Habilita la galeria d’avatars',
	'ALLOW_REMOTE'					=> 'Habilita els avatars remots',
	'ALLOW_REMOTE_EXPLAIN'			=> 'Avatars enllaçats des d’un altre lloc web.',
	'ALLOW_UPLOAD'					=> 'Habilita la pujada d’avatars',
	'AVATAR_GALLERY_PATH'			=> 'Camí a la galería d’avatars',
	'AVATAR_GALLERY_PATH_EXPLAIN'	=> 'Camí a partir del directori arrel del phpBB per a imatges predefinides, p.ex. <samp>images/avatars/gallery</samp>.',
	'AVATAR_STORAGE_PATH'			=> 'Camí a l’emmagatzemament d’avatars',
	'AVATAR_STORAGE_PATH_EXPLAIN'	=> 'Camí a partir del directori arrel del phpBB, p.ex. <samp>images/avatars/upload</samp>.',
	'MAX_AVATAR_SIZE'				=> 'Dimensions màximes dels avatars',
	'MAX_AVATAR_SIZE_EXPLAIN'		=> 'Amplària x Alçària en píxels.',
	'MAX_FILESIZE'					=> 'Mida màxima dels fitxers d’avatar',
	'MAX_FILESIZE_EXPLAIN'			=> 'Per a fitxers d’avatar pujats.',
	'MIN_AVATAR_SIZE'				=> 'Dimensions mínimes dels avatars',
	'MIN_AVATAR_SIZE_EXPLAIN'		=> 'Amplària x Alçària en píxels.',
));

// Message Settings
$lang = array_merge($lang, array(
	'ACP_MESSAGE_SETTINGS_EXPLAIN'		=> 'Aquí podeu definir la configuració per defecte per a la missatgeria privada.',

	'ALLOW_BBCODE_PM'			=> 'Permet el BBCode als missatges privats',
	'ALLOW_FLASH_PM'			=> 'Permet l’ús de l’etiqueta <code>[FLASH]</code> del BBCode',
	'ALLOW_FLASH_PM_EXPLAIN'	=> 'Tingueu en compte que la possibilitat d’utilitzar flash als missatges privats, si està habilitada aquí, també depèn dels permisos.',
	'ALLOW_FORWARD_PM'			=> 'Permet reenviar missatges privats',
	'ALLOW_IMG_PM'				=> 'Permet l’ús de l’etiqueta <code>[IMG]</code> del BBCode',
	'ALLOW_MASS_PM'				=> 'Permet enviar missatges privats a usuaris múltiples i grups',
	'ALLOW_MASS_PM_EXPLAIN'		=> 'L’enviament a grups es pot ajustar per cada grup a la pàgina de configuració del grup.',
	'ALLOW_PRINT_PM'			=> 'Permet la vista d’impressió a la missatgeria privada',
	'ALLOW_QUOTE_PM'			=> 'Permet citar text als missatges privats',
	'ALLOW_SIG_PM'				=> 'Permet les signatures als missatges privats',
	'ALLOW_SMILIES_PM'			=> 'Permet les emoticones als missatges privats',
	'BOXES_LIMIT'				=> 'Nombre màxim de missatges privats per carpeta',
	'BOXES_LIMIT_EXPLAIN'		=> 'Els usuaris no poden rebre més d’aquest nombre de missatges en cadascuna de les seves carpetes de missatges privats. Introduïu un 0 per permetre un nombre il·limitat de missatges.',
	'BOXES_MAX'					=> 'Nombre màxim de carpetes de missatges privats',
	'BOXES_MAX_EXPLAIN'			=> 'Per defecte els usuaris poden crear aquest nombre de carpetes per a missatges privats.',
	'ENABLE_PM_ICONS'			=> 'Permet l’us d’icones de tema als missatges privats',
	'FULL_FOLDER_ACTION'		=> 'Acció per defecte per a les carpetes plenes',
	'FULL_FOLDER_ACTION_EXPLAIN'=> 'Acció per defecte que es duu a terme quan una carpeta d’un usuari està plena assumint que l’acció de l’usuari per a la carpeta, estigui o no definida, no és aplicable. L’única excepció és la carpeta “Missatges enviats” on l’acció per defecte és sempre eliminar els misatges més antics.',
	'HOLD_NEW_MESSAGES'			=> 'Retenir els missatges nous',
	'PM_EDIT_TIME'				=> 'Limita el temps d’edició',
	'PM_EDIT_TIME_EXPLAIN'		=> 'Limita el temps disponible per editar un missatge privat que encara bo s’hagi entregat. Utilitzar un 0 inhabilita aquesta característica.',
	'PM_MAX_RECIPIENTS'			=> 'Nombre màxim de destinataris permès',
	'PM_MAX_RECIPIENTS_EXPLAIN'	=> 'El nombre màxim de detinataris permesos en un missatge privat. Si utilitzeu un 0, es permet un nombre il·limitat. Podeu configurar aquest valor per cada grup a la pàgina de configuració del grup.',
));

// Post Settings
$lang = array_merge($lang, array(
	'ACP_POST_SETTINGS_EXPLAIN'			=> 'Aquí podeu definir totes les configuracions per defecte per a la publicació d’entrades.',
	'ALLOW_POST_LINKS'					=> 'Permet els enllaços a les entrades/missatges privats',
	'ALLOW_POST_LINKS_EXPLAIN'			=> 'Si no està permès, l’etiqueta <code>[URL]</code> del BBCode i els URL automàtics/màgics estan inhabilitats.',
	'ALLOW_POST_FLASH'					=> 'Permet l’ús de l’etiqueta <code>[FLASH]</code> del BBCode a les entrades',
	'ALLOW_POST_FLASH_EXPLAIN'			=> 'Si no està permès, l’etiqueta <code>[FLASH]</code> del BBCode està inhabilitada a les entrades. Altrament, el sistema de permisos controla quins usuaris poden utilitzar l’etiqueta <code>[FLASH]</code> del BBCode.',

	'ENABLE_QUEUE_TRIGGER'			=> 'Habilita la cua d’entrades',
	'ENABLE_QUEUE_TRIGGER_EXPLAIN'	=> 'Permet posar les entrades d’usuaris registrats a la cua d’aprovació si el seu nombre d’entrades és menor que el valor especificat a sota. Aquesta configuració no afecta a la configuració de permisos per aprovació de temes o entrades.',
	'QUEUE_TRIGGER_POSTS'			=> 'Nombre màxim d’entrades per utilitzar la cua d’entrades',
	'QUEUE_TRIGGER_POSTS_EXPLAIN'	=> 'Si la cua d’entrades està habilitada, aquest és el nombre d’entrades que un usuari necessita fer per tal de publicar-ne sense que siguin aprovades. Si el nombre d’entrades de l’usuari és inferior a aquest número, l’entrada s’emmagatzema a la cua automàticament.',

	'BUMP_INTERVAL'					=> 'Interval de reactivació',
	'BUMP_INTERVAL_EXPLAIN'			=> 'Nombre de minuts, hores o dies des de la darrera entrada en un tema i la capacitat de reactivar aquest tema.',
	'CHAR_LIMIT'					=> 'Nombre màxim de caràcters per entrada',
	'CHAR_LIMIT_EXPLAIN'			=> 'El nombre màxim de caràcters permesos en una entrada. Introduïu un 0 per a un nombre de caràcters il·limitat.',
	'DISPLAY_LAST_EDITED'			=> 'Mostra la informació de l’hora de la darrera edició',
	'DISPLAY_LAST_EDITED_EXPLAIN'	=> 'Tria si la informació sobre la darrera edició es mostra a les entrades.',
	'EDIT_TIME'						=> 'Limita el temps d’edició',
	'EDIT_TIME_EXPLAIN'				=> 'Limita el temps disponible per editar una entrada nova. Introduir un 0 inhabilita aquesta característica.',
	'FLOOD_INTERVAL'				=> 'Interval d’inundació',
	'FLOOD_INTERVAL_EXPLAIN'		=> 'Nombre de segons que ha d’esperar un usuari entre la publicació de dues entrades. Per permetre que els usuaris ho ignorin, modifiqueu els seus permisos.',
	'HOT_THRESHOLD'					=> 'Llindar de tema popular',
	'HOT_THRESHOLD_EXPLAIN'			=> 'Llindar d’entrades per tema necessàries per que un tema es consideri popular. Utilitzeu un 0 per inhabilitar els temes populars.',
	'MAX_POLL_OPTIONS'				=> 'Nombre màxim d’opcions en una enquesta',
	'MAX_POST_FONT_SIZE'			=> 'Mida màxima de la lletra a les entrades',
	'MAX_POST_FONT_SIZE_EXPLAIN'	=> 'Mida màxima de la lletra permesa en una entrada. Introduïu un 0 per a una mida il·limitada.',
	'MAX_POST_IMG_HEIGHT'			=> 'Alçària màxima de les imatges a les entrades',
	'MAX_POST_IMG_HEIGHT_EXPLAIN'	=> 'Alçària màxima d’una imatge/fitxer flash en una entrada. Introduïu un 0 per a una alçària il·limitada.',
	'MAX_POST_IMG_WIDTH'			=> 'Amplària màxima de les imatges a les entrades',
	'MAX_POST_IMG_WIDTH_EXPLAIN'	=> 'Amplària màxima d’una imatge/fitxer flash en una entrada. Introduïu un 0 per a una amplària il·limitada.',
	'MAX_POST_URLS'					=> 'Nombre màxim d’enllaços per entrada',
	'MAX_POST_URLS_EXPLAIN'			=> 'Nombre màxim d’URL en una entrada. Introduïu un 0 per a enllaços il·limitats.',
	'POSTING'						=> 'Publicació',
	'POSTS_PER_PAGE'				=> 'Entrades per pàgina',
	'QUOTE_DEPTH_LIMIT'				=> 'Nombre màxim de nivells incrustats en les citacions a les entrades',
	'QUOTE_DEPTH_LIMIT_EXPLAIN'		=> 'Nombre màxim de nivells incrustats en les citacions d’una entrada. Introduïu un 0 per a una profunditat il·limitada.',
	'SMILIES_LIMIT'					=> 'Nombre màxim d’emoticones per entrada',
	'SMILIES_LIMIT_EXPLAIN'			=> 'Nombre màxim d’emoticones en una entrada. Introduïu un 0 per a emoticones il·limitades.',
	'TOPICS_PER_PAGE'				=> 'Temes per pàgina',
));

// Signature Settings
$lang = array_merge($lang, array(
	'ACP_SIGNATURE_SETTINGS_EXPLAIN'	=> 'Aquí podeu definir totes les configuracions per defecte per a les signatures.',

	'MAX_SIG_FONT_SIZE'				=> 'Mida màxima de la lletra a les signatures',
	'MAX_SIG_FONT_SIZE_EXPLAIN'		=> 'Mida màxima de la lletra permesa en les signatures dels usuaris. Introduïu un 0 per a una mida il·limitada.',
	'MAX_SIG_IMG_HEIGHT'			=> 'Alçària màxima de les imatges a les signatures',
	'MAX_SIG_IMG_HEIGHT_EXPLAIN'	=> 'Alçària màxima d’una imatge/fitxer flash en les signatures dels usuaris. Introduïu un 0 per a una alçària il·limitada.',
	'MAX_SIG_IMG_WIDTH'				=> 'Amplària màxima de les imatges a les signatures',
	'MAX_SIG_IMG_WIDTH_EXPLAIN'		=> 'Amplària màxima d’una imatge/fitxer flash en les signatures dels usuaris. Introduïu un 0 per a una amplària il·limitada.',
	'MAX_SIG_LENGTH'				=> 'Longitud màxima de les signatures',
	'MAX_SIG_LENGTH_EXPLAIN'		=> 'Nombre màxim de caràcters en les signatures dels usuaris.',
	'MAX_SIG_SMILIES'				=> 'Nombre màxim d’emoticones per signatura',
	'MAX_SIG_SMILIES_EXPLAIN'		=> 'Nombre màxim d’emoticones en les signatures dels usuaris. Introduïu un 0 per a emoticones il·limitades.',
	'MAX_SIG_URLS'					=> 'Nombre màxim d’enllaços a les signatures',
	'MAX_SIG_URLS_EXPLAIN'			=> 'Nombre màxim d’enllaços en les signatures dels usuaris. Introduïu un 0 per a enllaços il·limitats.',
));

// Registration Settings
$lang = array_merge($lang, array(
	'ACP_REGISTER_SETTINGS_EXPLAIN'		=> 'Aquí podeu definir la configuració relacionada amb el procediment de registre i el perfil.',

	'ACC_ACTIVATION'			=> 'Activació de comptes',
	'ACC_ACTIVATION_EXPLAIN'	=> 'Això determina si els usuaris tenen accés immediat al fòrum o si cal una confirmació. També podeu inhabilitar completament els nous registres.',
	'ACC_ADMIN'					=> 'Per l’administrador',
	'ACC_DISABLE'				=> 'Inhabilitada',
	'ACC_NONE'					=> 'Cap',
	'ACC_USER'					=> 'Per l’usuari',
//	'ACC_USER_ADMIN'			=> 'User + Admin',
	'ALLOW_EMAIL_REUSE'			=> 'Permet la reutilització d’adreces electròniques',
	'ALLOW_EMAIL_REUSE_EXPLAIN'	=> 'Usuaris diferents poden registrar-se amb la mateixa adreça electrònica.',
	'COPPA'						=> 'COPPA',
	'COPPA_FAX'					=> 'Número de fax COPPA',
	'COPPA_MAIL'				=> 'Adreça de correu COPPA',
	'COPPA_MAIL_EXPLAIN'		=> 'Aquesta és l’adreça de correu on els pares poden enviar els formularis de registre COPPA.',
	'ENABLE_COPPA'				=> 'Habilita COPPA',
	'ENABLE_COPPA_EXPLAIN'		=> 'Això requereix als usuaris que declarin si tenen 13 anys o més per complir amb la normativa COPPA dels EUA. Si ho inhabiliteu, els grups específics COPPA ja no es mostraran.',
	'MAX_CHARS'					=> 'Màxim',
	'MIN_CHARS'					=> 'Mínim',
	'NO_AUTH_PLUGIN'			=> 'No s’ha trobat un connector auth adequat.',
	'PASSWORD_LENGTH'			=> 'Longitud de la contrasenya',
	'PASSWORD_LENGTH_EXPLAIN'	=> 'Nombre mínim i màxim de caràcters per a les contrasenyes.',
	'REG_LIMIT'					=> 'Intents de registre',
	'REG_LIMIT_EXPLAIN'			=> 'Nombre d’intents que pot fer un usuari al codi de confirmació abans de que se li bloquegi la sessió.',
	'USERNAME_ALPHA_ONLY'		=> 'Només alfanumèrics',
	'USERNAME_ALPHA_SPACERS'	=> 'Alfanumèrics i d’espaiat',
	'USERNAME_ASCII'			=> 'ASCII (sense unicode internacional)',
	'USERNAME_LETTER_NUM'		=> 'Qualsevol lletra o número',
	'USERNAME_LETTER_NUM_SPACERS'	=> 'Qualsevol lletra, número o caràcter d’espaiat',
	'USERNAME_CHARS'			=> 'Limita els caràcters als noms d’usuari',
	'USERNAME_CHARS_ANY'		=> 'Qualsevol caràcter',
	'USERNAME_CHARS_EXPLAIN'	=> 'Restringeix el tipus de caràcters que poden ser utilitzats als noms d’usuari, els caràcters d’espaiat són: l’espai, -, +, _, [ i ].',
	'USERNAME_LENGTH'			=> 'Longitud del nom d’usuari',
	'USERNAME_LENGTH_EXPLAIN'	=> 'Nombre mínim i màxim de caràcters per als noms d’usuari.',
));

// Visual Confirmation Settings
$lang = array_merge($lang, array(
	'ACP_VC_SETTINGS_EXPLAIN'		=> 'Aquí podeu definir els valors per defecte de la confirmació visual i la configuració CAPTCHA.',

	'CAPTCHA_GD'							=> 'CAPTCHA GD',
	'CAPTCHA_GD_FOREGROUND_NOISE'			=> 'CAPTCHA GD amb soroll en primer pla',
	'CAPTCHA_GD_EXPLAIN'					=> 'Utilitza la llibrería gràfica GD per fer un CAPTCHA més avançat.',
	'CAPTCHA_GD_FOREGROUND_NOISE_EXPLAIN'	=> 'Utilitza el soroll en primer pla per fer el CAPTCHA basat en GD més difícil.',
	'CAPTCHA_GD_X_GRID'						=> 'Soroll de fons segons l’eix x del CAPTCHA GD',
	'CAPTCHA_GD_X_GRID_EXPLAIN'				=> 'Utilitzeu valors baixos per fer el CAPTCHA basat en GD més difícil. Un 0 inhabilita el soroll de fons segons l’eix x.',
	'CAPTCHA_GD_Y_GRID'						=> 'Soroll de fons segons l’eix y del CAPTCHA GD',
	'CAPTCHA_GD_Y_GRID_EXPLAIN'				=> 'Utilitzeu valors baixos per fer el CAPTCHA basat en GD més difícil. Un 0 inhabilita el soroll de fons segons l’eix y.',

	'CAPTCHA_PREVIEW_MSG'					=> 'Els canvis a la configuració de la confirmació visual no s’han desat. Això és només una previsualització.',
	'CAPTCHA_PREVIEW_EXPLAIN'				=> 'Aquest és l’aspecte que tindrà el CAPTCHA si utilitzeu la configuració actual. Utilitzeu el botó de previsualització per refrescar-lo. Tingueu en compte que els CAPTCHA són aleatoris i seràn diferents d’una previsualització a una altra.',
	'VISUAL_CONFIRM_POST'					=> 'Habilita la confirmació visual per a les entrades d’usuaris visitants',
	'VISUAL_CONFIRM_POST_EXPLAIN'			=> 'Requereix als usuaris anònims que introdueixin un codi aleatori que coincideixi amb una imatge per tal de prevenir la publicació en massa d’entrades.',
	'VISUAL_CONFIRM_REG'					=> 'Habilita la confirmació visual durant el registre',
	'VISUAL_CONFIRM_REG_EXPLAIN'			=> 'Requereix als usuaris nous que introdueixin un codi aleatori que coincideixi amb una imatge per tal de prevenir el registre d’usuaris en massa.',
));

// Cookie Settings
$lang = array_merge($lang, array(
	'ACP_COOKIE_SETTINGS_EXPLAIN'		=> 'Aquests detalls defineixen les dades que s’utilitzen per enviar galetes als navegadors dels usuaris. En la majoria de casos, els valors per defecte seran suficients. Si cal que en canvieu algun, feu-ho amb compte, una configuració incorrecta pot evitar que els usuaris iniciïn la sessio.',

	'COOKIE_DOMAIN'				=> 'Domini de la galeta',
	'COOKIE_NAME'				=> 'Nom de la galeta',
	'COOKIE_PATH'				=> 'Camí de la galeta',
	'COOKIE_SECURE'				=> 'Galeta segura',
	'COOKIE_SECURE_EXPLAIN'		=> 'Si el vostre servidor s’executa sobre SSL habiliteu aquesta opció, en qualsevol altre cas deixeu-la inhabilitada. Si l’habiliteu i el servidor no s’executa sobre SSL es produiran errors del servidor durant les redireccions.',
	'ONLINE_LENGTH'				=> 'Interval de temps per a Qui està connectat',
	'ONLINE_LENGTH_EXPLAIN'		=> 'Nombre de minuts després dels quals els usuaris inactius no apareixeran a la llista “Qui està connectat”. Com més alt és aquest valor, més gran és el processament necessari per generar la llista.',
	'SESSION_LENGTH'			=> 'Durada de la sessió',
	'SESSION_LENGTH_EXPLAIN'	=> 'Les sessións venceran després d’aquest temps en segons.',
));

// Load Settings
$lang = array_merge($lang, array(
	'ACP_LOAD_SETTINGS_EXPLAIN'	=> 'Aquí podeu habilitar i inhabilitar determinades funcions del fòrum per reduir la quantitat necessària de processament. En la majoria de servidors no cal inhabilitar cap funció. No obstant, en determinats sistemes o en entorns d’allotjament compartit pot ser beneficiós inhabilitar capacitats que no necessiteu realment. També podeu especificar límits per a la càrrega del sistema i sessions actives més enllà de les quals el fòrum es quedarà fora de línia.',

	'CUSTOM_PROFILE_FIELDS'			=> 'Camps personalitzats del perfil',
	'LIMIT_LOAD'					=> 'Limita la càrrega del sistema',
	'LIMIT_LOAD_EXPLAIN'			=> 'Si la càrrega del sistema per a 1 minut sobrepassa aquest valor, el fòrum quedarà automàticament fora de línia. El valor 1.0 equival a una utilització aproximada del 100% d’un processador. Això només funciona en servidors basats en UNIX i on aquesta informació estigui accessible. Aquest valor es reinicialitza automàticament a 0 si el phpBB no es capaç d’obtenir el límit de càrrega.',
	'LIMIT_SESSIONS'				=> 'Limita les sessions',
	'LIMIT_SESSIONS_EXPLAIN'		=> 'Si el nombre de sessions sobrepassa aquest valor dintre d’un periode d’un minut, el fòrum quedarà fora de línia. Introduïu un 0 per a sessions il·limitades.',
	'LOAD_CPF_MEMBERLIST'			=> 'Permet que els estils mostrin camps personalitzats del perfil a la llista de membres',
	'LOAD_CPF_VIEWPROFILE'			=> 'Mostra els camps personalitzats del perfil als perfils d’usuari',
	'LOAD_CPF_VIEWTOPIC'			=> 'Mostra els camps personalitzats del perfil a les pàgines dels temes',
	'LOAD_USER_ACTIVITY'			=> 'Mostra l’activitat de l’usuari',
	'LOAD_USER_ACTIVITY_EXPLAIN'	=> 'Mostra els temes/fòrums actius als perfils de l’usuari i al tauler de control de l’usuari. És recomanable inhabilitar aquesta opció en fòrums amb més d’un milió d’entrades.',
	'RECOMPILE_STYLES'				=> 'Recompila els elements dels estils desactualitzats',
	'RECOMPILE_STYLES_EXPLAIN'		=> 'Comprova si hi ha elements dels estils actualitzats al sistema de fitxers i els recompila.',
	'YES_ANON_READ_MARKING'			=> 'Habilita el marcat de temes per als usuaris visitants',
	'YES_ANON_READ_MARKING_EXPLAIN'	=> 'Emmagatzema informació de l’estat llegit/no llegit per als usuaris visitants. Si l’inhabiliteu, les entrades sempre es mostren llegides als usuaris visitants.',
	'YES_BIRTHDAYS'					=> 'Habilita la llista d’aniversaris',
	'YES_BIRTHDAYS_EXPLAIN'			=> 'Si l’inhabiliteu, la llista d’aniversaris ja no es mostra. Per que aquesta configuració tingui efecte, la característica d’aniversaris també ha d’estar habilitada.',
	'YES_JUMPBOX'					=> 'Habilita el formulari “Salta a”',
	'YES_MODERATORS'				=> 'Mostra els moderadors',
	'YES_ONLINE'					=> 'Habilita la llista de qui està connectat',
	'YES_ONLINE_EXPLAIN'			=> 'Mostra informació de quins usuaris estan connectats a les pagines d’índex, fòrum i tema.',
	'YES_ONLINE_GUESTS'				=> 'Habilita el llistat d’usuaris visitants a “Qui està connectat”',
	'YES_ONLINE_GUESTS_EXPLAIN'		=> 'Permet que es mostri informació de l’usuari visitant a “Qui està connectat”.',
	'YES_ONLINE_TRACK'				=> 'Mostra si l’usuari està connectat o desconnectat',
	'YES_ONLINE_TRACK_EXPLAIN'		=> 'Mostra informació sobre l’estat de connexió per als usuaris a les pàgines del perfil i de tema.',
	'YES_POST_MARKING'				=> 'Habilita el marcat de temes',
	'YES_POST_MARKING_EXPLAIN'		=> 'Indica si un usuari ha publicat una entrada al tema.',
	'YES_READ_MARKING'				=> 'Habilita la gestió al servidor del marcat de temes',
	'YES_READ_MARKING_EXPLAIN'		=> 'Emmagatzema la informació de l’estat llegit/no llegit a la base de dades en lloc d’utilitzar una galeta.',
));

// Auth settings
$lang = array_merge($lang, array(
	'ACP_AUTH_SETTINGS_EXPLAIN'	=> 'El phpBB permet l’ús de connectors o mòduls d’autenticació. Aquests us permeten determinar com s’autentiquen els usuaris quan inicien la sessió al fòrum. Per defecte es proporcionen tres connectors; base de dades, LDAP i Apache. No tots els mètodes necessiten informació addicional, només introduïu els camps que siguin rellevants per al mètode seleccionat.',

	'AUTH_METHOD'				=> 'Seleccioneu un mètode d’autenticació',

	'APACHE_SETUP_BEFORE_USE'	=> 'Cal que configureu l’autenticació de l’Apache abans de canviar el phpBB a aquest mètode d’autenticació. Recordeu que el nom d’usuari que utilitzeu per a l’autenticació amb Apache ha de ser el mateix que el nom d’usuari al phpBB. L’autenticació amb Apache només es pot utilitzar amb mod_php (no amb una versió CGI) i safe_mode inhabilitat.',

	'LDAP_DN'						=> '<var>dn</var> de la base LDAP',
	'LDAP_DN_EXPLAIN'				=> 'Això es el “Distinguished Name”, que localitza la informació d’usuari, p.ex. <samp>o=La meva companyia,c=ES</samp>.',
	'LDAP_EMAIL'					=> 'Atribut de correu electrònic de LDAP',
	'LDAP_EMAIL_EXPLAIN'			=> 'Indiqueu el nom de la vostra entrada d’atribut de correu electrònic (si n’existeix una) per obtenir l’adreça electrònica dels usuaris nous automàticament. Si ho deixeu buit, les adreces electròniques dels usuaris que iniciïn la sessió per primera vegada estaran buides.',
	'LDAP_INCORRECT_USER_PASSWORD'	=> 'La vinculació amb el servidor LDAP amb el nom d’usuari/contrasenya especificats ha fallat.',
	'LDAP_NO_EMAIL'					=> 'L’atribut de correu electrònic especificat no existeix.',
	'LDAP_NO_IDENTITY'				=> 'No s’ha trobat una identitat d’inici de sessió per a  %s.',
	'LDAP_PASSWORD'					=> 'Contrasenya LDAP',
	'LDAP_PASSWORD_EXPLAIN'			=> 'Deixeu-la buida per utilitzar la vinculació anònima. Altrament, introduïu la contrasenya de l’usuari que hi ha a sobre. És necessària per a servidors Active Directory. <strong>AVÍS:</strong> Aquesta contrasenya s’emmagatzemarà a la base de dades com a text net i serà visible per a qualsevol que pugui accedir a la vostra base de dades o que pugui veure aquesta pàgina de configuració.',
	'LDAP_PORT'						=> 'Port del servidor LDAP',
	'LDAP_PORT_EXPLAIN'				=> 'Opcionalment, podeu especificar el port que s’ha d’utilitzar per connectar-se amb el servidor LDAP en lloc del port per defecte 389.',
	'LDAP_SERVER'					=> 'Nom del servidor LDAP',
	'LDAP_SERVER_EXPLAIN'			=> 'Si utilitzeu LDAP aquest es el nom de l’amfitrió o l’adreça IP del servidor LDAP. Alternativament, podeu especificar un URL de l’estil ldap://hostname:port/',
	'LDAP_UID'						=> '<var>uid</var> LDAP',
	'LDAP_UID_EXPLAIN'				=> 'Aquesta és la clau sota la qual es cerca una identitat d’inici de sessió determinada, p.ex. <var>uid</var>, <var>sn</var>, etc.',
	'LDAP_USER'						=> '<var>dn</var> d’usuari LDAP',
	'LDAP_USER_EXPLAIN'				=> 'Deixeu-lo buit per utilitzar la vinculació anònima. Si l’introduïu, el phpBB utilitza el distinguished name en els intents d’inici de sessió per trobar l’usuari correcte, p.ex. <samp>uid=Usuari,ou=Unitat,o=Companyia,c=ES</samp>. És necessari per a servidors Active Directory.',
	'LDAP_USER_FILTER'				=> 'Filtre d’usuaris LDAP',
	'LDAP_USER_FILTER_EXPLAIN'		=> 'Opcionalment, podeu limitar encara més els objectes cercats amb filtres addicionals. Per exemple <samp>objectClass=posixGroup</samp> tindria com a resultat l’ús de <samp>(&amp;(uid=$usuari)(objectClass=posixGroup))</samp>',
));

// Server Settings
$lang = array_merge($lang, array(
	'ACP_SERVER_SETTINGS_EXPLAIN'	=> 'Aquí podeu definir configuracions que depenen del servidor i del domini. Assegureu-vos que les dades que introduïu són correctes, si hi ha errors els correus electrònics que s’enviïn des del fòrum contindran informació incorrecta. Quan introduïu el nom de domini recordeu-vos d’incloure http:// o el protocol adequat. Modifiqueu el número de port només si sabeu que el servidor utilitza un valor diferent, el port 80 és correcte en la majoria de casos.',

	'ENABLE_GZIP'				=> 'Habilita la compressió gzip',
	'ENABLE_GZIP_EXPLAIN'		=> 'Es comprimirà el contingut generat abans d’enviar-lo a l’usuari. Això pot reduir el trànsit de la xarxa però augmentarà l’ús de la CPU tant en el servidor com en el client.',
	'FORCE_SERVER_VARS'			=> 'Força la configuració de l’URL del servidor',
	'FORCE_SERVER_VARS_EXPLAIN'	=> 'Si l’habiliteu, s’utilitzarà la configuració del servidor definida aquí en lloc dels valors determinats automàticament.',
	'ICONS_PATH'				=> 'Camí d’emmagatzemament de les icones per a les entrades',
	'ICONS_PATH_EXPLAIN'		=> 'Camí a partir del directori arrel del phpBB, p.ex. <samp>images/icons</samp>.',
	'PATH_SETTINGS'				=> 'Configuració dels camins',
	'RANKS_PATH'				=> 'Camí d’emmagatzemament de les imatges de rang',
	'RANKS_PATH_EXPLAIN'		=> 'Camí a partir del directori arrel del phpBB, p.ex. <samp>images/ranks</samp>.',
	'SCRIPT_PATH'				=> 'Camí de l’script',
	'SCRIPT_PATH_EXPLAIN'		=> 'Camí on es troba el phpBB respecte al nom de domini, p.ex. <samp>/phpBB3</samp>.',
	'SERVER_NAME'				=> 'Nom de domini',
	'SERVER_NAME_EXPLAIN'		=> 'El nom de domini en el qual s’executa aquest servidor (per exemple: <samp>www.exemple.cat</samp>).',
	'SERVER_PORT'				=> 'Port del servidor',
	'SERVER_PORT_EXPLAIN'		=> 'El port en que s’executa el servidor, normalment el 80, canvieu-lo només si és diferent.',
	'SERVER_PROTOCOL'			=> 'Protocol del servidor',
	'SERVER_PROTOCOL_EXPLAIN'	=> 'S’utilitza com a protocol del servidor si es força aquesta configuració. Si està buit o no es força la configuració, el protocol es determina per la configuració de galeta segura (<samp>http://</samp> o <samp>https://</samp>).',
	'SERVER_URL_SETTINGS'		=> 'Configuració de l’URL del servidor',
	'SMILIES_PATH'				=> 'Camí d’emmagatzemament de les emoticones',
	'SMILIES_PATH_EXPLAIN'		=> 'Camí a partir del directori arrel del phpBB, p.ex. <samp>images/smilies</samp>.',
	'UPLOAD_ICONS_PATH'			=> 'Camí d’emmagatzemament de les icones dels grups d’extensions',
	'UPLOAD_ICONS_PATH_EXPLAIN'	=> 'Camí a partir del directori arrel del phpBB, p.ex. <samp>images/upload_icons</samp>.',
));

// Security Settings
$lang = array_merge($lang, array(
	'ACP_SECURITY_SETTINGS_EXPLAIN'		=> 'Aquí podeu definir les configuracions relacionades amb les session i l’inici de sessions.',

	'ALL'							=> 'Tota',
	'ALLOW_AUTOLOGIN'				=> 'Permet l’inici de sessió persistent',
	'ALLOW_AUTOLOGIN_EXPLAIN'		=> 'Determina si els usuaris poden iniciar la sessió automàticament quan visiten el fòrum.',
	'AUTOLOGIN_LENGTH'				=> 'Durada de la clau d’inici de sessió persistent (en dies)',
	'AUTOLOGIN_LENGTH_EXPLAIN'		=> 'Nombre de dies després dels quals s’eliminen les claus d’inici de sessió persistent. Introduïu un zero per inhabilitar-ho.',
	'BROWSER_VALID'					=> 'Validació del navegador',
	'BROWSER_VALID_EXPLAIN'			=> 'Habilita la validació del navegador per cada sessió per millorar la seguretat.',
	'CHECK_DNSBL'					=> 'Comprova l’adreça IP contra la llista DNS Blackhole List',
	'CHECK_DNSBL_EXPLAIN'			=> 'Si l’habiliteu, l’adreça IP de l’usuari es comprova contra els serveis DNSBL següents per registrar-se i publicar entrades: <a href="http://spamcop.net">spamcop.net</a> i <a href="http://www.spamhaus.org">www.spamhaus.org</a>. Aquesta cerca pot trigar una estona, depenent de la configuració del servidor. Si experimenteu lentitud en l’operació o massa falsos positius, us recomanem que inhabiliteu aquesta opció.',
	'CLASS_B'						=> 'A.B',
	'CLASS_C'						=> 'A.B.C',
	'EMAIL_CHECK_MX'				=> 'Comprova si el domini de l’adreça electrònica té un registre MX vàlid',
	'EMAIL_CHECK_MX_EXPLAIN'		=> 'Si l’habiliteu, el domini de l’adreça electrònica proporcionada durant el registre i els canvis en el perfil es comprova per veure si té un registre MX vàlid.',
	'FORCE_PASS_CHANGE'				=> 'Força el canvi de contrasenya',
	'FORCE_PASS_CHANGE_EXPLAIN'		=> 'Obliga els usuaris a canviar la seva contrasenya després d’un nombre determinat de dies. Si introduïu un 0 s’inhabilita aquest comportament.',
	'FORM_TIME_MAX'					=> 'Temps màxim per trametre formularis',
	'FORM_TIME_MAX_EXPLAIN'			=> 'El temps que te un usuari per trametre un formulari. Utilitzeu un -1 per inhabilitar-ho. Tingueu en compte que un formulari pot esdevenir no vàlid si venç la sessió, sense tenir en compte aquesta configuració.',
	'FORM_SID_GUESTS'				=> 'Vincula els formularis a les sessions dels usuaris visitants',
	'FORM_SID_GUESTS_EXPLAIN'		=> 'Si s’habilita, el testimoni proporcionat als usuaris visitants serà exclusiu per a cada sessió. Això pot causar problemes amb alguns proveïdors d’Internet.',
	'FORWARDED_FOR_VALID'			=> 'Capçalera <var>X_FORWARDED_FOR</var> validada',
	'FORWARDED_FOR_VALID_EXPLAIN'	=> 'Es continuarà la sessió si la capçalera <var>X_FORWARDED_FOR</var> enviada és igual a la capçalera enviada a la sol·licitud anterior. També es comprovaran els bandejos contra direccions IP a <var>X_FORWARDED_FOR</var>.',
	'IP_VALID'						=> 'Validació de sessió per adreça IP',
	'IP_VALID_EXPLAIN'				=> 'Determina quina part de l’adreça IP de l’usuari s’utilitza per validar una sessió; <samp>Tota</samp> compara l’adreça completa, <samp>A.B.C</samp> els primers x.x.x, <samp>A.B</samp> els primers x.x, <samp>Cap</samp> inhabilita la comparació. En adreces IPv6, <samp>A.B.C</samp> compara els 4 primers blocs i <samp>A.B</samp> els 3 primers blocs.',
	'MAX_LOGIN_ATTEMPTS'			=> 'Nombre màxim d’intents d’inici de sessió',
	'MAX_LOGIN_ATTEMPTS_EXPLAIN'	=> 'Després d’aquest nombre d’intents d’inici de sessió incorrectes l’usuari ha de confirmar addicionalment el seu inici de sessió visualment (confirmació visual).',
	'NO_IP_VALIDATION'				=> 'Cap',
	'NO_REF_VALIDATION'				=> 'Cap',
	'PASSWORD_TYPE'					=> 'Complexitat de la contrasenya',
	'PASSWORD_TYPE_EXPLAIN'			=> 'Determina com de complexa ha de ser una contrasenya en proporcionar-la o modificar-la, les opcións subsegüents inclouen les anteriors.',
	'PASS_TYPE_ALPHA'				=> 'Ha de contenir lletres i números',
	'PASS_TYPE_ANY'					=> 'Sense requisits',
	'PASS_TYPE_CASE'				=> 'Ha de contenir majúscules i minúscules',
	'PASS_TYPE_SYMBOL'				=> 'Ha de contenir símbols',
	'REF_HOST'						=> 'Valida només l’amfitrió',
	'REF_PATH'						=> 'Valida també el camí',
	'REFERER_VALID'					=> 'Valida la pàgina d’origen',
	'REFERER_VALID_EXPLAIN'			=> 'Si l’habiliteu, es comprovarà la pàgina des de la qual es fan les peticions POST segons la configuració d’amfitrió/camí. Això pot donar problemes amb fòrums que utilitzin diversos dominis i/o un inici de sessió extern.',
	'TPL_ALLOW_PHP'					=> 'Permet el php a les plantilles',
	'TPL_ALLOW_PHP_EXPLAIN'			=> 'Si s’habilita aquesta opció, les sentències <code>PHP</code> i <code>INCLUDEPHP</code> a les plantilles es reconeixeran i s’analitzaran.',
));

// Email Settings
$lang = array_merge($lang, array(
	'ACP_EMAIL_SETTINGS_EXPLAIN'	=> 'Aquesta informació s’utilitza quan el fòrum envia correus electrònics als usuaris. Assegureu-vos de que l’adreça electrònica que especifiqueu és vàlida, els missatges retornats o impossibles de lliurar s’enviaran probablement a aquesta adreça. Si el vostre amfitrió no us proporciona un servei de correu electrònic nadiu (basat en PHP), podeu enviar missatges directament utilitzant SMTP. Per això us cal l’adreça d’un servidor adequat (si cal, demaneu-la al vostre proveïdor). Si el servidor requereix autenticació (i només si la requereix) introduïu el nom d’usuari necessari, la contrasenya i el mètode d’autenticació.',

	'ADMIN_EMAIL'					=> 'Adreça electrònica de resposta',
	'ADMIN_EMAIL_EXPLAIN'			=> 'S’utilitzarà com a adreça electrònica de resposta en tots els correus electrònics, l’adreça electrònica de contacte tècnic. S’utilitzarà sempre com a adreça en els camps <samp>Return-Path</samp> i <samp>Sender</samp> dels correus electrònics.',
	'BOARD_EMAIL_FORM'				=> 'Els usuaris envien correus electrònics a través del fòrum',
	'BOARD_EMAIL_FORM_EXPLAIN'		=> 'En lloc de mostrar les adreces electròniques dels usuaris, els usuaris poden enviar-se correus electrònics a través del fòrum.',
	'BOARD_HIDE_EMAILS'				=> 'Oculta les adreces electròniques',
	'BOARD_HIDE_EMAILS_EXPLAIN'		=> 'Aquesta funció manté les adreces electròniques completament privades.',
	'CONTACT_EMAIL'					=> 'Adreça electrònica de contacte',
	'CONTACT_EMAIL_EXPLAIN'			=> 'S’utilitzarà aquesta adreça quan es necessiti un punt de contacte específic, p.ex. correu brossa, errors, etc. S’utilitzarà sempre com a adreça en els camps <samp>From</samp> i <samp>Reply-To</samp> dels correus electrònics.',
	'EMAIL_FUNCTION_NAME'			=> 'Nom de la funció de correu electrònic',
	'EMAIL_FUNCTION_NAME_EXPLAIN'	=> 'La funció utilitzada per enviar correus electrònics a través del PHP.',
	'EMAIL_PACKAGE_SIZE'			=> 'Mida dels paquets de correu electrònic',
	'EMAIL_PACKAGE_SIZE_EXPLAIN'	=> 'És el nombre màxim de correus electrònics que s’envien en un paquet. Aquesta configuració s’aplica a la cua interna de missatges; utilitzeu un 0 si teniu problemes amb correus de notificació que no s’han pogut lliurar.',
	'EMAIL_SIG'						=> 'Signatura per als correus electrònics',
	'EMAIL_SIG_EXPLAIN'				=> 'Aquest text s’adjuntarà a tots els correus electrònics que enviï el fòrum.',
	'ENABLE_EMAIL'					=> 'Habilita els correus electrònics del fòrum',
	'ENABLE_EMAIL_EXPLAIN'			=> 'Si s’inhabilita, el fòrum no enviarà cap correu electrònic.',
	'SMTP_AUTH_METHOD'				=> 'Mètode d’autenticació SMTP',
	'SMTP_AUTH_METHOD_EXPLAIN'		=> 'Només s’utilitza si s’ha introduït un nom d’usuari i contrasenya, pregunteu al vostre proveïdor si no esteu segur de quin mètode utilitzar.',
	'SMTP_CRAM_MD5'					=> 'CRAM-MD5',
	'SMTP_DIGEST_MD5'				=> 'DIGEST-MD5',
	'SMTP_LOGIN'					=> 'LOGIN',
	'SMTP_PASSWORD'					=> 'Contrasenya SMTP',
	'SMTP_PASSWORD_EXPLAIN'			=> 'Introduïu la contrasenya només si el servidor la requereix.',
	'SMTP_PLAIN'					=> 'PLAIN',
	'SMTP_POP_BEFORE_SMTP'			=> 'POP-BEFORE-SMTP',
	'SMTP_PORT'						=> 'Port del servidor SMTP',
	'SMTP_PORT_EXPLAIN'				=> 'Canvieu-lo només si sabeu que el servidor SMTP utilitza un port diferent.',
	'SMTP_SERVER'					=> 'Adreça del servidor SMTP',
	'SMTP_SETTINGS'					=> 'Configuració SMTP',
	'SMTP_USERNAME'					=> 'Nom d’usuari SMTP',
	'SMTP_USERNAME_EXPLAIN'			=> 'Introduïu el nom d’usuari només si el servidor el requereix.',
	'USE_SMTP'						=> 'Utilitza el servidor SMTP per al correu electrònic',
	'USE_SMTP_EXPLAIN'				=> 'Seleccioneu “Sí” si voleu o heu d’enviar els correus electrònics a través d’un servidor en lloc de la funcio de correu local.',
));

// Jabber settings
$lang = array_merge($lang, array(
	'ACP_JABBER_SETTINGS_EXPLAIN'	=> 'Aquí podeu habilitar i controlar l’ús del Jabber per a missatgeria instantània i notificacions del fòrum. El Jabber és un protocol de codi font obert i, per tant, disponible per ser utilitzat per qualsevol. Alguns servidors de Jabber inclouen pasarel·les o transports que us permeten contactar amb usuaris d’altres xarxes. No tots els servidors ofereixen tots els transports i canvis en els protocols poden causar que el transport no funcioni. Assegureu-vos d’introduir detalls pertanyents a un compte que ja s’hagi registrat - el phpBB utilitzarà els detalls que introduïu tal com estan aquí.',

	'JAB_ENABLE'				=> 'Habilita el Jabber',
	'JAB_ENABLE_EXPLAIN'		=> 'Habilita l’ús de la missatgeria i les notificacions Jabber.',
	'JAB_GTALK_NOTE'			=> 'Tingueu en compte que el GTalk no funcionarà perquè no s’ha trobat la funció <samp>dns_get_record</samp>. Aquesta funció no està disponible al PHP4, i no està implementada a les plataformes Windows. Actualment no funciona en els sistemes basats en BSD, Mac OS inclòs.',
	'JAB_PACKAGE_SIZE'			=> 'Mida dels paquets Jabber',
	'JAB_PACKAGE_SIZE_EXPLAIN'	=> 'És el nombre de missatges enviats en un paquet. Si introduïu un 0 el missatge s’envia immediatament i no es ficarà en una cua per enviar-lo més tard.',
	'JAB_PASSWORD'				=> 'Contrasenya Jabber',
	'JAB_PORT'					=> 'Port Jabber',
	'JAB_PORT_EXPLAIN'			=> 'Deixeu-lo buit a no ser que sabeu que no és el port 5222.',
	'JAB_SERVER'				=> 'Servidor Jabber',
	'JAB_SERVER_EXPLAIN'		=> 'Vegeu %sjabber.org%s per obtenir una llista de servidors.',
	'JAB_SETTINGS_CHANGED'		=> 'S’ha canviat la configuració del Jabber correctament.',
	'JAB_USE_SSL'				=> 'Utilitza SSL per connectar-te',
	'JAB_USE_SSL_EXPLAIN'		=> 'Si l’habiliteu, s’intentarà establir una connexió segura. El port Jabber es modificarà a 5223 si s’especifica el port 5222.',
	'JAB_USERNAME'				=> 'Nom d’usuari Jabber o JID',
	'JAB_USERNAME_EXPLAIN'		=> 'Especifiqueu un nom d’usuari registrat o un JID vàlid. No es comprovarà que el nom d’usuari sigui vàlid. Si només eswpecifiqueu un nom d’usuari, el vostre JID serà el nom d’usuari i el servidor el que s’ha especificat a sobre. Altrament, especifiqueu un JID vàlid, per exemple usuari@jabber.org.',
));

?>