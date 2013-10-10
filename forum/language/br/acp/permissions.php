<?php
/**
*
* acp_permissions [Brezhoneg]
*
* @package language
* @version $Id: permissions.php 8479 2008-03-29 00:22:48Z naderman $
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
	'ACP_PERMISSIONS_EXPLAIN'	=> '
		<p>Ur bern aotreoù disheñvel a zo, dre vras e c\'hellont memes tra bezañ urzhiet e pevar rummad :</p>

		<h2>An Aotreoù Hollek</h2>
		<p>Implijet e vezañ da verañ an doneoù en un doare hollek, ha war ar forom a-bezh e vezont oberiant. Dezrannet e vezont etre Aotreoù an Ezel, re ar Strolladoù, re ar Verourien, ha re ar Gasourien Hollek.</p>

		<h2>An Aotreoù Diazezet war ar Forom</h2>
		<p>Implijet e vezont evit merañ an doneoù forom-ha-forom. Dezrannet e vezont etre Aotreoù ar Foromoù, Kasourien ar Foromoù, Aotreoù an Izili war ar Foromoù, hag Aotreoù ar Strolladoù war ar Foromoù.</p>

		<h2>An Aotreoù diouzh ar Perzhioù</h2>
		<p>Implijet e vezont evit krouiñ dastumadoù aotreoù evit pep doare aotreoù a zo, ha goude-se e c\'hell an dastumadoù bezañ lakaet e-pleustr en un taol da izili bennak, diouzh perzh an izili-se. E-touez ar perzhioù dre-ziouer ez eus peadra da verañ ur forom; e-barzh pep hini eus ar pevar rann Aotreoù e c\'hellit krouiñ perzhioù diouzh an ezhommoù.</p>

		<h2>Maskloù an Aotreoù</h2>
		<p>Implijet e vezont evit gwelet an aotreoù a vez roet d\'an Izili, Kasourien (stag ouzh ur forom, pe Hollek), Merourien, pe Foromoù.</p>
	
		<br />

		<p>Evit titouroù ouzhpenn diwar-benn an doare da lakaat ha da verañ an aotreoù war ho forom phpBB3, gwelit <a href="http://www.phpbb.com/support/documentation/3.0/quickstart/quick_permissions.html">Chabistr 1.5 ar Sturiell Loc\'hañ Prim</a>.</p>
	',

	'ACL_NEVER'				=> 'Gwech Ebet',
	'ACL_SET'				=> 'Reiñ Aotreoù',
	'ACL_SET_EXPLAIN'		=> 'War ur sistem simpl <samp>YA</samp>/<samp>KET</samp> e vez diazezet an aotreoù. MA lakait <samp>GWECH EBET</samp> evit un ezel pe ur strollad izili e tremeno an talvoud-mañ dreist d\'ar re all a c\'hell bezañ roet dezhañ. Ma n\'ho peus ket c\'hoant da reiñ un talvoud evit un dilenn evit an ezel pe strollad-mañ, neuze dibabit <samp>KET</samp>. Ma vez roet un tavloud en ul lec\'h all evit an dilennoù-mañ e vo graet gant ar re a vez termenet e lec\'h all, nemet ma vefe graet gant <samp>GWECH EBET</samp>. An holl objedoù diuzet (gant ar c\'hombod-diuz dirazo) a eilo an dastumad aotreoù bet termenet ganeoc\'h.',
	'ACL_SETTING'			=> 'Dilenn',

	'ACL_TYPE_A_'			=> 'Aotreoù Merañ',
	'ACL_TYPE_F_'			=> 'Aotreoù ar Foromoù',
	'ACL_TYPE_M_'			=> 'Aotreoù ar Gasourien',
	'ACL_TYPE_U_'			=> 'Aotreoù an Izili',

	'ACL_TYPE_GLOBAL_A_'	=> 'Aotreoù Merañ',
	'ACL_TYPE_GLOBAL_U_'	=> 'Aotreoù an Izili',
	'ACL_TYPE_GLOBAL_M_'	=> 'Aotreoù ar Gasourien Hollek',
	'ACL_TYPE_LOCAL_M_'		=> 'Aotreoù Kasourien Foromoù resis',
	'ACL_TYPE_LOCAL_F_'		=> 'Aotreoù ar Foromoù',
	
	'ACL_NO'				=> 'Ket',
	'ACL_VIEW'				=> 'Gwelet an aotreoù',
	'ACL_VIEW_EXPLAIN'		=> 'Amañ e c\'hellit gwelout an aotreoù a vez gant an ezl pe gant ar strollad. Ur c\'harrez ruz a dalvez n\'emañ ket an aotre gant an ezel/strollad, hag unan wer emañ gantañ.',
	'ACL_YES'				=> 'Ya',

	'ACP_ADMINISTRATORS_EXPLAIN'				=> 'Amañ e c\'hellit reiñ aotreoù merañ da izili \'zo pe strolladoù \'zo. An holl izili aotreoù Merañ ganto a c\'hell gwelet Pajenn ar Merour.',
	'ACP_FORUM_MODERATORS_EXPLAIN'				=> 'Amañ e c\'hellit reiñ aotreoù da izili pe da strolladoù evit ober war-dro kemennadennoù ar foromoù. N\'eo ket ar bajenn vat evit aotreañ izili da welet foromoù pe evit an aotreoù a denn ouzh ar Gasourien Hollek.',
	'ACP_FORUM_PERMISSIONS_EXPLAIN'				=> 'Amañ e c\'hellit dibab peseurt izili ha strolladoù a c\'hell mont war peseurt foromoù. N\'eo ket ar bajenn vat evit dibab piv a zo merour pe kasour.',
	'ACP_GLOBAL_MODERATORS_EXPLAIN'				=> 'Amañ e c\'hellit reiñ aotreoù kasourien hollek da izili pe strolladoù. Gallout a ra ar gasourien-se bezañ oberiant war an holl foromoù.',
	'ACP_GROUPS_FORUM_PERMISSIONS_EXPLAIN'		=> 'Amañ e c\'hellit reiñ d\'ar strolladoù aotreoù o tennañ d\'ar foromoù.',
	'ACP_GROUPS_PERMISSIONS_EXPLAIN'			=> 'Amañ e c\'hellit reiñ aotreoù hollek d\'ar strolladoù, da lâret eo aotreoù d\'an izili, aotreoù kasourien hollek, hag aotreoù merourien. E-touez aotreoù an izili e kaver ar re d\'ober gant skeudennigoù-emginnig, kas Gerigoù Prevez, h.a.; e-touez re ar gasourien hollek emañ an degemer kemennadennoù, merañ ar sujedoù, merañ ar skarzhadennoù, h.a.; hag e-touez aotreoù ar verourien e kaver ar cheñch aotreoù, termeniñ kodoù BBCode personelaet, ober war-dro aozadur ar foromoù, h.a.. Sañset eo ral ma vefe ezhomm kemm aotreoù izili o-unan, gwelloc\'h eo lakaat anezho e-barzh strolladoù ha kemm aotreoù ar strolladoù.',
	'ACP_ADMIN_ROLES_EXPLAIN'					=> 'Amañ e c\'hellit merañ ar perzhioù evit an aotreoù merañ. Staget eo an aotreoù ouzh ar perzhioù, ma cheñchit peseurt perzh a zo gant den-mañ-den e vo cheñchet peseurt aotreoù a zo gantañ war an dro.',
	'ACP_FORUM_ROLES_EXPLAIN'					=> 'Amañ e c\'hellit termeniñ ar perzhioù evit aotreoù ar foromoù. Staget eo an aotreoù ouzh ar perzhioù, ma cheñchit peseurt perzh a zo gant den-mañ-den e vo cheñchet peseurt aotreoù a zo gantañ war an dro.',
	'ACP_MOD_ROLES_EXPLAIN'						=> 'Amañ e c\'hellit termeniñ ar perzhioù evit aotreoù ar gasourien. Staget eo an aotreoù ouzh ar perzhioù, ma cheñchit peseurt perzh a zo gant den-mañ-den e vo cheñchet peseurt aotreoù a zo gantañ war an dro.',
	'ACP_USER_ROLES_EXPLAIN'					=> 'Amañ e c\'hellit termeniñ ar perzhioù evit aotreoù an izili. Staget eo an aotreoù ouzh ar perzhioù, ma cheñchit peseurt perzh a zo gant den-mañ-den e vo cheñchet peseurt aotreoù a vo gantañ war an dro.',
	'ACP_USERS_FORUM_PERMISSIONS_EXPLAIN'		=> 'Amañ e  peseurt perzh a zo gant den-mañ-denellit reiñ aotreoù stag ouzh ar foromoù d\'an izili.',
	'ACP_USERS_PERMISSIONS_EXPLAIN'				=> 'Amañ e  peseurt perzh a zo gant den-mañ-denellit reiñ aotreoù hollek d\'an izili, da lâret eo aotreoù ezel, aotreoù kasour hollek, pe aotreoù merour. E-touez aotreoù an izili e kaver ar re d\'ober gant skeudennigoù-emginnig, kas Gerigoù Prevez, h.a.; e-touez re ar gasourien hollek emañ an degemer kemennadennoù, merañ ar sujedoù, merañ ar skarzhadennoù, h.a.; hag e-touez aotreoù ar verourien e kaver ar cheñch aotreoù, termeniñ kodoù BBCode personelaet, ober war-dro aozadur ar foromoù, h.a.. Sañset eo ral ma vefe ezhomm kemm aotreoù izili o-unan, gwelloc\'h eo lakaat anezho e-barzh strolladoù ha kemm aotreoù ar strolladoù.',
	'ACP_VIEW_ADMIN_PERMISSIONS_EXPLAIN'		=> 'Amañ e c\'hellit gwelet peseurt aotreoù merañ a zo gant an izili/strolladoù diuzet.',
	'ACP_VIEW_GLOBAL_MOD_PERMISSIONS_EXPLAIN'	=> 'Amañ e c\'hellit gwelet peseurt aotreoù da vezañ kasourien hollek a zo gant an izili/strolladoù diuzet.',
	'ACP_VIEW_FORUM_PERMISSIONS_EXPLAIN'		=> 'Amañ e c\'hellit gwelet peseurt aotreoù stag ouzh ar foromoù a zo gant an izili/strolladoù diuzet.',
	'ACP_VIEW_FORUM_MOD_PERMISSIONS_EXPLAIN'	=> 'Amañ e c\'hellit gwelet peseurt aotreoù da vezañ kasour ur forom a zo gant an izili/strolladoù diuzet.',
	'ACP_VIEW_USER_PERMISSIONS_EXPLAIN'			=> 'Amañ e c\'hellit gwelet peseurt aotreoù ezel a zo gant an izili/strolladoù diuzet.',

	'ADD_GROUPS'				=> 'Ouzhpennañ strolladoù',
	'ADD_PERMISSIONS'			=> 'Ouzhpennañ aotreoù',
	'ADD_USERS'					=> 'Ouzhpennañ izili',
	'ADVANCED_PERMISSIONS'		=> 'Aotreoù araokaet',
	'ALL_GROUPS'				=> 'Diuz an holl strolladoù',
	'ALL_NEVER'					=> '<samp>GWECH EBET</samp> evit an holl',
	'ALL_NO'					=> '<samp>KET</samp> evit an holl',
	'ALL_USERS'					=> 'Diuz an holl izili',
	'ALL_YES'					=> '<samp>YA</samp> evit an holl',
	'APPLY_ALL_PERMISSIONS'		=> 'Lakaat an holl aotreoù e-pleustr',
	'APPLY_PERMISSIONS'			=> 'Lakaat an aotreoù e-pleustr',
	'APPLY_PERMISSIONS_EXPLAIN'	=> 'Ne vo lakaet e-pleustr an aotreoù hag ar perzhioù termenet evit an elfenn-mañ nemet d\'an elfenn-mañ ha d\'ar re a zo diuzet.',
	'AUTH_UPDATED'				=> 'Hizivaet eo bet an aotreoù.',

	'CREATE_ROLE'				=> 'Krouiñ ur perzh',
	'CREATE_ROLE_FROM'			=> 'Ober gant dilennoù adalek…',
	'CUSTOM'					=> 'Personelaat…',

	'DEFAULT'					=> 'Dre ziouer',
	'DELETE_ROLE'				=> 'Dilemel ar perzh',
	'DELETE_ROLE_CONFIRM'		=> 'Ha sur oc\'h ho peus c\'hoant da zilemel ar perzh-mañ? An izili ar perzh-mañ ganto na gollint <strong>ket</strong> o aotreoù a oa stag ouzh ar perzh-mañ.',
	'DISPLAY_ROLE_ITEMS'		=> 'Gwelet piv a zo ar perzh-mañ gantañ',

	'EDIT_PERMISSIONS'			=> 'Kemm an aotreoù',
	'EDIT_ROLE'					=> 'Kemm ar perzh',

	'GROUPS_NOT_ASSIGNED'		=> 'N\'emañ ar perzh-mañ gant strollad ebet',

	'LOOK_UP_GROUP'				=> 'Gwelet ur strollad',
	'LOOK_UP_USER'				=> 'Gwelet un ezel',

	'MANAGE_GROUPS'		=> 'Merañ ar strolladoù',
	'MANAGE_USERS'		=> 'Merañ an izili',

	'NO_AUTH_SETTING_FOUND'		=> 'N\'eo ket bet termenet dilennoù an aotreoù.',
	'NO_ROLE_ASSIGNED'			=> 'perzh ebet termenet…',
	'NO_ROLE_ASSIGNED_EXPLAIN'	=> 'Reiñ ar perzh-mañ ne gemm ket an aotreoù war an tu dehou. M\'ho peus c\'hoant da dennañ an holl aotreoù eo gweloc\'h deoc\'h ober gant al liamm “<samp>KET</samp> evit an holl”.',
	'NO_ROLE_AVAILABLE'			=> 'N\'eus perzh ebet da gaout',
	'NO_ROLE_NAME_SPECIFIED'	=> 'Roit un anv d\'ar perzh.',
	'NO_ROLE_SELECTED'			=> 'N\'eo ket bet kavet ar perzh.',
	'NO_USER_GROUP_SELECTED'	=> 'N\'ho peus diuzet ezel na strollad ebet.',

	'ONLY_FORUM_DEFINED'	=> 'N\'ho peus termenet nemet foromoù en ho tiuzad. Dibabit izili ha strolladoù ivez mar plij.',

	'PERMISSION_APPLIED_TO_ALL'		=> 'Lakaet e vo ivez an aotreoù hag ar perzh e-pleustr evbit an holl elfennoù a zo bet diuzet',
	'PLUS_SUBFORUMS'				=> '+Adforomoù',

	'REMOVE_PERMISSIONS'			=> 'Tennañ an aotreoù',
	'REMOVE_ROLE'					=> 'Dilemel ar perzh',
	'RESULTING_PERMISSION'			=> 'Disoc\'h an aotreoù',
	'ROLE'							=> 'Perzh',
	'ROLE_ADD_SUCCESS'				=> 'Ouzhpennet eo bet ar perzh.',
	'ROLE_ASSIGNED_TO'				=> 'Izili/Strolladoù a zo bet staget ouzh %s',
	'ROLE_DELETED'					=> 'Dilamet eo bet ar perzh.',
	'ROLE_DESCRIPTION'				=> 'Deskrivadur ar perzh',

	'ROLE_ADMIN_FORUM'			=> 'Merour ar forom',
	'ROLE_ADMIN_FULL'			=> 'Merour klok',
	'ROLE_ADMIN_STANDARD'		=> 'Merour boutin',
	'ROLE_ADMIN_USERGROUP'		=> 'Merour Izili ha Strolladoù',
	'ROLE_FORUM_BOT'			=> 'Doneoù ar robotoù',
	'ROLE_FORUM_FULL'			=> 'Done klok',
	'ROLE_FORUM_LIMITED'		=> 'Done bevennet',
	'ROLE_FORUM_LIMITED_POLLS'	=> 'Done bevennet + mouezhiadegoù',
	'ROLE_FORUM_NOACCESS'		=> 'Done ebet',
	'ROLE_FORUM_ONQUEUE'		=> 'War steudad ar gasourien',
	'ROLE_FORUM_POLLS'			=> 'Done boutin + Mouezhiadegoù',
	'ROLE_FORUM_READONLY'		=> 'Lenn hepken',
	'ROLE_FORUM_STANDARD'		=> 'Done boutin',
	'ROLE_MOD_FULL'				=> 'Merour klok',
	'ROLE_MOD_QUEUE'			=> 'Merour steudadoù',
	'ROLE_MOD_SIMPLE'			=> 'Merour eeun',
	'ROLE_MOD_STANDARD'			=> 'Merour boutin',
	'ROLE_USER_FULL'			=> 'An holl servijoù',
	'ROLE_USER_LIMITED'			=> 'Servijoù \'zo hepken',
	'ROLE_USER_NOAVATAR'		=> 'Skeudenn-emginnig ebet',
	'ROLE_USER_NOPM'			=> 'Gerig-Prevez ebet',
	'ROLE_USER_STANDARD'		=> 'Servijoù boaz',

	'ROLE_DESCRIPTION_ADMIN_FORUM'			=> 'Gallout a ra tizhout Pajennoù Merañ ar forom hag ar re evit merañ an aotreoù.',
	'ROLE_DESCRIPTION_ADMIN_FULL'			=> 'Gallout a ra merañ pep tra er forom.<br />Ne vez ket aliet.',
	'ROLE_DESCRIPTION_ADMIN_STANDARD'		=> 'Gallout a ra merañ darn vuiañ ouzh an traoù, met ket ar pezh denn ouzh ar servijour pe ouzh ar sistem.',
	'ROLE_DESCRIPTION_ADMIN_USERGROUP'		=> 'Gallout a ra ober war-dro ar strolladoù hag an izili : gallout a ra kemm an aotreoù, an dilennoù, ar skarzhadennoù hag an harluoù, ar renkadoù.',
	'ROLE_DESCRIPTION_FORUM_BOT'			=> 'Aliet e vez ar perzh-mañ evit ar robotoù hag ar poelladoù-furchal.',
	'ROLE_DESCRIPTION_FORUM_FULL'			=> 'Gallout a ra ober gant holl servijoù ar forom, kas kemennoù ha postoù-it da skouer. Gallout a ra ivez kas kemennadennoù buanoc\'h eget ma vez aotreet d\'ar re all.<br />Ne vez ket aliet evit an izili boutin.',
	'ROLE_DESCRIPTION_FORUM_LIMITED'		=> 'Gallout a ra ober traoù \'zo war ar forom, met n\'hall ket stagañ restroù pe implijout skeudennigoù evit ar c\'hemennadennoù.',
	'ROLE_DESCRIPTION_FORUM_LIMITED_POLLS'	=> 'Memes tra hag an Done Bevennet, met gallout a ra ouzhpenn krouiñ mouezhiadegoù.',
	'ROLE_DESCRIPTION_FORUM_NOACCESS'		=> 'N\'hall na gwelet na tizhout ar forom.',
	'ROLE_DESCRIPTION_FORUM_ONQUEUE'		=> 'Gallout a ra ober gant darn vrasañ ouzh servijoù ar forom, kas stagadennoù da skouer, met a-raok ma vefe embannet e gemennadennoù eo dav ma vefent degemeret gant ur c\'hasour.',
	'ROLE_DESCRIPTION_FORUM_POLLS'			=> 'Memes tra hag an Done boutin, met gallout a ra ivez sevel mouezhiadegoù.',
	'ROLE_DESCRIPTION_FORUM_READONLY'		=> 'Gallout a ra lenn ar pezh a vez skrivet war ar forom, met n\'hall ket krouiñ sujedoù nevez pe kas respontoù.',
	'ROLE_DESCRIPTION_FORUM_STANDARD'		=> 'Gallout a ra ober gant darn vuiañ ouzh servijoù ar forom, da skouer, stagañ restroù ha diverkañ e gemennadennoù, met n\'hall ket prennañ e sujedoù dezhañ e-unan, na krouiñ mouezhiadegoù.',
	'ROLE_DESCRIPTION_MOD_FULL'				=> 'Gallout a ra ober an holl draoù a c\'hell ur c\'hasour ober, ha skarzhañ izili zoken.',
	'ROLE_DESCRIPTION_MOD_QUEUE'			=> 'Gallout a ra degemer pe nac\'hañ kemennadennoù war-c\'hortoz bezañ embannet, ha kemm ar re a zo bet kaset, met netra ouzhpenn.',
	'ROLE_DESCRIPTION_MOD_SIMPLE'			=> 'Gallout a ra ober ar c\'hemmoù diazez war ar c\'hemennadennoù, met n\'hall ket kas kemennoù groñs pe sellet ouzh steudad ar c\'hemennadennoù war-c\'hortoz bezañ embannet.',
	'ROLE_DESCRIPTION_MOD_STANDARD'			=> 'Gallout a ra ober gant darn vuiañ ouzh binviji ur c\'hasour, met n\'hall ket karzhañ izili pe cheñch aozer ur gemennadenn.',
	'ROLE_DESCRIPTION_USER_FULL'			=> 'Gallout a ra ober an holl draoù a vez roet d\'un ezel ober, ha zoken cheh anv pe kas posteloù aliesoc\'h eget ma vez aotreet.<br />Ne vez ket aliet.',
	'ROLE_DESCRIPTION_USER_LIMITED'			=> 'Gallout a ra ober darn ouzh ar pezh a vez roet d\'un ezel ober. N\'hall ket ouzhpennañ stagadennoù d\'e gemennadennoù, kas posteloù, pe gerigoù prevez.',
	'ROLE_DESCRIPTION_USER_NOAVATAR'		=> 'N\'hall ober nemet darn ouzh ar pezh a c\'hell an izili ober, ha n\'hall ket diskouez ur skeudennig-emginnig.',
	'ROLE_DESCRIPTION_USER_NOPM'			=> 'N\'hall ober nemet darn ouzh ar pezh a c\'hell an izili ober, ha ne vez ket aotreet da eskemm Gerigoù Prevez.',
	'ROLE_DESCRIPTION_USER_STANDARD'		=> 'Gallout a ra ober darn vrasañ eus ar pezh a c\'hell un ezel ober, met ket pep tra. Da skouer, n\'hall ket cheñch anv, pe kas ouzhpenn an niver a gemennadennoù aotreet en ur prantad resis.',
	
	'ROLE_DESCRIPTION_EXPLAIN'		=> 'Amañ e c\'hellit lakaat un deskrivadur berr-ha-berr ouzh petra eo ar perzh-mañ, ha da betra serij. Diskouezet e vo an destenn bet lakaet ganeocc\'h amañ war skramm an aotreoù ivez.',
	'ROLE_DESCRIPTION_LONG'			=> 'Re hir eo deskrivadur ar perzh, dav eo dezhi bezañ dindan 4000 arouez.',
	'ROLE_DETAILS'					=> 'Titouroù ar perzh',
	'ROLE_EDIT_SUCCESS'				=> 'Kemmet eo bet ar perzh.',
	'ROLE_NAME'						=> 'Anv ar perzh',
	'ROLE_NAME_ALREADY_EXIST'		=> 'C\'hoazh ez eus ouzh ur perzh anvet <strong>%s</strong> evit ar perzhioù a pledit ganto.',
	'ROLE_NOT_ASSIGNED'				=> 'N\'eus bet roet arperzh da zen ebet evit poent.',

	'SELECTED_FORUM_NOT_EXIST'		=> 'N\'eus ket ouzh ar forom(où) bet diuzet ganeoc\'h.',
	'SELECTED_GROUP_NOT_EXIST'		=> 'N\'eus ket ouzh ar strollad(où) bet diuzet ganeoc\'h.',
	'SELECTED_USER_NOT_EXIST'		=> 'N\'eus ket ouzh an ezel/izili bet diuzet ganeoc\'h.',
	'SELECT_FORUM_SUBFORUM_EXPLAIN'	=> 'Gant ar forom diuzet ganeoc\'h amañ e vo kontet an holl aforomoù a zo ennañ.',
	'SELECT_ROLE'					=> 'Diuz ur perzh…',
	'SELECT_TYPE'					=> 'Diuz an doare',
	'SET_PERMISSIONS'				=> 'Termeniñ an aotreoù',
	'SET_ROLE_PERMISSIONS'			=> 'Termeniñ aotreoù ar perzh',
	'SET_USERS_PERMISSIONS'			=> 'Termeniñ aotreoù an ezel',
	'SET_USERS_FORUM_PERMISSIONS'	=> 'Termeniñ aotreoù an ezel war ar forom',

	'TRACE_DEFAULT'					=> 'Dre ziouer e vez lakaet <samp>KET</samp>  evit pep aotre. Talvezout a ra kement-mañ n\'eo ket termenet, da lâret eo n\'eo ket diaotre dre ret, met aotreoù all a c\'hell bezañ skrivet war-c\'horre ar re-se, ha neuze eo diouzh an aotreoù-se.',
	'TRACE_FOR'						=> 'Gouzout evit',
	'TRACE_GLOBAL_SETTING'			=> '%s (hollek)',
	'TRACE_GROUP_NEVER_TOTAL_NEVER'	=> 'War <samp>GWECH EBET</samp> eo bet lakaet aotreoù ar strollad-mañ evel an disoc\'h a-bezh, setu e vez dalc\'het an disoc\'h kozh.',
	'TRACE_GROUP_NEVER_TOTAL_NEVER_LOCAL'	=> 'War <samp>GWECH EBET</samp> eo bet lakaet aotreoù ar strollad-mañ, evel an disoc\'h hollek, setu e vo dalc\'het an disoc\'h kozh.',
	'TRACE_GROUP_NEVER_TOTAL_NO'	=> 'War <samp>GWECH EBET</samp> eo bet lakaet aotreoù ar strollad-mañ, dont a ra neuze da vezañ an talvoud nevez, peogwir e ne oa ket bet termenet a-raok (dre ma oa war <samp>KET</samp>).',
	'TRACE_GROUP_NEVER_TOTAL_NO_LOCAL'	=> 'War <samp>GWECH EBET</samp> eo bet lakaet aotreoù ar strollad-mañ, ha dont a ra da vezañ an talvoud nevez, peogwir e oa lakaet war <samp>KET</samp> en a-raok.',
	'TRACE_GROUP_NEVER_TOTAL_YES'	=> 'War <samp>GWECH EBET</samp> eo bet lakaet aotreoù ar strollad-mañ, da lâret eo e vez erlec\'hiet an talvoud hollek <samp>YA</samp> gant unan <samp>GWECH EBET</samp> evit an ezel-mañ.',
'TRACE_GROUP_NEVER_TOTAL_YES_LOCAL'	=> 'War <samp>GWECH EBET</samp>eo bet lakaet aotreoù ar strollad-mañ, setu e tremeno an talvoud-mañ dreist an talvoud <samp>YA</samp> a oa betek-henn evit an ezel-mañ.',
	'TRACE_GROUP_NO'				=> 'War <samp>KET</samp> eo bet lakaet aotreoù ar strollad-mañ, setu e vez miret an talvoudoù kozh.',
	'TRACE_GROUP_YES_TOTAL_NEVER'	=> 'War <samp>YA</samp> eo bet lakaet aotreoù ar strollad-mañ, met n\'hall ket an talvoud kozh <samp>GWECH EBET</samp> bezañ erlec\'hiet gant an talvoud nevez-mañ.',
	'TRACE_GROUP_YES_TOTAL_NEVER_LOCAL'	=> 'War <samp>YA</samp> eo bet lakaet aotreoù ar strollad-mañ, met n\'hal ket an talvoud-mañ tremen dreist d\'an hini hollek <samp>GWECH EBET</samp>.',
	'TRACE_GROUP_YES_TOTAL_NO'		=> 'War <samp>YA</samp> eo bet lakaet aotreoù ar strollad-mañ, dont a ra neuze da vezañ an talvoud nevez, dre ma ne oa ket termenet a-raok (war <samp>KET</samp> e oa).',
	'TRACE_GROUP_YES_TOTAL_NO_LOCAL'	=> 'War <samp>YA</samp> eo bet lakaet aotreoù ar strollad-mañ, ha dont a ra da vezañ an talvoud nevez peogwir e oa bet lakaet war <samp>KET</samp> en a-raok.',
	'TRACE_GROUP_NO_LOCAL'			=> 'War <samp>KET</samp> e oa an aotre war ar forom-mañ, setu e vez miret an talvoud a-gozh.',
	'TRACE_GROUP_YES_TOTAL_YES'		=> 'War <samp>YA</samp> eo bet lakaet aotreoù ar strollad-mañ, met dre ma oant war <samp>YA</samp> c\'hoazh ez eus bet dalc\'het ar memes talvoud.',
	'TRACE_GROUP_YES_TOTAL_YES_LOCAL'	=> 'War <samp>YA</samp> eo bet lakaet aotreoù ar strollad-mañ, ha war <samp>YA</samp> e oa dija an aotreoù hollek, setu e vo dalc\'het gant an disoc\'h a-gozh.',
	'TRACE_PERMISSION'				=> 'Anaout aotreoù - %s',
	'TRACE_RESULT'					=> 'Disoc\'h',
	'TRACE_SETTING'					=> 'Dilennoù an anaout aotreoù',

	'TRACE_USER_GLOBAL_YES_TOTAL_YES'		=> ' War <samp>YA</samp> e vez lakaet aotreoù an ezel dizalc\'h diouzh ar forom, met war <samp>YA</samp> e oa bet lakaet an aotreoù c\'hoazh, setu e vez dalc\'het an hevelep talvoud. %sAnaout an aotreoù hollek%s',
	'TRACE_USER_GLOBAL_YES_TOTAL_NEVER'		=> 'War<samp>YES</samp> e vez lakaet aotreoù an ezel dizalc\'h diouzh ar forom, hag erlec\'hiet e vo an talvoud kozh <samp>GWECH EBET</samp> gant an talvoud nevez-mañ. %sAnaout an aotreoù hollek%s',
	'TRACE_USER_GLOBAL_NEVER_TOTAL_KEPT'	=> 'War<samp>GWECH EBET</samp> e vez lakaet aotreoù an ezel dizalc\'h diouzh ar forom, ar pezh n\'en deus levezon ebet war an aotreoù lec\'hel. %sAnaout an aotreoù hollek%s',

	'TRACE_USER_FOUNDER'					=> 'Dastumad aotreoù ar saver a zo gant an ezel-mañ, setu e vez lakaet an holl aotreoù merañ war <samp>YA</samp> dre ziouer.',
	'TRACE_USER_KEPT'						=> 'War <samp>KET</samp> emañ aotre an ezel, setu e vez dalc\'het gant an talvoud kozh.',
	'TRACE_USER_KEPT_LOCAL'					=> 'War <samp>KET</samp> emañ aotre an ezel evit ar forom-mañ, setu e vez dalc\het gant an talvoud kozh.',
	'TRACE_USER_NEVER_TOTAL_NEVER'			=> 'War <samp>GWECH EBET</samp> e vez lakaet aotreoù an ezel, ha war <samp>GWECH EBET</samp> e oa bet lakaet an talvoud hollek, setu n\'eus bet cheñchet netra.',
	'TRACE_USER_NEVER_TOTAL_NEVER_LOCAL'	=> 'War <samp>GWECH EBET</samp> e vez lakaet aotreoù an ezel evit ar forom-mañ, ha war <samp>GWECH EBET</samp> e oa bet lakaet an talvoud hollek, setu n\'eus bet cheñchet netra.',
	'TRACE_USER_NEVER_TOTAL_NO'				=> 'War<samp>GWECH EBET</samp> e vez lakaet aotreoù an ezel, ha dont a ra da vezañ an talvoud hollek dre ma oa bet lakaet war KET.',
'TRACE_USER_NEVER_TOTAL_NO_LOCAL'		=> 'War<samp>GWECH EBET</samp> e vez lakaet aotreoù an ezel evit ar forom-mañ, ha dont a ra da vezañ an talvoud hollek dre ma oa bet lakaet war KET.',
	'TRACE_USER_NEVER_TOTAL_YES'			=> 'War <samp>GWECH EBET</samp> e vez lakaet aotreoù an ezel, hag erlec\'hiañ a ra neuze an talvoud kozh hag a oa <samp>YA</samp>.',
	'TRACE_USER_NEVER_TOTAL_YES_LOCAL'		=> 'War <samp>GWECH EBET</samp> e vez lakaet aotreoù an ezel evit ar forom-mañ, hag erlec\'hiañ a ra neuze an talvoud kozh hag a oa <samp>YA</samp>.',
	'TRACE_USER_NO_TOTAL_NO'				=> 'War <samp>KET</samp> e vez lakaet aotreoù an ezel, hag e oa an talvoud hollek war KET c\'hoazh, setu e teu an talvoud da vezañ <samp>GWECH EBET</samp>.',
	'TRACE_USER_NO_TOTAL_NO_LOCAL'			=> 'War <samp>KET</samp> e vez lakaet aotreoù an ezel evit ar forom-mañ, hag e oa an talvoud hollek war KET c\'hoazh, setu e teu an talvoud da vezañ <samp>GWECH EBET</samp>.',
	'TRACE_USER_YES_TOTAL_NEVER'			=> 'War <samp>YA</samp> e vez lakaet aotreoù an ezel, met n\'hall ket an talvoud-mañ kemer plas an hini kozh, dre ma oa <samp>GWECH EBET</samp> an hini kozh.',
	'TRACE_USER_YES_TOTAL_NEVER_LOCAL'		=> 'War <samp>YA</samp> e vez lakaet aotreoù an ezel evit ar forom-mañ, met n\'hall ket an talvoud-mañ kemer plas an hini kozh, dre ma oa <samp>GWECH EBET</samp> an hini kozh.',
	'TRACE_USER_YES_TOTAL_NO'				=> 'War <samp>YA</samp> e vez lakaet aotreoù an ezel, ha dont a ra da vezañ an talvoud hollek peogwir e oa bet lakaet war <samp>KET</samp>.',
	'TRACE_USER_YES_TOTAL_NO_LOCAL'			=> 'War <samp>YA</samp> e vez lakaet aotreoù an ezel evit ar forom-mañ, ha dont a ra da vezañ an talvoud hollek peogwir e oa bet lakaet war <samp>KET</samp>.',
	'TRACE_USER_YES_TOTAL_YES'				=> 'War <samp>YA</samp> e vez lakaet aotreoù an ezel, ha war <samp>YA</samp> e oa an talvoud hollek c\'hoazh, setu ne vez cheñchet netra.',
	'TRACE_USER_YES_TOTAL_YES_LOCAL'		=> 'War <samp>YA</samp> e vez lakaet aotreoù an ezel evit ar forom-mañ, ha war <samp>YA</samp> e oa an talvoud hollek c\'hoazh, setu ne vez cheñchet netra.',
	'TRACE_WHO'								=> 'Piv',
	'TRACE_TOTAL'							=> 'Hollad',

	'USERS_NOT_ASSIGNED'			=> 'N\'eus bet roet ar perzh-mañ da ezel ebet',
	'USER_IS_MEMBER_OF_DEFAULT'		=> ' a zo ezel ouzh ar strollad rak-termenet da heul',
	'USER_IS_MEMBER_OF_CUSTOM'		=> 'a zo ezel ouzh ar strolladoù da heul, termenet gant an ezel',

	'VIEW_ASSIGNED_ITEMS'	=> 'Gwelet gant piv emañ ar perzh-mañ',
	'VIEW_LOCAL_PERMS'		=> 'Aotreoù lec\'hel',
	'VIEW_GLOBAL_PERMS'		=> 'Aotreoù hollek',
	'VIEW_PERMISSIONS'		=> 'Gwelet an aotreoù',

	'WRONG_PERMISSION_TYPE'	=> 'Un doare direizh a zo bet diuzet evit an aotreoù.',
	'WRONG_PERMISSION_SETTING_FORMAT'	=> 'En ur stumm direizh eo skrivet an dilennoù a denn ouzh an aotreoù, n\'hallont ket bezañ lennet gant phpBB.',
));

?>
