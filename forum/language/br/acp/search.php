<?php
/**
*
* acp_search [Brezhoneg]
*
* @package language
* @version $Id: search.php,v 1.21 2007/10/04 15:07:24 acydburn Exp $
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
	'ACP_SEARCH_INDEX_EXPLAIN'				=> 'Amañ e c\'hellit merañ rolloù ar poelladoù klask. Dre ma ne vez graet nemet gant ur poellad klask e c\'hellit diverkañ ar rolloù n\'ho peus implij ebet outo. Goude bezañ bet kemmet dilennoù \'zo en enklask (da skouer, an niver a arouezioù d\'ar muiañ pe d\'an nebeutañ er gerioù) e vefe talvoudus adkrouiñ ar roll evit ma kemerfe ar c\'hemmoù-mañ e kont.',
	'ACP_SEARCH_SETTINGS_EXPLAIN'			=> 'Amañ e c\'hellit termeniñ peseurt poelladoù a graet ganto evit listennañ ar c\'hemennadennoù ha kas an enklaskoù da benn. Gallout a rit dibab ur bern dilennoù lies o do ul levezon war ar galloudegezh a vo goulennet digant an urzhiataerez evit an oberenn. Lod eus an dilennoù a zo heñvel evit an holl poelladoù enklask.',

	'COMMON_WORD_THRESHOLD'					=> 'Feur ar gerioù boutin',
	'COMMON_WORD_THRESHOLD_EXPLAIN'			=> 'Ar gerioù a vo kavet un dregantad bras outo en holl gemenandennoù a vo gwelet evel gerioù boutin. Ne vint ket kemeret e kont e-pad an enklaskoù. Lakait 0 evit chom hep ober gant an dra-mañ. N\'ez a en-dro nemet pa vez ouzhpenn 100 kemennadenn war ar forom.',
	'CONFIRM_SEARCH_BACKEND'				=> 'Ha sur oc\'h ho peus c\'hoant d\'ober gant ur poellad all evit an enklask ? Goude bezañ bet kemmet ar poellad e vo dav deoc\'h krouiñ ur roll klask nevez evitañ. Ma ne soñjit ket distreiñ d\'ar poellad kozh eo kenkoulz deoc\'h dilemel ar roll gozh az a gantañ, kement ha gounid plas.',
	'CONTINUE_DELETING_INDEX'				=> 'Kenderc\'hel gant an oberenn skarzhañ diouzh ar roll',
	'CONTINUE_DELETING_INDEX_EXPLAIN'		=> 'Kroget ez eus bet gant un oberenn skarzhañ titoroù diouzh ar roll. M\'ho peus c\'hoant da dizhout pajenn roll ar c\'hlask e vo dav deoc\'h kas anezhi betek penn, pe freuzañ anezhi.',
	'CONTINUE_INDEXING'						=> 'Kenderc\'hel gant an oberenn lakaat war ar roll ',
	'CONTINUE_INDEXING_EXPLAIN'				=> 'Kroget ez eus bet gant un oberenn lakaat titouroù war ar roll. M\'ho peus c\'hoant da dizhout pajenn roll ar c\'hlask e vo dav deoc\'h kas anezhi betek penn, pe freuzañ anezhi.',
	'CREATE_INDEX'							=> 'Krouiñ ur roll',

	'DELETE_INDEX'							=> 'Dilemel ur roll',
	'DELETING_INDEX_IN_PROGRESS'			=> 'O vezañ diverket emañ ar roll',
	'DELETING_INDEX_IN_PROGRESS_EXPLAIN'	=> 'Emañ poellad ar c\'hlask o naetaat ar roll. Gallout a ra padout un nebeud minutennoù.',

	'FULLTEXT_MYSQL_INCOMPATIBLE_VERSION'	=> 'Gant MySQL4 pe ouzhpenn hepken e c\'hell ar poellad MySQL testenn-klok bezañ implijet.',
	'FULLTEXT_MYSQL_NOT_MYISAM'				=> 'Gant diazoù MyISAM hepken e c\'hell ar rolloù MySQL testenn-klok bezañ implijet.',
	'FULLTEXT_MYSQL_TOTAL_POSTS'			=> 'Hollad ar c\'hemennadennoù a zo war ar roll',
	'FULLTEXT_MYSQL_MBSTRING'				=> 'Gouzañv evit an arouezioù UFT-8 n\'int ket latin oc\'h implijout mbstring:',
	'FULLTEXT_MYSQL_PCRE'					=> 'Gouzañv evit an arouezioù UFT-8n\'int ket latin oc\'h implijout PCRE :',
	'FULLTEXT_MYSQL_MBSTRING_EXPLAIN'		=> 'Ma n\'emañ ket perzhioù unicode an arouez e PCRE e klasko ar poellad enklask ober gant mbstring.',
	'FULLTEXT_MYSQL_PCRE_EXPLAIN'			=> 'Evit an enklask-mañ ez eus ezhomm ouzh perzhioù unicode an arouez e-barzh PCRE, na vez kavet nemet e PHP4.4, 5.1, hag ouzhpenn, m\'ho peus c\'hoant da glask arouezioù ha n\'int ket latin.',

	'GENERAL_SEARCH_SETTINGS'				=> 'Dilennoù hollek ar c\'hlask',
	'GO_TO_SEARCH_INDEX'					=> 'Mont da bajenn ar roll glask',

	'INDEX_STATS'							=> 'Statistikoù ar roll',
	'INDEXING_IN_PROGRESS'					=> 'O leuniañ ar roll',
	'INDEXING_IN_PROGRESS_EXPLAIN'			=> 'Emañ ar poellad enklask o lakaat holl gemennadennoù ar forom war ar roll glask. Gallout a ra padout etre un nebeud minutennoù hag un nebeud eurvezhioù, hervez mont ho forom.',

	'LIMIT_SEARCH_LOAD'						=> 'Bevenn gargañ ar bajenn glask',
	'LIMIT_SEARCH_LOAD_EXPLAIN'				=> 'Ma vez karget ouzhpenn an talvoud-mañ e-pad ur vinutenn ez aio ar bajenn maez-linenn. 1.0 a zo kement hag un implij a 100% ouzh ar prosesour. N\'ez a ar servij-mañ en-dro nemet gant ar servijourien diazezet war UNIX.',

	'MAX_SEARCH_CHARS'						=> 'Niver brasañ a arouezioù lakaet war ar roll glask',
	'MAX_SEARCH_CHARS_EXPLAIN'				=> 'Ne vo ket ouzhpennet ar gerioù ouzhpenn an niver-mañ a arouezioù ganto.',
	'MIN_SEARCH_CHARS'						=> 'Niver bihanañ a arouezioù lakaet war ar roll glask',
	'MIN_SEARCH_CHARS_EXPLAIN'				=> 'Ne vo ket ouzhpennet ar gerioù nebeutoc\'h eget an niver-mañ a arouezioù ganto.',
	'MIN_SEARCH_AUTHOR_CHARS'				=> 'Niver bihanañ a arouezioù e anv ar c\'haser',
	'MIN_SEARCH_AUTHOR_CHARS_EXPLAIN'		=> 'Ret e vo d\'an izili oc\'h ober un enklask lakaat d\'an nebeutañ an niver-mañ a arouezioù en anv emaint o klask, ma n\'eo ket klok an anv a roont ha ma reont gant ur *. Ma\'z eo berroc\'h anv aozer ar gemennadenn eget an niver-mañ a arouezioù eo posupl atav klask anexhañ o lakaat e anv klok.',

	'PROGRESS_BAR'							=> 'Barenn mont war-raok',

	'SEARCH_GUEST_INTERVAL'					=> 'Padelezh etre div glaskadenn evit ar weladennerien',
	'SEARCH_GUEST_INTERVAL_EXPLAIN'			=> 'An niver a eilennoù en do ur gweladenner da c\'hortoz etre div glaskadenn. Ma vez ur gweladenner o klask un dra bennak e ranko gortoz an holl re all betek ma vefe tremenet an amzer.',
	'SEARCH_INDEX_CREATE_REDIRECT'			=> 'Ar c\'hemennadennoù betek an niverenn-anavezout %1$d a zo bet lakaet er roll, ha %2$d a zo da lakaat evit ar bazenn-mañ.<br /> War dro %3$.1f a gemennadennoù bep eilenn a vez lakaet er roll.<br />Emañ al listenn o kenderc\'hel…',
	'SEARCH_INDEX_DELETE_REDIRECT'			=> 'Ar c\'hemennadennoù betek an niverenn-anavezout id %1$d a zo bet diverket diouzh ar roll glask.<br />Emañ an diverkañ o kenderc\'hel…',
	'SEARCH_INDEX_CREATED'					=> 'Holl gemennadennoù an diaz-titouroù a zo bet lakaet er roll-glask.',
	'SEARCH_INDEX_REMOVED'					=> 'Diverket eo bet ar roll glask evit ar poellad-enklask-mañ.',
	'SEARCH_INTERVAL'						=> 'Padelezh etre div glaskadenn evit an izili',
	'SEARCH_INTERVAL_EXPLAIN'				=> 'An niver a eilennoù en do un ezel da c\'hortoz etre div glaskadenn. Dizalc\'h eo ar badelezh-mañ diouzh enklaskoù an izili all.',
	'SEARCH_STORE_RESULTS'					=> 'Padelezh memoret disoc\'hoù an enklaskoù',
	'SEARCH_STORE_RESULTS_EXPLAIN'			=> 'Goude an niver-mañ a eilennoù e vo diverket disoc\'hoù an enklask a zo bet lakaet er vemoret. Lakait 0 evit chom hep ober gant ur vemoret evit ar c\'hlask.',
	'SEARCH_TYPE'							=> 'Poellad-enklask',
	'SEARCH_TYPE_EXPLAIN'					=> 'Gant phpBB e c\'hellit dibab peseurt poellad a vo implijet evit klask un destenn e-barzh kemennadennoù. Dre ziouer e vo graet gant poellad-enklask testenn-lkok phpBB.',
	'SWITCHED_SEARCH_BACKEND'				=> 'Cheñch poellad-enklask ho peus graet. A-benn gallout ober gant ar poellad nevez-mañ eo dav deoc\'h bezañ sur ez eus ur roll glask evitañ.',

	'TOTAL_WORDS'							=> 'Hollad ar gerioù a zo er roll',
	'TOTAL_MATCHES'							=> 'Hollad al liammoù davet kemennadennoù a zo er roll',

	'YES_SEARCH'							=> 'Aotreañ an enklaskoù',
	'YES_SEARCH_EXPLAIN'					=> 'Aotreet e vo an izili da glask gerioù \'zo hag izili all.',
	'YES_SEARCH_UPDATE'						=> 'Ober gant hizivaat an destenn klok',
	'YES_SEARCH_UPDATE_EXPLAIN'				=> 'Hizivaet e vo ar rolloù klask a feur ma vo kaset kemennadennoù nevez. Evel-just ne vo ket graet ma ne vez ket aotret an enklaskoù.',
));

?>
