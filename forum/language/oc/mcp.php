<?php
/**
*
* mcp [Occitan]
*
* @package language
* @version $Id : mcp.php,v 1.83 2007/10/04 15 :07 :24 acydburn Exp $
* @copyright (c) 2005 phpBB Group
* @license http://opensource.org/licenses/gpl-license.php GNU Public License
*
*/
/**
* CONTRIBUTORS
* Translation made by phpBB-fr.com and phpBB.biz Teams
* http://www.phpbb-fr.com
* http://www.phpbb.biz
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
	'ACTION'				=> 'Accion',
	'ACTION_NOTE'			=> 'Accion/nòta',
	'ADD_FEEDBACK'			=> 'Apondre un comentari',
	'ADD_FEEDBACK_EXPLAIN'	=> 'Se volètz apondre un comentari sus aqueste utilizaire, garnissètz lo formulari seguent. Utilizatz pas que de tèxt. Lo HTML, los BBCodes, etc. son pas autorizats.',
	'ADD_WARNING'			=> 'Apondre un avertiment',
	'ADD_WARNING_EXPLAIN'	=> 'Per enviar un avertiment a-n aqueste utilizaire, garnissètz lo formulari seguent. Utilizatz pas que de tèxt. Lo HTML, los BBCodes, etc. son pas autorizats.',
	'ALL_ENTRIES'			=> 'Totas las dintradas',
	'ALL_NOTES_DELETED'		=> 'Los comentaris sus l\'utilizaire son estats suprimits.',
	'ALL_REPORTS'			=> 'Totes los rapòrts',
	'ALREADY_REPORTED'		=> 'Aqueste messatge es ja estat raportat.',
	'ALREADY_WARNED'		=> 'Un avertiment es ja estat publicat per aqueste messatge.',
	'APPROVE'				=> 'Aprovar',
	'APPROVE_POST'			=> 'Aprovar lo messatge',
	'APPROVE_POST_CONFIRM'	=> 'Sètz segur que volètz aprobar aqueste messatge?',
	'APPROVE_POSTS'			=> 'Aprovar los messatges',
	'APPROVE_POSTS_CONFIRM'	=> 'Sètz segur que volètz aprobar los messatges seleccionats ?',

	'CANNOT_MOVE_SAME_FORUM'=> 'Podètz pas desplaçar un tèma dins un forum ont se tròba ja.',
	'CANNOT_WARN_ANONYMOUS'	=> 'Podètz pas avertir un convidat.',
	'CANNOT_WARN_SELF'		=> 'Vos podètz pas balhar un avertiment.',
	'CAN_LEAVE_BLANK'		=> 'Lo podètz daissar void.',
	'CHANGE_POSTER'			=> 'Cambiar lo nom del expeditor',
	'CLOSE_REPORT'			=> 'Acabar lo rapòrt',
	'CLOSE_REPORT_CONFIRM'	=> 'Sètz segur que volètz acabar lo rapòrt seleccionat ?',
	'CLOSE_REPORTS'			=> 'Acabar los rapòrts',
	'CLOSE_REPORTS_CONFIRM'	=> 'Sètz segur que volètz acabar los rapòrts seleccionats ?',

	'DELETE_POSTS'				=> 'Suprimir los messatges',
	'DELETE_POSTS_CONFIRM'		=> 'Sètz segur que volètz suprimir aquestes messatges ?',
	'DELETE_POST_CONFIRM'		=> 'Sètz segur que volètz suprimir aqueste messatge ?',
	'DELETE_REPORT'				=> 'Suprimir lo rapòrt',
	'DELETE_REPORT_CONFIRM'		=> 'Sètz segur que volètz suprimir lo rapòrt seleccionat ?',
	'DELETE_REPORTS'			=> 'Suprimir los rapòrts',
	'DELETE_REPORTS_CONFIRM'	=> 'Sètz segur que volètz suprimir los rapòrts seleccionats ?',
	'DELETE_SHADOW_TOPIC'		=> 'Suprimir lo tèma-traçaire',
	'DELETE_TOPICS'				=> 'Suprimir los tèmas causits',
	'DELETE_TOPICS_CONFIRM'		=> 'Sètz segur que volètz suprimir aquestes tèmas?',
	'DELETE_TOPIC_CONFIRM'		=> 'Sètz segur que volètz suprimir aqueste tèma?',
	'DISAPPROVE'				=> 'Desaprovar',
	'DISAPPROVE_REASON'			=> 'Rason de la desaprovacion',
	'DISAPPROVE_POST'			=> 'Desaprovar lo messatge',
	'DISAPPROVE_POST_CONFIRM'	=> 'Sètz segur que volètz refusar aqueste messatge ?',
	'DISAPPROVE_POSTS'			=> 'Desaprovar los messatges',
	'DISAPPROVE_POSTS_CONFIRM'	=> 'Sètz segur que volètz refusar aquestes messatges ?',
	'DISPLAY_LOG'				=> 'Visualizar las dintradas precedentas',
	'DISPLAY_OPTIONS'			=> 'Opcions de visualizacion',

	'EMPTY_REPORT'					=> 'Debètz picar una description se seleccionatz aquesta rason.',
	'EMPTY_TOPICS_REMOVED_WARNING'	=> 'Notatz qu\'un o mai d\'un tèma son estats suprimits de la basa de donadas per çò que èran o venián voides.',

	'FEEDBACK'				=> 'Fichas de seguit',
	'FORK'					=> 'Copiar',
	'FORK_TOPIC'			=> 'Copiar lo tèma',
	'FORK_TOPIC_CONFIRM'	=> 'Sètz segur que volètz copiar aqueste tèma ?',
	'FORK_TOPICS'			=> 'Copiar los tèmas causits',
	'FORK_TOPICS_CONFIRM'	=> 'Sètz segur que volètz copiar los tèmas seleccionats ?',
	'FORUM_DESC'			=> 'Descripcion',
	'FORUM_NAME'			=> 'Nom del forum',
	'FORUM_NOT_EXIST'		=> 'Lo forum qu\'avètz seleccionat existís pas.',
	'FORUM_NOT_POSTABLE'	=> 'Lo forum qu\'avètz seleccionat pòt pas èsser mes en plaça.',
	'FORUM_STATUS'			=> 'Estat del forum',
	'FORUM_STYLE'			=> 'Estil del forum',

	'GLOBAL_ANNOUNCEMENT'	=> 'Anóncia generala',

	'IP_INFO'				=> 'Entresenha IP',
	'IPS_POSTED_FROM'		=> 'Aqueste utilizaire a enviat de messatges amb las adreças IP :',

	'LATEST_LOGS'				=> 'Las 5 darrièras accions notadas',
	'LATEST_REPORTED'			=> 'Los 5 darrièrs rapòrts',
	'LATEST_UNAPPROVED'			=> 'Los 5 darrièrs messatges en espèra d\'aprovacion',
	'LATEST_WARNING_TIME'		=> 'Darrièr avertiment balhat',
	'LATEST_WARNINGS'			=> 'Los 5 darrièrs avertiments',
	'LEAVE_SHADOW'				=> 'Daissar un tèma-traçaire dins lo forum ancian',
	'LIST_REPORT'				=> '1 rapòrt',
	'LIST_REPORTS'				=> '%d rapòrts',
	'LOCK'						=> 'Varrolhar',
	'LOCK_POST_POST'			=> 'Varrolhar lo messatge',
	'LOCK_POST_POST_CONFIRM'	=> 'Sètz segur que volètz empachar la modificacion d\'aqueste messatge ?',
	'LOCK_POST_POSTS'			=> 'Varrolhar los messatges seleccionats',
	'LOCK_POST_POSTS_CONFIRM'	=> 'Sètz segur que volètz empachar la modificacion d\'aquestes messatges ?',
	'LOCK_TOPIC_CONFIRM'		=> 'Sètz segur que volètz varrolhar aqueste tèma? ',
	'LOCK_TOPICS'				=> 'Varrolhar los tèmas seleccionats',
	'LOCK_TOPICS_CONFIRM'		=> 'Sètz segur que volètz varrolhar totes los tèmas seleccionats ?',
	'LOGS_CURRENT_TOPIC'		=> 'Notacions actualament visualizadas :',
	'LOGIN_EXPLAIN_MCP'			=> 'Per moderar aqueste forum, vos debètz connectar.',
	'LOGVIEW_VIEWTOPIC'			=> 'Veire lo tèma',
	'LOGVIEW_VIEWLOGS'			=> 'Consultar lo jornal dels tèmas',
	'LOGVIEW_VIEWFORUM'			=> 'Veire lo forum',
	'LOOKUP_ALL'				=> 'Recercar totas las IP',
	'LOOKUP_IP'					=> 'Recercar una IP',

	'MARKED_NOTES_DELETED'		=> 'Totes los comentaris sul utilizaire son estats suprimits.',

	'MCP_ADD'						=> 'Apondre un avertiment',

	'MCP_BAN'					=> 'Fòrabandiments',
	'MCP_BAN_EMAILS'			=> 'Fòrabandir d\'adreças corrièl',
	'MCP_BAN_IPS'				=> 'Fòrabandir d\'IP',
	'MCP_BAN_USERNAMES'			=> 'Fòrabandir d\'utilizaires',

	'MCP_LOGS'						=> 'Jornal de moderacion',
	'MCP_LOGS_FRONT'				=> 'Primièra pagina',
	'MCP_LOGS_FORUM_VIEW'			=> 'Jornal dels forums',
	'MCP_LOGS_TOPIC_VIEW'			=> 'Jornal dels tèmas',

	'MCP_MAIN'						=> 'Principal',
	'MCP_MAIN_FORUM_VIEW'			=> 'Veire lo forum',
	'MCP_MAIN_FRONT'				=> 'Primièra pagina',
	'MCP_MAIN_POST_DETAILS'			=> 'Detalhs del messatge',
	'MCP_MAIN_TOPIC_VIEW'			=> 'Veire lo tèma',
	'MCP_MAKE_ANNOUNCEMENT'			=> 'Botar en "Anóncia"',
	'MCP_MAKE_ANNOUNCEMENT_CONFIRM'	=> 'Sètz segur que volètz botar aqueste tèma en "Anóncia" ?',
	'MCP_MAKE_ANNOUNCEMENTS'		=> 'Botar en "Anóncias"',
	'MCP_MAKE_ANNOUNCEMENTS_CONFIRM'=> 'Sètz segur que volètz botar los tèmas seleccionats en "Anóncias" ?',
	'MCP_MAKE_GLOBAL'				=> 'Botar en "Anóncia generala"',
	'MCP_MAKE_GLOBAL_CONFIRM'		=> 'Sètz segur que volètz botar aqueste tèma en "Anóncia generala" ?',
	'MCP_MAKE_GLOBALS'				=> 'Botar en "Anóncias generalas"',
	'MCP_MAKE_GLOBALS_CONFIRM'		=> 'Sètz segur que volètz botar los tèmas seleccionats en "Anóncias generalas" ?',
	'MCP_MAKE_STICKY'				=> 'Botar en "Post-it"',
	'MCP_MAKE_STICKY_CONFIRM'		=> 'Sètz segur que volètz botar aqueste tèma en "Post-it" ?',
	'MCP_MAKE_STICKIES'				=> 'Botar en "Post-it"',
	'MCP_MAKE_STICKIES_CONFIRM'		=> 'Sètz segur que volètz botar los tèmas seleccionats en "Post-it" ?',
	'MCP_MAKE_NORMAL'				=> 'Botar en "Tèma normal"',
	'MCP_MAKE_NORMAL_CONFIRM'		=> 'Sètz segur que volètz botar aqueste tèma en "Tèma normal" ?',
	'MCP_MAKE_NORMALS'				=> 'Botar en "Tèmas normals"',
	'MCP_MAKE_NORMALS_CONFIRM'		=> 'Sètz segur que volètz botar los tèmas seleccionats en "Tèmas normals" ?',

	'MCP_NOTES'						=> 'Ficha de seguit',
	'MCP_NOTES_FRONT'				=> 'Primièra pagina',
	'MCP_NOTES_USER'				=> 'Detalhs',

	'MCP_POST_REPORTS'				=> 'Rapòrts que venon d\'aqueste messatge',

	'MCP_REPORTS'					=> 'Messatges raportats',
	'MCP_REPORT_DETAILS'			=> 'Detalhs del rapòrt',
	'MCP_REPORTS_CLOSED'			=> 'Rapòrts acabats',
	'MCP_REPORTS_CLOSED_EXPLAIN'	=> 'Tièra de totes los rapòrts de messatges qu\'una solucion es estada trobada.',
	'MCP_REPORTS_OPEN'				=> 'Rapòrts en cors',
	'MCP_REPORTS_OPEN_EXPLAIN'		=> 'Tièra de totes los messatges raportats qui debon totjorn èsser tractats.',

	'MCP_QUEUE'								=> 'En espèra de moderacion',
	'MCP_QUEUE_APPROVE_DETAILS'				=> 'Aprovar los detalhs',
	'MCP_QUEUE_UNAPPROVED_POSTS'			=> 'Messatges en espèra',
	'MCP_QUEUE_UNAPPROVED_POSTS_EXPLAIN'	=> 'Tièra de totes los messatges que necessitan una aprovacion abans publicacion.',
	'MCP_QUEUE_UNAPPROVED_TOPICS'			=> 'Sujets en espèra',
	'MCP_QUEUE_UNAPPROVED_TOPICS_EXPLAIN'	=> 'Tièra de totes los tèmas que necessitan una aprovacion abans publicacion.',

	'MCP_VIEW_USER'			=> 'Consultar los avertiments per un utilizaire especific',

	'MCP_WARN'				=> 'Avertiments ',
	'MCP_WARN_FRONT'		=> 'Primièra pagina',
	'MCP_WARN_LIST'			=> 'Tièra dels avertiments',
	'MCP_WARN_POST'			=> 'Avertir pel messatge especific',
	'MCP_WARN_USER'			=> 'Avertir lo sòci',

	'MERGE_POSTS'			=> 'Fusionar los messatges',
	'MERGE_POSTS_CONFIRM'	=> 'Sètz segur que volètz fusionar los messatges seleccionats?',
	'MERGE_TOPIC_EXPLAIN'	=> 'L\'utilisation del formulari çai-jos vos permet de fusionar los messatges seleccionats dins un autre tèma. Aquestes messatges seràn pas botats tornamai dins l\'òrdre e se veiràn coma se los utilizaires los avián enviats dins lo tèma novèl.<br />Picatz l\'id del tèma de destinacion o clicatz sus "Seleccionar lo tèma" per ne cercar un.',
	'MERGE_TOPIC_ID'		=> 'Id del tèma de destinacion',
	'MERGE_TOPICS'			=> 'Fusionar los tèmas',
	'MERGE_TOPICS_CONFIRM'	=> 'Sètz segur que volètz fusionar los tèmas seleccionats?',
	'MODERATE_FORUM'		=> 'Moderar lo forum',
	'MODERATE_TOPIC'		=> 'Moderar lo tèma',
	'MODERATE_POST'			=> 'Moderar lo messatge',
	'MOD_OPTIONS'			=> 'Opcions de moderacion',
	'MORE_INFO'				=> 'Entresenhas complementàrias',
	'MOST_WARNINGS'			=> 'Utilizaires que an lo mai d\'avertiments',
	'MOVE_TOPIC_CONFIRM'	=> 'Sètz segur que volètz desplaçar lo tèma dins un forum novèl ?',
	'MOVE_TOPICS'			=> 'Desplaçar los tèmas seleccionats',
	'MOVE_TOPICS_CONFIRM'	=> 'Sètz segur que volètz desplaçar los tèmas seleccionats dins un forum novèl ?',

	'NOTIFY_POSTER_APPROVAL'		=> 'Informar lo expeditor al tèma de l\'aprovacion? ',
	'NOTIFY_POSTER_DISAPPROVAL'		=> 'Informar lo expeditor al tèma de la desaprovacion ?',
	'NOTIFY_USER_WARN'				=> 'Informar l\'utilizaire al tèma de l\'avertiment ?',
	'NOT_MODERATOR'					=> 'Sètz pas moderaire d\'aqueste forum.',
	'NO_DESTINATION_FORUM'			=> 'Seleccionatz un forum de destinacion.',
	'NO_DESTINATION_FORUM_FOUND'	=> 'I a pas cap de forum de destinacion disponible.',
	'NO_ENTRIES'					=> 'Pas cap de dintrada de notacion per aquesta periòde.',
	'NO_FEEDBACK'					=> 'Pas cap de ficha de seguit existís per aqueste utilizaire.',
	'NO_FINAL_TOPIC_SELECTED'		=> 'Debètz seleccionar un tèma de destinacion per fusionar los messatges.',
	'NO_MATCHES_FOUND'				=> 'Pas cap de résultat trobat.',
	'NO_POST'						=> 'Debètz seleccionar un messatge per avertir l\'utilizaire per un messatge.',
	'NO_POST_REPORT'				=> 'Aqueste messatge es pas estat raportat.',
	'NO_POST_SELECTED'				=> 'Debètz seleccionar al mens un messatge per efectuar aquesta accion.',
	'NO_REASON_DISAPPROVAL'			=> 'Balhatz la rason de la desaprovacion.',
	'NO_REPORT'						=> 'Pas cap de rapòrt trobat',
	'NO_REPORTS'					=> 'Pas cap de rapòrt trobat',	
	'NO_REPORT_SELECTED'			=> 'Debètz seleccionar al mens un rapòrt per efectuar aquesta accion.',
	'NO_TOPIC_ICON'					=> 'Pas cap',
	'NO_TOPIC_SELECTED'				=> 'Debètz causir al mens un tèma per efectuar aquesta accion.',
	'NO_TOPICS_QUEUE'				=> 'I a pas cap de tèma en espèra d\'aprovacion.',

	'ONLY_TOPIC'			=> 'Seulement lo tèma "%s"',
	'OTHER_USERS'			=> 'Autres utilizaires postant a partir de aquesta IP',

	'POSTER'					=> 'Posteur',
	'POSTS_APPROVED_SUCCESS'	=> 'Los messatges seleccionats son estats approuvés.',
	'POSTS_DELETED_SUCCESS'		=> 'Los messatges seleccionats son estats suprimits de la basa de donadas.',
	'POSTS_DISAPPROVED_SUCCESS'	=> 'Los messatges seleccionats son estats désapprouvés.',
	'POSTS_LOCKED_SUCCESS'		=> 'Los messatges seleccionats son estats verrouillés.',
	'POSTS_MERGED_SUCCESS'		=> 'Los messatges seleccionats son estats fusionnés.',
	'POSTS_UNLOCKED_SUCCESS'	=> 'Los messatges seleccionats son estats déverrouillés.',
	'POSTS_PER_PAGE'			=> 'Messatges per pagina',
	'POSTS_PER_PAGE_EXPLAIN'	=> '(Botar "0" per veire totes los messatges.)',
	'POST_APPROVED_SUCCESS'		=> 'Lo messatge seleccionat es estat aprobat.',
	'POST_DELETED_SUCCESS'		=> 'Lo messatge seleccionat es estat suprimit de la basa de donadas.',
	'POST_DISAPPROVED_SUCCESS'	=> 'Lo messatge seleccionat es estat désapprouvé.',
	'POST_LOCKED_SUCCESS'		=> 'Lo messatge es estat varrolhat.',
	'POST_NOT_EXIST'			=> 'Lo messatge qu\'avètz demandat existís pas.',
	'POST_REPORTED_SUCCESS'		=> 'Aqueste messatge es estat raportat.',
	'POST_UNLOCKED_SUCCESS'		=> 'Lo messatge es estat déverrouillé.',

	'READ_USERNOTES'			=> 'Ficha de seguit',
	'READ_WARNINGS'				=> 'Avertiments de l\'utilizaire',
	'REPORTER'					=> 'Rapporteur',
	'REPORTED'					=> 'Raportat',
	'REPORTED_BY'				=> 'Raportat per',
	'REPORTED_ON_DATE'			=> 'lo',
	'REPORTS_CLOSED_SUCCESS'	=> 'Los rapòrts seleccionats son estats clôturés.',
	'REPORTS_DELETED_SUCCESS'	=> 'Los rapòrts seleccionats son estats suprimits.',
	'REPORTS_TOTAL'				=> 'I a, al total, <strong>%d</strong> rapòrts a passer en revue.',
	'REPORTS_ZERO_TOTAL'		=> 'I a pas cap de rapòrt a passer en revue.',
	'REPORT_CLOSED'				=> 'Aqueste rapòrt es ja estat clôturé.',
	'REPORT_CLOSED_SUCCESS'		=> 'Lo rapòrt seleccionat es estat clôturé.',
	'REPORT_DELETED_SUCCESS'	=> 'Lo rapòrt seleccionat es estat suprimit.',
	'REPORT_DETAILS'			=> 'Detalhs del rapòrt',
	'REPORT_MESSAGE'			=> 'Raportar aqueste messatge',
	'REPORT_MESSAGE_EXPLAIN'	=> 'Utilizatz aqueste formulari per rapporter lo messatge seleccionat. En général, lo rapòrt ne devra èsser utilizat que se lo messatge ne respecte pas los règles del forum.',
	'REPORT_NOTIFY'				=> 'M\'informer',
	'REPORT_NOTIFY_EXPLAIN'		=> 'Vous informer quand vòstre rapòrt es estat traité.',
	'REPORT_POST_EXPLAIN'		=> 'Utilizatz aqueste formulari per rapporter lo messatge seleccionat als moderaires del forum e als administrators. En général, lo rapòrt ne devra èsser utilizat que se lo messatge ne respecte pas los règles del forum.',
	'REPORT_REASON'				=> 'Rason del rapòrt',
	'REPORT_TIME'				=> 'Data del rapòrt',
	'REPORT_TOTAL'				=> 'Il reste <strong>1</strong> rapòrt a passer en revue.',
	'RESYNC'					=> 'Resynchroniser',
	'RETURN_MESSAGE'			=> '%sTornar al messatge%s',
	'RETURN_NEW_FORUM'			=> '%sTornar al forum novèl%s',
	'RETURN_NEW_TOPIC'			=> '%sTornar al tèma novèl%s',
	'RETURN_POST'				=> '%sTornar al messatge%s',
	'RETURN_QUEUE'				=> '%sTornar a l\'espèra de moderacion%s',
	'RETURN_REPORTS'			=> '%sTornar als rapòrts%s',
	'RETURN_TOPIC_SIMPLE'		=> '%sTornar al tèma%s',

	'SEARCH_POSTS_BY_USER'				=> 'Recercar los messatges de',
	'SELECT_ACTION'						=> 'Seleccionar l\'accion désirée',
	'SELECT_FORUM_GLOBAL_ANNOUNCEMENT'	=> 'Seleccionatz lo forum dins lequel aquesta anóncia generala deu èsser placée.',
	'SELECT_FORUM_GLOBAL_ANNOUNCEMENTS'	=> 'Un o plusieurs dels tèmas seleccionats son dels anóncias generalas. Seleccionatz lo forum dins lequel vos souhaitez que aquestes tèmas soient placés.',
	'SELECT_MERGE'						=> 'Seleccionar per fusionar',
	'SELECT_TOPICS_FROM'				=> 'Seleccionar los tèmas de',
	'SELECT_TOPIC'						=> 'Seleccionar lo tèma',
	'SELECT_USER'						=> 'Seleccionar l\'utilizaire',
	'SORT_ACTION'						=> 'Jornal dels actions',
	'SORT_DATE'							=> 'Data',
	'SORT_IP'							=> 'Adreça IP',
	'SORT_WARNINGS'						=> 'Avertiments ',
	'SPLIT_AFTER'						=> 'Diviser a partir del messatge seleccionat',
	'SPLIT_FORUM'						=> 'Fòrom del tèma novèl',
	'SPLIT_POSTS'						=> 'Diviser los messatges seleccionats',
	'SPLIT_SUBJECT'						=> 'Títol del tèma novèl',
	'SPLIT_TOPIC_ALL'					=> 'Diviser a partir dels messatges seleccionats',
	'SPLIT_TOPIC_ALL_CONFIRM'			=> 'Sètz segur que volètz diviser aqueste tèma?',
	'SPLIT_TOPIC_BEYOND'				=> 'Diviser lo tèma al messatge seleccionat',
	'SPLIT_TOPIC_BEYOND_CONFIRM'		=> 'Sètz segur que volètz diviser aqueste tèma al messatge seleccionat?',
	'SPLIT_TOPIC_EXPLAIN'				=> 'L\'utilisation del formulari çai-jos vos permet de diviser un tèma en deux, siá en sélectionnant los messatges individuellement, siá en divisant al messatge seleccionat.',

	'THIS_POST_IP'				=> 'IP d\'aqueste messatge',
	'TOPICS_APPROVED_SUCCESS'	=> 'Los tèmas seleccionats son estats approuvés.',
	'TOPICS_DELETED_SUCCESS'	=> 'Los tèmas seleccionats son estats suprimits de la basa de donadas.',
	'TOPICS_DISAPPROVED_SUCCESS'=> 'Los tèmas seleccionats son estats désapprouvés.',
	'TOPICS_FORKED_SUCCESS'		=> 'Los tèmas seleccionats son estats copiés.',
	'TOPICS_LOCKED_SUCCESS'		=> 'Los tèmas seleccionats son estats verrouillés.',
	'TOPICS_MOVED_SUCCESS'		=> 'Los tèmas seleccionats son estats déplacés.',
	'TOPICS_RESYNC_SUCCESS'		=> 'Los tèmas seleccionats son estats resynchronisés.',
	'TOPICS_TYPE_CHANGED'		=> 'Lo statut dels tèmas es estat modificat.',
	'TOPICS_UNLOCKED_SUCCESS'	=> 'Los tèmas seleccionats son estats déverrouillés.',
	'TOPIC_APPROVED_SUCCESS'	=> 'Lo tèma seleccionat es estat aprobat.',
	'TOPIC_DELETED_SUCCESS'		=> 'Lo tèma seleccionat es estat suprimit de la basa de donadas.',
	'TOPIC_DISAPPROVED_SUCCESS'	=> 'Lo tèma seleccionat es estat désapprouvé.',
	'TOPIC_FORKED_SUCCESS'		=> 'Lo tèma seleccionat es estat copié.',
	'TOPIC_LOCKED_SUCCESS'		=> 'Lo tèma seleccionat es estat varrolhat.',
	'TOPIC_MOVED_SUCCESS'		=> 'Lo tèma seleccionat es estat desplaçat.',
	'TOPIC_NOT_EXIST'			=> 'Lo tèma qu\'avètz seleccionat existís pas.',
	'TOPIC_RESYNC_SUCCESS'		=> 'Lo tèma seleccionat es estat resynchronisé.',
	'TOPIC_SPLIT_SUCCESS'		=> 'Lo tèma seleccionat es estat divisé.',
	'TOPIC_TIME'				=> 'Data del tèma',
	'TOPIC_TYPE_CHANGED'		=> 'Lo statut del tèma es estat modificat.',
	'TOPIC_UNLOCKED_SUCCESS'	=> 'Lo tèma seleccionat es estat déverrouillé.',
	'TOTAL_WARNINGS'			=> 'Total dels avertiments',

	'UNAPPROVED_POSTS_TOTAL'		=> 'I a, al total, <strong>%d</strong> messatges en espèra d\'aprovacion.',
	'UNAPPROVED_POSTS_ZERO_TOTAL'	=> 'I a pas cap de messatge en espèra d\'aprovacion.',
	'UNAPPROVED_POST_TOTAL'			=> 'Il reste <strong>1</strong> messatge en espèra d\'aprovacion.',
	'UNLOCK'						=> 'Déverrouiller',
	'UNLOCK_POST'					=> 'Déverrouiller lo messatge',
	'UNLOCK_POST_EXPLAIN'			=> 'Autoriza la modificacion',
	'UNLOCK_POST_POST'				=> 'Déverrouiller lo messatge',
	'UNLOCK_POST_POST_CONFIRM'		=> 'Sètz segur que volètz déverrouiller aqueste messatge e ainsi en autoriser la modificacion?',
	'UNLOCK_POST_POSTS'				=> 'Déverrouiller los messatges seleccionats',
	'UNLOCK_POST_POSTS_CONFIRM'		=> 'Sètz segur que volètz déverrouiller aquestes messatges e ainsi en autoriser la modificacion?',
	'UNLOCK_TOPIC'					=> 'Déverrouiller lo tèma',
	'UNLOCK_TOPIC_CONFIRM'			=> 'Sètz segur que volètz déverrouiller aqueste tèma?',
	'UNLOCK_TOPICS'					=> 'Déverrouiller los tèmas seleccionats',
	'UNLOCK_TOPICS_CONFIRM'			=> 'Sètz segur que volètz déverrouiller totes los tèmas seleccionats?',
	'USER_CANNOT_POST'				=> 'Podètz pas enviar dins aqueste forum.',
	'USER_CANNOT_REPORT'			=> 'Podètz pas rapporter de messatge dins aqueste forum.',
	'USER_FEEDBACK_ADDED'			=> 'Lo comentari sus l\'utilizaire es estat apondut.',
	'USER_WARNING_ADDED'			=> 'L\'utilizaire es estat averti.',

	'VIEW_DETAILS'			=> 'Veire los detalhs',

	'WARNED_USERS'			=> 'Utilizaires avertis',
	'WARNED_USERS_EXPLAIN'	=> 'Tièra dels utilizaires dont los avertiments donnés son encara valables.',
	'WARNING_PM_BODY'		=> 'Çò que seguís es un avertiment qui vos es estat adressé per un administrator o un moderaire.[quote]%s[/quote]',
	'WARNING_PM_SUBJECT'	=> 'Avertissement!',
	'WARNING_POST_DEFAULT'	=> 'Ceci es un avertiment que concernisson aqueste messatge qu\'avètz posté : %s .',
	'WARNINGS_ZERO_TOTAL'	=> 'Pas cap de avertiment.',

	'YOU_SELECTED_TOPIC'	=> 'Avètz seleccionat lo tèma n° %d : %s.',

	'report_reasons'		=> array(
		'TITLE'	=> array(
			'WAREZ'		=> 'Warez/Piratage',
			'SPAM'		=> 'Spam/Pub',
			'OFF_TOPIC'	=> 'Hors tèma',
			'OTHER'		=> 'Autre',
		),
		'DESCRIPTION' => array(
			'WAREZ'		=> 'Aqueste messatge conten dels ligams de logiciels illégaux o piratés.',
			'SPAM'		=> 'Lo messatge raportat es un messatge publicitaire per un sit web o autre.',
			'OFF_TOPIC'	=> 'Lo messatge raportat es hors tèma.',
			'OTHER'		=> 'Lo messatge raportat ne s\'adapte a aucune autre catégorie, utilizatz lo champ d\'information complémentaire.',
		)
	),
));

?>
