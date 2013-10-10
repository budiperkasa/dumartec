<?php
/**
*
* acp_bots [Brezhoneg]
*
* @package language
* @version $Id: bots.php,v 1.12 2007/10/04 15:07:24 acydburn Exp $
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

// Bot settings
$lang = array_merge($lang, array(
	'BOTS'				=> 'Ober war-dro ar robotoù',
	'BOTS_EXPLAIN'		=> 'Poelladoù savet gant al luskerien-enklask peurliesañ evit klokat o ziaz-titouroù eo ar “robotoù” (pe “furcherien”). Daoust ma ne emezelont ket da vat e c\'hellont distummañ ar c\'hontoù war an niver a dud a zo war ar forom, brasaat ar pezh a vez karget, ha dezastum fall an titouroù a-wechoù. Amañ e c\'hellit termeniñ un doare implijer ispisial evito evit renkañ ar c\'hudennoù-mañ.',
	'BOT_ACTIVATE'		=> 'Enaouiñ',
	'BOT_ACTIVE'		=> 'Oberiant eo ar robot',
	'BOT_ADD'			=> 'Ouzhpennañ ur robot',
	'BOT_ADDED'			=> 'Ouzhpennet eo bet ar robot.',
	'BOT_AGENT'			=> 'Tizhout ar poellad',
	'BOT_AGENT_EXPLAIN'	=> 'Ur chadenn evit tizhout poellad ar robot, degemeret e vez ar chadennoù diglok..',
	'BOT_DEACTIVATE'	=> 'Dizenaouiñ',
	'BOT_DELETED'		=> 'diverket eo bet ar robot.',
	'BOT_EDIT'			=> 'Kemm ar robotoù',
	'BOT_EDIT_EXPLAIN'	=> 'Amañ e c\'hellit ouzhpennañ pe kemm un done evit ur robot. Dav eo deoc\'h termeniñ ur chadenn enni anv ar poellad, hag ur chomlec\'h IP pe ouzhpenn (un teskad chomlec\'hioù). Diwallit mat pa termenit ar poellad hag ar chomlec\'hioù. Gallout a rit ivez dibab peseurt gwiskadur ha peseurt yezh a vo gwelet gant ar robot. Evel-mañ e c\'hellit digreskiñ ar c\'hementad roadoù eskemmet, ma lakait ur gwiskadur eeun evit ar robotoù. Dav eo deoc\'h ivez reiñ an aotreoù a zere evit strollad-“izili” ar robotoù.',
	'BOT_LANG'			=> 'Yezh ar robotoù',
	'BOT_LANG_EXPLAIN'	=> 'Ar yezh a vez kinniget d\'ar robot pa\'z a war ar forom.',
	'BOT_LAST_VISIT'	=> 'Gweladenn ziwezhañ',
	'BOT_IP'			=> 'Chomlec\'h IP ar robot',
	'BOT_IP_EXPLAIN'	=> 'Aotreet e vez ar chomlec\'hioù diglok, ma lakait meur a chomlec\'hioù eo dav deoc\'h lakaat ur skej etre pep hini.',
	'BOT_NAME'			=> 'Anv ar robot',
	'BOT_NAME_EXPLAIN'	=> 'Ne servij kement-mañ nemet evidoc\'h da anavezout anezhañ.',
	'BOT_NAME_TAKEN'   => 'Graet e vez c\'hoazh gant an anv-mañ war ho forom, setu n\'hall ket bezañ implijet evit envel ur robot.',
	'BOT_NEVER'			=> 'Gwech ebet',
	'BOT_STYLE'			=> 'Gwiskadur evit ar robot',
	'BOT_STYLE_EXPLAIN'	=> 'Ar gwiskadur a vez diskouezet d\'ar robot evit ar forom.',
	'BOT_UPDATED'		=> 'Hizivaet e obet ar robot.',

	'ERR_BOT_AGENT_MATCHES_UA'	=> 'Ar memes robot eo an hini a zo bet ouzhpennet ganeoc\'h hag an hini a oa outañ c\'hoazh. Kemmit ar roadoù evit ar robot-mañ.',
	'ERR_BOT_NO_IP'				=> 'Direizh e oa an IPoù bet roet ganeoc\'h, pe neuze n\'eo ket bet dirouestlet anv ar boder.',
	'ERR_BOT_NO_MATCHES'		=> 'Dav eo deoc\'h lakaat d\'an nebeutañ ur poellad pe un chomlec\'h IP evit ar robot-mañ.',

	'NO_BOT'		=> 'N\'eus bet kavet robot ebet gant an niverenn-anavezout-mañ ID.',
	'NO_BOT_GROUP'	=> 'N\'eo ket bet kavet ar strollad ispisial evit ar robotoù.',
));

?>
