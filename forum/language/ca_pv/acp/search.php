<?php
/**
*
* acp_search [Catalan (Valencian)]
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
	'ACP_SEARCH_INDEX_EXPLAIN'				=> 'Ací podeu gestionar els temes relacionats amb la indexació a les cerques. Normalment només es fa servir un, per això potser us interessa esborrar les altres indexacions de cerca.',
	'ACP_SEARCH_SETTINGS_EXPLAIN'			=> 'Ací podeu definir les opcions de cerca que es faran servir a l\'hora d\'indexar i cercar missatges o temes.',

	'COMMON_WORD_THRESHOLD'					=> 'Umbral de paraula comú',
	'COMMON_WORD_THRESHOLD_EXPLAIN'			=> 'Les paraules que estiguen presents en major percentatge de tots els missatges als quals es cercarà es consideraran com a comunes. Aquestes paraules comunes s\'ignoraran als formularis de cerca. Establiu cero per deshabilitar l\'opció. Això només té efecte si es troben més de 100 missatges.',
	'CONFIRM_SEARCH_BACKEND'				=> 'Esteu segurs que voleu canviar a un altre entorn de cerca?. Després del canvi haureu de crear índex per al nou entorn de cerca. Si no penseu fer servir l\'entorn de cerca anterior, podeu suprimir-lo per alliberar recursos del sistema.',
	'CONTINUE_DELETING_INDEX'				=> 'Continue previous index removal process',
	'CONTINUE_DELETING_INDEX_EXPLAIN'		=> 'S\'ha iniciat un procés d\'eliminació d\'índex. Per accedir a l\'índex de cerca, abans heu de deixar que acabe el procés o cancel·lar-lo.',
	'CONTINUE_INDEXING'						=> 'Continua amb processos d\'indexació anteriors',
	'CONTINUE_INDEXING_EXPLAIN'				=> 'S\'ha iniciat un procés d\'eliminació d\'índex. Per accedir a l\'índex de cerca, abans heu de deixar que acabe el procés o cancel·lar-lo.',
	'CREATE_INDEX'							=> 'Crea índex',

	'DELETE_INDEX'							=> 'Suprimeix índex',
	'DELETING_INDEX_IN_PROGRESS'			=> 'S\'està suprimint l\'índex',
	'DELETING_INDEX_IN_PROGRESS_EXPLAIN'	=> 'L\'entorn de cerca està netejant el seu índex. Això pot trigar uns minuts.',

	'FULLTEXT_MYSQL_INCOMPATIBLE_VERSION'	=> 'L\'entorn fulltext MySQL només es pot fer servir amb MySQ4 i posteriors.',
	'FULLTEXT_MYSQL_NOT_MYISAM'				=> 'Els índex MySQL fulltext només es poden fer servir amb les taules MyISAM.',
	'FULLTEXT_MYSQL_TOTAL_POSTS'			=> 'Nombre total de missatges indexats',
	'FULLTEXT_MYSQL_MBSTRING'				=> 'Suport per a caràcters no llatins UTF-8 fent servir mbstring:',
	'FULLTEXT_MYSQL_PCRE'					=> 'Suport per a caràcters no llatins UTF-8 fent servir PCRE:',
	'FULLTEXT_MYSQL_MBSTRING_EXPLAIN'		=> 'Si PCRE no té propietats de caràcters unicode, el motor de cerca triarà el motor mbstring.',
	'FULLTEXT_MYSQL_PCRE_EXPLAIN'			=> 'L\'entorn de cerca requereix propietats de caràcters unicode, només disponibles a PHP 4.4, 5.1 i superiors, si voleu cercar caràcters no llatins.',

	'GENERAL_SEARCH_SETTINGS'				=> 'Opcions generals de cerca',
	'GO_TO_SEARCH_INDEX'					=> 'Vés a la pàgina d\'índex de cerca',

	'INDEX_STATS'							=> 'Estadístiques de l\'índex',
	'INDEXING_IN_PROGRESS'					=> 'S\'està indexant',
	'INDEXING_IN_PROGRESS_EXPLAIN'			=> 'L\'entorn de cerca està indexant els missatges del fòrum. Això pot trigar uns minuts segons la seua mida.',

	'LIMIT_SEARCH_LOAD'						=> 'Límit de temps de cerca',
	'LIMIT_SEARCH_LOAD_EXPLAIN'				=> 'Si el temps de cerca excedeix aquest temps el sistema passarà a fora de línia. 1.0 equival a un ús del 100% del processador. Això només funciona a servidors UNIX.',

	'MAX_SEARCH_CHARS'						=> 'Nombre màxim de caràcters indexats a la cerca',
	'MAX_SEARCH_CHARS_EXPLAIN'				=> 'S\'indexaran les paraules que tinguen com a màxim els caràcters marcats ací.',
	'MIN_SEARCH_CHARS'						=> 'Nombre mínim de caràcters indexats a la cerca',
	'MIN_SEARCH_CHARS_EXPLAIN'				=> 'S\'indexaran les paraules que tinguen com a mínim els caràcters marcats ací.',
	'MIN_SEARCH_AUTHOR_CHARS'				=> 'Min author name characters',
	'MIN_SEARCH_AUTHOR_CHARS_EXPLAIN'		=> 'Els usuaris hauran d\'introduir almenys aquest nombre de caràcters quan facen una cerca amb asterisc',

	'PROGRESS_BAR'							=> 'Barra de progrés',

	'SEARCH_GUEST_INTERVAL'					=> 'Mida de l\'interval de cerca de visitats',
	'SEARCH_GUEST_INTERVAL_EXPLAIN'			=> 'Nombre de segons que els visitants han d\'esperar entre cerques.',
	'SEARCH_INDEX_CREATE_REDIRECT'			=> 'S\'han indexat tots els missatges amb id més gran de %1$d, dels quals %2$d estaven dins d\'aquest pas.<br />El ràtio de cerca actual és aproximadament %3$.1f de missatges per segon.<br />S\'està indexant…',
	'SEARCH_INDEX_DELETE_REDIRECT'			=> 'S\'han suprimit tots els missatges amb id més gran de %1$d.<br />S\'està suprimint…',
	'SEARCH_INDEX_CREATED'					=> 'S\'han indexat els missatges a la base de dades del fòrum.',
	'SEARCH_INDEX_REMOVED'					=> 'S\'ha suprimit l\'índex de cerca d\'aquest entorn.',
	'SEARCH_INTERVAL'						=> 'Mida de l\'interval de cerca dels usuaris',
	'SEARCH_INTERVAL_EXPLAIN'				=> 'Nombre de segons que els usuaris han d\'esperar entre cerques. Aquest interval és independent de l\'usuari.',
	'SEARCH_STORE_RESULTS'					=> 'Mida de la memòria cau al resultat de la cerca',
	'SEARCH_STORE_RESULTS_EXPLAIN'			=> 'Els resultats de la cerca emmagatzemats a la memòria cau s\'esborraran després d\'aquest temps, en segons. Establiu 0 si voleu deshabilitar l\'opció.',
	'SEARCH_TYPE'							=> 'Entorn de cerca',
	'SEARCH_TYPE_EXPLAIN'					=> 'phpBB us permet triar l\'entorn que s\'està fent servir per cercar text als missatges. Per defecte la cerca farà servir el motor fulltext del phpBB.',
	'SWITCHED_SEARCH_BACKEND'				=> 'Heu canviat l\'entorn de cerca. Abans de fer-lo servir, heu d\'assegurar-vos que hi ha un índex per a l\'entorn que heu triat.',

	'TOTAL_WORDS'							=> 'Nombre total de paraules indexades',
	'TOTAL_MATCHES'							=> 'Nombre total de relacions entre paraules i missatges indexats',

	'YES_SEARCH'							=> 'Habilita instal·lacions de cerca',
	'YES_SEARCH_EXPLAIN'					=> 'Permet a l\'usuari que està cercant cercar usuaris.',
	'YES_SEARCH_UPDATE'						=> 'Habilita actualització fulltext',
	'YES_SEARCH_UPDATE_EXPLAIN'				=> 'Updating of fulltext indexes when posting, overridden if search is disabled.',
));

?>
