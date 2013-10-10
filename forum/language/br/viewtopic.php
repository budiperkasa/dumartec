<?php
/**
*
* viewtopic [Brezhoneg]
*
* @package language
* @version $Id: viewtopic.php,v 1.20 2007/10/29 13:39:34 kellanved Exp $
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
	'ATTACHMENT'						=> 'Stagadenn',
	'ATTACHMENT_FUNCTIONALITY_DISABLED'	=> 'Dizoberiant eo bet lakaet ar stagañ restroù.',

	'BOOKMARK_ADDED'		=> 'Lakaet eo bet ar sujed e-touez ar sinedoù.',
	'BOOKMARK_REMOVED'		=> 'Tennet eo bet ar sujed eus ar sinedoù.',
	'BOOKMARK_TOPIC'		=> 'Lakaat ar sujed e-touez ar sinedoù',
	'BOOKMARK_TOPIC_REMOVE'	=> 'Remove from bookmarks',
	'BUMPED_BY'				=> 'Diskennet evit ar wech ziwezhañ gant %1$s d\'an %2$s.',
	'BUMP_TOPIC'			=> 'Diskenn ar sujed',

	'CODE'					=> 'Tarzh',

	'DELETE_TOPIC'			=> 'Diverkañ ar sujed',
	'DOWNLOAD_NOTICE'		=> 'N\'o peus ket an aotreoù evit gwelet stagadennoù ar c\'hemennadenn-mañ.',

	'EDITED_TIMES_TOTAL'	=> 'Bet kemmet gant %1$s d\'an %2$s evit ar wech ziwezhañ, bet kemmet %3$d gwech en holl.',
	'EDITED_TIME_TOTAL'		=> 'Bet kemmet gant %1$s d\'an %2$s evit ar wech ziwezhañ, bet kemmet %3$d wech en holl.',
	'EMAIL_TOPIC'			=> 'Kas ur postel',
	'ERROR_NO_ATTACHMENT'	=> 'N\'eus ket ken ouzh ar stagadenn bet diuzet.',

	'FILE_NOT_FOUND_404'	=> 'N\'eus ket ouzh ar restr <strong>%s</strong>.',
	'FORK_TOPIC'			=> 'Eilañ ar sujed',

	'LINKAGE_FORBIDDEN'		=> 'N\'oc\'h ket aotreet da welet al lec\'hienn-ùañ, na da bellgargañ tra pe dra outañ, na da vont war e liammoù, pe da sevel liammoù outañ.',
	'LOGIN_NOTIFY_TOPIC'	=> 'Kelaouet oc\'h bet diwar-benn ar sujed-mañ, bezañ anavezet gant ar forom evit gallout lenn anezhañ.',
	'LOGIN_VIEWTOPIC'		=> 'Ret eo ma vefec\'h emezelet hag anavezet gant ar forom evit gallout lenn ar sujed-mañ.',

	'MAKE_ANNOUNCE'				=> 'Lakaat da “g/Kemenn”',
	'MAKE_GLOBAL'				=> 'Lakaat da “Hollek”',
	'MAKE_NORMAL'				=> 'Lakaat da “Sujed Boutin”',
	'MAKE_STICKY'				=> 'Lakaat da “Post-it”',
	'MAX_OPTIONS_SELECT'		=> '<strong>%d</strong> dilenn hepken a c\'hellit dibab.',
	'MAX_OPTION_SELECT'			=> '<strong>1</strong> dilenn hepken a c\'hellit dibab.',
	'MISSING_INLINE_ATTACHMENT'	=> 'Ar stagadenn <strong>%s</strong> n\'emañ ket da gaout ken',
	'MOVE_TOPIC'				=> 'Dilec\'hiañ ar sujed',

	'NO_ATTACHMENT_SELECTED'=> 'N\'ho peus diuzet stagadenn ebet da welet pe da bellgargañ.',
	'NO_NEWER_TOPICS'		=> 'N\'eus sujed neveshoc\'h ebet er forom.',
	'NO_OLDER_TOPICS'		=> 'N\'eus sujed koshoc\'h ebet er forom.',
	'NO_UNREAD_POSTS'		=> 'Lennet eo bet holl gemennadennoù ar sujed-mañ.',
	'NO_VOTE_OPTION'		=> 'Dav eo deoc\'h dibab un dilenn pa vouezhiit.',
	'NO_VOTES'				=> 'No votes',

	'POLL_ENDED_AT'			=> 'Mouezhaideg echu d\'an %s',
	'POLL_RUN_TILL'			=> 'Mouezhiadeg a echu d\'an %s',
	'POLL_VOTED_OPTION'		=> 'Evit an dilenn-mañ ho peus mouezhiet',
	'PRINT_TOPIC'			=> 'Moullañ ar gwel',

	'QUICK_MOD'				=> 'Binviji kuñvaat buan',
	'QUOTE'					=> 'Meneg',

	'REPLY_TO_TOPIC'		=> 'Respont d\'ar sujed',
	'RETURN_POST'			=> '%Distreiñ d\'ar gemennadenn%s',

	'SUBMIT_VOTE'			=> 'Mouezhiañ',

	'TOTAL_VOTES'			=> 'Mouezhioù en holl',

	'UNLOCK_TOPIC'			=> 'Dibrennañ ar sujed',

	'VIEW_INFO'				=> 'Titouroù diwar-benn ar gemennadenn',
	'VIEW_NEXT_TOPIC'		=> 'Sujed da heul',
	'VIEW_PREVIOUS_TOPIC'	=> 'Sujed kent',
	'VIEW_RESULTS'			=> 'Gwelet an disoc\'hoù',
	'VIEW_TOPIC_POST'		=> '1 c\'hemennadenn',
	'VIEW_TOPIC_POSTS'		=> '%d kemennadenn',
	'VIEW_UNREAD_POST'		=> 'Kemennadenn kentañ n\'eo ket bet lennet',
	'VISIT_WEBSITE'			=> 'WWW',
	'VOTE_SUBMITTED'		=> 'Mouezhiet ho peus.',
	'VOTE_CONVERTED'		=> 'Ne vez ket aotreet da cheñch ar mouezhioù evit ar vouezhiadegoù troet diwar foromoù all.',

));

?>
