<?php
/**
*
* mcp.php [Estonian]
*
* @package language
* @version $Id: $
* @copyright (c) 2008 phpBB Group
* @author 2008-10-31 - phpbb.ee
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
        'ACTION'        => 'Tegevus',
        'ACTION_NOTE'   => 'Tegevus/M&auml;rge',
        'ADD_FEEDBACK'  => 'Lisa tagasiside',
        'ADD_FEEDBACK_EXPLAIN'  => 'Kui sa tahad lisada raportit selle peale, siis palun t&auml;ida j&auml;rgnev  vorm. Kasuta ainult puhast teksti; HTML, BBCode, jne. ei ole lubatud.',
        'ADD_WARNING'   => 'Lisa hoiatus',
        'ADD_WARNING_EXPLAIN'   => 'Et saata hoiatust kasutajale, tuleb t&auml;ita j&auml;rgnev vorm. Kasuta ainult puhast teksti; HTML, BBCode, jne. ei ole lubatud.',
        'ALL_ENTRIES'   => 'Kõik sisestused',
        'ALL_NOTES_DELETED'     => 'Kõik kasutaja m&auml;rkmed on edukalt eemaldatud.',
        'ALL_REPORTS'   => 'Kõik raportid',
        'ALREADY_REPORTED'      => 'Sellest postitusest on juba raporteeritud.',
        'ALREADY_WARNED'        => 'Sellele postitusele on juba esitatud hoiatus.',
        'APPROVE'       => 'Luba',
        'APPROVE_POST'  => 'Luba postitus',
        'APPROVE_POST_CONFIRM'  => 'Kas oled kindel, et tahad lubada seda postitust?',
        'APPROVE_POSTS' => 'Luba postitused',
        'APPROVE_POSTS_CONFIRM' => 'Kas oled kindel, et tahad lubada valituid postitusi?',
        'CANNOT_MOVE_SAME_FORUM'        => 'Sa ei saa liigutada teemat foorumise milles see juba on.',
        'CANNOT_WARN_ANONYMOUS' => 'Sa ei saa hoiatada mitte registreeritut k&uuml;lalist.',
        'CANNOT_WARN_SELF'      => 'Sa ei saa hoiatada iseennast.',
        'CAN_LEAVE_BLANK'       => 'See võib j&auml;&auml;da t&uuml;hjaks.',
        'CHANGE_POSTER' => 'Vaheta postitajat',
        'CLOSE_REPORT'  => 'Sulge raport',
        'CLOSE_REPORT_CONFIRM'  => 'Kas oled kindel, et tahad sulgeda valitud raportit?',
        'CLOSE_REPORTS' => 'Sulge raportid',
        'CLOSE_REPORTS_CONFIRM' => 'Kas oled kindel, et tahad sulgeda valitud raportid?',
        'DELETE_POSTS'  => 'Kustuta postitused',
        'DELETE_POSTS_CONFIRM'  => 'Kas oled kindel, et tahad kustutada need postitused?',
        'DELETE_POST_CONFIRM'   => 'Kas oled kindel, et tahad kustutada selle postituse?',
        'DELETE_REPORT' => 'Kustuta raport',
        'DELETE_REPORT_CONFIRM' => 'Kas oled kindel, et tahad kustutada valitud raporti?',
        'DELETE_REPORTS'        => 'Kustuta raportid',
        'DELETE_REPORTS_CONFIRM'        => 'Kas oled kindel, et tahad kustutada valitud raportid?',
        'DELETE_SHADOW_TOPIC'   => 'Kustuta näidatud teema',
        'DELETE_TOPICS' => 'Kustuta valitud teemad',
        'DELETE_TOPICS_CONFIRM' => 'Kas oled kindel, et tahad kustutada need teemad?',
        'DELETE_TOPIC_CONFIRM'  => 'Kas oled kindel, et tahad kustutada selle teema?',
        'DISAPPROVE'    => 'Keela',
        'DISAPPROVE_REASON'     => 'Keelamise põhjus',
        'DISAPPROVE_POST'       => 'Keela postitus',
        'DISAPPROVE_POST_CONFIRM'       => 'Kas oled kindel, et tahad keelata sellea postitust?',
        'DISAPPROVE_POSTS'      => 'Keela postitused',
        'DISAPPROVE_POSTS_CONFIRM'      => 'Kas oled kindel, et tahad keelata valitud postitused?',
        'DISPLAY_LOG'   => 'N&auml;ita vanemaid sisestusi',
        'DISPLAY_OPTIONS'       => 'N&auml;ita valikuid',
        'EMPTY_REPORT'  => 'Kui valid põhjuse, pead sisestama kirjelduse.',
        'EMPTY_TOPICS_REMOVED_WARNING'  => 'Palun m&auml;rgista &uuml;ks või enam teemasid, et need oleksid eemaldatud andmebaasist sellep&auml;rast et need muutuvad t&uuml;hjadeks.',
        'FEEDBACK'      => 'Tagasiside',
        'FORK'  => 'Kopeeri',
        'FORK_TOPIC'    => 'Kopeeri teema',
        'FORK_TOPIC_CONFIRM'    => 'Kas oled kindel, et tahad kopeerida seda teemat?',
        'FORK_TOPICS'   => 'Kopeeri valitud teemad',
        'FORK_TOPICS_CONFIRM'   => 'Kas oled kindel, et tahad kopeerida valitud teemad?',
        'FORUM_DESC'    => 'Kirjeldus',
        'FORUM_NAME'    => 'Foorumi nimi',
        'FORUM_NOT_EXIST'       => 'Sinu valitud foorum(eid) ei ole olemas.',
        'FORUM_NOT_POSTABLE'    => 'Sinu valitud foorumisse ei saa postitada.',
        'FORUM_STATUS'  => 'Foorumi olek',
        'FORUM_STYLE'   => 'Foorumi stiil(kujundus)',
        'GLOBAL_ANNOUNCEMENT'   => 'Üldteadaanne',
        'IP_INFO'       => 'IP aadressi informatsioon',
        'IPS_POSTED_FROM'       => 'IP aadressid, kust on see kasutaja postitanud',
        'LATEST_LOGS'   => 'Viimased 5 logitud tegevust',
        'LATEST_REPORTED'       => 'Viimased 5 raportit',
        'LATEST_UNAPPROVED'     => 'Viimased 5 postitust lubamise ootel',
        'LATEST_WARNING_TIME'   => 'Viimane hoiatus tehti',
        'LATEST_WARNINGS'       => 'Viimased 5 hoiatust',
        'LEAVE_SHADOW'  => 'J&auml;ta variteema paika',
        'LIST_REPORT'   => '1 raport',
        'LIST_REPORTS'  => '%d raportit',
        'LOCK'  => 'Lukusta',
        'LOCK_POST_POST'        => 'Lukusta postitus',
        'LOCK_POST_POST_CONFIRM'        => 'Kas oled kindel, et tahad v&auml;ltida selle postituse muutmist?',
        'LOCK_POST_POSTS'       => 'Lukusta valitud postitused',
        'LOCK_POST_POSTS_CONFIRM'       => 'Kas oled kindel, et tahad v&auml;ltida valitud postituste muutmist?',
        'LOCK_TOPIC_CONFIRM'    => 'Kas oled kindel, et tahad lukustada selle teema?',
        'LOCK_TOPICS'   => 'Lukusta valitud teemad',
        'LOCK_TOPICS_CONFIRM'   => 'Kas oled kindel, et tahad lukustada k&ouml;ik valitud teemad?',
        'LOGS_CURRENT_TOPIC'    => 'Hetkel vaatamas logisid teema kohta:',
        'LOGIN_EXPLAIN_MCP'     => 'Et modereerida seda foorumit, pead olema sisse logitud.',
        'LOGVIEW_VIEWTOPIC'     => 'Vaata teemat',
        'LOGVIEW_VIEWLOGS'      => 'Vaata teema logi',
        'LOGVIEW_VIEWFORUM'     => 'Vaata foorum(eid)',
        'LOOKUP_ALL'    => 'Uuri(Lukusta) k&ouml;iki IP aadresse',
        'LOOKUP_IP'     => 'Uuri IP',
        'MARKED_NOTES_DELETED'  => 'K&ouml;ik m&auml;rgistatud kasutaja m&auml;rkmed on edukalt eemaldatud.',
        'MCP_ADD'       => 'Lisa hoiatus',
        'MCP_BAN'       => 'Bännimine',
        'MCP_BAN_EMAILS'        => 'Bänni e-posti aadressid',
        'MCP_BAN_IPS'   => 'Bänni IP aadressid',
        'MCP_BAN_USERNAMES'     => 'Bänni kasutajanimed',
        'MCP_LOGS'      => 'Moderaatori logid',
        'MCP_LOGS_FRONT'        => 'Esileht',
        'MCP_LOGS_FORUM_VIEW'   => 'Foorumi logid',
        'MCP_LOGS_TOPIC_VIEW'   => 'Teema logid',
        'MCP_MAIN'      => 'Pea',
        'MCP_MAIN_FORUM_VIEW'   => 'Vaata foorumit',
        'MCP_MAIN_FRONT'        => 'Esileht',
        'MCP_MAIN_POST_DETAILS' => 'Postituse  detailid',
        'MCP_MAIN_TOPIC_VIEW'   => 'Vaata teemat',
        'MCP_MAKE_ANNOUNCEMENT' => 'Muuda teadaandeks',
        'MCP_MAKE_ANNOUNCEMENT_CONFIRM' => 'Oled kindel, et soovid valitud teema muuta teadaandeks?',
        'MCP_MAKE_ANNOUNCEMENTS'        => 'Muuda teadaanneteks',
        'MCP_MAKE_ANNOUNCEMENTS_CONFIRM'        => 'Oled kindel, et soovid valitud teemad muuta teadaanneteks?',
        'MCP_MAKE_GLOBAL'       => 'Muuda üldteadaandeks',
        'MCP_MAKE_GLOBAL_CONFIRM'       => 'Oled kindel, et soovid valitud teema muuta üldteadaandeks?',
        'MCP_MAKE_GLOBALS'      => 'Muuda üldteadaanneteks',
        'MCP_MAKE_GLOBALS_CONFIRM'      => 'Oled kindel, et soovid valitud teemad muuta üldteadaanneteks?',
        'MCP_MAKE_STICKY'       => 'Muuda kleebiseks',
        'MCP_MAKE_STICKY_CONFIRM'       => 'Oled kindel, et soovid valitud teema muuta kleebiseks?',
        'MCP_MAKE_STICKIES'     => 'Muuda kleebisteks',
        'MCP_MAKE_STICKIES_CONFIRM'     => 'Oled kindel, et soovid valitud teemad muuta kleebisteks?',
        'MCP_MAKE_NORMAL'       => 'Muuda tavaliseks teemaks',
        'MCP_MAKE_NORMAL_CONFIRM'       => 'Oled kindel, et soovid valitud teema muuta tavaliseks?',
        'MCP_MAKE_NORMALS'      => 'Muuda tavalisteks teemadeks',
        'MCP_MAKE_NORMALS_CONFIRM'      => 'Oled kindel, et soovid valitud teemad muuta tavalisteks?',
        'MCP_NOTES'     => 'Kasutajamärkmed',
        'MCP_NOTES_FRONT'       => 'Esileht',
        'MCP_NOTES_USER'        => 'Kasutaja detailid',
        'MCP_POST_REPORTS'      => 'Selle postituse kohta olevad raportid',
        'MCP_REPORTS'   => 'Raporteeritud postitused',
        'MCP_REPORT_DETAILS'    => 'Raporti detailid',
        'MCP_REPORTS_CLOSED'    => 'Suletud raportid',
        'MCP_REPORTS_CLOSED_EXPLAIN'    => 'See on nimekiri k&ouml;ikidest raporteeritud postitustest, mis on juba lahendatud',
        'MCP_REPORTS_OPEN'      => 'Avatud raportid',
        'MCP_REPORTS_OPEN_EXPLAIN'      => 'See on nimekiri k&ouml;ikidest raporteeritud postitustest, mis on veel modereerimise j&auml;rjekorras.',
        'MCP_QUEUE'     => 'Modereerimise j&auml;rjekord',
        'MCP_QUEUE_APPROVE_DETAILS'     => 'Lubamise detailid',
        'MCP_QUEUE_UNAPPROVED_POSTS'    => 'Postitused, mis ootavad lubamist',
        'MCP_QUEUE_UNAPPROVED_POSTS_EXPLAIN'    => 'See on nimekiri k&ouml;ikidest postitustest, mis vajavad luba enne, kui need ilmuvad kasutajatele n&auml;htavaks.',
        'MCP_QUEUE_UNAPPROVED_TOPICS'   => 'Teemad mis ootavad lubamist',
        'MCP_QUEUE_UNAPPROVED_TOPICS_EXPLAIN'   => 'See on nimekiri k&ouml;ikidest teemadest, mis vajavad luba enne, kui need ilmuvad kasutajatele n&auml;htavaks.',
        'MCP_VIEW_USER' => 'Vaata kindla kasutaja hoiatusi',
        'MCP_WARN'      => 'Hoiatused',
        'MCP_WARN_FRONT'        => 'Esileht',
        'MCP_WARN_LIST' => 'Hoiatuste nimekiri',
        'MCP_WARN_POST' => 'Hoiata kindla postituse eest',
        'MCP_WARN_USER' => 'Hoiata kasutajat',
        'MERGE_POSTS'   => '&Uuml;henda(pane kokku) postitused',
        'MERGE_POSTS_CONFIRM'   => 'Kas oled kindel, et tahad &uuml;hendada valitud postitused?',
        'MERGE_TOPIC_EXPLAIN'   => '',
        'MERGE_TOPIC_ID'        => 'Sihtpunkti teema id',
        'MERGE_TOPICS'  => '&Uuml;henda teemad',
        'MERGE_TOPICS_CONFIRM'  => 'Kas oled kindel, et tahad &uuml;hendada valitud teemad?',
        'MODERATE_FORUM'        => 'Modereeri foorum(eid)',
        'MODERATE_TOPIC'        => 'Modereeri teema',
        'MODERATE_POST' => 'Modereeri postitus',
        'MOD_OPTIONS'   => 'Moderaatori valikud',
        'MORE_INFO'     => 'T&auml;psem informatsioon',
        'MOST_WARNINGS' => 'Enim hoiatustega kasutajad',
        'MOVE_TOPIC_CONFIRM'    => 'Kas oled kindel, et tahad liigutada teema uude foorumisse?',
        'MOVE_TOPICS'   => 'Liiguta valitud teemad',
        'MOVE_TOPICS_CONFIRM'   => 'Kas oled kindel, et tahad liigutada valitud teemad uude foorumisse?',
        'NOTIFY_POSTER_APPROVAL'        => 'Teata postitajat lubamisest?',
        'NOTIFY_POSTER_DISAPPROVAL'     => 'Teata postitajat keelamisest?',
        'NOTIFY_USER_WARN'      => 'Teata kasutaja hoiatusest?',
        'NOT_MODERATOR' => 'Sa pole selle foorumi moderaator.',
        'NO_DESTINATION_FORUM'  => 'Palun vali foorum sihtpunktiks.',
        'NO_DESTINATION_FORUM_FOUND'    => 'Pole k&auml;ttesaadavat sihtpunkti foorumit.',
        'NO_ENTRIES'    => 'Logi sisestused puuduvad sellel perioodil.',
        'NO_FEEDBACK'   => 'Tagasiside selle kasutaja kohta puudub.',
        'NO_FINAL_TOPIC_SELECTED'       => 'Sa pead valima sihtpunkti teema postituste &uuml;hendamiseks.',
        'NO_MATCHES_FOUND'      => 'Ei leitud &uuml;htegi vastet.',
        'NO_POST'       => 'Sa pead valima postituse, et hoiatada kasutajad postituse eest.',
        'NO_POST_REPORT'        => 'Seda postitust pole raporteeritud.',
        'NO_POST_SELECTED'      => 'Sa pead valima v&auml;hemalt &uuml;he postituse, et sooritada seda tegevust.',
        'NO_REASON_DISAPPROVAL' => 'Palun anna sobiv p&ouml;hjus keelamiseks.',
        'NO_REPORT'     => 'Pole &uuml;htegi raportit leitud',
        'NO_REPORTS'    => 'Pole &uuml;htegi raportit leitud',
        'NO_REPORT_SELECTED'    => 'Sa pead valima v&auml;hemalt &uuml;he raporti, et sooritada seda tegevust.',
        'NO_TOPIC_ICON' => 'Pole',
        'NO_TOPIC_SELECTED'     => 'Sa pead valima v&auml;hemalt &uuml;he teema, et sooritada seda tegevust.',
        'NO_TOPICS_QUEUE'       => 'Pole teemasid, mis ootaksid lubamist.',
        'ONLY_TOPIC'    => 'Ainult teema “%s”',
        'OTHER_USERS'   => 'Teised kasutajad, kes on postitanud sellelt IP aadressilt',
        'POSTER'        => 'Postitaja',
        'POSTS_APPROVED_SUCCESS'        => 'Valitud postitused on lubatud.',
        'POSTS_DELETED_SUCCESS' => 'Valitud postitused on edukalt eemaldatud andmebaasist.',
        'POSTS_DISAPPROVED_SUCCESS'     => 'Valitud postitused on keelatud.',
        'POSTS_LOCKED_SUCCESS'  => 'Valitud postitused on edukalt lukustatud.',
        'POSTS_MERGED_SUCCESS'  => 'Valitud postitused on &uuml;hendatud.',
        'POSTS_UNLOCKED_SUCCESS'        => 'Valitud postitused on edukalt avatud.',
        'POSTS_PER_PAGE'        => 'Postitusi lehe kohta',
        'POSTS_PER_PAGE_EXPLAIN'        => 'Vali 0, et n&auml;ha k&ouml;iki postitusi.)',
        'POST_APPROVED_SUCCESS' => 'Valitud postitus on lubatud.',
        'POST_DELETED_SUCCESS'  => 'Valitud postitus on edukalt eemaldatud andmebaasist.',
        'POST_DISAPPROVED_SUCCESS'      => 'Valitud postitus on keelatud.',
        'POST_LOCKED_SUCCESS'   => 'Postitus on edukalt lukustatud.',
        'POST_NOT_EXIST'        => 'Sinu soovitud postitust ei eksisteeri.',
        'POST_REPORTED_SUCCESS' => 'See postitus on edukalt raporteeritud.',
        'POST_UNLOCKED_SUCCESS' => 'Postitus on edukalt avatud.',
        'READ_USERNOTES'        => 'Kasutaja m&auml;rkmed',
        'READ_WARNINGS' => 'Kasutaja hoiatused',
        'REPORTER'      => 'Raporteerija',
        'REPORTED'      => 'Raporteeritud',
        'REPORTED_BY'   => 'Raporteeris',
        'REPORTED_ON_DATE'      => '-',
        'REPORTS_CLOSED_SUCCESS'        => 'Valitud raportid on edukalt lukustatud.',
        'REPORTS_DELETED_SUCCESS'       => 'Valitud raportid on edukalt kustutatud.',
        'REPORTS_TOTAL' => 'Kokku on <strong>%d</strong> raportit &uuml;le vaatamiseks.',
        'REPORTS_ZERO_TOTAL'    => 'Pole &uuml;htegi raportit &uuml;le vaatamiseks.',
        'REPORT_CLOSED' => 'See raport on juba suletud.',
        'REPORT_CLOSED_SUCCESS' => 'Valitud raport on edukalt lukustatud.',
        'REPORT_DELETED_SUCCESS'        => 'Valitud raport on edukalt kustutatud.',
        'REPORT_DETAILS'        => 'Raporti detailid',
        'REPORT_MESSAGE'        => 'Raporteeri seda s&ouml;numit',
        'REPORT_MESSAGE_EXPLAIN'        => 'Kasuta seda vormi, et raporteerida valitud s&ouml;num. Raporteerimist peaksid kasutama ainult siis, kui s&ouml;num rikub foorumi reegleid.',
        'REPORT_NOTIFY' => 'Teata mind',
        'REPORT_NOTIFY_EXPLAIN' => 'Informeerib sind siis, kui sinu raportiga on tegeletud.',
        'REPORT_POST_EXPLAIN'   => 'Kasuta seda vormi, et raporteerida valitud postitus foorumi moderaatoritele ja administraatoritele. Raporteerimist peaksid kasutama ainult siis, kui s&ouml;num rikub foorumi reegleid.',
        'REPORT_REASON' => 'Raporti p&ouml;hjus',
        'REPORT_TIME'   => 'Raporti aeg',
        'REPORT_TOTAL'  => 'Kokku on <strong>1</strong> raport &uuml;levaatamiseks.',
        'RESYNC'        => 'Res&uuml;nkroniseeri',
        'RETURN_MESSAGE'        => '%sMine tagasi eelmisele lehele%s',
        'RETURN_NEW_FORUM'      => '%sMine tagasi eelmisele lehele%s',
        'RETURN_NEW_TOPIC'      => '%sMine tagasi eelmisele lehele%s',
        'RETURN_POST'   => '%sMine tagasi eelmisele lehele%s',
        'RETURN_QUEUE'  => '%sMine tagasi eelmisele lehele%s',
        'RETURN_REPORTS'        => '%sMine tagasi eelmisele lehele%s',
        'RETURN_TOPIC_SIMPLE'   => '%sMine tagasi eelmisele lehele%s',
        'SEARCH_POSTS_BY_USER'  => 'Otsi postitusi kasutaja j&auml;rgi',
        'SELECT_ACTION' => 'Vali soovitud tegevus',
        'SELECT_FORUM_GLOBAL_ANNOUNCEMENT'      => 'Palun vali foorumi, kus sa tahad, et oleks n&auml;ha see &uuml;ldine teadaanne.',
        'SELECT_FORUM_GLOBAL_ANNOUNCEMENTS'     => '&Uuml;ks v&ouml;i enam valitud teemadest on &Uuml;ldised teadaanded. Palun vali foorumi, kus sa tahad, et need oleksid n&auml;htavad.',
        'SELECT_MERGE'  => 'Vali liitmiseks',
        'SELECT_TOPICS_FROM'    => 'Vali teemad kust',
        'SELECT_TOPIC'  => 'Vali teema',
        'SELECT_USER'   => 'Vali kasutaja',
        'SORT_ACTION'   => 'Logi tegevus',
        'SORT_DATE'     => 'Kuup&auml;ev',
        'SORT_IP'       => 'IP aadress',
        'SORT_WARNINGS' => 'Hoiatused',
        'SPLIT_AFTER'   => 'Poolita teema alates valitud postitusest edasi.',
        'SPLIT_FORUM'   => 'Foorum uue teema jaoks',
        'SPLIT_POSTS'   => 'Poolita valitud postitused',
        'SPLIT_SUBJECT' => 'Uue teema pealkiri',
        'SPLIT_TOPIC_ALL'       => 'Poolita teema alates valitud postitustest',
        'SPLIT_TOPIC_ALL_CONFIRM'       => 'Kas oled kindel, et tahad to poolitada seda teemat?',
        'SPLIT_TOPIC_BEYOND'    => 'Poolita teema valitud postituse juurest',
        'SPLIT_TOPIC_BEYOND_CONFIRM'    => 'Kas oled kindel, et tahad to poolitada teemat valitud postituse juurest?',
        'SPLIT_TOPIC_EXPLAIN'   => 'Kasutades allpool toodut vormi, saad poolitada teema kaheks, kas valid postitused individuaalselt v&ouml;i poolitad alatest mingist kindlast postitusest..',
        'THIS_POST_IP'  => 'IP aadress selle postituse jaoks',
        'TOPICS_APPROVED_SUCCESS'       => 'Valitud teemad on lubatud.',
        'TOPICS_DELETED_SUCCESS'        => 'Valitud teemad on edukalt eemaldatud andmebaasist.',
        'TOPICS_DISAPPROVED_SUCCESS'    => 'Valitud teemad on keelatud.',
        'TOPICS_FORKED_SUCCESS' => 'Valitud teemad on edukalt kopeeritud.',
        'TOPICS_LOCKED_SUCCESS' => 'Valitud teemad on edukalt lukustatud.',
        'TOPICS_MOVED_SUCCESS'  => 'Valitud teemad on edukalt liigutatud.',
        'TOPICS_RESYNC_SUCCESS' => 'Valitud teemad on res&uuml;nkroniseeritud.',
        'TOPICS_TYPE_CHANGED'   => 'Teema t&uuml;&uuml;p on edukalt muudetud.',
        'TOPICS_UNLOCKED_SUCCESS'       => 'Valitud teemad on avatud.',
        'TOPIC_APPROVED_SUCCESS'        => 'Valitud teema on lubatud.',
        'TOPIC_DELETED_SUCCESS' => 'Valitud teema on edukalt eemaldatud andmebaasist.',
        'TOPIC_DISAPPROVED_SUCCESS'     => 'Valitud teema on keelatud.',
        'TOPIC_FORKED_SUCCESS'  => 'Valitud teema on edukalt kopeeritud.',
        'TOPIC_LOCKED_SUCCESS'  => 'Valitud teema on edukalt lukustatud.',
        'TOPIC_MOVED_SUCCESS'   => 'Valitud teema on edukalt liigutatud.',
        'TOPIC_NOT_EXIST'       => 'Sinu valitud teema(sid) ei ole olemas.',
        'TOPIC_RESYNC_SUCCESS'  => 'Valitud teema on edukalt res&uuml;nkroniseeritud.',
        'TOPIC_SPLIT_SUCCESS'   => 'Valitud teema on edukalt poolitatud.',
        'TOPIC_TIME'    => 'Teema aeg',
        'TOPIC_TYPE_CHANGED'    => 'Teema t&uuml;&uuml;p on edukalt muudetud.',
        'TOPIC_UNLOCKED_SUCCESS'        => 'Valitud teema on avatud.',
        'TOTAL_WARNINGS'        => 'Kokku hoiatusi',
        'UNAPPROVED_POSTS_TOTAL'        => 'Kokku on <strong>%d</strong> postitust, mis ootavad lubamist.',
        'UNAPPROVED_POSTS_ZERO_TOTAL'   => 'Ei ole &uuml;htegi postitust, mis ootaks lubamist.',
        'UNAPPROVED_POST_TOTAL' => 'Kokku on <strong>1</strong> postitus, mis ootab lubamist.',
        'UNLOCK'        => 'Ava',
        'UNLOCK_POST'   => 'Ava postitus',
        'UNLOCK_POST_EXPLAIN'   => 'Luba muutmine',
        'UNLOCK_POST_POST'      => 'Ava postitus',
        'UNLOCK_POST_POST_CONFIRM'      => 'Kas oled kindel, et tahad lubada muuta seda postitust?',
        'UNLOCK_POST_POSTS'     => 'Ava valitud postitused',
        'UNLOCK_POST_POSTS_CONFIRM'     => 'Kas oled kindel, et tahad lubada muuta valitud postitusi?',
        'UNLOCK_TOPIC'  => 'Ava teema',
        'UNLOCK_TOPIC_CONFIRM'  => 'Kas oled kindel, et tahad to avada selle teema?',
        'UNLOCK_TOPICS' => 'Ava valitud teemad',
        'UNLOCK_TOPICS_CONFIRM' => 'Kas oled kindel, et tahad to avada k&ouml;ik valitud teemad?',
        'USER_CANNOT_POST'      => 'Sa ei saa postitada selles foorumis.',
        'USER_CANNOT_REPORT'    => 'Sa ei saa raporteerida postitusi siin foorumis.',
        'USER_FEEDBACK_ADDED'   => 'Kasutaja tagasiside on edukalt lisatud.',
        'USER_WARNING_ADDED'    => 'Kasutaja on edukalt hoiatatud.',
        'VIEW_DETAILS'  => 'Vaata detaile',
        'VIEW_POST'            => 'Vaata postitust',
        'WARNED_USERS'  => 'Hoiatatud kasutajad',
        'WARNED_USERS_EXPLAIN'  => 'See on nimekiri kasutajatest, kellel on aegumata hoiatused.',
        'WARNING_PM_BODY'       => 'Järgnev on hoiatus, mille on sulle andnud administraator või moderaator siit foorumist.[quote]%s[/quote]',
        'WARNING_PM_SUBJECT'    => 'Hoiatus antud',
        'WARNING_POST_DEFAULT'  => 'See on hoiatus sinu tehtud postituse eest: %s .',
        'WARNINGS_ZERO_TOTAL'   => 'Hoiatusi ei eksisteeri.',
        'YOU_SELECTED_TOPIC'    => 'Sa valisid teema number %d: %s.',

        'report_reasons'        => array(

                'TITLE' => array(
                        'WAREZ' => 'Piraatlus',
                        'SPAM'  => 'Sp&auml;mm',
                        'OFF_TOPIC'     => 'Teemav&auml;line jutt',
                        'OTHER' => 'Muu',
                ),


                'DESCRIPTION'   => array(
                        'WAREZ' => 'Postitus sisaldab illegaalseid v&otilde;i piraatluse linke.',
                        'SPAM'  => 'Postitus sisaldab reklaami oma veebilehele v&otilde;i tootele.',
                        'OFF_TOPIC'     => 'Postitus ei k&auml;i antud teema kohta.',
                        'OTHER' => 'Postitus ei sobi &uuml;htegi kategooriasse, palun kasuta allpool olevat vormi, et sisestada t&auml;psemat informatsiooni postituse kohta.',
                ),

        ),

));

?>
