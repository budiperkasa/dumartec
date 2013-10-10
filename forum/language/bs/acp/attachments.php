<?php
/** 
*
* acp_attachments [Bosnian]
*
* @package language
* @version $Id: $
* @copyright phpBB (c) 2000-2008 phpBB Group 
* @author Bosnian language pack [Bosanski prevod] (c) 2003-2008 Šehić Nijaz
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
'ACP_ATTACHMENT_SETTINGS_EXPLAIN'=> 'Ovdje možeš konfigurisati glavne postavke attachmenta te pripadajuće im posebne kategorie.',
'ACP_EXTENSION_GROUPS_EXPLAIN'=> 'Ovdje možeš dodavati/brisati/uređivati grupe ekstenzija.<br />Možeš im dodjeljivati posebne kategorije, uređivati mehanizme preuzimanja, definirati ikone uploadiranja [prikazane su ispred attachmenta koji pripadaju grupi] i dr.',
'ACP_MANAGE_EXTENSIONS_EXPLAIN'=> 'Ovdje možeš konfigurisati dopuštene ekstenzije.<br />Ekstenzije možeš aktivirati u djelu <em>Grupe ekstenzija</em>.<br />Preporučujemo ne odobravanje skriptujućih ekstenzija [kao npr.,  <code>php</code>, <code>php3</code>, <code>php4</code>, <code>phtml</code>, <code>pl</code>, <code>cgi</code>, <code>py</code>, <code>rb</code>, <code>asp</code>, <code>aspx</code> itd.].',
'ACP_ORPHAN_ATTACHMENTS_EXPLAIN'=> 'Ovdje možeš vidjeti bezpostne attachmente koji obično nastaju kada korisnici dodaju datoteke ali ne pošalju file.<br />Datoteke možeš izbrisati ili ih dodati postojećem postu [za što moraš znati ispravan ID posta].',
'ADD_EXTENSION'=> 'Dodaj ekstenziju',
'ADD_EXTENSION_GROUP'=> 'Dodaj grupu ekstenzija',
'ADMIN_UPLOAD_ERROR'=> 'Došlo je do greške prilikom pokušaja dodavanja datoteke: “%s”.',
'ALLOWED_FORUMS'=> 'Dopušteni forumi',
'ALLOWED_FORUMS_EXPLAIN'=> 'Dopušteno dodavanje dodijeljenih ekstenzija na odabranom/im [ili svima ukoliko su svi odabrani] forumu/ima.',
'ALLOWED_IN_PM_POST'=> 'Dopušteno',
'ALLOW_ATTACHMENTS'=> 'Dopusti attachmente',
'ALLOW_ALL_FORUMS'=> 'Svi forumi',
'ALLOW_IN_PM'=> 'Dopušteno u privatnim porukama',
'ALLOW_PM_ATTACHMENTS'=> 'Dopusti attachmente u privatnim porukama',
'ALLOW_SELECTED_FORUMS'=> 'Samo forumi označeni ispod',
'ASSIGNED_EXTENSIONS'=> 'Dodijeljene ekstenzije',
'ASSIGNED_GROUP'=> 'Dodijeljena grupa ekstenzija',
'ATTACH_EXTENSIONS_URL'=> 'Ekstenzije',
'ATTACH_EXT_GROUPS_URL'=> 'Grupe ekstenzija',
'ATTACH_ID'=> 'ID',
'ATTACH_MAX_FILESIZE'=> 'Maksimalna veličina datoteke',
'ATTACH_MAX_FILESIZE_EXPLAIN'=> 'Maksimalna veličina svake datoteke [0=neograničeno].',
'ATTACH_MAX_PM_FILESIZE'=> 'Maksimalna veličina prostora',
'ATTACH_MAX_PM_FILESIZE_EXPLAIN'=> 'Maksimalna veličina dostupnog prostora [po korisniku] za attachmente u privatnim porukama [0=neograničeno].',
'ATTACH_ORPHAN_URL'=> 'Bezpostni attachmenti',
'ATTACH_POST_ID'=> 'ID posta',
'ATTACH_QUOTA'=> 'Maksimalna veličina attachmenta',
'ATTACH_QUOTA_EXPLAIN'=> 'Maksimalna veličina dostupnog prostora [za cijeli forum] za attachmente [0=neograničeno].',
'ATTACH_TO_POST'=> 'Dodaj datoteku postu',

'CAT_FLASH_FILES'=> 'Flash datoteke',
'CAT_IMAGES'=> 'Slike',
'CAT_QUICKTIME_FILES'=> 'Quicktime Media datoteke',
'CAT_RM_FILES'=> 'Real Media datoteke',
'CAT_WM_FILES'=> 'Windows Media datoteke',
'CREATE_GROUP'=> 'Kreiraj novu kategoriju',
'CREATE_THUMBNAIL'=> 'Kreiraj minijature',
'CREATE_THUMBNAIL_EXPLAIN'=> 'Kreira minijature u svim mogućim situacijama.',

'DEFINE_ALLOWED_IPS'=> 'Definiranje dopuštenih IP adresa/imena host(ov)a',
'DEFINE_DISALLOWED_IPS'=> 'Definiranje nedopuštenih IP adresa/imena host(ov)a',
'DOWNLOAD_ADD_IPS_EXPLAIN'=> 'Za unošenje više različitih IP adresa/imena host(ov)a svaku/o unesi u novi red.<br />Za određivanje raspona IP adresa, početak i kraj odvoji crticom (-). Možeš koristiti * kao zamjenski znak.',
'DOWNLOAD_REMOVE_IPS_EXPLAIN'=> 'Možeš izbrisati (ili od-izuzeti) više IP adresa odjednom koristeći odgovarajuću kombinaciju miša+tastature&browsera.<br />Izuzete IP adrese bit će označene.',
'DISPLAY_INLINED'=> 'Prikazuj slike u postu',
'DISPLAY_INLINED_EXPLAIN'=> 'Ukoliko je postavljeno na “Ne”, attachmenti sa slikama bit će prikazani kao linkovi.',
'DISPLAY_ORDER'=> 'Prikaz attachmenta',
'DISPLAY_ORDER_EXPLAIN'=> 'Redanje je ovisno o vremenu postanja.',

'EDIT_EXTENSION_GROUP'=> 'Uređivanje grupe ekstenzija',
'EXCLUDE_ENTERED_IP'=> 'Omogući ukoliko želiš izuzeti unesenu IP adresu hosta.',
'EXCLUDE_FROM_ALLOWED_IP'=> 'Izuzmi IP adresu iz dopuštenih IP adresa hostova',
'EXCLUDE_FROM_DISALLOWED_IP'=> 'Izuzmi IP adresu iz nedopuštenih IP adresa hostova',
'EXTENSIONS_UPDATED'=> 'Ekstenzija/e je/su ažurirana/e.',
'EXTENSION_EXIST'=> 'Ekstenzija %s već postoji.',
'EXTENSION_GROUP'=> 'Grupa ekstenzija',
'EXTENSION_GROUPS'=> 'Grupe ekstenzija',
'EXTENSION_GROUP_DELETED'=> 'Grupa ekstenzija je izbrisana.',
'EXTENSION_GROUP_EXIST'=> 'Grupa ekstenzija %s već postoji.',

'GO_TO_EXTENSIONS'=> 'Uređivanje ekstenzija',
'GROUP_NAME'=> 'Ime grupe',

'IMAGE_LINK_SIZE'=> 'Slika attachmenta kao link',
'IMAGE_LINK_SIZE_EXPLAIN'=> 'Ukoliko je veličina slike attachmenta veća od zadanih dimenzija, umjesto nje bit će prikazan (tekstualni) link.<br />Za onemogućavanje ove opcije, vrijednosti postavi na 0px x 0px.',
'IMAGICK_PATH'=> 'Imagemagick putanja',
'IMAGICK_PATH_EXPLAIN'=> 'Puna putanja do imagemagick konverzijske aplikacije, npr. <samp>/usr/bin/</samp>.',

'MAX_ATTACHMENTS'=> 'Maksimalno attachmenta po postu',
'MAX_ATTACHMENTS_PM'=> 'Maksimalno attachmenta po poruci',
'MAX_EXTGROUP_FILESIZE'=> 'Maksimalna veličina datoteke',
'MAX_IMAGE_SIZE'=> 'Maksimalne dimenzije slike',
'MAX_IMAGE_SIZE_EXPLAIN'=> 'Maksimalna veličina slika attachmenta.<br />Za onemogućavanje provjere dimenzija, vrijednosti postavi na 0px x 0px.',
'MAX_THUMB_WIDTH'=> 'Maksimalna širina minijature u pikselima',
'MAX_THUMB_WIDTH_EXPLAIN'=> 'Maksimalna širina generiranih minijatura ograničena je ovdje postavljenom vrijednošću.',
'MIN_THUMB_FILESIZE'=> 'Minimalna veličina datoteke minijature',
'MIN_THUMB_FILESIZE_EXPLAIN'=> 'Minijature neće biti kreirane za slike čija je veličina manja od postavljene.',
'MODE_INLINE'=> 'U postu',
'MODE_PHYSICAL'=> 'Za preuzimanje',

'NOT_ALLOWED_IN_PM'=> 'Dopušteno samo u postovima',
'NOT_ALLOWED_IN_PM_POST'=> 'Nedopušteno',
'NOT_ASSIGNED'=> 'Nedopušteno',
'NO_EXT_GROUP'=> '/',
'NO_EXT_GROUP_NAME'=> 'Moraš unijeti ime grupe.',
'NO_EXT_GROUP_SPECIFIED'=> 'Nije određena grupa ekstenzija.',
'NO_FILE_CAT'=> '/',
'NO_IMAGE'=> 'Bez slike',
'NO_THUMBNAIL_SUPPORT'=> 'Podrška za minijature je onemogućena.<br />Za ispravno funkcioniranje potrebni su ili dostupnost GD ekstenzije ili instaliran imagemagick. Nijedno nije pronađeno.',
'NO_UPLOAD_DIR'=> 'Odabrani folder za uploadiranje ne postoji.',
'NO_WRITE_UPLOAD'=> 'Odabrani folder nije prepisiv.<br />Moraš promjeniti permisije tako da dopustiš serveru prepisivanje foldera.',

'ONLY_ALLOWED_IN_PM'=> 'Dopušteno samo u privatnim porukama',
'ORDER_ALLOW_DENY'=> 'Dopusti',
'ORDER_DENY_ALLOW'=> 'Nedopusti',

'REMOVE_ALLOWED_IPS'=> 'Izbriši ili od-izuzmi <em>dopuštene</em> IP adrese hostova',
'REMOVE_DISALLOWED_IPS'=> 'Izbriši ili od-izuzmi <em>nedopuštene</em> IP adrese hostova',

'SEARCH_IMAGICK'=> 'Potraži Imagemagick',
'SECURE_ALLOW_DENY'=> 'Lista (ne)dopuštenja',
'SECURE_ALLOW_DENY_EXPLAIN'=> 'Kada je omogućeno sigurno preuzimanje, lista (ne)dopuštenja djeluje kao <strong>bijela lista </strong> (dopusti) odnosno <strong>crna lista</strong> (nedopusti).',
'SECURE_DOWNLOADS'=> 'Omogući sigurno preuzimanje',
'SECURE_DOWNLOADS_EXPLAIN'=> 'Omogućavanjem sigurnog preuzimanja, preuzimanje je ograničeno na IP adrese hostova koje definišeš.',
'SECURE_DOWNLOAD_NOTICE'=> 'Sigurno preuzimanje je onemogućeno.<br />Donje postavke bit će primijenjene nakon omogućavanja sigurnog preuzimanja.',
'SECURE_DOWNLOAD_UPDATE_SUCCESS'=> 'Lista IP adresa je ažurirana.',
'SECURE_EMPTY_REFERRER'=> 'Omogući prazne referrere',
'SECURE_EMPTY_REFERRER_EXPLAIN'=> 'Sigurno preuzimanje bazirano je na referrerima.<br />Želiš li omogućiti preuzimanje bez referrera, izaberi “Da”.',
'SETTINGS_CAT_IMAGES'=> 'Postavke kategorije slika',
'SPECIAL_CATEGORY'=> 'Posebna kategorija',
'SPECIAL_CATEGORY_EXPLAIN'=> 'Specijalne kategorije razlikuju se po načinu prikaza u postovima.',
'SUCCESSFULLY_UPLOADED'=> 'Uploadanje je uspjelo.',
'SUCCESS_EXTENSION_GROUP_ADD'=> 'Grupa ekstenzija je dodana.',
'SUCCESS_EXTENSION_GROUP_EDIT'=> 'Grupa ekstenzija je ažurirana.',

'UPLOADING_FILES'=> 'Uploadanje datoteka',
'UPLOADING_FILE_TO'=> 'Uploadanje datoteke “%1$s” u post broj %2$d...',
'UPLOAD_DENIED_FORUM'=> 'Za uploadanje datoteka na forum “%s” moraš imati dozvolu.',
'UPLOAD_DIR'=> 'Folder za uploadanje',
'UPLOAD_DIR_EXPLAIN'=> 'Putanja do foldera za pohranjivanje datoteka.<br />Ukoliko promijeniš folder za pohranjivanje datoteka, a u prvotnom (starom folderu) su bile pohranjene datoteke, trebat ćeš ih ručno kopirati u drugi (novi folder).',
'UPLOAD_ICON'=> 'Ikona uploadanja',
'UPLOAD_NOT_DIR'=> 'Lokacija za uploadanje koju si unio/la ne vodi do foldera.',
));
?>