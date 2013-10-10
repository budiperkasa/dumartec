<?php
/**
*
* acp_ban [Brezhoneg]
*
* @package language
* @version $Id: ban.php,v 1.19 2007/10/04 15:07:24 acydburn Exp $
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
	'1_HOUR'		=> '1 eurvezh',
	'30_MINS'		=> '30 minutenn',
	'6_HOURS'		=> '6 eurvezh',

	'ACP_BAN_EXPLAIN'	=> 'Amañ e c\'hellit skarzhañ hag harluiñ izili, ma vefe diouzh o anv ezel, o IP, pe o fostel. Se a viro ouzh un ezel da dizhout forzh pe lodenn ouzh ar forom. Gallout a rit reiñ un abeg d\'ar skarzhañ (berr-ha-berr, 3000 arouez d\'ar muiañ)Kement-mañ a vo diskouezet e deizlevr ar merour. Gallout a rit ivez reiñ ur padelezh resis d\'an harluiñ. M\'ho peus c\'hoant ma paouezfe an harluiñ d\'un deiziad resis, kentoc\'h eget goude ur prantad bennak, neuze diuzit <span style="text-decoration: underline;">Betek -&gt;</span>, ha lakait an deiziad e stumm <kbd>BBBB-MM-DD</kbd>.',

	'BAN_EXCLUDE'			=> 'Paouez da harluiñ',
	'BAN_LENGTH'			=> 'Padelezh an harluiñ',
	'BAN_REASON'			=> 'Abeg evit ar skarzhañ',
	'BAN_GIVE_REASON'		=> 'Ar pezh en deus bet graet an ezel evit bezañ skarzhet',
	'BAN_UPDATE_SUCCESSFUL'	=> 'Hizivaet eo bet listenn an harluiñ.',

	'EMAIL_BAN'					=> 'Harluiñ ur postel pe ouzhpenn',
	'EMAIL_BAN_EXCLUDE_EXPLAIN'	=> 'Grit gant se evit ma vefe tennet ar postel diouzh listenn an izili harluet.',
	'EMAIL_BAN_EXPLAIN'			=> 'Evit reiñ ouzhpenn ur postel, lakait ar posteloù disheñvel war bep a linenn. Evit tizhout posteloù diglok, grit gant * e-lec\'h m\'emañ an toull, sk. <samp>*@no-log.org</samp>, <samp>*@*.domain.tld</samp>, etc.',
	'EMAIL_NO_BANNED'			=> 'N\'eus postel harluet ebet',
	'EMAIL_UNBAN'				=> 'Paouez da harluiñ postelioù',
	'EMAIL_UNBAN_EXPLAIN'		=> 'Gallout a rit paouez da harluiñ meur a bostel war an dro o tiuz anezho asambles en doare ma zere gant ho logodenn hag ho touchennaoueg, hervez an urzhiataerez hag ar merdeer a rit gantañ. Lakaet e vo war-wel ar re ziuzet.',

	'IP_BAN'					=> 'Harluiñ un IP pe ouzhpenn',
	'IP_BAN_EXCLUDE_EXPLAIN'	=> 'Grit gant se evit ma vefe tennet an IP diouzh listenn an izili harluet.',
	'IP_BAN_EXPLAIN'			=> 'Evit reiñ ouzhpenn un IP, lakait an IPoù disheñvel war bep a linenn. Evit resisaat un teskad IPoù, lakait ur varennig-stagañ (-) etre hini kentañ an teskad hag an hini ziwezhañ. Evit reiñ IPoù diglok, lakait ur “*” e lec\'h an toull.',
	'IP_HOSTNAME'				=> 'Chomlec\'hioù IP pe anvioù-boderien',
	'IP_NO_BANNED'				=> 'N\'eus chomlec\'h IP harluet ebet',
	'IP_UNBAN'					=> 'Paouez da harluiñ IPoù',
	'IP_UNBAN_EXPLAIN'			=> 'Gallout a rit paouez da harluiñ meur a bostel war an dro o tiuz anezho asambles en doare ma zere gant ho logodenn hag ho touchennaoueg, hervez an urzhiataerez hag ar merdeer a rit gantañ. Lakaet e vo war-wel ar re ziuzet.',

	'LENGTH_BAN_INVALID'		=> 'Er stumm <kbd>YYYY-MM-DD</kbd> e rank an deiziadoù bezañ.',

	'PERMANENT'		=> 'Peurbadus',
	
	'UNTIL'						=> 'Betek',
	'USER_BAN'					=> 'Harluiñ un anv-ezel pe ouzhpenn',
	'USER_BAN_EXCLUDE_EXPLAIN'	=> 'Grit gant se evit tennañ an anv(ioù)-ezel diouzh listenn ar re harluet.',
	'USER_BAN_EXPLAIN'			=> 'Evit reiñ ouzhpenn un anv-ezel, lakait an anvioù-ezel war bep a linenn. Gallout a rit ober gant <span style="text-decoration: underline;">Kavout un ezel</span> evit kavout buanoc\'h an ezel a glaskit e-touez ar re a zo war ar forom.',
	'USER_NO_BANNED'			=> 'N\'eus anv-ezel harluet ebet',
	'USER_UNBAN'				=> 'Paouez da harluiñ un anv-ezel pe meur a hini',
	'USER_UNBAN_EXPLAIN'		=> 'Gallout a rit paouez da harluiñ meur a izili war an dro o tiuz anezho en doare ma zere gant ho logodenn hag ho touchennaoueg, hervez an urzhiataerez hag ar merdeer a rit gantañ. Lakaet e vo war-wel ar re ziuzet.',
	

));

?>
