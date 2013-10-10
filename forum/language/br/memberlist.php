<?php
/**
*
* memberlist [Brezhoneg]
*
* @package language
* @version $Id: memberlist.php 8574 2008-05-29 13:59:47Z Kellanved $
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

$lang = array_merge($lang, array(
	'ABOUT_USER'			=> 'Aelad',
	'ACTIVE_IN_FORUM'		=> 'Forom implijetañ',
	'ACTIVE_IN_TOPIC'		=> 'Sujed implijetañ',
	'ADD_FOE'				=> 'Ouzhpennañ un enebour',
	'ADD_FRIEND'			=> 'Ouzhpennañ ur mignon',
	'AFTER'					=> 'Goude',

	'ALL'					=> 'An holl',

	'BEFORE'				=> 'A-raok',

	'CC_EMAIL'				=> 'Kas un eil skouerenn eus ar postel-mañ deoc\'h ho-unan.',
	'CONTACT_USER'			=> 'Mont e-darempred gant',

	'DEST_LANG'				=> 'Yezh',
	'DEST_LANG_EXPLAIN'		=> 'Dibab ar yezh a zere (ma\'z eo posupl) evit resever ar postel.',

	'EMAIL_BODY_EXPLAIN'	=> 'Testenn plaen e vo ar c\'hemennadenn-mañ, arabat lakaat HTML pe BBCode ennañ. Ho postel a vo graet gantañ evit respont.',
	'EMAIL_DISABLED'		=> 'Digarez, met ne vez ket aotreet da eskemm posteloù war ar forom-mañ.',
	'EMAIL_SENT'			=> 'Kaset eo bet ar postel.',
	'EMAIL_TOPIC_EXPLAIN'	=> 'Testenn plaen e vo ar c\'hemennadenn-mañ, arabat lakaat HTML pe BBCode ennañ. titouroù diwar-benn ar sujed a vo lakaet dija er gemennadenn. Ho postel a vo graet gantañ evit respont.',
	'EMPTY_ADDRESS_EMAIL'	=> 'Dav eo deoc\'h lakaat ur postel reizh evit ar resever.',
	'EMPTY_MESSAGE_EMAIL'	=> 'Dav eo deoc\'h skrivañ un dra bennak er postel.',
	'EMPTY_MESSAGE_IM'		=> 'Dav eo deoc\'h skrivañ un dra bennak.',
	'EMPTY_NAME_EMAIL'		=> 'Dav eo deoc\'h reiñ anv gwirion ar resever.',
	'EMPTY_SUBJECT_EMAIL'	=> 'Dav eo deoc\'h resisaat sujed ar postel.',
	'EQUAL_TO'				=> 'Kevatal da',

	'FIND_USERNAME_EXPLAIN'	=> 'Grit gant ar furmskrid-mañ evit klask izili resis. N\'ho peus ket ezhomm da leuniañ pep tra. Evit skrivañ titouroù diglok, skrivit * e lec\'h ma\'z eus un toull. Evit lakaat deiziadoù, grit gant ar stumm <kbd>BBBB-MM-DD</kbd>, sk. <samp>2004-02-29</samp>. Diuzit un ezel pe ouzhpenn (hervez ar frumskrid) ha klikit war “Dibab ar re ziuzet” evit distreiñ d\'ar bajenn kent.',
	'FLOOD_EMAIL_LIMIT'		=> 'N\'hallit ket kas ur postel all diouzhtu. Gortozit un tamm mar plij.',

	'GROUP_LEADER'			=> 'E-penn ar strollad',

	'HIDE_MEMBER_SEARCH'	=> 'Kuzhat klask an izili',

	'IM_ADD_CONTACT'		=> 'Ouzhpennañ un darempred',
	'IM_AIM'				=> 'Dav eo deoc\'h bezañ staliet AOL Instant Messenger evit ober an dra-mañ.',
	'IM_AIM_EXPRESS'		=> 'AIM Express',
	'IM_DOWNLOAD_APP'		=> 'Pellgargañ ar meziant',
	'IM_ICQ'				=> 'Posupl eo m\'o defe dibabet izili \'zo chom hep kaout pedadennoù d\'ar flapañ prim.',
	'IM_JABBER'				=> 'Posupl eo m\'o defe dibabet izili \'zo chom hep kaout pedadennoù d\'ar flapañ prim.',
	'IM_JABBER_SUBJECT'		=> 'Ur gemennadenn savet gant ar meziant eo se, na responit ket ! O tont eus %1$s evit %2$s.',
	'IM_MESSAGE'			=> 'Ho kemennadenn',
	'IM_MSNM'				=> 'Dav eo deoc\'h bezañ staliet Windows Messenger evit ober an dra-mañ.',
	'IM_MSNM_BROWSER'		=> 'Ne vez ket gouzañvet kement-mañ gant ho merdeer.',
	'IM_MSNM_CONNECT'		=> 'N\'eo ket kennasket MSNM.\nDav eo deoc\'h kennaskañ MSNM evit kenderc\'hel.',		
	'IM_NAME'				=> 'Ho anv',
	'IM_NO_DATA'			=> 'N\'eus ket ouzh an titouroù a zo ezhomm outo evit gallout mont e-darempred gant an ezel-mañ.',
	'IM_NO_JABBER'			=> 'Digarez, met ne vez ket gouzañvet ar c\'has kemennadennoù Jabber warn-eeun gant ar forom-mañ. Dav eo deoc\'h bezañ staliet ur meziant flapañ prim Jabber a-benn mont e-darempred gant an den-mañ.',
	'IM_RECIPIENT'			=> 'Resever',
	'IM_SEND'				=> 'Kas ur gerig',
	'IM_SEND_MESSAGE'		=> 'Kas gerig',
	'IM_SENT_JABBER'		=> 'kaset eo bet ho kerig da %1$s.',
	'IM_USER'				=> 'Kas ur gerig prim',
	
	'LAST_ACTIVE'				=> 'Oberiant ar we ziwezhañ',
	'LESS_THAN'					=> 'Nebeutoc\'h eget',
	'LIST_USER'					=> '1 ezel',
	'LIST_USERS'				=> '%d ezel',
	'LOGIN_EXPLAIN_LEADERS'		=> 'Dav eo deoc\'h bezañ emezelet hag anavezet gant ar forom a-benn gwelet listenn ar skipailh.',
	'LOGIN_EXPLAIN_MEMBERLIST'	=> 'Dav eo deoc\'h bezañ emezelet hag anavezet gant ar forom a-benn gwelet listenn an izili.',
	'LOGIN_EXPLAIN_SEARCHUSER'	=> 'Dav eo deoc\'h bezañ emezelet hag anavezet gant ar forom a-benn klask izili.',
	'LOGIN_EXPLAIN_VIEWPROFILE'	=> 'Dav eo deoc\'h bezañ emezelet hag anavezet gant ar forom a-benn gwelet Aeladoù.',

	'MORE_THAN'				=> 'Ouzhpenn',

	'NO_EMAIL'				=> 'N\'oc\'h ket aotreet da gas ur postel d\'an implijer-mañ.',
	'NO_VIEW_USERS'			=> 'N\'oc\'h ket aotreet da welet listenn an izili pe an aeladoù.',

	'ORDER'					=> 'Urzh',
	'OTHER'					=> 'Re all',

	'POST_IP'				=> 'Kaset adalek IP/domain',

	'RANK'					=> 'Renk',
	'REAL_NAME'				=> 'Anv gwirion ar resever',
	'RECIPIENT'				=> 'Resever',
	'REMOVE_FOE'			=> 'Tennañ enebour',
	'REMOVE_FRIEND'			=> 'Tennañ mignon',

	'SEARCH_USER_POSTS'		=> 'Klask kemennadennoù an ezel-mañ',
	'SELECT_MARKED'			=> 'Dibab ar re ziuzet',
	'SELECT_SORT_METHOD'	=> 'Dibab un doare da urzhiañ',
	'SEND_AIM_MESSAGE'		=> 'Kas ur gerig AIM',
	'SEND_ICQ_MESSAGE'		=> 'Kas ur gerig ICQ',
	'SEND_IM'				=> 'Flapañ prim',
	'SEND_JABBER_MESSAGE'	=> 'Kas ur gerig Jabber',
	'SEND_MESSAGE'			=> 'Gerig',
	'SEND_MSNM_MESSAGE'		=> 'Kas ur gerig MSNM/WLM',
	'SEND_YIM_MESSAGE'		=> 'Kas ur gerig YIM',
	'SORT_EMAIL'			=> 'Postel',
	'SORT_LAST_ACTIVE'		=> 'Oberiant ar wech ziwezhañ',
	'SORT_POST_COUNT'		=> 'Niver a gemennadennoù',

	'USERNAME_BEGINS_WITH'	=> 'Kregiñ a ra an anv ezel gant',
	'USER_ADMIN'			=> 'Merañ ezel',
	'USER_BAN'			=> 'Harluiñ',
	'USER_FORUM'			=> 'Sifroù diwar-benn an ezel',
	'USER_ONLINE'			=> 'Kennasket',
	'USER_PRESENCE'			=> 'Bezañs war ar forom',

	'VIEWING_PROFILE'		=> 'Gwelet aelad - %s',
	'VISITED'				=> 'Gweladennet evit ar wech ziwezhañ',

	'WWW'					=> 'Lec\'hienn',
));

?>
