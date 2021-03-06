<?php
/** 
*
* acp_board [Serbian]
*
* @package language
* @version $Id: board.php,v 1.46 2006/11/23 20:56:02 shs Exp $
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
// Placeholders can now contain order information, e.g. instead of
// 'Page %s of %s' you can (and should) write 'Page %1$s of %2$s', this allows
// translators to re-order the output of data while ensuring it remains correct
//
// You do not need this where single placeholders are used, e.g. 'Message %d' is fine
// equally where a string contains only two placeholders which are used to wrap text
// in a url you again do not need to specify an order e.g., 'Click %sHERE%s' is fine

// Board Settings
$lang = array_merge($lang, array(
	'ACP_BOARD_SETTINGS_EXPLAIN'	=> 'Ovde podešavate osnovne operacije vašeg boarda, od imena sajta do registracije korisnika i privatnih poruka.',
	'CUSTOM_DATEFORMAT'				=> 'Prilagođen…',
	'DEFAULT_DATE_FORMAT'			=> 'Format datuma',
	'DEFAULT_DATE_FORMAT_EXPLAIN'	=> 'Format datuma je isti kao i kod PHP <code>date</code> funkcije.',
	'DEFAULT_LANGUAGE'				=> 'Podrazumevani jezik',
	'DEFAULT_STYLE'					=> 'Podrazumevani stil',
	'DISABLE_BOARD'					=> 'Isključi board',
	'DISABLE_BOARD_EXPLAIN'			=> 'Ova opcija će isklučiti bord korisnicima. Možete uneti kratku (255 karaktera) poruku koju će posetioci videti ako želite.',
	'ENABLE_QUEUE_TRIGGER'			=> 'Omogući čekanje postova',
	'ENABLE_QUEUE_TRIGGER_EXPLAIN'	=> 'Omogućuje Vam da stavite postove registrovanih korisnika na odobrenje ako je njihov broj postova manji od određene vrednosti koju podesite ispod. Ova opcija nema efekta na podešavanja dozvola za odobrenje posta/teme.',
	'FORM_TIME_MAX'					=> 'Maksimalno vreme za popunjavanje formi',
	'FORM_TIME_MAX_EXPLAIN'			=> 'Vreme za koje korisnik mora da ispuni formu. Upišite -1 za neograničeno. Znajte da forma može postati nevažeća ukoliko sesija istekne, u zavisnosti od ovog parametra.',
	'FORM_TIME_MIN'					=> 'Minimalno vreme za popunjavanje forme',
	'FORM_TIME_MIN_EXPLAIN'			=> 'Prosleđene forme pre isteka ovog vremena se ignorišu. Upišite 0 za neograničeno.',
	'FORM_SID_GUESTS'				=> 'Prilagodi forme za sesije gostiju',
	'FORM_SID_GUESTS_EXPLAIN'		=> 'Ako je uključeno, forma će biti ekskluzivna za goste. Ovo može dovesti do problema kod nekih provajdera.',
	'JAB_GTALK_NOTE'				=> 'Znajte da GTalk neće raditi jer  <samp>dns_get_record</samp> funkcija nije pronađena. Ova funkcija ne postoji u PHP4, i nije ugrađena na Windows platformi. Trenutno ne radi na BSD-baziranim sistemima, uključujući Mac OS.',
	'NO_REF_VALIDATION'				=> 'Bez provere',
	'REF_HOST'						=> 'Samo proveri host',
	'REF_PATH'						=> 'Takođe proveri putanju',
	'REFERER_VALID'					=> 'Proveri pošaljioca',
	'REFERER_VALID_EXPLAIN'			=> 'Ako je ova opcija omogućena, pošaljilac posta će biti upoređen sa putanjom hosta/putanje skripte. Ovo može dovesti do problema kod foruma koji koriste više domena ili eksternih prijava.',
	'OVERRIDE_STYLE'				=> 'Potisni korisnički stil',
	'OVERRIDE_STYLE_EXPLAIN'		=> 'Menja korisnički stil sa podrazumevanim.',
	'RELATIVE_DAYS'					=> 'Relativni dani',
	'SCRIPT_PATH'					=> 'Putanja do skripti',
	'SCRIPT_PATH_EXPLAIN'				=> 'Putanja gde je phpBB lociran relativno od naziva domena, npr. <samp>/phpBB3</samp>.',
	'SITE_DESC'						=> 'Opis sajta',
	'SITE_NAME'						=> 'Naziv sajta',
	'SYSTEM_DST'					=> 'Omogući Daylight Savings',
	'SYSTEM_TIMEZONE'				=> 'Sistemska vremenska zona',
	'WARNINGS_EXPIRE'				=> 'Trajanje upozorenja',
	'WARNINGS_EXPIRE_EXPLAIN'		=> 'Broj dana posle posle objave pre nego što upozorenje za korisnika istekne',
));

// Board Features
$lang = array_merge($lang, array(
	'ACP_BOARD_FEATURES_EXPLAIN'	=> 'Ovde možete uključiti/isključiti opcije boarda',

	'ALLOW_ATTACHMENTS'			=> 'Dozvoli prikačene fajlove',
	'ALLOW_BIRTHDAYS'			=> 'Dozvoli rođendane',
	'ALLOW_BIRTHDAYS_EXPLAIN'	=> 'Dozvoli da se rođendani unose i budu prikazani u profilima. Znajte da lista rođendana u okviru indeksa boarda kontrolisana posebnim podešavanjem opterećenja.',
	'ALLOW_BOOKMARKS'			=> 'Dozvoli da se teme stave u bookmark',
	'ALLOW_BOOKMARKS_EXPLAIN'	=> 'Korisnik je u mogućnosti da ima sopstveni bookmarks',
	'ALLOW_BBCODE'				=> 'Dozvoli BBKod',
	'ALLOW_FORUM_NOTIFY'		=> 'Dozvoli posmatranje foruma',
	'ALLOW_NAME_CHANGE'			=> 'Dozvoli promenu korisničkog imena',
	'ALLOW_NO_CENSORS'			=> 'Dozvoli isključenje cenzura',
	'ALLOW_NO_CENSORS_EXPLAIN'	=> 'Korisnik može isključiti cenzurisane reči.',
	'ALLOW_PM_ATTACHMENTS'		=> 'Dozvoli prikačene fajlove u privatnim porukama',
	'ALLOW_SIG'					=> 'Dozvoli potpise',
	'ALLOW_SIG_BBCODE'			=> 'Dozvoli BBKod u potpisima korisnika',
	'ALLOW_SIG_FLASH'			=> 'Dozvoli korišćenje <code>[FLASH]</code> BBKod taga u potpisima korisnika',
	'ALLOW_SIG_IMG'				=> 'Dozvoli korišćenje <code>[IMG]</code> BBKod taga u potpisima korisnika',
	'ALLOW_SIG_LINKS'			=> 'Dozvoli korišćenje linkova u potpisima korisnika',
	'ALLOW_SIG_LINKS_EXPLAIN'	=> 'Ako je zabranjen <code>[URL]</code> BBKod tag i automatske/magične adrese su isključene.',
	'ALLOW_SIG_SMILIES'			=> 'Dozvoli korišćenje smajlija u potpisima korisnika',
	'ALLOW_SMILIES'				=> 'Dozvoli smajlije',
	'ALLOW_TOPIC_NOTIFY'		=> 'Dozvoli posmatranje tema',
	'BOARD_PM'					=> 'Privatne poruke',
	'BOARD_PM_EXPLAIN'			=> 'Dozvolite ili zabranite privatne poruke za sve korisnike.',
));

// Avatar Settings
$lang = array_merge($lang, array(
	'ACP_AVATAR_SETTINGS_EXPLAIN'	=> 'Avatari su male, unikatne sličice koje korisnici mogu dodeliti sebi. U zavisnosti od stila one su obično prikazane ispod korisničkog imena kada čitate teme. Ovde određujete kako korisnici mogu da odrede sebi avatare. Da bi mogli da upload-ujete avatare morate imati napravljen direktorijum čiji naziv unesete ispod i proverite da direktorijum ima dozvolu za upisivanje. Znajde da se ograničenje veličine fajla odnosi samo na upload-ovane avatare, ali ne i na linkovane sličice.',

	'ALLOW_LOCAL'					=> 'Dozvoli galeriju avatara',
	'ALLOW_REMOTE'					=> 'Dozvoli udaljenje avatare',
	'ALLOW_REMOTE_EXPLAIN'			=> 'Avatari linkovani sa drugog sajta',
	'ALLOW_UPLOAD'					=> 'Dozvoli upload avatara',
	'AVATAR_GALLERY_PATH'			=> 'Putanja do galerije avatara',
	'AVATAR_GALLERY_PATH_EXPLAIN'	=> 'Putanja ispod phpBB root direktorijuma za unapred učitane sličice, na primer <samp>images/avatars/gallery</samp>',
	'AVATAR_STORAGE_PATH'			=> 'Putanja za smeštanje avatara',
	'AVATAR_STORAGE_PATH_EXPLAIN'	=> 'Putanja ispod phpBB root direktorijuma, na primer <samp>images/avatars/upload</samp>',
	'MAX_AVATAR_SIZE'				=> 'Maksimalne dimenzije avatara',
	'MAX_AVATAR_SIZE_EXPLAIN'		=> '(Visina x Širina u pikselima)',
	'MAX_FILESIZE'					=> 'Maksimalna veličina fajla avatara',
	'MAX_FILESIZE_EXPLAIN'			=> 'Za upload-ovane fajlove avatara',
	'MIN_AVATAR_SIZE'				=> 'Minimalne dimenzije avatara',
	'MIN_AVATAR_SIZE_EXPLAIN'		=> '(Visina x Širina u pikselima)',
));

// Message Settings
$lang = array_merge($lang, array(
	'ACP_MESSAGE_SETTINGS_EXPLAIN'		=> 'Ovde podešavate sve podrazumevane vrednosti za privatne poruke',

	'ALLOW_BBCODE_PM'			=> 'Dozvoli BBKod u privatnim porukama',
	'ALLOW_FLASH_PM'			=> 'Dozvoli korišćenje <code>[FLASH]</code> BBKod taga',
	'ALLOW_FLASH_PM_EXPLAIN'	=> 'Znajte da mogućnost da mogućnost da koristite flash u privatnim porukama, ako je omogućen ovde, takođe zavisi od dozvola.',
	'ALLOW_FORWARD_PM'			=> 'Dozvoli prosleđivanje privatnih poruka',
	'ALLOW_IMG_PM'				=> 'Dozvoli koripćenje <code>[IMG]</code> BBKod taga',
	'ALLOW_MASS_PM'				=> 'Dozvoli slanje privatnih poruka za više korisnika ili grupa',
	'ALLOW_MASS_PM_EXPLAIN'		=> 'Slanje grupama može biti određeno po grupi bez potrebe da idete na stranicu sa rad sa grupama.',
	'ALLOW_PRINT_PM'			=> 'Dozvoli pregled za štampu u privatnim porukama',
	'ALLOW_QUOTE_PM'			=> 'Dozvoli citate u privatnim porukama',
	'ALLOW_SIG_PM'				=> 'Dozvoli potpise u privatnim porukama',
	'ALLOW_SMILIES_PM'			=> 'Dozvoli smajlije u privatnim porukama',
	'BOXES_LIMIT'				=> 'Maksimalni broj privatnih poruka u sandučetu',
	'BOXES_LIMIT_EXPLAIN'		=> 'Korisnici mogu primiti ne više od ovoliko privatnih poruka u svakom od njihovih sandučića ili unesite nulu za neograničen broj poruka.',
	'BOXES_MAX'					=> 'Maksimalni broj foldera za privatne poruke',
	'BOXES_MAX_EXPLAIN'			=> 'Po podrazumevanim vrednostima, korisnici mogu napraviti ovoliko ličnih foldera za privatne poruke.',
	'ENABLE_PM_ICONS'			=> 'Dozvoli korišćenje ikonica za teme u privatnim porukama',
	'FULL_FOLDER_ACTION'		=> 'Podrazumevana akcija za popunjen folder',
	'FULL_FOLDER_ACTION_EXPLAIN'=> 'Podrazumevana akcija koja će se izvršiti ako je korisnikov folder popunjen i ako akciju korisnika nije moguće izvršiti. Za folder “Poslate poruke” podrazumevana akcija je uvek brisanje starih poruka.',
	'HOLD_NEW_MESSAGES'			=> 'Zadrži nove poruke',
	'PM_EDIT_TIME'				=> 'Ograniči vreme pisanja',
	'PM_EDIT_TIME_EXPLAIN'		=> 'Ograničava vreme za koje treba napisati privatnu poruku koja već nije poslata, unesite nulu za neograničeno.',
	'PM_MAX_RECIPIENTS'			=> 'Maksimalni broj dozvoljenih primaoca',
	'PM_MAX_RECIPIENTS_EXPLAIN'	=> 'Maksimalni broj dozvoljenih primaoca u privatnoj poruci. Ako je uneta 0, dozvoljen je neograničen broj. Ovo podešavanje možete menjati za svaku grupu bez potrebe da idete na stranicu za rad sa grupama.',
));

// Post Settings
$lang = array_merge($lang, array(
	'ACP_POST_SETTINGS_EXPLAIN'			=> 'Ovde podešavate sve podrazumevane vrednosti za postove',
	'ALLOW_POST_LINKS'					=> 'Dozvoli linkove u postovima/privatnim porukama',
	'ALLOW_POST_LINKS_EXPLAIN'			=> 'Ako zabranite, URL BBKod tag i automatske/magične adrese su isključene.',
	'ALLOW_POST_FLASH'					=> 'Dozvoli korišćenje <code>[FLASH]</code> BBKod taga u postovima. ',
	'ALLOW_POST_FLASH_EXPLAIN'			=> 'Ako je zabranjen <code>[FLASH]</code> BBKod tag je onemogućen u postovima. Inače, sistem dozvola kontroliše koji korisnici mogu da koriste <code>[FLASH]</code> BBKod tag.',

	'BUMP_INTERVAL'					=> 'Bump Interval',
	'BUMP_INTERVAL_EXPLAIN'			=> 'Broj minuta, sati ili dana između poslednje teme i mogućnosti da obiđete ovu temu.',
	'CHAR_LIMIT'					=> 'Maksimalno kraktera po postu',
	'CHAR_LIMIT_EXPLAIN'			=> 'Postavite vrednost na 0 za neograničeno.',
	'DISPLAY_LAST_EDITED'			=> 'Prikaži vreme poslednje izmene',
	'DISPLAY_LAST_EDITED_EXPLAIN'	=> 'Izaberite ovu opciju ako želite prikažete vreme poslednje izmene na postovima',
	'EDIT_TIME'						=> 'Ograniči vreme pisanja',
	'EDIT_TIME_EXPLAIN'				=> 'Ograničava vreme za pisanje novog posta, unesite nulu za neograničeno',
	'FLOOD_INTERVAL'				=> 'Interval flood-ovanja',
	'FLOOD_INTERVAL_EXPLAIN'		=> 'Broj sekundi koje korisnik mora da sačeka između slanja novoih poruka. Da bi omogućili korisnicima da zaobiđu ovo, izmenite njihove dozvole.',
	'HOT_THRESHOLD'					=> 'Broj postova za status Popularno, unesite 0 da isključite popularne teme.',
	'HOT_THRESHOLD_EXPLAIN'			=> 'Broj postova po temi obaveznih za popularnu temu. Postavite na 0 da onemogućite popularne teme.',
	'MAX_POLL_OPTIONS'				=> 'Maksimalan broj opcija glasanja',
	'MAX_POST_FONT_SIZE'			=> 'Maksimalna veličina fonta po postu',
	'MAX_POST_FONT_SIZE_EXPLAIN'	=> 'Postavite na 0 za neograničenu veličinu fonta.',
	'MAX_POST_IMG_HEIGHT'			=> 'Maksimalna veličina slike po postu',
	'MAX_POST_IMG_HEIGHT_EXPLAIN'	=> 'Maksimalna veličina slike/flash fajla u postovima. Postavite na 0 za neograničenu veličinu.',
	'MAX_POST_IMG_WIDTH'			=> 'Maksimalna širina slike po postu',
	'MAX_POST_IMG_WIDTH_EXPLAIN'	=> 'Maksimalna širina slike/flash fajla u postovima. Postavite na 0 za neograničenu veličinu.',
	'MAX_POST_URLS'					=> 'Maksimalno likova po postu',
	'MAX_POST_URLS_EXPLAIN'			=> 'Postavite na 0 za neograničen broj linkova.',
	'POSTING'						=> 'Postovi',
	'POSTS_PER_PAGE'				=> 'Postova po stranici',
	'QUEUE_TRIGGER_POSTS'			=> 'Maksimalni broj postova na čekanju',
	'QUEUE_TRIGGER_POSTS_EXPLAIN'	=> 'Ako je uključeno čekanje postova, ovo je broj postova koji korisnik mora da dostigne da bi mogao da šalje postove bez potrebe da se postovi odobre. Ako je broj postova korisnika manji od ovog broja, post će automatski biti postavljen na čekanje.',
	'QUOTE_DEPTH_LIMIT'				=> 'Maksimalno ugnježdenih citata po postu',
	'QUOTE_DEPTH_LIMIT_EXPLAIN'		=> 'Postavite na 0 za neograničenu dubinu.',
	'SMILIES_LIMIT'					=> 'Maksimalno smajlija po postu',
	'SMILIES_LIMIT_EXPLAIN'			=> 'Postavite na 0 za neograničen broj smajlija.',
	'TOPICS_PER_PAGE'				=> 'Tema po stranici',
));

// Signature Settings
$lang = array_merge($lang, array(
	'ACP_SIGNATURE_SETTINGS_EXPLAIN'	=> 'Ovde definišete sva podrazumevana podešavanja za potpise',

	'MAX_SIG_FONT_SIZE'				=> 'Maksimalna veličina fonta za potpis',
	'MAX_SIG_FONT_SIZE_EXPLAIN'		=> 'Maksimalna dozvoljena veličina fonta u potpisima korisnika. Postavite na 0 za neograničeno.',
	'MAX_SIG_IMG_HEIGHT'			=> 'Maksimalna visina slike za potpis',
	'MAX_SIG_IMG_HEIGHT_EXPLAIN'	=> 'Maksimalna visina slike/flash fajla u potpisima korisnika. Postavite na 0 za neograničeno.',
	'MAX_SIG_IMG_WIDTH'				=> 'Maksimalna širina slike za potpis',
	'MAX_SIG_IMG_WIDTH_EXPLAIN'		=> 'Maksimalna širina slike/flash fajla u potpisima korisnika. Postavite na 0 za neograničeno.',
	'MAX_SIG_LENGTH'				=> 'Maksimalna dužina potpisa',
	'MAX_SIG_LENGTH_EXPLAIN'		=> 'Maksimalni broj karaktera u potpisu korisnika.',
	'MAX_SIG_SMILIES'				=> 'Maksimalno smajlija po potpisu',
	'MAX_SIG_SMILIES_EXPLAIN'		=> 'Maksimalni broj smajlija u potpisu korisnika. Postavite na 0 za neograničeo.',
	'MAX_SIG_URLS'					=> 'Maksimalno linkova u potpisu',
	'MAX_SIG_URLS_EXPLAIN'			=> 'Maksimalni broj linkova u potpisu korisnika. Postavite na 0 za neograničeno.',
));

// Registration Settings
$lang = array_merge($lang, array(
	'ACP_REGISTER_SETTINGS_EXPLAIN'		=> 'Ovde možete definisati registraciju i podešavanja vezana za profile',

	'ACC_ACTIVATION'			=> 'Aktivacija naloga',
	'ACC_ACTIVATION_EXPLAIN'	=> 'Određuje da li korisnici odmah imaju pristup boardu ili je potrebna potvrda. Takođe možete potpuno zabraniti nove registracije.',
	'ACC_ADMIN'					=> 'Admin',
	'ACC_DISABLE'				=> 'Isključi',
	'ACC_NONE'					=> 'Nijedno',
	'ACC_USER'					=> 'Korisnik',
//	'ACC_USER_ADMIN'			=> 'User + Admin',
	'ALLOW_EMAIL_REUSE'			=> 'Dozvoli ponovno korišćenje email adrese',
	'ALLOW_EMAIL_REUSE_EXPLAIN'	=> 'Različiti korisnici se mogu registrovati korišćenjem iste email adrese.',
	'COPPA'						=> 'Coppa',
	'COPPA_FAX'					=> 'COPPA broj faksa',
	'COPPA_MAIL'				=> 'COPPA poštanska adresa',
	'COPPA_MAIL_EXPLAIN'		=> 'Ovo je adresa na koju će roditelji slati COPPA registracione formulare',
	'ENABLE_COPPA'				=> 'Uključi COPPA',
	'ENABLE_COPPA_EXPLAIN'		=> 'Zahteva od korisnika da potvrde da imaju 13 ili više godina i time ispunjavaju U.S. COPPA Act. Ako je ovo isključeno COPPA grupe više neće biti prikazivane.',
	'MAX_CHARS'					=> 'Maksimalno',
	'MIN_CHARS'					=> 'Minimanlno',
	'MIN_TIME_REG'					=> 'Minimalno vreme za registraciju',
	'MIN_TIME_REG_EXPLAIN'				=> 'Registraciona forma ne može biti poslata pre nego što ovo vreme istekne.',
	'MIN_TIME_TERMS'				=> 'Minimalno vreme ya prihvatanje uslova',
	'MIN_TIME_TERMS_EXPLAIN'			=> 'Stranica sa uslovima korišćenja ne može da se preskoči pre nego što ovo vreme istekne.',
	'NO_AUTH_PLUGIN'			=> 'Nije pronađen odgovarajući dodatak za autorizaciju.',
	'PASSWORD_LENGTH'			=> 'Dužina šifre',
	'PASSWORD_LENGTH_EXPLAIN'	=> 'Minimalni i maksimalni broj kataktera u šifama.',
	'REG_LIMIT'					=> 'Broj pokušaja za registraciju',
	'REG_LIMIT_EXPLAIN'			=> 'Broj pokušaja koji korisnik može da napravi pri unosi koda za potvrdu pre zaključavanje sesije.',
	'USERNAME_ALPHA_ONLY'		=> 'Samo alfanumerički',
	'USERNAME_ALPHA_SPACERS'	=> 'Alfanumerički i razdvajači',
	'USERNAME_ASCII'			=> 'ASCII (ne internacionalni unikod)',
	'USERNAME_LETTER_NUM'		=> 'Bilo koje slovo i broj',
	'USERNAME_LETTER_NUM_SPACERS'	=> 'Bilo koje slovo, broj, i razmak',
	'USERNAME_CHARS'			=> 'Ograniči broj karaktera za korisničko ime',
	'USERNAME_CHARS_ANY'		=> 'Bilo koji karakter',
	'USERNAME_CHARS_EXPLAIN'	=> 'Ograničava tip karaktera koji može biti korišćen u korisničkim imenima, razdvajači su: space, -, +, _, [ i ]',
	'USERNAME_LENGTH'			=> 'Dužina korisničkog imena',
	'USERNAME_LENGTH_EXPLAIN'	=> 'Minimalni i maksimalni broj karaktera u korisničkim imenima.',
));

// Visual Confirmation Settings
$lang = array_merge($lang, array(
	'ACP_VC_SETTINGS_EXPLAIN'		=> 'Ovde definišete podrazumevane vrednosti vizuelnih potvrda i captcha podešavanja.',

	'CAPTCHA_GD'					=> 'GD CAPTCHA',
	'CAPTCHA_GD_FOREGROUND_NOISE'				=> 'GD CAPTCHA nivo šuma',
	'CAPTCHA_GD_EXPLAIN'			=> 'Koristite GD da bi dobili mnogo napredniji CAPTCHA',
	'CAPTCHA_GD_FOREGROUND_NOISE_EXPLAIN'		=> 'Koristite nivo šuma da bi osnovni GD CAPTCHA učinili još težim',
	'CAPTCHA_GD_X_GRID'						=> 'GD CAPTCHA nivo šuma x-ose',
	'CAPTCHA_GD_X_GRID_EXPLAIN'				=> 'Unesite manju vrednost da bi CAPTCHA bila teža. 0 će onemogućiti nivo šuma x-ose .',
	'CAPTCHA_GD_Y_GRID'						=> 'GD CAPTCHA nivo šuma y-ose',
	'CAPTCHA_GD_Y_GRID_EXPLAIN'				=> 'Unesite manju vrednost da bi CAPTCHA bila teža. 0 će onemogućiti nivo šuma y-ose.',
	
	'CAPTCHA_PREVIEW_MSG'					=> 'Vaše izmene podešavanja vizuelne potvrde nisu sačuvane. Ovo je samo pregled kako će izgledati.',
	'CAPTCHA_PREVIEW_EXPLAIN'				=> 'Prikaz kako će CAPTCHA izgledati sa trenutnim podešavanjima. Koristite dugme pregled da bi osvežili prikaz. Znajte da su slova i brjevi nasumični i da će se razlikovati od pregleda do pregleda.',
	'VISUAL_CONFIRM_POST'			=> 'Omogući vizuelnu potvrdu za postove gosta',
	'VISUAL_CONFIRM_POST_EXPLAIN'	=> 'Zahteva od anonimnih korisnika da unesu nasumično izabran kod koji se mora poklopiti sa slikom da bi se sprečilo masovno slanje postova.',
	'VISUAL_CONFIRM_REG'			=> 'Omogući vizuelnu potvrdu prilikom registracije',
	'VISUAL_CONFIRM_REG_EXPLAIN'	=> 'Zahteva od anonimnih korisnika da unesu nasumično izabran kod koji se mora poklopiti sa slikom da bi se sprečilo masovno registrovanje.',
));

// Cookie Settings
$lang = array_merge($lang, array(
	'ACP_COOKIE_SETTINGS_EXPLAIN'		=> 'Ovde definišete detalje koji će biti korišćeni za slanje kolačića korisnicima. U većini slučajeva podrazumevane vrednosti za kolačiće će biti dovoljne. Ako imate potrebu da menjate ove vrednosti, budite pažljivi jer pogrešne vrednosti mogu sprečiti korisnike da se prijave.',

	'COOKIE_DOMAIN'				=> 'Domen kolačića',
	'COOKIE_NAME'				=> 'Ima kolačića',
	'COOKIE_PATH'				=> 'Putanja kolačića',
	'COOKIE_SECURE'				=> 'Bezbedni kolačići',
	'COOKIE_SECURE_EXPLAIN'		=> 'Ako vaš server pokreće SSL uključite ovu opciju, u suprotnom je ostavite isključenu. Podešavanjem na uključeno a vaš server nema podršku za SSL dovešće do grešaka prilikom redirektovanja.',
	'ONLINE_LENGTH'				=> 'Ko je OnLine vreme',
	'ONLINE_LENGTH_EXPLAIN'		=> 'Vreme u minutima posle kojeg neaktivni korisnici neće biti prikazivani na Ko je OnLine listi, niža vrednost znači manje procesiranja.',
	'SESSION_LENGTH'			=> 'Dužina sesije',
	'SESSION_LENGTH_EXPLAIN'	=> 'Sesija će isteći posle ovoliko vremena, u sekundama.',
));

// Load Settings
$lang = array_merge($lang, array(
	'ACP_LOAD_SETTINGS_EXPLAIN'	=> 'Ovde možete uključiti i isključiti neke od funkcija boarda da bi smanjili količinu obaveznog procesiranja. Na većini servera nema potrebe da isključujete bilo koju od funkcija. Ipak, na nekim sistemima ili u okruženju deljenog hostinga može biti korisno da isključite opcije koje vam stvarno nisu potrebne. Možete takođe definisati vrednosti za opterećenje sistema i aktivne sesije posle kojih će board biti nedostupan.',

	'CUSTOM_PROFILE_FIELDS'			=> 'Proizvoljna polja profila',
	'LIMIT_LOAD'					=> 'Ograniči opterećenje sistema',
	'LIMIT_LOAD_EXPLAIN'			=> 'Ako u toku jednog minuta opterećenje sistema premaši ovu vrednost board će biti nedostupan, 1.0 jednako je ~100% iskorišćenja jednog procesora. Ova opcija radi samo na UNIX baziranim sistemima.',
	'LIMIT_SESSIONS'				=> 'Ograniči sesije',
	'LIMIT_SESSIONS_EXPLAIN'		=> 'Ako broj sesija premaši ovu vrednost za vreme od jednog minuta board že biti nedostupan. Unesite 0 za neograničen broj sesija.',
	'LOAD_CPF_MEMBERLIST'			=> 'Prikaži proizvoljna polja profila u listi članova',
	'LOAD_CPF_VIEWPROFILE'			=> 'Prikaži proizvoljna polja profila u profilima korisnika',
	'LOAD_CPF_VIEWTOPIC'			=> 'Prikaži proizvoljna polja profila u temama',
	'LOAD_USER_ACTIVITY'			=> 'Prikaži aktivnost korisnika',
	'LOAD_USER_ACTIVITY_EXPLAIN'	=> 'Prikaži aktivnu temu/forum u korisničkom profilu i korisničkom kontrolnom panelu. Preporučljivo je da isključite ovu opciju na boardima sa više od milion postova.',
	'LDAP_USER_FILTER'		=> 'LDAP filter korisnika',
	'LDAP_USER_FILTER_EXPLAIN'	=> 'Opciono možete ograničiti objekte pretrage dodatnim filterima. Na primer <samp>objectClass=posixGroup</samp> će rezultovati korišćenjem <samp>(&(uid=$username)(objectClass=posixGroup))</samp>',
	'RECOMPILE_TEMPLATES'			=> 'Osveži stare stilove',
	'RECOMPILE_TEMPLATES_EXPLAIN'	=> 'Proverava ako postoje nove verzije stilova i postavlja nove.',
	'RECOMPILE_STYLES'				=> 'Osveži zaostale komponente stilova',
	'RECOMPILE_STYLES_EXPLAIN'		=> 'Proverava ako postoje nove verzije komponenti stilova u fajl sistemu i osvežava ih.',
	'YES_ANON_READ_MARKING'			=> 'Omogući markiranje tema za goste',
	'YES_ANON_READ_MARKING_EXPLAIN'	=> 'Čuva pročitan/nepročitan status za goste. Ako je ova opcija iskljućena postovi su uvek obeležani kao pročitani za goste.',
	'YES_BIRTHDAYS'					=> 'Omogući listu rođendana',
	'YES_BIRTHDAYS_EXPLAIN'			=> 'Ako je onemogućeno lista rođendana se neće prikazivati. Da bi ovo podešavanje radilo, morate omogućiti rođendane.',
	'YES_JUMPBOX'					=> 'Omogući prikaz Skoči na',
	'YES_MODERATORS'				=> 'Omogući prikaz Urednika',
	'YES_ONLINE'					=> 'Omogući prikaz Ko je OnLine',
	'YES_ONLINE_EXPLAIN'			=> 'Prikazuje OnLine korisnike na početnoj stranici, na forumu i stranicama sa temama.',
	'YES_ONLINE_GUESTS'				=> 'Omoguži Ko je OnLine listu gostiju',
	'YES_ONLINE_GUESTS_EXPLAIN'		=> 'Prikazuje listu gostiju koji su trenutno OnLine.',
	'YES_ONLINE_TRACK'				=> 'Omogući prikaz OnLine',
	'YES_ONLINE_TRACK_EXPLAIN'		=> 'Prikazuje OnLine informaciju za korisnika u profilima i pregledima tema.',
	'YES_POST_MARKING'				=> 'Omogući tačkaste teme',
	'YES_POST_MARKING_EXPLAIN'		=> 'Označava teme u kojima je korisnik pisao.',
	'YES_READ_MARKING'				=> 'Omogući server-side označavanje tema',
	'YES_READ_MARKING_EXPLAIN'		=> 'Smešta pročitan/nepročitan status u bazu podataka na serveru umesto u kolačić.',
));

// Auth settings
$lang = array_merge($lang, array(
	'ACP_AUTH_SETTINGS_EXPLAIN'	=> 'phpBB podržava dodatke za autorizaciju, ili module. Oni omogućavaju da utvrdite kako su korisnici autorizovani kada se prijave na board. Standardno, tri dodatka su obezbeđena; DB, LDAP i Apache. Ne zahtevaju svi metodi dodatne informacije pa zato samo popunite polja koja su potrebna za izabrani metod.',

	'AUTH_METHOD'				=> 'Izaberite metod autorizacije',

	'APACHE_SETUP_BEFORE_USE'	=> 'Trebate da podesite apache autorizaciju pre nego podesite phpBB da koristi ovaj metod. Znajte da korisničko ime koje koristite za apache autorizaciju mora biti isto kao i vaše phpBB korisničko ime.',

	'LDAP_DN'					=> 'LDAP baza <var>dn</var>',
	'LDAP_DN_EXPLAIN'			=> 'Ovo je Otmeno Ime, koje određuje informaciju o korisniku, na primer <samp>o=Moja kompanija,c=YU</samp>',
	'LDAP_EMAIL'				=> 'LDAP email atribut',
	'LDAP_EMAIL_EXPLAIN'		=> 'Podesite ovo kao ime korisnikovog početno email atributa (ako postoji) da bi automatski podesili email adresu za nove korisnike. Ostavljajući ovo polje prazno dobićete praznu email adresu za korisnike koji se prijavljuju prvi put.',
	'LDAP_INCORRECT_USER_PASSWORD'	=> 'Povezivanje sa LDAP serverom nije uspešno sa zadatim korisnikom/šifrom.',
	'LDAP_NO_EMAIL'				=> 'Izabrani email atribut ne postoji.',
	'LDAP_NO_IDENTITY'			=> 'Ne mogu da pronađem identitet prijave za %s',
	'LDAP_PASSWORD'					=> 'LDAP šifra',
	'LDAP_PASSWORD_EXPLAIN'			=> 'Ostavite prazno ako želite anonimni pristup. U suprotnom, popunite šifru za korisnika iznad. <strong>WARNING:</strong> This password will be stored as plain text in the database visible to everybody who can access your database.',
	'LDAP_PORT'					=> 'LDAP port servera',
	'LDAP_PORT_EXPLAIN'			=> 'Opciono možete uneti port koji će se koristiti za konekciju na LDAP server umesto podrazumevanog porta 389.',
	'LDAP_SERVER'				=> 'LDAP ime servera',
	'LDAP_SERVER_EXPLAIN'		=> 'Ako koristite LDAP ovo je ime ili IP adresa servera.',
	'LDAP_UID'					=> 'LDAP <var>uid</var>',
	'LDAP_UID_EXPLAIN'			=> 'Ovo je ključ pod kojim se traži zadati identitet prijave, na primer <var>uid</var>, <var>sn</var>, itd.',
	'LDAP_USER'						=> 'LDAP korisnik',
	'LDAP_USER_EXPLAIN'				=> 'Ostavite prazno ako želite anonimni pristup. Ako je polje popunjeno phpBB će se konektovati na LDAP server kao izabrani korisnik.',
));

// Server Settings
$lang = array_merge($lang, array(
	'ACP_SERVER_SETTINGS_EXPLAIN'	=> 'Ovde određujete podešavanja o serveru i domenu. Unesite ispravne podatke, jer će greške dovesti do email-ova koji sadrže pogrešne podatke. Kada unosite domen zapamtite da unesete http:// ili drugi protokol. Port menjajte samo ako znate da vaš server koristi drugi drugačiji, port 80 je u većini slučajeva.',

	'ENABLE_GZIP'				=> 'Omogući GZip kompresiju',
	'ENABLE_GZIP_EXPLAIN'		=> 'Generisani sadržaj će biti kompresovan za slanje korisniku. Ovo može smanjiti mrežni saobraćaj ali će povećati iskorišćenost procesora i na serveru i kod klijenta.',
	'FORCE_SERVER_VARS'			=> 'Forsiraj serverska podešavanja za URL',
	'FORCE_SERVER_VARS_EXPLAIN'	=> 'Ako je postavljeno na Da, srverska podešavanja definisana ovde će biti korišćena umesto automatski utvrđene vrednosti',
	'ICONS_PATH'				=> 'Putanja za smeštanje ikonica',
	'ICONS_PATH_EXPLAIN'		=> 'Putanja isod phpBB root direktorijuma, na primer <samp>images/icons</samp>',
	'PATH_SETTINGS'				=> 'Podešavanja putanje',
	'RANKS_PATH'				=> 'Putanja za smeštanje sličica za rang',
	'RANKS_PATH_EXPLAIN'		=> 'Putanja ispod phpBB root direktorijuma, na primer <samp>images/ranks</samp>',
	'SEND_ENCODING'				=> 'Pošalji enkoding',
	'SEND_ENCODING_EXPLAIN'		=> 'Šalje enkoding phpBB putem HTTP-a i zaobilazi konfiguraciju servera',
	'SERVER_NAME'				=> 'Ime domena',
	'SERVER_NAME_EXPLAIN'		=> 'Ime domena sa koga se pokreće board (na primer: <samp>www.foo.bar</samp>)',
	'SERVER_PORT'				=> 'Port servera',
	'SERVER_PORT_EXPLAIN'		=> 'Port na kome radi server, obično 80, promenite samo ako je drugačiji',
	'SERVER_PROTOCOL'			=> 'Protokol servera',
	'SERVER_PROTOCOL_EXPLAIN'	=> 'Ovo se koristi kao protokol servera ako su ove vrednosti forsirane. Ako ostavite prazno ili ne forsirate, protokol je određen putem kolačića (<samp>http://</samp> ili <samp>https://</samp>)',
	'SERVER_URL_SETTINGS'		=> 'Podešavanja URL servera',
	'SMILIES_PATH'				=> 'Putanja za smeštanje smajlija',
	'SMILIES_PATH_EXPLAIN'		=> 'Putanja ispod phpBB root direktorijuma, na primer <samp>images/smilies</samp>',
	'UPLOAD_ICONS_PATH'			=> 'Putanja za smeštanje proširene grupe ikonica',
	'UPLOAD_ICONS_PATH_EXPLAIN'	=> 'Putanja ispod phpBB root direktorijuma, na primer <samp>images/upload_icons</samp>',
));

// Security Settings
$lang = array_merge($lang, array(
	'ACP_SECURITY_SETTINGS_EXPLAIN'		=> 'Ovde definišete podešavanje sesioja i prijava',

	'ALL'							=> 'Sve',
	'ALLOW_AUTOLOGIN'				=> 'Dozvoli trajne prijave', 
	'ALLOW_AUTOLOGIN_EXPLAIN'		=> 'Određuje da li korisnici mogu da se automatski prijave kada posete board.', 
	'AUTOLOGIN_LENGTH'				=> 'Dužina trajanja trajne prijave (u danima)', 
	'AUTOLOGIN_LENGTH_EXPLAIN'		=> 'Broj dana posle kojeg su trajne prijave uklonjene ili unesite 0 za isključivanje ove opcije.', 
	'BROWSER_VALID'					=> 'Provera browsera',
	'BROWSER_VALID_EXPLAIN'			=> 'Omogućava proveru browsera za svku sesiju zbog pojačanja sigurnosti.',
	'CHECK_DNSBL'					=> 'Uporedi IP sa DNS crnom listom',
	'CHECK_DNSBL_EXPLAIN'			=> 'Ako je ova opcija uključena IP se proverava sa sledećim DNSBL servisima pri registraciji i slanju postova: <a href="http://spamcop.net">spamcop.net</a>, <a href="http://dsbl.org">dsbl.org</a> i <a href="http://spamhaus.org">spamhaus.org</a>. Ova pretraga može oduzeti malo vremena, u zavisnosti od konfiguracije servera. Ako je usporenje veliko ili imate previše lažnih pozitivnih odgovora, preporučujemo da isključite ovu proveru.',
	'CLASS_B'						=> 'A.B',
	'CLASS_C'						=> 'A.B.C',
	'EMAIL_CHECK_MX'				=> 'Proveri email domen za ispravan MX zapis',
	'EMAIL_CHECK_MX_EXPLAIN'		=> 'Ako je ova opcija uključena, emil domen unet pri registraciji i izmeni profila će biti proveren za ispravnim MX zapisom.',
	'FORCE_PASS_CHANGE'				=> 'Forsiraj promenu šifre',
	'FORCE_PASS_CHANGE_EXPLAIN'		=> 'Zahteva od korisnika da promene njihovu šifru posle određenog broja dana ili 0 da isključite ovu opciju.',
	'FORWARDED_FOR_VALID'			=> 'Provereno <var>X_FORWARDED_FOR</var> zaglavlje',
	'FORWARDED_FOR_VALID_EXPLAIN'	=> 'Sesije će biti nastavljene samo ako je poslato <var>X_FORWARDED_FOR</var> zaglavlje jednako onim poslatim sa prethodnim zahtevom. Zabrane će biti proverene sa IP adresama u <var>X_FORWARDED_FOR</var>.',
	'IP_VALID'						=> 'Provera IP sesije',
	'IP_VALID_EXPLAIN'				=> 'Utvrđuje koliko korisničkih IP adresa se koristi da se proveri sesija; <samp>Sve</samp> upoređuje kompletne adrese, <samp>A.B.C</samp> prve x.x.x, <samp>A.B</samp> preve x.x, <samp>Nijedno</samp> isključuje proveru.',
	'MAX_LOGIN_ATTEMPTS'			=> 'Maksimalan broj pokušaja za prijavu',
	'MAX_LOGIN_ATTEMPTS_EXPLAIN'	=> 'Posle ovog broja pogrešnih prijava korisnik treba da dodatno potvrdi svoj identitet vizuelno (vizuelna potvrda)',
	'NO_IP_VALIDATION'				=> 'Nijedno',
	'PASSWORD_TYPE'					=> 'Kompleksnost šifre',
	'PASSWORD_TYPE_EXPLAIN'			=> 'Utvrđuje koliko kompleksna šifra treba da bude kada se definiše ili menja, kasnije opcije uključuju i prethodne.',
	'PASS_TYPE_ALPHA'				=> 'Mora da sadrži alfanumeričke',
	'PASS_TYPE_ANY'					=> 'Bez zahteva',
	'PASS_TYPE_CASE'				=> 'Mora sadržati mala i velika slova',
	'PASS_TYPE_SYMBOL'				=> 'Mora sadržati simbole',
	'TPL_ALLOW_PHP'					=> 'Dozvoli php u templejtima',
	'TPL_ALLOW_PHP_EXPLAIN'			=> 'Ako je ova opcija uključena, <code>PHP</code> i <code>INCLUDEPHP</code> iskazi će biti prepoznati i prosleđeni u templejtima.',
));

// Email Settings
$lang = array_merge($lang, array(
	'ACP_EMAIL_SETTINGS_EXPLAIN'	=> 'Ova informacija se koristi kada board šalje mejlove korisnicima. Pobrinite se da je email adresa koju odredite ispravna, svaka neisporučena poruka će biti poslata na ovu adresu. Ako vaš hosting ne podržava prirodni (baziran na PHP-u) email servis, možete umesto slati poruke direktno koristeći SMTP. Ovo zahteva adrese odgovarajužih servera (ako je potrebno, raspitajte se kod provajdera), nemojte unositi bilo koje ime ovde! Ako server zahteva autorizaciju (i samo ako zahteva) unesite potrebno korisničko ime i šifru. Znajte da je ponuđena samo osnovna autorizacija, različite implementacije autorizacije trenutno nisu podržane.',

	'ADMIN_EMAIL'					=> 'Povratna email adresa',
	'ADMIN_EMAIL_EXPLAIN'			=> 'Ova adresa će biti korišćena kao povratna adresa za sve emailove.',
	'BOARD_EMAIL_FORM'				=> 'Korisnici šalju email putem boarda',
	'BOARD_EMAIL_FORM_EXPLAIN'		=> 'Umesto prikazivanja email adresa korisnika, korisnici su u mogućnosti da šalju email putem boarda.',
	'BOARD_HIDE_EMAILS'				=> 'Sakrij email adrese',
	'BOARD_HIDE_EMAILS_EXPLAIN'		=> 'Ova funkcija čuva email adrese u potpunoj privatnosti.',
	'CONTACT_EMAIL'					=> 'Email adresa za kontakt',
	'CONTACT_EMAIL_EXPLAIN'			=> 'Ova adresa će biti korišćena uvek kada je specifičan kontakt neophodan, na primer spam, nepravilan prikaz, neželjeni rezultati i slično.',
	'EMAIL_FUNCTION_NAME'			=> 'Nayiv email funkcije',
	'EMAIL_FUNCTION_NAME_EXPLAIN'	=> 'Email funkcija koja se koristi za slanje pošte kroz PHP.',
	'EMAIL_PACKAGE_SIZE'			=> 'Veličina email paketa',
	'EMAIL_PACKAGE_SIZE_EXPLAIN'	=> 'Ovo je broj emaila poslatim u jednom paketu.',
	'EMAIL_SIG'						=> 'Email potpis',
	'EMAIL_SIG_EXPLAIN'				=> 'Ovaj tekst že biti prikačen za sve email-ove koje board pošalje.',
	'ENABLE_EMAIL'					=> 'Omogući emailove putem boarda',
	'ENABLE_EMAIL_EXPLAIN'			=> 'Ako je ova opcija isključena, nijedan email neće biti poslat sa boarda.',
	'SMTP_AUTH_METHOD'				=> 'Metod autorizacije za SMTP',
	'SMTP_AUTH_METHOD_EXPLAIN'		=> 'Koristi se samo ako su korisničko ime/šifra podešeni, pitajte vašeg provajdera ako niste sigurni koji metod da koristite.',
	'SMTP_CRAM_MD5'					=> 'CRAM-MD5',
	'SMTP_DIGEST_MD5'				=> 'DIGEST-MD5',
	'SMTP_LOGIN'					=> 'LOGIN',
	'SMTP_PASSWORD'					=> 'SMTP šifra',
	'SMTP_PASSWORD_EXPLAIN'			=> 'Šifru unesite samo ako je vaš SMTP server zahtevar.',
	'SMTP_PLAIN'					=> 'PLAIN',
	'SMTP_POP_BEFORE_SMTP'			=> 'POP-BEFORE-SMTP',
	'SMTP_PORT'						=> 'SMTP port',
	'SMTP_PORT_EXPLAIN'				=> 'Promenite samo u slučaju da vaš SMTP server koristi drugačiji port.',
	'SMTP_SERVER'					=> 'SMTP adresa',
	'SMTP_SETTINGS'					=> 'SMTP podešavanja',
	'SMTP_USERNAME'					=> 'SMTP korisničko ime',
	'SMTP_USERNAME_EXPLAIN'			=> 'Korisničko ime unesite samo ako ga vaš SMTP  server zahteva.',
	'USE_SMTP'						=> 'Koristi SMTP server za email',
	'USE_SMTP_EXPLAIN'				=> 'Izaberite “Da” ako želite da šaljete poštu putem SMTP servera, umesto lokalne mail funkcije.',
));

// Jabber settings
$lang = array_merge($lang, array(
	'ACP_JABBER_SETTINGS_EXPLAIN'	=> 'Ovde možete omogućiti i kontrolisati korišćenje Jabber-a za instant poruke i obaveštenja boarda. Jabber je opensource protokol i samim tim slobodan za korišženje. Neki Jabber serveri uključuju transporte koji omogućavaju da kontaktirate korisnike na drugim mrežama. Ne nude svi serveri sve transporte i promene u protokolima mogu sprečiti transporte da rade ispravno. Znajte da je potrebno nekoliko sekundi da se ažuriraju detalji Jabber naloga, ne prekidajte skriptu dok se ne završi!',

	'ERR_JAB_AUTH'			=> 'Nemoguća autorizacija na Jabber server.',
	'ERR_JAB_CONNECT'		=> 'Nemoguća konekcija na Jabber server.',
	'ERR_JAB_PASSCHG'		=> 'Ne mogu da promenim šifru.',
	'ERR_JAB_PASSFAIL'		=> 'Greška pri promeni šifre, %s.',
	'ERR_JAB_REGISTER'		=> 'Došlo je do greške prilikom registracije naloga, %s.',
	'ERR_JAB_USERNAME'		=> 'Izabrano korisničko ime već postoji, izaberite neko drugo.',

	'JAB_CHANGED'				=> 'Jabber nalog je uspešno promenjen.',
	'JAB_ENABLE'				=> 'Omogući Jabber',
	'JAB_ENABLE_EXPLAIN'		=> 'Omogućuje korišćenje jabber poruka i obaveštenja',
	'JAB_PACKAGE_SIZE'			=> 'Veličina paketa Jabber-a',
	'JAB_PACKAGE_SIZE_EXPLAIN'	=> 'Ovo je broj poslatih poruka u jednom paketu. Ako je podešeno na 0 poruka je odmah poslata i neće biti obeležena za kasnije slanje.',
	'JAB_PASSWORD'				=> 'Jabber šifra',
	'JAB_PASS_CHANGED'			=> 'Jabber šifra je uspešno promenjena.',
	'JAB_PORT'					=> 'Jabber port',
	'JAB_PORT_EXPLAIN'			=> 'Ostavite prazno osim ako port nije 5222',
	'JAB_REGISTERED'			=> 'Novi nalog je uspešno registrovan.',
	'JAB_RESOURCE'				=> 'Jabber resursi',
	'JAB_RESOURCE_EXPLAIN'		=> 'Resurs locira određenu konekciju, na primer board, home, itd.',
	'JAB_SERVER'				=> 'Jabber server',
	'JAB_SERVER_EXPLAIN'		=> 'Pogledajte %sjabber.org%s za listu servera',
	'JAB_SETTINGS_CHANGED'		=> 'Jabber podešavanja su uspešno promenjena.',
	'JAB_USE_SSL'				=> 'Koristi SSL za konekciju',
	'JAB_USE_SSL_EXPLAIN'		=> 'Ako je omogućena, biće pokušano da se ostvari bezbedna konekcija. Jabber port će biti izmenjen na 5223 ako je izabrani port 5222.',
	'JAB_USERNAME'				=> 'Jabber korisničko ime',
	'JAB_USERNAME_EXPLAIN'		=> 'Ako korisnik nije registrovan, biće kreiran ako je moguće.',
));

?>