<?php
/**
*
* install [Occitan]
*
* @package language
* @version $Id : install.php,v 1.127 2007/10/12 18 :14 :15 acydburn Exp $
* @copyright (c) 2005 phpBB Group
* @license http://opensource.org/licenses/gpl-license.php GNU Public License
*
*/
/**
* CONTRIBUTORS
* Translation made by phpBB-fr.com and phpBB.biz Teams
* http://www.phpbb-fr.com
* http://www.phpbb.biz
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
// 'Pagina %s of %s' you can (and should) write 'Pagina %1$s of %2$s', this allows
// translators to re-order the output of data while ensuring it remains correct
//
// You do not need this where single placeholders are used, e.g. 'Messatge %d' is fine
// equally where a string contains only two placeholders which are used to wrap text
// in a url you again do not need to specify an order e.g., 'Click %sHERE%s' is fine

$lang = array_merge($lang, array(
	'ADMIN_CONFIG'				=> 'Configuracion de l\'administracion',
	'ADMIN_PASSWORD'			=> 'Mot de pas administrator',
	'ADMIN_PASSWORD_CONFIRM'	=> 'Confirmatz lo mot de pas',
	'ADMIN_PASSWORD_EXPLAIN'	=> 'Picatz un mot de pas entre 6 e 30 caractèrs.',
	'ADMIN_TEST'				=> 'Vérification dels paramètres de l\'administrator',
	'ADMIN_USERNAME'			=> 'Nom de l\'administrator',
	'ADMIN_USERNAME_EXPLAIN'	=> 'Picatz un nom d\'utilizaire entre 3 e 20 caractèrs.',
	'APP_MAGICK'				=> 'Support Imagemagick [ Fichièrs junts ]',
	'AUTHOR_NOTES'				=> 'Notes de l\'auteur<br />» %s',
	'AVAILABLE'					=> 'Disponible',
	'AVAILABLE_CONVERTORS'		=> 'Convertisseurs disponibles',

	'BEGIN_CONVERT'					=> 'Démarrer la conversion',
	'BLANK_PREFIX_FOUND'			=> 'Una verificacion de vòstres tables a détectée una installacion possible sens préfixe de table.',
	'BOARD_NOT_INSTALLED'			=> 'Pas cap de installacion détectée',
	'BOARD_NOT_INSTALLED_EXPLAIN'	=> 'Per pouvoir efectuar una mesa a jorn, vos devez aver un forum phpBB3 installat. Notatz que l\'ancien e lo forum novèl debon èsser dins la meteissa basa de donadas amb dels préfixes différents. Debètz efectuar <a href="%s">l\'installacion del forum novèl</a>.',

	'CATEGORY'					=> 'Categoria',
	'CACHE_STORE'				=> 'Type de cache',
	'CACHE_STORE_EXPLAIN'		=> 'Emplacement physique ont los données son mises en cache, un sistèma de fichièrs es préférable.',
	'CAT_CONVERT'				=> 'Convertir',
	'CAT_INSTALL'				=> 'Installer',
	'CAT_OVERVIEW'				=> 'Préambule',
	'CAT_UPDATE'				=> 'Mise a jorn',
	'CHANGE'					=> 'Modificar',
	'CHECK_TABLE_PREFIX'		=> 'Verificatz vòstre préfixe de table e recommencez.',
	'CLEAN_VERIFY'				=> 'Nettoyage e verificacion de la structure finale',
	'CLEANING_USERNAMES'		=> 'Nettoyage dels noms d\'utilizaires',
	'COLLIDING_CLEAN_USERNAME'	=> '<strong>%s</strong> es lo nom d\'utilizaire propre per:',
	'COLLIDING_USERNAMES_FOUND'	=> 'Un meteissa nom d\'utilizaire es utilizat per plusieurs personnes différentes. Per contunhar la conversion, effacez o renommatz aquestes utilizaires per qu\'il n\'y ait plus de nom d\'utilizaire en double sus vòstre ancien forum.',
	'COLLIDING_USER'			=> '» id utilizaire : <strong>%d</strong> nom d\'utilizaire : <strong>%s</strong> (%d messatges)',
	'CONFIG_CONVERT'			=> 'Conversion de la configuration',
	'CONFIG_FILE_UNABLE_WRITE'	=> 'Impossible d\'écrire lo fichièr de configuration. Des méthodes alternatives per créer aqueste fichièr son indiquées çai-jos.',
	'CONFIG_FILE_WRITTEN'		=> 'Lo fichièr de configuration es estat écrit, podètz désormais procéder a la prochaine etapa de l\'installacion.',
	'CONFIG_PHPBB_EMPTY'		=> 'La variable de configuration de phpBB3 per "%s" es void.',
	'CONFIG_RETRY'				=> 'Réessayer',
	'CONTACT_EMAIL_CONFIRM'		=> 'Confirmatz lo corrièl de contact',
	'CONTINUE_CONVERT'			=> 'Continuer la conversion',
	'CONTINUE_CONVERT_BODY'		=> 'Una conversion es ja en cors. Podètz causir de la contunhar o d\'en efectuar una nouvelle.',
	'CONTINUE_LAST'				=> 'Continuer los darrièras instructions',
	'CONTINUE_OLD_CONVERSION'	=> 'Continuer la conversion commencée précédemment',
	'CONVERT'					=> 'Convertir',
	'CONVERT_COMPLETE'			=> 'La conversion es terminée',
	'CONVERT_COMPLETE_EXPLAIN'	=> 'Vous avez converti vòstre forum cap a phpBB 3.0. Asseguratz-vos que los paramètres aient été correctement transférés abans d\'activar vòstre forum en supprimant lo repertòri install. Podètz désormais vos connectar e <a href="../">accédez a vòstre forum</a>. Souvenez-vos que l\'aide sus l\'utilisation de phpBB es disponible dins lo <a href="http://www.phpbb.com/support/documentation/3.0/">Guida de l\'utilizaire</a> e lo <a href="http://forums.phpbb-fr.com/">forum d\'assistance</a>',
	'CONVERT_INTRO'				=> 'Benvenguda sus la plate-forme de conversion unifiée de phpBB (phpBB Unified Convertor Framework)',
	'CONVERT_INTRO_BODY'		=> 'D\'aicí, podètz importer dels données a partir d\'autres systèmes de forum. La tièra seguenta montre totes los moduls de conversion actualament disponibles. Se lo module de conversion de vòstre forum ne s\'y trouve pas, visitez notre sit web per verificar se lo convertisseur es disponible.',
	'CONVERT_NEW_CONVERSION'	=> 'Nouvelle conversion',
	'CONVERT_NOT_EXIST'			=> 'Lo convertisseur especificat existís pas.',
	'CONVERT_OPTIONS'        	=> 'Opcions',
	'CONVERT_SETTINGS_VERIFIED'	=> 'Los entresenhas saisies son estats vérifiées. Per commencer la conversion, clicatz sul boton çai-jos.',
	'CONV_ERR_FATAL'			=> 'Error fatale lors de la conversion',

	'CONV_ERROR_ATTACH_FTP_DIR'			=> 'L\'envoi per FTP dels pèças juntas es activat sus vòstre ancien forum. Copiez totes los pèças juntas dins un repertòri, désactivez l\'envoi FTP, e vérifiez que lo repertòri especificat es correct. Vous devrez ensuite redémarrer la conversion.',
	'CONV_ERROR_CONFIG_EMPTY'			=> 'Il n\'y a aucune information de configuration disponible per la conversion.',
	'CONV_ERROR_FORUM_ACCESS'			=> 'Impossible d\'obtenir los entresenhas d\'accès al forum.',
	'CONV_ERROR_GET_CATEGORIES'			=> 'Impossible d\'obtenir los catégories.',
	'CONV_ERROR_GET_CONFIG'				=> 'Impossible de recobrar la configuration de vòstre forum.',
	'CONV_ERROR_COULD_NOT_READ'			=> 'Impossible d\'acceder/legir "%s".',
	'CONV_ERROR_GROUP_ACCESS'			=> 'Impossible d\'obtenir los entresenhas d\'authentification dels grops.',
	'CONV_ERROR_INCONSISTENT_GROUPS'	=> 'Contradiction détectée dins la table dels grops dins add_bots() - vos devez apondre totes los grops especials manualament.',
	'CONV_ERROR_INSERT_BOT'				=> 'Impossible d\'insérer lo robot dins la table dels utilizaires.',
	'CONV_ERROR_INSERT_BOTGROUP'		=> 'Impossible d\'insérer lo robot dins la table dels robots.',
	'CONV_ERROR_INSERT_USER_GROUP'		=> 'Impossible d\'insérer l\'utilizaire dins la table user_group.',
	'CONV_ERROR_MESSAGE_PARSER'			=> 'Error lors de l\'analyse del messatge',
	'CONV_ERROR_NO_AVATAR_PATH'			=> 'Note al développeur : vos devez especificar $convertor[\'avatar_path\'] per utilizar %s.',
	'CONV_ERROR_NO_FORUM_PATH'			=> 'Lo camin relatif al forum source es pas estat especificat.',
	'CONV_ERROR_NO_GALLERY_PATH'		=> 'Note al développeur : vos devez especificar $convertor[\'avatar_gallery_path\'] per utilizar %s.',
	'CONV_ERROR_NO_GROUP'				=> 'Lo grop "%1$s" es introuvable dins %2$s.',
	'CONV_ERROR_NO_RANKS_PATH'			=> 'Note al développeur : vos devez especificar $convertor[\'ranks_path\'] per utilizar %s.',
	'CONV_ERROR_NO_SMILIES_PATH'		=> 'Note al développeur : vos devez especificar $convertor[\'smilies_path\'] per utilizar %s.',
	'CONV_ERROR_NO_UPLOAD_DIR'			=> 'Note al développeur : vos devez especificar $convertor[\'upload_path\'] per utilizar %s.',
	'CONV_ERROR_PERM_SETTING'			=> 'Impossible d\'insérer/botar a jorn los paramètres de permissions.',
	'CONV_ERROR_PM_COUNT'				=> 'Impossible de seleccionar lo compteur de dossiers de messagerie privada.',
	'CONV_ERROR_REPLACE_CATEGORY'		=> 'Impossible d\'insérer lo forum novèl en remplacement de l\'ancienne catégorie.',
	'CONV_ERROR_REPLACE_FORUM'			=> 'Impossible d\'insérer lo forum novèl en remplacement de l\'ancien forum.',
	'CONV_ERROR_USER_ACCESS'			=> 'Impossible d\'obtenir los entresenhas d\'authentification de l\'utilizaire.',
	'CONV_ERROR_WRONG_GROUP'			=> 'Mauvais grop "%1$s" definit dins %2$s.',
	'CONV_OPTIONS_BODY'					=> 'Aquesta pagina collecte los entresenhas qui son requises per acceder a vòstre forum source. Picatz los entresenhas de la basa de donadas de vòstre ancien forum; Lo convertisseur ne modifiera en rien la basa de donadas donnée çai-jos. Lo forum source devrait èsser desactivat per permettre una conversion sens risque.',
	'CONV_SAVED_MESSAGES'				=> 'Messatges enregistrats',

	'COULD_NOT_COPY'			=> 'Impossible de copiar lo fichièr <strong>%1$s</strong> cap a <strong>%2$s</strong><br /><br />Verificatz que lo repertòri cible existís e qu\'il es autorizat en écriture.',
	'COULD_NOT_FIND_PATH'		=> 'Impossible de trouver lo camin cap a vòstre ancien forum. Verificatz vòstres réglages e recommencez.<br />» Lo camin indicat èra %s.',

	'DBMS'						=> 'Type de base',
	'DB_CONFIG'					=> 'Configuracion de la basa de donadas',
	'DB_CONNECTION'				=> 'Connexion a la basa de donadas',
	'DB_ERR_INSERT'				=> 'Error pendant l\'exécution d\'una requête <còdi>INSERT</còdi>.',
	'DB_ERR_LAST'				=> 'Error pendant l\'exécution de <var>query_last</var>.',
	'DB_ERR_QUERY_FIRST'		=> 'Error pendant l\'exécution de <var>query_first</var>.',
	'DB_ERR_QUERY_FIRST_TABLE'	=> 'Error pendant l\'exécution de <var>query_first</var>, %s ("%s").',
	'DB_ERR_SELECT'				=> 'Error pendant l\'exécution d\'una requête <còdi>SELECT</còdi>.',
	'DB_HOST'					=> 'Servidor de basa de donadas o DSN',
	'DB_HOST_EXPLAIN'			=> 'DSN signifie Data Source Name (source de données) e n\'es utilizat que per una installacion ODBC.',
	'DB_NAME'					=> 'Nom de la base',
	'DB_PASSWORD'				=> 'Mot de pas',
	'DB_PORT'					=> 'Pòrt del servidor',
	'DB_PORT_EXPLAIN'			=> 'Laissez void a mens que lo servidor utilise un port non standard.',
	'DB_USERNAME'				=> 'Nom d\'utilizaire',
	'DB_TEST'					=> 'Test de connexion',
	'DEFAULT_LANG'				=> 'Lenga per defaut',
	'DEFAULT_PREFIX_IS'			=> 'Lo convertisseur n\'a pas trobat de tables amb lo préfixe especificat. Verificatz que aqueste préfixe es celui del forum que volètz convertir. Lo préfixe per defaut per %1$s es <strong>%2$s</strong>.',
	'DEV_NO_TEST_FILE'			=> 'Pas cap de valeur n\'es estat especificada per la variable test_file dins lo convertisseur. Se utilizatz aqueste convertisseur, vos ne devriez pas veire aquesta error, rapportez aquesta error a l\'auteur del convertisseur. Se vos êtes l\'auteur del convertisseur, vos devez especificar lo nom del fichièr qui existís dins lo forum source per permettre al camin d\'èsser vérifié.',
	'DIRECTORIES_AND_FILES'		=> 'Installation del repertòri e del fichièr',
	'DISABLE_KEYS'				=> 'Désactivation dels clés',
	'DLL_FIREBIRD'				=> 'Firebird',
	'DLL_FTP'					=> 'Support FTP distant [ Installation ]',
	'DLL_GD'					=> 'Support de la librairie graphique GD [ Confirmacion visuala ]',
	'DLL_MBSTRING'				=> 'Support dels caractèrs multi-octets',
	'DLL_MSSQL'					=> 'MSSQL Server 2000+',
	'DLL_MSSQL_ODBC'			=> 'MSSQL Server 2000+ via ODBC',
	'DLL_MYSQL'					=> 'MySQL',
	'DLL_MYSQLI'				=> 'MySQL amb l\'extension MySQLi',
	'DLL_ORACLE'				=> 'Oracle',
	'DLL_POSTGRES'				=> 'PostgreSQL 7.x/8.x',
	'DLL_SQLITE'				=> 'SQLite',
	'DLL_XML'					=> 'Support del XML [ Jabber ]',
	'DLL_ZLIB'					=> 'Support de la compression zlib [ gz, .tar.gz, .zip ]',
	'DL_CONFIG'					=> 'Descargar la configuration',
	'DL_CONFIG_EXPLAIN'			=> 'Podètz descargar lo fichièr config.php sus vòstre ordenador. Vous devrez ensuite transferir aqueste fichièr manualament sus vòstre FTP, en écrasant lo fichièr config.php existant a la rasiga del repertòri de phpBB 3.0. Veillez a transferir lo fichièr al format ASCII (consultatz la documentation de vòstre logiciel FTP se vos ne savez pas far cela). Lorsque vos aurez transféré lo fichièr config.php, clicatz sus "Terminé" per passer a l\'etapa seguenta.',
	'DL_DOWNLOAD'				=> 'Descargar',
	'DONE'						=> 'Terminé',

	'ENABLE_KEYS'				=> 'Réactivation dels clés. Cela pòt prendre un moment.',

	'FILES_OPTIONAL'			=> 'Fichièrs e répertoires optionnels',
	'FILES_OPTIONAL_EXPLAIN'	=> '<strong>Optionnel</strong> - Aquestes fichièrs, répertoires o permissions son pas obligatoires. L\'installacion utilisera diverses techniques per los créer s\'ils n\'existent pas o son pas permis en écriture. Ça que la, la présence d\'aquestes fichièrs, o permissions accéléreront l\'installacion.',
	'FILES_REQUIRED'			=> 'Répertoires e fichièrs',
	'FILES_REQUIRED_EXPLAIN'	=> '<strong>Requis</strong> - Per fonctionner correctement, phpBB deu pouvoir acceder o écrire sus certains fichièrs o répertoires. Se vos voyez "Introuvable", vos devez créer los fichièrs o répertoires adéquats. Se vos voyez "Non autorizat en écriture", vos devez modificar los permissions sul fichièr o repertòri per autoriser phpBB a y écrire.',
	'FILLING_TABLE'				=> 'Remplissage de la table <strong>%s</strong>',
	'FILLING_TABLES'			=> 'Remplissage dels tables',
	'FINAL_STEP'				=> 'Etape finale del processus',
	'FORUM_ADDRESS'				=> 'Adreça del forum',
	'FORUM_ADDRESS_EXPLAIN'		=> 'Ceci es l\'URL de vòstre ancien forum, per exemple <samp>http://www.exemple.com/phpBB2/</samp>. Se una adreça es dintrada aicí e non void a gauche, chaque exemple de aquesta adreça serà remplacé per vòstres nouvelles adreças dins los messatges, messatges privats e signatures.',
	'FORUM_PATH'				=> 'Camin del forum',
	'FORUM_PATH_EXPLAIN'		=> 'Ceci es lo camin <strong>relatif</strong> cap a vòstre ancien forum dempuèi <strong>la rasiga de aquesta installacion phpBB3</strong>',
	'FOUND'						=> 'Trouvé',
	'FTP_CONFIG'				=> 'Transferir lo fichièr de configuration per FTP',
	'FTP_CONFIG_EXPLAIN'		=> 'phpBB a détecté la présence d\'un module FTP sus aqueste servidor. Podètz essayer de transferir lo fichièr config.php per aqueste moyen se vos lo désirez. Vous devrez fournir los entresenhas demandées çai-jos. Los noms e mots de passe son ceux del servidor FTP! (Contactatz vòstre fournisseur d\'hébergement se vos ne los connaissez pas)',
	'FTP_PATH'					=> 'Camin FTP',
	'FTP_PATH_EXPLAIN'			=> 'Camin relatif cap a vòstre forum phpBB dempuèi la rasiga FTP, per exemple : htdocs/phpBB3/',
	'FTP_UPLOAD'				=> 'Transferir',

	'GPL'						=> 'Licence publique generala',

	'INITIAL_CONFIG'			=> 'Configuracion de base',
	'INITIAL_CONFIG_EXPLAIN'	=> 'L\'installacion a déterminée que vòstre servidor es a meteissa de supporter phpBB, vos devez fournir quelques entresenhas spécifiques. Se vos ne savez pas vos connectar a vòstre basa de donadas, contactatz vòstre fournisseur d\'hébergement (en premier lieu) o utilizatz <a href="http://forums.phpbb-fr.com/"> lo forum d\'assistance</a>.Lors de la saisie dels données, assurez-vos de bien los verificar, abans de contunhar.',
	'INSTALL_CONGRATS'			=> 'Òsca!',
	'INSTALL_CONGRATS_EXPLAIN'   => '
      <p>Vous avez installat vòstre forum phpBB %1$s. Vous avez maintenant la possibilité de causir entre 2 opcions:</p>
      <h2>Convertir un forum existant cap a phpBB3</h2>
      <p>Lo processus de conversion de phpBB3 permet de convertir un forum phpBB2 e d\'autres systèmes de forum en un forum phpBB3. S'avètz ja un forum installat, <a href="%2$s">convertissez-lo</a>.</p>
      <h2>Utiliser vòstre forum maintenant!</h2>
      <p>En cliquant sul boton çai-jos, vos serez redirigé cap a lo panèl d\'administracion de vòstre forum. Prenez lo temps d\'examiner los différentes opcions disponibles. Una aide en linha es accessible via <a href="http://www.phpbb.com/support/documentation/3.0/">la documentation </a> e lo <a href="http://forums.phpbb-fr.com/">forum de support</a>, consultatz lo fichièr <a href="%3$s">Lisez-moi</a> per mai d\'entresenhas.</p><p><strong>Effacez, renommatz o desplaçatz lo repertòri install de vòstre FTP abans d\'utilizar lo forum. Se aqueste repertòri es présent, seul lo panèl d\'administracion de vòstre forum serà disponible.</strong></p>',
	'INSTALL_INTRO'				=> 'Benvenguda dins l\'installacion',
// TODO : write some more introductions here
	'INSTALL_INTRO_BODY'		=> 'Avec aquesta option, il es possible d\'installer phpBB sus vòstre servidor.</p><p>Per aquò, vos aurez besoin dels paramètres de connexion a vòstre basa de donadas. Se vos ne los connaissez pas, contactatz vòstre fournisseur d\'hébergement per los lui demander. Vous ne pourrez pas contunhar l\'installacion sens los paramètres suivants:</p>

   <ul>
      <li>Lo type de vòstre basa de donadas.</li>
      <li>L\'adreça del servidor de vòstre basa de donadas o DSN.</li>
      <li>Lo port del servidor de vòstre basa de donadas.</li>
      <li>Lo nom de vòstre basa de donadas.</li>
      <li>Lo login e lo mot de pas d\'accès a vòstre basa de donadas.</li>
   </ul>

   <p><strong>Note:</strong> Se vos faites una installacion en utilizant SQLite, vos devrez entrer lo camin complet d\'accès a vòstre basa de donadas dins lo champ DSN, e laisser los champs nom d\'utilizaire e mot de pas vides. Per dels rasons de seguretat, assurez-vos que vòstre fichièr de basa de donadas n\'es pas situé dins un repertòri accessible dempuèi lo web.</p>

   <p>phpBB3 supporte los bases de données suivantes:</p>
   <ul>
      <li>MySQL 3.23 o supérieur (MySQLi supporté)</li>
      <li>PostgreSQL 7.3+</li>
      <li>SQLite 2.8.2+</li>
      <li>Firebird 2.0+</li>
      <li>MS SQL Server 2000 o supérieur (directement o via ODBC)</li>
      <li>Oracle</li>
   </ul>

   <p>Seules aquestes bases de données, se elles son supportées per vòstre servidor, seront affichées.',
	'INSTALL_INTRO_NEXT'		=> 'Per commencer l\'installacion, appuyez sul boton çai-jos.',
	'INSTALL_LOGIN'				=> 'Se connectar',
	'INSTALL_NEXT'				=> 'Etape seguenta',
	'INSTALL_NEXT_FAIL'			=> 'Certains tests ont échoué e vos devez corriger aquestes problemas abans de passer a l\'etapa seguenta. Sans cela l\'installacion risque d\'èsser incomplète.',
	'INSTALL_NEXT_PASS'			=> 'Totes los tests de base ont réussi, podètz donc passer a l\'etapa seguenta de l\'installacion. S'avètz modificat certains moduls, permissions, etc. e que vos souhaitez los verificar a nouveau, vos lo pouvez.',
	'INSTALL_PANEL'				=> 'Panèl d\'installacion',
	'INSTALL_SEND_CONFIG'		=> 'Malheureusement PhpBB n\'a pas réussi a écrire los entresenhas de configuration directement dins lo fichièr config.php. Lo fichièr n\'existís benlèu pas o n\'es pas autorizat en écriture. Vaquí quelques opcions per vos permettre d\'installer lo fichièr.',
	'INSTALL_START'				=> 'Commencer l\'installacion',
	'INSTALL_TEST'				=> 'Tester a nouveau',
	'INST_ERR'					=> 'Error d\'installacion',
	'INST_ERR_DB_CONNECT'		=> 'Impossible de se connectar a la basa de donadas, consultatz lo messatge d\'error çai-jos.',
	'INST_ERR_DB_FORUM_PATH'	=> 'Lo fichièr de la basa de donadas especificat es dins lo repertòri rasiga de vòstre forum. Debètz desplaçar aqueste fichièr dins un emplacement inaccessible dempuèi Internet.',
	'INST_ERR_DB_NO_ERROR'		=> 'Pas cap de error n\'es survenue.',
	'INST_ERR_DB_NO_MYSQLI'		=> 'La version de MySQL installée sus aquesta machine es incompatible amb l\'option "MySQL amb extension MySQLi". Essayez amb l\'option "MySQL" a la place.',
	'INST_ERR_DB_NO_SQLITE'		=> 'La version de SQLite installée es trop ancienne, elle deu èsser mesa a jorn al minimum a la version 2.8.2.',
	'INST_ERR_DB_NO_ORACLE'		=> 'La version d\'Oracle installée nécessite de définir lo paramètre <var>NLS_CHARACTERSET</var> sus <var>UTF8</var>. Mettez-la a jorn a la version 9.2+ o changez aqueste paramètre.',
	'INST_ERR_DB_NO_FIREBIRD'	=> 'La version installée de Firebird es plus ancienne que la version 2.0, mettez-la a jorn cap a una version plus récente.',
	'INST_ERR_DB_NO_FIREBIRD_PS'=> 'La basa de donadas sélectionnée per firebird a una talha inférieure a 8192, la talha minimale deu èsser de 8192.',
	'INST_ERR_DB_NO_POSTGRES'	=> 'La basa de donadas sélectionnée es pas estat créée amb l\'encodage <var>UNICODE</var> o <var>UTF8</var>. Réessayez l\'installacion amb una base encodée en <var>UNICODE</var> o bien <var>UTF8</var>',
	'INST_ERR_DB_NO_NAME'		=> 'Pas cap de nom de base indicat.',
	'INST_ERR_EMAIL_INVALID'	=> 'L\'adreça electronica saisie es invalid',
	'INST_ERR_EMAIL_MISMATCH'	=> 'Los corrièls saisis ne correspondent pas.',
	'INST_ERR_FATAL'			=> 'Error fatale lors de l\'installacion',
	'INST_ERR_FATAL_DB'			=> 'Una error fatale e irrécupérable de basa de donadas es survenue. Vous n\'avez benlèu pas los droits appropriés per efectuar <còdi>CREATE TABLES</còdi> o <còdi>INSERT</còdi>, etc. Des entresenhas supplémentaires pòdon èsser données çai-jos. Contactatz vòstre hébergeur en premier lieu o lo <a href="http://forums.phpbb-fr.com/">forum d\'assistance</a>',
	'INST_ERR_FTP_PATH'			=> 'Impossible d\'acceder al repertòri balhat, vérifiez lo camin.',
	'INST_ERR_FTP_LOGIN'		=> 'Impossible de s\'identifier sul servidor FTP, vérifiez vòstres identifiant e mot de pas',
	'INST_ERR_MISSING_DATA'		=> 'Debètz remplir totes los champs d\'aqueste bloc',
	'INST_ERR_NO_DB'			=> 'Impossible de cargar lo module PHP pel type de base seleccionat',
	'INST_ERR_PASSWORD_MISMATCH'	=> 'Los mots de passe saisis ne correspondent pas.',
	'INST_ERR_PASSWORD_TOO_LONG'	=> 'Lo mot de pas saisi es trop long. La talha maximale es de 30 caractèrs.',
	'INST_ERR_PASSWORD_TOO_SHORT'	=> 'Lo mot de pas saisi es trop cort. La talha minimale es de 6 caractèrs.',
	'INST_ERR_PREFIX'			=> 'Des tables amb lo préfixe especificat existent ja, causissètz-en un autre.',
	'INST_ERR_PREFIX_INVALID'	=> 'Lo préfixe de table indicat es incompatible amb vòstre basa de donadas. Essayez-en un autre, en supprimant los caractèrs coma los tirets',
	'INST_ERR_PREFIX_TOO_LONG'	=> 'Lo préfixe de table indicat es trop long. La talha maximale es de %d caractèrs.',
	'INST_ERR_USER_TOO_LONG'	=> 'Lo nom d\'utilizaire saisi es trop long. La talha maximale es de 20 caractèrs.',
	'INST_ERR_USER_TOO_SHORT'	=> 'lo nom d\'utilizaire saisi es trop cort. La talha minimale es de 3 caractèrs.',
	'INVALID_PRIMARY_KEY'		=> 'Clé primaire invalid : %s',
	
	'LONG_SCRIPT_EXECUTION'		=> 'Notatz que cela pòt prendre un certain temps… N\'arrêtez pas lo script.',

	// mbstring
	'MBSTRING_CHECK'						=> 'Vérification de l\'extension <samp>mbstring</samp>',
	'MBSTRING_CHECK_EXPLAIN'				=> '<strong>Requis</strong> - <samp>mbstring</samp> es una extension PHP qui propose dels fonctions de chaînes a caractèrs multi-octets. Certaines fonctionnalités de mbstring son pas compatibles amb phpBB e debon èsser désactivées.',
	'MBSTRING_FUNC_OVERLOAD'				=> 'Fonction de surcharge',
	'MBSTRING_FUNC_OVERLOAD_EXPLAIN'		=> '<var>mbstring.func_overload</var> deu èsser configuré sus 0 o 4',
	'MBSTRING_ENCODING_TRANSLATION'			=> 'Caractères d\'encodage transparent',
	'MBSTRING_ENCODING_TRANSLATION_EXPLAIN'	=> '<var>mbstring.encoding_translation</var> deu èsser configuré sus 0',
	'MBSTRING_HTTP_INPUT'					=> 'Conversion dels caractèrs d\'dintrada HTTP',
	'MBSTRING_HTTP_INPUT_EXPLAIN' 			=> '<var>mbstring.http_input</var> deu èsser configuré sus <samp>pass</samp>',
	'MBSTRING_HTTP_OUTPUT' 					=> 'Conversion dels caractèrs de sortie HTTP',
	'MBSTRING_HTTP_OUTPUT_EXPLAIN'   		=> '<var>mbstring.http_output</var> deu èsser configuré sus <samp>pass</samp>',

	'MAKE_FOLDER_WRITABLE'   	=> 'Verificatz que aqueste repertòri existís e qu\'il es autorizat en écriture pel servidor web e recommencez:<br />»<strong>%s</strong>',
	'MAKE_FOLDERS_WRITABLE'   	=> 'Verificatz que aquestes dossiers existent e son accessibles en écriture pel servidor web e recommencez:<br />»<strong>%s</strong>',

	'NAMING_CONFLICT'   		=> 'Conflit de noms : %s e %s son totes deux dels alias<br /><br />%s',
	'NEXT_STEP' 				=> 'Etape seguenta',
	'NOT_FOUND'   				=> 'Introuvable',
	'NOT_UNDERSTAND'   			=> 'Impossible d\'interpréter %s #%d, table %s ("%s")',
	'NO_CONVERTORS'  			=> 'Pas cap de convertisseur disponible',
	'NO_CONVERT_SPECIFIED'   	=> 'Pas cap de convertisseur especificat',
	'NO_LOCATION'   			=> 'Impossible de déterminer l\'emplacement. Se vos savez que Imagemagick es installat, vos pourrez especificar son emplacement plus tard dins lo panèl d\'administracion',
	'NO_TABLES_FOUND'   		=> 'Pas cap de table trouvée.',
// TODO : Write some explanatory introduction text

	'OVERVIEW_BODY'   => 'Benvenguda sus la version RC de phpBB 3.0, la prochaine génération de forum après phpBB 2.0.x! Aquesta version RC es destinée als utilizaires avancés per l\'essayer sus dels environnements de développement dédiés, afin de nous aider a identifier los darrièrs bugs e problemas de navigation.</p><p>Lisez <a href="../docs/INSTALL.html">notre guide</a> per mai d'entresenhas sus l\'installacion de phpBB3</p><p><strong estil="text-transform : uppercase;">Note:</strong> Aquesta version <strong estil="text-transform : uppercase;">n\'es pas finale</strong> e es <strong estil="text-transform : uppercase;">sonque</strong> destinée als environnements de tests.</p><p>Aqueste outil vos guidera per l\'installacion, la conversion dempuèi un autre sistèma de forum o per la mesa a jorn de vòstre forum phpBB. Per mai d\'entresenhas sus chaque option, causissètz-la dins lo menut çai-sus.',

	'PCRE_UTF_SUPPORT'				=> 'Support de PCRE UTF-8',
	'PCRE_UTF_SUPPORT_EXPLAIN'		=> 'phpBB <strong>ne fonctionnera que</strong> se vòstre installacion PHP es compilée amb lo support de l\'extension PCRE UTF-8',
	'PHP_GETIMAGESIZE_SUPPORT'			=> 'La foncion PHP getimagesize() es disponible',
	'PHP_GETIMAGESIZE_SUPPORT_EXPLAIN'	=> '<strong>Requis</strong> - Per que phpBB fonctionne correctement, la foncion getimagesize() deu èsser disponible.',
	'PHP_OPTIONAL_MODULE'  				=> 'Modules optionnels',
	'PHP_OPTIONAL_MODULE_EXPLAIN'   	=> '<strong>Optionnel</strong> - Aquestes moduls o applications son optionnels, vos n\'en avez pas besoin per utilizar phpBB 3.0. Ça que la se vos los avez, ils activeront dels fonctionnalités supplémentaires.',
	'PHP_SUPPORTED_DB'   				=> 'Bases de données supportées',
	'PHP_SUPPORTED_DB_EXPLAIN'   		=> '<strong>Requis</strong> - Debètz aver al mens una basa de donadas comportant PHP. Se PHP n\'es pas disponible, contactatz vòstre hébergeur o consultatz la documentation d\'installacion de PHP.',
	'PHP_REGISTER_GLOBALS'   			=> 'Lo réglage PHP <var>register_globals</var> es desactivat',
	'PHP_REGISTER_GLOBALS_EXPLAIN'   	=> 'phpBB fonctionne se aqueste réglage es activat, mas se possible, il es recommandé de desactivar register_globals per dels rasons de seguretat.',
	'PHP_SAFE_MODE'   					=> 'Mode sécurisé',
	'PHP_SETTINGS'   					=> 'Version de PHP e réglages',
	'PHP_SETTINGS_EXPLAIN'   			=> '<strong>Requis</strong> - Debètz utilizar al mens la version 4.3.3 de PHP per installer phpBB. Se <var>safe mòde</var> es affiché, PHP fonctionne dins aqueste mòde. Cela implique dels limitations sus l\'administracion distante e dels fonctionnalités similaires.',
	'PHP_URL_FOPEN_SUPPORT'   			=> 'Lo paramètre PHP <var>allow_url_fopen</var> es activat',
	'PHP_URL_FOPEN_SUPPORT_EXPLAIN'  	=> '<strong>Optionnel</strong> - Aqueste paramètre es optionnel, il permet entre autres d\'attacher dels avatars dempuèi un sit externe.',
	'PHP_VERSION_REQD'   				=> 'Vòstre version de PHP deu èsser la 4.3.3 al minimum',
	'POST_ID'  							=> 'Id del messatge',
	'PREFIX_FOUND'   					=> 'Una verificacion de vòstres tables a trobat una installacion de phpBB amb lo préfixe <strong>%s</strong>.',
	'PREPROCESS_STEP'   				=> 'Exécution dels fonctions/requêtes de pré-traitement',
	'PRE_CONVERT_COMPLETE'   			=> 'Toutes los etapas de pré-conversion son terminées. Podètz commencer lo processus de conversion. Notatz que podètz aver a far e ajuster plusieurs choses manualament. Aprèp la conversion, vérifiez particulièrement los permissions assignées, reconstruisez vòstre indèx de recèrca se necessari, e assurez-vos que los fichièrs son estats correctement copiés, per exemple, los avatars e los smileys.',
	'PROCESS_LAST'   					=> 'Exécution dels darrièras instructions',

	'REFRESH_PAGE'				=> 'Rafraîchir la pagina per contunhar la conversion',
	'REFRESH_PAGE_EXPLAIN'		=> 'Se OUI, lo convertisseur va rafraîchir la pagina après chaque etapa. S\'il s\'agit de vòstre première conversion per efectuar dels tests e veire los errors durant l\'avancement, nous vos conseillons de laisser NON.',
//	'REQUIRED'					=> 'Requis',
	'REQUIREMENTS_TITLE'		=> 'Compatibilité de l\'installacion',
	'REQUIREMENTS_EXPLAIN'		=> 'Abans d\'efectuar una installacion complète, phpBB va verificar la configuration dels fichièrs de vòstre servidor e s\'assurer que podètz installer phpBB. Lisez attentivement los résultats e ne continuez pas tant que totes los tests son pas validés. Se volètz activar una foncionalitat liée a dels tests optionnels, vos devez vos assurer que aquestes tests soient aussi validés.',
	'RETRY_WRITE'				=> 'Réessayer l\'écriture del fichièr de configuration',
	'RETRY_WRITE_EXPLAIN'		=> 'Se volètz, podètz modificar los droits sus config.php per permettre a phpBB d\'écrire dessus. Dins aqueste cas, clicatz sus réessayer per recommencer. Rappelez-vos de reinicializar los permissions de config.php après l\'installacion de phpBB.',

	'SCRIPT_PATH'				=> 'Camin del script',
	'SCRIPT_PATH_EXPLAIN'   	=> 'Lo camin ont phpBB es situé per rapòrt a la rasiga del forum, per exemple : /<samp>phpbb3</samp>',
	'SELECT_LANG'   			=> 'Causissètz una langue',
	'SERVER_CONFIG'   			=> 'Configuracion del servidor',
	'SEARCH_INDEX_UNCONVERTED'  => 'L\'indèx de recèrca es pas estat converti',
	'SEARCH_INDEX_UNCONVERTED_EXPLAIN'   => 'Vòstre ancien indèx de recèrca es pas estat converti. La recèrca ne fonctionnera plus jusqu\'a-n aqueste que vos réindexiez vòstre recèrca via l\'ACP, sélectionnez Mantenença puis Indèx de recèrca dins lo sous-menut.',
	'SOFTWARE'   				=> 'Logiciel de forum',
	'SPECIFY_OPTIONS'   		=> 'Especificar las opcions de conversion',
	'STAGE_ADMINISTRATOR'   	=> 'Entresenhas sus l\'administrator',
	'STAGE_ADVANCED'   			=> 'Paramètres avancés',
	'STAGE_ADVANCED_EXPLAIN'   	=> 'Los réglages de aquesta pagina ne son nécessaires que per définir dels réglages différents de ceux per defaut. En cas de doute, allez a la pagina seguenta, ils pourront èsser modifiés plus tard via l\'administracion.',
	'STAGE_CONFIG_FILE'   		=> 'Fichièr de configuration',
	'STAGE_CREATE_TABLE'   		=> 'Creacion dels tables de basa de donadas',
	'STAGE_CREATE_TABLE_EXPLAIN'=> 'Los tables de basa de donadas utilisées per phpBB 3.0 son estats créées e remplies amb quelques données initiales. Rendez-vos sus la pagina seguenta per terminer l\'installacion de phpBB.',
	'STAGE_DATABASE'   			=> 'Paramètres de la basa de donadas',
	'STAGE_FINAL'   			=> 'Etape finale',
	'STAGE_INTRO'   			=> 'Introduction',
	'STAGE_IN_PROGRESS'   		=> 'Conversion en cors',
	'STAGE_REQUIREMENTS'   		=> 'Conditions',
	'STAGE_SETTINGS'   			=> 'Paramètres',
	'STARTING_CONVERT'   		=> 'Démarrage del processus de conversion',
	'STEP_PERCENT_COMPLETED'   	=> 'Etape <strong>%d</strong> sus <strong>%d</strong>',
	'SUB_INTRO'   				=> 'Introduction',
	'SUB_LICENSE'   			=> 'Licence',
	'SUB_SUPPORT'   			=> 'Support',
	'SUCCESSFUL_CONNECT'   		=> 'Connexion réussie',
// TODO : Write some text on obtaining support
	'SUPPORT_BODY'				=> 'Pendant la phase de release candidate, lo support serà effectué suls <a href="http://forums.phpbb-fr.com/indèx.html">forums de support phpBB 3.0.x</a>. Nous fournirons dels responsas als questions d\'installacion generala, als problemas de configuration, de conversions e als problemas courants liés als bugs. Nous autorisons tanben los discussions a propos dels modificacions e dels còdis/estils personalizats.</p><p>Per plus d\'assistance, rendez-vos sus notre <a href="http://www.phpbb.com/support/documentation/3.0/quickstart/">Guida de Démarrage Rapide</a> e notre <a href="http://www.phpbb.com/support/documentation/3.0/">documentation en linha</a>.</p><p>Per vos assurer d\'èsser al courant dels darrièras nouveautés o dels darrièras versions, nous vos invitons a <a href="http://www.phpbb.com/support/">souscrire a notre tièra de diffusion</a>.',
	'SYNC_FORUMS'   			=> 'Synchronisation dels forums',
	'SYNC_POST_COUNT'			=> 'Synchronisation de post_counts',
	'SYNC_POST_COUNT_ID'		=> 'Synchronisation de post_counts de <var>l\'dintrada</var> %1$s a %2$s.',
	'SYNC_TOPICS'  				=> 'Synchronisation dels tèmas',
	'SYNC_TOPIC_ID'   			=> 'Synchronisation dels tèmas del <var>topic_id</var> $1%s a $2%s.',

	'TABLES_MISSING'   			=> 'Impossible de trouver aquestes tables<br />» <strong>%s</strong>.',
	'TABLE_PREFIX'  			=> 'Préfixe de tables',
	'TABLE_PREFIX_SAME'   		=> 'Lo préfixe de table deu èsser celui utilizat pel logiciel a convertir.<br />» Lo préfixe indicat èra %s',
	'TESTS_PASSED'  			=> 'Vérifications réussies',
	'TESTS_FAILED'   			=> 'Echec dels vérifications',

	'UNABLE_WRITE_LOCK'   		=> 'Impossible d\'écrire sus un fichièr varrolhat',
	'UNAVAILABLE'   			=> 'Indisponible',
	'UNWRITABLE'   				=> 'Non autorizat en écriture',
	'UPDATE_TOPICS_POSTED'      => 'Mise a jorn dels entresenhas de tèmas',
	'UPDATE_TOPICS_POSTED_ERR'  => 'Una error es survenue lors de la mesa a jorn dels entresenhas dels tèmas. Vous pourrez réessayer plus tard via lo panèl d\'administracion.',
	'VERIFY_OPTIONS'			=> 'Vérification dels opcions de conversion',
	'VERSION'               	=> 'Version',

	'WELCOME_INSTALL'  			=> 'Benvenguda dins l\'installacion de phpBB 3',
	'WRITABLE'   				=> 'Autorizat en écriture',
));

// Updater
$lang = array_merge($lang, array(
	'ALL_FILES_UP_TO_DATE'      => 'Totes los fichièrs son estats mes a jorn. Debètz maintenant <a href="../ucp.php  ?mòde=login">vos connectar a vòstre forum</a> afin de verificar que tout fonctionne correctement. N\'oubliez pas de suprimir, renommer o desplaçar lo repertòri install de vòstre sistèma!',
	'ARCHIVE_FILE'  			=> 'Fichièr source dins l\'archive',

	'BACK'				=> 'Retour',
	'BINARY_FILE'		=> 'Fichièr binaire',
	'BOT'				=> 'Aspirateur/Robot',

	'CHANGE_CLEAN_NAMES'			=> 'La metòde utilizada, per èsser sûr qu\'un nom d\'utilizaire n\'es pas utilizat plusieurs fois, es estat modifiée. Au moment de comparer, certains utilizaires auront lo meteissa nom amb la nouvelle metòde. Abans de procéder, vos devrez suprimir o renommer aquestes utilizaires per èsser sûr que chaque nom ne siá utilizat que per un seul utilizaire.',
	'CHECK_FILES'					=> 'Verificar los fichièrs',
	'CHECK_FILES_AGAIN'				=> 'Verificar a nouveau los fichièrs',
	'CHECK_FILES_EXPLAIN'   		=> 'Pendant la prochaine etapa, totes los fichièrs seront comparés als fichièrs de mesa a jorn - cela pòt prendre del temps se es la première verificacion de fichièrs.',
	'CHECK_FILES_UP_TO_DATE'		=> 'Selon vòstre basa de donadas, vòstre forum es a jorn. Podètz efectuar la verificacion de fichièrs per vos assurer que totes los fichièrs son bien a jorn amb la darrièra version de phpBB.',
	'CHECK_UPDATE_DATABASE'  		=> 'Continuer la mesa a jorn',
	'COLLECTED_INFORMATION'   		=> 'Entresenhas del fichièr',
	'COLLECTED_INFORMATION_EXPLAIN' => 'La tièra çai-jos vos montre los entresenhas suls fichièrs a botar a jorn. Lisez aquestes entresenhas afin de botar a jorn correctement aquestes fichièrs.',
	'COLLECTING_FILE_DIFFS'			=> 'Collecte los différences entre los fichièrs',
	'COMPLETE_LOGIN_TO_BOARD'   	=> 'Podètz maintenant vos <a href="../ucp.php  ?mòde=login">connectar a vòstre forum</a> e verificar se tout fonctionne correctement. N\'oubliez pas de suprimir, renommer o desplaçar lo repertòri <em>install</em>!',
	'CONTINUE_UPDATE_NOW'         	=> 'Continuer la mesa a jorn maintenant',
	'CURRENT_FILE'   				=> 'Fichièr original actual',
	'CURRENT_VERSION'   			=> 'Version actuelle',

	'DATABASE_TYPE'						=> 'Type de basa de donadas',
	'DATABASE_UPDATE_INFO_OLD'			=> 'Lo fichièr de mesa a jorn de la base dins vòstre repertòri d\'installacion es obsolète. Verificatz qu\'avètz transféré la bonne version del fichièr.',
	'DELETE_USER_REMOVE'				=> 'Suprimir l\'utilizaire e ses messatges',
	'DELETE_USER_RETAIN'				=> 'Suprimir l\'utilizaire mas conserver ses messatges',
	'DESTINATION'						=> 'Fichièr de destinacion',
	'DIFF_INLINE'						=> 'Inclus',
	'DIFF_RAW'							=> 'Modification unie brute',
	'DIFF_SEP_EXPLAIN'					=> 'Fin del fichièr actual / Début del nouveau fichièr a jorn',
	'DIFF_SIDE_BY_SIDE'					=> 'Côte a côte',
	'DIFF_UNIFIED'						=> 'Modification unie',
	'DO_NOT_UPDATE'						=> 'Ne pas botar a jorn aqueste fichièr',
	'DONE'								=> 'Terminé',
	'DOWNLOAD'							=> 'Descargar',
	'DOWNLOAD_AS'						=> 'Descargar sous',
	'DOWNLOAD_UPDATE_METHOD'			=> 'Descargar una archive de fichièrs modifiés',
	'DOWNLOAD_UPDATE_METHOD_EXPLAIN'	=> 'Una fois téléchargée, vos devez décompresser l\'archive. Vous y trouverez los fichièrs modifiés que vos devez transferir dins vòstre repertòri a la rasiga de phpBB. Transférez los fichièrs sus lors emplacements respectifs. Transférez los fichièrs sus lors emplacements respectifs, vérifiez a nouveau los fichièrs amb l\'autre boton çai-jos.',

	'ERROR'		=> 'Error',
	'EDIT_USERNAME'	=> 'Modificar lo nom d\'utilizaire',

	'FILE_ALREADY_UP_TO_DATE'		=> 'Lo fichièr es ja a jorn.',
	'FILE_DIFF_NOT_ALLOWED'			=> 'Lo fichièr n\'es pas autorizat a èsser modificat.',
	'FILE_USED'						=> 'Entresenhas utilisées de',			// Single file
	'FILES_CONFLICT'				=> 'Fichièrs en conflit',
	'FILES_CONFLICT_EXPLAIN'		=> 'Los fichièrs suivants son modifiés e ne représentent pas los fichièrs originaux de l\'ancienne version. phpBB a déterminé que aquestes fichièrs créaient dels conflits s\'il tentait de los botar a jorn. Recherchez los conflits e essayez de los résoudre manualament o continuez la mesa a jorn en choisissant una metòde de mesa a jorn. Se vos résolvez los conflits manualament, vérifiez a nouveau los fichièrs après leur modificacion. Podètz aussi causir una metòde de mesa a jorn per chaque fichièr. La première donnera un fichièr ont los modificacions contenues dins los lignes en conflit seront perdues, l\'autre ignorera los modificacions del nouveau fichièr.',
	'FILES_MODIFIED'				=> 'Fichièrs modifiés',
	'FILES_MODIFIED_EXPLAIN'   		=> 'Los fichièrs suivants son modifiés e ne représentent pas los fichièrs originaux dels anciennes versions. Lo fichièr mes a jorn serà la combinaison entre vòstres modificacions e lo nouveau fichièr.',
	'FILES_NEW'						=> 'Nouveaux fichièrs',
	'FILES_NEW_EXPLAIN'				=> 'Los fichièrs actuels suivants n\'existent pas dins vòstre installacion. Aquestes fichièrs seront ajoutés a vòstre installacion.',
	'FILES_NEW_CONFLICT'			=> 'Nouveaux fichièrs en conflit',
	'FILES_NEW_CONFLICT_EXPLAIN'	=> 'Los fichièrs suivants son nouveaux dins la darrièra version, mas il existís ja un fichièr del meteissa nom dins lo meteissa emplacement. Aqueste fichièr serà écrasé pel nouveau fichièr.',
	'FILES_NOT_MODIFIED'			=> 'Fichièr non modifiés',
	'FILES_NOT_MODIFIED_EXPLAIN'	=> 'Los fichièrs suivants son pas modifiés e représentent los fichièrs originaux de phpBB de la version que vos souhaitez botar a jorn.',
	'FILES_UP_TO_DATE'				=> 'Fichièrs ja a jorn',
	'FILES_UP_TO_DATE_EXPLAIN'		=> 'Los fichièrs suivants son ja a jorn e ne nécessitent pas d\'èsser mes a jorn.',
	'FTP_SETTINGS'					=> 'Paramètres FTP',
	'FTP_UPDATE_METHOD'				=> 'Transfert FTP',

	'INCOMPATIBLE_UPDATE_FILES'		=> 'Los fichièrs de mesa a jorn trouvés son incompatibles amb vòstre version installée. Vòstre version installée es la %1$s e los fichièrs de mesa a jorn son per la mesa a jorn de phpBB %2$s cap a %3$s.',
	'INCOMPLETE_UPDATE_FILES'		=> 'Los fichièrs de mesa a jorn son incomplets.',
	'INLINE_UPDATE_SUCCESSFUL'		=> 'La mesa a jorn de la basa de donadas es estat réalisée. Vous avez besoin de contunhar lo processus de mesa a jorn a présent.',

	'KEEP_OLD_NAME'		=> 'Conserver lo nom d\'utilizaire',
	
	'LATEST_VERSION'		=> 'Darrièra version',
	'LINE'					=> 'Ligne',
	'LINE_ADDED'			=> 'Ajoutée',
	'LINE_MODIFIED'			=> 'Modifiée',
	'LINE_REMOVED'			=> 'Supprimée',
	'LINE_UNMODIFIED'		=> 'Non modifiée',
	'LOGIN_UPDATE_EXPLAIN'	=> 'Afin de botar a jorn vòstre installacion, vos devez d\'abord vos connectar.',

	'MAPPING_FILE_STRUCTURE'	=> 'Per faciliter lo transferiment, avètz aicí los emplacements dels fichièrs qui conduisent a vòstre installacion de phpBB.',
	
	'MERGE_MODIFICATIONS_OPTION'   => 'Modifications de la fusion',
	
	'MERGE_NO_MERGE_NEW_OPTION'	=> 'Ne pas fusionar - utilizar un nouveau fichièr',
	'MERGE_NO_MERGE_MOD_OPTION'	=> 'Ne pas fusionar - utilizar lo fichièr installat actual',
	'MERGE_MOD_FILE_OPTION'		=> 'Fusionar los différences e utilizar lo còdi modificat dins lo bloc en conflit',
	'MERGE_NEW_FILE_OPTION'		=> 'Fusionar los différences e utilizar lo còdi del nouveau fichièr dins lo bloc en conflit',
	'MERGE_SELECT_ERROR'		=> 'Los modes del fichièr fusionné en conflit son pas correctement seleccionats.',
	'MERGING_FILES'				=> 'Fusion dels différences',
	'MERGING_FILES_EXPLAIN'		=> 'Collecte actualament los modificacions finales dels fichièrs.<br /><br />Patientez jusqu\'a-n aqueste que phpBB termine toutes los opérations suls fichièrs modifiés.',

	'NEW_FILE'						=> 'Nouveau fichièr a jorn',
	'NEW_USERNAME'					=> 'Nouveau nom d\'utilizaire',
	'NO_AUTH_UPDATE'				=> 'Non autorizat a botar a jorn',
	'NO_ERRORS'						=> 'Pas cap de error',
	'NO_UPDATE_FILES'				=> 'Ne pas botar a jorn los fichièrs suivants',
	'NO_UPDATE_FILES_EXPLAIN'		=> 'Los fichièrs suivants son nouveaux o modifiés, mas leur repertòri es introuvable dins vòstre installacion. Se aquesta tièra conten dels fichièrs cap a d\'autres répertoires que language/ o estils/ que podètz aver a modificar, vòstre structure de repertòri e la mesa a jorn pòdon èsser incomplètes.',
	'NO_UPDATE_FILES_OUTDATED'		=> 'Pas cap de repertòri de mesa a jorn valide n\'es estat trobat, assurez-vos de bien aver transféré los fichièrs nécessaires.<br /><br />Vòstre installacion ne semble <strong>pas</strong> a jorn. Des mises a jorn son disponibles per vòstre version de phpBB %1$s, visitez <a href="http://www.phpbb.com/downloads/" rel="external">http://www.phpbb.com/downloads/</a> afin d\'obtenir lo pack correct per botar a jorn vòstre Version %2$s cap a la Version %3$s.',
	'NO_UPDATE_FILES_UP_TO_DATE'	=> 'Vòstre version es a jorn. Il n\'es pas necessari d\'utilizar l\'outil de mesa a jorn. Se vos souhaitez far una verificacion intégrale de vòstres fichièrs, assurez-vos d\'aver transféré los fichièrs de mesa a jorn corrects.',
	'NO_UPDATE_INFO'				=> 'Los entresenhas del fichièr de mesa a jorn son introuvables.',
	'NO_UPDATES_REQUIRED'			=> 'Pas cap de mesa a jorn necessari',
	'NO_VISIBLE_CHANGES'			=> 'Pas cap de modificacion visible',
	'NOTICE'						=> 'Avertissement',
	'NUM_CONFLICTS'					=> 'Nombre de conflits',
	'NUMBER_OF_FILES_COLLECTED'		=> 'I a actualament %1$d dels %2$d fichièrs collectés qui comportent dels différences.<br />Patientez jusqu\'a-n aqueste que la collecte dels fichièrs siá terminée.',

	'OLD_UPDATE_FILES'		=> 'Los fichièrs de mesa a jorn son pas a jorn. Los fichièrs trouvés per la mesa a jorn son per phpBB %1$s cap a phpBB %2$s mas la darrièra version de phpBB es la %3$s.',

	'PACKAGE_UPDATES_TO'				=> 'Lo package courant es a jorn a la version',
	'PERFORM_DATABASE_UPDATE'			=> 'Exécuter la mesa a jorn de la basa de donadas',
	'PERFORM_DATABASE_UPDATE_EXPLAIN'	=> 'Vous trouverez çai-jos un boton cap a lo script de mesa a jorn de la basa de donadas. La mesa a jorn de la basa de donadas pòt prendre un moment, merci de ne pas arrêter son exécution meteissa se elle semble bloquer. Aprèp la mesa a jorn de la basa de donadas, suivez los instructions per contunhar la procédure de mesa a jorn.',
	'PREVIOUS_VERSION'					=> 'Version précédente',
	'PROGRESS'							=> 'En cors',

	'RESULT'					=> 'Résultat',
	'RUN_DATABASE_SCRIPT'		=> 'Botar a jorn ma basa de donadas maintenant',

	'SELECT_DIFF_MODE'			=> 'Seleccionar lo mòde de comparaison',
	'SELECT_DOWNLOAD_FORMAT'	=> 'Seleccionar lo format de l\'archive a descargar',
	'SELECT_FTP_SETTINGS'		=> 'Seleccionar los réglages FTP',
	'SHOW_DIFF_CONFLICT'		=> 'Visualizar los différences/conflits',
	'SHOW_DIFF_FINAL'			=> 'Visualizar lo fichièr résultant',
	'SHOW_DIFF_MODIFIED'		=> 'Visualizar los différences fusionnées',
	'SHOW_DIFF_NEW'				=> 'Visualizar lo contengut dels fichièrs',
	'SHOW_DIFF_NEW_CONFLICT'	=> 'Visualizar los conflits',
	'SHOW_DIFF_NOT_MODIFIED'	=> 'Visualizar los différences',
	'SOME_QUERIES_FAILED'		=> 'Certaines requêtes ont échouées, los instructions e los errors son listées çai-jos.',
	'SQL'						=> 'SQL',
	'SQL_FAILURE_EXPLAIN'		=> 'Il n\'y a probablement pas lieu de s\'inquiéter, la mesa a jorn va contunhar. Se elle échoue, vos pourrez demander de l\'aide sus nos forums de support. Consultez lo <a href="../docs/README.html">README</a> per mai d\'entresenhas sus comment obtenir de l\'assistance.',
	'STAGE_FILE_CHECK'			=> 'Verificar los fichièrs',
	'STAGE_UPDATE_DB'			=> 'Botar a jorn la basa de donadas',
	'STAGE_UPDATE_FILES'		=> 'Botar a jorn los fichièrs',
	'STAGE_VERSION_CHECK'		=> 'Verificar la version',
	'STATUS_CONFLICT'			=> 'Fichièr modificat qui produit dels conflits',
	'STATUS_MODIFIED'			=> 'Fichièr modificat',
	'STATUS_NEW'				=> 'Nouveau fichièr',
	'STATUS_NEW_CONFLICT'		=> 'Nouveau fichièr en conflit',
	'STATUS_NOT_MODIFIED'		=> 'Fichièr non modificat',
	'STATUS_UP_TO_DATE'			=> 'Fichièr ja a jorn',

	'TOGGLE_DISPLAY'			=> 'Veire/Amagar la tièra dels fichièrs',
	
	'UPDATE_COMPLETED'				=> 'La mesa a jorn es terminée',
	'UPDATE_DATABASE'				=> 'Botar a jorn la basa de donadas',
	'UPDATE_DATABASE_EXPLAIN'		=> 'Dins la prochaine etapa, la basa de donadas serà mesa a jorn.',
	'UPDATE_DATABASE_SCHEMA'		=> 'Mise a jorn del schéma de la basa de donadas',
	'UPDATE_FILES'					=> 'Botar a jorn los fichièrs',
	'UPDATE_FILES_NOTICE'			=> 'Asseguratz-vos d\'aver mes tanben a jorn totes los fichièrs de vòstre forum, aqueste fichièr met sonque a jorn la basa de donadas.',
	'UPDATE_INSTALLATION'			=> 'Botar a jorn l\'installacion de phpBB',
	'UPDATE_INSTALLATION_EXPLAIN'	=> 'Avec aquesta option, il es possible de botar a jorn vòstre installacion de phpBB cap a la darrièra version.<br />Pendant lo processus, totes vòstres fichièrs seront vérifiés dins leur intégralité. Podètz revoir toutes los différences e los fichièrs abans la mesa a jorn.<br /><br />Lo fichièr de mesa a jorn lui-meteissa pòt èsser réalisé de deux manières différentes.</p><h2>Mise a jorn manuelle</h2><p>Avec aquesta mesa a jorn, vos ne téléchargez que vòstres réglages personnels dels fichièrs modifiés per èsser sûr de ne pas perdre los modificacions del fichièr qu\'avètz apporté. Aprèp aver descargat aqueste pack, vos devez botar a jorn manualament los fichièrs a leur emplacement correct a la rasiga de vòstre repertòri phpBB. Una fois terminé, podètz recommencer l\'etapa de verificacion del fichièr per verificar se avètz desplaçat los fichièrs correctement.</p><h2>Mise a jorn automatique per FTP</h2><p>Aquesta metòde es similaire a la première, mas sens la nécessité de descargar los fichièrs modifiés e de los transferir vos-meteissa. Cela serà fait a vòstre place. Afin d\'utilizar aquesta metòde, vos devez connaître los entresenhas de vòstre connexion FTP per çò que elles vos seront demandées. Una fois terminé, vos serez redirigé a la verificacion del fichièr una fois de plus per savoir se tout es estat mes a jorn correctement.<br /><br />',
	'UPDATE_INSTRUCTIONS'         => '

      <h1>Anóncia de mesa a jorn</h1>

      <p>Lisez <a href="%1$s" title="%1$s"><strong>aquesta anóncia per la darrièra mesa a jorn</strong></a> abans de contunhar lo processus de mesa a jorn, celle-ci pourrait conténer dels entresenhas utiles. Elle conten aussi plusieurs ligams ainsi que lo détail dels changements effectués dempuèi la darrièra version.</p>

      <br />

      <h1>Comment botar a jorn vòstre installacion amb lo pack de mesa a jorn automatique ?</h1>

      <p>Los recommandations de mesa a jorn per vòstre installacion indiquées aicí ne son valables que pel pack de mesa a jorn automatique. Podètz tanben botar a jorn vòstre installacion en utilizant los méthodes énumérées dins lo document INSTALL.html. Los etapas per botar a jorn automaticament phpBB3 son:</p>

      <ul estil="margin-left : 20px; font-size : 1.1em;">
         <li>Allez sus la pagina <a href="http://www.phpbb.com/downloads/" title="http://www.phpbb.com/downloads/">de descarga de phpBB.com</a> e téléchargez l\'archive de mesa a jorn automatique del forum : "Automatic Update Package".<br /><br /></li>
         <li>Décompressez l\'archive.<br /><br /></li>
         <li>Transférez lo repertòri install sus vòstre servidor FTP, a la rasiga de vòstre forum (ont vòstre fichièr config.php es situé).<br /><br /></li>
      </ul>

      <p>Una fois lo repertòri install transféré, vòstre forum serà inaccessible per los utilizaires normaux.<br /><br />
      <strong><a href="%2$s" title="%2$s">Podètz maintenant démarrer la mesa a jorn en pointant vòstre navigateur sul repertòri install</a>.</strong><br />
      <br />
     Vous serez alors guidé dins lo processus de mesa a jorn. Vous serez averti una fois la mesa a jorn effectuée.
      </p>
	',
	'UPDATE_INSTRUCTIONS_INCOMPLETE'	=> '

		<h1>Mise a jorn incomplète détectée</h1>

		<p>phpBB a détecté una mesa a jorn automatique incomplète. Asseguratz-vos qu\'avètz seguit chaque etapa amb l\'outil de mesa a jorn automatique. Vous trouverez çai-jos lo ligam per recommencer, o allez directement dins vòstre repertòri install.</p>
 ',
	'UPDATE_METHOD'					=> 'Metòde de mesa a jorn',
	'UPDATE_METHOD_EXPLAIN'			=> 'Podètz maintenant causir vòstre metòde de mesa a jorn préférée. En utilizant lo transferiment FTP, vos devrez entrer los entresenhas de vòstre compte FTP dins un formulari. Avec aquesta metòde, los fichièrs seront déplacés automaticament cap a lo nouvel emplacement e dels sauvegardes dels anciens fichièrs seront créées en ajoutant .bak al nom del fichièr. Se vos causissètz de descargar los fichièrs modifiés, vos pourrez los décompresser e los transferir manualament cap a leur emplacement correct plus tard.',
	'UPDATE_REQUIRES_FILE'			=> 'L\'outil de mesa a jorn nécessite que lo fichièr seguent siá présent : %s',
	'UPDATE_SUCCESS'				=> 'La mesa a jorn es estat effectuée.',
	'UPDATE_SUCCESS_EXPLAIN'		=> 'Totes los fichièrs son estats mes a jorn. La prochaine etapa implique de verificar totes los fichièrs una fois de plus per vos assurer qu\'ils son estats mes a jorn correctement.',
	'UPDATE_VERSION_OPTIMIZE'		=> 'Mise a jorn de la version e optimisation dels tables',
	'UPDATING_DATA'					=> 'Mise a jorn dels données',
	'UPDATING_TO_LATEST_STABLE'		=> 'Mise a jorn de la basa de donadas cap a la darrièra version stable',
	'UPDATED_VERSION'				=> 'Version mesa a jorn',
	'UPLOAD_METHOD'					=> 'Metòde de transferiment',

	'UPDATE_DB_SUCCESS'				=> 'La mesa a jorn de la basa de donadas es estat effectuée.',
	'USER_ACTIVE'					=> 'Utilizaire actif',
	'USER_INACTIVE'					=> 'Utilizaire inactiu',

	'VERSION_CHECK'				=> 'Vérification de la version',
	'VERSION_CHECK_EXPLAIN'		=> 'Vérifie que la version de phpBB actualament en fonctionnement es a jorn.',
	'VERSION_NOT_UP_TO_DATE'	=> 'Vòstre version de phpBB n\'es pas a jorn. Continuez lo processus de mesa a jorn.',
	'VERSION_NOT_UP_TO_DATE_ACP'=> 'Vòstre version de phpBB n\'es pas a jorn.<br />Vous trouverez çai-jos un ligam cap a l\'anóncia de sortie de la darrièra version e los instructions per efectuar aquesta mesa a jorn.',
	'VERSION_UP_TO_DATE'		=> 'Vòstre installacion es a jorn, aucune mesa a jorn n\'es disponible per vòstre version de phpBB. Podètz cependant contunhar e exécuter la verificacion de vòstres fichièrs.',
	'VERSION_UP_TO_DATE_ACP'	=> 'Vòstre installacion es a jorn, aucune mesa a jorn n\'es disponible per vòstre version de phpBB. Avètz pas besoin de botar a jorn vòstre installacion.',
	'VIEWING_FILE_CONTENTS'		=> 'Consultation del contengut dels fichièrs',
	'VIEWING_FILE_DIFF'			=> 'Consultation dels différences dels fichièrs',

	'WRONG_INFO_FILE_FORMAT'	=> 'Mauvais format del fichièr d\'information',
));

// Default database schema entries…
$lang = array_merge($lang, array(
	'CONFIG_BOARD_EMAIL_SIG'		=> 'Mercé, l\'équipe del forum',
	'CONFIG_SITE_DESC'				=> 'Descripcion de vòstre forum',
	'CONFIG_SITENAME'				=> 'votredomaine.com',

	'DEFAULT_INSTALL_POST'			=> 'Ceci es un exemple de messatge de vòstre installacion phpBB3. Tot semble fonctionner. Podètz se vos lo voulez suprimir aqueste messatge e contunhar a configurer vòstre forum. Durant lo processus d\'installacion, vòstre première catégorie e vòstre premier forum son assignés a un ensemble de permissions appropriées als grops d\'utilizaires que son los administrators, los robots, los moderaires globals, los convidats, los utilizaires inscrits e los utilizaires COPPA inscrits. Se vos causissètz de suprimir tanben vòstre première catégorie e vòstre premier forum, n\'oubliez pas de régler los permissions a totes los grops d\'utilizaires, per toutes los nouvelles catégories e forums que vos allez créer. Il es recommandé de renommer vòstre première catégorie e vòstre premier forum e de copiar lors permissions sus chaque nouvelle catégorie e forum novèl lors de leur création. Amusez-vos bien!',

	'EXT_GROUP_ARCHIVES'			=> 'Archives',
	'EXT_GROUP_DOCUMENTS'			=> 'Documents',
	'EXT_GROUP_DOWNLOADABLE_FILES'	=> 'Fichièrs téléchargeables',
	'EXT_GROUP_FLASH_FILES'			=> 'Fichièrs Flash',
	'EXT_GROUP_IMAGES'				=> 'Images',
	'EXT_GROUP_PLAIN_TEXT'			=> 'Tèxt',
	'EXT_GROUP_QUICKTIME_MEDIA'		=> 'Quicktime Media',
	'EXT_GROUP_REAL_MEDIA'			=> 'Real Media',
	'EXT_GROUP_WINDOWS_MEDIA'		=> 'Windows Media',

	'FORUMS_FIRST_CATEGORY'			=> 'Vòstre première catégorie',
	'FORUMS_TEST_FORUM_DESC'		=> 'Descripcion de vòstre premier forum.',
	'FORUMS_TEST_FORUM_TITLE'		=> 'Vòstre premier forum',

	'RANKS_SITE_ADMIN_TITLE'		=> 'Administrator del sit',
	'REPORT_WAREZ'					=> 'Lo messatge conten un ligam cap a un logiciel illégal o piraté.',
	'REPORT_SPAM'					=> 'Lo messatge raportat es estat posté dins lo seul but de promouvoir un sit web o un autre produit.',
	'REPORT_OFF_TOPIC'				=> 'Lo messatge raportat es hors tèma.',
	'REPORT_OTHER'					=> 'Lo messatge raportat n\'entre dins aucune autre catégorie, utilizatz lo champ d\'information complémentaire.',

	'SMILIES_ARROW'					=> 'Flèche',
	'SMILIES_CONFUSED'				=> 'Confus',
	'SMILIES_COOL'					=> 'Cool',
	'SMILIES_CRYING'				=> 'Très triste, en plors',
	'SMILIES_EMARRASSED'			=> 'Embarrassé',
	'SMILIES_EVIL'					=> 'Diable',
	'SMILIES_EXCLAMATION'			=> 'Exclamation',
	'SMILIES_GEEK'					=> 'Geek',
	'SMILIES_IDEA'					=> 'Idée',
	'SMILIES_LAUGHING'				=> 'Rire',
	'SMILIES_MAD'					=> 'Fou',
	'SMILIES_MR_GREEN'				=> 'M. Vert',
	'SMILIES_NEUTRAL'				=> 'Neutre',
	'SMILIES_QUESTION'				=> 'Question',
	'SMILIES_RAZZ'					=> 'Tire la langue',
	'SMILIES_ROLLING_EYES'			=> 'Yeux tournants',
	'SMILIES_SAD'					=> 'Triste',
	'SMILIES_SHOCKED'				=> 'Choqué',
	'SMILIES_SMILE'					=> 'Sourire',
	'SMILIES_SURPRISED'				=> 'Surprise',
	'SMILIES_TWISTED_EVIL'			=> 'Diable rieur',
	'SMILIES_UBER_GEEK'				=> 'Geek barbu',
	'SMILIES_VERY_HAPPY'			=> 'Très content',
	'SMILIES_WINK'					=> 'Clin d\'oeil',

	'TOPICS_TOPIC_TITLE'			=> 'Benvenguda sus phpBB3',
));

 ?>
