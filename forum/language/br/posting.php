<?php
/**
*
* posting [Brezhoneg]
*
* @package language
* @version $Id: posting.php 8555 2008-05-15 14:10:11Z Kellanved $
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
	'ADD_ATTACHMENT'			=> 'Pellgas ar stagadenn',
	'ADD_ATTACHMENT_EXPLAIN'	=> 'M\'ho peus c\'hoant da stagañ ur restr pe ouzhpenn, roit an titouroù amañ-dindan.',
	'ADD_FILE'					=> 'Ouzhpennañ ar restr',
	'ADD_POLL'					=> 'Sevel ur vouezhiadeg',
	'ADD_POLL_EXPLAIN'			=> 'Ma n\'ho peus ket c\'hoant da sevel ur vouezhiadeg, na skrivit netra amañ.',
	'ALREADY_DELETED'			=> 'Digarez, met diverket eo bet ar c\'hemennadenn-mañ dija.',
	'ATTACH_QUOTA_REACHED'		=> 'Digarez, met tizhet eo bet feurbarzh stagadennoù ar forom.',
	'ATTACH_SIG'				=> 'Stagañ ur sinadur (Gallout a reont bezañ kemmet dre Panell-Merañ an Ezel)',

	'BBCODE_A_HELP'				=> 'Stagañ ur restr e korf ar gemennadenn: [attachment=]anvrestr.ast[/attachment]',
	'BBCODE_B_HELP'				=> 'Testenn druz: [b]testenn[/b]',
	'BBCODE_C_HELP'				=> 'Tarzh: [code]tarzh[/code]',
	'BBCODE_E_HELP'				=> 'Listenn: ouzhpennañ elfennoù ul listenn',
	'BBCODE_F_HELP'				=> 'Ment an destenn: [size=85]testenn vihan[/size]',
	'BBCODE_IS_OFF'				=> '<em>N\'ez a ket</em> ar %sBBCode%s en-dro ',
	'BBCODE_IS_ON'				=> '<em>Mont a ra</em> ar %sBBCode%s en-dro ',
	'BBCODE_I_HELP'				=> 'Testenn stouet: [i]testenn[/i]',
	'BBCODE_L_HELP'				=> 'Listenn: [list]testenn[/list]',
	'BBCODE_LISTITEM_HELP'			=> 'Elfenn eus ul listenn: [*]testenn[/*]',
	'BBCODE_O_HELP'				=> 'Listenn urzhiet: [list=]testenn[/list]',
	'BBCODE_P_HELP'				=> 'Enlakaat ur skeudenn: [img]http://kavlech_skeudenn[/img]',
	'BBCODE_Q_HELP'				=> 'Menegiñ un destenn: [quote]testenn[/quote]',
	'BBCODE_S_HELP'				=> 'Liv an arouezioù: [color=red]testenn[/color]  Korvigell : gallout a rit ober gant color=#FF0000 ivez',
	'BBCODE_U_HELP'				=> 'Islinennañ testenn: [u]testenn[/u]',
	'BBCODE_W_HELP'				=> 'Enlakaat un URL: [url]http://url[/url] pe [url=http://url]testenn an URL[/url]',
	'BBCODE_D_HELP'				=> 'Flash: [flash=width,height]http://url[/flash]',
	'BUMP_ERROR'				=> 'N\'hallit ket diskenn ar sujed-mañ ken buan goude ar c\'hasadenn ziwezhañ.',

	'CANNOT_DELETE_REPLIED'		=> 'Digarez, met n\'hallit diverkañ nemet ar c\'hemennadennoù n\'eus ket bet respontet dezho.',
	'CANNOT_EDIT_POST_LOCKED'	=> 'Prennet eo bet ar gemennadenn, n\'hallit ket kemm anezhi ken.',
	'CANNOT_EDIT_TIME'			=> 'N\'hallit ket mui kemm pe diverkañ ar gemennadenn-mañ.',
	'CANNOT_POST_ANNOUNCE'		=> 'Digarez, met n\'hallit ket kas kemennoù.',
	'CANNOT_POST_STICKY'		=> 'Digarez, met n\'hallit ket kas postoù-it.',
	'CHANGE_TOPIC_TO'			=> 'Kemm doare ar sujed da',
	'CLOSE_TAGS'				=> 'Serriñ balizennoù',
	'CURRENT_TOPIC'				=> 'Sujed red',

	'DELETE_FILE'				=> 'Dilemel ar restr',
	'DELETE_MESSAGE'			=> 'Dilemel ar gemennadenn',
	'DELETE_MESSAGE_CONFIRM'	=> 'Ha sur oc\'h ho peus c\'hoant da ziverkañ ar gemennadenn ?',
	'DELETE_OWN_POSTS'			=> 'Digarez, met n\'hallit dilemel nemet ho postelioù.',
	'DELETE_POST_CONFIRM'		=> 'Ha sur oc\'h ho peus c\'hoant da ziverkañ ar gemennadenn-mañ ?',
	'DELETE_POST_WARN'			=> 'Ur wech bet dilammet, n\'hall ket ar gemennadenn bezañ adkavet',
	'DISABLE_BBCODE'			=> 'Lakaat ar BBCode dizoberiant',
	'DISABLE_MAGIC_URL'			=> 'Chom hep treiñ an URLoù da liammoù',
	'DISABLE_SMILIES'			=> 'Lakat ar <i>smilies</i> dizoberiant',
	'DISALLOWED_CONTENT'		=> 'Nac\'het eo bet ar pellgas peogwir ez eus bet kavet e c\'helle ar restr ober drouk d\'ar forom.',
	'DISALLOWED_EXTENSION'		=> 'N\'eo ket aotreet an astenn %s.',
	'DRAFT_LOADED'				=> 'Ur vrouilhoñs a zo bet karget en dakad-kas, marteze ho po c\'hoant da beurechuiñ ho kemennadenn bremañ.<br />Diverket e vo ho prouilhoñs pa vo bet embannet ar gemennadenn.',
	'DRAFT_LOADED_PM'			=> 'Ur vrouilhoñs a zo bet karget e takad ar gerigoù prevez, marteze ho po c\'hoant da beurechuiñ ho kerig prevez bremañ.<br />Diverket e vo ho prouilhoñs ur wech kaset ho kerig.',
	'DRAFT_SAVED'				=> 'Miret eo bet ar vrouilhoñs.',
	'DRAFT_TITLE'				=> 'Titl ar vrouilhoñs',

	'EDIT_REASON'				=> 'Abegoù evit kemm ar gemennadenn-mañ.',
	'EMPTY_FILEUPLOAD'			=> 'Goullo eo ar restr bet pellgaset.',
	'EMPTY_MESSAGE'				=> 'Dav eo deoc\'h skrivañ un dra bennak en ho kemennadenn.',
	'EMPTY_REMOTE_DATA'			=> 'N\'eus ket bet gallet pellgas ar restr, klaskit hen ober gant an dorn.',

	'FLASH_IS_OFF'				=> '<em>Mont a ra</em> [flash] en-dro',
	'FLASH_IS_ON'				=> '<em>N\'ez a ket</em> [flash] en-dro',
	'FLOOD_ERROR'				=> 'N\'hallot ket kas un eil kemennadenn ken buan goude an hini kentañ.',
	'FONT_COLOR'				=> 'Liv an arouezioù',
	'FONT_COLOR_HIDE'			=> 'Kuzhat liv an arouezioù',
	'FONT_HUGE'					=> 'Bras-tre',
	'FONT_LARGE'				=> 'Bras',
	'FONT_NORMAL'				=> 'Krenn',
	'FONT_SIZE'					=> 'Ment an arouezioù',
	'FONT_SMALL'				=> 'Bihan',
	'FONT_TINY'					=> 'Bihan-tre',

	'GENERAL_UPLOAD_ERROR'		=> 'N\'eus ket bet tu da bellgas ar stagadenn betek %s.',

	'IMAGES_ARE_OFF'			=> '<em>Aotreet</em> e vez ar skeudennoù',
	'IMAGES_ARE_ON'				=> '<em>Ne vez ket aotreet</em> ar skeudennoù',
	'INVALID_FILENAME'			=> 'Un anv-restr direizh eo %s.',

	'LOAD'						=> 'Kargañ',
	'LOAD_DRAFT'				=> 'Kargañ ar vrouilhoñs',
	'LOAD_DRAFT_EXPLAIN'		=> 'Amañ e c\'hellit dibab ar vrouilhoñs ho peus c\'hoant da genderc\'hel da skrivañ. Nullet e vo ar pezh a zo bet kaset bremañ, ha diverket ar pezh a oa e-barzh. Gwelit, kemmit, ha dverkit brouilhoñsoù e-barzh Panell-Merañ an Ezel.',
	'LOGIN_EXPLAIN_BUMP'		=> 'Dav eo deoc\'h bezañ anavezet gant ar forom a-benn gallout diskenn sujedoù er forom-mañ.',
	'LOGIN_EXPLAIN_DELETE'		=> 'Dav eo deoc\'h bezañ anavezet gant ar forom a-benn gallout dilemel kemennadennoù er forom-mañ.',
	'LOGIN_EXPLAIN_POST'		=> 'Dav eo deoc\'h bezañ anavezet gant ar forom a-benn gallout kas kemennadennoù er forom-mañ.',
	'LOGIN_EXPLAIN_QUOTE'		=> 'Dav eo deoc\'h bezañ anavezet gant ar forom a-benn gallout menegiñ kemennadennoù all er forom-mañ.',
	'LOGIN_EXPLAIN_REPLY'		=> 'Dav eo deoc\'h bezañ anavezet gant ar forom a-benn gallout respont da sujedoù er forom-mañ.',

	'MAX_FONT_SIZE_EXCEEDED'	=> '%1$d d\'ar muiañ e rank bezañ ment ho skritur.',
	'MAX_FLASH_HEIGHT_EXCEEDED'	=> '%1$d piksel uhelder d\'ar muiañ e rank bezañ ho restr flash.',
	'MAX_FLASH_WIDTH_EXCEEDED'	=> '%1$d piksel ledander d\'ar muiañ e rank beezañ ho restr flash.',
	'MAX_IMG_HEIGHT_EXCEEDED'	=> '%1$d piksel uhelder d\'ar muiañ a rank bezañ ho skeudenn.',
	'MAX_IMG_WIDTH_EXCEEDED'	=> '%1$d piksel ledander d\'ar muiañ e rank bezañ ho skeudenn.',

	'MESSAGE_BODY_EXPLAIN'		=> 'Lakait ho kemennadenn amañ, arabat dezhi bezañ ouzhpenn <strong>%d</strong> arouez.',
	'MESSAGE_DELETED'			=> 'Diverket eo bet ar gemennadenn.',
	'MORE_SMILIES'				=> 'Gwelet <i>smilies</i> all',

	'NOTIFY_REPLY'				=> 'Kelaouet ac\'hanon pa vez respontet',
	'NOT_UPLOADED'				=> 'N\'eus ket gallet ar restr bezañ pellgaset.',
	'NO_DELETE_POLL_OPTIONS'	=> 'N\'hallit ket diverkañ dibaboù ur vouezhiadeg a zo loc\'het dija.',
	'NO_PM_ICON'				=> 'Kemennadenn GP ebet',
	'NO_POLL_TITLE'				=> 'Dav eo deoc\'h reiñ un titl d\'ar vouezhiadeg.',
	'NO_POST'					=> 'N\'eus ket ouzh ar gemennadenn emaoc\'h o klask.',
	'NO_POST_MODE'				=> 'N\'eo ket bet resisaet an doare da gas.',

	'PARTIAL_UPLOAD'			=> 'N\'eus bet pellgaset nemet ul lodenn ouzh ar restr.',
	'PHP_SIZE_NA'				=> 'Re vras eo ar stagadenn.<br />N\'eus ket bet tu kavout petra eo ar ment brasañ posupl, termenet gant PHP e php.ini.',
	'PHP_SIZE_OVERRUN'			=> 'Re vras eo ar stagadenn, n\'hall ket bezañ ouzhpenn %d MB.<br />E php.ini e vez dibabet kement-mañ, setu n\'hall ket bezañ kemmet.',
	'PLACE_INLINE'				=> 'Lakaat e korf ar gemennadenn',
	'POLL_DELETE'				=> 'Diverkañ ar vouezhiadrg',
	'POLL_FOR'					=> 'Lakaat ar vouezhiadeg da badout e-pad',
	'POLL_FOR_EXPLAIN'			=> 'Lakait 0 pe na skrivit netra evit ma vefe peurbadus ar vouezhiadeg.',
	'POLL_MAX_OPTIONS'			=> 'Dibab dre ezel',
	'POLL_MAX_OPTIONS_EXPLAIN'	=> 'An niver a zibaboù a rank bezañ graet gant unan o vouezhiañ.',
	'POLL_OPTIONS'				=> 'Dibaboù ar vouezhiadeg',
	'POLL_OPTIONS_EXPLAIN'		=> 'Lakait pep dibab war ul linenn nevez. Betek <strong>%d</strong> respont a c\'hellit dibab asambles.',
	'POLL_OPTIONS_EDIT_EXPLAIN'   => 'Lakait pep dibab war ul linenn disheñvel. Betek <strong>%d</strong> dibab a c\'hellit ober ganto. Ma tennit pe ouzhpennit un dibab e vo diverket an holl vouezhioù bet kontet betek-henn.',
	'POLL_QUESTION'				=> 'Goulenn ar vouezhiadeg',
	'POLL_TITLE_TOO_LONG'		=> 'Nebeutoc\'h eget 100 arouez e rank titl ar vouezhiadeg bezañ.',
	'POLL_TITLE_COMP_TOO_LONG'	=> 'Re ledan eo titl ho mouezhiadeg, mat e vefe deoc\'h tennañ BBCode pe <i>smilies</i>.',
	'POLL_VOTE_CHANGE'			=> 'Aotreañ da gemm an dibaboù ur wech bet mouezhiet',
	'POLL_VOTE_CHANGE_EXPLAIN'	=> 'Goude bezañ bet mouezhiet e c\'hello an izili cheñch an dibaboù a oa bet graet ganto.',
	'POSTED_ATTACHMENTS'		=> 'Stagadennoù bet kaset',
	'POST_APPROVAL_NOTIFY'		=> 'Ur postel a vo kaset deoc\'h pe vo bet asantet ho kemennadenn.',
	'POST_CONFIRMATION'			=> 'Gwiriañ ar c\'has',
	'POST_CONFIRM_EXPLAIN'		=> 'Evit talañ ouzh ar c\'hemennadennoù kaset gant poelladoù e c\'houlenner diganeoc\'h adskrivañ ar c\'hod amañ-dindan. Sañsit e welit ar c\'hod er skeudenn amañ-dindan. M\'ho peus kudennoù da welet pe ma n\'hallit ket lenn ar c\'hod, kit e-darempred gant ar %sMerour%s.',
	'POST_DELETED'				=> 'Dilamet eo bet ar gemennadenn.',
	'POST_EDITED'				=> 'Kemmet eo bet ar gemennadenn.',
	'POST_EDITED_MOD'			=> 'Kemmet eo bet ho kemennadenn, met ezhomm a vo ma vefe gwelet gant ur c\'hasour a-raok ma c\'hellfe bezañ embannet.',
	'POST_GLOBAL'				=> 'Hollek',
	'POST_ICON'					=> 'Skeudennig ar gemennadenn',
	'POST_NORMAL'				=> 'Boutin',
	'POST_REVIEW'				=> 'Adwelet ar gemennadenn',
	'POST_REVIEW_EXPLAIN'		=> 'Ur respont pe ouzhpenn a zo bet graet d\'ar sujed-mañ. Marteze ho po c\'hoant da adwelet ho kemennadenn e-kañver ar re-se.',
	'POST_STORED'				=> 'Kaset eo bet ar gemennadenn.',
	'POST_STORED_MOD'			=> 'Enrollet eo bet ho kemennadenn, met ezhomm a vo ma vefe asantet gant ur c\'hasour a-raok bezañ embannet.',
	'POST_TOPIC_AS'				=> 'Kas ar sujed evel',
	'PROGRESS_BAR'				=> 'Barenn mont war-raok',

	'QUOTE_DEPTH_EXCEEDED'		=> 'N\'hallit lakaat nemet %1$d meneg an eil e-diabarzh egile.',

	'SAVE'						=> 'Mirout',
	'SAVE_DATE'					=> 'Miret d\'an',
	'SAVE_DRAFT'				=> 'Mirout ar vrouilhoñs',
	'SAVE_DRAFT_CONFIRM'		=> 'Er brouilhoñs e vo miret ar sujed hag ar gemennadenn, met an traoù all (stagadennoù, ..) a vo tennet kuit. Ha c\'hoant ho peus da vriout ho prouilhoñs ?',
	'SMILIES'					=> '<i>Smilies</i>',
	'SMILIES_ARE_OFF'			=> '<em>Mont a ra</em> ar <i>smilies</i> en-dro',
	'SMILIES_ARE_ON'			=> '<em>N\'ez a ket</em> ar <i>smilies</i> en-dro',
	'STICKY_ANNOUNCE_TIME_LIMIT'=> 'Padelezh ur c\'hemenn/post-it',
	'STICK_TOPIC_FOR'			=> 'Pegañ ar sujed evit',
	'STICK_TOPIC_FOR_EXPLAIN'	=> 'Lakait 0 pe na skrivit netra evit ma vefe peurbadus ar post-it/kemenn.',
	'STYLES_TIP'				=> 'Korvigell:buan e c\'hell ar stiloù bezañ lakaet war un destenn diuzet.',

	'TOO_FEW_CHARS'				=> 'Re nebeud a arouezioù a zo en ho kemennadenn.',
	'TOO_FEW_POLL_OPTIONS'		=> 'Daou zibab d\'an nebeutañ eo dav deoc\'h lakaat.',
	'TOO_MANY_ATTACHMENTS'		=> 'N\'haller ket stagañ un dra all, %d eo ar muiañ posupl.',
	'TOO_MANY_CHARS'			=> 'Re a arouezioù a zo en ho kemennadenn.',
	'TOO_MANY_CHARS_POST'      => '%1$d arouez a zo en ho kemennadenn. D\'ar muiañ e vez aotreet %2$d arouez.',
	'TOO_MANY_CHARS_SIG'      => '%1$d arouez a zo en ho sinadur. D\'ar muiañ e vez aotreet %2$d arouez.',

	'TOO_MANY_POLL_OPTIONS'		=> 'Re a zibaboù ho peus lakaet er vouezhiadeg.',
	'TOO_MANY_SMILIES'			=> 'Re a <i>smilies</i> a zo en ho kemennadenn. N\'haller ket lakaat ouzhpenn %d.',
	'TOO_MANY_URLS'				=> 'Re a liammoù a zo en ho kemennadenn. N\'haller ket lakaat ouzhpenn %d.',
	'TOO_MANY_USER_OPTIONS'		=> 'N\'hallit ket kinnig d\'an dud muioc\'h a zibaboù asambles eget ma vez a respontoù da zibab.',
	'TOPIC_BUMPED'				=> 'Diskennet eo bet ar sujed.',

	'UNAUTHORISED_BBCODE'		=> 'N\'hallit ket ober gant n\'eus forzh peseurt BBCode: %s.',
	'UNGLOBALISE_EXPLAIN'		=> 'Evit lakaat ar sujed-mañ da dremen en-dro eus unan hollek da unan voutin eo dav deoc\'h resisaat e peseurt forom e vo lakaet.',
	'UPDATE_COMMENT'			=> 'Evezhiadenn an hizivaat',
	'URL_INVALID'				=> 'Direizh eo an URL bet roet ganeoc\'h.',
	'URL_NOT_FOUND'				=> 'N\'eo ket bet kavet ar restr bet kinniget ganeoc\'h.',
	'URL_IS_OFF'				=> '<em>Ne vez ket troet</em> an URLoù da liammoù',
	'URL_IS_ON'					=> '<em>Troet e vez</em> an URLoù da liammoù',
	'USER_CANNOT_BUMP'			=> 'N\'hallot ket diskenn sujedoù er forom-mañ.',
	'USER_CANNOT_DELETE'		=> 'N\'hallit ket dilemel kemennadennoù er forom-mañ.',
	'USER_CANNOT_EDIT'			=> 'N\'hallit ket kemm sujedoù er forom-mañ.',
	'USER_CANNOT_REPLY'			=> 'Gallout a rit respont er forom-mañ.',
	'USER_CANNOT_FORUM_POST'	=> 'N\'hallit ket kas kemennadennoù war ar forom-mañ, dre ma ne vez ket gouzañvet gant hennezh.',

	'VIEW_MESSAGE'				=> '%sGwelet ar gemennadenn ho peus kinniget%s',
	'VIEW_PRIVATE_MESSAGE'		=> '%sGwelet ar gerig prevez a oa bet kaset ganeoc\'h%s',

	'WRONG_FILESIZE'			=> 'Re vras eo ar restr %1d %2s e c\'hell bezañ d\'ar muiañ.',
	'WRONG_SIZE'				=> 'D\'an nebeutañ %1$d piksel ledander, %2$d piksel uhelder ha d\'ar muiañ %3$d piksel ledander ha %4$d piksel uhelder e rank bezañ ar skeudenn.  %5$d piksel ledander ha %6$d piksel uhelder eo ar skeudenn bet kinniget ganeoc\'h.',
));

?>
