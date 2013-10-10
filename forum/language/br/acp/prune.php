<?php
/**
*
* acp_prune [Brezhoneg]
*
* @package language
* @version $Id: prune.php,v 1.14 2007/10/04 15:07:24 acydburn Exp $
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

// User pruning
$lang = array_merge($lang, array(
	'ACP_PRUNE_USERS_EXPLAIN'	=> 'Amañ e c\'hellit dilemel izili diouzh ar forom, pe o lakaat dizoberiant. Doareoù lies a zo d\'ober kement-mañ, diouzh an niver a gemennadennoù, pe diouzh ar wech iwezhañ ma\'z int bet oberiant, h.a.. Gallout a rit ivez ober gant meur a zezverk asambles. Da skouer, gallout a rit skubañ kuit an izili ha n\'int ket bet oberiant abaoe an 01/01/2002 hag o deus kaset nebeutoc\'h evit 10 kemennadenn. Gallout a rit ivez lakaat diouzhtu ul listenn izili er c\'hombod, ha neuze ne vo ket graet diouzh an dezverkoù. diwallit gant an aezamant-mañ ! Ur wech dilamet un ezel kuit, n\'haller ober netra ken.',

	'DEACTIVATE_DELETE'			=> 'Lakaat dizoberiant pe dilemel',
	'DEACTIVATE_DELETE_EXPLAIN'	=> 'Dibabit daoust ha lakaet e vo an izili dizoberiant pe dilamet e vint kuit. Ma vezont diverket, ne vo ket tu da vont war-giz !',
	'DELETE_USERS'				=> 'Dilemel',
	'DELETE_USER_POSTS'			=> 'Diverkañ kemennadennoù an ezel bet skubet kuit',
	'DELETE_USER_POSTS_EXPLAIN' => 'Diverket e vo ar c\'hemennadennoù a oa bet kaset gant an ezel a vo dilamet kuit. N\'eus efed ebet gant kement-mañ ma vezont lakaet dizoberiant hepken.',

	'JOINED_EXPLAIN'			=> 'Roit un deiziad ar stumm <kbd>BBBB-MM-DD</kbd> ganti.',

	'LAST_ACTIVE_EXPLAIN'		=> 'roit un deiziad ar stumm <kbd>BBBB-MM-DD</kbd> ganti.',

	'PRUNE_USERS_LIST'				=> 'Izili da skubañ kuit',
	'PRUNE_USERS_LIST_DELETE'		=> 'Gant an dezverkoù bet roet ganeoc\'h evit skubañ izili kuit e vo dilamel kuit ar c\'hontoù da heul.',
	'PRUNE_USERS_LIST_DEACTIVATE'	=> 'Gant an dezverkoù bet roet ganeoc\'h evit skubañ izili kuit e vo lakaet dizoberiant ar c\'hontoù da heul.',

	'SELECT_USERS_EXPLAIN'		=> 'Roit anv izili resis, ha ganto e vo graet, kentov eget gant an dezverkoù bet rot ganeoc\'h uheloc\'h.',

	'USER_DEACTIVATE_SUCCESS'	=> 'Lakaet eo bet an izili diuzet dizoberiant.',
	'USER_DELETE_SUCCESS'		=> 'Dilamet eo bet kuit an izili diuzet.',
	'USER_PRUNE_FAILURE'		=> 'N\'eus ezel ebet o klotañ gant ar pezh a zo bet dibabet ganeoc\'h.',

	'WRONG_ACTIVE_JOINED_DATE'	=> 'Direizh eo an deiziad bet roet ganeoc\'h, ar stumm <kbd>BBBB-MM-DD</kbd> a rank bezañ ganti.',
));

// Forum Pruning
$lang = array_merge($lang, array(
	'ACP_PRUNE_FORUMS_EXPLAIN'	=> 'Diverket e vo an holl sujedoù ha n\'eus bet kaset respont ebet dezho, pe n\'int ket bet lennet abaoe an amzer bet dibabet ganeoc\'h. Ma ne roit niver ebet e vo diverket an holl sujedoù. Dre ziouer, ne vo ket diverket ar vouezhiadegoù o vont c\'hoazh en-dro, ar sujedoù pegus, nag ar c\'hemennoù.',

	'FORUM_PRUNE'		=> 'Skubañ ar forom',

	'NO_PRUNE'			=> 'N\'eus bet skubet forom ebet.',

	'SELECTED_FORUM'	=> 'Forom diuzet',
	'SELECTED_FORUMS'	=> 'Foromoù diuzet',

	'POSTS_PRUNED'					=> 'Kemennadennoù bet skubet kuit',
	'PRUNE_ANNOUNCEMENTS'			=> 'Skubañ ar c\'hemennoù',
	'PRUNE_FINISHED_POLLS'			=> 'Skubañ ar vouezhiadegoù echu',
	'PRUNE_FINISHED_POLLS_EXPLAIN'	=> 'Diverket e vo an holl vouezhiadegoù eo echu ar mare evit mouezhiañ.',
	'PRUNE_FORUM_CONFIRM'			=> 'Ha sur oc\'h ho peus c\'hoant da skubañ ar foromoù diuzet gant an dezverkoù bet resisaet ganeoc\'h ? Ur wech diverket, n\'hall ket ur gemennadenn nag ur sujed bezañ adkavet.',
	'PRUNE_NOT_POSTED'				=> 'Devezhioù abaoe ar gemennadenn ziwezhañ',
	'PRUNE_NOT_VIEWED'				=> 'Devezhioù abaoe al lennadenn ziwezhañ',
	'PRUNE_OLD_POLLS'				=> 'Skubañ ar vouezhiadegoù kozh',
	'PRUNE_OLD_POLLS_EXPLAIN'		=> 'Dilamet e vo ar vouezhiadegoù n\'eus ket mouezhiet dezho abaoe an niver a zevezhioù abaoe ar gemennadenn ziwezhañ.',
	'PRUNE_STICKY'					=> 'Skubañ ar sujedoù pegus',
	'PRUNE_SUCCESS'					=> 'Skubet eo bet ar foromoù.',

	'TOPICS_PRUNED'		=> 'Skubet eo bet ar sujedoù',
));

?>
