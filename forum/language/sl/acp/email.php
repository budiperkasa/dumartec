<?php
/**
*
* acp_email [Slovenian]
*
* @package language
* @version $Id: email.php 8479 2008-03-29 00:22:48Z naderman $
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

// Email settings
$lang = array_merge($lang, array(
	'ACP_MASS_EMAIL_EXPLAIN'		=> 'Tukaj lahko pošljete elektronsko sporočilo vsem uporabnikom ali uporabnikom določene skupine <strong>možnost prejemanja množičnih elektronskih sporočil je omogočena</strong>. Da bo to doseženo, bo poslana elektronska pošta na vpisan administrativen elektronski naslov, vsem prejemnikom pa bo poslana slepa vljudnostna kopija. Privzeta nastavitev vključuje 50 prejemnikov take elektronske pošte, za višje število prejemnikov bo poslanih več elektronskih sporočil. Če pošiljate pošto veliki skupini ljudi prosimo, da ste potrpežljivi po oddaji pošte in ne prekinjate strani med pošiljanjem. Normalno je, da množično pošiljanje pošte traja dolgo časa. Ko bo pošiljanje končano, boste o tem obveščeni.',
	'ALL_USERS'						=> 'Vsi uporabniki',

	'COMPOSE'				=> 'Sestavi',

	'EMAIL_SEND_ERROR'		=> 'Med pošiljanjem elektronske pošte je prišlo do ene ali večih napak. Prosim preverite %sDnevnik napak%s za natančnejša obvestila o napakah.',
	'EMAIL_SENT'			=> 'To sporočilo je bilo poslano.',
	'EMAIL_SENT_QUEUE'		=> 'To sporočilo je bilo dodano v vrsto za pošiljanje.',

	'LOG_SESSION'			=> 'Zabeleži poštno sejo v kritični dnevnik',

	'SEND_IMMEDIATELY'		=> 'Pošlji takoj',
	'SEND_TO_GROUP'			=> 'Pošlji skupini',
	'SEND_TO_USERS'			=> 'Pošlji uporabnikom',
	'SEND_TO_USERS_EXPLAIN'	=> 'Vpis imen na to mesto bo razveljavilo izbiro skupine zgoraj. Vpišite vsako uporabniško ime na novo črto.',
	
	'MAIL_HIGH_PRIORITY'	=> 'Visoko',
	'MAIL_LOW_PRIORITY'		=> 'Nizko',
	'MAIL_NORMAL_PRIORITY'	=> 'Normalno',
	'MAIL_PRIORITY'			=> 'Prednost pošte',
	'MASS_MESSAGE'			=> 'Vaše sporočilo',
	'MASS_MESSAGE_EXPLAIN'	=> 'Prosimo upoštevajte, da lahko vnašate le navaden neoblikovan tekst. Vse oblikovanje teksta bo odstranjeno pred pošiljanjem.',
	
	'NO_EMAIL_MESSAGE'		=> 'Vpisati morate sporočilo.',
	'NO_EMAIL_SUBJECT'		=> 'Vpisati morate predmet vašega sporočila.',
));

?>