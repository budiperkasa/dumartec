<?php
/**
*
* help_bbcode [Ukrainian]
*
* @package language
* @version $Id: help_bbcode.php,v 1.27 2007/10/04 15:07:24 acydburn Exp $
* @copyright (c) 2005 phpBB Group
* @license http://opensource.org/licenses/gpl-license.php GNU Public License
*
*/

/**
*/
if (!defined('IN_PHPBB'))
{
	exit;
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

$help = array(
	array(
		0 => '--',
		1 => 'Вступ'
	),
	array(
		0 => 'Що таке BBCode?',
		1 => 'BBCode - це особлива реалізація HTML, можливість його використання визначається адміністратором. Крім цього, ви можете відмовитись від використання BBCode у власних налаштуваннях профілю чи при написанні повідомлення. BBCode схожий по стилю на HTML, теги заключаються в квадратні дужки [ і ], а не в &lt; і &gt;, він надає більш широкі можливості виведення інформації на екран. В деяких темах (стилях phpBB) ви можете вставляти BBCode в ваші повідомлення, користуючись простим інтерфейсом, який знаходиться над полем вводу тексту в формі написання повідомлень. Але навіть у цьому випадку даний посібник може виявитись корисним.'
	),
	array(
		0 => '--',
		1 => 'Форматування тексту'
	),
	array(
		0 => 'Як написати жирний, виділений курсивом чи підкреслений текст',
		1 => 'В BBCode існують теги, які дозволяють швидко змінити стиль вашого тексту. Це можна зробити такими способами: <ul><li>Щоб зробити текст жирним, введіть його між тегами<strong>[b][/b]</strong>, напр. <br /><br /><strong>[b]</strong>Привіт!<strong>[/b]</strong><br /><br />перетвориться на <strong>Привіт!</strong></li><li>Для підкреслення використовуйте <strong>[u][/u]</strong>, наприклад:<br /><br /><strong>[u]</strong>Доброго ранку!<strong>[/u]</strong><br /><br />перетвориться на <u>Доброго ранку!</u></li><li>Для написання курсивного тексту використовуйте <strong>[i][/i]</strong>, напр. <br /><br />Це <strong>[i]</strong>чудово!<strong>[/i]</strong><br /><br /> дасть такий результат: Це <i>чудово!</i></li></ul>'
	),
	array(
		0 => 'Як змінити колір або розмір тексту',
		1 => 'Для того, щоб змінити колір тексту можна використовувати наступні теги. Зауважте, що відображення кольорів залежить від браузера та системи: <ul><li>Для того, щоб змінити колір тексту, потрібно помістити його в тег <strong>[color=][/color]</strong>. Ви можете задати назву кольору (напр. red, blue, yellow і т.п.) або ввести його в шістнадцятирозрядному форматі, напр. #FFFFFF, #000000. Наприклад, для створення червоного тексту використовуйте:<br /><br /><strong>[color=red]</strong>Привіт!<strong>[/color]</strong><br /><br />або<br /><br /><strong>[color=#FF0000]</strong>Привіт!<strong>[/color]</strong><br /><br />обидва способи дадуть однаковий результат: <span style="color:red">Привіт!</span></li><li>Зміна розміру тексту досягається аналогічним способом через використання тега <strong>[size=][/size]</strong>. Цей тег залежить від теми (стилю phpBB), який використовується, але рекомендований формат - числове значення розміру тексту в пікселях від 1 (настільки маленький, що ви його не побачите) до 29 (дуже великий). Наприклад:<br /><br /><strong>[size=9]</strong>МАЛЕНЬКИЙ<strong>[/size]</strong><br /><br />дасть такий результат: <span style="font-size:9px;">МАЛЕНЬКИЙ</span><br /><br />в той час як:<br /><br /><strong>[size=24]</strong>ГІГАНТСЬКИЙ!<strong>[/size]</strong><br /><br />буде <span style="font-size:24px;">ГІГІАНТСЬКИЙ!</span></li></ul>'
	),
	array(
		0 => 'Чи можу я комбінувати теги?',
		1 => 'Так, звичайно, можете, наприклад, щоб привернути чиюсь увагу ви можете написати:<br /><br /><strong>[size=18][color=red][b]</strong>ПОДИВІТЬСЯ НА МЕНЕ!<strong>[/b][/color][/size]</strong><br /><br />це виведе <span style="color:red;font-size:18px;"><strong>ПОДИВІТЬСЯ НА МЕНЕ!</strong></span><br /><br />Ми не рекомендуємо вам виводити великий об\'єм тексту таким способом! Пам\'ятайте, що, ви, автор повідомлення, повинні потурбуватись про те, щоб теги були правильно закриті. Наприклад, таке використання неправильне:<br /><br /><strong>[b][u]</strong>Це неправильно<strong>[/b][/u]</strong>'
	),
	array(
		0 => '--',
		1 => 'Цитування та виведення тексту фіксованої величини'
	),
	array(
		0 => 'Цитування тексту в відповідях',
		1 => 'Існує два способи цитування тексту, з посиланням та без нього.<ul><li>Коли ви використовуєте кнопку "Цитата", щоб відповісти на повідомлення форуму, зауважте, що текст повідомлення поміщений в вікно вашого повідомлення, розміщений між тегами <strong>[quote=""][/quote]</strong>. Цей метод дозволяє вам цитувати з посиланням на автора або ще на щось - те, що ви туди впишите. Наприклад, для цитування частини тексту пана Олега вам потрібно ввести:<br /><br /><strong>[quote="Олег"]</strong>Текст пана Олега буде поміщено тут<strong>[/quote]</strong><br /><br />В результаті перед текстом буде виведено фразу "Пан Оле писав(ла):". Пам\'ятайте, ви <strong>повинні</strong> помістити в лапки "" ім\'я того, кого ви цитуєте, вони не можуть бути опущеними.</li><li>Другий метод дозволяє вам просто щось цитувати. Для цього вам потрібно просто помістити текст в теги <strong>[quote][/quote]</strong>. При перегляді повідомлення перед текстом просто буде відображатись слово "Цитата:".</li></ul>'
	),
	array(
		0 => 'Виведення коду або тексту фіксованої величини',
		1 => 'Якщо ви хочете вставити частину коду чи щось, що повинно бути виведено текстом фіксованої ширини, напр. шрифтом Courier, ви повинні помістити текст в теги <strong>[code][/code]</strong, наприклад: <br /><br /><strong>[code]</strong>echo "This is some code";<strong>[/code]</strong><br /><br />Все форматування тексту в тегах <strong>[code][/code]</strong> буде збережено.'
	),
	array(
		0 => '--',
		1 => 'Створення списків'
	),
	array(
		0 => 'Створення ненумерованого списку',
		1 => 'BBCode підтримує два види списків: нумеровані і ненумеровані. Вони практично ідентичні своїм еквівалентам в HTML. В ненумерованому списку кожний елемент виводиться послідовно один за одним, кожен з них помічається символом-маркером. Для того, щоб створити ненумерований список, скористайтесь тегом <strong>[list][/list]</strong> і визначте кожен елемент списку за допомогою <strong>[*]</strong>. Наприклад, щоб вивести список ваших улюблених кольорів, використовуйте:<br /><br /><strong>[list]</strong><br /><strong>[*]</strong>Червоний<br /><strong>[*]</strong>Синій<br /><strong>[*]</strong>Жовтий<br /><strong>[/list]</strong><br /><br />Це видасть наступний список:<ul><li>Червоний</li><li>Синій</li><li>Жовтий</li></ul>'
	),
	array(
		0 => 'Створення нумерованого списку',
		1 => 'Другий тип списку, нумерований, дозволяє вибрати, що саме буде виводитись перед кожним елементом. Для створення нумерованого списку використовуйте <strong>[list=1][/list]</strong> або <strong>[list=a][/list]</strong> для алфавітного списку. Як і для ненумерованого списку елементи задаються за допомогою символу <strong>[*]</strong>. Наприклад:<br /><br /><strong>[list=1]</strong><br /><strong>[*]</strong>Сходити за покупками<br /><strong>[*]</strong>Купити новий комп`ютер<br /><strong>[*]</strong>Swear at computer when it crashes<br /><strong>[/list]</strong><br /><br />видасть наступне:<ol type="1"><li>Сходити за покупками</li><li>Купити новий комп`ютер</li><li>Swear at computer when it crashes</li></ol>Whereas for an alphabetical list you would use:<br /><br /><strong>[list=a]</strong><br /><strong>[*]</strong>Перша можлива відповідь<br /><strong>[*]</strong>Друга можлива відповідь<br /><strong>[*]</strong>Третя можлива відповідь<br /><strong>[/list]</strong><br /><br />giving<ol type="a"><li>Перша можлива відповідь</li><li>Друга можлива відповідь</li><li>Третя можлива відповідь</li></ol>'
	),
	array(
		0 => '--',
		1 => 'Створення посилань'
	),
	array(
		0 => 'Посилання на інший сайт',
		1 => 'Код BBCode від phpBB підтримує декілька способів створення URI, Uniform Resource Indicators більш відомих як URL.<ul><li>Перший спосіб - використання тегу <strong>[url=][/url]</strong>, після знаку = повинна бути вказана адреса URL. Наприклад, для створення посилання на сайт phpBB.com вам потрібно написати:<br /><br /><strong>[url=http://www.phpbb.com/]</strong>Відвідайте phpBB!<strong>[/url]</strong><br /><br />Це створить таке посилання: <a href="http://www.phpbb.com/" target="_blank">Відвідайте phpBB!</a> Зауважте, що посилання буде відкриватись у новому вікні і користувач зможе продовжувати переглядати форуми далі.</li><li>Якщо ви хочете, щоб адреса URL сама відображалась як посилання, ви можете зробити це за допомогою:<br /><br /><strong>[url]</strong>http://www.phpbb.com/<strong>[/url]</strong><br /><br />Це видасть наступне посилання - <a href="http://www.phpbb.com/" target="_blank">http://www.phpbb.com/</a></li><li>Крім того, phpBB підтримує таку можливість, яка називається <i>Magic Links</i>, яка переводить будь-яку коректну адресу URL в посилання без використання жодних тегів і навіть префікса http://. Наприклад, написання www.phpbb.com в вашому повідомленні автоматично перетвориться на <a href="http://www.phpbb.com/" target="_blank">www.phpbb.com</a> при перегляді повідомлення.</li><li>Те ж саме стосується вашої адреси електронної пошти, ви можете вказати вашу адресу явно, наприклад:<br /><br /><strong>[email]</strong>no.one@domain.adr<strong>[/email]</strong><br /><br />що видасть <a href="mailto:no.one@domain.adr">no.one@domain.adr</a> або просто написати no.one@domain.adr в вашому повідомленні, і це буде автоматично перетворено при перегляді.</li></ul>Як і з усіма тегами BBCode ви можете вставляти теги URL всередину інших тегів і між ними, таких як <strong>[img][/img]</strong> (дивіться наступний пункт), <strong>[b][/b]</strong>, та іншими. Як і з тегами форматування, правильне відкриття і закриття тегів залежить від вас, наприклад:<br /><br /><strong>[url=http://www.google.com/][img]</strong>http://www.google.com/intl/en_ALL/images/logo.gif<strong>[/url][/img]</strong><br /><br />є <u>некоректним</u>, що може призвести до подальшого видалення вашого повідомлення, тому слід потурбуватись про це.'
	),
	array(
		0 => '--',
		1 => 'Додавання графічних зображень та приєднання файлів в повідомлення'
	),
	array(
		0 => 'Додавання зображень в повідомлення',
		1 => 'BBCode від phpBB містить тег для розміщення зображень в ваших повідомленнях. При використанні цього тега слід пам\'ятати дві важливі речі: по-перше, велика кількість зображень в повідомленнях може дратувати багатьох користувачів, по-друге, ваше зображення вже повинне знаходитись в інтернеті (наприклад, якщо зображення знаходиться лише на вашому комп\'ютері - то ви не зможете його зробити доступним іншим, за винятком, якщо у вас запущений вебсервер). Для того, щоб вивести зображення, вам необхідно вказати його адресу URL між тегами <strong>[img][/img]</strong>. Наприклад:<br /><br /><strong>[img]</strong>http://www.google.com/intl/en_ALL/images/logo.gif<strong>[/img]</strong><br /><br />Як вказано в попередньому пункті ви можете вставити зображення в тег <strong>[url][/url]</strong> при бажанні, тобто<br /><br /><strong>[url=http://www.google.com/][img]</strong>http://www.google.com/intl/en_ALL/images/logo.gif<strong>[/img][/url]</strong><br /><br />видасть:<br /><br /><a href="http://www.google.com/" target="_blank"><img src="http://www.google.com/intl/en_ALL/images/logo.gif" alt="" /></a>'
	),
	array(
		0 => 'Приєднання файлів до повідомлення',
		1 => 'Тепер ви можете приєднувати файли в будь-якому місці повідомення за допомогою нового коду BBCode: <strong>[attachment=][/attachment]</strong> , якщо ця функція увімкнена адміністратором та вам надані відповідні права для приєднання файлів. Приєднання файлів можливе за допомогою відповідного поля, яке знаходиться під формою відправки повідомлення.'
	),
	array(
		0 => '--',
		1 => 'Інше'
	),
	array(
		0 => 'Чи можу я створити власні теги?',
		1 => 'Якщо ви адміністратор цього форуму і маєте відповідні повноваження, ви можете створити нові коди BBCode через розділ адміністратора.'
	)
);

?>