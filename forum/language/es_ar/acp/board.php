<?php
/** 
*
* acp_board [Spanish [es_AR]]
*
* @package language
* @version $Id: $
* @copyright (c) 2005 phpBB Group 
* @author 2008-07-18 - Larveando Team (team@larveando.com.ar)
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
//
// TRANSLATORS NOTE FOR ES_AR LANGUAGE (by Larveando Team)
// There are some translation issues were taken having in mind a better user navigation experience. I.e:
// 'You' was translated as a coloquial 'Vos' instead a more serious 'Su'. Idem 'Your'. In general, a coloquial style was adopted.
// The board speaks in first person. 'Avatar could not be uploaded' was translated as 'No puedo subir el avatar', instead 'No se puede subir el avatar'
// Some common used expressions like Topic, Post (as context used), Ban, Cookies, FAQ, OnLine, Home, Login (as context used), logs etc 
// where _not_ translated in lack of a better common word to use.
// Board was translated 'Sitio' (Site) with uppercase in alussion to the entire system in lack of a better common word to use.
//

$lang = array_merge($lang, array(
	'ACP_BOARD_SETTINGS_EXPLAIN'	=> 'Acá podés determinar las operaciones básicas de tu Sitio, desde el nombre pasando por la registración de usuarios hasta los mensajes privados.',
	'CUSTOM_DATEFORMAT'	=> 'Personalizar…',
	'DEFAULT_DATE_FORMAT'	=> 'Formato de fecha',
	'DEFAULT_DATE_FORMAT_EXPLAIN'	=> 'El formato de fecha es el mismo que en la función <code>date</code> de PHP.',
	'DEFAULT_LANGUAGE'	=> 'Idioma por omisión',
	'DEFAULT_STYLE'	=> 'Estilo por omisión',
	'DISABLE_BOARD'	=> 'Deshabilitar Sitio',
	'DISABLE_BOARD_EXPLAIN'	=> 'Esto hará al Sitio inaccesible a los usuaios. También podés ingresar un breve mensaje (255 caracteres) para mostrar, si querés.',
	'OVERRIDE_STYLE'	=> 'Sustituye estilo del usuario',
	'OVERRIDE_STYLE_EXPLAIN'	=> 'Reemplaza el estilo del usuario por el estilo por omisión.',
	'RELATIVE_DAYS'	=> 'Dias relativos',
	'SITE_DESC'	=> 'Descripción del Sitio',
	'SITE_NAME'	=> 'Nombre del Sitio',
	'SYSTEM_DST'	=> 'Habilitar horario de ahorro de energía',
	'SYSTEM_TIMEZONE'	=> 'Zona horaria del sistema',
	'WARNINGS_EXPIRE'	=> 'Duración de la advertencia',
	'WARNINGS_EXPIRE_EXPLAIN'	=> 'Número de dias a transcurrir antes que la advertencia expire automáticamente',
	'ACP_BOARD_FEATURES_EXPLAIN'	=> 'Acá podés habilitar/deshabilitar varias características del Sitio',
	'ALLOW_ATTACHMENTS'	=> 'Permitir adjuntos',
	'ALLOW_BOOKMARKS'	=> 'Permitir señalar topics',
	'ALLOW_BOOKMARKS_EXPLAIN'	=> 'El usuario será capaz de almacenar señaladores personales',
	'ALLOW_BBCODE'	=> 'Permitir BBCode',
	'ALLOW_FORUM_NOTIFY'	=> 'Permitir suscribir a Foros',
	'ALLOW_NAME_CHANGE'	=> 'Permitir cambios de nombre de usuario',
	'ALLOW_NO_CENSORS'	=> 'Permitir deshabilitar lista de palabras censuradas',
	'ALLOW_NO_CENSORS_EXPLAIN'	=> 'Los usuarios pueden elegir deshabilitar la lista de palabras censuradas de posts y mensajes privados.',
	'ALLOW_PM_ATTACHMENTS'	=> 'Permitir adjuntos en mensajes privados',
	'ALLOW_SIG'	=> 'Permitir firmas',
	'ALLOW_SIG_BBCODE'	=> 'Permitir código BBCode en la firma del usuario',
	'ALLOW_SIG_FLASH'	=> 'Permitir uso de código BBCode <code>[FLASH]</code> en la firma del usuario',
	'ALLOW_SIG_IMG'	=> 'Permitir uso de código BBCode <code>[IMG]</code> en la firma del usuario',
	'ALLOW_SIG_LINKS'	=> 'Permitir uso de enlaces en la firma del usuario',
	'ALLOW_SIG_LINKS_EXPLAIN'	=> 'Si esta deshabilitado el código BBCode <code>[URL]</code> y las URLs automáticas estarán deshabilitadas.',
	'ALLOW_SIG_SMILIES'	=> 'Permitir uso de caritas en la firma del usuario',
	'ALLOW_SMILIES'	=> 'Permitir caritas',
	'ALLOW_TOPIC_NOTIFY'	=> 'Permitir suscribir a topics',
	'BOARD_PM'	=> 'Mensajes privados',
	'BOARD_PM_EXPLAIN'	=> 'Habilita o deshabilita mensajes privados para todos los usuarios.',
	'ACP_AVATAR_SETTINGS_EXPLAIN'	=> 'Los avatares son generalmente pequeños, imágenes distintivas que un usuario puede asociar con sí mismo. Dependiendo del estilo son mostrados generalmente debajo del nombre de usuario cuando se lee un topic. Acá podés establecer como los usuarios podran determinar sus avatares. Por favor notá que para subir avatares necesitás haber creado el directorio que definís debajo y asegurarte que pueda ser escrito por el Web server. Por favor también notá que los límites en el tamaño del archivo sólo rigen sobre los avatares subidos, no se aplican a las imagenes enlazadas fuera del Sitio.',
	'ALLOW_LOCAL'	=> 'Habilitar galería de avatares',
	'ALLOW_REMOTE'	=> 'Habilitar avateres remotos',
	'ALLOW_REMOTE_EXPLAIN'	=> 'Avatares enlazados de otro sitio web',
	'ALLOW_UPLOAD'	=> 'Habilitar subida de avatares',
	'AVATAR_GALLERY_PATH'	=> 'Ruta de galería de avatares',
	'AVATAR_GALLERY_PATH_EXPLAIN'	=> 'Ruta en tu directorio raíz para imágenes pre-cargadas, ej. <samp>images/avatars/gallery</samp>',
	'AVATAR_STORAGE_PATH'	=> 'Ruta de guardado de avatares',
	'AVATAR_STORAGE_PATH_EXPLAIN'	=> 'Ruta en tu directorio raíz, ej. <samp>images/avatars/upload</samp>',
	'MAX_AVATAR_SIZE'	=> 'Dimensiones máximas del avatar',
	'MAX_AVATAR_SIZE_EXPLAIN'	=> 'Ancho x Alto en pixeles',
	'MAX_FILESIZE'	=> 'Tamaño máximo del avatar',
	'MAX_FILESIZE_EXPLAIN'	=> 'Para archivos subidos',
	'MIN_AVATAR_SIZE'	=> 'Dimensiones mínimas del avatar',
	'MIN_AVATAR_SIZE_EXPLAIN'	=> 'Ancho x Alto en pixeles',
	'ACP_MESSAGE_SETTINGS_EXPLAIN'	=> 'Acá podés ajustar los parámetros por omisión de los mensajes privados',
	'ALLOW_BBCODE_PM'	=> 'Permitir BBCode en mensajes privados',
	'ALLOW_FLASH_PM'	=> 'Permitir uso de código BBCode <code>[FLASH]</code>',
	'ALLOW_FORWARD_PM'	=> 'Permitir reenvío de mensajes privados',
	'ALLOW_IMG_PM'	=> 'Permitir uso de código BBCode <code>[IMG]</code>',
	'ALLOW_MASS_PM'	=> 'Permitir envío de mensajes privados a múltiples usuarios y grupos',
	'ALLOW_PRINT_PM'	=> 'Permitir vista de impresión en mensajes privados',
	'ALLOW_QUOTE_PM'	=> 'Permitir citas en mensajes privados',
	'ALLOW_SIG_PM'	=> 'Permitir firmas en mensajes privados',
	'ALLOW_SMILIES_PM'	=> 'Permitir caritas en mensajes privados',
	'BOXES_LIMIT'	=> 'Máximo de mensajes privados por casilla',
	'BOXES_LIMIT_EXPLAIN'	=> 'Los usuarios pueden recibir no más que esta cantidad de mensajes en cada una de sus casillas de mensajes privados. Ajustá este valor a  0 para permitir mensajes ilimitados.',
	'BOXES_MAX'	=> 'Máximo de carpetas de mensajes',
	'BOXES_MAX_EXPLAIN'	=> 'Por omisión los usuarios pueden crear este número de carpetas personales para mensajes privados.',
	'ENABLE_PM_ICONS'	=> 'Habilitar uso de íconos en topics de mensajes privados',
	'FULL_FOLDER_ACTION'	=> 'Acción por omisión para carpeta llena',
	'FULL_FOLDER_ACTION_EXPLAIN'	=> 'Acción a tomar si la carpeta de un usuario está llena asumiendo que la acción elegida por el usuario, si es que ha elegido alguna, no es aplicable. La única excepción es para la carpeta “Mensajes Enviados” dónde la acción por omisión es siempre borrar los mensajes viejos.',
	'HOLD_NEW_MESSAGES'	=> 'Retener nuevos mensajes',
	'PM_EDIT_TIME'	=> 'Tiempo límite de edición',
	'PM_EDIT_TIME_EXPLAIN'	=> 'Limita el tiempo disponible para editar un mensaje privado aún no despachado. Ajustá este valor a  0 para deshabilitar este comportamiento.',
	'ACP_POST_SETTINGS_EXPLAIN'	=> 'Acá podés ajustar los parámetros por omisión de los posts',
	'ALLOW_POST_LINKS'	=> 'Permitir enlaces en posts/mensajes privados',
	'ALLOW_POST_LINKS_EXPLAIN'	=> 'Si está deshabilitado el código BBCode <code>[URL]</code> y las URLs automáticas estarán deshabilitadas.',
	'BUMP_INTERVAL'	=> 'Intervalo de reactivación',
	'BUMP_INTERVAL_EXPLAIN'	=> 'Número de minutos, horas o días entre el último post y la capacidad de reactivar su topic.',
	'CHAR_LIMIT'	=> 'Máximo de caracteres por post',
	'CHAR_LIMIT_EXPLAIN'	=> 'El número de caracteres permitidos en un post.  Ajustá este valor a 0 para ilimitados caracteres.',
	'DISPLAY_LAST_EDITED'	=> 'Mostrar fecha de la última edición',
	'DISPLAY_LAST_EDITED_EXPLAIN'	=> 'Decidí si la fecha de la última edición se mostrará en los posts',
	'EDIT_TIME'	=> 'Tiempo límite de edición',
	'EDIT_TIME_EXPLAIN'	=> 'Limita el tiempo disponible para editar un post. Ajustá este valor a  0 para deshabilitar este comportamiento.',
	'FLOOD_INTERVAL'	=> 'Intervalo de saturación',
	'FLOOD_INTERVAL_EXPLAIN'	=> 'Número de segundos que un usuario debe esperar para enviar un nuevo post. Habilitar a los usuarios para ignorar esto requiere modificar sus permisos.',
	'HOT_THRESHOLD'	=> 'Umbral para Topic Popular',
	'HOT_THRESHOLD_EXPLAIN'	=> 'Posts por topic requeridos para que sea considerado popular. Ajustá este valor a 0 para deshabilitar este comportamiento.',
	'MAX_POLL_OPTIONS'	=> 'Número máximo de opciones en encuestas',
	'MAX_POST_FONT_SIZE'	=> 'Tamaño máximo de fuente en posts.',
	'MAX_POST_FONT_SIZE_EXPLAIN'	=> 'Tamaño máximo de fuente permitido en un post. Ajustá este valor a 0 para tamaño ilimitado.',
	'MAX_POST_IMG_HEIGHT'	=> 'Altura máxima de imagen en posts',
	'MAX_POST_IMG_HEIGHT_EXPLAIN'	=> 'Altura máxima de una imagen/flash en posts. Ajustá este valor a 0 para tamaño ilimitado.',
	'MAX_POST_IMG_WIDTH'	=> 'Ancho máximo de imagen en posts',
	'MAX_POST_IMG_WIDTH_EXPLAIN'	=> 'Ancho máximo de una imagen/flash en posts. Ajustá este valor a 0 para tamaño ilimitado.',
	'MAX_POST_URLS'	=> 'Máximo de enlaces por post',
	'MAX_POST_URLS_EXPLAIN'	=> 'Número máximo de URLs en un post. Ajustá este valor a 0 para ilimitados links.',
	'POSTING'	=> 'Posteo',
	'POSTS_PER_PAGE'	=> 'Posts por página',
	'QUOTE_DEPTH_LIMIT'	=> 'Máximo de citas anidadas por post',
	'QUOTE_DEPTH_LIMIT_EXPLAIN'	=> 'Número máximo de citas anidadas en un post. Ajustá este valor a 0 para infinitas citas.',
	'SMILIES_LIMIT'	=> 'Máximo de caritas por post',
	'SMILIES_LIMIT_EXPLAIN'	=> 'Número máximo de caritas en un post. Ajustá este valor a 0 para caritas ilimitadas.',
	'TOPICS_PER_PAGE'	=> 'Topics por página',
	'ACP_SIGNATURE_SETTINGS_EXPLAIN'	=> 'Acá podés ajustar los parámetros por omisión de las firmas',
	'MAX_SIG_FONT_SIZE'	=> 'Tamaño máximo de fuente en firmas',
	'MAX_SIG_FONT_SIZE_EXPLAIN'	=> 'Tamaño máximo de fuente permitido en firmas. Ajustá este valor a 0 para tamaño ilimitado.',
	'MAX_SIG_IMG_HEIGHT'	=> 'Altura máxima de imagen en firmas',
	'MAX_SIG_IMG_HEIGHT_EXPLAIN'	=> 'Altura máxima de una imagen/flash en firmas. Ajustá este valor a 0 para tamaño ilimitado.',
	'MAX_SIG_IMG_WIDTH'	=> 'Ancho máximo de imagen en firmas',
	'MAX_SIG_IMG_WIDTH_EXPLAIN'	=> 'Ancho máximo de una imagen/flash en firmas. Ajustá este valor a 0 para tamaño ilimitado.',
	'MAX_SIG_LENGTH'	=> 'Longitud máxima de las firmas',
	'MAX_SIG_LENGTH_EXPLAIN'	=> 'Máximo número de caracteres en las firmas de los usuarios.',
	'MAX_SIG_SMILIES'	=> 'Máximo de caritas por firma',
	'MAX_SIG_SMILIES_EXPLAIN'	=> 'Número máximo de caritas en un post. Ajustá este valor a 0 para caritas ilimitadas.',
	'MAX_SIG_URLS'	=> 'Máximo de enlaces por firma',
	'MAX_SIG_URLS_EXPLAIN'	=> 'Número máximo de URLs en un post.Ajustá este valor a 0 para ilimitados links.',
	'ACP_REGISTER_SETTINGS_EXPLAIN'	=> 'Acá podés definir parámtros relativos a registración y perfil',
	'ACC_ACTIVATION'	=> 'Activación de cuenta',
	'ACC_ACTIVATION_EXPLAIN'	=> 'Esto determina si los usuarios tienen acceso inmediiato al Sitio o bien si se requiere confirmación. También podés deshabilitar por completo nuevas registraciones.',
	'ACC_ADMIN'	=> 'Admin',
	'ACC_DISABLE'	=> 'Deshabilitado',
	'ACC_NONE'	=> 'Ninguna',
	'ACC_USER'	=> 'Usuario',
	'ALLOW_EMAIL_REUSE'	=> 'Permitir reutilización de email',
	'ALLOW_EMAIL_REUSE_EXPLAIN'	=> 'Diferentes usuarios pueden registrarse con la misma dirección de email.',
	'COPPA'	=> 'APPCO Acta de Protección y Privacidad de Chicos Online',
	'COPPA_FAX'	=> 'Fax de APPCO',
	'COPPA_MAIL'	=> 'Email de APPCO',
	'COPPA_MAIL_EXPLAIN'	=> 'Esta es la dirección de email donde los padres deben enviar formularios de registración APPCO',
	'ENABLE_COPPA'	=> 'Habilitar APPCO',
	'ENABLE_COPPA_EXPLAIN'	=> 'Esto requiere que los usuarios declaren ser mayores de 13 años para aceptar las disposiciones APPCO. Si la deshabilitás, los grupos específicos de APPCO no se mostrarán.',
	'MAX_CHARS'	=> 'Max',
	'MIN_CHARS'	=> 'Min',
	'NO_AUTH_PLUGIN'	=> 'No encontré una autentificación del plugin satisfactoria.',
	'PASSWORD_LENGTH'	=> 'Longitud de la clave',
	'PASSWORD_LENGTH_EXPLAIN'	=> 'Número de caracteres mínimo y máximo en las claves.',
	'REG_LIMIT'	=> 'Intentos de registración',
	'REG_LIMIT_EXPLAIN'	=> 'Numero de intentos que los usuarios pueden hacer con el código de confirmación antes que se les bloquee la sesión.',
	'USERNAME_ALPHA_ONLY'	=> 'Alfanúmerico solamente',
	'USERNAME_ALPHA_SPACERS'	=> 'Alfanúmerico y espaciadores',
	'USERNAME_ASCII'	=> 'ASCII (sin unicode internacional)',
	'USERNAME_LETTER_NUM'	=> 'Cualquier letra y número',
	'USERNAME_LETTER_NUM_SPACERS'	=> 'Cualquier letra, número y espaciadores',
	'USERNAME_CHARS'	=> 'Caracteres en nombre de usuario',
	'USERNAME_CHARS_ANY'	=> 'Cualquier caracter',
	'USERNAME_CHARS_EXPLAIN'	=> 'Restringe tipo de caracteres que pueden ser usados en nombres de usuario, espaciadores son; espacio, -, +, _, [ y ]',
	'USERNAME_LENGTH'	=> 'Longitud de nombre de usuario',
	'USERNAME_LENGTH_EXPLAIN'	=> 'Número de caracteres mínimo y máximo en nombres de usuario.',
	'ACP_VC_SETTINGS_EXPLAIN'	=> 'Acá podés definir parámetros por omisión de confirmación visual y parámetros captcha.',
	'CAPTCHA_GD'	=> 'GD CAPTCHA',
	'CAPTCHA_GD_NOISE'	=> 'Ruido GD CAPTCHA',
	'CAPTCHA_GD_EXPLAIN'	=> 'Emplear la libreria visual GD para hacer CAPTCHA mas avanzado',
	'CAPTCHA_GD_NOISE_EXPLAIN'	=> 'Usar ruido para hacer el CAPTCHA basado en GD más difícil',
	'VISUAL_CONFIRM_POST'	=> 'Habilitar confirmación visual para posts de invitados',
	'VISUAL_CONFIRM_POST_EXPLAIN'	=> 'Requiere que los usuarios anónimos ingresen un código al azar incluído en una imagen para prevenir posteos masivos.',
	'VISUAL_CONFIRM_REG'	=> 'Habilitar confirmación visual para registraciones',
	'VISUAL_CONFIRM_REG_EXPLAIN'	=> 'Requiere que los nuevos usuarios ingresen un código al azar incluído en una imagen para prevenir registraciones masivos.',
	'ACP_COOKIE_SETTINGS_EXPLAIN'	=> 'Estos detalles determinan los datos usados para enviar cookies a los navegadores de los usuarios. En la mayoría de los casos los valores por omisión para los parámetros de las cookies deberían ser suficiente. Si necesitás cambiar algo hacelo con cuidado, parámetros incorrectos impedirían que los usuarios puedan ingresar.',
	'COOKIE_DOMAIN'	=> 'Dominio de la cookie',
	'COOKIE_NAME'	=> 'Nombre de la cookie',
	'COOKIE_PATH'	=> 'Ruta de la cookie',
	'COOKIE_SECURE'	=> 'Cookie segura',
	'COOKIE_SECURE_EXPLAIN'	=> 'Si tu server emplea SSL habilitá esto, sino dejalo deshabilitado. Habilitar esto sin usar SSL provocará errores en el servidor.',
	'ONLINE_LENGTH'	=> 'Lapso de tiempo para verse conectado',
	'ONLINE_LENGTH_EXPLAIN'	=> 'Número de minutos después de lo cual los usuarios inactivos no aparecerán en la lista “Quién está online”. Un valor mayor requiere más procesamiento para generar la lista.',
	'SESSION_LENGTH'	=> 'Duración de la sesión',
	'SESSION_LENGTH_EXPLAIN'	=> 'Las sesiones expiran transcurrido este tiempo, en segundos.',
	'ACP_LOAD_SETTINGS_EXPLAIN'	=> 'Acá podes habilitar y deshabilitar ciertas funciones del Sitio para reducir la cantidad de procesamiento requerido. En la mayoría de los servidores no hay necesidad de deshabilitar ninguna funcion. Sin embargo en ciertos sistemas o entornos compartidos puede ser beneficioso deshabilitar capacidades que no necesites realmente. Podés tambien especificar límites para la carga de sistema y sesiones activas superadas las cuales el Sitio se pondrá fuera de línea.',
	'CUSTOM_PROFILE_FIELDS'	=> 'Campos de perfil personalizados',
	'LIMIT_LOAD'	=> 'Límite de carga de sistema',
	'LIMIT_LOAD_EXPLAIN'	=> 'Si el promedio de carga del sistema por minuto excede este valor el Sitio automáticamente se pondrá fuera de línea. Un valor de 1.0 equivale ~100% de utilización de un procesadr. Esto solo funciona en servidores UNIX.',
	'LIMIT_SESSIONS'	=> 'Límite de sesiones',
	'LIMIT_SESSIONS_EXPLAIN'	=> 'Si el número de sesiones excede este valor en el período de un minuto el Sitio automáticamente se pondrá fuera de línea. Poné este valor en 0 para ilimitadas sesiones.',
	'LOAD_CPF_MEMBERLIST'	=> 'Permitir estilos para mostrar campos de perfil personalizados en la lista de miembros',
	'LOAD_CPF_VIEWPROFILE'	=> 'Mostrar campos de perfil personalizados en perfiles de usuario',
	'LOAD_CPF_VIEWTOPIC'	=> 'Mostrar campos de perfil personalizados al ver topics',
	'LOAD_USER_ACTIVITY'	=> 'Mostrar actividad del usuario',
	'LOAD_USER_ACTIVITY_EXPLAIN'	=> 'Mostrar actividad en topics/foros en prfil de usuario y panel de control de usuario. Se recomienda deshabilitar esto en sitios con más de un millón de posts.',
	'RECOMPILE_TEMPLATES'	=> 'Recompilar plantillas antiguas',
	'RECOMPILE_TEMPLATES_EXPLAIN'	=> 'Busca plantillas actualizadas y las reconstruye.',
	'RECOMPILE_STYLES'	=> 'Recompilar plantillas antiguas',
	'RECOMPILE_STYLES_EXPLAIN'	=> 'Busca plantillas actualizadas y las reconstruye.',
	'YES_ANON_READ_MARKING'	=> 'Habilitar marcado de topics para invitados',
	'YES_ANON_READ_MARKING_EXPLAIN'	=> 'Guarda información de leído/no leido para invitados. Si se deshabilita los posts siempre se muestran como leídos a los invitados.',
	'YES_BIRTHDAYS'	=> 'Habilitar lista de cumpleaños',
	'YES_JUMPBOX'	=> 'Habilita mostrar jumpbox',
	'YES_MODERATORS'	=> 'Habilita mostrar moderadores',
	'YES_ONLINE'	=> 'Habilita listado de usuarios conectados',
	'YES_ONLINE_EXPLAIN'	=> 'Muestra una lista de usuarios conectados en inicio, foros y topic.',
	'YES_ONLINE_GUESTS'	=> 'Habilita listado de invitados online en ver online',
	'YES_ONLINE_GUESTS_EXPLAIN'	=> 'Permite mostrar usuarios invitados en Ver Conectados.',
	'YES_ONLINE_TRACK'	=> 'Habilita mostrar información de usuariosconectado/desconectad',
	'YES_ONLINE_TRACK_EXPLAIN'	=> 'Muestra información de usuari oconectado en perfiles y ver topic.',
	'YES_POST_MARKING'	=> 'Habilitar marcado de topics',
	'YES_POST_MARKING_EXPLAIN'	=> 'Indica si un usuario ha posteado en un topic.',
	'YES_READ_MARKING'	=> 'Habilitar marcado de topics en el servidor',
	'YES_READ_MARKING_EXPLAIN'	=> 'Guarda información de leído/no leido en la base de datos en vez de una cookie.',
	'ACP_AUTH_SETTINGS_EXPLAIN'	=> 'phpBB soporta plugins de autentificación. o módulos. Esto te permite determinar como se identifica a los usuarios cuando ingresan al Sitio. Por omisión se proveen tres plugins; DB, LDAP y Apache. No todos los métodos requieren información adicional asi que llená solamente los campos que sean relevantes para el método elegido.',
	'AUTH_METHOD'	=> 'Seleccioná un método de autentificación',
	'APACHE_SETUP_BEFORE_USE'	=> 'Tenés que configurar la autentificación de Apache antes de cambiar a este método. Tené en cuenta que el nombre de usuario que empleás para autentificación de Apache tiene que ser el mismo que usás en phpBB.',
	'LDAP_DN'	=> 'LDAP base <var>dn</var>',
	'LDAP_DN_EXPLAIN'	=> 'Este es el Distinguished Name, que se usa para la localización de usuario, ej. <samp>o=My Company,c=US</samp>',
	'LDAP_EMAIL'	=> 'LDAP atributo email',
	'LDAP_EMAIL_EXPLAIN'	=> 'Configurá esto con el nombre del atributo de usuario de email entrante (si existe) en orden de configurar automaticamente la dirección de email para nuevos usuarios. Dejar esto vacío provoca una dirección de email vacía para usuarios que ingresan por primera vez.',
	'LDAP_INCORRECT_USER_PASSWORD'	=> 'La conexión con el servidor LDAP ha fallado con el usuario/clave especificados.',
	'LDAP_NO_EMAIL'	=> 'El artibuto de email especificado no existe.',
	'LDAP_NO_IDENTITY'	=> 'No puedo encontrar una identidad para %s',
	'LDAP_PASSWORD'	=> 'Clave LDAP',
	'LDAP_PASSWORD_EXPLAIN'	=> 'Dejá en blanco para acceso anónimo. Sinó completalo con la clave de usuario. <strong>ADVERTENCIA:</strong> Esta clave será guardada como texto plano en la base de datos, visible para cualquiera que tenga acceso a la misma.',
	'LDAP_SERVER'	=> 'Nombre de servidor LDAP',
	'LDAP_SERVER_EXPLAIN'	=> 'Si usás LDAP este es el nombre o dirección IP del servidor.',
	'LDAP_UID'	=> '<var>uid</var> LDAP ',
	'LDAP_UID_EXPLAIN'	=> 'Esta es la clave bajo la cual se busca una identidad, ej. <var>uid</var>, <var>sn</var>, etc.',
	'LDAP_USER'	=> 'Usuario LDAP',
	'LDAP_USER_EXPLAIN'	=> 'Dejá en blanco para acceso anónimo. Si lo completás phpBB conectará con el servidor LDAP como el usuario especificado.',
	'ACP_SERVER_SETTINGS_EXPLAIN'	=> 'Acá podés definir parámetros relativos a dominio y servidor. Por favor verificá que los datos que ingresas sean exactos, errores resultarán en emails con información incorrecta. Cuando configures el dominio recordá poner http:// u otro protocolo. Solamente cambiá el número de puerto si sabés que tu servidor emplea uno diferente, puerto 80 está bien para la mayoría de los casos.',
	'ENABLE_GZIP'	=> 'Habilitar compresión Gzip',
	'FORCE_SERVER_VARS'	=> 'Forzar parámetro URL',
	'FORCE_SERVER_VARS_EXPLAIN'	=> 'Si configurás SI el parámetro definido acá será empleado en lugar del valor determinado automáticamente',
	'ICONS_PATH'	=> 'Ruta de guardado de íconos de post',
	'ICONS_PATH_EXPLAIN'	=> 'Ruta en tu directorio raiz, ej. <samp>images/icons</samp>',
	'PATH_SETTINGS'	=> 'Parámetros de ruta',
	'RANKS_PATH'	=> 'Ruta de guardado de imágenes de rango',
	'RANKS_PATH_EXPLAIN'	=> 'Ruta en tu directorio raiz, ej. <samp>images/ranks</samp>',
	'SCRIPT_PATH'	=> 'Ruta de phpBB',
	'SCRIPT_PATH_EXPLAIN'	=> 'Ruta donde está ubicado phpBB relativa al nombre de dominio, ej. <samp>/phpBB3</samp>',
	'SERVER_NAME'	=> 'Nombre de dominio',
	'SERVER_NAME_EXPLAIN'	=> 'El nombre del dominio de este Sitio (por ejemplo: <samp>www.foo.bar</samp>)',
	'SERVER_PORT'	=> 'Puerto del servidor',
	'SERVER_PORT_EXPLAIN'	=> 'El puerto que utiliza tu servidor, usualmente 80, cambialo solamente si es diferente',
	'SERVER_PROTOCOL'	=> 'Protocolo del servidor',
	'SERVER_PROTOCOL_EXPLAIN'	=> 'Se usa como protocolo del servidor si se fuerzan los parámetros. Caso contrario el protocolo es determinado por los parámetros de cookie (<samp>http://</samp> o <samp>https://</samp>)',
	'SERVER_URL_SETTINGS'	=> 'Parámetros de URL',
	'SMILIES_PATH'	=> 'Ruta de guardado de caritas',
	'SMILIES_PATH_EXPLAIN'	=> 'Ruta en tu directorio raiz, ej. <samp>images/smilies</samp>',
	'UPLOAD_ICONS_PATH'	=> 'Ruta de guardado de íconos de extensiones',
	'UPLOAD_ICONS_PATH_EXPLAIN'	=> 'Ruta en tu directorio raiz, ej. <samp>images/upload_icons</samp>',
	'ACP_SECURITY_SETTINGS_EXPLAIN'	=> 'Acá podés definir parámetros relativos a ingreso y sesiones',
	'ALL'	=> 'Todo',
	'ALLOW_AUTOLOGIN'	=> 'Permitir ingreso persistente',
	'ALLOW_AUTOLOGIN_EXPLAIN'	=> 'Determina si el usuario puede ingresar automáticamente cuando visita el Sitio.',
	'AUTOLOGIN_LENGTH'	=> 'Expiración del ingreso persistente (en dias)',
	'AUTOLOGIN_LENGTH_EXPLAIN'	=> 'Número de dias después del cual el usuario debera volver a ingresar su clave, 0 para deshabilitar.',
	'BROWSER_VALID'	=> 'Validar navegador',
	'BROWSER_VALID_EXPLAIN'	=> 'Habilita validación de navegador para cada sesión mejorando la seguridad.',
	'CHECK_DNSBL'	=> 'Verificar IP en las listas negras de DNS',
	'CHECK_DNSBL_EXPLAIN'	=> 'Si está habilitado la direccion IP de los usuarios es verificada en los siguiente servicios DNSBL (para registración y envío de post): <a href="http://spamcop.net">spamcop.net</a>, <a href="http://dsbl.org">dsbl.org</a> y <a href="http://spamhaus.org">spamhaus.org</a>. Esta búsqueda puede llevar un tiempo, dependiendo de la configuración del servidor. Si se enlentece demasiado o se reportan muchos falsos positivos se recomienda deshabilitar.',
	'CLASS_B'	=> 'A.B',
	'CLASS_C'	=> 'A.B.C',
	'EMAIL_CHECK_MX'	=> 'Verifica que el dominio del email tenga un registro MX válido',
	'EMAIL_CHECK_MX_EXPLAIN'	=> 'Si está habilitado, se verificará que el dominio del email provisto en la registración y perfil tengan un registro MX válido.',
	'FORCE_PASS_CHANGE'	=> 'Forzar cambio de clave',
	'FORCE_PASS_CHANGE_EXPLAIN'	=> 'Requiere que un usuario cambie su clave después de un número especifico de dias. Ajustá este valor a 0 para deshabilitar este comportamiento.',
	'FORWARDED_FOR_VALID'	=> 'Validar encabezado <var>X_FORWARDED_FOR</var>',
	'FORWARDED_FOR_VALID_EXPLAIN'	=> 'Las sesiones continuarán si el encabezado <var>X_FORWARDED_FOR</var> enviado coincide con el previo. También se verificarán las exclusiones con la IP enviada en <var>X_FORWARDED_FOR</var>.',
	'IP_VALID'	=> 'Validación de sesión por IP',
	'IP_VALID_EXPLAIN'	=> 'Determina que porción de la IP del usuario se emplea para validar la sesión; <samp>Todo</samp> Compara la dirección completa, <samp>A.B.C</samp> los primeros x.x.x, <samp>A.B</samp> los primeros x.x, <samp>Ninguna</samp> deshabilita la verificación.',
	'MAX_LOGIN_ATTEMPTS'	=> 'Máximo de intentos de ingreso',
	'MAX_LOGIN_ATTEMPTS_EXPLAIN'	=> 'Después de este número de intentos fallidos el usuario tiene que confirmar su ingreso visualmente (confirmacion visual)',
	'NO_IP_VALIDATION'	=> 'Ninguna',
	'PASSWORD_TYPE'	=> 'Complejidad de la clave',
	'PASSWORD_TYPE_EXPLAIN'	=> 'Determina la complejidad necesaria para una clave, las opciones siguientes incluyen las precedentes.',
	'PASS_TYPE_ALPHA'	=> 'Debe contener alfanuméricos',
	'PASS_TYPE_ANY'	=> 'Ningun requerimiento',
	'PASS_TYPE_CASE'	=> 'Debe contener mayúsculas y minúsculas',
	'PASS_TYPE_SYMBOL'	=> 'Debe contener símbolos',
	'TPL_ALLOW_PHP'	=> 'Permitir php en plantillas',
	'TPL_ALLOW_PHP_EXPLAIN'	=> 'Si se habilita esta opción, <code>PHP</code> e <code>INCLUDEPHP</code> serán parseados en las plantillas.',
	'ACP_EMAIL_SETTINGS_EXPLAIN'	=> 'Esta información se usa cuando el Sitio envía emails a sus usuarios. Por favor verificá que la dirección de email ingresada sea válida, cualquier rebote se reenviará a esa dirección. Si tu host no provee un servicio de email nativo (utilizable por PHP) entonces usa directamente SMTP. Esto requiere la dirección de un servidor apropiado (preguntale a tu ISP de ser necesario). Si el servidor requiere autentificación (si, y sólo si) completá el usuario y clave. Por favor notá que solo se ofrece autentificación básica, otro tipo de implementación actualmente no es posible.',
	'ADMIN_EMAIL'	=> 'Dirección de email',
	'ADMIN_EMAIL_EXPLAIN'	=> 'Se usa como dirección de retorno de todos los emails, la dirección del contacto técnico. Siempre se usará como <samp>Return-Path</samp> y <samp>Sender</samp> en los emails.',
	'BOARD_EMAIL_FORM'	=> 'Usuarios envían email mediante el Sitio',
	'BOARD_EMAIL_FORM_EXPLAIN'	=> 'En lugar de mostrar su dirección de email, los usuarios pueden enviar emails via Sitio.',
	'BOARD_HIDE_EMAILS'	=> 'Ocultar direcciones de email',
	'BOARD_HIDE_EMAILS_EXPLAIN'	=> 'Mantiene las direcciones de email completamente privadas.',
	'CONTACT_EMAIL'	=> 'Email de contacto',
	'CONTACT_EMAIL_EXPLAIN'	=> 'Esta dirección se usará cuando se necesite específicamente un contacto, ej. spam, errores, etc. Siempre se usará como <samp>From</samp> y <samp>Reply-To</samp> en los emails.',
	'EMAIL_FUNCTION_NAME'	=> 'Nombre de la función email',
	'EMAIL_FUNCTION_NAME_EXPLAIN'	=> 'La función empleada por PHP para enviar emails.',
	'EMAIL_PACKAGE_SIZE'	=> 'Tamaño del paquete de email',
	'EMAIL_PACKAGE_SIZE_EXPLAIN'	=> 'Número de emails enviados por paquete.',
	'EMAIL_SIG'	=> 'Firma de email',
	'EMAIL_SIG_EXPLAIN'	=> 'Este texto se anexará a todos los emails que envíe el Sitio.',
	'ENABLE_EMAIL'	=> 'Habilitar envío de emails',
	'ENABLE_EMAIL_EXPLAIN'	=> 'Si se deshabilita el Sitio no enviará ningún tipo de email.',
	'SMTP_AUTH_METHOD'	=> 'Método de autentificacion para SMTP',
	'SMTP_AUTH_METHOD_EXPLAIN'	=> 'Sólo usado si se configura usuario/clave, preguntale a tu ISP si no estás seguro de cual método usar.',
	'SMTP_CRAM_MD5'	=> 'CRAM-MD5',
	'SMTP_DIGEST_MD5'	=> 'DIGEST-MD5',
	'SMTP_LOGIN'	=> 'LOGIN',
	'SMTP_PASSWORD'	=> 'Clave SMTP',
	'SMTP_PASSWORD_EXPLAIN'	=> 'Sólo ingresá una clave si tu servidor SMTP lo requiere.',
	'SMTP_PLAIN'	=> 'PLAIN',
	'SMTP_POP_BEFORE_SMTP'	=> 'POP-BEFORE-SMTP',
	'SMTP_PORT'	=> 'Puerto servidor SMTP',
	'SMTP_PORT_EXPLAIN'	=> 'Solamente cambialo si sabés que tu servidor SMTP está en un puerto diferente.',
	'SMTP_SERVER'	=> 'Dirección servidor SMTP',
	'SMTP_SETTINGS'	=> 'Parámetros SMTP',
	'SMTP_USERNAME'	=> 'Usuario SMTP',
	'SMTP_USERNAME_EXPLAIN'	=> 'Sólo ingresá un usuario si tu servidor SMTP lo requiere.',
	'USE_SMTP'	=> 'Usar servidor SMTP para email',
	'USE_SMTP_EXPLAIN'	=> 'Elegí “Si” si querés o necesitás enviar emails mediante un servidor específico en lugar de la función de email local.',
	'ACP_JABBER_SETTINGS_EXPLAIN'	=> 'Acá podés habilitar y controlar el uso de Jabber para mensajeria instantánea y avisos del Sitio. Jabber es un protocolo de código abierto y por lo tanto disponible para que lo use cualquiera. Algunos servidores Jabber te permiten contactar usuarios en otras redes. No todos los servidores ofrecen todos los transportes y cambios en el protocolo pueden causar que algunos transportes dejen de funcionar. Por favor asegurate de ingresar una cuenta ya registrada, phpBB utilizará estos datos tal cual!',
//	'ERR_JAB_AUTH'	=> 'No puedo autenticarme en el servidor Jabber.',
//	'ERR_JAB_CONNECT'	=> 'No puedo conectarme al servidor Jabber.',
//	'ERR_JAB_PASSCHG'	=> 'No puedo cambiar la clave.',
//	'ERR_JAB_PASSFAIL'	=> 'Falló la actualización de clave, %s.',
//	'ERR_JAB_REGISTER'	=> 'Ha ocurrido un error tratando de registrar esta cuenta, %s.',
//	'ERR_JAB_USERNAME'	=> 'El usuario especificado ya existe, por favor elegí uno alternativo.',
//	'JAB_CHANGED'	=> 'Cuenta Jabber cambiada exitosamente.',
	'JAB_ENABLE'	=> 'Habilitar Jabber',
	'JAB_ENABLE_EXPLAIN'	=> 'Habilita el uso de mensajeria y notificaciones Jabber',
	'JAB_PACKAGE_SIZE'	=> 'Tamaño del paquete Jabber',
	'JAB_PACKAGE_SIZE_EXPLAIN'	=> 'Este es el número de mensajes enviados en un paquete. Si es 0 el mensaje se envía inmediatamente y no será encolado para envio posterior.',
	'JAB_PASSWORD'	=> 'Clave Jabber',
//	'JAB_PASS_CHANGED'	=> 'Clave Jabber cambiada exitosamente.',
	'JAB_PORT'	=> 'Puerto Jabber',
	'JAB_PORT_EXPLAIN'	=> 'Dejá en blanco a menos que sepas que no es el puerto 5222',
//	'JAB_REGISTERED'	=> 'Nueva cuenta registrada exitosamente.',
//	'JAB_RESOURCE'	=> 'Recurso Jabber',
//	'JAB_RESOURCE_EXPLAIN'	=> 'Situá esta conexión en particular, ej. Sitio, Hogar, etc.',
	'JAB_SERVER'	=> 'Servidor Jabber',
	'JAB_SERVER_EXPLAIN'	=> 'Navegá %sjabber.org%s para una lista de servidores',
	'JAB_SETTINGS_CHANGED'	=> 'Parámetros Jabber cambiados exitosamente.',
	'JAB_USERNAME'	=> 'Usuario Jabber',
	'JAB_USERNAME_EXPLAIN'	=> 'Especificá un usuario registrado.',
	'CAPTCHA_GD_FOREGROUND_NOISE'	=> 'Ruido de fondo GD CAPTCHA',
	'CAPTCHA_GD_FOREGROUND_NOISE_EXPLAIN'	=> 'Usar ruido de fondo para hacer el CAPTCHA basado en GD más difícil.',
	'CAPTCHA_GD_X_GRID'	=> 'Ruido de fondo GD CAPTCHA x-axis',
	'CAPTCHA_GD_X_GRID_EXPLAIN'	=> 'Usá valores bajos para aumentar la dificultad. 0 deshabilita ruido de fondo x-axis.',
	'CAPTCHA_GD_Y_GRID'	=> 'Ruido de fondo GD CAPTCHA y-axis',
	'CAPTCHA_GD_Y_GRID_EXPLAIN'	=> 'Usá valores bajos para aumentar la dificultad. 0 deshabilitá ruido de fondo y-axis.',
	'CAPTCHA_PREVIEW_MSG'	=> 'Los cambios de confirmación visual no fueron guardados. Es sólo una vista previa.',
	'CAPTCHA_PREVIEW_EXPLAIN'	=> 'CAPTCHA se verá así usando los parámtros actuales. Usá el botón de vista previa para refrescar. Notá que los captchas son aleatorios y difieren de una vista a otra.',
	'ENABLE_GZIP_EXPLAIN'	=> 'El contenido generado será comprimido antes de enviarse al usuario. Esto puede reducir el tráfico de red pero incrementa el uso de CPU tanto en el servidor como del lado del usuario.',
	'ALLOW_FLASH_PM_EXPLAIN'	=> 'Notá que la posibilidad de usar flash en los mensajes privados, si está habilitada acá, también depende de los permisos.',
	'ALLOW_POST_FLASH'		=> 'Permitir el uso de código BBCode <code>[FLASH]</code> en los posts. ',
	'ALLOW_POST_FLASH_EXPLAIN'	=> 'Deshabilita el uso de código BBCode <code>[FLASH]</code> en los posts. De otro modo el sistema de permisos controlará que usuarios pueden usar <code>[FLASH]</code>.',
	'JAB_USE_SSL'			=> 'Usar SSL para conectar',
	'JAB_USE_SSL_EXPLAIN'		=> 'Si está habilitado se intentará establecer una conexión segura. El puerto Jabber será modificado a 5223.',
	'ALLOW_BIRTHDAYS'			=> 'Permitir cumpleaños',
 	'ALLOW_BIRTHDAYS_EXPLAIN'	=> 'Permitir que los cumpleaños sean ingresados y la edad se muestre en perfiles. Por favor notá que la lista de cumpleaños en el Inicio de el Sitio se controla desde una sección separada.',
	'YES_BIRTHDAYS_EXPLAIN'			=> 'Si lo deshabilitás la lista de cumpleaños no se mostrará. Para que este parámetro tenga efecto los cumpleaños tienen que estar habilitados también.',
	'FORM_TIME_MAX'               => 'Lapso máximo para el envío de formularios',
	'FORM_TIME_MAX_EXPLAIN'         => 'El tiempo que tiene un usuario para enviar un formulario. Usá -1 para deshabilitar. Notá que un formulario puede quedar invlidado si la sesión expira, sin tener en cuanta esta parámetro.',
//	'FORM_TIME_MIN'               => 'Lapso mínimo para el envío de formularios',
//	'FORM_TIME_MIN_EXPLAIN'         => 'Envíos más rápidos que este período de tiempo serán ignorados por el Sitio. Usá 0 para deshabilitar.',
	'JAB_GTALK_NOTE'         => 'Por favor notá que GTalk no funcionará si no se puede encontrar la función <samp>dns_get_record</samp>. Esta función no está disponible en PHP4, y no está implementada en plataformas Windows. Actualmente no funciona en sistemas basados en BSD, incluyendo Mac OS.',
//	'MIN_TIME_REG'            => 'Lapso mínimo para la registración',
//	'MIN_TIME_REG_EXPLAIN'      => 'El formulario de registración no puede ser enviando antes de transcurrido este período.',
//	'MIN_TIME_TERMS'         => 'Lapso mínimo para acerptar términos',
//	'MIN_TIME_TERMS_EXPLAIN'   => 'La página de términos no puede ser salteada antes de transcurrido este período.',
        'FORM_SID_GUESTS'            => 'Tie forms para sesiones de invitados',
	'FORM_SID_GUESTS_EXPLAIN'      => 'Si se habilita, el form token implementado para invitados será excluyente para cada sesión. Esto puede causar problemas con algunos Proveedores de Servicios de Internet.',
	'LDAP_USER_FILTER'		=> 'Filtro de usuario LDAP',
	'LDAP_USER_FILTER_EXPLAIN'	=> 'Opcionalmente más adelante podés limitar los objetos buscados con filtros adicionales. Por ejemplo <samp>objectClass=posixGroup</samp> podria resultar en el caso de <samp>(&amp;(uid=$username)(objectClass=posixGroup))</samp>',
	'LDAP_PORT'			=> 'Puerto del servidor LDAP',
	'LDAP_PORT_EXPLAIN'		=> 'Opcionalmente podés especificar un puerto que podria ser usado para conectar al servidor LDAP en lugar del puerto por defecto 389.',
	'NO_REF_VALIDATION'            => 'Ninguna',
	'REF_HOST'                  => 'Validar solamente al servidor',
        'REF_PATH'                  => 'También validar ruta',
        'REFERER_VALID'               => 'Validar referencia',
        'REFERER_VALID_EXPLAIN'         => 'Si está habilitada, la referencia de solicitudes POST será verificada contra los parámetros de ruta servidor/script. Esto podría causar problemas con Sitios que tengan varios dominios y/o registros externos.',
));
?>