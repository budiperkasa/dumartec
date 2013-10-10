<?php
/**
*
* acp_ban [English]
*
* @package language
* @version $Id: ban.php 8479 2008-03-29 00:22:48Z naderman $
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

// Banning
$lang = array_merge($lang, array(
	'1_HOUR'		=> '1 ura',
	'30_MINS'		=> '30 minut',
	'6_HOURS'		=> '6 ur',

	'ACP_BAN_EXPLAIN'	=> 'Tu lahko onemogočaš uporabnike po imenu, IP naslovu ali e-poštnem naslovu. Te metode preprečujejo uporabniku ponoven dostop do foruma. Ob onemogočanju lahko vneseš tudi kratek opis, dolg do 3000 znakov. Le-ta se bo prikazal v administrativnem dnevniku. Nastaviš lahko tudi trajanje onemogočitve. ',

	'BAN_EXCLUDE'			=> 'Izvzemi iz onemogočanja',
	'BAN_LENGTH'			=> 'Trajanje',
	'BAN_REASON'			=> 'Razlog',
	'BAN_GIVE_REASON'		=> 'Razlog onemogočitve',
	'BAN_UPDATE_SUCCESSFUL'	=> 'Seznam onemogočitev je posodobljen.',

	'EMAIL_BAN'					=> 'Onemogoči enega ali več e-poštnih naslovov',
	'EMAIL_BAN_EXCLUDE_EXPLAIN'	=> 'Omogoči to možnost, če želiš odstraniti e-poštni naslov iz trenutnega seznama onemogočenih',
	'EMAIL_BAN_EXPLAIN'			=> 'Vsak poštni naslov vnesi v svojo vrstico. Za delna ujemanja uporabi zvezdico (*). Primer: <samp>*@hotmail.com</samp>, <samp>ime.*@email.si</samp> ipd..',
	'EMAIL_NO_BANNED'			=> 'Ni onemogočenih e-poštnih naslovov',
	'EMAIL_UNBAN'				=> 'Omogoči ali odstrani e-poštni naslov',
	'EMAIL_UNBAN_EXPLAIN'		=> 'Vsak poštni naslov vnesi v svojo vrstico. Odstranjeni naslovi so poudarjeni.',

	'IP_BAN'					=> 'Onemogoči enega ali več IP naslovov',
	'IP_BAN_EXCLUDE_EXPLAIN'	=> 'Omogoči to možnost, če želiš odstraniti IP naslov iz trenutnega seznama onemogočenih.',
	'IP_BAN_EXPLAIN'			=> 'Vsak IP naslov vnesi v svojo vrstico. Za delna ujemanja uporabi zvezdico (*). Za definiranje IP razredov, uporabi pomišljaj (-).',
	'IP_HOSTNAME'				=> 'IP naslovi ali gostiteljska imena',
	'IP_NO_BANNED'				=> 'Ni onemogočenih IP naslovov',
	'IP_UNBAN'					=> 'Omogoči ali odstrani IP naslov',
	'IP_UNBAN_EXPLAIN'			=> 'Vsak IP naslov vnesi v svojo vrstico. Odstranjeni naslovi so poudarjeni.',

	'LENGTH_BAN_INVALID'		=> 'Datum mora biti v formatu <kbd>LLLL-MM-DD</kbd>.',

	'PERMANENT'		=> 'Trajen',
	
	'UNTIL'						=> 'Do',
	'USER_BAN'					=> 'Onemogoči eno ali več uporabniških imen',
	'USER_BAN_EXCLUDE_EXPLAIN'	=> 'Omogoči to možnost, če želiš odstraniti uporabniška imena iz trenutnega seznama onemogočenih.',
	'USER_BAN_EXPLAIN'			=> 'Vsako uporabniško ime vnesi v svojo vrstico. Uporabi možnost <span style="text-decoration: underline;">Najdi člana</span> za iskanje in dodajanje več uporabnikov hkrati.',
	'USER_NO_BANNED'			=> 'Ni onemogočenih uporabniških naslovov',
	'USER_UNBAN'				=> 'Omogoči ali odstrani uporabniško ime',
	'USER_UNBAN_EXPLAIN'		=> 'Vsako uporabniško ime vnesi v svojo vrstico. Odstranjena uporabniška imena so poudarjena.',
	

));

?>