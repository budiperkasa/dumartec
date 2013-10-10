<?php
/**
*
* acp common [Ukrainian]
*
* @package language
* @version $Id: common.php 9049 2008-11-05 22:03:16Z toonarmy $
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

// Common
$lang = array_merge($lang, array(
	'BOARD_VERSION'	=> 'Версія ПЗ форуму',
	'LOG_ATTACHMENTS_DELETED'	=> '<strong>Видалено приєднані файли користувача</strong><br />» %s',
	'LOG_IMAGESET_LANG_MISSING'	=> '<strong>Немає локалізації “%2$s” набору зображень</strong><br />» %1$s',
	'DIRECTORY_NOT_WRITABLE'	=> 'Введений шлях “%s” недоступний для запису.',
	'ACP_ADMINISTRATORS'	=> 'Адміністратори',
	'ACP_ADMIN_LOGS'	=> 'Логи адміністраторів',
	'ACP_ADMIN_ROLES'	=> 'Ролі адміністратора',
	'ACP_ATTACHMENTS'	=> 'Приєднані файли',
	'ACP_ATTACHMENT_SETTINGS'	=> 'Налаштування приєднання файлів',
	'ACP_AUTH_SETTINGS'	=> 'Авторизація',
	'ACP_AUTOMATION'	=> 'Автоматизація',
	'ACP_AVATAR_SETTINGS'	=> 'Налаштування аватарів',
	'ACP_BACKUP'	=> 'Резервне копіювання',
	'ACP_BAN'	=> 'Заборона доступу (бан)',
	'ACP_BAN_EMAILS'	=> 'Бан e-mail',
	'ACP_BAN_IPS'	=> 'Бан IP-адрес',
	'ACP_BAN_USERNAMES'	=> 'Бан імен користувачів',
	'ACP_BBCODES'	=> 'BBCode',
	'ACP_BOARD_CONFIGURATION'	=> 'Конфігурація форуму',
	'ACP_BOARD_FEATURES'	=> 'Можливості форуму',
	'ACP_BOARD_MANAGEMENT'	=> 'Керування форумом',
	'ACP_BOARD_SETTINGS'	=> 'Налаштування форуму',
	'ACP_BOTS'	=> 'Павуки/Роботи',
	'ACP_CAPTCHA'	=> 'Візуальне підтвердження',
	'ACP_CAT_DATABASE'	=> 'База даних',
	'ACP_CAT_DOT_MODS'	=> '.Моди',
	'ACP_CAT_FORUMS'	=> 'Форуми',
	'ACP_CAT_GENERAL'	=> 'Загальні',
	'ACP_CAT_MAINTENANCE'	=> 'Обслуговування',
	'ACP_CAT_PERMISSIONS'	=> 'Права доступу',
	'ACP_CAT_POSTING'	=> 'Повідомлення',
	'ACP_CAT_STYLES'	=> 'Стилі',
	'ACP_CAT_SYSTEM'	=> 'Система',
	'ACP_CAT_USERGROUP'	=> 'Користувачі та Групи',
	'ACP_CAT_USERS'	=> 'Користувачі',
	'ACP_CLIENT_COMMUNICATION'	=> 'Засоби зв\'язку',
	'ACP_COOKIE_SETTINGS'	=> 'Налаштування cookie',
	'ACP_CRITICAL_LOGS'	=> 'Лог помилок',
	'ACP_CUSTOM_PROFILE_FIELDS'	=> 'Додаткові поля профілю',
	'ACP_DATABASE'	=> 'Керування базою даних',
	'ACP_DISALLOW'	=> 'Заборонені',
	'ACP_DISALLOW_USERNAMES'	=> 'Заборонені імена користувачів',
	'ACP_EMAIL_SETTINGS'	=> 'Налаштування e-mail',
	'ACP_EXTENSION_GROUPS'	=> 'Керування групами розширень',
	'ACP_FORUM_BASED_PERMISSIONS'	=> 'Права доступу',
	'ACP_FORUM_LOGS'	=> 'Логи форуму',
	'ACP_FORUM_MANAGEMENT'	=> 'Керування форумами',
	'ACP_FORUM_MODERATORS'	=> 'Модератори форуму',
	'ACP_FORUM_PERMISSIONS'	=> 'Доступ до форумів',
	'ACP_FORUM_ROLES'	=> 'Форумні ролі',
	'ACP_GENERAL_CONFIGURATION'	=> 'Загальні налаштування',
	'ACP_GENERAL_TASKS'	=> 'Загальні завдання',
	'ACP_GLOBAL_MODERATORS'	=> 'Супермодератори',
	'ACP_GLOBAL_PERMISSIONS'	=> 'Глобальні права доступу',
	'ACP_GROUPS'	=> 'Групи',
	'ACP_GROUPS_FORUM_PERMISSIONS'	=> 'Форумні права груп',
	'ACP_GROUPS_MANAGE'	=> 'Керування групами',
	'ACP_GROUPS_MANAGEMENT'	=> 'Групи',
	'ACP_GROUPS_PERMISSIONS'	=> 'Права груп',
	'ACP_ICONS'	=> 'Значки теми',
	'ACP_ICONS_SMILIES'	=> 'Значки теми/смайлики',
	'ACP_IMAGESETS'	=> 'Набори зображень',
	'ACP_INACTIVE_USERS'	=> 'Неактивні учасники',
	'ACP_INDEX'	=> 'Головна',
	'ACP_JABBER_SETTINGS'	=> 'Налаштування Jabber',
	'ACP_LANGUAGE'	=> 'Керування мовами',
	'ACP_LANGUAGE_PACKS'	=> 'Мовні пакети',
	'ACP_LOAD_SETTINGS'	=> 'Налаштування відображення',
	'ACP_LOGGING'	=> 'Логи',
	'ACP_MAIN'	=> 'Головна',
	'ACP_MANAGE_EXTENSIONS'	=> 'Керування розширеннями',
	'ACP_MANAGE_FORUMS'	=> 'Керування форумами',
	'ACP_MANAGE_RANKS'	=> 'Керування званнями',
	'ACP_MANAGE_REASONS'	=> 'Причини скарг/відхилень повідомлень',
	'ACP_MANAGE_USERS'	=> 'Керування учасниками',
	'ACP_MASS_EMAIL'	=> 'Масова розсилка e-mail',
	'ACP_MESSAGES'	=> 'Повідомлення',
	'ACP_MESSAGE_SETTINGS'	=> 'Налаштування приватних повідомлень',
	'ACP_MODULE_MANAGEMENT'	=> 'Керування модулями',
	'ACP_MOD_LOGS'	=> 'Логи модераторів',
	'ACP_MOD_ROLES'	=> 'Ролі модератора',
	'ACP_NO_ITEMS'            => 'Елементів ще немає.',
	'ACP_ORPHAN_ATTACHMENTS'	=> 'Загублені файли',
	'ACP_PERMISSIONS'	=> 'Права доступу',
	'ACP_PERMISSION_MASKS'	=> 'Маски прав доступу',
	'ACP_PERMISSION_ROLES'	=> 'Ролі',
	'ACP_PERMISSION_TRACE'	=> 'Трасування прав доступу',
	'ACP_PHP_INFO'	=> 'Інформація про PHP',
	'ACP_POST_SETTINGS'	=> 'Налаштування повідомлень',
	'ACP_PRUNE_FORUMS'	=> 'Очистка форумів',
	'ACP_PRUNE_USERS'	=> 'Видалення користувачів',
	'ACP_PRUNING'	=> 'Очистка',
	'ACP_QUICK_ACCESS'	=> 'Швидкий доступ',
	'ACP_RANKS'	=> 'Звання',
	'ACP_REASONS'	=> 'Причини скарг/відхилень повідомлень',
	'ACP_REGISTER_SETTINGS'	=> 'Налаштування реєстрації',
	'ACP_RESTORE'	=> 'Відновлення',
	'ACP_SEARCH'	=> 'Конфігурація пошуку',
	'ACP_SEARCH_INDEX'	=> 'Індексування пошуку',
	'ACP_SEARCH_SETTINGS'	=> 'Налаштування пошуку',
	'ACP_SECURITY_SETTINGS'	=> 'Безпека',
	'ACP_SERVER_CONFIGURATION'	=> 'Конфігурація сервера',
	'ACP_SERVER_SETTINGS'	=> 'Налаштування сервера',
	'ACP_SIGNATURE_SETTINGS'	=> 'Підписи',
	'ACP_SMILIES'	=> 'Смайлики',
	'ACP_STYLE_COMPONENTS'	=> 'Компоненти стилю',
	'ACP_STYLE_MANAGEMENT'	=> 'Керування стилями',
	'ACP_STYLES'	=> 'Стилі',
	'ACP_TEMPLATES'	=> 'Шаблони',
	'ACP_THEMES'	=> 'Теми',
	'ACP_UPDATE'	=> 'Оновлення',
	'ACP_USERS_FORUM_PERMISSIONS'	=> 'Форумні права користувачів',
	'ACP_USERS_LOGS'	=> 'Логи учасників',
	'ACP_USERS_PERMISSIONS'	=> 'Права користувачів',
	'ACP_USER_ATTACH'	=> 'Приєднані файли',
	'ACP_USER_AVATAR'	=> 'Аватар',
	'ACP_USER_FEEDBACK'	=> 'Відгуки',
	'ACP_USER_GROUPS'	=> 'Групи',
	'ACP_USER_MANAGEMENT'	=> 'Користувачі',
	'ACP_USER_OVERVIEW'	=> 'Огляд',
	'ACP_USER_PERM'	=> 'Права доступу',
	'ACP_USER_PREFS'	=> 'Налаштування',
	'ACP_USER_PROFILE'	=> 'Профіль',
	'ACP_USER_RANK'	=> 'Звання',
	'ACP_USER_ROLES'	=> 'Ролі користувача',
	'ACP_USER_SECURITY'	=> 'Блокування користувачів',
	'ACP_USER_SIG'	=> 'Підпис',
	'ACP_VC_SETTINGS'	=> 'Візуальне підтвердження',
	'ACP_VC_CAPTCHA_DISPLAY'	=> 'Попередній перегляд зображення CAPTCHA',
	'ACP_VERSION_CHECK'	=> 'Перевірити оновлення',
	'ACP_VIEW_ADMIN_PERMISSIONS'	=> 'Права адміністраторів',
	'ACP_VIEW_FORUM_MOD_PERMISSIONS'	=> 'Права модераторів',
	'ACP_VIEW_FORUM_PERMISSIONS'	=> 'Локальні права',
	'ACP_VIEW_GLOBAL_MOD_PERMISSIONS'	=> 'Права супермодераторів',
	'ACP_VIEW_USER_PERMISSIONS'	=> 'Права користувачів',
	'ACP_WORDS'	=> 'Цензор слів',
	'ACTION'	=> 'Дія',
	'ACTIONS'	=> 'Дії',
	'ACTIVATE'	=> 'Активувати',
	'ADD'	=> 'Додати',
	'ADMIN'	=> 'Адміністрування',
	'ADMIN_INDEX'	=> 'Панель адміністратора',
	'ADMIN_PANEL'	=> 'Панель адміністратора',

	'ADM_LOGOUT'			=> 'Вихід з П.А.',
	'ADM_LOGGED_OUT'		=> 'Ви успішно вийшли з Панелі адміністратора',

	'BACK'	=> 'Повернутись',
	'COLOUR_SWATCH'	=> 'Палітра web-кольорів',
	'CONFIG_UPDATED'	=> 'Конфігурацію успішно оновлено.',
	'DEACTIVATE'	=> 'Деактивувати',
	'DIRECTORY_DOES_NOT_EXIST'	=> 'Введений шлях "%s" не існує.',
	'DIRECTORY_NOT_DIR'	=> 'Введений шлях "%s" не є директорією.',
	'DISABLE'	=> 'Вимкнути',
	'DOWNLOAD'	=> 'Завантажити',
	'DOWNLOAD_AS'	=> 'Завантажити як',
	'DOWNLOAD_STORE'	=> 'Завантажити або зберегти файл',
	'DOWNLOAD_STORE_EXPLAIN'	=> 'Ви можете завантажити файл або зберегти його на сервері в папці <samp>store/</samp>.',
	'EDIT'	=> 'Редагувати',
	'ENABLE'	=> 'Увімкнути',
	'EXPORT_DOWNLOAD'	=> 'Завантажити',
	'EXPORT_STORE'	=> 'Зберегти',
	'GENERAL_OPTIONS'	=> 'Загальні',
	'GENERAL_SETTINGS'	=> 'Загальні налаштування',
	'GLOBAL_MASK'	=> 'Маска загальних налаштувань',
	'INSTALL'	=> 'Встановлення',
	'IP'	=> 'IP-адреса учасника',
	'IP_HOSTNAME'	=> 'IP-адреси або імена хостів',
	'LOGGED_IN_AS'	=> 'Ви залогувались як:',
	'LOGIN_ADMIN'	=> 'Для адміністрування форуму ви повинні бути авторизовані.',
	'LOGIN_ADMIN_CONFIRM'	=> 'Для адміністрування форуму вам потрібно повторно авторизуватись.',
	'LOGIN_ADMIN_SUCCESS'	=> 'Ви успішно авторизувались і вас буде перенаправлено до Панелі адміністратора',
	'LOOK_UP_FORUM'	=> 'Оберіть форум',
	'LOOK_UP_FORUMS_EXPLAIN'	=> 'Ви можете обрати більше, ніж один форум.',
	'MANAGE'	=> 'Керування',
	'MENU_TOGGLE'	=> 'Приховати / відобразити меню зліва',
	'MOVE_DOWN'	=> 'Вниз',
	'MOVE_UP'	=> 'Догори',
	'NOTIFY'	=> 'Notification',
	'NO_ADMIN'	=> 'У вас недостатньо прав для адміністрування цього форуму.',
	'NO_EMAILS_DEFINED'	=> 'Не знайдено коректних адрес e-mail',
	'NO_PASSWORD_SUPPLIED'	=> 'Вам необхідно ввести пароль для доступу в Панель адміністратора.',
	'OFF'	=> 'Вимкнено',
	'ON'	=> 'Увімкнено',
	'PARSE_BBCODE'	=> 'Дозволити BBCode',
	'PARSE_SMILIES'	=> 'Дозволити смайлики',
	'PARSE_URLS'	=> 'Дозволити посилання',
	'PERMISSIONS_TRANSFERRED'	=> 'Права доступу перенесено',
	'PERMISSIONS_TRANSFERRED_EXPLAIN'	=> 'В даний момент ви маєте права доступу користувача %1$s. Ви можете переглядати форум з правами доступу цього користувача, але ви не зможете увійти в Панель адміністратора, оскільки права адміністратора не було перенесено. Ви можете <a href="%2$s"><strong>повернути свої права доступу</strong></a> в будь-який час.',
	'PIXEL'	=> 'пікс.',
	'PROCEED_TO_ACP'	=> '%sПерейти до Панелі адміністратора%s',
	'REMIND'	=> 'Нагадати',
	'RESYNC'	=> 'Синхронізувати',
	'RETURN_TO'	=> 'Повернутись до…',
	'SELECT_ANONYMOUS'	=> 'Обрати анонімного користувача',
	'SELECT_OPTION'	=> 'Обрати',
	'SETTING_TOO_LOW'      => 'Введене значення для налаштування “%1$s” надто мале. Мінімально допустиме значення %d.',
	'SETTING_TOO_BIG'      => 'Введене значення для налаштування “%1$s” надто велике. Максимально допустиме значення %d.',   
	'SETTING_TOO_LONG'      => 'Введене значення для налаштування “%1$s” надто довге. Максимально дозволена довжина %d.',
	'SETTING_TOO_SHORT'      => 'Введене значення для налаштування “%1$s” недостатньо довге. Мінімально дозволена довжина %d.',
	'UCP'	=> 'Панель керування',
	'USERNAMES_EXPLAIN'	=> 'Вкажіть кожне ім\'я користувача з нової стрічки',
	'USER_CONTROL_PANEL'	=> 'Панель керування',
	'WARNING'	=> 'Попередження',
));

// PHP info
$lang = array_merge($lang, array(
	'ACP_PHP_INFO_EXPLAIN'	=> 'На цій сторінці відображається інформація про версію PHP, яка встановлена на цьому сервері. Вона включає детальну інформацію про завантажені модулі, доступні змінні та налаштування. Ця інформація може бути корисною при діагностиці проблем. Майте на увазі, що деякі хостинг-компанії можуть обмежувати відображення інформації з причин безпеки. Ми радимо вам не надавати нікому інформації з цієї сторінки, за винятком, якщо вас запитають про це <a href="http://www.phpbb.com/about/">Офіційні члени команди</a> на форумах підтримки.',
	'NO_PHPINFO_AVAILABLE'	=> 'Інформація про PHP недоступна. Функцію Phpinfo() було вимкнено з причин безпеки.',
));

// Logs
$lang = array_merge($lang, array(
	'ACP_ADMIN_LOGS_EXPLAIN'	=> 'Тут міститься список дій, здійснених адміністраторами форуму. Ви можете сортувати список за іменем користувача, датою, IP або дією. Якщо у вас є відповідні права доступу, ви можете видалити окремі записи або весь лог повністю.',
	'ACP_CRITICAL_LOGS_EXPLAIN'	=> 'Тут міститься список дій, здійснених самим форумом. Ці логи надають вам інформацію, яку ви можете використати для вирішення особливих проблем, наприклад недоставлення листів e-mail. Ви можете сортувати їх за іменем користувача, датою, IP або дією. Якщо ви маєте відповідні права доступу, ви можете видаляти окремі операції або увесь лог.',
	'ACP_MOD_LOGS_EXPLAIN'	=> 'Тут міститься список усіх дій, здійснених на форумах, в темах і повідомленнях, здійснених  модераторами над користувачами, включаючи заборону доступу. Ви можете сортувати їх за іменем користувача, датою, IP або дією. Якщо ви маєте відповідні права доступу, ви можете видаляти окремі операції або увесь лог.',
	'ACP_USERS_LOGS_EXPLAIN'	=> 'Тут міститься список усіх дій, здійснених користувачами або над користувачами.',
	'ALL_ENTRIES'	=> 'Усі записи',
	'DISPLAY_LOG'	=> 'Показати записи за',
	'NO_ENTRIES'	=> 'Немає записів за цей період',
	'SORT_IP'	=> 'Адреса IP',
	'SORT_DATE'	=> 'Дата',
	'SORT_ACTION'	=> 'Дія',
));

// Index page
$lang = array_merge($lang, array(
	'ADMIN_INTRO'	=> 'Дякуємо вам за те, що ви обрали phpBB в якості рішення для вашого форуму. Ця сторінка надає вам можливість швидко переглянути статистику вашого форуму. Меню з лівої сторони екрану дозволяє вам контролювати усі можливості вашого форуму. На кожній сторінці ви знайдете інструкції з користування інструментами.',
	'ADMIN_LOG'	=> 'Дії адміністраторів',
	'ADMIN_LOG_INDEX_EXPLAIN'	=> 'Ця сторінка надає вам можливість перегляду останніх п\'яти дій, виконаних адміністраторами. Усі логи можна переглянути з відповідного пункту меню або перейшовши за посиланням, вказаним нижче.',
	'AVATAR_DIR_SIZE'	=> 'Розмір директорії аватарів',
	'BOARD_STARTED'	=> 'Форум запрацював',
	'DATABASE_SERVER_INFO'	=> 'Сервер баз даних',
	'DATABASE_SIZE'	=> 'Розмір бази даних',
	'FILES_PER_DAY'	=> 'Приєднаних файлів за день',
	'FORUM_STATS'	=> 'Статистика форуму',
	'GZIP_COMPRESSION'	=> 'Стиснення GZip',
	'NOT_AVAILABLE'	=> 'Недоступно',
	'NUMBER_FILES'	=> 'Кількість приєднаних файлів',
	'NUMBER_POSTS'	=> 'Кількість повідомлень',
	'NUMBER_TOPICS'	=> 'Кількість тем',
	'NUMBER_USERS'	=> 'Кількість учасників',
	'NUMBER_ORPHAN'	=> 'Загублених файлів',
	'POSTS_PER_DAY'	=> 'Повідомлень за день',
	'PURGE_CACHE'	=> 'Очистити кеш',
	'PURGE_CACHE_CONFIRM'	=> 'Ви впевнені, що хочете очистити кеш?',
	'PURGE_CACHE_EXPLAIN'	=> 'Очищає усі пов\'язані з кешем елементи, які включають закешовані тимчасові файли або запити.',
	'RESET_DATE'	=> 'Скинути дату запуску форуму',
	'RESET_DATE_CONFIRM'	=> 'Ви впевнені, що хочете скинути дату запуску форуму?',
	'RESET_ONLINE'	=> 'Скинути рекорд відвідуваності',
	'RESET_ONLINE_CONFIRM'	=> 'Ви впевнені, що хочете скинути рекорд відвідуваності форуму?',
	'RESYNC_POSTCOUNTS'	=> 'Синхронізувати кількість повідомлень',
	'RESYNC_POSTCOUNTS_EXPLAIN'	=> 'Лише існуючі повідомлення будуть враховані. Видалені очисткою повідомлення не будуть враховані.',
	'RESYNC_POSTCOUNTS_CONFIRM'	=> 'Ви впевнені, що хочете синхронізувати лічильник повідомлень?',
	'RESYNC_POST_MARKING'	=> 'Синхронізувати відмічені теми',
	'RESYNC_POST_MARKING_CONFIRM'	=> 'Ви впевнені, що хочете синхронізувати відмічені теми?',
	'RESYNC_POST_MARKING_EXPLAIN'	=> 'Спочатку знімає відмітки з усіх тем і потім коректно відмічає теми, де спостерігалась активність протягом останніх шести місяців.',
	'RESYNC_STATS'	=> 'Синхронізувати статистику',
	'RESYNC_STATS_CONFIRM'	=> 'Ви впевнені, що хочете синхронізувати статистику?',
	'RESYNC_STATS_EXPLAIN'	=> 'Перераховує загальну кількість повідомлень, тем, користувачів та файлів.',
	'RUN'	=> 'Почати',
	'STATISTIC'	=> 'Статистика',
	'STATISTIC_RESYNC_OPTIONS'	=> 'Синхронізувати або скинути статистику',
	'TOPICS_PER_DAY'	=> 'Тем за день',
	'UPLOAD_DIR_SIZE'	=> 'Розмір розміщених файлів',
	'USERS_PER_DAY'	=> 'Учасників за день',
	'VALUE'	=> 'Значення',
	'VIEW_ADMIN_LOG'	=> 'Переглянути логи адміністраторів',
	'VIEW_INACTIVE_USERS'	=> 'Переглянути неактивних учасників',
	'WELCOME_PHPBB'	=> 'Ласкаво просимо до phpBB',
	'WRITABLE_CONFIG'      => 'Ваш файл конфігурації (config.php) наразі є доступний для запису усім. Ми рекомендуємо вам змінити права доступу на 640 або принаймі на 644 (наприклад: <a href="http://en.wikipedia.org/wiki/Chmod" rel="external">chmod</a> 640 config.php).',
));

// Inactive Users
$lang = array_merge($lang, array(
	'INACTIVE_DATE'	=> 'Дата',
	'INACTIVE_REASON'	=> 'Причина',
	'INACTIVE_REASON_MANUAL'	=> 'Обліковий запис деактивовано адміністратором',
	'INACTIVE_REASON_PROFILE'	=> 'Профіль змінено',
	'INACTIVE_REASON_REGISTER'	=> 'Новий обліковий запис',
	'INACTIVE_REASON_REMIND'	=> 'Ініційовано повторну активацію облікового запису користувача',
	'INACTIVE_REASON_UNKNOWN'	=> 'Невідомо',
	'INACTIVE_USERS'	=> 'Неактивні користувачі',
	'INACTIVE_USERS_EXPLAIN'	=> 'Це список користувачів, які зареєструвались, але їхні облікові записи неактивні. При бажанні ви можете активувати, видалити цих користувачів, або нагадати їм про необхідність активації (надіславши e-mail).',
	'INACTIVE_USERS_EXPLAIN_INDEX'	=> 'Це список останніх 10 користувачів, які мають неактивні облікові записи. Повний список доступний з відповідного пункту меню, або за посиланням, вказаним нижче, звідки при бажанні ви зможете активувати, видалити цих користувачів, або нагадати їм про необхідність активації (надіславши e-mail).',
	'NO_INACTIVE_USERS'	=> 'Немає неактивних учасників',
	'SORT_INACTIVE'	=> 'Дата',
	'SORT_LAST_VISIT'	=> 'датою останнього відвідування',
	'SORT_REASON'	=> 'причиною',
	'SORT_REG_DATE'	=> 'датою реєстрації',
	'USER_IS_INACTIVE'	=> 'Учасник неактивний',
));

// Log Entries
$lang = array_merge($lang, array(
	'LOG_ACL_ADD_USER_GLOBAL_U_'	=> '<strong>Додано або змінено права доступу для користувачів</strong><br />» %s',
	'LOG_ACL_ADD_GROUP_GLOBAL_U_'	=> '<strong>Додано або змінено права доступу для користувача</strong><br />» %s',
	'LOG_ACL_ADD_USER_GLOBAL_M_'	=> '<strong>Додано або змінено права доступу супермодератора для користувача</strong><br />» %s',
	'LOG_ACL_ADD_GROUP_GLOBAL_M_'	=> '<strong>Додано або змінено права доступу супермодератора для групи</strong><br />» %s',
	'LOG_ACL_ADD_USER_GLOBAL_A_'	=> '<strong>Додано або змінено права доступу адміністратора для користувача</strong><br />» %s',
	'LOG_ACL_ADD_GROUP_GLOBAL_A_'	=> '<strong>Додано або змінено права доступу адміністратора для групи</strong><br />» %s',
	'LOG_ACL_ADD_ADMIN_GLOBAL_A_'	=> '<strong>Додано або змінено Адміністраторів</strong><br />» %s',
	'LOG_ACL_ADD_MOD_GLOBAL_M_'	=> '<strong>Додано або змінено Супермодераторів</strong><br />» %s',
	'LOG_ACL_ADD_USER_LOCAL_F_'	=> '<strong>Додано або змінено доступ користувачів до форуму</strong> з %1$s<br />» %2$s',
	'LOG_ACL_ADD_USER_LOCAL_M_'	=> '<strong>Додано або змінено доступ модераторів до форуму</strong> з %1$s<br />» %2$s',
	'LOG_ACL_ADD_GROUP_LOCAL_F_'	=> '<strong>Додано або змінено доступ груп до форуму</strong> з %1$s<br />» %2$s',
	'LOG_ACL_ADD_GROUP_LOCAL_M_'	=> '<strong>Додано або змінено доступ модератора для групи до форуму</strong> з %1$s<br />» %2$s',
	'LOG_ACL_ADD_MOD_LOCAL_M_'	=> '<strong>Додано або змінено Модераторів</strong> з %1$s<br />» %2$s',
	'LOG_ACL_ADD_FORUM_LOCAL_F_'	=> '<strong>Додано або змінено права доступу до форуму</strong> з %1$s<br />» %2$s',
	'LOG_ACL_DEL_ADMIN_GLOBAL_A_'	=> '<strong>Видалено Адміністраторів</strong><br />» %s',
	'LOG_ACL_DEL_MOD_GLOBAL_M_'	=> '<strong>Видалено Супермодераторів</strong><br />» %s',
	'LOG_ACL_DEL_MOD_LOCAL_M_'	=> '<strong>Видалено Модераторів</strong> з %1$s<br />» %2$s',
	'LOG_ACL_DEL_FORUM_LOCAL_F_'	=> '<strong>Видалено форумні права користувача/групи</strong> з %1$s<br />» %2$s',
	'LOG_ACL_TRANSFER_PERMISSIONS'	=> '<strong>Перенесено права доступу від </strong><br />» %s',
	'LOG_ACL_RESTORE_PERMISSIONS'	=> '<strong>Відновлено власні права доступу після користування правами доступу</strong><br />» %s',
	'LOG_ADMIN_AUTH_FAIL'	=> '<strong>Невдала спроба логування в якості адміністратора</strong>',
	'LOG_ADMIN_AUTH_SUCCESS'	=> '<strong>Успішне логування в якості адміністратора</strong>',
	'LOG_ATTACH_EXT_ADD'	=> '<strong>Додано або змінено розширення приєднаних файлів</strong><br />» %s',
	'LOG_ATTACH_EXT_DEL'	=> '<strong>Видалено розширення приєднаних файлів</strong><br />» %s',
	'LOG_ATTACH_EXT_UPDATE'	=> '<strong>Оновлено розширення приєднаних файлів</strong><br />» %s',
	'LOG_ATTACH_EXTGROUP_ADD'	=> '<strong>Додано групу розширень</strong><br />» %s',
	'LOG_ATTACH_EXTGROUP_EDIT'	=> '<strong>Відредаговано групу розширень</strong><br />» %s',
	'LOG_ATTACH_EXTGROUP_DEL'	=> '<strong>Видалено групу розширень</strong><br />» %s',
	'LOG_ATTACH_FILEUPLOAD'	=> '<strong>Загублений файл приєднано до повідомлення</strong><br />» ID %1$d - %2$s',
	'LOG_ATTACH_ORPHAN_DEL'	=> '<strong>Видалено загублений файл</strong><br />» %s',
	'LOG_BAN_EXCLUDE_USER'	=> '<strong>Виключено користувача з чорного списку</strong> з причини “<em>%1$s</em>”<br />» %2$s',
	'LOG_BAN_EXCLUDE_IP'	=> '<strong>Виключено IP з чорного списку</strong> з причини “<em>%1$s</em>”<br />» %2$s',
	'LOG_BAN_EXCLUDE_EMAIL'	=> '<strong>Виключено e-mail з чорного списку</strong> з причини “<em>%1$s</em>”<br />» %2$s',
	'LOG_BAN_USER'	=> '<strong>Заблоковано користувача</strong> з причини “<em>%1$s</em>”<br />» %2$s',
	'LOG_BAN_IP'	=> '<strong>Заблоковано IP</strong> з причини “<em>%1$s</em>”<br />» %2$s',
	'LOG_BAN_EMAIL'	=> '<strong>Заблоковано e-mail</strong> з причини “<em>%1$s</em>”<br />» %2$s',
	'LOG_UNBAN_USER'	=> '<strong>Розблоковано користувача</strong><br />» %s',
	'LOG_UNBAN_IP'	=> '<strong>Розблоковано IP</strong><br />» %s',
	'LOG_UNBAN_EMAIL'	=> '<strong>Виключено з чорного списку e-mail</strong><br />» %s',
	'LOG_BBCODE_ADD'	=> '<strong>Додано новий BBCode</strong><br />» %s',
	'LOG_BBCODE_EDIT'	=> '<strong>Змінено BBCode</strong><br />» %s',
	'LOG_BBCODE_DELETE'	=> '<strong>Видалено BBCode</strong><br />» %s',
	'LOG_BOT_ADDED'	=> '<strong>Додано новий бот</strong><br />» %s',
	'LOG_BOT_DELETE'	=> '<strong>Видалено бот</strong><br />» %s',
	'LOG_BOT_UPDATED'	=> '<strong>Оновлено існуючий бот</strong><br />» %s',
	'LOG_CLEAR_ADMIN'	=> '<strong>Очищено логи адміністраторів</strong>',
	'LOG_CLEAR_CRITICAL'	=> '<strong>Очищено логи помилок</strong>',
	'LOG_CLEAR_MOD'	=> '<strong>Очищено логи модераторів</strong>',
	'LOG_CLEAR_USER'	=> '<strong>Очищено логи користувача</strong><br />» %s',
	'LOG_CLEAR_USERS'	=> '<strong>Очищено логи користувачів</strong>',
	'LOG_CONFIG_ATTACH'	=> '<strong>Змінено налаштування приєднань</strong>',
	'LOG_CONFIG_AUTH'	=> '<strong>Змінено налаштування авторизації</strong>',
	'LOG_CONFIG_AVATAR'	=> '<strong>Змінено налаштування аватара</strong>',
	'LOG_CONFIG_COOKIE'	=> '<strong>Змінено налаштування cookie</strong>',
	'LOG_CONFIG_EMAIL'	=> '<strong>Змінено налаштування e-mail</strong>',
	'LOG_CONFIG_FEATURES'	=> '<strong>Змінено налаштування можливостей форуму</strong>',
	'LOG_CONFIG_LOAD'	=> '<strong>Змінено налаштування відображення</strong>',
	'LOG_CONFIG_MESSAGE'	=> '<strong>Змінено налаштування приватних повідомлень</strong>',
	'LOG_CONFIG_POST'	=> '<strong>Змінено налаштування повідомлень</strong>',
	'LOG_CONFIG_REGISTRATION'	=> '<strong>Змінено налаштування реєстрації користувачів</strong>',
	'LOG_CONFIG_SEARCH'	=> '<strong>Змінено налаштування пошуку</strong>',
	'LOG_CONFIG_SECURITY'	=> '<strong>Змінено налаштування безпеки</strong>',
	'LOG_CONFIG_SERVER'	=> '<strong>Змінено налаштування сервера</strong>',
	'LOG_CONFIG_SETTINGS'	=> '<strong>Змінено налаштування форуму</strong>',
	'LOG_CONFIG_SIGNATURE'	=> '<strong>Змінено налаштування підпису</strong>',
	'LOG_CONFIG_VISUAL'	=> '<strong>Змінено налаштування візуального підтвердження</strong>',
	'LOG_APPROVE_TOPIC'	=> '<strong>Одобрено тему</strong><br />» %s',
	'LOG_BUMP_TOPIC'	=> '<strong>Користувач підняв тему</strong><br />» %s',
	'LOG_DELETE_POST'	=> '<strong>Видалено повідомлення</strong><br />» %s',
	'LOG_DELETE_SHADOW_TOPIC'   => '<strong>Видалено згадку про переміщену тему</strong><br />» %s',
	'LOG_DELETE_TOPIC'	=> '<strong>Видалено тему</strong><br />» %s',
	'LOG_FORK'	=> '<strong>Скопійовано тему</strong><br />» з %s',
	'LOG_LOCK'	=> '<strong>Закрито тему</strong><br />» %s',
	'LOG_LOCK_POST'	=> '<strong>Заблоковано повідомлення</strong><br />» %s',
	'LOG_MERGE'	=> '<strong>Об\'єднано повідомлення</strong> в тему<br />» %s',
	'LOG_MOVE'	=> '<strong>Переміщено тему</strong><br />» з 1$s до %2$s',
	'LOG_POST_APPROVED'	=> '<strong>Одобрено повідомлення</strong><br />» %s',
	'LOG_POST_DISAPPROVED'	=> '<strong>Повідомлення “%1$s” відхилено з насупної причини</strong><br />» %2$s',
	'LOG_POST_EDITED'	=> '<strong>Відредаговано повідомлення “%1$s” написане</strong><br />» %2$s',
	'LOG_REPORT_CLOSED'	=> '<strong>Закрито скаргу</strong><br />» %s',
	'LOG_REPORT_DELETED'	=> '<strong>Видалено скаргу</strong><br />» %s',
	'LOG_SPLIT_DESTINATION'	=> '<strong>Переміщено розділені повідомлення</strong><br />» до %s',
	'LOG_SPLIT_SOURCE'	=> '<strong>Розділено повідомлення</strong><br />» з %s',

	'LOG_TOPIC_APPROVED'	=> '<strong>Одобрено тему</strong><br />» %s',
	'LOG_TOPIC_DISAPPROVED'	=> '<strong>Тему “%1$s” не одобрено з наступної причини</strong><br />%2$s',
	'LOG_TOPIC_RESYNC'	=> '<strong>Синхронізовано лічильник повідомлень</strong><br />» %s',
	'LOG_TOPIC_TYPE_CHANGED'	=> '<strong>Змінено тип теми</strong><br />» %s',
	'LOG_UNLOCK'	=> '<strong>Розблоковано тему</strong><br />» %s',
	'LOG_UNLOCK_POST'	=> '<strong>Розблоковано повідомлення</strong><br />» %s',
	'LOG_DISALLOW_ADD'	=> '<strong>Додано заборонене ім\'я</strong><br />» %s',
	'LOG_DISALLOW_DELETE'	=> '<strong>Видалено заборонене ім\'я</strong>',
	'LOG_DB_BACKUP'	=> '<strong>Резервне копіювання бази даних</strong>',
	'LOG_DB_DELETE'	=> '<strong>Видалено резервну копію бази даних</strong>',
	'LOG_DB_RESTORE'	=> '<strong>Відновлено базу даних з резервної копії</strong>',
	'LOG_DOWNLOAD_EXCLUDE_IP'	=> '<strong>Виключено IP/ім\'я хосту з списку, тих хто може завантажувати.</strong><br />» %s',
	'LOG_DOWNLOAD_IP'	=> '<strong>Додано IP/ім\'я хосту до списку тих, хто може завантажувати</strong><br />» %s',
	'LOG_DOWNLOAD_REMOVE_IP'	=> '<strong>Видалено IP/ім\'я хосту з списку тих, хто може завантажувати</strong><br />» %s',
	'LOG_ERROR_JABBER'	=> '<strong>Помилка Jabber</strong><br />» %s',
	'LOG_ERROR_EMAIL'	=> '<strong>Помилка E-mail</strong><br />» %s',
	'LOG_FORUM_ADD'	=> '<strong>Створено новий форум</strong><br />» %s',
	'LOG_FORUM_DEL_FORUM'	=> '<strong>Видалено форум</strong><br />» %s',
	'LOG_FORUM_DEL_FORUMS'	=> '<strong>Видалено форум та підфоруми</strong><br />» %s',
	'LOG_FORUM_DEL_MOVE_FORUMS'	=> '<strong>Видалено форум та переміщено підфоруми</strong> в %1$s<br />» %2$s',
	'LOG_FORUM_DEL_MOVE_POSTS'	=> '<strong>Видалено форум та переміщено повідомлення </strong> в %1$s<br />» %2$s',
	'LOG_FORUM_DEL_MOVE_POSTS_FORUMS'	=> '<strong>Видалено форум і його підфоруми, переміщено повідомлення</strong> в %1$s<br />» %2$s',
	'LOG_FORUM_DEL_MOVE_POSTS_MOVE_FORUMS'	=> '<strong>Видалено форум, переміщено повідомлення</strong> в %1$s <strong>і підфоруми</strong> to %2$s<br />» %3$s',
	'LOG_FORUM_DEL_POSTS'	=> '<strong>Видалено форум та усі його повідомлення</strong><br />» %s',
	'LOG_FORUM_DEL_POSTS_FORUMS'	=> '<strong>Видалено форум та усі його повідомлення та підфоруми</strong><br />» %s',
	'LOG_FORUM_DEL_POSTS_MOVE_FORUMS'	=> '<strong>Видалено форум та усі його повідомлення, переміщено підфоруми</strong> в %1$s<br />» %2$s',
	'LOG_FORUM_EDIT'	=> '<strong>Змінено інформацію про форум</strong><br />» %s',
	'LOG_FORUM_MOVE_DOWN'	=> '<strong>Переміщено форум</strong> %1$s <strong>вниз під форум</strong> %2$s',
	'LOG_FORUM_MOVE_UP'	=> '<strong>Переміщено форум</strong> %1$s <strong>вверх над</strong> %2$s',
	'LOG_FORUM_SYNC'	=> '<strong>Синхронізовано форум</strong><br />» %s',
	'LOG_GROUP_CREATED'	=> '<strong>Створено нову групу</strong><br />» %s',
	'LOG_GROUP_DEFAULTS'	=> '<strong>Група “%1$s” встановлена за замовчуванням для учасників</strong><br />» %2$s',
	'LOG_GROUP_DELETE'	=> '<strong>Видалено групу користувачів</strong><br />» %s',
	'LOG_GROUP_DEMOTED'	=> '<strong>Лідерів знято в групі</strong> %1$s<br />» %2$s',
	'LOG_GROUP_PROMOTED'	=> '<strong>Учасники висунуті на лідера в групі</strong> %1$s<br />» %2$s',
	'LOG_GROUP_REMOVE'	=> '<strong>Видалено учасників з групи</strong> %1$s<br />» %2$s',
	'LOG_GROUP_UPDATED'	=> '<strong>Оновлено інформацію про групу</strong><br />» %s',
	'LOG_MODS_ADDED'	=> '<strong>Додано нових лідерів до групи</strong> %1$s<br />» %2$s',
	'LOG_USERS_APPROVED'	=> '<strong>Учасників затверджено в групі</strong> %1$s<br />» %2$s',
	'LOG_USERS_ADDED'	=> '<strong>Додано нових учасників до групи</strong> %1$s<br />» %2$s',
	'LOG_IMAGESET_ADD_DB'	=> '<strong>Додано новий набір зображень до бази даних</strong><br />» %s',
	'LOG_IMAGESET_ADD_FS'	=> '<strong>Додано новий набір зображень на сервер</strong><br />» %s',
	'LOG_IMAGESET_DELETE'	=> '<strong>Видалено набір зображень</strong><br />» %s',
	'LOG_IMAGESET_EDIT_DETAILS'	=> '<strong>Відредаговано інформацію про набір зображень</strong><br />» %s',
	'LOG_IMAGESET_EDIT'	=> '<strong>Відредаговано набір зображень</strong><br />» %s',
	'LOG_IMAGESET_EXPORT'	=> '<strong>Експортовано набір зображень</strong><br />» %s',
	'LOG_IMAGESET_LANG_REFRESHED'	=> '<strong>Оновлено “%2$s” локалізацію набору зображень</strong><br />» %1$s',
	'LOG_IMAGESET_REFRESHED'	=> '<strong>Оновлено набір зображень</strong><br />» %s',
	'LOG_INACTIVE_ACTIVATE'	=> '<strong>Активовано неактивних користувачів</strong><br />» %s',
	'LOG_INACTIVE_DELETE'	=> '<strong>Видалено неактивних користувачів</strong><br />» %s',
	'LOG_INACTIVE_REMIND'	=> '<strong>Відіслано листи e-mails з нагадуванням неактивним користувачам</strong><br />» %s',
	'LOG_INSTALL_CONVERTED'	=> '<strong>Клнвертовано з %1$s до phpBB %2$s</strong>',
	'LOG_INSTALL_INSTALLED'	=> '<strong>Встановлено phpBB %s</strong>',
	'LOG_IP_BROWSER_FORWARDED_CHECK'	=> '<strong>Перевірка сесії IP/браузера/X_FORWARDED_FOR не вдала</strong><br />»IP Користувача“<em>%1$s</em>” порівнювалась з IP сесії “<em>%2$s</em>”, стрічка браузера користувача “<em>%3$s</em>” порівнювалась з стрічкою браузера сесії “<em>%4$s</em>”, та стрічка користувача X_FORWARDED_FOR “<em>%5$s</em>” порівнювалась з стрічкою сесії X_FORWARDED_FOR “<em>%6$s</em>”.',
	'LOG_JAB_CHANGED'	=> '<strong>Змінено налаштування облікового запису Jabber</strong>',
	'LOG_JAB_PASSCHG'	=> '<strong>Змінено пароль Jabber</strong>',
	'LOG_JAB_REGISTER'	=> '<strong>Зареєстровано обліковий запис Jabber</strong>',
	'LOG_JAB_SETTINGS_CHANGED'	=> '<strong>Налаштування Jabber змінено</strong>',
	'LOG_LANGUAGE_PACK_DELETED'	=> '<strong>Видалено мовний пакет</strong><br />» %s',
	'LOG_LANGUAGE_PACK_INSTALLED'	=> '<strong>Встановлено мовний пакет</strong><br />» %s',
	'LOG_LANGUAGE_PACK_UPDATED'	=> '<strong>Оновлено інформацію про мовний пакет</strong><br />» %s',
	'LOG_LANGUAGE_FILE_REPLACED'	=> '<strong>Замінено файл мови</strong><br />» %s',
	'LOG_LANGUAGE_FILE_SUBMITTED'	=> '<strong>Розміщено файл мови і збережено в папці зберігання</strong><br />» %s',
	'LOG_MASS_EMAIL'	=> '<strong>Розіслано масовий e-mail</strong><br />» %s',
	'LOG_MCP_CHANGE_POSTER'	=> '<strong>Змінено автора в темі “%1$s”</strong><br />» з %2$s на %3$s',
	'LOG_MODULE_DISABLE'	=> '<strong>Модуль вимкнено</strong><br />» %s',
	'LOG_MODULE_ENABLE'	=> '<strong>Модуль увімкнено</strong><br />» %s',
	'LOG_MODULE_MOVE_DOWN'	=> '<strong>Модуль переміщено вниз</strong><br />» %1$s below %2$s',
	'LOG_MODULE_MOVE_UP'	=> '<strong>Модуль переміщено вверх</strong><br />» %1$s above %2$s',
	'LOG_MODULE_REMOVED'	=> '<strong>Видалено модуль</strong><br />» %s',
	'LOG_MODULE_ADD'	=> '<strong>Додано модуль</strong><br />» %s',
	'LOG_MODULE_EDIT'	=> '<strong>Відредаговано модуль</strong><br />» %s',
	'LOG_A_ROLE_ADD'	=> '<strong>Додано роль адміністратора</strong><br />» %s',
	'LOG_A_ROLE_EDIT'	=> '<strong>Змінено роль адміністратора</strong><br />» %s',
	'LOG_A_ROLE_REMOVED'	=> '<strong>Видалено роль адміністратора</strong><br />» %s',
	'LOG_F_ROLE_ADD'	=> '<strong>Додано форумну роль</strong><br />» %s',
	'LOG_F_ROLE_EDIT'	=> '<strong>Змінено форумну роль</strong><br />» %s',
	'LOG_F_ROLE_REMOVED'	=> '<strong>Видалено форумну роль</strong><br />» %s',
	'LOG_M_ROLE_ADD'	=> '<strong>Додано роль модератора</strong><br />» %s',
	'LOG_M_ROLE_EDIT'	=> '<strong>Змінено роль модератора</strong><br />» %s',
	'LOG_M_ROLE_REMOVED'	=> '<strong>Видано роль модератора</strong><br />» %s',
	'LOG_U_ROLE_ADD'	=> '<strong>Додано роль користувача</strong><br />» %s',
	'LOG_U_ROLE_EDIT'	=> '<strong>Змінено роль користувача</strong><br />» %s',
	'LOG_U_ROLE_REMOVED'	=> '<strong>Видалено роль користувача</strong><br />» %s',
	'LOG_PROFILE_FIELD_ACTIVATE'	=> '<strong>Активовано поле профілю</strong><br />» %s',
	'LOG_PROFILE_FIELD_CREATE'	=> '<strong>Додано поле профілю</strong><br />» %s',
	'LOG_PROFILE_FIELD_DEACTIVATE'	=> '<strong>Деактивовано поле профілю</strong><br />» %s',
	'LOG_PROFILE_FIELD_EDIT'	=> '<strong>Змінено  поле профілю</strong><br />» %s',
	'LOG_PROFILE_FIELD_REMOVED'	=> '<strong>Видалено поле профілю</strong><br />» %s',
	'LOG_PRUNE'	=> '<strong>Pruned forums</strong><br />» %s',
	'LOG_AUTO_PRUNE'	=> '<strong>Здійснено автоочистку форумів</strong><br />» %s',
	'LOG_PRUNE_USER_DEAC'	=> '<strong>Деактивовано користувачів</strong><br />» %s',
	'LOG_PRUNE_USER_DEL_DEL'	=> '<strong>Видалено користувачів та їхні повідомлення</strong><br />» %s',
	'LOG_PRUNE_USER_DEL_ANON'	=> '<strong>Видалено користувачів, їх повідомлення залишено</strong><br />» %s',
	'LOG_PURGE_CACHE'	=> '<strong>Очищено кеш</strong>',
	'LOG_RANK_ADDED'	=> '<strong>Додано нове звання</strong><br />» %s',
	'LOG_RANK_REMOVED'	=> '<strong>Видалено звання</strong><br />» %s',
	'LOG_RANK_UPDATED'	=> '<strong>Оновлено звання</strong><br />» %s',
	'LOG_REASON_ADDED'	=> '<strong>Додано причину скарги/відмови</strong><br />» %s',
	'LOG_REASON_REMOVED'	=> '<strong>Видалено причину скарги/відмови</strong><br />» %s',
	'LOG_REASON_UPDATED'	=> '<strong>Оновлено причину скарги/відмови</strong><br />» %s',
	'LOG_REFERER_INVALID'		=> '<strong>Не вдалось здійснити перевірку реферера </strong><br />»Реферер: “<em>%1$s</em>”. Запит було відхилено, сесію видалено.',
	'LOG_RESET_DATE'	=> '<strong>Скидання дати старту форуму</strong>',
	'LOG_RESET_ONLINE'	=> '<strong>Скидання рекорду відвідуваності форуму</strong>',
	'LOG_RESYNC_POSTCOUNTS'	=> '<strong>Синхронізовано лічильник повідомлень користувачів</strong>',
	'LOG_RESYNC_POST_MARKING'	=> '<strong>Синхронізовано лічильник відмічених повідомлень</strong>',
	'LOG_RESYNC_STATS'	=> '<strong>Синхронізовано повідомлення, теми і статистику користувачів</strong>',
	'LOG_SEARCH_INDEX_CREATED'	=> '<strong>Створено пошуковий індекс для</strong><br />» %s',
	'LOG_SEARCH_INDEX_REMOVED'	=> '<strong>Видалено пошуковий індекс для</strong><br />» %s',
	'LOG_STYLE_ADD'	=> '<strong>Додано новий стиль</strong><br />» %s',
	'LOG_STYLE_DELETE'	=> '<strong>Видалено стиль</strong><br />» %s',
	'LOG_STYLE_EDIT_DETAILS'	=> '<strong>Змінено стиль</strong><br />» %s',
	'LOG_STYLE_EXPORT'	=> '<strong>Експортовано стиль</strong><br />» %s',
	'LOG_TEMPLATE_ADD_DB'	=> '<strong>Додано новий шаблон в базу даних</strong><br />» %s',
	'LOG_TEMPLATE_ADD_FS'	=> '<strong>Додано новий шаблон на сервер</strong><br />» %s',
	'LOG_TEMPLATE_CACHE_CLEARED'	=> '<strong>Видалено закешовані версії файлів шаблону <em>%1$s</em></strong><br />» %2$s',
	'LOG_TEMPLATE_DELETE'	=> '<strong>Видалено шаблон</strong><br />» %s',
	'LOG_TEMPLATE_EDIT'	=> '<strong>Змінено шаблон <em>%1$s</em></strong><br />» %2$s',
	'LOG_TEMPLATE_EDIT_DETAILS'	=> '<strong>Змінено інформацію про шаблон</strong><br />» %s',
	'LOG_TEMPLATE_EXPORT'	=> '<strong>Експортовано шаблон</strong><br />» %s',
	'LOG_TEMPLATE_REFRESHED'	=> '<strong>Оновлено шаблон</strong><br />» %s',
	'LOG_THEME_ADD_DB'	=> '<strong>Додано нову тему в базу даних</strong><br />» %s',
	'LOG_THEME_ADD_FS'	=> '<strong>Додано нову тему на сервер</strong><br />» %s',
	'LOG_THEME_DELETE'	=> '<strong>Видалено тему</strong><br />» %s',
	'LOG_THEME_EDIT_DETAILS'	=> '<strong>Змінено інформацію про тему</strong><br />» %s',
	'LOG_THEME_EDIT'	=> '<strong>Відредаговано тему <em>%1$s</em></strong>',
	'LOG_THEME_EDIT_FILE'	=> '<strong>Відредаговано тему <em>%1$s</em></strong><br />» Змінено файл <em>%2$s</em>',
	'LOG_THEME_EXPORT'	=> '<strong>Експортовано тему</strong><br />» %s',
	'LOG_THEME_REFRESHED'	=> '<strong>Оновлено тему</strong><br />» %s',
	'LOG_UPDATE_DATABASE'	=> '<strong>Оновлено базу даних з версії %1$s до версії %2$s</strong>',
	'LOG_UPDATE_PHPBB'	=> '<strong>Оновлено phpBB з версії %1$s до версії %2$s</strong>',
	'LOG_USER_ACTIVE'	=> '<strong>Користувач активувався</strong><br />» %s',
	'LOG_USER_BAN_USER'	=> '<strong>Заблоковано користувача через панель керування користувачами</strong> з причини “<em>%1$s</em>”<br />» %2$s',
	'LOG_USER_BAN_IP'	=> '<strong>Заблоковано IP via user management</strong> з причини “<em>%1$s</em>”<br />» %2$s',
	'LOG_USER_BAN_EMAIL'	=> '<strong>Заблоковано e-mail через через панель керування користувачами</strong> з причини “<em>%1$s</em>”<br />» %2$s',
	'LOG_USER_DELETED'	=> '<strong>Видалено користувача</strong><br />» %s',
	'LOG_USER_DEL_ATTACH'	=> '<strong>Видалено усі приєднані файли користувачем</strong><br />» %s',
	'LOG_USER_DEL_AVATAR'	=> '<strong>Видалено аватар користувача</strong><br />» %s',
	'LOG_USER_DEL_POSTS'	=> '<strong>Видалено усі повідомлення користувача</strong><br />» %s',
	'LOG_USER_DEL_SIG'	=> '<strong>Видалено підпис користувача</strong><br />» %s',
	'LOG_USER_INACTIVE'	=> '<strong>Деактивовано користувача</strong><br />» %s',
	'LOG_USER_MOVE_POSTS'	=> '<strong>Переміщено повідомлення користувача</strong><br />» posts by “%1$s” в форум “%2$s”',
	'LOG_USER_NEW_PASSWORD'	=> '<strong>Змінено пароль користувача</strong><br />» %s',
	'LOG_USER_REACTIVATE'	=> '<strong>Ініційовано повторну активацію облікового запису</strong><br />» %s',
	'LOG_USER_UPDATE_EMAIL'	=> '<strong>Користувач “%1$s” змінив e-mail</strong><br />» з “%2$s” на “%3$s”',
	'LOG_USER_UPDATE_NAME'	=> '<strong>Змінено ім\'я користувача</strong><br />» from “%1$s” to “%2$s”',
	'LOG_USER_USER_UPDATE'	=> '<strong>Оновлено інформацію про користувача</strong><br />» %s',
	'LOG_USER_ACTIVE_USER'	=> '<strong>Активовано обліковий запис користувача</strong>',
	'LOG_USER_DEL_AVATAR_USER'	=> '<strong>Видалено аватар користувача</strong>',
	'LOG_USER_DEL_SIG_USER'	=> '<strong>Видалено підпис користувача</strong>',
	'LOG_USER_FEEDBACK'	=> '<strong>Додано відгук про користувача</strong><br />» %s',
	'LOG_USER_GENERAL'	=> '%s',
	'LOG_USER_INACTIVE_USER'	=> '<strong>Обліковий запис користувача деактивовано</strong>',
	'LOG_USER_LOCK'	=> '<strong>Користувач заблокував свою тему</strong><br />» %s',
	'LOG_USER_MOVE_POSTS_USER'	=> '<strong>Перенесено усі повідомлення в форум</strong>» %s',
	'LOG_USER_REACTIVATE_USER'	=> '<strong>Ініційовано повторну активацію облікового запису користувача</strong>',
	'LOG_USER_UNLOCK'	=> '<strong>Користувач відкрив свою тему</strong><br />» %s',
	'LOG_USER_WARNING'	=> '<strong>Винесено попередження користувачу</strong><br />» %s',
	'LOG_USER_WARNING_BODY'	=> '<strong>Наступне попередження було зроблене цьому користувачу</strong><br />» %s',
	'LOG_USER_GROUP_CHANGE'	=> '<strong>Користувач змінив групу за замовчуванням</strong><br />» %s',
	'LOG_USER_GROUP_DEMOTE'	=> '<strong>Користувача знято з лідерів групи</strong><br />» %s',
	'LOG_USER_GROUP_JOIN'	=> '<strong>Користувач вступив до групи</strong><br />» %s',
	'LOG_USER_GROUP_JOIN_PENDING'	=> '<strong>Користувач приєднався до групи і потребує одобрення</strong><br />» %s',
	'LOG_USER_GROUP_RESIGN'	=> '<strong>Користувач відмовився від участі в групі</strong><br />» %s',
	'LOG_WORD_ADD'	=> '<strong>Додано цензор слів</strong><br />» %s',
	'LOG_WORD_DELETE'	=> '<strong>Видалено цензор слів</strong><br />» %s',
	'LOG_WORD_EDIT'	=> '<strong>Змінено цензор слів</strong><br />» %s',
));
// Two language keys with the same text were used in different locations
// LOG_DELETE_TOPIC is the correct one, this line is here so that existing
// log entries are not broken. Ensure it is included in your language file.
	$lang['LOG_TOPIC_DELETED'] = $lang['LOG_DELETE_TOPIC'];


?>