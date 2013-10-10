<?php
/**
*
* mcp [Română]
*
* @package language
* @version $Id: mcp.php 8479 2008-03-29 00:22:48Z naderman $
* @translate $Id: mcp.php 8479 2008-05-19 02:15:00 www.phpbb.ro (shara21jonny) Exp $
* @copyright (c) 2005 phpBB Group
* @license http://opensource.org/licenses/gpl-license.php GNU Public License
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
	'ACTION'				=> 'Acţiune',
	'ACTION_NOTE'			=> 'Acţiune/Notă',
	'ADD_FEEDBACK'			=> 'Adăugaţi părere',
	'ADD_FEEDBACK_EXPLAIN'	=> 'Dacă doriţi să vă exprimaţi părerea legat de acest lucru completaţi următorul formular. Folosiţi doar text simplu; HTML, Codul BB, etc. nu sunt permise.',
	'ADD_WARNING'			=> 'Adăugaţi advertisment',
	'ADD_WARNING_EXPLAIN'	=> 'Dacă doriţi să adăugaţi un advertisment asupra acestui utilizator completaţi următorul formular. Folosiţi doar text simplu; HTML, Codul BB, etc. nu sunt permise.',
	'ALL_ENTRIES'			=> 'Toate intrările',
	'ALL_NOTES_DELETED'		=> 'Toate însemnările au fost şterse cu succes',
	'ALL_REPORTS'			=> 'Toate rapoartele',
	'ALREADY_REPORTED'		=> 'Acest mesaj a fost deja raportat',
	'ALREADY_WARNED'		=> 'Un avertisment a fost deja emis asupra acestui mesaj',
	'APPROVE'				=> 'Aprobaţi',
	'APPROVE_POST'			=> 'Aprobaţi mesajul',
	'APPROVE_POST_CONFIRM'	=> 'Sunteţi sigur(ă) că vreţi să aprobaţi acest mesaj?',
	'APPROVE_POSTS'			=> 'Aprobaţi mesajele',
	'APPROVE_POSTS_CONFIRM'	=> 'Sunteţi sigur(ă) că vreţi să aprobaţi mesajele selectate?',

	'CANNOT_MOVE_SAME_FORUM'=> 'Nu puteţi să mutaţi un subiect în acelaşi forum în care se află deja',
	'CANNOT_WARN_ANONYMOUS'	=> 'Nu puteţi să avertizaţi utilizatorii neînregistraţi',
	'CANNOT_WARN_SELF'		=> 'Nu vă puteţi da singur avertisment',
	'CAN_LEAVE_BLANK'		=> 'Acest câmp poate fi lăsat liber.',
	'CHANGE_POSTER'			=> 'Modificaţi autorul',
	'CLOSE_REPORT'			=> 'Închide raportul',
	'CLOSE_REPORT_CONFIRM'	=> 'Sunteţi sigur(ă) că vreţi să închideţi raportul selectat?',
	'CLOSE_REPORTS'			=> 'Închide rapoarte',
	'CLOSE_REPORTS_CONFIRM'	=> 'Sunteţi sigur(ă) că vreţi să închideţi rapoartele selectate?',

	'DELETE_POSTS'				=> 'Şterge mesajele',
	'DELETE_POSTS_CONFIRM'		=> 'Sunteţi sigur(ă) că vreţi să ştergeţi mesajele selectate?',
	'DELETE_POST_CONFIRM'		=> 'Sunteţi sigur(ă) că vreţi să ştergeţi mesajul selectat?',
	'DELETE_REPORT'				=> 'Şterge raportul',
	'DELETE_REPORT_CONFIRM'		=> 'Sunteţi sigur(ă) că vreţi să ştergeţi raportul selectată?',
	'DELETE_REPORTS'			=> 'Şterge rapoartele',
	'DELETE_REPORTS_CONFIRM'	=> 'Sunteţi sigur(ă) că vreţi să ştergeţi rapoartele selectate?',
	'DELETE_SHADOW_TOPIC'		=> 'Şterge umbră subiect',
	'DELETE_TOPICS'				=> 'Şterge subiectele selectate',
	'DELETE_TOPICS_CONFIRM'		=> 'Sunteţi sigur(ă) că vreţi să ştergeţi aceste subiecte?',
	'DELETE_TOPIC_CONFIRM'		=> 'Sunteţi sigur(ă) că vreţi să ştergeţi acest subiect?',
	'DISAPPROVE'				=> 'Dezaprobaţi',
	'DISAPPROVE_REASON'			=> 'Motivul dezaprobării',
	'DISAPPROVE_POST'			=> 'Dezaprobaţi mesajul',
	'DISAPPROVE_POST_CONFIRM'	=> 'Sunteţi sigur(ă) că vreţi să dezaprobaţi acest mesaj?',
	'DISAPPROVE_POSTS'			=> 'Dezaprobaţi mesajele',
	'DISAPPROVE_POSTS_CONFIRM'	=> 'Sunteţi sigur(ă) că vreţi să dezaprobaţi aceste mesaje?',
	'DISPLAY_LOG'				=> 'Arătaţi intrările anterioare',
	'DISPLAY_OPTIONS'			=> 'Arătaţi opţiunile',

	'EMPTY_REPORT'					=> 'Trebuie să introduceţi o descriere când selectaţi aceast motiv',
	'EMPTY_TOPICS_REMOVED_WARNING'	=> 'Unul sau mai multe subiecte au fost şterse pentru că erau goale sau au devenit goale',

	'FEEDBACK'				=> 'Părere',
	'FORK'					=> 'Împarte',
	'FORK_TOPIC'			=> 'Împarte subiectul',
	'FORK_TOPIC_CONFIRM'	=> 'Sunteţi sigur(ă) că vreţi să împărţiţi acest subiect?',
	'FORK_TOPICS'			=> 'Împarte subiectele selectate',
	'FORK_TOPICS_CONFIRM'	=> 'Sunteţi sigur(ă) că vreţi să împărţiţi subiectele selectate?',
	'FORUM_DESC'			=> 'Descriere',
	'FORUM_NAME'			=> 'Numele forumului',
	'FORUM_NOT_EXIST'		=> 'Forumul selectat nu există',
	'FORUM_NOT_POSTABLE'	=> 'În forumul selectat nu se poate publica',
	'FORUM_STATUS'			=> 'Situaţia forumului',
	'FORUM_STYLE'			=> 'Stilul forumului',

	'GLOBAL_ANNOUNCEMENT'	=> 'Anunţ global',

	'IP_INFO'				=> 'Informaţii despre IP',
	'IPS_POSTED_FROM'		=> 'Adresa IP de unde utilizatorul a făcut acest mesaj',

	'LATEST_LOGS'				=> 'Ultimele 5 acţiuni înregistrate',
	'LATEST_REPORTED'			=> 'Ultimele 5 rapoarte',
	'LATEST_UNAPPROVED'			=> 'Ultimele 5 mesaje în aşteptare pentru a fi aprobate',
	'LATEST_WARNING_TIME'		=> 'Ultimele avertismente emise',
	'LATEST_WARNINGS'			=> 'Ultimele 5 avertismente',
	'LEAVE_SHADOW'				=> 'Lăsaţi o umbră în forum',
	'LIST_REPORT'				=> '1 raport',
	'LIST_REPORTS'				=> '%d rapoarte',
	'LOCK'						=> 'Închide',
	'LOCK_POST_POST'			=> 'Închide mesajul',
	'LOCK_POST_POST_CONFIRM'	=> 'Sunteţi sigur(ă) că vreţi să preîntâmpinaţi modificarea acestui mesaj?',
	'LOCK_POST_POSTS'			=> 'Închide mesajele selectate',
	'LOCK_POST_POSTS_CONFIRM'	=> 'Sunteţi sigur(ă) că vreţi să preîntâmpinaţi modificarea mesajelor selectate?',
	'LOCK_TOPIC_CONFIRM'		=> 'Sunteţi sigur(ă) că vreţi să închideţi acest mesaj?',
	'LOCK_TOPICS'				=> 'Închide subiectele selectate',
	'LOCK_TOPICS_CONFIRM'		=> 'Sunteţi sigur(ă) că vreţi să închideţi toate subiectele selectate?',
	'LOGS_CURRENT_TOPIC'		=> 'Vedeţi rapoartele subiectului:',
	'LOGIN_EXPLAIN_MCP'			=> 'Pentru a modera acest forum trebuie să vă autentificaţi.',
	'LOGVIEW_VIEWTOPIC'			=> 'Vizualizare subiect',
	'LOGVIEW_VIEWLOGS'			=> 'Vizualizare raport subiectul',
	'LOGVIEW_VIEWFORUM'			=> 'Vizualizare forum',
	'LOOKUP_ALL'				=> 'Căutaţi toate IP-urile',
	'LOOKUP_IP'					=> 'Căutaţi IP-ul',

	'MARKED_NOTES_DELETED'		=> 'Însemnările selectate au fost şterse cu succes',

	'MCP_ADD'						=> 'Adăugaţi avertisment',

	'MCP_BAN'					=> 'Interziceţi',
	'MCP_BAN_EMAILS'			=> 'Interziceţi e-maiul-uri',
	'MCP_BAN_IPS'				=> 'Interziceţi IP-uri',
	'MCP_BAN_USERNAMES'			=> 'Interziceţi utilizatori',

	'MCP_LOGS'						=> 'Rapoartele moderatorilor',
	'MCP_LOGS_FRONT'				=> 'Prima pagină',
	'MCP_LOGS_FORUM_VIEW'			=> 'Rapoartele forumului',
	'MCP_LOGS_TOPIC_VIEW'			=> 'Rapoartele subiectelor',

	'MCP_MAIN'						=> 'Pagina principală',
	'MCP_MAIN_FORUM_VIEW'			=> 'Vizualizare forum',
	'MCP_MAIN_FRONT'				=> 'Prima pagină',
	'MCP_MAIN_POST_DETAILS'			=> 'Detaliile mesajului',
	'MCP_MAIN_TOPIC_VIEW'			=> 'Vizualizare subiect',
	'MCP_MAKE_ANNOUNCEMENT'			=> 'Adăugare anunţ',
	'MCP_MAKE_ANNOUNCEMENT_CONFIRM'	=> 'Sunteţi sigur(ă) că vreţi să marcaţi acest subiect ca anunţ?',
	'MCP_MAKE_ANNOUNCEMENTS'		=> 'Adăugare anunţuri',
	'MCP_MAKE_ANNOUNCEMENTS_CONFIRM'=> 'Sunteţi sigur(ă) că vreţi să marcaţi aceste subiecte ca anunţuri?',
	'MCP_MAKE_GLOBAL'				=> 'Adăugare anunţ global',
	'MCP_MAKE_GLOBAL_CONFIRM'		=> 'Sunteţi sigur(ă) că vreţi să marcaţi acest subiect ca un anunţ global?',
	'MCP_MAKE_GLOBALS'				=> 'Adăugare anunţuri globale',
	'MCP_MAKE_GLOBALS_CONFIRM'		=> 'Sunteţi sigur(ă) că vreţi să marcaţi subiectele selectate ca anunţuri globale?',
	'MCP_MAKE_STICKY'				=> 'Marcare ca important',
	'MCP_MAKE_STICKY_CONFIRM'		=> 'Sunteţi sigur(ă) că vreţi să marcaţi acest subiect ca fiind important?',
	'MCP_MAKE_STICKIES'				=> 'Marcare ca importante',
	'MCP_MAKE_STICKIES_CONFIRM'		=> 'Sunteţi sigur(ă) că vreţi să marcaţi aceste subiecte ca fiind importante?',
	'MCP_MAKE_NORMAL'				=> 'Marcare ca mesaj standard',
	'MCP_MAKE_NORMAL_CONFIRM'		=> 'Sunteţi sigur(ă) că vreţi să marcaţi acest mesaj ca mesaj standard?',
	'MCP_MAKE_NORMALS'				=> 'Marcare ca mesaje standard',
	'MCP_MAKE_NORMALS_CONFIRM'		=> 'Sunteţi sigur(ă) că vreţi să marcaţi mesajele selectate ca mesaje standard?',

	'MCP_NOTES'						=> 'Însemnări utilizator',
	'MCP_NOTES_FRONT'				=> 'Prima pagină',
	'MCP_NOTES_USER'				=> 'Detaliile utilizatorului',

	'MCP_POST_REPORTS'				=> 'Raportaţi probleme din acest mesaj',

	'MCP_REPORTS'					=> 'Mesaje raportate',
	'MCP_REPORT_DETAILS'			=> 'Detaliile raportului',
	'MCP_REPORTS_CLOSED'			=> 'Rapoarte închise',
	'MCP_REPORTS_CLOSED_EXPLAIN'	=> 'Aceasta este o listă a tuturor rapoartelor asupra mesajelor care au fost rezolvate anterior',
	'MCP_REPORTS_OPEN'				=> 'Deschide rapoarte',
	'MCP_REPORTS_OPEN_EXPLAIN'		=> 'Aceasta este o listă a tuturor mesajelor raportate de care încă ne ocupăm',

	'MCP_QUEUE'								=> 'Moderări în asteptare',
	'MCP_QUEUE_APPROVE_DETAILS'				=> 'Detaliile aprobării',
	'MCP_QUEUE_UNAPPROVED_POSTS'			=> 'Mesaje în aşteptare pentru a fi aprobate',
	'MCP_QUEUE_UNAPPROVED_POSTS_EXPLAIN'	=> 'Aceasta este o listă a tuturor mesajelor în aşteptare pentru a fi aprobate înainte de a deveni vizibile utilizatorilor',
	'MCP_QUEUE_UNAPPROVED_TOPICS'			=> 'Subiecte în aşteptare pentru a fi aprobate',
	'MCP_QUEUE_UNAPPROVED_TOPICS_EXPLAIN'	=> 'Aceasta este o listă a tuturor subiectelor în aşteptare pentru a fi aprobate înainte de a deveni vizibile utilizatorilor',

	'MCP_VIEW_USER'			=> 'Vedeţi avertismentele unui utilizator specific',

	'MCP_WARN'				=> 'Avertismente',
	'MCP_WARN_FRONT'		=> 'Prima pagină',
	'MCP_WARN_LIST'			=> 'Arătaţi avertismentele',
	'MCP_WARN_POST'			=> 'Avetrismente pentru un mesaj specific',
	'MCP_WARN_USER'			=> 'Avertizaţi utilizatorul',

	'MERGE_POSTS'			=> 'Uneşte mesajele',
	'MERGE_POSTS_CONFIRM'	=> 'Sunteţi sigur(ă) că vreţi să uniţi mesajele selectate?',
	'MERGE_TOPIC_EXPLAIN'	=> 'Folosind formularul de mai jos puteţi uni mesajele selectate într-un alt subiect. Aceste mesaje nu vor fi reordonate şi vor apărea ca şi cum utilizatorul le-ar fi publicat în noul subiect.<br />Introduceţi ID-ul subiectului destinaţie sau daţi click pe butonul "Selectaţi subiecte" pentru a cauta unul.',
	'MERGE_TOPIC_ID'		=> 'ID-ul subiectului destinaţie',
	'MERGE_TOPICS'			=> 'Uneşte subiecte',
	'MERGE_TOPICS_CONFIRM'	=> 'Sunteţi sigur(ă) că vreţi să uniţi subiectele selectate?',
	'MODERATE_FORUM'		=> 'Moderaţi forumul',
	'MODERATE_TOPIC'		=> 'Moderaţi subiectul',
	'MODERATE_POST'			=> 'Moderaţi mesajul',
	'MOD_OPTIONS'			=> 'Opţiunile moderatorului',
	'MORE_INFO'				=> 'Informaţii suplimentare',
	'MOST_WARNINGS'			=> 'Utilizatori cu cele mai multe avertismente',
	'MOVE_TOPIC_CONFIRM'	=> 'Sunteţi sigur(ă) că vreţi să mutaţi acest subiect într-un nou forum?',
	'MOVE_TOPICS'			=> 'Mutaţi subiectele selectate',
	'MOVE_TOPICS_CONFIRM'	=> 'Sunteţi sigur(ă) că vreţi să mutaţi subiectuele selectate într-un nou forum?',

	'NOTIFY_POSTER_APPROVAL'		=> 'Anunţaţi autorul postului de aprobare?',
	'NOTIFY_POSTER_DISAPPROVAL'		=> 'Anunţaţi autorul postului de dezaprobare?',
	'NOTIFY_USER_WARN'				=> 'Anunţaţi utilizatorul de avertisment?',
	'NOT_MODERATOR'					=> 'Nu sunteţi moderator în acest forum',
	'NO_DESTINATION_FORUM'			=> 'Selectaţi un forum pentru destinaţie',
	'NO_DESTINATION_FORUM_FOUND'	=> 'Nu există niciun forum destinaţie disponibil.',
	'NO_ENTRIES'					=> 'niciun log asupra acestui mesaj',
	'NO_FEEDBACK'					=> 'Nu există nicio parere despre acest utilizator',
	'NO_FINAL_TOPIC_SELECTED'		=> 'Trebuie să selectaţi un subiect destinaţie pentru a uni mesajele',
	'NO_MATCHES_FOUND'				=> 'niciun rezultat',
	'NO_POST'						=> 'Trebuie să selectaţi un mesaj pentru a da un avestisment',
	'NO_POST_REPORT'				=> 'Acet mesaj nu a fost raportat.',
	'NO_POST_SELECTED'				=> 'Trebuie să selectaţi cel puţin un mesaj pentru a efectua această acţiune',
	'NO_REASON_DISAPPROVAL'			=> 'Adăugaţi un motiv rezonabil pentru această dezaprobre',
	'NO_REPORT'						=> 'Nu a fost găsit niciun raport',
	'NO_REPORTS'					=> 'Nu a fost găsit niciun raport',	
	'NO_REPORT_SELECTED'			=> 'Trebuie să selectezi cel puţin o raport pentru a performa această acţiune.',
	'NO_TOPIC_ICON'					=> 'Nimic',
	'NO_TOPIC_SELECTED'				=> 'Trebuie să selectaţi cel puţin un subiect pentru a efectua această acţiune',
	'NO_TOPICS_QUEUE'				=> 'Nu sunt subiecte pentru a fi aprobate.',

	'ONLY_TOPIC'			=> 'Numai subiecte "%s"',
	'OTHER_USERS'			=> 'Utilizatorii care au publicat de la aceasta adresa de IP',

	'POSTER'					=> 'Autorul',
	'POSTS_APPROVED_SUCCESS'	=> 'Mesajele selectate au fost aprobate',
	'POSTS_DELETED_SUCCESS'		=> 'Mesajele selectate au fost şterse din baza de date cu succes',
	'POSTS_DISAPPROVED_SUCCESS'	=> 'Mesajele selectate au fost dezaprobate',
	'POSTS_LOCKED_SUCCESS'		=> 'Mesajele selectate au fost închise cu succes',
	'POSTS_MERGED_SUCCESS'		=> 'Mesajele selectate au fost unite',
	'POSTS_UNLOCKED_SUCCESS'	=> 'Mesajele selectate au fost deschise cu succes',
	'POSTS_PER_PAGE'			=> 'Mesaje pe pagină',
	'POSTS_PER_PAGE_EXPLAIN'	=> '(Setaţi 0 pentru a vedea toate mesajele)',
	'POST_APPROVED_SUCCESS'		=> 'Mesajul selectat a fost aprobat',
	'POST_DELETED_SUCCESS'		=> 'Mesajul selectat a fost şters din baza de date cu succes',
	'POST_DISAPPROVED_SUCCESS'	=> 'Mesajul selectat a fost dezaprobat',
	'POST_LOCKED_SUCCESS'		=> 'Mesaj închis cu succes',
	'POST_NOT_EXIST'			=> 'Mesajul cerut nu există',
	'POST_REPORTED_SUCCESS'		=> 'Acest mesaj a fost raportat cu succes',
	'POST_UNLOCKED_SUCCESS'		=> 'Mesaj deshis cu succes',

	'READ_USERNOTES'			=> 'Însemnările utilizatorului',
	'READ_WARNINGS'				=> 'Avertismentele utilizatorului',
	'REPORTER'					=> 'Cel care a raportat',
	'REPORTED'					=> 'Raportat',
	'REPORTED_BY'				=> 'Raportat de',
	'REPORTED_ON_DATE'			=> 'la',
	'REPORTS_CLOSED_SUCCESS'	=> 'Rapoartele selectate au fost închise cu succes.',
	'REPORTS_DELETED_SUCCESS'	=> 'Rapoartele selectate au fost şterse cu succes.',
	'REPORTS_TOTAL'				=> 'În total sunt <strong>%d</strong> rapoarte pentru revizuire',
	'REPORTS_ZERO_TOTAL'		=> 'Nu există niciun raport pentru revizuire',
	'REPORT_CLOSED'				=> 'Aceast raport a fost închis deja.',
	'REPORT_CLOSED_SUCCESS'		=> 'Raportul selectat a fost închis cu succes.',
	'REPORT_DELETED_SUCCESS'	=> 'Raportul selectat a fost ştears cu succes.',
	'REPORT_DETAILS'			=> 'Detaliile raportului',
	'REPORT_MESSAGE'			=> 'Raportaţi acest mesaj',
	'REPORT_MESSAGE_EXPLAIN'	=> 'Utilizaţi acest formular pentru a raportul mesajul selectat catre administratori. Rapoartele ar trebui folosite doar dacă mesajul respectiv încalcă regulile forumului.',
	'REPORT_NOTIFY'				=> 'Anunţaţi-mă',
	'REPORT_NOTIFY_EXPLAIN'		=> 'Veţi fi anunţat când raportul dumneavoastră a fost verificat',
	'REPORT_POST_EXPLAIN'		=> 'Utilizaţi acest formular pentru a raportul mesajul selectat catre administratori. Rapoartele ar trebui folosite doar dacă mesajul respectiv încalcă regulile forumului.',
	'REPORT_REASON'				=> 'Motivul raportului',
	'REPORT_TIME'				=> 'Data raportului',
	'REPORT_TOTAL'				=> 'În total există <strong>1</strong> raport pentru revizuire',
	'RESYNC'					=> 'Resincronizare',
	'RETURN_MESSAGE'			=> '%sReveniţi la mesaj%s',
	'RETURN_NEW_FORUM'			=> '%sDu-te la noul forum%s',
	'RETURN_NEW_TOPIC'			=> '%sDu-te la noul subiect%s',
	'RETURN_POST'				=> '%sReveniţi la mesaj%s',
	'RETURN_QUEUE'				=> '%sReveniţi la listă%s',
	'RETURN_REPORTS'			=> '%sReveniţi la rapoarte%s',
	'RETURN_TOPIC_SIMPLE'		=> '%sReveniţi la subiect%s',

	'SEARCH_POSTS_BY_USER'		=> 'Cautaţi mesaje după',
	'SELECT_ACTION'				=> 'Selectaţi acţiunea dorită',
	'SELECT_FORUM_GLOBAL_ANNOUNCEMENT'	=> 'Selectaţi forumul în care doriţi ca acest anunţ global să fie afişat.',
	'SELECT_FORUM_GLOBAL_ANNOUNCEMENTS'	=> 'Unul sau mai multe subiecte sunt anunţuri globale. Vă rugăm să selectaţi forumul în care doreiţi ca acestea să fie afişate.',
	'SELECT_MERGE'				=> 'Selectaţi pentru unire',
	'SELECT_TOPICS_FROM'		=> 'Selectaţi subiecte după',
	'SELECT_TOPIC'				=> 'Selectaţi subiecte',
	'SELECT_USER'				=> 'Selectaţi utilizator',
	'SORT_ACTION'				=> 'Înregistraţi acţiune',
	'SORT_DATE'					=> 'Date',
	'SORT_IP'					=> 'Adresa de IP',
	'SORT_WARNINGS'				=> 'Avertismente',
	'SPLIT_AFTER'				=> 'Împarte de la mesajul selectat',
	'SPLIT_FORUM'				=> 'Forum deviat din noul subiect',
	'SPLIT_POSTS'				=> 'Împarte mesajele selectate',
	'SPLIT_SUBJECT'				=> 'Titlul noului subiect',
	'SPLIT_TOPIC_ALL'			=> 'Împarte subiectul după mesajele selectate',
	'SPLIT_TOPIC_ALL_CONFIRM'	=> 'Sunteţi sigur(ă) că vreţi să împărţiţi acest subiect?',
	'SPLIT_TOPIC_BEYOND'		=> 'Împarte acest subiect de la mesajul selectat',
	'SPLIT_TOPIC_BEYOND_CONFIRM'=> 'Sunteţi sigur(ă) că vreţi să împărţiţi acest subiect de la mesajul selectat?',
	'SPLIT_TOPIC_EXPLAIN'		=> 'Folosind formularul următor puteţi împărţi un subiect în două prin selectarea indivituală a mesajelor sau împărţind de la mesajul selectat',

	'THIS_POST_IP'				=> 'IP-ul acestui mesaj',
	'TOPICS_APPROVED_SUCCESS'	=> 'Subiectele selectate au fost aprobate',
	'TOPICS_DELETED_SUCCESS'	=> 'Subiectele selectate au fost şterse cu succes din baza de date',
	'TOPICS_DISAPPROVED_SUCCESS'=> 'Subiectele selectate au fost dezaprobate',
	'TOPICS_FORKED_SUCCESS'		=> 'Subiectele selectate au fost copiate cu succes',
	'TOPICS_LOCKED_SUCCESS'		=> 'Subiectele selectate au fost închise',
	'TOPICS_MOVED_SUCCESS'		=> 'Subiectele selectate au fost mutate cu succes',
	'TOPICS_RESYNC_SUCCESS'		=> 'Subiectele selectate au fost resincronizate',
	'TOPICS_TYPE_CHANGED'		=> 'Tipurile subiectului au fost schimbate cu succes.',
	'TOPICS_UNLOCKED_SUCCESS'	=> 'Subiectele selectate au fost deschise',
	'TOPIC_APPROVED_SUCCESS'	=> 'Subiectul selectat a fost aprobat',
	'TOPIC_DELETED_SUCCESS'		=> 'Subiectul selectat a fost şters cu succes din baza de date',
	'TOPIC_DISAPPROVED_SUCCESS'	=> 'Subiectul selectat a fost dezaprobat',
	'TOPIC_FORKED_SUCCESS'		=> 'Subiectul selectat a fost copiat cu succes',
	'TOPIC_LOCKED_SUCCESS'		=> 'Subiectul selectat a fost închis',
	'TOPIC_MOVED_SUCCESS'		=> 'Subiectul selectat a fost mutat cu succes',
	'TOPIC_NOT_EXIST'			=> 'Subiectul selectat nu există',
	'TOPIC_RESYNC_SUCCESS'		=> 'Subiectul selectat a fost resincronizat',
	'TOPIC_SPLIT_SUCCESS'		=> 'Subiectul selectat a fost împărţit cu succes',
	'TOPIC_TIME'				=> 'Data subiectului',
	'TOPIC_TYPE_CHANGED'		=> 'Tipul subiectului a fost modificat cu succes.',
	'TOPIC_UNLOCKED_SUCCESS'	=> 'Subiectul selectat a fost deschis',
	'TOTAL_WARNINGS'			=> 'Avertismente totale',

	'UNAPPROVED_POSTS_TOTAL'		=> 'În total există <strong>%d</strong> mesaje în aşteptare pentru a fi aprobate',
	'UNAPPROVED_POSTS_ZERO_TOTAL'	=> 'Nu există mesaje în aşteptare pentru a fi aprobate',
	'UNAPPROVED_POST_TOTAL'			=> 'În total exista <strong>1</strong> mesaj în aşteptare pentru a fi aprobat',
	'UNLOCK'						=> 'Deschide',
	'UNLOCK_POST'					=> 'Deblocaţi mesajul',
	'UNLOCK_POST_EXPLAIN'			=> 'Permiteţi modificarea',
	'UNLOCK_POST_POST'				=> 'Deblocaţi mesajul',
	'UNLOCK_POST_POST_CONFIRM'		=> 'Sunteţi sigur(ă) că vreţi să permiteţi modificarea acestui mesaj?',
	'UNLOCK_POST_POSTS'				=> 'Deblochează mesajele selectate',
	'UNLOCK_POST_POSTS_CONFIRM'		=> 'Sunteţi sigur(ă) că vreţi să permiteţi modificarea mesajelor selectate?',
	'UNLOCK_TOPIC'					=> 'Deblocaţi subiectul',
	'UNLOCK_TOPIC_CONFIRM'			=> 'Sunteţi sigur(ă) că vreţi să deblocaţi acest subiect?',
	'UNLOCK_TOPICS'					=> 'Deblocaţi subiectele selectate',
	'UNLOCK_TOPICS_CONFIRM'			=> 'Sunteţi sigur(ă) că vreţi să deblocaţi toate subiectele selectate?',
	'USER_CANNOT_POST'				=> 'Nu puteţi publica în acest forum',
	'USER_CANNOT_REPORT'			=> 'Nu puteţi raportul mesaje în acest forum',
	'USER_FEEDBACK_ADDED'			=> 'Părerea utilizatorului adăugată cu succes.',
	'USER_WARNING_ADDED'			=> 'Utilizator avertizat cu succes.',

	'VIEW_DETAILS'			=> 'Vedeţi detaliile',

	'WARNED_USERS'			=> 'Utilizatori avertizaţi',
	'WARNED_USERS_EXPLAIN'	=> 'Aceasta este o listă a utilizatorilor cu avertizări neexpirate asupra lor.',
	'WARNING_PM_BODY'		=> 'Următorul este un avertisment emis de un administrator sau un moderator asupra dumneavoastră.[quote]%s[/quote]',
	'WARNING_PM_SUBJECT'	=> 'Avertismentele emise',
	'WARNING_POST_DEFAULT'	=> 'Acesta este un avertisment asupra următorului mesaj publicat de dumneavoastră: %s',
	'WARNINGS_ZERO_TOTAL'	=> 'Nu există avertismente',

	'YOU_SELECTED_TOPIC'	=> 'Aţi selectat numărul subiectului %d: %s',

	'report_reasons'		=> array(
		'TITLE'	=> array(
			'WAREZ'		=> 'Warez',
			'SPAM'		=> 'Spam',
			'OFF_TOPIC'	=> 'În afara subiectului',
			'OTHER'		=> 'Altele'
		),
		'DESCRIPTION' => array(
			'WAREZ'		=> 'Acest mesaj conţine adrese către situri cu programe ilegale sau piratatate',
			'SPAM'		=> 'Mesajul raportat are ca singur scop reclamă pentru un site sau produs',
			'OFF_TOPIC'	=> 'Mesajul raportat nu are legătură cu subiectul',
			'OTHER'		=> 'Mesajul raportat nu se potriveşte în nicio altă categorie, vă rugăm să folosiţi câmpul de mai jos pentru descriere'
		)
	),
));

?>