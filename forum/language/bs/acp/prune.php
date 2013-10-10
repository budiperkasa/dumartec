<?php
/** 
*
* acp_prune [Bosnian]
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

// User pruning
$lang = array_merge($lang, array(
'ACP_PRUNE_USERS_EXPLAIN'=> 'Ovdje možeš izbrisati [ili deaktivirati] korisničke račune i to na više načina: po broju postova, (ne)aktivnosti(ma) i sl, a možeš i kombinirati ove načine [npr. izbrisati korisničke račune s manje od 10 postova, a koji su zadnji put bili u uporabi 01. siječnja 2006].<br />Ukoliko izbrišeš korisnički račun, imaj na umu da nema undo [povratne] funkcije što znači da ne možeš [po]vratiti korisnički račun koji izbrišeš.',

'DEACTIVATE_DELETE'=> 'Deaktiviraj ili izbriši',
'DEACTIVATE_DELETE_EXPLAIN'=> 'Izaberi želiš li samo deaktivirati ili (baš) izbrisati korisnički račun [nema undo (povratne) funkcije].',
'DELETE_USERS'=> 'Izbriši',
'DELETE_USER_POSTS'=> 'Izbriši (i) postove izbrisanog/ih korisničkog/ih računa',
'DELETE_USER_POSTS_EXPLAIN' => 'Izbrisat će (i) sve postove izbrisanog/ih korisničkog/ih računa [samo kod izbrisivanja korisničkog/ih računa, nema efekta kod deaktiviranja korisničkog/ih računa].',

'JOINED_EXPLAIN'=> 'Unesi datum u <kbd>GGGG-MM-DD</kbd> formatu.',

'LAST_ACTIVE_EXPLAIN'=> 'Unesi datum u <kbd>GGGG-MM-DD</kbd> formatu.',

'PRUNE_USERS_LIST'=> 'Korisnički računi koji će biti izbrisani odnosno deaktivirani',
'PRUNE_USERS_LIST_DELETE'=> 'U skladu s odabranim kriterijima, sljedeći korisnički računi će biti izbrisani.',
'PRUNE_USERS_LIST_DEACTIVATE'=> 'U skladu s odabranim kriterijima, sljedeći korisnički računi će biti deaktivirani.',

'SELECT_USERS_EXPLAIN'=> 'Unesi (više) korisničkih imena [na njih će biti primijenjeni gornji kriteriji].',

'USER_DEACTIVATE_SUCCESS'=> 'Korisnički račun/i je/su deaktiviran/i.',
'USER_DELETE_SUCCESS'=> 'Korisnički račun/i je/su izbrisan/i.',
'USER_PRUNE_FAILURE'=> 'Niti jedno korisničko ime ne odgovara odabranim kriterijima.',

'WRONG_ACTIVE_JOINED_DATE'=> 'Datum je neispravno unesen, treba biti unesen u <kbd>GGGG-MM-DD</kbd> formatu.',
));

// Forum Pruning
$lang = array_merge($lang, array(
'ACP_PRUNE_FORUMS_EXPLAIN'=> 'Ovdje možeš izbrisati teme u kojima nije bilo novih postova određen broj dana odnosno teme koje nisu pregledane određen broj dana.<br />Ukoliko ne uneseš broj, sve teme bit će izbrisane.<br />Zadano, neće biti izbrisane teme s (još) aktivnim anketama odnosno teme s “važnim” [“važno”] i “obavijesnim” [(globalna) obavijest] postovima.',

'FORUM_PRUNE'=> 'Brisanje foruma',

'NO_PRUNE'=> 'Niti jedan/na post/tema/forum nije izbrisan.',

'SELECTED_FORUM'=> 'Izabran forum',
'SELECTED_FORUMS'=> 'Odabrani forumi',

'POSTS_PRUNED'=> 'Izbrisano postova',
'PRUNE_ANNOUNCEMENTS'=> 'Izbriši “obavijesne” postove/teme',
'PRUNE_FINISHED_POLLS'=> 'Izbriši završene ankete',
'PRUNE_FINISHED_POLLS_EXPLAIN'=> 'Izbrisuje teme s anketama koje su završile.',
'PRUNE_FORUM_CONFIRM'=> 'Jesi li siguran/na da želiš izbrisati odabrane forume? <br />Ukoliko izbrišeš odabrane forume, imaj na umu da nema undo [povratne] funkcije što znači da ne možeš [po]vratiti teme/postove koje izbrišeš.',
'PRUNE_NOT_POSTED'=> 'Dan/a od zadnjeg posta(nja)',
'PRUNE_NOT_VIEWED'=> 'Dan/a od zadnjeg pregled(avanj)a',
'PRUNE_OLD_POLLS'=> 'Izbriši stare ankete',

'PRUNE_OLD_POLLS_EXPLAIN'=> 'Briše teme s anketama u kojima nije glasovano određen broj dana.',
'PRUNE_STICKY'=> 'Izbriši “važne” postove/teme',
'PRUNE_SUCCESS'=> 'Brisanje foruma je izvršeno.',

'TOPICS_PRUNED'=> 'Izbrisano tema',
));
?>