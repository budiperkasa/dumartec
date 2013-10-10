<?php
/**
*
* acp_forums [Brezhoneg]
*
* @package language
* @version $Id: forums.php 8479 2008-03-29 00:22:48Z naderman $
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

// Forum Admin
$lang = array_merge($lang, array(
	'AUTO_PRUNE_DAYS'			=> 'Buhez kas a-raok an emskubañ',
	'AUTO_PRUNE_DAYS_EXPLAIN'	=> 'An niver a zevezhioù abaoe ar gemennadenn ziwezhañ a-raok ma vefe skubet kuit ar sujed.',
	'AUTO_PRUNE_FREQ'			=> 'Frekañs an emskubañ',
	'AUTO_PRUNE_FREQ_EXPLAIN'	=> 'An niver a zevezhioù etre ar gwiriadennoù graet gant ar poellad-emskubañ.',
	'AUTO_PRUNE_VIEWED'			=> 'Buhez lenn a-raok an emskubañ',
	'AUTO_PRUNE_VIEWED_EXPLAIN'	=> 'An niver a zevezhioù abaoe m\'eo bet lennet ur gemennadenn evit ar wech ziwezhañ a-raok ma vefe skubet kuit ar sujed.',

	'COPY_PERMISSIONS'				=> 'Eilañ aotreoù adalek',
	'COPY_PERMISSIONS_ADD_EXPLAIN'	=> 'Ur wech bet krouet e vo ar memes aotreoù gant ar forom nevez ha gant an hini bet diuzet ganeoc\'h amañ. Ma n\'eus bet diuzet forom ebet, n\'hallo ar forom nevez bezañ gwelet gant den ebet keit ha ma ne vo ket bet roet aotreoù dezhañ.',
	'COPY_PERMISSIONS_EDIT_EXPLAIN'	=> 'Ma tiuzit evit eilañ an aotreoù e vo ar memes aotreoù gant ar forom nevez ha gant an hini diuzet. Adskrivet e vo an aotreoù nevez dreist an aotreoù a oa betek-henn gant ar forom. Ma ne vez diuzet forom ebet e vo miret an aotreoù a zo gant ar forom bremañ.',
	'CREATE_FORUM'					=> 'Krouñ ur forom nevez',

	'DECIDE_MOVE_DELETE_CONTENT'		=> 'Diverkañ an endalc\'had pe dilec\'hiañ davet ar forom',
	'DECIDE_MOVE_DELETE_SUBFORUMS'		=> 'Diverkañ an adforomoù pe dilec\'hiañ davet ar forom',
	'DEFAULT_STYLE'						=> 'Gwiskadur dre ziouer',
	'DELETE_ALL_POSTS'					=> 'Dilemel ar c\'hemennadennoù',
	'DELETE_SUBFORUMS'					=> 'Dilemel an adforomoù hag ar c\'hemennadennoù',
	'DISPLAY_ACTIVE_TOPICS'				=> 'Ober gant ar sujedoù oberiant',
	'DISPLAY_ACTIVE_TOPICS_EXPLAIN'		=> 'Ma tibabit an dra-mañ e vo diskouezet peseurt sujedoù a zo oberiant en adforom-mañ.',

	'EDIT_FORUM'					=> 'Kemm ar forom',
	'ENABLE_INDEXING'				=> 'Aotreañ da lakat war ur roll evit ar c\'hlask',
	'ENABLE_INDEXING_EXPLAIN'		=> 'Ma tibabit an dra-mañ e c\'hello kemennadennoù ar forom-mañ bezañ lakaet war ur roll evit ar c\'hlask.',
	'ENABLE_POST_REVIEW'			=> 'Aotreañ da adwelet ar c\'hemennadennoù',
	'ENABLE_POST_REVIEW_EXPLAIN'	=> 'Ma rit gant se e c\'hello an izili adwelet o c\'hemennadennoù ma\'z eus bet kaset re nevez e-keit ha ma oant o skrivañ o hini. Gwelloc\'h chom hep ober gant se war foromoù flapañ prim.',
	'ENABLE_RECENT'					=> 'Diskouez sujedoù oberiant',
	'ENABLE_RECENT_EXPLAIN'			=> 'Ma rit gant se e vo lakaet ar respontoù graet war ar forom-mañ e-barzh listenn ar sujedoù oberiant.',
	'ENABLE_TOPIC_ICONS'			=> 'Ober gant skeudennigoù-sujedoù',

	'FORUM_ADMIN'						=> 'Merañ ar forom',
	'FORUM_ADMIN_EXPLAIN'				=> 'N\'eus rumm ebet e phpBB3, war foromoù e vez diazezet pep tra. War pep forom c\'heller kaout adforomoù, ha dibabet e vez daoust hag-eñ e c\'hell bezañ kaset kemennadennoù en ur forom pe get (ma ne c\'hell ket eo evel ma oa ar rannoù a-gozh). Amañ e c\'hellit ouzhpennañ, kemm, diverkañ, prennañ, dibrennañ foromoù ha dibab dilennoùal. Ma\'z eo aet ho sujedoù ha kemennadennoù er-maez ouzh ar c\'henamzeriañ e c\'hellit ivez adkenamzeriañ anezho. <strong>Dav eo deoc\'h eilañ pe reiñ aotreoù d\'ar foromoù nevez-savet ganeoc\'h evit ma c\'hellfent bezañ gwellet.</strong>',
	'FORUM_AUTO_PRUNE'					=> 'Ober gant an emskubañ',
	'FORUM_AUTO_PRUNE_EXPLAIN'			=> 'Skubet e vo sujedoù kozh diouzh ar forom, dibabit buhez ha frekañs ar sujedoù amañ-dindan.',
	'FORUM_CREATED'						=> 'Krouet eo bet ar forom.',
	'FORUM_DATA_NEGATIVE'				=> 'N\'hall ket niveroù ar skubañ bezañ dindan 0.',
	'FORUM_DESC_TOO_LONG'				=> 'Re hir eo deskrivadur ar forom, 4000 arouez d\'ar muiañ e rank bezañ.',
	'FORUM_DELETE'						=> 'Dilemel ar forom',
	'FORUM_DELETE_EXPLAIN'				=> 'Gant ar furmskrid-mañ e vo posupl deoc\'h diverkañ ur forom. Ma oa aotreet da gas kemennadennoù en ur forom e vo tu deoc\'h dibab e pelec\'h e vo lakaet ar re a oa er forom-se.',
	'FORUM_DELETED'						=> 'Dilamet eo bet ar forom.',
	'FORUM_DESC'						=> 'Deskrivadur',
	'FORUM_DESC_EXPLAIN'				=> 'Forzh peseurt balizenn HTML lakaet amañ a vo diskouezet evel m\'emañ.',
	'FORUM_EDIT_EXPLAIN'				=> 'Gant ar furmskrid-mañ e vo tu deoc\'h personelaat ar forom. War aotreoù ar forom evit pep ezel pe strollad-izili e vez dibabet ar pezh a denn ouzh ar gasourien ha degemer pe get ar c\'hemennadennoù.',
	'FORUM_IMAGE'						=> 'Skeudenn ar forom',
	'FORUM_IMAGE_EXPLAIN'				=> 'Lec\'hiadur ur skeudenn a vefe staget ouzh ar forom-mañ, o loc\'hañ ouzh teuliad phpBB.',
	'FORUM_LINK_EXPLAIN'				=> 'URL klok (enni an doare da vont war internet, sk.: <samp>http://</samp>) al lec\'h a vo tizhet gant un ezel ma klik war ar forom-mañ, sk.: <samp>http://www.phpbb.com/</samp>.',
	'FORUM_LINK_TRACK'					=> 'Kontañ klikoù ul liamm',
	'FORUM_LINK_TRACK_EXPLAIN'			=> 'Kontet e vo pet gwech ez eus bet kliket war ul liamm.',
	'FORUM_NAME'						=> 'Anv ar forom',
	'FORUM_NAME_EMPTY'					=> 'Dav eo deoc\'h reiñ un anv d\'ar forom-mañ.',
	'FORUM_PARENT'						=> 'Forom endalc\'her',
	'FORUM_PASSWORD'					=> 'Ger-tremen ar forom',
	'FORUM_PASSWORD_CONFIRM'			=> 'Kadarnait ger-tremen ar forom',
	'FORUM_PASSWORD_CONFIRM_EXPLAIN'	=> 'N\'eus ezhomm da vezañ lakaet nemet ma vez dav ober gant ur ger-tremen evit mont war ar forom.',
	'FORUM_PASSWORD_EXPLAIN'			=> 'Ur ger-tremen a vo ezhomm evit tizhout ar forom-mañ, gwelloc\'h eo deoc\'h ober gant an aotreoù.',
	'FORUM_PASSWORD_UNSET'				=> 'Tennañ ger-tremen ar forom.',
	'FORUM_PASSWORD_UNSET_EXPLAIN'		=> 'Klikit amañ evit tennañ ger-tremen ar forom.',
	'FORUM_PASSWORD_OLD'				=> 'En un doare kozh eo stummet ger-tremen ar forom, ha rankout a rafe bezañ cheñchet.',
	'FORUM_PASSWORD_MISMATCH'			=> 'Direizh eo ar ger-tremen bet roet ganeoc\'h.',
	'FORUM_PRUNE_SETTINGS'				=> 'Dilennoù skubañ ar forom',
	'FORUM_RESYNCED'					=> 'Adkenamzeriet eo bet ar forom “%s”',
	'FORUM_RULES_EXPLAIN'				=> 'Diskouezet e vo reolennoù ar forom war forzh peseurt pajenn eus ar forom-mañ.',
	'FORUM_RULES_LINK'					=> 'Liamm davet reolennoù ar forom',
	'FORUM_RULES_LINK_EXPLAIN'			=> 'Amañ e c\'hellit lakaat ul liamm davet ar bajenn enni reolennoù ar forom. Diverket e vo ar reolennoù bet skrivet ganeoc\'h en a-raok gant al liamm-mañ.',
	'FORUM_RULES_PREVIEW'				=> 'Rakwelet eus reolennoù ar forom',
	'FORUM_RULES_TOO_LONG'				=> 'Dindan 4000 arouez e rank bezañ reolennoù ar forom.',
	'FORUM_SETTINGS'					=> 'Dilennoù ar forom',
	'FORUM_STATUS'						=> 'Statud ar forom',
	'FORUM_STYLE'						=> 'Gwiskadur ar forom',
	'FORUM_TOPICS_PAGE'					=> 'Sujedoù war bep pajenn',
	'FORUM_TOPICS_PAGE_EXPLAIN'			=> 'Ma n\'eo ket 0 a zo bet lakaet e tremeno an niver-mañ dreist an hini dre ziouer a vez lakaet evit peurrest ar foromoù.',
	'FORUM_TYPE'						=> 'Doare ar forom',
	'FORUM_UPDATED'						=> 'Kemmet eo bet titouroù ar forom.',

	'FORUM_WITH_SUBFORUMS_NOT_TO_LINK'		=> 'C\'hoant ho peus da lakaat ur forom adforomoù ennañ da vezañ ul liamm. A-raok ober kement-mañ eo dav deoc\'h dilec\'hiañ an holl adforomoù diouzh hennezh, peogwir pa vo hennezh deuet da vezañ ul liamm, ne vo ket posupl ken gwelet an adforomoù stag outañ.',

	'GENERAL_FORUM_SETTINGS'	=> 'Dilennoù hollek ar forom',

	'LINK'				=> 'Liamm',
	'LIST_INDEX'		=> 'Listennañ an adforom e-barzh alc\'hwez ar forom endalc\'her',
	'LIST_INDEX_EXPLAIN'	=> 'Ouzhpennet e vo ul liamm davet an adforom-mañ e-barzh an alc\'hwez evit kinnig ar forom endalc\'her ma vez dibabet an dilenn “listennañ an adforomoù en alc\'hwez”.',
	'LIST_SUBFORUMS'			=> 'listennañ an adforomoù en alc\'hwez',
	'LIST_SUBFORUMS_EXPLAIN'	=> 'Diskouez a ra adforomoù ur forom war ar roll hag e lec\'h all evel ul liamm e-barzh alc\'hwez ar forom-endalc\'her ma vez graet gant an dilenn “Listennañ an adforom e-barzh alc\'hwez ar forom endalc\'her” .',
	'LOCKED'			=> 'Prennet',

	'MOVE_POSTS_NO_POSTABLE_FORUM'	=> 'N\'haller ket kas kemennadennoù er forom bet dibabet ganeoc\'h evit dilec\'hiañ ar c\'hemennadennoù. Dibabit unan a c\'heller kas kemennadennoù ennañ.',
	'MOVE_POSTS_TO'					=> 'Dilec\'hiañ ar c\'hemennadennoù davet',
	'MOVE_SUBFORUMS_TO'				=> 'Dilec\'hiañ an adforomoù davet',

	'NO_DESTINATION_FORUM'			=> 'N\'ho peus resisaet forom ebet da zilec\'hiañ ar roadoù ennañ.',
	'NO_FORUM_ACTION'				=> 'N\'eo ket bet termenet ar pezh a zegouezho da roadoù ar forom-mañ.',
	'NO_PARENT'						=> 'Endalc\'her ebet',
	'NO_PERMISSIONS'				=> 'Chom hep eilañ an aotreoù',
	'NO_PERMISSION_FORUM_ADD'		=> 'N\'ho peus ket an aotreoù ret evit ouzhpennañ foromoù.',
	'NO_PERMISSION_FORUM_DELETE'	=> 'N\'ho peus ket an aotreoù ret evit dilemel foromoù.',

	'PARENT_IS_LINK_FORUM'		=> 'Ul liamm davet ur forom eo an endalc\'her bet roet ganeoc\'h. Ar foromoù-liammoù n\'int ket gouest da enderc\'hel foromoù all enno, setu dibabit ur forom all mar plij.',
	'PARENT_NOT_EXIST'			=> 'N\'eus ket ouzh an endalec\'her-mañ.',
	'PRUNE_ANNOUNCEMENTS'		=> 'Skubañ ar c\'hemennoù',
	'PRUNE_STICKY'				=> 'Skubañ ar postoù-it',
	'PRUNE_OLD_POLLS'			=> 'Skubañ ar vouezhiadegoù kozh',
	'PRUNE_OLD_POLLS_EXPLAIN'	=> 'Skubet e vo ar sujedoù n\'eus ket bet mouezhiet dezho abaoe ar memes niver a zevezhioù hag evit ar respontoù.',

	'REDIRECT_ACL'	=> 'N\'oc\'h ket aotreet da  %sdermeniñ aotreoù%s evit ar forom-mañ.',

	'SYNC_IN_PROGRESS'			=> 'Adkenamzeriañ ar forom',
	'SYNC_IN_PROGRESS_EXPLAIN'	=> 'Oc\'h adkenamzeriañ renkadur ar sujedoù %1$d/%2$d.',

	'TYPE_CAT'			=> 'Rann',
	'TYPE_FORUM'		=> 'Forom',
	'TYPE_LINK'			=> 'Liamm',

	'UNLOCKED'			=> 'Dibrennet',
));

?>
