<?php
/**
*
* install [English]
* 
* @package language
* @version $Id: install.php,v 1.127 2007/10/12 18:14:15 acydburn Exp $
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
	'ADMIN_CONFIG'				=> 'प्रशासक विन्यास',
	'ADMIN_PASSWORD'			=> 'प्रशासक गुप्तशब्द',
	'ADMIN_PASSWORD_CONFIRM'	=> 'प्रशासक गुप्तशब्द की पुष्टी करें',
	'ADMIN_PASSWORD_EXPLAIN'	=> 'कृपया ६ से ३० अक्षरो के बीच का पासवर्ड भरें',
	'ADMIN_TEST'				=> 'प्रशासक सैटिग जाचें',
	'ADMIN_USERNAME'			=> 'प्रशासक उपयोक्ता का नाम',
	'ADMIN_USERNAME_EXPLAIN'	=> 'कृपया युजरनेम 6 से 20 अक्षरो के बीच का भरें Please enter a username between 3 and 20 characters in length.',
	'APP_MAGICK'				=> 'Imagemagick support [ Attachments ]',
	'AUTHOR_NOTES'				=> 'लेखक के नोट्स <br />» %s',
	'AVAILABLE'					=> 'उपलब्ध',
	'AVAILABLE_CONVERTORS'		=> 'उपलब्ध परिवर्तक',

	'BEGIN_CONVERT'					=> 'परिवर्तन आरम्भ करें',
	'BLANK_PREFIX_FOUND'			=> 'A scan of your tables has shown a valid installation using no table prefix.',
	'BOARD_NOT_INSTALLED'			=> 'कोई स्थापक नहीं मिला',
	'BOARD_NOT_INSTALLED_EXPLAIN'	=> 'The phpBB Unified Convertor Framework requires a default installation of phpBB3 to function, please <a href="%s">proceed by first installing phpBB3</a>.',

	'CATEGORY'					=> 'वर्ग',
	'CACHE_STORE'				=> 'कैश प्रकार',
	'CACHE_STORE_EXPLAIN'		=> 'The physical location where data is cached, filesystem is preferred.',
	'CAT_CONVERT'				=> 'परिवर्तन',
	'CAT_INSTALL'				=> 'स्थापन',
	'CAT_OVERVIEW'				=> 'समीक्षा',
	'CAT_UPDATE'				=> 'नवीनीकरण',
	'CHANGE'					=> 'बदलें',
	'CHECK_TABLE_PREFIX'		=> 'Please check your table prefix and try again.',
	'CLEAN_VERIFY'				=> 'Cleaning up and verifying the final structure',
	'CLEANING_USERNAMES'		=> 'उपयोक्तानाम साफ किया जा रहा है',
	'COLLIDING_CLEAN_USERNAME'	=> '<strong>%s</strong> is the clean username for:',
	'COLLIDING_USERNAMES_FOUND'	=> 'Colliding usernames were found on your old board. In order to complete the conversion please delete or rename these users so that there is only one user on your old board for each clean username.',
	'COLLIDING_USER'			=> '» user id: <strong>%d</strong> username: <strong>%s</strong> (%d posts)',
	'CONFIG_CONVERT'			=> 'Converting the configuration',
	'CONFIG_FILE_UNABLE_WRITE'	=> 'It was not possible to write the configuration file. Alternative methods for this file to be created are presented below.',
	'CONFIG_FILE_WRITTEN'		=> 'The configuration file has been written. You may now proceed to the next step of the installation.',
	'CONFIG_PHPBB_EMPTY'		=> 'The phpBB3 config variable for “%s” is empty.',
	'CONFIG_RETRY'				=> 'दुबारा प्रयास करें',
	'CONTACT_EMAIL_CONFIRM'		=> 'संपर्क ई-डाक की पुष्टी करें',
	'CONTINUE_CONVERT'			=> 'परिवर्तन जारी करें',
	'CONTINUE_CONVERT_BODY'		=> 'A previous conversion attempt has been determined. You are now able to choose between starting a new conversion or continuing the conversion.',
	'CONTINUE_LAST'				=> 'Continue last statements',
	'CONTINUE_OLD_CONVERSION'	=> 'पिछला बदलाव चालू किया गया था उसे जारी रखें',
	'CONVERT'					=> 'परिवर्तन',
	'CONVERT_COMPLETE'			=> 'परिवर्तन प्रकिया पुर्ण',
	'CONVERT_COMPLETE_EXPLAIN'	=> 'You have now successfully converted your board to phpBB 3.0. You can now login and <a href="../">access your board</a>. Please ensure that the settings were transferred correctly before enabling your board by deleting the install directory. Remember that help on using phpBB is available online via the <a href="http://www.phpbb.com/support/documentation/3.0/">Documentation</a> and the <a href="http://www.phpbb.com/community/viewforum.php?f=46">support forums</a>.',
	'CONVERT_INTRO'				=> 'phpBB के यूनिफ़ाईड कर्न्वटर (Unified Convertor Framework) फ्रेमवर्क पर आपका स्वागत हैं ।',
	'CONVERT_INTRO_BODY'		=> 'From here, you are able to import data from other (installed) board systems. The list below shows all the conversion modules currently available. If there is no convertor shown in this list for the board software you wish to convert from, please check our website where further conversion modules may be available for download.',
	'CONVERT_NEW_CONVERSION'	=> 'नया परिवर्तन',
	'CONVERT_NOT_EXIST'			=> 'निर्धारित बदलाव करने वाला उपलब्ध नहीं है The specified convertor does not exist.',
	'CONVERT_OPTIONS'			=> 'विकल्प',
	'CONVERT_SETTINGS_VERIFIED'	=> 'The information you entered has been verified. To start the conversion process, push the button below to begin.',
	'CONV_ERR_FATAL'			=> 'फेटल कर्न्वज़न त्रुटि',

	'CONV_ERROR_ATTACH_FTP_DIR'			=> 'FTP upload for attachments is enabled at the old board. Please disable the FTP upload option and make sure a valid upload directory is specified, then copy all attachment files to this new web accessible directory. Once you have done this, restart the convertor.',
	'CONV_ERROR_CONFIG_EMPTY'			=> 'कर्न्वज़न के लिए कोई कॉन्फिगुरेशन सूचना उपलब्ध नहीं हैं।',
	'CONV_ERROR_FORUM_ACCESS'			=> 'मंच एक्सेस की सूचना प्राप्त करने में असफल।',
	'CONV_ERROR_GET_CATEGORIES'			=> 'वर्ग प्राप्त करने में असफल ।',
	'CONV_ERROR_GET_CONFIG'				=> 'आपके बोर्ड कॉन्फिगुरेशन को प्राप्त नहीं कर सका ।',
	'CONV_ERROR_COULD_NOT_READ'			=> '“%s” को एक्सेस/पढ़ने में असफल .',
	'CONV_ERROR_GROUP_ACCESS'			=> 'समूह की आथन्टीकेशन सूचना प्राप्त करने में असफल ।',
	'CONV_ERROR_INCONSISTENT_GROUPS'	=> 'Inconsistency in groups table detected in add_bots() - you need to add all special groups if you do it manually.',
	'CONV_ERROR_INSERT_BOT'				=> 'Unable to insert bot into users table.',
	'CONV_ERROR_INSERT_BOTGROUP'		=> 'Unable to insert bot into bots table.',
	'CONV_ERROR_INSERT_USER_GROUP'		=> 'उपयोक्ता समूह टेबल में उपयोक्ता को लाने में असफल।',
	'CONV_ERROR_MESSAGE_PARSER'			=> 'Message parser error',
	'CONV_ERROR_NO_AVATAR_PATH'			=> 'Note to developer: you must specify $convertor[\'avatar_path\'] to use %s.',
	'CONV_ERROR_NO_FORUM_PATH'			=> 'The relative path to the source board has not been specified.',
	'CONV_ERROR_NO_GALLERY_PATH'		=> 'Note to developer: you must specify $convertor[\'avatar_gallery_path\'] to use %s.',
	'CONV_ERROR_NO_GROUP'				=> 'Group “%1$s” could not be found in %2$s.',
	'CONV_ERROR_NO_RANKS_PATH'			=> 'Note to developer: you must specify $convertor[\'ranks_path\'] to use %s.',
	'CONV_ERROR_NO_SMILIES_PATH'		=> 'Note to developer: you must specify $convertor[\'smilies_path\'] to use %s.',
	'CONV_ERROR_NO_UPLOAD_DIR'			=> 'Note to developer: you must specify $convertor[\'upload_path\'] to use %s.',
	'CONV_ERROR_PERM_SETTING'			=> 'अनुमति व्यवस्था को लाने/अपडेट करने में असफल।',
	'CONV_ERROR_PM_COUNT'				=> 'Unable to select folder pm count.',
	'CONV_ERROR_REPLACE_CATEGORY'		=> 'पुराने वर्ग की जगह नये मंच को स्थापित करने में असफल।',
	'CONV_ERROR_REPLACE_FORUM'			=> 'पुराने मंच की जगह नये मंच को स्थापित करने में असफल। ',
	'CONV_ERROR_USER_ACCESS'			=> 'उपयोक्ता की आथन्टीकेशन सूचना प्राप्त करने में असफल। ',
	'CONV_ERROR_WRONG_GROUP'			=> 'Wrong group “%1$s” defined in %2$s.',
	'CONV_OPTIONS_BODY'					=> 'This page collects the data required to access the source board. Enter the database details of your former board; the converter will not change anything in the database given below. The source board should be disabled to allow a consistent conversion.',
	'CONV_SAVED_MESSAGES'				=> 'संचित संदेश',

	'COULD_NOT_COPY'			=> 'Could not copy file <strong>%1$s</strong> to <strong>%2$s</strong><br /><br />Please check that the target directory exists and is writable by the webserver.',
	'COULD_NOT_FIND_PATH'		=> 'Could not find path to your former board. Please check your settings and try again.<br />» %s was specified as the source path.',

	'DBMS'						=> 'आंकड़ाकोष प्रकार',
	'DB_CONFIG'					=> 'आंकड़ाकोष विन्यास',
	'DB_CONNECTION'				=> 'आंकड़ाकोष संयोजन',
	'DB_ERR_INSERT'				=> 'Error while processing <code>INSERT</code> query.',
	'DB_ERR_LAST'				=> 'Error while processing <var>query_last</var>.',
	'DB_ERR_QUERY_FIRST'		=> 'Error while executing <var>query_first</var>.',
	'DB_ERR_QUERY_FIRST_TABLE'	=> 'Error while executing <var>query_first</var>, %s (“%s”).',
	'DB_ERR_SELECT'				=> 'Error while running <code>SELECT</code> query.',
	'DB_HOST'					=> 'आंकड़ाकोष सर्वर का नाम या DSN',
	'DB_HOST_EXPLAIN'			=> 'DSN - Data Source Name नाम से जाना जाता है यह तभी काम आता जब ODBC स्थापना हो रही हो ।',
	'DB_NAME'					=> 'आंकड़ाकोष नाम',
	'DB_PASSWORD'				=> 'आंकड़ाकोष गुप्तशब्द',
	'DB_PORT'					=> 'आंकड़ाकोष सर्वर पोर्ट',
	'DB_PORT_EXPLAIN'			=> 'इसे भरें यदि आपको ज्ञात है कि सर्वर नॉन-स्टेन्डर्ड पोर्ट पर कार्य करता है अन्यथा रिक्त छोड़े।',
	'DB_USERNAME'				=> 'आंकड़ाकोष उपयोक्ता का नाम',
	'DB_TEST'					=> 'संयोजन का परीक्षण करें',
	'DEFAULT_LANG'				=> ' निर्धारित बोर्ड भाषा',
	'DEFAULT_PREFIX_IS'			=> 'The convertor was not able to find tables with the specified prefix. Please make sure you have entered the correct details for the board you are converting from. The default table prefix for %1$s is <strong>%2$s</strong>.',
	'DEV_NO_TEST_FILE'			=> 'No value has been specified for the test_file variable in the convertor. If you are a user of this convertor, you should not be seeing this error, please report this message to the convertor author. If you are a convertor author, you must specify the name of a file which exists in the source board to allow the path to it to be verified.',
	'DIRECTORIES_AND_FILES'		=> 'डॉयरेक्ट्री एवं फ़ाईल सेटअप ',
	'DISABLE_KEYS'				=> 'Disabling keys',
	'DLL_FIREBIRD'				=> 'Firebird',
	'DLL_FTP'					=> 'Remote FTP support [ Installation ]',
	'DLL_GD'					=> 'GD graphics support [ Visual Confirmation ]',
	'DLL_MBSTRING'				=> 'Multi-byte character support',
	'DLL_MSSQL'					=> 'MSSQL Server 2000+',
	'DLL_MSSQL_ODBC'			=> 'MSSQL Server 2000+ via ODBC',
	'DLL_MYSQL'					=> 'MySQL',
	'DLL_MYSQLI'				=> 'MySQL with MySQLi Extension',
	'DLL_ORACLE'				=> 'Oracle',
	'DLL_POSTGRES'				=> 'PostgreSQL 7.x/8.x',
	'DLL_SQLITE'				=> 'SQLite',
	'DLL_XML'					=> 'XML support [ Jabber ]',
	'DLL_ZLIB'					=> 'zlib compression support [ gz, .tar.gz, .zip ]',
	'DL_CONFIG'					=> 'Download config',
	'DL_CONFIG_EXPLAIN'			=> 'You may download the complete config.php to your own PC. You will then need to upload the file manually, replacing any existing config.php in your phpBB 3.0 root directory. Please remember to upload the file in ASCII format (see your FTP application documentation if you are unsure how to achieve this). When you have uploaded the config.php please click “Done” to move to the next stage.',
	'DL_DOWNLOAD'				=> 'डाउनलोड',
	'DONE'						=> 'पुर्ण',

	'ENABLE_KEYS'				=> 'कुंजी को फिर सक्रिय किया जा रहा हैं । इसमे कुछ समय लग सकता है ।',

	'FILES_OPTIONAL'			=> 'वैकल्पिक फ़ाइल एंव फोल्डर',
	'FILES_OPTIONAL_EXPLAIN'	=> '<strong>Optional</strong> - These files, directories or permission settings are not required. The installation system will attempt to use various techniques to create them if they do not exist or cannot be written to. However, the presence of these will speed installation.',
	'FILES_REQUIRED'			=> 'फ़ाइल एंव फोल्डर',
	'FILES_REQUIRED_EXPLAIN'	=> '<strong>Required</strong> - In order to function correctly phpBB needs to be able to access or write to certain files or directories. If you see “Not Found” you need to create the relevant file or directory. If you see “Unwritable” you need to change the permissions on the file or directory to allow phpBB to write to it.',
	'FILLING_TABLE'				=> 'टेबल भरा जा रहा है <strong>%s</strong>',
	'FILLING_TABLES'			=> 'टेबल भरे रहे है',
	'FINAL_STEP'				=> 'क्रिया का अंतिम चरण',
	'FORUM_ADDRESS'				=> 'बोर्ड पता',
	'FORUM_ADDRESS_EXPLAIN'		=> 'This is the URL of your former board, for example <samp>http://www.example.com/phpBB2/</samp>. If an address is entered here and not left empty every instance of this address will be replaced by your new board address within messages, private messages and signatures.',
	'FORUM_PATH'				=> 'बोर्ड पथ',
	'FORUM_PATH_EXPLAIN'		=> 'This is the <strong>relative</strong> path on disk to your former board from the <strong>root of this phpBB3 installation</strong>.',
	'FOUND'						=> 'प्राप्त',
	'FTP_CONFIG'				=> 'Transfer config by FTP',
	'FTP_CONFIG_EXPLAIN'		=> 'phpBB has detected the presence of the FTP module on this server. You may attempt to install your config.php via this if you wish. You will need to supply the information listed below. Remember your username and password are those to your server! (ask your hosting provider for details if you are unsure what these are).',
	'FTP_PATH'					=> 'FTP पथ',
	'FTP_PATH_EXPLAIN'			=> 'This is the path from your root directory to that of phpBB, e.g. <samp>htdocs/phpBB3/</samp>.',
	'FTP_UPLOAD'				=> 'अपलोड',

	'GPL'						=> 'सामान्य पब्लिक लाईसेन्स General Public License',

	'INITIAL_CONFIG'			=> 'मूल विन्यास',
	'INITIAL_CONFIG_EXPLAIN'	=> 'Now that install has determined your server can run phpBB you need to supply some specific information. If you do not know how to connect to your database please contact your hosting provider (in the first instance) or use the phpBB support forums. When entering data please ensure you check it thoroughly before continuing.',
	'INSTALL_CONGRATS'			=> 'बधाई!',
	'INSTALL_CONGRATS_EXPLAIN'	=> '
		<p>You have now successfully installed phpBB %1$s. From here, you have two options as to what to do with your newly installed phpBB3:</p>
		<h2>Convert an existing board to phpBB3</h2>
		<p>The phpBB Unified Convertor Framework supports the conversion of phpBB 2.0.x and other board systems to phpBB3. If you have an existing board that you wish to convert, please <a href="%2$s">proceed on to the convertor</a>.</p>
		<h2>Go live with your phpBB3!</h2>
		<p>Clicking the button below will take you to your Administration Control Panel (ACP). Take some time to examine the options available to you. Remember that help is available online via the <a href="http://www.phpbb.com/support/documentation/3.0/">Documentation</a> and the <a href="http://www.phpbb.com/community/viewforum.php?f=46">support forums</a>, see the <a href="%3$s">README</a> for further information.</p><p><strong>Please now delete, move or rename the install directory before you use your board. If this directory is still present, only the Administration Control Panel (ACP) will be accessible.</strong></p>',
	'INSTALL_INTRO'				=> 'स्थापना में आपका स्वागत हैं',
// TODO: write some more introductions here
	'INSTALL_INTRO_BODY'		=> 'With this option, it is possible to install phpBB onto your server.</p><p>In order to proceed, you will need your database settings. If you do not know your database settings, please contact your host and ask for them. You will not be able to continue without them. You need:</p>

	<ul>
		<li>आंकड़ाकोष प्रकार - आंकड़ाकोष जो आप उपयोग मे लाना चाहते हैं </li>
		<li>आंकड़ाकोष सर्वर का होस्टनाम या DSN - आंकड़ाकोष सर्वर का पता ।</li>
		<li>आंकड़ाकोष सर्वर पोर्ट - आंकड़ाकोष सर्वर का पोर्ट (सामान्यतः इसे बदलने की जरुरत नही)।</li>
		<li>आंकड़ाकोष नाम - आंकड़ाकोष का नाम सर्वर मे।</li>
		<li>आंकड़ाकोष सर्वर का उपयोक्ता नाम एवं गुप्तशब्द  - आंकड़ाकोष मे पहुँचने का सत्रारंभ आंकड़ा।</li>
	</ul>

	<p><strong>Note:</strong> if you are installing using SQLite, you should enter the full path to your database file in the DSN field and leave the username and password fields blank. For security reasons, you should make sure that the database file is not stored in a location accessible from the web.</p>

	<p>phpBB3 निम्न आंकड़ाकोषो का समर्थन करता हैं:</p>
	<ul>
		<li>MySQL 3.23 or above (MySQLi supported)</li>
		<li>PostgreSQL 7.3+</li>
		<li>SQLite 2.8.2+</li>
		<li>Firebird 2.0+</li>
		<li>MS SQL Server 2000 or above (directly or via ODBC)</li>
		<li>Oracle</li>
	</ul>
	
	<p>Only those databases supported on your server will be displayed.',
	'INSTALL_INTRO_NEXT'		=> 'स्थापना प्रारम्भ करने हेतु ,कृपया निम्न बटन दबाये.',
	'INSTALL_LOGIN'				=> 'सत्रारंभ',
	'INSTALL_NEXT'				=> 'अगला पद',
	'INSTALL_NEXT_FAIL'			=> 'Some tests failed and you should correct these problems before proceeding to the next stage. Failure to do so may result in an incomplete installation.',
	'INSTALL_NEXT_PASS'			=> 'All the basic tests have been passed and you may proceed to the next stage of installation. If you have changed any permissions, modules, etc. and wish to re-test you can do so if you wish.',
	'INSTALL_PANEL'				=> 'स्थापना पटल',
	'INSTALL_SEND_CONFIG'		=> 'Unfortunately phpBB could not write the configuration information directly to your config.php. This may be because the file does not exist or is not writable. A number of options will be listed below enabling you to complete installation of config.php.',
	'INSTALL_START'				=> 'स्थापना आरम्भ करें',
	'INSTALL_TEST'				=> 'पुन: परीक्षण करें',
	'INST_ERR'					=> 'स्थापना त्रुटि',
	'INST_ERR_DB_CONNECT'		=> 'आंकड़ाकोष से संपर्क नहीं कर पा रहा है , नीचे दिए गए त्रुटि संदेश को देखें ।',
	'INST_ERR_DB_FORUM_PATH'	=> 'The database file specified is within your board directory tree. You should put this file in a non web-accessible location.',
	'INST_ERR_DB_NO_ERROR'		=> 'किसी त्रुटि की सुचना नहीं दी गई ',
	'INST_ERR_DB_NO_MYSQLI'		=> 'The version of MySQL installed on this machine is incompatible with the “MySQL with MySQLi Extension” option you have selected. Please try the “MySQL” option instead.',
	'INST_ERR_DB_NO_SQLITE'		=> 'The version of the SQLite extension you have installed is too old, it must be upgraded to at least 2.8.2.',
	'INST_ERR_DB_NO_ORACLE'		=> 'The version of Oracle installed on this machine requires you to set the <var>NLS_CHARACTERSET</var> parameter to <var>UTF8</var>. Either upgrade your installation to 9.2+ or change the parameter.',
	'INST_ERR_DB_NO_FIREBIRD'	=> 'The version of Firebird installed on this machine is older than 2.0, please upgrade to a newer version.',
	'INST_ERR_DB_NO_FIREBIRD_PS'=> 'The database you selected for Firebird has a page size less than 8192, it must be at least 8192.',
	'INST_ERR_DB_NO_POSTGRES'	=> 'The database you have selected was not created in <var>UNICODE</var> or <var>UTF8</var> encoding. Try installing with a database in <var>UNICODE</var> or <var>UTF8</var> encoding.',
	'INST_ERR_DB_NO_NAME'		=> 'कोई आंकड़ाकोष नाम निर्धारित नहीं है ।',
	'INST_ERR_EMAIL_INVALID'	=> 'आपके द्वारा भरा गया ई-मेल पता सही नहीं हैं।',
	'INST_ERR_EMAIL_MISMATCH'	=> 'आपके द्वारा भरा गया ई-मेल बेमेल हैं।',
	'INST_ERR_FATAL'			=> 'फेटल स्थापना त्रुटि',
	'INST_ERR_FATAL_DB'			=> 'A fatal and unrecoverable database error has occurred. This may be because the specified user does not have appropriate permissions to <code>CREATE TABLES</code> or <code>INSERT</code> data, etc. Further information may be given below. Please contact your hosting provider in the first instance or the support forums of phpBB for further assistance.',
	'INST_ERR_FTP_PATH'			=> 'Could not change to the given directory, please check the path.',
	'INST_ERR_FTP_LOGIN'		=> 'Could not login to FTP server, check your username and password.',
	'INST_ERR_MISSING_DATA'		=> 'आपको इस ब्लॉक के सभी फिल्ड भरने हैं ।',
	'INST_ERR_NO_DB'			=> 'चुने हुए आंकड़ाकोष हेतु PHP मॉड्युल लोड नहीं कर सका',
	'INST_ERR_PASSWORD_MISMATCH'	=> 'आपके द्वारा भरा गया गुप्तशब्द बेमेल हैं।',
	'INST_ERR_PASSWORD_TOO_LONG'	=> 'आपके द्वारा भरा गया गुप्तशब्द बहुत बड़ा है । अधिकतम् ३० अक्षर लंबा होना चाहिए ।',
	'INST_ERR_PASSWORD_TOO_SHORT'	=> 'आपके द्वारा भरा गया गुप्तशब्द बहुत छोटा है । कम से कम ६ अक्षर लंबा होना चाहिए।',
	'INST_ERR_PREFIX'			=> 'Tables with the specified prefix already exist, please choose an alternative.',
	'INST_ERR_PREFIX_INVALID'	=> 'The table prefix you have specified is invalid for your database. Please try another, removing characters such as the hyphen.',
	'INST_ERR_PREFIX_TOO_LONG'	=> 'The table prefix you have specified is too long. The maximum length is %d characters.',
	'INST_ERR_USER_TOO_LONG'	=> 'आपके द्वारा भरा गया उपयोक्ता नाम बहुत बडा है । अधिकतम् २० अक्षर लंबा होना चाहिए।',
	'INST_ERR_USER_TOO_SHORT'	=> 'आपके द्वारा भरा गया उपयोक्ता नाम बहुत छोटा है । कम से कम ३ अक्षर लंबा होना चाहिए।',
	'INVALID_PRIMARY_KEY'		=> 'Invalid primary key : %s',

	'LONG_SCRIPT_EXECUTION'		=> 'Please note that this can take a while... Please do not stop the script.',

	// mbstring
	'MBSTRING_CHECK'						=> '<samp>mbstring</samp> extension check',
	'MBSTRING_CHECK_EXPLAIN'				=> '<strong>Required</strong> - <samp>mbstring</samp> is a PHP extension that provides multibyte string functions. Certain features of mbstring are not compatible with phpBB and must be disabled.',
	'MBSTRING_FUNC_OVERLOAD'				=> 'Function overloading',
	'MBSTRING_FUNC_OVERLOAD_EXPLAIN'		=> '<var>mbstring.func_overload</var> must be set to either 0 or 4.',
	'MBSTRING_ENCODING_TRANSLATION'			=> 'Transparent character encoding',
	'MBSTRING_ENCODING_TRANSLATION_EXPLAIN'	=> '<var>mbstring.encoding_translation</var> must be set to 0.',
	'MBSTRING_HTTP_INPUT'					=> 'HTTP input character conversion',
	'MBSTRING_HTTP_INPUT_EXPLAIN'			=> '<var>mbstring.http_input</var> must be set to <samp>pass</samp>.',
	'MBSTRING_HTTP_OUTPUT'					=> 'HTTP output character conversion',
	'MBSTRING_HTTP_OUTPUT_EXPLAIN'			=> '<var>mbstring.http_output</var> must be set to <samp>pass</samp>.',

	'MAKE_FOLDER_WRITABLE'		=> 'Please make sure that this folder exists and is writable by the webserver then try again:<br />»<strong>%s</strong>.',
	'MAKE_FOLDERS_WRITABLE'		=> 'Please make sure that these folders exist and are writable by the webserver then try again:<br />»<strong>%s</strong>.',

	'NAMING_CONFLICT'			=> 'Naming conflict: %s and %s are both aliases<br /><br />%s',
	'NEXT_STEP'					=> 'आगे बढ़ें',
	'NOT_FOUND'					=> 'नहीं मिला',
	'NOT_UNDERSTAND'			=> 'Could not understand %s #%d, table %s (“%s”)',
	'NO_CONVERTORS'				=> 'कोई बदलाव उपयोग हेतु उपलब्ध नहीं है ।',
	'NO_CONVERT_SPECIFIED'		=> 'No convertor specified.',
	'NO_LOCATION'				=> 'Cannot determine location. If you know Imagemagick is installed, you may specify the location later within your administration control panel',
	'NO_TABLES_FOUND'			=> 'कोई टेबल नहीं मिला ।',
// TODO: Write some explanatory introduction text

	'OVERVIEW_BODY'					=> 'Welcome to our public release candidate of the next-generation of phpBB after 2.0.x, phpBB 3.0! This release is intended for wider scale use to help us identifying last bugs and problematic areas.</p><p>Please read <a href="../docs/INSTALL.html">our installation guide</a> for more information about installing phpBB3</p><p><strong style="text-transform: uppercase;">Note:</strong> This release is <strong style="text-transform: uppercase;">still not final</strong>. You may want to wait for the full final release before running it live.</p><p>This installation system will guide you through the process of installing phpBB, converting from a different software package or updating to the latest version of phpBB. For more information on each option, select it from the menu above.',

	'PCRE_UTF_SUPPORT'				=> 'PCRE UTF-8 support',
	'PCRE_UTF_SUPPORT_EXPLAIN'		=> 'phpBB will <strong>not</strong> run if your PHP installation is not compiled with UTF-8 support in the PCRE extension.',
	'PHP_GETIMAGESIZE_SUPPORT'			=> 'PHP function getimagesize() is available',
	'PHP_GETIMAGESIZE_SUPPORT_EXPLAIN'	=> '<strong>Required</strong> - In order for phpBB to function correctly, the getimagesize function needs to be available.',
	'PHP_OPTIONAL_MODULE'			=> 'वैकल्पिक इकाईयाँ',
	'PHP_OPTIONAL_MODULE_EXPLAIN'	=> '<strong>Optional</strong> - These modules or applications are optional. However, if they are available they will enable extra features.',
	'PHP_SUPPORTED_DB'				=> 'सर्मथित आंकड़ाकोष',
	'PHP_SUPPORTED_DB_EXPLAIN'		=> '<strong>Required</strong> - You must have support for at least one compatible database within PHP. If no database modules are shown as available you should contact your hosting provider or review the relevant PHP installation documentation for advice.',
	'PHP_REGISTER_GLOBALS'			=> 'PHP setting <var>register_globals</var> is disabled',
	'PHP_REGISTER_GLOBALS_EXPLAIN'	=> 'phpBB will still run if this setting is enabled, but if possible, it is recommended that register_globals is disabled on your PHP install for security reasons.',
	'PHP_SAFE_MODE'					=> 'सेफ मोड़ ',
	'PHP_SETTINGS'					=> 'PHP वर्ज़न एंव सैटिग',
	'PHP_SETTINGS_EXPLAIN'			=> '<strong>Required</strong> - You must be running at least version 4.3.3 of PHP in order to install phpBB. If <var>safe mode</var> is displayed below your PHP installation is running in that mode. This will impose limitations on remote administration and similar features.',
	'PHP_URL_FOPEN_SUPPORT'			=> 'PHP setting <var>allow_url_fopen</var> is enabled',
	'PHP_URL_FOPEN_SUPPORT_EXPLAIN'	=> '<strong>Optional</strong> - This setting is optional, however certain phpBB functions like off-site avatars will not work properly without it. ',
	'PHP_VERSION_REQD'				=> 'PHP वर्ज़न >= 4.3.3',
	'POST_ID'						=> 'Post ID',
	'PREFIX_FOUND'					=> 'A scan of your tables has shown a valid installation using <strong>%s</strong> as table prefix.',
	'PREPROCESS_STEP'				=> 'Executing pre-processing functions/queries',
	'PRE_CONVERT_COMPLETE'			=> 'All pre-conversion steps have successfully been completed. You may now begin the actual conversion process. Please note that you may have to manually do and adjust several things. After conversion, especially check the permissions assigned, rebuild your search index which is not converted and also make sure files got copied correctly, for example avatars and smilies.',
	'PROCESS_LAST'					=> 'Processing last statements',

	'REFRESH_PAGE'				=> 'Refresh page to continue conversion',
	'REFRESH_PAGE_EXPLAIN'		=> 'If set to yes, the convertor will refresh the page to continue the conversion after having finished a step. If this is your first conversion for testing purposes and to determine any errors in advance, we suggest to set this to No.',
//	'REQUIRED'					=> 'अपेक्षित',
	'REQUIREMENTS_TITLE'		=> 'स्थापना अनुकूलता',
	'REQUIREMENTS_EXPLAIN'		=> 'Before proceeding with the full installation phpBB will carry out some tests on your server configuration and files to ensure that you are able to install and run phpBB. Please ensure you read through the results thoroughly and do not proceed until all the required tests are passed. If you wish to use any of the features depending on the optional tests, you should ensure that these tests are passed also.',
	'RETRY_WRITE'				=> 'Retry writing config',
	'RETRY_WRITE_EXPLAIN'		=> 'If you wish you can change the permissions on config.php to allow phpBB to write to it. Should you wish to do that you can click Retry below to try again. Remember to return the permissions on config.php after phpBB has finished installation.',

	'SCRIPT_PATH'				=> 'स्क्रिप्ट पाथ',
	'SCRIPT_PATH_EXPLAIN'		=> 'The path where phpBB is located relative to the domain name, e.g. <samp>/phpBB3</samp>.',
	'SELECT_LANG'				=> 'भाषा चयन करें',
	'SERVER_CONFIG'				=> 'सर्वर विन्यास',
	'SEARCH_INDEX_UNCONVERTED'	=> 'खोजा गया इनडेक्स नहीं बदला गया था Search index was not converted',
	'SEARCH_INDEX_UNCONVERTED_EXPLAIN'	=> 'Your old search index was not converted. Searching will always yield an empty result. To create a new search index go to the Administration Control Panel, select Maintenance and then choose Search index from the submenu.',
	'SOFTWARE'					=> 'बोर्ड सॉफ्टवेयर',
	'SPECIFY_OPTIONS'			=> 'कनवर्ज़न विकल्प निर्देशित करें',
	'STAGE_ADMINISTRATOR'		=> 'प्रशासक सूचना',
	'STAGE_ADVANCED'			=> 'उन्नत सैटिग',
	'STAGE_ADVANCED_EXPLAIN'	=> 'The settings on this page are only necessary to set if you know that you require something different from the default. If you are unsure, just proceed to the next page, as these settings can be altered from the Administration Control Panel later.',
	'STAGE_CONFIG_FILE'			=> 'विन्यास फ़ाइल',
	'STAGE_CREATE_TABLE'		=> 'आंकड़ाकोष मे टेबल बनाएँ',
	'STAGE_CREATE_TABLE_EXPLAIN'	=> 'The database tables used by phpBB 3.0 have been created and populated with some initial data. Proceed to the next screen to finish installing phpBB.',
	'STAGE_DATABASE'			=> 'आंकड़ाकोष सैटिग',
	'STAGE_FINAL'				=> 'निर्णायक चरण ',
	'STAGE_INTRO'				=> 'परिचय',
	'STAGE_IN_PROGRESS'			=> 'कनवर्ज़न प्रगति मे हैं',
	'STAGE_REQUIREMENTS'		=> 'अपेक्षाएँ',
	'STAGE_SETTINGS'			=> 'सैटिग',
	'STARTING_CONVERT'			=> 'कनवर्ज़न क्रिया प्रारंभ किया जा रहा हैं ',
	'STEP_PERCENT_COMPLETED'	=> 'चरण  <strong>%d</strong> का <strong>%d</strong>',
	'SUB_INTRO'					=> 'परिचय',
	'SUB_LICENSE'				=> 'अधिकारना',
	'SUB_SUPPORT'				=> 'सहायता',
	'SUCCESSFUL_CONNECT'		=> 'सफल संयोजन',
// TODO: Write some text on obtaining support
	'SUPPORT_BODY'				=> 'During the release candidate phase full support will be given at <a href="http://www.phpbb.com/community/viewforum.php?f=46">the phpBB 3.0.x support forums</a>. We will provide answers to general setup questions, configuration problems, conversion problems and support for determining common problems mostly related to bugs. We also allow discussions about modifications and custom code/style additions.</p><p>For additional assistance, please refer to our <a href="http://www.phpbb.com/support/documentation/3.0/quickstart/">Quick Start Guide</a> and <a href="http://www.phpbb.com/support/documentation/3.0/">the online documentation</a>.</p><p>To ensure you stay up to date with the latest news and releases, why not <a href="http://www.phpbb.com/support/">subscribe to our mailing list</a>?',
	'SYNC_FORUMS'				=> 'Starting to synchronise forums',
	'SYNC_POST_COUNT'			=> 'Synchronising post_counts',
	'SYNC_POST_COUNT_ID'		=> 'Synchronising post_counts from <var>entry</var> %1$s to %2$s.',
	'SYNC_TOPICS'				=> 'Starting to synchronise topics',
	'SYNC_TOPIC_ID'				=> 'Synchronising topics from <var>topic_id</var> %1$s to %2$s से विषय को सिकोडना शुरु कर रहा है .',

	'TABLES_MISSING'			=> 'इन टेबल ढूंढा नहीं जा सका <br />» <strong>%s</strong>.',
	'TABLE_PREFIX'				=> 'Prefix for tables in database',
	'TABLE_PREFIX_SAME'			=> 'The table prefix needs to be the one used by the software you are converting from.<br />» Specified table prefix was %s.',
	'TESTS_PASSED'				=> 'परीक्षण सफल',
	'TESTS_FAILED'				=> 'परीक्षण असफल',

	'UNABLE_WRITE_LOCK'			=> 'Unable to write lock file.',
	'UNAVAILABLE'				=> 'अनुउपलब्ध',
	'UNWRITABLE'				=> 'लेखन अयोग्य',
	'UPDATE_TOPICS_POSTED'		=> 'Generating topics posted information',
	'UPDATE_TOPICS_POSTED_ERR'	=> 'An error occured while generating topics posted information. You can retry this step in the ACP after the conversion process is completed.',
	'VERIFY_OPTIONS'			=> 'कनवर्ज़न विकल्पो की पुष्टि की जा रही हैं',
	'VERSION'					=> 'वर्ज़न',

	'WELCOME_INSTALL'			=> 'phpBB3 स्थापना में आपका स्वागत हैं',
	'WRITABLE'					=> 'लेखन योग्य',
));

// Updater
$lang = array_merge($lang, array(
	'ALL_FILES_UP_TO_DATE'		=> 'All files are up to date with the latest phpBB version. You should now <a href="../ucp.php?mode=login">login to your board</a> and check if everything is working fine. Do not forget to delete, rename or move your install directory!',
	'ARCHIVE_FILE'				=> 'Source file within archive',

	'BACK'				=> 'पीछे',
	'BINARY_FILE'		=> 'बाईनेरी फ़ाईल',
	'BOT'				=> 'स्पाईडर /रोबोट ',

	'CHANGE_CLEAN_NAMES'			=> 'The method used to make sure a username is not used by multiple users has been changed. There are some users which have the same name when compared with the new method. You have to delete or rename these users to make sure that each name is only used by one user before you can proceed.',
	'CHECK_FILES'					=> 'फ़ाईल जाँचे',
	'CHECK_FILES_AGAIN'				=> 'फ़ाईल को पुनः जाँचे',
	'CHECK_FILES_EXPLAIN'			=> 'Within the next step all files will be checked against the update files - this can take a while if this is the first file check.',
	'CHECK_FILES_UP_TO_DATE'		=> 'According to your database your version is up to date. You may want to proceed with the file check to make sure all files are really up to date with the latest phpBB version.',
	'CHECK_UPDATE_DATABASE'			=> 'अपडेट क्रिया को ज़ारी रखें',
	'COLLECTED_INFORMATION'			=> 'फाईल की जानकारियाँ',
	'COLLECTED_INFORMATION_EXPLAIN'	=> 'The list below shows information about the files needing an update. Please read the information in front of every status block to see what they mean and what you may need to do to perform a successful update.',
	'COLLECTING_FILE_DIFFS'			=> 'Collecting file differences',
	'COMPLETE_LOGIN_TO_BOARD'		=> 'You should now <a href="../ucp.php?mode=login">login to your board</a> and check if everything is working fine. Do not forget to delete, rename or move your install directory!',
	'CONTINUE_UPDATE_NOW'			=> 'अब अपडेट क्रिया को ज़ारी रखें ',
	'CURRENT_FILE'					=> 'Current original file',
	'CURRENT_VERSION'				=> 'वर्तमान वर्ज़न',

	'DATABASE_TYPE'						=> 'आंकड़ाकोष प्रकार',
	'DATABASE_UPDATE_INFO_OLD'			=> 'The database update file within the install directory is outdated. Please make sure you uploaded the correct version of the file.',
	'DELETE_USER_REMOVE'				=> 'उपयोक्ता को मिटाएँ और स्तम्भ को हटाएँ ',
	'DELETE_USER_RETAIN'				=> 'उपयोक्ता को मिटाएँ किन्तु स्तम्भ को रखें ',
	'DESTINATION'						=> 'लक्षित फ़ाईल Destination file',
	'DIFF_INLINE'						=> 'Inline',
	'DIFF_RAW'							=> 'Raw unified diff',
	'DIFF_SEP_EXPLAIN'					=> 'End of current file / Begin of new updated file',
	'DIFF_SIDE_BY_SIDE'					=> 'Side by Side',
	'DIFF_UNIFIED'						=> 'Unified diff',
	'DO_NOT_UPDATE'						=> 'इस फ़ाईल को अपडेट मत करें',
	'DONE'								=> 'पुर्ण',
	'DOWNLOAD'							=> 'डाउनलोड',
	'DOWNLOAD_AS'						=> 'ऐसे डॉउनलोड करें',
	'DOWNLOAD_UPDATE_METHOD'			=> 'Download modified files archive',
	'DOWNLOAD_UPDATE_METHOD_EXPLAIN'	=> 'Once downloaded you should unpack the archive. You will find the modified files you need to upload to your phpBB root directory within it. Please upload the files to their respective locations then. After you have uploaded all files, please check the files again with the other button below.',

	'ERROR'			=> 'त्रुटि ',
	'EDIT_USERNAME'	=> 'उपयोक्ता नाम सम्पादित करें ',

	'FILE_ALREADY_UP_TO_DATE'		=> 'File is already up to date.',
	'FILE_DIFF_NOT_ALLOWED'			=> 'File not allowed to be diffed.',
	'FILE_USED'						=> 'Information used from',			// Single file
	'FILES_CONFLICT'				=> 'Conflict files',
	'FILES_CONFLICT_EXPLAIN'		=> 'The following files are modified and do not represent the original files from the old version. phpBB determined that these files create conflicts if they are tried to be merged. Please investigate the conflicts and try to manually resolve them or continue the update choosing the preferred merging method. If you resolve the conflicts manually check the files again after you modified them. You are also able to choose between the preferred merge method for every file. The first one will result in a file where the conflicting lines from your old file will be lost, the other one will result in loosing the changes from the newer file.',
	'FILES_MODIFIED'				=> 'सम्पादित फ़ाईल ',
	'FILES_MODIFIED_EXPLAIN'		=> 'The following files are modified and do not represent the original files from the old version. The updated file will be a merge between your modifications and the new file.',
	'FILES_NEW'						=> 'नये फ़ाईल',
	'FILES_NEW_EXPLAIN'				=> 'The following files currently do not exist within your installation. These files will be added to your installation.',
	'FILES_NEW_CONFLICT'			=> 'New conflicting files',
	'FILES_NEW_CONFLICT_EXPLAIN'	=> 'The following files are new within the latest version but it has been determined that there is already a file with the same name within the same position. This file will be overwritten by the new file.',
	'FILES_NOT_MODIFIED'			=> 'Not modified files',
	'FILES_NOT_MODIFIED_EXPLAIN'	=> 'The following files are not modified and represent the original phpBB files from the version you want to update from.',
	'FILES_UP_TO_DATE'				=> 'पहले से अपडेटेड फ़ाईल',
	'FILES_UP_TO_DATE_EXPLAIN'		=> 'The following files are already up to date and do not need to be updated.',
	'FTP_SETTINGS'					=> 'FTP सैटिंग ',
	'FTP_UPDATE_METHOD'				=> 'FTP अपलोड',

	'INCOMPATIBLE_UPDATE_FILES'		=> 'The update files found are incompatible with your installed version. Your installed version is %1$s and the update file is for updating phpBB %2$s to %3$s.',
	'INCOMPLETE_UPDATE_FILES'		=> 'The update files are incomplete.',
	'INLINE_UPDATE_SUCCESSFUL'		=> 'The database update was successful. Now you need to continue the update process.',

	'KEEP_OLD_NAME'		=> 'Keep username',

	'LATEST_VERSION'		=> 'नवीनतम वर्जन',
	'LINE'					=> 'लाईन ',
	'LINE_ADDED'			=> 'Added',
	'LINE_MODIFIED'			=> 'Modified',
	'LINE_REMOVED'			=> 'हटाया हुआ ',
	'LINE_UNMODIFIED'		=> 'Unmodified',
	'LOGIN_UPDATE_EXPLAIN'	=> 'In order to update your installation you need to login first.',

	'MAPPING_FILE_STRUCTURE'	=> 'To ease the upload here are the file locations which map your phpBB installation.',

	'MERGE_MODIFICATIONS_OPTION'	=> 'Merge modifications',

	'MERGE_NO_MERGE_NEW_OPTION'	=> 'Do not merge - use new file',
	'MERGE_NO_MERGE_MOD_OPTION'	=> 'Do not merge - use currently installed file',
	'MERGE_MOD_FILE_OPTION'		=> 'Merge differences and use modified code within conflicting block',
	'MERGE_NEW_FILE_OPTION'		=> 'Merge differences and use new file code within conflicting block',
	'MERGE_SELECT_ERROR'		=> 'Conflicting file merge modes are not correctly selected.',
	'MERGING_FILES'				=> 'Merging differences',
	'MERGING_FILES_EXPLAIN'		=> 'Currently collecting final file changes.<br /><br />Please wait until phpBB has completed all operations on changed files.',

	'NEW_FILE'						=> 'नया अपडेटेट फाईल ',
	'NEW_USERNAME'					=> 'नया उपयोक्ता नाम ',
	'NO_AUTH_UPDATE'				=> 'Not authorised to update',
	'NO_ERRORS'						=> 'कोई त्रुटि नहीं',
	'NO_UPDATE_FILES'				=> 'निम्न फाईल को अपडेट नहीं किया गया ',
	'NO_UPDATE_FILES_EXPLAIN'		=> 'The following files are new or modified but the directory they normally reside in could not be found on your installation. If this list contains files to other directories than language/ or styles/ than you may have modified your directory structure and the update may be incomplete.',
	'NO_UPDATE_FILES_OUTDATED'		=> 'No valid update directory was found, please make sure you uploaded the relevant files.<br /><br />Your installation does <strong>not</strong> seem to be up to date. Updates are available for your version of phpBB %1$s, please visit <a href="http://www.phpbb.com/downloads/" rel="external">http://www.phpbb.com/downloads/</a> to obtain the correct package to update from Version %2$s to Version %3$s.',
	'NO_UPDATE_FILES_UP_TO_DATE'	=> 'आपका वर्जन वर्तमान समय का है । अभी अपडेट करने की जरुरत नहीं है ।  Your version is up to date. There is no need to run the update tool. If you want to make an integrity check on your files make sure you uploaded the correct update files.',
	'NO_UPDATE_INFO'				=> 'अपडेट फाईल की जानकारी अप्राप्त ।',
	'NO_UPDATES_REQUIRED'			=> 'कोई अपडेट की जरुरत नहीं हैं',
	'NO_VISIBLE_CHANGES'			=> 'No visible changes',
	'NOTICE'						=> 'सूचना',
	'NUM_CONFLICTS'					=> 'Number of conflicts',
	'NUMBER_OF_FILES_COLLECTED'		=> 'Currently having differences about %1$d from %2$d files collected.<br />Please wait until file collection finished.',

	'OLD_UPDATE_FILES'		=> 'Update files are out of date. The update files found are for updating from phpBB %1$s to phpBB %2$s but the latest version of phpBB is %3$s.',

	'PACKAGE_UPDATES_TO'				=> 'वर्तमान पैकेज वर्जन के साथ अपडेट हो रहा है Current package updates to version',
	'PERFORM_DATABASE_UPDATE'			=> 'डेटाबेस अपडेट करे Perform database update',
	'PERFORM_DATABASE_UPDATE_EXPLAIN'	=> 'Below you will find a button to the database update script. The database update can take a while, so please do not stop the execution if it seems to hang. After the database update has been performed just follow the instructions to continue the update process.',
	'PREVIOUS_VERSION'					=> 'पिछला वर्ज़न ',
	'PROGRESS'							=> 'प्रगति ',

	'RESULT'					=> 'परिणाम',
	'RUN_DATABASE_SCRIPT'		=> 'मेरा डाटाबेस अभी अपडेट करें',

	'SELECT_DIFF_MODE'			=> 'दूसरा मोड़ चुने',
	'SELECT_DOWNLOAD_FORMAT'	=> 'Select download archive format',
	'SELECT_FTP_SETTINGS'		=> 'FTP सैटिंग को चुने',
	'SHOW_DIFF_CONFLICT'		=> 'अंतर/कान्फ्लिक्ट को दिखाएँ',
	'SHOW_DIFF_FINAL'			=> 'परिणामित फाईल दिखाएँ',
	'SHOW_DIFF_MODIFIED'		=> 'मर्ज के अंतरो को दिखाएँ',
	'SHOW_DIFF_NEW'				=> 'फाईल की सामग्रीयाँ दिखाएँ',
	'SHOW_DIFF_NEW_CONFLICT'	=> 'अंतर दिखाएँ ',
	'SHOW_DIFF_NOT_MODIFIED'	=> 'अंतर दिखाएँ ',
	'SOME_QUERIES_FAILED'		=> 'Some queries failed, the statements and errors are listing below.',
	'SQL'						=> 'SQL',
	'SQL_FAILURE_EXPLAIN'		=> 'This is probably nothing to worry about, update will continue. Should this fail to complete you may need to seek help at our support forums. See <a href="../docs/README.html">README</a> for details on how to obtain advice.',
	'STAGE_FILE_CHECK'			=> 'फाईल को जाँचे ',
	'STAGE_UPDATE_DB'			=> 'आंकड़ाकोष अपडेट करें',
	'STAGE_UPDATE_FILES'		=> 'फाईल को अपडेट करें ',
	'STAGE_VERSION_CHECK'		=> 'वर्ज़न जाँचे ',
	'STATUS_CONFLICT'			=> 'बदले फ़ाईल जो कान्फ्लिक्ट पैदा कर रहे हैं',
	'STATUS_MODIFIED'			=> 'सम्पादित फाईल',
	'STATUS_NEW'				=> 'नई फाईल',
	'STATUS_NEW_CONFLICT'		=> 'नया फाईल कान्फ्लिक्ट हो रहा है',
	'STATUS_NOT_MODIFIED'		=> 'फाईल सम्पादित नहीं हुआ है ',
	'STATUS_UP_TO_DATE'			=> 'फाईल पहले से अपडेट है ',

	'TOGGLE_DISPLAY'			=> 'दिखाएँ/छुपाएँ फाईल की सूची ',

	'UPDATE_COMPLETED'				=> 'अपडेट पुर्ण हुआ ',
	'UPDATE_DATABASE'				=> 'आंकड़ाकोष अपडेट करें ',
	'UPDATE_DATABASE_EXPLAIN'		=> 'अगले चरण में आंकड़ाकोष अपडेट होगा । ',
	'UPDATE_DATABASE_SCHEMA'		=> 'आंकड़ाकोष स्कीमा को अपडेट कर रहा है ',
	'UPDATE_FILES'					=> 'अपडेट फाईल',
	'UPDATE_FILES_NOTICE'			=> 'Please make sure you have updated your board files too, this file is only updating your database.',
	'UPDATE_INSTALLATION'			=> 'अपडेट  phpBB स्थापना ',
	'UPDATE_INSTALLATION_EXPLAIN'	=> 'इस विकल्प से आप phpBB के वर्तमान वर्जन को अपडेट कर सकते हैं ।<br /> During the process all of your files will be checked for their integrity. You are able to review all differences and files before the update.<br /><br /> The file update itself can be done in two different ways.</p><h2> Manual Update</h2><p>With this update you only download your personal set of changed files to make sure you do not lose your file modifications you may have done. After you downloaded this package you need to manually upload the files to their correct position under your phpBB root directory. Once done, you are able to do the file check stage again to see if you moved the files to their correct location.</p><h2>Automatic Update with FTP</h2><p>This method is similar to the first one but without the need to download the changed files and uploading them on your own. This will be done for you. In order to use this method you need to know your FTP login details since you will be asked for them. Once finished you will be redirected to the file check again to make sure everything got updated correctly.<br /><br />',
	'UPDATE_INSTRUCTIONS'			=> '

		<h1>विमोचन सूचना</h1>

		<p>Please read <a href="%1$s" title="%1$s"><strong>the release announcement for the latest version</strong></a> before you continue your update process, it may contain useful information. It also contains full download links as well as the change log.</p>

		<br />

		<h1>How to update your installation with the Automatic Update Package</h1>

		<p>The recommended way of updating your installation listed here is only valid for the automatic update package. You are also able to update your installation using the methods listed within the INSTALL.html document. The steps for updating phpBB3 automatically are:</p>

		<ul style="margin-left: 20px; font-size: 1.1em;">
			<li>Go to the <a href="http://www.phpbb.com/downloads/" title="http://www.phpbb.com/downloads/">phpBB.com downloads page</a> and download the "Automatic Update Package" archive.<br /><br /></li>
			<li>Unpack the archive.<br /><br /></li>
			<li>Upload the complete uncompressed install folder to your phpBB root directory (where your config.php file is).<br /><br /></li>
		</ul>

		<p>Once uploaded your board will be offline for normal users due to the install directory you uploaded now present.<br /><br />
		<strong><a href="%2$s" title="%2$s">Now start the update process by pointing your browser to the install folder</a>.</strong><br />
		<br />You will then be guided through the update process. You will be notified once the update is complete.
		</p>
	',
	'UPDATE_INSTRUCTIONS_INCOMPLETE'	=> '

		<h1>अपडेट अधुरा हैं </h1>

		<p>phpBB detected an incomplete automatic update. Please make sure you followed every step within the automatic update tool. Below you will find the link again, or go directly to your install directory.</p>
	',
	'UPDATE_METHOD'					=> 'अपडेट विधियाँ',
	'UPDATE_METHOD_EXPLAIN'			=> 'You are now able to choose your preferred update method. Using the FTP upload will present you with a form you need to enter your FTP account details into. With this method the files will be automatically moved to the new location and backups of the old files being created by appending .bak to the filename. If you choose to download the modified files you are able to unpack and upload them to their correct location manually later.',
	'UPDATE_REQUIRES_FILE'			=> 'The updater requires that the following file is present: %s',
	'UPDATE_SUCCESS'				=> 'अपडेट सफलतापुर्वक हो गया',
	'UPDATE_SUCCESS_EXPLAIN'		=> 'सभी फाईल को सफलतापुर्वक अपडेट किया जा चुका है । अगला लक्ष्य : सभी फ़ाईलो की जाँच करना है कि सभी फ़ाईल अपडेट हुए है या नहीं ।',
	'UPDATE_VERSION_OPTIMIZE'		=> 'वर्ज़न को अपडेट कर रहें हैं एवं टेबल उन्नत कर रहें हैं',
	'UPDATING_DATA'					=> 'आंकड़ो को अपडेट कर रहें हैं',
	'UPDATING_TO_LATEST_STABLE'		=> 'Updating database to latest stable release',
	'UPDATED_VERSION'				=> 'अपडेटेड वर्ज़न',
	'UPLOAD_METHOD'					=> 'अपलोड विधि ',

	'UPDATE_DB_SUCCESS'				=> 'आंकड़ाकोष को सफलतापुर्वक अपडेट किया गया।',
	'USER_ACTIVE'					=> 'सक्रिय उपयोक्ता ',
	'USER_INACTIVE'					=> 'निष्क्रिय उपयोक्ता',

	'VERSION_CHECK'				=> 'वर्जन पता करें',
	'VERSION_CHECK_EXPLAIN'		=> 'जाचँ हेतु कि phpBB का जो वर्ज़न चल रहा है वह नवीनतम् है या नहीं ।',
	'VERSION_NOT_UP_TO_DATE'	=> 'आपका phpBB का वर्ज़न नवीनतम् नहीं है । कृपया अपडेट कार्य ज़ारी रखें।',
	'VERSION_NOT_UP_TO_DATE_ACP'=> 'आपका phpBB का वर्ज़न नवीनतम् नहीं है । <br />नीचे आप नये वर्ज़न के लिंक की जानकारी एवं कैसे अपडेट करे की जानकारी प्राप्त कर सकते हैं। ',
	'VERSION_UP_TO_DATE'		=> 'आपका इन्सटालेशन नवीनतम् है, phpBB का कोई अपडेट वर्ज़न उपलब्ध नहीं है । क्या आप किसी भी तरह इस कार्य को आगे ज़ारी रखना चाहते हैं।',
	'VERSION_UP_TO_DATE_ACP'	=> 'आपका इन्सटालेशन नवीनतम् है, phpBB का कोई अपडेट वर्ज़न उपलब्ध नहीं है । आपको अपने इन्टालेशन को अपडेट करने की जरुरत नहीं है ।',
	'VIEWING_FILE_CONTENTS'		=> 'फ़ाईल साम्रगी देख रहे हैं',
	'VIEWING_FILE_DIFF'			=> 'फ़ाईल की भिन्नता देख रहे हैं',

	'WRONG_INFO_FILE_FORMAT'	=> 'Wrong info file format',
));

// Default database schema entries...
$lang = array_merge($lang, array(
	'CONFIG_BOARD_EMAIL_SIG'		=> 'प्रबन्धन को, धन्यवाद ',
	'CONFIG_SITE_DESC'				=> 'आपके मंच के विवरण हेतु एक छोटा टेक्स्ट',
	'CONFIG_SITENAME'				=> 'yourdomain.com',

	'DEFAULT_INSTALL_POST'			=> 'यह उधारण स्तम्भ है आपके phpBB3 स्थापना का। 	बोर्ड ठीकठाक कार्य करते प्रतीत हो रहा हैं । You may delete this post if you like and continue to set up your board.During the installation process your first category and your first forum are assigned an appropriate set of permissions for the predefined usergroups administrators, bots, global moderators, guests, registered users and registered COPPA users. If you also choose to delete your first category and your first forum, do not forget to assign permissions for all these usergroups for all new categories and forums you create. It is recommended to rename your first category and your first forum and copy permissions from these while creating new categories and forums. मज़े करें!',

	'EXT_GROUP_ARCHIVES'			=> 'Archives',
	'EXT_GROUP_DOCUMENTS'			=> 'डॉक्युमेंट',
	'EXT_GROUP_DOWNLOADABLE_FILES'	=> 'Downloadable Files',
	'EXT_GROUP_FLASH_FILES'			=> 'फ्लेश फाईल',
	'EXT_GROUP_IMAGES'				=> 'चित्र',
	'EXT_GROUP_PLAIN_TEXT'			=> 'सादा टेक्स्ट',
	'EXT_GROUP_QUICKTIME_MEDIA'		=> 'Quicktime मीडिया ',
	'EXT_GROUP_REAL_MEDIA'			=> 'Real मीडिया ',
	'EXT_GROUP_WINDOWS_MEDIA'		=> 'Windows मीडिया ',

	'FORUMS_FIRST_CATEGORY'			=> 'आपका पहला वर्ग ',
	'FORUMS_TEST_FORUM_DESC'		=> 'आपके पहले मंच का विवरण ।',
	'FORUMS_TEST_FORUM_TITLE'		=> 'आपका पहला मंच ',

	'RANKS_SITE_ADMIN_TITLE'		=> 'साईट प्रशासक',
	'REPORT_WAREZ'					=> 'जमा किय गये स्तम्भ मे अवैधानिक लिंक या पाईरेटेड साफ्टवेयर है ।',
	'REPORT_SPAM'					=> 'The reported post has the only purpose to advertise for a website or another product.',
	'REPORT_OFF_TOPIC'				=> 'The reported post is off topic.',
	'REPORT_OTHER'					=> 'The reported post does not fit into any other category, please use the further information field.',

	'SMILIES_ARROW'					=> 'तीर',
	'SMILIES_CONFUSED'				=> 'Confused',
	'SMILIES_COOL'					=> 'Cool',
	'SMILIES_CRYING'				=> 'रोना या बहुत दुखी',
	'SMILIES_EMARRASSED'			=> 'Embarrassed',
	'SMILIES_EVIL'					=> 'शैतान या पूरा पागल ',
	'SMILIES_EXCLAMATION'			=> ' Exclamation',
	'SMILIES_GEEK'					=> 'Geek',
	'SMILIES_IDEA'					=> 'उपाय ',
	'SMILIES_LAUGHING'				=> 'हसना ',
	'SMILIES_MAD'					=> 'पागल ',
	'SMILIES_MR_GREEN'				=> 'Mr. Green',
	'SMILIES_NEUTRAL'				=> 'Neutral',
	'SMILIES_QUESTION'				=> 'प्रश्न',
	'SMILIES_RAZZ'					=> 'Razz',
	'SMILIES_ROLLING_EYES'			=> 'आँखे घुमाना',
	'SMILIES_SAD'					=> 'दुखी ',
	'SMILIES_SHOCKED'				=> 'Shocked',
	'SMILIES_SMILE'					=> 'मुस्कुराहट ',
	'SMILIES_SURPRISED'				=> 'अचंभित',
	'SMILIES_TWISTED_EVIL'			=> 'उल्टा शैतान',
	'SMILIES_UBER_GEEK'				=> 'Uber Geek',
	'SMILIES_VERY_HAPPY'			=> 'बहुत खुश',
	'SMILIES_WINK'					=> 'Wink',

	'TOPICS_TOPIC_TITLE'			=> 'phpBB3 में आपका स्वागत हैं। ',
));

?>