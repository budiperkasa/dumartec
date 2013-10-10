<?php
/** 
*
* mcp [Galician]
*
* @package language
* @version $Id: mcp.php 8940 2008-09-26 11:25:04Z toonarmy $
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
	'ACTION'				=> '',
	'ACTION_NOTE'			=> 'Acción/Nota',
	'ADD_FEEDBACK'			=> 'Engadir feedback',
	'ADD_FEEDBACK_EXPLAIN'	=> 'Se queres engadir un informe sobre isto, cubre o seguinte formulario. Emprega só texto plano; non se permite HTML, BBCode, etc.',
	'ADD_WARNING'			=> 'Engadir advertencia',
	'ADD_WARNING_EXPLAIN'	=> 'Para enviar unha advertencia a este usuario cubre o seguinte formulario. Emprega só texto plano; non se permite HTML, BBCode, etc.',
	'ALL_ENTRIES'			=> 'Todas as entradas',
	'ALL_NOTES_DELETED'		=> 'Elimináronse correctamente todas as notas de usuario',
	'ALL_REPORTS'			=> 'Todos os informes',
	'ALREADY_REPORTED'		=> 'Xa se ten informado desta mensaxe',
	'ALREADY_WARNED'		=> 'Xa se emitiu un aviso relativo a esta mensaxe',
	'APPROVE'				=> 'Aprobar',
	'APPROVE_POST'			=> 'Aprobar mensaxe',
	'APPROVE_POST_CONFIRM'	=> 'Seguro que queres aprobar esta mensaxe?',
	'APPROVE_POSTS'			=> 'Aprobar mensaxes',
	'APPROVE_POSTS_CONFIRM'	=> 'Seguro que queres aprobar as mensaxes seleccionadas?',

	'CANNOT_MOVE_SAME_FORUM'=> 'Non podes mover un tema ao foro no que xa está',
	'CANNOT_WARN_ANONYMOUS'	=> 'Non podes advertir a un usuario convidado',
	'CANNOT_WARN_SELF'		=> 'Non podes advertirte a ti mesmo',
	'CAN_LEAVE_BLANK'		=> 'Podes deixar isto en branco.',
	'CHANGE_POSTER'			=> 'Mudar autor',
	'CLOSE_REPORT'			=> 'Pechar informe',
	'CLOSE_REPORT_CONFIRM'	=> 'Seguro que queres pechar o informe seleccionado?',
	'CLOSE_REPORTS'			=> 'Pechar informes',
	'CLOSE_REPORTS_CONFIRM'	=> 'Seguro que queres pechar os informes seleccionados?',

	'DELETE_POSTS'				=> 'Eliminar mensaxes',
	'DELETE_POSTS_CONFIRM'		=> 'Seguro que queres eliminar estas mensaxes?',
	'DELETE_POST_CONFIRM'		=> 'Seguro que queres eliminar esta mensaxe?',
	'DELETE_REPORT'				=> 'Eliminar informe',
	'DELETE_REPORT_CONFIRM'		=> 'Seguro que queres eliminar o informe seleccionado?',
	'DELETE_REPORTS'			=> 'Eliminar informes',
	'DELETE_REPORTS_CONFIRM'	=> 'Seguro que queres eliminar os informes seleccionados?',
	'DELETE_SHADOW_TOPIC'		=> 'Eliminar tema sombreado',
	'DELETE_TOPICS'				=> 'Eliminar os temas seleccionados',
	'DELETE_TOPICS_CONFIRM'		=> 'Seguro que queres eliminar estes temas?',
	'DELETE_TOPIC_CONFIRM'		=> 'Seguro que queres eliminar este tema?',
	'DISAPPROVE'				=> 'Rexeitar',
	'DISAPPROVE_REASON'			=> 'Motivo do rexeitamento',
	'DISAPPROVE_POST'			=> 'Rexeitar mensaxe ',
	'DISAPPROVE_POST_CONFIRM'	=> 'Seguro que queres rexeitar esta mensaxe?',
	'DISAPPROVE_POSTS'			=> 'Rexeitar mensaxes ',
	'DISAPPROVE_POSTS_CONFIRM'	=> 'Seguro que queres rexeitar as mensaxes seleccionadas?',
	'DISPLAY_LOG'				=> 'Visualizar entradas dende as previas',
	'DISPLAY_OPTIONS'			=> 'Opcións de visualización',

	'EMPTY_REPORT'					=> 'Debes inserir unha descrición cando selecciones este motivo',
	'EMPTY_TOPICS_REMOVED_WARNING'	=> 'Ten en conta que un ou varios temas foron eliminados do banco de datos porque estaban ou quedaron baleiros',

	'FEEDBACK'				=> 'Feedback',
	'FORK'					=> 'Dividir',
	'FORK_TOPIC'			=> 'Dividir Tema',
	'FORK_TOPIC_CONFIRM'	=> 'Seguro que queres copiar este tema?',
	'FORK_TOPICS'			=> 'Dividir os temas seleccionados',
	'FORK_TOPICS_CONFIRM'	=> 'Seguro que queres copiar os temas seleccionados?',
	'FORUM_DESC'			=> 'Descrición',
	'FORUM_NAME'			=> 'Nome do foro',
	'FORUM_NOT_EXIST'		=> 'O foro seleccionado non existe',
	'FORUM_NOT_POSTABLE'	=> 'Non se poden publicar mensaxes no foro seleccionado',
	'FORUM_STATUS'			=> 'Estado do foro',
	'FORUM_STYLE'			=> 'Estilo do foro',

	'GLOBAL_ANNOUNCEMENT'	=> 'Anuncio Global',

	'IP_INFO'				=> 'Información da IP',
	'IPS_POSTED_FROM'		=> 'Enderezos IP dende os que publicou este usuario',

	'LATEST_LOGS'				=> 'Últimas 5 accións rexistradas',
	'LATEST_REPORTED'			=> 'Últimos 5 informes',
	'LATEST_UNAPPROVED'			=> 'Últimas 5 mensaxes que agardan por aprobación',
	'LATEST_WARNING_TIME'		=> 'Últimas advertencias efectuadas',
	'LATEST_WARNINGS'			=> 'Últimas 5 advertencias',
	'LEAVE_SHADOW'				=> 'Deixar o tema sombreado no seu sitio',
	'LIST_REPORT'				=> '1 informe',
	'LIST_REPORTS'				=> '%d informes',
	'LOCK'						=> 'Bloquear',
	'LOCK_POST_POST'			=> 'Bloquear mensaxe',
	'LOCK_POST_POST_CONFIRM'	=> 'Seguro que queres bloquear as edicións desta mensaxe?',
	'LOCK_POST_POSTS'			=> 'Bloquear as mensaxes seleccionadas',
	'LOCK_POST_POSTS_CONFIRM'	=> 'Seguro que queres bloquear as edicións das mensaxes seleccionadas?',
	'LOCK_TOPIC_CONFIRM'		=> 'Seguro que queres bloquear este tema?',
	'LOCK_TOPICS'				=> 'Bloquear os temas seleccionados',
	'LOCK_TOPICS_CONFIRM'		=> 'Seguro que queres bloquear todos os temas seleccionados?',
	'LOGS_CURRENT_TOPIC'		=> 'Visualizando actualmente os rexistros de:',
	'LOGIN_EXPLAIN_MCP'			=> 'Para moderar este foro debes iniciar unha sesión.',
	'LOGVIEW_VIEWTOPIC'			=> 'Ver tema',
	'LOGVIEW_VIEWLOGS'			=> 'Ver rexistro do tema',
	'LOGVIEW_VIEWFORUM'			=> 'Ver foro',
	'LOOKUP_ALL'				=> 'Procurar todos os IPs',
	'LOOKUP_IP'					=> 'Procurar IP',

	'MARKED_NOTES_DELETED'		=> 'Elimináronse correctamente todas as notas de usuario marcadas',

	'MCP_ADD'						=> 'Engadir unha advertencia',

	'MCP_BAN'					=> 'Prohibicións',
	'MCP_BAN_EMAILS'			=> 'Excluir correos-e',
	'MCP_BAN_IPS'				=> 'Excluir IPs',
	'MCP_BAN_USERNAMES'			=> 'Excluir Nomes de Usuario',

	'MCP_LOGS'						=> 'Rexistros de moderador',
	'MCP_LOGS_FRONT'				=> 'Portada',
	'MCP_LOGS_FORUM_VIEW'			=> 'Rexistros (logs) de foro',
	'MCP_LOGS_TOPIC_VIEW'			=> 'Rexistros de tema',

	'MCP_MAIN'						=> 'Principal',
	'MCP_MAIN_FORUM_VIEW'			=> 'Ver foro',
	'MCP_MAIN_FRONT'				=> 'Portada',
	'MCP_MAIN_POST_DETAILS'			=> 'Detalles da mensaxe ',
	'MCP_MAIN_TOPIC_VIEW'			=> 'Ver tema',
	'MCP_MAKE_ANNOUNCEMENT'			=> 'Crear un Anuncio',
	'MCP_MAKE_ANNOUNCEMENT_CONFIRM'	=> 'Seguro que queres mudar este tema a un Anuncio?',
	'MCP_MAKE_ANNOUNCEMENTS'		=> 'Crear Anuncios',
	'MCP_MAKE_ANNOUNCEMENTS_CONFIRM'=> 'Estás seguro de que queres converter os temas seleccionados en Anuncios?',
	'MCP_MAKE_GLOBAL'				=> 'Crear Anuncio Global',
	'MCP_MAKE_GLOBAL_CONFIRM'		=> 'Estás seguro de que queres converter este tema nun Anuncio Global?',
	'MCP_MAKE_GLOBALS'				=> 'Crear Anuncios Globais',
	'MCP_MAKE_GLOBALS_CONFIRM'		=> 'Estás seguro de que queres converter os temas seleccionados en Anuncios Globais?',
	'MCP_MAKE_STICKY'				=> 'Crear Destacado',
	'MCP_MAKE_STICKY_CONFIRM'		=> 'Estás seguro de que queres converter este tema nun Destacado?',
	'MCP_MAKE_STICKIES'				=> 'Crear Destacados',
	'MCP_MAKE_STICKIES_CONFIRM'		=> 'Estás seguro de que queres converter os temas seleccionados en Destacados?',
	'MCP_MAKE_NORMAL'				=> 'Crear Tema Normal',
	'MCP_MAKE_NORMAL_CONFIRM'		=> 'Estás seguro de que queres converter este tema nun Tema Normal?',
	'MCP_MAKE_NORMALS'				=> 'Crear Temas Normais',
	'MCP_MAKE_NORMALS_CONFIRM'		=> 'Estás seguro de que queres converter os temas seleccionados en Temas Normais?',

	'MCP_NOTES'						=> 'Notas de usuario',
	'MCP_NOTES_FRONT'				=> 'Portada',
	'MCP_NOTES_USER'				=> 'Detalles do usuario',

	'MCP_POST_REPORTS'				=> 'Informes emitidos verbo desta mensaxe',

	'MCP_REPORTS'					=> 'Mensaxes publicadas con informes',
	'MCP_REPORT_DETAILS'			=> 'Detalles do informe',
	'MCP_REPORTS_CLOSED'			=> 'Informes pechados',
	'MCP_REPORTS_CLOSED_EXPLAIN'	=> 'Isto é un listado de todos os informes sobor mensaxes que xa foron resoltos',
	'MCP_REPORTS_OPEN'				=> 'Informes abertos',
	'MCP_REPORTS_OPEN_EXPLAIN'		=> 'Isto é un listado de todos os informes que están pendentes de resolución',

	'MCP_QUEUE'								=> 'Cola de moderación',
	'MCP_QUEUE_APPROVE_DETAILS'				=> 'Aprobar pormenores',
	'MCP_QUEUE_UNAPPROVED_POSTS'			=> 'Mensaxes agardando por aprobación',
	'MCP_QUEUE_UNAPPROVED_POSTS_EXPLAIN'	=> 'Esta é unha lista de todas as mensaxes que precisan de aprobación denantes de ser visíbeis para os usuarios.',
	'MCP_QUEUE_UNAPPROVED_TOPICS'			=> 'Temas agardando por aprobación',
	'MCP_QUEUE_UNAPPROVED_TOPICS_EXPLAIN'	=> 'Isto é un listado de todos os temas que requiren de aprobación denantes de seren visibeis para os usuarios',

	'MCP_VIEW_USER'			=> 'Visualizar advertencias a un usuario determinado',

	'MCP_WARN'				=> 'Advertencias',
	'MCP_WARN_FRONT'		=> 'Portada',
	'MCP_WARN_LIST'			=> 'Listar advertencias',
	'MCP_WARN_POST'			=> 'Advertir sobor dunha mensaxe publicada determinada',
	'MCP_WARN_USER'			=> 'Advertir usuario',

	'MERGE_POSTS'			=> 'Acoplar mensaxes',
	'MERGE_POSTS_CONFIRM'	=> 'Seguro que queres acoplar as mensaxes seleccionadas?',
	'MERGE_TOPIC_EXPLAIN'	=> 'Mediante o seguinte formulario poderás acoplar as mensaxes seleccionadas noutro tema. Estas mensaxes non se reordenarán e aparecerán como se os usuarios as tivesen publicado no novo tema.<br />Selecciona o id do tema de destino ou preme no botón "Seleccionar" para facer unha procura.',
	'MERGE_TOPIC_ID'		=> 'Id do tema de destino',
	'MERGE_TOPICS'			=> 'Mesturar temas',
	'MERGE_TOPICS_CONFIRM'	=> 'Estás certo de querer mesturar os temas seleccionados?',
	'MODERATE_FORUM'		=> 'Moderar foro',
	'MODERATE_TOPIC'		=> 'Moderar tema',
	'MODERATE_POST'			=> 'Moderar mensaxe publicada',
	'MOD_OPTIONS'			=> 'Opcións de moderador',
	'MORE_INFO'				=> 'Máis información',
	'MOST_WARNINGS'			=> 'Usuarios con máis advertencias',
	'MOVE_TOPIC_CONFIRM'	=> 'Seguro que queres mover o tema a un novo foro?',
	'MOVE_TOPICS'			=> 'Mover os temas seleccionados',
	'MOVE_TOPICS_CONFIRM'	=> 'Seguro que queres mover os temas seleccionados a un novo foro?',

	'NOTIFY_POSTER_APPROVAL'		=> 'Notificar aprobación ao remitente?',
	'NOTIFY_POSTER_DISAPPROVAL'		=> 'Notificar rexeitamento ao remitente?',
	'NOTIFY_USER_WARN'				=> 'Notificar ao usuario verbo da advertencia?',
	'NOT_MODERATOR'					=> 'Non es moderador deste foro',
	'NO_DESTINATION_FORUM'			=> 'Escolle un foro de destino',
	'NO_DESTINATION_FORUM_FOUND'	=> 'Non hai foro de destino dispoñíbel',
	'NO_ENTRIES'					=> 'Non hai entradas no rexistro (log) para este período',
	'NO_FEEDBACK'					=> 'Non hai comentarios para este usuario',
	'NO_FINAL_TOPIC_SELECTED'		=> 'Debes seleccionar un tema de destino para acoplar mensaxes',
	'NO_MATCHES_FOUND'				=> 'Non se atoparon coincidencias',
	'NO_POST'						=> 'Debes seleccionar primeiro unha mensaxe para poder advertir a un usuario sobor da mesma',
	'NO_POST_REPORT'				=> 'Non se fixo informe ningún desta mensaxe.',
	'NO_POST_SELECTED'				=> 'Debes seleccionar unha mensaxe como mínimo para levar a cabo esta acción',
	'NO_REASON_DISAPPROVAL'			=> 'Por favor, proporciona un motivo axeitado para o rexeitamento',
	'NO_REPORT'						=> 'Non se atopou informe ningún',
	'NO_REPORTS'					=> 'Non hai informe ningún',	
	'NO_REPORT_SELECTED'			=> 'Debes seleccionar polo menos un informe para levar a cabo esta acción.',
	'NO_TOPIC_ICON'					=> 'Ningún',
	'NO_TOPIC_SELECTED'				=> 'Debes seleccionar un tema como mínimo para levar a cabo esta acción',
	'NO_TOPICS_QUEUE'				=> 'Non hai temas',

	'ONLY_TOPIC'			=> 'Só o tema "%s"',
	'OTHER_USERS'			=> 'Usuarios que envían mensaxes dende este enderezo IP',

	'POSTER'					=> 'Remitente',
	'POSTS_APPROVED_SUCCESS'	=> 'As mensaxes seleccionadas foron aprobadas',
	'POSTS_DELETED_SUCCESS'		=> 'As mensaxes seleccionadas foron eliminadas da base de datos correctamente',
	'POSTS_DISAPPROVED_SUCCESS'	=> 'As mensaxes seleccionadas foron rexeitadas',
	'POSTS_LOCKED_SUCCESS'		=> 'As mensaxes seleccionadas foron bloqueadas correctamente',
	'POSTS_MERGED_SUCCESS'		=> 'As mensaxes seleccionadas foron acopladas',
	'POSTS_UNLOCKED_SUCCESS'	=> 'As mensaxes seleccionadas foron desbloqueadas correctamente',
	'POSTS_PER_PAGE'			=> 'Mensaxes publicadas por páxina',
	'POSTS_PER_PAGE_EXPLAIN'	=> '(Pon 0 para ver todas as mensaxes)',
	'POST_APPROVED_SUCCESS'		=> 'A mensaxe seleccionada foi aprobada',
	'POST_DELETED_SUCCESS'		=> 'A mensaxe seleccionada foi eliminada da base de datos correctamente',
	'POST_DISAPPROVED_SUCCESS'	=> 'A mensaxe seleccionada foi reprobada',
	'POST_LOCKED_SUCCESS'		=> 'Mensaxe bloqueada correctamente',
	'POST_NOT_EXIST'			=> 'A mensaxe publicada que solicitaches non existe',
	'POST_REPORTED_SUCCESS'		=> 'Informouse correctamente desta mensaxe ',
	'POST_UNLOCKED_SUCCESS'		=> 'Mensaxe publicada desbloqueada correctamente',

	'READ_USERNOTES'			=> 'Notas de usuario',
	'READ_WARNINGS'				=> 'Advertencias do usuario',
	'REPORTER'					=> 'Informante',
	'REPORTED'					=> 'Informado',
	'REPORTED_BY'				=> 'Informante',
	'REPORTED_ON_DATE'			=> 'prendido',
	'REPORTS_CLOSED_SUCCESS'	=> 'Os informes seleccionados foron pechados correctamente.',
	'REPORTS_DELETED_SUCCESS'	=> 'Os informes seleccionados foron eliminados correctamente.',
	'REPORTS_TOTAL'				=> 'En total hai <strong>%d</strong> informes para revisar',
	'REPORTS_ZERO_TOTAL'		=> 'Non hai informes para revisar',
	'REPORT_CLOSED'				=> 'Este informe foi pechado previamente.',
	'REPORT_CLOSED_SUCCESS'		=> 'O informe seleccionado foi pechado correctamente.',
	'REPORT_DELETED_SUCCESS'	=> 'O informe seleccionado foi eliminado correctamente.',
	'REPORT_DETAILS'			=> 'Detalles do informe',
	'REPORT_MESSAGE'			=> 'Informar desta mensaxe',
	'REPORT_MESSAGE_EXPLAIN'	=> 'Utiliza este formulario para informar da mensaxe seleccionada aos administradores dos foros. Os informes deben ser usados xeralmente só cando a mensaxe non respeta as normas dos foros.',
	'REPORT_NOTIFY'				=> 'Avisarme',
	'REPORT_NOTIFY_EXPLAIN'		=> 'Informate cando o teu informe trata de',
	'REPORT_POST_EXPLAIN'		=> 'Utiliza este formulario para informar aos moderadores e administradores sobre a mensaxe seleccionada . Só se debería informar se a mensaxe incumpre as regras do foro.',
	'REPORT_REASON'				=> 'Motivo do informe',
	'REPORT_TIME'				=> 'Hora do informe',
	'REPORT_TOTAL'				=> 'En total hai <strong>1</strong> informe que revisar',
	'RESYNC'					=> 'Resincronizar',
	'RETURN_MESSAGE'			=> '%sVolver á mensaxe%s',
	'RETURN_NEW_FORUM'			=> '%sVolver ao novo foro%s',
	'RETURN_NEW_TOPIC'			=> '%sVolver ao novo tema%s',
	'RETURN_POST'				=> '%sVolver á mensaxe%s',
	'RETURN_QUEUE'				=> '%sVolver á cola%s',
	'RETURN_REPORTS'			=> '%sVolver aos informes%s',
	'RETURN_TOPIC_SIMPLE'		=> '%sVolver ao tema%s',

	'SEARCH_POSTS_BY_USER'		=> 'Procurar mensaxes por',
	'SELECT_ACTION'				=> 'Seleccionar a acción desexada',
	'SELECT_FORUM_GLOBAL_ANNOUNCEMENT'	=> 'Por favor, selecciona o foro no que queres amosar este anuncio global.',
	'SELECT_FORUM_GLOBAL_ANNOUNCEMENTS'	=> 'Un ou máis dos temas seleccionados son anuncios globais. Por favor, selecciona o foro no que queres amosalos.',
	'SELECT_MERGE'						=> 'Selecciona para mesturar',
	'SELECT_TOPICS_FROM'		=> 'Seleccionar temas de',
	'SELECT_TOPIC'				=> 'Seleccionar tema',
	'SELECT_USER'				=> 'Seleccionar usuario',
	'SORT_ACTION'				=> 'Acción de rexistro',
	'SORT_DATE'					=> 'Data',
	'SORT_IP'					=> 'Enderezo IP',
	'SORT_WARNINGS'				=> 'Advertencias',
	'SPLIT_AFTER'				=> 'Separar dende a mensaxe seleccionada',
	'SPLIT_FORUM'				=> 'Foro para o novo tema',
	'SPLIT_POSTS'				=> 'Separar mensaxes seleccionadas',
	'SPLIT_SUBJECT'				=> 'Título para o novo tema',
	'SPLIT_TOPIC_ALL'			=> 'Separar tema dende mensaxes seleccionadas',
	'SPLIT_TOPIC_ALL_CONFIRM'	=> 'Estás seguro de querer separar este tema?',
	'SPLIT_TOPIC_BEYOND'		=> 'Separar tema pola mensaxe seleccionada',
	'SPLIT_TOPIC_BEYOND_CONFIRM'=> 'Seguro que queres separar este tema pola mensaxe seleccionada?',
	'SPLIT_TOPIC_EXPLAIN'		=> 'Utilizando o seguinte formulario podes dividir un tema en dous, ben seleccionado as mensaxes individualmente ou ben dividindo a partir dunha mensaxe seleccionada',

	'THIS_POST_IP'				=> 'IP para esta mensaxe',
	'TOPICS_APPROVED_SUCCESS'	=> 'Os temas seleccionados foron aprobados',
	'TOPICS_DELETED_SUCCESS'	=> 'Os temas seleccionados foron eliminados correctamente da base de datos',
	'TOPICS_DISAPPROVED_SUCCESS'=> 'Os temas seleccionados foron reprobados',
	'TOPICS_FORKED_SUCCESS'		=> 'Os temas seleccionados foron copiados correctamente',
	'TOPICS_LOCKED_SUCCESS'		=> 'Os temas seleccionados foron bloqueados',
	'TOPICS_MOVED_SUCCESS'		=> 'Os temas seleccionados foron movidos correctamente',
	'TOPICS_RESYNC_SUCCESS'		=> 'Os temas seleccionados foron resincronizados',
	'TOPICS_TYPE_CHANGED'		=> 'Os tipos de tema foron mudados correctamente.',
	'TOPICS_UNLOCKED_SUCCESS'	=> 'Os temas seleccionados foron desbloqueados',
	'TOPIC_APPROVED_SUCCESS'	=> 'Os temas seleccionados foron aprobados',
	'TOPIC_DELETED_SUCCESS'		=> 'Os temas seleccionados foron eliminados da base de datos correctamente',
	'TOPIC_DISAPPROVED_SUCCESS'	=> 'Os temas seleccionados foron reprobados',
	'TOPIC_FORKED_SUCCESS'		=> 'Os temas seleccionados foron copiados correctamente',
	'TOPIC_LOCKED_SUCCESS'		=> 'Os temas seleccionados foron pechados',
	'TOPIC_MOVED_SUCCESS'		=> 'Os temas seleccionados foron movidos correctamente',
	'TOPIC_NOT_EXIST'			=> 'O tema que seleccionaches non existe',
	'TOPIC_RESYNC_SUCCESS'		=> 'Os temas seleccionados foron resincronizados',
	'TOPIC_SPLIT_SUCCESS'		=> 'Os temas seleccionados foron separados correctamente',
	'TOPIC_TIME'				=> 'Hora do tema',
	'TOPIC_TYPE_CHANGED'		=> 'Tipo de tema mudado correctamente',
	'TOPIC_UNLOCKED_SUCCESS'	=> 'O tema seleccionado foi desbloqueado',
	'TOTAL_WARNINGS'			=> 'Advertencias Totais',

	'UNAPPROVED_POSTS_TOTAL'		=> 'Hai un total de <strong>%d</strong> mensaxes agardando por aprobación',
	'UNAPPROVED_POSTS_ZERO_TOTAL'	=> 'Non hai mensaxe ningunha agardando por aprobación',
	'UNAPPROVED_POST_TOTAL'			=> 'Hai un total de <strong>1</strong> mensaxe agardando por aprobación',
	'UNLOCK'						=> 'Desbloquear',
	'UNLOCK_POST'					=> 'Desbloquear mensaxe',
	'UNLOCK_POST_EXPLAIN'			=> 'Permitir a edición',
	'UNLOCK_POST_POST'				=> 'Desbloquear mensaxe',
	'UNLOCK_POST_POST_CONFIRM'		=> 'Seguro que queres permitir a edición desta mensaxe?',
	'UNLOCK_POST_POSTS'				=> 'Desbloquear mensaxes seleccionadas',
	'UNLOCK_POST_POSTS_CONFIRM'		=> 'Seguro que queres permitir a edición das mensaxes seleccionadas?',
	'UNLOCK_TOPIC'					=> 'Desbloquear tema',
	'UNLOCK_TOPIC_CONFIRM'			=> 'Seguro que queres desbloquear este tema?',
	'UNLOCK_TOPICS'					=> 'Desbloquear temas seleccionados',
	'UNLOCK_TOPICS_CONFIRM'			=> 'Seguro que queres desbloquear todos os temas seleccionados?',
	'USER_CANNOT_POST'				=> 'Non podes publicar mensaxes neste foro',
	'USER_CANNOT_REPORT'			=> 'Non podes informar sobre as mensaxes deste foro',
	'USER_FEEDBACK_ADDED'			=> 'Feedback engadido correctamente.',
	'USER_WARNING_ADDED'			=> 'Usuario advertido correctamente.',

	'VIEW_DETAILS'			=> 'Visualizar detalles',
	'VIEW_POST'				=> 'Ver mensaxe',

	'WARNED_USERS'			=> 'Usuarios con advertencias',
	'WARNED_USERS_EXPLAIN'	=> 'Esta é unha lista de usuarios con advertencias aínda activas',
	'WARNING_PM_BODY'		=> 'O seguinte é unha advertencia que che envía un administrador ou moderador deste sitio.[quote]%s[/quote]',
	'WARNING_PM_SUBJECT'	=> 'Advertencia de Taboleiro Enviada',
	'WARNING_POST_DEFAULT'	=> 'Este é un aviso relacionado con esta mensaxe túa: %s',
	'WARNINGS_ZERO_TOTAL'	=> 'Non hai advertencias',

	'YOU_SELECTED_TOPIC'	=> 'Seleccionaches o tema número %d: %s',

	'report_reasons'		=> array(
		'TITLE'	=> array(
			'WAREZ'		=> 'software pirata',
			'SPAM'		=> 'Publicidade molesta (spam)',
			'OFF_TOPIC'	=> 'Fóra do tema (Off-topic)',
			'OTHER'		=> 'Outros'
		),
		'DESCRIPTION' => array(
			'WAREZ'		=> 'Esta mensaxe contén ligazóns a software ilegal ou pirata',
			'SPAM'		=> 'A mensaxe informada só ten o propósito de facer publicidade dun sitio web ou outro producto',
			'OFF_TOPIC'	=> 'A mensaxe informada non ten que ver co tema',
			'OTHER'		=> 'A mensaxe informada non corresponde a ningunha outra categoría, por favor usa o campo de descrición'
		)
	),
));

?>