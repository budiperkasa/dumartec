<?php
/** 
*
* mcp [Serbian]
*
* @package language
* @version $Id: mcp.php,v 1.56 2006/10/08 11:25:20 acydburn Exp $
* @copyright (c) 2005 phpBB Group 
* @license http://opensource.org/licenses/gpl-license.php GNU Public License 
*
*/

/**
* DO NOT CHANGE
*/
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
	'ACTION'				=> 'Akcija',
	'ACTION_NOTE'			=> 'Akcija/Obaveštenje',
	'ADD_FEEDBACK'			=> 'Dodaj prigovor',
	'ADD_FEEDBACK_EXPLAIN'	=> 'Ako želite da dodate prigovor molimo vas da popunite sledeću formu. Koristite samo običan tekst; HTML, BBKod, itd. nisu dozvoljeni.',
	'ADD_WARNING'			=> 'Dodaj upozorenje',
	'ADD_WARNING_EXPLAIN'	=> 'Da bi poslali upozorenje ovom korisniku molimo vas da popunite formu ispod. Koristite samo običan tekst; HTML, BBKod, itd. nisu dozvoljeni.',
	'ALL_ENTRIES'			=> 'Svi unosi',
	'ALL_NOTES_DELETED'		=> 'Uspešno su uklonjene sve beleške korisnika',
	'ALL_REPORTS'			=> 'Sve prijave',
	'ALREADY_REPORTED'		=> 'Ovaj post je već prijavljen',
	'ALREADY_WARNED'		=> 'Upozorenje je već izdato za ovaj post',
	'APPROVE'				=> 'Odobri',
	'APPROVE_POST'			=> 'Odobri post',
	'APPROVE_POST_CONFIRM'	=> 'Da li ste sigurni da želite da odobrite ovaj post?',
	'APPROVE_POSTS'			=> 'Odobri postove',
	'APPROVE_POSTS_CONFIRM'	=> 'Da li ste sigurni da želite da odobrite izabrane postove?',

	'CANNOT_MOVE_SAME_FORUM'=> 'Ne možete pomeriti temu u forum u kojoj se tema već nalazi',
	'CANNOT_WARN_ANONYMOUS'	=> 'Ne možete upozoriti neregistrovane korisnike',
	'CANNOT_WARN_SELF'		=> 'Ne možete upozoriti samog sebe',
	'CAN_LEAVE_BLANK'		=> 'Ovo možete ostaviti prazno.',
	'CHANGE_POSTER'			=> 'Promeni pošaljioca',
	'CLOSE_REPORT'			=> 'Zatvori prijavu',
	'CLOSE_REPORT_CONFIRM'	=> 'Da li ste sigurni da želite da zatvorite izabranu prijavu',
	'CLOSE_REPORTS'			=> 'Zatvori prijave',
	'CLOSE_REPORTS_CONFIRM'	=> 'Da li ste sigurni da želite da zatvorite izabrane prijave',

	'DELETE_POSTS'				=> 'Obriši postove',
	'DELETE_POSTS_CONFIRM'		=> 'Da li ste sigurni da želite da obrišete ove postove?',
	'DELETE_POST_CONFIRM'		=> 'Da li ste sigurni da želite da obrišete ovaj post?',
	'DELETE_REPORT'				=> 'Obriši prijavu',
	'DELETE_REPORT_CONFIRM'		=> 'Da li ste sigurni da želite da obrišete ove prijave?',
	'DELETE_REPORTS'			=> 'Obriši prijave',
	'DELETE_REPORTS_CONFIRM'	=> 'Da li ste sigurni da želite da obrišete ove prijave?',
	'DELETE_SHADOW_TOPIC'		=> 'Obriši osenčenu temu',
	'DELETE_TOPICS'				=> 'Obriši izabrane teme',
	'DELETE_TOPICS_CONFIRM'		=> 'Da li ste sigurni da želite da obrišete ove teme?',
	'DELETE_TOPIC_CONFIRM'		=> 'Da li ste sigurni da želite da obrišete ovu temu?',
	'DISAPPROVE'				=> 'Zabrani',
	'DISAPPROVE_REASON'			=> 'Razlog za zabranu',
	'DISAPPROVE_POST'			=> 'Zabrani post',
	'DISAPPROVE_POST_CONFIRM'	=> 'Da li ste sigurni da želite da zabranite ovaj post?',
	'DISAPPROVE_POSTS'			=> 'Zabrani postove',
	'DISAPPROVE_POSTS_CONFIRM'	=> 'Da li ste sigurni da želite da zabranite ove postove?',
	'DISPLAY_LOG'				=> 'Prikaži unose od prethodnih',
	'DISPLAY_OPTIONS'			=> 'Opcije prikaza',

	'EMPTY_REPORT'					=> 'Morate uneti opis kada izaberete ovaj razlog',
	'EMPTY_TOPICS_REMOVED_WARNING'	=> 'Znajte da su jedna ili više tema uklonjene iz baze zato što su bili ili postale prazne',

	'FEEDBACK'				=> 'Povratna informacija',
	'FORK'					=> 'Rastavi',
	'FORK_TOPIC'			=> 'Rastavi temu',
	'FORK_TOPIC_CONFIRM'	=> 'Da li ste sigurni da želite da kopirate ovu temu?',
	'FORK_TOPICS'			=> 'Rastavi izabranu temu',
	'FORK_TOPICS_CONFIRM'	=> 'Da li ste sigurni da želite da kopirate ove teme?',
	'FORUM_DESC'			=> 'Opis',
	'FORUM_NAME'			=> 'Naziv foruma',
	'FORUM_NOT_EXIST'		=> 'Forum koji ste izabrali ne postoji',
	'FORUM_NOT_POSTABLE'	=> 'U forum koji ste izabrali ne mogu da se šalju postovi',
	'FORUM_STATUS'			=> 'Status foruma',
	'FORUM_STYLE'			=> 'Stil foruma',

	'GLOBAL_ANNOUNCEMENT'	=> 'Globalno Obaveštenje',

	'IP_INFO'				=> 'IP Informacija',
	'IPS_POSTED_FROM'		=> 'IP adrese sa kojih je ovaj korisnik pisao',

	'LATEST_LOGS'				=> 'Poslednjih 5 logovanih akcija',
	'LATEST_REPORTED'			=> 'Poslednjih 5 prijava',
	'LATEST_UNAPPROVED'			=> 'Poslednjih 5 postova koji čekaju na odobrenje',
	'LATEST_WARNING_TIME'		=> 'Poslednje upozorenje',
	'LATEST_WARNINGS'			=> 'Poslednjih 5 upozorenja',
	'LEAVE_SHADOW'				=> 'Ostavite pritajenu temu na mesto',
	'LIST_REPORT'				=> '1 prijava',
	'LIST_REPORTS'				=> '%d prijava',
	'LOCK'						=> 'Zaključaj',
	'LOCK_POST_POST'			=> 'Zaključaj post',
	'LOCK_POST_POST_CONFIRM'	=> 'Da li ste sigurni da želite da sprečite izmene ovog posta?',
	'LOCK_POST_POSTS'			=> 'Zaključaj izabrane postove',
	'LOCK_POST_POSTS_CONFIRM'	=> 'Da li ste sigurni da želite da sprečite izmene ovih postova?',
	'LOCK_TOPIC_CONFIRM'		=> 'Da li ste sigurni da želite da zaključate ovu temu?',
	'LOCK_TOPICS'				=> 'Zaključaj izabrane teme',
	'LOCK_TOPICS_CONFIRM'		=> 'Da li ste sigurni da želite da zaključate sve izabrane teme?',
	'LOGS_CURRENT_TOPIC'		=> 'Trenutno pregledate logove od:',
	'LOGIN_EXPLAIN_MCP'			=> 'Da bi uređivali ovaj forum morate se prvo prijaviti.',
	'LOGVIEW_VIEWTOPIC'			=> 'Pregled teme',
	'LOGVIEW_VIEWLOGS'			=> 'Pregled loga teme',
	'LOGVIEW_VIEWFORUM'			=> 'Pregled foruma',
	'LOOKUP_ALL'				=> 'Pregledaj sve IP adrese',
	'LOOKUP_IP'					=> 'Pogledaj IP adresu',

	'MARKED_NOTES_DELETED'		=> 'Uspešno ste uklonili sve obeležene beleške korisnika',

	'MCP_ADD'						=> 'Dodaj upozorenje',

	'MCP_BAN'					=> 'Zabrane',
	'MCP_BAN_EMAILS'			=> 'Zabrana email-a',
	'MCP_BAN_IPS'				=> 'Zabrana IP adresa',
	'MCP_BAN_USERNAMES'			=> 'Tabrani korisničko ime',

	'MCP_LOGS'						=> 'Logovi moderatora',
	'MCP_LOGS_FRONT'				=> 'Prednja strana',
	'MCP_LOGS_FORUM_VIEW'			=> 'Logovi foruma',
	'MCP_LOGS_TOPIC_VIEW'			=> 'Logovi tema',

	'MCP_MAIN'						=> 'Glavni',
	'MCP_MAIN_FORUM_VIEW'			=> 'Pogledaj forum',
	'MCP_MAIN_FRONT'				=> 'Prednja strana',
	'MCP_MAIN_POST_DETAILS'			=> 'Detalji posta',
	'MCP_MAIN_TOPIC_VIEW'			=> 'Pregled teme',
	'MCP_MAKE_ANNOUNCEMENT'			=> 'Napravi obaveštenje',
	'MCP_MAKE_ANNOUNCEMENT_CONFIRM'	=> 'Da li ste sigurni da želite da promenite ovu temu u obaveštenje?',
	'MCP_MAKE_ANNOUNCEMENTS'		=> 'Napravi obaveštenja',
	'MCP_MAKE_ANNOUNCEMENTS_CONFIRM'=> 'Da li ste sigurni da želite da promenite ove teme u obaveštenja?',
	'MCP_MAKE_GLOBAL'				=> 'Napravi globalno obaveštenje',
	'MCP_MAKE_GLOBAL_CONFIRM'		=> 'Da li ste sigurni da želite da promenite ovu temu u globalno obaveštenje?',
	'MCP_MAKE_GLOBALS'				=> 'Napravi globalna obaveštenja',
	'MCP_MAKE_GLOBALS_CONFIRM'		=> 'Da li ste sigurni da želite da promenite ove teme u globalna obaveštenja?',
	'MCP_MAKE_STICKY'				=> 'Napravi lepljivu',
	'MCP_MAKE_STICKY_CONFIRM'		=> 'Da li ste sigurni da želite da promenite ovu temu u lepljivu?',
	'MCP_MAKE_STICKIES'				=> 'Napravi lepljive',
	'MCP_MAKE_STICKIES_CONFIRM'		=> 'Da li ste sigurni da želite da promenite ove teme u lepljive?',
	'MCP_MAKE_NORMAL'				=> 'Napravi standardnu temu',
	'MCP_MAKE_NORMAL_CONFIRM'		=> 'Da li ste sigurni da želite da promenite ovu temu u standardnu temu?',
	'MCP_MAKE_NORMALS'				=> 'Napravi standardne teme',
	'MCP_MAKE_NORMALS_CONFIRM'		=> 'Da li ste sigurni da želite da promenite ovu temu u standardne teme?',

	'MCP_NOTES'						=> 'Beleške korisnika',
	'MCP_NOTES_FRONT'				=> 'Prednja strana',
	'MCP_NOTES_USER'				=> 'Detalji korisnika',

	'MCP_POST_REPORTS'				=> 'Prijave za ovaj post',

	'MCP_REPORTS'					=> 'Prijavljeni postovi',
	'MCP_REPORT_DETAILS'			=> 'Detalji prijave',
	'MCP_REPORTS_CLOSED'			=> 'Zatvorene prijave',
	'MCP_REPORTS_CLOSED_EXPLAIN'	=> 'Ovo je lista svih prijava o postovima koji su prethodno bili rešeni',
	'MCP_REPORTS_OPEN'				=> 'Otvorene prijave',
	'MCP_REPORTS_OPEN_EXPLAIN'		=> 'Ovo je lista svih prijava o postovima koji treba da se reše',

	'MCP_QUEUE'								=> 'Uređivanje',
	'MCP_QUEUE_APPROVE_DETAILS'				=> 'Odobri detalje',
	'MCP_QUEUE_UNAPPROVED_POSTS'			=> 'Postovi koji čekaju odobrenje',
	'MCP_QUEUE_UNAPPROVED_POSTS_EXPLAIN'	=> 'Ovo je lista svih postova koji zahtevaju odobrenje pre nego što će biti vidljive korisnicima',
	'MCP_QUEUE_UNAPPROVED_TOPICS'			=> 'Teme koje čekaju odobrenje',
	'MCP_QUEUE_UNAPPROVED_TOPICS_EXPLAIN'	=> 'Ovo je lista svih tema koje zahtevaju odobrenje pre nego što će biti vidljive korisnicima',

	'MCP_VIEW_USER'			=> 'Pogledaj upozorenja za specifičnog korisnika',

	'MCP_WARN'				=> 'Upozorenja',
	'MCP_WARN_FRONT'		=> 'Prednja stranica',
	'MCP_WARN_LIST'			=> 'Lista upozorenja',
	'MCP_WARN_POST'			=> 'Upozorenje za određene postove',
	'MCP_WARN_USER'			=> 'Upozori korisnika',

	'MERGE_POSTS'			=> 'Sastavi postove',
	'MERGE_POSTS_CONFIRM'	=> 'DA li ste sigurni da želite da sastavite izabrane postove?',
	'MERGE_TOPIC_EXPLAIN'	=> 'Koristeći formu ispod možete sastaviti izabrane postove u drugu temu. Ovim postovima neće biti izmenjen redosled i prikazaće se kao i da su ih korisnici poslali u novu temu.<br />Molimo vas da unesete id odredišne teme ili kliknite na "Izaberi" dugme je da potražite',
	'MERGE_TOPIC_ID'		=> 'Id odredišne teme',
	'MERGE_TOPICS'			=> 'Sastavi teme',
	'MERGE_TOPICS_CONFIRM'	=> 'Da li ste sigurni da želite da sastavite izabrane teme?',
	'MODERATE_FORUM'		=> 'Uredi forum',
	'MODERATE_TOPIC'		=> 'Uredi temu',
	'MODERATE_POST'			=> 'Uredi post',
	'MOD_OPTIONS'			=> 'Opcije moderatora',
	'MORE_INFO'				=> 'Više informacija',
	'MOST_WARNINGS'			=> 'Korisnici sa najviše upozorenja',
	'MOVE_TOPIC_CONFIRM'	=> 'Da li ste sigurni da želite pomerite temu u novi forum?',
	'MOVE_TOPICS'			=> 'Pomeri izabranu temu',
	'MOVE_TOPICS_CONFIRM'	=> 'Da li ste sigurni da želite pomerite teme u novi forum?',

	'NOTIFY_POSTER_APPROVAL'		=> 'Obavesti pošaljioca o odobrenju?',
	'NOTIFY_POSTER_DISAPPROVAL'		=> 'Obavesti pošaljioca o neodobravanju?',
	'NOTIFY_USER_WARN'				=> 'Obavesti korisnika o upozorenju?',
	'NOT_MODERATOR'					=> 'Niste moderator ovog foruma',
	'NO_DESTINATION_FORUM'			=> 'Izaberite forum za odredište',
	'NO_DESTINATION_FORUM_FOUND'	=> 'Nema dostupnog destinacionog foruma.',
	'NO_ENTRIES'					=> 'Nema logova za ovaj period',
	'NO_FEEDBACK'					=> 'Nema povratnih informacija o ovom korisniku',
	'NO_FINAL_TOPIC_SELECTED'		=> 'Morate izabrati odredišnu temu za spajanje postova',
	'NO_MATCHES_FOUND'				=> 'Nema poklapanja',
	'NO_POST'						=> 'Morate izabrati post da bi upozorili korisnika za post',
	'NO_POST_REPORT'				=> 'Ovaj post nije prijavljen.',
	'NO_POST_SELECTED'				=> 'Morate izabrati najmanje jedan post da bi izvršili ovu operaciju',
	'NO_REASON_DISAPPROVAL'			=> 'Molimo vas da date odgovarajući naziv za neodobrenje',
	'NO_REPORT'						=> 'Nema prijave',
	'NO_REPORTS'					=> 'Nema prijava',	
	'NO_REPORT_SELECTED'			=> 'Morate izabrati najmanje jednu prijavu da bi izvršili ovu opraciju.',
	'NO_TOPIC_ICON'					=> 'Nema',
	'NO_TOPICS_QUEUE'				=> 'Nema tema za odobrenje',
	'NO_TOPIC_SELECTED'				=> 'Morate izabrati najmanje jednu temu da bi izvršili ovu operaciju',

	'OTHER_IPS'				=> 'Ostale IP adrese sa kojih je pisao korisnik',
	'ONLY_TOPIC'			=> 'Samo tema "%s"',
	'OTHER_USERS'			=> 'Korisnici koji pišu sa ove IP adrese',

	'POSTER'					=> 'Pošaljioc',
	'POSTS_APPROVED_SUCCESS'	=> 'Izabrani postovi su odobreni',
	'POSTS_DELETED_SUCCESS'		=> 'Izabrani postovi su uspešno uklonjeni iz baze',
	'POSTS_DISAPPROVED_SUCCESS'	=> 'Izabrani postovi su zabranjeni',
	'POSTS_LOCKED_SUCCESS'		=> 'Izabrani postovi su uspešno zaključani',
	'POSTS_MERGED_SUCCESS'		=> 'Izabrani postovi su spojeni',
	'POSTS_UNLOCKED_SUCCESS'	=> 'Izabrani postovi su uspešno otključani',
	'POSTS_PER_PAGE'			=> 'Postova po stranici',
	'POSTS_PER_PAGE_EXPLAIN'	=> '(Postavite na 0 da vidite sve postove)',
	'POST_APPROVED_SUCCESS'		=> 'Izabrani post je odobren',
	'POST_DELETED_SUCCESS'		=> 'Izabrani post je uspešno uklonjen iz baze',
	'POST_DISAPPROVED_SUCCESS'	=> 'Izabrani post je zabranjen',
	'POST_LOCKED_SUCCESS'		=> 'Izabrani post je uspešno zaključan',
	'POST_NOT_EXIST'			=> 'Post koji ste tražili ne postoji',
	'POST_REPORTED_SUCCESS'		=> 'Ovaj post je uspešno prijavljen',
	'POST_UNLOCKED_SUCCESS'		=> 'Post je uspešno otključan',

	'READ_USERNOTES'			=> 'Beleške korisnika',
	'READ_WARNINGS'				=> 'Upozorenja korisnika',
	'REPORTER'					=> 'Prijavio',
	'REPORTED'					=> 'Prijavljen',
	'REPORTED_BY'				=> 'Prijavio',
	'REPORTED_ON_DATE'			=> 'dana',
	'REPORTS_CLOSED_SUCCESS'	=> 'Izabrane prijave su uspešno zatvorene.',
	'REPORTS_DELETED_SUCCESS'	=> 'Izabrane prijave su uspešno obrisane.',
	'REPORTS_TOTAL'				=> 'Imate ukupno <strong>%d</strong> prijava za pregled',
	'REPORTS_ZERO_TOTAL'		=> 'Nema prijava za pregled',
	'REPORT_CLOSED'				=> 'Ova prijava je prethodno bila zatvorena.',
	'REPORT_CLOSED_SUCCESS'		=> 'Izabrana prijava je uspešno zatvorena.',
	'REPORT_DELETED_SUCCESS'	=> 'Izabrana prijava je uspešno obrisana.',
	'REPORT_DETAILS'			=> 'Detalji prijave',
	'REPORT_MESSAGE'			=> 'Prijavi ovu poruku',
	'REPORT_MESSAGE_EXPLAIN'	=> 'Koristite ovu formu da prijavite izabranu poruku administratorima. Prijave se generalno koriste samo ako poruka krši pravila foruma.',
	'REPORT_NOTIFY'				=> 'Obavesti me',
	'REPORT_NOTIFY_EXPLAIN'		=> 'Obaveštava vas kada je vaša prijava obrađena',
	'REPORT_POST_EXPLAIN'		=> 'Koristite ovu formu da prijavite izabrani post moderatorima i administratorima. Prijave se generalno koriste samo ako post krši pravila foruma.',
	'REPORT_REASON'				=> 'Razlog prijave',
	'REPORT_TIME'				=> 'Vreme prijave',
	'REPORT_TOTAL'				=> 'Ukupno ima <strong>1</strong> prijava za pregled',
	'RESYNC'					=> 'Resinhronizuj',
	'RETURN_MESSAGE'			=> '%sPovratak na poruku%s',
	'RETURN_NEW_FORUM'			=> '%sPovratak na novi forum%s',
	'RETURN_NEW_TOPIC'			=> '%sPovratak na novu temu%s',
	'RETURN_POST'				=> '%sPovratak na post%s',
	'RETURN_QUEUE'				=> '%sPovratak na uređivanje%s',
	'RETURN_REPORTS'			=> '%sPovratak na prijave%s',
	'RETURN_TOPIC_SIMPLE'		=> '%sVrati se na temu%s',

	'SEARCH_POSTS_BY_USER'		=> 'Potraži postove po',
	'SELECT_ACTION'				=> 'Izaberi željenu akciju',
	'SELECT_FORUM_GLOBAL_ANNOUNCEMENT'	=> 'Molimo vas da izaberete forum u kojem želite da objavite globalno obaveštenje.',
	'SELECT_FORUM_GLOBAL_ANNOUNCEMENTS'	=> 'Jedna ili više izabranih tema su globalna obaveštenja. Molimo vas da izaberete forum u kojem želite da budu prikazana.',
	'SELECT_MERGE'						=> 'Izaberi za spajanje',
	'SELECT_TOPICS_FROM'		=> 'Izaberi teme od',
	'SELECT_TOPIC'				=> 'Izaberi temu',
	'SELECT_USER'				=> 'Izaberi korisnika',
	'SORT_ACTION'				=> 'Akcije loga',
	'SORT_DATE'					=> 'Datum',
	'SORT_IP'					=> 'IP adrese',
	'SORT_WARNINGS'				=> 'Upozorenja',
	'SPLIT_AFTER'				=> 'Podeli od izabranih postova',
	'SPLIT_FORUM'				=> 'Forum za nove teme',
	'SPLIT_POSTS'				=> 'Podeli izabrane postove',
	'SPLIT_SUBJECT'				=> 'Naslov nove teme',
	'SPLIT_TOPIC_ALL'			=> 'Podeli temu od izabranih postova',
	'SPLIT_TOPIC_ALL_CONFIRM'	=> 'Da li ste sigurni ovu temu?',
	'SPLIT_TOPIC_BEYOND'		=> 'Podeli temu kod izabranih postova',
	'SPLIT_TOPIC_BEYOND_CONFIRM'=> 'Da li ste sigurni da želite da podelite ovu temu kod izabranih postova?',
	'SPLIT_TOPIC_EXPLAIN'		=> 'Koristeći formu ispod možete podeliti temu na dve, ili selektovanjem postova pojedinačno ili deleći izabrani post',

	'THIS_POST_IP'				=> 'IP za ovaj post',
	'TOPICS_APPROVED_SUCCESS'	=> 'Izabrane teme su odobrene',
	'TOPICS_DELETED_SUCCESS'	=> 'Izabrane teme su uspešno uklonjene iz baze',
	'TOPICS_DISAPPROVED_SUCCESS'=> 'Izabrane teme su zabranjene',
	'TOPICS_FORKED_SUCCESS'		=> 'Izabrane teme su uspešno kopirane',
	'TOPICS_LOCKED_SUCCESS'		=> 'Izabrane teme su zaključane',
	'TOPICS_MOVED_SUCCESS'		=> 'Izabrane teme su uspešno pomerene',
	'TOPICS_RESYNC_SUCCESS'		=> 'Izabrane teme su resihronizovane',
	'TOPICS_TYPE_CHANGED'		=> 'Tipovi teme su usspešno promenjeni.',
	'TOPICS_UNLOCKED_SUCCESS'	=> 'Izabrane teme su otključane',
	'TOPIC_APPROVED_SUCCESS'	=> 'Izabrana tema je odobrena',
	'TOPIC_DELETED_SUCCESS'		=> 'Izabrana tema je uspešno uklonjena iz baze',
	'TOPIC_DISAPPROVED_SUCCESS'	=> 'Izabrana tema je zabranjena',
	'TOPIC_FORKED_SUCCESS'		=> 'Izabrana tema je uspešno kopirana',
	'TOPIC_LOCKED_SUCCESS'		=> 'Izabrana tema je zaključana',
	'TOPIC_MOVED_SUCCESS'		=> 'Izabrana tema je uspešno pomerena',
	'TOPIC_NOT_EXIST'			=> 'Tema koju ste izabrali ne postoji',
	'TOPIC_RESYNC_SUCCESS'		=> 'Izabrana tema je resihronizovana',
	'TOPIC_SPLIT_SUCCESS'		=> 'Izabrana tema je uspešno podeljena',
	'TOPIC_TIME'				=> 'Vreme teme',
	'TOPIC_TYPE_CHANGED'		=> 'Tip teme je uspešno promenjen.',
	'TOPIC_UNLOCKED_SUCCESS'	=> 'Izabrana tema je otključana',
	'TOTAL_WARNINGS'			=> 'Ukupno upozorenja',

	'UNAPPROVED_POSTS_TOTAL'		=> 'Ukupno ima <strong>%d</strong> postova koji čekaju na odobrenje',
	'UNAPPROVED_POSTS_ZERO_TOTAL'	=> 'Nema postova koji čekaju na odobrenje',
	'UNAPPROVED_POST_TOTAL'			=> 'Ukupno <strong>1</strong> post čeka odobrenje',
	'UNLOCK'						=> 'Otključaj',
	'UNLOCK_POST'					=> 'Otključaj post',
	'UNLOCK_POST_EXPLAIN'			=> 'Dozvoli izmene',
	'UNLOCK_POST_POST'				=> 'Otključaj post',
	'UNLOCK_POST_POST_CONFIRM'		=> 'Da li ste sigurni da želite da dozvolite izmenu ovog posta?',
	'UNLOCK_POST_POSTS'				=> 'Otključaj izabrane postove',
	'UNLOCK_POST_POSTS_CONFIRM'		=> 'Da li ste sigurni da želite da dozvolite izmene ovih postova?',
	'UNLOCK_TOPIC'					=> 'Otključaj temu',
	'UNLOCK_TOPIC_CONFIRM'			=> 'Da li ste sigurni da želite da otključate ovu temu?',
	'UNLOCK_TOPICS'					=> 'Otključaj izabrane teme',
	'UNLOCK_TOPICS_CONFIRM'			=> 'Da li ste sigurni da želite da otključate sve izabrane teme?',
	'USER_CANNOT_POST'				=> 'Ne možete pisati u ovom forumu',
	'USER_CANNOT_REPORT'			=> 'Ne možete prijavljivati postove u ovom forumu',
	'USER_FEEDBACK_ADDED'			=> 'Korisnička informacija je uspešno dodata.',
	'USER_WARNING_ADDED'			=> 'Korisnik uspešno upozoren.',

	'VIEW_DETAILS'			=> 'Pogledaj detalje',
	'VIEW_POST'				=> 'Pogledaj post',

	'WARNED_USERS'			=> 'Upozoreni korisnici',
	'WARNED_USERS_EXPLAIN'	=> 'Ovo je lista korisnika sa neisteklim upozorenjima namenjenih njima',
	'WARNING_PM_BODY'		=> 'Sledi upozorenje koje je izdato vama od administratora ili moderatora ovog sajta.[quote]%s[/quote]',
	'WARNING_PM_SUBJECT'	=> 'Izdato Upozorenje Boarda',
	'WARNING_POST_DEFAULT'	=> 'Ovo je upozorenje koje sadrži post koji ste vi poslali: %s',
	'WARNINGS_ZERO_TOTAL'	=> 'Nema upozorenja',

	'YOU_SELECTED_TOPIC'	=> 'Izabrali ste temu broj %d: %s',

	'report_reasons'		=> array(
		'TITLE'	=> array(
			'WAREZ'		=> 'Piratski softver',
			'SPAM'		=> 'Spam',
			'OFF_TOPIC'	=> 'Promašena tema',
			'OTHER'		=> 'Ostalo'
		),
		'DESCRIPTION' => array(
			'WAREZ'		=> 'Post sadrži linkove ka ilegalnom ili piratskom softveru',
			'SPAM'		=> 'Prijavljeni post ima jedinu svrhu da reklamira sajt ili nečiji proizvod',
			'OFF_TOPIC'	=> 'Promašena tema u prijavljenom postu',
			'OTHER'		=> 'Prijavljeni post ne spada ni u jednu kategoriju, molimo vas da popunite polje sa opisom'
		)
	),
));

?>