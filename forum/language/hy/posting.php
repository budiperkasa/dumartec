<?php
/** 
*
* posting [Russian]
*
* @package language
* @version $Id: posting.php,v 1.74 2007/10/04 15:07:24 acydburn Exp $
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
	'ADD_ATTACHMENT'			=> 'Կցորդներ ավելացնել',
	'ADD_ATTACHMENT_EXPLAIN'	=> 'Եթե դուք չեք ցանկանում կցորդներ ավելացնել, դատարկ թողեք դաշտերը:',
	'ADD_FILE'					=> 'Ֆայլ կցել',
	'ADD_POLL'					=> 'Добавить опрос',
	'ADD_POLL_EXPLAIN'			=> 'Если вы не хотите добавлять опрос к вашему сообщению, оставьте поля пустыми.',
	'ALREADY_DELETED'			=> 'Это сообщение уже удалено.',
	'ATTACH_QUOTA_REACHED'		=> 'Достигнут максимальный общий размер ваших вложений.',
	'ATTACH_SIG'				=> 'Կցել ստորագրությունը (ստորագրությունը կարելի է փոխել անձնական մասում)',

	'BBCODE_A_HELP'				=> 'Հաղորդագրության տեքստի մեջ կցորդ ներմուծեք: [attachment=]filename.ext[/attachment]',
	'BBCODE_B_HELP'				=> 'Հաստատառ տեքստ: [b]text[/b]',
	'BBCODE_C_HELP'				=> 'Կոդ: [code]code[/code]',
	'BBCODE_E_HELP'				=> 'Ցուցակ`ցւցակի կետ ավելացնել:',
	'BBCODE_F_HELP'				=> 'Տառաչափը: [size=85]small text[/size]',
	'BBCODE_IS_OFF'				=> '%sBB կոդ%s <em>անջատված է</em>',
	'BBCODE_IS_ON'				=> '%sBB կոդ%s <em>միացված է</em>',
	'BBCODE_I_HELP'				=> 'Շեղատառ տեքստ: [i]text[/i]',
	'BBCODE_L_HELP'				=> 'Ցուցակ: [list]text[/list]',
	'BBCODE_LISTITEM_HELP'		=> 'Ցուցակի կետ: [*]text[/*]',
	'BBCODE_O_HELP'				=> 'Համարակալված ցուցակ: [list=]text[/list]',
	'BBCODE_P_HELP'				=> 'Ներմուծել պատկեր: [img]http://image_url[/img]',
	'BBCODE_Q_HELP'				=> 'Մեջբերում: [quote]text[/quote]',
	'BBCODE_S_HELP'				=> 'Տառատեսակի գույնը: [color=red]text[/color] Խորհուրդ. դուք կարող եք օգտագործել նաև color=#FF0000 կառույցը',
	'BBCODE_U_HELP'				=> 'Ընդգծված տեքստ: [u]text[/u]',
	'BBCODE_W_HELP'				=> 'Ներմուծել հղում: [url]http://url[/url] или [url=http://url]URL text[/url]',
	'BBCODE_D_HELP'				=> 'Ֆլեշ: [flash=width,height]http://url[/flash]',
	'BUMP_ERROR'				=> 'Вы не можете поднимать тему сразу после последнего сообщения. Попробуйте чуть позже.',

	'CANNOT_DELETE_REPLIED'		=> 'Извините, но вы можете удалять только сообщения, не имеющие ответов.',
	'CANNOT_EDIT_POST_LOCKED'	=> 'Это сообщение было заблокировано, вы не можете его редактировать.',
	'CANNOT_EDIT_TIME'			=> 'Вы больше не можете редактировать или удалять это сообщение.',
	'CANNOT_POST_ANNOUNCE'		=> 'Вы не можете создавать объявления.',
	'CANNOT_POST_STICKY'		=> 'Вы не можете создавать прилепленные темы.',
	'CHANGE_TOPIC_TO'			=> 'Изменить тему на',
	'CLOSE_TAGS'				=> 'Закрыть тэги',
	'CURRENT_TOPIC'				=> 'Текущая тема',

	'DELETE_FILE'				=> 'Удалить файл',
	'DELETE_MESSAGE'			=> 'Удалить сообщение',
	'DELETE_MESSAGE_CONFIRM'	=> 'Вы уверены, что хотите удалить это сообщение?',
	'DELETE_OWN_POSTS'			=> 'Извините, но вы можете удалять только ваши собственные сообщения.',
	'DELETE_POST_CONFIRM'		=> 'Вы уверены, что хотите удалить это сообщение?',
	'DELETE_POST_WARN'			=> 'Удаленное сообщение восстановить невозможно',
	'DISABLE_BBCODE'			=> 'Այս հաղորդագրության մեջ անջատել BB կոդը',
	'DISABLE_MAGIC_URL'			=> 'URL հասցեն հղում չդարձնել',
	'DISABLE_SMILIES'			=> 'Այս հաղորդագրության մեջ անջատել սմայլերը',
	'DISALLOWED_EXTENSION'		=> 'Расширение %s запрещено администратором.',
	'DRAFT_LOADED'				=> 'Черновик загружен, вы можете закончить редактирование сообщения сейчас.<br />После отправки этого сообщения черновик будет удалён.',
	'DRAFT_LOADED_PM'			=> 'Черновик загружен, вы можете закончить редактирование личного сообщения сейчас.<br />После отправки этого личного сообщения черновик будет удалён.',
	'DRAFT_SAVED'				=> 'Սևագիրը բարեհաջող պահպանվել է:',
	'DRAFT_TITLE'				=> 'Սևագրի վերնագիրը',

	'EDIT_REASON'				=> 'Причина редактирования сообщения',
	'EMPTY_FILEUPLOAD'			=> 'Загруженный файл пустой.',
	'EMPTY_MESSAGE'				=> 'Вы должны ввести текст сообщения',
	'EMPTY_REMOTE_DATA'			=> 'Не удалось закачать файл, пожалуйста, попробуйте закачать его вручную.',

	'FLASH_IS_OFF'				=> '[flash] <em>անջատված է</em>',
	'FLASH_IS_ON'				=> '[flash] <em>միացված է</em>',
	'FLOOD_ERROR'				=> 'Вы не можете отправить следующее сообщение сразу после предыдущего. Пожалуйста, попробуйте чуть позже.',
	'FONT_COLOR'				=> 'Տառատեսակի գույնը',
	'FONT_COLOR_HIDE'			=> 'Թաքցնել գույնի վահանակը',
	'FONT_HUGE'					=> 'Շատ մեծ',
	'FONT_LARGE'				=> 'Մեծ',
	'FONT_NORMAL'				=> 'Միջին',
	'FONT_SIZE'					=> 'Տառաչափ',
	'FONT_SMALL'				=> 'Փոքր',
	'FONT_TINY'					=> 'Շատ փոքր',

	'GENERAL_UPLOAD_ERROR'		=> 'Не удалось закачать вложение %s.',

	'IMAGES_ARE_OFF'			=> '[img] <em>անջատված է</em>',
	'IMAGES_ARE_ON'				=> '[img] <em>միացված է</em>',
	'INVALID_FILENAME'			=> '%s является недопустимым именем файла.',

	'LOAD'						=> 'Բեռնավորել',
	'LOAD_DRAFT'				=> 'Բեռնավորել սևագիր',
	'LOAD_DRAFT_EXPLAIN'		=> 'Դուք կարող եք ընտրել սևագիր հաղորդագրության խմբագրումը շարունակելու համար: Ձեր ընթացիկ հաղորդագրությունը կջնջվի, հաղորդագրության բովանդակություն կկորչի: <br />Դուք կարող եք դիտել, խմբագրել և ջնջել սևագրերը անձնական բաժնում:',
	'LOGIN_EXPLAIN_BUMP'		=> 'Դուք պետք է գրանցվեք այս ֆորումում թեմա բացելու համար:',
	'LOGIN_EXPLAIN_DELETE'		=> 'Դուք պետք է գրանցվեք այս ֆորումից գրառում ջնջելու համար:',
	'LOGIN_EXPLAIN_POST'		=> 'Դուք պետք է գրանցվեք այս ֆորումում գրառում ավելացնելու համար:',
	'LOGIN_EXPLAIN_QUOTE'		=> 'Դուք պետք է գրանցվեք այս ֆորումի գրառումները մեջբերելու համար:',
	'LOGIN_EXPLAIN_REPLY'		=> 'Դուք պետք է գրանցվեք այս ֆորումի թեմաներին պատասխանելու համար:',

	'MAX_FONT_SIZE_EXCEEDED'	=> 'Вы можете использовать шрифты размером не более %1$d.',
	'MAX_FLASH_HEIGHT_EXCEEDED'	=> 'Ваши флэш-файлы должны быть не более %1$d пикс. в высоту.',
	'MAX_FLASH_WIDTH_EXCEEDED'	=> 'Ваши флэш-файлы должны быть не более %1$d пикс. в ширину.',
	'MAX_IMG_HEIGHT_EXCEEDED'	=> 'Ваши изображения должны быть не более %1$d пикс. в высоту.',
	'MAX_IMG_WIDTH_EXCEEDED'	=> 'Ваши изображения должны быть не более %1$d пикс. в ширину.',

	'MESSAGE_BODY_EXPLAIN'		=> 'Введите текст вашего сообщения. Длина сообщения в символах не более: <strong>%d</strong>.',
	'MESSAGE_DELETED'			=> 'Հաղորդագրությունը բարեհաջող ջնջվել է:',
	'MORE_SMILIES'				=> 'Еще смайлики…',

	'NOTIFY_REPLY'				=> 'Տեղեկացնել ինձ պատասխան ստանալու մասին',
	'NOT_UPLOADED'				=> 'Не удалось загрузить файл.',
	'NO_DELETE_POLL_OPTIONS'	=> 'Вы не можете удалять существующие варианты ответов.',
	'NO_PM_ICON'				=> 'Չկա նամակի նշան',
	'NO_POLL_TITLE'				=> 'Вы должны ввести название опроса.',
	'NO_POST'					=> 'Գրառում գոյություն չունի:',
	'NO_POST_MODE'				=> 'Не указан режим сообщения.',

	'PARTIAL_UPLOAD'			=> 'Файл загружен только частично.',
	'PHP_SIZE_NA'				=> 'Слишком большой размер вложения.<br />Невозможно определить максимальный размер закачиваемых файлов, заданный в php.ini.',
	'PHP_SIZE_OVERRUN'			=> 'Слишком большой размер вложения.<br />Максимальный размер закачиваемого файла: %d Мб.<br />Имейте в виду, что эта величина определена в php.ini и средствами форума невозможно изменить это значение в большую сторону.',
	'PLACE_INLINE'				=> 'Вставить в текст сообщения',
	'POLL_DELETE'				=> 'Удалить опрос',
	'POLL_FOR'					=> 'Опрос должен идти',
	'POLL_FOR_EXPLAIN'			=> 'Введите 0 или оставьте поле пустым, чтобы опрос не заканчивался.',
	'POLL_MAX_OPTIONS'			=> 'Вариантов ответа',
	'POLL_MAX_OPTIONS_EXPLAIN'	=> 'Количество вариантов ответа, разрешенных при голосовании.',
	'POLL_OPTIONS'				=> 'Варианты ответа',
	'POLL_OPTIONS_EXPLAIN'		=> 'Разместите каждый вариант ответа в новой строке. Максимальное количество вариантов: <strong>%d</strong>.',
	'POLL_OPTIONS_EDIT_EXPLAIN'	=> 'Разместите каждый вариант ответа в новой строке. Максимальное количество вариантов: <strong>%d</strong>. Если вы удалите или добавите новый вариант ответа результаты голосования обнулятся.',
	'POLL_QUESTION'				=> 'Вопрос',
	'POLL_TITLE_TOO_LONG'		=> 'Название опроса должно содержать меньше 100 знаков.',
	'POLL_TITLE_COMP_TOO_LONG'	=> 'Название опроса слишком длинное, попробуйте уменьшить количество BBCode или смайликов.',
	'POLL_VOTE_CHANGE'			=> 'Разрешить изменять ответ',
	'POLL_VOTE_CHANGE_EXPLAIN'	=> 'Если разрешено, пользователи могут менять свои ответы в опросе.',
	'POSTED_ATTACHMENTS'		=> 'Опубликованные вложения',
	'POST_APPROVAL_NOTIFY'		=> 'Вы будете уведомлены об одобрении вашего сообщения.',
	'POST_CONFIRMATION'			=> 'Подтверждение отправки',
	'POST_CONFIRM_EXPLAIN'		=> 'Для предотвращения автоматического размещения сообщений, на этой конференции необходимо ввести код подтверждения. Код отображён на картинке ниже. Если из-за плохого зрения или по другим причинам вы не можете прочесть код на картинке, свяжитесь с %sадминистратором%s',
	'POST_DELETED'				=> 'Գրառումը բարեհաջող ջնջվել է:',
	'POST_EDITED'				=> 'Գրառումը բարեհաջող խմբագրվել է:',
	'POST_EDITED_MOD'			=> 'Сообщение было успешно отредактировано, но должно быть одобрено модератором до того, как будет отображено на конференции.',
	'POST_GLOBAL'				=> 'Важная',
	'POST_ICON'					=> 'Պատկերակ',
	'POST_NORMAL'				=> 'Обычная',
	'POST_REVIEW'				=> 'Предварительный просмотр',
	'POST_REVIEW_EXPLAIN'		=> 'Было добавлено по крайней мере одно сообщение в этой теме. Возможно, вы захотите изменить содержание своего сообщения.',
	'POST_STORED'				=> 'Գրառումը բարեհաջող ուղարկվել է:',
	'POST_STORED_MOD'			=> 'Сообщение было успешно отправлено, но должно быть одобрено модератором до того, как будет отображено на конференции.',
	'POST_TOPIC_AS'				=> 'Статус создаваемой темы',
	'PROGRESS_BAR'				=> 'Индикатор загрузки',

	'QUOTE_DEPTH_EXCEEDED'		=> 'Максимально допустимое количество вложенных друг в друга цитат в сообщении: %1$d.',

	'SAVE'						=> 'Պահպանել',
	'SAVE_DATE'					=> 'Վերջին փոփոխություններ',
	'SAVE_DRAFT'				=> 'Պահպանել սևագիրը',
	'SAVE_DRAFT_CONFIRM'		=> 'Խնդրում ենք ուշադրություն դարձնել, որ պահպանվում է գրառման միայն վերնագիրն ու տեքստը, ցանկացած ուրիշ տարր կջնջվի:<br />Դուք հիմա՞ եք ցանկանում պահպանել սևագիրը:',
	'SMILIES'					=> 'Սմայլեր',
	'SMILIES_ARE_OFF'			=> 'Սմայլերը <em>անջատված են</em>',
	'SMILIES_ARE_ON'			=> 'Սմայլերը <em>միացված են</em>',
	'STICKY_ANNOUNCE_TIME_LIMIT'=> 'Срок для объявления/прилепленной темы',
	'STICK_TOPIC_FOR'			=> 'Тема будет прилеплена',
	'STICK_TOPIC_FOR_EXPLAIN'	=> 'Введите 0 или оставьте поле пустым, чтобы тема всегда была объявлением или прилепленной.',
	'STYLES_TIP'				=> 'Совет: Можно быстро применить стили к выделенному тексту.',

	'TOO_FEW_CHARS'				=> 'Ձեր հաղորդագրությունը չափազանց կարճ է:',
	'TOO_FEW_POLL_OPTIONS'		=> 'Вы должны ввести по крайней мере два варианта ответа в опросе.',
	'TOO_MANY_ATTACHMENTS'		=> 'Вложение невозможно, так как в сообщении достигнуто их максимальное количество: <b>%d</b>.',
	'TOO_MANY_CHARS'			=> 'Ձեր գրառումը չափազանց երկար է:',
	'TOO_MANY_CHARS_POST'		=> 'Ваше сообщение содержит слишком много знаков: %1$d. Максимальное разрешенное количество: %2$d.',
	'TOO_MANY_CHARS_SIG'		=> 'Ваша подпись содержит слишко много знаков: %1$d. Максимальное разрешенное количество: %2$d.',
	'TOO_MANY_POLL_OPTIONS'		=> 'Вы выбрали слишком много вариантов ответа в опросе.',
	'TOO_MANY_SMILIES'			=> 'Ваше сообщение содержит слишком много смайликов. Максимальное разрешенное количество: %d.',
	'TOO_MANY_URLS'				=> 'Ваше сообщение содержит слишком много ссылок URL. Максимальное разрешенное количество: %d.',
	'TOO_MANY_USER_OPTIONS'		=> 'Слишком много вариантов ответа.',
	'TOPIC_BUMPED'				=> 'Тема успешно поднята.',

	'UNAUTHORISED_BBCODE'		=> 'Вы не можете использовать некоторые BBCode: %s.',
	'UNGLOBALISE_EXPLAIN'		=> 'Для того, чтобы изменить статус темы с важной на обычную, вы должны выбрать форум, в котором она будет опубликована.',
	'UPDATE_COMMENT'			=> 'Обновить комментарий',
	'URL_INVALID'				=> 'Указанный вами адрес файла недопустим.',
	'URL_NOT_FOUND'				=> 'Указанный файл не найден.',
	'URL_IS_OFF'				=> '[url] <em>անջատված է</em>',
	'URL_IS_ON'					=> '[url] <em>միացված է</em>',
	'USER_CANNOT_BUMP'			=> 'Вы не можете поднимать темы в этом форуме.',
	'USER_CANNOT_DELETE'		=> 'Вы не можете удалять сообщения в этом форуме.',
	'USER_CANNOT_EDIT'			=> 'Вы не можете редактировать сообщения в этом форуме.',
	'USER_CANNOT_REPLY'			=> 'Вы не можете отвечать на сообщения в этом форуме.',
	'USER_CANNOT_FORUM_POST'	=> 'Вы не можете размещать сообщения в этом форуме. Тип форума не поддерживает этого.',

	'VIEW_MESSAGE'				=> '%sԴիտել ձեր հաղորդագրությունը%s',
	'VIEW_PRIVATE_MESSAGE'		=> '%sПросмотреть отправленные вами личные сообщения%s',

	'WRONG_FILESIZE'			=> 'Слишком большой размер вложения. <br/>Максимальный разрешенный размер: %1d %2s.',
	'WRONG_SIZE'				=> 'Размеры изображения должны быть не менее %1$d×%2$d и не более %3$d×%4$d. Размер отправленного изображения - %5$d×%6$d. Все размеры указаны в пикселах.',
));

?>