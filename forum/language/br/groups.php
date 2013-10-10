<?php
/**
*
* groups [Brezhoneg]
*
* @package language
* @version $Id: groups.php 8479 2008-03-29 00:22:48Z naderman $
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
	'ALREADY_DEFAULT_GROUP'	=> 'Ho strollad dre-ziouer eo dija ar strollad diuzet',
	'ALREADY_IN_GROUP'		=> 'Ezel oc\'h dija ouzh ar strollad diuzet',
	'ALREADY_IN_GROUP_PENDING'	=> 'Goulennet ho peus dija bezañ ezel ouzh ar strollad diuzet.',

	'CANNOT_JOIN_GROUP'			=> 'N\'hallit ket dont er strollad-mañ. N\'hallit dont nemet e strolladoù digor.',
	'CANNOT_RESIGN_GROUP'		=> 'N\'hallit ket kuitaat ar strollad-mañ. N\'hallit kuitaat nemet ar strolladoù digor.',
	'CHANGED_DEFAULT_GROUP'	=> 'Kemmet eo bet ar strollad dre-ziouer',
	
	'GROUP_AVATAR'						=> 'Skeudennig ar strollad',
	'GROUP_CHANGE_DEFAULT'				=> 'Ha sur oc\'h ho peus c\'hoant da gemm ho pezañs er strollad "%s" ?',
	'GROUP_CLOSED'						=> 'Serret',
	'GROUP_DESC'						=> 'Kinnig ar strollad',
	'GROUP_HIDDEN'						=> 'Kuzh',
	'GROUP_INFORMATION'					=> 'Titouroù ar strollad',
	'GROUP_IS_CLOSED'					=> 'Ur strollad serret eo, an izili nevez n\'hallont ket emezelañ diouzhtu.',
	'GROUP_IS_FREE'						=> 'Ur strollad digor-frank eo, degemeret mat e vez an holl.',
	'GROUP_IS_HIDDEN'					=> 'Ur strollad kuzh eo, an izili hepken a c\'hell gwelet piv a zo e-barzh.',
	'GROUP_IS_OPEN'						=> 'Ur strollad digor eo, gallout a rit goulenn emezelañ.',
	'GROUP_IS_SPECIAL'					=> 'Ur strollad ispisial eo, ar Merour a ra war e dro.',
	'GROUP_JOIN'						=> 'Mont er strollad',
	'GROUP_JOIN_CONFIRM'				=> 'Ha sur o ho peus c\'hoant da vont er strollad diuzet ?',
	'GROUP_JOIN_PENDING'				=> 'Goulenn mont er strollad',
	'GROUP_JOIN_PENDING_CONFIRM'		=> 'Ha sur o ho peus c\'hoant da c\'houlenn evit mont er strollad ?',
	'GROUP_JOINED'						=> 'Er strollad emaoc\'h bremañ',
	'GROUP_JOINED_PENDING'				=> 'Graet eo bet ho koulenn, gortozit bremañ respont Penn ar strollad.',
	'GROUP_LIST'						=> 'Merañ implijerien',
	'GROUP_MEMBERS'						=> 'Izili ar strollad',
	'GROUP_NAME'						=> 'Anv ar strollad',
	'GROUP_OPEN'						=> 'Digor',
	'GROUP_RANK'						=> 'Renk ar strollad',
	'GROUP_RESIGN_MEMBERSHIP'			=> 'Kuitaat ar strollad',
	'GROUP_RESIGN_MEMBERSHIP_CONFIRM'	=> 'Ha sur oc\'h ho peus c\'hoant da guitaat ar strollad ?',
	'GROUP_RESIGN_PENDING'				=> 'Nullañ ur goulenn-emezelañ war-c\'hortoz',
	'GROUP_RESIGN_PENDING_CONFIRM'		=> 'Ha sur oc\'h ho peus c\'hoant da nullañ ho koulenn-emezelañ war-c\'hortoz ?',
	'GROUP_RESIGNED_MEMBERSHIP'			=> 'Kuitaet ho peus ar strollad',
	'GROUP_RESIGNED_PENDING'			=> 'Tennet eo bet ho koulenn-emezelañ',
	'GROUP_TYPE'						=> 'Doare ar strollad',
	'GROUP_UNDISCLOSED'					=> 'Strollad kuzh',
	'FORUM_UNDISCLOSED'					=> 'Merañ forom(où) kuzh',

	'LOGIN_EXPLAIN_GROUP'	=> 'Dav eo deoc\'h bezañ anavezet a-benn gallout gwelet titouroù ar strollad',

	'NO_LEADERS'					=> 'N\'oc\'h e-penn strollad ebet',
	'NOT_LEADER_OF_GROUP'			=> 'N\'hall ket an oberenn-mañ bezañ graet peogwir n\'oc\'h e-penn strollad ebet.',
	'NOT_MEMBER_OF_GROUP'			=> 'N\'hall ket an oberenn-mañ bezañ graet peogwir n\'oc\'h ket ezel ouzh ar strollad.',
	'NOT_RESIGN_FROM_DEFAULT_GROUP'	=> 'N\'oc\'h ket aotreet da guitaat ho strollad dre-ziouer.',
	
	'PRIMARY_GROUP'		=> 'Strollad kent',

	'REMOVE_SELECTED'		=> 'Tennañ an diuzad',

	'USER_GROUP_CHANGE'			=> 'Eus ar strollad "%1$s" da "%2$s"',
	'USER_GROUP_DEMOTE'			=> 'Paouez da vezañ e-penn',
	'USER_GROUP_DEMOTE_CONFIRM'	=> 'Ha sur oc\'h ho peus c\'hoant da baouez da vezañ e-penn ar strollad ?',
	'USER_GROUP_DEMOTED'		=> 'N\'oc\'h ket e-penn ar strollad ken.',
));

?>
