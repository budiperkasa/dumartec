<?php
/**
*
* mcp [Brezhoneg]
*
* @package language
* @version $Id: mcp.php 8479 2008-03-29 00:22:48Z naderman $
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
	'ACTION'				=> 'Oberenn',
	'ACTION_NOTE'			=> 'Oberenn/Notenn',
	'ADD_FEEDBACK'			=> 'Ouzhpennañ un evezhiadenn',
	'ADD_FEEDBACK_EXPLAIN'	=> 'M\'ho peus c\'hoant da ouzhpennañ un danevell diwar-benn an dra-mañ, leuniit ar furmskrid-mañ. Grit gant testenn plaen hepken, ne vez ket aotreet an HTML, ar BBCode, h.a..',
	'ADD_WARNING'			=> 'Ouzhpennañ ur c\'hemenn groñs',
	'ADD_WARNING_EXPLAIN'	=> 'Evit kas ur c\'hemenn groñs d\'an ezel-mañ, leuniit ar furmskrid-mañ. Grit gant testenn plaen hepken, ne vez ket aotreet an HTML, ar BBCode, h.a..',
	'ALL_ENTRIES'			=> 'An holl zoneoù',
	'ALL_NOTES_DELETED'		=> 'Tennet eo bet holl notennoù an ezel.',
	'ALL_REPORTS'			=> 'An holl danevelloù',
	'ALREADY_REPORTED'		=> 'Un danevell a zo bet graet c\'hoazh diwar-benn ar gemennadenn-mañ.',
	'ALREADY_WARNED'		=> 'Ur c\'hemenn groñs a zo bet kaset c\'hoazh evit ar gemennadenn-mañ.',
	'APPROVE'				=> 'Asantiñ',
	'APPROVE_POST'			=> 'Asantiñ ar gemennadenn',
	'APPROVE_POST_CONFIRM'	=> 'Ha sur oc\'h ho peus c\'hoant da asantiñ ar gemennadenn-mañ ?',
	'APPROVE_POSTS'			=> 'Asantiñ ar c\'hemennadennoù',
	'APPROVE_POSTS_CONFIRM'	=> 'Ha sur oc\'h ho peus c\'hoant da asantiñ ar c\'hemennadennoù-mañ ?',

	'CANNOT_MOVE_SAME_FORUM'=> 'N\'hallit ket fiñval ur sujed betek ur forom m\'emañ dija ennañ.',
	'CANNOT_WARN_ANONYMOUS'	=> 'N\'hallit ket kas ur c\'hemenn groñs d\'unan ha n\'eo ket ezel.',
	'CANNOT_WARN_SELF'		=> 'N\'hallit ket kas ur c\'hemenn groñs deoc\'h ho-unan.',
	'CAN_LEAVE_BLANK'		=> 'N\'eo ket ret skrivañ un dra bennak amañ.',
	'CHANGE_POSTER'			=> 'Cheñch ar c\'haser',
	'CLOSE_REPORT'			=> 'Serriñ an danevell',
	'CLOSE_REPORT_CONFIRM'	=> 'Ha sur oc\'h ho peus c\'hoant da serriñ an danevell-mañ ?',
	'CLOSE_REPORTS'			=> 'Serriñ an danevelloù',
	'CLOSE_REPORTS_CONFIRM'	=> 'Ha sur oc\'h ho peus c\'hoant da serriñ an danevelloù-mañ ?',

	'DELETE_POSTS'				=> 'Dilemel ar c\'hemennadennoù',
	'DELETE_POSTS_CONFIRM'		=> 'Ha sur oc\'h ho peus c\'hoant da zilemel ar c\'hemennadennoù-mañ ?',
	'DELETE_POST_CONFIRM'		=> 'Ha sur oc\'h ho peus c\'hoant da zilemel ar gemennadenn-mañ ?',
	'DELETE_REPORT'				=> 'Dilemel an danevell',
	'DELETE_REPORT_CONFIRM'		=> 'Ha sur oc\'h ho peus c\'hoant da ziverkañ an danevell bet diuzet ?',
	'DELETE_REPORTS'			=> 'Dilemel an danevelloù',
	'DELETE_REPORTS_CONFIRM'	=> 'Ha sur oc\'h ho peus c\'hoant da ziverkañ an danevelloù bet diuzet ?',
	'DELETE_SHADOW_TOPIC'		=> 'Dilemel ar sujed heulier',
	'DELETE_TOPICS'				=> 'Dilemel ar sujedoù diuzet',
	'DELETE_TOPICS_CONFIRM'		=> 'Ha sur oc\'h ho peus c\'hoant da zilemel ar sujedoù-mañ ?',
	'DELETE_TOPIC_CONFIRM'		=> 'Ha sur oc\'h ho peus c\'hoant da zilemel ar sujed-mañ ?',
	'DISAPPROVE'				=> 'Nac\'hañ',
	'DISAPPROVE_REASON'			=> 'Abegoù evit nac\'hañ',
	'DISAPPROVE_POST'			=> 'Nac\'hañ ar gemennadenn',
	'DISAPPROVE_POST_CONFIRM'	=> 'Ha sur oc\'h ho peus c\'hoant da nac\'hañ ar gemennadenn ?',
	'DISAPPROVE_POSTS'			=> 'Nac\'hañ ar c\'hemennadennoù',
	'DISAPPROVE_POSTS_CONFIRM'	=> 'Ha sur oc\'h ho peus c\'hoant da nac\'hañ ar c\'hemennadennoù bet diuzet ?',
	'DISPLAY_LOG'				=> 'Diskouez an doneoù adalek an hini a-raok',
	'DISPLAY_OPTIONS'			=> 'Dilennoù diskwel',

	'EMPTY_REPORT'					=> 'Dav eo deoc\'h ouzhpennañ un deskrivadur ma tibabit an abeg-mañ.',
	'EMPTY_TOPICS_REMOVED_WARNING'	=> 'Ur sujed pe meur a hini a zo bet tennet ouzh an diaz-titouroù peogwir e oant pe int deuet da vezañ goullo.',

	'FEEDBACK'				=> 'Evezhiadenn',
	'FORK'					=> 'Eilskoueriañ',
	'FORK_TOPIC'			=> 'Eilskoueriañ ar sujed',
	'FORK_TOPIC_CONFIRM'	=> 'Ha sur oc\'h ho peus c\'hoant d\'ober un eil skouerenn ouzh ar sujed ?',
	'FORK_TOPICS'			=> 'Eilskoueriañ ar sujedoù diuzet',
	'FORK_TOPICS_CONFIRM'	=> 'Ha sur oc\'h ho peus c\'hoant d\'ober un eil skouerenn ouzh ar sujedoù diuzet?',
	'FORUM_DESC'			=> 'Deskrivadur',
	'FORUM_NAME'			=> 'Anv ar forom',
	'FORUM_NOT_EXIST'		=> 'N\'eus ket ouzh ar forom bet dibabet ganeoc\'h.',
	'FORUM_NOT_POSTABLE'	=> 'N\'eus ket tu da gas kemennadennoù er forom bet dibabet ganeoc\'h.',
	'FORUM_STATUS'			=> 'Statud ar forom',
	'FORUM_STYLE'			=> 'Gwiskadur ar forom',

	'GLOBAL_ANNOUNCEMENT'	=> 'Kemenn hollek',

	'IP_INFO'				=> 'Titouroù diwar-benn ar c\'homlec\'h IP',
	'IPS_POSTED_FROM'		=> 'Diskouezh a ra an IP en deus postet an ezel eus',

	'LATEST_LOGS'				=> '5 oberenn anavezet diwezhañ',
	'LATEST_REPORTED'			=> '5 danevell diwezhañ',
	'LATEST_UNAPPROVED'			=> '5 kemennadenn diwezhañ o c\'hortoz un asant',
	'LATEST_WARNING_TIME'		=> 'Kemenn groñs diwezhañ',
	'LATEST_WARNINGS'			=> '5 kemenn groñs diwezhañ',
	'LEAVE_SHADOW'				=> 'Lezel ur sujed heulier en e blas',
	'LIST_REPORT'				=> '1 danevell',
	'LIST_REPORTS'				=> '%d danevell',
	'LOCK'						=> 'Prennañ',
	'LOCK_POST_POST'			=> 'Prennañ ar gemennadenn',
	'LOCK_POST_POST_CONFIRM'	=> 'Ha sur oc\'h ho peus c\'hoant da herzel ma vefe kemmet ar gemennadenn-mañ?',
	'LOCK_POST_POSTS'			=> 'Prennañ ar c\'hemennadennoù bet diuzet',
	'LOCK_POST_POSTS_CONFIRM'	=> 'Ha sur oc\'h ho peus c\'hoant da herzel ma vefe kemmet ar c\'hemennadennoù bet diuzet ?',
	'LOCK_TOPIC_CONFIRM'		=> 'Ha sur oc\'h ho peus c\'hoant da brennañ ar sujed ?',
	'LOCK_TOPICS'				=> 'Prennañ ar sujedoù diuzet',
	'LOCK_TOPICS_CONFIRM'		=> 'Ha sur oc\'h ho peus c\'hoant da brennañ an holl sujedoù bet diuzet ?',
	'LOGS_CURRENT_TOPIC'		=> 'O welet <i>log</i>:',
	'LOGIN_EXPLAIN_MCP'			=> 'Evit ober war-dro ar forom-mañ eo dav deoc\'h bezañ anavezet.',
	'LOGVIEW_VIEWTOPIC'			=> 'Gwelet ar sujed',
	'LOGVIEW_VIEWLOGS'			=> 'Gwelet <i>log</i> ar sujed',
	'LOGVIEW_VIEWFORUM'			=> 'Gwelet ar forom',
	'LOOKUP_ALL'				=> 'Gwelet an holl IPoù',
	'LOOKUP_IP'					=> 'Gwelet an IP',

	'MARKED_NOTES_DELETED'		=> 'Tenent eo bet notennoù an ezel.',

	'MCP_ADD'						=> 'Ouzhpennañ ur c\'hemenn groñs',

	'MCP_BAN'					=> 'Skarzhañ',
	'MCP_BAN_EMAILS'			=> 'Harluiñ postelioù',
	'MCP_BAN_IPS'				=> 'Harluiñ IPoù',
	'MCP_BAN_USERNAMES'			=> 'Harluiñ anvioù-ezel',

	'MCP_LOGS'						=> 'Logoù ar gasourien',
	'MCP_LOGS_FRONT'				=> 'Pajenn pennañ',
	'MCP_LOGS_FORUM_VIEW'			=> 'Logoù ar foromoù',
	'MCP_LOGS_TOPIC_VIEW'			=> 'Logoù ar sujedoù',

	'MCP_MAIN'						=> 'Pennañ',
	'MCP_MAIN_FORUM_VIEW'			=> 'Gwelet ar forom',
	'MCP_MAIN_FRONT'				=> 'Pajenn pennañ',
	'MCP_MAIN_POST_DETAILS'			=> 'Titouroù diwar-benn ar gemennadenn',
	'MCP_MAIN_TOPIC_VIEW'			=> 'Gwelet ar sujed',
	'MCP_MAKE_ANNOUNCEMENT'			=> 'Lakaat da “g/Kemenn”',
	'MCP_MAKE_ANNOUNCEMENT_CONFIRM'	=> 'Ha sur oc\'h ho peus c\'hoant lakaat ar sujed-mañ da vezañ ur  “c\'hKemenn” ?',
	'MCP_MAKE_ANNOUNCEMENTS'		=> 'Lakaat da “g/Kemennoù”',
	'MCP_MAKE_ANNOUNCEMENTS_CONFIRM'=> 'Ha sur oc\'h ho peus c\'hoant da lakaat ar sujedoù-mañ da vezañ “Kemennoù” ?',
	'MCP_MAKE_GLOBAL'				=> 'Lakaat da “g/Kemenn hollek”',
	'MCP_MAKE_GLOBAL_CONFIRM'		=> 'Ha sur oc\'h ho peus c\'hoant da lakaat ar sujed-mañ da vezañ ur “c\'h/Kemenn Hollek” ?',
	'MCP_MAKE_GLOBALS'				=> 'Lakaat da “g/Kemennoù Hollek”',
	'MCP_MAKE_GLOBALS_CONFIRM'		=> 'Ha sur oc\'h ho peus c\'hoant da lakaat ar sujedoù-mañ da vezañ “Kemennoù Hollek” ?',
	'MCP_MAKE_STICKY'				=> 'Lakaat da “b/Post-it”',
	'MCP_MAKE_STICKY_CONFIRM'		=> 'Ha sur oc\'h ho peus c\'hoant da lakaat ar sujed-mañ da vezañ ur “Post-it” ?',
	'MCP_MAKE_STICKIES'				=> 'Lakaat da “b/Postoù-it”',
	'MCP_MAKE_STICKIES_CONFIRM'		=> 'Ha sur oc\'h ho peus c\'hoant da lakaat ar sujedoù-mañ da vezañ “Postoù-it” ?',
	'MCP_MAKE_NORMAL'				=> 'Lakaat da “gemennadenn voutin”',
	'MCP_MAKE_NORMAL_CONFIRM'		=> 'Ha sur oc\'h ho peus c\'hoant da lakaat ar sujed-mañ da vezañ ur “c\'hemennadenn voutin” ?',
	'MCP_MAKE_NORMALS'				=> 'Lakaat da “gemennadennoù boutin”',
	'MCP_MAKE_NORMALS_CONFIRM'		=> 'Ha sur oc\'h ho peus c\'hoant da lakaat ar sujedoù-mañ da vezañ “kemennadennoù boutin” ?',

	'MCP_NOTES'						=> 'Notennoù an ezel',
	'MCP_NOTES_FRONT'				=> 'Pajenn pennañ',
	'MCP_NOTES_USER'				=> 'Titouroù diwar-benn an ezel',

	'MCP_POST_REPORTS'				=> 'Danevelloù bet graet diwar-benn ar gemennadenn-mañ',

	'MCP_REPORTS'					=> 'Kemennadennoù bet savet un danevell diwar o fenn ',
	'MCP_REPORT_DETAILS'			=> 'Titouroù diwar-benn an danevell',
	'MCP_REPORTS_CLOSED'			=> 'Danevelloù bet serret',
	'MCP_REPORTS_CLOSED_EXPLAIN'	=> 'Amañ e vez kavet ul listenn ouzh an holl gemennadennoù a zo bet kavet un diskoulm dezho.',
	'MCP_REPORTS_OPEN'				=> 'Digeriñ an danevelloù',
	'MCP_REPORTS_OPEN_EXPLAIN'		=> 'Amañ e vez kavet ul listenn ouzh an holl danevelloù a chom d\'ober ganto.',

	'MCP_QUEUE'								=> 'Listenn ar pezh a zo war-c\'hortoz',
	'MCP_QUEUE_APPROVE_DETAILS'				=> 'Asantiñ an titouroù',
	'MCP_QUEUE_UNAPPROVED_POSTS'			=> 'Kemennadennoù o c\'hortoz un asant',
	'MCP_QUEUE_UNAPPROVED_POSTS_EXPLAIN'	=> 'Amañ e vez kavet ul listenn ouzh an holl gemennadennoù a c\'hortoz bezañ asantet a-raok gallout bezañ gwelet.',
	'MCP_QUEUE_UNAPPROVED_TOPICS'			=> 'Sujedoù o c\'hortoz un asant',
	'MCP_QUEUE_UNAPPROVED_TOPICS_EXPLAIN'	=> 'Amañ e vez kavet ul listenn ouzh an holl sujedoù a c\'hortoz bezañ asantet a-raok gallout bezañ gwelet.',

	'MCP_VIEW_USER'			=> 'Gwelet ar c\'hemennoù-groñs evit un ezel resis',

	'MCP_WARN'				=> 'Kemennoù-Groñs',
	'MCP_WARN_FRONT'		=> 'Pajenn pennañ',
	'MCP_WARN_LIST'			=> 'Listennañ ar c\'hemennoù-groñs',
	'MCP_WARN_POST'			=> 'Kas ur c\'hemenn groñs evit ur gemennadenn resis',
	'MCP_WARN_USER'			=> 'Kas ur c\'hemenn groñs d\'un ezel',

	'MERGE_POSTS'			=> 'Lakaat ar c\'hemennadennoù da gendeuziñ',
	'MERGE_POSTS_CONFIRM'	=> 'Ha sur oc\'h ho peus c\'hoant da lakaat ar c\'hemennadennoù diuzet da gendeuziñ ?',
	'MERGE_TOPIC_EXPLAIN'	=> 'Gant ar furmskrid-mañ e c\'hellit dilec\'hiañ ar c\'hemennadennoù diuzet davet ur sujed a zo outañ c\'hoazh. Ne vint ket adurzhiet hag e vo graet evel pa vefe bet respontet d\'ar sujed pal gant an ezel.<br />Roit niverenn ar sujed, pe klikit war “Kavout ur sujed” evit klask unan.',
	'MERGE_TOPIC_ID'		=> 'Niverenn anavezout ar sujed pal',
	'MERGE_TOPICS'			=> 'Lakaat ar c\'hemennadennoù da gendeuziñ',
	'MERGE_TOPICS_CONFIRM'	=> 'Ha sur oc\'h ho peus c\'hoant da lakaat ar c\'hemennadennoù da gendeuziñ ?',
	'MODERATE_FORUM'		=> 'Ober war-dro ar forom',
	'MODERATE_TOPIC'		=> 'Ober war-dro ar sujed',
	'MODERATE_POST'			=> 'Ober war-dro ar gemennadenn',
	'MOD_OPTIONS'			=> 'Dilennoù ar c\'hasour',
	'MORE_INFO'				=> 'Titouroù ouzhpenn',
	'MOST_WARNINGS'			=> 'Implijerien gant ar muiañ a gemennoù groñs',
	'MOVE_TOPIC_CONFIRM'	=> 'Ha sur oc\'h ho peus c\'hoant da zilec\'hiañ ar sujed davet ur forom all ?',
	'MOVE_TOPICS'			=> 'Dilec\'hioù ar sujedoù diuzet',
	'MOVE_TOPICS_CONFIRM'	=> 'Ha sur oc\'h ho peus c\'hoant da zilec\'hiañ ar sujedoù diuzet davet ur forom all ?',

	'NOTIFY_POSTER_APPROVAL'		=> 'Kelaouiñ an aozer ouzh an asant ?',
	'NOTIFY_POSTER_DISAPPROVAL'		=> 'Kelaouiñ an aozer ouzh an nac\'hañ ?',
	'NOTIFY_USER_WARN'				=> 'Kelaouiñ an aozer ouzh ar c\'hemenn groñs ?',
	'NOT_MODERATOR'					=> 'N\'oc\'h ket kasour eus ar forom-mañ.',
	'NO_DESTINATION_FORUM'			=> 'Diuzit ur forom pal.',
	'NO_DESTINATION_FORUM_FOUND'	=> 'N\'eus forom ebet a c\'heller dilec\'hiañ davetañ.',
	'NO_ENTRIES'					=> 'Done ebet en ul <i>log</i> evit ar mare-se.',
	'NO_FEEDBACK'					=> 'N\'eus evezhiadenn ebet evit an implijer-mañ.',
	'NO_FINAL_TOPIC_SELECTED'		=> 'Dav eo deoc\'h dibab ur sujed ma vo kendeuzet ar c\'hemennadennoù ennañ.',
	'NO_MATCHES_FOUND'				=> 'N\'eus bet kavet netra.',
	'NO_POST'						=> 'Dav eo deoc\'h dibab ur gemennadenn evit kas ur c\'hemenn-groñs diwar-benn ur gemennadenn.',
	'NO_POST_REPORT'				=> 'N\'eus bet graet danevell ebet diwar-benn ar gemennadenn-mañ.',
	'NO_POST_SELECTED'				=> 'Dav eo deoc\'h diuz ur gemennadenn d\'an nebeutañ evit gallout ober se.',
	'NO_REASON_DISAPPROVAL'			=> 'Roit un abeg mat evit an nac\'hañ.',
	'NO_REPORT'						=> 'N\'eus bet kavet danevell ebet',
	'NO_REPORTS'					=> 'N\'eus bet kavet danevell ebet',
	'NO_REPORT_SELECTED'			=> 'Dav eo deoc\'h diuz un danevell d\'an nebeud evit gallout ober se.',
	'NO_TOPIC_ICON'					=> 'Hini ebet',
	'NO_TOPIC_SELECTED'				=> 'Dav eo deoc\'h diuz ur sujed d\'an nebeutañ evit gallout ober se.',
	'NO_TOPICS_QUEUE'				=> 'N\'eus sujed ebet o c\'hortoz un asant',

	'ONLY_TOPIC'			=> 'Sujed “%s” hepken',
	'OTHER_USERS'			=> 'Izili all o kas adalek an IP-mañ',

	'POSTER'					=> 'Aozer',
	'POSTS_APPROVED_SUCCESS'	=> 'Asantet eo bet ar c\'hemennadennoù bet diuzet.',
	'POSTS_DELETED_SUCCESS'		=> 'Tennet eo bet ar c\'hemennadennoù bet diuzet ouzh an diaz-titouroù.',
	'POSTS_DISAPPROVED_SUCCESS'	=> 'Nac\'het eo bet ar c\'hemennadennoù bet diuzet.',
	'POSTS_LOCKED_SUCCESS'		=> 'Prennet eo bet ar c\'hemennadennoù bet diuzet.',
	'POSTS_MERGED_SUCCESS'		=> 'Lakaet ez eus bet ar c\'hemennadennoù bet diuzet da gendeuziñ.',
	'POSTS_UNLOCKED_SUCCESS'	=> 'Dibrennet eo bet ar c\'hemennadennoù bet diuzet.',
	'POSTS_PER_PAGE'			=> 'Kemennadennoù war bep pajenn',
	'POSTS_PER_PAGE_EXPLAIN'	=> '(Lakait 0 evit gwelet an holl gemennadennoù.)',
	'POST_APPROVED_SUCCESS'		=> 'Asantet eo bet ar gemennadenn bet diuzet.',
	'POST_DELETED_SUCCESS'		=> 'Tennet eo bet ar gemennadenn bet diuzet ouzh an diaz-titouroù.',
	'POST_DISAPPROVED_SUCCESS'	=> 'Nac\'het eo bet ar gemennadenn bet diuzet.',
	'POST_LOCKED_SUCCESS'		=> 'Prennet eo bet ar gemennadenn bet diuzet.',
	'POST_NOT_EXIST'			=> 'N\'eus ket ouzh ar gemennadenn emaoc\'h o klask.',
	'POST_REPORTED_SUCCESS'		=> 'Un danevell a zo bet graet diwar-benn ar gemennadenn-mañ.',
	'POST_UNLOCKED_SUCCESS'		=> 'Dibrennet eo bet ar gemenndenn.',

	'READ_USERNOTES'			=> 'Notennoù an ezel',
	'READ_WARNINGS'				=> 'Kemennoù groñs an ezel',
	'REPORTER'					=> 'Daneveller',
	'REPORTED'					=> 'Bet savet un danevell diwar e benn',
	'REPORTED_BY'				=> 'Bet savet un danevell diwar e benn gant',
	'REPORTED_ON_DATE'			=> 'd\'an',
	'REPORTS_CLOSED_SUCCESS'	=> 'Serret eo bet an danevell bet diuzet.',
	'REPORTS_DELETED_SUCCESS'	=> 'Dilamet eo bet an danevelloù bet diuzet.',
	'REPORTS_TOTAL'				=> 'En holl ez eus <strong>%d</strong> danevell da welet.',
	'REPORTS_ZERO_TOTAL'		=> 'N\'eus danevell ebet da welet.',
	'REPORT_CLOSED'				=> 'Serret eo bet an danevell c\'hoazh.',
	'REPORT_CLOSED_SUCCESS'		=> 'Serret eo bet an danevell.',
	'REPORT_DELETED_SUCCESS'	=> 'Dilamet eo bet an danevell.',
	'REPORT_DETAILS'			=> 'Titouroù an danevell',
	'REPORT_MESSAGE'			=> 'Sevel un danevell diwar-benn ar gemennadenn-mañ',
	'REPORT_MESSAGE_EXPLAIN'	=> 'Grit gant ar furmskrid-mañ evit sevel un danevell a vo kaset d\'ur c\'hasour pe ur merour eus ar foroù diwar-benn ar gemennadenn-mañ. N\'en deus un danevell da vezañ savet nemet ma ne touj ket ar gemennadenn ouzh reolennoù ar forom.',
	'REPORT_NOTIFY'				=> 'Kelaouiñ ac\'hanon',
	'REPORT_NOTIFY_EXPLAIN'		=> 'Kelaouet e voc\'h pa vo taolet pled ouzh an danevell-mañ.',
	'REPORT_POST_EXPLAIN'		=> 'Grit gant ar furmskrid-mañ evit sevel un danevell a vo kaset d\'ur c\'hasour pe ur merour eus ar forom diwar-benn ar c\'hemennadennoù bet diuzet. N\'en deus un danevell da vezañ savet nemet ma ne touj ket ar gemennadenn ouzh reolennoù ar forom.',
	'REPORT_REASON'				=> 'Abegoù an danevell',
	'REPORT_TIME'				=> 'Mare an danevell',
	'REPORT_TOTAL'				=> 'En holl ez eus <strong>1</strong> danevell da welet.',
	'RESYNC'					=> 'Adkenamzeriañ',
	'RETURN_MESSAGE'			=> '%sDistreiñ d\'ar gerig%s',
	'RETURN_NEW_FORUM'			=> '%sMont d\'ar forom nevez%s',
	'RETURN_NEW_TOPIC'			=> '%sMont d\'ar sujed nevez%s',
	'RETURN_POST'				=> '%sDistreiñ d\'ar gemennadenn%s',
	'RETURN_QUEUE'				=> '%sDistreiñ d\'al listenn%s',
	'RETURN_REPORTS'			=> '%sDistreiñ d\'an danevelloù%s',
	'RETURN_TOPIC_SIMPLE'		=> '%sDistreiñ d\'ar sujed%s',

	'SEARCH_POSTS_BY_USER'				=> 'Klask kemennadennoù',
	'SELECT_ACTION'						=> 'Dibabit an oberenn ho peus c\'hoant',
	'SELECT_FORUM_GLOBAL_ANNOUNCEMENT'	=> 'Dibabit ar forom m\'ho peus c\'hoant ma vefe diskouezet ar C\'hemenn hollek-mañ ennañ.',
	'SELECT_FORUM_GLOBAL_ANNOUNCEMENTS'	=> 'Kemennoù Hollek eo unan pe ouzhpenn ouzh ar c\'hemennadennoù bet diuzet. Dibabit ar forom m\'ho peus c\'hoant ma vefent gwelet ennañ.',
	'SELECT_MERGE'						=> 'Diuz evit kendeuziñ',
	'SELECT_TOPICS_FROM'				=> 'Diuz sujedoù eus',
	'SELECT_TOPIC'						=> 'Kavout ur sujed',
	'SELECT_USER'						=> 'Diuz un ezel',
	'SORT_ACTION'						=> 'oberenn <i>log</i>',
	'SORT_DATE'							=> 'Deiziad',
	'SORT_IP'							=> 'Chomlec\'h IP',
	'SORT_WARNINGS'						=> 'Kemennoù Groñs',
	'SPLIT_AFTER'						=> 'Rannañ adalek ar gemennadenn diuzet',
	'SPLIT_FORUM'						=> 'Forom degemer ar sujed nevez',
	'SPLIT_POSTS'						=> 'Rannañ ar sujedoù diuzet',
	'SPLIT_SUBJECT'						=> 'Titl ar sujed nevez',
	'SPLIT_TOPIC_ALL'					=> 'Rannañ ar sujed adalek ar c\'hemennadennoù diuzet',
	'SPLIT_TOPIC_ALL_CONFIRM'			=> 'Ha sur oc\'h ho peus c\'hoant da rannañ ar sujed-mañ ?',
	'SPLIT_TOPIC_BEYOND'				=> 'Rannañ ar sujed er gemennadenn diuzet',
	'SPLIT_TOPIC_BEYOND_CONFIRM'		=> 'Ha sur oc\'h ho peus c\'hoant da rannañ ar sujed er gemennadenn diuzet ?',
	'SPLIT_TOPIC_EXPLAIN'				=> 'Gant ar furmskrid amañ-dindan e c\'hellit rannañ ur sujed etre daou, pe o tiuz ar c\'hemennadennoù unan hag unan, pe o rannañ adalek ur gemennadenn resis.',

	'THIS_POST_IP'				=> 'IP ar gemennadenn-mañ',
	'TOPICS_APPROVED_SUCCESS'	=> 'Asantet eo bet ar sujedoù diuzet.',
	'TOPICS_DELETED_SUCCESS'	=> 'Tennet eo bet ar sujedoù diuzet ouzh an diaz-titouroù.',
	'TOPICS_DISAPPROVED_SUCCESS'=> 'Nac\'het eo bet ar sujedoù diuzet.',
	'TOPICS_FORKED_SUCCESS'		=> 'Eilskoueriet eo bet ar sujedoù diuzet.',
	'TOPICS_LOCKED_SUCCESS'		=> 'Prennet eo bet ar sujedoù diuzet.',
	'TOPICS_MOVED_SUCCESS'		=> 'Dilec\'hiet eo bet ar sujedoù diuzet.',
	'TOPICS_RESYNC_SUCCESS'		=> 'Adkenamzeriet eo bet ar sujedoù diuzet.',
	'TOPICS_TYPE_CHANGED'		=> 'Kemmet eo bet doare ar sujedoù diuzet.',
	'TOPICS_UNLOCKED_SUCCESS'	=> 'Dibrennet eo bet ar sujedoù diuzet.',
	'TOPIC_APPROVED_SUCCESS'	=> 'Asantet eo bet ar sujed diuzet.',
	'TOPIC_DELETED_SUCCESS'		=> 'Tennet eo bet ar sujed diuzet ouzh an diaz-titouroù.',
	'TOPIC_DISAPPROVED_SUCCESS'	=> 'Nac\'het eo bet ar sujed diuzet.',
	'TOPIC_FORKED_SUCCESS'		=> 'Eilskoueriet eo bet ar sujed diuzet.',
	'TOPIC_LOCKED_SUCCESS'		=> 'Prennet eo bet ar sujed diuzet.',
	'TOPIC_MOVED_SUCCESS'		=> 'Dilec\'hiet eo bet ar sujed diuzet.',
	'TOPIC_NOT_EXIST'			=> 'N\'eus ket ouzh ar sujed emaoc\'h o klask',
	'TOPIC_RESYNC_SUCCESS'		=> 'Adkenamzeriet eo bet ar sujed diuzet.',
	'TOPIC_SPLIT_SUCCESS'		=> 'Rannet eo bet ar sujed diuzet.',
	'TOPIC_TIME'				=> 'Mar ar sujed',
	'TOPIC_TYPE_CHANGED'		=> 'Kemmet eo bet doare ar sujed diuzet.',
	'TOPIC_UNLOCKED_SUCCESS'	=> 'Dibrennet eo bet ar sujed diuzet.',
	'TOTAL_WARNINGS'			=> 'Niver a gemennoù groñs en holl',

	'UNAPPROVED_POSTS_TOTAL'		=> 'En holl ez eus <strong>%d</strong> a gemennadennoù o c\'hortoz un asant.',
	'UNAPPROVED_POSTS_ZERO_TOTAL'	=> 'N\'eus kemennadenn ebet o c\'hortoz un asant.',
	'UNAPPROVED_POST_TOTAL'			=> 'En holl ez eus <strong>1</strong> gemennadenn o c\'hortox un asant',
	'UNLOCK'						=> 'Dibrennañ',
	'UNLOCK_POST'					=> 'Dibrennañ ar gemennadenn',
	'UNLOCK_POST_EXPLAIN'			=> 'Aotreañ da gemm ar gemennadenn',
	'UNLOCK_POST_POST'				=> 'Dibrennañ ar gemennadenn',
	'UNLOCK_POST_POST_CONFIRM'		=> 'Ha sur oc\'h ho peus c\'hoant da aotreañ ma vefe kemmet ar gemennadenn-mañ ?',
	'UNLOCK_POST_POSTS'				=> 'Dibrennañ kemennadennoù diuzet',
	'UNLOCK_POST_POSTS_CONFIRM'		=> 'Ha sur oc\'h ho peus c\'hoant da aotreañ ma vefe kemmet ar c\'hemennadennoù diuzet ?',
	'UNLOCK_TOPIC'					=> 'Dibrennañ ar sujed',
	'UNLOCK_TOPIC_CONFIRM'			=> 'Ha sur oc\'h ho peus c\'hoant da zibrennañ ar sujed-mañ ?',
	'UNLOCK_TOPICS'					=> 'Dibrennañ ar sujedoù diuzet',
	'UNLOCK_TOPICS_CONFIRM'			=> 'Ha sur oc\'h ho peus c\'hoant da zibrennañ an holl sujedoù diuzet ?',
	'USER_CANNOT_POST'				=> 'N\'hallit ket postañ kemennadennoù er forom-mañ.',
	'USER_CANNOT_REPORT'			=> 'N\'hallit ket sevel danevelloù diwar-benn kemennadennoù er forom-mañ.',
	'USER_FEEDBACK_ADDED'			=> 'Ouzhpennet ez eus bet un evezhiadenn war an ezel.',
	'USER_WARNING_ADDED'			=> 'Ur c\'hemenn groñs a zo bet kaset d\'an ezel.',

	'VIEW_DETAILS'			=> 'Gwelet titouroù ouzhpenn',

	'WARNED_USERS'			=> 'Izili a zo bet kaset ur c\'hemenn groñs dezho',
	'WARNED_USERS_EXPLAIN'	=> 'Setu ul listenn ouzh izili a zo bet kaset kemennoù groñs ha n\'int ket bet dirouestlet dezho.',
	'WARNING_PM_BODY'		=> 'Ur c\'hemenn gorñs, bet kaset deoc\'h gant ur merour pe ur c\'hasour eus al lec\'hienn eo ar pezh a zeu da heul.[quote]%s[/quote]',
	'WARNING_PM_SUBJECT'	=> 'Ur c\'hemenn groñs a zo o tont eus ar forom',
	'WARNING_POST_DEFAULT'	=> 'Setu amañ ur c\'hemenn groñs liammet ouzh ho kemennadenn da heul : %s .',
	'WARNINGS_ZERO_TOTAL'	=> 'N\'eus kemenn groñs ebet.',

	'YOU_SELECTED_TOPIC'	=> 'Dibabet ho peus ar sujed niverenn %d: %s.',

	'report_reasons'		=> array(
		'TITLE'	=> array(
			'WAREZ'		=> 'Meziantoù diaotre',
			'SPAM'		=> 'Spam',
			'OFF_TOPIC'	=> 'Maez-danvez',
			'OTHER'		=> 'Abeg all',
		),
		'DESCRIPTION' => array(
			'WAREZ'		=> 'Er gemennadenn ez eus liammoù davet meziantoù maez-lezenn pe hep meneg.',
			'SPAM'		=> 'Pal nemetañ ar gemennadenn eo ober bruderezh evit ul lec\'hienn all, pe evit un dra all.',
			'OFF_TOPIC'	=> 'Er maez ouzh danvez ar gaozeadenn emañ ar gemennadenn.',
			'OTHER'		=> 'Un abeg all a zo, lavarit pehini en dakad “titouroù ouzhpenn” mar plij.',
		)
	),
));

?>
