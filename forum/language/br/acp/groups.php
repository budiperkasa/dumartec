<?php
/**
*
* acp_groups [Brezhoneg]
*
* @package language
* @version $Id: groups.php 8634 2008-06-09 13:05:34Z Kellanved $
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
	'ACP_GROUPS_MANAGE_EXPLAIN'		=> 'Adal ar bajenn-mañ e c\'hellit merañ ar pezh a den ouzh ar strolladoù-izili. Gallout a rit krouiñ, kemm, ha diverkañ strolladoù. Gallout a rit lakaat izili e-penn strolladoù, dibab daoust ha digor pe get eo ar strollad d\'an izili nevez, daoust ha kzh eo pe get, ha reiñ un deskrivadur ouzh ar strollad.',
	'ADD_USERS'						=> 'Ouzhpennañ izili',
	'ADD_USERS_EXPLAIN'				=> 'Amañ e c\'hellit ouzhpennañ izili d\'ur strollad. Gallout a rit dibab daoust hag-eñ e teuio ar strollad da vezañ hini dre ziouer an izili diuzet. Gallout a rit ivez lakaat anezho e-penn ar strollad. Lakait pep anv ezel war ul linenn nevez.',

	'COPY_PERMISSIONS'				=> 'Eilañ aotreoù adalek',
	'COPY_PERMISSIONS_EXPLAIN'		=> 'Ur wech bet krouet e vo ar memes aotreoù gant ar strollad nevez ha gant an hini a vo dibabet amañ.',
	'CREATE_GROUP'					=> 'Krouiñ ur strollad nevez',

	'GROUPS_NO_MEMBERS'				=> 'N\'eus ezel ebet er strollad-mañ',
	'GROUPS_NO_MODS'				=> 'N\'eus den e-penn ar strollad',
	'GROUP_APPROVE'					=> 'Degemer an ezel',
	'GROUP_APPROVED'				=> 'Izili degemeret',
	'GROUP_AVATAR'					=> 'Skeudennig ar strollad',
	'GROUP_AVATAR_EXPLAIN'			=> 'War Pajenn ar Strollad e vo diskouezet ar skeudennig.',
	'GROUP_CLOSED'					=> 'Serret',
	'GROUP_COLOR'					=> 'Liv ar strollad',
	'GROUP_COLOR_EXPLAIN'			=> 'Al liv ma vo diskouezet izili ar strollad . Ma ne lakait netra e vo graet gant an hini dre ziouer.',
	'GROUP_CONFIRM_ADD_USER'      => 'Ha sur oc\'h ho peus c\'hoant da ouzhpennañ an ezel %1$s d\'ar strollad ?',
	'GROUP_CONFIRM_ADD_USERS'      => 'Ha sur oc\'h ho peus c\'hoant da ouhpennañ an izili %1$s d\'ar strollad ?',
	'GROUP_CREATED'					=> 'Krouet eo bet ar strollad.',
	'GROUP_DEFAULT'					=> 'Ober eus ar strollad-mañ an hini dre ziouer evit an ezel',
	'GROUP_DEFS_UPDATED'			=> 'Lakaet eo bet ar strollad dre ziouer evit an holl izili bet diuzet.',
	'GROUP_DELETE'					=> 'Tennañ an ezel diouzh ar strollad',
	'GROUP_DELETED'					=> 'Diverket eo bet an ezel diouzh ar strollad, ha kemmet e strollad dre ziouer.',
	'GROUP_DEMOTE'					=> 'Tennañ an ezel diouzh penn ar strollad',
	'GROUP_DESC'					=> 'Deskrivadur ar strollad',
	'GROUP_DETAILS'					=> 'Titouroù ar strollad',
	'GROUP_EDIT_EXPLAIN'			=> 'Amañ e c\'hellit kemm ur strollad a zo outañ c\'hoazh. Gallout a rit kemm e anv, e zeskrivadur, e zoare (digor pe serret, ...). Gallout a rit ivez termeniñ livioù pe renk izili ur strollad. Tremen a raio ar c\'hemmoù bet graet amañ dreist dilennoù hiniennel an izili. Gallout a raio an izili mont dreist da zilennoù o strollad evit o skeudennig-emginnig da c\'houde, nemet ma ne vefe ket bet aotreet ganeoc\'h.',
	'GROUP_ERR_USERS_EXIST'			=> 'Izili ouzh ar strollad eo dija ar re a zo bet roet ganeoc\'h.',
	'GROUP_FOUNDER_MANAGE'			=> 'Merañ gant ar grouerien hepken',
	'GROUP_FOUNDER_MANAGE_EXPLAIN'	=> 'Ar grouerien hepken a c\'hello merañ ar strollad-mañ. An izili gant an aotreomù a zere a c\'hello atav gwelet ar strolald ha piv a zo ezel outañ.',
	'GROUP_HIDDEN'					=> 'Kuzh',
	'GROUP_LANG'					=> 'Yezh ar strollad',
	'GROUP_LEAD'					=> 'Re e-penn ar strollad',
	'GROUP_LEADERS_ADDED'			=> 'Ouzhpennet eo bet an izili e-penn ar strollad.',
	'GROUP_LEGEND'					=> 'Diskouez ar strollad en alc\'hwez',
	'GROUP_LIST'					=> 'Izili ar strollad',
	'GROUP_LIST_EXPLAIN'			=> 'Amañ emañ listenn an holl dud a zo ezel ouzh ar strollad evit ar mare. Gallout a rit dilemel izili dioutañ (nemet e strolladoù ispisial \'zo n\'eo ket posupl) pe ouzhpennañ re nevez.',
	'GROUP_MEMBERS'					=> 'Izili ar strollad',
	'GROUP_MEMBERS_EXPLAIN'			=> 'Amañ ez eus ul listenn ouzh holl izili ar strollad, hag o ferzh ennañ : ar re a zo e-penn, ar re a zo o c\'hortoz bezañ degemeret, hag ar re all. Amañ e c\'hellit merañ koulz piv a zo er strollad ha petra eo o ferzh ennañ. Evit tennañ unan diouzh penn ur strollad, met lezet anezhañ er strollad memes tra, grit gant Tennañ diouzh Penn kentoc\'h eget gant Dilemel. Er memes doare, grit gant Lakaat e-Penn evit lakaat un ezel e-penn ar strollad.',
	'GROUP_MESSAGE_LIMIT'			=> 'Niver brasañ a C\'herigoù Prevez aotreet dre deuliad evit izili ar strollad',
	'GROUP_MESSAGE_LIMIT_EXPLAIN'	=> 'Tremen a ra an dibab-mañ dreist an hini a vez graet dre ziouer evit an niver brasañ a C\'herigoù Prevez aotreet dre deuliad. Ma lakait 0 e vo graet gant an talvoud dre ziouer.',
	'GROUP_MODS_ADDED'				=> 'Ouzhpennet ez eus bet tud e-penn ar strollad.',
	'GROUP_MODS_DEMOTED'			=> 'Tennet ez eus bet tud diouzh penn ar strollad.',
	'GROUP_MODS_PROMOTED'			=> 'Lakaet ez eus bet izili e-penn ar strollad.',
	'GROUP_NAME'					=> 'Anv ar strollad',
	'GROUP_NAME_TAKEN'				=> 'Ur strollad a zo anvet evel-mañ c\'hoazh, grit gant un anv all mar-plij.',
	'GROUP_OPEN'					=> 'Digor',
	'GROUP_PENDING'					=> 'Izili war-c\'hortoz',
	'GROUP_PROMOTE'					=> 'Lakaat e-penn ar strollad',
	'GROUP_RANK'					=> 'Renkad ar strollad',
	'GROUP_RECEIVE_PM'				=> 'Gouest eo ar strollad da zegemer Gerigoù Prevez',
	'GROUP_RECEIVE_PM_EXPLAIN'		=> 'Ne vez ket aotreet ar strolladoù kuzh da zegemer Gerigoù Prevez, ma vefe lakaet Ya pe Get amañ.',
	'GROUP_REQUEST'					=> 'Goulenn',
	'GROUP_SETTINGS_SAVE'			=> 'Dilennoù ledan ar strollad',
	'GROUP_TYPE'					=> 'Doare ar strollad',
	'GROUP_TYPE_EXPLAIN'			=> 'Amañ e vez termenet peseurt izili a c\'hell emezelañ en ur strollad, pe gwelet ar strollad-mañ.',
	'GROUP_UPDATED'					=> 'Kemmet eo bet gwellvezioù ar strollad.',

	'GROUP_USERS_ADDED'				=> 'Ouzhpennet eo bet an izili d\'ar strollad.',
	'GROUP_USERS_EXIST'				=> 'Er strollad emañ an izili diuzet c\'hoazh.',
	'GROUP_USERS_REMOVE'			=> 'Tennet eo bet an izili diouzh ar strollad, ha kemmet o strollad dre-ziouer.',

	'MAKE_DEFAULT_FOR_ALL'	=> 'Lakaat da strollad dre ziouer evit forzh peseurt ezel',
	'MEMBERS'				=> 'Izili',

	'NO_GROUP'					=> 'N\'eus bet resisaet strollad ebet.',
	'NO_GROUPS_CREATED'			=> 'N\'eus bet krouet strollad ebet evit c\'hoazh.',
	'NO_PERMISSIONS'			=> 'Chom hep eilañ an aotreoù',
	'NO_USERS'					=> 'N\'ho peus roet ezel ebet.',
	'NO_USERS_ADDED'			=> 'N\'eus bet ouzhpennet ezel ebet d\'ar strollad.',
	'NO_VALID_USERS'			=> 'N\'ho peus ket roet anv un ezel a glot gant an oberenn-mañ.',

	'SPECIAL_GROUPS'			=> 'Strolladoù termenet en a-raok',
	'SPECIAL_GROUPS_EXPLAIN'	=> 'Strolladoù ispisial eo ar strolladoù-mañ, n\'hallont ket bezañ diverket pe kemmet diouzhtu. Gallout a rit memes tra ouzhpennañ izili dezho, ha kemm un nebeud dilennoù diazez.',

	'TOTAL_MEMBERS'				=> 'Izili',

	'USERS_APPROVED'				=> 'Degemeret eo bet an izili.',
	'USER_DEFAULT'					=> 'Dre ziouer evit an ezel',
	'USER_DEF_GROUPS'				=> 'Strolladoù termenet gant an ezel',
	'USER_DEF_GROUPS_EXPLAIN'		=> 'Ganeoc\'h pe gant ur merour all eo bet krouet ar strolladoù-mañ. Gallout a rit ober war-dro ar re a zo ezel hag ar re n\'int ket, kemm perzhioù ar strollad, ha diverkañ ar strollad zoken.',
	'USER_GROUP_DEFAULT'			=> 'Lakaat da strollad dre ziouer',
	'USER_GROUP_DEFAULT_EXPLAIN'	=> 'Ma tibabit an dra-mañ e vo lakaet ar strollad da strollad dre ziouer evit an izili nevez-ouzhpennet.',
	'USER_GROUP_LEADER'				=> 'Lakaet e-penn ar strollad',
));

?>
