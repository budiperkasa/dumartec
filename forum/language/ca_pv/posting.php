<?php
/**
*
* posting [Catalan (Valencian)]
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

$lang = array_merge($lang, array(
	'ADD_ATTACHMENT'			=> 'Fitxers adjunts',
	'ADD_ATTACHMENT_EXPLAIN'	=> 'Si voleu carregar un o més fitxers, ompliu els camps següents.',
	'ADD_FILE'					=> 'Afegeix el fitxer',
	'ADD_POLL'					=> 'Crea una enquesta',
	'ADD_POLL_EXPLAIN'			=> 'Si no voleu afegir una enquesta al tema, deixeu els camps buits.',
	'ALREADY_DELETED'			=> 'Aquest missatge s\'ha esborrat.',
	'ATTACH_QUOTA_REACHED'		=> 'S\'ha superat el límit d\'espai al servidor.',
	'ATTACH_SIG'				=> 'Adjunta signatura (la signatura es pot canviar al tauler de control de l\'usuari)',

	'BBCODE_A_HELP'				=> 'Adjunt ja carregat: [attachment=]nomdelfitxer.ext[/attachment]',
	'BBCODE_B_HELP'				=> 'Negreta: [b]text[/b]',
	'BBCODE_C_HELP'				=> 'Codi: [code]codi[/code]',
	'BBCODE_E_HELP'				=> 'Llista: afegir element',
	'BBCODE_F_HELP'				=> 'Mida de la lletra: [size=x-small]small text[/size]',
	'BBCODE_IS_OFF'				=> '%sBBCode%s està <em>DESACTIVAT</em>',
	'BBCODE_IS_ON'				=> '%sBBCode%s està <em>ACTIVAT</em>',
	'BBCODE_I_HELP'				=> 'Cursiva: [i]text[/i]',
	'BBCODE_L_HELP'				=> 'Llista: [list]text[/list]',
	'BBCODE_LISTITEM_HELP'			=> 'Llista per elements: [*]text[/*]',
	'BBCODE_O_HELP'				=> 'Llista ordenada: [list=]text[/list]',
	'BBCODE_P_HELP'				=> 'Inserir imatge: [img]http://imatge_url[/img]',
	'BBCODE_Q_HELP'				=> 'Cita: [quote]text[/quote]',
	'BBCODE_S_HELP'				=> 'Color de la lletra: [color=red]text[/color]  Tip: you can also use color=#FF0000',
	'BBCODE_U_HELP'				=> 'Subratllat: [u]text[/u]',
	'BBCODE_W_HELP'				=> 'Insereix URL: [url]http://url[/url] or [url=http://url]Text url[/url]',
	'BBCODE_D_HELP'				=> 'Flash: [flash=width,height]http://url[/flash]',
	'BUMP_ERROR'				=> 'No podeu respondre tan ràpidament després del darrer missatge.',

	'CANNOT_DELETE_REPLIED'		=> 'Només podeu eliminar els missatges si no ha respost ningú.',
	'CANNOT_EDIT_POST_LOCKED'	=> 'Aquest missatge s\'ha bloquejat. No podeu editar-lo.',
	'CANNOT_EDIT_TIME'			=> 'No podeu editar ni eliminar aquest missatge.',
	'CANNOT_POST_ANNOUNCE'		=> 'No podeu publicar anuncis.',
	'CANNOT_POST_STICKY'		=> 'No podeu publicar temes recurrents.',
	'CHANGE_TOPIC_TO'			=> 'Canvia el tipus de tema a',
	'CLOSE_TAGS'				=> 'Tanca etiquetes',
	'CURRENT_TOPIC'				=> 'Tema actual',

	'DELETE_FILE'				=> 'Elimina el fitxer',
	'DELETE_MESSAGE'			=> 'Elimina el missatge',
	'DELETE_MESSAGE_CONFIRM'	=> 'Esteu segur que voleu eliminar aquest missatge?',
	'DELETE_OWN_POSTS'			=> 'Només podeu esborrar els vostres missatges.',
	'DELETE_POST_CONFIRM'		=> 'Esteu segur que voleu eliminar aquest missatge??',
	'DELETE_POST_WARN'			=> 'Una vegada eliminat el missatge ja no es podrà recuperar',
	'DISABLE_BBCODE'			=> 'Desactiva BBCode',
	'DISABLE_MAGIC_URL'			=> 'No marques automàticament les URLs',
	'DISABLE_SMILIES'			=> 'Desactiva les carotes',
	'DISALLOWED_CONTENT'		=> 'La càrrega s\'ha cancel·lat perquè el fitxer s\'ha identificat com un possible atacant.',
	'DISALLOWED_EXTENSION'		=> 'L\'extensió %s no està permesa.',
	'DRAFT_LOADED'				=> 'S\'ha recuperat l\'esborrany. Potser ara el voldreu acabar.<br />L\'esborrany s\'eliminarà quan envieu el missatge finalitzat.',
	'DRAFT_LOADED_PM'			=> 'S\'ha recuperat l\'esborrany. Potser ara el voldreu acabar.<br />L\'esborrany s\'eliminarà quan envieu el missatge finalitzat.',
	'DRAFT_SAVED'				=> 'S\'ha desat l\'esborrany.',
	'DRAFT_TITLE'				=> 'Títol de l\'esborrany',

	'EDIT_REASON'				=> 'Raó per la qual editeu el missatge',
	'EMPTY_FILEUPLOAD'			=> 'El fitxer carregat és buit.',
	'EMPTY_MESSAGE'				=> 'Heu d\'introduir un missatge quan responeu o creeu un tema.',
	'EMPTY_REMOTE_DATA'			=> 'No s\'ha pogut carregar el fitxer, proveu manualment.',

	'FLASH_IS_OFF'				=> '[flash] està <em>DESACTIVAT</em>',
	'FLASH_IS_ON'				=> '[flash] està <em>ACTIVAT</em>',
	'FLOOD_ERROR'				=> 'No podeu publicar una altra resposta tan ràpidament després del darrer missatge.',
	'FONT_COLOR'				=> 'Color de la lletra',
	'FONT_COLOR_HIDE'			=> 'Amaga color de la lletra',
	'FONT_HUGE'					=> 'Molt gran',
	'FONT_LARGE'				=> 'Gran',
	'FONT_NORMAL'				=> 'Normal',
	'FONT_SIZE'					=> 'Mida de la lletra',
	'FONT_SMALL'				=> 'Menuda',
	'FONT_TINY'					=> 'Diminuta',

	'GENERAL_UPLOAD_ERROR'		=> 'No s\'ha pogut carregar l\'adjunt a %s.',

	'IMAGES_ARE_OFF'			=> '[img] està <em>DESACTIVAT</em>',
	'IMAGES_ARE_ON'				=> '[img] està <em>ACTIVAT</em>',
	'INVALID_FILENAME'			=> '%s no és un nom de fitxer vàlid.',

	'LOAD'						=> 'Carrega',
	'LOAD_DRAFT'				=> 'Carrega esborrany',
	'LOAD_DRAFT_EXPLAIN'		=> 'Ací podeu seleccionar l\'esborrany que voleu continuar. El missatge actual es cancel·larà. Podeu veure, editar i esborrar els vostres esborranys des del perfil de l\'usuari.',
	'LOGIN_EXPLAIN_BUMP'		=> 'Heu d\'haver entrat per poder dividir missatges en aquest fòrum.',
	'LOGIN_EXPLAIN_DELETE'		=> 'Heu d\'haver entrat per poder eliminar missatges en aquest fòrum.',
	'LOGIN_EXPLAIN_POST'		=> 'Heu d\'haver entrat per poder escriure missatges en aquest fòrum.',
	'LOGIN_EXPLAIN_QUOTE'		=> 'Heu d\'haver entrat per poder citar missatges en aquest fòrum.',
	'LOGIN_EXPLAIN_REPLY'		=> 'Heu d\'haver entrat per poder respondre missatges en aquest fòrum.',

	'MAX_FONT_SIZE_EXCEEDED'	=> 'Només podeu fer servir lletres de mida màxima %1$d.',
	'MAX_FLASH_HEIGHT_EXCEEDED'	=> 'Els fitxers flash només poden tindre una alçada de %1$d pixels.',
	'MAX_FLASH_WIDTH_EXCEEDED'	=> 'Els fitxers flash només poden tindre un ample de %1$d pixels.',
	'MAX_IMG_HEIGHT_EXCEEDED'	=> 'Les imatges només poden tindre una alçada de %1$d pixels.',
	'MAX_IMG_WIDTH_EXCEEDED'	=> 'Les imatges només poden tindre un ample de %1$d pixels.',

	'MESSAGE_BODY_EXPLAIN'		=> 'Introduïu ací el missatge, no pot contindre més de <strong>%d</strong> caràcters.',
	'MESSAGE_DELETED'			=> 'S\'ha esborrat el missatge.',
	'MORE_SMILIES'				=> 'Mostra més carotes',

	'NOTIFY_REPLY'				=> 'Notifiqueu-me quan es publique alguna resposta',
	'NOT_UPLOADED'				=> 'No s\'ha pogut carregar el fitxer.',
	'NO_DELETE_POLL_OPTIONS'	=> 'No podeu eliminar opcions existents de l\'enquesta.',
	'NO_PM_ICON'				=> 'Sense icona',
	'NO_POLL_TITLE'				=> 'Heu d\'introduir un títol per a l\'enquesta.',
	'NO_POST'					=> 'El missatge no existeix.',
	'NO_POST_MODE'				=> 'No s\'ha especificat el tipus de missatge.',

	'PARTIAL_UPLOAD'			=> 'El fitxer només s\'ha carregat parcialment.',
	'PHP_SIZE_NA'				=> 'El fitxer adjunt és massa gran.<br />No es pot determinar la mida màxima definida al PHP en php.ini.',

	'PHP_SIZE_OVERRUN'			=> 'El fitxer adjunt és massa gran, la mida màxima permesa és %d MB.',

	'PLACE_INLINE'				=> 'Publiqueu',
	'POLL_DELETE'				=> 'Elimina l\'enquesta',
	'POLL_FOR'					=> 'Enquesta activa per',
	'POLL_FOR_EXPLAIN'			=> 'Introduïu 0 o deixeu-ho en blanc per tal que l\'enquesta no tinga límit de temps.',
	'POLL_MAX_OPTIONS'			=> 'Opcions per usuari',
	'POLL_MAX_OPTIONS_EXPLAIN'	=> 'Aquest és el nombre d\'opcions que cada usuari haurà de seleccionar quan vote a l\'enquesta.',
	'POLL_OPTIONS'				=> 'Opcions de l\'enquesta',
	'POLL_OPTIONS_EXPLAIN'		=> 'Poseu cada opció en una nova línia. Podeu afegir com a màxim <strong>%d</strong> opcions.',
	'POLL_OPTIONS_EDIT_EXPLAIN'	=> 'Poseu cada opció en una nova línia. Podeu afegir com a màxim <strong>%d</strong> opcions. Si elimineu o afegiu opcions, es tornarà a iniciar el recompte de vots.',
	'POLL_QUESTION'				=> 'Pregunta de l\'enquesta',
	'POLL_TITLE_TOO_LONG'		=> 'El títol de l\'enquesta no pot tindre més de 100 caràcters.',
	'POLL_TITLE_COMP_TOO_LONG'	=> 'El títol de l\'enquesta és massa llarg, proveu a treure BBCodes o carotes.',
	'POLL_VOTE_CHANGE'			=> 'Permet que els usuaris tornen a votar',
	'POLL_VOTE_CHANGE_EXPLAIN'	=> 'Si s\'activa, els usuaris podran canviar el seu vot.',
	'POSTED_ATTACHMENTS'		=> 'Adjunts publicats',
	'POST_APPROVAL_NOTIFY'		=> 'Sereu notificats quan s\'aprove el missatge.',
	'POST_CONFIRMATION'			=> 'Confirmació del missatge',
	'POST_CONFIRM_EXPLAIN'		=> 'Per tal de previndre missatges automàtics, el fòrum requereix que introduïu un codi de confirmació. El codi es mostra a la imatge que hi ha a continuació. Si no la podeu veure correctament, contacteu amb l\'%sAdministrador%s.',
	'POST_DELETED'				=> 'El missatge s\'ha esborrat.',
	'POST_EDITED'				=> 'El missatge s\'ha editat.',
	'POST_EDITED_MOD'			=> 'El missatge s\'ha editat, però s\'ha d\'aprovar pel moderador per tal que aparega (sereu notificats).',
	'POST_GLOBAL'				=> 'Global',
	'POST_ICON'					=> 'Icona del missatge',
	'POST_NORMAL'				=> 'Normal',
	'POST_REVIEW'				=> 'Revisió del missatge',
	'POST_REVIEW_EXPLAIN'		=> 'Al menys un nou missatge s\'ha publicat en aquest període de temps. Potser voleu revisar el vostre missatge.',
	'POST_STORED'				=> 'El missatge s\'ha publicat.',
	'POST_STORED_MOD'			=> 'El missatge s\'ha publicat, però s\'ha d\'aprovar per un moderador abans de publicar-se.',

	'POST_TOPIC_AS'				=> 'Publica el tema com',
	'PROGRESS_BAR'				=> 'Barra de progrès',

	'QUOTE_DEPTH_EXCEEDED'		=> 'Només podeu fer %1$d citacions respecte les altres.',

	'SAVE'						=> 'Desa',
	'SAVE_DATE'					=> 'Desa en',
	'SAVE_DRAFT'				=> 'Desa esborrany',
	'SAVE_DRAFT_CONFIRM'		=> 'Quan es desen els esborranys, heu de tindre en compte que només es desa el títol i el text. Voleu desar l\'esborrany ara mateix?',
	'SMILIES'					=> 'Carotes',
	'SMILIES_ARE_OFF'			=> 'Les carotes estan <em>DESACTIVADES</em>',
	'SMILIES_ARE_ON'			=> 'Les carotes estan <em>ACTIVADES</em>',
	'STICKY_ANNOUNCE_TIME_LIMIT'=> 'Temps límit del tema Recurrent/Anunci',
	'STICK_TOPIC_FOR'			=> 'Tema recurrent per',
	'STICK_TOPIC_FOR_EXPLAIN'	=> 'Introduïu 0 o deixeu-ho en blanc per tal que no siga Recurrent/Anunci.',
	'STYLES_TIP'				=> 'Nota: els estils s\'apliquen més ràpidament sobre el text seleccionat.',

	'TOO_FEW_CHARS'				=> 'El missatge conté pocs caràcters.',
	'TOO_FEW_POLL_OPTIONS'		=> 'Heu d\'introduir com a mínim dues opcions a l\'enquesta.',
	'TOO_MANY_ATTACHMENTS'		=> 'No podeu afegir un altre adjunt, el màxim és %d.',
	'TOO_MANY_CHARS'			=> 'El missatge conté massa caràcters.',
	'TOO_MANY_CHARS_POST'		=> 'El missatge conté %1$d caràcters. El nombre màxim de caràcters permès és %2$d.',
	'TOO_MANY_CHARS_SIG'		=> 'La vostra signatura conté %1$d caràcters. El nombre màxim de caràcters permès és %2$d.',
	'TOO_MANY_POLL_OPTIONS'		=> 'Heu introduït massa opcions a l\'enquesta.',
	'TOO_MANY_SMILIES'			=> 'El missatge conté massa carotes. El màxim permès és %d.',
	'TOO_MANY_URLS'				=> 'El missatge conté massa URLs. El màxim permès és %d.',
	'TOO_MANY_USER_OPTIONS'		=> 'No podeu especificar més opcions de les que existeixen a les opcions existents de l\'enquesta.',
	'TOPIC_BUMPED'				=> 'El tema s\'ha dividit.',

	'UNAUTHORISED_BBCODE'		=> 'No podeu utilitzar alguns BBCodes: %s.',
	'UNGLOBALISE_EXPLAIN'		=> 'Per canviar aquest tema per tal que siga normal, heu de seleccionar el fòrum al qual voleu que siga visible.',
	'UPDATE_COMMENT'			=> 'Actualitza el comentari',
	'URL_INVALID'				=> 'L\'URL que heu especificat no és vàlida.',
	'URL_NOT_FOUND'				=> 'No s\'ha trobat el fitxer especificat.',
	'URL_IS_OFF'				=> '[url] està <em>DESACTIVAT</em>',
	'URL_IS_ON'					=> '[url] està <em>ACTIVAT</em>',
	'USER_CANNOT_BUMP'			=> 'No podeu dividir temes en aquest fòrum.',
	'USER_CANNOT_DELETE'		=> 'No podeu esborrar missatges en aquest fòrum.',
	'USER_CANNOT_EDIT'			=> 'No podeu editar missatges en aquest fòrum.',
	'USER_CANNOT_REPLY'			=> 'No podeu respondre en aquest fòrum.',
	'USER_CANNOT_FORUM_POST'	=> 'No podeu publicar ordres en aquest fòrum ja que no estan suportades.',

	'VIEW_MESSAGE'				=> '%sMostra el missatge enviat%s',
	'VIEW_PRIVATE_MESSAGE'		=> '%sMostra els missatge privat enviat%s',

	'WRONG_FILESIZE'			=> 'El fitxer és massa gran, el màxim permès és %1d %2s.',
	'WRONG_SIZE'				=> 'La imatge ha d\'ésser almenys de %1$d pixels d\'ample, %2$d pixels d\'alçada i com a màxim %3$d pixels d\'ample i %4$d pixels d\'alçada. La imatge enviada té %5$d pixels d\'ample i %6$d pixels d\'alçada.',
));

?>
