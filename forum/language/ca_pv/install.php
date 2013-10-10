<?php
/**
*
* install [Catalan (Valencian)]
*
* @package language
* @version $Id: common.php,v 1.180 2007/05/20 14:01:46 acydburn Exp $
* @copyright (c) 2005 phpBB Group 
* @license http://opensource.org/licenses/gpl-license.php GNU Public License 
*
* Translated by//Traduït per Pau Iranzo <pau@somgnu.cat>
* Team//Equip de traducció de SomGNU <info@somgnu.cat>
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
	'ADMIN_CONFIG'				=> 'Configuració de l\'administrador',
	'ADMIN_PASSWORD'			=> 'Constrasenya de l\'administrador',
	'ADMIN_PASSWORD_CONFIRM'	=> 'Confirmació de la contrasenya',
	'ADMIN_PASSWORD_EXPLAIN'	=> 'Introduïu una contrasenya que continga entre 6 i 30 caràcters.',
	'ADMIN_TEST'				=> 'Comprova paràmetres de l\'administrador',
	'ADMIN_USERNAME'			=> 'Nom d\'usuari de l\'administrador',
	'ADMIN_USERNAME_EXPLAIN'	=> 'Introduïu un nom d\'usuari que continga entre 3 i 20 caràcters.',
	'APP_MAGICK'				=> 'Suport imagemagick [ Adjunts ]',
	'AUTHOR_NOTES'				=> 'Notes de l\'autor<br />» %s',
	'AVAILABLE'					=> 'Disponible',
	'AVAILABLE_CONVERTORS'		=> 'Convertidors disponibles',

	'BEGIN_CONVERT'					=> 'S\'està començant la conversió',
	'BLANK_PREFIX_FOUND'			=> 'L\'escaneig de les taules ha detectat una instal·lació vàlida amb taules sense prefix.',
	'BOARD_NOT_INSTALLED'			=> 'No s\'ha trobat cap instal·lació',
	'BOARD_NOT_INSTALLED_EXPLAIN'	=> 'El phpBB Unified Convertor Framework requereix una instal·lació per defecte de phpBB3 per tal de funcionar, <a href="%s">instal·leu primer el phpBB3</a>.',

	'CATEGORY'					=> 'Categoria',
	'CACHE_STORE'				=> 'Tipus de caché',
	'CACHE_STORE_EXPLAIN'		=> 'La situació física on es desen les dades, es prefereix un sistema de fitxers.',
	'CAT_CONVERT'				=> 'Converteix',
	'CAT_INSTALL'				=> 'Instal·la',
	'CAT_OVERVIEW'				=> 'Descripció',
	'CAT_UPDATE'				=> 'Actualitza',
	'CHANGE'					=> 'Canvia',
	'CHECK_TABLE_PREFIX'		=> 'Comproveu el prefix de la taula i proveu novament.',
	'CLEAN_VERIFY'				=> 'S\'està netejant i verificant l\'estructura final',
	'CLEANING_USERNAMES'		=> 'S\'esta netejant noms d\'usuari',
	'COLLIDING_CLEAN_USERNAME'	=> '<strong>%s</strong> és un nom d\'usuari net per:',
	'COLLIDING_USERNAMES_FOUND'	=> 'S\'han trobat noms d\'usuari coincidents a l\'antic fòrum. Per completar la conversió haureu d\'eliminar o canviar el nom d\'aquets usuari.',
	'COLLIDING_USER'			=> '» id d\'usuari: <strong>%d</strong> nom d\'usuari: <strong>%s</strong> (%d missatges)',
	'CONFIG_CONVERT'			=> 'S\'està convertint la configuració',
	'CONFIG_FILE_UNABLE_WRITE'	=> 'No s\'ha pogut escriure al fitxer de configuració. A continuació es mostren mètodes alternatius.',
	'CONFIG_FILE_WRITTEN'		=> 'S\'ha escrit el fitxer de configuració. Podeu procedir amb el següent pas de la instal·lació.',
	'CONFIG_PHPBB_EMPTY'		=> 'La variable de configuració del phpBB3 per "%s" és buida.',
	'CONFIG_RETRY'				=> 'Torna a provar',
	'CONTACT_EMAIL_CONFIRM'		=> 'Confirma adreça de correu de contacte',
	'CONTINUE_CONVERT'			=> 'Continua amb la conversió',
	'CONTINUE_CONVERT_BODY'		=> 'S\'ha trobat un procés de conversió anterior. Podeu triar entre començar una nova conversió o continuar amb l\'anterior.',
	'CONTINUE_LAST'				=> 'Continua darreres declaracions',
	'CONTINUE_OLD_CONVERSION'	=> 'Continua amb la conversió iniciada anteriorment',
	'CONVERT'					=> 'Converteix',
	'CONVERT_COMPLETE'			=> 'S\'ha completat la conversió',
	'CONVERT_COMPLETE_EXPLAIN'	=> 'Heu convertit el vostre fòrum a phpBB 3.0. Ara podeu entrar i <a href="../">accedir al fòrum</a>. Assegureu-vos que la configuració s\'ha transferit correctament abans d\'activar el fòrum esborrant el directori install. Recordeu que podeu trobar més ajuda a la <a href="http://www.phpbb.com/support/documentation/3.0/">documentació</a> i en <a href="http://www.phpbb.com/community/viewforum.php?f=46">el fòrums de suport</a>.',
	'CONVERT_INTRO'				=> 'Benvingtus al phpBB Unified Convertor Framework',
	'CONVERT_INTRO_BODY'		=> 'Des d\'ací, podeu importar altres sistemes/fòrums instal·lats. El llistat següent mostra tots els mòduls de conversió disponibles actualment. Si no hi ha cap canversor per al fòrum que voleu convertir, haureu d\'anar a la pàgina oficial de phpBB per obtindre més informació.',
	'CONVERT_NEW_CONVERSION'	=> 'Nova conversió',
	'CONVERT_NOT_EXIST'			=> 'El convertor especificat no existeix.',
	'CONVERT_OPTIONS'			=> 'Opcions',	
	'CONVERT_SETTINGS_VERIFIED'	=> 'S\'ha verificat la informació que heu introduït. Per iniciar el procés de conversió, feu clic al botó següent.',
	'CONV_ERR_FATAL'		=> 'Error fatal de conversió',

	'CONV_ERROR_ATTACH_FTP_DIR'			=> 'La càrrega de fitxers adjunts mitjançant FTP està habilitada a l\'antic fòrum. Desactiveu aquesta opció i assegureu-vos que hi ha un directori de càrrega especificat vàlid. Després copieu tots els fitxers adjunts al nou directori accessible. Quan ho hageu fet, continueu amb la conversió.',
	'CONV_ERROR_CONFIG_EMPTY'			=> 'No hi ha informació disponible sobre la configuració per a la conversió.',
	'CONV_ERROR_FORUM_ACCESS'			=> 'No es pot recuperar informació d\'accés al fòrum.',
	'CONV_ERROR_GET_CATEGORIES'			=> 'No es pot recuperar categories.',
	'CONV_ERROR_GET_CONFIG'				=> 'No es pot obtenir la configuració del fòrum.',
	'CONV_ERROR_COULD_NOT_READ'			=> 'No es pot accedir/llegir "%s".',
	'CONV_ERROR_GROUP_ACCESS'			=> 'No es pot obtenir la informació d\'autenticació del grup.',
	'CONV_ERROR_INCONSISTENT_GROUPS'	=> 'Incosistència detectada a la taula de grups a add_bots() - heu d\'afegir tots els grups especial si ho feu manualment.',
	'CONV_ERROR_INSERT_BOT'				=> 'No s\'ha pogut inserir el robot a la taula d\'usuaris.',
	'CONV_ERROR_INSERT_BOTGROUP'		=> 'No s\'ha pogut inserir el robot a la taula de robots.',
	'CONV_ERROR_INSERT_USER_GROUP'		=> 'No s\'ha pogut inserir l\'usuari a la taula de grups d\'usuaris.',
	'CONV_ERROR_MESSAGE_PARSER'			=> 'Error del programa d\'anàlisi del missatge',
	'CONV_ERROR_NO_AVATAR_PATH'			=> 'Nota al desenvolupador: heu d\'especificar $convertor[\'avatar_path\'] per fer servir %s.',
	'CONV_ERROR_NO_FORUM_PATH'			=> 'No s\'ha especificat la ruta relativa al fòrum original.',
	'CONV_ERROR_NO_GALLERY_PATH'		=> 'Nota al desenvolupador: heu d\'especificar $convertor[\'avatar_gallery_path\'] per fer servir %s.',
	'CONV_ERROR_NO_GROUP'				=> 'Group "%1$s" could not be found in %2$s.',
	'CONV_ERROR_NO_RANKS_PATH'			=> 'Nota al desenvolupador: heu d\'especificar $convertor[\'ranks_path\'] per fer servir %s.',
	'CONV_ERROR_NO_SMILIES_PATH'		=> 'Nota al desenvolupador: heu d\'especificar $convertor[\'smilies_path\'] per fer servir %s.',
	'CONV_ERROR_NO_UPLOAD_DIR'			=> 'Nota al desenvolupador: heu d\'especificar $convertor[\'upload_path\'] per fer servir %s.',
	'CONV_ERROR_PERM_SETTING'			=> 'No es pot inserir/actualitzar el paràmetre de permisos.',
	'CONV_ERROR_PM_COUNT'				=> 'No es pot seleccionar compte de la carpeta pm.',
	'CONV_ERROR_REPLACE_CATEGORY'		=> 'No es pot inserir un nou fòrum que reemplace la categoria antiga.',
	'CONV_ERROR_REPLACE_FORUM'			=> 'No es pot inserir un nou fòrum reemplaçant l\'antic.',
	'CONV_ERROR_USER_ACCESS'			=> 'No es pot obtenir la informació d\'autenticació de l\'usuari.',
	'CONV_ERROR_WRONG_GROUP'			=> 'Grup erroni "%1$s" definit a %2$s.',
	'CONV_OPTIONS_BODY'					=> 'Aquesta pàgina recull les dades necessàries per accedir al fòrum instal·lat. Introduïu els detalls de la base de la base de dades; el conversor no canviarà res a la base de dades que especifiqueu a continuació. El fòrum instal·lat es desactivarà per permetre una correcta conversió.',
	'CONV_SAVED_MESSAGES'				=> 'Missatges desats',

	'COULD_NOT_COPY'			=> 'No es pot copiar el fitxer <strong>%1$s</strong> a <strong>%2$s</strong><br /><br />Comproveu que el directori de destinació existeix i té permisos d\'escriptura pel servidor web.',
	'COULD_NOT_FIND_PATH'		=> 'No s\'ha pogut trobar la ruta al fòrum instal·lat. Comproveu els paràmetres i proveu novament.<br />» La ruta especificada ha estat %s.',

	'DBMS'						=> 'Tipus de base de dades',
	'DB_CONFIG'					=> 'Configuració de la base de dades',
	'DB_CONNECTION'				=> 'Connexió a la base de dades',
	'DB_ERR_INSERT'				=> 'Error mentre es processava la petició<code>INSERT</code>.',
	'DB_ERR_LAST'				=> 'Error mentre es processava <var>query_last</var>.',
	'DB_ERR_QUERY_FIRST'		=> 'Error mentre s\'executava <var>query_first</var>.',
	'DB_ERR_QUERY_FIRST_TABLE'	=> 'Error mentre s\'executava <var>query_first</var>, %s ("%s").',
	'DB_ERR_SELECT'				=> 'Error executant la petició <code>SELECT</code>.',
	'DB_HOST'					=> 'Nom de l\'ordinador amfitrió o DSN per a la base de dades',
	'DB_HOST_EXPLAIN'			=> 'El DSN està esperant per la Data Source Name i només és rellevant per instal·lacions ODBC.',
	'DB_NAME'					=> 'Nom de la base de dades',
	'DB_PASSWORD'				=> 'Contrasenya de la base de dades',
	'DB_PORT'					=> 'Port del servidor de la base de dades',
	'DB_PORT_EXPLAIN'			=> 'Deixeu això en blanc a no ser que sapieu que el servidor funciona amb un port no estàndard.',
	'DB_USERNAME'				=> 'Nom d\'usuari de la base de dades',
	'DB_TEST'					=> 'Comprova connexió',
	'DEFAULT_LANG'				=> 'Idioma per defecte del fòrum',
	'DEFAULT_PREFIX_IS'			=> 'El conversor no ha pogut trobar taules amb el prefix especificat. Assegureu-vos que heu introduït els paràmetres correctes per al fòrum que voleu convertir. El prefix per defecte %1$s és <strong>%2$s</strong>.',
	'DEV_NO_TEST_FILE'			=> 'No s\'ha especificat cap valor per a la variable test_file al conversor. Si sou usuaris d\'aquest conversor, no haurieu de veure aquest error. Si us plau, informeu d\'aquest error a l\'autor del conversor. Si sou l\'autor del conversor, haureu d\'especificar el nom del fitxer que existeix al fòrum font per poder verificar la ruta.',
	'DIRECTORIES_AND_FILES'		=> 'Configuració del directori i del fitxer',
	'DISABLE_KEYS'				=> 'S\'estan inhabilitant tecles',
	'DLL_FIREBIRD'				=> 'Firebird',
	'DLL_FTP'					=> 'Suport remot FTP [ Instal·lació ]',
	'DLL_GD'					=> 'Suport gràfics GD [ Confirmació visual ]',
	'DLL_MBSTRING'				=> 'Suport caràcter Multi-byte',
	'DLL_MSSQL'					=> 'MSSQL Server 2000+',
	'DLL_MSSQL_ODBC'			=> 'MSSQL Server 2000+ via ODBC',
	'DLL_MYSQL'					=> 'MySQL',
	'DLL_MYSQLI'				=> 'MySQL amb extensió MySQLi',
	'DLL_ORACLE'				=> 'Oracle',
	'DLL_POSTGRES'				=> 'PostgreSQL 7.x/8.x',
	'DLL_SQLITE'				=> 'SQLite',
	'DLL_XML'					=> 'Suport XML [ Jabber ]',
	'DLL_ZLIB'					=> 'Suport compressió zlib [ gz, .tar.gz, .zip ]',
	'DL_CONFIG'					=> 'Configuració descàrrega',
	'DL_CONFIG_EXPLAIN'			=> 'Heu de descarregar el fitxer config.php al vostre ordinador. Després haureu de carregar manualment el fitxer, reemplaçant qualsevol fitxer ja existent al directori base de phpBB 3.0. Recordeu que el fitxer ha d\'estar en format ASCII. Quan hagueu carregat el fitxer cliqueu a “Fet” per passar al següent punt.',
	'DL_DOWNLOAD'				=> 'Descarregat',
	'DONE'						=> 'Fet',

	'ENABLE_KEYS'				=> 'S\'està tornant a habilitar les tecles. Això pot durar un temps.',

	'FILES_OPTIONAL'			=> 'Fitxers i directoris opcionals',
	'FILES_OPTIONAL_EXPLAIN'	=> '<strong>Opcional</strong> - Aquests fitxers, directoris o paràmetres de permisos no es requereixen. El sistema d\'instal·lació provarà amb diferents mètodes per crear-los si no existeixen o si no s\'hi pot escriure. En tot cas, si ho especifiqueu potser que la instal·lació siga més ràpida.',
	'FILES_REQUIRED'			=> 'Fitxers i directoris',
	'FILES_REQUIRED_EXPLAIN'	=> '<strong>Requerit</strong> - Per tal que el phpBB funcione correctament, ha de poder accedir o escriure a alguns fitxers o directoris. Si veieu “No s\'ha trobat” haureu de crear el fitxer o el directori. Si veieu “No s\'hi pot escriure” haureu de modificar els permisos del fitxer o el directori per tal de permetre a phpBB escriure allà.',
	'FILLING_TABLE'				=> 'S\'està omplint la taula <strong>%s</strong>',
	'FILLING_TABLES'			=> 'S\'estan omplint les taules',
	'FINAL_STEP'				=> 'S\'està processant el darrer pas',
	'FORUM_ADDRESS'				=> 'Adreça del fòrum',
	'FORUM_ADDRESS_EXPLAIN'		=> 'Aquesta és la URL del vostre fòrum actual, per exemple <samp>http://www.example.com/phpBB2/</samp>. Si s\'introdueix una adreça ací i no es deixen els camps buits, es reemplaçarà per la nova instal·lació sense els missatges, signatures i missatges privats..',
	'FORUM_PATH'				=> 'Ruta al fòrum',
	'FORUM_PATH_EXPLAIN'		=> 'Aquesta és la ruta <strong>relativa</strong> al disc del teu anterior fòrum des del directori <strong>arrel d\'aquesta instal·lació phpBB</strong>.',
	'FOUND'						=> 'Trobat',
	'FTP_CONFIG'				=> 'Transferir configuració per FTP',
	'FTP_CONFIG_EXPLAIN'		=> 'phpBB ha detectat la presència d\'un mòdul FTP al servidor. Podeu provar a instal·lar el config.php mitjançant aquest medi. És necessari que suministreu la informació dels camps següents (l\'usuari i la clau són els del servidor).',
	'FTP_PATH'					=> 'Ruta FTP',
	'FTP_PATH_EXPLAIN'			=> 'Aquesta és la ruta des del directori arrel al phpBB, p.e. <samp>public_html/phpBB3/</samp>.',
	'FTP_UPLOAD'				=> 'Carrega',

	'GPL'						=> 'Llicència Pública General',

	'INITIAL_CONFIG'			=> 'Configuració bàsica',
	'INITIAL_CONFIG_EXPLAIN'	=> 'Ara que la instal·lació ha determinat que el servidor pot executar phpBB, heu de subministrar informació específica. Si no sabeu com connectar a la base de dades, contacteu amb el vostre proveïdor de hosting o visiteu el fòrum de suport phpBB <www.phpbb.cat>.',
	'INSTALL_CONGRATS'			=> 'Felicitats!',
	'INSTALL_CONGRATS_EXPLAIN'	=> '
		<p>Heu instal·lat phpBB %1$s. A partir d\'ací, podeu triar entre dues opcions per fer amb el nou fòrum instal·lat:</p>
		<h2>Convertir el fòrum existent a phpBB3</h2>
		<p>El Conversor Unificat de phpBB suporta la conversió de phpBB 2.0.x i altres sistemes a phpBB3. Si teniu un lloc (fòrum) que vulgueu convertir, <a href="%2$s">dirigiu-vos al conversor</a>.</p>
		<h2>Entrar al vostre nou fòrum phpBB3!</h2>
		<p>Fent clic al botó següent anireu al Panell de Control d\'Administració (PCA). Preneu un temps per examinar les diferents opcions disponibles. Recordeu que hi ha ajuda disponible en línia mitjançant la <a href="http://www.phpbb.com/support/documentation/3.0/">Documentació</a> i els<a href="http://www.phpbb.com/community/viewforum.php?f=46">fòrums de suport</a> (ambos en inglés). Podeu llegir també el document <a href="%3$s">Llegeix-me</a> per a més informació.</p><p><strong>Heu d\'esborrar el directori install per poder començar a fer servir el nou fòrum. Si la carpeta és present, només podreu entrar al PCA.</strong></p>',
	'INSTALL_INTRO'				=> 'Benvinguts a la Instal·lació',
// TODO: write some more introductions here
	'INSTALL_INTRO_BODY'		=> 'Amb aquesta opció, és possible instal·lar phpBB3 al servidor.</p><p>Per anar endavant, necessiteu els paràmetres de la base de dades. Si no els coneixeu, contacteu amb el vostre proveïdor de hosting per demanar-li-los. No podreu continuar la instal·lació sense aquests paràmetres. Necessiteu:</p>

	<ul>
		<li>El tipus de base de dades - la base de dades que fareu servir.</li>
		<li>El nom de servidor o DSN - l\'adreça del servidor.</li>
		<li>El port del servidor - (moltes vegades això no és necessari).</li>
		<li>El nom - El nom de la base de dades al servidor.</li>
		<li>Usuari i contrasenya - les dades per entrar a la base de dades.</li>
	</ul>

	<p><strong>Teniu en compte:</strong> Si instal·leu el fòrum fent servir SQLite, haureu d\'introduir la ruta completa al fitxer de la base de dades al camp DSN i deixar els camps d\'usuari i contrasenya en blanc. Per raons de seguretat, hauríeu d\'assegurar-vos que el fitxer de la base de dades no es troba a una carpeta accessible des de la pàgina web.</p>

	<p>phpBB3 suporta les següents bases de dades:</p>
	<ul>
		<li>MySQL 3.23 o superior (MySQLi supported)</li>
		<li>PostgreSQL 7.3+</li>
		<li>SQLite 2.8.2+</li>
		<li>Firebird 2.0+</li>
		<li>MS SQL Server 2000 o superior (directly or via ODBC)</li>
		<li>Oracle</li>
	</ul>
	
	<p>Només aquestes bases de dades suportades es mostraran al vostre servidor.',
	'INSTALL_INTRO_NEXT'		=> 'Per començar la instal·lació feu clic al botó següent.',
	'INSTALL_LOGIN'				=> 'Entrada',
	'INSTALL_NEXT'				=> 'Següent punt',
	'INSTALL_NEXT_FAIL'			=> 'Algunes proves han fallat i hauríeu de corregir aquests problemes abans de continuar amb el següent pas. No fer-ho suposaria una instal·lació incompleta.',
'INSTALL_NEXT_PASS'	=> 'Totes les proves bàsiques s\'han superat i podeu continuar amb el pas següent. Si heu canviat alguna cosa, podeu tornar a repetir les proves.',
	'INSTALL_PANEL'	=> 'Panell d\'instal·lació',
	'INSTALL_SEND_CONFIG'	=> 'phpBB no pot escriure la informació de configuració directament al fitxer config.php. Això pot ser degut a que el fitxer no existeix o no s\'hi pot escriure. A continuació es mostren diverses opcions.',
	'INSTALL_START'				=> 'Inicia la instal·lació',
	'INSTALL_TEST'				=> 'Comprova novament',
	'INST_ERR'					=> 'Error a la instal·lació',
		'INST_ERR_DB_CONNECT'	=> 'No s\'ha pogut connectar a la base de dades, comproveu el missatge d\'error que es mostra a continuació.',
	'INST_ERR_DB_FORUM_PATH'	=> 'La base de dades especificada es troba a dins de l\'arbre de carpetes del fòrum. Hauríeu de posar el fitxer a un lloc no accessible des de la web.',
	'INST_ERR_DB_NO_ERROR'	=> 'No s\'ha especificat el missatge d\'error.',
	'INST_ERR_DB_NO_MYSQLI'	=> 'La versió de MySQL instal·lada no és compatible amb l\'opció "MySQL amb extensions MySQLi" que vau seleccionar. Proveu amb "MySQL".',
	'INST_ERR_DB_NO_SQLITE'	=> 'La versió de l\'extensió SQLite que teniu instal·lada és molt antiga. S\'ha d\'actualitzar com a mínim a la versió 2.8.2.',
	'INST_ERR_DB_NO_ORACLE'	=> 'La versió d\'Oracle instal·lada a aquesta màquina requereix que configureu el paràmetre <var>NLS_CHARACTERSET</var> a <var>UTF8</var>. O bé actualitzar la versió a 9.2+ o canviar el paràmetre.',
	'INST_ERR_DB_NO_FIREBIRD'	=> 'La versió de Firebird instal·lada a aquesta màquina és antiga, actualitzeu a una versió 2.0 o superior.',
	'INST_ERR_DB_NO_FIREBIRD_PS'	=> 'La base de dades que especificada per a Firebird té una mida de pàgina inferior a 8192 i a d\'ésser 8192 com a mínim.',
	'INST_ERR_DB_NO_POSTGRES'	=> 'La base de dades especificada no està al format <var>UNICODE</var> o <var>UTF8</var>. Proveu amb una altra base de dades <var>UNICODE</var> o <var>UTF8</var>.',
	'INST_ERR_DB_NO_NAME'	=> 'No s\'ha especificat cap base de dades.',
	'INST_ERR_EMAIL_INVALID'	=> 'L\'adreça de correu especificada no és vàlida.',
	'INST_ERR_EMAIL_MISMATCH'	=> 'Les adreces de correu introduits no coincideixen.',
	'INST_ERR_FATAL'	=> 'Error fatal d\'instal·lació',
	'INST_ERR_FATAL_DB'	=> 'S\'ha produit un error fatal i irrecuperable a la base de dades. Això pot ser perquè l\'usuari especificat no té permisos per <code>CREAR TAULES</code> o <code>INSERIR</code>, etc. A continuació es mostra més informació. Contacteu amb el vostre proveïdor de hosting o aneu als fòrums de suport de phpBB.',
	'INST_ERR_FTP_PATH'	=> 'No s\'ha pogut modificar la carpeta introduïda, comproveu la ruta.',
	'INST_ERR_FTP_LOGIN'	=> 'No s\'ha pogut entrar al servidor FTP, comproveu l\'usuari i la contrasenya.',
	'INST_ERR_MISSING_DATA'	=> 'Tenés que llenar todos los campos en este bloque.',
	'INST_ERR_NO_DB'	=> 'No s\'ha pogut carregar el mòdul PHP per a la base de dades seleccionada.',
	'INST_ERR_PASSWORD_MISMATCH'	=> 'Les contrasenyes introduïdes no coincideixen.',
	'INST_ERR_PASSWORD_TOO_LONG'	=> 'La contrasenya introduïda és massa llarga. La mida màxima són 30 caràcters.',
	'INST_ERR_PASSWORD_TOO_SHORT'	=> 'La contrasenya introduïda és massa curta. La mida mínima són 5 caràcters.',
	'INST_ERR_PREFIX'	=> 'Ja existeixen taules amb el prefix especificat, proveu amb un altre.',
	'INST_ERR_PREFIX_INVALID'	=> 'El prefix per a la taula que heu especificat no és vàlid per a la vostra base de dades. Proveu amb un altre que no continga, per exemple, guions.',
	'INST_ERR_PREFIX_TOO_LONG'	=> 'El prefix per a la taula que heu introduït és massa larg. El màxim permès és %d caràcters.',
	'INST_ERR_USER_TOO_LONG'	=> 'El nom d\'usuari que heu introduït és massa llarg. El màxim permès són 20 caràcters.',
	'INST_ERR_USER_TOO_SHORT'	=> 'El nom d\'usuari que heu introduït és massa short. El mínim permès són 3 caràcters.',
	'INVALID_PRIMARY_KEY'		=> 'Clau primària no vàlida: %s',

	'LONG_SCRIPT_EXECUTION'		=> 'Això pot trigar un temps... No atureu l\'escript.',

	// mbstring
	'MBSTRING_CHECK'						=> 'Comprovació de l\'extensió <samp>mbstring</samp>',
	'MBSTRING_CHECK_EXPLAIN'				=> '<strong>Requerit</strong> - <samp>mbstring</samp> és una extensió PHP que proveeix funcions amb cadenes multibyte. Algunes característiques d\'mbstring no són compatibles amb phpBB i s\'inhabilitaran.',
	'MBSTRING_FUNC_OVERLOAD'	=> 'Funcions de sobrecarga',
	'MBSTRING_FUNC_OVERLOAD_EXPLAIN'	=> '<var>mbstring.func_overload</var> ha de trobar-se entre 0 i 4.',
	'MBSTRING_ENCODING_TRANSLATION'	=> 'Codificació transparent de caràcters',
	'MBSTRING_ENCODING_TRANSLATION_EXPLAIN'	=> '<var>mbstring.encoding_translation</var> ha de tindre un valor de 0.',
	'MBSTRING_HTTP_INPUT'	=> 'Conversió de caràcteres d\'entrada HTML',
	'MBSTRING_HTTP_INPUT_EXPLAIN'	=> '<var>mbstring.http_input</var> ha d\'ésser <samp>pass</samp>.',
	'MBSTRING_HTTP_OUTPUT'	=> 'Conversió de caràcteres d\'eixida HTML',
	'MBSTRING_HTTP_OUTPUT_EXPLAIN'	=> '<var>mbstring.http_output</var> ha d\'ésser <samp>pass</samp>.',
	'MAKE_FOLDER_WRITABLE'	=> 'Assegureu-vos que la carpeta existeix i que teniu els permisos necessaris. Després proveu novament:<br />»<strong>%s</strong>.',
	'MAKE_FOLDERS_WRITABLE'	=> 'Assegureu-vos que les carpetes existeixen i que teniu els permisos necessaris. Després proveu novament:<br />»<strong>%s</strong>.',
	'NAMING_CONFLICT'	=> 'Conflicte de noms: %s i %s són àlies<br /><br />%s',
	'NEXT_STEP'					=> 'Vés al següent pas',
	'NOT_FOUND'					=> 'No s\'ha pogut trobar',
	'NOT_UNDERSTAND'	=> 'No es pot entendre %s #%d, taula %s ("%s")',
	'NO_CONVERTORS'	=> 'No hi ha cap conversor disponible per emprar.',
	'NO_CONVERT_SPECIFIED'		=> 'No s\'ha especificat el conversor.',
	'NO_LOCATION'				=> 'No es pot determinar la ubicació. Si esteu segur que Imagemagick està instal·lat, haureu d\'especificar la ubicació més tard al Panell de Control d\'Administració (PCA).',
	'NO_TABLES_FOUND'			=> 'No s\'ha trobat cap taula.',
// TODO: Write some explanatory introduction text

	'OVERVIEW_BODY'					=> 'Benvinguts a phpBB3!<br /><br />phpBB és la solució de codi obert per a crear fòrums que més es fa servir a la xarxa. Com els seus predecessors, phpBB3 és molt complet, amigable i està recolzat per l\'equip de phpBB. phpBB3 millora sobremanera l\'anterior versió phpBB2 ja que afegeix tota una sèrie d\'accessoris que els mateixos usuaris demanaven i que no es trobaven disponibles a versions anteriors. Esperem que aquesta versió supere les vostres expectatives. <br /><br />El sistema d\'instal·lació us guiarà per instal·lar phpBB3, actualitzar un fòrum anterior així com convertir diferents sistemes de fòrum a phpBB3. Per a més informació us recomanem llegir <a href="../docs/INSTALL.html">la guia d\'instal·lació</a>.<br /><br />Per llegir la llicència de phpBB3 o aprendre més coses així com obtindre suport, seleccioneu les opcions corresponents al menú lateral. Per continuar, seleccioneu la pestanya corresponent.',

	'PCRE_UTF_SUPPORT'	=> 'Suport PCRE UTF-8',
	'PCRE_UTF_SUPPORT_EXPLAIN'	=> 'phpBB <strong>no</strong> funcionarà si la vostra instal·lació PHP no ha estat compilada amb suport per a UTF-8 a l\'extensió PCRE.',
	'PHP_GETIMAGESIZE_SUPPORT'	=> 'La funció PHP getimagesize() és disponible',
	'PHP_GETIMAGESIZE_SUPPORT_EXPLAIN'	=> '<strong>Requerit</strong> - Per tal que phpBB funcione correctament, la funció getimagesize ha trobar-se disponible.',
	'PHP_OPTIONAL_MODULE'			=> 'Mòduls opcionals',
	'PHP_OPTIONAL_MODULE_EXPLAIN'	=> '<strong>Opcional</strong> - Aquests mòduls o aplicacions són opcionals. Tot i així, si hi són disponibles permetran habilitar opcions extres.',
	'PHP_SUPPORTED_DB'				=> 'Bases de dades suportades',
	'PHP_SUPPORTED_DB_EXPLAIN'	=> '<strong>Requerit</strong> - Necessiteu suport com a mínim per a una base de dades compatible amb PHP. Si no es mostren els mòduls disponibles, hauríeu de contactar amb el vostre proveïdor de hosting o revisar la documentació PHP corresponent.',
	'PHP_REGISTER_GLOBALS'	=> 'Paràmetre PHP <var>register_globals</var> inhabilitat',
	'PHP_REGISTER_GLOBALS_EXPLAIN'	=> 'phpBB funcionarà encara que aquests paràmetres estiguen habilitats. Si és possible, es recomana inhabilitar register_globals per raons de seguretat.',
	'PHP_SAFE_MODE'					=> 'Mode segur',
	'PHP_SETTINGS'					=> 'Versió i configuració de PHP',
	'PHP_SETTINGS_EXPLAIN'	=> '<strong>Requerit</strong> - Necessiteu com a mínim la versió 4.3.3 de PHP per poder instal·lar phpBB. Si <var>safe mode</var> es mostra sota la instal·lació PHP, significa que s\'està executant en aqueix mode. Això suposarà que hi haurà algunes limitacions.',
	'PHP_URL_FOPEN_SUPPORT'	=> 'Paràmetre PHP <var>allow_url_fopen</var> es troba habilitat',
	'PHP_URL_FOPEN_SUPPORT_EXPLAIN'	=> '<strong>Opcional</strong> - Aquest paràmetre és opcional. Tot i així, algunes funcions com l\'avatar no funcionaran correctament si no hi és present.',
	'PHP_VERSION_REQD'				=> 'Versió PHP >= 4.3.3',
	'POST_ID'						=> 'ID del missatge',
	'PREFIX_FOUND'	=> 'La revisió de les taules ha trobat una instal·lació vàlida fent servir com a prefixe de taula <strong>%s</strong>.',
	'PREPROCESS_STEP'	=> 'S\'estan executant funcions/consultes prèvies',
	'PRE_CONVERT_COMPLETE'	=> 'Tots els passos necessaris per començar la conversió s\'han completat. Ara podreu començar el procés de conversió. Teniu en compte que haureu de fer i ajustar alguns passos manualment. Després de la conversió, haureu de comprovar els permisos assignats, tornar a construir l\'índex de cerca i, si és necessari, assegurar-vos que els fitxers es copien correctament (com avatars i smilies).',
	'PROCESS_LAST'					=> 'S\'estan processant els darrers procesos',

	'REFRESH_PAGE'				=> 'Torneu a carregar la pàgina per continuar la conversió',
	'REFRESH_PAGE_EXPLAIN'	=> 'Si trieu Sí, el conversor refrescara la pàgina per continuar la conversió després d\'haver finalitzat el pas. Si aquesta és la vostra primera conversió de prova i voleu determinar errors per avançat, us recomanem que seleccioneu No.',
//	'REQUIRED'					=> 'Es requereix',
	'REQUIREMENTS_TITLE'	=> 'Compatibilitat de la instal·lació',
	'REQUIREMENTS_EXPLAIN'	=> 'Abans de continuar amb la instal·lació, phpBB durà a terme algunes proves de configuració i fitxers al vostre servidor per tal d\'assegurar que es pot instal·lar i executar. Llegiu els resultats de les proves per tal de comprovar que tot és correcte.',
	'RETRY_WRITE'	=> 'Torna a provar escriure configuració',
	'RETRY_WRITE_EXPLAIN'	=> 'Si voleu podeu canviar els permisos del fitxer config.hph per tal de permetre a phpBB sobreescriure-lo. En aquest cas, haureu de fer clic a Endarrere i provar de nou. Recordeu que haureu de restaurar els permisos del config.php una vegada finalitzada la instal·lació.',

	'SCRIPT_PATH'				=> 'Ruta a l\'script',
	'SCRIPT_PATH_EXPLAIN'		=> 'La ruta on es troba el phpBB relativa al nom del domini, p.e. <samp>/phpBB3</samp>.',
	'SELECT_LANG'				=> 'Seleccioneu una llengua',
	'SERVER_CONFIG'				=> 'Configuració del servidor',
	'SEARCH_INDEX_UNCONVERTED'	=> 'L\'índex de cerca no s\'ha convertit',
	'SEARCH_INDEX_UNCONVERTED_EXPLAIN'	=> 'No s\'ha convertit l\'anterior índex de cerca. Les cerques donaran un resultat buit. Per crear nous índex de cerca haureu d\'anar al Panell de Control d\'Administració, a la pestanya manteniment i després a Índex de Cerca al submenú.',
	'SOFTWARE'	=> 'Programari del lloc',
	'SPECIFY_OPTIONS'	=> 'Especifiqueu opcions de conversió',
	'STAGE_ADMINISTRATOR'		=> 'Detalls de l\'administrador',
	'STAGE_ADVANCED'			=> 'Opcions avançades',
	'STAGE_ADVANCED_EXPLAIN'	=> 'Els paràmetres d\'aquesta pàgina només són necessaris si voleu alguna cosa diferent que no siga les que ja hi ha per omissió. Si no esteu segur, passeu a la pàgina següent ja que aquests paràmetres els podeu canviar més tard al Panell de Control d\'Adminstració',
	'STAGE_CONFIG_FILE'			=> 'Fitxer de configuració',
	'STAGE_CREATE_TABLE'		=> 'Crea taules de la base de dades',
	'STAGE_CREATE_TABLE_EXPLAIN'	=> 'S\'han creat i omplit amb dades les taules en la base de dades que es fan servir per phpBB 3.0. Continueu amb el següent pas per finalitzar la instal·lació de phpBB 3.0.',
	'STAGE_DATABASE'			=> 'Paràmetres de la base de dades',
	'STAGE_FINAL'				=> 'Etapa final',
	'STAGE_INTRO'				=> 'Introducció',
	'STAGE_IN_PROGRESS'			=> 'Conversió en progrés',
	'STAGE_REQUIREMENTS'		=> 'Requisits',
	'STAGE_SETTINGS'			=> 'Paràmetres',
	'STARTING_CONVERT'			=> 'S\'està començant el procés de conversió',
	'STEP_PERCENT_COMPLETED'	=> 'Pas <strong>%d</strong> de <strong>%d</strong>',
	'SUB_INTRO'					=> 'Introducció',
	'SUB_LICENSE'				=> 'Llicència',
	'SUB_SUPPORT'				=> 'Suport',
	'SUCCESSFUL_CONNECT'		=> 'S\'ha connectat',
// TODO: Write some text on obtaining support
	'SUPPORT_BODY'            => 'Es proveirà suport complet per a l\'actual edició estable de phpBB3, sense càrrec. Això inclou:</p><ul><li>instal·lació</li><li>configuració</li><li>qüestions tècniques</li><li>problemes relacionats amb errors potencials al programari</li><li>actualització d\'edicions RC a la darrera versió estable</li><li>convertir phpBB 2.0.x a phpBB3</li><li>convertir altre programari de fòrums a phpBB3 (mireu <a href="http://www.phpbb.com/community/viewforum.php?f=65">Conversors de Fòrums</a>)</li></ul><p>Es recomana als usuaris que encara facen servir versions beta de phpBB3 que actualitzen a la darrera versió estable.</p><h2>MODs / Estils</h2><p>Per problemes relatius als MODs, dirigiu-vos al <a href="http://www.phpbb.com/community/viewforum.php?f=81">Fòrum de Modificacions</a> adequat.<br />Per problemes relatius a estils, plantilles i paquets d\'imatges, dirigiu-vos al <a href="http://www.phpbb.com/community/viewforum.php?f=80">Fòrum d\'Estils</a> adequat.<br /><br />Si teniu qüestions sobre un paquet especific, escriviu un tema dedicat al paquet concret.</p><h2>Obtindre suport</h2><p><a href="http://www.phpbb.com/community/viewtopic.php?f=14&amp;t=571070">Paquet de Benvinguda de phpBB</a><br /><a href="http://www.phpbb.com/support/">Secció Suport</a><br /><a href="http://www.phpbb.com/support/documentation/3.0/quickstart/">Guia ràpida d\'inici</a><br /><br />Per assegurar-vos que esteu actualitzats amb les darreres notícies i edicions, podeu subscriure-vos a <a href="http://www.phpbb.com/support/">la nostra llista de correu</a>?<br /><br />',
	'SYNC_FORUMS'				=> 'S\'està començant el procés de sincronització de fòrums',
	'SYNC_POST_COUNT'			=> 'S\'esta sincronitzant contatge de comptes',
	'SYNC_POST_COUNT_ID'		=> 'S\'esta sincronitzant contatge de comptes des de <var>entry</var> %1$s fins %2$s.',
	'SYNC_TOPICS'				=> 'S\'està començant el procés de sincronització de temes',
	'SYNC_TOPIC_ID'				=> 'S\'estan sincronitzant temes des de <var>topic_id</var> %1$s fins %2$s.',

	'TABLES_MISSING'			=> 'No s\'han pogut trobar aquestes taules<br />» <strong>%s</strong>.',
	'TABLE_PREFIX'				=> 'Prefix per a les taules a la base de dades',
	'TABLE_PREFIX_SAME'			=> 'El prefix de la taula ha d\'ésser l\'únic que es farà servir pel programari des del qual esteu convertint.<br />» El prefix especificat va ser %s.',
	'TESTS_PASSED'				=> 'Tests superats',
	'TESTS_FAILED'				=> 'Tests no superats',

	'UNABLE_WRITE_LOCK'			=> 'No es pot escriure a un fitxer bloquejat.',
	'UNAVAILABLE'				=> 'No disponible',
	'UNWRITABLE'				=> 'No s\'hi pot escriure',
	'UPDATE_TOPICS_POSTED'		=> 'S\'està generant la informació dels temes publicats',
	'UPDATE_TOPICS_POSTED_ERR'	=> 'S\'ha produït un error mentre es generava la informació dels temes publicats. Podeu tornar a executar aquest pas des del PCA una vegada que la conversió estiga completa.',
	'VERIFY_OPTIONS'			=> 'S\'estan verificant les opcions de conversió',	
	'VERSION'					=> 'Versió',

	'WELCOME_INSTALL'			=> 'Benvinguts a la instal·lació de phpBB3',
	'WRITABLE'					=> 'S\'hi pot escriure',
));

// Updater
$lang = array_merge($lang, array(
	'ALL_FILES_UP_TO_DATE'	=> 'Tots els fitxers estan actualitzats a la darrera versió de phpBB. Ara podreu <a href="../ucp.php?mode=login">entrar al vostre fòrum</a> i comprovar que tot funciona correctament. No oblideu esborar, renombrar o moure la carpeta d\'instal·lació de l\'FTP.',
	'ARCHIVE_FILE'				=> 'Fitxer d\'origen dins del fitxer',

	'BACK'				=> 'Endarrere',
	'BINARY_FILE'		=> 'Fitxer binari',
	'BOT'				=> 'Aranya/Robot',

	'CHANGE_CLEAN_NAMES'			=> 'El mètode per comprovar noms d\'usuari que es repeteixen ha canviat. Hi ha alguns usuaris que tenen el mateix nom d\'usuari amb el nou mètode. Haureu d\'esborrar o canviar el nom d\'aquests usuaris per poder continuar.',
	'CHECK_FILES'					=> 'Comprova fitxers',
	'CHECK_FILES_AGAIN'				=> 'Torna a comprovar fitxers',
	'CHECK_FILES_EXPLAIN'			=> 'Al següent pas tots els fitxers es compararan amb els fitxers de l\'actualització - això pot trigar un temps si és la primera vegada que es fa.',
	'CHECK_FILES_UP_TO_DATE'	=> 'Segons la base de dades, la vostra versió es troba actualitzada. Podeu continuar amb la verificació de fitxers per assegurar-vos que realment tots es troben actualitzats a la darrera versió de phpBB.',
	'CHECK_UPDATE_DATABASE'			=> 'Continua procés d\'actualització',
	'COLLECTED_INFORMATION'			=> 'Informació als fitxers arreplegats',
	'COLLECTED_INFORMATION_EXPLAIN'	=> 'La llista següent mostra informació sobre els fitxers que necessiten actualitzar-se. Llegiu la informació referent a cada bloc d\'estat per entendre què signifiquen i que s\'ha de fer per procedir a la seua actualització.',
	'COLLECTING_FILE_DIFFS'			=> 'S\'estan revisant les diferències als fitxers',	
	'COMPLETE_LOGIN_TO_BOARD'	=> 'Ara podeu <a href="../ucp.php?mode=login">entrar al vostre lloc</a> i comprovar que tot funciona correctament. y verificar si todo funciona bien. No oblideu esborar, renombrar o moure la carpeta d\'instal·lació de l\'FTP.',
	'CONTINUE_UPDATE_NOW'	=> 'Continua ara el procés d\'instal·lació',
	'CONTINUE_UPDATE_NOW'			=> 'Continua ara el procés d\'actualització',
	'CURRENT_FILE'					=> 'Fitxer original actual',
	'CURRENT_VERSION'				=> 'Versió actual',

	'DATABASE_TYPE'						=> 'Tipus de base de dades',
	'DATABASE_UPDATE_INFO_OLD'			=> 'El fitxer per actualitzar la base de dades que es troba a dins del directori d\'instal·lació està desfasat. Assegureu-vos que heu carregat la versió correcta del fitxer.',
	'DELETE_USER_REMOVE'				=> 'Suprimeix usuari i esborra els seus missatges',
	'DELETE_USER_RETAIN'				=> 'Suprimeix usuari però manté els seus missatges',
	'DESTINATION'						=> 'Fitxer de destinació',
	'DIFF_INLINE'						=> 'En línia',
	'DIFF_RAW'							=> 'Diff Raw unificat',
	'DIFF_SEP_EXPLAIN'					=> 'Final del fitxer actual / Principi del nou fitxer actualitzat',
	'DIFF_SIDE_BY_SIDE'					=> 'De banda a banda',
	'DIFF_UNIFIED'						=> 'Diff unificat',
	'DO_NOT_UPDATE'						=> 'No actualitzes aquest fitxer',
	'DONE'								=> 'Fet',
	'DOWNLOAD'							=> 'Desa',
	'DOWNLOAD_AS'						=> 'Anomena i desa...',
	'DOWNLOAD_UPDATE_METHOD'			=> 'Descarrega arxiu de fitxers modificats',
	'DOWNLOAD_UPDATE_METHOD_EXPLAIN'	=> 'Una vegada descarregat, haureu de desempaquetar el fitxer. Trobareu a dins els fitxers modificats que haureu de carregar al directori arrel de phpBB. Una vegada carregats, comrpoveu els fitxers novament amb el botó corresponent.',

	'ERROR'			=> 'Error',
	'EDIT_USERNAME'	=> 'Edita nom d\'usuari',

	'FILE_ALREADY_UP_TO_DATE'		=> 'El fitxer ja està actualitzat.',
	'FILE_DIFF_NOT_ALLOWED'			=> 'No és permés aplicar diff al fitxer.',
	'FILE_USED'						=> 'Informació que es fa servir',			// Single file
	'FILES_CONFLICT'				=> 'Fitxers en conflicte',
	'FILES_CONFLICT_EXPLAIN'	=> 'Els següents fitxers han estat modificats i no coincideixen amb els fitxers originals de l\'antiga versió. phpBB ha determinat que aquests fitxers crearan conflictes. Haureu de provar a resoldre els problemes manualment o continuar la instal·lació decidint el millor mètode d\'integració. Si deicidiu resoldre els problemes manualment, haureu de verificar el resultat novament després de la modificació. També podeu decidir un mètode d\'integració amb cada fitxer per separat. El primer donarà com a resultat un fitxer a on les lńies conflictives de l\'antic fitxer es perdran, l\'altre donarà com a resultat perdre els canvis al nou fitxer.',
	'FILES_MODIFIED'				=> 'Fitxers modificats',
	'FILES_MODIFIED_EXPLAIN'	=> 'Els següents fitxers han estat modificats i no coincideixen amb els fitxers originals de l\'antiga versió. Les modificacions s\'integraran als fitxers actualitzats.',
	'FILES_NEW'						=> 'Fitxers nous',
	'FILES_NEW_EXPLAIN'	=> 'Els següents fitxers no existeixen a la instal·lació i s\'afegiran.',
	'FILES_NEW_CONFLICT'	=> 'Nous fitxers en conflicte',
	'FILES_NEW_CONFLICT_EXPLAIN'	=> 'Els següents fitxers són nous de la darrera conversió, però s\'ha comprovat que hi ha un fitxer amb el mateix nom a la mateixa ubicació. El fitxer es sobreescriurà per un de nou.',
	'FILES_NOT_MODIFIED'	=> 'Fitxers sense modificació',
	'FILES_NOT_MODIFIED_EXPLAIN'	=> 'Els següents fitxers no estan modificats i coincideixen amb els fitxers originals de phpBB3 per a la versió a la qual s\'actualitza',

	'FILES_UP_TO_DATE'				=> 'Fitxers que ja s\'han actualitzat',
	'FILES_UP_TO_DATE_EXPLAIN'	=> 'Els següents fitxers ja han estat actualitzats.',
	'FTP_SETTINGS'					=> 'Paràmetres FTP',
	'FTP_UPDATE_METHOD'				=> 'Càrrega per FTP',

	'INCOMPATIBLE_UPDATE_FILES'	=> 'Els fitxers actualitzats trobats són incompatibles amb la versió instal·lada. La versió instal·lada és %1$s i el fitxer actualitzat és per a phpBB %2$s a %3$s.',
	'INCOMPLETE_UPDATE_FILES'	=> 'Els fitxers actualitzats es troben incomplets.',
	'INLINE_UPDATE_SUCCESSFUL'	=> 'S\'ha actualitzat la base de dades. Ara podreu continuar amb el procés d\'actualització.',

	'KEEP_OLD_NAME'		=> 'Manté el nom d\'usuari',

	'LATEST_VERSION'		=> 'Darrera versió',
	'LINE'					=> 'Línia',
	'LINE_ADDED'			=> 'Afegit',
	'LINE_MODIFIED'			=> 'Modificat',
	'LINE_REMOVED'			=> 'Suprimit',
	'LINE_UNMODIFIED'		=> 'No modificat',
	'LOGIN_UPDATE_EXPLAIN'	=> 'Per actualitzar la instal·lació, abans heu d\'entrar.',

	'MAPPING_FILE_STRUCTURE'	=> 'Per a facilitar la càrrega, ací teniu les ubicacions dels fitxers que mapeen la instal·lació de phpBB.',

	'MERGE_MODIFICATIONS_OPTION'	=> 'Uneix modificacions',

	'MERGE_NO_MERGE_NEW_OPTION'	=> 'No fusiones - fes servir un nou fitxer',
	'MERGE_NO_MERGE_MOD_OPTION'	=> 'No fusiones - fes servir el fitxer instal·lat actualment',
	'MERGE_MOD_FILE_OPTION'	=> 'Integra les diferències i fes servir el codi modificat al bloc conflictiu',
	'MERGE_NEW_FILE_OPTION'	=> 'Integra les diferències i fes servir el codi del nou fitxer al bloc conflictiu',
	'MERGE_SELECT_ERROR'		=> 'No s\'han seleccionat correctament els mètodes d\'integració dels fitxers.',
	'MERGING_FILES'				=> 'S\'estan fusionant diferències',
	'MERGING_FILES_EXPLAIN'		=> 'S\'estan reunint els canvis finals del fitxer.<br /><br />Espereu mentre es completen les operacions als fitxers modificats.',

	'NEW_FILE'						=> 'Nou fitxer actualitzat',
	'NEW_USERNAME'					=> 'Nou nom d\'usuari',
	'NO_AUTH_UPDATE'				=> 'Actualització no autoritzada',
	'NO_ERRORS'						=> 'Sense errors',
	'NO_UPDATE_FILES'	=> 'Els següents fitxers no s\'han actualitzat',
	'NO_UPDATE_FILES_EXPLAIN'	=> 'Els següents fitxers són nous o modificats per no es poden trobar a la carpeta on s\'hi troben normalment. Aquest llistat conté fitxers en altres carpetes diferents de language/ o styles/ que potser heu modificat. L\'actualització serà incompleta.',
	'NO_UPDATE_FILES_OUTDATED'	=> 'No s\'ha trobat una carpeta vàlida d\'actualització. Assegureu-vos que heu carregat tots els fitxers a l\'FTP.<br /><br />La instal·lació <strong>no</strong> està actualitzada. Hi ha actualitzacions disponibles per a aquesta versió de phpBB %1$s. Visiteu <a href="http://www.phpbb.com/downloads/" rel="external">http://www.phpbb.com/downloads/</a> per descarregar el paquet adequat per tal de poder actualitzar de la versió %2$s a la versió %3$s.',
	'NO_UPDATE_FILES_UP_TO_DATE'	=> 'La versió es troba actualitzada. No cal executar cap eina d\'actualització. Si voleu verificar la integritat dels fitxers, assegureu-vos d\'haver carregat els fitxers actualitzats correctes.',
	'NO_UPDATE_INFO'	=> 'No s\'ha pogut trobar informació d\'actualització de fitxers.',
	'NO_UPDATES_REQUIRED'			=> 'No es requereixen actualitzacions',
	'NO_VISIBLE_CHANGES'			=> 'No hi ha canvis visibles',
	'NOTICE'						=> 'Avís',
	'NUM_CONFLICTS'					=> 'Nombre de conflictes',
	'NUMBER_OF_FILES_COLLECTED'		=> 'Hi ha diferències a un total de %1$d de %2$d fitxers obtinguts.<br />Espereu mentre s\'obtenen tots els fitxers.',

	'OLD_UPDATE_FILES'	=> 'Els fitxers actualitzats no tenen la data correcta. Els que s\'han trobat són per actualitzar de phpBB %1$s a phpBB %2$s però la darrera versió de phpBB és %3$s.',

	'PACKAGE_UPDATES_TO'				=> 'Aquest paquet informàtic actualitza a la versió',	
	'PERFORM_DATABASE_UPDATE'	=> 'Executa actualització de la base de dades',
	'PERFORM_DATABASE_UPDATE_EXPLAIN'	=> 'A continuació podeu trobar un enllaç a l\'script d\'actualització de la base de dades. Aquest script necessita executar-se a banda ja que no s\'ha d\'actualitzar la base de dades mentre s\'està a dins del fòrum. L\'actualització de la base de dades pot trigar un temps, no atureu l\'execució encara que semble bloquejada. Després de l\'actualització podreu continuar amb el següent pas.',
	'PREVIOUS_VERSION'					=> 'Versió anterior',
	'PROGRESS'							=> 'Progrés',

	'RESULT'					=> 'Resultat',
	'RUN_DATABASE_SCRIPT'		=> 'Actualitza ara la base de dades',

	'SELECT_DIFF_MODE'			=> 'Selecciona el mode diff',
	'SELECT_DOWNLOAD_FORMAT'	=> 'Selecciona format del fitxer per descarregar',
	'SELECT_FTP_SETTINGS'		=> 'Selecciona paràmetres FTP',
	'SHOW_DIFF_CONFLICT'		=> 'Mostra les diferències/conflictes',
	'SHOW_DIFF_FINAL'			=> 'Mostra el fitxer resultant',
	'SHOW_DIFF_MODIFIED'		=> 'Mostra les diferències unides',
	'SHOW_DIFF_NEW'				=> 'Mostra el contingut del fitxer',
	'SHOW_DIFF_NEW_CONFLICT'	=> 'Mostra les diferències',
	'SHOW_DIFF_NOT_MODIFIED'	=> 'Mostra les diferències',
	'SOME_QUERIES_FAILED'	=> 'Han fallat algunes consultes. A continuació es mostren els errors.',
	'SQL'	=> 'SQL',
	'SQL_FAILURE_EXPLAIN'	=> 'Això probablement no siga res per què amoïnar-se, l\'actualització continuarà. Si no es pot completar, haureu de visitar els fòrums de phpbb. Visiteu <a href="../docs/README.html">Llegeix-me</a> per als detalls de com obtindre ajuda.',
	'STAGE_FILE_CHECK'	=> 'Verifica fitxers',
	'STAGE_UPDATE_DB'			=> 'Actualitza la base de dades',
	'STAGE_UPDATE_FILES'		=> 'Actualitza els fitxers',
	'STAGE_VERSION_CHECK'		=> 'Comprovació de la versió',
	'STATUS_CONFLICT'	=> 'El fitxer modificat provoca conflictes',
	'STATUS_MODIFIED'			=> 'Fitxer modificat',
	'STATUS_NEW'				=> 'Nou fitxer',
	'STATUS_NEW_CONFLICT'		=> 'Nou fitxer conflictiu',
	'STATUS_NOT_MODIFIED'		=> 'Fitxer no modificat',
	'STATUS_UP_TO_DATE'			=> 'Fitxer ja actualitzat',

	'TOGGLE_DISPLAY'			=> 'Mostra/Amaga llista de fitxers',

	'UPDATE_COMPLETED'				=> 'S\'ha completat l\'actualització',
	'UPDATE_DATABASE'				=> 'Actualitza la base de dades',
	'UPDATE_DATABASE_EXPLAIN'		=> 'Al següent pas s\'actualitzarà la base de dades.',
	'UPDATE_DATABASE_SCHEMA'		=> 'S\'està actualitzant l\'esquema de la base de dades',
	'UPDATE_FILES'					=> 'Actualitza els fitxers',
	'UPDATE_FILES_NOTICE'	=> 'Assegureu-vos que heu actualitzat també els fitxers del sistema ja que aquest fitxer només actualitza la base de dades',
	'UPDATE_INSTALLATION'			=> 'Actualitza una instal·lació de phpBB',
	'UPDATE_INSTALLATION_EXPLAIN'	=> 'Amb aquesta opció és possible actualitzar la instal·lació de phpBB a la darrera versió.<br />Durant el procés es verificarà la integritat de tots els fitxers. Podreu revisar també les diferencies i fitxers abans d\'actualitzar.<br /><br /> L\'actualització de fitxers en si mateixa es pot fer de dues formes. Per una part l\automàtica i:</p><h2>Actualització Manual</h2> <p>Amb aquesta actualització només es descarrega el paquet amb els fitxers modificats personalitzat per assegurar que no es perden les modificacions.',
	'UPDATE_INSTRUCTIONS'			=> '

		<h1>Anunci de llançament</h1>

		<p>Llegiu l\'<a href="%1$s" title="%1$s">anunci de la publicació de la darrera versió</a> abans de continuar amb el procés d\'actualització, podeu trobar-hi informació útil. També hi ha enllaços per a la descàrrega i al registre de canvis.</p>

		<br />

		<h1>Com actualitzar una instal·lació</h1>

		<p>La forma recomanada per actualitzar una instal·lació consta només dels següents passos:</p>

		<ul style="margin-left: 20px; font-size: 1.1em;">
			<li>Visiteu la <a href="http://www.phpbb.com/downloads/" title="http://www.phpbb.com/downloads/">pàgina de descàrregues de phpBB.com</a> i descarregueu el fitxer "Paquet d\'actualització phpBB" corresponent.<br /><br /></li>
			<li>Extraieu el fitxe.<br /><br /></li>
			<li>Carregeu la carpeta install al directori arrel on es troba el fòrum a l\'FTP (on s\'hi troba el fitxer config.php).<br /><br /></li>
		</ul>

		<p>Una vegada carregat, el fòrum es posarà automàticament fora de línia per tal de poder començar amb la instal·lació.<br /><br />
		<strong><a href="%2$s" title="%2$s">Ara podreu començar amb el procés d\'actualització entrant a la direcció web de la carpeta install</a>.</strong><br />
		<br />
		Després el procés d\'instal·lació us guiarà a través del procés d\'actualització.
		</p>
	',
	'UPDATE_INSTRUCTIONS_INCOMPLETE'	=> '

		<h1>S\'ha detectat una actualització no completada</h1>

		<p>phpBB detected an incomplete automatic update. Please make sure you followed every step within the automatic update tool. Below you will find the link again, or go directly to your install directory.</p>
	',
	'UPDATE_METHOD'					=> 'Mètode d\'actualització',
	'UPDATE_METHOD_EXPLAIN'	=> 'Ara podeu triar el mètode d\actualització. Podeu fer servir la càrrega per FTP, que usu presentarà un formulari on haureu d\'introduir les dades del compte FTP. Amb aquest mètode es mouran els fitxers a una nova ubicació i es farà una còpia dels fitxers antics (amb extensió .bak). Si trieu descarregar els fitxers modificats, haureu de extreu-los i carregar-los després a la seua ubicació correcta a l\'FTP.',
	'UPDATE_REQUIRES_FILE'			=> 'L\'actualització requereix el següent fitxer: %s',
	'UPDATE_SUCCESS'	=> 'S\'ha actualitzat',
	'UPDATE_SUCCESS_EXPLAIN'	=> 'S\'han actualitzat tots els fitxers. El següent pas inclou la verificació dels fitxers novament per assegurar que l\'actualització ha estat correcta.',
	'UPDATE_VERSION_OPTIMIZE'		=> 'S\'està actualitzant la versió i optimitzant les taules',
	'UPDATING_DATA'					=> 'S\'estan actualitzant dades',
	'UPDATING_TO_LATEST_STABLE'		=> 'S\'està actualitzant la base de dades a la darrera versió estable',
	'UPDATED_VERSION'				=> 'Versió actualitzada',
	'UPLOAD_METHOD'					=> 'Mètode de càrrega',

	'UPDATE_DB_SUCCESS'				=> 'S\'ha actualitzat la base de dades.',
	'USER_ACTIVE'					=> 'Usuari actiu',
	'USER_INACTIVE'					=> 'Usuari inactiu',

	'VERSION_CHECK'				=> 'Comprovació de la versió',
	'VERSION_CHECK_EXPLAIN'	=> 'Verifica si la versió actual de phpBB es troba actualitzada.',
	'VERSION_NOT_UP_TO_DATE'	=> 'La versió de phpBB no es troba actualitzada. Continueu amb el procés d\'instal·lació.',
	'VERSION_NOT_UP_TO_DATE_ACP'	=> 'La versió de phpBB no es troba actualitzada.<br />A continuació hi ha un enllaç a la publicació de la darrera versió així com les instruccions per dur-la a terme.',
	'VERSION_UP_TO_DATE'	=> 'La instal·lació es troba actualitzada, no hi ha actualitzacions disponibles per a la versió actual de phpBB. Tot i així, podeu executar una prova de validesa dels fitxers.',
	'VERSION_UP_TO_DATE_ACP'	=> 'La instal·lació es troba actualitzada, no hi ha actualitzacions disponibles per a la versió actual de phpBB. No cal actualitzar-la.',
	'VIEWING_FILE_CONTENTS'		=> 'S\'està veient els continguts del fitxer',
	'VIEWING_FILE_DIFF'			=> 'S\'està veient les diferències del fitxer',

	'WRONG_INFO_FILE_FORMAT'	=> 'Format de fitxer d\'informació erroni',
));

// Default database schema entries...
$lang = array_merge($lang, array(
	'CONFIG_BOARD_EMAIL_SIG'		=> 'Gràcies, l\'Equip',
	'CONFIG_SITE_DESC'				=> 'Text que descriga el vostre fòrum',
	'CONFIG_SITENAME'				=> 'elteudomini.com',

	'DEFAULT_INSTALL_POST'			=> 'Aquest és un missatge d\'exemple a la instal·lació del phpBB3. Podeu eliminar-lo si comproveu que funciona.',

	'EXT_GROUP_ARCHIVES'			=> 'Fitxers',
	'EXT_GROUP_DOCUMENTS'			=> 'Documents',
	'EXT_GROUP_DOWNLOADABLE_FILES'	=> 'Fitxers descarregables',
	'EXT_GROUP_FLASH_FILES'			=> 'Fitxers Flash',
	'EXT_GROUP_IMAGES'				=> 'Imatges',
	'EXT_GROUP_PLAIN_TEXT'			=> 'Text Pla',
	'EXT_GROUP_QUICKTIME_MEDIA'		=> 'Quicktime Media',
	'EXT_GROUP_REAL_MEDIA'			=> 'Real Media',
	'EXT_GROUP_WINDOWS_MEDIA'		=> 'Windows Media',

	'FORUMS_FIRST_CATEGORY'			=> 'Primera Categoria',
	'FORUMS_TEST_FORUM_DESC'		=> 'Això és un fòrum de prova.',
	'FORUMS_TEST_FORUM_TITLE'		=> 'Fòrum de prova 1',

	'RANKS_SITE_ADMIN_TITLE'		=> 'Administrador de la pàgina',
	'REPORT_WAREZ'					=> 'El missatge conté enllaços a programari il·legal o pirata.',
	'REPORT_SPAM'					=> 'El missatge reportat només té el propòsit de fer publicitat d\'alguna pàgina web o producte.',
	'REPORT_OFF_TOPIC'				=> 'El missatge reportat està fora de tema.',
	'REPORT_OTHER'					=> 'El missatge reportat no encaixa en cap altra categoria, feu servir el camp de més informació.',

	'SMILIES_ARROW'					=> 'Fletxa',
	'SMILIES_CONFUSED'				=> 'Confús',
	'SMILIES_COOL'					=> 'Fresc',
	'SMILIES_CRYING'				=> 'Plorant i molt trist',
	'SMILIES_EMARRASSED'			=> 'Avergonyit',
	'SMILIES_EVIL'					=> 'Diable o molt dolent',
	'SMILIES_EXCLAMATION'			=> 'Exclamació',
	'SMILIES_GEEK'					=> 'Geek',
	'SMILIES_IDEA'					=> 'Idea',
	'SMILIES_LAUGHING'				=> 'Rient',
	'SMILIES_MAD'					=> 'Boig',
	'SMILIES_MR_GREEN'				=> 'Mr. Verd',
	'SMILIES_NEUTRAL'				=> 'Neutral',
	'SMILIES_QUESTION'				=> 'Qüestió',
	'SMILIES_RAZZ'					=> 'Razz',
	'SMILIES_ROLLING_EYES'			=> 'Ulls rodant',
	'SMILIES_SAD'					=> 'Trist',
	'SMILIES_SHOCKED'				=> 'En shock',
	'SMILIES_SMILE'					=> 'Somriure',
	'SMILIES_SURPRISED'				=> 'Sorprès',
	'SMILIES_TWISTED_EVIL'			=> 'Diable doblat',
	'SMILIES_UBER_GEEK'				=> 'Boig',
	'SMILIES_VERY_HAPPY'			=> 'Molt feliç',
	'SMILIES_WINK'					=> 'Picada d\'ullet',

	'TOPICS_TOPIC_TITLE'			=> 'Benvinguts a phpBB3',
));

?>
