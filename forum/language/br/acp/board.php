<?php
/**
*
* acp_board [Brezhoneg]
*
* @package language
* @version $Id: board.php 8554 2008-05-15 13:29:14Z Kellanved $
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

// Board Settings
$lang = array_merge($lang, array(
	'ACP_BOARD_SETTINGS_EXPLAIN'	=> 'Amañ e c\'hellit termeniñ perzhioù diazez ho forom, reiñ un anv hag un deskrivadur dezhañ, hag, e-touez traoù all, dibab ar gwerzhid-eur hag ar yezh dre-ziouer.',
	'CUSTOM_DATEFORMAT'				=> 'Boutin…',
	'DEFAULT_DATE_FORMAT'			=> 'Stumm an deiziad',
	'DEFAULT_DATE_FORMAT_EXPLAIN'	=> 'Graet e vez gant stumm ar fonksion PHP <code>date</code>.',
	'DEFAULT_LANGUAGE'				=> 'Yezh dre-ziouer',
	'DEFAULT_STYLE'					=> 'Gwiskadur dre-ziouer',
	'DISABLE_BOARD'					=> 'Serriñ ar forom',
	'DISABLE_BOARD_EXPLAIN'			=> 'N\'hallo ket an implijerien mont war ar forom pa vo dibabet an dra-mañ. Gallout a rit lakaat ur gerig (255 arouez d\'ar muiañ)evit displegañ perak, m\'ho peus c\'hoant.',
	'OVERRIDE_STYLE'				=> 'Mont dreist gwiskadur an ezel',
	'OVERRIDE_STYLE_EXPLAIN'		=> 'Erlec\'hiet e vo ar gwiskadur implijet gant an ezel gant an hini dibabet ganeoc\'h.',
	'SITE_DESC'						=> 'Deskrivadur ouzh ar forom',
	'SITE_NAME'						=> 'Anv ar forom',
	'SYSTEM_DST'					=> 'Ober gant amzer an hañv/<abbr title="Eur ma Sav an Heol">HSH (DST)</abbr>',
	'SYSTEM_TIMEZONE'				=> 'Gwerzhid-eur ar sistem',
	'WARNINGS_EXPIRE'				=> 'Padelezh ur c\'hemenn groñs',
	'WARNINGS_EXPIRE_EXPLAIN'		=> 'An niver a zevezhioù a dremeno a-raok ma vefe diverket ur c\'hemenn-groñs ouzh dielloù un ezel.',
));

// Board Features
$lang = array_merge($lang, array(
	'ACP_BOARD_FEATURES_EXPLAIN'	=> 'Amañ e c\'hellit dibab ober pe chom hep ober gant servijoù \'zo eus ar forom.',

	'ALLOW_ATTACHMENTS'			=> 'Aotreañ ar stagadennoù',
	'ALLOW_BIRTHDAYS'			=> 'Aotreañ deizioù-ha-bloaz',
	'ALLOW_BIRTHDAYS_EXPLAIN'	=> 'Aotreañ an dud da lakaat o zeiz-ha-bloaz ha da ziskouez o oad er bajennoù-emginnig. Gant un dilenn disheñvel e vez graet war-dro an deizioù-ha-bloaz a vez diskouezet war ar roll.',
	'ALLOW_BOOKMARKS'			=> 'Aotreañ da lakaat sujedoù er sinedoù',
	'ALLOW_BOOKMARKS_EXPLAIN'	=> 'Gallout a ra an ezel mirout e sinedoù dezhañ e-unan.',
	'ALLOW_BBCODE'				=> 'Aotreañ d\'ober gant ar BBCode',
	'ALLOW_FORUM_NOTIFY'		=> 'Aotreañ da heuliañ ur forom',
	'ALLOW_NAME_CHANGE'			=> 'Aotreañ un ezel da cheñch anv-ezel',
	'ALLOW_NO_CENSORS'			=> 'Aotreañ an izili da dremen dreist an eskemm-gerioù',
	'ALLOW_NO_CENSORS_EXPLAIN'	=> 'Gallout a raio un ezel dibab ma ne vefe ket eskemmet ar gerioù a skriv er foromoù hag en e gerigoù prevez.',
	'ALLOW_PM_ATTACHMENTS'		=> 'Aotreañ ar stagadennoù er Gerigoù Prevez',
	'ALLOW_SIG'					=> 'Aotreañ ar sinadurioù',
	'ALLOW_SIG_BBCODE'			=> 'Aotreañ ar BBCode e sinadurioù an izili',
	'ALLOW_SIG_FLASH'			=> 'Aotreañ ar balizennoù <code>[FLASH]</code> e sinadurioù an izili',
	'ALLOW_SIG_IMG'				=> 'Aotreañ ar balizennoù <code>[IMG]</code> e sinadurioù an izili',
	'ALLOW_SIG_LINKS'			=> 'Aotreañ al liammoù e sinadurioù an izili',
	'ALLOW_SIG_LINKS_EXPLAIN'	=> 'Ma ne vez ket aotreet, n\'ez aio nag ar valizenn <code>[URL]</code> nag al “”liammoù burzhudus” en-dro.',
	'ALLOW_SIG_SMILIES'			=> 'Aotreañ ar <i>smilies</i> e sinadurioù an izili',
	'ALLOW_SMILIES'				=> 'Aotreañ ar <i>smilies</i>',
	'ALLOW_TOPIC_NOTIFY'		=> 'Aotreañ an izili da heuliañ sujedoù',
	'BOARD_PM'					=> 'Eskemm Gerigoù Prevez',
	'BOARD_PM_EXPLAIN'			=> 'Aotreañ pe get an holl izili da eskemm Gerigoù Prevez etrezo.',
));

// Avatar Settings
$lang = array_merge($lang, array(
	'ACP_AVATAR_SETTINGS_EXPLAIN'	=> 'Bihan eo ar skeudennigoù-emginnig, ha staget e vezont gant un ezel ouzh e anv. Hervez gwiskadur ar forom e vint diskouezet dindan an anv-ezel pa vo lennet ur gemennadenn outañ er forom. Amañ e c\'hellit termeniñ an doare ma vo termenet o skeudennigoù-emginnig gant an izili. Evit ma c\'hallfent pellgas skeudennigoù-emginnig adal o urzhiataerez eo dav deoc\'h bezañ bet krouet an teuliad meneget amañ-dindan, ha bezañ asur ma vez aotreet da skrivañ ennañ. Evit ar skeudennoù-emginnig hepken e talvez bevennoù ar mentoù a vez roet amañ, ha ket evit ar skeudennoù staget er c\'hemennadennoù.',

	'ALLOW_LOCAL'					=> 'Ober gant skeudennigoù ar garidenn',
	'ALLOW_REMOTE'					=> 'Ober gant skeudennigoù a-bell',
	'ALLOW_REMOTE_EXPLAIN'			=> 'Degemer al liammoù davet skeudennigoù a zo war ul lec\'hienn all.',
	'ALLOW_UPLOAD'					=> 'Ober gant ar pellgas skeudennigoù',
	'AVATAR_GALLERY_PATH'			=> 'Treug garidenn ar skeudennigoù',
	'AVATAR_GALLERY_PATH_EXPLAIN'	=> 'An treug, o lorc\'hañ ouzh teuliad phpBB, evit skeudennigoù rakkarget ar forom. <samp>images/avatars/gallery</samp>.',
	'AVATAR_STORAGE_PATH'			=> 'Treug mirout ar skeudennigoù',
	'AVATAR_STORAGE_PATH_EXPLAIN'	=> 'An trueg, o lorc\'hañ ouzh teuliad phpBB, sk. <samp>images/avatars/upload</samp>.',
	'MAX_AVATAR_SIZE'				=> 'Ment brasañ aotreet evit ur skeudennig',
	'MAX_AVATAR_SIZE_EXPLAIN'		=> 'Ledander X Hed (e pikselioù).',
	'MAX_FILESIZE'					=> 'Ment brasañ aotreet evit teuliad ar skeudennigoù',
	'MAX_FILESIZE_EXPLAIN'			=> 'Evit ar skeudennigoù pellgaset.',
	'MIN_AVATAR_SIZE'				=> 'Ment bihanañ aotreet evit ur skeudennig',
	'MIN_AVATAR_SIZE_EXPLAIN'		=> 'Ledander X Hed (e pikselioù).',
));

// Message Settings
$lang = array_merge($lang, array(
	'ACP_MESSAGE_SETTINGS_EXPLAIN'		=> 'Amañ e c\'hellit lakaat an holl dibaboù dre-ziouer evit an eskemm Gerigoù Prevez.',

	'ALLOW_BBCODE_PM'			=> 'Aotreañ ar BBCode er Gerigoù Prevez',
	'ALLOW_FLASH_PM'			=> 'Aotreañ implij ar balizennoù <code>[FLASH]</code>',
	'ALLOW_FLASH_PM_EXPLAIN'   => 'Evit ma c\'hellfe flash bezañ implijet er gerigoù prvez eo dav ma vefe aotreet amañ hag e-touez an aotreoù.',
	'ALLOW_FORWARD_PM'			=> 'Aotreañ da dreuzkas Gerigoù Prevez',
	'ALLOW_IMG_PM'				=> 'Aotreañ implij ar balizennoù <code>[IMG]</code>',
	'ALLOW_MASS_PM'				=> 'Aotreañ da gas Gerigoù Prevez da veur a izili war an dro, ha da strolladoù',
	'ALLOW_PRINT_PM'			=> 'Aotreañ da voullañ ar gweled er Gerigoù Prevez',
	'ALLOW_QUOTE_PM'			=> 'Aotreañ ar menegoù er Gerigoù Prevez',
	'ALLOW_SIG_PM'				=> 'Aotreañ ar sinadurioù er Gerigoù Prevez',
	'ALLOW_SMILIES_PM'			=> 'Aotreañ ar <i>smilies</i> er Gerigoù Prevez',
	'BOXES_LIMIT'				=> 'Niver brasañ aotreet a C\'herigoù Prevez er voest-degemer',
	'BOXES_LIMIT_EXPLAIN'		=> 'Ne vo ket aotreet an Izili da gaout ouzhpen an niver-mañ a C\'herigoù Prevez e-barzh o voestoù Gerigoù-Prevez. Ma lakait 0, ne vo ket bevennet an nier a C\'herigoù a c\'hellont kaout.',
	'BOXES_MAX'					=> 'Niver brasañ aotreet a zeuliadoù evit lakaat Gerigoù Prevez',
	'BOXES_MAX_EXPLAIN'			=> 'Dre ziouer, ne vo ket aotreet an izili da grouiñ ouzhpenn an niver-mañ a zeuliadoù evit lakaat o C\'herigoù Prevez.',
	'ENABLE_PM_ICONS'			=> 'Aotreañ da implijout skeudennigoù-sujed er Gerigoù Prevez',
	'FULL_FOLDER_ACTION'		=> 'Oberenn dre-ziouer pa vez leun un teuliad',
	'FULL_FOLDER_ACTION_EXPLAIN'=> 'Ar pezh a vo graet ma vez leun un teuliad ha ma n\'hall an ezel ober netra, da skouer peogwir ne vez ket aotreet dezhañ. Evit ar “Gerigoù Bet Kaset” e vo atav diverkañ gerigoù an oberenn dre-ziouer.',
	'HOLD_NEW_MESSAGES'			=> 'Klask Gerigoù Nevez',
	'PM_EDIT_TIME'				=> 'Padelezh evit gallout kemm c\'hoazh ur Gerig Prevez',
	'PM_EDIT_TIME_EXPLAIN'		=> 'Bevennet e vo an amzer en devo un ezel evit kemm ur Gerig Prevez goude ma vefe bet kaset ma n\'eo ket bet digoret c\'hoazh gant ar resever. Ma lakait 0, ne vo ket bevennet an amzer-mañ.',
));

// Post Settings
$lang = array_merge($lang, array(
	'ACP_POST_SETTINGS_EXPLAIN'			=> 'Amañ e c\'hellit kemm an holl dibaboù a vez graet dre-ziouer evit ar c\'has kemennadennoù.',
	'ALLOW_POST_LINKS'					=> 'Aotreañ al liammoù er c\'hemennadennoù/Gerigoù Prevez',
	'ALLOW_POST_LINKS_EXPLAIN'			=> 'Ma ne vez ket aotreet, n\'ez aio en-dro nag ar balizennoù <code>[URL]</code> nag al “liammoù burzhudus”.',
	'ALLOW_POST_FLASH'               => 'Aotreañ implij balizennoù <code>[FLASH]</code> er c\'hemennadennoù',
	'ALLOW_POST_FLASH_EXPLAIN'         => 'Ma ne vez ket aotreet, n\'ez aio ket ar balizennoù BBCode <code>[FLASH]</code> en-dro er c\'hemennadennoù. E mod all eo war bajenn an aotreoù e vez meret daoust hag aotret e vez un ezel d\'ober gant balizennoù BBCode <code>[FLASH]</code> pe get.',

	'BUMP_INTERVAL'					=> 'Padelezh a-raok adpignat',
	'BUMP_INTERVAL_EXPLAIN'			=> 'An niver a vinutennoù, eurvezhioù, pe zevezhioù, etre ar mare ziwezhañ ma\'z eus bet respontet d\'ar sujed hag ar mare ma c\'haller adpignat anezhañ.',
	'CHAR_LIMIT'					=> 'Niver brasañ aotreet dre gemennadenn',
	'CHAR_LIMIT_EXPLAIN'			=> 'An niver brasañ a arouezioù a c\'hello bezañ lakaet en ur gemennadenn. MA lakait 0, ne vo bevenn ebet.',
	'DISPLAY_LAST_EDITED'			=> 'Diskouez an titouroù war ar wech diwezhañ ma\'z eo bet kemmet ar gemennadenn',
	'DISPLAY_LAST_EDITED_EXPLAIN'	=> 'Dibabit daoust hag-eñ e vo ouzhpennet titouroù er gemennadenn diwar-benn ar c\'hemmoù a zo bet graet dezhi, pa vo kemmet.',
	'EDIT_TIME'						=> 'Padelezh evit gallout kemm ur gemennadenn',
	'EDIT_TIME_EXPLAIN'				=> 'Bevennet e vo an amzer evit kemm ur gemennadenn goude bezañ kaset unan. Ma lakait 0, ne vo ket bevennet an amzer hag e c\'hello ar gemennadenn bezañ kemmet forzh pegoulz.',
	'FLOOD_INTERVAL'				=> 'Padelezh a-raok gallout pstañ en-dro',
	'FLOOD_INTERVAL_EXPLAIN'		=> 'An niver a eilennoù a rank un ezel gortoz, goude bezañ kaset ur gemennadenn, evit kas un eil. Evit aotreañ izili da vont dreist d\'an dra-mañ, kemmit o aotreoù.',
	'HOT_THRESHOLD'					=> 'Niver a gemennadennoù a-raok bezañ lakaet da “entanus”',
	'HOT_THRESHOLD_EXPLAIN'			=> 'An niver a gemennadennoù a rank bezañ en ur sujed a-raok ma vefe lakaet hennezh da “entanus”. Ma lakait 0, ne vo lakaet sujed ebet da “entanus”',
	'MAX_POLL_OPTIONS'				=> 'Niver brasañ aotreet a zibaboù en ur sujed',
	'MAX_POST_FONT_SIZE'			=> 'Ment brasañ aotreet evit ur skritur en ur gemennadenn',
	'MAX_POST_FONT_SIZE_EXPLAIN'	=> 'Ar ment brasañ a c\'hello ur skritur bezañ en ur gemennadenn. Ma lakait 0 c\'hello ur skritur bezañ forzh peseurt ment.',
	'MAX_POST_IMG_HEIGHT'			=> 'Uhelder brasañ aotreet evitur skeudenn en ur gemennadenn',
	'MAX_POST_IMG_HEIGHT_EXPLAIN'	=> 'An uhelder brasañ a c\'hello ur skeudenn pe ur restr flash bezañ en ur gemennadenn. Ma lakait 0, ne vo bevenn ebet d\'ar ment-se.',
	'MAX_POST_IMG_WIDTH'			=> 'Ledander brasañ aotreet evit ur skeudenn en ur gemennadenn',
	'MAX_POST_IMG_WIDTH_EXPLAIN'	=> 'Al ledander brasañ a c\'hello ur skeudenn pe ur restr flash bezañ en ur gemennadenn. Ma lakait 0, ne vo bevenn ebet d\'ar ment-se.',
	'MAX_POST_URLS'					=> 'Niver brasañ a liammoù aotreet dre gemennadenn',
	'MAX_POST_URLS_EXPLAIN'			=> 'An niver vrasañ a liammoù a vo degemeret en ur gemennadenn. Ma lakit 0 e vint degemeret holl.',
	'POSTING'						=> 'Kas',
	'POSTS_PER_PAGE'				=> 'Kemennadennoù war bep pajenn',
	'QUOTE_DEPTH_LIMIT'				=> 'Niver brasañ a venegoù an eil e-barzh egile en ur gemennadenn',
	'QUOTE_DEPTH_LIMIT_EXPLAIN'		=> 'An niver brasañ a venegoù a vo aotreet an eil e-barzh egile en ur gemennadenn. Ma lakait 0, ne vo ket bevennet an niver.',
	'SMILIES_LIMIT'					=> 'Niver brasañ a <i>smilies</i> aotreet war bep kemennadenn',
	'SMILIES_LIMIT_EXPLAIN'			=> 'An niver vrasañ a <i>smilies</i> a vo degemeret en ur gemennadenn. Ma lakait 0, ne vo bevenn ebet d\'o niver.',
	'TOPICS_PER_PAGE'				=> 'Sujedoù war bep pajenn',
));

// Signature Settings
$lang = array_merge($lang, array(
	'ACP_SIGNATURE_SETTINGS_EXPLAIN'	=> 'Amañ e c\'hellit ober an dibaboù pennañ evit ar pezh a sell ouzh ar sindurioù.',

	'MAX_SIG_FONT_SIZE'				=> 'Ment brasañ aotreet evit testenn ur sinadur',
	'MAX_SIG_FONT_SIZE_EXPLAIN'		=> 'Ar ment brasañ a vo aotreet an destenn da vezañ en ur sinadur. Ma lakait 0, ne vo bevenn ebet d\'e vent.',
	'MAX_SIG_IMG_HEIGHT'			=> 'Uhelder brasañ aotreet evit skeudenn ur sinadur',
	'MAX_SIG_IMG_HEIGHT_EXPLAIN'	=> 'An uhelder brasañ a vo aotreet ur skeudenn pe ur restr flash da vezañ en ur sinadur. Ma lakait 0, ne vo bevenn ebet d\'an uhelder-se.',
	'MAX_SIG_IMG_WIDTH'				=> 'Ledander brasañ aotreet evit skeudenn ur sinadur',
	'MAX_SIG_IMG_WIDTH_EXPLAIN'		=> 'Al ledander brasañ a vo aotreet ur skeudenn da vezañ en ur sinadur. Ma lakait 0, ne vo bevenn ebet d\'al ledander-se.',
	'MAX_SIG_LENGTH'				=> 'Hirder brasañ aotreet en ur sinadur',
	'MAX_SIG_LENGTH_EXPLAIN'		=> 'An niver a arouezioù eo arabat dibaseal n ur sinadur.',
	'MAX_SIG_SMILIES'				=> 'Niver brasañ a <i>smilies</i> aotreet en ur sinadur',
	'MAX_SIG_SMILIES_EXPLAIN'		=> 'An niver brasañ a <i>smilies</i> a vo aotreet en ur sinadur. Ma lakait 0, ne vo bevenn ebet d\'an niver-se.',
	'MAX_SIG_URLS'					=> 'Niver brasañ a liammoù en ur sinadur',
	'MAX_SIG_URLS_EXPLAIN'			=> 'An niver brasañ a liammoù a vo aotreet en ur sinadur. Ma lakait 0, ne vo bevenn ebet d\'an niver-se.',
));

// Registration Settings
$lang = array_merge($lang, array(
	'ACP_REGISTER_SETTINGS_EXPLAIN'		=> 'Amañ e c\'hellit ober an dibaboù pennañ evit ar pezh a sell ouzh an emezelañ hag ouzh an aeladoù.',

	'ACC_ACTIVATION'			=> 'Gwiriañ ar c\'hontoù krouet',
	'ACC_ACTIVATION_EXPLAIN'	=> 'Gant kement-mañ e vez dibabet daoust hag-eñ e c\'hell un ezel bezañ anavezet gant ar forom diouzhtu goude bezañ emezelet, pe daoust hag-eñ eo ret ma vefe asantet an emezelañ. Gallout a rit ivez ober ma ne vefe tu da zen ebet emezelañ.',
	'ACC_ADMIN'					=> 'Gant ar Merour',
	'ACC_DISABLE'				=> 'Ket posupl',
	'ACC_NONE'					=> 'Hini ebet',
	'ACC_USER'					=> 'Gant an Ezel',
//	'ACC_USER_ADMIN'			=> 'User + Admin',
	'ALLOW_EMAIL_REUSE'			=> 'Aotreañ da implijout div wech ar memes postel',
	'ALLOW_EMAIL_REUSE_EXPLAIN'	=> 'Aotreet e vo izili lies da emezelañ gant ar memes postel.',
	'COPPA'						=> 'Difenn ar vugale (COPPA)',
	'COPPA_FAX'					=> 'Niverenn pelleier evit COPPA',
	'COPPA_MAIL'				=> 'Postel evit COPPA',
	'COPPA_MAIL_EXPLAIN'		=> 'Ar postel ma ranko ar gerent kas ar furm-skrid-emezelañ dezhañ en-dro.',
	'ENABLE_COPPA'				=> 'Ober gant COPPA',
	'ENABLE_COPPA_EXPLAIN'		=> 'Gant kement-mañ e rank an izili lavarout daoust hag-eñ int dindan pe ouzhpenn 13 bloaz, ha doujañ ouzh COPPA ar Stadoù-Unanet. Ma ne vez ket graet gant COPPA, neuze ne vo ket strollet an izili hervez ma vezont tizhet gant COPPA pe get.',
	'MAX_CHARS'					=> 'D\'ar muiañ',
	'MIN_CHARS'					=> 'D\'an nebeutañ',
	'NO_AUTH_PLUGIN'			=> 'N\'eus bet kavet astenn ebet evit bezañ anavezet.',
	'PASSWORD_LENGTH'			=> 'Hirder ar ger-tremen',
	'PASSWORD_LENGTH_EXPLAIN'	=> 'An niver a arouezioù a rank bezañ d\'ar muiañ ha d\'an nebeutañ e ger-tremen un ezel.',
	'REG_LIMIT'					=> 'Taolioù-esae evit emezelañ',
	'REG_LIMIT_EXPLAIN'			=> 'An niver a daolioù-esae a c\'hell bezañ graet gant unan o klask emezelañ, pa rank skrivañ ar c\'hod, a-raok ma ne vefe ket posupl dezhañ emezelañ ken.',
	'USERNAME_ALPHA_ONLY'		=> 'Sifroù ha lizherennoù hepken',
	'USERNAME_ALPHA_SPACERS'	=> 'Sifroù, lizherennoù, ha stagerien',
	'USERNAME_ASCII'			=> 'ASCII (ket an Unicode etrevroadel)',
	'USERNAME_LETTER_NUM'		=> 'Forzh peseurt lizherenn ha sifr',
	'USERNAME_LETTER_NUM_SPACERS'	=> 'Forzh peseurt lizherenn, sifr, ha stager',
	'USERNAME_CHARS'			=> 'Niver brasañ a arouezioù aotreet',
	'USERNAME_CHARS_ANY'		=> 'Forzh peseurt arouez',
	'USERNAME_CHARS_EXPLAIN'	=> 'Bevenniñ doare an arouezioù a c\'hell bezañ implijet en un anv-ezel. Stager a dalvez evit : spas, -, +, _, [ ha ].',
	'USERNAME_LENGTH'			=> 'Hirder an anv-ezel',
	'USERNAME_LENGTH_EXPLAIN'	=> 'An niver a arouezioù a rank bezañ d\'ar muiañ ha d\'an nebeutañ en anv-ezel.',
));

// Visual Confirmation Settings
$lang = array_merge($lang, array(
	'ACP_VC_SETTINGS_EXPLAIN'		=> 'Amañ e c\'hellit ober an dibaboù pennañ evit ar pezh a sel ouzh ar gwiriañ dre welet ha CAPTCHA.',

	'CAPTCHA_GD'							=> 'GD CAPTCHA',
	'CAPTCHA_GD_FOREGROUND_NOISE'			=> 'Traoù dirak GD CAPTCHA',
	'CAPTCHA_GD_EXPLAIN'					=> 'Grit gant GD CAPTCHA evit kaout ur CAPTCHA kreñvoc\'h.',
	'CAPTCHA_GD_FOREGROUND_NOISE_EXPLAIN'	=> 'Grit gant traoù dirak ar skeudennoù diazezet war GD CAPTCHA evit ma vefent diaesoc\'h c\'hoazh da zielfennañ.',
	'CAPTCHA_GD_X_GRID'						=> 'Traoù a-drek GD CAPTCHA war an ahel a-led',
	'CAPTCHA_GD_X_GRID_EXPLAIN'				=> 'Diskennit an talvoud evit ma vefe ar skeudennoù GD CAPTCHA diaesoc\'h c\'hoazh da zielfennañ. Ma lakait 0, ne vo netra a-drek war an ahel a-led.',
	'CAPTCHA_GD_Y_GRID'						=> 'Traoù a-drek GD CAPTCHA war an ahel a-hed',
	'CAPTCHA_GD_Y_GRID_EXPLAIN'				=> 'Diskennit an talvoud evit ma vefe ar skeudennoù GD CAPTCHA diaesoc\'h c\'hoazh da zielfennañ. Ma lakait 0, ne vo netra a-drek war an ahel a-hed.',

	'CAPTCHA_PREVIEW_MSG'					=> 'N\'eo ket bet enrollet ho kemmoù evit dibaboù ar gwiriañ dre welet. Kement-mañ n\'eo nemet ur rakwelet.',
	'CAPTCHA_PREVIEW_EXPLAIN'				=> 'Evel-mañ e vo gwelet ar CAPTCHA ma vez graet gant an dilennoù evel m\'emaint termenet amañ. Grit gant an nozelenn Rakwelet evit hizivaat ar rakwelet. Evel-just ne vo ket rik ar memes CAPTCHA a vo diskouezet d\'an izili, dre ma vez savet unan nevez seul daol.',
	'VISUAL_CONFIRM_POST'					=> 'Ober gant ar gwiriañ dre welet pa vez kaset kemennadennoù gant ar weladennerien',
	'VISUAL_CONFIRM_POST_EXPLAIN'			=> 'Rediet e vo ar re a gas kemennadennoù hep bezañ anavezet gant ar forom da lakaat ar c\'hod a welont, evit mirout ouzh ar c\'hasadennoù gant robotoù.',
	'VISUAL_CONFIRM_REG'					=> 'Ober gant ar gwiriañ dre welet evit an emezelañ',
	'VISUAL_CONFIRM_REG_EXPLAIN'			=> 'Rediet e vo an dud o deus c\'hoant da emezelañ da lakaat ur c\'hod a welont war ar skramm, evit mirout ouzh an emezeladurioù gant robotoù.',
));

// Cookie Settings
$lang = array_merge($lang, array(
	'ACP_COOKIE_SETTINGS_EXPLAIN'		=> 'Gant an dilennoù-mañ e vez termenet peseurt roadoù a vez lakaet e-barzh an toupinoù a vez kaset da verdeer an implijer. Peurliesañ eo an talvoudoù boutin ar re vat; bezit asur ouzh ar pezh a rit pa rit kemmoù, peogwir ma kemmit traoù fall e c\'hellit mirout ouzh an implijerien da vezañ anavezet gant ar forom.',

	'COOKIE_DOMAIN'				=> 'Domani an toupin',
	'COOKIE_NAME'				=> 'Anv an toupin',
	'COOKIE_PATH'				=> 'Treug an toupin',
	'COOKIE_SECURE'				=> 'Surenteziñ an toupin',
	'COOKIE_SECURE_EXPLAIN'		=> 'Ma ra ho serviojour gant an SSL, neuze enaouit an dra-mañ. Ma ne ra ket, neuze na enaouit kat anezhañ. Ma vez enaouet ha ma ne ra ket ho servijour gant an SSL e savo kudennoù pa vo adsturiet ar pajennoù.',
	'ONLINE_LENGTH'				=> 'Padelezh gwelet piv a zo war ar forom',
	'ONLINE_LENGTH_EXPLAIN'		=> 'An niver a vinutennoù a dremeno a-raok ma ne vefe ket gwelet ken an izili dizoberiant e-barzh al listenn “Piv a zo war ar forom”. Seul uhelañ ma vo an talvoud, seul barrekoc\'h e ranko bezañ ar poellad a sav al listennoù.',
	'SESSION_LENGTH'			=> 'Padelezh ur weladenn',
	'SESSION_LENGTH_EXPLAIN'	=> 'Goude an niver-mañ a eilennoù e vo klozet ar weladenn.',
));

// Load Settings
$lang = array_merge($lang, array(
	'ACP_LOAD_SETTINGS_EXPLAIN'	=> 'Amañ e c\'hellit dibab ober gant pe chom hep ober gant lod eus ar fonksionoù a vez kinniget gant ar forom evit bihanaat ar barregezh-jediñ a zo ezhomm outi. War darn vuiañ ouzh ar servijourien, n\'eus ket ezhomm da zilezel fonksionoù. Met war lod all ispisial, pe pa vez meur a dud oc\'h ober gant ar memes boder e c\'hell bezañ dedennus chom hep ober gant fonksionoù n\'ho peus ket ezhomm outo. Gallout a rit ivez resisaat peseurt bevennoù evit ar c\'hargañ a-raok ma\'z afe ar forom maez-linenn.',

	'CUSTOM_PROFILE_FIELDS'			=> 'Takadoù personelaet evit ar pajennoù-emginnig',
	'LIMIT_LOAD'					=> 'Bevenn kargañ ar sistem',
	'LIMIT_LOAD_EXPLAIN'			=> 'Ma vez dibaseet an tavoud-mañ gant keidenn ar pezh a vez karget gant ar forom en ur vunutenn, neuze ez aio ar forom maez-linenn. Un talvoud par da 1.0 a dalvez tamm pe damm ~100% ouzh implij ur processeur. N\'ez a an dra-mañ en-dro nemet gant ar servijourien az a en-dro war un diazez UNIX hag el lec\'hioù ma c\'heller kavout an titour-mañ. Ma ne vez ket kavet bevenn ar c\'hargañ gant phpBB en em lakao an talvoud da 0 e-unan.',
	'LIMIT_SESSIONS'				=> 'Bevenn ar gweladennoù',
	'LIMIT_SESSIONS_EXPLAIN'		=> 'Ma vez dibaseet an talvoud-mañ gant an niver a weladennoù a vez graet en ur vinutenn, neuze ez aio ar forom maez-linenn. Lakait 0 evit ma ne vefe bevenn ebet d\'an niver a weladennoù.',
	'LOAD_CPF_MEMBERLIST'			=> 'Aotreañ ar gwiskadurioù da ziskouez takadoù personelaet evit an aeladoù e-barzh listenn an izili',
	'LOAD_CPF_VIEWPROFILE'			=> 'Diskouez takadoù personelaet e aelad an izili',
	'LOAD_CPF_VIEWTOPIC'			=> 'Diskouez takadoù personelaet war bajenn ar sujedoù',
	'LOAD_USER_ACTIVITY'			=> 'Diskouez e pelec\'h emañ oberiant an ezel',
	'LOAD_USER_ACTIVITY_EXPLAIN'	=> 'Diskouezh a ra, war an aelad ha Panell-Merañ an Ezel, e peseurt sujedoù/foromoù emañ oberiant. Aliet e vez da chom hep ober gant an dra-mañ ma vez ouzhpenn ur milion a gemennadennoù war ur forom.',
	'RECOMPILE_STYLES'				=> 'Adstummañ an elfennoù kozh er gwiskadur',
	'RECOMPILE_STYLES_EXPLAIN'		=> 'Mont a ra ar sistem da glask gwiskadurioù nevez e-touez ar restroù, hag adstummañ anezho.',
	'YES_ANON_READ_MARKING'			=> 'Merkañ ar sujedoù evit ar weladennerien',
	'YES_ANON_READ_MARKING_EXPLAIN'	=> 'Diskouez a ra d\'ar weladennerien ivez ha lennet e bet ar sujed ganto pe n\'eo ket bet. Ma ne vez ket graet gant ar servij-mañ, e vo lakaet an holl sujedoù evel ma vefent bet lennet evit ur gweladenner.',
	'YES_BIRTHDAYS'					=> 'Ober gant listenn an deizioù-ha-bloaz',
	'YES_BIRTHDAYS_EXPLAIN'			=> 'Ma ne vez ket graet gant an dra-mañ, neuze ne vo ket gwelet listenn an deizioù-ha-bloaz. Evit ma c\'hellfe an dilenn-mañ mont en-dro e rank hini an deizioù-ha-bloaz mont en-dro ivez.',
	'YES_JUMPBOX'					=> 'Diskouez ar voest lammus',
	'YES_MODERATORS'				=> 'Diskouez ar gasourien',
	'YES_ONLINE'					=> 'Listennañ an izili a zo war ar forom er mare-mañ',
	'YES_ONLINE_EXPLAIN'			=> 'Diskouez titouroù diwar-benn an ezel war ar bajenn pennañ ha war pajennoù ar foromoù hag ar sujedoù.',
	'YES_ONLINE_GUESTS'				=> 'Diskouez ar weladennerien a zo war ar forom',
	'YES_ONLINE_GUESTS_EXPLAIN'		=> 'Diskouezet e vo titouroù diwar-benn ar weladennerien a zo o tremen war ar forom.',
	'YES_ONLINE_TRACK'				=> 'Diskouez daoust hag-eñ emañ an ezel war ar forom pe n\'emañ ket.',
	'YES_ONLINE_TRACK_EXPLAIN'		=> 'Diskouez a ra, war aelad an ezel, ha war e aelad, daoust hag emañ war ar forom pe get. ',
	'YES_POST_MARKING'				=> 'Poentaouiñ ar sujedoù',
	'YES_POST_MARKING_EXPLAIN'		=> 'Ur poent a vez lakaet dirak ar sujed pa\'z eus bet respontet dezhañ gant an ezel.',
	'YES_READ_MARKING'				=> 'Mirout war ar servijour an titouroù diwar-benn ar pezh a zo bet lennet',
	'YES_READ_MARKING_EXPLAIN'		=> 'Kentoc\'h eget bezañ lakaet en un toupin e vo lakaet an titouroù diwar-benn ar sujedoù a zo bet lennet hag ar re n\'int ket bet war ar servijour.',
));

// Auth settings
$lang = array_merge($lang, array(
	'ACP_AUTH_SETTINGS_EXPLAIN'	=> 'Gouzañviñ a ra phpBB an astennoù a servij da vezañ anavezet. Gant ar re-se e c\'hellit termeniñ e peseurt mod e vo anavezet an izili gant ar forom pa gennaskaont outañ. Dre ziouer e vez kinniget teir astenn : DB, LDAP, hag Apache. N\'eus ket ezhomm ouzh titouroù ouzhpenn gant an holl hentennoù, setu na leuniit an titouroù nemet ma servijont d\'un dra bennak evit an hentenn bet dibabet.',

	'AUTH_METHOD'				=> 'Diuzet un hentenn evit bezañ anavezet.',

	'APACHE_SETUP_BEFORE_USE'	=> 'Dav eo deoc\'h staliañ an anavezout dre Apache a-raok gallout dibab an hentenn-mañ evit an anavezout. Dalc\'hit soñj eo ret ma vefe ar memes anv-ezel a vez implijet ganeoc\'h evit bezañ anavezet gant Apache hag hoc\'h anv-ezel war phpBB. Gant mod_php hepken e c\'hell an anavezout Apache bezañ implijet, ha ket gant ar stumm CGI; ha ret eo ma n\'ez afe ket safe_mode en-dro.',

	'LDAP_DN'						=> 'Diaz LDAP <var>dn</var>',
	'LDAP_DN_EXPLAIN'				=> 'An Anv Dezverket (Distinguished Name) eo se, o lec\'hiañ an titouroù diwar-benn an ezel, sk. <samp>o=Ma Embregerezh,c=BZH</samp>.',
	'LDAP_EMAIL'					=> 'Perzhioù ur postel LDAP',
	'LDAP_EMAIL_EXPLAIN'			=> 'Lakait amañ perzh postel ho tone implijer, ma\'z eus ouzh unan, evit termeniñ diouzhtu postel an izili nevez. Ma ne lakait netra amañ e vo goullo postel an izili a vez anavezet evit ar wech kentañ.',
	'LDAP_INCORRECT_USER_PASSWORD'	=> 'N\'eo ket bet posupl kennaskañ ouzh servijour LDAP gant an anv-ezel/ger-tremen bet roet ganeoc\'h.',
	'LDAP_NO_EMAIL'					=> 'N\'eus ket ouzh perzhioù ar postel bet roet ganeoc\'h.',
	'LDAP_NO_IDENTITY'				=> 'N\'eus ket bet gallet kavout ur road-den o klotañ gant %s.',
	'LDAP_PASSWORD'					=> 'Ger-tremenLDAP',
	'LDAP_PASSWORD_EXPLAIN'			=> 'Na lakait netra evit gallout kennaskañ hep bezañ anavezet. E mod all, lakait ar ge-tremen a glot gant an ezel meneget uheloc\'h. Kement-mañ a zo ret evit ar servijourien Active Directory. <strong>DIWALLIT:</strong> Miret e vo ar ger-tremen-mañ e stumm testenn plaen en ho tiaz-titouroù, setu e c\'hello bezañ gwelet gant forzh piv a c\'hell tizhout ho tiaz-titouroù pe piv a c\'hell gwelet ar bajenn-Merañ.',
	'LDAP_PORT'						=> 'Porzh ar servijour LDAP',
	'LDAP_PORT_EXPLAIN'				=> 'Gallout a rit resisaat ur porzh all a vo implijet evit kennaskañ ouzh ar servijour LDAP, kentoc\'h eget an hini 389 a vez implijet dre-ziouer.',
	'LDAP_SERVER'					=> 'Anv servijour LDAP',
	'LDAP_SERVER_EXPLAIN'			=> 'Ma rit gant LDAP eo an dra-mañ anv boder pe chomlec\'h IP ar servijour LDAP. Gallout a rit ivez reiñ un URL evel ldap://hostname:port/ .',
	'LDAP_UID'						=> '<var>uid</var> LDAP',
	'LDAP_UID_EXPLAIN'				=> 'An alc\'hwez a vez klasket un den resis ganti eo se , sk. <var>uid</var>, <var>sn</var>, h.a.',
	'LDAP_USER'						=> 'Implijer LDAP <var>dn</var>',
	'LDAP_USER_EXPLAIN'				=> 'Na lakait netra evit gallout kennaskañ hep bezañ anavezet. Ma lakait un dra bennak e implijo phpBB an anv bet roet, pa glasko bezañ anavezet, evit kavout an ezel a zere. Da skouer&nbsp;: <samp>uid=Username,ou=MyUnit,o=MyCompany,c=US</samp>. Kement-mañ a zo ret evit ar servijourien Active Directory.',
	'LDAP_USER_FILTER'				=> 'sili implijerien LDAP',
	'LDAP_USER_FILTER_EXPLAIN'		=> 'Gallout a rit bevenniñ ouzhpenn ar pezh a glaskit oc\'h implijout siloù ouzhpenn. Da skouer <samp>objectClass=posixGroup</samp> a roio <samp>(&amp;(uid=$username)(objectClass=posixGroup))</samp>',
));

// Server Settings
$lang = array_merge($lang, array(
	'ACP_SERVER_SETTINGS_EXPLAIN'	=> 'Amañ e c\'hellit ober an dibaboù a glot gant ar servijour hag an domani. Bezit asur ouzh an titouroù a lakait, ma lakait titouroù direizh e vo kaset posteloù enno titouroù gaou. Pa lakait anv an domani, n\'ankouait ket emañ http:// ennañ, pe ur ger all evit ur doare all da vont war internet. Na cheñchit niverenn ar porzh nemet ma ouzit e vez graet gant un tavloud all war ho servijour, peuliesañ eo 
80 an talvoud mat.',

	'ENABLE_GZIP'				=> 'Ober gant ar gwaskañ GZIP',
	'ENABLE_GZIP_EXPLAIN'		=> 'Gwasket e vo ar roadoù a-raok bezañ kaset d\'an implijer. Gallout a ra lakaat an tremen war ar rouedad da zisken, met gallout a ra ivez lakaat implij ar vemor da greskiñ diouzh tu ar servijour koulz ha diouzh hini an implijer.',
	'FORCE_SERVER_VARS'			=> 'Rediañ dilennoù URL ar servijour',
	'FORCE_SERVER_VARS_EXPLAIN'	=> 'Ma lakait ya, neuze e vo graet gant dilennoù ar servijour ho peus bet termenet amañ kentoc\'h eget gant ar re a vez termenet en un doare emgefreek.',
	'ICONS_PATH'				=> 'Treug mirout skeudennigoù ar sujedoù',
	'ICONS_PATH_EXPLAIN'		=> 'An treug o lorc\'hañ ouzh ho teuliad phpBB, sk. <samp>images/icons</samp>.',
	'PATH_SETTINGS'				=> 'Dilennoù an treug',
	'RANKS_PATH'				=> 'Treug mirout skeudennigoù ar renkoù',
	'RANKS_PATH_EXPLAIN'		=> 'An treug o lorc\'hañ ouzh ho teuliad phpBB, sk. <samp>images/ranks</samp>.',
	'SCRIPT_PATH'				=> 'Treug ar furmskridoù',
	'SCRIPT_PATH_EXPLAIN'		=> 'An treug e-lec\'h m\'emañ phpBB e-keñver anv an domani, sk. <samp>/phpBB3</samp>.',
	'SERVER_NAME'				=> 'Anv an domani',
	'SERVER_NAME_EXPLAIN'		=> 'Anv an domani ma\'z a ar forom-mañ en-dro adalezañ (sk. <samp>www.daskouer.bzh</samp>).',
	'SERVER_PORT'				=> 'Porzh ar servijour',
	'SERVER_PORT_EXPLAIN'		=> 'Ar porzh implijet gant ho servijour, 80 alies, chehit ma vez disheñvel an talvoud hepken.',
	'SERVER_PROTOCOL'			=> 'Doare da gennaskañ ouzh ar servijour',
	'SERVER_PROTOCOL_EXPLAIN'	=> 'An doare ma vez implijet gant ar servijour evit kennaskañ ma vez rediet an dilennoù-mañ. Ma ne vezont ket rediet, pe ma vezont goullo, neuze e vo termenet an doare da gennaskañ gant dilennoù surentez an toupinoù (<samp>http://</samp> pe <samp>https://</samp>).',
	'SERVER_URL_SETTINGS'		=> 'Dilennoù URL ar servijour',
	'SMILIES_PATH'				=> 'Treug mirout ar <i>smilies</i>',
	'SMILIES_PATH_EXPLAIN'		=> 'An treug o lorc\'hañ ouzh ho teuliad phpBB, sk. <samp>images/smilies</samp>.',
	'UPLOAD_ICONS_PATH'			=> 'Treug mirout skeudennigoù ar strolladoù astennoù',
	'UPLOAD_ICONS_PATH_EXPLAIN'	=> 'An treug o lorc\'hañ ouzh ho teuliad phpBB, sk. <samp>images/upload_icons</samp>.',
));

// Security Settings
$lang = array_merge($lang, array(
	'ACP_SECURITY_SETTINGS_EXPLAIN'		=> 'Amañ e c\'hellit ober an dibaboù a denn ouzh ar surentez.',

	'ALL'							=> 'An holl',
	'ALLOW_AUTOLOGIN'				=> 'Aotreañ ar chom anavezet', 
	'ALLOW_AUTOLOGIN_EXPLAIN'		=> 'Evit gouzout daoust hag-eñ e c\'hell an izili bezañ anavezet gant ar forom hep bezañ rediet da lakaat o zitouroù hiniennel bewech.', 
	'AUTOLOGIN_LENGTH'				=> 'Padelezh ur prantad chom anavezet (deizioù)', 
	'AUTOLOGIN_LENGTH_EXPLAIN'		=> 'An niver a zevezhioù a-raok ma vefe diverket un alc\'hwez chom anavezet.', 
	'BROWSER_VALID'					=> 'Gwiriañ gant ar merdeer',
	'BROWSER_VALID_EXPLAIN'			=> 'Ober ma vefe gwiriet seul daol gant ar merdeer, evit gwellaat ar surentez.',
	'CHECK_DNSBL'					=> 'Keñveriañ ar chomlec\'h IP ouzh Listenn Toull-Du DNS ',
	'CHECK_DNSBL_EXPLAIN'			=> 'Ma vez graet gant an dra-mañ e vo lakaet ar chomlec\'h IP keñver-ha-keñver ouzh ar servij DNSBL da vare an emezelañ hag ar c\'has kemennadennoù : <a href="http://spamcop.net">spamcop.net</a>, <a href="http://dsbl.org">dsbl.org</a> ha <a href="http://www.spamhaus.org">www.spamhaus.org</a>. Gallout a ra ar gwiriadur-mañ pdout ur pennadig, hervez an doare ma vez ardremmezet ar servijour. Ma welit ez a gorrekoc\'h ar forom, pe e vez roet respontoù positivle diabeg re alies, eo gwelloc\'h paouez gant ar gwiriañ-mañ.',
	'CLASS_B'						=> 'A.B',
	'CLASS_C'						=> 'A.B.C',
	'EMAIL_CHECK_MX'				=> 'Klask un enrolladenn MX hegerzh e-barzh domani ar postel',
	'EMAIL_CHECK_MX_EXPLAIN'		=> 'Ma vez graet gant kement-mañ e vo gwiriet domani ar postel bet roet da vare an emezelañ hag ar c\'hemmoù en aelad evit gwelet daoust hag-añ ez eus un enrolladenn MX reizh gantañ.',
	'FORCE_PASS_CHANGE'				=> 'Rediañ da cheñch ger-tremen',
	'FORCE_PASS_CHANGE_EXPLAIN'		=> 'Goulennet e vo digant an izili da cheñch o c\'her-tremen goude un niver bennak a zevezhioù. Ma lakait 0, ne vo ket graet gant an dra-mañ.',
	'FORM_TIME_MAX'					=> 'Amzer hirañ aotreet evit degemer ur furmskrid',
	'FORM_TIME_MAX_EXPLAIN'			=> 'An amzer a zo gant un ezel evit kinnig ur furmskrid. Grit gant -1 evit ma ne vefe bevenn ebet. Gallout a ra meme tra ur furmskrid dont da vezañ direizh ma vez tremenet padelezh ar gweladenn, ma vefe ouzh an dilenn-mañ pe get.',
	'FORM_SID_GUESTS'				=> 'Stagañ ar furmskridoù ouzh gweladennoù ar re n\'int ket ezel',
	'FORM_SID_GUESTS_EXPLAIN'		=> 'Ma vez graet gant an dra-mañ ez aio ar furmskrid kinniget d\'ar weladennerien en-dro evit o gweladenn hepken. Kudennoù a c\'hell sevel etre an dilenn-mañ hag ISPoù.',
	'FORWARDED_FOR_VALID'			=> 'Gwiriañ an talbenn <var>X_FORWARDED_FOR</var>',
	'FORWARDED_FOR_VALID_EXPLAIN'	=> 'Ne vo kendalc\'het ar gweladenn nemet ma vez tavloud an talbenn <var>X_FORWARDED_FOR</var> kaset ar memes hini hag hini ar goulenn tremenet. E <var>X_FORWARDED_FOR</var> ivez e vo keñveriet an harluioù ouzh ar chomlec\'hioù IP.',
	'IP_VALID'						=> 'Gwiriañ IP ur gweladenn',
	'IP_VALID_EXPLAIN'				=> 'Termeniñ a ra betek pelec\'h e vez implijet IP un ezel evit kadarnaat ur gweladenn : <samp>An holl</samp> a geñveria ar chomlec\'h a-bezh, <samp>A.B.C</samp> an arouezioù x.x.x kentañ, <samp>A.B</samp> an arouezioù x.x kentañ, <samp>Hini ebet</samp> na geñveria netra. War ar chomlec\'hioù IPv6 e keñveria <samp>A.B.C</samp> ar 4 bloc\'had kentañ hag <samp>A.B</samp> an 3 bloc\'had kentañ.',
	'MAX_LOGIN_ATTEMPTS'			=> 'Niver brasañ a daole-esae aotreet evit bezañ anavezet',
	'MAX_LOGIN_ATTEMPTS_EXPLAIN'	=> 'Goude an niver-mañ a c\'hwitadennoù e vo rediet an ezel d\'ober ouzhpenn gant ar gwiriañ dre welet.',
	'NO_IP_VALIDATION'				=> 'Hini ebet',
	'NO_REF_VALIDATION'				=> 'Hini ebet',
	'PASSWORD_TYPE'					=> 'Pegen luziet eo ar ger-tremen',
	'PASSWORD_TYPE_EXPLAIN'			=> 'Termenet e vez pegen luziet e rank bezañ ur ger-tremen pa vez dibabet pe kemmet gant an ezel. Ouzhpennet e vez an dilennoù kentañ ouzh ar re a heul.',
	'PASS_TYPE_ALPHA'				=> 'Dav dezhañ kaout sifroù ha lizherennoù',
	'PASS_TYPE_ANY'					=> 'Redi ebet',
	'PASS_TYPE_CASE'				=> 'Dav eo ma vefe mesket pennlizherennoù ha lizherennoù munut',
	'PASS_TYPE_SYMBOL'				=> 'Dav eo ma vefe arouezioù ennañ',
	'REF_HOST'						=> 'Gwiriañ ar boder hepken',
	'REF_PATH'						=> 'Gwiriañ an treug ivez',
	'REFERER_VALID'					=> 'Gwiriañ al lec\'hienn-orin (referer)',
	'REFERER_VALID_EXPLAIN'			=> 'Ma vez enaouet an dra-mañ e vo gwiriet lec\'hienn-orin ar goulennoù POST, ha keñveriet ouzh treug ar boder pe ar furmskrid. Galloud a ra sevel kudennoù evit ar foromoù oc\'h implijout meur a zomani pe un anavezout ouzh an diavaez.',
	'TPL_ALLOW_PHP'					=> 'Aotreañ ar PHP er gwiskadurioù',
	'TPL_ALLOW_PHP_EXPLAIN'			=> 'Ma vez graet gant se e vo anavezet ha dielfennet ar stadadegoù <code>PHP</code> hag <code>INCLUDEPHP</code> a zo er gwiskadurioù.',
));

// Email Settings
$lang = array_merge($lang, array(
	'ACP_EMAIL_SETTINGS_EXPLAIN'	=> 'Implijet e vez an titouroù-mañ pa gas ar forom posteloù d\'an izili. Bezit asur eo reizh ar postel roet ganeoc\'h, peogwir eo aze e vo adkaset forzh peseurt postel ma n\'eus ket gallet bezañ kaset d\'an ezel. Ma ne vez ket kinniget ur servij kas posteloù (dre PHP) gant ho poder e c\'hellit kas kemennadennoù diouzhtu oc\'h ober gant an SMTP. Evit se ez eus ezhomm ouzh chomlec\'h ur servijour a zere (goulennit digant ho poder ma vez ret), na roit anv kozh ebet eno ! M\'en deus ezhomm ar servijour ouzh un anavezout (hag en degouezh-mañ hepken), roit an anv-implijer, ar ger-tremen, hag an hentenn a zo ret evit bezañ anavezet.',

	'ADMIN_EMAIL'					=> 'Postel evit ar c\'has en-dro',
	'ADMIN_EMAIL_EXPLAIN'			=> 'Implijet e vo hennezh evit kas en-dro ar posteloù pa vez ret, hag evit ar goulennoù a denn ouzh an teknik. Atav e vo implijet evel ar postel <samp>Da Gas ar Respont dezhañ en-dro</samp> ha postel <samp>ar C\'haser</samp> pa vo kaset posteloù gant ar forom.',
	'BOARD_EMAIL_FORM'				=> 'Dre ar forom e eskemm an izili posteloù',
	'BOARD_EMAIL_FORM_EXPLAIN'		=> 'Kentoc\'h eget diskouez postel an izili war ar pajennoù e vezont aotreet da eskemm posteloù kenetrezo dre bajennoù ar foromoù.',
	'BOARD_HIDE_EMAILS'				=> 'Kuzhat ar posteloù',
	'BOARD_HIDE_EMAILS_EXPLAIN'		=> 'Ne vo ket gwelet tamm ebet posteloù an izili.',
	'CONTACT_EMAIL'					=> 'Postel evit daremprediñ',
	'CONTACT_EMAIL_EXPLAIN'			=> 'Gant ar postel-mañ e vo graet pa vo ezhomm da zaremprediñ ouzh unan a ra war-dro ar forom, da skouer evit kudennoù spam, fazioù, h.a. Atav eo ar postel a vo graet gantañ e lodennoù <samp>Eus</samp> ha <samp>Respont da</samp> ur postel.',
	'EMAIL_FUNCTION_NAME'			=> 'Anv ar fonksion evit kas posteloù',
	'EMAIL_FUNCTION_NAME_EXPLAIN'	=> 'Anv ar fonksion implijet evit kas posteloù dre PHP.',
	'EMAIL_PACKAGE_SIZE'			=> 'Ment ur pakad posteloù',
	'EMAIL_PACKAGE_SIZE_EXPLAIN'	=> 'An niver brasañ a bosteloù a vez kaset-maez dre bakad. Evit ar c\'hemennadennoù-diabarzh e vez implijet an dilenn-mañ, lakait anezhi da 0 m\'ho peus kudennoù gant posteloù ha n\'int ket bet kaset.',
	'EMAIL_SIG'						=> 'Sinadur ar posteloù',
	'EMAIL_SIG_EXPLAIN'				=> 'Staget e vo an destenn-mañ ouzh an holl bosteloù a vez kaset gant ar forom.',
	'ENABLE_EMAIL'					=> 'Aotreañ ar forom da gas posteloù',
	'ENABLE_EMAIL_EXPLAIN'			=> 'Ma ne vez ket graet gant an dra-mañ, ne vo kaset postel ebet gant ar forom.',
	'SMTP_AUTH_METHOD'				=> 'Hentenn anavezout implijet evit an SMTP',
	'SMTP_AUTH_METHOD_EXPLAIN'		=> 'N\'eus da vezañ implijet nemet ma vez termenet un anv-implijer pe ur ger-tremen. Ma n\'oc\'h ket asur ouzh an hentenn d\'ober ganti, goulennit digant ho poder.',
	'SMTP_CRAM_MD5'					=> 'CRAM-MD5',
	'SMTP_DIGEST_MD5'				=> 'DIGEST-MD5',
	'SMTP_LOGIN'					=> 'LOGIN',
	'SMTP_PASSWORD'					=> 'Ger-tremen SMTP',
	'SMTP_PASSWORD_EXPLAIN'			=> 'Na lakait ur ger-tremen nemet ma vez rediet gant ho servijour SMTP.',
	'SMTP_PLAIN'					=> 'PLAEN',
	'SMTP_POP_BEFORE_SMTP'			=> 'POP-A-RAOK-SMTP',
	'SMTP_PORT'						=> 'Porzh ar servijour SMTP',
	'SMTP_PORT_EXPLAIN'				=> 'Na gemmit an dra-mañ nemet ma\'z oc\'h sur emañ ho servijour SMTP war ur porzh all.',
	'SMTP_SERVER'					=> 'Chomlec\'h ar servijour SMTP',
	'SMTP_SETTINGS'					=> 'Dilennoù SMTP',
	'SMTP_USERNAME'					=> 'Anv-implijer SMTP',
	'SMTP_USERNAME_EXPLAIN'			=> 'Na lakait un anv-implijer nemet ma vez rediet gant ho servijour SMTP.',
	'USE_SMTP'						=> 'Ober gant ur servijour SMTP evit ar posteloù',
	'USE_SMTP_EXPLAIN'				=> 'Diuzit “Ya” m\'ho peus c\'hoant da gas posteloù gant ur servijour resis kentoc\'h eget gant fonksion mail PHP ar forom.',
));

// Jabber settings
$lang = array_merge($lang, array(
	'ACP_JABBER_SETTINGS_EXPLAIN'	=> 'Amañ e c\'hellit merañ an implij a vez graet ouzh Jabber evit ar flapañ prim ha kemennoù ar forom. Un hentenn-kennaskañ ouzh internet digor he zarzh eo Jabber, a c\'hell bezañ implijet gant n\'eus forzh piv. Gant servijourien Jabber \'zo e vez kinniget tremenvanioù a ro tro deoc\'h da zaremprediñ ouzh implijerien rouedadoù all. Ne vez ket kinniget an treuzborzhañ gant an holl servijourien, ha kemmoù en hentennoù a c\'hell mirout ouzh an trezborzhoù da vezañ kaset da benn. Bezit asur da lakaat titouroù ur c\'hont Jabber a zo outañ c\'hoazh, evel m\'emaint e vo implijet an titouroù Jabber roet ganeoc\'h gant phpBB',

	'ERR_JAB_PASSCHG'		=> 'N\'eus ket bet gallet kemm ar ger-tremen.',
	'ERR_JAB_PASSFAIL'		=> 'N\'eo ket bet hizivaet ar ger-tremen, %s.',
	'ERR_JAB_REGISTER'		=> 'Ur fazi a zo bet o klask emezelañ gant ar c\'hont-mañ, %s.',
	'ERR_JAB_USERNAME'		=> 'C\'hoazh ez eus ouzh an anv-implijer ho peus c\'hoant d\'ober gantañ, dibabit unan all mar plij.',

	'JAB_CHANGED'				=> 'Kemmet eo bet ar c\'hont Jabber.',
	'JAB_ENABLE'				=> 'Ober gant Jabber',
	'JAB_ENABLE_EXPLAIN'		=> 'Aotreet e vo implij Jabber evit flapiñ hag evit ar c\'hemennoù.',
	'JAB_GTALK_NOTE'			=> 'N\'ez aio ket GTalk en-dro dre ma n\'eo ket bet kavet ar fonksion <samp>dns_get_record</samp>. Ne vez ket kavet ar fonksion-mañ gant PHP4, ha n\'ez a ket en-dro dindan Windows. N\'ez a ket en-dro kenebeut er sistemoù diazezet war BSD, evel Mac Os.',
	'JAB_PACKAGE_SIZE'			=> 'Ment ur pakad Jabber',
	'JAB_PACKAGE_SIZE_EXPLAIN'	=> 'An niver a gemennoù kaset e-barzh pep pakad. Ma lakait 0 e vo kaset ar c\'hemennoù diouzhtu, ha ne vint ket lakaet en ur steudad evit bezañ kaset diwezhatoc\'h.',
	'JAB_PASSWORD'				=> 'Ger-tremen Jabber',
	'JAB_PASS_CHANGED'			=> 'Kemmet eo bet ger-tremen Jabber.',
	'JAB_PORT'					=> 'Porzh Jabber',
	'JAB_PORT_EXPLAIN'			=> 'Na lakait netra amañ, nemet ma vefec\'h sur n\'eo ket ar porzh 5222 a vez graet gantañ.',
	'JAB_REGISTERED'			=> 'Enrollet eo bet ar c\'hont nevez.',
	'JAB_RESOURCE'				=> 'Lec\'h Jabber',
	'JAB_RESOURCE_EXPLAIN'		=> 'Lec\'hiet e vez ar c\'hennaskadenn-mañ, sk. forom, du-mañ, h.a.',
	'JAB_SERVER'				=> 'Servijour Jabber',
	'JAB_SERVER_EXPLAIN'		=> 'Gwelit %sjabber.org%s evit kaout ul listenn servijourien.',
	'JAB_SETTINGS_CHANGED'		=> 'Kemmet eo bet dilennoù Jabber.',
	'JAB_USE_SSL'            => 'Kennaskañ gant SSL',
	'JAB_USE_SSL_EXPLAIN'      => 'Ma vez graet gant se e vo klasket implijout ur c\'hennaskañ surentezet. Gant ar porzh 5223 e vo graet ma oa bet resisaet an hini 5222.',
	'JAB_USERNAME'				=> 'Anv-implijer Jabber',
	'JAB_USERNAME_EXPLAIN'		=> 'Roit anv un ezel enrollet dindan Jabber. Ne vo ket gwiriet daoust ha reizh pe direzh eo an anv.',
));

?>
