<?php
/**
*
* mcp [Catalan (Valencian)]
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
	'ACTION'				=> 'Acció',
	'ACTION_NOTE'			=> 'Acció/Nota',
	'ADD_FEEDBACK'			=> 'Afegir comentari',
	'ADD_FEEDBACK_EXPLAIN'	=> 'Per enviar un informe, ompliu el següent formulari. Feu servir només text pla ja que HTML, BBCode, etc. no estan permesos.',
	'ADD_WARNING'			=> 'Afegir avís',
	'ADD_WARNING_EXPLAIN'	=> 'Per enviar un informe, ompliu el següent formulari. Feu servir només text pla ja que HTML, BBCode, etc. no estan permesos.',
	'ALL_ENTRIES'			=> 'Totes les entrades',
	'ALL_NOTES_DELETED'		=> 'S\'han esborrat tots els apunts de l\'usuari.',
	'ALL_REPORTS'			=> 'Tots els informes',
	'ALREADY_REPORTED'		=> 'Aquest missatge ja ha estat reportat.',
	'ALREADY_WARNED'		=> 'Ja s\'ha enviat un avís sobre aquest missatge.',
	'APPROVE'				=> 'Aprova',
	'APPROVE_POST'			=> 'Aprova missatge',
	'APPROVE_POST_CONFIRM'	=> 'Esteu segurs que voleu aprovar aquest missatge?',
	'APPROVE_POSTS'			=> 'Aprova missatges',
	'APPROVE_POSTS_CONFIRM'	=> 'Esteu segurs que voleu aprovar els missatges seleccionats?',

	'CANNOT_MOVE_SAME_FORUM'=> 'No podeu moure un tema al mateix fòrum al qual ja es troba.',
	'CANNOT_WARN_ANONYMOUS'	=> 'No podeu avisar d\'usuaris visitants.',
	'CANNOT_WARN_SELF'		=> 'No podeu avisar de vosaltres mateixos.',
	'CAN_LEAVE_BLANK'		=> 'Això podeu deixar-ho en blanc.',
	'CHANGE_POSTER'			=> 'Canvia autor',
	'CLOSE_REPORT'			=> 'Tanca informe',
	'CLOSE_REPORT_CONFIRM'	=> 'Esteu segurs que voleu tancar l\'informe seleccionat?',
	'CLOSE_REPORTS'			=> 'Tanca informes',
	'CLOSE_REPORTS_CONFIRM'	=> 'Esteu segurs que voleu tancar els informes seleccionats?',

	'DELETE_POSTS'				=> 'Esborra missatges',
	'DELETE_POSTS_CONFIRM'		=> 'Esteu segurs que voleu esborrar aquests missatges?',
	'DELETE_POST_CONFIRM'		=> 'Esteu segurs que voleu aquest missatge?',
	'DELETE_REPORT'				=> 'Esborra informe',
	'DELETE_REPORT_CONFIRM'		=> 'Esteu segurs que voleu l\'informe seleccionat?',
	'DELETE_REPORTS'			=> 'Esborra informes',
	'DELETE_REPORTS_CONFIRM'	=> 'Esteu segurs que voleu els informes seleccionats?',
	'DELETE_SHADOW_TOPIC'		=> 'Esborra tema enllaçat',
	'DELETE_TOPICS'				=> 'Esborra els temes seleccionats',
	'DELETE_TOPICS_CONFIRM'		=> 'Esteu segurs que voleu esborrar aquests temes?',
	'DELETE_TOPIC_CONFIRM'		=> 'Esteu segurs que voleu esborrar aquest tema?',
	'DISAPPROVE'				=> 'Desaprova',
	'DISAPPROVE_REASON'			=> 'Raó per la desaprovació',
	'DISAPPROVE_POST'			=> 'Desaprova missatge',
	'DISAPPROVE_POST_CONFIRM'	=> 'Esteu segurs que voleu desaprovar aquest missatge?',
	'DISAPPROVE_POSTS'			=> 'Desaprova missatges',
	'DISAPPROVE_POSTS_CONFIRM'	=> 'Esteu segurs que voleu desaprovar aquests missatges?',
	'DISPLAY_LOG'				=> 'Mostra entrades anteriors',
	'DISPLAY_OPTIONS'			=> 'Mostra opcions',

	'EMPTY_REPORT'					=> 'Heu d\'introduir una descripció quan seleccioneu aquesta raó.',
	'EMPTY_TOPICS_REMOVED_WARNING'	=> 'Un o més temes s\'han esborrat de la base de dades perquè eren buits.',

	'FEEDBACK'				=> 'Comentaris',
	'FORK'					=> 'Copia',
	'FORK_TOPIC'			=> 'Copia el tema',
	'FORK_TOPIC_CONFIRM'	=> 'Esteu segurs que voleu copy this topic?',
	'FORK_TOPICS'			=> 'Copia els temes seleccionats',
	'FORK_TOPICS_CONFIRM'	=> 'Esteu segurs que voleu copy the selected topics?',
	'FORUM_DESC'			=> 'Descripció',
	'FORUM_NAME'			=> 'Nom del fòrum',
	'FORUM_NOT_EXIST'		=> 'El fòrum que heu seleccionat no existeix.',
	'FORUM_NOT_POSTABLE'	=> 'No es pot escriure al fòrum que heu seleccionat.',
	'FORUM_STATUS'			=> 'Estat del fòrum',
	'FORUM_STYLE'			=> 'Estil del fòrum',

	'GLOBAL_ANNOUNCEMENT'	=> 'Anunci global',

	'IP_INFO'				=> 'Informació de l\'adreça IP',
	'IPS_POSTED_FROM'		=> 'IP de l\'usuari que ha escrit l\'informe',

	'LATEST_LOGS'				=> 'Darreres 5 accions',
	'LATEST_REPORTED'			=> 'Darrers 5 informes',
	'LATEST_UNAPPROVED'			=> 'Darres 5 missatges esperant aprovació',
	'LATEST_WARNING_TIME'		=> 'Darrer avís publicat',
	'LATEST_WARNINGS'			=> 'Darrers 5 avisos',
	'LEAVE_SHADOW'				=> 'Deixa un enllaç del tema',
	'LIST_REPORT'				=> '1 informe',
	'LIST_REPORTS'				=> '%d informes',
	'LOCK'						=> 'Bloqueja',
	'LOCK_POST_POST'			=> 'Bloqueja missatge',
	'LOCK_POST_POST_CONFIRM'	=> 'Esteu segurs que voleu evitar que s\'edite aquest missatge?',
	'LOCK_POST_POSTS'			=> 'Bloqueja el missatges seleccionats',
	'LOCK_POST_POSTS_CONFIRM'	=> 'Esteu segurs que voleu que s\'editen aquests missatges?',
	'LOCK_TOPIC_CONFIRM'		=> 'Esteu segurs que voleu bloquejar aquest tema?',
	'LOCK_TOPICS'				=> 'Bloqueja els temes seleccionats',
	'LOCK_TOPICS_CONFIRM'		=> 'Esteu segurs que voleu bloquejar tots els temes seleccionats?',
	'LOGS_CURRENT_TOPIC'		=> 'S\'està veient els registres de:',
	'LOGIN_EXPLAIN_MCP'			=> 'Per moderar aquest fòrum heu d\'haver entrat.',
	'LOGVIEW_VIEWTOPIC'			=> 'Veure tema',
	'LOGVIEW_VIEWLOGS'			=> 'Veure registre del tema',
	'LOGVIEW_VIEWFORUM'			=> 'Veure fòrum',
	'LOOKUP_ALL'				=> 'Veure totes les IPs',
	'LOOKUP_IP'					=> 'Veure IP',

	'MARKED_NOTES_DELETED'		=> 'S\'han esborrat tots els apunts marcats de l\'usuari.',

	'MCP_ADD'						=> 'Afegir un avís',

	'MCP_BAN'					=> 'Bandeig',
	'MCP_BAN_EMAILS'			=> 'Bandeja e-mails',
	'MCP_BAN_IPS'				=> 'Bandeja IPs',
	'MCP_BAN_USERNAMES'			=> 'Bandeja noms d\'usuari',

	'MCP_LOGS'						=> 'Registre de moderadors',
	'MCP_LOGS_FRONT'				=> 'Pàgina principal',
	'MCP_LOGS_FORUM_VIEW'			=> 'Registres del fòrum',
	'MCP_LOGS_TOPIC_VIEW'			=> 'Registres del tema',

	'MCP_MAIN'						=> 'Inici',
	'MCP_MAIN_FORUM_VIEW'			=> 'Veure fòrum',
	'MCP_MAIN_FRONT'				=> 'Pàgina principal',
	'MCP_MAIN_POST_DETAILS'			=> 'Detalls del missatge',
	'MCP_MAIN_TOPIC_VIEW'			=> 'Veure tema',
	'MCP_MAKE_ANNOUNCEMENT'			=> 'Canvia a “Anunci”',
	'MCP_MAKE_ANNOUNCEMENT_CONFIRM'	=> 'Esteu segurs que voleu canviar aquest tema a “Anunci”?',
	'MCP_MAKE_ANNOUNCEMENTS'		=> 'Canvia a “Anuncis”',
	'MCP_MAKE_ANNOUNCEMENTS_CONFIRM'=> 'Esteu segurs que voleu canviar els temes seleccionats a “Anuncis“?',
	'MCP_MAKE_GLOBAL'				=> 'Canvia a “Anunci global”',
	'MCP_MAKE_GLOBAL_CONFIRM'		=> 'Esteu segurs que voleu canviar aquest tema a ”Anunci global”?',
	'MCP_MAKE_GLOBALS'				=> 'Canvia a “Anuncis globals”',
	'MCP_MAKE_GLOBALS_CONFIRM'		=> 'Esteu segurs que voleu canviar els temes seleccionats a “Anuncis globals”?',
	'MCP_MAKE_STICKY'				=> 'Canvia a “Recurrent”',
	'MCP_MAKE_STICKY_CONFIRM'		=> 'Esteu segurs que voleu canviar aquest tema a “Recurrent”?',
	'MCP_MAKE_STICKIES'				=> 'Canvia a “Recurrents”',
	'MCP_MAKE_STICKIES_CONFIRM'		=> 'Esteu segurs que voleu canviar els temes seleccionats a “Recurrents”?',
	'MCP_MAKE_NORMAL'				=> 'Canvia a “Tema estàndard”',
	'MCP_MAKE_NORMAL_CONFIRM'		=> 'Esteu segurs que voleu canviar aquest tema a “Tema estàndard”?',
	'MCP_MAKE_NORMALS'				=> 'Canvia a “Temes estàndard”',
	'MCP_MAKE_NORMALS_CONFIRM'		=> 'Esteu segurs que voleu canviar els temes seleccionats a “Temes estándard”?',

	'MCP_NOTES'						=> 'Notes de l\'usuari',
	'MCP_NOTES_FRONT'				=> 'Pàgina principal',
	'MCP_NOTES_USER'				=> 'Detalls de l\'usuari',

	'MCP_POST_REPORTS'				=> 'Informes publicats en aquest missatge',

	'MCP_REPORTS'					=> 'Missatges reportats',
	'MCP_REPORT_DETAILS'			=> 'Detalls de l\'informe',
	'MCP_REPORTS_CLOSED'			=> 'Informes tancats',
	'MCP_REPORTS_CLOSED_EXPLAIN'	=> 'En aquesta llista hi són tots els informes reportats que ja s\'han revisat i resolt.',
	'MCP_REPORTS_OPEN'				=> 'Informes oberts',
	'MCP_REPORTS_OPEN_EXPLAIN'		=> 'En aquesta llista hi són tots els informes reportats que estan esperant revisió.',

	'MCP_QUEUE'								=> 'Cua de moderació',
	'MCP_QUEUE_APPROVE_DETAILS'				=> 'Detalls d\'aprovació',
	'MCP_QUEUE_UNAPPROVED_POSTS'			=> 'Missatges esperant aprovació',
	'MCP_QUEUE_UNAPPROVED_POSTS_EXPLAIN'	=> 'En aquesta llista hi són tots els missatges que requereixen aprovació abans de ser visibles per a la resta d\'usuaris.',
	'MCP_QUEUE_UNAPPROVED_TOPICS'			=> 'Temes esperant aprovació',
	'MCP_QUEUE_UNAPPROVED_TOPICS_EXPLAIN'	=> 'En aquesta llista hi són tots els temes que requereixen aprovació abans de ser visibles per a la resta d\'usuaris.',

	'MCP_VIEW_USER'			=> 'Veure els avisos d\'un usuari',

	'MCP_WARN'				=> 'Avisos',
	'MCP_WARN_FRONT'		=> 'Pàgina principal',
	'MCP_WARN_LIST'			=> 'Llistat d\'avisos',
	'MCP_WARN_POST'			=> 'Avisar d\'un missatge concret',
	'MCP_WARN_USER'			=> 'Avisar d\'un usuari',

	'MERGE_POSTS'			=> 'Fusiona els missatges',
	'MERGE_POSTS_CONFIRM'	=> 'Esteu segurs que voleu fusionar els missatges seleccionats?',
	'MERGE_TOPIC_EXPLAIN'	=> 'Amb el següent formulari podeu fusionar els missatges seleccionats en un altre tema. Aquests missatges no es tornaran a ordenar, sinó que apareixeran com si els usuaris els hagueren publicat en un nou tema.<br />Seleccioneu el tema de destinació o cliqueu sobre “Selecciona tema” per cercar-ne un.',
	'MERGE_TOPIC_ID'		=> 'Número d\'identificació del tema de destinació',
	'MERGE_TOPICS'			=> 'Fusiona temes',
	'MERGE_TOPICS_CONFIRM'	=> 'Esteu segurs que voleu fusionar els temes seleccionats?',
	'MODERATE_FORUM'		=> 'Modera fòrum',
	'MODERATE_TOPIC'		=> 'Modera tema',
	'MODERATE_POST'			=> 'Modera missatge',
	'MOD_OPTIONS'			=> 'Modera opcions',
	'MORE_INFO'				=> 'Informació adiciona',
	'MOST_WARNINGS'			=> 'Usuaris amb més avisos',
	'MOVE_TOPIC_CONFIRM'	=> 'Esteu segurs que voleu move the topic into a new forum?',
	'MOVE_TOPICS'			=> 'Moure els temes seleccionats',
	'MOVE_TOPICS_CONFIRM'	=> 'Esteu segurs que voleu moure els temes seleccionats a un nou fòrum?',

	'NOTIFY_POSTER_APPROVAL'		=> 'Notifica a l\'autor sobre l\'aprovació?',
	'NOTIFY_POSTER_DISAPPROVAL'		=> 'Notifica a l\'autor sobre la desaprovació?',
	'NOTIFY_USER_WARN'				=> 'Notifica a l\'usuari sobre l\'avís?',
	'NOT_MODERATOR'					=> 'No sou moderadors d\'aquest fòrum.',
	'NO_DESTINATION_FORUM'			=> 'Seleccioneu el fòrum de destinació.',
	'NO_DESTINATION_FORUM_FOUND'	=> 'No hi ha fòrum de destinació disponible.',
	'NO_ENTRIES'					=> 'No hi ha entrades al registre durant aquest període.',
	'NO_FEEDBACK'					=> 'No hi ha comentaris per a aquest usuari.',
	'NO_FINAL_TOPIC_SELECTED'		=> 'Heu de seleccionar un tema de destinació per a fusionar els missatges.',
	'NO_MATCHES_FOUND'				=> 'No s\'ha trobat cap resultat.',
	'NO_POST'						=> 'Heu de seleccionar un missatge abans d\'avisar.',
	'NO_POST_REPORT'				=> 'Aquest missatge no s\'ha reportat.',
	'NO_POST_SELECTED'				=> 'Heu de seleccionar almenys un missatge per dur a terme aquesta acció.',
	'NO_REASON_DISAPPROVAL'			=> 'Doneu una raó apropiada per a la desaprovació.',
	'NO_REPORT'						=> 'No s\'ha trobat cap informe',
	'NO_REPORTS'					=> 'No hi ha cap informe',	
	'NO_REPORT_SELECTED'			=> 'Heu de seleccionar almenys un informe per dur a terme aquesta acció.',
	'NO_TOPIC_ICON'					=> 'No',
	'NO_TOPIC_SELECTED'				=> 'Heu de seleccionar almenys un tema per dur a terme aquesta acció.',
	'NO_TOPICS_QUEUE'				=> 'No hi ha cap tema esperant aprovació.',

	'ONLY_TOPIC'			=> 'Només tema "%s"',
	'OTHER_USERS'			=> 'Altres usuaris escrivint des d\'aquesta IP',

	'POSTER'					=> 'Autor',
	'POSTS_APPROVED_SUCCESS'	=> 'Els missatges seleccionats s\'han aprovat.',
	'POSTS_DELETED_SUCCESS'		=> 'Els missatges seleccionats s\'han esborrat de la base de dades.',
	'POSTS_DISAPPROVED_SUCCESS'	=> 'Els missatges seleccionats s\'han desaprovat.',
	'POSTS_LOCKED_SUCCESS'		=> 'Els missatges seleccionats s\'han bloquejat.',
	'POSTS_MERGED_SUCCESS'		=> 'Els missatges seleccionats s\'han fusionat.',
	'POSTS_UNLOCKED_SUCCESS'	=> 'Els missatges seleccionats s\'han desbloquejat.',
	'POSTS_PER_PAGE'			=> 'Missatges per pàgina',
	'POSTS_PER_PAGE_EXPLAIN'	=> '(Set to 0 to view all posts.)',
	'POST_APPROVED_SUCCESS'		=> 'El missatge seleccionat s\'ha aprovat.',
	'POST_DELETED_SUCCESS'		=> 'El missatge seleccionat s\'ha esborrat de la base de dades.',
	'POST_DISAPPROVED_SUCCESS'	=> 'El missatge seleccionat s\'ha desaprovat.',
	'POST_LOCKED_SUCCESS'		=> 'Missatge bloquejat.',
	'POST_NOT_EXIST'			=> 'El missatge que busqueu no existeix.',
	'POST_REPORTED_SUCCESS'		=> 'S\'ha reportat aquest missatge.',
	'POST_UNLOCKED_SUCCESS'		=> 'Missatge desbloquejat.',

	'READ_USERNOTES'			=> 'Notes de l\'usuari',
	'READ_WARNINGS'				=> 'Avisos de l\'usuari',
	'REPORTER'					=> 'Qui ha reportat',
	'REPORTED'					=> 'Reportat',
	'REPORTED_BY'				=> 'Reportat per',
	'REPORTED_ON_DATE'			=> 'el',
	'REPORTS_CLOSED_SUCCESS'	=> 'Els informes seleccionats s\'han tancat.',
	'REPORTS_DELETED_SUCCESS'	=> 'Els informes seleccionats s\'han esborrat.',
	'REPORTS_TOTAL'				=> 'En total hi ha <strong>%d</strong> informes per revisar.',
	'REPORTS_ZERO_TOTAL'		=> 'No hi ha cap informe per comprovar.',
	'REPORT_CLOSED'				=> 'Aquest informe ja s\'ha tancat.',
	'REPORT_CLOSED_SUCCESS'		=> 'L\'informe seleccionat s\'ha tancat.',
	'REPORT_DELETED_SUCCESS'	=> 'L\'informe seleccionat s\'ha esborrat.',
	'REPORT_DETAILS'			=> 'Detalls de l\'informe',
	'REPORT_MESSAGE'			=> 'Reporta aquest missatge',
	'REPORT_MESSAGE_EXPLAIN'	=> 'Feu servir aquest formulari per reportar el missatge seleccionat. La reportació de missatges només s\'ha de fer en cas de que el missatge trenque les normes del fòrum.',
	'REPORT_NOTIFY'				=> 'Notifica\'m',
	'REPORT_NOTIFY_EXPLAIN'		=> 'Us informarà quan el vostre informe siga atés.',
	'REPORT_POST_EXPLAIN'		=> 'Feu servir aquest formulari per informar del missatge seleccionat als moderadors o administradors del fòrum.La reportació de missatges només s\'ha de fer en cas de que el missatge trenque les normes del fòrum.',
	'REPORT_REASON'				=> 'Raó de l\'avís',
	'REPORT_TIME'				=> 'Hora de l\'avís',
	'REPORT_TOTAL'				=> 'En total hi ha <strong>1</strong> informe per revisar.',
	'RESYNC'					=> 'Resync',
	'RETURN_MESSAGE'			=> '%sTorna al missatge%s',
	'RETURN_NEW_FORUM'			=> '%sTorna al nou fòrum%s',
	'RETURN_NEW_TOPIC'			=> '%sTorna al nou tema%s',
	'RETURN_POST'				=> '%sTorna al missatge%s',
	'RETURN_QUEUE'				=> '%sTorna a la cua%s',
	'RETURN_REPORTS'			=> '%sTorna als informes%s',
	'RETURN_TOPIC_SIMPLE'		=> '%sTorna al tema%s',

	'SEARCH_POSTS_BY_USER'				=> 'Cerca per',
	'SELECT_ACTION'						=> 'Seleccioneu l\'acció que voleu dur a terme',
	'SELECT_FORUM_GLOBAL_ANNOUNCEMENT'	=> 'Seleccioneu el fòrum on voleu que es publique aquest anunci global.',
	'SELECT_FORUM_GLOBAL_ANNOUNCEMENTS'	=> 'Un o més dels temes seleccionats són anuncis globals. Seleccioneu el fòrum on voleu que es publiquen.',
	'SELECT_MERGE'						=> 'Selecciona per fusionar',
	'SELECT_TOPICS_FROM'				=> 'Selecciona temes des de',
	'SELECT_TOPIC'						=> 'Selecciona tema',
	'SELECT_USER'						=> 'Selecciona usuari',
	'SORT_ACTION'						=> 'Registre d\'accions',
	'SORT_DATE'							=> 'Data',
	'SORT_IP'							=> 'Adreça IP',
	'SORT_WARNINGS'						=> 'Avisos',
	'SPLIT_AFTER'						=> 'Retalla des del missatge seleccionat',
	'SPLIT_FORUM'						=> 'Fòrum per al nou tema',
	'SPLIT_POSTS'						=> 'Retalla els missatges seleccionats',
	'SPLIT_SUBJECT'						=> 'Nou títol del tema',
	'SPLIT_TOPIC_ALL'					=> 'Retalla el tema des dels missatges seleccionats',
	'SPLIT_TOPIC_ALL_CONFIRM'			=> 'Esteu segurs que voleu retallar aquest tema?',
	'SPLIT_TOPIC_BEYOND'				=> 'Retalla el tema des del missatge seleccionat',
	'SPLIT_TOPIC_BEYOND_CONFIRM'		=> 'Esteu segurs que voleu retallar aquest tema des del missatge seleccionat?',
	'SPLIT_TOPIC_EXPLAIN'				=> 'Amb el formulari següent, podreu retallar un tema en dos, bé seleccionant els missatges individualment o bé retallant des d\'un missatge seleccionat.',

	'THIS_POST_IP'				=> 'IP d\'aquest missatge',
	'TOPICS_APPROVED_SUCCESS'	=> 'Els temes seleccionats s\'han aprovat.',
	'TOPICS_DELETED_SUCCESS'	=> 'Els temes seleccionats s\'han esborrat de la base de dades.',
	'TOPICS_DISAPPROVED_SUCCESS'=> 'Els temes seleccionats s\'han desaprovat.',
	'TOPICS_FORKED_SUCCESS'		=> 'Els temes seleccionats s\'han copia.',
	'TOPICS_LOCKED_SUCCESS'		=> 'Els temes seleccionats s\'han bloquejat.',
	'TOPICS_MOVED_SUCCESS'		=> 'Els temes seleccionats s\'han mogut.',
	'TOPICS_RESYNC_SUCCESS'		=> 'Els temes seleccionats s\'han tornat a sincronitzar.',
	'TOPICS_TYPE_CHANGED'		=> 'S\'ha canviat el tipus dels temes.',
	'TOPICS_UNLOCKED_SUCCESS'	=> 'Els temes seleccionats s\'han desbloquejat.',
	'TOPIC_APPROVED_SUCCESS'	=> 'Els tema seleccionat s\'ha aprovat.',
	'TOPIC_DELETED_SUCCESS'		=> 'Els tema seleccionat s\'ha esborrat de la base de dades.',
	'TOPIC_DISAPPROVED_SUCCESS'	=> 'Els tema seleccionat s\'ha desaprovat.',
	'TOPIC_FORKED_SUCCESS'		=> 'Els tema seleccionat s\'ha copiat.',
	'TOPIC_LOCKED_SUCCESS'		=> 'Els tema seleccionat s\'ha bloquejat.',
	'TOPIC_MOVED_SUCCESS'		=> 'Els tema seleccionat s\'ha mogut.',
	'TOPIC_NOT_EXIST'			=> 'El tema que heu seleccionat no existeix.',
	'TOPIC_RESYNC_SUCCESS'		=> 'Els tema seleccionat s\'ha tornat a sincronitzar.',
	'TOPIC_SPLIT_SUCCESS'		=> 'Els tema seleccionat s\'ha retallat.',
	'TOPIC_TIME'				=> 'Hora del tema',
	'TOPIC_TYPE_CHANGED'		=> 'S\'ha canviat el tipus del tema.',
	'TOPIC_UNLOCKED_SUCCESS'	=> 'Els tema seleccionat s\'ha desbloquejat.',
	'TOTAL_WARNINGS'			=> 'Avisos totals',

	'UNAPPROVED_POSTS_TOTAL'		=> 'En total hi ha <strong>%d</strong> missatges esperant aprovació.',
	'UNAPPROVED_POSTS_ZERO_TOTAL'	=> 'No hi ha cap missatge esperant aprovació.',
	'UNAPPROVED_POST_TOTAL'			=> 'En total hi ha <strong>1</strong> missatge esperant aprovació waiting for approval.',
	'UNLOCK'						=> 'Desbloqueja',
	'UNLOCK_POST'					=> 'Desbloqueja missatge',
	'UNLOCK_POST_EXPLAIN'			=> 'Permetre edició',
	'UNLOCK_POST_POST'				=> 'Desbloqueja missatge',
	'UNLOCK_POST_POST_CONFIRM'		=> 'Esteu segurs que voleu permetre l\'edició d\'aquest missatge?',
	'UNLOCK_POST_POSTS'				=> 'Desbloqueja els missatges seleccionats',
	'UNLOCK_POST_POSTS_CONFIRM'		=> 'Esteu segurs que voleu permetre l\'edició dels missatges seleccionats?',
	'UNLOCK_TOPIC'					=> 'Desbloqueja tema',
	'UNLOCK_TOPIC_CONFIRM'			=> 'Esteu segurs que voleu desbloquejar aquest tema?',
	'UNLOCK_TOPICS'					=> 'Desbloqueja els temes seleccionats',
	'UNLOCK_TOPICS_CONFIRM'			=> 'Esteu segurs que voleu desbloquejar els temes seleccionats?',
	'USER_CANNOT_POST'				=> 'No podeu publicar en aquest fòrum.',
	'USER_CANNOT_REPORT'			=> 'No podeu reportar missatges en aquest fòrum.',
	'USER_FEEDBACK_ADDED'			=> 'Comentari de l\'usuari afegit.',
	'USER_WARNING_ADDED'			=> 'S\'ha avisat d\'aquest usuari.',

	'VIEW_DETAILS'			=> 'Veure detalls',

	'WARNED_USERS'			=> 'Usuaris avisats',
	'WARNED_USERS_EXPLAIN'	=> 'En aquesta llista hi són els usuaris amb avisos que no han caducat.',
	'WARNING_PM_BODY'		=> 'Això és un avís que un administrador o moderador us han enviat.[quote]%s[/quote]',
	'WARNING_PM_SUBJECT'	=> 'S\'ha publicat l\'avís',
	'WARNING_POST_DEFAULT'	=> 'Aquest és un avís del següent missatge que vau publicar: %s .',
	'WARNINGS_ZERO_TOTAL'	=> 'No hi ha cap avís.',

	'YOU_SELECTED_TOPIC'	=> 'Heu seleccionat el tema número %d: %s.',

	'report_reasons'		=> array(
		'TITLE'	=> array(
			'WAREZ'		=> 'Warez',
			'SPAM'		=> 'Brossa',
			'OFF_TOPIC'	=> 'Fora de tema',
			'OTHER'		=> 'Altre',
		),
		'DESCRIPTION' => array(
			'WAREZ'		=> 'El tema conté enllaços a programari il·legal o amb llicència privativa.',
			'SPAM'		=> 'El tema només té la finalitat de fer publicitat d\'un lloc web o producte.',
			'OFF_TOPIC'	=> 'El tema està fora de tema.',
			'OTHER'		=> 'El tema no concorda amb les altres categories. És altra raó.',
		)
	),
));

?>
