<?php
/** 
*
* acp_language [Bosnian]
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
'ACP_FILES'=> 'Jezičke datoteke',
'ACP_LANGUAGE_PACKS_EXPLAIN'=> 'Ovdje možeš instalirati/deinstalirati/izbrisati jezičke pakete.',

'EMAIL_FILES'=> 'E-mail template',

'FILE_CONTENTS'=> 'Sadržaj datoteke',
'FILE_FROM_STORAGE'=> 'Datoteka iz pohranišnog foldera',

'HELP_FILES'=> 'Help datoteke',

'INSTALLED_LANGUAGE_PACKS'=> 'Instaliran(i) jezički paket(i)',
'INVALID_LANGUAGE_PACK'=> 'Izabran jezički paket ni je ispravan.<br />Provjeri što nije u redu s njime te ga, ukoliko je potrebno, ponovo uploadiraj.',
'INVALID_UPLOAD_METHOD'=> 'Izabrana metoda uploadiranja je neispravna, izaberi drugu metodu.',

'LANGUAGE_DETAILS_UPDATED'=> 'Detalji (su) ažurirani.',
'LANGUAGE_ENTRIES'=> 'Jezički unosi',
'LANGUAGE_ENTRIES_EXPLAIN'=> 'Ovdje možeš izmijeniti postojeće jezičke unose odnosno prevesti one koji nisu prevedeni.<br /><strong>Imaj na umu:</strong> kad izmijeniš jezički paket, promjene će biti pohranjene u poseban folder za preuzimanje. Promjene neće biti vidljive dok ne zamijeniš originalnu datoteku s novom [moraš ju uploadirati].',
'LANGUAGE_FILES'=> 'Jezičke datoteke',
'LANGUAGE_KEY'=> 'Jezični ključ',
'LANGUAGE_PACK_ALREADY_INSTALLED'=> 'Jezički paket je već instaliran.',
'LANGUAGE_PACK_DELETED'=> 'Jezički paket <strong>%s</strong> je izbrisan.<br />Svim korisnicima/ama, koji/e su izbrisan jezik imali/e kao odabrani, kao novi jezik postavljen im je defaultni jezik foruma.',
'LANGUAGE_PACK_DETAILS'=> 'Detalji jezičkog paketa',
'LANGUAGE_PACK_INSTALLED'=> 'Jezički paket <strong>%s</strong> je instaliran.',
'LANGUAGE_PACK_ISO'=> 'ISO',
'LANGUAGE_PACK_LOCALNAME'=> 'Lokalno ime',
'LANGUAGE_PACK_NAME'=> 'Ime',
'LANGUAGE_PACK_NOT_EXIST'=> 'Izabran jezički paket ne postoji.',
'LANGUAGE_PACK_USED_BY'=> 'Koriste [uključujući botove]',
'LANGUAGE_VARIABLE'=> 'Jezičke varijable',
'LANG_AUTHOR'=> 'Autor/ica jezičkog paketa',
'LANG_ENGLISH_NAME'=> 'Englesko ime',
'LANG_ISO_CODE'=> 'ISO kod',
'LANG_LOCAL_NAME'=> 'Lokalno ime',

'MISSING_LANGUAGE_FILE'=> 'Nedostajuća jezikna datoteka: <strong style="color:red">%s</strong>',
'MISSING_LANG_VARIABLES'=> 'Nedostajuća/e jezička/e varijabla/e',
'MODS_FILES'=> 'Jezičke datoteke MOD-ova',

'NO_FILE_SELECTED'=> 'Nisi specificirao/la jezičku datoteku.',
'NO_LANG_ID'=> 'Nisi specificirao/la jezični paket.',
'NO_REMOVE_DEFAULT_LANG'=> 'Ne možeš izbrisati zadani jezički paket.<br />Ukoliko želiš izbrisati ovaj jezički paket, postavi neki drugi jezik kao defaultni jezik foruma.',
'NO_UNINSTALLED_LANGUAGE_PACKS'=> 'Nema neinstaliranih jezičkih paketa.',

'REMOVE_FROM_STORAGE_FOLDER'=> 'Izbriši iz pohranišnog foldera',

'SELECT_DOWNLOAD_FORMAT'=> 'Izaberi format preuzimanja',
'SUBMIT_AND_DOWNLOAD'=> 'Pošalji i preuzmi datoteku',
'SUBMIT_AND_UPLOAD'=> 'Pošalji i uploadiraj datoteku',

'THOSE_MISSING_LANG_FILES'=> 'Sljedeće jezičke datoteke nedostaju u <strong>%s</strong> jezičkoj mapi.',
'THOSE_MISSING_LANG_VARIABLES'=> 'Sljedeće jezične varijable nedostaju u <strong>%s</strong> jezičkom paketu.',

'UNINSTALLED_LANGUAGE_PACKS'=> 'Neinstaliran(i) jezički paket(i)',

'UNABLE_TO_WRITE_FILE'=> 'Datoteka nije mogla biti za(u)pisana u %s.',
'UPLOAD_COMPLETED'=> 'Uploadiranje je završeno.',
'UPLOAD_FAILED'=> 'Uploadiranje nije uspjelo iz nepoznatog razloga.<br />Probaj zamijeniti datoteku ručno.',
'UPLOAD_METHOD'=> 'Metoda uploadiranja',
'UPLOAD_SETTINGS'=> 'Postavke uploadiranja',

'WRONG_LANGUAGE_FILE'=> 'Izabran jezik je neispravan.',
));
?>