<?php
/**
*
* acp_email [Brezhoneg]
*
* @package language
* @version $Id: email.php,v 1.16 2007/10/04 15:07:24 acydburn Exp $
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
	'ACP_MASS_EMAIL_EXPLAIN'		=> 'Amañ e c\'hellit kas posteloù da holl izili ur forom, pe d\'ar re a zo en ur strollad resis <strong>ma vez enaouet ar c\'has posteloù a-stroll</strong>. Evit ober kement-mañ e vo kaset ar postel d\'ar chomlec\'h termenet evit ar merour, hag un Eilskouerenn Kuzhet a vo kaset d\'an holl reseverien. Dre ziouer, ne vez lakaet nemet 50 resever en ur postel evel-se, setu e vo kaset posteloù ouzhpenn d\'ar merour ma vez ouzhpenn 50 resever. Ma kasit posteloù d\'un niver bras a dud e vo mat deoc\'h kaout pasianted ha chom hep paouez ar bajenn e-kreiz an oberenn. Reizh eo ma padfe ar postelañ a-stroll kalzik amzer, kelaouet e voc\'h pa vo peurechu an oberenn.',
	'ALL_USERS'						=> 'An holl izili',

	'COMPOSE'				=> 'Skrivañ',

	'EMAIL_SEND_ERROR'		=> 'Ur fazi pe ouzhpenn a zo bet o kas ar postel. Gwelit  %sDeizlevr ar fazioù%s evit titouroù ouzhpenn.',
	'EMAIL_SENT'			=> 'Kaset eo bet ar postel.',
	'EMAIL_SENT_QUEUE'		=> 'Lakaet eo bet ar postel er steudad evit bezañ kaset.',

	'LOG_SESSION'			=> 'Ouzhpennañ gweladenn ar posteloù en deizlevr',

	'SEND_IMMEDIATELY'		=> 'Kas diouzhtu',
	'SEND_TO_GROUP'			=> 'Kas d\'ar strollad',
	'SEND_TO_USERS'			=> 'Kas d\'an izili',
	'SEND_TO_USERS_EXPLAIN'	=> 'Erlec\'hiet e vo ar strolladoù bet dibabet uheloc\'h gant an anvioù skrivet amañ. Lakait pep anv war ul linenn disheñvel.',
	
	'MAIL_HIGH_PRIORITY'	=> 'Uhel',
	'MAIL_LOW_PRIORITY'		=> 'Izel',
	'MAIL_NORMAL_PRIORITY'	=> 'Boutin',
	'MAIL_PRIORITY'			=> 'Pouezusted ar postel',
	'MASS_MESSAGE'			=> 'Ho kemennadenn',
	'MASS_MESSAGE_EXPLAIN'	=> 'Testenn hepken eo dav deoc\'h lakaat. Ma vez balizennoù e vint tennet kuit a-raok ar c\'has.',
	
	'NO_EMAIL_MESSAGE'		=> 'Un dra bennak a rankit skrivañ er gemennadenn.',
	'NO_EMAIL_SUBJECT'		=> 'Dav eo deoc\'h reiñ ur sujed d\'ho kemennadenn.',
));

?>
