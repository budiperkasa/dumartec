<?php
/**
*
* mcp [Deutsch — Sie]
*
* @package language
* @version $Id: mcp.php 359 2008-10-28 20:19:03Z philipp $
* @copyright (c) 2005 phpBB Group; 2006 phpBB.de
* @license http://opensource.org/licenses/gpl-license.php GNU Public License
*
* Deutsche Übersetzung durch die Übersetzer-Gruppe von phpBB.de:
* (http://www.phpbb.de/go/3/uebersetzer)
* Frank Doerr, Dirk Gaffke, Christopher Gerharz, Ingo Köhler, Philipp Kordowich, Ingo Migliarina, Paul Rauch
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
	'ACTION'				=> 'Vorgang',
	'ACTION_NOTE'			=> 'Vorgang/Hinweis',
	'ADD_FEEDBACK'			=> 'Feedback hinzufügen',
	'ADD_FEEDBACK_EXPLAIN'	=> 'Wenn Sie hierzu eine Meldung hinzufügen möchten, füllen Sie bitte das folgende Formular aus. Verwenden Sie nur reinen Text; HTML, BBCode, usw. sind nicht erlaubt.',
	'ADD_WARNING'			=> 'Verwarnung erteilen',
	'ADD_WARNING_EXPLAIN'	=> 'Um dem Benutzer eine Verwarnung zu erteilen, füllen Sie bitte das folgende Formular aus. Verwenden Sie nur reinen Text; HTML, BBCode, usw. sind nicht erlaubt.',
	'ALL_ENTRIES'			=> 'Alle Einträge',
	'ALL_NOTES_DELETED'		=> 'Alle Notizen wurden erfolgreich gelöscht.',
	'ALL_REPORTS'			=> 'Alle Meldungen',
	'ALREADY_REPORTED'		=> 'Dieser Beitrag wurde schon gemeldet.',
	'ALREADY_WARNED'		=> 'Für diesen Beitrag wurde schon eine Verwarnung erteilt.',
	'APPROVE'				=> 'Freigeben',
	'APPROVE_POST'			=> 'Beitrag freigeben',
	'APPROVE_POST_CONFIRM'	=> 'Sind Sie sicher, dass Sie diesen Beitrag freigeben möchten?',
	'APPROVE_POSTS'			=> 'Beiträge freigeben',
	'APPROVE_POSTS_CONFIRM'	=> 'Sind Sie sicher, dass Sie diese Beiträge freigeben möchten?',

	'CANNOT_MOVE_SAME_FORUM'=> 'Sie können ein Thema nicht in das Forum verschieben, in dem es sich befindet.',
	'CANNOT_WARN_ANONYMOUS'	=> 'Sie können keinen Gast verwarnen.',
	'CANNOT_WARN_SELF'		=> 'Sie können sich nicht selbst verwarnen.',
	'CAN_LEAVE_BLANK'		=> 'Dieses Feld muss nicht ausgefüllt werden.',
	'CHANGE_POSTER'			=> 'Ändere Autor',
	'CLOSE_REPORT'			=> 'Meldung schließen',
	'CLOSE_REPORT_CONFIRM'	=> 'Sind Sie sicher, dass Sie die ausgewählte Meldung schließen möchten?',
	'CLOSE_REPORTS'			=> 'Meldungen schließen',
	'CLOSE_REPORTS_CONFIRM'	=> 'Sind Sie sicher, dass Sie die ausgewählten Meldungen schließen möchten?',

	'DELETE_POSTS'				=> 'Beiträge löschen',
	'DELETE_POSTS_CONFIRM'		=> 'Sind Sie sicher, dass Sie diese Beiträge löschen möchten?',
	'DELETE_POST_CONFIRM'		=> 'Sind Sie sicher, dass Sie diesen Beitrag löschen möchten?',
	'DELETE_REPORT'				=> 'Meldung löschen',
	'DELETE_REPORT_CONFIRM'		=> 'Sind Sie sicher, dass Sie die ausgewählte Meldung löschen möchten?',
	'DELETE_REPORTS'			=> 'Meldungen löschen',
	'DELETE_REPORTS_CONFIRM'	=> 'Sind Sie sicher, dass Sie die ausgewählten Meldungen löschen möchten?',
	'DELETE_SHADOW_TOPIC'		=> 'Link zum verschobenen Thema löschen',
	'DELETE_TOPICS'				=> 'Ausgewählte Themen löschen',
	'DELETE_TOPICS_CONFIRM'		=> 'Sind Sie sicher, dass Sie diese Themen löschen möchten?',
	'DELETE_TOPIC_CONFIRM'		=> 'Sind Sie sicher, dass Sie dieses Thema löschen möchten?',
	'DISAPPROVE'				=> 'Freigabe verweigern',
	'DISAPPROVE_REASON'			=> 'Grund für die Verweigerung der Freigabe',
	'DISAPPROVE_POST'			=> 'Freigabe des Beitrags verweigern',
	'DISAPPROVE_POST_CONFIRM'	=> 'Sind Sie sicher, dass Sie die Freigabe dieses Beitrags verweigern möchten?',
	'DISAPPROVE_POSTS'			=> 'Freigabe der Beiträge verweigern',
	'DISAPPROVE_POSTS_CONFIRM'	=> 'Sind Sie sicher, dass Sie die Freigabe der ausgewählten Beiträge verweigern möchten?',
	'DISPLAY_LOG'				=> 'Einträge der letzten Zeit anzeigen',
	'DISPLAY_OPTIONS'			=> 'Anzeige-Optionen',

	'EMPTY_REPORT'					=> 'Für diesen Grund müssen Sie eine Beschreibung angeben.',
	'EMPTY_TOPICS_REMOVED_WARNING'	=> 'Ein oder mehrere Themen wurden aus der Datenbank gelöscht, weil sie keine Beiträge mehr hatten.',

	'FEEDBACK'				=> 'Feedback',
	'FORK'					=> 'Duplizieren',
	'FORK_TOPIC'			=> 'Thema duplizieren',
	'FORK_TOPIC_CONFIRM'	=> 'Sind Sie sicher, dass Sie dieses Thema duplizieren möchten?',
	'FORK_TOPICS'			=> 'Ausgewählte Themen duplizieren',
	'FORK_TOPICS_CONFIRM'	=> 'Sind Sie sicher, dass Sie die ausgewählten Themen duplizieren möchten?',
	'FORUM_DESC'			=> 'Beschreibung',
	'FORUM_NAME'			=> 'Name des Forums',
	'FORUM_NOT_EXIST'		=> 'Das ausgewählte Forum existiert nicht.',
	'FORUM_NOT_POSTABLE'	=> 'In dem ausgewählten Forum können keine Beiträge erstellt werden.',
	'FORUM_STATUS'			=> 'Status des Forums',
	'FORUM_STYLE'			=> 'Forum-Style',

	'GLOBAL_ANNOUNCEMENT'	=> 'Globale Bekanntmachung',

	'IP_INFO'				=> 'IP-Informationen',
	'IPS_POSTED_FROM'		=> 'IP-Adressen, von denen aus dieser Benutzer Beiträge erstellt hat',

	'LATEST_LOGS'				=> 'Die letzten 5 protokollierten Aktionen',
	'LATEST_REPORTED'			=> 'Die letzten 5 gemeldeten Beiträge',
	'LATEST_UNAPPROVED'			=> 'Die letzten 5 Beiträge, die auf Freigabe warten',
	'LATEST_WARNING_TIME'		=> 'Letzte Verwarnung',
	'LATEST_WARNINGS'			=> 'Die letzten 5 Verwarnungen',
	'LEAVE_SHADOW'				=> 'Einen Link im alten Forum beibehalten',
	'LIST_REPORT'				=> '1 Meldung',
	'LIST_REPORTS'				=> '%d Meldungen',
	'LOCK'						=> 'Sperren',
	'LOCK_POST_POST'			=> 'Beitrag sperren',
	'LOCK_POST_POST_CONFIRM'	=> 'Sind Sie sicher, dass Sie Änderungen an diesem Beitrag unterbinden möchten?',
	'LOCK_POST_POSTS'			=> 'Ausgewählte Beiträge sperren',
	'LOCK_POST_POSTS_CONFIRM'	=> 'Sind Sie sicher, dass Sie Änderungen der ausgewählten Beiträge unterbinden möchten?',
	'LOCK_TOPIC_CONFIRM'		=> 'Sind Sie sicher, dass Sie dieses Thema sperren möchten?',
	'LOCK_TOPICS'				=> 'Ausgewählte Themen sperren',
	'LOCK_TOPICS_CONFIRM'		=> 'Sind Sie sicher, dass Sie alle ausgewählten Themen sperren möchten?',
	'LOGS_CURRENT_TOPIC'		=> 'Moderations-Protokoll von Thema:',
	'LOGIN_EXPLAIN_MCP'			=> 'Um dieses Forum zu moderieren, müssen Sie sich anmelden.',
	'LOGVIEW_VIEWTOPIC'			=> 'Thema anzeigen',
	'LOGVIEW_VIEWLOGS'			=> 'Themen-Protokoll anzeigen',
	'LOGVIEW_VIEWFORUM'			=> 'Forum anzeigen',
	'LOOKUP_ALL'				=> 'Alle IPs auflösen',
	'LOOKUP_IP'					=> 'IP auflösen',

	'MARKED_NOTES_DELETED'		=> 'Alle markierten Notizen wurden erfolgreich gelöscht.',

	'MCP_ADD'						=> 'Eine Verwarnung hinzufügen',

	'MCP_BAN'					=> 'Sperren',
	'MCP_BAN_EMAILS'			=> 'E-Mails sperren',
	'MCP_BAN_IPS'				=> 'IPs sperren',
	'MCP_BAN_USERNAMES'			=> 'Benutzernamen sperren',

	'MCP_LOGS'						=> 'Moderations-Protokoll',
	'MCP_LOGS_FRONT'				=> 'Übersicht',
	'MCP_LOGS_FORUM_VIEW'			=> 'Foren-Protokoll',
	'MCP_LOGS_TOPIC_VIEW'			=> 'Themen-Protokoll',

	'MCP_MAIN'						=> 'Hauptbereich',
	'MCP_MAIN_FORUM_VIEW'			=> 'Forum anzeigen',
	'MCP_MAIN_FRONT'				=> 'Übersicht',
	'MCP_MAIN_POST_DETAILS'			=> 'Beitrags-Details',
	'MCP_MAIN_TOPIC_VIEW'			=> 'Thema anzeigen',
	'MCP_MAKE_ANNOUNCEMENT'			=> 'In Bekanntmachung umwandeln',
	'MCP_MAKE_ANNOUNCEMENT_CONFIRM'	=> 'Sind Sie sicher, dass Sie dieses Thema in eine Bekanntmachung umwandeln möchten?',
	'MCP_MAKE_ANNOUNCEMENTS'		=> 'In Bekanntmachungen umwandeln',
	'MCP_MAKE_ANNOUNCEMENTS_CONFIRM'=> 'Sind Sie sicher, dass Sie die ausgewählten Themen in Bekanntmachungen umwandeln möchten?',
	'MCP_MAKE_GLOBAL'				=> 'In globale Bekanntmachung umwandeln',
	'MCP_MAKE_GLOBAL_CONFIRM'		=> 'Sind Sie sicher, dass Sie dieses Thema in eine globale Bekanntmachung umwandeln möchten?',
	'MCP_MAKE_GLOBALS'				=> 'In globale Bekanntmachungen umwandeln',
	'MCP_MAKE_GLOBALS_CONFIRM'		=> 'Sind Sie sicher, dass Sie die ausgewählten Themen in globale Bekanntmachungen umwandeln möchten?',
	'MCP_MAKE_STICKY'				=> 'In wichtiges Thema umwandeln',
	'MCP_MAKE_STICKY_CONFIRM'		=> 'Sind Sie sicher, dass Sie dieses Thema in ein wichtiges Thema umwandeln möchten?',
	'MCP_MAKE_STICKIES'				=> 'In wichtige Themen umwandeln',
	'MCP_MAKE_STICKIES_CONFIRM'		=> 'Sind Sie sicher, dass Sie die ausgewählten Themen in wichtige Themen umwandeln möchten?',
	'MCP_MAKE_NORMAL'				=> 'In Standard-Thema umwandeln',
	'MCP_MAKE_NORMAL_CONFIRM'		=> 'Sind Sie sicher, dass Sie dieses Thema in ein Standard-Thema umwandeln möchten?',
	'MCP_MAKE_NORMALS'				=> 'In Standard-Themen umwandeln',
	'MCP_MAKE_NORMALS_CONFIRM'		=> 'Sind Sie sicher, dass Sie die ausgewählten Themen in Standard-Themen umwandeln möchten?',

	'MCP_NOTES'						=> 'Benutzer-Notizen',
	'MCP_NOTES_FRONT'				=> 'Übersicht',
	'MCP_NOTES_USER'				=> 'Benutzer-Details',

	'MCP_POST_REPORTS'				=> 'Es gibt Meldungen zu diesem Beitrag',

	'MCP_REPORTS'					=> 'Gemeldete Beiträge',
	'MCP_REPORT_DETAILS'			=> 'Details der Meldung',
	'MCP_REPORTS_CLOSED'			=> 'Geschlossene Meldungen',
	'MCP_REPORTS_CLOSED_EXPLAIN'	=> 'Dies ist eine Liste aller Meldungen zu Beiträgen, die abgeschlossen wurden.',
	'MCP_REPORTS_OPEN'				=> 'Offene Meldungen',
	'MCP_REPORTS_OPEN_EXPLAIN'		=> 'Dies ist eine Liste aller Meldungen zu Beiträgen, die noch bearbeitet werden müssen.',

	'MCP_QUEUE'								=> 'Moderations-Warteschlange',
	'MCP_QUEUE_APPROVE_DETAILS'				=> 'Freigabe-Details',
	'MCP_QUEUE_UNAPPROVED_POSTS'			=> 'Auf Freigabe wartende Beiträge',
	'MCP_QUEUE_UNAPPROVED_POSTS_EXPLAIN'	=> 'Dies ist eine Liste aller Beiträge, die freigegeben werden müssen, bevor sie für die Benutzer sichtbar werden.',
	'MCP_QUEUE_UNAPPROVED_TOPICS'			=> 'Auf Freigabe wartende Themen',
	'MCP_QUEUE_UNAPPROVED_TOPICS_EXPLAIN'	=> 'Dies ist eine Liste aller Themen, die freigegeben werden müssen, bevor sie für die Benutzer sichtbar werden.',

	'MCP_VIEW_USER'			=> 'Verwarnungen eines Benutzers anzeigen',

	'MCP_WARN'				=> 'Verwarnungen',
	'MCP_WARN_FRONT'		=> 'Übersicht',
	'MCP_WARN_LIST'			=> 'Verwarnungen anzeigen',
	'MCP_WARN_POST'			=> 'Für spezifischen Beitrag verwarnen',
	'MCP_WARN_USER'			=> 'Benutzer verwarnen',

	'MERGE_POSTS'			=> 'Beiträge zusammenführen',
	'MERGE_POSTS_CONFIRM'	=> 'Sind Sie sicher, dass Sie die ausgewählten Beiträge zusammenführen möchten?',
	'MERGE_TOPIC_EXPLAIN'	=> 'Mit dem folgenden Formular können Sie Beiträge mit einem anderen Thema zusammenführen. Die Beiträge werden nicht umsortiert, sondern erscheinen so, als ob die Benutzer sie in dem anderen Thema erstellt hätten.<br />Bitte geben Sie die ID des Ziel-Themas an oder wählen Sie mit „Thema auswählen“ ein Thema aus.',
	'MERGE_TOPIC_ID'		=> 'Primärschlüssel (ID) des Ziel-Themas',
	'MERGE_TOPICS'			=> 'Themen zusammenführen',
	'MERGE_TOPICS_CONFIRM'	=> 'Sind Sie sicher, dass Sie die ausgewählten Themen zusammenführen möchten?',
	'MODERATE_FORUM'		=> 'Forum moderieren',
	'MODERATE_TOPIC'		=> 'Thema moderieren',
	'MODERATE_POST'			=> 'Beitrag moderieren',
	'MOD_OPTIONS'			=> 'Moderations-Optionen',
	'MORE_INFO'				=> 'Weitere Informationen',
	'MOST_WARNINGS'			=> 'Benutzer mit den meisten Verwarnungen',
	'MOVE_TOPIC_CONFIRM'	=> 'Sind Sie sicher, dass Sie das Thema in ein neues Forum verschieben möchten?',
	'MOVE_TOPICS'			=> 'Ausgewählte Themen verschieben',
	'MOVE_TOPICS_CONFIRM'	=> 'Sind Sie sicher, dass Sie die ausgewählten Themen in ein neues Forum verschieben möchten?',

	'NOTIFY_POSTER_APPROVAL'		=> 'Benutzer über Freigabe informieren?',
	'NOTIFY_POSTER_DISAPPROVAL' 	=> 'Benutzer über Verweigerung der Freigabe informieren?',
	'NOTIFY_USER_WARN'				=> 'Benutzer über Verwarnung informieren?',
	'NOT_MODERATOR'					=> 'Sie sind kein Moderator dieses Forums.',
	'NO_DESTINATION_FORUM'			=> 'Bitte wählen Sie ein Ziel-Forum aus.',
	'NO_DESTINATION_FORUM_FOUND'	=> 'Es steht kein Ziel-Forum zur Verfügung.',
	'NO_ENTRIES'					=> 'Es existiert kein Protokoll-Eintrag für diesen Zeitraum.',
	'NO_FEEDBACK'					=> 'Es existiert noch kein Feedback zu diesem Benutzer.',
	'NO_FINAL_TOPIC_SELECTED'		=> 'Sie müssen ein Ziel-Thema auswählen, um die Beiträge mit einem anderen Thema zusammenzuführen.',
	'NO_MATCHES_FOUND'				=> 'Keine Treffer gefunden.',
	'NO_POST'						=> 'Sie müssen einen Beitrag auswählen, um einen Benutzer für einen Beitrag verwarnen zu können.',
	'NO_POST_REPORT'				=> 'Dieser Beitrag wurde nicht gemeldet.',
	'NO_POST_SELECTED'				=> 'Sie müssen mindestens einen Beitrag auswählen, um diese Aktion durchzuführen.',
	'NO_REASON_DISAPPROVAL'			=> 'Bitte geben Sie eine Begründung für die Verweigerung der Freigabe an.',
	'NO_REPORT'						=> 'Keine Meldung gefunden',
	'NO_REPORTS'					=> 'Keine Meldungen gefunden',
	'NO_REPORT_SELECTED'			=> 'Sie müssen mindestens eine Meldung auswählen, um diese Aktion durchzuführen.',
	'NO_TOPIC_ICON'					=> 'Keines',
	'NO_TOPIC_SELECTED'				=> 'Sie müssen mindestens ein Thema auswählen, um diese Aktion durchzuführen.',
	'NO_TOPICS_QUEUE'				=> 'Es warten keine Themen auf Freigabe.',

	'ONLY_TOPIC'			=> 'Nur Thema „%s“',
	'OTHER_USERS'			=> 'Andere Benutzer, die von dieser IP Beiträge erstellt haben',

	'POSTER'					=> 'Autor',
	'POSTS_APPROVED_SUCCESS'	=> 'Die ausgewählten Beiträge wurden freigegeben.',
	'POSTS_DELETED_SUCCESS'		=> 'Die ausgewählten Beiträge wurden erfolgreich aus der Datenbank gelöscht.',
	'POSTS_DISAPPROVED_SUCCESS'	=> 'Die Freigabe der ausgewählten Beiträge wurde verweigert.',
	'POSTS_LOCKED_SUCCESS'		=> 'Die ausgewählten Beiträge wurden erfolgreich gesperrt.',
	'POSTS_MERGED_SUCCESS'		=> 'Die ausgewählten Beiträge wurden zusammengeführt.',
	'POSTS_UNLOCKED_SUCCESS'	=> 'Die ausgewählten Beiträge wurden erfolgreich entsperrt.',
	'POSTS_PER_PAGE'			=> 'Beiträge je Seite',
	'POSTS_PER_PAGE_EXPLAIN'	=> '(Mit 0 werden alle Beiträge angezeigt.)',
	'POST_APPROVED_SUCCESS'		=> 'Der ausgewählte Beitrag wurde freigegeben.',
	'POST_DELETED_SUCCESS'		=> 'Der ausgewählte Beitrag wurde erfolgreich aus der Datenbank gelöscht.',
	'POST_DISAPPROVED_SUCCESS'	=> 'Die Freigabe des ausgewählten Beitrags wurde verweigert.',
	'POST_LOCKED_SUCCESS'		=> 'Der Beitrag wurde erfolgreich gesperrt.',
	'POST_NOT_EXIST'			=> 'Der angegebene Beitrag existiert nicht.',
	'POST_REPORTED_SUCCESS'		=> 'Dieser Beitrag wurde erfolgreich gemeldet.',
	'POST_UNLOCKED_SUCCESS'		=> 'Der Beitrag wurde erfolgreich entsperrt.',

	'READ_USERNOTES'			=> 'Benutzer-Notizen',
	'READ_WARNINGS'				=> 'Verwarnungen des Benutzers',
	'REPORTER'					=> 'Meldender Benutzer',
	'REPORTED'					=> 'Gemeldet',
	'REPORTED_BY'				=> 'Gemeldet von',
	'REPORTED_ON_DATE'			=> 'am',
	'REPORTS_CLOSED_SUCCESS'	=> 'Die ausgewählten Meldungen wurden erfolgreich geschlossen.',
	'REPORTS_DELETED_SUCCESS'	=> 'Die ausgewählten Meldungen wurden erfolgreich gelöscht.',
	'REPORTS_TOTAL'				=> 'Insgesamt warten <strong>%d</strong> Meldungen auf Überprüfung.',
	'REPORTS_ZERO_TOTAL'		=> 'Es warten keine Meldungen auf Überprüfung.',
	'REPORT_CLOSED'				=> 'Diese Meldung wurde bereits geschlossen.',
	'REPORT_CLOSED_SUCCESS'		=> 'Die ausgewählte Meldung wurde erfolgreich geschlossen.',
	'REPORT_DELETED_SUCCESS'	=> 'Die ausgewählte Meldung wurde erfolgreich gelöscht.',
	'REPORT_DETAILS'			=> 'Details der Meldung',
	'REPORT_MESSAGE'			=> 'Diese Nachricht melden',
	'REPORT_MESSAGE_EXPLAIN'	=> 'Benutzen Sie dieses Formular, um die ausgewählte Nachricht zu melden. Meldungen sollten nur erfolgen, wenn die Nachricht den Foren-Regeln widerspricht.',
	'REPORT_NOTIFY'				=> 'Benachrichtigung',
	'REPORT_NOTIFY_EXPLAIN'		=> 'Informiert Sie, wenn Ihre Meldung bearbeitet wurde.',
	'REPORT_POST_EXPLAIN'		=> 'Benutzen Sie dieses Formular, um den ausgewählten Beitrag zu melden. Meldungen sollten nur erfolgen, wenn der Beitrag den Foren-Regeln widerspricht.',
	'REPORT_REASON'				=> 'Grund der Meldung',
	'REPORT_TIME'				=> 'Zeitpunkt der Meldung',
	'REPORT_TOTAL'				=> 'Insgesamt wartet <strong>1</strong> Meldung auf Überprüfung.',
	'RESYNC'					=> 'Resynchronisierung',
	'RETURN_MESSAGE'			=> '%sZurück zur Nachricht%s',
	'RETURN_NEW_FORUM'			=> '%sGehe in das neue Forum%s',
	'RETURN_NEW_TOPIC'			=> '%sGehe zum neuen Thema%s',
	'RETURN_POST'				=> '%sZurück zum Beitrag%s',
	'RETURN_QUEUE'				=> '%sZurück zur Warteschlange%s',
	'RETURN_REPORTS'			=> '%sZurück zu den Meldungen%s',
	'RETURN_TOPIC_SIMPLE'		=> '%sZurück zum Thema%s',

	'SEARCH_POSTS_BY_USER'				=> 'Suche Beiträge von',
	'SELECT_ACTION'						=> 'Gewünschte Aktion auswählen',
	'SELECT_FORUM_GLOBAL_ANNOUNCEMENT'	=> 'Bitte wählen Sie das Forum aus, in dem diese globale Bekanntmachung angezeigt werden soll.',
	'SELECT_FORUM_GLOBAL_ANNOUNCEMENTS'	=> 'Eine oder mehrere der ausgewählten Themen sind globale Bekanntmachungen. Bitte wählen Sie ein Forum aus, in dem diese angezeigt werden sollen.',
	'SELECT_MERGE'						=> 'Zum Zusammenführen auswählen',
	'SELECT_TOPICS_FROM'				=> 'Themen auswählen',
	'SELECT_TOPIC'						=> 'Thema auswählen',
	'SELECT_USER'						=> 'Benutzer auswählen',
	'SORT_ACTION'						=> 'Vorgang',
	'SORT_DATE'							=> 'Datum',
	'SORT_IP'							=> 'IP-Adresse',
	'SORT_WARNINGS'						=> 'Verwarnungen',
	'SPLIT_AFTER'						=> 'Thema ab dem gewählten Beitrag teilen',
	'SPLIT_FORUM'						=> 'Forum für das neue Thema',
	'SPLIT_POSTS'						=> 'Gewählte Beiträge abtrennen',
	'SPLIT_SUBJECT'						=> 'Betreff des neuen Themas',
	'SPLIT_TOPIC_ALL'					=> 'Ausgewählte Beiträge abtrennen',
	'SPLIT_TOPIC_ALL_CONFIRM'			=> 'Sind Sie sicher, dass Sie dieses Thema teilen möchten?',
	'SPLIT_TOPIC_BEYOND'				=> 'Ab dem ausgewählten Beitrag teilen',
	'SPLIT_TOPIC_BEYOND_CONFIRM'		=> 'Sind Sie sicher, dass Sie dieses Thema ab dem ausgewählten Beitrag teilen möchten?',
	'SPLIT_TOPIC_EXPLAIN'				=> 'Mit dem folgenden Formular können Sie ein Thema in zwei aufteilen, indem Sie entweder die Beiträge einzeln auswählen oder ab einem bestimmten Beitrag teilen.',

	'THIS_POST_IP'				=> 'IP dieses Beitrags',
	'TOPICS_APPROVED_SUCCESS'	=> 'Die ausgewählten Themen wurden freigegeben.',
	'TOPICS_DELETED_SUCCESS'	=> 'Die ausgewählten Themen wurden erfolgreich aus der Datenbank gelöscht.',
	'TOPICS_DISAPPROVED_SUCCESS'=> 'Die Freigabe der ausgewählten Themen wurde verweigert.',
	'TOPICS_FORKED_SUCCESS'		=> 'Die gewählten Themen wurden erfolgreich dupliziert.',
	'TOPICS_LOCKED_SUCCESS'		=> 'Die ausgewählten Themen wurden gesperrt.',
	'TOPICS_MOVED_SUCCESS'		=> 'Die ausgewählten Themen wurden erfolgreich verschoben.',
	'TOPICS_RESYNC_SUCCESS'		=> 'Die ausgewählten Themen wurden resynchronisiert.',
	'TOPICS_TYPE_CHANGED'		=> 'Die Art der Themen wurde erfolgreich geändert.',
	'TOPICS_UNLOCKED_SUCCESS'	=> 'Die ausgewählten Themen wurden entsperrt.',
	'TOPIC_APPROVED_SUCCESS'	=> 'Das ausgewählte Thema wurde freigegeben.',
	'TOPIC_DELETED_SUCCESS'		=> 'Das ausgewählte Thema wurde erfolgreich aus der Datenbank gelöscht.',
	'TOPIC_DISAPPROVED_SUCCESS'	=> 'Die Freigabe des ausgewählten Themas wurde verweigert.',
	'TOPIC_FORKED_SUCCESS'		=> 'Das ausgewählte Thema wurde erfolgreich dupliziert.',
	'TOPIC_LOCKED_SUCCESS'		=> 'Das ausgewählte Thema wurde gesperrt.',
	'TOPIC_MOVED_SUCCESS'		=> 'Das ausgewählte Thema wurde erfolgreich verschoben.',
	'TOPIC_NOT_EXIST'			=> 'Das ausgewählte Thema existiert nicht.',
	'TOPIC_RESYNC_SUCCESS'		=> 'Das ausgewählte Thema wurde resynchronisiert.',
	'TOPIC_SPLIT_SUCCESS'		=> 'Das ausgewählte Thema wurde erfolgreich geteilt.',
	'TOPIC_TIME'				=> 'Erstellung des Themas',
	'TOPIC_TYPE_CHANGED'		=> 'Die Art des Themas wurde erfolgreich geändert.',
	'TOPIC_UNLOCKED_SUCCESS'	=> 'Das ausgewählte Thema wurde entsperrt.',
	'TOTAL_WARNINGS'			=> 'Verwarnungen insgesamt',

	'UNAPPROVED_POSTS_TOTAL'		=> 'Insgesamt warten <strong>%d</strong> Beiträge auf Freigabe.',
	'UNAPPROVED_POSTS_ZERO_TOTAL'	=> 'Es warten keine Beiträge auf Freigabe.',
	'UNAPPROVED_POST_TOTAL'			=> 'Insgesamt wartet <strong>1</strong> Beitrag auf Freigabe.',
	'UNLOCK'						=> 'Entsperren',
	'UNLOCK_POST'					=> 'Beitrag entsperren',
	'UNLOCK_POST_EXPLAIN'			=> 'Änderungen erlauben',
	'UNLOCK_POST_POST'				=> 'Beitrag entsperren',
	'UNLOCK_POST_POST_CONFIRM'		=> 'Sind Sie sicher, dass Sie Änderungen an diesem Beitrag zulassen möchten?',
	'UNLOCK_POST_POSTS'				=> 'Ausgewählte Beiträge entsperren',
	'UNLOCK_POST_POSTS_CONFIRM'		=> 'Sind Sie sicher, dass Sie Änderungen an den ausgewählten Beiträgen zulassen möchten?',
	'UNLOCK_TOPIC'					=> 'Thema entsperren',
	'UNLOCK_TOPIC_CONFIRM'			=> 'Sind Sie sicher, dass Sie dieses Thema entsperren möchten?',
	'UNLOCK_TOPICS'					=> 'Ausgewählte Themen entsperren',
	'UNLOCK_TOPICS_CONFIRM'			=> 'Sind Sie sicher, dass Sie alle ausgewählten Themen entsperren möchten?',
	'USER_CANNOT_POST'				=> 'Sie können keine Beiträge in diesem Forum erstellen.',
	'USER_CANNOT_REPORT'			=> 'Sie können in diesem Forum keine Beiträge melden.',
	'USER_FEEDBACK_ADDED'			=> 'Feedback zu dem Benutzer erfolgreich hinzugefügt.',
	'USER_WARNING_ADDED'			=> 'Benutzer erfolgreich verwarnt.',

	'VIEW_DETAILS'			=> 'Details anzeigen',
	'VIEW_POST'				=> 'Beitrag anzeigen',

	'WARNED_USERS'			=> 'Verwarnte Benutzer',
	'WARNED_USERS_EXPLAIN'	=> 'Dies ist eine Liste von Benutzern, die noch nicht abgelaufene Verwarnungen erhalten haben.',
	'WARNING_PM_BODY'		=> 'Ihnen wurde eine Verwarnung durch einen Administrator oder Moderator dieses Forums erteilt:[quote]%s[/quote]',
	'WARNING_PM_SUBJECT'	=> 'Verwarnung erteilt.',
	'WARNING_POST_DEFAULT'	=> 'Dies ist eine Verwarnung wegen dieses von Ihnen erstellten Beitrags: %s.',
	'WARNINGS_ZERO_TOTAL'	=> 'Es existieren keine Verwarnungen.',

	'YOU_SELECTED_TOPIC'	=> 'Sie haben das Thema mit der ID %d ausgewählt: %s.',

	'report_reasons'		=> array(
		'TITLE'	=> array(
			'WAREZ'		=> 'Raubkopie/Warez',
			'SPAM'		=> 'Spam',
			'OFF_TOPIC'	=> 'Off-Topic',
			'OTHER'		=> 'Anderer',
		),
		'DESCRIPTION' => array(
			'WAREZ'		=> 'Der gemeldete Beitrag enthält Links zu illegaler Software oder Raubkopien.',
			'SPAM'		=> 'Der gemeldete Beitrag hat nur zum Ziel, für eine Website oder ein anderes Produkt zu werben.',
			'OFF_TOPIC'	=> 'Der gemeldete Beitrag betrifft ein anderes Thema.',
			'OTHER'		=> 'Keine der genannten Kategorien. Bitte benutzen Sie „Weitere Informationen“ für Ihre Meldung.',
		)
	),
));

?>