<?php
/**
*
* acp_profile [Catalan (Valencian)]
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

// Custom profile fields
$lang = array_merge($lang, array(
	'ADDED_PROFILE_FIELD'	=> 'S\'ha afegit un camp personalitzat pel perfil.',
	'ALPHA_ONLY'			=> 'Només alfanumèric',
	'ALPHA_SPACERS'			=> 'Alfanumèric i espais',
	'ALWAYS_TODAY'			=> 'Sempre la data actual',

	'BOOL_ENTRIES_EXPLAIN'	=> 'Introduïu ara les vostres opcions',
	'BOOL_TYPE_EXPLAIN'		=> 'Defineix el tipus, casella de selecció o botons de ràdio. Una casella de selecció només es mostra si l\'usuari la marca. En aquest cas, la <strong>segona</strong> opció d\'idioma es farà servir. Els butons de ràdio es mostraran sense importar el seu valor.',

	'CHANGED_PROFILE_FIELD'		=> 'S\'ha modificat el camp del perfil.',
	'CHARS_ANY'					=> 'Qualsevol caràcter',
	'CHECKBOX'					=> 'Casella de selecció',
	'COLUMNS'					=> 'Columnes',
	'CP_LANG_DEFAULT_VALUE'		=> 'Valor per defecte',
	'CP_LANG_EXPLAIN'			=> 'Descripció del camp',
	'CP_LANG_EXPLAIN_EXPLAIN'	=> 'L\'explicació d\'aquest camp que es mostrarà a l\'usuari.',
	'CP_LANG_NAME'				=> 'Nom/títol del camp que es mostrarà a l\'usuari',
	'CP_LANG_OPTIONS'			=> 'Opcions',
	'CREATE_NEW_FIELD'			=> 'Crea un nou camp',
	'CUSTOM_FIELDS_NOT_TRANSLATED'	=> 'Com a mínim un camp personalitzat del perfil no s\'ha traduït encara. Introduïu la informació requerida clicant sobre l\'enllaç “Tradueix”.',

	'DEFAULT_ISO_LANGUAGE'			=> 'Idioma per defecte [%s]',
	'DEFAULT_LANGUAGE_NOT_FILLED'	=> 'Les entrades d\'idioma per a la llengua per defecte no s\'omplen per a aquest camp del perfil.',
	'DEFAULT_VALUE'					=> 'Valor per defecte',
	'DELETE_PROFILE_FIELD'			=> 'Suprimeix camp del perfil',
	'DELETE_PROFILE_FIELD_CONFIRM'	=> 'Esteu segurs que voleu suprimir aquest camp del perfil?',
	'DISPLAY_AT_PROFILE'			=> 'Mostra al panell de control de l\'usuari',
	'DISPLAY_AT_PROFILE_EXPLAIN'	=> 'L\'usuari pot canviar aquest camp del perfil dins del seu panell de control.',
	'DISPLAY_AT_REGISTER'			=> 'Mostra a la pantalla de registre',
	'DISPLAY_AT_REGISTER_EXPLAIN'	=> 'Si aquesta opció és habilitada, el camp es mostrarà a la pantalla de registre i es podrà canviar al panell de control de l\'usuari.',
	'DISPLAY_PROFILE_FIELD'			=> 'Mostra el camp del perfil',
	'DISPLAY_PROFILE_FIELD_EXPLAIN'	=> 'El camp del perfil es mostrarà a tots els llocs permesos als paràmetres de càrrega. Fixant-ho com a “no” amagarà el camp a les pàgines de tema, perfils i llista de membres.',
	'DROPDOWN_ENTRIES_EXPLAIN'		=> 'Introduïu ara les opcions, cada valor a una línia.',

	'EDIT_DROPDOWN_LANG_EXPLAIN'	=> 'Podeu canviar les vostres opcions de text i també afegir noves opcions al final. No podeu afegir opcions entre les opcions existents, sempre s\'han d\'afegir al final.',
	'EMPTY_FIELD_IDENT'				=> 'Identificació buida',
	'EMPTY_USER_FIELD_NAME'			=> 'Introduïu un nom/títol per al camp',
	'ENTRIES'						=> 'Entrades',
	'EVERYTHING_OK'					=> 'Tot bé',

	'FIELD_BOOL'				=> 'Booleà (Sí/No)',
	'FIELD_DATE'				=> 'Data',
	'FIELD_DESCRIPTION'			=> 'Descripció del camp',
	'FIELD_DESCRIPTION_EXPLAIN'	=> 'L\'explicació d\'aquest camp que es presenta a l\'usuari.',
	'FIELD_DROPDOWN'			=> 'Dropdown box',
	'FIELD_IDENT'				=> 'Identificació del camp',
	'FIELD_IDENT_ALREADY_EXIST'	=> 'The chosen field identification already exist. Please choose another name.',
	'FIELD_IDENT_EXPLAIN'		=> 'The field identification is a name to identify the profile field within the database and the templates.',
	'FIELD_INT'					=> 'Números',
	'FIELD_LENGTH'				=> 'Mida de la caixa d\'entrada',
	'FIELD_NOT_FOUND'			=> 'No s\'ha trobat el camp del perfil.',
	'FIELD_STRING'				=> 'Camp de text',
	'FIELD_TEXT'				=> 'Àrea de text',
	'FIELD_TYPE'				=> 'Tipus de camp',
	'FIELD_TYPE_EXPLAIN'		=> 'No podreu canviar el tipus de camp més tard.',
	'FIELD_VALIDATION'			=> 'Validació del camp',
	'FIRST_OPTION'				=> 'Primera opció',

	'HIDE_PROFILE_FIELD'			=> 'Amaga camp del perfil',
	'HIDE_PROFILE_FIELD_EXPLAIN'	=> 'Només administradors i moderadors poden veure/completar aquest camp del perfil. Si aquesta opció és habilitada, aquest camp del perfil només es mostrarà als perfils dels usuaris.',

	'INVALID_CHARS_FIELD_IDENT'	=> 'La identificació del perfil només pot contindre els caràcters a-z i _',
	'INVALID_FIELD_IDENT_LEN'	=> 'La identificació del perfil només pot contindre 17 caràcters com a màxim',
	'ISO_LANGUAGE'				=> 'Idioma [%s]',

	'LANG_SPECIFIC_OPTIONS'		=> 'Opcions específiques de llengua [<strong>%s</strong>]',

	'MAX_FIELD_CHARS'		=> 'Nombre màxim de caràcters',
	'MAX_FIELD_NUMBER'		=> 'Número màxim permès',
	'MIN_FIELD_CHARS'		=> 'Número mínim de caràcters permès',
	'MIN_FIELD_NUMBER'		=> 'Número mínim permès',

	'NO_FIELD_ENTRIES'			=> 'No hi ha cap entrada definida',
	'NO_FIELD_ID'				=> 'No s\'ha especificat cap id de camp.',
	'NO_FIELD_TYPE'				=> 'No s\'ha especificat el tipus de camp.',
	'NO_VALUE_OPTION'			=> 'Opció igual al valor no introduïda',
	'NO_VALUE_OPTION_EXPLAIN'	=> 'Valor per a una no-entrada. Si el camp es requereix, l\'usuari obté un error si tria l\'opció ací seleccionada.',
	'NUMBERS_ONLY'				=> 'Només números (0-9)',

	'PROFILE_BASIC_OPTIONS'		=> 'Opcions bàsiques',
	'PROFILE_FIELD_ACTIVATED'	=> 'S\'ha activat el camp del perfil.',
	'PROFILE_FIELD_DEACTIVATED'	=> 'S\'ha desactivat el camp del perfil.',
	'PROFILE_LANG_OPTIONS'		=> 'Opcions específiques de llengua',
	'PROFILE_TYPE_OPTIONS'		=> 'Opcions específiques del tipus de perfil',

	'RADIO_BUTTONS'				=> 'Botons de ràdio',
	'REMOVED_PROFILE_FIELD'		=> 'S\'ha suprimit el camp del perfil.',
	'REQUIRED_FIELD'			=> 'Camp requerit',
	'REQUIRED_FIELD_EXPLAIN'	=> 'Fes que aquest camp siga completat o escpecificat per l\'usuari. Això mostrarà el camp al moment del registre i també al panell de control de l\'usuari.',
	'ROWS'						=> 'Files',

	'SAVE'							=> 'Desa',
	'SECOND_OPTION'					=> 'Segona opció',
	'STEP_1_EXPLAIN_CREATE'			=> 'Ací podeu introduir els primers paràmetres bàsics del nou camp del perfil. Aquesta informació és necessària per al segon pas on podreu establir la resta d\'opcions.',
	'STEP_1_EXPLAIN_EDIT'			=> 'Ací podeu canviar els paràmetres bàsics del vostre camp de perfil. Les opcions rellevants es recalculen al segon pas.',
	'STEP_1_TITLE_CREATE'			=> 'Afegeix camp de perfil',
	'STEP_1_TITLE_EDIT'				=> 'Edita camp de perfil',
	'STEP_2_EXPLAIN_CREATE'			=> 'Ací podeu definir algunes opcions comunes que podeu ajustar.',
	'STEP_2_EXPLAIN_EDIT'			=> 'Ací podeu canviar algunes opcions comunes. <br /><strong>Els canvis ací fets no afectaran als perfils ja existents introduits pels usuaris.</strong>',
	'STEP_2_TITLE_CREATE'			=> 'Opcions específiques del tipus de perfil',
	'STEP_2_TITLE_EDIT'				=> 'Opcions específiques del tipus de perfil',
	'STEP_3_EXPLAIN_CREATE'			=> 'Si teniu més d\'un paquet de llengua instal·lat al fòrum, heu d\'omplir els restants camps de llengua també. El camp de perfil funcionarà amb l\'idioma que estiga per defecte. Més endavant podeu completar els restants camps de cada llengua.',
	'STEP_3_EXPLAIN_EDIT'			=> 'Si teniu més d\'un paquet de llengua instal·lat al fòrum, podeu canviar els restants camps de cada llengua. El perfil treballarà amb la l\'idioma que estiga per defecte.',
	'STEP_3_TITLE_CREATE'			=> 'Definicions restants d\'idioma',
	'STEP_3_TITLE_EDIT'				=> 'Definicions d\'idioma',
	'STRING_DEFAULT_VALUE_EXPLAIN'	=> 'Introduïu la frase per defecte que es mostrarà, un valor per defecte. Deixeu-ho buit si voleu que es mostre buit.',

	'TEXT_DEFAULT_VALUE_EXPLAIN'	=> 'Introduïu el text per defecte que es mostrarà, un valor per defecte. Deixeu-ho buit si voleu que es mostre buit.',
	'TRANSLATE'						=> 'Tradueix',

	'USER_FIELD_NAME'	=> 'Nom/títol del camp que es presenta a l\'usuari',

	'VISIBILITY_OPTION'				=> 'Opció de visibilitat',
));

?>
