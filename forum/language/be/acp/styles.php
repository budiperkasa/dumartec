<?php
/**
*
* acp_styles [Belarusian]
*
* @package language
* @version $Id: styles.php,v 1.40 2007/10/04 15:07:24 acydburn Exp $
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
	'ACP_IMAGESETS_EXPLAIN'	=> 'Наборы малюнкаў уключаюць у сябе ўсё выкарыстоўваныя канферэнцыяй малюначка кнопак, форумаў, папак і т.п., а таксама іншыя, не якія адносяцца да пэўных стыляў малюнка. Тут вы можаце рэдагаваць, экспартаваць або выдаляць наяўныя наборы малюнкаў і імпартаваць або актываваць новыя.',
	'ACP_STYLES_EXPLAIN'	=> 'Тут вы можаце кіраваць стылямі, даступнымі на канферэнцыі. Стыль складаецца з шаблону, тэмы і набору малюнкаў. Вы можаце змяняць наяўныя стылі, выдаляць, дэактываваць, паўторна актываваць, ствараць іх або імпартаваць новыя. Вы таксама можаце ўбачыць, як будзе выглядаць стыль, выкарыстаючы функцыю прадпрагляду. Дзеючы стыль па змаўчанні пазначаны зорачкай (*). Таксама паказана агульная колькасць карыстальнікаў для кожнага стылю. Улічыце, што прымусовая замена стыляў карыстальнікаў тут не вырабляецца.',
	'ACP_TEMPLATES_EXPLAIN'	=> 'Шаблон уключае ўсе элементы разметкі, выкарыстоўваныя для генеравання старонак канферэнцыі. Тут вы можаце рэдагаваць наяўныя шаблоны, выдаляць, экспартаваць, імпартаваць і папярэдне праглядаць іх. Вы можаце таксама змяняць код шаблону, выкарыстоўваны для генеравання BBCode.',
	'ACP_THEMES_EXPLAIN'	=> 'Тут вы можаце ствараць, усталёўваць, рэдагаваць, выдаляць і экспартаваць тэмы. Тэма з\'яўляецца камбінацыяй колераў і малюнкаў, выкарыстоўваных у шаблоне і якія вызначаюць знешні выгляд канферэнцыі. Даступны вам дыяпазон налад залежыць ад канфігурацыі сервера і версіі phpBB, звернецеся да дакументацыі для атрымання дадатковай інфармацыі. Калі ласка, улічыце, што пры стварэнні новых тэм выкарыстанне наяўных тэм у якасці асновы не з\'яўляецца абавязковым.',
	'ADD_IMAGESET'			=> 'Стварыць набор малюнкаў',
	'ADD_IMAGESET_EXPLAIN'	=> 'Тут вы можаце стварыць новы набор малюнкаў. У залежнасці ад канфігурацыі сервера і праў доступу да файлаў, вам могуць быць даступныя дадатковыя магчымасці. Напрыклад, стварэнне набору малюнкаў на аснове ўжо наяўнага. Вам таксама могуць быць даступныя загрузка або імпарт (з папкі store) архіва набору малюнкаў. Пры запампоўцы або імпартаванні архіва імя набору малюнкаў можна ўзяць з імя файла архіва (для гэтага пакіньце пустым поле з імем набору малюнкаў).',
	'ADD_STYLE'				=> 'Стварыць стыль',
	'ADD_STYLE_EXPLAIN'		=> 'Тут вы можаце стварыць новы стыль. У залежнасці ад канфігурацыі сервера і праў доступу да файлаў, вам могуць быць даступныя дадатковыя магчымасці. Напрыклад, стварэнне стылю на аснове ўжо наяўнага. Вам таксама могуць быць даступныя загрузка або імпарт (з папкі store) архіва стылю. Калі вы загружаеце або імпартуеце архіў, імя стылю будзе ўсталявана аўтаматычна.',
	'ADD_TEMPLATE'			=> 'Стварыць шаблон',
	'ADD_TEMPLATE_EXPLAIN'	=> 'Тут вы можаце стварыць новы шаблон. У залежнасці ад канфігурацыі сервера і праў доступу да файлаў, вам могуць быць даступныя дадатковыя магчымасці. Напрыклад, стварэнне шаблону на аснове ўжо наяўнага. Вам таксама могуць быць даступныя загрузка або імпарт (з папкі store) архіва шаблону. Пры запампоўцы або імпартаванні архіва імя пакета малюнкаў можна ўзяць з імя файла архіва (для гэтага пакіньце пустым поле з імем шаблону).',
	'ADD_THEME'				=> 'Стварыць тэму',
	'ADD_THEME_EXPLAIN'		=> 'Тут вы можаце стварыць новую тэму. У залежнасці ад канфігурацыі сервера і праў доступу да файлаў, вам могуць быць даступныя дадатковыя магчымасці. напрыклад, стварэнне тэмы на аснове ўжо наяўнай. Вам таксама могуць быць даступныя загрузка або імпарт (з папкі store) архіва тэмы. Пры запампоўцы або імпартаванні архіва імя тэмы можна ўзяць з імя файла архіва (для гэтага пакіньце пустым поле з імем тэмы).',
	'ARCHIVE_FORMAT'		=> 'Тып архіва',
	'AUTOMATIC_EXPLAIN'		=> 'Пакіньце пустым, каб паспрабаваць вызначыць аўтаматычна.',

	'BACKGROUND'			=> 'Фон',
	'BACKGROUND_COLOUR'		=> 'Колер фону',
	'BACKGROUND_IMAGE'		=> 'Фонавы малюнак',
	'BACKGROUND_REPEAT'		=> 'Паўтор фону',
	'BOLD'					=> 'Паўтлусты',

	'CACHE'							=> 'Кэш',
	'CACHE_CACHED'					=> 'Кэшавана',
	'CACHE_FILENAME'				=> 'Файл шаблону',
	'CACHE_FILESIZE'				=> 'Памер файла',
	'CACHE_MODIFIED'				=> 'Зменены',
	'CONFIRM_IMAGESET_REFRESH'		=> 'Вы сапраўды жадаеце абнавіць усе дадзеныя набору малюнкаў? Усё змены, вырабленыя рэдактарам набораў малюнкаў, будуць замененыя наладамі з файла канфігурацыі набору малюнкаў.',
	'CONFIRM_TEMPLATE_CLEAR_CACHE'	=> 'Вы сапраўды жадаеце выдаліць усе кэшаваныя версіі файлаў шаблону?',
	'CONFIRM_TEMPLATE_REFRESH'		=> 'Вы сапраўды жадаеце замяніць усе дадзеныя шаблону ў базе дадзеных на змесціва файлаў шаблону з сервера? Усё змены, вырабленыя з дапамогай рэдактара шаблонаў і захаваныя ў базе дадзеных, будуць страчаныя.',
	'CONFIRM_THEME_REFRESH'			=> 'Вы сапраўды жадаеце замяніць усе дадзеныя тэмы ў базе дадзеных на змесціва файлаў тэмы з сервера? Усё змены, вырабленыя з дапамогай рэдактара тэм і захаваныя ў базе дадзеных, будуць страчаныя.',
	'COPYRIGHT'						=> 'Капірайт',
	'CREATE_IMAGESET'				=> 'Стварыць набор малюнкаў',
	'CREATE_STYLE'					=> 'Стварыць стыль',
	'CREATE_TEMPLATE'				=> 'Стварыць шаблон',
	'CREATE_THEME'					=> 'Стварыць тэму',
	'CURRENT_IMAGE'					=> 'Дзеючы малюнак',

	'DEACTIVATE_DEFAULT'		=> 'Вы не можаце зрабіць неактыўным стыль па змаўчанні.',
	'DELETE_FROM_FS'			=> 'Выдаліць з сервера',
	'DELETE_IMAGESET'			=> 'Выдаліць набор малюнкаў',
	'DELETE_IMAGESET_EXPLAIN'	=> 'Тут вы можаце выдаліць з базы дадзеных вылучаны набор малюнкаў. Акрамя таго, пры наяўнасці праў доступу, вы можаце выдаліць набор малюнкаў з сервера. Калі ласка, улічыце, што адмяніць выдаленне немагчыма. Выдаленне набору малюнкаў адбываецца беззваротна. Рэкамендуецца спачатку экспартаваць набор малюнкаў для магчымага выкарыстання ў будучыні.',
	'DELETE_STYLE'				=> 'Выдаліць стыль',
	'DELETE_STYLE_EXPLAIN'		=> 'Тут вы можаце выдаліць вылучаны стыль. Вы не зможаце выдаліць усе элементы стылю. Яны павінны быць выдаленыя асобна праз адпаведныя формы. Будзьце асцярожныя з выдаленнем стыляў, аперацыю нельга будзе адмяніць.',
	'DELETE_TEMPLATE'			=> 'Выдаліць шаблон',
	'DELETE_TEMPLATE_EXPLAIN'	=> 'Тут вы можаце выдаліць з базы дадзеных вылучаны шаблон. Акрамя таго, пры наяўнасці праў доступу, вы можаце выдаліць шаблон з сервера. Калі ласка, улічыце, што адмяніць выдаленне немагчыма. Выдаленне шаблонаў адбываецца беззваротна. Рэкамендуецца спачатку экспартаваць шаблон для магчымага выкарыстання ў будучыні.',
	'DELETE_THEME'				=> 'Выдаліць тэму',
	'DELETE_THEME_EXPLAIN'		=> 'Тут вы можаце выдаліць з базы дадзеных вылучаную тэму. Акрамя таго, пры наяўнасці праў доступу, вы можаце выдаліць тэму з сервера. Калі ласка, улічыце, што адмяніць выдаленне немагчыма. Выдаленне тэм адбываецца беззваротна. Рэкамендуецца спачатку экспартаваць тэму для магчымага выкарыстання ў будучыні.',
	'DETAILS'					=> 'Інфармацыя',
	'DIMENSIONS_EXPLAIN'		=> 'Вылучыце «Так» для ўліку параметраў шырыні/вышыні.',

	'EDIT_DETAILS_IMAGESET'				=> 'Рэдагаваць інфармацыю аб наборы малюнкаў',
	'EDIT_DETAILS_IMAGESET_EXPLAIN'		=> 'Тут вы можаце рэдагаваць некаторыя звесткі аб наборы малюнкаў, такія, як яго найменне.',
	'EDIT_DETAILS_STYLE'				=> 'Рэдагаваць стыль',
	'EDIT_DETAILS_STYLE_EXPLAIN'		=> 'У форме ніжэй вы можаце змяняць наяўны стыль. Вы можаце камбінаваць шаблоны, тэмы і пакеты малюнкаў, складнікі сам стыль. Вы таксама можаце прызначыць стыль па змаўчанні.',
	'EDIT_DETAILS_TEMPLATE'				=> 'Рэдагаваць інфармацыю аб шаблоне',
	'EDIT_DETAILS_TEMPLATE_EXPLAIN'		=> 'Тут вы можаце рэдагаваць некаторыя звесткі аб шаблоне, такія, як яго найменне. Вы таксама можаце змяніць месца захоўвання параметраў стылю з сервера на базу дадзеных і зваротна. Гэтая магчымасць залежыць ад канфігурацыі PHP і ад наяўнасці дазволу на запіс файлаў шаблону вэб-серверам.',
	'EDIT_DETAILS_THEME'				=> 'Рэдагаваць інфармацыю аб тэме',
	'EDIT_DETAILS_THEME_EXPLAIN'		=> 'Тут вы можаце рэдагаваць некаторыя звесткі аб тэме, такія, як яе найменне. Вы можаце таксама змяніць месца захоўвання параметраў стылю з сервера на базу дадзеных і зваротна.  Гэтая магчымасць залежыць ад канфігурацыі PHP і ад наяўнасці дазволу на запіс параметраў стылю вэб-серверам.',
	'EDIT_IMAGESET'						=> 'Рэдагаваць набор малюнкаў',
	'EDIT_IMAGESET_EXPLAIN'				=> 'Тут вы можаце рэдагаваць асобныя малюнкі, уваходныя ў набор. Вы можаце таксама паказаць, ці ўлічваць памеры малюнка. Улік памераў не з\'яўляецца абавязковым, але можа рашыць праблемы адлюстравання ў некаторых браўзэрах. Калі памеры малюнка не ўлічваюцца, гэта трохі паменшыць памер базы дадзеных.',
	'EDIT_TEMPLATE'						=> 'Рэдагаваць шаблон',
	'EDIT_TEMPLATE_EXPLAIN'				=> 'Тут вы можаце напроста рэдагаваць шаблон. Калі ласка, не забывайце, што занесеныя змены канчатковыя і не могуць быць скасаваныя. Калі PHP мае магчымасць запісу ў файлы шаблону ў папцы стылю, любыя змены будуць запісаныя непасрэдна ў гэтыя файлы. У адваротным выпадку яны будуць скапіяваныя ў базу дадзеных і будуць захоўвацца толькі там. Калі ласка, будзьце акуратныя, рэдагуючы шаблон, не забывайце зачыняць усе пераменныя шаблону {XXXX} і ўмоўныя аператары.',
	'EDIT_TEMPLATE_STORED_DB'			=> 'Немагчыма запісаць файл шаблону, таму шаблон, які змяшчае зменены файл, захаваны ў базе дадзеных.',
	'EDIT_THEME'						=> 'Рэдагаваць тэму',
	'EDIT_THEME_EXPLAIN'				=> 'Тут вы можаце рэдагаваць вылучаную тэму, змяняць колеры, малюнкі і г.д. вы можаце перамыкацца паміж спрошчаным інтэрфейсам, з дапамогай якога можна рэдагаваць асноўныя колеры і т.п., і больш прасунутым рэжымам "код CSS". Рэжым кода дазваляе дадаваць дадатковыя параметры, такія, як межы і інш. Усталёўвайце гэтыя параметры толькі пры неабходнасці, інакш пакідайце іх пустымі або незаданными.',
	'EDIT_THEME_STORED_DB'				=> 'Немагчыма запісаць файл параметраў стылю, таму яны захаваныя ў базе дадзеных разам з занесенымі зменамі.',
	'EDIT_THEME_STORE_PARSED'			=> 'Дадзеная тэма патрабуе апрацоўкі яе шаблону. Гэта магчыма толькі ў выпадку захавання ў базе дадзеных.',
	'EXPORT'							=> 'Экспарт',

	'FOREGROUND'			=> 'Пярэдні план',
	'FONT_COLOUR'			=> 'Колер шрыфта',
	'FONT_FACE'				=> 'Тып шрыфта',
	'FONT_FACE_EXPLAIN'		=> 'Вы можаце задаць некалькі шрыфтоў, падзеленых коскамі. Калі ў карыстальніка не ўсталяваны першы з зададзеных шрыфтоў, будзе вылучаны першы ўсталяваны з спісу.',
	'FONT_SIZE'				=> 'Памер шрыфта',

	'GLOBAL_IMAGES'			=> 'Агульныя',

	'HIDE_CSS'				=> 'Схаваць код CSS',

	'IMAGE_WIDTH'				=> 'Шырыня малюнка',
	'IMAGE_HEIGHT'				=> 'Вышыня малюнка',
	'IMAGE'						=> 'Малюнак',
	'IMAGE_NAME'				=> 'Імя малюнка',
	'IMAGE_PARAMETER'			=> 'Параметр',
	'IMAGE_VALUE'				=> 'Значэнне',
	'IMAGESET_ADDED'			=> 'Новы набор малюнкаў дададзены на сервер.',
	'IMAGESET_ADDED_DB'			=> 'Новы набор малюнкаў дададзены ў базу дадзеных.',
	'IMAGESET_DELETED'			=> 'Набор малюнкаў паспяхова выдалены.',
	'IMAGESET_DELETED_FS'		=> 'Набор малюнкаў выдалены з базы дадзеных, але некаторыя файлы могуць заставацца на серверы.',
	'IMAGESET_DETAILS_UPDATED'	=> 'Інфармацыя аб наборы малюнкаў паспяхова абноўленая.',
	'IMAGESET_ERR_ARCHIVE'		=> 'Калі ласка, вылучыце метад архівавання.',
	'IMAGESET_ERR_COPY_LONG'	=> 'Даўжыня капірайту не можа быць больш 60 знакаў.',
	'IMAGESET_ERR_NAME_CHARS'	=> 'Найменне набору малюнкаў можа ўтрымоўваць толькі літарна-лічбавыя знакі, -, +, _ і прабел.',
	'IMAGESET_ERR_NAME_EXIST'	=> 'Набор малюнкаў з такім імем ужо існуе.',
	'IMAGESET_ERR_NAME_LONG'	=> 'Найменне набору малюнкаў не можа быць больш 30 знакаў.',
	'IMAGESET_ERR_NOT_IMAGESET'	=> 'Паказаны архіў не ўтрымоўвае неабходнага набору малюнкаў.',
	'IMAGESET_ERR_STYLE_NAME'	=> 'Вы павінны паказаць імя гэтага набору малюнкаў.',
	'IMAGESET_EXPORT'			=> 'Экспарт набору малюнкаў',
	'IMAGESET_EXPORT_EXPLAIN'	=> 'Тут вы можаце экспартаваць набор малюнкаў у архіў. Гэты архіў будзе ўтрымоўваць усе дадзеныя, неабходныя для ўсталёўкі набору малюнкаў на іншую канферэнцыю. Вы можаце вылучыць, ці запампоўваць файл напроста, або захаваць яго ў папцы store, каб запампаваць яго пазней праз FTP.',
	'IMAGESET_EXPORTED'			=> 'Набор малюнкаў паспяхова экспартаваны і захаваны ў %s.',
	'IMAGESET_NAME'				=> 'Імя набору малюнкаў',
	'IMAGESET_REFRESHED'		=> 'Набор малюнкаў паспяхова абноўлены.',
	'IMAGESET_UPDATED'			=> 'Набор малюнкаў паспяхова абноўлены.',
	'ITALIC'					=> 'Курсіў',

	'IMG_CAT_BUTTONS'		=> 'Кнопкі на іншых мовах',
	'IMG_CAT_CUSTOM'		=> 'Карыстальніцкія малюнкі',
	'IMG_CAT_FOLDERS'		=> 'Значкі тэм',
	'IMG_CAT_FORUMS'		=> 'Значкі форумаў',
	'IMG_CAT_ICONS'			=> 'Агульныя значкі',
	'IMG_CAT_LOGOS'			=> 'Лагатыпы',
	'IMG_CAT_POLLS'			=> 'Малюнкі апытанняў',
	'IMG_CAT_UI'			=> 'Агульныя элементы карыстальніцкага інтэрфейсу',
	'IMG_CAT_USER'			=> 'Дадатковыя малюнкі',

	'IMG_SITE_LOGO'			=> 'Галоўны лагатып',
	'IMG_UPLOAD_BAR'		=> 'Стан запампоўкі',
	'IMG_POLL_LEFT'			=> 'Апытанне злева',
	'IMG_POLL_CENTER'		=> 'Апытанне ў цэнтры',
	'IMG_POLL_RIGHT'		=> 'Апытанне справа',
	'IMG_ICON_FRIEND'		=> 'Дадаць у спіс сяброў',
	'IMG_ICON_FOE'			=> 'Дадаць у спіс злоснікаў',

	'IMG_FORUM_LINK'			=> 'Спасылка на форум',
	'IMG_FORUM_READ'			=> 'Форум',
	'IMG_FORUM_READ_LOCKED'		=> 'Форум зачынены',
	'IMG_FORUM_READ_SUBFORUM'	=> 'Падфорум',
	'IMG_FORUM_UNREAD'			=> 'Форум з новымі паведамленнямі',
	'IMG_FORUM_UNREAD_LOCKED'	=> 'Зачынены форум з новымі паведамленнямі',
	'IMG_FORUM_UNREAD_SUBFORUM'	=> 'Падфорум з новымі паведамленнямі',
	'IMG_SUBFORUM_READ'			=> 'Легенда падфорума',
	'IMG_SUBFORUM_UNREAD'		=> 'Легенда падфорума з новымі паведамленнямі',

	'IMG_TOPIC_MOVED'			=> 'Тэма перамешчаная',

	'IMG_TOPIC_READ'				=> 'Тэма',
	'IMG_TOPIC_READ_MINE'			=> 'Тэма з маімі паведамленнямі',
	'IMG_TOPIC_READ_HOT'			=> 'Гарачая тэма',
	'IMG_TOPIC_READ_HOT_MINE'		=> 'Гарачая тэма з маімі паведамленнямі',
	'IMG_TOPIC_READ_LOCKED'			=> 'Зачыненая тэма',
	'IMG_TOPIC_READ_LOCKED_MINE'	=> 'Зачыненая тэма з маімі паведамленнямі',

	'IMG_TOPIC_UNREAD'				=> 'Тэма з новымі паведамленнямі',
	'IMG_TOPIC_UNREAD_MINE'			=> 'Тэма з новымі паведамленнямі, якая змяшчае мае паведамленні',
	'IMG_TOPIC_UNREAD_HOT'			=> 'Гарачая тэма з новымі паведамленнямі',
	'IMG_TOPIC_UNREAD_HOT_MINE'		=> 'Гарачая тэма з новымі паведамленнямі, якая змяшчае мае паведамленні',
	'IMG_TOPIC_UNREAD_LOCKED'		=> 'Зачыненая тэма з новымі паведамленнямі',
	'IMG_TOPIC_UNREAD_LOCKED_MINE'	=> 'Зачыненая тэма з новымі паведамленнямі, якая змяшчае мае паведамленні',

	'IMG_STICKY_READ'				=> 'Прылепленая тэма',
	'IMG_STICKY_READ_MINE'			=> 'Прылепленая тэма з маімі паведамленнямі',
	'IMG_STICKY_READ_LOCKED'		=> 'Зачыненая прылепленая тэма',
	'IMG_STICKY_READ_LOCKED_MINE'	=> 'Зачыненая прылепленая тэма з маімі паведамленнямі',
	'IMG_STICKY_UNREAD'				=> 'Прылепленая тэма з новымі паведамленнямі',
	'IMG_STICKY_UNREAD_MINE'		=> 'Прылепленая тэма з новымі паведамленнямі, якая змяшчае мае паведамленні',
	'IMG_STICKY_UNREAD_LOCKED'		=> 'Зачыненая прылепленая тэма з новымі паведамленнямі',
	'IMG_STICKY_UNREAD_LOCKED_MINE'	=> 'Зачыненая прылепленая тэма з новымі паведамленнямі, якая змяшчае мае паведамленні',

	'IMG_ANNOUNCE_READ'					=> 'Аб\'ява',
	'IMG_ANNOUNCE_READ_MINE'			=> 'Аб\'ява з маімі паведамленнямі',
	'IMG_ANNOUNCE_READ_LOCKED'			=> 'Зачыненая аб\'ява',
	'IMG_ANNOUNCE_READ_LOCKED_MINE'		=> 'Зачыненая аб\'ява з маімі паведамленнямі',
	'IMG_ANNOUNCE_UNREAD'				=> 'Аб\'ява з новымі паведамленнямі',
	'IMG_ANNOUNCE_UNREAD_MINE'			=> 'Аб\'ява з новымі паведамленнямі, якое змяшчае мае паведамленні',
	'IMG_ANNOUNCE_UNREAD_LOCKED'		=> 'Зачыненая аб\'ява з новымі паведамленнямі',
	'IMG_ANNOUNCE_UNREAD_LOCKED_MINE'	=> 'Зачыненая аб\'ява з новымі паведамленнямі, якое змяшчае мае паведамленні',

	'IMG_GLOBAL_READ'					=> 'Агульная тэма',
	'IMG_GLOBAL_READ_MINE'				=> 'Агульная тэма з маімі паведамленнямі',
	'IMG_GLOBAL_READ_LOCKED'			=> 'Зачыненая агульная тэма',
	'IMG_GLOBAL_READ_LOCKED_MINE'		=> 'Зачыненая агульная тэма з маімі паведамленнямі',
	'IMG_GLOBAL_UNREAD'					=> 'Агульная тэма з новымі паведамленнямі',
	'IMG_GLOBAL_UNREAD_MINE'			=> 'Агульная тэма з новымі паведамленнямі, якая змяшчае мае паведамленні',
	'IMG_GLOBAL_UNREAD_LOCKED'			=> 'Зачыненая агульная тэма з новымі паведамленнямі',
	'IMG_GLOBAL_UNREAD_LOCKED_MINE'		=> 'Зачыненая агульная тэма з новымі паведамленнямі, якая змяшчае мае паведамленні',

	'IMG_PM_READ'		=> 'Прачытанае асабістае паведамленне',
	'IMG_PM_UNREAD'		=> 'Непрачытанае асабістае паведамленне',

	'IMG_ICON_BACK_TOP'		=> 'Наверх',

	'IMG_ICON_CONTACT_AIM'		=> 'AIM',
	'IMG_ICON_CONTACT_EMAIL'	=> 'Адправіць паведамленне email',
	'IMG_ICON_CONTACT_ICQ'		=> 'ICQ',
	'IMG_ICON_CONTACT_JABBER'	=> 'Jabber',
	'IMG_ICON_CONTACT_MSNM'		=> 'MSNM',
	'IMG_ICON_CONTACT_PM'		=> 'Адправіць паведамленне',
	'IMG_ICON_CONTACT_YAHOO'	=> 'YIM',
	'IMG_ICON_CONTACT_WWW'		=> 'Бачына карыстальніка',

	'IMG_ICON_POST_DELETE'			=> 'Выдаліць паведамленне',
	'IMG_ICON_POST_EDIT'			=> 'Рэдагаваць паведамленне',
	'IMG_ICON_POST_INFO'			=> 'Інфармацыя аб паведамленні',
	'IMG_ICON_POST_QUOTE'			=> 'Цытаваць паведамленне',
	'IMG_ICON_POST_REPORT'			=> 'Паскардзіцца на паведамленне',
	'IMG_ICON_POST_TARGET'			=> 'Значок паведамлення',
	'IMG_ICON_POST_TARGET_UNREAD'	=> 'Значок новага паведамлення',


	'IMG_ICON_TOPIC_ATTACH'			=> 'Укладанне',
	'IMG_ICON_TOPIC_LATEST'			=> 'Апошняе паведамленне',
	'IMG_ICON_TOPIC_NEWEST'			=> 'Апошняе непрачытанае паведамленне',
	'IMG_ICON_TOPIC_REPORTED'		=> 'Абскарджанае паведамленне',
	'IMG_ICON_TOPIC_UNAPPROVED'		=> 'Адхіленае паведамленне',

	'IMG_ICON_USER_ONLINE'		=> 'Карыстальнік у сеткі',
	'IMG_ICON_USER_OFFLINE'		=> 'Карыстальнік не ў сеткі',
	'IMG_ICON_USER_PROFILE'		=> 'Паказаць профіль карыстальніка',
	'IMG_ICON_USER_SEARCH'		=> 'Пошук паведамленняў',
	'IMG_ICON_USER_WARN'		=> 'Вынесці папярэджанне карыстальніку',

	'IMG_BUTTON_PM_FORWARD'		=> 'Пераслаць асабістае паведамленне',
	'IMG_BUTTON_PM_NEW'			=> 'Новае асабістае паведамленне',
	'IMG_BUTTON_PM_REPLY'		=> 'Адказаць на асабістае паведамленне',
	'IMG_BUTTON_TOPIC_LOCKED'	=> 'Тэма зачыненая',
	'IMG_BUTTON_TOPIC_NEW'		=> 'Новая тэма',
	'IMG_BUTTON_TOPIC_REPLY'	=> 'Адказаць на тэму',

	'IMG_USER_ICON1'		=> 'Карыстальніцкі малюнак 1',
	'IMG_USER_ICON2'		=> 'Карыстальніцкі малюнак 2',
	'IMG_USER_ICON3'		=> 'Карыстальніцкі малюнак 3',
	'IMG_USER_ICON4'		=> 'Карыстальніцкі малюнак 4',
	'IMG_USER_ICON5'		=> 'Карыстальніцкі малюнак 5',
	'IMG_USER_ICON6'		=> 'Карыстальніцкі малюнак 6',
	'IMG_USER_ICON7'		=> 'Карыстальніцкі малюнак 7',
	'IMG_USER_ICON8'		=> 'Карыстальніцкі малюнак 8',
	'IMG_USER_ICON9'		=> 'Карыстальніцкі малюнак 9',
	'IMG_USER_ICON10'		=> 'Карыстальніцкі малюнак 10',

	'INCLUDE_DIMENSIONS'		=> 'Улічыць памеры',
	'INCLUDE_IMAGESET'			=> 'Уключыць пакет малюнкаў',
	'INCLUDE_TEMPLATE'			=> 'Уключыць шаблон',
	'INCLUDE_THEME'				=> 'Уключыць тэму',
	'INSTALL_IMAGESET'			=> 'Усталяваць пакет малюнкаў',
	'INSTALL_IMAGESET_EXPLAIN'	=> 'Тут вы можаце ўсталяваць вылучаны пакет малюнкаў. Вы можаце па жаданні адрэдагаваць некаторыя налады, або выкарыстаць усталёўку па змаўчанні.',
	'INSTALL_STYLE'				=> 'Усталяваць стыль',
	'INSTALL_STYLE_EXPLAIN'		=> 'Тут вы можаце ўсталяваць новы стыль і адпаведныя яму элементы. У выпадку, калі прыдатныя элементы стылю ўжо ўсталяваныя, яны не будуць перазапісаныя. Некаторыя стылі патрабуюць, каб элементы наяўнага стылю былі ўжо ўсталяваныя. Пры спробе ўсталяваць такі стыль у адсутнасць патрабаваных элементаў, вы будзеце апавешчаныя.',
	'INSTALL_TEMPLATE'			=> 'Усталяваць шаблон',
	'INSTALL_TEMPLATE_EXPLAIN'	=> 'Тут вы можаце ўсталяваць новы шаблон. У залежнасці ад канфігурацыі сервера, вам могуць быць даступныя розныя магчымасці.',
	'INSTALL_THEME'				=> 'Усталяваць тэму',
	'INSTALL_THEME_EXPLAIN'		=> 'Тут вы можаце ўсталяваць вылучаную тэму. Вы можаце адрэдагаваць некаторыя налады або выкарыстаць усталёўкі па змаўчанні.',
	'INSTALLED_IMAGESET'		=> 'Усталяваныя наборы малюнкаў',
	'INSTALLED_STYLE'			=> 'Усталяваныя стылі',
	'INSTALLED_TEMPLATE'		=> 'Усталяваныя шаблоны',
	'INSTALLED_THEME'			=> 'Усталяваныя тэмы',

	'LINE_SPACING'				=> 'Інтэрвал паміж лініямі',
	'LOCALISED_IMAGES'			=> 'Малюнкі на іншых мовах',

	'NO_CLASS'					=> 'Не атрымалася знайсці клас у табліцы стыляў.',
	'NO_IMAGESET'				=> 'Не атрымалася знайсці пакет малюнкаў на серверы.',
	'NO_IMAGE'					=> 'Без малюнка',
	'NO_IMAGE_ERROR'			=> 'Не атрымалася знайсці малюнак у файлавай сістэме.',
	'NO_STYLE'					=> 'Не атрымалася знайсці стыль на серверы.',
	'NO_TEMPLATE'				=> 'Не атрымалася знайсці шаблон на серверы.',
	'NO_THEME'					=> 'Не атрымалася знайсці тэму на серверы.',
	'NO_UNINSTALLED_IMAGESET'	=> 'Усе наборы малюнкаў усталяваныя',
	'NO_UNINSTALLED_STYLE'		=> 'Усе стылі ўсталяваныя',
	'NO_UNINSTALLED_TEMPLATE'	=> 'Усе шаблоны ўсталяваныя',
	'NO_UNINSTALLED_THEME'		=> 'Усе тэмы ўсталяваныя',
	'NO_UNIT'					=> 'Не',

	'ONLY_IMAGESET'			=> 'Вы не можаце выдаліць апошні пакінуты набор малюнкаў.',
	'ONLY_STYLE'			=> 'Вы не можаце выдаліць апошні пакінуты стыль.',
	'ONLY_TEMPLATE'			=> 'Вы не можаце выдаліць апошні пакінуты шаблон.',
	'ONLY_THEME'			=> 'Вы не можаце выдаліць апошнюю пакінутую тэму.',
	'OPTIONAL_BASIS'		=> 'Дадатковая аснова',

	'REFRESH'					=> 'Абнавіць',
	'REPEAT_NO'					=> 'Не паўтараць',
	'REPEAT_X'					=> 'Толькі па гарызанталі',
	'REPEAT_Y'					=> 'Толькі па вертыкалі',
	'REPEAT_ALL'				=> 'У абодвух напрамках',
	'REPLACE_IMAGESET'			=> 'Замяніць набор малюнкаў на',
	'REPLACE_IMAGESET_EXPLAIN'	=> 'Гэты набор малюнкаў заменіць выдаляемы ва ўсіх стылях, дзе ён выкарыстоўваецца.',
	'REPLACE_STYLE'				=> 'Замяніць стыль на',
	'REPLACE_STYLE_EXPLAIN'		=> 'Гэты стыль заменіць выдаляемы для карыстальнікаў, якія яго выкарыстаюць.',
	'REPLACE_TEMPLATE'			=> 'Замяніць шаблон на',
	'REPLACE_TEMPLATE_EXPLAIN'	=> 'Гэты шаблон заменіць выдаляемы ва ўсіх стылях, дзе ён выкарыстоўваецца.',
	'REPLACE_THEME'				=> 'Замяніць тэму на',
	'REPLACE_THEME_EXPLAIN'		=> 'Гэтая тэма заменіць выдаляемую ва ўсіх стылях, дзе яна выкарыстоўваецца.',
	'REQUIRES_IMAGESET'			=> 'Гэтаму стылю патрабуецца ўсталяваны набор малюнкаў %s.',
	'REQUIRES_TEMPLATE'			=> 'Гэтаму стылю патрабуецца ўсталяваны шаблон %s.',
	'REQUIRES_THEME'			=> 'Гэтаму стылю патрабуецца ўсталяваная тэма %s.',

	'SELECT_IMAGE'				=> 'Вылучыць малюнак',
	'SELECT_TEMPLATE'			=> 'Вылучыць файл шаблону',
	'SELECT_THEME'				=> 'Вылучыце файл тэмы',
	'SELECTED_IMAGE'			=> 'Вылучаны малюнак',
	'SELECTED_IMAGESET'			=> 'Вылучаны пакет малюнкаў',
	'SELECTED_TEMPLATE'			=> 'Вылучаны шаблон',
	'SELECTED_TEMPLATE_FILE'	=> 'Вылучаны файл шаблону',
	'SELECTED_THEME'			=> 'Вылучаная тэма',
	'SELECTED_THEME_FILE'		=> 'Вылучаны файл тэмы',
	'STORE_DATABASE'			=> 'База дадзеных',
	'STORE_FILESYSTEM'			=> 'Сервер',
	'STYLE_ACTIVATE'			=> 'Актываваць',
	'STYLE_ACTIVE'				=> 'Актываваны',
	'STYLE_ADDED'				=> 'Стыль паспяхова дададзены.',
	'STYLE_DEACTIVATE'			=> 'Дэактываваць',
	'STYLE_DEFAULT'				=> 'Прызначыць выкарыстоўваным па змаўчанні',
	'STYLE_DELETED'				=> 'Стыль паспяхова выдалены.',
	'STYLE_DETAILS_UPDATED'		=> 'Стыль паспяхова адрэдагаваны.',
	'STYLE_ERR_ARCHIVE'			=> 'Калі ласка, вылучыце метад архівавання.',
	'STYLE_ERR_COPY_LONG'		=> 'Даўжыня капірайту не можа быць больш 60 знакаў.',
	'STYLE_ERR_MORE_ELEMENTS'	=> 'Вы павінны вылучыць хоць бы адзін элемент стылю.',
	'STYLE_ERR_NAME_CHARS'		=> 'Імя стылю можа ўтрымоўваць толькі літарна-лічбавыя знакі, -, +, _ і прабел.',
	'STYLE_ERR_NAME_EXIST'		=> 'Стыль з такім імем ужо існуе.',
	'STYLE_ERR_NAME_LONG'		=> 'Імя стылю не можа быць даўжэй 30 знакаў.',
	'STYLE_ERR_NO_IDS'			=> 'Вы павінны вылучыць шаблон, тэму і пакет малюнкаў для гэтага стылю.',
	'STYLE_ERR_NOT_STYLE'		=> 'Імпартаваны або загружаны файл не ўтрымоўвае архіва стылю.',
	'STYLE_ERR_STYLE_NAME'		=> 'Вы павінны задаць імя для гэтага стылю.',
	'STYLE_EXPORT'				=> 'Экспарт стылю',
	'STYLE_EXPORT_EXPLAIN'		=> 'Тут вы можаце экспартаваць стыль у выглядзе архіва. Стыль можа не ўтрымоўваць усіх элементаў, але павінен утрымоўваць хоць бы адзін з іх. Напрыклад, калі вы стварылі новую тэму і набор малюнкаў для общеиспользуемого шаблону, вы можаце проста экспартаваць тэму і набор малюнкаў без шаблону. Вы можаце вылучыць, ці запампоўваць файл напроста, або захаваць яго ў папцы store, каб запампаваць яго пазней праз FTP.',
	'STYLE_EXPORTED'			=> 'Стыль паспяхова экспартаваны і захаваны ў %s.',
	'STYLE_IMAGESET'			=> 'Набор малюнкаў',
	'STYLE_NAME'				=> 'Імя стылю',
	'STYLE_TEMPLATE'			=> 'Шаблон',
	'STYLE_THEME'				=> 'Тэма',
	'STYLE_USED_BY'				=> 'Выкарыстаюць (уключаючы робатаў)',

	'TEMPLATE_ADDED'			=> 'Шаблон дададзены і захаваны на серверы.',
	'TEMPLATE_ADDED_DB'			=> 'Шаблон дададзены і захаваны ў базе дадзеных.',
	'TEMPLATE_CACHE'			=> 'Кэш шаблонаў',
	'TEMPLATE_CACHE_EXPLAIN'	=> 'Па змаўчанні phpBB кэшуе скампіляваную версію шаблонаў. Гэта памяншае нагрузку на сервер пры кожным праглядзе старонак і, такім чынам, можа знізіць час іх генеравання. Тут вы можаце праглядзець статут кэша для кожнага з файлаў і выдаліць асобныя файлы або ўвесь кэш.',
	'TEMPLATE_CACHE_CLEARED'	=> 'Кэш шаблону паспяхова вычышчаны.',
	'TEMPLATE_CACHE_EMPTY'		=> 'Няма кэшаваных шаблонаў.',
	'TEMPLATE_DELETED'			=> 'Шаблон паспяхова выдалены.',
	'TEMPLATE_DELETED_FS'		=> 'Шаблон выдалены з базы дадзеных, аднак некаторыя файлы могуць заставацца на серверы.',
	'TEMPLATE_DETAILS_UPDATED'	=> 'Інфармацыя аб шаблоне паспяхова абноўленая.',
	'TEMPLATE_EDITOR'			=> 'Рэдактар HTML-кода шаблонаў',
	'TEMPLATE_EDITOR_HEIGHT'	=> 'Вышыня рэдактара шаблону',
	'TEMPLATE_ERR_ARCHIVE'		=> 'Калі ласка, вылучыце метад архівавання.',
	'TEMPLATE_ERR_CACHE_READ'	=> 'Немагчыма адчыніць папку кэша, выкарыстоўваная для захоўвання кэшаваных версій файлаў шаблону.',
	'TEMPLATE_ERR_COPY_LONG'	=> 'Даўжыня капірайту не можа быць больш 60 знакаў.',
	'TEMPLATE_ERR_NAME_CHARS'	=> 'Імя шаблону можа ўтрымоўваць толькі літарна-лічбавыя знакі, -, +, _ і прабел.',
	'TEMPLATE_ERR_NAME_EXIST'	=> 'Шаблон з такім імем ужо існуе.',
	'TEMPLATE_ERR_NAME_LONG'	=> 'Імя шаблону не можа быць даўжэй 30 знакаў.',
	'TEMPLATE_ERR_NOT_TEMPLATE'	=> 'Паказаны архіў не ўтрымоўвае шаблону.',
	'TEMPLATE_ERR_STYLE_NAME'	=> 'Вы павінны задаць імя для гэтага шаблону.',
	'TEMPLATE_EXPORT'			=> 'Экспарт шаблонаў',
	'TEMPLATE_EXPORT_EXPLAIN'	=> 'Тут вы можаце экспартаваць шаблон у выглядзе архіва. Гэты архіў будзе ўтрымоўваць усе файлы, неабходныя для ўсталёўкі шаблону на іншую канферэнцыю. Вы можаце вылучыць, ці запампоўваць файл напроста, або захаваць яго ў папцы store, каб запампаваць яго пазней праз FTP.',
	'TEMPLATE_EXPORTED'			=> 'Шаблон паспяхова экспартаваны і захаваны ў %s.',
	'TEMPLATE_FILE'				=> 'Файл шаблону',
	'TEMPLATE_FILE_UPDATED'		=> 'Файл шаблону паспяхова абноўлены.',
	'TEMPLATE_LOCATION'			=> 'Захаваць шаблон у',
	'TEMPLATE_LOCATION_EXPLAIN'	=> 'Малюнкі заўсёды захоўваюцца на серверы.',
	'TEMPLATE_NAME'				=> 'Імя шаблону',
	'TEMPLATE_REFRESHED'		=> 'Шаблон паспяхова абноўлены.',

	'THEME_ADDED'				=> 'Новая тэма дададзеная на сервер.',
	'THEME_ADDED_DB'			=> 'Новая тэма дададзеная ў базу дадзеных.',
	'THEME_CLASS_ADDED'			=> 'Карыстальніцкі клас паспяхова дададзены.',
	'THEME_DELETED'				=> 'Тэма паспяхова выдаленая.',
	'THEME_DELETED_FS'			=> 'Тэма выдаленая з базы дадзеных, але файлы застаюцца на серверы.',
	'THEME_DETAILS_UPDATED'		=> 'Інфармацыя аб тэме паспяхова абноўленая.',
	'THEME_EDITOR'				=> 'Рэдактар кода CSS тэмы',
	'THEME_EDITOR_HEIGHT'		=> 'Вышыня рэдактара тэмы',
	'THEME_ERR_ARCHIVE'			=> 'Калі ласка, вылучыце метад архівавання.',
	'THEME_ERR_CLASS_CHARS'		=> 'Толькі літарна-лічбавыя знакі, а таксама ., :, -, _ і # дапушчальныя ў імёнах класаў.',
	'THEME_ERR_COPY_LONG'		=> 'Даўжыня капірайту не можа быць больш 60 знакаў.',
	'THEME_ERR_NAME_CHARS'		=> 'Імя тэмы можа ўтрымоўваць толькі літарна-лічбавыя знакі, -, +, _ і прабел.',
	'THEME_ERR_NAME_EXIST'		=> 'Тэма з такім імем ужо існуе.',
	'THEME_ERR_NAME_LONG'		=> 'Імя тэмы не можа быць даўжэй 30 знакаў.',
	'THEME_ERR_NOT_THEME'		=> 'Паказаны архіў не ўтрымоўвае тэмы.',
	'THEME_ERR_REFRESH_FS'		=> 'Гэтая тэма захоўваецца на серверы і не патрабуе абнаўленні.',
	'THEME_ERR_STYLE_NAME'		=> 'Вы павінны задаць імя для гэтай тэмы.',
	'THEME_FILE'				=> 'Файл тэмы',
	'THEME_EXPORT'				=> 'Экспарт тэмы',
	'THEME_EXPORT_EXPLAIN'		=> 'Тут вы можаце экспартаваць тэму ў выглядзе архіва. Гэты архіў будзе ўтрымоўваць усе дадзеныя, неабходныя для ўсталёўкі тэмы на іншую канферэнцыю. Вы можаце вылучыць, ці запампоўваць файл напроста, або захаваць яго ў папцы store, каб запампаваць яго пазней праз FTP.',
	'THEME_EXPORTED'			=> 'Тэма паспяхова экспартаваная і захаваная ў %s.',
	'THEME_LOCATION'			=> 'Захаваць параметры стылю ў',
	'THEME_LOCATION_EXPLAIN'	=> 'Малюнкі заўсёды захоўваюцца на серверы.',
	'THEME_NAME'				=> 'Імя тэмы',
	'THEME_REFRESHED'			=> 'Тэма паспяхова абноўленая.',
	'THEME_UPDATED'				=> 'Клас паспяхова абноўлены.',

	'UNDERLINE'				=> 'Падкрэслены',
	'UNINSTALLED_IMAGESET'	=> 'Даступныя для ўсталёўкі наборы малюнкаў',
	'UNINSTALLED_STYLE'		=> 'Даступныя для ўсталёўкі стылі',
	'UNINSTALLED_TEMPLATE'	=> 'Даступныя для ўсталёўкі шаблоны',
	'UNINSTALLED_THEME'		=> 'Даступныя для ўсталёўкі тэмы',
	'UNSET'					=> 'Не ўсталявана',

));

?>