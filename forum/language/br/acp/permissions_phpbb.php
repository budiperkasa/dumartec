<?php
/**
* acp_permissions (phpBB Permission Set) [Brezhoneg]
*
* @package language
* @version $Id: permissions_phpbb.php,v 1.29 2007/10/04 15:07:24 acydburn Exp $
* @copyright (c) 2005 phpBB Group
* @license http://opensource.org/licenses/gpl-license.php GNU Public License
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

/**
*	MODDERS PLEASE NOTE
*	
*	You are able to put your permission sets into a separate file too by
*	prefixing the new file with permissions_ and putting it into the acp 
*	language folder.
*
*	An example of how the file could look like:
*
*	<code>
*
*	if (empty($lang) || !is_array($lang))
*	{
*		$lang = array();
*	}
*
*	// Adding new category
*	$lang['permission_cat']['bugs'] = 'Bugs';
*
*	// Adding new permission set
*	$lang['permission_type']['bug_'] = 'Bug Permissions';
*
*	// Adding the permissions
*	$lang = array_merge($lang, array(
*		'acl_bug_view'		=> array('lang' => 'Can view bug reports', 'cat' => 'bugs'),
*		'acl_bug_post'		=> array('lang' => 'Can post bugs', 'cat' => 'post'), // Using a phpBB category here
*	));
*
*	</code>
*/

// Define categories and permission types
$lang = array_merge($lang, array(
	'permission_cat'	=> array(
		'actions'		=> 'Oberennoù',
		'content'		=> 'Endalc\'had',
		'forums'		=> 'Foromoù',
		'misc'			=> 'Traoù all',
		'permissions'	=> 'Aotreoù',
		'pm'			=> 'Gerigoù Prevez',
		'polls'			=> 'Mouezhiadegoù',
		'post'			=> 'Kas kemennadennoù',
		'post_actions'	=> 'Oberoù ar c\'has kemennadennoù',
		'posting'		=> 'Kas kemennadennoù',
		'profile'		=> 'Pajenn-emginnig',
		'settings'		=> 'Dilennoù',
		'topic_actions'	=> 'Oberoù war ar sujedoù',
		'user_group'	=> 'Izili &amp; Strolladoù',
	),

	// With defining 'global' here we are able to specify what is printed out if the permission is within the global scope.
	'permission_type'	=> array(
		'u_'			=> 'Aotreoù an ezel',
		'a_'			=> 'Aotreoù ar merour',
		'm_'			=> 'Aotreoù ar c\'hasour',
		'f_'			=> 'Aotreoù ar forom',
		'global'		=> array(
			'm_'			=> 'Aotreoù ar c\'hasour hollek',
		),

	),
));

// User Permissions
$lang = array_merge($lang, array(
	'acl_u_viewprofile'	=> array('lang' => 'Gallout a ra gwelet pajennoù-emginnig, listenn an izili, hag hini ar re a zo kennasket', 'cat' => 'profile'),
	'acl_u_chgname'		=> array('lang' => 'Gallout a ra cheñch anv', 'cat' => 'profile'),
	'acl_u_chgpasswd'	=> array('lang' => 'Gallout a ra cheñch ger-tremen', 'cat' => 'profile'),
	'acl_u_chgemail'	=> array('lang' => 'Gallout a ra cheñch postel', 'cat' => 'profile'),
	'acl_u_chgavatar'	=> array('lang' => 'Gallout a ra cheñch skeudennig-emginnig', 'cat' => 'profile'),
	'acl_u_chggrp'		=> array('lang' => 'Gallout a ra cheñch strollad izili dre ziouer', 'cat' => 'profile'),

	'acl_u_attach'		=> array('lang' => 'Gallout a ra stagañ restroù', 'cat' => 'post'),
	'acl_u_download'	=> array('lang' => 'Gallout a ra pellgargañ restroù', 'cat' => 'post'),
	'acl_u_savedrafts'	=> array('lang' => 'Gallout a ra miourt brouilhoñsoù', 'cat' => 'post'),
	'acl_u_chgcensors'	=> array('lang' => 'Gallout a ra tremen dreist an eskemm gerioù', 'cat' => 'post'),
	'acl_u_sig'			=> array('lang' => 'Gallout a ra ouzhpennañ ur sinadur', 'cat' => 'post'),

	'acl_u_sendpm'		=> array('lang' => 'Gallout a ra kas Gerigoù Prevez', 'cat' => 'pm'),
	'acl_u_masspm'		=> array('lang' => 'Gallout a ra kas Gerigoù Prevez da veur a izili war an dro ha da strolladoù', 'cat' => 'pm'),
	'acl_u_readpm'		=> array('lang' => 'Gallout a ra lenn Gerigoù Prevez', 'cat' => 'pm'),
	'acl_u_pm_edit'		=> array('lang' => 'Gallout a ra kemm ar c\'hemennadennoù bet skrivet gantañ', 'cat' => 'pm'),
	'acl_u_pm_delete'	=> array('lang' => 'Gallout a ra tennañ Gerigoù Prevez diouzh e deuliad', 'cat' => 'pm'),
	'acl_u_pm_forward'	=> array('lang' => 'Gallout a ra treuzkas Gerigoù Prevez', 'cat' => 'pm'),
	'acl_u_pm_emailpm'	=> array('lang' => 'Gallout a ra kas Gerigoù Prevez dre bostel', 'cat' => 'pm'),
	'acl_u_pm_printpm'	=> array('lang' => 'Gallout a ra moullañ Gerigoù Prevez', 'cat' => 'pm'),
	'acl_u_pm_attach'	=> array('lang' => 'Gallout a ra stagañ restroù ouzh ar Gerigoù Prevez', 'cat' => 'pm'),
	'acl_u_pm_download'	=> array('lang' => 'Gallout a ra pellgargañ restroù er Gerigoù Prevez', 'cat' => 'pm'),
	'acl_u_pm_bbcode'	=> array('lang' => 'Gallout a ra ober gant ar BBCode er Gerigoù Prevez', 'cat' => 'pm'),
	'acl_u_pm_smilies'	=> array('lang' => 'Gallout a ra ober gant <i>smilies</i> er Gerigoù Prevez', 'cat' => 'pm'),
	'acl_u_pm_img'		=> array('lang' => 'Gallout a ra lakaat skeudennoù er Gerigoù Prevez', 'cat' => 'pm'),
	'acl_u_pm_flash'	=> array('lang' => 'Gallout a ra lakaat restroù Flash er Gerigoù Prevez', 'cat' => 'pm'),

	'acl_u_sendemail'	=> array('lang' => 'Gallout a ra kas posteloù dre ar forom', 'cat' => 'misc'),
	'acl_u_sendim'		=> array('lang' => 'Gallout a ra kas Gerigoù Prim', 'cat' => 'misc'),
	'acl_u_ignoreflood'	=> array('lang' => 'Gallout a ra kas kemennadennoù aliesoc\'h eget ma vez aotreet', 'cat' => 'misc'),
	'acl_u_hideonline'	=> array('lang' => 'Gallout a ra kuzhat e vezañs war ar forom', 'cat' => 'misc'),
	'acl_u_viewonline'	=> array('lang' => 'Gallout a ra gwelet an izili kuzh', 'cat' => 'misc'),
	'acl_u_search'		=> array('lang' => 'Gallout a ra klask traoù er forom', 'cat' => 'misc'),
));

// Forum Permissions
$lang = array_merge($lang, array(
	'acl_f_list'		=> array('lang' => 'Gallout a ra gwelet ar forom', 'cat' => 'post'),
	'acl_f_read'		=> array('lang' => 'Gallout a ra lenn kemenndennoù ar forom', 'cat' => 'post'),
	'acl_f_post'		=> array('lang' => 'Gallout a ra sevel sujedoù nevez', 'cat' => 'post'),
	'acl_f_reply'		=> array('lang' => 'Gallout a ra respont da sujedoù', 'cat' => 'post'),
	'acl_f_icons'		=> array('lang' => 'Gallout a ra implijout skeudennigoù evit ar c\'hemennadennoù pe ar sujedoù', 'cat' => 'post'),
	'acl_f_announce'	=> array('lang' => 'Gallout a ra kas kemennoù', 'cat' => 'post'),
	'acl_f_sticky'		=> array('lang' => 'Gallout a ra kas postoù-it', 'cat' => 'post'),

	'acl_f_poll'		=> array('lang' => 'Gallout a ra sevel mouezhiadegoù', 'cat' => 'polls'),
	'acl_f_vote'		=> array('lang' => 'Gallout a ra mouezhiañ', 'cat' => 'polls'),
	'acl_f_votechg'		=> array('lang' => 'Gallout a ra cheñch e vouezh', 'cat' => 'polls'),

	'acl_f_attach'		=> array('lang' => 'Gallout a ra stagañ restroù', 'cat' => 'content'),
	'acl_f_download'	=> array('lang' => 'Gallout a ra pellgargañ restroù', 'cat' => 'content'),
	'acl_f_sigs'		=> array('lang' => 'Gallout a ra ouzhpennañ ur sinadur', 'cat' => 'content'),
	'acl_f_bbcode'		=> array('lang' => 'Gallout a ra ober gant ar BBCode', 'cat' => 'content'),
	'acl_f_smilies'		=> array('lang' => 'Gallout a ra ober gant ar <i>smilies</i>', 'cat' => 'content'),
	'acl_f_img'			=> array('lang' => 'Gallout a ra kas skeudennoù', 'cat' => 'content'),
	'acl_f_flash'		=> array('lang' => 'Gallout a ra kas restroù flash', 'cat' => 'content'),

	'acl_f_edit'		=> array('lang' => 'Gallout a ra kemm ar c\'hemennadennoù bet kaset gantañ', 'cat' => 'actions'),
	'acl_f_delete'		=> array('lang' => 'Gallout a ra diverkañ ar c\'hemennadennoù bet savet gantañ', 'cat' => 'actions'),
	'acl_f_user_lock'	=> array('lang' => 'Gallout a ra prennañ ar sujedoù bet savet gantañ', 'cat' => 'actions'),
	'acl_f_bump'		=> array('lang' => 'Gallout a ra pignat sujedoù', 'cat' => 'actions'),
	'acl_f_report'		=> array('lang' => 'Gallout a ra ober danevelloù diwar-benn kemennadennoù', 'cat' => 'actions'),
	'acl_f_subscribe'	=> array('lang' => 'Gallout a ra heuliañ foromoù', 'cat' => 'actions'),
	'acl_f_print'		=> array('lang' => 'Gallout a ra moullañ sujedoù', 'cat' => 'actions'),
	'acl_f_email'		=> array('lang' => 'Gallout a ra treuzkas sujedoù dre bostel', 'cat' => 'actions'),

	'acl_f_search'		=> array('lang' => 'Gallout a ra klask traoù er forom', 'cat' => 'misc'),
	'acl_f_ignoreflood' => array('lang' => 'Gallout a ra kas kemennadennoù aliesoc\'h eget ma vez aotreet', 'cat' => 'misc'),
	'acl_f_postcount'	=> array('lang' => 'Kontañ ar c\'hemennadennoù nevez kaset e-touez niver re an ezel<br /><em>N\'ez a en-dro an dra-mañ nemet evit ar c\'hemennadennoù nevez.</em>', 'cat' => 'misc'),
	'acl_f_noapprove'	=> array('lang' => 'Gallout a ra kas kemennadennoù hep gortoz un asant', 'cat' => 'misc'),
));

// Moderator Permissions
$lang = array_merge($lang, array(
	'acl_m_edit'		=> array('lang' => 'Gallout a ra kemm kemennadennoù', 'cat' => 'post_actions'),
	'acl_m_delete'		=> array('lang' => 'Gallout a ra diverkañ kemennadennoù', 'cat' => 'post_actions'),
	'acl_m_approve'		=> array('lang' => 'Gallout a ra asantiñ kemennadennoù', 'cat' => 'post_actions'),
	'acl_m_report'		=> array('lang' => 'Gallout a ra serriñ ha diverkañ danevelloù', 'cat' => 'post_actions'),
	'acl_m_chgposter'	=> array('lang' => 'Galllout a ra cheñch kaser ar gemennadenn', 'cat' => 'post_actions'),

	'acl_m_move'	=> array('lang' => 'Gallout a ra dilec\'hiañ sujedoù', 'cat' => 'topic_actions'),
	'acl_m_lock'	=> array('lang' => 'Gallout a ra prennañ sujedoù', 'cat' => 'topic_actions'),
	'acl_m_split'	=> array('lang' => 'Gallout a ra troc\'hañ sujedoù e daou damm', 'cat' => 'topic_actions'),
	'acl_m_merge'	=> array('lang' => 'Gallout a ra lakaat sujedoù da gendeuziñ', 'cat' => 'topic_actions'),

	'acl_m_info'	=> array('lang' => 'Can view post details', 'cat' => 'misc'),
	'acl_m_warn'	=> array('lang' => 'Can issue warnings<br />Hollek eo an dilenn-mañ hepken, n\'emañ ket diouzh ar foromoù.', 'cat' => 'misc'), // This moderator setting is only global (and not local)
	'acl_m_ban'		=> array('lang' => 'Can manage bans<br />Hollek eo an dilenn-mañ hepken, n\'emañ ket diouzh ar foromoù.', 'cat' => 'misc'), // This moderator setting is only global (and not local)
));

// Admin Permissions
$lang = array_merge($lang, array(
	'acl_a_board'		=> array('lang' => 'Gallout a ra kemm dilennoù ar forom/klask hizivadennoù', 'cat' => 'settings'),
	'acl_a_server'		=> array('lang' => 'Gallout a ra kemm dilennoù ar servijour hag ar c\'hehentiñ', 'cat' => 'settings'),
	'acl_a_jabber'		=> array('lang' => 'Gallout a ra kemm dilennoù Jabber', 'cat' => 'settings'),
	'acl_a_phpinfo'		=> array('lang' => 'Gallout a ra gwelet dilennoù PHP', 'cat' => 'settings'),

	'acl_a_forum'		=> array('lang' => 'Gallout a ra ober war-dro aozadur ar foromoù', 'cat' => 'forums'),
	'acl_a_forumadd'	=> array('lang' => 'Gallout a ra ouzhpennañ foromoù nevez', 'cat' => 'forums'),
	'acl_a_forumdel'	=> array('lang' => 'Gallout a ra dilemel foromoù', 'cat' => 'forums'),
	'acl_a_prune'		=> array('lang' => 'Gallout a ra skubañ foromoù', 'cat' => 'forums'),

	'acl_a_icons'		=> array('lang' => 'Gallout a ra kemm skeudennigoù ar sujedoù, re ar c\'hemennadennoù, hag ar skeudennigoù-emginnig', 'cat' => 'posting'),
	'acl_a_words'		=> array('lang' => 'Gallout a ra kemm an erlec\'hiadennoù gerioù', 'cat' => 'posting'),
	'acl_a_bbcode'		=> array('lang' => 'Gallout a ra termeniñ balizennoù BBCode', 'cat' => 'posting'),
	'acl_a_attach'		=> array('lang' => 'Gallout a ra kemm an dilennoù a denn ouzh ar stagadennoù', 'cat' => 'posting'),

	'acl_a_user'		=> array('lang' => 'Gallout a ra merañ an izili<br /><em>Gallout a ra ivez gwelet an titouroù a vez roet gant ar merdeer diwar-benn an doare ma vez diskouezet al lec\'hienn</em>', 'cat' => 'user_group'),
	'acl_a_userdel'		=> array('lang' => 'Gallout a ra diverkañ/skubañ izili', 'cat' => 'user_group'),
	'acl_a_group'		=> array('lang' => 'Gallout a ra merañ strolladoù', 'cat' => 'user_group'),
	'acl_a_groupadd'	=> array('lang' => 'Gallout a ra ouzhpennañ strolladoù nevez', 'cat' => 'user_group'),
	'acl_a_groupdel'	=> array('lang' => 'Gallout a ra dilemel strolladoù', 'cat' => 'user_group'),
	'acl_a_ranks'		=> array('lang' => 'Gallout a ra merañ ar renkadoù', 'cat' => 'user_group'),
	'acl_a_profile'		=> array('lang' => 'Gallout a ra merañ takadoù personelaet ar bajenn-emginnig', 'cat' => 'user_group'),
	'acl_a_names'		=> array('lang' => 'Gallout a ra merañ an anvioù diaotre', 'cat' => 'user_group'),
	'acl_a_ban'			=> array('lang' => 'Gallout a ra merañ an harluoù', 'cat' => 'user_group'),

	'acl_a_viewauth'	=> array('lang' => 'Gallout a ra gwelet maskloù an aotreoù', 'cat' => 'permissions'),
	'acl_a_authgroups'	=> array('lang' => 'Gallout a ra kemm an aotreoù evit ar strolladoù unan hag unan', 'cat' => 'permissions'),
	'acl_a_authusers'	=> array('lang' => 'Gallout a ra kemm an aotreoù evit an izili unan hag unan', 'cat' => 'permissions'),
	'acl_a_fauth'		=> array('lang' => 'Gallout a ra kemm renkad aotreoù ar forom', 'cat' => 'permissions'),
	'acl_a_mauth'		=> array('lang' => 'Gallout a ra kemm renkad aotreoù ar c\'hasour', 'cat' => 'permissions'),
	'acl_a_aauth'		=> array('lang' => 'Gallout a ra kemm renkad aotreoù ar merour', 'cat' => 'permissions'),
	'acl_a_uauth'		=> array('lang' => 'Galloud a ra kemm renkad aotreoù an ezel', 'cat' => 'permissions'),
	'acl_a_roles'		=> array('lang' => 'Gallout a ra merañ ar perzhioù', 'cat' => 'permissions'),
	'acl_a_switchperm'	=> array('lang' => 'Gallout a ra implijout aotreoù unan all', 'cat' => 'permissions'),

	'acl_a_styles'		=> array('lang' => 'Gallout a ra merañ ar gwiskadurioù', 'cat' => 'misc'),
	'acl_a_viewlogs'	=> array('lang' => 'Gallout a ra gwelet an deizlevrioù', 'cat' => 'misc'),
	'acl_a_clearlogs'	=> array('lang' => 'Gallout a ra diverkañ deizlevrioù', 'cat' => 'misc'),
	'acl_a_modules'		=> array('lang' => 'Gallout a ra merañ moduloù', 'cat' => 'misc'),
	'acl_a_language'	=> array('lang' => 'Gallout a ra merañ pakadoù yezh', 'cat' => 'misc'),
	'acl_a_email'		=> array('lang' => 'Gallout a ra kas posteloù a-stroll', 'cat' => 'misc'),
	'acl_a_bots'		=> array('lang' => 'Gallout a ra merañ ar robotoù', 'cat' => 'misc'),
	'acl_a_reasons'		=> array('lang' => 'Gallout a ra merañ an danevelloù hag abegoù an nac\'hadennoù', 'cat' => 'misc'),
	'acl_a_backup'		=> array('lang' => 'Gallout a ra sevel un eilskouerenn-virout hag adkargañ unan ouzh an diaz-titouroù', 'cat' => 'misc'),
	'acl_a_search'		=> array('lang' => 'Gallout a ra klask dilennoù', 'cat' => 'misc'),
));

?>
