<?php
/**
*
* acp_users [Brezhoneg]
*
* @package language
* @version $Id: users.php 8479 2008-03-29 00:22:48Z naderman $
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
	'ADMIN_SIG_PREVIEW'		=> 'Rakwelet ar sinadur',
	'AT_LEAST_ONE_FOUNDER'	=> 'N\'hallit ket lakaet ar saver-mañ da ezel boutin, dre ma rank bezañ d\'an debeutañ ur saver evit ar forom-mañ. M\'ho peus c\'hoant da cheñch statud ar saver-mañ, lakait un ezel all da saver ar forom a-raok.',

	'BAN_ALREADY_ENTERED'	=> 'An harlu-mañ a oa outañ c\'hoazh, setu n\'eus ket bet kemmet al listenn.',
	'BAN_SUCCESSFUL'		=> 'Ouzhpennet eo bet an harlu.',

	'CANNOT_BAN_FOUNDER'			=> 'N\'oc\'h ket aotreet da harluiñ saverien ar forom.',
	'CANNOT_BAN_YOURSELF'			=> 'N\'oc\'h ket aotreet d\'en em harluiñ ho-unan.',
	'CANNOT_DEACTIVATE_BOT'			=> 'N\'oc\'h ket aotreet da lakaat dizoberiant kontoù ar robotoù. Lakait kentoc\'h dizoberiant ar robot e-unan dre bajenn ar robotoù.',
	'CANNOT_DEACTIVATE_FOUNDER'		=> 'N\'oc\'h ket aotreet da lakaat dizoberiant kontoù saverien ar forom.',
	'CANNOT_DEACTIVATE_YOURSELF'	=> 'N\'oc\'h ket aotreet da lakaat dizoberiant ho kont deoc\'h ho-unan.',
	'CANNOT_FORCE_REACT_BOT'		=> 'N\'oc\'h ket aotreet da rediañ ur robot da enaouiñ e gont en-dro. Tremenit kentoc\'h dre bajenn ar robotoù.',
	'CANNOT_FORCE_REACT_FOUNDER'	=> 'N\'oc\'h ket aotreet da rediañ saverien ar forom da enaouiñ o c\'hontoù en-dro.',
	'CANNOT_FORCE_REACT_YOURSELF'	=> 'N\'oc\'h ket aotreet d\'en em rediañ ho-unan da enaouiñ ho kont en-dro.',
	'CANNOT_REMOVE_ANONYMOUS'		=> 'N\'oc\'h ket aotreet da zilemel kont ar gweladennerien.',
	'CANNOT_REMOVE_YOURSELF'		=> 'N\'oc\'h ket aotreet da zilemel ho kont deoc\'h ho-unan.',
	'CANNOT_SET_FOUNDER_IGNORED'		=> 'N\'oc\'h ket aotreet da lakaat izili ha n\'int ket degemeret da saverien ar forom.',
	'CANNOT_SET_FOUNDER_INACTIVE'	=> 'Dav eo deoc\'h degemer an izili a-raok lakaat anezho da saverien ar forom, un ezel oberiant hepken a c\'hell bezañ kemmet e zoare.',
	'CONFIRM_EMAIL_EXPLAIN'			=> 'N\ho peus ezhomm da resisaat an dra-mañ nemet ma cheñchit postel un ezel.',

	'DELETE_POSTS'			=> 'Diverkañ kemennadennoù',
	'DELETE_USER'			=> 'Dileml an ezel',
	'DELETE_USER_EXPLAIN'	=> 'Ma tiverket un ezel, n\'hallo ket bezañ kavet en-dro.',

	'FORCE_REACTIVATION_SUCCESS'	=> 'Rediet eo bet an ezel da enaouiñ e gont en-dro.',
	'FOUNDER'						=> 'Saver',
	'FOUNDER_EXPLAIN'				=> 'An holl aotreoù-merañ a zo gant saverien ar forom, ha n\'hallont bezañ harluet, dilamet kuit, pe kemmet o c\'hont gant den ma n\'eo ket gant ur saver e-unan.',

	'GROUP_APPROVE'					=> 'Degemer an ezel',
	'GROUP_DEFAULT'					=> 'Lakaat da strolald dre ziouer evit an ezel',
	'GROUP_DELETE'					=> 'Dilemel an ezel diouzh ar strollad',
	'GROUP_DEMOTE'					=> 'Tennañ an ezel diouzh penn ar strollad',
	'GROUP_PROMOTE'					=> 'Lakaat an ezel e-penn ar strollad',

	'IP_WHOIS_FOR'			=> 'whois IP evit %s',

	'LAST_ACTIVE'			=> 'Oberiant evit ar wech ziwezhañ',

	'MOVE_POSTS_EXPLAIN'	=> 'Dibabit davet peseurt forom e vo dilec\'hiet an holl gemennadennoù a zo bet kaset gant an ezel-mañ.',

	'NO_SPECIAL_RANK'		=> 'Renkad ispisial ebet',
	'NOT_MANAGE_FOUNDER'	=> 'Klasket ho peus ober war-dro kont ur saver ouzh ar forom. N\'eus nemet ur saver ouzh ar forom a c\'hell ober war-dro ur saver all ouzh ar forom.',

	'QUICK_TOOLS'			=> 'Binviji primm',

	'REGISTERED'			=> 'Emzelet',
	'REGISTERED_IP'			=> 'Emezelet adal an IP',
	'RETAIN_POSTS'			=> 'Mirout kemennadennoù',

	'SELECT_FORM'			=> 'Diuz ur furmskrid',
	'SELECT_USER'			=> 'diuz un ezel',

	'USER_ADMIN'					=> 'Ober war-dro an ezel',
	'USER_ADMIN_ACTIVATE'			=> 'Enaouiñ ar c\'hont',
	'USER_ADMIN_ACTIVATED'			=> 'Enaouet eo bet kont an ezel.',
	'USER_ADMIN_AVATAR_REMOVED'		=> 'Tennet eo bet ar skeudennig-emginnig diouzh kont an ezel.',
	'USER_ADMIN_BAN_EMAIL'			=> 'Harluiñ hervez ar postel',
	'USER_ADMIN_BAN_EMAIL_REASON'	=> 'Harluet eo bet ar postel war bajenn ober war-dro an izili',
	'USER_ADMIN_BAN_IP'				=> 'Harluiñ hervez an IP',
	'USER_ADMIN_BAN_IP_REASON'		=> 'Harluet eo bet an IP war bajenn ober war-dro an izili',
	'USER_ADMIN_BAN_NAME_REASON'	=> 'Harluet eo bet anv an ezel war bajenn ober war-dro an izili',
	'USER_ADMIN_BAN_USER'			=> 'Harluiñ an anv ezel',
	'USER_ADMIN_DEACTIVATE'			=> 'Lakaat ar c\'hont dizoberiant',
	'USER_ADMIN_DEACTIVED'			=> 'Lakaet eo bet kont an ezel dizoberiant.',
	'USER_ADMIN_DEL_ATTACH'			=> 'Dilemel an holl stagadennoù',
	'USER_ADMIN_DEL_AVATAR'			=> 'Dilemel ar skeudennig-emginnig',
	'USER_ADMIN_DEL_POSTS'			=> 'Diverkañ an holl gemennadennoù',
	'USER_ADMIN_DEL_SIG'			=> 'Diverkañ ar sinadur',
	'USER_ADMIN_EXPLAIN'			=> 'Amañ e c\'hellit cheñch an titouroù diwar-benn an izili ha dilennoù ispisial all.',
	'USER_ADMIN_FORCE'				=> 'Rediañ an adenaouiñ',
	'USER_ADMIN_MOVE_POSTS'			=> 'Dilec\'hiañ an holl gemennadennoù',
	'USER_ADMIN_SIG_REMOVED'		=> 'Diverket eo bet ar sinadur diouzh kont an ezel.',
	'USER_ATTACHMENTS_REMOVED'		=> 'dilamet eo bet an holl stagadennoù a oa bet graet gant an ezel-mañ.',
	'USER_AVATAR_UPDATED'			=> 'Kemmet eo bet titouroù skeudennig-emginnig an ezel.',
	'USER_CUSTOM_PROFILE_FIELDS'	=> 'Takadoù personelaet er bajenn-emginnig',
	'USER_DELETED'					=> 'Diverket eo bet an ezel.',
	'USER_GROUP_ADD'				=> 'Ouzhpennañ an ezel d\'ur strollad',
	'USER_GROUP_NORMAL'				=> 'Ezel eo ouzh ar strollad termenet gant an ezel',
	'USER_GROUP_PENDING'			=> 'War-c\'hortoz emañ bezañ ezel ouzh ar strollad',
	'USER_GROUP_SPECIAL'			=> 'Ezel eo ouzh ar strollad raktermenet',
	'USER_NO_ATTACHMENTS'         => 'N\'eus restr staget ebet da ziskouez.',
	'USER_OVERVIEW_UPDATED'			=> 'Kemmet eo bet titouroù an ezel',
	'USER_POSTS_DELETED'			=> 'Diverket eo bet holl gemennadennoù an ezel-mañ.',
	'USER_POSTS_MOVED'				=> 'Dilec\'hiet eo bet kemennadennoù an ezel davet ar forom bal.',
	'USER_PREFS_UPDATED'			=> 'Kemmet eo bet gwellvezioù an ezel.',
	'USER_PROFILE'					=> 'Pajenn-emginnig an ezel',
	'USER_PROFILE_UPDATED'			=> 'Kemmet eo bet pajenn-emginnig an ezel',
	'USER_RANK'						=> 'Renkad an ezel',
	'USER_RANK_UPDATED'				=> 'Kemmet eo bet renkad an ezel',
	'USER_SIG_UPDATED'				=> 'Kemmet eo bet sinadur an ezel.',
	'USER_TOOLS'					=> 'binviji diazez',
));

?>
