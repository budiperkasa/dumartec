<?php
/** 
*
* mcp [Catalan]
*
* @package language
* @version $Id: mcp.php 8940 2008-09-26 11:25:04Z toonarmy $
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
	'ACTION'				=> 'Acció',
	'ACTION_NOTE'			=> 'Acció/Nota',
	'ADD_FEEDBACK'			=> 'Afegeix un comentari',
	'ADD_FEEDBACK_EXPLAIN'	=> 'Si voleu afegir un informe sobre això, ompliu el formulari següent. Utilitzeu només text net; no es permet l’HTML ni el BBCode.',
	'ADD_WARNING'			=> 'Afegeix un advertiment',
	'ADD_WARNING_EXPLAIN'	=> 'Per enviar un advertiment a aquest usuari, ompiu el formulari següent. Utilitzeu només text net; no es permet l’HTML ni el BBCode.',
	'ALL_ENTRIES'			=> 'Tots els registres',
	'ALL_NOTES_DELETED'		=> 'S’han eliminat totes les notes sobre l’usuari correctament.',
	'ALL_REPORTS'			=> 'Tots els informes',
	'ALREADY_REPORTED'		=> 'Ja s’ha informat d’aquesta entrada.',
	'ALREADY_WARNED'		=> 'Ja s’ha emès un advertiment per aquesta entrada.',
	'APPROVE'				=> 'Aprova',
	'APPROVE_POST'			=> 'Aprova l’entrada',
	'APPROVE_POST_CONFIRM'	=> 'Esteu segur que voleu aprovar aquesta entrada?',
	'APPROVE_POSTS'			=> 'Aprova les entrades',
	'APPROVE_POSTS_CONFIRM'	=> 'Esteu segur que voleu aprovar les entrades seleccionades?',

	'CANNOT_MOVE_SAME_FORUM'=> 'No podeu desplaçar un tema al mateix fòrum en que es troba.',
	'CANNOT_WARN_ANONYMOUS'	=> 'No podeu fer advertiments a usuaris visitants sense registrar.',
	'CANNOT_WARN_SELF'		=> 'No podeu fer-vos un advertiment a vós mateix.',
	'CAN_LEAVE_BLANK'		=> 'Podeu deixar-ho en blanc.',
	'CHANGE_POSTER'			=> 'Canvia l’autor',
	'CLOSE_REPORT'			=> 'Tanca l’informe',
	'CLOSE_REPORT_CONFIRM'	=> 'Esteu segur que voleu tancar l’informe seleccionat?',
	'CLOSE_REPORTS'			=> 'Tanca els informes',
	'CLOSE_REPORTS_CONFIRM'	=> 'Esteu segur que voleu tancar els informes seleccionats?',

	'DELETE_POSTS'				=> 'Elimina les entrades',
	'DELETE_POSTS_CONFIRM'		=> 'Esteu segur que voleu eliminar aquestes entrades?',
	'DELETE_POST_CONFIRM'		=> 'Esteu segur que voleu eliminar aquesta entrada?',
	'DELETE_REPORT'				=> 'Elimina l’informe',
	'DELETE_REPORT_CONFIRM'		=> 'Esteu segur que voleu eliminar l’informe seleccionat?',
	'DELETE_REPORTS'			=> 'Elimina els informes',
	'DELETE_REPORTS_CONFIRM'	=> 'Esteu segur que voleu eliminar els informes seleccionats?',
	'DELETE_SHADOW_TOPIC'		=> 'Elimina l’entrada ombra',
	'DELETE_TOPICS'				=> 'Elimina els temes seleccionats',
	'DELETE_TOPICS_CONFIRM'		=> 'Esteu segur que voleu eliminar aquests temes?',
	'DELETE_TOPIC_CONFIRM'		=> 'Esteu segur que voleu eliminar aquest tema?',
	'DISAPPROVE'				=> 'Rebutja',
	'DISAPPROVE_REASON'			=> 'Raó per la qual es rebutja',
	'DISAPPROVE_POST'			=> 'Rebutja l’entrada',
	'DISAPPROVE_POST_CONFIRM'	=> 'Esteu segur que voleu rebutjar aquesta entrada?',
	'DISAPPROVE_POSTS'			=> 'Rebutja les entrades',
	'DISAPPROVE_POSTS_CONFIRM'	=> 'Esteu segur que voleu rebutjar les entrades seleccionades?',
	'DISPLAY_LOG'				=> 'Mostra els registres dels darrers',
	'DISPLAY_OPTIONS'			=> 'Mostra les opcions',

	'EMPTY_REPORT'					=> 'Cal que introduïu una descripció quan seleccioneu aquesta raó.',
	'EMPTY_TOPICS_REMOVED_WARNING'	=> 'Tingueu en compte que un o més temes s’han eliminat de la base de dades perquè han quedat buits.',

	'FEEDBACK'				=> 'Comentaris',
	'FORK'					=> 'Copia',
	'FORK_TOPIC'			=> 'Copia el tema',
	'FORK_TOPIC_CONFIRM'	=> 'Esteu segur que voleu copiar aquest tema?',
	'FORK_TOPICS'			=> 'Copia els temes seleccionats',
	'FORK_TOPICS_CONFIRM'	=> 'Esteu segur que voleu copiar els temes seleccionats?',
	'FORUM_DESC'			=> 'Descripció',
	'FORUM_NAME'			=> 'Nom del fòrum',
	'FORUM_NOT_EXIST'		=> 'El fòrum que heu seleccionat no existeix.',
	'FORUM_NOT_POSTABLE'	=> 'En el fòrum que heu seleccionat no es poden crear entrades.',
	'FORUM_STATUS'			=> 'Estat del fòrum',
	'FORUM_STYLE'			=> 'Estil del fòrum',

	'GLOBAL_ANNOUNCEMENT'	=> 'Avís global',

	'IP_INFO'				=> 'Informació de l’adreça IP',
	'IPS_POSTED_FROM'		=> 'Adreces IP des de les quals aquest usuari ha escrit entrades',

	'LATEST_LOGS'				=> '5 darreres accions registrades',
	'LATEST_REPORTED'			=> '5 darrers informes',
	'LATEST_UNAPPROVED'			=> '5 darreres entrades en espera de ser aprovades',
	'LATEST_WARNING_TIME'		=> 'Darrer advertiment emès',
	'LATEST_WARNINGS'			=> '5 darrers advertiments',
	'LEAVE_SHADOW'				=> 'Deixa-hi un tema ombra',
	'LIST_REPORT'				=> '1 informe',
	'LIST_REPORTS'				=> '%d informes',
	'LOCK'						=> 'Bloqueja’l',
	'LOCK_POST_POST'			=> 'Bloqueja l’entrada',
	'LOCK_POST_POST_CONFIRM'	=> 'Esteu segur que voleu impedir l’edició d’aquesta entrada?',
	'LOCK_POST_POSTS'			=> 'Bloqueja les entrades seleccionades',
	'LOCK_POST_POSTS_CONFIRM'	=> 'Esteu segur que voleu impedir l’edició de les entrades seleccionades?',
	'LOCK_TOPIC_CONFIRM'		=> 'Esteu segur que voleu bloquejar aquest tema?',
	'LOCK_TOPICS'				=> 'Bloqueja els temes seleccionats',
	'LOCK_TOPICS_CONFIRM'		=> 'Esteu segur que voleu bloquejar tots els temes seleccionats?',
	'LOGS_CURRENT_TOPIC'		=> 'Actualment està veient els registres de:',
	'LOGIN_EXPLAIN_MCP'			=> 'Per moderar aquest fòrum cal que inicieu la sessió.',
	'LOGVIEW_VIEWTOPIC'			=> 'Mostra el tema',
	'LOGVIEW_VIEWLOGS'			=> 'Mostra el registre del tema',
	'LOGVIEW_VIEWFORUM'			=> 'Mostra el fòrum',
	'LOOKUP_ALL'				=> 'Cerca totes les IP',
	'LOOKUP_IP'					=> 'Cerca l’IP',

	'MARKED_NOTES_DELETED'		=> 'S’han eliminat totes les notes de l’usuari correctament.',

	'MCP_ADD'						=> 'Afegeix un advertiment',

	'MCP_BAN'					=> 'Bandeig',
	'MCP_BAN_EMAILS'			=> 'Bandeja adreces electròniques',
	'MCP_BAN_IPS'				=> 'Bandeja IP',
	'MCP_BAN_USERNAMES'			=> 'Bandeja noms d’usuari',

	'MCP_LOGS'						=> 'Registres per moderador',
	'MCP_LOGS_FRONT'				=> 'Pàgina principal',
	'MCP_LOGS_FORUM_VIEW'			=> 'Registres per fòrums',
	'MCP_LOGS_TOPIC_VIEW'			=> 'Registres per temes',

	'MCP_MAIN'						=> 'Principal',
	'MCP_MAIN_FORUM_VIEW'			=> 'Mostra el fòrum',
	'MCP_MAIN_FRONT'				=> 'Pàgina principal',
	'MCP_MAIN_POST_DETAILS'			=> 'Detalls de l’entrada',
	'MCP_MAIN_TOPIC_VIEW'			=> 'Mostra el tema',
	'MCP_MAKE_ANNOUNCEMENT'			=> 'Converteix-lo en un “Avís”',
	'MCP_MAKE_ANNOUNCEMENT_CONFIRM'	=> 'Esteu segur que voleu convertir aquest tema en un “Avís”?',
	'MCP_MAKE_ANNOUNCEMENTS'		=> 'Converteix-los en “Avisos”',
	'MCP_MAKE_ANNOUNCEMENTS_CONFIRM'=> 'Esteu segur que voleu convertir els temes seleccionats en “Avisos”?',
	'MCP_MAKE_GLOBAL'				=> 'Converteix-lo en un “Avís global”',
	'MCP_MAKE_GLOBAL_CONFIRM'		=> 'Esteu segur que voleu convertir aquest tema en un “Avís global”?',
	'MCP_MAKE_GLOBALS'				=> 'Converteix-los en “Avisos globals”',
	'MCP_MAKE_GLOBALS_CONFIRM'		=> 'Esteu segur que voleu convertir els temes seleccionats en “Avisos globals”?',
	'MCP_MAKE_STICKY'				=> 'Converteix-lo en un “Tema recurrent”',
	'MCP_MAKE_STICKY_CONFIRM'		=> 'Esteu segur que voleu convertir aquest tema en un “Tema recurrent”?',
	'MCP_MAKE_STICKIES'				=> 'Converteix-los en “Temes recurrents”',
	'MCP_MAKE_STICKIES_CONFIRM'		=> 'Esteu segur que voleu convertir els temes seleccionats en “Temes recurrents”?',
	'MCP_MAKE_NORMAL'				=> 'Converteix-lo en un “Tema estàndard”',
	'MCP_MAKE_NORMAL_CONFIRM'		=> 'Esteu segur que voleu convertir aquest tema en un “Tema estàndard”?',
	'MCP_MAKE_NORMALS'				=> 'Converteix-los en “Temes estàndard”',
	'MCP_MAKE_NORMALS_CONFIRM'		=> 'Esteu segur que voleu convertir els temes seleccionats en “Temes estàndard”?',

	'MCP_NOTES'						=> 'Notes de l’usuari',
	'MCP_NOTES_FRONT'				=> 'Pàgina principal',
	'MCP_NOTES_USER'				=> 'Detalls de l’usuari',

	'MCP_POST_REPORTS'				=> 'Informes emesos per aquesta entrada',

	'MCP_REPORTS'					=> 'Informes d’entrades',
	'MCP_REPORT_DETAILS'			=> 'Detalls de l’informe',
	'MCP_REPORTS_CLOSED'			=> 'Informes tancats',
	'MCP_REPORTS_CLOSED_EXPLAIN'	=> 'És una llista de tots els informes d’entrades resolts anteriorment.',
	'MCP_REPORTS_OPEN'				=> 'Informes oberts',
	'MCP_REPORTS_OPEN_EXPLAIN'		=> 'És una llista de totes les entrades de les quals s’ha informat i que encara s’han de gestionar.',

	'MCP_QUEUE'								=> 'Cua de moderació',
	'MCP_QUEUE_APPROVE_DETAILS'				=> 'Detalls d’aprovació',
	'MCP_QUEUE_UNAPPROVED_POSTS'			=> 'Entrades en espera d’aprovació',
	'MCP_QUEUE_UNAPPROVED_POSTS_EXPLAIN'	=> 'És una llista de totes les entrades que requereixen aprovació abans de ser visibles als usuaris.',
	'MCP_QUEUE_UNAPPROVED_TOPICS'			=> 'Temes en espera d’aprovació',
	'MCP_QUEUE_UNAPPROVED_TOPICS_EXPLAIN'	=> 'És una llista de tots els temes que requereixen aprovació abans de ser visibles als usuaris.',

	'MCP_VIEW_USER'			=> 'Mostra els advertiments d’un usuari determinat',

	'MCP_WARN'				=> 'Advertiments',
	'MCP_WARN_FRONT'		=> 'Pàgina principal',
	'MCP_WARN_LIST'			=> 'Llista d’advertiments',
	'MCP_WARN_POST'			=> 'Adverteix per una entrada en concret',
	'MCP_WARN_USER'			=> 'Adverteix un usuari',

	'MERGE_POSTS'			=> 'Combina les entrades',
	'MERGE_POSTS_CONFIRM'	=> 'Esteu segur que voleu combinar les entrades seleccionades?',
	'MERGE_TOPIC_EXPLAIN'	=> 'Podeu combinar les entrades seleccionades amb un altre tema nou utilitzant el formulari següent. Aquestes entrades no es reordenarán i apareixeran com si els usuaris les haguesin escrit en el tema nou.<br />Introduïu l’id del tema destí o feu clic sobre “Selecciona un tema” per buscar-ne un.',
	'MERGE_TOPIC_ID'		=> 'Número d’identificació del tema destí',
	'MERGE_TOPICS'			=> 'Combina els temes',
	'MERGE_TOPICS_CONFIRM'	=> 'Esteu segur que voleu combinar els temes seleccionats?',
	'MODERATE_FORUM'		=> 'Moderació del fòrum',
	'MODERATE_TOPIC'		=> 'Moderació del tema',
	'MODERATE_POST'			=> 'Moderació de l’entrada',
	'MOD_OPTIONS'			=> 'Opcions del moderador',
	'MORE_INFO'				=> 'Informació addicional',
	'MOST_WARNINGS'			=> 'Usuaris amb més advertiments',
	'MOVE_TOPIC_CONFIRM'	=> 'Esteu segur que voleu desplaçar el tema a un altre fòrum?',
	'MOVE_TOPICS'			=> 'Desplaça els temes seleccionats',
	'MOVE_TOPICS_CONFIRM'	=> 'Esteu segur que voleu desplaçar els temes seleccionats a un altre fòrum?',

	'NOTIFY_POSTER_APPROVAL'		=> 'Voleu notificar l’aprovació a l’autor?',
	'NOTIFY_POSTER_DISAPPROVAL'		=> 'Voleu notificar el rebuig a l’autor?',
	'NOTIFY_USER_WARN'				=> 'Voleu notificar l’usuari de l’advertiment?',
	'NOT_MODERATOR'					=> 'No sou moderador d’aquest fòrum.',
	'NO_DESTINATION_FORUM'			=> 'Si us plau, seleccioneu un fòrum de destí.',
	'NO_DESTINATION_FORUM_FOUND'	=> 'No hi ha cap fòrum de destí disponible.',
	'NO_ENTRIES'					=> 'No hi ha registres per aquest període.',
	'NO_FEEDBACK'					=> 'No hi ha comentaris sobre aquest usuari.',
	'NO_FINAL_TOPIC_SELECTED'		=> 'Heu de seleccionar un tema de destí per combinar-hi les entrades.',
	'NO_MATCHES_FOUND'				=> 'No s’ha trobat cap coincidència.',
	'NO_POST'						=> 'Heu de seleccionar una entrada si voleu advertir un usuari sobre una entrada.',
	'NO_POST_REPORT'				=> 'No s’ha informat d’aquesta entrada.',
	'NO_POST_SELECTED'				=> 'Heu de seleccionar com a mínim una entrada per dur a terme aquesta acció.',
	'NO_REASON_DISAPPROVAL'			=> 'Si us plau, doneu una raó apropiada per al rebuig.',
	'NO_REPORT'						=> 'No s’ha trobat cap informe',
	'NO_REPORTS'					=> 'No s’ha trobat cap informe',
	'NO_REPORT_SELECTED'			=> 'Heu de seleccionar com a mínim un informe per dur a terme aquesta acció.',
	'NO_TOPIC_ICON'					=> 'Cap',
	'NO_TOPIC_SELECTED'				=> 'Heu de seleccionar com a mínim un tema per dur a terme aquesta acció.',
	'NO_TOPICS_QUEUE'				=> 'No hi ha cap tema pendent d’aprovació.',

	'ONLY_TOPIC'			=> 'Només el tema “%s”',
	'OTHER_USERS'			=> 'Altres usuaris que publiquen des d’aquesta IP',

	'POSTER'					=> 'Autor',
	'POSTS_APPROVED_SUCCESS'	=> 'S’han aprovat les entrades seleccionades.',
	'POSTS_DELETED_SUCCESS'		=> 'S’han eliminat les entrades de la base de dades correctament.',
	'POSTS_DISAPPROVED_SUCCESS'	=> 'S’han rebutjat les entrades seleccionades.',
	'POSTS_LOCKED_SUCCESS'		=> 'S’han bloquejat les entrades seleccionades correctament.',
	'POSTS_MERGED_SUCCESS'		=> 'S’han combinat les entrades seleccionades.',
	'POSTS_UNLOCKED_SUCCESS'	=> 'S’han desbloquejat les entrades seleccionades correctament.',
	'POSTS_PER_PAGE'			=> 'Entrades per pàgina',
	'POSTS_PER_PAGE_EXPLAIN'	=> '(Poseu un 0 per veure totes les entrades.)',
	'POST_APPROVED_SUCCESS'		=> 'S’ha aprovat l’entrada seleccionada.',
	'POST_DELETED_SUCCESS'		=> 'S’ha eliminat l’entrada de la base de dades correctament.',
	'POST_DISAPPROVED_SUCCESS'	=> 'S’ha rebutjat l’entrada seleccionada.',
	'POST_LOCKED_SUCCESS'		=> 'S’ha bloquejat l’entrada correctament.',
	'POST_NOT_EXIST'			=> 'L’entrada que heu sol·licitat no existeix.',
	'POST_REPORTED_SUCCESS'		=> 'S’ha informat correctament d’aquesta entrada.',
	'POST_UNLOCKED_SUCCESS'		=> 'S’ha bloquejat l’entrada correctament.',

	'READ_USERNOTES'			=> 'Notes de l’usuari',
	'READ_WARNINGS'				=> 'Advertiments de l’usuari',
	'REPORTER'					=> 'Informador',
	'REPORTED'					=> 'Informat',
	'REPORTED_BY'				=> 'Informe generat per',
	'REPORTED_ON_DATE'			=> 'Data:',
	'REPORTS_CLOSED_SUCCESS'	=> 'S’han tancat els informes seleccionats correctament.',
	'REPORTS_DELETED_SUCCESS'	=> 'S’han eliminat els informes seleccionats correctament.',
	'REPORTS_TOTAL'				=> 'Hi ha un total de <strong>%d</strong> informes per revisar.',
	'REPORTS_ZERO_TOTAL'		=> 'No hi ha cap informe per revisar.',
	'REPORT_CLOSED'				=> 'Aquest informe ja s’ha tancat.',
	'REPORT_CLOSED_SUCCESS'		=> 'S’ha tancat l’informe seleccionat correctament.',
	'REPORT_DELETED_SUCCESS'	=> 'S’ha eliminat l’informe seleccionat correctament.',
	'REPORT_DETAILS'			=> 'Detalls de l’informe',
	'REPORT_MESSAGE'			=> 'Informa d’aquest missatge',
	'REPORT_MESSAGE_EXPLAIN'	=> 'Utilitzeu aquest formulari per informar del missatge seleccionat. És recomanable que només informeu dels missatges que incompleixen les normes del fòrum.',
	'REPORT_NOTIFY'				=> 'Avisa’m',
	'REPORT_NOTIFY_EXPLAIN'		=> 'Se us avisarà quan el vostre informe sigui gestionat.',
	'REPORT_POST_EXPLAIN'		=> 'Utilitzeu aquest formulari per informar de l’entrada seleccionada als moderadors i els administradors del fòrum. És recomanable que només informeu de les entrades que incompleixen les normes del fòrum.',
	'REPORT_REASON'				=> 'Raó de l’informe',
	'REPORT_TIME'				=> 'Data de l’informe',
	'REPORT_TOTAL'				=> 'Hi ha un total d’<strong>1</strong> informe per revisar.',
	'RESYNC'					=> 'Resincronitza',
	'RETURN_MESSAGE'			=> '%sTorna al missatge%s',
	'RETURN_NEW_FORUM'			=> '%sVes al fòrum nou%s',
	'RETURN_NEW_TOPIC'			=> '%sVes al tema nou%s',
	'RETURN_POST'				=> '%sTorna a l’entrada%s',
	'RETURN_QUEUE'				=> '%sTorna a la cua%s',
	'RETURN_REPORTS'			=> '%sTorna als informes%s',
	'RETURN_TOPIC_SIMPLE'		=> '%sTorna al tema%s',

	'SEARCH_POSTS_BY_USER'				=> 'Cerca entrades per',
	'SELECT_ACTION'						=> 'Seleccioneu l’acció desitjada',
	'SELECT_FORUM_GLOBAL_ANNOUNCEMENT'	=> 'Seleccioneu el fòrum on voleu que es mostri l’avís global.',
	'SELECT_FORUM_GLOBAL_ANNOUNCEMENTS'	=> 'Alguns dels temes seleccionats són avisos globals. Seleccioneu el fòrum on voleu que es mostrin.',
	'SELECT_MERGE'						=> 'Selecciona per combinar',
	'SELECT_TOPICS_FROM'				=> 'Selecciona temes de',
	'SELECT_TOPIC'						=> 'Selecciona un tema',
	'SELECT_USER'						=> 'Seleccioneu un usuari',
	'SORT_ACTION'						=> 'Acció registrada',
	'SORT_DATE'							=> 'Data',
	'SORT_IP'							=> 'Adreça IP',
	'SORT_WARNINGS'						=> 'Advertiments',
	'SPLIT_AFTER'						=> 'Divideix el tema des de l’entrada seleccionada cap endavanat',
	'SPLIT_FORUM'						=> 'Fòrum per al tema nou',
	'SPLIT_POSTS'						=> 'Separa les entrades seleccionades',
	'SPLIT_SUBJECT'						=> 'Títol del tema nou',
	'SPLIT_TOPIC_ALL'					=> 'Divideix el tema a partir de les entrades seleccionades',
	'SPLIT_TOPIC_ALL_CONFIRM'			=> 'Esteu segur que voleu dividir aquest tema?',
	'SPLIT_TOPIC_BEYOND'				=> 'Divideix el tema a l’entrada seleccionada',
	'SPLIT_TOPIC_BEYOND_CONFIRM'		=> 'Esteu segur que voleu dividir aquest tema a l’entrada seleccionada?',
	'SPLIT_TOPIC_EXPLAIN'				=> 'Amb el formulari següent podeu dividir un tema en dos, o bé seleccionant les entrades individualment o bé dividint a l’entrada seleccionada.',

	'THIS_POST_IP'				=> 'IP per aquesta entrada',
	'TOPICS_APPROVED_SUCCESS'	=> 'S’han aprovat els temes seleccionats.',
	'TOPICS_DELETED_SUCCESS'	=> 'S’han eliminat els temes de la base de dades correctament.',
	'TOPICS_DISAPPROVED_SUCCESS'=> 'S’han rebutjat els temes seleccionats.',
	'TOPICS_FORKED_SUCCESS'		=> 'S’han copiat els temes seleccionats correctament.',
	'TOPICS_LOCKED_SUCCESS'		=> 'S’han bloquejat els temes seleccionats.',
	'TOPICS_MOVED_SUCCESS'		=> 'S’han mogut els temes seleccionats correctament.',
	'TOPICS_RESYNC_SUCCESS'		=> 'S’han resincronitzat els temes seleccionats.',
	'TOPICS_TYPE_CHANGED'		=> 'S’han canviat els tipus de tema correctament.',
	'TOPICS_UNLOCKED_SUCCESS'	=> 'S’han desbloquejat els temes seleccionats correctament.',
	'TOPIC_APPROVED_SUCCESS'	=> 'S’ha aprovat el tema seleccionat.',
	'TOPIC_DELETED_SUCCESS'		=> 'S’ha eliminat el tema de la base de dades correctament.',
	'TOPIC_DISAPPROVED_SUCCESS'	=> 'S’ha rebutjat el tema seleccionat.',
	'TOPIC_FORKED_SUCCESS'		=> 'S’ha copiat el tema seleccionat correctament.',
	'TOPIC_LOCKED_SUCCESS'		=> 'S’ha bloquejat el tema seleccionat.',
	'TOPIC_MOVED_SUCCESS'		=> 'S’ha mogut el tema seleccionat correctament.',
	'TOPIC_NOT_EXIST'			=> 'El tema que heu sol·licitat no existeix.',
	'TOPIC_RESYNC_SUCCESS'		=> 'S’ha resincronitzat el tema seleccionat.',
	'TOPIC_SPLIT_SUCCESS'		=> 'S’ha dividit el tema seleccionat correctament.',
	'TOPIC_TIME'				=> 'Data del tema',
	'TOPIC_TYPE_CHANGED'		=> 'S’ha canviat el tipus de tema correctament.',
	'TOPIC_UNLOCKED_SUCCESS'	=> 'S’ha desbloquejat el tema seleccionat.',
	'TOTAL_WARNINGS'			=> 'Nombre total d’advertiments',

	'UNAPPROVED_POSTS_TOTAL'		=> 'En total hi ha <strong>%d</strong> entrades pedents d’aprovació.',
	'UNAPPROVED_POSTS_ZERO_TOTAL'	=> 'No hi ha cap entrada pendent d’aprovació.',
	'UNAPPROVED_POST_TOTAL'			=> 'En total hi ha <strong>1</strong> entrada pedent d’aprovació.',
	'UNLOCK'						=> 'Desbloqueja',
	'UNLOCK_POST'					=> 'Desbloqueja l’entrada',
	'UNLOCK_POST_EXPLAIN'			=> 'Permet l’edició',
	'UNLOCK_POST_POST'				=> 'Desbloqueja l’entrada',
	'UNLOCK_POST_POST_CONFIRM'		=> 'Esteu segur que voleu permetre l’edició d’aquesta entrada?',
	'UNLOCK_POST_POSTS'				=> 'Desbloqueja les entrades seleccionades',
	'UNLOCK_POST_POSTS_CONFIRM'		=> 'Esteu segur que voleu permetre l’edició de les entrades seleccionades?',
	'UNLOCK_TOPIC'					=> 'Desbloqueja el tema',
	'UNLOCK_TOPIC_CONFIRM'			=> 'Esteu segur que voleu desbloquejar aquest tema?',
	'UNLOCK_TOPICS'					=> 'Desbloqueja els temes seleccionats',
	'UNLOCK_TOPICS_CONFIRM'			=> 'Esteu segur que voleu desbloquejar tots els temes seleccionats?',
	'USER_CANNOT_POST'				=> 'No podeu publicar entrades en aquest fòrum.',
	'USER_CANNOT_REPORT'			=> 'No podeu informar d’entrades en aquest fòrum.',
	'USER_FEEDBACK_ADDED'			=> 'S’ha afegit el comentari de l’usuari correctament.',
	'USER_WARNING_ADDED'			=> 'S’ha advertit l’usuari correctament.',

	'VIEW_DETAILS'			=> 'Mostra els detalls',
	'VIEW_POST'				=> 'Mostra l’entrada',

	'WARNED_USERS'			=> 'Usuaris amb advertiments',
	'WARNED_USERS_EXPLAIN'	=> 'És una llista d’usuaris amb advertiments que encara no han vençut.',
	'WARNING_PM_BODY'		=> 'Això és un advertiment enviat per un administrador o un moderador d’aquest lloc web.[quote]%s[/quote]',
	'WARNING_PM_SUBJECT'	=> 'Advertiment del fòrum emès',
	'WARNING_POST_DEFAULT'	=> 'Aquest advertiment fa referència a l’entrada següent que heu escrit: %s .',
	'WARNINGS_ZERO_TOTAL'	=> 'No hi ha cap advertiment.',

	'YOU_SELECTED_TOPIC'	=> 'Heu seleccionat el tema número %d: %s.',

	'report_reasons'		=> array(
		'TITLE'	=> array(
			'WAREZ'		=> 'Pirateria',
			'SPAM'		=> 'Brossa',
			'OFF_TOPIC'	=> 'Fora de tema',
			'OTHER'		=> 'Altres',
		),
		'DESCRIPTION' => array(
			'WAREZ'		=> 'L’entrada conté enllaços a programari il·legal o piratejat.',
			'SPAM'		=> 'L’entrada té com a únic fi anunciar un lloc web o algun producte.',
			'OFF_TOPIC'	=> 'L’entrada és fora de tema.',
			'OTHER'		=> 'L’entrada no encaixa en cap de les altres categories, si us plau utilitzeu el camp d’informació addicional.',
		)
	),
));

?>