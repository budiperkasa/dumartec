<?php
/**
*
* posting [Occitan]
*
* @package language
* @version $Id : posting.php,v 1.74 2007/10/04 15 :07 :24 acydburn Exp $
* @copyright (c) 2007 phpBB Group
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
// 'Pagina %s of %s' you can (and should) write 'Pagina %1$s of %2$s', this allows
// translators to re-order the output of data while ensuring it remains correct
//
// You do not need this where single placeholders are used, e.g. 'Messatge %d' is fine
// equally where a string contains only two placeholders which are used to wrap text
// in a url you again do not need to specify an order e.g., 'Click %sHERE%s' is fine

$lang = array_merge($lang, array(
	'ADD_ATTACHMENT'			=> 'Apondre dels pèças juntas',
	'ADD_ATTACHMENT_EXPLAIN'	=> 'Se vos souhaitez joindre un o plusieurs fichièrs, complétez los indications suivantes.',
	'ADD_FILE'					=> 'Apondre lo fichièr',
	'ADD_POLL'					=> 'Apondre un sondage',
	'ADD_POLL_EXPLAIN'			=> 'Se vos ne souhaitez pas apondre de sondage a vòstre tèma, laissez aquestes champs vides.',
	'ALREADY_DELETED'			=> 'Desconsolat, aqueste messatge es ja estat suprimit.',
	'ATTACH_QUOTA_REACHED'		=> 'Desconsolat, lo quota de pèças juntas es estat atteint.',
	'ATTACH_SIG'				=> 'Attacher ma signatura (las signaturas pòdon èsser modifiées dins lo panèl de l\'utilizaire)',

	'BBCODE_A_HELP'				=> 'Fichièr junt transféré en linha : [attachment=]nom_du_fichier.ext[/attachment]',
	'BBCODE_B_HELP'				=> 'Tèxt gras : [b]tèxt[/b]',
	'BBCODE_C_HELP'				=> 'Còdi : [còdi]còdi[/còdi]',
	'BBCODE_E_HELP'				=> 'Tièra : Apondre una tièra d\'éléments',
	'BBCODE_F_HELP'				=> 'Talha de la poliça : [size=85]petit tèxt[/size]',
	'BBCODE_IS_OFF'				=> 'Los %sBBCodes%s son <em>desactivats</em>',
	'BBCODE_IS_ON'				=> 'Los %sBBCodes%s son <em>activats</em>',
	'BBCODE_I_HELP'				=> 'Tèxt italique : [i]tèxt[/i]',
	'BBCODE_L_HELP'				=> 'Tièra : [list]tèxt[/list]',
	'BBCODE_LISTITEM_HELP'		=> 'Elément de tièra : [*]tèxt[/*]',
	'BBCODE_O_HELP'				=> 'Tièra ordenada : [list=]tèxt[/list]',
	'BBCODE_P_HELP'				=> 'Insérer una imatge : [img]http://image_url[/img]',
	'BBCODE_Q_HELP'				=> 'Citacion : [quote]tèxt[/quote]',
	'BBCODE_S_HELP'				=> 'Color de la poliça : [color=red]tèxt[/color] Astuce  : podètz tanben utilizar color=#FF0000',
	'BBCODE_U_HELP'				=> 'Tèxt souligné : [u]tèxt[/u]',
	'BBCODE_W_HELP'				=> 'Insérer un ligam : [url]http://url[/url] o [url=http://url]tèxt descriptif[/url]',
	'BBCODE_D_HELP'				=> 'Flash : [flash=largor,nautor]http://flash_url[/flash]',
	'BUMP_ERROR'				=> 'Podètz pas far remonter aqueste tèma aussitôt après l\'ajout del darrièr messatge.',

	'CANNOT_DELETE_REPLIED'		=> 'Desconsolat, vos ne pouvez suprimir que los messatges n\'ayant recebut aucune responsa.',
	'CANNOT_EDIT_POST_LOCKED'	=> 'Aqueste messatge es estat varrolhat. Vous ne pouvez plus l\'modificar.',
	'CANNOT_EDIT_TIME'			=> 'Vous ne pouvez plus modificar o suprimir aqueste messatge.',
	'CANNOT_POST_ANNOUNCE'		=> 'Desconsolat, podètz pas enviar d\'anóncias.',
	'CANNOT_POST_STICKY'		=> 'Desconsolat, podètz pas créer de nouveaux post-it.',
	'CHANGE_TOPIC_TO'			=> 'Cambiar lo statut del tèma en',
	'CLOSE_TAGS'				=> 'Tampar los balises',
	'CURRENT_TOPIC'				=> 'Tèma actual',

	'DELETE_FILE'				=> 'Suprimir lo fichièr',
	'DELETE_MESSAGE'			=> 'Suprimir lo messatge',
	'DELETE_MESSAGE_CONFIRM'	=> 'Êtes-vos sûr de vouloir suprimir aqueste messatge ?',
	'DELETE_OWN_POSTS'			=> 'Desconsolat, vos ne pouvez suprimir que vòstres propres messatges.',
	'DELETE_POST_CONFIRM'		=> 'Êtes-vos sûr de vouloir suprimir aqueste messatge ?',
	'DELETE_POST_WARN'			=> 'Una fois suprimit, lo messatge ne pourra pas èsser récupéré',
	'DISABLE_BBCODE'			=> 'Desactivar los BBCodes',
	'DISABLE_MAGIC_URL'			=> 'Desactivar los ligams',
	'DISABLE_SMILIES'			=> 'Desactivar los smileys',
	'DISALLOWED_CONTENT'		=> 'Lo mandadís es estat refusat per çò que lo fichièr enviat es estat identificat coma vector d\'atac possible.',
	'DISALLOWED_EXTENSION'		=> 'L\'extension %s n\'es pas autorisée.',
	'DRAFT_LOADED'				=> 'Brouillon chargé dins la zone de rédaction de messatge, podètz finir vòstre messatge maintenant.<br />Lo borrolhon serà suprimit dès que vos aurez posté vòstre messatge.',
	'DRAFT_LOADED_PM'			=> 'Brouillon chargé dins la zone de rédaction de messatge privat, podètz finir vòstre messatge maintenant.<br />Lo borrolhon serà suprimit dès que vos aurez enviat vòstre messatge privat.',
	'DRAFT_SAVED'				=> 'Lo borrolhon es estat enregistrat.',
	'DRAFT_TITLE'				=> 'Títol del borrolhon',

	'EDIT_REASON'				=> 'Rason de la modificacion del messatge',
	'EMPTY_FILEUPLOAD'			=> 'Lo fichièr transféré es void o existís pas.',
	'EMPTY_MESSAGE'				=> 'Vòstre messatge es void !',
	'EMPTY_REMOTE_DATA'			=> 'Lo fichièr n\'a pas pu èsser transféré, essayez de lo transferir manualament.',

	'FLASH_IS_OFF'				=> '[flash] es <em>desactivat</em>',
	'FLASH_IS_ON'				=> '[flash] es <em>activat</em>',
	'FLOOD_ERROR'				=> 'Podètz pas enviar un messatge novèl, se tôt après lo darrièr.',
	'FONT_COLOR'				=> 'Color de la poliça',
	'FONT_COLOR_HIDE'			=> 'Amagar los colors de la poliça',
	'FONT_HUGE'					=> 'Fòrça bèla',
	'FONT_LARGE'				=> 'Bèla',
	'FONT_NORMAL'				=> 'Normala',
	'FONT_SIZE'					=> 'Talha de la poliça',
	'FONT_SMALL'				=> 'Pichona',
	'FONT_TINY'					=> 'Fòrt pichona',

	'GENERAL_UPLOAD_ERROR'		=> 'Impossible de transferir la pèça junta de %s.',

	'IMAGES_ARE_OFF'			=> '[img] es <em>desactivat</em>',
	'IMAGES_ARE_ON'				=> '[img] es <em>activat</em>',
	'INVALID_FILENAME'			=> '%s es un nom de fichièr invalid.',

	'LOAD'						=> 'Charger',
	'LOAD_DRAFT'				=> 'Charger un borrolhon',
	'LOAD_DRAFT_EXPLAIN'		=> 'Ici podètz cargar lo borrolhon que vos souhaitez finir. Vòstre messatge actual serà annulé, tout lo contengut de vòstre messatge actual serà suprimit. Podètz veire, modificar e suprimir vòstres borrolhons dins lo panèl de l\'utilizaire.',
	'LOGIN_EXPLAIN_BUMP'		=> 'Debètz èsser connectat per remonter un tèma d\'aqueste forum.',
	'LOGIN_EXPLAIN_DELETE'		=> 'Debètz èsser connectat per suprimir dels messatges dins aqueste forum.',
	'LOGIN_EXPLAIN_POST'		=> 'Debètz èsser connectat per enviar dins aqueste forum.',
	'LOGIN_EXPLAIN_QUOTE'		=> 'Debètz èsser connectat per citer dels messatges dins aqueste forum.',
	'LOGIN_EXPLAIN_REPLY'		=> 'Debètz èsser connectat per respondre als tèmas d\'aqueste forum.',

	'MAX_FONT_SIZE_EXCEEDED'	=> 'Podètz seulement employer dels polices dont la talha maximum es de %1$d.',
	'MAX_FLASH_HEIGHT_EXCEEDED'	=> 'Vos animacions flash debon èsser de %1$d pixels de haut maximum.',
	'MAX_FLASH_WIDTH_EXCEEDED'	=> 'Vos animacions flash debon èsser de %1$d pixels de large maximum.',
	'MAX_IMG_HEIGHT_EXCEEDED'	=> 'Vos imatges debon èsser de %1$d pixels de haut maximum.',
	'MAX_IMG_WIDTH_EXCEEDED'	=> 'Vos imatges debon èsser de %1$d pixels de large maximum.',

	'MESSAGE_BODY_EXPLAIN'		=> 'Picatz vòstre messatge aicí, il ne deu pas conténer plus de <strong>%d</strong> caractèrs.',
	'MESSAGE_DELETED'			=> 'Vòstre messatge es estat suprimit.',
	'MORE_SMILIES'				=> 'Veire plus de smileys',

	'NOTIFY_REPLY'				=> 'M\'avertir lorsqu\'una responsa es postée.',
	'NOT_UPLOADED'				=> 'Lo fichièr pòt pas èsser transféré.',
	'NO_DELETE_POLL_OPTIONS'	=> 'Podètz pas suprimir las opcions del sondage existantes.',
	'NO_PM_ICON'				=> 'Pas cap',
	'NO_POLL_TITLE'				=> 'Debètz entrer un títol de sondage.',
	'NO_POST'					=> 'Lo messatge demandat existís pas.',
	'NO_POST_MODE'				=> 'Pas cap de type de messatge n\'es especificat.',

	'PARTIAL_UPLOAD'			=> 'Lo fichièr n\'es estat que partiellement transféré.',
	'PHP_SIZE_NA'				=> 'La talha del pèça junta es trop grande.<br />Impossible de déterminer la talha maximale définie per PHP dins php.ini.',
	'PHP_SIZE_OVERRUN'			=> 'La talha del pèça junta es trop grande, la talha maximale es de %d Mo.<br />Notatz que aqueste réglage se trouve dins php.ini e pòt pas èsser outrepassé.',
	'PLACE_INLINE'				=> 'Botar en linha',
	'POLL_DELETE'				=> 'Suprimir lo sondage',
	'POLL_FOR'					=> 'Durée del sondage',
	'POLL_FOR_EXPLAIN'			=> 'Botar "0" o laissez void per ne jamais terminer lo sondage.',
	'POLL_MAX_OPTIONS'			=> 'Option(s) per utilizaire',
	'POLL_MAX_OPTIONS_EXPLAIN'	=> 'Es lo nombre d\'opcions que chaque utilizaire pòt causir quand il vòte.',
	'POLL_OPTIONS'				=> 'Opcions del sondage',
	'POLL_OPTIONS_EXPLAIN'		=> 'Placez chaque option sus una linha différente. Podètz entrer jusqu\'a <strong>%d</strong> opcions.',
	'POLL_OPTIONS_EDIT_EXPLAIN'	=> 'Placez chaque option sus una linha différente. Podètz entrer jusqu\'a <strong>%d</strong> opcions. Se vos suprimissètz o ajoutez dels opcions, totes los vòtes precedents seront remis a zerò.',
	'POLL_QUESTION'				=> 'Question del sondage',
	'POLL_TITLE_TOO_LONG'		=> 'Lo títol del sondage deu conténer mens de 100 caractèrs.',
	'POLL_TITLE_COMP_TOO_LONG'	=> 'La talha del títol del sondage es trop importante, essayez de retirer los BBCodes e/o los smileys.',
	'POLL_VOTE_CHANGE'			=> 'Permettre de voter a nouveau',
	'POLL_VOTE_CHANGE_EXPLAIN'	=> 'Se activat, los utilizaires pòdon cambiar leur vòte.',
	'POSTED_ATTACHMENTS'		=> 'Fichièrs junts postés',
	'POST_APPROVAL_NOTIFY'		=> 'Vous serez averti quand vòstre messatge serà aprobat.',
	'POST_CONFIRMATION'			=> 'Confirmacion del messatge',
	'POST_CONFIRM_EXPLAIN'		=> 'Afin de lutter contre lo spam de messatges instantanés, l\'administrator souhaite que vos entriez un còdi de confirmacion. Lo còdi apparaît dins l\'imatge que vos devriez veire çai-jos. Se vos êtes déficient visuel o se podètz pas legir aqueste còdi, contactatz %sl\'administrator del forum%s.',
	'POST_DELETED'				=> 'Lo messatge es estat suprimit.',
	'POST_EDITED'				=> 'Vòstre messatge es estat édité.',
	'POST_EDITED_MOD'			=> 'Vòstre messatge es estat édité, mas requiert l\'aprovacion d\'un moderaire abans d\'èsser rendu visible publiquement.',
	'POST_GLOBAL'				=> 'Anóncia generala',
	'POST_ICON'					=> 'Icòna de messatge ',
	'POST_NORMAL'				=> 'Normal',
	'POST_REVIEW'				=> 'Revue del tèma',
	'POST_REVIEW_EXPLAIN'		=> 'Au mens un messatge novèl es estat apondut a-n aqueste tèma entre-temps. Podètz revoir vòstre messatge en conséquence.',
	'POST_STORED'				=> 'Vòstre messatge es estat posté.',
	'POST_STORED_MOD'			=> 'Vòstre messatge es estat posté, mas requiert l\'aprovacion d\'un moderaire abans d\'èsser rendu visible publiquement.',
	'POST_TOPIC_AS'				=> 'Poster lo tèma en tant que',
	'PROGRESS_BAR'				=> 'Barre de progression',

	'QUOTE_DEPTH_EXCEEDED'		=> 'Podètz utilizar seulement %1$d citation(s).',

	'SAVE'						=> 'Sauvegarder',
	'SAVE_DATE'					=> 'Sauvegardé lo',
	'SAVE_DRAFT'				=> 'Sauvegarder lo borrolhon',
	'SAVE_DRAFT_CONFIRM'		=> 'Notatz que los borrolhons sauvegardés ne contiennent que lo títol e lo messatge, tout autre élément serà suprimit. Souhaitez-vos sauvegarder vòstre borrolhon maintenant ?',
	'SMILIES'					=> 'Smileys',
	'SMILIES_ARE_OFF'			=> 'Los smileys son <em>desactivats</em>',
	'SMILIES_ARE_ON'			=> 'Los smileys son <em>activats</em>',
	'STICKY_ANNOUNCE_TIME_LIMIT'=> 'Durée del post-it o de l\'anóncia',
	'STICK_TOPIC_FOR'			=> 'Epingler pendant',
	'STICK_TOPIC_FOR_EXPLAIN'	=> 'Botar "0" o laissez void per una durada illimitée dels post-it/anóncias.',
	'STYLES_TIP'				=> 'Astuce : los mises en forme pòdon èsser appliquées rapidement en sélectionnant lo tèxt.',

	'TOO_FEW_CHARS'				=> 'Vòstre messatge conten trop peu de caractèrs.',
	'TOO_FEW_POLL_OPTIONS'		=> 'Debètz entrer al mens deux opcions possibles al sondage.',
	'TOO_MANY_ATTACHMENTS'		=> 'Impossible d\'apondre un nouveau pèça junta, %d es lo maximum autorizat.',
	'TOO_MANY_CHARS'			=> 'Vòstre messatge conten trop de caractèrs.',
	'TOO_MANY_CHARS_POST'		=> 'Vòstre messatge conten %1$d caractèrs. Lo nombre maximal de caractèrs autorizat es %2$d.',
	'TOO_MANY_CHARS_SIG'		=> 'Vòstre signatura conten %1$d caractèrs. Lo nombre maximal de caractèrs autorizat es %2$d.',
	'TOO_MANY_POLL_OPTIONS'		=> 'Vous avez dépassé lo nombre d\'opcions de sondage possible.',
	'TOO_MANY_SMILIES'			=> 'Vòstre messatge conten trop de smileys. Un maximum de %d smiley(s) es autorizat.',
	'TOO_MANY_URLS'				=> 'Vòstre messatge conten trop de ligams. Un maximum de %d ligam(s) es autorizat.',
	'TOO_MANY_USER_OPTIONS'		=> 'Podètz pas indicar un nombre d\'opcions per utilizaire supérieur al nombre d\'opcions del sondage.',
	'TOPIC_BUMPED'				=> 'Lo tèma es estat remonté.',

	'UNAUTHORISED_BBCODE'		=> 'Podètz pas utilizar certains BBCodes : %s.',
	'UNGLOBALISE_EXPLAIN'		=> 'Per cambiar aquesta anóncia generala en tèma normal, vos devez seleccionar lo forum ont vos souhaitez veire apparaître lo tèma.',
	'UPDATE_COMMENT'			=> 'Botar a jorn lo comentari',
	'URL_INVALID'				=> 'Lo ligam especificat es invalid.',
	'URL_NOT_FOUND'				=> 'Lo fichièr especificat es pas estat trobat.',
	'URL_IS_OFF'				=> '[url] es <em>desactivat</em>',
	'URL_IS_ON'					=> '[url] es <em>activat</em>',
	'USER_CANNOT_BUMP'			=> 'Podètz pas remonter de tèmas dins aqueste forum.',
	'USER_CANNOT_DELETE'		=> 'Podètz pas suprimir de messatges dins aqueste forum.',
	'USER_CANNOT_EDIT'			=> 'Podètz pas modificar de messatges dins aqueste forum.',
	'USER_CANNOT_REPLY'			=> 'Podètz pas respondre a un tèma dins aqueste forum.',
	'USER_CANNOT_FORUM_POST'	=> 'Podètz pas efectuar d\'opérations sus aqueste forum per çò que aqueste type de forum ne lo permet pas.',

	'VIEW_MESSAGE'				=> '%sVoir lo messatge enviat%s',
	'VIEW_PRIVATE_MESSAGE'		=> '%sVoir lo messatge privat enviat%s',

	'WRONG_FILESIZE'			=> 'Lo fichièr es trop gros, la talha maximum autorisée es %1d %2s.',
	'WRONG_SIZE'				=> 'L\'imatge deu far al mens %1$d pixels de large, %2$d pixels de haut e al plus %3$d pixels de large e %4$d pixels de haut. L\'imatge actuelle fait %5$d pixels de large e %6$d pixels de haut.',
));

 ?>
