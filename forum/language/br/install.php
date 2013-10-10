<?php
/**
*
* install [Brezhoneg]
*
* @package language
* @version $Id: install.php 8598 2008-06-04 15:37:06Z naderman $
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
	'ADMIN_CONFIG'				=> 'Dilennoù ar Merour',
	'ADMIN_PASSWORD'			=> 'Ger-tremen ar Merour',
	'ADMIN_PASSWORD_CONFIRM'	=> 'Adskrivit ger-tremen ar Merour',
	'ADMIN_PASSWORD_EXPLAIN'	=> 'Roit ur ger-tremen etre 6 ha 30 arouez, mar plij.',
	'ADMIN_TEST'				=> 'Gwiriañ dibaboù ar Merour',
	'ADMIN_USERNAME'			=> 'Anv-implijer ar Merour',
	'ADMIN_USERNAME_EXPLAIN'	=> 'Roit un anv-implijer etre 3 hag 20 arouez, mar plij.',
	'APP_MAGICK'				=> 'Gouzañviñ Imagemagick [ Stagadennoù ]',
	'AUTHOR_NOTES'				=> 'Notennoù ar Saver<br />&#187; %s',
	'AVAILABLE'					=> 'Da gaout',
	'AVAILABLE_CONVERTORS'		=> 'Troourien da gaout',

	'BEGIN_CONVERT'				=> 'Kregiñ gant an treiñ',
	'BLANK_PREFIX_FOUND'		=> 'Gwiriet eo bet ho tiazoù, hag ur staliadur reizh a zo bet kavet, hep rakgerioù.',
	'BOARD_NOT_INSTALLED'			=> 'N\'eus bet kavet staliadur ebet',
	'BOARD_NOT_INSTALLED_EXPLAIN'	=> 'An Aozad Treiñ Unvan eus phpBB en deus ezhomm ma vefe bet staliet phpBB3 evit mont en-dro. <a href="%s">Staliit phpBB3</a> a-raok ober gantañ.',

	'CATEGORY'					=> 'Rann',
	'CACHE_STORE'				=> 'Doare ar vemoret',
	'CACHE_STORE_EXPLAIN'		=> 'Al lec\'h ma vez lakaet ho roadoù memoret, gwelloc\'h eo ober gant filesystem.',
	'CAT_CONVERT'				=> 'Treiñ',
	'CAT_INSTALL'				=> 'Staliañ',
	'CAT_OVERVIEW'				=> 'Gwelet',
	'CAT_UPDATE'				=> 'Hizivaat',
	'CHANGE'					=> 'Kemm',
	'CHECK_TABLE_PREFIX'		=> 'Gwiriit rakger an diaz (table prefix), ha klaskit en-dro.',
	'CLEAN_VERIFY'				=> 'Naetaat ha gwiriañ an aozadur dibenn',
	'CLEANING_USERNAMES'		=> 'Skubañ an anvioù-izili',
	'COLLIDING_CLEAN_USERNAME'	=> '<strong>%s</strong> eo anv-implijer reizh :',
	'COLLIDING_USERNAMES_FOUND'	=> 'Anvioù-implijer heñvel a zo bet kavet war ho forom kozh. Evit kas an droidigezh da benn, diverket, pe cheñchit anv ar re-se a-benn ma klotfe un anv-impijer gant bep a implijer.',
	'COLLIDING_USER'			=> '» Id implijer: <strong>%d</strong> anv-implijer: <strong>%s</strong> (%d kemennadenn)',
	'CONFIG_CONVERT'			=> 'Treiñ an ardremmeziñ',
	'CONFIG_FILE_UNABLE_WRITE'	=> 'N\'eo ket bet posupl krouiñ ar restr ardremmeziñ. Hentennoù all evit krouiñ ar restr a vez kinniget amañ-kichen',
	'CONFIG_FILE_WRITTEN'		=> 'Skrivet eo bet ar restr ardremmeziñ, bremañ e c\'hellit tremen da bazenn a zeu ar staliañ',
	'CONFIG_PHPBB_EMPTY'		=> 'Goullo eo an argemenn evit “%s”.',
	'CONFIG_RETRY'				=> 'Klask en-dro',
	'CONTACT_EMAIL_CONFIRM'		=> 'Gwiriañ ar postel',
	'CONTINUE_CONVERT'			=> 'Kenderc\'hel gant an treiñ',
	'CONTINUE_CONVERT_BODY'		=> 'Kavet ez eus bet ho poa klasket treiñ ur wech dija. Da zibab ho peus neuze etre kenderc\'hel gant an droidigezh kentañ pe kregiñ gant unan nevez.',
	'CONTINUE_LAST'				=> 'Kenderc\'hel gant ar stadadegoù ziwezhañ',
	'CONTINUE_OLD_CONVERSION'	=> 'Kenderc\'hel gant an droidigezh bet kroget en a-raok',
	'CONVERT'					=> 'Treiñ',
	'CONVERT_COMPLETE'			=> 'Echu eo an treiñ',
	'CONVERT_COMPLETE_EXPLAIN'	=> 'Troet eo bet ho forom da phpBB 3.0. Bremañ e c\'hellit <a href="../">mont war ho forom</a>. Bezit asur eo bet troet mat an holl ditouroù a-raok lakaat ho forom da vont en-dro o tiverkañ an teuliad “install”. Sikour a zo da gaout diwar-benn implij phpBB : ar <a href="http://www.phpbb.com/support/documentation/3.0/">Sturiell</a> hag ar <a href="http://www.phpbb.com/phpBB/viewforum.php?f=46">forom kenskoazell</a>',
	'CONVERT_INTRO'				=> 'Degemer mat war an Troour davet phpBB',
	'CONVERT_INTRO_BODY'		=> 'Amañ e c\'hellit treiñ ho forom eus ur staliadur all da phpBB, pe degemer roadoù adalek ur forom (staliet) all. Amañ dindan e kavfot listenn ar foromoù a c\'heller treiñ e phpBB. Ma ne welit ket un troour evit ar forom a rit gantañ, kit d\'ober un dro war lec\'hienn phpBB, e-lec\'h ma vez kavout trourien ouzhpenn.',
	'CONVERT_NEW_CONVERSION'	=> 'Troidigezh nevez',
	'CONVERT_NOT_EXIST'			=> 'N\'eus ket ouzh an troour-mañ',
	'CONVERT_OPTIONS'			=> 'Dilennoù',
	'CONVERT_SETTINGS_VERIFIED'	=> 'Gwiriet eo bet an titouroù bet roet ganeoc\'h. Evit kregiñ gant an treiñ, klikit war an nozelenn amañ-kichen',
	'CONV_ERR_FATAL'			=> 'Fazi spontus en droidigezh',

	'CONV_ERROR_ATTACH_FTP_DIR'			=> 'Oberiant eo c\'hoazh ar pellgas dre FTP evit ar stagadennoù war ho forom kozh. Difennit ar pellgas dre FTP, ha bezit sur ez eus bet roet un treug mat evit an teuliad, ha kopiit an holl stagadennoù en un teuliad nevez. Pa vo bet graet se ganeoc\'h e vo tu deoc\'h adloc\'hañ an troour.',
	'CONV_ERROR_CONFIG_EMPTY'			=> 'N\'eus titour ardremmeziñ ebet da gaout evit an troour.',
	'CONV_ERROR_FORUM_ACCESS'			=> 'N\'eo ket bet posupl kaout an titouroù evit tizhout ar forom.',
	'CONV_ERROR_GET_CATEGORIES'			=> 'Dibosupl eo bet kavout ar rannoù.',
	'CONV_ERROR_GET_CONFIG'				=> 'N\'eo ket bet posupl tizhout titouroù-ardremmeziñ ho forom.',
	'CONV_ERROR_COULD_NOT_READ'			=> 'N\'eo ket posupl tizhout pe lenn “%s”.',
	'CONV_ERROR_GROUP_ACCESS'			=> 'N\'eo ket bet posupl kaout an titouroù war degemer ar strolladoù.',
	'CONV_ERROR_INCONSISTENT_GROUPS'	=> 'N\'eo ket bet komprenet diaz ar strolladoù e-barzh add_bots() - ma ouzhpennit ar strolladoù gant an dorn eo dav deoc\'h ouzhpennañ an holl re ispisial.',
	'CONV_ERROR_INSERT_BOT'				=> 'N\'eo ket bet posupl enlakaat ar robot e-barzh diaz an implijerien.',
	'CONV_ERROR_INSERT_BOTGROUP'		=> 'N\'eo ket bet posupl enlakaat ar robot e-barzh diaz ar robotoù.',
	'CONV_ERROR_INSERT_USER_GROUP'		=> 'N\'eo ket bet posupl enlakaat an implijer e-barzh an diaz user_group.',
	'CONV_ERROR_MESSAGE_PARSER'			=> 'Fazi gant dielfenner ar c\'hemennadennoù',
	'CONV_ERROR_NO_AVATAR_PATH'			=> 'Evit an aozer : dav eo deoc\'h ouzhpennañ $convertor[\'avatar_path\'] a-benn gallout ober gant %s.',
	'CONV_ERROR_NO_FORUM_PATH'			=> 'N\'eo ket bet meneget an treug keñverel betek ar forom-diazez.',
	'CONV_ERROR_NO_GALLERY_PATH'		=> 'Evit an aozer : dav eo deoc\'h ouzhpennañ $convertor[\'avatar_gallery_path\'] a-benn gallout ober gant %s.',
	'CONV_ERROR_NO_GROUP'				=> 'N\'eus ket bet kavet ar strollad “%1$s” e-barzh %2$s.',
	'CONV_ERROR_NO_RANKS_PATH'			=> 'Evit an aozer : dav eo deoc\'h menegiñ $convertor[\'ranks_path\'] a-benn gallout ober gant %s.',
	'CONV_ERROR_NO_SMILIES_PATH'		=> 'Evit an aozer : dav eo deoc\'h ouzhpennañ $convertor[\'smilies_path\'] a-benn gallout ober gant %s.',
	'CONV_ERROR_NO_UPLOAD_DIR'			=> 'Evit an aozer : dav eo deoc\'h ouzhpennañ $convertor[\'upload_path\'] a-benn gallout ober gant %s.',
	'CONV_ERROR_PERM_SETTING'			=> 'N\'eo ket bet posupl enlakaat/hizivaat dilennoù an aotreoù.',
	'CONV_ERROR_PM_COUNT'				=> 'N\'eo ekt bet posupl dibab teuliad ar Gerigoù Prevez evit ar c\'hont.',
	'CONV_ERROR_REPLACE_CATEGORY'		=> 'N\'eo ket bet posupl ouzhpennañ ar forom nevez evit erlec\'hiañ ar rann kozh.',
	'CONV_ERROR_REPLACE_FORUM'			=> 'N\'eo ket bet posupl ouzhpennañ ar forom nevez evit erlec\'hiañ an hini kozh.',
	'CONV_ERROR_USER_ACCESS'			=> 'N\'eo ket bet posupl dezastum an titouroù evit degemer an ezel.',
	'CONV_ERROR_WRONG_GROUP'			=> 'Ar strollad fall “%1$s” a vez termenet e %2$s.',
	'CONV_OPTIONS_BODY'               => 'War ar bajenn-mañ e vez dezastumet an titoroù ret evit gallout tizhout ar forom orin. Roit an titouroù diwar-benn diaz-titouroù ho forom kozh, ne vo cheñchet tra ebet en diaz-titouroù-se gant an troour. Evit ma vefe graet mat an treiñ e vefe gwelloc\'h herzel ouzh ar forom orin da vont en-dro keit ha ma vez troet.',
	'CONV_SAVED_MESSAGES'				=> 'Kemennadennoù bet saveteet',

	'COULD_NOT_COPY'			=> 'N\'eo ket bet posupl eilañ ar restr eus <b>%1$s</b> da <b>%2$s</b><br /><br />Gwiriit ez eus ouzh an teul-degemer, hag ez eus ar gwirioù da skrivañ warnañ',
	'COULD_NOT_FIND_PATH'		=> 'N\'eus ket bet kavet ho forom orin. Gwiriit an titouroù bet roet ganeoc\'h.<br />&#187; Ar c\'havlec\'h bet roet ganeoc\'h a oa %s',

	'DBMS'						=> 'Doare an diaz-titouroù',
	'DB_CONFIG'					=> 'Ardremmeziñ an diaz-titouroù',
	'DB_CONNECTION'				=> 'Kennaskañ ouzh an diaz-titouroù',
	'DB_ERR_INSERT'				=> 'Ur fazi a zo bet e-pad an urzh INSERT',
	'DB_ERR_LAST'				=> 'Ur fazi a zo bet e-pad query_last',
	'DB_ERR_QUERY_FIRST'		=> 'Ur fazi a zo bet e-pad query_first',
	'DB_ERR_QUERY_FIRST_TABLE'	=> 'Ur fazi a zo bet e-pad query_first, %s (“%s”)',
	'DB_ERR_SELECT'				=> 'Ur fazi a zo bet e-pad an urzh SELECT',
	'DB_HOST'					=> 'DSN pe anv obder servijour an diaz-titouroù',
	'DB_HOST_EXPLAIN'			=> 'DSN a dalvez Data Source Name, ha n\'eo talvoudus nemet evit ar staliaduroù ODBC.',
	'DB_NAME'					=> 'Anv an diaz-titouroù',
	'DB_PASSWORD'				=> 'Ger-tremen an diaz-titouroù',
	'DB_PORT'					=> 'Porzh servijer an diaz-titouroù',
	'DB_PORT_EXPLAIN'			=> 'Na skrivit netra amañ, nemet ma ouzhit e vez implijet ur porzh divoutin gant ho servijer.',
	'DB_USERNAME'				=> 'Anv-implijer an diaz-titouroù',
	'DB_TEST'					=> 'Amprouiñ ar c\'hennaskañ',
	'DEFAULT_LANG'				=> 'Yezh dre-ziouer ar forom',
	'DEFAULT_PREFIX_IS'			=> 'Ar rakger dre-ziouer evit %1$s a zo <strong>%2$s</strong>',
	'DEV_NO_TEST_FILE'			=> 'N\'eus bet roet talvoud ebet evit test_file en troour. Ma\'z oc\'h un implijer ouzh an troour, ne vefec\'h ket sañset gwelet ar c\'hemennadenn-mañ, kelaouit saver an troour mar-plij. Ma\'z oc\'h saver an troour eo dav deoc\'h reiñ anv ur restr ez eus outañ er forom orin evit aotreañ ma vo gwiriet an treug betek hennezh.',
	'DIRECTORIES_AND_FILES'		=> 'Staliañ teul ha restr',
	'DISABLE_KEYS'				=> 'Lakaat an alc\'hwezioù dizoberiant',
	'DLL_FIREBIRD'				=> 'Firebird 1.5+',
	'DLL_FTP'					=> 'Gouzañviñ FTP [ Staliadur ]',
	'DLL_GD'					=> 'Gouzañv skeudennoù GD [ Gwiriañ gant al lagad ]',
	'DLL_MBSTRING'				=> 'Gouzañviñ an arouezioù gant meur a v/bytes',
	'DLL_MSSQL'					=> 'MSSQL Server 2000+',
	'DLL_MSSQL_ODBC'			=> 'MSSQL Server 2000+ via ODBC',
	'DLL_MYSQL'					=> 'MySQL 3.23.x/4.x',
	'DLL_MYSQLI'				=> 'MySQL 4.1.x/5.x gant Astenn  MySQLi',
	'DLL_ORACLE'				=> 'Oracle',
	'DLL_POSTGRES'				=> 'PostgreSQL 7.x/8.x',
	'DLL_SQLITE'				=> 'SQLite',
	'DLL_XML'					=> 'Gouzañviñ XML [ Jabber ]',
	'DLL_ZLIB'					=> 'Gouzañviñ ar gwaskañ zlib [ gz, .tar.gz, .zip ]',
	'DL_CONFIG'					=> 'Pellgargañ config',
	'DL_CONFIG_EXPLAIN'			=> 'Dav eo deoc\'h pellgargañ penn-da-benn config.php war hoc\'h urzhiataerezh. Neuze e vo dav deoc\'h pellgas anezhañ dre-zorn, evit erlec\'hiañ ar restr config.php a gaver en teul-gwrizienn. Grit gant an doare ASCII evit pellgas (sellit ouzh titouroù ho meziant FTP).Pa vo bet graet an dra-se, klikit war “Graet” evit mont d\'ar bazenn a zeu.',
	'DL_DOWNLOAD'				=> 'Pellgargañ',
	'DONE'						=> 'Graet',

	'ENABLE_KEYS'				=> 'Adlakaat an alc\'hwezioù oberiant. Gallout a ra padout ur mareadig',

	'FILES_OPTIONAL'			=> 'Restroù ha teulioù diret',
	'FILES_OPTIONAL_EXPLAIN'	=> '<strong>Diret</strong> - N\'eus ket ezhomm ouzh ar restroù, teulioù, aotreoù-mañ. Hentennoù lies all a c\'hell bezañ implijet gant ar staliadur ma n\'eus ket outo, met buanaat a reont kalz ar staliadur.',
	'FILES_REQUIRED'			=> 'Restroù ha teulioù',
	'FILES_REQUIRED_EXPLAIN'	=> '<strong>Rediet</strong> - Evit gallout mont en-dro e rank phpBB gallout tizhout, pe skrivañ e-barzh restroù \'zo. ma welit “Not Found ” eo dav deoc\'h krouiñ ar restr pe an teul a zere. Ma welit “Unwritable” eo dav deoc\'h kemm an aotreoù war ar restr pe an teul evit gallout skrivañ warnañ.',
	'FILLING_TABLE'				=> 'Leuniañ an diaz <b>%s</b>',
	'FILLING_TABLES'			=> 'Leuniañ an diazoù',
	'FINAL_STEP'				=> 'Pazenn diwezhañ',
	'FORUM_ADDRESS'				=> 'Kavlec\'h ar forom',
	'FORUM_ADDRESS_EXPLAIN'		=> 'Kavlec\'h http ho forom orin eo',
	'FORUM_PATH'				=> 'Treug ar forom',
	'FORUM_PATH_EXPLAIN'		=> 'An treug <strong>keñverek</strong>, da lavaret eo an hent a zo d\'ober etre kavlec\'h ho forom orin ha <strong>gwrizienn ar staliadur-mañ ouzh phpBB3</strong>',
	'FOUND'						=> 'Kavet',
	'FTP_CONFIG'				=> 'Kas an ardremmeziñ dre FTP',
	'FTP_CONFIG_EXPLAIN'		=> 'An tu d\'ober gant an FTP a zo bet kavet war ar servijour-mañ. Gallout a rit klask ataliañ ho restr config.php dre an hentenn-mañ ma karit. Dav e vo deoc\'h reiñ an titouroù roet amañ-kichen. Dalc\'hit soñj eo an anv-implijer ha ger-tremen implijet war ar servijour a vez goulennet, ha ket re phpBB ! (goulennit digant ho poder ma n\'oc\'h ket sur outo)',
	'FTP_PATH'					=> 'Treug FTP',
	'FTP_PATH_EXPLAIN'			=> 'An hent a zo d\'ober etre ho teul gwrizienn hag hini phpBB, da skouer : htdocs/phpBB3/',
	'FTP_UPLOAD'				=> 'Pellgas',

	'GPL'						=> 'Meneg Foran Hollek (General Public License)',
	
	'INITIAL_CONFIG'			=> 'Ardremmeziñ diazez',
	'INITIAL_CONFIG_EXPLAIN'	=> 'Bremañ ma\'eus bet kavet e c\'hell ho servijour ober gant phpBB eo dav deoc\'h reiñ un nebeud titouroù ouzhpenn. Ma n\'ouzit ket penaos kennaskañ ouzh ho tiaz-titouroù, kit e darempred gant ho poder da gentañ, pe neuze klaskit sikour digant foromoù phpBB. Bezit aketus da lakaat ar roadoù a zere.',
	'INSTALL_CONGRATS'			=> 'Gourc\'hemennoù',
	'INSTALL_CONGRATS_EXPLAIN'	=> '
		<p>Staliet eo bet phpBB %1$s. Adalek bremañ e c\'hellit ober daou dra disheñvel :</p>
		<h2>Treiñ ur forom a zo dija outañ en unan phpBB3</h2>
		<p>Gant an Aozad Treiñ Unvan e c\'hellit treiñ ur forom phpBB2, pe unan all, en unan phpBB3.M\'ho peus ur forom da dreiñ, neuze <a href="%2$s">krogit gant an Troour</a>.</p>
		<h2>Ober gant ho forom phpBB3 !</h2>
		<p>O klikañ war an nozelenn amañ-kichen e vo tu deoc\'h mont war Pajenn ar Merour (PM). Kemerit amzer da welet ar pezh a vez roet deoc\'h ober. Sikour a zo da gaout war ar <a href="http://www.phpbb.com/support/documentation/3.0/">Sturiell</a> hag ar <a href="http://www.phpbb.com/phpBB/viewforum.php?f=46">Forom skoazell</a>, lennit %sREADME%s evit titouroù ouzhpenn.</p>
		<p><strong>Bremañ, diverkit, adanvit, pe cheñchit plas d\'an teuliad anvet \'install\'. M\'emañ c\'hoazh an teuliad amañ, ne vo nemet Pajenn ar Merour (PM) o c\'hallout bezañ tizhet.</strong></p>',
	'INSTALL_INTRO'				=> 'Degemer mat war ar staliadur',
	'INSTALL_INTRO_BODY'		=> 'Gant an dilenn-mañ e c\'hellit staliañ phpBB3 war ho servijour.</p><p>An titouroù da-heul a zo goulennet diganeoc\'h:</p><p>Ma n\'ananezit ket ar re-se, kit da glask anezho, o c\'houlenn anezho digant ho poder, da skouer. Ne vo ket posupl kenderc\'hel hepto. Ezhomm ho po diouzh :</p>
	<ul>
	<li>Doare an diaz-titouroù a rit ganti</li>
	<li>Anv servijour pe DSN an diaz-titouroù : ar c\'havlec\'h war servijour an diaz</li>
	<li>Porzh servijour an diaz-titouroù : peurliesañ ne vez ket ezhomm ouzh hennezh</li>	
	<li>Anv an diaz-titouroù</li>
	<li>Anv-implijer ha ger-tremen an diaz-titouroù</li>
	</ul>

	<p><strong>Notennit:</strong> Ma implijit SQLite evit ar staliañ, neuze e vo ret deoc\'h lakaat an treug klok davet ho tiaz-titouroù e-barzh tachenn an DSN, ha lezel goullo re an implijer hag ar ger-tremen.Evit abegoù surentez, bezit asur n\'emañ ket ho tiaz-titouroù en ul lec\'h a c\'heller tizhout dre ar web.</p>

	<p>An diazoù da-heul a vez gouzañvet gant phpBB3 :</p>
	<ul>
		<li>MySQL 3.23 pe uheloc\'h (MySQLi ivez)</li>
		<li>PostgreSQL 7.3+</li>
		<li>SQLite 2.8.2+</li>
		<li>Firebird 2.0+</li>
		<li>MS SQL Server 2000 pe uheloc\'h (diouzhtu, pe o tremen dre ODBC)</li>
		<li>Oracle</li>
	</ul>
	
	<p>Ne vo diskouezet nemet an diazoù-titouroù gouzañvet hag a vez war ar servijour.',
	'INSTALL_INTRO_NEXT'		=> 'Klikit war an nozelenn amañ-kichen evit kregiñ gant ar staliadur.',
	'INSTALL_LOGIN'				=> 'Bezañ anavezet',
	'INSTALL_NEXT'				=> 'Pazenn a zeu',
	'INSTALL_NEXT_FAIL'			=> 'Arnodoù o deus bet disoc\'hoù direizh, dav eo deoc\'h renkañ ar c\'hudennoù-mañ a-raok gallout tizhout ar bazenn da-heul. E mod all e vo diglok ar staliañ.',
	'INSTALL_NEXT_PASS'			=> 'Disoc\'hoù reizh a zo bet roet gant an holl anrodoù diazez. M\'ho peus kemmet traoù \'zo (astennoù, aotreoù, ...), pe m\'ho peus c\'hoant da adloc\'hañ an arnodoù e c\'hellit en ober.',
	'INSTALL_PANEL'				=> 'Panell-Staliañ',
	'INSTALL_SEND_CONFIG'		=> 'Siwazh n\'eus ket phpBB gallet skrivañ an titouroù diouzhtu d\'ho restr config.php. Marteze n\'eus ket ouzh ar restr-mañ, pe neuze n\'haller ket skrivañ warnañ. Un nebeud hentennoù all d\'ober a vo kinniget deoc\'h amañ dindan evit reizhañ ar gudenn gant config.php.',
	'INSTALL_START'				=> 'Kregiñ gant ar Staliañ',
	'INSTALL_TEST'				=> 'Arnodiñ en-dro',
	'INST_ERR'					=> 'Fazi er staliadur',
	'INST_ERR_DB_CONNECT'		=> 'N\'eus ket bet tu da gennaskañ ouzh an diaz-titouroù, gwelet amañ-kichen',
	'INST_ERR_DB_FORUM_PATH'	=> 'E-barzh gwezenn teulioù ho forom emañ kavlec\'h an diaz-titouroù bet roet ganeoc\'h. Gwelloc\'h e vefe deoc\'h staliañ hounezh en ul lec\'h all',
	'INST_ERR_DB_NO_ERROR'		=> 'Dezrevell Fazi ebet',
	'INST_ERR_DB_NO_MYSQLI'		=> 'Ne glot ket an arreval ouzh MySQL staliet amañ gant an dilenn “MySQL 4.1.x/5.x gant astenn MySQLi” bet dibabet ganeoc\'h. Klaskit en-dro gant “MySQL 4.x/5.x” pe “MySQL 3.23.x/4.x”.',
	'INST_ERR_DB_NO_SQLITE'		=> 'Re gozh eo arreval SQLite bet staliet ganeoc\'h, gant an hini 2.8.2. d\'an nebeutañ eo dav ober',
	'INST_ERR_DB_NO_ORACLE'		=> 'Goulenn a ra ar stumm ouzh ORACLE staliet amañ ma vefe lakaet an arventer <var>NLS_CHARACTERSET</var> war <var>UTF8</var>. Cheñchit an arventer, pe tremenit d\'ar stumm 9.2+.',
	'INST_ERR_DB_NO_FIREBIRD'	=> 'Koshoc\'h eget 2.0 eo arreval FireBird a vez staliet amañ, staliit unan nevesoc\'h mar plij.',
	'INST_ERR_DB_NO_FIREBIRD_PS'=> 'Bihanoc\'h eo ment pajenn an diaz FireBird bet dibabet ganeoc\'h eget 8192, pa rank bezañ 8192 d\'an nebeutañ.',
	'INST_ERR_DB_NO_POSTGRES'	=> 'N\'emañ ket an diaz-titouroù bet diuzet ganeoc\'h e <var>UNICODE</var> pe e <var>UTF8</var>.Klaskit ar staliadur gant un diaz-titouroù e <var>UNICODE</var> pe e <var>UTF8</var>.',
	'INST_ERR_DB_NO_NAME'		=> 'N\'eus bet roet anv ebet d\'an diaz-titouroù',
	'INST_ERR_EMAIL_INVALID'	=> 'Direizh eo ar postel bet roet ganeoc\'h',
	'INST_ERR_EMAIL_MISMATCH'	=> 'N\'eo ket bet tizhet ar postel(où) bet roet ganeoc\'h.',
	'INST_ERR_FATAL'			=> 'Fazi spontus',
	'INST_ERR_FATAL_DB'			=> 'Ur fazi grevus, ha dibosupl da reizhañ a zo c\'hoarvezet en ho tiaz-titouroù. Marteze eo c\'hoarvezet peogwir n\'eo ket aotreet an implijer bet roet ganeoc\'h da GROUIÑ UN DIAZ pe da ENLAKAAT ROADOÙ. Titouroù ouzhpenn a vo kavet ganeoc\'h amañ-kichen. Kit da gentañ e-darempred gant ho poder, pe neuze goulennit skoazell war foromoù phpBB.',
	'INST_ERR_FTP_PATH'			=> 'N\'eus ket bet tu da cheñch an teul-mañ, gwiriit an treug.',
	'INST_ERR_FTP_LOGIN'		=> 'N\'eus ket bet tu da gennaskañ war ar servijour FTP. Gwiriit an anv-implijer hag ar ger-tremen',
	'INST_ERR_MISSING_DATA'		=> 'Dav eo deoc\'h leuniañ takadoù ouzh ar bloc\'had-man',
	'INST_ERR_NO_DB'			=> 'N\'eus ket bet tu da gargañ an astenn PHP evit ar stumm diaz-titouroù bet diuzet',
	'INST_ERR_PASSWORD_MISMATCH' => 'N\'eo ket aet en-dro ar ger-tremen bet roet ganeoc\'h.',
	'INST_ERR_PASSWORD_TOO_LONG' => 'Re hir eo ar ger-tremen bet roet ganeoc\'h. 30 arouez d\'ar muiañ e c\'hell bezañ.',
	'INST_ERR_PASSWORD_TOO_SHORT' => 'Re verr eo ar ger-tremen bet roet ganeoc\'h. 6 arouez d\'an nebeutañ e tle bezañ.',
	'INST_ERR_PREFIX'			=> 'Bez es eus c\'hoazh ouzh an diazoù ho peus roet o rakger, dibabit un dra all mar-plij.',
	'INST_ERR_PREFIX_INVALID'	=> 'Direizh eo ar rakger bet dibabet ganeoc\'h evit an diaz-titouroù. Klaskit gant unan all, o tennañ an arouezioù divoutin.',
	'INST_ERR_PREFIX_TOO_LONG'	=> 'Re hir eo ar rakger bet dibabet ganeoc\'h. %d arouez e rank bezañ d\'ar muiañ.',
	'INST_ERR_USER_TOO_LONG'	=> 'Re hir eo an anv-implijer bet roet ganeoc\'h. 20 arouez d\'ar muiañ e c\'hell bezañ.',
	'INST_ERR_USER_TOO_SHORT'	=> 'Re verr eo an anv-implijer bet roet ganeoc\'h. 3 arouez d\'an nbeutañ e tle bezañ.',
	'INVALID_PRIMARY_KEY'		=> 'Alc\'hwez-diazez direizh : %s',

	'LONG_SCRIPT_EXECUTION'		=> 'Gallout a ra padout ur prantadig... Neuze na lakait ket ar furmskrid da baouez.',

	// mbstring
	'MBSTRING_CHECK'						=> 'Gwiriañ astennoù <samp>mbstring</samp>',
	'MBSTRING_CHECK_EXPLAIN'				=> '<strong>Rediet</strong> - un astenn ouzh PHP eo <samp>mbstring</samp>, reiñ a ra tro da sevel hedadoù gant meur a v/Bit. Lod ouzh he elfennoù na glotont ket gant phpBB, rankout a reont bezañ lakaet dizoberiant.',
	'MBSTRING_FUNC_OVERLOAD'				=> 'Fonksion dreistkargañ',
	'MBSTRING_FUNC_OVERLOAD_EXPLAIN'		=> 'War 0 pe war 4 e tle <var>mbstring.func_overload</var> bezañ lakaet.',
	'MBSTRING_ENCODING_TRANSLATION'			=> 'Bonegañ an arouezioù diwelus',
	'MBSTRING_ENCODING_TRANSLATION_EXPLAIN'	=> 'War 0 e tle <var>mbstring.encoding_translation</var> bezañ lakaet.',
	'MBSTRING_HTTP_INPUT'					=> 'treiñ an enlakaat arouezioù HTTP',
	'MBSTRING_HTTP_INPUT_EXPLAIN'			=> 'War <samp>pass</samp> e tle <var>mbstring.http_input</var> bezañ lakaet.',
	'MBSTRING_HTTP_OUTPUT'					=> 'treiñ an arouezioù HTTP o tont maez',
	'MBSTRING_HTTP_OUTPUT_EXPLAIN'			=> 'War <samp>pass</samp>e tle <var>mbstring.http_output</var> bezañ lakaet.',

	'MAKE_FOLDER_WRITABLE'		=> 'Bezit sur ez eus ouzh an teul-mañ, hag e c\'heller skrivañ warnañ, ha neuze klaskit en-dro:<br />&#187;<b>%s</b>',
	'MAKE_FOLDERS_WRITABLE'		=> 'Bezit sur ez eus ouzh an teulioù-mañ, hag e c\'heller skrivañ warno, ha neuze klaskit en-dro:<br />&#187;<b>%s</b>',

	'NAMING_CONFLICT'			=> 'Bec\'h etre an anvioù: anvioù eo %s ha %s <br /><br />%s',
	'NEXT_STEP'					=> 'Mont d\'ar bazenn a zeu',
	'NOT_FOUND'					=> 'Ne vez ket kavet',
	'NOT_UNDERSTAND'			=> 'Ne vez ket komprenet %s #%d, diaz %s (“%s”)',
	'NO_CONVERTORS'				=> 'N\'eus troour ebet da gaout evit an implij',
	'NO_CONVERT_SPECIFIED'		=> 'N\'eus bet roet anv troour ebet',
	'NO_LOCATION'				=> 'N\'eus ket bet tu da gavout al lec\'hiadur. Ma ouzit eo staliet ImageMagick e vo tu deoc\'h reiñ e lec\'hiadur diwezhatoc\'h dre Bajenn ar Merour',
	'NO_TABLES_FOUND'			=> 'N\'eus bet kavet diaz ebet.',
	'OVERVIEW_BODY'					=> 'Degemer mat war phpBB3!<br /><br />Ar meziant evit sevel foromoù an implijetañ war ar bed eo phpBB™. Goude ul labour hir abaoe 7 vloaz eo bet savet phpBB3. Evel ar stummoù kent e kinnig kalz servijoù, eo aes da implijout, hag e vez kinniget skoazell diwar e benn gant skipailh phpBB. Gant phpBB3 ez eo bet gwellaet ar pezh a rae brud vat phpBB2, hag ez eus bet ouzhpennet traoù a veze goulennet er stummoù kent. Emichañs e vo gwelloc\'h c\'hoazh eget ar pezh a c\'houlennit digantañ.<br /><br /> Gant ar pajennoù-mañ e vo kinniget sikour deoc\'h evit staliañ phpBB3, hizivaat ho staliadur ouzh phpBB3 davet hounezh, pe treiñ ur forom hag a zo en ur stumm all (phpBB2 da skouer) davet unan er stumm phpBB. Evit titouroù ouzhpenn e c\'hellit lenn <a href="../docs/INSTALL.html">ar sturiell-staliañ</a>.<br /><br />Evit lenn peseurt gwirioù a zo tro-dro da phpBB, penaos kaout skoazell, hag hon alioù war an danvez, diuzit ar pezh a zere amañ-kichen. Evit kenderc\'hel, diuzit an ivinenn a zere amañ-kichen.',

	'PCRE_UTF_SUPPORT'				=> 'Gouzañv PCRE UTF-8',
	'PCRE_UTF_SUPPORT_EXPLAIN'		=> 'N\'ez aio <strong>ket</strong> phpBB en-dro ma ne vez ket kempunet ho staliadur PHP gant ur gouzañv eus UTF-8 support en astenn PCRE.',
	'PHP_GETIMAGESIZE_SUPPORT'			=> 'Ar fonksion PHP getimagesize() az a en-dro',
	'PHP_GETIMAGESIZE_SUPPORT_EXPLAIN'	=> '<strong>Rediet</strong> - Evit ma c\'hellfe phpBB mont en-dro e rank ar fonksion getimagesize mont en-dro.',
	'PHP_OPTIONAL_MODULE'			=> 'Astennoù Diret',
	'PHP_OPTIONAL_MODULE_EXPLAIN'	=> '<strong>Diret</strong> - Diret eo an astennoù-mañ : n\'eus ket ezhomm outo evit ober gant phpBB, met traoù ouzhpenn a c\'heller ober ganto.',
	'PHP_SUPPORTED_DB'				=> 'Diazoù-titouroù gouzañvet',
	'PHP_SUPPORTED_DB_EXPLAIN'		=> '<strong>Rediet</strong> - Dav eo ma vefe gouzañvet unan d\'an nebeutañ eus an diazoù-titouroù a ra gant ar PHP. Ma ne vez diskouezet hini ebet eo dav deoc\'h mont e-darempred gant ho poder, pe en em ditouriñ diwar-benn staliadur ar PHP.',
	'PHP_REGISTER_GLOBALS'			=> 'Disoberiant eo an dilenn PHP "register_globals"',
	'PHP_REGISTER_GLOBALS_EXPLAIN'	=> 'Gallout a raio phpBB mont en-dro ma vez oberiant register_globals, met aliet eo ma vefe lakaet dizoberiant, evit abegoù surentez.',
	'PHP_SAFE_MODE'					=> 'Doare Asur',
	'PHP_SETTINGS'					=> 'Arreval ha Dilennoù PHP',
	'PHP_SETTINGS_EXPLAIN'			=> '<strong>Rediet</strong> - Dav eo deoc\'h kaout d\'an nebeutañ arreval 4.3.3 PHP evit gallout staliañ phpBB. Ma vez diskouezet “Doare Asur” dindan ho staliadur e talvez ez a PHP en-dro en doare-mañ. Ne vo ket tu d\'ober pep tra er merañs ha seurt traoù.',
	'PHP_URL_FOPEN_SUPPORT'			=> 'Oberiant eo an dibab PHP <var>allow_url_fopen</var>.',
	'PHP_URL_FOPEN_SUPPORT_EXPLAIN'	=> '<strong>Diret</strong> - Diret eo an dibab-mañ, met heptañ n\'ez aio ket fonksionoù \'zo en-dro, evel re ar skeudennigoù diavaez-lec\'hienn. ',
	'PHP_VERSION_REQD'				=> 'Arreval PHP >= 4.3.3',
	'POST_ID'						=> 'ID ar gemennadenn',
	'PREFIX_FOUND'					=> 'Gwiriet eo bet ho tiazoù, hag ur staliadur reizh a zo bet kavet, oc\'h ober gant ar rakgerioù <strong>%s</strong>.',
	'PREPROCESS_STEP'				=> 'O kas da benn oberiadennoù prientiñ',
	'PRE_CONVERT_COMPLETE'			=> 'Tremenet eo bet holl bazennoù ar raktreiñ. Bremañ e c\'hellit kregiñ gant an treiñ da vat. Dav e vo deoc\'h ober ha klenkañ kalzik traoù gant an dorn. Goude an droidigezh, taolit evezh ouzh an aotreoù evit gwiriañ int mat atav, adsavit Roll ar C\'hlask, peogwir n\'eo ket bet troet, ha bezit sur eo bet eilet mat ar restroù evel ar skeudennigoù-emginnig hag ar skeudennigoù-imor.',
	'PROCESS_LAST'					=> 'Oberiadenn : stadadegoù diwezhañ',

	'REFRESH_PAGE'				=> 'Adkargit ar bajennad evit kenderc\'hel gant an treiñ',
	'REFRESH_PAGE_EXPLAIN'		=> 'Ma tibabit ya e vo adkarget ar bajenn gant an Troour, ur wech echu pep pazenn. Ma\'z eo ho troidigezh kentañ evit klask fazioù eo gwelloc\'h deoc\'h dibab Nann.',
	'REQUIREMENTS_TITLE'		=> 'Klotañ gant ar staliañ',
	'REQUIREMENTS_EXPLAIN'		=> 'A-raok kregiñ gant ar staliañ emañ phpBB o vont d\'ober arnodennoù evit bezañ sur ez eo posupl staliañ phpBB war ho tafar. Lennit aketus an disoc\'hoù, ha gortozit ma vefe echu pep tra. M\'ho peus c\'hoant d\'ober gant astennoù diret, bezit sur ouzh disoc\'hoù ar re-se ivez.',
	'RETRY_WRITE'				=> 'Klask en-dro skrivañ config',
	'RETRY_WRITE_EXPLAIN'		=> 'M\'ho peus c\'hoant e c\'hellit cheñch an aotreoù e config.php evit aotreañ phpBB da skrivañ warnañ. Ma tibabit d\'ober se e c\'hellit klikañ war klask en-dro amañ-kichen. N\'ankouait ket reiñ en-dro an aotreoù orin da config.php goude ar staliadur.',

	'SCRIPT_PATH'				=> 'Treug ar forom',
	'SCRIPT_PATH_EXPLAIN'		=> 'An hent a zo d\'ober etre gwrizienn an domani ha lec\'hiadur phpBB',
	'SELECT_LANG'				=> 'Dibabit ur yezh',
	'SERVER_CONFIG'				=> 'Dilennoù ar servijour',
	'SEARCH_INDEX_UNCONVERTED'	=> 'N\'eo ket bet troet Roll ar c\'hlask',
	'SEARCH_INDEX_UNCONVERTED_EXPLAIN'	=> 'N\'eo ket bet troet Roll ar c\hlask. Goullo e vo disoc\'hoù pep enklask. Evit krouiñ ur Roll-Enklask nevez, kit war Pajenn ar Merour, dibabit Kempenn ha dibabit Roll Enklask en is-lañser.',
	'SOFTWARE'					=> 'Meziant ar Forom',
	'SPECIFY_OPTIONS'			=> 'Reiñ dilennoù resis evit an treiñ',
	'STAGE_ADMINISTRATOR'		=> 'Titouroù ar Merour',
	'STAGE_ADVANCED'			=> 'Dilennoù spis',
	'STAGE_ADVANCED_EXPLAIN'	=> 'A-bouez eo kemm an dilennoù-mañ ma ouzit ho peus ezhomm ouzh traoù all eget an dibaboù boutin. Ma n\'oc\'h ket sur, kit d\'ar bazenn a zeu, an traoù-mañ a c\'hello bezañ kemmet adal Pajenn ar Merour diwezhatoc\'h.',
	'STAGE_CONFIG_FILE'			=> 'Restroù ardremmeziñ',
	'STAGE_CREATE_TABLE'		=> 'Krouiñ an diazoù en diaz-titouroù',
	'STAGE_CREATE_TABLE_EXPLAIN' => 'Krouet eo bet an diaz titouroù implijet gant phpBB, ha leuniet gant un nebeud titouroù. Kendalc\'hit evit echuiñ gant ar staliadur.',
	'STAGE_DATABASE'			=> 'Dilennoù an diaz-titouroù',
	'STAGE_FINAL'				=> 'Pazenn diwezhañ',
	'STAGE_INTRO'				=> 'Digoradur',
	'STAGE_IN_PROGRESS'			=> 'Treiñ war ober',
	'STAGE_REQUIREMENTS'		=> 'Redioù',
	'STAGE_SETTINGS'			=> 'Dilennoù',
	'STARTING_CONVERT'			=> 'Kregiñ gant an treiñ',
	'STEP_PERCENT_COMPLETED'	=> 'Pazenn <b>%d</b> war <b>%d</b>: %d%% echu',
	'SUB_INTRO'					=> 'Digoradur',
	'SUB_LICENSE'				=> 'Meneg',
	'SUB_SUPPORT'				=> 'Skoazell',
	'SUCCESSFUL_CONNECT'		=> 'Graet eo bet ar c\'hennaskañ',
	'SUPPORT_BODY'				=> 'Skoazell a vo roet deoc\'h evit netra evit ar stumm-mañ ouzh phpBB3, war ar sujedoù-mañ :</p><ul><li>staliañ</li><li>azasaat diouzh ho c\'hoant</li><li>goulennoù teknikel</li><li>kudennoù stag ouzh fazioù er meziant</li><li>hizivat adalek ur stumm RC d\'ar stumm peurglok-mañ</li><li>treiñ eus phpBB2 da phpBB3</li><li>treiñ eus ur forom all d\'ur forom phpBB3 (gwelet <a href="http://www.phpbb.com/community/viewforum.php?f=65">ar Forom-Treiñ</a>)</li></ul><p>Aliañ a reomp an implijerien a ra c\'hoazh gant stummoù beta ouzh phpBB3 da erlec\'hiañ o staliadur gant an hini nevez.</p><h2>MODoù / Gwiskadurioù</h2><p>Evit ar goulennoù o tennañ d\'ar MODoù, savit ho koulennoù <a href="http://www.phpbb.com/community/viewforum.php?f=81">e Forom ar Modoù</a>.<br />Evit ar pezh a denn ouzh ar stiloù, gwiskadurioù, ha skeudennoù, savit ho koulennoù <a href="http://www.phpbb.com/community/viewforum.php?f=80">e Forom ar Stiloù</a>.<br /><br />Ma denn ho koulenn ouzh ur pakad resis, savit anezhi er sujed graet evit ar pakad-mañ.</p><h2>Kaout skoazell</h2><p><a href="http://www.phpbb.com/community/viewtopic.php?f=14&amp;t=571070">Ar Pakad-Degemer war phpBB</a><br /><a href="http://www.phpbb.com/support/">Lodenn ar Skoazell</a><br /><a href="http://www.phpbb.com/support/documentation/3.0/quickstart/">Evit Loc\'hañ Prim</a><br /><br />Evit bezañ asur da vezañ kelaouet ouzh an nevezinti e vefe mat deoc\'h <a href="http://www.phpbb.com/support/">lakaat ho anv war al listenn-skignañ</a><br /><br />',
	'SYNC_FORUMS'				=> 'Kregiñ da adkenamzeriañ ar foromoù',
	'SYNC_POST_COUNT'         => 'Adjediñ post_counts',
	'SYNC_POST_COUNT_ID'      => 'Adjediñ post_counts adalek <var>entry</var> %1$s betek %2$s.',
	'SYNC_TOPICS'				=> 'Kregiñ da adkenamzeriañ ar sujedoù',
	'SYNC_TOPIC_ID'				=> 'Adkenamzeriañ ar sujedoù eus topic_id $1%s da $2%s',

	'TABLES_MISSING'			=> 'N\'eus ket bet tu da gavout an daolioù-mañ<br />&#187; <b>%s</b>.',
	'TABLE_PREFIX'				=> 'Rakger evit an diazoù en diaz-titouroù',
	'TABLE_PREFIX_SAME'			=> 'Rankout a ra rakger an diaz bezañ an hini implijet gant ar meziant-orin.<br />&#187; %s eo an hini a zo bet roet',
	'TESTS_PASSED'				=> 'Arnodoù tremenet',
	'TESTS_FAILED'				=> 'Arnodoù c\'hwitet',

	'UNABLE_WRITE_LOCK'			=> 'Dibosupl skrivañ war ur restr prennet.',
	'UNAVAILABLE'				=> 'Dibosupl da gavout',
	'UNWRITABLE'				=> 'Dibosupl da skrivañ warnañ',
	'UPDATE_TOPICS_POSTED'		=> 'Krouiñ titouroù war ar Sujedoù Kaset',
	'UPDATE_TOPICS_POSTED_ERR'	=> 'Ur fazi a zo bet o krouiñ titouroù war ar Sujedoù Kaset. Gallout a rit klask en-dro gant ar bazenn-mañ war Bajenn ar Merour goude an treiñ.',
	'VERIFY_OPTIONS'			=> 'Gwiriañ dilennoù an treiñ',
	'VERSION'					=> 'Arreval',

	'WELCOME_INSTALL'			=> 'Degemer mat war staliadur phpBB 3.0',
	'WRITABLE'					=> 'Skrivadus',
));

// Updater
$lang = array_merge($lang, array(
	'ALL_FILES_UP_TO_DATE'		=> 'Staliet eo bet an holl restroù, arreval neveshañ phpBB a zo ganeoc\'h bremañ. Mat e vefe deoc\'h <a href="../ucp.php?mode=login">bezañ anavezet gant ho forom</a> ha gwiriañ ha mat e vez pep tra pe get. N\'ankouait ket diverkañ, adenvel, pe cheñch plas d\'an teuliad anvet install !',
	'ARCHIVE_FILE'				=> 'Tarzh en diell',

	'BACK'				=> 'Distreiñ',
	'BINARY_FILE'		=> 'Restr daouredel (binarel)',
	'BOT'				=> 'Poellad-furcher',

	'CHANGE_CLEAN_NAMES'			=> 'Cheñchet eo bet an hentenn evit bezañ asur n\'eus ket ar memes anv gant izili disheñvel. Posupl eo ma vefe izili gant ar memes anv, hervez an hentenn nevez. Dav eo deoc\'h diverkañ pe adenvel an izili-mañ evit bezañ asur ne vez implijet pep anv gant un ezel hepken.',
	'CHECK_FILES'					=> 'Gwiriañ ar restroù',
	'CHECK_FILES_AGAIN'				=> 'Gwiriañ en-dro ar restroù',
	'CHECK_FILES_EXPLAIN'			=> 'Gant ar bazenn-mañ e vo keñveriet an holl restroù gant ar restroù-hizivaat - kalzik amzer e c\'hell padout, dreist-holl ma vez graet evit ar wech kentañ.',
	'CHECK_FILES_UP_TO_DATE'		=> 'Hervez ho tiaz-titouroù emañ an arreval neveshañ ganeoc\'h. Marteze ho po c\'hoant da wiriañ daoust ha klotañ a ra pep restr, unan hag unan, gant re an arreval diwezhañ.',
	'CHECK_UPDATE_DATABASE'			=> 'Kenderc\'hel gant an hizivaat',
	'COLLECTED_INFORMATION'			=> 'Titouroù diwar-benn ar restroù',
	'COLLECTED_INFORMATION_EXPLAIN'	=> 'El listenn-mañ e welit titouroù diwar-benn ar restroù o deus ezhomm da vezañ hizivaet. Lennit mat an titouroù dirak pep bloc\'had a-benn gouzout petra talvezont ha petra eo dav deoc\'h ober evit hizivaat mat pep tra.',
	'COLLECTING_FILE_DIFFS'			=> 'O tastum an diforc\'hioù etre ar restroù',
	'COMPLETE_LOGIN_TO_BOARD'		=> 'Mat e vefe deoc\'h <a href="../ucp.php?mode=login">bezañ anavezet gant ho forom</a> ha gwiriañ ha mat e vez pep tra pe get. N\'ankouait ket diverkañ, adenvel, pe cheñch plas d\'an teuliad anvet install !',
	'CONTINUE_UPDATE_NOW'			=> 'Kenderc\'hel bremañ gant an hizivaat',
	'CURRENT_FILE'					=> 'Penn kentañ ar restr orin a zo bremañ',
	'CURRENT_VERSION'				=> 'Arreval bremañ',

	'DATABASE_TYPE'						=> 'Doare an diaz-titouroù',
	'DATABASE_UPDATE_INFO_OLD'			=> 'Re gozh eo ar restr hizivaat an diaz-titouroù. Bezit asur ho peus pellgaset an hini vat.',
	'DELETE_USER_REMOVE'				=> 'Diverkañ an ezel ha dilemel e gemennadennoù',
	'DELETE_USER_RETAIN'				=> 'Diverkañ an ezel o virout e gemennadennoù',
	'DESTINATION'						=> 'Restr bal',
	'DIFF_INLINE'						=> 'War ul linenn',
	'DIFF_RAW'							=> 'Renk gant un diforc\'h kompezet',
	'DIFF_SEP_EXPLAIN'					=> 'Dibenn ar restr-orin a zo bremañ / Penn kentañ an hini nevez',
	'DIFF_SIDE_BY_SIDE'					=> 'Kostez ha kostez',
	'DIFF_UNIFIED'						=> 'Diforc\'h kompezet',
	'DO_NOT_UPDATE'						=> 'Na hizivait ket ar restr-mañ',
	'DONE'								=> 'Graet',
	'DOWNLOAD'							=> 'Pellgragañ',
	'DOWNLOAD_AS'						=> 'Pellgargañ evel',
	'DOWNLOAD_UPDATE_METHOD'			=> 'Download modified files archive',
	'DOWNLOAD_UPDATE_METHOD_EXPLAIN'	=> 'Ur wech pellgarget eo dv deoc\'h dispakañ an diell. Enni e kavfoc\'h ar restroù kemmet ho po ezhomm outo evit hizivaat ho teulioù-gwrizienn phpBB. Pellgasit anezho el lec\'h a zere da bep hini. Ur wech pellgaset anezho holl, gwiriit anezho en-dro gant an nozelenn amañ-kichen.',

	'ERROR'		=> 'Fazi',
	'EDIT_USERNAME'	=> 'Kemm anv an ezel',

	'FILE_ALREADY_UP_TO_DATE'		=> 'Hizivaet eo ar restr c\'hoazh.',
	'FILE_DIFF_NOT_ALLOWED'			=> 'N\'eo ket aotreet ar restr-mañ da vezañ kemmet.',
	'FILE_USED'						=> 'Titouroù implijet eus',			// Single file
	'FILES_CONFLICT'				=> 'Bec\'h etre daou restr',
	'FILES_CONFLICT_EXPLAIN'		=> 'Kemmet eo bet ar restroù-mañ, n\'int ket re orin ar stumm kozh. phpBB a gav dezhañ e savfe bec\'h etre an daou restr ma vefe klasket o lakaat da gendeuziñ. Klaskit reizhañ ar gudenn gant an dorn, pe dibabit an hentenn gwellañ evit o lakaat da gendeuziñ. Ma kemmit anezho gant an dorn, gwiriit anezho goude ma vefe bet graet. Gallout a rit ivez dibab an hentenn gwellañ da gendeuziñ evit pep restr, unan hag unan. Gant an hini kentañ e vo kollet al linennoù a sav kudenn en ho restr kozh, gant an eil e vo kollet kemmoù ar restr nevez.',
	'FILES_MODIFIED'				=> 'Restroù bet kemmet',
	'FILES_MODIFIED_EXPLAIN'		=> 'Kemmet eo bet ar restroù-mañ, n\'int ket re orin ar stumm kozh. Ur restr nevez a vo savet, ur meskaj etre kemmoù hennezh ha nevezinti an hizivadur.',
	'FILES_NEW'						=> 'Restroù nevez',
	'FILES_NEW_EXPLAIN'				=> 'N\'eus ket ouzh ar restroù-mañ en ho staliadur. Ouzhpennet e vint en ho staliadur.',
	'FILES_NEW_CONFLICT'			=> 'Bec\'h gant ur restr nevez',
	'FILES_NEW_CONFLICT_EXPLAIN'	=> 'Sañset eo nevez ar restr-mañ, o tont gant staliadur an arreval nevez, met kavet ez eus bet unan anvet evel hennezh, hag er memes lec\'h. Skrivet e vo war-c\'horre hennezh.',
	'FILES_NOT_MODIFIED'			=> 'Restroù n\'int ket bet kemmet',
	'FILES_NOT_MODIFIED_EXPLAIN'	=> 'Ar restroù-mañ n\'int ket bet kemmet, re orin ar stumm kozh a zo da nevesaat int.',
	'FILES_UP_TO_DATE'				=> 'Restroù bet hizivaet c\'hoazh',
	'FILES_UP_TO_DATE_EXPLAIN'		=> 'Hizivaet eo bet c\'hoazh ar restroù-mañ, n\'o deus ket ezhomm da vezañ ur wech ouzhpenn.',
	'FTP_SETTINGS'					=> 'Dilennoù FTP',
	'FTP_UPDATE_METHOD'				=> 'Pellgas FTP',

	'INCOMPATIBLE_UPDATE_FILES'		=> 'Ne glot ket ar restr-hizivaat gant hoc\'h arreval ouzh phpBB. An arreval %1$s a zo ganeoc\'h, ha graet eo ar restr evit tremen eus an hini %2$s d\an hini %3$s.',
	'INCOMPLETE_UPDATE_FILES'		=> 'Diglok eo ar restr-hizivaat.',
	'INLINE_UPDATE_SUCCESSFUL'		=> 'Hizivaet eo bet an diaz-titouroù. Bremañ eo dav deoc\'h hizivaat ar peurrest.',

	'KEEP_OLD_NAME'		=> 'Derc\'hel an anv',

	'LATEST_VERSION'		=> 'Arreval neveshañ',
	'LINE'					=> 'Linenn',
	'LINE_ADDED'			=> 'Ouzhpennet',
	'LINE_MODIFIED'			=> 'Kemmet',
	'LINE_REMOVED'			=> 'Dilemet',
	'LINE_UNMODIFIED'		=> 'Ket bet kemmet',
	'LOGIN_UPDATE_EXPLAIN'	=> 'A-benn hizivaat ho staliadur eo dav deoc\'h bezañ anavezet da gentañ.',

	'MAPPING_FILE_STRUCTURE'	=> 'A-benn aesaat ar pellgas, setu lec\hiadur ar restroù a aoz ho staliadur.',

	'MERGE_MODIFICATIONS_OPTION'	=> 'Lakaat ar c\'hemmoù da gendeuziñ',

	'MERGE_NO_MERGE_NEW_OPTION'	=> 'Chom hep kendeuziñ - ober gant ar restr nevez',
	'MERGE_NO_MERGE_MOD_OPTION'	=> 'Chom hep kendeuziñ - ober gant ar restr a zo dija outañ',
	'MERGE_MOD_FILE_OPTION'		=> 'Kendeuziñ an diforc\hioù oc\'h ober gant an tarzh kemmet',
	'MERGE_NEW_FILE_OPTION'		=> 'Kendeuziñ an diforc\'hioù oc\'h ober gant an tarzh nevez',
	'MERGE_SELECT_ERROR'		=> 'N\'eo ket bet dibabet mat an doare da gendeuziñ.',
	'MERGING_FILES'				=> 'O kendeuziñ an diforc\'hioù',
	'MERGING_FILES_EXPLAIN'		=> 'O tastum ar cheñchamantoù diwezhañ.<br /><br />Gortozit ma vefe echu an holl ober war ar restroù bet kemmet gant phpBB.',

	'NEW_FILE'						=> 'Fin ar restr hizivaet nevez',
	'NEW_USERNAME'					=> 'Anv ezel nevez',
	'NO_AUTH_UPDATE'				=> 'Ket aotreet da hizivaat',
	'NO_ERRORS'						=> 'Fazi ebet',
	'NO_UPDATE_FILES'				=> 'Ket hizivaet ar restroù-mañ :',
	'NO_UPDATE_FILES_EXPLAIN'		=> 'N\'eus ket bet gallet kavout ar restr e-lec\'h ma vezer sañset staliañ ar restroù-mañ. Ma vez teuliadoù all eget ar re language/ pe styles/ e talvez ho peus kemmet aozadur an teuliadoù, hag e vo diglok ar staliadur.',
	'NO_UPDATE_FILES_OUTDATED'		=> 'N\'eus bet kavet teuliad hizivaat reizh ebet, bezit sur eo ar restroù mat a zo bet pelgaset ganeoc\'h.<br /><br />War a seblant n\'eo <strong>ket</strong>bet hizivaet ho staliadur. Hizivadurioù a wo da gaout evit hoc\'h arreval ouzh phpBB %1$s, gweladennit <a href="http://www.phpbb.com/downloads/" rel="external">http://www.phpbb.com/downloads/</a> evit kaout ar restroù mat, a-benn tremen eus an arreval %2$s d\'an hini %3$s.',
	'NO_UPDATE_FILES_UP_TO_DATE'	=> 'An arreval neveshañ a zo ganeoc\'h. N\'eus ket ezhomm d\'ober gant ar benveg hizivaat. M\'ho peus c\'hoant da wiriañ reizhded ho restroù, bezit asur ho peus pellgaset ar restroù mat evit hen ober.',
	'NO_UPDATE_INFO'				=> 'N\'eus ket bet gallet kavout titouroù war an arrevalioù da gaout.',
	'NO_UPDATES_REQUIRED'			=> 'N\'eus ezhomm ouzh hizivadur ebet',
	'NO_VISIBLE_CHANGES'			=> 'N\'eus kemm hewel ebet',
	'NOTICE'						=> 'Diwallit',
	'NUM_CONFLICTS'					=> 'Niver a vec\'hioù',
	'NUMBER_OF_FILES_COLLECTED'		=> '%1$d restr diwar %2$d a zo bet gwiriet evit c\'hoazh. <br />Gortozit ma vefe echu gwiriañ an holl mar plij.',

	'OLD_UPDATE_FILES'		=> 'Re gozh eo ar restroù hizivaat. Ar re a zo ganeoc\'h a zo graet evit tremen eus an arreval %1$s d\'an hini %2$s met %3$s eo an arreval neveshañ.',

	'PACKAGE_UPDATES_TO'				=> 'Hizivaet eo ar pakad-mañ betek an arreval',
	'PERFORM_DATABASE_UPDATE'			=> 'Hizivaat an diaz-titouroù',
	'PERFORM_DATABASE_UPDATE_EXPLAIN'	=> 'amañ-kichen e kavfoc\'h un nozelenn davet ur furmskird hizivaat an diaz-titouroù. Gallout a ra padout ur prantadig, setu na baouezit ket gant an oberenn ma seblant bezañ sac\'het. Goude ma vefe bet graet, heuliit an urzhioù evit kenderc\'hel gant an hizivaat.',
	'PREVIOUS_VERSION'					=> 'Arreval kent',
	'PROGRESS'							=> 'Mont war-raok',

	'RESULT'					=> 'Disoc\'h',
	'RUN_DATABASE_SCRIPT'		=> 'Hizivaat bremañ ma ziaz-titouroù',

	'SELECT_DIFF_MODE'			=> 'Dibab doare an diforc\'hioù',
	'SELECT_DOWNLOAD_FORMAT'	=> 'Dibab stumm an diell da bellgargañ',
	'SELECT_FTP_SETTINGS'		=> 'Dibab dilennoù FTP',
	'SHOW_DIFF_CONFLICT'		=> 'Diskouez diforc\'hioù / bec\'hioù',
	'SHOW_DIFF_FINAL'			=> 'Diskouz ar restr-disoc\'h',
	'SHOW_DIFF_MODIFIED'		=> 'Diskouez an diforc\'hioù bet kendeuzet',
	'SHOW_DIFF_NEW'				=> 'Diskouez endalc\'had ar restr',
	'SHOW_DIFF_NEW_CONFLICT'	=> 'Diskouez an diforc\'hioù',
	'SHOW_DIFF_NOT_MODIFIED'	=> 'Diskouez an diforc\'hioù',
	'SOME_QUERIES_FAILED'		=> 'Traoù \'zo n\'o deus ket gallet bezañ graet, displeget e vez perak amañ-kichen.',
	'SQL'						=> 'SQL',
	'SQL_FAILURE_EXPLAIN'		=> 'Moarvat n\'eus netra chalus, emañ an hizivaat o vont da genderc\'hel. Ma n\'ez afe ket betek penn e vefe dav deoc\'h mont da c\'houlenn sikour war foromoù kenskoazell. Lennit <a href="../docs/README.html">README</a> evit gouzout penaos kaout sikour.',
	'STAGE_FILE_CHECK'			=> 'Gwiriañ restroù',
	'STAGE_UPDATE_DB'			=> 'Hizivaat an diaz-titouroù',
	'STAGE_UPDATE_FILES'		=> 'Hizivaat ar restroù',
	'STAGE_VERSION_CHECK'		=> 'Gwiriañ an arreval',
	'STATUS_CONFLICT'			=> 'Restr kemmet a sav bec\'h gantañ',
	'STATUS_MODIFIED'			=> 'Restr kemmet',
	'STATUS_NEW'				=> 'Restr nevez',
	'STATUS_NEW_CONFLICT'		=> 'Restr nevez a sav bec\'h gantañ',
	'STATUS_NOT_MODIFIED'		=> 'Restr ket bet kemmet',
	'STATUS_UP_TO_DATE'			=> 'Restr bet hizivaet c\'hoazh',

	'TOGGLE_DISPLAY'			=> 'Gwelet/Kuzhat listenn ar restroù',

	'UPDATE_COMPLETED'				=> 'Hizivadur echu',
	'UPDATE_DATABASE'				=> 'Hizivaat an diaz-titouroù',
	'UPDATE_DATABASE_EXPLAIN'		=> 'Er bazenn a zeu e vo hizivaet an diaz-titouroù',
	'UPDATE_DATABASE_SCHEMA'		=> 'Hizivaat tres an diaz-titouroù',
	'UPDATE_FILES'					=> 'Hizivaat ar restroù',
	'UPDATE_FILES_NOTICE'			=> 'Bezit sure eo bet hizivaet ar restroù ivez, amañ n\'eo bet hizivaet nemet an diaz-titouroù.',
	'UPDATE_INSTALLATION'			=> 'Hizivaat staliadur phpBB',
	'UPDATE_INSTALLATION_EXPLAIN'	=> 'Gant an dilenn-mañ e c\'hellit hizivaat ho staliadur eus phpBB betek he stumm neveshañ.<br />E-pad ma vo graet e vo gwiriet reizhded ho holl restroù. Gallout a rit gwelet an holl diforc\'hioù hag an holl restroù a-raok an hizivaat.<br /><br />Hizivaat ar restroù a c\'hell bezañ graet e daou zoare disheñvel.</p><h2>Gant an dorn</h2><p>Gant an dilenn-mañ e pellgargit ho tibab a restroù kemmet, a-benn bezañ sur n\'ho po ket kollet ar cheñchamantoù bet graet ganeoc\'h. Goude bezañ bet pellgarget ar pakad-mañ eo dav lakaat ho-unan ar restroù kemmet mat en o flas mat. Ur wech graet e c\'hellit gwiriañ en-dro ar restroù, a-benn bezañ sur ho peus o lakaet el lec\'h mat.</p><h2>Hizivaat emgefreek gant an FTP</h2><p>Heñvel eo an hentenn-mañ ouzh an hini all, nemet n\'ho peus ket ezhomm da bellgargañ ha da bellgas ho-unan ar restroù . Graet e vp kement-mañ evidoc\'h. A-benn ober gant an hentenn-mañ eo dav deoc\'h anavezout ho titouroù FTP (login ha ger-tremen) dra ma vint goulennet diganeoc\'h. Goude ma vo echu e vo goulennet diganeoc\'h gwiriañ pep tra en-dro, a-benn bezañ sur eo bet graet mat pep tra.<br /><br />',
	'UPDATE_INSTRUCTIONS'			=> '

		<h1>Kemenn an arreval</h1>

		<p>Lennit mat  <a href="%1$s" title="%1$s"><strong>kemenn an arreval ziwezhañ</strong></a> a-raok kenderc\'hel gant an hizivaat, titouroù a-bouez a zo ennañ. Ennañ e vo kavet ivez liammoù klok evit ar pellgargañ, ha roll ar cheñchamantoù.</p>

		<br />

		<h1>Penaos hizivaat ho staliadur gant ar Pakad Hizivaat Emgefreek</h1>

		<p>N\'ez a an hentenn kinniget amañ en-dro nemet evit ar Pakad Hizivaat Emgefreek. Gallout a rit ivez hizivaat ho staliadur gant an hentennoù a vez anv outo er restr INSTALL.html. Setu ar pezh a zo d\'ober evit an hizivaat emgefreek :</p>

		<ul style="margin-left: 20px; font-size: 1.1em;">
			<li>Kit war <a href="http://www.phpbb.com/downloads/" title="http://www.phpbb.com/downloads/">pajenn pellgargañ phpB.com</a> ha pellgargit an diell “Pakad Hizivaat Emgefreek phpBB”.<br /><br /></li>
			<li>Dispakit ar pakad.<br /><br /></li>
			<li>Pellgasit an teuliad dispaket ha klok betek ho teuliad-gwrizienn phpBB (e-lec\'h m\'emañ ar restr config.php ).<br /><br /></li>
		</ul>

		<p>Pa vo bet graet kement-se, n\'hallo ket an implijerien boutin mont war ho forom, abalamour d\'an teuliad \'install\' a vo war internet.<br /><br />
		<strong><a href="%2$s" title="%2$s">Krogit gant an hizivaat o kas ho merdeer betek an teuliad \'install\'</a>.</strong><br />
		<br />
		Neuze e vo lavaret deoc\'h petra ober hag e voc\'h kelaouet pa vo echu.
		</p>
	',
	'UPDATE_INSTRUCTIONS_INCOMPLETE'	=> '

		<h1>N\'eo ket klok an hizivaat</h1>

		<p>Kavet ez eus bet gant phpBB ne oa ket klok an hizivaat. Bezit asur ho peus heuliat an holl pazennoù gant ar Pakad Hizivaat Emgefreek. Amañ-kichen e kavoc\'h en-dro al liamm davet ar bajenn-staliañ, galout a rit ivez mont diouzhtu en teuliad “install”.</p>
	',
	'UPDATE_METHOD'					=> 'Hentenn evit hizivaat',
	'UPDATE_METHOD_EXPLAIN'			=> 'Bremañ e c\'hellit dibab an hentenn a gavit ar gwellañ evit hizivaat. Ma rit gant an FTP e vo diskouezet ur prenestr deoc\'h, o c\'houlenn diganeoc\'h ho titouroù (login ha ger-tremen) evit gallout kennaskañ gant an FTP. Gant an hentenn-mañ e vo kaset diouzhtu ar restroù el lec\'h a zere, hag e vo miret ar restroù kozh evit ur saveteiñ dre ouzhpennañ .bak d\'o anv. Ma tibabit pellgargañ ar restroù kemmet e c\'hellit dispakañ ha pellgas anezho el lec\'h mat gant an dorn da c\'houde.',
	'UPDATE_REQUIRES_FILE'			=> 'Ezhomm en deus ar poellad-hizivaat ouzh ar restr-mañ&nbsp;: %s',
	'UPDATE_SUCCESS'				=> 'Graet eo bet an hizivaat',
	'UPDATE_SUCCESS_EXPLAIN'		=> 'Hizivaet eo bet an holl restroù. Gant ar bazenn a zeu e vint gwiriet, evit bezañ sur eo bet graet mat an traoù.',
	'UPDATE_VERSION_OPTIMIZE'		=> 'Hizivaat an arreval ha gwellekaat an diazoù',
	'UPDATING_DATA'					=> 'Hizivaat ar roadoù',
	'UPDATING_TO_LATEST_STABLE'		=> 'Hizivaat an diaz-titouroù betek an arreval stabil neveshañ',
	'UPDATED_VERSION'				=> 'Arreval neveshaet',
	'UPLOAD_METHOD'					=> 'Hentenn evit pellgas',

	'UPDATE_DB_SUCCESS'				=> 'Hizivaet eo bet an diaz-titouroù.',
	'USER_ACTIVE'					=> 'Ezel oberiant',
	'USER_INACTIVE'					=> 'Ezel ket oberiant',

	'VERSION_CHECK'				=> 'Gwiriañ an arreval',
	'VERSION_CHECK_EXPLAIN'		=> 'Gwiriañ eo arreval neveshañ phpBB a rit gantañ.',
	'VERSION_NOT_UP_TO_DATE'	=> 'N\'eo ket arreval neveshañ phpBB a zo ganeoc\'h. Kendalc\'hit gant an hizivaat.',
	'VERSION_NOT_UP_TO_DATE_ACP'=> 'N\'eo ket arreval neveshañ phpBB a zo ganeoc\'h.<br />amañ-kichen e kavfoc\'h ul liamm davet kemenn an arreval neveshañ, ha davet an urzhioù evit hizivaat phpBB.',
	'VERSION_UP_TO_DATE'		=> 'Your installation is up to date, no updates are available for your version of phpBB. You may want to continue anyway to perform a file validity check.',
	'VERSION_UP_TO_DATE_ACP'	=> 'Your installation is up to date, no updates are available for your version of phpBB. You do not need to update your installation.',
	'VIEWING_FILE_CONTENTS'		=> 'Gwelet endalc\'had ar restr',
	'VIEWING_FILE_DIFF'			=> 'Gwelet diforc\'hioù ar restr',

	'WRONG_INFO_FILE_FORMAT'	=> 'Direizh gant an holl stummoù',
));

// Default database schema entries...
$lang = array_merge($lang, array(
	'CONFIG_BOARD_EMAIL_SIG'		=> 'Trugarez, ar Mererezh',
	'CONFIG_SITE_DESC'				=> 'Un destennig berr evit diskrivañ ho forom',
	'CONFIG_SITENAME'				=> 'unanv.com',

	'DEFAULT_INSTALL_POST'			=> 'Ur c\'hemennadenn skouer eo hounezh. War a seblant ez a pep tra mat en-dro. Gallout a rit diverkañ ar gemennadenn-mañ m\'ho peus c\'hoant, ha kenderc\'hel d\'ober war-dro ho tibaboù war ar forom. Pa\'z eo bet krouet ar rann kentañ ez eus bet roet dezhañ aotreoù a zere evit ar strolladoù raktermenet evel merourien, robotoù, kasourien hollek, gweladennerien, izili, hag implijerien ar COPPA. Ma tiverkit ar rann kentañ hag ar forom kentañ ennañ e vo ret deoc\'h reiñ aotreoù en-dro unan hag unan d\'ar strolladoù-mañ evit pep forom nevez krouet. Setu e vez aliet deoc\'h kentañ cheñch anv ar rann hag ar forom kentañ, hag eilañ an aotreoù pa rankit krouiñ ur forom nevez. Emichañs e vo plijadur ganeoc\'h !',

	'EXT_GROUP_ARCHIVES'			=> 'Restroù gwasket',
	'EXT_GROUP_DOCUMENTS'			=> 'Dielloù',
	'EXT_GROUP_DOWNLOADABLE_FILES'	=> 'Restroù da bellgargañ',
	'EXT_GROUP_FLASH_FILES'			=> 'Restroù Flash',
	'EXT_GROUP_IMAGES'				=> 'Skeudennoù',
	'EXT_GROUP_PLAIN_TEXT'			=> 'Testenn plaen',
	'EXT_GROUP_QUICKTIME_MEDIA'		=> 'Quicktime Media',
	'EXT_GROUP_REAL_MEDIA'			=> 'Real Media',
	'EXT_GROUP_WINDOWS_MEDIA'		=> 'Windows Media',

	'FORUMS_FIRST_CATEGORY'			=> 'Ho rann kentañ',
	'FORUMS_TEST_FORUM_DESC'		=> 'Deskrivadur ho forom kentañ.',
	'FORUMS_TEST_FORUM_TITLE'		=> 'Ho forom kentañ',

	'RANKS_SITE_ADMIN_TITLE'		=> 'Merour',
	'REPORT_WAREZ'               => 'Er gemennadenn ez eus liammoù davet meziantoù maez-lezenn.',
	'REPORT_SPAM'               => 'Ober bruderezh eo pal nemetañ ar gemennadenn.',
	'REPORT_OFF_TOPIC'            => 'Er-maez diouzh ar sujed emañ ar gemennadenn.',
	'REPORT_OTHER'               => 'Un abeg all a zo da sevel un danevell diwar-benn ar gemennadenn-mañ, roit an abeg-mañ en dakad “titouroù ouzhpenn”.',

	'SMILIES_ARROW'					=> 'Bir',
	'SMILIES_CONFUSED'				=> 'Touteg',
	'SMILIES_COOL'					=> 'Lunedoù Heol',
	'SMILIES_CRYING'				=> 'O leñvañ pe trist-tre',
	'SMILIES_EMARRASSED'			=> 'Chalet',
	'SMILIES_EVIL'					=> 'Diaoul pe sot-nailh',
	'SMILIES_EXCLAMATION'			=> 'Estlammañ',
	'SMILIES_GEEK'					=> 'Geek',
	'SMILIES_IDEA'					=> 'Mennozh',
	'SMILIES_LAUGHING'				=> 'O C\'hoarzin',
	'SMILIES_MAD'					=> 'Sot',
	'SMILIES_MR_GREEN'				=> 'Gwer',
	'SMILIES_NEUTRAL'				=> 'Neutrel',
	'SMILIES_QUESTION'				=> 'Goulenn',
	'SMILIES_RAZZ'					=> 'Teod',
	'SMILIES_ROLLING_EYES'			=> 'Daoulagad o ruilhañ',
	'SMILIES_SAD'					=> 'Trist',
	'SMILIES_SHOCKED'				=> 'Sebezhet',
	'SMILIES_SMILE'					=> 'Mousc\'hoarzh',
	'SMILIES_SURPRISED'				=> 'Souezhet',
	'SMILIES_TWISTED_EVIL'			=> 'Diaoulek',
	'SMILIES_UBER_GEEK'				=> 'Uber Geek',
	'SMILIES_VERY_HAPPY'			=> 'Laouen-tre',
	'SMILIES_WINK'					=> 'Klik',

	'TOPICS_TOPIC_TITLE'			=> 'Degemer mat war phpBB3',
));

?>
