<?php
/**
*
* viewtopic [Portuguese]
*
* @package language
* @version $Id: viewtopic.php,v 1.17 2007/05/10 15:31:21 acydburn Exp $
* @copyright (c) 2005 phpBB Group
* @license http://opensource.org/licenses/gpl-license.php GNU Public License
*
**************************************************************************************************************
* Translation by: Asturmas - f.esteves@ptservidor.com  |  http://www.alojagratis.org & http://www.ptservidor.com
**************************************************************************************************************
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
	'ATTACHMENT' => 'Anexo',
	'ATTACHMENT_FUNCTIONALITY_DISABLED' => 'Anexos foram desactivados',

	'BOOKMARK_ADDED' => 'Tópico adiccionado ao Favoritos.',
	'BOOKMARK_REMOVED' => 'Tópico removido dos Favoritos.',
	'BOOKMARK_TOPIC' => 'Adicionar Tópico aos Favoritos',
	'BOOKMARK_TOPIC_REMOVE' => 'Remover Tópico dos Favoritos',
	'BUMPED_BY' => 'Ressuscitado pela última vez por %1$s em %2$s.',
	'BUMP_TOPIC' => 'Ressuscitar Tópico',

	'CODE' => 'Código',

	'DELETE_TOPIC' => 'Eliminar Tópico',
	'DOWNLOAD_NOTICE' => 'Você não tem permissão para ver os ficheiros anexados nesta mensagem.',

	'EDITED_TIMES_TOTAL' => 'última vez editado por %1$s �s %2$s, editado %3$d vezes no total',
	'EDITED_TIME_TOTAL' => 'última vez editado por %1$s �s %2$s, editado %3$d vez no total',
	'EMAIL_TOPIC' => 'Enviar a um amigo',
	'ERROR_NO_ATTACHMENT' => 'O anexo seleccionado não existe',

	'FILE_NOT_FOUND_404' => 'O arquivo <strong>%s</strong> não existe.',
	'FORK_TOPIC' => 'Copiar Tópico',

	'LINKAGE_FORBIDDEN' => 'Você não esta autorizado a ver o link para esta pagina.',
	'LOGIN_NOTIFY_TOPIC' => 'Você foi notificado sobre este tópico, faça o seu login para vê-lo.',
	'LOGIN_VIEWTOPIC' => 'O Administrador exige que você esteja registado e ligado para ver este tópico.',

	'MAKE_ANNOUNCE'				=> 'Alterar para “Anúncio”',
	'MAKE_GLOBAL'				=> 'Alterar para “Global”',
	'MAKE_NORMAL'				=> 'Alterar para “Tópico Normal”',
	'MAKE_STICKY'				=> 'Alterar para “Fixo”',
	'MAX_OPTIONS_SELECT'		=> 'Você pode seleccionar até <strong>%d</strong> opções',
	'MAX_OPTION_SELECT'			=> 'Você pode seleccionar somente <strong>1</strong> opção',
	'MISSING_INLINE_ATTACHMENT'	=> 'O anexo <strong>%s</strong> não está disponível',
	'MOVE_TOPIC'				=> 'Mover Tópico',

	'NO_ATTACHMENT_SELECTED'=> 'Você não seleccionou nenhum anexo para download.',
	'NO_NEWER_TOPICS' => 'Não h� novos Tópicos neste fórum',
	'NO_OLDER_TOPICS' => 'Não h� Tópicos antigos neste fórum',
	'NO_UNREAD_POSTS' => 'Não h� Tópicos não lidos.',
	'NO_VOTE_OPTION' => 'Você deve seleccionar uma opção para votar.',
    'NO_VOTES'				=> 'Sem votos',

	'POLL_ENDED_AT'			=> 'Votação encerrada em %s',
	'POLL_RUN_TILL'			=> 'A votação será fechada em %s',
	'POLL_VOTED_OPTION'		=> 'Você votou nesta opção',
	'PRINT_TOPIC'			=> 'Versão para impressão',

	'QUICK_MOD'				=> 'Ferramentas Rápidas',
	'QUOTE'					=> 'Citar',

	'REPLY_TO_TOPIC'		=> 'Responder a este Tópico',
	'RETURN_POST'			=> '%sVoltar a mensagem%s',

	'SUBMIT_VOTE'			=> 'Votar',

	'TOTAL_VOTES'			=> 'Total de votos',

	'UNLOCK_TOPIC'			=> 'Desbloquear Tópico',

	'VIEW_INFO'				=> 'Detalhes da Mensagem',
	'VIEW_NEXT_TOPIC'		=> 'Próximo Tópico',
	'VIEW_PREVIOUS_TOPIC'	=> 'Tópico Anterior',
	'VIEW_RESULTS'			=> 'Ver Resultado',
	'VIEW_TOPIC_POST'		=> '1 mensagem',
	'VIEW_TOPIC_POSTS'		=> '%d mensagens',
	'VIEW_UNREAD_POST'		=> 'Primera mensagem não lida',
	'VISIT_WEBSITE'			=> 'WWW',
	'VOTE_SUBMITTED'		=> 'O seu voto foi registado.',
	'VOTE_CONVERTED'        => 'Não e possivel alterar votos .',

	'WROTE'					=> 'Escreveu'
));

?>
