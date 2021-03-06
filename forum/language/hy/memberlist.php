<?php
/** 
*
* memberlist [Russian]
*
* @package language
* @version $Id: memberlist.php,v 1.35 2007/10/04 15:07:24 acydburn Exp $
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
	'ABOUT_USER'			=> 'Անձնագիր',
	'ACTIVE_IN_FORUM'		=> 'Ամենաշատը ակտիվ է այս ֆորումում',
	'ACTIVE_IN_TOPIC'		=> 'Ամենաշատը ակտիվ է այս թեմայում',
	'ADD_FOE'				=> 'Դարձնել ոչ ընկեր',
	'ADD_FRIEND'			=> 'Դարձնել ընկեր',
	'AFTER'					=> 'Հետո',

	'ALL'					=> 'Բոլորը',

	'BEFORE'				=> 'մինչև',

	'CC_EMAIL'				=> 'Выслать мне копию этого сообщения.',
	'CONTACT_USER'			=> 'Կապվելու միջոցներ',

	'DEST_LANG'				=> 'Լեզու',
	'DEST_LANG_EXPLAIN'		=> 'Выберите язык получателя сообщения (если доступен).',

	'EMAIL_BODY_EXPLAIN'	=> 'Сообщение будет отправлено в виде простого текста, не включайте в него HTML или BBCode. В качестве обратного адреса будет показываться ваш адрес email.',
	'EMAIL_DISABLED'		=> 'Извините, но все функции, связанные с отправкой email, были отключены.',
	'EMAIL_SENT'			=> 'Сообщение было отправлено.',
	'EMAIL_TOPIC_EXPLAIN'	=> 'Сообщение будет отправлено в виде простого текста, не включайте в него HTML или BBCode. Обратите внимание, что информация о теме уже включена в сообщение. В качестве обратного адреса будет показываться ваш адрес email.',
	'EMPTY_ADDRESS_EMAIL'	=> 'Вы должны указать правильный адрес email получателя.',
	'EMPTY_MESSAGE_EMAIL'	=> 'Вы должны ввести текст сообщения для отправки.',
	'EMPTY_MESSAGE_IM'		=> 'Вы должны ввести текст сообщения для отправки.',
	'EMPTY_NAME_EMAIL'		=> 'Вы должны ввести настоящее имя получателя.',
	'EMPTY_SUBJECT_EMAIL'	=> 'Вы должны указать тему сообщения.',
	'EQUAL_TO'				=> 'հավասար',

	'FIND_USERNAME_EXPLAIN'	=> 'Այստեղ դուք կարող եք իրականացնել կոնկրետ օգտագործողների որոնում: Պարտադիր չէ լրացնել բոլոր դաշտերը: Ձևանմուշով որոնման համար օգտագործեք *: Ամսաթվի ներմուծման համար օգտագործեք <kbd>ՏՏՏՏ-ԱԱ-ՕՕ</kbd> ձևաչափը, օրինակ, <samp>2004-02-29</samp>: Նշեք մեկ կամ ավելի օգտագործողների (եթե նախորդ ձևը թույլատրում է բազմակի ընտրություն) և սեղմեք "Ընտրել նշվածներին" կոճակը, որպեսզի հետ վերադառնաք:',
	'FLOOD_EMAIL_LIMIT'		=> 'Вы не можете отправить ещё один email сразу после предыдущего. Пожалуйста, попробуйте чуть позже.',

	'GROUP_LEADER'			=> 'Խմբի առաջնորդ',

	'HIDE_MEMBER_SEARCH'	=> 'Скрыть поиск пользователей',

	'IM_ADD_CONTACT'		=> 'Добавить в список контактов',
	'IM_AIM'				=> 'Учтите, что для этого вам необходима установленная программа AOL Instant Messenger.',
	'IM_AIM_EXPRESS'		=> 'AIM Express',
	'IM_DOWNLOAD_APP'		=> 'Скачать приложение',
	'IM_ICQ'				=> 'Учтите, что пользователь мог отключить приём мгновенных сообщений от неизвестных контактов.',
	'IM_JABBER'				=> 'Учтите, что пользователь мог отключить приём мгновенных сообщений от неизвестных контактов.',
	'IM_JABBER_SUBJECT'		=> 'Это автоматически сгенерированное сообщение, на него не надо отвечать! Сообщение от пользователя %1$s с %2$s.',
	'IM_MESSAGE'			=> 'Ваше сообщение',
	'IM_MSNM'				=> 'Учтите, что для этого вам необходима установленная программа Windows Messenger.',
	'IM_MSNM_BROWSER'		=> 'Ваш браузер не поддерживает эту функцию.',
	'IM_MSNM_CONNECT'		=> 'Клиент MSNM не отвечает.\nДля продолжения необходимо установить связь с клиентом.',
	'IM_NAME'				=> 'Ваше имя',
	'IM_NO_DATA'			=> 'Для этого пользователя отсутствует контактная информация.',
	'IM_NO_JABBER'			=> 'Извините, отправка напрямую сообщений пользователям Jabber не поддерживается сервером. Чтобы связаться с этим пользователем вам необходим установленный клиент Jabber.',
	'IM_RECIPIENT'			=> 'Получатель',
	'IM_SEND'				=> 'Отправить сообщение',
	'IM_SEND_MESSAGE'		=> 'Отправить сообщение',
	'IM_SENT_JABBER'		=> 'Ваше сообщение для %1$s было успешно отправлено.',
	'IM_USER'				=> 'Отправить мгновенное сообщение',
	
	'LAST_ACTIVE'				=> 'Վերջին այցը',
	'LESS_THAN'					=> 'ավելի քիչ',
	'LIST_USER'					=> 'Օգտագործողներ` 1',
	'LIST_USERS'				=> 'Օգտագործողներ` %d',
	'LOGIN_EXPLAIN_LEADERS'		=> 'Для просмотра списка нашей команды вы должны быть авторизованы.',
	'LOGIN_EXPLAIN_MEMBERLIST'	=> 'Для просмотра списка пользователей вы должны быть авторизованы.',
	'LOGIN_EXPLAIN_SEARCHUSER'	=> 'Для поиска пользователей вы должны быть авторизованы.',
	'LOGIN_EXPLAIN_VIEWPROFILE'	=> 'Անձնագրի դիտման համար դուք պետք է հաստատված լինեք:',

	'MORE_THAN'				=> 'ավելի շատ',

	'NO_EMAIL'				=> 'Вам не разрешено посылать email этому пользователю.',
	'NO_VIEW_USERS'			=> 'У вас нет доступа к списку пользователей.',

	'ORDER'					=> 'Упорядочить',
	'OTHER'					=> 'Другая',

	'POST_IP'				=> 'IP/Хост',

	'RANK'					=> 'Կոչում',
	'REAL_NAME'				=> 'Имя получателя',
	'RECIPIENT'				=> 'Получатель',
	'REMOVE_FOE'			=> 'Ջնջել ոչ ընկերների ցուցակից',
	'REMOVE_FRIEND'			=> 'Ջնջել ընկերների ցուցակից',

	'SEARCH_USER_POSTS'		=> 'Փնտրել օգտագործողի գրառումները',
	'SELECT_MARKED'			=> 'Ընտրել նշվածներին',
	'SELECT_SORT_METHOD'	=> 'Поле сортировки',
	'SEND_AIM_MESSAGE'		=> 'Отправить AIM-сообщение',
	'SEND_ICQ_MESSAGE'		=> 'Отправить ICQ-сообщение',
	'SEND_IM'				=> 'Отправить мгновенное сообщение',
	'SEND_JABBER_MESSAGE'	=> 'Отправить Jabber-сообщение',
	'SEND_MESSAGE'			=> 'Отправить',
	'SEND_MSNM_MESSAGE'		=> 'Отправить MSNM/WLM-сообщение',
	'SEND_YIM_MESSAGE'		=> 'Отправить YIM-сообщение',
	'SORT_EMAIL'			=> 'email',
	'SORT_LAST_ACTIVE'		=> 'Վերջին այցը',
	'SORT_POST_COUNT'		=> 'Գրառումների թիվը',

	'USERNAME_BEGINS_WITH'	=> 'Имя пользователя начинается с',
	'USER_ADMIN'			=> 'Администрировать',
	'USER_FORUM'			=> 'Օգտագործողի վիճակագրությունը',
	'USER_ONLINE'			=> 'В сети',
	'USER_PRESENCE'			=> 'Присутствие на конференции',

	'VIEWING_PROFILE'		=> 'Օգտագործողի անձնագիրը %s',
	'VISITED'				=> 'Վերջին այցը',

	'WWW'					=> 'Կայք',
));

?>