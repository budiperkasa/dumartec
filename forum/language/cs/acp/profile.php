<?php
/** 
*
* acp_profile.php [Čeština]
*
* @package language
* @version $Id: profile.php 450 2008-12-06 12:50:06Z ameeck $
* @copyright (c)  2008 phpBB.cz
* @license http://opensource.org/licenses/gpl-license.php GNU Public License 
* Original copyright: (c) 2005 phpBB Group
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

// Custom profile fields
$lang = array_merge($lang, array(
	'ADDED_PROFILE_FIELD'	=> 'Vlastní položka v&nbsp;profilu byla přidána.',
	'ALPHA_ONLY'					=> 'Pouze alfanumerické znaky',
	'ALPHA_SPACERS'				=> 'Alfanumerické znaky a mezery',
	'ALWAYS_TODAY'				=> 'Vždy aktuální datum',

	'BOOL_ENTRIES_EXPLAIN'	=> 'Vložte svá nastavení zde',
	'BOOL_TYPE_EXPLAIN'			=> 'Zvolte typ, buď zaškrtávací pole nebo přepínatelné tlačítko. Zaškrtávací pole bude zobrazeno pouze tehdy, když bude zaškrtlé u uživatele. V tomto případě bude použita <strong>druhá</strong> varianta překladu/zobrazení. Přepínatelné tlačítka budou zobrazena nehledě na jejich hodnotu.',

	'CHANGED_PROFILE_FIELD'			=> 'Položka profilu byla změněna',
	'CHARS_ANY'									=> 'Jakýkoliv znak',
	'CHECKBOX'									=> 'Zaškrtávací pole',
	'COLUMNS'										=> 'sloupce',
	'CP_LANG_DEFAULT_VALUE'			=> 'Výchozí hodnota',
	'CP_LANG_EXPLAIN'						=> 'Popis položky',
	'CP_LANG_EXPLAIN_EXPLAIN'		=> 'Vysvětlení položky pro uživatele',
	'CP_LANG_NAME'							=> 'Název/popisek položky zobrazený uživateli',
	'CP_LANG_OPTIONS'								=> 'Možnosti',
	'CREATE_NEW_FIELD'							=> 'Vytvořit novou položku',
	'CUSTOM_FIELDS_NOT_TRANSLATED'	=> 'Alespoň jedna vlastní položka ještě nebyla přeložena. Vložte potřebné informace kliknutím na odkaz „Přeložit“.',

	'DEFAULT_ISO_LANGUAGE'					=> 'Výchozí jazyk [%s]',
	'DEFAULT_LANGUAGE_NOT_FILLED'		=> 'Přeložené výrazy ve výchozím jazyku nebyly vyplněny pro tuto položku',
	'DEFAULT_VALUE'									=> 'Výchozí hodnota',
	'DELETE_PROFILE_FIELD'					=> 'Odstranit položku profilu',
	'DELETE_PROFILE_FIELD_CONFIRM'	=> 'Opravdu chcete odstranit tuto položku?',
	'DISPLAY_AT_PROFILE'						=> 'Zobrazit v&nbsp;uživatelském panelu',
	'DISPLAY_AT_PROFILE_EXPLAIN'		=> 'Uživatel si může změnit toto pole ve svém uživatelském panelu.',
	'DISPLAY_AT_REGISTER'						=> 'Zobrazit při registraci',
	'DISPLAY_AT_REGISTER_EXPLAIN'		=> 'Zobrazí položku již při registraci. Uživatel ji bude moct později změnit v uživatelském panelu.',
	'DISPLAY_PROFILE_FIELD'					=> 'Zobrazit položku profilu',
	'DISPLAY_PROFILE_FIELD_EXPLAIN'	=> 'Tato položka bude zobrazena ve všech místech, které jsou povolená v nastavení zatížení. Přepnutím na „Ne“ se tato položka už nebude zobrazovat v tématech, profilech a seznamu uživatelů.',
	'DROPDOWN_ENTRIES_EXPLAIN'			=> 'Vložte možnosti zde, každou možnost na nový řádek.',

	'EDIT_DROPDOWN_LANG_EXPLAIN'	=> 'Mějte na vědomí, že můžete měnit názvy a popisy možností a přidávat další na konec. Není doporučeno přidávat pole mezi již existující položky, mohlo by to způsobit přiřazení špatné možnosti uživatelům. Toto by se také mohlo stát, pokud odstranítě některou z možností uprostřed. Běžně ale bude po odstranění možnosti uživatelům navrácena výchozí hodnota.',
	'EMPTY_FIELD_IDENT'						=> 'Označení prázdného pole',
	'EMPTY_USER_FIELD_NAME'				=> 'Prosím vložte název a popisek položky',
	'ENTRIES'											=> 'Možnosti',
	'EVERYTHING_OK'								=> 'Všechno v&nbsp;pořádku',

	'FIELD_BOOL'								=> 'Booleovský (Ano/Ne)',
	'FIELD_DATE'								=> 'Datum',
	'FIELD_DESCRIPTION'					=> 'Popis pole',
	'FIELD_DESCRIPTION_EXPLAIN'	=> 'Vysvětlení pole, které bude zobrazeno uživatelům.',
	'FIELD_DROPDOWN'						=> 'Rolovací menu',
	'FIELD_IDENT'								=> 'Označení pole',
	'FIELD_IDENT_ALREADY_EXIST'	=> 'Vybrané označení pole již existuje, vyberte prosím jiné.',
	'FIELD_IDENT_EXPLAIN'				=> 'Označení pole je název, pod kterým bude pole uloženo v&nbsp;databázi a šablonách.',
	'FIELD_INT'									=> 'Číselné hodnoty',
	'FIELD_LENGTH'							=> 'Délka vstupního pole',
	'FIELD_NOT_FOUND'						=> 'Pole profilu nebylo nalezeno',
	'FIELD_STRING'							=> 'Jedno textové pole',
	'FIELD_TEXT'								=> 'Rozsáhlé vstupní pole (textarea)',
	'FIELD_TYPE'								=> 'Druh pole',
	'FIELD_TYPE_EXPLAIN'				=> 'Druh pole již není změnitelný.',
	'FIELD_VALIDATION'					=> 'Povolené znaky',
	'FIRST_OPTION'							=> 'První možnost',

	'HIDE_PROFILE_FIELD'					=> 'Skrýt položku profilu',
	'HIDE_PROFILE_FIELD_EXPLAIN'	=> 'Jen administrátoři, moderátoři a samotný uživatel mohou vidět nebo upravovat tuto položku. Položka bude zobrazena pouze v&nbsp;profilech uživatelů. V případě, že bude vypnuta možnost Zobrazit v&nbsp;uživatelském panelu, položku uvidí a budou moci měnit pouze administrátoři a moderátoři.',

	'INVALID_CHARS_FIELD_IDENT'	=> 'Označení pole může obsahovat jen málé a–z a _.',
	'INVALID_FIELD_IDENT_LEN'		=> 'Označení pole může mít nejvíce 17 znaků.',
	'ISO_LANGUAGE'							=> 'Jazyk [%s]',

	'LANG_SPECIFIC_OPTIONS'	=> 'Specifická nastavení jazyka [<strong>%s</strong>]',

	'MAX_FIELD_CHARS'		=> 'Maximální počet znaků',
	'MAX_FIELD_NUMBER'	=> 'Nejvyšší povolené číslo',
	'MIN_FIELD_CHARS'		=> 'Minimální počet znaků',
	'MIN_FIELD_NUMBER'	=> 'Nejmenší povolené číslo',

	'NO_FIELD_ENTRIES'				=> 'Nebyly zadány žádné záznamy.',
	'NO_FIELD_ID'							=> 'Nebylo zvoleno žádné id pole.',
	'NO_FIELD_TYPE'						=> 'Nebyl přiřazen žádný druh položky.',
	'NO_VALUE_OPTION'					=> 'Možnost odpovídající nevyplnění hodnoty',
	'NO_VALUE_OPTION_EXPLAIN'	=> 'Hodnota nastavena pokud není pole vyplněno. Pokud je pole povinné, uživatel obdrží chybu s&nbsp;tím, že nelze zadat hodnotu uvedenou zde.',
	'NUMBERS_ONLY'						=> 'Pouze čísla (0–9)',

	'PROFILE_BASIC_OPTIONS'			=> 'Základní nastavení',
	'PROFILE_FIELD_ACTIVATED'		=> 'Položka profilu byla aktivována',
	'PROFILE_FIELD_DEACTIVATED'	=> 'Položka profilu byla deaktivována',
	'PROFILE_LANG_OPTIONS'			=> 'Specifická nastavení jazyka',
	'PROFILE_TYPE_OPTIONS'			=> 'Specifická nastavení typu položky',

	'RADIO_BUTTONS'						=> 'Přepínací tlačítka',
	'REMOVED_PROFILE_FIELD'		=> 'Položka byla odstraněna',
	'REQUIRED_FIELD'					=> 'Povinné pole',
	'REQUIRED_FIELD_EXPLAIN'	=> 'Položka profilu bude muset být vyplněna uživatelem nebo administrátorem. Pokud je vypnuta možnost Zobrazit při&nbsp;registraci, položka bude vyžadována pouze při změnách v profilu.',
	'ROWS'										=> 'řady',

	'SAVE'										=> 'Uložit',
	'SECOND_OPTION'						=> 'Druhá možnost',
	'STEP_1_EXPLAIN_CREATE'		=> 'Zde zvolíte hlavní parametry a nastavení nové položky. Tyto nastavení jsou potřebné pro druhý krok, kde budete moci přidat další možnosti a doladit vložená nastavení.',
	'STEP_1_EXPLAIN_EDIT'			=> 'Zde můžete změnit základní nastavení vaší položky. Nastavení, které je nutné přepočítat nebo přepsat pro zachování konzistence budou automaticky změněny a dále dostupné k upravení v druhém kroku.',
	'STEP_1_TITLE_CREATE'			=> 'Přidat položku profilu',
	'STEP_1_TITLE_EDIT'				=> 'Upravit položku profilu',
	'STEP_2_EXPLAIN_CREATE'		=> 'Zde nastavte možnosti, které jsou specifické pro tento druh vstupního pole, např. délku, rozsah nebo povolené znaky.',
	'STEP_2_EXPLAIN_EDIT'			=> 'Zde nastavte možnosti, které jsou specifické pro tento druh vstupního pole, např. délku, rozsah nebo povolené znaky.<br /><strong>Berte na vědomí, že změny, které provedete, neovlivní data, které byly dosud zadané.</strong>',
	'STEP_2_TITLE_CREATE'			=> 'Specifická nastavení typu',
	'STEP_2_TITLE_EDIT'				=> 'Specifická nastavení typu',
	'STEP_3_EXPLAIN_CREATE'		=> 'Vzhledem k&nbsp;tomu, že máte nainstalován na fóru více než jeden jazyk, měli byste vyplnit názvy polí i pro další jazyky. Položka bude fungovat s&nbsp;výchozím jazykem, další jazyky můžete doplnit později.',
	'STEP_3_EXPLAIN_EDIT'			=> 'Vzhledem k&nbsp;tomu, že máte nainstalován na fóru více než jeden jazyk, měli byste vyplnit názvy polí i pro další jazyky. Položka bude zatím fungovat s&nbsp;výchozím jazykem.',
	'STEP_3_TITLE_CREATE'			=> 'Zbývající definice popisů pro další jazyky',
	'STEP_3_TITLE_EDIT'				=> 'Definice názvů pro další jazyky',
	'STRING_DEFAULT_VALUE_EXPLAIN'	=> 'Vložte řetězec, který bude zobrazen, pokud je položka nevyplněná. Nechte toto pole prázdné, pokud má být výchozí hodnota také prázdná.',

	'TEXT_DEFAULT_VALUE_EXPLAIN'	=> 'Vložte text, který bude zobrazen, pokud je položka nevyplněná. Nechte toto pole prázdné, pokud má být výchozí hodnota také prázdná.',
	'TRANSLATE'										=> 'Přeložit',

	'USER_FIELD_NAME'		=> 'Název či popisek pole zobrazený uživateli',

	'VISIBILITY_OPTION'	=> 'Možnosti zobrazení',
));

?>