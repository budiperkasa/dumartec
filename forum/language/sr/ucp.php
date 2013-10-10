<?php
/** 
*
* ucp [Serbian]
*
* @package language
* @version $Id: ucp.php,v 1.86 2006/11/24 14:59:13 acydburn Exp $
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

// Privacy policy and T&C
$lang = array_merge($lang, array(
	'TERMS_OF_USE_CONTENT'	=> 'Pristupanjem na “%1$s” (u daljem tekstu “mi”, “naš”, “%1$s”, “%2$s”), prihvatate uslove navedene u daljem tekstu uslove. Ako se ne slažete sa uslovima molimo vas da ne pristupate i/ili koristite “%1$s”. Mi možemo ove uslove promeniti bilo kada i obavestićemo vas o tome, mada bi bilo mudro da sami proverite regulativnost uslova dok koristite “%1$s”. Posle izmena to znači da prihvatate nove uslove.<br />
	<br />
	Naše forume pokreće phpBB (u daljem tekstu “oni”, “njihov”, “phpBB softver”, “www.phpbb.com”, “phpBB Grupa”, “phpBB Timovi”) što predstavlja rešenje za bilten board idat pod “<a href="http://www.gnu.org/licenses/gpl.html">General Public License</a>” (u daljem tekstu “GPL”) i može biti preuzet sa <a href="http://www.phpbb.com/">www.phpbb.com</a>. phpBB softver se odnosi samo na Internet bazirane diskusije  GPL strictly forbids them in what we allow and/or disallow as permissible content and/or conduct. Za dalje informacije o phpBB-u, pogledajte: <a href="http://www.phpbb.com/">http://www.phpbb.com/</a>.<br />
	<br />
	Prihvatate da nećete slati uvredljive, vulgarne, kleveničke, reči mržnje, preteće, seksualno orijentisane reči ili bilo kakav materijal koji ne poštuje zakon vaše zemlje, zemlje gde je “%1$s” hostovan kao i međunarodni zakon. Čineći to, rizikujete da budete odmah i zauvek izbačeni, uz obaveštenje vašeg Internet provajdera ako mi tako zahtevamo. IP adrese svih postova se beleže da bi pomogle u ispunjavanju ovih uslova. Prihvatate da “%1$s” ima prava da ukloni, izmeni, pomeri ili zatvori bilo koju temu bilo kada. Kao korisnik, prihvatate da bilo koja informacija koju unesete bude sačuvana u našoj bazi. Ove informacije neće biti prikazivane trećim licima bez vašeg pristanka, niti će “%1$s” ili phpBB biti odgovoran za bilo kakav hakerski pokušaj da ovi podaci budu kompromitovani.
	',

	'PRIVACY_POLICY'		=> 'Ova polisa objašnjava u detalje kako “%1$s” zajedno sa njegovim prisvojenim kompanijama (u daljem tekstu “mi”, “naš”, “%1$s”, “%2$s”) i phpBB (u daljem tekstu “oni”, “njihovi”, “phpBB softver”, “www.phpbb.com”, “phpBB Grupa”, “phpBB Timovi”) koriste bilo kakve informacije prikupljene prilikom bilo koje sesije kada koristite board (u daljem tekstu “vaše informacije”).<br />
	<br />
	Vaše informacije se sakupljaju na dva načina. Prvo, pregledanje “%1$s” će prouzrokovati da phpBB softver napravi nekoliko kolačića, koji su mali tekstualni fajlovi koji se sašu na vaš računar u privremeni direktorijum vašeg web browser-a. Prva dva kolačića samo sadrže identifikaciju korisnika (u daljem tekstu “korisnikov id”) i identifikator anonimne sesije (u daljem tekstu “id sesije”), koji se automatski dodeljuju vama putem phpBB softvera. Treći kolačić će biti kreiran kada pregledate teme u okviru “%1$s” i koristi se da sačuva podatke o temama koje ste čitali, i tako povećava ugođaj korisnika.<br />
	<br />
	Mi takođe kreiramo kolačiće van phpBB softvera dok pregledate “%1$s”, iako su oni van okvira ovog dokumentae koji su namenjeni da samo pokriju stranice kreirane pomoću phpBB softvera. Drugi način na koji sakupljamo vaše informacije je ono što vi nama pošaljete. Ovo može biti, i nije ograničeno na: postovanje kao anonimni korisnik (u daljem tekstu “anonimni postovi”), registrovanje na “%1$s” (u daljem tekstu “vaš nalog”) i postovi koje ste vi poslali nakon registracije i dok ste prijavljeni (u daljem tekstu “vaši postovi”).<br />
	<br />
	Vaš nalog će kao minimum sadržati unikatno identifikaciono ime (u daljem tekstu “vaše korisničko ime”), lična šifra kou koja se koristi za prijavljivanje na vaš nalog (u daljem tekstu “vaša šifra”) i lična, ispravna email adresa (u daljem tekstu “vaš email”). Vaše informacije za vaš nalog na “%1$s” su zaštićene sa zakonima o zaštiti podataka prihvatljivim u zemlji koja hostuje nas. Bilo koje informacije pored vašeg korisničkog imena, vaše šifre i vašeg email-a a koju zahteva “%1$s” tokom procesa registracije su na nama da odlučimo šta je obavezno a šta opciono. U svim slučajevima, imate opciju da izaberete koje će informacije biti javno prikazane. Dalje, sa vašim nalogom, imate opciju opcionog ulaza i izlaza automatski generisanih email-ova generisanih phpBB softverom.<br />
	<br />
	Vaš šifra je kriptovana (u jednom smeru) tako da je bezbedna. Međutim, preporučljivo je da ne koristite istu šifru na više različitih sajtova. Vaša šifra je namenjena pristupu vašeg naloga na “%1$s”, zato vas molimo da je požlivo čuvate i ni pod kakvim okolnostima će bilo ko povezan sa “%1$s”, phpBB-om ili bilo koje treće lice, legitimno moći da zatraži vašu šifru. Ukoliko zaboravite šifru za vaš nalog, možete koristiti opciju “Zaboravio sam šifru” koju nudi phpBB softver. Ovaj proces će od vas zatražiti vaše korisničko ime i vaš email, i onda će phpBB softver generisati novu šifru da povratite vaš nalog.<br />
	',
));

// Common language entries
$lang = array_merge($lang, array(
	'ACCOUNT_ACTIVE'				=> 'Vaš nalog je aktiviran. Hvala vam što ste se registrovali',
	'ACCOUNT_ACTIVE_ADMIN'			=> 'Nalog je sada aktiviran',
	'ACCOUNT_ACTIVE_PROFILE'		=> 'Vaš nalog je uspešno reaktiviran.',
	'ACCOUNT_ADDED'					=> 'Hvala vam što ste se registrovali, vaš nalog je kreiran. Sada se možete prijaviti sa vašim korisničkim imenom i šifrom',
	'ACCOUNT_COPPA'					=> 'Vaš nalog je kreiran ali mora da bude odobren, molimo vas da proverite vaš email za detalje.',
	'ACCOUNT_EMAIL_CHANGED'			=> 'Vaš nalog je ažuriran. Međutim, ovaj board zahteva reaktivaciju naloga pri promeni email adrese. Aktivacioni ključ je  poslat na vašu novu email adresu koju ste uneli. Molimo vas da proverite vaš email za dalje informacije.',
	'ACCOUNT_EMAIL_CHANGED_ADMIN'	=> 'Vaš nalog je ažuriran. Međutim, ovaj board zahteva reaktivaciju naloga od administratora pri promeni email adrese. Email im je poslat i bićete obavešteni kada vaš nalog bude reaktiviran.',
	'ACCOUNT_INACTIVE'				=> 'Vaš nalog je kreiran. Međutim, ovaj forum zahteva aktivaciju naloga, aktivacioni ključ je poslat na vašu email adresu koju ste uneli. Proverite vaš email ta dalja uputstva',
	'ACCOUNT_INACTIVE_ADMIN'		=> 'Vaš nalog je kreiran. Međutim, ovaj forum zahteva aktivaciju naloga od administratora. Email im je poslat i bićete informisani kada vaš nalog bude aktiviran',
	'ACTIVATION_EMAIL_SENT'			=> 'Aktivacioni email je poslat na vašu email adresu',
	'ACTIVATION_EMAIL_SENT_ADMIN'		=> 'Aktivacioni email je poslat na email adresu administratora.',
	'ADD'							=> 'Dodaj',
	'ADD_BCC'						=> 'Dodaj [BCC]',
	'ADD_FOES'						=> 'Dodaj nove protivnike',
	'ADD_FOES_EXPLAIN'				=> 'Možete uneti više korisničkih imena svako u novu liniju',
	'ADD_FOLDER'					=> 'Dodaj folder',
	'ADD_FRIENDS'					=> 'Dodaj nove prijatelje',
	'ADD_FRIENDS_EXPLAIN'			=> 'Možete uneti više korisničkih imena svako u novu liniju',
	'ADD_NEW_RULE'					=> 'Dodaj novo pravilo',
	'ADD_RULE'						=> 'Dodaj pravilo',
	'ADD_TO'						=> 'Dodaj [Za]',
	'ADMIN_EMAIL'					=> 'Administratori mi mogu slati email-ove sa informacijama',
	'AGREE'							=> 'Prihvatam ove uslove',
	'ALLOW_PM'						=> 'Dozvoli korisnicima da mi pošalju privatne poruke',
	'ALLOW_PM_EXPLAIN'				=> 'Znajte da će administratori i moderatori uvek biti u mogućnosti da vam šalju poruke.',
	'ALREADY_ACTIVATED'				=> 'Već ste aktivirali vaš nalog',
	'ATTACHMENTS_EXPLAIN'			=> 'Ovo je lista prikačenih fajlova koje ste poslali u postovima u ovom forumu.',
	'ATTACHMENTS_DELETED'			=> 'Prikačeni fajlovi su uspešno obrisani.',
	'ATTACHMENT_DELETED'			=> 'Prikačeni fajl je uspešno obrisan.',
	'AVATAR_CATEGORY'				=> 'Kategorija',
	'AVATAR_EXPLAIN'				=> 'Maksimalne dimenzije; širina %1$d piksela, visina %2$d piksela, veličina fajla %3$dkB.',
	'AVATAR_FEATURES_DISABLED'		=> 'Funkcija avatara je trenutno onemogućena.',
	'AVATAR_GALLERY'				=> 'Lokalna galerija',
	'AVATAR_GENERAL_UPLOAD_ERROR'	=> 'Ne mogu da pošaljem avatar za %s',
	'AVATAR_PAGE'					=> 'Stranica',

	'BACK_TO_DRAFTS'			=> 'Povratak na sačuvane nacrte',
	'BACK_TO_LOGIN'				=> 'Povratak na prijavu',
	'BIRTHDAY'					=> 'Rođendan',
	'BIRTHDAY_EXPLAIN'			=> 'Podeđavanjem godine će prikazati vaše godine kada vam je rođendan.',
	'BOARD_DATE_FORMAT'			=> 'Moj format datuma',
	'BOARD_DATE_FORMAT_EXPLAIN'	=> 'Sintaksa je identična PHP-ovoj <a href="http://www.php.net/date">date()</a> funkciji',
	'BOARD_DST'					=> 'Daylight Saving Time je uključen',
	'BOARD_LANGUAGE'			=> 'Moj jezik',
	'BOARD_STYLE'				=> 'Moj stil boarda',
	'BOARD_TIMEZONE'			=> 'Moj vremenska zona',
	'BOOKMARKS'					=> 'Beleške',
	'BOOKMARKS_EXPLAIN'			=> 'Možete zabeležiti teme za buduće reference. Obeležite kućicu za sve beleške koje želite da obrišete, a onda kliknite na dugme <em>Ukloni izabrane beleške</em>.',
	'BOOKMARKS_DISABLED'		=> 'Beleške su isključene na ovom boardu',
	'BOOKMARKS_REMOVED'			=> 'Beleške su uspešno uklonjene',

	'CANNOT_EDIT_MESSAGE_TIME'	=> 'Ne možete više menjati ili obrisati tu poruku',
	'CANNOT_MOVE_TO_SAME_FOLDER'=> 'Poruke ne mogu biti pomerene u folder koji želite da uklonite.',
	'CANNOT_MOVE_FROM_SPECIAL'	=> 'Poruke ne mogu biti uklonjene iz outbox-a.',
	'CANNOT_RENAME_FOLDER'		=> 'Ovaj folder ne možete preimenovati.',
	'CANNOT_REMOVE_FOLDER'		=> 'Ovaj folder se ne može ukloniti.',
	'CHANGE_DEFAULT_GROUP'		=> 'Promeni podrazumevanu grupu',
	'CHANGE_PASSWORD'			=> 'Promeni šifru',
	'CLICK_RETURN_FOLDER'		=> '%1$sPovratak u vaš “%3$s” folder%2$s',
	'CONFIRMATION'				=> 'Potvrda registracije',
	'CONFIRM_CHANGES'			=> 'Potvrdi izmene',	
	'CONFIRM_EMAIL'				=> 'Potvrdi email adresu',
	'CONFIRM_EMAIL_EXPLAIN'		=> 'Samo trebate da odredite ovo ako menjate vašu email adresu.',
	'CONFIRM_EXPLAIN'			=> 'Da bi sprečili automatske registracije administrator zahteva da unesete kod za potvrdu. Kod je prikazan u slici ispod. Ako ste vizuelno oštećeni ili na bilo koji drugi način ne možete da pročitate ovaj kod, molimo vas da kontaktirate %sAdministratora%s.',
	'CONFIRM_PASSWORD'			=> 'Potvrdite novu šifru',
	'CONFIRM_PASSWORD_EXPLAIN'	=> 'Morate potvrditi vašu šifru samo ukoliko ste je promenili iznad',
	'COPPA_BIRTHDAY'			=> 'Da bi nastavili sa procesom registracije recite nam gde ste rođeni.',
	'COPPA_COMPLIANCE'			=> 'COPPA žalba',
	'COPPA_EXPLAIN'				=> 'Znajte da klikom na Pošalji dume kreirate vaš nalog. Međutim, nalog ne može biti aktiviran dok roditelj ili staratelj ne odobri vašu registraciju. Biće vam poslat email u kome se nalazi neophodni formular sa detaljima gde da ga pošaljete.',
	'CREATE_FOLDER'				=> 'Dodaj folder…',
	'CURRENT_IMAGE'				=> 'Trenutna slika',
	'CURRENT_PASSWORD'			=> 'Trenutna šifra',
	'CURRENT_PASSWORD_EXPLAIN'	=> 'Morate potvrditi trenutnu šifru ako želite da je promenite, promenite vašu email adresu ili korisničko ime.',
	'CUR_PASSWORD_ERROR'		=> 'Trenutna šifra koju ste uneli je netačna.',
	'CUSTOM_DATEFORMAT'			=> 'Proizvoljan…',

	'DEFAULT_ACTION'			=> 'Podrazumevana akcija',
	'DEFAULT_ACTION_EXPLAIN'	=> 'Ova akcija će biti aktivirana ako ni jedna od opcija iznad nije moguća',
	'DEFAULT_ADD_SIG'			=> 'Podrazumevano priključi moj potpis',
	'DEFAULT_BBCODE'			=> 'Podrazumevano omogući BBKod',
	'DEFAULT_NOTIFY'			=> 'Podrazumevano me obavesti o odgovorima',
	'DEFAULT_SMILIES'			=> 'Podrazumevano omogući smajlije',
	'DEFINED_RULES'				=> 'Definisana pravila',
	'DELETED_TOPIC'				=> 'Tema je uklonjena',
	'DELETE_ATTACHMENT'			=> 'Obriši prikačeni fajl',
	'DELETE_ATTACHMENTS'		=> 'Obriši prikačene fajlove',
	'DELETE_ATTACHMENT_CONFIRM'	=> 'Da li ste sigurni da želite da obrišete ovaj fajl?',
	'DELETE_ATTACHMENTS_CONFIRM'=> 'Da li ste sigurni da želite da obrišete ove fajlove?',
	'DELETE_AVATAR'				=> 'Obriši sliku',
	'DELETE_COOKIES_CONFIRM'	=> 'Da li ste sigurni da želite da obrišete sve kolačiće koje je postavio ovaj board?',
	'DELETE_MARKED_PM'			=> 'Obriši obeležene poruke',
	'DELETE_MARKED_PM_CONFIRM'	=> 'Da li ste sigurni da želite da obrišete sve obeležene poruke?',
	'DELETE_OLDEST_MESSAGES'	=> 'Obriši najstarije poruke',
	'DELETE_MESSAGE'			=> 'Obriši poruku',
	'DELETE_MESSAGE_CONFIRM'	=> 'Da li ste sigurni da želite da obrišete ovu privatnu poruku?',
	'DELETE_MESSAGES_IN_FOLDER'	=> 'Obriši sve poruke sa obrisanim folderom',
	'DELETE_RULE'				=> 'Obriši pravilo',
	'DELETE_RULE_CONFIRM'		=> 'Da li ste sigurni da želite da obrišete ovao pravilo?',
	'DEMOTE_SELECTED'			=> 'Premesti izabrane',
	'DISABLE_CENSORS'			=> 'Omogući cenzuru reči',
	'DISPLAY_GALLERY'			=> 'Prikaži galeriju',
	'DOMAIN_NO_MX_RECORD_EMAIL'	=> 'Uneti email domen nema ispravan MX zapis.',
	'DOWNLOADS'					=> 'Preuzimanja',
	'DRAFTS_DELETED'			=> 'Svi izabrani nacrti su uspešno izbrisani.',
	'DRAFTS_EXPLAIN'			=> 'Ovde možete pogledati, izmeniti i obrisati vaše snimljene nacrte.',
	'DRAFT_UPDATED'				=> 'Nacrt uspešno ažuriran.',

	'EDIT_DRAFT_EXPLAIN'		=> 'Ovde možete izmeniti vaš nacrt. Nacrti ne sadrže prikačene fajlove i informacije o glasanju.',
	'EMAIL_BANNED_EMAIL'		=> 'Email adresa koju ste uneli nije dozvoljena za korišćenje.',
	'EMAIL_INVALID_EMAIL'		=> 'Email adresa koju ste uneli je neispravna.',
	'EMAIL_REMIND'				=> 'Ovo mora biti email adresa koju ste uneli pri registraciji.',
	'EMAIL_TAKEN_EMAIL'			=> 'Email adresa koju ste uneli je već zauzeta',
	'EMPTY_DRAFT'				=> 'Morate uneti poruku da bi poslali vaše izmene',
	'EMPTY_DRAFT_TITLE'			=> 'Morate uneti naslov nacrta',
	'EXPORT_AS_XML'				=> 'Izvezi kao XML',
	'EXPORT_AS_CSV'				=> 'Izvezi kao CSV',
	'EXPORT_AS_CSV_EXCEL'		=> 'Izvezi kao CSV (Excel)',
	'EXPORT_AS_TXT'				=> 'Izvezi kao TXT',
	'EXPORT_AS_MSG'				=> 'Izvezi kao MSG',
	'EXPORT_FOLDER'				=> 'Izvezi folder',

	'FIELD_REQUIRED'					=> 'Polje “%s” mora biti kompletno.',
	'FIELD_TOO_SHORT'					=> 'Polje “%1$s” je prekratko, minimum od %2$d karaktera je obavezan.',
	'FIELD_TOO_LONG'					=> 'Polje “%1$s” je predugačko, maksimum od %2$d karaktera je dozvoljen.',
	'FIELD_TOO_SMALL'					=> 'Vrednost “%1$s” je premala, minimalna vrednost od %2$d je obavezna.',
	'FIELD_TOO_LARGE'					=> 'Vrednost “%1$s” je prevelika, maksimalna vrednost od %2$d je dozvoljena.',
	'FIELD_INVALID_CHARS_NUMBERS_ONLY'	=> 'Polje “%s” ima nepravilne karaktere, samo brojevi su dozvoljeni.',
	'FIELD_INVALID_CHARS_ALPHA_ONLY'	=> 'Polje “%s” ima nepravilne karaktere, samo alfanumerički karakteri su dozvoljeni.',
	'FIELD_INVALID_CHARS_SPACERS_ONLY'	=> 'Polje “%s” ima nepravilne karaktere, samo alfanumerički, razmaci ili -+_[] karakteri su dozvoljeni.',
	'FIELD_INVALID_DATE'				=> 'Polje “%s” ima nepravilan datum.',

	'FOE_MESSAGE'				=> 'Poruka od protivnika',
	'FOES_EXPLAIN'				=> 'Protivnici su korisnici koji će standardno biti ignorisani. Postovi tih korisnika neće biti potpuno vidljivi i privatne poruke će biti zabranjene. Znajte da ne možete ignorisati moderatore ili administratore.',
	'FOES_UPDATED'				=> 'Vaša lista protivnika je uspešno ažurirana',
	'FOLDER_ADDED'				=> 'Folder je uspešno dodat',
	'FOLDER_MESSAGE_STATUS'		=> '%1$d od %2$d poruka su sačuvane',
	'FOLDER_NAME_EXIST'			=> 'Folder <strong>%s</strong> već postoji',
	'FOLDER_OPTIONS'			=> 'Opcije foldera',
	'FOLDER_RENAMED'			=> 'Folder je uspešno preimenovan',
	'FOLDER_REMOVED'			=> 'Folder je uspešno uklonjen',
	'FOLDER_STATUS_MSG'			=> 'Folder je %1$d%% popunjen (%2$d od %3$d poruka su sačuvane)',
	'FORWARD_PM'				=> 'Prosledi PP',
	'FORCE_PASSWORD_EXPLAIN'	=> 'Pre nego što možete nastaviti sa pregledom boarda, u obavezi ste da promenite vašu šifru',
	'FRIEND_MESSAGE'			=> 'Poruka od prijatelja',
	'FRIENDS'					=> 'Prijatelji',
	'FRIENDS_EXPLAIN'			=> 'Prijatelji vam omogućavaju brz pristup sa članovima sa kojima često komunicirate. Ako šablon ima relevantnu podršku, svaki post koji napiše prijatelj može biti istaknut.',
	'FRIENDS_OFFLINE'			=> 'OffLine',
	'FRIENDS_ONLINE'			=> 'OnLine',
	'FRIENDS_UPDATED'			=> 'Vaša lista prijatelja je uspešno ažurirana',
	'FULL_FOLDER_OPTION_CHANGED'=> 'Puna opcija foldera je uspešno izmenjena',
	'FWD_ORIGINAL_MESSAGE'		=> '-------- Originalna poruka --------',
	'FWD_SUBJECT'				=> 'Tema: %s',
	'FWD_DATE'					=> 'Datum: %s',
	'FWD_FROM'					=> 'Od: %s',
	'FWD_TO'					=> 'Za: %s',

	'GLOBAL_ANNOUNCEMENT'		=> 'Globalno obaveštenje',

	'HIDE_ONLINE'				=> 'Sakrij moj OnLine status',
	'HIDE_ONLINE_EXPLAIN'		=> 'Menjenje ove opcije neće imati uticaja sve do ponovne posete boarda.',
	'HOLD_NEW_MESSAGES'			=> 'Ne prihvataj nove poruke (Nove poruke će biti zadržane dok se ne obezbedi dovoljno mesta)',
	'HOLD_NEW_MESSAGES_SHORT'	=> 'Nove poruke će biti zadržane',

	'IF_FOLDER_FULL'			=> 'Ako je folder pun',
	'IMPORTANT_NEWS'			=> 'Važna obaveštenja',
	'INVALID_CHARS_USERNAME'	=> 'Korisničko ime sadrži zabranjene karaktere.',
	'INVALID_CHARS_NEW_PASSWORD'=> 'Šifra ne sadrži obavezne karaktere.',
	'INVALID_USER_BIRTHDAY'		=> 'Uneti datum je neispravan.',
	'ITEMS_REQUIRED'			=> 'Stavke označene sa * su obavezna polja profilai moraju biti popunjena',

	'JOIN_SELECTED'				=> 'Pridruži izabranoj',

	'LANGUAGE'					=> 'Jezik',
	'LINK_REMOTE_AVATAR'		=> 'Link van sajta',
	'LINK_REMOTE_AVATAR_EXPLAIN'=> 'Unesite URL lokacije koja sadrži avatar koju želite da likujete.',
	'LINK_REMOTE_SIZE'			=> 'Dimenzije avatara',
	'LINK_REMOTE_SIZE_EXPLAIN'	=> 'Unesite širinu i visinu avatara, ostavite prazno za pokušaj automatske verifikacije.',
	'LOGIN_EXPLAIN_UCP'			=> 'Molimo vas da se logujete da bi pristupili Korisničkom Kontrolnom Panelu',
	'LOGIN_REDIRECT'			=> 'Uspešno ste se prijavili.',
	'LOGOUT_FAILED'				=> 'Niste odjavljeni, jer se zahtev ne poklapa sa vašom sesijom. Molimo vas da kontaktirate administratora ako i ubuduće imate probleme.',
	'LOGOUT_REDIRECT'			=> 'Uspešno ste se odjavili.',

	'MARK_IMPORTANT'				=> 'Obeleži kao važno',
	'MARKED_MESSAGE'				=> 'Obeležena poruka',
	'MAX_FOLDER_REACHED'			=> 'Dostigli ste maksimalni broj korisnički definisanih foldera',
	'MESSAGE_BY_AUTHOR'				=> 'od',
	'MESSAGE_COLOURS'				=> 'Boje poruke',
	'MESSAGE_DELETED'				=> 'Poruka uspešno obrisana',
	'MESSAGE_HISTORY'				=> 'Istorija poruke',
	'MESSAGE_REMOVED_FROM_OUTBOX'	=> 'Ovu poruku je uklonio njen autor pre nego što je isporučena',
	'MESSAGE_SENT_ON'				=> 'na',
	'MESSAGE_STORED'				=> 'Vaša poruka je uspešno poslata',
	'MESSAGE_TO'					=> 'Za',
	'MESSAGES_DELETED'				=> 'Poruke uspešno obrisane',
	'MOVE_DELETED_MESSAGES_TO'		=> 'Pomeri poruke iz uklonjenog foldera u',
	'MOVE_DOWN'						=> 'Pomeri dole',
	'MOVE_MARKED_TO_FOLDER'			=> 'Pomeri obeležene u %s',
	'MOVE_PM_ERROR'					=> 'Došlo je do greške prilikom pomeranja poruka u novi folder, samo su %1d od %2d poruka pomerene.',
	'MOVE_TO_FOLDER'				=> 'Pomeri u folder',
	'MOVE_UP'						=> 'Pomeri gore',

	'NEW_EMAIL_ERROR'				=> 'Email adrese koju ste uenli se ne poklapaju.',
	'NEW_FOLDER_NAME'				=> 'Ime novog foldera',
	'NEW_PASSWORD'					=> 'Nova šifra',
	'NEW_PASSWORD_ERROR'			=> 'Šifre koje ste uneli se ne poklapaju.',
	'NOTIFY_METHOD'					=> 'Metod obaveštenja',
	'NOTIFY_METHOD_BOTH'			=> 'Oba',
	'NOTIFY_METHOD_EMAIL'			=> 'Samo email-om',
	'NOTIFY_METHOD_EXPLAIN'			=> 'Metod za slanje poruka putem ovog boarda.',
	'NOTIFY_METHOD_IM'				=> 'Samo Jabber',
	'NOTIFY_ON_PM'					=> 'Obavesti me o novim privatnim porukama',
	'NOT_ADDED_FRIENDS_ANONYMOUS'	=> 'Ne možete dodati anonimne korisnike u vašu listu prijatelja.',
	'NOT_ADDED_FRIENDS_FOES'		=> 'Ne možete dodati anonimne korisnike u vašu listu prijatelja koji su već na listi vaših protivnika',
	'NOT_ADDED_FRIENDS_SELF'		=> 'Ne možete dodati sami sebe u listu prijatelja',
	'NOT_ADDED_FOES_MOD_ADMIN'		=> 'Ne možete dodati administratore i moderatore u vašu listu protivnika.',
	'NOT_ADDED_FOES_ANONYMOUS'		=> 'Ne možete dodati anonimnog korisnika u vašu listu protivnika.',
	'NOT_ADDED_FOES_FRIENDS'		=> 'Ne možete dodati anonimnog korisnika u vašu listu protivnika koji je već u vašoj listi prijatelja.',
	'NOT_ADDED_FOES_SELF'			=> 'Ne možete dodati sami sebe na listu protivnika.',
	'NOT_AGREE'						=> 'Ne slažem se sa ovim uslovima',
	'NOT_ENOUGH_SPACE_FOLDER'		=> 'Odredišni folder “%s” je verovatno pun. Zahtevana akcija nije izvršena.',
	'NOT_MOVED_MESSAGE'				=> 'Imate 1 privatnu poruku na čekanju zbog popunjenog foldera.',
	'NOT_MOVED_MESSAGES'			=> 'Imate %d privatne poruke na čekanju zbog popunjenog foldera.',
	'NO_ACTION_MODE'				=> 'Niste izabrali akciju poruke.',
	'NO_AUTHOR'						=> 'Nema definisanog autora ove poruke',
	'NO_AVATAR_CATEGORY'			=> 'Nema',

	'NO_AUTH_DELETE_MESSAGE'		=> 'Niste autorizovani da brišete privatne poruke.',
	'NO_AUTH_EDIT_MESSAGE'			=> 'Niste autorizovani da menjate privatne poruke.',
	'NO_AUTH_FORWARD_MESSAGE'		=> 'Niste autorizovani da prosleđujete privatne poruke.',
	'NO_AUTH_GROUP_MESSAGE'			=> 'Niste autorizovani da šaljete privatne poruke u grupe.',
	'NO_AUTH_READ_MESSAGE'			=> 'Niste autorizovani da čitate privatne poruke.',
	'NO_AUTH_READ_REMOVED_MESSAGE'	=> 'Niste u mogućnosti da pročitate ovu poruku jer je uklonjena od stranje njenog autora.',
	'NO_AUTH_SEND_MESSAGE'			=> 'Niste autorizovani da šaljete privatne poruke.',
	'NO_AUTH_SIGNATURE'				=> 'Niste autorizovani da definišete potpis',
	'NO_AUTH_PASSWORD_REMINDER'		=> 'Niste autorizovani da zatražite novu šifru.',
	'NO_AUTH_READ_HOLD_MESSAGE'		=> 'Niste autorizovani da čitate privatne poruke koje su na čekanju.',

	'NO_BCC_RECIPIENT'			=> 'Ništa',
	'NO_BOOKMARKS'				=> 'Nemate beleške',
	'NO_BOOKMARKS_SELECTED'		=> 'Niste izabrali ni jednu belešku',
	'NO_EDIT_READ_MESSAGE'		=> 'Privatna poruka ne može biti izmenjena jer je već pročitana.',
	'NO_EMAIL_USER'				=> 'Informacija o Email-u/korisničkom imenu ne može biti pronađena',
	'NO_FOES'					=> 'Trenutno nemate definisanih protivnika',
	'NO_FRIENDS'				=> 'Trenutno nemate definisanih prijatelja',
	'NO_FRIENDS_OFFLINE'		=> 'Nema OffLine prijatelja',
	'NO_FRIENDS_ONLINE'			=> 'Nema OnLine prijatelja',
	'NO_GROUP_SELECTED'			=> 'Niste izabrali grupu',
	'NO_IMPORTANT_NEWS'			=> 'Nema važnih obaveštenja',
	'NO_MESSAGE'				=> 'Privatna poruka ne može biti pronađena',
	'NO_NEW_FOLDER_NAME'		=> 'Morate odrediti ime novog foldera',
	'NO_NEWER_PM'				=> 'Nema novijih poruka',
	'NO_OLDER_PM'				=> 'Nema starijih poruka',
	'NO_PASSWORD_SUPPLIED'		=> 'Ne možete se prijaviti bez šifre.',
	'NO_PM_ICON'				=> 'Bez ikonice',
	'NO_RECIPIENT'				=> 'Niste definisali primaoca',
	'NO_RULES_DEFINED'			=> 'Nema definisanih pravila',
	'NO_SAVED_DRAFTS'			=> 'Nema sačuvanih nacrta',
	'NO_TO_RECIPIENT'			=> 'Niko',
	'NO_WATCHED_FORUMS'			=> 'Ne pratite ni jedan forum.',
	'NO_WATCHED_TOPICS'			=> 'Ne pratite ni jednu temu.',
	'NO_WATCHED_SELECTED'		=> 'Niste izabrali nijednu temu ili forume za praćenje.',

	'PASS_TYPE_ALPHA_EXPLAIN'	=> 'Šifra mora biti između %1$d i %2$d karaktera dugačka i mora sadržati alfanumeričke karaktere',
	'PASS_TYPE_ANY_EXPLAIN'		=> 'Mora biti između %1$d i %2$d karaktera.',
	'PASS_TYPE_CASE_EXPLAIN'	=> 'Šifra mora biti između %1$d i %2$d karaktera dugačka i mora sadržati velika i mala slova',
	'PASS_TYPE_SYMBOL_EXPLAIN'	=> 'Šifra mora biti između %1$d i %2$d karaktera dugačka i mora sadržati simbole',
	'PASSWORD'					=> 'Šifra',
	'PASSWORD_ACTIVATED'		=> 'Vaša nova šifra je aktivirana',
	'PASSWORD_UPDATED'			=> 'Vaša šifra je uspešno poslata na vašu originalnu email adresu.',
	'PERMISSIONS_RESTORED'		=> 'Uspešno ste povratili originalne dozvole.',
	'PERMISSIONS_TRANSFERRED'	=> 'Uspešno ste prebacili dozvole iz <strong>%s</strong>, sada ste u mogućnosti da pregledate forum sa dozvolama korisnika.<br />Znajte da dozvole administratora nisu prenete. U mogućnosti ste da se vratite na vaš set dozvola bilo kada.',
	'PM_DISABLED'				=> 'Privatne poruke su onemogućene na ovom boardu',
	'PM_FROM'					=> 'Od',
	'PM_FROM_REMOVED_AUTHOR'	=> 'Ovu poruku je poslao korisnik koji više nije registrovan.',
	'PM_ICON'					=> 'Ikonica PP',
	'PM_INBOX'					=> 'Prijemno sanduče',
	'PM_NO_USERS'				=> 'Zahtevani korisnici koje želite da dodate ne postoje.',
	'PM_OUTBOX'					=> 'Za slanje',
	'PM_SENTBOX'				=> 'Poslate poruke',
	'PM_SUBJECT'				=> 'Tema poruke',
	'PM_TO'						=> 'Pošalji za',
	'PM_USERS_REMOVED_NO_PM'	=> 'Neki korisnici ne mogu biti dodati jer su onemogućili privatne poruke.',
	'POPUP_ON_PM'				=> 'Prikaži iskačući prozor kada stigne nova privatna poruka',
	'POST_EDIT_PM'				=> 'Izmeni poruku',
	'POST_FORWARD_PM'			=> 'Prosledi poruku',
	'POST_NEW_PM'				=> 'Pošalji poruku',
	'POST_PM_LOCKED'			=> 'Privatne poruke su zaključane',
	'POST_PM_POST'				=> 'Citiraj post',
	'POST_QUOTE_PM'				=> 'Citiraj poruku',
	'POST_REPLY_PM'				=> 'Odgovori na poruku',
	'PRINT_PM'					=> 'Pregled za štampanje',
	'PREFERENCES_UPDATED'		=> 'Vaša podešavanja su ažurirana.',
	'PROFILE_INFO_NOTICE'		=> 'Znajte da će ove informacije biti vidljive ostalim korisnicima. Budite pažljivi kada pišete bilo kakve lične detalje. Sva polja označena sa * moraju biti popunjena.',
	'PROFILE_UPDATED'			=> 'Vaš profil je ažuriran.',

	'RECIPIENT'							=> 'Primaoc',
	'RECIPIENTS'						=> 'Primaoci',
	'REGISTRATION'						=> 'Registracija',
	'RELATIVE_DAYS'						=> 'Relativnih dana',
	'RELEASE_MESSAGES'					=> '%sPusti sve poruke koje su na čekanju%s… one će biti spakovane u odgovarajući folder ako ima dovoljno mesta.',
	'REMOVE_ADDRESS'					=> 'Ukloni adresu',
	'REMOVE_SELECTED_BOOKMARKS'			=> 'Ukloni izabrane beleške',
	'REMOVE_SELECTED_BOOKMARKS_CONFIRM'	=> 'Da li ste sigurni da želite da uklonite sve izabrane beleške?',
	'REMOVE_BOOKMARK_MARKED'			=> 'Ukloni obeležene beleške',
	'REMOVE_FOLDER'						=> 'Ukloni folder',
	'REMOVE_FOLDER_CONFIRM'				=> 'Da li ste sigurni da želite da uklonite ovaj folder?',
	'RENAME'							=> 'Preimenuj',
	'RENAME_FOLDER'						=> 'Preimenuj folder',
	'REPLIED_MESSAGE'					=> 'Odgovoreno na poruku',
	'RESIGN_SELECTED'					=> 'Otkaži izabrano',
	'RETURN_FOLDER'						=> '%1$sPovratak u prethodni folder%2$s',
	'RETURN_UCP'						=> '%sPovratak u Korisnički Kontrolni Panel%s',
	'RULE_ADDED'						=> 'Pravilo uspešno dodato',
	'RULE_ALREADY_DEFINED'				=> 'Ovo pravilo je prethodno definisano',
	'RULE_DELETED'						=> 'Pravilo uspešno uklonjeno',
	'RULE_NOT_DEFINED'					=> 'Pravilo nije ispravno određeno',
	'RULE_REMOVED_MESSAGE'				=> 'Jedna privatna poruka je uklonjena zbog filtera privatnih poruka.',
	'RULE_REMOVED_MESSAGES'				=> '%d privatne poruke su uklonjene zbog filtera privatnih poruka.',

	'SAME_PASSWORD_ERROR'		=> 'Nova šifra koju ste uneli je ista kao i vaša trenutna šifra',
	'SEARCH_YOUR_POSTS'			=> 'Prikaži moje postove',
	'SEND_PASSWORD'				=> 'Pošalji šifru',
	'SENT_AT'					=> 'Polato na',
	'SHOW_EMAIL'				=> 'Korisnici me mogu kontaktirati putem email-a',
	'SIGNATURE_EXPLAIN'			=> 'Ovo je blok teksta koji može biti dodat u vaše postove. Postoji limit od %d karaktera',
	'SIGNATURE_PREVIEW'			=> 'Vaš potpis će se ovako prikazivati u postovima',
	'SIGNATURE_TOO_LONG'		=> 'Vaš potpis je predugačak.',
	'SORT'						=> 'Sortiraj',
	'SORT_COMMENT'				=> 'Komentar fajla',
	'SORT_DOWNLOADS'			=> 'Preuzimanja',
	'SORT_EXTENSION'			=> 'Ekstenzija',
	'SORT_FILENAME'				=> 'Naziv fajla',
	'SORT_POST_TIME'			=> 'Vreme posta',
	'SORT_SIZE'					=> 'Veličina fajla',

	'TIMEZONE'					=> 'Vremenska zona',
	'TO'						=> 'Za',
	'TOO_MANY_RECIPIENTS'		=> 'Previše primaoca',
	'TOO_MANY_REGISTERS'		=> 'Dostigli ste maksimalni dozvoljeni broj porušaja registracije za ovu sesiju. Molimo vas da pokušate kasnije.',

	'UCP'						=> 'Korisnički Kontrolni Panel',
	'UCP_ACTIVATE'				=> 'Aktiviraj nalog',
	'UCP_ADMIN_ACTIVATE'		=> 'Znajte da ćete morati da unesete ispravnu email adresu pre nego što vaš nalog bude aktiviran. Administrator će razmotriti vaš nalog i ako ga odobri dobićete email na adresu koju ste uneli.',
	'UCP_AIM'					=> 'AOL Instant Messenger',
	'UCP_ATTACHMENTS'			=> 'Prikačeni fajlovi',
	'UCP_COPPA_BEFORE'			=> 'Pre %s',
	'UCP_COPPA_ON_AFTER'		=> 'Na ili Posle %s',
	'UCP_EMAIL_ACTIVATE'		=> 'Znajte da ćete morati da unesete ispravnu email adresu pre nego što vaš nalog bude aktiviran. Dobićete email na adresu koju ste uneli koji sadrži link za aktivaciju naloga.',
	'UCP_ICQ'					=> 'ICQ broj',
	'UCP_JABBER'				=> 'Jabber adresa',

	'UCP_MAIN'					=> 'Pregled',
	'UCP_MAIN_ATTACHMENTS'		=> 'Rad sa prikačenim fajlovima',
	'UCP_MAIN_BOOKMARKS'		=> 'Rad sa beleškama',
	'UCP_MAIN_DRAFTS'			=> 'Rad sa nacrtima',
	'UCP_MAIN_FRONT'			=> 'Glavna strana',
	'UCP_MAIN_SUBSCRIBED'		=> 'Rad sa prijavama',

	'UCP_MSNM'					=> 'MSN Messenger',
	'UCP_NO_ATTACHMENTS'		=> 'Niste poslali ni jedan fajl',

	'UCP_PREFS'					=> 'Podešavanja foruma',
	'UCP_PREFS_PERSONAL'		=> 'Izmeni globalna podešavanja',
	'UCP_PREFS_POST'			=> 'Izmeni podrazumevana podešavanja posta',
	'UCP_PREFS_VIEW'			=> 'Izmeni opcije prikaza',
	
	'UCP_PM'					=> 'Privatne poruke',
	'UCP_PM_COMPOSE'			=> 'Napiši poruku',
	'UCP_PM_DRAFTS'				=> 'Rad sa nacrtima PP',
	'UCP_PM_OPTIONS'			=> 'Izmeni opcije',
	'UCP_PM_POPUP'				=> 'Privatne poruke',
	'UCP_PM_POPUP_TITLE'		=> 'Prikazivanje privatnih poruka',
	'UCP_PM_UNREAD'				=> 'Nepročitane poruke',
	'UCP_PM_VIEW'				=> 'Pregled poruka',

	'UCP_PROFILE'				=> 'Profil',
	'UCP_PROFILE_AVATAR'		=> 'Izmeni avatar',
	'UCP_PROFILE_PROFILE_INFO'	=> 'Izmeni profil',
	'UCP_PROFILE_REG_DETAILS'	=> 'Izmeni podešavanja naloga',
	'UCP_PROFILE_SIGNATURE'		=> 'Izmeni potpis',

	'UCP_USERGROUPS'			=> 'Korisničke grupe',
	'UCP_USERGROUPS_MEMBER'		=> 'Izmeni članstvo',
	'UCP_USERGROUPS_MANAGE'		=> 'Rad sa grupama',

	'UCP_REGISTER_DISABLE'			=> 'Kreiranje novog nalog trenutno nije moguće.',
	'UCP_REMIND'					=> 'Pošalji šifru',
	'UCP_RESEND'					=> 'Pošalji aktivacioni email',
	'UCP_WELCOME'					=> 'Dobrodošli na Korisnički Kontrolni Panel. Odavde možete pratiti, pogledati ili izmeniti vaš profil, podešavanja, prijave na forume i teme. Možete takođe slati poruke drugim korisnicima (ako je omogućeno). Molimo vas da pročitate sva obaveštenja pre nego što nastavite.',
	'UCP_YIM'						=> 'Yahoo Messenger',
	'UCP_ZEBRA'						=> 'Prijatelji &amp; Protivnici',
	'UCP_ZEBRA_FOES'				=> 'Rad sa protivnicima',
	'UCP_ZEBRA_FRIENDS'				=> 'Rad sa prijateljima',
	'UNKNOWN_FOLDER'				=> 'Nepoznat folder',
	'UNWATCH_MARKED'				=> 'Prekini praćenje obeleženih',
	'UPLOAD_AVATAR_FILE'			=> 'Slanje sa vašeg kompjutera',
	'UPLOAD_AVATAR_URL'				=> 'Slanje sa URL-a',
	'UPLOAD_AVATAR_URL_EXPLAIN'		=> 'Unesite URL lokacije koja sadrži sliku, i ona će biti kopirana na ovaj sajt.',
	'USERNAME_ALPHA_ONLY_EXPLAIN'	=> 'Korisničko ime mora biti između %1$d i %2$d karaktera dugačko i koristite samo alfanumeričke karaktere',
	'USERNAME_ALPHA_SPACERS_EXPLAIN'=> 'Korisničko ime mora biti između %1$d i %2$d karaktera dugačko i koristite alfanumeričke, razmake ili -+_[] karaktere.',
	'USERNAME_CHARS_ANY_EXPLAIN'	=> 'Dužina mora biti između %1$d i %2$d karaktera.',
	'USERNAME_ASCII_EXPLAIN'		=> 'Korisničko ime mora biti između %1$d i %2$d karaktera i možete koristiti samo ASCII karaktere, dakle ne i specijalne karaktere.',
	'USERNAME_LETTER_NUM_EXPLAIN'	=> 'Korisničko ime mora biti između %1$d i %2$d karaktera i možete koristiti samo slova i brojke.',
	'USERNAME_LETTER_NUM_SPACERS_EXPLAIN'=> 'Korisničko ime mora biti između %1$d i %2$d karaktera dugačko i možete koristiti slova, brojeve, razmak i -+_[] karaktere.',
	'USERNAME_TAKEN_USERNAME'		=> 'Korisničko ime koje ste uneli se već koristi, molimo vas da izaberete drugo.',
	'USERNAME_DISALLOWED_USERNAME'	=> 'Korisničko ime koje ste uneli je zabranjeno.',
	'USER_NOT_FOUND_OR_INACTIVE'	=> 'Korisnička imena koja ste uneli ili ne mogu biti pronađena nisu aktivirani korisnici.',

	'VIEW_AVATARS'				=> 'Prikaži avatare',
	'VIEW_EDIT'					=> 'Pregled/izmena',
	'VIEW_FLASH'				=> 'Prikaži Flash animacije',
	'VIEW_IMAGES'				=> 'Prikaži slike u postovima',
	'VIEW_NEXT_HISTORY'			=> 'Sledeća PP po istoriji',
	'VIEW_NEXT_PM'				=> 'Sledeća PP',
	'VIEW_PM'					=> 'Pregled poruke',
	'VIEW_PM_INFO'				=> 'Detalji poruke',
	'VIEW_PM_MESSAGE'			=> '1 poruka',
	'VIEW_PM_MESSAGES'			=> '%d poruke',
	'VIEW_PREVIOUS_HISTORY'		=> 'Prethodna PP u istoriji',
	'VIEW_PREVIOUS_PM'			=> 'Prethodna PP',
	'VIEW_SIGS'					=> 'Prikaži potpise',
	'VIEW_SMILIES'				=> 'Prikaži smajlije kao sličice',
	'VIEW_TOPICS_DAYS'			=> 'Prikaži teme iz prethodnih dana',
	'VIEW_TOPICS_DIR'			=> 'Prikaži smer ređanja tema',
	'VIEW_TOPICS_KEY'			=> 'Prikaži teme sortirane po',
	'VIEW_POSTS_DAYS'			=> 'Prikaži postove iz prethodnih dana',
	'VIEW_POSTS_DIR'			=> 'Prikaži smer ređanja postova',
	'VIEW_POSTS_KEY'			=> 'Prikaži postove sortirane po',

	'WATCHED_EXPLAIN'			=> 'Iznad je lista foruma i tema koje pratite. Boćete obavešteni o novim postovima u njima. Da bi prestali sa praćenjem, obeležite forum ili temu i onda pritisnite <em>Prekini praćenje</em> dugme.',
	'WATCHED_FORUMS'			=> 'Praćeni forumi',
	'WATCHED_TOPICS'			=> 'Praćene teme',
	'WRONG_ACTIVATION'			=> 'Aktivacioni ključ koji ste priložili se ne poklapa ni sa jednim u našoj bazi',

	'YOUR_DETAILS'				=> 'Vaša aktivnost',
	'YOUR_FOES'					=> 'Vaši protivnici',
	'YOUR_FOES_EXPLAIN'			=> 'Da bi uklonili korisnička imena izaberite ih a onda kliknite na Ukloni',
	'YOUR_FRIENDS'				=> 'Vaši prijatelji',
	'YOUR_FRIENDS_EXPLAIN'		=> 'Da bi uklonili korisnička imena izaberite ih a onda kliknite na Ukloni',
	'YOUR_WARNINGS'				=> 'Vaš nivo upozorenja',

	'PM_ACTION' => array(
		'PLACE_INTO_FOLDER'	=> 'Postavite u folder',
		'MARK_AS_READ'		=> 'Obeleži kao pročitano',
		'MARK_AS_IMPORTANT'	=> 'Obeleži poruku',
		'DELETE_MESSAGE'	=> 'Obriši poruku'
	),
	'PM_CHECK' => array(
		'SUBJECT'	=> 'Tema',
		'SENDER'	=> 'Pošaljioc',
		'MESSAGE'	=> 'Poruka',
		'STATUS'	=> 'Status poruke',
		'TO'		=> 'Poslata za'
	),
	'PM_RULE' => array(
		'IS_LIKE'		=> 'je kao',
		'IS_NOT_LIKE'	=> 'nije kao',
		'IS'			=> 'je',
		'IS_NOT'		=> 'nije',
		'BEGINS_WITH'	=> 'počinje sa',
		'ENDS_WITH'		=> 'završava se sa',
		'IS_FRIEND'		=> 'je prijatelj',
		'IS_FOE'		=> 'je protivnik',
		'IS_USER'		=> 'je korisnik',
		'IS_GROUP'		=> 'je u korisničkoj grupi',
		'ANSWERED'		=> 'odgovorio',
		'FORWARDED'		=> 'prosleđena',
		'TO_GROUP'		=> 'u moju podrazumevanu korisničku grupu',
		'TO_ME'			=> 'za mene'
	),


	'GROUPS_EXPLAIN'	=> 'Korisničke grupe omogućavaju administratorima boarda da bolje upravljaju korisnicima. Standardno ćete biti ubačeni u određenu grupu, i to je vaša podrazumevana grupa. Ova grupa definiše kako se možete predstaviti drugim korisnicima, na primer boja vašeg korisničkog imena, avatar, čin, itd. U zavisnosti da li administrator dozvoljava, možete biti u mogućnosti da promenite vašu podrazumevanu grupu. Možete takođe biti postavljeni ili vam bude omogućeno da se priključite drugim grupama. Neke grupe vam mogu dati i dodatna prava za pregled sadržaja ili da povećaju vaše mogućnosti u drugim oblastima.',
	'GROUP_LEADER'		=> 'Vođstvo',
	'GROUP_MEMBER'		=> 'Članstvo',
	'GROUP_PENDING'		=> 'Članstva u razmatranju',
	'GROUP_NONMEMBER'	=> 'Ne-članstvo',
	'GROUP_DETAILS'		=> 'Detalji grupe',

	'NO_LEADER'		=> 'Nema vođstva grupe',
	'NO_MEMBER'		=> 'Nema članstva grupe',
	'NO_PENDING'	=> 'Nema razmatranih članstva',
	'NO_NONMEMBER'	=> 'Nema grupa bez članova',
));

?>