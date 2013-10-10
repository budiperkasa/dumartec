<?php
/** 
*
* posting [Catalan]
*
* @package language
* @version $Id: posting.php,v 1.64 2007/05/17 14:58:40 acydburn Exp $
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

$lang = array_merge($lang, array(
	'ADD_ATTACHMENT'			=> 'Penja un fitxer adjunt',
	'ADD_ATTACHMENT_EXPLAIN'	=> 'Si voleu adjuntar un o més fitxers, introduïu els detalls a continuació.',
	'ADD_FILE'					=> 'Afegeix el fitxer',
	'ADD_POLL'					=> 'Creació d’una enquesta',
	'ADD_POLL_EXPLAIN'			=> 'Si no voleu afegir una enquesta al tema, deixeu els camps en blanc.',
	'ALREADY_DELETED'			=> 'Aquest missatge ja ha estat eliminat.',
	'ATTACH_QUOTA_REACHED'		=> 'S’ha arribat al límit de fitxers adjunts del fòrum.',
	'ATTACH_SIG'				=> 'Inclou la signatura (les signatures es poden canviar a través del TCU)',

	'BBCODE_A_HELP'				=> 'Fitxer adjunt en línia: [attachment=]nomfitxer.ext[/attachment]',
	'BBCODE_B_HELP'				=> 'Text en negreta: [b]text[/b]',
	'BBCODE_C_HELP'				=> 'Visualització de codi: [code]codi[/code]',
	'BBCODE_E_HELP'				=> 'Llista: Afegeix un element a la llista',
	'BBCODE_F_HELP'				=> 'Mida de la lletra: [size=85]text petit[/size]',
	'BBCODE_IS_OFF'				=> 'El %sBBCode%s està <em>INACTIU</em>',
	'BBCODE_IS_ON'				=> 'El %sBBCode%s està <em>ACTIU</em>',
	'BBCODE_I_HELP'				=> 'Text en cursiva: [i]text[/i]',
	'BBCODE_L_HELP'				=> 'Llista: [list]text[/list]',
	'BBCODE_LISTITEM_HELP'		=> 'Element de la llista: [*]text[/*]',
	'BBCODE_O_HELP'				=> 'Llista ordenada: [list=]text[/list]',
	'BBCODE_P_HELP'				=> 'Insereix una imatge: [img]http://url_imatge[/img]',
	'BBCODE_Q_HELP'				=> 'Cita un text: [quote]text[/quote]',
	'BBCODE_S_HELP'				=> 'Color de lletra: [color=red]text[/color]  Consell: també podeu utilitzar color=#FF0000',
	'BBCODE_U_HELP'				=> 'Text subratllat: [u]text[/u]',
	'BBCODE_W_HELP'				=> 'Insereix una URL: [url]http://url[/url] o [url=http://url]text de l’URL[/url]',
	'BBCODE_D_HELP'				=> 'Flash: [flash=amplària,alçària]http://url[/flash]',
	'BUMP_ERROR'				=> 'No podeu reactivar aquest tema tan aviat després de la darrera entrada.',

	'CANNOT_DELETE_REPLIED'		=> 'Només podeu eliminar entrades a les quals encara no s’ha respost.',
	'CANNOT_EDIT_POST_LOCKED'	=> 'Aquesta entrada ha estat bloquejada. Ja no podeu editar-la.',
	'CANNOT_EDIT_TIME'			=> 'Ja no podeu editar o eliminar aquesta entrada.',
	'CANNOT_POST_ANNOUNCE'		=> 'No podeu publicar avisos.',
	'CANNOT_POST_STICKY'		=> 'No podeu publicar temes recurrents.',
	'CHANGE_TOPIC_TO'			=> 'Canvia el tipus del tema a',
	'CLOSE_TAGS'				=> 'Tanca les etiquetes',
	'CURRENT_TOPIC'				=> 'Tema actual',

	'DELETE_FILE'				=> 'Elimina el fitxer',
	'DELETE_MESSAGE'			=> 'Elimina el missatge',
	'DELETE_MESSAGE_CONFIRM'	=> 'Esteu segur que voleu eliminar aquest missatge?',
	'DELETE_OWN_POSTS'			=> 'Només podeu eliminar les vostres entrades.',
	'DELETE_POST_CONFIRM'		=> 'Esteu segur que voleu eliminar aquesta entrada?',
	'DELETE_POST_WARN'			=> 'Un cop eliminada, l’entrada ja no es pot restablir',
	'DISABLE_BBCODE'			=> 'Desactiva el BBCode',
	'DISABLE_MAGIC_URL'			=> 'No transformis automàticament els URLs',
	'DISABLE_SMILIES'			=> 'Desactiva les emoticones',
	'DISALLOWED_CONTENT'		=> 'El fitxer a penjar ha estat rebutjat perquè s’ha identificat com un possible vector d’atac.',
	'DISALLOWED_EXTENSION'		=> 'L’extensió %s no està permesa.',
	'DRAFT_LOADED'				=> 'L’esborrany s’ha carregat a l’àrea d’entrades. Si ho desitgeu, ara podeu acabar l’entrada.<br />L’esborrany s’eliminarà després d’enviar l’entrada.',
	'DRAFT_LOADED_PM'			=> 'L’esborrany s’ha carregat a l’àrea de missatges privats. Si ho desitgeu, ara podeu acabar el missatge privat.<br />L’esborrany s’eliminarà després d’enviar el missatge privat.',
	'DRAFT_SAVED'				=> 'L’esborrany s’ha desat correctament.',
	'DRAFT_TITLE'				=> 'Títol de l’esborrany',

	'EDIT_REASON'				=> 'Raó per editar aquest entrada',
	'EMPTY_FILEUPLOAD'			=> 'El fitxer penjat és buit.',
	'EMPTY_MESSAGE'				=> 'Heu d’introduir un missatge quan envieu una entrada.',
	'EMPTY_REMOTE_DATA'			=> 'No s’ha pogut penjar el fitxer, si us plau proveu de penjar el fitxer manualment.',

	'FLASH_IS_OFF'				=> '[flash] està <em>INACTIU</em>',
	'FLASH_IS_ON'				=> '[flash] està <em>ACTIU</em>',
	'FLOOD_ERROR'				=> 'No podeu publicar una altra entrada en tan poc temps després de l’anterior.',
	'FONT_COLOR'				=> 'Color de lletra',
	'FONT_COLOR_HIDE'			=> 'Oculta el color de lletra',
	'FONT_HUGE'					=> 'Enorme',
	'FONT_LARGE'				=> 'Gran',
	'FONT_NORMAL'				=> 'Normal',
	'FONT_SIZE'					=> 'Mida de la lletra',
	'FONT_SMALL'				=> 'Petita',
	'FONT_TINY'					=> 'Minúscula',

	'GENERAL_UPLOAD_ERROR'		=> 'No s’ha pogut penjar el fitxer adjunt a  %s.',

	'IMAGES_ARE_OFF'			=> '[img] està <em>INACTIU</em>',
	'IMAGES_ARE_ON'				=> '[img] està <em>ACTIU</em>',
	'INVALID_FILENAME'			=> '%s és un nom de fitxer no vàlid.',

	'LOAD'						=> 'Carrega',
	'LOAD_DRAFT'				=> 'Carrega l’esborrany',
	'LOAD_DRAFT_EXPLAIN'		=> 'Aquí podeu seleccionar un esborrany que volgueu continuar escrivint. L’entrada actual es cancel·larà, el contingut de l’entrada actual s’eliminarà. Podeu visualitzar, editar i eliminar esborranys al vostre Tauler de control de l’usuari.',
	'LOGIN_EXPLAIN_BUMP'		=> 'Cal que inicieu la sessió per poder reactivar temes en aquest fòrum.',
	'LOGIN_EXPLAIN_DELETE'		=> 'Cal que inicieu la sessió per poder eliminar entrades en aquest fòrum.',
	'LOGIN_EXPLAIN_POST'		=> 'Cal que inicieu la sessió per poder publicar entrades en aquest fòrum.',
	'LOGIN_EXPLAIN_QUOTE'		=> 'Cal que inicieu la sessió per poder citar entrades en aquest fòrum.',
	'LOGIN_EXPLAIN_REPLY'		=> 'Cal que inicieu la sessió per poder publicar respostes en aquest fòrum.',

	'MAX_FONT_SIZE_EXCEEDED'	=> 'Podeu utilitzar lletres de mida %1$d com a màxim.',
	'MAX_FLASH_HEIGHT_EXCEEDED'	=> 'Els fitxers flash poden tenir un màxim de %1$d píxels d’alçària.',
	'MAX_FLASH_WIDTH_EXCEEDED'	=> 'Els fitxers flash poden tenir un màxim de %1$d píxels d’amplària.',
	'MAX_IMG_HEIGHT_EXCEEDED'	=> 'Les imatges poden tenir un màxim de %1$d píxels d’alçària.',
	'MAX_IMG_WIDTH_EXCEEDED'	=> 'Les imatges poden tenir un màxim de %1$d píxels d’amplària.',

	'MESSAGE_BODY_EXPLAIN'		=> 'Introduïu el vostre missatge aquí, no pot contenir més de <strong>%d</strong> caràcters.',
	'MESSAGE_DELETED'			=> 'Aquest missatge s’ha eliminat correctament.',
	'MORE_SMILIES'				=> 'Mostra més emoticones',

	'NOTIFY_REPLY'				=> 'Avisa’m quan s’envïi una resposta',
	'NOT_UPLOADED'				=> 'No s’ha pogut penjar el fitxer.',
	'NO_DELETE_POLL_OPTIONS'	=> 'No podeu eliminar les opcions de l’enquesta que ja existeixen.',
	'NO_PM_ICON'				=> 'Sense icona MP',
	'NO_POLL_TITLE'				=> 'Cal que introduïu un títol per a l’enquesta.',
	'NO_POST'					=> 'L’entrada sol·licitada no existeix.',
	'NO_POST_MODE'				=> 'No s’ha especificat mode de l’entrada.',

	'PARTIAL_UPLOAD'			=> 'El fitxer penjat només s’ha transmès parcialment.',
	'PHP_SIZE_NA'				=> 'La mida del fitxer adjunt és massa gran.<br />No s’ha pogut determinar la mida màxima definida pel PHP a php.ini.',
	'PHP_SIZE_OVERRUN'			=> 'La mida del fitxer adjunt és massa gran, la mida màxima de les penjades és %d MB.<br />Si us plau, tingueu en compte que això es defineix al fitxer php.ini i no es pot sobreescriure.',
	'PLACE_INLINE'				=> 'Situa’l en línia',
	'POLL_DELETE'				=> 'Elimina l’enquesta',
	'POLL_FOR'					=> 'Durada de l’enquesta',
	'POLL_FOR_EXPLAIN'			=> 'Introduïu un 0 o deixeu-lo en blanc per que l’enquesta no acabi mai.',
	'POLL_MAX_OPTIONS'			=> 'Opcions per usuari',
	'POLL_MAX_OPTIONS_EXPLAIN'	=> 'Nombre d’opcions que cada usuari pot seleccionar quan vota.',
	'POLL_OPTIONS'				=> 'Opcions de l’enquesta',
	'POLL_OPTIONS_EXPLAIN'		=> 'Situeu cada opció en una línia nova. Podeu introduir fins a <strong>%d</strong> opcions.',
	'POLL_OPTIONS_EDIT_EXPLAIN'	=> 'Situeu cada opció en una línia nova. Podeu introduir fins a <strong>%d</strong> opcions. Si elimineu o afegiu opcions els vots existents es reinicialitzaran.',
	'POLL_QUESTION'				=> 'Pregunta de l’enquesta',
	'POLL_TITLE_TOO_LONG'		=> 'El títol de l’enquesta ha de tenir menys de 100 caràcters.',
	'POLL_TITLE_COMP_TOO_LONG'	=> 'El títol de l’enquesta és massa gran, proveu de treure BBCodes o emoticones.',
	'POLL_VOTE_CHANGE'			=> 'Permet el canvi de vot',
	'POLL_VOTE_CHANGE_EXPLAIN'	=> 'Si l’activeu, els usuaris poden canviar el seu vot.',
	'POSTED_ATTACHMENTS'		=> 'Fitxers adjunts enviats',
	'POST_APPROVAL_NOTIFY'		=> 'Rebreu un avís quan l’entrada hagi estat aprovada.',
	'POST_CONFIRMATION'			=> 'Confirmació de l’entrada',
	'POST_CONFIRM_EXPLAIN'		=> 'Per tal de prevenir entrades automàtiques cal que introduïu un codi de confirmació. El codi es mostra en la imatge que veieu a sota. Si teniu problemes de visió o per alguna raó no podeu llegir aquest codi, si us plau poseu-vos en contacte amb l’%sadministrador del fòrum%s.',
	'POST_DELETED'				=> 'S’ha eliminat aquesta entrada correctament.',
	'POST_EDITED'				=> 'S’ha editat aquesta entrada correctament.',
	'POST_EDITED_MOD'			=> 'S’ha editat aquesta entrada correctament però cal que l’aprovi un moderador abans que sigui visible públicament.',
	'POST_GLOBAL'				=> 'Global',
	'POST_ICON'					=> 'Icona de l’entrada',
	'POST_NORMAL'				=> 'Normal',
	'POST_REVIEW'				=> 'Revisió de l’entrada',
	'POST_REVIEW_EXPLAIN'		=> 'S’ha publicat com a mínim una entrada nova en aquest tema. És posible que degut a això volgueu revisar la vostra entrada.',
	'POST_STORED'				=> 'S’ha publicat aquesta entrada correctament.',
	'POST_STORED_MOD'			=> 'S’ha publicat aquesta entrada correctament però cal que l’aprovi un moderador abans que sigui visible públicament.',
	'POST_TOPIC_AS'				=> 'Publica el tema com',
	'PROGRESS_BAR'				=> 'Barra de progrés',

	'QUOTE_DEPTH_EXCEEDED'		=> 'Només podeu incrustar %1$d nivells de citacions.',

	'SAVE'						=> 'Desa',
	'SAVE_DATE'					=> 'Desa a',
	'SAVE_DRAFT'				=> 'Desa un esborrany',
	'SAVE_DRAFT_CONFIRM'		=> 'Tingueu en compte que els esborranys només inclouen l’assumpte i el missatge, qualsevol altre element serà eliminat. Voleu desar l’esborrany ara?',
	'SMILIES'					=> 'Emoticones',
	'SMILIES_ARE_OFF'			=> 'Les emoticones estan <em>INACTIVES</em>',
	'SMILIES_ARE_ON'			=> 'Les emoticones estan <em>ACTIVES</em>',
	'STICKY_ANNOUNCE_TIME_LIMIT'=> 'Límit de temps del Tema recurrent/Avís',
	'STICK_TOPIC_FOR'			=> 'Mostra’l com a Tema recurrent durant',
	'STICK_TOPIC_FOR_EXPLAIN'	=> 'Introduïu un 0 o deixeu-lo en blanc per que sigui un Tema recurrent/Avís per sempre.',
	'STYLES_TIP'				=> 'Consell: Podeu aplicar estils ràpidament al text seleccionat.',

	'TOO_FEW_CHARS'				=> 'El vostre missatge té massa pocs caràcters.',
	'TOO_FEW_POLL_OPTIONS'		=> 'Com a mínim heu d’introduir dues opcions a l’enquesta.',
	'TOO_MANY_ATTACHMENTS'		=> 'No podeu afegir un altre fitxer adjunt, el màxim és %d.',
	'TOO_MANY_CHARS'			=> 'El vostre missatge té massa caràcters.',
	'TOO_MANY_CHARS_POST'		=> 'El vostre missatge conté %1$d caràcters. El nombre màxim de caràcters permesos és %2$d.',
	'TOO_MANY_CHARS_SIG'		=> 'La vostra signatura conté %1$d caràcters. El nombre màxim de caràcters permesos és %2$d.',
	'TOO_MANY_POLL_OPTIONS'		=> 'Heu introduït massa opcions a l’enquesta.',
	'TOO_MANY_SMILIES'			=> 'El vostre missatge té massa emoticones. El nombre màxim d’emoticones permeses és %d.',
	'TOO_MANY_URLS'				=> 'El vostre missatge té massa URL. El nombre màxim d’URL permeses és %d.',
	'TOO_MANY_USER_OPTIONS'		=> 'No podeu especificar més opcions per usuari de les que té l’enquesta.',
	'TOPIC_BUMPED'				=> 'S’ha reactivat el tema correctament.',

	'UNAUTHORISED_BBCODE'		=> 'No podeu utilitzar determinats BBCodes: %s.',
	'UNGLOBALISE_EXPLAIN'		=> 'Per canviar aquest tema de global a normal cal que seleccioneu el fòrum en el qual voleu que es mostri.',
	'UPDATE_COMMENT'			=> 'Actualitza el comentari',
	'URL_INVALID'				=> 'L’URL que heu especificat no és vàlida.',
	'URL_NOT_FOUND'				=> 'El fitxer que heu especificat no és vàlid.',
	'URL_IS_OFF'				=> '[url] està <em>INACTIU</em>',
	'URL_IS_ON'					=> '[url] està <em>ACTIU</em>',
	'USER_CANNOT_BUMP'			=> 'No podeu reactivar temes en aquest fòrum.',
	'USER_CANNOT_DELETE'		=> 'No podeu eliminar entrades en aquest fòrum.',
	'USER_CANNOT_EDIT'			=> 'No podeu editar entrades en aquest fòrum.',
	'USER_CANNOT_REPLY'			=> 'No podeu repondre en aquest fòrum.',
	'USER_CANNOT_FORUM_POST'	=> 'No podeu fer operacions d’enviament en aquest fòrum degut a que el tipus de fòrum no ho permet.',

	'VIEW_MESSAGE'				=> '%sMostra els missatges que heu enviat%s',
	'VIEW_PRIVATE_MESSAGE'		=> '%sMostra els missatges privats que heu enviat%s',

	'WRONG_FILESIZE'			=> 'El fitxer és massa gran, la mida màxima permesa és %1d %2s.',
	'WRONG_SIZE'				=> 'La imatge ha de tenir com a mínim %1$d píxels d’amplària, %2$d píxels d’alçària i com a màxim %3$d píxels d’amplària i %4$d píxels d’alçària. La imatge que heu tramès té %5$d píxels d’amplària i %6$d píxels d’alçària.',
));

?>