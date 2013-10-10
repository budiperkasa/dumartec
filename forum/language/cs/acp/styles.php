<?php
/** 
*
* acp_styles [Čeština]
*
* @package language
* @version $Id: styles.php 449 2008-12-03 13:26:59Z ameeck $
* @copyright (c)  2007 phpBB.cz
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

$lang = array_merge($lang, array(
	'ACP_IMAGESETS_EXPLAIN'	=> 'Sada obrázků obsahuje všechny obrázky pro tlačítka, fóra, složky a mnoho dalších věcí na celém fóru. Zde můžete upravovat, exportovat nebo odstraňovat existující sady obrázků nebo přidat a importovat nové sady.',
	'ACP_STYLES_EXPLAIN'	=> 'Zde můžete spravovat dostupné styly pro vaše fórum. Styl se skládá z šablon, skinu, a sady obrázků. Můžete upravovat existující styly, odstraňovat je, deaktivovat, reaktivovat, vytvářet, importovat a mnoho dalšího. Můžete se podívat jak daný styl vypadá použitím funkce náhled. Zvolený výchozí styl je označen hvězdičkou (*). Zde je také uvedeno, kolik uživatelů používá tento styl.',
	'ACP_TEMPLATES_EXPLAIN'	=> 'Šablona zahrnuje všechen HTML kód, který tvoří strukturu stránky. Zde můžete upravovat existující šablony, exportovat je, importovat nebo se podívat jak daný styl vypadá použitím funkce náhled. Můžete také upravit šablonu, která překládá BBCode značky.',
	'ACP_THEMES_EXPLAIN'	=> 'Zde můžete vytvářet, instalovat, upravovat, odstraňovat nebo exportovat skiny. Skin je kombinace barev a obrázků, které jsou aplikovány na šablony pro utvoření finálního vzhledu vašeho fóra. Možnosti nastavení jsou závislé na konfiguraci vašeho serveru a phpBB, viz. manuál pro podrobnosti. Při vytváření nového skinu také můžete použít stávající jako základ.',
	'ADD_IMAGESET'	=> 'Vytvořit sadu obrázků',
	'ADD_IMAGESET_EXPLAIN'	=> 'Zde můžete vytvořit novou sadu obrázků. Podle nastavení serveru a oprávnění k&nbsp;souborům vám zde budou nabídnuty různé možnosti nastavení. Např. budete moci založit novou sadu obrázků na již existující. Budete také moci importovat nebo exportovat(z/do ukládací složky) archiv se sadou obrázků. Pokud budete importovat sadu obrázků z archivu, název může být zvolen podle názvu toho archivu, pokud tak chcete učinit, nechte pole názvu sady prázdné.',
	'ADD_STYLE'	=> 'Vytvořit styl',
	'ADD_STYLE_EXPLAIN'	=> 'Zde můžete vytvořit nový styl. Podle nastavení serveru a oprávnění k&nbsp;souborům vám zde budou nabídnuty různé možnosti nastavení. Např. budete moci založit nový styl na již existujícím. Budete také moci importovat nebo exportovat(z/do ukládací složky) archiv se stylem. Pokud uploadnete nebo importujete styl, název bude zjištěn automaticky.',
	'ADD_TEMPLATE'	=> 'Vytvořit šablonu',
	'ADD_TEMPLATE_EXPLAIN'	=> 'Zde můžete přidat nové šablony. Podle nastavení serveru a oprávnění k&nbsp;souborům vám zde budou nabídnuty různé možnosti nastavení. Např. budete moci založit novou sadu šablon na již existující. Budete také moci importovat nebo exportovat(z/do ukládací složky) archiv s&nbsp;šablonami. Pokud budete importovat šablony z archivu, název může být zvolen podle názvu toho archivu, pokud tak chcete učinit, nechte pole názvu sady prázdné.',
	'ADD_THEME'	=> 'Vytvořit skin',
	'ADD_THEME_EXPLAIN'	=> 'Zde můžete přidat nový skin. Podle nastavení serveru a oprávnění k&nbsp;souborům vám zde budou nabídnuty různé možnosti nastavení. Např. budete moci založit nový skin na již existujícím. Budete také moci importovat nebo exportovat(z/do ukládací složky) archiv se skinem. Pokud budete importovat skin z archivu, název může být zvolen podle názvu toho archivu, pokud tak chcete učinit, nechte pole názvu sady prázdné.',
	'ARCHIVE_FORMAT'	=> 'Typ archívu',
	'AUTOMATIC_EXPLAIN'		=> 'Nechte prázdné pro automatickou detekci.',

	'BACKGROUND'	=> 'Pozadí',
	'BACKGROUND_COLOUR'	=> 'Barva pozadí',
	'BACKGROUND_IMAGE'	=> 'Obrázek na pozadí',
	'BACKGROUND_REPEAT'	=> 'Opakování pozadí',
	'BOLD'	=> 'Tučné',

	'CACHE'	=> 'Cache',
	'CACHE_CACHED'	=> 'Cachováno',
	'CACHE_FILENAME'	=> 'Soubor šablony',
	'CACHE_FILESIZE'	=> 'Velikost souboru',
	'CACHE_MODIFIED'	=> 'Upraveno',
	'CONFIRM_IMAGESET_REFRESH'	=> 'Opravdu chcete obnovit všechna data u&nbsp;sady obrázků? Nastavení z konfiguračního souboru sady obrázků přepíší všechny úpravy, které byly vykonané editorem.',
	'CONFIRM_TEMPLATE_CLEAR_CACHE'	=> 'Opravdu chcete odstranit všechny cachované verze souborů šablon?',
	'CONFIRM_TEMPLATE_REFRESH'	=> 'Opravdu chcete obnovit všechny šablony uložené v&nbsp;databázi nahráním výchozích hodnot ze souborů?  Toto přepíše všechny úpravy, které byly provedeny editorem za dobu, kdy byly šablony uloženy v&nbsp;databázi.',
	'CONFIRM_THEME_REFRESH'	=> 'Opravdu chcete obnovit všechna data skinů uložená v&nbsp;databázi nahráním výchozích hodnot ze souborů? Toto přepíše všechny úpravy, které byly provedeny editorem za dobu, kdy byl styl uložen v&nbsp;databázi.',
	'COPYRIGHT'	=> 'Copyright',
	'CREATE_IMAGESET'	=> 'Vytvořit novou sadu obrázků',
	'CREATE_STYLE'	=> 'Vytvořit nový styl',
	'CREATE_TEMPLATE'	=> 'Vytvořit novou šablonu',
	'CREATE_THEME'	=> 'Vytvořit nový skin',
	'CURRENT_IMAGE'	=> 'Současný obrázek',

	'DEACTIVATE_DEFAULT'	=> 'Nemůžete deaktivovat výchozí styl.',
	'DELETE_FROM_FS'	=> 'Odstranit ze souborového systému',
	'DELETE_IMAGESET'	=> 'Odstranit sadu obrázků',
	'DELETE_IMAGESET_EXPLAIN'	=> 'Zde můžete odstranit vybranou sadu obrázku z databáze. Dále, pokud jste k&nbsp;tomu oprávněni, můžete ji odstranit i ze souborového systému. mějte na vědomí, že toto nelze vrátit. Jakmile je sada odstraněna, je to na dobro. Doporučujeme nejdříve udělat export do archivu pro pozdější použití.',
	'DELETE_STYLE'	=> 'Odstranit styl',
	'DELETE_STYLE_EXPLAIN'	=> 'Zde můžete odstranit vybraný styl. Nelze zde ale odstranit jeho součásti, ty musíte odstranit každou zvlášť v&nbsp;odpovídajících sekcích. Odstranění stylu je trvalé a nelze vrátit zpět.',
	'DELETE_TEMPLATE'	=> 'Odstranit šablony',
	'DELETE_TEMPLATE_EXPLAIN'	=> 'Zde můžete odstranit vybranou sadu šablon z databáze. Dále, pokud jste k&nbsp;tomu oprávněni, můžete ji odstranit i ze souborového systému. Mějte na vědomí, že toto nelze vrátit. Jakmile je sada odstraněna, je to na dobro. Doporučujeme nejdříve udělat export do archivu pro pozdější použití.',
	'DELETE_THEME'	=> 'Odstranit skin',
	'DELETE_THEME_EXPLAIN'	=> 'Zde můžete odstranit vybraný skin z databáze. Dále, pokud jste k&nbsp;tomu oprávněni, můžete ji odstranit i ze souborového systému. mějte na vědomí, že toto nelze vrátit. Jakmile je skin odstraněn, je to na dobro. Doporučujeme nejdříve udělat export do archivu pro pozdější použití.',
	'DETAILS'	=> 'Detaily',
	'DIMENSIONS_EXPLAIN'	=> 'Zvolením budou přidány informace o&nbsp;rozměrech obrázku',

	'EDIT_DETAILS_IMAGESET'				=> 'Upravit detaily sady obrázků',
	'EDIT_DETAILS_IMAGESET_EXPLAIN'		=> 'Zde můžete upravovat některé detaily sady obrázků, jako je její název',
	'EDIT_DETAILS_STYLE'					=> 'Upravit styl',
	'EDIT_DETAILS_STYLE_EXPLAIN'	=> 'Tímto formulářem můžete upravit existující styl. Můžete také zvolit kombinace šablon, sady obrázků a skinu, které tento styl tvoří. Můžete také vybrat tento styl jako výchozí.',
	'EDIT_DETAILS_TEMPLATE'				=> 'Upravit detaily šablon',
	'EDIT_DETAILS_TEMPLATE_EXPLAIN'		=> 'Zde můžete upravit některá nastavení šablony, jako například její jméno. Můžete také zvolit, jestli použít styl z .css souboru, nebo styly z databáze. Tato možnost závisí na nastavení PHP a jestli do vašich šablon může zapisovat webserver.',
	'EDIT_DETAILS_THEME'					=> 'Upravit detaily skinu',
	'EDIT_DETAILS_THEME_EXPLAIN'	=> 'Zde můžete upravit některá nastavení skinu, jako například jeho jméno. Můžete také zvolit, jestli použít styl z .css souboru, nebo styly z databáze. Tato možnost závisí na nastavení PHP a jestli do vašeho skinu může zapisovat webserver.',
	'EDIT_IMAGESET'								=> 'Upravit sadu obrázků',
	'EDIT_IMAGESET_EXPLAIN'				=> 'Zde můžete upravit jednotlivé obrázky, které tvoří celou sadu. Můžete také nastavit rozměry těchto obrázků, Rozměry jsou volitelné, ale mohou předejít některým potížím s&nbsp;vykreslováním v&nbsp;některých prohlížečích. Můžete ale ušetřit trochu místa v&nbsp;databázi, pokud je neuvedete.',
	'EDIT_TEMPLATE'								=> 'Upravit šablony',
	'EDIT_TEMPLATE_EXPLAIN'				=> 'Zde můžete přímo upravit šablony. Mějte na vědomí, že tyto změny jsou trvalé a nejdou vrátit zpět. Pokud má PHP příslušná oprávnění, provede zápis přímo do souborů se šablonami. Pokud je nemá, tak změny budou uloženy v&nbsp;databázi a nahrávány také z databáze. Buďte opatrní při úpravě vašich šablon, nezapomeňte uzavřít všechny proměnné {XXXX} a podmíněné výrazy.',
	'EDIT_TEMPLATE_STORED_DB'			=> 'Soubor šablony není zapisovatelný, takže úpravy byly uloženy v&nbsp;databázi.',
	'EDIT_THEME'									=> 'Upravit skin',
	'EDIT_THEME_EXPLAIN'					=> 'Zde můžete upravit vybraný skin, měnit barvy, obrázky atd. Můžete si vybrat mezi zjednodušeným rozhraním, kde můžete nastavit základní barvy atd., nebo pokročilejší režim „čistého CSS“. Ten vám umožňuje přidávat další prvky jako rámečky apod. Jen nastavte prvky které potřebujete, ostatní můžete nechat prázdné nebo nedefinované.',
	'EDIT_THEME_STORED_DB'				=> 'Soubor stylů není zapisovatelný, takže úpravy byly uloženy v&nbsp;databázi.',
	'EDIT_THEME_STORE_PARSED'			=> 'Skin vyžaduje, aby jeho soubory stylů byl zpracovány dorhomady. To je možné pouze, pokud je uložen v&nbsp;databázi.',
  'EDITOR_DISABLED'							=> 'Editor šablon je vypnutý.',
	'EXPORT'											=> 'Export',

	'FOREGROUND'		=> 'Popředí',
	'FONT_COLOUR'		=> 'Barva písma',
	'FONT_FACE'			=> 'Styl písma',
	'FONT_FACE_EXPLAIN'	=> 'Můžete zvolit více fontů použitím čárek. Pokud uživatel nemá nainstalovaný první font, bude použit ten následující',
	'FONT_SIZE'			=> 'Velikost písma',

	'GLOBAL_IMAGES'	=> 'Globální',

	'HIDE_CSS'	=> 'Skrýt čisté CSS',

	'IMAGE_WIDTH'	=> 'Šířka obrázků',
	'IMAGE_HEIGHT'	=> 'Výška obrázků',
	'IMAGE'	=> 'Obrázek',
	'IMAGE_NAME'	=> 'Název obrázku',
	'IMAGE_PARAMETER'	=> 'Parametr',
	'IMAGE_VALUE'	=> 'Hodnota',
	'IMAGESET_ADDED'	=> 'Nová sada obrázků byla nahrána do souborového systému.',
	'IMAGESET_ADDED_DB'	=> 'Nová sada obrázku byla přidána do databáze.',
	'IMAGESET_DELETED'	=> 'Sada obrázků byla odstraněna',
	'IMAGESET_DELETED_FS'	=> 'Sada obrázků byla odstraněna z databáze, ale některé soubory mohly zůstat v&nbsp;souborovém systému.',
	'IMAGESET_DETAILS_UPDATED'	=> 'Nastavení sady obrázků bylo aktualizováno.',
	'IMAGESET_ERR_ARCHIVE'	=> 'Prosím zvolte archivační metodu',
	'IMAGESET_ERR_COPY_LONG'	=> 'Copyright nemůže být delší než 60 znaků.',
	'IMAGESET_ERR_NAME_CHARS'	=> 'Název sady obrázků může obsahovat jen alfanumerické znaky, -, +, _ a mezeru.',
	'IMAGESET_ERR_NAME_EXIST'	=> 'Sada obrázků s&nbsp;tímto označením již existuje.',
	'IMAGESET_ERR_NAME_LONG'	=> 'Název sady obrázků nesmí být delší než 30 znaků.',
	'IMAGESET_ERR_NOT_IMAGESET'	=> 'Zvolený archiv neobsahuje platnou sadu obrázků.',
	'IMAGESET_ERR_STYLE_NAME'	=> 'Musíte zvolit název sady obrázků.',
	'IMAGESET_EXPORT'	=> 'Exportovat sadu',
	'IMAGESET_EXPORT_EXPLAIN'	=> 'Zde můžete exportovat zvolenou sadu obrázků v&nbsp;archivu. Archiv bude obsahovat všechna potřebná data pro přenesení na jiné fórum. Můžete si vybrat mezi uložením archivu do ukládací složky, jeho stažením nebo nahráním přes FTP.',
	'IMAGESET_EXPORTED'	=> 'Sada obrázků byla exportována a uložena %s.',
	'IMAGESET_NAME'	=> 'Název sady obrázků',
	'IMAGESET_REFRESHED'	=> 'Sada byla aktualizována.',
	'IMAGESET_UPDATED'	=> 'Sada byla aktualizována.',
	'ITALIC'	=> 'Kurzíva',

	'IMG_CAT_BUTTONS'	=> 'Přeložená tlačítka',
	'IMG_CAT_CUSTOM'	=> 'Vlastní obrázky',
	'IMG_CAT_FOLDERS'	=> 'Ikony témat',
	'IMG_CAT_FORUMS'	=> 'Ikony fór',
	'IMG_CAT_ICONS'	=> 'Obecné ikony',
	'IMG_CAT_LOGOS'	=> 'Loga',
	'IMG_CAT_POLLS'	=> 'Obrázky hlasování',
	'IMG_CAT_UI'	=> 'Obecné prvky rozhraní',
	'IMG_CAT_USER'	=> 'Další obrázky',

	'IMG_SITE_LOGO'	=> 'Hlavní logo',
	'IMG_UPLOAD_BAR'	=> 'Lišta průběhu nahrávání',
	'IMG_POLL_LEFT'	=> 'Levý kraj hlasování',
	'IMG_POLL_CENTER'	=> 'Střed hlasování',
	'IMG_POLL_RIGHT'	=> 'Pravý kraj hlasování',
	'IMG_ICON_FRIEND'	=> 'Přidat přítele',
	'IMG_ICON_FOE'	=> 'Přidat nepřítele',

	'IMG_FORUM_LINK'	=> 'Fórum jako odkaz',
	'IMG_FORUM_READ'	=> 'Fórum',
	'IMG_FORUM_READ_LOCKED'	=> 'Zamknuté fórum',
	'IMG_FORUM_READ_SUBFORUM'	=> 'Subfórum',
	'IMG_FORUM_UNREAD'	=> 'Nové příspěvky ve fóru',
	'IMG_FORUM_UNREAD_LOCKED'	=> 'Nové příspěvky ve fóru – zamknuto',
	'IMG_FORUM_UNREAD_SUBFORUM'	=> 'Nové příspěvky v&nbsp;subfóru',
	'IMG_SUBFORUM_READ'			=> 'Ikona subfóra',
	'IMG_SUBFORUM_UNREAD'		=> 'Ikona subfóra s&nbsp;novými příspěvky',

	'IMG_TOPIC_MOVED'	=> 'Přesunuté téma',

	'IMG_TOPIC_READ'	=> 'Téma',
	'IMG_TOPIC_READ_MINE'	=> 'Téma s&nbsp;vlastním příspěvkem',
	'IMG_TOPIC_READ_HOT'	=> 'Oblíbené téma',
	'IMG_TOPIC_READ_HOT_MINE'	=> 'Oblíbené téma s&nbsp;vlastním příspěvkem',
	'IMG_TOPIC_READ_LOCKED'	=> 'Zamknuté téma',
	'IMG_TOPIC_READ_LOCKED_MINE'	=> 'Zamknuté téma s&nbsp;vlastním příspěvkem',

	'IMG_TOPIC_UNREAD'	=> 'Téma s&nbsp;novými příspěvky',
	'IMG_TOPIC_UNREAD_MINE'	=> 'Oznámení s&nbsp;vlastními a novými příspěvky',
	'IMG_TOPIC_UNREAD_HOT'	=> 'Oblíbené téma s&nbsp;novými příspěvky',
	'IMG_TOPIC_UNREAD_HOT_MINE'	=> 'Oblíbené téma s&nbsp;vlastními a novými příspěvky',
	'IMG_TOPIC_UNREAD_LOCKED'	=> 'Nové zamknuté téma',
	'IMG_TOPIC_UNREAD_LOCKED_MINE'	=> 'Zamknuté téma s&nbsp;vlastními a novými příspěvky',

	'IMG_STICKY_READ'	=> 'Oznámení',
	'IMG_STICKY_READ_MINE'	=> 'Oznámení s&nbsp;vlastním příspěvkem',
	'IMG_STICKY_READ_LOCKED'	=> 'Zamknuté oznámení',
	'IMG_STICKY_READ_LOCKED_MINE'	=> 'Zamknuté oznámení s&nbsp;vlastním příspěvkem',
	'IMG_STICKY_UNREAD'	=> 'Oznámení s&nbsp;novými příspěvky',
	'IMG_STICKY_UNREAD_MINE'	=> 'Oznámení s&nbsp;vlastními a novými příspěvky',
	'IMG_STICKY_UNREAD_LOCKED'	=> 'Zamknuté oznámení s&nbsp;novými příspěvky',
	'IMG_STICKY_UNREAD_LOCKED_MINE'	=> 'Zamknuté oznámení s&nbsp;vlastními a novými příspěvky',

	'IMG_ANNOUNCE_READ'	=> 'Důležité',
	'IMG_ANNOUNCE_READ_MINE'	=> 'Důležité s&nbsp;vlastním příspěvkem',
	'IMG_ANNOUNCE_READ_LOCKED'	=> 'Zamknuté důležité',
	'IMG_ANNOUNCE_READ_LOCKED_MINE'	=> 'Zamknuté důležité s&nbsp;vlastním příspěvkem',
	'IMG_ANNOUNCE_UNREAD'	=> 'Důležité s&nbsp;novými příspěvky',
	'IMG_ANNOUNCE_UNREAD_MINE'	=> 'Důležité s&nbsp;novými a vlastními příspěvky',
	'IMG_ANNOUNCE_UNREAD_LOCKED'	=> 'Zamknuté důležité s&nbsp;novými příspěvky',
	'IMG_ANNOUNCE_UNREAD_LOCKED_MINE'	=> 'Zamknuté důležité s&nbsp;novými a vlastními příspěvky',

	'IMG_GLOBAL_READ'	=> 'Globální',
	'IMG_GLOBAL_READ_MINE'	=> 'Globální s&nbsp;vlastními příspěvky',
	'IMG_GLOBAL_READ_LOCKED'	=> 'Zamknuté globální',
	'IMG_GLOBAL_READ_LOCKED_MINE'	=> 'Zamknuté globální s&nbsp;vlastními příspěvky',
	'IMG_GLOBAL_UNREAD'	=> 'Globální s&nbsp;novými příspěvky',
	'IMG_GLOBAL_UNREAD_MINE'	=> 'Globální s&nbsp;vlastními a novými příspěvky',
	'IMG_GLOBAL_UNREAD_LOCKED'	=> 'Zamknuté globální s&nbsp;novými příspěvky',
	'IMG_GLOBAL_UNREAD_LOCKED_MINE'	=> 'Zamknuté globální s&nbsp;vlastními a novými příspěvky',

	'IMG_PM_READ'	=> 'Přečtená soukromá zpráva',
	'IMG_PM_UNREAD'	=> 'Nepřečtená soukromá zpráva',

	'IMG_ICON_BACK_TOP'		=> 'Nahoru',

	'IMG_ICON_CONTACT_AIM'	=> 'AIM',
	'IMG_ICON_CONTACT_EMAIL'	=> 'Odeslat e-mail',
	'IMG_ICON_CONTACT_ICQ'	=> 'ICQ',
	'IMG_ICON_CONTACT_JABBER'	=> 'Jabber',
	'IMG_ICON_CONTACT_MSNM'	=> 'MSNM',
	'IMG_ICON_CONTACT_PM'	=> 'Odeslat zprávu',
	'IMG_ICON_CONTACT_YAHOO'	=> 'YIM',
	'IMG_ICON_CONTACT_WWW'	=> 'WWW',

	'IMG_ICON_POST_DELETE'	=> 'Odstranit příspěvek',
	'IMG_ICON_POST_EDIT'	=> 'Upravit příspěvek',
	'IMG_ICON_POST_INFO'	=> 'Zobrazit detaily příspěvku',
	'IMG_ICON_POST_QUOTE'	=> 'Citovat příspěvek',
	'IMG_ICON_POST_REPORT'	=> 'Oznámit příspěvek',
	'IMG_ICON_POST_TARGET'	=> 'Minipříspěvek',
	'IMG_ICON_POST_TARGET_UNREAD'	=> 'Nový minipříspěvek',

	'IMG_ICON_TOPIC_ATTACH'	=> 'Příloha',
	'IMG_ICON_TOPIC_LATEST'	=> 'Poslední příspěvek',
	'IMG_ICON_TOPIC_NEWEST'	=> 'Poslední nepřečtený příspěvek',
	'IMG_ICON_TOPIC_REPORTED'	=> 'Oznámený příspěvek',
	'IMG_ICON_TOPIC_UNAPPROVED'	=> 'Neschválený příspěvek',

	'IMG_ICON_USER_ONLINE'	=> 'Připojený uživatel',
	'IMG_ICON_USER_OFFLINE'	=> 'Odpojený uživatel',
	'IMG_ICON_USER_PROFILE'	=> 'Zobrazit profil',
	'IMG_ICON_USER_SEARCH'	=> 'Vyhledat příspěvky',
	'IMG_ICON_USER_WARN'	=> 'Varovat uživatele',

	'IMG_BUTTON_PM_FORWARD'	=> 'Přeposlat soukromou zprávu',
	'IMG_BUTTON_PM_NEW'	=> 'Nová soukromá zpráva',
	'IMG_BUTTON_PM_REPLY'	=> 'Odpovědět na soukromou zprávu',
	'IMG_BUTTON_TOPIC_LOCKED'	=> 'Zamknout téma',
	'IMG_BUTTON_TOPIC_NEW'	=> 'Nové téma',
	'IMG_BUTTON_TOPIC_REPLY'	=> 'Odpovědět na téma',

	'IMG_USER_ICON1'	=> 'Uživatelsky definovaný obrázek 1',
	'IMG_USER_ICON2'	=> 'Uživatelsky definovaný obrázek 2',
	'IMG_USER_ICON3'	=> 'Uživatelsky definovaný obrázek 3',
	'IMG_USER_ICON4'	=> 'Uživatelsky definovaný obrázek 4',
	'IMG_USER_ICON5'	=> 'Uživatelsky definovaný obrázek 5',
	'IMG_USER_ICON6'	=> 'Uživatelsky definovaný obrázek 6',
	'IMG_USER_ICON7'	=> 'Uživatelsky definovaný obrázek 7',
	'IMG_USER_ICON8'	=> 'Uživatelsky definovaný obrázek 8',
	'IMG_USER_ICON9'	=> 'Uživatelsky definovaný obrázek 9',
	'IMG_USER_ICON10'	=> 'Uživatelsky definovaný obrázek 10',

	'INCLUDE_DIMENSIONS'	=> 'Zahrnout rozměry',
	'INCLUDE_IMAGESET'		=> 'Zahrnout sadu obrázků',
	'INCLUDE_TEMPLATE'		=> 'Zahrnout šablony',
	'INCLUDE_THEME'				=> 'Zahrnout skin',
	'INHERITING_FROM'			=> 'Dědí vlastnosti od',
	'INSTALL_IMAGESET'		=> 'Instalovat sadu obrázků',
	'INSTALL_IMAGESET_EXPLAIN'	=> 'Zde lze instalovat sadu obrázků, kterou jste vybrali. Můžete upřesnit vaše nastavení nebo použít výchozí z instalace.',
	'INSTALL_STYLE'	=> 'Instalovat styl',
	'INSTALL_STYLE_EXPLAIN'	=> 'Zde lze nainstalovat vybraný styl a odpovídající položky a součásti, pokud je třeba. Pokud již máte potřebné součásti stylů nainstalovány, nebudou přepsány. Některé styly vyžadují, aby jejich součásti již byly instalovány předem. Budete upozorněni, pokud byste se pokusili takový styl instalovat bez potřebných součástí.',
	'INSTALL_TEMPLATE'	=> 'Instalovat šablonu',
	'INSTALL_TEMPLATE_EXPLAIN'	=> 'Zde lze instalovat šablonu, kterou jste vybrali. Podle nastavení serveru a oprávnění k&nbsp;souborům vám zde budou nabídnuty různé možnosti nastavení.',
	'INSTALL_THEME'	=> 'Instalovat skin',
	'INSTALL_THEME_EXPLAIN'	=> 'Zde lze instalovat skin, který jste vybrali. Můžete upřesnit vaše nastavení nebo použít výchozí z instalace.',
	'INSTALLED_IMAGESET'	=> 'Instalované sady obrázků',
	'INSTALLED_STYLE'	=> 'Instalované styly',
	'INSTALLED_TEMPLATE'	=> 'Instalované šablony',
	'INSTALLED_THEME'	=> 'Instalované skiny',

	'LINE_SPACING'							=> 'Mezery mezi řádky',
	'LOCALISED_IMAGES'					=> 'Přeloženo',
	'LOCATION_DISABLED_EXPLAIN'	=> 'Toto nastavení je zděděno a nelze jej změnit.',

	'NO_CLASS'	=> 'Nelze najít třídu ve stylech',
	'NO_IMAGESET'	=> 'Nelze najít sadu obrázků v&nbsp;souborech.',
	'NO_IMAGE'	=> 'Bez obrázku',
	'NO_IMAGE_ERROR'			=> 'Nelze najít obrázek v&nbsp;systému souborů.',
	'NO_STYLE'	=> 'Nelze najít styl v&nbsp;souborech.',
	'NO_TEMPLATE'	=> 'Nelze najít šablony v&nbsp;souborech.',
	'NO_THEME'	=> 'Nelze najít skin v&nbsp;souborech.',
	'NO_UNINSTALLED_IMAGESET'	=> 'Žádné odinstalované sady obrázků',
	'NO_UNINSTALLED_STYLE'	=> 'Žádné odinstalované styly',
	'NO_UNINSTALLED_TEMPLATE'	=> 'Žádné odinstalované šablony',
	'NO_UNINSTALLED_THEME'	=> 'Žádná odinstalované skiny',
	'NO_UNIT'	=> 'Žádné',

	'ONLY_IMAGESET'	=> 'Toto je poslední sada obrázků, nelze smazat',
	'ONLY_STYLE'	=> 'Toto je poslední styl, nelze smazat',
	'ONLY_TEMPLATE'	=> 'Toto je poslední šablona, nelze smazat',
	'ONLY_THEME'	=> 'Toto je poslední skin, nelze smazat',
	'OPTIONAL_BASIS'	=> 'Volitelné',

	'REFRESH'	=> 'Obnovit',
	'REPEAT_NO'	=> 'Žádné',
	'REPEAT_X'	=> 'Jen horizontálně',
	'REPEAT_Y'	=> 'Jen vertikálně',
	'REPEAT_ALL'	=> 'Oběma směry',
	'REPLACE_IMAGESET'	=> 'Nahradit sadu obrázku',
	'REPLACE_IMAGESET_EXPLAIN'	=> 'Vybraná sada obrázků nahradí odstraňovanou ve všech stylech, kde je použita.',
	'REPLACE_STYLE'	=> 'Nahradit styl',
	'REPLACE_STYLE_EXPLAIN'	=> 'Vybraný styl nahradí ten odstraňovaný u&nbsp;všech uživatelů, kteří jej používají.',
	'REPLACE_TEMPLATE'	=> 'Nahradit šablonu',
	'REPLACE_TEMPLATE_EXPLAIN'	=> 'Vybraná šablona nahradí odstraňovanou ve všech stylech, kde je použita.',
	'REPLACE_THEME'	=> 'Nahradit skin',
	'REPLACE_THEME_EXPLAIN'	=> 'Vybrané skin nahradí odstraňovaný ve všech stylech, kde je použito.',
	'REQUIRES_IMAGESET'	=> 'Tento styl vyžaduje, aby sada obrázků %s byla již nainstalována.',
	'REQUIRES_TEMPLATE'	=> 'Tento styl vyžaduje, aby sada šablon %s byla již nainstalována.',
	'REQUIRES_THEME'	=> 'Tento styl vyžaduje, aby skin %s bylo již nainstalován.',

	'SELECT_IMAGE'	=> 'Vyberte obrázek',
	'SELECT_TEMPLATE'	=> 'Vyberte soubor šablony',
	'SELECT_THEME'				=> 'Vybrat soubor skinu',
	'SELECTED_IMAGE'	=> 'Vybraný obrázek',
	'SELECTED_IMAGESET'	=> 'Vybraná sada obrázků',
	'SELECTED_TEMPLATE'	=> 'Vybraná šablona',
	'SELECTED_TEMPLATE_FILE'	=> 'Vybraná šablona',
	'SELECTED_THEME'	=> 'Vybraný skin',
	'SELECTED_THEME_FILE'		=> 'Vybraný soubor skinu',
	'STORE_DATABASE'	=> 'Databáze',
	'STORE_FILESYSTEM'	=> 'Soubory',
	'STYLE_ACTIVATE'	=> 'Aktivovat',
	'STYLE_ACTIVE'	=> 'Aktivní ',
	'STYLE_ADDED'	=> 'Nový styl byl přidán.',
	'STYLE_DEACTIVATE'	=> 'Deaktivovat',
	'STYLE_DEFAULT'	=> 'Vybrat za výchozí styl',
	'STYLE_DELETED'	=> 'Styl byl odstraněn.',
	'STYLE_DETAILS_UPDATED'	=> 'Styl byl aktualizován.',
	'STYLE_ERR_ARCHIVE'	=> 'Prosím vyberte archivační metodu',
	'STYLE_ERR_COPY_LONG'	=> 'Copyright nemůže být delší než 60 znaků.',
	'STYLE_ERR_MORE_ELEMENTS'	=> 'Musíte vybrat alespoň jednu součást stylu.',
	'STYLE_ERR_NAME_CHARS'	=> 'Název stylu může obsahovat jen alfanumerické znaky, -, +, _ a mezery.',
	'STYLE_ERR_NAME_EXIST'	=> 'Styl s&nbsp;tímto názvem již existuje.',
	'STYLE_ERR_NAME_LONG'	=> 'Název stylů nesmí být delší než 30 znaků.',
	'STYLE_ERR_NO_IDS'	=> 'Musíte pro tento styl vybrat skin, šablony a sadu obrázků.',
	'STYLE_ERR_NOT_STYLE'	=> 'Importovaný nebo nahraný archiv neobsahoval platný styl.',
	'STYLE_ERR_STYLE_NAME'	=> 'Musíte zvolit jméno pro tento styl.',
	'STYLE_EXPORT'	=> 'Exportovat styl',
	'STYLE_EXPORT_EXPLAIN'	=> 'Zde můžete exportovat styl do archivu. Styl nemusí obsahovat všechny prvky, ale nejméně jeden. Například pokud jste vytvořili nový skin a sadu obrázku pro často používanou šablonu, můžete exportovat pouze skin a sadu obrázků a šablonu vynechat. Můžete si vybrat, jestli chcete soubor stáhnout přímo, nebo ho uložit na serveru pro pozdější stáhnutí.',
	'STYLE_EXPORTED'	=> 'Styl byl exportován a uložen v&nbsp;%s.',
	'STYLE_IMAGESET'	=> 'Sada obrázků',
	'STYLE_NAME'	=> 'Název stylu',
	'STYLE_TEMPLATE'	=> 'Šablona',
	'STYLE_THEME'	=> 'Skin',
	'STYLE_USED_BY'	=> 'Používá (včetně botů)',

	'TEMPLATE_ADDED'	=> 'Sada šablon byla přidána a uložena v&nbsp;souborovém systému.',
	'TEMPLATE_ADDED_DB'	=> 'Sada šablon byla přidána a uložena v&nbsp;databázi.',
	'TEMPLATE_CACHE'	=> 'Cache šablon',
	'TEMPLATE_CACHE_EXPLAIN'	=> 'phpBB ukládá kopie zkopírovaných šablon do cache. Toto snižuje zatížení serveru a dobu načítání pokaždé, když je na fóru načtena jakákoliv stránka. Zde si můžete prohlédnou stav všech souborů v&nbsp;cache, případně z ní odstranit jeden nebo více souborů.',
	'TEMPLATE_CACHE_CLEARED'	=> 'Složka pro cache šablon byla úspěšně pročištěna.',
	'TEMPLATE_CACHE_EMPTY'	=> 'V cache nejsou uloženy žádné šablony.',
	'TEMPLATE_DELETED'	=> 'Sada šablon byla smazána.',
	'TEMPLATE_DELETE_DEPENDENT'   => 'Tato sada šablon nemůže být odstraněna, protože jedna nebo více šablon od ní dědí vlastnosti:',
	'TEMPLATE_DELETED_FS'	=> 'Sada šablon byla odstraněna z databáze, nicméně na serveru mohlo zůstat několik souborů ze sady.',
	'TEMPLATE_DETAILS_UPDATED'	=> 'Podrobnosti o&nbsp;šabloně byly aktualizovány.',
	'TEMPLATE_EDITOR'	=> 'HTML editor šablon',
	'TEMPLATE_EDITOR_HEIGHT'	=> 'Výška editoru šablon',
	'TEMPLATE_ERR_ARCHIVE'	=> 'Prosím zvolte archivační metodu.',
	'TEMPLATE_ERR_CACHE_READ'	=> 'Adresář pro cache, který slouží pro urychlení načítání šablon nemohl být otevřen.',
	'TEMPLATE_ERR_COPY_LONG'	=> 'Copyright nesmí být delší než 60 znaků.',
	'TEMPLATE_ERR_NAME_CHARS'	=> 'Název šablony může obsahovat pouze alfanumerické znaky -, +, _ a mezeru.',
	'TEMPLATE_ERR_NAME_EXIST'	=> 'Sada šablon se stejným názvem již existuje.',
	'TEMPLATE_ERR_NAME_LONG'	=> 'Název šablony nesmí být delší než 60 znaků.',
	'TEMPLATE_ERR_NOT_TEMPLATE'	=> 'Zadaný archiv neobsahuje platnou sadu šablon.',
	'TEMPLATE_ERR_REQUIRED_OR_INCOMPLETE' => 'Nová sada šablon vyžaduje aby šablona %s byla nainstalována a nebyla dedičná.',
	'TEMPLATE_ERR_STYLE_NAME'	=> 'Musíte zadat název pro tuto šablonu.',
	'TEMPLATE_EXPORT'	=> 'Exportovat šablony',
	'TEMPLATE_EXPORT_EXPLAIN'	=> 'Zde můžete exportovat sadu šablon do archivu. Tento archiv bude obsahovat všechna potřebná data pro instalaci sady šablon na jiném fóru. Můžete si vybrat, jestli chcete soubor stáhnout přímo, nebo ho uložit na serveru pro pozdější stáhnutí.',
	'TEMPLATE_EXPORTED'	=> 'Šablona byla exportována a uložena v&nbsp;%s.',
	'TEMPLATE_FILE'	=> 'Soubor šablony',
	'TEMPLATE_FILE_UPDATED'	=> 'Soubor šablony byl aktualizován.',
	'TEMPLATE_INHERITS'         => 'Tato šablona dědí od %s a tedy nemůže mít jiné nastavení ukládání než hlavní šablona.',
	'TEMPLATE_LOCATION'	=> 'Ukládat šablony v',
	'TEMPLATE_LOCATION_EXPLAIN'	=> 'Obrázky budou vždy ukládány v&nbsp;souborovém systému.',
	'TEMPLATE_NAME'	=> 'Název šablony',
	'TEMPLATE_REFRESHED'	=> 'Šablona byla aktualizována.',

	'THEME_ADDED'	=> 'Nový skin byl přidán do databáze.',
	'THEME_ADDED_DB'	=> 'Nový skin byl přidán do databáze.',
	'THEME_CLASS_ADDED'	=> 'Vlastní třída byla přidána.',
	'THEME_DELETED'	=> 'Skin byl odstraněn.',
	'THEME_DELETED_FS'	=> 'Skin byl odstraněn z databáze, nicméně na serveru mohlo zůstat několik souborů ze skinu.',
	'THEME_DETAILS_UPDATED'	=> 'Detaily skinu byly aktualizovány.',
	'THEME_EDITOR'	=> 'CSS editor skinů',
	'THEME_EDITOR_HEIGHT'	=> 'Velikost editoru skinů.',
	'THEME_ERR_ARCHIVE'	=> 'Prosím vyberte archivační metodu.',
	'THEME_ERR_CLASS_CHARS'	=> 'V názvech třídy mohou být jen alfanumerické zanky ., :, -, _ a #.',
	'THEME_ERR_COPY_LONG'	=> 'Copyright nesmí být delší než 60 znaků',
	'THEME_ERR_NAME_CHARS'	=> 'Název skinu může obsahovat jen alfanumerické znaky, -, +, _ a mezery.',
	'THEME_ERR_NAME_EXIST'	=> 'Skin s&nbsp;tímto názvem již existuje.',
	'THEME_ERR_NAME_LONG'	=> 'Název skinu nesmí být delší než 30 znaků.',
	'THEME_ERR_NOT_THEME'	=> 'Importovaný nebo nahraný archiv neobsahoval platný skin.',
	'THEME_ERR_REFRESH_FS'	=> 'Tento skin je uložen v&nbsp;souborech, a proto není potřeba ho obnovovat.',
	'THEME_ERR_STYLE_NAME'	=> 'Musíte zvolit název pro tento skin.',
	'THEME_EXPORT'	=> 'Exportovat skin',
	'THEME_EXPORT_EXPLAIN'	=> 'Zde můžete exportovat skin do archivu. Tento archiv bude obsahovat všechna potřebná data pro instalaci skinu na jiném fóru. Můžete si vybrat, jestli chcete soubor stáhnout přímo, nebo ho uložit na serveru pro pozdější stáhnutí.',
	'THEME_EXPORTED'	=> 'Skin byl exportován a uložen v&nbsp;%s.',
	'THEME_FILE'				=> 'Soubor skinu',
	'THEME_LOCATION'	=> 'Ukládat styly v',
	'THEME_LOCATION_EXPLAIN'	=> 'Obrázky jsou vždy ukládány v&nbsp;souborech.',
	'THEME_NAME'	=> 'Název skinu',
	'THEME_REFRESHED'	=> 'Skin byl obnoven.',
	'THEME_UPDATED'	=> 'Třída byla aktualizována.',

	'UNDERLINE'	=> 'Podtržené',
	'UNINSTALLED_IMAGESET'	=> 'Neinstalované sady obrázků',
	'UNINSTALLED_STYLE'	=> 'Neinstalované styly',
	'UNINSTALLED_TEMPLATE'	=> 'Neinstalované šablony',
	'UNINSTALLED_THEME'	=> 'Neinstalované skiny',
	'UNSET'	=> 'Nedefinováno',

));

?>